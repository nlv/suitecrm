<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$viewdefs['Project']['QuickCreate'] = array(
					'templateMeta' => array('maxColumns' => '2', 
                        'widths' => array(
                                        array('label' => '10', 'field' => '30'), 
                                        array('label' => '10', 'field' => '30')
                                        ),
                       ),
'panels' =>

array (
  
  array (
    'name',
    'status'
  ),
  
  array (
    'estimated_start_date',
    'estimated_end_date'
  ),
  
  array('priority',),
  array('assigned_user_name',
  ),
  array (
    array (
      'name' => 'description',
    ),
    'sector',
  ),

),

);
?>
