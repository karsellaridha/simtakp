-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2015 at 06:37 PM
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
(1, '09111003024', '197210182008121001', '2015-06-13', 'konsultasi judul laporan kp', 1),
(2, '09111003024', '197210182008121001', '2015-06-17', 'format penulisan laporan diperbaiki, bab 2 diperjelas sejarah perusahaan', 1),
(3, '09111003036', '197210182008121001', '2015-06-17', 'konsultasi judul laporan', 2);

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
  `id_pengajuanpembta` int(10) unsigned NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bimbingan_ta`
--

INSERT INTO `bimbingan_ta` (`id`, `nim`, `nip`, `tanggal`, `hasil_konsultasi`, `id_pengajuanpembta`) VALUES
(4, '09111003024', '197210182008121001', '2015-06-13', 'bab 1 perbaiki latar belakang, tujuan, bab 2 perjelas sumber data perbanyak ambil penjelasan dari buku', 1),
(5, '09111003024', '197811172006042001', '2015-06-15', 'bab 1 latar belakang jangan terlalu panjang, bab 2 acc', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nip`, `nama`, `jabatan`, `jabatan_akademik`, `id_user`) VALUES
(1, '197210182008121001', 'Fathoni, M.MSI', 'Lektor', 'Ketua Jurusan', 46),
(2, '198202122006041003', 'Mgs. Afriyan Firdaus, M.IT', 'Lektor', 'Pembantu Dekan 3', 49),
(3, '197811172006042001', 'Endang Lestari, M.T', 'Asisten Ahli', 'Sekretaris Jurusan', 50),
(4, '197107212005011005', 'Jaidan Jauhari, M.T', 'Lektor', 'Pembantu Dekan 2', 52),
(5, '196709132006042001', 'Dr.Ermatita, M.Kom', 'Lektor', 'Dosen', 53);

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
(1, '197210182008121001', 5, 5, 2015),
(2, '198202122006041003', 5, 7, 2015),
(3, '197811172006042001', 5, 5, 2015);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nim`, `jenis_kelamin`, `id_prodi`, `id_user`) VALUES
(1, 'Ridha Karsella', '09111003024', 'perempuan', 1, 45),
(3, 'Desi Arianti', '09111003036', 'perempuan', 2, 48),
(4, 'Miranty Yudistira', '09111003026', 'perempuan', 1, 51);

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
(2, '09111003024', 'Sistem Informasi Pengajuan Asuransi Asset PT.Pusri', 1, 'Cipta Atsahlantusay', 83, 'nilaikplapangan/FORMULIR PENILAIAN KERJA PRAKTEK.pdf.pdf.pdf', 86, 85, 86, 90, 0),
(3, '09111003036', 'sistem informasi voucher kas kecil', 2, 'Cipta Atsahlantusay', 87, 'nilaikplapangan/Petunjuk Tugas Akhir SI, MI&KA 2009____2227.pdf.pdf', 80, 80, 80, 80, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `nilai_ta1`
--

INSERT INTO `nilai_ta1` (`id`, `nim`, `nip`, `persentasi`, `kesesuaian_format`, `bahasa_indonesia`, `kesesuaian_isi`, `kelengkapan_dokumen`, `analisis`, `metodologi`, `basisdata`, `office`, `os`, `jaringan`, `sikap_etika`, `penilaian_proses`) VALUES
(1, '09111003024', '197210182008121001', 80, 80, 80, 80, 80, 85, 85, 85, 85, 85, 85, 85, 85),
(2, '09111003024', '197811172006042001', 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85, 85),
(3, '09111003024', '198202122006041003', 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajuan_pembkp`
--

INSERT INTO `pengajuan_pembkp` (`id`, `nim`, `nip`, `tempat_kp`, `tahun`, `status_pembimbing`) VALUES
(1, '09111003024', '197210182008121001', 'PT. Pupuk Sriwidjaja', '2015', 'disetujui'),
(2, '09111003036', '197210182008121001', 'PT. Pertamina(Persero)', '2015', 'disetujui');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `pengajuan_pembta`
--

