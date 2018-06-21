<?php

function makecurl($api,$data=array())
{


// use key 'http' even if you send the request to https://...
$options = array(
);
$ds1=array();
$ds1['header']="Content-type: application/x-www-form-urlencoded\r\n";
$ds1['method']="POST";
$ds1['content']=http_build_query($data);
$options['http']=$ds1;
    
$context  = stream_context_create($options);
$result = file_get_contents($api, false, $context);
if ($result === FALSE) { /* Handle error */ }
return $result;
}
$last_updated_id=0;
function getupdates()
{

 $last1=$GLOBALS['last_updated_id'];
 $last1=$last1+1;
 $d1=array();
 $d1['offset']=$last1;
 
 $url="
https://api.telegram.org/bot";
$s1="385642393:AAFDS7I1sl7v3TxDwfvlSfY407tL1ST3tHU";

 $d3=makecurl($url.$s1."/getUpdates",$d1);

$d2=count($d3);
if ($d2 > 0)
{

foreach($d3 as $update)
{
$GLOBALS['last_updated_id']=$update->update_id;
$chat_id=$update->message->chat->id;

$text="Hello World!";
$d4=array();
$d4['chat_id']=$chat_id;
$d4['text']=$text;
make_curl($url.$s1."/sendMessage",$d4);
}
}
sleep(5);
getupdates();
}
function t1($api,$data)
{


$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $api);
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch,CURLOPT_POSTFIELDS, $data); 

$response = curl_exec( $ch );
curl_close($ch);
return $response;
}


function sph($api,$data,$size)
{
    
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
"Content-Type:multipart/form-data"));
    curl_setopt($ch,CURLOPT_URL, $api);
  
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER,TRUE);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_INFILESIZE, $size);
    $response = curl_exec( $ch );
    curl_close($ch);
    return $response;
 }

function getme($d3)
{

 
 
 $url="https://api.telegram.org/bot";
$s1="420718149:AAGoHj5OFs95R8vtVQRn5FbaxDPbfuEfqws";
$s2=$url.$s1."/getUpdates";
  $last1=$GLOBALS['last_updated_id'];
 $last1+=1;
 $d1='offset'.'='.$last1;
 
 $z1="https://hooks.zapier.com/hooks/catch/686317/8l3zb8/";

$p="image/10.jpg";
$p2="https://naserphp10.herokuapp.com/";
$p1=$p2.$p;
$s=filesize($p);
$d8=array();
if($d3=="photo")
{
if(!$_FILES['photo']['error']){
$sd2=$_FILES['photo']['name'];
$sd3=$_FILES['photo']['size'];
$new_file_name = strtolower($_FILES['photo']['tmp_name']);
$uploaddir = 'image/';
$uploadfile = $uploaddir.$new_file_name;

move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);
$message = 'Congratulations';

$p2="https://naserphp10.herokuapp.com/";
$p1=$p2.$uploadfile;

$d8['chat_id']="140277419";
$d8['photo']=$p1;
$d8['caption']=$sd2;
$text=$message;
$s=$sd3;
}
else
{
$text="fail";
}

}
else
{
$update=array();
$update=json_decode($d3,true);

$text="hello world";
$chat_id="140277419";

$t11=$update['text'];

if($t11==null){

$GLOBALS['last_updated_id']=$update['update_id'];
$chat_id1=$update['message'];
$chat_id2=$chat_id1['chat'];
$chat_text=$chat_id1['text'];

$chat_id=$chat_id2['id'];

$d8['chat_id']=$chat_id;
$d8['photo']=$p1;
$d8['caption']="10 ";

$photo=$chat_id1['photo'];
if($photo==null){}
else {
foreach($photo as $item){
$fi1=$item['file_id'];
$fis=$item['file_size'];
}


$d6='file_id'.'='.$fi1;
$s3=$url.$s1."/getFile";
$d10=t1($s3,$d6);

$up1=array();
$up1=json_decode($d10,true);
$up2=$up1['result'];
$fip=$up2['file_path'];

 $url1="https://api.telegram.org/file/bot";
$s11=$url1.$s1."/".$fip;
$d11=array();
$d11['sendphoto']=$s11;
$de1=explode('/',$fip);
$de2=sizeof($de1);
$de2--;
$d11['name']=$de1[$de2];
$s21="https://hooks.zapier.com/hooks/catch/686317/8l2o5o/";

$d10=sph($s21,$d11,$fis);
var_dump(json_decode($d10,true));
file_put_contents('f3.txt',$d10);

}
}
else {
$text=$t11;

$chat_id="140277419";
}
}
var_dump( $chat_text);

