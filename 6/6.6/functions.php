<?php
$get_ending = function (string $i)
{
    if(str_contains($i, '.')) return 'а';
    if((int) $i > 9 && (int) $i < 21) return 'ов';
    if((int) $i % 10 == 1) return '';
    if((int) $i % 10 > 1 && (int) $i % 10 < 5) return 'а';
    else return 'ов';
};

