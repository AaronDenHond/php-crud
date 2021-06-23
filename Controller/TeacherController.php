<?php

declare(strict_types=1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        if (isset($POST['name']) && isset($POST['email'])) {
            /* $newTeacher = new Teacher($POST['name'], $POST['email'], $POST['id']); no need to make here, we do in loader*/
            $name = $POST['name'];
            $email = $POST['email'];
            $this->addTeacher($name,$email);
            
            
        }
        $teacherRepo = new TeacherLoader();
        $teacherOne = $teacherRepo->getTeacherById(1);
        $allTeachers = $teacherRepo->getAllTeachers();
       


        require 'View/teacherpage.php';
    }
    public function addTeacher($name, $email)
    {

        $teacherRepo = new TeacherLoader();
        $teacherRepo->addTeacher($name, $email);
       
    }
}


//maak student class
//hardcode stuff er in via new object maken, var dump en kijk of werkt, probeer method op student als getId
//database in orde maken
//studentLoader maken en proberen info uit te halen (1 of alle, vardumpen in controllers)
//eerst alle, dan 1 specific