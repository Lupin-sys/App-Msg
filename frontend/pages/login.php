<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-7.2.0-web/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>

<body class="log">
    <div class="logo">
        <span class="app">App</span><span class="msg">Msg</span>
    </div>
    <section class="sec-form">
        <form action="login.php" method="POST" class="container"> 
            <div class="container form">

                 <h1 class="log-h1">Connexion</h1>

                <div class="div-form">
                    <label for="nomu" class="form-label">Nom d'utilisateur</label>
                    <input type="text" name="nomu" id="nomu" placeholder="Ex: SIEWE MAYLIS " class="form-control lg form-in ">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div class="div-form">
                    <label for="password" class="form-label">Mot de passe</label>
                    <input type="password" name="password" id="password" placeholder=" Ex: Password" class="form-control lg form-in ">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <div class="bouton">
                    <button type="submit" class="btn  mt-3 form-btn">Se connecter</button>
                </div>
                <div class="link-register">
                    <p class="mt-4">Créer un compte ? <a href="register.php">S'inscrire</a></p>
                </div>
            </div>
        </form>
    </section>
</body>

</html>