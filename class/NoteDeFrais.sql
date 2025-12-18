

CREATE TABLE `adherent` (
  `num_licence` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Adresse1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cp` int NOT NULL,
  `ville` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DateNaissance` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_adherent` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `adherent`
--


CREATE TABLE `demandeur` (
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mail` varchar(255) NOT NULL,
  `num_recu` varchar(255) NOT NULL,
  `num_licence` varchar(255) NOT NULL,
  `route` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `id` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `lignes_frais` (
  `dat` varchar(255) DEFAULT NULL,
  `trajet` varchar(100) DEFAULT NULL,
  `km` int DEFAULT NULL,
  `cout_peage` mediumint DEFAULT NULL,
  `cout_repas` mediumint DEFAULT NULL,
  `cout_hebergement` mediumint DEFAULT NULL,
  `id_frais` bigint NOT NULL,
  `costtrajet` mediumint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



CREATE TABLE `ligues` (
  `nom` varchar(50) DEFAULT NULL,
  `sigle` varchar(10) DEFAULT NULL,
  `president` varchar(50) DEFAULT NULL,
  `num` varchar(255) NOT NULL,
  `id_ligue` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `motifs` (
  `libelle` varchar(50) DEFAULT NULL,
  `id_motif` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


ALTER TABLE `adherent`
  ADD PRIMARY KEY (`id_adherent`);

--
-- Index pour la table `demandeur`
--
ALTER TABLE `demandeur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  ADD PRIMARY KEY (`id_frais`);

--
-- Index pour la table `ligues`
--
ALTER TABLE `ligues`
  ADD PRIMARY KEY (`id_ligue`);

--
-- Index pour la table `motifs`
--
ALTER TABLE `motifs`
  ADD PRIMARY KEY (`id_motif`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adherent`
--
ALTER TABLE `adherent`
  MODIFY `id_adherent` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `demandeur`
--
ALTER TABLE `demandeur`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `lignes_frais`
--
ALTER TABLE `lignes_frais`
  MODIFY `id_frais` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ligues`
--
ALTER TABLE `ligues`
  MODIFY `id_ligue` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `motifs`
--
ALTER TABLE `motifs`
  MODIFY `id_motif` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;
COMMIT;
