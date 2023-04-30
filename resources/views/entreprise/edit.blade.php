<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">

<h1>Modifier entreprise</h1>

<form  enctype="multipart/form-data" action="{{ route('entreprise.update', $entreprise) }}" method="post">
    @csrf
    @include('entreprise.form')

    <div class="voir"><a href="{{ route('entreprise.index') }}">Voir entreprises</a></div>
</form>
