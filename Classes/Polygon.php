<?php

class Polygon
{
    // Properties
    public $id;
    public $name;
    public $role;
    public $description;
    public $points;
    public $type;

    // Methods
    public function __construct($name, $role, $description, $points)
    {
        $this->name = $name;
        $this->role = $role;
        $this->description = $description;
        $this->points = $points;
        $this->type = "polygon";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPoints()
    {
        return $this->points;
    }

    public function getType()
    {
        return $this->type;
    }
}

