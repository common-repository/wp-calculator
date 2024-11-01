<?php
/*
Plugin Name: WP Calculator
Plugin URI: http://wp123.info/plugins/wp-calculator
Description: Simple calculator for wordpress written in php.
Version: 0.1
Author: Levani Melikishvili
Author URI: http://wp123.info
*/

/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function wp123_calculator() { ?>
<form name="calculator">
<table border="0" cellpadding="2" cellspacing="0" background="wp-content/plugins/wp calculator/background.jpg" width="150" height="259">
<tr><td align="center" style="padding-bottom:0px;padding-top:15px"><input type="text" name="win" value="0" style="height:30px;width:190px;text-align:right;font-size:20px;font-weight:bold;border:1px solid #000;padding-right:2px;" maxlength='15'></td></tr>
<tr><td>
<table border="0" cellpadding="5" cellspacing="1" align="center">

<tr><td style="padding-top:0px"><input type="button" value="CE" style="width:40px" onClick="calc('CE')"></td>
<td style="padding-top:0px"><input type="button" value="C" style="width:40px" onClick="calc('C')"></td>
<td style="padding-top:0px"><input type="button" value="+/-" style="width:40px" onClick="calc('+/-')"></td>
<td style="padding-top:0px"><input type="button" value="%" style="width:40px" onClick="calc('%')"></td></tr>

<tr><td><input type="button" value="7" style="width:40px" onClick="calc('7')"></td>
<td><input type="button" value="8" style="width:40px" onClick="calc('8')"></td>
<td><input type="button" value="9" style="width:40px" onClick="calc('9')"></td>
<td><input type="button" value="/" style="width:40px" onClick="calc('/')"></td></tr>

<tr><td><input type="button" value="4" style="width:40px" onClick="calc('4')"></td>
<td><input type="button" value="5" style="width:40px" onClick="calc('5')"></td>
<td><input type="button" value="6" style="width:40px" onClick="calc('6')"></td>
<td><input type="button" value="x" style="width:40px" onClick="calc('*')"></td></tr>

<tr><td><input type="button" value="1" style="width:40px" onClick="calc('1')"></td>
<td><input type="button" value="2" style="width:40px" onClick="calc('2')"></td>

<td><input type="button" value="3" style="width:40px" onClick="calc('3')"></td>
<td><input type="button" value="-" style="width:40px" onClick="calc('-')"></td></tr>

<tr><td><input type="button" value="0" style="width:40px" onClick="calc('0')"></td>
<td><input type="button" value="." style="width:40px" onClick="calc('.')"></td>
<td><input type="button" value="=" style="width:40px" onClick="calc('=')"></td>
<td><input type="button" value="+" style="width:40px" onClick="calc('+')"></td></tr>
</table>
</td></tr>
</table>
</form>

<?php } ?>

<?php

define('PLUGIN_DIR', get_bloginfo('url') . '/wp-content/plugins/'.dirname(plugin_basename(__FILE__)).'/');

function widget_wp123_calculator_register() {
function widget_wp123_calculator($args) {
          extract($args);
      ?>
              <?php echo $before_widget; ?>
                  <?php echo $before_title
                      . ''
                      . $after_title; ?>
                  <?php wp123_calculator() ?>
              <?php echo $after_widget; ?>
      <?php
      }
	  register_sidebar_widget('WP Calculator','widget_wp123_calculator');}
add_action('init', widget_wp123_calculator_register);

function cp_header(){
	echo '<script type="text/javascript" src="' . PLUGIN_DIR . 'calculate.js"></script>';
	echo "\n";

}

// Hook for wordpress header
add_action('wp_head', 'cp_header');
?>