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
        $pageData['title'] = $contactUs->page_title;
        $pageData['content'] = $contactUs->page_content;
        // assinging layout and data 
        $contactUs_templ = new Template('default');
        $contactUs_templ->renderView('contact-us', $pageData);

    }

    function submitAction(){
        global $dbConnection;
        // getting data
        $thankyouPage = new Page($dbConnection);
        $thankyouPage->getById(3);
        // fetching data
        $pageData['title'] = $thankyouPage->page_title;
        $pageData['content'] = $thankyouPage->page_content;
        // assinging layout and data 
        $thankyouPage_templ = new Template('default');
        $thankyouPage_templ->renderView('static-page', $pageData);

    }

    


}

