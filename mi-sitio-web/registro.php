<?php include 'includes/header.php'; ?>
<h1>Registro</h1>
<form action="procesar_registro.php" method="post">
    <label for="usuario">Usuario:</label>
    <input type="text" id="usuario" name="usuario" required>
    
    <label for="correo">Correo:</label>
    <input type="email" id="correo" name="correo" required>
    
    <label for="contrasena">Contraseña:</label>
    <input type="password" id="contrasena" name="contrasena" required>
    
    <input type="submit" value="Registrar">
</form>
<?php include 'includes/footer.php'; ?>