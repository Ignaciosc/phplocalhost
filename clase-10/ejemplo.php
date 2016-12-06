<?php

interface Resistente {
    public function resiste($peso);
}

interface Manejar {
    public function Acelerar();
}

interface Frenable extends Manejar {
    public function frenar();
}

class Silla implements Resistente
{
		private $color;
		private $resistenciaKG = 5;

		public function resiste($peso) 
		{
			return $this->resistenciaKG >= $peso;
        }
}

class SillaDeRuedas extends Silla implements Frenable 
{
		private $cantidadRuedas;

		public function setCantidadRuedas($cant) 
		{
			$this->cantidadRuedas = $cant;
        }
        
        public function resiste($peso)
        {
            $peso = $peso / 4;
            
            return parent::resiste($peso);
        }
        
        public function frenar()
        {
            echo "ouiiiiiiiiii";
        }
        
        public function acelerar()
        {
            echo "rum rum";
        }
}


$sillaRuedas = new SillaDeRuedas();
echo $sillaRuedas->resiste(30) ? "Si" : "No";
$sillaRuedas->frenar();
$sillaRuedas->acelerar();
