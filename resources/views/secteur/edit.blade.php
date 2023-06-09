<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier secteur</h1>

<form enctype="multipart/form-data" action="{{ route('secteur.update', $secteur) }}" method="post">
    @csrf
    @include('secteur.form')

    <div class="voir"><a href="{{ route('secteur.index') }}">Voir Secteurs</a></div>
</form>

<form class="del" action="{{ route('secteur.destroy', $secteur->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?')">
    @csrf
    @method('DELETE')
    <button class="btn" type="submit">Supprimer secteur</button>
</form>
