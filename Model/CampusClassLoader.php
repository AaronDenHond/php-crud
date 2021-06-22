<?php

class CampusClassLoader {

    private array $allCampusClasses = [];


public function __construct() {

    $connection = Database::openConnection();
    $handle = $connection->prepare('SELECT * from class');
    $handle->execute();
    $queriedAllCampusClasses = $handle->fetchAll();

    foreach($queriedAllCampusClasses as $campusClass) {

        array_push($this->allCampusClasses, new CampusClass( (int)$campusClass['classId'], $campusClass['className'], $campusClass['location'], (int)$campusClass['teacherId'])); 
    }

}
//getter for all class
public function getAllCampusClasses() {

    return $this->allCampusClasses;
}

//getter for all data 1 class by searching by id

public function getCampusClassById($id) {

    foreach($this->allCampusClasses as $campusClass) {
        if ($campusClass->getClassId() === $id ) {

            return $campusClass;
        }
    }
}


}