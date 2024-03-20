<!-- Q2. Write a PHP program to define Interface shape which has two method as area() and 
volume(). Define a constant PI. Create a class Cylinder implement this interface and 
calculate area and Volume.  -->
<?php
interface Shape{
    public function area($r, $h);
    public function volume($r, $h);
}

class Cylinder implements Shape{
    public $PI = 3.14;

    public function area($r, $h)
    {
        $a = 2 * $this->PI * $r * ($r + $h); // corrected the area formula
        echo "Area of Cylinder is: $a<br>";
        return $a;
    }

    public function volume($r, $h)
    {
        $v = $this->PI * ($r * $r) * $h;
        echo "Volume of Cylinder is: $v<br>";
        return $v;
    }
}

$c1 = new Cylinder();
$c1->area(6.8, 6.9);
$c1->volume(3.7, 8.9);
?>