<?php

//require __DIR__ . '/src/People/Person.php';
//require __DIR__ . '/src/Autoload.php';

//$name = (new Person)->setName('Erik');
//$autoload = new BeholderHive\Autoload;
//$autoload->register();
//$autoload->addNamespace('BeholderHive', 'src');

require __DIR__ . '\autoload.php';

$person = new BeholderHive\People\Person;
$person->setName('Maxwel');
$person->setAge(27);
$person->setWeight(71.6);

var_dump($person);
