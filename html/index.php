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







