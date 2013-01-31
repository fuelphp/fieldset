<?php

/**
 * Part of the FuelPHP framework.
 *
 * @package   FuelPHP\Fieldset
 * @version   2.0
 * @license   MIT License
 * @copyright 2010 - 2013 Fuel Development Team
 */

namespace FuelPHP\Fieldset;

/**
 * Allows for the programtic construction of html forms.
 * 
 * @package FuelPHP\Fieldset
 * @since   2.0.0
 * @author  Fuel Development Team
 */
class Form extends \FuelPHP\Common\DataContainer implements Render\Renderable
{
	
	/**
	 * Override the DataContainer's set function to enable type checking.
	 * 
	 * @param string $key
	 * @param Input|Fieldset $value
	 * @throws \InvalidArgumentException
	 */
	public function set($key, $value)
	{
		if( ! ($value instanceof Input) && ! ($value instanceof Fieldset) )
		{
			throw new \InvalidArgumentException('Only Inputs or Fieldsets can be added to a Fieldset.');
		}
		
		return parent::set($key, $value);
	}
	
	//TODO: Use traits for this when able
	
	protected $_attributes = array();
	
	/**
	 * Sets the attributes for the Input
	 * 
	 * @param array $attributes
	 * @return \FuelPHP\Fieldset\Input
	 */
	public function setAttributes(array $attributes)
	{
		$this->_attributes = \FuelPHP\Common\Arr::merge($this->_attributes, $attributes);
		return $this;
	}
	
	/**
	 * Gets the attributes for the Input
	 * 
	 * @return array
	 */
	public function getAttributes()
	{
		return $this->_attributes;
	}
	
}
