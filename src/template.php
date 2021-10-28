<?php

class Template {

    function view($template){

        include 'views/' . $template . '.html';
    }
}