<?php
/**
 * Created by PhpStorm.
 * User: Elizabeth Kanzler
 * Date: 1/16/2018
 * Time: 12:57 PM
 */

$animals = array("panda", "alpaca", "boa");

function sortPrint($arr) {
    sort($arr);
    foreach ($arr as $item){
        echo $item . " ";
    }
    echo "<br>";
}

sortPrint($animals);