<?php

    $names = array("Peter", "Quagmire", "Joe");
    
    echo is_array($names), "\n";
    
    $names1[0] = "Peter";
    $names1[1] = "Quagmire";
    $names1[2] = "Joe";
    
    print_r($names1);
    echo $names[1], ", and ", $names[2], " are ", $names[0], "'s neighbours", "\n";
    
    $arrlength = count($names);
    echo $arrlength."\n";
    
    for ($x = 0; $x < $arrlength; $x++) {
        echo $names[$x];
        echo "\n";
    }
    
    echo "\nforeach output:\n";
    foreach($names as $name) {
        echo $name, "\n";
    }
    echo "\n";
    
    // Jumping the key values
    $array = array("a", "b", 6=>"c", "d");
    var_dump($array);
    var_dump($names);
    
    // Associative Arrays
    $ages = array("Brent"=>42, "Andrew"=>25, "Joshua"=>16);
    $ages["Anthony"] = 29;
    
    foreach($ages as $key=>$value) {
        echo "Name: $key, Age: {$value}\n";
    }
    
    // Multidimensional Array
    $families = array("Griffin"=>array("Peter", "Lois", "Megan"), "Quagmire"=>array("Glenn"), "Brown"=>array("Cleveland", "Loretta", "Junior"));
    var_dump($families);
    
    // Adding values to the end of an array; Use the [] syntax
    $a1 = array("a", "b", "c");
    $a1[] = "d";
    print_r($a1);
    
    //Assigning a range of values
    $numbers = range(2, 50, 10);
    $letters = range('a', 'z', 2);
    $reverse = range(5, 1);
    
    print_r($numbers);
    var_dump($letters);
    print_r($reverse);
    
    // Creating variables from arrays
    $person = array('name'=>'Ritwik Neema', 'age'=>21, 'sex'=>'Male');
    extract($person);
    echo $name.", ".$age.", ".$sex."\n";
    
    // Creating arrays from variables
    $firstname = "Ritwik";
    $lastname = "Neema";
    $age = 21;
    $result = compact("firstname", "lastname", "age");
    print_r($result);
    
    // Slicing an array
    $people = array('Tom', 'Dick', 'Joe', 'Bin', 'John', 'Sam');
    $sub = array_slice($people, 2, 2);
    print_r($sub);
    
    // Key array
    $keys = array_keys($person);
    print_r($keys);
    
    // Value array
    $values = array_values($person);
    print_r($values);
    
    // Array chunk
    $a = array('a'=>'Cat', 'b'=>'Dog', 'c'=>'Horse', 'd'=>'Cow');
    print_r(array_chunk($a, 2));
    
    // Array Combine
    print_r(array_combine($keys, $values));
    
    // Count occurrences of values
    $animals = array_values($a);
    $animals[] = 'Dog';
    print_r(array_count_values($animals));
    
    // array diff, compares two or more arrays and returns an array with the keys and values unique to the first array
    $a1 = array("Cat", "Dog", "Horse");
    $a2 = array("Horse", "Dog", "Fish");
    print_r(array_diff($a1, $a2));
    
    // Array Flip
    print_r(array_flip($a));
    print_r($a);
    
    // Check if the key exists
    if (array_key_exists("c", $a)) {
        echo "Key exists, value is: {$a['c']}\n";
    }
    else
    {
        echo "Key does not exist\n";
    }
    
    // array_push(va1, val2, ....), array_pop(), array_unshift(val1), array_shift();
    print_r(array_reverse($names));
    print_r($names);
    
    // Search for a value and return the key
    echo array_search("Dog", $a), "\n";
    
    echo array_sum(array(1, 65, 25)), "\n";
    
    
    // Sort and reverse sort based on values
    asort($a);
    print_r($a);
    arsort($a);
    print_r($a);
    
    // Sort and reverse sort based on keys
    krsort($a);
    print_r($a);
    ksort($a);
    print_r($a);
    
    sort($names);
    print_r($names);  
?>