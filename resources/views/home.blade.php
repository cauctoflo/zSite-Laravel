<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenue, {{ Auth::user()->name }}!</h1>
    </div>
</body>
</html>