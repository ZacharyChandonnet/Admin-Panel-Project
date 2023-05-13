<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier user</h1>

<form  enctype="multipart/form-data" action="{{ route('user.update', $user) }}" method="post">
    @csrf
    @include('user.form')

    <div class="voir"><a href="{{ route('user.index') }}">Voir Utlisateurs</a></div>
</form>

<form class="del" action="{{ route('user.destroy', $user->id) }}" method="post" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette activité ?')">
    @csrf
    @method('DELETE')
    <button class="btn" type="submit">Supprimer utilisateur</button>
</form>
