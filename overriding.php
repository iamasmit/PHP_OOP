<?php
class base
{
    public $name = "Asmit";
    public function calc($a, $b)
    {
        return $a + $b;
    }
}
class child extends base
{
    public $age = 25;
    public function calc($a, $b)
    {
        return $a - $b;
    }
}
$e = new child();
echo $e->calc(80, 50);
