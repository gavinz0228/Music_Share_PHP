<?php
if($_GET["cmd"]=="save")
{
$con=$_POST["content"];
$path=getcwd();
$file=fopen($path."//source_code.cpp","w+");
fwrite($file,$con);
fclose($file);
}
?>
<form action="?cmd=save" method="post">
<textarea name="content" id="content" row="30" col="200" ></textarea>
<input type="submit" text="save"/>
</form>
