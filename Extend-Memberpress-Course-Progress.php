<?php
/*
* Plugin Name: PFS Extend Memberpress Course Progress
* Description: Default is 6, this will extend to 20.
* Version: 1.0.1
* Author: Pink Fizz Social
* Author URI: http://pinkfizz.social
* License: GPL2
*/

/**
 * Extend course progress screen to show more entries than the default of 6
 * */
function mpcs_courses_per_page() {
  return 20;
}
add_filter('mpcs_courses_per_page', 'mpcs_courses_per_page');