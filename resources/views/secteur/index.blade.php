<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Secteurs</title>
</head>

<body>
    <h1>Liste Secteurs </h1>
    <div class="create"><a href="{{ route('secteur.create') }}">Créer un secteur</a></div>
<div class="list">
    @foreach ($secteurs as $secteur)
        <div class="item">
            <a href="{{route('secteur.edit', $secteur)}}">{{$secteur->nom}}</a>
        </div>
    @endforeach
</div>
</body>

</html>
