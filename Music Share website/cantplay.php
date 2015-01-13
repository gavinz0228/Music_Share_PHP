<?php
require("connection.php");
$id=trim($_GET["sid"]);
if(is_numeric($id)==true)
{
	$cp=new SongData();
	if($cp->add_cantplay($id))
	{
		echo "success";}
		else
		{echo "fail";}
	$cp->close();
}
?>