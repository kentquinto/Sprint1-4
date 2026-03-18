<?php
class Employee {
    public $name;
    public $salary;

    public function __construct(string $name, int $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    public function showDetails() {
        if ($this->salary < 0) {
            echo "salary cannot be negative!";
            return;
        }

        echo "Name: " . $this->name . "\n" .
        "Salary: " . $this->salary . "€" . 
        "\n";

        if ($this->salary > 6000) {
            echo "You need to pay taxes my friend!";
        }
        else {
            echo "You don't need to pay taxes my friend!";
        }
    }
}
$employee1 = new Employee("Superman", 7000);
$employee1-> showDetails();
?>