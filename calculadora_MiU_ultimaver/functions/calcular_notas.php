<?php
function calc($c1,$p,$c2,$f){
$w=[0.2,0.25,0.2,0.35];
$n=[$c1,$p,$c2,$f];
$sum=0;$pend=0;$count=0;
for($i=0;$i<4;$i++){
if($n[$i]!==""){$sum+=$n[$i]*$w[$i];$count++;}
else{$pend+=$w[$i];}
}
$need=(11-$sum)/($pend?:1);
return[$need,$count];
}
?>