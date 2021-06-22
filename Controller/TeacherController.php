<?php
declare(strict_types = 1);

class TeacherController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        

        $teacherArray = new TeacherLoader();
        $teacherOne = $teacherArray->getTeacherById(1);
        $allTeachers = $teacherArray->getAllTeachers();
        

        

        

        require 'View/teacherpage.php';
    }
}


//maak student class
//hardcode stuff er in via new object maken, var dump en kijk of werkt, probeer method op student als getId
//database in orde maken
//studentLoader maken en proberen info uit te halen (1 of alle, vardumpen in controllers)
//eerst alle, dan 1 specific