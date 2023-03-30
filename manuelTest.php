<?php
require_once 'misclib.php';

$result = multiplyByTwo(0);

if ($result != 0) {
    echo 'Invalid Operation with argument 0';
}

$result = multiplyByTwo(3);

if ($result != 6) {
    echo 'Invalid Operation with argument 3';
}

try {
    $result = multiplyByTwo(-1);
    echo 'Invalid operation with argument -1. ';
} catch (InvalidArgumentException $exception) {
    echo 'Valid Operation with argument -1. ';
}

try {
    $result = multiplyByTwo('hello');
    echo 'Invalid operation with argument "hello". ';
} catch (TypeError $exception) {
    echo 'Valid Operation with argument "hello". ';
} catch (Error $exception) {
    echo 'Invalid Operation with argument "hello". ';
}
