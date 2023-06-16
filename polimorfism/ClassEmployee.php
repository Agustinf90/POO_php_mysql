<?php
    require_once("ClassPerson.php");

    class Employee extends Person{

        protected $strJob;

        function __construct(int $dpi, string $name, int $age){
            parent::__construct($dpi, $name, $age);
        }

        public function setJob(string $Job){
            $this->strJob = $Job;
        }

        public function getJob():string{
            return $this->strJob;
        }

        public function getPersonalData(){
            $data = "
            <h2>Personal Data</h2>
            DPI: {$this->intDpi}<br>
            Name: {$this->strName}<br>
            Age: {$this->intAge}<br>
            ";
            return $data;
        }
        public function setMsg(string $Msg){
            $this->Msg = $Msg;
        }

        public function getMsg():string{
            return $this->Msg;
        }
    }

?>