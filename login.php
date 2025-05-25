<?php include('./header.php')
?>
<?php include('./controllers/login.func.php') ?>




<!-- ############## -->
<!-- Login -->
<!-- ############## -->
<div class="container">
    <div class="login-form">
        <h2 class="text-center">Connexion</h2>
        <form method="post">
            <div class="form-group">
                <label for="nom_utilisateur">Nom d'utilisateur :</label>
                <input type="text" class="form-control" name="nom_utilisateur" required>
            </div>
            <div class="form-group">
                <label for="mot_de_passe">Mot de passe :</label>
                <input type="password" class="form-control" name="mot_de_passe" required>
            </div>
            <button type="submit" name="connexion" class="btn btn-primary btn-block">Se connecter</button>
            <?php if ($erreur): ?>
                <div class="alert alert-danger mt-3" role="alert">
                    <?php echo $erreur; ?>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>