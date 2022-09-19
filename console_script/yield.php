<?php

////    $limit = 10;
//    $limit = PHP_INT_MAX;
//
//
//    foreach (getRange($limit) as $range)
//    {
//        echo "Данные {$range} \n";
//    }
//
//    foreach (getRangeKeyValue($limit) as $key => $value )
//    {
//        echo "Ключ - {$key}, значение - {$value} \n";
//    }
//
//
//    function getRange($max = 10) {
//        $array = [];
//
//        for($i = 0; $i < $max; $i++)
//        {
////            yield $i;
//                $array[] = $i;
//        }
//
//            return $array;
//    }
//
//
//
//    function getRangeKeyValue($max = 10)
//    {
//        for($i = 0; $i < $max; $i++)
//        {
//            $value = $i * mt_rand();
//            yield $i => $value;
//        }
//    }


    function funcBd()
    {
        yield 2;

    }

    function funcS()
    {
        yield 3;

    }

    function funcP()
    {
        yield from funcBd();
        yield from funcS();

    }

    foreach (funcP() as $k)
    {
        echo $k;
    }

