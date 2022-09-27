-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 11:07 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_jewellerystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`, `mobile`, `fullname`) VALUES
('admin', 'arush@gmail.com', '123', 1234567890, 'arush mandal'),
('superadmin', 'ram@gmail.com', '111', 1234567890, 'ram kumar');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `grandtotal` float NOT NULL,
  `datetime` datetime NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `address` text NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `trackingid` int(6) DEFAULT NULL,
  `companyname` varchar(100) DEFAULT NULL,
  `trackingurl` varchar(300) DEFAULT NULL,
  `trackremarks` varchar(500) DEFAULT NULL,
  `personreceived` varchar(500) DEFAULT NULL,
  `returnremarks` varchar(1000) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `grandtotal`, `datetime`, `paymentmethod`, `city`, `zipcode`, `address`, `remarks`, `status`, `trackingid`, `companyname`, `trackingurl`, `trackremarks`, `personreceived`, `returnremarks`, `email`) VALUES
(4, 180.12, '2020-02-13 16:48:14', 'Online', 'Amritsar', 122211, 'angarh', 'abc', 'pending', 111111111, 'blue dart', 'http://www.yahoo.com', 'no entry', 'pandey', '', 'arvind@gmail.com'),
(6, 51143.3, '2020-02-13 16:49:58', 'Online', 'Chandigarh', 123444, 'ANGARH', 'abc', 'shipped', 789456123, 'DHFL', 'http://172.16.0.5', 'chako', '', '', 'arvind@gmail.com'),
(7, 390100, '2020-02-13 16:54:42', 'cash', 'Pathankot', 223222, 'qwerrrtt', 'no no ', 'pending', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(8, 233011, '2020-02-13 16:56:08', 'Online', 'Ajnala', 111111, 'vadi', 'dsdd', 'pending', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(10, 396291, '2020-02-13 16:58:22', 'Online', 'Ludhiana', 123213, 'moni chowk', 'xdca', 'pending', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(12, 780200, '2020-02-13 17:00:25', 'Online', 'Kharar', 111212, 'xyz', '', 'pending', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(13, 2712200, '2020-02-13 17:43:21', 'Online', 'Rajpura', 424444, 'sadd', 'wrewrer', 'cancelled', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(14, 232680, '2020-02-13 18:03:27', 'cash', 'Panchkula', 145878, 'sfsdf', 'no need', 'cancelled', NULL, '', '', '', '', '', 'user@yahoo.com'),
(15, 145809, '2020-02-14 13:11:27', 'Online', 'Kharar', 421745, 'Mall Road Amritsar 143001	', 'Et adipisicing dignissimos deleniti aut non officia aut esse doloribus deleniti eius incididunt in', 'pending', NULL, '', '', '', '', '', 'arvind@gmail.com'),
(17, 33250, '2021-11-13 11:50:48', 'Online', 'Amritsar', 143001, 'Mall Road', 'nothing', 'pending', NULL, '', '', '', '', '', 'user@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `billforrent`
--

CREATE TABLE `billforrent` (
  `id` int(11) NOT NULL,
  `grandtotal` float NOT NULL,
  `dateoforderplaced` date NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `paymentmethod` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` int(6) NOT NULL,
  `address` text NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `trackingid` int(6) DEFAULT NULL,
  `companyname` varchar(100) NOT NULL,
  `trackingurl` varchar(300) NOT NULL,
  `trackremarks` varchar(500) NOT NULL,
  `personreceived` varchar(500) NOT NULL,
  `returnremarks` varchar(500) NOT NULL,
  `returnstatus` varchar(1000) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billforrent`
--

INSERT INTO `billforrent` (`id`, `grandtotal`, `dateoforderplaced`, `from`, `to`, `paymentmethod`, `city`, `zipcode`, `address`, `remarks`, `status`, `trackingid`, `companyname`, `trackingurl`, `trackremarks`, `personreceived`, `returnremarks`, `returnstatus`, `email`) VALUES
(4, 6800, '0000-00-00', '2020-04-23', '2020-04-15', 'Online', 'Jalandhar', 365818, 'Sed culpa ullamco re', 'Porro qui voluptatem', 'delievered', 165874, 'Sargent and James Trading', 'Porro esse quia vel ', 'Consequat Nobis duc', 'manish ', '', 'returned', 'arvind@gmail.com'),
(5, 67500, '0000-00-00', '2020-04-16', '2020-04-16', 'Online', 'Pathankot', 562027, 'Veniam consectetur', 'Reprehenderit non et', 'cancelled', NULL, '', '', '', '', 'nahi chahida', 'returned', 'arvind@gmail.com'),
(6, 40500, '0000-00-00', '2020-04-16', '2020-04-16', 'Online', 'Pathankot', 122498, 'Eos dolor dolorem pl', 'Veniam ratione reru', 'delievered', 685771, 'Spencer and Patton LLC', 'Dicta inventore porr', 'Et omnis quia proide', 'Raman', '', 'pending', 'arvind@gmail.com'),
(7, 93594, '0000-00-00', '2020-04-16', '2020-04-19', 'Online', 'Ludhiana', 193078, 'Qui qui fuga Neque ', 'Nihil at quia sint c', 'recieved', NULL, '', '', '', '', '', 'returned', 'arvind@gmail.com'),
(8, 40600, '2020-04-15', '2020-04-16', '2020-04-30', 'cash', 'Pathankot', 784004, 'Voluptate accusamus ', 'Illum dolores excep', 'pending', NULL, '', '', '', '', '', 'pending', 'arvind@gmail.com'),
(10, 77000, '2020-04-15', '2020-04-17', '2020-04-28', 'cash', 'Panchkula', 785344, 'Natus voluptas quisq', 'Quas odit omnis at q', 'pending', NULL, '', '', '', '', '', 'pending', 'arvind@gmail.com'),
(11, 3600, '2020-04-15', '2020-04-24', '2020-04-27', 'Online', 'Rajpura', 473125, 'At veniam et magni ', 'Sint adipisicing mol', 'pending', NULL, '', '', '', '', '', 'pending', 'arvind@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `price` float NOT NULL,
  `discount` int(10) NOT NULL,
  `netprice` float(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `billid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `price`, `discount`, `netprice`, `quantity`, `productid`, `billid`) VALUES
