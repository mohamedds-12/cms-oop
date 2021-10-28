<?php

class HomePageController extends Controller {

    function defaultAction() {
        $home_templ = new Template;
        $home_templ->view('home-page');

    }
    
}
