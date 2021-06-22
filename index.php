<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//include all your model files here
require 'Model/Database.php';
require 'Model/Person.php';
require 'Model/Teacher.php';
require 'Model/CampusClass.php';
require 'Model/Student.php';
require 'Model/TeacherLoader.php';
require 'Model/StudentLoader.php';
require 'Model/CampusClassLoader.php';

//include all your controllers here
require 'Controller/HomepageController.php';
require 'Controller/InfoController.php';
require 'Controller/StudentController.php';

//you could write a simple IF here based on some $_GET or $_POST vars, to choose your controller
//this file should never be more than 20 lines of code!

$controller = new HomepageController();
if(isset($_GET['page']) && $_GET['page'] === 'info') {
    $controller = new InfoController();
}


$controller->render($_GET, $_POST);



//overview voor general info alle 3
//detailed per page