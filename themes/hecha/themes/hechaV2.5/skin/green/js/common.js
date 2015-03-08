// JavaScript Document  www.hecha.cn 2009-11-29 sincol
function showcart(name){
			if(document.getElementById(name).style.display=='none'){
				document.getElementById(name).style.display='block';
				}else{
				document.getElementById(name).style.display='none'
				}
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

/* tabChange */
function tabChange(obj,id,tag)
{
 var arrayli = obj.parentNode.getElementsByTagName("li"); //获取菜单数组
 var arraytag = document.getElementById(id).getElementsByTagName(tag); //获取标签数组
 for(i=0;i<arraytag.length;i++)
 {
  if(obj==arrayli[i])
  {
   arrayli[i].className = "this";
   arraytag[i].className = "";
  }
  else
  {
   arrayli[i].className = "";
   arraytag[i].className = "hide";
  }
 }
}