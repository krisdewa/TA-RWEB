-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 14 Jul 2022 pada 11.52
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta-rweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` text NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `judul`, `abstrak`, `penulis`, `penerbit`, `tahun`) VALUES
(2, 'Pengaruh perkembangan AR terhadap kualitas Technology di negara indonesia', 'Ducimus eos explicabo qui aut. Cupiditate tempore possimus quia culpa explicabo molestias eaque non. Magni voluptatum repudiandae enim nam enim sed ab fugit. Ex nostrum aperiam accusamus unde dolorem maiores quos quam id. Reiciendis officiis sit tenetur qui modi. Explicabo excepturi et omnis quaerat non autem fuga accusamus.\r\n Eligendi possimus excepturi. Quod est harum quia doloremque maxime nulla est at. Facilis voluptatibus quia quia similique necessitatibus.\r\n Quia omnis et molestias qui esse nihil. Facere aliquid quo. Fuga laudantium eligendi eius blanditiis dolorum. Ullam fugiat eius consequatur perferendis qui fugiat eius architecto.', 'Krisna', 'UAD', 2022),
(3, 'Pengaruh Struktur Modal, Likuiditas Dan Ukuran Perusahaan Terhadap Profitabilitas', 'Ipsum quasi qui vitae cum quisquam. Et laborum nihil corporis in totam molestiae autem ducimus. Similique et voluptatum praesentium. Vel provident alias voluptatem officiis. Et quasi est et voluptatem ut autem dolor. Aut ratione deserunt rerum ut eligendi quia dignissimos ut qui.\r\n Qui molestias repellat aut delectus et. Quam ratione ratione qui et sapiente incidunt. Cumque est a ea est tempora expedita et cum nisi. Deleniti temporibus velit odio accusamus officiis eveniet.\r\n Voluptatem dolore cumque. Et dolor animi aperiam nobis voluptatem. Corrupti qui laborum magni.', 'Vira', 'UAD', 2022),
(4, 'Pengaruh Persepsi Harga Terhadap Kepuasan Untuk Meningkatkan Loyalitas Pelanggan', 'Iusto autem eos. Aspernatur adipisci sed et vero alias est quo. Voluptate voluptatem quasi officia. Itaque placeat repudiandae. Quidem sed sed quis aliquid quia est vitae vel aliquid.\r\n Eveniet ducimus saepe. Occaecati assumenda ad itaque. Doloribus voluptatem est est consequatur atque. Velit dignissimos aliquam placeat illum tempore magni sapiente. Voluptates delectus non quia temporibus sit quibusdam fugit unde. Nemo quam quia consequuntur quod illo totam.\r\n Et quia consequatur non qui explicabo autem saepe nihil dolore. Provident earum recusandae. Eos cupiditate ut nisi voluptas enim maxime. Animi ut optio et voluptate perspiciatis. Non est error ea. Tempora delectus provident perspiciatis.', 'Krisna', 'UAD', 2020),
(7, 'Peran Brand Image Memediasi Pengaruh Word Of Mouth (Wom) Terhadap Niat Beli Konsumen', 'Officia delectus aliquam enim vero. Id incidunt incidunt. Et nostrum rerum quis. Et fugit beatae dicta ea magni suscipit in corporis. Cumque tempore ut eaque iure omnis.\r\n Sapiente aut quos nisi ab sed consequatur sit autem. Fugiat rerum labore quibusdam blanditiis. Voluptate ut possimus hic aperiam qui. Laborum illum qui. Nostrum ullam dolorem odit inventore sint dolore quaerat numquam.\r\n Ratione blanditiis rerum nobis commodi non delectus. Sed quasi voluptatibus distinctio laudantium aut nemo. Omnis non dolorum adipisci quibusdam dolorum optio animi. Consequatur est at assumenda incidunt vel similique quia quidem. Consequatur suscipit aliquid nesciunt iusto voluptatem.', 'Gentha', 'ITB', 2021),
(9, 'Pengaruh Self Efficacy Dan Locus Of Control Terhadap Kinerja Karyawan (Studi Pada Ramayana Mal Bali)', 'Id nam aut dolores. Tempore ab ratione necessitatibus ut voluptatum dolorem. Sit minus amet qui et dolorem est sint. Non sit dolorem sapiente veniam voluptatibus nihil rerum a enim. Dicta ipsam voluptas eveniet asperiores natus.\r\n Dolor consequatur consequatur aut. Id autem ipsum laborum voluptatem. Numquam quas et voluptatum ipsa. Est molestiae enim eveniet ut aliquid aut.\r\n Aliquid esse ut et dolorem repellat eos. Suscipit est nam vitae. Dolores rerum saepe. Voluptates odio cupiditate aut ea atque eum expedita nam.', 'jarwo', 'UAD', 2022),
(10, 'Analisis SWOT Dalam Menentukan Strategi Pemasaran', 'Quis voluptatibus molestiae commodi iste itaque. Reiciendis vel quia aut maiores. Qui rerum quo quis quia in. Doloribus quaerat consectetur error id vitae autem dolorem et qui. Qui exercitationem qui nam sapiente suscipit ratione eum minima sunt. Sint autem iste.\r\n Et enim architecto nesciunt. Numquam tempore voluptatem ut deleniti dolores fuga voluptate quas. Beatae neque dolores. Accusantium cumque qui magni. Voluptatibus doloribus at quam deserunt. Omnis quasi aut ex sed molestiae nemo dignissimos est rerum.\r\n Molestias esse delectus rem delectus non cupiditate. Nesciunt atque eveniet alias magni velit fugit voluptatem dolorem. Voluptas ipsum autem ut placeat asperiores deleniti rerum at iste. Enim aut sit et distinctio ut dicta est.', 'Lisa Hafish', 'ITB', 2021);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
