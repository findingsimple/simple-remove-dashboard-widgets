<?php
/*
Plugin Name: Simple Remove Dashboard Widgets
Plugin URI: http://plugins.findingsimple.com
Description: Drop in for removing some of the default dashboard widgets. 
Version: 1.0
Author: Finding Simple
Author URI: http://findingsimple.com
License: GPL2
*/
/*
Copyright 2013  Finding Simple  (email : plugins@findingsimple.com)

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

if ( ! class_exists( 'Simple_Remove_Dashboard_Widgets' ) ) :

/**
 * Plugin Main Class.
 *
 * @package Simple Remove Dashboard Widgets
 * @author Jason Conroy <jason@findingsimple.com>
 * @since 1.0
 */
class Simple_Remove_Dashboard_Widgets {
	
	/**
	 * Initialise
	 */
	function Simple_Remove_Dashboard_Widgets() {
		
		add_action( 'wp_dashboard_setup', array( &$this , 'simple_remove_individual_widgets' ) );

	}

	/**
	 * Remove individual dashboard widgets
	 */
	function simple_remove_individual_widgets() {
	
		//remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		//remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		//remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal');
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal');

		//remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side');
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'side');
		
	}		

}

$Simple_Remove_Dashboard_Widgets = new Simple_Remove_Dashboard_Widgets();

endif;