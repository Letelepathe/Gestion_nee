<?php
 class Router {
    private $routes=[];

    public  function get($uri,$controlleur){
        $this->routes['GET'][$uri]=$controlleur;
        return $this;
    }
    public  function post($uri,$controlleur){
        $this->routes['POST'][$uri]=$controlleur;
        return $this;
    }
    public  function run(){
        $uri=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        $method=$_SERVER['REQUEST_METHOD'];
        
        if(isset($this->routes[$method][$uri])){
            $controlleur=$this->routes[$method][$uri];
            echo $controlleur;
            $controlleur=str_replace('@','->',$controlleur);
            (new $controlleur());
            echo $controlleur;
        }
    }
 }