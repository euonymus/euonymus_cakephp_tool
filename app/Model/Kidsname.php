<?php
App::uses('AppModel', 'Model');
/**
 * Kidsname Model
 *
 */
class Kidsname extends AppModel {

  const GENDER_BOTH   = 0;
  const GENDER_MALE   = 1;
  const GENDER_FEMALE = 2;
  static $genderList = array(
    self::GENDER_BOTH   => '男女可',
    self::GENDER_MALE   => '男性',
    self::GENDER_FEMALE => '女性',
  );


/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'global' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'gender_match' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foreign_meaning' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
  /******************************************************************/
  /* Conditions                                                     */
  /******************************************************************/
  /**
   *  $options: Array (
                    [gender] => 2
                    [global] => 1
                    [gmatch] => 1
                    [meaning] => 1
                )
  */
  public static function conditionFilter($options) {
    $conditions = array();
    if ($options['gender']) {
      $tmp = self::conditionFilterGender($options['gender']);
      $conditions = am($tmp, $conditions);
    }

    if ($options['global']) {
      $tmp = self::conditionFilterGlobal();
      $conditions = am($tmp, $conditions);
    }

    if ($options['gmatch']) {
      $tmp = self::conditionFilterGenderMatch();
      $conditions = am($tmp, $conditions);
    }

    if ($options['meaning']) {
      $tmp = self::conditionFilterForeignMeaning();
      $conditions = am($tmp, $conditions);
    }
    return $conditions;
  }

  public static function conditionFilterGender($gender) {
    return array(__CLASS__.'.gender' => $gender);
  }
  public static function conditionFilterGlobal() {
    return array(__CLASS__.'.global' => TRUE);
  }
  public static function conditionFilterGenderMatch() {
    return array(__CLASS__.'.gender_match' => TRUE);
  }
  public static function conditionFilterForeignMeaning() {
    return array(__CLASS__.'.foreign_meaning' => FALSE);
  }
}
