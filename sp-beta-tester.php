<?php

/*
Plugin Name: SendPress Beta Tester
Plugin URI: http://www.sendpress.com/
Description: Update your SendPress plugin straight from the GitHub repository and run the bleeding edge version. ** This is not recommended for production sites.
Version: 1.0.2
Author: Josh Lyford
Author URI: http://www.joshlyford.com/
License: GPLv2
*/

/*  
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

add_action('init', 'sp_beta_tester_init');
function sp_beta_tester_init() {
    require_once('classes/class-sp-github-updater.php');
    if( is_admin() )
        new SP_GitHub_Updater();
}