<!-- ============================ Task 4.5 =============================== -->
 <?php

    abstract class Shape{
        // Define Its Data Members
        protected string $color;
        protected bool $filled;

        // Define The Constructor
        public function __construct(string $color, bool $filled){
            $this->color = $color;
            $this->filled = $filled;
        }

        // Setter Methods
        public function setColor(string $color):void{
            $this->color = $color;
        }
        public function setFilled(bool $filled):void{
            $this->filled = $filled;
        }

        // Getter Methods
        public function getColor():string{
            // return $this->color;
            return $this->color;
        }

        public function isFilled():bool{
            return $this->filled;
        }

        abstract public function toString();
    }

    // Create An Interface That Implements Area And The Perimeter Of The Shape
    interface GeometricObject{
        public function getArea():float;
        public function getPerimeter():float;
    }
    // Create Two Subclasses Circle And Rectangle 

    class Circle extends Shape implements GeometricObject{
        // Define Its Data Members
        private float $radius;
        // Define The Constructor
        public function __construct(string $color, bool $filled, float $radius){
            parent::__construct($color,$filled);
            $this->radius = $radius;
        }

        // Setter Methods
        public function setRadius(float $radius):void{
            $this->radius = $radius;
        }

        // Getter Methods
        public function getRadius():float{
            return $this->radius;
        }

        // Get Area Of The Circle
        public function getArea():float{
            return pi() * pow($this->radius, 2);
        }

        // Get Perimeter Of The Circle
        public function getPerimeter():float{
            return 2 * pi() * $this->radius;
        }
        
        // Display The Data
        public function toString():string{
            return 'The Circle Color Is '.$this->color.'<br>'.'The Circle Fill '.($this->filled === true? 'Exist': 'Doesn\'t Exist').'<br>'.'The Circle Area Is '. number_format($this->getArea(),2) .' cm^2<br>'. 'The Circle Perimeter Is '.number_format($this->getPerimeter(),2).' cm<br>'.'=================================================<br>';
        }
    }

    class Rectangle extends Shape implements GeometricObject{
        // Define Its Data Members
        protected float $length;
        protected float $width;

        // Define The Constructor
        public function __construct(string $color, bool $filled, float $length, float $width){
            parent::__construct($color,$filled);
            $this->length = $length;
            $this->width = $width;
        }

        // Setter Methods
        public function setLength(float $length):void{
            $this->length = $length;
        }

        public function setWidth(float $width):void{
            $this->width = $width;
        }

        public function getArea():float{
            return $this->length * $this->width;
        }

        // Get Perimeter Of The Circle
        public function getPerimeter():float{
            return 2*($this->length + $this->width);
        }
        
        // Display The Data
        public function toString():string{
            return 'The Rectangle Color Is '.$this->color.'<br>'.'The Rectangle Fill '.($this->filled === true? 'Exist': 'Doesn\'t Exist').'<br>'.'The Rectangle Area Is '. number_format($this->getArea(),2) .' cm^2<br>'. 'The Rectangle Perimeter Is '.number_format($this->getPerimeter(),2).' cm<br>'.'=================================================<br>';
        }
    }

    // Create A Square subClass From The Rectangle
    class Square extends Rectangle {
        // Define The Constructor
        public function __construct(string $color, bool $filled, float $side){
            parent::__construct($color, $filled, $side, $side);
        }

        // Setter Method
        public function setSide(float $side):void{
            parent::setLength($side);
            parent::setWidth($side);
        }

        // Getter Method
        public function getSide():float{
            return $this->getLength();
        }

        public function getPerimeter():float{
            return $this->length * 4;
        }

        public function toString():string{
            return 'The Square Color Is '.$this->color.'<br>'.'The Square Fill '.($this->filled === true? 'Exist': 'Doesn\'t Exist').'<br>'.'The Square Area Is '. number_format($this->getArea(),2) .' cm^2<br>'.'The Square Perimeter Is '.number_format($this->getPerimeter(),2).' cm<br>=================================================<br>';
        }
    }

    // Create Objects
    $circle = new Circle('blue',false,4);
    $rectangle = new Rectangle('red', true, 5, 10);
    $square = new Square('blue', false, 5);
    echo $circle->toString();
    echo $rectangle->toString();
    echo $square->toString();
