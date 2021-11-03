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
        $pageComponents['title'] = $homePage->title;
        $pageComponents['content'] = $homePage->content;
        // assinging layout and data 
        $homePage_templ = new Template('default');
        $homePage_templ->renderView('static-page', $pageComponents);
                       
    }
    
}
