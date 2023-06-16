<?php

    class Usuario{
        public $strNombre;
        public $strMail;
        public $strTipo;
        private $strPass;
        protected $strRegisterDate;
        static $strState = "Activo";

        function __construct(string $name, string $mail, string $type){

            $this->strName = $name;
            $this->strMail = $mail;
            $this->strType = $type;
            $this->strPass = rand();
            $this->strRegisterDate = date('Y-n-d H:m:s');

        }
        public function getName():string{
            return $this->strName;
        }
        public function getEmail():string{
            return $this->strMail;
        }
        public function getProfile(){
            echo "User Profile <br>";
            echo "Name: " . $this->strName."<br>";
            echo "Mail: " . $this->strMail."<br>";
            echo "Register Date: " . $this->strRegisterDate."<br>";
            echo "Pass: " . $this->strPass."<br>";

        }
        public function setChangePass(string $pass){
            $this->strPass = $pass;
        }

    }




?>