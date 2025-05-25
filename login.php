<?php include('./header.php')
?>
<?php include('./controllers/login.func.php') ?>


<!-- ############## -->
<!-- Login -->
<!-- ############## -->
<section id="login" class="bg-gray-100 py-20">
    <div class="container mx-auto">
        <div class="login-form animate-fade-in max-w-md mx-auto bg-white p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center mb-6">Connexion</h2>
            <form method="post">
                <div class="form-group mb-4">
                    <label for="nom_utilisateur" class="block text-sm font-medium text-gray-700">Nom d'utilisateur :</label>
                    <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="nom_utilisateur" required>
                </div>
                <div class="form-group mb-4">
                    <label for="mot_de_passe" class="block text-sm font-medium text-gray-700">Mot de passe :</label>
                    <input type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" name="mot_de_passe" required>
                </div>
                <button type="submit" name="connexion" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md transition duration-300 hover:bg-blue-700">Se connecter</button>
                <?php if ($erreur): ?>
                    <div class="alert alert-danger mt-3 text-red-600">
                        <?php echo $erreur; ?>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</section>