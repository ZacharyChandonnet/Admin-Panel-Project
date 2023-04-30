<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <title>Admin/Créer Entreprise</title>
</head>

<body>
    <h1> Ajouter une entreprise </h1>
    <form action="{{ route('entreprise.store') }}" method="POST">
        @include('entreprise.form')
    </form>
</body>
</html>
