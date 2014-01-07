<?php

/* This file contains some functions */

function addTwoValues($x, $y) {
    return $x + $y;
}

function getLastName($fullName) {
    $parts = explode(" ", $fullName);
    return array_pop($parts);
}

function getDayOfWeek($time) {
    return date("l", $time);
}
