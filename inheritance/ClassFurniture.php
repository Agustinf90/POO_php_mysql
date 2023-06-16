<?php
    require_once("ClassProduct.php");

    class Furniture extends Product{

        public $strColor;
        public $strMaterial;
        protected $strStatus = "Unactive";

        function __construct(string $Description, float $Price, string $Brand, string $Color, string $Material){
            parent::__construct($Description, $Price);

            $this->strColor = $Color;
            $this->strMaterial = $Material;
        }

        public function getProductInfo(){
            $arrProduct = array("Product" => $this->strDescription,
                                "Price" => $this->fltPrice,
                                "Stock" => $this->intMinStock,
                                "Status" =>$this->strStatus,
                                "Color" =>$this->strColor,
                                "Material" => $this->strMaterial
        );
            return $arrProduct;
        }
    


    }

?>