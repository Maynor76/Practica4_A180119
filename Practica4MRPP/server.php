<?php
    require_once "lib/nusoap.php";
    function getAnimes($datos)
    {
        if ($datos == "Animes")
        {
            return join (", ", array(
                "Chainsaw Man",
                "Karakai Jozu No Takagi-san",
                "SPYxFAMILY",
                "Toradora",
                "My Dress-Up Darling",
                "Anohana",
                "Elfen Lied",
                "Overlord",
                "Attack on Titan",
                "Another",
                "Death Note"));
        }
        else
        {
            return "No hay Animes";
        }
    }
    $server = new soap_server();
    $server->register("getAnimes");
    if ( !isset( $HTTP_RAW_POST_DATA ) ) $HTTP_RAW_POST_DATA = file_get_contents( 'php://input' );
    $server->service($HTTP_RAW_POST_DATA);
?>