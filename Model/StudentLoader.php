<?php

class StudentLoader {

    private array $allStudents;


public function __construct() {

    $connection = Database::openConnection();
    $handle = $connection->prepare('SELECT * from student');
    $handle->execute();
    $queriedAllStudents = $handle->fetchAll();

    foreach($queriedAllStudents as $student) {

        $this->allStudents = new Student( $student['studentId'], $student['name'], $student['email'], $student['classId']); 
    }

}
//getter for all students
public function getAllStudents() {

    return $this->allStudents;
}

//getter for all data 1 student by searching by id

public function getStudentById($studentId) {

    foreach($this->allStudents as $student) {
        if ($student['studentId'] === $studentId ) {

            return $student;
        }
    }
}


}