<?php
$dictionary['Contact']['fields']['accounts2'] = array(
    'name' => 'accounts2',
    'type' => 'link',
    'relationship' => 'accounts_contacts2',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNTS2_SUBPANEL_TITLE',
);

$dictionary['Contact']['fields']['activity'] = array(
			'name' => 'activity',
			'vname' => 'LBL_ACTIVITY',
			'type' => 'enum',
			'options' => 'contact_activity_dom',
			'len' => '255',
);

$dictionary['Contact']['fields']['inform'] = array(
        'massupdate' => true,
        'name' => 'inform',
        'vname' => 'LBL_INFORM',
        'type' => 'enum',
        'options' => 'checkbox_dom',
        'len' => '255',
);
