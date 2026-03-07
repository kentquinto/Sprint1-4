<?php
class employee {
    public $name;
    public $salary;

    function data ($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;

    }
    function print() {
        echo "Name: " . $this->name . "\n" .
        "Salary: " . $this->salary . "€" . 
        "\n";
        if ($this->salary > 6000) {
            echo "You need to pay taxes my friend!";
        }
    }
}
$employee1 = new employee();
$employee1->data("Superman", 7000);
$employee1->print();

?>