<?php 

class Router {
    public $route_id;
    public $route_module;
    public $route_action;
    public $route_page_id;
    public $route_url;

    private $dbc;
    public function __construct() {
        // global $dbConnection;

        // connecting to database
        $dbh = DBConnection::getInstance();
        $dbConnection = $dbh->getConnection();
        $this->dbc = $dbConnection;
    }

 
    public function getBy($route_url) {
        // getting data 
        $sql = "SELECT * FROM routes WHERE route_url = :url";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['url' => $route_url]);
        $routeData = $stmt->fetch();
        $stmt->debugdumpparams();
        // fetching data
        $this->route_id = $routeData['route_id'];
        $this->route_module = $routeData['route_module'];
        $this->route_action = $routeData['route_action'];
        $this->route_page_id = $routeData['route_page_id'];
        $this->route_url = $routeData['route_url'];
    }

}