<?php

namespace BeholderHive\Db;

use BeholderHive\MyException;

class ORM
{
    private $db;
    public function setDb(Db $db)
    {
        $this->db = $db;
    }

    public function select(bool $data)
    {
        if ($data == true) {
            return [];
        }
        //throw new \Exception("Data deveria ser true", 1); 
        throw new MyException("Data deveria ser true", 1);
    }
}
