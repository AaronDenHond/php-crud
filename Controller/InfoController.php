<?php
declare(strict_types = 1);

class InfoController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        //studentOne is an array filled with objects     
        $studentArray = new StudentLoader();
        $studentOne = $studentArray->getStudentById(1);
        var_dump($studentOne);

        $teacherArray = new TeacherLoader();
        $teacherOne = $teacherArray->getTeacherById(1);
        var_dump($teacherOne);

        $classArray = new CampusClassLoader();
        $classOne = $classArray->getCampusClassById(1);
        $classAllTest = $classArray->getAllCampusClasses();
        var_dump($classOne);
        var_dump($classAllTest);
        

        

        require 'View/info.php';
    }
}


//maak student class
//hardcode stuff er in via new object maken, var dump en kijk of werkt, probeer method op student als getId
//database in orde maken
//studentLoader maken en proberen info uit te halen (1 of alle, vardumpen in controllers)
//eerst alle, dan 1 specific