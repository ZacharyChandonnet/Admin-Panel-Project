@csrf

<div>
    <label for="name">Nom</label>
    <span><input type="text" name="name" id="name" value="{{ $user->name }}" ></span>
</div>

<div>
    <label for="email">Email</label>
    <span><input type="text" name="email" id="email" value="{{ $user->email }}" ></span>
</div>

<div>
    <label for="phone">Téléphone</label>
    <span><input type="tel" name="phone" id="phone" value="{{ $user->phone }}" ></span>
</div>

<div>
    <label for="adresse">Adresse</label>
    <span><input type="text" name="adresse" id="adresse" value="{{ $user->adresse }}" ></span>
</div>

<div>
    <label for="password">Password</label>
    <span><input type="text" name="password" id="password" value="{{ $user->password }}" ></span>
</div>

<div><button type="submit">Modifier</button></div>
