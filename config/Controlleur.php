<?php

class Controlleur{
    protected $viewPath='vues/';

    public function render($view,$data=[])
    {
        ob_start();
        extract($data);

        $uri=$this->viewPath.str_replace('.','/',$view).".php";
        ob_end_clean();
        
        if(file_exists($uri))
        {
             require_once($uri);
        }else{
            echo "404 ERROR";
        }
    }

    public function redirect($redi)
    {
        header('Location:'.$redi);
    }
}