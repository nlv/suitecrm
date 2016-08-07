<?php

$dictionary["accounts_contacts2"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'accounts_contacts2' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_contacts2',
      'join_key_lhs' => 'account_id',
      'join_key_rhs' => 'contact_id',
    ),
  ),
  'table' => 'accounts_contacts2',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'account_id',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'contact_id',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'accounts_contacts2pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'accounts_contacts2_account_id',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'account_id',
      ),
    ),
    2 => 
    array (
      'name' => 'accounts_contacts2_contact_id',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'contact_id',
      ),
    ),
  ),
);

