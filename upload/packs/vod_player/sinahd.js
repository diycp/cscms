function $Showhtml(){
    document.getElementById('playad').style.display = "none";
    player = '<embed type="application/x-shockwave-flash" src="http://p.you.video.sina.com.cn/swf/tvPlayer20110412_V4_2_39_23.swf" id="Player" bgcolor="#FFFFFF" quality="high" allowfullscreen="true" allowNetworking="internal" allowscriptaccess="never" wmode="transparent" menu="false" always="false"  pluginspage="http://www.macromedia.com/go/getflashplayer" width="100%" height="'+height+'" flashvars="&container=main_flash&pid=1000&tid=1&autoLoad=1&autoPlay=1&as=1&tj=0&tjAD=0&casualPlay=1&logo=1&vname=&movietvid=hdm&next_url=&actlogActive=0&HTML5Player_skin=black&vid='+unescape(url)+'">';
    document.getElementById('playlist').innerHTML = player;
}
if(parent.cs_adloadtime){
	setTimeout("$Showhtml();",parent.cs_adloadtime*1000);
}


