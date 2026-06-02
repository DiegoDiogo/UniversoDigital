-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.10.0.7000
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para universo_digital
CREATE DATABASE IF NOT EXISTS `universo_digital` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci */;
USE `universo_digital`;

-- Copiando estrutura para tabela universo_digital.cache
DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.cache: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.cache_locks
DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.cache_locks: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.empresas
DROP TABLE IF EXISTS `empresas`;
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela universo_digital.empresas: ~5 rows (aproximadamente)
INSERT INTO `empresas` (`id`, `nome`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Epson', '1747421213.png', '2025-05-14 19:50:27', '2025-05-16 21:46:53', NULL),
	(2, 'Brother', '1747421204.png', '2025-05-14 20:32:53', '2025-05-16 21:46:44', NULL),
	(4, 'Kyocera', '1747421195.png', '2025-05-14 20:43:22', '2025-05-16 21:46:35', NULL),
	(5, 'Ricoh', '1747421186.png', '2025-05-16 18:44:10', '2025-05-16 21:46:26', NULL);

-- Copiando estrutura para tabela universo_digital.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
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

-- Copiando dados para a tabela universo_digital.failed_jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.jobs
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.jobs: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.job_batches
DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.job_batches: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.migrations: ~2 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1);

-- Copiando estrutura para tabela universo_digital.parceiros
DROP TABLE IF EXISTS `parceiros`;
CREATE TABLE IF NOT EXISTS `parceiros` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela universo_digital.parceiros: ~17 rows (aproximadamente)
INSERT INTO `parceiros` (`id`, `nome`, `imagem`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'INSP', '1749235732.png', '2025-06-06 21:29:13', '2025-06-06 21:48:52', NULL),
	(3, 'Engie', '1749235756.png', '2025-06-06 21:49:16', '2025-06-06 21:49:16', NULL),
	(4, 'Prohome', '1749235781.png', '2025-06-06 21:49:41', '2025-06-06 21:49:41', NULL),
	(5, 'Cassol', '1749235806.png', '2025-06-06 21:50:06', '2025-06-06 21:50:06', NULL),
	(6, 'Craft', '1749235819.jpg', '2025-06-06 21:50:19', '2025-06-06 21:50:19', NULL),
	(7, 'Barra EYE', '1749235837.png', '2025-06-06 21:50:37', '2025-06-06 21:50:37', NULL),
	(8, 'Enaval', '1749235854.jpg', '2025-06-06 21:50:54', '2025-06-06 21:50:54', NULL),
	(9, 'Rodofly', '1749235924.png', '2025-06-06 21:52:04', '2025-06-06 21:52:04', NULL),
	(10, 'Quality house', '1749235943.png', '2025-06-06 21:52:23', '2025-06-06 21:52:23', NULL),
	(11, 'Katrium', '1749235978.png', '2025-06-06 21:52:58', '2025-06-06 21:52:58', NULL),
	(12, 'Montaury', '1749236004.png', '2025-06-06 21:53:24', '2025-06-06 21:53:24', NULL),
	(13, 'MLA', '1749236022.png', '2025-06-06 21:53:42', '2025-06-06 21:53:42', NULL),
	(14, 'OceanFront', '1749236057.png', '2025-06-06 21:54:17', '2025-06-06 21:54:17', NULL),
	(15, 'WaterWays', '1749236215.png', '2025-06-06 21:54:38', '2025-06-06 21:56:55', NULL),
	(16, 'Conspiração', '1749236109.png', '2025-06-06 21:55:10', '2025-06-06 21:55:10', NULL),
	(17, 'Morena Filmes', '1749236137.png', '2025-06-06 21:55:37', '2025-06-06 21:55:37', NULL),
	(18, 'Mundial', '1749236158.png', '2025-06-06 21:55:58', '2025-06-06 21:55:58', NULL);

-- Copiando estrutura para tabela universo_digital.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.password_reset_tokens: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela universo_digital.produtos
DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) DEFAULT NULL,
  `imagem` varchar(250) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- Copiando dados para a tabela universo_digital.produtos: ~12 rows (aproximadamente)
