-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2023 at 03:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'LifeStyle'),
(2, 'Agriculture'),
(3, 'Education'),
(9, 'travel');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `photo`, `category`, `description`, `date`, `author`) VALUES
(1, 'The Struggle with ‘Writing Stamina’', 'blog1.jpg', 'Education', 'After some grim national writing results last year, and lots of conversations with school leaders about their post-Covid teaching and learning priorities, writing is high on many schools’ priority list.\r\n\r\nCommon issues that have been raised to me by school colleagues are wide ranging, from issues with spelling, to extended writing, problematic writing assessments, and much more.\r\n\r\nPerhaps the most common complaint and challenge I hear is the statement: ‘my pupils lack writing stamina’.\r\n\r\nThe problem is that I am not sure many teachers agree on what they mean by ‘writing stamina’, never mind making teaching decisions to address the seeming struggle.\r\n\r\nWhat do we mean by ‘writing stamina’ anyway?\r\nFor many teachers, a lack of writing stamina characterises an inability to write independently for a sustained period. And yet, it probably characterises a broader range of behaviours that attend writing (and learning). Just a sample of these could include:\r\n\r\nLimited handwriting fluency. For younger pupils in particular the motor skills required of extended writing is hard work. As a result, their handwriting quality can quickly slip. For older pupils too, the effort and attention on handwriting can wane.\r\nRunning dry of ideas. For many pupils, with an urge to get going with a tricky writing task, they rush into the act. They plan sparingly. As a result, their initial enthusiasm is dimmed and they run out of creative ideas, or deep knowledge of the topic at hand.\r\nErrors increase in pupils extended writing. Pupils embark on their writing, but they lack the ability and stamina to edit and revise what they have written. As a result, their writing is error strewn and apparently maxed out of all stamina.\r\nMotivation is low to keep going with a writing task. Every teacher has battled with the reality of pupils claiming, ‘I’ve finished!’ in a matter of minutes, or gnashed their teeth as a pupil has plonked their head on the desk during the act of writing.\r\nThe notion that pupils are lacking in ‘writing stamina’ could account for an array of problematic causes. If we do not decipher the underlying causes, then we risk not finding solutions for pupils’ struggles. For example, we need to better discriminate emotional factors, such as effort and motivation, from knowledge-related factors such as having too little background knowledge or being unclear how to plan effectively.', '07/08/23', 'admin'),
(2, 'The Challenge of Editing Writing', 'blog2.png', 'Education', '‘I’ve finished’ is a common refrain you hear in the classroom soon after pupils are set a writing task. Pupils’ urge to write can see them rush to pour their ideas onto the page. Alas, for too many pupils, their energised efforts can result in a haste to finish that proves damaging. It can compromise a vital step in the writing process: editing for writing accuracy.\r\n\r\nPupils can possess misconceptions about editing and revising writing. Flawed notions that editing is simply about writing a ‘neat version’ can be common from pupils – both young and old. Additionally, pupils can have a narrow conception of editing as merely a matter of correct spelling.\r\n\r\nThe challenge of poor editing comes as no surprise to teachers. It occurs because pupils’ working memory is overloaded by undertaking so many complex moves at any one time during the writing process. Without an automatic knowledge of accurate sentence structures, grammar, and spelling, when pupils are asked to make multiple edits to a piece of writing they can find it difficult to even know where to start.\r\n\r\nChunking down the editing process\r\nFor extended writing, if pupils are not stopping to revise and edit at regular intervals, they can get to the end of the draft and feel overwhelmed by the scale of the job. Chunking the act of writing into smaller steps is essential.\r\n\r\nTeachers can scaffold and chunk down this process by having ‘editing anchor points’, where pupils are encouraged to stop and step back from the act of writing to revise and edit. These editing anchor points can be structured by short intervals of time (e.g. 10–15 minutes) or by selecting appropriate sections of a given writing task (for instance, after two paragraphs of an essay).\r\n\r\nCommonly, editing includes an array of proofreading for grammar gaps, punctuation problems, and spelling slips that is too much for pupils. It is necessary to put in supports to make the process more manageable. A handy approach is to create an ‘error record’ at the start of the school year or term,from multiple pieces of writing (including any short notes in pupils’ books where pupils didn’t plan, draft, or revise comprehensively). This offers a personalised editing checklist – or style sheet – for pupils to use as a tool to monitor their own writing.\r\n\r\nAlternatively, some speedy error seeking on a writing model can offer pupils a fun, slightly more distanced, practice of editing. H. G. Wells is alleged to have said that ‘No passion in the world, neither love nor hate, is equal to the passion to alter someone else’s draft’! He was right. ‘Editing trios’ can draw upon this urge, whilst offering fresh editing eyes on an extended piece of writing. The editing process should be audience focused, so reading aloud, reading, and editing in pairs, or trios, can help to correct points that lack clarity or are littered with mistakes that obscure sense. Having an audience is also likely to increase the motivation of pupils to edit.\r\n\r\nAlso, the urge to edit other people’s writing can be harnessed by using worked examples of error-filled writing to critique. ‘Writing non-examples’ can have the added benefit of being anonymous to pupils, so that criticism can be made freely – as opposed to using actual examples. [The likes of ChatGPT can do a good job of creating these flawed examples]\r\n\r\nUltimately, we need to shrink the challenge of editing so that it can be undertaken throughout the writing process with greater consistency. It takes a lot of explicit instruction to edit well, along with chunking down the process into smaller steps, for novice pupils and famous novelists alike.', '08/08/23', 'admin'),
(3, 'Crafting Great Sentences', 'blog3.jpg', 'Education', 'We can take the brilliant complexity of sentences for granted. Each sentence written in the classroom is a distillation of a near-infinite number of complex moves.\r\n\r\nFor pupils, practising one sentence brilliantly may be worth a hundred sentences written in haste.\r\n\r\nToo often, in the classroom, sentences are modelled, but pupils don’t have a strong concept of difference sentence level moves, their functions, and how to manipulate them. Instead of tackling lots of different genres and undertaking lots of error strewn ‘big writes’, we should be explicit in deliberately practising crafting great sentences.\r\n\r\nWhen pupils are supported to over-learn sentence crafting, they can begin to understand how sentences are constructed differently in stories compared to scientific writing, from history essays to art evaluations. By honing the four key sentence variation strategies, pupils have the tools to master writing in any subject or genre.', '08/08/23', 'admin'),
(4, 'Devastating Storm Delivers Unprecedented Blow to Vermont’s Farmers', 'blog4.png', 'Agriculture', 'A historic storm recently dumped nearly nine inches of rain on parts of Vermont. With more than 1.2 million acres of the state’s land devoted to food and agriculture, the flooding is devastating farmers.\r\n\r\nSince the storm hit, The Northeast Organic Farming Association of Vermont (NOFA-VT) has heard from 89 farms around Vermont who reported impacts from severe flooding. The damage ranges from losses in fields to complete destruction of entire farms.\r\n\r\n“The damage is really profound,” Grace Oedel, Executive Director of NOFA-VT tells Food Tank. “It didn’t hit all farmers, but the farmers it hit, it hit really hard.”\r\n\r\nAccording to the National Oceanic and Atmospheric Administration (NOAA), The intense and widespread rainfall that occurred in under 24 hours had less than a 1 percent chance of occurring in that part of the country. As localized flooding, washouts, and road closures intensified across Vermont on the first day of the storm, Governor Phil Scott declared a State of Emergency.\r\n\r\nThe food and agriculture sectors contribute US$19.3 Billion to Vermont’s economy, according to the organization Feeding the Economy. The localized devastation to farms across the state means an immense economic loss on both local and state levels.\r\n\r\n“There are layers of impact that we’re not even beginning to address yet,” Oedel says. “There’s the initial loss to income and loss to employment this season. But there’s also the loss to limited income eaters who were on food access programs receiving some of this food. There’s loss to the land itself, questions of contamination, what rebuilding will look like.”\r\n\r\nSome farmers are just beginning to get out into their fields to assess the damage, while others are still waiting for their properties to drain. According to Oedel, it will be weeks before they know the full extent of the damage.\r\n\r\nBut Oedel says that farmers continue to find hope in the strength of Vermont’s community. “Resilience is in diversity and is in community,” Oedel tells Food Tank. “We have farmers supporting each other really intensely. And by having diversified farms and growing diversified crops in various ecosystems and in various parts of the state, we’re much more resilient than if we only had people growing one thing, in one way, in one location.”\r\n\r\nHot temperatures in early spring, a frost in May, and poor air quality because of Canadian wildfires throughout June led to a turbulent growing season for many of Vermont’s producers. Oedel says the recent historic flooding has only solidified growing concerns about a potential “climate catastrophe” in Vermont’s agricultural community.\r\n\r\nWhile the magnitude of damage is still unknown, state authorities, local organizations and volunteers are already looking towards recovery.\r\n\r\n“There’s a lot of harm mitigation that needs to happen right now,” Oedel says. “We need to stand up for farmers and farm workers and low-income folks who just lost access to some important food.”\r\n\r\nThe state agriculture department put out a disaster response and recovery resources list just two days after the onset of floods. The resource aims to consolidate all of the information available for farmers right now, including how to report losses and specific guidelines for dairy, meat, and produce operations.\r\n\r\nCommunity organizations including The Northeast Organic Farming Association of Vermont, Intervale Center, The Vermont Community Foundation, and the Center for Agricultural Economy are leading efforts to provide immediate relief funding to farmers while federal relief gets sorted out. The Vermont Garden Network has also compiled a list of resources for gardeners outlining the first steps towards garden recovery.\r\n\r\nPresident Biden has also approved emergency relief aid. Assessors from the Federal Emergency Management Agency (FEMA) began inspecting hard hit areas of Vermont six days after the storm. They will determine which Vermont counties qualify for Individual Assistance aid through President Biden’s disaster declaration. Yet Oedel anticipates that most of the funding will go towards municipalities to rebuild infrastructure, and might not ever reach the farming community.\r\n\r\nOedel is calling upon Vermonters to show up for their local farmers through donations or volunteering. With most emergency shelters throughout the state now empty, the focus for volunteers has shifted to providing food and water to those who still need it and helping to repair infrastructure.\r\n\r\n“This is an all of us issue,” Oedel tells Food Tank. “It’s affecting farmers, but all of us are eaters and all of us need food and clean water. So we stand with our farmers in solidarity, because in part, our own nourishment is bound up in all of this.”\r\n\r\nArticles like the one you just read are made possible through the generosity of Food Tank members. Can we please count on you to be part of our growing movement? Become a member today by clicking here.', '08/08/23', 'admin'),
(5, 'Ayudando Latinos A Soñar: Creating Support and Resilience Amidst Devastating Floods in California', 'Liza_Featured-Image-3.png', 'Agriculture', 'Ayudando Latinos A Soñar (ALAS) is supporting California farm workers and their families by helping them respond to extreme weather events.\r\n\r\nALAS, a Latino centered nonprofit in Half Moon Bay, California, began in 2011. The organization seeks to help children and families feel proud of their culture and identity, and has become a communal space for support. Volunteers, families, board, and staff are creating programs including culturally-centered mental health services, wrap-around case management, immigration, education, and social justice advocacy initiatives.\r\n\r\n2023 has brought record levels of precipitation in California that have triggered destructive floods across communities and agricultural landscapes. When the first wave of floods hit the state earlier in the year, ALAS was among the first organizations to respond.\r\n\r\n“The sooner we can mobilize and organize and be there to help, the better the families are to endure this,” Belinda Hernandez-Arriaga, Executive Director for ALAS tells Food Tank. “Sometimes we can’t wait for the bureaucracy of other organizations to organize, we must be ready. ALAS is ready. We know how to mobilize with the community and get the word out.”\r\n\r\nALAS has found that one of the biggest impacts of the flooding is the barriers the destruction imposes on accessing food. The organization’s crisis food pantry, which was launched during the COVID-19 pandemic, is serving its highest numbers of people ever, according to Hernandez-Arriaga.\r\n\r\nWhile the food pantries relieve a financial burden on families, Hernandez-Arriaga discusses how money isn’t the only barrier.\r\n\r\n“One of the things we have to prepare as organizations is how we are mobilizing to support farm worker communities who might be in more remote areas,” says Hernandez-Arriaga.\r\n\r\nShe shares how the flooding has caused extensive damage to roads, preventing farm workers from being able to drive away from their homes or work areas. In response, ALAS has developed programs to meet farm workers where they are.\r\n\r\nALAS brings gallons of water to Coastside farms once a week and collaborates with several organizations, such as Coastside Hope and Second Harvest Food Bank, to regularly distribute groceries. ALAS also coordinates Farmworker Friday, an initiative which brings lunch to farmworkers on rotating Fridays. Each lunch is sponsored by different organizations seeking to support their local farm workers.\r\n\r\nAt the end of 2022, ALAS launched the Farmworker Equity Express Bus, a mobile center that brings resources to farm workers on the Coast.\r\n\r\n“We really need to go where farmworkers are,” says Hernandez-Arriaga. “We have seen the isolation and the limitation they have because of their work hours and the type of work they are doing.”\r\n\r\nThe Bus is equipped with Wifi laptops, teleteaching resources, telehealth, mental health commissions, and education and arts resources.\r\n\r\nThe organization emphasizes how the effects of flooding are ongoing, economically impacting farm worker families long after the water dissipates. As ALAS continues to provide crisis relief to farm workers from the flooding earlier this year, they are simultaneously preparing these communities for the floods to come.\r\n\r\nArticles like the one you just read are made possible through the generosity of Food Tank members. Can we please count on you to be part of our growing movement? Become a member today by clicking here.', '08/08/23', 'admin'),
(6, 'Without Farmers at the Center, Regenerative Agriculture Will Be a Slogan Not a Solution', 'blog5.jpg', 'Agriculture', 'The rubber in the sole of your shoe may have a story to tell. Last month, the first shoes sourced with Regenerative Outcome Verified – ROV™ rubber reached the global market. The rubber comes from a small corner of Thailand, where rubber-tappers and farmers are transforming a monoculture rubber plantation into a diverse canopy. Now, farmers also grow mango, coconut, turmeric and a host of other crops that are enriching the soil, raising incomes, improving nutrition and forming a protective canopy that shields people and plants from the rising heat of climate change.   \r\n\r\nThe ROV™ standard is the result of a cutting-edge partnership between the farmer-led Regenerative Rubber Alliance in Thailand; VF Corporation partner brands the Timberland®, The North Face®, and Vans®; Terra Genesis, a regenerative design and development firm; and Smallholder Data Services. It is one example of the regenerative agriculture movement that is gaining traction among farmers, brands and the global climate change community.  \r\n\r\nWe know that food and agriculture systems and climate change are interlinked. Food systems make up about 30 percent of global greenhouse gases, and climate change is rapidly impacting what, how, and where crops can be grown and the people who farm. Regenerative agriculture can both mitigate the greenhouse gas emissions from agriculture and help farmers adapt to climate change, while more broadly benefitting the health of people and planet. \r\n\r\nBut to unleash the potential of regenerative agriculture, farmers, Indigenous Peoples and other land stewards must be front and center in articulating a vision and setting direction for regenerative agriculture. Their leadership is crucial, both on the ground and in global convenings on climate change and food systems. At meetings such as this week’s AIM for Climate Summit in Washington DC, CEOs and government ministers will be moderating panels and delivering keynotes; farmers and Indigenous Peoples must also hold the mic. \r\n\r\nRegenerative agriculture is practiced in multiple forms and scales—from young Kenyan entrepreneurs who produce frass, an organic, insect-based alternative to chemical fertilizers to farmers in Haiti, who intercrop cotton, peanuts and okra and digitally verify the regenerative status of their crops. As with the farmer-led Regenerative Rubber Alliance in Thailand, their leadership is essential for the creation of regenerative food systems and for establishing the standards to define a regenerative-branded product. Without a strong and accepted framework for regenerative agriculture, it risks becoming a tag-line rather than a solution for the health of people and planet. \r\n\r\nA series of upcoming convenings, from the AIM4C meeting to the World Farmers’ Organization General Assembly (May 21-24), could help set the stage for a food and climate breakthrough at COP28 (the global climate summit of all nations) next December in Dubai. Specifically, two tangible outcomes could help propel regenerative agriculture forward. \r\n\r\nFirst, a coalition of large funders, landscape stewards, farmers, scientists and businesses could deliver a holistic system for consistent measurement of regenerative outcomes that span from soil health to biodiversity restoration, farmer well-being to community voice and participation. With food producers, Indigenous Peoples and local communities at the center, the Regen10 network is leading a global, collaborative initiative to develop such a framework. One member of that network is the Ikea Foundation, which works with 40 partners developing regenerative systems in Africa and Asia. As Nico Janssen, Programme Manager of Agricultural Livelihoods at the foundation says, “Regenerative is not only regenerative in food production, but the whole regeneration of local communities and economies.” \r\n\r\nSecond, partners could deliver a platform that raises and coordinates funding to address the biggest barriers farmers face in adopting regenerative agriculture—barriers that include limited access to finance, technical assistance, subsidies, and policy.  \r\n\r\nAs we look towards COP28, let’s remember that a transition from carbon-intensive, extractive food systems to food systems that are regenerative requires the leadership of the people who produce our food and steward biodiverse landscapes. Their experience and philosophies are essential to restoring balance between the land we cultivate, the natural world of which we are a part, and each other. Their work is central to advancing food and nutrition security and coping with climate change. Beyond a seat at the table, they need to be engaged as equal partners, and equipped to implement change on the farms and across the landscapes they steward.\r\n\r\nArticles like the one you just read are made possible through the generosity of Food Tank members. Can we please count on you to be part of our growing movement? Become a member today by clicking here.', '08/08/23', 'admin'),
(7, 'Yoga for women’s health', 'blog6.jpg', 'LifeStyle', 'The word “Yoga” or “Yog” is derived from “Yuj”, a Sanskrit word which means “to join” or “to unite”. It is a practice that helps one connect with the inner mind or consciousness. It brings a connection between the body and the soul, thereby bringing perfect harmony within. Regular Yoga practice brings physical fitness, breath awareness, connection with the mind and finally the inner self. Today, Yoga is practiced across the world, bringing physical fitness and inner to million men and women.\r\nToday’s woman is a multi-tasker. Unlike older times, her duties are not limited to household chores. She is a mother, a sister and a wife and an educated independent woman, who tries endlessly to maintain a balance between Home and career. Since women are like the roots of the tree of society, it is essential to keep them strong—mentally and physically. Let’s understand the importance of women’s health and how Yoga can help them reach their fittest.\r\n\r\nWhy is Women’s Health Important\r\nWomen are the caretakers of the family. They are responsible for the health of their spouse and children. Illness or death of a woman negatively impacts children, spouse, family and community. Women with healthy mind and body are likely to enhance the family’s health. Hence, it would be appropriate to say that women’s health is the key to a healthy community.\r\n\r\nSince women play so many roles in life, they tend to focus on the healthcare of their loved one and neglect their personal needs. This neglect, though filled with love, is the root cause of many diseases that women face. Women need to understand the importance of their health and its effects on their family and loved ones.\r\n\r\nWhat Has Changed Over the Years\r\nWomen’s life and their roles have changed drastically over the years. In former days, women’s life was limited to household chores. It was a full-time stay-at-home responsibility. Let aside having a career, women were not even allowed to step out of their homes. It was limited to the kitchen, household duties and childbearing. They were denied the right to education as well. In those conditions as well, women had some time for themselves and physical activity was an add-on to their daily duties. However, things have changed over time, women are now front runners and are competing with men in many fields, and that too without compromising with household duties. These jobs often involve long sitting hours and reduced physical activity, thereby affecting overall health. Hence, it is the need of the hour to take time out for some physical activity as well.', '08/08/23', 'admin'),
(8, 'The perception of half travelled journey.', 'blog7.jpeg', 'LifeStyle', 'One most important reality of life must be the learning process that continues for the whole life. I have learnt this fact from an aged Sardar whom we approached as property dealer. The person must have been retired long ago if he had been in any Govt. job. The Sarder spent almost half of the day in showing us number of houses and we rejected each of those. Towards the end of the day I shared few words with him sympathizing for wasting his valuable time. The Sardar replied with a smile that we get to learn something new in each and every day.\r\n\r\n \r\n\r\nI wondered looking at the old age of the person and thinking of what more remains to learn at his age? I have seen many of my colleagues in office joining into different courses such as MBA or Ph D, etc. to enhance their qualifications with an objective to get a higher post or promotion. But the kind of learning as mentioned by the Sardar must be an exception.\r\n\r\n \r\n\r\nI had a similar experience while visiting the River Island ‘Majuli’ in Assam for some documentary shoot. We stayed on a guest house of a Monastery. One night we were so late after the shooting and the kitchen of the guest house was already closed. We tried for some hotel or restaurant nearby but we were so late that couldn’t find any. By the time our search was on some local villagers noticed our condition and came for our resort. The villagers arranged food for us in a house of someone among them. Feeling gratified I wished to offer some money on return but an old age villager replied that money doesn’t work in Majuli. I always remind that statement by an old age villager observing the mercenary behavior of people in city life.\r\n\r\n \r\n\r\nIn fact our perception towards life always seems to be incomplete as our journey of life yet to be completed. We most often face extraordinary situation and uncommon people while travelling in the journey of life. We learn something new in each and every day as mentioned by the Sardar in the very beginning. Finally our perception till date is based on our half travelled journey of life.\r\n\r\n', '08/08/23', 'admin'),
(9, 'Gurudwara Sahib Manikaran, Manali', 'blog8.jpg', 'travel', 'Gurudwara Sahib Manikaran is a Sikh shrine located in the Parvati Valley in the Kullu district of Himachal Pradesh, India. It is a popular pilgrimage destination for Sikhs and Hindus and is known for its hot springs and beautiful surroundings. Here are some tips to help you travel and plan your trip to Gurudwara Sahib Manikaran:\r\n\r\nBest time to visit:\r\nThe best time to visit Gurudwara Sahib Manikaran is from March to June and from September to November, when the weather is pleasant and dry.\r\n\r\nGetting there:\r\nThe nearest airport to Manikaran is the Bhuntar Airport in Kullu, which is about 40 km away. The nearest railway station is the Joginder Nagar Railway Station, which is about 80 km away. Manikaran is well-connected by road, and there are many bus services that connect it to nearby cities.\r\n\r\nAccommodation:\r\nManikaran offers a variety of accommodation options to suit all budgets, from budget guesthouses to luxury resorts. It is advisable to book your accommodation in advance, especially during peak season.\r\n\r\nVisit the Gurudwara Sahib:\r\nThe Gurudwara Sahib is the main attraction in Manikaran, and it is believed that the hot springs here have healing properties. Visitors are required to cover their heads and remove their shoes before entering the shrine.\r\nEnjoy the hot springs:\r\nManikaran is known for its hot springs, which are believed to have medicinal properties. Visitors can take a dip in the hot springs and enjoy the therapeutic benefits.\r\n\r\nVisit the temples:\r\nManikaran is also home to several temples, including the Lord Ramchandra Temple and the Lord Shiva Temple. These temples are popular with Hindu pilgrims and offer a peaceful and spiritual atmosphere.', '08/08/23', 'admin'),
(10, 'Golden Temple, Amritsar', 'blog9.jpeg', 'travel', 'Travelling to the Golden Temple in Amritsar is a great experience. The Golden Temple, also known as Sri Harmandir Sahib, is a Sikh gurdwara located in the city of Amritsar in Punjab, India. It is one of the most revered spiritual sites in the world, attracting millions of visitors each year. Here are some tips and information that might be helpful when you travel to Amritsar and visit the Golden Temple,\r\n\r\nDress appropriately:\r\nVisitors are required to cover their heads and remove their shoes before entering the temple. Scarves and head coverings are available for rent or purchase outside the temple if you do not have your own. It’s also important to dress modestly and conservatively, with clothes that cover your arms and legs.\r\n\r\nRespect the temple:\r\nThe Golden Temple is a place of worship, so it’s important to be respectful and follow the rules. Avoid smoking, drinking alcohol, or eating non-vegetarian food on the temple grounds. Also, take off your shoes before entering the temple and wash your feet before entering the sanctum.\r\n\r\nVisit the Langar:\r\nThe Langar is the community kitchen of the Golden Temple, where free vegetarian meals are served to all visitors. It is one of the largest free kitchens in the world and serves around 100,000 people each day.\r\n\r\nWitness the prayer ceremonies:\r\nThe Golden Temple has four prayer ceremonies each day, including two in the morning and two in the evening. The ceremonies are open to all visitors and provide a unique opportunity to witness the spiritual traditions of the Sikh faith.\r\n\r\nExplore the complex:\r\nThe Golden Temple complex includes several buildings, including the temple, the Langar Hall, and a museum. Visitors can take a guided tour of the complex to learn more about the history and significance of the site.\r\n\r\nBe mindful of your belongings:\r\nAs with any tourist destination, it’s important to keep your belongings safe and secure. Avoid carrying large amounts of cash or valuable items, and keep an eye on your bags and belongings at all times.\r\n\r\nIf you only have one day to visit the Golden Temple in Amritsar, here’s a suggested itinerary to help you make the most of your time:\r\nMorning:\r\nWake up early and head to the Golden Temple before sunrise to witness the morning prayer ceremony. This is a beautiful and peaceful time to visit the temple, and you can see the sun rise over the temple’s golden dome.\r\n\r\nAfter the ceremony, visit the Langar Hall and enjoy a simple breakfast of hot, freshly prepared vegetarian food. The Langar Hall is a communal kitchen that serves free meals to all visitors to the temple.\r\n\r\nMid-morning:\r\nTake a guided tour of the Golden Temple to learn more about its history, architecture, and spiritual significance. Many tour companies offer guided tours in English and other languages.\r\n\r\nAfternoon:\r\nVisit the nearby Jallianwala Bagh Memorial, which commemorates the site of a tragic massacre in 1919. This park has a solemn and reflective atmosphere, and it’s a good opportunity to learn more about the history of the region.\r\nEnjoy a traditional Punjabi lunch at a local restaurant, with dishes like tandoori chicken, butter chicken, and naan bread.\r\nExplore the old city and visit the colorful bazaars and street markets. You can find all kinds of interesting goods here, from spices and textiles to jewelry and souvenirs.\r\n\r\nEvening:\r\nReturn to the Golden Temple to see the illuminated temple and witness the evening prayer ceremony. This is another beautiful and peaceful time to visit the temple, and the atmosphere is especially magical in the evening.\r\n\r\nOverall, visiting the Golden Temple can be a profound and spiritual experience. By following these tips and guidelines, you can ensure a safe and respectful visit to this iconic site.', '08/08/23', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'ayush@gmail.com', 'admin123@'),
(2, 'ayush', 'akash@gmail.com', 'ayush123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;