# Incomm Test Project

## Objectif du projet

Ce projet WordPress a pour objectif de créer un site de gestion de recettes en utilisant un thème GeneratePress et en ajoutant un **Custom Post Type (CPT)** personnalisé pour les recettes. Le projet inclut une page d'accueil affichant les dernières recettes publiées et une page de détail pour chaque recette.

## Caractéristiques principales

1. **Thème** : Utilisation du thème **GeneratePress** avec un thème enfant pour personnaliser les styles.
2. **Custom Post Type (CPT)** : Un CPT nommé **Recettes** a été créé avec des champs personnalisés pour :
   - Image de la recette
   - Titre de la recette
   - Liste des ingrédients
   - Temps de cuisson
   - Étapes de préparation
3. **Pages front-end** :
   - **Page d'accueil** : Affiche les dernières recettes publiées avec une image, un titre, et une courte description.
   - **Page de détail** : Affiche les informations complètes de chaque recette, y compris les ingrédients, le temps de cuisson, et les étapes.

## Thème

- **Nom** : GeneratePress
- **Version** : 3.4.0
- **Lien de téléchargement** : [GeneratePress sur WordPress.org](https://fr.wordpress.org/themes/generatepress/)

## Plugins

- **Nom** : Advanced Custom Fields (ACF) par WP Engine
- **Lien de téléchargement** : [Advanced Custom Fields sur WordPress.org](https://wordpress.org/plugins/advanced-custom-fields/)

## Prérequis

- Dernière version de WordPress installée.
- Accès à l’interface d’administration de WordPress.
- Plugin **Advanced Custom Fields** installé et activé.

## Installation du projet

1. **Installer WordPress** : Téléchargez et installez la dernière version de WordPress si ce n’est pas déjà fait.
2. **Installer le plugin ACF** : Téléchargez et activez le plugin **Advanced Custom Fields** depuis l’interface d’administration de WordPress ou depuis [ce lien](https://wordpress.org/plugins/advanced-custom-fields/).
3. **Importer les champs personnalisés ACF** :
   - Importez le fichier `jacf-export-2024-06-24.json` via `WP Admin → ACF → Import`.
4. **Importer la base de données** : Importez la base de données du projet pour disposer des données de test.
5. **Cloner le projet GitHub** : Clonez le dépôt GitHub du projet :
   ```bash
   git clone https://github.com/hardcodeur/Incomm-test.git
   ```
6. **Déplacer les thèmes** :
   - Déplacez les dossiers `/generatepress` et `/generatepress_child` dans le répertoire `wp-content/themes` de votre installation WordPress.

## Utilisation du projet

### Frontend

1. **Page d'accueil** : Les dernières recettes créées s’affichent automatiquement sur la page d'accueil avec leur image, titre, et une courte description.
2. **Page de détail d'une recette** : Cliquez sur une recette pour accéder à sa page de détail, où sont affichés l’image, la liste des ingrédients, le temps de cuisson, et les étapes de préparation.
