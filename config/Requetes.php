<?php

class Requeste{

    static function request($request)
    {
        if($_SERVER['REQUEST_METHOD']==="POST")
        {
            return $_POST[$request];
        }else if($_SERVER['REQUEST_METHOD']=="GET")
        {
            return $_GET[$request];
        }
    }
}