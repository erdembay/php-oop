<?php 
    require '../app/models/Employee.php';
    require '../app/models/Manager.php';

    $employee = new Employee(13);
    $employee->setFirstName("Erdem")->setLastName("Bay")->setAge(27);

    echo $employee->getFirstName() . ' ' . $employee->getLastName() . ' is ' . $employee->getAge() . ' years old. <br>';

    $manager = new Manager(13);
    $manager->setFirstName("Erdem")->setLastName("Bay")->setAge(27);
    echo $manager->getFirstName() ." ". $manager->getLastName() . " is " . $manager->getAge() . " years old. <br>";