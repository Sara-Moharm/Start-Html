<?php
    abstract class shape{
        protected string $color;
        protected bool $filled;

        public function __construct(string $color, bool $filled){
            $this->color = $color;
            $this->filled = $filled;
        }

        // Setter And Getter Of Color
        public function setColor(string $color):void{
            $this->color = $color;
        }

        public function getColor():string{
            return $this->color;
        }

        // Setter And Getter Of Filled
        public function setFilled(bool $filled):void{
            $this->filled = $filled;
        }
        public function getFilled():bool{
            return $this->filled;
        }
        abstract public function toString():string;
        abstract public function getArea();
        abstract public function getPerimeter();
    }

    class Circle extends Shape{
        private float $radius;
        public function __construct(string $color, bool $filled, float $radius){
            parent::__construct($color, $filled);
            $this->radius = $radius;
        }

        // Setter And Getter OF Radius
        public function setRadius(float $radius):void{
            $this->radius = $radius;
        }

        public function getRadius():float{
            return $this->radius;
        }
       
        public function getArea():float{
            return pi() * pow($this->radius,2);
        }
        public function getPerimeter():float{
            return 2 * pi() * $this->radius;
        }
        public function toString():string{
            // return "The circle color is $this->color <br> The circle filled is $this->filled <br> The circle radius is $this->radius";
            return "The circle area is ". number_format($this->getArea(),2). "<br> The circle perimeter is ".number_format($this->getperimeter(),2). "<br>";
        }
    }

    $circleObj = new Circle('red',true,4);
    echo $circleObj->toString();

    class Rectangle extends Shape{
        private float $length;
        private float $width;

        public function __construct(string $color, bool $filled, float $length, float $width){
            parent::__construct($color, $filled);
            $this->length = $length;
            $this->width = $width;
        }

        // Setter And Getter OF Length
        public function setLength(float $length):void{
            $this->length = $length;
        }

        public function getLength():float{
            return $this->length;
        }

        // Setter And Getter Of Width
        public function setWidth(float $width):void{
            $this->width = $width;
        }

        public function getWidth():float{
            return $this->width;
        }

        public function getArea():float{
            return $this->length * $this->width;
        }

        public function getPerimeter():float{
            return ($this->length + $this->width) * 2;
        }

        public function toString():string{
             // return "The rectangle color is $this->color <br> The square filled is $this->filled <br> The rectangle length is $this->length <br> The rectangle width is $this->width <br>";
             return "The rectangle area is ". number_format($this->getArea(),2). "<br> The rectangle perimeter is ".number_format($this->getperimeter(),2). "<br>";
        }
    }

    $rectangleObj = new Rectangle('red',true,10,20);
    echo $rectangleObj->toString();

    class Square extends Rectangle{
        public function __construct(string $color, bool $filled, float $length, float $width){
            if($length === $width){
                parent::__construct($color, $filled, $length, $width);
            }else{
                echo "The square length and width must be equal <br>";
                parent::__construct($color, $filled,0, 0);
            }
        }

        public function setSide(float $side):void{
            $this->setLength($side);
            $this->setWidth($side);
        }

        public function getSide():float{
            return $this->getLength();
        }
        
        public function getPerimeter():float{
            return $this->getLength() * 4;
        }

        public function toString():string{
            return "The Square area is ". number_format($this->getArea(),2). "<br> The Square perimeter is ".number_format($this->getperimeter(),2). "<br>";
        }
    }

    $squareObj = new Square('red',true,10,20);
    echo $squareObj->toString();
