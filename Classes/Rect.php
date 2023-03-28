<?php

class Rect
{
    // Properties
    public $id;
    public $name;
    public $role;
    public $description;
    public $cords;
    public $size;
    public $type;

    // Methods
    public function __construct($name, $role, $description, $cords, $size)
    {
        $this->name = $name;
        $this->role = $role;
        $this->description = $description;
        $this->cords = $cords;
        $this->size = $size;
        $this->type = "rect";
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

    public function getCords()
    {
        return $this->cords;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getType()
    {
        return $this->type;
    }
}

