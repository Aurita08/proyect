<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <h1>Crear Usuario</h1>

    <form method="POST" >
        @csrf
    
        <div>
            <label for="identidad">Identidad:</label>
            <input type="text" id="identidad" name="identidad">
        </div>
        <div>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre">
        </div>
        <div>
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido">
        </div>
        <div>
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad">
        </div>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>