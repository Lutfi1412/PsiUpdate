-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_psi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'darto', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_praktikum_psi`
--

CREATE TABLE `hasil_praktikum_psi` (
  `id` int(11) NOT NULL,
  `npm` varchar(8) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `suku` varchar(20) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_anak` int(11) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `usia` int(11) NOT NULL,
  `pendidikan_terakhir` varchar(10) NOT NULL,
  `skor` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `tingkat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hasil_praktikum_psi`
--

INSERT INTO `hasil_praktikum_psi` (`id`, `npm`, `nama`, `kelas`, `suku`, `anak_ke`, `jumlah_anak`, `jenis_kelamin`, `usia`, `pendidikan_terakhir`, `skor`, `kategori`, `tingkat`) VALUES
(15, '2133', 'ewt', 'g3', 'fsw', 3, 5, 'L', 43, 'sma', 44, 'sociotropy', 'sangat rendah'),
(16, '12345678', 'dew', '1ka09', 'jawa', 1, 2, 'L', 19, 's1', 33, 'sociotropy', 'sangat rendah'),
(18, '11519946', 'dwita', '3pa08', 'koto', 2, 2, 'P', 23, 'sma', 55, 'autonomy', 'sangat rendah');

-- --------------------------------------------------------

--
-- Table structure for table `soal_psi`
--

