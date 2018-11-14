<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/preproduccion.controlador.php";
require_once "controladores/personalpreproduccion.controlador.php";
require_once "controladores/tiemposproduccion.controlador.php";
require_once "controladores/creativotecnico.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/preproduccion.modelo.php";
require_once "modelos/personalpreproduccion.modelo.php";
require_once "modelos/tiemposproduccion.modelo.php";
require_once "modelos/creativotecnico.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
