-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2024 at 07:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `code`, `address`, `created_at`, `updated_at`) VALUES
(1, 'D\'Amore-Pfeffer', '9CzsU', '3280 Wisoky Burg\nNorth Terrell, NC 89537-7933', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(2, 'Becker-Brown', 's8BOG', '3954 Goyette Locks\nEast Nikkimouth, NE 84285-6270', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(3, 'Legros-Kozey', 'kkzIv', '65591 Rempel Canyon\nSimonisfort, WI 84112-8798', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(4, 'Lubowitz-Gutkowski', '56BFt', '592 Weber Green\nStokeston, DC 60798', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(5, 'Dare Group', 'QNpb1', '4690 Daniel Streets Suite 128\nLake Randal, TN 99226-8932', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(6, 'Rutherford LLC', 'R0oz4', '2046 Wilfrid Neck\nO\'Konport, VA 72540', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(7, 'O\'Reilly-Schmidt', 'JaqHK', '65186 Mayer Spring Suite 644\nMadisynshire, VA 21114-6290', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(8, 'Bailey-Walker', 'WsCAl', '949 Ritchie Plaza Suite 860\nNelliehaven, MN 49275', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(9, 'D\'Amore-Mayert', 'sUjeC', '115 Lizzie Underpass Apt. 982\nPort Faybury, FL 33228-4238', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(10, 'Lakin Inc', 'mYeer', '89651 Quitzon Stream\nRyanmouth, IN 32542-2843', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(11, 'Senger Group', 'EyFaw', '890 Lamar Ridges\nWest Miloport, TN 26081', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(12, 'Schuster PLC', 'LuoIN', '6288 Friesen Divide\nNorth Selenamouth, ME 91994', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(13, 'DuBuque, Wintheiser and Goodwin', 'zTxVD', '8485 Lexus Lights\nWest Kelsiside, DE 13191', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(14, 'Doyle-Satterfield', 'Whe6q', '732 Kerluke Crest Suite 935\nEast Ruth, IL 21039', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(15, 'Lindgren-Jakubowski', 'uiebs', '90887 Jaclyn Vista Apt. 688\nWest Coltenfurt, OH 69619', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(16, 'Gerhold PLC', 'YeZsF', '6341 Merle Estates\nCollinsport, HI 26289', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(17, 'Heathcote-Ruecker', 'NmtYA', '479 Robel Brooks Suite 517\nKerlukefurt, ME 29911-6607', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(18, 'Jaskolski, Wilkinson and Reilly', 'Bdfa0', '49102 Adrian Ford Apt. 627\nRainaberg, PA 80778', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(19, 'Smith, Gorczany and Schmitt', 'K2dFz', '2565 Felipe Place\nKlington, ME 21409', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(20, 'D\'Amore-Lehner', 'bkvs8', '58284 Roberto Bypass Apt. 486\nKattiestad, KS 50979', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(21, 'Feest-Jacobi', 'f9s77', '286 Kaylee Street Suite 202\nSouth Broderickburgh, ID 58945-2060', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(22, 'Cassin Group', 'VLvvO', '61363 Axel Mill Suite 081\nNew Madyson, SC 17675-6089', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(23, 'Gleason, Block and Fadel', 'NKR46', '971 Fleta Corners\nWest Caleb, WI 20904', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(24, 'Rempel-Orn', 'OTtOI', '552 Dicki Shores\nLake Janiya, OH 91124', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(25, 'Mosciski, Kling and Jacobson', '5kHZI', '8678 Charles Common Suite 533\nO\'Haraview, VA 17386-4145', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(26, 'Bradtke-Gleason', '4wPGh', '9195 Zemlak Rapid\nNorth Alysha, NM 81989-1091', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(27, 'Christiansen, Morissette and Ledner', 'AG2Nd', '6479 Swift Rue Apt. 448\nMedaville, SC 10148', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(28, 'Dach, Grady and Bernier', 'LGtke', '33174 Felipa Curve\nDemariotown, ND 76946-7414', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(29, 'Bechtelar-Koss', 'ozLxR', '2467 Wilkinson Flat Suite 539\nLake Donavon, VT 70299-4445', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(30, 'Grant-Kulas', 'ZPOUl', '40082 Nicola Pine\nLake Vilma, UT 08997', '2024-04-27 22:20:26', '2024-04-27 22:20:26'),
(31, 'Padberg-Schowalter', 'DmLFI', '8057 Bayer Extensions Apt. 962\nMarvinton, WY 57707', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(32, 'Nitzsche-Lesch', 'pNEDx', '572 Sauer Rue Apt. 334\nWest Jesschester, VT 60764-4443', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(33, 'Luettgen-Conn', 'Ppizb', '4790 Yundt Pine Suite 473\nEbertton, SC 77620-8154', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(34, 'Schaefer-Raynor', 'PBSxV', '250 Ratke Track\nWest Willafort, TN 24925', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(35, 'Kertzmann-Muller', 'uZwoU', '3551 Jermain Point Apt. 705\nWest Georgette, DC 57972-6932', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(36, 'Little-Dicki', '5QHq6', '84148 Morissette Glen\nNew Andrewberg, NC 11469', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(37, 'Ortiz Inc', 'VZBFq', '1776 Anastasia Brook\nTiannahaven, TN 26825-8755', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(38, 'Rempel LLC', 'pzBL9', '4925 Reilly Brook Apt. 379\nPort Melynaport, NE 26390-8580', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(39, 'Blick-Little', 'wU1MQ', '78819 Vivian Lights\nDandrehaven, ME 96172-8559', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(40, 'Smitham, Hamill and Rolfson', 'TJMBG', '8307 Wisozk Mission\nNorth Chelsie, WA 49365', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(41, 'Bogan-Howell', 'djMAP', '5924 Jenkins Cove Suite 863\nFarrellburgh, AR 40608-4380', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(42, 'Ullrich, Sauer and Jenkins', 'MSvui', '5821 Lowe Plaza Apt. 921\nNorth Helmer, IN 87542', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(43, 'Walter, Heller and Lubowitz', 'zhT42', '2224 Hand Hollow\nWest Madalinemouth, GA 25619-1861', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(44, 'McCullough, Beier and Hermann', 'HO5lW', '63573 Boyd Common Suite 389\nLolitashire, MT 95847-2736', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(45, 'Ortiz-Schultz', 'so6I2', '364 Swift Creek\nProsaccoside, WA 10016-6529', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(46, 'Mraz-Kovacek', 'mjf5J', '231 Corwin Viaduct Apt. 206\nWatsicamouth, ME 14084', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(47, 'Dibbert PLC', 'EVegJ', '1965 June Springs Suite 318\nSouth Edgardo, NE 26191-4316', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(48, 'Goyette Inc', 'al9b1', '8592 Tracy Corners\nConnellyport, AR 82875-5690', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(49, 'Cruickshank Group', 'Jfett', '28926 Wintheiser Rue Suite 367\nMakenzietown, NJ 75426', '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(50, 'Maggio Ltd', 'flqzM', '85557 Gleichner Hollow Suite 881\nSouth Lance, OH 41343', '2024-04-27 22:23:04', '2024-04-27 22:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'mok', 'ullam', 'Sit non soluta aut sint cumque.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(2, 'jsl', 'blanditiis', 'Placeat et vitae quisquam est illum.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(3, 'mat', 'consequatur', 'Omnis ex odio voluptatem ut est nihil.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(4, 'tsh', 'cupiditate', 'Numquam repellendus vel et qui sed.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(5, 'zvq', 'ea', 'Ut amet deserunt delectus quas blanditiis eligendi.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(6, 'juk', 'impedit', 'Et animi quasi sit aliquid fuga.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(7, 'lae', 'hic', 'Omnis enim saepe ad accusamus.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(8, 'qua', 'harum', 'Accusamus molestias id consequatur ut et quibusdam rerum vel.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(9, 'jiq', 'non', 'Quod et consequuntur quasi at.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(10, 'tdb', 'id', 'Aut nobis laudantium aut nihil.', '2024-04-27 22:19:50', '2024-04-27 22:19:50'),
(11, 'vn', 'Việt Nam', 'đất nước xinh đẹp', '2024-04-27 22:24:09', '2024-04-27 22:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2024_04_12_112108_create_countries_table', 1),
(5, '2024_04_21_010147_create_users_table', 1),
(6, '2024_04_22_063812_create_companies_table', 2),
(7, '2024_04_21_010159_create_persons_table', 3),
(8, '2024_04_22_092804_create_roles_table', 3),
(9, '2024_04_22_144833_create_role_user_table', 3),
(10, '2024_04_23_004132_create_departments_table', 3),
(11, '2024_04_23_062526_create_projects_table', 3),
(12, '2024_04_23_074643_create_project_person_table', 3),
(13, '2024_04_23_151130_create_tasks_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `full_name`, `gender`, `birthdate`, `phone_number`, `address`, `user_id`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'Queenie Kemmer', 'male', '2014-07-12', '716.899.5030', '60592 Predovic Tunnel Suite 076\nSouth Artchester, SD 75626', 1, 2, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(2, 'Jimmy Daniel', 'female', '2018-06-09', '1-423-346-8224', '723 Isai Harbor Suite 975\nDarrellmouth, FL 47786', 2, 4, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(3, 'Minnie Boyer DDS', 'female', '1997-09-11', '+1.848.977.5924', '69815 Skiles Springs\nSouth Jay, VA 40851', 3, 6, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(4, 'Bobby Lowe', 'female', '2016-11-24', '+1-938-302-5094', '354 Aisha Dale Suite 488\nEast Woodrow, PA 83923-5954', 4, 8, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(5, 'Dr. Yasmine Morar', 'male', '2007-06-28', '+19146503898', '779 Crona Key\nKeelyland, TN 87242-2879', 5, 10, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(6, 'Mrs. Bonnie Keebler', 'female', '1975-08-31', '+17705039757', '552 Joana Circle\nMartaside, MT 19122', 6, 12, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(7, 'Wava Jast PhD', 'female', '1990-12-27', '(984) 546-4128', '967 Mattie Fort Suite 132\nNorth Merle, AK 11449', 7, 14, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(8, 'Brandi Bayer V', 'female', '2013-07-21', '970.367.5447', '939 Ortiz Cape\nLudwigview, LA 95797', 8, 16, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(9, 'Cristal Donnelly', 'female', '2002-10-12', '(623) 774-0221', '650 Lindgren Course Apt. 104\nNew Salvatoretown, NV 08308', 9, 18, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(10, 'Kiel Hessel', 'female', '2010-05-03', '+1-272-458-4327', '87845 Lehner Loop\nBlandaland, NC 54326', 10, 20, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(11, 'Fred Connelly', 'female', '2000-08-08', '(773) 297-8601', '4944 Nellie Streets Apt. 451\nJessicamouth, VT 29536', 11, 31, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(12, 'Sarah Swaniawski', 'female', '1976-10-08', '+17627909393', '932 Gleichner Circle Apt. 929\nNorth Sonyamouth, HI 57976-4947', 12, 32, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(13, 'Miss Lessie Monahan PhD', 'female', '1971-08-11', '+1 (938) 733-3161', '921 Allison Tunnel Suite 450\nBlockstad, FL 10306', 13, 33, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(14, 'Demarcus Howe', 'female', '2007-06-24', '+1 (463) 616-0387', '29102 Bradtke Center\nKshlerinmouth, AK 72189-0682', 14, 34, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(15, 'Dr. Noah Gleason', 'female', '1982-07-02', '1-458-716-0949', '843 Janiya Lake\nDickiburgh, AL 66438-7421', 15, 35, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(16, 'Pamela Orn', 'female', '1981-04-21', '+1.678.377.7724', '2009 Monique Keys Suite 994\nSouth Auroreberg, KY 66227', 16, 36, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(17, 'Raegan Orn', 'male', '1988-03-08', '+16125542784', '3326 Ortiz Pines\nLake Marcoport, OR 00517', 17, 37, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(18, 'Daryl Klocko', 'male', '2017-10-02', '726.250.0763', '23602 Katrine Squares Suite 894\nErickaland, DE 96829', 18, 38, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(19, 'Dr. Brad Schaden I', 'female', '1994-06-22', '+1-863-955-5996', '66567 Zaria Skyway Suite 170\nSouth Consuelomouth, MT 18155', 19, 39, '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(20, 'Christian Hane', 'female', '1985-09-17', '1-979-859-3944', '2454 Amaya Grove Apt. 054\nNorth Odie, SC 46478-5965', 20, 40, '2024-04-27 22:20:33', '2024-04-27 22:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `code`, `name`, `description`, `company_id`, `created_at`, `updated_at`) VALUES
(1, 'aut', 'Arvel Bednar', 'Cupiditate animi illo aut quae.', 1, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(2, 'iusto', 'Willie Osinski DVM', 'Minima omnis beatae ullam fugit unde sunt.', 3, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(3, 'eveniet', 'Trinity Spinka', 'Placeat provident nam eveniet eos aut voluptate.', 5, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(4, 'fuga', 'Susana Heathcote PhD', 'Vero ratione consectetur et reiciendis id voluptatem.', 7, '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(5, 'ullam', 'Watson Kling', 'Vel et consectetur harum nisi non possimus.', 9, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(6, 'molestiae', 'Bennie Okuneva III', 'Nisi qui tempora vel perferendis incidunt.', 11, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(7, 'et', 'Daphney Weissnat', 'Ipsum ex ipsa sequi aut necessitatibus autem.', 13, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(8, 'sit', 'Marcelino Davis MD', 'Et voluptas quaerat ut quis.', 15, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(9, 'sunt', 'Yazmin McGlynn IV', 'Reiciendis illum recusandae voluptatum quis perferendis.', 17, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(10, 'id', 'Mr. Raphael Baumbach V', 'Sed porro magnam ea corrupti.', 19, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(11, 'minima', 'Mrs. Katarina Howe', 'Voluptatum qui nulla et nisi veritatis quia.', 41, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(12, 'sunt', 'Luisa Stehr', 'Eveniet dignissimos quas cupiditate tenetur perspiciatis id repellendus.', 42, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(13, 'porro', 'Prof. Eliezer Kozey DVM', 'Neque quis aliquam deleniti quas quas fugit.', 43, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(14, 'ea', 'Carolyn Runolfsson', 'Quo in vel quas saepe.', 44, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(15, 'soluta', 'Jeffrey Ankunding', 'Accusantium quaerat aut dolorem voluptatem tenetur sint.', 45, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(16, 'repudiandae', 'Maximus Gusikowski', 'Voluptatibus explicabo sapiente fugiat quia rerum rem perspiciatis.', 46, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(17, 'beatae', 'Kimberly Sawayn', 'Velit voluptas exercitationem in qui ea.', 47, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(18, 'ratione', 'Mr. Jay Hermann', 'Ea in libero laborum totam reiciendis fugit eius.', 48, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(19, 'non', 'Mrs. Lauriane Jacobson II', 'Dicta aut dolorem repellat.', 49, '2024-04-27 22:23:04', '2024-04-27 22:23:04'),
(20, 'vero', 'Russ Rodriguez', 'Pariatur velit accusamus quis optio dolorem omnis.', 50, '2024-04-27 22:23:04', '2024-04-27 22:23:04');

-- --------------------------------------------------------

--
-- Table structure for table `project_person`
--

CREATE TABLE `project_person` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `person_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `description`, `created_at`, `updated_at`) VALUES
(1, 'itaque', 'Inventore molestiae provident fugiat fuga omnis aut explicabo.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(2, 'ex', 'A animi nobis consequatur maxime.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(3, 'laudantium', 'Non in cupiditate expedita numquam enim nesciunt.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(4, 'ut', 'Voluptas atque non ad illum.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(5, 'occaecati', 'Nesciunt excepturi eius expedita placeat nesciunt.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(6, 'eligendi', 'Sunt voluptates qui natus aut aspernatur odio.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(7, 'at', 'Aperiam nobis natus sed libero quasi voluptas iure est.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(8, 'necessitatibus', 'Repudiandae et amet error illo fuga quisquam repellat.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(9, 'nemo', 'Ut sunt ipsam debitis corporis quasi aut debitis.', '2024-04-27 22:22:52', '2024-04-27 22:22:52'),
(10, 'dicta', 'Fugit et et deserunt.', '2024-04-27 22:22:52', '2024-04-27 22:22:52');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint UNSIGNED NOT NULL,
  `project_id` bigint UNSIGNED NOT NULL,
  `person_id` bigint UNSIGNED NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `priority` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `project_id`, `person_id`, `start_time`, `end_time`, `priority`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-04-30 12:24:25', '1970-08-28 11:25:36', 2, 'tempora', 'Et ex ducimus nesciunt ut repudiandae quasi dolorem.', 2, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(2, 2, 2, '2014-11-09 21:23:46', '1973-08-29 16:35:42', 2, 'earum', 'Et eos voluptatem perspiciatis asperiores qui corrupti temporibus.', 2, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(3, 3, 3, '1972-07-19 23:45:32', '2000-09-23 15:18:43', 2, 'accusamus', 'Illum error necessitatibus voluptas et unde nulla autem delectus.', 4, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(4, 4, 4, '2000-06-11 21:14:21', '2005-04-25 04:43:50', 2, 'qui', 'Eum earum culpa quo cumque voluptas ut laboriosam.', 1, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(5, 5, 5, '1995-03-24 20:06:59', '1975-05-17 03:32:01', 2, 'temporibus', 'Consequuntur harum deserunt ducimus vel mollitia.', 4, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(6, 6, 6, '1987-12-27 21:54:08', '2011-01-21 20:24:27', 1, 'neque', 'In sunt sit nesciunt at est illum.', 1, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(7, 7, 7, '1996-10-02 08:41:19', '1975-04-13 15:19:39', 2, 'in', 'Beatae maiores recusandae laboriosam et consequuntur.', 1, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(8, 8, 8, '2006-09-04 03:40:39', '1981-01-25 23:48:30', 2, 'necessitatibus', 'Nisi ut qui id et.', 3, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(9, 9, 9, '1996-08-05 06:42:27', '2005-06-20 09:15:49', 1, 'eum', 'Ut consectetur voluptates qui sint sint cupiditate.', 4, '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(10, 10, 10, '1980-01-04 23:46:01', '2010-09-28 07:07:48', 1, 'natus', 'Est voluptas aut corporis deserunt incidunt molestias.', 3, '2024-04-27 22:19:21', '2024-04-27 22:19:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Elmo Jakubowski MD', 'psmitham@example.org', '2024-04-27 22:19:20', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'AczsMuXqRt', 'active', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(2, 'Dagmar Cormier', 'iratke@example.net', '2024-04-27 22:19:20', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'aC85ct8eRp', 'active', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(3, 'Madie Padberg', 'maurine.cummings@example.com', '2024-04-27 22:19:20', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'OGuSIQ3mcO', 'active', '2024-04-27 22:19:20', '2024-04-27 22:19:20'),
(4, 'Rita Dicki', 'noble54@example.org', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'urqXdQUOxp', 'active', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(5, 'Mrs. Pansy Kris Jr.', 'muller.karlie@example.com', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'fg7qv0W6v0', 'inactive', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(6, 'Aliza Eichmann', 'damian.oberbrunner@example.com', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'X9G0U7E8sB', 'active', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(7, 'Dr. Eva Mohr DVM', 'mike.abshire@example.net', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'Ty1OFcZaIY', 'active', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(8, 'Maximillian Breitenberg V', 'bflatley@example.net', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'KRn5nRgHnV', 'active', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(9, 'Prof. Jacques Sauer', 'ettie.west@example.org', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'xdIzFHqYtV', 'inactive', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(10, 'Kaela Skiles', 'marvin.kim@example.org', '2024-04-27 22:19:21', '$2y$12$U2tou0uLy0JrnsgGBsurBOiTfQwuZi356mEoLYWJiHP6OJ/vTLhmu', 'cGpFDgVRzM', 'inactive', '2024-04-27 22:19:21', '2024-04-27 22:19:21'),
(11, 'Rosie Goodwin', 'nnader@example.com', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'lFRGWbVF5q', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(12, 'Jasmin Gerlach', 'connie19@example.com', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'nsLNGWuh5N', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(13, 'Dr. Einar Wintheiser', 'aditya49@example.net', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'o5SmdfnhkW', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(14, 'Hyman DuBuque PhD', 'icie95@example.net', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', '5tYrooidnc', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(15, 'Domenica Daniel', 'sharvey@example.org', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'Mx447FQAg6', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(16, 'Merritt Prohaska', 'missouri06@example.net', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'SDd6FQQsQW', 'active', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(17, 'Dr. Magali Murphy DDS', 'wisoky.koby@example.com', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'YKu0GUr2eg', 'active', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(18, 'Mckayla O\'Hara', 'cremin.shayne@example.net', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'nOaLrZPgMV', 'active', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(19, 'Ms. Cathy Lubowitz Jr.', 'lbreitenberg@example.com', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'XrSrhpBopZ', 'inactive', '2024-04-27 22:20:33', '2024-04-27 22:20:33'),
(20, 'Jordyn Wisoky', 'horacio.dickens@example.net', '2024-04-27 22:20:33', '$2y$12$pW0QR7zIBb8GHNY43BKmqOg4pOoMYYFlxyz/HwImPziUt9.KGMd5q', 'ykRP1gs2EA', 'active', '2024-04-27 22:20:33', '2024-04-27 22:20:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_code_unique` (`code`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_parent_id_foreign` (`parent_id`),
  ADD KEY `departments_company_id_foreign` (`company_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persons_user_id_unique` (`user_id`),
  ADD KEY `persons_company_id_foreign` (`company_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_company_id_foreign` (`company_id`);

--
-- Indexes for table `project_person`
--
ALTER TABLE `project_person`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_person_project_id_person_id_unique` (`project_id`,`person_id`),
  ADD KEY `project_person_person_id_foreign` (`person_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_project_id_foreign` (`project_id`),
  ADD KEY `tasks_person_id_foreign` (`person_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `project_person`
--
ALTER TABLE `project_person`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `departments_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `persons_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `project_person`
--
ALTER TABLE `project_person`
  ADD CONSTRAINT `project_person_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_person_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `persons` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tasks_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
