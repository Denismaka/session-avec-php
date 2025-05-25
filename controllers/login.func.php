
<?php
session_start(); // Démarrer la session

// Simuler une base de données d'utilisateurs
$utilisateurs = [
    'Denis-Maka' => 'denismakamotdepasse',
];

// Gestion de la connexion
if (isset($_POST['connexion'])) {
    $nomUtilisateur = $_POST['nom_utilisateur'];
    $motDePasse = $_POST['mot_de_passe'];

    // Vérification des identifiants
    if (isset($utilisateurs[$nomUtilisateur]) && $utilisateurs[$nomUtilisateur] === $motDePasse) {
        $_SESSION["utilisateur"] = $nomUtilisateur; // Enregistrer l'utilisateur dans la session
        header("Location: bienvenue.php"); // Rediriger vers une page de bienvenue
        exit();
    } else {
        $erreur = "Nom d'utilisateur ou mot de passe incorrect.";
    }
}

// Vérifier si l'utilisateur est connecté
if (isset($_SESSION["utilisateur"])) {
    echo "Utilisateur : " . $_SESSION["utilisateur"];

    // Option pour se déconnecter
    if (isset($_POST['deconnexion'])) {
        unset($_SESSION["utilisateur"]); // Supprimer la valeur de la session
        session_destroy(); // Détruire la session
        header("Location: login.php"); // Rediriger vers la page de connexion
        exit();
    }
} else {
    echo "Aucun utilisateur connecté.";
}
?>

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