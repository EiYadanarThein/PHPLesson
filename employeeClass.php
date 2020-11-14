<?php
class Employee
{
    private $firstname;
    private $lastname;
    private $eid;
    private $address;
    static public $count=0;

    function showInfo()
    {
        echo "<h2>Employee Info</h2>";
        echo "firstName:" . $this->firstname;
        echo "<br>lastName:" . $this->lastname;
        echo "<br>Eid:" . $this->eid;
        echo "<br>Address:" . $this->address;
    }
    function __construct($firstname,$lastname)
    {
        self::$count++;
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }
    static function showCount()
    {
        echo "Employee number are:".self::$count;
       // echo "id:".$this->eid;
    }
    function set_firstname($firstname)
    {
        $this->firstname=$firstname;
    }
    function get_firstname()
    {
        return $this->firstname;
    }
    function set_lastname($lastname)
    {
        $this->lastname=$lastname;
    }
    function get_lastname($lastname)
    {
        return $this->lastname;
    }
    function set_eid($eid)
    {
        $this->eid=$eid;
    }
    function get_eid($eid)
    {
         return $this->eid;
    }
    function set_address($address)
    {
        $this->address=$address;
    }
    function get_address($address)
    {
        return $this->address;
    }
}
$emp1=new Employee("Mg","Mya");
//$emp1->firstname="Mg";
//$emp1->lastname="Hla";
 $emp1->set_firstname("Myo");
 $emp1->set_lastname("marn");
 $emp1->set_eid("01");
 $emp1->set_address("Mandalay");
$emp1->showInfo();
echo Employee::$count;
$emp2=new Employee("Mg","Aung");
$emp2->set_firstname("Myo");
 $emp2->set_lastname("Aung");
 $emp2->set_eid("01");
 $emp2->set_address("Mandalay");
$emp2->showInfo();
echo Employee::$count;

Employee::showCount();


?>