echo $chat_id;

$d6='chat_id'.'='.$chat_id.'&'.'text'.'='.$text;
$s3=$url.$s1."/sendMessage";
$f1=t1($s3,$d6);
file_put_contents('f1.txt',$f1);

if($chat_text==null){}
else {
$z2='sendtext'.'='.$chat_text;

$zf1=t1($z1,$z2);
file_put_contents('f2.txt',$zf1);
}

$s4=$url.$s1."/sendPhoto";
$d10=sph($s4,$d8,$s);
var_dump(json_decode($d10,true));
file_put_contents('f3.txt',$d10);

}


function t2($u2){

$c = curl_init($u2);
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
//curl_setopt(... other options you want...)

$html = curl_exec($c);


curl_close($c);
return $html;
}
function s2(){


 $url="https://api.telegram.org/bot";
$s3="420718149:AAGoHj5OFs95R8vtVQRn5FbaxDPbfuEfqws";


$p2="https://naserphp10.herokuapp.com/";

$p3= "index.php";
$p4=$p2.$p3;

$d8=array();
$d8['url']=$p4;


$s4=$url.$s3."/setWebhook";
$d10=t1($s4,$d8);
var_dump(json_decode($d10,true));
file_put_contents('f3.txt',$d10);


}

function get2(){

$d41="https://t.me/iv?url=https://naserxna.heliohost.org/blog1/index13.html%26rhash=2da7ab2a004eb5";
$d43=$url.$s1."/photos/532580278782709019.jpg";
$d51="http://bit.ly/2uQZ8Bi";
$d42="https://naserxna.heliohost.org/blog1/index23.html";
$d61='chat_id'.'=140277419&message_id=301&';
$d63="<a&nbsp;href=&quot;".$d42."&quot;>naser</a>";
$a = htmlentities($d41);
$b = html_entity_decode($a);
$s3=$url.$s1."/editMessageText";
$d62='text'.'='.'[photo]'.'('.$d42.')'.'&'.'parse_mode'.'=Markdown';
$d6=$d61.$d62;
$d1=t1($s3,$d6);
file_put_contents('f2.txt',$d1);


$d6='file_id'.'='."AgADBAADG804G_EaZAcN5Nt2-p1De9dfXhkABP-jguh2gd2F_ykDAAEC";
$s3=$url.$s1."/getFile";
$d10=t1($s3,$d6);
file_put_contents('f4.txt',$d10);


}

