<html>
<head>
<title></title>
</head>
<body>
<?php
$mail = (`5ferneycanacuan52@gmail.com');
$asunto = ('NUEVO MENSAJE DE PRUEBA');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

$message = "
MENSAJE DE CONTACTO
Nombre: ".$nombre."
Correo: ".$correo."
Mensaje: ".$mensaje."
";
(mail($mail,$asunto,$message))
?>
<script>alert("Tu mensaje ha sido enviado");</script>
<script type="text/javascript">
window.location="index.html";
</script>
</body>
</html>