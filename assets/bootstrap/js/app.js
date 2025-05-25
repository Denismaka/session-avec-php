function logout() {
    if (confirm("Êtes-vous sûr de vouloir vous déconnecter ?")) {
        // Redirige vers la page de connexion ou déconnexion
        window.location.href = "login.php"; // Changez ceci si vous avez une page de déconnexion
    }
}
