-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: shippedwebs
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `enquiries`
--

DROP TABLE IF EXISTS `enquiries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enquiries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('contact','booking') NOT NULL DEFAULT 'contact',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `project_type` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `requested_date` varchar(255) DEFAULT NULL,
  `requested_time` varchar(255) DEFAULT NULL,
  `timezone` varchar(255) DEFAULT NULL,
  `status` enum('new','contacted','closed') NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enquiries`
--

LOCK TABLES `enquiries` WRITE;
/*!40000 ALTER TABLE `enquiries` DISABLE KEYS */;
INSERT INTO `enquiries` VALUES (3,'contact','Admin',NULL,'9898989898','Landing page',NULL,'ggggggggggggggg',NULL,NULL,NULL,'new','2026-09-13 11:07:41','2026-09-13 11:07:41');
/*!40000 ALTER TABLE `enquiries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
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
-- Table structure for table `faqs`
--

DROP TABLE IF EXISTS `faqs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faqs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faqs`
--

LOCK TABLES `faqs` WRITE;
/*!40000 ALTER TABLE `faqs` DISABLE KEYS */;
INSERT INTO `faqs` VALUES (1,'Do you handle hosting and the domain too?','Yes — I can set up hosting and connect your domain as part of the build, or work with whatever you already have. Either way, the accounts stay in your name.',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'How do I pay?','Every project starts with a 40–50% advance to begin work, with the balance due on delivery. You can pay via UPI, a Razorpay payment link, or direct bank transfer — whichever\'s easiest for you. I\'ll share the payment link/details at each milestone.',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'What if I need changes after the site is live?','Every package includes revision rounds before launch. After that, one-off updates (like text or image changes) are quick paid turnarounds — usually same-day. If you\'ll need regular updates, the Care Plan covers a few small changes every month at a lower cost than one-off requests.',2,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(4,'What tech stack do you build with?','Depends on scope — static HTML/CSS for simple sites, React or similar for anything dynamic, with proper hosting and monitoring set up either way.',3,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(5,'Can I make edits myself later?','You always own the code and hosting, so nothing\'s locked away from you. For landing pages and static sites, most clients find it faster to just message me for edits rather than dig into code — that\'s what one-off updates or the Care Plan are for. For dynamic and e-commerce builds, I set up a simple admin panel so you can manage things like products or key content yourself.',4,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(6,'Do you handle marketing after the site is live?','Yes — as a separate add-on, not part of the build. I set up your Google Business Profile and Instagram, and can run monthly content on a retainer. I don\'t promise follower counts or guaranteed growth — just consistent visibility and a presence that\'s actually maintained.',5,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `faqs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leads`
--

DROP TABLE IF EXISTS `leads`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leads` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country_code` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `what_you_do` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leads`
--

LOCK TABLES `leads` WRITE;
/*!40000 ALTER TABLE `leads` DISABLE KEYS */;
INSERT INTO `leads` VALUES (2,'Browser Test','browser-test-20260920@example.com','+91','9999999999','business-owner','new','2026-09-20 09:53:18','2026-09-20 09:53:18');
/*!40000 ALTER TABLE `leads` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2026_09_12_110220_create_work_items_table',2),(6,'2026_09_12_110221_create_services_table',2),(7,'2026_09_12_110222_create_process_steps_table',2),(8,'2026_09_12_110222_create_why_items_table',2),(9,'2026_09_12_110223_create_testimonials_table',2),(10,'2026_09_12_110224_create_faqs_table',2),(11,'2026_09_12_110225_create_stats_table',2),(12,'2026_09_12_110226_create_site_settings_table',2),(13,'2026_09_12_110227_create_enquiries_table',2),(14,'2026_09_12_110403_add_is_admin_to_users_table',2),(15,'2026_09_13_143259_add_section_headings_to_site_settings_table',3),(16,'2026_09_13_144111_create_leads_table',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
-- Table structure for table `process_steps`
--

DROP TABLE IF EXISTS `process_steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_steps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_steps`
--

LOCK TABLES `process_steps` WRITE;
/*!40000 ALTER TABLE `process_steps` DISABLE KEYS */;
INSERT INTO `process_steps` VALUES (1,'Design','We lock down what the site needs to do and how it should feel — no guessing later.',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'Build','I build it in focused sprints and share progress, not just a final reveal.',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'Deploy','Domain, hosting, security — set up properly, the way production systems are.',2,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(4,'Live','Your site goes live, and stays your call for updates, forever — no lock-in.',3,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `process_steps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `services` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `services`
--

LOCK TABLES `services` WRITE;
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` VALUES (1,'Landing page','One fast page, built to turn visitors into enquiries.',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'Static website','A handful of pages, no backend — your full presence online.',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'Dynamic website with admin panel','Logins, a database, and a panel you update yourself.',2,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(4,'E-commerce website with admin panel','Cart, payments, and orders — all managed by you.',3,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `site_name` varchar(255) NOT NULL DEFAULT 'Shipped.',
  `hero_eyebrow` varchar(255) DEFAULT NULL,
  `hero_title` varchar(255) DEFAULT NULL,
  `hero_subtitle` text DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `founder_name` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `whatsapp_number` varchar(255) DEFAULT NULL,
  `instagram_handle` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `response_time` varchar(255) DEFAULT NULL,
  `availability_text` varchar(255) DEFAULT NULL,
  `footer_tagline` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `work_eyebrow` varchar(255) DEFAULT NULL,
  `work_heading` varchar(255) DEFAULT NULL,
  `work_subtext` varchar(255) DEFAULT NULL,
  `services_eyebrow` varchar(255) DEFAULT NULL,
  `services_heading` varchar(255) DEFAULT NULL,
  `services_subtext` varchar(255) DEFAULT NULL,
  `process_eyebrow` varchar(255) DEFAULT NULL,
  `process_heading` varchar(255) DEFAULT NULL,
  `process_subtext` varchar(255) DEFAULT NULL,
  `why_eyebrow` varchar(255) DEFAULT NULL,
  `why_heading` varchar(255) DEFAULT NULL,
  `testimonials_eyebrow` varchar(255) DEFAULT NULL,
  `testimonials_heading` varchar(255) DEFAULT NULL,
  `faq_eyebrow` varchar(255) DEFAULT NULL,
  `faq_heading` varchar(255) DEFAULT NULL,
  `contact_heading` varchar(255) DEFAULT NULL,
  `contact_subtext` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` VALUES (3,'Shipped.','WEB DEVELOPMENT, RUN LIKE INFRASTRUCTURE','Your website, shipped — not just designed.','Most web builders hand you a design and disappear. We\'re an engineering team — we build your site the way we build production systems: fast, monitored, and made to stay up. Landing pages to full web apps.','A DevOps engineer builds your website like a production system — fast, monitored, and made to stay up. Landing pages to full web apps, live in days.','Rohit Parmar','hello@shippedwebs.com','917499050131','@shippedwebs','https://instagram.com/shippedwebs','within 24 hours','AVAILABLE FOR NEW PROJECTS','Websites built and deployed like production infrastructure — fast, monitored, and made to stay up.','2026-09-13 08:53:22','2026-09-13 09:07:51','SELECTED WORK','Sites we’ve shipped — open them yourself.','Both are live in production. Open them and see.','WHAT I BUILD','One developer, every layer of the stack.','Whatever stage your business is at, there\'s a build that fits it.','HOW IT WORKS','A pipeline, not a black box.','You\'ll know exactly what stage your site is at, every step of the way.','WHY WORK WITH ME','Built by someone who keeps systems running for a living.','WHAT CLIENTS SAY','A few words from recent launches.','FAQ','Before you ask — answered.','Let\'s ship your website.','Tell me what you\'re building and I\'ll send a quote and timeline — usually within a day.');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stats`
--

DROP TABLE IF EXISTS `stats`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(255) NOT NULL,
  `label` varchar(255) NOT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stats`
--

LOCK TABLES `stats` WRITE;
/*!40000 ALTER TABLE `stats` DISABLE KEYS */;
INSERT INTO `stats` VALUES (1,'15+','Sites shipped',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'<24h','Avg. response time',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'100%','Still online, still yours',2,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(4,'2d–6w','Typical launch window',3,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `stats` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `quote` text NOT NULL,
  `avatar_letter` varchar(4) DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'Sameer Solanki','DG Fitness Club','Honestly, we were worried about finding someone who would actually care about our gym\'s needs. ShippedWebs delivered beyond what we expected. The website runs like a dream, and the whole process felt effortless. Highly recommend if you want a website you can actually trust.','S',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'Arjun K.','Clinic owner','Felt like handing my site to an engineer, not just a designer. Contact form, hosting, domain — all sorted without me chasing anything.','A',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'Sana T.','Consultant','Clear pricing upfront, no surprise invoices later. Updates since launch have been quick to turn around too.','S',2,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@gmail.com',NULL,'$2y$10$c7ZypnWkR2KFT8NXd.QDle5ZNsCdxGY1dGILszFx9kw8Ys0mYi/kO',1,NULL,'2026-09-12 05:36:10','2026-09-13 08:42:26');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `why_items`
--

DROP TABLE IF EXISTS `why_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `why_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `why_items`
--

LOCK TABLES `why_items` WRITE;
/*!40000 ALTER TABLE `why_items` DISABLE KEYS */;
INSERT INTO `why_items` VALUES (1,'Uptime mindset','I don\'t just launch sites — I think about what keeps them online, secure, and fast, months later.',0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'Fast delivery','Simple sites live in days, not weeks — no waiting on a big agency\'s queue.',1,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(3,'You own everything','Your domain, your hosting, your files. No lock-in, no disappearing after payment.',2,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `why_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_items`
--

DROP TABLE IF EXISTS `work_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `work_items` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) DEFAULT NULL,
  `url` varchar(255) NOT NULL,
  `display_url` varchar(255) DEFAULT NULL,
  `screenshot` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `is_live` tinyint(1) NOT NULL DEFAULT 1,
  `sort_order` int(10) unsigned NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_items`
--

LOCK TABLES `work_items` WRITE;
/*!40000 ALTER TABLE `work_items` DISABLE KEYS */;
INSERT INTO `work_items` VALUES (1,'DG Fitness Club','Gym · Nandurbar','https://dgfitnessclub.com','dgfitnessclub.com','images/work-dgfitness.webp','Programs, trainers, membership and gallery — one fast page.','Static site, Custom domain',1,0,'2026-09-13 08:53:22','2026-09-13 08:53:22'),(2,'Orchid Salon & Academy','Salon · Bangalore','https://musical-snickerdoodle-0a4b9f.netlify.app/','musical-snickerdoodle-0a4b9f.netlify.app','images/work-orchid.webp','Makeup, hair, skin and spa menus, gallery and bookings.','Static site, Booking flow',1,1,'2026-09-13 08:53:22','2026-09-13 08:53:22');
/*!40000 ALTER TABLE `work_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'shippedwebs'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-09-24 17:02:42
