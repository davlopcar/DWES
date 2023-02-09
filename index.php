<!DOCTYPE html>
<html>
	<head>
		<title>DWES Aplicaciones web híbridas</title>
		<meta name="author" content="David Pablo López Carmona"/>
		<meta name="description" content="Aplicaciones web híbridas 
		para la Tarea 9 de DWES"/> 
		<meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>@import url("estilo.css");</style>
		<script src ="script.js" type="text/javascript"> </script>

	</head>
	<body>

	<!-- Esta es la cabecera -->
		<header>
			<h1>Vida y Hechos del Gran Chuck </h1>
		</header>

		<p id="entradilla">
			En esta página, encontraras hechos ciertos y científicamente
			probados sobre el gran CHUCK NORRIS.<br>
			Todo lo aquí escrito ha sido múltiples veces comprobado por 
			nuestros expertos en verificación, y la mayor parte de las 
			veces, ha sido contrastado por múltiples testigos oculares.
		</p>

		<button type="button" onClick="aleatorio()">
            Algo aleatorio
        </button>

		<button type="button" onClick="historia()">
            Datos históricos
        </button>

		<button type="button" onClick="ciencia()">
            Hechos científicos
        </button>

		<button type="button" onClick="celebridades()">
            Otros famosos
        </button>

		<div id ="texto">
		<p id="resultado">
		</p>
		</div>

		<div id="imagen">
			<img id="img" maxwidth="400" maxheight="400"/>
		</div>

		<!-- Este es el footer con mis datos -->
		<footer> 
            <div>
            <b>Alumno:</b> <br/>
            <b>Nombre:</b> David Pablo <br/>
            <b>Apellidos:</b> López Carmona <br/>
            </div>
        </footer>
	</body>
</html>