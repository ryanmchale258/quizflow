CREATE TABLE `qf_endpoints` (
  `endpoints_id` int(4) UNSIGNED NOT NULL,
  `endpoints_path` varchar(100) NOT NULL,
  `endpoints_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_endpoints`
--

INSERT INTO `qf_endpoints` (`endpoints_id`, `endpoints_path`, `endpoints_description`) VALUES
(1, '1_1:a_2:a_3:b', 'Soothing Cleanser in the AM &amp; PM, as well as a facial massage with the Black Charcoal Soap a few times a week. See a how to video for the facial massage on the charcoal soap product page at <a href="http://www.shopbattysbath.com" target="_blank">ShopBattysBath.com</a>'),
(2, '1_1:a:1:b', 'Grean Tea &amp; Pineapple Liquid Facial Cleanser in the AM &amp; PM, as well as a facial massage with the Black Charcoal Soap a few times a week. See a how to video for the facial massage on the charcoal soap product page at <a href="http://www.shopbattysbath.com" target="_blank">ShopBattysBath.com</a>');

-- --------------------------------------------------------

--
-- Table structure for table `qf_endpoints_quizzes`
--

CREATE TABLE `qf_endpoints_quizzes` (
  `endpoints_quizzes_id` int(4) UNSIGNED NOT NULL,
  `endpoints_quizzes_endpoint` int(4) UNSIGNED NOT NULL,
  `endpoints_quizzes_quiz` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_endpoints_quizzes`
--

INSERT INTO `qf_endpoints_quizzes` (`endpoints_quizzes_id`, `endpoints_quizzes_endpoint`, `endpoints_quizzes_quiz`) VALUES
(1, 1, 1),
(2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `qf_products`
--

CREATE TABLE `qf_products` (
  `products_id` int(4) UNSIGNED NOT NULL,
  `products_name` varchar(75) NOT NULL,
  `products_sku` varchar(150) NOT NULL,
  `products_url` varchar(150) NOT NULL,
  `products_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_products`
--

INSERT INTO `qf_products` (`products_id`, `products_name`, `products_sku`, `products_url`, `products_image`) VALUES
(1, 'Soothing Cleanser', '13541', 'test.com/test', 'test.jpg'),
(2, 'Black Charcoal Soap', '45321', 'test.com/test', 'test.jpg'),
(3, 'Green Tea &amp; Pineapple Liquid Facial Cleanser', '4532121', 'test.com/test', 'test.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qf_products_endpoints`
--

CREATE TABLE `qf_products_endpoints` (
  `products_endpoints_id` int(4) UNSIGNED NOT NULL,
  `products_endpoints_product` int(4) UNSIGNED NOT NULL,
  `products_endpoints_endpoint` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_products_endpoints`
--

INSERT INTO `qf_products_endpoints` (`products_endpoints_id`, `products_endpoints_product`, `products_endpoints_endpoint`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `qf_questions`
--

CREATE TABLE `qf_questions` (
  `questions_id` int(4) UNSIGNED NOT NULL,
  `questions_quiz` int(4) UNSIGNED NOT NULL,
  `questions_stage` int(4) NOT NULL,
  `questions_input` varchar(1) DEFAULT NULL,
  `questions_question` text NOT NULL,
  `questions_exits` text NOT NULL,
  `questions_exits_ids` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_questions`
--

INSERT INTO `qf_questions` (`questions_id`, `questions_quiz`, `questions_stage`, `questions_input`, `questions_question`, `questions_exits`, `questions_exits_ids`) VALUES
(1, 1, 1, NULL, 'Do you want to exfoliate at the same time as cleansing in the AM &amp; PM?', 'No, my skin is so sensitive I need an extremely mild cleanser &amp; a non-abrasive exfoliant.|No, I''d like to cleanse in the AM &amp; do both in the PM.|Yes, exfoliating is needed both in the AM &amp; PM because I have a lot of congestion (blackheads and whiteheads) or flakey.', 'a|b|c'),
(2, 1, 2, 'a', 'Do you have acne?', 'No|Yes', 'a|b'),
(3, 1, 3, 'a', 'Are you sure? Pizza face?', 'Fuck you|Don''t look at me|I hate myself', ''),
(4, 1, 3, 'b', 'Yeah I don''t know why I even asked that. It''s obvious. You''re ugly.', 'Thanks|Cool', '');

-- --------------------------------------------------------

--
-- Table structure for table `qf_quiz`
--

CREATE TABLE `qf_quiz` (
  `quiz_id` int(4) UNSIGNED NOT NULL,
  `quiz_name` varchar(75) NOT NULL,
  `quiz_datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quiz_active` int(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qf_quiz`
--

INSERT INTO `qf_quiz` (`quiz_id`, `quiz_name`, `quiz_datetime`, `quiz_active`) VALUES
(1, 'Find the Perfect Cleanser and/or Exfoliator For Your Skin', '2016-01-10 17:43:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qf_quizzes_questions_products`
--

CREATE TABLE `qf_quizzes_questions_products` (
  `quizzes_questions_products_id` int(4) UNSIGNED NOT NULL,
  `quizzes_questions_products_quiz` int(4) UNSIGNED NOT NULL,
  `quizzes_questions_products_question` int(4) UNSIGNED NOT NULL,
  `quizzes_questions_products_product` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `qf_endpoints`
  ADD PRIMARY KEY (`endpoints_id`);

--
-- Indexes for table `qf_endpoints_quizzes`
--
ALTER TABLE `qf_endpoints_quizzes`
  ADD PRIMARY KEY (`endpoints_quizzes_id`);

--
-- Indexes for table `qf_products`
--
ALTER TABLE `qf_products`
  ADD PRIMARY KEY (`products_id`);

--
-- Indexes for table `qf_products_endpoints`
--
ALTER TABLE `qf_products_endpoints`
  ADD PRIMARY KEY (`products_endpoints_id`);

--
-- Indexes for table `qf_questions`
--
ALTER TABLE `qf_questions`
  ADD PRIMARY KEY (`questions_id`);

--
-- Indexes for table `qf_quiz`
--
ALTER TABLE `qf_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `qf_quizzes_questions_products`
--
ALTER TABLE `qf_quizzes_questions_products`
  ADD PRIMARY KEY (`quizzes_questions_products_id`);

  ALTER TABLE `qf_endpoints`
  MODIFY `endpoints_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qf_endpoints_quizzes`
--
ALTER TABLE `qf_endpoints_quizzes`
  MODIFY `endpoints_quizzes_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `qf_products`
--
ALTER TABLE `qf_products`
  MODIFY `products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `qf_products_endpoints`
--
ALTER TABLE `qf_products_endpoints`
  MODIFY `products_endpoints_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qf_questions`
--
ALTER TABLE `qf_questions`
  MODIFY `questions_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `qf_quiz`
--
ALTER TABLE `qf_quiz`
  MODIFY `quiz_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `qf_quizzes_questions_products`
--
ALTER TABLE `qf_quizzes_questions_products`
  MODIFY `quizzes_questions_products_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
