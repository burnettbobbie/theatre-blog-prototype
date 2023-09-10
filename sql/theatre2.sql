-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2023 at 02:27 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatre2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(132) NOT NULL,
  `description` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `blog_content` mediumtext NOT NULL,
  `created_on` date DEFAULT current_timestamp(),
  `img_path` varchar(32) DEFAULT NULL,
  `show_name` varchar(64) DEFAULT NULL,
  `is_published` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `start_date`, `end_date`, `blog_content`, `created_on`, `img_path`, `show_name`, `is_published`) VALUES
(13, 'Noises Off!', '\r\n\"Noises Off!\" is an uproarious and chaotic farce by Michael Frayn, presenting a play within a play. Hilarity ensues as a quirky group of actors struggles through mishaps, backstage drama, and forgotten lines during their comedic theater production. The result is a riotous symphony of laughter and comedic brilliance.', '2023-06-01', '2023-06-22', 'The Local Theatre Company\'s production of \"Noises Off!\" is an uproarious and sidesplitting theatrical delight that keeps audiences in stitches from start to finish. Michael Frayn\'s ingenious farce, a play within a play, showcases the hilarious chaos and mishaps that unfold during a comedic theatre production.\r\n\r\nUnder the skilful direction of the Company, the ensemble cast masterfully brings to life a quirky and dysfunctional group of actors attempting to put on a British sex comedy called \"Nothing On.\" As the production progresses, the backstage antics and interpersonal drama spill onto the stage, creating a riotous symphony of missed cues, forgotten lines, and misplaced props.\r\n\r\nThe set design is a marvel in itself, revolving to give the audience a behind-the-scenes peek at the mayhem happening backstage. This dynamic element adds another layer of hilarity as the actors navigate the challenges of their ever-changing environment.\r\n\r\nThe talented cast exhibits impeccable comedic timing, physical humor, and a strong chemistry that enhances the play\'s comedic brilliance. Each character\'s distinct personality and quirks contribute to the mayhem, earning uproarious laughter and applause from the delighted audience.\r\n\r\n\"Noises Off!\" stands as a testament to The Local Theatre Company\'s commitment to producing top-notch entertainment. From the meticulous attention to detail in blocking and timing to the seamless execution of this complex and demanding farce, the production team\'s dedication and talent shine through.\r\n\r\nIn conclusion, The Local Theatre Company\'s production of \"Noises Off!\" is a laugh-out-loud rollercoaster ride of theatrical hilarity that leaves the audience gasping for breath. With its impeccable comedic timing, flawless performances, and creative set design, this rendition of Frayn\'s classic is a must-see for theatre enthusiasts and comedy lovers alike.\r\n', '2023-03-06', 'noises-off.jpg', 'Noises Off!', 1),
(14, 'Cat on a Hot Tin Roof: Updated', '\"Cat on a Hot Tin Roof,\" a timeless classic by Tennessee Williams, unravels the emotionally charged dynamics within a Southern family. Set against the backdrop of a wealthy plantation, the play delves into the themes of mendacity, desire, and the pursuit of truth, painting a vivid portrait of human complexities.', '2023-07-05', '2023-08-30', '\r\nThe Local Theatre Company\'s ongoing production of \"Cat on a Hot Tin Roof\" is an exquisite and captivating theatrical experience that leaves audiences emotionally stirred. Tennessee Williams\' timeless classic comes to life on their stage, revealing the complexities of human relationships and simmering tensions within a seemingly perfect family.\r\n\r\nThe skillful direction and powerful performances by the cast breathe new life into the iconic characters. Brick\'s tortured soul and Maggie\'s desperate longing are portrayed with raw intensity, while the larger-than-life presence of Big Daddy and the emotionally charged confrontations add a palpable sense of urgency to the narrative.\r\n\r\nThe production\'s set design and lighting cleverly mirror the characters\' emotional states, creating an immersive atmosphere that heightens the drama. From the opulent elegance of the plantation to the stifling intensity of the bedroom scenes, every detail contributes to the play\'s overall impact.\r\n\r\nTheir rendition successfully captures the essence of Williams\' powerful themes, delving deep into issues of mendacity, desire, and the search for identity. The dialogue crackles with tension, and the poignant moments resonate with the audience, leaving a lasting impression that lingers long after the final curtain call.\r\n\r\nMoreover, the commitment and dedication of the entire production team are evident, from the flawless execution of the stage management to the attention to detail in costume and makeup. The ensemble\'s chemistry and cohesion are palpable, providing a cohesive and memorable performance.\r\n\r\nIn conclusion, The Local Theatre Company\'s ongoing production of \"Cat on a Hot Tin Roof\" is a tour de force that showcases the enduring brilliance of Tennessee Williams\' work. It exemplifies the power of live theatre to provoke thought, evoke emotion, and provide an unforgettable experience for all who have the privilege of witnessing it.', '2023-04-11', 'cat-roof.jfif', 'Cat On A Hot Tin Roof', 1),
(15, 'Othello: Now Showing', '\r\n\"Othello\" is Shakespeare\'s timeless tragedy revolving around the noble Moorish general, Othello, and the manipulative ensign, Iago. Jealousy, deception, and betrayal weave a tale of tragic consequences, exploring the darker aspects of human nature. A compelling and emotionally charged play that delves into the complexities of love, trust, and power.', '2023-05-03', '2023-05-31', 'A spellbinding and gripping rendition of Shakespeare\'s timeless tragedy. The masterful direction and powerful performances bring this tale of jealousy, manipulation, and betrayal to life with unwavering intensity.\r\n\r\nUnder the guidance of the artistic team, the cast delivers an awe-inspiring portrayal of the characters. Othello\'s descent into jealousy and rage, Iago\'s sinister manipulation, and Desdemona\'s innocence are portrayed with raw emotion, drawing the audience into the heart of the drama.\r\n\r\nThe production\'s set design transports the audience to the enchanting world of Venice and Cyprus, complemented by evocative lighting that heightens the play\'s atmospheric tension.\r\n\r\nThe actors\' impeccable delivery of Shakespearean language showcases their dedication and deep understanding of the text. Their chemistry on stage brings depth and authenticity to the complex relationships in the play.\r\n\r\nThe Company\'s \"Othello\" stands as a testament to their commitment to producing high-quality and thought-provoking theatre. The seamless blend of traditional and innovative elements in this production captivates the audience, leaving them emotionally moved and intellectually engaged.\r\n\r\nIn conclusion, The Local Theatre Company\'s \"Othello\" is an unforgettable theatrical experience that stays with the audience long after the final bow. This rendition of Shakespeare\'s masterpiece is a testament to the power of live performance, offering a fresh perspective on timeless themes and leaving an indelible mark on the hearts of theatregoers.', '2023-03-07', 'othello.jpg', 'Othello', 1),
(17, 'Woyzeck', '\"Woyzeck\" is a haunting and intense theatrical masterpiece by Georg Büchner. The play follows the tragic journey of a poor soldier named Woyzeck, exploring themes of societal oppression, psychological turmoil, and human vulnerability. With raw intensity and evocative storytelling, it delves into the depths of the human psyche, leaving a profound impact.', '2023-05-01', '2023-05-21', 'Georg Büchner\'s tragic play comes alive on their stage, depicting the harrowing journey of the impoverished soldier, Woyzeck. The skilful direction and powerful performances unveil the depths of human struggle, societal oppression, and psychological turmoil.\r\n\r\nThe ensemble cast expertly delves into their characters, portraying the raw emotions and complexities of the story. Woyzeck\'s descent into madness and the manipulation he faces are portrayed with raw intensity, leaving a profound impact on the audience.\r\n\r\nThe production\'s set design and atmospheric lighting contribute to the play\'s haunting ambiance, amplifying the emotional turmoil of the characters. From the grim and oppressive barracks to the nightmarish glimpses into Woyzeck\'s mind, the stage becomes a canvas of emotional intensity.\r\n\r\nThe Local Theatre Company\'s \"Woyzeck\" stands as a testament to our dedication to bringing powerful and evocative stories to life. The seamless collaboration of the creative team ensures that every aspect of the production enhances the overall narrative.\r\n\r\nWoyzeck is an enthralling and evocative theatrical experience. It showcases the timeless relevance of Büchner\'s work, as it delves into the depths of human suffering, vulnerability, and societal pressures. With its exceptional performances and immersive staging, this rendition of \"Woyzeck\" leaves a lasting impression, provoking contemplation long after the curtains fall.', '2023-03-14', 'woyzeck.jpg', 'Woyzeck', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `heading` varchar(64) DEFAULT NULL,
  `comment` text NOT NULL,
  `date_added` date NOT NULL DEFAULT current_timestamp(),
  `fk_userBlog` int(11) NOT NULL,
  `pending` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `heading`, `comment`, `date_added`, `fk_userBlog`, `pending`) VALUES
