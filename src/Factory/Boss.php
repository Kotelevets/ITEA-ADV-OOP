<?php

require_once __DIR__ . '/EmployeeInterface.php';

final class Boss
{
    private $employees = [];

    public function addEmployee(EmployeeInterface $employee)
    {
        $this->employees[] = $employee;
    }

    public function startWork()
    {
        foreach ($this->employees as $employee) {
            $employee->work();
        }

        foreach ($this->employees as $employee) {
            if ($employee instanceof HumanEmployee) {
                $employee->eat();
            }
        }
    }
}