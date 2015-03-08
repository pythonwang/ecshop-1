//20110320//

//tabSet//
function tabSet(obj){
	var arrayli = obj.parentNode.getElementsByTagName("li");
	for(i=0;i<arrayli.length;i++){
		if(obj==arrayli[i]){arrayli[i].className = "this";}
		else{arrayli[i].className = "";}
	}
}