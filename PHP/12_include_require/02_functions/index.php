<?php 

# It is better to use require_once here, because if the file does not exist, the function calls would throw errors
require_once "math.php";

echo add(4, 5) . '<br>';
echo subtract(4, 5) . '<br>';