<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$layout_defs['Accounts']['subpanel_setup']['contacts2'] = array(
    'order' => 50,
    'title_key' => 'LBL_CONTACTS2_SUBPANEL_TITLE',
    'sort_order' => 'asc',
    'sort_by' => 'date_entered',
    'module'=>'Contacts',
    'top_buttons' => array (
         0 => array (
             'widget_class' => 'SubPanelTopButtonQuickCreate',
             ),
         1 => array (
             'widget_class' => 'SubPanelTopSelectButton',
             'mode' => 'MultiSelect',
             ),
      ),
    'subpanel_name' => 'default',
    'get_subpanel_data' => 'contacts2',
);
