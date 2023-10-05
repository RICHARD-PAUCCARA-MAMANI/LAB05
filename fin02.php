<?php
    $precio_litro = $_POST["precio"];
    $cantidad = $_POST["cantidad"];
    
    $descuento_porcentaje = 0.07;
    $caramelos_por_gaseosa = 2;
    
    $precio_nuevo_litro = $precio_litro * 0.95; // Aplicar descuento del 5%
    $importe_compra = $precio_nuevo_litro * $cantidad;
    $descuento = $importe_compra * $descuento_porcentaje;
    $importe_pagar = $importe_compra - $descuento;
    $obsequio = $cantidad * $caramelos_por_gaseosa;
    
    echo "<h2>Resultados:</h2>";
    echo "Nuevo precio de la gaseosa (por litro): S/. " . number_format($precio_nuevo_litro, 2) . "<br>";
    echo "Importe de la compra: S/. " . number_format($importe_compra, 2) . "<br>";
    echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
    echo "Importe a pagar: S/. " . number_format($importe_pagar, 2) . "<br>";
    echo "Obsequio (caramelos): " . $obsequio;

?>
