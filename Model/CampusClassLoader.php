<?php

class CampusClassLoader
{

    private array $allCampusClasses = [];


    public function __construct()
    {

        $connection = Database::openConnection();
        $handle = $connection->prepare('SELECT * from class');
        $handle->execute();
        $queriedAllCampusClasses = $handle->fetchAll();

        foreach ($queriedAllCampusClasses as $campusClass) {

            array_push($this->allCampusClasses, new CampusClass((int)$campusClass['classId'], $campusClass['className'], $campusClass['location'], (int)$campusClass['teacherId']));
        }
    }
    //getter for all class
    public function getAllCampusClasses()
    {

        return $this->allCampusClasses;
    }

    //getter for all data 1 class by searching by id

    public function getCampusClassById($id)
    {

        foreach ($this->allCampusClasses as $campusClass) {
            if ($campusClass->getClassId() === $id) {

                return $campusClass;
            }
        }
    }

    public function addCampusClass($className, $location, $teacherId)
    {

        $connection = Database::openConnection();
        $handle = $connection->prepare('INSERT INTO class(className,location,teacherId) VALUES(:className,:location,:teacherId)');
        $handle->bindValue(':className', $className);
        $handle->bindValue(':location', $location);
        $handle->bindValue(':teacherId', $teacherId);
        $handle->execute();
    }

    public function deleteCampusClass($classId)
    {
        $connection = Database::openConnection();
        $handle = $connection->prepare('UPDATE student SET classId = NULL WHERE classId = :classid');  //setting student classId to 0 after deleting class
        $handle->bindValue(':classid', $classId);
        $handle->execute();

        $handle = $connection->prepare('DELETE FROM class WHERE classId = :classid');
        $handle->bindValue(':classid', $classId);
        $handle->execute();
        
    }

    public function updateCampusClass($className, $location, $teacherId, $id)
    {
        $connection = Database::openConnection();
        $handle = $connection->prepare('UPDATE class SET className = :className, location = :location, teacherId = :teacherId WHERE classId = :classId');
        $handle->BindValue(':className', $className);
        $handle->BindValue(':location', $location);
        $handle->BindValue(':teacherId', $teacherId);
        $handle->BindValue(':classId', $id);
        $handle->execute();
    }
}
