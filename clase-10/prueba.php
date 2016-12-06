<?php
class Colectivo {
    public static $precios = [6.00, 6.25, 6.50];
    public function getPrecio($distancia) {
        if ($distancia < 5) {
        return Colectivo::$precios[0];
        }
        elseif ($distancia < 10) {
        return Colectivo::$precios[1];
        }
        return Colectivo::$precios[2];
    }
}
echo Colectivo::getPrecio(20);
?>
