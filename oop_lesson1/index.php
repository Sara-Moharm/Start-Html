<?php

    class Rectangle{
        // Declare The Properties
        private float $length;
        private float $width;

        // Constructor
        public function __construct($length,$width){
            $this->length = $length;
            $this->width= $width;       }
        
        // Set Length
        public function setLength($length): void{
            $this->length = $length;
        }

        // Set Width

        public function setWidth($width) : void {
            $this->width = $width;
        }

        // Get Length

        public function getLength() : float {
            return $this->length;
        }

        // Get Width

        public function getWidth() : float {
            return $this->width;
        }

        // Get Area

        public function getArea() : float {
            return $this->length * $this->width;
        }

        // Get Perimeter
        public function getPerimeter() : float{
            return ($this->length + $this->width) * 2;
        }

        // To Display The Data
        public function toString(){
            echo 'The length of the rectangle is ' . $this->length . '<br>' . 'The width of the rectangle is ' . $this->width;
        }
    }
    
    $rec1 = new Rectangle(10,20);
    $rec1->toString();