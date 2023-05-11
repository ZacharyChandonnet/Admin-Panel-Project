@csrf
<div>
    <label for="nom">Nom</label>
    <span><input type="text" name="nom" id="nom" value="{{ $evenement->nom }}"></span>
</div>

<div>
    <label for="date_debut">Date de début</label>
    <span><input type="date" name="date_debut" id="date_debut" value="{{ $evenement->date_debut }}"></span>
</div>

<div>
    <label for="date_fin">Date de Fin</label>
    <span><input type="date" name="date_fin" id="date_fin" value="{{ $evenement->date_fin }}"></span>
</div>

<div>
    <label for="ville">Ville</label>
    <span><input type="text" name="ville" id="ville" value="{{ $evenement->ville }}"></span>
</div>

<div>
    <label for="emplacement">Emplacement</label>
    <span><input type="text" name="emplacement" id="emplacement" value="{{ $evenement->emplacement }}"></span>
</div>

<div>
    <label for="description">Description</label>
    <span><input type="text" name="description" id="description" value="{{ $evenement->description }}"></span>
</div>

<div>
    <label for="prix">Prix</label>
    <span><input type="number" name="prix" id="prix" value="{{ $evenement->prix }}"></span>
</div>

<div><button type="submit">Modifier</button></div>

