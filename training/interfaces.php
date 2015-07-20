<?php

class Person
{
  public $firstname;
  public $lastname;

  public function getFullName()
  {
    $fullname = $this->firstname . " " . $this->lastname;
    return $fullname;
  }

  public function setFullName($aFirstname, $aLastname)
  {
    $this->firstname = $aFirstname;
    $this->lastname = $aLastname;
  }
}

interface JobCodes
{
    const PAYROLL = "01";
    const MANAGER = "02";
    const RETAIL = "03";
    const PROGRAMMER = "04";
}

interface StandardFunctions
{
    public function getJobTitle($aJobCode);
    public function showFullName();
}

class Employee extends Person implements JobCodes, StandardFunctions
{
    private $employeeId;
    private $jobCode;

    public function __construct($aFirstname, $aLastname, $aEmployeeId, $aJobCode)
    {
        $this->setFullName($aFirstname, $aLastname);
        $this->employeeId = $aEmployeeId;
        $this->jobCode = $aJobCode;
    }

    function getJobTitle($aJobCode)
    {

    }

    function showFullName()
    {

    }
}

$myEmployee = new Employee("Alexandru", "Tenche", "1234", "04");
$myFullname = $myEmployee->getFullName();

print "<p> Hi $myFullname ! </p>";
