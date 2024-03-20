<!-- Q2. Write PHP script to demonstrate the concept of introspection for examining object.  -->
<?php
class Employee{
    public $e_id;
    public $e_name;
    public $e_salary;

    public function setData($id,$name,$sal)
    {
        $this->e_id=$id;
        $this->e_name=$name;
        $this->e_salary=$sal;
    }
    public function getData()
    {
        echo"Employee id is: $this->e_id<br>";
        echo"Employee name is: $this->e_name<br>";
        echo"Employee salary is: $this->e_salary<br>";
    }
}
$e1=new Employee();
$e1->setData(1,"narayn",100000);
$e1->getData();
if(class_exists('Employee'))
{
    echo"Employee class is exists<br>";
}
else{
    echo"Employee class is not exists<br>";
}

$method=get_class_methods('Employee');
print_r($method);
echo"<br>";
if(is_object($e1))
{
    echo"yes<br>";
}
else{
    echo"no<br>";
   
}
$clas=get_class($e1);
echo"$clas";
?>