<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Un utente ha richiesto di diventare</h1>
    <h2>I suoi dati:</h2>
    <p>{{$user->name}}</p>
    <p>{{$user->email}}</p>
    <p>Se vuoi farlo revisore clicca qui, oppure ignora questa email</p>
    <a href="{{route('make.revisor' , compact('user'))}}">Rendi revisore</a>
</body>
</html>