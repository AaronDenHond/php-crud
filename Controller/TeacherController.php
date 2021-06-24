<?php

declare(strict_types=1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        if (isset($POST['name']) && isset($POST['email']) && isset($POST['create'])) {
            /* $newTeacher = new Teacher($POST['name'], $POST['email'], $POST['id']); no need to make here, we do in loader*/
            $name = $POST['name'];
            $email = $POST['email'];
            $this->addTeacher($name, $email);
            /**
             * ! issue was : codeflow, I added a new teacher AFTER getting all teachers
             */
        }

        if (isset($POST['delete'])) {
            $this->deleteTeacher($POST['delete']);
      }

      if (isset($POST['update'])) {
        $name = $POST['name'];
        $email = $POST['email'];
        $id = $POST['update'];
        $this->updateTeacher($name, $email, (int)$id);
    }  
        $teacherRepo = new TeacherLoader();
        $teacherOne = $teacherRepo->getTeacherById(1);
        $allTeachers = $teacherRepo->getAllTeachers();
      
         

        require 'View/teacherpage.php';
    }
    /**
     * !why another addteacher method when we already have one? I know its codeflow based but weird
     */
    public function addTeacher($name, $email)
    {

        $teacherRepo = new TeacherLoader();
        $teacherRepo->addTeacher($name, $email);
    }
   
    public function deleteTeacher($id) {
        $teacherRepo = new TeacherLoader();
        $teacherRepo->deleteTeacher($id);
    }

    public function updateTeacher($name, $email, $id) {
        $teacherRepo = new TeacherLoader();
        $teacherRepo->updateTeacherById($name, $email, $id);
    }

}


//maak student class
//hardcode stuff er in via new object maken, var dump en kijk of werkt, probeer method op student als getId
//database in orde maken
//studentLoader maken en proberen info uit te halen (1 of alle, vardumpen in controllers)
//eerst alle, dan 1 specific