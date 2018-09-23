<?php
require __DIR__ . '/vendor/autoload.php';
require 'lib/getGoogleClient.php';

/**
 * The Google Form URL.
 *
 * @var string
 */
define('FORM_URL', 'https://docs.google.com/forms/d/e/1FAIpQLSf3PhLaSBihTnp45y0V5fMsWkskDNHsA07xAtt60KT5BnXbQw/viewform');


/**
 * The Google Sheets file ID.
 *
 * @var string
 */
define('SPREADSHEET_ID', '1C67b9A2IvpNVoKQoZjRZ_VgjJuV0jIGIIQQBX8Zn94c');


/**
 * The Google Sheets range to edit.
 *
 * @var string
 */
define('SPREADSHEET_RANGE', 'Microsite Responses!A2:D');


/**
 * The log file path.
 *
 * @var string
 */
define('LOG_PATH', __DIR__ . '/private/register.log');


/**
 * Script entry point.
 *
 * @return void
 */
function main() {
  // Validate incoming data
  try {
    validatePostData($_POST);
  } catch (Exception $e) {
    respondWithError($e->getMessage(), 400);
  }

  // Collect data into variable
  $data = array(
    'name'      => $_POST['name'],
    'email'     => $_POST['email'],
    'contactno' => $_POST['contactno']
  );

  // Saves input data into Google Spreadsheet
  try {
    saveInGoogleSheets($data);
  } catch (Exception $e) {
    $error = preg_replace('/\r|\n/', '', $e->getMessage());
    logMessage(sprintf('Failed to save registrant in Google Sheets: %s <%s> - %s', $data['name'], $data['email'], $error), 'ERROR');
  }
  
  // Generate redirection URL
  try {
    $redirectUrl = generateGoogleFormURL($data);
    header('Location: ' . $redirectUrl);
  } catch (Exception $e) {
    $error = preg_replace('/\r|\n/', '', $e->getMessage());
    logMessage(sprintf('Failed to redirect registrant: %s <%s> - %s', $data['name'], $data['email'], $error), 'ERROR');
  }

  logMessage(sprintf('Received new registrant: %s <%s>', $data['name'], $data['email']));
  die();
}


/**
 * Validates input data.
 *
 * @throws Exception
 */
function validatePostData($data) {
  if (!isset($data['name'])) {
    throw new Exception("Missing 'name' field");
  }
  if (!isset($data['email'])) {
    throw new Exception("Missing 'email' field");
  }
  if (!isset($data['contactno'])) {
    throw new Exception("Missing 'contactno' field");
  }
}


/**
 * Saves the input data into a Google Sheet.
 *
 * @return boolean
 */
function saveInGoogleSheets($data) {
  $client = getGoogleClient();
  $sheets = new \Google_Service_Sheets($client);

  // Create a new row value
  $valueRange = new \Google_Service_Sheets_ValueRange();
  $valueRange->setValues(array(
    'values' => array(date_format(date_create(), DATE_ISO8601), $data['name'], $data['email'], $data['contactno'])
  ));

  // Inset new row into Google Sheets
  $sheets->spreadsheets_values->append(SPREADSHEET_ID, SPREADSHEET_RANGE, $valueRange, array(
    'valueInputOption' => 'USER_ENTERED'
  ));
}


/**
 * Generates a Google Form URL with pre-filled fields with the given data.
 *
 * @return string
 */
function generateGoogleFormURL($data) {
  $fieldName = array(
    'name'      => 'entry.1829444857',
    'email'     => 'entry.1251102372',
    'contactno' => 'entry.1081583319',
  );

  $qsArray = [];
  foreach ($data as $key => $value) {
    if (isset($fieldName[$key])) {
      $qsArray[] = $fieldName[$key] . '=' . urlencode($data[$key]);
    }
  }

  return appendQueryString(FORM_URL, join('&', $qsArray));
}


/**
 * Send an error response.
 *
 * @return void
 */
function respondWithError($message, $httpCode = 500) {
  header('Content-Type: application/json');
  http_response_code($httpCode);
  $json = json_encode([
    'ok'    => false,
    'error' => $message,
  ], JSON_PRETTY_PRINT);
  echo $json;
  exit();
}


/**
 * Appends a URL with a given query string.
 */
function appendQueryString($url, $qs) {
  $parsed = parse_url($url);

  // Add trailing slash to original URL if only a root URL is given
  // eg. www.example.com --> www.example.com/
  if ($parsed['path'] == NULL) {
    $url = $url . '/';
  }

  // Add the query string separator
  if ($parsed['query'] == NULL) {
    $url = $url . '?';
  } else {
    $url = $url . '&';
  }

  return $url . $qs;
}

/**
 * Logs an error message.
 *
 * @return void
 */
function logMessage($message, $prefix = 'INFO') {
  $date = date_format(date_create(), DATE_RFC822);
  $s = sprintf('[%s] [%s] %s', $date, $prefix, $message);
  file_put_contents(LOG_PATH, $s . PHP_EOL, FILE_APPEND | LOCK_EX);
}


// Call the entry function
main();
