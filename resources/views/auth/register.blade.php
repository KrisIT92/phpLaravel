<h2>Rejestracja</h2>
<form action="{{ route('register') }}" method="POST">
    @csrf

    <label for="name">Imię:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Adres email:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" required>

    <button type="submit">Zarejestruj</button>
</form>
