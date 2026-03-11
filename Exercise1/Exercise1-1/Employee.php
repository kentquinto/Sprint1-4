<?php
class Employee {
    public $name;
    public $salary;

    public function __construct(string $name, float $salary) {
        $this->name = $name;
        $this->salary = $salary;

    }
    public function showDetails() {
        echo "Name: " . $this->name . "\n" .
        "Salary: " . $this->salary . "€" . 
        "\n";
        if ($this->salary >= 6000) {
            echo "You need to pay taxes my friend!";
        }
        else if ($this->salary < 6000) {
            echo "You don't need to pay taxes my friend!";
        }
        else {
            echo "Please enter a valid salary!";
        }
    }
}
$employee1 = new Employee("Superman", 7000);
$employee1-> showDetails();
?>