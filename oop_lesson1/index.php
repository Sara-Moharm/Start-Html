<?php

    class Rectangle{
        // Declare The Properties
        private float $length;
        private float $width;

        // Constructor
        public function __construct(float $length,$width){
            $this->length = $length;
            $this->width= $width;       }
        
        // Setter And Getter Length
        public function setLength($length): void{
            $this->length = $length;
        }

        public function getLength() : float {
            return $this->length;
        }


        // Setter And Getter Width
        public function setWidth($width) : void {
            $this->width = $width;
        }

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
            echo 'The length of the rectangle is ' . $this->length . '<br>' . 'The width of the rectangle is ' . $this->width . '<br>';
        }
    }
    
    $rec1 = new Rectangle(10,20);
    $rec1->toString();
