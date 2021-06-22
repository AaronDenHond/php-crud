<?php

class ClassLoader {

    private array $allCampusClasses;


public function __construct() {

    $connection = Database::openConnection();
    $handle = $connection->prepare('SELECT * from class');
    $handle->execute();
    $queriedAllCampusClasses = $handle->fetchAll();

    foreach($queriedAllCampusClasses as $campusClass) {

        $this->allCampusClasses = new campusClass( $campusClass['classId'], $campusClass['className'], $campusClass['location'], $campusClass['teacherId']); 
    }

}
//getter for all students
public function getAllStudents() {

    return $this->allStudents;
}

//getter for all data 1 student by searching by id

public function getStudentById($studentId) {

    foreach($this->allStudents as $student) {
        if ($student->getStudentId() === $studentId ) {

            return $student;
        }
    }
}


}