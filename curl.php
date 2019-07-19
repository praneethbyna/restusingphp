<?php
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,'localhost/rest/json.php');
curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);

$res=curl_exec($curl);
$json=json_decode($res,true);
echo $res."</br>";
//echo $json['English'];

echo $json['English']['set2'];
var_dump($json['English']);
print_r($json['English']);


curl_close($curl);

?>





