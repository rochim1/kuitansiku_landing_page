-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Feb 2024 pada 17.26
-- Versi server: 10.6.16-MariaDB-cll-lve
-- Versi PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmta2677_bmtattaawun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` bigint(20) UNSIGNED NOT NULL,
  `id_kateber` bigint(20) UNSIGNED NOT NULL,
  `gambar_berita` text NOT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `dibuat` bigint(20) UNSIGNED NOT NULL,
  `dilihat` int(11) DEFAULT NULL,
  `unggulan` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kateber`, `gambar_berita`, `judul_berita`, `deskripsi_berita`, `dibuat`, `dilihat`, `unggulan`, `created_at`, `updated_at`) VALUES
(1, 1, 'media-berita/EGQXeq6oZwNnArW3HUB2sIFtMNeTMwl3fzvHv7yv.png', 'Santunan Kepada Anggota Dhuafa', '<p style=\"text-align: justify;\"><strong><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Sleman, 20 November 2021 – </span></strong><span style=\"line-height: 107%; font-size: 16px; font-family: Arial;\">KSPPS BMT AT-TA’AWUN Mitra Sembada memberikan bantuan sejumlah uang dan sembako kepada para Anggota yang tergolong dhuafa. Kegiatan ini dilakukan pada hari Sabtu (20/11/2021) dengan tujuan membantu dan mensejahterakan ekonomi para Anggota KSPPS BMT AT-TA’AWUN Mitra Sembada terutama yang golongan dhuafa.</span></p><p style=\"text-align: justify;\"><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Kegiatan ini mendapatkan dukungan dan bantuan dari berbagai pihak, sehingga dapat terlaksana dengan baik dan tepat sasaran. Para pengelola KSPPS BMT AT-TA’AWUN Mitra Sembada juga memiliki andil dalam menyalurkan bantuan kepada para Anggota Dhuafa sehingga kegiatan ini dapat terlaksana dengan sukses.</span></p><p style=\"text-align: justify;\"><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\"><span style=\"font-family: Arial; font-size: 16px;\">Terima kasih kepada seluruh Anggota KSPPS BMT AT-TA’AWUN Mitra Sembada, para donatur serta masyarakat yang telah berpartisipasi melalui donasi, sehingga kegiatan <strong>Santunan Kepada Anggota Dhuafa </strong>ini dapat terlaksana sebagaimana mestinya. Semoga donasi yang sahabat berikan dihitung sebagai pahala yang baik di sisi Allah Swt. dan digantikan dengan yang lebih baik lagi. Donasi sahabat masih terbuka lebar untuk membantu mereka yang membutuhkan dan berhak menerimanya</span>.</span></p>', 1, 176, '2023-03-25 22:02:56', '2023-03-25 15:02:56', '2024-02-21 10:54:32'),
(2, 1, 'media-berita/qe5drV2TmYNaAsAc6QSvqUwk2qwPTdjbakiAX1Fm.png', 'Kegiatan Sosial dan Keagamaan di Desa Harmoni', '<p><strong><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Sleman, 29 Juli 2022 – </span></strong><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Dalam rangka menyambut Tahun Baru Muharram, KSPPS BMT AT-TA’AWUN Mitra Sembada menyelenggarakan Kegiatan Sosial dan Keagamaan di Desa Harmoni, Kecamatan Turi, Kabupaten Sleman. Kegiatan ini dikemas dengan serangkaian acara seperti Kajian Akbar 1 Muharram, Bazar Sembako Murah dan Pakaian Layak Pakai, dan Santunan Kepada Anak Yatim dan Dhuafa. Kegiatan ini dilaksanakan oleh para pengelola dan diselenggarakan di Desa Harmoni pada hari Jum’at (29/07/2022).</span></p><p><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Tujuan diselenggarakannya kegiatan ini adalah untuk menyambut Tahun Baru Muharram 1444 H. sekaligus untuk melakukan kegiatan sosial berupa Bazar Sembako Murah dan Pakaian Layak Pakai dan Santunan Kepada Anak Yatim dan Dhuafa. Harapannya dengan diselenggarakan kegiatan ini dapat menumbuhkan semangat ke-Islaman masyarakat setempat serta membantu mensejahterakan ekonomi ummat melalui Santunan Anak Yatim dan Dhuafa.</span></p><p><span style=\"line-height: 107%; font-family: Arial; font-size: 16px;\">Selain dengan tujuan tersebut, kegiatan ini juga diharapkan dapat lebih mengenalkan apa itu Koperasi Simpan Pinjam dan Pembiayaan Syariah kepada masyarakat umum, khususnya KSPPS BMT AT-TA’AWUN Mitra Sembada. Melalui produk-produk koperasi dengan prinsip syariahnya, harapannya dapat membiasakan masyarakat melakukan transaksi secara syariah serta dapat membantu mensejahterakan ekonomi ummat.</span></p>', 1, 176, '2023-03-25 22:05:26', '2023-03-25 15:05:26', '2024-02-20 15:04:50'),
(3, 1, 'media-berita/9Fa1g5OEFZzFDinRHDejBXqWfYk8SNs9eVPBT6m7.png', 'Pelatihan Penyembelihan Hewan Qurban', '<p><strong>Sleman, 25 Juni 2023</strong> – Dalam rangka menyambut Hari Raya Idul Adha, KSPPS BMT AT-TA’AWUN Mitra Sembada bekerja sama dengan <strong>Takmir Masjid Ulil Albab UII</strong>&nbsp;menyelenggarakan kegiatan Pelatihan Penyembelihan Hewan Qurban, dengan sasaran peserta yakni para takmir masjid binaan Masjid Ulil Albab UII. Kegiatan ini diselenggarakan di ruang Audiovisual Perpustakaan Pusat Universitas Islam Indonesia pada hari Ahad (25/06/23).&nbsp;</p><p>&nbsp;</p><p>Tujuan diselenggarakannya kegiatan ini sebagai bentuk pelatihan kepada para Takmir untuk disampaikan kepada panitia qurban agar penyembelihan dilakukan sesuai dengan syariat dan menjauhi kesalahan–kesalahan yang biasa terjadi ketika pelaksanaan penyembelihan hewan qurban. Sekaligus KSPPS BMT AT-TA’AWUN Mitra Sembada memperkenalkan salah satu produknya untuk persiapan Idul Adha, yakni <strong>Simpanan Qurban (SIQU)</strong>. <strong>Simpanan Qurban</strong> ini merupakan fasilitas yang disediakan BMT At-Ta’awun kepada para anggota yang ingin melaksanakan ibadah qurbannya secara terencana setiap tahunnya.</p><p>&nbsp;</p><p>Selain dengan tujuan tersebut, kegiatan ini juga diharapkan dapat lebih mengenalkan apa itu Koperasi Simpan Pinjam dan Pembiayaan Syariah beserta produk-produknya yang menggunakan akad sesuai syariat kepada khalayak umum. Melalui produk-produk koperasi dengan prinsip syariahnya, harapannya dapat membiasakan masyarakat melakukan transaksi secara syariah serta dapat membantu mensejahterakan ekonomi ummat.</p>', 15, 136, '2023-06-27 14:04:18', '2023-06-27 07:04:18', '2024-02-21 10:54:34'),
(4, 1, 'media-berita/OxbeIo5EU6hzxcz4k2GsoujHo0Kzkq2JY8TFedRp.jpg', 'Kegiatan Desa Harmoni di Pesantren Modern Putri Roji Syafa\'at Kulonprogo', '<p><strong>Kulon Progo, 25 Juli 2023</strong> – Dalam rangka membangun desa menuju kesejahteraan, KSPPS BMT AT-TA’AWUN Mitra Sembada bekerja sama dengan Pondok Pesantren Modern Putri Roji Syafaat dan Rumah Sehat UII untuk menyelenggarakan kegiatan Desa Harmoni dengan tema “Bersama Membangun Desa Menuju Masyarakat Jogja Istimewa”. Sasaran pesertanya yakni warga daerah setempat dan diseleggarakan di Pondok Pesantren Modern Putri Roji Syafaat pada hari Selasa (25/07/2023).&nbsp;</p><p>Tujuan diselenggarakannya kegiatan ini untuk membangun desa menuju kesejahteraan dengan mengadakan bazar sembako murah, bazar pakaian layak pakai, dan cek kesehatan gratis. Sekaligus KSPPS BMT AT-TA’AWUN Mitra Sembada memperkenalkan program yang diperuntukan untuk Dhuafa.</p><p>Selain dengan tujuan tersebut, kegiatan ini juga diharapkan dapat lebih memperkenalkan apa itu KSPPS BMT AT-TA’AWUN Mitra Sembada dan apa yang dilakukan kepada masyarakat umum. Melalui produk-produk koperasi dengan prinsip syariahnya, harapannya dapat membiasakan masyarakat melakukan transaksi secara syariah serta dapat membantu mensejahterakan ekonomi ummat.&nbsp;</p><p>“Kami dari warga Desa Sambiroto mengucapkan terima kasih yang sebesar – besarnya untuk keluarga UII, khususnya untuk BMT At-Ta’awun yang sudah menyelenggarakan kegiatan bazar sembako murah untuk dhuafa, bazar pakaian layak pakai, dan cek kesehatan gratis untuk warga di Pondok Pesantren Modern Putri Roji Syafaat” tutup Bapak Suyono, warga Desa Sambiroto dalam kegiatan Desa Harmoni 2023.&nbsp;</p>', 15, 126, '2023-08-03 08:57:49', '2023-08-03 01:57:49', '2024-02-24 09:00:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deposito_syariah`
--

CREATE TABLE `deposito_syariah` (
  `id_depsyar` bigint(20) UNSIGNED NOT NULL,
  `id_katedeposito` bigint(20) UNSIGNED DEFAULT NULL,
  `deskripsi_depsyar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `deposito_syariah`
--

INSERT INTO `deposito_syariah` (`id_depsyar`, `id_katedeposito`, `deskripsi_depsyar`, `created_at`, `updated_at`) VALUES
(2, 2, '<p>Program Deposito Khusus Emas merupakan sarana pilihan investasi berjangka, dengan jangka waktu minimal 24 bulan. Ditujukan bagi anda yang ingin berinvestasi sesuai prinsip syari’ah dengan nominal besar, jangka waktu panjang, dan bagi hasil besar.</p><ul><li><strong>Ketentuan Program</strong></li></ul><ol><li>Membuka rekening simpanan.</li><li>Jumlah simpanan Deposito&nbsp;sebesar Rp 50.000.000,-&nbsp;dan Rp 100.000.000.</li><li>Jangka waktu minimal 24 bulan.</li><li>Tidak dapat ditarik sampai jangka waktu yag ditentukan.</li><li>Nisbah bagi hasil yang didapatkan sesuai dengan nominal penempatan dana.</li><li>Anggota akan diberikan sertifikat kepemilikan hadiah Emas selama masa program Deposito.</li><li>Hadiah emas akan diberikan&nbsp;ketika&nbsp;waktu jatuh tempo deposito berakhir.</li><li>Apabila anggota mencairkan dana sebelum waktu jatuh tempo, maka akan dikenakan biaya penalti sebesar 1 kali basil per sisa bulan jangka waktu deposito dan&nbsp;mengembalikan&nbsp;hadiah.</li></ol><ul><li><strong>Keuntungan dan Fasilitas</strong></li></ul><ol><li>Mendapatkan bilyet Deposito Syari’ah.</li><li>Mendapatkan nisbah bagi hasil setiap bulannya.</li><li>Bagi hasil kompetitif dengan <i>Equivalent Rate</i>&nbsp;Periode Januari 2022&nbsp;sebesar 5,74 %</li><li>Mendapatkan hadiah diawal&nbsp;berupa Emas ½ Gram untuk nominal Rp 50.000.000 dan 1 Gram untuk nominal Rp 100.000.000</li><li>Bebas biaya administrasi bulanan.</li></ol>', '2023-05-14 03:07:53', '2023-05-14 07:39:18'),
(3, 3, '<p>Program Deposito Eksisting&nbsp;merupakan sarana Simpanan Investasi berjangka dengan menggunakan akad Mudharabah, dan jangka waktu&nbsp;minimal 6 bulan. Ditujukan bagi anda yang ingin berinvestasi sesuai prinsip syari’ah&nbsp;dengan nisbah bagi hasil 40 % sampai 60 % per bulan.</p><ul><li><strong>Ketentuan Program</strong></li></ul><ol><li>Jumlah simpanan Deposito mulai dari : Rp 1.000.000,- sampai Rp 300.000.000</li><li>Jangka waktu minimal&nbsp;6 Bulan.</li><li>Tidak dapat ditarik sampai jangka waktu yag ditentukan.</li><li>Nisbah bagi hasil dan hadiah yang didapatkan sesuai dengan nominal penempatan dana.</li><li>Apabila anggota mencairkan dana sebelum waktu jatuh tempo, maka akan dikenakan biaya penalti sebesar 1 kali basil per sisa bulan jangka waktu deposito.</li></ol><ul><li><strong>Keuntungan dan Fasilitas</strong></li></ul><ol><li>Mendapatkan Bilyet Deposito Syari’ah.</li><li>Mendapatkan nisbah bagi hasil setiap bulannya.</li><li>Bagi hasil kompetitif dengan <i>Equivalent Rate</i>&nbsp;Periode Januari 2022&nbsp;sebesar 5,74 %</li><li>Mendapatkan hadiah&nbsp;atas&nbsp;perpanjangan Deposito sesuai nominal penempatan dana.</li><li>Hadiah berupa barang sesuai dengan prinsip syari’ah.</li><li>Bebas biaya administrasi bulanan.</li></ol>', '2023-05-14 03:26:47', '2023-05-14 07:39:43'),
(7, 4, '<p>Program Deposito Fresh Fund&nbsp;merupakan sarana Simpanan Investasi berjangka dengan menggunakan akad Mudharabah, dan jangka waktu&nbsp;minimal 12 bulan. Ditujukan bagi anda yang ingin berinvestasi sesuai prinsip syari’ah&nbsp;dengan nisbah bagi hasil 40 % sampai 60 % per bulan.</p><ul><li><strong>Ketentuan Program</strong></li></ul><ol><li>Jumlah simpanan Deposito mulai dari : Rp 1.000.000,- sampai Rp 300.000.000</li><li>Jangka waktu minimal&nbsp;12 Bulan.</li><li>Tidak dapat ditarik sampai jangka waktu yag ditentukan.</li><li>Nisbah bagi hasil dan hadiah yang didapatkan sesuai dengan nominal penempatan dana.</li><li>Apabila anggota mencairkan dana sebelum waktu jatuh tempo, maka akan dikenakan biaya penalti sebesar 1 kali basil per sisa bulan jangka waktu deposito.</li></ol><ul><li><strong>Keuntungan dan Fasilitas</strong></li></ul><ol><li>Mendapatkan Bilyet Deposito Syari’ah.</li><li>Mendapatkan nisbah bagi hasil setiap bulannya.</li><li>Bagi hasil kompetitif dengan <i>Equivalent Rate</i>&nbsp;Periode Januari 2022&nbsp;sebesar 5,74 %</li><li>Mendapatkan hadiah&nbsp;atas&nbsp;perpanjangan Deposito sesuai nominal penempatan dana.</li><li>Hadiah berupa barang sesuai dengan prinsip syari’ah.</li><li>Bebas biaya administrasi bulanan.</li></ol>', '2023-05-14 03:49:03', '2023-05-20 10:21:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskontak`
--

CREATE TABLE `deskontak` (
  `id_deskontak` bigint(20) UNSIGNED NOT NULL,
  `link_deskontak` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `deskontak`
--

INSERT INTO `deskontak` (`id_deskontak`, `link_deskontak`, `created_at`, `updated_at`) VALUES
(1, NULL, '2023-05-19 14:31:44', '2023-05-19 14:32:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_depsyar`
--

CREATE TABLE `deskripsi_depsyar` (
  `id_deskripsi_depsyar` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_depsyar` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `deskripsi_depsyar`
--

INSERT INTO `deskripsi_depsyar` (`id_deskripsi_depsyar`, `deskripsi_depsyar`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"font-size: 16px; font-family: Arial;\">Simpanan Deposito Syari’ah merupakan sarana pilihan investasi berjangka, dengan jangka waktu 3, 6, 12, 18 sampai 24 bulan. Ditujukan bagi anda yang ingin berinvestasi sesuai prinsip syari’ah.</span></p>', '2023-03-12 02:12:43', '2023-03-25 08:24:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `deskripsi_kalkupem`
--

CREATE TABLE `deskripsi_kalkupem` (
  `id_deskripsi_kalkupem` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_kalkupem` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `deskripsi_kalkupem`
--

INSERT INTO `deskripsi_kalkupem` (`id_deskripsi_kalkupem`, `deskripsi_kalkupem`, `created_at`, `updated_at`) VALUES
(1, '<div><strong>*</strong><strong><em>Nilai yang keluar hanya merupakan simulasi, perhitungan sebenarnya sesuai kesepakatan antara Anggota dengan BMT At Taawun</em></strong></div>', '2023-06-06 02:00:49', '2023-06-06 02:02:01');

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
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` bigint(20) UNSIGNED NOT NULL,
  `gambar_galeri` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `gambar_galeri`, `created_at`, `updated_at`) VALUES
(3, 'media-galeri/mnQkZ67ul0L1v1N2H9QysKcuq5B9RMazqgZxpWaL.jpg', '2023-05-20 00:03:40', '2023-05-20 00:03:40'),
(4, 'media-galeri/VEpgI3d8pdFQd9s05Av3FDCJwgrKwKPrfA0jQGJ6.jpg', '2023-05-20 00:03:59', '2023-05-20 00:03:59'),
(5, 'media-galeri/ytdM3ehc013SdUFsTOEGl1vl2MFuwlIDbj4D16LI.jpg', '2023-05-20 00:04:19', '2023-05-20 00:04:19'),
(6, 'media-galeri/Khbj6ZqmxXDvUOZIMHqQpcamHgPUOOLVltz1ul0l.jpg', '2023-05-20 00:04:45', '2023-05-20 00:04:45'),
(8, 'media-galeri/yZkwwCCvFxMJzVntHrP0SsJYvpycSWDSPVsMkafp.jpg', '2023-05-20 00:06:23', '2023-05-20 00:06:23'),
(9, 'media-galeri/oygA00JxxFAww1cPVLLTYFCeZcxvTaEUqLHh1TJt.jpg', '2024-01-19 07:33:30', '2024-01-19 07:33:30'),
(10, 'media-galeri/hOsZsW4rcFzrjCPUQuyllpQyJJ4Tov0IU1RnZ8Nm.jpg', '2024-01-19 07:44:47', '2024-01-19 07:44:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `imagetitle`
--

CREATE TABLE `imagetitle` (
  `id_imagetitle` bigint(20) UNSIGNED NOT NULL,
  `imagetitle` text DEFAULT NULL,
  `nama_title` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `imagetitle`
--

INSERT INTO `imagetitle` (`id_imagetitle`, `imagetitle`, `nama_title`, `created_at`, `updated_at`) VALUES
(1, 'media-imagetitle/CFZ8ZN2jlu92dHtxeSrpShzaMpE5R5utfBkUbYXP.png', 'sejarah', '2023-05-14 02:17:51', '2023-05-27 01:56:14'),
(2, 'media-imagetitle/3T20Xzu2GsJebOOOpjvBu7L8smeEygu9sMMuOLXN.png', 'visi misi', '2023-05-14 02:17:51', '2023-06-27 03:05:11'),
(3, 'media-imagetitle/NN2dBCENr0KffAtcUpfY2ncb2cSTc99B5Zjp96Xw.png', 'legalitas', '2023-05-14 02:17:51', '2023-05-27 01:57:21'),
(4, 'media-imagetitle/Irt8tUC7ONgZwRzikw9MDiRqkX4V8yWvzc8LRyT1.png', 'struktur kepengurusan', '2023-05-14 02:17:51', '2023-06-27 03:05:46'),
(5, 'media-imagetitle/uorSfemwpth3eB1qlvuexXJdjnItDwktwzeGPqxO.png', 'depostio syariah', '2023-05-14 02:17:51', '2023-06-27 03:06:18'),
(6, 'media-imagetitle/SZ4atzK3OG7bAOuv6SBAMauIQaaNfZBGJ8ia11RA.png', 'pembiayaan', '2023-05-14 02:17:51', '2023-06-27 03:06:59'),
(7, 'media-imagetitle/bqK6YpAjnVA1f7SqjXAe2pCHX6mCkDgAF5c8kcHT.png', 'simpanan', '2023-05-14 02:17:51', '2023-06-27 03:07:22'),
(8, 'media-imagetitle/5aCFrW6R1x0FNjfPZGjby2aveuj9jVr6sjhhkLFV.png', 'zis', '2023-05-14 02:17:51', '2023-06-27 03:07:47'),
(9, 'media-imagetitle/C5bvZG7bnLQVD1ftcx5rbZhV6TMp8MpKrOfGoiZL.png', 'berita', '2023-05-14 02:17:51', '2023-05-27 01:59:12'),
(10, 'media-imagetitle/UmspXHqQhT19rIPVI86BIM7jc6t93Jbw9OttQNgT.png', 'kontak', '2023-05-14 02:17:51', '2023-05-27 01:59:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_operasional`
--

CREATE TABLE `jam_operasional` (
  `id_jam_operasional` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) NOT NULL,
  `status` enum('kerja','libur') NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id_jumbotron` bigint(20) UNSIGNED NOT NULL,
  `gambar_jumbotron` text DEFAULT NULL,
  `judul_jumbotron` varchar(100) NOT NULL,
  `deskripsi_jumbotron` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jumbotron`
--

INSERT INTO `jumbotron` (`id_jumbotron`, `gambar_jumbotron`, `judul_jumbotron`, `deskripsi_jumbotron`, `created_at`, `updated_at`) VALUES
(1, 'media-jumbotron/uWGKicUXlUe0HLggynrpYfG1B0dYftOYa4tkErBe.jpg', 'Koperasi Simpan Pinjam & Pembiayaan Syariah', 'BMT AT-TA’AWUN Mitra Sembada\r\n“Sahabat Menuju Hidup Sejahtera”', '2023-04-01 02:02:42', '2023-04-01 02:41:48'),
(2, 'media-jumbotron/2IHDDcatT56ApjycAgaUOF2l80J12sJOkqaEeaM4.jpg', 'BMT AT-TA\'AWUN MITRA SEMBADA', 'Siap Membantu Mensejahterakan Ekonomi Ummat', '2023-04-01 02:16:11', '2023-04-01 05:22:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalkupem`
--

CREATE TABLE `kalkupem` (
  `id_kalkupem` bigint(20) UNSIGNED NOT NULL,
  `bulan` varchar(5) DEFAULT NULL,
  `bunga` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kalkupem`
--

INSERT INTO `kalkupem` (`id_kalkupem`, `bulan`, `bunga`, `created_at`, `updated_at`) VALUES
(3, '1', '1.9', '2023-06-06 02:08:59', '2023-06-06 02:08:59'),
(4, '2', '3.8', '2023-06-06 02:09:27', '2023-06-06 02:09:27'),
(5, '3', '5,7', '2023-06-06 02:12:22', '2023-06-06 02:12:22'),
(6, '4', '7.6', '2023-06-06 02:13:39', '2023-06-06 02:15:19'),
(7, '5', '9.5', '2023-06-06 02:14:11', '2023-06-06 02:14:11'),
(8, '6', '11.4', '2023-06-06 02:16:16', '2023-06-06 02:16:16'),
(9, '7', '13.3', '2023-06-06 02:16:38', '2023-06-06 02:16:38'),
(10, '8', '15.2', '2023-06-06 02:17:00', '2023-06-06 02:17:00'),
(11, '9', '17.1', '2023-06-06 02:17:28', '2023-06-06 02:17:28'),
(12, '10', '19', '2023-06-06 02:17:56', '2023-06-06 02:17:56'),
(13, '11', '20.9', '2023-06-06 02:18:36', '2023-06-06 02:18:36'),
(14, '12', '22.8', '2023-06-06 02:19:13', '2023-06-06 02:19:13'),
(15, '13', '24.7', '2023-06-06 02:19:39', '2023-06-06 02:19:39'),
(16, '14', '26.6', '2023-06-06 02:20:03', '2023-06-06 02:20:03'),
(17, '15', '28.5', '2023-06-06 02:21:07', '2023-06-06 02:21:07'),
(18, '16', '30.4', '2023-06-06 02:21:35', '2023-06-06 02:21:35'),
(19, '17', '32.3', '2023-06-06 02:22:07', '2023-06-06 02:22:07'),
(20, '18', '34.2', '2023-06-06 02:22:37', '2023-06-06 02:22:37'),
(21, '19', '36.1', '2023-06-06 02:22:58', '2023-06-06 02:22:58'),
(22, '20', '38', '2023-06-06 02:23:18', '2023-06-06 02:23:18'),
(23, '21', '39.9', '2023-06-06 02:23:50', '2023-06-06 02:23:50'),
(24, '22', '41.8', '2023-06-06 02:24:10', '2023-06-06 02:24:10'),
(25, '23', '43,7', '2023-06-06 02:24:30', '2023-06-06 02:24:30'),
(26, '24', '45.6', '2023-06-06 02:24:48', '2023-06-06 02:24:48'),
(27, '25', '47.5', '2023-06-06 02:28:36', '2023-06-06 02:28:36'),
(28, '26', '49.4', '2023-06-06 02:28:59', '2023-06-06 02:28:59'),
(29, '27', '51.3', '2023-06-06 02:29:28', '2023-06-06 02:29:28'),
(30, '28', '53.2', '2023-06-06 02:29:55', '2023-06-06 02:29:55'),
(31, '29', '55.1', '2023-06-06 02:30:17', '2023-06-06 02:30:17'),
(32, '30', '57', '2023-06-06 02:30:34', '2023-06-06 02:30:34'),
(33, '31', '58.9', '2023-06-06 02:30:52', '2023-06-06 02:30:52'),
(34, '32', '60.8', '2023-06-06 02:31:18', '2023-06-06 02:31:18'),
(35, '33', '62.7', '2023-06-06 02:31:36', '2023-06-06 02:31:36'),
(36, '34', '64.6', '2023-06-06 02:31:55', '2023-06-06 02:31:55'),
(37, '35', '66.5', '2023-06-06 02:32:20', '2023-06-06 02:32:20'),
(38, '36', '68.4', '2023-06-06 02:32:40', '2023-06-06 02:32:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kateber`
--

CREATE TABLE `kateber` (
  `id_kateber` bigint(20) UNSIGNED NOT NULL,
  `nama_kateber` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kateber`
--

INSERT INTO `kateber` (`id_kateber`, `nama_kateber`, `created_at`, `updated_at`) VALUES
(1, 'Berita', '2023-03-25 14:51:08', '2023-03-25 14:51:08'),
(2, 'Artikel', '2023-03-25 14:51:22', '2023-03-25 14:51:22'),
(3, 'lowongan pekerjaan', '2023-03-25 14:59:14', '2023-03-25 14:59:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katedeposito`
--

CREATE TABLE `katedeposito` (
  `id_katedeposito` bigint(20) UNSIGNED NOT NULL,
  `nama_katedeposito` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `katedeposito`
--

INSERT INTO `katedeposito` (`id_katedeposito`, `nama_katedeposito`, `created_at`, `updated_at`) VALUES
(2, 'program deposito berhadiah emas', '2023-05-14 02:30:43', '2023-06-27 04:27:23'),
(3, 'program deposito eksisting', '2023-05-14 02:31:00', '2023-05-14 02:31:00'),
(4, 'program deposito fresh fund', '2023-05-14 02:31:20', '2023-05-14 02:31:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katepem`
--

CREATE TABLE `katepem` (
  `id_katepem` bigint(20) UNSIGNED NOT NULL,
  `nama_katepem` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `katepem`
--

INSERT INTO `katepem` (`id_katepem`, `nama_katepem`, `created_at`, `updated_at`) VALUES
(1, 'Pembiayaan Murabahah', '2023-03-12 10:10:23', '2023-03-12 10:10:23'),
(2, 'Pembiayaan Ijarah Multi Jasa', '2023-03-12 10:10:38', '2023-03-12 10:10:38'),
(3, 'Pembiayaan Musyarakah', '2023-03-12 10:10:52', '2023-03-12 10:10:52'),
(4, 'Pembiayaan Mudharabah', '2023-03-12 10:11:05', '2023-03-12 10:11:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katesim`
--

CREATE TABLE `katesim` (
  `id_katesim` bigint(20) UNSIGNED NOT NULL,
  `nama_katesim` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `katesim`
--

INSERT INTO `katesim` (`id_katesim`, `nama_katesim`, `created_at`, `updated_at`) VALUES
(1, 'Simpanan Ta’awun', '2023-03-11 14:52:54', '2023-03-11 14:52:54'),
(2, 'Simpanan Terencana', '2023-03-11 14:53:05', '2023-03-11 14:53:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katestrukep`
--

CREATE TABLE `katestrukep` (
  `id_katestrukep` bigint(20) UNSIGNED NOT NULL,
  `nama_katestrukep` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `katestrukep`
--

INSERT INTO `katestrukep` (`id_katestrukep`, `nama_katestrukep`, `created_at`, `updated_at`) VALUES
(1, 'Dewan Pengawas Syariah', '2023-03-25 07:21:39', '2023-03-25 07:21:39'),
(2, 'Pengawas Manajemen', '2023-03-25 07:24:56', '2023-03-25 07:24:56'),
(3, 'Pengurus', '2023-03-25 07:31:02', '2023-03-25 07:31:02'),
(4, 'Pengelola', '2023-03-25 07:32:57', '2023-03-25 07:32:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatanzis`
--

CREATE TABLE `kegiatanzis` (
  `id_kegiatanzis` bigint(20) UNSIGNED NOT NULL,
  `gambar_kegiatanzis` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_operasional`
--

CREATE TABLE `ket_operasional` (
  `id_ket_operasional` bigint(20) UNSIGNED NOT NULL,
  `keterangan_operasional` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ket_operasional`
--

INSERT INTO `ket_operasional` (`id_ket_operasional`, `keterangan_operasional`, `created_at`, `updated_at`) VALUES
(1, '<div>Senin - Jum\'at 08:30 s/d 16:00&nbsp;<br>Sabtu 09:00 s/d 12:00</div>', '2023-03-11 02:31:31', '2023-04-01 04:49:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keunggulan`
--

CREATE TABLE `keunggulan` (
  `id_keunggulan` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_keunggulan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keunggulan`
--

INSERT INTO `keunggulan` (`id_keunggulan`, `deskripsi_keunggulan`, `created_at`, `updated_at`) VALUES
(1, 'Seluruh Produk Menggunakan Prinsip Syariah', '2023-03-25 16:15:48', '2023-03-25 16:15:48'),
(2, 'Bebas Biaya Administrasi Bulanan', '2023-03-25 16:16:06', '2023-03-25 16:16:06'),
(3, 'Gratis Biaya Fasilitas Antar Jemput Setoran', '2023-03-25 16:16:21', '2023-03-25 16:16:21'),
(4, 'Keuntungan Menabung Akan Mendapatkan Bonus', '2023-03-25 16:16:34', '2023-03-25 16:16:34'),
(5, 'Keuntungan Simpanan Perencanaan Dan Deposito Syariah Akan Mendapatkan Bagi Hasil (Basil)', '2023-03-25 16:16:54', '2023-03-25 16:16:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` bigint(20) UNSIGNED NOT NULL,
  `whatsapp` tinyint(1) NOT NULL DEFAULT 0,
  `no_kontak` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `whatsapp`, `no_kontak`, `deskripsi`, `created_at`, `updated_at`) VALUES
(3, 1, '0895801002012', 'CP Customer Service', '2023-03-11 07:48:18', '2023-03-11 13:36:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotak_saran`
--

CREATE TABLE `kotak_saran` (
  `id_kotak_saran` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(255) DEFAULT NULL,
  `saran` text DEFAULT NULL,
  `open` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kotak_saran`
--

INSERT INTO `kotak_saran` (`id_kotak_saran`, `nama`, `email`, `telepon`, `saran`, `open`, `created_at`, `updated_at`) VALUES
(1, 'rochim', 'email@yopmail.com', '08776262616', 'mantap pokok e', '1', '2023-03-25 16:36:34', '2023-03-25 16:36:50'),
(2, 'Nama', 'email@yopmail.com', '976487234827', 'asikkkk', '1', '2023-04-01 05:36:48', '2023-04-01 05:37:09'),
(3, 'rochim', 'mamadanjar@gmail.com', '082125441119', 'test', '1', '2023-05-20 10:25:33', '2023-05-20 10:25:58'),
(4, 'Matthias Kopsen', 'kopsen.matthias32@gmail.com', '727-395-7602', 'Let me submit your site to 35 classified ad sites for free. Go ahead and claim your free submission here: http://submityoursitefree.12com.xyz/', NULL, '2023-06-11 12:13:53', '2023-06-11 12:13:53'),
(5, 'Lashawn Ventura', 'ventura.lashawn77@msn.com', '01.75.91.77.08', 'Submit your site http://bmtattaawunmitrasembada.com to our free business directory here: http://submityoursitefree.12com.xyz/', NULL, '2023-07-10 03:27:46', '2023-07-10 03:27:46'),
(6, 'Amelia Tiemann', 'tiemann.amelia71@yahoo.com', '0681 992 34 55', 'Want free traffic? Submit your website for free to over 35 classified ad sites here: http://submityoursitefree.12com.xyz/', NULL, '2023-07-30 01:16:33', '2023-07-30 01:16:33'),
(7, 'Penelope Tober', 'tober.penelope@gmail.com', '0369 9872957', 'Quick question to ask you...\r\n \r\nAre you aware that in 2023, email marketing still works? \r\nThe fact that you are reading these lines is proof of that.\r\n\r\nEmail marketing is underrated, and yet it works so well.  \r\nAll you have to do is find some emails, send a message and cash in.\r\n\r\nFor example, to find emails you can use this service: https://garymarketing.com/go/scrap-gmap\r\n\r\nIt extracts emails, phone numbers, and lots of other information from Google Map listings.\r\n\r\nOf course, there are plenty of other ways to get in touch with your ideal customers.\r\nContact me on Skype and let\'s discuss what will work for your product/service. \r\n- My Skype ID: live:.cid.6b79b1d5a11a2ec7\r\n- My Blog : garymarketing.com\r\n\r\n\r\nRegards,\r\nGary & Ophélie\r\n\r\n\r\n\r\n------ \r\n\r\nJ\'ai une petite question à vous poser...\r\n\r\nSavez-vous qu\'en 2023, l\'email marketing fonctionne toujours très bien ? \r\nLa preuve, vous lisez ces lignes.\r\n\r\nL\'email marketing est clairement sous-couté,\r\nIl  suffit de trouver les coordonnées de vos clients idéaux, d\'entrer en contact, et d\'encaisser.\r\n\r\nPour trouver les coordonnées d\'entreprise, vous pouvez par exemple utiliser ce service : scrapmybusiness.com\r\nIl permet d\'extraire les emails, les numéros de téléphone et de nombreuses autres informations a partir des fiches entreprises de Google Map.\r\n\r\nBien sur il y\'a plein d\'autre solutions pour entrer en contact avec vos clients idéaux\r\n\r\nAjouter moi sur Skype et discutons de ce qui conviendrait le plus pour promouvoir votre produit/service.\r\n- Identifiant Skype: live:.cid.83c9da999a4f9f\r\n- Mon Blog : http://garymarketing.com\r\n\r\nCordialement,\r\nOphélie et Gary.', NULL, '2023-08-03 19:04:25', '2023-08-03 19:04:25'),
(8, 'Alisia Lamontagne', 'alisia.lamontagne@outlook.com', '0664 659 27 57', 'Hi, I\'m sending you this message via your contact form on your website at bmtattaawunmitrasembada.com. By reading this message you\'re living proof that contact form advertising works! Do you want to blast your ad to millions of contact forms? Maybe you prefer a more targeted approach and only want to blast our ad out to websites in certain business categories? Pay just $99 to blast your ad to 1 million contact forms. Volume discounts available. I have more than 35 million contact forms. Let\'s get the conversation started, contact me via Skype here:  live:.cid.aebc78a94c13344c', NULL, '2023-09-12 19:52:22', '2023-09-12 19:52:22'),
(9, 'Andre Clarke', 'stedman.allison@outlook.com', '079 1548 1096', 'Hey there,\r\n\r\nWas looking at your site today and I thought this would probably interest you.\r\n\r\nAre you tired of traditional virtual assistants who lack the expertise to handle complex tasks? Feeling overwhelmed by the thought of diving into generative AI? We\'ve got the game-changing solution you\'ve been waiting for: Myaa\'s AI-Powered Personal Support Agents.\r\n\r\nImagine the best of both worlds: a personal assistant who\'s a live professional expert at leveraging the power of thousands of AI Agents. That\'s exactly what you get with Myaa. Our AI-Powered Personal Support Agents are trained to perfection in writing excellent prompts and harnessing the capabilities of our AI Agents.\r\n\r\nBut here\'s the best part: we\'re offering a one-week free trial for you to experience the transformative capabilities of our agents firsthand. No obligations, no strings attached. Just a chance to see how our AI-Powered Personal Support Agents, the experts in leveraging AI technology, can revolutionize the way you manage your business.\r\n\r\nDon\'t miss out on this exclusive opportunity. Click below to schedule a call and claim your one-week free trial:\r\n\r\nhttps://bit.ly/Free-AI-Powered-Support-Agent\r\n\r\nDuring the call, our experts will guide you through the process and pair you with the perfect Myaa AI-Powered Personal Support Agent for your business. Say goodbye to inefficiency and hello to expert assistance.\r\n\r\nGet started now and unlock the full potential of generative AI with Myaa\'s AI-Powered Personal Support Agents.\r\n\r\nCheers,\r\n\r\nAndre Clarke\r\nBusiness Development\r\nMyaa', NULL, '2023-09-27 05:43:37', '2023-09-27 05:43:37'),
(10, 'Mei Phipps', 'mei.phipps@msn.com', '(02) 6777 2866', 'I was sending you this message on your website contact page (bmtattaawunmitrasembada.com) to show you how contact form advertising works. We can send messages just like these for your business to millions of sites for less than a couple of hundred dollars. Let\'s get the conversation started and I\'ll share pricing and more details. Hit me up on Skype for a chat now -->  live:.cid.dd8a3501619891fe', NULL, '2023-09-28 02:31:34', '2023-09-28 02:31:34'),
(11, 'Elliott Hebert', 'hebert.elliott@hotmail.com', '0934-2923111', 'Hi, I like your site. You can check out using modern presentations at http://presenterstudios.com and grow your revenue on YouTube now.', NULL, '2023-09-29 11:23:03', '2023-09-29 11:23:03'),
(12, 'Jimmy Begum', 'begum.joshua@gmail.com', '9297383975', 'Hi there,\r\nMonthly Seo Services - Professional/ Affordable Seo Services\r\nHire the leading seo marketing company and get your website ranked on search engines. Are you looking to rank your website on search engines? Contact us now to get started - https://digitalpromax.co/la/  Today!\r\n\r\nPsst.. we will also do web design and build complete website. Wordpress and Ecommerce sites development. Click here: https://wpexpertspro.co/website/', NULL, '2023-10-08 18:10:04', '2023-10-08 18:10:04'),
(13, 'Michael Sinclair', 'msinclair.hivemailers@gmail.com', '450 5127', 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael', NULL, '2023-10-09 01:10:26', '2023-10-09 01:10:26'),
(14, 'Suzie Williams', 'mackenzie.poirier10@gmail.com', '0481 24 26 99', 'Hi, excellent website. You can look at using revolutionary presentations at http://presentervisuals.com and boost your traffic on youtube this year.', NULL, '2023-10-09 16:45:40', '2023-10-09 16:45:40'),
(15, 'Leonidslums', 'car90@internet.ru', '89644340397', 'Сервис по доставке и торгу товаров из Китая \r\n \r\nВы занимаетесь реализацией китайских товаров либо только подумывайте открыть свой бизнес в такой область деятельности? Наша компания ASIANCATALOG.RU — ваш авторитетный партнёр на китайском рынке! \r\n \r\nЧто мы предлагаем? \r\n \r\n— Поиск товаров и производителей в Китае по вашему запросу. \r\n— Прямое проведение сделки: от выкупа товара у товаропроизводителя до отправки его вам в руки. \r\n— Калькуляцию ставки перевозки, таможенных платежей и всех важных сертификаций. \r\n— Комплексное таможенное оформление. \r\n \r\nКак это работает? \r\n \r\n1. Вы посылаете нам заявку на интересующий товар. \r\n2. Мы ищем идеального поставщика, рассчитываем все траты. \r\n3. После вашего утверждения заключаем договор и приступаем к работе. \r\n \r\nДля кого наши услуги? \r\n \r\n— Для промышленников, торгующих зоотоварами, промышленными товарами и абсолютно любыми другими товарами из Китая. \r\n— Для тех, кто только планирует начать свою товарную деятельность и подыскивает высоконадежного партнёра. \r\n \r\nМы предлагаем всеобъемлющее решение «под ключ», благодаря которому вы можете выбрать совершенного всякий товар, изготовляемый в Китае, без ненужных забот и рисков. \r\n \r\nПодробно о нас и наших услугах вы можете узнать на нашем веб сайте: https://asiancatalog.ru \r\nВыберите профессионализм и многолетний опыт — выберите нас!', NULL, '2023-10-10 10:02:51', '2023-10-10 10:02:51'),
(16, 'Bess Moffet', 'bess.moffet@gmail.com', '0303-9228406', 'Accidental overdose is the #1 cause of death for people aged 18-45 in the United States.\r\n\r\n \r\n\r\nNarcan is a nasal spray that can reverse an opioid overdose, saving the person’s life.  Our group of volunteers has compiled a website that tracks organizations that are giving out free and discount Narcan, this site is  https://www.narcan-finder.com/. \r\n\r\n \r\n\r\nEventually this life saving medication will be as easy to find as a fire extinguisher, but at the moment, it’s only gradually becoming available, and often expensive at drugstores, etc. Would you consider sharing our resource on your website?  It will save lives.\r\n\r\n \r\n\r\nIf you have any questions or want to help spread the word, contact us at narcanfinder@gmail.com. Thank you for your consideration!', NULL, '2023-10-15 16:24:24', '2023-10-15 16:24:24'),
(17, 'Kara Maki', 'maki.kara@gmail.com', '24-94-11-15', 'Quick question to ask you...\r\n \r\nAre you aware that in 2023, email marketing still works? \r\nThe fact that you are reading these lines is proof of that.\r\n\r\nEmail marketing is underrated, and yet it works so well.  \r\nAll you have to do is find some emails, send a message and cash in.\r\n\r\nFor example, to find emails you can use this service: https://garymarketing.com/go/scrap-gmap\r\n\r\nIt extracts emails, phone numbers, and lots of other information from Google Map listings.\r\n\r\nOf course, there are plenty of other ways to get in touch with your ideal customers.\r\nContact me on Skype and let\'s discuss what will work for your product/service. \r\n- My Skype ID: live:.cid.6b79b1d5a11a2ec7\r\n- My Blog : garymarketing.com\r\n\r\n\r\nRegards,\r\nGary & Ophélie\r\n\r\n\r\n\r\n------ \r\n\r\nJ\'ai une petite question à vous poser...\r\n\r\nSavez-vous qu\'en 2023, l\'email marketing fonctionne toujours très bien ? \r\nLa preuve, vous lisez ces lignes.\r\n\r\nL\'email marketing est clairement sous-couté,\r\nIl  suffit de trouver les coordonnées de vos clients idéaux, d\'entrer en contact, et d\'encaisser.\r\n\r\nPour trouver les coordonnées d\'entreprise, vous pouvez par exemple utiliser ce service : scrapmybusiness.com\r\nIl permet d\'extraire les emails, les numéros de téléphone et de nombreuses autres informations a partir des fiches entreprises de Google Map.\r\n\r\nBien sur il y\'a plein d\'autre solutions pour entrer en contact avec vos clients idéaux\r\n\r\nAjouter moi sur Skype et discutons de ce qui conviendrait le plus pour promouvoir votre produit/service.\r\n- Identifiant Skype: live:.cid.83c9da999a4f9f\r\n- Mon Blog : http://garymarketing.com\r\n\r\nCordialement,\r\nOphélie et Gary.', NULL, '2023-10-17 03:49:43', '2023-10-17 03:49:43'),
(18, 'Johnny Allnutt', 'allnutt.theron@hotmail.com', '457 1227', 'Hello, if you\'re a big sports fan I think you\'ll love the modern betting systems at https://winsportpicks.com\r\n\r\nSince 1999 they have an 80%+ accuracy thanks to their carefully researched & developed predicition system, staking rules, and sports analysis. \r\n\r\nThey take a methodical approach and trade the sports betting markets daily for amazing profit opportunities!\r\n\r\nGo to https://winsportpicks.com and see their track record and join today. Pick from 150+ sports systems for basketball, baseball, football, soccer, horse racing and more. \r\n\r\nIt\'s time to start enjoying a new and fun way to earn money on the side. Put your trust in professional sports handicappers and systems with verified records. \r\n\r\nGet ready to pick more winners & grow your bankroll today.\r\n\r\nJohnny', NULL, '2023-10-19 17:43:04', '2023-10-19 17:43:04'),
(19, 'Remona Hosking', 'hosking.remona@googlemail.com', '0377 4985433', 'want to get an alert when your website is down? then use our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HmMMe?bmtattaawunmitrasembada.com   for more info', NULL, '2023-10-21 18:33:56', '2023-10-21 18:33:56'),
(20, 'Michael Sinclair', 'msinclair.hivemailers@gmail.com', '05.04.23.91.45', 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael', NULL, '2023-10-22 16:17:58', '2023-10-22 16:17:58'),
(21, 'Sherri Gladney', 'sherri.gladney@msn.com', '06625 26 26 61', 'want to get an alert when your website is down? then signup to our 24on7 web monitor - it\'s absolutely free! \r\nvisit https://t.ly/HM1Fg?bmtattaawunmitrasembada.com   for more info', NULL, '2023-10-22 17:32:06', '2023-10-22 17:32:06'),
(22, 'Jess Pendley', 'jess.pendley92@gmail.com', '06027 36 45 53', 'Got something you want to share with millions of people? Just like I contacted you via your website right now I can do the same thing for whatever you want to promote. Just give me your ad text and I\'ll blast it to millions of website contact forms. Pricing starts at just $99 for 1 million. Skype me here for details: live:.cid.303294bd15a81bc7', NULL, '2023-10-23 02:30:50', '2023-10-23 02:30:50'),
(23, 'Sonya Dalrymple', '10xtriplethreat@gmail.com', '02.57.05.15.43', 'Hey,\r\n\r\nAre you ready to skyrocket your sales and take your business to the next level? I\'m Sonya from Triple Threat Success-10X Coaching, reaching out with an incredible opportunity to transform your business.\r\n\r\nAs a business owner or coach, you understand the importance of closing more sales, increasing attention, and generating a consistent flow of leads. That\'s where we come in. Our 10X the Triple Threat Success program is designed to help you do just that - close more deals, attract more clients, and get the attention your business deserves.\r\n\r\nYou may be thinking, \"Closing deals and getting more leads is easier said than done.\" But trust me, it doesn\'t have to be. Many people believe that selling is hard and that getting leads costs too much. But here\'s the truth: with our proven 10X system, you can close on average 30% more by simply implementing our strategies.\r\n\r\nImagine the impact on your business - more revenue, more clients, and more success. You\'ll see results almost immediately, as long as you\'re an \"action taker.\" Act now and schedule FREE 10X strategy call to receive valuable insights tailored to your business and a clear roadmap to boosting your sales. If you qualify, there\'s a limited-time 50% discount on our group coaching package.\r\n\r\nDon\'t let the hurdle of closing more deals hold you back. Leverage our 10X system to overcome this obstacle and thrive in your industry. Book your FREE 10X strategy call now:\r\n\r\nClick here: --> https://bit.ly/triplethreatsuccess \r\n\r\nReady to say goodbye to stagnant sales and hello to explosive growth? Book your FREE 10X strategy call now and let us show you how to talk to more people and close more deals.\r\n\r\nLooking forward to helping you achieve your business goals!\r\n\r\nSonya\r\nTriple Threat Success-10X Coaching\r\n\r\nP.S. For less than the price of a fancy dinner out, gain access to the secrets of closing more deals, attracting clients, and getting the attention your business deserves.\r\n\r\nClick here: --> https://bit.ly/triplethreatsuccess', NULL, '2023-10-24 17:07:40', '2023-10-24 17:07:40'),
(24, 'Grant Lira', 'davidsturner36@gmail.com', '035697 20 31', 'Hey,\r\n\r\nYou just pay per booked appointment that shows up & there is no set-up fee with our company. \r\n\r\nI know you just read this message and are probably hesitant to believe it. \r\n\r\nSo to be clear, you are getting SHOWED appointments for just 135 each with no upfront expense. \r\n\r\nThe sole reason we couldn\'t help you is if you don’t meet any of the following requirements:\r\n\r\n- B2B business\r\n- 7 figure+ business\r\n- You serve a wide variety of clients (not niched down in an industry)\r\n- Have a unique value proposition\r\n- Be able to take on 50 additional appoints each month (bare minimum) \r\n\r\nI originally reached out because I believe you qualify for these, but let me know if I’m incorrect as we wouldn’t be able to produce results then. \r\n\r\nIf these are true for your company, It’d be awesome to have a quick chat here to see how we can help: \r\n\r\nhttps://bit.ly/empathyfirm-convo\r\n\r\nBest, \r\nGrant', NULL, '2023-10-26 16:02:02', '2023-10-26 16:02:02'),
(25, 'Michael Sinclair', 'disher.ulrike@gmail.com', '078 1883 0143', 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael', NULL, '2023-10-29 19:33:50', '2023-10-29 19:33:50'),
(26, 'Kim Wheatley', 'kcreativeart@googlemail.com', '070-3116333', 'Hey there,\r\n\r\nStruggling to attract clients and grow your business? Tired of blending in with the competition? My name is Mr. Kim Wheatley and I have the solution for you.\r\n\r\nIntroducing our “15 Minutes a Day, 5-Day Business Growth Accelerator” program. It\'s time to rise above and position yourself as the go-to expert in your industry. Imagine effortlessly attracting high-quality clients who value your worth and are willing to pay a premium.\r\n\r\nHere\'s the problem: many believe price is the only factor clients care about. But we know better. Our program shows you how to effectively communicate your unique value proposition, leaving your competitors in the dust.\r\n\r\nThe best part? You\'ll see results almost immediately. Our proven strategies deliver tangible growth from day one. No more wasted time and money on ineffective tactics.\r\n\r\nBut hurry - limited spots available. Don\'t miss out on this exclusive opportunity to transform your business and secure your future.\r\n\r\nClick below to secure your spot in our Business Growth Accelerator program:\r\n\r\nClick here: --> https://bit.ly/bg-accelerator \r\n\r\nBreak free from the struggle and unlock your business growth potential.\r\n\r\nTo your unstoppable growth,\r\n\r\nMr. Kim Wheatley\r\n\r\nP.S. Don\'t miss your chance to stand out from the competition. Click below to secure your spot:\r\n\r\nClick here: --> https://bit.ly/bg-accelerator', NULL, '2023-11-01 07:31:24', '2023-11-01 07:31:24'),
(27, 'Latosha Eisen', 'latosha.eisen@msn.com', '06-28532178', 'Good job on the new site! Submit it to our directory for increased traffic. http://addwebsitetodir.rt32.xyz', NULL, '2023-11-02 01:29:06', '2023-11-02 01:29:06'),
(28, 'Alanna Reese', 'reese.alanna42@gmail.com', '070 7523 4188', 'Want to find out how to promote your site without paying for advertising? Check out: ivxxi.com', NULL, '2023-11-06 21:50:41', '2023-11-06 21:50:41'),
(29, 'Grant Lira', 'grantlira003@gmail.com', '(02) 4070 0772', 'Are you available to come on a podcast as a guest?\r\n\r\nIf so, our firm will book you on a podcast within one week.\r\n\r\nIf you’re available to do this, I’d also like to repurpose the content from your podcast to provide you and your business, online article features, and video content for social media. \r\n\r\nPlacing you on podcasts does require an expense, but the online media features and the repurposed video content we will provide completely on us because this is our first time working together :). \r\n\r\nWe are doing this for the first 10 people who reply back to us who qualify because it takes up a good amount of our team\'s time.\r\n\r\nThe one thing I ask is that you tell me if your business is NOT doing 7+ figures.\r\n\r\nI reached out to you because I think you have a 7+ figure business. Most of the hosts that we have connections with are looking for 7+ figure business owners to interview.\r\n\r\nI want to make sure we don’t lie to them so let me know if you are not.\r\n\r\nSo, if you qualify, and want to be booked on a podcast you can chat with our Co-Founder here:\r\n\r\nhttps://bit.ly/empathyfirm-podcast\r\nBest,\r\nGrant\r\nPS - I won’t see your response on here so if you have a question, please book a call (:\r\n\r\n\r\n\r\n\r\nN6565 Shorewood Hills Rd. Lake Mills WI, 53551\r\nEmail unsubnow1@gmail.com with your website to “unsubscribe” meaning you won’t hear from me again.', NULL, '2023-11-08 23:06:57', '2023-11-08 23:06:57'),
(30, 'Marty Tierney', 'aimyloanfast@gmail.com', '078 1849 8176', 'Hello,\r\n\r\nCutting To The Chase Here, we both know that Working Capital is The Lifeblood within your business’s veins. \r\n\r\nBanks are cutting out the business owners’ access to capital, what a shame, they don’t give a hoot, but we do!  We have your payroll, working capital, SBA, and lines of credit Today!\r\n\r\nJust A One Page Application, get to know us and let’s help all businesses rise together. We can fund you within 24 hours.\r\n\r\nYou have two questions:\r\nA. How Much Can I Get &\r\nB. How Fast Can I Get It\r\n\r\nWe Loan Out Up To 2.5 times your gross monthly revenue & once agreed we lend quickly.\r\n\r\nWe’ve done Billions in loans, It’s our money, our credit facilities, So we won’t waste your time!\r\n\r\n94% Of the time we say YES!\r\n\r\nCheck out my info on this link and book an appointment with me ASAP.\r\n\r\nhttps://bit.ly/aimyloan\r\n\r\nLet’s Grow Together & We Will Be There When The Banks Won’t & Don’t Care About You!\r\n\r\nKindly,\r\nMarty J. Tierney\r\n\r\n“Failure & Success Leaves Clues, Let’s Make You A Success”', NULL, '2023-11-13 20:14:44', '2023-11-13 20:14:44'),
(31, 'Andre Clarke', 'mohammad.braxton@msn.com', '01.79.08.75.69', 'Hey there,\r\n\r\nWas looking at your site today and I thought this would probably interest you.\r\n\r\nAre you tired of traditional virtual assistants who lack the expertise to handle complex tasks? Feeling overwhelmed by the thought of diving into generative AI? We\'ve got the game-changing solution you\'ve been waiting for: Myaa\'s AI-Powered Live Agents.\r\n\r\nImagine the best of both worlds: a personal live administrative assistant who is also an expert at leveraging the power of thousands of AI Agents. That\'s exactly what you get with Myaa. Our AI-Powered Live Agents are trained to perfection in writing excellent prompts and harnessing the capabilities of our AI Agents.\r\n\r\nOur Live Agents Combined With Our AI Agents Can:\r\n\r\n•	Handle a variety of tasks and projects for you so that your day is more productive.\r\n•	Work as a unified team (Live Agent and AI Agents) to accomplish hundreds of tasks in record time. \r\n•	Follow up on internal/external resources to ensure that there is daily progress.\r\n•	Give you back time to focus on building your business instead of admin tasks.\r\n\r\n... and much, MUCH more!\r\n\r\nBut here\'s the best part: we\'re offering a one-week free trial for you to experience the transformative capabilities of our agents firsthand. No obligations, no strings attached. Just a chance to see how our AI-Powered Live Agents, the experts in leveraging AI technology, can revolutionize the way you manage your business.\r\n\r\nDon\'t miss out on this exclusive opportunity. Click below to schedule a call and claim your one-week free trial:\r\n\r\nClick here: --> https://bit.ly/myaa-live-agent \r\n\r\nDuring the call, our experts will guide you through the process and pair you with the perfect Myaa AI-Powered Live  Agent for your business. Say goodbye to inefficiency and hello to expert assistance.\r\n\r\nGet started now and unlock the full potential of generative AI with Myaa\'s AI-Powered Live Agents.\r\n\r\nCheers,\r\n\r\nAndre Clarke\r\nBusiness Development\r\nMyaa', NULL, '2023-11-14 23:30:14', '2023-11-14 23:30:14'),
(32, 'Michael Sinclair', 'lauren.mcgirr@gmail.com', '079 6077 0912', 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting two-hundred and fifty thousand (250,000) emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nWHO THIS IS FOR:\r\n\r\n- Companies who offer products/services to businesses (B2B).\r\n- Companies who provide a product/service with wide appeal (not a small niche).\r\n- Companies who product/service can be sold across the USA and/or international.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send out two-hundred and fifty thousand (250,000) emails for just $48.\r\n\r\nTake action today and let’s get you some leads. This offer is good for the first 20 clients, don’t miss out.\r\n\r\nSimply book a time to talk on our calendar: https://bit.ly/hivemailer-special \r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nSincerely,\r\n\r\nMichael\r\nHiveMailers\r\n\r\nCalendar: https://bit.ly/hivemailer-special', NULL, '2023-11-16 07:59:34', '2023-11-16 07:59:34'),
(33, 'Kit Merrett', 'kit.merrett@gmail.com', '0676 809 72 46', 'Want to know the secret to getting more customers without advertising? Visit http://Kit.tg4.xyz', NULL, '2023-11-16 08:50:50', '2023-11-16 08:50:50'),
(34, 'Elana Hutto', 'elana.hutto93@yahoo.com', '0327 5699728', 'Do you do contact form blasts? I have a list of over 30 million website contact forms for sale, all fully tested with gsa and confirmed working. Don\'t do any blasts? Why not? I can either provide the service for you or show you how to do it and where to buy the best software for doing this. Shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps67050@gomail2.xyz', NULL, '2023-11-17 04:38:17', '2023-11-17 04:38:17'),
(35, 'Theresa Smith', 'carole.lucas@hotmail.com', '08821 66 53 71', 'Hello,\r\n\r\nI work for Elebands. \r\n\r\nWe make ultra-thin, fashionable, all day wearable body weight bands that you put on your wrist, ankle & waist all day to burn up to 1,500 calories, and the best part is, we have bands for sports, casual and formal, so you can wear them with any outfit and look fashionable. \r\n\r\nThe problem that most people face, is a tug of war between working out or putting more time in at work, and the worst thing is, most people choose work, and that is why the mortality rate today is so high for executives and the working class. \r\n\r\nThat is why we are so excited to solve this problem with our ultra-thin, fashionable, all day wearable body weight bands that allow you to lose weight and get fit no matter where you are and no matter what you are doing.\r\n\r\nBenefits You’ll Get Instantly:\r\n You’ll burn up to 1,500 calories a day as your body gets more toned.\r\n You’ll start losing weight the natural way without having to workout.\r\n You’ll start building more muscles and strength as you just go about your day.\r\n\r\nImagine getting the body you always wanted, without having to workout at a gym or having to go on a stressful diet. Well now you can, with Elebands. \r\n\r\nMany of our clients are losing 2-3 pounds a week and getting tremendous health benefits.\r\n\r\nUse this coupon code to get 20% off:  SAVE-20%-TODAY\r\n\r\nVisit our site now and get the body you always wanted: https://bit.ly/elebands \r\n\r\nTheresa Smith\r\nBrand Ambassador \r\nElebands USA\r\n\r\nGET STARTED NOW: https://bit.ly/elebands', NULL, '2023-11-19 18:59:09', '2023-11-19 18:59:09'),
(36, 'Susan Karsh', 'felica.killough@yahoo.com', '0441 13 91 84', 'Hello,\r\n\r\nI was on your site today and I wanted to see if you would be open to getting a FREE 7-Day trial of our AI Agents, like ChatGPT, but much better. \r\n\r\nPlus, our plans start as low as $10 per month if you decide to continue. \r\n\r\nOur AI Agents Can:\r\n\r\n• Assist your team with tasks, projects and research, which will increase productivity.\r\n• Crush to-do list by writing - ads, code, emails, content, sales copy, contracts & more.\r\n• Give you time to focus on important things instead of handling mundane tasks.\r\n• Save you time, save you money and make your team much more effective.\r\n• Make sales calls, take inbound calls and answer support questions (coming soon).\r\n\r\n... and much, MUCH more!\r\n\r\nWatch our video here and see how we can help: https://bit.ly/myaa-trial \r\n\r\nOur clients are saving 20%- 30% on operational costs each month by using our AI Agents to handle hundreds of tasks.\r\n\r\nClaim your FREE Trial Of our AI Agents Now, before this offer ends. Get started here: https://bit.ly/myaa-trial \r\n\r\nBest,\r\n\r\nSusan Karsh', NULL, '2023-11-21 02:49:49', '2023-11-21 02:49:49'),
(37, 'Steve Skemp', 'steve82991@gmail.com', '212-443-2134', 'I\'m really frustrated with the laptop I ordered from your Amazon store. It\'s not functioning at all. Here’s the model I’m talking about: https://amzn.to/46pmr71. Amazon directed me to you for any technical help or return issues. This was a gift, and it\'s really important I get this sorted quickly. Please respond soon. - Steve', NULL, '2023-11-25 01:02:34', '2023-11-25 01:02:34'),
(38, 'Mindy Jaques', 'sellyourcartoday12345@gmail.com', '306-549-3061', 'Hi! I\'m looking to buy a car and I was wondering if you\'d be interested in selling yours. This is serious! Please let me know! :) PS: would you mind sending me the make and model / any extra details you have, and I\'ll let you know what I can pay for it!', NULL, '2023-11-25 22:25:43', '2023-11-25 22:25:43'),
(39, 'Eliza Styles', 'eliza@psychicvip.com', '077 1709 8956', 'Hello, for amazing spiritual and business insights visit https://psychicvip.com - Their accurate mediums reveal astonishing visions to help you plan & grow.', NULL, '2023-11-28 23:31:25', '2023-11-28 23:31:25'),
(40, 'Lela Windeyer', 'lela.windeyer@outlook.com', '041 915 94 29', 'Do you do contact form blasts? I have a list of over 30 million website contact forms for sale, all fully tested with gsa and confirmed working. Don\'t do any blasts? Why not? I can either provide the service for you or show you how to do it and where to buy the best software for doing this. Shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps6196@gomail2.xyz', NULL, '2023-11-29 16:36:56', '2023-11-29 16:36:56'),
(41, 'Susan Karsh', 'manie.cutlack@hotmail.com', '(61) 3547-9850', 'Hello Again,\r\n\r\nI sent a message a few days ago but I’m not sure if you received it so I figured I would do a quick follow up with you again.\r\n\r\nI was on your site today and I wanted to see if you would be open to getting a FREE 7-Day trial of our AI Agents, like ChatGPT, but much better. \r\n\r\nPlus, our plans start as low as $10 per month if you decide to continue. \r\n\r\nOur AI Agents Can:\r\n\r\n• Assist your team with tasks, projects and research, which will increase productivity.\r\n• Crush to-do list by writing - ads, code, emails, content, sales copy, contracts & more.\r\n• Give you time to focus on important things instead of handling mundane tasks.\r\n• Save you time, save you money and make your team much more effective.\r\n• Make sales calls, take inbound calls and answer support questions (coming soon).\r\n\r\n... and much, MUCH more!\r\n\r\nWatch our video here and see how we can help: https://bit.ly/myaa-trial-offer\r\n\r\nOur clients are saving 20%- 30% on operational costs each month by using our AI Agents to handle hundreds of tasks.\r\n\r\nClaim your FREE Trial Of our AI Agents Now, before this offer ends. Get started here: https://bit.ly/myaa-trial-offer\r\n\r\nBest,\r\n\r\nSusan Karsh', NULL, '2023-11-30 05:53:03', '2023-11-30 05:53:03'),
(42, 'Michael Sinclair', 'suzanna.poland@hotmail.com', '60 852 63 09', 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting two-hundred and fifty thousand (250,000) emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nWHO THIS IS FOR:\r\n\r\n- Companies who offer products/services to businesses (B2B).\r\n- Companies who provide a product/service with wide appeal (not a small niche).\r\n- Companies who product/service can be sold across the USA and/or international.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send out two-hundred and fifty thousand (250,000) emails for just $48.\r\n\r\nTake action today and let’s get you some leads. This offer is good for the first 20 clients, don’t miss out.\r\n\r\nSimply book a time to talk on our calendar: https://bit.ly/hivemailer-special \r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nSincerely,\r\n\r\nMichael\r\nHiveMailers\r\n\r\nCalendar: https://bit.ly/hivemailer-special', NULL, '2023-11-30 06:05:54', '2023-11-30 06:05:54'),
(43, 'Service for Premium Guest Posting', 'troiano.stacia42@gmail.com', '994 21 023', 'Are you ready to ignite your online presence and turbocharge your business? Look no further! Our Exclusive Guest Posting Opportunities are here to take your success to the next level.\r\n\r\nCheck it out: https://tinyurl.com/aicopify\r\n\r\nWe want to highlight some key advantages of our service that will leave you absolutely ecstatic:\r\n\r\n- Top-notch Backlinks: With a staggering 30,611+ websites at your disposal, you\'ll have access to top-tier backlinks that can remarkably boost your website\'s search engine ranking. These are not just any backlinks – they\'re powerful endorsements from websites with real traffic and credibility.\r\n\r\n- Your Satisfaction, Our Payment: We are so confident in our service that we offer a one-of-a-kind satisfaction guarantee. You only pay when you are completely satisfied with the results. Your confidence is our top priority, and we\'re here to fulfill our commitment.\r\n\r\n- Boost Traffic, Generate Leads, and Skyrocket Sales: Placing your content on contextual, high-traffic websites is the golden ticket to reaching your target audience, attracting dedicated customers, and propelling your sales. It\'s a surefire way to make your business prosper.\r\n\r\n- Cost-Efficient Promotional Strategy: Guest blogging is not only highly effective, but it\'s also budget-friendly. It\'s a cost-efficient alternative to traditional paid advertising methods. You\'ll save money while realizing outstanding achievements.\r\n\r\n- Conquer the Search Engine Rankings: Your website\'s ranking on Google will soar as you secure quality backlinks from reputable websites. Watch your website climb the SERP ladder and gain the visibility you\'ve always dreamed of.\r\n\r\nDon\'t miss out on this remarkable offer to transform your online presence and enjoy all the gains that come with it. Our Premium Guest Posting Services will make your business prosper, and the best part is, it starts at just $3.99! Take the first step towards your digital success today!\r\n\r\nClick here: https://tinyurl.com/aicopify', NULL, '2023-12-02 05:17:29', '2023-12-02 05:17:29'),
(44, 'Margot Wadsworth', 'wadsworth.margot@outlook.com', '041 612 85 96', 'Do you do contact form blasts? I have a list of over 30 million website contact forms for sale, all fully tested with gsa and confirmed working. Don\'t do any blasts? Why not? I can either provide the service for you or show you how to do it and where to buy the best software for doing this. Shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps6383@gomail2.xyz', NULL, '2023-12-04 05:48:54', '2023-12-04 05:48:54'),
(45, 'Dr. Markl Wilba', 'wilbamark90@gmail.com', '0681 902 54 76', 'Hi, I have a ton of leads that want to pay for your products / services. When do you have a second to chat about them? Would you be willing to do a comission on the leads I send over? Please respond with the word \"interested\" if you\'d like to discuss. -Dr. Mark W.', NULL, '2023-12-06 17:29:35', '2023-12-06 17:29:35'),
(46, 'mike wazera', 'mike@mikewazera.com', '06-86677729', 'I have a huge list of leads that want to buy from you, I just need a message to send them on your behalf. Will you let me know what I should say? Also, would you be willing to give me a referral for any leads I send over?', NULL, '2023-12-08 20:23:36', '2023-12-08 20:23:36'),
(47, 'Warren Walter', 'walter.warren@gmail.com', '427 29 381', 'With keyword targeted PPV ads I can get you qualified website visitors for less than a penny per click. This method works for both local and online businesses. Very easy to get started. Just sign up, give me your website and I\'ll provide the traffic.\r\n\r\nFor details, shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.ad0ee8f191cd36b4\r\nEmail: ps1807@gomail2.xyz', NULL, '2023-12-10 17:11:29', '2023-12-10 17:11:29'),
(48, 'Michael Sinclair', 'maisie.oconnell@gmail.com', '519-490-1793', 'Hello,\r\n\r\nWould you be open to the opportunity to reach out to a staggering 1.25 million potential clients on a weekly basis through our highly effective email marketing campaign? And the best part? It\'s available to you at an incredibly affordable rate of just $240 per week! \r\n\r\nPlus, as an added bonus, we provide the B2B prospect list so you can effortlessly expand your reach weekly and generate consistent leads and sales. \r\n  \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n\r\nWHO THIS IS FOR:\r\n\r\n- Companies who sell to businesses (B2B).\r\n- Companies who provide a product/service with wide appeal (not a small niche).\r\n- Companies who product/service can be sold across the USA and/or international.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!! For just $240 a week, we’ll send 1.25 million emails weekly.\r\n\r\nBook a 10 min call with us: https://bit.ly/hivemailer-special-240 \r\n\r\nNOTE: To buy an email list and hire an email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $240 a week. So, you save over $2,000 a month. \r\n\r\nSincerely,\r\nMichael\r\n\r\nP.S. This offer is good for the first 20 clients, don’t miss out.  Book appointment now: \r\nhttps://bit.ly/hivemailer-special-240', NULL, '2023-12-11 23:45:08', '2023-12-11 23:45:08'),
(49, 'Tristan Gates', 'tristan.gates@yahoo.com', '519-860-3634', 'I now offer contact form blasting service. With my DFY service you can either do a targeted blast to only websites that match your criteria or bulk blast large volumes of sites worldwide. Prices start at just $50 to reach 500,000 bulk sites. Contact me at my email or skype below for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: psN5w 2s9@gomail2.xyz', NULL, '2023-12-12 19:18:31', '2023-12-12 19:18:31'),
(50, 'Christopher Asterino', 'maurine.simpkinson@outlook.com', '0711 67 72 99', 'Hi,\r\n\r\nI\'m Christopher J. Asterino from revMD, a leading provider of medical billing and coding services. We specialize in helping physicians and healthcare systems like yours improve their cash flow and streamline their billing process. Here\'s why you should consider partnering with us:\r\n\r\n- Increase Cash Flow: Our services ensure timely and accurate billing, and we guarantee follow-up action.  We make “follow up” on overdue claims a contractual obligation, not a sales-oriented promise.  These results improve cash flow for your practice. With more money available, you can invest in growth, hire additional staff, or simply enjoy the peace of mind that comes with a healthier bottom line.\r\n\r\n- Save Time and Resources: Outsourcing your medical billing to revMD frees up your team\'s valuable time and resources. We handle everything, from claim edits and submissions to follow-ups and appeals.  We even staff your inbound call center for patient inquiries.  This allows you to focus on providing quality care to your patients.\r\n\r\n- Enhance Patient Satisfaction: With our prompt and accurate billing services, your patients will appreciate the transparency and professionalism we bring to the billing process. Our dedicated customer service team is always available to address any inquiries or concerns they may have.\r\n\r\nTo get started, we\'re offering a complimentary review of your current aged accounts receivable. This will help us identify areas for improvement and demonstrate the value we can bring to your practice.\r\n\r\nSchedule a brief call with me to discuss how revMD can specifically benefit your practice. Click the link below to choose a convenient time slot:\r\n\r\nhttps://bit.ly/revmdsales\r\n\r\nThank you for considering revMD as your trusted partner in medical billing. I look forward to speaking with you soon.\r\n\r\nBest Regards,\r\n\r\nChristopher J. Asterino\r\nrevMD\r\n\r\nP.S. Don\'t miss out on the opportunity to improve your practice\'s financial health. Schedule a call today and let\'s explore the benefits revMD can bring to your medical billing process.', NULL, '2023-12-12 22:50:52', '2023-12-12 22:50:52'),
(51, 'Sean O\'Kelly', 'alice.bettye15@yahoo.com', '033 727 39 30', 'Hey,\r\n\r\nI\'m Sean O\'Kelly from XAPPDESIGN, and I have some exciting news to make your holiday season even more special. As a small business owner, you understand the importance of a strong online presence, especially during the competitive holiday season.\r\n\r\nThat\'s why I\'m thrilled to offer you our exclusive Holiday Specials, featuring incredible discounts of up to 75% off on our top services. But act fast, these offers are only available for a limited time.\r\n\r\nHere\'s what you can take advantage of:\r\n\r\n1️. Professional Online Web Presence Audit, Consulting, Competitive Analysis, and Recommendations: Boost your website\'s performance and gain a competitive edge with our comprehensive analysis and recommendations. Get up to 75% off on this service and watch your online presence soar.\r\n\r\n2️. Custom ECommerce Website Builds: Drive sales and capture the holiday shopping frenzy with a custom-built ECommerce website. For a limited time, enjoy up to 50% off on our expert web development services.\r\n\r\n3️. FREE Website Rewrite with ANY Monthly SEO Plan: Elevate your website\'s ranking on search engines and attract more organic traffic. When you sign up for any monthly SEO plan (6 months or more), we\'ll provide a FREE website rewrite to optimize your content and enhance your online visibility.\r\n\r\n4️. 50% Off Initial Setup Fees of ALL OTHER SERVICES: Whether you\'re in need of graphic design, social media management, or any other digital marketing service, now is the perfect time to save big. Enjoy a whopping 50% discount on the initial setup fees of all our other services.\r\n\r\nTo take advantage of these amazing offers, simply click the link below:\r\n\r\nClick here: --> https://bit.ly/xappdesign-holiday-specials \r\n\r\nDon\'t miss out on these incredible savings. Act now and give your business the gift of a remarkable online presence.\r\n\r\nRemember, these Holiday Specials are only available for a limited time. Click the link above and let\'s make this holiday season one to remember for your business.\r\n\r\nBest regards,\r\n\r\nSean O\'Kelly\r\nXAPPDESIGN', NULL, '2023-12-15 18:12:25', '2023-12-15 18:12:25'),
(52, 'Al Musselman', 'al.musselman56@gmail.com', '04.73.01.65.05', 'People are quitting their jobs with this... Have you seen it?\r\n\r\nhttps://rumble.com/v41owvf-automated-online-income.html', NULL, '2023-12-18 20:53:57', '2023-12-18 20:53:57'),
(53, 'Grant Lira', 'growthpartners13@gmail.com', '04.91.00.98.74', 'Hey,\r\n\r\nI’ll get right to it. I can get you on 3 podcasts/mo, and get you 15 professionally edited short form videos for social media (from the podcast interview), and then get you featured in 3 online publications/mo all done for you.\r\n\r\nWe’ve helped 33 clients do just that to build their thought leadership in their specific industry which has helped them:\r\n\r\n- Generate more appointments\r\n- Close at a higher rate (Because they built authority before the sales call even started)\r\n- Charge higher prices because people view their company as unique now\r\n\r\nInterested? We can chat here:\r\n\r\nhttps://calendly.com/empathyfirm/30-min-meeting\r\n\r\nBest,\r\nGrant\r\n\r\nPS - I won’t see your response on here so if you have a question, please book a call (:\r\n\r\n\r\n\r\n\r\nN6565 Shorewood Hills Rd. Lake Mills WI, 53551\r\nEmail unsubnow1@gmail.com with your website to “UNSUB” meaning you will not hear from me again.', NULL, '2023-12-19 12:08:11', '2023-12-19 12:08:11');
INSERT INTO `kotak_saran` (`id_kotak_saran`, `nama`, `email`, `telepon`, `saran`, `open`, `created_at`, `updated_at`) VALUES
(54, 'Lakesha Craven', 'craven.lakesha@gmail.com', '040-5133474', 'Have you seen this rice thing? It\'s melting it off!\r\n\r\nhttps://youtu.be/ISxPEZkLk6g', NULL, '2023-12-22 08:10:37', '2023-12-22 08:10:37'),
(55, 'Wil Bur', 'hifromwilbur@gmail.com', '044 964 84 30', 'Hey, there! My name is Wil and I have a MASSIVE list of leads that are interested in buying from you. Is this a good place to to send you more information about the leads? Let me know.', NULL, '2023-12-23 00:27:18', '2023-12-23 00:27:18'),
(56, 'Doug Shume', 'dougshume@gmail.com', '0471 12 21 94', 'Hi, I have an overflow of customers that I\'d like to send to you but I want to make sure you can handle more leads, let me know if you\'d like me to send you more info.', NULL, '2023-12-23 22:41:06', '2023-12-23 22:41:06'),
(57, 'Desiree Kirch', 'kirch.desiree86@msn.com', '920 95 362', 'With keyword targeted PPV ads I can get you qualified website visitors for less than a penny per click. This method works for both local and online businesses. Very easy to get started. Just sign up, give me your website and I\'ll provide the traffic.\r\n\r\nFor details, shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.ad0ee8f191cd36b4\r\nEmail: ps3228@gomail2.xyz', NULL, '2023-12-24 02:42:16', '2023-12-24 02:42:16'),
(58, 'Hans Peoples', 'peoples.hans@gmail.com', '062 884 59 23', 'I now offer contact form blasting service. With my DFY service you can either do a targeted blast to only websites that match your criteria or bulk blast large volumes of sites worldwide. Prices start at just $50 to reach 500,000 bulk sites. Contact me at my email or skype below for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps5642@gomail2.xyz', NULL, '2023-12-25 03:11:25', '2023-12-25 03:11:25'),
(59, 'Theresa Smith', 'singh.geraldine@msn.com', '06-72186792', 'Hello,\r\n\r\nDo you sometimes find yourself in a tug of war between work and fitness? We have the perfect solution for you - Elebands! \r\n\r\nElebands offers ultra-thin, fashionable body weight bands that seamlessly integrate into your daily routine. Burn up to 1,500 calories a day by simply wearing our bands on your wrist, ankle, and waist. What\'s more, we have bands suitable for sports, casual, and formal occasions, ensuring you stay stylish while achieving your fitness goals.\r\n\r\nWith Elebands, you no longer have to choose between work and exercise. Our bands enable you to lose weight and get fit regardless of your location or activity. Enjoy these instant benefits:\r\n\r\n1. Burn Calories: Effortlessly burn up to 1,500 calories daily, toning your body as you go about your day.\r\n\r\n2. Natural Weight Loss: Say goodbye to intense workouts and stressful diets. Elebands helps you lose weight naturally.\r\n\r\n3. Build Strength: Develop lean muscles and enhance your strength as you carry out your regular activities.\r\n\r\nImagine achieving your dream body without stepping foot in a gym or following a strict diet plan. With Elebands, it\'s possible.\r\n\r\nMany of our clients are losing 2-3 pounds per week while experiencing significant health improvements. To help you get started for the NEW YEAR, use coupon code SAVE-20%-TODAY for a 20% discount. \r\n\r\nVisit our website now at https://bit.ly/elebands and embrace the Elebands experience.\r\n\r\nLet Elebands be your partner in achieving a fit and healthy lifestyle. Start your transformation today!\r\n\r\nWarm regards,\r\n\r\nTheresa Smith\r\nBrand Ambassador\r\nElebands USA\r\n\r\nVisit our website NOW! https://bit.ly/elebands', NULL, '2023-12-26 09:49:29', '2023-12-26 09:49:29'),
(60, 'Lisette Hyam', 'hyam.lisette@hotmail.com', '705-840-2471', 'Supercharge your online presence! Let us blast your classified ads across 2,000+ high-traffic pages in the US and Canada, along with 500+ blogs and 150+ social sites. Our manual submission service targets the right platforms. Monitor and tweak your ad for optimal results. Elevate your message, expand your reach, and boost your website\'s SEO effortlessly!\r\n\r\nFor details, shoot me an email or Skype me at my contact info below.\r\n\r\nP. Stewart\r\nSkype: live:.cid.ad0ee8f191cd36b4\r\nEmail: psP1b 2y7@gomail2.xyz', NULL, '2023-12-30 18:52:30', '2023-12-30 18:52:30'),
(61, 'Tania Mendoza', 'tania.mendoza@gmail.com', '67 816 54 99', 'I now offer contact form blasting service. With my DFY service you can either do a targeted blast to only websites that match your criteria or bulk blast large volumes of sites worldwide. Prices start at just $50 to reach 500,000 bulk sites. Contact me at my email or skype below for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: ps59-200@gomail2.xyz', NULL, '2024-01-04 23:32:53', '2024-01-04 23:32:53'),
(62, 'Doretha Sutter', 'doretha.sutter@gmail.com', '(08) 8368 4376', 'Don\'t pay full retail price for Microsoft, McAfee, AVG, Kaspersky, AutoCAD and VMware licenses. We offer 100% genuine licences at a fraction of the retail price. Check out https://sistemasrjd.com', NULL, '2024-01-05 18:34:33', '2024-01-05 18:34:33'),
(63, 'Donte Askew', 'donte.askew@outlook.com', '0478 41 03 52', 'This is seriously perfect for you bit.ly/3tSF9GN', NULL, '2024-01-07 11:39:41', '2024-01-07 11:39:41'),
(64, 'Margie Drago', 'margie.drago@yahoo.com', '(02) 6116 2202', 'I didn\'t think this was possible: https://bit.ly/41RjQCk', NULL, '2024-01-07 11:52:29', '2024-01-07 11:52:29'),
(65, 'Rodney Minor', 'rodney.minor@outlook.com', '25-64-13-83', 'You won\'t believe this completely automated system that earns you $1,000 a day without effort: https://bit.ly/4aK6HyN', NULL, '2024-01-07 12:05:32', '2024-01-07 12:05:32'),
(66, 'Pamala Osborne', 'pamala.osborne@yahoo.com', '0664 992 73 09', 'Discover the revolutionary \"60 Second Side Hustle\" that\'s banking an astonishing $61 per hour—without any paid advertising, startup costs, or waiting periods. Experience the thrill of making over $1,300 daily on complete autopilot. Join the ranks of those capitalizing on this lucrative opportunity today! https://bit.ly/3tJFBqQ', NULL, '2024-01-09 00:43:26', '2024-01-09 00:43:26'),
(67, 'William Cage', 'thisiswilliamcage@gmail.com', '06-66658196', 'I saw something wrong with your Google Map listing, is this a good place to send a report of the issues I found?', NULL, '2024-01-10 01:41:58', '2024-01-10 01:41:58'),
(68, 'William Cage', 'thisiswilliamcage@gmail.com', '06-82773801', 'I saw something wrong with your Google Map listing, is this a good place to send a report of the issues I found?', NULL, '2024-01-11 00:54:12', '2024-01-11 00:54:12'),
(69, 'Georgina Haynes', 'georginahaynes620@gmail.com', '04.03.96.65.05', 'Hi,\r\n\r\nWe run an explainer video service where we create videos that can explain/promote a business, a product or an event. They can explain a process (how to), a service, software, or explain something such as a tutorial or a set of instructions. We can also produce videos for social media.\r\n\r\nYou can view more of our work here: https://furtherinfo.org/video\r\n\r\nThe service includes full script, voice-over and video.\r\n\r\nIf you would like more information about getting a video created for bmtattaawunmitrasembada.com please get in touch.\r\n\r\nKind Regards,\r\nGeorgina\r\n\r\nIf you are not interested, unsubscribe here: https://removeme.click/unsubscribe.php?d=bmtattaawunmitrasembada.com', NULL, '2024-01-11 17:36:26', '2024-01-11 17:36:26'),
(70, 'Sarah Babbage', 'rodolfo.babbage@gmail.com', '447 1589', 'Hey there,\r\n\r\nTired of relentless itching keeping you up? Discover Debriding Soap - your ultimate relief from itching and crawling sensations caused by skin parasites. It\'s time to reclaim your sleep and peace of mind.\r\n\r\nHere\'s why you should try Debriding Soap:\r\n\r\n������ Immediate Relief: Experience instant soothing from severe itching and crawling sensations.\r\n\r\n������ Sleep Through the Night: Finally, get the sleep you deserve without being constantly disturbed.\r\n\r\n������ Nourish Your Skin: Our non-toxic formula not only stops the itch but also nourishes your skin.\r\n\r\nAnd the best part? Act now and get Debriding Soap at a whopping 50% off the regular price. Don\'t miss out on this limited-time Black Friday and Holiday sale offer!\r\n\r\nReady to end the itch today? Click the link below to view the special offer:\r\n\r\nClick here: --> https://bit.ly/debridingsoap\r\n\r\nStill skeptical? We offer a 30-day money-back guarantee. Try Debriding Soap risk-free, and if you\'re not completely satisfied, simply return it - no questions asked.\r\n\r\nSleep better tonight and bid farewell to itching with Debriding Soap.\r\n\r\nBest regards,\r\n\r\nSarah\r\nGYLB\r\n\r\nP.S. Don\'t miss your chance to claim your discount and experience relief. Click the link above to visit our website now.', NULL, '2024-01-11 19:05:06', '2024-01-11 19:05:06'),
(71, 'Libby Evans', 'libbyevans461@gmail.com', '06-88459089', 'Hi there,\r\n\r\nWe run an Instagram growth service, which increases your number of followers safely and practically. \r\n\r\nWe aim to gain you 300-1000+ real human followers per month, with all actions safe as they are made manually (no bots).\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nLet me know if you wish to see some of our previous work.\r\n\r\nKind Regards,\r\nLibby', NULL, '2024-01-12 13:45:40', '2024-01-12 13:45:40'),
(72, 'Brent Fouch', 'brentfouch@aiviralvideo.com', '0345 5586160', 'Hey, I noticed your website isn\'t using AI yet, can I send over something that I think would help?', NULL, '2024-01-13 03:39:20', '2024-01-13 03:39:20'),
(73, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', '09761 53 88 30', 'Hi, I noticed a few problems affecting your website on Google, is this a good place to send them?', NULL, '2024-01-13 14:01:48', '2024-01-13 14:01:48'),
(74, 'Buster Fryer', 'fryer.buster@gmail.com', '780-420-3220', 'Your ad message sent to contact forms on millions of sites. It\'s not as expensive as you think. Get in touch with me by email or skype below for details.\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: psT5j 0k7@gomail2.xyz', NULL, '2024-01-13 22:41:06', '2024-01-13 22:41:06'),
(75, 'Bertha Back', 'back.bertha@gmail.com', '09131 35 83 15', 'Who is 4U2 Inc.? Visit our website at 4u2inc.com . Suppliers: (Manufacturers, Wholesalers, Re Sellers, etc.) Increase your Gross Sales BIG TIME!! Purchasers/Buyers: Save Time & Money Account Executive/Sales People (Full/Part Time): Recruit Suppliers, Purchasers/Buyers, other Account Executives/ Sales people, Potential Team Leaders and work from home. Earn up to $60,000 +/- USD . Questions? Visit our website at 4u2inc.com or contact us via email (4u2inc123@gmail.com).', NULL, '2024-01-13 23:28:53', '2024-01-13 23:28:53'),
(76, 'Theresa Smith', 'shanel.kendrick@gmail.com', '044 527 88 84', 'Hello,\r\n\r\nDo you sometimes find yourself in a tug of war between work and fitness? We have the perfect solution for you - Elebands! \r\n\r\nElebands offers ultra-thin, fashionable all day wearable body weight bands that seamlessly integrate into your daily routine. Burn up to 1,500 calories a day by simply wearing our bands on your wrist, ankle, and waist while you go about your normal day.\r\n\r\nThe best part is we have full body weight sets ranging from 3lbs – 30lbs to ensure optimal results no matter what your fitness goals are. \r\n\r\nPlus! We have bands for sports, casual, and formal occasions that you can wear with any outfit, ensuring you stay stylish while achieving your fitness goals.\r\n\r\nWith Elebands, you no longer have to choose between work and exercise. Our body weight bands enable you to lose weight and get fit regardless of your location or activity. Enjoy these instant benefits:\r\n\r\n1. Burn Calories: Effortlessly burn up to 1,500 calories daily, toning your body as you go about your day.\r\n\r\n2. Natural Weight Loss: Say goodbye to intense workouts and stressful diets. Elebands helps you lose weight naturally.\r\n\r\n3. Build Strength: Develop lean muscles and enhance your strength as you carry out your regular activities.\r\n\r\nImagine achieving your dream body without stepping foot in a gym or following a strict diet plan. With Elebands, it\'s possible.\r\n\r\nMany of our clients are losing 2-3 pounds per week while experiencing significant health improvements. To help you get started for the NEW YEAR, use coupon code SAVE-20%-TODAY for a 20% discount. \r\n\r\nVisit our website now at https://bit.ly/elebands-special and embrace the Elebands experience.\r\n\r\nLet Elebands be your partner in achieving a fit and healthy lifestyle. Start your transformation today!\r\n\r\nWarm regards,\r\n\r\nTheresa Smith\r\nBrand Ambassador\r\nElebands USA\r\n\r\nVisit our website NOW!   https://bit.ly/elebands-special', NULL, '2024-01-14 15:29:57', '2024-01-14 15:29:57'),
(77, 'Steven Clark', 'steven@rapidprofitmachine1.com', 'O Bga Dd Pwxp', 'noticed your google setup is messed up, didn\'t know if you knew, I can tell you what it is if you want?', NULL, '2024-01-16 05:06:11', '2024-01-16 05:06:11'),
(78, 'Grant Lira', 'growthpartners13@gmail.com', '056 949 16 42', 'Hey,\r\n\r\nI’ll get right to it. I can get you on 3 podcasts/mo, and get you 15 professionally edited short form videos for social media (from the podcast interview), and then get you featured in 3 online publications/mo all done for you.\r\n\r\nWe’ve helped 33 clients do just that to build their thought leadership in their specific industry which has helped them:\r\n\r\n- Generate more appointments\r\n- Close at a higher rate (Because they built authority before the sales call even started)\r\n- Charge higher prices because people view their company as unique now\r\n\r\nInterested? We can chat here:\r\n\r\nhttps://bit.ly/empathyfirm-30-minute-meeting\r\n\r\nBest,\r\nGrant\r\n\r\nPS - I won’t see your response on here so if you have a question, please book a call (:\r\n\r\n\r\n\r\n\r\nN6565 Shorewood Hills Rd. Lake Mills WI, 53551\r\nEmail unsubnow1@gmail.com with your website to “UNSUB” meaning you will not hear from me again.', NULL, '2024-01-16 13:41:28', '2024-01-16 13:41:28'),
(79, 'Matthew Martinez', 'matthewm@aibestsuite.com', '0382 8724743', 'Hi, I\'ve observed some inaccuracies in your Google listing; is this the correct contact for addressing them?', NULL, '2024-01-16 22:58:49', '2024-01-16 22:58:49'),
(80, 'Richard Thomas', 'richard@aimoneymakingcourse.com', 'Txohqpavhk', 'I saw that your google my business listing is not working as it should.  Like where google show customers your business.  I can give you a list of a couple things to fix, is that ok?', NULL, '2024-01-17 01:32:58', '2024-01-17 01:32:58'),
(81, 'Dave Frost', 'lori.hailey@yahoo.com', '(08) 8757 4256', 'Hey,\r\n\r\nI\'m Dave Frost, the founder of Well Past Forty, a Master Fitness Trainer, and author. \r\n\r\nAre you ready to live longer, perform better, and die harder than others? \r\nHere\'s why you should join up with me to stay Well Past Forty:\r\n\r\n������ Add 7 to 10 years to your health span & lifespan with my \"7 S\" steps to thrive and strive.\r\n������ Experience more energy and libido, look better, and get functionally strong.\r\n������ Get your free set of Stretching Guides and a 35% discount on my new book, \"Strong to Save\"\r\n\r\nAre time constraints or “yes but” excuses holding you back? \r\n\r\nOptimally invest in your physical 401K  portfolio today!\r\n\r\n1. Set up your free Accelerator chat with me @ https://bit.ly/wellpastforty. \r\n2. Visit my website at https://bit.ly/wellpastforty-com to learn more. \r\n3. Text “WP40” to #41259 to opt-in for your actionable, daily training hacks.\r\n\r\nTo your longevity and vitality,\r\n\r\nDave Frost\r\nFounder, Well Past Forty LLC\r\n\r\nP.S. Your physical health is a $10 Million portfolio. \r\nTake action now and start your journey to live longer and die harder. Visit our website today.\r\n\r\nClick here: --> https://bit.ly/wellpastforty-com', NULL, '2024-01-17 13:06:49', '2024-01-17 13:06:49'),
(82, 'John Evans', 'hifromjohnevans@gmail.com', '304-847-1816', 'Hey, I made you a free marketing video for your website, is this a good place to send it?', NULL, '2024-01-18 00:37:06', '2024-01-18 00:37:06'),
(83, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', 'The same way I just sent you this message I can also post your ad message to millions of sites. Costs are much cheaper than regular advertising Hit me up via email or skype for details.\r\n\r\n\r\nP. Stewart\r\nSkype: live:.cid.e169e59bb6e6d159\r\nEmail: psK0j 1b0@gomail2.xyz', NULL, '2024-01-19 16:06:30', '2024-01-19 16:06:30'),
(84, 'Michael Sinclair', 'martin.reilly@gmail.com', '440-833-2068', 'Hello,\r\n\r\nI checked out your business today and wanted to know if you would be open to the opportunity to reach out to a staggering 1.25 million potential clients on a weekly basis through our highly effective email marketing campaign that can start getting you leads in just a few days? And the best part? It\'s available to you at an incredibly affordable rate of just $240 per week! \r\n\r\nPlus, as a bonus, we provide the B2B prospect list so you can effortlessly expand your reach weekly and generate consistent leads and sales. \r\n  \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n\r\nWHO THIS IS FOR:\r\n\r\n- Companies who sell to businesses (B2B).\r\n- Companies who provide a product/service with wide appeal (not a small niche).\r\n- Companies whose product/service can be sold across the USA and/or international.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!! For just $240 a week, we’ll send 1.25-Million emails weekly and start filling your inbox with qualified leads. \r\n\r\nBook a 10 min call with us: https://bit.ly/hivemailer-240-special \r\n\r\nNOTE: To buy an email list and hire an email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $240 a week. So, you save over $2,000 a month.\r\n\r\nSincerely,\r\nMichael\r\n\r\nP.S. This offer is good for the first 20 clients, don’t miss out.  Book appointment now and start getting leads within a few days: https://bit.ly/hivemailer-240-special', NULL, '2024-01-22 09:13:22', '2024-01-22 09:13:22'),
(85, 'Richard Thomas', 'richard@aimoneymakingcourse.com', '210-366-4893', 'I saw your google, its not, well its not right.    Like where google show customers about your business.  I don\'t want to impose, but there are a couple things that are just not right, may I tell you what they are?', NULL, '2024-01-23 06:44:31', '2024-01-23 06:44:31'),
(86, 'Mark Shultz', 'marks333@gmail.com', '(03) 5395 7572', 'Boost your business revenue effortlessly with ProfitMarc! Our AI-driven platform writes and sends high-converting emails for you, targeting fresh, pre-qualified leads. \r\n\r\nWith our state-of-the-art delivery system, see a significant increase in engagement and sales. Don\'t miss out on the easiest way to enhance your marketing strategy and drive profits. \r\n\r\nClick Below to explore ProfitMarc and start generating leads!\r\n\r\nhttps://aiandcompanybest.com\r\n\r\nMark', NULL, '2024-01-27 02:38:25', '2024-01-27 02:38:25'),
(87, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', 'This message reached you thru your website and I can make your ad message reach millions of sites in the same way. It\'s a very affordable way to advertise your business.For more information, please email me or skype me below.\r\n\r\nP. Stewart\r\nEmail: 927cdy@gomail2.xyz\r\nSkype: live:.cid.37ffc6c14225a4a8', NULL, '2024-01-28 17:27:38', '2024-01-28 17:27:38'),
(88, 'Theresa Smith', 'aliza.samuel@googlemail.com', '070 1442 2959', 'Hello,\r\n\r\nI work with a company that makes ultra-thin stylish body weight bands that you can wear all day with any outfit, even a dress or suit and burn 750-1500 calories a day just by going about your day.\r\n\r\nThis is not a gimmick, our bands go on the wrist, ankle, waist and come in sets of 5, 10, 15, 20, 25, and 30 lbs. You are basically carrying that around all day and your body is working (burning more calories) to carry that extra load.\r\n\r\nBenefits You’ll Get Instantly From Our All Day Body Weights:\r\n \r\n- You’ll burn up to 1,500 calories a day as your body gets more toned.\r\n- You’ll start losing weight the natural way without having to workout.\r\n- You’ll start building more muscles and strength as you just go about your day.\r\n\r\nImagine getting the body you always wanted, without having to workout at a gym or having to go on a stressful diet. Well now you can, with Elebands. \r\n\r\nMany of our clients are losing 2-3 pounds a week and getting tremendous health benefits.\r\n\r\nUse this coupon code to get 20% off: SAVE-20%-TODAY\r\n\r\nVisit our site now and get the body you always wanted: https://bit.ly/elebands-special \r\n\r\nTheresa Smith\r\nBrand Ambassador \r\nElebands USA\r\n\r\nGET STARTED NOW: https://bit.ly/elebands-special', NULL, '2024-01-29 19:39:50', '2024-01-29 19:39:50'),
(89, 'Lenard Larkins', 'ampbusinsslimited@gmail.com', '0488 46 93 61', 'Want to skyrocket your brand? TV is the best way to do that!\r\n\r\n\r\nNot only can we get you on NBC, CBS, ABC, Fox, etc...\r\n\r\n\r\nBut we can also get published on over 130 sites like Yahoo.\r\n\r\n\r\nWe GUARANTEE that we will get your business on one of the major TV networks.\r\n\r\n- You can do this virtually\r\n\r\n- You can do this in the studio\r\n\r\n- We can provide a spokesperson for you\r\n\r\n- You can have Kevin Harrington, one of the original Sharks on Shark Tank on with you\r\n\r\nGo to - ampsvcs.online \r\nor\r\nEmail Us At - ampbusinesslimited@gmail.com', NULL, '2024-01-30 22:49:05', '2024-01-30 22:49:05'),
(90, 'Brent Fouch', 'brentfouch@aiviralvideo.com', '06-65040908', 'Can I send you something to help your website use AI?', NULL, '2024-01-31 23:36:57', '2024-01-31 23:36:57'),
(91, 'Matthew Martinez', 'matthewm@aibestsuite.com', '(21) 5505-5599', 'Hello, I noticed mistakes in your Google listing. Can I contact you to fix them?', NULL, '2024-02-01 00:14:54', '2024-02-01 00:14:54'),
(92, 'Glen Lease', 'ampbusinsslimited@gmail.com', 'P Grrmin', 'Want to skyrocket your brand? TV is the best way to do that!\r\n\r\n\r\nNot only can we get you on NBC, CBS, ABC, Fox, etc...\r\n\r\n\r\nBut we can also get published on over 130 sites like Yahoo.\r\n\r\n\r\nWe GUARANTEE that we will get your business on one of the major TV networks.\r\n\r\n- You can do this virtually\r\n\r\n- You can do this in the studio\r\n\r\n- We can provide a spokesperson for you\r\n\r\n- You can have Kevin Harrington, one of the original Sharks on Shark Tank on with you\r\n\r\nGo to - ampsvcs.online \r\nor\r\nEmail Us At - ampbusinesslimited@gmail.com', NULL, '2024-02-02 22:54:09', '2024-02-02 22:54:09'),
(93, 'Manie Tremblay', 'ghamrawi1995@gmail.com', '09637 51 69 05', 'Hey! I\'ve been loving your videos and content – seriously awesome stuff. You know what could take it up a notch? \r\n\r\nAdding subtitles or captions! \r\n\r\nAs a content creator, I\'ve been using this cool tool for my videos: https://submagic.co?via=wowcaptions \r\n\r\nIt\'s been a game-changer for me. \r\n\r\nGive it a shot! Hope that helps. Cheers!', NULL, '2024-02-02 22:57:30', '2024-02-02 22:57:30'),
(94, 'Ben Giat', 'bengiat.automation@gmail.com', '(03) 6233 2458', 'Have you heard of the power of AI this days?\r\n\r\nImagine if you could start use it to market your business 24/7, to get more leads Easily & to recover hours to do more of the things you love.\r\n\r\nNow it\'s possible... Also, to prove my good intentions, I\'ve made you a free AI marketing video for your business absolutely free of charge.\r\n\r\nIf you\'re interested please reply \"\"Give me my video\"\" ������.\r\n\r\nFirst-come-first-served so don\'t wait. \r\n\r\nReply now.\r\n\r\n\r\nBest,\r\nBen Giat \r\nAutomation for Conversion', NULL, '2024-02-03 00:38:42', '2024-02-03 00:38:42'),
(95, 'Nava', 'dmxlab@gmail.com', '965 37 044', 'Hello, \r\n\r\nDid  you notice the problems with your website\'s performance?\r\n\r\nif you would like to improve your website\'s \r\nperformance as per Google\'s standards,\r\njust reply to me,  at ( melvin@reachuslocaloffice.com )\r\n\r\nThank You. \r\n\r\nWaiting for your reply.\r\n\r\nMel', NULL, '2024-02-05 14:23:12', '2024-02-05 14:23:12'),
(96, 'Ben Giat', 'bengiat.automation@gmail.com', '(21) 7606-8368', 'Have you heard of the power of AI this days?\r\n\r\nImagine if you could start use it to market your business 24/7, to get more leads Easily & to recover hours to do more of the things you love.\r\n\r\nNow it\'s possible... Also, to prove my good intentions, I\'ve made you a free AI marketing video for your business absolutely free of charge.\r\n\r\nIf you\'re interested please reply \"\"Give me my video\"\" ������.\r\n\r\nFirst-come-first-served so don\'t wait. \r\n\r\nReply now.\r\n\r\n\r\nBest,\r\nBen Giat \r\nAutomation for Conversion', NULL, '2024-02-05 14:35:34', '2024-02-05 14:35:34'),
(97, 'Steven Clark', 'steven@rapidprofitmachine1.com', '703-692-3881', 'Your Google setup seems incorrect; let me know if you want me to explain the issue.', NULL, '2024-02-05 15:40:39', '2024-02-05 15:40:39'),
(98, 'Phil Stewart', 'noreplyhere@aol.com', '342-123-4456', 'I just delivered this message to you via your website contact form and I can do the same for your ad message to millions of websites. You can get this service for a fraction of the cost of conventional advertising.Contact me by email or skype below if you want to know more.\r\n\r\nP. Stewart\r\nEmail: l650js@gomail2.xyz\r\nSkype: live:.cid.2bc4ed65aa40fb3b', NULL, '2024-02-07 00:22:42', '2024-02-07 00:22:42'),
(99, 'Zepeda', 'bob@getbizcreditfast.com', '(02) 9569 2185', 'Hi, \r\n\r\nWould you like to discover the secret to accessing high-limit business credit lines, credit cards, and vehicle financing even when you think you can\'t qualify? \r\n\r\nFind it in our FREE step-by-step guide which also shows you how to get business credit without a personal guarantee or credit check... whether you\'re a startup or have an 8-figure business. \r\n\r\nFollow the link below and download your complimentary copy today: \r\n>>> https://GetBizCreditFast.com \r\n\r\nWishing you much success in business and in life for 2024 and beyond.\r\n\r\nRegards, \r\nBob \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n2000 S Colorado Blvd\r\nDenver CO 80222\r\n\r\nIf you\'d rather not find out more about building business credit, simply reply to this email with the word REMOVE in the subject line and your wish will be promptly granted.', NULL, '2024-02-07 02:38:52', '2024-02-07 02:38:52'),
(100, 'Messerly', 'newdynamicsgroup@gmail.com', 'Hfmuf', 'Want more leads at a reduced cost that close at a higher rate than any other advertising platform out there?\r\n \r\nWe Are Looking For 7 Businesses To Test Our Proven AI Lead Generation Machine And Add A Minimum Of 40% More To Their Bottom Line In 2024!\r\n\r\nWe\'ve Increased Deal Flow, Reduced Cost, and Blown Up Profit In Almost Every Industry On The Planet...\r\n\r\nSo, if you want to use AI to grow your business, comment YES and we will get back to you ASAP', NULL, '2024-02-07 08:36:35', '2024-02-07 08:36:35'),
(101, 'O\'Kane', 'marydaze2020@gmail.com', '0226-6164360', 'Hi, I teach businesses like yours on getting new clients. When do you have time for a call this\r\nweek?', NULL, '2024-02-10 06:47:42', '2024-02-10 06:47:42'),
(102, 'Georgia Walker', 'andrewshuman@andrewmshuman.com', '830-907-1449', 'I know this is random, but I\'ve found a way to guarantee you exclusive targeted phone calls almost immediately with no time spent on your part.\r\nWould you like to hear how it works?', NULL, '2024-02-10 07:05:07', '2024-02-10 07:05:07'),
(103, 'Emily Jones', 'emilyjones2250@gmail.com', '(02) 4018 7078', 'Hi there,\r\n\r\nWe run a YouTube growth service, which increases your number of subscribers both safely and practically. \r\n\r\n- We guarantee to gain you 700-1500+ subscribers per month.\r\n- People subscribe because they are interested in your channel/videos, increasing likes, comments and interaction.\r\n- All actions are made manually by our team. We do not use any \'bots\'.\r\n\r\nThe price is just $60 (USD) per month, and we can start immediately.\r\n\r\nIf you have any questions, let me know, and we can discuss further.\r\n\r\nKind Regards,\r\nEmily', NULL, '2024-02-10 10:03:14', '2024-02-10 10:03:14'),
(104, 'Brigitte Hort', 'brigitte.hort@yahoo.com', '520-668-3816', 'Hi there, my name is Cody Griner. I apologize for using your contact form, \r\nbut I wasn\'t sure who the right person was to speak with in your company. \r\nWe have a patented application that creates Local Area pages that rank on \r\ntop of Google within weeks, we call it Local Magic.  Here is a link to the \r\nproduct page https://www.mrmarketingres.com/local-magic/ . The product \r\nleverages technology where these pages are managed dynamically by AI and \r\nit is ideal for promoting contractors on Google.  Can I share a testimonial \r\nfrom one of our clients with you?  I can also do a short zoom to \r\nillustrate their full case study if you have time for it? \r\ncody@mrmarketingres.com 843-720-7301', NULL, '2024-02-10 16:08:26', '2024-02-10 16:08:26'),
(105, 'Brent Fouch', 'brentfouch@aiviralvideo.com', '0351 75 40 49', 'May I send you something to enhance your website with AI?', NULL, '2024-02-11 04:06:20', '2024-02-11 04:06:20'),
(106, 'Jacob Stewart', 'jacobstewart1972@gmail.com', '(08) 8220 4728', 'Hey, I\'m using the contact form because I noticed you didnt have  an A.I. chat option\r\n\r\nI have a software that adds an A.I. chat feature for small businesses like yours.\r\n\r\nYou got a few minutes so I can demo it for you?\r\n\r\nIts making some of the other users lots of money and its mostly automated so it won\'t add to your plate.\r\n\r\nPS reply back \"AI Chatbot\" for more info', NULL, '2024-02-12 22:31:16', '2024-02-12 22:31:16'),
(107, 'Alvin Kerrigan', 'telesyncai@gmail.com', '(02) 4372 3349', 'Special promotion: Get started with conversation Ai and boost your business operations for under $1,000 a month. \r\n\r\nDon\'t get left behind; unlock your free 30 minute demonstration here. \r\n\r\nhttps://www.dahbahmdm.com/free-ai-lead-information', NULL, '2024-02-12 23:42:37', '2024-02-12 23:42:37'),
(108, 'Brent Fouch', 'brentfouch@aiviralvideo.com', '01.56.63.86.66', 'Have you noticed your website\'s performance problems?', NULL, '2024-02-13 22:23:41', '2024-02-13 22:23:41'),
(109, 'Keith Martinovich', 'travis.ezmm@gmail.com', '(65) 3082-4170', 'Boost efficiency & leap ahead of the competition with our easy-to-integrate AI tools. \r\nLet\'s unlock your business\'s potential together. \r\nIf this interests you, respond to this email with a YES. \r\n\r\nBest, \r\nKeith', NULL, '2024-02-14 00:36:19', '2024-02-14 00:36:19'),
(110, 'Rick Deitz', 'info.idealbusinessfunding@gmail.com', '04.70.17.35.55', 'Hi Guys,\r\n\r\nHave you heard or seen what Kevin and his team are doing for business owners? Kevin has come to our rescue!! \r\nKevin has unleashed the Self-Employed Mortgage & Business Loans Program, where NO Tax Returns, W2s, or 1099s are required. \r\nYou can get APPROVED for a Mortgage or Business Loan via the Gross Revenues of your Business, NOT the Profits. It’s a Total Game Changer!!! \r\nGet ready to ELEVATE your business NOW…. Click https://www.idealbusinessfunding.com to see for yourself!!\r\n\r\nAll the Best,\r\n \r\nRick', NULL, '2024-02-14 00:47:17', '2024-02-14 00:47:17'),
(111, 'Stetiva Ventures', 'stetivaventures@gmail.com', '0494 71 50 36', 'Hello! In the digital age, your social media presence is not just an option; it\'s essential for standing out and connecting with your audience. Our team specializes in transforming social media profiles into powerful tools for business growth, ensuring your brand captures attention and drives meaningful engagement.\r\n\r\nWhy Opt for a Social Media Makeover?\r\n\r\nBoost Visibility: Stand out in a crowded digital space.\r\nIncrease Engagement: Connect deeply with your audience through compelling content.\r\nDrive Conversions: Convert followers into loyal customers with targeted strategies.\r\nOur Offering:\r\n•        Tailored Social Media Strategy\r\n•        Website Audit\r\n•        Engaging Content Creation\r\n•        Performance Analytics\r\nReady to Elevate Your Social Media Game?\r\n\r\nLet\'s discuss how we can elevate your social media presence to unlock new growth opportunities for your business. Reply to this email for a free consultation and a free website audit and take the first step towards a more vibrant, engaging social media presence.\r\n\r\nLooking forward to transforming your social media strategy,\r\n\r\nRegards,\r\nStetiva Ventures', NULL, '2024-02-15 03:15:35', '2024-02-15 03:15:35'),
(112, 'Hassan Pike', 'robot.savant@gmail.com', '06-70589295', 'How much money are missed calls costing you? \r\n\r\nOur Missed Call Text-Back service instantly\r\nengages your missed calls with personalized \r\ntext messages, turning potential losses into \r\nengaged customers. \r\n\r\nTry it now and see the difference for \r\nyourself: https://the-missed-call.com\r\n\r\nBest, \r\nKeith\r\n\r\n\r\n\r\n\r\nTo Opt-Out please click this link: \r\nhttps://the-missed-call.com/opt-out', NULL, '2024-02-15 23:05:13', '2024-02-15 23:05:13'),
(113, 'Matthew Martinez', 'matthewm@aibestsuite.com', '(08) 9007 9614', 'Do you want to grow your business and get more customers by using expert lead generation services?', NULL, '2024-02-17 19:57:33', '2024-02-17 19:57:33'),
(114, 'Ngan Walker', 'joshua@airapidprofits.com', '0353 5905508', 'Hello, did you notice the problems with your website\'s web design?', NULL, '2024-02-18 00:21:14', '2024-02-18 00:21:14'),
(115, 'Allen Shultz', 'richard@aimoneymakingcourse.com', '06-69379827', 'Hello, did you notice the problems with your website\'s web design?', NULL, '2024-02-18 00:37:53', '2024-02-18 00:37:53'),
(116, 'Bobby Ryan', 'heyitsbobbyryan@gmail.com', '618-233-5301', 'I\'ve got some leads that are interested in your company, who/where can I send them?', NULL, '2024-02-18 01:37:17', '2024-02-18 01:37:17'),
(117, 'Richard Thomas', 'richard@aimoneymakingcourse.com', '04.78.19.72.41', 'Your site could use a couple of improvements, I\'m happy to help out with those.  Could I help you make your site better?', NULL, '2024-02-18 03:13:21', '2024-02-18 03:13:21'),
(118, 'Matthew Martinez', 'matthewm@aibestsuite.com', '484 4865', 'I\'ve got some leads that are interested in your company, who/where can I send them?', NULL, '2024-02-18 07:06:33', '2024-02-18 07:06:33'),
(119, 'Gavin Heiman', 'robot.savant@gmail.com', '(11) 2502-2794', 'Missed calls mean missed opportunities. Discover \r\nMissed Call Text-Back, the service that transforms \r\nyour missed calls into sales by automatically texting \r\nyour callers, ensuring you never miss a lead. \r\n\r\nSee how it works and its cost-effective benefits for \r\nyour business here: https://the-missed-call.com/email.\r\n\r\nBest regards,\r\nGavin\r\n\r\n\r\n\r\n116 Agnes Rd, Ste 200\r\nKnoxville, TN 37919\r\n\r\nTo Opt Out reply go here: www./the-missed-call.com/opt-out\r\nor reply UNSUBSCRIBE in subject line\r\n\r\n\r\nbmtattaawunmitrasembada.com', NULL, '2024-02-20 18:41:43', '2024-02-20 18:41:43'),
(120, 'Kent Whitacre', 'salcidomedia@gmail.com', 'Bsyzdwp', 'It’s time to create VIRAL content through our POWERFUL AI tool!\r\nShinefy creates VIRAL content for you in SECONDS!\r\nVisit https://deidre--chasereiner.thrivecart.com/yearly-shinefy-subscription/ now!', NULL, '2024-02-20 19:33:40', '2024-02-20 19:33:40'),
(121, 'Louis Getz', 'dodsonlouis79@gmail.com', '078 5105 2802', 'Hi, I made a free video for your business. May I ask if this is the best place to send it?', NULL, '2024-02-21 02:50:55', '2024-02-21 02:50:55'),
(122, 'Grant Lira', 'growthpartners13@gmail.com', '(65) 2256-9019', 'Hey,\r\n\r\nThis Feb I’ll get you on 3 podcasts/mo + 15 professionally edited short-form videos for social media (from the podcasts) + 3 features in online publications/mo - done for you.\r\n\r\nWe’ve helped 37 clients do just that to build their thought leadership in their specific industry which has helped them:\r\n\r\n- Generate more appointments\r\n- Close at a higher % (Because they built authority before the meeting even started)\r\n- Charge higher amounts because people view their company as a premium option \r\n\r\nInterested? We are raising our service by 30 % on Feb 29th, but if we chat before then, you’ll be locked in at the current amount. We can chat here:\r\n\r\nhttps://bit.ly/empathyfirm-30-minute-meeting\r\n\r\nBest,\r\nGrant\r\n\r\nPS - I will not see your response so if you have a question, book a time to chat (:\r\n\r\n\r\n\r\nN6565 Shorewood Hills Rd. Lake Mills WI, 53551\r\nEmail unsubnow1@gmail.com with your website to “unsub” meaning you will not hear from me again.', NULL, '2024-02-21 13:40:14', '2024-02-21 13:40:14'),
(123, 'Jonnie Foltz', 'foltz.jonnie@msn.com', '29-39-48-68', 'The average viewer watches a video for only 12 seconds…this new tech rewards viewers for watching your entire video.  GAMIFYING your Youtube video is changing the way companies market. \r\nAs seen on CBS, NBC, FOX, and ABC. \r\n\r\nShoot me an email or skype msg below to see if you qualify for a free GAMIFICATION of your video.\r\n\r\nJordan\r\nemail: gamifyvideo@gmail.com\r\nskype: live:.cid.d347be37995c0a8d', NULL, '2024-02-21 18:07:55', '2024-02-21 18:07:55'),
(124, 'Angus Hose', 'robot.savant@gmail.com', '06-21751741', 'Elevate your business on Google, Facebook, and \r\nYelp effortlessly with our automated 5-star \r\nreview service. \r\n\r\nTailored for entrepreneurs eager for more \r\nvisibility and free leads, our platform \r\nstreamlines the process of gathering \r\ngenuine reviews from satisfied customers. \r\nDiscover the simple start to enhancing your \r\nGoogle My Business profile and attracting \r\nmore customers—automatically.\r\n\r\nReady to see the difference? \r\n\r\nBegin here: https://awifiedleadpro.com/wf\r\n\r\nBest regards,\r\nAngus\r\n\r\n\r\n\r\n116 Agnes Rd, Ste 200\r\nKnoxville, TN 37919\r\n\r\nTo Opt Out go here: https://awifiedleadpro.com/optout\r\nor reply UNSUBSCRIBE in the subject line\r\n\r\n\r\nbmtattaawunmitrasembada.com', NULL, '2024-02-22 16:39:37', '2024-02-22 16:39:37'),
(125, 'Tanya Santoro', 'dfyaisocialmarketing@gmail.com', 'Egktmny e', 'I trust this email finds you well! Our proven (DFY) AI social media marketing services help you reach a wider audience, build meaningful connections, achieve your business goals, and boost business earnings success. \r\nReady to supercharge your online presence and crush your competition? \r\nJust reply with a quick \"yes,\" and I\'ll share more information with you.\r\n\r\nWarm regards,', NULL, '2024-02-22 17:34:41', '2024-02-22 17:34:41'),
(126, 'Kenneth White', 'kenneth@adamhustle.com', '858-204-1161', 'Hello, did you notice the problems with your website\'s performance?', NULL, '2024-02-24 03:20:46', '2024-02-24 03:20:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layang_pandang`
--

CREATE TABLE `layang_pandang` (
  `id_layang_pandang` bigint(20) UNSIGNED NOT NULL,
  `layang_pandang` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layang_pandang`
--

INSERT INTO `layang_pandang` (`id_layang_pandang`, `layang_pandang`, `created_at`, `updated_at`) VALUES
(1, 'Bergerak di bidang Koperasi Simpan Pinjam dan Pembiayaan Syariah sesuai Anggaran Dasar', '2023-03-12 04:50:17', '2023-03-12 04:50:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `legalitas`
--

CREATE TABLE `legalitas` (
  `id_legalitas` bigint(20) UNSIGNED NOT NULL,
  `id_nama_legalitas` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_legalitas` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `legalitas`
--

INSERT INTO `legalitas` (`id_legalitas`, `id_nama_legalitas`, `deskripsi_legalitas`, `created_at`, `updated_at`) VALUES
(1, 1, 'Koperasi Simpan Pinjam dan Pembiayaan Syariah (KSPPS) BMT AT-TA’AWUN Mitra Sembada', '2023-03-05 11:03:16', '2023-03-05 12:23:45'),
(2, 2, 'Gedung K.H. A. Wahid Hasyim Lt. 1 Kampus Terpadu UII, Jl. Kaliurang Km. 14,5 Daerah Istimewa Yogyakarta 55584', '2023-03-05 12:29:54', '2023-03-05 12:29:54'),
(3, 3, 'bmt.attaawun@gmail.com', '2023-03-05 12:30:09', '2023-03-05 12:30:09'),
(4, 4, 'www.bmtattaawunmitrasembada.com', '2023-03-05 12:30:52', '2023-03-05 12:30:52'),
(5, 5, 'SK Menteri Hukum dan Hak Asasi Manusia Republik Indonesia Nomor AHU-0007842.AH.01.26. tahun 2021 (tertanggal 11 Januari 2021)', '2023-03-05 12:31:03', '2023-03-05 12:31:03'),
(6, 6, 'Bergerak di bidang Koperasi Simpan Pinjam dan Pembiayaan Syariah sesuai Anggaran Dasar', '2023-03-05 12:31:17', '2023-03-05 12:31:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_pendaftaran`
--

CREATE TABLE `link_pendaftaran` (
  `id_link_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `nama_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link_pendaftaran`
--

INSERT INTO `link_pendaftaran` (`id_link_pendaftaran`, `nama_link`, `link`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'pendaftaran anggota', 'https://forms.gle/FxbmJ7VRankrpFEX7', '', '2023-05-18 02:03:10', '2023-05-30 03:23:25'),
(2, 'pembukaan simpanan', 'https://bit.ly/SimpananBMT', '', '2023-05-18 02:03:10', '2023-05-18 02:03:10'),
(3, 'pembiayaan', 'https://bit.ly/PembiayaanBMTAMS', '', '2023-05-18 02:03:10', '2023-05-18 02:03:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `link_wa`
--

CREATE TABLE `link_wa` (
  `id_link_WA` bigint(20) UNSIGNED NOT NULL,
  `link_WA` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `link_wa`
--

INSERT INTO `link_wa` (`id_link_WA`, `link_WA`, `created_at`, `updated_at`) VALUES
(2, 'https://wa.me/message/XAYJCW3MIGEQF1', '2023-05-18 03:39:04', '2023-05-18 03:39:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maps`
--

CREATE TABLE `maps` (
  `id_maps` bigint(20) UNSIGNED NOT NULL,
  `link_maps` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `maps`
--

INSERT INTO `maps` (`id_maps`, `link_maps`, `created_at`, `updated_at`) VALUES
(1, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.95527997203!2d110.4126755153311!3d-7.687948578253487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5f719e25fbd1%3A0x7fcea4adfda3ea98!2sKSPPS%20BMT%20AT-TA&#39;AWUN%20MITRA%20SEMBADA!5e0!3m2!1sid!2sid!4v1680327472607!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-03-11 04:43:06', '2023-04-01 05:38:01');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_10_232704_create_keunggulans_table', 1),
(6, '2023_02_10_233531_create_sejarahs_table', 1),
(7, '2023_02_10_234011_create_deposito_syariahs_table', 1),
(8, '2023_02_19_125915_create_galeris_table', 1),
(9, '2023_02_19_130313_create_jam_operasionals_table', 1),
(10, '2023_02_19_130417_create_katebers_table', 1),
(11, '2023_02_19_131446_create_beritas_table', 1),
(12, '2023_02_19_235235_create_katesims_table', 1),
(13, '2023_02_19_235543_create_katepems_table', 1),
(14, '2023_02_20_195039_create_katestrukeps_table', 1),
(15, '2023_02_20_195657_create_simpanans_table', 1),
(16, '2023_02_20_195848_create_zis_table', 1),
(17, '2023_02_20_201145_create_pembiayaans_table', 1),
(18, '2023_02_20_201812_create_kalkupems_table', 1),
(19, '2023_02_20_203151_create_strukeps_table', 1),
(20, '2023_02_26_144415_create_jumbotrons_table', 1),
(21, '2023_02_26_144514_create_tentang_kamis_table', 1),
(22, '2023_02_26_144553_create_persyaratans_table', 1),
(23, '2023_03_01_204617_create_visis_table', 1),
(24, '2023_03_01_204720_create_misis_table', 1),
(25, '2023_03_04_055714_create_pendaftarans_table', 1),
(26, '2023_03_04_101915_create_ket_operasionals_table', 1),
(27, '2023_03_04_115509_create_penyedia_sosmeds_table', 1),
(28, '2023_03_04_190605_create_nama_legalitas_table', 1),
(29, '2023_03_05_161713_sosmed', 2),
(30, '2023_03_05_161751_legalitas', 2),
(31, '2023_03_06_054828_maps', 3),
(32, '2023_03_06_055020_telpon', 3),
(33, '2023_03_06_061428_create_panels_table', 4),
(34, '2023_03_11_095422_kontak', 5),
(37, '2023_03_12_084703_create_deskripsi_depsyars_table', 6),
(38, '2023_03_12_092445_create_layang_pandangs_table', 7),
(39, '2023_03_15_121256_create_persyaratan_pembiayaans_table', 8),
(40, '2023_03_15_121554_create_persyaratan_menabungs_table', 8),
(41, '2023_03_16_034611_create_kotak_sarans_table', 8),
(42, '2023_03_17_061921_create_deskripsi_kalkupems_table', 8),
(43, '2023_03_27_063323_test', 9),
(44, '2023_03_26_051851_create_deskontaks_table', 10),
(45, '2023_04_09_070617_tambahan', 10),
(46, '2023_05_02_044811_create_kegiatanzis_table', 11),
(47, '2023_05_02_045102_create_imagetitle_table', 11),
(48, '2023_05_13_101759_katedeposito', 11),
(49, '2023_05_13_110522_create_nisbahs_table', 12),
(50, '2023_05_14_085026_create_deposito_syariah_news_table', 12),
(51, '2023_05_14_090021_create_simulasi_bagi_hasils_table', 12),
(52, '2023_05_18_084654_create_link_pendaftarans_table', 13),
(53, '2023_05_18_101721_create_link_w_a_s_table', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `misi`
--

CREATE TABLE `misi` (
  `id_misi` bigint(20) UNSIGNED NOT NULL,
  `misi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `misi`
--

INSERT INTO `misi` (`id_misi`, `misi`, `created_at`, `updated_at`) VALUES
(1, '<ol><li>Mewujudkan pertumbuhan dan keuntungan lembaga untuk kesejahteraan anggota</li><li>Meningkatkan kualitas produk layanan berbasis keanggotaan</li><li>Mengembangkan usaha atas dasar nilai-nilai keislaman</li><li>Membangun ukhuwah islamiah antar anggota</li></ol>', '2023-03-25 07:17:44', '2023-06-10 01:59:49'),
(2, '<ol><li style=\"font-size: 12px;\"><span style=\"font-family: Arial; line-height: 115%; font-size: 12px;\">Mewujudkan pertumbuhan dan keuntungan lembaga untuk kesejahteraan anggota</span></li><li><!--[if !supportLists]--><!--[endif]--><span style=\"line-height: 115%; font-family: Arial; font-size: 12px;\">Meningkatkan kualitas produk layanan berbasis&nbsp;</span></li><li style=\"font-size: 12px;\"><span style=\"line-height: 115%; font-family: Arial; font-size: 12px;\">Mengembangkan usaha atas dasar nilai-nilai keislaman</span></li><li style=\"font-size: 12px;\"><span style=\"font-family: Arial; font-size: 12px;\">Membangun ukhuwah islamiah antar anggota</span></li></ol>', '2023-03-25 07:17:45', '2023-03-25 07:17:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_legalitas`
--

CREATE TABLE `nama_legalitas` (
  `id_nama_legalitas` bigint(20) UNSIGNED NOT NULL,
  `nama_legalitas` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nama_legalitas`
--

INSERT INTO `nama_legalitas` (`id_nama_legalitas`, `nama_legalitas`, `created_at`, `updated_at`) VALUES
(1, 'Nama Lembaga', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(2, 'Alamat Kantor', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(3, 'Alamat Email', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(4, 'Alamat Website', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(5, 'Dasar Hukum Pendirian', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(6, 'Kegiatan Usaha', '2023-03-05 09:43:34', '2023-03-05 09:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nisbah`
--

CREATE TABLE `nisbah` (
  `id_nisbah` bigint(20) UNSIGNED NOT NULL,
  `jangka_waktu` int(11) NOT NULL,
  `nisbah` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `nisbah`
--

INSERT INTO `nisbah` (`id_nisbah`, `jangka_waktu`, `nisbah`, `created_at`, `updated_at`) VALUES
(1, 3, '40 : 60', '2023-03-12 01:38:53', '2023-03-12 01:38:53'),
(2, 6, '45 : 55', '2023-03-12 01:39:09', '2023-03-12 01:39:09'),
(3, 12, '50 : 50', '2023-03-12 01:39:28', '2023-03-12 01:39:28'),
(4, 18, '55 : 45', '2023-03-12 01:39:44', '2023-03-12 01:39:44'),
(5, 24, '60 : 40', '2023-03-12 01:40:00', '2023-03-12 01:40:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `panel`
--

CREATE TABLE `panel` (
  `id_panel` bigint(20) UNSIGNED NOT NULL,
  `logo_panel_pertama` text DEFAULT NULL,
  `judul_panel_pertama` varchar(100) DEFAULT NULL,
  `deskripsi_panel_pertama` text DEFAULT NULL,
  `logo_panel_kedua` text DEFAULT NULL,
  `judul_panel_kedua` varchar(100) DEFAULT NULL,
  `deskripsi_panel_kedua` text DEFAULT NULL,
  `logo_panel_ketiga` text DEFAULT NULL,
  `judul_panel_ketiga` varchar(100) DEFAULT NULL,
  `deskripsi_panel_ketiga` text DEFAULT NULL,
  `logo_panel_keempat` text DEFAULT NULL,
  `judul_panel_keempat` varchar(100) DEFAULT NULL,
  `deskripsi_panel_keempat` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `panel`
--

INSERT INTO `panel` (`id_panel`, `logo_panel_pertama`, `judul_panel_pertama`, `deskripsi_panel_pertama`, `logo_panel_kedua`, `judul_panel_kedua`, `deskripsi_panel_kedua`, `logo_panel_ketiga`, `judul_panel_ketiga`, `deskripsi_panel_ketiga`, `logo_panel_keempat`, `judul_panel_keempat`, `deskripsi_panel_keempat`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Prinsip Syariah', NULL, NULL, 'Proses Cepat', NULL, NULL, 'Mudah', NULL, NULL, 'Aman', NULL, '2023-03-25 15:32:40', '2023-06-17 07:43:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembiayaan`
--

CREATE TABLE `pembiayaan` (
  `id_pembiayaan` bigint(20) UNSIGNED NOT NULL,
  `id_katepem` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_pembiayaan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembiayaan`
--

INSERT INTO `pembiayaan` (`id_pembiayaan`, `id_katepem`, `deskripsi_pembiayaan`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Merupakan fasilitas pembiayaan untuk memenuhi kebutuhan barang-barang (Aktiva Tetap) kebutuhan keluarga, berdasarkan prinsip jual beli dengan menggunakan akad Murabahah yang sesuai syariah dengan penetapan margin sesuai kesepakatan.</p>', '2023-03-25 08:20:57', '2023-03-25 08:20:57'),
(2, 2, '<p>Merupakan fasilitas pembiayaan guna pembayaran biaya jasa yang dikehendaki anggota, mengacu pada prinsip sewa- menyewa dengan menggunakan akad Ijarah Multi Jasa yang sesuai syariah dengan penetapan Ujroh sesuai kesepakatan.</p>', '2023-03-25 08:30:04', '2023-03-25 08:30:04'),
(3, 3, '<p>Merupakan fasilitas pembiayaan anggota untuk keperluan pengembangan usaha, berdasarkan prinsip kerjasama atau kemitraan menggunakan akad Musyarakah yang sesuai syariah dengan penetapan nisbah sesuai dengan kesepakatan.</p>', '2023-03-25 08:31:11', '2023-03-25 08:31:11'),
(4, 4, '<p>Fasilitas Pembiayaan anggota untuk keperluan modal usaha, berdasarkan prinsip kerjasama atau kemitraan menggunakan akad Mudharabah yang sesuai syariah dengan penetapan nisbah sesuai kesepakatan.</p><figure class=\"table\"><table><tbody><tr><td><h4><strong>No</strong></h4></td><td><h4><strong>Syarat Pembiayaan</strong></h4></td></tr><tr><td>1</td><td>Menjadi Anggota</td></tr><tr><td>2</td><td>Mempunyai Simpanan dengan Saldo Tertentu</td></tr><tr><td>3</td><td><p>Melengkapi Dokumen berupa:</p><p>Fc. KTP Suami/Istri</p><p>Fc. Kartu Keluarga (KK)</p><p>Fc. Legalitas Usaha/SK Terakhir</p><p>Fc. Slip Gaji Terakhir</p><p>Fc. Dokumen Jaminan Fix Asset</p></td></tr><tr><td>4</td><td>Bersedia disurvei</td></tr><tr><td>5</td><td>Bersedia Mengaplikasikan Akad Syariah sesuai Aturan yang Berlaku</td></tr></tbody></table></figure><p>&nbsp;</p>', '2023-03-25 08:33:19', '2023-06-27 03:23:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `id_pendaftaran` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nama_alias` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `foto_ktp` text NOT NULL,
  `nama_ibu_kandung` varchar(100) NOT NULL,
  `alamat_domisili_lengkap` text NOT NULL,
  `pekerjaan` varchar(75) NOT NULL,
  `pendidikan_terakhir` varchar(50) NOT NULL,
  `pendapatan_perbulan` varchar(50) NOT NULL,
  `telpon_wa` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rekening_yang_dibuka` varchar(50) NOT NULL,
  `tujuan_pembukaan_rekening` text NOT NULL,
  `scan_ttd` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyedia_sosmed`
--

CREATE TABLE `penyedia_sosmed` (
  `id_penyedia_sosmed` bigint(20) UNSIGNED NOT NULL,
  `nama_penyedia_sosmed` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyedia_sosmed`
--

INSERT INTO `penyedia_sosmed` (`id_penyedia_sosmed`, `nama_penyedia_sosmed`, `created_at`, `updated_at`) VALUES
(1, 'instagram', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(2, 'facebook', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(3, 'tiktok', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(4, 'youtube', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(5, 'email', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(6, 'telpon', '2023-03-05 09:43:34', '2023-03-05 09:43:34'),
(7, 'fax', '2023-03-05 09:43:34', '2023-03-05 09:43:34');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan`
--

CREATE TABLE `persyaratan` (
  `id_persyaratan` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_persyaratan` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_menabung`
--

CREATE TABLE `persyaratan_menabung` (
  `id_persyaratan_menabung` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_persyaratan_menabung` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_menabung`
--

INSERT INTO `persyaratan_menabung` (`id_persyaratan_menabung`, `deskripsi_persyaratan_menabung`, `created_at`, `updated_at`) VALUES
(1, 'FC KTP + Nama Ibu Kandung', '2023-03-25 08:13:14', '2023-03-25 08:13:14'),
(2, 'Administrasi Rp 30.000 (10 ribu administrasi, 10 ribu saldo mengendap, 10 ribu masuk ke rekening)', '2023-03-25 08:13:27', '2023-03-25 08:13:27'),
(3, 'Setoran minimal Rp 15.000', '2023-03-25 08:13:42', '2023-03-25 08:13:42'),
(4, '<div>Untuk pembukaan tabungan perencanaan menyesuaikan Jumlah Nominal dan Jangka Waktu dengan ketentuan setoran minimal sebagai berikut:<br><br>SIMPANAN TA’AWUN (SITA) Rp 30.000<br>SIMPANAN PERENCANAAN UMUM (SIRUM) Rp 50.000<br>SIMPANAN MAHASISWA (SIMA) Rp 50.000<br>SIMPANAN QURBAN (SIQU) Rp 150.000<br>SIMPANAN UMROH (SIRO) Rp 500.000<br>DEPOSITO SYARIAH Rp 500.000</div>', '2023-03-25 08:13:56', '2023-04-01 04:05:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `persyaratan_pembiayaan`
--

CREATE TABLE `persyaratan_pembiayaan` (
  `id_persyaratan_pembiayaan` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_persyaratan_pembiayaan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `persyaratan_pembiayaan`
--

INSERT INTO `persyaratan_pembiayaan` (`id_persyaratan_pembiayaan`, `deskripsi_persyaratan_pembiayaan`, `created_at`, `updated_at`) VALUES
(1, 'Menjadi Anggota', '2023-03-25 07:57:19', '2023-03-25 07:57:19'),
(2, 'Mempunyai Simpanan dengan Saldo Tertentu', '2023-03-25 07:57:40', '2023-03-25 07:57:40'),
(3, '<div>Melengkapi Dokumen berupa :&nbsp;</div><div>Fc. KTP Suami/Istri</div><div>Fc. Kartu Keluarga (KK)</div><div>Fc. Legalitas Usaha/SK Terakhir</div><div>Fc. Slip Gaji Terakhir</div><div>Fc. Dokumen Jaminan Fix Asset</div><div>Fc. Bukti Pembayaran Rekening Listrik</div>', '2023-03-25 07:58:00', '2023-06-27 07:28:58'),
(4, 'Bersedia Disurvei', '2023-03-25 08:00:11', '2023-03-25 08:00:11'),
(5, 'Bersedia Mengaplikasikan Akad Syariah Sesuai Aturan yang Berlaku', '2023-03-25 08:00:24', '2023-03-25 08:00:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_sejarah` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `deskripsi_sejarah`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"box-sizing: border-box; -webkit-user-drag: none; overflow: visible; color: inherit; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; display: inline; margin: 0px; padding: 0px; vertical-align: baseline; line-height: 24px;\"><span style=\"box-sizing: border-box; -webkit-user-drag: none; overflow: visible; color: inherit; font-family: Arial; font-size: inherit; display: inline; margin: 0px; padding: 0px; vertical-align: baseline;\">Berangkat dari niat yang baik antar dosen dan karyawan FIAI UII untuk saling membantu dan tolong menolong diantara mereka, muncullah sebuah ide untuk mengembangkan niat tersebut dengan membentuk Koperasi Sejahtera yang bermodalkan Rp. 3.666.000 dan kemudian FIAI UII menyalurkan dana sebesar Rp. 2.000.000 dalam bentuk penyertaan modal. Koperasi Sejahtera ini memiliki dua unit usaha berupa Fotocopy dan Kantin, akan tetapi Koperasi Sejahtera sempat fakum dikarenakan beberapa hal. Setelah beberapa saat terhenti, pada tanggal 30 Semptember 2006, nama Koperasi Sejahtera diubah menjadi Koperasi Ta’awun dengan tujuan saling tolong menolong khususnya pihak-pihak yang mengalami bencana gempa Yogyakarta dengan cara memberikan pinjaman lunak. Setelah beberapa tahun berjalan dan berkembang, pada tahun 2011 lahir sebuah gagasan dan inisiatif dari beberapa orang yang menghendaki adanya peran lebih luas bagi dosen, karyawan, maupun masyarakat yang ada di sekitar UII. Berdasarkan gagasan dan inisiatif yang kemudian dilanjutkan dengan pertemuan-pertemuan, kesimpulan dari pertemuan tersebut adalah pentingnya mengembangkan usaha Koperasi Ta’awun dengan membentuk KSPPS BMT sebagai wadah pemberdayaan dosen, karyawan, dan masyarakat yang menjembatani keinginan pemilik dana dengan pihak yang membutuhkan dana. Maka didirikanlah KSPPS BMT At-Ta’awun yang sebagian besar anggotanya merupakan anggota Koperasi Ta’awun. Setelah dilakukan persiapan yang matang, tepat pada tanggal 13 Maret 2012 KSPPS BMT At-Ta’awun mulai beroperasi untuk pertama kalinya dan di launching oleh rektor Universitas Islam Indonesia Prof. Dr. Edy Suandi Hamid, M. Ec yang pada tanggal 8 Mei 2012.</span></span></p><p><span style=\"box-sizing: border-box; -webkit-user-drag: none; overflow: visible; color: inherit; font-family: &quot;Times New Roman&quot;, serif; font-size: 12pt; display: inline; margin: 0px; padding: 0px; vertical-align: baseline; line-height: 24px;\"><span style=\"box-sizing: border-box; -webkit-user-drag: none; overflow: visible; color: inherit; font-family: Arial; font-size: inherit; display: inline; margin: 0px; padding: 0px; vertical-align: baseline;\">KSPPS BMT At-Ta’awun merupakan sebuah lembaga ekonomi dan keuangan berbadan hukum koperasi yang operasionalnya didasarkan pada prinsip syariah. Kegiatan usahanya antara lain memberikan bantuan pinjaman berupa pembiayaan modal usaha untuk pedagang dan pengusaha kecil menengah dan menyelenggarakan jasa simpanan bagi anggotanya dengan sistem bagi hasil berdasarkan ekonomi syariah. Sebagai sebuah lembaga keuangan mikro yang bertujuan melakukan pemberdayaan ekonomi untuk masyarakat, KSPPS BMT At-Ta’awun selalu berusaha dalam mengembangkan usahanya. Selain itu KSPPS BMT At-Ta’awun juga menjalin kerjasama dengan berbagai lembaga keuangan lain untuk lebih meningkatkan usahanya.</span></span></p><p><span style=\"box-sizing: border-box; -webkit-user-drag: none; overflow: visible; color: inherit; font-family: Arial; font-size: 12pt; display: inline; margin: 0px; padding: 0px; vertical-align: baseline;\">Tidak hanya dari segi simpan pinjam syariah saja akan tetapi pengembangan Program Maal yang meliputi penerimaan dana zakat, infaq shadaqah serta penyaluran dana Maal kepada mustahik.</span></p>', '2023-03-25 06:58:25', '2023-03-25 06:58:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `id_simpanan` bigint(20) UNSIGNED NOT NULL,
  `id_katesim` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_simpanan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`id_simpanan`, `id_katesim`, `deskripsi_simpanan`, `created_at`, `updated_at`) VALUES
(1, 1, '<p>Merupakan sarana investasi yang memungkinkan bagi anda untuk melakukan penyetoran dan penarikan secara harian, begitu mudah, aman, dan menguntungkan. Sistem pengelolaannya menggunakan akad Wadiah yang sesuai prinsip syari’ah.<br>​<br>&nbsp;</p>', '2023-03-12 08:12:19', '2023-06-27 04:26:05'),
(2, 2, '<p>Merupakan sarana investasi terencana yang membantu memudahkan dan mewujudkan keingainan anggota, dengan kepastian target dana dan waktu, sebagaimana harapan anggota, mudah, bersahabat, dan menguntungkan. Sistem pengelolaannya <i>Mudharabah Muthlaqah</i> yang sesuai prinsip syari’ah. Adapun simpanan terencana yang ada dibagi menjadi:</p><p><strong>Simpanan Perencanaan Umum (SIRUM)</strong></p><p>Merupakan sarana untuk memudahkan dan mewujudkan rencana keuangn Anggota dan Calon Anggota.</p><p><strong>Simpanan Pendidikan (SIDIK)</strong></p><p>Simpanan pendidikan merupakan jenis simpanan terencana yang diperuntukkan untuk rencana pendidikan. Seperti simpanan pendidikan anak, jenjang SD, SMP, SMA/ sederajat dan lain sebagainya.</p><p><strong>Simpanan Mahasiswa (SIMA)</strong></p><p>Tabungan terencana mahasiswa merupakan jenis tabungan yang di peruntukkan bagi para mahasiswa yang ingin mempersiapkan kebutuhan di masa akhir semesternya. Seperti kebutuhan rencana biaya KKN, Wisuda dan lain sebagainya.</p><p><strong>Simpanan Qurban (SIQU)</strong></p><p>Simpanan Qurban merupakan tabungan dengan akad Mudharabah Al-Mutlaqah yang merupakan simpanan terprogram diperuntukkan untuk kebutuhan pembelian hewan qurban.</p><p><strong>Simpanan Umroh (SIRO)</strong></p><p>Simpanan Umroh merupakan simpanan dengan akad Mudharabah Al-Mutlaqah yang merupakan simpanan terprogram diperuntukkan untuk membantu anggota dalam pemberangkatan ibadah Umroh.&nbsp;Dengan total rencana biaya yang dibutuhkanRp. 25.200.000.- dan di rencanakan dengan jangka waktu 24 bulan.</p><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><th><h4><strong>No</strong></h4></th><td><h4><strong>Syarat Menabung</strong></h4></td></tr><tr><th>1</th><td>FC KTP + Nama Ibu Kandung</td></tr><tr><th>2</th><td>Administrasi Rp 30.000 (10 ribu administrasi, 10 ribu saldo mengendap, 10 ribu masuk ke rekening)</td></tr><tr><th>3</th><td>Setoran minimal Rp 15.000</td></tr><tr><th>4</th><td>Untuk pembukaan tabungan perencanaan menyesuaikan <strong>Jumlah Nominal dan Jangka Waktu</strong> dengan ketentuan setoran minimal sebagai berikut:<br><br>SIMPANAN TA’AWUN (SITA) Rp 30.000<br>SIMPANAN PERENCANAAN UMUM (SIRUM) Rp 50.000<br>SIMPANAN MAHASISWA (SIMA) Rp 50.000<br>SIMPANAN QURBAN (SIQU) Rp 150.000<br>SIMPANAN UMROH (SIRO) Rp 500.000<br>DEPOSITO SYARIAH Rp 500.000</td></tr></tbody></table></figure>', '2023-03-12 09:39:12', '2023-05-30 06:28:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `simulasi_bagi_hasils`
--

CREATE TABLE `simulasi_bagi_hasils` (
  `id_simulasi_bagi_hasil` bigint(20) UNSIGNED NOT NULL,
  `nominal` varchar(255) NOT NULL,
  `jangka_waktu` varchar(255) NOT NULL,
  `total_bagi_hasil` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sosmed`
--

CREATE TABLE `sosmed` (
  `id_sosmed` bigint(20) UNSIGNED NOT NULL,
  `id_penyedia_sosmed` bigint(20) UNSIGNED NOT NULL,
  `alamat_sosmed` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sosmed`
--

INSERT INTO `sosmed` (`id_sosmed`, `id_penyedia_sosmed`, `alamat_sosmed`, `created_at`, `updated_at`) VALUES
(1, 1, 'https://instagram.com/bmt_attaawun?igshid=ZDdkNTZiNTM=', '2023-03-05 09:48:25', '2023-03-05 10:30:56'),
(2, 2, 'https://www.facebook.com/Bmtattaawunmitrasembada', '2023-03-05 10:31:19', '2023-03-05 10:31:19'),
(3, 3, 'https://www.tiktok.com/@bmt_attaawun?is_from_webapp=1&sender_device=pc', '2023-03-05 10:31:35', '2023-03-05 10:31:35'),
(4, 4, 'https://www.youtube.com/channel/UCCKWYgK52j1hZ9Dsel5pmdA', '2023-03-05 10:33:13', '2023-03-05 10:33:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukep`
--

CREATE TABLE `strukep` (
  `id_strukep` bigint(20) UNSIGNED NOT NULL,
  `id_katestrukep` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `strukep`
--

INSERT INTO `strukep` (`id_strukep`, `id_katestrukep`, `nama`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dr. Nur Kholis, S.Ag., SEI., M.Sh.Ec', 'Ketua', '2023-03-25 07:22:20', '2023-03-25 07:22:20'),
(2, 1, 'Dr. H. Tamyiz Mukharrom, MA', 'Anggota', '2023-03-25 07:22:42', '2023-03-25 07:22:42'),
(3, 1, 'Drs. H. Sofwan Jannah, M.Ag', 'Anggota', '2023-03-25 07:24:06', '2023-03-25 07:24:06'),
(4, 2, 'Drs. M. Hajar Dewantoro, M.Ag', 'Anggota', '2023-03-25 07:25:18', '2023-03-25 07:25:18'),
(5, 2, 'Drs. H. M. Sularno, MA', 'Anggota', '2023-03-25 07:30:38', '2023-03-25 07:30:38'),
(6, 3, 'Tulasmi, SEI., MEI', 'Ketua', '2023-03-25 07:31:22', '2023-03-25 07:31:22'),
(7, 3, 'Mir’atun Nur Arifah, S.Pd.I., M.Pd.I', 'Sekretaris', '2023-03-25 07:31:44', '2023-03-25 07:31:44'),
(8, 3, 'Anom Garbo, SEI., MEI', 'Bendahara', '2023-03-25 07:32:04', '2023-03-25 07:32:04'),
(9, 4, 'M. Rizal Nasrullah, SEI., ME', 'Manager', '2023-03-25 07:33:16', '2023-03-25 07:33:16'),
(10, 4, 'Ismiyati, SE', 'Account Officer', '2023-03-25 07:33:35', '2023-03-25 07:33:35'),
(11, 4, 'Rusliadi, SEI', 'Marketing', '2023-03-25 07:33:52', '2023-03-25 07:33:52'),
(12, 4, 'Andi Rizka Anggraini, SE', 'Teller', '2023-03-25 07:34:08', '2023-03-25 07:34:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentang_kami`
--

CREATE TABLE `tentang_kami` (
  `id_tentang_kami` bigint(20) UNSIGNED NOT NULL,
  `gambar_tentang_kami` text DEFAULT NULL,
  `deskripsi_tentang_kami` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tentang_kami`
--

INSERT INTO `tentang_kami` (`id_tentang_kami`, `gambar_tentang_kami`, `deskripsi_tentang_kami`, `created_at`, `updated_at`) VALUES
(1, 'media-tentang_kami/aobPT3JhKB5zjjDmEdO1lU2cXvmYxwYjtp0X5Q3f.jpg', '<div>KSPPS BMT At-Ta’awun merupakan sebuah lembaga ekonomi dan keuangan berbadan hukum koperasi yang operasionalnya didasarkan pada prinsip syariah. Kegiatan usahanya antara lain memberikan bantuan pinjaman berupa pembiayaan modal usaha untuk pedagang dan pengusaha kecil menengah dan menyelenggarakan jasa simpanan bagi anggotanya dengan sistem bagi hasil berdasarkan ekonomi syariah. Sebagai sebuah lembaga keuangan mikro yang bertujuan melakukan pemberdayaan ekonomi untuk masyarakat, KSPPS BMT At-Ta’awun selalu berusaha dalam mengembangkan usahanya. Selain itu KSPPS BMT At-Ta’awun juga menjalin kerjasama dengan berbagai lembaga keuangan lain untuk lebih meningkatkan usahanya.<br><br></div>', '2023-03-25 07:48:30', '2023-04-01 02:47:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `super_user` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `super_user`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'rochim', 'muhammad.0206@students.amikom.ac.id', 1, '2023-12-06 12:48:28', '$2y$10$loZoM56CEqkcYTtHgYRf8OUqhQu491CT3TGr0MNX8AnaQTWOlnyYa', 'XT9bkVU5s1co5vgtfM8741nJbnpewWf5ttlKDOacx6N1GNWf0qLmO9bg0iJs', '2023-03-05 09:31:40', '2023-12-06 12:48:28', NULL),
(15, 'Admin', 'bmt.attaawun@gmail.com', 1, NULL, '$2y$10$DR130mrZThcjQ6O/Cs1QVuYPJje10hwVprLMsTpBN2NuPKXcLfnTa', NULL, '2023-05-18 08:50:08', '2023-05-18 08:50:08', NULL),
(16, 'mamad', 'mamadanjar@gmail.com', 0, '2023-05-19 13:39:41', '$2y$10$qevZ1Ntx1dw6pb1TjUk3H.4xtUxArnxQ.I.tjJFrXKSRUTo7etUMa', 'KAK4ptUC76qCD7LFUBak7VlKfSmknoJ1OxhxhFdDXjgzvNTYmU61zbMgIUiH', '2023-05-19 13:34:47', '2023-05-19 13:52:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi`
--

CREATE TABLE `visi` (
  `id_visi` bigint(20) UNSIGNED NOT NULL,
  `visi` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `visi`
--

INSERT INTO `visi` (`id_visi`, `visi`, `created_at`, `updated_at`) VALUES
(1, '<ol><li>Menjadi Lembaga Keuangan Mikro Syariah Yang Amanah, Professional, dan Tangguh</li></ol>', '2023-03-25 07:16:27', '2023-03-25 08:59:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `zis`
--

CREATE TABLE `zis` (
  `id_zis` bigint(20) UNSIGNED NOT NULL,
  `deskripsi_zis` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `zis`
--

INSERT INTO `zis` (`id_zis`, `deskripsi_zis`, `created_at`, `updated_at`) VALUES
(1, '<p><span style=\"font-size: 16px; font-family: Arial;\">Merupakan fasilitas program penghimpunan dan penyaluran dana Zakat, Infaq dan Shadaqah dari anggota dan masyarakat. Bentuk penyaluran dana berupa santunan kepada fakir miskin, bantuan bagi masyarakat yang terkena bencana alam dan santunan anak yatim serta 8 asnaf sesuai dengan prinsip agama Islam.</span></p>', '2023-03-12 02:20:28', '2023-03-25 08:19:16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `berita_dibuat_foreign` (`dibuat`),
  ADD KEY `berita_id_kateber_foreign` (`id_kateber`);

--
-- Indeks untuk tabel `deposito_syariah`
--
ALTER TABLE `deposito_syariah`
  ADD PRIMARY KEY (`id_depsyar`),
  ADD KEY `deposito_syariah_id_katedeposito_foreign` (`id_katedeposito`);

--
-- Indeks untuk tabel `deskontak`
--
ALTER TABLE `deskontak`
  ADD PRIMARY KEY (`id_deskontak`);

--
-- Indeks untuk tabel `deskripsi_depsyar`
--
ALTER TABLE `deskripsi_depsyar`
  ADD PRIMARY KEY (`id_deskripsi_depsyar`);

--
-- Indeks untuk tabel `deskripsi_kalkupem`
--
ALTER TABLE `deskripsi_kalkupem`
  ADD PRIMARY KEY (`id_deskripsi_kalkupem`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `imagetitle`
--
ALTER TABLE `imagetitle`
  ADD PRIMARY KEY (`id_imagetitle`);

--
-- Indeks untuk tabel `jam_operasional`
--
ALTER TABLE `jam_operasional`
  ADD PRIMARY KEY (`id_jam_operasional`);

--
-- Indeks untuk tabel `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id_jumbotron`);

--
-- Indeks untuk tabel `kalkupem`
--
ALTER TABLE `kalkupem`
  ADD PRIMARY KEY (`id_kalkupem`);

--
-- Indeks untuk tabel `kateber`
--
ALTER TABLE `kateber`
  ADD PRIMARY KEY (`id_kateber`);

--
-- Indeks untuk tabel `katedeposito`
--
ALTER TABLE `katedeposito`
  ADD PRIMARY KEY (`id_katedeposito`);

--
-- Indeks untuk tabel `katepem`
--
ALTER TABLE `katepem`
  ADD PRIMARY KEY (`id_katepem`);

--
-- Indeks untuk tabel `katesim`
--
ALTER TABLE `katesim`
  ADD PRIMARY KEY (`id_katesim`);

--
-- Indeks untuk tabel `katestrukep`
--
ALTER TABLE `katestrukep`
  ADD PRIMARY KEY (`id_katestrukep`);

--
-- Indeks untuk tabel `kegiatanzis`
--
ALTER TABLE `kegiatanzis`
  ADD PRIMARY KEY (`id_kegiatanzis`);

--
-- Indeks untuk tabel `ket_operasional`
--
ALTER TABLE `ket_operasional`
  ADD PRIMARY KEY (`id_ket_operasional`);

--
-- Indeks untuk tabel `keunggulan`
--
ALTER TABLE `keunggulan`
  ADD PRIMARY KEY (`id_keunggulan`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  ADD PRIMARY KEY (`id_kotak_saran`);

--
-- Indeks untuk tabel `layang_pandang`
--
ALTER TABLE `layang_pandang`
  ADD PRIMARY KEY (`id_layang_pandang`);

--
-- Indeks untuk tabel `legalitas`
--
ALTER TABLE `legalitas`
  ADD PRIMARY KEY (`id_legalitas`),
  ADD KEY `legalitas_id_nama_legalitas_foreign` (`id_nama_legalitas`);

--
-- Indeks untuk tabel `link_pendaftaran`
--
ALTER TABLE `link_pendaftaran`
  ADD PRIMARY KEY (`id_link_pendaftaran`);

--
-- Indeks untuk tabel `link_wa`
--
ALTER TABLE `link_wa`
  ADD PRIMARY KEY (`id_link_WA`);

--
-- Indeks untuk tabel `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id_maps`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indeks untuk tabel `nama_legalitas`
--
ALTER TABLE `nama_legalitas`
  ADD PRIMARY KEY (`id_nama_legalitas`);

--
-- Indeks untuk tabel `nisbah`
--
ALTER TABLE `nisbah`
  ADD PRIMARY KEY (`id_nisbah`);

--
-- Indeks untuk tabel `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`id_panel`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  ADD PRIMARY KEY (`id_pembiayaan`),
  ADD KEY `pembiayaan_id_katepem_foreign` (`id_katepem`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `penyedia_sosmed`
--
ALTER TABLE `penyedia_sosmed`
  ADD PRIMARY KEY (`id_penyedia_sosmed`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  ADD PRIMARY KEY (`id_persyaratan`);

--
-- Indeks untuk tabel `persyaratan_menabung`
--
ALTER TABLE `persyaratan_menabung`
  ADD PRIMARY KEY (`id_persyaratan_menabung`);

--
-- Indeks untuk tabel `persyaratan_pembiayaan`
--
ALTER TABLE `persyaratan_pembiayaan`
  ADD PRIMARY KEY (`id_persyaratan_pembiayaan`);

--
-- Indeks untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`id_simpanan`),
  ADD KEY `simpanan_id_katesim_foreign` (`id_katesim`);

--
-- Indeks untuk tabel `simulasi_bagi_hasils`
--
ALTER TABLE `simulasi_bagi_hasils`
  ADD PRIMARY KEY (`id_simulasi_bagi_hasil`);

--
-- Indeks untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id_sosmed`),
  ADD KEY `sosmed_id_penyedia_sosmed_foreign` (`id_penyedia_sosmed`);

--
-- Indeks untuk tabel `strukep`
--
ALTER TABLE `strukep`
  ADD PRIMARY KEY (`id_strukep`),
  ADD KEY `strukep_id_katestrukep_foreign` (`id_katestrukep`);

--
-- Indeks untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  ADD PRIMARY KEY (`id_tentang_kami`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- Indeks untuk tabel `zis`
--
ALTER TABLE `zis`
  ADD PRIMARY KEY (`id_zis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `deposito_syariah`
--
ALTER TABLE `deposito_syariah`
  MODIFY `id_depsyar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `deskontak`
--
ALTER TABLE `deskontak`
  MODIFY `id_deskontak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_depsyar`
--
ALTER TABLE `deskripsi_depsyar`
  MODIFY `id_deskripsi_depsyar` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `deskripsi_kalkupem`
--
ALTER TABLE `deskripsi_kalkupem`
  MODIFY `id_deskripsi_kalkupem` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `imagetitle`
--
ALTER TABLE `imagetitle`
  MODIFY `id_imagetitle` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jam_operasional`
--
ALTER TABLE `jam_operasional`
  MODIFY `id_jam_operasional` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `jumbotron`
--
ALTER TABLE `jumbotron`
  MODIFY `id_jumbotron` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kalkupem`
--
ALTER TABLE `kalkupem`
  MODIFY `id_kalkupem` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `kateber`
--
ALTER TABLE `kateber`
  MODIFY `id_kateber` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `katedeposito`
--
ALTER TABLE `katedeposito`
  MODIFY `id_katedeposito` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `katepem`
--
ALTER TABLE `katepem`
  MODIFY `id_katepem` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `katesim`
--
ALTER TABLE `katesim`
  MODIFY `id_katesim` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `katestrukep`
--
ALTER TABLE `katestrukep`
  MODIFY `id_katestrukep` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kegiatanzis`
--
ALTER TABLE `kegiatanzis`
  MODIFY `id_kegiatanzis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ket_operasional`
--
ALTER TABLE `ket_operasional`
  MODIFY `id_ket_operasional` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `keunggulan`
--
ALTER TABLE `keunggulan`
  MODIFY `id_keunggulan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kotak_saran`
--
ALTER TABLE `kotak_saran`
  MODIFY `id_kotak_saran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT untuk tabel `layang_pandang`
--
ALTER TABLE `layang_pandang`
  MODIFY `id_layang_pandang` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `legalitas`
--
ALTER TABLE `legalitas`
  MODIFY `id_legalitas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `link_pendaftaran`
--
ALTER TABLE `link_pendaftaran`
  MODIFY `id_link_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `link_wa`
--
ALTER TABLE `link_wa`
  MODIFY `id_link_WA` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `maps`
--
ALTER TABLE `maps`
  MODIFY `id_maps` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `nama_legalitas`
--
ALTER TABLE `nama_legalitas`
  MODIFY `id_nama_legalitas` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `nisbah`
--
ALTER TABLE `nisbah`
  MODIFY `id_nisbah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `panel`
--
ALTER TABLE `panel`
  MODIFY `id_panel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  MODIFY `id_pembiayaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `id_pendaftaran` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penyedia_sosmed`
--
ALTER TABLE `penyedia_sosmed`
  MODIFY `id_penyedia_sosmed` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `persyaratan`
--
ALTER TABLE `persyaratan`
  MODIFY `id_persyaratan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_menabung`
--
ALTER TABLE `persyaratan_menabung`
  MODIFY `id_persyaratan_menabung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `persyaratan_pembiayaan`
--
ALTER TABLE `persyaratan_pembiayaan`
  MODIFY `id_persyaratan_pembiayaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `id_simpanan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `simulasi_bagi_hasils`
--
ALTER TABLE `simulasi_bagi_hasils`
  MODIFY `id_simulasi_bagi_hasil` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id_sosmed` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `strukep`
--
ALTER TABLE `strukep`
  MODIFY `id_strukep` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tentang_kami`
--
ALTER TABLE `tentang_kami`
  MODIFY `id_tentang_kami` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `zis`
--
ALTER TABLE `zis`
  MODIFY `id_zis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_dibuat_foreign` FOREIGN KEY (`dibuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_id_kateber_foreign` FOREIGN KEY (`id_kateber`) REFERENCES `kateber` (`id_kateber`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `deposito_syariah`
--
ALTER TABLE `deposito_syariah`
  ADD CONSTRAINT `deposito_syariah_id_katedeposito_foreign` FOREIGN KEY (`id_katedeposito`) REFERENCES `katedeposito` (`id_katedeposito`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `legalitas`
--
ALTER TABLE `legalitas`
  ADD CONSTRAINT `legalitas_id_nama_legalitas_foreign` FOREIGN KEY (`id_nama_legalitas`) REFERENCES `nama_legalitas` (`id_nama_legalitas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembiayaan`
--
ALTER TABLE `pembiayaan`
  ADD CONSTRAINT `pembiayaan_id_katepem_foreign` FOREIGN KEY (`id_katepem`) REFERENCES `katepem` (`id_katepem`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_id_katesim_foreign` FOREIGN KEY (`id_katesim`) REFERENCES `katesim` (`id_katesim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sosmed`
--
ALTER TABLE `sosmed`
  ADD CONSTRAINT `sosmed_id_penyedia_sosmed_foreign` FOREIGN KEY (`id_penyedia_sosmed`) REFERENCES `penyedia_sosmed` (`id_penyedia_sosmed`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `strukep`
--
ALTER TABLE `strukep`
  ADD CONSTRAINT `strukep_id_katestrukep_foreign` FOREIGN KEY (`id_katestrukep`) REFERENCES `katestrukep` (`id_katestrukep`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
