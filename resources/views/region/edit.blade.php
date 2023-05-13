<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier Région</h1>

<form enctype="multipart/form-data" action="{{ route('region.update', $region) }}" method="post">
    @csrf
    @include('region.form')
    <div class="voir"><a href="{{ route('region.index') }}">Voir Régions</a></div>
</form>

<form class="del" action="{{ route('region.destroy', $region->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?')">
    @csrf
    @method('DELETE')
    <button class="btn" type="submit">Supprimer région</button>
</form>
