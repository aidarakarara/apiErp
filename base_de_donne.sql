
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `accessoires`
--

DROP TABLE IF EXISTS `accessoires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `accessoires` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateA` date NOT NULL,
  `employe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `num_pompe` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessoires`
--

LOCK TABLES `accessoires` WRITE;
/*!40000 ALTER TABLE `accessoires` DISABLE KEYS */;
/*!40000 ALTER TABLE `accessoires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bon_clients`
--

DROP TABLE IF EXISTS `bon_clients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bon_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom_client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(12,3) DEFAULT NULL,
  `caisse_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bon_clients`
--

LOCK TABLES `bon_clients` WRITE;
/*!40000 ALTER TABLE `bon_clients` DISABLE KEYS */;
/*!40000 ALTER TABLE `bon_clients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `caisses`
--

DROP TABLE IF EXISTS `caisses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `caisses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_caisse` date NOT NULL,
  `horaire` int NOT NULL,
  `netVer` double(12,3) DEFAULT '0.000',
  `coffre` double(12,3) DEFAULT '0.000',
  `pompe_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approuve` tinyint(1) DEFAULT '0',
  `ecart` double(12,3) DEFAULT '0.000',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `caisses`
--

LOCK TABLES `caisses` WRITE;
/*!40000 ALTER TABLE `caisses` DISABLE KEYS */;
/*!40000 ALTER TABLE `caisses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commande_cars`
--

DROP TABLE IF EXISTS `commande_cars`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `commande_cars` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero_cde` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero_bl` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heure` int DEFAULT NULL,
  `synthese_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commande_cars`
--

LOCK TABLES `commande_cars` WRITE;
/*!40000 ALTER TABLE `commande_cars` DISABLE KEYS */;
/*!40000 ALTER TABLE `commande_cars` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `compteurs`
--

DROP TABLE IF EXISTS `compteurs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `compteurs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `indexOuvE` double(12,3) DEFAULT '0.000',
  `indexOuvM` double(12,3) DEFAULT '0.000',
  `indexFerE` double(12,3) DEFAULT '0.000',
  `indexFerM` double(12,3) DEFAULT '0.000',
  `prix` double(8,3) NOT NULL,
  `pistolet_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caisse_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compteurs`
--

LOCK TABLES `compteurs` WRITE;
/*!40000 ALTER TABLE `compteurs` DISABLE KEYS */;
/*!40000 ALTER TABLE `compteurs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `depenses`
--

DROP TABLE IF EXISTS `depenses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `depenses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `justificatif` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(12,3) DEFAULT NULL,
  `caisse_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `depenses`
--

LOCK TABLES `depenses` WRITE;
/*!40000 ALTER TABLE `depenses` DISABLE KEYS */;
/*!40000 ALTER TABLE `depenses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `encaissements`
--

DROP TABLE IF EXISTS `encaissements`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `encaissements` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `montant` double(12,3) DEFAULT '0.000',
  `synthese_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `encaissements`
--

LOCK TABLES `encaissements` WRITE;
/*!40000 ALTER TABLE `encaissements` DISABLE KEYS */;
/*!40000 ALTER TABLE `encaissements` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fiche_chef_pistes`
--

DROP TABLE IF EXISTS `fiche_chef_pistes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fiche_chef_pistes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_ficheChefPiste` date NOT NULL,
  `cash` double(12,3) DEFAULT '0.000',
  `cheque` double(12,3) DEFAULT '0.000',
  `caisse_id` bigint unsigned DEFAULT NULL,
  `pompe_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `approuve` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fiche_chef_pistes`
--

LOCK TABLES `fiche_chef_pistes` WRITE;
/*!40000 ALTER TABLE `fiche_chef_pistes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fiche_chef_pistes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ilots`
--

DROP TABLE IF EXISTS `ilots`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ilots` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ilots`
--

LOCK TABLES `ilots` WRITE;
/*!40000 ALTER TABLE `ilots` DISABLE KEYS */;
/*!40000 ALTER TABLE `ilots` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `journees`
--

DROP TABLE IF EXISTS `journees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `journees` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateJ` date NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `journees`
--

LOCK TABLES `journees` WRITE;
/*!40000 ALTER TABLE `journees` DISABLE KEYS */;
/*!40000 ALTER TABLE `journees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lubrifiants`
--

DROP TABLE IF EXISTS `lubrifiants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lubrifiants` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `dateEnreg` date NOT NULL,
  `employe` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lubrifiants`
--

LOCK TABLES `lubrifiants` WRITE;
/*!40000 ALTER TABLE `lubrifiants` DISABLE KEYS */;
/*!40000 ALTER TABLE `lubrifiants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2021_06_29_115844_create_ilots_table',1),(6,'2021_06_29_115944_create_pompes_table',1),(7,'2021_06_29_120036_create_pistolets_table',1),(8,'2021_06_29_120236_create_reservoirs_table',1),(9,'2021_06_29_120252_create_roles_table',1),(10,'2021_07_01_131318_add_index_e_to_pistolets_table',1),(11,'2021_07_09_132805_add_carburant_to_reservoirs_table',1),(12,'2021_07_19_141503_add_softdelele_to_users_table',1),(13,'2021_07_27_144714_create_caisses_table',1),(14,'2021_07_28_104308_create_bon_clients_table',1),(15,'2021_07_28_104608_create_depenses_table',1),(16,'2021_07_28_104727_create_vente_tpes_table',1),(17,'2021_07_28_150839_add_nom_to_pistolets_table',1),(18,'2021_07_28_160119_create_compteurs_table',1),(19,'2021_07_30_131830_add_caisse_id_to_compteur_table',1),(20,'2021_08_03_111529_create_journees_table',1),(21,'2021_08_05_143402_add_etat_to_caisses_table',1),(22,'2021_08_09_094636_create_lubrifiants_table',1),(23,'2021_08_09_110925_create_accessoires_table',1),(24,'2021_08_17_092752_add_ecart_to_caisses_table',1),(25,'2021_08_17_144048_create_fiche_chef_pistes_table',1),(26,'2021_08_18_105632_create_produitslub_table',1),(27,'2021_08_20_103354_add_etat_to_fiche_chef_pistes_table',1),(28,'2021_08_24_101048_create_syntheses_table',1),(29,'2021_08_24_101124_create_encaissements_table',1),(30,'2021_08_24_101154_create_commande_cars_table',1),(31,'2021_08_24_101223_create_remise_cuves_table',1),(32,'2021_08_24_101246_create_stocks_table',1),(33,'2021_08_24_101604_create_receptions_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pistolets`
--

DROP TABLE IF EXISTS `pistolets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pistolets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carburant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` double(8,3) NOT NULL,
  `pompe_id` bigint unsigned DEFAULT NULL,
  `reservoir_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `indexE` double(12,3) DEFAULT '0.000',
  `indexM` double(12,3) DEFAULT '0.000',
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pistolets`
--

LOCK TABLES `pistolets` WRITE;
/*!40000 ALTER TABLE `pistolets` DISABLE KEYS */;
/*!40000 ALTER TABLE `pistolets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pompes`
--

DROP TABLE IF EXISTS `pompes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pompes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ilot_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pompes`
--

LOCK TABLES `pompes` WRITE;
/*!40000 ALTER TABLE `pompes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pompes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produitslub`
--

DROP TABLE IF EXISTS `produitslub`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produitslub` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nomproduit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrees` int NOT NULL,
  `sorties` int NOT NULL,
  `pu` int NOT NULL,
  `stock` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produitslub`
--

LOCK TABLES `produitslub` WRITE;
/*!40000 ALTER TABLE `produitslub` DISABLE KEYS */;
/*!40000 ALTER TABLE `produitslub` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `receptions`
--

DROP TABLE IF EXISTS `receptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `receptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `capacite` double NOT NULL,
  `reservoir_id` bigint unsigned DEFAULT NULL,
  `synthese_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `receptions`
--

LOCK TABLES `receptions` WRITE;
/*!40000 ALTER TABLE `receptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `receptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `remise_cuves`
--

DROP TABLE IF EXISTS `remise_cuves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `remise_cuves` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `capacite` double NOT NULL,
  `reservoir_id` bigint unsigned DEFAULT NULL,
  `synthese_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `remise_cuves`
--

LOCK TABLES `remise_cuves` WRITE;
/*!40000 ALTER TABLE `remise_cuves` DISABLE KEYS */;
/*!40000 ALTER TABLE `remise_cuves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservoirs`
--

DROP TABLE IF EXISTS `reservoirs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservoirs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacite` double NOT NULL,
  `quantite` double DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `carburant` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservoirs`
--

LOCK TABLES `reservoirs` WRITE;
/*!40000 ALTER TABLE `reservoirs` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservoirs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'pompiste','2021-10-07 10:41:42','2021-10-07 10:41:42'),(2,'gerant','2021-10-07 10:41:42','2021-10-07 10:41:42'),(3,'chefpiste','2021-10-07 10:41:42','2021-10-07 10:41:42'),(4,'admin','2021-10-07 10:41:42','2021-10-07 10:41:42');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stocks`
--

DROP TABLE IF EXISTS `stocks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `capacite` double NOT NULL,
  `reservoir_id` bigint unsigned DEFAULT NULL,
  `synthese_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stocks`
--

LOCK TABLES `stocks` WRITE;
/*!40000 ALTER TABLE `stocks` DISABLE KEYS */;
/*!40000 ALTER TABLE `stocks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `syntheses`
--

DROP TABLE IF EXISTS `syntheses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `syntheses` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `etat` tinyint(1) DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `syntheses`
--

LOCK TABLES `syntheses` WRITE;
/*!40000 ALTER TABLE `syntheses` DISABLE KEYS */;
/*!40000 ALTER TABLE `syntheses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint unsigned DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Malang','malang@gmail.com',NULL,'$2y$10$J8jLVhjoScgZo8xYIbJ1g.2vE/n7DBSEu1hr2aHQ8B.T2p76puaxW',1,NULL,'2021-10-07 10:41:43','2021-10-07 10:41:43',NULL),(2,'Papis','papis@gmail.com',NULL,'$2y$10$HklVte.IRzZQ2LYy6G6pnuzlmv7XNvZEj1ximpZixXJOj3VhnKXKq',1,NULL,'2021-10-07 10:41:43','2021-10-07 10:41:43',NULL),(3,'Traoré','traore@gmail.com',NULL,'$2y$10$iXL5MCPaefACaaTrubz56u06LovVwgtyzieFV1bi3tgK6xuy9/PrW',1,NULL,'2021-10-07 10:41:43','2021-10-07 10:41:43',NULL),(4,'Ganius','ganius@gmail.com',NULL,'$2y$10$.AYCNo2vgz36aOV0Lu1H5OCeo46vZOOt.KHkoTBLPZzRy67nsHSey',3,NULL,'2021-10-07 10:41:44','2021-10-07 10:41:44',NULL),(5,'Rawa','rawan@gmail.com',NULL,'$2y$10$MxUx3Z3yYJcC3q4uTFykAuMkImQTHTZm2ldNnRFuAesTqUikDLi2m',2,NULL,'2021-10-07 10:41:44','2021-10-07 10:41:44',NULL),(6,'Mohamet','diattamohamet30@gmail.com',NULL,'$2y$10$nXJ5xUwx2gVfwqxZkbV94.HY7PrKALx6RWV/w0mJZOEIRSJ2gDwNS',4,NULL,'2021-10-07 10:41:44','2021-10-07 10:41:44',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vente_tpes`
--

DROP TABLE IF EXISTS `vente_tpes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vente_tpes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `numero_carte` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `montant` double(12,3) DEFAULT NULL,
  `caisse_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vente_tpes`
--

LOCK TABLES `vente_tpes` WRITE;
/*!40000 ALTER TABLE `vente_tpes` DISABLE KEYS */;
/*!40000 ALTER TABLE `vente_tpes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-10-07 11:25:44
