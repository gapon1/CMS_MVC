<?php

class IndexController extends Controller {

    private $pageTpl = '/views/main.tpl.php';

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view  = new View();
    }

    public function index(){
        $this->pageData['title'] = "Enter to cabinet";
        $this->view->render($this->pageTpl, $this->pageData);

        if (!empty($_POST)){
            if (!$this->login()){
                $this->pageData["eroor"] = "неправельний логін";
            }

        }

    }

    public function login(){
        if (!$this->model->checkUser()){
            return false;
        }else{
            echo "okl";
        }
    }


}