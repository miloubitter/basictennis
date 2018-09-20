<?php

//use App\Controllers\Web\LoginController;
use App\Controllers\BasicController;
use App\Controllers\LesinfoController;
use App\Controllers\TennislessenController;
use App\Controllers\TarievenController;
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

// ****** Tennislessen ******
else if ($route == 'tenniskids') {
    $bookController = new TennislessenController();
    $bookController->tennisKids();
}
else if ($route == 'jeugdlessen') {
    $bookController = new TennislessenController();
    $bookController->jeugdLessen();
}
else if ($route == 'volwassenen') {
    $bookController = new TennislessenController();
    $bookController->Volwassenen();
}
else if ($route == 'privelessen') {
    $bookController = new TennislessenController();
    $bookController->Privelessen();
}

// ****** Lesinfo ******
else if ($route == 'lesdatazomer') {
    $bookController = new LesinfoController();
    $bookController->lesdataZomer();
}
else if ($route == 'lesdatawinter') {
    $bookController = new LesinfoController();
    $bookController->lesdataWinter();
}
else if ($route == 'voorwaarden') {
    $bookController = new LesinfoController();
    $bookController->Voorwaarden();
}

// ****** Tarieven Zomer/ Winter ******
else if ($route == 'tarievenZomer') {
    $bookController = new TarievenController();
    $bookController->tarievenZomer();
}
else if ($route == 'tarievenWinter') {
    $bookController = new TarievenController();
    $bookController->tarievenWinter();
}

// ****** Overige navigatie opties ******
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

