<?php
declare(strict_types = 1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        //studentOne is an array filled with objects     
        $studentOne = new StudentLoader();
        $studentTest = $studentOne->getStudentById(1);
        var_dump($studentTest);
        require 'View/info.php';
    }
}