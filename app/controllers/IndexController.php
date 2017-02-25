<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	$title = "Phalcon PHP";
    	return $this->blade->render("index.home",["title" => "$title"]);
    }

}
