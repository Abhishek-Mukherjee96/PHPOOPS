<?php
class Mobile
{
    public $mobile;
    public $color;

    public function __construct($mobile, $color)
    {
        $this->mobile = $mobile;
        $this->color = $color;
    }

    public function __destruct()
    {
        echo "The mobile is: {$this->mobile} and the color is: {$this->color}";
    }
}

$obj = new Mobile('IPhone', 'Blue');
?>