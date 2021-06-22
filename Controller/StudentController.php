<?php
declare(strict_types=1);

class StudentController {

    public function render(array $GET, array $POST) {
        //studentArray is an array filled with objects     
        $studentArray = new StudentLoader();
        $studentOne = $studentArray->getStudentById(1);
        $allStudents = $studentArray->getAllStudents();
        
        require 'View/studentpage.php';

    }

}



