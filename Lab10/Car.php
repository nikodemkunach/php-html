<?php

class Car{
    private $id, $make, $model, $price, $year, $description, $photoLink;

    public function __construct($id,$make, $model, $price, $year, $description, $photoLink){
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->price = $price;
        $this->description = $description;
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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
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