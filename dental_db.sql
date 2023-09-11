-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 10:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dental_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `product_title` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `medical_drugs`
--

CREATE TABLE `medical_drugs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `PatientName` varchar(255) NOT NULL,
  `products` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2023_03_11_093636_create_tb_user_table', 1),
(20, '2023_03_22_011328_create_tb_dental_product_table', 3),
(21, '2023_03_22_014152_create_tb_category_table', 4),
(22, '2023_03_22_014446_create_tb_dental_product_table', 5),
(24, '2023_03_22_083614_create_tb_user_table', 6),
(28, '2023_03_22_111751_create_tb_user_table', 7),
(29, '2023_03_22_153257_create_tb_user_table', 8),
(31, '2023_03_22_163128_create_tb_user_table', 9),
(32, '2023_03_25_033500_create_tb_user_table', 10),
(33, '2023_03_25_063203_create_tb_dental_product_table', 11),
(34, '2023_03_25_064209_create_tb_appointment_table', 12),
(38, '2023_03_29_095057_create_tb_user_table', 14),
(40, '2023_03_29_110945_create_tb_appointment_table', 16),
(41, '2023_03_29_111852_create_tb_appointment_table', 17),
(54, '2023_04_02_002850_create_tb_user_table', 19),
(60, '2023_04_04_043519_create_tb_treatments_table', 23),
(66, '2023_04_05_143529_create_tb_dentist_pro_table', 29),
(67, '2023_04_05_144734_create_tb_dentist_pro_table', 30),
(68, '2023_04_03_101609_create_tb_user_table', 31),
(69, '2023_04_06_112351_create_tb_user_table', 32),
(70, '2023_03_29_113303_create_tb_appointment_table', 33),
(74, '2023_03_25_145939_create_tb_p_info_table', 34),
(75, '2023_04_08_040435_create_tb_category_table', 35),
(77, '2023_04_10_113355_create_tb_cart_table', 36),
(78, '2023_04_10_113252_create_carts_table', 37),
(90, '2023_04_14_020513_create_tb_medicine_table', 40),
(105, '2023_04_17_094445_create_medical_drugs_table', 49),
(108, '2023_04_17_102413_create_tambals_table', 50),
(109, '2023_04_17_051709_create_prescription_payments_table', 51),
(110, '2023_04_19_004324_create_payment_infos_table', 52),
(111, '2023_04_21_143621_create_payment_details_table', 52),
(112, '2023_04_21_144025_create_payments_table', 53),
(116, '2023_04_26_122750_create_service_payments_table', 56),
(118, '2023_04_10_114214_create_carts_table', 57),
(121, '2023_05_03_115504_create_my_orders_table', 59),
(129, '2023_05_05_043403_create_order_lists_table', 64),
(131, '2023_04_15_050933_create_order_details_table', 66),
(132, '2023_04_13_152144_create_orders_table', 67),
(134, '2023_04_21_144235_create_payment_details_table', 68);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0' COMMENT '0 = pending  1 = confirm 2 = Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `firstname`, `email`, `phone_number`, `total`, `status`, `created_at`, `updated_at`) VALUES
(9, 'keith', 'keith@gmail.com', '09358554398', '1250', '2', '2023-05-09 23:41:57', '2023-06-30 21:27:58'),
(10, 'Ryan', 'ryanjaytagolimotreyes@gmail.com', '09358554398', '2100', '2', '2023-06-30 20:02:55', '2023-06-30 21:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `subTotal` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_name`, `product_image`, `quantity`, `subTotal`, `created_at`, `updated_at`) VALUES
(24, 9, 'DENTURE CLEANSER', 'http://localhost:8000/storage/products/1681013115dentureCleanser.jpg', '4', '1000', '2023-05-09 23:41:57', '2023-05-09 23:41:57'),
(25, 9, 'Dental Gel for Kids', 'http://localhost:8000/storage/products/1681044251Kids-Bunny-380gm.png', '4', '200', '2023-05-09 23:41:57', '2023-05-09 23:41:57'),
(26, 9, 'Younifloss', 'http://localhost:8000/storage/products/1681045109Younifloss.png', '2', '50', '2023-05-09 23:41:57', '2023-05-09 23:41:57'),
(27, 10, 'KIDS DYNY', 'http://localhost:8000/storage/products/1681044349Kids-Dyny.png', '4', '100', '2023-06-30 20:02:55', '2023-06-30 20:02:55'),
(28, 10, 'RA Thermoseal 100gm', 'http://localhost:8000/storage/products/1681043958RA-Thermoseal-100gm.png', '5', '2000', '2023-06-30 20:02:55', '2023-06-30 20:02:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_lists`
--

CREATE TABLE `order_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT '0' COMMENT '0 = pending  1 = confirm 2 = Taken',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(200) NOT NULL,
  `order_id` bigint(200) DEFAULT NULL,
  `orderNum` varchar(255) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `patientName` varchar(255) NOT NULL,
  `total_amount` varchar(200) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL COMMENT '0 = pending 1 = confirm 2 = Paid	',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `payment_method`, `order_id`, `orderNum`, `reference`, `patientName`, `total_amount`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(18, 'cash', 10, '16881891069032', NULL, 'Ryan', '2100', '2100', '2', '2023-06-30 21:25:06', '2023-06-30 21:25:06'),
(19, 'gcash', 9, NULL, '3243214', 'keith', '1250', '1250', '2', '2023-06-30 21:27:58', '2023-06-30 21:27:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_payments`
--

CREATE TABLE `prescription_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `DoctorName` varchar(255) DEFAULT NULL,
  `PatientName` varchar(255) DEFAULT NULL,
  `Service` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_payments`
--

CREATE TABLE `service_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `receiptNum` varchar(200) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `patientName` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `total` double(10,2) NOT NULL,
  `moneyAmount` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_payments`
--

INSERT INTO `service_payments` (`id`, `payment_id`, `receiptNum`, `doctorName`, `patientName`, `services`, `total`, `moneyAmount`, `status`, `created_at`, `updated_at`) VALUES
(19, 2, '3534334', 'Wida', 'keith', 'Tooth Extraction', 1000.00, '1500', '1', '2023-05-09 23:38:48', '2023-05-09 23:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `tambals`
--

CREATE TABLE `tambals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctorName` varchar(255) DEFAULT NULL,
  `patientName` varchar(255) DEFAULT NULL,
  `services` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` int(200) NOT NULL DEFAULT 0 COMMENT '0 = Not Paid 1 = Paid',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tambals`
--

INSERT INTO `tambals` (`id`, `doctorName`, `patientName`, `services`, `remarks`, `total`, `status`, `created_at`, `updated_at`) VALUES
(89, 'Wida', 'keith', 'Tooth Extraction', NULL, '1000', 1, '2023-05-09 23:37:46', '2023-05-09 23:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `tb_appointment`
--

CREATE TABLE `tb_appointment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `treatment_id` bigint(20) UNSIGNED NOT NULL,
  `date` datetime NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) DEFAULT '0' COMMENT '0 = Pending 1 = Confirm 2 = Arrived\r\n3 = Done 4 = Cancel',
  `select_doctor` int(11) DEFAULT 0 COMMENT '0 = waiting for doctor''s Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_appointment`
--

INSERT INTO `tb_appointment` (`id`, `user_id`, `treatment_id`, `date`, `message`, `status`, `select_doctor`, `created_at`, `updated_at`) VALUES
(40, 14, 15, '2023-05-13 15:33:00', 'hi admin', '3', 6, '2023-05-09 23:34:07', '2023-05-09 23:37:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `name`, `image`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Denture Management', '/storage/category/1680927079DentureManagement.jpg', 'It is essential to maintain health and hygiene of dentures. Taking proper care of dentures ensure they last longer and fit better. ICPA offers a full line of denture care products that are easy to use and provide excellent results.', '2023-04-07 20:11:19', '2023-04-07 20:11:19'),
(2, 'Desensitizing', '/storage/category/1680927262Desensitizing.jpg', 'Dental hypersensitivity is a sharp, painful sensation that occurs in teeth in response to stimuli such as sweet, sour, cold or hot foods and beverages. It affects the quality of life and results in extreme discomfort or an inability to eat or drink certain foods. It is caused due to the opening of the dentinal tubules, after the enamel has been removed by factors such as attrition, abrasion, erosion, or gum recession.\r\n\r\nICPA has a variety of products formulated to deliver immediate relief from sensitivity.\r\n\r\nOur RA Therma-Seal toothpaste contains potassium nitrate, which helps relieve dentinal pain by forming a neurosensory block. It also contains fluoride, which provides cavity protection. RA Therma-Seal is indicated for immediate pain relief after scaling, post bleaching, and root exposures and crown cutting.\r\n\r\nTherma-Seal contains strontium chloride, which acts as a dent in sealant, i.e., seals the open dentinal tubules. Therma-Seal toothpaste is indicated for treatment of sensitivity.', '2023-04-07 20:14:23', '2023-04-07 20:14:23'),
(3, 'KIDS RANGE', '/storage/category/1680927525Kids.jpg', 'Encourage your children to develop good oral habits right from a young age. Choose a toothpaste that contains fluoride as it aids in the prevention of dental caries. ICPA has a special toothpaste for kids – ‘Kids Bunny’ that ensures effective caries prevention and offers long lasting freshness. Kids Bunny toothpaste ensures caries prevention the yummy way.\r\n\r\nICPA’s Kids DYNY toothbrushes is an attractively designed toothbrush with dinosaur figure that will motivate children to adopt brushing habits. Kids DYNY brush has an easy-to-grip handle and soft nylon bristles. Kids DYNY brush is tough on germs and gentle on gums.', '2023-04-07 20:18:45', '2023-04-07 20:18:45'),
(4, 'MECHANICAL PLAQUE CONTROL PRODUCTS', '/storage/category/1680927603Mechanical.jpg', 'Plaque is a major cause of tooth and gum disease. If plaque remains on the teeth for a long time, it can lead to gingivitis and advance to periodontitis. Good oral hygiene is essential for maintaining the health of the teeth and gums.\r\n\r\nICPA has a range of MPCP (mechanical plaque control products) that aid in plaque removal and prevent formation of plaque on the teeth.', '2023-04-07 20:20:03', '2023-04-07 20:20:03'),
(5, 'MOUTH FRESHNER', '/storage/category/1680927687mouthfreshner.jpg', 'Mouth fresheners help freshen the breath, cover up bad Oduor and maintain good oral hygiene. ICPA offers Washup, a pocket-sized mouth freshener in two different flavors, Mint, and Orange to give instant fresh breath. It also contains fluoride that curtails malodor and controls tartar production.', '2023-04-07 20:21:27', '2023-04-07 20:21:27'),
(6, 'MOUTHWASH', '/storage/category/1680927790Mouthwash.jpg', 'Mouthwash plays an important role in one’s oral care routine. Rinsing the mouth helps prevent plaque formation, tooth decay, and bad breath. ICPA’s range of mouth rinses provides effective dental protection.\r\n\r\nHexidine mouthwash contains chlorhexidine gluconate 0.2%, which is a gold standard antiplaque antibacterial agent. It is used for treatment of gum diseases and periodontitis.', '2023-04-07 20:23:10', '2023-04-07 20:23:10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_dental_product`
--

CREATE TABLE `tb_dental_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `stock` int(200) NOT NULL,
  `input_stock` int(200) NOT NULL,
  `price` double(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_dental_product`
--

INSERT INTO `tb_dental_product` (`id`, `category_id`, `name`, `image`, `desc`, `stock`, `input_stock`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 'Denture Adhesive', '/storage/products/1681012355dentureAdhesive.jpg', 'ICPA has a broad line of dental adhesives – Fixon Cream, Fixon Powder and Fixon Super Grip. They are available in different indications, for temporary to permanent cementation. They provide excellent adhesion to restoration materials and considerably improve the bite force.\r\n\r\n\r\n\r\n', 15, 5, 150.00, '2023-04-08 19:52:35', '2023-06-29 21:07:21'),
(2, 1, 'DENTURE CLEANSER', '/storage/products/1681013115dentureCleanser.jpg', 'ICPA denture cleansers are available in different forms such powder, tablet, and brush. Clinically proven, Coincident Powder is recommended for acrylic dentures, acrylic partials, removable restorations, and retainers. This innovative product contains active and inactive ingredients that help remove film, stains and plaque.', 20, 10, 250.00, '2023-04-08 20:05:15', '2023-06-29 21:07:34'),
(3, 2, 'RA Therma-Seal 50gm', '/storage/products/1681013818RA-Thermoseal-50gm.png', 'Dentinal hypersensitivity is a sharp pain produced in the teeth-, in response to stimuli, such as cold, heat, sweet, sour, or contact. It affects the quality of life and results in extreme discomfort or inability to eat or drink certain foods. It is caused due to opening of the dentinal tubules, after the enamel has been removed by factors such as attrition, abrasion, erosion, or gum recession. RA Thermoseal provides relief from dentinal pain by forming a neurosensory block. Fluoride provides cavity protection. It reduces the demineralization of enamel and dentin by decreasing the acid production of bacterial plaque and decreases the solubility of apatite crystals. It readily becomes incorporated as fluorapatite layer, to reduce the dissolution of apatite during acid attacks.', 35, 0, 600.00, '2023-04-08 20:16:58', '2023-06-20 19:04:38'),
(4, 2, 'Thermoseal Repair 100gm', '/storage/products/1681013886RA-Thermoseal-100gm.png', 'Tooth wear and tear due to daily acid attack is now a common occurrence, in fact 1 out 3 adult suffers from enamel erosion. Studies have shown that consumption of carbonated drinks once daily increases risk of erosion by 2.3 times and risk rises to 5.1 times when the consumption is 4 times daily.', 0, 0, 400.00, '2023-04-08 20:18:06', '2023-04-08 20:18:06'),
(5, 2, 'RA Thermoseal 100gm', '/storage/products/1681043958RA-Thermoseal-100gm.png', 'Dental hypersensitivity is a sharp, painful sensation that occurs in teeth in response to stimuli such as sweet, sour, cold or hot foods and beverages. It affects the quality of life and results in extreme discomfort or an inability to eat or drink certain foods.', 0, 0, 400.00, '2023-04-09 04:39:19', '2023-04-09 04:39:19'),
(6, 2, 'Thermoseal Repair 50gm', '/storage/products/1681044044RA-Thermoseal-50gm.png', 'Tooth wear and tear due to daily acid attack is now a common occurrence, in fact 1 out 3 adult suffers from enamel erosion. Studies have shown that consumption of carbonated drinks once daily increases risk of erosion by 2.3 times and risk rises to 5.1 times when the consumption is 4 times daily.', 0, 0, 250.00, '2023-04-09 04:40:44', '2023-04-09 04:40:44'),
(7, 3, 'Dental Gel for Kids', '/storage/products/1681044251Kids-Bunny-380gm.png', 'Brush teeth twice a day or as directed by the dentist or physician. Children under 6 years of age should brush under parents’ supervision and use only a pea sized amount. Do not swallow. Protect from heat.', 0, 0, 50.00, '2023-04-09 04:44:11', '2023-04-09 04:44:11'),
(8, 3, 'KIDS DYNY', '/storage/products/1681044349Kids-Dyny.png', 'Kids Dyny toothbrush has small head that ensure easy maneuvering around your child’s mouth.\r\nEasy grip handle to ensure that the brush wont slip.\r\nHelps in fighting any plaque in your kid’s teeth that can lead to cavities and gum disease.', 0, 0, 25.00, '2023-04-09 04:45:49', '2023-04-09 04:45:49'),
(9, 4, 'Shine-N-Smile', '/storage/products/1681044550Shine-N-Smile.png', 'Mild abrasive with Sodium Mono fluorophosphate 0.8% fluoride content: 800 ppm, non-foaming. Dull, yellowish teeth are a source of constant embarrassment to a person. Shine-N-Smile offers a mild abrasive that polishes the teeth and renders them sparkling white. Use in place of regular toothpaste, twice a week only.', 0, 0, 100.00, '2023-04-09 04:49:10', '2023-04-09 04:49:10'),
(10, 4, 'Thermoseal Floss', '/storage/products/1681044616Thermoseal-Floss.png', 'Waxed dental floss for interdental cleaning, removes plaque and particles in between teeth. 50 meters, waxed, mint flavored.', 0, 0, 30.00, '2023-04-09 04:50:16', '2023-04-09 04:50:16'),
(11, 4, 'Thermoseal Ortho Brush', '/storage/products/1681044839Thermoseal-Ortho-Brush.png', 'THERMOSEAL ORTHO brush is a professionally designed orthodontic brush with soft bristles.\r\nLong outer bristles of 10 mm gently massage the gums and cleans tooth surface, while removing plaque from the gum line.', 0, 0, 50.00, '2023-04-09 04:53:59', '2023-04-09 04:53:59'),
(12, 4, 'Thermoseal Proxa NS', '/storage/products/1681044884Thermoseal-Proxa.png', 'While using either a wide space or narrow space brush, insert it carefully between your teeth. Do not force the brush into small openings.\r\nBegin at the back of your mouth and on the outside row of teeth. Use repeated in and out motions in each interdental space. Do not use a twisting motion.', 0, 0, 150.00, '2023-04-09 04:54:44', '2023-04-09 04:54:44'),
(13, 4, 'Thermoseal Proxa WS', '/storage/products/1681044920Thermoseal-Proxa-WS.png', 'While using either a wide space or narrow space brush, insert it carefully between your teeth. Do not force the brush into small openings.\r\nBegin at the back of your mouth and on the outside row of teeth. Use repeated in and out motions in each interdental space. Do not use a twisting motion. ', 0, 0, 150.00, '2023-04-09 04:55:20', '2023-04-09 04:55:20'),
(14, 4, 'THERMOSEAL Smart Toothbrush', '/storage/products/1681044965THERMOSEAL-Smart-Toothbrush.png', 'Toothbrush with contoured head to ensure better cleaning and a thumb-grip handle for enhanced grip.', 0, 0, 50.00, '2023-04-09 04:56:05', '2023-04-09 04:56:05'),
(15, 4, 'THERMOSEAL Toothbrush', '/storage/products/1681045038THERMOSEAL-Toothbrush.png', 'End-rounded, DuPont bristles with tightly packed tufts and small head. Specially designed for easy brushing.', 0, 0, 50.00, '2023-04-09 04:57:18', '2023-04-09 04:57:18'),
(16, 4, 'THERMOSEAL Ultrasoft', '/storage/products/1681045067THERMOSEAL-Ultrasoft.png', 'Severe Dentinal Hypersensitivity discourages from brushing affected areas. Thermoseal Ultra-soft brush with small head & easy grip ensures effective brushing. For best results, use RA Thermoseal Toothpaste for sensitive teeth.', 0, 0, 50.00, '2023-04-09 04:57:48', '2023-04-09 04:57:48'),
(17, 4, 'Younifloss', '/storage/products/1681045109Younifloss.png', 'Floss with handle for convenient flossing. Multitufted unwaxed floss.', 0, 0, 25.00, '2023-04-09 04:58:29', '2023-04-09 04:58:29'),
(18, 5, 'Wassup 15ml Mint', '/storage/products/1681045254Wassup-15ml-Mint.png', 'Wassup’s refreshing mint flavour ensures instant freshness.\r\nWassup has long lasting action which ensures long term confidence\r\nWassup contains fluoride that makes teeth strong and helps prevent caries.', 0, 0, 150.00, '2023-04-09 05:00:54', '2023-04-09 05:00:54'),
(19, 5, 'Wassup 15ml Orange', '/storage/products/1681045287Wassup-15ml-Orange.png', 'Wassup’s refreshing mint flavour ensures instant freshness.\r\nWassup has long lasting action which ensures long term confidence\r\nWassup contains fluoride that makes teeth strong and helps prevent caries.', 0, 0, 150.00, '2023-04-09 05:01:27', '2023-04-09 05:01:27'),
(20, 6, 'Aquarose', '/storage/products/1681045486aquarose.png', 'Prevention of plaque in absence of brushing\r\nPrevention and treatment of gingivitis\r\nAid in treatment of mouth and throat infections, as an antiseptic mouthwash or a gargle.', 0, 0, 50.00, '2023-04-09 05:04:46', '2023-04-09 05:04:46'),
(21, 6, 'Halyx Ultra(300 ml)', '/storage/products/1681045528Halyx-Ultra.png', 'As Mouthwash: Dispense Halyx Ultra in the measuring cup cum cap up to the 10 ml mark. Swish it inside the mouth for 1 minute and spit out. Use 3 times a day. Can be used for up to 3 months or as directed by your dentist.\r\n', 0, 0, 100.00, '2023-04-09 05:05:28', '2023-04-09 05:05:28'),
(22, 6, 'Hexidine 160ml', '/storage/products/1681045607Hexidine-160ml.jpg', 'Bacterial plaque produces irritants, which cause gingivitis and periodontitis, ultimately leading to loss of teeth. Chemical control of plaque is achieved effectively with Hexidine. As an antimicrobial, Hexidine prevents secondary infections arising out of poor oral hygiene. ', 0, 0, 150.00, '2023-04-09 05:06:47', '2023-04-09 05:06:47'),
(23, 6, 'Hexidine 500ml', '/storage/products/1681045643Hexidine-500ml.png', 'Bacterial plaque produces irritants, which cause gingivitis and periodontitis, ultimately leading to loss of teeth. Chemical control of plaque is achieved effectively with Hexidine. As an antimicrobial, Hexidine prevents secondary infections arising out of poor oral hygiene. ', 0, 0, 200.00, '2023-04-09 05:07:23', '2023-04-09 05:07:23'),
(24, 6, 'Hexidine 80ml', '/storage/products/1681045679Hexidine-80ml.jpg', 'Bacterial plaque produces irritants, which cause gingivitis and periodontitis, ultimately leading to loss of teeth. Chemical control of plaque is achieved effectively with Hexidine. As an antimicrobial, Hexidine prevents secondary infections arising out of poor oral hygiene. ', 0, 0, 100.00, '2023-04-09 05:07:59', '2023-04-09 05:07:59'),
(25, 6, 'Hexidine EP 150ml', '/storage/products/1681045735Hexidine-EP-150ml.png', 'Chlorhexidine gluconate solution I.P. dilute to chlorhexidine gluconate 0.12% W/V in pleasantly flavored aqueous base.\r\nPrevention of plaque in absence of brushing\r\nPrevention and treatment of gingivitis\r\nTreatment of oral candidiasis\r\nControlling secondary bacterial infections for aphthous ulcers\r\nAid in treatment of mouth and throat infections.', 0, 0, 150.00, '2023-04-09 05:08:55', '2023-04-09 05:08:55'),
(26, 6, 'Hexidine Fresh', '/storage/products/1681045783Hexidine-fresh.jpg', 'Chlorhexidine gluconate solution I.P. diluted to Chlorhexidine gluconate 0.2% w/v in a pleasantly flavored base.\r\n\r\nBacterial plaque produces irritants, which cause gingivitis and periodontitis, ultimately leading to loss of teeth. Chemical control of plaque is achieved effectively with Hexidine Fresh 300ml. As an antimicrobial, Hexidine Fresh 300ml prevents secondary infections arising out of poor oral hygiene.\r\n\r\nIt is particularly useful in effective plaque control for:\r\n\r\nPatients undergoing gum and implant surgeries\r\nHexidine Fresh 300ml begins its microbicidal effect in 15 seconds after contact and its bacteriostatic action lasts for 12 hours.', 0, 0, 150.00, '2023-04-09 05:09:44', '2023-04-09 05:09:44');

-- --------------------------------------------------------

--
-- Table structure for table `tb_medicine`
--

CREATE TABLE `tb_medicine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `quantity` varchar(200) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_medicine`
--

INSERT INTO `tb_medicine` (`id`, `name`, `desc`, `quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'IBUPROFEN 100mg', 'Take 3x a day', '', '0', '2023-04-17 07:48:08', '2023-04-17 07:48:08'),
(2, 'Amoxicillin', 'Take 3x a day', '', '0', '2023-04-17 07:58:31', '2023-04-17 07:58:31'),
(3, 'Clindamycin', 'Take 3x a day', '', '0', '2023-04-17 08:00:06', '2023-04-17 08:00:06'),
(4, 'Clarithromycin', 'Take 3x a day', '', '0', '2023-04-17 08:00:06', '2023-04-17 08:00:06'),
(5, 'Erythromycin', 'Take 3x a day', '', '0', '2023-04-17 08:01:29', '2023-04-17 08:01:29'),
(6, 'Salbutamol inhaler', 'Take 3x a day', '', '0', '2023-04-17 08:03:02', '2023-04-17 08:03:02'),
(7, ' Chlorphenamine', 'Take 3x a day', '', '0', '2023-04-17 08:03:19', '2023-04-17 08:03:19'),
(8, 'Parenteral midazolam /diazepam', 'Take 3x a day', '', '0', '2023-04-17 08:03:52', '2023-04-17 08:03:52'),
(9, 'Aspirin, 300-mg dispersible tablets ', 'Take 3x a day', '', '0', '2023-04-17 08:03:52', '2023-04-17 08:03:52'),
(10, 'Morphine', 'Take 3x a day', '', '0', '2023-04-17 08:04:39', '2023-04-17 08:04:39'),
(11, ' Ammonia tabs', 'Take 3x a day', '', '0', '2023-04-17 08:04:57', '2023-04-17 08:04:57'),
(12, 'AnaphylaxisAnaphylaxis', 'Take 3x a day', '', '0', '2023-04-17 08:05:19', '2023-04-17 08:05:19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_p_info`
--

CREATE TABLE `tb_p_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Personal_information` bigint(20) UNSIGNED NOT NULL,
  `month` varchar(255) NOT NULL COMMENT '0 = January 1 = February 2 = March 3 = April 4 = May 5 = June 6 = July 7 = August 8 = September 9 = October 10 = November 11 = December',
  `day` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0' COMMENT '0 = single 1 = married 2 = divorced 3 = Separated 4 = Widowed',
  `gender` varchar(255) NOT NULL COMMENT '0 = Male 1 = Female',
  `location` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `zip_code` int(200) NOT NULL,
  `E_firstname` varchar(255) NOT NULL,
  `E_lastname` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `E_contact_num` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `height` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_p_info`
--

INSERT INTO `tb_p_info` (`id`, `Personal_information`, `month`, `day`, `year`, `status`, `gender`, `location`, `state`, `zip_code`, `E_firstname`, `E_lastname`, `relationship`, `E_contact_num`, `weight`, `height`, `created_at`, `updated_at`) VALUES
(2, 5, '2', 5, 2000, '0', '1', 'Santa Ana', 'Tagoloan Misamis oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'2inch', '2023-04-06 22:09:05', '2023-04-06 22:09:05'),
(3, 7, '1', 3, 2002, '0', '1', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'7inch', '2023-04-09 19:45:37', '2023-04-09 19:45:37'),
(4, 8, '0', 6, 2004, '3', '1', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'2inch', '2023-04-10 18:03:08', '2023-04-10 18:03:08'),
(5, 9, '8', 5, 1997, '2', '0', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'2inch', '2023-04-10 18:53:10', '2023-04-10 18:53:10'),
(6, 10, '8', 7, 1998, '1', '0', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'7inch', '2023-04-17 18:14:11', '2023-04-17 18:14:11'),
(14, 1, '8', 6, 1998, '0', '0', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'7inch', '2023-05-09 18:34:58', '2023-05-09 18:34:58'),
(17, 14, '10', 6, 2000, '0', '0', 'Santa Ana', 'Tagoloan Misamis Oriental', 9001, 'Venus', 'Reyes', 'Mother', '09057317205', '70 kls.', '5\'7inch', '2023-05-09 23:33:36', '2023-05-09 23:33:36');

-- --------------------------------------------------------

--
-- Table structure for table `tb_treatments`
--

CREATE TABLE `tb_treatments` (
  `treatment_id` bigint(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_treatments`
--

INSERT INTO `tb_treatments` (`treatment_id`, `name`, `image`, `description`, `price`, `created_at`, `updated_at`) VALUES
(5, 'Dental Crowns', '/storage/treatments/1680596903crowns.png', 'A crown is a type of cap that completely covers a real tooth. It\'s usually made from metal, porcelain fused to metal, or ceramic and is fixed in your mouth.\r\n\r\nCrowns can be fitted where a tooth has broken, decayed or been damaged, or just to make a tooth look better.\r\n\r\nTo fit a crown, the old tooth will need to be drilled down so it\'s like a small peg the crown will be fixed on to.\r\n\r\nIt can take some time for the lab to prepare a new crown, so you probably will not have the crown fitted on the same day.', 23000.00, '2023-04-04 00:28:23', '2023-04-04 00:28:23'),
(6, 'Tooth Fillings', '/storage/treatments/1680597431filling.png', 'Fillings are used to repair a hole in a tooth caused by decay. The most common type of filling is an amalgam made from a mixture of metals including mercury, silver, tin and copper.\r\n\r\nYour dentist will offer the most appropriate type of filling according to your clinical needs. This includes white fillings, if appropriate.', 2000.00, '2023-04-04 00:37:11', '2023-04-04 00:37:11'),
(7, 'Root Canal', '/storage/treatments/1681043180png', 'Root canal treatment (also called endodontics) tackles infection at the centre of a tooth (the root canal system).\r\n\r\nWhen the blood or nerve supply of the tooth has become infected, the infection will spread and the tooth may need to be taken out if root canal treatment is not carried out.\r\n\r\nDuring treatment, all the infection is removed from inside the root canal system.\r\n\r\nThe root canal is filled and the tooth is sealed with a filling or crown to stop it becoming infected again.\r\n\r\nRoot canal treatment usually requires 2 or more visits to your dentist.', 5000.00, '2023-04-04 00:38:18', '2023-04-09 04:26:20'),
(8, 'Scale and polish', '/storage/treatments/1680597550cleaning.png', 'Scale and polish is where your teeth are professionally cleaned by the hygienist. It involves carefully removing the deposits that build up on the teeth (tartar).', 800.00, '2023-04-04 00:39:10', '2023-04-04 00:39:10'),
(9, 'Wisdom tooth removal', '/storage/treatments/1680597786wisdom.png', 'The wisdom teeth grow at the back of your gums and are the last teeth to come through, usually in your late teens or early twenties.\r\n\r\nMost people have 4 wisdom teeth, 1 in each corner.\r\n\r\nWisdom teeth can sometimes emerge at an angle or get stuck and only emerge partially. Wisdom teeth that grow through in this way are known as impacted.\r\n\r\nIf your wisdom teeth are impacted but are not causing any problems, they do not usually need to be removed.\r\n\r\nBut sometimes they cause problems and can be removed on the NHS. Your dentist may perform the procedure, or they may refer you to a dentist with a special interest, or to a hospital\'s oral and maxillofacial unit.\r\n\r\nYou\'ll usually have to pay a charge for wisdom tooth removal. If you\'re referred to a hospital for NHS treatment, you will not have to pay a charge.', 10000.00, '2023-04-04 00:43:06', '2023-04-04 00:43:06'),
(10, 'Dental implants', '/storage/treatments/1680597950implant.png', 'Implants are a fixed alternative to removable dentures.\r\n\r\nYou can use implants to replace just a single tooth or several teeth.\r\n\r\nTo fit an implant, titanium screws are drilled into the jaw bone to support a crown, bridge or denture.\r\n\r\nReplacement parts take time to prepare because they need to fit your mouth and other teeth properly. This means they may not be available on your first visit to the dentist.\r\n\r\nImplants are usually only available privately and are expensive. They\'re sometimes available on the NHS for patients who cannot wear dentures or whose face and teeth have been damaged, such as people who have had mouth cancer or an accident that\'s knocked a tooth out.', 10000.00, '2023-04-04 00:45:50', '2023-04-04 00:45:50'),
(11, 'Dentures or false teeth', '/storage/treatments/1680598193dentures.png', 'More commonly known as false teeth, dentures are fitted in place of natural teeth.\r\n\r\nA full set is used to replace all your teeth. A partial set is used to replace 1 or more missing teeth.\r\n\r\nDentures are custom-made using impressions (mouldings) from your gums. They\'re usually made from metal or plastic.\r\n\r\nThey\'re removable, and you can clean them by soaking them in a cleaning solution.\r\n\r\nDentures are important if you lose your natural teeth, as losing your teeth makes it difficult to chew your food, which will adversely affect your diet and may cause your facial muscles to sag.', 5000.00, '2023-04-04 00:49:54', '2023-04-04 00:49:54'),
(12, 'Broken or knocked out tooth', '/storage/treatments/1680598370broken.png', 'It\'s common to break, chip or knock out a tooth.\r\n\r\nIf the tooth is just chipped, make a non-emergency dental appointment to have it smoothed down and filled or have a crown.\r\n\r\nIf it’s an adult (permanent) tooth, try to put the knocked out tooth back into the hole in the gum. Make sure the tooth is clean and you do not touch the root. If it does not go in easily, put it in milk or saliva.\r\n\r\nIf it’s a baby tooth, do not put it back in. It could damage the tooth growing underneath.', 2000.00, '2023-04-04 00:52:50', '2023-04-04 00:52:50'),
(15, 'Tooth Extraction', '/storage/treatments/1680598672paibot.png', 'A tooth extraction is a procedure to remove a tooth from the gum socket. It is usually done by a general dentist, an oral surgeon, or a periodontist. The appearance of normal teeth varies, especially the molars. Abnormally shaped teeth can result from many different conditions.', 1000.00, '2023-04-04 00:57:53', '2023-04-04 00:57:53'),
(26, 'Dental Braces', '/storage/treatments/1680626677braces.png', 'Braces (orthodontic treatment) straighten or move teeth to improve the appearance of the teeth and how they work.\r\n\r\nBraces can be removable, so you can take them out and clean them, or fixed, so they\'re stuck to your teeth and you cannot take them out.\r\n\r\nThey can be made of metal, plastic or ceramic. Invisible braces are made of a clear plastic.\r\n\r\nBraces are available on the NHS for children and, occasionally, for adults, depending on the clinical need.', 40000.00, '2023-04-04 08:44:37', '2023-04-04 08:44:37'),
(27, 'Teeth whitening', '/storage/treatments/1680626801whitening.png', 'Teeth whitening involves bleaching your teeth to make them a lighter colour.\r\n\r\nTeeth whitening cannot make your teeth brilliant white, but it can lighten the existing colour by several shades.\r\n\r\nStandard teeth whitening involves 2 to 3 visits to the dentist, plus sessions at home wearing a mouthguard containing bleaching gel.\r\n\r\nYou usually need to wear the mouthguard and bleaching gel for a specified period of time over a few weeks.\r\n\r\nAnother procedure called laser whitening or power whitening is done at the dentist\'s surgery and takes about an hour. \r\n\r\nTeeth whitening is cosmetic and therefore generally only available privately.', 5000.00, '2023-04-04 08:46:41', '2023-04-04 08:46:41'),
(28, 'Dental veneers', '/storage/treatments/1680626887veneers.png', 'Veneers are new facings for teeth that disguise a discoloured or chipped tooth.\r\n\r\nTo fit a veneer, the front of the tooth is drilled away a little.\r\n\r\nAn impression is taken, and a thin layer of porcelain is fitted over the front of the tooth (similar to how a false fingernail is applied).\r\n\r\nVeneers are generally only available privately, unless you can show a clinical need for them.', 10000.00, '2023-04-04 08:48:08', '2023-04-04 08:48:08'),
(29, 'Consultation', '/storage/treatments/1680626980checkup-removebg-preview.png', 'A consultation is basically an evaluation of the current condition of your teeth. If you haven\'t seen a dentist in a while, you may be worried or embarrassed about the current state of your teeth. A good dentist won\'t be judgmental or make you feel bad about your current dental health.', 800.00, '2023-04-04 08:49:40', '2023-04-04 08:49:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `registration_num` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 = patient 1 = admin 2 = dentist',
  `dentist_pro` varchar(255) DEFAULT NULL COMMENT '0 = General Dentist 1 = Orthodontist 2 = Periodontist 3 = Oral and Maxillofacial Surgeon 4 = Dental Hygienist',
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `firstname`, `lastname`, `username`, `email`, `phone_number`, `photo`, `registration_num`, `user_type`, `dentist_pro`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ryan', 'Reyes', 'ryan_143', 'ryanjaytagolimotreyes@gmail.com', '09358554398', '202304100519ryan.jpg', NULL, 0, NULL, '$2y$10$SdGPaqpSkKXCLOggMtSVteBtPL7vS4VEEe5PFTV034fQ/b7LQVlqC', '2023-04-06 03:28:20', '2023-04-09 22:36:27'),
(2, 'Faith', 'Dollera', 'admin_143', 'admin@gmail.com', '09123456789', '202304100735faith.jpg', NULL, 1, NULL, '$2y$10$yjLhUwER0XZFay.ZPQ8smOafMNvsgUOXT.CK1JW4dk48VqImFBBCG', '2023-04-06 03:36:42', '2023-04-09 23:35:29'),
(3, 'Jason', 'Dahang', 'jason_123', 'jason@gmail.com', '09123456789', '202304110143jason.jpg', '1002-2324', 2, '0', '$2y$10$eoMfRyl2SPYn1EvfAU0J6.NZn.8j7EzJ.mCskp3kwl3TytJ3V2r8u', '2023-04-06 03:52:37', '2023-04-10 17:43:27'),
(4, 'Aeron', 'Alajenio', 'aeron_123', 'aeron@gmail.com', '09123456789', '202304091634aeron.jpg', '1003-1005', 2, '1', '$2y$10$2dqJEb3xzx1CHo74yJB1bOQdPNbrP2u5Vq4XJgjqglNUEK0mSOAgG', '2023-04-06 06:01:40', '2023-04-09 08:34:55'),
(5, 'Shemieneth', 'Merida', 'Shemie143', 'shemnagac@gmail.com', '09123456789', '202304100614shem.jpg', NULL, 0, NULL, '$2y$10$XQzW6l6XzpqgRw1UCwJkQe0Ta7dSs23gdcJQx5k3BHHtSigw1/9.u', '2023-04-06 21:59:00', '2023-04-09 22:14:46'),
(6, 'Wida', 'Oclaman', 'wida_123', 'wida@gmail.com', '09123456789', '202304091736wida.jpg', '1002-2324', 2, '3', '$2y$10$zsmisTzJyBhIcB9A9MKTwu7zlcPMPY.g2NYhMLFf35mN/Z12Nmg3G', '2023-04-09 09:23:09', '2023-04-09 09:36:11'),
(7, 'Maria', 'Antivola', 'maria_123', 'maria@gmail.com', '09123456789', '202304100513maria.jpg', NULL, 0, NULL, '$2y$10$fxV9PB47erYZATqIkkf8b.WVBbRnjtSQdjE.o.SQ5egbgDEvPKwMC', '2023-04-09 19:41:10', '2023-04-09 21:13:22'),
(8, 'Novelyn', 'Daculan', 'nov_123', 'shemnagac@gmail.com', '09123456789', NULL, NULL, 0, NULL, '$2y$10$VneZvnpTe9SHOc4LEX8o8..CQbD6fNT2N1.G2cWBJrSabIhWXKjTK', '2023-04-10 18:02:16', '2023-04-10 18:02:16'),
(9, 'Felix', 'Quieta', 'felix_123', 'shemnagac@gmail.com', '09123456789', '202304110300ryan.jpg', NULL, 0, NULL, '$2y$10$/x0egHbF1hieXuUDnX3x/up0zagTNYgsyvl8uHharlnNWRw.RfWOS', '2023-04-10 18:51:53', '2023-04-10 19:00:38'),
(10, 'Mark', 'Sacayan', 'mark_123', 'shemnagac@gmail.com', '09123456789', NULL, NULL, 0, NULL, '$2y$10$PPX9xMImhZWWBjB2XPZOH.sFcMILuhe/hkvtxy3/LADTgENeKNJF6', '2023-04-17 18:12:20', '2023-04-17 18:12:20'),
(14, 'keith', 'Jumadla', 'keith_123', 'keith@gmail.com', '09358554398', NULL, NULL, 0, NULL, '$2y$10$71snCARyE.zy3WpdIaKe0.nW9McgjzpG2tvtIBXwerJtc.07HEjwm', '2023-05-09 23:32:05', '2023-05-09 23:32:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_drugs`
--
ALTER TABLE `medical_drugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order_lists`
--
ALTER TABLE `order_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescription_payments`
--
ALTER TABLE `prescription_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_payments`
--
ALTER TABLE `service_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambals`
--
ALTER TABLE `tambals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `treatment_id` (`treatment_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_dental_product`
--
ALTER TABLE `tb_dental_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `tb_medicine`
--
ALTER TABLE `tb_medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_p_info`
--
ALTER TABLE `tb_p_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_treatments`
--
ALTER TABLE `tb_treatments`
  ADD PRIMARY KEY (`treatment_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tb_user_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `medical_drugs`
--
ALTER TABLE `medical_drugs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `order_lists`
--
ALTER TABLE `order_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_payments`
--
ALTER TABLE `prescription_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `service_payments`
--
ALTER TABLE `service_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tambals`
--
ALTER TABLE `tambals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_dental_product`
--
ALTER TABLE `tb_dental_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_medicine`
--
ALTER TABLE `tb_medicine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_p_info`
--
ALTER TABLE `tb_p_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_treatments`
--
ALTER TABLE `tb_treatments`
  MODIFY `treatment_id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `tb_appointment`
--
ALTER TABLE `tb_appointment`
  ADD CONSTRAINT `tb_appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id`),
  ADD CONSTRAINT `tb_appointment_ibfk_2` FOREIGN KEY (`treatment_id`) REFERENCES `tb_treatments` (`treatment_id`);

--
-- Constraints for table `tb_dental_product`
--
ALTER TABLE `tb_dental_product`
  ADD CONSTRAINT `tb_dental_product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tb_category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
