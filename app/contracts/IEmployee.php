<?php
namespace app\contracts;
interface IEmployee {
    public const SALARY = 9000;
    public function getFirstName(): string;
    public function getLastName(): string;
    public function getAge(): int;
    public function setFirstName(string $firstName): self;
    public function setLastName(string $lastName): self;
    public function setAge(int $age): self;
    public function calculateSalary(): float;
    public function getExperience(): int;
    public function setExperience(int $experience): self;

}