<?php
/*
Plugin Name: Days Until
Plugin URI: http://ericmedin.com/musings/days-until-plugin/
Description: Outputs the number of days until a specified date.
Version: 1.1
Author: Eric Medin
Author URI: http://ericmedin.com/
License: 

Copyright (c) 2012 Eric Medin

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.
*/

// [days_until date="09/01/2012"]
function days_until_func( $atts ) {
	extract( shortcode_atts( array(
		'date' => '-1',
	), $atts ) );
	
	$cdate = $date == '-1' ? current_time('timestamp') : strtotime($date);
	$today = current_time('timestamp');
	$difference = $cdate - $today;
	if ($difference < 0) { $difference = 0; }

	return ceil($difference/60/60/24);
}
add_shortcode( 'days_until', 'days_until_func' );
?>