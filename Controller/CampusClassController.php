<?php
declare(strict_types = 1);

class CampusClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        

        $classArray = new CampusClassLoader();
        $classOne = $classArray->getCampusClassById(1);
        $allClasses = $classArray->getAllCampusClasses();
        
        
       
        

        

        require 'View/campusclasspage.php';
    }
}