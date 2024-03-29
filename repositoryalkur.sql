-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Sep 2021 pada 10.58
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
-- Struktur dari tabel `acuan_skoring`
--

CREATE TABLE `acuan_skoring` (
  `no` int(3) NOT NULL,
  `KATEG` varchar(1) NOT NULL,
  `R` int(1) NOT NULL,
  `I` int(1) NOT NULL,
  `A` int(1) NOT NULL,
  `S` int(1) NOT NULL,
  `E` int(1) NOT NULL,
  `C` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `acuan_skoring`
--

INSERT INTO `acuan_skoring` (`no`, `KATEG`, `R`, `I`, `A`, `S`, `E`, `C`) VALUES
(1, 'R', 3, 2, 1, 0, 1, 2),
(2, 'I', 2, 3, 2, 1, 0, 1),
(3, 'A', 1, 2, 3, 2, 1, 0),
(4, 'S', 0, 1, 2, 3, 2, 1),
(5, 'E', 1, 0, 1, 2, 3, 2),
(6, 'C', 2, 1, 0, 1, 2, 3);

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
  `id_camaba` int(5) NOT NULL,
  `id_dataakademik` int(11) NOT NULL,
  `id_datasekolah` int(11) NOT NULL,
  `id_datapilprod` int(11) NOT NULL,
  `nik` varchar(17) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `email_bio` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_telp` varchar(11) DEFAULT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(50) DEFAULT NULL,
  `penghasilan_ayah` int(11) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(50) DEFAULT NULL,
  `penghasilan_ibu` int(11) DEFAULT NULL,
  `file_aktalahir` varchar(500) DEFAULT NULL,
  `file_nilairaport` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_diri`
--

INSERT INTO `data_diri` (`id_datadiri`, `id_camaba`, `id_dataakademik`, `id_datasekolah`, `id_datapilprod`, `nik`, `nama_lengkap`, `email_bio`, `tempat_lahir`, `tanggal_lahir`, `no_telp`, `nama_ayah`, `pekerjaan_ayah`, `penghasilan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `penghasilan_ibu`, `file_aktalahir`, `file_nilairaport`) VALUES
(3, 56, 0, 0, 0, '87', '', '', '', '0000-00-00', '', '', '', 0, '', '', 0, '', ''),
(5, 25, 16, 16, 16, '1234', 'Theofilus Handoyo', 'realth99@gmail.com', '', '2021-08-04', NULL, '', '', 0, '', NULL, 0, '', ''),
(6, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Struktur dari tabel `intrepretasi`
--

CREATE TABLE `intrepretasi` (
  `no` int(11) NOT NULL,
  `tipe` varchar(3) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `rekomendasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intrepretasi`
--

INSERT INTO `intrepretasi` (`no`, `tipe`, `deskripsi`, `rekomendasi`) VALUES
(1, 'RIS', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Investigatif dan Sosial. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu juga memiliki tipe Sosial diurutan terakhir, ini artinya bukan kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis, dan kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang atau kamu lebih senang bekerja secara mandiri.', 'Informatika, Sistem Informasi'),
(2, 'RIA', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Investigatif dan Artistik. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu memiliki tipe Artistik diurutan terakhir, bukan berarti kamu tidak memiliki kemampuan atau ketertarikan dibidang kesenian, kamu tetap memiliki hal tersebut namun tidak dominan\n <br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis, dan kamu juga mempunyai sedikit ketertarikan dalam bidang seni.', 'Sistem Informasi, Informatika, Teknik Sipil'),
(3, 'RIE', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Investigatif dan Enterprising. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Investigative adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis, memiliki kepercayaan diri yang baik, cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Teknik Sipil, Informatika, Sistem Informasi'),
(4, 'RIC', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Investigatif dan Konvensional. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Kamu juga memiliki tipe Kovensional dalam urutan terakhir, hal ini bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n <br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis, kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Informatika'),
(5, 'RAI', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Artistik dan Investigatif. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang kreatif, namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(6, 'RAS', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Artistik dan Sosial. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, kamu juga merupakan orang yang kreatif, dan kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Desain Komunikasi Visual, Desain Produk'),
(7, 'RAE', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Artistik dan Enterprising. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n <br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang kreatif, namun kamu cenderung menghindari sesuatu yang memiliki tuntutan untuk memiliki kepercayaan diri yang tinggi. Selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Arsitektur, Desain Komunikasi Visual, Desain Produk'),
(8, 'RAC', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Artistik dan Konvensional. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat yang kamu dapat, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang kreatif, kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Komunikasi Visual, Desain Produk'),
(9, 'RSI', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Sosial dan Investigative. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang memiliki interpersonal dan ketertarikan dalam bersosialisasi yang baik,  namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Teknik Sipil, Desain Produk'),
(10, 'RSA', 'Kamu merupakan orang yang domian dengan tipe Realistik, kemudian diikuti dengan Sosial dan Artistik. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang memiliki interpersonal dan ketertarikan dalam bersosialisasi yang baik,  namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi', 'Teknik Sipil'),
(11, 'RSE', 'Kamu merupakan orang yang dominan dengan tipe Realistik, kemudian diikuti dengan Sosial dan Enterprising. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang memiliki interpersonal dan ketertarikan dalam bersosialisasi yang baik,  memiliki kepercayaan diri yang baik dan cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Teknik Sipil, Arsitektur, Desain Komunikasi Visual, Desain Produk'),
(12, 'RSC', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Sosial dan Konvensional. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, juga merupakan orang yang memiliki interpersonal dan ketertarikan dalam bersosialisasi yang baik, cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Arsitektur, Desain Komunikasi Visual, Desain Produk'),
(13, 'REI', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Enterprising dan Investigatif. Meskipun kamu dominan di tipe Realistik yang menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru serta memiliki rasa keingintahuan yang tinggi. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha, namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Komunikasi Visual, Desain Produk'),
(14, 'REA', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Enterprising dan Artistik. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru serta memiliki rasa keingintahuan yang tinggi. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha, namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi', 'Teknik Sipil, Sistem Informasi'),
(15, 'RES', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Enterprising dan Sosial. Meskipun kamu dominan di tipe Realistik yang menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru serta memiliki rasa keingintahuan yang tinggi. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru,kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha, dan kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Sistem Informasi'),
(16, 'REC', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Enterprising dan Konvensional. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru serta memiliki rasa keingintahuan yang tinggi. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha, cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Informatika, Teknik Sipil'),
(17, 'RCI', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Konvensioanal dan Investigatif. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu juga merupakan orang kemampuan numerik yang baik, senang dengan sesuatu yang bersifat sistematis, kamu juga penuh kehati-hatian dalam mengerjakan sesuatu dan memiliki tingkat kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Teknik Sipil, Desain Produk'),
(18, 'RCA', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Konvensional dan Artistik. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu juga merupakan orang kemampuan numerik yang baik, senang dengan sesuatu yang bersifat sistematis, kamu juga penuh kehati-hatian dalam mengerjakan sesuatu dan memiliki tingkat kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Teknik Sipil, Informatika, Sistem Informasi'),
(19, 'RCS', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Conventional dan Sosial. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu juga merupakan orang kemampuan numerik yang baik, senang dengan sesuatu yang bersifat sistematis, kamu juga penuh kehati-hatian dalam mengerjakan sesuatu dan memiliki tingkat kedisiplinan yang baik. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Informatika, Ssitem Informasi'),
(20, 'RCE', 'Kamu merupakan orang yang domian dengan tie Realistik, kemudian diikuti dengan Konvensioanal dan Enterprising. Tipe Realistik ini menyukai pekerjaan lapangan, senang mengutak-atik atau merakit barang, menyukai pekerjaan yang bersifat keteknikan. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu juga merupakan orang kemampuan numerik yang baik, senang dengan sesuatu yang bersifat sistematis, kamu juga penuh kehati-hatian dalam mengerjakan sesuatu dan memiliki tingkat kedisiplinan yang baik. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang bekerja secara praktek, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Memiliki kepercayaan diri yang baik dan cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Informatika'),
(21, 'IRA', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Realistik dan Artistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang. Kamu juga merupakan orang yang senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga senang dengan pekerjaan yang bersifat praktek. Kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Teknik Sipil, Informatika, Sistem Informasi'),
(22, 'IRS', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Realistik dan Sosial. Tipe Investigatif yang senang mencoba hal baru,, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang. Kamu juga merupakan orang yang senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga senang dengan pekerjaan yang bersifat praktek. Kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Informatika, Ssitem Informasi'),
(23, 'IRE', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Realistik dan Enterprising. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang. Kamu juga merupakan orang yang senang dengan sesuatu yang bersifat praktis. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga senang dengan pekerjaan yang bersifat praktek. Kamu memiliki kepercayaan diri yang baik dan cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Informatika'),
(24, 'IRC', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Realistik dan Konvensional. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang. Kamu juga merupakan orang yang senang dengan sesuatu yang bersifat praktis. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga senang dengan pekerjaan yang bersifat praktek. Kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Informatika'),
(25, 'IAR', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Artistik dan Realistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang kreatif. Kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Arsitektur, Ssitem Informasi, Desain Produk, Desain Komunikasi Visual'),
(26, 'IAS', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Artistik dan Sosial. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang kreatif. Kamu cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Desain Komunikasi Visual, Desain Produk, Sitem Informasi, Informatika, Arsitektur'),
(27, 'IAE', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Artistik dan Enterprising. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian.  Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang kreatif.  Kamu cenderung menghindari sesuatu yang memiliki tuntutan untuk memiliki kepercayaan diri yang tinggi. Selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Psikologi, Ilmu Komunikasi'),
(28, 'IAC', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Artistik dan Konvensional. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang kreatif. Kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Komunikasi Visual, Desain Produk, Arsitektur'),
(29, 'ISR', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Psikologi, Ilmu Komunikasi, Manajemen, Akuntansi'),
(30, 'ISA', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Sosial dan Artistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik.  Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Manajemen, Ilmu Komunikasi, Psikologi, Akuntansi'),
(31, 'ISE', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Sosial dan Enterprising. Meskipun kamu dominan di tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Psikologi, Akuntansi'),
(32, 'ISC', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Sosial dan Konvensional. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik.  Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Ilmu Komunikasi, Manajemen'),
(33, 'IER', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Enterprising dan Realistik. Meskipun kamu dominan di tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan', 'Manajemen, Ilmu Komunikasi'),
(34, 'IEA', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Enterprising dan Artistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Manajemen, Ilmu Komunikasi, Akuntansi'),
(35, 'IES', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Enterprising dan Sosial. Meskipun kamu dominan di tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial', 'Akuntansi'),
(36, 'IEC', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Enterprising dan Konvensional. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti,kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Manajemen, Psikologi, Ilmu Komunikasi'),
(37, 'ICR', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Konvensional dan Realistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Akuntansi, Manajemen, Psikologi, Ilmu Komunikasi'),
(38, 'ICA', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Konvensional dan Artistik. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Psikologi, Ilmu Komunikasi, Akuntansi, Manajemen'),
(39, 'ICS', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Konvensional dan Sosial. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.\n', 'Akuntansi'),
(40, 'ICE', 'Kamu merupakan orang yang dominan dengan tipe Investigatif, kemudian diikuti dengan tipe Konvensional dan Enterprising. Tipe Investigatif yang senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, juga merupakan pribadi yang penuh dengan kehati-hatian. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang memiliki rasa kengintahuan yang tinggi, senang mencoba hal baru, berpikir kiritis, teliti,memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.\n', 'Psikologi');
INSERT INTO `intrepretasi` (`no`, `tipe`, `deskripsi`, `rekomendasi`) VALUES
(41, 'ARI', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Realistik dan Investigatif. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang bekerja secara praktek, namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(42, 'ARS', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Realistik dan Sosial. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang bekerja secara praktek, namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(43, 'ARE', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Realistik dan Enterprising. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang bekerja secara praktek, namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(44, 'ARC', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Realistik dan Konvensional. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang bekerja secara praktek, namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.\n', 'Desain Produk, Desain Komunikasi Visual'),
(45, 'AIR', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Investigative dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan', 'Arsitektur, Desain Produk, Desain Komunikasi Visual'),
(46, 'AIS', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Investigative dan Sosial. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Desain Produk, Desain Komunikasi Visual'),
(47, 'AIE', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Investigative dan Enterprising. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(48, 'AIC', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Investigative dan Konvensional. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(49, 'ASR', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Arsitektur, Desain Komunikasi Visual'),
(50, 'ASI', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Komunikasi Visual, Desain Produk'),
(51, 'ASE', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kepercayaan diri yang baik dan cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(52, 'ASC', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik.  Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(53, 'AER', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Enterprising dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Desain Komunikasi Visual'),
(54, 'AEI', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Enterprising dan Investigatif. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru serta memiliki rasa keingintahuan yang tinggi. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(55, 'AES', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Enterprising dan Sosial. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Desain Komunikasi Visual'),
(56, 'AEC', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Enterprising dan Konvensional. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki ketertarikan dalam bidang seni, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Produk, Desain Komunikasi Visual'),
(57, 'ACR', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Konvensional dan Realistik. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, bukan artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Arsitektur'),
(58, 'ACI', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Konvensional dan Investigatif. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital.  Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu juga merupakan orang kemampuan numerik yang baik, senang dengan sesuatu yang bersifat sistematis, kamu juga penuh kehati-hatian dalam mengerjakan sesuatu dan memiliki tingkat kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Komunikasi Visual, Desain Produk'),
(59, 'ACS', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Konvensional dan Sosial. Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Arsitektur'),
(60, 'ACE', 'Kamu merupakan orang yang dominan dengan tipe Artistik, kemudian diikuti dengan tipe Konvensional dan Enterprising.Tipe Artistik senang dengan bidang kesenian, memiliki banyak ide atau gagasan, senang menyalurkan kreativitas dalam bentuk manual maupun digital. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang senang mengeksplorasi ide dalam bentuk kreativitas, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Arsitektur'),
(61, 'SRI', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Realistik dan Investigatif. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang melibatkan banyak orang dalam aktivitas, juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Ilmu Komunikasi'),
(62, 'SRA', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Realistik dan Artistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang. Kamu juga merupakan orang yang senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang melibatkan banyak orang dalam aktivitas, juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Ilmu Komunikasi'),
(63, 'SRE', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Realistik dan Enterprising. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang melibatkan banyak orang dalam aktivitas, juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Arsitektur'),
(64, 'SRC', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Realistik dan Konvensional. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang melibatkan banyak orang dalam aktivitas, juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Ilmu Komunikasi'),
(65, 'SIR', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Investigatif dan Realistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Psikologi, Manajemen'),
(66, 'SIA', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Investigatif dan Artistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu memiliki tipe Artistik diurutan terakhir, bukan berarti kamu tidak memiliki kemampuan atau ketertarikan dibidang kesenian, kamu tetap memiliki hal tersebut namun tidak dominan\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Psikologi, Ilmu Komunikasi, Manajemen'),
(67, 'SIE', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Investigatif dan Enterprising. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Psikologi'),
(68, 'SIC', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Investigatif dan Konvensional. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Ilmu Komunikasi'),
(69, 'SAR', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Artistik dan Realistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Psikologi, Ilmu Komunikasi, Manajemen'),
(70, 'SAI', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Artistik dan Investigatif. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Ilmu Komunikasi'),
(71, 'SAE', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Artistik dan Enterprising. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kamu juga merupakan orang yang kreatif. Selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Psikologi'),
(72, 'SAC', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Artistik dan Konvensional. Tipe Sosial senang bersosialisasi,membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kamu juga merupakan orang yang kreatif. Namun kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Ilmu Komunikasi'),
(73, 'SER', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Enterprising dan Realistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Ilmu Komunikasi, Psikologi, Manajemen'),
(74, 'SEI', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Enterprising dan Investigatif. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Ilmu Komunikasi'),
(75, 'SEA', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Enterprising dan Investigatif. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Ilmu Komunikasi, Manajemen'),
(76, 'SEC', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Enterprising dan Konvensional. Tipe Sosial senang bersosialisasi,membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi. Karakteristik lainnya yang kamu miliki adalah tipe Enterprising,  kamu memiliki ketertarikan dalam mempengaruhi orang banyak, memimpin serta memiliki keterampilan dalam bernegosiasi dan merupakan pribadi yang senang mencoba hal baru. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, kepercayaan diri dan keterampilan dalam memimpin yang baik, senang berwirausaha. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Ilmu Komunikasi'),
(77, 'SCR', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Konvensional dan Realistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi.  Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Manajemen, Psikologi'),
(78, 'SCI', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Konvensional dan Realistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi.  Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Ilmu Komunikasi'),
(79, 'SCA', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Konvensional dan Artistik. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi.  Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Psikologi, Ilmu Komunikasi, Akuntansi, Manajemen');
INSERT INTO `intrepretasi` (`no`, `tipe`, `deskripsi`, `rekomendasi`) VALUES
(80, 'SCE', 'Kamu merupakan orang yang dominan dengan tipe Sosial, kemudian diikuti dengan tipe Konvensional dan Enterprising. Tipe Sosial senang bersosialisasi, membantu orang lain dan memiliki kemampuan verbal yang baik dalam berkomunikasi.  Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu adalah orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Psikologi'),
(81, 'ERI', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Realistik dan Investigatif. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Manajemen'),
(82, 'ERA', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Realistik dan Artisitk. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Sistem Informasi'),
(83, 'ERS', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Realistik dan Sosial. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Sistem Informasi'),
(84, 'ERC', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Realistik dan Konvensional. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Manajemen'),
(85, 'EIR', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Investigatif dan Realistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Manajemen'),
(86, 'EIA', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Investigatif dan Artistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu memiliki tipe Artistik diurutan terakhir, bukan berarti kamu tidak memiliki kemampuan atau ketertarikan dibidang kesenian, kamu tetap memiliki hal tersebut namun tidak dominan.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Manajemen'),
(87, 'EIS', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Investigatif dan Artistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu juga memiliki tipe Sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Sistem Informasi'),
(88, 'EIC', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Investigatif dan Konvensional. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Kamu juga memiliki tipe Kovensional dalam urutan terakhir, hal ini bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n <br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu  kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Manajemen'),
(89, 'EAR', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Artistik dan Realistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Manajemen'),
(90, 'EAI', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Artistik dan Investigatif. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Manajemen, Ilmu Komunikasi'),
(91, 'EAS', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Artistik dan Sosial. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga merupakan orang yang kreatif. Namun selain itu kamu juga cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Desain Produk'),
(92, 'EAC', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Artistik dan Kovensional. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, kamu juga merupakan orang yang kreatif.  Namun selain itu  kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Desain Produk'),
(93, 'ESR', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Sosial dan Realistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Manajemen, Ilmu Komunikasi'),
(94, 'ESI', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Sosial dan Investigatif. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Sosial, yaitu kamu memiliki ketertarikan dalam bersosialisasi dan kamu memiliki kemampuan interpersonal yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Manajemen'),
(95, 'ESA', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Sosial dan Artistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Ilmu Komunikasi, Manajemen'),
(96, 'ESC', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Sosial dan Konvensional. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Konvensional yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu merupakan pribadi yang tidak menyukai keteraturan, kedisiplinan, dan kemampuan numerik yang rendah. Kamu tetap memiliki potensi namun kurang kamu kuasai, apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun selain itu kamu cenderung menghindari aktivitas atau pekerjaan yang banyak melibatkan angka, sesuatu yang bersifat sistematis dan kedispilinan yang tinggi.', 'Manajemen, Ilmu Komunikasi'),
(97, 'ECR', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Konvensional dan Realistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Manajemen, Akuntansi'),
(98, 'ECI', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Konvensional dan Investigatif. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.\n', 'Manajemen'),
(99, 'ECA', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Konvensional dan Artistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Akuntansi, Manajemen'),
(100, 'ECS', 'Kamu merupakan orang yang dominan dengan tipe Enterprising, kemudian diikuti dengan tipe Konvensional dan Artistik. Tipe Enterprising memiliki kepercayaan diri yang tinggi, mampu menjadi pemimpin, mempengaruhi orang banyak serta memiliki keterampilan dalam bernegosiasi. Karakteristik lainnya yang kamu miliki adalah tipe Konvensional, kamu merupakan seseorang dengan memiliki kemampuan numerik yang baik, menyukai suatu hal yang bersifat sistematis, serta memiliki kedisiplinan yang baik. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha, memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Akuntansi'),
(101, 'CRI', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Realistik dan Investigatif. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Teknik Sipil'),
(102, 'CRA', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Realistik dan Artistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Teknik Sipil'),
(103, 'CRS', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Realistik dan Sosial. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Teknik Sipil'),
(104, 'CRE', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Realistik dan Enterprising. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki adalah tipe Realistik yang menyukai pekerjaan bersifat lapangan dan senang merakit atau mengutak-atik barang, kamu senang dengan sesuatu yang bersifat praktis. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga tipikal yang senang bekerja secara praktek. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Informatika, Teknik Sipil'),
(105, 'CIR', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Investigatif dan Realistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Akuntansi'),
(106, 'CIA', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Investigatif dan Artistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu memiliki tipe Artistik diurutan terakhir, bukan berarti kamu tidak memiliki kemampuan atau ketertarikan dibidang kesenian, kamu tetap memiliki hal tersebut namun tidak dominan.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Akuntansi'),
(107, 'CIS', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Investigatif dan Sosial. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun kamu juga memiliki tipe Sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Akuntansi'),
(108, 'CIE', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Investigatif dan Enterprising. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Investigatif adalah seperti kamu senang mencoba-coba atau bereksperimen, berpikir kritis, senang menganalisis sesuatu dengan logika. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, senang mencoba hal baru, memiliki rasa keingintahuan yang tinggi, senang berpikir kritis. Namun selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Akuntansi'),
(109, 'CAR', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Artistik dan Realistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Arsitektur'),
(110, 'CAI', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Artistik dan Investigatif. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga merupakan orang yang kreatif. Namun selain itu kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Desain Produk'),
(111, 'CAS', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Artistik dan Sosial. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga merupakan orang yang kreatif. Namun selain itu kamu juga cenderung untuk menghindari aktivitas yang memerlukan banyak bertemu dengan orang, lebih senang bekerja secara mandiri.', 'Desain Produk'),
(112, 'CAE', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Artistik dan Enterprising. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Artistik adalah kamu merupakan orang yang senang mengeksplorasi banyak ide, memiliki kreativitas yang cukup tinggi dan ketertarikan dengan dunia kesenian. Meskipun Enterprising yang kamu miliki dalam urutan terakhir, ini artinya bukan berarti kamu memiliki kepercayaan diri yang rendah, tidak memiliki ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi tersebut namun apabila ingin dikembangkan, maka diperlukan keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, kamu juga merupakan orang yang kreatif. Selain itu kamu juga cenderung menghindari aktivitas yang berkiatan mengenai mempengaruhi atau mengajak orang lain seperti kegiatan marketing.', 'Desain Produk'),
(113, 'CSR', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Sosial dan Realistik. Meskipun kamu dominan di tipe Konventional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Psikologi'),
(114, 'CSI', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Sosial dan Investigatif. Meskipun kamu dominan di tipe Konventional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu juga memiliki tipe Investigatif dalam urutan terakhir, ini bukan berarti kamu tidak memiliki kemampuan untuk menganalisis, tidak senang mencoba-coba, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Investigatif saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Ilmu Komunikasi'),
(115, 'CSA', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Sosial dan Artistik. Meskipun kamu dominan di tipe Konventional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik. Namun kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Ilmu Komunikasi, Psikologi, Manajemen'),
(116, 'CSE', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Sosial dan Enterprising Meskipun kamu dominan di tipe Konventional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu memiliki tipe Enterprising dalam urutan terakhir, bukan artinya kamu tidak memiliki jiwa kepemimpinan, kepercayaan diri yang tinggi maupun ketertarikan dalam berwirausaha. Kamu tetap memiliki potensi namun kurang kamu kuasai apabila hal tersebut digunakan tanpa diimbangi dengan tipe lainnya untuk diri kamu berkembang.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, juga merupakan orang yang mempunyai ketertarikan yang cukup tinggi dalam hal bersosialisasi karena kemampuan berkomunikasi kamu secara verbal yang baik, memiliki kepercayaan diri yang baik dan cenderung menghindari sesuatu yang bersifat kepemimpinan dan sedikit memiliki ketertarikan dalam bidang wirausaha.', 'Akuntansi, Psikologi'),
(117, 'CER', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Enterprising dan Realistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha namun kamu cenderung menghindari suatu hal yang erat kaitannya dengan pengoperasian mesin, kerja secara praktek serta yang bersifat pekerjaan lapangan.', 'Akuntansi, Manajemen, Ilmu Komunikasi'),
(118, 'CEI', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Enterprising dan Investigatif. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik.  Meskipun tipe Realistik yang kamu miliki dalam urutan terakhir, buka artinya kamu tidak memiliki kemampuan dalam bekerja secara praktek, seperti merakit atau mengutak-atik benda namun hal tersebut kurang kamu kuasai. Apabila ingin dikembangkan maka perlu diseimbangkan dengan tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha. Namun kamu cenderung menghindari sesuatu yang memerlukan tuntutan dengan kemampuan analitikal yang tinggi.', 'Manajemen');
INSERT INTO `intrepretasi` (`no`, `tipe`, `deskripsi`, `rekomendasi`) VALUES
(119, 'CEA', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Enterprising dan Artistik. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu juga memiliki tipe Artistik dalam urutan terakhir, ini bukan berarti kamu tidak memiliki ketertarikan dalam hal kesenian, bukan merupakan orang yang memiliki banyak ide kreatif, namun kesempatan untuk kamu berkembang dengan hanya memfokuskan pada tipe Artistik saja tidak cukup karena harus diimbangi dengan tipe lainnya, terutama dengan tipe dominan yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha. Namun selain itu kamu cenderung menghindari suatu hal yang memerlukan kreativitas yang tinggi.', 'Sistem Informasi, Teknik Sipil'),
(120, 'CES', 'Kamu merupakan orang yang dominan dengan tipe Konvensional, kemudian diikuti dengan tipe Enterprising dan Sosial. Meskipun kamu dominan di tipe Konvensional yang merupakan pribadi penuh dengan kehati-hatian, disiplin dan menyukai sesuatu yang bersifat sistematis atau keteraturan. Karakteristik lainnya yang kamu miliki dalam tipe Sosial adalah senang bertemu banyak orang, memiliki ketertarikan dalam berorganisasi, mempunyai interpersonal yang baik. Meskipun kamu juga memiliki tipe sosial diurutan terakhir, bukan berarti kamu tidak dapat bersosialisasi namun kecenderungan kamu untuk berkembang dengan menggunakan kemampuan interpersonal kurang kamu kuasai, untuk memaksimalkan potensi yang kamu miliki maka diperlukannya keseimbangan dari tipe lainnya yang kamu miliki.\n<br><br>\nDengan melihat keseluruhan tipe minat kamu di atas, maka dapat disimpulkan kamu memiliki kemampuan numerik yang baik, senang dengan keteraturan atau bersifat sistematis dan teliti, memiliki kepercayaan diri yang tinggi dan kepemimpinan yang baik, menyukai tantangan, memiliki ketertarikan dalam wirausaha. Namun selain itu kamu cenderung untuk menghindari aktivitas yang bersifat sosial.', 'Sistem Informasi, Teknik Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intrepretasi_bigfive`
--

CREATE TABLE `intrepretasi_bigfive` (
  `no` int(11) NOT NULL,
  `tipe` varchar(7) NOT NULL,
  `rekomendasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intrepretasi_bigfive`
--

INSERT INTO `intrepretasi_bigfive` (`no`, `tipe`, `rekomendasi`) VALUES
(1, 'OCEA', 'Desain Komunikasi Visual, Desain Produk'),
(2, 'OCE', 'Desain Komunikasi Visual, Desain Produk, Teknik Sipil'),
(3, 'OC', 'Arsitektur'),
(4, 'O', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(5, 'OE', 'Desain Komunikasi Visual, Desain Produk'),
(6, 'OA', 'Arsitektur'),
(7, 'OEA', 'Desain Komunikasi Visual, Desain Produk'),
(8, 'OCA', 'Arsitektur'),
(9, 'CEA', 'Akuntansi, Manajemen, Psikologi, Komunikasi'),
(10, 'kosong', 'Informatika, Sistem Informasi, Manajemen'),
(11, 'CE', 'Informatika, Sistem Informasi, Teknik Sipil'),
(12, 'C', 'Akuntansi, Manajemen, TIF, SIF'),
(13, 'A', 'Psikologi'),
(14, 'E', 'Komunikasi '),
(15, 'EA', 'Komunikasi, Psikologi'),
(16, 'CA', 'Akuntansi, Manajemen'),
(17, 'OCEAN', 'Desain Komunikasi Visual, <br>Desain Produk'),
(18, 'OCEN', 'Desain Komunikasi Visual, Desain Produk, Teknik Sipil'),
(19, 'OCN', 'Arsitektur'),
(20, 'ON', 'Desain Produk, Desain Komunikasi Visual, Arsitektur'),
(21, 'OEN', 'Desain Komunikasi Visual, Desain Produk'),
(22, 'OAN', 'Arsitektur'),
(23, 'OEAN', 'Desain Komunikasi Visual, Desain Produk'),
(24, 'OCAN', 'Arsitektur'),
(25, 'CEAN', 'Akuntansi, Manajemen, Psikologi, Komunikasi'),
(26, 'N', 'Informatika, Sistem Informasi, Manajemen'),
(27, 'CEN', 'Informatika, Sistem Informasi, Teknik Sipil'),
(28, 'CN', 'Akuntansi, Manajemen, TIF, SIF'),
(29, 'AN', 'Psikologi'),
(30, 'EN', 'Komunikasi '),
(31, 'EAN', 'Komunikasi, Psikologi'),
(32, 'CAN', 'Akuntansi, Manajemen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `intrepretasi_bigfive_detail`
--

CREATE TABLE `intrepretasi_bigfive_detail` (
  `no` int(11) NOT NULL,
  `dimensi` varchar(10) NOT NULL,
  `deskripsi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `intrepretasi_bigfive_detail`
--

INSERT INTO `intrepretasi_bigfive_detail` (`no`, `dimensi`, `deskripsi`) VALUES
(1, 'O Tinggi', 'Kamu merupakan individu yang imajinatif, kreatif, menyukai variasi dan kamu juga memiliki rasa ingin tahu yang tinggi terhadap hal baru.'),
(2, 'O Rendah', 'Kamu adalah individu yang suka merendah, kurang menyukai kreativitas dan kamu lebih senang dengan rutinitas yang biasanya dilakukan dibandingkan dengan rutinitas baru.\n\nSaran: Sebaiknya kamu menyiapkan diri untuk keluar dari zona nyaman kamu, karena pada saat di universitas, kamu akan menghadapi hal yang tidak biasa kamu lakukan.'),
(3, 'C Tinggi', 'Kamu merupakan individu yang teliti dan bekerja keras dalam mengerjakan tanggung jawabmu, kamu juga seorang yang teratur, tepat waktu, ambisius dan gigih'),
(4, 'C Rendah', 'Kamu merupakan individu yang kurang teliti dalam mengerjakan tanggung jawab, suka menunda pekerjaan serta memiliki jadwal yang tidak teratur.\n\nSaran: Ketika kamu mengerjakan sesuatu, sebaiknya kamu membiasakan diri untuk mengecek ulang pekerjaanmu dan mulailah membuat jadwal kegiatan harian.'),
(5, 'E Tinggi', 'Kamu adalah individu yang penyayang, senang bergabung dengan orang lain, pembicara yang aktif, fun, memiliki banyak aktivitas dan bersemangat'),
(6, 'E Rendah', 'Kamu adalah individu yang pendiam, lebih menyukai kesendirian, seadanya dan pasif.\n\nSaran: Sebaiknya kamu menyiapkan diri untuk memulai pembicaraan dan bersosialisasi dengan orang lain karena pada saat di universitas, kamu akan menghadapi situasi yang mengharuskan kamu untuk banyak berinteraksi dengan orang lain.'),
(7, 'A Tinggi', 'Kamu adalah individu yang lembut, mudah percaya terhadap orang lain, murah hati, mudah setuju dengan keputusan orang lain, serta toleran dan baik hati'),
(8, 'A Rendah', ' Kamu merupakan individu yang kritis dalam berpikir, mudah marah, dan tidak mudah percaya terhadap orang lain.\n\nSaran: Ketika kamu mendapatkan pekerjaan kelompok, sebaiknya kamu mulai percaya dengan teman sekelompokmu dan mulai berbagi pekerjaan dengannya.'),
(9, 'N Tinggi', 'Kamu adalah seorang yang mudah cemas, temperamen, merasa mengasihani diri sendiri, emosional dan sensitif.\n\nSaran: Sebaiknya kendalikan emosi yang ada pada diri kamu dengan mulai percaya dengan dirimu sendiri dan melihat hal-hal diluar dengan positif.'),
(10, 'N Rendah', 'Kamu adalah individu yang tenang, menguasai diri, puas terhadap pencapaian diri sendiri, nyaman, tidak emosional dan kuat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kode_acuan_prodi`
--

CREATE TABLE `kode_acuan_prodi` (
  `no` int(11) NOT NULL,
  `manajemen` varchar(3) NOT NULL,
  `akuntansi` varchar(3) NOT NULL,
  `ilmu_komunikasi` varchar(3) NOT NULL,
  `psikologi` varchar(3) NOT NULL,
  `desain_komunikasi_visual` varchar(3) NOT NULL,
  `desain_produk` varchar(3) NOT NULL,
  `arsitektur` varchar(3) NOT NULL,
  `teknik_sipil` varchar(3) NOT NULL,
  `informatika` varchar(3) NOT NULL,
  `sistem_informasi` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kode_acuan_prodi`
--

INSERT INTO `kode_acuan_prodi` (`no`, `manajemen`, `akuntansi`, `ilmu_komunikasi`, `psikologi`, `desain_komunikasi_visual`, `desain_produk`, `arsitektur`, `teknik_sipil`, `informatika`, `sistem_informasi`) VALUES
(1, 'ISR', 'ISR', 'IAE', 'IAE', 'RAI', 'RAI', 'RAE', 'RIA', 'RIS', 'RIS'),
(2, 'ISA', 'ISA', 'ISA', 'ISA', 'RAS', 'RAS', 'RSE', 'RIE', 'RIA', 'RIA'),
(3, 'ISC', 'ISE', 'ISC', 'ISE', 'RAE', 'RAE', 'RSC', 'RSI', 'RIE', 'RIE'),
(4, 'IER', 'IEA', 'IER', 'IEC', 'RAC', 'RAC', 'IAR', 'RSA', 'RIC', 'REA'),
(5, 'IEA', 'IES', 'IEA', 'ICA', 'RSE', 'RSE', 'IAS', 'RSE', 'REC', 'RES'),
(6, 'IEC', 'ICR', 'IEC', 'ICE', 'RSC', 'RSC', 'IAC', 'REA', 'RCA', 'RCA'),
(7, 'ICR', 'ICA', 'ICR', 'SIR', 'REI', 'REI', 'ARS', 'REC', 'RCS', 'RCS'),
(8, 'ICA', 'ICS', 'ICA', 'SIA', 'IAR', 'IAR', 'ARE', 'RCI', 'RCE', 'IRA'),
(9, 'SIR', 'SCA', 'SRI', 'SIE', 'IAS', 'IAS', 'AIR', 'RCA', 'ERA', 'IRS'),
(10, 'SIA', 'ECR', 'SRA', 'SAR', 'IAC', 'IAC', 'AIE', 'IRA', 'IRS', 'IAR'),
(11, 'SAR', 'ECA', 'SRC', 'SAE', 'ARI', 'ARI', 'ASR', 'CRI', 'IRE', 'IAS'),
(12, 'SER', 'ECS', 'SIA', 'SER', 'ARS', 'ARS', 'ASE', 'CRA', 'IRC', 'ERA'),
(13, 'SEA', 'CIR', 'SIC', 'SCR', 'ARE', 'ARE', 'ACR', 'CRS', 'IAS', 'ERS'),
(14, 'SCR', 'CIA', 'SAR', 'SCA', 'ARC', 'ARC', 'ACS', 'CEA', '', 'EIS'),
(15, 'SCA', 'CIS', 'SAI', 'SCE', 'AIR', 'AIR', 'ACE', 'CES', '', 'CEA'),
(16, 'ERI', 'CIE', 'SAC', 'CSR', 'AIS', 'AIS', 'SRE', '', '', 'CES'),
(17, 'ERC', 'CSE', 'SER', 'CSA', 'AIE', 'AIE', 'CAR', '', '', ''),
(18, 'EIR', 'CER', 'SEI', 'CSE', 'AIC', 'AIC', '', '', '', ''),
(19, 'EIA', '', 'SEA', '', 'ASR', 'ASI', '', '', '', ''),
(20, 'EIC', '', 'SEC', '', 'ASI', 'ASE', '', '', '', ''),
(21, 'EAR', '', 'SCI', '', 'ASE', 'ASC', '', '', '', ''),
(22, 'EAI', '', 'SCA', '', 'ASC', 'AER', '', '', '', ''),
(23, 'ESR', '', 'EAI', '', 'AER', 'AEI', '', '', '', ''),
(24, 'ESI', '', 'ESR', '', 'AEI', 'AES', '', '', '', ''),
(25, 'ESA', '', 'ESA', '', 'AES', 'AEC', '', '', '', ''),
(26, 'ESC', '', 'ESC', '', 'AEC', 'ACI', '', '', '', ''),
(27, 'ECR', '', 'CSI', '', 'ACI', '', '', '', '', ''),
(28, 'ECI', '', 'CSA', '', '', '', '', '', '', ''),
(29, 'ECA', '', 'CER', '', '', '', '', '', '', ''),
(30, 'CSA', '', '', '', '', '', '', '', '', ''),
(31, 'CER', '', '', '', '', '', '', '', '', ''),
(32, 'CEI', '', '', '', '', '', '', '', '', '');

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

--
-- Dumping data untuk tabel `temp_register`
--

INSERT INTO `temp_register` (`no`, `nama`, `email`, `asal_sekolah`, `no_handphone`, `prodi_pilihan`, `password`, `active`) VALUES
(51, 'Theofilus Handoyo', 'realth99@gmail.com', 'smk yadika', '085219427222', 'Ilmu Komunikasi', 'bsHsSwVWBbjoYht', 0),
(52, 'Theofilus Handoyo', 'realth99@gmail.com', 'smk yadika', '085219427222', 'Ilmu Komunikasi', 'ARyIZbEznpnOgFL', 0),
(53, 'tes dua aja', 'syakilagha@gmail.com', '123', '099999', 'Akuntansi', 'NSecWkkXLsgWqZQ', 0),
(54, 'tes aja', 'syakilagha@gmail.com', 'sma 8', '098765', 'Akuntansi', 'bCDoofNScGAVFdo', 0),
(55, 'tes aja', 'syakilagha@upj.ac.id', 'ssss', '0987', 'Informatika', 'dCvWDTpwCtSObqM', 0);

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
  `R_holland` int(3) NOT NULL,
  `I_holland` int(3) NOT NULL,
  `A_holland` int(3) NOT NULL,
  `S_holland` int(3) NOT NULL,
  `E_holland` int(3) NOT NULL,
  `C_holland` int(3) NOT NULL,
  `O` int(5) NOT NULL,
  `C` int(5) NOT NULL,
  `E` int(5) NOT NULL,
  `A` int(5) NOT NULL,
  `N` int(5) NOT NULL,
  `dimensi_o` varchar(10) NOT NULL,
  `dimensi_c` varchar(10) NOT NULL,
  `dimensi_e` varchar(10) NOT NULL,
  `dimensi_a` varchar(10) NOT NULL,
  `dimensi_n` varchar(10) NOT NULL,
  `rekomendasi_prodi1` varchar(350) NOT NULL,
  `rekomendasi_prodi2` varchar(350) NOT NULL,
  `rekomendasi_prodi3` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jawaban`
--

INSERT INTO `t_jawaban` (`id_jawaban`, `id_peserta`, `tanggal`, `r1`, `r2`, `r3`, `i1`, `i2`, `i3`, `a1`, `a2`, `a3`, `s1`, `s2`, `s3`, `e1`, `e2`, `e3`, `c1`, `c2`, `c3`, `R_holland`, `I_holland`, `A_holland`, `S_holland`, `E_holland`, `C_holland`, `O`, `C`, `E`, `A`, `N`, `dimensi_o`, `dimensi_c`, `dimensi_e`, `dimensi_a`, `dimensi_n`, `rekomendasi_prodi1`, `rekomendasi_prodi2`, `rekomendasi_prodi3`) VALUES
(46, '25', '2021-08-30 06:36:46', 10, 6, 11, 9, 9, 9, 9, 2, 3, 9, 5, 8, 9, 7, 4, 11, 7, 6, 27, 27, 14, 22, 20, 24, 29, 27, 28, 36, 32, 'O Tinggi', 'C Tinggi', 'E Tinggi', 'A Tinggi', 'N Tinggi', 'Manajemen', 'Desain Komunikasi Visual<br>\nDesain Produk', '');

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
  `tipe_peserta` varchar(3) NOT NULL,
  `tipe_peserta2` varchar(5) NOT NULL,
  `isi_tes_holland` varchar(100) NOT NULL,
  `isi_tes_bigfive` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`no`, `nama`, `email`, `asal_sekolah`, `no_handphone`, `prodi_pilihan`, `password`, `author`, `ubah_password`, `isi_regist`, `tipe_peserta`, `tipe_peserta2`, `isi_tes_holland`, `isi_tes_bigfive`) VALUES
(1, 'Sila Ninin Wisnantiasri', 'sila.wisnantiasri@upj.ac.id', '', '', '', '$2y$12$pUuefn.oMCsBfp3pbYf/pu/1eX5Q3wiQ.WT5ajBvTG7W5U6mmtJbi', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(2, 'Yohanes Totok Suyoto', 'totok.suyoto@upj.ac.id', '', '', '', '$2y$12$0a/lXvt0pWc3iEyeEtqYdu2yJ3opIeW6sKO2iI5Ic70r0V0/JfF5m', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(3, 'Aries Yulianto', 'aries.yulianto@upj.ac.id', '', '', '', '$2y$12$DE6ttzRueMKwIuV/O9hXp.2l0yWkxWepcolStSPvdcJcx2lLNAuyq', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(4, 'Naurissa Biasini', 'naurissa.biasini@upj.ac.id', '', '', '', '$2y$12$89rxA.3XYogmQIxhBKqs8utVvva4ua.2V7P1n25aZjChDcCPLMqia', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(5, 'Fitorio Leksono', 'fitorio.leksono@upj.ac.id', '', '', '', '$2y$12$m0skBfoVzgwoM/qF1yz/0uYSXQ/H9HpK8yibT1jrCKtIkqyX3JRMu', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(6, 'Desi Dwi Kristanto', 'desi.dwikristanto@upj.ac.id', '', '', '', '$2y$12$IDevyh0P/RCKWziGzthiJOqaaeAuIJtHT6YwEwut4e9I8wUhPcCeS ', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(7, 'Safitri Jaya', 'safitri.jaya@upj.ac.id', '', '', '', '$2y$12$yYaxtoObU2jstySYg.QcN.KDS4MVhp4EL/XRZI2sgJ0LBH7rtrmO2', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(8, 'Chaerul Anwar', 'chaerul.anwar@upj.ac.id', '', '', '', '$2y$12$9fFdd0wDMnhRVtNr/YFp0.JMnrtyBNVln5f.1j9v8yQK7Zt5Vj1q6', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(9, 'Pratika Riris Putrianti', 'pratika.riris@upj.ac.id', '', '', '', '$2y$12$XqDE7SNXaI8r5xtL8tmfR.PlkguqfzUmp45IO.UXMjz1m74TAPoYO', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(10, 'Ratna Safitri', 'ratna.safitri@upj.ac.id', '', '', '', '$2y$12$kZViWmMKiKaXt39mqUk7mOmkNuvH2bk8B.by7cqLLLVVYtDEPwkh6', 'kaprodi', 'belum', 'belum', '', '', '', ''),
(17, 'tes aja', 'syakilagha@gmail.com', 'ssssss', '8888', 'Teknik Sipil', '$2y$05$6GlyJC5/zOn7WZ4zbmM/POkNp7YXijIfceR/qmTbOEjOVXyGz2WyK', 'camaba', 'belum', 'belum', '', '', 'belum', 'belum'),
(25, 'Theofilus Handoyo', 'realth99@gmail.com', 'smk yadika 3', '085219427222', 'Manajemen', '$2a$12$DEGLNXJjFrOYnx7NLjjyHOMM0gmE3XEreTLbcovLdO0unJ6UWr8hu', 'camaba', 'belum', 'belum', 'RIC', 'OCEAN', 'sudah', 'sudah');

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
-- Indeks untuk tabel `acuan_skoring`
--
ALTER TABLE `acuan_skoring`
  ADD PRIMARY KEY (`no`);

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
  ADD UNIQUE KEY `id_dataakademik` (`id_dataakademik`,`id_datasekolah`,`id_datapilprod`),
  ADD UNIQUE KEY `id_camaba` (`id_camaba`);

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
-- Indeks untuk tabel `intrepretasi`
--
ALTER TABLE `intrepretasi`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `intrepretasi_bigfive`
--
ALTER TABLE `intrepretasi_bigfive`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `intrepretasi_bigfive_detail`
--
ALTER TABLE `intrepretasi_bigfive_detail`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `kode_acuan_prodi`
--
ALTER TABLE `kode_acuan_prodi`
  ADD PRIMARY KEY (`no`);

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
-- AUTO_INCREMENT untuk tabel `acuan_skoring`
--
ALTER TABLE `acuan_skoring`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `data_akademik`
--
ALTER TABLE `data_akademik`
  MODIFY `id_dataakademik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `data_diri`
--
ALTER TABLE `data_diri`
  MODIFY `id_datadiri` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT untuk tabel `intrepretasi`
--
ALTER TABLE `intrepretasi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `intrepretasi_bigfive`
--
ALTER TABLE `intrepretasi_bigfive`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `intrepretasi_bigfive_detail`
--
ALTER TABLE `intrepretasi_bigfive_detail`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kode_acuan_prodi`
--
ALTER TABLE `kode_acuan_prodi`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT untuk tabel `t_jawaban`
--
ALTER TABLE `t_jawaban`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
