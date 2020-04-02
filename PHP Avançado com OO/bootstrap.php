<?php

//require __DIR__ . '/src/People/Person.php';
//require __DIR__ . '/src/Autoload.php';

//$name = (new Person)->setName('Erik');
//$autoload = new BeholderHive\Autoload;
//$autoload->register();
//$autoload->addNamespace('BeholderHive', 'src');

use BeholderHive\Db\Db;

require __DIR__ . '\autoload.php';

//$person = new BeholderHive\People\Person;
//$person->setName('Maxwel');
//$person->setAge(27);
//$person->setWeight(71.6);

//var_dump($person);

//var_dump((new \BeholderHive\DB\Postgres)->connect());

//var_dump((new \BeholderHive\DB\MySql)->connect());

//var_dump((new \BeholderHive\DB\ORM)->select(true));
//var_dump((new \BeholderHive\DB\ORM)->select(false));

try {
    (new \BeholderHive\DB\ORM)->select(false);
} catch (BeholderHive\MyException $e) {
    echo $e->getMessage();
} catch (\Exception $e) {
    echo 'ERRO: ' . $e->getMessage();
}
