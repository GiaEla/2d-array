<?php

$handle = fopen ("php://stdin","r");
$bigarr = [];
$sum_hg = 0;
$big_hg = -65;
// celoten kvadrat v arrayu
for($i=0; $i<6; $i++){
  $string = fgets($handle);
  $smallarr = explode(" ", $string);
  array_push($bigarr, $smallarr);
}

for($j = 0; $j < 4; $j++){ //premikanje navzdol
    for($k = 0; $k < 4; $k++){ //premikanje desno
        //peščena ura
        $hourglass = [];
        $sum_hg = 0;
        //zgornji del
        for($i = 0; $i < 3; $i++){
            $up_part = $bigarr[$j][$i + $k];
            array_push($hourglass, $up_part);
        }
        //sredina
        $midd_part = $bigarr[$j + 1][$k + 1];
        array_push($hourglass, $midd_part);
        //spodnji del
        for($i = 0; $i < 3; $i++){
            $down_part = $bigarr[$j + 2][$i + $k];
            array_push($hourglass, $down_part);
        }
        
        $sum_hg = array_sum($hourglass);
        if ($sum_hg >= $big_hg){
           $big_hg = $sum_hg;
        } //ponastavi najvecji seštevek
        
    }
}

print $big_hg;
?>
