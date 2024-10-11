<?php 
namespace app\models;
use app\models\Employee;
use app\traits\Logger;
class Manager extends Employee {
    use Logger;
    public function calculateSalary(): float {
        $this->log('Manager salary is calculated');
        return ($this->getExperience() * 100) + $this->getSalary();
    }
}