<?php
class person
{
    //  public can access by class, outside class, Derived Class
    // private can access by class itself
    // protected can access by class itself, derived class
    protected $name;

    public function __construct($n)
    {
        $this->name = $n;
    }

    public function show()
    {
        echo "Hello, my name is " . $this->name . "<br>";
    }
}
class Employee extends person
{
    public $address = "Duhabi";
    public function show()
    {
        echo "Hello, my name is " . $this->name . " and I am from : " . $this->address;
    }
}
$p1 = new person("Asmit Chaudhary");

$p1->show();

$e1 = new Employee("Aashish");
$e1->show();
