<?php

/* This file creates an import() function which attempts to emulate Python's import by wrapping the contents of  an include into a Class */

function import($filename) {
    $args = func_get_args();

    $filename = str_replace('\\', '/', $filename); //In case anyone has some silly backslashes.
    $parts = explode('.php', $filename);
    $parts[0] = str_replace('.', '', $parts[0]);
    $parts1 = explode('/', $parts[0]);
    
    if (strlen($args[1]) >= 1) {
        $newClassName = $args[1];
    } else {
        $newClassName = array_pop($parts1);
    }

    $contents = file_get_contents($filename);
    $contents = str_replace(Array('<?php', '<?','?>'), '', $contents);
    $contents = str_replace('function', 'public function', $contents);
    
    $construct .= '$' . $newClassName . ' = new ' . $newClassName . '();' . PHP_EOL . PHP_EOL;  
    $construct .= 'global $' . $newClassName . ';' . PHP_EOL . PHP_EOL;    
    $construct .= 'Class ' . $newClassName . ' {' . PHP_EOL;  
    $construct .= $contents;   
    $construct .= PHP_EOL . '}';
    
    eval($construct);

    $$newClassName = new $newClassName();
    global $$newClassName;

}
