<?php
namespace app\models; // Namespace
use app\contracts\IEmployee; // Use keyword
use app\traits\Logger; // Use keyword

abstract class Employee implements IEmployee { // Class
    use Logger; // Trait
    protected string $firstName; // Property
    protected string $lastName; // Property
    protected int $age; // Property
    protected int $experience; // Property
    public function __construct(int $age) { // Constructor
        $this->age = $age;
    }
    public function getFirstName(): string { // Getter
        return $this->firstName;
    }
    public function setFirstName(string $firstName): self { // Setter
        $this->firstName = $firstName;
        return $this;
    }
    public function getLastName(): string { // Getter
        return $this->lastName;
    }
    public function setLastName(string $lastName): self { // Setter
        $this->lastName = $lastName;
        return $this;
    }
    public function getAge(): int { // Getter
        return $this->age;
    }
    public function setAge(int $age): self { // Setter
        $this->age = $age;
        return $this;
    }
    abstract function calculateSalary(): float; // Abstract method
    public function getExperience(): int { // Method
        return $this->experience;
    }
    public function setExperience(int $experience): Employee { // Method
        $this->experience = $experience;
        return $this;
    }
    public function __destruct() { // Destructor
    }
}
