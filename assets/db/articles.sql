-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2023 at 01:39 PM
-- Server version: 5.7.40
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articles`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `article` text,
  `categorie` int(11) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categorie` (`categorie`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `article`, `categorie`, `author`) VALUES
(39, 'HTML5', 'HTML, or Hypertext Markup Language, is a markup language used to create the structure and layout of web pages. It is the backbone of web development, and is essential for creating modern, responsive websites.\r\n\r\nHTML documents are made up of a series of elements, which are represented by tags. These tags are used to define different types of content, such as headings, paragraphs, images, and links. For example, an h1 tag is used to create a top-level heading, while a p tag is used for paragraphs.\r\n\r\nOne of the key features of HTML is its ability to create links between web pages. This is achieved through the use of anchor tags, or a tags. These tags allow you to create hyperlinks, which allow users to navigate between different web pages.\r\n\r\nIn addition to basic elements, HTML also includes a variety of more advanced features. For example, it allows you to create forms, which can be used to gather information from users. It also includes a number of semantic elements, such as article and section, which can be used to give structure to your content.\r\n\r\nIn order to create a website, you must first create a HTML document. You can do this by using a text editor, such as Notepad, and saving your document with the .html file extension. Once you have created your HTML document, you can then use CSS and JavaScript to add styling and interactivity to your website.\r\n\r\nIt\'s important to note that HTML is constantly evolving, with new versions being released regularly. The current version is HTML5, which introduces new elements and features such as semantic tags, multimedia support, and improved form controls.\r\n\r\nAs a web developer, it is essential to have a good understanding of HTML and how to use it effectively. With its powerful capabilities, it is the foundation upon which all websites are built and will continue to be an important technology for years to come.', 11, 'yassir'),
(41, 'The Advancements in Artificial Intelligencef', 'Artificial intelligence (AI) has come a long way in recent years, with new developments and advancements happening at a rapid pace. From self-driving cars to virtual assistants, AI is quickly becoming a part of our everyday lives. In this article, we will take a deep dive into the world of AI, discussing its history, current state, and future potential.\r\n\r\nThe history of AI can be traced back to the 1950s, when scientists first began to explore the idea of creating machines that could think and learn like humans. One of the earliest examples of AI was the Turing Test, developed by Alan Turing in 1950. The test was designed to determine whether or not a machine could demonstrate intelligent behavior that was indistinguishable from that of a human.\r\n\r\nIn the decades that followed, AI research made significant progress, but it wasn\'t until the 21st century that we began to see real-world applications of the technology. Today, AI is used in a wide range of industries, from healthcare to finance to transportation.\r\n\r\nOne of the most popular and well-known applications of AI is in the field of self-driving cars. Companies like Tesla, Google, and Uber are all working on developing autonomous vehicles that can drive themselves without human input. These cars use a combination of sensors, cameras, and machine learning algorithms to navigate the roads and avoid obstacles.\r\n\r\nAnother area where AI is making a big impact is in healthcare. AI-powered diagnostic tools are being used to analyze medical images and identify diseases like cancer. These tools can analyze large amounts of data much faster and more accurately than humans, helping to improve patient outcomes.\r\n\r\nAI is also being used in the field of finance, where it is being used to analyze financial data and make predictions about the stock market. This is known as &quot;robo-advisors&quot; and it helps to automate investment advice and portfolio management.\r\n\r\nIn addition to these specific applications, AI is also being used to improve a wide range of products and services. For example, virtual assistants like Amazon\'s Alexa and Apple\'s Siri use AI to understand and respond to voice commands. Online retailers like Amazon and Netflix use AI to personalize recommendations to customers. And chatbots are being used to automate customer service and support.\r\n\r\nLooking to the future, the potential for AI is truly staggering. Experts believe that AI could be used to solve some of the world\'s most pressing problems, such as climate change and poverty. It could also lead to the creation of new industries and job opportunities.\r\n\r\nHowever, with the potential for AI to revolutionize so many aspects of our lives, it is important that we consider the ethical implications of the technology. As we continue to develop and refine AI, it is crucial that we take steps to ensure that it is used responsibly and for the benefit of all people.\r\n\r\nIn conclusion, AI is a technology that is rapidly advancing and has the potential to transform many aspects of our lives. From self-driving cars to virtual assistants, AI is becoming an integral part of our everyday lives. While there are many exciting possibilities for the future of AI, it is important that we consider the ethical implications of the technology and take steps to ensure that it is used responsibly. With the right approach, AI has the potential to be a powerful tool for good that can help us to create a better world for all.', 1, 'ChatGPT');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Artificial intelligence and machine learning'),
(2, 'Internet of Things (IoT)'),
(3, 'Cloud computing'),
(4, 'Big data and analytics'),
(5, 'Cybersecurity'),
(6, 'Virtual and augmented reality'),
(7, '5G networks'),
(8, 'Blockchain'),
(9, 'Robotics and drones'),
(10, 'Biotechnology and genetic engineering'),
(11, 'Web Developement'),
(12, 'Others');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'ayoub', 'ayoubelayouk@gmail.com', '12345678');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`categorie`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
