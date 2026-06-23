<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="fontawesome-free-7.2.0-web/css/all.min.css">
    <title>Register</title>
</head>

<body class="reg">
    <div class="logo">
        <span class="app">App</span><span class="msg">Msg</span>
    </div>
    <div class="d-flex align-items-stretch">
        <section class="w-50 left container ">
            <h1>Bienvenue sur App-Msg </h1>
            <br>
            <p>Vivez une communication fluide et organisée avec App-Msg. Connectez-vous instantanément avec vos amis, votre famille et vos collègues. Commencez gratuitement. </p>
        </section>
        <section class="sec-form-reg  w-50">
            <form action="register.php" method="POST" class="container-fluid">
                <div class="form-reg ">
                    <h1 class="log-h1">Inscription</h1>
                    <div class="row">
                        <div class="div-form col">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" name="nom" id="nom" placeholder="Ex: SIEWE " class=" form-control lg form-in ">
                        </div>
                        <div class="div-form col">
                            <label for="prenom" class="form-label">Prenom</label>
                            <input type="text" name="prenom" id="prenom" placeholder="Ex: MAYLIS" class=" form-control lg form-in ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="div-form col">
                            <label for="nomu" class="form-label">Nom d'utilisateur</label>
                            <input type="text" name="nomu" id="nomu" placeholder="Ex: SIEWE MAYLIS" class="form-control lg form-in ">
                        </div>
                        <div class="div-form col">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" id="password" placeholder=" Ex: Password" class="form-control lg form-in ">
                        </div>
                    </div>
                    <div class="row">
                        <div class="div-form col">
                            <label for="date_naissance" class="form-label">Date de naissance</label>
                            <input type="date" name="date_naissance" id="date_naissance" class="form-control lg form-in ">
                        </div>
                        <div class="div-form col">
                            <label for="email" class="form-label">Email</label>
                            <input type="mail" name="email" id="email" placeholder="Ex: telieums@gmail.com" class="form-control lg form-in ">
                        </div>
                    </div>

                    <div class="bouton">
                        <button type="submit" class="btn mt-3  form-btn">S'inscrire</button>
                    </div>

                </div>
            </form>
        </section>
    </div>
</body>

</html>