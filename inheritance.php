<?php
class person
{
    public $name, $age, $salary;

    public function __construct($n, $a, $s)
    {
        $this->name = $n;
        $this->age = $a;
        $this->salary = $s;
    }
    public function show()
    {
        echo "<h3>Employee Profile
        </h3>";
        echo "<h4>Name: $this->name</h4>";
        echo "<h4>Age: $this->age</h4>";
        echo "<h4>Salary: $this->salary</h4>";
    }
}
class manager extends person
{
    public $department = "Software Engineer", $bonus = 5000;

    public function show()
    {

        echo "<h3>Manager Profile
        </h3>";
        echo "<h4>Name: $this->name</h4>";
        echo "<h4>Age: $this->age</h4>";
        echo "<h4>Salary: $this->salary</h4>";
        echo "<h4>Department: $this->department</h4>";
        echo "<h4>Bonus: $this->bonus</h4>";
    }
}
$e1 = new person("Ram", 20, 25000);
$e1->show();
$m1 = new manager("Asmit Chaudhary", 24, 85000);
$m1->show();
