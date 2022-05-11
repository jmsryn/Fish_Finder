-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: fish_finder
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `fish`
--

DROP TABLE IF EXISTS `fish`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fish` (
  `fish_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `local_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scientific_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feature` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `development` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `diet` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `top_fish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`fish_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fish`
--

LOCK TABLES `fish` WRITE;
/*!40000 ALTER TABLE `fish` DISABLE KEYS */;
INSERT INTO `fish` VALUES (3,'Bali Sardinella','Tamban','Sardinella lemuru','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The body of these <strong>Sardinella</strong> is particularly elongated even to the point of being <u><em>subcylindrical</em></u>. They have a slightly rounded belly and have eight rays on their pelvic fins. They have a very large number of gill rakers and a faint golden spot behind the gill opening. They also have a faint golden midlateral line, as well as a black spot on the hind border of their gill covers.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The lifespan of this fish is about <strong>2.5 years,</strong> but difficult to determine because the annual rings in their scales may be formed for several reasons other than yearly changes in their environment. Only after the first year are the rings a reliable indicator of age, because they may be formed due to the reduced feeding activity associated with planktonic scarcity during the rise in temperature of the environment in summer.</span><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">&nbsp;</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Having very small teeth or no teeth at all, sardines eat plankton, which they filter from the water through their gills.</span></p>','images/3eMDOAGCdmgdhTqrjTzCcPKsdyxpTWvrERFdquWP.jpg','top'),(4,'Drift Fish','Kabaw-Kabaw','Cubiceps gracilis ','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">There is only a little information available regarding the reproduction of these fishes as there are fewer records and data collected by researchers. They are mostly oviparous or iteroparous and reproduction is sexual. The number of pelagic eggs in these fishes is also unknown in most of the species. As their distribution range is tropical and warmer temperate regions, they probably breed in these regions. The females of this species lay 294,000 to 3,948,000 pelagic eggs in warmer depths of waters, and the youngs have a short body length.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">There is only a little information available regarding the reproduction of these fishes as there are fewer records and data collected by researchers. They are mostly oviparous or iteroparous and reproduction is sexual. The number of pelagic eggs in these fishes is also unknown in most of the species. As their distribution range is tropical and warmer temperate regions, they probably breed in these regions. The females of this species lay 294,000 to 3,948,000 pelagic eggs in warmer depths of waters, and the youngs have a short body length.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">There is only a little information available regarding the reproduction of these fishes as there are fewer records and data collected by researchers. They are mostly oviparous or iteroparous and reproduction is sexual. The number of pelagic eggs in these fishes is also unknown in most of the species. As their distribution range is tropical and warmer temperate regions, they probably breed in these regions. The females of this species lay 294,000 to 3,948,000 pelagic eggs in warmer depths of waters, and the youngs have a short body length.</span></p>','images/J7VNwjOWLenR7jcoPQIbWwSZW9ytKKOtLkN9Qb3u.jpg','top'),(5,'Bullet Tuna','Pirit','Auxis rochei','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Bullet tunas are blue-black on the back with a pattern of zig-zag dark markings on the upper hind body, and silver below. The fins are dark grey.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">During our research, the ages of 630 <strong>Auxis rochei</strong> from 936 specimens were examined on <strong><u>otoliths</u></strong> and the first rays of the dorsal fins. It was not possible to determine the age of the remaining 306 fish. Ages of these fish differed from 0. to IV. The number of the individuals of 0. age (only 5 fish) was not enough to form a group for age 0.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">A. rochei mainly fed on small fishes, molluscs and crustaceans. Mostarda et al. (2007) reported that the bullet tuna is an epipelagic off-shore predator feeding on whatever abundant resources is available in the environment, with a preference for planktonic crustaceans, small cephalopods and fish larvae</span></p>','images/lEIWGvFhxSeUNqafKbBIsxQfyk3O0jp3Xq2JHeMq.jpg','top'),(6,'Frigate Tuna','Pidlayan','Auxis thazard','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Having very small teeth or no teeth This species is distinguished by the following characters: a robust body, elongated and rounded; teeth small and conical, in a single series; total gill rakers on first gill arch 36-42; dorsal fins 2, D1 X-XII, separated from the second by a large interspace (at least equal to length of first dorsal-fin base)</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Asymptotic length L&infin; of frigate tuna was 48.41 cm with a growth rate K of 0.53 year-1 and the growth rate when the specimen was at zero length (t0) of -0.071 year-1. The total mortality rate (Z) estimated for the frigate tuna,</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The frigate tuna, considered omnivores, normally consumes smaller fish, planktonic crustaceans, squids, and stomatopod larvae. It is also reported to feed on the young of its own species.</span></p>','images/Fh5SsW8AzdKlMhEqc5sSlDyxy0UMjpjI3O8LeGiw.jpg','top'),(7,'Oxeye Scad','Kutob','Selar boops','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">A bluish-green scad becoming silvery to golden below, with a broad yellow stripe from the upper rear of the eye to the tail base, a small black spot near the rear of the gill cover, dusky dorsal and anal-fin lobes with white tips, a very large eye, and large scutes on the caudal peduncle.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">&nbsp;</span><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">A bluish-green scad becoming silvery to golden below, with a broad yellow stripe from the upper rear of the eye to the tail base, a small black spot near the rear of the gill cover, dusky dorsal and anal-fin lobes with white tips, a very large eye, and large scutes on the caudal peduncle.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Feeds at night on planktonic and benthic crustaceans (crabs and shrimps) and small fishes. Fished commercially in parts of its range.</span></p>','images/usaFjhDG6RJoADOXraBLDofAezUjOWyk92N71R5S.jpg','top'),(8,'Skipjack Tuna','Budlisan','Katsuwonus pelamis','<p id=\"isPasted\" style=\'color: rgb(0, 0, 0); font-family: \"YAD7Q9NigKI 0\", _fb_, auto; --font-size:17.3585px; --line-height:1.6; letter-spacing: 0.02em; text-transform: none; line-height: 27px;\'><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The <strong>Skipjack Tuna</strong> fish is a medium-sized fish with dark purplish blue back and the lower sides and belly are of silvery color.Their body is fusiform, elongate and rounded. Their body is without scales except for the corselet and the lateral line.</span></p><p style=\'color: rgb(0, 0, 0); font-family: \"YAD7Q9NigKI 0\", _fb_, auto; --font-size:17.3585px; --line-height:1.6; letter-spacing: 0.02em; text-transform: none; line-height: 27px;\'><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Average body length of the Skipjack Tuna fish is around 80 cm, with a maximum length of 1 m.</span></p><p style=\'color: rgb(0, 0, 0); font-family: \"YAD7Q9NigKI 0\", _fb_, auto; --font-size:17.3585px; --line-height:1.6; letter-spacing: 0.02em; text-transform: none; line-height: 27px;\'><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Their average live body weight is between 8 and 10 kg, with a maximum recorded body weight of 34.5 kg.</span><span style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">&nbsp;</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The result of this research showed that the growth coefficient (K) of skipjack tuna caught in the Banda Sea have a length-at-infinity (L&infin;) of 70.1 cm and growth coefficient (K) of 0.260; attaining L&infin; at the age of 45.5 months, or 3.7 years.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Skipjack eat a variety of prey, including small fishes, squids, pelagic crustaceans, and other small invertebrates. They do not have the ability to suction feed and instead must rely on their fast swimming speeds to overcome and bite prey.</span></p>','images/h5ume3qQMDwk1v0IeaZ7f0lqU1RSEDsE4xJIEmyz.jpg','top'),(9,'Bigeye Scad','Kutob','Selar crumenophthalmus','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The Bigeye Scad is bluish-green to green above grading to white below. There is black opercular spot and sometimes a yellow stripe along the side of the body. It has adipose tissue covering the eye with the exception of an oval slit positioned over the pupil. There is a deep groove in the lower margin of the gill opening, with a large papilla above it.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Bigeye scad attains 240 and 293 mm of total length during its first and second years, respectively (Figure 5). However, a total length of 230 mm in 12 months was reported for this species in Philippine waters (Dalzell &amp; Penaflor, Reference Dalzell and Penaflor1989).</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Selar crumenophthalmus, the bigeye scad, is a coastal pelagic fish, which feeds mostly at night on large planktonic animals. Young scads prey mostly on crustaceans (euphausiids, decapods) and adults are active predators of fish larvae and early juveniles.</span></p>','images/wMAyN4I92L4sqgU1o7toCcKEIoRDUlgQgtyGml1t.jpg','top'),(10,'Flying Fish','Laniw','Oxyporhamphus micropterus micropterus','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The flying fish looks a bit like a sardine (though not really like a cod). It has a long, torpedo-shaped body, blue or silvery scales, and a vertically forked tail. By far the most prominent features are the wing-shaped pectoral fins near the head that enable them to glide through the air</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The flying fish looks a bit like a sardine (though not really like a cod). It has a long, torpedo-shaped body, blue or silvery scales, and a vertically forked tail. By far the most prominent features are the wing-shaped pectoral fins near the head that enable them to glide through the air</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Flying fish eat a variety of foods, but plankton make up a large part of their diet. They sometimes eat small crustaceans as well. Spawning takes place in the open ocean, near the water&#39;s surface. A female deposits eggs, which are attached by sticky filaments to seaweed and floating debris.</span></p>','images/ZwvyUVxtBeyhzOcdDx8ayx3BEmzO9hJDXAUwBgYi.jpg','top'),(11,'Goldstripe Sardine','Malansi','Sardinella gibbosa','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Vertical striae on scales not meeting at center, numerous small perforations on hind part of scale. A golden mid-lateral line down flank; dorsal and caudal fin margins dusky; a dark spot at dorsal fin origin.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Vertical striae on scales not meeting at center, numerous small perforations on hind part of scale. A golden mid-lateral line down flank; dorsal and caudal fin margins dusky; a dark spot at dorsal fin origin.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Having very small teeth or no teeth at all, sardines eat plankton, which they filter from the water through their gills.</span></p>','images/oMHNkNg2vPq72uEQC5Cwvbyce3OLeooZA3yfrhmh.jpg','top'),(12,'Mackerel Scad','Burot','Decapterus macarellus','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The mackerel scad, Decapterus macarellus, is an elongate, cylindrical shaped fishIts body colour is black to bluish green above, while below it is silvery. There is a small black blotch at the back edge of the operculum (gill cover) (Fig. 1). The caudal fin ranges in colour from reddish to yellow-green (Randall, 1996).</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">The initial rate of growth in length is fairly rapid up to the age of sexual maturity (3-4 years) but thereafter slows markedly, while the weight continues to increase. Scad is a long-lived species, individuals probably attaining the age of 15 years.</span></p>','<p><span id=\"isPasted\" style=\"color: rgb(0, 0, 0); font-weight: 400; font-style: normal; text-decoration: none;\">Although mackerel scad have been found at the surface, they are usually caught at depths between 40 and 200 meters. They feed mainly on zooplankton.</span></p>','images/7QS7mMVVJpwkKaDDBvB2LNcFOYYiLStmuUXljFDk.jpg','top');
/*!40000 ALTER TABLE `fish` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2022_05_01_150856_create_fish_table',1),(6,'2022_05_01_163208_create_ports_table',1),(7,'2022_05_01_163551_create_records_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `ports`
--

DROP TABLE IF EXISTS `ports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ports` (
  `port_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `port_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`port_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ports`
--

LOCK TABLES `ports` WRITE;
/*!40000 ALTER TABLE `ports` DISABLE KEYS */;
INSERT INTO `ports` VALUES (1,'El Salvador Port','8.561500640093403','124.5250940322876');
/*!40000 ALTER TABLE `ports` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `records` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fish_id` bigint unsigned NOT NULL,
  `port_id` bigint unsigned NOT NULL,
  `catch` int NOT NULL,
  `date` bigint NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_from` int NOT NULL,
  `price_to` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `records_fish_id_foreign` (`fish_id`),
  KEY `records_port_id_foreign` (`port_id`),
  CONSTRAINT `records_fish_id_foreign` FOREIGN KEY (`fish_id`) REFERENCES `fish` (`fish_id`) ON DELETE CASCADE,
  CONSTRAINT `records_port_id_foreign` FOREIGN KEY (`port_id`) REFERENCES `ports` (`port_id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `records`
--

LOCK TABLES `records` WRITE;
/*!40000 ALTER TABLE `records` DISABLE KEYS */;
INSERT INTO `records` VALUES (1,3,1,68,1651680000000,'medium',110,140);
/*!40000 ALTER TABLE `records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'James Gaid','jamesgaid@gmail.com',NULL,'$2y$10$m3WpqT78NrITeOXaQnh3m.oDRqmaeiXO4V3LH8BcjP8C23f4V3uW6',NULL,'2022-05-04 10:50:08','2022-05-07 10:05:29'),(2,'Tristan Gaid','tristan@gmail.com',NULL,'$2y$10$OkOzCUV4uqY67ivDdNFDaODX48LiX1V5X5aS9IW7.y8EsAghGmTvi',NULL,'2022-05-06 23:45:08','2022-05-06 23:45:08'),(3,'asdasda','asdasda@g.com',NULL,'$2y$10$OxmeUGBSZz6jFrYxDTbTIOqvVmdSC7sGIGlcgu0edODA1R/gppmf.',NULL,'2022-05-07 09:38:38','2022-05-07 09:38:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-05-11 15:14:09
