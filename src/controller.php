<?php

class Controller {
    function runAction($actionName){
        if(method_exists($this, 'runBeforeAction')) {
            $this->runBeforeAction();
        }
        
        
        // adding 'Action' to the method's name
        $actionName .= 'Action';
        // checking if method exists
        if(method_exists($this, $actionName)) {
            $this->$actionName();
        } else {
            include ROOT_PATH . 'views/not-found.html';
        }
    }
}