<?php
// Class 
class Calculation
{
    // Properties
    public $a, $b, $c;

    // Method for addition
    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }

    // Method for subtraction
    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}

// Object for addition
$c1  = new Calculation();
$c1->a = 10;
$c1->b = 5;
echo "Sum Value: " . $c1->sum() . "<br>";

// Object for subtraction
$c2 = new Calculation();
$c2->a = 15; // Changed from $c1 to $c2
$c2->b = 5;  // Changed from $c1 to $c2
echo "Sub Value: " . $c2->sub() . "<br>"; // Changed from $c1 to $c2
