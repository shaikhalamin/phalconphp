<?php
use \Libs\HTML;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
    	return $this->html->style("public/css/bootstrap.min.css");
    }

}
