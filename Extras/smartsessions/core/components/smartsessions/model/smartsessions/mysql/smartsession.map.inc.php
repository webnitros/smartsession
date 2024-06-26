<?php
$xpdo_meta_map['smartSession']= array (
  'package' => 'smartsessions',
  'version' => '1.1',
  'table' => 'smart_sessions',
  'extends' => 'xPDOObject',
  'tableMeta' => 
  array (
    'engine' => 'InnoDB',
  ),
  'fields' => 
  array (
    'id' => '',
    'access' => NULL,
    'user_id' => NULL,
    'user_agent' => '',
    'is_bot' => 0,
    'ip' => '',
    'data' => NULL,
  ),
  'fieldMeta' => 
  array (
    'id' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '191',
      'phptype' => 'string',
      'null' => false,
      'index' => 'pk',
      'default' => '',
    ),
    'access' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'timestamp',
      'null' => false,
      'attributes' => 'unsigned',
    ),
    'user_id' => 
    array (
      'dbtype' => 'int',
      'precision' => '20',
      'phptype' => 'integer',
      'null' => true,
      'index' => 'index',
      'attributes' => 'unsigned',
    ),
    'user_agent' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '255',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'is_bot' => 
    array (
      'dbtype' => 'tinyint',
      'precision' => '1',
      'phptype' => 'boolean',
      'attributes' => 'unsigned',
      'null' => false,
      'default' => 0,
    ),
    'ip' => 
    array (
      'dbtype' => 'varchar',
      'precision' => '45',
      'phptype' => 'string',
      'null' => false,
      'default' => '',
    ),
    'data' => 
    array (
      'dbtype' => 'mediumtext',
      'phptype' => 'string',
    ),
  ),
  'indexes' => 
  array (
    'PRIMARY' => 
    array (
      'alias' => 'PRIMARY',
      'primary' => true,
      'unique' => true,
      'type' => 'BTREE',
      'columns' => 
      array (
        'id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'access' => 
    array (
      'alias' => 'access',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'access' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'is_bot' => 
    array (
      'alias' => 'is_bot',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'is_bot' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
    'user_id' => 
    array (
      'alias' => 'user_id',
      'primary' => false,
      'unique' => false,
      'type' => 'BTREE',
      'columns' => 
      array (
        'user_id' => 
        array (
          'length' => '',
          'collation' => 'A',
          'null' => false,
        ),
      ),
    ),
  ),
  'validation' => 
  array (
    'rules' => 
    array (
      'id' => 
      array (
        'invalid' => 
        array (
          'type' => 'preg_match',
          'rule' => '/^[0-9a-zA-Z,-]{22,191}$/',
          'message' => 'session_err_invalid_id',
        ),
      ),
    ),
  ),
);
