<?php

class Student
{
    //properties
    private int $studentId;
    private string $name;
    private string $email;
    private int $classId;
    

    //constructor
    public function __construct($studentId, $namee, $emaile, $classIde)
    {
        $this->id = $studentId;
        $this->name = $namee;
        $this->email = $emaile;
        $this->classId = $classIde;
        
    }



    // getters 
    public function getStudentId()
    {
        return $this->studentId;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getclassId()
    {
        return $this->classId;
    }

   

}
