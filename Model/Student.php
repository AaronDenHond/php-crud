<?php

class Student extends Person
{
    //properties
   
    private int $classId;
    

    //constructor
    
    public function __construct(string $Name, string $Email, int $Id, int $ClassId){
     parent::__construct($Name, $Email, (int)$Id); 
     
     $this->classId = $ClassId;
    }



    // getters 
   



    public function getclassId() : int
    {
        return $this->classId;
    }

   

}
