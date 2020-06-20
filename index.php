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
    <title>Registro de Usuario Login y Cambio de Contraseña en PHP y MySQL</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" 	type="text/css" media="all">
</head>
<body>
    <h1>Registro de Usuario, Login y Cambio de Contraseña en PHP y MySQL</h1>
	<div class="container">
        <?php
			if(!empty($sessData['userLoggedIn']) && !empty($sessData['userID'])){
				include 'user.php';
				$user = new User();
				$conditions['where'] = array(
					'id' => $sessData['userID'],
				);
				$conditions['return_type'] = 'single';
				$userData = $user->getRows($conditions);
		?>
        <h2>Bienvenid@ <?php echo $userData['first_name']; ?>!</h2>
        <a href="userAccount.php?logoutSubmit=1" class="logout">Cerrar Sesión</a>
		<div class="regisFrm">
			<p><b>Nombre: </b><?php echo $userData['first_name'].' '.$userData['last_name']; ?></p>
            <p><b>Correo: </b><?php echo $userData['email']; ?></p>
            <p><b>Teléfono: </b><?php echo $userData['phone']; ?></p>
		</div>
        <?php }else{ ?>
		<a href="https://www.configuroweb.com/desarrollo/" align="center"><h2>ConfiguroWeb</h2></a>
		<h2 align="center">Ingresa en tu Cuenta</h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Correo Electrónico" required="">
				<input type="password" name="password" placeholder="Contraseña" required="">
				<div class="send-button">
					<input type="submit" name="loginSubmit" value="Ingresar">
				</div>
				<br><br><a href="forgotPassword.php">¿Olvidaste tu Contraseña?</a>
			</form>
            <p>¿No tienes cuenta aún? <a href="registration.php">Regístrate acá</a></p>
		</div>
        <?php } ?>
	</div>
</body>
</html>