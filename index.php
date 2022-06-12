<?php 
// PATHS
define ('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

require_once ROOT_PATH . 'models/Page.php';
require_once ROOT_PATH . 'src/Controller.php';
require_once ROOT_PATH . 'src/Template.php';
require_once ROOT_PATH . 'src/DBConnection.php';
require_once ROOT_PATH . 'src/Router.php';

/* Connect to a MySQL database using driver invocation */
DBConnection::connect('localhost', 'blog_db', 'root', '');


$section = $_GET['section'] ?? $_POST['section'] ?? '';
// $action = $_GET['action'] ?? $_POST['action'] ?? 'default';

var_dump($_GET);
$router = new Router();
$router->getBy($section);

// $section = $_GET['section'] ?? $_POST['section'] ?? $router->route_url;
$action = $router->route_action != '' ? $router->route_action : 'default';

switch ($router->route_url) {
    case 'about_us':
        include ROOT_PATH . 'controllers/about-us.php';
        $aboutController = new AboutController;
        $aboutController->runAction($action);
        break;
    case 'contact_us':
        include ROOT_PATH . 'controllers/contact-us.php';
        $contatController = new ContactController;
        $contatController->runAction($action);
        break;
    case '':
        include ROOT_PATH . 'controllers/home-page.php';
        $homeController = new HomeController;
        $homeController->runAction($action);
        break;
    default:
        include VIEW_PATH . 'not-found.html';
    break;
        
}




?>



