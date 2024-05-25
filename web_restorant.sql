-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2024 pada 14.09
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_restorant`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `total_harga` bigint(20) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT '2024-01-02 08:28:45',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id`, `nama_user`, `total_harga`, `tanggal_transaksi`, `created_at`, `updated_at`) VALUES
(1, 'ikwan', 14000, '2024-01-02 08:35:00', '2024-01-02 08:35:00', '2024-01-02 08:35:00'),
(2, 'niken', 13000, '2024-01-02 08:39:29', '2024-01-02 08:39:29', '2024-01-02 08:39:29'),
(3, 'yanto', 28000, '2024-01-02 08:41:21', '2024-01-02 08:41:21', '2024-01-02 08:41:21'),
(4, 'yanto', 13000, '2024-01-02 08:48:13', '2024-01-02 08:48:13', '2024-01-02 08:48:13'),
(5, 'ikhwan', 14000, '2024-01-02 08:51:20', '2024-01-02 08:51:20', '2024-01-02 08:51:20'),
(6, 'niken', 42000, '2024-01-03 03:00:45', '2024-01-03 03:00:45', '2024-01-03 03:00:45'),
(7, 'saya', 4000, '2024-01-03 03:01:47', '2024-01-03 03:01:47', '2024-01-03 03:01:47'),
(8, 'yanto', 4000, '2024-01-04 08:18:00', '2024-01-04 08:18:00', '2024-01-04 08:18:00'),
(9, 'ikwan', 70000, '2024-01-10 07:51:57', '2024-01-10 07:51:57', '2024-01-10 07:51:57'),
(10, 'Admin', 39000, '2024-01-10 07:51:59', '2024-01-10 07:51:59', '2024-01-10 07:51:59'),
(11, 'yanto', 56000, '2024-01-10 07:52:01', '2024-01-10 07:52:01', '2024-01-10 07:52:01'),
(12, 'ardi', 13000, '2024-01-10 07:52:03', '2024-01-10 07:52:03', '2024-01-10 07:52:03'),
(13, 'ikwan', 20000, '2024-01-17 05:59:16', '2024-01-17 05:59:16', '2024-01-17 05:59:16'),
(14, 'wullan', 70000, '2024-01-17 05:59:16', '2024-01-17 05:59:16', '2024-01-17 05:59:16'),
(15, 'Admin', 13000, '2024-01-17 06:03:38', '2024-01-17 06:03:38', '2024-01-17 06:03:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_menu` varchar(255) NOT NULL,
  `harga` bigint(20) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id`, `nama_menu`, `harga`, `kategori`, `deskripsi`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Nasi Goreng spesial', 13000, 'makanan', 'makanan kaki 5 rasa bintang 5', '240117010323.jpg', NULL, '2024-01-17 06:03:23'),
(3, 'Es Durian', 14000, 'minuman', 'Es Durian khas Purwokerto', '231210030520.jpg', NULL, '2023-12-11 06:19:19'),
(4, 'Es teh', 4000, 'minuman', 'Es Teh Manis', '231210030535.jpg', NULL, '2023-12-10 08:05:35'),
(6, 'soto sokaraja', 10000, 'makanan', 'asli khas sokaraja', '231210030604.jpg', '2023-12-10 07:32:28', '2023-12-11 06:23:16'),
(7, 'Mie Goreng', 10000, 'makanan', 'Mie goreng enak indomie', '231212105227.jpg', '2023-12-12 03:52:27', '2023-12-12 03:52:27'),
(8, 'Pisang Goreng', 10000, 'makanan', 'gurih, nikmat ,dan krispy', '240102040656.jpg', '2024-01-02 09:06:56', '2024-01-02 09:08:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_12_06_044621_create_menus_table', 1),
(6, '2023_12_07_094807_create_carts_table', 1),
(7, '2024_01_02_152637_create_laporan_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'yanto', '$2y$12$z1MT0PkLCagmfNU2.9hfM.SmKOzmHnHeiY/fcmE7Ibah.xwjRC9wy', NULL, NULL),
(2, 'ikhwan', '$2y$12$d1JZ86uRGU3KdVP.g3zfN.mF17inrvSkRAeQJW4xeCsitXsBFniHq', '2023-12-10 05:43:43', '2023-12-10 05:43:43'),
(3, 'dani', '$2y$12$EQzsQekvytn5.VvcsikIuOJI0EjuPKH9UJupULd2SYMmYnER8TXZm', '2023-12-10 07:33:02', '2023-12-10 07:33:02'),
(4, 'Admin', '$2y$12$S6Bh3KAz/Os27n9ikkzZe.Hd3q2ljTDU9fhBuzXzAirGWOmLoZ/HO', '2023-12-10 07:59:10', '2023-12-10 07:59:10'),
(5, 'niken', '$2y$12$bQJ3cykt8/wre6aArvfCAucJkbA4GPBX.9LiPFmW2lDZU8Rg5RBAC', '2023-12-11 05:36:06', '2023-12-11 05:36:06'),
(6, 'japan', '$2y$12$KK5.MeiUu8sB06c0YtDWTevErshwuYQvag63luTzhwnYrt8vzqtXm', '2023-12-13 01:19:44', '2023-12-13 01:19:44'),
(7, 'kaka', '$2y$12$86ccCf6Gz1dZTMTjdrfKmux3VURXnuuhDxN4Tb08FV0a0pJyx6ge.', '2023-12-13 01:20:26', '2023-12-13 01:20:26'),
(8, 'riyan', '$2y$12$gH7fxieYfy8H..GvmM/F3.Q2QANbVxnESCrGFs0PkVKsQRCSD6Lom', '2023-12-13 04:39:16', '2023-12-13 04:39:16'),
(9, 'ikwan', '$2y$12$UpJPt5ENGoCTUkGhSA2kVu9LPrV.8gM/LmuglLx4dRk.CFNgPTTe6', '2023-12-13 05:51:50', '2023-12-13 05:51:50'),
(10, 'wullan', '$2y$12$Hf6jnaQDlgV9HMx4bd1GBuvo/l87ELzYv2pgTmfYdlyw9pG5oP2eu', '2024-01-02 08:52:21', '2024-01-02 08:52:21'),
(11, 'ryoadam', '$2y$12$hg6CR7GlVfL81YXnOSPHvO8bHEJeCHDNfFesLczqEKJ6gD8mVmQnu', '2024-01-02 08:54:09', '2024-01-02 08:54:09'),
(12, 'ooo', '$2y$12$BI/i/NBobE1LOEolo5iaOehTCiGN3I1gScomCpXVszN8BvxckhXbq', '2024-01-02 08:55:20', '2024-01-02 08:55:20'),
(13, 'oqo', '$2y$12$rN/ZmHxmkK4xHV7nO.Io0eF6EiOut2SyQQfV/eqmKwmrzc9K75iCy', '2024-01-02 08:56:28', '2024-01-02 08:56:28'),
(14, 'saya', '$2y$12$SGphHwpSPqXwcgYwjUKehORzr8rl97lqEUMewLPgXXOHirC5cpMgC', '2024-01-02 08:56:53', '2024-01-02 08:56:53'),
(15, 'ardi', '$2y$12$II81yJo/o7s2HUHlKVQBdOOtE91ufjtZmnvlDeOkNHgu71waSOuqK', '2024-01-03 05:46:51', '2024-01-03 05:46:51'),
(16, 'sri', '$2y$12$giqGuplZeN3KFj.53b83T.7WwIl6q0iwK63WCDF8CWPVRDBYMsCoC', '2024-01-11 05:53:14', '2024-01-11 05:53:14'),
(17, 'rifki', '$2y$12$w8gTvHNoJIbPnaoz92H5gu6fNcU8zcU1UFb9WbTY4CmLMbjTIwpbO', '2024-01-17 05:58:53', '2024-01-17 05:58:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_menu_id_foreign` (`menu_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
