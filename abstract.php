<?php
abstract class Animal
{
    // Abstract method (no implementation)
    abstract public function makeSound();

    // Reqular method
    public function sleep()
    {
        echo "Sleeping...." . "<br>";
    }
}
class Dog extends Animal
{
    // Implementing the abstract method
    public function makeSound()
    {
        echo "Woof Woof" . "<br>";
    }
}
class Cat extends Animal
{
    // Implementing the abstract method
    public function makeSound()
    {
        echo "Meow Meow" . "<br>";
    }
}
// Instantiate objects of the concrete classes
$dog = new Dog();
$dog->makeSound();
$dog->sleep();
$cat = new Cat();
$cat->makeSound();
$cat->sleep();
