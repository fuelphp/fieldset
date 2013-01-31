<?php

namespace FuelPHP\Fieldset\Input;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-01-17 at 16:38:28.
 */
class PasswordTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }
	
	/**
	 * @covers FuelPHP\Fieldset\Input\Password::__construct
	 * @group Fieldset
     */
    public function testConstruct()
    {
		$attributes = array('type' => 'password', 'name' => '');
		
		$instance = new Password();
		
		$this->assertEquals($attributes, $instance->getAttributes());
    }
	
}