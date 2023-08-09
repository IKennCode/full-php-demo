<?php
$instance_count = 0;

class Person
{
    private $isVip;
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName, $lastName, $age, $isVip)
    {
        echo "constructor called <br>";
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->isVip = $isVip;
    }

    public function getFullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    public function getIsVip()
    {
        return $this->isVip;
    }

    public static function create_vip_person($firstName, $lastName, $age)
    {
        return new Person($firstName, $lastName, $age, true);
    }
}

class House
{
    private $vips = [];
    private $visitors = [];
    private $address = "";
    private $price = 0;
    public static $instance_count = 0;

    public function __construct($address, $price)
    {
        $this->address = $address;
        $this->price = $price;
        House::$instance_count++;
    }

    public function enterVisitor($person)
    {
        if ($person->getIsVip()) {
            $this->vips[] = $person;
        } else {
            $this->visitors[] = $person;
        }
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($currentAddress)
    {
        $this->address = $currentAddress;
    }

    public function getVisitors()
    {
        return $this->visitors;
    }

    public function getVips()
    {
        return $this->vips;
    }
}
$davy = new Person("Davy", "Yabut", 23, true);
$john = new Person("John", "Doe", 21, false);
$jane = new Person("Jane", "Doe <br>", 21, false);

$house = new House("Manila", 200000);
$house->enterVisitor($john);
$house->enterVisitor($jane);
$house->enterVisitor($davy);
echo "<br>------VIP List------\n <br>";
echo '<pre>';
print_r($house->getVips());
echo '</pre>';
echo "<br>------Visitor List------\n <br>";
echo '<pre>';
print_r($house->getVisitors());
echo '</pre>';


$vip_person = Person::create_vip_person("Juan", "Dela Cruz", 20);
