<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Événements</title>
</head>

<body>
    <h1> Liste évenements </h1>
    <div class="create"><a href="{{ route('evenement.create') }}">Créer un événement</a></div>

    <div class="list">
        @foreach ($evenements as $evenement)
            <div class="item">
                <a href="{{route('evenement.edit', $evenement)}}">{{$evenement->nom}}</a>
            </div>
        @endforeach
    </div>
</body>

</html>
