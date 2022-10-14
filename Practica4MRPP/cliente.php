<?php
    require_once "lib/nusoap.php";
    $cliente = new nusoap_client("http://localhost/Practica4MRPP/server.php");
    $error = $cliente->getError();
    if ($error)
    {
        echo "<h2>Constructor Error</h2><pre>" . $error . "</pre>";
    }
    $result = $cliente->call("getAnimes", array("datos" => "Animes"));
    if ($cliente->fault)
    {
        echo "<h2>Fault</h2><pre>";
        print_r($result);
        echo "</pre>";
    }
    else
    {
        $error = $cliente->getError();
        if ($error)
        {
            echo "<h2>Error</h2><pre>" . $error . "</pre";
        }
        else
        {
            echo "<h2>Animes</h2><pre>";
            echo $result;
            echo "</pre>";
        }
    }
?>