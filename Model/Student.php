<?php

class Student extends Person
{
    //properties
   
    private int $classId;
    

    //constructor
    /**
     * !yo can I even do this in the constructor? Is this legal?
     */
    public function __construct($Name, $Email, int $Id, int $ClassId){
     parent::__construct($Name, $Email, (int)$Id); //parent construct argument check!!!!
     
     $this->classId = $ClassId;
    }



    // getters 
   



    public function getclassId() : int
    {
        return $this->classId;
    }

   

}
