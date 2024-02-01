<?php
    session_start();
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Envoi de Login et Mot de Passe avec PDO</title>
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <link rel="stylesheet" href="./css/main.css">
    
</head>
<body>

<header>
    <h1>🧑‍💻 Inscription</h1>
</header>

<div class="form-action" role="group" aria-labelledby="form">
    <?php
        include_once __DIR__."/controller/UserManageur.class.php";
    ?>
    <fieldset>
        <legend>Commencer par initialiser votre login et mot de passe</legend>
        <form method="post" action="<?php print $_SERVER["PHP_SELF"]; ?>" id="form">
            <label for="login">Login :</label>
            <input type="text" id="login" name="login" placeholder="Login" aria-required="true" autofocus>
        
            <label for="mot_de_passe">Mot de passe :</label>
            <input type="password" id="mot_de_passe" placeholder="Password" name="mot_de_passe" aria-required="true">
        
            <button type="submit">S'inscrire</button>
        </form>
    </fieldset>
</div>
<footer>
    <p>
        &copy; - MIT - 2024
    </p>
</footer>

</body>
</html>
