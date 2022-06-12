<?php 

class Page {
    public $page_id;
    public $page_title;
    public $page_content;

    private $dbc;
    public function __construct($dbConnection) {
        $this->dbc = $dbConnection;
    }

    public function getById($page_id) {
        // getting data 
        $sql = "SELECT * FROM pages WHERE page_id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $page_id]);
        $pageData = $stmt->fetch();
        // fetching data
        $this->page_id = $pageData['page_id'];
        $this->page_title = $pageData['page_title'];
        $this->page_content = $pageData['page_content'];
    }

}