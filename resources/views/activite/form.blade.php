@csrf

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $activite->nom }}" ></span>
</div>

<div>
    <label for="type">Type</label>
    <span><input type="text" name="type" id="type" value="{{ $activite->type }}" ></span>
</div>

<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{ $activite->description }}" ></span>
</div>

<div>
    <label for="duree">Duree</label>
    <span><input type="text" name="duree" id="duree" value="{{ $activite->duree }}" ></span>
</div>

<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{ $activite->prix }}" ></span>
</div>

<div>
    <label for="statut">Disponible</label>
    <span><input type="checkbox" name="statut" id="statut" value="1" {{ $activite->statut == 1 ? 'checked' : '' }}></span>
</div>

<div>
    <label for="nb_dispo">nb_dispo</label>
    <span><input type="text" name="nb_dispo" id="nb_dispo" value="{{ $activite->nb_dispo }}" ></span>
</div>

<div><button type="submit">Modifier</button></div>
