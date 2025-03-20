-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 10:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_k_shilpi_reddy`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_intro_head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_post_date` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intro_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_external` tinyint(1) NOT NULL DEFAULT 0,
  `external_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `blog_intro_head`, `blog_post_date`, `slug`, `intro_description`, `intro_image`, `is_external`, `external_url`, `sort_order`, `blog_description`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'MRS MOM Event 2023​', NULL, NULL, 'mrs-mom-event-2023', NULL, NULL, 0, NULL, NULL, '<p>Pregnancy is a transformative stage in a woman’s life, and the Mrs. Mom event marks and celebrates this exceptional moment. The event ‘’Mrs. Mom 2023’’ took place at the four vivacious cities, namely Hyderabad, Bangalore, Chennai, and Vizag. The program moved away from the traditional and brought a novel mix of educational, entertaining and engaging</p><p>For 2023 Mrs. Mom 2023 was an event, but moreover, an experience, which embraced the complete body and soul of pregnancy as well as of a child’s upbringing. The event targeted from expert sessions on prenatal health towards interactive workshops on postnatal care towards equipping parents with the knowledge and support necessary for their forthcoming journey into parenthood. The idea of designer babies provided one of the main highlights during Mrs. Mom 2023. Famous specialists of genetics and reproductive science throw a light on the current technologies that grant parents to select intelligently their way of parenting and shape a good future with their little ones.<br>Mrs. Mom 2023 acknowledged that fathers are also part of those pregnancy happenings. It was an enjoyable occasion with exciting games where men were actively involved during pregnancy. A birth day fair covered by birthing and baby care workshops was conducted to develop relationships among couples and equip them for togetherness and parenting in future.</p><p>Healthy and Happy Pregnancy: A Guiding Light:<br>It is crucial that an expectant woman ensures physical and mental hygiene throughout her pregnancy period. The organization held yoga and meditation meetings, lectured about proper nutrition and prepared special fitness programs for expectant mothers called Mrs. Mom 2023. The holistic health approach was a key element in the event, creating an encouraging atmosphere for pregnancy.<br>It is worth noting that the event of Mrs. Mom 2023 took the pregnancy event industry to a new level. The event integrated education, entertainment, and inclusivity thereby over-exceeding expectations and arming couples with necessary items for a happy and healthy pregnancy. With the prospect of the future, Mrs. Mom is a yardstick in events celebrating the beauty of pregnancy and preparing couples for the incredible experience of parenthood. This is to the trip of a lifetime – the trip of parenting!</p>', 1, '2024-06-16 22:02:57', '2024-06-16 22:02:57'),
