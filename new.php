<?php
	//http://emaken.com/sae/akizuki/new.php?num=3
	$num = $_GET['num'];
	$num0 = 0;
	$num1 = 1;


//XML�f�[�^�擾�p�x�[�XURL
$req = "http://shokai.herokuapp.com/feed/akizuki.rss";

//XML�t�@�C�����p�[�X���A�I�u�W�F�N�g���擾
$xml = simplexml_load_file($req)
or die("XML�p�[�X�G���[");
	
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
