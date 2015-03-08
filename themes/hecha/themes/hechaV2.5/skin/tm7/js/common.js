/* 
Name: common.js
For : http://www.hecha.cn/
Date: 20121121  Sincol
*/

function autosize(){
	var bodyh=document.documentElement.clientHeight;
	var bodyw=document.documentElement.clientWidth
	if(bodyw < 1200){
		$("body").attr('class','hchstw2');
		//窄屏下幻灯片背景颜色(白)
		$("#kyslidex li").css({background:"none"})
	}else{
		$("body").attr('class','hchstw1');
	}
}
$(document).ready(function (){
	//回到顶部
	$("#backtotop").click(function(){
		$("html,body").animate({"scrollTop":"0"},"fast");
	});
	//页面大小
	autosize();
});

/*$(function() {
	//品牌滚动效果
	$('#brandlist').carouFredSel({
		prev: '#brand_left',
		next: '#brand_right',
		auto: true,
		items: 6,
		scroll: {duration: 1100,pauseOnHover: true}
	});
});*/
function closebox(obj){$("#"+obj).hide();}
function togglebox(obj){$("#"+obj).toggle();}
function togglernav(obj){
	$("#"+obj+" .slix").toggle();
	$("#"+obj+" .sliz").toggle();
}
/* settab */
function setTab(name,cursel,n){
	for(i=1;i<=n;i++){
		var menu=document.getElementById(name+i);
		var con=document.getElementById("con_"+name+"_"+i);
		menu.className=i==cursel?"hover":"";
		con.style.display=i==cursel?"block":"none";
	}
}

/* tabSet */
function tabSet(obj,id,tag)
{
 var arrayli = obj.parentNode.getElementsByTagName("li"); //获取菜单数组
 var arraytag = document.getElementById(id).getElementsByTagName(tag); //获取标签数组
 for(i=0;i<arraytag.length;i++)
 {
  if(obj==arrayli[i])
  {
   arrayli[i].className = "this";
   arraytag[i].className = "this";
  }
  else
  {
   arrayli[i].className = "";
   arraytag[i].className = "hide";
  }
 }
}
function AddFavorite(){
    var url="http://www.qxfz.cn";
        try{
            window.external.addFavorite(url, "和茶网演示站");
        }catch (e){
            try{
                window.sidebar.addPanel("和茶网演示站", url, "");
            }catch (e){
                alert("抱歉，您的浏览器不支持自动收藏首页操作!\n请您使用菜单栏或Ctrl+D收藏本站。");
            }
        }
}
/* sub */
$(function(){
	$("#allclass").hover(function(){
		$(this).find(".lnav7").show();
	},function(){
		$(this).find(".lnav7").hide();
	});
});
/* end */