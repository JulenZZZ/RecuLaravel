<!doctype html>
<html>
<head>
    <title>
        Recuperacion
    </title>
</head>
<body>
<br />
<h4>Formulario de divisiones</h4>

<form action='acceder' method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}"><br>
    Numero:<br>
    <input type="text" name="dividiendo" value="dividiendo"><br><br>
    Divisor:<br>
    <input type="text" name="divisor" value="divisor"><br><br>
    <button type="submit">Enviar</button>
</form>


</body>
</html>