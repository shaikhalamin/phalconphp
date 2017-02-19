<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
      $title = 'My Title Here';
      return $this->blade->render("index.index",['title'=>$title]);
    }

}
