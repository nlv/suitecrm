<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




		$subpanel_layout = array(
	
		'top_buttons' => array(
		),
	
		'where' => '',
	
	
		'list_fields' => array(
	        'name'=>array(
			 	'vname' => 'LBL_LIST_NAME',
				'widget_class' => 'SubPanelDetailViewLink',
				'width' => '70%',
			),
		'sector'=>array(
			 'vname' => 'LBL_SECTOR',
			 'width' => '15%',
		),
			'date_start'=>array(
			 	'vname' => 'LBL_DATE_START',
				'width' => '15%',
			),
	        'date_finish'=>array(
	            'vname' => 'LBL_DATE_FINISH',
	            'width' => '15%',
	        ),
		),
	);
?>
