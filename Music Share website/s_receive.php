<?php
$name=trim($_POST["name"]);
$class=trim($_POST["type"]);
$singer=trim($_POST["singer"]);
$tag=trim($_POST["tag"]);
$url=strtolower($_POST["url"]);
$picurl=trim(strtolower($_POST["picurl"]));
$ip= $_SERVER["REMOTE_ADDR"];
$time=date("Y-m-d H:i:s");
/*
echo $name.$class.$tag.$url.$picurl.$ip.date("Y-m-d H:i:s");
*/
if($name!=""&&strpos($url,".")==true&&strlen($url)>=5){
	include("connection.php");
	$add= new SongData();
	if($add->add_song($name,$class,$singer,$tag,$url,$picurl,$time,$ip)==true)
	{
		echo "Your song has been shared successfully! Thank you!";
	}else
	{
		echo "Sorry Fail to add your song!";
		}
	$add->close();
}
else
{
	echo "fail";
	}
?>

