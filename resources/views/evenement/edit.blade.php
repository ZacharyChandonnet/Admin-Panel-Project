<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier evenement</h1>

<form  enctype="multipart/form-data" action="{{ route('evenement.update', $evenement) }}" method="post">
    @csrf
    @include('evenement.form')

    <div class="voir"><a href="{{ route('evenement.index') }}">Voir Événements</a></div>
</form>
