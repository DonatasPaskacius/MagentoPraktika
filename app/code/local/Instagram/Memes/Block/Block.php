<?php

class Instagram_Memes_Block_Block extends Mage_Core_Block_Template
{
	public $name_id, $modele_enabled, $drop;

	public function init()
	{
		$this->name_id = Mage::getStoreConfig('instagram/instagram_settings/instagram_username_id', Mage::app()->getStore());

		$this->modele_enabled = Mage::getStoreConfig('instagram/instagram_settings/instagram_module_enabled', Mage::app()->getStore());

	}
}