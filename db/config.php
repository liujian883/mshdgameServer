<?php

// db
$_config['mysql_host'] = 'localhost';
$_config['mysql_user'] = 'root'; // ???菘??没???
$_config['mysql_password'] = 'miaosuhudong2014'; // ???菘?????
$_config['mysql_dbname'] = 'babyplan'; // ???菘???
$_config['babyplan'] = array('mysql_host'=>'localhost','mysql_user'=>'root','mysql_password'=>'miaosuhudong2014','mysql_dbname'=>'babyplan');
$_config['babyplanid'] = array('mysql_host'=>'localhost','mysql_user'=>'root','mysql_password'=>'miaosuhudong2014','mysql_dbname'=>'babyplanid');

$_config['server'] = array('1'=>'42.62.14.109','2'=>'42.62.14.110');
// openapi
$_config['appid'] = '1101263140';
$_config['appkey'] = '0BxOV3wu4V2qsKnb';
$_config['openapi_server'] = 'openapi.tencentyun.com';
$_config['platform'] = 'qzone';

// wanjia
$_config['tili_shangxian'] = 120; // ??力????
$_config['jingli_shangxian'] = 120; // ??力????
$_config['xiedai_shangxian'] = 100; // 携?????频?????
$_config['haoyou_shangxian'] = 100; // ???????蓿?未??
$_config['tongbi_shuliang'] = 10000; // ??始铜????量
$_config['yuanbao_shuliang'] = 50; // ??始元????量
$_config['chushi_kapai'] = array(610,603); // ??始????
$_config['huifu_time'] = 300; // ??力????力?指?一????位??时
$_config['tili_huifu_value'] = 1; // ??力一?位指???值
$_config['jingli_huifu_value'] = 1; // ??力一?位指???值
$_config['kapai_shangxian'] = 200; // ???业目??聘???????
$_config['chushi_xianhua'] = 10; // ???业某?始?驶???

// battle
$_config['battle_max_round'] = 30; // ????战???睾???
$_config['max_dengji'] = 100; // ???频??????燃?

// fuben
$_config['max_zhuxian_fuben'] = 400; // ???吒??????泄乜??母???
$_config['max_cailiao_fuben'] = 400; // ???细??????泄乜??母???

// leitai
$_config['score_raise_time'] = 600; // ????维?侄??每??曰??没???
$_config['front_wanjia_num'] = 10; // 展示?????业?????????前???????腋???
$_config['back_wanjia_num'] = 5;  // 展示?????业??????????????????腋??? 
$_config['front_wanjia_scope'] = 100; // ?????诘?前????前????选????围
$_config['separate_rank'] = 10000; // ???????玫幕??值?一??转?鄣悖�???????????院????业幕???????为1
$_config['leitai_min_dengji'] = 1; // ??????台????小?燃?
$_config['xiaohao_jingli'] = 6; // 一????战???牡木?力
$_config['guangbo_mingci'] = 10; // ????????????时???悴�??息

// juyitang
$_config['first_wan_kapai'] = 94;
$_config['shi_kapai']=array(624,631,638,645,652,659,666,673,680,687,694,701,708,715,722,729,736,743,757); // 十????一???每??频?id????
$_config['bai_kapai']=array(484,491,498,505,512,519,526,533,540,547,554,561,568,575,582,589,596,603,617,239); // ??????一???每??频?id????
$_config['wan_kapai']=array(344,351,358,372,379,386,393,400,421,435,442,463,470,477,8,64,155,162,169); // ??????一???每??频?id????
$_config['shi_hunpo']=array(624,631,638,645,652,659,666,673,680,687,694,701,708,715,722,729,736,743,757); // 十????一???没??堑?id????
$_config['bai_hunpo']=array(484,491,498,505,512,519,526,533,540,547,554,561,568,575,582,589,596,603,617,239); // ??????一???没??堑?id????
$_config['wan_hunpo']=array(344,351,358,372,379,386,393,400,421,435,442,463,470,477,8,64,155,162,169); // ??????一???没??堑?id????
$_config['shi_kapai_gailv'] = 50; // 十????一???每??频母???
$_config['bai_kapai_gailv'] = 70; // ??????一???每??频母???
$_config['wan_kapai_gailv'] = 100; // ??????一???每??频母???
$_config['juyitang_shi_time']=10*60; // 十????一时??????
$_config['juyitang_bai_time']=2*24*60*60; // ??????一时??????
$_config['juyitang_wan_time']=4*24*60*60; // ??????一时??????
$_config['juyitang_freecount1']=5; // 十????一一???????汛???
$_config['juyitang_shi_yuanbao']=10; // 十????一???牡?元????
$_config['juyitang_bai_yuanbao']=50; // ??????一???牡?元????
$_config['juyitang_wan_yuanbao']=500; // ??????一???牡?元????

