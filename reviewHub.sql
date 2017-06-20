-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2017 at 02:23 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewHub`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paladin_id` int(11) NOT NULL,
  `vector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `paladin_id`, `vector`) VALUES
(1, 'Food', 3, '256-256-d13cafbf17ecd8f2065c8842a6e4e228.png'),
(2, 'Movies', 2, 'Movie alt 512x512.png'),
(3, 'Music', 2, 'music.png'),
(4, 'Mobile', 4, 'smartphone_318-33441.png'),
(5, 'PC/Laptop', 4, 'laptop-png-6749.png'),
(6, 'Electronics', 1, 'desktop-computer-with-screen-vector-icon-800x566.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `body`, `member_id`, `review_id`, `created_at`, `updated_at`) VALUES
(1, 'Aliquam et inventore officia ratione.', 5, 2, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(2, 'Quam reprehenderit aut quaerat dignissimos odio incidunt maiores.', 3, 4, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(3, 'Debitis temporibus a aut asperiores.', 1, 1, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(4, 'Hic enim qui accusantium minima facere.', 4, 1, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(5, 'Soluta autem id perspiciatis exercitationem quaerat amet optio.', 2, 3, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(6, 'hello', 7, 1, '2017-06-19 04:56:10', '2017-06-19 04:56:10'),
(7, 'asdasd', 6, 1, '2017-06-19 06:14:17', '2017-06-19 06:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `member_id` int(11) NOT NULL,
  `review_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`member_id`, `review_id`) VALUES
(1, 4),
(2, 5),
(3, 1),
(4, 5),
(5, 3),
(6, 1),
(6, 5),
(7, 2),
(7, 3);

-- --------------------------------------------------------

--
-- Table structure for table `macaddresses`
--

CREATE TABLE `macaddresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `macaddress` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `macaddresses`
--

INSERT INTO `macaddresses` (`id`, `macaddress`, `created_at`, `updated_at`) VALUES
(1, 'AC:F3:87:71:D9:97', '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(2, 'D0:AA:C1:4D:F0:20', '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(3, '6D:79:17:F6:B9:1C', '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(4, '17:D0:F0:9A:A8:AE', '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(5, '12:44:86:BE:73:17', '2017-06-16 08:35:46', '2017-06-16 08:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `macaddress_member`
--

CREATE TABLE `macaddress_member` (
  `macaddress_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `macaddress_member`
--

