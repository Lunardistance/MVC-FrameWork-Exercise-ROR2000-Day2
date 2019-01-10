<?php

    function generateNames(){

    include "./model/employees.php";

    
    $employees = $employeeModel->generate($id, $name, $age, $salary);

    include "./views/employees.php";
    }
