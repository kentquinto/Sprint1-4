<?php
class employee {
    public $name;
    public $salary;

function set_details($name, $salary){
    $this->name = $name;
    $this->salary = $salary;
}
function get_details() {
    echo "Name: " . $this->name . " Salary: " . $this->salary . "€" . "\n";
    if ($this->salary > 6000) {
        echo "You need to pay taxes my friend!";
    }
}
}
$employee1 = new employee();

$employee1->set_details("Superman", 7000);
$employee1->get_details();
?>