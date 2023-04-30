<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Hébergements</title>
</head>

<body>
    <h1> Liste Hébergements </h1>
    <div class="create"><a href="{{ route('hebergement.create') }}">Créer un hébergement</a></div>

    <div class="list">
        @foreach ($hebergements as $hebergement)
            <div class="item">
                <a href="{{ route('hebergement.edit', $hebergement) }}">{{ $hebergement->nom }}</a>
            </div>
        @endforeach
    </div>
</body>

</html>
