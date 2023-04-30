<link rel="stylesheet" href="{{ asset('css/form.css') }}">
<link rel="stylesheet" href="{{ asset('css/reset.css') }}">
<h1>Modifier forfait</h1>

<form  enctype="multipart/form-data" action="{{ route('forfait.update', $forfait) }}" method="post">
    @csrf
    @include('forfait.form')

    <div class="voir"><a href="{{ route('forfait.index') }}">Voir Forfaits</a></div>
</form>
