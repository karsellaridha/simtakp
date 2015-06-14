-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2015 at 04:52 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_kp`
--

CREATE TABLE IF NOT EXISTS `bimbingan_kp` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_konsultasi` text NOT NULL,
  `id_pengajuanpembkp` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bimbingan_kp`
--

INSERT INTO `bimbingan_kp` (`id`, `nim`, `nip`, `tanggal`, `hasil_konsultasi`, `id_pengajuanpembkp`) VALUES
(1, '09111003024', '12345678', '2015-05-16', 'belajar laravel', 4),
(2, '09111003036', '197210182008121001', '2015-05-20', 'bimbingan', 7),
(3, '09111003024', '12345678', '2015-05-30', 'tambah menu pengelolaan TA, ganti warna latar menu,logo ditambahkan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bimbingan_ta`
--

CREATE TABLE IF NOT EXISTS `bimbingan_ta` (
`id` int(10) NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hasil_konsultasi` text NOT NULL,
  `id_pengajuanpembta` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `bimbingan_ta`
--

INSERT INTO `bimbingan_ta` (`id`, `nim`, `nip`, `tanggal`, `hasil_konsultasi`, `id_pengajuanpembta`) VALUES
(1, '09111003024', '197210182008121001', '2015-06-10', 'bab 1 perbaiki format penulisan, tambah referensi', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
`id` int(10) unsigned NOT NULL,
  `nip` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` enum('Lektor','Asisten Ahli') NOT NULL,
  `jabatan_akademik` enum('Ketua Jurusan','Sekretaris Jurusan','Dosen','Dekan','Pembantu Dekan 1','Pembantu Dekan 2','Pembantu Dekan 3') NOT NULL,
  `id_user` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `jabatan`, `jabatan_akademik`, `id_user`) VALUES
(43, '197210182008121001', 'Fathoni, M.MSi', 'Asisten Ahli', 'Ketua Jurusan', 47),
(44, '12345678', 'asdfghjk', 'Lektor', 'Dosen', 50);

-- --------------------------------------------------------

--
-- Table structure for table `kuota_bimbingan`
--

