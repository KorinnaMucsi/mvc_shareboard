<?php 
//Start session
session_start();

require_once('config.php');
require_once('classes/Bootstrap.php');
require_once('classes/Controller.php');
require_once('classes/Model.php');

require_once('controllers/Home.php');
require_once('controllers/Users.php');
require_once('controllers/Shares.php');

require_once('models/Home.php');
require_once('models/User.php');
require_once('models/Share.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
    $controller->executeAction();
}

?>