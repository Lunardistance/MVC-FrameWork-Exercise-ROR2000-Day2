<?php 

class Employee
{
    public function __construct($id, $name, $age, $salary) {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
       
    }

    function generate($id){
        $id=100;
        $person1 = new Employee($id++, 'Adrian', 21, '25k');
        $person2 = new Employee($id++, 'Nicole', 24, '35k');
        $person3 = new Employee($id++, 'Elo', 39, '50k');
        $person4 = new Employee($id++, 'Kristine', 43, '150k');
        $person5 = new Employee($id++, 'Tony', 36, '150k');
        $persons = array($person1, $person2, $person3, $person4, $person5);
        return $persons;

    }


}


$id=100;
$name="";
$age=0;
$salary="";
$employeeModel = new Employee($id, $name, $age, $salary);

