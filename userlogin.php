<?php
	
	$content = file_get_contents('php://input');
	$assArr = json_decode($content, true);

	$usrname=$assArr['username'];
	$usrpwd=$assArr['password'];
	$usrtoken=$assArr['usertoken'];

	if($usrname=='test'&&$usrpwd=='testuser')
	{
		$arr2 = array('requeststate'=>array('returncode'=>'10000'),'user'=>array('username'=>'test','usertoken'=>'token'),'latest'=>array('latest'=>'test'),'hottest'=>array('hottest'=>'test'));
	}

	if ($usrtoken=='token'&&$usrname=='test') {
		$arr2 = array('requeststate'=>array('returncode'=>'10000'),'user'=>array('username'=>'autologin','usertoken'=>'token'),'latest'=>array('latest'=>'test'),'hottest'=>array('hottest'=>'test'));
	}
	

	$arr2 = json_encode($arr2);

	if(($usrname=='test'&&$usrpwd=='testuser')||($usrtoken=='token'&&$usrname=='test'))
		echo $arr2;
	else
		echo "false";
?>