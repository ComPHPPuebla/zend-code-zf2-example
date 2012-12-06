<?php
use \Zend\Code\Generator\PropertyGenerator;
use \Zend\Code\Generator\MethodGenerator;

return array(
    'filename' => __DIR__ . '/User.php',
    'class' => array(
        'name'=> 'User',
        'namespace-name' => 'ComPHPPuebla\Model',
        'properties' => array(
            array(
            	'name' => 'name',
            	'defaultValue' => null,
            	'flags' => PropertyGenerator::FLAG_PROTECTED,
        	),
        	array(
    			'name' => 'age',
            	'defaultValue' => null,
            	'flags' => PropertyGenerator::FLAG_PROTECTED,
        	),
        ),
        'methods' => array(
            array(
                'name' => 'getName',
                'parameters' => array(),
                'flags' => array(MethodGenerator::FLAG_PUBLIC),
                'body' => 'return $this->name;',
            ),
            array(
                'name' => 'getAge',
                'parameters' => array(),
                'flags' => array(MethodGenerator::FLAG_PUBLIC),
                'body' => 'return $this->age;',
            ),
            array(
                'name' => 'setName',
                'parameters' => array('name'),
                'flags' => array(MethodGenerator::FLAG_PUBLIC),
                'body' => '$this->name = $name;',
            ),
            array(
                'name' => 'setAge',
                'parameters' => array('age'),
                'flags' => array(MethodGenerator::FLAG_PUBLIC),
                'body' => '$this->age = $age;',
            ),
            array(
                'name' => 'count',
                'parameters' => array(),
                'flags' => array(MethodGenerator::FLAG_PUBLIC),
                'body' => 'return 0;',
            ),
        ),
        'implemented-interfaces' => array(
            '\Countable',
        ),
    ),
);