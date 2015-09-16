<?php
#
# CSCI 490 - Software Engineering
# Developer: Cameron Collins
# Team: No Clue
#
class Course {

    private $name;
    private $department;
    private $number;
    private $difficulty;


    function __construct($name="", $department="", $number=0, $difficulty=0) {
        $this->name = $name;
        $this->department = $department;
        $this->number = $number;
        $this->difficulty = $difficulty;
    }

    #getters
    function getName() {
        return $this->name;
    }

    function getDepartment() {
        return $this->department;
    }

    function getNumber() {
        return $this->number;
    }

    function getDifficulty() {
        return $this->difficulty;
    }

    #setters
    function setName($name) {
        if(strlen($name) > 3)
             $this->name = $name;
    }

    function setDepartment($department) {
        if(strlen($department))
            $this->department = $department;
    }

    function setNumber($number) {
        $this->number = $number;
    }

    function setDifficulty($difficulty) {
        $this->difficulty = $difficulty;
    }

    #comparison
    function compareTo(Course $other) {
        if ($this->getDifficulty() > $other->getDifficulty())
            return 1;
        elseif ($this->getDifficulty() < $other->getDifficulty())
            return -1;
        else
            return 0;
    }

    #String output 
    function toString() {
        $toString = "";
        $toString .= "Name: " . $this->name . "\n";
        $toString .= "Title: " . $this->department . " " . $this->number . "\n";
        $toString .= "Difficulty: " . $this->difficulty . "\n";
        return $toString;
    }
}

?>
