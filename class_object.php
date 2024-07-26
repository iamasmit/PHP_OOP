<?php
// Class 
class calculation
{
    // Properties
    public $a, $b, $c;
    // Method
    public function sum()
    {
        $this->c = $this->a + $this->b;
        return $this->c;
    }
    public function sub()
    {
        $this->c = $this->a - $this->b;
        return $this->c;
    }
}
// Object
$c1 = new calculation();
$c1->a = 10;
$c1->b = 5;

echo "Sum Value of : " . $c1->sum() . "<br>";

$c2 = new calculation();
$c1->a = 15;
$c1->b = 5;
echo "Sub Value of : " . $c1->sub() . "<br>";