CREATE TABLE IF NOT EXISTS `kuota_bimbingan` (
`id` int(10) unsigned NOT NULL,
  `nip` varchar(40) NOT NULL,
  `kuota_kp` int(10) NOT NULL,
  `kuota_ta` int(10) NOT NULL,
  `tahun` int(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kuota_bimbingan`
--

INSERT INTO `kuota_bimbingan` (`id`, `nip`, `kuota_kp`, `kuota_ta`, `tahun`) VALUES
(1, '197210182008121001', 7, 2, 2015),
(3, '12345678', 2, 2, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(70) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `id_prodi` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `id_prodi`, `id_user`) VALUES
(1, 'Ridha Karsella', '09111003024', 'perempuan', 1, 48),
(2, 'Desi Arianti', '09111003036', 'perempuan', 2, 49),
(3, 'Miranty Yudistira', '09111003016', 'perempuan', 1, 51),
(4, 'Rini Agustini', '09111003075', 'perempuan', 1, 52),
(5, 'Test', '09111003022', 'perempuan', 2, 53),
(6, '0911100302436', '0911100302436', 'laki-laki', 2, 54),
(7, 'Fahmi Natakusuma', '09111003000', 'laki-laki', 1, 55),
(8, 'Ahmad Nazarudin', '09111003064', 'laki-laki', 1, 56);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_kp`
--

CREATE TABLE IF NOT EXISTS `nilai_kp` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `judul_kp` text NOT NULL,
  `id_pengajuanpembkp` int(30) unsigned NOT NULL,
  `pemb_lapangan` varchar(50) NOT NULL,
  `nilai_pemblapangan` float NOT NULL,
  `file_nilai` varchar(100) NOT NULL,
  `kesesuaian_laporan` float NOT NULL,
  `penguasaan_materi` float NOT NULL,
  `analisis_perancangan` float NOT NULL,
  `sikap_etika` float NOT NULL,
  `nilai_dosbing` float NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nilai_kp`
--

INSERT INTO `nilai_kp` (`id`, `nim`, `judul_kp`, `id_pengajuanpembkp`, `pemb_lapangan`, `nilai_pemblapangan`, `file_nilai`, `kesesuaian_laporan`, `penguasaan_materi`, `analisis_perancangan`, `sikap_etika`, `nilai_dosbing`) VALUES
(3, '09111003024', 'Sistem informasi Pengelolaan Arsip', 4, 'Cipta', 89, 'nilaikplapangan/Formulir_Pendaftaran_Beasiswa.pdf.pdf', 85, 86, 80, 80, 0);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ta1`
--

CREATE TABLE IF NOT EXISTS `nilai_ta1` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `persentasi` int(11) NOT NULL,
  `kesesuaian_format` int(11) NOT NULL,
  `bahasa_indonesia` int(11) NOT NULL,
  `kesesuaian_isi` int(11) NOT NULL,
  `kelengkapan_dokumen` int(11) NOT NULL,
  `analisis` int(11) NOT NULL,
  `metodologi` int(11) NOT NULL,
  `basisdata` int(11) NOT NULL,
  `office` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `jaringan` int(11) NOT NULL,
  `sikap_etika` int(11) NOT NULL,
  `penilaian_proses` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `nilai_ta1`
--

INSERT INTO `nilai_ta1` (`id`, `nim`, `nip`, `persentasi`, `kesesuaian_format`, `bahasa_indonesia`, `kesesuaian_isi`, `kelengkapan_dokumen`, `analisis`, `metodologi`, `basisdata`, `office`, `os`, `jaringan`, `sikap_etika`, `penilaian_proses`) VALUES
(1, '09111003024', '197210182008121001', 80, 80, 80, 80, 90, 80, 80, 66, 90, 90, 90, 90, 87);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_ta2`
--

CREATE TABLE IF NOT EXISTS `nilai_ta2` (
  `id` int(11) NOT NULL,
  `nim` varchar(225) NOT NULL,
  `nip` varchar(225) NOT NULL,
  `persentasi` int(11) NOT NULL,
  `kesesuaian_format` int(11) NOT NULL,
  `bahasa_indonesia` int(11) NOT NULL,
  `kesesuaian_isi` int(11) NOT NULL,
  `kelengkapan_dokumen` int(11) NOT NULL,
  `analisis` int(11) NOT NULL,
  `metodologi` int(11) NOT NULL,
  `basisdata` int(11) NOT NULL,
  `office` int(11) NOT NULL,
  `os` int(11) NOT NULL,
  `jaringan` int(11) NOT NULL,
  `sikap_etika` int(11) NOT NULL,
  `penilaian_proses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pembkp`
--

CREATE TABLE IF NOT EXISTS `pengajuan_pembkp` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tempat_kp` varchar(200) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `status_pembimbing` enum('diajukan','disetujui') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `pengajuan_pembkp`
--

INSERT INTO `pengajuan_pembkp` (`id`, `nim`, `nip`, `tempat_kp`, `tahun`, `status_pembimbing`) VALUES
(4, '09111003024', '12345678', 'PT. Pupuk Sriwidjaja', '2015', 'disetujui'),
(7, '09111003036', '197210182008121001', 'PT. Pertamina (Persero)', '2015', 'disetujui'),
(8, '09111003016', '197210182008121001', 'PT. Semen Baturaja(Persero)', '2015', 'disetujui'),
(9, '09111003075', '197210182008121001', 'PT. Pertamina (Persero)', '2015', 'diajukan'),
(10, '09111003022', '12345678', 'PT. Semen Baturaja(Persero)', '2015', 'diajukan'),
(11, '0911100302436', '197210182008121001', 'PT. Pupuk Sriwidjaja', '2015', 'diajukan'),
(12, '09111003000', '197210182008121001', 'as', '2015', 'diajukan');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_pembta`
--

CREATE TABLE IF NOT EXISTS `pengajuan_pembta` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `pembimbing_1` varchar(50) NOT NULL,
  `pembimbing_2` varchar(50) DEFAULT NULL,
  `judul` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `status_pembimbing` enum('diajukan','disetujui') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pengajuan_pembta`
--

INSERT INTO `pengajuan_pembta` (`id`, `nim`, `pembimbing_1`, `pembimbing_2`, `judul`, `tahun`, `status_pembimbing`) VALUES
(2, '09111003036', '197210182008121001', '12345678', 'sdasd', '2015', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_syaratkp`
--

CREATE TABLE IF NOT EXISTS `pengajuan_syaratkp` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_pengajuan_pembkp` int(10) unsigned NOT NULL,
  `jumlah_sks` varchar(10) NOT NULL,
  `id_transaksispp` varchar(30) NOT NULL,
  `id_transaksidpl` varchar(30) NOT NULL,
  `lama_kp` varchar(30) NOT NULL,
  `proposal_kp` enum('ada','tidak ada') NOT NULL,
  `permohonan_kp` enum('ada','tidak ada') NOT NULL,
  `kesediaan_membimbing` enum('ada','tidak ada') NOT NULL,
  `status_syaratkp` enum('diajukan','diverifikasi','divaliasi') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajuan_syaratkp`
--

INSERT INTO `pengajuan_syaratkp` (`id`, `nim`, `no_hp`, `id_pengajuan_pembkp`, `jumlah_sks`, `id_transaksispp`, `id_transaksidpl`, `lama_kp`, `proposal_kp`, `permohonan_kp`, `kesediaan_membimbing`, `status_syaratkp`) VALUES
(1, '09111003024', '08961234567', 4, '92 sks', '1234567890', '9876543210', '1 Bulan', 'ada', 'ada', 'ada', 'diverifikasi'),
(2, '09111003036', '089765432156', 7, '92 sks', '567890', '654321', '1 Bulan', 'ada', 'ada', 'ada', 'diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_syaratta`
--

CREATE TABLE IF NOT EXISTS `pengajuan_syaratta` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_pengajuan_pembta` int(10) NOT NULL,
  `jumlah_sks` varchar(5) NOT NULL,
  `id_transaksispp` varchar(30) NOT NULL,
  `id_transaksidpl` varchar(30) NOT NULL,
  `ktm` enum('ada','tidak ada') NOT NULL,
  `proposal_ta` enum('ada','tidak ada') NOT NULL,
  `tanda_kp` enum('ada','tidak ada') NOT NULL,
  `kesediaan_membimbing` enum('ada','tidak ada') NOT NULL,
  `persetujuan_ta` enum('ada','tidak ada') NOT NULL,
  `sk_pemb` enum('ada','tidak ada') NOT NULL,
  `permohonan_ambildata` enum('ada','tidak ada') NOT NULL,
  `status_syaratta` enum('diajukan','diverifikasi') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_syaratujianta1`
--

CREATE TABLE IF NOT EXISTS `pengajuan_syaratujianta1` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `tempat_sidang` varchar(255) NOT NULL,
  `ksm` enum('ada','tidak ada') NOT NULL,
  `spp` enum('ada','tidak ada') NOT NULL,
  `dkn` enum('ada','tidak ada') NOT NULL,
  `ktm` enum('ada','tidak ada') NOT NULL,
  `form_konsultasi` enum('ada','tidak ada') NOT NULL,
  `rekomendasi_sidang` enum('ada','tidak ada') NOT NULL,
  `tugas_akhir_1` enum('ada','tidak ada') NOT NULL,
  `sk_pembimbing_ta` enum('ada','tidak ada') NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pengajuan_syaratujianta1`
--

INSERT INTO `pengajuan_syaratujianta1` (`id`, `nim`, `status`, `jadwal`, `tempat_sidang`, `ksm`, `spp`, `dkn`, `ktm`, `form_konsultasi`, `rekomendasi_sidang`, `tugas_akhir_1`, `sk_pembimbing_ta`, `updated_at`, `created_at`) VALUES
(1, '09111003024', 2, '2015-06-04', 'Palembang', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '2015-06-07 08:44:56', '2015-06-07 00:31:12');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_syaratujianta2`
--

CREATE TABLE IF NOT EXISTS `pengajuan_syaratujianta2` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `tempat_sidang` varchar(255) NOT NULL,
  `ksmktm` enum('ada','tidak ada') NOT NULL,
  `biaya_ujian` enum('ada','tidak ada') NOT NULL,
  `dkn` enum('ada','tidak ada') NOT NULL,
  `sertifikat` enum('ada','tidak ada') NOT NULL,
  `suliet` enum('ada','tidak ada') NOT NULL,
  `printscreen_suliet` enum('ada','tidak ada') NOT NULL,
  `rekomendasi` enum('ada','tidak ada') NOT NULL,
  `form_ta1` enum('ada','tidak ada') NOT NULL,
  `eksemplar` enum('ada','tidak ada') NOT NULL,
  `bebas_pustaka` enum('ada','tidak ada') NOT NULL,
  `bebas_bayaran` enum('ada','tidak ada') NOT NULL,
  `sk_ta` enum('ada','tidak ada') NOT NULL,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `create_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `penguji_ujian_ta`
--

CREATE TABLE IF NOT EXISTS `penguji_ujian_ta` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) NOT NULL,
  `penguji_1` varchar(255) NOT NULL,
  `penguji_2` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `penguji_ujian_ta`
--

INSERT INTO `penguji_ujian_ta` (`id`, `nim`, `penguji_1`, `penguji_2`, `updated_at`, `created_at`) VALUES
(2, '09111003024', '197210182008121001', '12345678', '2015-06-07 09:18:50', '2015-06-07 09:18:50');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id` int(10) unsigned NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`id`, `nama`) VALUES
(1, 'Sistem Informasi Reguler'),
(2, 'Sistem Informasi Bilingual');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','dosen','mahasiswa','ketua jurusan','sekretaris jurusan') NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`) VALUES
(11, 'admin_indralaya', '$2y$10$xjFplltitavluTjg4HxJI.0JTGUcR/WH5SKoOkz1yclL4XDoVy8t2', 'admin', 'P3uH5Y0nlueGhXKi4axCApWBralLBPuz3pTJ1fKtgtsSFgcqD8a5NkpOt48q'),
(42, 'kajur_SI', '$2y$10$hk.vPJNn7qxJGy0N22xaQeYwhFukQuomKKo4smuxlgVTxDAeU8qLq', 'ketua jurusan', '2rq3Rlg2hkI4Gq68UUHLHgIpqmESA3emcSPdfHWdmpWCJJGGdLWwB12oh1o4'),
(43, 'sekjur_SI', '$2y$10$O2QX1Xy1w5XQWfhNepcENeMTzYoEeY785KeDpMtWPomu1dccU40iu', 'sekretaris jurusan', 'IxyWKf1JMSHrBxRQAseu7jB5ktYWjls5FTY6GgPyKOJ5iQDAMGOeRxVzq95a'),
(44, 'admin_bukit', '$2y$10$F9./kbVCyIwNqHzKitM.iOGZkc3PIkwAT7.gijcUgUUQFpiyL78Z2', 'admin', 'yDuhyGEqV2b39WHwGIA3mMuluBHJhaWPdE80kPUJB5tMQtpsE1RfoEqrj6as'),
(47, '197210182008121001', '$2y$10$dmdbKjsyXXYczUqwaV8KEeo1BOQgAnniHBpO5WlHBc3opVVPu7TY2', 'dosen', 'l7XbGnVjdfrz2AyeCQLoln7cALPbMkB1aMTM7ADrJXjNtBrVw8XVgQYukz0K'),
(48, '09111003024', '$2y$10$IG03FmjMEZlgDasVZPz2wuO4QdDD7TPSB3cRQIds7R0jrnVfyC.zy', 'mahasiswa', 'B24ynezVsOQs3ibJKM6U5gVDYknsYErUz9TPejT13x8H0iiq2xywkA834Aha'),
(49, '09111003036', '$2y$10$ptE009n/pb9tbSeH4PgqJuslNdhLpddkBrXMQAVoY2uFnoSgc8cZ.', 'mahasiswa', 'egezQUcmfsErGJJaBRAToYWCymlR3gSD2tgfytzm133jO0ayFHAygd7wvctZ'),
(50, '12345678', '$2y$10$3TYuc7yDQIpKHzoZvZ0KvOloe17UCS4kxf/6GlbkWqRo4pu5Tk0Dy', 'dosen', 'YjLOCfw2ktqNseya878ZG9oS0KSlWUHYEMkacJEk9Z4ora9SO5f01IHlyNar'),
(51, '09111003016', '$2y$10$I.E/vJpHmot6ua/3AQWHleeCYrWCipiBDA7.IeJD.5jJEcqSEnbiW', 'mahasiswa', '8kE11tbo4yqMeXEu4dobQgCm2ojpBdFldnkbLFRQChGRpJYgdSLws1ALbZRZ'),
(52, '09111003075', '$2y$10$8ALdQrqNWZRphcKuKMax3O9qdss993IQ8Gf6tPF4llxt3pK094VLW', 'mahasiswa', 'XlKs0Y6XrQNJ6JyGsrBugIOtAxMErfhVBgAWdfeUQRUPF8UwfF8bsxJMkgmI'),
(53, '09111003022', '$2y$10$iIiatlec0Vc47JxqbOI/6.oj3gppMfUwDbeS7q/nW2UDjhXh1G7Yu', 'mahasiswa', 'vbRpbCPZMYDdLjstbxd7Aav2Zb8Fhragrmh6FVrDl024SMvAVO4hE3G0p0yc'),
(54, '0911100302436', '$2y$10$Wc5hpKCMrTYmA/XJkAnZ8u3Z2L0Aqvy2X2FfKwTVyLmcJXMzOZRvO', 'mahasiswa', 'DdGzIXKNOWzHuoPAYea78JEjCbRZQwEjspVyiF3263860kroFsziIAYWD2c8'),
(55, '09111003000', '$2y$10$W707FYWPJnyALObO2lmS6OqaDeLNpHK6qYrXoZ6zE5Hb4OtFGpbF6', 'mahasiswa', 'sryjSjGPYel0v4Ug3dRS50eVTeWYY8yFWiPqrhbIqDOfpyG2A23He3mM5ASF'),
(56, '09111003064', '$2y$10$exWtrfG6rJn8/F6LDdBmQOukiHjaDsgiwRcJu/nShbmie3S2DRT..', 'mahasiswa', 'iCpNt4jAwqBsnXpgJ9NX3r4i3mc8kTnKbQOTOt8N8ZHHBvostZl1XCTQKUeb');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratkp`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratkp` (
`id` int(10) unsigned NOT NULL,
  `id_pengajuan_syaratkp` int(20) NOT NULL,
  `jumlah_sks` enum('ya','tidak') NOT NULL,
  `id_transaksispp` enum('ya','tidak') NOT NULL,
  `id_transaksidpl` enum('ya','tidak') NOT NULL,
  `lama_kp` enum('ya','tidak') NOT NULL,
  `proposal_kp` enum('ya','tidak') NOT NULL,
  `permohonan_kp` enum('ya','tidak') NOT NULL,
  `kesediaan_membimbing` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratta`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratta` (
`id` int(10) unsigned NOT NULL,
  `id_pengajuan_syaratta` int(10) NOT NULL,
  `jumlah_sks` enum('ya','tidak') NOT NULL,
  `id_transaksispp` enum('ya','tidak') NOT NULL,
  `id_transaksidpl` enum('ya','tidak') NOT NULL,
  `ktm` enum('ya','tidak') NOT NULL,
  `proposal_ta` enum('ya','tidak') NOT NULL,
  `tanda_kp` enum('ya','tidak') NOT NULL,
  `kesediaan_membimbing` enum('ya','tidak') NOT NULL,
  `persetujuan_ta` enum('ya','tidak') NOT NULL,
  `sk_pemb` enum('ya','tidak') NOT NULL,
  `permohonan_ambildata` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratujianta1`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratujianta1` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(255) NOT NULL,
  `ksm` enum('ya','tidak') NOT NULL,
  `spp` enum('ya','tidak') NOT NULL,
  `dkn` enum('ya','tidak') NOT NULL,
  `ktm` enum('ya','tidak') NOT NULL,
  `form_konsultasi` enum('ya','tidak') NOT NULL,
  `rekomendasi_sidang` enum('ya','tidak') NOT NULL,
  `tugas_akhir_1` enum('ya','tidak') NOT NULL,
  `sk_pembimbing_ta` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `verifikasi_syaratujianta1`
--

INSERT INTO `verifikasi_syaratujianta1` (`id`, `nim`, `ksm`, `spp`, `dkn`, `ktm`, `form_konsultasi`, `rekomendasi_sidang`, `tugas_akhir_1`, `sk_pembimbing_ta`) VALUES
(1, '09111003024', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratujianta2`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratujianta2` (
  `id` int(11) NOT NULL,
  `nim` varchar(225) NOT NULL,
  `ksmktm` enum('ya','tidak') NOT NULL,
  `biaya_ujian` enum('ya','tidak') NOT NULL,
  `dkn` enum('ya','tidak') NOT NULL,
  `sertifikat` enum('ya','tidak') NOT NULL,
  `suliet` enum('ya','tidak') NOT NULL,
  `printscreen_suliet` enum('ya','tidak') NOT NULL,
  `rekomendasi` enum('ya','tidak') NOT NULL,
  `form_ta1` enum('ya','tidak') NOT NULL,
  `eksemplar` enum('ya','tidak') NOT NULL,
  `bebas_pustaka` enum('ya','tidak') NOT NULL,
  `bebas_bayaran` enum('ya','tidak') NOT NULL,
  `sk_ta` enum('ya','tidak') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bimbingan_kp`
--
ALTER TABLE `bimbingan_kp`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pengajuanpembkp` (`id_pengajuanpembkp`), ADD KEY `nim` (`nim`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `bimbingan_ta`
--
ALTER TABLE `bimbingan_ta`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `nip` (`nip`), ADD KEY `id_pengajuanpembta` (`id_pengajuanpembta`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `nip` (`nip`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kuota_bimbingan`
--
ALTER TABLE `kuota_bimbingan`
 ADD PRIMARY KEY (`id`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nim` (`nim`), ADD KEY `id_prodi` (`id_prodi`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `nilai_kp`
--
ALTER TABLE `nilai_kp`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `nilai_ta1`
--
ALTER TABLE `nilai_ta1`
 ADD PRIMARY KEY (`id`), ADD KEY `nip` (`nip`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `nilai_ta2`
--
ALTER TABLE `nilai_ta2`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `nip` (`nip`);

--
-- Indexes for table `pengajuan_pembkp`
--
ALTER TABLE `pengajuan_pembkp`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nim` (`nim`), ADD KEY `nip_2` (`nip`);

--
-- Indexes for table `pengajuan_pembta`
--
ALTER TABLE `pengajuan_pembta`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD UNIQUE KEY `nim` (`nim`), ADD KEY `pembimbing_1` (`pembimbing_1`), ADD KEY `pembimbing_2` (`pembimbing_2`);

--
-- Indexes for table `pengajuan_syaratkp`
--
ALTER TABLE `pengajuan_syaratkp`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`), ADD KEY `id_pengajuan_pembkp` (`id_pengajuan_pembkp`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `pengajuan_syaratta`
--
ALTER TABLE `pengajuan_syaratta`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `id_pengajuan_pembta` (`id_pengajuan_pembta`);

--
-- Indexes for table `pengajuan_syaratujianta1`
--
ALTER TABLE `pengajuan_syaratujianta1`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `pengajuan_syaratujianta2`
--
ALTER TABLE `pengajuan_syaratujianta2`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `penguji_ujian_ta`
--
ALTER TABLE `penguji_ujian_ta`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `penguji_1` (`penguji_1`), ADD KEY `penguji_2` (`penguji_2`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `verifikasi_syaratkp`
--
ALTER TABLE `verifikasi_syaratkp`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pengajuan_syaratkp` (`id_pengajuan_syaratkp`);

--
-- Indexes for table `verifikasi_syaratta`
--
ALTER TABLE `verifikasi_syaratta`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pengajuan_syaratta` (`id_pengajuan_syaratta`);

--
-- Indexes for table `verifikasi_syaratujianta1`
--
ALTER TABLE `verifikasi_syaratujianta1`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`);

--
-- Indexes for table `verifikasi_syaratujianta2`
--
ALTER TABLE `verifikasi_syaratujianta2`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bimbingan_kp`
--
ALTER TABLE `bimbingan_kp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bimbingan_ta`
--
ALTER TABLE `bimbingan_ta`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `kuota_bimbingan`
--
ALTER TABLE `kuota_bimbingan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `nilai_kp`
--
ALTER TABLE `nilai_kp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nilai_ta1`
--
ALTER TABLE `nilai_ta1`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajuan_pembkp`
--
ALTER TABLE `pengajuan_pembkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengajuan_pembta`
--
ALTER TABLE `pengajuan_pembta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengajuan_syaratkp`
--
ALTER TABLE `pengajuan_syaratkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_syaratta`
--
ALTER TABLE `pengajuan_syaratta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajuan_syaratujianta1`
--
ALTER TABLE `pengajuan_syaratujianta1`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pengajuan_syaratujianta2`
--
ALTER TABLE `pengajuan_syaratujianta2`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penguji_ujian_ta`
--
ALTER TABLE `penguji_ujian_ta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `verifikasi_syaratkp`
--
ALTER TABLE `verifikasi_syaratkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `verifikasi_syaratta`
--
ALTER TABLE `verifikasi_syaratta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `verifikasi_syaratujianta1`
--
ALTER TABLE `verifikasi_syaratujianta1`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bimbingan_kp`
--
ALTER TABLE `bimbingan_kp`
ADD CONSTRAINT `bimbingan_kp_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bimbingan_kp_ibfk_2` FOREIGN KEY (`id_pengajuanpembkp`) REFERENCES `pengajuan_pembkp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bimbingan_kp_ibfk_3` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bimbingan_ta`
--
ALTER TABLE `bimbingan_ta`
ADD CONSTRAINT `bimbingan_ta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bimbingan_ta_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kuota_bimbingan`
--
ALTER TABLE `kuota_bimbingan`
ADD CONSTRAINT `kuota_bimbingan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`id_prodi`) REFERENCES `prodi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_kp`
--
ALTER TABLE `nilai_kp`
ADD CONSTRAINT `nilai_kp_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_ta1`
--
ALTER TABLE `nilai_ta1`
ADD CONSTRAINT `nilai_ta1_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ta1_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai_ta2`
--
ALTER TABLE `nilai_ta2`
ADD CONSTRAINT `nilai_ta2_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ta2_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_pembkp`
--
ALTER TABLE `pengajuan_pembkp`
ADD CONSTRAINT `pengajuan_pembkp_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengajuan_pembkp_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_pembta`
--
ALTER TABLE `pengajuan_pembta`
ADD CONSTRAINT `pengajuan_pembta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengajuan_pembta_ibfk_2` FOREIGN KEY (`pembimbing_1`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengajuan_pembta_ibfk_3` FOREIGN KEY (`pembimbing_2`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_syaratkp`
--
ALTER TABLE `pengajuan_syaratkp`
ADD CONSTRAINT `pengajuan_syaratkp_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengajuan_syaratkp_ibfk_2` FOREIGN KEY (`id_pengajuan_pembkp`) REFERENCES `pengajuan_pembkp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_syaratta`
--
ALTER TABLE `pengajuan_syaratta`
ADD CONSTRAINT `pengajuan_syaratta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_syaratujianta1`
--
ALTER TABLE `pengajuan_syaratujianta1`
ADD CONSTRAINT `pengajuan_syaratujianta1_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengajuan_syaratujianta2`
--
ALTER TABLE `pengajuan_syaratujianta2`
ADD CONSTRAINT `pengajuan_syaratujianta2_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penguji_ujian_ta`
--
ALTER TABLE `penguji_ujian_ta`
ADD CONSTRAINT `penguji_ujian_ta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penguji_ujian_ta_ibfk_2` FOREIGN KEY (`penguji_1`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `penguji_ujian_ta_ibfk_3` FOREIGN KEY (`penguji_2`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi_syaratujianta1`
--
ALTER TABLE `verifikasi_syaratujianta1`
ADD CONSTRAINT `verifikasi_syaratujianta1_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi_syaratujianta2`
--
ALTER TABLE `verifikasi_syaratujianta2`
ADD CONSTRAINT `verifikasi_syaratujianta2_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
