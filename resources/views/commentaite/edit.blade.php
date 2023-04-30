<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier commentaire</h1>

<form  enctype="multipart/form-data" action="{{ route('commentaite.update', $commentaite) }}" method="post">
    @csrf
    @include('commentaite.form')

    <div class="voir"><a href="{{ route('commentaite.index') }}">Voir commentaires</a></div>
</form>
