<?php
/**
 * Created by PhpStorm.
 * User: dhiraj
 * Date: 6/7/16
 * Time: 8:48 PM
 */

require_once ('SimpleLruCache.php');

$size = 10;
$lruCache = new simpleLruCache($size);

for($i = 1; $i <= $size; $i++){
    $db[] = 'page no '.$i;
}

//$testPattern = "0,2,4,1,0,5,3,1,7,3,5,3,0,1,5,2,5,1,4";
$testPattern = "0,1,2,3,4,1,2,3,4,1,1,1,1";
$testPatternArr = explode(",", $testPattern);
// Implement test pattern.
foreach ($testPatternArr as $index) {
    $item = $lruCache->referencePage($index);

    if ($item != null) {
        echo "Cache page hit. ". $item."<br>";
    } else {
        echo "Cache page miss for key ".$index.". Adding ".$db[$index]." to cache.<br>";
        $lruCache->enQueue($index, $db[$index]);
    }
}

