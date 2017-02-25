<?php

namespace Libs;
use \Phalcon\Di\Injectable as Injector;
/**
* 
*/
class HTML extends Injector
{
	/*public function __construct($app){
		$this->app = $app;
	}*/
	public function style($path){
		return '<link rel="stylesheet" type="text/css" href="'.$this->url->get(["for"=>"/"]).$path.'">';
	}

	public function script($path){
		return '<script src="'.$this->url->get(["for"=>"/"]).$path.'"></script>';
	}
}