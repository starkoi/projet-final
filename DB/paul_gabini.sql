-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 08 Juin 2017 à 13:22
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `paul_gabini`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`id`, `nom`) VALUES
(1, 'entrées'),
(2, 'plats principaux'),
(3, 'desserts');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fichier_img` varchar(128) NOT NULL,
  `portion` tinyint(4) NOT NULL,
  `temps_preparation` smallint(6) NOT NULL,
  `cuisson` smallint(6) NOT NULL,
  `ingredients` varchar(1000) NOT NULL,
  `preparation` varchar(1030) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `vedette` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `recettes`
--

INSERT INTO `recettes` (`id`, `nom`, `fichier_img`, `portion`, `temps_preparation`, `cuisson`, `ingredients`, `preparation`, `categorie_id`, `vedette`) VALUES
(1, 'Croquettes de fromage', 'croquettes-de-fromage.jpg', 4, 20, 20, '<ul>\n<li>4 tasse d\'eau.</li>\n<li>2 tasse de vinaigre de vin blanc.</li>\n<li>1 feuille de laurier.</li>\n<li>1 anis étoilé.</li>\n<li>2 branches de thym frais.</li>\n<li>1 pomme Honey Crisp.</li>\n<li>2 oignons espagnols.</li>\n<li>Huile de pépins de raisin.</li>\n<li>Sel.</li>\n<li>Piment d\'Espelette.</li>\n<li>1 oeuf.</li>\n<li>1/4 de tasse de lait.</li>\n</ul>\n', '<ol>\n<li>Dans une grande casserole, verser l\'eau et le vinaigre. Ajouter tous les ingrédients secs.</li>\n<li>Amener à ébullition. Retirer du feu et laisser infuser 15 à 20 minutes.</li>\n<li>La veille, à l\'aide d\'une mandoline, trancher finement la pomme Honey Crisp. À l\'aide d\'un emporte-pièce rond d\'environ 3cm, tailler des disques de pomme.</li>\n<li>Faire 20 disques et les déposer dans la marinade froide pour une nuit.</li>\n<li>Peler les oignons et les tailler en deux</li>\n<li>Chauffer la puréee d\'oignon et le reste du miel. Égoutter les disques de pomme marinés.</li>\n<li>Disposer les disques de pomme et terminer avec les pousses de céleri feuille.</li>\n<li>Ajouter une légère pincée de piment d\'Espelette sur le tout.</li>\n</ol>', 1, 1),
(2, 'Salade de quinoa', 'salade-quinoa.jpg', 4, 10, 20, '<ul>\n<li>5 tasses de bouillon de légumes.</li>\n<li> 3 tasse de quinoa blanc rincé et égoutté.</li>\n<li>1 feuille de laurier.</li>\n<li>3 pommes Spartan.</li>\n<li>1/4 tasse de vinaigre de vin blanc ou de cidre.</li>\n<li>1/4 tasse de menthe fraîche, grossièrement hachée.</li>\n<li>1/4 tasse de persil italien grossièrement hachée.</li>\n<li>Sel et poivre.</li>\n</ul>\n<li>', '<ol>\n<li>Dans une casserole, verser le bouillon et porter à ébullition. Ajouter le quinoa et la feuille de laurier, et porter de nouveau à ébullition. Réduire le feu, couvrir et cuire de 15 à 20 minutes ou jusqu\'à ce que le bouillon soit complètement absorbé. Retirer la feuille de laurier et remuer le quinoa à l\'aide d\'une fourchette.</li>\n<li>Couper les pommes en dés, les mettre dans un grand bol et les arroser du jus de citron pour éviter qu\'elles ne brunissent. Ajouter le quinoa réservé, l\'huile et le vinaigre, et mélanger. Saler et poivrer. Étendre le mélange de quinoa réservé dans un plat de service. Parmeser du fromage fêta, des graines de grenade, de la menthe et du persil.</li>\n</ol>', 1, 1),
(3, 'Potage poires et carottes', 'potage-aux-carrots.jpg', 4, 10, 20, '<ul>\n<li>2 poires.</li>\n<li>6 carottes coupées en rondelles.</li>\n<li>3 tasses de bouillon de poulet.</li>\n<li>1 oignons.</li>\n<li>Sel, poivre au gout.</li>\n</ul>', '<ol>\n<li>Rendre les poires en purée avec le jus et réserver.</li>\n<li>Faire revenir les oignons dans un peu d\'huile.</li>\n<li>Incorporer tous les autres ingrédients.</li>\n<li>Saler et poivrer.</li>\n<li>Faire cuire environ 45 minutes.Passer au mélangeur pour rendre le tout homogène.</li>\n</ol>', 1, 1),
(4, 'Escalopes de veau au Havarti', 'escalopes-veau.jpg', 6, 10, 15, '<ul>\n<li>6 steaks de veau de 150 grammes par portion.</li>\n<li>Sauce au Havarti.</li>\n<li>2 échalotes hachées.</li>\n<li>1/2 tasse de vin rouge.</li>\n<li>1 tasse de bouillon de bœuf.</li>\n<li>1/4 tasse de pâte de tomate.</li>\n<li>basilic frais haché.</li>\n<li>Sel et poivre du moulin.</li>\n</ul>', '<ol>\n<li>Préchauffer le four à 350F.</li>\n<li>Dans une poêle, chauffer l\'huile et y faire fondre le beurre à feu vif.</li>\n<li>Saisir les escalopes rapidement de 1 à 2 minutes de chaque côté.</li>\n<li>Transférer dans un plat allant au four, assaisonner de sel et de poivre.</li>\n<li>Entre-temps, faire revenir les échalotes dans la même poêle durant 2 minutes ou jusqu\'à ce qu\'elles soient bien dorées.</li>\n<li>Déglacer avec le vin rouge, mouiller avec le bouillon et ajouter la pâte de tomate.</li>\n<li>Laisser mijoter de 2 à 4 minutes pour réduire d\'un tiers.</li>\n<li>Ajouter le basilic et le formage dans la sauce. Servir immédiatement avec les escalopes de veau, un féculent et des légumes de saison.</li>\n</ol>', 2, 2),
(5, 'Crevettes au beurre et à l\'ail', 'crevettes-ail.jpg', 6, 15, 15, '<ul>\n<li>1 tasse de beurre.</li>\n<li>Le jus d\'un demi-citron.</li>\n<li>2 gousses d\'ail hachées.</li>\n<li>1 kg de crevettes fraîches décortiquées mais avec la queue.</li>\n<li>1 c. à soupe de moutarde de Dijon.</li>\n<li>1 c. à soupe de persil frais haché.</li>\n</ul>', '<ol>\n<li>Préchauffer le four à 450F.</li>\n<li>Dans une petite casserole, faire chauffer à feu moyen le beurre, la moutarde, le jus de citron, l\'ail et le persil. Quand le beurre est complètement fondu, retirer du feu.</li>\n<li>Mettre les crevettes dans un plat. verser le beurre sur les crevettes.</li>\n<li>Cuire au four 12 à 15 minutes jusqu\'à ce que les crevettes soient bien roses et opaques.</li>\n</ol>', 2, 2),
(6, 'Poulet au cari, miel et moutarde', 'poulet-moutarde.jpg', 4, 10, 20, '<ul>\n<li>1/3 tasse de beurre fondu.</li>\n<li>1/3 miel.</li>\n<li>1/4 tasse de moutarde de Dijon.</li>\n<li>4 c. à thé de poudre de cari.</li>\n<li>une pincée de poivre de Cayenne.</li>\n<li>4 poitrines de poulet désossées.</li>\n</ul>\n', '<ol>\n<li>Dans un bol moyen, combiner le beurre fondu, le miel, la moutarde, le cari et le poivre de Cayenne; bien mélanger. Couvrir et laisser mariner au réfrigérateur pendant au moins 4 heures, voire toute une nuit.</li>\n<li>Préchauffer le four à 375F.</li>\n<li>Cuire le poulet au four, couvert, pendant 10 minutes. Découvrir le plat et cuire encore au moins 10 minutes , jusqu\'à ce que le centre des poitrines de poulet ne soit plus rose. Le temps de cuisson total dépendra de l\'épaisseur de poitrines de poulet.</li>\n</ol>\n', 2, 2),
(7, 'Pain aux bananes ', 'pain-aux-bananes.jpg', 15, 10, 60, '<ul>\n<li>1/2 tasse de beurre fondu.</li>\n<li>1 tasse de sucre. </li>\n<li>2 oeufs.</li>\n<li>1 c. à thé de vanille.</li>\n<li>1 1/2 tasse de farine tout usage.</li>\n<li>1 c. à thé de bicarbonate de soude.</li>\n<li>1/2 c. à thé de sel.</li>\n<li>1/2 tasse de crème sure.</li>\n<li>1/2 tasse de noix de Grenoble hachées.</li>\n<li>2 bananes moyennes.</li>\n</ul>', '<ol>\n<li>Préchauffer le four à 350F.</li>\n<li>Dans un grand bol, mélanger le beurre fondu et le sucre. Ajouter les œufs et la vanille; bien mélanger. Dans un autre bol, mélanger la farine, le bicarbonate de soude et le sel. Ajouter ce mélange au mélange de beurre et battre jusqu\'à onctuosité.Finalement, incorporer la crème sure, les noix et les bananes. Verser le tout dans le moule préparé.</li>\n<li>Cuire au four pendant 60 minutes, ou jusqu\'à ce qu\'un cure-dent inséré au centre du pain en ressorte propre. Laisser refroidir dans le moule 10 minutes avant de démouler sur une grille et laisser refroidir complètement.</li>\n</ol>', 3, 3),
(8, 'Brownie au caramelo', 'brownies.jpg', 6, 20, 20, '<ul>\n<li>3 œufs.</li>\n<li> 1/4 de tasse de sucre.</li>\n<li>1/2 de tasse de farine.</li>\n<li>1/4 tasse de chocolat noir.</li>\n<li>1/4 de tasse de beurre.</li>\n<li>1/3 de tasse de caramels mous.</li>\n<li>1/3 de tasse de noix de pécan.</li>\n</ul>', '<ol>\n<li>Dans un saladier, battez les œufs avec un fouet.</li>\n<li>Incorporez le sucre et la farine.</li>\n<li>Faites fondre le chocolat et le beurre. Mélangez et ajoutez à la préparation.<li>\n<li>Coupez les caramels en petites pépites, concassez les noix de pécan.</li>\n<li>Mélangez-les à la pâte et versez dans un moule carré (20 x 20 cm), tapissé de papier cuisson.</li>\n<li>Faites cuire 20 à 30 min dans le four préchauffé à 180C </li>\n<li>Laissez ensuite totalement refroidir le brownie avant de le couper en parts.</li>\n</ol>', 3, 3),
(9, 'Créme brûlée ', 'creme-brulee.jpg', 6, 15, 60, '<ul>\n<li>2 tasse de crème 35%.<li>\n<li>1/3 tasse de sucre.</li>\n<li>6 jaunes d\'oeufs.</li>\n<li>1 c. à thé d\'extrait de vanille.</li>\n<li>3 c. à soupe de crème irlandaise</li>\n<li>Sucre fin.</li>', '<ol>\n<li>Préchauffer le four à 300F. Placer 6 ramequin au fond d\'une tôle à rebords.</li>\n<li>Combiner la crème et le sucre dans une casserole à feu moyen et cuire en brassant jusqu\'à ce que le tout soit bien chaud et que le sucre soit dissout. Dans un bol, fouetter ensemble les jaunes d’œufs, la vanille et la crème irlandaise.</li>\n<li>Au mélange d’œufs, incorporer 1/3 tasse du mélange de crème chaude, en fouettant pour éviter que le mélange ne roule. Une fois le 1/3 de tasse incorporé, ajouter le reste du liquide chaud, toujours en fouettant.>/li>\n<li>Verser le mélange dans le ramequins et remplir la tôle d\'eau, jusqu\'à mi-hauteur des ramequins, afin de créer un bain-marie. Cuire le tout au four de 50 à 60 minutes, jusqu\'à ce que le centre soit pris. Retirer du four et déposer les ramequins sur une grille; laisser reposer 1 heure à température de la pièce.</li>\n<li>Utiliser une torche de cuisine pour faire fondre le sucre sur le dessus, en passant la flamme rapidement au dessous.\n</li>\n</ol>', 3, 3),
(10, 'Tacos', 'tacos.jpg', 4, 15, 5, '<ul>\n<li>75 ml d’huile de canola.</li>\n<li>1 gousse d’ail hachée.</li>\n<li>1 poivron rouge ou vert coupée en lanières.</li>\n<li>4 tortillas ou taco à vous de décider.</li>\n<li>125 ml de fromage Monteray Jack.</li>\n<li>1 tomates coupée en petits cubes.</li>\n<li>Sel, poivre au goût.</li>\n</ul>', '<ol>\n<li>Dans un poêlon chauffé à feu mi-fort avec l’huile, suer l’ail (environ 30 secondes).</li>\n<li>Ajouter les poivrons et les champignons et poursuivre la cuisson une minute</li>\n<li>Ajouter le boeuf et le cumin, poursuivre la cuisson un autre minute.</li>\n<li>Garnir le tortillas avec le mélange de boeuf.</li>\n<li>Garnir avec en ordre: le fromage, les tomates, la crème sure, et les feuilles de coriandre.</li>\n</ol>', 2, 4),
(11, 'Brochettes de poulet', 'poulet-satay.jpg', 4, 45, 10, '<ul>\n<li>2 blancs de poulet.</li>\n<li>150 ml de lait de coco.>/li>\n<li>4 c. à soupe de beurre de cacahuètes.</li>\n<li>2 c. à soupe de cassonade ou miel.</li>\n<li>1 c. à soupe de curry en poudre.</li>\n<li>1 gousse d\'ail</li>\n</ul>', '<ol>\n<li>Découpez le poulet en lamelles assez fines, placez-le dans un bol avec 1 c. à soupe d\'huile et le curry, mélangez, filmez et réservez au frais.</li>\n<li>Dans une casserole, mettez 1 c. à soupe d\'huile, la gousse d\'ail et le gingembre pressés ou hachés (gardez juste la pulpe), faites revenir 1 minute, puis ajoutez la cassonade, la sauce soja, puis le beurre de cacahuètes et le lait de coco, mélangez bien pendant 2 minutes à feu moyen, réservez</li>\n<li>Enfilez les morceaux de poulet sur des petites brochettes en bois, puis faites les dorer dans une poêle légèrement huilée pendant 10 minutes en les retournant régulièrement. Autre possibilité, passez les brochettes 10 minutes à 180°C au four, en retournant au bout de 5 minutes.</li>\n</ol>', 1, 4),
(12, 'Lasagne aux fruits de mers', 'lasagne-aux-fruits-de-mer.jpg', 6, 15, 60, '<ul>\n<li>Mélange de crevettes et de pétoncles.</li>\n<li>1 sac de 340 g, surgelés, décongelés et égouttés chair de homard.</li>\n<li>1 sac, cuite et surgelée de 200 g, décongelée et égouttée sauce alfredo.</li>\n<li>2 contenants de 600 ml chacun, légère lasagnes.</li>\n</ul>', '\n<ol>\n<li>Éponger les crevettes, les pétoncles et la chair de homard à l\'aide de papier absorbant afin de retirer l\'excédent d\'eau.</li>\n<li>Verser 80 ml (1/3 de tasse) de sauce Alfredo dans la mijoteuse.</li>\n<li>Couvrir de trois lasagnes, puis du tiers du mélange de crevettes et pétoncles, du tiers du homard et, si désiré, du tiers des bébés épinards et de l\'aneth. Napper de 310 ml (1 1/4 tasse) de sauce Alfredo. Répéter deux fois afin de former trois étages.</li>\n<li>Couvrir des trois dernières lasagnes, puis napper de la sauce Alfredo restante et du fromage.</li>\n<li>Couvrir et cuire 1 heure à faible intensité, jusqu\'à ce que les lasagnes soient al dente.</li>\n</ol>', 2, 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
