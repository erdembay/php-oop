<?php 
namespace app\models;
use app\models\Employee;
use app\traits\Logger;
class Ik extends Employee {
    use Logger;
    public function calculateSalary(): float {
        $this->log('Ik salary is calculated');
        $salary = self::SALARY;
        return ($this->getExperience() * 10) + $salary;
    }
}