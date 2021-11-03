<?php

class ContactController extends Controller {

    
    function runBeforeAction(){
        global $dbConnection;
        // connecting to database
        $dbh = DBConnection::getInstance();
        $dbConnection = $dbh->getConnection();
    }

    function defaultAction(){
        global $dbConnection;
        // getting data
        $contactUs = new Page($dbConnection);
        $contactUs->getById(2);
        // fetching data
        $pageComponents['title'] = $contactUs->title;
        $pageComponents['content'] = $contactUs->content;
        // assinging layout and data 
        $contactUs_templ = new Template('default');
        $contactUs_templ->renderView('contact-us', $pageComponents);

    }

    function submitAction(){
        global $dbConnection;
        // getting data
        $thankyouPage = new Page($dbConnection);
        $thankyouPage->getById(3);
        // fetching data
        $pageComponents['title'] = $thankyouPage->title;
        $pageComponents['content'] = $thankyouPage->content;
        // assinging layout and data 
        $thankyouPage_templ = new Template('default');
        $thankyouPage_templ->renderView('static-page', $pageComponents);

    }

    


}

