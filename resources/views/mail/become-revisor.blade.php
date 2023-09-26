<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>{{$user->name}} ha richiesto di diventare Revisore</h1>
    <h2>I suoi dati:</h2>
    <h5>{{$user->name}}</h5>
    <h5>{{$user->email}}</h5>
    <p>{{$user_message}}</p>
    <p>Se vuoi farlo revisore clicca qui: <a href="{{route('make.revisor' , compact('user'))}}"> Rendi revisore</a><br>Oppure ignora questa email</p>
    
    

    <small>Scarica il CV in PDF: <a href="{{ $pdfAttachment->path() }}">Scarica CV</a></small>
</body>
</html>