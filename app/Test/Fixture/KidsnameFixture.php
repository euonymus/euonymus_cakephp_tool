<?php
/**
 * KidsnameFixture
 *
 */
class KidsnameFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => true, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gender' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 3, 'unsigned' => true, 'comment' => '0:both, 1:male, 2: female'),
		'global' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'gender_match' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'foreign_meanint' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'gender' => 1,
			'global' => 1,
			'gender_match' => 1,
			'foreign_meanint' => 1,
			'remarks' => 'Lorem ipsum dolor sit amet',
			'modified' => '2014-11-22 15:41:02',
			'created' => '2014-11-22 15:41:02'
		),
	);

}
