@csrf

<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $entreprise->nom }}" ></span>
</div>

<div>
    <label for="type">Type</label>
    <span><input type="text" name="type" id="type" value="{{ $entreprise->type }}" ></span>
</div>

<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{ $entreprise->description }}" ></span>
</div>

<div>
    <label for="specialite">Specialite</label>
    <span><input type="text" name="specialite" id="specialite" value="{{ $entreprise->specialite }}" ></span>
</div>

<div>
    <label for="adresse">Adresse</label>
    <span><input type="text" name="adresse" id="adresse" value="{{ $entreprise->adresse }}" ></span>
</div>

<div>
    <label for="email">Email</label>
    <span><input type="text" name="email" id="email" value="{{ $entreprise->email }}" ></span>
</div>

<div>
    <label for="phone">Téléphone</label>
    <span><input pattern="^(\+1\s)?\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})" type="tel" name="phone" id="phone" value="{{ $entreprise->phone }}" ></span>
</div>

<div>
    <label for="code_postal">Code postal</label>
    <span><input pattern="[a-zA-Z][0-9][a-zA-Z][ \._-][0-9][a-zA-Z][0-9]" type="text" name="code_postal" id="code_postal" value="{{ $entreprise->code_postal }}" ></span>
</div>

<div>
    <label for="personne_ressource">Personne Ressource</label>
    <span><input  type="text" name="personne_ressource" id="personne_ressource" value="{{ $entreprise->personne_ressource }}" ></span>
</div>

<div>
    <label for="secteur_id">Secteur</label>
    <span>
        <select name="secteur_id" id="secteur_id">
            <option value="1" {{ $entreprise->secteur_id == 1 ? 'selected' : '' }}>Agriculture</option>
            <option value="2" {{ $entreprise->secteur_id == 2 ? 'selected' : '' }}>Agroalimentaire</option>
        </select>
    </span>
</div>

<div><button type="submit">Modifier</button></div>
