<?php 

class Page {
    public $id;
    public $title;
    public $content;

    private $dbc;
    public function __construct($dbConnection) {
        $this->dbc = $dbConnection;
    }

    public function getById($id) {
        // getting data 
        $sql = "SELECT * FROM pages WHERE page_id = :id";
        $stmt = $this->dbc->prepare($sql);
        $stmt->execute(['id' => $id]);
        $pageData = $stmt->fetch();
        // fetching data
        $this->id = $pageData['page_id'];
        $this->title = $pageData['page_title'];
        $this->content = $pageData['page_content'];
    }






}