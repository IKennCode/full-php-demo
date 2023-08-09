<?php

class Person
{

    //Access Modifier public, private, protected
    public $first_name;
    public $last_name;
    private $age;
    protected $address;
    const MESSAGE = "Good bye!";

    function __construct($first_name, $last_name, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
        echo "$this->first_name __construct called <br>";
    }

    function get_age()
    {
        //code condition here
        return $this->age;
    }

    function set_age($value)
    {
        if ($value > 0) {
            $this->age = $value;
        }
    }

    function getFullName()
    {
        return $this->first_name . " " . $this->last_name . " " . $this->get_age() . "<br>";
    }

    function __destruct()
    {
        echo "$this->first_name  __destruct called <br>";
    }
}

$juan = new Person("Juan", "Dela Cruz", 20);
$john = new Person("John", "Doe", 23);

echo $juan->getFullName();

$john->first_name = "Jane";
$john->set_age(25);

echo $john->getFullName();
echo $john::MESSAGE;


class Developer extends Person
{
    public $programming_language;

    function __construct($first_name, $last_name, $age, $programming_language)
    {
        parent::__construct($first_name, $last_name, $age);
        $this->programming_language = $programming_language;
        $this->address = "Default address";
    }

    function get_address()
    {
        return $this->address;
    }
}


$dev = new Developer("Davy", "Yabut", 25, "PHP");
echo $dev->getFullName();

echo $dev->get_address();
