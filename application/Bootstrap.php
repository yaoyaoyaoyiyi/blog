<?php
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

class Bootstrap extends Yaf\Bootstrap_Abstract {
    private $_config;

    public function _initConfig() {
        $this->_config = Yaf\Application::app()->getConfig();
        \Yaf\Registry::set('config', $this->_config);
    }

    public function _initRouters(Yaf\Dispatcher $dispatcher) {
        $router = $dispatcher->getRouter();
        $route  = new Yaf\Route\Rewrite(
            "/login",
            array(
                "controller" => "index",
                "action"     => "login",
            )
        );

        $router->addRoute('login', $route);
    }

    public function _initDB() {
        $options = [
            'database_type' => $this->_config->application->db->database_type,
            'database_name' => $this->_config->application->db->database_name,
            'server' => $this->_config->application->db->server,
            'username' => $this->_config->application->db->username,
            'password' => $this->_config->application->db->password,
            'charset' => $this->_config->application->db->charset,
        ];
        $db = new \Medoo\Medoo($options);
        Yaf\Registry::set('db', $db);
    }

}