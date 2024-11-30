<?php include 'includes/header.php'; ?>
<h1>Iniciar Sesión</h1>
<form action="procesar_login.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>
    
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>
    
    <input type="submit" value="Iniciar Sesión">
</form>
<?php include 'includes/footer.php'; ?>