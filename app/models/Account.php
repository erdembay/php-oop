<?php 
namespace app\models;
use app\models\Employee;
final class Account extends Employee {
    public function calculateSalary(): float {
        $this->log('Account salary is calculated');
        $salary = self::SALARY;
        return ($this->getExperience() * 50) + $salary;
    }
}