<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    @vite('resources/css/iniciar_sesion.css')
</head>
<body>
    <main class="login-card">
        <h1>Iniciar sesión</h1>
        <form>
            <label for="usuario">Usuario</label>
            <input type="text" id="usuario" name="usuario" autocomplete="username">

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" autocomplete="current-password">

            <button type="button">Iniciar sesión</button>
        </form>
        <a href="{{ route('home') }}">Volver al inicio</a>
    </main>
</body>
</html>
