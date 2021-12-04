<?php
interface A
{
    function calc($a, $b);
}
interface B
{
    function sub($c, $d);
}

class C implements A,B 
{
    public function calc($a, $b)
    {
        echo $a+$b;
    }

    public function sub($c, $d)
    {
        echo $c-$d;
    }
}

$obj = new C;
$obj->calc(20,30);
echo "<br>";
$obj->sub(30,20);
?>