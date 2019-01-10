<?php

if(isset($_GET['p']))
$p = $_GET['p'];


    function generatePerson($p){

    include "./model/employees.php";

    $people = $employeeModel->generate($id);
    

    include "./views/person.php";
    }

