# 🧾 NoteDeFrais  
**Projet BTS SIO – Option SLAM**

---

## 📌 Sommaire

- [Contexte et objectifs](#-contexte-et-objectifs)
- [Présentation générale](#-présentation-générale)
- [Fonctionnalités réalisées](#-fonctionnalités-réalisées)
- [Technologies et outils](#-technologies-et-outils)
- [Organisation du projet](#-organisation-du-projet)
- [Arborescence](#-arborescence)
- [Installation et mise en œuvre](#-installation-et-mise-en-œuvre)
- [Sécurité et bonnes pratiques](#-sécurité-et-bonnes-pratiques)
- [Tests](#-tests)
- [Compétences BTS SIO mobilisées](#-compétences-bts-sio-mobilisées)
- [Améliorations possibles](#-améliorations-possibles)

---

## 🎯 Contexte et objectifs

Ce projet a été réalisé dans le cadre du **BTS SIO – option SLAM**.  
Il a pour objectif de mettre en pratique les compétences suivantes :

- développement d’une application web dynamique
- gestion des formulaires et des données
- sécurisation des accès
- structuration d’un projet PHP
- génération de documents PDF

L’application répond à un besoin courant en entreprise : **la gestion des notes de frais**.

---

## 📖 Présentation générale

**NoteDeFrais** est une application web développée en PHP permettant à un utilisateur de :

- créer un compte
- se connecter de manière sécurisée
- saisir des notes de frais
- consulter ses informations
- générer un **document PDF récapitulatif**

Le projet repose sur une architecture simple, lisible et maintenable, adaptée à un contexte pédagogique.

---

## ✨ Fonctionnalités réalisées

- 🔐 Authentification utilisateur
  - inscription
  - connexion
  - déconnexion
- 🧾 Gestion des notes de frais via formulaires
- 📄 Génération de PDF avec la librairie **dompdf**
- ✅ Validation des données côté serveur
- 🗂️ Organisation du code par dossiers
- 🔑 Chiffrement des informations sensibles

---

## 🧰 Technologies et outils

| Élément | Technologie |
|-------|------------|
| Langage | PHP |
| Frontend | HTML / CSS |
| Base de données | MySQL |
| Serveur | Apache |
| Librairie externe | dompdf |
| IDE | VS Code |
| Versioning | Git / GitHub |

---

## 🏗️ Organisation du projet

Le projet est structuré de manière logique afin de séparer :

- les ressources statiques
- la logique métier
- la gestion des données
- les pages de traitement

Cette organisation facilite la maintenance et l’évolution de l’application.

---

## 🗂️ Arborescence

NoteDeFrais/
│
├── asset/ # Fichiers CSS et JS
├── class/ # Classes PHP (logique métier)
├── db/ # Scripts et configuration base de données
├── docs/ # Documentation du projet
├── images/ # Ressources graphiques
├── pdf/
│ └── dompdf/ # Librairie dompdf
├── test/ # Tests
│
├── index.php # Page d’accueil
├── login.php # Connexion utilisateur
├── singin.php # Inscription utilisateur
├── logout.php # Déconnexion
├── menu.php # Menu principal
├── validlogin.php # Traitement de la connexion
├── validformuler.php # Validation des formulaires
├── encrypt.php # Fonctions de chiffrement
└── README.md # Documentation


---

## ⚙️ Installation et mise en œuvre

### Prérequis

- PHP 7.4 ou supérieur
- Serveur Apache
- MySQL
- Extensions PHP :
  - mbstring
  - gd ou imagick

### Installation

1. Cloner le dépôt :
```bash
git clone https://github.com/PlumCreativ/NoteDeFrais.git
