<?php 
namespace app\models;
use app\models\Employee;
final class Manager extends Employee {
    public function calculateSalary(): float {
        $this->log('Manager salary is calculated');
        $salary = self::SALARY;
        return ($this->getExperience() * 100) + $salary;
    }
}