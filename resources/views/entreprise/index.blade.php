<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Entreprises</title>
</head>
<body>
    <h1> Liste Entreprises </h1>
    <div class="create"><a href="{{ route('entreprise.create') }}">Créer une entreprise</a></div>
    <div class="list">
        @foreach ($entreprises as $entreprise)
            <div class="item">
                <a href="{{ route('entreprise.edit', $entreprise) }}">{{ $entreprise->nom }}</a>
            </div>
        @endforeach
    </div>
</body>

</html>
