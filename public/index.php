<?php 
    require '../app/contracts/IEmployee.php';
    require '../app/traits/Logger.php';
    require '../app/base/Employee.php';
    require '../app/models/Employee.php';
    require '../app/models/Manager.php';
    require '../app/models/Account.php';
    require '../app/models/Ik.php';
    use app\models\Employee;
    use app\base\Employee as BaseEmployee;
    use app\models\Manager;
    use app\models\Account;
    use app\models\Ik;

    $manager = new Manager(20);
    $account = new Account(25);
    $ik = new Ik(30);

    $manager->setFirstName('John')->setLastName('Doe')->setSalary(1000)->setExperience(5);
    $account->setFirstName('Jane')->setLastName('Doe')->setSalary(1000)->setExperience(5);
    $ik->setFirstName('Jack')->setLastName('Doe')->setSalary(1000)->setExperience(5);

    echo "Manager " . $manager->getFirstName() . " " . $manager->getLastName() . " salary is " . $manager->calculateSalary() . "<hr>";
    echo "Account " . $account->getFirstName() . " " . $account->getLastName() . " salary is " . $account->calculateSalary() . "<hr>";
    echo "Ik " . $ik->getFirstName() . " " . $ik->getLastName() . " salary is " . $ik->calculateSalary() . "<hr>";

