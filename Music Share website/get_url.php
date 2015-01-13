<?php
require("connection.php");
$gurl= new SongData();
$id=trim($_GET["sid"]);
if(is_numeric($id)==true)
{	
	$gurl->add_playtimes($id);
	echo $gurl->getSongById($id);
	$gurl->close();
	
	}
else
{
	echo "illegal opreation";
	}
?>