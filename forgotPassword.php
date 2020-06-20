<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario, Login y Cambio de Contraseña en PHP y MySQL</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
    <a href="index.php"><h1>Registro de Usuario, Login y Cambio de Contraseña en PHP y MySQL</h1></a>
	<div class="container">
		<h2>Ingresa tu Dirección de Correo Electrónico para Resetear tu Contraseña</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Correo" required="">
				<div class="send-button">
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
			</form>
		</div>
	</div>
</body>
</html>