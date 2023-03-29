-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost:8889
-- 生成日時: 2023 年 3 月 29 日 06:25
-- サーバのバージョン： 5.7.39
-- PHP のバージョン: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `kaitorikun`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'fa-bar-chart', '/', NULL, NULL, '2023-03-27 09:19:45'),
(2, 0, 2, 'Admin', 'fa-tasks', '', NULL, NULL, '2023-03-27 09:19:45'),
(3, 2, 3, 'Users', 'fa-users', 'auth/users', NULL, NULL, '2023-03-27 09:19:45'),
(4, 2, 5, 'Roles', 'fa-user', 'auth/roles', NULL, NULL, '2023-03-27 09:19:40'),
(5, 2, 6, 'Permission', 'fa-ban', 'auth/permissions', NULL, NULL, '2023-03-27 09:19:40'),
(6, 2, 7, 'Menu', 'fa-bars', 'auth/menu', NULL, NULL, '2023-03-27 09:19:40'),
(7, 2, 8, 'Operation log', 'fa-history', 'auth/logs', NULL, NULL, '2023-03-27 09:19:40'),
(8, 2, 4, 'staff', 'fa-users', 'product/users', NULL, '2023-03-27 09:19:06', '2023-03-27 09:20:19');

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '::1', '[]', '2023-03-27 09:17:47', '2023-03-27 09:17:47'),
(2, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:17:53', '2023-03-27 09:17:53'),
(3, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:18:05', '2023-03-27 09:18:05'),
(4, 1, 'admin/auth/menu', 'POST', '::1', '{\"parent_id\":\"0\",\"title\":\"staff\",\"icon\":\"fa-users\",\"uri\":null,\"roles\":[null],\"permission\":null,\"_token\":\"guxemL8Lrc0BFiycdshPmWstcLDI35bjspEOAmzp\"}', '2023-03-27 09:19:06', '2023-03-27 09:19:06'),
(5, 1, 'admin/auth/menu', 'GET', '::1', '[]', '2023-03-27 09:19:07', '2023-03-27 09:19:07'),
(6, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:14', '2023-03-27 09:19:14'),
(7, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:18', '2023-03-27 09:19:18'),
(8, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:39', '2023-03-27 09:19:39'),
(9, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:39', '2023-03-27 09:19:39'),
(10, 1, 'admin/auth/menu', 'POST', '::1', '{\"_token\":\"guxemL8Lrc0BFiycdshPmWstcLDI35bjspEOAmzp\",\"_order\":\"[{\\\"id\\\":8},{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}', '2023-03-27 09:19:40', '2023-03-27 09:19:40'),
(11, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:41', '2023-03-27 09:19:41'),
(12, 1, 'admin/auth/menu', 'POST', '::1', '{\"_token\":\"guxemL8Lrc0BFiycdshPmWstcLDI35bjspEOAmzp\",\"_order\":\"[{\\\"id\\\":1},{\\\"id\\\":2,\\\"children\\\":[{\\\"id\\\":3},{\\\"id\\\":8},{\\\"id\\\":4},{\\\"id\\\":5},{\\\"id\\\":6},{\\\"id\\\":7}]}]\"}', '2023-03-27 09:19:45', '2023-03-27 09:19:45'),
(13, 1, 'admin/auth/menu', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:19:46', '2023-03-27 09:19:46'),
(14, 1, 'admin/auth/menu/8/edit', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:20:03', '2023-03-27 09:20:03'),
(15, 1, 'admin/auth/menu/8', 'PUT', '::1', '{\"parent_id\":\"2\",\"title\":\"staff\",\"icon\":\"fa-users\",\"uri\":\"product\\/users\",\"roles\":[null],\"permission\":null,\"_token\":\"guxemL8Lrc0BFiycdshPmWstcLDI35bjspEOAmzp\",\"_method\":\"PUT\",\"_previous_\":\"http:\\/\\/localhost\\/admin\\/auth\\/menu\"}', '2023-03-27 09:20:19', '2023-03-27 09:20:19'),
(16, 1, 'admin/auth/menu', 'GET', '::1', '[]', '2023-03-27 09:20:20', '2023-03-27 09:20:20'),
(17, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:21:14', '2023-03-27 09:21:14'),
(18, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:21:17', '2023-03-27 09:21:17'),
(19, 1, 'admin/auth/roles', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:21:21', '2023-03-27 09:21:21'),
(20, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:21:23', '2023-03-27 09:21:23'),
(21, 1, 'admin/auth/users', 'GET', '::1', '[]', '2023-03-27 09:24:08', '2023-03-27 09:24:08'),
(22, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:24:11', '2023-03-27 09:24:11'),
(23, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:24:36', '2023-03-27 09:24:36'),
(24, 1, 'admin/auth/roles', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:24:39', '2023-03-27 09:24:39'),
(25, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:27', '2023-03-27 09:27:27'),
(26, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:34', '2023-03-27 09:27:34'),
(27, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:39', '2023-03-27 09:27:39'),
(28, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:41', '2023-03-27 09:27:41'),
(29, 1, 'admin/product/users/1/edit', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:48', '2023-03-27 09:27:48'),
(30, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:27:54', '2023-03-27 09:27:54'),
(31, 1, 'admin', 'GET', '::1', '[]', '2023-03-27 09:31:23', '2023-03-27 09:31:23'),
(32, 1, 'admin/auth/logout', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:31:26', '2023-03-27 09:31:26'),
(33, 1, 'admin', 'GET', '::1', '[]', '2023-03-27 09:31:34', '2023-03-27 09:31:34'),
(34, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:31:40', '2023-03-27 09:31:40'),
(35, 1, 'admin/product/users/2/edit', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:31:47', '2023-03-27 09:31:47'),
(36, 1, 'admin/product/users/2', 'DELETE', '::1', '{\"_method\":\"delete\",\"_token\":\"kEPT6G4DipTPI4RDKDZ38r74xgETc6x0Ver3FOik\"}', '2023-03-27 09:31:53', '2023-03-27 09:31:53'),
(37, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:31:54', '2023-03-27 09:31:54'),
(38, 1, 'admin/product/users/2/edit', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:32:03', '2023-03-27 09:32:03'),
(39, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:32:05', '2023-03-27 09:32:05'),
(40, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:32:10', '2023-03-27 09:32:10'),
(41, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:32:14', '2023-03-27 09:32:14'),
(42, 1, 'admin/auth/logout', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-27 09:37:36', '2023-03-27 09:37:36'),
(43, 1, 'admin', 'GET', '::1', '[]', '2023-03-28 07:05:02', '2023-03-28 07:05:02'),
(44, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-28 07:05:09', '2023-03-28 07:05:09'),
(45, 1, 'admin/product/users/2/edit', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-28 07:05:17', '2023-03-28 07:05:17'),
(46, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-28 07:05:21', '2023-03-28 07:05:21'),
(47, 1, 'admin/product/users', 'GET', '::1', '[]', '2023-03-28 07:05:57', '2023-03-28 07:05:57'),
(48, 1, 'admin/_handle_action_', 'POST', '::1', '{\"_key\":\"3\",\"_model\":\"App_Models_User\",\"_token\":\"fFWL3FqQmDeEyaYTctvm6Ow53skCWtDAHhZJ3bRD\",\"_action\":\"Encore_Admin_Grid_Actions_Delete\",\"_input\":\"true\"}', '2023-03-28 07:06:05', '2023-03-28 07:06:05'),
(49, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-28 07:06:05', '2023-03-28 07:06:05'),
(50, 1, 'admin', 'GET', '::1', '[]', '2023-03-29 02:53:00', '2023-03-29 02:53:00'),
(51, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:02', '2023-03-29 02:53:02'),
(52, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:03', '2023-03-29 02:53:03'),
(53, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:05', '2023-03-29 02:53:05'),
(54, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:14', '2023-03-29 02:53:14'),
(55, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:20', '2023-03-29 02:53:20'),
(56, 1, 'admin/product/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:40', '2023-03-29 02:53:40'),
(57, 1, 'admin/auth/users', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:54', '2023-03-29 02:53:54'),
(58, 1, 'admin', 'GET', '::1', '{\"_pjax\":\"#pjax-container\"}', '2023-03-29 02:53:55', '2023-03-29 02:53:55');

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2023-03-27 09:14:38', '2023-03-27 09:14:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$OSNkURWro74G8riOUGzFEulKh8yOqkf3EDtx9nsW83aFOZDL3nApm', 'Administrator', NULL, 'UqR4f5CSAQAKA4EeQXvSgue2GpHHzDldksbsiU1FtCqPPzH8bi5UGc8yHgth', '2023-03-27 09:14:38', '2023-03-27 09:14:38');

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_01_04_173148_create_admin_tables', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_22_094859_create_products_table', 1),
(7, '2023_03_22_094910_add_status_to_users_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
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
-- テーブルの構造 `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kaitori_price` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `category`, `brand`, `condition`, `kaitori_price`, `price`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 'テスト', 'トップス', 'テスト', '中古', 1, 1, 'テストテストテストテスト', '2023-03-27 09:17:15', '2023-03-27 09:38:23'),
(2, 2, 'test', 'シャツ', 'test', '新品', 10000, 20000, NULL, '2023-03-27 09:29:04', '2023-03-27 09:29:04'),
(3, 2, 'テスト', 'シャツ', 'テスト', '新品', 10, 111, 'テストテストテストテスト', '2023-03-27 09:29:26', '2023-03-27 09:38:10'),
(4, 1, 'テスト', 'トップス', 'テスト', '中古', 10000, 25000, NULL, '2023-03-27 09:34:59', '2023-03-27 09:34:59'),
(5, 1, 'テスト', 'トップス', 'テスト', '中古', 10000, 24000, NULL, '2023-03-27 09:35:09', '2023-03-27 09:35:09'),
(6, 1, 'テスト', 'トップス', 'テスト', '中古', 10000, 20000, NULL, '2023-03-27 09:35:20', '2023-03-27 09:35:20'),
(7, 1, 'テスト', 'トップス', 'テスト', '中古', 2000, 5000, NULL, '2023-03-27 09:35:33', '2023-03-27 09:35:33'),
(8, 1, 'テスト', 'トップス', 'テスト', '新品', 1000, 5000, 'テスト', '2023-03-27 09:36:09', '2023-03-27 09:36:09'),
(9, 1, 'テスト', 'トップス', 'テスト', '新品', 1000, 7000, 'テスト', '2023-03-27 09:36:25', '2023-03-27 09:36:25'),
(10, 1, 'テスト', 'トップス', 'テスト', '新品', 1000, 7000, 'test', '2023-03-27 09:36:39', '2023-03-27 09:36:39'),
(11, 1, 'テスト', 'トップス', 'テスト', '新品', 1000, 90000, 'test', '2023-03-27 09:36:51', '2023-03-27 09:36:51'),
(12, 1, 'テスト', 'トップス', 'テスト', '新品', 1000, 60000, 'test', '2023-03-27 09:36:59', '2023-03-27 09:36:59'),
(13, 1, 'テスト', 'シャツ', 'テスト', '新品', 19000, 20000, NULL, '2023-03-27 09:39:24', '2023-03-27 09:39:24'),
(14, 1, 'テスト', 'トップス', 'テスト', '中古', 4000, 10000, 'テスト', '2023-03-27 13:23:16', '2023-03-27 13:23:16'),
(16, 1, 'テスト', 'トップス', 'テスト', '新品', 1, 1, NULL, '2023-03-28 07:04:38', '2023-03-28 07:04:38'),
(17, 1, 'テスト', 'シャツ', 'テスト', '新品', 1, 1, NULL, '2023-03-29 02:52:45', '2023-03-29 02:52:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `status`) VALUES
(1, '田中', 'tanakaganndamu@gmail.com', NULL, '$2y$10$uvUu2Dn96OO5AbQEHFiureRY5GXJLuO03gMq66DbvlnoAbcDJFph2', 'ano3Tllh6I9tGlKhVJX64VyB296E6bDrNcegFygZ6tGBacILiZyJN3D0WO20', '2023-03-27 09:16:51', '2023-03-28 07:01:56', 1),
(2, 'ta', 'ta@gmail.com', NULL, '$2y$10$MFUfQy325wQ4n0l2ipxtCO0QzFUG3LnW0qOy6KgTVSUeiFrmy4/iW', NULL, '2023-03-27 09:28:18', '2023-03-27 09:28:18', 1),
(4, 'テスト', 'test@gmail.com', NULL, '$2y$10$prNlg0WbuR4BDHxyx/zYr.k3iJ1vwWEQX1wBlO8Z/g7qAzgwLk23C', NULL, '2023-03-29 06:25:17', '2023-03-29 06:25:17', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- テーブルのインデックス `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- テーブルのインデックス `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- テーブルのインデックス `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- テーブルのインデックス `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- テーブルのインデックス `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- テーブルのインデックス `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- テーブルのインデックス `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- テーブルのインデックス `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- テーブルの AUTO_INCREMENT `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- テーブルの AUTO_INCREMENT `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルの AUTO_INCREMENT `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- テーブルの AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- ダンプしたテーブルの制約
--

--
-- テーブルの制約 `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
