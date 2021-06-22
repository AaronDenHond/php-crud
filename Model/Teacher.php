<?php

class Teacher extends Person
{
    //properties
   
   
    

    //constructor
    public function __construct(string $Name, string $Email, int $Id)
    {
        parent::__construct( $Name,  $Email,  $Id);
        
    }

}

