# 🧾 NoteDeFrais

**Application web de gestion des notes de frais** – Projet BTS SIO SLAM  
*Plateforme complète pour l'enregistrement, le suivi et la validation des dépenses professionnelles*

---

## 📋 Table des matières

- [À propos du projet](#-à-propos-du-projet)
- [Contexte et objectifs](#-contexte-et-objectifs)
- [Fonctionnalités](#-fonctionnalités)
- [Technologies et dépendances](#-technologies-et-dépendances)
- [Architecture](#-architecture)
- [Structure du projet](#-structure-du-projet)
- [Base de données](#-base-de-données)
- [Installation](#-installation)
- [Configuration](#-configuration)
- [Exécution](#-exécution)
- [Utilisation](#-utilisation)
- [Sécurité](#-sécurité)
- [Compétences mobilisées](#-compétences-mobilisées)
- [Améliorations futures](#-améliorations-futures)
- [Auteurs et contributeurs](#-auteurs-et-contributeurs)

---

## 📖 À propos du projet

**NoteDeFrais** est une application web développée en PHP permettant aux utilisateurs de gérer leurs notes de frais professionnelles de manière simple et efficace. L'application offre un système d'authentification sécurisé, un formulaire de saisie intuitif, et la capacité à générer des documents PDF récapitulatifs.

### Cas d'usage principal
Un employé peut :
- Créer un compte utilisateur
- Se connecter de façon sécurisée
- Enregistrer ses dépenses professionnelles
- Consulter l'historique de ses notes
- Générer un PDF pour impression/archivage
- Visualiser un récapitulatif financier

---

## 🎯 Contexte et objectifs

Ce projet a été développé dans le cadre du **BTS SIO (Services Informatiques aux Organisations)**, spécialité **SLAM (Solutions Logicielles et Applications Métier)**.

### Objectifs pédagogiques

✅ Développer une application web dynamique avec PHP  
✅ Implémenter un système d'authentification sécurisé  
✅ Gérer des formulaires et valider les données côté serveur  
✅ Manipuler une base de données MySQL  
✅ Générer des documents PDF dynamiques  
✅ Structurer un projet PHP lisible et maintenable  
✅ Appliquer les bonnes pratiques de sécurité web  
✅ Utiliser Git pour le versioning  

---

## ✨ Fonctionnalités

### 🔐 Authentification et gestion utilisateur

- **Inscription** : Créer un compte utilisateur
  - Formulaire d'enregistrement
  - Validation des données (email, mot de passe, confirmation)
  - Vérification des doublons en base
  - Envoi de confirmation (optionnel)

- **Connexion** : Accès sécurisé à l'application
  - Formulaire de login
  - Validation des identifiants
  - Gestion des sessions PHP
  - Redirection automatique vers login si déconnecté

- **Déconnexion** : Fermeture de session sécurisée
  - Destruction de la session
  - Suppression des cookies
  - Redirection vers page d'accueil

- **Profil utilisateur** : Consulter et modifier ses informations
  - Affichage du profil
  - Modification du mot de passe
  - Récupération de données personnelles

### 🧾 Gestion des notes de frais

- **Saisie de frais** : Formulaire complet de dépenses
  - Date de la dépense
  - Catégorie (transport, repas, hôtel, fournitures, etc.)
  - Description détaillée
  - Montant HT et TTC
  - Justificatif/pièce jointe (optionnel)
  - État (brouillon, soumise, validée, remboursée)

- **Consultation de l'historique** : Visualiser toutes les notes enregistrées
  - Liste complète des frais
  - Filtrage par date, catégorie, montant
  - Tri par colonne
  - Statut de chaque note

- **Modification** : Éditer une note de frais
  - Modifier les données
  - Changer le statut
  - Mettre à jour les documents joints

- **Suppression** : Retirer une note (avec restrictions selon statut)
  - Confirmation avant suppression
  - Restrictions sur notes validées

### 📄 Génération de documents

- **Export PDF** : Créer un document récapitulatif
  - Utilise la librairie **dompdf**
  - Document formaté et professionnel
  - Informations de l'employé
  - Détail de toutes les dépenses
  - Montant total et par catégorie
  - Inclut logo/en-tête entreprise (optionnel)

- **Impression** : Page d'impression HTML
  - Affichage optimisé pour imprimante
  - Format A4 standard
  - Récapitulatif des frais

- **Détails sur feuille de calcul** : Export Excel (optionnel)
  - Données structurées pour analyse
  - Compatible avec tous les tableurs

### ✅ Validation des données

- **Côté client** : Validation HTML5 basique
  - Champs obligatoires
  - Formats de données
  - Limites de montants

- **Côté serveur** : Validation PHP complète
  - Vérification des types de données
  - Contrôle des montants (positifs, limites)
  - Validation des dates (format, cohérence)
  - Vérification des fichiers uploadés
  - Nettoyage des inputs (XSS prevention)

---

## 🖥️ Interface utilisateur

L'application propose une interface web moderne et ergonomique :

### Pages principales

1. **Page d'accueil** : Présentation de l'application
   - Accès pour utilisateurs non connectés
   - Liens vers login/signup
   - Informations sur l'application

2. **Formulaire de connexion** (login.php)
   - Champs email/identifiant et mot de passe
   - Lien "Mot de passe oublié"
   - Lien "Créer un compte"

3. **Formulaire d'inscription** (singin.php)
   - Nom, prénom, email
   - Mot de passe avec confirmation
   - Conditions d'utilisation
   - CAPTCHA (optionnel)

4. **Tableau de bord** (index.php)
   - Accueil avec statistiques personnelles
   - Montant total des frais
   - Nombre de notes en attente
   - Raccourcis vers actions principales

5. **Formulaire de saisie** (formular.php)
   - Champs pour une nouvelle note
   - Validation dynamique
   - Sauvegarde en brouillon

6. **Liste des notes** (menu.php)
   - Tableau avec toutes les notes
   - Actions (voir, éditer, supprimer)
   - Filtres et tri
   - Pagination

7. **Impression** (impressionPage.php)
   - Mise en page pour impression
   - Récapitulatif consolidé

### Caractéristiques de l'UI
- 🎨 Thème cohérent avec CSS
- 📱 Design responsive (mobile-friendly)
- ⌨️ Navigation au clavier
- ✔️ Validation formulaires en temps réel
- 📊 Tableaux interactifs
- 🎯 Barre de menu persistante

---

## 🧰 Technologies et dépendances

| Composant | Technologie | Version |
|-----------|------------|---------|
| **Serveur web** | Apache | 2.4+ |
| **Langage backend** | PHP | 7.4+ / 8.0+ |
| **Base de données** | MySQL | 5.7+ / 8.0+ |
| **Frontend** | HTML5, CSS3 | - |
| **JavaScript** | Vanilla JS (optionnel) | ES6 |
| **Librairie PDF** | dompdf | 1.2+ |
| **Versionning** | Git | - |
| **IDE recommandé** | VS Code, PhpStorm | - |

### Dépendances PHP (via Composer)

```json
{
  "require": {
    "php": ">=7.4",
    "dompdf/dompdf": "^1.2",
    "phpmailer/phpmailer": "^6.5"
  }
}
```

### Extensions PHP requises

```
- mysqli (accès MySQL)
- session (gestion sessions)
- gd (traitement images, optionnel)
- pdo (accès DB alternatif)
```

---

## 🏗️ Architecture

L'application suit une architecture simple et didactique **procédurale** adaptée au contexte pédagogique :

```
┌──────────────────────────────────┐
│      INTERFACE (Frontend)        │
│  - Formulaires HTML/CSS/JS       │
│  - Pages PHP avec Vue            │
└──────────────┬───────────────────┘
               │
┌──────────────▼───────────────────┐
│   TRAITEMENT (Backend PHP)       │
│  - Logique métier                │
│  - Validation                    │
│  - Appels base données           │
└──────────────┬───────────────────┘
               │
┌──────────────▼───────────────────┐
│    PERSISTENCE (Base de données) │
│  - Tables MySQL                  │
│  - Requêtes SQL                  │
└──────────────────────────────────┘
```

### Principes appliqués

- **Séparation des responsabilités** : pages de traitement vs pages de présentation
- **DRY (Don't Repeat Yourself)** : réutilisation du menu dans menu.php
- **Sécurité** : validation, chiffrement, paramètres bindés
- **Sessions PHP** : gestion utilisateur avec cookies sécurisés
- **Requêtes paramétrées** : prévention SQL injection
- **Hachage des mots de passe** : password_hash() et password_verify()

---

## 🗂️ Structure du projet

```
NoteDeFrais/
│
├── index.php                       # Page d'accueil / Tableau de bord
├── login.php                       # Formulaire de connexion
├── singin.php                      # Formulaire d'inscription
├── logout.php                      # Déconnexion
│
├── formular.php                    # Formulaire de saisie frais
├── validformuler.php               # Traitement du formulaire
│
├── menu.php                        # Liste des notes de frais
├── impressionPage.php              # Page d'impression/récapitulatif
│
├── genpdf.php                      # Génération PDF avec dompdf
├── encrypt.php                     # Utilitaires de chiffrement
│
├── validlogin.php                  # Traitement login (validation)
│
├── db/                             # Dossier base de données
│   ├── config.php                  # Connexion MySQL
│   ├── schema.sql                  # Script création tables
│   └── data-sample.sql             # Données de test
│
├── class/                          # Classes PHP (optionnel)
│   ├── User.php                    # Classe Utilisateur
│   ├── Note.php                    # Classe Note de frais
│   └── Database.php                # Classe Connexion BD
│
├── asset/                          # Ressources statiques
│   ├── css/
│   │   ├── style.css              # Styles principaux
│   │   └── responsive.css         # Styles responsive
│   ├── js/
│   │   ├── validation.js          # Validation formulaires
│   │   └── script.js              # Scripts utilitaires
│   └── images/
│       ├── logo.png               # Logo application
│       └── favicon.ico
│
├── pdf/                            # Dossier dompdf
│   ├── dompdf/                     # Librairie dompdf
│   └── template.html               # Template PDF
│
├── images/                         # Captures d'écran du projet
│   ├── home.png
│   ├── login.png
│   ├── formulaire.png
│   └── notes-list.png
│
├── docs/                           # Documentation
│   ├── GUIDE_UTILISATEUR.md        # Guide utilisateur
│   ├── ARCHITECTURE.md             # Docs architecture
│   └── INSTALLATION.md             # Guide installation
│
├── test/                           # Tests unitaires (optionnel)
│   ├── test-form.php
│   └── test-db.php
│
├── .gitignore                      # Fichiers ignorés Git
├── README.md                       # Cette documentation
│
└── composer.json                   # Dépendances PHP (Composer)
```

### Fichiers clés expliqués

| Fichier | Rôle |
|---------|------|
| `index.php` | Page d'accueil et tableau de bord |
| `login.php` | Affichage formulaire connexion |
| `validlogin.php` | Traitement login + création session |
| `formular.php` | Affichage formulaire note frais |
| `validformuler.php` | Traitement frais + insertion BD |
| `menu.php` | Liste des notes avec filtres |
| `genpdf.php` | Génération PDF avec dompdf |
| `db/config.php` | Connexion à la base de données |
| `encrypt.php` | Chiffrement/déchiffrement données |
| `asset/css/style.css` | Styles de l'application |

---

## 🗄️ Base de données

### Architecture de la base

```sql
CREATE DATABASE notedefrais
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE notedefrais;
```

### Tables principales

#### **utilisateur**
```sql
CREATE TABLE utilisateur (
    id_utilisateur INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    prenom VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    telephone VARCHAR(20),
    adresse VARCHAR(255),
    code_postal VARCHAR(5),
    ville VARCHAR(50),
    departement VARCHAR(100),
    role ENUM('EMPLOYE', 'RESPONSABLE', 'ADMIN') DEFAULT 'EMPLOYE',
    actif BOOLEAN DEFAULT TRUE,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    derniere_connexion DATETIME,
    INDEX(email)
);
```

#### **note_frais**
```sql
CREATE TABLE note_frais (
    id_note INT PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT NOT NULL,
    date_note DATETIME DEFAULT CURRENT_TIMESTAMP,
    date_depense DATE NOT NULL,
    categorie ENUM('TRANSPORT', 'REPAS', 'HOTEL', 'FOURNITURES', 'AUTRES') NOT NULL,
    description VARCHAR(255) NOT NULL,
    montant_ht DECIMAL(10, 2) NOT NULL,
    tva DECIMAL(5, 2) DEFAULT 20,
    montant_ttc DECIMAL(10, 2) NOT NULL,
    justificatif VARCHAR(255),
    statut ENUM('BROUILLON', 'SOUMISE', 'APPROUVEE', 'REJETEE', 'REMBOURSEE') DEFAULT 'BROUILLON',
    date_validation DATETIME,
    validateur INT,
    observations TEXT,
    date_modification TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id_utilisateur),
    FOREIGN KEY (validateur) REFERENCES utilisateur(id_utilisateur),
    INDEX(id_utilisateur),
    INDEX(date_depense),
    INDEX(statut)
);
```

#### **categorie_frais**
```sql
CREATE TABLE categorie_frais (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL UNIQUE,
    description TEXT,
    limite_montant DECIMAL(10, 2),
    actif BOOLEAN DEFAULT TRUE
);
```

#### **justificatif**
```sql
CREATE TABLE justificatif (
    id_justificatif INT PRIMARY KEY AUTO_INCREMENT,
    id_note INT NOT NULL,
    nom_fichier VARCHAR(255) NOT NULL,
    chemin_fichier VARCHAR(255) NOT NULL,
    type_fichier VARCHAR(50),
    date_upload TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_note) REFERENCES note_frais(id_note)
);
```

### Schéma de relations

```
Utilisateur (1) --→ (N) Note_Frais
Utilisateur (1) --→ (N) Message
Note_Frais (1) --→ (N) Justificatif
Categorie_Frais (1) --→ (N) Note_Frais
```

---

## 💾 Installation

### Prérequis système

- **Serveur web Apache** (2.4+) ou IIS
- **PHP** (7.4+, 8.0+ recommandé)
- **MySQL** (5.7+ ou 8.0+)
- **Git** - [Télécharger](https://git-scm.com/)
- **Composer** (optionnel) - [Télécharger](https://getcomposer.org/)
- **Éditeur de code** - VS Code, PhpStorm, Sublime Text

### Vérification des prérequis

```bash
# Vérifier PHP
php --version

# Vérifier MySQL
mysql --version

# Vérifier Git
git --version
```

### Vérifier les extensions PHP

```bash
# Afficher extensions activées
php -m

# Doit contenir : mysqli, session, pdo
```

### Étapes d'installation

#### 1. Cloner le dépôt

```bash
git clone https://github.com/PlumCreativ/NoteDeFrais.git
cd NoteDeFrais
```

#### 2. Créer la base de données

```bash
# Se connecter à MySQL
mysql -u root -p

# Créer la base (dans console MySQL)
CREATE DATABASE notedefrais 
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE notedefrais;
```

#### 3. Charger le schéma

```bash
# Importer le fichier SQL
mysql -u root -p notedefrais < db/schema.sql

# Optionnel : charger données de test
mysql -u root -p notedefrais < db/data-sample.sql
```

#### 4. Installer les dépendances (avec Composer)

```bash
composer install
```

Ou sans Composer, télécharger manuellement dompdf et l'extraire dans le dossier `pdf/`.

#### 5. Configurer la connexion à la base

Éditer le fichier `db/config.php` :

```php
<?php
// Configuration MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'votre_mot_de_passe');
define('DB_NAME', 'notedefrais');
define('DB_PORT', 3306);
define('DB_CHARSET', 'utf8mb4');

// Connection string
define('DB_URL', 'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET);

// Optionnel : configuration courrier
define('MAIL_FROM', 'noreply@notedefrais.com');
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
?>
```

#### 6. Configurer les permissions de dossiers

```bash
# Linux/Mac
chmod 755 asset/
chmod 755 pdf/
chmod 755 images/

# Vérifier que le serveur peut écrire
chmod 775 pdf/
```

#### 7. Pointer le serveur web

**Avec Apache :**
```apache
<VirtualHost *:80>
    ServerName notedefrais.local
    DocumentRoot /var/www/NoteDeFrais
    
    <Directory /var/www/NoteDeFrais>
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

**Avec PHP built-in (développement) :**
```bash
cd NoteDeFrais
php -S localhost:8000
# Accéder à http://localhost:8000
```

---

## ⚙️ Configuration

### Configuration Apache (facultatif)

Créer un fichier `.htaccess` pour réécriture d'URL :

```apache
RewriteEngine On
RewriteBase /
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]
```

### Variables d'environnement (optionnel)

Créer un fichier `.env` :

```
APP_NAME=NoteDeFrais
APP_ENV=development
APP_DEBUG=true

DB_HOST=localhost
DB_USER=root
DB_PASSWORD=motdepasse
DB_NAME=notedefrais

MAIL_DRIVER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-password
```

Puis charger dans `config.php` :

```php
<?php
// Charger les variables .env
$env = parse_ini_file('.env');
define('DB_HOST', $env['DB_HOST']);
// ...
?>
```

### Configuration PHP (php.ini)

Vérifier/modifier certains paramètres :

```ini
upload_max_filesize = 5M
post_max_size = 10M
max_execution_time = 30
memory_limit = 128M
session.gc_maxlifetime = 3600
```

---

## 🚀 Exécution

### Lancer l'application

#### Option 1 : Serveur PHP natif (développement)
```bash
cd NoteDeFrais
php -S localhost:8000
# Ouvrir http://localhost:8000
```

#### Option 2 : Avec Apache
```bash
# Redémarrer Apache
sudo systemctl restart apache2

# Accéder à http://notedefrais.local (si VirtualHost configuré)
```

#### Option 3 : Avec Docker (optionnel)
```bash
docker-compose up -d
# Accéder à http://localhost:8080
```

### Identifiants de test

À la première connexion, utiliser les identifiants de test :

| Email | Mot de passe | Rôle |
|-------|------------|------|
| employe@test.com | test123 | EMPLOYE |
| responsable@test.com | test123 | RESPONSABLE |
| admin@test.com | admin123 | ADMIN |

**⚠️ Important** : Changez ces identifiants ou supprimez les comptes de test avant production !

---

## 📖 Utilisation

### Workflow utilisateur

```
1. Accueil
   └─→ Page index.php

2. Créer compte
   └─→ singin.php → Remplir formulaire → validlogin.php

3. Connexion
   └─→ login.php → Saisir identifiants → Créer session

4. Tableau de bord
   └─→ index.php → Voir statistiques personnelles

5. Ajouter une note
   └─→ formular.php → Saisir données → validformuler.php

6. Consulter notes
   └─→ menu.php → Voir liste complète → Filtrer/Trier

7. Générer PDF
   └─→ Cliquer sur "Exporter PDF" → genpdf.php

8. Imprimer
   └─→ impressionPage.php → Imprimer formulaire

9. Déconnexion
   └─→ logout.php → Destruction session
```

### Exemples de tâches courantes

#### S'inscrire
1. Cliquer sur "Créer un compte"
2. Remplir le formulaire d'inscription
3. Confirmer le mot de passe
4. Accepter les conditions d'utilisation
5. Cliquer sur "S'inscrire"
6. Vérifier email de confirmation (optionnel)

#### Ajouter une note de frais
1. Après connexion, cliquer sur "Ajouter une note"
2. Remplir la date de la dépense
3. Sélectionner une catégorie
4. Entrer une description
5. Indiquer le montant HT
6. Joindre un justificatif (photo/facture)
7. Cliquer sur "Enregistrer"

#### Consulter les notes
1. Cliquer sur "Mes notes de frais"
2. Voir la liste complète
3. Utiliser les filtres (date, catégorie, statut)
4. Trier par montant ou date
5. Cliquer sur une note pour voir les détails

#### Générer un PDF
1. Depuis la liste des notes
2. Cliquer sur "Exporter en PDF"
3. Le fichier est généré et téléchargé
4. Ouvrir avec lecteur PDF
5. Imprimer si besoin

#### Soumettre pour approbation
1. Note en statut "Brouillon"
2. Cliquer sur "Soumettre"
3. Note passe en "Soumise"
4. Attendre validation du responsable

---

## 🔒 Sécurité

### Bonnes pratiques implémentées

✅ **Authentification sécurisée**
- Hachage des mots de passe avec `password_hash()`
- Vérification avec `password_verify()`
- Salts générés automatiquement

✅ **Prévention des attaques**
- Protection contre XSS via `htmlspecialchars()`
- Protection contre SQL injection avec requêtes paramétrées
- Validation des inputs côté serveur
- Vérification des tokens (CSRF)

✅ **Gestion des sessions**
- Timeout de session (30 minutes)
- Identifiants de session régénérés
- Suppression de cookies à la déconnexion

✅ **Protection des données**
- Chiffrement des données sensibles
- HTTPS recommandé en production
- Cookies sécurisés (HttpOnly, Secure)

✅ **Contrôle d'accès**
- Vérification de l'authentification sur chaque page
- Redirection vers login si non connecté
- Vérification des droits (RBAC)

### Recommandations de sécurité supplémentaires

Pour la production :

1. **HTTPS obligatoire**
   ```apache
   RewriteEngine On
   RewriteCond %{HTTPS} off
   RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
   ```

2. **Rate limiting** contre brute-force
   ```php
   // Limiter les tentatives de login
   $_SESSION['login_attempts'] = ($_SESSION['login_attempts'] ?? 0) + 1;
   if ($_SESSION['login_attempts'] > 5) {
       // Bloquer pendant 15 minutes
   }
   ```

3. **WAF (Web Application Firewall)**
   - ModSecurity
   - Cloudflare WAF

4. **Sauvegarde régulière**
   ```bash
   # Backup quotidien
   mysqldump -u root -p notedefrais > backup_$(date +%Y%m%d).sql
   ```

5. **Logs et monitoring**
   - Activer les logs PHP
   - Surveiller les erreurs
   - Utiliser des outils APM

---

## 🎓 Compétences mobilisées

Ce projet mobilise les compétences suivantes du BTS SIO SLAM :

### Développement web
- **PHP dynamique** et gestion de sessions
- **HTML5** sémantique
- **CSS3** responsive
- **JavaScript vanilla** pour validation/interaction
- **Forms handling** et data submission

### Bases de données
- **Conception relationnelle** (MCD/MLD)
- **SQL** : SELECT, INSERT, UPDATE, DELETE
- **Requêtes paramétrées** contre injection SQL
- **Intégrité référentielle** et clés étrangères
- **Transactions** et cohérence données

### Architecture et patterns
- **Séparation logique** des fichiers
- **MVC simplifié** (modèle - Vue - Contrôleur)
- **Pattern DAO** pour accès données
- **Réutilisation de code** (menu.php include)

### Sécurité
- **Authentification** et gestion sessions
- **Validation formulaires** client et serveur
- **Hachage** de mots de passe
- **Protection contre attaques** (XSS, CSRF, SQL injection)
- **Chiffrement** de données sensibles

### Environnement professionnel
- **Versioning** avec Git
- **Documentation** technique
- **Gestion de projet**
- **Testing** fonctionnel
- **Communication** avec les utilisateurs

### Outils et bonnes pratiques
- **Composer** pour dépendances
- **Code conventions** PHP PSR-12
- **Commentaires** et documentation
- **Gestion d'erreurs** et exceptions
- **Tests d'intégrité** des données

---

## 🚀 Améliorations futures

### Fonctionnalités à ajouter

- [ ] **Tableau de bord statistique** (graphiques)
- [ ] **Export Excel** avec mise en forme
- [ ] **Multi-devises** et conversion auto
- [ ] **Approbation workflow** multi-niveaux
- [ ] **Notes récurrentes** (mensuelles, etc.)
- [ ] **Catégories personnalisées** par utilisateur
- [ ] **Codes analytiques** de frais
- [ ] **API REST** pour intégration externe
- [ ] **Application mobile** responsive
- [ ] **Notifications par email**
- [ ] **Géolocalisation** des frais
- [ ] **OCR** pour reconnaissance factures

### Améliorations techniques

- [ ] **Refactoriser en OOP** (classes et interfaces)
- [ ] **Framework PHP** (Slim, Laravel)
- [ ] **Tests automatisés** (PHPUnit)
- [ ] **Docker** pour conteneurisation
- [ ] **Redis** pour sessions distribuées
- [ ] **Elasticsearch** pour recherche avancée
- [ ] **API GraphQL** alternative
- [ ] **PWA** (Progressive Web App)
- [ ] **Système de cache** (varnish)
- [ ] **CDN** pour assets statiques

### Performance et scalabilité

- [ ] Optimisation requêtes SQL
- [ ] Pagination des listes
- [ ] Lazy loading des documents
- [ ] Compression des fichiers
- [ ] Minification CSS/JS
- [ ] Load balancing
- [ ] Replication MySQL
- [ ] Monitoring et alertes

### Sécurité renforcée

- [ ] **2FA** (Two-Factor Authentication)
- [ ] **OAuth2/OpenID** intégration
- [ ] **LDAP** synchronisation
- [ ] **Audit logs** complets
- [ ] **Encryption** end-to-end
- [ ] **PCI DSS compliance** si paiements
- [ ] **RGPD compliance** (droit à l'oubli)

---

## 👥 Auteurs et contributeurs

**Développeur principal** : PlumCreativ  
**Contexte** : Projet BTS SIO SLAM  
**Année** : 2024-2025  

### Contribuer

Les contributions sont les bienvenues ! Pour contribuer :

1. **Fork** le projet
2. Créer une branche (`git checkout -b feature/AmazingFeature`)
3. **Commit** vos modifications (`git commit -m 'Add some AmazingFeature'`)
4. **Push** vers la branche (`git push origin feature/AmazingFeature`)
5. Ouvrir une **Pull Request**

### Signaler un bug

Si vous trouvez un bug, créez une [issue](https://github.com/PlumCreativ/NoteDeFrais/issues) en décrivant :
- Le comportement attendu
- Le comportement observé
- Les étapes pour reproduire
- Les navigateur et système d'exploitation

### Code de conduite

Soyez respectueux et bienveillant envers les autres contributeurs.

---

## 📄 Licence

Ce projet est fourni à titre éducatif dans le contexte du BTS SIO SLAM.  
Vous pouvez l'utiliser, le modifier et le distribuer librement à titre éducatif.

---

## 📞 Support et contact

Pour toute question ou problème :

- 📧 **Email** : contact@plumcreativ.com
- 🐛 **Issues GitHub** : [NoteDeFrais/issues](https://github.com/PlumCreativ/NoteDeFrais/issues)
- 💬 **Discussions** : [NoteDeFrais/discussions](https://github.com/PlumCreativ/NoteDeFrais/discussions)
- 🌐 **Website** : [plumcreativ.com](https://plumcreativ.com)

---

## 📚 Ressources externes

- [Documentation PHP officielle](https://www.php.net/docs.php)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [dompdf Documentation](https://github.com/dompdf/dompdf)
- [OWASP Security Guidelines](https://owasp.org/www-project-web-security-testing-guide/)
- [MDN Web Docs](https://developer.mozilla.org/)
- [Composer Documentation](https://getcomposer.org/doc/)

---

**Dernière mise à jour** : Décembre 2024  
**Version du README** : 2.0  
**Statut du projet** : En maintenance et amélioration continue  

---

*Fait avec ❤️ pour les professionnels de la gestion administrative 📊*
