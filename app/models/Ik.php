<?php 
namespace app\models;
use app\models\Employee;
use app\traits\Logger;
class Ik extends Employee {
    use Logger;
    public function calculateSalary(): float {
        $this->log('Ik salary is calculated');
        return ($this->getExperience() * 20) + $this->getSalary();
    }
}