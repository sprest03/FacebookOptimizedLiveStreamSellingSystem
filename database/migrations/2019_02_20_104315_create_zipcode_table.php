<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZipcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zipcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('City', 10);
            $table->string('Area', 10);
            $table->char('ZipCode',3);
        });
        DB::statement('INSERT INTO `zipcode` (`Id`, `City`, `Area`, `ZipCode`)
VALUES
	(1,\'台北市\',\'中正區\',\'100\'),
	(2,\'台北市\',\'大同區\',\'103\'),
	(3,\'台北市\',\'中山區\',\'104\'),
	(4,\'台北市\',\'松山區\',\'105\'),
	(5,\'台北市\',\'大安區\',\'106\'),
	(6,\'台北市\',\'萬華區\',\'108\'),
	(7,\'台北市\',\'信義區\',\'110\'),
	(8,\'台北市\',\'士林區\',\'111\'),
	(9,\'台北市\',\'北投區\',\'112\'),
	(10,\'台北市\',\'內湖區\',\'114\'),
	(11,\'台北市\',\'南港區\',\'115\'),
	(12,\'台北市\',\'文山區\',\'116\'),
	(13,\'基隆市\',\'仁愛區\',\'200\'),
	(14,\'基隆市\',\'信義區\',\'201\'),
	(15,\'基隆市\',\'中正區\',\'202\'),
	(16,\'基隆市\',\'中山區\',\'203\'),
	(17,\'基隆市\',\'安樂區\',\'204\'),
	(18,\'基隆市\',\'暖暖區\',\'205\'),
	(19,\'基隆市\',\'七堵區\',\'206\'),
	(20,\'新北市\',\'萬里區\',\'207\'),
	(21,\'新北市\',\'金山區\',\'208\'),
	(22,\'新北市\',\'板橋區\',\'220\'),
	(23,\'新北市\',\'汐止區\',\'221\'),
	(24,\'新北市\',\'深坑區\',\'222\'),
	(25,\'新北市\',\'石碇區\',\'223\'),
	(26,\'新北市\',\'瑞芳區\',\'224\'),
	(27,\'新北市\',\'平溪區\',\'226\'),
	(28,\'新北市\',\'雙溪區\',\'227\'),
	(29,\'新北市\',\'貢寮區\',\'228\'),
	(30,\'新北市\',\'新店區\',\'231\'),
	(31,\'新北市\',\'坪林區\',\'232\'),
	(32,\'新北市\',\'烏來區\',\'233\'),
	(33,\'新北市\',\'永和區\',\'234\'),
	(34,\'新北市\',\'中和區\',\'235\'),
	(35,\'新北市\',\'土城區\',\'236\'),
	(36,\'新北市\',\'三峽區\',\'237\'),
	(37,\'新北市\',\'樹林區\',\'238\'),
	(38,\'新北市\',\'鶯歌區\',\'239\'),
	(39,\'新北市\',\'三重區\',\'241\'),
	(40,\'新北市\',\'新莊區\',\'242\'),
	(41,\'新北市\',\'泰山區\',\'243\'),
	(42,\'新北市\',\'林口區\',\'244\'),
	(43,\'新北市\',\'蘆洲區\',\'247\'),
	(44,\'新北市\',\'五股區\',\'248\'),
	(45,\'新北市\',\'八里區\',\'249\'),
	(46,\'新北市\',\'淡水區\',\'251\'),
	(47,\'新北市\',\'三芝區\',\'252\'),
	(48,\'新北市\',\'石門區\',\'253\'),
	(49,\'宜蘭縣\',\'宜蘭市\',\'260\'),
	(50,\'宜蘭縣\',\'頭城鎮\',\'261\'),
	(51,\'宜蘭縣\',\'礁溪鄉\',\'262\'),
	(52,\'宜蘭縣\',\'壯圍鄉\',\'263\'),
	(53,\'宜蘭縣\',\'員山鄉\',\'264\'),
	(54,\'宜蘭縣\',\'羅東鎮\',\'265\'),
	(55,\'宜蘭縣\',\'三星鄉\',\'266\'),
	(56,\'宜蘭縣\',\'大同鄉\',\'267\'),
	(57,\'宜蘭縣\',\'五結鄉\',\'268\'),
	(58,\'宜蘭縣\',\'冬山鄉\',\'269\'),
	(59,\'宜蘭縣\',\'蘇澳鎮\',\'270\'),
	(60,\'宜蘭縣\',\'南澳鄉\',\'272\'),
	(61,\'宜蘭縣\',\'釣魚台列嶼\',\'290\'),
	(62,\'新竹市\',\'東區\',\'300\'),
	(63,\'新竹縣\',\'竹北市\',\'302\'),
	(64,\'新竹縣\',\'湖口鄉\',\'303\'),
	(65,\'新竹縣\',\'新豐鄉\',\'304\'),
	(66,\'新竹縣\',\'新埔鎮\',\'305\'),
	(67,\'新竹縣\',\'關西鎮\',\'306\'),
	(68,\'新竹縣\',\'芎林鄉\',\'307\'),
	(69,\'新竹縣\',\'寶山鄉\',\'308\'),
	(70,\'新竹縣\',\'竹東鎮\',\'310\'),
	(71,\'新竹縣\',\'五峰鄉\',\'311\'),
	(72,\'新竹縣\',\'橫山鄉\',\'312\'),
	(73,\'新竹縣\',\'尖石鄉\',\'313\'),
	(74,\'新竹縣\',\'北埔鄉\',\'314\'),
	(75,\'新竹縣\',\'峨眉鄉\',\'315\'),
	(76,\'桃園縣\',\'中壢市\',\'320\'),
	(77,\'桃園縣\',\'平鎮市\',\'324\'),
	(78,\'桃園縣\',\'龍潭鄉\',\'325\'),
	(79,\'桃園縣\',\'楊梅市\',\'326\'),
	(80,\'桃園縣\',\'新屋鄉\',\'327\'),
	(81,\'桃園縣\',\'觀音鄉\',\'328\'),
	(82,\'桃園縣\',\'桃園市\',\'330\'),
	(83,\'桃園縣\',\'龜山鄉\',\'333\'),
	(84,\'桃園縣\',\'八德市\',\'334\'),
	(85,\'桃園縣\',\'大溪鎮\',\'335\'),
	(86,\'桃園縣\',\'復興鄉\',\'336\'),
	(87,\'桃園縣\',\'大園鄉\',\'337\'),
	(88,\'桃園縣\',\'蘆竹鄉\',\'338\'),
	(89,\'苗栗縣\',\'竹南鎮\',\'350\'),
	(90,\'苗栗縣\',\'頭份鎮\',\'351\'),
	(91,\'苗栗縣\',\'三灣鄉\',\'352\'),
	(92,\'苗栗縣\',\'南庄鄉\',\'353\'),
	(93,\'苗栗縣\',\'獅潭鄉\',\'354\'),
	(94,\'苗栗縣\',\'後龍鎮\',\'356\'),
	(95,\'苗栗縣\',\'通霄鎮\',\'357\'),
	(96,\'苗栗縣\',\'苑裡鎮\',\'358\'),
	(97,\'苗栗縣\',\'苗栗市\',\'360\'),
	(98,\'苗栗縣\',\'造橋鄉\',\'361\'),
	(99,\'苗栗縣\',\'頭屋鄉\',\'362\'),
	(100,\'苗栗縣\',\'公館鄉\',\'363\'),
	(101,\'苗栗縣\',\'大湖鄉\',\'364\'),
	(102,\'苗栗縣\',\'泰安鄉\',\'365\'),
	(103,\'苗栗縣\',\'銅鑼鄉\',\'366\'),
	(104,\'苗栗縣\',\'三義鄉\',\'367\'),
	(105,\'苗栗縣\',\'西湖鄉\',\'368\'),
	(106,\'苗栗縣\',\'卓蘭鎮\',\'369\'),
	(107,\'台中市\',\'中區\',\'400\'),
	(108,\'台中市\',\'東區\',\'401\'),
	(109,\'台中市\',\'南區\',\'402\'),
	(110,\'台中市\',\'西區\',\'403\'),
	(111,\'台中市\',\'北區\',\'404\'),
	(112,\'台中市\',\'北屯區\',\'406\'),
	(113,\'台中市\',\'西屯區\',\'407\'),
	(114,\'台中市\',\'南屯區\',\'408\'),
	(115,\'台中市\',\'太平區\',\'411\'),
	(116,\'台中市\',\'大里區\',\'412\'),
	(117,\'台中市\',\'霧峰區\',\'413\'),
	(118,\'台中市\',\'烏日區\',\'414\'),
	(119,\'台中市\',\'豐原區\',\'420\'),
	(120,\'台中市\',\'后里區\',\'421\'),
	(121,\'台中市\',\'石岡區\',\'422\'),
	(122,\'台中市\',\'東勢區\',\'423\'),
	(123,\'台中市\',\'和平區\',\'424\'),
	(124,\'台中市\',\'新社區\',\'426\'),
	(125,\'台中市\',\'潭子區\',\'427\'),
	(126,\'台中市\',\'大雅區\',\'428\'),
	(127,\'台中市\',\'神岡區\',\'429\'),
	(128,\'台中市\',\'大肚區\',\'432\'),
	(129,\'台中市\',\'沙鹿區\',\'433\'),
	(130,\'台中市\',\'龍井區\',\'434\'),
	(131,\'台中市\',\'梧棲區\',\'435\'),
	(132,\'台中市\',\'清水區\',\'436\'),
	(133,\'台中市\',\'大甲區\',\'437\'),
	(134,\'台中市\',\'外埔區\',\'438\'),
	(135,\'台中市\',\'大安區\',\'439\'),
	(136,\'彰化縣\',\'彰化市\',\'500\'),
	(137,\'彰化縣\',\'芬園鄉\',\'502\'),
	(138,\'彰化縣\',\'花壇鄉\',\'503\'),
	(139,\'彰化縣\',\'秀水鄉\',\'504\'),
	(140,\'彰化縣\',\'鹿港鎮\',\'505\'),
	(141,\'彰化縣\',\'福興鄉\',\'506\'),
	(142,\'彰化縣\',\'線西鄉\',\'507\'),
	(143,\'彰化縣\',\'和美鎮\',\'508\'),
	(144,\'彰化縣\',\'伸港鄉\',\'509\'),
	(145,\'彰化縣\',\'員林鎮\',\'510\'),
	(146,\'彰化縣\',\'社頭鄉\',\'511\'),
	(147,\'彰化縣\',\'永靖鄉\',\'512\'),
	(148,\'彰化縣\',\'埔心鄉\',\'513\'),
	(149,\'彰化縣\',\'溪湖鎮\',\'514\'),
	(150,\'彰化縣\',\'大村鄉\',\'515\'),
	(151,\'彰化縣\',\'埔鹽鄉\',\'516\'),
	(152,\'彰化縣\',\'田中鎮\',\'520\'),
	(153,\'彰化縣\',\'北斗鎮\',\'521\'),
	(154,\'彰化縣\',\'田尾鄉\',\'522\'),
	(155,\'彰化縣\',\'埤頭鄉\',\'523\'),
	(156,\'彰化縣\',\'溪州鄉\',\'524\'),
	(157,\'彰化縣\',\'竹塘鄉\',\'525\'),
	(158,\'彰化縣\',\'二林鎮\',\'526\'),
	(159,\'彰化縣\',\'大城鄉\',\'527\'),
	(160,\'彰化縣\',\'芳苑鄉\',\'528\'),
	(161,\'彰化縣\',\'二水鄉\',\'530\'),
	(162,\'南投縣\',\'南投市\',\'540\'),
	(163,\'南投縣\',\'中寮鄉\',\'541\'),
	(164,\'南投縣\',\'草屯鎮\',\'542\'),
	(165,\'南投縣\',\'國姓鄉\',\'544\'),
	(166,\'南投縣\',\'埔里鎮\',\'545\'),
	(167,\'南投縣\',\'仁愛鄉\',\'546\'),
	(168,\'南投縣\',\'名間鄉\',\'551\'),
	(169,\'南投縣\',\'集集鎮\',\'552\'),
	(170,\'南投縣\',\'水里鄉\',\'553\'),
	(171,\'南投縣\',\'魚池鄉\',\'555\'),
	(172,\'南投縣\',\'信義鄉\',\'556\'),
	(173,\'南投縣\',\'竹山鎮\',\'557\'),
	(174,\'南投縣\',\'鹿谷鄉\',\'558\'),
	(175,\'雲林縣\',\'斗南鎮\',\'630\'),
	(176,\'雲林縣\',\'大埤鄉\',\'631\'),
	(177,\'雲林縣\',\'虎尾鎮\',\'632\'),
	(178,\'雲林縣\',\'土庫鎮\',\'633\'),
	(179,\'雲林縣\',\'褒忠鄉\',\'634\'),
	(180,\'雲林縣\',\'東勢鄉\',\'635\'),
	(181,\'雲林縣\',\'臺西鄉\',\'636\'),
	(182,\'雲林縣\',\'崙背鄉\',\'637\'),
	(183,\'雲林縣\',\'麥寮鄉\',\'638\'),
	(184,\'雲林縣\',\'斗六市\',\'640\'),
	(185,\'雲林縣\',\'林內鄉\',\'643\'),
	(186,\'雲林縣\',\'古坑鄉\',\'646\'),
	(187,\'雲林縣\',\'莿桐鄉\',\'647\'),
	(188,\'雲林縣\',\'西螺鎮\',\'648\'),
	(189,\'雲林縣\',\'二崙鄉\',\'649\'),
	(190,\'雲林縣\',\'北港鎮\',\'651\'),
	(191,\'雲林縣\',\'水林鄉\',\'652\'),
	(192,\'雲林縣\',\'口湖鄉\',\'653\'),
	(193,\'雲林縣\',\'四湖鄉\',\'654\'),
	(194,\'雲林縣\',\'元長鄉\',\'655\'),
	(195,\'嘉義市\',\'東區\',\'600\'),
	(196,\'嘉義縣\',\'番路鄉\',\'602\'),
	(197,\'嘉義縣\',\'梅山鄉\',\'603\'),
	(198,\'嘉義縣\',\'竹崎鄉\',\'604\'),
	(199,\'嘉義縣\',\'阿里山鄉\',\'605\'),
	(200,\'嘉義縣\',\'中埔鄉\',\'606\'),
	(201,\'嘉義縣\',\'大埔鄉\',\'607\'),
	(202,\'嘉義縣\',\'水上鄉\',\'608\'),
	(203,\'嘉義縣\',\'鹿草鄉\',\'611\'),
	(204,\'嘉義縣\',\'太保市\',\'612\'),
	(205,\'嘉義縣\',\'朴子市\',\'613\'),
	(206,\'嘉義縣\',\'東石鄉\',\'614\'),
	(207,\'嘉義縣\',\'六腳鄉\',\'615\'),
	(208,\'嘉義縣\',\'新港鄉\',\'616\'),
	(209,\'嘉義縣\',\'民雄鄉\',\'621\'),
	(210,\'嘉義縣\',\'大林鎮\',\'622\'),
	(211,\'嘉義縣\',\'溪口鄉\',\'623\'),
	(212,\'嘉義縣\',\'義竹鄉\',\'624\'),
	(213,\'嘉義縣\',\'布袋鎮\',\'625\'),
	(214,\'台南市\',\'中西區\',\'700\'),
	(215,\'台南市\',\'東區\',\'701\'),
	(216,\'台南市\',\'南區\',\'702\'),
	(217,\'台南市\',\'北區\',\'704\'),
	(218,\'台南市\',\'安平區\',\'708\'),
	(219,\'台南市\',\'安南區\',\'709\'),
	(220,\'台南市\',\'永康區\',\'710\'),
	(221,\'台南市\',\'歸仁區\',\'711\'),
	(222,\'台南市\',\'新化區\',\'712\'),
	(223,\'台南市\',\'左鎮區\',\'713\'),
	(224,\'台南市\',\'玉井區\',\'714\'),
	(225,\'台南市\',\'楠西區\',\'715\'),
	(226,\'台南市\',\'南化區\',\'716\'),
	(227,\'台南市\',\'仁德區\',\'717\'),
	(228,\'台南市\',\'關廟區\',\'718\'),
	(229,\'台南市\',\'龍崎區\',\'719\'),
	(230,\'台南市\',\'官田區\',\'720\'),
	(231,\'台南市\',\'麻豆區\',\'721\'),
	(232,\'台南市\',\'佳里區\',\'722\'),
	(233,\'台南市\',\'西港區\',\'723\'),
	(234,\'台南市\',\'七股區\',\'724\'),
	(235,\'台南市\',\'將軍區\',\'725\'),
	(236,\'台南市\',\'學甲區\',\'726\'),
	(237,\'台南市\',\'北門區\',\'727\'),
	(238,\'台南市\',\'新營區\',\'730\'),
	(239,\'台南市\',\'後壁區\',\'731\'),
	(240,\'台南市\',\'白河區\',\'732\'),
	(241,\'台南市\',\'東山區\',\'733\'),
	(242,\'台南市\',\'六甲區\',\'734\'),
	(243,\'台南市\',\'下營區\',\'735\'),
	(244,\'台南市\',\'柳營區\',\'736\'),
	(245,\'台南市\',\'鹽水區\',\'737\'),
	(246,\'台南市\',\'善化區\',\'741\'),
	(247,\'台南市\',\'大內區\',\'742\'),
	(248,\'台南市\',\'山上區\',\'743\'),
	(249,\'台南市\',\'新市區\',\'744\'),
	(250,\'台南市\',\'安定區\',\'745\'),
	(251,\'高雄市\',\'新興區\',\'800\'),
	(252,\'高雄市\',\'前金區\',\'801\'),
	(253,\'高雄市\',\'苓雅區\',\'802\'),
	(254,\'高雄市\',\'鹽埕區\',\'803\'),
	(255,\'高雄市\',\'鼓山區\',\'804\'),
	(256,\'高雄市\',\'旗津區\',\'805\'),
	(257,\'高雄市\',\'前鎮區\',\'806\'),
	(258,\'高雄市\',\'三民區\',\'807\'),
	(259,\'高雄市\',\'楠梓區\',\'811\'),
	(260,\'高雄市\',\'小港區\',\'812\'),
	(261,\'高雄市\',\'左營區\',\'813\'),
	(262,\'高雄市\',\'仁武區\',\'814\'),
	(263,\'高雄市\',\'大社區\',\'815\'),
	(264,\'高雄市\',\'岡山區\',\'820\'),
	(265,\'高雄市\',\'路竹區\',\'821\'),
	(266,\'高雄市\',\'阿蓮區\',\'822\'),
	(267,\'高雄市\',\'田寮區\',\'823\'),
	(268,\'高雄市\',\'燕巢區\',\'824\'),
	(269,\'高雄市\',\'橋頭區\',\'825\'),
	(270,\'高雄市\',\'梓官區\',\'826\'),
	(271,\'高雄市\',\'彌陀區\',\'827\'),
	(272,\'高雄市\',\'永安區\',\'828\'),
	(273,\'高雄市\',\'湖內區\',\'829\'),
	(274,\'高雄市\',\'鳳山區\',\'830\'),
	(275,\'高雄市\',\'大寮區\',\'831\'),
	(276,\'高雄市\',\'林園區\',\'832\'),
	(277,\'高雄市\',\'鳥松區\',\'833\'),
	(278,\'高雄市\',\'大樹區\',\'840\'),
	(279,\'高雄市\',\'旗山區\',\'842\'),
	(280,\'高雄市\',\'美濃區\',\'843\'),
	(281,\'高雄市\',\'六龜區\',\'844\'),
	(282,\'高雄市\',\'內門區\',\'845\'),
	(283,\'高雄市\',\'杉林區\',\'846\'),
	(284,\'高雄市\',\'甲仙區\',\'847\'),
	(285,\'高雄市\',\'桃源區\',\'848\'),
	(286,\'高雄市\',\'那瑪夏區\',\'849\'),
	(287,\'高雄市\',\'茂林區\',\'851\'),
	(288,\'高雄市\',\'茄萣區\',\'852\'),
	(289,\'南海諸島\',\'東沙\',\'817\'),
	(290,\'南海諸島\',\'南沙\',\'819\'),
	(291,\'澎湖縣\',\'馬公市\',\'880\'),
	(292,\'澎湖縣\',\'西嶼鄉\',\'881\'),
	(293,\'澎湖縣\',\'望安鄉\',\'882\'),
	(294,\'澎湖縣\',\'七美鄉\',\'883\'),
	(295,\'澎湖縣\',\'白沙鄉\',\'884\'),
	(296,\'澎湖縣\',\'湖西鄉\',\'885\'),
	(297,\'屏東縣\',\'屏東市\',\'900\'),
	(298,\'屏東縣\',\'三地門鄉\',\'901\'),
	(299,\'屏東縣\',\'霧臺鄉\',\'902\'),
	(300,\'屏東縣\',\'瑪家鄉\',\'903\'),
	(301,\'屏東縣\',\'九如鄉\',\'904\'),
	(302,\'屏東縣\',\'里港鄉\',\'905\'),
	(303,\'屏東縣\',\'高樹鄉\',\'906\'),
	(304,\'屏東縣\',\'鹽埔鄉\',\'907\'),
	(305,\'屏東縣\',\'長治鄉\',\'908\'),
	(306,\'屏東縣\',\'麟洛鄉\',\'909\'),
	(307,\'屏東縣\',\'竹田鄉\',\'911\'),
	(308,\'屏東縣\',\'內埔鄉\',\'912\'),
	(309,\'屏東縣\',\'萬丹鄉\',\'913\'),
	(310,\'屏東縣\',\'潮州鎮\',\'920\'),
	(311,\'屏東縣\',\'泰武鄉\',\'921\'),
	(312,\'屏東縣\',\'來義鄉\',\'922\'),
	(313,\'屏東縣\',\'萬巒鄉\',\'923\'),
	(314,\'屏東縣\',\'崁頂鄉\',\'924\'),
	(315,\'屏東縣\',\'新埤鄉\',\'925\'),
	(316,\'屏東縣\',\'南州鄉\',\'926\'),
	(317,\'屏東縣\',\'林邊鄉\',\'927\'),
	(318,\'屏東縣\',\'東港鄉\',\'928\'),
	(319,\'屏東縣\',\'琉球鄉\',\'929\'),
	(320,\'屏東縣\',\'佳冬鄉\',\'931\'),
	(321,\'屏東縣\',\'新園鄉\',\'932\'),
	(322,\'屏東縣\',\'枋寮鄉\',\'940\'),
	(323,\'屏東縣\',\'枋山鄉\',\'941\'),
	(324,\'屏東縣\',\'春日鄉\',\'942\'),
	(325,\'屏東縣\',\'獅子鄉\',\'943\'),
	(326,\'屏東縣\',\'車城鄉\',\'944\'),
	(327,\'屏東縣\',\'牡丹鄉\',\'945\'),
	(328,\'屏東縣\',\'恆春鄉\',\'946\'),
	(329,\'屏東縣\',\'滿州鄉\',\'947\'),
	(330,\'台東縣\',\'臺東市\',\'950\'),
	(331,\'台東縣\',\'綠島鄉\',\'951\'),
	(332,\'台東縣\',\'蘭嶼鄉\',\'952\'),
	(333,\'台東縣\',\'延平鄉\',\'953\'),
	(334,\'台東縣\',\'卑南鄉\',\'954\'),
	(335,\'台東縣\',\'鹿野鄉\',\'955\'),
	(336,\'台東縣\',\'關山鎮\',\'956\'),
	(337,\'台東縣\',\'海端鄉\',\'957\'),
	(338,\'台東縣\',\'池上鄉\',\'958\'),
	(339,\'台東縣\',\'東河鄉\',\'959\'),
	(340,\'台東縣\',\'成功鎮\',\'961\'),
	(341,\'台東縣\',\'長濱鄉\',\'962\'),
	(342,\'台東縣\',\'太麻里鄉\',\'963\'),
	(343,\'台東縣\',\'金峰鄉\',\'964\'),
	(344,\'台東縣\',\'大武鄉\',\'965\'),
	(345,\'台東縣\',\'達仁鄉\',\'966\'),
	(346,\'花蓮縣\',\'花蓮市\',\'970\'),
	(347,\'花蓮縣\',\'新城鄉\',\'971\'),
	(348,\'花蓮縣\',\'秀林鄉\',\'972\'),
	(349,\'花蓮縣\',\'吉安鄉\',\'973\'),
	(350,\'花蓮縣\',\'壽豐鄉\',\'974\'),
	(351,\'花蓮縣\',\'鳳林鎮\',\'975\'),
	(352,\'花蓮縣\',\'光復鄉\',\'976\'),
	(353,\'花蓮縣\',\'豐濱鄉\',\'977\'),
	(354,\'花蓮縣\',\'瑞穗鄉\',\'978\'),
	(355,\'花蓮縣\',\'萬榮鄉\',\'979\'),
	(356,\'花蓮縣\',\'玉里鎮\',\'981\'),
	(357,\'花蓮縣\',\'卓溪鄉\',\'982\'),
	(358,\'花蓮縣\',\'富里鄉\',\'983\'),
	(359,\'金門縣\',\'金沙鎮\',\'890\'),
	(360,\'金門縣\',\'金湖鎮\',\'891\'),
	(361,\'金門縣\',\'金寧鄉\',\'892\'),
	(362,\'金門縣\',\'金城鎮\',\'893\'),
	(363,\'金門縣\',\'烈嶼鄉\',\'894\'),
	(364,\'金門縣\',\'烏坵鄉\',\'896\'),
	(365,\'連江縣\',\'南竿鄉\',\'209\'),
	(366,\'連江縣\',\'北竿鄉\',\'210\'),
	(367,\'連江縣\',\'莒光鄉\',\'211\'),
	(368,\'連江縣\',\'東引鄉\',\'212\'),
	(369,\'新竹市\',\'北區\',\'300\'),
	(370,\'新竹市\',\'香山區\',\'300\'),
	(371,\'嘉義市\',\'西區\',\'600\');');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('zipcode');
    }
}
