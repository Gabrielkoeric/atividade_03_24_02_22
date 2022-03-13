<?php
class Tabela {
    private $carros = array();
    private $pagina;

    public function __construct($carros, $pagina) {
        $this->carros = $carros;
        $this->pagina = $pagina;
    }

    function __toString() {
        
        $retorno = "<table>";

        $retorno .= "<tr>";

        $retorno .= "<td>";
        $retorno .= 'Marca';
        $retorno .= "</td>";

        $retorno .= "<td>";
        $retorno .= 'Modelo';
        $retorno .= "</td>";

        $retorno .= "</tr>";

        foreach ($this->carros as $key=>$carro) {
//if ($key+1 == $this->pagina) {
            if ( $key+1 > ($this->pagina*2) -2 && $key+1 <= $this->pagina*2 ) {
                $retorno .= "<tr>";

                $retorno .= "<td>";
                $retorno .= $carro->getMarca();
                $retorno .= "</td>";

                $retorno .= "<td>";
                $retorno .= $carro->getModelo();
                $retorno .= "</td>";

                $retorno .= "</tr>";
            }
        }

        $retorno .= "</table>";

         return $retorno;
    }
}

?>