<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier activite</h1>

<form enctype="multipart/form-data" action="{{ route('activite.update', $activite) }}" method="post">
    @csrf
    @include('activite.form')

    <div class="voir"><a href="{{ route('activite.index') }}">Voir activités</a></div>
</form>

<form class="del" action="{{ route('activite.destroy', $activite->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?')">
    @csrf
    @method('DELETE')
    <button class="btn" type="submit">Supprimer activité</button>
</form>
