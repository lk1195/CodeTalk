<?php
require_once('App.php');

abstract class Model {
	protected $mysqli;
	
	public function __construct(){
		$this->setMysql();
	}

	private function setMysql(){
		$app = App::Instance();
		$this->mysqli = $app->getMysqli();
	}
}