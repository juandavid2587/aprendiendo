<?php //funciones usando if/elseif 
function operaciones($n1, $n2, $operaciones)
{
    $resultado=0;
    if ($operaciones == "sumar")
    {
        $resultado = $n1 + $n2;
    }
    if ($operaciones == "resta")
    {
        $resultado = $n1 - $n2;
    }
    if ($operaciones == "multiplicar")
    {
        $resultado = $n1 * $n2;
    }
    return $resultado; //devolver el resultado
}
//llamar a la funcion operaciones
$r=operaciones(5, 7, "sumar");
echo $r ."<br>";
//o podemos imprimir directamente
$r=operaciones(15, 8, "resta");
echo $r ."<br>";
//llamar la operacion
echo operaciones(8, 5, "multiplicar");