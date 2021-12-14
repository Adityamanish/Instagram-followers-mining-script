<?php
date_default_timezone_set('Asia/Kolkata');

function dec($data){
          
    
    $iv=hex2bin('e3a115d2401e1a8deb510197757aa74b');
   
   
                     $key=hex2bin('0729993df84dbf6e616541491793daef1ae2c7eca1ae12bf90bc3cce24935df2');
                     $decode = openssl_decrypt (base64_decode($data), 'aes-256-cbc',$key, 1,$iv); 
             
               return $decode;
           }
  
  
           function enc($data){
            
      
            $iv=hex2bin('e3a115d2401e1a8deb510197757aa74b');
           
           
                             $key=hex2bin('0729993df84dbf6e616541491793daef1ae2c7eca1ae12bf90bc3cce24935df2');
                             $encode = base64_encode(openssl_encrypt ($data, 'aes-256-cbc',$key, 1,$iv)); 
                     
                       return $encode;
                   }
  
                   function RandomNumber($length){
                      $str="";
                      for($i=0;$i<$length;$i++){
                      $str.=mt_rand(0,9);
                      }
                      return $str;
                      }
                      
                      
                      function rando($length) {
                          $characters = '1234567890abcdefghijklmnopqrstuvwxyz';
                          $charactersLength = strlen($characters);
                          $randomString = '';
                          for ($i = 0; $i < $length; $i++) {
                              $randomString .= $characters[rand(0, $charactersLength - 1)];
                          }
                          return $randomString;
                      }
                      

$x16=rando(16);



$a1 = RandomNumber(2);
$a2 = RandomNumber(2);
$a3 = RandomNumber(2);
$a4 = RandomNumber(2);
$ipz = $a1.'.'.$a2.'.'.$a3.'.'.$a4;



	

$op=readline("\e[1;91m[\e[1;97m+\e[1;91m]\e[0mInput 1 for follow 2 for like: ");
$id=readline("\e[1;91m[\e[1;97m+\e[1;91m]\e[0mInput user-id for follow or media-id for likes: ");
$url1='https://myappdomaingroup.site/api/TNxtqEJKcc';

 $headers1=array('Content-Type: application/json; charset=utf-8',
'apid: tpaaa34156jh31bkdf7k19vdxf',
'appv: 3.9',
'secret: MzI0ZjIzQmRmZHNmNDVmZ3NhZGQ9PQ==',
'signature: EfTFjyY20sHMS4hstF5Dc3cFX1wsuuXCqavKLfy7Vm5NjEb/15aOhuvJMyWOmBXwurm7OXHmCnzOs9tkGEAOTTXwXmBuvy99wsfQQSSq9wPMDhjbShK5Sao+Ivh+05Sumtyq0ev3LTzE9ZMDTVoymo7KZCLewze678r4dt0K+dJpowb9BzJQY08JXtwQK8bRl3GAKP8OVWne+2Pb9zgFqaxlBurnFX1qMcZkPsvkTZPScWupm6VS2mVMfGTkb1s02/Bf4Y1r9g9d8RKItFt2MPd80VZbQoEb4JmQmMrrwjBweHAMRIQv6bbne+HQ7KnumLzNKf4Ico7Gx/s/jwxfuJuYghvPHojTzkIbt8IW6N6jPTWSZZfTwfP1cRZjLOQPKxRRNTFYUpXqxXEY9l+6DgVox+zA2vfGnN+ndP1D1NnZYLFbfzk0jhLadRSTXh+feKIs1ogmkg0udMiEMwsNK/HW7iK6AX8ob0hiif66fy750S529DMkDZwce8EOshDm5iFHrcbbyPq9sjDtrrnXJgsMOK4dveoNoAMmi938ajCUm9pppzjXf7R1lchqMdyvXr/9SZ0oDehRWJos/+RjfRmRs5WdZzXkSv2aQORmfxfExji4yTjz7ZQzXNTWXrwMVeRw3djLyeKIwh+xAoOuAlxH0o68r9bhlNZ1/CbiJfc=',
'secret: MzI0ZjIzQmRmZHNmNDVmZ3NhZGQ9PQ==',
'User-Agent: Instagram 154.0.0.32.123 Android (24/7.0;480dpi;1080x1794;HUAWEI;EVA-L19;HWEVA;hi3650;en_US)',
'Host: myappdomaingroup.site',
'Accept-Encoding: gzip, deflate',
'X-Forwarded-For: '.$ipz.'');




