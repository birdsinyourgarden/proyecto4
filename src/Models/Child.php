<?php

namespace minniePerez\Models;

use minniePerez\Database;

class Child{

    private ?int $id;
    private string $childName;
    private ?int $age;
    private string $place;
    private string $giftSuggestion;
    private ?string $dateTime;

    private $table = "childrenTeeth";
    private $database;

    public function __construct($id = null, $childName = "", $age = "", $place = "", $giftSuggestion = "",$dateTime = null){

        $this->id = $id;
        $this->childName = $childName;
        $this->age = $age;
        $this->place = $place;
        $this->giftSuggestion = $giftSuggestion;
        $this->dateTime = $dateTime;

        if(!$this->database){
        $this->database = new Database();
        }
    }

    public function all(){
        $query = $this->database->mysql->query("select * from {$this->table}");
        $childrenArray = $query->fetchAll();

        $childrenList=[];

        foreach ($childrenArray as $child){
            $childItem = new Child($child["id"], $child["childName"], $child["age"], $child["place"], $child["giftSuggestion"], $child["dateTime"]);

            array_push($childrenList, $childItem);
        }

        return $childrenList;
    }

    public function getChildName(){
        return $this->childName;
    }

    public function getAge(){
        return $this->age;
    }

    public function getId(){
        return $this->id;
    }

    public function getDateTime(){
        return $this->dateTime;
    }

    public function getPlace(){
        return $this->place;
    }

    public function getGiftSuggestion(){
        return $this->giftSuggestion;
    }

    public function save(){
        $this->database->mysql->query("INSERT INTO `{$this->table}` (`childName`, `age`, `place`, `giftSuggestion`) VALUES ('$this->childName', '$this->age','$this->place','$this->giftSuggestion');");
    }
}
