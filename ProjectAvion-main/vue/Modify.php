<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" media="screen" type="text/css" />
</head>
<body>
<div id="container">
    <!-- zone de connexion -->

    <form action="../scr/Traitement/inscription.php" method="POST">
        <h1>Inscription</h1>

        <label><b>Nom </b></label>
        <input type="text" placeholder="Entrer votre nom" name="nom" required><br><br>

        <label><b>Prénom</b></label>
        <input type="text" placeholder="Entrer votre prenom" name="prenom" required><br><br>

        <label><b>Email</b></label>
        <input type="email" placeholder="Entrer votre email" name="email" required><br><br>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required><br><br>

        <input type="submit" id='submit' value='Connexion' >
        <?php
        if(isset($_GET['erreur'])){
            $err = $_GET['erreur'];
            if($err==1 || $err==2)
                echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
        }
        ?>
    </form>
</div>
</body>
</html>
