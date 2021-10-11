-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 09:45 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monpkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaPerusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisUsaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaPimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaHrd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHpPerusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `namaPerusahaan`, `jenisUsaha`, `namaPimpinan`, `namaHrd`, `alamat`, `noHpPerusahaan`, `created_at`, `updated_at`) VALUES
(1, 'PT. Mitrasoft Global Perdana', '-', '-', '-', 'Pura Bojonggede Blok A2 No.34 Tajurhalang Kab. Bogor Jawa', '-', '2021-10-05 19:12:42', '2021-10-07 16:56:39'),
(2, 'PT. Alus Technology', 'Software House', '-', '-', 'Jl. Jati Padasuka Ciomas, Bogor Jawa Barat 16610', '-', '2021-10-05 19:13:16', '2021-10-07 16:55:52'),
(3, 'PT. Konekthing Benda Pintar', '-', '-', '-', 'Jl. Ir. H. Juanda No.88A Kemiri Muka Beji Kota Depok 16436', '-', '2021-10-07 16:57:07', '2021-10-07 16:57:07'),
(4, 'PT Virus Media Investara', 'Software House', '-', '-', 'Jl. H Batong Raya No. 33 Cilandak Jakarta Selatan', '-', '2021-10-07 16:57:49', '2021-10-07 16:57:49'),
(5, 'PT MarVa Cipta Indonesia', 'Software House', '-', '-', 'PT MarVa Cipta Indonesia', '-', '2021-10-07 16:58:13', '2021-10-07 16:58:13'),
(6, 'PT Interbiss Digital GCM', '-', '-', '-', 'Komplek Harapan Indah Blok YN no 4-5 Bekasi 17131', '-', '2021-10-07 16:59:24', '2021-10-07 16:59:24'),
(7, 'PT Lingkar 9', '-', '-', '-', 'JL. Cemara II No. 15C, pamulang Barat Tanggerang Selatan 15417', '-', '2021-10-07 16:59:49', '2021-10-07 16:59:49'),
(8, 'BIG LIPI Kepala Biro Perencanaan,Kepegawaian UP.Kepala Pusat Pengelolaan Penyebar Luasan Informasi Geospasial(PPIG)', '-', '-', '-', 'JL Raya Jakarta - Bogor KM 47, Nanggewer mekar Cibinong', '-', '2021-10-07 17:00:36', '2021-10-07 17:00:36'),
(9, 'BIG LIPI Kepala Biro Perencanaan,Kepegawaian UP.Kepala SKIG', '-', '-', '-', 'JL Raya Jakarta - Bogor KM 47, Nanggewer mekar Cibinong', '-', '2021-10-07 17:01:01', '2021-10-07 17:01:01'),
(10, 'SMKN 1 Cibinong', '-', '-', '-', 'Jl Keradenan No.7 Cibinong - Bogor', '-', '2021-10-07 17:01:34', '2021-10-07 17:01:34'),
(11, 'PT Hanara Sentra Teknologi', '-', '-', '-', 'Puri Nirwana 3 Blok AF-05 karedenan, Cibinong', '-', '2021-10-07 17:02:06', '2021-10-07 17:02:06'),
(12, 'PT. Karya Data Infotama', '-', '-', '-', 'Gedung AIC, Jalan Dewi Sartika no. 4A, Cililitan, Kramat jati\r\nJakarta Timur', '-', '2021-10-07 17:02:29', '2021-10-07 17:02:29'),
(13, 'PT IANMARK MULTI TEKNOLOGI', '-', '-', '-', 'Jln Albaliah no 28 Pabuaran Cibinong Bogor kode pos 16916', '-', '2021-10-07 17:02:56', '2021-10-07 17:02:56'),
(14, 'PT. 4Net Prima Solusi', '-', '-', '-', 'Cyber 2 Tower Jl. H. R. Rasuna Said Blok x-5, 18th Floor Kuningan, Jakarta Selatan 12950', '-', '2021-10-07 17:03:19', '2021-10-07 17:03:19'),
(15, 'PT. Karya Data Infotama', '-', '-', '-', 'Gedung AIC, Jalan Dewi Sartika no. 4A, Cililitan, Kramat jati\r\nJakarta Timur', '-', '2021-10-07 17:03:46', '2021-10-07 17:03:46'),
(16, 'Balai Desa cilebut timur', '-', '-', '-', 'Desa Cilebut timur kec,Sukaraja kab .bogor', '-', '2021-10-07 17:04:10', '2021-10-07 17:04:10'),
(17, 'INDONESIA HALAL TRAINING & EDUCATION CENTER (IHATEC)', '-', '-', '-', 'Bogor Icon Office Lantai 3,  Bukit Cimanggu City, Jl. Sholeh iskandar no 1, Bogor 16168.', '-', '2021-10-07 17:04:34', '2021-10-07 17:04:34'),
(18, 'PT Famindo Roda Gemilang Manufaktur', '-', '-', '-', 'Jl. Sarinembah kp.jamakir, desa Sukahati RT.01 RW 05 Kecamatan Citereup', '-', '2021-10-07 17:04:55', '2021-10-07 17:04:55');

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idStudent` bigint(20) UNSIGNED NOT NULL,
  `idCompany` bigint(20) UNSIGNED NOT NULL,
  `id_teacher` bigint(20) UNSIGNED NOT NULL,
  `idMentors` bigint(20) UNSIGNED NOT NULL,
  `tglMulaiPKL` date DEFAULT NULL,
  `tglSelesaiPKL` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `idStudent`, `idCompany`, `id_teacher`, `idMentors`, `tglMulaiPKL`, `tglSelesaiPKL`, `created_at`, `updated_at`) VALUES
(5, 3, 2, 2, 3, NULL, NULL, '2021-10-08 07:12:02', '2021-10-08 07:12:02'),
(6, 30, 2, 2, 3, NULL, NULL, '2021-10-08 07:12:46', '2021-10-08 07:12:46'),
(7, 42, 2, 2, 3, NULL, NULL, '2021-10-08 07:13:22', '2021-10-08 07:13:22'),
(8, 9, 2, 2, 3, NULL, NULL, '2021-10-08 07:13:59', '2021-10-08 07:13:59'),
(9, 15, 2, 2, 3, NULL, NULL, '2021-10-08 07:14:44', '2021-10-08 07:14:44'),
(10, 4, 1, 3, 4, NULL, NULL, '2021-10-08 07:15:37', '2021-10-08 07:15:37'),
(11, 65, 1, 3, 4, NULL, NULL, '2021-10-08 07:16:43', '2021-10-08 07:16:43'),
(12, 40, 3, 4, 5, NULL, NULL, '2021-10-08 07:17:31', '2021-10-08 07:17:31'),
(13, 45, 3, 4, 5, NULL, NULL, '2021-10-08 07:18:25', '2021-10-08 07:18:25'),
(14, 44, 3, 4, 5, NULL, NULL, '2021-10-08 07:19:01', '2021-10-08 07:19:01'),
(15, 10, 4, 5, 6, NULL, NULL, '2021-10-08 07:19:55', '2021-10-08 07:19:55'),
(16, 12, 4, 5, 6, NULL, NULL, '2021-10-08 07:20:25', '2021-10-08 07:20:25'),
(17, 50, 4, 5, 6, '2021-09-01', '2021-10-01', '2021-10-08 07:21:36', '2021-10-08 08:47:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `intern_students`
--

CREATE TABLE `intern_students` (
  `idInternStudents` int(10) UNSIGNED NOT NULL,
  `nis` bigint(20) NOT NULL,
  `idCompanyDetails` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalMulai` date NOT NULL,
  `tanggalSelesai` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` bigint(20) NOT NULL,
  `idCompanyDetail` int(11) NOT NULL,
  `tanggalJurnal` date DEFAULT NULL,
  `bidangPekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uraianPekerjaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `setuju` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `idCompanyDetail`, `tanggalJurnal`, `bidangPekerjaan`, `uraianPekerjaan`, `setuju`, `created_at`, `updated_at`) VALUES
