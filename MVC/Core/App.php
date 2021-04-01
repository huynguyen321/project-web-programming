<?php

class App
{
    //http://domain/controller/action/param/..
    //       domain/  url[0] /url[1]/url[2]...
    private $controller = "Home";
    private $action ="";
    private $params = [];

    public function __construct()
    {
        $url = $this->processURL();

        // process controller
        if (file_exists('./MVC/Controllers/' . $url[0] . '.ctrl.php')) {
            require_once './MVC/Controllers/' . $url[0] . '.ctrl.php';
            unset($url[0]);
        } else if (empty($url[0])) {
            require_once './MVC/Controllers/' . $this->controller . '.ctrl.php';
        } else require_once './MVC/Controllers/Error.ctrl.php';

        // process Action
        if (isset($url[1])) {
            if (method_exists($this->controller . 'Controller', $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            } else require_once './MVC/Controllers/Error.ctrl.php';

        }
        
        // process Param
        $this->params = $url ? array_values($arr) : [];

        if (file_exists('./MVC/Controllers/' . $this->controller. '.ctrl.php')) {
            if (method_exists($this->controller . 'Controller', $this->action)) {
                call_user_func_array([$this->controller . 'Controller',$this->action],$this->params);
            } else require_once './MVC/Controllers/Home.ctrl.php';
        }else require_once './MVC/Controllers/Home.ctrl.php';
        //call_user_func_array([class, method],params);
    }

    public function processURL()
    {

        if (isset($_GET['url'])) {
            return explode('/', filter_var(trim($_GET['url'], '/')));
        }
    }
}
