<?php 
	ThreeFive();
	function ThreeFive(){
		for($i = 1 ; $i <= 100 ; $i++){
			if(($i % 3)  == 0 && ($i % 5) == 0)
				echo ("ThreeFive \n");
			else if(($i % 3) == 0 && ($i % 5) != 0)
				echo ("Three \n");
			else if(($i % 3) != 0 && ($i % 5) == 0)
				echo ("Five \n");
			else
				echo ($i . "\n");
		}
	}
?>