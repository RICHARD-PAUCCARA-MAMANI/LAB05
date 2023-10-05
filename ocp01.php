<?php
    $ventas = $_POST["ventas"];
    $hijos = $_POST["hijos"];
    
    $sueldo_basico = 600;
    $comision = $ventas * 0.075;
    $bonificacion = $hijos * 50;
    $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
    $descuento = $sueldo_bruto * 0.11;
    $sueldo_neto = $sueldo_bruto - $descuento;
    
    echo "<h2>Resultados:</h2>";
    echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
    echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
    echo "Sueldo Bruto: S/. " . number_format($sueldo_bruto, 2) . "<br>";
    echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
    echo "Sueldo Neto: S/. " . number_format($sueldo_neto, 2);

?>
