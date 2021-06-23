<?php

class TeacherLoader {
//loaderclasses brengen alles samen, samenvoegen van data in bruikbare objecten
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
/**
 * ! issue was : codeflow, I added a new teacher AFTER getting all teachers
 */
public function addTeacher($name, $email){
    
    $connection = Database::openConnection();
    $handle = $connection->prepare('INSERT INTO teacher (name, email) VALUES (:name, :email)'); //INSERT INTO teacher (name, email) VALUES ('aaron', 'aar@on.com')
    
    $handle->bindValue(":name", $name);
    $handle->bindValue(":email", $email);
    $handle->execute();
    /* $addTeacher = $handle->fetch(); */

/**
 * TODO remove needing to input teacherid, should autoincrement so no need
 */

}


}