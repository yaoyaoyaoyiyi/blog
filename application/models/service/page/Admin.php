<?php

class Service_Page_AdminModel {
    private $objServiceDataAdmin;
    public function __construct() {
        $this->objServiceDataAdmin = new Service_Data_AdminModel();
    }

    public function execute($arrInput) {
        $arrResult = array();
        $arrResult['errno'] = 0;
        try {
            $arrResult['data'] = 0;
        }catch (Exception $e) {

        }
    }
}