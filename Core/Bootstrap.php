<?php
/**
 * Created by djuki.
 * Date: 2/19/13
 * Time: 12:10 PM
 *
 */



class Bootstrap
{
    /**
     * @var Request
     */
    static protected $_request;

    /**
     * @var Controller_Base
     */
    static protected $_controller;

    /**
     * Start Application, call Base Controllers methods
     */
    static public function startApplication()
    {
        self::$_request = new Request();
        self::$_controller = new Controller_Base();

        self::$_controller->before();
        self::$_controller->actionShowDocument(self::$_request->getDocumentName());
        self::$_controller->after();
    }
}