<?php

import('./functions.php'); //Create object name based on filename.

import('./path/to/functions.php', 'test'); //Explicitly define object name. Additional directories work.
 
$test1 = $functions->addTwoValues('3', '8');

echo $test1 . '<br />';

$test2 = $functions->getLastName('Brian J. Hodge');

echo $test2 . '<br />';

$test3 = $test->getDayOfWeek(time());

echo $test3 . '<br />';
