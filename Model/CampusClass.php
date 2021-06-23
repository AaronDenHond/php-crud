<?php

class CampusClass {
private int $classId;
private string $className;
private string $location;
private int $teacherId;



public function __construct($ClassId, $ClassName, $Location, $TeacherId) {
    $this->classId = $ClassId;
    $this->className = $ClassName;
    $this->location = $Location;
    $this->teacherId = $TeacherId;

}




/**
 * Get the value of classId
 *
 * @return int
 */
public function getClassId(): int
{
return $this->classId;
}

/**
 * Get the value of className
 *
 * @return string
 */
public function getClassName(): string
{
return $this->className;
}

/**
 * Get the value of location
 *
 * @return string
 */
public function getLocation(): string
{
return $this->location;
}

/**
 * Get the value of teacherId
 *
 * @return int
 */
public function getTeacherId(): int
{
return $this->teacherId;
}
}






//value id gebruiken in logica, maar wij selecten een naam in input field