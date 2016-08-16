<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
global $current_user;
$module_name = "Contacts";
$searchFields['Contacts'] = 
	array (
		'first_name' => array( 'query_type'=>'default'),
		'last_name'=> array('query_type'=>'default'),
		'search_name'=> array('query_type'=>'default','db_field'=>array('first_name','last_name'),'force_unifiedsearch'=>true),
		'account_name'=> array('query_type'=>'default','db_field'=>array('accounts.name')),
		'lead_source'=> array('query_type'=>'default','operator'=>'=', 'options' => 'lead_source_dom', 'template_var' => 'LEAD_SOURCE_OPTIONS'),
		'do_not_call'=> array('query_type'=>'default', 'input_type' => 'checkbox', 'operator'=>'='),
		'phone'=> array('query_type'=>'default','db_field'=>array('phone_mobile','phone_work','phone_other','phone_fax','assistant_phone')),
		'email'=> array(
			'query_type' => 'default',
			'operator' => 'subquery',
			'subquery' => 'SELECT eabr.bean_id FROM email_addr_bean_rel eabr JOIN email_addresses ea ON (ea.id = eabr.email_address_id) WHERE eabr.deleted=0 AND ea.email_address LIKE',
			'db_field' => array(
				'id',
			),
		),	
        'favorites_only' => array(
            'query_type'=>'format',
            'operator' => 'subquery',
            'subquery' => 'SELECT favorites.parent_id FROM favorites
			                    WHERE favorites.deleted = 0
			                        and favorites.parent_type = "'.$module_name.'"
			                        and favorites.assigned_user_id = "' .$current_user->id . '") OR NOT ({0}',
            'db_field'=>array('id')),
		'assistant'=> array('query_type'=>'default'),
		'address_street'=> array('query_type'=>'default','db_field'=>array('primary_address_street','alt_address_street')),
		'address_city'=> array('query_type'=>'default','db_field'=>array('primary_address_city','alt_address_city')),
		'address_state'=> array('query_type'=>'default','db_field'=>array('primary_address_state','alt_address_state')),
		'address_postalcode'=> array('query_type'=>'default','db_field'=>array('primary_address_postalcode','alt_address_postalcode')),
		'address_country'=> array('query_type'=>'default','db_field'=>array('primary_address_country','alt_address_country')),
		'current_user_only'=> array('query_type'=>'default','db_field'=>array('assigned_user_id'),'my_items'=>true, 'vname' => 'LBL_CURRENT_USER_FILTER', 'type' => 'bool'),
		'assigned_user_id'=> array('query_type'=>'default'),
        'account_id'=> array('query_type'=>'default','db_field'=>array('accounts.id')),
        'campaign_name'=> array('query_type'=>'default'),
		//Range Search Support 
	    'range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'start_range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'end_range_date_entered' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
	    'start_range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),
        'end_range_date_modified' => array ('query_type' => 'default', 'enable_range_search' => true, 'is_date_field' => true),	
	    //Range Search Support 			
    'activity' => array ('query_type'=>'default'),
    'inform' => array ('query_type'=>'default'),
	);
?>
