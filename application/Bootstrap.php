<?php
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

class Bootstrap extends Yaf\Bootstrap_Abstract {
    public function _initConfig()
    {
        $config = \Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $config);
    }

    public function _initDB() {
        $config =  Yaf\Registry::get('config');
        $options = [
            'database_type' => $config->application->db->database_type,
            'database_name' => $config->application->db->database_name,
            'server' => $config->application->db->server,
            'username' => $config->application->db->username,
            'password' => $config->application->db->password,
            'charset' => $config->application->db->charset,
        ];
        $db = new \Medoo\Medoo($options);
        Yaf\Registry::set('db', $db);
    }

}