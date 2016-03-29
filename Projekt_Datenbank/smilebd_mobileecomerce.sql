-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 01:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smilebd_mobileecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_add_about_us_page`
--

CREATE TABLE `tbl_smile_add_about_us_page` (
  `smile_page_info_id` int(5) NOT NULL,
  `smile_header_category_id` int(4) NOT NULL,
  `smile_page_big_heading` varchar(100) NOT NULL,
  `smile_page_small_heading` varchar(90) NOT NULL,
  `smile_page_small_heading_first_title` varchar(80) NOT NULL,
  `smile_page_small_heading_second_title` varchar(70) NOT NULL,
  `smile_page_small_heading_third_title` varchar(60) NOT NULL,
  `smile_page_small_heading_fourth_title` varchar(65) NOT NULL,
  `smile_about_image` varchar(99) NOT NULL,
  `smile_heading_image` varchar(98) NOT NULL,
  `smile_page_big_heading_first_image_first_description` text NOT NULL,
  `smile_page_big_heading_second_image_second_description` text NOT NULL,
  `smile_page_small_heading_first_title_first_description` text NOT NULL,
  `smile_page_small_heading_second_title_second_description` text NOT NULL,
  `smile_page_small_heading_third_title_third_description` text NOT NULL,
  `smile_page_small_heading_fourth_title_fourth_description` text NOT NULL,
  `smile_page_publication_status` tinyint(1) NOT NULL COMMENT 'For Stauts=1, Published, For Status=0, Unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_add_about_us_page`
--

