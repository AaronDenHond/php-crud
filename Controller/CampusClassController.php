<?php
declare(strict_types = 1);

class CampusClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        if(isset($POST['className']) && isset($POST['location']) && isset($POST['teacherId'])) {
                   $className = $POST['className'];
                   $location = $POST['location'];
                   $teacherId = $POST['teacherId'];
                   $this->addCampusClass($className,$location,$teacherId);
        }
        
        $classRepo = new CampusClassLoader();
        $classOne = $classRepo->getCampusClassById(1);
        $allClasses = $classRepo->getAllCampusClasses();
        
        

        require 'View/campusclasspage.php';
    }

    
    public function addCampusClass($className,$location,$teacherId){
            
        $campusClassRepo = new CampusClassLoader();
        $campusClassRepo->addCampusClass($className,$location,$teacherId);
   }
}