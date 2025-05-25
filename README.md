📖 README - Réapprentissage des Sessions PHP Procédural


📌 Description du Projet
Ce projet est une application simple de démonstration pour réapprendre la gestion des sessions en PHP procédural. Il comprend:

Un système de connexion/déconnexion
Une page de bienvenue personnalisée
Une gestion basique des sessions
🛠 Structure des Fichiers

📦 projet-sessions-php
├── 📄 index.php            🔄 Point d'entrée redirigeant vers login
├── 📄 header.php           🏗 En-tête HTML commun
├── 📄 login.php            🔐 Page de connexion
├── 📄 bienvenue.php        🎉 Page de bienvenue après connexion
├── 📂 controllers
│   └── 📄 login.func.php   ⚙️ Logique de gestion de session

🔐 Fonctionnalités

Utilisateur test: Denis-Maka / Mot de passe: denismakamotdepasse


Création de session à la connexion
Destruction de session à la déconnexion
Protection des pages privées

Design avec Tailwind CSS
Animations simples
Messages d'erreur contextuels

🚀 Installation
Server Icon Configuration requise

PHP 7.4+
Serveur web (Apache, Nginx)

Copier
git clone [URL_DU_PROJET]
cd projet-sessions-php

Placez les fichiers dans le dossier de votre serveur web
Accédez à index.php via votre navigateur

📚 Concepts Appris
PHP Iconsession_start() - Initialisation des sessions
Variable Icon$_SESSION - Stockage des données de session
Security IconProtection des pages avec vérification de session

Redirect Iconheader("Location: ...") - Redirections HTTP
🔄 Workflow Typique
Utilisateur accède à index.php
Redirection vers login.php
Après authentification réussie:
Création de session
Redirection vers bienvenue.php
Option de déconnexion disponible:
Destruction de session
Retour à la page de login

🛡 Sécurité (À Améliorer)
⚠️ Ce projet est une démonstration pédagogique.
