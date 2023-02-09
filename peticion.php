<?php

    /**
    * Función principal para realizar la petición, llamando a enviar()
    *
    * @param none       
    * @return none 
    * @author David Pablo López Carmona <davlopcar@gmail.com>
    * @version 1.0.0 Estable
    */ 
    function direccion(){   
    if (isset($_GET["random"])){
        $direccion = 
        'https://api.chucknorris.io/jokes/random';
        enviar($direccion);
    }

    if (isset($_GET["history"])){
        $direccion = 
        'https://api.chucknorris.io/jokes/random?category=history';
        enviar($direccion);
    }

    if (isset($_GET["science"])){
        $direccion = 
        'https://api.chucknorris.io/jokes/random?category=science';
        enviar($direccion);
    }

    if (isset($_GET["celebrity"])){
        $direccion = 
        'https://api.chucknorris.io/jokes/random?category=celebrity';
        enviar($direccion);
    }
    }

    /**
    * Función para enviar la petición, recepcionarla e imprimirla por pantalla
    *
    * @param string $direccion string ruta de la petición de la API       
    * @return none 
    * @author David Pablo López Carmona <davlopcar@gmail.com>
    * @version 1.0.0 Estable
    */ 
    function enviar($direccion){
        $contenido = 
        file_get_contents($direccion);
        header('Content-Type: application/json');
        echo $contenido;
    }

    // Ejecutamos la función principal
    direccion();

?>