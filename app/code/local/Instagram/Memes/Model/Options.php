<?php

/**
* 
*/
class Instagram_Memes_Model_Options
{
	
	public function toOptionArray()
	{
		return array(
			array('value' => true, 'label' => 'Enabled'),
			array('value' => false, 'label' => 'Disabled'),
		);
	}
}