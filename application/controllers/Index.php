<?php

class IndexController extends Yaf\Controller_Abstract {
    public function indexAction() {//默认Action
        $db = \Yaf\Registry::get('db');
        $res = $db->select('t_admin','*');
        $this->getView()->assign("content", $res);
    }
}