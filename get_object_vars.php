<?php

class Person {
    private $age, $address;
    public $name, $occupation;
    static $gender;

    public function __construct($age,$name,$occupation,$gender) {
        $this->age = $age;
        $this->name = $name;
        $this->occupation = $occupation;
        self::$gender = $gender;
    }
   
    public function toArray() {
        //returns both the private, public and protected properties of the object.
        return get_object_vars($this);
    }
}

$person = new Person(18, "Mustapha", "Developer", "Male");
var_dump(get_object_vars($person));
//returns only the accessible public properties of the object 
//array(2) { ["name"]=> string(8) "Mustapha" ["occupation"]=> string(9) "Developer" }


echo "<br />";
var_dump($person->toArray());
//array(4) { ["age"]=> int(18) ["address"]=> NULL ["name"]=> string(8) "Mustapha" ["occupation"]=> string(9) "Developer" }

?>