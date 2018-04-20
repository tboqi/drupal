<?php
/**
 * @file
 * The primary PHP file for this theme.
 */

function bootstrapblog_preprocess_html(&$variables) {
  // Add default theme css
  drupal_add_css(path_to_theme() . '/css/style.css', array('group' => CSS_THEME, 'preprocess' => FALSE));
  // Adding theme specific js
  drupal_add_js(path_to_theme() . '/js/script.js');
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function bootstrapblog_process_html(&$variables) {

}

/**
 * Override or insert variables into the page template.
 */
function bootstrapblog_process_page(&$variables) {

}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function bootstrapblog_preprocess_maintenance_page(&$variables) {

}

/**
 * Override or insert variables into the maintenance page template.
 */
function bootstrapblog_process_maintenance_page(&$variables) {

}

/**
 * Override or insert variables into the node template.
 */
function bootstrapblog_preprocess_node(&$variables) {
  $node = $variables['node'];
  $custom_date = format_date($node->created, 'custom', 'F d, Y');
	if (variable_get('node_submitted_' . $node->type, TRUE)) {
    $variables['submitted'] = t('!datetime by !username', array('!username' => $variables['name'], '!datetime' => $custom_date));
  }
  else {
    $variables['submitted'] = '';
  }
}

/**
 * Override or insert variables into the block template.
 */
function bootstrapblog_preprocess_block(&$variables) {

}

/**
 * Implements theme_menu_tree().
 */
function bootstrapblog_menu_tree($variables) {

}
