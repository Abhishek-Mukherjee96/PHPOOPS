<?php
class Car
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function get_name()
    {
        return $this->name;
    }
    public function get_color()
    {
        return $this->color;
    }
}

$car = new Car('BMW', 'Black');
echo "The name is: ".$car->get_name();
echo " and color is: ".$car->get_color();
?>