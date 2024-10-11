<?php 
namespace app\models;
use app\models\Employee;
final class Ik extends Employee {
    public function calculateSalary(): float {
        $this->log('Ik salary is calculated');
        $salary = self::SALARY;
        return ($this->getExperience() * 10) + $salary;
    }
}