<?php

namespace BeholderHive\People;

class Person
{

    private $data = [];

    public function setName(string $name)
    {
        /*if (!is_string($name)) {
            die('não é uma string!');
        }*/
        //return $name;
        $this->data[] = $name;
    }
    public function setAge(int $age)
    {
        //return $age;
        $this->data[] = $age;
    }
    public function setWeight(float $weight)
    {
        //return $weight;
        $this->data[] = $weight;
    }
};
