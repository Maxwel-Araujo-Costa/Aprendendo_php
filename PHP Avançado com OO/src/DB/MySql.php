<?php

namespace BeholderHive\DB;

class MySql implements Db
{
    use \BeholderHive\GetterSetter;

    public function connect(): string
    {
        return 'connected to MySQL';
    }
}
