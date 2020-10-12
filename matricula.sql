-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Out-2020 às 15:51
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matricula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bolsa_alunos`
--

CREATE TABLE `bolsa_alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bolsa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `bolsa_alunos`
--

INSERT INTO `bolsa_alunos` (`id`, `id_user`, `name`, `bolsa`, `created_at`, `updated_at`) VALUES
(1, 1, 'Maria dos anjos', 'testes testes ', '2020-10-10 03:00:00', '2020-10-10 03:00:00'),
(5, 1, 'teste 2', 'asdfasdf', NULL, NULL),
(6, 1, 'teste teste teste ', '', NULL, NULL),
(7, 2, 'Maria dos Anjos', 'Bolsa OK', NULL, NULL),
(10, 2, 'Joao Teste', 'Teste', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem_alunos`
--

CREATE TABLE `mensagem_alunos` (
  `id` int(10) UNSIGNED NOT NULL,
  `mensagem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_bolsa` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `mensagem_alunos`
--

INSERT INTO `mensagem_alunos` (`id`, `mensagem`, `id_bolsa`, `created_at`, `updated_at`) VALUES
(2, 'Essa é a primeira mesnagem', 1, '2020-10-10 03:00:00', '2020-10-10 03:00:00'),
(3, 'Essa é a segunda mensagem', 1, NULL, NULL),
(4, 'Mensagem 3 será que vai aparece todos os documentos', 6, '2020-10-11 03:00:00', '2020-10-11 03:00:00'),
(5, 'Teste 3', 7, NULL, NULL),
(6, 'Teste Mensagem 4', 10, '2020-10-11 03:00:00', '2020-10-08 03:00:00'),
(7, 'Teste da Nova mensagem ', 6, '2020-10-23 03:00:00', '2020-10-29 03:00:00'),
(8, 'Teste da Nova mensagem ', 6, '2020-10-23 03:00:00', '2020-10-29 03:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_11_005933_create_bolsa_alunos_table', 1),
(5, '2020_10_11_011031_create_mensagem_alunos_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jose', 'jose@jose.com.br', '2020-10-10 03:00:00', '123456', NULL, '2020-10-10 03:00:00', '2020-10-10 03:00:00'),
(2, 'Maria', 'maria@gmail.com', '2020-10-11 03:00:00', '123456', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bolsa_alunos`
--
ALTER TABLE `bolsa_alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bolsa_alunos_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mensagem_alunos`
--
ALTER TABLE `mensagem_alunos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mensagem_alunos_id_bolsa_foreign` (`id_bolsa`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `bolsa_alunos`
--
ALTER TABLE `bolsa_alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mensagem_alunos`
--
ALTER TABLE `mensagem_alunos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `bolsa_alunos`
--
ALTER TABLE `bolsa_alunos`
  ADD CONSTRAINT `bolsa_alunos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `mensagem_alunos`
--
ALTER TABLE `mensagem_alunos`
  ADD CONSTRAINT `mensagem_alunos_id_bolsa_foreign` FOREIGN KEY (`id_bolsa`) REFERENCES `bolsa_alunos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
