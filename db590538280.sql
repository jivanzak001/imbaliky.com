-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Хост: db590538280.db.1and1.com
-- Время создания: Окт 17 2015 г., 06:51
-- Версия сервера: 5.5.44-0+deb7u1-log
-- Версия PHP: 5.4.45-0+deb7u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `db590538280`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `text`) VALUES
(1, '<h1>Մեր մասին</h1>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `competitions`
--

CREATE TABLE IF NOT EXISTS `competitions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_added` varchar(255) NOT NULL,
  `date_end` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=39 ;

--
-- Дамп данных таблицы `competitions`
--

INSERT INTO `competitions` (`id`, `title`, `description`, `date_added`, `date_end`, `img_name`, `status`) VALUES
(38, 'Փոքրիկ հայեր', 'Փոքրիկ հայեր', '26/07/2015', '02/08/2015', '291056dd68ad2e3ebd03995bcdfeffa8.jpg', 'complete');

-- --------------------------------------------------------

--
-- Структура таблицы `competitions_image`
--

CREATE TABLE IF NOT EXISTS `competitions_image` (
  `comp_img_id` int(11) NOT NULL AUTO_INCREMENT,
  `competition_id` int(11) NOT NULL,
  `comp_img_name` varchar(255) NOT NULL,
  `likes` int(11) NOT NULL,
  PRIMARY KEY (`comp_img_id`),
  KEY `competition_id` (`competition_id`),
  KEY `competition_id_2` (`competition_id`),
  KEY `competition_id_3` (`competition_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Дамп данных таблицы `competitions_image`
--

INSERT INTO `competitions_image` (`comp_img_id`, `competition_id`, `comp_img_name`, `likes`) VALUES
(27, 38, '309f36d7aab586e444e634a08dff31c5.jpg', 6),
(28, 38, '71d8763339972fd144f34e7de729e44d.jpg', 8),
(29, 38, 'e095e083b56d150cf44164c4e0d4d92b.jpg', 9),
(30, 38, '50300e1114fcd15c70a1ca28d96f63c7.jpg', 6),
(31, 38, '1fd1ed9493845c35357a6a15a7fb632a.jpg', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb_user_id` varchar(255) NOT NULL,
  `img_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `img_id` (`img_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=44 ;

--
-- Дамп данных таблицы `likes`
--

INSERT INTO `likes` (`id`, `fb_user_id`, `img_id`) VALUES
(14, '1006295612755571', 27),
(15, '1006295612755571', 28),
(16, '1006295612755571', 29),
(17, '1006295612755571', 30),
(18, '917092835050642', 30),
(19, '917092835050642', 28),
(20, '917092835050642', 27),
(21, '1013192162065916', 27),
(22, '1013192162065916', 28),
(23, '1013192162065916', 30),
(24, '1013192162065916', 29),
(25, '952603171452616', 28),
(26, '952603171452616', 27),
(27, '856010617802006', 29),
(28, '856010617802006', 27),
(29, '856010617802006', 28),
(30, '856010617802006', 30),
(31, '952603171452616', 30),
(32, '768728083249681', 30),
(33, '768728083249681', 28),
(34, '1013192162065916', 31),
(35, '952603171452616', 31),
(36, '1067400856604422', 29),
(37, '1067400856604422', 28),
(38, '1067400856604422', 27),
(39, '1067400856604422', 31),
(40, '1486187671681614', 31),
(41, '917193561707236', 31),
(42, '917193561707236', 29),
(43, '917193561707236', 28);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `short_text` text NOT NULL,
  `text` text NOT NULL,
  `img_name` varchar(255) NOT NULL,
  `or` int(11) NOT NULL,
  `amis` varchar(255) NOT NULL,
  `tari` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `title_en`, `short_text`, `text`, `img_name`, `or`, `amis`, `tari`) VALUES
(6, 'Խաղալիքի դերը երեխայի կյանքում', 'Lorem_Ispum6', 'Ասում են՝ երեխաները նման են մաքուր թղթի, որի վրա կյանքը տարիների ընթացքում թողնում է իր անջնջելի հետքը: Խաղալիքի հոգեբանական ազդեցության մասին գիտեն բոլորը: ', '<p>Ասում են՝ երեխաները նման են մաքուր թղթի, որի վրա կյանքը տարիների ընթացքում թողնում է իր անջնջելի հետքը: Խաղալիքի հոգեբանական ազդեցության մասին գիտեն բոլորը:<br />\r\nԻ՟նչ է նշանակում երջանիկ մանկություն. ներդաշնակ ու երջանիկ ընտանիք, առողջ սնունդ և, իհարկե խաղալիքներ: Խաղալիքը մեծ դեր ունի երեխայի կյանքում: Ճիշտ ընտրված խաղալիքների միջոցով երեխաները սովորում են սիրել, հոգատար լինել շրջապատի նկատմամբ, զարգանում է նրանց հուզական աշխարհը; Որպես մանկության անբաժանելի մաս` դրանք պետք է համապատասխանեն երկու կարևորագույն չափանիշի` չվնասեն երեխայի ֆիզիկական և հոգեկան առողջությունը:<br />\r\nԽաղալիքը ծագել է մարդկության պատմության ընթացքում` որպես երեխային կյանքին նախապատրաստելու համար միջոց:</p>\r\n\r\n<p>Ավելին, ճիշտ խաղալիք ընտրելով, ծնողը կարող է նաև զարգացնել երեխայի մտածողությունը, ստեղծագործ միտքը, աշխարհընկալումը: Հարկավոր է, որ ծնողը ուշադիր լինի ոչ միայն՝ թե ի՞նչ խաղալիք է գնում երեխայի համար, այլ նաև, թե ե՞րբ, երեխայի ո՞ր տարիքում է այն գնում:</p>\r\n\r\n<p>Մի խոսքով անհրաժեշտ է ճիշտ ժամանակին գնել ճիշտ խաղալիք, որպեսզի երեխայի համար ուշ կամ շուտ չլինի այն ընկալելու համար: Կան կառուցողական, զարգացնող խաղալիքներ, որոնցով իսկապես կարելի է շատ բան սովորեցնել երեխային, հաշվել, տարբերել մեծը փոքրից, կարճը երկարից, ճանաչել գույները և այլն: Շատ կարևոր է, որ երեխայի հետ դրանցով խաղա նաև իրենից մի քիչ մեծ քույր կամ եղբայրը, ինչու չէ՝ նաև ծնողները: Եվ այդ տարիքից հենց խաղի ու հեքիաթի միջոցով, փոքրիկի հետ խաղալով կարելի է դնել դաստիարակության շատ լավ հիմք:</p>\r\n\r\n<p>Զարգացնող խաղալիքները երեխայի կյանք են ներխուժում կրտսեր տարիքից, սկսած չխչխկանից, հոլից: Ցանկացած զարգացնող խաղալիք երեխայի առաջ դնում է ուսուցողական խնդիր: Կարևոր է հաշվի առնել այն փաստը,որ զարգացնող խաղալիքները նպաստում են մտավոր ունակությունների, ուշադրության և հիշողության զարգացմանը:</p>\r\n\r\n<p>&nbsp;Ճիշտ ընտրված խաղալիքները զարգացնում են երեխայի լսողությունը, տեսողությունը, մտածողությունը, երևակայությունը, մատների մանր մոտորիկան և ձեռքերի շարժողական կոորդինացիան: Արթնանում է հետաքրքրասիրություն, ձևավորվում է նպատակին հասնելու ունակություն :<br />\r\nԵվ ինչպես նշում է <strong>Արթուր</strong> <strong>Շոպենհաուեր</strong><strong>ը` </strong><br />\r\nՅուրաքանչյուր երեխա ինչ-որ չափով հանճար է և յուրաքանչյուր հանճար ինչ-որ չափով երեխա է :</p>\r\n', '493cb8d2d045acbdf6720650020ccaf8.jpg', 19, 'Սեպ.', '2015'),
(8, 'Մայրական կաթ, թե՞ արհեստական կաթնախառնուրդ', '', 'Հաճախ մոր կաթը չի բավականացնում, այդ իսկ պատճառով երեխաներին սկսում են կերակրել արհեստական տարբեր կաթնախառնուրդներով:', '<p><strong><samp>Հաճախ մոր կաթը չի բավականացնում, այդ իսկ պատճառով երեխաներին սկսում են կերակրել արհեստական տարբեր կաթնախառնուրդներով: Ինչպես գիտենք, երեխաներին մինչև 6 ամսականը հավելյալ սնունդ չի կարելի տալ, միայն կաթնամթերք: Ծագում է հարց. փոքրիկին կերակրել և՛ կրծքի կաթով, և՛ կաթնախառնուրդո՞վ, թե՞ միայն կաթնախառնուրդ տալ:</samp></strong></p>\r\n\r\n<p>Անհրաժեշտ է նշել, որ եթե մայրիկն անգամ չնչին չափաքանակով կաթ ունի, ապա միանշանակ պետք է առաջնահերթությունը տալ մայրական կաթին և հետո միայն կերակրել արհեստական կաթնախառնուրդով:</p>\r\n\r\n<p>Չպետք է մոռանալ, որ արհեստական կաթնախառնուրդն ունի իր թերի կողմերը: Դրանք են .</p>\r\n\r\n<ul>\r\n	<li>Վարակիչ հիվանդությունների առաջացման հավանականությունն է մեծանում. արհեստական կաթնախառնուրդի մեջ մանրէները շատ արագ են բազմանում և ամեն անգամ անհրաժեշտ է մանրակրկիտ լվանալ ու եռացնել շիշը, իսկ ամիսը մեկ անգամ փոխել:</li>\r\n	<li>Արհեստական կաթնախառնուրդը, &nbsp;ի տարբերեւթյուն մայրական կաթ, չի պարունակում պաշտպանողական բակտերիաներ:</li>\r\n	<li>Արհեստական&nbsp; կաթնախառնուրդի որոշակի վիտամիններ շատ ավելի դժվար են մարսվում, քան մայրական կաթինը:</li>\r\n	<li>Արհեստական կաթնախառնուրդով սնվող երեխաները հակում ունեն տարբեր տեսակի ալերգիաների և ավելի շատ են տառապում գազիկներից:</li>\r\n</ul>\r\n\r\n<p>Հիմնականում մայրիկները երեխաներին&nbsp; արհեստական կաթնախառնուրդ են տալիս իրենց իսկ հարմարավետության համար: Չնայած որ արհեստական կաթնախառնուրդը իր բաղադրությամբ նման է մայրական կաթին, այնուամենայնիվ այն պատրաստվում է կովի՝ հատուկ մշակման ենթարկված կաթից: Անհրաժեշտ է իմանալ արհեստական կաթնախառնուրդը ինչ քանակությամբ և ինչ հաճախականությամբ պետք է մտցնել նորածնի կերակրացանկ.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>արհեստական կաթնախառնուրդով մեկ կերակրման չափաքանակը, մլ</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>Կերակրման քանակը օրվա ընթացքում</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>1 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>10</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>1</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>2 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>10</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>3 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>20</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>3</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>4 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>50</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>5</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>5 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>100</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>4</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:87px">\r\n			<p>6 օր</p>\r\n			</td>\r\n			<td style="width:322px">\r\n			<p>150</p>\r\n			</td>\r\n			<td style="width:204px">\r\n			<p>4-5</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Լինում են դեպքեր, երբ կերակրում եք արհեստական մի տեսակի կաթնախառնուրդով, սակայն մի որոշ ժամանակ անց ինչ-որ մեկը խորհուրդ է տալիս կերակրել որակով ավելի լավ մեկ այլ կաթնախառնուրդով, սա նույնպես պետք է աստիճանաբար տալ, հակառակ դեպքում նորածինը կարող է լիովին հրաժարվել արհեստական կաթնախառնուրդից, կամ վատագույն դեպքում կնկատեք ալերգիկ երևույթներ:</p>\r\n\r\n<p>Արհեստական կաթնախառնուրդով նորածիններին պետք է կերակրել 3.5-6 ժամվա ընդմիջումներով` ստամոքսային խանգարումներից խուսափելու համար:</p>\r\n\r\n<p>Եթե նորածինը չի ուտում պատրաստված արհեստական կաթնախառնուրդը, ապա կարելի է այն պահել սառնարանում պատրաստման պահից սկսած 5-6 ժամ: Ճիշտ է՝ արտադրող ընկերությունները խորհուրդ չեն տալիս տաքացնել կամ պահել, սակայն մեկ անգամ տաքացնելը չի կարող երեխային վնասել: Եվ վերջապես, գաղտնիք չէ, որ արհեստական կաթնախառնուրդը մեծ հարված է հայրիկների գրպանին: Նշենք նաև, որ արհեստական կաթնախառնուրդը պետք է պատրաստել անպայման եռացրած ջրով:</p>\r\n\r\n<p>Շատ մայրիկների է հետաքրքում՝ երեխային եթե կերակրում ենք արհեստական կաթնախառնուրդով, ապա ինչո՞ւ չի կարելի դա փոխարինել կովի կաթով: Նախ բժիշկները խորհուրդ չեն տալիս մինչև 1 տարեկան երեխաներին տալ կովի կաթ: Երկրորդ, մենք չգիտենք, թե մեր խանութներում ինչ տեսակի կաթ են վաճառում, այսինքն՝ մենք երբեք չենք կարող վստահ լինել որակի հարցում, իսկ գյուղի կաթը կարող է հիվանդ կովից լինել, որի մասին տերերն անգամ &nbsp;կարող են պատկերացում չունենալ: Այնուամենայնիվ, եթե մենք ուզում ենք գոնե շիլան պատրաստել կովի կաթով, ապա պետք է ընտրենք քիչ յուղայնությամբ կաթ (մինչև 2%):</p>\r\n\r\n<p>Կովի կաթի հիմքի վրա պատրաստված արհեստական կաթնախառնուրդն ունի մի քանի առավելություն, քան միայն կովի կաթը.</p>\r\n\r\n<ol>\r\n	<li>Կայուն հիմք:</li>\r\n	<li>Ավելանում են անհրաժեշտ վիտամիններ և միկրոէլեմենտներ:</li>\r\n	<li>Կովի կաթի սպիտակուցը նվազեցնում է ալերգիկ երևույթների ի հայտ գալը</li>\r\n</ol>\r\n\r\n<p>Եթե երեխան չունի մարսողական խնդիրներ, ապա նույն ձևով պատրաստված արհեստական կաթնախառնուրդը կարելի է տալ նաև գիշերը:&nbsp;</p>\r\n', 'a5443b5cabbbd48dd82d66a95006aa91.jpg', 21, 'սեպ.', ''),
(9, 'Երեխայի առողջ քնի 10 օրենքները', '', 'Երեխայի անհանգիստ քնի պատճառով, ինչպես գիտենք, տուժում է ոչ միայն մայրիկը, այլ նաև տան մյուս անդամները, անգամ տան կենդանիները: Ահա թե ինչու է կարևոր երեխայի ամուր և հանգիստ քնի առկայությունը ընտանիքում:', '<p>Երեխայի անհանգիստ քնի պատճառով, ինչպես գիտենք, տուժում է ոչ միայն մայրիկը, այլ նաև տան մյուս անդամները, անգամ տան կենդանիները: Ահա թե ինչու է կարևոր երեխայի ամուր և հանգիստ քնի առկայությունը ընտանիքում:</p>\r\n\r\n<p>Այնպես որ հիշե՛ք՝ մանուկի ամուր և առողջ քունը քաղցր և հարմարավետ է բոլորին՝ և՛ մեծերին, և՛ երեխաներին:</p>\r\n\r\n<p>Առաջին և ամենադյուրին միջոցը միանգամյա օգտագործման տակդիրների ձեռքբերումն է: Սա նաև միակ միջոցն է, որին ձեր միջամտությունը բացարձակ պետք չէ՝ ի տարբերություն մյուս կետերի:</p>\r\n\r\n<ol>\r\n	<li>Առաջնահերթության կանոն:</li>\r\n</ol>\r\n\r\n<p>Բոլորը միգուցե չեն գիտակցում, որ երեխաները շատ ավելի կարիք են զգում երջանիկ և համերաշխ ծնողների ներկայությանը, քան ուտելիքի, քնի և այլ պարագաների:</p>\r\n\r\n<ol>\r\n	<li>Ընտրեք ձեր քնի ռեժիմը:</li>\r\n</ol>\r\n\r\n<p>Առաջին իսկ օրից սկսած երեխան պետք է ունենա քնելու ռեժիմ,&nbsp; որը փոփոխման ենթակա չէ ոչ մի դեպքում:</p>\r\n\r\n<p>Գիշերվա քնին պետք է մանրամասնորեն պատրաստվել, ինչպես նաև պատրաստել մանուկին: Քնի ռեժիմը կարող է լինել հետևյալ սխեմայով. 21:00-ից մինչ առավոտյան 5-ը կամ 23:00-ից մինչ 7-ը:</p>\r\n\r\n<ol>\r\n	<li>Որոշեք որտեղ է քնելու ձեր մանկիկը:</li>\r\n</ol>\r\n\r\n<p>Գոյություն ունի &nbsp;3 տեսակ`&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Ծնողների ննջասենյակում. &nbsp;սա հարմար է ծնվելու առաջին օրերից մինչև 3 տարեկան:</li>\r\n	<li>Երեխայի համար նախատեսված ննջասենյակ. իդեալական է մի տարեկանից բարձր երեխաների համար:</li>\r\n	<li>Եվ ոչ այդքան ընդունելի քուն ծնողների հետ, որը և՛ վտանգավոր է, և՛ չի նպաստում երեխայի նորմալ քնին:Նման երևույթից պետք է առավելագույնս խուսափել:</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Մի՛ վախեցեք արթնացնել քնկոտին:</li>\r\n</ol>\r\n\r\n<p>Երեխայի ամուր և երկար քնի համար պետք է չափավորել ցերեկային քունը:</p>\r\n\r\n<p>Երեխաների քնի պահանջը հետևյալն է. մինչև 3 ամսական-16-20 ժամ, 6 ամսական-14.5 ժամ, 12 ամսական-13.5 ժամ, 2 տարեկան- 13 ժամ, 4 տարեկան- 11.5 ժամ, 6 տարեկան- 9.5 ժամ, 12 տարեկան-8.5 ժամ: Սակայն սա մի փոքր անհատական բնույթ է կրում:</p>\r\n\r\n<p>Եվ այսպես, 6 ամսական երեխան քնում է 14.5 ժամ օրվա ընթացքում: Եթե մենք ուզում ենք, որ գիշերը հանգիստ 8 ժամ քնենք, ապա ցերեկը պետք է քնի ժամը չգերազանցի 6.5 ժամը:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Գիշերային կերակրում</li>\r\n</ol>\r\n\r\n<p>Երեխայի կյանքի առաջին երեք ամիսների ընթացքում գիշերային կերակրման քանակը 1-2 անգամ է: &nbsp;3-6 ամսականում մեկանգամյա կերակրումը լիարժեք բավական է երեխայի համար, իսկ 6 ամսականից հետո ֆիզիոլոգիական տեսանկյունից երեխան գիշերայի կերակրման անհրաժեշտությունը բացարձակ չի զգում:</p>\r\n\r\n<p>Շատ երեխաներ, ինչպես գիտենք, գիշերները մայրիկներին օգտագործում են որպես ծծակ, ոչ այն պատճառով որ սոված են, այլ իրենց նյարդային համակարգի հանգստացման, քնի, շատ անգամ նաև փորիկի ցավերի դեպքում, հիմնականում նման երեխաները ծծակ չեն ուտում:</p>\r\n\r\n<p>Այս պարագայում կարող ենք մի խորհուրդ տալ, բացառեք գիշերային կերակրումը, օրինակ՝ փոխարինեք ջրով: Քնելուց առաջ լավ կերակրեք փոքրիկին:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Հագեցած օր:</li>\r\n</ol>\r\n\r\n<p>Գիշերային քնին անհրաժեշտ է պատրաստվել առավոտվանից: Անցկացրեք ակտիվ օր: Մաքուր օդին զբոսանքները շատ լավ միջոց են լավ քնի համար, իսկ եթե ամառ է, ապա նաև քնեք դրսում: Օրվա ընթացքում կատարեք մարմնամարզություն, կազմակերպեք ակտիվ խաղեր, իսկ եթե փոքրիկը ունի գիշերային քնի խնդիր, ապա կտրականապես բացառեք ցերեկային քունը, որքան էլ ձեզ համար դժվար լինի:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Սենյակի օդափոխություն:</li>\r\n</ol>\r\n\r\n<p>Անկախ եղանակից, մինչ քնելը 10-15 րոպեով օդափոխեք սենյակը: Դա առողջության տեսանկյունից անհրաժեշտ է ոչ միայն երեխային, այլեւ ծնողներին: Սենյակային օպտիմալ ջերմաստիճանը 18-20C, իսկ խոնավությունը 50-70%:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Հարմարավետ անկողին:</li>\r\n</ol>\r\n\r\n<p>Շատ հաճախ մենք ինքներս չենք կարողանում քնել անհարմարավետ բարձի պատճառով:<br />\r\nՆերքնակը պետք է լինի կոշտ, որպեսզի պառկելուց մարմնի ձևախեղումներ չառաջանան, իսկ օրթոպեդիկ ներքնակներ պետք է ձեռք բերել միայն բժշկի նշանակմամբ: Մինչև 2 տարեկան չի կարելի բարձ օգտագործել, իսկ հետագայի համար պետք է ընտրել 40X60 չափի բարձ և ոչ շատ բարձր: Սպիտակեղենը պետք է լինի մաքուր բամբակից և առանց գունավոր նկարների:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Լոգանք:</li>\r\n</ol>\r\n\r\n<p>Եթե հնարավոր է, լոգանքը իրականացրեք քնելուց առաջ, իսկ ամռանը երկրորդ լոգանքը անպայման գիշերային քնից առաջ կատարեք: Լոգանքը հիանալի միջոց է թուլանալու համար, իսկ հետո կատարեք մարզանք և տաք հագուստ հագցրեք, կտեսնեք, որ փոքրիկը անմիջապես քաղցր քուն կմտնի:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Երաժշտություն:</li>\r\n</ol>\r\n\r\n<p>Անպայման միացրեք ձեր երեխայի սիրելի երաժշտությունը, որը նաև դուք լսել եք դեռ հղության ընթացքում: Եվ թողեք, որ ինքնուրույն քնի երաժշտության ներքո:</p>\r\n', '2a5b9ddf453a14a3f8555b355e8ff7b2.jpg', 4, 'Հոկ.', ''),
(10, 'Ամբողջ ճշմարտությունը միանգամյա օգտագործման տակդիրների մասին', '', 'Ինչպես գիտենք այսօր լայն կիրառում ունեն միանգամյա օգտագործման տակդիրները, որոնց օգտակարության և վնասակարության շուրջ բազում վեճեր կան: Ուստի որոշեցինք խոսել դրանց մասին, ', '<p>Ինչպես գիտենք այսօր լայն կիրառում ունեն միանգամյա օգտագործման տակդիրները, որոնց օգտակարության և վնասակարության շուրջ բազում վեճեր կան: Ուստի որոշեցինք խոսել դրանց մասին, որպեսզի երիտասարդ մայրիկների համար ավելի հստակ լինի ավագ սերնդին դեմ լինելու պատճառը:</p>\r\n\r\n<p>&nbsp;Միանգամյա օգտագործման տակդիրների ամենատարածված միֆը դա տղա երեխաների չբերության վտանգն է: Մեր տատիների սիրած խոսքն է. Չի կարելի տղաներին հագցնել միանգամյա օգտագործման տակդիր, ձվիկները շատ են տաքանում և սերմնաբջիջները չեն ձևավորվում: Նախ սեռական զարգացման մասին մինչև 7 տարեկան խոսք անգամ գնալ չի կարող լինել: Բազմաթիվ հետազոտությունների շնորհիվ պարզվել է , որ միանգամյա օգտագործման տակդիրների մեջ ջերմաստիճանը չի գերազանցում 36C , և արդեն մի քանի տղա սերունդ է մեծացել միանգամյա օգտագործման տակդիրներով:</p>\r\n\r\n<p>Ծուռ ոտքեր: Ծուռ ոտքեր ունենալու, հանգամանքը կապում են տակդիրների օգտագործման հետ: Սակայն գաղտնիք չէ, որ շատ ֆիզոլոգիական երևույթներ կրում են ժառանգական բնույթ, բացառություն չէ նաև ոտքերի ծուռությունը: Ոտքերի ուղիղ լինելը կախված է նաև վիտամին D-ից և ֆիզիկական ծանրաբեռնվածությունից: Նույնիսկ կարող ենք դրական կողմ նշել, ոտքերի լայն հեռավորությունը պաշտպանում է երեխաներին բազմաթիվ կոնքային հոդային հիվանդություններից:</p>\r\n\r\n<p>Գիշերանոթի օգտագործման հետ խնդիրներ: Ճիշտ է, չի կարելի լիովին բացառել այս խնդրի առկայությունը, սակայն մի փոքր բացտրություն մտցնենք: Գիշերանոթից լիովին օգտվելու տարիքը տատանվում է 22-30 ամսեկան: Շատ դեպքերում երեխան պատրաստ է լինում 15-18 ամսեկանում, ավելի վաղ տարիքում կարիքը չկա, քանզի երեխան լիովին չի գիտակցում պատճառահետևանքային կապը: Սակայն պետք էլ չի բացառել այն փաստը, որ ավելի է դժվարանում երեխաներին բացատրել գիշերանոթի օգտագործման նպատակը:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p>Իսկ ինչ վերաբերվում է աղջիկներին, ապա իրոք միանգամյա օգտագործման տակդիրները կարող են վնասել` առաջացնելով ցիստիտ: Ինչպես նաև միշտ էլ խրախուսվել է բամբակյա ներդիրները:</p>\r\n\r\n<p>Միանգամյա օգտագործման տակդիրները կարող են առաջացնել դերմատիտ և չթողնել որ մաշկը շնչի: Ինչպես նաև ոչ միշտ է մայրիկը կնկատում որ տակդիրի փոխման անհրաժեշտություն կա, իսկ մինչ այդ մաշկը կարող է վնասվել:</p>\r\n\r\n<p>Տակդիրները պետք է լինեն որակով, չի կարելի խնայել այս պարագայում, քանի որ ալերգիա առաջանալու հավանականությունը մեծանում է: Պարբերաբար պետք է հետևել երեխայի մաշկին, պետք է չթողնել, որ տակդիրն այնքան երկար մնա, որ երեխայի մաշկը խոնավություն զգա: Տակդիրը փոխելուց պետք է մի քանի րոպեով թողնել բաց` մաշկը օդափոխելու համար: Հիշեք պարտադիր է փոխել մինչ գիշերային քունը և առավոտյան արթնանալուց:</p>\r\n\r\n<p>Եթե միանգամյա օգտագործման տակդիր օգտագործելուց հետո երեխայի մոտ կարմիր ցան է առաջացնելու և չի անցնում, ապա անպայման դիմեք մանկաբույժին, քանզի հնարավոր է երեխային լիովին հակացուցված է դրանց օգտագործումը:</p>\r\n\r\n<p>Որպես եզրակացություն պետք է հաշվի առնել, որ ոչինչ անվնաս չէ, բացառությամբ բնական բաղադրությամբ իրերից, պարզապես պետք է օգտագործել որակյալ տակդիրներ:</p>\r\n', '090e27c3af33d2844993e9e5afebedf9.jpg', 4, 'Հոկ.', ''),
(11, 'Կեսարյան հատում', '', 'Ժամանակներս կեարյան հատմանն դիմում են ավելի ու ավելի շատ կանայք՝ առանց իմանալու բացասական և դրական կողմերը: Փորձենք առավել մանրամասն բացատրել կեսարյան հատման էությունը:', '<p>Դեռ Հին Հունական միֆում ասվում էր, որ&nbsp; Ասկլեպին և Դիոնիսը կեսարյան վիրահատման շնորհիվ են լույս աշխարհ եկել: Իսկ Հին Հռոմում երբ հղի կին էր մահանում, ապա երեխան անպայման պետք է հանեին մոր արգանդից կեսարյան հատման միջոցով:</p>\r\n\r\n<p>Եվ միայն 16 դարում ֆրանսիացի թագավոր Պարե Ամբրուազի ժամանակաշրջանում առաջին անգամ թույլատրվեց կատարել կեսարյան վիրահատում ողջ կանանց մոտ: Սակայն այդ վիրահատությունների արդյունքը միշտ ողբերգական ավարտ էր ունենում, այդ իսկ պատճառով, նման վիրահատության էին դիմում միայն այն դեպքերում, երբ մոր կյանքը փրկել անհնար էր: &nbsp;</p>\r\n\r\n<p>Եվ միայն 19-րդ դարում վիրահատությունից հետո արգանդը հեռացնում էին, այդ պատճառով մահացության աստիճանը նվազեց 20-25%-ով: Եվ միայն հինգ տարի անց վի րահատությունից հետո արգանդը կարում էին, բայց և այնպես կիրառվում էր միայն &nbsp;երեխայի կյանքը փրկելու համար:</p>\r\n\r\n<p>Կեսարյան հատումը վիրահատություն է, որը իրականացվում է միայն լուրջ պատճառների հիման վրա: Վիրահատման պատճառ կարող են լինել.</p>\r\n\r\n<ul>\r\n	<li>Կոնքերի փոքր լինելը և պտղի չափից ավել մեծ լինելու հանգամանքը</li>\r\n	<li>Երբ պլանցենտայի դիրքը փակում է արգանդի վզիկը և երեխան չի կարող դուրս գալ ուղիներով</li>\r\n	<li>Մեխանիկական խոչընդոտներ, օրինակ արգանդի միոման</li>\r\n	<li>Արգանդի ճաքի հավանականություն, դրա պատճառ կարող է լինել նախկին ծննդաբերությունից մնացած կարեր</li>\r\n	<li>Մի շարք այլ հիվանդությունների առկայություն, որոնք կապ չունեն հղիության հետ, օրինակ սրտանոթային հիվանդությունների ժամանակ, երիկամների բորբոքման կամ տեսողական խնդիրների դեպքում:</li>\r\n	<li>Ծննդաբերության ժամանակ առաջացած տարբեր բնույթի բարդություններից խուսափելու համար</li>\r\n	<li>Երբեմն էլ պտղի ուղահայաց կամ հակառակ դիրքի դեպքում</li>\r\n	<li>Երբ մի քանի պտուղ են պատրաստվում լույս աշխարհ գալ</li>\r\n	<li>Սեռական օրգանների հերպես, երբ պետք է բացառել պտղի շփումը սեռական ուղիների հետ:</li>\r\n</ul>\r\n\r\n<p>Կեսարյան հատումների 95%-ը իրականացվում է էպիդուլյար ցավազարկման միջոցով: Այսինքն, ցավազրկվում է միայն ստորին հատվածը, իսկ մայր կարող է երեխային տեսնել և գրկել վիրահատությունից անիմիջապես հետո: Միայն հազվադեպ դեպքերում է ընդհանուր ցավազրկման մեթոդը կիրառվում: Վիրահատության ընթացքը 20-40 րոպե է տևում, վիրահատությունից հետո սառույց է դրվում փորին` արգանդի կրճատման ու արյունահոսությունից զերծ մնալու համար, իսկ վիրահատությունից մնացած փորի կարերը հեռացվում են 5-6 օր հետո: Վիրահատությունից հետո մայրը պետք է 24 ժամ գտնվի բժիշկների հսկողության տակ: Ապացուցված է, որ վիրահատությունից հետո պետք է մոտավոր 4-6 ժամ ոչինչ չուտել ու չխմել, քանի որ նման դեպքում հնարավոր են հետվիրահատական բարդություններ: Վիրահատությունից հետո երեխային ավելի երկար են թողնում մոր մոտ կաթնարտադրության համար, քանի որ կեսարյան վիրահատում տարած կանանց մոտ կաթը ավելի ուշ է արտադրվում` հորմոնների պատճառով:</p>\r\n\r\n<p>Կեսարայան վիարահատումը ունի մի շարք դրական կողմեր, նշենք դրանք.</p>\r\n\r\n<ul>\r\n	<li>Ծննդաբերել պատրաստվող նեղ կոնքերով կանաց համար դա անփոխարինելի միջոց է</li>\r\n	<li>Երբ բնական ծննդաբերության ընթացքում բարդություններ են առաջանում երեխայի կամ մոր կյանքի համար, ապա անմիջապես դիմում են կեսարյան հատման</li>\r\n	<li>Արգանդը չի լայնանում, հետևաբար կարերի խնդիր չի ծագում հետևաբար ապահովվում է նորմակ սեռական կյանք</li>\r\n	<li>Խուսափում են հեմորոյից և աղիքի ճաքից, որը հանդիպում է բնական եղանակով ծննդաբերած 95% կանանց մոտ</li>\r\n	<li>Երեխայի գլուխը չի դեֆորմացվում:</li>\r\n</ul>\r\n\r\n<p>Բոլոր այս առավելությունների հետ մեկտեղ կան նաև մի շարք թերություններ.</p>\r\n\r\n<ul>\r\n	<li>Ինֆեկցիաների անցման հավանականության մեծացում</li>\r\n	<li>Ճակատագրական մի շարք բարդություններ 10 անգամ ավելի շատ են հանդիպում կեսարյանի ժամանակ, քան բնական ծննդաբերության ժամանակ</li>\r\n	<li>Կաթնարտադրության դժվարացում, այդ պատճառով կեսարյան հատումով լույս աշխարհ եկած երեխաներին հիմնականում կերակրում են արհեստական կաթնախառնուրդներով</li>\r\n	<li>Երկրորդ երեխայով հղիանալու համար հարկավոր է լինելու 2-3 տարի ընդմիջում և շատ դեպքերում երկրորդ երեխայի ծննդաբերելու ժամանակ արգանդի կրճատումները այնքան ցավալի և ուժգին են լինում, որ նախորդ ծննդից մնացած կարերը քանդվում են</li>\r\n	<li>Որքան էլ տարօրինակ թվա կեսարյան վիրահատության ենթարկված կանանց մոտ նյարդային համակարգը ավելի փխրուն է լինում պարզ պատճառով, բնության բնական ծննդաբերության ընթացքի ընդհատում</li>\r\n	<li>Կեսարյան հատման միջոցով ծնված երեխաների մոտ աստմայով ու երկրորդ կարգի դիաբետով (քանի, որ առաջինը հանդիսանում է ի ծնե) հիվանդանալու հավանականությունը մեծ է: Տարբերվում է աղիքային միկրոֆլորան և վերջապես իմունային համակարգը և դիմադրողականությունը շրջակա հիվանդությունների հանդեպ ցածր է</li>\r\n	<li>Առատ արյունահոսություն, քանի որ մաշկային մի քանի շերտ է կտրվում հետևաբար արյան կորուստը անհամեմատ շատ է լինում</li>\r\n	<li>Հետծննդյան վերականգնողական ընթացքը ավելի երկար է տևում, որը որպես կանոն ուղեկցվում է ողնաշարային ցավերով</li>\r\n	<li>Տեղային ցավազրկման պատճառով կարող է վնասվել ներվայն հանգույցները, սա կարող է պատահել 2-3% կանանց մոտ</li>\r\n</ul>\r\n\r\n<p>Բոլոր բժիշկները միաձայն պնդում են, որ եթե չկա բժիշկներ հստակ նշանակում կեսարյան վիրահատման համար, ապա չի կարելի խանգարել բնության կողմից նախատեսված ծննդաբերության ընթացքը:&nbsp;</p>\r\n', '67ba83d7b813eb5f8809c7afb0e9a9ec.jpg', 5, 'Հոկ.', ''),
(12, 'Նորածնի խնամքի կարեւոր տարրերը', '', '«Փոքրիկս մեկ ամսից կծնվի: Ես սկսել եմ խուճապի մատնվել, քանի որ առաջին երեխաս է, եւ չգիտեմ՝ ինչպես պետք է խնամեմ, կողքիս ոչ ոք չկա, ով կարող է ինձ օգնել կամ խորհուրդ տալ: ', '<p>Պորտալարի մշակումը<br />\r\nՈրպեսզի նվազագույնի հասցնեք վարակների ներթափանցումը պորտալարի վերքի մեջ, պետք է մշակել օրվա մեջ երկու անգամ (առավոտյան եւ երեկոյան լոգանքից հետո):<br />\r\nՁեզ պետք կգա բամբակյա ձողիկ եւ բժշկական 70 տոկոսանոց &nbsp;սպիրտ: Մի քանի կաթիլ սպիրտ կաթացրեք վերքի վրա: Կարող եք օգտագործել նաեւ թրջած բամբակ կամ կաթոցիկ: Բամբակյա ձողիկով զգուշությամբ հեռացրեք արյան մնացորդները, որից հետո խոնավության մնացորդները պետք է &nbsp;ցամաքեցնել ստերիլ բամբակով կամ թանզիֆով: Հաճախակի բացեք պորտը, քանի որ օդի հետ շփվելիս վերքը ավելի շուտ է ապաքինվում: Եթե պորտի վրա կամ շուրջ բորբոքվում է կամ թարախային արտադրություն է նկատվում, անպայման դիմեք բժշկի:<br />\r\nՓոքրիկի լոգանքը<br />\r\nՈրպես կանոն՝ նորածնին լողացնում են ամեն օր, երեկոյան վերջին կերակրումից հետո կամ քնեցնելուց առաջ: Շատ երեխաների ջուրը հանգստացնում է, սակայն կան այնպիսի երեխաներ, որոնց վրա ջուրը հակառակ ազդեցություն է թողնում: Նման դեպքերում լոգանքը պետք է կազմակերպել մոտ երկու ժամ առաջ: Շատ մանկաբույժներ խորհուրդ են տալիս փոքրիկին առաջին օրերին լողացնել եռացրած ջրով, որին պետք է ավելացնել բուսական թուրմեր կամ մանգանա-կալիական լուծույթ: Ի նկատի ունեցեք, որ ե՛ւ մեկը, ե՛ւ մյուսը կարող են չորացնել եւ թեփ առաջացնել մաշկի վրա, նաեւ ալերգիա հրահրել: Սխալ պատրաստված մանգանա-կալիական լուծույթը կարող է քիմիական այրվածք առաջացնել: Հիգիենիկ նկատառումներով բավական է նորածնին լողացնել սովորական մաքուր ջրով:<br />\r\nԿարեւոր կանոններ<br />\r\n1. Երեխային աչքաթող մի արեք մանկական լոգարանում, եթե անգամ նա պառկած է հատուկ բարձիկի կամ ճոճացանցի վրա:<br />\r\n2. Երեխային մի դրեք ջրի մեջ, եթե չեք ստուգել ջրի ջերմաստիճանը:&nbsp;<br />\r\n3. Չի կարելի մանգանա-կալիական բյուրեղները լցնել վաննայի մեջ, այդպիսով փոքրիկը կարող է այրվածք ստանալ: Առանձին տարայի մեջ լուծույթ պատրաստեք` խստորեն հետեւելով չափաբաժիններին:<br />\r\n4. Մի՛ ավելացրեք սառը, առավել եւս տաք ջուր վաննայի մեջ, երբ երեխան այնտեղ է:<br />\r\n5. Նախքան երեխային լողացնելը փոքրիկի վաննան լվացեք տաք ջրով եւ մանկական կամ տնտեսական օճառով:<br />\r\n6. Եթե փոքրիկի տաշտակը տակդիրի վրա է դրված, նախքան փոքրիկին ջրի մեջ մտցնելը, ստուգեք՝ արդյոք այն հաստատուն դիրքով է դրված:&nbsp;<br />\r\n7. Մի՛ չարաշահեք լոգանքի միջոցների օգտագործումը: Երեխային օճառով կարող եք լողացնել շաբաթը մեկ անգամ:<br />\r\n8. Ջրի ջերմաստիճանը սկզբնական շրջանում 36-37 աստիճանից ցածր չպետք է լինի: Աստիճանաբար կարող եք ջերմաստիճանը նվազեցնել մինչեւ 34-35 աստիճան: Օդի ջերմաստիճանը պետք է լինի 24 աստիճան:<br />\r\n9. Եթե փոքրիկը անհարմարավետություն է զգում կամ լաց է լինում լողացնելիս, փորձեք փոխել ջրի ջերմաստիճանը: Շատ երեխաներ չեն սիրում տաք ջուր, նախընտրում են առավել ցածր ջերմաստիճանով ջուր, որը ձեզ համար նույնիսկ սառը կարող է թվալ: Չեզոքացրեք այն բոլոր պատճառները, որոնք կարող են վախեցնել փոքրիկին. վառ լույսեր, բարձր ձայներ: Որպես կանոն՝ երեխաների մեծամասնությունը դրական է վերաբերվում ցանկացած տեսակի ջրային պրոցեդուրաներին:<br />\r\n10. Եթե լոգանքի սկզբում ջրի ջերմաստիճանը երեխայի համար նորմալ է եղել, պետք չէ ընթացքում տաք ջուր ավելացնել, քանի որ մի քիչ գոլ ջրում գտնվելը յուրահատուկ պրոցեդուրա է, որը կկոփի փոքրիկին: Կոփման մյուս տեսակները կարող եք սկսել 4-5 շաբաթականից սկսած:</p>\r\n\r\n<p>Եղունգների խնամքը<br />\r\nՆորածնի ձեռքերի ու ոտքերի եղունգները պետք է կտրել աճման չափով: Օգտագործեք հատուկ մանկական եղունգկտրիչ կամ բութ ծայրով մկրատ: Եղունգները խնամելիս պետք է հետեւել մի շարք կանոնների.&nbsp;<br />\r\n1. Մի՛ օգտագործեք մանիկյուրի համար նախատեսված մկրատ, քանի որ այդ մկրատը կվնասի փոքրիկի եղունգներն ու մատները:<br />\r\n2. Յուրաքանչյուր անգամ փոքրիկի եղունգները կտրելիս մկրատը կամ կտրող միջոցը մաքրեք սպիրտով, որպեսզի խուսափեք վարակներից:<br />\r\n3. Որոշ ծնողներ գտնում են, որ եղունգները ավելի հարմար է կտրել լոգանքից հետո կամ քնեցնելիս, սակայն դա նրանց անձնական նախապատվությունն է: Երեխայի եղունգները բավականին փափուկ են շ, եւ այդ Գործընթացը անհարմարավետություն չի առաջացնում:<br />\r\n4. Փոքրիկի ձեռքը, ոտքը մի սեղմեք, այդպիսով նա անընդհատ կփորձի ազատվել ձեր ձեռքերից: Թեթեւ բռնեք ձեռքը, ոտքը, շոյեք ու մատիկներն առանձնացնելով` կտրեք եղունգները: Եթե երեխան շարժուն ու անհանգիստ է, գործընթացն անցկացրեք մի քանի փուլով:<br />\r\n5. Եթե պատահաբար վնասեք փոքրիկի մատիկը, վերքի վրա ստերիլ թանզիֆ դրեք կամ վիրակապեք:<br />\r\nԻնչպես ճիշտ կտրել եղունգները<br />\r\n* Ձեռքի եղունգները պետք է սկսել կտրել եղունգի մի ծայրից եւ տալ կլորավուն տեսք:<br />\r\n* Ոտքերի եղունգները լավ կլինի ուղիղ կտրել, որպեսզի խուսափեք ներաճումից:<br />\r\n* Եղունգները շատ խորքից չի կարելի կտրել, քանի որ մաշկը կվնասվի:</p>\r\n\r\n<p>Հագուստ<br />\r\n1. Նորածնի ցանկացած տեսակի հագուստ պետք է ազատ լինի եւ չկաշկանդի շարժումները:<br />\r\n2. Գնեք միայն բնական գործվածքներից հագուստ: Եթե գործվածքի բաղադրության մեջ սինթետիկ տոկոս կա, հետեւեք, որ հագուստը լավ կլանի խոնավությունը եւ օդ թափանցի հագուստի մեջ:<br />\r\n3. Նորածնի հագուստը չպետք է ունենա կոճգամներ, կոպիտ կարեր, քանի որ այդ ամենը կարող է վնասել փոքրիկի նուրբ մաշկը: Հագուստը պետք է կարողանաք հեշտ եւ արագ հագցնել եւ հանել:<br />\r\n4. Փոքրիկին տանը հագցնելիս ղեկավարվեք ջերմաստիճանով եւ իհարկե սթափ բանականությամբ: Չի կարելի երեխային չափից շատ հագցնել: Զբոսանքի գնալիս գլխարկ դրեք:</p>\r\n\r\n<p>Փոքրիկի առաջին զբոսանքը<br />\r\nԲաց օդում զբոսանքը օգտակար է ե՛ւ փոքրիկի, ե՛ւ մայրիկի համար: Զբոսնել կարելի է ցանկացած եղանակի` բացառությամբ շատ քամոտ ու ցուրտ օրերի:<br />\r\n1. Գարնանն ու ամռանը նորածնի հետ կարելի է զբոսնել ծննդատնից դուրս գալուց հետո: Սկզբում զբոսանքի տեւողությունը պետք է լինի 10-15 րոպե, ապա 1,5-2 ժամ: Օրվա մեջ կարող եք դրսում մնալ 3-8 ժամ: Տաք եղանակներին փոքրիկին կարող եք հագցնել ու կերակրել հենց դրսում, եթե պայուսակում ձեզ հետ նախապես ունենաք անհրաժեշտ ամեն ինչ: Ձեզ հետ ունեցեք տակդիր ու խոնավ անձեռոցիկ: Զբոսանքի ժամանակ աշխատեք երեխային չպահել արեւի ուղիղ ճառագայթների տակ:<br />\r\n2. Աշնանը ու ձմռանը կարող եք զբոսնել &nbsp;շաբաթական երկու ժամ: Զբոսանքի տեւողությունը պետք է կախված լինի եղանակից: Առաջին զբոսանքի համար, եթե դրսում ջերմաստիճանը -5 աստիճանից պակաս չէ, կարող եք հատկացնել 10-15 րոպե: Հետագայում ժամանակը աստիճանաբար կարող եք ավելացնել մինչեւ 30-60 րոպե: Ի դեպ, օրվա մեջ կարող եք երկու անգամ դուրս գալ: Եթե դրսում ջերմաստիճանը -10-12 աստիճանից ցածր է, ժամանակավորապես հետաձգեք զբոսանքները: Երեխային կարող եք տաք ծածկոցով փաթաթել, տեղավորել մանկասայլակում եւ մի քանի րոպե հանել պատշգամբ, միայն քթիկը բաց թողեք:<br />\r\n3. Սկզբի օրերին, երբ զբոսանքի տեւողությունը շատ կարճ է, կարող եք առանց մանկասայլակի դուրս գալ` երեխային ուղղակի գրկելով: Այդպիսով փոքրիկը ավելի հանգիստ կլինի եւ հեշտ կհարմարվի արտաքին միջավայրին:<br />\r\n4. Երեխային պետք է հագցնել եղանակին համապատսախան: Երեխայի համար վտանգավոր է ե՛ւ մրսելը, ե՛ւ քրտնելը: Հիմնական սկզբունքն է, երեխային հագցնել նույն քանակությամբ հագուստ ինչքան դուք եք հագել եւ գումարած եւս մեկը: Օրինակ, եթե ձեր հագին կա շապիկ, բլուզ եւ բաճկոն, այսինքն՝ երեք շերտ շոր, ապա երեխայի վրա պետք է լինի չորս, այսինքն՝ երեխային կարող եք հագցնել եւս մեկ թեթեւ ժիլետ: &nbsp;&nbsp;</p>\r\n', 'e6447814a4c4314de1501f3ed90bdbff.jpg', 8, 'Հոկ.', '');

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `title`, `img_name`) VALUES
(5, 'title4', '9cc18cc59566e416716c7efc7c692834.jpg'),
(6, 'title5', '496c5ac562e0d2be5de35b03267ddcae.jpg'),
(8, 'title7', '8b519845ffb1b317f92e744ba9fa61c6.jpg'),
(11, 'title8', 'ebe38870f572716fde19aaa9d5f179af.jpg'),
(12, 'title9 ', '3abcdec0a5d810ac3b89e9fcd2b12529.jpg'),
(13, 'title6', 'c27727502c363b3ca8a68ecc32535613.jpg'),
(14, '', '66be9f3094dbcfa5f77a997ea1e8f752.jpg'),
(15, '', 'c3a4c1118095eff79f8cd7ac4b69ab78.jpg'),
(16, '', '6f200b7bc867f4a0d4d11e22f1a8a362.jpg'),
(19, '', '973e8d2dd42eca6f1cc339c110c223d0.jpg'),
(20, '', 'a8cef8114d562777cd3eee7b80b2ef57.jpg'),
(21, '', '2f52e3ae29d7b8a79a0462d4b12faa71.jpg'),
(22, '', '8408a1d943eda20f0da30c58bf25f15b.jpg'),
(23, '', '867d96dd9f25285fcb160fe38db720e9.jpg'),
(24, '', '33352bc4feb18753ab87a7409e5311c6.jpg'),
(26, '', '9c266869eeb50bcf642dfb2dd83383c4.jpg'),
(27, '', 'a6b29f44d52b281404a1dd2e5f342753.jpg'),
(28, '', '2396db5732a92fced18458460f0200a1.jpg'),
(29, '', '02d46ed3b8e356eb531b87138678fe41.jpg'),
(30, '', '3dfb8962a7ba8a58fd0ab5f87febb24a.jpg'),
(32, '', 'e5da48f57da43c07daf4774c7ed7796c.jpg'),
(33, '', '23225f30625a5015c857d7a39dbcb339.jpg'),
(34, '', 'f90b212db320c0e229f2b88bac128040.jpg'),
(35, '', '97c3ea2665d86bd809371000c305ebad.jpg'),
(36, '', '925fc3090851ee3c659dff99d9a9c42a.JPG'),
(37, '', '06c18f6a2a5be5bdf94eaae00c300a71.jpg'),
(38, '', '4646f51837e42bb173602ffac5b2d638.jpg'),
(39, '', 'b5738d51ba32abb2898a24b4a59b5ba9.jpg'),
(40, '', 'be90b66ce2392bf64361411598a127ec.jpg'),
(41, '', '895e32ab271b082933da6b0658c763f9.jpg'),
(42, '', 'ed1a1f7c505d9b32917378fe86ab6b4d.jpg'),
(43, '', '045e4595229f059a1f78bfcdf0304ce2.jpg'),
(44, '', '47986c7313d492a7868f387e130e7610.jpg'),
(45, '', '6de37d86122b398518b8f97e473e3862.jpg'),
(46, '', '1327d77220132e54703b645a193c8686.jpg'),
(47, '', '3fcf260078586b4b3347262d2de0b5cd.JPG'),
(48, '', 'bde2f3b90f4ec40b482ab75001ab7327.jpg'),
(49, '', '3053cf56d591f9f2b1d34c5522739de2.jpg'),
(50, '', '4d23a5f810b2c3b15bfa107af946d335.jpg'),
(51, '', '9db788868e7f5796eae4b95c6513568f.jpg'),
(52, '', 'ecef01a50a671976656648587c04a5cc.JPG'),
(53, '', '00e42e1139462bd911ed04700a6b3536.jpg'),
(54, '', '69f2fda6d1ac43348b029afe9b970157.jpg'),
(55, '', 'ce6497e843bdab1abcf2250f948d1e67.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `text`) VALUES
(1, '<h1><strong>Ծառայություններ</strong></h1>\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `slide`
--

CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `slide`
--

INSERT INTO `slide` (`id`, `img_name`) VALUES
(1, 'bg2.jpg'),
(2, 'black-board.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `status`) VALUES
(6, 'admin_imbalik2', '$2y$10$lX14PA8e7MnlelEMwKli8ukbj66iFwQ1yg06Pc3rLw.9LAwn5XgTm', 2),
(10, 'admin_imbalik', '$2y$10$kh1R7ov63N0581iXs9SkPObrlC68vBowwzqY17da4ZcQ6stLT94ym', 1);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `competitions_image`
--
ALTER TABLE `competitions_image`
  ADD CONSTRAINT `competitions_image_ibfk_1` FOREIGN KEY (`competition_id`) REFERENCES `competitions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`img_id`) REFERENCES `competitions_image` (`comp_img_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;