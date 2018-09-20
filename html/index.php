<?php

//use App\Controllers\Web\LoginController;
use App\Controllers\BasicController;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';

session_start();

$dotenv = new DotEnv(__DIR__ . '/../');
$dotenv->load();

//set_exception_handler('Infrastructure\ErrorHandler::handleExceptions');
//set_error_handler('Infrastructure\ErrorHandler::handleErrors');

function view($view, $viewModel){
    include __DIR__ . '/../app/Views/layout.php';
}

$route = $_GET['route']??'index';
$id =$_GET['id']??null;
$method = $_SERVER['REQUEST_METHOD'];

// ****** Main route ******
if($route == 'index') {
    $bookController = new BasicController();
    $bookController->index();
}
else if ($route == 'tenniskids') {
    $bookController = new BasicController();
    $bookController->tennisKids();
}
else if ($route == 'jeugdlessen') {
    $bookController = new BasicController();
    $bookController->jeugdLessen();
}
else if ($route == 'volwassenen') {
    $bookController = new BasicController();
    $bookController->Volwassenen();
}
else if ($route == 'privelessen') {
    $bookController = new BasicController();
    $bookController->Privelessen();
}
else if ($route == 'tennislessen') {
    $bookController = new BasicController();
    $bookController->Tennislessen();
}
else if ($route == 'tarieven') {
    $bookController = new BasicController();
    $bookController->Tarieven();
}
else if ($route == 'bespanservice') {
    $bookController = new BasicController();
    $bookController->Bespanservice();
}
else if ($route == 'shop') {
    $bookController = new BasicController();
    $bookController->Shop();
}
else if ($route == 'contact') {
    $bookController = new BasicController();
    $bookController->Contact();
}







