<?php
App::uses('ModelBehavior', 'Model');
class TaggableBehavior extends ModelBehavior {

  const DELIMITER = ',';
  /* static $WordPattern; */
  static $ngPatternList;
  var $allow_space = false;

  public function setup(&$Model, $settings = array()) {
  }

  public function getAllowSpace() {
    return $this->allow_space;
  }
  
  public function allowSpaceInTag(&$Model, $allow_space = true) {
    $this->allow_space = $allow_space;
  }

  public function strip(&$Model, $str) {
    $str = mb_convert_kana($str, 's');
    $str = str_replace('、', ',', $str);
    $str = str_replace('，', ',', $str);
    if($this->allow_space){
      $str = preg_replace('|,[ ]+|', ',', $str);
      $str = preg_replace('|[ ]+,|', ',', $str);
      $str = preg_replace('|[,]+|', ',', $str);
      $str = preg_replace('| +|', ' ', $str);
    } else {
      $str = preg_replace('|[, ]+|', ',', $str);
    }
    $str = trim($str, ',');
    $str = preg_replace('|<script>.*</\s*script>|', '', $str);
    $str = strip_tags($str);
    if($this->allow_space){
      $str = preg_replace('|,[ ]+|', ',', $str);
      $str = preg_replace('|[ ]+,|', ',', $str);
      $str = preg_replace('|[,]+|', ',', $str);
      $str = preg_replace('| +|', ' ', $str);
    } else {
      $str = preg_replace('|[, ]+|', ',', $str);
    }
    $str = trim($str, ',');
    return $str;
  }

  public function getTagList(&$Model, $data, $isHashtag = false) {
    if (is_string($data)) {
      $data = $this->strip($Model, $data);
      $data = explode(self::DELIMITER, $data);
    }

    $ret = array();
    if (is_array($data)) {
      foreach ($data as $d) {
        /* if (strlen($d) && $this->isOk($Model, $d)) { */
        if (strlen($d)) {
          if ($isHashtag && $d[0] !== '#') {
            $d = '#' . $d;
          }

          if (!in_array($d, $ret)) {
            $ret[] = $d;
          }
        }
      }
    }

    return $ret;
  }

  public function getTagFormValue(&$Model, $data, $isHashtag = false) {
    if (is_string($data)) {
      $data = $this->getTagList($Model, $data, $isHashtag);
    }

    $ret = '';
    if (is_array($data)) {
      $ret = implode(self::DELIMITER, $data);
    }

    return $ret;
  }

  public function getTagFieldValue(&$Model, $data, $isHashtag = false) {
    return self::DELIMITER
      . $this->getTagFormValue($Model, $data, $isHashtag)
      . self::DELIMITER;
  }

  public function getTagSearchToken(&$Model, $tag) {
    return '%'
      . str_replace('%', '\%', $this->getTagFieldValue($Model, $tag))
      . '%';
  }

  public function getWildSearchToken(&$Model, $tag) {
    return '%'
      . str_replace('%', '\%', $this->getTagFormValue($Model, $tag))
      . '%';
  }

  /* function isOk(&$Model, $tag) { */
  /*   return !$this->isNg($Model, $tag); */
  /* } */

  /* function isNg(&$Model, $tag) { */
  /*   if (!self::$WordPattern) { */
  /*     self::$WordPattern =& ClassRegistry::init('WordPattern'); */
  /*   } */

  /*   return self::$WordPattern->isNg($tag); */
  /* } */

}