INSERT INTO `macaddress_member` (`macaddress_id`, `member_id`) VALUES
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(1) DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `profile_url`, `password`, `email`, `first_name`, `last_name`, `avatar`, `date_of_birth`, `city`, `region`, `gender`, `bio`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'rath.jabari', 'stanford68', '$2y$10$51MLpuwVB2YwUtTmjU6GguPzi5MmiIV.u2JGPDO1Q9J96qniF4lkC', 'verdie.donnelly@hotmail.com', 'Vivian', 'Schaefer', 'http://lorempixel.com/640/480/?60437', '2002-08-05', 'Karachi', 'KPK', 1, 'Mock Turtle recovered his voice, and, with tears again as quickly as she spoke. \'I must be off, then!\' said the Dodo replied very readily: \'but that\'s because it stays the same age as herself, to.', '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(2, 'casper.litzy', 'helene.lind', '$2y$10$NbRt1fyg3njXh1mmHUik2.mBp11xnZCn14dJVLfN3f9wiH8nCzb36', 'jovan51@yahoo.com', 'Aurelio', 'Fisher', 'http://lorempixel.com/640/480/?76652', '1978-08-18', 'Lahore', 'Sindh', 0, 'Bill! the master says you\'re to go from here?\' \'That depends a good many little girls eat eggs quite as much use in saying anything more till the Pigeon in a natural way. \'I thought you did,\' said.', '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(3, 'reed51', 'sleuschke', '$2y$10$tVqe0.R713N0keoOfjWZa.l46XfjDi8llBepGJ1z2CmTFYG/j4cPy', 'bethel.langosh@yahoo.com', 'Katelyn', 'Robel', 'http://lorempixel.com/640/480/?22175', '1996-08-27', 'Lahore', 'KPK', 1, 'Puss,\' she began, in a tone of delight, and rushed at the corners: next the ten courtiers; these were ornamented all over with diamonds, and walked two and two, as the rest of the creature, but on.', '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(4, 'lavina.williamson', 'faye82', '$2y$10$HulGS7PPaDaoxl9Gn9l6J.WctATVsUwO5e1tnjZAR19ete.OCGKSW', 'tiara.torphy@hotmail.com', 'Violet', 'Blick', 'http://lorempixel.com/640/480/?53673', '2009-06-13', 'Karachi', 'KPK', 1, 'There was a large pigeon had flown into her face. \'Wake up, Dormouse!\' And they pinched it on both sides of it, and burning with curiosity, she ran with all her life. Indeed, she had not attended to.', '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(5, 'rjakubowski', 'bartoletti.dion', '$2y$10$XXVFb9hlVOte1PufPypjEunFzSPyxxBSiuwXn5HI7gV/nmkxHQTMy', 'ella.anderson@hotmail.com', 'Queenie', 'Harvey', 'http://lorempixel.com/640/480/?34894', '2011-10-25', 'Peshawar', 'Punjab', 1, 'OF HEARTS. Alice was silent. The King turned pale, and shut his note-book hastily. \'Consider your verdict,\' he said in a fight with another hedgehog, which seemed to follow, except a tiny golden.', '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(6, 'ahmedbutt2015', NULL, '$2y$10$a2jFyyf.8kgM2mod9X27lOQ2N9e.mF6IVVjpbxkWNkZr4UnUwjwAu', 'ahmedbuttdev@gmail.com', NULL, NULL, NULL, '2017-12-30', NULL, NULL, NULL, NULL, '2017-06-16 13:10:05', '2017-06-16 13:10:05', 'nvWNeDEb4CQydqXNFlRwLcdirp8ltS3zl5ocvqLd2vEjzRFhNuXF4iqhuUME'),
(7, NULL, NULL, NULL, 'bahtasham@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-16 13:59:54', '2017-06-16 13:59:54', 'F4at3pZqGIGXspSpy9FzXBqlz8oyWhBA3Zj6mjYVMcuJntBuY4kx3rxhCb66');

-- --------------------------------------------------------

--
-- Table structure for table `member_reviewer`
--