(3, 'Celebrating Life and Nature', NULL, NULL, 'celebrating-life-and-nature', NULL, NULL, 0, NULL, NULL, '<p>\r\n\r\n</p><div><div><strong>One Girl, One Tree, One Nation, Green Nation</strong></div></div><div><div>In the heart of Telangana, something beautiful is happening that connects the joy of newborn babies with the care for our environment. Dr. K. Shilpi Reddy, a well-known doctor, came up with the idea called “One Girl, One Tree, One Nation, Green Nation”. It’s a special program where a new tree is planted for every baby girl she helps to deliver. This isn’t just about planting trees—it’s about celebrating life and ensuring a greener future for everyone.</div></div><div><div><strong>How It All Started</strong></div></div><div><div>Dr. K. Shilpi Reddy has delivered more than 250 baby girls in the last six months. Inspired by this, she wanted to do something meaningful that would benefit both the newborn and the environment. This is a simple act of her way of giving back to nature and making sure every child grows up in a healthier world. &nbsp; On 07th July 2024, in Nadimitanda village, Medak District, the honourable District Judge Smt. Lakshmi Sharada joined Dr. K. Shilpi Reddy in planting mango saplings, along with the family members of Dr. Shilpi and team members. Each sapling represents a baby girl born recently. These trees will grow to provide shade and fruits, helping local farmers and adding more greenery to the area. This is not just a simple initiative for a greener environment but also a reminder of the true power of women in society. It’s a small step that means a lot for the future.</div></div><div><div><strong>Bringing Communities Together</strong></div></div><div><div>People from all around the village came together to support this initiative. District Junior Civil Judge Smt. Rita Lal Chandu expressed her happiness in being part of such a good cause. Families, hospital staff, villagers, and members of the Grow Billion Trust also joined hands. They understand that by planting trees today, they are securing a better environment for tomorrow’s children.</div></div><div><div>In a world where taking care of our planet is more important than ever, initiatives like “<strong>One Girl, One Tree, One Nation, Green Nation”</strong>, give us hope. By celebrating life and planting trees, Dr. Shilpi Reddy and her team are making a real difference. Each tree symbolizes a new beginning and a promise to cherish and protect our natural world. Together, we can create a greener and healthier future for all.</div></div>\r\n\r\n<br><p></p>', 1, '2024-08-20 04:24:22', '2024-08-20 04:24:22'),
(4, 'Women\'s wings (RERF) Brahma Kumaris', NULL, NULL, 'womens-wings-rerf-brahma-kumaris', NULL, NULL, 0, NULL, NULL, '<p>\r\n\r\n</p><p>Experience a month brimming with inspiration and transformation! From July 30th to September 16th, 2023, witness a captivating journey dedicated to fostering harmonious families, empowering children, and uplifting women. Our focus encompasses promoting familial peace, happiness, and safety while providing practical solutions to children’s behavioral challenges. We’re dedicated to advancing women’s education, health, and security, all while raising awareness about spirituality and the profound effects of meditation. Engage with captivating talks, immersive exhibitions, cultural presentations, audio-visual displays, and heartwarming competitions. This event, hosted by the Women’s Wing (RERF) Brahma Kumaris, Telangana, culminates in a grand Valedictory and Expo on September 16th, 2023, at Shanti Sarovar, Gachibowli, Hyderabad.</p><p>Women and the family system form the foundation of our society. Their profound impact in shaping our society and shaping our future is immeasurable, driven by their nurturing love, inspiring guidance, and boundless energy. Serving as the bedrock of our community, women skillfully manage and care for their families and instill valuable qualities and behaviors in their children. Families bring comfort, stability, and mutual support. Women are crucial in building resilient and cohesive family units. Let us find inner peace, desirable values, ​​and spiritual growth, and let us value and recognize family. Sincere thanks for organizing this program all over Telangana to spread this spiritual message.</p>\r\n\r\n<br><p></p>', 1, '2024-08-20 04:35:35', '2024-08-20 04:35:35'),
(5, 'What are the benefits of prenatal yoga?', NULL, NULL, 'what-are-the-benefits-of-prenatal-yoga', NULL, NULL, 0, NULL, NULL, '<p>\r\n\r\n</p><p>Much like other types of childbirth-preparation classes, prenatal yoga is a multifaceted approach to exercise that encourages stretching, mental centering, and focused breathing. Research suggests that prenatal yoga is safe and can have many benefits for pregnant women and their babies.</p><p>Prenatal yoga can:</p><ul><li>Improve sleep</li><li>Reduce stress and anxiety</li><li>Increase the strength, flexibility, and endurance of muscles needed for childbirth</li><li>Decrease lower back pain, nausea, headaches, and shortness of breath</li></ul><p>Prenatal yoga can also help you meet and bond with other pregnant women and prepare for the stress of being a new parent.</p><h3>What happens during a typical prenatal yoga class?</h3><p>A typical prenatal yoga class might involve:</p><ul><li><strong>Breathing.</strong>&nbsp;You’ll be encouraged to focus on breathing in and out slowly and deeply through the nose. Prenatal yoga breathing techniques might help you reduce or manage shortness of breath during pregnancy and work through contractions during labor.</li><li><strong>Gentle stretching.</strong>&nbsp;You’ll be encouraged to gently move different areas of your body, such as your neck and arms, through their full range of motion.</li><li><strong>Postures.</strong>&nbsp;While standing, sitting, or lying on the ground, you’ll gently move your body into different positions aimed at developing your strength, flexibility, and balance. Props — such as blankets, cushions, and belts — might be used to provide support and comfort.</li><li><strong>Cool down and relax.</strong>&nbsp;At the end of each prenatal yoga class, you’ll relax your muscles and restore your resting heart rate and breathing rhythm. You might be encouraged to listen to your breathing, pay close attention to sensations, thoughts, and emotions, or repeat a mantra or word to bring about a state of self-awareness and inner calm.</li></ul><h3>Are there styles of yoga that aren’t recommended for pregnant women?</h3><p>There are many different styles of yoga — some more strenuous than others. Prenatal yoga, hatha yoga, and restorative yoga are the best choices for pregnant women. Talk to the instructor about your pregnancy before starting any other yoga class.</p><p>Be careful to avoid hot yoga, which involves doing vigorous poses in a room heated to higher temperatures. For example, during the Bikram form of hot yoga, the room is heated to approximately 105 F (40 C) and has a humidity of 40 percent. Hot yoga can raise your body temperature too much, causing a condition known as hyperthermia.</p><h3>Are there special safety guidelines for prenatal yoga?</h3><p>To protect your health and your baby’s health during prenatal yoga, follow basic safety guidelines. For example:</p><ul><li><strong>Talk to your healthcare provider.</strong>&nbsp;Before you begin a prenatal yoga program, make sure you have your healthcare provider’s OK. You might not be able to do prenatal yoga if you are at increased risk of preterm labor or have certain medical conditions, such as heart disease or back problems.</li><li><strong>Set realistic goals.</strong>&nbsp;For most pregnant women, at least 30 minutes of moderate physical activity is recommended on at least five, if not all, days of the week. However, even shorter or less frequent workouts can still help you stay in shape and prepare for labor.</li><li><strong>Pace yourself.</strong>&nbsp;If you can’t speak normally while you’re doing prenatal yoga, you’re probably pushing yourself too hard.</li><li><strong>Stay cool and hydrated.</strong>&nbsp;Practice prenatal yoga in a well-ventilated room to avoid overheating. Drink plenty of fluids to keep yourself hydrated.</li><li><strong>Avoid certain postures.</strong>&nbsp;When doing poses, bend from your hips — not your back — to maintain normal spine curvature. Avoid lying on your belly or back, doing deep forward or backward bends, or doing twisting poses that put pressure on your abdomen. You can modify twisting poses so that you only move your upper back, shoulders, and rib cage. As your pregnancy progresses, use props during postures to accommodate changes in your center of gravity. If you wonder whether a pose is safe, ask your instructor for guidance.</li><li><strong>Don’t overdo it.</strong>&nbsp;Pay attention to your body and how you feel. Start slow and avoid positions that are beyond your level of experience or comfort. Stretch only as far as you would have before pregnancy. If you experience any pain or other red flags — such as vaginal bleeding, decreased fetal movement, or contractions — during prenatal yoga, stop and contact your healthcare provider.</li></ul><h3>How do I choose a prenatal yoga class?</h3><p>Look for a program taught by an instructor who has training in prenatal yoga. Consider observing a class ahead of time to make sure you’re comfortable with the activities involved, the instructor’s style, the class size, and the environment.</p>\r\n\r\n<br><p></p>', 1, '2024-08-20 04:45:33', '2024-08-20 04:45:33'),
(6, 'మహిళలు శక్తివంతంగా ముందుకువెళ్ళాలి : డా. శిల్పిరెడ్డి', NULL, NULL, 'మహిళలుశక్తివంతంగాముందుకువెళ్ళాలిడాశిల్పిరెడ్డి-6', NULL, NULL, 0, NULL, NULL, '<p>కార్పొరేట్ ప్రపంచంలోని మహిళల్లో మనోధైర్యాన్ని పెంపొందించడంపై దృష్టి సారించిన ప్రముఖ ఆస్ప‌త్రి కిమ్స్ క‌డ‌ల్స్.. సీఐఐ ఐడ‌బ్ల్యుఎన్‌తో క‌లిసి కార్పొరేట్ ఉమెన్ గెట్ టు గెద‌ర్ కార్య‌క్ర‌మం నిర్వ‌హించింది. బిల్డింగ్ రిజిలియెన్స్: ఎంప‌వ‌రింగ్ ఉమెన్ టు త్రైవ్ పేరుతో కొండాపూర్‌లోని కిమ్స్ ఆస్ప‌త్రి ప్రాంగ‌ణంలో ఈ నెల 10న ఈ కార్యక్ర‌మం నిర్వ‌హించారు.</p><p>నేటి వేగవంతమైన, డిమాండుతో కూడిన వ్యాపార వాతావరణంలో రిజిలియెన్స్ ప్రాధాన్య‌త‌ను గుర్తించిన డాక్టర్ కె.శిల్పిరెడ్డి ఫౌండేషన్, సీఐఐ ఐడబ్ల్యుఎన్ తెలంగాణ తమ మహిళా ఉద్యోగులకు ఎదుర‌వుతున్న సవాళ్లను అధిగమించడానికి, ఎదురుదెబ్బల నుంచి కోలుకోవడానికి, వారి పూర్తి సామర్థ్యాన్ని సాధించడానికి అవసరమైన సాధనాలు. మద్దతును అందించడానికి కట్టుబడి ఉన్నాయి. విమెన్ గెట్ టుగెదర్ ఫర్ అడాప్టబిలిటీ బిల్డింగ్ మహిళలను శక్తివంతం చేయడం, వారి వ్యక్తిగత, వృత్తిపరమైన జీవితంలో అభివృద్ధి చెందడానికి అవసరమైన నైపుణ్యాలతో వారిని సన్నద్ధం చేయడం లక్ష్యంగా పెట్టుకుంది.</p><p>ఈ కార్యక్రమంలో అత్యంత గౌరవనీయులైన‌ వక్తలు, వ్యక్తిగత ఎదుగుదల రంగంలో నిపుణులు పాల్గొన్నారు. ఆకర్షణీయమైన కీనోట్ ప్రజెంటేషన్లు, ఇంటరాక్టివ్ వర్క్ షాప్ లు, ప్యానెల్ డిస్కషన్ ల ద్వారా, పాల్గొనేవారు సమర్థవంతమైన ఒత్తిడి నిర్వహణ పద్ధతులు, సానుకూల మనస్తత్వాన్ని నిర్వహించడం, మార్పుకు అనుగుణంగా మారడం వంటి స్థితిస్థాపకతను నిర్మించే వివిధ అంశాలను అన్వేషించే అవకాశం ఉంటుంది.</p><p>ఏ ప్రయత్నంలోనైనా విజయం సాధించాలంటే స్థితిస్థాపకత అనేది కీలక నైపుణ్యమని, కార్పొరేట్ ప్రపంచంలోని మహిళలు తరచూ ప్రత్యేకమైన సవాళ్లను ఎదుర్కొంటారని డాక్టర్ కె.శిల్పిరెడ్డి ఫౌండేషన్ వ్యవస్థాపకురాలు డాక్టర్ కె.శిల్పిరెడ్డి అన్నారు. “మా మహిళా శ్రామిక శక్తి దృఢత్వం, శ్రేయస్సుపై పెట్టుబడి పెట్టడం ద్వారా, వారు సంపూర్ణ విజయాన్ని సాధించ‌డానికి దోహదం చేస్తున్నామని మేము నమ్ముతున్నాము” అని ఈ సంద‌ర్భంగా చెప్పారు.</p><p>ద ఉమెన్ గెట్ టుగెద‌ర్ ఫ‌ర్ రిజిలియెన్స్ బిల్డింగ్ కార్య‌క్ర‌మం మహిళా నిపుణులకు అనుభవాలను పంచుకోవడానికి, ఒకరి నుంచి ఒకరు నేర్చుకోవడానికి, త‌మ‌కు అండ‌గా ఉండే బ‌ల‌మైన నెట్‌వ‌ర్క్‌ను నిర్మించ‌డానికి వీలు క‌ల్పిస్తుంది. పాల్గొనేవారు అర్థవంతమైన చ‌ర్చ‌ల్లో పాల్గొనడానికి, విలువైన సంబంధాలను ఏర్పరుచుకోవడానికి, అడ్డంకులను అధిగమించడానికి, వారి వృత్తిలో అభివృద్ధి చెందడానికి సహాయపడే ఇన్‌సైట్ల‌ను పొందడానికి అవకాశం ఉంటుంది.</p><p>ఉద్యోగులందరి సహకారం, శ్రేయస్సుకు విలువనిచ్చే సహాయక, సమ్మిళిత పని వాతావరణాన్ని పెంపొందించడానికి కిమ్స్ క‌డ‌ల్స్ కట్టుబడి ఉంది. ఉమెన్ గెట్ టుగెదర్ ఫర్ రిజిలియెన్స్ బిల్డింగ్ వంటి కార్యక్రమాల ద్వారా, కంపెనీ మహిళల సాధికారతకు కృషి చేస్తుంది, స్థితిస్థాపకత విజయానికి కీలక లక్షణమైన‌ సంస్కృతిని సృష్టించడానికి ప్రయత్నిస్తుంది.</p><p>వివిధ నేపథ్యాలు, స్థానాలకు చెందిన మహిళా ఉద్యోగులు ఈ పరివర్తన కార్యక్రమంలో పాల్గొనాల‌ని కిమ్స్ క‌డ‌ల్స్ కోరుతోంది. విమెన్ గెట్-టుగెదర్ ఫర్ రిజిలియెన్స్ బిల్డింగ్ ఒక సుసంపన్నమైన అనుభవం అని హామీ ఇస్తుంది. ఇది పాల్గొనేవారికి విలువైన నైపుణ్యాలను, కార్పొరేట్ ప్రపంచంలోని సవాళ్లను ఆత్మవిశ్వాసంతో నావిగేట్ చేయడానికి ప్రేరణను అందిస్తుంది.</p>\r\n\r\n<br><p></p>', 1, '2024-08-20 04:51:55', '2025-02-24 08:30:12'),
(7, 'Is it safe to have a vegetarian or vegan pregnancy?', NULL, NULL, 'is-it-safe-to-have-a-vegetarian-or-vegan-pregnancy', NULL, NULL, 0, NULL, NULL, '<p>\r\n\r\n</p><p>Whether you’re vegetarian or vegan, you can have a healthy pregnancy with the right planning. As long as you eat a variety of healthy vegetarian foods and include key nutrients that are essential for your baby’s cellular, brain, and organ development, you can get all the nourishment you need without meat, fish, or poultry (and without animal products such as eggs and dairy if you’re vegan).</p><p>A well-designed plant-based diet is loaded with nutrients that support your baby’s development and your health, including plenty of fiber, vitamins, and minerals. Plus, it’s low in saturated fat and cholesterol, which aren’t great for you in excess even if you aren’t expecting.</p><p>Let your healthcare provider know about your diet at your preconception visit or your first prenatal visit. You may want to work with a registered dietitian, especially if you’re following a vegan diet.</p><p>In some cases, you may need to rely on fortified foods and take certain supplements in addition to your prenatal vitamin to make sure you’re getting enough of what you need. Always consult your provider before taking any supplements while pregnant.</p><h3>Protein</h3><p><strong>You’ll need:</strong>&nbsp;About 70 grams per day in the second and third trimesters. (Note: You may need more or less protein depending on your weight, activity level, and health history.)</p><p>Protein is the building block of cells, making it essential for your growing baby. It’s made up of amino acids, including nine essential amino acids that your body can’t make on its own.</p><p>Animal foods have about twice as much protein per serving (about 20 grams) compared to plant foods (10 grams or less). And, unlike animal foods, plant foods don’t contain all nine essential amino acids. That’s why it’s important to get protein from a variety of vegetarian sources, ideally incorporating protein food in every meal.</p><p>Good sources of vegetarian protein include:</p><ul><li>Eggs</li><li>Dairy products</li><li>Legumes, such as chickpeas, kidney beans, and lentils</li><li>Soy foods, including tempeh, tofu, soy milk, and soybeans</li><li>Many nuts, seeds, and nut butter (such as peanuts, almonds, cashews, chia seeds, flaxseed, and walnuts)</li></ul><h3>Iron</h3><p><strong>You’ll need:</strong>&nbsp;27 mg per day</p><p>Iron supports your baby’s physical growth and neurological development. It also improves your blood supply – which is especially important right now, given that blood volume increases between 20 to 100 percent during pregnancy. Iron deficiency is the most common nutritional deficiency during pregnancy.</p><p>Your prenatal vitamin will likely fill some of your iron needs, but you should also eat several servings of a variety of iron-rich foods every day. Good sources of iron include:</p><ul><li>Iron-fortified breakfast cereal</li><li>Beans and other legumes</li><li>Tofu, tempeh, and other soy-based foods</li><li>Whole grain or enriched foods, such as bread and pasta</li><li>Dark leafy greens, such as spinach, kale, and chard</li><li>Dark chocolate</li></ul><p>Plant-based foods contain nonheme iron, which is harder for your body to absorb than the heme iron found in animal foods. That means you’ll want to pay extra attention to how you get your iron. Avoid having tea or coffee with meals, which may make it harder for your body to absorb iron from vegetables. Instead, to help your body better use this mineral, pair an iron-rich food with something rich in vitamin C, such as orange juice, tomato sauce, or broccoli.</p><p>You’ll have a blood test early in your pregnancy to check your iron level. If yours is low, your healthcare provider may recommend that you take an iron supplement.</p><p>Low levels of iron can cause iron deficiency anemia, which may pose risks for you and your baby (like preterm birth). If you’re concerned you might be experiencing anemia symptoms (which include fatigue, weakness, pale or yellow skin, cold hands and feet, and dizziness or lightheadedness, among others), be sure to talk to your doctor.</p><h3>Zinc</h3><p><strong>You’ll need:</strong>&nbsp;11 mg per day</p><p>Zinc supports growth during pregnancy – and you’ll need a steady supply because your body has no way to store it. The best sources of zinc are animal foods since your body isn’t as efficient at absorbing zinc from plant foods. This makes it harder for vegans and vegetarians to get enough zinc from food alone. Focus on eating a variety of plant foods that are rich in zinc and check your prenatal vitamin to make sure it contains zinc.</p><p>Many foods that also provide iron can help you reach your zinc goals. Good sources of zinc include:</p><ul><li>Fortified breakfast cereals</li><li>Beans</li><li>Soy foods</li><li>Whole grains</li><li>Nuts and seeds</li><li>Wheat germ</li><li>Oatmeal</li><li>Milk, yogurt, and cheese</li></ul>\r\n\r\n<br><p></p>', 1, '2024-08-20 04:56:44', '2024-08-20 04:56:44'),
(8, 'Nutritious Fruits You’ll Want to Eat During Pregnancy', NULL, NULL, 'nutritious-fruits-youll-want-to-eat-during-pregnancy', NULL, NULL, 0, NULL, NULL, '<p>\r\n\r\n</p><p>During pregnancy, your little one depends on you to provide the nutrition they need. That’s why it’s time to make sure you’re making the best food choices for baby — and yourself.</p><p>It’s important to eat a well-balanced diet that includes lots of fruits and veggies. These powerful foods have much of what you — and your baby — need to stay healthy.</p><p>Let’s talk about the very best ones you’ll want to keep on hand. And don’t forget: Frozen and canned fruits and vegetables are often just as nutritious as the fresh kind, so don’t feel like you have to get them all straight from the farmer’s market.</p><h2><a target=\"_blank\" rel=\"nofollow\">Benefits of eating fruit during pregnancy</a></h2><p>When you’re pregnant, it’s important to eat nutritious food and avoid empty calories. If you eat mostly junk food during your pregnancy, you may be setting up your baby for a lifelong preference for fat and sugar, according to a 2013 study.</p><p>Fruits and vegetables are filled with nutrients. When you add a variety of them to your diet, you’ll likely get most of the vitamins, minerals, and fiber that you and your baby need.</p><p>Eating fruits and vegetables also helps prevent constipation, a common symptom during pregnancy. Get thee to a produce aisle and you won’t regret it.</p><p>If you’re pregnant, you might be craving something sugary. But try not to make a habit of reaching for a piece of cake or a candy bar to satisfy that sweet tooth. Fruit is the perfect solution.</p><p>It offers the sweetness you crave and the nutrition you need. Enjoy these fruits as part of a healthy pregnancy diet in salads, in smoothies, over yogurt, or as a snack anytime.</p><h3>1. Oranges</h3><p>Oranges help you stay hydrated. They’re also a great source of folate or folic acid. Folate is a B vitamin that’s very important in helping prevent brain and spinal cord defects, also known as neural tube defects.</p><p>The American College of Obstetrics and Gynecology (ACOG) recommends taking 400 micrograms (mcg) of folic acid per day before you start trying for a baby, and then at least 600 mcg per day while pregnant.</p><p>Oranges are a great source trusted Source of vitamin C, too. Vitamin C is an antioxidant that helps prevent cell damage. It also helps your body absorb iron.</p><p>Plus, it doesn’t hurt that these little vitamin bombs are so tasty.</p><h3>2. Mangoes</h3><p>Mangoes are another great source of vitamin C. One cup gives you 100 percentTrusted Source of your recommended daily allowance.</p><p>Mangoes are also high in vitamin A. Vitamin A deficiency at birth is associated with lower immunity and a higher risk of complications, like diarrhea and respiratory infections.</p><p>Although rare, it’s possible to get too much vitamin A, according to a 2019 research review Source. Mangoes are a great addition to your pregnancy diet, but eat them in moderation, along with a variety of other fruits.</p><h3>3. Avocados</h3><p>Avocados have more folate than other fruits. They’re also a great source trusted Source of:</p><ul><li>vitamin C</li><li>vitamin B</li><li>vitamin K</li><li>fiber</li><li>choline</li><li>magnesium</li><li>potassium</li></ul><p>Some women say that avocados help relieve nausea, possibly because of the potassium and magnesium in the fruit.</p><p>Potassium may also help relieve leg cramps, a common pregnancy symptom. Leg cramps are often caused by low potassium and magnesium.</p><p>Choline is important for the development of your baby’s brain and nerves. Choline deficiency may cause neural tube defects and lifetime memory impairment.</p><p>Here are tons of ways to sneak delicious avo into your meals.</p><h3>4. Lemons</h3><p>In one 2014 studyTrusted Source, pregnant people reported some success in using lemons or lemon scent to help relieve pregnancy-related nausea.</p><p><a target=\"_blank\" rel=\"nofollow\" href=\"https://www.healthline.com/nutrition/6-lemon-health-benefits\">Lemons</a>&nbsp;are also high in vitamin C. They help stimulate the digestive system to relieve constipation.</p><p>Consider adding some to your water or tea or using them in this Mediterranean lemon chicken recipe.</p><h3>5. Bananas</h3><p>Bananas are another good source trusted Source of potassium. They also contain vitamin B6, vitamin C, and fiber.</p><p>Constipation is very common during pregnancy. It may be caused by:</p><ul><li>uterine pressure on the intestines</li><li>worry</li><li>anxiety</li><li>a low-fiber diet</li><li>iron in prenatal vitamins</li></ul><p>Adding fiber-rich bananas may help. Research from 2014Trusted Source shows that vitamin B6 may help relieve nausea and vomiting in early pregnancy as well.</p><h3>6. Berries</h3><p>Berries — such as blueberries, raspberries, strawberries, blackberries, and goji berries — are rich in all kinds of goodness, such as:</p><ul><li>carbohydrates</li><li>vitamin C</li><li>fiber</li><li>folate</li></ul><p>They also contain phytonutrients like flavonoids and anthocyanins.</p><p>Carbohydrates give you much-needed energy, and they pass easily through your placenta to nourish your baby.</p><p>It’s important to eat mostly nutrient-dense complex carbohydrates like berries instead of processed, simple carbohydrates like doughnuts, cakes, and cookies.</p><p>Consider whipping up a smoothie with both bananas and berries for a vitamin-packed meal or snack.</p><h3>7. Apples</h3><p>Apples are high in fiber and are a good source trusted Source of vitamin C. Plus, they contain vitamin A, potassium, and pectin. Pectin is a prebiotic that feeds the good bacteria in your gut.</p><p>For the best bang for your nutrient buck, eat the peel — just make sure to rinse it with lots of water first.</p><p>Apples are portable and can be added to many recipes, so make sure to stock up when you’re filling your produce bag.</p>\r\n\r\n<br><p></p>', 1, '2024-08-20 05:05:11', '2024-08-20 05:05:11'),
(9, 'Eat some protein-rich foods every day', NULL, NULL, 'eat-some-protein-rich-foods-every-day', NULL, NULL, 0, NULL, NULL, '<p>Eat some protein-rich foods every day. Sources of protein include:</p><ul><li>beans</li><li>pulses</li><li>fish</li><li>eggs</li><li>meat (but avoid liver)</li><li>poultry</li><li>nuts</li></ul><p>Choose lean meat, remove the skin from poultry, and try not to add extra fat or oil when cooking meat. Read more about healthily eating meat.</p><p>Make sure poultry, burgers, sausages, and whole cuts of meat such as lamb, beef, and pork are cooked very thoroughly until steaming all the way through. Check that there is no pink meat and that juices have no pink or red in them.</p><p>Try to eat 2 portions of fish each week, 1 of which should be oily fish such as salmon, sardines, or mackerel. Find out about the health benefits of fish and shellfish. There are some types of fish you should avoid when you’re pregnant or planning to get pregnant, including sharks, swordfish, and marlin.</p><p>When you’re pregnant, you should avoid having more than 2 portions of oily fish a week, such as salmon, trout, mackerel, and herring, because it can contain pollutants (toxins).</p><p>You should avoid eating some raw or partially cooked eggs, as there is a risk of salmonella.</p><p>Eggs produced under the British Lion Code of Practice are safe for pregnant women to eat raw or partially cooked, as they come from flocks that have been vaccinated against salmonella.</p><p>These eggs have a red lion logo stamped on their shell. Pregnant women can eat these raw or partially cooked (for example, soft-boiled eggs).</p><p>Eggs that have not been produced under the Lion Code are considered less safe, and pregnant women are advised to avoid eating them raw or partially cooked, including in mousse, mayonnaise, and soufflé. These eggs should be cooked until the white and the yolk are hard.</p><p>Find out more about <a target=\"_blank\" rel=\"nofollow\" href=\"https://www.nhs.uk/pregnancy/keeping-well/foods-to-avoid/\">foods to avoid in pregnancy</a>.</p>\r\n\r\n<br><p></p>', 1, '2024-08-20 05:17:09', '2025-02-24 08:30:29'),
(10, 'Eat some protein-rich foods every day', NULL, NULL, 'eat-some-protein-rich-foods-every-day-2', 'This ensures that your database stays consistent, even if an error occurs during processing', 'eat-some-protein-rich-foods-every-day-67bd577a79738-1740461946497.webp', 0, NULL, NULL, '<h3>How it Works:</h3><ol><li><strong>Start Transaction:</strong> <code>DB::beginTransaction()</code></li><li><strong>Execute All Operations:</strong><ul><li>Validate request</li><li>Store blog details</li><li>Save intro image</li><li>Save multiple images</li></ul></li><li><strong>Commit Transaction:</strong> <code>DB::commit()</code></li><li><strong>Rollback on Error:</strong> If any error occurs, <code>DB::rollBack()</code> prevents partial data insertion.</li><li><strong>Error Handling:</strong> Redirects back with an error message.</li></ol>\r\n\r\n<br><p></p>', 1, '2025-02-25 00:09:06', '2025-02-25 00:09:06'),
(11, 'You can modify the \'blog_description\' field to check if it\'s empty and sdbiufdsfdsfsds', NULL, NULL, 'you-can-modify-the-blog-description-field-to-check-if-its-empty-and', 'You can modify the \'blog_description\' field to check if it\'s empty and assign a default value  dfsfssdfdsfsd', 'you-can-modify-the-blog-description-field-to-check-if-it-s-empty-and-67bd5844682d5-1740462148427.webp', 1, 'https://chatgpt.com/', NULL, 'No description available.', 1, '2025-02-25 00:12:28', '2025-02-25 00:41:44'),
(13, 'sdfs', 'sdasdasas', '2025-02-24 18:30:00', 'sdfs', 'sdfdsfsds', NULL, 0, NULL, NULL, 'No description available.', 1, '2025-02-25 06:05:16', '2025-02-25 09:42:55'),
(14, 'sdsfsdfdsfdsfdsfdsfdsff', 'sdfssdfdsfdsfsfdsfs', '2025-02-25 18:30:00', 'sdsf', 'sdfdfsdfdsfdsfdsfdsfsdfsf', NULL, 0, NULL, NULL, 'No description available.', 1, '2025-02-26 08:03:22', '2025-02-26 08:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_images`
--

CREATE TABLE `blogs_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs_images`
--

INSERT INTO `blogs_images` (`id`, `blog_image`, `blog_id`, `created_at`, `updated_at`) VALUES
(5, 'e10146bf-fe35-4d4a-9ed2-8a60b0d2de06_1718595177.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(6, '44992b46-e8eb-4fed-bcf0-7f8a066107cb_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(7, 'e1e51663-dbb9-4582-a619-89e91a02bf6a_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(8, 'b6622386-b822-408a-a979-0d6705cbebf9_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(9, '81203d69-3ffb-46c8-857b-9971fa527afd_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(10, 'c0c1f5ce-6f52-4257-8633-475e73f5fbad_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(11, 'ea889739-0cd1-4ee8-8b19-de2b7f04db70_1718595178.webp', 2, '2024-06-16 22:02:58', '2024-06-16 22:02:58'),
(12, '59b81caf-2e60-4c31-b852-2eb46e5c53f9_1718595178.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(13, 'a0b87702-c1d9-49d8-8b56-9ce540f9a310_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(14, 'cc33b82f-e01b-4561-a180-d1a16dcfa124_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(15, 'a528cbc3-bc49-47eb-8a5e-919cd2a048fd_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(16, '725da829-565d-4283-91c9-a347c24134b7_1718595179.webp', 2, '2024-06-16 22:02:59', '2024-06-16 22:02:59'),
(17, '8a6bb884-cde5-48f0-8abc-523d036c8f42_1718595179.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(18, '3d37c19f-1b20-431a-9843-8e0f9f3762cb_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(19, '55f3f164-aca3-4e39-88ad-1fde6827dae9_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(20, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(21, 'd75d83c8-1afd-405c-8e59-5d6b75a4510c_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(22, '1008ad1c-121a-40c9-ac19-b0aec9f1f1f9_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(23, '7b62ff15-584c-419f-ad6d-184679ac779e_1718595180.webp', 2, '2024-06-16 22:03:00', '2024-06-16 22:03:00'),
(24, 'IMG_8748-Large_1724147662.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(25, 'IMG_8741-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(26, 'DSC04224-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(27, 'IMG_8744-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(28, 'IMG_8751-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(29, 'IMG_8736-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(30, 'IMG_8737-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(31, 'IMG_8740-Large_1724147663.jpeg', 3, '2024-08-20 04:24:23', '2024-08-20 04:24:23'),
(32, 'IMG_8739-Large_1724147663.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(33, 'IMG_8747-Large_1724147664.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(34, 'IMG_8735-Large_1724147664.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(35, 'IMG_8745-Large_1724147664.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(36, 'IMG_8749-Large_1724147664.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(37, 'IMG_8743-Large_1724147664.jpeg', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(38, '7bc80d32-7de6-4870-9648-151731b8d840 (1)_1724147664.webp', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(39, '4bdc14b5-2741-4b4a-9300-65e750bd75e7 (1)_1724147664.webp', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(40, '7b62ff15-584c-419f-ad6d-184679ac779e (1)_1724147664.webp', 3, '2024-08-20 04:24:24', '2024-08-20 04:24:24'),
(41, 'b89a719e-3877-4f82-bd28-1b1ff7e802b9 (1)_1724147664.webp', 3, '2024-08-20 04:24:25', '2024-08-20 04:24:25'),
(42, '725da829-565d-4283-91c9-a347c24134b7 (1)_1724147665.webp', 3, '2024-08-20 04:24:25', '2024-08-20 04:24:25'),
(43, 'baa92cda-888d-454b-97c9-3c0001c315d7 (1)_1724147665.webp', 3, '2024-08-20 04:24:25', '2024-08-20 04:24:25'),
(44, 'DSC04222-Large_1724147708.jpeg', 3, '2024-08-20 04:25:08', '2024-08-20 04:25:08'),
(45, 'DSC04231-Large_1724147708.jpeg', 3, '2024-08-20 04:25:08', '2024-08-20 04:25:08'),
(46, 'DSC04216-Large_1724147708.jpeg', 3, '2024-08-20 04:25:08', '2024-08-20 04:25:08'),
(47, 'DSC04226-Large_1724147708.jpeg', 3, '2024-08-20 04:25:08', '2024-08-20 04:25:08'),
(48, 'DSC04219-Large_1724147708.jpeg', 3, '2024-08-20 04:25:09', '2024-08-20 04:25:09'),
(49, '725da829-565d-4283-91c9-a347c24134b7 (1)_1724147771.webp', 3, '2024-08-20 04:26:11', '2024-08-20 04:26:11'),
(50, 'baa92cda-888d-454b-97c9-3c0001c315d7 (1)_1724147771.webp', 3, '2024-08-20 04:26:11', '2024-08-20 04:26:11'),
(51, 'e10146bf-fe35-4d4a-9ed2-8a60b0d2de06 (1)_1724147771.webp', 3, '2024-08-20 04:26:11', '2024-08-20 04:26:11'),
(52, '8a6bb884-cde5-48f0-8abc-523d036c8f42 (1)_1724147771.webp', 3, '2024-08-20 04:26:11', '2024-08-20 04:26:11'),
(53, 'c0c1f5ce-6f52-4257-8633-475e73f5fbad_1724147771.webp', 3, '2024-08-20 04:26:12', '2024-08-20 04:26:12'),
(54, 'b6622386-b822-408a-a979-0d6705cbebf9_1724147772.webp', 3, '2024-08-20 04:26:12', '2024-08-20 04:26:12'),
(55, '59b81caf-2e60-4c31-b852-2eb46e5c53f9_1724147772.webp', 3, '2024-08-20 04:26:12', '2024-08-20 04:26:12'),
(56, 'b3459e73-cb67-44bf-9c7f-95afa89980bc_1724147772.webp', 3, '2024-08-20 04:26:12', '2024-08-20 04:26:12'),
(57, 'a528cbc3-bc49-47eb-8a5e-919cd2a048fd_1724147772.webp', 3, '2024-08-20 04:26:12', '2024-08-20 04:26:12'),
(58, '44992b46-e8eb-4fed-bcf0-7f8a066107cb_1724147772.webp', 3, '2024-08-20 04:26:13', '2024-08-20 04:26:13'),
(59, 'd75d83c8-1afd-405c-8e59-5d6b75a4510c_1724147773.webp', 3, '2024-08-20 04:26:13', '2024-08-20 04:26:13'),
(60, '1008ad1c-121a-40c9-ac19-b0aec9f1f1f9_1724147773.webp', 3, '2024-08-20 04:26:13', '2024-08-20 04:26:13'),
(61, 'cc33b82f-e01b-4561-a180-d1a16dcfa124_1724147773.webp', 3, '2024-08-20 04:26:13', '2024-08-20 04:26:13'),
(62, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f_1724147773.webp', 3, '2024-08-20 04:26:13', '2024-08-20 04:26:13'),
(63, 'a153b1ab-97d7-4199-bdbd-81ec6882226b_1724147773.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(64, '0448a9d4-ca7e-4d16-9155-532a4d22e24d-1_1724147774.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(65, 'b17e2c88-aee2-4702-8312-340b42e8b91e_1724147774.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(66, '7a233749-7b4e-4af3-b6e7-7cef0a414d33_1724147774.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(67, 'fda2493b-f016-4df3-a667-bf0fabea7cae_1724147774.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(68, '9acde60d-3cb3-449f-8a9b-b3707b88e644_1724147774.webp', 3, '2024-08-20 04:26:14', '2024-08-20 04:26:14'),
(69, '9f014be2-0cd8-48fd-aa21-8e6bccceaab8 (1)_1724148335.webp', 4, '2024-08-20 04:35:36', '2024-08-20 04:35:36'),
(70, 'fff69622-35a5-493b-b277-b4632ebf9152 (1)_1724148336.webp', 4, '2024-08-20 04:35:36', '2024-08-20 04:35:36'),
(71, 'f9a78696-417a-489d-98b9-23c4e25284eb (1)_1724148336.webp', 4, '2024-08-20 04:35:36', '2024-08-20 04:35:36'),
(72, '81203d69-3ffb-46c8-857b-9971fa527afd (1)_1724148336.webp', 4, '2024-08-20 04:35:36', '2024-08-20 04:35:36'),
(73, '12ebd89a-b46d-464a-b693-666b02829e5d (1)_1724148336.webp', 4, '2024-08-20 04:35:36', '2024-08-20 04:35:36'),
(74, '80f35f66-8e7b-477f-aa04-45d86e852189 (1)_1724148336.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(75, 'd75d83c8-1afd-405c-8e59-5d6b75a4510c (1)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(76, '725da829-565d-4283-91c9-a347c24134b7 (2)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(77, '0448a9d4-ca7e-4d16-9155-532a4d22e24d (1)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(78, '44992b46-e8eb-4fed-bcf0-7f8a066107cb (1)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(79, '55f3f164-aca3-4e39-88ad-1fde6827dae9 (1)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(80, '9acde60d-3cb3-449f-8a9b-b3707b88e644 (1)_1724148337.webp', 4, '2024-08-20 04:35:37', '2024-08-20 04:35:37'),
(81, '59b81caf-2e60-4c31-b852-2eb46e5c53f9 (1)_1724148337.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(82, 'ea889739-0cd1-4ee8-8b19-de2b7f04db70 (1)_1724148338.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(83, 'b17e2c88-aee2-4702-8312-340b42e8b91e (1)_1724148338.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(84, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f (1)_1724148338.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(85, '0448a9d4-ca7e-4d16-9155-532a4d22e24d-1 (1)_1724148338.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(86, '7bc80d32-7de6-4870-9648-151731b8d840 (2)_1724148338.webp', 4, '2024-08-20 04:35:38', '2024-08-20 04:35:38'),
(87, '715c54c9-1d27-44f9-8778-aa0824a7bf3a (1)_1724148338.webp', 4, '2024-08-20 04:35:39', '2024-08-20 04:35:39'),
(88, '57e60c72-88d4-4622-9bb9-f88bfa3ef8ad (1)_1724148339.webp', 4, '2024-08-20 04:35:39', '2024-08-20 04:35:39'),
(89, '7bc80d32-7de6-4870-9648-151731b8d840 (2)_1724148485.webp', 4, '2024-08-20 04:38:05', '2024-08-20 04:38:05'),
(90, '715c54c9-1d27-44f9-8778-aa0824a7bf3a (1)_1724148485.webp', 4, '2024-08-20 04:38:05', '2024-08-20 04:38:05'),
(91, '57e60c72-88d4-4622-9bb9-f88bfa3ef8ad (1)_1724148485.webp', 4, '2024-08-20 04:38:05', '2024-08-20 04:38:05'),
(92, '8a6bb884-cde5-48f0-8abc-523d036c8f42 (2)_1724148485.webp', 4, '2024-08-20 04:38:05', '2024-08-20 04:38:05'),
(93, 'istockphoto-626414164-612x612_1724148933.jpg', 5, '2024-08-20 04:45:33', '2024-08-20 04:45:33'),
(94, 'KIMS-Cuddles-Dr.-Shilpi-Reddy-event_1724149315.webp', 6, '2024-08-20 04:51:55', '2024-08-20 04:51:55'),
(95, 'istockphoto-1434547082-612x612_1724149604.jpg', 7, '2024-08-20 04:56:45', '2024-08-20 04:56:45'),
(96, 'istockphoto-124014058-612x612_1724150111.jpg', 8, '2024-08-20 05:05:11', '2024-08-20 05:05:11'),
(97, 'istockphoto-1180923865-612x612_1724150829.jpg', 9, '2024-08-20 05:17:10', '2024-08-20 05:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_in_logos`
--

CREATE TABLE `featured_in_logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_in_logos`
--

INSERT INTO `featured_in_logos` (`id`, `img_title`, `img_file`, `user_id`, `created_at`, `updated_at`) VALUES
(10, NULL, 'Frame-53-1_1718360567.webp', 1, '2024-06-14 04:52:47', '2024-06-14 04:52:47'),
(11, NULL, 'Frame-52-2_1718360567.webp', 1, '2024-06-14 04:52:47', '2024-06-14 04:52:47'),
(12, NULL, 'Frame-48 (1)_1718360567.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(13, NULL, 'Frame-43-2 (1)_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(14, NULL, 'Frame-50_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(15, NULL, 'Frame-52_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(16, NULL, 'Frame-58-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(17, NULL, 'Frame-58_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(18, NULL, 'Frame-58-2_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(19, NULL, 'image-8_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(20, NULL, 'andhra-prabha_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(21, NULL, 'Frame-52-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(22, NULL, 'Frame-56_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(23, NULL, 'Frame-57_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(24, NULL, 'Frame-47_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(25, NULL, 'Frame-43-2_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(26, NULL, 'Frame-48_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(27, NULL, 'Frame-45-1_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48'),
(28, NULL, 'Frame-49_1718360568.webp', 1, '2024-06-14 04:52:48', '2024-06-14 04:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `foundation_categories`
--

CREATE TABLE `foundation_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foundation_categories`
--

INSERT INTO `foundation_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Women health conclave', 1, '2025-02-25 04:06:51', '2025-02-25 04:06:51'),
(3, 'Baby shower', 1, '2025-02-25 04:10:04', '2025-02-25 04:10:04'),
(4, 'Food distribution to needy people', 1, '2025-02-25 04:11:18', '2025-02-25 04:11:18'),
(5, 'Books distribution to orphans', 1, '2025-02-25 04:13:56', '2025-02-25 04:13:56'),
(6, 'Blanket distribution in old age homes', 1, '2025-02-25 04:15:34', '2025-02-25 04:15:34'),
(7, 'Women\'s wings (RERF) Brahma Kumaris', 1, '2025-02-25 04:15:56', '2025-02-25 04:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `foundation_images`
--

CREATE TABLE `foundation_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `foundation_categories_id` int(10) UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `foundation_images`
--

INSERT INTO `foundation_images` (`id`, `foundation_categories_id`, `image_path`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, 7, 'dr-shilpi-reddy-hyd-women-s-wings-rerf-brahma-kumaris-67bfedf664d9f-1740631542413.webp', '3', '2025-02-26 23:15:42', '2025-02-27 01:28:54'),
(3, 7, 'dr-shilpi-reddy-hyd-women-s-wings-rerf-brahma-kumaris-67bfedf696dd4-1740631542618.webp', '2', '2025-02-26 23:15:42', '2025-02-27 01:28:54'),
(4, 7, 'dr-shilpi-reddy-hyd-women-s-wings-rerf-brahma-kumaris-67bff0c042e15-1740632256274.webp', '1', '2025-02-26 23:27:36', '2025-02-27 01:28:54'),
(5, 7, 'dr-shilpi-reddy-hyd-women-s-wings-rerf-brahma-kumaris-67bff15899976-1740632408629.webp', '4', '2025-02-26 23:30:09', '2025-02-27 01:28:54');

-- --------------------------------------------------------

--
-- Table structure for table `ibu_care`
--

CREATE TABLE `ibu_care` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ibu_care`
--

INSERT INTO `ibu_care` (`id`, `title`, `slug`, `img_file`, `description`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'Obstetrics & Specialist Consultations', 'obstetrics-specialist-consultations', 'Obstetrics & Specialist Consultations_1726291165.jpg', '<ul>\r\n<li><strong>Obstetrician :</strong>Specialized\r\ncare during pregnancy and\r\nchildbirth\r\n</li>\r\n<li><strong>Specialist:</strong>Access to a\r\nrange of medical specialists\r\n– Endocrinologist, Internal\r\nMedicine, Dermatologist,\r\netc. \r\n</li>\r\n</ul>', 1, '2024-08-21 05:40:33', '2024-09-13 23:49:25'),
(6, 'Time Bound Lab Diagnostics', 'time-bound-lab-diagnostics', 'Time Bound Lab Diagnostics_1726291155.jpg', '<p>Full range of lab services as per Schedule/Trimester</p>', 1, '2024-08-21 23:48:47', '2024-09-13 23:49:15'),
(7, 'Nutrition support', 'nutrition-support', 'Nutrition support_1726291143.jpg', '<ul>\r\n<li>Customized diet plans for each trimester.</li>\r\n<li>Nutritional supplements to support fetal development.</li>\r\n<li>Tips for maintaining a healthy diet during pregnancy.</li>\r\n</ul>', 1, '2024-08-21 23:50:56', '2024-09-13 23:49:03'),
(8, 'Convenient Food Delivery', 'convenient-food-delivery', 'Convenient Food Delivery_1726291129.jpg', '<ul>\r\n<li>Nutritious food as per the month of pregnancy</li>\r\n<li>Delivery right to your doorstep</li>\r\n</ul>', 1, '2024-08-21 23:54:53', '2024-09-13 23:48:49'),
(9, 'Prenatal Yoga', 'prenatal-yoga', 'Prenatal Yoga_1726291116.jpg', '<ul>\r\n<li>Prenatal and postnatal yoga</li>\r\n<li>Stress relief and relaxation</li>\r\n<li>Certified yoga instructors</li>\r\n\r\n</ul>', 1, '2024-08-21 23:58:08', '2024-09-13 23:48:36'),
(10, 'Mental Health Counselling', 'mental-health-counselling', 'Mental Health Counselling_1726291082.jpg', '<ul>\r\n<li>Professional mental health support</li>\r\n<li>Counselling for anxiety, depression, and stress</li>\r\n<li>Holistic approach to mental well being during and after pregnancy</li>\r\n</ul>', 1, '2024-08-22 00:00:16', '2024-09-13 23:48:02'),
(11, 'Normal Delivery and Lactation Support', 'normal-delivery-and-lactation-support', 'Normal Delivery and Lactation Support_1726291069.jpg', '<ul>\r\n<li>Normal delivery promotes quicker recovery, stronger bonding, and fewer complications.</li>\r\n\r\n</ul>', 1, '2024-08-22 00:01:31', '2024-09-13 23:47:49'),
(12, 'Stem Cell Bank', 'stem-cell-bank', 'Stem Cell Bank_1726291055.jpg', '<ul>\r\n<li>Safe and secure storage of stem cells</li>\r\n<li>Future medical use and research</li>\r\n<li>Cutting-edge technology</li>\r\n</ul>', 1, '2024-08-22 00:02:43', '2024-09-13 23:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `media_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_order` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `title`, `media_image`, `sort_order`, `user_id`, `created_at`, `updated_at`) VALUES
(2, NULL, 'WhatsApp-Image-2022-09-05-at-7.39.41-PM-1_1718523991.webp', '47', 1, '2024-06-16 02:16:31', '2025-02-27 02:06:45'),
(3, NULL, '18850ab3-6c34-4d7a-966f-5ad233c4c1ee-1_1718523991.webp', '17', 1, '2024-06-16 02:16:32', '2025-02-27 02:07:44'),
(4, NULL, 'IMG_8605-min-970x647-1_1718523992.webp', '1', 1, '2024-06-16 02:16:32', '2025-02-27 02:03:51'),
(5, NULL, 'FB_IMG_1532337106815-min_1718523992.webp', '46', 1, '2024-06-16 02:16:32', '2025-02-27 02:03:51'),
(6, NULL, 'image-53-6_1718523992.webp', '13', 1, '2024-06-16 02:16:33', '2025-02-27 02:03:51'),
(7, NULL, '566f952c-1921-4e05-89be-f6e2187a22b0_1718523993.webp', '50', 1, '2024-06-16 02:16:33', '2025-02-27 02:06:27'),
(8, NULL, 'image-53-8_1718523993.webp', '60', 1, '2024-06-16 02:16:33', '2025-02-27 02:05:58'),
(10, NULL, 'IMG_20180901_103955-min-1-970x728-1 (1)_1718523993.webp', '51', 1, '2024-06-16 02:16:34', '2025-02-27 02:03:51'),
(11, NULL, 'IMG_7831-768x512-1_1718523994.webp', '45', 1, '2024-06-16 02:16:34', '2025-02-27 02:03:51'),
(13, NULL, '1a7c32bc-823c-4e8c-9fbc-12fba33f8f30_1718523994.webp', '5', 1, '2024-06-16 02:16:34', '2025-02-27 02:03:51'),
(14, NULL, 'image-53-1_1718523994.webp', '38', 1, '2024-06-16 02:16:35', '2025-02-27 02:03:51'),
(15, NULL, 'a82d4c99-af16-468f-99db-1e124889ebd6_1718523995.webp', '7', 1, '2024-06-16 02:16:35', '2025-02-27 02:03:51'),
(16, NULL, 'IMG_0577-768x512-1_1718523995.webp', '33', 1, '2024-06-16 02:16:35', '2025-02-27 02:03:51'),
(17, NULL, 'IMG_0581-768x512-1_1718523995.webp', '3', 1, '2024-06-16 02:16:35', '2025-02-27 02:07:44'),
(19, 'Image Title 1', 'd13c550f-7ac6-4663-8228-cd79e590c3be_1718523995.webp', '9', 1, '2024-06-16 02:16:36', '2025-02-27 02:03:51'),
(20, NULL, '5036b3c6-1ad0-4e23-bae9-fd022ce737f8_1724478072.webp', '52', 1, '2024-08-24 00:11:12', '2025-02-27 02:03:51'),
(21, NULL, '419a4c6a-8c46-4cd7-887c-a74fb8d8d80a_1724478072.webp', '49', 1, '2024-08-24 00:11:12', '2025-02-27 02:07:04'),
(22, NULL, '1dce77b4-02f5-4c34-9548-7924e753e0c2_1724478072.webp', '39', 1, '2024-08-24 00:11:12', '2025-02-27 02:03:51'),
(23, NULL, '18850ab3-6c34-4d7a-966f-5ad233c4c1ee-1_1724478072.webp', '55', 1, '2024-08-24 00:11:12', '2025-02-27 02:07:51'),
(24, NULL, 'f4ebfa42-6910-4da0-bb4c-7ed1b2ec11fb_1724478072.webp', '54', 1, '2024-08-24 00:11:13', '2025-02-27 02:03:51'),
(25, NULL, '02ca7098-13b5-4df1-8479-4b47d5a93eae_1724484320.webp', '48', 1, '2024-08-24 01:55:20', '2025-02-27 02:03:51'),
(26, NULL, 'DSC_6491-768x509-1_1724484320.webp', '28', 1, '2024-08-24 01:55:20', '2025-02-27 02:03:51'),
(27, NULL, 'c8f09272-ec93-4890-8e10-b79466dd182d_1724484320.webp', '44', 1, '2024-08-24 01:55:20', '2025-02-27 02:06:20'),
(28, NULL, '4f5fe5d6-f81d-4b6d-9a47-dcecaad9ace0_1724484320.webp', '11', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(29, NULL, 'ff3ebde9-e437-4e8a-b01c-16d3bdfacfd1_1724484321.webp', '3', 1, '2024-08-24 01:55:21', '2025-02-27 02:07:43'),
(30, NULL, 'e73672a4-6f40-4a85-b32e-dc46a6563cb5_1724484321.webp', '56', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(31, NULL, 'IMG_7852-768x512-1_1724484321.webp', '34', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(32, NULL, 'd00dea21-0eba-4f8c-8c7b-d0a29c1a36c1_1724484321.webp', '44', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(33, NULL, '474d2043-a533-4976-953c-55fd501538ed_1724484321.webp', '42', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(34, NULL, 'image-53-4_1724484321.webp', '3', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(35, NULL, '76bc0feb-5d68-490d-ad95-ecab1ec07c54_1724484321.webp', '21', 1, '2024-08-24 01:55:21', '2025-02-27 02:07:00'),
(36, NULL, 'b06b0236-3ae2-4297-a0b4-0b6899589cfc_1724484321.webp', '22', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(37, NULL, '566f952c-1921-4e05-89be-f6e2187a22b0_1724484321.webp', '6', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(38, NULL, '24281eb3-f76a-4bb4-897b-41d9605f9a8e_1724484321.jpeg', '29', 1, '2024-08-24 01:55:21', '2025-02-27 02:07:41'),
(39, NULL, 'IMG-20210105-WA0012-768x432-2_1724484321.webp', '41', 1, '2024-08-24 01:55:21', '2025-02-27 02:03:51'),
(41, NULL, 'a2eff8ca-a172-400b-8ac6-584b11ee8bd3-1_1724484322.webp', '25', 1, '2024-08-24 01:55:22', '2025-02-27 02:03:51'),
(42, NULL, 'WhatsApp-Image-2022-09-05-at-7.39.41-PM_1724486538.webp', '45', 1, '2024-08-24 02:32:18', '2025-02-27 02:06:11'),
(43, NULL, 'image-53-7_1724486538.webp', '47', 1, '2024-08-24 02:32:18', '2025-02-27 02:03:51'),
(44, NULL, 'IMG_0604-768x512-1_1724486538.webp', '27', 1, '2024-08-24 02:32:18', '2025-02-27 02:06:20'),
(45, NULL, 'IMG_5881-768x512-1_1724486538.webp', '42', 1, '2024-08-24 02:32:18', '2025-02-27 02:06:11'),
(46, NULL, '7d017196-3a3d-40d2-bc50-75a92d135299_1724486538.webp', '43', 1, '2024-08-24 02:32:18', '2025-02-27 02:03:51'),
(47, NULL, 'IMG_0600-768x512-1_1724486538.webp', '2', 1, '2024-08-24 02:32:19', '2025-02-27 02:06:45'),
(48, NULL, 'IMG_20180901_104037-min-970x728-1_1724486539.webp', '53', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(49, NULL, 'IMG_5880-768x512-1_1724486539.webp', '21', 1, '2024-08-24 02:32:19', '2025-02-27 02:07:04'),
(50, NULL, 'IMG_5138-min-768x512-1_1724486539.webp', '7', 1, '2024-08-24 02:32:19', '2025-02-27 02:06:27'),
(51, NULL, 'IMG_5137-min-768x512-1_1724486539.webp', '8', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(52, NULL, 'a82d4c99-af16-468f-99db-1e124889ebd6_1724486539.webp', '55', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(53, NULL, '1a7c32bc-823c-4e8c-9fbc-12fba33f8f30_1724486539.webp', '36', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(54, NULL, 'IMG_0577-768x512-1_1724486539.webp', '27', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(55, NULL, 'IMG_20180818_110134-min-970x728-1_1724486539.webp', '23', 1, '2024-08-24 02:32:19', '2025-02-27 02:07:51'),
(56, NULL, 'WhatsApp-Image-2022-09-05-at-7.39.38-PM-1_1724486539.webp', '40', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(57, NULL, '1b0f29eb-636c-4c14-a915-e80841c81228_1724486539.webp', '37', 1, '2024-08-24 02:32:19', '2025-02-27 02:03:51'),
(58, NULL, 'image-53-9_1724486539.webp', '49', 1, '2024-08-24 02:32:20', '2025-02-27 02:03:51'),
(59, NULL, 'IMG_5133-min-768x512-1_1724486540.webp', '50', 1, '2024-08-24 02:32:20', '2025-02-27 02:03:51'),
(60, NULL, '80e47bbb-9146-4e83-a884-e496058269c7_1724486540.webp', '8', 1, '2024-08-24 02:32:20', '2025-02-27 02:05:58'),
(61, NULL, 'IMG_0584-768x512-1_1724486540.webp', '26', 1, '2024-08-24 02:32:20', '2025-02-27 02:03:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_03_060632_create_featured_in_logos_table', 1),
(6, '2024_06_04_095209_create_testimonials_table', 2),
(7, '2024_06_05_063729_create_our_works_table', 3),
(8, '2024_06_05_064154_create_our_works_image_table', 4),
(9, '2024_06_16_065513_create_media_table', 5),
(10, '2024_06_16_101709_create_blogs_table', 6),
(11, '2024_06_16_102203_create_blogs_images_table', 7),
(12, '2024_06_17_104152_create_ibu_care_table', 8),
(13, '2024_07_01_103237_create_permission_tables', 9),
(14, '2024_07_19_071049_create_visitors_table', 10),
(15, '2025_02_25_045424_add_fields_to_blogs_table', 10),
(16, '2025_02_25_080646_create_foundation_categories_table', 11),
(17, '2025_02_25_080700_create_foundation_images_table', 11),
(19, '2025_02_25_112553_add_new_fields_to_blogs_table', 12),
(20, '2025_02_27_061018_add_sort_order_to_media_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `our_works`
--

CREATE TABLE `our_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `our_work_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works`
--

INSERT INTO `our_works` (`id`, `heading_name`, `slug`, `our_work_content`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Women\'s wings (RERF) Brahma Kumaris', 'womens-wings-rerf-brahma-kumaris', '<p>\r\nExperience a month brimming with inspiration and transformation! From July 30th to September 16th, 2023, witness a captivating journey dedicated to fostering harmonious families, empowering children, and uplifting women. Our focus encompasses promoting familial peace, happiness, and safety, while providing practical solutions to children’s behavioral challenges. We’re dedicated to advancing women’s education, health, and security, all while raising awareness about spirituality and the profound effects of meditation. Engage with captivating talks, immersive exhibitions, cultural presentations, audio-visual displays, and heartwarming competitions. This event, hosted by the Women’s Wing (RERF) Brahma Kumaris, Telangana, culminates in a grand Valedictory and Expo on September 16th, 2023, at Shanti Sarovar, Gachibowli, Hyderabad.\r\n\r\n</p><p>\r\n\r\nWomen and the family system form the foundation of our society. Their profound impact in shaping our society and shaping our future is immeasurable, driven by their nurturing love, inspiring guidance and boundless energy. Serving as the bedrock of our community, women skillfully manage and care for their families and instill valuable qualities and behaviors in their children. Families bring comfort, stability and mutual support. Women are crucial in building resilient and cohesive family units. Let us find inner peace, desirable values ​​and spiritual growth, and let us value and recognize family. Sincere thanks for organizing this program all over Telangana to spread this spiritual message.\r\n\r\n</p>', 1, '2024-06-15 00:49:50', '2024-06-15 04:12:56'),
(10, 'Womens Health Conclave', 'womens-health-conclave', '<p>\r\nHealth Conclave 2023 for women, aimed to empower and unite, creating a healthier and stronger future, together. \r\n</p>', 1, '2024-08-24 00:16:44', '2024-08-24 00:16:44'),
(11, 'Cuddles Baby Shower', 'cuddles-baby-shower', '<p>\r\n\r\nJoyful moments and sweet beginnings await as we celebrate the arrival of our little bundle of joy! KIMS Cuddles heartwarming baby shower filled with love, laughter, and anticipation.\r\n\r\n<br></p>', 1, '2024-08-24 02:09:40', '2024-08-24 02:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `our_works_image`
--

CREATE TABLE `our_works_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `our_work_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `our_work_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_works_image`
--

INSERT INTO `our_works_image` (`id`, `our_work_image`, `our_work_id`, `created_at`, `updated_at`) VALUES
(2, '9f014be2-0cd8-48fd-aa21-8e6bccceaab8_1718432390.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(3, 'f9a78696-417a-489d-98b9-23c4e25284eb_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(4, 'bff8140e-ffd3-4c3e-a21b-3398b5a2f80f_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(5, '1008ad1c-121a-40c9-ac19-b0aec9f1f1f9_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(6, '7b62ff15-584c-419f-ad6d-184679ac779e_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(7, '715c54c9-1d27-44f9-8778-aa0824a7bf3a_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(8, 'c0c1f5ce-6f52-4257-8633-475e73f5fbad_1718432391.webp', 7, '2024-06-15 00:49:51', '2024-06-15 00:49:51'),
(9, 'e1e51663-dbb9-4582-a619-89e91a02bf6a_1718432391.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(11, '7bc80d32-7de6-4870-9648-151731b8d840_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(12, '81203d69-3ffb-46c8-857b-9971fa527afd_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(13, 'b6622386-b822-408a-a979-0d6705cbebf9_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(14, '0448a9d4-ca7e-4d16-9155-532a4d22e24d-1_1718432392.webp', 7, '2024-06-15 00:49:52', '2024-06-15 00:49:52'),
(15, '23345484-b69f-46dd-9d92-a47a1a489504_1718432392.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(16, 'a0b87702-c1d9-49d8-8b56-9ce540f9a310_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(17, 'ea889739-0cd1-4ee8-8b19-de2b7f04db70_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(19, '57e60c72-88d4-4622-9bb9-f88bfa3ef8ad_1718432393.webp', 7, '2024-06-15 00:49:53', '2024-06-15 00:49:53'),
(24, 'MG_5814-scaled_1724478404.webp', 10, '2024-08-24 00:16:45', '2024-08-24 00:16:45'),
(25, 'MG_5983-scaled_1724478405.webp', 10, '2024-08-24 00:16:45', '2024-08-24 00:16:45'),
(26, 'MG_5889-scaled_1724478405.webp', 10, '2024-08-24 00:16:46', '2024-08-24 00:16:46'),
(27, 'MG_5894-scaled_1724478406.webp', 10, '2024-08-24 00:16:46', '2024-08-24 00:16:46'),
(28, 'MG_6050-scaled_1724478406.webp', 10, '2024-08-24 00:16:47', '2024-08-24 00:16:47'),
(29, 'MG_5782-scaled_1724478407.webp', 10, '2024-08-24 00:16:48', '2024-08-24 00:16:48'),
(30, 'MG_6054-scaled_1724478408.webp', 10, '2024-08-24 00:16:48', '2024-08-24 00:16:48'),
(31, 'MG_5835-scaled_1724478408.webp', 10, '2024-08-24 00:16:49', '2024-08-24 00:16:49'),
(32, 'MG_5863-scaled_1724478409.webp', 10, '2024-08-24 00:16:49', '2024-08-24 00:16:49'),
(33, 'MG_6008-scaled_1724478409.webp', 10, '2024-08-24 00:16:50', '2024-08-24 00:16:50'),
(34, 'MG_5870-scaled_1724478410.webp', 10, '2024-08-24 00:16:50', '2024-08-24 00:16:50'),
(35, 'MG_5765-scaled_1724478410.webp', 10, '2024-08-24 00:16:51', '2024-08-24 00:16:51'),
(36, 'MG_5822-scaled_1724478411.webp', 10, '2024-08-24 00:16:51', '2024-08-24 00:16:51'),
(37, 'MG_5733-scaled_1724478411.webp', 10, '2024-08-24 00:16:52', '2024-08-24 00:16:52'),
(38, 'MG_5825-scaled_1724478412.webp', 10, '2024-08-24 00:16:52', '2024-08-24 00:16:52'),
(39, 'MG_5780-scaled_1724478412.webp', 10, '2024-08-24 00:16:53', '2024-08-24 00:16:53'),
(40, 'MG_5933-scaled_1724478413.webp', 10, '2024-08-24 00:16:53', '2024-08-24 00:16:53'),
(42, 'MG_4097-scaled_1724485180.webp', 11, '2024-08-24 02:09:41', '2024-08-24 02:09:41'),
(43, 'MG_4096-scaled_1724485181.webp', 11, '2024-08-24 02:09:41', '2024-08-24 02:09:41'),
(44, 'MG_4125-scaled-e1686808943264_1724485181.webp', 11, '2024-08-24 02:09:42', '2024-08-24 02:09:42'),
(45, 'MG_4132-scaled-e1686808933405_1724485182.webp', 11, '2024-08-24 02:09:42', '2024-08-24 02:09:42'),
(46, 'MG_4128-scaled-e1686808923880_1724485182.webp', 11, '2024-08-24 02:09:42', '2024-08-24 02:09:42'),
(47, 'MG_4147-scaled_1724485182.webp', 11, '2024-08-24 02:09:43', '2024-08-24 02:09:43'),
(48, 'MG_4158-scaled_1724485183.webp', 11, '2024-08-24 02:09:43', '2024-08-24 02:09:43'),
(49, 'MG_4181-scaled-e1686808910537_1724485183.webp', 11, '2024-08-24 02:09:44', '2024-08-24 02:09:44'),
(50, 'MG_4185-scaled-e1686808899792_1724485184.webp', 11, '2024-08-24 02:09:44', '2024-08-24 02:09:44'),
(51, 'MG_4187-scaled-e1686808882440_1724485184.webp', 11, '2024-08-24 02:09:44', '2024-08-24 02:09:44'),
(52, 'MG_4209-scaled-e1686808871954_1724485184.webp', 11, '2024-08-24 02:09:44', '2024-08-24 02:09:44'),
(53, 'MG_4205-scaled-e1686808861288_1724485184.webp', 11, '2024-08-24 02:09:45', '2024-08-24 02:09:45'),
(54, 'MG_4200-scaled-e1686808853163_1724485185.webp', 11, '2024-08-24 02:09:45', '2024-08-24 02:09:45'),
(55, 'MG_4196-scaled-e1686808841971_1724485185.webp', 11, '2024-08-24 02:09:45', '2024-08-24 02:09:45'),
(56, 'MG_4192-scaled-e1686808832752_1724485185.webp', 11, '2024-08-24 02:09:46', '2024-08-24 02:09:46'),
(57, 'MG_4214-scaled-e1686808821496_1724485186.webp', 11, '2024-08-24 02:09:46', '2024-08-24 02:09:46'),
(58, 'MG_4216-scaled-e1686808812323_1724485186.webp', 11, '2024-08-24 02:09:46', '2024-08-24 02:09:46'),
(59, 'MG_4220-scaled-e1686808802923_1724485186.webp', 11, '2024-08-24 02:09:47', '2024-08-24 02:09:47'),
(60, 'MG_4227-scaled-e1686808791156_1724485187.webp', 11, '2024-08-24 02:09:47', '2024-08-24 02:09:47'),
(61, 'MG_4235-scaled-e1686808780879_1724485187.webp', 11, '2024-08-24 02:09:47', '2024-08-24 02:09:47'),
(62, 'MG_4047-scaled_1724485454.webp', 11, '2024-08-24 02:14:14', '2024-08-24 02:14:14'),
(63, 'MG_4050-scaled_1724485454.webp', 11, '2024-08-24 02:14:15', '2024-08-24 02:14:15'),
(64, 'MG_4062-scaled_1724485455.webp', 11, '2024-08-24 02:14:15', '2024-08-24 02:14:15'),
(65, 'MG_4076-scaled_1724485455.webp', 11, '2024-08-24 02:14:15', '2024-08-24 02:14:15'),
(66, 'MG_4079-scaled_1724485455.webp', 11, '2024-08-24 02:14:16', '2024-08-24 02:14:16'),
(67, 'MG_4084-scaled_1724485456.webp', 11, '2024-08-24 02:14:16', '2024-08-24 02:14:16'),
(68, 'MG_4086-scaled_1724485456.webp', 11, '2024-08-24 02:14:16', '2024-08-24 02:14:16'),
(69, 'MG_4087-scaled_1724485456.webp', 11, '2024-08-24 02:14:17', '2024-08-24 02:14:17'),
(70, 'MG_4090-scaled_1724485457.webp', 11, '2024-08-24 02:14:17', '2024-08-24 02:14:17'),
(71, 'MG_4119-scaled_1724485457.webp', 11, '2024-08-24 02:14:18', '2024-08-24 02:14:18'),
(72, 'MG_4107-scaled_1724485458.webp', 11, '2024-08-24 02:14:18', '2024-08-24 02:14:18'),
(73, 'MG_4101-scaled_1724485458.webp', 11, '2024-08-24 02:14:18', '2024-08-24 02:14:18'),
(74, 'MG_3977-1-scaled_1724485565.webp', 11, '2024-08-24 02:16:06', '2024-08-24 02:16:06'),
(75, 'MG_3978-1-scaled_1724485566.webp', 11, '2024-08-24 02:16:06', '2024-08-24 02:16:06'),
(76, 'MG_3980-1-scaled_1724485566.webp', 11, '2024-08-24 02:16:07', '2024-08-24 02:16:07'),
(77, 'MG_4025-scaled_1724485567.webp', 11, '2024-08-24 02:16:07', '2024-08-24 02:16:07'),
(78, 'MG_4024-scaled_1724485567.webp', 11, '2024-08-24 02:16:08', '2024-08-24 02:16:08'),
(79, 'MG_4017-scaled_1724485568.webp', 11, '2024-08-24 02:16:08', '2024-08-24 02:16:08'),
(80, 'MG_4007-scaled_1724485568.webp', 11, '2024-08-24 02:16:09', '2024-08-24 02:16:09'),
(81, 'MG_4004-scaled_1724485569.webp', 11, '2024-08-24 02:16:09', '2024-08-24 02:16:09'),
(82, 'MG_4043-scaled_1724485569.webp', 11, '2024-08-24 02:16:09', '2024-08-24 02:16:09'),
(83, 'MG_4041-scaled_1724485569.webp', 11, '2024-08-24 02:16:10', '2024-08-24 02:16:10'),
(84, 'MG_4032-scaled_1724485570.webp', 11, '2024-08-24 02:16:10', '2024-08-24 02:16:10'),
(85, 'MG_4028-scaled_1724485570.webp', 11, '2024-08-24 02:16:11', '2024-08-24 02:16:11'),
(86, 'MG_4027-scaled_1724485571.webp', 11, '2024-08-24 02:16:11', '2024-08-24 02:16:11'),
(87, 'MG_4026-scaled_1724485571.webp', 11, '2024-08-24 02:16:12', '2024-08-24 02:16:12'),
(88, 'MG_3977-1-scaled_1724485573.webp', 11, '2024-08-24 02:16:14', '2024-08-24 02:16:14'),
(89, 'MG_3978-1-scaled_1724485574.webp', 11, '2024-08-24 02:16:14', '2024-08-24 02:16:14'),
(90, 'MG_3980-1-scaled_1724485574.webp', 11, '2024-08-24 02:16:15', '2024-08-24 02:16:15'),
(91, 'MG_4025-scaled_1724485575.webp', 11, '2024-08-24 02:16:15', '2024-08-24 02:16:15'),
(92, 'MG_4024-scaled_1724485575.webp', 11, '2024-08-24 02:16:15', '2024-08-24 02:16:15'),
(93, 'MG_4017-scaled_1724485575.webp', 11, '2024-08-24 02:16:16', '2024-08-24 02:16:16'),
(94, 'MG_4007-scaled_1724485576.webp', 11, '2024-08-24 02:16:16', '2024-08-24 02:16:16'),
(95, 'MG_4004-scaled_1724485576.webp', 11, '2024-08-24 02:16:17', '2024-08-24 02:16:17'),
(96, 'MG_4043-scaled_1724485577.webp', 11, '2024-08-24 02:16:17', '2024-08-24 02:16:17'),
(97, 'MG_4041-scaled_1724485577.webp', 11, '2024-08-24 02:16:17', '2024-08-24 02:16:17'),
(98, 'MG_4032-scaled_1724485577.webp', 11, '2024-08-24 02:16:18', '2024-08-24 02:16:18'),
(99, 'MG_4028-scaled_1724485578.webp', 11, '2024-08-24 02:16:18', '2024-08-24 02:16:18'),
(100, 'MG_4027-scaled_1724485578.webp', 11, '2024-08-24 02:16:19', '2024-08-24 02:16:19'),
(101, 'MG_4026-scaled_1724485579.webp', 11, '2024-08-24 02:16:19', '2024-08-24 02:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(14, 'dashboard', 'web', '2024-07-13 04:03:37', '2024-07-13 04:03:37'),
(15, 'login', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(16, 'forget.password', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(17, 'forget.password.post', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(18, 'reset.password.get', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(19, 'reset.password.post', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(20, 'logout', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(21, 'users', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(22, 'users.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(23, 'users.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(24, 'users.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(25, 'users.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(26, 'users.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(27, 'roles.index', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(28, 'roles.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(29, 'roles.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(30, 'roles.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(31, 'roles.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(32, 'roles.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(33, 'roles.destroy', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(34, 'permissions.index', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(35, 'permissions.create', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(36, 'permissions.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(37, 'permissions.show', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(38, 'permissions.edit', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(39, 'permissions.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(40, 'permissions.destroy', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(41, 'manage-profile', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(42, 'manage-profile.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(43, 'manage-feature-logo', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(44, 'manage-feature-logo.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(45, 'manage-feature-logo.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(46, 'manage-feature-logo.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(47, 'manage-testimonials', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(48, 'manage-testimonials.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(49, 'manage-testimonials.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(50, 'manage-testimonials.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(51, 'manage-our-work', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(52, 'manage-our-work.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(53, 'manage-our-work.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(54, 'manage-our-work.update', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(55, 'manage-media', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(56, 'manage-media.add', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(57, 'manage-media.store', 'web', '2024-07-13 04:07:13', '2024-07-13 04:07:13'),
(58, 'manage-media.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(59, 'manage-blog', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(60, 'manage-blog.add', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(61, 'manage-blog.store', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(62, 'manage-blog.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(63, 'manage-ibucare', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(64, 'manage-ibucare.add', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(65, 'manage-ibucare.store', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(66, 'manage-ibucare.update', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(67, 'home', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(68, 'about-us', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(69, 'work', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(70, 'media', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(71, 'blog', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(72, 'contact-us', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(73, 'our-foundation', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(74, 'ibu-care', 'web', '2024-07-13 04:07:14', '2024-07-13 04:07:14'),
(75, 'home-enquiry.store', 'web', '2024-07-13 04:07:14', '2024-07-19 01:07:19');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'web', '2024-07-07 03:21:28', '2024-07-07 03:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(14, 2),
(15, 2),
(16, 2),
(17, 2),
(18, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(64, 2),
(65, 2),
(66, 2),
(67, 2),
(68, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `testimonials_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `profile_image`, `testimonials_content`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'Pragathi', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361302.webp', 'Thank you for being the dedicated, thoughtful, and compassionate doctor that you are! You always go above and beyond and work tirelessly towards a healthy outcome.You put me at ease and helped me gain confidence. I feel grateful to know you and have you as my doctor.', 1, '2024-06-14 05:05:03', '2024-06-14 05:05:03'),
(4, 'Naveena', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361371.webp', 'Hi all , my name is Naveena and I am 25 weeks pregnant. Congratulations to all of Us and special thanks to Shilpi Mam for giving everyone a  correct path for normal delivery . Seen for the first time taking extra care by conducting Exercise,Yoga,Zumba for Us . Once again Thank you so much Dr. Shilpi Mam . 💗', 1, '2024-06-14 05:06:11', '2024-06-14 05:06:11'),
(5, 'Divya Reddy', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361419.webp', 'I had the best experience under Dr Shilpi and her team\'s care and guidance. Dr. Shilpi and her team continuously work towards making the pregnancy journey natural for all the women and encourage the partner to be as much part of the journey. It\'s a fun journey when you are under this teams guidance.', 1, '2024-06-14 05:06:59', '2024-06-14 05:06:59'),
(6, 'Sravanthi', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361473.webp', 'Hello all, iam 25 weeks pregnant now. I waana share my experience and gratitude towards Shilpi mam. My previous doctor from a hospital near my house had suggested for stitches due to short cervix and she threatened me about miscarriage, then my friend suggested to Shilpi mam and mam said stitches is not required. Initially my family didn\'t support my decision to choose a dctr which is almost 40kms from my place. I have somehow convinced my mom just for one consultation. But after meeting Shilpi mam, my mom also got soo much confidance and she loved the way shilpi mam spoke. My blood levels also got improved because of mam. These days the only doctor whome we can trust blindly for Normal delivary is our Dr. SHILPI Mam.', 1, '2024-06-14 05:07:53', '2024-06-14 05:07:53'),
(7, 'Mounika', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361529.webp', 'Hi, my name is mounika. I\'m 27 weeks of pregnant. One of my cousins referred Dr. Shilpi reddy mam. We have been having wonderful experience with the mam since our first day. She has been giving excellent treatment in the right time. And clarifying all my doubts in this journey as this is my first pregnancy.  Thank you so much Dr. Shilpi Mam for everything you are doing for all of us. I\'m feeling very grateful in having you as my doctor.\r\n.', 1, '2024-06-14 05:08:49', '2024-06-14 05:08:49'),
(8, 'Uma', 'd3b272f5-374d-45d8-b2c8-f93fd8c39252-1_1718361595.webp', 'Hello every one,am Uma 27 weeks of pregnant, First i met dr.shilpi mam in 6th week of pregnancy with covid she advises nd explain me everything about covid during pregnancy because of her advises am out of danger from covid without medicine. I thought Kim\'s is very expensive but now I realised everything is worth. Starting of my pregnancy i don\'t have any thoughts of normal delivery after motivation of shilpi mam now I came to fix for normal delivery.The presence of wonderful doctor like you is priceless Mam.Thank you soo much shilpi mam ❤️', 1, '2024-06-14 05:09:55', '2024-06-14 05:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(20) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `profile_img`, `phone_number`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dr. K. Shilpi Reddy', 'webadmin@gmail.com', 'profile-hospital_1718689619.jpg', '9878767845', NULL, '$2y$10$TofMzfGZF7WLKtP4iks2GegBoLkM76Lcg/J6yXMXBbaHa.HN9ebtS', 1, NULL, NULL, '2024-06-23 05:51:29');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_images_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `featured_in_logos_user_id_foreign` (`user_id`);

--
-- Indexes for table `foundation_categories`
--
ALTER TABLE `foundation_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foundation_images`
--
ALTER TABLE `foundation_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foundation_images_foundation_categories_id_foreign` (`foundation_categories_id`);

--
-- Indexes for table `ibu_care`
--
ALTER TABLE `ibu_care`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ibu_care_user_id_foreign` (`user_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `our_works`
--
ALTER TABLE `our_works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_works_user_id_foreign` (`user_id`);

--
-- Indexes for table `our_works_image`
--
ALTER TABLE `our_works_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `our_works_image_our_work_id_foreign` (`our_work_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testimonials_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `blogs_images`
--
ALTER TABLE `blogs_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `foundation_categories`
--
ALTER TABLE `foundation_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `foundation_images`
--
ALTER TABLE `foundation_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ibu_care`
--
ALTER TABLE `ibu_care`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `our_works`
--
ALTER TABLE `our_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `our_works_image`
--
ALTER TABLE `our_works_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blogs_images`
--
ALTER TABLE `blogs_images`
  ADD CONSTRAINT `blogs_images_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `featured_in_logos`
--
ALTER TABLE `featured_in_logos`
  ADD CONSTRAINT `featured_in_logos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `foundation_images`
--
ALTER TABLE `foundation_images`
  ADD CONSTRAINT `foundation_images_foundation_categories_id_foreign` FOREIGN KEY (`foundation_categories_id`) REFERENCES `foundation_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ibu_care`
--
ALTER TABLE `ibu_care`
  ADD CONSTRAINT `ibu_care_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `media_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `our_works`
--
ALTER TABLE `our_works`
  ADD CONSTRAINT `our_works_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `our_works_image`
--
ALTER TABLE `our_works_image`
  ADD CONSTRAINT `our_works_image_our_work_id_foreign` FOREIGN KEY (`our_work_id`) REFERENCES `our_works` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
