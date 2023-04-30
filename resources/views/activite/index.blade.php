<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Activités</title>
</head>

<body>
    <h1> Liste Activités </h1>
    <div class="create"><a href="{{ route('activite.create') }}">Créer une activité</a></div>
    <div class="list">
        @foreach ($activites as $activite)
            <div class="item">
                <a href="{{route('activite.edit', $activite)}}">{{$activite->nom}}</a>
            </div>
        @endforeach
    </div>

</body>

</html>
