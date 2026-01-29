<?php

class Router {
    private static $instance = null;
    private $routes = [];
    private $method;
    private $uri;

    public static function getInstance() {
        if (!self::$instance) self::$instance = new self();
        return self::$instance;
    }

    public function __construct($method = '', $uri = '') {
        $this->method = $method;
        $parseduri = parse_url($uri, PHP_URL_PATH);

        if(strpos($parseduri, BASE_PATH) === 0) {
            $parseduri = substr($parseduri, strlen(BASE_PATH));
        }

        $this->uri = $parseduri ?? '/';
    }

    public function get($route, $action) {
        $this->routes['GET'][$route] = $action;
    }

    public function resolve() {

        // print_r([$this->routes[$this->method]]);
        // var_dump($this->method);
        $methodRoutes = $this->routes[$this->method] ?? [];
        // var_dump($methodRoutes);
        foreach ($methodRoutes as $route => $action) {
            error_log($route);
            error_log($action);
            error_log($this->uri);
            $pattern = "@^" . preg_replace('/\{(\w+)\}/', '(\w+)', $route) . "$@";
            // print_r($pattern);
            if (preg_match($pattern, $this->uri, $matches)) {
                array_shift($matches);
                return $this->dispatch($action, $matches);
            }
        }
        return Response::json(['error' => 'Not Found'], 404);
    }

    private function dispatch($action, $params) {
        [$controller, $method] = explode('@', $action);
        require_once "controllers/{$controller}.php";
        $ctrl = new $controller();
        return call_user_func_array([$ctrl, $method], $params);
    }

    public function post($route, $action) {
        $this->routes['POST'][$route] = $action;
    }
}
