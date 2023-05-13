<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier evenement</h1>

<form  enctype="multipart/form-data" action="{{ route('evenement.update', $evenement) }}" method="post">
    @csrf
    @include('evenement.form')

    <div class="voir"><a href="{{ route('evenement.index') }}">Voir Événements</a></div>
</form>

<form class="del" action="{{ route('evenement.destroy', $evenement->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?')">
    @csrf
    @method('DELETE')
    <button class="btn" type="submit">Supprimer événement</button>
</form>
