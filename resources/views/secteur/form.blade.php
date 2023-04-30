@csrf

<div>
    <label for="categorie">Categorie</label>
    <span>
        <select name="categorie" id="categorie">
            <option value="1" {{ $secteur->categorie == "Agriculture" ? 'selected' : '' }}>Agriculture</option>
            <option value="2" {{ $secteur->categorie == "Agroalimentaire" ? 'selected' : '' }}>Agroalimentaire</option>
        </select>
    </span>
</div>

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $secteur->nom }}" ></span>
</div>

<div><button type="submit">Modifier</button></div>