INSERT INTO `pengajuan_pembta` (`id`, `nim`, `pembimbing_1`, `pembimbing_2`, `judul`, `tahun`, `status_pembimbing`) VALUES
(1, '09111003024', '197210182008121001', '197811172006042001', 'Pengembangan SIstem Informasi Pengelolaan KP dan TA Mahasiswa Jurusan SI Fasilkom Unsri', '2015', 'disetujui'),
(5, '09111003036', '198202122006041003', NULL, 'sistem informasi manajemen data KB pada BKKBN ', '2015', 'disetujui');

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
(1, '09111003024', '089627404306', 1, '92 sks', '1234567890', '0987654321', '1 bulan', 'ada', 'ada', 'ada', 'diverifikasi'),
(2, '09111003036', '089627404367', 2, '95 sks', '456789', '234567890', '1 bulan', 'ada', 'ada', 'ada', 'diverifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_syaratta`
--

CREATE TABLE IF NOT EXISTS `pengajuan_syaratta` (
`id` int(10) unsigned NOT NULL,
  `nim` varchar(30) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `id_pengajuan_pembta` int(10) unsigned NOT NULL,
  `jumlah_sks` varchar(10) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajuan_syaratta`
--

INSERT INTO `pengajuan_syaratta` (`id`, `nim`, `judul`, `no_hp`, `id_pengajuan_pembta`, `jumlah_sks`, `id_transaksispp`, `id_transaksidpl`, `ktm`, `proposal_ta`, `tanda_kp`, `kesediaan_membimbing`, `persetujuan_ta`, `sk_pemb`, `permohonan_ambildata`, `status_syaratta`) VALUES
(1, '09111003024', 'Pengembangan Sistem Informasi Pengelolaan KP dan TA Mahasiswa Jurusan SI Fasilkom Unsri', '089627404306', 1, '146 sks', '123456789001', '098765432101', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'diverifikasi'),
(2, '09111003036', 'sistem informasi manajemen data KB pada BKKBN ', '089627404367', 5, '150 sks', '234567890', '7654974', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'diverifikasi');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajuan_syaratujianta1`
--

INSERT INTO `pengajuan_syaratujianta1` (`id`, `nim`, `status`, `jadwal`, `tempat_sidang`, `ksm`, `spp`, `dkn`, `ktm`, `form_konsultasi`, `rekomendasi_sidang`, `tugas_akhir_1`, `sk_pembimbing_ta`, `updated_at`, `created_at`) VALUES
(2, '09111003024', 2, '2015-06-17', 'Palembang', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '2015-06-18 22:48:08', '2015-06-14 19:27:48');

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
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pengajuan_syaratujianta2`
--

INSERT INTO `pengajuan_syaratujianta2` (`id`, `nim`, `status`, `jadwal`, `tempat_sidang`, `ksmktm`, `biaya_ujian`, `dkn`, `sertifikat`, `suliet`, `printscreen_suliet`, `rekomendasi`, `form_ta1`, `eksemplar`, `bebas_pustaka`, `bebas_bayaran`, `sk_ta`, `updated_at`, `created_at`) VALUES
(2, '09111003024', 2, '0000-00-00', '', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', 'ada', '2015-06-19 23:28:04', '2015-06-18 20:05:02');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `penguji_ujian_ta`
--

INSERT INTO `penguji_ujian_ta` (`id`, `nim`, `penguji_1`, `penguji_2`, `updated_at`, `created_at`) VALUES
(1, '09111003024', '198202122006041003', '197210182008121001', '2015-06-16 02:07:26', '2015-06-16 02:07:26');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `remember_token`) VALUES
(11, 'admin_indralaya', '$2y$10$xjFplltitavluTjg4HxJI.0JTGUcR/WH5SKoOkz1yclL4XDoVy8t2', 'admin', 'vItr74XHQnDwCpJPiPH7Yan2E0nO65EsKbGiHEKqxdymx0WNOnTjc964LQem'),
(42, 'kajur_SI', '$2y$10$hk.vPJNn7qxJGy0N22xaQeYwhFukQuomKKo4smuxlgVTxDAeU8qLq', 'ketua jurusan', 'QjXxtp3e7ZiRK7PXWr08QQVcsk6kYT6n5AieAihzXkKMOSS4LJ4hYOW4TIad'),
(43, 'sekjur_SI', '$2y$10$O2QX1Xy1w5XQWfhNepcENeMTzYoEeY785KeDpMtWPomu1dccU40iu', 'sekretaris jurusan', 'IxyWKf1JMSHrBxRQAseu7jB5ktYWjls5FTY6GgPyKOJ5iQDAMGOeRxVzq95a'),
(44, 'admin_bukit', '$2y$10$F9./kbVCyIwNqHzKitM.iOGZkc3PIkwAT7.gijcUgUUQFpiyL78Z2', 'admin', 'yDuhyGEqV2b39WHwGIA3mMuluBHJhaWPdE80kPUJB5tMQtpsE1RfoEqrj6as'),
(45, '09111003024', '$2y$10$PWGsvVN27xZNYdjK9Xm5L.38JgCX4EFB/icf3CCfTzj3CAVUMpZ.K', 'mahasiswa', 'r5Nq3OkXSdrfr0ZqY5S00vwbVaPT3E9QGkp1aOGJGEyOTpTiMtkL32AyhBrl'),
(46, '197210182008121001', '$2y$10$bjj.wjOJgbyop0jlzBcMDeVKyO6vDrLYuOY9Buhw0JCQ6CxmuBKi2', 'dosen', 'BvObraJhSr1TkTrsvX5KWWMoN9UibzkucPMyiCj57BP46Uy0ZjmoCx8He0cX'),
(48, '09111003036', '$2y$10$j00lkrzyEaCDjeYeiUoZO.GEiXsJVfCaA6gHVZ6XRWrLNSn2ULKCO', 'mahasiswa', 'TxjGMhS9N0jvLc89BQmvtVQ3koThBVvVdcvuD8HJlIpRWKKgGTPqs1gLnYDR'),
(49, '198202122006041003', '$2y$10$j6ndI3yRmU32cVaQTyFdWegvrTnhSd8mc2dZcO0KDEY0fDIpqH7OC', 'dosen', '0TxuCtAbjNe4iZLcenAVWKVpxhmFRi4UZhbOv7pxUucG2d7QaL6RDv6JThFb'),
(50, '197811172006042001', '$2y$10$l2fkpuHokuSfZqt9xB0hAuMQJepHju.GD6zu47zmxUa10kOkGwbL6', 'dosen', 'uhDF92FRjmAPbEu9VaNX26wv1ptfz7laCRZ1SLq4GnKg0dl2oj2eGl9jBprD'),
(51, '09111003026', '$2y$10$zVMKG6PvlwM0twvG0M8rbeuUSNKTkObP4.KoaXNsGNkl4AP9qMooe', 'mahasiswa', 'STypvCZbX2rJwHyUIhcAlkS4ytSLhGxP9LudAwfjx5VNIkAnLzvcvMCKQjYz'),
(52, '197107212005011005', '$2y$10$CI8dI.ab0RC7jS4FIttk.ubvkgEQn1ZAaY0ACb9tbwuyDLmcXgAti', 'dosen', NULL),
(53, '196709132006042001', '$2y$10$1f3ZTpXG3X9jkMwC4vTv.eVrRQHg6xidpcW/KPpZAFAF2TFtL3dMe', 'dosen', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratkp`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratkp` (
`id` int(10) unsigned NOT NULL,
  `id_pengajuan_syaratkp` int(20) unsigned NOT NULL,
  `jumlah_sks` enum('ya','tidak') NOT NULL,
  `id_transaksispp` enum('ya','tidak') NOT NULL,
  `id_transaksidpl` enum('ya','tidak') NOT NULL,
  `lama_kp` enum('ya','tidak') NOT NULL,
  `proposal_kp` enum('ya','tidak') NOT NULL,
  `permohonan_kp` enum('ya','tidak') NOT NULL,
  `kesediaan_membimbing` enum('ya','tidak') NOT NULL,
  `no_sk` varchar(225) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `verifikasi_syaratkp`
--

INSERT INTO `verifikasi_syaratkp` (`id`, `id_pengajuan_syaratkp`, `jumlah_sks`, `id_transaksispp`, `id_transaksidpl`, `lama_kp`, `proposal_kp`, `permohonan_kp`, `kesediaan_membimbing`, `no_sk`) VALUES
(1, 1, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '2565'),
(2, 2, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '2566');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratta`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratta` (
`id` int(10) unsigned NOT NULL,
  `id_pengajuan_syaratta` int(10) unsigned NOT NULL,
  `jumlah_sks` enum('ya','tidak') NOT NULL,
  `id_transaksispp` enum('ya','tidak') NOT NULL,
  `id_transaksidpl` enum('ya','tidak') NOT NULL,
  `ktm` enum('ya','tidak') NOT NULL,
  `proposal_ta` enum('ya','tidak') NOT NULL,
  `tanda_kp` enum('ya','tidak') NOT NULL,
  `kesediaan_membimbing` enum('ya','tidak') NOT NULL,
  `persetujuan_ta` enum('ya','tidak') NOT NULL,
  `sk_pemb` enum('ya','tidak') NOT NULL,
  `permohonan_ambildata` enum('ya','tidak') NOT NULL,
  `no_sk` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `verifikasi_syaratta`
--

INSERT INTO `verifikasi_syaratta` (`id`, `id_pengajuan_syaratta`, `jumlah_sks`, `id_transaksispp`, `id_transaksidpl`, `ktm`, `proposal_ta`, `tanda_kp`, `kesediaan_membimbing`, `persetujuan_ta`, `sk_pemb`, `permohonan_ambildata`, `no_sk`) VALUES
(1, 1, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '2345'),
(2, 2, 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', '6789');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratujianta1`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratujianta1` (
`id` int(10) unsigned NOT NULL,
  `id_syarat_pengajuanujianta1` int(11) unsigned NOT NULL,
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

INSERT INTO `verifikasi_syaratujianta1` (`id`, `id_syarat_pengajuanujianta1`, `nim`, `ksm`, `spp`, `dkn`, `ktm`, `form_konsultasi`, `rekomendasi_sidang`, `tugas_akhir_1`, `sk_pembimbing_ta`) VALUES
(1, 2, '09111003024', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_syaratujianta2`
--

CREATE TABLE IF NOT EXISTS `verifikasi_syaratujianta2` (
  `id` int(11) NOT NULL,
  `id_syarat_pengajuanujianta2` int(10) unsigned NOT NULL,
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
-- Dumping data for table `verifikasi_syaratujianta2`
--

INSERT INTO `verifikasi_syaratujianta2` (`id`, `id_syarat_pengajuanujianta2`, `nim`, `ksmktm`, `biaya_ujian`, `dkn`, `sertifikat`, `suliet`, `printscreen_suliet`, `rekomendasi`, `form_ta1`, `eksemplar`, `bebas_pustaka`, `bebas_bayaran`, `sk_ta`) VALUES
(0, 2, '09111003024', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya', 'ya');

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nim` (`nim`), ADD KEY `pembimbing_1` (`pembimbing_1`), ADD KEY `pembimbing_2` (`pembimbing_2`);

--
-- Indexes for table `pengajuan_syaratkp`
--
ALTER TABLE `pengajuan_syaratkp`
 ADD PRIMARY KEY (`id`), ADD KEY `id_pengajuan_pembkp` (`id_pengajuan_pembkp`), ADD KEY `nim` (`nim`);

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
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `id_syarat_pengajuanujianta1` (`id_syarat_pengajuanujianta1`);

--
-- Indexes for table `verifikasi_syaratujianta2`
--
ALTER TABLE `verifikasi_syaratujianta2`
 ADD PRIMARY KEY (`id`), ADD KEY `nim` (`nim`), ADD KEY `id_syarat_pengajuanujianta2` (`id_syarat_pengajuanujianta2`);

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
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kuota_bimbingan`
--
ALTER TABLE `kuota_bimbingan`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nilai_kp`
--
ALTER TABLE `nilai_kp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `nilai_ta1`
--
ALTER TABLE `nilai_ta1`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pengajuan_pembkp`
--
ALTER TABLE `pengajuan_pembkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_pembta`
--
ALTER TABLE `pengajuan_pembta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengajuan_syaratkp`
--
ALTER TABLE `pengajuan_syaratkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_syaratta`
--
ALTER TABLE `pengajuan_syaratta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_syaratujianta1`
--
ALTER TABLE `pengajuan_syaratujianta1`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pengajuan_syaratujianta2`
--
ALTER TABLE `pengajuan_syaratujianta2`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `penguji_ujian_ta`
--
ALTER TABLE `penguji_ujian_ta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `verifikasi_syaratkp`
--
ALTER TABLE `verifikasi_syaratkp`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `verifikasi_syaratta`
--
ALTER TABLE `verifikasi_syaratta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
ADD CONSTRAINT `bimbingan_ta_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `bimbingan_ta_ibfk_3` FOREIGN KEY (`id_pengajuanpembta`) REFERENCES `pengajuan_pembta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
ADD CONSTRAINT `pengajuan_syaratta_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `pengajuan_syaratta_ibfk_2` FOREIGN KEY (`id_pengajuan_pembta`) REFERENCES `pengajuan_pembta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `verifikasi_syaratkp`
--
ALTER TABLE `verifikasi_syaratkp`
ADD CONSTRAINT `verifikasi_syaratkp_ibfk_1` FOREIGN KEY (`id_pengajuan_syaratkp`) REFERENCES `pengajuan_syaratkp` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi_syaratta`
--
ALTER TABLE `verifikasi_syaratta`
ADD CONSTRAINT `verifikasi_syaratta_ibfk_1` FOREIGN KEY (`id_pengajuan_syaratta`) REFERENCES `pengajuan_syaratta` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi_syaratujianta1`
--
ALTER TABLE `verifikasi_syaratujianta1`
ADD CONSTRAINT `verifikasi_syaratujianta1_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `verifikasi_syaratujianta1_ibfk_2` FOREIGN KEY (`id_syarat_pengajuanujianta1`) REFERENCES `pengajuan_syaratujianta1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `verifikasi_syaratujianta2`
--
ALTER TABLE `verifikasi_syaratujianta2`
ADD CONSTRAINT `verifikasi_syaratujianta2_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `verifikasi_syaratujianta2_ibfk_2` FOREIGN KEY (`id_syarat_pengajuanujianta2`) REFERENCES `pengajuan_syaratujianta2` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
