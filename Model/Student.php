<?php

class Student extends Person
{
    //properties
    private int $studentId;
    private int $classId;
    

    //constructor
    /**
     * !yo can I even do this in the constructor? Is this legal?
     */
    public function __construct($studentIde, $classIde){
     parent::__construct($this->namu, $this->emailu); //parent construct argument check!!!!
     $this->studentId = $studentIde;
     $this->classId = $classIde;
    }



    // getters 
    public function getStudentId() : int
    {
        return $this->studentId;
    }



    public function getclassId() : int
    {
        return $this->classId;
    }

   

}
