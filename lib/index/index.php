<?php



$JCCMS_page=$C_T_3; //初始化页码 $type=$C_T_2;




 function JCCMS_chuli($type) {
	$data=file('./JCSQL/JCSQL_data/demoX/vod.JCSQL');
	$count=count($data)-1;
	$data_chuli="";
	for ($x=1; $x<=$count; $x++) {
		$data_arr=explode("|-|",$data[$x]);	$datas=$data_arr['1'];
		if($datas==$type){ $data_chuli .=$data_arr['0']."|-|".$data_arr['1']."|-|".$data_arr['2']."|-|".$data_arr['3']."|-|".$data_arr['4']."|-|".$data_arr['5'];$data_chuli .="\n";	 }	
	} 
	return    $JCCMS_SQL = array_values(array_filter( explode("\n", $data_chuli)));//处理之后的数据数组
	 	 
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





/*********列表分页数量直接输出开始**********/ 
 function JCCMS_page($JCCMS_page) { echo $JCCMS_page; }
/*********列表分页数量直接输出结束**********/ 





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
 
 
 
 
 
 
 
/*********友联设置开始**********/
  function Jccms_json_connection($html,$JCCMS_ROOT) {
		include_once('./class/class_txttest.php');
		$Jccms_json_connection = new  TxtDB($JCCMS_ROOT."connection/connection.json");$bankinfo = array();$user=$Jccms_json_connection::show("asc");$count=count($user);
		for ($x=0; $x<=$count-1; $x++) {
			$str = explode('|', $user[$x]);$ad_top_id=$str['0'];$ad_top_url=$str['1'];$ad_top_pic=$str['2'];$ad_top_md=$str['3'];$ad_top_time=$str['4'];$htmlyoulian=preg_replace('#链接#',$ad_top_pic,$html);echo $htmlyoulian=preg_replace('#标题#',$ad_top_url,$htmlyoulian);
		}					
 }
/*********友联设置结束 **********/






/*********zzz **********/
$zhibo=file('./assets/img/zhibo.png');
$zhiboapi=$zhibo['0'];
 $zhibourl=$zhiboapi."/top/json.php?page=1";

/*********zzz **********/


/*********引入模板开始**********/ 
 include('./template/'.$web_moban.'/index.html');
/*********引入模板结束**********/ 
 
?>
