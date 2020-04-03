<?php

namespace BeholderHive;

trait GetterSetter
{
    public function __set($proprietie, $value)
    {
        //var_dump($proprietie, $value);

        $method = 'set' . ucfirst($proprietie);
        if (method_exists($this, $method)) {
            $this->$method($value);
        }
        $this->$proprietie = $value;
    }

    public function __get($proprietie)
    {

        $method = 'get' . ucfirst($proprietie);
        if (method_exists($this, $method)) {
            return $this->$method();
        } else {
            return $this->$proprietie;
        }
    }
}
