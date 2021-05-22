<?php
    
    $a = "----------Ritwik Neema-------";
    echo strlen($a)."\n";
    echo ltrim($a, "-")."\n";
    echo rtrim($a, "-")."\n";
    echo strlen($a)."\n";
    echo str_shuffle($a)."\n";
    
    $b = "Something";
    echo strrev($b)."\n";
    echo strtoupper($b)."\n";
    echo strtolower($b)."\n";
    
    echo strpos("hello world", "ll")."\n";
    echo strrpos("hello worll lld", "ll")."\n";
    
    echo substr("hello world", 3, 2)."\n";
    echo substr_count("hello worldlolo", "lo")."\n";
    echo substr_replace("hello world", "aa", 2, 5)."\n";
    
    echo ucfirst("hello world"), "\n";
    echo ucwords("hello world"), "\n";
    
    parse_str("id=123&name=Ritwik%20Neema");
    echo $id, ": ", $name, "\n";
    
    $arr = array("blue", "red", "green", "yellow", "RED");
    print_r(str_replace("RED", "pink", $arr, $count));
    echo "Replacements done: $count", "\n";
    print_r(str_ireplace("RED", "pink", $arr, $count));
    echo "Replacements done: $count", "\n";
    
    echo str_pad("Hello World", 20, ".", STR_PAD_LEFT), "\n";
    
    print_r(str_split("Hello", 3));
    print_r(str_split("Hello"));
    
    echo "\n", str_word_count("Hello, World"), "\n";
    
    echo strcmp("Hello world", "HELLO WORLD"), "\n";
    echo strcmp("HELLO WORLD", "Hello world"), "\n";
    echo strcasecmp("hello world", "HeLlO WoRlD"), "\n";
    
    echo stristr("Hello world! Have a nice day", "WORLD"), "\n";
    
    $Presidents = "Goerge W. Bush;William Clinton;George H.W. Bush;Ronald Reagan;Jimmy Carter";
    $President = strtok($Presidents, ";");
    while ($President != NULL) {
        echo $President, "\n";
        $President = strtok(";");
    }
    
    echo "\n", strtr("Hilla Warld", "ia", "eo"), "\n";
    
    echo str_repeat("xo", 6), "\n";
?>