<!-- Q2. Write a PHP script to create a Class shape and its subclass triangle, square and display 
area of the selected shape.( use the concept of Inheritance) . Display menu (use radio button) 
a) Triangle 
b) Square 
c) Rectangle 
d) Circle  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shape</title>
</head>
<body>
    <h1>Select your shape</h1>
    <form action="slip3q2or.php" method="POST">
        <label for="Triangle">Triangle</label>
        <input type="radio" name="shape" id="Triangle" value="Triangle">

        <label for="Square">Square</label>
        <input type="radio" name="shape" id="Square" value="Square">

        <label for="Rectangle">Rectangle</label>
        <input type="radio" name="shape" id="Rectangle" value="Rectangle">

        <label for="Circle">Circle</label>
        <input type="radio" name="shape" id="Circle" value="Circle"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
           class Shape{
            public $re;
            public $base,$height;
            public $side;
            public $breath,$length;
        }

        class Triangle extends Shape{
          public function setT($b,$h)
          {
            $this->base=$b;
            $this->height=$h;
          }
          public function area()
          {
            $a=0.5 * $this->base * $this->height;
            echo"Area of Triangle is $a<br>";
            return $a;
          }
        }

        class Square  extends Shape{
            public function setS($s)
            {
                $this->side=$s;
            }
            public function area()
            {
                $a=$this->side * $this->side;
                echo"Area of Square is: $a<br>";
                return $a;
            }
        }

        class Rectangle extends Shape{
            public function setR($b, $l) {
                $this->breath = $b;
                $this->length = $l;
                
            }
            public function area()
            {
                $a=$this->length * $this->breath; 
                echo"Area of Rectangle is: $a<br>";
                return $a;
            }
        }

        class Circle  extends Shape{
            public function setC($r)
            {
                $this->re=$r;
    
            }
            public function area()
            {
                $a=3.14 * $this->re *  $this->re;
                echo"Area of Square is: $a<br>";
                return $a;
            }
        }

    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $ch=$_POST['shape'];
        if($ch=='Circle')
        {
            $ci=new Circle();
            $ci->setC(4.6);
            $ci->area();
        } 
        elseif ($ch == 'Triangle') {
            $tri = new Triangle();
            $tri->setT(3, 4); 
            $tri->area();
        } elseif ($ch == 'Square') {
            $squ = new Square();
            $squ->setS(5);
            $squ->area();
        } elseif ($ch == 'Rectangle') {
            $rec = new Rectangle();
            $rec->setR(3, 6); // 
            $rec->area();
        }
    }
    
    
    ?>
</body>
</html>