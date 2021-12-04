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

    protected function intro()
    {
        echo "The mobile is: {$this->mobile} and the color is: {$this->color}";
    }
}

class Tab extends Mobile
{
    public function message()
    {
        echo "This is my mobile ";
    }
}

$obj = new Tab('IPad', 'White');
$obj->message();
// $obj->intro(); 
?>