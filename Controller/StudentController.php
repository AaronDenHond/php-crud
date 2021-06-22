<?php
declare(strict_types=1);

class StudentController {

    public function render(array $GET, array $POST) {
          $studentOne = new StudentLoader();
          $studentTest = $studentOne->getStudentById(1);

    }

}


require 'View/homepage.php';
