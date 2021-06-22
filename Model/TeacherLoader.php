<?php

class TeacherLoader {

    private array $allTeachers = [];


public function __construct() {

    $connection = Database::openConnection();
    $handle = $connection->prepare('SELECT * from teacher');
    $handle->execute();
    $queriedAllTeachers = $handle->fetchAll();

    foreach($queriedAllTeachers as $teacher) {

        array_push($this->allTeachers,new Teacher( $teacher['name'], $teacher['email'], $teacher['teacherId'])); 
    }

}
//getter for all students
public function getAllTeachers() {

    return $this->allTeachers;
}

//getter for all data 1 student by searching by id

public function getTeacherById($teacherId) {

    foreach($this->allTeachers as $teacher) {
        if ($teacher->getId() === $teacherId ) {

            return $teacher;
        }
    }
}


}