<?php

abstract class Person{
        public $intDpi;
        public $strName;
        public $intAge;
        public $Msg;

    function __construct(int $Dpi, string $Name, int $Age) {
        $this->intDpi = $Dpi;
        $this->strName = $Name;
        $this->intAge = $Age;
    
    }
    abstract public function getPersonalData();
    abstract public function setMsg(string $Msg);
    abstract public function getMsg():string;
}
?>