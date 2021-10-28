<?php 
include 'src/Controller.php';
include 'src/template.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

switch ($section) {
    case 'about':
        include 'controllers/about-us.php';
        $aboutController = new AboutController;
        $aboutController->runAction($action);
        break;
    case 'contact':
        include 'controllers/contact-us.php';
        $contatController = new ContactController;
        $contatController->runAction($action);
        break;
    case 'home':
        include 'controllers/home-page.php';
        $homePageController = new HomePageController;
        $homePageController->runAction($action);
}



?>



