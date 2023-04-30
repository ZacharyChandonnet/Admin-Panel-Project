@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $region->nom }}"></span>
</div>

<div>
    <label for="description">Descrpition</label>
    <span><input type="text" name="description" id="description" value="{{ $region->description }}"></span>
</div>

<div>
    <label for="specialite">Specialite</label>
    <span><input type="text" name="specialite" id="specialite" value="{{ $region->specialite }}"></span>
</div>


<div><button type="submit">Modifier</button></div>