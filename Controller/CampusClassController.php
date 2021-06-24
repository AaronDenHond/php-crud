<?php
declare(strict_types = 1);

class CampusClassController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        print_r($POST);
        if(isset($POST['className']) && isset($POST['location']) && isset($POST['create'])) {
                   $className = $POST['className'];
                   $location = $POST['location'];
                   $teacherId = $POST['teacherId'];
                   $this->addCampusClass($className,$location,$teacherId);
        }

        elseif(isset($POST['delete'])) {
               
              $this->deleteCampusClass($POST['delete']);

        }
        
        //CampusClassLoader is een blueprint van de database die we kunnen opvullen, pas als we methods gebruiken kunnen we 'opvullen' , van cookiecutter naar cookie
        $classRepo = new CampusClassLoader();
        $classOne = $classRepo->getCampusClassById(1);
        $allClasses = $classRepo->getAllCampusClasses();
        

        $teacherRepo = new TeacherLoader();
        $allTeachers = $teacherRepo->getAllTeachers();

        

        require 'View/campusclasspage.php';
    }

    
    public function addCampusClass($className,$location,$teacherId){
            
        $campusClassRepo = new CampusClassLoader();
        $campusClassRepo->addCampusClass($className,$location,$teacherId);
   }

   public function deleteCampusClass($classId) {
       $campusClassRepo = new CampusClassLoader();
       $campusClassRepo->deleteCampusClass($classId);

   }
}