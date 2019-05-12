<?php

if (!file_exists('madeline.php')) {
    copy('https://phar.madelineproto.xyz/madeline.php', 'madeline.php');
}
include 'madeline.php';

$MadelineProto = new \danog\MadelineProto\API('session.madeline');
$MadelineProto->start();
$time=date("H:i",strtotime("2 hour"));
$kun=date("d",strtotime("2 hour"));
$input = ["🚫Spamlar: @SystemUzBot","АВТО🤖ОТВЕТ","Admin","CrEaTor","АВТО🤖ОТВЕТ ","24 soat ONLINE","Onajonim Jannatim","Hozir soat: $time","Allohim Onamni asra","@FatureNet_Uz_Bot_bot Admin"];
  $rand=array_rand($input);
  $text="$input[$rand]";
$nik = ["Abdurahim","#SystemUz","#Abdurahim| $time","Abdurahim ","Creator","Coder| $time","Abdurahim","soat $time","Best ","<php>"," Botmaker","Admin","SystemUz| $time","<Html>","Abdurahim","Coder","Awesome"];
$nikrand=array_rand($nik);
  $niktxt="$nik[$nikrand]";
$MadelineProto->account->updateProfile(['first_name'=>"$niktxt|$time",'about'=>" $text"]);
$MadelineProto->account->updateStatus(['offline' => false, ]);
$yil = date("Y", strtotime("2 hour"));
$sana = date("d/m/Y", strtotime("2 hour"));

?>
