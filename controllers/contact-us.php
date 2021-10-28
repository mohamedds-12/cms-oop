<?php

class ContactController extends Controller {

    
    function runBeforeAction(){
        // echo 'runs before the action';
        return true;
    }

    function defaultAction(){
        include 'views/contact-us.html';
    }

    function submitAction(){
        // fetching data
        include 'views/thank-you.html';
    }

    


}

