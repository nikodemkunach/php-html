<?php

class Car{
    private $id, $make, $model, $year, $price, $capacity, $photoLink;

    public function __construct($id,$make, $model, $year, $price, $capacity, $photoLink){
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->capacity = $capacity;
        $this->photoLink = $photoLink;
    }
    
    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }


    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }


    public function getMake()
    {
        return $this->make;
    }

    public function setMake($make)
    {
        $this->make = $make;
    }

    public function getModel()
    {
        return $this->model;
    }


    public function setModel($model)
    {
        $this->model = $model;
    }

    public function getPhotoLink()
    {
        return $this->photoLink;
    }


    public function setPhotoLink($photoLink)
    {
        $this->photoLink = $photoLink;
    }


    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }


    public function getYear()
    {
        return $this->year;
    }

    public function setYear($year)
    {
        $this->year = $year;
    }
}