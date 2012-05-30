<?php
class Test 
{
	protected $config = array();
	
	/**
	 * Set a configuration
	 *
	 * @access  public
	 * @param   string      $key
	 * @param   mixed       $value
	 */
	public function __set($key, $value)
	{
		if (is_string($key))
		{
			$this->config[$key] = $value;
		}
	}
	
	public function __get($key) {
		return $this->config[$key];
	}
}


$boo = new Test;

$boo->charge = 'vroom';

echo $boo->charge;