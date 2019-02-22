<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spotify</title>
</head>
<body>
    
    <div id="inputContainer">
        <form method="POST" action="register.php" id="login">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Identifiant: </label>
                <input id="loginUsername" name="loginUsername" type="text" placeholder="ex: Leonardo" required>
            </p>
            <p>
                <label for="loginPassword">Mot de passe: </label>
                <input id="loginPassword" name="loginPassword" type="password" required>
            </p>   

            <button type="submit" name="loginButton">Connexion</button>

        </form>
    </div>

</body>
</html>