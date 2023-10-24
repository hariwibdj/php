<?php  
for ($x = 0; $x <= 10; $x++) {
	if(($x % 2) == 0) {
    	$ket = "genap";
    }
    else{
    	$ket = "ganjil";
    }
  echo "The number is: $x : $ket <br>";
}
?>  