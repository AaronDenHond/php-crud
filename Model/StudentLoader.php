<?php

class StudentLoader
{

    private array $allStudents = [];


    public function __construct()
    {

        $connection = Database::openConnection();
        $handle = $connection->prepare('SELECT * from student');
        $handle->execute();
        $queriedAllStudents = $handle->fetchAll();

        foreach ($queriedAllStudents as $student) {
            array_push($this->allStudents, new Student((string)$student['name'], (string)$student['email'], (string)$student['studentId'], (int)$student['classId']));
            //$this->allStudents[] = new Student( (int)$student['name'], (string)$student['email'], (string)$student['studentId'], (int)$student['classId']);  
        }
        // [] is js .push   array_push($this->allStudents, new Student((int)$student['name'], (string)$student['email'], (string)$student['studentId'], (int)$student['classId']))
    }
    //getter for all students
    public function getAllStudents()
    {

        return $this->allStudents;
    }

    //getter for all data 1 student by searching by id

    public function getStudentById($studentId)
    {

        foreach ($this->allStudents as $student) {
            if ($student->getId() === $studentId) {

                return $student;
            }
        }
    }

    public function addStudent($name,$email,$classId) {
        $connection = Database::openConnection();
        $handle = $connection->prepare('INSERT INTO student (name, email, classId) VALUES (:name,:email,:classId)');
        $handle->bindValue(':name',$name);
        $handle->bindValue(':email',$email);
        $handle->bindValue(':classId',$classId);
        $handle->execute();

    }

    public function deleteStudent($name,$email,$classId) {
        $connection = Database::openConnection();
        $handle = $connection->prepare('DELETE FROM student');
        $handle->bindValue(':name',$name);
        $handle->bindValue(':email',$email);
        $handle->bindValue(':classId',$classId);
        $handle->execute();
    }
}
