@csrf

<div>
    <label for="categorie">Categorie</label>
    <span>
        <select name="categorie" id="categorie">
            <option value="Agriculture" {{ $secteur->categorie == "Agriculture" ? 'selected' : '' }}>Agriculture</option>
            <option value="Agroalimentaire" {{ $secteur->categorie == "Agroalimentaire" ? 'selected' : '' }}>Agroalimentaire</option>
            <option value="Restauration" {{ $secteur->categorie == "Restauration" ? 'selected' : '' }}>Restauration</option>
            <option value="Activite" {{ $secteur->categorie == "Activite" ? 'selected' : '' }}>Activite</option>
            <option value="Hebergement" {{ $secteur->categorie == "Hebergement" ? 'selected' : '' }}>Hebergement</option>
        </select>
    </span>
</div>

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $secteur->nom }}" ></span>
</div>

<div><button type="submit">Modifier</button></div>