CREATE TABLE `soal_psi` (
  `id` int(11) NOT NULL,
  `soal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `soal_psi`
--

INSERT INTO `soal_psi` (`id`, `soal`) VALUES
(1, 'Saya mudah tersinggung ketika menerima kritikan'),
(2, 'Kehidupan yang saya jalani tidak sesuai dengan standar dan idealisme saya'),
(3, 'Saya merasa kesulitan ketika harus terpisah dari orang yang saya sayang'),
(4, 'Saya tidak suka ketika orang lain mencoba mengarahkan perilaku atau kegiatan saya'),
(5, 'Saya selalu mementingkan kebutuhan orang lain dibandingkan kebutuhan saya'),
(6, 'Saya tidak mengharapkan bantuan orang lain'),
(7, 'Saya cemas akan kemungkinan seseorang mengkritik saya'),
(8, 'Standar dan tujuan yang saya tetapkan biasanya selalu lebih tinggi dibandingkan orang lain'),
(9, 'Sulit bagi saya untuk memutuskan suatu hubungan meskipun hal tersebut membuat saya tidak bahagia'),
(10, 'Saya jarang percaya pada nasehat orang lain ketika memutuskan suatu keputusan yang besar'),
(11, 'Saya merasa mudah tersinggung dengan apa yang orang orang pikirkan tentang diri saya'),
(12, 'Ketika saya merasa sedih, saya tidak suka diberikan perhatian'),
(13, 'Saya sangat sensitif terhadap tanda-tanda penolakan yang diberikan oleh orang lain'),
(14, 'Sulit bagi saya untuk menerima kelemahan dan keterbatasan yang saya miliki'),
(15, 'Sulit bagi saya untuk mengerjakan sesuatu tanpa bantuan orang lain'),
(16, 'Saya merasa sangat kecewa ketika orang disekitar saya mengganggu rencana yang telah saya buat'),
(17, 'Saya merasa sangat khawatir untuk melukai atau menyinggung orang lain'),
(18, 'Saya tidak suka ketika ada orang yang mencampuri urusan pribadi saya'),
(19, 'Saya mudah dipengaruhi orang lain'),
(20, 'Saya suka mengkritik diri sendiri'),
(21, 'Saya membutuhkan bantuan orang lain untuk menyelesaikan masalah-masalah saya'),
(22, 'Saya berusaha untuk mengendalikan perasaan saya sepanjang waktu'),
(23, 'Saya selalu berusaha untuk menyenangkan orang lain'),
(24, 'Sulit bagi saya jika ada orang lain yang bergantung pada saya'),
(25, 'Penting bagi saya untuk disukai dan dikagumi oleh orang lain'),
(26, 'Saya percaya bahwa melakukan sesuatu harus sepenuh hati atau tidak sama sekali'),
(27, 'Saya tidak pernah benar-benar merasa nyaman dengan suatu hubungan karena saya menyadari ada kemungkinan saya akan kehilangan orang tersebut'),
(28, 'Saya mudah terganggu dengan orang yang banyak menuntut saya'),
(29, 'Terkadang saya merasa bertanggung jawab untuk menyelesaikan masalah orang lain'),
(30, 'Saya tidak tergantung kepada orang lain'),
(31, 'Saya sangat memperhatikan bagaimana orang lain bereaksi atas diri saya'),
(32, 'Saya dapat lebih unggul dari orang lain jika saya berusaha keras'),
(33, 'Saya merasa kesulitan jika saya harus sendiri dalam sehari'),
(34, 'Saya sering berusaha mengubah perilaku orang lain'),
(35, 'Saya merasa harus bersikap baik kepada orang lain'),
(36, 'Saya berusaha menjaga jarak dengan orang lain'),
(37, 'Saya merasa tidak nyaman ketika saya tidak mengetahui apakah seseorang menyukai saya atau tidak'),
(38, 'Saya terbiasa menilai performa saya sebagai sebuah kesuksesan besar atau kegagalan besar'),
(39, 'Sulit bagi saya untuk mengatasi perasaan kehilangan ketika suatu hubungan berakhir'),
(40, 'Sulit bagi saya untuk menerima instruksi dari orang yang memiliki kekuasan melebihi diri saya'),
(41, 'Saya individu yang gampang merasa bersalah kepada orang lain'),
(42, 'Sulit bagi saya untuk terbuka dan berbicara mengenai perasaan saya dan hal pribadi lain'),
(43, 'Saya memilah kalimat yang akan saya sampaikan karena orang lain mungkin tidak akan setuju dengan kalimat tersebut'),
(44, 'Saya menilai diri saya sebagai individu yang mementingkan kualitas dari pekerjaan yang saya lakukan'),
(45, 'Saya senang memiliki seseorang yang bisa dihubungi ketika hal buruk terjadi pada saya'),
(46, 'Terkadang saya merasa bahwa saran dari orang lain akan mengganggu saya dalam mengambil keputusan'),
(47, 'Sulit bagi saya untuk berkata “tidak” terhadap permintaan orang lain'),
(48, 'Sulit bagi saya untuk mengungkapkan rasa kagum atau perasaan saya'),
(49, 'Sulit bagi saya untuk menjadi individu yang bisa melawan arus'),
(50, 'Saya merasa terganggu ketika merasa bahwa saya hanya orang yang standar dan biasa saja'),
(51, 'Saya merasa kesal ketika suatu hal terjadi kepada saya dan tidak ada orang lain yang bisa diajak berbicara'),
(52, 'Saya akan lebih marah dibandingkan orang lain ketika kebebasan saya terganggu'),
(53, 'Saya sering membiarkan orang lain memanfaatkan saya'),
(54, 'Sulit bagi saya untuk membuat komitmen jangka panjang dalam suatu hubungan'),
(55, 'Saya merasa nyaman ketika perilaku saya sesuai dengan apa yang diharapkan orang lain terhadap saya'),
(56, 'Saya merasa sedih kepada diri sendiri ketika saya tidak dapat menyelesaikan banyak hal'),
(57, 'Saya sangat kesal ketika teman membatalkan janji atau lupa untuk menguhubungi saya sesuai rencana'),
(58, 'Saya benci ketika orang meragukan tanggung jawab terhadap rencana yang saya buat'),
(59, 'Sulit bagi saya untuk membiarkan orang lain tahu bahwa saya marah kepada mereka'),
(60, 'Dalam suatu hubungan, orang-orang sering terlalu menuntut satu sama lain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hasil_praktikum_psi`
--
ALTER TABLE `hasil_praktikum_psi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `npm` (`npm`);

--
-- Indexes for table `soal_psi`
--
ALTER TABLE `soal_psi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil_praktikum_psi`
--
ALTER TABLE `hasil_praktikum_psi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `soal_psi`
--
ALTER TABLE `soal_psi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