(5, 474, 81, 90.06, 2, 2, 4),
(6, 39341, 35, 25571.65, 2, 6, 6),
(7, 696607, 44, 390099.91, 1, 7, 7),
(8, 512265, 86, 71717.10, 3, 15, 8),
(9, 99220, 91, 8929.80, 2, 19, 8),
(10, 675771, 72, 189215.88, 2, 16, 10),
(11, 99220, 91, 8929.80, 2, 19, 10),
(12, 696607, 44, 390099.91, 2, 7, 12),
(13, 704819, 67, 232590.27, 9, 3, 13),
(14, 939954, 45, 516974.69, 1, 4, 13),
(15, 474, 81, 90.06, 1, 2, 13),
(16, 678839, 85, 101825.85, 1, 11, 13),
(17, 704819, 67, 232590.27, 1, 3, 14),
(18, 474, 81, 90.06, 1, 2, 14),
(19, 512265, 86, 71717.10, 2, 15, 15),
(24, 35000, 5, 33250.00, 1, 4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryname` varchar(100) NOT NULL,
  `categorydescription` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryname`, `categorydescription`) VALUES
('Artificial', 'Buy Artificial Jewellery. Let Your Necklace Grab All The Attention'),
('Diamond', ' Diamond is a solid form of the element carbon with its atoms arranged in a crystal structure called diamond cubic. At room temperature and pressure, another solid form of carbon known as graphite is the chemically stable form, but diamond almost never converts to it. Diamond has the highest hardness and thermal conductivity of any natural material, properties that are utilized in major industrial applications such as cutting and polishing tools. They are also the reason that diamond anvil cells can subject materials to pressures found deep in the Earth.\r\nBecause the arrangement of atoms in diamond is extremely rigid, few types of impurity can contaminate it . Small numbers of defects or impurities  col'),
('Diamond Touch Originals', 'Et dicta id dolore v'),
('gold', ' Gold is a chemical element with the symbol Au  and atomic number 79, making it one of the highest atomic number elements that occur naturally. In its purest form, it is a bright, slightly reddish yellow, dense, soft, malleable, and ductile metal. Chemically, gold is a transition metal and a group 11 element. It is one of the least reactive chemical elements and is solid under standard conditions. Gold often occurs in free elemental  form, as nuggets or grains, in rocks, in veins, and in alluvial deposits. It occurs in a solid solution series with the native element silver  and also naturally alloyed with copper and palladium. Less commonly, it occurs in minerals as gold compounds, often with tellurium'),
('Platinum', 'Animi possimus cul Animi possimus culAnimi possimus cul Animi possimus cul'),
('Vivah Collections', ' Molestias commodo apMolestias commodo ap Molestias commodo ap Molestias commodo ap Molestias commodo ap Molestias commodo ap Molestias commodo ap Molestias commodo ap');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `rentpriceperday` float NOT NULL,
  `stock` int(10) NOT NULL,
  `discount` int(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `subcatid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `price`, `rentpriceperday`, `stock`, `discount`, `photo`, `description`, `subcatid`) VALUES
(2, 'Theodore Navarro', 474, 40, 250, 10, 'photos/product-6.jpg', 'Vero veniam, soluta quod soluta id corporis qui et aut ut mollit amet, ut est, eiusmod duis qui delectus, lorem quod laboriosam, laborum eiusmod facilis dolor.', 35),
(3, 'Gold 2gm 24kt Gold Coin', 20000, 7000, 100, 5, 'photos/3211600102ZNARAP00_1.jpg', 'Deleniti vel in et rerum corporis earum consequatur cum non sint consequatur, vel in aute commodo perferendis id, adipisicing tempore, vel sint, cillum a rerum velit, voluptate corporis earum eum quia.', 3),
(4, 'Violetta Amethyst Drop Earnings', 35000, 9300, 329, 5, 'photos/4132close-up-photography-of-blue-earrings-1413420.jpg', 'Dolores dolores fugit, aliquid et dolores voluptatem distinctio. Eveniet, necessitatibus ex mollitia excepturi nulla alias quia facilis aut aliquam voluptatem. Accusantium dolor quo aut molestiae even.', 4),
(5, 'Gold Zeta Citrine Drop Earrings', 36599, 3600, 17, 5, 'photos/2750g2.jpg', 'Aut et delectus, tempore, corrupti, dolor aut ut ullamco voluptate laborum aliquip sint, assumenda ullamco eum cum sapiente neque culpa minima omnis voluptatibus omnis aute at eligendi natus quidem cu.', 4),
(6, 'Gold Patrice Ruby Pendants', 39341, 300, 394, 5, 'photos/6656g3.jpg', 'Adipisci reprehenderit, veniam, laboriosam, voluptatum voluptatum laudantium.', 5),
(7, 'Gold Yellow Gold Citrine Pendants', 696607, 6900, 500, 5, 'photos/5196heart-2867205_1920.jpg', 'Sunt in deserunt quis adipisicing nulla suscipit sit, autem ut eos assumenda culpa sunt quidem inventore velit, est, aut et alias debitis ullam nostrum repudiandae consectetur, enim aliqua. Quam aliqu.', 5),
(8, 'Gold Nayah Ruby Finger Rings', 589379, 5800, 828, 5, 'photos/4647closeup-photography-of-clear-jeweled-gold-colored-cluster-1232931.jpg', 'Vero occaecat quo omnis sint, repudiandae quasi nihil non itaque aperiam at pariatur. Incidunt, et architecto eveniet, quaerat labore ut sed et veniam, in quo dolorem voluptas cillum accusamus laborum.', 6),
(9, 'Gold Linda Ruby Finger Rings', 899326, 8900, 816, 5, 'photos/1437home1-slide1.jpg', 'Dolorem fugiat dolores dolores ab irure consequatur? Culpa quis animi, quis qui tempore, accusantium eu est sint non amet, et quidem sapiente nemo ab molestiae consectetur voluptas quo neque ea maiore.', 6),
(10, 'Gold Rikita Ruby Bangles', 702873, 7000, 29, 5, 'photos/9825banner4.jpg', 'Sint.', 7),
(11, 'Gold Tiana Ruby Bangles', 678839, 6700, 437, 5, 'photos/100black-and-white-close-up-jewellery-jewelry-265906.jpg', 'Beatae et dolor voluptas aut architecto voluptatum.', 7),
(12, 'Gold 18kt Chains', 31170, 3100, 193, 5, 'photos/8098photo-of-gold-make-up-brushes-and-necklace-735276.jpg', 'Est, aute eum est adipisicing saepe necessitatibus quia quia a suscipit magna labore lorem id anim aut eligendi vitae quia commodi occaecat saepe dolores temporibus consequatur, ex dolores ut velit du.', 8),
(13, 'Gold 22kt Chains', 685125, 6800, 991, 5, 'photos/2264img5-middle.jpg', 'Ea consequatur, do cumque dignissimos libero pariatur. Eveniet, sint in ut sed voluptatem, quam voluptate dolor nihil tenetur dolore sed qui esse minim praesentium hic itaque eius omnis mollit ab aut .', 8),
(14, 'Gold 22kt Pendant with chain', 841658, 8400, 552, 5, 'photos/5470home4-slider1.jpg', 'Consequatur et perspiciatis, ut in totam laborum. Earum nisi officia debitis totam neque nulla aliquid in eius ducimus, sint illo incidunt, itaque fugiat, reiciendis ex unde inventore eum lorem facere.', 9),
(15, 'Gold 18kt Pendant with chain', 512265, 5100, 815, 5, 'photos/4478img3-middle.jpg', 'Consequuntur sequi dolore consequatur, sint suscipit.', 9),
(16, 'Gold 22kt Bracelets', 675771, 6700, 956, 5, 'photos/7147banner4.jpg', 'Dolor necessitatibus reiciendis quo quis a sit modi ipsum sed repudiandae eius atque est laudantium, officia eu et incidunt, sed quaerat ut minus praesentium eaque illo quos facere aliquip commodi com.', 10),
(17, 'Gold 22kt Yellow Bracelets', 10631, 1000, 55, 5, 'photos/2578product-10.jpg', 'Duis et aut saepe occaecat sit, voluptatem odio labore in voluptates consectetur, omnis sit, quam reprehenderit, est, ut asperiores officia quia est id, nisi dolor quas dolor ratione ea qui laborum. V.', 10),
(18, 'Gold Aricia Ruby Neckwear set', 132879, 1600, 685, 5, 'photos/7210diamond-silver-colored-ring-750148.jpg', 'Cumque a ab est, nihil reiciendis id, dolorem vero duis culpa, ipsa, obcaecati ullamco non quam eius consequatur culpa non Nam non laboriosam, numquam eum rerum eaque aut et consectetur, beatae qui ea.', 11),
(19, 'Gold Valerie Ruby Neckwear set', 99220, 5000, 354, 5, 'photos/9106g7.jpg', 'Sed modi excepturi aliqua. Est, recusandae. Sit, irure totam voluptatem, et consectetur, itaque elit, optio, pariatur? In numquam quibusdam.', 11),
(20, 'Gold 22kt Mangalsutra', 883190, 8400, 997, 5, 'photos/9431home4-slider3.jpg', 'Et cupidatat atque quia quia.', 13),
(21, 'Gold Lyra Ruby Pendant and Earrings set', 707338, 7000, 167, 5, 'photos/2871adv1.jpg', 'Nobis maiores doloremque ut officia debitis in aut in rerum nihil numquam inventore voluptatem nostrum elit, nihil corrupti.', 12),
(22, 'Gold Mannat Ruby Pendant and Earrings set', 912528, 9300, 664, 5, 'photos/6696blog1.jpg', 'Libero qui autem et officiis dolorem officia ipsa, consequatur deserunt asperiores illum, in eum soluta fugit, sed rerum expedita eos, aliqua. Dolor saepe aute sed voluptatem voluptates asperiores ess.', 12),
(24, 'Gold 24kt Mangalsutra', 525065, 5280, 220, 5, 'photos/7547blog14.jpg', 'Beatae reprehenderit ex aut enim officia lorem unde eligendi velit sint quia fugiat, blanditiis non a quidem ex accusantium culpa, ducimus, quo do maxime eiusmod perspiciatis, sunt excepteur sint, quo.', 13),
(25, 'Gold Kumuda Emerald Neckwear', 208474, 1800, 441, 5, 'photos/6755insta5.jpg', 'Officia tempora commodo laboris itaque est eiusmod veritatis qui velit libero pariatur? Minim mollitia adipisicing dolor ea itaque minima qui quidem qui veniam, animi, cillum omnis quae possimus, volu.', 14),
(26, 'Gold Meena Ruby Neckwear', 617120, 9877, 852, 5, 'photos/9508category5.png', 'Laboris reprehenderit, ea a eum est officia nostrud et quo tempora dolor ea autem dolorum rerum et ea lorem culpa ex rem qui esse, et laboris eum irure provident, exercitationem harum incididunt minim.', 14),
(27, 'Gold 18kt Nose Pin', 766825, 4888, 827, 5, 'photos/1045product10.jpg', 'Lorem necessitatibus excepturi quibusdam quis nulla incididunt sit, inventore dolor voluptas.', 15),
(28, 'Gold 22kt Nose Pin', 180125, 4444, 134, 5, 'photos/7407category8.png', 'Cupidatat aperiam est qui dolores totam sit perferendis alias officiis suscipit a et illum, amet, consequatur, nihil error ut quod qui incididunt ducimus, aut aut non veniam, anim debitis aut veniam, .', 15),
(29, 'Diamond Nalini Sapphire Stud Earrings', 824525, 5888, 441, 5, 'photos/2537img2-top.jpg', 'Minima non quia eiusmod nesciunt, velit, ipsum, eos, repudiandae quis et ad corporis et quo cupidatat impedit, consectetur, dolor lorem dolore dolorem impedit, cupidatat nihil unde ea cumque sint id o.', 16),
(30, 'Diamond Kendall Amethyst Hoop Earrings', 56960, 5585, 534, 5, 'photos/5016blog13.jpg', 'Architecto excepturi officia possimus, perspiciatis, id sit, sint numquam voluptates non nisi sint rerum deleniti totam eos, omnis voluptatem. Ipsa, veritatis sit, et nisi dolorem maiores ab Nam cumqu.', 16),
(31, 'Diamond 18kt Pendants', 648854, 9744, 973, 5, 'photos/6588deal7.jpg', 'Nobis expedita sed voluptas Nam quam et consectetur, pariatur. Pariatur. Earum sunt similique soluta nostrum neque ducimus, veritatis nisi quae quis magni irure cupiditate ipsa, exercitationem tenetur.', 17),
(32, 'Diamond Zephyr Emerald Finger rings', 280133, 7458, 258, 5, 'photos/9446blog4.jpg', 'Enim aut ducimus, amet, ex reprehenderit harum omnis laborum. Minim modi quaerat ex molestiae et consequuntur soluta non culpa quasi asperiores optio, ad eius nobis est architecto aut aut quo ex et ex.', 18),
(33, 'Diamond Kyla Topaz Finger rings', 545689, 9654, 268, 5, 'photos/1409category2.png', 'Suscipit earum excepteur quia eveniet, voluptatem, expedita et culpa, distinctio. Voluptatem, dolore et ex laboris quos illum, at suscipit sunt laborum. Pariatur? Ea optio, animi, accusantium enim mol.', 18),
(34, 'Diamond Swirls Bracelets', 548553, 4879, 471, 5, 'photos/7640category1.png', 'Eiusmod dolores dolor qui doloribus dolore quis aut et ab labore aliqua. Tempora est, dolores totam non similique nesciunt, officia nulla sequi corrupti, modi ea tenetur dolores minima assumenda qui h.', 19),
(35, 'Diamond Rusha Bracelets', 358060, 5687, 23, 5, 'photos/8933category3.png', 'Amet, sed quam quae rerum rerum iste quia voluptatem. Tempor do consectetur in laboris minim voluptas voluptatem quo quis ut accusantium et voluptas corrupti, aliqua. Sint repudiandae architecto paria.', 19),
(36, 'Diamond 18kt Chains', 758909, 2578, 43, 5, 'photos/4577category9.png', 'Quos itaque sed eum voluptates aut omnis eligendi nisi dolor eiusmod quasi reprehenderit, in laudantium, nostrud temporibus excepturi cupidatat est laboriosam, voluptatum est, molestias est, mollit di.', 20),
(37, 'Diamond Classic Cable Chains', 711477, 7784, 203, 5, 'photos/5089product3.jpg', 'Voluptas quos sint mollitia nostrud asperiores modi alias non facilis esse voluptas perferendis ipsum recusandae. Facere aut magnam a dignissimos a odio officia dolor quis est atque.', 20),
(38, 'Diamond Zainab Ruby Neckwear', 639884, 4545, 933, 5, 'photos/4389blog12.jpg', 'Minus ut amet, et do in ea sunt, tempora unde quia harum error aut est, amet, in molestiae laborum molestias magni voluptas repellendus. Accusamus sed quas quis eiusmod aut sed praesentium dolore comm.', 21),
(39, 'Diamond Charming Neckwear', 50727, 8755, 222, 5, 'photos/2047blog5.jpg', 'Molestias cupiditate maxime excepteur deleniti molestiae sunt sed est, eos, non quos similique et eiusmod et amet, adipisci sint, qui repudiandae voluptate magna corporis consequatur vero quidem sit, .', 21),
(40, 'Diamond Nayana Ruby Pendant and Earrings set', 654408, 7855, 187, 5, 'photos/423deal4.jpg', 'Quia doloremque velit nulla dignissimos at temporibus quia deserunt ea ratione dolore iusto optio, quae ipsa, commodi irure et corporis quidem unde amet, animi, recusandae. Consectetur vel est laborio.', 22),
(41, 'Diamond Neisha Pendant and Earrings set', 884598, 6784, 853, 5, 'photos/5675deal2.jpg', 'Velit ex cupidatat sed voluptatibus eum fugiat, animi, voluptate explicabo. Nisi nostrud est, beatae vel doloremque voluptatum corporis quia laborum. Anim do nulla aliqua. Fugiat, voluptatem assumenda.', 22),
(42, 'Diamond Samaara  Mangalsutra', 543000, 7847, 287, 5, 'photos/7502insta3.jpg', 'Incidunt, iusto laudantium, reiciendis debitis et aute quia totam officia velit, aut esse nihil voluptate quo qui officia et excepturi laudantium, voluptas deleniti molestiae vitae voluptatum non mini.', 23),
(43, 'Diamond Masoom Leaf Stud Mangalsutra', 922359, 15000, 362, 5, 'photos/9314deal1.jpg', 'Sed anim enim rerum ut omnis quas dolorem enim mollit sequi recusandae. Quas duis eius aut consectetur, quis quo omnis et officia animi, qui maiores.', 23),
(44, 'Diamond Anjuma Nose Pin', 44964, 2000, 387, 5, 'photos/7142eleni-koureas-0Hv7W_p410w-unsplash.jpg', 'Sed laboriosam, sit nihil rem minima omnis inventore perspiciatis, quas officiis odit proident, voluptate nulla aperiam et occaecat in.', 24),
(45, 'Diamond Aliz Nose Pin', 297583, 9748, 355, 5, 'photos/5958gold-wedding-bands-265730.jpg', 'Qui nihil vitae rerum quisquam qui ducimus, sapiente proident, voluptatem. Non adipisicing minima unde iste consequatur? Aut iste ullamco corrupti, aut est, rerum nesciunt, excepteur qui ipsa, cumque .', 24),
(46, 'Diamond Maura Pendant with chain', 902040, 4500, 777, 5, 'photos/6631deal6.jpg', 'Delectus, consequatur? Et magni sit, ratione do unde laboriosam, aliquid culpa magni et dolore reiciendis sint cupiditate quia quidem ea excepteur neque voluptate ipsa, aut eveniet, sint dolore dolor .', 25),
(47, 'Diamond Amore Pendant with chain', 179349, 1700, 824, 5, 'photos/6771g9.jpg', 'Voluptatum minus nihil odio culpa, veritatis ad qui non aut est enim adipisicing voluptas molestiae aliqua. Magni blanditiis perspiciatis, perspiciatis, anim consequuntur velit suscipit necessitatibus.', 25),
(48, 'Platinum Kendall Amethyst Earrings', 259744, 9800, 892, 5, 'photos/7536mong-bui-rwb35vZTpBo-unsplash.jpg', 'Sit saepe mollit asperiores irure porro natus doloremque alias debitis qui minus aut quaerat voluptate harum repellendus. Odit voluptas unde officia adipisci dolor ut enim id earum assumenda explicabo.', 26),
(49, 'Platinum Senna Sapphire Earrings', 171200, 1200, 551, 5, 'photos/9634adv2.jpg', 'Est quis in aliquid blanditiis eum rem maxime accusamus perferendis est, perferendis eveniet, in quo eum voluptatibus officiis occaecat omnis porro ad labore provident, duis maxime animi, molestiae su.', 26),
(50, 'Platinum 18kt Pendants', 609114, 900, 689, 5, 'photos/1453camilla-carvalho-Y9dcQpOIMHQ-unsplash.jpg', 'Occaecat error voluptatibus irure placeat, tempora illo itaque ullam sint, in officia sit velit, ipsa, deleniti esse quod omnis autem quia voluptate ipsum, in nisi quaerat similique consectetur ducimu.', 27),
(51, 'Platinum Omyra Pendants', 536769, 3877, 563, 5, 'photos/9822g8.jpg', 'Maiores temporibus quibusdam fugit, sint aut aliqua. Doloribus sint, tempor voluptatem, nulla veniam, molestiae nemo perferendis irure quam est labore quam quis nisi dolore unde nisi autem et sint off.', 27),
(52, 'Platinum Gillian Citrine Finger Rings', 240265, 1545, 292, 5, 'photos/6978blog6.jpg', 'Illum, similique tempore, sed quas rerum nihil nihil et deleniti aliqua. Pariatur. Adipisci error duis et veniam, fugit, et eu sed unde tempor est minim facilis eiusmod facere possimus, beatae veritat.', 28),
(53, 'Platinum Mijana Finger Rings', 315871, 5555, 842, 5, 'photos/1106deal3.jpg', 'Est est, explicabo. Exercitationem in dicta in quia totam iusto porro illo fugiat iusto quas enim sed quisquam harum quaerat ex deleniti et et ea quia labore voluptatem sed exercitation consequatur? A.', 28),
(54, 'Platinum ila Nose  Pin Chains', 734955, 8891, 460, 5, 'photos/976home2-slide2.jpg', 'Facere ea ut eaque vel sunt, ad sed cupidatat voluptate fuga. Eius voluptatibus in quia magnam officiis assumenda totam sint adipisci ad et porro hic cum proident, voluptates quae sed voluptatem porro.', 29),
(55, 'Platinum Indrani Chains', 527310, 6987, 366, 5, 'photos/6165home4-slider1.jpg', 'Nostrud totam sed cupiditate aut aut elit, dolore consequuntur fugit, illo ducimus, quos vero incididunt voluptatem. Qui est dolore rerum id, do aliquam ratione illo tempor labore ipsam est, tempor fu.', 29),
(56, 'Vivah Collections 3819FJV Virasat', 437167, 7877, 764, 5, 'photos/3025img1-middle.jpg', 'Tenetur ipsa, cumque voluptatum voluptatem, cupiditate sunt, provident, sit, facilis omnis alias sunt, animi, mollit non sint ducimus, quia doloremque molestiae dolor quaerat aspernatur nisi libero te.', 38),
(57, 'Vivah Collections 27192BU Ahalya', 337740, 2588, 323, 5, 'photos/4338blog8.jpg', 'Aut nisi voluptates illum, fugiat, laboris fugiat molestiae atque minus sint qui eum culpa, temporibus in harum accusamus vel assumenda ea ea ad et voluptates rerum do cum fugit, ut excepturi nisi et .', 39),
(58, 'Vivah Collections 27192AW Swayahm', 361542, 4589, 410, 5, 'photos/7787home4-slider4.jpg', 'Dolorem quae sed neque ipsum molestiae exercitationem suscipit error culpa sequi expedita officiis consectetur, placeat, quis ad quis at possimus, nisi amet, enim excepturi consequat. Consectetur, eni.', 40),
(59, 'Vivah Collections 27192AX Preen', 493014, 8579, 640, 5, 'photos/7765category6.png', 'Hic quia illo expedita in et itaque quisquam obcaecati nulla quaerat incidunt, mollit excepteur iusto accusantium reiciendis rem suscipit porro quis ut magnam sint reiciendis dolores esse, ducimus, ap.', 41),
(60, 'Vivah Collections 27192BL Utsava', 504520, 8395, 514, 5, 'photos/5130img2-middle.jpg', 'Eveniet, nobis ad est laboris aliquam quia cumque eius facere maxime ut expedita doloremque similique laborum. Mollitia perspiciatis, harum corrupti, ab labore et natus quas anim alias nulla anim occa.', 42),
(61, 'Vivah Collections 27192BT Gulnaaz', 239809, 8895, 359, 5, 'photos/7315blog10.jpg', 'Numquam rem tempore, est maiores aut necessitatibus magnam repellendus. Ut et nulla corrupti, doloribus cupidatat deleniti nihil debitis ab pariatur? Ut aut ullamco quos cum porro incididunt et pariat.', 43);

-- --------------------------------------------------------

--
-- Table structure for table `product_photo`
--

CREATE TABLE `product_photo` (
  `id` int(10) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `caption` varchar(500) NOT NULL,
  `productid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rentbill_detail`
--

CREATE TABLE `rentbill_detail` (
  `id` int(11) NOT NULL,
  `rentprice` float(10,2) NOT NULL,
  `quantity` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `billid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rentbill_detail`
--

INSERT INTO `rentbill_detail` (`id`, `rentprice`, `quantity`, `productid`, `billid`) VALUES
(5, 42000.00, 1, 14, 5),
(6, 15300.00, 1, 15, 6),
(7, 25200.00, 1, 14, 6),
(8, 21000.00, 1, 21, 7),
(9, 13332.00, 1, 28, 7),
(10, 59262.00, 2, 26, 7),
(15, 23800.00, 1, 47, 8),
(16, 16800.00, 1, 49, 8),
(17, 77000.00, 1, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `mobile` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`email`, `password`, `fullname`, `mobile`) VALUES
('arvind@gmail.com', '123', 'Arvind', 1234567890),
('user@yahoo.com', '123', 'Manav', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategoryid` int(11) NOT NULL,
  `subcategoryname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategoryid`, `subcategoryname`, `description`, `category`) VALUES
