<?php 
// PATHS

define ('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define ('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define ('MODEL_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'models' . DIRECTORY_SEPARATOR);

require_once MODEL_PATH . 'Page.php';
require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'src/DBConnection.php';


/* Connect to a MySQL database using driver invocation */
DBConnection::connect('localhost', 'blog_db', 'root', '');


$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

switch ($section) {
    case 'about':
        include ROOT_PATH . 'controllers/about-us.php';
        $aboutController = new AboutController;
        $aboutController->runAction($action);
        break;
    case 'contact':
        include ROOT_PATH . 'controllers/contact-us.php';
        $contatController = new ContactController;
        $contatController->runAction($action);
        break;
    case 'home':
        include ROOT_PATH . 'controllers/home-page.php';
        $homeController = new HomeController;
        $homeController->runAction($action);
        break;
    default:
        include VIEW_PATH . 'not-found.html';
    break;
        
}




?>



