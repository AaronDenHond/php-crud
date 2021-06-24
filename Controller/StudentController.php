<?php
declare(strict_types=1);

class StudentController {

    public function render(array $GET, array $POST) {
        //studentArray is an array filled with objects 
        
        if(isset($POST['name']) && isset($POST['email']) && isset($POST['classId']) && isset($POST['create'])) {
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = (int)$POST['classId'];
            $this->addStudent($name,$email,$classId);
            
        }

        elseif(isset($POST['delete'])) {
            //via $POST['delete'] krijgen we de student Id die we met de method in value krijgen
            $this->deleteStudent($POST['delete']);
        }

        elseif(isset($POST['update'])) {
          
            $name = $POST['name'];
            $email = $POST['email'];
            $classId = (int)$POST['classId'];
            $this->updateStudent($name,$email,$classId,(int)$POST['update']);
        }

        $studentRepo = new StudentLoader();
        $studentOne = $studentRepo->getStudentById(1);
        $allStudents = $studentRepo->getAllStudents();
        
        require 'View/studentpage.php';

    }

    public function addStudent($name,$email,$classId) {
       $studentRepo = new StudentLoader();
       $studentRepo->addStudent($name,$email,$classId);
    }

    public function deleteStudent($id) {
        $studentRepo = new StudentLoader();
        $removedStudent = $studentRepo->deleteStudent($id);
    }
   
    public function updateStudent($name,$email,$classId, $id) {
    $studentRepo = new StudentLoader();
    $studentRepo->updateStudentById($name,$email,$classId,$id);
    }
}



