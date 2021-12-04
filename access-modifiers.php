<?php
class Class1
{
    public $name;
    public $age;
    public $address;

    public function set_name($name)
    {
        $this->name = $name;
    }
    private function set_age($age)
    {
        $this->age = $age;
    }
    protected function set_address($address)
    {
        $this->address = $address;
    }
}

$test = new Class1();
$test->set_name('Abhishek');
// $test->set_age('25');
// $test->set_address('Dgp');
?>