$i9=RandomNumber(9);
$x12=rando(12);


$data='{"MCmBnRTepay":"'.$x16.'","DqaJKmKjaqh":"'.$i9.'","iimrCNzGztA":"'.$x12.'","SyKkePkdxhn":"en_US","THFgzASbqkr":"","JCaNgyLfNGT":461}';
 $d=enc($data);


 


$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $d); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);


  $d=dec($data);

 
 


$json=json_decode($d , 1);
 $tok=$json['JVeCFZgvuY'];

$t=$json['BlbbfzthzA'];

$headers2=array('Content-Type: application/json; charset=utf-8',
'apid: tpaaa34156jh31bkdf7k19vdxf',
'appv: 3.9',
'secret: MzI0ZjIzQmRmZHNmNDVmZ3NhZGQ9PQ==',
'signature: EfTFjyY20sHMS4hstF5Dc3cFX1wsuuXCqavKLfy7Vm5NjEb/15aOhuvJMyWOmBXwurm7OXHmCnzOs9tkGEAOTTXwXmBuvy99wsfQQSSq9wPMDhjbShK5Sao+Ivh+05Sumtyq0ev3LTzE9ZMDTVoymo7KZCLewze678r4dt0K+dJpowb9BzJQY08JXtwQK8bRl3GAKP8OVWne+2Pb9zgFqaxlBurnFX1qMcZkPsvkTZPScWupm6VS2mVMfGTkb1s02/Bf4Y1r9g9d8RKItFt2MPd80VZbQoEb4JmQmMrrwjBweHAMRIQv6bbne+HQ7KnumLzNKf4Ico7Gx/s/jwxfuJuYghvPHojTzkIbt8IW6N6jPTWSZZfTwfP1cRZjLOQPKxRRNTFYUpXqxXEY9l+6DgVox+zA2vfGnN+ndP1D1NnZYLFbfzk0jhLadRSTXh+feKIs1ogmkg0udMiEMwsNK/HW7iK6AX8ob0hiif66fy750S529DMkDZwce8EOshDm5iFHrcbbyPq9sjDtrrnXJgsMOK4dveoNoAMmi938ajCUm9pppzjXf7R1lchqMdyvXr/9SZ0oDehRWJos/+RjfRmRs5WdZzXkSv2aQORmfxfExji4yTjz7ZQzXNTWXrwMVeRw3djLyeKIwh+xAoOuAlxH0o68r9bhlNZ1/CbiJfc=',
'Authorization: Bearer '.$tok,
'Accept: application/json, text/json, text/x-json, text/javascript, application/xml, text/xml',
'User-Agent: Instagram 154.0.0.32.123 Android (24/7.0;480dpi;1080x1794;HUAWEI;EVA-L19;HWEVA;hi3650;en_US)',
'Host: myappdomaingroup.site',
'Accept-Encoding: gzip, deflate',
'X-Forwarded-For: '.$ipz.'');




$op = preg_replace('/\s+/', '', $op);


$id = preg_replace('/\s+/', '', $id);


$green = "\e[1;32m";
    $blue = "\e[1;34m";
    $red = "\e[1;31m";
    $white = "\33[37;1m";
    $yellow = "\e[1;33m";
    $cyan = "\e[1;36m";
    $purple = "\e[1;35m";
    $gray = "\e[1;30m";  
    $res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[1;31m";
$red2="\033[1;31m";
$green2="\033[1;32m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";

function getcoin(){
    global $headers2;
    global $url1;
$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);

 $d=dec($data);

$json=json_decode($d , 1);


return $zd=$json['apFFNfYNwA'];
}

// curl post
function http_post($url, $data){
    global $headers2;



$ch=curl_init();
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_URL,$url); 
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
 $data = curl_exec($ch); 
$err = curl_error($ch); curl_close($ch);


return $d=dec($data);
    }
    function http_get($url1){
        global $headers2;

    $ch=curl_init();
    curl_setopt($ch, CURLOPT_HEADER,0);
    curl_setopt($ch, CURLOPT_URL,$url1); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true); 
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
    curl_setopt($ch, CURLOPT_ENCODING, 'gzip'); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
     $data = curl_exec($ch); 
    $err = curl_error($ch); curl_close($ch);
    
    return    $d=dec($data);
    
    }
system("clear");



