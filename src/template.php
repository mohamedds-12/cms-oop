<?php

class Template {

    protected $layout;

    function __construct($layout){
        $this->layout = $layout;
    }

    function renderView($template, $pageData){
        extract($pageData);

        // including the layout
        include ROOT_PATH . "views/layouts/" . $this->layout . ".php";
    }
}