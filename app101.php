<?php
$x = "abc";
$$x = 200;
$$$x = 100;
echo $x;

$name = "cat";
${$name} = "Dog";
${${$name} } = "Monkey";
print $$$name;

?>