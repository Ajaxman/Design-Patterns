<?php
/**
 * Class Preferences
 *
 * This class is called "singleton" pattern
 *
 * @package Patterns
 * @subpackage Creational
 * @author Javier Lopez Lopez <javier@ajaxman.net>
 *
 */
class Preferences {

    private $props = array();
    private static $instance;

    private function __construct() { }

    /**
     * @return Preferences
     */
    public static function getInstance()
    {
        if ( empty( static::$instance ) ) {
            static::$instance = new Preferences();
        }
        return static::$instance;
    }

    /**
     * @param $key
     * @param $value
     */
    public function setProperty( $key, $value )
    {
        $this->props[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getProperty( $key )
    {
        return $this->props[$key];
    }

}