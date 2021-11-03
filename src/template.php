<?php

class Template {

    protected $layout;

    function __construct($layout){
        $this->layout = $layout;
    }

    function renderView($template, $pageComponents){
        extract($pageComponents);
        // including the layout
        include VIEW_PATH . "layouts/" . $this->layout . ".php";
    }
}