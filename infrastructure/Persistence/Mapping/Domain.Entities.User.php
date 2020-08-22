<?php

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping\Builder\ClassMetadataBuilder;

$builder = new ClassMetadataBuilder($metadata);
$builder->setTable('users');
$builder->createField('id', Types::INTEGER)
    ->makePrimaryKey()
    ->generatedValue()
    ->build();

$builder->addField('name', Types::STRING);

$builder->addField('surname', Types::STRING);

$builder->addField('username', Types::STRING);

$builder->addField('email', Types::STRING);

$builder->addField('password', Types::STRING);

$builder->addField('isActive', Types::BOOLEAN);
