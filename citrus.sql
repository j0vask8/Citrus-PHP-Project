-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 12:23 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `comment_text` text COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `approved` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `name`, `email`, `comment_text`, `product_id`, `approved`, `created_at`) VALUES
(1, 'Ben', 'ben@gmail.com', 'The gameplay in the first one is legitimately a chore, but the story and characters made up for it. 2 has decent gameplay and the story is just as good, so its worth playing even if you hate 1s gameplay enough to skip it. I played through all 3 games back to back and Im genuinely glad that I did, I even transferred my save over the whole way through so my actions had consequences from game to game.', 1, 'Y', '2020-03-04 18:25:33'),
(2, 'Lara', 'lara@gmail.com', 'Personally, from an overall perspective as GAMES, I would say The Witcher 2 is worth playing if you like TW3 as it is fairly similar. It isn\'t open world (it features chapters with \'open\' areas you can roam round) and doesn\'t have nearly the same amount of content/side quests and the like, it\'s a more linear game - but it is fun for sure and the overall feel is similar, characterization is consistent, etc. TW2 has also aged well visually and still looks great, the combat doesn\'t feel awesome but neither does TW3\'s in my opinion (it is a weak point for the series).', 3, 'Y', '0000-00-00 00:00:00'),
(3, 'java', 'java@gmail.com', 'This pretty much speaks to my experience. I really did not care for TW1. It was a mess of a game even if the story is interesting enough - and it really, really, REALLY tested my patience. Chapter II in particular is a fucking slog, and what really sucks is it is the worst and the longest part of the game by a good amount.\r\n\r\nTW2 is definitely worth playing for those interested in it but I can\'t bring myself to recommend TW1 to anybody. Honestly, I regret spending the time to play it.', 4, 'Y', '0000-00-00 00:00:00'),
(4, 'Alek', 'alek@gmail.com', 'STORY-wise, I would also recommend TW2. It connects most directly with TW3, most of the major characters from the game CAN make appearances in TW3 (depending on your choices anyway), and TW2 really clearly sets up the story for TW3 in terms of the largest political context for the world.', 3, 'Y', '0000-00-00 00:00:00'),
(8, 'Sara', 'sara@gmail.com', 'The game is incredible if you read books, then play w1 and w2. After that w3 becomes so much more than awesome action rpg. Maybe this wont hurt your experience, but you kind of robbed yourself playing the conclusion first. Still, games deserve at least one playthrough.', 4, 'N', '0000-00-00 00:00:00'),
(9, 'Lara', 'lara@gmail.com', 'You\'ll find the gameplay lacking, but the quality of writing and world building are high across the series', 3, 'N', '0000-00-00 00:00:00'),
(10, 'Alexander', 'alexander@gmail.com', 'I actually enjoyed w1 more than w2. W1 is a clunky game. Combat is awkward. For whatever reason, it meshed with me and I loved it. It takes a couple hours to get a hang of, but think it is worth the play through. If you can deal with a fighting system which you need patience to get the hang of.', 4, 'N', '0000-00-00 00:00:00'),
(11, 'Asd', 'java@gmail.com', 'asdasdas', 1, 'N', '0000-00-00 00:00:00'),
(12, 'Asd', 'java@gmail.com', 'asdasdas', 3, 'N', '0000-00-00 00:00:00'),
(16, 'milena', 'milena@gmail.com', 'text text', 1, 'N', '2020-03-04 11:05:52'),
(17, 'Steve', 'steve@comcast.net', 'My fav is vault 108, the Gary vault. This is still a running joke for me. Every time I hear the name Gary I quote the Garys. I also enjoyed finding skeletons in awkward positions throughout fallout 4. I had a whole photo album dedicated to it. I also enjoyed the ultra luxe in fallout NV as well as murdering Benny. The dunwich borers part in fallout 4 was cool, too. I don’t know why. Fallout 3 will always be my fav of the series though. I spent hundreds of hours on that game lol.', 1, 'N', '2020-03-05 10:40:26'),
(18, 'Crowl', 'crowl@att.net', 'Best Moment: Dead Money when you work together with Veronica\'s GF to enter the hotel and escape the Ghoul guy.\r\nMost Terrifying Moment: I just bought NV as my first Fallout game around 2015. Was walking down the road, a little while after NoVac, and I often clicked my Vats as Sonar to detect enemies. Well... usually it\'d just zoom me in to a close-up of a baddie or monster, and then I\'d fight. Instead (with no musical cues or effects sounds) I was whipped around 180 degrees to a freeze-frame of an Alpha Male Deathclaw about 2 feet from me with arms already about to give me a \"hug\". I about shit my pants, turned off my xbox, and didn\'t touch the game for about a year until I finally nutted up to beat it. Glad I did, but boy do I pay SPECIAL attention to my current location when I play NV.', 3, 'N', '2020-03-04 05:11:08'),
(19, 'Marin', 'marin@me.com', 'Most terrifying would probably be a tie between exploring Vault 22 for the first time (the plant mutants creeped me the hell out and could be right next to you without you even knowing it) or when I went to the ranger station near Novac to find everyone slaughtered after I had been there just a couple days prior. That really disturbed me.', 3, 'N', '2020-02-29 23:00:00'),
(20, 'Neonatus', 'neonatus@yahoo.com', 'Best Moment: Dead Money when you work together with Veronica\'s GF to enter the hotel and escape the Ghoul guy.\r\nMost Terrifying Moment: I just bought NV as my first Fallout game around 2015. Was walking down the road, a little while after NoVac, and I often clicked my Vats as Sonar to detect enemies. Well... usually it\'d just zoom me in to a close-up of a baddie or monster, and then I\'d fight. Instead (with no musical cues or effects sounds) I was whipped around 180 degrees to a freeze-frame of an Alpha Male Deathclaw about 2 feet from me with arms already about to give me a \"hug\". I about shit my pants, turned off my xbox, and didn\'t touch the game for about a year until I finally nutted up to beat it. Glad I did, but boy do I pay SPECIAL attention to my current location when I play NV.', 3, 'Y', '2020-03-04 13:11:08'),
(21, 'Hampton', 'hampton@yahoo.com', 'Best Moment: Dead Money when you work together with Veronica\'s GF to enter the hotel and escape the Ghoul guy.\r\nMost Terrifying Moment: I just bought NV as my first Fallout game around 2015. Was walking down the road, a little while after NoVac, and I often clicked my Vats as Sonar to detect enemies. Well... usually it\'d just zoom me in to a close-up of a baddie or monster, and then I\'d fight. Instead (with no musical cues or effects sounds) I was whipped around 180 degrees to a freeze-frame of an Alpha Male Deathclaw about 2 feet from me with arms already about to give me a \"hug\". I about shit my pants, turned off my xbox, and didn\'t touch the game for about a year until I finally nutted up to beat it. Glad I did, but boy do I pay SPECIAL attention to my current location when I play NV.', 5, 'N', '2020-03-04 14:11:08'),
(22, 'Parksh', 'parksh@verizon.net', 'Would have to be during fallout 3 broken steel. When you enter the subway metro tunnels and then you hear them. The sound of an army of ghouls, featuring the then terrifying ghoul Reavers. That was my greatest oh shit moment other than the surprise death claws in fallout 4 and the moment in far harbour when you first start working on a building and then literally everything rocks up to kill you.', 5, 'Y', '2020-03-04 15:11:08'),
(23, 'Credmond', 'credmond@aol.com', 'I stepped out of Vault 101 and was overwhelmed instantly by the scenery of a desolate wasteland. I was already compleyely immersed and after stepping out of the vault, it felt like i was actually there and all my bodily emotions and adrenaline was too. Now this was my first time ever playing fallout, so I didn\'t know who was a friend or enemy and I\'m a little ashamed of my actions.', 4, 'N', '2020-03-04 03:11:08'),
(24, 'Frosal', 'frosal@hotmail.com', '', 4, 'Y', '2020-01-04 18:11:08'),
(25, 'Milton', 'milton@yahoo.com', 'Mine would have to be where it all started for me, Vault 101. My friends and I would talk about fallout at school endlessly and I was the last to get the game (had been addicted to halo). They would tell me all these things like how dangerous the wasteland is and that you have to get to settlements asap and before dark otherwise everything just hunting you. Fast forward.', 4, 'N', '2020-03-04 10:11:08'),
(26, 'Ivan', 'ivan@gmail.com', 'I understand 100% that these games will run better on pc but my experience with these games has pretty great. Id be lying if I said there was never a frame rate drop and I never had a problem with enemies or buildings not loading in but for me personally, these issues come in few and far between. The way its talked about is that these games are simply unplayable on console', 1, 'Y', '2020-03-04 18:24:18'),
(27, 'Olga', 'olga@gmail.com', 'On a somewhat related note, I have yet to play Fallout 76 on my PS4, but from what I have seen in some videos, Fallout 76 on PC seems to have constant problems with hackers, so I guess that would be another reason to prefer playing on console rather than PC.', 1, 'Y', '2020-01-04 18:23:30'),
(28, 'Yoda', 'yoda@gmail.com', 'Text', 1, 'N', '2020-03-05 10:47:23'),
(29, 'Oleg', 'oleg@gmail.com', 'I played through all 3 games back to back and Im genuinely glad that I did, I even transferred my \"save\" over the whole way through so my actions had consequences from game to game. ', 1, 'N', '2020-03-05 10:48:30'),
(30, 'Lisa', 'lisa@gmail.com', 'The gameplay in the first one is legitimately a chore, but the story and characters made up for it. 2 has decent gameplay and the story is just as good, so its worth playing even if you hate 1s gameplay enough to skip it. I played through all 3 games back to back and Im genuinely glad that I did, I even transferred my save over the whole way through so my actions had consequences from game to game. ', 1, 'N', '2020-03-05 10:58:08'),
(31, 'Lisa', 'lisa@gmail.com', 'Most Terrifying Moment: I just bought NV as my first Fallout game around . Was walking down the road, a little while after NoVac, and I often clicked my Vats as Sonar to detect enemies. Well... ', 1, 'N', '2020-03-05 11:02:12');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `product_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `image`, `price`) VALUES
(1, 'Aragami', 'Aragami: Nightfall is the first story expansion to the celebrated stealth-action game by Lince Works', 'aragami.jpg', 59.99),
(3, 'Beholder', ' Welcome to a grim dystopian future. A totalitarian State controls every aspect of private and public life. Laws are oppressive. Surveillance is tot... ', 'beholder.jpg', 29.99),
(4, 'Trough The Woods', ' Through the Woods is a third-person Norse horror adventure set in a forest on the western shores of Norway that tells the story of a mother and h... ', 'troughthewoods.jpg', 9.99),
(5, 'Space Rangers Quest', ' The original Space Rangers was a cult classic, one that inspired many things. Not the least of which was video games made in its honor. The first o... ', 'spacerangersquest.jpg', 9.99),
(6, 'Renoir', ' James Renoir was a police officer, serving in the main precinct in a metropolis rotten with crime and violence. The influence of the mafia families... ', 'renoir.jpg', 14.99),
(7, 'Fall Of Light', ' In Fall of Light, players assume the role of Nys, a retired and old warrior. Still, the call of adventure can\'t be ignored, and so you will evade t... ', 'falloflight.jpg', 19.99),
(8, 'Shiny', ' Don\'t let anyone convince you that robots don\'t have a heart. Shiny tells the story of one brave little robot called Kramer 227. He is left to su... ', 'shiny.jpg', 29.99),
(9, 'Real Politiks', ' Realpolitiks is a real-time grand strategy game that gives you the opportunity to become the ruler of any contemporary nation that you want. The mo... ', 'realpolitiks.jpg', 69.99),
(10, 'The Witcher', 'The Witcher: Wild Hunt is a story-driven, next-generation open world role-playing game set in a visually stunning fantasy universe full of meaning... ', 'wicher.jpg', 49.99);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `role_id`) VALUES
(1, 'David', 'admin@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 1),
(2, 'Lara', 'lara@gmail.com', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 2),
(3, 'Ben', 'ben@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