(47, 'EXCELLENT!', 'An extraordinary showcase of dramatic prowess and emotional depth. Tennessee Williams\' timeless masterpiece was brought to life with stunning authenticity, delving into the complexities of human relationships and societal pressures. The cast delivered performances of unparalleled brilliance, capturing the nuances of each character with incredible finesse. Maggie\'s fiery passion and Brick\'s internal struggle were portrayed with captivating intensity, evoking a profound connection with the audience. The set design exuded opulence and perfectly complemented the Southern atmosphere, adding a visual feast to the already powerful narrative. The play\'s exploration of mendacity, desire, and familial conflicts resonated deeply, stimulating thought and introspection. The Local Theatre Company\'s direction and execution showcased a remarkable understanding of Williams\' intricate themes, making the production a true work of art. This rendition of \"Cat on a Hot Tin Roof\" was a triumph, leaving an indelible impact on the hearts and minds of the audience. The company\'s dedication to excellence in theatrical storytelling was evident in every moment, cementing their reputation as a force to be reckoned with in the world of live theatre.', '2023-07-31', 58, 0),
(52, 'Brilliant!', '\"Othello\" was an absolute tour de force! The Local Theatre Company\'s production was spellbinding and emotionally charged. The actors\' performances were exceptional, especially Othello\'s descent into jealousy and Iago\'s manipulative machinations. The set design and lighting created an immersive experience, drawing us into the world of Shakespeare\'s tragedy. A captivating and unforgettable night at the theater!', '2023-05-05', 69, 0),
(53, 'Disappointing', 'This left me feeling deeply unsettled and unsatisfied. The play\'s storyline felt disjointed, making it hard to connect with the characters and their motivations. The performances lacked the emotional depth needed to carry such a heavy and complex narrative. Additionally, the set design seemed uninspired and did little to enhance the overall experience. Unfortunately, this rendition of \"Woyzeck\" fell short of my expectations, leaving me disheartened and unengaged throughout the performance.', '2023-05-03', 70, 0),
(54, 'Mixed feelings', '\r\nThe Local Theatre Company\'s production of \"Woyzeck\" left me with mixed emotions. On one hand, the play\'s exploration of societal oppression and psychological turmoil was undeniably powerful, and some of the performances were genuinely moving. However, the narrative felt somewhat disjointed, making it challenging to fully immerse myself in the story. While certain actors delivered compelling portrayals, others lacked the emotional depth needed for such a heavy and complex play. The set design was visually interesting but didn\'t always enhance the overall experience. Despite its flaws, \"Woyzeck\" managed to evoke thought-provoking themes, leaving me with lingering reflections on the human condition and the pressures of society.', '2023-05-18', 71, 0),
(55, 'HILARIOUS!!', 'What an uproarious and side-splitting theatrical delight! From the opening scene to the final curtain call, the play had the audience roaring with laughter. The impeccable comedic timing of the cast, coupled with their brilliant physical humor, had us in stitches throughout. The clever farcical elements and chaotic mishaps that unfolded during the play-within-a-play scenario were brilliantly executed, leaving us gasping for breath. The witty dialogue and hilarious situations had us doubled over with laughter, and we couldn\'t help but admire the actors\' impeccable delivery of the comedic gold. The set design and revolving stage added another layer of hilarity, creating a symphony of comedic brilliance. \"Noises Off!\" was a true testament to the power of live theater to bring joy and laughter to the audience. The Local Theatre Company\'s production was an unforgettable experience, leaving us with smiles on our faces long after leaving the theater. If you want an evening filled with non-stop laughter and a heartwarming appreciation for the art of comedy, \"Noises Off!\" is an absolute must-see!', '2023-06-04', 72, 0),
(56, 'Amaziiiing', '\r\n intense! The actors were on fire, bringing mad drama to the stage. The family\'s twisted dynamics had me shook! Maggie\'s sass and Brick\'s brooding were on point. The set was sleek, setting the mood for the Southern heat. This play deals with real stuff like mendacity and desire. Major props to The Local Theatre Co. for slaying this classic with style! 🔥🔥🔥 10/10, would watch again! 💯', '2023-07-24', 73, 0),
(57, '9/10', 'Othello proved to be a masterful and intellectually stimulating production. The timeless tragedy unfolded with poignancy and depth, exploring themes of jealousy, manipulation, and the complexity of human emotions. The seamless blending of classic Shakespearean language with contemporary nuances showcased the actors\' artistic prowess. Othello\'s tragic downfall was portrayed with profound subtlety, while Iago\'s Machiavellian machinations evoked a chilling sense of malevolence. The intricate set design and atmospheric lighting added layers of symbolism, enhancing the play\'s thematic depth. The performances exuded a captivating authenticity, allowing the audience to delve into the characters\' psychological complexities. The play\'s emotional crescendos were met with a poignant silence that lingered in the theatre, leaving a profound impact on the spectators. The Local Theatre Company\'s rendition of \"Othello\" was a testament to the timeless relevance of Shakespeare\'s work and the enduring power of live theatre to provoke introspection and contemplation. This thought-provoking and intellectually engaging production stands as a testament to the company\'s commitment to delivering high-quality and meaningful theatre experiences', '2023-05-14', 74, 0),
(58, 'Complex and nuanced', 'The actors were superb in this, exemplifying their artistic prowess and dedication to thought-provoking storytelling. Georg Büchner\'s tragic narrative was expertly brought to life, exploring the complexities of the human psyche and the impact of societal pressures on the vulnerable. The nuanced performances of the cast showcased a profound understanding of the characters, with Woyzeck\'s descent into madness portrayed with haunting authenticity. The play\'s raw emotional intensity was complemented by the evocative set design, which vividly captured the bleakness of the characters\' existence. The skilful direction allowed the audience to immerse themselves in Woyzeck\'s tormented world, raising compelling questions about the nature of human suffering and the consequences of marginalization. The juxtaposition of vivid realism and surreal elements added layers of meaning to the narrative, leaving the audience in awe of the production\'s depth and complexity. This rendition of \"Woyzeck\" stands as a testament to The Local Theatre Company\'s commitment to delivering compelling and intellectually stimulating theatre, inviting contemplation on the profound themes it explores. With a deft blend of artistry and storytelling, this production leaves a lasting impression, demonstrating the enduring relevance of Büchner\'s work and the power of live theatre to provoke introspection and emotional resonance.', '2023-05-20', 75, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userblog`
--

CREATE TABLE `userblog` (
  `id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `fk_blog_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userblog`
--

INSERT INTO `userblog` (`id`, `fk_user_id`, `fk_blog_id`) VALUES
(58, 19, 14),
(69, 27, 15),
(70, 27, 17),
(71, 28, 17),
(72, 28, 13),
(73, 28, 14),
(74, 29, 15),
(75, 29, 17);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(264) NOT NULL,
  `email` varchar(64) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `is_admin` int(11) NOT NULL,
  `firstname` varchar(60) DEFAULT NULL,
  `lastname` varchar(60) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `post_code` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `active`, `is_admin`, `firstname`, `lastname`, `address`, `city`, `post_code`) VALUES
