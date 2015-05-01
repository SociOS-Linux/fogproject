<?php
class ClientManagementPage extends FOGPage {
	// __construct
	public function __construct($name = '') {
		$this->name = 'Client Management';
		$this->node = 'client';
		// Call parent constructor
		parent::__construct($this->name);
	}
	// Pages
	public function index() {
		$this->title = _('FOG Client Installer');
		$webroot = ($this->FOGCore->getSetting('FOG_WEB_ROOT') ? '/'.trim($this->FOGCore->getSetting('FOG_WEB_ROOT'),'/') : '');
		$url = "http://{$this->FOGCore->getSetting(FOG_WEB_HOST)}$webroot/client";
		echo '<ul id="dashboard-boxes"><li><h4>'._('Client Service').'</h4><div>'._('Download the FOG client service. This service allows for advanced management of the PC, including hostname changing, etc...').'<br /><br /><a href="'.$url.'/FogService.zip">'._('Legacy FOG Client Service').'</a><br/><a href="'.$url.'/FOGService.msi">'._('New FOG Client Service').'</a></div></li><li><h4>'._('FOG Prep').'</h4><div>'._('Download FOG Prep which must be run on computers running Windows 7 immediately prior to image upload.').'<br /><br /><br /><div><a href="'.$url.'/FogPrep.zip">'._('FOG Prep').'</a></div></li><li><h4>'._('FOG Crypt').'</h4><div>'._('Download FOG Crypt which can be used to encrypt the AD Domain Password.').'<br /><br /><br /><a href="'.$url.'/FOGCrypt.zip">'._('FOG Crypt').'</a></div></li></ul>';
	}
}
