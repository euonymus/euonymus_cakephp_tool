<?php
App::uses('Kidsname', 'Model');

/**
 * Kidsname Test Case
 *
 */
class KidsnameTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.kidsname'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Kidsname = ClassRegistry::init('Kidsname');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Kidsname);

		parent::tearDown();
	}

}
