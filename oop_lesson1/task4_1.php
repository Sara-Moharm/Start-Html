<?php

    //  ===================== Task 4.1 The Circle and Cylinder Classes ======================

    //  Create A Circle Class With Its Attributes And Methods
    class Circle{
        // Declare Its Properties 
        protected float $radius;
        protected string $color;

        // Start Constructor
        public function __construct(float $radius, string $color){
            $this->radius = $radius;
            $this->color = $color;
        }

        // Setter And Getter Of Radius
        public function setRadius(float $radius):void{
            $this->radius = $radius;
        }

        public function getRadius():float{
            return $this->radius;
        }

        // Setter And Getter Of Color
        public function setColor(string $color):void{
            $this->color = $color;
        }

        public function getColor():string{
            return $this->color;
        }

        // Area Method
        public function getArea():float{
            return pi() * pow($this->radius,2);
        }

        // Display Method
        public function toString():string{
            return 'The area of the circle is ' . number_format($this->getArea(),2) . '<br>';
            // return 'The radius of the circle is ' . $this->radius . '<br>' . 'The color of the circle is ' . $this->color . '<br>';
        }
    }
    // End Of Circle Class

    // Create An Object Of The Circle Class
    $circleObj = new Circle(5,'red');
    echo $circleObj->toString();

    // Change Its Data Members Values
    $circleObj->setColor('green');
    $circleObj->setRadius(4);

    echo $circleObj->toString();

    //  Create A SubCLass Cylinder Class From The Circle SuperClass With Its Own Attribute

    class Cylinder extends Circle{
        // Declare Its Properties 
        private float $height;

        // Start Constructor
          public function __construct(float $radius, string $color, float $height){
            parent::__construct($radius,$color);
            $this->height = $height;
        }

        // Setter And Getter Of Height
        public function setHeight(float $height):void{
            $this->height = $height;
        }

        public function getHeight():float{
            return $this->height;
        }

        // Cylinder Volume Method
        public function getVolume():float{
            // V = πr^2h
            return pi() * pow($this->getRadius(),2) * $this->height;
            // return pi() * pow($this->radius,2) * $this->height;
        }

        public function toString():string{
            return  'The volume of the cylinder is ' . number_format($this->getVolume(),2) . '<br>';
            // return 'The radius of the cylinder is ' . $this->getRadius() . '<br>' . 'The color of the cylinder is ' . $this->getColor() . '<br>' . 'The height of the cylinder is ' . $this->height. '<br>';
        }
    }

    // Create An Object Of The Cylinder Class
    $cylinderObj = new Cylinder(3,'blue',10);
    echo $cylinderObj->toString();

    // Change Its Data Members Values
    $cylinderObj->setColor('green');
    $cylinderObj->setRadius(4);
    $cylinderObj->setHeight(5);

    echo $cylinderObj->toString();
    