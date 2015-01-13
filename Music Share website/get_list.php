
<?php
require("connection.php");
$order=trim($_GET["by"]);
$type=trim($_GET["type"]);
$page=trim($_GET["page"]);
if($page<=0||is_numeric($page)==false)
{
	$page=1;
	}

$data=new SongData();
$sql="select * from songs";
switch($order)
{
	case "time":
		$sql.=" order by s_id desc";
		break;
	case"type":
		if(is_numeric($type)==true){
			$sql.=" where s_class=".$type." order by s_id desc";
		}
		break;
		case "popular":
			$sql.=" order by s_playtimes desc";
			break;
		default:
			$sql.=" order by s_id desc";
		break;
	}

$allsongs=$data->excute($sql);
$item="";
$pcode="";
$pagesize=35;

$item_num=mysql_num_rows($allsongs);
$totalpage=$item_num/$pagesize;
if($item_num==0)
{
	$item="There is no such record in database.";
	}
	else{
		if($totalpage>1)
		{
			$sql.=" limit ". (($page-1)* $pagesize).",".$pagesize;
			
			}
		else
		{

		}
		$songs=$data->excute($sql);
			while($row=mysql_fetch_array($songs))
			{
				$item.="<div class='s_item'><div><img src='".$row["s_picurl"]."' /></div>";
				$item.="<div class='song_info'>".$row["s_name"]."<br/>".$row["s_singer"]."</div>";
				$item.="<div class='play_bar'><a href='javascript:void(0);' onclick='cantplay(".$row["s_id"].")'>";
				$item.="  <span class='play_error'> Can't Play</span> </a><a href='javascript:void(0);'  onclick='play(".$row["s_id"].")'>";
				$item.="<span class='play_botton'>Play Now</span></a></div></div>";
			}
		 //split pages
		 $lptext="< Last page";
		 $nptext="Next page>";
		 $num_code="";
		 if($item_num/$pagesize<=1)
		 {
			 $pcode=$lptext."| 1 | ".$nptext;
			 }
			 else
			 {
				 for($i=1;$i<=$totalpage;$i++)
				 {
					 if($i==$page)
					 {
						 $num_code.="| ".$i;
						 }
					 else
					 {
					 	$num_code.="| <a href='javascript:void(0)' onclick=getList('".$by."','".$type."','".$i."')>".$i."</a> ";
					 }
				}
				 if($totalpage>$page)
				 {
					 if($page==1){
						 $pcode=$lptext;
						 $pcode.=$num_code;
						 $pcode.=" | <a href='javascript:void(0)' onclick=getList('".$by."','".$type."','".($page+1)."')>".$nptext."</a>";
						 
						 }
						 else
						 {
				 			$pcode="<a href='javascript:void(0)' onclick=getList('".$by."','".$type."','".($page-1)."')>".$lptext."</a> ";
							$pcode.=$num_code;
							$pcode.=" | <a href='javascript:void(0)' onclick=getList('".$by."','".$type."','".($page+1)."')>".$nptext."</a>";
						 }
				 }
				 else
				 {
					 $pcode="<a href='javascript:void(0)' onclick=getList('".$by."','".$type."','".($page-1)."')>".$lptext."</a> | ";
					 $pcode.=$num_code;
					 $pcode.=" | ".$nptext;
					 }
				 }
$data->close();
	}
	echo "<div id='song_list'>";
	echo $item; 
	echo "</div>";
	echo "<div id='page_bar'>"; 
	echo $pcode;
	echo "</div>"
?>
