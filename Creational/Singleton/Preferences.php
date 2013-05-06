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

    private $properties = array();
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
        $this->properties[$key] = $value;
    }

    /**
     * @param $key
     * @return mixed
     */
    public function getProperty( $key )
    {
        return $this->properties[$key];
    }

}