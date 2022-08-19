<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

use App\Kernel;


class KernelLocal extends Kernel
{

}


// инициализация
$reflectionClass = new ReflectionClass('KernelLocal');

// получить имя класса
var_dump($reflectionClass->getName());

// получить документацию класса
var_dump($reflectionClass->getDocComment());

// получаем список всех родителей
print_r($reflectionClass->getParentClass());

$method = new ReflectionMethod('KernelLocal', 'reboot');
var_dump($method->getDocComment());
