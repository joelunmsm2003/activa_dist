<?php

include("conexion.php");


$myData = json_decode($_POST['myData']);

$id = $myData->id;

$result = "SELECT origen.observacion,origen.fagenda,origen.telefono, contacto.nombre as contacto, accion.nombre as accion, estado.nombre as estado FROM orig_base AS origen, contacto AS contacto, accion AS accion, estado AS estado WHERE  origen.id_orig_base_C = '$id' and contacto.id=origen.contacto and accion.id=origen.accion and estado.id=origen.estado";

$array = $pdo->query($result)->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($array);




?>