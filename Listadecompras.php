php<?php

$listacompras = ["pan", "leche", "huevos", "arroz", "pollo"];

echo "<h3>Lista de Compras</h3>";

$n = 1;
foreach ($listacompras as $compra) {
    echo $n . ". " . $compra . "<br>"; 
    $n++;
}

$listacompras[] = "queso";
$listacompras[] = "tomate";

echo "Hay " . count($listacompras)." productos.";

in_array("leche", $listacompras) ? 
    print("<p>La leche está en la lista.</p>") : 
    print("<p>La leche no está en la lista.</p>"); 
?>