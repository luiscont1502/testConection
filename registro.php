<?php
	//conexion con la base de datos y el servidor
	/*$link = mysql_connect("localhost/Formulario/","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("datos",$link) or die("<h2>Error de Conexion</h2>");
*/
	$mysqli = new mysqli('127.0.0.1', 'root', '', 'datos');
$mysqli->set_charset("utf8");
	//obtenemos los valores del formulario
	$nombres = $_POST['nombreuser'];
	$nivel = $_POST['nivel'];

	//Obtiene la longitus de un string
	$req = (strlen($nombres)*strlen($nivel)) or die("No se han llenado todos los campos");



	//ingresamos la informacion a la base de datos
	//mysql_query("INSERT INTO dato VALUES('','$nombres','$apellidos')",$link) or die("<h2>Error Guardando los datos</h2>");

	$sql = "INSERT INTO datos (nombre,nivel) VALUES ('$nombres', '$nivel')";
	if (mysqli_query($mysqli, $sql)) {
		  echo "New record created successfully";

		  echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	';
	} else {
		  echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
	}
	mysqli_close($mysqli);


	/*$sql = mysqli_query("INSERT INTO dato VALUES('','$nombres','$apellidos')",$link);
	$row = mysqli_num_rows($sql);*/
	


?>