@csrf

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $hebergement->nom }}" ></span>
</div>

<div>
    <label for="type">Type</label>
    <span><input type="text" name="type" id="type" value="{{ $hebergement->type }}" ></span>
</div>

<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{ $hebergement->description }}" ></span>
</div>

<div>
    <label for="etoile">Étoile</label>
    <span><input type="number" name="etoile" id="etoile" value="{{ $hebergement->etoile }}" ></span>
</div>

<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{ $hebergement->prix }}" ></span>
</div>

<div>
    <label for="statut">Disponible</label>
    <span><input type="checkbox" name="statut" id="statut" value="1" {{ $hebergement->statut == 1 ? 'checked' : '' }}></span>
</div>

<div>
    <label for="nb_dispo">Nb de dispo</label>
    <span><input type="number" name="nb_dispo" id="nb_dispo" value="{{ $hebergement->nb_dispo }}" ></span>
</div>

<div>
    <label for="adresse">Adresse</label>
    <span><input type="text" name="adresse" id="adresse" value="{{ $hebergement->adresse }}" ></span>
</div>

<div>
    <label for="phone">Téléphone</label>
    <span><input pattern="^(\+1\s)?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})" type="tel" name="phone" id="phone" value="{{ $hebergement->phone }}" ></span>
</div>

<div>
    <label for="region_id">Régions</label>
    <span>
        <select name="region_id" id="region_id">
            <option value="1" {{ $hebergement->region_id == 1 ? 'region_id' : '' }}>Argenteuil</option>
            <option value="2" {{ $hebergement->region_id == 2 ? 'region_id' : '' }}>Laurentides</option>
            <option value="3" {{ $hebergement->region_id == 3 ? 'region_id' : '' }}>Pays-d’en-haut</option>
            <option value="4" {{ $hebergement->region_id == 4 ? 'region_id' : '' }}>Rivière-du-nord</option>
            <option value="5" {{ $hebergement->region_id == 5 ? 'region_id' : '' }}>Mirabel</option>
            <option value="6" {{ $hebergement->region_id == 6 ? 'region_id' : '' }}>Deux-Montagne</option>
        </select>
    </span>
</div>

<div><button type="submit">Modifier</button></div>




