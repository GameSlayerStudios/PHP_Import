PHP_Import  --  Game Slayer Studios

This function loads an include file as a Class and automatically initializes an instance of the Class.

Usage:

import(filename, [objectName]);

By default, the object variable name will be the same as the filename, not including path and extension.
(So passing "/foo/bar/file.php" would result in an object called $file)

If a second argument is given as a string, the created object variable name will instead be the given argument.

This can be used to create multiple instances if you wish. (Demonstrated in demo.php)

/path/to/functions.php is only included to demonstrate that subdirectories function properly.
./functions.php and ./demo.php are also only included for demonstration purposes.

import.php is the only file required for this functionality.