// wupin 
$_config['kapaixiang'] = 5; // ?????????????频母???
$_config['sale_kapai_count'] = 5; // ???纬???十??千?虺た??频母???
/*
$_config['jinglidan'] = 60; // 一?????榈�?苫??玫木?力??
$_config['tilidan'] = 60; // 一????力???苫??玫???力??
$_config['gaoji_jinglidan'] = 120; // 一???呒???力???苫??玫木?力??
$_config['gaoji_tilidan'] = 120; // 一???呒???力???苫??玫???力??
$_config['8fuzhang_kapaiid'] = 886; // 十?虺た???id
$_config['9fuzhang_kapaiid'] = 887; // ?俜虺た???id
$_config['10fuzhang_kapaiid'] = 888; // 千?虺た???id 
$_config['xiaobao_xianhua'] = 20; // 小???驶?
$_config['zhongbao_xianhua'] = 50; // ?邪??驶?
$_config['dabao_xianhua'] = 100; // ?????驶?
$_config['xiaobao_tongbi'] = 1000; // 小??铜??
$_config['dabao_tongbi'] = 10000; // ????铜??
*/

$_config['kapaixiang_config_file'] = '../utils/kapaixiang.php'; // ???????母????募?

// chatroom
$_config['chat_time_interval'] = 2; // ??始??录?????业?时?颍苫?取????之?诘?一????????录
$_config['broadcast_time_interval'] = 120; // ?苫?取????之?诘?一???悴�??息
$_config['max_record_num'] = 20; // 每??拉取??????录????拉取??????
$_config['max_message_num'] = 5; // 每??拉取?悴�??息????拉取??????

// performance
$_config['script_timeout'] = 300; // ?????疟??募????械某?时时?洌�??时??录????
$_config['function_timeout'] = 100; // ????????????????时时??

// qiyu
$_config['qiyu_total_count'] = 30; // ??????探????????????
$_config['qiyu_huifu_time'] = 300; // ?????指?一??探????时??
$_config['tansuo_gailv'] = array(90, 8, 2); // 0=>????铜?? 1=>???没??? 2=>???每???
$_config['tansuo_baoji_gailv'] = array(1=>60, 2=>20, 4=>15, 8=>5); // 0=>一?????? 1=>双?? 2=>3?? 3=>4??
$_config['tansuo_tongbi'] = 50; // 探??????铜?业?值
$_config['tansuo_jingyan'] = 50; // 探?????镁?????值
$_config['tansuo_hunpo_file'] = '../utils/qiyuhunpo.php'; // 探?????没??堑母????募?
$_config['tansuo_kapai_file'] = '../utils/qiyukapai.php'; // 探?????每??频母????募?

// meiren
$_config['shuaijian_timeout'] = 86400; // 衰???某?时时??
$_config['shuaijian_value'] = 20; // 衰??值
$_config['mrdj_wjdj_max_delta'] = 10; // ???说燃????艹??????业燃??牡燃???
$_config['kaiqi_meiren_dengji'] = 5; // ???铱??????说牡燃?

// ?直?
$_config['users_per_table'] = 200000; // 每?疟????没?????

// error log
//define('E_AUTH', 0); // ?没?????????????
//define('E_ARG', 1); // 缺?俨???
//define('E_DB', 2); // ???菘?????
//define('E_RSTR', 3); // ???薮???
//define('E_OTHER', 4); // ????????

// ?欠?????xhprof
$_config['enable_xhprof'] = false;
