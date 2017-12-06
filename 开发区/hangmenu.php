<?php
	function createMenu($data){
		$appid="wx2d2825d15dd333c1";
		$appsecret="5f8295fae991fc4c5a77664063b23ce8";









		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$ACCESS_TOKEN);
		echo $ACCESS_TOKEN;
		curl_setopt($ch, CULOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, , "POST");
	}
>