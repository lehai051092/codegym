<?php

class Main
{
    public function __construct()
    {
        $this->init();
        echo "Connect Main";
    }

    public function init()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : NULL;
        $class = '';
        $method = '';
        $params = '';
        $slug = '';

        if ($url != NULL) {
            $url = explode('/', filter_var(rtrim($url, '/'), FILTER_SANITIZE_URL));
            $class = $url[0] ?: '';
            $method = $url[1] ?: '';
            $params = $url[2] ?: '';
            $slug = $url[3] ?: '';
        } else {
            unset($url);
        }

        if (!empty($class)) {
            include_once "app/controllers/" . $class . ".php";
            $controller = new $class();

            if (!empty($params)) {
                $controller->{$method}($params);
            } else {
                if (!empty($method)) {
                    $controller->{$method}();
                } else {

                }
            }
        } else {

        }
    }
}
