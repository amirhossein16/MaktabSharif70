<?php

// class A
// {
// }
// class B
// {
// }
// class C
// {
// }

// $Alpha = range("A", "Z");

// foreach ($Alpha as $c) {
//     new $c;
// }

// foreach ($Alpha as $name) {
//     ${"class$className"} = new $className;
// }


// var_dump($classA);
// class M
// {
//     public $p = "p";
//     protected $pro = "pro";
//     private $pri = "pri";

//     function print()
//     {
//         echo $this->p;
//         echo $this->pro;
//         echo $this->pri;
//     }
// }

// $o = new M();

// echo $o->p;
// echo "\n";
// // echo $o->pro;
// // echo $o->pri;
// $o->print();
// // $p1 = new Person;
// // $p2 = new Person;
// $className = "A";
// ${"class.{$className}"} = new $className;

// var_dump($classA);

// var_dump($p1 === $p2);
// var_dump($p1 == $p2);
// class Fruit
// {
//     public $name;
//     public $color;
//     public function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     protected function intro()
//     {
//         echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
// }

// class Strawberry extends Fruit
// {
//     public function message()
//     {
//         echo "Am I a fruit or a berry? ";
//         // Call protected function from within derived class - OK 
//         $this->intro();
//     }
// }
// $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

class First
{
    public $name = __CLASS__;
}

class Second extends First
{
    public $name = __CLASS__;

    public function getParentName()
    {
        return parent::class;
    }
}

$first = new First;
$second = new Second;

echo $first->name . PHP_EOL;
echo $second->name . PHP_EOL;
echo $second->getParentName() . PHP_EOL;
