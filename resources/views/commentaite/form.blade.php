@csrf

<div>
    <label for="commentaire">Commentaire</label>
    <span><input type="text" name="commentaire" id="commentaire" value="{{ $commentaite->commentaire }}" ></span>
</div>

<div>
    <label for="date">Date</label>
    <span><input type="date" name="date" id="date" value="{{ $commentaite->date }}" ></span>
</div>

<div>
    <label for="cote">Cote</label>
    <span><input type="number" name="cote" id="cote" value="{{ $commentaite->cote }}" ></span>
</div>

<div><button type="submit">Modifier</button></div>
