#how to include balde template in php phalcon
create a composer.json in project root  (if project name is  then create composer.json in myblog folder)
--> composer init
put the following depedency in the required section

        "windwalker/renderer": "~3.0",
        "illuminate/view" : "4.*"


--> composer update


now open app/config.php and put the following code in the application array section

```php
  'vendor'         => BASE_PATH . '/vendor/',
```

now open index.php from public and put the following

  ```php
      include BASE_PATH . '/vendor/autoload.php';
   ```

now open app/services.php  and change the "view" $di as the following

```php
$di->setShared('view', function () {
    $config = $this->getConfig();
    $view = new View();
    $view->setDI($this);
    $view->setViewsDir($config->application->viewsDir);
    return $view;
});
```


now put the following $di for blade template DI

```php
$di->set('blade', function () {
    $config = $this->getConfig();
    $path = [$config->application->viewsDir];
    $render = new \Windwalker\Renderer\BladeRenderer($path, array('cache_path' => $config->application->cacheDir));
    return $render;
});
```


now put the following code into controllers/ControllerBase.php for stop rendering view for volt

```php
public function onConstruct(){
      $this->view->disable();
    }
```



#create routes in phalcon php

put the following code in app/service.php

```php
$di->set('router', function(){
    $config = $this->getConfig();
    $router = new \Phalcon\Mvc\Router(false);
    include APP_PATH . "/config/routes.php";
    return $router;
},true);
```

now create config/routes.php

now put the following code in config/routes.php
```php
<?php

$router->add("/home", array(
    'controller' => 'index',
    'action' => 'index',
));
```
