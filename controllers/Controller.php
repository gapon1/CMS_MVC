<?php


class Controller{

    public  $model;
    public  $view;
    protected $pageData = array();//Щоб в views показ динамічні дані

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
    }
}