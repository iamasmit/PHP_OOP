<?php
// Class
class calculation
{
    // Properties
    public $a, $b, $c;

    // Constructor
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }
    // Method
    public function add()
    {
        $this->c = $this->a + $this->b;
        echo "The add : " . $this->c .
            "<br>";
    }
    public function sub()
    {
        $this->c = $this->a - $this->b;
        echo "The sub : " . $this->c;
    }
}
// Object
$c1 = new calculation(10, 15);
$c1->add();
$c2 = new calculation(25, 20);
$c2->sub();
