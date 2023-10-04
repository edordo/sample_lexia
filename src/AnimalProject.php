<?php declare(strict_types=1);
// TODO: Fix this, not sure why autoloading isn't working
require_once 'src/Animal.php';

/**
 * Prints out the proper command line usage for this program
 *
 * @return void
 */
function print_usage($file_name)
{
    $animal_types = join(" ", get_valid_animals());
    echo "usage: php $file_name animal_name animal_type\n";
    echo " animal name can be anything\n";
    echo " animal_type is one of [$animal_types]\n";
}

if (count($argv) <> 3) {
    print_usage($argv[0]);
    exit(1);
}

$name = $argv[1];
$animal = $argv[2];
$valid_animals = get_valid_animals();
if (in_array($animal, $valid_animals)) {
    $a = new $animal($name);
    echo $a->speak();    
} else {
    print_usage($argv[0]);
    exit(1);
}
exit(0);
