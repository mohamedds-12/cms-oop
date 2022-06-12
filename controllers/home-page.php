<?php

class HomeController extends Controller {
    function runBeforeAction(){
        global $dbConnection;
        // connecting to database
        $dbh = DBConnection::getInstance();
        $dbConnection = $dbh->getConnection();
    }

    function defaultAction() {
        global $dbConnection;
        // getting data
        $homePage = new Page($dbConnection);
        $homePage->getById(1);
        // fetching data
        $pageData['title'] = $homePage->page_title;
        $pageData['content'] = $homePage->page_content;
        // assinging layout and data 
        $homePage_templ = new Template('default');
        $homePage_templ->renderView('static-page', $pageData);
                       
    }
    
}
