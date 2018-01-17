<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth Kanzler
 * Date: 1/16/2018
 * Time: 12:57 PM
 */

$animals = array("panda", "alpaca", "boa");

function sortPrint() {
    global $animals;
    sort($animals);
    foreach ($animals as $item){
        echo $item . " ";
    }
    echo "<br>";
}

function add($str) {
    global $animals;
    $str = strtolower($str);
    if(!in_array($str, $animals)){
        array_push($animals, $str);
        echo "adding " . $str . "...<br>";
    }
}

sortPrint();
add("Dragon");
sortPrint();