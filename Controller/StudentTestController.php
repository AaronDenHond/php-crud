<?php
declare(strict_types=1);

class StudentTestController {

    public function render(array $GET, array $POST) {
          $studentOne = new StudentLoader();
          $studentTest = $studentOne->getStudentById(1);

    }

}


require 'View/homepage.php';
