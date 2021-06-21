<?php

class Teacher extends Person
{
    //properties
    private int $teacherId;
   
    

    //constructor
    public function __construct($teacherIdi)
    {
        parent::__construct($this->namu, $this->emailu);
        $this->teacherId = $teacherIdi;
    }


   
    public function getTeacherId(): int
    {
        return $this->teacherId;
    }
}

