-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 03 2019 г., 12:18
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blog_oop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '1',
  `category_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `category_id`, `title`, `description`, `content`, `pub_date`, `picture`) VALUES
(3, 1, 1, 'officia et exercitationem', 'Sequi optio aliquid ut dolore eum quas fuga et. Ab et accusamus nulla odit eaque enim nisi deserunt. Totam excepturi officiis inventore officia aut in corrupti aut. Debitis nobis commodi quia voluptas rerum aliquid atque. Amet quo aliquam dolor nisi aut voluptas quis id. Debitis sit voluptas nisi qui suscipit. Eaque dicta id non dolores nobis repellendus qui qui.', 'Quia repudiandae inventore perferendis veniam fugiat sit quisquam. Accusamus itaque qui totam illum ut. Porro tempora eaque doloribus qui magnam. Consequatur esse ut laborum delectus qui fugit. Et aperiam soluta minus molestiae eum fugit. Eveniet totam rem explicabo optio ut et aut. Nostrum aut ut neque mollitia sed necessitatibus exercitationem. Necessitatibus animi qui explicabo voluptatum. A quaerat eligendi consequuntur aut perferendis. Et dolor dolor consequatur ea culpa architecto laudantium nisi. Rem quia rerum sit et. Ad aut itaque explicabo aut suscipit. Exercitationem beatae at dolore laudantium sed. Illo pariatur nihil est et inventore sed. Veniam autem qui ab velit explicabo veniam beatae est. Est nemo tempora voluptatibus delectus architecto deleniti maiores voluptatem. Molestiae consectetur illo voluptatem reprehenderit sapiente voluptatibus nemo. Et fuga a excepturi dignissimos. Sit qui velit nihil. Odit ut earum vitae laudantium recusandae. Laboriosam quam culpa vitae blanditiis. Placeat provident et consequatur impedit sunt. Maiores itaque consequuntur necessitatibus voluptatem aut in laudantium. Earum voluptatem earum beatae dolore ad quia magni. Mollitia dolores vero omnis. Eveniet architecto libero quam quia recusandae. Dicta maxime quisquam qui perspiciatis ut voluptas labore. Quisquam ea aut voluptas occaecati quas. Voluptatem quia similique expedita sint corporis. Voluptatum architecto ea doloremque provident aliquid in vel. Et illum corrupti provident qui tenetur itaque modi. Sunt quod qui culpa assumenda. Iure qui minima beatae sint cumque sit commodi. Consequatur facilis quia possimus qui tempora aliquid. Incidunt libero similique libero culpa culpa sapiente. Odio deserunt beatae unde molestiae id sequi rerum. Aliquid atque nemo aut. Incidunt quasi illo deserunt fugit odio explicabo voluptatem.', '2019-06-28 14:51:47', 'img_5dbdcd96dc07e.jpg'),
(4, 1, 2, 'sit necessitatibus qui', 'Provident voluptatum vero est reprehenderit. Quisquam aut provident officia in. Nihil pariatur magnam accusamus vitae quo et natus occaecati. Minus consectetur pariatur laboriosam quas voluptatibus. Vero optio asperiores ut odio ut et aliquam. Sed illo aliquam ut corporis vitae. Quas sit dignissimos minima sequi deserunt. Sed vel voluptates veritatis consectetur non consectetur sit.', 'Earum ab excepturi quod placeat dolor. Necessitatibus eligendi quidem et odio. Labore qui voluptatibus laboriosam sit voluptatem voluptatibus at. Voluptatibus repudiandae pariatur impedit sunt reiciendis. Sint quidem ut ut eligendi. Ullam totam impedit numquam necessitatibus deleniti. Nisi corrupti eos quod ad. Veritatis rerum id dicta atque. Minus non magnam officia sit. Quo odio dolor aspernatur in provident sunt exercitationem. Libero dolor porro ex. Amet deserunt commodi consequatur ut laudantium enim. Quae laudantium dolor sit voluptatibus voluptatum voluptatem. Accusantium et aliquid in unde aperiam architecto earum. Quisquam sint tempore quia vitae nisi qui. Autem est vel voluptates. Tenetur laudantium delectus distinctio. Neque cupiditate voluptas unde eum aliquid consectetur est quia. Dicta adipisci adipisci omnis eum. Et qui quam omnis placeat pariatur aut eligendi cum. Facere sint perspiciatis voluptatibus maxime quae voluptatibus. Voluptatibus aliquid ab corporis quaerat blanditiis asperiores alias quisquam. Ducimus id ea natus ex eaque illo debitis. Incidunt eligendi est tempore consequatur ut quo quae. Similique quas porro eaque. Aut beatae similique adipisci eligendi omnis. Libero corrupti id aut hic. Aliquid aut molestias quo sint corporis eaque. Similique dolor quae nihil saepe cupiditate nisi quis quae. Nulla explicabo recusandae fuga. Nihil expedita doloremque quaerat eum culpa. Modi qui maxime recusandae ut cum. Aut harum quos culpa ut natus ducimus voluptatum. In natus sit tempore aliquid qui sit. Dolore quis doloribus earum doloremque qui eum et. Aperiam incidunt delectus ut. Rem qui sit quos quo non quam aliquam. Non ut eos quo vel mollitia unde. Quo sunt debitis aliquid quibusdam. Qui ut repellat voluptas fugit est. Unde et atque odit debitis veniam est possimus quos. Modi in possimus enim voluptatem quaerat accusamus.', '2019-06-28 14:51:47', 'img_5dbdcd4e02743.jpg'),
(5, 1, 4, 'quisquam est fuga', 'Veniam quae quia voluptatem esse corporis amet veniam. Non iusto ut iste nobis. Laudantium eligendi quas distinctio. Quaerat vel rem natus sunt. Dolore similique laborum voluptas ducimus maxime dolorem. Suscipit enim et exercitationem voluptatem qui aut ut. Minima cumque ut suscipit sapiente voluptatem inventore. Praesentium et quos molestiae quasi. Amet vel omnis et nam. Eos voluptatum sint enim nisi deserunt mollitia provident qui.', 'Optio rerum itaque repudiandae perferendis quo. Blanditiis totam enim facere nisi est. Autem est tenetur totam laborum voluptates atque ad. Error expedita iure quod est. Pariatur qui quibusdam qui omnis adipisci ad exercitationem velit. Illum odio voluptatem nisi cupiditate perspiciatis aut fugiat. Magni excepturi quod ratione a. Expedita amet autem molestiae et vel ab rerum. Et facere corporis possimus id non molestiae suscipit. Dolorum aliquid necessitatibus illum quasi consequatur vitae quam temporibus. Impedit suscipit ut facilis aut nesciunt voluptas ut. Placeat voluptas accusamus pariatur repellat aspernatur qui. Natus sed eligendi accusantium temporibus. Pariatur unde sunt accusamus sed pariatur deserunt. Officia in omnis delectus ut quis iste. Odit quae non sapiente tempore pariatur ut cum. Voluptate ipsam molestiae laborum aut. Molestias dignissimos quas dignissimos eum blanditiis. Cupiditate est sunt repudiandae exercitationem asperiores est. Vel sapiente quibusdam et error et vitae. Est soluta ut quo quos. Consectetur ipsam quia rem commodi officiis expedita. Et rem eligendi voluptatem ut impedit repellendus. Unde quia iste molestiae et. Laboriosam quo sint ea est quas. Necessitatibus enim nostrum est id. Explicabo sint nihil ex inventore est odio. Aut adipisci ut nemo cupiditate provident voluptatem. Tempore nam enim optio nihil dolor eius numquam dolores. Perspiciatis temporibus sit error sapiente ipsa consequatur. Est qui rem iusto accusamus tempore asperiores itaque. Qui et et quo a ex et ad. Officiis sapiente non reiciendis doloremque sint praesentium perferendis. Exercitationem sapiente autem est necessitatibus id. Enim sunt expedita ut dignissimos aut. Ab expedita eius nulla magnam. Doloremque rerum fugit tenetur debitis. Blanditiis rerum commodi qui id. Nihil totam inventore sint quo qui vel consequatur voluptatem. Dolor assumenda consequuntur nesciunt enim in rerum ipsa.', '2019-06-28 14:51:47', 'img_5dbdcca46a73e.jpg'),
(6, 1, 1, 'minima maxime nemo', 'Eum unde aliquam nostrum aut. Ut eum aspernatur qui aut. Error nihil necessitatibus temporibus sint. Similique odit nobis accusantium sit dolorum possimus. Molestiae est doloribus delectus. Soluta quia corrupti consequatur possimus vero asperiores. Sit quia nisi nihil fugit sit. Odio molestias aut quo corporis quia ad. Voluptatem odit optio sit repellat. Suscipit esse illum illum illum ut debitis. Sapiente nisi commodi fugit libero. Impedit nam omnis autem possimus.', 'Quia quis id consequatur quis. Nostrum modi maiores voluptate modi sapiente voluptas doloribus. Dolores impedit odit temporibus molestias. Aperiam vel dolorum quae eius ullam nihil sit. Magni labore sint vel veniam. Totam est et illum impedit voluptatum eius. Eligendi occaecati reiciendis quia nulla at quisquam. Quam facilis eum culpa enim cum deserunt in laudantium. Quis error aspernatur error accusantium dolores. Nesciunt aut natus molestiae fugit omnis qui voluptatem. Fugit eaque commodi non sit. Ducimus cum incidunt omnis consectetur. Ipsum quo sapiente porro commodi ad nemo debitis. Placeat fugiat quia velit laudantium. Beatae ea modi assumenda temporibus iusto tempore aut. Consequatur rerum et hic nisi reprehenderit ut dolore. Sunt accusamus inventore ut repellendus et et esse. Quia eum rerum sit possimus voluptatibus qui. Ea consequuntur et ad tempore et fuga facere. Deleniti non iusto ut voluptatem. Explicabo eos earum fugiat ut dolor omnis earum. Rerum harum facere nihil at aspernatur commodi. Quo id nostrum nisi dolorem excepturi. Dicta maxime sint hic veritatis optio provident. Reiciendis pariatur eligendi delectus ab atque iure veniam. Placeat est repellat consectetur expedita qui velit. Et sunt numquam eaque vero sed asperiores ducimus quis. Officiis laborum odio sint eveniet ut. Quis exercitationem magnam qui est animi nihil et sunt. Voluptates quo modi quia provident dolores voluptatem. Omnis repudiandae sapiente cupiditate consequatur recusandae. Nostrum quia ratione laborum nulla officiis omnis magnam. Esse vero id earum rerum. Inventore at alias molestiae. Repellat aut aut ratione quam. At labore quidem voluptas enim. Qui quis quo similique quia et quasi ut. Ratione quis neque dicta id. Alias quia recusandae illo veniam nemo et. Hic repudiandae ut voluptatem. Aut et fugit similique. Nam voluptatibus est repellendus quos.', '2019-06-28 14:51:47', 'img_5dbdd16632f88.jpg'),
(7, 1, 0, 'dolores harum reprehenderit', 'Voluptatem corporis aut repudiandae cum dolores. Impedit iste sit in veritatis non architecto quaerat. Pariatur sint consequatur sit sequi tenetur praesentium assumenda et. Voluptas neque in pariatur unde cum temporibus. Quae earum vel quae molestiae dolores non voluptatem. Voluptas voluptas consequatur rerum quo quae voluptates. Tempore delectus non vitae corrupti tenetur molestiae repellendus et. Mollitia alias sit est odit quo. Est pariatur porro ipsam saepe tenetur sint aut.', 'Voluptatem eum adipisci corrupti. Velit quam distinctio aut dolorem dignissimos. Dolorem quidem sapiente voluptatem. Consectetur nobis et optio. Accusamus aut saepe alias veritatis iusto ullam. Aut sequi non et accusamus facere nam. Voluptatem qui ut est. Rerum voluptates enim ut. Cum alias voluptates vel est. Non ipsum reprehenderit neque sunt. Cumque fugit voluptatibus in eligendi repellat. Non illo doloremque laudantium non sunt ut necessitatibus. Corporis occaecati fugiat quis provident fugit molestias. Inventore velit consequatur voluptate vero quo. Veniam voluptas ea nam itaque aliquid eos ut et. In accusamus quisquam dolorem et eveniet. Error expedita nisi adipisci ut vel ut dolor. Quis eius distinctio doloremque eos debitis omnis explicabo. Est dolor enim consequatur sequi. Et ipsum necessitatibus omnis porro similique blanditiis. Accusamus quod repellendus unde ipsa error. Et dolores omnis beatae aliquam eveniet. Qui voluptatem odit et modi ea. Voluptate voluptate explicabo eligendi fuga sint. Qui quos ad voluptate ad aut quia. Rem harum sit est et libero exercitationem incidunt. Mollitia incidunt sit eos quaerat itaque voluptas. Nulla labore est et in deleniti est. Sed accusamus voluptatem voluptatem. Consequatur sed eos quo ut odit soluta sint. Vero dolorem modi sit deserunt adipisci et suscipit. Officiis facilis id maiores iure nostrum architecto dolorum. Molestiae quo quod consequatur est. Tempora incidunt ducimus similique maiores eum. Dolorem perspiciatis reprehenderit porro provident quo commodi. Quo recusandae similique sapiente. Reiciendis id quas nihil vero quaerat. Exercitationem sequi enim quas ut. Iure dolorem sit ea laudantium debitis sit voluptatem. Est voluptate dolorem quidem quis sed. Vitae sint aliquid voluptatibus nesciunt quis maiores. Placeat ducimus voluptatem provident neque incidunt nihil nobis voluptate.', '2019-06-28 14:51:47', 'img_5dbdd14798b2c.jpg'),
(8, 1, 4, 'aut ab neque', 'Ut sint et velit incidunt facere sed nobis modi. Vitae quibusdam et vel. Illo ea et eos corrupti nulla voluptate sint vero. Sint et ea et quos. Nihil omnis voluptatem dolores explicabo velit quidem quo. Reprehenderit itaque odio deleniti error aliquam. Esse voluptatibus perspiciatis aliquid aspernatur culpa consequatur. Sunt corporis nemo sunt unde. Facilis et quos et dolorem iste omnis. Quo in ullam cumque qui qui pariatur.', 'Porro eaque sunt possimus temporibus sit facere. At molestias porro unde voluptatum excepturi ut. Itaque et nihil accusantium possimus et rerum. Neque fugit est est sed nemo est. Aliquid repellendus doloremque explicabo. Vel blanditiis facere et et. Vero odio corrupti unde accusantium omnis. Beatae recusandae laborum et et odit nihil. Eaque libero et adipisci impedit. Ut dolorum quia placeat in autem amet. Repellendus accusantium in ea facere et. Facere expedita ea nihil sit quis. Ipsa earum voluptate odio enim et inventore. Omnis accusamus exercitationem impedit facilis iusto officia sapiente. Nobis minus velit nulla sit non fuga et. Est ducimus occaecati molestias minima. Est sunt ut ipsam impedit eos sunt molestiae. Placeat ea culpa maiores non suscipit nihil aut. Fugit molestiae quo aspernatur possimus. Quidem molestias odio facilis enim iusto qui tenetur. Et quod ipsa ut voluptatem. Incidunt aut quia sed dolores blanditiis. Consequatur deleniti et perferendis cumque. Voluptatem quos cupiditate eligendi cum quae id. Consequatur sint ut vel. Ut et suscipit omnis modi. Asperiores nesciunt sunt enim quod. Perferendis consequatur ab aut officia omnis. At beatae fugiat ut sed illo minima sunt. Rerum dignissimos id ratione ut. Commodi commodi nam sit ad magni laboriosam. Ut odit praesentium est doloribus in necessitatibus. Necessitatibus porro fugiat repudiandae quas. Dolor sapiente perspiciatis ullam nihil. Deserunt qui vel velit quisquam. Et aut quibusdam autem reiciendis voluptatibus quis. Architecto qui voluptas explicabo ex rerum iure eius. Cupiditate maxime error in asperiores perspiciatis earum. Voluptatem facere sit voluptatem fuga culpa consequuntur. Ratione eaque accusamus quisquam tenetur. Accusamus exercitationem consequatur expedita ipsa minima sed. Et magni ut neque possimus. Ut possimus dicta culpa eveniet ullam. Laudantium nam odio vel sit iste ut.', '2019-06-28 14:51:47', 'img_5dbdcc48dd9f3.jpg'),
(9, 1, 0, 'quia voluptates omnis', 'Accusamus tempora quisquam et consequuntur pariatur. Quasi fuga ea id velit laudantium. Beatae facilis qui et quos dignissimos pariatur. Ipsa eos aut qui nemo doloribus laborum nisi ut. Temporibus quia quasi ullam. Doloribus et eum reiciendis omnis facilis quos nobis. Ea praesentium officiis nam eos. Autem voluptatum omnis rerum aliquid et nam doloribus non. Quia mollitia maiores autem adipisci nesciunt similique ipsa. Soluta voluptate voluptatibus quis autem. Quis illo ratione sequi et.', 'Deserunt dicta esse nobis nihil vel. Reiciendis consequatur ut deserunt cumque nihil. Nobis cumque nobis et optio. Quisquam consequuntur quis est recusandae at molestias qui. Ducimus eum consectetur magnam quaerat ut temporibus. Minima voluptatem et deserunt ut cumque. Rerum fugiat fugiat sapiente qui cumque est. Quis neque praesentium nobis consectetur ducimus. Placeat qui natus explicabo. Tenetur quaerat omnis dolorum saepe numquam voluptatem. Delectus voluptates assumenda mollitia perferendis et. Eveniet omnis quam qui quo. Cum omnis fuga sed ullam asperiores in. Quasi ut deserunt est et accusantium omnis quia. Enim libero dolorem quae praesentium voluptatem. Ut ut pariatur tempore repudiandae minima adipisci. Illo qui officiis veniam quia qui alias iusto. Amet atque est incidunt tempore. Animi maiores sapiente nemo harum. Perferendis odio qui aut deserunt odit eum. Perspiciatis quae error odit corrupti labore voluptatibus tempora. Nihil quis dolores non enim ipsam repellat et. Sed eos excepturi doloremque veniam praesentium fuga aliquam. Et cum non neque modi. Enim nostrum voluptates corporis nihil vel. Nam qui quisquam et est nobis inventore. Et est est doloremque sit similique totam. Nemo harum maiores facilis quia cupiditate veniam et. Distinctio quia est deserunt fuga. Rem velit est distinctio qui et amet. Et sed rerum natus aperiam. Quasi esse sunt sapiente velit dignissimos. Aut sapiente ipsum dolor ex voluptates at. Et rerum ea veritatis ut dolorem ut. Maxime qui quis non et. Corporis nihil numquam officiis consequuntur voluptates. Saepe voluptas non consequatur eum voluptatem. Reiciendis at velit accusamus ut et. Necessitatibus aut magnam minima fugit. Iusto molestiae qui laudantium consequatur laborum. Voluptates voluptas dolore ipsam aut. Aut voluptatum voluptates eum atque et sit. Aut nisi voluptatum et facilis sint sed error.', '2019-06-28 14:51:47', 'img_5dbdcc30814b6.jpg'),
(10, 1, 2, 'mollitia libero corporis', 'Dolores rem totam expedita ea et qui a. Porro fugit temporibus dolores ut. Consectetur delectus sed voluptatem at qui asperiores deleniti. Est facilis provident dignissimos nulla. Voluptate ut autem tempore quos natus quidem laborum aliquam. Est voluptas possimus recusandae et. Ut quos sint corrupti autem sit. Ducimus aspernatur eum ea placeat velit ut velit. Occaecati est eum est id provident aut et corrupti.', 'Cum unde adipisci tempore. Similique atque dolore nesciunt tempora repudiandae dolores. Aliquid sit laborum deserunt aut quas molestiae magni. Quisquam quo quia molestias cupiditate corrupti explicabo. Inventore veniam enim expedita cumque magnam reprehenderit est. Sunt sint minus provident quis sed quis et modi. Rem molestiae itaque aliquam. Ullam libero accusantium et. Aut maiores quis recusandae voluptatem et et. Reiciendis ex distinctio quasi quos aliquid velit vitae. Consequuntur quis et molestiae tempora modi velit. Corporis vel nobis et itaque qui enim. Tenetur facilis quia et quis ea rem. Ut eum eum laboriosam rerum sit. Perferendis quas enim quas natus. Ipsa nam dolores deleniti fugit. Est eum est aut aperiam voluptatem quia. Omnis occaecati eum earum aut sit velit. Itaque at ut eligendi dolore possimus. Quibusdam a consequatur est similique. Consequatur quae modi sequi harum. Sunt ut at consequatur ratione dolore quisquam autem. Dignissimos qui veniam voluptas aperiam. Sed fugiat rerum nostrum atque officiis ut voluptatibus. Aspernatur exercitationem non alias velit voluptatem. Ipsum molestiae atque blanditiis porro itaque. Officia blanditiis sunt voluptatem eius sed. Vitae unde modi quo deleniti atque earum. Modi voluptas explicabo nobis qui voluptatem. Dolor quaerat enim sit est ad. Numquam optio nam sunt adipisci qui. Aperiam quia assumenda ut aperiam qui ratione eos. Rerum aut sed voluptatem aliquid a aspernatur. Ut enim voluptate corporis quis excepturi ex nostrum. Amet nihil magni non facilis in nemo ut. Magni error in et enim libero omnis doloribus. Dolorem necessitatibus blanditiis modi ipsa dolor eveniet. Amet ipsam natus nostrum ipsa optio vel voluptas. Ipsum in minima molestias cumque et. Voluptas aut ea officia adipisci rerum maxime. Atque aut eveniet recusandae consequatur. Illum quis laudantium odio in deserunt ipsum.', '2019-06-28 14:51:47', 'img_5dbdcc20bb6c2.jpg'),
(19, 1, 4, 'consequatur quo quia', 'Numquam voluptate optio repellat numquam consequuntur ipsum. Voluptates odio adipisci aut dolor quis facilis. Et et ut sint quis architecto. Consequatur ut voluptatem placeat commodi qui sed aut. Magni amet sequi sit voluptas. Vel sint sit blanditiis non possimus. Aliquam error enim temporibus minus ut aut. Est ut non ut sint ea. Dolore facilis commodi esse ut numquam nihil vel. Fugiat totam exercitationem beatae a.', 'Vitae necessitatibus praesentium et sit. Expedita illo culpa earum expedita est. Odit magni tempora voluptatem provident tempore consequatur. Est hic sapiente modi qui velit. Vel explicabo inventore eaque ipsam enim quam excepturi. Quam accusantium sit qui voluptas laudantium. Earum animi assumenda rerum repellat ea est labore. Quia corporis quidem error vitae quia voluptatem. In placeat repellat officia. Fuga ut distinctio assumenda et. Saepe veritatis eveniet placeat similique quia officiis. Qui qui inventore optio nostrum. Vitae quo voluptas dolorum quasi repellat rem. Blanditiis deserunt voluptas inventore laborum dignissimos dolor eveniet. Quia unde fugit consectetur doloribus iste consequatur. Assumenda culpa consequuntur dolorem rem cum et magnam. Qui vel facere necessitatibus omnis ea. Iusto libero a ullam a recusandae at qui. Voluptas maxime animi repudiandae ut. Eum fuga fuga modi accusantium eius dolores. Aut voluptas repellat molestiae nobis maiores eos. Velit odio sed velit assumenda totam voluptatem. Autem ea dolorum molestiae culpa minima et nesciunt vel. At nesciunt odit fugiat qui est. Deleniti quia velit aliquam aspernatur. Voluptatum quo impedit officia. At praesentium rerum earum. Consequuntur perspiciatis velit nihil sed aliquam fuga et. Atque ipsum eum maiores maxime est nulla. Quos cum porro quisquam perspiciatis esse. Occaecati adipisci aut dicta nobis officia. Ea est harum quam ut dolores voluptatem. Quisquam animi maxime ducimus quia et. Dignissimos quia quo qui cum. Numquam libero beatae ut sapiente nam labore saepe est. Hic consequuntur itaque laboriosam similique. Cupiditate illo ipsa rerum nihil. Aut inventore rem similique dicta rem occaecati doloremque aperiam. Id autem ex ipsa facere quibusdam. At enim reiciendis ullam eum. Deserunt vero culpa eum incidunt. Aspernatur harum quas velit ut. Repudiandae est deserunt maxime necessitatibus aut. Rerum doloremque rerum et hic.', '2019-06-28 14:51:47', 'img_5dbdcbdf7d440.jpg'),
(20, 1, 4, 'vero unde reiciendis', 'Autem aliquid sequi veritatis dolores. Officia officia ut quia expedita. Possimus magnam nesciunt aliquam libero perferendis nihil asperiores. Non temporibus et iure vitae sed aperiam aliquam. Aut ipsum ea esse. Enim rerum animi et architecto deleniti omnis reprehenderit. Est similique id perferendis consequatur cupiditate a qui error. Repellat aspernatur veniam adipisci quae occaecati. Ipsum aliquid ullam odio soluta rerum minus. Ab sunt earum consequatur quibusdam dolorum quis ut quia.', 'Itaque itaque suscipit omnis. Mollitia esse accusamus et quia excepturi corrupti facilis nulla. Modi id ipsum est nihil ducimus eligendi ut aut. Mollitia minus rerum deserunt at. Earum explicabo reiciendis praesentium similique. Tempora voluptatem architecto minus soluta quo est alias quos. Dolores molestias adipisci consequatur quasi. Porro fuga deserunt nemo. Ratione magnam eligendi perspiciatis rerum est aut. Eaque dolore libero dolores et eos sunt quas enim. Exercitationem sit doloremque perspiciatis perferendis est quam velit in. Consequatur inventore consequuntur aut quos. Est rem ad omnis error voluptatem. Mollitia quod totam adipisci rerum aut pariatur neque. Maxime tempore eum qui eveniet beatae in. Labore quia ea perspiciatis. Repudiandae eos et aliquid accusantium et voluptate. Quas optio voluptatibus omnis non et non quas. Perferendis veritatis aperiam est corrupti ab voluptatem hic fugiat. Esse harum qui voluptas ad vel doloremque est. Dolores tempora architecto quod doloremque voluptas et repudiandae corrupti. Eius unde aut at amet. Minus ut modi temporibus ex eos aspernatur. Vel illum nemo dolore ut impedit. Soluta voluptas ipsa vero qui unde. Aliquid rem minima esse placeat velit. Eos doloribus sed voluptatem et. Molestiae exercitationem voluptatem nobis. Recusandae occaecati atque mollitia esse nemo recusandae nesciunt. Ex est eligendi sed quo qui qui perspiciatis. Accusamus sit est dicta maxime. Veritatis fugiat quia incidunt nobis sit. Qui ducimus et culpa. Voluptatem expedita vero dolor ea nostrum. Et autem veniam assumenda blanditiis veritatis. Veritatis dolorem voluptas et illum omnis voluptas nihil. Tempora sit voluptas asperiores sed optio quia et. Molestiae esse eveniet aut nobis optio in. Iure enim illum ratione labore ad quasi est. Natus temporibus omnis dolor corrupti et et. Voluptatum ipsa qui unde et. Officia et id reprehenderit. Ipsum error et minima molestiae necessitatibus.', '2019-06-28 14:51:47', 'img_5dbdd11f79c2d.jpg'),
(21, 1, 0, 'nobis autem cumque', 'Laudantium ut enim voluptatibus dolorum beatae ullam id dolor. Quaerat cum veniam aliquid. Eum minima ipsam ut harum dolorem asperiores tempora. Porro non dolor aut hic blanditiis sapiente dicta. Dignissimos ut est impedit. Sapiente at distinctio maxime iusto atque fugiat. Sed alias dolorem ut. Consectetur deleniti deleniti unde reiciendis ad nemo. Et et error voluptate.', 'Debitis maxime nihil veniam molestiae nulla necessitatibus dolorum. Veniam animi facilis maiores velit molestiae odit id. Iste accusamus consequatur architecto odit libero quos dolores. Magnam molestiae possimus inventore dolor sed rem. Et autem delectus eum voluptatum magni recusandae perferendis debitis. Laudantium labore ut vitae iste laboriosam nihil dolores sapiente. Dolorum est rerum vitae vel assumenda rerum possimus. Voluptates pariatur aliquam necessitatibus atque eaque. Odit id quo odio omnis tempore dolore. Incidunt aut in id repudiandae. Sunt sed architecto recusandae non. Nam sit sunt consequatur facere. Quis magni quo totam consequatur iusto ipsa. Rem magnam suscipit tempore quo ipsum autem expedita. Sed suscipit qui consectetur est quibusdam sint et. Delectus ut molestias sed totam. Voluptatibus excepturi quia nihil quas nihil. Nihil non cumque consequatur sed. Sed vel quaerat tenetur voluptatum voluptatem saepe dolore. Est recusandae voluptas corrupti magnam amet recusandae. Et sequi inventore adipisci aliquid exercitationem ipsam nam quia. Odio quidem aliquam unde veritatis. Enim ratione id vel natus vitae eum quae. Voluptatem ipsam ipsa et minima. Culpa sit quo ea et soluta reiciendis. Perspiciatis molestias aut sed et asperiores enim rerum nam. Autem dolor commodi consequuntur deserunt facilis repudiandae. Laborum hic earum autem non ab sit iure unde. Sit fuga ullam porro et excepturi ab. Tempora qui voluptatibus nobis natus. Aut quia repudiandae ea voluptas rerum ut. Hic ut fuga est nobis rerum. Perferendis sint consequatur cumque. Nobis nostrum explicabo exercitationem assumenda adipisci distinctio. Commodi amet repellat rem quo. Quia repellat debitis ut et. Dolores pariatur iure rem blanditiis et beatae fugiat. Ut suscipit fugit accusantium assumenda et. Corrupti est eligendi mollitia adipisci perspiciatis. Eos molestiae voluptatibus ut praesentium labore et eaque.', '2019-06-28 14:51:47', 'img_5dbdd1738a7bb.jpg'),
(22, 1, 4, 'totam autem similique', 'In aut quia voluptates. Facilis deleniti reprehenderit voluptatem odio dolores suscipit pariatur. Velit architecto ducimus quo ut et corporis. Velit qui rerum hic. Eum et vel saepe est aspernatur veritatis officia. Qui a qui accusantium ex et. Blanditiis ducimus dolorum voluptas ad tempora. Ipsa nihil odio adipisci explicabo.', 'Quis et assumenda dolores odio suscipit. Et maiores id consequatur autem illum a provident. Odio magnam quia delectus nesciunt est molestiae et. Deleniti deleniti iure pariatur adipisci. Blanditiis et eos et ratione occaecati voluptas. Corporis laboriosam omnis fugiat omnis. Voluptas recusandae porro distinctio non veniam harum illum. Repellendus illo qui porro ea est. Ut error vero et quaerat magni illum excepturi. Et omnis non et totam voluptas ab. Quia animi id omnis fuga tempore et voluptatem a. Quas ex non molestias et. Autem et et omnis ea eum aliquid quasi. Est porro ea eligendi sit nesciunt dicta aliquid enim. Quae et culpa autem libero. Autem reprehenderit perspiciatis quo aut aspernatur dignissimos blanditiis. Doloribus qui quaerat incidunt a. Quaerat iure iure omnis rerum. Pariatur quod molestias dignissimos possimus odio. Debitis ut unde qui velit quidem. Dolor eos rerum facere quisquam voluptas possimus corporis dolores. Autem et aut fugit voluptas ipsa aut. Ut ea accusantium soluta ut ipsum. Distinctio suscipit ipsa dolorem veritatis totam quam. Sunt hic porro et. Qui dolore vero earum qui dolore. Asperiores incidunt quisquam pariatur totam a sit quis. Id est sapiente harum qui optio ratione. Aspernatur sit voluptatibus porro enim quia ut minus. Minus ea possimus sapiente ea dolor. Consequatur molestiae reiciendis voluptatem nihil. Reprehenderit voluptatem perferendis dolorem magni voluptatum. Aut dignissimos hic quia quas. Dolor accusantium dolorem quam est exercitationem maiores consequatur dolores. Doloremque sed at saepe ut ipsam voluptatibus qui. Et vero repellat voluptas in aut sit. Itaque consequatur dolores eos cumque voluptatibus. Consequuntur quia in blanditiis ipsam. Et vitae omnis qui mollitia accusamus vel quibusdam. Quae minima exercitationem atque reprehenderit velit. Fugit excepturi ut illum nihil est soluta. Nesciunt et harum neque perspiciatis illum aperiam et.', '2019-06-28 14:51:47', 'img_5dbdcba552c2a.jpg'),
(23, 1, 3, 'facere assumenda minima', 'Aspernatur dolores ea eum. Praesentium ut reiciendis doloribus sit commodi ipsam. Aliquid porro voluptas omnis pariatur vitae tempore. Tempora est dicta dolorem quos. Ipsam quia architecto qui cum hic dolorem consequuntur. Dolorem consequuntur harum qui perferendis. Hic nihil delectus molestiae. Maxime itaque distinctio est ex facere assumenda.', 'Odio voluptas impedit alias modi eaque in. Vel consequuntur aut aut facilis est rerum. Omnis sit sequi reiciendis numquam pariatur. Ut beatae quis doloremque tempora voluptatem enim minus expedita. Et nemo ut est dicta. Sit error dolor et corporis. Beatae non culpa aliquam sed nisi quisquam ea. Accusamus omnis quia quasi vel qui corporis. Ut aliquid tempora cupiditate dolores qui dolorem. Minima voluptas optio doloribus eum hic dolorem. Quia ut non non tenetur nam. Ut eos saepe praesentium illum. Mollitia quod adipisci repellendus numquam omnis. Excepturi sequi accusantium ut. Voluptas numquam at officia ut aspernatur maiores error minus. Aut voluptatem ut eligendi odit quibusdam. Consequuntur minima architecto consequatur deserunt. Doloribus sint eum cumque ea ut labore. Debitis sunt praesentium blanditiis. Et et excepturi perspiciatis ipsam rerum aspernatur et. Omnis ipsa omnis rem. Exercitationem earum laboriosam consequatur enim. Eum quasi deserunt doloremque debitis possimus vel velit. Eaque deserunt aliquid reiciendis magni. Fuga voluptates nihil illo voluptas enim. Tempore maxime ducimus eaque consequatur vero. Odio in et rerum quo et. Dolor quibusdam et eaque atque. Labore consequatur fugiat perferendis eius. Magni voluptate fugiat eligendi sed. Nam sequi voluptas suscipit et ut accusantium. Nihil quas facilis non laboriosam consequatur ex. Hic aspernatur soluta possimus nemo et in. Et sit numquam labore voluptatem aut inventore. Magni et doloremque praesentium. Ut totam consectetur molestiae dolores sed nesciunt quo. Voluptatem facilis eaque voluptates saepe at vel. Omnis quia reprehenderit dolor voluptatum ea quo libero aliquid. Nulla soluta tempore ex doloribus impedit et. Quo incidunt quas et laboriosam blanditiis aut. Beatae ut sunt asperiores soluta quasi. Natus illo delectus molestias in doloremque. Nihil illo consectetur a. Non vel cupiditate accusantium amet voluptatum.', '2019-06-28 14:51:48', 'img_5dbdce8a41db3.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(0, 'Unnamed'),
(1, 'Lifestyle'),
(2, 'Cats'),
(3, 'Dogs'),
(4, 'Cooking'),
(5, 'Travel');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `article_id` int(11) UNSIGNED NOT NULL,
  `message` text NOT NULL,
  `pub_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `message`, `pub_date`) VALUES
