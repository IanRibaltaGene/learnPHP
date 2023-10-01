<?php

// Hello World in PHP
echo "Hello World!\t";

/* 
 * This is a multi-line comment block
 * that spans over
 * multiple lines
 */


// Variables $under_score

// Strings

$my_string = "This is a string in a var!\n";
$my_string = "String var has been changed!\n";
echo $my_string . "This is just a string\n" . "This is just another string\n";
// Print type of variable
echo gettype($my_string) . "\n";

// Integers

$my_string = 5; // Dynamic typing
echo $my_string . "\n";
echo gettype($my_string) . "\n";

$my_string = "This is a string in a var!";

$my_int = 5;
$my_int = $my_int + 5;
echo $my_int . "\n";
echo $my_int + 5 . "\n";
echo $my_int . "\n";
echo gettype($my_int) . "\n";


// Floats ---> Doubles

$my_double = 5.5;
echo gettype($my_double) . "\n";
echo $my_int + $my_double . "\n";
echo $my_int + $my_double . "\t" . $my_string;
echo $my_int . $my_double . "\t" . $my_string;

// Booleans

$my_bool = false;
echo $my_bool . "\n";
$my_bool = true;
echo $my_bool . "\n";
echo gettype($my_bool) . "\n";

echo "El valor de mi integer es $my_int y el de mi boolean es $my_bool.\n";

// Constants ---> const UPPERCASE_WITH_UNDERSCORES

const MY_CONSTANT = "Valor de la constante";
// Print or call constant do not use $
echo MY_CONSTANT . "\n";

// Lists --> Arrays

$my_array = [$my_string, $my_int, $my_double];
// Or
$my_array = array($my_string, $my_int, $my_double);
echo gettype($my_array) . "\n";
echo $my_array[2] . "\n";
array_push($my_array, $my_bool);
print_r($my_array);
// echo $my_array[4] . "\n"; // Error out of bounds

// Dictionaries --> Associative Arrays

$my_dict = [
    "my_string" => $my_string,
    "my_int" => $my_int,
    "my_double" => $my_double,
    "my_bool" => $my_bool
];

// or

$my_dict = array(
    "my_string" => $my_string,
    "my_int" => $my_int,
    "my_double" => $my_double,
    "my_bool" => $my_bool
);

echo gettype($my_dict) . "\n";
print_r($my_dict);
echo $my_dict["my_string"] . "\n";

// Sets --> Arrays without duplicates

array_push($my_array, "Hola");
array_push($my_array, "Hola");
print_r($my_array);
print_r( array_unique($my_array) );
print_r($my_array);

// Flow control

for ($i = 0; $i < 10; $i++) {
    echo $i . "\n";
}

foreach ($my_array as $element) {
    echo $element . "\n";
}

$index = 0;
while ($index <= sizeof($my_array) - 1) {
    echo $my_array[$index] . "\n";
    $index++;
}

if ($my_int == 11 && $my_string == "Hola") {
    echo "El valor es 11\n";
} elseif ($my_int == 12 || $my_string == "Hola") {
    echo "El valor es 12\n";
} else {
    echo "El valor no es 11\n";
}

// Functions

function print_number(int $my_number) {
    echo $my_number . "\n";
}

print_number(10.5); // Will print 10 because of type hinting
print_number(11);
print_number(12);


// Classes

class MyClass {
    // Properties
    private $my_string;
    private $my_int;
    private $my_double;
    private $my_bool;

    // Constructor
    public function __construct($my_string, $my_int, $my_double, $my_bool) {
        $this->my_string = $my_string;
        $this->my_int = $my_int;
        $this->my_double = $my_double;
        $this->my_bool = $my_bool;
    }

    // Methods
    public function printMyString() {
        echo $this->my_string . "\n";
    }

    public function printMyInt() {
        echo $this->my_int . "\n";
    }

    public function printMyDouble() {
        echo $this->my_double . "\n";
    }

    public function printMyBool() {
        echo $this->my_bool . "\n";
    }
}

$my_class = new MyClass($my_string, $my_int, $my_double, $my_bool);
$my_class->printMyString();
$my_class->printMyInt();
$my_class->printMyDouble();
$my_class->printMyBool();

// Inheritance

// Interfaces

interface MyInterface {
    public function printMyString();
    public function printMyInt();
    public function printMyDouble();
    public function printMyBool();
}

class MyOtherClass implements MyInterface {
    // Properties
    private $my_string;
    private $my_int;
    private $my_double;
    private $my_bool;

    // Constructor
    public function __construct($my_string, $my_int, $my_double, $my_bool) {
        $this->my_string = $my_string;
        $this->my_int = $my_int;
        $this->my_double = $my_double;
        $this->my_bool = $my_bool;
    }

    // Methods
    public function printMyString() {
        echo $this->my_string . "\n";
    }

    public function printMyInt() {
        echo $this->my_int . "\n";
    }

    public function printMyDouble() {
        echo $this->my_double . "\n";
    }

    public function printMyBool() {
        echo $this->my_bool . "\n";
    }
}
?>