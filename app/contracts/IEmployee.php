<?php
namespace app\contracts;
interface IEmployee {
    const MIN_AGE = 18;
    function getSalary(): float;
    function setSalary(float $salary): self;
}