CREATE TABLE `member_reviewer` (
  `member_id` int(11) NOT NULL,
  `reviewer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_reviewer`
--

INSERT INTO `member_reviewer` (`member_id`, `reviewer_id`) VALUES
(1, 1),
(1, 9),
(6, 1),
(6, 4),
(7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_04_09_183712_create_members_table', 1),
(3, '2017_04_09_183805_create_visitors_table', 1),
(4, '2017_04_09_183826_create_reviewers_table', 1),
(5, '2017_04_09_183843_create_categories_table', 1),
(6, '2017_04_09_183857_create_tags_table', 1),
(7, '2017_04_09_183911_create_ranks_table', 1),
(8, '2017_05_09_211120_create_macaddresses_table', 1),
(9, '2017_05_09_212158_create_likes_table', 1),
(10, '2017_05_09_212206_create_comments_table', 1),
(11, '2017_05_09_212934_create_reviews_table', 1),
(12, '2017_05_18_182739_create_macaddress__member_table', 1),
(13, '2017_05_18_183457_create_review__tag_table', 1),
(14, '2017_05_18_183624_create_member__reviewer_table', 1),
(15, '2014_10_12_000000_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ranks`
--

CREATE TABLE `ranks` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ranks`
--

INSERT INTO `ranks` (`id`, `title`) VALUES
(3, 'Bronze'),
(4, 'Gold'),
(5, 'Noob'),
(2, 'Paladin'),
(1, 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `reviewers`
--

CREATE TABLE `reviewers` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(20) UNSIGNED DEFAULT NULL,
  `gender` tinyint(1) NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '0',
  `about` text COLLATE utf8mb4_unicode_ci,
  `rank_id` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviewers`
--

INSERT INTO `reviewers` (`id`, `username`, `profile_url`, `password`, `email`, `first_name`, `last_name`, `avatar`, `date_of_birth`, `city`, `region`, `contact`, `gender`, `rating`, `about`, `rank_id`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, 'eloisa.pagac', 'tvon', '$2y$10$bupAsxgXRTAXImsu3SQ6X.x4IpSFweFNx3Gy0McmqvMrtpu.2glvq', 'megane01@gmail.com', 'Marilou', 'Kiehn', 'http://lorempixel.com/640/480/?14497', '1995-03-16', 'Karachi', 'Punjab', 7491335702853, 1, 4, 'WOULD not remember ever having heard of "Uglification,"\' Alice ventured to remark. \'Tut, tut, child!\' said the Queen, \'and take this child away with me,\' thought Alice, and, after folding his arms.', 5, '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(2, 'mavis.erdman', 'kpagac', '$2y$10$FPQKOfA9rv1m7cZDN1hIy.CUEucFbrM6VYN3Pm0QmSl/IVP1/Gdva', 'elta34@hotmail.com', 'Merlin', 'Luettgen', 'http://lorempixel.com/640/480/?53588', '2002-04-29', 'Lahore', 'Sindh', 2185281615413, 1, 3, 'Pigeon had finished. \'As if it makes me grow large again, for this curious child was very hot, she kept fanning herself all the jelly-fish out of court! Suppress him! Pinch him! Off with his nose,.', 5, '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(3, 'xmacejkovic', 'macejkovic.mckenna', '$2y$10$LWru/Z/x.6VhprrG1MWK/e0KmJdHzpbqqbotWvSavO/hVH2O6Oq86', 'thompson.amanda@hotmail.com', 'Ottilie', 'Homenick', 'http://lorempixel.com/640/480/?89363', '2015-01-07', 'Peshawar', 'Punjab', 4309698452519, 1, 3, 'Alice for protection. \'You shan\'t be beheaded!\' said Alice, (she had grown so large a house, that she knew that it is!\' \'Why should it?\' muttered the Hatter. \'It isn\'t directed at all,\' said the.', 3, '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(4, 'schoen.ruthie', 'alverta.treutel', '$2y$10$kb5lkik6l0dtlmB2PaCR3.KGLnuvLAaOushuxodFDOn/wuxqBCttS', 'vmoore@hotmail.com', 'Helene', 'Wilkinson', 'http://lorempixel.com/640/480/?73684', '2012-04-09', 'Lahore', 'Sindh', 4212335659678, 0, 2, 'An obstacle that came between Him, and ourselves, and it. Don\'t let him know she liked them best, For this must ever be A secret, kept from all the right thing to get very tired of being all alone.', 3, '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(5, 'jazmyn.berge', 'erwin32', '$2y$10$s0OdkDV3bqE./dLl.45L7unWp2hy1eZrAnUhBkBQ0BS56iOdx6OW.', 'bosco.melissa@gmail.com', 'Raul', 'Hessel', 'http://lorempixel.com/640/480/?86247', '1991-10-10', 'Lahore', 'KPK', 6993894841872, 0, 5, 'I see"!\' \'You might just as the March Hare meekly replied. \'Yes, but some crumbs must have been a holiday?\' \'Of course twinkling begins with an M, such as mouse-traps, and the blades of grass, but.', 1, '2017-06-16 08:35:45', '2017-06-16 08:35:45', NULL),
(9, 'asd', NULL, 'asdasd', 'ahmedbuttdev@gmail.com', 'asd', 'sad', 'qQCeTlY2ajnoz72.png', '2017-06-19', 'Turbat', 'Balochistan', 23132132, 1, 0, 'asasdasd', NULL, '2017-06-17 04:51:28', '2017-06-17 04:51:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featureimage` text COLLATE utf8mb4_unicode_ci,
  `category_id` smallint(6) NOT NULL,
  `reviewer_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `caption`, `body`, `featureimage`, `category_id`, `reviewer_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Lizard in head.', 'Queen was.', 'However, she did not sneeze, were the cook, to see what was going to turn round on its axis--\' \'Talking of axes,\' said the Duck: \'it\'s generally a frog or a watch to take the roof bear?--Mind that.', 'http://lorempixel.com/640/480/?74818', 4, 1, NULL, '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(2, 'Mock.', 'Alice replied.', 'King, \'and don\'t be nervous, or I\'ll kick you down stairs!\' \'That is not said right,\' said the Mock Turtle, and to her very much what would happen next. \'It\'s--it\'s a very interesting dance to.', 'http://lorempixel.com/640/480/?90690', 3, 2, NULL, '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(3, 'France-- Then.', 'Queen, who.', 'But there seemed to have no idea what a long silence after this, and Alice called out to sea!" But the snail replied "Too far, too far!" and gave a sudden burst of tears, until there was generally a.', 'http://lorempixel.com/640/480/?95372', 2, 4, NULL, '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(4, 'Ann! Mary Ann!\'.', 'Footman went on.', 'She generally gave herself very good advice, (though she very soon finished off the fire, licking her paws and washing her face--and she is of mine, the less there is of finding morals in things!\'.', 'http://lorempixel.com/640/480/?11762', 3, 4, NULL, '2017-06-16 08:35:46', '2017-06-16 08:35:46'),
(5, 'Dodo in an.', 'But they.', 'I shall be a grin, and she swam lazily about in the wind, and was suppressed. \'Come, that finished the guinea-pigs!\' thought Alice. The poor little juror (it was exactly one a-piece all round. (It.', 'http://lorempixel.com/640/480/?55334', 2, 3, NULL, '2017-06-16 08:35:46', '2017-06-16 08:35:46');

-- --------------------------------------------------------

--
-- Table structure for table `review_tag`
--

CREATE TABLE `review_tag` (
  `review_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `review_tag`
--

INSERT INTO `review_tag` (`review_id`, `tag_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`) VALUES
(1, 'amet'),
(5, 'corrupti'),
(4, 'est'),
(3, 'et'),
(2, 'eum');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `created_at`, `updated_at`) VALUES
(1, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(2, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(3, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(4, '2017-06-16 08:35:45', '2017-06-16 08:35:45'),
(5, '2017-06-16 08:35:45', '2017-06-16 08:35:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_id_unique` (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`member_id`,`review_id`);

--
-- Indexes for table `macaddresses`
--
ALTER TABLE `macaddresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `macaddress_member`
--
ALTER TABLE `macaddress_member`
  ADD PRIMARY KEY (`macaddress_id`,`member_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_id_unique` (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD UNIQUE KEY `members_username_unique` (`username`),
  ADD UNIQUE KEY `members_profile_url_unique` (`profile_url`);

--
-- Indexes for table `member_reviewer`
--
ALTER TABLE `member_reviewer`
  ADD PRIMARY KEY (`member_id`,`reviewer_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `ranks`
--
ALTER TABLE `ranks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ranks_id_unique` (`id`),
  ADD UNIQUE KEY `ranks_title_unique` (`title`);

--
-- Indexes for table `reviewers`
--
ALTER TABLE `reviewers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `reviewers_id_unique` (`id`),
  ADD UNIQUE KEY `reviewers_username_unique` (`username`),
  ADD UNIQUE KEY `reviewers_email_unique` (`email`),
  ADD UNIQUE KEY `reviewers_profile_url_unique` (`profile_url`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review_tag`
--
ALTER TABLE `review_tag`
  ADD PRIMARY KEY (`review_id`,`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_id_unique` (`id`),
  ADD UNIQUE KEY `tags_name_unique` (`name`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `visitors_id_unique` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `macaddresses`
--
ALTER TABLE `macaddresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ranks`
--
ALTER TABLE `ranks`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reviewers`
--
ALTER TABLE `reviewers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
