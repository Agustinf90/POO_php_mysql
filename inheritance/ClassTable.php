<?php
    require_once("ClassFurniture.php");

    final class Table extends Furniture{

        private $strForm;
        protected $strSize;

        function __construct(string $Description, float $Price, string $Brand, string $Color,
         string $Material, string $Size){
            parent::__construct($Description, $Price, $Brand, $Color, $Material);

            $this->strSize = $Size;
        }

        public function setForm(string $Form){
            $this->strForm = $Form;
        }

        public function getProductInfo(){
            $arrProduct = array("Product" => $this->strDescription,
                                "Price" => $this->fltPrice,
                                "Stock" => $this->intMinStock,
                                "Status" =>$this->strStatus,
                                "Color" =>$this->strColor,
                                "Material" => $this->strMaterial,
                                "Form" => $this->strForm,
                                "Size" => $this->strSize
        );
            return $arrProduct;
        }
    


    }

?>