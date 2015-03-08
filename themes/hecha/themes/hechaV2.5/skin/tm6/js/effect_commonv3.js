/*
==轮播{对象|对象属性}==
对象属性{宽度|高度|文字大小|自动切换时间}
*/
function dk_slideplayer(object,config){
	this.obj = object;
	this.config = config ? config : {width:"500px",height:"220px",fontsize:"12px",right:"10px",bottom:"10px",time:"5000"};
	this.pause = false;
	var _this = this;
	if(!this.config.right){
		this.config.right = "3px"
	}
	if(!this.config.bottom){
		this.config.bottom = "6px"
	}
	if(this.config.fontsize == "12px" || !this.config.fontsize){
		this.size = "12px";
		this.height = "28px";
		this.right = "6px";
		this.bottom = "10px";
	}
	this.count = jQuery(this.obj + " li").size();
	this.n =0;
	this.j =0;
	var t;
	this.factory = function(){
		//设置P的样式
		jQuery(this.obj + " ol p").each(function(i){
			jQuery(this).attr("rel",i+1)
			jQuery(this).css({float:"left",width:"155"})
			jQuery(this).next().css({width:"155"})
		});
		this.resetclass(this.obj + " p",0);
		this.slide();
		this.addhover();
		t = setInterval(this.autoplay,this.config.time);
	}
	
	this.slide = function(){
		jQuery(this.obj + " ol p").mouseover(function(){
			_this.j = jQuery(this).attr('rel') - 1;
			_this.n = _this.j;
			if (_this.j >= _this.count){return;}
			jQuery(_this.obj + " li").hide();
			jQuery(_this.obj + " li").eq(_this.j).fadeIn("slow");
			_this.resetclass(_this.obj + " ol p",_this.j);
		});
	}

	this.addhover = function(){
		jQuery(this.obj).hover(function(){clearInterval(t);}, function(){t = setInterval(_this.autoplay,_this.config.time)});
	}
	
	this.autoplay = function(){
		_this.n = _this.n >= (_this.count - 1) ? 0 : ++_this.n;
		jQuery(_this.obj + " p").eq(_this.n).trigger('mouseover');
	}
	//设置数字样式
	this.resetclass =function(obj,i){
		jQuery(obj).css({background:"#000000",color:"#FFFFFF",opacity:"0.5"});
		jQuery(obj).eq(i).css({background:"#4b9e0e",color:"#FFFFFF",opacity:"1.0"});
	}
	this.factory();
}