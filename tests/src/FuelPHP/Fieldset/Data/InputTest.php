<?php

namespace FuelPHP\Fieldset\Data;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2013-03-07 at 12:03:21.
 */
class InputTest extends \PHPUnit_Framework_TestCase
{

	public function setUp()
	{
		$_POST = array();
		$_GET = array();
	}
	
	/**
	 * @covers FuelPHP\Fieldset\Data\Input::get
	 * @group  Fieldset
	 */
	public function testGet()
	{
		$_GET['mockdata'] = 'some data';

		$object = new Input;

		$this->assertEquals('some data', $object->get('mockdata'));
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::get
	 * @group  Fieldset
	 */
	public function testGetNested()
	{
		$_GET['mockdata'] = array('subkey' => 'foobar');

		$object = new Input;

		$this->assertEquals('foobar', $object->get('mockdata.subkey'));
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::get
	 * @group  Fieldset
	 */
	public function testGetAll()
	{
		$_GET['mockdata'] = array('subkey' => 'foobar');

		$object = new Input;

		$this->assertEquals($_GET, $object->get());
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::post
	 * @group  Fieldset
	 */
	public function testPost()
	{
		$_POST['mockdata'] = 'some data';

		$object = new Input;

		$this->assertEquals('some data', $object->post('mockdata'));
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::post
	 * @group  Fieldset
	 */
	public function testPostNested()
	{
		$_POST['mockdata'] = array('subkey' => 'foobar');

		$object = new Input;

		$this->assertEquals('foobar', $object->post('mockdata.subkey'));
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::post
	 * @group  Fieldset
	 */
	public function testPostAll()
	{
		$_POST['mockdata'] = array('subkey' => 'foobar');

		$object = new Input;

		$this->assertEquals($_POST, $object->post());
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::input
	 * $group  Fieldset
	 */
	public function testInput()
	{
		$_POST['mockdata'] = 'foobar';
		
		$object = new Input;
		
		$this->assertEquals('foobar', $object->input('mockdata'));
	}
	
	/**
	 * @covers FuelPHP\Fieldset\Data\Input::input
	 * @group  Fieldset
	 */
	public function testInputNested()
	{
		$_POST['mockdata'] = array('subkey' => 'foobar');
		
		$object = new Input;
		
		$this->assertEquals('foobar', $object->input('mockdata.subkey'));
	}

	/**
	 * @covers FuelPHP\Fieldset\Data\Input::input
	 * @group  Fieldset
	 */
	public function testInputAll()
	{
		$_POST['mockdata'] = array('one' => 'first value', 'three' => 'overridden');
		$_GET['mockdata'] = array('two' => 'second value', 'three' => 'third value');

		$object = new Input;

		$expected = array(
			'mockdata' => array(
				'one' => 'first value',
				'two' => 'second value',
				'three' => 'overridden',
			)
		);

		$this->assertEquals($expected, $object->input());
	}
	
	/**
	 * @covers FuelPHP\Fieldset\Data\Input::__construct
	 * @covers FuelPHP\Fieldset\Data\Input::config
	 * @group Fieldset
	 */
	public function testConfig()
	{
		$object = new Input(array('testconfig' => 'foobar'));
		
		$this->assertEquals('foobar', $object->config('testconfig'));
	}
	
	/**
	 * @covers FuelPHP\Fieldset\Data\Input::__construct
	 * @covers FuelPHP\Fieldset\Data\Input::config
	 * @group Fieldset
	 */
	public function testConfigAll()
	{
		$config = array(
			'foo' => 'bar',
			'baz' => 'bat',
		);
		
		$object = new Input($config);
		
		$this->assertEquals($config, $object->config());
	}

}