echo "$red2
██████╗░███████╗██████╗░\e[1;33m
██╔══██╗██╔════╝██╔══██╗
██║░░██║█████╗░░██████╦╝
██║░░██║██╔══╝░░██╔══██╗\e[0;32m
██████╔╝███████╗██████╦╝
╚═════╝░╚══════╝╚═════╝░\n";


echo "$putih2 STATUS SCRIPT :$red2 V2 PREMIUM         $putih2 SERVER |$yellow2 ONLINE
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";
echo $putih2." DATE ".$green2.date("d.m.Y ").$putih2."  TIME ".$green2.date("H:i:s");
echo "\n━━━━━━━━━━━━━━━━━━━━\033[1;31m404\033[1;32m━━━━━━━━━━━━━━━━━━━━━━━━━━";
echo $baner2 = "
$putih2 CREATOR        :$green2 Aditya sunny (mani)
$putih2 INSTAGRAM      :$green2 Aditya sunny
$putih2 POWERED BY     :$green2 Adimani SERVER
$putih2 TOOL INFO      :$green2 TOP FOLLOW MINER⭐
";
echo $blue2."━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━\n";

 while(true) {
$run = http_get('https://myappdomaingroup.site/api/tasks?t=1');
$json = json_decode($run,true);


$Tasksid=$json['Tasks'][0]['TaskId'];
$MediaId=$json['Tasks'][0]['MediaId'];
$Status=1;
$TypeId=$json['Tasks'][0]['TypeId'];
$PhotoUrl=$json['Tasks'][0]['PhotoUrl'];
$InstagramUsername=$json['Tasks'][0]['InstagramUsername'];

$run=http_post('https://myappdomaingroup.site/api/tasks',enc('{
	"TaskId": "'.$Tasksid.'",
	"Status": '.$Status.',
	"TypeId": "'.$TypeId.'",
	"PhotoUrl": "$",
	"InstagramUsername": "'.$InstagramUsername.'",
	"MediaId": "'.$MediaId.'"
}'));
$json = json_decode($run,true);
$dd=$json['Coins'];


echo $yellow."Total COINS : ".$red.$dd.PHP_EOL;
echo $white."=========================================================\n";
echo "\r                                  \r";
  echo "\r\033[1;33mPlease wait..."."\033[1;36m[0]  ";
echo "\r                                   \r";

$run=http_post('https://myappdomaingroup.site/api/ref',enc('{"Hash":"603D9D1D"}'));
if($dd>=40 && $op==2){
$run=http_post('https://myappdomaingroup.site/api/Work',enc('{"TypeId":"'.$op.'","Count":11,"MediaId":"'.$id.'","InstagramUsername":"'.$id.'","PhotoUrl":"https:\/\/instagram.fccu3-1.fna.fbcdn.net\/v\/t51.2885-15\/e35\/s150x150\/264420143_435496831548995_8076441957316773167_n.jpg?_nc_ht=instagram.fccu3-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=vWrY6qsKOOAAX9ZgJLH&edm=APU89FABAAAA&ccb=7-4&oh=00_AT_GHVnpr10j1bCs8Dx5unohvTyp_1DgOtu8It7P_Nmpfw&oe=61B616B1&_nc_sid=86f79a","StartCount":-1,"Uri":"eyJjb21tZW50c0NvdW50IjowLCJpZCI6MCwiaW1hZ2UiOiJodHRwczovL2luc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXQvdi90NTEuMjg4NS0xNS9lMzUvczE1MHgxNTAvMjY0NDIwMTQzXzQzNTQ5NjgzMTU0ODk5NV84MDc2NDQxOTU3MzE2NzczMTY3X24uanBnP19uY19odFx1MDAzZGluc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXRcdTAwMjZfbmNfY2F0XHUwMDNkMTExXHUwMDI2X25jX29oY1x1MDAzZHZXclk2cXNLT09BQVg5WmdKTEhcdTAwMjZlZG1cdTAwM2RBUFU4OUZBQkFBQUFcdTAwMjZjY2JcdTAwM2Q3LTRcdTAwMjZvaFx1MDAzZDAwX0FUX0dIVm5wcjEwajFiQ3M4RHg1dW5vaHZUeXBfMURnT3R1OEl0N1BfTm1wZndcdTAwMjZvZVx1MDAzZDYxQjYxNkIxXHUwMDI2X25jX3NpZFx1MDAzZDg2Zjc5YSIsImltYWdlSGQiOiJodHRwczovL2luc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXQvdi90NTEuMjg4NS0xNS9lMzUvMjY0NDIwMTQzXzQzNTQ5NjgzMTU0ODk5NV84MDc2NDQxOTU3MzE2NzczMTY3X24uanBnP19uY19odFx1MDAzZGluc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXRcdTAwMjZfbmNfY2F0XHUwMDNkMTExXHUwMDI2X25jX29oY1x1MDAzZHZXclk2cXNLT09BQVg5WmdKTEhcdTAwMjZlZG1cdTAwM2RBUFU4OUZBQkFBQUFcdTAwMjZjY2JcdTAwM2Q3LTRcdTAwMjZvaFx1MDAzZDU5MDNjMzYwNTM2NWFmZDAzZmNjNWQ3ZTg3MTNhZmVlXHUwMDI2b2VcdTAwM2Q2MUI2MDdEMFx1MDAyNl9uY19zaWRcdTAwM2Q4NmY3OWEiLCJpbnN0YWdyYW1Vc2VybmFtZSI6InNob21lZGViYXlhbiIsImxpa2VzQ291bnQiOjYsIm1lZGlhSWQiOjI3MjQxMjUwNTQ5OTI2OTk1MDgsInBrIjozNDQyMTg3MjQ5LCJzaG9ydGNvZGUiOiJDWE9DVTN5bE5CMCJ9","CurrencyId":0}'));
$d="\r\033[1;33mSUCCESSFULLY SENT 10 LIKES !!!! CHECK YOUR PROFILE..."."\033[1;36m[0]";
}
else
if($dd>=80 && $op==1){
    $run=http_post('https://myappdomaingroup.site/api/Work',enc('{"TypeId":"'.$op.'","Count":11,"MediaId":"'.$id.'","InstagramUsername":"'.$id.'","PhotoUrl":"https:\/\/instagram.fccu3-1.fna.fbcdn.net\/v\/t51.2885-19\/s150x150\/247951313_930015617942075_1213263224700742013_n.jpg?_nc_ht=instagram.fccu3-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=qVy9J9jIsFAAX-nwTb3&edm=ABfd0MgBAAAA&ccb=7-4&oh=4745dfb9f2f1b629bbe29f4c7ec66294&oe=61B91087&_nc_sid=7bff83","StartCount":-1,"Uri":"eyJjb21tZW50c0NvdW50IjowLCJpZCI6MCwiaW1hZ2UiOiJodHRwczovL2luc3RhZ3JhbS5mY2N1My0xLmZuYS5mYmNkbi5uZXQvdi90NTEuMjg4NS0xOS9zMTUweDE1MC8yNDc5NTEzMTNfOTMwMDE1NjE3OTQyMDc1XzEyMTMyNjMyMjQ3MDA3NDIwMTNfbi5qcGc\/X25jX2h0XHUwMDNkaW5zdGFncmFtLmZjY3UzLTEuZm5hLmZiY2RuLm5ldFx1MDAyNl9uY19jYXRcdTAwM2QxMTFcdTAwMjZfbmNfb2hjXHUwMDNkcVZ5OUo5aklzRkFBWC1ud1RiM1x1MDAyNmVkbVx1MDAzZEFCZmQwTWdCQUFBQVx1MDAyNmNjYlx1MDAzZDctNFx1MDAyNm9oXHUwMDNkNDc0NWRmYjlmMmYxYjYyOWJiZTI5ZjRjN2VjNjYyOTRcdTAwMjZvZVx1MDAzZDYxQjkxMDg3XHUwMDI2X25jX3NpZFx1MDAzZDdiZmY4MyIsImltYWdlSGQiOiIiLCJpbnN0YWdyYW1Vc2VybmFtZSI6InNob21lZGViYXlhbiIsImxpa2VzQ291bnQiOjAsIm1lZGlhSWQiOjM0NDIxODcyNDksInBrIjozNDQyMTg3MjQ5LCJzaG9ydGNvZGUiOiIifQ==","CurrencyId":0}'));
    $d="\r\033[1;33mSUCCESSFULLY SENT 10 FOLLOWERS !!!! CHECK YOUR PROFILE..."."\033[1;36m[0]";

}
else{
    $d="\r\033[1;33mPlease wait..."."\033[1;36m[0]";

}
echo "\r                                  \r";
  echo $d;
echo "\r                                   \r";
echo $green.getcoin().PHP_EOL;

}
