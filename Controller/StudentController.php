<?php
declare(strict_types=1);

class StudentController {

    public function render(array $GET, array $POST) {
        //studentArray is an array filled with objects 
        
        if(isset($POST['name']) && isset($POST['email']) && isset($POST['classId'])) {
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            $this->addStudent($name,$email,$classId);
            
        }

        elseif(isset($POST['delete'])) {
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = $POST['classId'];
            $this->deleteStudent($name,$email,$classId);
        }

        $studentRepo = new StudentLoader();
        $studentOne = $studentRepo->getStudentById(1);
        $allStudents = $studentRepo->getAllStudents();
        
        require 'View/studentpage.php';

    }

    public function addStudent($name,$email,$classId) {
       $studentRepo = new StudentLoader();
       $addedStudent = $studentRepo->addStudent($name,$email,$classId);
    }

    public function deleteStudent($name,$email,$classId) {
        $studentRepo = new StudentLoader();
        $removedStudent = $studentRepo->deleteStudent($name,$email,$classId);
    }

}



