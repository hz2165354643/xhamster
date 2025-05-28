<?php
//include('./JCSQL/JCSQL_lib/JCSQL_lib.php');
$data=file('./JCSQL/JCSQL_data/demoX/vod.JCSQL');
$JCCMS_page=$C_T_3; //初始化页码 $type=$C_T_2;
$pagesize = 20; //设置记录显示条数
$count=count($data)-1;
$data_chuli="";
for ($x=1; $x<=$count; $x++) {
	$data_arr=explode("|-|",$data[$x]);	$datas=$data_arr['0'];
	if($datas==$C_T_3){ $data_chuli .=$data_arr['0']."|-|".$data_arr['1']."|-|".$data_arr['2']."|-|".$data_arr['3']."|-|".$data_arr['4']."|-|".$data_arr['5'];$data_chuli .="\n";	 }	
} 


	
	
 $JCCMS_SQL = array_values(array_filter( explode("\n", $data_chuli)));//处理之后的数据数组


 
 function JCCMS_SQL($JCCMS_SQL,$x,$mozu) {
	 $JCCMS_SQL=explode("|-|",$JCCMS_SQL[$x]);
		switch($mozu){
			case 'JCCMS_SQL_id':$mozus =$JCCMS_SQL['0'];break;
			case 'JCCMS_SQL_type':$mozus =$JCCMS_SQL['1'];break;
			case 'JCCMS_SQL_name':$mozus =$JCCMS_SQL['2'];break;	
			case 'JCCMS_SQL_pic':$mozus =$JCCMS_SQL['3'];break;
			case 'JCCMS_SQL_playurl':$mozus =$JCCMS_SQL['4'];break;
			case 'JCCMS_SQL_time':$mozus =$JCCMS_SQL['5'];break;		
			default:$mozus = $JCCMS_SQL['0'];break;
			}	 
			 echo $mozus;
 }
 function JCCMS_SQLL($JCCMS_SQL,$x,$mozu) {
	 $JCCMS_SQL=explode("|-|",$JCCMS_SQL[$x]);
		switch($mozu){
			case 'JCCMS_SQL_id':$mozus =$JCCMS_SQL['0'];break;
			case 'JCCMS_SQL_type':$mozus =$JCCMS_SQL['1'];break;
			case 'JCCMS_SQL_name':$mozus =$JCCMS_SQL['2'];break;	
			case 'JCCMS_SQL_pic':$mozus =$JCCMS_SQL['3'];break;
			case 'JCCMS_SQL_playurl':$mozus =$JCCMS_SQL['4'];break;
			case 'JCCMS_SQL_time':$mozus =$JCCMS_SQL['5'];break;		
			default:$mozus = $JCCMS_SQL['0'];break;
			}	 
			 return $mozus;
 } 
  function JCCMS_type($type) {
/*********视频分类名称设置开始**********/
	switch($type){
	case '1':$C_T_2_type='1';$C_T_2_name = '国产自拍';break;
	case '2':$C_T_2_type='2';$C_T_2_name = '欧美极品';break;
	case '3':$C_T_2_type='3';$C_T_2_name = '日韩无码';break;
	case '4':$C_T_2_type='4';$C_T_2_name = '日韩有码';break;
	case '5':$C_T_2_type='5';$C_T_2_name = '中文字幕';break;
	case '6':$C_T_2_type='6';$C_T_2_name = '动漫精品';break;
	case '7':$C_T_2_type='7';$C_T_2_name = '极骚萝莉';break;
	case '8':$C_T_2_type='8';$C_T_2_name = '人妖视频';break;
	case '9':$C_T_2_type='9';$C_T_2_name = '重咸口味';break;
	case '10':$C_T_2_type='10';$C_T_2_name = '强奸乱伦';break;
	case '11':$C_T_2_type='11';$C_T_2_name = '三级自慰';break;
	case '16':$C_T_2_type='16';$C_T_2_name = '独家擂台格斗';break;
	case '17':$C_T_2_type='17';$C_T_2_name = '辣椒GIGA';break;
	case '18':$C_T_2_type='18';$C_T_2_name = 'HEYZO';break;	
	case '19':$C_T_2_type='19';$C_T_2_name = '独家DMM';break;
	case '20':$C_T_2_type='20';$C_T_2_name = 'HEY诱惑';break;	
	case '21':$C_T_2_type='21';$C_T_2_name = '童颜巨乳';break;	
	case '22':$C_T_2_type='22';$C_T_2_name = '高潮喷吹';break;	
	case '23':$C_T_2_type='23';$C_T_2_name = '激情口交';break;	
	case '24':$C_T_2_type='24';$C_T_2_name = '绝美少女';break;	
	case '25':$C_T_2_type='25';$C_T_2_name = '首次亮相';break;	
	default:$C_T_2_type='1';$C_T_2_name = '国产自拍';break;							
		}
		echo $C_T_2_name;
/*********视频分类名称设置结束**********/
 }
 
$shipinid=$C_T_3;
 include('./template/'.$web_moban.'/detail.html');
?>







