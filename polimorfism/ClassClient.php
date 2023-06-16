<?php
    require_once("ClassPerson.php");

    class Client extends Person{

        protected $fltCredit;

        function __construct(int $dpi, string $name, int $age){
            parent::__construct($dpi, $name, $age);
        }

        public function setCredit(string $Credit){
            $this->strCredit = $Credit;
        }

        public function getCredit():string{
            return $this->strCredit;
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