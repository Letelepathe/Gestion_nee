<?php

class AppControlleur extends Controlleur{
    protected $viewPath='vues/';

    public function render($view,$data=[])
    {
        Parent::render($view,$data);
    }
}