<?php


class Routing{

    public static function buildRoute(){
        /*Контроллер і action за замовчуванням (На випадок якщо немає відповідного контроллера)*/

        $controllerName = "IndexController";
        $modelName = "IndexModel";
        $action = "index";

        $route = explode("/", $_SERVER['REQUEST_URI']);

        /*Визначаємо контроллер*/

        //якщо перша частина не пусто то переопреділяємо, і перестає діяти контроллерм за замовчуванням
        if ($route[1] != '')
        {
            $controllerName = ucfirst($route[1]. "Controller");
            $modelName = ucfirst($route[1]. "Model");
        }


        /*  Якщо ми не використ за замовчуванням то підключаємо новий контроллер (із за адреси)*/
        require_once CONTROLLER_PATH . $controllerName . ".php";// index controller.php
        require_once MODEL_PATH . $modelName . ".php";// indexModel.php

    

        /* Витягуємо action який лежить в другій частині нашого url
        Потім якщо він виявив action ми його запускаємо
        Він повинен знах в якомусь з контролерів
        */
        if (isset($route[2]) && $route[2] != ''){
            $action = $route[2];
        }


        $controller = new $controllerName();//Визиваємо класс контролеера
        $controller->$action();//$controller->index.php
    }


    public function errorPage(){

    }


}


