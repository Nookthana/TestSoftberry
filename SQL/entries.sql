-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 04:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entries`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name_form` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_form` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `id_under` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf_view` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_count` int(10) NOT NULL,
  `create` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name_form`, `type_form`, `id_under`, `status`, `pdf`, `pdf_view`, `page_count`, `create`) VALUES
(72, 'form1', 'A', 'P18420160898', 1, '../pathPDF/PDF/61192462520220509_184201.pdf', '../pathPDF/PDF_view/61192462520220509_184201_view.pdf', 29, '9 พ.ค.  65 18:42 น.'),
(73, 'from2', 'B', 'P18425439312', 0, '../pathPDF/PDF/210352359320220509_184254.pdf', '../pathPDF/PDF_view/210352359320220509_184254_view.pdf', 1, '9 พ.ค.  65 18:42 น.'),
(74, 'from3', 'C', 'P18430336348', 1, '../pathPDF/PDF/173997274520220509_184303.pdf', '../pathPDF/PDF_view/173997274520220509_184303_view.pdf', 1, '9 พ.ค.  65 18:43 น.'),
(75, 'form4', 'D', 'P18431251368', 0, '../pathPDF/PDF/26898150020220509_184312.pdf', '../pathPDF/PDF_view/26898150020220509_184312_view.pdf', 1, '9 พ.ค.  65 18:43 น.'),
(76, 'from5', 'S', 'P18433731349', 1, '../pathPDF/PDF/34278488020220509_184337.pdf', '../pathPDF/PDF_view/34278488020220509_184337_view.pdf', 24, '9 พ.ค.  65 18:43 น.'),
(77, 'form10', 'A', 'P19515723912', 0, '../pathPDF/PDF/164840552920220509_195157.pdf', '../pathPDF/PDF_view/164840552920220509_195157_view.pdf', 1, '9 พ.ค.  65 19:51 น.');

-- --------------------------------------------------------

--
-- Table structure for table `under_form`
--

CREATE TABLE `under_form` (
  `id` int(11) NOT NULL,
  `name_form` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type_form` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_under` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pdf_view` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_count` int(10) NOT NULL,
  `create` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `under_form`
--

INSERT INTO `under_form` (`id`, `name_form`, `type_form`, `id_under`, `pdf`, `pdf_view`, `page_count`, `create`) VALUES
(11, 'form6', 'A', 'P18420160898', '../pathPDF/PDF/2406892920220509_184729.pdf', '../pathPDF/PDF_view/2406892920220509_184729_view.pdf', 6, '9 พ.ค.  65 18:47 น.'),
(12, 'form7', 'B', 'P18420160898', '../pathPDF/PDF/124838093620220509_184829.pdf', '../pathPDF/PDF_view/124838093620220509_184829_view.pdf', 29, '9 พ.ค.  65 18:48 น.'),
(13, 'from8', 'A', 'P18430336348', '../pathPDF/PDF/212335811420220509_184844.pdf', '../pathPDF/PDF_view/212335811420220509_184844_view.pdf', 1, '9 พ.ค.  65 18:48 น.'),
(14, 'form9', 'B', 'P18433731349', '../pathPDF/PDF/180318650920220509_184914.pdf', '../pathPDF/PDF_view/180318650920220509_184914_view.pdf', 1, '9 พ.ค.  65 18:49 น.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_under` (`id_under`);

--
-- Indexes for table `under_form`
--
ALTER TABLE `under_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_under` (`id_under`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `under_form`
--
ALTER TABLE `under_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `under_form`
--
ALTER TABLE `under_form`
  ADD CONSTRAINT `under_form_ibfk_1` FOREIGN KEY (`id_under`) REFERENCES `form` (`id_under`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