INSERT INTO `produtos` (`id`, `nome`, `imagem`, `descricao`, `id_empresa`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747421546.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 1, '2025-05-15 16:05:45', '2025-05-15 16:05:45', NULL),
	(2, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655270.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 4, '2025-05-15 16:18:14', '2025-05-19 14:47:50', NULL),
	(3, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655289.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 1, '2025-05-15 16:05:45', '2025-05-19 14:48:09', NULL),
	(4, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655307.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 1, '2025-05-15 16:05:45', '2025-05-19 14:48:27', NULL),
	(5, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655318.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 1, '2025-05-15 16:05:45', '2025-05-19 14:48:38', NULL),
	(6, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655333.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 2, '2025-05-15 16:05:45', '2025-05-19 14:48:53', NULL),
	(7, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655362.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 4, '2025-05-15 16:05:45', '2025-05-19 14:49:22', NULL),
	(8, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655377.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 4, '2025-05-15 16:05:45', '2025-05-19 14:49:37', NULL),
	(9, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655457.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 5, '2025-05-15 16:05:45', '2025-05-19 14:50:57', NULL),
	(10, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655447.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 5, '2025-05-15 16:05:45', '2025-05-19 14:50:47', NULL),
	(11, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655435.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 5, '2025-05-15 16:05:45', '2025-05-19 14:50:35', NULL),
	(12, 'MFC-L5902DW Multifuncional Laser Monocromática', '1747655427.png', 'A multifuncional MFC-L5902DW é um equipamento laser monocromático durável, ideal para grupos de trabalho de médio porte, com altos volumes de impressão. Grande economia e baixo custo por página devido ao seu cartucho de toner de rendimento (8.000 páginas) incluso com o equipamento e toners de reposição para 12.000 impressões. Maximize a produtividade de seu grupo de trabalho com impressões rápidas de até 40ppm (A4), SPDF (leitura frente e verso do documento em uma única passagem) com capacidade para 70 folhas e função frente e verso automática na impressão, cópia e digitalização. Grande capacidade de papel de 250 folhas, com expansão para atender praticamente qualquer escritório, adicione bandejas opcionais para aumentar a capacidade para 1.340 folhas. Oferece recursos avançados , incluindo vários destinos de digitalização e conexão com nuvens populares para ajudar a otimizar o seu fluxo de trabalho, arquitetura de integração BSI (Brother Solutions Interface), assim programadores e parceiros de softwares da sua empresa poderão acessar os serviços web internos do equipamento para criar soluções personalizadas, o que o torna uma solução de impressão completa e personalizada para seu negócio.', 2, '2025-05-15 16:05:45', '2025-05-19 14:50:27', NULL);

-- Copiando estrutura para tabela universo_digital.sessions
DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.sessions: ~6 rows (aproximadamente)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('3RB7RjlzKfIdTanomWgYTRp5NvsZqS28myVZHjfp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXVRRFpIRWpQOWFSMk9qemJwOExuYkdUdmQzQVptMXhsaUVKVEdydSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdG9yYWdlL2ltYWdlbnMvcHJvZHV0b3MvMTc0NzY1NTM2Mi5wbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749228954),
	('6KEul5q4eJeseqaSAlm4hDuRP8Fw6MqrYvM1yTyP', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRzIyQ1M1cFdVYjM4bW9OWXVvTHdyb0ZaYm9HaVRaYmhSU1ZWVm9ZTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749236671),
	('HsYVePHYKxU2XMGmqxoKtjv7GIbrKjW5rWIyKaLK', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiejZ3U1JlQnFpbzVGU0ZIQnk5eFdCdGxCVUdzMkcwZzRvUUF4WFR6NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1749228952),
	('UDSL8HPZDeqUWsdorVgu0ilz4G4E6D35rKsNp3fL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRElRZ1ZheXE5eFF3V2NuQ0hhTDg1TEJ1M0pnVVVTQTNmcUkwbmVmZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdG9yYWdlL2ltYWdlbnMvcHJvZHV0b3MvMTc0NzY1NTMxOC5wbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749228955),
	('vu1k2n4yElDk1OzGcVNUaepgcNCA4bdZxbSPIe51', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVRoV1dobFdJTGdvZDdVZTZPMnJRcFozeEdRUXdtbWxvZEZLR0N3dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdG9yYWdlL2ltYWdlbnMvcHJvZHV0b3MvMTc0NzY1NTMzMy5wbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749228954),
	('YfiiOgWLorqxNruaUfdcWFh9VO2YwdgtoCctboTL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36 Edg/137.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXlNVmszcFR0OHFXSkVwZHZUZE5mT0lWeWdub0hFa0ptSWVWUHJ0RyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdG9yYWdlL2ltYWdlbnMvcHJvZHV0b3MvMTc0NzY1NTMwNy5wbmciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1749228955);

-- Copiando estrutura para tabela universo_digital.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela universo_digital.users: ~0 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'teste', 'teste@teste.com', NULL, '$2y$12$8WcLRz49mcvU2QLL2Rhtzuhb/L.v5b33sXIZzCHlxva6ib/yQDcG.', NULL, '2025-05-14 17:39:40', '2025-05-14 17:47:02', NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
