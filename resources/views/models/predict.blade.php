<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prédiction</title>
</head>
<body>
    <h1>Prédire avec Flask</h1>

    @if (session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('predict') }}" method="POST">
        @csrf
        <label for="feature">Entrez une valeur pour la caractéristique :</label>
        <input type="text" id="feature" name="feature" required>
        <button type="submit">Prédire</button>
    </form>

    @isset($prediction)
        <h2>Résultat de la prédiction :</h2>
        <p>{{ $prediction }}</p>
    @endisset
</body>
</html>
