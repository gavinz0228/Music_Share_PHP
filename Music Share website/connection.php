<?php
class Connection
{

	public $con;
	function connection()
	{
		$con=mysql_connect("server","user id","password");
		return $con;
	}
}
class SongData extends Connection
{
	public $conn;
	public function __construct()
	{
		$this->conn=$this->connection();
		}
	function excute($query)
	{

		mysql_select_db("b4_12827442_gavin_music",$this->conn);
		return mysql_query($query,$this->conn);
		}
	function get_classes()
	{
		$records= $this->excute("select * from classes"); 
		return $records;
		}
	function add_song($name,$class,$singer,$tag,$url,$picurl,$time,$ip)
	{
		return $this->excute("insert into songs(s_name,s_class,s_singer,s_tag,s_url,s_picurl,s_shareby,s_sharetime,s_shareip)values('".$name."',".$class.",'".$singer."','".$tag."','".$url."','".$picurl."','','".$time."','".$ip."')");
		}
	function getSongById($id)
	{
		$url=mysql_fetch_array($this->excute("select s_url from songs where s_id=".$id));
		return $url["s_url"];
		}
	function getTypeById($id)
	{
		$url=mysql_fetch_array($this->excute("select c_name from classes where c_id=".$id));
		return $url["c_id"];
		}
	function add_playtimes($id)
	{
		$this->excute("update songs set s_playtimes = s_playtimes + 1");
		}
	function add_cantplay($id)
	{
		return $this->excute("insert into cantplay(s_id,s_sendtime,s_sendby)values(".$id.",'".date("Y-m-d H:i:s")."','')");
		}
	function close()
	{
		mysql_close($this->conn);}
	
	}
?>