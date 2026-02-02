<?php
$name= "sahithi";
$a =50;
$b= 20;
function display()
{
    #local variables
    global $a;
    echo "a=",$a,"<br/>";
    global $b;
    echo "b=",$b,"<br/>";
    $b=10;
    echo "b=",$b,"<br/>";
    $a= 30;
    echo "a=",$a,"<br/>";
}
display();
echo "a=",$a,"<br/>";
echo "b=",$b,"<br/>"; 
$name ="sahithi";
echo "name is:",$name,"<br/>";
function variables()
{
    global $a;
    echo "a=",$a,"<br/>";
    $b = 80;
    echo "b=",$b,"<br/>";
    $b =40;
    echo "b=",$b,"<br/>";
}
variables();
echo "b=",$b,"<br/>";
?>