var pic_width=1000;
var busy=0;
$(document).ready(function(){
	getList("","",1);
	var flag=0;
	$(document).scroll(function(){
		flag=1;
		$("#top").animate({top:parseInt($(document).scrollTop())+"px"},0);})
	if(flag==0){
		$("body").scroll(function(){
		flag=1;
		$("#top").animate({top:parseInt($(document).scrollTop())+"px"},0);});
		}


		var num= $("#pics li").length;	
		var wid=(num*pic_width)+"px";
		
		$("#pic_list").animate({width:wid});
		var n_n=0;
for(var i=0;i<num;i++)
{
	$("#n_list").html("<div class='n_list_div' id='n"+ i +"'>"+ (i+1) +"</div>"+$("#n_list").html());
	
}

$("#n_list div").each(function(i){
	$("#n"+i).mouseover(function(){
		go(i);
	});
});


$("#n0").addClass("n_list_item_selected");
var tmr= window.setInterval("gonext()",3000);

});
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



function player(autostart,url){
	var playercode="<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='220' height='30'>";
	playercode+="<param name='movie' id='song_url' value='player.swf?mp3="+url+"&autostart="+autostart+"' /> <param name='quality' value='high' />";
	playercode+="<param name='WMode' value='Transparent' />";
	playercode+="<embed src='player.swf?mp3="+url+"&autostart="+autostart+"' width='220' height='30' quality='high'; pluginspage='http://www.macromedia.com/go/getflashplayer' type='application/x-shockwave-flash' wmode='transparent' ></embed>";
	playercode+="</object>";
	return playercode;
		}

function play(id)
{
	$.ajax({
		type:"GET",
		url:"get_url.php?sid="+id,
		error:function(){
			alert("Network is unvaliable!");},
		success:function(e){
			if(e=="illegal operation"){
				alert("Illegal operation!");
				}
				else{
				$("#music_player").html(player(1,e));
				}
			}
	
	});
	
	}
	
function getList(condition,id,page)
{
	var requirement="";
	$("#list").html("<span style='color:white;margin-left:50px;'>Requiring data from the database,please wait...</span>");
		var pcode;
		if(page!=undefined)
		{
			pcode="&page="+page;
			}
			
		switch(condition)
		{
			case "type":
			requirement="?by=type&type="+id;
			break;
			case "popular":
			requirement="?by=popular";
			break;
			case "time":
			requirement="?by=time";
			break;
			default:
			requirement="?";
			break;
		}

		$.ajax({
			type:"GET",
			url:"get_list.php"+requirement+pcode,
			error:function(){alert("Network is unavailable.");},
			success:function(e){$("#list").html(e);}
			})
			
	
	}
function cantplay(id)
{
			$.ajax({
			type:"GET",
			url:"cantplay.php?sid="+id,
			error:function(){alert("Network is unavailable.");},
			success:function(e){
				if(e=="success"){
				alert("The error report has been sent.  Thank you for your helping!");}
				}
			})
	
	}

function openUpLoad(){
		$('#sharemusic').modal({onOpen: function (dialog) {
			dialog.overlay.fadeIn('slow', function () {
				dialog.data.hide();
				dialog.container.fadeIn('slow', function () {
					dialog.data.slideDown('slow');	 
					});
				});
			}});
	}
	



function s_submit()
{
	if($("#sname").val()!=""&&$("#stype").val()!=""&&$("#surl").val()!="")
	{
	
		if($("#surl").val().toLowerCase().indexOf("http://")==-1)
		{alert("Please make sure your URL begin with 'http://' ");}
		else
		{
		$("#sbutton").attr("disabled","true");
		$("#sbutton").val("Processing, please wait");
		$.ajax({
			type:"post",
			url:"s_receive.php",
			data:{name:$("#sname").val(),type:$("#stype").val(),singer:$("#ssinger").val(),url:$("#surl").val(),tag:$("#stag").val(),picurl:$("#spicurl").val()},
			error: function(){
								alert("Sorry, network now is not available!");
								tryagain();
								},
								
								
			success: function(e){
								
									if(e=="fail")
									{alert("Your inputed the URL incorrectly.");
									tryagain();
									}
									else
									{
										alert(e);
										$.modal.close();}
								}
			});
		
		}
	}
	else
	{
		alert("Please make sure Song's NAME, TYPE, URL!")}
}
function tryagain()
{
$("#sbutton").removeAttr("disabled");
$("#sbutton").val("Try again!");
}