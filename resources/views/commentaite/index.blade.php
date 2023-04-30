<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Commentaites</title>
</head>

<body>
    <h1> Liste Commentaires </h1>
    <div class="create"><a href="{{ route('commentaite.create') }}">Créer un commentaire</a></div>
    <div class="list">
        @foreach ($commentaites as $commentaite)
            <div class="item">
                <a href="{{ route('commentaite.edit', $commentaite) }}">{{ $commentaite->commentaire }}</a>
            </div>
        @endforeach
    </div>
</body>

</html>
