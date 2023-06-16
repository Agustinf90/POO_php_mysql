<?php

    require_once("operacion.php");

    class Calcular implements Operacion{

        public function raizCuadrada(float $numero):float{

            $total = sqrt($numero);
            return $total;
        }

        public function potencia(int $numero, int $potencia):int{

            $total = pow($numero, $potencia);
            return $total;

        }

    }

?>