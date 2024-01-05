<?php 
$x = 10;
$y = 10;

print "x++ = " . $x++ . "<br />"; //10
print "x++ = " . $x++ . "<br />"; //11

print "++y = " . ++$y . "<br />"; //$y = $y + 1: //11 = 10+1

$a = 20;
$b = 100;
$status = $a > $b ?"OK":"NO";
print $status;