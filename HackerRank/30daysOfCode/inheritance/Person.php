<?php

class person {
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;

    public function __construct($first_name, $last_name, $idNumber, $scores=[])

    {
        parent::__construct($first_name, $last_name, $idNumber);
        $this->testScores = $scores;
    }

    public function calculate(){

        $average = array_sum($this->testScores)/count($this->testScores);

        $letter = "";

        if ($average >= 90 && $average <= 100) {
            $letter = "O";
        } else if ($average < 90 && $average >= 80) {
            $letter = "E";
        } else if ($average < 80 && $average >= 70) {
            $letter = "A";
        } else if ($average < 70 && $average >= 55) {
            $letter = "P";
        } else if ($average < 55 && $average >= 40) {
            $letter = "D";
        } else if ($average < 40) {
            $letter = "T";
        }

        return $letter;
    }
}




$student = new Student("Alice", "Wanjiku",1, [100, 80]);
$student->printPerson();
echo "Grade: {$student->calculate()}" . PHP_EOL;

var_dump(array_map(function ($item){
    return intval($item);
}, ["100", "200"]));