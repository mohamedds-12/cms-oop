<?php 
include 'src/Controller.php';

$section = $_GET['section'] ?? $_POST['section'] ?? '';
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
    default:
        include 'controllers/home.php';
        $homeController = new HomeController;
        $homeController->runAction($action);
}



?>