function get1($d3){   
$url="https://api.telegram.org/bot";
$s1="420718149:AAGoHj5OFs95R8vtVQRn5FbaxDPbfuEfqws";
$s2=$url.$s1."/answerInlineQuery";  
 $update=array();
$update=json_decode($d3,true);


$query1=$update['inline_query'];
$query_id=$query1['id'];
$text=$query1['query'];
file_put_contents('test2.txt',$query_id.$text);


$output = explode(" ", $text);
$se1="http://www.podbean.com/site/Search/index?";
$b1="v=";
foreach($output as $value)
{
if ($value==" "){}
else
{
echo $value;
$b1=$b1.$value."+";
}}

if($b1=="v="){}
else
{
$se2=$se1.$b1;
$d2=t2($se2);
$dxa=array();
$dxa1=array();
$dxa2=array();

$dom = new DomDocument();
@$dom->loadHTML($d2);

$finder = new DomXPath($dom);


$node2 = $finder->query("//a[@class='tit']");
//$node3= $node2->query("//a[@href]");
//$node4= $node2->query("//a[@title]");
$tmp_dom = new DOMDocument(); 
$i=1;
foreach ($node2 as $node)     { 
 $href = $node->getAttribute('href');
  $dx=t2($href);
$dom1 = new DomDocument();
@$dom1->loadHTML($dx);$classname = 'pic';
$finder1 = new DomXPath($dom1);
$nodes = $finder1->query("//a[@class='pic']/img[@src]");
$n2=$i;
foreach($nodes as $node3){
$n1=$node3;}
$node21 = $finder1->query("//a[@class='title listen-now']");
foreach($node21 as $node21a){
 $title1= $node21a->getAttribute('title');
$dxa[$i]['title']=$title1;
$dxa[$i]['src']=$n1;
$i+=1;
}


//$node3= $node21->query("//a[@title]");



$node5 = $finder1->query("//a[@class='download']");
//$node31= $node5->query("//a[@href]");
$se4="https://www.podbean.com";
foreach ($node5 as $node1)     { 
 $href1 = $node1->getAttribute('href');  
$dx1=t2($se4.$href1);
$dom2 = new DomDocument();
@$dom2->loadHTML($dx1);
$classname = 'pic';
$finder2 = new DomXPath($dom2);
$node6 = $finder2->query("//a[@class='pull-right btn-download']");
//$node32= $node6->query("//a[@href]");
foreach($node6 as $node2){
 $href2 = $node2->getAttribute('href');
$dxa[$n2][u]= $href2;

if($i<=40){
$dxa1['type']="audio";
$dxa1['id']=(string)$n2;
$dxa1['audio_url']=$href2;
$dxa1['title']=$dxa[$n2]['title'];
array_push($dxa2,$dxa1);
//echo $href2;
//echo $title1;
}
$n2+=1;
}}}
$d82=json_encode($dxa2);

$d81='inline_query_id='.$query_id.'&'.'results='.$d82;


//make array for pic and url
$d11=t1($s2,$d81);
file_put_contents('test.txt',$d11);
}

}

function we1($url) {
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //Set curl to return the data instead of printi
curl_setopt($ch, CURLOPT_URL, $url);
$data = curl_exec($ch);
curl_close($ch);
return $data;
}

 
echo "hello world";


$ds1="image/";
$d1=file_get_contents('php://input');

echo "hello world";
$d2=$_FILES['photo']['name'];
$d4=$_FILES['photo']['type'];
$d5=$_FILES['photo']['size'];
$d6=$_FILES['photo']['tmp_name'];


$d3=$_POST['data'];
file_put_contents('name.txt',$d2);
file_put_contents('type.txt',$d4);
file_put_contents('size.txt',$d5);
file_put_contents('tmp.txt',$d6);
file_put_contents('f2.txt',$d1);
file_put_contents('f1.txt',$d3);



$ds2=$ds1.$d2;
move_uploaded_file($_FILES['photo']['tmp_name'],$ds2);

 $url="https://api.telegram.org/bot";
$s1="420718149:AAGoHj5OFs95R8vtVQRn5FbaxDPbfuEfqws";


$up1=json_decode($d3,true);

$p="image/test.jpg";
$p2="https://naserxna2.github.io/index.php";

$chat_id="140277419";
$u1=$up1['name'];
$d6='chat_id'.'='.$chat_id.'&'.'text'.'='.$u1;
$s3=$url.$s1."/sendMessage";
$f1=t1($s3,$d6);
file_put_contents('f2.txt',$f1);


if($d4=="application/zip")
{
file_put_contents('f4.txt',"yes");
$ds2=$ds1.$d2;
$p1=$p2.$ds2;
$s=filesize($ds2);
$d9=array();

$d9['chat_id']=$chat_id;
$d9['document']=$p1;
$d9['caption']=$d2;
$s4=$url.$s1."/sendDocument";


$d10=sph($s4,$d9,$s);
var_dump(json_decode($d10,true));
file_put_contents('f3.txt',$d10);
}
else
{
$ds2=$ds1.$d2;
$p1=$p2.$ds2;
$s=filesize($ds2);
$d8=array();

$d8['chat_id']=$chat_id;
$d8['photo']=$p1;
$d8['caption']=$d2;
$s4=$url.$s1."/sendPhoto";


$d10=sph($s4,$d8,$s);
var_dump(json_decode($d10,true));
}


?>