<?php include('./header.php'); ?>

<?php
session_start();
if (!isset($_SESSION["utilisateur"])) {
    header("Location: login.php"); // redirectionne vers la page de connexion siuser n'est pas connecté
    exit();
}
?>

<!-- ############## -->
<!-- Bienvenue -->
<!-- ############## -->
<section id="bienvenue" class="bg-gray-100 py-20 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/assets/images/bienvenue-bg.webp');">
    <div class="container mx-auto text-center">
        <div class="welcome-message animate-fade-in">
            <h1 class="text-3xl font-bold mb-4 text-white">Bienvenue, <?php echo $_SESSION["utilisateur"]; ?>!</h1>
            <p class="text-lg mb-6 text-white">Vous êtes maintenant connecté.</p>
            <button class="logout-button bg-red-600 text-white font-semibold py-2 px-4 rounded transition duration-300 hover:bg-red-700" onclick="logout()">Se déconnecter</button>
        </div>
    </div>
</section>


<script>
    function logout() {
        if (confirm("Êtes-vous sûr de vouloir vous déconnecter ?")) {
            // Détruire la session
            <?php
            // Détruire la session côté serveur
            session_destroy();
            ?>
            // Rediriger vers la page de connexion
            window.location.href = "login.php";
        }
    }
</script>