(20, 27, 23, 'This is cool!', '2019-11-02 18:47:02'),
(21, 27, 22, 'Wow', '2019-11-02 18:47:31'),
(22, 20, 23, 'Love this', '2019-11-02 18:50:39'),
(23, 20, 21, 'Hi!', '2019-11-02 18:50:55'),
(24, 28, 22, 'This is my favourite', '2019-11-02 18:51:39'),
(25, 28, 23, 'Nice photo, fam!', '2019-11-02 18:52:42'),
(26, 28, 21, 'Hey that\'s interesting', '2019-11-02 18:53:43'),
(27, 32, 23, 'i like it', '2019-11-03 08:36:39');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(2) UNSIGNED NOT NULL DEFAULT '0',
  `verified` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `resettable` tinyint(1) UNSIGNED NOT NULL DEFAULT '1',
  `roles_mask` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `registered` int(10) UNSIGNED NOT NULL,
  `last_login` int(10) UNSIGNED DEFAULT NULL,
  `force_logout` mediumint(7) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `username`, `status`, `verified`, `resettable`, `roles_mask`, `registered`, `last_login`, `force_logout`) VALUES
(1, 'admin@admin.com', '$2y$10$xK6.dRDk585TvZynikf.u.ysB5JHr6Q7FAseV65VFQqG7RCLr2ZxG', 'Johnson', 0, 1, 1, 1, 1564567648, 1570698347, 0),
(20, 'test@kermit.com', '$2y$10$xK6.dRDk585TvZynikf.u.ysB5JHr6Q7FAseV65VFQqG7RCLr2ZxG', 'Kermit', 0, 1, 1, 0, 1564744052, 1572720619, 0),
(27, 'jcb@test.com', '$2y$10$IU8mpWzBraFT8QIpRQp5nOh.vyzCue05fRe95F7ycTsB554oETSsS', 'Jacob', 0, 1, 1, 1, 1564760604, 1572770820, 0),
(28, 'mike@test.ru', '$2y$10$zvdHOzSBfoFJ8kZUsLO1ze3jOIMf7D8av0mwH2DtZUDYsSQdMU2/.', 'Mike', 0, 1, 1, 0, 1564761207, 1572720675, 0),
(32, 'test@test.com', '$2y$10$aVoVoCCr5TkzMHUXQVzvn.ZY5GedCxNrHXeECMenhmCfMSB.bQyfW', 'Tester', 0, 1, 1, 0, 1572770125, 1572770176, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users_confirmations`
--

CREATE TABLE `users_confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `email` varchar(249) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selector` varchar(16) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_confirmations`
--

INSERT INTO `users_confirmations` (`id`, `user_id`, `email`, `selector`, `token`, `expires`) VALUES
(1, 2, 'irina@marlin.ru', '7LqKf26u_XUOujd8', '$2y$10$S6pHfM4NSbYDWhRXVjjr.ODti8cJH95uGlHqRroqNyOc12Xqrsk42', 1564654049),
(2, 3, 'mail@mail.com', 'ACTaY4EPD5lqIBKV', '$2y$10$4./x/.zmj.oVVzM1lHugHuucX2kXqdcsKMzmaDkqDY6gh70J0SkQS', 1564666810),
(3, 4, 'postnikova.irina00@gmail.com', 'hfRG2ErplkL_k65Z', '$2y$10$AB7ueb7LC5kxvt26SMt16.7wWleOJ6cMQKz1YA96yULQ138nWfPSS', 1564763378),
(4, 6, 'postnikova_irina00@gmail.com', 'Yitf85sS0GYQkrF3', '$2y$10$VViDJz3qf9Olwtg1zsTP8ewSlam19opJfogx.e6ZenuRLbZjdV1/a', 1564763763),
(5, 8, 'postnikova_irina00@gmail.com', 'W0vl_wPRRTiBHIsD', '$2y$10$WPocWTvu3Zu5ZqtjMTBrGOrD.Se1NtZ1O/64RbOYtD2p9k/lFE5xu', 1564763860),
(6, 10, 'postnikova_irina00@gmail.com', 'Rh3I3Ah_3VpSv9gc', '$2y$10$dwHDzEQC/YK.hMAdichnlORyzABZ9tRsMbFkxhQ6uHiMbXnyJPexG', 1564764044),
(7, 12, 'postnikova_irina00@gmail.com', 'cZxg7-M3EboEHt0J', '$2y$10$SkHH9kdQUHVL8d/aRmij1ukMY2RT5gXct4ZtfUR6guq7rmaaPPEsm', 1564764157),
(8, 13, 'postnikova_irina00@gmail.com', 'NI6AJULUGm3d0JH8', '$2y$10$VL1VXDMajPScH72HeFX2OOkniqHmAJANnF.hFJqWS/oDF/4BvjptS', 1564764180),
(9, 14, 'postnikova_irina00@gmail.com', 'CDSAoJWb0IJ3goCg', '$2y$10$u.nb2RJsWMHXZhoGM/XLUOay/x5aEI.5LiRqMolqmWCIyoqL5Wxh2', 1564764332),
(10, 15, 'postnikova_irina@mail.com', '08rwiJQ203F7Hof6', '$2y$10$yoOnedhXTJm.jyKqqb0Pm.rn9Ai55XE4MkNVLVInxIXMjigj/2kNG', 1564764888),
(11, 16, 'postnikova_irina@mail.com', 'voUDe_qWSiONqJqp', '$2y$10$uFPqZcCd/SR4zrRSIJ8tseQFLH9yUhFJFxJVbkOmjGC6FdOqrssCu', 1564765047),
(12, 17, 'postnikova_irina@mail.com', 'g0b0KJ1p4ZLptj62', '$2y$10$UgexQ0cQMYh.IOSGa0E0Kegcnz4wPJAdrrCXgoM25Nj0jmtlJBbt6', 1564765238),
(16, 21, 'troy@test.ru', 'IMqmZz13cjVjMOrs', '$2y$10$RM91Zj8OOvvQ4O652sYnhOy769.8T4EZUba9wCehkV5O90LZlamVy', 1564832430),
(17, 22, 'tress@test.ru', '138kN1r_kr8y8qMJ', '$2y$10$DvnJophks7HJeqZI1/2DNOfRvRfSmMRONxh61LWuM1X6LfpYXzWXq', 1564833070),
(18, 23, 'tress@test.ru', 'WzjTV0K9zDcQ75xc', '$2y$10$LDN9.KSxJtV3RpOy3xpfeuBJWLyF0.x5B.kh3V.Uu3QcFjlADx0ty', 1564833267),
(19, 25, 'tress@test.ru', 'sw4MAyRhAYbMBUhb', '$2y$10$2wBICcsJisuqh6WTj9vA7OMfkwuEReVeFCkme/5xDrbMnMlUj5Nnq', 1564833416),
(23, 29, 'test@test.ru', 'OcBNLFhmRyPrA9-1', '$2y$10$X5b2ECwkj5ODo0XeX3pb9.bkjzvlSl71AjVTBP/DES0/umlkmyQRK', 1572855980),
(24, 30, 'jcb@test.ru', 'kGfzwWLU3cy70vdi', '$2y$10$mVNgMYMs99tdxOGfg.sXQuK.k5NlBQRSAOGmbZtkPS/eCKZU7/o5C', 1572856455);

-- --------------------------------------------------------

--
-- Структура таблицы `users_remembered`
--

CREATE TABLE `users_remembered` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(24) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_resets`
--

CREATE TABLE `users_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `selector` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `token` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `expires` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users_throttling`
--

CREATE TABLE `users_throttling` (
  `bucket` varchar(44) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `tokens` float UNSIGNED NOT NULL,
  `replenished_at` int(10) UNSIGNED NOT NULL,
  `expires_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users_throttling`
--

INSERT INTO `users_throttling` (`bucket`, `tokens`, `replenished_at`, `expires_at`) VALUES
('8-7W1ANDNu2h0-h0jsfgZGiWA7GjLuv48bBF_Ncvgm8', 499, 1572770162, 1572942962),
('OMhkmdh1HUEdNPRi-Pe4279tbL5SQ-WMYf551VVvH8U', 19, 1572770162, 1572806162),
('GU4CTSilzs101QInnv7x8ZRKp8ahbTxTNjW_y0aJwr4', 29, 1572770140, 1572842140),
('DKG6ZQEz-KndF8jIF8kJRsw0U0QiWO5P5kvq-OdpCuw', 29, 1572770140, 1572842140),
('G-3l1K8nUZ4nbc_2szIDh3Ie-wrZFMYEs5I60A0Eezw', 29, 1564761241, 1564833241),
('7eDcxoxT3OGJPqXf6sQ9Swjc5eLg_mPmaOvi-yzs5Uo', 29, 1564761241, 1564833241),
('ormQmZjbzv91AAyLUmpGD9leavUZmhqlEKQeSxDGgcE', 28.0383, 1564760713, 1564832713),
('13bIaiWPSOfFn0-a0q7TwP7iZWhMdJ9Zndq3WKmhpVI', 28.0383, 1564760713, 1564832713),
('HIJQJPUQ2qyyTt0Q7_AuZA0pXm27czJnqpJsoA5IFec', 48.8931, 1572770783, 1572842783),
('PZ3qJtO_NLbJfRIP-8b4ME4WA3xxc6n9nbCORSffyQ0', 1.02748, 1572770779, 1573202779),
('QduM75nGblH2CDKFyk0QeukPOwuEVDAUFE54ITnHM38', 64.3451, 1572770820, 1573310820),
('NrSSl_dZcCGBcq8_XcuSRpCcBy2moGcNUohdvqZtsjY', 29, 1572770783, 1572842783),
('klDIRebPsSTUFHIIw_CMM8KDdInsuGRPSUGNr2lxnIM', 29, 1572770783, 1572842783);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_ibfk_1` (`article_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `email_expires` (`email`,`expires`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `users_resets`
--
ALTER TABLE `users_resets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `selector` (`selector`),
  ADD KEY `user_expires` (`user`,`expires`);

--
-- Индексы таблицы `users_throttling`
--
ALTER TABLE `users_throttling`
  ADD PRIMARY KEY (`bucket`),
  ADD KEY `expires_at` (`expires_at`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users_confirmations`
--
ALTER TABLE `users_confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `users_remembered`
--
ALTER TABLE `users_remembered`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users_resets`
--
ALTER TABLE `users_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articles_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
