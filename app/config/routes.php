<?php

$router->add("/", array(
    'controller' => 'index',
    'action' => 'index',
))->setName("/");


$router->addPost("/login", array(
    'controller' => 'index',
    'action' => 'login',
))->setName("login");