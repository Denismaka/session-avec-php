


<?php
if (isset($_SESSION["utilisateur"])) {
    header("Location: bienvenue.php"); // Rediriger vers la page de bienvenue si l'utilisateur est déjà connecté
    exit();
}

$erreur = "";
if (isset($_POST['connexion'])) {
    // Simuler une base de données d'utilisateurs
    $utilisateurs = [
        'utilisateur1' => 'motdepasse1',
        'utilisateur2' => 'motdepasse2',
    ];

    $nomUtilisateur = $_POST['nom_utilisateur'];
    $motDePasse = $_POST['mot_de_passe'];

    // Vérification des identifiants
    if (isset($utilisateurs[$nomUtilisateur]) && $utilisateurs[$nomUtilisateur] === $motDePasse) {
        $_SESSION["utilisateur"] = $nomUtilisateur; // Enregistrer l'utilisateur dans la session
        header("Location: bienvenue.php"); // Rediriger vers la page de bienvenue
        exit();
    } else {
        $erreur = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>