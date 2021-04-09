<?php
/**
 * @package Earthquake
 * 
 * Plugin Name: Earthquake Catalog API
 * Plugin URI: https://github.com/itwizz26
 * Description: Automatically and periodically queries the Earthquake Catalog API
 * Version: 1.0
 * Author: Tankiso Mathebula (itwizz)
 * Author URI: https://github.com/itwizz26
 * License: GPLv2 or later
 * Text Domain: Earthquake Catalog API
 */

 /*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

define ('EARTHQUAKE_PLUGIN_FILE', __FILE__);
register_activation_hook (EARTHQUAKE_PLUGIN_FILE, 'earthquake_plugin_activation');
register_deactivation_hook(EARTHQUAKE_PLUGIN_FILE, 'earthquake_plugin_deactivation'); 

function earthquake_plugin_activation() {
    
    if (!current_user_can ('activate_plugins')) return;

    global $wpdb;
  
    if (null === $wpdb->get_row( "SELECT post_name FROM {$wpdb->prefix}posts WHERE post_name = 'earthquake-catalog-slug'", 'ARRAY_A')) {
        
        $current_user = wp_get_current_user();
        
        // create post object
        $page = [
            'post_title'  => __( 'Earthquake Catalog' ),
            'post_status' => 'publish',
            'post_author' => $current_user->ID,
            'post_type'   => 'page',
        ];
        
        // insert the post into the database
        wp_insert_post ($page);
    }
}

function earthquake_plugin_deactivation() {

    $post = get_page_by_path ('earthquake-catalog-slug', '', 'post');
    
    wp_delete_post ($postId->ID, true);
}
