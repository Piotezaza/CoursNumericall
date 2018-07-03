<?php 

define('BASEPATH', "CoursNumericall/PHP/MVC/MVCExemple");

require_once __DIR__ . "/vendor/autoload.php";
spl_autoload_register(function($className){
    $className = 'src/' . $className .'.php';
    if (file_exists($className)) {
        require_once($className);
    }
});
// Init twig
$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/View');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addGlobal('path', BASEPATH);

// Création filtre
$filter = new Twig_Filter('icon', function()
{
    return preg_replace_callback('', function($matches)
    {
        
    }, text);
});

use Controller\FrontController;

$frontController = new FrontController();
$frontController->setBasePath(BASEPATH);

$templateInfos =  $frontController->run();

$template = $twig->load($templateInfos['template']);
echo $template->render($templateInfos['data']);