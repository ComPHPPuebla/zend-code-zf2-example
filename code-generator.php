<?php
require "vendor/autoload.php";

use \Zend\Code\Generator\FileGenerator;
use \ComPHPPuebla\Model\User;

$classMetadata = require __DIR__ . '/configs/class-metadata.php';
$generator = FileGenerator::fromArray($classMetadata);
$generator->write();
require $generator->getFilename();
$user = new User();
$user->setName('Luis');
$user->setAge(32);
echo $user->getName(), "\n", $user->getAge(), "\n";