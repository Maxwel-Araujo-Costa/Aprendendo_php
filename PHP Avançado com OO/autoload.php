<?php

require __DIR__ . '/src/Autoload.php';

$autoload = new BeholderHive\Autoload;
$autoload->register();
$autoload->addNamespace('BeholderHive', 'src');
