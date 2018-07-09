<?php 
//include config
require('config.php');

//classes
require('classes/bootstrap.php');
require('classes/controller.php');
require('classes/model.php');

//controllers
require('controllers/home.php');
require('controllers/shares.php');
require('controllers/users.php');

//models
require('models/home.php');
require('models/share.php');
require('models/user.php');

$bootstrap = new bootstrap($_GET);
$controller = $bootstrap -> createController(); 

if ($controller){
	$controller -> executeAction();
}
?>
