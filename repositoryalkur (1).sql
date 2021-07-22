-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jul 2021 pada 09.18
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repositoryalkur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_akademik`
--

CREATE TABLE `data_akademik` (
  `id_dataakademik` int(11) NOT NULL,
  `id_datadiri` int(11) NOT NULL,
  `nilai_agama` varchar(3) NOT NULL,
  `nilai_pkn` varchar(3) NOT NULL,
  `nilai_matematika` varchar(3) NOT NULL,
  `nilai_bhsinggris` varchar(3) NOT NULL,
  `nilai_bhsindonesia` varchar(3) NOT NULL,
  `nilai_sejarah` varchar(3) NOT NULL,
  `nilai_kewirausahaan` varchar(3) NOT NULL,
  `nilai_kejuruan` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_diri`
--

CREATE TABLE `data_diri` (
  `id_datadiri` int(6) NOT NULL,
  `id_dataakademik` int(11) NOT NULL,
  `id_datasekolah` int(11) NOT NULL,
  `id_datapilprod` int(11) NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `file_aktalahir` varchar(500) NOT NULL,
  `file_nilairaport` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pilprod`
--

CREATE TABLE `data_pilprod` (
  `id_pilprod` int(11) NOT NULL,
  `id_datadiri` int(11) NOT NULL,
  `pilihan_1` varchar(30) NOT NULL,
  `pilihan_2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_sekolah`
--

CREATE TABLE `data_sekolah` (
  `id_datasekolah` int(11) NOT NULL,
  `id_datadiri` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `alamat_sekolah` varchar(70) NOT NULL,
  `status_sekolah` varchar(7) NOT NULL,
  `jenis_sekolah` varchar(20) NOT NULL,
  `kejuruan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `program_studi`
--

CREATE TABLE `program_studi` (
  `id_program` int(2) NOT NULL,
  `program_studi` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `program_studi`
--

INSERT INTO `program_studi` (`id_program`, `program_studi`) VALUES
(1, 'Akuntansi'),
(10, 'Arsitektur'),
(6, 'Desain Komunikasi Visual'),
(5, 'Desain Produk'),
(4, 'Ilmu Komunikasi'),
(7, 'Informatika'),
(2, 'Manajemen'),
(3, 'Psikologi'),
(8, 'Sistem Informasi'),
(9, 'Teknik Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_sekolah`
--

CREATE TABLE `status_sekolah` (
  `id_status` int(7) NOT NULL,
  `status_sekolah` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_sekolah`
--

INSERT INTO `status_sekolah` (`id_status`, `status_sekolah`) VALUES
(1, 'Negeri'),
(2, 'Swasta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_register`
--

CREATE TABLE `temp_register` (
  `no` int(15) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `prodi_pilihan` varchar(35) NOT NULL,
  `password` varchar(70) NOT NULL,
  `active` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jawaban`
--

CREATE TABLE `t_jawaban` (
  `id_jawaban` int(5) NOT NULL,
  `id_peserta` varchar(100) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp(),
  `r1` int(5) NOT NULL,
  `r2` int(5) NOT NULL,
  `r3` int(5) NOT NULL,
  `i1` int(5) NOT NULL,
  `i2` int(5) NOT NULL,
  `i3` int(5) NOT NULL,
  `a1` int(5) NOT NULL,
  `a2` int(5) NOT NULL,
  `a3` int(5) NOT NULL,
  `s1` int(5) NOT NULL,
  `s2` int(5) NOT NULL,
  `s3` int(5) NOT NULL,
  `e1` int(5) NOT NULL,
  `e2` int(5) NOT NULL,
  `e3` int(5) NOT NULL,
  `c1` int(5) NOT NULL,
  `c2` int(5) NOT NULL,
  `c3` int(5) NOT NULL,
  `O` int(5) NOT NULL,
  `C` int(5) NOT NULL,
  `E` int(5) NOT NULL,
  `A` int(5) NOT NULL,
  `N` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jawaban`
--

INSERT INTO `t_jawaban` (`id_jawaban`, `id_peserta`, `tanggal`, `r1`, `r2`, `r3`, `i1`, `i2`, `i3`, `a1`, `a2`, `a3`, `s1`, `s2`, `s3`, `e1`, `e2`, `e3`, `c1`, `c2`, `c3`, `O`, `C`, `E`, `A`, `N`) VALUES
(1, '', '2021-07-20 12:01:54', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, '16', '2021-07-21 15:29:51', 9, 5, 14, 9, 4, 12, 9, 5, 11, 6, 6, 12, 6, 6, 11, 9, 11, 13, 0, 0, 0, 0, 0),
(3, '16', '2021-07-21 16:51:20', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `no` int(15) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `no_handphone` varchar(15) NOT NULL,
  `prodi_pilihan` varchar(35) NOT NULL,
  `password` varchar(70) NOT NULL,
  `author` varchar(70) NOT NULL,
  `ubah_password` varchar(7) NOT NULL,
  `isi_regist` varchar(7) NOT NULL,
  `isi_tes_holland` varchar(100) NOT NULL,
  `isi_tes_bigfive` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`no`, `nama`, `email`, `asal_sekolah`, `no_handphone`, `prodi_pilihan`, `password`, `author`, `ubah_password`, `isi_regist`, `isi_tes_holland`, `isi_tes_bigfive`) VALUES
(1, 'Sila Ninin Wisnantiasri', 'sila.wisnantiasri@upj.ac.id', '', '', '', '$2y$12$pUuefn.oMCsBfp3pbYf/pu/1eX5Q3wiQ.WT5ajBvTG7W5U6mmtJbi', 'kaprodi', 'belum', 'belum', '', ''),
(2, 'Yohanes Totok Suyoto', 'totok.suyoto@upj.ac.id', '', '', '', '$2y$12$0a/lXvt0pWc3iEyeEtqYdu2yJ3opIeW6sKO2iI5Ic70r0V0/JfF5m', 'kaprodi', 'belum', 'belum', '', ''),
(3, 'Aries Yulianto', 'aries.yulianto@upj.ac.id', '', '', '', '$2y$12$DE6ttzRueMKwIuV/O9hXp.2l0yWkxWepcolStSPvdcJcx2lLNAuyq', 'kaprodi', 'belum', 'belum', '', ''),
(4, 'Naurissa Biasini', 'naurissa.biasini@upj.ac.id', '', '', '', '$2y$12$89rxA.3XYogmQIxhBKqs8utVvva4ua.2V7P1n25aZjChDcCPLMqia', 'kaprodi', 'belum', 'belum', '', ''),
(5, 'Fitorio Leksono', 'fitorio.leksono@upj.ac.id', '', '', '', '$2y$12$m0skBfoVzgwoM/qF1yz/0uYSXQ/H9HpK8yibT1jrCKtIkqyX3JRMu', 'kaprodi', 'belum', 'belum', '', ''),
(6, 'Desi Dwi Kristanto', 'desi.dwikristanto@upj.ac.id', '', '', '', '$2y$12$IDevyh0P/RCKWziGzthiJOqaaeAuIJtHT6YwEwut4e9I8wUhPcCeS ', 'kaprodi', 'belum', 'belum', '', ''),
(7, 'Safitri Jaya', 'safitri.jaya@upj.ac.id', '', '', '', '$2y$12$yYaxtoObU2jstySYg.QcN.KDS4MVhp4EL/XRZI2sgJ0LBH7rtrmO2', 'kaprodi', 'belum', 'belum', '', ''),
(8, 'Chaerul Anwar', 'chaerul.anwar@upj.ac.id', '', '', '', '$2y$12$9fFdd0wDMnhRVtNr/YFp0.JMnrtyBNVln5f.1j9v8yQK7Zt5Vj1q6', 'kaprodi', 'belum', 'belum', '', ''),
(9, 'Pratika Riris Putrianti', 'pratika.riris@upj.ac.id', '', '', '', '$2y$12$XqDE7SNXaI8r5xtL8tmfR.PlkguqfzUmp45IO.UXMjz1m74TAPoYO', 'kaprodi', 'belum', 'belum', '', ''),
(10, 'Ratna Safitri', 'ratna.safitri@upj.ac.id', '', '', '', '$2y$12$kZViWmMKiKaXt39mqUk7mOmkNuvH2bk8B.by7cqLLLVVYtDEPwkh6', 'kaprodi', 'belum', 'belum', '', ''),
(16, 'Theofilus Handoyo', 'realth99@gmail.com', 'smk iopi', '085219427222', 'Ilmu Komunikasi', '$2y$05$n59n6hjY/BIDE.G2xqqIp.i.bXDxB5aI5fte7j2.VCyVIZ8eYoUeO', 'camaba', 'belum', 'belum', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_soal_big_five`
--

CREATE TABLE `t_soal_big_five` (
  `id_soal` int(10) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `kelompok` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_soal_big_five`
--

INSERT INTO `t_soal_big_five` (`id_soal`, `soal`, `kelompok`) VALUES
(1, 'Saya seorang imajinatif', 'o'),
(2, 'Saya seorang yang perfeksionis', 'c'),
(3, 'Saya seorang yang ramah', 'e'),
(4, 'Saya sulit mempercayai orang lain', 'a'),
(5, 'Mudah khawatir pada masalah sepele', 'n'),
(6, 'Saya menyukai kesenian', 'o'),
(7, 'Saya dapat diandalkan dalam kerja kelompok', 'c'),
(8, 'Saya suka menyendiri', 'e'),
(9, 'Saya tulus ketika berbicara', 'a'),
(10, 'Saya seorang pemalu', 'n'),
(11, 'Saya seorang yang kreatif', 'o'),
(12, 'Buku-buku saya tersimpan rapi', 'c'),
(13, 'Saya menyukai kebersamaan', 'e'),
(14, 'Apa yang saya katakan, menunjukkan apa yang sebenarnya saya pikirkan atau rasakan', 'a'),
(15, 'Saya mampu menahan amarah', 'n'),
(16, 'Orang-orang di sekitar saya tahu apa yang sedang saya rasakan', 'o'),
(17, 'Teman-teman bilang saya tukang telat', 'c'),
(18, 'Mampu memulai pembicaraan', 'e'),
(19, 'Saya seorang yang murah hati', 'a'),
(20, 'Saya dikenal sebagai seorang yang tidak mudah marah ', 'n'),
(21, 'Sering kali saya tidak tahu apakah saya sedang sedih atau senang', 'o'),
(22, 'Saya sering terlambat dalam mengumpulkan tugas', 'c'),
(23, 'Mewakili kelompok dalam berbicara', 'e'),
(24, 'Saya dikenal sebagai orang yang suka membantu orang lain', 'a'),
(25, 'Saya sering merasa tidak berharga', 'n'),
(26, 'Saya tidak menyukai rutinitas', 'o'),
(27, 'Saya seorang yang ambisius', 'c'),
(28, 'Ketika beraktivitas, saya cenderung santai', 'e'),
(29, 'Saya memiliki banyak konflik terhadap orang lain ', 'a'),
(30, 'Mudah tersinggung dengan orang lain', 'n'),
(31, 'Saya dikenal sebagai orang yang punya banyak ide', 'o'),
(32, 'Sebisa mungkin prestasi saya lebih tinggi dari teman-teman', 'c'),
(33, 'Saya memiliki banyak aktivitas', 'e'),
(34, 'Saya cenderung mengalah', 'a'),
(35, 'Saya tidak percaya diri', 'n'),
(36, 'Mampu menciptakan ide baru', 'o'),
(37, 'Saya mengerjakan tugas ketika mendekati deadline', 'c'),
(38, 'Saya senang berpetualang', 'e'),
(39, 'Saya seorang yang rendah hati', 'a'),
(40, 'Saya seorang yang moody', 'n'),
(41, 'Tradisi harus dijalankan meskipun di jaman modern', 'o'),
(42, 'Spontan adalah salah satu sifat saya', 'c'),
(43, 'Saya suka mengikuti kegiatan yang ramai', 'e'),
(44, 'Peduli terhadap orang lain', 'a'),
(45, 'Saya mudah panik ketika terjadi situasi yang tidak diharapkan', 'n'),
(46, 'Cenderung menentang tradisi yang telah ada', 'o'),
(47, 'Berpikir sebelum bertindak', 'c'),
(48, 'Sering merasa bahagia', 'e'),
(49, 'Seorang yang pengertian', 'a'),
(50, 'Bila lingkungan tidak bisa menyesuaikan saya, sayalah yang akan menyesuaikan', 'n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_soal_holland`
--

CREATE TABLE `t_soal_holland` (
  `id_soal` int(10) NOT NULL,
  `soal` varchar(200) NOT NULL,
  `kelompok` varchar(200) NOT NULL,
  `bagian` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_soal_holland`
--

INSERT INTO `t_soal_holland` (`id_soal`, `soal`, `kelompok`, `bagian`) VALUES
(1, 'Memperbaiki alat-alat listrik (seterika, dll)', 'r', '1'),
(2, 'Memperbaiki mobil', 'r', '1'),
(3, 'Memperbaiki alat-alat mekanik (sepeda, dll)', 'r', '1'),
(4, 'Membuat benda dari kayu', 'r', '1'),
(5, 'Beternak ayam, bebek, atau angsa', 'r', '1'),
(6, 'Menggunakan perkakas bengkel dan mesin-mesin', 'r', '1'),
(7, 'Membudidayakan tanaman hias', 'r', '1'),
(8, 'Mengikuti kursus perbengkelan', 'r', '1'),
(9, 'Mengikuti kursus menggambar keteknikan', 'r', '1'),
(10, 'Mengikuti kursus kerajinan kayu', 'r', '1'),
(11, 'Mengikuti kursus montir mobil', 'r', '1'),
(12, 'Membaca buku atau majalah ilmiah', 'i', '1'),
(13, 'Bekerja di laboratorium', 'i', '1'),
(14, 'Mengerjakan suatu proyek ilmiah', 'i', '1'),
(15, 'Mempelajari suatu teori ilmiah', 'i', '1'),
(16, 'Melakukan percobaan kimia', 'i', '1'),
(17, 'Membaca mengenai topik-topik khusus atas keinginan sendiri', 'i', '1'),
(18, 'Menerapkan matematika dalam masalah praktis', 'i', '1'),
(19, 'Mengambil kursus pelajaran fisika', 'i', '1'),
(20, 'Mengambil kursus pelajaran kimia ', 'i', '1'),
(21, 'Mengambil kursus pelajaran matematika', 'i', '1'),
(22, 'Mengambil kursus pelajaran biologi', 'i', '1'),
(23, 'Membuat sketsa, menggambar, atau melukis', 'a', '1'),
(24, 'Menjadi pemain dalam komedi atau sandiwara', 'a', '1'),
(25, 'Merancang perabotan, pakaian, atau poster', 'a', '1'),
(26, 'Bermain dalam suatu band, kelompok, atau orkesta', 'a', '1'),
(27, 'Memainkan alat musik', 'a', '1'),
(28, 'Menulis untuk suatu majalah atau koran', 'a', '1'),
(29, 'Membuat lukisan atau foto orang', 'a', '1'),
(30, 'Menulis novel atau sandiwara', 'a', '1'),
(31, 'Membaca atau menulis puisi', 'a', '1'),
(32, 'Mengikuti kursus kesenian', 'a', '1'),
(33, 'Menata atau menggubah musik', 'a', '1'),
(34, 'Bertemu dengan pengamat masalah sosial atau pendidikan', 's', '1'),
(35, 'Membaca artikel atau buku mengenai masalah sosial', 's', '1'),
(36, 'Bekerja untuk Palang Merah', 's', '1'),
(37, 'Membantu orang lain dengan masalah pribadinya', 's', '1'),
(38, 'Menjaga/mengurus dan mengawasi anak-anak', 's', '1'),
(39, 'Mempelajari kenakalan remaja', 's', '1'),
(40, 'Mengajar di perguruan tinggi', 's', '1'),
(41, 'Membaca buku-buku psikologi (pergaulan, dll)', 's', '1'),
(42, 'Membantu orang-orang berkebutuhan khusus', 's', '1'),
(43, 'Mengambil kursus hubungan masyarakat', 's', '1'),
(44, 'Mengajar di sekolah lanjutan (SMP, SMA)', 's', '1'),
(45, 'Mempengaruhi orang lain', 'e', '1'),
(46, 'Menjual suatu produk', 'e', '1'),
(47, 'Mempelajari strategi untuk keberhasilan bisnis', 'e', '1'),
(48, 'Berwiraswasta', 'e', '1'),
(49, 'Mengikuti ceramah mengenai penjualan', 'e', '1'),
(50, 'Mengambil kursus singkat administrasi dan kepemimpinan', 'e', '1'),
(51, 'Menjadi pemimpin dalam kelompok', 'e', '1'),
(52, 'Mengawasi pekerjaan orang lain', 'e', '1'),
(53, 'Bertemu dengan tokoh eksekutif dan pemimpin', 'e', '1'),
(54, 'Memimpin kelompok dalam meraih tujuan tertentu', 'e', '1'),
(55, 'Menjadi penanggung jawab dalam kampanye politik', 'e', '1'),
(56, 'Mengisi fomulir/daftar isian yang panjang', 'c', '1'),
(57, 'Mengetik sendiri makalah atau surat-surat', 'c', '1'),
(58, 'Melakukan operasi matematika dalam bisnis atau pembukuan', 'c', '1'),
(59, 'Mengoperasikan berbagai jenis alat kantor', 'c', '1'),
(60, 'Membuat catatan pengeluaran yang terperinci', 'c', '1'),
(61, 'Menyusun sistem pengarsipan (Filing)', 'c', '1'),
(62, 'Mengikuti kursus bisnis', 'c', '1'),
(63, 'Mengikuti kursus pembukuan (akuntansi)', 'c', '1'),
(64, 'Mengikuti kursus hitung dagang', 'c', '1'),
(65, 'Mengoperasikan komputer', 'c', '1'),
(66, 'Membuat daftar inventaris dari persediaan atau produk', 'c', '1'),
(67, 'Saya telah menggunakan peralatan mesin untuk pertukaran kayu (gergaji kayu listri, mesin bubut, dll)\r\n(gergaji kayu listrik, mesin bubut dll)', 'r', '2'),
(68, 'Saya dapat membuat gambar dengan skala', 'r', '2'),
(69, 'Saya dapat mengganti minyak mesin mobil atau ban mobil', 'r', '2'),
(70, 'Saya dapat menggunakan peralatan mesin, misal bor listrik atau mesin jahit', 'r', '2'),
(71, 'Saya dapat menghaluskan dan memplitur perabotan atau barang-barang dari kayu', 'r', '2'),
(72, 'Saya dapat membaca cetak biru (blueprint)', 'r', '2'),
(73, 'Saya dapat melakukan perbaikan kecil pada alat listrik', 'r', '2'),
(74, 'Saya dapat memperbaiki perabotan', 'r', '2'),
(75, 'Saya dapat menggunakan hampir semua alat pertukangan kayu', 'r', '2'),
(76, 'Saya dapat melakukan perbaikan kecil pada TV atau radio', 'r', '2'),
(77, 'Saya dapat melakukan perbaikan kecil pada pipa air, keran, dll', 'r', '2'),
(78, 'Saya dapat menggunakan prinsip aljabar untuk memecahkan masalah matematika', 'i', '2'),
(79, 'Saya dapat melakukan percobaan atau penelitian ilmiah', 'i', '2'),
(80, 'Saya mengerti tentang \"waktu paruh\" elemen radioaktif', 'i', '2'),
(81, 'Saya dapat menggunakan tabel logaritma', 'i', '2'),
(82, 'Saya dapat menggunakan kalkulator atau mistar hitung', 'i', '2'),
(83, 'Saya dapat menggunakan mikroskop', 'i', '2'),
(84, 'Saya dapat memprogram komputer untuk mempelajari masalah ilmiah', 'i', '2'),
(85, 'Saya dapat menjelaskan fungsi sel darah putih', 'i', '2'),
(86, 'Saya dapat menginterpretasikan rumus kimia sederhana', 'i', '2'),
(87, 'Saya mengerti mengapa satelit buatan manusia tidak jatuh ke bumi', 'i', '2'),
(88, 'Saya dapat menyebutkan tiga makanan yang memiliki protein tinggi', 'i', '2'),
(89, 'Saya dapat memainkan alat musik', 'a', '2'),
(90, 'Saya dapat menyanyi suara dua atau suara empat dalam paduan suara', 'a', '2'),
(91, 'Saya dapat menyajikan permainan musik tunggal', 'a', '2'),
(92, 'Saya dapat bermain sandiwara', 'a', '2'),
(93, 'Saya dapat menginterpretasikan cerita atau bahan bacaan', 'a', '2'),
(94, 'Saya dapat menulis laporan berita atau laporan teknis', 'a', '2'),
(95, 'Saya dapat membuat sketsa orang sehingga ia dapat dikenali', 'a', '2'),
(96, 'Saya dapat melukis atau membuat patung', 'a', '2'),
(97, 'Saya dapat menata atau menggubah musik', 'a', '2'),
(98, 'Saya dapat merancang pakaian, poster, atau perabotan', 'a', '2'),
(99, 'Saya dapat menulis cerita atau puisi dengan baik', 'a', '2'),
(101, 'Saya pandai dalam menolong orang lain yang sedang bingung atau bermasalah', 's', '2'),
(102, 'Saya mudah berbicara dengan semua orang', 's', '2'),
(103, 'Saya dapat memimpin diskusi kelompok', 's', '2'),
(104, 'Saya dapat merencanakan acara hiburan untuk pesta dalam lingkungan terbatas(keluarga, teman, dll)', 's', '2'),
(105, 'Saya mampu/kompeten dalam menghibur dan menemani orang yang lebih tua dari saya', 's', '2'),
(106, 'Saya pandai dalam menjelaskan sesuatu kepada orang lain', 's', '2'),
(107, 'Saya telah berpartisipasi dalam pencarian dana atau amal', 's', '2'),
(108, 'Saya dapat bekerja sebagai pengurus RT/RW', 's', '2'),
(109, 'Saya dapat mengajar anak-anak dengan mudah', 's', '2'),
(110, 'Saya dapat mengajar orang dewasa dengan mudah', 's', '2'),
(111, 'Orang mencari saya untuk menceritakan masalah mereka', 's', '2'),
(112, 'Saya memenangkan penghargaan sebagai tenaga penjual atau pemimpin', 'e', '2'),
(113, 'Saya tahu bagaimana menjadi pemimpin yang berhasil/sukses', 'e', '2'),
(114, 'Saya seorang pembicara di depan umum yang baik', 'e', '2'),
(115, 'Saya dapat mengelola usaha kecil', 'e', '2'),
(116, 'Saya dapat mengelola kampanye penjualan', 'e', '2'),
(117, 'Saya dapat mengatur pekerjaan orang lain', 'e', '2'),
(118, 'Saya dapat membuat kelompok sosial atau kelompok kerja berjalan dengan baik', 'e', '2'),
(119, 'Saya dikenal dapat berbicara dengan orang yang sulit/keras kepala', 'e', '2'),
(120, 'Saya seorang tenaga penjual yang baik', 'e', '2'),
(121, 'Saya pandai mempengaruhi orang lain untuk melakukan sesuatu menurut cara saya', 'e', '2'),
(122, 'Saya seorang yang berambisi dan cenderung berbicara apa adanya (tidak secara agresif)', 'e', '2'),
(123, 'Saya dapat mengetik sepuluh jari dengan cepat', 'c', '2'),
(124, 'Saya dapat menggunakan alat pemroses data yang sederhana seperti komputer', 'c', '2'),
(125, 'Saya dapat menjalankan mesin duplikator/mesin penjumlah', 'c', '2'),
(126, 'Saya dapat menulis steno', 'c', '2'),
(127, 'Saya dapat mengarsip surat dan berkas-berkas lain', 'c', '2'),
(128, 'Saya pernah melakukan pekerjaan administrasi kantor', 'c', '2'),
(129, 'Saya dapat menggunakan program pembukuan', 'c', '2'),
(130, 'Saya dapat melakukan tugas administratif dalam waktu singkat', 'c', '2'),
(131, 'Saya dapat menggunakan mesin penghitung (kalkulator)', 'c', '2'),
(132, 'Saya dapat menempatkan kredit dan debit', 'c', '2'),
(133, 'Saya dapat mencatat dengan cermat pembayaran/penjualan', 'c', '2'),
(134, 'Mekanik pesawat terbang', 'r', '3'),
(135, 'Penanggung jawab keamanan', 'r', '3'),
(136, 'Mekanik/montir mobil', 'r', '3'),
(137, 'Pengrajin kayu', 'r', '3'),
(138, 'Spesialis perikanan dan margasatwa', 'r', '3'),
(139, 'Ahli tanaman', 'r', '3'),
(140, 'Operator alat-alat berat', 'r', '3'),
(141, 'Peninjauan kelayakan (Surveyor)', 'r', '3'),
(142, 'Pengawasan konstruksi bangunan', 'r', '3'),
(143, 'Operator Radio', 'r', '3'),
(144, 'Pengemudi bis', 'r', '3'),
(145, 'Insinyur otomotif', 'r', '3'),
(146, 'Ahli mesin', 'r', '3'),
(147, 'Ahli lisrtik', 'r', '3'),
(149, 'Ahli meteorologi (ilmu cuaca)', 'i', '3'),
(150, 'Ahli biologi', 'i', '3'),
(151, 'Ahli astronomi (ilmu bintang)', 'i', '3'),
(152, 'Teknisi laboratium medis', 'i', '3'),
(153, 'Ahli antaropologi', 'i', '3'),
(154, 'Ahli ilmu hewan', 'i', '3'),
(155, 'Ahli kimia', 'i', '3'),
(156, 'Ilmuwan peneliti', 'i', '3'),
(157, 'Penulisan artikel ilmiah', 'i', '3'),
(158, 'Penyunting artikel ilmiah', 'i', '3'),
(159, 'Ahli geoglogi', 'i', '3'),
(160, 'Ahli botani (ilmu tumbuhan)', 'i', '3'),
(161, 'Pekerjaan riset ilmiah', 'i', '3'),
(162, 'Ahli fisika', 'i', '3'),
(164, 'Penulis puisi', 'a', '3'),
(165, 'Dirigen simfoni', 'a', '3'),
(166, 'Pemain musik', 'a', '3'),
(167, 'Penulis Novel', 'a', '3'),
(168, 'Aktor/Aktris', 'a', '3'),
(169, 'Penulis lepas', 'a', '3'),
(170, 'Penata musik', 'a', '3'),
(171, 'Wartawan', 'a', '3'),
(172, 'Seniman', 'a', '3'),
(173, 'Penyanyi', 'a', '3'),
(174, 'Pengubah musik', 'a', '3'),
(175, 'Pemahat patung', 'a', '3'),
(176, 'Penulis sandiwara', 'a', '3'),
(177, 'Kartunis', 'a', '3'),
(179, 'Sosiolog', 's', '3'),
(180, 'Guru sekolah lanjutan', 's', '3'),
(181, 'Pakar kenakalan remaja', 's', '3'),
(182, 'Terapi bicara', 's', '3'),
(183, 'Konselor pernikahan', 's', '3'),
(184, 'Kepala sekolah', 's', '3'),
(185, 'Fisloterapis', 's', '3'),
(186, 'Psikologi klinis', 's', '3'),
(187, 'Guru ilmu sosial', 's', '3'),
(188, 'Direktur LSM (Lembaga Swadaya Masyarakat)', 's', '3'),
(189, 'Konselor masalah pribadi', 's', '3'),
(190, 'Pekerja sosial', 's', '3'),
(191, 'konselor kejuruan dan pekerjaan', 's', '3'),
(194, 'Spekulator bisnis', 'e', '3'),
(195, 'Eksekutif pembelian', 'e', '3'),
(196, 'Eksekutif periklanan', 'e', '3'),
(197, 'Wakil perusahaan produksi', 'e', '3'),
(198, 'Penjual asuransi jiwa', 'e', '3'),
(199, 'Penyiar radio-TV', 'e', '3'),
(200, 'Eksekutif bisnis', 'e', '3'),
(201, 'Manajer restoran', 'e', '3'),
(202, 'Pembaca acara(MC)', 'e', '3'),
(203, 'Eksekutif penjualan', 'e', '3'),
(204, 'Eksekutif penjual real estate', 'e', '3'),
(205, 'Pemandu wisata', 'e', '3'),
(206, 'Manajer toko serba ada', 'e', '3'),
(207, 'Manajer penjual', 'e', '3'),
(209, 'Ahli pembukuan', 'c', '3'),
(210, 'Guru bisnis/ilmu dagang', 'c', '3'),
(211, 'Pemeriksa anggaran', 'c', '3'),
(212, 'Akuntan publik besertifikat', 'c', '3'),
(213, 'Penyelidik kredit', 'c', '3'),
(214, 'Pencatat steno di pengadilan', 'c', '3'),
(215, 'Kasir bank', 'c', '3'),
(216, 'Ahli pajak', 'c', '3'),
(217, 'Pengawasan barang inventaris', 'c', '3'),
(218, 'Operator alat listrik kantor', 'c', '3'),
(219, 'Analisis keuangan', 'c', '3'),
(220, 'Penaksir biaya', 'c', '3'),
(221, 'Pembayaran Gaji', 'c', '3'),
(222, 'Pemeriksa di bank', 'c', '3');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  ADD PRIMARY KEY (`id_dataakademik`),
  ADD UNIQUE KEY `id_datadiri` (`id_datadiri`);

--
-- Indeks untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  ADD PRIMARY KEY (`id_datadiri`),
  ADD UNIQUE KEY `id_dataakademik` (`id_dataakademik`,`id_datasekolah`,`id_datapilprod`);

--
-- Indeks untuk tabel `data_pilprod`
--
ALTER TABLE `data_pilprod`
  ADD PRIMARY KEY (`id_pilprod`),
  ADD UNIQUE KEY `id_datadiri` (`id_datadiri`);

--
-- Indeks untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_datasekolah`),
  ADD UNIQUE KEY `id_datadiri` (`id_datadiri`);

--
-- Indeks untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_program`),
  ADD UNIQUE KEY `program_studi` (`program_studi`);

--
-- Indeks untuk tabel `status_sekolah`
--
ALTER TABLE `status_sekolah`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `temp_register`
--
ALTER TABLE `temp_register`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `t_jawaban`
--
ALTER TABLE `t_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `t_soal_big_five`
--
ALTER TABLE `t_soal_big_five`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indeks untuk tabel `t_soal_holland`
--
ALTER TABLE `t_soal_holland`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `id_dataakademik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_datadiri` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_pilprod`
--
ALTER TABLE `data_pilprod`
  MODIFY `id_pilprod` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_sekolah`
--
ALTER TABLE `data_sekolah`
  MODIFY `id_datasekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_program` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status_sekolah`
--
ALTER TABLE `status_sekolah`
  MODIFY `id_status` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `temp_register`
--
ALTER TABLE `temp_register`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `t_jawaban`
--
ALTER TABLE `t_jawaban`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `t_soal_big_five`
--
ALTER TABLE `t_soal_big_five`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `t_soal_holland`
--
ALTER TABLE `t_soal_holland`
  MODIFY `id_soal` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
