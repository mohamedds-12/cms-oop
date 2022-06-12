<?php


class AboutController extends Controller {
    function runBeforeAction(){
        global $dbConnection;
        // connecting to database
        $dbh = DBConnection::getInstance();
        $dbConnection = $dbh->getConnection();
    }

    function defaultAction() {
        global $dbConnection;
        // getting data
        $aboutUs = new Page($dbConnection);
        $aboutUs->getById(4);
        // fetching data
        $pageData['title'] = $aboutUs->page_title;
        $pageData['content'] = $aboutUs->page_content;
        // assinging layout and data 
        $aboutUs_templ = new Template('default');
        $aboutUs_templ->renderView('static-page', $pageData);
                       
    }
    
    
}