<?php

class Person {
//properties
    private string $name;
    private string $email;
    private int $id;

//constructor
public function __construct(string $Name, string $Email, int $Id) {

    $this->name = $Name;
    $this->email = $Email;
    $this->id = $Id;
}

//getters


public function getName()
{
    return $this->name;
}

public function getEmail()
{
    return $this->email;
}

public function getId() : int
{
    return $this->id;
}

}