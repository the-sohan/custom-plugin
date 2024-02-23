<?php
/*
 * Plugin Name:       Custom Plugin
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Employee management system
 * Version:           1.0
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       custom-plugin
 * Domain Path:       /languages
 */

define( "EMS_PLUGIN_PATH", plugin_dir_path(__FILE__) );
define( "EMS_PLUGIN_URL", plugin_dir_url(__FILE__) );


 add_action( 'admin_menu', 'cp_add_admin_menu');
 function cp_add_admin_menu() {
    // add_menu_page(  $page_title,                                  $menu_title,       $capability,       $menu_slug,         $function,    $icon_url,        $position);
    add_menu_page( "Employee System | Employee Management System" , "Employee System", "manage_options", "employee-system", "ems_crud_system", "dashicons-admin-home", 23);

    // add_submenu_page($parent_slug,      $page_title,    $menu_title,     $capability,       $menu_slug,          $function);
    add_submenu_page( "employee-system", "Add employee", "Add employeep", "manage_options", "employee-system", "ems_crud_system" );
    add_submenu_page( "employee-system", "List employee", "List employeep", "manage_options", "ems-list-employee", "ems_list_system" );


 }

//  Menu handle callback
 function ems_crud_system() {
    include_once( EMS_PLUGIN_PATH . "pages/add-employee.php" );
 }

 function ems_list_system() {
    include_once( EMS_PLUGIN_PATH . "pages/list-employee.php" );
 }

//  class 9