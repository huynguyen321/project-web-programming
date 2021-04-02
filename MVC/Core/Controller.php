<?php
class Controller
{
    public function Model($model)
    {
        if (file_exists('./MVC/Models/' . $model . '.mdl.php')) {
            require_once './MVC/Models/' . $model . '.mdl.php';
            return new $model;
        }
    }

    public function View($view, $data = [])
    {
        require_once './MVC/Views/' . $view . '.view.php';
    }
}
