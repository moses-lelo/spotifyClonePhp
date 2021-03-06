<?php
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account();
    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

?>

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
        <form method="POST" action="register.php" id="loginForm">
            <h2>Connectez vous</h2>
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


        <form method="POST" action="register.php" id="RegisterForm">
            <h2>Crée ton compte</h2>
            <p>
                <?php echo $account->getError(Constants::$usernameCharacters)?>
                <label for="username">Pseudo: </label>
                <input id="username" name="username" type="text" placeholder="ex: Leonardo" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters)?>
                <label for="firstName">Prenom: </label>
                <input id="firstName" name="firstName" type="text" placeholder="ex: Christian" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters)?>
                <label for="lastName">Nom: </label>
                <input id="lastName" name="lastName" type="text" placeholder="ex: Wagne" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch)?>
                <?php echo $account->getError(Constants::$emailInvalid)?>  
                <label for="email">Email: </label>
                <input id="email" name="email" type="email" placeholder="ex: ChrisWagner@gmail.com" required>
            </p>
            <p>
                <label for="email2">Confirmez Email: </label>
                <input id="email2" name="email2" type="email" placeholder="ex: ChrisWagner@gmail.com" required>
            </p>

            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch)?>
                <?php echo $account->getError(Constants::$passwordDoNotAlphanumeric)?>
                <?php echo $account->getError(Constants::$passwordCharacters)?>
                <label for="password">Mot de passe: </label>
                <input id="password" name="password" type="password" required>
            </p>   

            <p>
                <label for="password2">Confirmez Mot de passe: </label>
                <input id="password2" name="password2" type="password" required>
            </p> 

            <button type="submit" name="RegisterButton">Inscription</button>

        </form>

    </div>

</body>
</html>