INSERT INTO `tbl_smile_add_about_us_page` (`smile_page_info_id`, `smile_header_category_id`, `smile_page_big_heading`, `smile_page_small_heading`, `smile_page_small_heading_first_title`, `smile_page_small_heading_second_title`, `smile_page_small_heading_third_title`, `smile_page_small_heading_fourth_title`, `smile_about_image`, `smile_heading_image`, `smile_page_big_heading_first_image_first_description`, `smile_page_big_heading_second_image_second_description`, `smile_page_small_heading_first_title_first_description`, `smile_page_small_heading_second_title_second_description`, `smile_page_small_heading_third_title_third_description`, `smile_page_small_heading_fourth_title_fourth_description`, `smile_page_publication_status`) VALUES
(1, 3, 'Sample 1', 'Sample 2', 'Sample 3', 'Sample 4', 'Sample 5', 'Sample 6', 'image/about_us_image/1.jpg', 'image/about_us_image/2.jpg', 'Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1Sample 1', 'Sample 2 Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2Sample 2', 'Sample 3 Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3Sample 3', 'Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4Sample 4', 'Sample 5 Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5Sample 5', 'Sample 6 Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6Sample 6', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_add_banner_slider`
--

CREATE TABLE `tbl_smile_add_banner_slider` (
  `smile_banner_name` varchar(16) NOT NULL,
  `smile_banner_id` int(4) NOT NULL,
  `smile_banner_image` varchar(100) NOT NULL,
  `smile_banner_publication_status` tinyint(1) NOT NULL COMMENT 'Fro Publication Status=1,Publishe and For publication Status=0, Unpublished',
  `smile_banner_publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_add_banner_slider`
--

INSERT INTO `tbl_smile_add_banner_slider` (`smile_banner_name`, `smile_banner_id`, `smile_banner_image`, `smile_banner_publication_status`, `smile_banner_publication_date`) VALUES
('Slider1', 1, 'image/banner_slider/1.jpg', 1, '2014-10-18 11:54:43'),
('Slider2', 2, 'image/banner_slider/3.jpg', 1, '2014-10-18 11:55:10'),
('Slider3', 3, 'image/banner_slider/4.jpg', 1, '2014-10-18 11:55:26'),
('Slider4', 4, 'image/banner_slider/5.jpg', 1, '2014-10-18 11:55:40'),
('Slider5', 5, 'image/banner_slider/6.jpg', 1, '2014-10-18 11:55:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_add_logo`
--

CREATE TABLE `tbl_smile_add_logo` (
  `smile_logo_id` int(3) NOT NULL,
  `smile_logo_name` varchar(16) NOT NULL,
  `smile_logo_image` varchar(100) NOT NULL,
  `smile_logo_publication_status` tinyint(1) NOT NULL COMMENT 'For Publication_Status=1 menas Published; For Publication_Status=0 means Unpublished.',
  `smile_logo_publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_add_logo`
--

INSERT INTO `tbl_smile_add_logo` (`smile_logo_id`, `smile_logo_name`, `smile_logo_image`, `smile_logo_publication_status`, `smile_logo_publication_date`) VALUES
(3, 'Smile Logo', 'image/logo/logo1.png', 1, '2014-11-03 12:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_add_product`
--

CREATE TABLE `tbl_smile_add_product` (
  `smile_product_id` int(12) NOT NULL,
  `smile_menubar_category_id` int(6) NOT NULL,
  `smile_sub_menubar_category_id` int(5) NOT NULL,
  `smile_product_name` varchar(28) NOT NULL,
  `smile_product_description` text NOT NULL,
  `smile_product_image` varchar(100) NOT NULL,
  `smile_product_price` float NOT NULL,
  `smile_product_qunatity` int(13) NOT NULL,
  `smile_product_model_name` varchar(8) NOT NULL,
  `smile_product_publication_status` tinyint(1) NOT NULL COMMENT 'For Stauts=1 Published, For Stauts=0 Unpublished',
  `smile_featured_product` tinyint(2) NOT NULL COMMENT 'For Status=1, Featured, For Status=0 Unfeautred',
  `smile_product_publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `smile_product_publisher_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_add_product`
--

INSERT INTO `tbl_smile_add_product` (`smile_product_id`, `smile_menubar_category_id`, `smile_sub_menubar_category_id`, `smile_product_name`, `smile_product_description`, `smile_product_image`, `smile_product_price`, `smile_product_qunatity`, `smile_product_model_name`, `smile_product_publication_status`, `smile_featured_product`, `smile_product_publication_date`, `smile_product_publisher_name`) VALUES
(1, 1, 1, 'Smile-B9', 'Dispaly; 1.8” TFT <br/>\r\nCamera<br/>\r\nMP3, FM, Video Player<br/>\r\nTorchlight<br/>', 'image/product_image/Smile-B9.jpg', 1080, 0, 'B9', 1, 0, '2014-10-18 13:54:31', 'Riyad'),
(2, 1, 1, 'Smile-BL45', 'Dispaly; 1.77" TFT QQVGA<br/>\r\nCamera: 0.08 MP<br/>\r\nMP3, MP4,FM,<br/>\r\nTorchlight, GPRS<br/>', 'image/product_image/Smile-BL45.jpg', 1290, 92, 'BL45', 1, 0, '2014-10-18 13:56:12', 'Riyad'),
(3, 1, 1, 'Smile-B11i', '1.77” TFT QQVGA<br/>\r\nMP3, MP4, FM Audio, Video & Call recorder<br/>\r\nTorchlight<br/>', 'image/product_image/Smile-B11i.jpg', 1090, 90, 'B11i', 1, 0, '2014-10-18 13:58:30', 'Riyad'),
(4, 1, 1, 'Smile-B12', '1.77” TFT QQVGA <br/>\r\nMP3, MP4, FM Audio, Video & Call recorder <br/>\r\nTorchlight<br/>', 'image/product_image/Smile-B12.jpg', 999, 156, 'B12', 1, 0, '2014-10-18 13:59:35', 'Riyad'),
(5, 1, 1, 'Smile-B31i', 'Display: 2.0” QCIF<br/>\r\nCamera: 0.3MP<br/>\r\nAudio,Video & Call recorder<br/>\r\nTorchlight, Bluetooth<br/>', 'image/product_image/Smile-B31i.jpg', 1340, 115, 'B31i', 1, 0, '2014-10-18 14:00:51', 'Riyad'),
(6, 1, 6, 'Smile-FT37i', '3.5"  TFT HVGA<br/>\r\nCamera:0.3 MP<br/>\r\nMP3, MP4, FM<br/>\r\nAudio, Video & Call recorder<br/>\r\nTorchlight<br/>', 'image/product_image/Smile-FT37i.jpg', 2690, 24, 'FT37i', 1, 0, '2014-10-18 14:02:27', 'Riyad'),
(7, 1, 5, 'Smile-FT42', '4’’ TFT WVGA Display<br/>\r\nCamera:2 MP<br/>\r\nEDGE, Bluetooth<br/>\r\nAudio, Video & Call recorder<br/>', 'image/product_image/Smile-FT42.jpg', 2990, 17, 'FT42', 1, 0, '2014-10-18 14:07:19', 'Riyad'),
(8, 1, 3, 'Smile GoFox F15', 'Firefox OS 1.4<br/>\r\n3.5” TFT HVGA  Display<br/>\r\nCamera: 3.2 MP + 0.3 MP<br/>\r\n1GHz  Single Core<br/>\r\nRAM 512 MB & ROM 512 MB<br/>\r\n3G,EDGE,Wi-Fi<br/>\r\nG-sensor, Accelerometer sensor<br/>\r\nThis handset is available only in Grameenphone channel<br/>', 'image/product_image/Smile-GoFox-F15.png', 4650, 50, 'F15', 1, 0, '2014-10-18 14:12:08', 'Riyad'),
(9, 1, 3, 'Smile-H100', '    Operating System: Android 4.4.2 KitKat\r\n    5" IPS HD Display<br/>\r\n    HD(720*1280)<br/>\r\n    Camera:8 MP+ 2 MP<br/>\r\n    1.3 GHz Quad core<br/>\r\n    RAM  1 GB & ROM 8 GB<br/>\r\n    3G,Wi-Fi, EDGE<br/>\r\n    Facebook, Office Suite, Play Store\r\n    G-sensor, Light & Proximity sensor,  Accelerometer sensor(3D)<br/>\r\n', 'image/product_image/Smile-H100.png', 10590, 35, 'H100', 1, 0, '2014-10-18 14:17:51', 'Riyad'),
(10, 1, 3, 'Smile-H50', '    Operating System: Android 4.4.2 KitKat<br/>\r\n    5" IPS HD Display (with Glass+Film+Film technology)<br/>\r\n    Camera:8 MP(AF) + 2 MP(AF)<br/>\r\n    1.3 GHz  Quad Core<br/>\r\n    RAM  1 GB & ROM 8 GB<br/>\r\n    3G,Wi-Fi, EDGE<br/>\r\n    Facebook, Skype, YouTube, WhatsApp, Wechat<br/>\r\n    G-sensor, Light Sensor, Proximity Sensor, Magnetic Sensor<br/>\r\n    Free flip cover<br/>\r\n', 'image/product_image/Smile-H50.jpg', 10500, 25, 'H50', 1, 0, '2014-10-18 14:56:35', 'Riyad'),
(11, 1, 3, ' Smile-W128', '    Operating System: Android 4.2.2 Jelly Bean<br/>\r\n    4.5" IPS qHD Capacitive Full Touch\r\n    qHD Display (540*960)<br/>\r\n    Camera:8 MP+2 MP<br/>\r\n    1.3 GHz Processor (Quad Core)<br/>\r\n    RAM  1 GB & ROM 4 GB<br/>\r\n    3G Network,EDGE,WiFi,GPS<br/>\r\n    Facebook, Android Market(Play Store), Office suite<br/>\r\n    GPS, G sensor, Light & Proximity Sensor, Micro SIM support ,WiFi-direct<br/>\r\n', 'image/product_image/Smile-W128.jpg', 11490, 15, 'W128', 1, 0, '2014-10-18 14:57:26', 'Riyad'),
(12, 1, 3, 'Smile-W130', '    Operating System: Android 4.4.2 Kitkat<br/>\r\n    5" IPS HD Display<br/>\r\n    HD(720*1280)<br/>\r\n    Camera:8 MP+ 2 MP<br/>\r\n    1.3 GHz Quad Core<br/>\r\n    RAM  1 GB & ROM 4 GB<br/>\r\n    3G,Wi-Fi, EDGE, Bluetooth<br/>\r\n    Facebook, Office Suite, Play Store<br/>\r\n    G sensor, Proximity sensor, Light sensor,  Accelerometer sensor, GPS, AGPS<br/>\r\n', 'image/product_image/Smile-W130.jpg', 10990, 0, 'W130', 1, 0, '2014-10-18 14:59:44', 'Riyad'),
(13, 1, 2, 'Smile-M43 ', '    Operating System: Android 4.2.2 Jelly bean<br/>\r\n    3.5" TFT Capacitive Full Touch\r\n    HVGA Display<br/>\r\n    Camera: 1.3 MP + 0.3 MP<br/>\r\n    1 GHz Processor (Dual Core)<br/>\r\n    RAM 512 MB & ROM 4 GB<br/>\r\n    3G,GPRS,EDGE, Wi-Fi, GPS,G Sensor<br/>\r\n    Facebook, YouTube, Android Market(Play Store), Gmail, Skype, Office suite, <br/>\r\n    Dictionary<br/>\r\n', 'image/product_image/Smile_-_M43.jpg', 4500, 66, 'M43 ', 1, 1, '2014-10-18 15:04:55', 'Riyad'),
(14, 1, 2, 'Smile-M42', '   Operating System: Android 4.4.2 KitKat<br/>\r\n    5” IPS  HD Display<br/>\r\n    HD(720*1280)<br/>\r\n    Camera:13MP+ 5MP<br/>\r\n    1.3 GHz Quad Core<br/>\r\n    RAM  1 GB & ROM 4 GB<br/>\r\n    3G,Wi-Fi, EDGE, Bluetooth<br/>\r\n    Facebook, Office Suite, Play Store<br/>\r\n    G sensor, Proximity sensor, Light sensor,  Accelerometer sensor, GPS, AGPS<br/>\r\n   Micro SIM support<br/>\r\n', 'image/product_image/Smile_-_M42.jpg', 14690, 13, 'M42', 1, 1, '2014-10-18 15:17:28', 'Riyad'),
(15, 1, 2, 'Smile-M41', '    Android 4.4.2 KitKat<br/>\r\n    4”  TFT WVGA Display<br/>\r\n    Camera: 1.3 MP + 0.3MP<br/>\r\n    1.3 GHz Dual Core<br/>\r\n    RAM 256 MB & ROM 512 MB<br/>\r\n    3G,EDGE,Wi-Fi<br/>\r\n    Play Store<br/>\r\n    G-sensor,  Accelerometer  Sensor (3D)<br/>\r\n', 'image/product_image/Smile_-_M41.jpg', 4190, 88, 'M41', 1, 1, '2014-10-18 15:23:16', 'Riyad'),
(16, 1, 2, 'Smile-L23', '    Operating System: Android 4.4.2 Kitkat<br/>\r\n    4" IPS WVGA Display<br/>\r\n    WVGA(480*800)<br/>\r\n    Camera:5 MP + 0.3 MP<br/>\r\n    1.3 GHz  Quad Core<br/>\r\n    RAM  512 MB & ROM 4 GB<br/>\r\n    3G ,EDGE,Wi-Fi<br/>\r\n    Facebook, Play Store, Office suite<br/>\r\n    G-sensor, Light sensor,  Proximity & Accelerometer sensor<br/>\r\n', 'image/product_image/Smile_-_L23.jpg', 6990, 74, 'L23', 1, 1, '2014-10-18 16:24:55', 'Riyad'),
(17, 1, 2, 'Smile-L22', '    Operating System: Android 4.2.2Jelly Bean<br/>\r\n    4” TN Capacitive Full Touch<br/>\r\n    WVGA (480*800)<br/>\r\n    Camera:2 MP+0.3 MP<br/>\r\n    1.2 GHz (Dual Core)<br/>\r\n    RAM  512 MB & ROM 4 GB<br/>\r\n    3G Network,EDGE,WiFi,GPS<br/>\r\n    Facebook, Android Market(Play Store), Office suite<br/>\r\n    AGPS, G sensor<br/>\r\n', 'image/product_image/Smile_-_L22.jpg', 5290, 99, 'L22', 1, 1, '2014-10-18 16:32:00', 'Riyad'),
(18, 1, 4, ' Smile-L21', '    Android 4.4.2 KitKat<br/>\r\n    3.5” TFT HVGA Display<br/>\r\n    Camera: 1.3 MP + 0.3 MP<br/>\r\n    1.3 GHz Dual Core<br/>\r\n    RAM 256 MB & ROM 512 MB<br/>\r\n    3G,EDGE,Wi-Fi<br/>\r\n    Play Store<br/>\r\n    G-sensor,  Accelerometer sensor (3D)<br/>\r\n\r\n', 'image/product_image/Smile_-_L21.jpg', 3790, 130, 'L21', 1, 1, '2014-10-18 16:35:17', 'Riyad'),
(19, 1, 4, 'Smile-S1', '    Display : 2.8"  TFT<br/>\r\n    Camera: 2MP<br/>\r\n    MP3, MP4, FM,EDGE<br/>\r\n    Facebook With Messenger, Yahoo Cricket, Opera Mini, Yahoo Messenger<br/>\r\n', 'image/product_image/Smile_-_S1.jpg', 2790, 220, 'S1', 1, 1, '2014-10-18 16:40:09', 'Riyad'),
(20, 1, 4, 'Smile-S2', '    Display : 3.2" TFT<br/>\r\n    Camera: 2MP<br/>\r\n    MP3, MP4, FM,EDGE<br/>\r\n    Built in TV option, Torchlight<br/>\r\n', 'image/product_image/Smile_-_S2.jpg', 2590, 228, 'S2', 1, 1, '2014-10-18 16:41:09', 'Riyad'),
(21, 1, 4, ' SMile-S3', '    Display: 2.6"  TFT<br/>\r\n    Camera: 0.3 MP<br/>\r\n    MP3, MP4, FM<br/>\r\n    10.9 mm, Torchlight<br/>\r\n', 'image/product_image/Smile_-_S3.jpg', 1990, 178, 'S3', 1, 1, '2014-10-18 16:42:02', 'Riyad'),
(22, 1, 4, 'Smile-S4', '    Display: 2.4" TFT<br/>\r\n    EDGE,MP3,MP4,FM<br/>\r\n    Video,Audio Recorder<br/>\r\n    Torchlight<br/>\r\n', 'image/product_image/Smile_-_S4.jpg', 1990, 264, 'S4', 1, 1, '2014-10-18 16:42:58', 'Riyad'),
(23, 1, 7, ' Smile-T7-Pro', '    Operating System:Android 4.2.2 Jelly Bean<br/>\r\n    Display: 7”  WSVGA Display (600*1024)<br/>\r\n    Camera: 2 MP+0.3 MP<br/>\r\n    1.3GHz Dual Core Processor<br/>\r\n    ROM 8 GB & RAM 1 GB<br/>\r\n    3G,Wi-Fi,EDGE<br/>\r\n    OTG support<br/>\r\n    Accelerometer sensor<br/>\r\n    Free pouch<br/>\r\n', 'image/product_image/Smile-T7-Pro.jpg', 8490, 33, 'T7-Pro', 1, 0, '2014-10-18 16:43:53', 'Riyad'),
(24, 1, 7, 'Smile-T7-Ultra', '    Operating System:Android 4.4.2 KitKat<br/>\r\n    Display: 7”  WVGA (480*800)<br/>\r\n    Camera: 2 MP+0.3 MP<br/>\r\n    1.3GHz Dual Core Processor<br/>\r\n    ROM 4 GB & RAM 512 MB<br/>\r\n    3G,Wi-Fi,EDGE<br/>\r\n    Dual SIM (Regular)<br/>\r\n    OTG support<br/>\r\n    Free OTG cable<br/>\r\n    Accelerometer sensor<br/>\r\n', 'image/product_image/Smile-T7-Ultra.jpg', 6250, 38, 'T7-Ultra', 1, 0, '2014-10-18 16:45:23', 'Riyad'),
(25, 1, 7, 'Smile-T8i', '    Operating System:Android 4.0.4 Ice Cream Sandwich<br/>\n    Display: 8”  IPS  XGA Capacitive Touch<br/>\n    Camera 5 MP+2 MP<br/>\n    1.2 GHz Dual Core Processor\n    ROM 4 GB & RAM 1 GB<br/>\n    3G,Wi-Fi,EDGE,GPS<br/>\n    G-sensor<br/>\n    Free 4GB MMC<br/>\n', 'image/update_product_image/Smile-T8i.jpg', 11990, 6, 'T8i', 1, 0, '2014-10-18 16:46:16', 'Riyad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_admin_user`
--

CREATE TABLE `tbl_smile_admin_user` (
  `smile_admin_user_id` int(7) NOT NULL,
  `smile_admin_user_name` varchar(40) NOT NULL,
  `smile_admin_email_address` varchar(100) NOT NULL,
  `smile_admin_password` varchar(32) NOT NULL,
  `smile_admin_confirm_password` varchar(33) NOT NULL,
  `smile_admin_access_level` tinyint(1) NOT NULL COMMENT 'For Access Level=1 is Super Admin And For Access Level=0 is Manager'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_admin_user`
--

INSERT INTO `tbl_smile_admin_user` (`smile_admin_user_id`, `smile_admin_user_name`, `smile_admin_email_address`, `smile_admin_password`, `smile_admin_confirm_password`, `smile_admin_access_level`) VALUES
(1, 'Khondakar', 'khondakar@smilemobilebd.com', '123456', '123456', 1),
(2, 'Saiful', 'saiful@smilemobilebd.com', '123456', '123456', 0),
(3, 'saiful', 'saiful@smilemobilebd.com', 'saiful1234', 'saiful1234', 1),
(4, 'test', 'test@smilemobilebd.com', 'test1234', 'test1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_contact_us_page`
--

CREATE TABLE `tbl_smile_contact_us_page` (
  `smile_contact_us_page_id` int(5) NOT NULL,
  `smile_rest_header_id` int(4) NOT NULL,
  `smile_contact_address` text NOT NULL,
  `smile_company_email_address` varchar(100) NOT NULL,
  `smile_contact_address_telephone` varchar(25) NOT NULL,
  `smile_contact_address_fax` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_contact_us_page`
--

INSERT INTO `tbl_smile_contact_us_page` (`smile_contact_us_page_id`, `smile_rest_header_id`, `smile_contact_address`, `smile_company_email_address`, `smile_contact_address_telephone`, `smile_contact_address_fax`) VALUES
(1, 0, 'Smile Mobile BD ', 'aldksj@smilemobilebd.com', '123458', '0938381');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_customer`
--

CREATE TABLE `tbl_smile_customer` (
  `smile_customer_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address_01` varchar(255) NOT NULL,
  `address_02` varchar(200) NOT NULL,
  `city` varchar(28) NOT NULL,
  `country_name` varchar(6) NOT NULL,
  `zip_code5` varchar(5) NOT NULL,
  `activation_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_customer`
--

INSERT INTO `tbl_smile_customer` (`smile_customer_id`, `first_name`, `last_name`, `email_address`, `password`, `mobile_number`, `company_name`, `address_01`, `address_02`, `city`, `country_name`, `zip_code5`, `activation_status`) VALUES
(2, 'Saiful', 'Ahmed', 'saiful@smilemobilebd.com', '123456', '01719172313', 'Speedbone', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', '', 'Dhaka', 'BB', '1100', 1),
(4, 'Nayem', 'Nahar', 'nayem@gmail.com', '123456', '01759949595', 'Speedbone', '26no, Hemendra dash Road Sutrapur, Dhaka', '', 'Dhaka', 'BS', '1105', 1),
(6, 'Jahan', 'Ali', 'ali@gmail.com', '123456', '90281988', 'spklads', 'oaskdjflasd', '', 'bkasdj', 'NA', '9283', 1),
(20, 'guooteznlDE', 'guogzrfxfDE', 'eiqnwbx@hotmail.com', 'Kenken520', '0509464764', 'guopcersq', 'Madagascar|Madagascar,Antananarivo', 'Ecuador|Loja,Riobamba,Santo Domingo,Tulcan,Manta,Bahia,Cuenca,Machala,Guayaquil,Otavalo,San Jacinto,Latacunga,Ibarra,Puerto Ayora,Guaranda,Portoviejo,Bahia De Caraquez,Quito,Puerto Baquerizo Moreno,Sa', 'Thailand|Udon Thani,Trat,Chi', '', '12345', 0),
(25, 'guoilfserDE', 'guorsologDE', 'ljwcopc@hotmail.com', 'Kenken520', '0509464764', 'guomyvpml', 'Israel|Raanana,Rechovot,Akko,Ramallah,Tel Aviv,Afula,Nazareth Illit,Dimona,Rehovot,Hevron,Yehud,hod hasharon,Hatzor,Givatayim,Bat Yam,Palestine,Modiin,Tiberias,Bethshemesh,Haifa,Ramat Hasharon,Holon,Nesher,Kiryat Gat,Nablus,Hadera,Kiryat Ekron,Kiryat Haim', 'Panama|La Primavera,Alanje,El Varital,Santiago,Cocle,Boquete,Chitre,Rainbow City,Pedregal,Aguadulce,Loma Colorada,Cerro Punta,San Pablo,Remedios,Los Santos,Colon,Changuinola,Veraguas,Panama City,Chiri', 'Luxembourg|Hesperange,Clerva', '', '12345', 0),
(35, 'guoqdafegDE', 'guoscoqvzDE', 'yxzglvi@hotmail.com', 'Kenken520', '0506915322', 'guonmhrhk', 'Taiwan|Kaohsiung Municipality,Lung Tang,Taoyuan,Kaohsiung County,Panchiao,Tainan,Yung Kang City,Puli,Taipei,Kaohsiung', 'Uganda|Kampala,Jinja', 'Vietnam|Ho Chi Minh City,Bie', '', '12345', 0),
(36, 'guojlxootDE', 'guotnaxggDE', 'qjgycqy@hotmail.com', 'Kenken520', '0509464764', 'guoellxax', 'Greenland|Nuuk,Kangerlussuaq,Upernavik', 'Uganda|Kampala,Jinja', 'Sweden|Boden,Oskarshamn,Mota', '', '12345', 0),
(37, 'guoxrglczDE', 'guosusisdDE', 'vrgltly@hotmail.com', 'Kenken520', '', 'guothcltk', 'Saudi Arabia|Jubail,Mecca,Abha,Shaqra,Jeddah,Al Madinah,Rass,Ras Tanura,Dammam,Dhahran,Jiddah,Al Khobar,Riyadh', 'Georgia|Mtskheta,Tbilisi', 'El Salvador|Arcatao,San Jose', '', '12345', 0),
(38, 'guomrrvtdDE', 'guoyhfeceDE', 'xsymfoj@hotmail.com', 'Kenken520', '0506915322', 'guopjlalc', 'Croatia|Krk,Slavonski Brod,Zagreb,Krapina,Samobor,Pakrac,Osijek,Orebic,Supetar,Pula,Sotin,Topusko,Varazdin,Split,Komiza,Dubrovnik,Djurdjevac,Zadar,Nasice,Trogir,Rijeka,Karlovac,Koprivnica', 'Afghanistan|Kabul,Herat', 'Brazil|Pirassununga,Santa Cr', '', '12345', 0),
(39, 'EmersonvarRH', 'EmersonvarRH', 'timothyweldn@outlook.com', 'bgL7q3u6qW', '0509464764', 'Emersonbund', 'Juuka', 'Juuka', 'Juuka', '', '12345', 0),
(40, 'EmersonvarRH', 'EmersonvarRH', 'timothyweldn@outlook.com', 'bgL7q3u6qW', '0506915322', 'Emersonbund', 'Juuka', 'Juuka', 'Juuka', '', '12345', 0),
(41, 'rubel', 'hasan', 'rubelhasan1030@gmail.com', '12345', '01676494110', 'smilemobile', 'house-304, airport road, banani', '', 'dhaka', 'BD', '1213', 1),
(42, 'loeyjmhrmYJ', 'loeqwckgpYJ', 'cpfwlrr@hotmail.com', 'Kenken520', '', 'loetldguy', 'Antigua and Barbuda|Falmouth,Saint Johns', 'Kyrgyzstan|Karakol,Bishkek', 'Ecuador|Loja,Riobamba,Santo ', '', '12345', 0),
(43, 'loeometwhYJ', 'loelvgsduYJ', 'xxaptuz@hotmail.com', 'Kenken520', '0506915322', 'loebuwoih', 'Tanzania|Wete,Morogoro,Mwanza,Kilimanjaro,Arusha,Bagamoyo,Dar Es Salaam,Shinyanga,Zanzibar', 'Austria|Hohenems,Jochberg,Salzburg,Eisenstadt,Leoben,Korneuburg,Wels,Bad Hall,Bodensdorf,Rosental,Steyr,Stegersbach,Neulengbach,Zirl,Pinkafeld,Wiener Neustadt,Grafenbach,Tamsweg,Dornbirn,Linz,Innsbruc', 'Belize|Orange Walk,Punta Gor', '', '12345', 0),
(44, 'loearusulYJ', 'loewmbptaYJ', 'eijftlb@hotmail.com', 'Kenken520', '0506915322', 'loerkzdfi', 'Cook Islands|Avarua,Rarotonga', 'Peru|Yanahuara,Lima,Sabandia,Camana,Pucallpa,Arequipa,Caras,Iquitos,Cuzco,Collique,Magdalena,Miraflores,Piura,Trujillo,Callao,Aplao,Cayma,Chimbote,Socabaya', 'Haiti|Delmas,Bourdon,Diquini', '', '12345', 0),
(45, 'RobertTapMF', 'RobertTapMF', 'mackykc@hotmail.com', 'hzzvo34F6F', '0506915322', 'Robertdrer', 'new york', 'new york', 'new york', '', '12345', 0),
(46, 'loevouoccYJ', 'loepwhwluYJ', 'skopkvv@hotmail.com', 'Kenken520', '0509464764', 'loedshwqe', 'Oman|Muscat,Sur,Ruwi,Masqat', 'Kuwait|Kuwait,Khalidia,Ahmadi,Bayan,Al Farwaniyah,Safat,Salwa,Salmiya,Mishref,Jahra', 'Papua New Guinea|Hoskins,Lae', '', '12345', 0),
(47, 'loevoakxbYJ', 'loejazclpYJ', 'gcwhmps@hotmail.com', 'Kenken520', '0509464764', 'loewinyoq', 'Marshall Islands|Kwajalein,Majuro', 'Lebanon|Jbeil,Amioun,Ashrafieh,Jounieh,Tripoli,Beirut', 'Nigeria|Kaduna,Oshogbo,Sapel', '', '12345', 0),
(49, 'WalterDureFD', 'WalterDureFD', 'patelvsx@hotmail.com', 'kAus31as1D', '0506915322', 'Walternops', 'Taiping', 'Taiping', 'Taiping', '', '12345', 0),
(50, 'loeguwmycYJ', 'loeletvpaYJ', 'inbyxcc@hotmail.com', 'Kenken520', '0506915322', 'loehaseib', 'Peru|Yanahuara,Lima,Sabandia,Camana,Pucallpa,Arequipa,Caras,Iquitos,Cuzco,Collique,Magdalena,Miraflores,Piura,Trujillo,Callao,Aplao,Cayma,Chimbote,Socabaya', 'Slovakia|Nove Mesto nad Vahom,Liptovsky Mikulas,Zilina,Trnava,Bratislava,Banska Bystrica,Trencin,Piestany,Poprad,Nitra,Presov,Spisska Nova Ves,Kosice,Bardejov', 'Puerto Rico|Rio Grande,Santu', '', '12345', 0),
(51, 'RichardelRE', 'RichardelRE', 'mackykc@hotmail.com', 'C3zxawj14Q', '0506915322', 'RichardPn', 'Mount Carey', 'Mount Carey', 'Mount Carey', '', '12345', 0),
(52, 'WalterDureFD', 'WalterDureFD', 'patelvsx@hotmail.com', 'kAus31as1D', '0509464764', 'Walternops', 'Taiping', 'Taiping', 'Taiping', '', '12345', 0),
(53, 'loebdhrchYJ', 'loefusruwYJ', 'vtptxab@hotmail.com', 'Kenken520', '0509464764', 'loetajips', 'Yemen|Sanaa,Ibb,Mukalla', 'Czech Republic|Kralupy Nad Vltavou,Usti nad Labem,Kladno,Jicin,Chocen,Liberec,Ceske Budejovice,Brno,Most,Semily,Jihlava,Obecnice,Olomouc,Plzen,Opava,Prague,Blansko,Uhersky Brod,Zlin,Karlovy Vary,Klato', 'Switzerland|Biel,Yverdon,Lie', '', '12345', 0),
(54, 'loeabnicvYJ', 'loenjqnmiYJ', 'lwoxstb@hotmail.com', 'Kenken520', '0506915322', 'loelvemqy', 'Poland|Gliwice,Czestochowa,Zielona Gora,Wawelno,Olsztyn,Tychy,Gdansk,Lublin,Milanowek,Krakow,Szczecin,Gdynia,Boleslawiec,Suwalki,Katowice,Lodz,Wolomin,Gulcz,Zawiercie,Warsaw,Jelenia Gora,Tarnow,Pultusk,Rzeszow,Bydgoszcz,Zabrze,Plock,Torun,Boleslawiec,Choj', 'Colombia|Riohacha,Sogamoso,Laureles,Soacha,Neiva,Ipiales,Palmira,Buga,El Centro,Florencia,Funza,Envigado,Barrancas,Fusagasuga,Santa Marta,Galan,Cali,Junin,Monteria,La Victoria,San Andres,Arauca,Aparta', 'El Salvador|Arcatao,San Jose', '', '12345', 0),
(55, 'LestercoliQP', 'LestercoliQP', 'keithqce@hotmail.com', '25kRlrun8Y', '0509464764', 'Lesterel', 'Yanahuara', 'Yanahuara', 'Yanahuara', '', '12345', 0),
(56, 'TimothysrZB', 'TimothysrZB', 'timothyweld@outlook.com', 'qLo9vg7r3U', '0506915322', 'TimothyBisk', 'NEW AMSTERDAM', 'NEW AMSTERDAM', 'NEW AMSTERDAM', '', '12345', 0),
(57, 'loetyvfdfYJ', 'loehrmdooYJ', 'qrfzcgi@hotmail.com', 'Kenken520', '0506915322', 'loesqayhy', 'Kyrgyzstan|Karakol,Bishkek', 'Malaysia|Kulim,Kuching,Subang Jaya,Butterworth,Kuala Kangsar,Teluk Intan,Penang,Tawau,Kuala Lumpur,Batu Pahat,Sibu,Serdang,Ulu Kelang,Sri Aman,Kota Bharu,Bentong,Sungai Petani,Jerantut,Kuala Pilah,Seg', 'Madagascar|Madagascar,Antana', '', '12345', 0),
(58, 'LestercoliQP', 'LestercoliQP', 'keithqce@hotmail.com', '25kRlrun8Y', '0506915322', 'Lesterel', 'Yanahuara', 'Yanahuara', 'Yanahuara', '', '12345', 0),
(59, 'loeczpmyxYJ', 'loezvqrocYJ', 'jtbyoca@hotmail.com', 'Kenken520', '0509464764', 'loecgwzmk', 'Cyprus|Paphos,Kyrenia,Nicosia,Limassol,Larnaca,Famagusta', 'The Bahamas|Colonel Hill,Nassau City,Cockburn Town,Matthew Town,Nassau,Rock Sound,Sandy Point,Georgetown,Behring Point,Freeport,San Andros,Freetown,Old Bight,Port Nelson,Snug Corner,Marsh Harbour,Fres', 'Belarus|Minsk,Mahilyow,Minsk', '', '12345', 0),
(60, 'TimothysrZB', 'TimothysrZB', 'timothywelds@outlook.com', 'qLo9vg7r3U', '0509464764', 'TimothyBisk', 'NEW AMSTERDAM', 'NEW AMSTERDAM', 'NEW AMSTERDAM', '', '12345', 0),
(61, 'TimothysrZB', 'TimothysrZB', 'timothyweld@outlook.com', 'qLo9vg7r3U', '0509464764', 'TimothyBisk', 'NEW AMSTERDAM', 'NEW AMSTERDAM', 'NEW AMSTERDAM', '', '12345', 0),
(62, 'LestercoliQP', 'LestercoliQP', 'keithqce@hotmail.com', '25kRlrun8Y', '0509464764', 'Lesterel', 'Yanahuara', 'Yanahuara', 'Yanahuara', '', '12345', 0),
(63, 'Williamgennick', 'Williamgennick', 'mackykc@hotmail.com', 'pls3rY4a5V', '0506915322', 'Williamgennick', 'Quatre Bornes', 'Quatre Bornes', 'Quatre Bornes', '', '12345', 0),
(64, 'loegitpuzYJ', 'loedtgndqYJ', 'bthqbpj@hotmail.com', 'Kenken520', '0506915322', 'loeycdtbv', 'Bangladesh|Comilla,Rajshahi,Saginaw,Khulna,Dhaka', 'South Africa|Sishen,Lenasia,Grahamstown,Phalaborwa,Kimberley,Randburg,Loxton,George,Sasolburg,Eshowe,Nelspruit,Newcastle,Witbank,Hazyview,Ballito,Welkom,Malelane,Port Elizabeth,Kuils River,Kempton Par', 'Puerto Rico|Rio Grande,Santu', '', '12345', 0),
(65, 'loewembtpYJ', 'loejxcdiwYJ', 'gplkziz@hotmail.com', 'Kenken520', '0506915322', 'loedslsan', 'Sri Lanka|Nuwara Eliya,Point Pedro,Jaffna,Gampaha,Colombo', 'Cuba|Havana,Las Tunas,Holguin', 'Malta|Mosta,San Gwann,Attard', '', '12345', 0),
(66, 'riyad', 'islam', 'khondakar22readul@yahoo.com', '123456', '01776457394', '', '112/1, Crescent Road, ', 'Dhanmondi,', 'Dhaka', 'BD', '1205', 0),
(67, 'TimothysrZB', 'TimothysrZB', 'timothyweldn@outlook.com', 'qLo9vg7r3U', '0506915322', 'TimothyBisk', 'NEW AMSTERDAM', 'NEW AMSTERDAM', 'NEW AMSTERDAM', '', '12345', 0),
(68, 'loezfwgfrYJ', 'loegmobmcYJ', 'fttljnx@hotmail.com', 'Kenken520', '0506915322', 'loehdnpwl', 'Brazil|Pirassununga,Santa Cruz do Sul,Barreiras,Campo Grande,Araraquara,Boa Vista,Barra do Corda,Montenegro,Sete Lagoas,Bauru,Taquarituba,Nova Lima,Mirassol,Belo Horizonte,Osasco,Garanhuns,Juiz de For a,Pelotas,Uberaba,Itatiba,Fortaleza,Porto Velho,Nepomu', 'Denmark|Skive,Slagelse,Odense,Auning,Thisted,Ringkobing,Skanderborg,Taastrup,Varde,Sindal,Silkeborg,Silkeborg,Esbjerg,Nyborg,Vedbaek,Naestved,Kolding,Ringe,Herlev,Jelling,Rodding,Gilleleje,Copenhagen ', 'Benin|Cotonou,Natitingou', '', '12345', 0),
(69, 'loebeymhfYJ', 'loeukckjrYJ', 'etphlzh@hotmail.com', 'Kenken520', '0509464764', 'loegwikdu', 'Egypt|Cairo,Al Mansurah,Port Said,Luxor,Alexandria,Giza,Hurghada,Heliopolis', 'Antigua and Barbuda|Falmouth,Saint Johns', 'Estonia|Parnu,Tallinn,Rakver', '', '12345', 0),
(70, 'loenofhuxYJ', 'loexslnkqYJ', 'gfhngkk@hotmail.com', 'Kenken520', '0509464764', 'loexffjxf', 'Mauritius|Quatre Bornes,Port Louis', 'Latvia|Ligatne,Jurmala,RIGA,Ventspils,Sigulda,salaspils,Liepaja', 'The Gambia|Banjul,Kanifing', '', '12345', 0),
(71, 'MartinRaseCJ', 'MartinRaseCJ', 'soncqut@hotmail.com', 'w7hx4kI3aB', '0509464764', 'Martinles', 'Kralupy Nad Vltavou', 'Kralupy Nad Vltavou', 'Kralupy Nad Vltavou', '', '12345', 0),
(72, 'TimothysoKIB', 'TimothysoKIB', 'timothy_ower@aol.com', '8qsXo96buC', '0509464764', 'TimothysoK', 'Carthage', 'Carthage', 'Carthage', '', '12345', 0),
(73, 'loealmbwuYJ', 'loefteqplYJ', 'rurahqf@hotmail.com', 'Kenken520', '0506915322', 'loejvxdzs', 'New Zealand|Albany,Whakatane,Papatoetoe,Auckland,Whangarei,Manukau City,Palmerston North,Taupo,Waitakere,Tauranga,Queenstown,Gisborne,Howick,Napier,Dunedin,Masterton,Timaru,Takapuna,Hamilton,Alexandra,Ashhurst,Blenheim,New Plymouth,Wanganui,Gore,Wellingto', 'Austria|Hohenems,Jochberg,Salzburg,Eisenstadt,Leoben,Korneuburg,Wels,Bad Hall,Bodensdorf,Rosental,Steyr,Stegersbach,Neulengbach,Zirl,Pinkafeld,Wiener Neustadt,Grafenbach,Tamsweg,Dornbirn,Linz,Innsbruc', 'Bolivia|Oruro,Corioco,Guayar', '', '12345', 0),
(74, 'saiful', 'islam', 'mdsaifulbd13@gmail.com', 'saiful1234', '01676494110', '', 'banani', '', 'dhaka', 'BD', '1213', 0),
(75, 'TimothysrZB', 'TimothysrZB', 'timothyweld@outlook.com', 'qLo9vg7r3U', '', 'TimothyBisk', 'NEW AMSTERDAM', 'NEW AMSTERDAM', 'NEW AMSTERDAM', '', '12345', 0),
(81, 'loeuljxseYJ', 'loeqcircwYJ', 'smjavby@hotmail.com', 'Kenken520', '0506915322', 'loebdsjqq', 'Brazil|Pirassununga,Santa Cruz do Sul,Barreiras,Campo Grande,Araraquara,Boa Vista,Barra do Corda,Montenegro,Sete Lagoas,Bauru,Taquarituba,Nova Lima,Mirassol,Belo Horizonte,Osasco,Garanhuns,Juiz de For a,Pelotas,Uberaba,Itatiba,Fortaleza,Porto Velho,Nepomu', 'United Arab Emirates|Garhoud,Dubai,Bur Dubai,Ras al Khaymah,Abu Dhabi,Ajman,Al Fujayrah,Sharjah', 'Cuba|Havana,Las Tunas,Holgui', '', '12345', 0),
(82, 'loehjqdgbYJ', 'loeqkwqvyYJ', 'plwrkwo@hotmail.com', 'Kenken520', '0509464764', 'loeomuibv', 'Papua New Guinea|Hoskins,Lae,Port Moresby,Madang,Goroka,Mount Hagen', 'Morocco|Tafraout,Rabat,Tangier,Tetouan,Casablanca,Marrakesh,Fez,Oujda,Meknes,Agadir', 'Antigua and Barbuda|Falmouth', '', '12345', 0),
(83, 'loektzdriYJ', 'loetohcqvYJ', 'cdgdyot@hotmail.com', 'Kenken520', '0509464764', 'loeywgazi', 'Malawi|Lilongwe,Blantyre', 'Vietnam|Ho Chi Minh City,Bien Hoa,Hue,Hanoi', 'Belarus|Minsk,Mahilyow,Minsk', '', '12345', 0),
(84, 'Kent', 'Kent', 'unevendownlink2a@rediffmail.com', 'asdffasd', '0506915322', 'Kent', 'Ontario', 'Ontario', 'Ontario', '', '12345', 0),
(85, 'loeufdvwnYJ', 'loervkepbYJ', 'mbodpee@hotmail.com', 'Kenken520', '0509464764', 'loeohajwr', 'Marshall Islands|Kwajalein,Majuro', 'Gibraltar|Estepona,Marbella,Gibraltar,Algeciras,La Linea', 'Liberia|Monrovia,Turnersvill', '', '12345', 0),
(86, 'loerikdhcYJ', 'loeemmjmvYJ', 'kjhzpzj@hotmail.com', 'Kenken520', '0506915322', 'loepcvtef', 'Japan|Tamana,Ginoza,Miyazaki,Iwanuma,Oiso,Nagareyama,Ebetsu,Kisarazu,Nagoya,Hashimoto,Kofu,Suzuka,Suwa,Asahikawa,Yatabe,Sanda,Tsuruoka,Sendai,Naganohara,Takaoka,Ryuo,Toyota,Warabi,Akita,Isahaya,Nirasaki,Hitachi,Chino,Okayama,Takatsuki,Kushiro,Iwaki,Naruto', '|Hebron,Gaza City', 'Netherlands Antilles|Willems', '', '12345', 0),
(87, 'loeddijmjYJ', 'loehnlsuzYJ', 'klrnnij@hotmail.com', 'Kenken520', '0509464764', 'loeoaamum', 'Indonesia|Tomohon,nabire,Purworejo,merauke,Surabaya,Balikpapan,Depok,Karawaci,Pakanbaru,Kuta,manokwari,Tondano,Nusa Dua,serui,Yogyakarta,Denpasar,Bekasi,Binjei,Bandar Lampung,Bitung,Tangerang,Bogor,Purwokerto,batuhijau sumbawa,Ujung Pandang,Gresik,sorong,', 'Ireland|Ennis,Listowel,Sligo,Dublin,Bantry,Bangor,Waterford,Athboy,Longford,Mullingar,New Ross,Killarney,Enniscorthy,Westport,Castlebar,Letterkenny,Dundalk,Wicklow,Shannon,Tallaght,Edgeworthstown,Tral', 'France|Le Mans,Bayonne,Longj', '', '12345', 0),
(88, 'loeaxfacqYJ', 'loeovdrqgYJ', 'spubjtf@hotmail.com', 'Kenken520', '0506915322', 'loesaoqjf', 'Morocco|Tafraout,Rabat,Tangier,Tetouan,Casablanca,Marrakesh,Fez,Oujda,Meknes,Agadir', 'Belize|Orange Walk,Punta Gorda,Belize City,San Ignacio,Belize,Belmopan', 'Antigua and Barbuda|Falmouth', '', '12345', 0),
(89, 'loehqxjeyYJ', 'loefjilnxYJ', 'zchvokz@hotmail.com', 'Kenken520', '0509464764', 'loeuiryzj', 'Mongolia|Ulaanbaatar,Choibalsan,Ulaangom,Erdenet,Tsetserleg,Ondorhaan,Olgii,Altai,Suhbaatar,Hovd,Moron,Bulgan,Darhan', 'India|Rajkot,Bilaspur,Jabalpur,Amritsar,New Delhi,Trivandrum,Rewari,Vijayawada,Ranchi,Aurangabad,Ahmednagar,Naini Tal,Tezpur,Hyderabad,Burdwan,Chhatarpur,Jaipur,Srinagar,Kharagpur,Gurgaon,Nellore,Mala', 'Malta|Mosta,San Gwann,Attard', '', '12345', 0),
(90, 'MartinRaseCJ', 'MartinRaseCJ', 'soncqut@hotmail.com', 'w7hx4kI3aB', '0506915322', 'Martinles', 'Kralupy Nad Vltavou', 'Kralupy Nad Vltavou', 'Kralupy Nad Vltavou', '', '12345', 0),
(91, 'loefiqqrpYJ', 'loeukqmozYJ', 'ewfhlss@hotmail.com', 'Kenken520', '0506915322', 'loehfweot', 'Uruguay|Montevideo,Durazno,Rivera,Punta del Este,Maldonado,Tacuarembo,Paso De Los Toros,Carmelo,Colonia,Artigas,Paysandu,Rocha,Salto', 'Benin|Cotonou,Natitingou', 'Taiwan|Kaohsiung Municipalit', '', '12345', 0),
(92, 'loefrraekYJ', 'loenwirlpYJ', 'epkcjnj@hotmail.com', 'Kenken520', '0509464764', 'loexbtktg', 'Germany|Freising,Krefeld,Hofgeismar,Altenstadt,Melsungen,Cranzahl,Wedel,Eisenach,Marburg,Wesel,Munster,Nidda,Soltau,Cuxhaven,Urbach,Mainz,Passau,Oberbergkirchen,Neuwied,Schaumburg,Fuerth,Griesheim,Bexbach,Ingolstadt,Rostock,Haan,Kamen,Remscheid,Geilenkirc', 'Guam|Hagatna,Tamuning,Dededo,Yona,Yigo,Maite,Piti,Mangilao,Agana,Agat', 'Nepal|Banepa,Lalitpur,Kathma', '', '12345', 0),
(93, 'loewcawzlYJ', 'loeobsmbiYJ', 'vdplost@hotmail.com', 'Kenken520', '0506915322', 'loeglmlxp', 'Zambia|Lusaka,Kitwe', 'Sri Lanka|Nuwara Eliya,Point Pedro,Jaffna,Gampaha,Colombo', 'El Salvador|Arcatao,San Jose', '', '12345', 0),
(94, 'loehykfxwYJ', 'loeijkigdYJ', 'hrnoboh@hotmail.com', 'Kenken520', '0506915322', 'loefwttzm', 'Slovakia|Nove Mesto nad Vahom,Liptovsky Mikulas,Zilina,Trnava,Bratislava,Banska Bystrica,Trencin,Piestany,Poprad,Nitra,Presov,Spisska Nova Ves,Kosice,Bardejov', 'Andorra|Andorra La Vella,Escaldes', 'Iran|Lar,Tabriz,Karaj,Rafsan', '', '12345', 0),
(95, 'loelrbfnnYJ', 'loeedengpYJ', 'yqrpoar@hotmail.com', 'Kenken520', '0506915322', 'loecwflro', 'Brunei Darussalam|Bandar Seri Begawan,Tutong,Kuala Belait,Jerudong', 'Malawi|Lilongwe,Blantyre', 'Kazakhstan|Aqtobe,Pavlodar,K', '', '12345', 0),
(96, 'dnoehovzkXD', 'dnodzxkikXD', 'gfssalb@hotmail.com', 'Kenken520', '0506915322', 'dnopcqgaq', 'Peru|Yanahuara,Lima,Sabandia,Camana,Pucallpa,Arequipa,Caras,Iquitos,Cuzco,Collique,Magdalena,Miraflores,Piura,Trujillo,Callao,Aplao,Cayma,Chimbote,Socabaya', 'Kyrgyzstan|Karakol,Bishkek', 'Yugoslavia|Nis,Pristina,Ada,', '', '12345', 0),
(98, 'dnookgjobXD', 'dnopemcppXD', 'vhyiyak@hotmail.com', 'Kenken520', '0509464764', 'dnohpdkbt', 'Brazil|Pirassununga,Santa Cruz do Sul,Barreiras,Campo Grande,Araraquara,Boa Vista,Barra do Corda,Montenegro,Sete Lagoas,Bauru,Taquarituba,Nova Lima,Mirassol,Belo Horizonte,Osasco,Garanhuns,Juiz de For a,Pelotas,Uberaba,Itatiba,Fortaleza,Porto Velho,Nepomu', 'Finland|Juuka,Nokia,Iisalmi,Hanko,toijala,Loviisa,Naantali,Paimio,Heinola,Seinajoki,Mariehamn,Nummela,Vantaa,Kajaani,Jakobstad,Helsinki,Kouvola,Tornio,Rauma,Forssa,Valkeakoski,Espoo,Kokkola,Vaasa,Oulu', 'Antigua and Barbuda|Falmouth', '', '12345', 0),
(99, 'dnoknzpjqXD', 'dnohlrtbxXD', 'trhbxvt@hotmail.com', 'Kenken520', '0509464764', 'dnolrxagw', 'Sierra Leone|Freetown,Bo', 'Russia|Raduznyj,Zelenograd,Okha,Vladikavkaz,Novgorod,Rubtsovsk,Kyakhta,Pushkin,Kemerovo,Petrozavodsk,Cherepovets,Nizhniy Novgorod,Tambov,Sochi,Volgograd,Obninsk,Dubna,Trekhgorny,Provideniya,Staraya Ru', 'Latvia|Ligatne,Jurmala,RIGA,', '', '12345', 0),
(100, 'dnosnezkrXD', 'dnovmmuwjXD', 'ytlakyv@hotmail.com', 'Kenken520', '0506915322', 'dnobrbhit', 'Yemen|Sanaa,Ibb,Mukalla', 'Belgium|Aarschot,Mortsel,Ninove,Belsele,Merelbeke,Oudenaarde,Frameries,Middelkerke,Keerbergen,Arlon,Gavere,Mons,Tongeren,Soignies,Geel,Kortrijk,Lanaken,Antwerp,Leuven,Meulebeke,Ciney,Koningslo,Westmal', 'Hungary|Debrecen,Siofok,Mako', '', '12345', 0),
(101, 'dnowwthxgXD', 'dnohgqsvoXD', 'prbcwlp@hotmail.com', 'Kenken520', '0506915322', 'dnoankjri', 'Germany|Freising,Krefeld,Hofgeismar,Altenstadt,Melsungen,Cranzahl,Wedel,Eisenach,Marburg,Wesel,Munster,Nidda,Soltau,Cuxhaven,Urbach,Mainz,Passau,Oberbergkirchen,Neuwied,Schaumburg,Fuerth,Griesheim,Bexbach,Ingolstadt,Rostock,Haan,Kamen,Remscheid,Geilenkirc', 'Iran|Lar,Tabriz,Karaj,Rafsanjan,Tehran,Damghan,Shiraz,Arak,Orumiyeh,Kish,Jahrom,Sari,Ahvaz,Zahedan,Mashhad,Fasa,Behshahr,Baharestan,Kermanshah', 'Finland|Juuka,Nokia,Iisalmi,', '', '12345', 0),
(102, 'dnokbcqjlXD', 'dnowjijtyXD', 'vwuhgoi@hotmail.com', 'Kenken520', '0506915322', 'dnoyakijv', 'Cape Verde|Praia,Mindelo', 'Iraq|Baghdad,Nineveh,Basra,An Najaf', 'Uganda|Kampala,Jinja', '', '12345', 0),
(103, 'MelisundestDK', 'MelisundestDK', 'melissarriley@outlook.com', 'jr4wU7y5gW', '0509464764', 'Melisundest', 'Edson', 'Edson', 'Edson', '', '12345', 0),
(104, 'dnolapaksXD', 'dnoiyeervXD', 'tfxbxye@hotmail.com', 'Kenken520', '0506915322', 'dnorhvzfo', 'Cuba|Havana,Las Tunas,Holguin', 'Belgium|Aarschot,Mortsel,Ninove,Belsele,Merelbeke,Oudenaarde,Frameries,Middelkerke,Keerbergen,Arlon,Gavere,Mons,Tongeren,Soignies,Geel,Kortrijk,Lanaken,Antwerp,Leuven,Meulebeke,Ciney,Koningslo,Westmal', 'Mexico|Celaya,Monterrey,Tula', '', '12345', 0),
(105, 'dnomckwqaXD', 'dnonykftoXD', 'ohhkaed@hotmail.com', 'Kenken520', '0506915322', 'dnorjdzuq', 'Slovenia|Piran,Ptuj,Maribor,Murska Sobota,Medvode,Novo Mesto,Naklo,Kranj,Celje,Koper,Ravne na Koroskem,Trzic,Gorizia,Gornja Radgona,Velenje,Sentjost,Ljubljana,Vrhnika,Hrastnik', 'Trinidad and Tobago|Nestor,Moruga,Matelot,Upper Fishing Pond,Poole,Plum Mitan,Port of Spain,Unis,Guaico Tamana,Las Cuevas,Carmichael,Howson,Brasso Seco Village,Rushville,Matura,Caigual,Fonrose,Scarbor', 'Argentina|San Miguel de Tucu', '', '12345', 0),
(106, 'MelisundestDK', 'MelisundestDK', 'melissarriley@outlook.com', 'jr4wU7y5gW', '0509464764', 'Melisundest', 'Edson', 'Edson', 'Edson', '', '12345', 0),
(107, 'dnodyuqecXD', 'dnowmdujbXD', 'omutyao@hotmail.com', 'Kenken520', '0509464764', 'dnowsfltz', 'Gibraltar|Estepona,Marbella,Gibraltar,Algeciras,La Linea', 'Guatemala|Jutiapa,Antigua,SOLOLA,Salama,VILLA CANALES,VILLA NUEVA,San Jose Pinula,Guatemala,SAN JUAN SACATEPEQUEZ,SAN MIGUEL PETAPA,Cuilapa,Escuintla,Coban,MIXCO,Chichicastenango,Jalapa,Huehuetenango,', 'Slovakia|Nove Mesto nad Vaho', '', '12345', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_customer_contact_address_for_enquiry`
--

CREATE TABLE `tbl_smile_customer_contact_address_for_enquiry` (
  `smile_enquiry_id` int(5) NOT NULL,
  `smile_rest_header_id` int(4) NOT NULL,
  `smile_enquirier_name` varchar(30) NOT NULL,
  `smile_enquiry_details` text NOT NULL,
  `smile_enquirier_email_address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_header_category`
--

CREATE TABLE `tbl_smile_header_category` (
  `smile_header_category_id` int(4) NOT NULL,
  `smile_header_category_name` varchar(20) NOT NULL,
  `smile_header_category_description` text NOT NULL,
  `smile_header_cateogry_publication_status` tinyint(1) NOT NULL COMMENT 'Status=1 means Published, Status=0 Means Unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_header_category`
--

INSERT INTO `tbl_smile_header_category` (`smile_header_category_id`, `smile_header_category_name`, `smile_header_category_description`, `smile_header_cateogry_publication_status`) VALUES
(1, 'Wish List', '', 0),
(2, 'Customer Care', '', 1),
(3, 'About Us', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_menubar_category`
--

CREATE TABLE `tbl_smile_menubar_category` (
  `smile_menubar_category_id` int(6) NOT NULL,
  `smile_menubar_category_name` varchar(30) NOT NULL,
  `smile_menubar_category_description` text NOT NULL,
  `smile_menubar_category_publication_status` tinyint(1) NOT NULL COMMENT 'For Publication_Status=1 menas Published; For Publication_Status=0 means Unpublished.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_menubar_category`
--

INSERT INTO `tbl_smile_menubar_category` (`smile_menubar_category_id`, `smile_menubar_category_name`, `smile_menubar_category_description`, `smile_menubar_category_publication_status`) VALUES
(1, 'Product', '', 1),
(2, 'Download', '', 1),
(3, 'Blog', '', 1),
(4, 'Promotion', '', 1),
(5, 'Upcoming Product', '', 1),
(6, 'Support', '', 1),
(7, 'News', '', 1),
(8, 'Media Partner', '', 1),
(9, 'Dealer Shop', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_order`
--

CREATE TABLE `tbl_smile_order` (
  `order_id` int(13) NOT NULL,
  `smile_customer_id` int(11) NOT NULL,
  `shipping_id` int(10) NOT NULL,
  `payment_id` int(9) NOT NULL,
  `order_status` varchar(12) NOT NULL DEFAULT 'Pending',
  `order_total` float NOT NULL,
  `order_comments` text NOT NULL,
  `order_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `invoice_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_order`
--

INSERT INTO `tbl_smile_order` (`order_id`, `smile_customer_id`, `shipping_id`, `payment_id`, `order_status`, `order_total`, `order_comments`, `order_date_time`, `invoice_date`) VALUES
(1, 1, 1, 1, 'Cancelled', 0, '', '2014-10-28 06:04:41', '28/10/14'),
(2, 2, 2, 2, 'Deliverd', 6343.75, '', '2014-10-28 06:07:16', '28/10/14'),
(3, 1, 4, 3, 'Pending', 24339.7, '', '2014-10-29 08:00:40', '29/10/14'),
(4, 2, 5, 4, 'Pending', 17234.7, '', '2014-10-29 12:19:15', '29/10/14'),
(5, 3, 6, 5, 'Delivered', 3034.85, '', '2014-10-29 12:20:40', '29/10/14'),
(6, 4, 7, 6, 'Pending', 16938.3, '', '2014-10-29 12:22:39', '29/10/14'),
(7, 1, 9, 7, 'Pending', 2628.85, '', '2014-11-09 09:39:06', '09/11/14'),
(8, 1, 9, 8, 'Pending', 2628.85, '', '2014-11-09 09:39:37', '09/11/14'),
(9, 41, 10, 9, 'Pending', 7094.85, '', '2015-04-16 09:01:54', '16/04/15'),
(10, 41, 10, 10, 'Pending', 7094.85, '', '2015-04-16 09:02:03', '16/04/15'),
(11, 41, 10, 11, 'Pending', 7094.85, '', '2015-04-16 09:02:22', '16/04/15'),
(12, 41, 10, 12, 'Pending', 7094.85, '', '2015-04-16 09:02:37', '16/04/15'),
(13, 41, 10, 13, 'Pending', 7094.85, '', '2015-04-16 09:03:28', '16/04/15'),
(14, 41, 10, 14, 'Pending', 7094.85, '', '2015-04-16 09:08:57', '16/04/15'),
(15, 2, 12, 15, 'Pending', 5369.35, '', '2016-03-28 13:34:57', '28/03/16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_order_details`
--

CREATE TABLE `tbl_smile_order_details` (
  `order_details_id` int(14) NOT NULL,
  `order_id` int(13) NOT NULL,
  `smile_product_id` int(12) NOT NULL,
  `order_product_name` varchar(28) NOT NULL,
  `order_product_price` float NOT NULL,
  `product_sales_quantity` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_order_details`
--

INSERT INTO `tbl_smile_order_details` (`order_details_id`, `order_id`, `smile_product_id`, `order_product_name`, `order_product_price`, `product_sales_quantity`) VALUES
(1, 1, 21, ' SMile-S3', 1990, 2),
(2, 1, 7, 'Smile-FT42', 2990, 5),
(3, 2, 24, 'Smile-T7-Ultra', 6250, 1),
(4, 3, 25, 'Smile-T8i', 11990, 2),
(5, 4, 23, ' Smile-T7-Pro', 8490, 2),
(6, 5, 7, 'Smile-FT42', 2990, 1),
(7, 6, 4, 'Smile-B12', 999, 2),
(8, 6, 14, 'Smile-M42', 14690, 1),
(9, 7, 20, 'Smile-S2', 2590, 1),
(10, 8, 20, 'Smile-S2', 2590, 1),
(11, 9, 16, 'Smile-L23', 6990, 1),
(12, 10, 16, 'Smile-L23', 6990, 1),
(13, 11, 16, 'Smile-L23', 6990, 1),
(14, 12, 16, 'Smile-L23', 6990, 1),
(15, 13, 16, 'Smile-L23', 6990, 1),
(16, 14, 16, 'Smile-L23', 6990, 1),
(17, 15, 17, 'Smile-L22', 5290, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_payment_details`
--

CREATE TABLE `tbl_smile_payment_details` (
  `payment_id` int(9) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `payment_status` varchar(10) NOT NULL DEFAULT 'Pending',
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_payment_details`
--

INSERT INTO `tbl_smile_payment_details` (`payment_id`, `payment_type`, `payment_status`, `payment_date_time`) VALUES
(1, 'pay_pal', 'Cancelled', '2014-10-28 06:04:41'),
(2, 'cash_on_delivery', 'Paid', '2014-10-28 06:07:16'),
(3, 'cash_on_delivery', 'Pending', '2014-10-29 08:00:40'),
(4, 'cash_on_delivery', 'Pending', '2014-10-29 12:19:15'),
(5, 'cash_on_delivery', 'Paid', '2014-10-29 12:20:40'),
(6, 'cash_on_delivery', 'Pending', '2014-10-29 12:22:39'),
(7, 'cash_on_delivery', 'Pending', '2014-11-09 09:39:06'),
(8, 'pay_pal', 'Pending', '2014-11-09 09:39:36'),
(9, 'cash_on_delivery', 'Pending', '2015-04-16 09:01:52'),
(10, 'cash_on_delivery', 'Pending', '2015-04-16 09:02:03'),
(11, 'cash_on_delivery', 'Pending', '2015-04-16 09:02:21'),
(12, 'cash_on_delivery', 'Pending', '2015-04-16 09:02:37'),
(13, 'pay_pal', 'Pending', '2015-04-16 09:03:28'),
(14, 'cash_on_delivery', 'Pending', '2015-04-16 09:08:57'),
(15, 'pay_pal', 'Pending', '2016-03-28 13:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_product_comment`
--

CREATE TABLE `tbl_smile_product_comment` (
  `smile_comment_id` int(5) NOT NULL,
  `smile_product_id` int(12) NOT NULL,
  `smile_comment_user_name` varchar(35) NOT NULL,
  `smile_comment_description` text NOT NULL,
  `smile_comment_product_rating_status` int(2) NOT NULL COMMENT 'For Status=1, Low, Status=2 Avearge, Status=3, Medium, Status=4, Good, Status=5, Best',
  `smile_comment_publication_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'For Status=1 Published For Status=0 Unpublished',
  `smile_comment_publication_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_product_comment`
--

INSERT INTO `tbl_smile_product_comment` (`smile_comment_id`, `smile_product_id`, `smile_comment_user_name`, `smile_comment_description`, `smile_comment_product_rating_status`, `smile_comment_publication_status`, `smile_comment_publication_date`) VALUES
(1, 21, 'Riyad', 'I think this product rate should be less than 1000...', 3, 1, '2014-10-21 13:41:19'),
(2, 21, 'Saiful', 'Nice Model', 4, 1, '2014-10-21 13:41:44'),
(3, 17, 'Babu', 'I want to buy this mobile set...', 5, 0, '2014-10-21 13:42:11'),
(4, 9, 'Annika', 'I like this.. How I buy this online', 5, 1, '2014-10-21 13:43:19'),
(5, 7, 'Nina', 'Nice Mobile', 3, 0, '2014-10-21 13:43:40'),
(6, 0, '0', '0', 0, 0, '2015-04-23 15:56:04'),
(7, 17, '', '', 3, 0, '2015-06-23 17:15:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_rest_header_category`
--

CREATE TABLE `tbl_smile_rest_header_category` (
  `smile_rest_header_id` int(4) NOT NULL,
  `smile_rest_header_category_name` varchar(20) NOT NULL,
  `smile_rest_header_cateogry_description` text NOT NULL,
  `smile_rest_header_cateogry_publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_rest_header_category`
--

INSERT INTO `tbl_smile_rest_header_category` (`smile_rest_header_id`, `smile_rest_header_category_name`, `smile_rest_header_cateogry_description`, `smile_rest_header_cateogry_publication_status`) VALUES
(1, 'Compare', '', 1),
(2, 'Finding Offer', '', 1),
(3, 'Affiliates', '', 1),
(4, 'Contact Us', '', 1),
(5, 'Nothing', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_shipping_details`
--

CREATE TABLE `tbl_smile_shipping_details` (
  `shipping_id` int(10) NOT NULL,
  `smile_customer_id` int(11) NOT NULL,
  `shipping_name` varchar(55) NOT NULL,
  `shipping_email_address` varchar(100) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shipping_city` varchar(28) NOT NULL,
  `company` varchar(50) NOT NULL,
  `shipping_country` varchar(6) NOT NULL,
  `postal_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_shipping_details`
--

INSERT INTO `tbl_smile_shipping_details` (`shipping_id`, `smile_customer_id`, `shipping_name`, `shipping_email_address`, `mobile_no`, `address`, `shipping_city`, `company`, `shipping_country`, `postal_code`) VALUES
(1, 1, 'RIYAD Khan', 'altufaltu54@gmail.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BD', '1100'),
(2, 2, 'Saiful Ahmed', 'saiful@smilemobilebd.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BB', '1100'),
(3, 7, 'Maria Jahan', 'maria@gmail.com', '0187654328', '12no.abdullah pur, Dhaka', 'Dhaka', 'Nai', 'BD', '1209'),
(4, 1, 'RIYAD Khan', 'altufaltu54@gmail.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BD', '1100'),
(5, 2, 'Saiful Ahmed', 'saiful@smilemobilebd.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BB', '1100'),
(6, 3, 'Abdullah Barek', 'barek@gmail.com', '01759949595', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BY', '1105'),
(7, 4, 'Nayem Nahar', 'nayem@gmail.com', '01759949595', '26no, Hemendra dash Road Sutrapur, Dhaka', 'Dhaka', 'Speedbone', 'BS', '1105'),
(8, 1, 'RIYAD Khan', 'altufaltu54@gmail.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BD', '1100'),
(9, 1, 'RIYAD Khan', 'altufaltu54@gmail.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BD', '1100'),
(10, 41, 'rubel hasan', 'rubelhasan1030@gmail.com', '01676494110', 'house-304, airport road, banani', 'dhaka', 'smilemobile', 'BD', '1213'),
(11, 66, 'riyad islam', 'khondakar22readul@yahoo.com', '01776457394', '112/1, Crescent Road, ', 'Dhaka', '', 'BD', '1205'),
(12, 2, 'Saiful Ahmed', 'saiful@smilemobilebd.com', '01719172313', '59No, Hemendra Dash Road, Sutrapur, Dhaka-1100.', 'Dhaka', 'Speedbone', 'BB', '1100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_smile_sub_menu_bar_category`
--

CREATE TABLE `tbl_smile_sub_menu_bar_category` (
  `smile_sub_menubar_category_id` int(5) NOT NULL,
  `smile_menubar_category_id` int(6) NOT NULL,
  `smile_sub_menubar_category_name` varchar(25) NOT NULL,
  `smile_sub_menubar_category_description` text NOT NULL,
  `smile_sub_menubar_category_publication_status` tinyint(1) NOT NULL COMMENT 'For Publication Status=1, Published and For Publication Status=0, Unpublished'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_smile_sub_menu_bar_category`
--

INSERT INTO `tbl_smile_sub_menu_bar_category` (`smile_sub_menubar_category_id`, `smile_menubar_category_id`, `smile_sub_menubar_category_name`, `smile_sub_menubar_category_description`, `smile_sub_menubar_category_publication_status`) VALUES
(1, 1, 'Classic', '', 1),
(2, 1, 'Touch', '', 1),
(3, 1, 'Anroid', '', 1),
(4, 1, 'Style', '', 1),
(5, 1, 'WVGA Display', '', 1),
(6, 1, 'HVGA Display', '', 1),
(7, 1, 'Tablet', '', 1),
(8, 1, 'Laptop', '', 0),
(10, 1, 'Notpad', '', 0),
(11, 2, 'Self News', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_smile_add_about_us_page`
--
ALTER TABLE `tbl_smile_add_about_us_page`
  ADD PRIMARY KEY (`smile_page_info_id`);

--
-- Indexes for table `tbl_smile_add_banner_slider`
--
ALTER TABLE `tbl_smile_add_banner_slider`
  ADD PRIMARY KEY (`smile_banner_id`);

--
-- Indexes for table `tbl_smile_add_logo`
--
ALTER TABLE `tbl_smile_add_logo`
  ADD PRIMARY KEY (`smile_logo_id`);

--
-- Indexes for table `tbl_smile_add_product`
--
ALTER TABLE `tbl_smile_add_product`
  ADD PRIMARY KEY (`smile_product_id`);

--
-- Indexes for table `tbl_smile_admin_user`
--
ALTER TABLE `tbl_smile_admin_user`
  ADD PRIMARY KEY (`smile_admin_user_id`);

--
-- Indexes for table `tbl_smile_contact_us_page`
--
ALTER TABLE `tbl_smile_contact_us_page`
  ADD PRIMARY KEY (`smile_contact_us_page_id`);

--
-- Indexes for table `tbl_smile_customer`
--
ALTER TABLE `tbl_smile_customer`
  ADD PRIMARY KEY (`smile_customer_id`);

--
-- Indexes for table `tbl_smile_customer_contact_address_for_enquiry`
--
ALTER TABLE `tbl_smile_customer_contact_address_for_enquiry`
  ADD PRIMARY KEY (`smile_enquiry_id`);

--
-- Indexes for table `tbl_smile_header_category`
--
ALTER TABLE `tbl_smile_header_category`
  ADD PRIMARY KEY (`smile_header_category_id`);

--
-- Indexes for table `tbl_smile_menubar_category`
--
ALTER TABLE `tbl_smile_menubar_category`
  ADD PRIMARY KEY (`smile_menubar_category_id`);

--
-- Indexes for table `tbl_smile_order`
--
ALTER TABLE `tbl_smile_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `tbl_smile_order_details`
--
ALTER TABLE `tbl_smile_order_details`
  ADD PRIMARY KEY (`order_details_id`);

--
-- Indexes for table `tbl_smile_payment_details`
--
ALTER TABLE `tbl_smile_payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_smile_product_comment`
--
ALTER TABLE `tbl_smile_product_comment`
  ADD PRIMARY KEY (`smile_comment_id`);

--
-- Indexes for table `tbl_smile_rest_header_category`
--
ALTER TABLE `tbl_smile_rest_header_category`
  ADD PRIMARY KEY (`smile_rest_header_id`);

--
-- Indexes for table `tbl_smile_shipping_details`
--
ALTER TABLE `tbl_smile_shipping_details`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `tbl_smile_sub_menu_bar_category`
--
ALTER TABLE `tbl_smile_sub_menu_bar_category`
  ADD PRIMARY KEY (`smile_sub_menubar_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_smile_add_about_us_page`
--
ALTER TABLE `tbl_smile_add_about_us_page`
  MODIFY `smile_page_info_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_smile_add_banner_slider`
--
ALTER TABLE `tbl_smile_add_banner_slider`
  MODIFY `smile_banner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_smile_add_logo`
--
ALTER TABLE `tbl_smile_add_logo`
  MODIFY `smile_logo_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_smile_add_product`
--
ALTER TABLE `tbl_smile_add_product`
  MODIFY `smile_product_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_smile_admin_user`
--
ALTER TABLE `tbl_smile_admin_user`
  MODIFY `smile_admin_user_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_smile_contact_us_page`
--
ALTER TABLE `tbl_smile_contact_us_page`
  MODIFY `smile_contact_us_page_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_smile_customer`
--
ALTER TABLE `tbl_smile_customer`
  MODIFY `smile_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `tbl_smile_customer_contact_address_for_enquiry`
--
ALTER TABLE `tbl_smile_customer_contact_address_for_enquiry`
  MODIFY `smile_enquiry_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_smile_header_category`
--
ALTER TABLE `tbl_smile_header_category`
  MODIFY `smile_header_category_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_smile_menubar_category`
--
ALTER TABLE `tbl_smile_menubar_category`
  MODIFY `smile_menubar_category_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_smile_order`
--
ALTER TABLE `tbl_smile_order`
  MODIFY `order_id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_smile_order_details`
--
ALTER TABLE `tbl_smile_order_details`
  MODIFY `order_details_id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_smile_payment_details`
--
ALTER TABLE `tbl_smile_payment_details`
  MODIFY `payment_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_smile_product_comment`
--
ALTER TABLE `tbl_smile_product_comment`
  MODIFY `smile_comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_smile_rest_header_category`
--
ALTER TABLE `tbl_smile_rest_header_category`
  MODIFY `smile_rest_header_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_smile_shipping_details`
--
ALTER TABLE `tbl_smile_shipping_details`
  MODIFY `shipping_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_smile_sub_menu_bar_category`
--
ALTER TABLE `tbl_smile_sub_menu_bar_category`
  MODIFY `smile_sub_menubar_category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
