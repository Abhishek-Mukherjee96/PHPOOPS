<!-- abstract class concept-->
<?php
abstract class parentClass
{
    public $name;

   abstract protected function calc($a, $b);

}

class childClass extends parentClass
{
    public function calc($c, $d)
    {
        echo $c+$d;
    }
}

$obj = new childClass();
$obj->calc(10,20);
?>