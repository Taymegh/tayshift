# Tayshift

## Description
**Tayshift** est une application web en PHP visant à faciliter le transfert de fichiers entre étudiants. Le but est de permettre un partage de documents rapide et efficace, optimisant ainsi le temps nécessaire pour produire et échanger des comptes rendus et d'autres documents scolaires.

## Fonctionnalités
- **Inscription et gestion de session** : Système d'enregistrement des utilisateurs avec gestion de sessions sécurisées.
- **Transfert de fichiers** : Interface simple pour l'upload et le partage de fichiers entre étudiants.
- **Notifications par email** : Utilisation de PHPMailer pour informer les utilisateurs de nouvelles activités (fichiers reçus, mises à jour, etc.).
- **Interface utilisateur** : Design responsive avec Bootstrap pour une navigation fluide et intuitive.
- **Gestion des comptes** : Système de réinitialisation de mot de passe et de gestion de profil.

## Prérequis
- **PHP** (version 7.4 ou plus)
- **Serveur web** tel que XAMPP ou WAMP
- **Base de données MySQL**
- **Composer** pour gérer les dépendances PHP (notamment PHPMailer)
- **Bootstrap** pour la mise en forme de l'interface utilisateur

## Installation
1. Cloner le dépôt :
   ```bash
   git clone https://github.com/Taymegh/tayshift.git
2. Configurer un serveur PHP (par exemple, XAMPP ou WAMP).
3. Importer la base de données incluse (dans le dossier `Data`).
4. Installer les dépendances via Composer :
   ```bash
   composer install
5. Configurer PHPMailer en ajoutant les informations SMTP dans les fichiers appropriés.

## Contributions
Les contributions sont les bienvenues pour améliorer l'application et ajouter des fonctionnalités.
