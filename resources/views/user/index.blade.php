<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>Utilisateurs</title>
</head>

<body>
    <h1>Liste Utilisateurs </h1>
    <div class="create"><a href="{{ route('user.create') }}">Créer un utilisateur</a></div>
    <div class="list">
        @foreach ($users as $user)
            <div class="item">
                <a href="{{ route('user.edit', $user) }}">{{ $user->name }}</a>
            </div>
        @endforeach
    </div>
</body>

</html>
