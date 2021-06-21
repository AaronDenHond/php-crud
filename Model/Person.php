<?php

class Person {
//properties
    private string $name;
    private string $email;

//constructor
public function __construct($namu, $emailu) {

    $this->name = $namu;
    $this->email = $emailu;
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

}