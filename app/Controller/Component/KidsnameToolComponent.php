<?php
App::uses('Component', 'Controller');
class KidsnameToolComponent extends Component {
  public $components = array('ParamTool');

  public function initialize(Controller $controller) {
    $this->Controller = $controller;
    $this->ParamTool->initialize($controller);
  }

  /************************************************************************/
  /* Data finder                                                          */
  /************************************************************************/
  public function getList($options = array(), $isPaging = false) {
    $this->Controller->loadModel('Kidsname');
    $this->Controller->Kidsname->recursive = 0;
    return $this->Controller->_getModelsList('Kidsname', $options, $isPaging);
  }

  public function getFiltered($isPaging = false) {
    $this->Controller->loadModel('Kidsname');
    $gender = $this->ParamTool->query_init('gender');
    $global = $this->ParamTool->query_init('global');
    $gmatch = $this->ParamTool->query_init('gmatch');
    $meaning = $this->ParamTool->query_init('meaning');

    $options = array('conditions' => Kidsname::conditionFilter(compact('gender', 'global', 'gmatch', 'meaning')));
    return $this->getList($options, $isPaging);
  }

  /************************************************************************/
  /* Validation                                                           */
  /************************************************************************/
  /************************************************************************/
  /* Tools                                                                */
  /************************************************************************/
}
