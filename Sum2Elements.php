<?php 
	$num = [3,1,2,3];
	$sum = 7;
	foreach($num as $key1 => $value1){
		foreach($num as $key2 => $value2){
			if($key1 != $key2){
				if($value1 + $value2 == $sum){
					$ans = $key2 ." , ". $key1;
					break;
				}
				else $ans = "no output";
			}
		}
	}
	echo $ans;
?>