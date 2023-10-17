<?php
$am = 80;

if($am>=80){
    $hm = "A";
}elseif($am>=68){
    $hm = "B";
}elseif($am>=56){
    $hm = "C";
}elseif($am>=45){
    $hm = "D";
}else{
    $hm ="E";
}

echo "Nilai Akhir : $am"." dengan huruf mutu : ".$hm;

?>