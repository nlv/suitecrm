<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $current_user;
$module_name = "Project";
$searchFields['Project'] = 
    array (
        'name' => array( 'query_type'=>'default'),
        'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
        'favorites_only' => array(
            'query_type'=>'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = "'.$module_name.'"
			                        and favorites.assigned_user_id = "' .$current_user->id . '") OR NOT ({0}',
            'db_field'=>array('id')),
        'sector'=> array('query_type'=>'default', 'options' => 'sectors_dom', 'template_var' => 'SECTOR_FILTER'),
		//Range Search Support 
	   'range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'start_range_date_entered' => array ('query_type' => 'default',  'enable_range_search' => true, 'is_date_field' => true),
	   'end_range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'start_range_date_modified' => array ('query_type' => 'default',  'enable_range_search' => true, 'is_date_field' => true),
       'end_range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),	
	    
	   'range_estimated_start_date' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'start_range_estimated_start_date' => array ('query_type' => 'default',  'enable_range_search' => true, 'is_date_field' => true),
	   'end_range_estimated_start_date' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'range_estimated_end_date' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	   'start_range_estimated_end_date' => array ('query_type' => 'default',  'enable_range_search' => true, 'is_date_field' => true),
       'end_range_estimated_end_date' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),	
		//Range Search Support 				
    );
?>
