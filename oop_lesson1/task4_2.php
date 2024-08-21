<?php

    //  ===================== Task 4.2 The Person, Student And Staff Classes ======================
    
    //  Create A Person Class With A Radius Attributes And Methods
    class Person{
        // Declare Its Data Members
        protected string $name;
        protected string $address;

        // Start Constructor
        public function __construct(string $name, string $address){
            $this->name = $name;
            $this->address = $address;
        }

        // Setter And Getter Of Name 
        public function setName(string $name):void{
            $this->name = $name;
        }

        public function getName():string{
            return $this->name;
        }

        // Setter And Getter Of Address 
        public function setAddress(string $address):void{
            $this->address = $address;
        }

        public function getAddress():string{
            return $this->address;
        }

        public function toString():string{
            return "The name is $this->name <br> The address is $this->address <br>";
        }
    }

    // $personObj = new Person('sara','seastreet');
    // echo $personObj->toString();

    class student extends Person{
        // Declare Its Properties 
        private string $program;
        private int $year;
        private float $fee;

        // Start Constructor
        public function __construct(string $name, string $address, string $program, int $year, float $fee){
            parent::__construct($name,$address);
            $this->program = $program;
            $this->year = $year;
            $this->fee = $fee;
        }

        // Setter And Getter Of Program 
        public function setProgram(string $program):void{
            $this->program = $program;
        }

        public function getProgram() : string {
            return $this->program;
        }

        // Setter And Getter Of Year
        public function setYear(int $year):void{
            $this->year = $year;
        }

        public function getYear():int{
            return $this->year;
        }

        // Setter And Getter Of Fee 
        public function setFee(float $fee):void{
            $this->fee = $fee;
        }

        public function getFee():float{
            return $this->fee;
        }

        // Display Method
        public function toString():string{
            return "Student Name: $this->name <br> Student Address: $this->address <br> Student Program: $this->program <br> 
            Student Year $this->year <br> Student Fee $this->fee <br>";
        }
    }

    // Create An Object Of The Student Class
    $studentObj = new Student("sara", "Sea Street", "IS", 3,2000);
    echo $studentObj->toString();

    class Staff extends Person{
        // Declare Its Properties 
        private string $school;
        private float $pay;

        // Start Constructor
        public function __construct(string $name, string $address, string $school, float $pay){
            parent::__construct($name,$address);
            $this->school = $school;
            $this->pay = $pay;
        }

        // Setter And Getter Of School 
        public function setSchool(string $school):void{
            $this->school = $school;
        }

        public function getSchool():string{
            return $this->school;
        }

        // Setter And Getter Of Pay 
        public function setPay(float $pay):void{
            $this->pay = $pay;
        }

        public function getPay():float{
            return $this->pay;
        }

        public function toString():string{
            return "Staff Member Name: " .$this->getName(). '<br> Staff Member Address: '. $this->getAddress() . "<br> Staff Member School: $this->school <br> Staff Member Pay: $this->pay <br>";
        }
    }

    // Create An Object Of The Staff Class
    $StaffObj = new Staff('Ahmed','Yafa','CS',40000);
    echo $StaffObj->toString();
