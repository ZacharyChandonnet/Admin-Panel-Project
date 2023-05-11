@csrf

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $forfait->nom }}" ></span>
</div>

<div>
    <label for="emplacement">Emplacement</label>
    <span><input type="text" name="emplacement" id="emplacement" value="{{ $forfait->emplacement }}" ></span>
</div>

<div>
    <label for="type">Type</label>
    <span><input type="text" name="type" id="type" value="{{ $forfait->type }}" ></span>
</div>

<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{ $forfait->description }}" ></span>
</div>

<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{ $forfait->prix }}" ></span>
</div>

<div>
    <label for="date_debut">Date Début</label>
    <span><input type="date" name="date_debut" id="date_debut" value="{{ $forfait->date_debut }}" ></span>
</div>

<div>
    <label for="date_fin">Date Fin</label>
    <span><input type="date" name="date_fin" id="date_fin" value="{{ $forfait->date_fin }}" ></span>
</div>

<div>
    <label for="dispo">Disponible</label>
    <span><input type="checkbox" name="dispo" id="dispo" value="1" {{ $forfait->dispo == 1 ? 'checked' : '' }}></span>
</div>

<div><button type="submit">Modifier</button></div>
