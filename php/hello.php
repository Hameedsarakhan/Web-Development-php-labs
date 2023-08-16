<?php
function max1($b){
    $size=count($b);
    $max=$b[0];
    for($i=0;$i<$size;$i++){
        if($max<$b[$i]){
            $max=$b[$i];
        }
    }
    return $max;
}
$a=array(10,20,30,40);
foreach($a as $i){
    echo"$i <br>";
}
echo"the largest no is ".max1($a);
?>