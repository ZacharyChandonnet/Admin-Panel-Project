<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier hébergement</h1>

<form  enctype="multipart/form-data" action="{{ route('hebergement.update', $hebergement) }}" method="post">
    @csrf
    @include('hebergement.form')

    <div class="voir"><a href="{{ route('hebergement.index') }}">Voir Hébergements</a></div>
</form>
