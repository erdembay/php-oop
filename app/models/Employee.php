<?php
    class Employee {
        public $name;
        public $age;
        public $salary;
        public function __construct($name, $age, $salary) {
            $this->name = $name;
            $this->age = $age;
            $this->salary = $salary;
        }
        public function __toString() {
            return $this->name . " is " . $this->age . " years old and earns " . $this->salary . " dollars.";
        }
    }
?>