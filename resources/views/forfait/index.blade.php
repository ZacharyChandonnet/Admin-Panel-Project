<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Forfaits</title>
</head>

<body>

    <h1> Liste Forfaits </h1>
    <div class="create"><a href="{{ route('forfait.create') }}">Créer un forfait</a></div>

    <div class="list">
        @foreach ($forfaits as $forfait)
            <div class="item">
                <a href="{{ route('forfait.edit', $forfait) }}">{{ $forfait->nom }}</a>
            </div>
        @endforeach
    </div>

</body>

</html>
