-- Table Adhérents
CREATE TABLE Adherents (
    num_licence INT PRIMARY KEY,
    nom VARCHAR(50),
    prenom VARCHAR(50),
    num_ligue INT,
    FOREIGN KEY (num_ligue) REFERENCES Ligues(num)
);

-- Table Demandeurs
CREATE TABLE Demandeurs (
    identifiant INT PRIMARY KEY,
    login VARCHAR(50),
    mot_de_passe VARCHAR(50),
    num_licence INT,
    mail VARCHAR(50),
    rue VARCHAR(50),
    cp VARCHAR(10),
    ville VARCHAR(50),
    num_recu INT,
    FOREIGN KEY (num_licence) REFERENCES Adherents(num_licence)
);

-- Table Lignes-frais
CREATE TABLE Lignes_frais (
    ligue_id BIGINT NOT NULL,
    date DATE,
    motif VARCHAR(50),
    trajet VARCHAR(50),
    km INT,
    cout_peage DECIMAL(10, 2),
    cout_repas DECIMAL(10, 2),
    cout_hebergement DECIMAL(10, 2)
);

-- Table Ligues
CREATE TABLE Ligues (
    num INT PRIMARY KEY,
    nom VARCHAR(50),
    sigle VARCHAR(10),
    president VARCHAR(50)
);

-- Table Motifs
CREATE TABLE Motifs (
    libelle VARCHAR(50) PRIMARY KEY
);
