<?php

class Student
{
    //properties
    private int $id;
    private string $name;
    private string $email;
    private int  $classID;
    private string $teacher;

    //constructor
    public function __construct($ide, $namee, $emaile, $classIDe, $teachere)
    {
        $this->id = $ide;
        $this->name = $namee;
        $this->email = $emaile;
        $this->classID = $classIDe;
        $this->teacher = $teachere;
    }



    // getters 
    public function getID()
    {
        return $this->id;
    }


    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getclassID()
    {
        return $this->classID;
    }

    public function getTeacher()
    {
        return $this->teacher;
    }


}
