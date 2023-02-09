
var enlace;
function aleatorio(){
    enlace = "peticion.php?random=1";
    peticion();
        // Con cada pulsación, cambiamos la imagen
        cambiarImagen();
}

function historia(){
    enlace = "peticion.php?history=1";
    peticion();

        // Con cada pulsación, cambiamos la imagen
        cambiarImagen();
}

function ciencia(){
    enlace = "peticion.php?science=1";
    peticion();

        // Con cada pulsación, cambiamos la imagen
        cambiarImagen();
}

function celebridades(){
    enlace = "peticion.php?celebrity=1";
    peticion();

        // Con cada pulsación, cambiamos la imagen
        cambiarImagen();
}


// Envía la petición AJAX, y llama a "respuesta"
function peticion(){
   
    // Preparamos la petición AJAX
    xml = new XMLHttpRequest;
    xml.open("GET",enlace);
    xml.send();
    xml.addEventListener("readystatechange",respuesta,false);
    
}

// Esta es la función que maneja las respuestas AJAX
function respuesta(evento) {
    // Comprobamos que la respuesta está lista
    if (evento.target.readyState == 4 && evento.target.status ==200){

        // Parseamos el JSOn obtenido
        var resultado = JSON.parse(evento.target.responseText);
        // Mostramos sólo la frase ingeniosa
        document.getElementById("resultado").innerHTML=resultado.value;
    }
    document.getElementById("texto").style.border="solid";

}

// Función para poner una imagen aleatoria
function random(n){

    // creamos un numero al azar entre 1 y 10 
    return(Math.floor(Math.random() * n + 1 ));
    }

// Guardamos las imagenes en un array
var imagen = new Array();
imagen[0] = "imagenes/0.jpg";
imagen[1] = "imagenes/1.jpg";
imagen[2] = "imagenes/2.jpg";
imagen[3] = "imagenes/3.jpg";
imagen[4] = "imagenes/4.jpg";
imagen[5] = "imagenes/5.jpg";
imagen[6] = "imagenes/6.jpg";
imagen[7] = "imagenes/7.jpg";
imagen[8] = "imagenes/8.jpg";
imagen[9] = "imagenes/9.jpg";

// Función para cambiar la imagen
function cambiarImagen(){
    document.getElementById("img").src = imagen[random(10)-1];
}