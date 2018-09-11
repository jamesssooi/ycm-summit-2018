/**
 * YCM Summit 2018: Distributed Economy
 * @author James Ooi <wengteikooi@gmail.com>
 * @organization Young Corporate Malaysians
 */

import 'slick-carousel';
import $ from 'jquery';

window.addEventListener('DOMContentLoaded', () => {
  $('#article-item-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: false,
    nextArrow: '.article-item-control.is-next',
    prevArrow: '.article-item-control.is-prev',
  });
});