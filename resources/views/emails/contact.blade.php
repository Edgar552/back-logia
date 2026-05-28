<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body style="background:#f5f5f5;padding:40px;font-family:Arial,sans-serif;">

<div
    style="
            max-width:700px;
            margin:auto;
            background:white;
            padding:40px;
            border-radius:8px;
        "
>

    <h1 style="margin-bottom:30px;color:#111;">
        Nuevo mensaje de contacto
    </h1>

    <p>Hola Administrador, un usuario te ha contactado, estos son sus datos</p>

    <p>
        <strong>Nombre:</strong><br>
        {{ $data['nombre'] }}
    </p>

    <p>
        <strong>Teléfono:</strong><br>
        {{ $data['telefono'] }}
    </p>

    <p>
        <strong>Email:</strong><br>
        {{ $data['email'] }}
    </p>

    <p>
        <strong>Mensaje:</strong><br><br>
        {{ $data['mensaje'] }}
    </p>

</div>

</body>
</html>
