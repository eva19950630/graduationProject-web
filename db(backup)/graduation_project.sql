-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- 主機: localhost
-- 產生時間： 2017-11-18 12:00:51
-- 伺服器版本: 10.1.14-MariaDB
-- PHP 版本： 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `graduation_project`
--

-- --------------------------------------------------------

--
-- 資料表結構 `game_record`
--
-- 建立時間: 2017-03-27 16:51:17
-- 最後更新: 2017-11-18 02:14:44
-- 最後檢查: 2017-11-04 00:41:53
--

CREATE TABLE `game_record` (
  `record_id` int(10) NOT NULL COMMENT '記錄編號',
  `gamename` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '小遊戲',
  `question` varchar(300) COLLATE utf8_unicode_ci NOT NULL COMMENT '題目',
  `answer` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '答案',
  `useranswer` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT '學生答案',
  `button` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '點擊按鈕',
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT '答題狀況',
  `teaching` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT '進教學?',
  `answertime` varchar(5) COLLATE utf8_unicode_ci NOT NULL COMMENT '作答花費時間(秒)',
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '記錄時間(GMT+8)',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '學生帳號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `testbank`
--
-- 建立時間: 2017-02-19 07:10:29
--

CREATE TABLE `testbank` (
  `questions_id` int(10) NOT NULL COMMENT '題型編號',
  `questions` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '題型名稱',
  `applied question` text COLLATE utf8_unicode_ci NOT NULL COMMENT '應用題',
  `aq_hint1` text COLLATE utf8_unicode_ci NOT NULL COMMENT '應用問題_1階提示',
  `hint2` text COLLATE utf8_unicode_ci NOT NULL COMMENT '2階提示'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 資料表的匯出資料 `testbank`
--

INSERT INTO `testbank` (`questions_id`, `questions`, `applied question`, `aq_hint1`, `hint2`) VALUES
(1, 'A+B+C', '', '', ''),
(2, 'A+B-C', '', '', ''),
(3, 'A - B + C', '突然發現路邊有一群鼻子長在頭頂的野豬，你必須準確的計算數量以閃避他們的攻擊，有80隻野豬向你衝了過來，其中35隻在被樹叢的果實吸引走，而族群中又有55隻跟著衝了過來，你應該閃避多少隻野豬呢？###路邊的「笑花」叫住了你，它問了一個問題：它有320片花瓣，為了藏住「寶物」使用了180片，又因為大笑長出了200片，請問它現在有多少片花瓣呢(笑)？###海阿嬤是人魚的一種，她的鱗片具有神奇的力量，能夠延長阿嬤的壽命，阿嬤誕生的時候會擁有500片，經歷歲月風霜後使用了213片，但也慢慢生成了56片，請問這隻海阿嬤還有多少片神奇的鱗片呢？', '吸引走@跟著衝了過來@使用了@長出了@生成了', '［提示］加法與減法的概念'),
(4, 'A-B-C', '', '', ''),
(5, 'A + B + C + D', '有個神秘的告示板，上面有很多袋子的圖騰和數字的圖板，看起來似乎可以移動，也許移動正確會有甚麼特別的東西！紅色的袋子上面刻著199，黃色的袋子刻著22，藍色的袋子刻著35，綠色的袋子刻著50，圖騰刻著一個大袋子裝著紅、黃、藍、綠四個袋子，旁邊的空白應該放入什麼數字圖板呢？###一個怪大叔出現在眼前，拿出了一枝黑筆插著一顆鳳梨，再拿出一支藍筆插著一顆蘋果。黑筆重90克，鳳梨重84克，蘋果重110克，藍筆重45克，請問大叔手上的東西加總起來有多重？###治癒老翁翁有四瓶藥水，紅色的能治療50點生命值，橘色的能治療80點，黃色的能治療135點，白色的能治療200點，他將四種都各使用一瓶為你治療，你回復了多少生命值呢？', '大袋子裝著紅、黃、藍、綠四個袋子@加總起來@各使用一瓶', '［提示］加法的概念'),
(6, 'A + B + C - D', '冬天來了，每天萱萱都覺得吃不飽，總是大吃一頓，原本的60公斤，第一個禮拜量體重發現自己胖了3公斤，不過萱萱不以為意，第二個禮拜繼續大吃特吃，第二個禮拜結束後量體重，不得了，又胖了5公斤，後來發現好像變太胖了，所以努力在這個月運動減肥，一個月後終於瘦了2公斤，請問萱萱現在體重多少公斤？###小安最近決定要弄一間書房，買了一個書櫃準備放書進去，他一開始先放進5本，後來整理完其他房間後，又再放進23本，後來自己到書局買了4本新書後再放進書櫃，小安媽媽因為工作需要拿走了書櫃中的3本書，請問目前小安書房的書櫃內總共有幾本書？###可愛的小妹妹想玩風箏，小妹妹的爸爸到文具店買一張35元的牛皮紙，一捲15元的風箏線，一包50元的竹條，後來發現文具店在做活動，只要消費滿百就能省10元，請問爸爸總共在文具店花了多少錢？', '胖了@瘦了@放進@拿走@買一張@一捲@一包@省', '［提示］加法與減法的概念'),
(7, 'A+B-C+D', '', '', ''),
(8, 'A+B-C-D', '', '', ''),
(9, 'A-B+C+D', '', '', ''),
(10, 'A-B+C-D', '', '', ''),
(11, 'A-B-C+D', '', '', ''),
(12, 'A - B - C - D', '胖萱非常喜歡吃東西，今天她出門前為了避免肚子太餓，特地帶了一包62顆的巧克力，一出門覺得有點餓就先吃了7顆，等公車覺得太餓又吃了2顆，到了學校覺得搭車耗盡了豬豬力量餓的咕咕叫，於是就一口氣吃了23顆，請問胖萱今天還剩下多少顆巧克力可以吃?###過年到了，阿三領到了許多紅包，加總起來總共有5000元，阿三決定要將今年拿到的紅包好好運用，拿去買書花了440元，買了一雙鞋花了1680元，吃大餐花了350元，請問阿三今年紅包錢剩下多少？###你家便利商店的冰箱內原有280罐飲料，第一組客人來拿走了5罐，第二組客人因為要辦同學會，所以拿了12罐走，第三個客人來拿走了2罐，請問你家便利商店的冰箱內目前有幾罐飲料？', '一包62顆@吃了7顆@吃了2顆@吃了23顆@總共@買書@買了一雙鞋@吃大餐@有280罐@拿走了@拿了', '［提示］減法的概念'),
(13, 'A+B+C+D+E', '', '', ''),
(14, 'A+B+C+D-E', '', '', ''),
(15, 'A+B+C-D+E', '', '', ''),
(16, 'A+B+C-D-E', '', '', ''),
(17, 'A+B-C+D+E', '', '', ''),
(18, 'A+B-C+D-E', '', '', ''),
(19, 'A+B-C-D+E', '', '', ''),
(20, 'A+B-C-D-E', '', '', ''),
(21, 'A-B+C+D+E', '', '', ''),
(22, 'A-B+C+D-E', '', '', ''),
(23, 'A-B+C-D+E', '', '', ''),
(24, 'A-B+C-D-E', '', '', ''),
(25, 'A-B-C+D+E', '', '', ''),
(26, 'A-B-C+D-E', '', '', ''),
(27, 'A-B-C-D+E', '', '', ''),
(28, 'A-B-C-D-E', '', '', ''),
(29, 'A × B × C', '擁有儲值好習慣的萱萱，每個月都會固定存一些零錢，已知萱萱每天都會固定存10塊到豬豬撲滿，假設一個月有30天，請問一年後萱萱的豬豬撲滿裡有多少錢？###豬豬超市中一顆蘋果賣30元，阿萱想要買蘋果送給6個朋友，每個人10顆蘋果，請問阿萱總共要花多少錢買蘋果？###一小時60分，一天24小時，一年有365天，請問一年總共有幾分鐘？', '一個月有30天@一年後@一顆蘋果賣30元@每個人10顆蘋果@一小時60分@一天24小時@一年有365天', '［提示］乘法的概念'),
(30, 'A*B/C', '', '', ''),
(31, 'A/B*C', '', '', ''),
(32, 'A ÷ B ÷ C', '萱萱半年內存了720點的遊戲點數，一個月以30天計算，請問萱萱平均一天存多少遊戲點數？###小天為了讀懂一門很難的課程，買了3本筆記本抄重點，1本筆記本有15頁，小天算了一下發現全部加起來大約有6300個字，請問小天的筆記本平均一頁有多少字？###圖書館內的圖書共有9600本，已知共有120個書櫃，一個書櫃有4層，請問書櫃中平均1層有幾本書？', '平均一天存多少遊戲點數@平均一頁有多少字@平均1層有幾本書', '［提示］除法的概念'),
(33, 'A+B*C', '', '', ''),
(34, 'A-B*C', '', '', ''),
(35, 'A+B/C', '', '', ''),
(36, 'A-B/C', '', '', ''),
(37, 'A × B + C', '可可飲料店1杯珍珠奶茶賣35元，福爺企業的老闆請員工喝飲料，向可可飲料店訂購了24杯，結帳完畢後錢包中還有850元，請問老闆的錢包裡原來有多少錢？###小萱到超級超市幫媽媽買菜，1把蔥40元，小萱買了2把，然後再買1盒豆腐25元，請問小萱結帳時需付多少錢？###五年五班考第一次月考，老師安排座位總共有6排，其中第一排到第五排各坐6個，最後一排只有4位，請問五年五班共有幾位小朋友？', '訂購了24杯@還有850元@買了2把@再買1盒@總共有6排@最後一排只有4位', '［提示］乘法與加法的概念'),
(38, 'A*B-C', '', '', ''),
(39, 'A/B+C', '', '', ''),
(40, 'A/B-C', '', '', ''),
(41, 'A+B*C+D', '', '', ''),
(42, 'A+B*C-D', '', '', ''),
(43, 'A-B*C+D', '', '', ''),
(44, 'A-B*C-D', '', '', ''),
(45, 'A × B + C × D', '有8個人去吃好好吃剉冰店，這8個人不約而同都點了120元的芒果冰與45元的紅豆牛奶冰，請問這8人最後總共要付多少錢給店家？###萱奶奶大壽，決定設宴邀請親朋好友一起聚會，今天到菜市場買菜時，一斤五花肉90元，一斤蒜頭180元，萱奶奶決定五花肉跟蒜頭各買兩斤，請問萱奶奶總共花了多少錢？###長方形的長為5單位，寬為8單位，而正方形的邊為4單位，請問長方形的面積與正方形的面積加起來為多少單位？', '都點了120元的芒果冰與45元的紅豆牛奶冰@各買兩斤@面積@加起來', '［提示］乘法與加法的概念'),
(46, 'A × B - C × D', '五年六班到小文麵包店買了6盒泡芙，五年七班到小康麵包店買了6盒泡芙，小文麵包店一盒泡芙賣110元，而小康麵包店一盒賣135元，請問五年七班比五年六班多花了多少錢？###萱萱蛋糕店是一家只賣芒果奶油蛋糕的店，今天在開店前做了10個芒果奶油蛋糕，做1個蛋糕需耗費成本420元，1個蛋糕賣600元，總共賣了8個，請問今天萱萱蛋糕店總共賺了多少錢？###五年三班共有28人，國文期末考平均84分，五年四班有26人，國文期末考平均87分，請問兩班的國文期末考總分差距為多少？', '買了6盒泡芙@多花了@總共賣了8個@賺了多少錢@有28人@有26人@總分差距', '［提示］乘法與減法的概念'),
(47, 'A ÷ B + C ÷ D', '小佩老師請班上同學吃點心囉！老師總共花了432元買布丁及900元買小蛋糕，已知班上同學共有36人，老師分給小朋友每人一個布丁跟一個蛋糕，請問一個布丁加一個蛋糕的價錢加起來為多少？###聖誕節到了！已知A區聖誕樹共有15棵，A區共有180隻襪子，B區聖誕樹有12棵，B區共有240隻襪子，請問A區及B區平均一棵聖誕樹上的襪子加總起來為多少？###在一個開心的萬聖節派對中，五年五班想要佈置教室來應景，已知班上同學總共有28位，買佈置材料花了560元，買糖果花了336元，請問五年五班在這次萬聖節佈置中，一個同學平均要分攤多少錢？', '共有36人@一個布丁加一個蛋糕的價錢加起來@共有15棵@有12棵@平均一棵聖誕樹上的襪子加總起來@總共有28位@平均要分攤多少錢', '［提示］加法與除法的概念'),
(48, 'A ÷ B - C ÷ D', '翔翔與倫倫喜歡約放學一起跑操場，已知一圈操場為200公尺，翔翔今天共跑了1400公尺，倫倫今天跑了800公尺，請問今天翔翔比倫倫多跑了幾圈？###小飛買了2張音樂專輯，A專輯有10首歌，全部聽完一次費時1800秒，B專輯有12首歌，全部聽完一次費時2880秒，請問兩張專輯中，平均一首歌相差多少時間？###阿宏第一次月考考4科，總分372，第二次月考考了6科，總分588，請問阿宏兩次月考的平均分數差距為何？', '一圈操場為200公尺@多跑了幾圈@有10首歌@有12首歌@平均一首歌相差多少時間@考4科@考了6科@平均分數差距', '［提示］減法與除法的概念'),
(49, 'A*B+C/D', '', '', ''),
(50, 'A/B+C*D', '', '', ''),
(51, 'A*B-C/D', '', '', ''),
(52, 'A/B-C*D', '', '', ''),
(53, 'A*B+C/D+E', '', '', ''),
(54, 'A*B+C/D-E', '', '', ''),
(55, 'A*B-C/D+E', '', '', ''),
(56, 'A*B-C/D-E', '', '', ''),
(57, 'A/B+C*D+E', '', '', ''),
(58, 'A/B+C*D-E', '', '', ''),
(59, 'A/B-C*D+E', '', '', ''),
(60, 'A/B-C*D-E', '', '', ''),
(61, 'A+(B+C)', '', '', ''),
(62, 'A+(B-C)', '', '', ''),
(63, 'A-(B+C)', '', '', ''),
(64, 'A-(B-C)', '', '', ''),
(65, '(A+B)*C', '', '', ''),
(66, 'A × ( B + C )', '演講比賽限制上台時間為10分鐘，已知上半場有20人，下半場18人，請問整場演講比賽總共花多少時間？###一張電影票賣250元，原先小張要買3張和朋友一起看，後來在排隊的時候，接到通知有另外4位朋友也要加入，請問小張總共要花多少元買電影票？###一場展覽的票價為200元，在A窗口賣了22張，在B窗口賣了28張，請問這場展覽總共賺了多少錢？', '上台時間為10分鐘@總共花多少時間@一張電影票賣250元@總共要花多少元買@一場展覽的票價為200元@總共賺了多少錢', '［提示］算式含括號'),
(67, '(A-B)*C', '', '', ''),
(68, 'A*(B-C)', '', '', ''),
(69, '(A+B)/C', '', '', ''),
(70, '(A-B)/C', '', '', ''),
(71, 'A/(B+C)', '', '', ''),
(72, 'A/(B-C)', '', '', ''),
(73, 'A+B*(C+D)', '', '', ''),
(74, 'A-B*(C+D)', '', '', ''),
(75, 'A+B*(C-D)', '', '', ''),
(76, 'A-B*(C-D)', '', '', ''),
(77, 'A+B/(C+D)', '', '', ''),
(78, 'A-B/(C+D)', '', '', ''),
(79, 'A+B/(C-D)', '', '', ''),
(80, 'A-B/(C-D)', '', '', ''),
(81, 'A+B*(C+D)-E', '', '', ''),
(82, 'A+B*(C-D)+E', '', '', ''),
(83, 'A+B/(C+D)-E', '', '', ''),
(84, 'A+B/(C-D)+E', '', '', ''),
(85, '', '', '', '');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--
-- 建立時間: 2017-03-27 16:54:23
-- 最後更新: 2017-11-18 02:14:44
-- 最後檢查: 2017-11-04 00:41:43
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL COMMENT '玩家編號',
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '玩家帳號',
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT '玩家密碼',
  `logincount` int(20) NOT NULL DEFAULT '1' COMMENT '登入次數'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `game_record`
--
ALTER TABLE `game_record`
  ADD PRIMARY KEY (`record_id`);

--
-- 資料表索引 `testbank`
--
ALTER TABLE `testbank`
  ADD PRIMARY KEY (`questions_id`),
  ADD KEY `questions` (`questions`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `game_record`
--
ALTER TABLE `game_record`
  MODIFY `record_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '記錄編號', AUTO_INCREMENT=1821;
--
-- 使用資料表 AUTO_INCREMENT `testbank`
--
ALTER TABLE `testbank`
  MODIFY `questions_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '題型編號', AUTO_INCREMENT=86;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '玩家編號', AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
