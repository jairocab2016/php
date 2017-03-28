<?php

require_once 'vendor/autoload.php';

$user = new  \PlatziPHP\Author('fake.email@foo.dev', '1234');

$user->setName('Jairo','Cardozo');

echo $user->getFirstName();

echo $user->getLastName();

echo PHP_EOL; //saltar linea



//var_dump($user);