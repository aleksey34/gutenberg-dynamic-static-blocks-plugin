<?php
/**
 * Plugin Name:       Alex Guten Example
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.1
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       guten-todo-list
 *
 * @package           create-block
 */

/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */

define("ALEX_PLUGIN_GUTEN_DIR", __DIR__ );

require_once ALEX_PLUGIN_GUTEN_DIR .'/inc/api/class-alex-rest-prepare-dynamic.php';

require_once ALEX_PLUGIN_GUTEN_DIR .'/inc/class-alex-custom-guten-category.php';

require_once ALEX_PLUGIN_GUTEN_DIR . '/inc/class_alex_guten_block_init.php';

require_once ALEX_PLUGIN_GUTEN_DIR . '/inc/blocks/class-alex-events_all_events_dynamic.php';

// prepare rest api requist 
new Alex_Rest_Prepare_Dynamic();

// init static blocks
new AlexGutenBlockStaticInit();

// create custom categories 
// change slug category in block.json for set widget category
new AlexCustomGutenCategory();


// init block --  all-events  Dynamic block 
// Create new class for new dynamic block and add here
new AlexEventsAllEventsDynamic();




// function alex_guten_block_plugin_todo_init() {

//     /**
//     *test block init
//     */
//         register_block_type( __DIR__ . '/build/test-block' );
    
    
//     /**
//     *todo list init
//     */
//         register_block_type( __DIR__ . '/build/todo-list' );
    
    
        
//     }
//     add_action( 'init',  'alex_guten_block_plugin_todo_init' );


