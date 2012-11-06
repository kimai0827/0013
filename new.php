<?php
	//http://emaken.com/sae/akizuki/new.php?num=3
	$num = $_GET['num'];
	$num0 = 0;
	$num1 = 1;


//XMLデータ取得用ベースURL
$req = "http://shokai.herokuapp.com/feed/akizuki.rss";

//XMLファイルをパースし、オブジェクトを取得
$xml = simplexml_load_file($req)
or die("XMLパースエラー");
	
	while( $num > 0){
		$ret .= mb_substr("$num1.".$xml->channel->item[$num0]->title." ", 0, 30, UTF8);
		$ret .= " ";
		$num0++;
		$num1++;
		$num--;
	}

echo $ret;
echo " by Akizuki & Hashimotoshokai";

?>
