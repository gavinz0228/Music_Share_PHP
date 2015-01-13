<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gavin's Homepage. Share your works.</title>
<script type="text/javascript" src="jquery/jquery.min.js"></script>
<script type='text/javascript' src='jquery/jquery.simplemodal.js'></script>
<script type='text/javascript' src='jquery/basic.js'></script>
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
$(document).ready(function(){
	var flag=0;
	$(document).scroll(function(){
		flag=1;
		$("#top").animate({top:parseInt($(document).scrollTop())+"px"},0);})
	if(flag==0){
		$("body").scroll(function(){
		flag=1;
		$("#top").animate({top:parseInt($(document).scrollTop())+"px"},0);
		
		;})
		}
});
</script>

</head>

<body>
<div id="top">
  <div id="top_context"><span id="logo_font">Gavin's Homepage</span> 
  		
        <div id="share">
	<script type="text/javascript" charset="utf-8">
	(function(){
	  	var _w = 32 , _h = 32;
  		var param = {
    	url:location.href,
    	type:'1',
    	count:'', 
    	appkey:'3325010326', 
    	title:'', 
    	pic:'', 
    	ralateUid:'1352685357', 
		language:'zh_cn', 
    	rnd:new Date().valueOf()
  	}
  	var temp = [];
  	for( var p in param ){
    temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
  	}
  	document.write('<iframe allowTransparency="true" frameborder="0" style="margin-top:1px;" scrolling="no" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
	})()
	</script>
	<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.facebook.com/100003130963955&send=false&layout=standard&width=400&show_faces=false&action=like&colorscheme=light&font&height=30" scrolling="no" frameborder="0" style="border:none;overflow:hidden;width:200px;height:30px;margin-top:10px;;" allowTransparency="true"></iframe>
	    <a href="https://twitter.com/share"  class="twitter-share-button" data-url="http://www.setupcool.com" data-via="gavinz0228" data-size="medium" data-count="none">Tweet</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="http://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
    <div id="player">
     <div id="player_font">Music Player</div>
     <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="220" height="30">
	<param name="movie" value="player.swf?mp3=&autostart=0" />
	<param name="quality" value="high" />
	<param name="WMode" value="Transparent">
	<embed src="player.swf?mp3=&autostart=0" width="220" height="30" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" wmode="transparent" ></embed>
	</object>
    </div>
     </div></div>
<div id="Context">
	<div id="Menu">
    	<div class="m_item_selected" style="margin-left:20px;"><a >Home</a></div>
   	  <div class="m_item"><a href="#" onclick="$('#sharemusic').modal()">Share Music</a></div>
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
var pic_width=1000;
var num= $("#pics li").length;
var wid=(num*pic_width)+"px";
var busy=0;
$("#pic_list").animate({width:wid});
var n_n=0;
function go(i)
{ 
	if(busy==0)
	{
		busy=1;
		$(".n_list_div").removeClass("n_list_item_selected");
		$("#n"+i).addClass("n_list_item_selected");
		var gap=(-i*pic_width)+"px";
		$("#pic_list").animate({marginLeft:gap},function(){busy=0;});
		}
	
}
function gonext()
{
	if (n_n<num)
	{go(n_n);
	 n_n=n_n+1;
		}
		else
		{n_n=0;
		 go(n_n);}
	}
$("#n0").addClass("n_list_item_selected");
var tmr= window.setInterval("gonext()",3000);


for(var i=0;i<num;i++)
{
	$("#n_list").html("<div class='n_list_div' id='n"+ i +"'>"+ (i+1) +"</div>"+$("#n_list").html());
}

$("#n_list div").each(function(i){
	$("#n"+i).mouseover(function(){
		go(i)
	});
});

</script>
    </div>

    <div id="main">
    	<div id="sort">
         All Most Popular Jazz Pop Blues Folk Rock Other
        </div>
        <div id="list">
        	<div class="s_item">
            	<img src="Pictures/1.png" />
                <a href="#">Play now</a><a href="#">Add to</a>
            </div>
            <div class="s_item"></div>
            <div class="s_item"></div>
            <div class="s_item"></div>
            <div class="s_item"></div>
            <div class="s_item"></div>
            <div class="s_item"></div>
            <div class="s_item"></div>
        </div>
    </div>
	
    </div>
<div id="foot">
</div>



<div id='sharemusic' >
	<span style=" margin-top:30px; font-family:Arial, Helvetica, sans-serif ; font-size:28px; color:white;">Share with us! </span>
	<hr/>
	<form id="shareform" name="sharefrom" method="post" action="">
		<p>Song's Nmae: 
		  <input type="text" name="sname" id="sname"  size="30"/></p>

		<p>Song's Type: 
	  <select name="select" id="select" style="width:20px" ></select></p>
		<p>	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tags:
          <input type="text" name="stag" id="stag"  size="20"/></p>
		<p> Picture's URl:
    <input type="text" name="spicurl" id="spicurl"  size="50"/></p>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Your ip:<br/>Thank you for shareing!</p>
    </form>
</div>
<div id="aboutme" style="display:none">
aboutme
</div>
</body>
</html>
