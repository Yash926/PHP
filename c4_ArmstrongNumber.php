<?php
echo "<h1>Program to check Armstrong Number</h1><br>";
$num=406;
$total=0;
$x=$num;
while($x!=0)
{
    $rem=$x%10;
    $total=$total+$rem*$rem*$rem;
    $x=$x/10;
}
if($num==$total)
{
    echo "Yes $num is an armstrong number";
}
else{
    echo "No $num is not an armstrong number";
}