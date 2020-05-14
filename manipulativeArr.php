<?php

echo "Monthly Temperature Analysis";
echo "<br/>";
$arr=array(68, 70, 72, 58, 60, 79, 82, 73, 75, 77, 73, 58, 63, 79, 78,
    68, 72, 73, 80, 79, 68, 72, 75, 77, 73, 78, 82, 85, 89, 83);

$size=count($arr);
$total=0;

foreach($arr as $num){
    $total+=$num;
}

$ave=round($total/$size);
echo "The average for the month is $ave&deg  <br/><br/>";
sort($arr);
echo "The five lowest temperature are: <br/>";
$temp=array_slice($arr,0,5);
echo "<ul>";
foreach($temp as $t) {
    echo "<li> $t&deg </li>";
}
echo "</ul><br/>";

echo "The five highest temperature are: <br/>";
$temp=array_slice($arr,-5,5);
echo "<ul>";
foreach($temp as $t) {
    echo "<li> $t&deg </li>";
}
echo "</ul><br/>";