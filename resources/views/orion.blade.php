<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet" />
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <title>Laravel</title>
</head>
<body>

<h1>Média</h1>

<form action="/media" method="post">
    @csrf

    Nota 1: <input type="text" name="nota1"><br>
    Nota 2: <input type="text" name="nota2"><br>
    Nota 3: <input type="text" name="nota3"><br>
    Nota 4: <input type="text" name="nota4"><br>

    <input type="submit" value="Enviar">

</form>

</body>
</html>