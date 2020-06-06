-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 03:59 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matnepal`
--

-- --------------------------------------------------------

--
-- Table structure for table `per_about_us`
--

CREATE TABLE `per_about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `meta_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `show_in_frontend` enum('yes','no') NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_about_us`
--

INSERT INTO `per_about_us` (`id`, `title`, `content`, `meta_title`, `meta_keyword`, `meta_description`, `show_in_frontend`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Message from Managing Director', '<p style=\"text-align:justify\"><strong>Dear Customers &amp; Travel Partners,</strong></p>\r\n\r\n<p style=\"text-align:justify\">Mountain Adventure is a Trekking &amp; Tour Company engaged in all the tourism activities that Nepal has to offer. Mountain Adventure has had a wonderful journey of 35 years in the tourism industry and the company is one of the oldest and reputed companies registered under the Government and Tourism Industry of Nepal. My own travel journey has now seen 43 beautiful years in the hospitality Industry.</p>\r\n\r\n<p style=\"text-align:justify\">We started with a humble aspiration to delight our entire guest by providing them with an unparalleled service when they come to get acquainted with the Himalayas. That was 1983. Today we have grown into a business that has served tens of thousands of customer. While we have grown exponentially, and while we have expanded our footprints to beyond Nepal, our commitment to provide a service that is second to none remains intact. Our personalized services are what make us stand out. We shall continue to invest on technology and employee training and development to ensure services class apart.</p>\r\n\r\n<p style=\"text-align:justify\">We would not have succeeded without the support and friendship of our customers and Industry partners. We would like to take this opportunity to thank you for the trust that you have put on us and strongly believe that you will continue to do so in the days to come. With long standing and excellent business relationship with Hoteliers, Tourism offices, Airlines and other Supplier Agencies we are confident to surpass your expectations, always.</p>\r\n\r\n<p style=\"text-align:justify\">&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;&mdash;-</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Mr. Deepak Roka</strong></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Managing Director</strong></p>', NULL, NULL, NULL, 'yes', '5c04ce0c20ea4message.jpg', '2018-09-16 13:00:47', '2018-12-03 12:17:44'),
(3, 'Our Services', '<p><span style=\"color:rgb(0, 0, 255); font-family:inherit\"><strong>About us and our Services:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Mountain Adventure is a Trekking &amp; Tour company based in Kathmandu, Nepal. Mountain Adventure was registered in the Department of Industry and Department of Tourism of Government of Nepal in the year 1983. The company is run by Mr. Deepak Roka since its establishment and has been recognized as one of the highly professional tour and trekking companies in Nepal. Mountain Adventure has been featured in various magazines such as High Magazine, English Magazine &amp; Zaobao. David Reed, the author of &ldquo;The Rough Guide&rdquo; published in a travel book entitled &ldquo;Nepal&rdquo; has highly recommended Mountain Adventure Trekking by adding &ldquo;Mountain Adventure aims to provide the flexibility sought by independent travellers visiting Nepal&rdquo;.</p>\r\n\r\n<p style=\"text-align:justify\">We are popular in tourism activities in Nepal, Indian, Bhutan &amp; Tibet. We have customers and industry partners from all around the world and we serve each client needs as per their request and requirements. We offer full flexibility and provide personalised service to each and every customer on their travel itineraries by which we believe each of our valued travellers will have a wonderful holiday experience in Nepal. We offer various tour, trekking and other tourism activities varying periods from 2 to 28 days or more and are conducted at a pace to suit your time and abilities. We not only organize tour and treks for people with varied interests and needs, but also design &amp; customize special programs to meet their interests and passion for travel. We always strive to provide our customer the best travel experience, personalized service and flexibility during the trip.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 255); font-family:inherit\"><strong>Management Team:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">The Company is managed by a team of experienced professionals and is equipped with the latest IT systems to ensure better management, communication and up to date information management. The Company is headed by its Managing Director Mr. Deepak Roka.</p>\r\n\r\n<p style=\"text-align:justify\"><strong><span style=\"color:rgb(0, 0, 255); font-family:inherit\">Services we Offer:</span></strong></p>\r\n\r\n<p style=\"text-align:justify\">We provide wide array of services such as:</p>\r\n\r\n<ul>\r\n	<li>Tour, Trekking, Mountaineering, White water Rafting, Mountain Biking, Adventure activities, Hotel Booking, Cultural Tour, Pilgrimage Tour, Wildlife activities, Home Stay, School/College Exchange programs, Community Service programs, Volunteer Service, MICE, etc.</li>\r\n</ul>', NULL, NULL, NULL, 'yes', '5c04cfd627e7cservices.png', '2018-12-03 11:39:49', '2018-12-03 12:25:22'),
(4, 'Our Mission', '<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 255); font-family:inherit\"><strong>Our Mission:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\">Warm hospitality, personalized service and best travel itinerary for our customers to cherish for their life time.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(0, 0, 255); font-family:inherit\"><strong>Value Proposition:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><strong>Excellent Service &amp; Standards</strong>&nbsp;&ndash; We collect feedback from each customer directly, which are later reviewed and acted upon promptly to ensure maximum customer satisfaction.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Availability at all times</strong>&nbsp;&ndash; We ensure that our customers and agents are able to reach us whenever they need our assistance. Our Operation and Sales team can be reached via email, mobile phone, landline, instant messaging etc. Our operation staffs are available round the clock to attend to our customer&rsquo;s need.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Enquiry turnaround time</strong>&nbsp;&ndash; We respond to enquiries within a maximum of one working day. On an average, our revert time for a query is less than 90 minutes.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Competative Rates</strong>&nbsp;&ndash; We understand the competitive nature of the industry and the need for competitive rates, so we strive to provide competitive rates to all our partner agents and customers.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Safety&nbsp;</strong>&ndash; Safety of our client is of utmost important to us. We make sure special attention &amp; safety measures are adopted to ensure safety during tours, treks and adventure activities.</p>\r\n\r\n<p style=\"text-align:justify\"><strong>Eco Friendly</strong>&nbsp;&ndash; We try to preserve nature by obtaining eco friendly methods during our tours, trekking and other travel activities.</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(51, 51, 153); font-family:inherit\"><strong>Slogans:</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(51, 51, 153); font-family:inherit\"><strong>Our Nepal Treks &amp; Tours are backed by 35 years of experience.</strong></span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"color:rgb(51, 51, 153); font-family:inherit\"><strong>Journey to the Mystical part of the World was never easier but more comfortable with us</strong></span></p>\r\n\r\n<p><span style=\"color:rgb(51, 51, 153); font-family:inherit\"><strong>Just arrive at the Airport &ndash; Layback and relax and we will take care of the rest.</strong></span></p>', NULL, NULL, NULL, 'yes', '5c04cff634976mission.jpg', '2018-12-03 11:40:12', '2018-12-03 12:25:54');

-- --------------------------------------------------------

--
-- Table structure for table `per_blocks`
--

CREATE TABLE `per_blocks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `show_in_frontend` enum('yes','no') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon_class` varchar(100) DEFAULT NULL,
  `meta_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_blocks`
--

INSERT INTO `per_blocks` (`id`, `title`, `description`, `show_in_frontend`, `image`, `icon_class`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(4, 'KNOW US', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'yes', NULL, 'fas fa-street-view', NULL, NULL, NULL, '2018-10-02 15:33:25', '2018-10-02 15:33:25'),
(5, 'WHY CHOOSE US', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed in lobortis nisl, vitae iaculis sapien. Phasellus ultrices gravida massa luctus ornare. Suspendisse blandit quam elit, eu imperdiet neque semper.', 'yes', NULL, 'fa fa-desktop', NULL, NULL, NULL, '2018-10-02 15:33:56', '2018-10-02 15:33:56'),
(6, 'OUR SERVICES', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'yes', NULL, 'fa fa-flag', NULL, NULL, NULL, '2018-10-02 15:34:40', '2018-10-02 15:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `per_blog`
--

CREATE TABLE `per_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `blog_category_id` int(50) NOT NULL,
  `meta_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `image` varchar(100) DEFAULT NULL,
  `show_in_frontend` enum('yes','no') NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_blog`
--

INSERT INTO `per_blog` (`id`, `title`, `content`, `blog_category_id`, `meta_title`, `meta_keyword`, `meta_description`, `image`, `show_in_frontend`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'The Saturday City: Stockholm', '<p>Most of the people who know me know that I love Sweden. It&rsquo;s filled with beautiful landscapes, lakes, mountains, fjords, buildings, and of course people. If the country didn&rsquo;t have such a harsh winter.It&rsquo;s one of the most beautiful Old World cities I&rsquo;ve ever been to. The people are nice, the city is easily walkable, it&rsquo;s clean, it&rsquo;s hip, and it has a great nightlife. I think what makes Stockholm so charming is the setting. It&rsquo;s a small city set among a bay full of little islands and inlets. Stockholm&rsquo;s Old Town (<em>Gamla Stan</em>) was built on the central island in the 13th century. The city was the capital of the Swedish empire and rose to prominence as a major trading center. Now it&rsquo;s known for its architecture, expensive drinks, beautiful people, and green initiatives. Most of the city&rsquo;s historical charm is preserved in Gamla Stan, where the Royal Palace is located. But even outside of Gamla Stan, the buildings look historic and beautiful. The red, green, and yellow painted houses are especially so juxtaposed with fall foliage. Moreover, the city is filled with nature. Trees line most of the streets, there are a lot of squares and parks, and you are never too far from the water. There are a lot of things to do in Stockholm. I&rsquo;m never bored when I go there, and many of the activities cost little money, which is great because Stockholm isn&rsquo;t a cheap city.</p>\r\n\r\n<p>Here are my top picks for what to see while in Stockholm:</p>\r\n\r\n<p><strong>Walk through Gamla Stan</strong><br />\r\nThis is the &ldquo;Old Town&rdquo; of the city, with gorgeous architecture and cobblestone streets. This was the original part of the city, and here you&rsquo;ll see centuries-old buildings, the Nobel Museum, the Royal Palace, and the ancient homes of the aristocracy. The winding roads and alleys make for some great exploring and photography. In the summer it can get quite busy, so get there early if you want to explore without a crowd.</p>\r\n\r\n<p><strong>Tour the archipelago</strong><br />\r\nIt&rsquo;s worth spending a day island-hopping. Take a bus or car to one of the main islands, and from there you can travel by boat to explore some of the other islands in the vicinity. You can find tours from many points within the city. The good tours are the full-day ones that take you out to more secluded islands</p>\r\n\r\n<p><strong>Spend the day at Djurg&aring;rden Island</strong><br />\r\nThis gorgeous island is located right in the middle of&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/sweden-travel-tips/stockholm/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Stockholm</a>. It&rsquo;s a very popular place to go in the summer, with locals and tourists alike coming to visit. It&rsquo;s a great place to take a stroll or have a picnic, visit the amusement park (Gr&ouml;na Lund) or visit the historic Swedish village Skansen (which I&rsquo;ll talk about below!)</p>\r\n\r\n<p><strong>The Vasa Museum</strong><br />\r\nThis museum houses the world&rsquo;s only preserved 17th-century ship. This massive ship was supposed to highlight the power of the Swedish empire. Instead, the ship actually sank as soon as it left the dock and set sail. The cold waters of the bay preserved it the ship and now you can view it all in its unsailable glory.</p>\r\n\r\n<p><em>Gal&auml;rvarvsv&auml;gen 14, +46 8-519-548-80, vasamuseet.se. Open daily from 8:30am-6pm (June-August) and 10am-5pm for the rest of the year. Admission is 130 SEK for adults with discounts available. Free for anyone under 8.</em></p>\r\n\r\n<p><strong>The Royal Palace</strong><br />\r\nSweden still has a monarchy, and the King is the official head of state (though it&rsquo;s mostly just ceremonial). The palace was built between 1697-1754 in Gamla Stan and is where all the official duties are performed. It&rsquo;s also where representatives from other countries can be met for official events. When there are no state events going on it&rsquo;s open to the public.</p>\r\n\r\n<p><img alt=\"\" src=\"/matnepal/public/sms/text-editor/fileman/Uploads/stock2.jpg\" style=\"height:316px; width:540px\" /></p>\r\n\r\n<p><strong>Swedish History Museum</strong><br />\r\nIf you&rsquo;re interested in Scandinavian history, this museum covers the Stone Age to the Vikings. Here you&rsquo;ll find ancient treasures that date back to the Bronze Age all the way to the 16th century. The museum was founded in 1866 and the first collections were all of the items gathered by the Swedish monarchy over the centuries.</p>\r\n\r\n<p><em>Narvav&auml;gen 13-17, +46 8-519-556-00, historiska.se/home. Open daily from 10am-5pm from June-August with reduced hours of operation during the rest of the year. Admission is free.</em></p>\r\n\r\n<p><strong>National Museum</strong><br />\r\nThis art museum has works by famous painters and artists, including works by Rembrandt, Rubens, Goya, Renoir, Degas, and Gauguin, as well as famous Swedish artists like Carl Larsson, Ernst Josephson, C F Hill, and Anders Zorn. If you&rsquo;re a not a huge art buff you&rsquo;ll still enjoy the museum, and if you are a big fan then this collection will keep you busy for a while. It&rsquo;s been under renovation recently but it reopens in October 2018.</p>\r\n\r\n<p><em>S&ouml;dra Blasieholmshamnen, +46 8-519-543-00, nationalmuseum.se/en. Open Tuesday-Sunday from 11am-7pm (9pm on Thursdays).</em></p>\r\n\r\n<p><strong>Medieval Museum</strong><br />\r\nThe Medieval Museum is actually located underneath the Royal Palace. It&rsquo;s one of the better history museums in the city (most are not that great, to be honest). It covers life in medieval Sweden and life in&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/sweden-travel-tips/stockholm/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Stockholm</a>&nbsp;during the middle ages. The exhibits are detailed and informative, and the museum does a great job of illustrating how the city grew into what it is today.</p>\r\n\r\n<p><em>Str&ouml;mparterren 3, +46 8-508-316-20, medeltidsmuseet.stockholm.se. Open Tuesday-Sunday from 12pm-5pm (8pm on Wednesdays). Admission is free.</em></p>\r\n\r\n<p><strong>Fotografiska</strong><br />\r\nFotografiska is a photography gallery in the city that is home to numerous exhibits that showcase some awesome works of contemporary photography. The collections are quite expansive and there is also a bar on the top floor that also offers a great view of the city.</p>\r\n\r\n<p><em>Stadsg&aring;rdshamnen 22, +46 8-509-005-00, fotografiska.com/sto. Open Sunday-Wednesday from 9am-11pm and Thursday-Saturday 9am-1am. Admission is 145 SEK for aduls and 115 SEK for students and seniors.</em></p>\r\n\r\n<p><strong>ABBA: The Museum</strong><br />\r\nA trip to Stockholm wouldn&rsquo;t be complete without a visit to the quirkiest museum in town: the ABBA museum. While admission isn&rsquo;t cheap, this is a fun and interesting museum that&rsquo;s worth checking out if you&rsquo;re a fan of the pop sensation (or if you just want to see how silly the museum is!)</p>\r\n\r\n<p><em>Djurg&aring;rdsv&auml;gen 68, +46 8-121-328-60, abbathemuseum.com/en. Open daily from 10am-6pm (7pm on Wednesdays and Thursdays). Tickets are 250 SEK for adults with discounts available for students, children, and families.</em></p>', 8, NULL, NULL, NULL, '5bfd292824512stock1.jpg', 'yes', 18, '2018-11-26 16:42:42', '2018-12-10 13:15:41'),
(2, 'Finding the best travel deals', '<p>Finding the best travel deals is a matter of timing. A lot of people think travel is just plain expensive, but in reality, there are incredible deals happening all the time. They usually don&rsquo;t last too long, and you have to act quickly. That can sometimes be a problem when a deal requires jumping on a plane tomorrow (how many people can do that?), but in fact, most deals are for months in the future, giving you ample time to plan your schedule.</p>\r\n\r\n<p>Often I will book a flight and&nbsp;<em>then&nbsp;</em>figure out my plans. Since you can cancel a flight within 24 hours without incurring a fee, I lock in the deal and&nbsp;<em>then&nbsp;</em>figure out if I can make it work. Sometimes I can (like the $1,200 business-class flight from&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/united-states-travel-guide/los-angeles/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">LA</a>&nbsp;to&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/sweden-travel-tips/stockholm/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Stockholm</a>&nbsp;round-trip); sometimes I can&rsquo;t (like the $400&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/new-zealand-travel-tips/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">New Zealand</a>&nbsp;flights I had to cancel).</p>\r\n\r\n<p>I am always looking out for deals. Today, I want to give you a peek into where I go for travels deals, tips, and expert advice. After all, these resources focus solely on this one aspect of travel, so why not use them? I can&rsquo;t be everywhere and I can&rsquo;t know everything, so I rely on the specialists. If travel were a hospital, I would be your general practitioner and these people below are the specialists I would consult with!</p>\r\n\r\n<p>Here is where you will find the best travel deals online:</p>\r\n\r\n<p>When it comes to finding flight deals, I use these three websites for last minutes deals. There are always finding last minute flight deals. If you&rsquo;re looking for something last minute and are flexible on where and when you go, use these websites:</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.theflightdeal.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">The Flight Deal</a>: This is a great resource for finding cheap flights from the USA. If you&rsquo;re based in America, start your research here!</li>\r\n	<li><a href=\"http://www.secretflying.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Secret Flying</a>: If you&rsquo;re based in Europe, this is the cheap flight website you&rsquo;re going to want to start with as they can find amazing budget flights from Europe to destinations all around the globe.</li>\r\n	<li><a href=\"http://www.holidaypirates.com/flights\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Holiday Pirates</a>: No matter where you&rsquo;re based this is a great cheap flight website so be sure to always check here for more deals.</li>\r\n	<li><a href=\"https://scottscheapflights.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Scott&rsquo;s Cheap Flights</a>: Another awesome resource for finding flight deals from the US.</li>\r\n</ul>\r\n\r\n<p>I&rsquo;m subscribed to all of their newsletters so I don&rsquo;t miss any flight deals. Getting all three in my inbox each day ensures I won&rsquo;t miss anything in case one website doesn&rsquo;t pick up the deal. If you&rsquo;re simply looking to book a flight, check out best flight search engine and online booking websites listed below. It&rsquo;s important to remember that there is no&nbsp;<em>one</em>&nbsp;best online booking website. All the search engine websites have blind spots. They all have strengths and weaknesses so it&rsquo;s important to search a few different places before you book your flight.</p>\r\n\r\n<p>Generally, the BEST booking sites are the following:</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://track.webgains.com/click.html?wglinkid=701003&amp;wgcampaignid=176915\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Momondo</a>&nbsp;&ndash; Momondo searches budget airlines that many other search engines don&rsquo;t look at, so you&rsquo;ll sometimes find cheaper flights here. Make it a habit of using Momondo in tandem with Skyscanner.</li>\r\n	<li><a href=\"http://www.anrdoezrs.net/click-3032045-12837948\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Skyscanner</a>&nbsp;&ndash; Skyscanner is a very intuitive platform that lets you search for an open-ended trip. If you&rsquo;re not 100% sure where you want to go (or when) then start your search with Skyscanner.</li>\r\n	<li><a href=\"http://tracking.skypicker.com/aff_c?offer_id=176&amp;aff_id=4302\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Kiwi</a>&nbsp;&ndash; Kiwi recently updated their search platform, making it much more intuitive and user friendly. You can also search multiple cities and countries at once, making this a must-use platform when looking for budget flights.</li>\r\n	<li><a href=\"https://rtwsecure.com/?a=39&amp;c=6&amp;p=r&amp;s1=\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">AirTreks</a>&nbsp;&ndash; If you&rsquo;re looking to plan a multi-city trip, AirTreks offers great dels for round-the-world adventures with multiple stops.</li>\r\n</ul>\r\n\r\n<p>I always start my searches with&nbsp;<a href=\"http://track.webgains.com/click.html?wglinkid=701003&amp;wgcampaignid=176915\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Momondo</a>. Momondo is a very legitimate website that returns the cheapest flight 92% of the time. They search booking websites and airlines all around the world to ensure that no deal goes unlooked. They cast the widest net and constantly are vetting the sites they search. Start with them! They are super legit.</p>\r\n\r\n<p>&nbsp;</p>', 8, NULL, NULL, NULL, '5bfd240644c70traveldeal.jpg', 'yes', 8, '2018-11-27 16:46:26', '2018-12-05 11:21:26'),
(3, 'Coral Bay : The Beach Paradise', '<p>We all have our own version of <em>The Beach</em>&nbsp;that spot in the world where all is perfect and all is paradise. I found my version back in 2007. It&rsquo;s a small town in Western Australia called Coral Bay. It&rsquo;s a one-road town with one bar, one supermarket, three restaurants, and three hotels. This is a small town. There&rsquo;s not much to do. And that&rsquo;s why I love it.</p>\r\n\r\n<p>Coral Bay is my paradise. From the first time, I visited, I fell in love with this idyllic little beach town in the middle of nowhere. On one side of Coral Bay, it&rsquo;s barren, arid cattle country, where sheep roam and truckers dodge kangaroos. On the other side, it&rsquo;s blue water, sandy beaches, and the Ningaloo Reef and its abundance of marine life.</p>\r\n\r\n<p>And, in between that, is a little town that&rsquo;s home to one hotel, an RV site, a bunch of backpackers, and some beach bums enjoy the tropical beauty at the end of the world.</p>\r\n\r\n<p>Everything in this town revolves around one giant white sand beach with turquoise blue water that stretches until infinity and a reef system so close to the land, you can swim to it. There are so many turtles, fish, and stingrays, it&rsquo;s too much to handle. When I was there in 2007, I woke up every day, swam with turtles, relaxed on the beach, and worked on my tan. At night, the setting sun would light up the sky in fiery tones of red and orange while I cooled off with a cold beer and good friends.</p>\r\n\r\n<p>Life in Coral Bay is perfection, and my time there went way too fast. I could have stayed for weeks, and I longed to go back and visit because a quiet beach town is all I want in life. When Tourism Australia invited me to Australia last month, I declined the offer at first. After all, I just went to&nbsp;<a href=\"https://www.nomadicmatt.com/travel-guides/australia-travel-tips/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Australia</a>&nbsp;at the beginning of the year. But when they told me I could go back to Coral Bay, I jumped at the chance.</p>\r\n\r\n<p><img alt=\"\" src=\"/matnepal/public/sms/text-editor/fileman/Uploads/coral.jpg\" style=\"height:351px; width:600px\" /></p>\r\n\r\n<p>I wondered what the town would look like after three years. Tourism in Western Australia has grown in recent years, and I wondered if this sleepy town had been spoiled. Would I return to my one-road paradise just to find multiple roads, more hotels, and more restaurants? After three years away, I was glad to see the town was still quiet and peaceful.</p>\r\n\r\n<p>Whatever Coral Bay looked like now, I planned on doing more this visit than just sitting on the beach. To begin with, it was off to explore the outback that surrounds Coral Bay. While I was in the countryside, kangaroos jumped all around, eagles and other birds flew above, and there was wildlife everywhere.</p>\r\n\r\n<p>Then we went down to the beach and spotted parrotfish jumping in the shallows and reef sharks circling for food. Snorkeling and swimming around the reef for a second time, I realized this is the best reef in Australia.&nbsp;<a href=\"https://www.nomadicmatt.com/travel-blogs/diving-the-great-barrier-reef/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">The Great Barrier Reef</a>&nbsp;gets all the attention, but the Ningaloo Reef is much better. There&rsquo;s brighter coral and more wildlife, including whale sharks, turtles, and dolphins. It hasn&rsquo;t been spoiled by overdevelopment or overfishing. While the Great Barrier Reef looks amazing from the air, it&rsquo;s what we see underwater that matters, and I see far more underwater action here than I do on the Great Barrier Reef. During March and April, whale sharks migrate up the coast, and large manta rays can be found around the reef. It being off-season, I had to settle for the manta rays. I took a half-day snorkeling trip around the reef; about an hour outside of Coral Bay, we spotted some large manta rays.</p>', 7, NULL, NULL, NULL, '5bfd24b4699ffcoral2.jpg', 'yes', 14, '2018-11-28 16:49:20', '2018-12-03 17:28:34'),
(4, 'Things not to do on travel', '<p>Travel writers always talk about what&nbsp;<em>to do</em>&nbsp;when you travel. It&rsquo;s all must-see attractions and things to do. Go here, do this, see that, act this way. But what about all the things you&nbsp;<em>shouldn&rsquo;t</em>&nbsp;do on the road? There are plenty of travel mistakes travelers make that lead to wasted money, lost time, and missed opportunities. It&rsquo;s easy to say what to do, but we sometimes to forget to mention the don&rsquo;ts. A lot of the old conventional travel wisdom (using traveler&rsquo;s checks or booking early) is out of date in an increasingly digital and connected world. I believe that by not telling travelers &ldquo;Hey, don&rsquo;t do this anymore&rdquo; we keep a lot of myths going strong. We insiders know the tricks, but unless we tell the general public, they won&rsquo;t! So today, I want to share some of the common travel mistakes you should avoid. I&rsquo;ve made many of these mistakes in the past, but doing things wrong shows you how to do them right. If you avoid these common mistakes, you&rsquo;ll be traveling cheaper, smarter, and longer.</p>\r\n\r\n<p><img alt=\"\" src=\"/matnepal/public/sms/text-editor/fileman/Uploads/air1.jpg\" style=\"height:400px; width:675px\" /></p>\r\n\r\n<p>The food near any major attraction is going to be double the price and half the flavor of what you&rsquo;ll find elsewhere. When restaurants know people aren&rsquo;t coming back, they don&rsquo;t have to worry about consistent quality. And anyways, what do tourists know about quality local food, right? They just arrived. It&rsquo;s all amazing to them, and many are happy to return home talking about how they ate &ldquo;amazing&rdquo; pizza in front of the Colosseum. Restaurants lack the incentive to be top-notch.</p>\r\n\r\n<p>However, local, nontouristy restaurants must be high quality or else locals will stop going there. These places can&rsquo;t get by serving slop. Instead of eating in a tourist trap, walk at least five blocks away from one. The further away you are, the more local, cheaper, and tastier the food will be. Avoid restaurants with glossy menus in multiple languages. That&rsquo;s a sure sign of a tourist trap. If you aren&rsquo;t comfortable walking into a random restaurant, you can also use these websites to find out what the locals are rating highly:</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.yelp.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Yelp&nbsp;</a>&ndash; People offer reviews and ratings here, so you can figure out what&rsquo;s good on the menu or if the restaurant is worth visiting at all.</li>\r\n	<li><a href=\"https://foursquare.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Foursquare</a>&nbsp;&ndash; Foursquare works the same as Yelp. The mobile app lets you search nearby restaurants or eateries.</li>\r\n	<li><a href=\"https://www.openrice.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">OpenRice</a>&nbsp;&ndash; Like Yelp and Foursquare, but for Hong Kong, Malaysia, Indonesia, Singapore, Thailand, and the Philippines.</li>\r\n</ul>\r\n\r\n<p>Another great way I find local eateries is to walk into hostels and ask them what is good. Even if you aren&rsquo;t staying there, they are a wealth of information and usually will happily point you in the right direction! However, local, nontouristy restaurants must be high quality or else locals will stop going there. These places can&rsquo;t get by serving slop. Instead of eating in a tourist trap, walk at least five blocks away from one. The further away you are, the more local, cheaper, and tastier the food will be. Avoid restaurants with glossy menus in multiple languages. That&rsquo;s a sure sign of a tourist trap. If you aren&rsquo;t comfortable walking into a random restaurant, you can also use these websites to find out what the locals are rating highly:</p>\r\n\r\n<ul>\r\n	<li><a href=\"http://www.yelp.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Yelp&nbsp;</a>&ndash; People offer reviews and ratings here, so you can figure out what&rsquo;s good on the menu or if the restaurant is worth visiting at all.</li>\r\n	<li><a href=\"https://foursquare.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">Foursquare</a>&nbsp;&ndash; Foursquare works the same as Yelp. The mobile app lets you search nearby restaurants or eateries.</li>\r\n	<li><a href=\"https://www.openrice.com/\" rel=\"noopener\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\" target=\"_blank\">OpenRice</a>&nbsp;&ndash; Like Yelp and Foursquare, but for Hong Kong, Malaysia, Indonesia, Singapore, Thailand, and the Philippines.</li>\r\n</ul>\r\n\r\n<p>Another great way I find local eateries is to walk into hostels and ask them what is good. Even if you aren&rsquo;t staying there, they are a wealth of information and usually will happily point you in the right direction!&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"/matnepal/public/sms/text-editor/fileman/Uploads/air3.jpg\" style=\"height:400px; width:675px\" /></p>\r\n\r\n<p>It may seem like a ridiculous added expense, but travel is about the unknown, and you never know what can happen on the road. You can break a leg, lose a camera, pop an eardrum scuba diving, or have to leave a country because of a natural disaster. Travel insurance protects you when you are overseas and shouldn&rsquo;t be avoided &mdash; it&rsquo;s the smart thing to get. It is there to protect you for both medical and nonmedical emergencies. If something does happen to you and you don&rsquo;t have insurance, it can cost thousands of dollars in out-of-pocket expenses. I had a friend let her insurance lapse because she wasn&rsquo;t using it; she later broke an arm in South America. It cost her thousands in doctor&rsquo;s fees. I use&nbsp;<a href=\"https://www.worldnomads.com/Turnstile/AffiliateLink?partnerCode=nmts&amp;utm_source=nmts&amp;source=brandlink&amp;utm_content=brandlink&amp;path=https://www.worldnomads.com/lovedby/nomadic-matt\" rel=\"nofollow\" style=\"box-sizing: border-box; transition: all 0.1s ease-in-out 0s; background-color: inherit; color: rgb(45, 161, 196); font-weight: 600; text-decoration-line: none;\">World Nomads</a>insurance when I&rsquo;m on the road.</p>', 7, NULL, NULL, NULL, '5c04dddbb79a2travelnot.jpg', 'yes', 10, '2018-11-29 16:54:29', '2018-12-05 13:39:40');

-- --------------------------------------------------------

--
-- Table structure for table `per_blog_category`
--

CREATE TABLE `per_blog_category` (
  `id` int(50) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `per_blog_category`
--

INSERT INTO `per_blog_category` (`id`, `category_name`, `alias`, `created_at`, `updated_at`) VALUES
(7, 'General', 'general', '2018-10-10 12:18:52', '2018-10-10 12:18:52'),
(8, 'Recent', 'recent', '2018-10-10 12:19:00', '2018-10-10 12:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `per_blog_comments`
--

CREATE TABLE `per_blog_comments` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_booking`
--

CREATE TABLE `per_booking` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `departure_date` varchar(20) NOT NULL,
  `trip_start_date` varchar(20) NOT NULL,
  `number_of_persons` varchar(20) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `mobile_number` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip_code` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `passport_no` varchar(100) NOT NULL,
  `place_of_issue` varchar(100) NOT NULL,
  `issue_date` varchar(20) NOT NULL,
  `expiry_date` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_booking`
--

INSERT INTO `per_booking` (`id`, `package_id`, `departure_date`, `trip_start_date`, `number_of_persons`, `full_name`, `gender`, `phone_number`, `mobile_number`, `email`, `country`, `city`, `zip_code`, `dob`, `passport_no`, `place_of_issue`, `issue_date`, `expiry_date`, `message`, `created_at`, `updated_at`) VALUES
(1, 10, '2019-01-02', '2019-01-06', '5-10', 'John van gundy', 'female', '9812323212', NULL, 'john@gmail.com', 'Australia', 'Melbourne', '989091', '1999-11-01', '091232311', 'Melbourne', '2017-12-01', '2027-12-01', 'I am really excited for this trip..', '2018-12-11 12:36:12', '2018-12-11 12:36:12');

-- --------------------------------------------------------

--
-- Table structure for table `per_contact_messages`
--

CREATE TABLE `per_contact_messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_enquiry`
--

CREATE TABLE `per_enquiry` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_gallery`
--

CREATE TABLE `per_gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `per_gallery`
--

INSERT INTO `per_gallery` (`id`, `file`, `created_at`, `updated_at`) VALUES
(2, '5c0e0baaa2e5cd-2.jpg', '2018-12-10 12:31:02', '2018-12-10 12:31:02'),
(3, '5c0e0bab07aabd-1.jpg', '2018-12-10 12:31:03', '2018-12-10 12:31:03'),
(4, '5c0e0bab786a4d-3.jpg', '2018-12-10 12:31:03', '2018-12-10 12:31:03'),
(5, '5c0e0f81327e7tr.jpg', '2018-12-10 12:47:25', '2018-12-10 12:47:25'),
(6, '5c0e0f813a354tr2.jpg', '2018-12-10 12:47:25', '2018-12-10 12:47:25'),
(7, '5c0e0f81b8d5atr5.jpg', '2018-12-10 12:47:25', '2018-12-10 12:47:25'),
(8, '5c0e0f823dce7trq1.jpg', '2018-12-10 12:47:26', '2018-12-10 12:47:26'),
(10, '5c0e0fee841d3tr9.jpg', '2018-12-10 12:49:14', '2018-12-10 12:49:14');

-- --------------------------------------------------------

--
-- Table structure for table `per_general_settings`
--

CREATE TABLE `per_general_settings` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `working_hours` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb_link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insta_link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `per_general_settings`
--

INSERT INTO `per_general_settings` (`id`, `name`, `phone`, `email`, `address`, `working_hours`, `fb_link`, `insta_link`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Mat Nepal', '+9779813426920 , 4488542', 'info@crit.com', 'Balkhu, Kathmandu', '10:00 AM - 5:00 PM (Sunday to Monday)', 'https://www.facebook.com/catchyroad/', 'https://www.instagram.com/catchyroad/', '5bfba4f474a4elogo1.png', '2018-05-11 05:39:01', '2018-12-03 12:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `per_packages`
--

CREATE TABLE `per_packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `package_description` text NOT NULL,
  `meta_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `show_in_frontend` enum('yes','no') NOT NULL,
  `is_featured` enum('yes','no') NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_day_trip` enum('yes','no') NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `per_packages`
--

INSERT INTO `per_packages` (`id`, `package_name`, `parent_id`, `package_description`, `meta_title`, `meta_keyword`, `meta_description`, `show_in_frontend`, `is_featured`, `image`, `is_day_trip`, `view_count`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 0, 'Nepal is a land of unparalleled scenic beauty located within one of the most diverse geographical areas on earth. Nestled high in the Himalayas between China and India, it has retained its essentially agrarian and medieval character. Its wondrous history and geography are still the defining aspects of everyday life.\r\n\r\nSince Nepal first opened its frontiers to foreign visitors in the fifties, it has been the epicenter of Himalayan adventure activities. Climbing and trekking holidays in Nepal has become highly sought after adventure sports throughout the world soon after the advent of tourism culture. Nepal has an unsurpassed range of environments, ranging from the lowland of Terai to the snowy summit of the highest mountain range on Earth. Traveling in Nepal not only offers an opportunity to submerge in Himalayan bliss but also a chance to step back in time. Standing before the entire world as a vivid kaleidoscope of picturesque landscapes, exotic wildlife, arid high-altitude meadows, magnificent mountains, incredible travel destinations, unique culture, festivals, ancient heritage, pristine backwaters, and exotic cuisine, Nepal is undoubtedly a travelers delight. Trekking in Nepal is often referred to as walking through the paradise on earth.', NULL, NULL, NULL, 'yes', 'no', NULL, 'no', 0, '2018-10-25 12:26:36', '2018-10-25 12:26:36'),
(3, 'Trekking and Hiking', 1, 'WANDER IN THE HIMALAYAN FOOTHILLS\r\nProudly possessing the best trekking trails in the world, trekking in Nepal is a sublime and culture-filled experience for all adventurers and nature enthusiasts. Many countries in the world possess walking paths, but it is only Nepal that has trails leading you to the top of the world, Mt. Everest. Ranging from simple and easy-paced one day hike, numerous multi-days advanced treks, high altitude treks crossing high passes, and the Great Himalayan Trail, which may involve five days or five months, most of the trekking packages lead you close to the Himalayas. You will encounter a lot of teahouses in the most popular trekking routes such as the Everest Base Camp Trek, Langtang Valley Trek or the Annapurna Base Camp Trek, while camping arrangements are more prevalent in Kanchenjunga and Makalu Base Camp Treks. These camps and teahouses provide trekkers good opportunities to rest and recover while mingling with the unreserved friendliness of Nepalese people.\r\n\r\nDominated by the world’s most intimidating mountains, hiking in Nepal is the ultimate way to explore and experience the unmatched local cultures and the exhilarating beauty of the high Himalayas. With the ten highest summits in the world and some of the most beautiful landscapes reachable only by foot, trekking in Nepal is one of the most unique experiences in the Asian sub-continent.', NULL, NULL, NULL, 'yes', 'no', NULL, 'no', 10, '2018-11-27 12:07:49', '2018-12-04 11:53:48'),
(4, 'Tour and Sightseeing', 1, 'Nepal is like a centipede, a tiny insect with many legs for while this is indeed is tiny, the opportunity to explore the country is immense. Nepal offers an ambiance of natural beauties, a diverse habitat and a wide range of Adventure opportunities. Couple that with ancient cultures that differ in every region in this tiny nation, Nepal truly lives to the popular slogan, : once is not enough”.', NULL, NULL, NULL, 'yes', 'no', NULL, 'no', 2, '2018-11-27 12:08:26', '2018-12-04 11:43:31'),
(5, 'Day Trips', 1, 'We provide the best Day Tour in the country as of right now.', NULL, NULL, NULL, 'yes', 'no', NULL, 'no', 1, '2018-11-27 12:09:37', '2018-12-04 11:43:42'),
(6, 'Chisapani Nagarkot Trek', 3, 'Chisapani Nagarkot Trek is considered as short and sweet trip of 3 days tea house trek to Nagarkot. This tour package is specially designed for travelers who have short time in Nepal and would want to have a taste of trekking in Nepal. Chisapani Nagarkot Trek starts from Sundarijal after driving around 1 hour from Kathmandu. In the beginning of the trek, the trail moves along Shivapuri National Park passing through a big watershed that provides almost 40 percent drinking water to Kathmandu Valley. Chisapani Nagarkot Trek offers beautiful nature views and village walk experience, natural environment, stunning Himalaya panorama of Manaslu, Ganesh Himal, Langtang Himal, Gaurishankar Himal and we can even spot Mount Everest in a far distance on a clear day.', NULL, NULL, NULL, 'yes', 'yes', '5c03a30a170b1nagarkot.jpg', 'no', 24, '2018-11-27 12:13:39', '2018-12-04 14:51:44'),
(7, 'Mardi Himal Trek', 3, 'The Mardi Himal Trek is an ideal choice for those who are looking for an ‘off the beaten path’ trekking experience in the quieter parts of the Annapurna region of Nepal. It is the lowest and perhaps the least visited of the trekking peaks in Nepal. While trekking on this route, reaching up to Mardi Himal base camp and finally the high camp, we get to appreciate the solitary trails complete with verdant forests, interesting villages, valleys, terraced farms, dazzling rivers and the extraordinary views of the Annapurna, Machhapuchre (Fishtail) and Himchuli mountains. Another benefit about this trekking route is that the trail makes a small circuit up to the base camp of Mardi Himal so that we don’t have to backtrack over the same terrain.\r\nIn conclusion, Mardi Himal trek is a short trek in the Annapurna region of Nepal where we stay in teahouses (lodges), try local food, appreciate the excellent hill and mountain landscape; and marvel at the panoramic views of the massive Himalayan mountains including Annapurna, Machhapuchre, Himchuli and Mardi Himal.', NULL, NULL, NULL, 'yes', 'yes', '5bfce47789945mardi.jpg', 'no', 5, '2018-11-27 12:14:47', '2018-12-05 12:58:15'),
(8, 'Jomsom Muktinath Trek', 3, 'One of the best trekking destination in Nepal. View the scenic beauty of the valleys and the mountains living close to thr nature motherland yet. Ensure surreal experience from our company.', NULL, NULL, NULL, 'yes', 'no', '5c062bff6ea89jomdom.jpg', 'no', 0, '2018-11-27 12:17:59', '2018-12-04 13:10:51'),
(9, 'Ten Days Best of Nepal', 4, '10 Days Best of Nepal is truly a best tour package in Nepal which also includes a short trek to the Himalayas of Nepal.. This tour package includes Kathmandu, Chitwan, Pokhara, trek to Dhampus & Nagarkot. Kathmandu is a mixed city of old and new with many UNESCO World Heritage Sites which are rich in traditional arts & architectures, interesting & amazing history & cultures and unique lifestyle of the people. Chitwan is considered as one of the finest wildlife in Asia. Visit to Chitwan National Park provides a sense of Jungle feeling with many interesting jungle activities and local culture.Pokhara is a charming & scenic place due to the presence of many beautiful lakes and amazing Fish tail and Annapurna mountain views in the back ground. The short trek to Dhampus gives an opportunity to visit the Himalays in a short time where one can experience close up of Himalayas and daily life style of the villagers. Nagarkot is a small highland close to Kathmandu which commands panoramic views of many beautiful Himalayas. Visiting to Nagarkot provides scenic landscapes views, sunrise and sunset and amazing Himalayan ranges on a quiet and tranquil environment.', NULL, NULL, NULL, 'yes', 'yes', '5bfce6be59eb4tenda.jpg', 'no', 40, '2018-11-27 12:22:57', '2018-12-06 13:04:04'),
(10, 'Annapurna Base Camp Trek', 3, 'The Annapurna Base Camp Trek also referred as Annapurna Sanctuary Trek has a stunning route that follows the Modikhola (River) Valley up to the Annapurna South base camp. The base camp is located in a beautiful natural bowl formed by a ring of eight 7000+ Himalayan peaks. As the trek progresses, it passes through a huge variety of landscapes as the altitude increases until the glaciers of the Himalaya are reached at the sanctuary.\r\nThe Annapurna Region in central Nepal is the most geographically and culturally diverse region for trekking. The area boasts a variety of diverse cultures, tribes and castes including the Brahmins, the Chettris, the Newars, the Gurungs, the Magars, Manangis and the Tibetans. This area has sub-tropical lowlands, valleys, forests of bamboo, oak and rhododendron, alpine meadows, windswept desert plateaus and the towering Annapurna Mountains. This area has the world’s deepest river gorge, Kali Gandaki, lying some 6900 metres (22,563 ft.) that lies below Annapurna I , world’s eighth highest mountain) and the Fishtail mountain. The area is home to over 440 species of birds and animals like the marten deer, Langur (monkey) and the elusive snow leopard.', NULL, NULL, NULL, 'yes', 'yes', '5bfce69d6022dabc.jpg', 'no', 95, '2018-11-27 12:24:01', '2019-01-01 10:06:45'),
(11, 'Six Days Kathmandu and Wildlife', 4, '6 Days Kathmandu & Wildlife is a package mix of Kathmandu valley and Chitwan National Park. Kathmandu is a mixed city of old and new with many UNESCO World Heritage Sites which are rich in traditional arts & architectures, interesting & amazing history & cultures and unique lifestyle of the people. Chitwan is considered as one of the finest wildlife in Asia. Visit to Chitwan National Park provides a sense of Jungle feeling with many interesting jungle activities and local culture.', NULL, NULL, NULL, 'yes', 'yes', '5bfce74ad4a53ktm.jpg', 'no', 3, '2018-11-27 12:27:18', '2018-11-28 13:00:55'),
(12, 'Everest Panorama Trek', 3, 'Everest Panorama Trek is considered an easy trek in the foothills of Mount Everest region. The trek starts with a short 35 minutes flight from Kathmandu to Lukla. Once we arrive in Lukla we start our trek which will lead us to Tengboche Monastery which is our final destination in the trek. On the way we stop and spend 2 nights in Namche Bazaar for rest, exploration and acclimatization. This trek will give you amazing views of World’s highest snow capped peaks which includes Mt. Everest, Mt. Lhotse, Mt. Thamserku and Mt. Amadablam. This trek also introduces you with the Sherpa culture and their lifestyle in the high mountains. This trek is favorable to those propel who wish to see the worlds amazing mountain panoramas on a short period of time.', NULL, NULL, NULL, 'yes', 'yes', '5bfce7a1b2c02everest.jpg', 'no', 2, '2018-11-27 12:28:45', '2018-11-28 13:03:46'),
(13, 'Paragliding (Pokhara)', 5, 'Paragliding is a relatively new adventure sport in Nepal. Paragliding in this Himalayan country can be a truly wonderful and fulfilling experience for the adventure – seekers. You can experience unparalleled scenic grandeur as you share airspace with Himalayan griffin vultures, eagles, kites, while floating over villages, monasteries, temples, lakes and jungles, with a fantastic view of the majestic Himalayas. Gliding is a weather dependent sport and the flying season in Nepal commences from November through February, the best months being November and December.', NULL, NULL, NULL, 'yes', 'no', '5bfce7fef0eefparagliding.jpg', 'yes', 9, '2018-11-27 12:30:18', '2018-12-28 14:01:56'),
(14, 'Shivapuri Day Hike', 5, 'The Shivapuri National park is located in the northern and north western part of Kathmandu. It is the second highest hill near the Kathmandu valley at altitude of 2563m.  It is ideal place for people visiting Nepal who have short time and who cannot go for longer treks. We will first drive to Budhanilkantha Temple and then start walking towards Shivapuri Conservation Area. The trek passes through dense forest at some places. The view of Kathmandu Valley looks amazing from top of the hill. We can enjoy the scenery and explore the area. After lunch we will rest for some time and then finally descend through Sundarijal where our car will be ready to pick us u and drive to the hotel.', NULL, NULL, NULL, 'yes', 'no', '5bfce83c9040dshiva.jpeg', 'yes', 0, '2018-11-27 12:31:20', '2018-11-27 12:32:21'),
(15, 'Mountain Flight', 5, 'Nepal is a country famous for Himalayas and Mount Everest the highest place on earth. We have regular daily Mountain flight service to the top of the mountains. Mountain Flight can be considered a good alternative for those who cannot make their Everest base camp trekking and other trekking in central and eastern regions of Nepal. One can have amazing aerial view of  panoramic mountain range during Mountain flight. One can easily get astonished with in short duration of the flight and it really amazing experience to fly high over high Himalaya with their dazzling golden view in the morning. Four airlines offer regular flights taking you over the snow-capped peaks of the Himalaya. offering a panoramic view of the Himalaya in just one hour', NULL, NULL, NULL, 'yes', 'no', '5bfd1cd4e59famountain.jpg', 'yes', 2, '2018-11-27 12:33:11', '2018-12-05 12:50:24'),
(16, 'Bhutan', 0, '', NULL, NULL, NULL, 'yes', 'no', NULL, 'no', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_dates`
--

CREATE TABLE `per_package_dates` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_package_dates`
--

INSERT INTO `per_package_dates` (`id`, `package_id`, `start_date`, `end_date`, `price`, `created_at`, `updated_at`) VALUES
(14, 9, '2019 February 1', '2019 February 10', '11,000', '2018-12-28 13:47:08', '2018-12-28 13:47:08'),
(15, 7, '2018 December 20', '2018 December 26', '12,000', '2018-12-28 13:48:02', '2018-12-28 13:48:02'),
(16, 7, '2019 January 4', '2019 January 10', '12,000', '2018-12-28 13:48:03', '2018-12-28 13:48:03'),
(17, 6, '2018 December 1', '2018 December 7', '8000', '2018-12-28 13:49:15', '2018-12-28 13:49:15'),
(18, 6, '2018 December 10', '2018 December 17', '8000', '2018-12-28 13:49:16', '2018-12-28 13:49:16'),
(21, 10, '2019 January 5', '2019 January 19', '10,000', '2019-01-01 10:01:10', '2019-01-01 10:01:10'),
(22, 10, '2019 January 10', '2019 January 24', '10,000', '2019-01-01 10:01:10', '2019-01-01 10:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_details`
--

CREATE TABLE `per_package_details` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `altitude` varchar(100) NOT NULL,
  `trip_grade` varchar(100) NOT NULL,
  `group_size` varchar(100) NOT NULL,
  `accomodation` varchar(100) NOT NULL,
  `best_season` varchar(100) NOT NULL,
  `total_trip_cost` varchar(100) NOT NULL,
  `discounted_price` varchar(100) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `trip_overview` text NOT NULL,
  `brief_itinerary` text NOT NULL,
  `itinerary` text NOT NULL,
  `cost_inclusion` text,
  `cost_exclusion` text,
  `trip_map` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `per_package_details`
--

INSERT INTO `per_package_details` (`id`, `package_id`, `country`, `duration`, `altitude`, `trip_grade`, `group_size`, `accomodation`, `best_season`, `total_trip_cost`, `discounted_price`, `file`, `trip_overview`, `brief_itinerary`, `itinerary`, `cost_inclusion`, `cost_exclusion`, `trip_map`, `created_at`, `updated_at`) VALUES
(1, 6, 'Nepal', '6 Days', '2300m', 'Easy / Moderate', '4 people', 'Tea House / Lodge during trek', 'Sep to Dec, Jan to May', '8000', NULL, NULL, 'Chisapani Nagarkot Trek is considered as short and sweet trip of 3 days tea house trek to Nagarkot. This tour package is specially designed for travelers who have short time in Nepal and would want to have a taste of trekking in Nepal. Chisapani Nagarkot Trek starts from Sundarijal after driving around 1 hour from Kathmandu. In the beginning of the trek, the trail moves along Shivapuri National Park passing through a big watershed that provides almost 40 percent drinking water to Kathmandu Valley. Chisapani Nagarkot Trek offers beautiful nature views and village walk experience, natural environment, stunning Himalaya panorama of Manaslu, Ganesh Himal, Langtang Himal, Gaurishankar Himal and we can even spot Mount Everest in a far distance on a clear day.', '', '<div class=\"itinerary-overview-block\" style=\"box-sizing: border-box; border: 0px; font-family: Roboto-Regular; margin: 0px 0px 30px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: rgb(30, 30, 30); font-size: 14px;\">\r\n<h5><span style=\"font-size:14px\">Day 01: Arrival in Kathmandu</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 02: Full day Kathmandu Sightseeing of World Heritage Sites</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 03: Kathmandu to Sundarijal by drive and trek to Chisapani</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 04: Trek from Chisapani to Nagarkot</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 05: Trek from Nagarkot to Changunarayan and sightseeing of Bhaktapur. Drive to Kathmandu.</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 06: Departure</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\"><strong>B &ndash; Breakfast, L &ndash; Lunch, D &ndash; Dinner</strong></span></h5>\r\n\r\n<h5><span style=\"font-size:14px\"><strong>Note:&nbsp;</strong></span><span style=\"font-size:14px\"><span style=\"color:rgb(30, 30, 30); font-family:roboto-regular\">Itineraries are subject to change or modification due to unforeseen circumstances.</span></span></h5>\r\n</div>', '*03 nights’ accommodation in Kathmandu on BB basis,\r\n*02 nights’ accommodation during Trek in a Tea House or Lodge on twin sharing\r\n*01 night’s accommodation during Trek in Nagarkot, All meals while on trek (Breakfast, Lunch & Dinner)\r\n*Airport – Hotel – Airport Transfers (Arrival & Departure),  Kathmandu – Sundarijal transfers, Changhunarayan – Kathmandu transfers\r\n*Full day guided sightseeing of Kathmandu', '*International Airfare and taxes\r\n*Travel Insurance\r\n*Nepal Entry visa (Visa is obtained in Nepal Airport immigration on arrival. USD 25 per visa for 15 days, USD 40 per visa for 30 days and USD 100 per visa for 90 days. All the visas are multiple entry visas. Please carry 02 passport sized photograph for the visa, Lunch and dinner in Kathmandu\r\n*All items of personal nature like telephone bills, laundry, drink etc.\r\n*Tipping to guide and driver (Tipping is expected), Any other items which is not mentioned in the price inclusion list.', NULL, '2018-11-27 12:44:09', '2018-12-28 13:49:15'),
(2, 7, 'Nepal', '6 days', '4600m', 'Easy / Medium', '5', 'Tea House/ Lodge', 'Sep to Dec, Jan to Jun', '12,000', NULL, NULL, 'wildlife, panoramic mountain  views and local village life. 5/6 days richly diverse trek takes you through beautiful forested areas to rocky mountain terrain and several base camps which may have snow depending on the time of the year.\r\nMardi Himal Base Camp is the highest point of Mardi Himal Trek which is at 4500m. The highest point we spend night on Mardi Himal Trek is at high camp which is 3580 m. The highlights of Mardi Himal Trek is Machhapuchhre also known as Fishtail(6993m), Annapurna South (7010 m), and Mount Hiunchuli(6441m).\r\nWe can do  Mardi Himal Trek all round the year, but September to December and March to June is the best time of year for Mardi Himal Trek. A certain level of fitness is helpful for Mardi Himal Trek over some rocky areas near high camp and base camp. The entire Mardi Himal Trek is about 5/6 days covers 49 km, and most days involved 5/6 hours of slow walking. The hardest point of  Mardi Himal Trek is going from high camp to base camp. It is a tough 6 hours trek over the rocky mountain terrain. Altitude and mountain sickness is not really a problem on the Mardi Himal trek as you won\'t be at a high altitude for very long. Many people from all walks of life, ages and fitness levels have done the Mardi Himal Trek.\r\nThere will be no any problem to sleep and eat along Mardi Himal Trekking Trail since there are basic tea house lodges. The hardest part of the Mardi  Himal Trek is going from High Camp to Base Camp. An extra day it\'s worth taking your time for the return trek and staying a night in low camp before going back down. No ropes and ice picks are needed for Mardi  Himal Trek. There is no vertical climbing involved though going from high camp to base camp is quite steep and rocky.', '', '<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\"><strong>Day 1:Kathmandu to Australian Camp</strong><br />\r\nDrive by tourist bus, it takes 5/6 hours and then take a private cab drive for an hour to Kade and trek for 1 and half hours to Australian camp. The best view point of sun rise and the panoramic Himalayas view. Stay night at Guest House there.<br />\r\n<strong>Day 2:Australian Camp(2100 m) - Forest Camp (2550 m, 10km, 4-5 hrs)</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><span style=\"font-family:times new roman,times,serif\">Breakfast and enjoy the view &nbsp;of the Himalayan Peak and trek for 10km takes 5/6 hours through forest past Pothana and Pitam Deurali.<br />\r\n<strong>Day 3:Forest Camp (2550 m) - High Camp (3580 m, 7 km, 6 hrs)</strong><br />\r\nBreakfast and Trek to High Camp for 7 km, it takes 6 hours uphill walk.<br />\r\n<strong>Day 4:High Camp to Low Camp (2990 m, 5km, 6 hours) via Mardi Himal Base Camp.&nbsp;</strong><br />\r\nBreakfast and trek to Mardi Himal Base Camp, enjoying the views and trek back to low camp for overnight stay.<br />\r\n<strong>Day 5:Low Camp to Pokhara (850m, 7/15km, 6 hours)</strong><br />\r\nBreakfast and downhill trek to Kade via Australian Camp, it takes 6/7 hours downhill trek and drive back to Pokahra by private car or bus. O/N at Hotel in Pokhara.<br />\r\n<strong>Day 6:Pokhara to Kathmandu</strong><br />\r\nBreakfast and take a tourist bus drive to Kathmandu to get your flight back to home. It is also possible to stay in Pokhara if you would have time. The trip ends in Pokahra.</span></span></p>', '*Kathmandu/Pokhara/Kathmandu bus ticket\r\n *All the local government taxes and company service charge\r\n*1 nights standard twin sharing hotel accommodation in Pokhara with breakfast\r\n*3 times meals - Breakfast, Lunch and dinner during trekking\r\n*Twin sharing mountain lodge known as tea house accommodation during trekking', '*Private transfer and flight cost between Kathmandu and Pokhara\r\n* All the cost not mention on above cost includes\r\n*Travel insurance in case of emergency for rescue and other medication', NULL, '2018-11-27 12:51:38', '2018-12-28 13:48:02'),
(3, 10, 'Nepal', '14 Days', '4090m', 'Moderate', '1-20 people', '3 star hotel in Kathmandu & Pokhara. Tea House during trek.', 'Sep to Dec, Jan to Jun', '5000', NULL, '5c077b78d1b6ephp course book.pdf', 'The Annapurna Base Camp Trek also referred as Annapurna Sanctuary Trek has a stunning route that follows the Modi Khola (River) Valley up to the Annapurna South base camp. The base camp is located in a beautiful natural bowl formed by a ring of eight 7000+ Himalayan peaks. As the trek progresses, it passes through a huge variety of landscapes as the altitude increases until the glaciers of the Himalaya are reached at the sanctuary.\r\n\r\nThe Annapurna Region in central Nepal is the most geographically and culturally diverse region for trekking. The area boasts a variety of diverse cultures, tribes and castes including the Brahmins, the Chettris, the Newars, the Gurungs, the Magars, Manangis and the Tibetans. This area has sub-tropical lowlands, valleys, forests of bamboo, oak and rhododendron, alpine meadows, windswept desert plateaus and the towering Annapurna Mountains. This area has the world\'s deepest river gorge, Kali Gandaki, lying some 6900 metres (22,563 ft.) that lies below Annapurna I , world\'s eighth highest mountain) and the Fishtail mountain. The area is home to over 440 species of birds and animals like the marten deer, Langur (monkey) and the elusive snow leopard.', '', '<div class=\"itinerary-overview-block\" style=\"box-sizing: border-box; border: 0px; font-family: Roboto-Regular; margin: 0px 0px 30px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: rgb(30, 30, 30); font-size: 14px;\">\r\n<p>Day 01: Arrival in Kathmandu (1400m)</p>\r\n\r\n<p>Day 02: Drive to Pokhara (800m) &ndash; 7 hours drive</p>\r\n\r\n<p>Day 03: Drive to Nayapul and trek to Tirkhedhunga (1459m) &ndash; 2 hours drive &amp; 3 to 4 hours trek</p>\r\n\r\n<p>Day 04: Trek to Ghorepani (2850m) 5 hours</p>\r\n\r\n<p>Day 05: Visit Poonhill (3210m) and trek to Tadapani (2550m) &ndash; 5 to 6 hours</p>\r\n\r\n<p>Day 06: Trek to Sinuwa (2310m) &ndash; 6 to 7 hours</p>\r\n\r\n<p>Day 07: Trek to Deurali (3150m) &ndash; 5 to 6 hours</p>\r\n\r\n<p>Day 08: Trek to Annapurna Base Camp (4090m) &ndash; 4 to 5 hours</p>\r\n\r\n<p>Day 09: Trek to Dovan (2600m) &ndash; 5 to 6 hours</p>\r\n\r\n<p>Day 10: Trek to Chhomrong (2110m) &ndash; 4 to 5 hours</p>\r\n\r\n<p>Day 11: Trek to Ghandruk (1940m) &ndash; 4 to 5 hours</p>\r\n\r\n<p>Day 12: Trek to Nayapul and drive to Pokhara &ndash; 4 hours trek &amp; 2 hour drive</p>\r\n\r\n<p>Day 13: Drive to Kathmandu &ndash; 7 hours</p>\r\n\r\n<p>Day 14: Departure to Airport</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Itinerary</strong>:</p>\r\n\r\n<p><strong>Day 01: Arrival in Kathmandu (1400m)</strong></p>\r\n\r\n<p>Upon arrival at International Airport in Kathmandu, you will be welcomed by our representatives and transferred to hotel. Today you are free and easy to spend time on your own.&nbsp; You may also wish to buy some trekking gears such as Jackets, hats, t-shirt, walking stick, trekking bags etc which is easily found near your hotel.</p>\r\n\r\n<p>In the evening we will proceed for welcome dinner hosted by Mountain Adventure.</p>\r\n\r\n<p><strong>Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 02: Drive to Pokhara (800m) &ndash; 7 hours drive</strong></p>\r\n\r\n<p>Today we will drive to Pokhara valley which is also known as the &ldquo;Dreamland of Nepal&rdquo; due its beautiful <strong>l</strong>andscape, lakes and amazing mountain views. After arriving in Pokhara, check in to the hotel. In the evening we will proceed for boating in Fewa Lake for an hour and free time to explore the lake side area.</p>\r\n\r\n<p><strong>Breakfast included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 03: Drive to Nayapul and trek to Tirkhe Dhunga (1459m) &ndash; 2 hours drive &amp; 3 to 4 hours trek</strong></p>\r\n\r\n<p>After breakfast we will drive to Nayapul and then commence our trek to Birethanti, a large and prosperous town beside the Modi River. Head up the main trail to Sudami where we climb gradually up the side of the valley, reaching Hille (1495m) before pushing on to Tirkhe Dhunga.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 4: Trek to Ghorepani (2850m) - 5 hours</strong></p>\r\n\r\n<p>Today will be a pleasant walking day. We will trek through rhododendron and oak forests and across streams before making a short, final climb to Nangethanti. From Nangethanti we head up to Ghorepani (2850m). Ghorepani is a popular area during this trek as there are many family friendly tea houses and it is also a place from where we start the famous Poon Hill view point trek.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 5: Visit Poonhill (3210m) and trek to Tadapani (2550m) &ndash; 5 to 6 hours</strong></p>\r\n\r\n<p>An early start and an hour hiking to Poon Hill (3195m) leads us to a brilliant spectacle, this vantage point provides an unobstructed view of sunrise over the high Himalayas. Poon Hill is a very popular view point for Himalayan Sunrise along with amazing Mountain views. After spending about 45 minutes on the hillside, we come back to Ghorepani, have a hot breakfast, and start walking to Tadapani. From Ghorepani the trail climbs along ridges and through pine and rhododendron forests to Deurali (2960m). We descend to reach Banthanti, before winding our way to Tadapani (2550m)</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 6: Trek to Sinuwa (2310m) &ndash; 6 to 7 hours</strong></p>\r\n\r\n<p>Dropping down from Tadapani, the route offers good views of the upper Modi valley. The path then starts the long ascent high above the west bank of the Modi Khola. We pass the village of Chhomrong which lies tucked at the very base of Himal Chuli. From Chhomrong the trail descends until Chhomrong Khola then trail begins a slow climb as we head up to our destination for the day.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 7: Trek to Deurali (3150m) &ndash; 5 to 6 hours</strong></p>\r\n\r\n<p>We will walk towards Kuldi Ghar about 2.5 to 3 hrs walking. There is a clearing in the forest a little further on, from there the route goes very steeply down a bank of rock and then levels out, running through thickets of bamboo at the bottom of the gorge, keeping always on the west side of the river. We will pass by the pasture of Tomo, and then the very neck of the gorge at Pantheon Barah, where there is a small trail and a shrine. The track climbs to Himalaya hotel at the campsite where we will overnight.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 8: Trek to Annapurna Base Camp (4090m) &ndash; 4 to 5 hours</strong></p>\r\n\r\n<p>Today we climb past the Machhapuchhare Base Camp (MBC) which isn&rsquo;t really a base camp since climbing the mountain is not permitted to reach Annapurna Base Camp (ABC). This area is called the Annapurna Sanctuary since it is totally surrounded by mountains. From here it is a two-hour trek to Annapurna Base camp, which offers spectacular views of amazing mountains.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 9: Trek to Dovan (2600m) &ndash; 5 to 6 hours</strong></p>\r\n\r\n<p>This morning, we will enjoy brilliant mountain views with our breakfast. Then we will trek down to Dovan via MBC. Trek for around 5 hours to reach Dovan which is located at 2600m and commands beautiful sceneries.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 10: Trek to Chhomrong (2110m) &ndash; 4 to 5 hours</strong></p>\r\n\r\n<p>Today we will trek down to Chhomrong which is close to Ghandruk Village. Once we have passed Khuldibikas where there is an experimental sheep Farm, the trail continues through rhododendron and bamboo fields before reaching to Chhomrong.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 11: Trek to Ghandruk (1940m) &ndash; 4 to 5 hours</strong></p>\r\n\r\n<p>This is an easy and short day trekking. From Chhomrong the trail descends through forests to Gurjung Khola and then the trail ascends slightly until Kimche. Ghandruk is a village of Gurung people, one of the ethnic groups of Nepal; they have their own dialect, culture, costume, and life style. Ghandruk is one of the famous destinations for trekkers for its beautiful mountain views and easy reach from Pokhara or Kathmandu. Our early arrival means we have the afternoon to visit the Annapurna conservation office, Museum and explore the village.</p>\r\n\r\n<p><strong>Breakfast, Lunch &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 12: Trek to Nayapul and drive to Pokhara &ndash; 4 hours trek &amp; 2 hour drive</strong></p>\r\n\r\n<p>As we are coming to an end of a beautiful trekking trip, today we will walk back to Nayapul where we first started our trek. It will take around 4 hours to reach Nayapul. There our vehicle will be waiting for us to drive us back to Pokhara which will take around 2 hours. On reaching Pokhara, check in to your hotel and free time to explore Lake side area on your own.</p>\r\n\r\n<p><strong>Breakfast &amp; Lunch included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 13: Drive to Kathmandu &ndash; 7 hours</strong></p>\r\n\r\n<p>After breakfast, we will drive back to Kathmandu enjoying the beautiful sceneries and crossing many hills and rivers. After reaching Kathmandu check in to your hotel and you have short time to refresh. In the evening we will proceed for farewell dinner with cultural show in a traditional Nepalese restaurants hosted by Mountain Adventure to celebrate the successful completion of your trek.</p>\r\n\r\n<p><strong>Breakfast &amp; Dinner included</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Day 14: Departure to Airport</strong></p>\r\n\r\n<p>Today we will drive you to the airport and bid you farewell and thank you for your visit.</p>\r\n\r\n<p><strong>Breakfast included</strong></p>\r\n</div>', '*02 nights’ accommodation in Kathmandu inclusive of breakfast on a twin shared basis\r\n*02 nights’ accommodation in Pokhara inclusive of breakfast on a twin shared basis\r\n*09 nights’ accommodation during trek in a Tea House on a twin shared basis\r\n*All meals while on trek (Breakfast, Lunch & Dinner)\r\n*Airport – Hotel – Airport Transfers (Arrival & Departure)\r\n*Half day guided sightseeing tour in Kathmandu inclusive of entrance fees\r\n*English speaking Trek leader/Guide\r\n*Porters to carry your bags (1 porter for 2 guests)\r\n*Sleeping bags\r\n*Mountain Adventure duffel bags, T- Shirt (Yours to keep)\r\n*Food, Accommodation, Salary, Insurance and equipment’s for all staffs\r\n*All necessary permits for the trek\r\n*Welcome and Farewell dinner \r\n*All ground transfers on a comfortable private vehicle\r\n*Government, hotel and all applicable taxes', '*International Airfare and taxes\r\n*Travel Insurance with rescue and emergency evacuation\r\n*Travel Insurance with rescue and emergency evacuation\r\n*Nepal Entry visa (Visa is obtained in Nepal Airport immigration on arrival. USD 25 per visa for 15 days, USD 40 per visa for 30 days and USD 100 per visa for 90 days. All the visas are multiple entry visas. Please carry 02 passport sized photograph for the visa.\r\n*Lunch and dinner in Kathmandu & Pokhara\r\n*All items of personal nature like telephone bills, laundry, drink etc.\r\n*Items such as hot water for shower/drinking; Mobile phone and camera charging etc will be extra during trek which can be paid to the tea house/lodge owner directly.\r\n*Tipping to guide and driver\r\n*Any other item that is not mentioned in the Cost includes list.', '5c077ae709942map1.jpg', '2018-11-27 13:03:10', '2019-01-01 10:01:10'),
(4, 9, 'Nepal', '10 Days', '2300m', 'Easy / Moderate', '4 people', 'Lodge', 'Jan to Jun, Sep to Dec', '11,000', NULL, NULL, 'All Nepal Tour is the destination tour that takes you into the world of different culture, beautiful nature and lots of adventure in Nepal. Nepal Tour provides its visitors with the opportunity to view old Temples, world heritage site, modest cultures, colorful markets in the mountains, meet the friendly locals with their ancient culture, dance and much more. This tour is really a remarkable tour as it makes you realize the true beauty of this beautiful place Nepal. The breathtaking scenery of Annapurna Range, Pokhara and the vast fertile forest of the Chitwan makes your trip full of enjoyment.\r\n\r\nBesides the Highest Mountains, Nepal has many things to experience. All Nepal tour starts with the sightseeing tour of Pashupatinath Temple, Buddha Stupa, Bhaktapur, and Nagarkot. Nagarkot is a very amazing place that offers beautiful sunrise and sunset views over the magnificent mountains vistas. A flight to Pokhara with the majestic view of the glorious Manaslu peak and the Snow-capped Annapurna Mountain ranges will be a memorable one. Moreover, Pokhara city is known for the splendid center for tourists with the beautiful places like Phewa lake, David’s fall, Mahendra cave, and other. With this, this tour comprises the travel to Royal Chitwan National Park where we will have the look at one horned Rhino with other several animals like deer, monkey, wild boar, bison, sloth bear, leopard, etc and if lucky the Royal Bengal Tiger too. Our guides will help you identify some species of birds, plants and other wildlife.', '', '<div class=\"itinerary-overview-block\" style=\"box-sizing: border-box; border: 0px; font-family: Roboto-Regular; margin: 0px 0px 30px; outline: 0px; padding: 0px; vertical-align: baseline; position: relative; color: rgb(30, 30, 30); font-size: 14px;\">\r\n<h5><span style=\"font-size:14px\">Day 1: Arrival in Kathmandu</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 2: Drive to Chitwan National Park (BLD)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 3: Enjoy Jungle activities in Chitwan (BLD)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 4: Drive to the lake city Pokhara (B)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 5: Trek to Dhampus, a beautiful hill village. (BLD)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 6: Trek to Sarangkot and drive back to Pokhara (B)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 7: Drive back to Kathmandu (B)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 8: Tour of World Heritage site and outskirt of Kathmandu &amp; drive to Nagarkot (B)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 9: Drive to Kathmandu and tour of World Heritage Sites in Kathmandu (BD)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\">Day 10: Departure (B)</span></h5>\r\n\r\n<h5><span style=\"font-size:14px\"><strong>B &ndash; Breakfast, L &ndash; Lunch, D &ndash; Dinner&nbsp;</strong></span></h5>\r\n\r\n<h5><span style=\"font-size:14px\"><strong>Note:&nbsp;</strong></span><span style=\"font-size:14px\"><span style=\"color:rgb(30, 30, 30); font-family:roboto-regular\">Itineraries are subject to change or modification due to unforeseen circumstances.</span></span></h5>\r\n</div>', '*02 nights’ accommodation in Kathmandu\r\n*02 night’s accommodation in Chitwan National Park\r\n*02 nights’ accommodation in Pokhara\r\n*01 night accommodation in Dhampus\r\n*01 night accommodation in Nagarkot\r\n*Daily breakfast in the hotel\r\n*Entrance/monuments fee for all the sightseeing places\r\n*All land transportation in a private car/van/coach\r\n*Government and all other applicable taxes', '*International Airfare\r\n*Travel Insurance\r\n*Nepal Entry Visa which can be easily obtained upon arrival at the Airport. Multiple entry visas @ USD 25 for 15 days Visa, USD 40 for 30 days Visa and USD 100 for 90 days visa\r\n*Please carry 2 passport sized photograph\r\n*Lunch & Dinner\r\n*Nature of personal expenses like drinks, telephone call, laundry etc\r\n*Tipping to staff & driver (Tipping are expected),\r\n*Any other items which is not mentioned in the price inclusion list', NULL, '2018-11-27 13:09:26', '2018-12-28 13:47:08'),
(5, 13, 'Nepal', '1 Day', '2000m', 'Moderate', '1 people', 'None', 'Any', '3,00', NULL, NULL, 'Paragliding is a relatively new adventure sport in Nepal. Paragliding in this Himalayan country can be a truly wonderful and fulfilling experience for the adventure – seekers. You can experience unparalleled scenic grandeur as you share airspace with Himalayan griffin vultures, eagles, kites, while floating over villages, monasteries, temples, lakes and jungles, with a fantastic view of the majestic Himalayas. Gliding is a weather dependent sport and the flying season in Nepal commences from November through February, the best months being November and December.', '', '<p>None</p>', '*Pick up and drop off service\r\n*25 -20 minutes flight\r\n*Photos and Videos of the flight\r\n*All applicable taxes', NULL, NULL, '2018-11-27 13:11:36', '2018-12-28 13:45:58'),
(6, 15, 'Nepal', '1 hour', '400m', 'Easy', '1 person', 'Not Applicable', 'Any', '250', NULL, NULL, 'Nepal is a country famous for Himalayas and Mount Everest the highest place on earth. We have regular daily Mountain flight service to the top of the mountains. Mountain Flight can be considered a good alternative for those who cannot make their Everest base camp trekking and other trekking in central and eastern regions of Nepal. One can have amazing aerial view of  panoramic mountain range during Mountain flight. One can easily get astonished with in short duration of the flight and it really amazing experience to fly high over high Himalaya with their dazzling golden view in the morning. Four airlines offer regular flights taking you over the snow-capped peaks of the Himalaya. offering a panoramic view of the Himalaya in just one hour.', '', '<p>None</p>', NULL, NULL, NULL, '2018-11-27 13:13:50', '2018-11-27 13:13:50');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_faq`
--

CREATE TABLE `per_package_faq` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_package_faq`
--

INSERT INTO `per_package_faq` (`id`, `package_id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(7, 6, 'Is the transportation available ?', 'Yes, Every transportation is available.', '2018-12-28 13:49:16', '2018-12-28 13:49:16'),
(8, 6, 'How are the locals ?', 'The locals are extremely polite and gentle', '2018-12-28 13:49:16', '2018-12-28 13:49:16'),
(10, 10, 'Is it the best trek ?', 'Yes, it is the best terk available yet.', '2019-01-01 10:01:10', '2019-01-01 10:01:10'),
(11, 10, 'Are there any porters available ?', 'Yes, Sure there are porters available.', '2019-01-01 10:01:10', '2019-01-01 10:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_gallery_images`
--

CREATE TABLE `per_package_gallery_images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `package_id` int(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `per_package_gallery_images`
--

INSERT INTO `per_package_gallery_images` (`id`, `image`, `package_id`, `created_at`, `updated_at`) VALUES
(1, '5bfceb3e0e643chisa1.jpg', 6, '2018-11-27 12:44:10', '2018-11-27 12:44:10'),
(2, '5bfceb3e0f3fdchisa2.jpeg', 6, '2018-11-27 12:44:10', '2018-11-27 12:44:10'),
(3, '5bfcecfebc22bmadi1.jpg', 7, '2018-11-27 12:51:38', '2018-11-27 12:51:38'),
(4, '5bfcecfebd547madi2.jpg', 7, '2018-11-27 12:51:38', '2018-11-27 12:51:38'),
(5, '5bfcefb247549an1.jpg', 10, '2018-11-27 13:03:10', '2018-11-27 13:03:10'),
(6, '5bfcefb2484e1an2.jpg', 10, '2018-11-27 13:03:10', '2018-11-27 13:03:10'),
(7, '5bfcf12ae69eenepal1.jpg', 9, '2018-11-27 13:09:26', '2018-11-27 13:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_group_discount`
--

CREATE TABLE `per_package_group_discount` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `no_of_people` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_package_group_discount`
--

INSERT INTO `per_package_group_discount` (`id`, `package_id`, `no_of_people`, `price`, `created_at`, `updated_at`) VALUES
(14, 9, '6', '9,000', '2018-12-28 13:47:08', '2018-12-28 13:47:08'),
(15, 7, '6', '11,000', '2018-12-28 13:48:03', '2018-12-28 13:48:03'),
(16, 7, '8', '10,000', '2018-12-28 13:48:03', '2018-12-28 13:48:03'),
(17, 6, '10', '7000', '2018-12-28 13:49:16', '2018-12-28 13:49:16'),
(18, 6, '9', '7500', '2018-12-28 13:49:16', '2018-12-28 13:49:16'),
(21, 10, '6', '4,900', '2019-01-01 10:01:10', '2019-01-01 10:01:10'),
(22, 10, '7', '4,500', '2019-01-01 10:01:10', '2019-01-01 10:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `per_package_review`
--

CREATE TABLE `per_package_review` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_package_review`
--

INSERT INTO `per_package_review` (`id`, `package_id`, `name`, `email`, `rating`, `review`, `created_at`, `updated_at`) VALUES
(1, 9, 'Josh Hart', 'josh@gmail.com', 4, 'It was an excellent trip. Thanks to matnepal.', '2018-12-02 11:37:35', '2018-12-02 11:37:35'),
(2, 6, 'Kevin Doc', 'kev@gmail.com', 3, 'I would like to involve in this trip again in the near future', '2018-12-02 11:57:21', '2018-12-02 11:57:21'),
(3, 6, 'Steph Smith', 'smith@yahoo.com', 4, 'I love nepal and i will be back again', '2018-12-02 11:58:00', '2018-12-02 11:58:00');

-- --------------------------------------------------------

--
-- Table structure for table `per_page`
--

CREATE TABLE `per_page` (
  `id` int(50) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `photo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page_index` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `per_page`
--

INSERT INTO `per_page` (`id`, `title`, `description`, `photo`, `page_index`, `created_at`, `updated_at`) VALUES
(1, 'About Us', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla, volutpat elit non, tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo lorem, vehicula eget ligula et, malesuada pharetra est. Etiam diam metus, luctus eu commodo quis, condimentum eu mauris. Suspendisse potenti. Curabitur et mauris laoreet lorem pellentesque volutpat. Sed bibendum, tortor in ornare sodales, sem augue suscipit tortor, auctor placerat nisi justo vel mauris. In convallis nunc nunc, in tincidunt leo volutpat et. Donec in consequat lorem. Aenean volutpat aliquet diam, id venenatis nisi faucibus sit amet. In hac habitasse platea dictumst. Integer vel sem est. Nulla pharetra, justo vitae placerat dapibus, dui massa pellentesque magna, a sagittis magna lorem a massa. Integer convallis augue eu felis euismod, vel iaculis velit pretium. Nam et diam ut sem aliquet ultrices non eu ante.lectus. Nam blandit odio nisl, ac malesuada lacus fermentum sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum elit, sed pulvinar leo sollicitudin vel.', '5b55a58896c1010.jpg', 'about-us', '0000-00-00 00:00:00', '2018-09-10 15:35:20'),
(2, 'Become an Instructor', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop .', '5b5efa702ccfe5.jpg', 'become-instructor', '0000-00-00 00:00:00', '2018-09-10 15:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `per_services`
--

CREATE TABLE `per_services` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `meta_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `class` varchar(25) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_services`
--

INSERT INTO `per_services` (`id`, `title`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `class`, `image`, `created_at`, `updated_at`) VALUES
(11, 'Test Service', 'In economics, a service is a transaction in which no physical goods are transferred from the seller to the buyer. The benefits of such a service are held to be demonstrated by the buyer\'s willingness to make the exchange. Public services are those that society (nation state, fiscal union, region) as a whole pays for. Using resources, skill, ingenuity, and experience, service providers benefit service consumers. Service is intangible in nature', 'Test Service Meta Title', 'Test Service Meta Keyword', 'Test Service Meta Description', NULL, '5b9dfeab197caphotography.jpg', '2018-09-16 12:41:43', '2018-09-16 12:41:43');

-- --------------------------------------------------------

--
-- Table structure for table `per_slider`
--

CREATE TABLE `per_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `order_index` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_slider`
--

INSERT INTO `per_slider` (`id`, `title`, `image`, `description`, `order_index`, `created_at`, `updated_at`) VALUES
(7, 'First Slider', '5bb0a3dbb408cbhutan.jpg', 'First  Slider', 1, '2018-09-16 12:38:42', '2018-09-30 16:07:19'),
(8, 'Second Slider', '5bb0a27a958e92.jpeg', 'Second Slider', 2, '2018-09-30 16:01:26', '2018-09-30 16:01:26'),
(9, 'Third Slider', '5bb0a35e110b83.jpg', 'Third Slider', 3, '2018-09-30 16:05:14', '2018-09-30 16:05:14');

-- --------------------------------------------------------

--
-- Table structure for table `per_superadmin`
--

CREATE TABLE `per_superadmin` (
  `id` int(50) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `temporary_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permanent_address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `api_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `per_superadmin`
--

INSERT INTO `per_superadmin` (`id`, `name`, `email`, `password`, `temporary_address`, `permanent_address`, `contact`, `photo`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'admin@admin.com', '$2y$10$MAT.r2k9iRAngOqD2ksE.u2D74wSleuasAM9kd/Shhlzi0O3wwUw2', 'Kalimati', 'kalimati', '4488542', '', 'k5AEL21z3enW0cJYsfFLvIcABZzfDfjT3zc7eRJqt0aFtdYOl3XZL5g44hJ5', 'mJUhf2YAVekfhZrbweQJXv4WKfpDR5VwPZwE4AyJ6l3NjKVH2NWZgCT7ulsp', '2018-05-06 09:35:36', '2018-05-15 06:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `per_team`
--

CREATE TABLE `per_team` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `fb_link` varchar(255) DEFAULT NULL,
  `insta_link` varchar(255) DEFAULT NULL,
  `order_index` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `per_testimonials`
--

CREATE TABLE `per_testimonials` (
  `id` int(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `frontend_publishable` enum('yes','no') NOT NULL,
  `rating` int(11) NOT NULL COMMENT 'Out of 5',
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_testimonials`
--

INSERT INTO `per_testimonials` (`id`, `full_name`, `message`, `frontend_publishable`, `rating`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Tancherry Sg', 'Thank you very much Mr Deepak and all the guides and porters who have helped us achieved the satisfaction and gaining wonderful experiences trekking one of the most beautiful places on earth.', 'yes', 1, NULL, '2018-09-16 13:02:57', '2018-11-26 14:46:58'),
(3, 'Robert Jr.', 'I am extremely satisfied with the service that this company provided with my tour in Nepal. I wish a very good luck in the future and would recommend everyone to visit this wonderful company.', 'yes', 4, NULL, '2018-11-26 13:37:17', '2018-11-26 14:15:35'),
(4, 'Bob Dave', 'I am very happy to be a part of this company while travelling in Nepal. Hope to travel again with this wonderful team.', 'yes', 3, NULL, '2018-11-26 14:47:56', '2018-11-26 14:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `per_users`
--

CREATE TABLE `per_users` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `api_token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `per_users`
--

INSERT INTO `per_users` (`id`, `name`, `email`, `password`, `address`, `contact`, `photo`, `remember_token`, `api_token`, `created_at`, `updated_at`) VALUES
(1, 'Rohit Manadhar', 'rohit@gmail.com', '$2y$10$i3RE/.O2yAJ6OMLuz8v3KugxkqbVPZ6XS2Pdmv2549j/Tz4JjqDHS', 'asdasdsdssds', 'hasjasdasa', '', 'oVWduVGmJQ6RvZsjCgbJJiUzf5rmESd28csDfrfmv537BLiSwVE1F63SIIgS', 'EfTkMDn3aIQ2mUFhEAqG0DehUREoz3QyS6OaSgaMJol0hIh3Z5o9y43wcAod', '2018-05-20 07:57:14', '2018-05-20 07:57:14'),
(2, 'Sushan Paudyal', 'sushan@gmail.com', '$2y$10$i3RE/.O2yAJ6OMLuz8v3KugxkqbVPZ6XS2Pdmv2549j/Tz4JjqDHS', 'ktm', '981232121', '', 'LfDZpdxrSrN9qqU7sMCARXuYNBwDFY1GfACkVVpQOWNiQsnseoZT5k9w8PZu', 'oj4osmanE3MjuvW2YA9L7SSwCMK6yQW7WZZwDt6NKJnj9OHmWvKYtOaNf2WR', '2018-05-20 07:59:56', '2018-05-20 07:59:56'),
(3, 'test', 'test@gmail.com', '$2y$10$UTnhrQLIRsbtBDo7jW.x6uPu4axuLELHSPCoul8H31fOLqHZSh61O', 'ktm', '9812312321', NULL, 'u0wwpd96hO4dbwKhJRWn3kinp25NCflHsm1IziCu1KQknBlUikAoqOPja2i3', 'tTtWtZdqo80fVJNPJqE0cobUamoQb5yyYiQueLQ6aTZC3yURnzwe1mt4EpQK', '2018-05-20 09:46:48', '2018-05-20 09:46:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `per_about_us`
--
ALTER TABLE `per_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_blocks`
--
ALTER TABLE `per_blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_blog`
--
ALTER TABLE `per_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_category_id` (`blog_category_id`),
  ADD KEY `blog_category_id_2` (`blog_category_id`),
  ADD KEY `blog_category_id_3` (`blog_category_id`);

--
-- Indexes for table `per_blog_category`
--
ALTER TABLE `per_blog_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_blog_comments`
--
ALTER TABLE `per_blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `per_booking`
--
ALTER TABLE `per_booking`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_contact_messages`
--
ALTER TABLE `per_contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_enquiry`
--
ALTER TABLE `per_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_gallery`
--
ALTER TABLE `per_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_general_settings`
--
ALTER TABLE `per_general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_packages`
--
ALTER TABLE `per_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_package_dates`
--
ALTER TABLE `per_package_dates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_package_details`
--
ALTER TABLE `per_package_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_package_faq`
--
ALTER TABLE `per_package_faq`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_package_gallery_images`
--
ALTER TABLE `per_package_gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `package_id_2` (`package_id`);

--
-- Indexes for table `per_package_group_discount`
--
ALTER TABLE `per_package_group_discount`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_package_review`
--
ALTER TABLE `per_package_review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `per_page`
--
ALTER TABLE `per_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_services`
--
ALTER TABLE `per_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_slider`
--
ALTER TABLE `per_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_superadmin`
--
ALTER TABLE `per_superadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_team`
--
ALTER TABLE `per_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_testimonials`
--
ALTER TABLE `per_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `per_users`
--
ALTER TABLE `per_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `per_about_us`
--
ALTER TABLE `per_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `per_blocks`
--
ALTER TABLE `per_blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `per_blog`
--
ALTER TABLE `per_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `per_blog_category`
--
ALTER TABLE `per_blog_category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `per_blog_comments`
--
ALTER TABLE `per_blog_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `per_booking`
--
ALTER TABLE `per_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `per_contact_messages`
--
ALTER TABLE `per_contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `per_enquiry`
--
ALTER TABLE `per_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `per_gallery`
--
ALTER TABLE `per_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `per_general_settings`
--
ALTER TABLE `per_general_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `per_packages`
--
ALTER TABLE `per_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `per_package_dates`
--
ALTER TABLE `per_package_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `per_package_details`
--
ALTER TABLE `per_package_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `per_package_faq`
--
ALTER TABLE `per_package_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `per_package_gallery_images`
--
ALTER TABLE `per_package_gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `per_package_group_discount`
--
ALTER TABLE `per_package_group_discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `per_package_review`
--
ALTER TABLE `per_package_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `per_page`
--
ALTER TABLE `per_page`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `per_services`
--
ALTER TABLE `per_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `per_slider`
--
ALTER TABLE `per_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `per_superadmin`
--
ALTER TABLE `per_superadmin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `per_team`
--
ALTER TABLE `per_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `per_testimonials`
--
ALTER TABLE `per_testimonials`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `per_users`
--
ALTER TABLE `per_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `per_blog_comments`
--
ALTER TABLE `per_blog_comments`
  ADD CONSTRAINT `per_blog_comments_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `per_blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_booking`
--
ALTER TABLE `per_booking`
  ADD CONSTRAINT `per_booking_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_dates`
--
ALTER TABLE `per_package_dates`
  ADD CONSTRAINT `per_package_dates_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_details`
--
ALTER TABLE `per_package_details`
  ADD CONSTRAINT `per_package_details_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_faq`
--
ALTER TABLE `per_package_faq`
  ADD CONSTRAINT `per_package_faq_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_gallery_images`
--
ALTER TABLE `per_package_gallery_images`
  ADD CONSTRAINT `per_package_gallery_images_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_group_discount`
--
ALTER TABLE `per_package_group_discount`
  ADD CONSTRAINT `per_package_group_discount_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `per_package_review`
--
ALTER TABLE `per_package_review`
  ADD CONSTRAINT `per_package_review_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `per_packages` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
