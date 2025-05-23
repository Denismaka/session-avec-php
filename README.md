# 🗂️ Apprentissage de la Mise en Place de Sessions en PHP

Ce projet est dédié à mon apprentissage de la gestion des sessions dans des applications web en utilisant PHP de manière procédurale.

## 📚 Table des Matières

-   [Introduction](#introduction)
-   [Installation](#installation)
-   [Utilisation](#utilisation)
-   [Exemples de Code](#exemples-de-code)
-   [Références](#références)

## 📝 Introduction

Les sessions sont un mécanisme permettant de conserver des informations entre les requêtes d'un utilisateur sur un site web. Contrairement aux cookies, qui sont stockés sur le navigateur, les données de session sont stockées côté serveur. Ce projet a pour but de m'aider à comprendre comment créer, lire et supprimer des sessions en PHP.

## 💻 Installation

1. Clonez le dépôt :
    ```bash
    git clone https://github.com/votre-utilisateur/votre-repo.git
    ```
2. Accédez au répertoire du projet :
   cd votre-repo
3. Assurez-vous d'avoir un serveur web avec PHP installé (comme XAMPP, WAMP ou laragon).

🚀 Utilisation
Ouvrez le fichier `index.php` dans votre navigateur.
Suivez les instructions à l'écran pour expérimenter avec la création, la lecture et la suppression de sessions.

💡 Exemples de Code

🔑 Démarrer une Session
Voici un exemple simple de démarrage d'une session et de stockage d'une valeur :

<?php
session_start(); // Démarrer la session
$_SESSION["utilisateur"] = "Jean"; // Stocker une valeur dans la session
?>

📖 Lecture d'une Session
Pour lire une valeur de session, utilisez le code suivant :

<?php
session_start(); // Démarrer la session
if(isset($_SESSION["utilisateur"])) {
    echo "Utilisateur : " . $_SESSION["utilisateur"];
} else {
    echo "Aucun utilisateur connecté.";
}
?>

❌ Suppression d'une Session
Pour supprimer une valeur de session :

<?php
session_start(); // Démarrer la session
unset($_SESSION["utilisateur"]); // Supprimer la valeur de la session
?>

🗑️ Détruire une Session
Pour détruire complètement une session :

<?php
session_start(); // Démarrer la session
session_destroy(); // Détruire la session
?>

📖 Références
Documentation PHP sur les sessions

## Contact

Pour toute question ou collaboration, n'hésitez pas à me contacter :

Email : makadenis370@gmail.com
Téléphone : +243818252385, +243997435030.
Réseaux sociaux : Suivez-moi sur https://twitter.com/MakaDenis3, https://www.linkedin.com/in/Denismaka, https://github.com/Denismaka, https://www.facebook.com/Denismaka

Ce projet est un excellent moyen pour moi d'apprendre et de pratiquer la gestion des cookies en PHP !.