(14, 'admin', '$2y$10$bihFWrC8SLISdric/zq8lecnOKhO908Dkn8Hh43SZQ4bRmJ/h2yyC', 'admin@email.com', 1, 1, NULL, NULL, NULL, NULL, NULL),
(15, 'user', '$2y$10$tCiq99p3PfLKj1VdWXEv4e.ZNyq.MFPQrauRLuLkg90DRUE7cgNWa', 'user@email.com', 1, 0, NULL, NULL, NULL, NULL, NULL),
(17, 'user3', '$2y$10$UnKYp0zvzquedzrTQU1l9.4PgCaC9.HRQmGphOP1IU9yPPK37RdTu', 'user3@email.com', 1, 0, NULL, NULL, NULL, NULL, NULL),
(18, 'bobby', '$2y$10$WTMEkjwdX6kIR8nsM4GQzuscbMzOIKwSWQRxkxyfjDywQ.WWntO3u', 'burnettbobbie@gmail.com', 1, 0, 'Roberta', 'Burnett', '2/1 184 GARRIOCH ROAD', 'GLASGOW', 'G20 8RW'),
(19, 'general', '$2y$10$pSSchL2/yKTAMUZI/mD6p.9bZRGDJjUl6jXUzzhAVf9jcpjla4QNS', 'gen@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL),
(27, 'Mimi', '$2y$10$.DtLdp80Jd0AUrzS3WsAruMmqUeaNJwGixj8/TaAa9T2sM5wTsorO', 'mimsy.baker@gmail.com', 1, 0, 'Mimi', 'Baker', '24 Clanricarde Drive', 'London', 'W3 9G4'),
(28, 'dan1988', '$2y$10$xv6Sh23jJOoP29bfYosuQOLa.DOGzf/8s9PKFUh1YagHrqmL0Rii2', 'dantheman@yahoo.co.uk', 1, 0, 'Daniel', 'Hands', 'Flat 2/2, Novar Drive', 'Glasgow', 'G20 PNQ'),
(29, 'avidSitter', '$2y$10$o8mIw2ZWdMzBkNHpNxH3dul9fDHKvbypngnvWkd.1TiIliME9Pv1.', 'Marc.Pasquale@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_join` (`fk_userBlog`);

--
-- Indexes for table `userblog`
--
ALTER TABLE `userblog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`fk_user_id`),
  ADD KEY `fk_blog` (`fk_blog_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `userblog`
--
ALTER TABLE `userblog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_join` FOREIGN KEY (`fk_userBlog`) REFERENCES `userblog` (`id`);

--
-- Constraints for table `userblog`
--
ALTER TABLE `userblog`
  ADD CONSTRAINT `fk_blog` FOREIGN KEY (`fk_blog_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`fk_user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
