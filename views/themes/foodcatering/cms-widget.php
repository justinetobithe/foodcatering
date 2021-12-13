<?php

/*
By Default, the system has its own set of sidebars.
However, users/developers are allowed to set/customize their own sidebars and widgets.

cms_widget_set_sidebar()
-is used to replace existing sidebars with custom sidebar

cms_widget_add_sidebar()
-is used to add new sidebars

cms_widget_add_component()
-is used to add additional widget elements
*/
cms_widget_set_sidebar(array(
	array(
		'sidebar_id'			=> 'primary-sidebar',
		'sidebar_name'		=> 'Primary Sidebar',
	),
));

cms_widget_add_sidebar(array(
	array(
		'sidebar_id'			=> 'footer-1',
		'sidebar_name'		=> 'Footer 1',
	),
	array(
		'sidebar_id'			=> 'footer-2',
		'sidebar_name'		=> 'Footer 2',
	),
));

cms_widget_add_component(array(
	array(
		'widget_id'								=> 'custom-text',
		'widget_name' 						=> 'Custom Text',
		'widget_description'			=> "This is a custom widget. Configs are found inside the theme files",
		'widget_sidebar_template'	=> 'cms-widget-layout-sidebar',
		'widget_fields'	=> array(
			array('label'	=> 'Title', 'type'	=> 'text',), array('label'	=> '', 'type'	=> 'textarea',),
		),
		'widget_function'				=> 'custom-text'
	),

	array(
		'widget_id'								=> 'theme-categories',
		'widget_name' 						=> 'Theme Categories',
		'widget_description'			=> "list of categories (Theme Design)",
		'widget_sidebar_template'	=> 'cms-widget-layout-sidebar',
		'widget_fields'	=> array(
			array('label'	=> 'Title', 'type'	=> 'text',),
			array('label'	=> 'Display as dropdown', 'type'	=> 'checkbox',),
			array('label'	=> 'Show post counts', 'type'	=> 'checkbox',),
			array('label'	=> 'Show heirarchy', 'type'	=> 'checkbox',),
		),
		'widget_function'				=> 'theme-categories'
	),
	array(
		'widget_id'								=> 'theme-latest-posts',
		'widget_name' 						=> 'Theme Latest Posts',
		'widget_description'			=> "Your site's latest posts.",
		'widget_fields'	=> array(
			array('label'	=> 'Title', 'type'	=> 'text',),
			array('label'	=> 'Number of posts to show', 'type'	=> 'text-sm',)
		),
		'widget_function'					=> 'theme-latest-posts',
	)
));
 


/*
To create widget processor, function name should have the following prefix: 'widget_processor_'
*/
function widget_processor_custom_text($fields)
{
	$widget_output = '';
	if (isset($fields) && count($fields) == 2) {
		$title 		= isset($fields[0]) && isset($fields[0]->val) ? $fields[0]->val : '';
		$content 	= isset($fields[1]) && isset($fields[1]->val) ? $fields[1]->val : "";

		$widget_output  = "";
		$widget_output .= $title != "" ? '<h2 class="sidebar-title">' . $title . '</h2>' : '';
		$widget_output .= '<div class="sidebar-content">' . $content . '</div>';
	}
	return $widget_output;
}

function widget_processor_theme_categories($fields){
	$db = new Database();
	$widget_output = '';
	if (isset($fields) && count($fields) == 4) {
	  $title 		= isset($fields[0]) && isset($fields[0]->val) ? $fields[0]->val : '';
	  $option1 	= isset($fields[1]) && isset($fields[1]->val) ? $fields[1]->val : 'N';
	  $option2 	= isset($fields[2]) && isset($fields[2]->val) ? $fields[2]->val : 'N';
	  $option3 	= isset($fields[3]) && isset($fields[3]->val) ? $fields[3]->val : 'N';
  
	  $widget_output = Site::$var['categories']['pre_title'] . $title . Site::$var['categories']['post_title'] . Site::_get_categories(Site::$var['categories']) . Site::$var['categories']['post_list'];
	}
	return $widget_output;
  }
  
  function widget_processor_theme_latest_posts($fields){
	$db = new Database();
	$widget_output = '';
	if (isset($fields)) {
	  $title 		= isset($fields[0]) && isset($fields[0]->val) ? $fields[0]->val : '';
	  $row_count 	= isset($fields[1]) && isset($fields[1]->val) ? $fields[1]->val : 5;  
	  $view_date 	= isset($fields[2]) && isset($fields[2]->val) ? $fields[2]->val : 'Y';  
  
	  $widget_output = Site::$var['latest_post']['pre_title'] . $title . Site::$var['latest_post']['post_title'] . Site::_get_latest_post(Site::$var['latest_post']) . Site::$var['latest_post']['post_list'];
	}
	return $widget_output;
  }
