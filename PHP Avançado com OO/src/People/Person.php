<?php

namespace BeholderHive\People;

class Person
{
    use \BeholderHive\GetterSetter;

    private $data = [];
    private $name;
    private $age;
    private $weight;

    public function __construct()
    {
        echo 'Classe instanciada' . PHP_EOL;
    }

    public
    function setName(string $name)
    {
        /*if (!is_string($name)) {
            die('não é uma string!');
        }*/
        //return $name;
        //$this->data[] = $name;
        $this->name = $name;
    }
    public function setAge(int $age)
    {
        //return $age;
        //$this->data[] = $age;
        $this->age = $age;
    }
    public function setWeight(float $weight)
    {
        //return $weight;
        //$this->data[] = $weight;
        $this->weight = $weight;
    }

    public function getName()
    {
        return explode('w', $this->name);
    }

    // public function __call($method, $proprieties)
    // {
    //     var_dump($method, $proprieties);
    // }



    public function __toString(): string
    {
        //return implode(', ', $this->data) . '.';
        return $this->name . ', ' . $this->age . ', ' . $this->weight . '. ';
    }
};