(12, 13, '2021-10-10', 'Membuat Backend', 'test', 1, '2021-10-09 21:30:47', '2021-10-09 21:54:11'),
(13, 17, '2021-10-10', 'Membuat Frontend', '1. klklklklk', 0, '2021-10-09 21:32:32', '2021-10-09 21:32:32'),
(14, 14, '2021-10-10', 'Membuat Frontend', 'coba buat front', 1, '2021-10-09 22:03:04', '2021-10-09 22:17:44'),
(15, 13, '2021-10-10', 'a', 'b', 1, '2021-10-10 08:53:08', '2021-10-10 08:53:39'),
(16, 13, '2021-10-10', 'Membuat Backends', 'Membuat Backends', 1, '2021-10-10 08:55:10', '2021-10-11 02:37:03'),
(17, 13, '2021-10-10', 'c', 'd', 1, '2021-10-10 15:56:29', '2021-10-11 02:37:12'),
(18, 13, '2021-10-11', 'coba', 'coba', 1, '2021-10-10 19:03:32', '2021-10-11 02:37:21'),
(19, 13, '2021-10-11', 'cibi', 'cibi', 1, '2021-10-10 19:04:43', '2021-10-11 02:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `journal_details`
--

CREATE TABLE `journal_details` (
  `idJournalDetails` int(10) UNSIGNED NOT NULL,
  `idJournal` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namaMentors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHpMentors` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoMentors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parafMentors` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`id`, `namaMentors`, `email`, `noHpMentors`, `photoMentors`, `parafMentors`, `created_at`, `updated_at`) VALUES
(3, 'Ali', '-', '-', '8774548.jpg', '9615594.jpg', '2021-10-07 17:48:15', '2021-10-07 17:48:15'),
(4, 'Oky', '-', '-', '3828112.jpg', '4219853.jpg', '2021-10-07 17:50:53', '2021-10-07 17:50:53'),
(5, 'Reza', 'reza@gmail.com', '-', '1181484.jpg', '6993969.png', '2021-10-07 17:51:12', '2021-10-09 22:01:09'),
(6, 'Hendra', '-', '-', '3027777.jpg', '9610082.jpg', '2021-10-07 17:51:32', '2021-10-07 17:51:32'),
(7, 'Maya', '-', '-', '8200963.jpg', '2647831.jpg', '2021-10-07 17:51:53', '2021-10-07 17:51:53'),
(8, 'Andri', '-', '-', '3443511.jpg', '6967725.jpg', '2021-10-07 17:52:20', '2021-10-07 17:52:20'),
(9, 'Lia', '-', '-', '6509307.jpg', '8079548.jpg', '2021-10-07 19:34:56', '2021-10-07 19:34:56'),
(10, 'Okta', '-', '-', '4769166.jpg', '1376445.jpg', '2021-10-07 19:35:41', '2021-10-07 19:35:41'),
(11, 'Afi', '-', '-', '4477035.jpg', '7150600.jpg', '2021-10-07 19:36:06', '2021-10-07 19:36:06'),
(12, 'Yanti', '-', '-', '1292201.jpg', '7683208.jpg', '2021-10-07 19:36:23', '2021-10-07 19:36:23'),
(13, 'Abi', '-', '-', '3345730.jpg', '5309605.jpg', '2021-10-07 19:41:12', '2021-10-07 19:41:12'),
(14, 'Michael', '-', '-', '9350665.jpg', '3374991.jpg', '2021-10-07 19:43:45', '2021-10-07 19:43:45'),
(15, 'Michael', '-', '-', '5408337.jpg', '8116725.jpg', '2021-10-07 19:43:45', '2021-10-07 19:43:45'),
(16, 'Dede', '-', '-', '3714437.jpg', '5693020.jpg', '2021-10-07 19:44:28', '2021-10-07 19:44:28'),
(17, 'Novi', '-', '-', '6492596.jpg', '5526073.jpg', '2021-10-07 19:45:01', '2021-10-07 19:45:01'),
(18, 'Ira', '-', '-', '1110276.jpg', '6238114.jpg', '2021-10-07 19:50:54', '2021-10-07 19:50:54'),
(19, 'Ridho', '-', '-', '6552515.jpg', '7100033.jpg', '2021-10-07 19:51:19', '2021-10-07 19:51:19'),
(20, 'Fikar', '-', '-', '7708806.jpg', '6203759.jpg', '2021-10-07 19:51:39', '2021-10-07 19:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_08_25_132509_create_companies_table', 1),
(6, '2021_08_30_074850_create_students_table', 1),
(7, '2021_08_30_081608_create_teachers_table', 1),
(8, '2021_08_30_082221_create_mentors_table', 1),
(9, '2021_08_30_084950_create_company_details_table', 1),
(10, '2021_08_31_072856_create_intern_students_table', 1),
(11, '2021_08_31_080015_create_journal_table', 1),
(12, '2021_08_31_080834_create_journal_detail_table', 1),
(13, '2021_08_31_094819_create_presensi_table', 1),
(14, '2021_08_31_095334_create_presensi_details_table', 1),
(15, '2021_08_31_095550_create_level_table', 1),
(16, '2021_08_31_095812_create_status_table', 1),
(17, '2021_10_06_043620_create_journal_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensi`
--

CREATE TABLE `presensi` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCompanyDetail` int(11) NOT NULL,
  `keterangan` tinyint(1) DEFAULT 0,
  `setuju` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensi`
--

INSERT INTO `presensi` (`id`, `idCompanyDetail`, `keterangan`, `setuju`, `created_at`, `updated_at`) VALUES
(1, 13, 0, 1, '2021-10-10 14:58:53', '2021-10-10 15:18:24'),
(2, 13, 1, 1, '2021-10-10 15:52:34', '2021-10-11 02:37:42'),
(3, 13, 0, 1, '2021-10-10 15:56:48', '2021-10-11 02:37:49'),
(4, 13, 1, 1, '2021-10-11 02:34:56', '2021-10-11 02:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_details`
--

CREATE TABLE `presensi_details` (
  `idPresensiDetails` int(10) UNSIGNED NOT NULL,
  `idPresensi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaSiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kompetensiKeahlian` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kelas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggalLahir` date DEFAULT NULL,
  `jenisKelamin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `golDarah` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahunPelajaran` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noHP` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `namaOrtu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatOrtu` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `noHpOrtu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photoSiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parafSiswa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `nis`, `namaSiswa`, `kompetensiKeahlian`, `kelas`, `tempatLahir`, `tanggalLahir`, `jenisKelamin`, `golDarah`, `tahunPelajaran`, `noHP`, `email`, `alamat`, `namaOrtu`, `alamatOrtu`, `noHpOrtu`, `photoSiswa`, `parafSiswa`, `created_at`, `updated_at`) VALUES
(1, '1019009081', 'AFIF JEFRYYAN', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', 'afif@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, '1019009082', 'AHMAD SYAMSUDDIN SUMANTERI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, '1019009083', 'ANDRA CESARIO FEBRIANSYAH', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', 'andra@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, '1019009084', 'ARIEL PUTRA RAMADHAN', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, '1019009085', 'AUDI AMINNOVA AINI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, '1019009086', 'CHAERUL SYAWAL', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, '1019009087', 'DAFFA PUTRA RACHMANTO', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, '1019009088', 'DAMAR RAMADIANSYAH', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '1019009089', 'DWIKI RAMADANI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, '1019009090', 'FADHIL SOFYAN FAUZI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, '1019009091', 'FAUZAN SATRIA RAMADHANI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, '1019009092', 'GHOZIANDRA ZAYYAN PRADYTA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '1019009093', 'GREGORIUS ROMANO IVAN SUSANTO', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '1019009094', 'IGNATIUS KEVIN GUNAWAN', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '1019009095', 'LUQMAN ALY RAZAK', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '1019009096', 'MATHEOS DEVID BALI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '1019009097', 'MOCHAMAD FARHAN', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '1019009098', 'MOCHAMMAD GENTAR ABIMANYU R', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '1019009099', 'MOSES ANDREAS HASIHOLAN SAMOSIR', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '1019009100', 'MUHAMMAD AKBAR FADILLAH', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '1019009101', 'MUHAMMAD AQSHAL ARRIZKY', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '1019009102', 'MUHAMMAD AULIA ILHAM HERDIYANTO', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '1019009103', 'MUHAMMAD KHAIRUL FAHRI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '1019009104', 'MUHAMMAD RIFKI FAYZI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '1019009105', 'NABILA RACHMA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '1019009106', 'NANDA OKTAFIANI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '1019009107', 'PRATIWI WULANDARI', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '1019009108', 'RAINA ATHA SYAHIDA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '1019009109', 'RIZKI  RAMADANA SAPUTRA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '1019009110', 'RUSTU FITRAN PRASETYA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '1019009111', 'SITI SALMA SIREGAR', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '1019009112', 'THEO DHIYA PRATAMA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '1019009113', 'WENDY SURYA UTAMA', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '1019009114', 'ZAKY FEBRYAN', 'RPL', 'XII - 1', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, '1019009115', 'AHMAD FAIKAR', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, '1019009116', 'AHMAD ZULFIKAR FIRDAUS', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, '1019009117', 'ANNASRULLOH HIDAYAT', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, '1019009118', 'ARSYA RIZKY GUNAWAN', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, '1019009119', 'BIMO SENO TRISATRIO', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, '1019009120', 'CIPTA FIKRI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', 'cipta@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, '1019009121', 'DAFFA SHIDQI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, '1019009122', 'DEVIN MARTYAN ARAYA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, '1019009123', 'DZIKRINA AULIA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, '1019009124', 'FARREL WIRATAMA RAISYAH N', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', 'farrel@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, '1019009125', 'FRISKA NUR HAYLANI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', 'friska@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, '1019009126', 'GILANG KHARISMA PARAHYANG', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, '1019009127', 'HASNA MARYAM', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, '1019009128', 'LELA  NURMAYA  SARI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, '1019009129', 'LUTVIA SAPITRI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, '1019009130', 'MAURA AL SYAFA FATIHA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', 'maura@gmail.com', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, '1019009131', 'MOCHAMMAD FADIIL THORIQ', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, '1019009132', 'MOHAMAD IRSYAD', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, '1019009133', 'MUHAMAD AKBAR HARSYA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, '1019009134', 'MUHAMMAD ABIDDHIA PRATAMA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, '1019009135', 'MUHAMMAD ATHAR ZULFIQAR', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, '1019009136', 'MUHAMMAD HAFIDZ HAEKAL M', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, '1019009137', 'MUHAMMAD RADIN FAJRIAN', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, '1019009138', 'MUHAMMAD SHIDQI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, '1019009139', 'NADIA PUTRI NURSYAMSIKA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, '1019009140', 'PANJI JUANSYAH', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, '1019009141', 'RAIHAN SUBAGJA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, '1019009142', 'RIA RISTI FAUZI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, '1019009143', 'RIZKY ADRIANSYAH', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, '1019009145', 'SRI HANDAYANI', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, '1019009146', 'WAHYU SULISTYA NURROCHMAN', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, '1019009147', 'WILLY REIJI NURHUDA EKA PUTRA', 'RPL', 'XII - 2', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nuptk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namaGuru` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noHpGuru` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoGuru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parafGuru` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `nuptk`, `namaGuru`, `email`, `noHpGuru`, `photoGuru`, `parafGuru`, `created_at`, `updated_at`) VALUES
(2, '197605222007011000', 'Heri Hermawan, S.Kom', '-', '-', '5530692.jpg', '1123554.jpg', '2021-10-07 17:43:24', '2021-10-07 17:43:24'),
(3, '197912232006041000', 'Hikmat Daviyana, S.T, M.Pd', '-', '-', '5569121.jpg', '1545206.jpg', '2021-10-07 17:44:06', '2021-10-07 17:44:06'),
(4, '001', 'Yuli Dianah, ST', '-', '-', '9647724.jpg', '7851827.jpg', '2021-10-07 17:45:25', '2021-10-07 17:45:25'),
(5, '002', 'Fani Indriyaningsih,S.Kom', '-', '-', '7267031.jpg', '2378251.jpg', '2021-10-07 17:45:57', '2021-10-07 17:45:57'),
(6, '003', 'Alfi Rahman Hakim.S.Kom', '-', '-', '9990668.jpg', '6837054.jpg', '2021-10-07 17:46:34', '2021-10-07 17:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Admin', 'admin@gmail.com', '2021-10-09 16:42:50', '$2y$10$q.Jf7S4F7/LRbXnk8NQ.nuVsYm3MHRp6LJnncHuwKMXgYvYYMMkqe', 'admin', NULL, '2021-10-09 16:42:50', '2021-10-09 16:42:50'),
(8, 'Guru', 'guru@gmail.com', '2021-10-09 16:43:18', '$2y$10$NvFYNeSSevEo88u38XlLpejLnNZi8Sbc4X5igYvnU9dxMU3qvN9hy', 'guru', NULL, '2021-10-09 16:43:18', '2021-10-09 16:43:18'),
(9, 'Reza', 'reza@gmail.com', '2021-10-09 16:43:55', '$2y$10$I0JeCQx79Xv0zmObwsyk6OTMSeTNLPlRuErZ4Oj3N2i7GBcMjX7fW', 'mentor', NULL, '2021-10-09 16:43:55', '2021-10-09 16:43:55'),
(13, 'Cipta Fikri', 'cipta@gmail.com', '2021-10-09 21:27:32', '$2y$10$BIOzvRS08u7BWBFnHtv5IOYo37Y01MjfMGGK2ht23sAfXmJ2Hosf.', 'siswa', NULL, '2021-10-09 21:27:32', '2021-10-09 21:27:32'),
(14, 'Farrel Wiratama Raisyah N', 'farrel@gmail.com', '2021-10-09 21:27:58', '$2y$10$nxqqK.T9ln83puoIkn/Hse8o/ZPvjm/9RPKzbiGCoFTblG5tGzvG6', 'siswa', NULL, '2021-10-09 21:27:58', '2021-10-09 21:27:58'),
(15, 'Friska Nur Haylani', 'friska@gmail.com', '2021-10-09 21:28:45', '$2y$10$ouveKa6CG75IVJjVdNTmMeTBlnDOMqEBOjGmkqdjCzVtmTGoovPWa', 'siswa', NULL, '2021-10-09 21:28:45', '2021-10-09 21:28:45'),
(16, 'Maura Al Syafa Fatiha', 'maura@gmail.com', '2021-10-09 21:29:43', '$2y$10$hpQDyYL1rtGJWCZjxbHUTeDi11tB/Zml7NHo9SM/pCAZl5fucfrFa', 'siswa', NULL, '2021-10-09 21:29:43', '2021-10-09 21:29:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `intern_students`
--
ALTER TABLE `intern_students`
  ADD PRIMARY KEY (`idInternStudents`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal_details`
--
ALTER TABLE `journal_details`
  ADD PRIMARY KEY (`idJournalDetails`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presensi`
--
ALTER TABLE `presensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presensi_details`
--
ALTER TABLE `presensi_details`
  ADD PRIMARY KEY (`idPresensiDetails`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `intern_students`
--
ALTER TABLE `intern_students`
  MODIFY `idInternStudents` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `journal_details`
--
ALTER TABLE `journal_details`
  MODIFY `idJournalDetails` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensi`
--
ALTER TABLE `presensi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `presensi_details`
--
ALTER TABLE `presensi_details`
  MODIFY `idPresensiDetails` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
