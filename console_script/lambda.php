<?php

    function cmp($a, $b)
    {
        if ($a === $b)
        {
            return 0;
        }

        return ($a < $b)
            ? -1
            : 1;
    }

    $a = [3, 2, 5, 6, 1];

    usort($a, "cmp");

    var_dump($a);

////

    $greet = function($name)
    {
        printf("%s\r\n", $name);
    };

    $greet('Text');

////

    $number = 89;

    $showNumber = function()
    {
        printf("%s\r\n", $number);
    };

    $showNumber();

////

    $number = 89;

    $showNumber = function() use($number)
    {
        printf("%s\r\n", $number);
    };

    $showNumber();

////

    $a = 12;
    $b = 14;

    $closure = function($c) use($a, $b)
    {
        return $a + $b + $c;
    };

    printf("%s\r\n", $closure(13));