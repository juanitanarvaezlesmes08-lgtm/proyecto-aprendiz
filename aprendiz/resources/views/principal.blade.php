<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestión Odontológica</title>
    @vite(['resources/css/estilos.css', 'resources/css/estilosPlantilla.css'])
</head>
<body>
    <main id="contenedor">
        <header id="encabezado">
            <h1>Sistema de Gestión Odontológica</h1>
        </header>

        <nav aria-label="Navegación principal">
            <ul id="menu">
                <li><a href="{{ route('home') }}" aria-current="page">Inicio</a></li>
                <li><a href="{{ route('iniciarsesion') }}">Iniciar sesión</a></li>
            </ul>
        </nav>

        <section id="contenido" aria-labelledby="titulo-contenido">
            <h2 id="titulo-contenido">Información general</h2>
            <p>El sistema de gestión odontológica permite administrar la información de los pacientes, los tratamientos y las citas.</p>
            <p>Las opciones de gestión de citas estarán disponibles cuando se implementen sus páginas:</p>
            <ul>
                <li>Asignar cita</li>
                <li>Consultar cita</li>
                <li>Cancelar cita</li>
            </ul>
        </section>
    </main>
</body>
</html>
