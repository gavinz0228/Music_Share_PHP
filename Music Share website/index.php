<?php
$u_ip = $_SERVER["REMOTE_ADDR"];
				require("connection.php");
				$types= new SongData();
				$classes=$types->get_classes();
				$selections="";
				$type_list="";
				while($row=mysql_fetch_array($classes))
				{
				
                 $selections.="<option value='". $row["c_id"]."'>" .$row["c_name"]. "</option>";
				 $type_list.=" <a style='color:gray' onclick=getList('type','".$row["c_id"]."','')  href='javascript:void(0);'>".$row["c_name"]."</a> | ";
                
				}
				$types->close();
                
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gavin's Homepage. Share your works.</title>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type='text/javascript' src='jquery/jquery.simplemodal.js'></script>
<script type="text/javascript" src="js/default.js"></script>
<!-- Contact Form CSS files -->
<link type='text/css' href='css/basic.css' rel='stylesheet' media='screen' />
<!-- IE 6 "fixes" -->
<!--[if lt IE 7]>
<link type='text/css' href='css/basic_ie.css' rel='stylesheet' media='screen' />
<![endif]-->
<!-- JS files are loaded at the bottom of the page -->
</body>
</html>
<link href="css/default.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
</script>

</head>

<body>
<div id="top">
  <div id="top_context"><span id="logo_font">Gavin's Homepage</span> 
  		
        <div id="share">

    </div>
    <div id="player">
     <div id="player_font">Music Player</div>
	<div id="music_player"><script type="text/javascript">document.write(player("","0"));</script></div>
    </div>
     </div></div>
<div id="Context">
	<div id="Menu">

    	<div class="m_item_selected" style="margin-left:20px;"><a >Home</a></div>
   	  <div class="m_item"><a href="#" onclick="openUpLoad()">Share Music</a></div>
        <div class="m_item"><a href="#" onclick="$('#about').modal()">About Me</a></div>
    </div>
	<div id="pic_show">
		<div id="n_list">
        </div>
    	<div id="pic_list">
        	<ul id="pics">
             <li><img src="Pictures/1.png"/></li>
             <li><img src="Pictures/2.jpg"/></li>
             <li><img src="Pictures/3.jpg"/></li>
             <li><img src="Pictures/4.jpg"/></li>
           </ul>
    	
        </div>
<script type="text/javascript">
</script>
    </div>

<div id="main">
    	<div id="sort">
         <? echo $type_list ?>
        <a href="javascript:void(0);" onclick="getList('time','','')" style="color:yellow">Newest</a> | <a href="javascript:void(0);" onclick="getList('popular','','')" style="color:red;">Most popular</a>
        <input type="text" name="textfield" id="textfield" />
    	<input type="submit" name="button" id="button" value="Search" />
    	</div>
        <div id="list">
        	

        </div>
</div>
	
    </div>
<div id="foot">Designed and Programmed by Gavin Zhang
  <br />
  Copyright@2012<br />
</div>



<div id="sharemusic" style="display:none">
	<span style=" margin-top:30px; font-family:Arial, Helvetica, sans-serif ; font-size:28px; color:white;">Share with us! </span>
	<hr/>
	<form id="shareform" name="sharefrom" method="post" action="">
		<table width="650" cellpadding="0" cellspacing="0" pa border="0" >
		  <tr>
		    <td width="151" class="std_left">Song's Name:
	        </td>
		    <td width="489"><input type="text" name="sname" id="sname"  size="30"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Singer:</td>
		    <td><input type="text" name="ssinger" id="ssinger"  size="30"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Song's URL:</td>
		    <td><input type="text" name="surl" id="surl"  size="50" value="http://"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Song's Type:</td>
		    <td><select name="stype" id="stype" >
				<? echo $selections ?>
                </select></td>
	      </tr>
		  <tr>
		    <td class="std_left">Tags:</td>
		    <td><input type="text" name="stag" id="stag"  size="30"/>
            <span style="font-size:12px;">(Split each one by Space, for example: &quot;seft-record High soft&quot;.)</span></td>
	      </tr>
		  <tr>
		    <td class="std_left">Picture's URL: </td>
		    <td><input type="text" name="spicurl" id="spicurl" value="http://" size="50"/></td>
	      </tr>
		  <tr>
		    <td class="std_left">Your ip: </td>
		    <td><span style="color:#DF626F">&nbsp;<?php echo $u_ip ?>&nbsp;</span>Thank you for shareing! </td>
	      </tr>
          <tr>
          	<td colspan="2"><div align="center">
          	  <input type="button" onclick="s_submit()" id="sbutton"  value="Share it!" />
          	</div></td>
          </tr>
	  </table>
</form>

</div>
<div id="aboutme" style="display:none">
aboutme
</div>
</body>
</html>
