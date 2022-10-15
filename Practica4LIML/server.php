<?php
    require_once "lib/nusoap.php";
    function getFrutas($datos)
    {
        if ($datos == "Frutas")
        {
            return join(",", array(
                "Manzana",
                "Mango",
                "Fresa",
                "Pera",
                "Sandia",
                "Naranja",
                "Mandarina",
                "Melon",
                "Uva",
                "Cereza",
                "Papaya"));
        }
        else
        {
            return "No hay Frutas";
        }
    }
    $server = new soap_server();//Creamos instancia de SOAP
    $server->register("getFrutas");//Indicamos el metodo o función a devolver
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA =file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>