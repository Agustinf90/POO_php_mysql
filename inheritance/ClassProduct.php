<?php

    class Product{
        public $strDescription;
        public $fltPrice;
        protected $intMinStock = 10;
        protected $strStatus = "Active";

    function __construct(string $Description, float $Price) {
        $this->strDescription = $Description;
        $this->fltPrice = $Price;
    }

    public function getProductInfo(){
        $arrProduct = array("Product" => $this->strDescription,
                            "Price" => $this->fltPrice,
                            "Stock" => $this->intMinStock,
                            "Status" =>$this->strStatus
        );
        return $arrProduct;
    }

    }
    ?>