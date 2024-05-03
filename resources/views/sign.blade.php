<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Firmar XML</title>
</head>
<body>
    <form action="/sign" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="invoice">Factura</label>
            <input type="file" name="invoice" id="invoice" required>
        </div>
        <br><br>
        <div>
            <label for="certificate">Certificado</label>
            <input type="file" name="certificate" id="certificate" required>
        </div>
        <br><br>
        <div>
            <label for="password">Contraseña</label>
            <input type="text" name="password" id="password" required>
        </div>
        <br><br>
        <button>
            Firmar
        </button>
    </form>
</body>
</html>