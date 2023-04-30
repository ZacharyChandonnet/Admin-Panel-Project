<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">

    <title>AGROTOURISME LAURENTIDES</title>
</head>

<body>
    <div class="interface">

        <div class="menu">
            <nav>
                <ul>
                    <li><a href="{{ route('entreprise.index') }}">Entreprises</a></li>
                    <li><a href="{{ route('hebergement.index') }}">Hebergements</a></li>
                    <li><a href="{{ route('region.index') }}">Régions</a></li>
                    <li><a href="{{ route('evenement.index') }}">Événements</a></li>
                    <li><a href="{{ route('activite.index') }}">Activités</a></li>
                    <li><a href="{{ route('secteur.index') }}">Secteurs</a></li>
                    <li><a href="{{ route('forfait.index') }}">Forfaits</a></li>
                    <li><a href="{{ route('commentaite.index') }}">Commentaires</a></li>
                    <li> <a href="{{ route('user.index') }}">Utilisateurs</a></li>
                </ul>
            </nav>
        </div>
        <div class="title">
            <h1>AGROTOURISME LAURENTIDES</h1>
            <h2>admin panel</h2>
        </div>
    </div>
</body>

</html>
