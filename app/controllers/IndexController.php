<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	
    	$title = "Phalcon PHP";
    	return $this->blade->render("auth.login",["title" => "$title"]);
    }
    public function loginAction()
    {
    	
    	echo $this->request->get("tc");
    }

}
