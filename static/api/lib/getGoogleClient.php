<?php
require __DIR__ . '/../vendor/autoload.php';

/**
 * Define the path containing the service account keys.
 *
 * @var string
 */
define('AUTH_FILE', __DIR__ . '/../private/credentials.json');

/**
 * Define the path to store the access token.
 *
 * @var string
 */
define('CREDENTIALS_FILE', __DIR__ . '/../private/token.json');

/**
 * Returns an authorized Google API client.
 *
 * @return Google_Client
 */
function getGoogleClient() {
  $client = new Google_Client();
  $client->setApplicationName('registration-api');
  $client->setScopes(Google_Service_Sheets::SPREADSHEETS);
  $client->setAuthConfig(AUTH_FILE);
  $client->setAccessType('offline');
  return $client;
}
