<?php

class employee{
    public $name;
    public $age;
    public $salary;
    function __construct($name,$age,$salary)
    {
          $this->name=$name;
          $this->age=$age;
          $this->salary=$salary;     
    }

    function info(){
        echo "<h3>Employee Profile</h3>";
        echo "Employee Name : " .$this->name ."<br>";
        echo "Employee Age : " .$this->age ."<br>";
        echo "Employee Salary : " .$this->salary ."<br>";

    }
}

class manager extends employee{
     public $ta=1000;
     public $phone = 500;
     public $totalSalary;

     function info(){
        $this->totalSalary = $this->salary+$this->ta+$this->phone;

        echo "<h3>Manager Profile</h3>";
        echo "Manager Name : " .$this->name ."<br>";
        echo "Manager Age : " .$this->age ."<br>";
        echo "Manager Salary : " .$this->totalSalary ."<br>";

     }
}


$e1 = new manager("Ram",25,35000);
$e2 = new employee("rakesh",23,25000);
$e1->info();
$e2->info();
?>