(1, 'Gold Coins', 'Buy Gold Coins & Gold Bars Online at Best Price in India.', 'gold'),
(2, 'Earings', 'Non ea eum ut illo', 'gold'),
(3, 'Gold Coins', 'Vel officia dicta minus exercitationem facilis autem ut beatae est consequat A quam repudiandae vel ipsum explicabo', 'gold'),
(4, 'Lance Blair', 'Dolorem aut veniam, non voluptas excepteur porro deleniti laboris a odit reprehenderit, temporibus laboris inventore porro illo libero alias excepteur inventore voluptate sapiente facilis reiciendis vel dolores illo tempor iure ea sit, nesciunt, quaerat tempor et blanditiis et maxime eos, est qui excepturi autem recusandae. Eveniet, elit, nisi aliquam quos sequi ut laborum ipsa, sit, exercitation accusamus aut est, molestiae non neque blanditiis et ut excepteur quasi qui fugiat numquam eiusmod q.', 'Platinum'),
(5, 'Bangles', 'Qui eiusmod ea ut dignissimos rerum in adipisci sapiente ad voluptas laudantium, aperiam ipsum velit porro enim libero vitae eum deserunt iusto nobis aut magni maxime sed nisi totam elit, numquam veritatis cum quibusdam velit commodi quis modi blanditiis repudiandae pariatur? Ullamco enim corrupti, non commodo ad consequatur, sapiente optio, enim est modi quisquam et officia nulla tempor molestiae cillum officiis voluptates nisi facere reprehenderit, sapiente quis commodo ab aliqua. Molestiae qu.', 'Diamond Touch Originals'),
(6, 'Finger Rings', 'Optio et consequatur Velit aut proident qui consequatur doloremque dolorem error ut fuga Deleniti labore', 'Diamond'),
(7, 'Chains', 'Ut facere dolorem a assumenda rem cupidatat voluptatem aliquip nulla tenetur reprehenderit omnis totam', 'gold'),
(8, 'Pendant with chain', 'Labore commodi pariatur Esse quia quaerat molestiae iste odio eaque veritatis et ut id nisi delectus aliquip et reprehenderit', 'Diamond Touch Originals'),
(9, 'Bracelets', 'Voluptas quia sit minus est minim maxime quidem consequuntur exercitationem veniam fugiat illum omnis fuga Excepturi sapiente', 'Diamond Touch Originals'),
(10, 'Neckwear set', 'Reiciendis vero quae tempor officiis quibusdam consequatur est dicta tenetur error quaerat amet cupiditate aut eum qui maiores', 'Diamond Touch Originals'),
(11, 'Neckwear set', 'Reiciendis vero quae tempor officiis quibusdam consequatur est dicta tenetur error quaerat amet cupiditate aut eum qui maiores', 'Diamond'),
(12, 'Pendant and Earrings set', 'Fuga Sapiente vero aperiam delectus voluptatibus similique ipsa ut corporis ea\r\nFuga Sapiente vero aperiam delectus voluptatibus similique ipsa ut corporis ea', 'Platinum'),
(13, 'Mangalsutra', 'Duis vitae iste consequuntur laboriosam esse sit provident vitae perferendis culpa commodo recusandae Reiciendis', 'Vivah Collections'),
(14, 'Neckwear', 'Cum sit quia fugit voluptate qui aliqua Velit velit ut laboreCum sit quia fugit voluptate qui aliqua Velit velit ut laboreCum sit quia fugit voluptate qui aliqua Velit velit ut labore', 'gold'),
(15, 'Nose Pin', 'Non consectetur distinctio Sed a veniam facilis dolorNon consectetur distinctio Sed a veniam facilis dolorNon consectetur distinctio Sed a veniam facilis dolor', 'Diamond'),
(16, 'Earrings', 'Iure nobis mollitia ut voluptate consequuntur qui proident id ex consequatur Voluptatum excepteur porro quis autem quis nesciunt sit impedit', 'gold'),
(17, 'Pendants', 'Inventore Inventore quis aliquid impedit assumenda ut a consequatur est sintInventore quis aliquid impedit assumenda ut a consequatur est sintquis aliquid impedit assumenda ut a consequatur est sint', 'Diamond Touch Originals'),
(18, 'Finger rings', 'Numquam non ut sint nihil deserunt ea quibusdam labore elit consequatur Ex quis sunt maiores quia sed consequatur iure', 'gold'),
(19, 'Bracelets', 'Ea aliquam rerum amet fuga Fuga Sit qui iusto nemoEa aliquam rerum amet fuga Fuga Sit qui iusto nemoEa aliquam rerum amet fuga Fuga Sit qui iusto nemo', 'Diamond'),
(20, 'Chains', 'Sint iusto dolor architecto sit eius placeat cillum mollitiaSint iusto dolor architecto sit eius placeat cillum mollitiaSint iusto dolor architecto sit eius placeat cillum mollitiaSint iusto dolor architecto sit eius placeat cillum mollitia', 'Platinum'),
(21, 'Neckwear', 'Irure qui sequi impedit est labore id nisi iure cupiditate dolore autem quiIrure qui sequi impedit est labore id nisi iure cupiditate dolore autem quiIrure qui sequi impedit est labore id nisi iure cupiditate dolore autem qui', 'Diamond'),
(22, 'Pendant and Earrings set', 'Sunt Sunt alias nemo velit magnamSunt alias nemo velit magnamSunt alias nemo velit magnamSunt alias nemo velit magnamSunt alias nemo velit magnamSunt alias nemo velit magnamalias nemo velit magnam', 'Platinum'),
(23, 'Mangalsutra', 'Aut nesciunt do porro architecto ipsum in est ea distinctio Sapiente molestiasAut nesciunt do porro architecto ipsum in est ea distinctio Sapiente molestiasAut nesciunt do porro architecto ipsum in est ea distinctio Sapiente molestiasAut nesciunt do porro architecto ipsum in est ea distinctio Sapiente molestiasAut nesciunt do porro architecto ipsum in est ea distinctio Sapiente molestias', 'Vivah Collections'),
(24, 'Nose Pin', 'Est voluptas vero minus irure sint autEst voluptas vero minus irure sint autEst voluptas vero minus irure sint autEst voluptas vero minus irure sint autEst voluptas vero minus irure sint autEst voluptas vero minus irure sint autEst voluptas vero minus irure sint aut', 'Platinum'),
(25, 'Pendant with chain', 'Omnis reprehenderit iusto ut aut dolores cupiditate fugit soluta iste consectetur laboris itaque sit necessitatibus consequatur', 'Platinum'),
(26, 'Earrings', 'Fugiat beatae sit quaerat veniam eos quidem quaerat rem alias velit exercitationemFugiat beatae sit quaerat veniam eos quidem quaerat rem alias velit exercitationemFugiat beatae sit quaerat veniam eos quidem quaerat rem alias velit exercitationem', 'gold'),
(27, 'Pendants', 'Animi eum nemo officia et facere dolores recusandae Aliquam voluptatem laboreAnimi eum nemo officia et facere dolores recusandae Aliquam voluptatem laboreAnimi eum nemo officia et facere dolores recusandae Aliquam voluptatem laboreAnimi eum nemo officia et facere dolores recusandae Aliquam voluptatem labore', 'Platinum'),
(28, 'Finger Rings', 'Nemo quia doloribus blanditiis quaerat nobis dolorum eum tempore enim ex ex in sunt reiciendis est', 'gold'),
(29, 'Chains', 'Facere ut excepturi labore consequatur praesentium quaerat consequat Anim modi quia magni ipsum quibusdam dignissimos et qui', 'Diamond'),
(30, 'Facets', 'Doloribus ut qui ut nemo rem irure incidunt aute voluptas nulla et in quidem laboriosam voluptas adipisicing cumque', 'Platinum'),
(31, 'Birthstone Pendants', 'Tempore qui libero quos voluptatem occaecat eligendi porro deserunt vel quod sit dolore excepturi quis eveniet unde at', 'Diamond Touch Originals'),
(32, 'Birthstone', 'Explicabo Sed aperiam et est nisi nulla delectus dignissimos consequatur nisi culpa quam deserunt quasi consequatur numquam est rerum', 'Diamond'),
(33, 'DiamondTouch Festive', 'Occaecat iste qui libero consectetur est excepteur qui officia proident duisOccaecat iste qui libero consectetur est excepteur qui officia proident duisOccaecat iste qui libero consectetur est excepteur qui officia proident duis', 'Diamond Touch Originals'),
(34, 'DiamondTouch Glam', 'Ducimus facere mollitia labore distinctio Explicabo Quo vel quaeratDucimus facere mollitia labore distinctio Explicabo Quo vel quaeratDucimus facere mollitia labore distinctio Explicabo Quo vel quaeratDucimus facere mollitia labore distinctio Explicabo Quo vel quaerat', 'Diamond Touch Originals'),
(35, 'DiamondTouch Wings', 'Vel sed officia voluptatem cupiditate quibusdam nostrud eu placeat et lorem adipisci exercitation consequuntur et occaecat quo', 'Diamond Touch Originals'),
(36, 'DiamondTouch Allrounders', 'Proident tempora in aliqua Omnis inventore omnis dolores officiaProident tempora in aliqua Omnis inventore omnis dolores officiaProident tempora in aliqua Omnis inventore omnis dolores officiaProident tempora in aliqua Omnis inventore omnis dolores officia', 'Diamond Touch Originals'),
(37, 'Friends of Bride', 'Id voluptatum molestiae qui voluptas voluptatem Et natus ex impedit enim eaque quiaId voluptatum molestiae qui voluptas voluptatem Et natus ex impedit enim eaque quiaId voluptatum molestiae qui voluptas voluptatem Et natus ex impedit enim eaque quia', 'Vivah Collections'),
(38, 'Virasat', 'Voluptatem Quo ea voluptatibus fugiat nisi rem incidunt voluptates ad et do voluptatum consectetur dolor nulla omnis sit iste', 'Vivah Collections'),
(39, 'Ahalya', 'Possimus esse placeat beatae asperiores enim veniam dolor possimus officiis voluptatem Nostrum quidem', 'gold'),
(40, 'Swayahm', 'Exercitationem voluptatem dolorum est veniam odio magni exercitationem occaecat totam tempore tempora qui', 'Platinum'),
(41, 'Preen', 'Aut voluptatem Quo repudiandae vero animiAut voluptatem Quo repudiandae vero animiAut voluptatem Quo repudiandae vero animiAut voluptatem Quo repudiandae vero animi', 'Diamond'),
(42, 'Utsava', 'Dolor voluptate eius laboriosam incidunt nostrud voluptas molestias tenetur velitDolor voluptate eius laboriosam incidunt nostrud voluptas molestias tenetur velitDolor voluptate eius laboriosam incidunt nostrud voluptas molestias tenetur velit', 'Diamond'),
(43, 'Gulnaaz', 'Adipisicing dolore aute aut animi optio modi eligendiAdipisicing dolore aute aut animi optio modi eligendiAdipisicing dolore aute aut animi optio modi eligendi', 'Platinum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `billforrent`
--
ALTER TABLE `billforrent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billid` (`billid`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryname`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `subcatid` (`subcatid`);

--
-- Indexes for table `product_photo`
--
ALTER TABLE `product_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `rentbill_detail`
--
ALTER TABLE `rentbill_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`),
  ADD KEY `billid` (`billid`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategoryid`),
  ADD KEY `category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `billforrent`
--
ALTER TABLE `billforrent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `product_photo`
--
ALTER TABLE `product_photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentbill_detail`
--
ALTER TABLE `rentbill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billforrent`
--
ALTER TABLE `billforrent`
  ADD CONSTRAINT `billforrent_ibfk_1` FOREIGN KEY (`email`) REFERENCES `signup` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD CONSTRAINT `bill_detail_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_detail_ibfk_2` FOREIGN KEY (`billid`) REFERENCES `bill` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`subcatid`) REFERENCES `subcategory` (`subcategoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_photo`
--
ALTER TABLE `product_photo`
  ADD CONSTRAINT `product_photo_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rentbill_detail`
--
ALTER TABLE `rentbill_detail`
  ADD CONSTRAINT `rentbill_detail_ibfk_1` FOREIGN KEY (`billid`) REFERENCES `rentbill_detail` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rentbill_detail_ibfk_2` FOREIGN KEY (`productid`) REFERENCES `product` (`productid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
