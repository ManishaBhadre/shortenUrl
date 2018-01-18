
//Database entries

-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 11:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `short`
--

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE IF NOT EXISTS `urls` (
  `id` int(10) NOT NULL,
  `link_to_page` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`id`, `link_to_page`) VALUES
(122, 'https://www.w3schools.com/bootstrap/bootstrap_jumbotron_header.asp'),
(126, 'https://www.olx.in/item/computer-motherboards-with-processor-and-ram-ID1hm5nz.html#a50fb1e6cd'),
(167, 'https://www.apple.com/in/iphone-x/'),
(177, 'https://www.w3schools.com/jquery/jquery_selectors.asp'),
(197, 'https://www.w3schools.com/js/js_assignment.asp'),
(264, 'https://www.w3schools.com/bootstrap/bootstrap_wells.asp'),
(269, 'https://www.w3schools.com/graphics/google_maps_overlays.asp'),
(276, 'https://www.olx.in/computers-laptops/'),
(300, 'https://www.flipkart.com/lenovo-mobile-phones-store?otracker=nmenu_sub_Electronics_0_Lenovo'),
(302, 'http://htmlcolorcodes.com/'),
(320, 'https://www.w3schools.com/Jquery/default.asp'),
(370, 'https://www.flipkart.com/search?count=40&otracker=CLP_filters&p%5B%5D=facets.features%255B%255D%3DSmart%2BTV&p%5B%5D=facets.resolution%255B%255D%3DUltra%2BHD%2B%25284K%2529&sid=ckf%2Fczl&otracker=nmenu_sub_Appliances_0_Smart%20and%20Ultra%20HD'),
(428, 'https://www.pixar.com/#home-coco'),
(434, 'https://www.flipkart.com/mobile-phones-store?otracker=nmenu_sub_Electronics_0_Mobiles'),
(450, 'https://www.w3schools.com/bootstrap/bootstrap_images.asp'),
(455, 'https://www.amazon.com/'),
(465, 'https://www.google.co.in/search?q=learn+english&oq=lern+&aqs=chrome.1.69i57j0l5.4758j0j7&sourceid=chrome&ie=UTF-8'),
(509, 'https://www.flipkart.com/lenovo-k8-plus-fine-gold-32-gb/p/itmex9kpqjfgwbkq?pid=MOBEWN63NBDSMVPG&fm=neo/merchandising&iid=M_4b64cec9-b802-49c9-8917-d2f963bc5da2_1_9QHTSBZJ6X_MC.MOBEWN63NBDSMVPG&otracker=clp_pmu_v2_Lenovo+Mobiles+under+%E2%82%B910K_2_lenov-categ-1f137_Lenovo+K8+Plus+%28Fine+Gold%2C+32+GB%29_lenovo-mobile-phones-store_MOBEWN63NBDSMVPG_neo/merchandising_1&cid=MOBEWN63NBDSMVPG'),
(536, 'https://www.flipkart.com/oppo-mobile-phones-store?otracker=nmenu_sub_Electronics_0_OPPO'),
(587, 'https://www.w3schools.com/bootstrap/bootstrap_modal.asp'),
(622, 'https://www.flipkart.com/kitchen-and-dining-store?otracker=nmenu_sub_Home%20and%20Furniture_0_Kitchen%20and%20Dining'),
(695, 'https://www.tutorialspoint.com/cprogramming/c_program_structure.htm'),
(698, 'https://www.tutorialspoint.com/cprogramming/c_arrays.htm'),
(765, 'https://www.flipkart.com/mobiles/mi~brand/pr?sid=tyy,4io&otracker=nmenu_sub_Electronics_0_Mi'),
(841, 'https://www.magicbricks.com/'),
(874, 'https://www.w3schools.com/bootstrap/bootstrap_typography.asp'),
(877, 'https://www.olx.in/real-estate/categories/'),
(887, 'https://www.google.co.in/?gfe_rd=cr&dcr=0&ei=sktfWqamA-Ty8Afi_7mwCA'),
(920, 'https://www.w3schools.com/bootstrap/tryit.asp?filename=trybs_table_bordered&stacked=h'),
(971, 'https://www.webpagefx.com/web-design/color-picker/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
