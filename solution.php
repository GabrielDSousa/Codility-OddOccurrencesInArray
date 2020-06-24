<?php

function solution($A): int
{
    $len = count($A) - 1;
    sort($A);
    for ($i=0; $i<=$len; $i+=2){
        if($A[$i] != $A[$i+1]){
            return $A[$i];
        }
    }
    return $A[$len];
}
