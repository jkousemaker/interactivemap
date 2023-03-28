<?php

class Component
{
    // Properties
    public $id;
    public $name;
    public $role;
    public $description;
    public $cords;
    public $shape;

    // Methods
    public function __construct($name, $role, $description, $cords, $shape)
    {
        $this->name = $name;
        $this->role = $role;
        $this->description = $description;
        $this->cords = $cords;
        $this->shape = $shape;
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

    public function getShape()
    {
        return $this->shape;
    }
}

