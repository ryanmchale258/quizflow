Products
id, name, sku(store), url, image
CREATE TABLE `quizflow`.`qf_products` (
`products_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`products_name` VARCHAR(75) NOT NULL ,
`products_sku` VARCHAR(150) NOT NULL ,
`products_url` VARCHAR(150) NOT NULL ,
`products_image` VARCHAR(150) NOT NULL ,
PRIMARY KEY (`products_id`)) ENGINE = InnoDB;


Endpoint
id path
1  25_1:a_2:1_
2  35_1:
3  36_1:
4
5
CREATE TABLE `quizflow`.`qf_endpoints` (
`endpoints_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`endpoints_path` VARCHAR(100) NOT NULL ,
PRIMARY KEY (`endpoints_id`)) ENGINE = InnoDB;

Products_Endpoint
id product endpoint_id
1     5       1
2     5       2
3     5       3
4     7       3
CREATE TABLE `quizflow`.`qf_products_endpoints` (
`products_endpoints_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`products_endpoints_product` INT(4) UNSIGNED NOT NULL ,
`products_endpoints_endpoint` INT(4) UNSIGNED NOT NULL ,
PRIMARY KEY (`products_endpoints_id`)) ENGINE = InnoDB;

Quiz
id name, datetime, active
CREATE TABLE `quizflow`.`qf_quiz` (
`quiz_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`quiz_name` VARCHAR(75) NOT NULL ,
`quiz_datetime` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ,
`quiz_active` INT(1) UNSIGNED NOT NULL DEFAULT '0' ,
PRIMARY KEY (`quiz_id`)) ENGINE = InnoDB;


Endpoints_Quiz
id product quiz
1  5        2
2  5		3
CREATE TABLE `quizflow`.`qf_endpoints_quizzes` (
`endpoints_quizzes_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`endpoints_quizzes_endpoint` INT(4) UNSIGNED NOT NULL ,
`endpoints_quizzes_quiz` INT(4) UNSIGNED NOT NULL ,
PRIMARY KEY (`endpoints_quiz_id`)) ENGINE = InnoDB;

Question
id stage question exits         node_id
	1	    text	no,no,yes		0,0,1
CREATE TABLE `quizflow`.`qf_questions` (
`questions_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`questions_stage` INT(4) NOT NULL ,
`questions_question` TEXT NOT NULL ,
`questions_exits` TEXT NOT NULL ,
`questions_exits_ids` VARCHAR(150) NOT NULL ,
PRIMARY KEY (`questions_id`)) ENGINE = InnoDB;


Question Product Quiz
id question_id product_id quiz_id
CREATE TABLE `quizflow`.`qf_quizzes_questions_products` (
`quizzes_questions_products_id` INT(4) UNSIGNED NOT NULL AUTO_INCREMENT ,
`quizzes_questions_products_quiz` INT(4) UNSIGNED NOT NULL ,
`quizzes_questions_products_question` INT(4) UNSIGNED NOT NULL ,
`quizzes_questions_products_product` INT(4) UNSIGNED NOT NULL ,
PRIMARY KEY (`quizzes_questions_products_id`)) ENGINE = InnoDB;
