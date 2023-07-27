<h2>Logowanie</h2>
<form action="{{ route('login') }}" method="POST">
    @csrf

    <label for="email">Adres email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Zaloguj</button>
</form>
