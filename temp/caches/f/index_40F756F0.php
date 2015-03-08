<?php exit;?>a:3:{s:8:"template";a:15:{i:0;s:80:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha//library/page_footer.lbi";i:1;s:65:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/index.dwt";i:2;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_header.lbi";i:3;s:78:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/index_menu.lbi";i:4;s:87:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/index_category_tree.lbi";i:5;s:76:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/index_ad.lbi";i:6;s:74:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/brands.lbi";i:7;s:81:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/recommend_new.lbi";i:8;s:81:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/recommend_hot.lbi";i:9;s:87:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/recommend_promotion.lbi";i:10;s:77:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/cat_goods.lbi";i:11;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/ad_position.lbi";i:12;s:80:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/cat_articles.lbi";i:13;s:72:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/link.lbi";i:14;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_footer.lbi";}s:7:"expires";i:1424628555;s:8:"maketime";i:1424624955;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>米奇网演示站</title>
<meta name="Keywords" content="米奇网演示站" />
<meta name="Description" content="米奇网演示站" />
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/hecha/js/index_url.js"></script>
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/jquery.plus.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<!--<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("body").find("img").not(".hd_img,.brandlist_img").lazyload({threshold : 200,effect : "fadeIn",placeholder : "http://www.hecha.cn/themes/hechaV2.5/skin/tm5/images/grey.gif",failurelimit : 10});
});
</script>-->
<script  type="text/javascript">
var _bdhm_top = 0;
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
var _bdhm_tim = new Image(1,1);
_bdhm_tim.id = "bdhmPerimg";
_bdhm_tim.src = _bdhmProtocol + "hm.baidu.com/_tt.gif?si=5929d4f83ef0b1fad3dd9365bf2c00b4&rnd=" + Math.round(Math.random()*2147483647);
_bdhm_tim.onload=function(){_bdhm_top = 1;}
</script>
</head>
<body class="hchstw1">
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "正在处理您的请求...";
</script>
    <script type="text/javascript" src="js/vist.js"></script>
    <script language="javascript">
	jQuery.post("http://"+document.domain+"/index7_ajax.php",{act:'loginInfoNew'}, function(dealstr){
				var allArrN			=new Array();
				allArrN				= dealstr.split("|||***|||");
		
				var allArr			=new Array();
				
				
				var returnstrarray	= new Array();
				var loginInfo='';
				var cartInfo='';
		
				returnstrarray		= allArrN[0].split("||*||");
				loginInfo			= returnstrarray[0];
				cartInfo			= returnstrarray[1];
				cartInfo_detail		= returnstrarray[2];
				qq_cb_str			= returnstrarray[3];
//                                new_cartInfo_detail     = returnstrarray[4];
//                                totel_num_price         = returnstrarray[5];
                                
				document.getElementById('loginInfo').innerHTML=loginInfo;
				document.getElementById('cart').innerHTML=cartInfo;
				document.getElementById('cart_detail').innerHTML=cartInfo_detail;
//                                jQuery('#new_cart_detail').append(new_cartInfo_detail);
//                                jQuery('#new_cart_detail').after(totel_num_price);
                                
				if( qq_cb_str != '' && qq_cb_str != '-1' )
				{
					document.getElementById('qq_cb').innerHTML='<div class="top6"><div class="ebody"><div style="float:left">'+qq_cb_str+'</div><div style="float:right;cursor:hand; color:#FF0000; text-decoration:underline" onclick="qqcb_close()">关闭</div></div></div>';
				}	
			});
	
	function qqcb_close()
	{
		document.getElementById('qq_cb').innerHTML='';
	}
			
	var keywords_array = new Array();
	var is_show_keywords	= 0;
	var now_keywords_num	= 0;
	function go_show_key_words()
	{
		if( event.keyCode == 38 || event.keyCode == 40 )
		{
			if( keywords_array.length > 0 )
			{
				total_keywords_num	= keywords_array.length - 1;
				if( event.keyCode == 38 )
				{
					now_keywords_num	= now_keywords_num - 1;
					if( now_keywords_num < 1 )
					{
						now_keywords_num = total_keywords_num;
					}
				}
				
				if( event.keyCode == 40 )
				{
					now_keywords_num	= now_keywords_num + 1;
					if( now_keywords_num > total_keywords_num )
					{
						now_keywords_num = 1;
					}
				}
				
				document.searchForm.keywords.value = keywords_array[now_keywords_num];
				focus_key_words(now_keywords_num);
			}
			return false
		}
		//return false;
		keywords_value	= document.searchForm.keywords.value;
		if( keywords_value != ''  )
		{
			jQuery.post("http://"+document.domain+"/get_show_key_words.php",{keywords:keywords_value}, function(dealstr)
			{
				//alert(dealstr);
				//return false;
				
				eval(dealstr);
				if( keywords_array['show_str'] != '' )
				{
					jQuery("#show_key_words").html(keywords_array['show_str']);
					document.getElementById('show_key_words').className = "block";
				}	
				else
				{
					jQuery("#show_key_words").html('');
					document.getElementById('show_key_words').className = "none";
				}
				now_keywords_num	= 0;
			});
		}
		else
		{
			document.getElementById('show_key_words').className = "none";
			now_keywords_num	= 0;
		}
	}
	
	function focus_key_words(focus_num)
	{
		if( keywords_array.length > 0 )
		{
			total_keywords_num	= keywords_array.length - 1;
			for( i=1; i<=total_keywords_num; i++ )
			{
				if( i == focus_num )
				{
					document.getElementById('show_key_words_col_'+i).className='hover';
				}
				else
				{
					document.getElementById('show_key_words_col_'+i).className='';
				}
			}
		}
	}
	
	function hidden_key_words()
	{
		if( is_show_keywords == 0 )
		{
			document.getElementById('show_key_words').className='none';
		}
	}		
</script>
<div class="top7">
	<div class="abody">
		<p class="left">
		<span id="J_TaobaoBar">
		</span>
		<span id="is_show_login_out">
		</span>
		<span id="loginInfo">
        <a href="javascript:void(0);" onclick="AddFavorite();" >收藏</a><small>|</small>
        554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca       
		</span>
        
        
		</p>
         
		<p class="rlink">
        
		<small>|</small>
        <a href="#" >我的和茶</a>
        
		<small>|</small>
        <a href="#" >我的订单</a>
        
		<small>|</small>
        <a href="#" >茶叶百科</a>
        
		<small>|</small>
        <a href="article.php?id=5" >关于我们</a>
        
		<small>|</small>
        <a href="#" >帮助中心</a>
                        
		</p>
         
		<dl>
			<dt><a href="flow.php?step=cart">购物车<strong><span id="cart">554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca</span></strong>件<!--[if gte IE 7]><!--></a><!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]--></a>
				<ul id="cart_detail">
554fcae493e564ee0dc75bdf2ebf94cacart_info2|a:1:{s:4:"name";s:10:"cart_info2";}554fcae493e564ee0dc75bdf2ebf94ca          
<!--<li><em><a href="http://www.hecha.cn/cart.php"><img class="hd_img" src="themes/hecha/themes/hechaV2.5/skin/tm7/images/header/viewcart.gif" align="absmiddle" /></a></em>购物车中没有商品</li>-->
<!--<li><em>￥29 x 1</em><a href="http://www.hecha.cn/sgoods-2779.html" title="【滋恩】特级大红袍圆罐装50g" target="_blank">【滋恩】特级大红袍圆罐装50g</a></li>
<li><em>￥29 x 1</em><a href="http://www.hecha.cn/sgoods-2793.html" title="【与花香】玫瑰荷叶茶150g" target="_blank">【与花香】玫瑰荷叶茶150g</a></li>
<li class="tr"><a href="flow.php?step=cart"><img class="hd_img" src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/viewcart.gif" align="absmiddle" /></a></li>-->
			</ul>
		<!--[if lte IE 6]></td></tr></table></a><![endif]--></dt></dl>
		<div class="clear"></div>
	</div>
</div>
<div class="header7">
<div class="abody">
	<div class="header6">
			<div class="logo"><a href="index.php"><img src="themes/hecha/images/logo_index.gif"/></a></div>
			<div class="newtea">
<a href='affiche.php?ad_id=24&uri=' target='_blank'><img src='data/afficheimg/1382065452926119871.jpg' width='200' height='80' /></a>                    
            </div>
			<div class="tel">
			<p>400-8899-379</p>
			</div>
		<div class="search">
			<dl>
   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
				<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
				<dt><input name="keywords" id="keyword" type="text" class="inp2" value="" onfocus="search_key_focus(this)" onblur="search_key_blur(this)"/>
				  <ul id="show_key_words" class='none' onmousemove="is_show_keywords=1" onMouseOut="is_show_keywords=0">
				  </ul>
				</dt>
				<dd><input name="imageField" type="image" src="themes/hecha/themes/hechaV2.5/skin/tm7/images/header/search_sub.jpg"/></dd>
				</form>
			</dl>
			<p>
   热门搜索 ：
   <a href="search.php?keywords=%E5%A4%A7%E7%BA%A2%E8%A2%8D" title="大红袍">大红袍</a>
   <a href="search.php?keywords=%E9%93%81%E8%A7%82%E9%9F%B3" title="铁观音">铁观音</a>
   <a href="search.php?keywords=%E6%AD%A3%E5%B1%B1%E5%B0%8F%E7%A7%8D" title="正山小种">正山小种</a>
   <a href="search.php?keywords=%E8%A5%BF%E6%B9%96%E9%BE%99%E4%BA%95" title="西湖龙井">西湖龙井</a>
   			</p>
		</div>
            <div class="clear"></div>
	</div>
</div>
</div>
<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
	</div>
	<div class="mxnx">
	<ul>
    
		<li class="this"><a href="index.php"><span title="首页">首页</span></a></li>
        
		<li ><a href="category.php?id=2"><span title="西湖龙井">西湖龙井</span></a></li>
       
		<li ><a href="category.php?id=23"><span title="茉莉花茶">茉莉花茶</span></a></li>
       
		<li ><a href="category.php?id=17"><span title="大红袍">大红袍</span></a></li>
       
		<li ><a href="category.php?id=27"><span title="白牡丹">白牡丹</span></a></li>
       
		<li ><a href="category.php?id=16"><span title="铁观音">铁观音</span></a></li>
       
		<li ><a href="category.php?id=31"><span title="普洱茶">普洱茶</span></a></li>
       
		<li ><a href="category.php?id=25"><span title="白茶">白茶</span></a></li>
       
		<li ><a href="category.php?id=6"><span title="红茶">红茶</span></a></li>
       
		<li ><a href="category.php?id=32"><span title="茶具">茶具</span></a></li>
        
		<div class="clear"></div>
		<!--<div class="new1"></div>-->
	</ul>
	</div>
	<div class="rbox">
		<p class="p1"><a href="group_buy.php">今日团购</a></p>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="slidebox">
<div class="homenav">
	<div class="lnav7">
    		<dl >
			<dt><a href="category.php?id=1"><big>绿茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=1">绿茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=2">西湖龙井</a>
                        
							<a href="category.php?id=3">太平猴魁</a>
                        
							<a href="category.php?id=4">黄山毛峰</a>
                        
							<a href="category.php?id=5">六安瓜片</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=2">西湖龙井</a> 
                                                                            						<a href="category.php?id=3">太平猴魁</a> 
                                                                                                                                                                              </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=2">西湖龙井</a>
                                                  <a href="category.php?id=3">太平猴魁</a>
                                                                                       </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=6"><big>红茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=6">红茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=7">正山小种</a>
                        
							<a href="category.php?id=8">祁门红茶</a>
                        
							<a href="category.php?id=9">滇红工夫</a>
                        
							<a href="category.php?id=10">政和工夫</a>
                        
							<a href="category.php?id=11">白琳工夫</a>
                        
							<a href="category.php?id=12">坦洋工夫</a>
                        
							<a href="category.php?id=13">金骏眉</a>
                        
							<a href="category.php?id=14">其他红茶</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=7">正山小种</a> 
                                                                            						<a href="category.php?id=8">祁门红茶</a> 
                                                                                                                                                                                                                                                                                                                                                                                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=7">正山小种</a>
                                                  <a href="category.php?id=8">祁门红茶</a>
                                                                                                                                                                                           </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=15"><big>乌龙茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=15">乌龙茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=16">铁 观 音</a>
                        
							<a href="category.php?id=17">大 红 袍</a>
                        
							<a href="category.php?id=18">台湾乌龙</a>
                        
							<a href="category.php?id=19">水　　仙</a>
                        
							<a href="category.php?id=20">肉　　桂</a>
                        
							<a href="category.php?id=21">其他乌龙茶</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=16">铁 观 音</a> 
                                                                            						<a href="category.php?id=17">大 红 袍</a> 
                                                                                                                                                                                                                                                                                  </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=16">铁 观 音</a>
                                                  <a href="category.php?id=17">大 红 袍</a>
                                                                                                                                         </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=22"><big>花茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=22">花茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=23">茉莉花茶</a>
                        
							<a href="category.php?id=24">台湾冷泡茶</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=23">茉莉花茶</a> 
                                                                            						<a href="category.php?id=24">台湾冷泡茶</a> 
                                                                          </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=23">茉莉花茶</a>
                                                  <a href="category.php?id=24">台湾冷泡茶</a>
                                     </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=25"><big>白茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=25">白茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=26">白毫银针</a>
                        
							<a href="category.php?id=27">白 牡 丹</a>
                        
							<a href="category.php?id=28">寿　　眉</a>
                        
							<a href="category.php?id=29">新工艺白茶</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=26">白毫银针</a> 
                                                                            						<a href="category.php?id=27">白 牡 丹</a> 
                                                                                                                                                                              </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=26">白毫银针</a>
                                                  <a href="category.php?id=27">白 牡 丹</a>
                                                                                       </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=30"><big>黑茶</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=30">黑茶</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=31">普 洱 茶</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=31">普 洱 茶</a> 
                                                                          </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=31">普 洱 茶</a>
                                     </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=32"><big>茶具</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=32">茶具</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=33">紫 砂 壶</a>
                        
							<a href="category.php?id=34">茶壶茶杯</a>
                        
							<a href="category.php?id=35">工夫茶具</a>
                        
							<a href="category.php?id=36">电子茶具</a>
                        
							<a href="category.php?id=37">茶　　盘</a>
                        
							<a href="category.php?id=38">饰品配件</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=33">紫 砂 壶</a> 
                                                                            						<a href="category.php?id=34">茶壶茶杯</a> 
                                                                                                                                                                                                                                                                                  </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=33">紫 砂 壶</a>
                                                  <a href="category.php?id=34">茶壶茶杯</a>
                                                                                                                                         </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=39"><big>特色茶产品</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=39">特色茶产品</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=40">茶　　枕</a>
                        
							<a href="category.php?id=41">绞 股 蓝</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=40">茶　　枕</a> 
                                                                            						<a href="category.php?id=41">绞 股 蓝</a> 
                                                                          </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=40">茶　　枕</a>
                                                  <a href="category.php?id=41">绞 股 蓝</a>
                                     </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=42"><big>特色工艺礼品</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=42">特色工艺礼品</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=43">佛　　像</a>
                        
							<a href="category.php?id=44">线香香粉</a>
                        
							<a href="category.php?id=45">沉　　香</a>
                        
							<a href="category.php?id=46">香　　炉</a>
                        
							<a href="category.php?id=47">插 香 器</a>
                        
							<a href="category.php?id=48">漆 线 雕</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=43">佛　　像</a> 
                                                                            						<a href="category.php?id=44">线香香粉</a> 
                                                                                                                                                                                                                                                                                  </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=43">佛　　像</a>
                                                  <a href="category.php?id=44">线香香粉</a>
                                                                                                                                         </dd>
		</dl>
		<dl class="xc1">
			<dt><a href="category.php?id=49"><big>红酒</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=49">红酒</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=50">红葡萄酒</a>
                        
							<a href="category.php?id=51">白葡萄酒</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=50">红葡萄酒</a> 
                                                                            						<a href="category.php?id=51">白葡萄酒</a> 
                                                                          </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=50">红葡萄酒</a>
                                                  <a href="category.php?id=51">白葡萄酒</a>
                                     </dd>
		</dl>
		<dl >
			<dt><a href="category.php?id=52"><big>功效</big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="category.php?id=52">功效</a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        
							<a href="category.php?id=53">提神消疲</a>
                        
							<a href="category.php?id=54">防 辐 射</a>
                        
							<a href="category.php?id=55">调理肠胃</a>
                        
							<a href="category.php?id=56">减肥瘦身</a>
                                 
							<div class="clear"></div>
						</li>
                        <li class="def">
                                                  						<a href="category.php?id=53">提神消疲</a> 
                                                                            						<a href="category.php?id=54">防 辐 射</a> 
                                                                                                                                                                              </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
                                     <a href="category.php?id=53">提神消疲</a>
                                                  <a href="category.php?id=54">防 辐 射</a>
                                                                                       </dd>
		</dl>
        
			<div class="clear"></div>
  </div></div>    
<div class="slide">
<ul class="bd"> 
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019pspzol.jpg" /></a></small></li>
            
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019ylokoi.jpg" /></a></small></li>
            
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019fuhdig.jpg" /></a></small></li>
            
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019rlncnw.jpg" /></a></small></li>
            
              <li  style="background-color:#ffffff; background-image:url()"><small><a href="http://" target="_blank"><img class="hd_img" src="data/afficheimg/20131019vlvoqm.jpg" /></a></small></li>
            
      
        </ul>
<div class="hd"><ul>
  <li>1</li>
      
  <li>2</li>
      
  <li>3</li>
      
  <li>4</li>
      
  <li>5</li>
      
</ul><a class="prev">></a></div>
</div>
<script type="text/javascript">jQuery(".slide").slide({titCell:".hd li",mainCell:".bd",effect:"fade",delayTime:1000,interTime:5000,autoPlay:true,nextCell:".prev"});</script>
<div class="homebrand">
	<div class="brbg">
	<div class="title">
	<em><a href="brand.php" target="_blank">更多品牌</a></em><img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/brand_tx1.gif" align="absmiddle" /></div>
	<div class="brandbox">
		<span class="brand_left" id="brand_left" title="向左滚动"></span>
		<div class="brandlist">
		<ul id="brandlist">
                                      <li><a href="search.php?brand=1" target="_blank" title="中茶"><img class="brandlist_img" src="data/brandlogo/1382145260306122640.jpg" alt="中茶"/></a></li>
                                                <li><a href="search.php?brand=2" target="_blank" title="铁观音"><img class="brandlist_img" src="data/brandlogo/1382145266513496590.jpg" alt="铁观音"/></a></li>
                                                <li><a href="search.php?brand=3" target="_blank" title="武夷星"><img class="brandlist_img" src="data/brandlogo/1382145272944157680.jpg" alt="武夷星"/></a></li>
                                                <li><a href="search.php?brand=4" target="_blank" title="元泰"><img class="brandlist_img" src="data/brandlogo/1382145279025076262.jpg" alt="元泰"/></a></li>
                                                <li><a href="search.php?brand=5" target="_blank" title="黄山毛峰"><img class="brandlist_img" src="data/brandlogo/1382145285172033427.jpg" alt="黄山毛峰"/></a></li>
                                                <li><a href="search.php?brand=6" target="_blank" title="绿雪芽"><img class="brandlist_img" src="data/brandlogo/1382145293336005599.jpg" alt="绿雪芽"/></a></li>
                                                <li><a href="search.php?brand=7" target="_blank" title="顶峰"><img class="brandlist_img" src="data/brandlogo/1382145300791921318.jpg" alt="顶峰"/></a></li>
                                                <li><a href="search.php?brand=8" target="_blank" title="一品堂"><img class="brandlist_img" src="data/brandlogo/1382145314566441925.jpg" alt="一品堂"/></a></li>
                                                <li><a href="search.php?brand=9" target="_blank" title="徽六"><img class="brandlist_img" src="data/brandlogo/1382145322006468814.jpg" alt="徽六"/></a></li>
                                                <li><a href="search.php?brand=10" target="_blank" title="滋恩"><img class="brandlist_img" src="data/brandlogo/1382145328704077177.jpg" alt="滋恩"/></a></li>
                                                <li><a href="search.php?brand=11" target="_blank" title="正山"><img class="brandlist_img" src="data/brandlogo/1382145334444802181.jpg" alt="正山"/></a></li>
                  		</ul>
		</div>
		<span class="brand_right" id="brand_right" title="向右滚动"></span>
	</div>
    <script type="text/javascript">
	var bodyh=document.documentElement.clientHeight;
	var bodyw=document.documentElement.clientWidth
	if(bodyw < 1200)
	{
	}
	else
	{
	  jQuery(".brandbox").slide({effect:"leftLoop",mainCell:".brandlist ul",delayTime:1000,interTime:5000,autoPlay:true,prevCell:".brand_left",nextCell:".brand_right",scroll:5,vis:6,easing:"easeOutCirc"});
	}
    </script> 
	</div>
</div>
</div>
<div class="clear line15"></div>
<div class="abody">
	<div class="row7 newprobox">
		<div class="title_h5">   
			<ul class="crz">
                <li class="on">精品推荐</li>
				<li>新品上市</li>
				<li>本月热销</li>
                <li>今日特价</li>
			</ul>
		</div>
		<div class="hotprox">
        
			<ol class="this">
			<div class="newpro">
				<ul>
					<div class="clear"></div>
				</ul>
			</div>
			</ol>
            
            			<ol class="hide">
				<div class="hotsell">
					<ul>
      
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=6" target="_blank">【与花香】红糖姜茶200g</a></p>
							<p class="msg"><a href="goods.php?id=6#comment">已有0人评论</a></p>
							<p class="prc">
                     55.0                                      </p>
							<p class="pri">市场价￥66.0</p>
						</div>
						<a href="goods.php?id=6" target="_blank" alt="【与花香】红糖姜茶200g"><img src="data/index_gimg/1367632110014654955.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=7" target="_blank">【好吉】迷你沱原味生沱5g</a></p>
							<p class="msg"><a href="goods.php?id=7#comment">已有0人评论</a></p>
							<p class="prc">
                     0.4                                      </p>
							<p class="pri">市场价￥0.5</p>
						</div>
						<a href="goods.php?id=7" target="_blank" alt="【好吉】迷你沱原味生沱5g"><img src="data/index_gimg/1367632390463234646.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=26" target="_blank">素茶 窈窕饮品 盒装50g</a></p>
							<p class="msg"><a href="goods.php?id=26#comment">已有0人评论</a></p>
							<p class="prc">
                     62.0                                      </p>
							<p class="pri">市场价￥74.4</p>
						</div>
						<a href="goods.php?id=26" target="_blank" alt="素茶 窈窕饮品 盒装50g"><img src="data/index_gimg/1369545486910834916.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=5" target="_blank">【与花香】法兰西玫瑰花罐装50g</a></p>
							<p class="msg"><a href="goods.php?id=5#comment">已有0人评论</a></p>
							<p class="prc">
                     59.0                                      </p>
							<p class="pri">市场价￥70.8</p>
						</div>
						<a href="goods.php?id=5" target="_blank" alt="【与花香】法兰西玫瑰花罐装50g"><img src="data/index_gimg/1367630928401291624.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=35" target="_blank">【与花香】蜂蜜木瓜粉180g</a></p>
							<p class="msg"><a href="goods.php?id=35#comment">已有0人评论</a></p>
							<p class="prc">
                     58.0                                      </p>
							<p class="pri">市场价￥69.6</p>
						</div>
						<a href="goods.php?id=35" target="_blank" alt="【与花香】蜂蜜木瓜粉180g"><img src="data/index_gimg/1370364401406517901.jpg" align="absmiddle" /></a></li>
					    				  </ul>
					<div class="clear"></div>
				</div>
			</ol>   
                    
						<ol class="hide">
				<div class="hotsell">
					<ul>
      
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=6" target="_blank">【与花香】红糖姜茶200g</a></p>
							<p class="msg"><a href="goods.php?id=6#comment">已有0人评论</a></p>
							<p class="prc">
                     55.0                                      </p>
							<p class="pri">市场价￥66.0</p>
						</div>
						<a href="goods.php?id=6" target="_blank" alt="【与花香】红糖姜茶200g"><img src="data/index_gimg/1367632110014654955.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=7" target="_blank">【好吉】迷你沱原味生沱5g</a></p>
							<p class="msg"><a href="goods.php?id=7#comment">已有0人评论</a></p>
							<p class="prc">
                     0.4                                      </p>
							<p class="pri">市场价￥0.5</p>
						</div>
						<a href="goods.php?id=7" target="_blank" alt="【好吉】迷你沱原味生沱5g"><img src="data/index_gimg/1367632390463234646.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=36" target="_blank">【滋恩】布朗古香普洱熟茶饼357g</a></p>
							<p class="msg"><a href="goods.php?id=36#comment">已有0人评论</a></p>
							<p class="prc">
                     76.0                                      </p>
							<p class="pri">市场价￥91.2</p>
						</div>
						<a href="goods.php?id=36" target="_blank" alt="【滋恩】布朗古香普洱熟茶饼357g"><img src="data/index_gimg/1370364694857305431.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=5" target="_blank">【与花香】法兰西玫瑰花罐装50g</a></p>
							<p class="msg"><a href="goods.php?id=5#comment">已有0人评论</a></p>
							<p class="prc">
                     59.0                                      </p>
							<p class="pri">市场价￥70.8</p>
						</div>
						<a href="goods.php?id=5" target="_blank" alt="【与花香】法兰西玫瑰花罐装50g"><img src="data/index_gimg/1367630928401291624.jpg" align="absmiddle" /></a></li>
     
                    <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=35" target="_blank">【与花香】蜂蜜木瓜粉180g</a></p>
							<p class="msg"><a href="goods.php?id=35#comment">已有0人评论</a></p>
							<p class="prc">
                     58.0                                      </p>
							<p class="pri">市场价￥69.6</p>
						</div>
						<a href="goods.php?id=35" target="_blank" alt="【与花香】蜂蜜木瓜粉180g"><img src="data/index_gimg/1370364401406517901.jpg" align="absmiddle" /></a></li>
					    				  </ul>
					<div class="clear"></div>
				</div>
			</ol>            
						<ol class="hide">
			<div class="hotsell">
					<ul>
                                         <li>
						<div class="txt">
							<p class="til"><a href="goods.php?id=9" target="_blank">【与花香】玫瑰荷叶茶150g</a></p>
							<p class="msg"><a href="goods.php?id=9#comment">已有0人评论</a></p>
							<p class="prc">
           29.8                            </p>
							<p class="pri">市场价￥66.0</p>
						</div>
						<a href="goods.php?id=9" target="_blank" alt="【与花香】玫瑰荷叶茶150g"><img src="data/index_gimg/1367633846955524708.jpg" align="absmiddle" /></a></li>
                                             
					   			  </ul>
					<div class="clear"></div>
				</div>
			</ol>            
                    <ol class="hide">
			<div class="hotsell">
					<ul>
                                            						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-1924.html" target="_blank">【元泰】闽红印象林则徐纪念馆专卖红茶60g礼盒装</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-1924.html#comment">已有46人评论</a></p>
							<p class="prc">90</p>
							<p class="pri">市场价￥120</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-1924.html" target="_blank" alt="【元泰】闽红印象林则徐纪念馆专卖红茶60g礼盒装"><img src="themes/hecha/images/index4_images/kuibenqingcang-yuantailihe.jpg" align="absmiddle" /></a></li>
                        
					   						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-2279.html" target="_blank">【简品100】素茶 窈窕饮品 盒装50g</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-2279.html#comment">已有34人评论</a></p>
							<p class="prc">62</p>
							<p class="pri">市场价￥76</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-2279.html" target="_blank" alt="【简品100】素茶 窈窕饮品 盒装50g"><img src="themes/hecha/images/index4_images/kuibenqingcang-such.jpg" align="absmiddle" /></a></li>
					   						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-2051.html" target="_blank">法国马梦德圣蒂干红2009</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-2051.html#comment">已有5人评论</a></p>
							<p class="prc">140</p>
							<p class="pri">市场价￥172</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-2051.html" target="_blank" alt="法国马梦德圣蒂干红2009"><img src="themes/hecha/images/index4_images/NJJC-9C1004.jpg" align="absmiddle" /></a></li>
					   						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-2260.html" target="_blank">【简品100】原味大麦茶 环保简装280g</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-2260.html#comment">已有1204人评论</a></p>
							<p class="prc">38</p>
							<p class="pri">市场价￥46</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-2260.html" target="_blank" alt="【简品100】原味大麦茶 环保简装280g"><img src="themes/hecha/images/index4_images/kuibenqingcang-jianpindamaich.jpg" align="absmiddle" /></a></li>
					   						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-922.html" target="_blank">【夷发】特级大红袍609烟盒120g</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-922.html#comment">已有447人评论</a></p>
							<p class="prc">188</p>
							<p class="pri">市场价￥248</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-922.html" target="_blank" alt="【夷发】特级大红袍609烟盒120g"><img src="themes/hecha/images/index4_images/kuibenqingcang-dahongpao.jpg" align="absmiddle" /></a></li>
					   						<li>
						<div class="txt">
							<p class="til"><a href="http://www.hecha.cn/sgoods-1998.html" target="_blank">南澳澳洲阳光霞多丽干白2008</a></p>
							<p class="msg"><a href="http://www.hecha.cn/sgoods-1998.html#comment">已有20人评论</a></p>
							<p class="prc">67</p>
							<p class="pri">市场价￥168</p>
						</div>
						<a href="http://www.hecha.cn/sgoods-1998.html" target="_blank" alt="南澳澳洲阳光霞多丽干白2008"><img src="themes/hecha/images/index4_images/kuibenqingcang-ji.jpg" align="absmiddle" /></a></li>
					   			  </ul>
					<div class="clear"></div>
				</div>
			</ol>
            
            
		</div>
	</div>
    <script type="text/javascript">
	jQuery(".newprobox").slide({titCell:".title_h5 li",mainCell:".hotprox",delayTime:0,delayTime:500,interTime:5000,autoPlay:true});
    </script>
	<div class="row8">
		<div class="tuansell">
			<div class="title">
			<ul class="crz">
				<li class="on">1</li><li>2</li><li>3</li>
			</ul>
			<strong>今日团购</strong><small><a href="http://tuan.hecha.cn/" target="_blank">MORE</a></small>
			</div>
<script>
function loadtime(end_time,id)
{
  Temp = get_group_buy_time(end_time);
  document.getElementById(id).innerHTML=Temp;
}
</script>            
			<div class="tuanselllist" id="tuanselllist">
            </div>
            
                    
		</div>
        
      <script type="text/javascript">jQuery(".tuansell").slide({titCell:".title li",mainCell:".tuanselllist",effect:"leftLoop",delayTime:500,interTime:5000,autoPlay:true,vis:1,easing:"easeOutCirc"});</script>
      
	</div>
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col1">
		<strong>乌龙茶 <span>1F</span></strong>
		<em>
   
        <a href="category.php?id=16" target="_blank">铁 观 音</a> | 
     
        <a href="category.php?id=17" target="_blank">大 红 袍</a> | 
     
        <a href="category.php?id=18" target="_blank">台湾乌龙</a> | 
        
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=15" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=4&uri=' target='_blank'><img src='data/afficheimg/1382145723004424627.gif' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=11" target="_blank"><img src="data/index_gimg/1382145577955072718.jpg"  alt="【滋恩】特级大红袍圆罐装50g" title="【滋恩】特级大红袍圆罐装50g"/></a><p class="tit"><a href="goods.php?id=11" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】特级大红袍圆罐装50g</a></p><p class="pri">
        <strong>
                                62.0                 
         </strong><small>74.4</small></p></li>
        <li class="t2"><a href="goods.php?id=12" target="_blank"><img src="data/index_gimg/1382145586394972121.jpg"  alt="御品大红袍罐装50g" title="御品大红袍罐装50g"/></a><p class="tit"><a href="goods.php?id=12" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">御品大红袍罐装50g</a></p><p class="pri">
        <strong>
                                80.0                 
         </strong><small>96.0</small></p></li>
        <li class="t3"><a href="goods.php?id=13" target="_blank"><img src="data/index_gimg/1382145593297964265.jpg"  alt="【滋恩】乘风破浪特级大红袍罐装50g（泰源）" title="【滋恩】乘风破浪特级大红袍罐装50g（泰源）"/></a><p class="tit"><a href="goods.php?id=13" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】乘风破浪特级大红袍罐装50g（泰...</a></p><p class="pri">
        <strong>
                                86.0                 
         </strong><small>103.2</small></p></li>
        <li class="t4"><a href="goods.php?id=14" target="_blank"><img src="data/index_gimg/1382145603033385143.jpg"  alt="【滋恩】一级大红袍中国印象圆罐装50g" title="【滋恩】一级大红袍中国印象圆罐装50g"/></a><p class="tit"><a href="goods.php?id=14" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】一级大红袍中国印象圆罐装50g</a></p><p class="pri">
        <strong>
                                56.0                 
         </strong><small>67.2</small></p></li>
        <li class="t5"><a href="goods.php?id=15" target="_blank"><img src="data/index_gimg/1382145615596421965.jpg"  alt="【滋恩】行禅特级大红袍罐装50g" title="【滋恩】行禅特级大红袍罐装50g"/></a><p class="tit"><a href="goods.php?id=15" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】行禅特级大红袍罐装50g</a></p><p class="pri">
        <strong>
                                76.0                 
         </strong><small>91.2</small></p></li>
        <li class="t6"><a href="goods.php?id=16" target="_blank"><img src="data/index_gimg/1382145623239267586.jpg"  alt="【夷发】特级大红袍618纸盒125g" title="【夷发】特级大红袍618纸盒125g"/></a><p class="tit"><a href="goods.php?id=16" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【夷发】特级大红袍618纸盒125g</a></p><p class="pri">
        <strong>
                                198.0                 
         </strong><small>237.6</small></p></li>
        <li class="t7"><a href="goods.php?id=17" target="_blank"><img src="data/index_gimg/1382145629768355011.jpg"  alt="【凤山】安溪清香铁观音SQT1600世博礼盒250g" title="【凤山】安溪清香铁观音SQT1600世博礼盒250g"/></a><p class="tit"><a href="goods.php?id=17" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【凤山】安溪清香铁观音SQT1600世博...</a></p><p class="pri">
        <strong>
                                800.0                 
         </strong><small>960.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">乌龙茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=16" target="_blank"><img src="images/201305/thumb_img/16_thumb_G_1367724701820.jpg" alt="【夷发】特级大红袍618纸盒125g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=16" title="【夷发】特级大红袍618纸盒125g">【夷发】特级大红袍618纸盒125g</a></p>
						<p class="pri">
                                198.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=16"><strong>3</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=11" target="_blank"><img src="images/201305/thumb_img/11_thumb_G_1367723532511.jpg" alt="【滋恩】特级大红袍圆罐装50g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=11" title="【滋恩】特级大红袍圆罐装50g">【滋恩】特级大红袍圆罐装50g</a></p>
						<p class="pri">
                                62.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=11"><strong>1</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=62" target="_blank"><img src="images/201411/thumb_img/62_thumb_G_1417310148023.jpg" alt="新茶特级都匀毛尖茶叶富锌硒有机绿茶"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=62" title="新茶特级都匀毛尖茶叶富锌硒有机绿茶">新茶特级都匀毛尖茶叶富锌硒有机绿茶</a></p>
						<p class="pri">
                                99.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=62"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=17" title="【凤山】安溪清香铁观音SQT1600世博礼盒250g">【凤山】安溪清香铁观音SQT1600世博...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=15" title="【滋恩】行禅特级大红袍罐装50g">【滋恩】行禅特级大红袍罐装50g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=14" title="【滋恩】一级大红袍中国印象圆罐装50g">【滋恩】一级大红袍中国印象圆罐装50g</a></p>
					</li>
                                  
                                                   
                                                   
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col2">
		<strong>红茶 <span>2F</span></strong>
		<em>
   
        <a href="category.php?id=7" target="_blank">正山小种</a> | 
     
        <a href="category.php?id=8" target="_blank">祁门红茶</a> | 
     
        <a href="category.php?id=9" target="_blank">滇红工夫</a> | 
            
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=6" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=5&uri=' target='_blank'><img src='data/afficheimg/1369547554342859815.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=19" target="_blank"><img src="data/index_gimg/1367783914258681109.jpg"  alt="【滋恩】御品金骏眉罐装50g" title="【滋恩】御品金骏眉罐装50g"/></a><p class="tit"><a href="goods.php?id=19" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】御品金骏眉罐装50g</a></p><p class="pri">
        <strong>
                                79.0                 
         </strong><small>94.8</small></p></li>
        <li class="t2"><a href="goods.php?id=20" target="_blank"><img src="data/index_gimg/1367784087956100183.jpg"  alt="【滋恩】精品坦洋工夫罐装60g" title="【滋恩】精品坦洋工夫罐装60g"/></a><p class="tit"><a href="goods.php?id=20" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】精品坦洋工夫罐装60g</a></p><p class="pri">
        <strong>
                                53.0                 
         </strong><small>63.6</small></p></li>
        <li class="t3"><a href="goods.php?id=21" target="_blank"><img src="data/index_gimg/1367784334113524649.jpg"  alt="【元泰】特级坦洋工夫罐装40g" title="【元泰】特级坦洋工夫罐装40g"/></a><p class="tit"><a href="goods.php?id=21" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【元泰】特级坦洋工夫罐装40g</a></p><p class="pri">
        <strong>
                                55.0                 
         </strong><small>66.0</small></p></li>
        <li class="t4"><a href="goods.php?id=22" target="_blank"><img src="data/index_gimg/1367784503349251722.jpg"  alt="【绿雪芽】特级有机红茶袋泡茶装50g" title="【绿雪芽】特级有机红茶袋泡茶装50g"/></a><p class="tit"><a href="goods.php?id=22" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】特级有机红茶袋泡茶装50g</a></p><p class="pri">
        <strong>
                                18.0                 
         </strong><small>21.6</small></p></li>
        <li class="t5"><a href="goods.php?id=23" target="_blank"><img src="data/index_gimg/1367785778295394876.jpg"  alt="【元泰】一级正山小种经济型罐装40g" title="【元泰】一级正山小种经济型罐装40g"/></a><p class="tit"><a href="goods.php?id=23" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【元泰】一级正山小种经济型罐装40g</a></p><p class="pri">
        <strong>
                                48.0                 
         </strong><small>57.6</small></p></li>
        <li class="t6"><a href="goods.php?id=24" target="_blank"><img src="data/index_gimg/1367786057098041078.jpg"  alt="【元正】泛舟游湖.特级正山小种罐装50g" title="【元正】泛舟游湖.特级正山小种罐装50g"/></a><p class="tit"><a href="goods.php?id=24" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【元正】泛舟游湖.特级正山小种罐装50g</a></p><p class="pri">
        <strong>
                                58.0                 
         </strong><small>69.6</small></p></li>
        <li class="t7"><a href="goods.php?id=25" target="_blank"><img src="data/index_gimg/1367786300834467480.jpg"  alt="【元泰】特级皇家礼茶-幻彩组合礼盒240g" title="【元泰】特级皇家礼茶-幻彩组合礼盒240g"/></a><p class="tit"><a href="goods.php?id=25" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【元泰】特级皇家礼茶-幻彩组合礼盒240...</a></p><p class="pri">
        <strong>
                                300.0                 
         </strong><small>360.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">红茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=25" target="_blank"><img src="images/201305/thumb_img/25_thumb_G_1367786300073.jpg" alt="【元泰】特级皇家礼茶-幻彩组合礼盒240g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=25" title="【元泰】特级皇家礼茶-幻彩组合礼盒240g">【元泰】特级皇家礼茶-幻彩组合礼盒240...</a></p>
						<p class="pri">
                                300.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=25"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=24" target="_blank"><img src="images/201305/thumb_img/24_thumb_G_1367786057765.jpg" alt="【元正】泛舟游湖.特级正山小种罐装50g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=24" title="【元正】泛舟游湖.特级正山小种罐装50g">【元正】泛舟游湖.特级正山小种罐装50g</a></p>
						<p class="pri">
                                58.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=24"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=23" target="_blank"><img src="images/201305/thumb_img/23_thumb_G_1367785778012.jpg" alt="【元泰】一级正山小种经济型罐装40g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=23" title="【元泰】一级正山小种经济型罐装40g">【元泰】一级正山小种经济型罐装40g</a></p>
						<p class="pri">
                                48.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=23"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=22" title="【绿雪芽】特级有机红茶袋泡茶装50g">【绿雪芽】特级有机红茶袋泡茶装50g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=21" title="【元泰】特级坦洋工夫罐装40g">【元泰】特级坦洋工夫罐装40g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=20" title="【滋恩】精品坦洋工夫罐装60g">【滋恩】精品坦洋工夫罐装60g</a></p>
					</li>
                                  
                                                   
                                                   
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col3">
		<strong>黑茶 <span>3F</span></strong>
		<em>
   
        <a href="category.php?id=31" target="_blank">普 洱 茶</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=30" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=10&uri=' target='_blank'><img src='data/afficheimg/1369547568134900686.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=44" target="_blank"><img src="data/index_gimg/1370403112039135957.jpg"  alt="【好吉】七彩竹盘装玫瑰普洱小沱茶100g" title="【好吉】七彩竹盘装玫瑰普洱小沱茶100g"/></a><p class="tit"><a href="goods.php?id=44" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【好吉】七彩竹盘装玫瑰普洱小沱茶100g</a></p><p class="pri">
        <strong>
                                25.5                 
         </strong><small>30.6</small></p></li>
        <li class="t2"><a href="goods.php?id=45" target="_blank"><img src="data/index_gimg/1370403584810627624.jpg"  alt="【滋恩】印象江南普洱熟茶饼357g" title="【滋恩】印象江南普洱熟茶饼357g"/></a><p class="tit"><a href="goods.php?id=45" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩】印象江南普洱熟茶饼357g</a></p><p class="pri">
        <strong>
                                59.0                 
         </strong><small>70.8</small></p></li>
        <li class="t3"><a href="goods.php?id=46" target="_blank"><img src="data/index_gimg/1370403738395527258.jpg"  alt="【好吉】布袋迷你小熟沱 熟普洱（30颗装）" title="【好吉】布袋迷你小熟沱 熟普洱（30颗装）"/></a><p class="tit"><a href="goods.php?id=46" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【好吉】布袋迷你小熟沱 熟普洱（30颗装...</a></p><p class="pri">
        <strong>
                                25.0                 
         </strong><small>30.0</small></p></li>
        <li class="t4"><a href="goods.php?id=47" target="_blank"><img src="data/index_gimg/1370403905993636355.jpg"  alt="【好吉】迷你沱玫瑰花熟沱5g" title="【好吉】迷你沱玫瑰花熟沱5g"/></a><p class="tit"><a href="goods.php?id=47" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【好吉】迷你沱玫瑰花熟沱5g</a></p><p class="pri">
        <strong>
                                0.4                 
         </strong><small>0.5</small></p></li>
        <li class="t5"><a href="goods.php?id=48" target="_blank"><img src="data/index_gimg/1370404037709074699.jpg"  alt="迷你沱原味生沱5g" title="迷你沱原味生沱5g"/></a><p class="tit"><a href="goods.php?id=48" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">迷你沱原味生沱5g</a></p><p class="pri">
        <strong>
                                0.4                 
         </strong><small>0.5</small></p></li>
        <li class="t6"><a href="goods.php?id=49" target="_blank"><img src="data/index_gimg/1370404195503261036.jpg"  alt="【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼套装" title="【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼套装"/></a><p class="tit"><a href="goods.php?id=49" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼...</a></p><p class="pri">
        <strong>
                                171.0                 
         </strong><small>205.2</small></p></li>
        <li class="t7"><a href="goods.php?id=50" target="_blank"><img src="data/index_gimg/1370404320043464521.jpg"  alt="【中茶】2007年中茶第一饼0001生茶380g" title="【中茶】2007年中茶第一饼0001生茶380g"/></a><p class="tit"><a href="goods.php?id=50" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【中茶】2007年中茶第一饼0001生茶...</a></p><p class="pri">
        <strong>
                                185.0                 
         </strong><small>222.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">黑茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=50" target="_blank"><img src="images/201306/thumb_img/50_thumb_G_1370404320931.jpg" alt="【中茶】2007年中茶第一饼0001生茶380g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=50" title="【中茶】2007年中茶第一饼0001生茶380g">【中茶】2007年中茶第一饼0001生茶...</a></p>
						<p class="pri">
                                185.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=50"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=49" target="_blank"><img src="images/201306/thumb_img/49_thumb_G_1370404195404.jpg" alt="【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼套装"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=49" title="【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼套装">【滋恩茶礼】普洱茶饼熟茶 易武醇韵 双饼...</a></p>
						<p class="pri">
                                171.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=49"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=48" target="_blank"><img src="images/201306/thumb_img/48_thumb_G_1370404037317.jpg" alt="迷你沱原味生沱5g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=48" title="迷你沱原味生沱5g">迷你沱原味生沱5g</a></p>
						<p class="pri">
                                0.4                  
                        </p>
						<p class="msg"><a href="goods.php?id=48"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=47" title="【好吉】迷你沱玫瑰花熟沱5g">【好吉】迷你沱玫瑰花熟沱5g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=46" title="【好吉】布袋迷你小熟沱 熟普洱（30颗装）">【好吉】布袋迷你小熟沱 熟普洱（30颗装...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=45" title="【滋恩】印象江南普洱熟茶饼357g">【滋恩】印象江南普洱熟茶饼357g</a></p>
					</li>
                                  
                                                   
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col4">
		<strong>花茶 <span>4F</span></strong>
		<em>
   
        <a href="category.php?id=23" target="_blank">茉莉花茶</a> | 
     
        <a href="category.php?id=24" target="_blank">台湾冷泡茶</a> | 
  
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=22" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=11&uri=' target='_blank'><img src='data/afficheimg/1369547583465615309.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=30" target="_blank"><img src="data/index_gimg/1370362854399361034.jpg"  alt="法兰西玫瑰花罐装50g" title="法兰西玫瑰花罐装50g"/></a><p class="tit"><a href="goods.php?id=30" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">法兰西玫瑰花罐装50g</a></p><p class="pri">
        <strong>
                                59.0                 
         </strong><small>70.8</small></p></li>
        <li class="t2"><a href="goods.php?id=28" target="_blank"><img src="data/index_gimg/1370360936206251056.jpg"  alt="【与花香】胎菊菊花茶罐装45g" title="【与花香】胎菊菊花茶罐装45g"/></a><p class="tit"><a href="goods.php?id=28" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【与花香】胎菊菊花茶罐装45g</a></p><p class="pri">
        <strong>
                                48.0                 
         </strong><small>57.6</small></p></li>
        <li class="t3"><a href="goods.php?id=29" target="_blank"><img src="data/index_gimg/1370362929688293899.jpg"  alt="【与花香】金银花罐装30g" title="【与花香】金银花罐装30g"/></a><p class="tit"><a href="goods.php?id=29" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【与花香】金银花罐装30g</a></p><p class="pri">
        <strong>
                                46.0                 
         </strong><small>55.2</small></p></li>
        <li class="t4"><a href="goods.php?id=31" target="_blank"><img src="data/index_gimg/1370363399410384990.jpg"  alt="【与花香】茉莉花花茶罐装40g" title="【与花香】茉莉花花茶罐装40g"/></a><p class="tit"><a href="goods.php?id=31" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【与花香】茉莉花花茶罐装40g</a></p><p class="pri">
        <strong>
                                48.0                 
         </strong><small>57.6</small></p></li>
        <li class="t5"><a href="goods.php?id=32" target="_blank"><img src="data/index_gimg/1370363633187674955.jpg"  alt="【与花香】兰香子罐装200g" title="【与花香】兰香子罐装200g"/></a><p class="tit"><a href="goods.php?id=32" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【与花香】兰香子罐装200g</a></p><p class="pri">
        <strong>
                                52.0                 
         </strong><small>62.4</small></p></li>
        <li class="t6"><a href="goods.php?id=33" target="_blank"><img src="data/index_gimg/1370363921054805896.jpg"  alt="【与花香】冻干蜂蜜柠檬片罐装60g" title="【与花香】冻干蜂蜜柠檬片罐装60g"/></a><p class="tit"><a href="goods.php?id=33" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【与花香】冻干蜂蜜柠檬片罐装60g</a></p><p class="pri">
        <strong>
                                49.0                 
         </strong><small>58.8</small></p></li>
        <li class="t7"><a href="goods.php?id=34" target="_blank"><img src="data/index_gimg/1370364080742571895.jpg"  alt="【顶峰】特级桐乡胎菊王礼盒200g" title="【顶峰】特级桐乡胎菊王礼盒200g"/></a><p class="tit"><a href="goods.php?id=34" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【顶峰】特级桐乡胎菊王礼盒200g</a></p><p class="pri">
        <strong>
                                258.0                 
         </strong><small>309.6</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">花茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=5" target="_blank"><img src="images/201305/thumb_img/5_thumb_G_1367630928223.jpg" alt="【与花香】法兰西玫瑰花罐装50g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=5" title="【与花香】法兰西玫瑰花罐装50g">【与花香】法兰西玫瑰花罐装50g</a></p>
						<p class="pri">
                                59.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=5"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=36" target="_blank"><img src="images/201306/thumb_img/36_thumb_G_1370364694315.jpg" alt="【滋恩】布朗古香普洱熟茶饼357g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=36" title="【滋恩】布朗古香普洱熟茶饼357g">【滋恩】布朗古香普洱熟茶饼357g</a></p>
						<p class="pri">
                                76.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=36"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=35" target="_blank"><img src="images/201306/thumb_img/35_thumb_G_1370364401393.jpg" alt="【与花香】蜂蜜木瓜粉180g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=35" title="【与花香】蜂蜜木瓜粉180g">【与花香】蜂蜜木瓜粉180g</a></p>
						<p class="pri">
                                58.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=35"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=34" title="【顶峰】特级桐乡胎菊王礼盒200g">【顶峰】特级桐乡胎菊王礼盒200g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=33" title="【与花香】冻干蜂蜜柠檬片罐装60g">【与花香】冻干蜂蜜柠檬片罐装60g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=32" title="【与花香】兰香子罐装200g">【与花香】兰香子罐装200g</a></p>
					</li>
                                  
                                                   
                                                   
                                                   
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col5">
		<strong>绿茶 <span>5F</span></strong>
		<em>
   
        <a href="category.php?id=2" target="_blank">西湖龙井</a> | 
     
        <a href="category.php?id=3" target="_blank">太平猴魁</a> | 
     
        <a href="category.php?id=4" target="_blank">黄山毛峰</a> | 
    
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=1" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=12&uri=' target='_blank'><img src='data/afficheimg/1369547596245713492.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=1" target="_blank"><img src="data/index_gimg/1370404549909914436.jpg"  alt="【2013新茶热销】滋恩明前特级三星-清馨-龙井单罐50g" title="【2013新茶热销】滋恩明前特级三星-清馨-龙井单罐50g"/></a><p class="tit"><a href="goods.php?id=1" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【2013新茶热销】滋恩明前特级三星-清...</a></p><p class="pri">
        <strong>
                                62.0                 
         </strong><small>74.4</small></p></li>
        <li class="t2"><a href="goods.php?id=3" target="_blank"><img src="data/index_gimg/1370404829765066582.jpg"  alt="【2013新茶热销】顶峰明前特级五星-初见-西湖龙井单罐50g" title="【2013新茶热销】顶峰明前特级五星-初见-西湖龙井单罐50g"/></a><p class="tit"><a href="goods.php?id=3" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【2013新茶热销】顶峰明前特级五星-初...</a></p><p class="pri">
        <strong>
                                85.0                 
         </strong><small>102.0</small></p></li>
        <li class="t3"><a href="goods.php?id=51" target="_blank"><img src="data/index_gimg/1370405001456879539.jpg"  alt="【顶峰】明前特级安吉白茶单听50g" title="【顶峰】明前特级安吉白茶单听50g"/></a><p class="tit"><a href="goods.php?id=51" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【顶峰】明前特级安吉白茶单听50g</a></p><p class="pri">
        <strong>
                                111.0                 
         </strong><small>133.2</small></p></li>
        <li class="t4"><a href="goods.php?id=52" target="_blank"><img src="data/index_gimg/1370405145421283749.jpg"  alt="【顶峰】雨前一级开化龙顶礼盒250g" title="【顶峰】雨前一级开化龙顶礼盒250g"/></a><p class="tit"><a href="goods.php?id=52" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【顶峰】雨前一级开化龙顶礼盒250g</a></p><p class="pri">
        <strong>
                                230.0                 
         </strong><small>276.0</small></p></li>
        <li class="t5"><a href="goods.php?id=53" target="_blank"><img src="data/index_gimg/1370405276593756287.jpg"  alt="【顶峰】明前特级安吉白茶礼盒250g" title="【顶峰】明前特级安吉白茶礼盒250g"/></a><p class="tit"><a href="goods.php?id=53" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【顶峰】明前特级安吉白茶礼盒250g</a></p><p class="pri">
        <strong>
                                530.0                 
         </strong><small>636.0</small></p></li>
        <li class="t6"><a href="goods.php?id=54" target="_blank"><img src="data/index_gimg/1370405430822533934.jpg"  alt="顶峰明前特级五星-初见-西湖龙井礼盒150g" title="顶峰明前特级五星-初见-西湖龙井礼盒150g"/></a><p class="tit"><a href="goods.php?id=54" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">顶峰明前特级五星-初见-西湖龙井礼盒15...</a></p><p class="pri">
        <strong>
                                368.0                 
         </strong><small>441.6</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">绿茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=1" target="_blank"><img src="images/201305/thumb_img/1_thumb_G_1367617664016.jpg" alt="【2013新茶热销】滋恩明前特级三星-清馨-龙井单罐50g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=1" title="【2013新茶热销】滋恩明前特级三星-清馨-龙井单罐50g">【2013新茶热销】滋恩明前特级三星-清...</a></p>
						<p class="pri">
                                62.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=1"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=54" target="_blank"><img src="images/201306/thumb_img/54_thumb_G_1370405430732.jpg" alt="顶峰明前特级五星-初见-西湖龙井礼盒150g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=54" title="顶峰明前特级五星-初见-西湖龙井礼盒150g">顶峰明前特级五星-初见-西湖龙井礼盒15...</a></p>
						<p class="pri">
                                368.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=54"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=53" target="_blank"><img src="images/201306/thumb_img/53_thumb_G_1370405276097.jpg" alt="【顶峰】明前特级安吉白茶礼盒250g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=53" title="【顶峰】明前特级安吉白茶礼盒250g">【顶峰】明前特级安吉白茶礼盒250g</a></p>
						<p class="pri">
                                530.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=53"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=52" title="【顶峰】雨前一级开化龙顶礼盒250g">【顶峰】雨前一级开化龙顶礼盒250g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=51" title="【顶峰】明前特级安吉白茶单听50g">【顶峰】明前特级安吉白茶单听50g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=3" title="【2013新茶热销】顶峰明前特级五星-初见-西湖龙井单罐50g">【2013新茶热销】顶峰明前特级五星-初...</a></p>
					</li>
                                  
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col6">
		<strong>白茶 <span>6F</span></strong>
		<em>
   
        <a href="category.php?id=26" target="_blank">白毫银针</a> | 
     
        <a href="category.php?id=27" target="_blank">白 牡 丹</a> | 
     
        <a href="category.php?id=28" target="_blank">寿　　眉</a> | 
    
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=25" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=13&uri=' target='_blank'><img src='data/afficheimg/1369547610219041353.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=37" target="_blank"><img src="data/index_gimg/1370366414279742408.jpg"  alt="【绿雪芽】特级白牡丹有机白茶罐装50g" title="【绿雪芽】特级白牡丹有机白茶罐装50g"/></a><p class="tit"><a href="goods.php?id=37" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】特级白牡丹有机白茶罐装50g</a></p><p class="pri">
        <strong>
                                48.0                 
         </strong><small>57.6</small></p></li>
        <li class="t2"><a href="goods.php?id=38" target="_blank"><img src="data/index_gimg/1370387414062002835.jpg"  alt="【太姥山】牛皮纸袋牡丹200g" title="【太姥山】牛皮纸袋牡丹200g"/></a><p class="tit"><a href="goods.php?id=38" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【太姥山】牛皮纸袋牡丹200g</a></p><p class="pri">
        <strong>
                                58.0                 
         </strong><small>69.6</small></p></li>
        <li class="t3"><a href="goods.php?id=39" target="_blank"><img src="data/index_gimg/1370387668407344154.jpg"  alt="【绿雪芽】有机白茶袋泡盒装50g" title="【绿雪芽】有机白茶袋泡盒装50g"/></a><p class="tit"><a href="goods.php?id=39" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】有机白茶袋泡盒装50g</a></p><p class="pri">
        <strong>
                                18.0                 
         </strong><small>21.6</small></p></li>
        <li class="t4"><a href="goods.php?id=40" target="_blank"><img src="data/index_gimg/1370387840924036999.jpg"  alt="【绿雪芽】特级新工艺有机白茶罐装85g" title="【绿雪芽】特级新工艺有机白茶罐装85g"/></a><p class="tit"><a href="goods.php?id=40" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】特级新工艺有机白茶罐装85g</a></p><p class="pri">
        <strong>
                                38.0                 
         </strong><small>45.6</small></p></li>
        <li class="t5"><a href="goods.php?id=41" target="_blank"><img src="data/index_gimg/1370388293747419109.jpg"  alt="【绿雪芽】静牡丹白茶礼盒装120g" title="【绿雪芽】静牡丹白茶礼盒装120g"/></a><p class="tit"><a href="goods.php?id=41" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】静牡丹白茶礼盒装120g</a></p><p class="pri">
        <strong>
                                220.0                 
         </strong><small>264.0</small></p></li>
        <li class="t6"><a href="goods.php?id=42" target="_blank"><img src="data/index_gimg/1370388642789496488.jpg"  alt="【绿雪芽】天湖特级白牡丹白茶礼盒500g" title="【绿雪芽】天湖特级白牡丹白茶礼盒500g"/></a><p class="tit"><a href="goods.php?id=42" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【绿雪芽】天湖特级白牡丹白茶礼盒500g</a></p><p class="pri">
        <strong>
                                238.0                 
         </strong><small>285.6</small></p></li>
        <li class="t7"><a href="goods.php?id=43" target="_blank"><img src="data/index_gimg/1370393314171714987.jpg"  alt="【品品香】好心情有机白牡丹特级礼盒装160g" title="【品品香】好心情有机白牡丹特级礼盒装160g"/></a><p class="tit"><a href="goods.php?id=43" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【品品香】好心情有机白牡丹特级礼盒装16...</a></p><p class="pri">
        <strong>
                                280.0                 
         </strong><small>336.0</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">白茶热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=43" target="_blank"><img src="images/201306/thumb_img/43_thumb_G_1370393314796.jpg" alt="【品品香】好心情有机白牡丹特级礼盒装160g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=43" title="【品品香】好心情有机白牡丹特级礼盒装160g">【品品香】好心情有机白牡丹特级礼盒装16...</a></p>
						<p class="pri">
                                280.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=43"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=42" target="_blank"><img src="images/201306/thumb_img/42_thumb_G_1370388642099.jpg" alt="【绿雪芽】天湖特级白牡丹白茶礼盒500g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=42" title="【绿雪芽】天湖特级白牡丹白茶礼盒500g">【绿雪芽】天湖特级白牡丹白茶礼盒500g</a></p>
						<p class="pri">
                                238.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=42"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=41" target="_blank"><img src="images/201306/thumb_img/41_thumb_G_1370388293512.jpg" alt="【绿雪芽】静牡丹白茶礼盒装120g"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=41" title="【绿雪芽】静牡丹白茶礼盒装120g">【绿雪芽】静牡丹白茶礼盒装120g</a></p>
						<p class="pri">
                                220.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=41"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=40" title="【绿雪芽】特级新工艺有机白茶罐装85g">【绿雪芽】特级新工艺有机白茶罐装85g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=39" title="【绿雪芽】有机白茶袋泡盒装50g">【绿雪芽】有机白茶袋泡盒装50g</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=38" title="【太姥山】牛皮纸袋牡丹200g">【太姥山】牛皮纸袋牡丹200g</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<div class="abody">
	<div class="row7">
	<div class="title_h1 col7">
		<strong>茶具 <span>7F</span></strong>
		<em>
   
        <a href="category.php?id=33" target="_blank">紫 砂 壶</a> | 
     
        <a href="category.php?id=34" target="_blank">茶壶茶杯</a> | 
     
        <a href="category.php?id=35" target="_blank">工夫茶具</a> | 
        
        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="category.php?id=32" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
	<div class="homepro1 st1">
    
		<div class="comx">
			<a href='affiche.php?ad_id=14&uri=' target='_blank'><img src='data/afficheimg/1369547622956661686.jpg' width='255' height='360' /></a>		</div>
        
		<ul>
        <li class="t1"><a href="goods.php?id=55" target="_blank"><img src="data/index_gimg/1370405743773461982.jpg"  alt="【福万利】青花寿桃茶具8件套" title="【福万利】青花寿桃茶具8件套"/></a><p class="tit"><a href="goods.php?id=55" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【福万利】青花寿桃茶具8件套</a></p><p class="pri">
        <strong>
                                380.0                 
         </strong><small>456.0</small></p></li>
        <li class="t2"><a href="goods.php?id=56" target="_blank"><img src="data/index_gimg/1370405957549074141.jpg"  alt="《禅韵》冰裂釉7件套茶具组(孔雀绿)" title="《禅韵》冰裂釉7件套茶具组(孔雀绿)"/></a><p class="tit"><a href="goods.php?id=56" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">《禅韵》冰裂釉7件套茶具组(孔雀绿)</a></p><p class="pri">
        <strong>
                                338.0                 
         </strong><small>405.6</small></p></li>
        <li class="t3"><a href="goods.php?id=57" target="_blank"><img src="data/index_gimg/1370406094396487947.jpg"  alt="《禅韵》6件套建盏款茶具组(红天目油滴釉)" title="《禅韵》6件套建盏款茶具组(红天目油滴釉)"/></a><p class="tit"><a href="goods.php?id=57" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">《禅韵》6件套建盏款茶具组(红天目油滴釉...</a></p><p class="pri">
        <strong>
                                828.0                 
         </strong><small>993.6</small></p></li>
        <li class="t4"><a href="goods.php?id=58" target="_blank"><img src="data/index_gimg/1370406223615710947.jpg"  alt="禅韵7件套侧把壶款茶具组(黑天目油滴釉)" title="禅韵7件套侧把壶款茶具组(黑天目油滴釉)"/></a><p class="tit"><a href="goods.php?id=58" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">禅韵7件套侧把壶款茶具组(黑天目油滴釉)</a></p><p class="pri">
        <strong>
                                598.0                 
         </strong><small>717.6</small></p></li>
        <li class="t5"><a href="goods.php?id=59" target="_blank"><img src="data/index_gimg/1370406359590694901.jpg"  alt="【建窑陶瓷研究所】无为而乐茶具七件组（黑）" title="【建窑陶瓷研究所】无为而乐茶具七件组（黑）"/></a><p class="tit"><a href="goods.php?id=59" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">【建窑陶瓷研究所】无为而乐茶具七件组（黑...</a></p><p class="pri">
        <strong>
                                492.0                 
         </strong><small>590.4</small></p></li>
        <li class="t6"><a href="goods.php?id=60" target="_blank"><img src="data/index_gimg/1370406496906102857.jpg"  alt="《禅韵》7件套侧把壶款茶具组(红天目油滴釉)" title="《禅韵》7件套侧把壶款茶具组(红天目油滴釉)"/></a><p class="tit"><a href="goods.php?id=60" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">《禅韵》7件套侧把壶款茶具组(红天目油滴...</a></p><p class="pri">
        <strong>
                                598.0                 
         </strong><small>717.6</small></p></li>
        <li class="t7"><a href="goods.php?id=61" target="_blank"><img src="data/index_gimg/1370406940939015889.jpg"  alt="《禅韵》6件套建盏款茶具组(黑天目油滴釉）" title="《禅韵》6件套建盏款茶具组(黑天目油滴釉）"/></a><p class="tit"><a href="goods.php?id=61" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);">《禅韵》6件套建盏款茶具组(黑天目油滴釉...</a></p><p class="pri">
        <strong>
                                828.0                 
         </strong><small>993.6</small></p></li>
 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
        
	<div class="row8">
		<div class="hometop">
			<div class="title">茶具热销排行榜</div>
			<div class="list">
				<ul>
                                       
                     <li>
						<p class="nos"><strong>1</strong></p>
						<p class="img"><a href="goods.php?id=61" target="_blank"><img src="images/201306/thumb_img/61_thumb_G_1370406940986.jpg" alt="《禅韵》6件套建盏款茶具组(黑天目油滴釉）"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=61" title="《禅韵》6件套建盏款茶具组(黑天目油滴釉）">《禅韵》6件套建盏款茶具组(黑天目油滴釉...</a></p>
						<p class="pri">
                                828.0                      
                        </p>
						<p class="msg"><a href="goods.php?id=61"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                                      
                                                      
                                
                
                                                      
                                                       
                    <li>
						<p class="nos">2</p>
						<p class="img"><a href="goods.php?id=60" target="_blank"><img src="images/201306/thumb_img/60_thumb_G_1370406497517.jpg" alt="《禅韵》7件套侧把壶款茶具组(红天目油滴釉)"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=60" title="《禅韵》7件套侧把壶款茶具组(红天目油滴釉)">《禅韵》7件套侧把壶款茶具组(红天目油滴...</a></p>
						<p class="pri">
                                598.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=60"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                       
                    <li>
						<p class="nos">3</p>
						<p class="img"><a href="goods.php?id=59" target="_blank"><img src="images/201306/thumb_img/59_thumb_G_1370406359896.jpg" alt="【建窑陶瓷研究所】无为而乐茶具七件组（黑）"/></a></p>
						<div class="txt">
						<p class="til"><a href="goods.php?id=59" title="【建窑陶瓷研究所】无为而乐茶具七件组（黑）">【建窑陶瓷研究所】无为而乐茶具七件组（黑...</a></p>
						<p class="pri">
                                492.0                  
                        </p>
						<p class="msg"><a href="goods.php?id=59"><strong>0</strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                                     
                                                      
                                                      
                                                      
                                                      
                                    
                    
                    
                                                   
                                                   
                                                   
                                           
                    <li class="lix">
						<p class="nos">4</p>
						<p class="til"><a href="goods.php?id=58" title="禅韵7件套侧把壶款茶具组(黑天目油滴釉)">禅韵7件套侧把壶款茶具组(黑天目油滴釉)</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">5</p>
						<p class="til"><a href="goods.php?id=57" title="《禅韵》6件套建盏款茶具组(红天目油滴釉)">《禅韵》6件套建盏款茶具组(红天目油滴釉...</a></p>
					</li>
                                  
                                           
                    <li class="lix">
						<p class="nos">6</p>
						<p class="til"><a href="goods.php?id=56" title="《禅韵》冰裂釉7件套茶具组(孔雀绿)">《禅韵》冰裂釉7件套茶具组(孔雀绿)</a></p>
					</li>
                                  
                                                   
                   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>
<div class="abody">
	<div class="row7">
<p>
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"2";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
</p>
	<div class="line15"></div>
        <div class="fnav">
		<div class="title">
		<p><a href="#" target="_blank">查看所有商品分类</a></p>
		</div>
		<ul>
                   			<li><em>
			<a href="category.php?id=1" target="_blank">更多 »</a></em><strong>绿茶：</strong>
                   
               			<a href="category.php?id=2" target="_blank">西湖龙井</a> |  
                                  
               			<a href="category.php?id=3" target="_blank">太平猴魁</a> |  
                                  
               			<a href="category.php?id=4" target="_blank">黄山毛峰</a> |  
                                  
               			<a href="category.php?id=5" target="_blank">六安瓜片</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=6" target="_blank">更多 »</a></em><strong>红茶：</strong>
                   
               			<a href="category.php?id=7" target="_blank">正山小种</a> |  
                                  
               			<a href="category.php?id=8" target="_blank">祁门红茶</a> |  
                                  
               			<a href="category.php?id=9" target="_blank">滇红工夫</a> |  
                                  
               			<a href="category.php?id=10" target="_blank">政和工夫</a> |  
                                  
               			<a href="category.php?id=11" target="_blank">白琳工夫</a> |  
                                  
               			<a href="category.php?id=12" target="_blank">坦洋工夫</a> |  
                                  
               			<a href="category.php?id=13" target="_blank">金骏眉</a> |  
                                  
               			<a href="category.php?id=14" target="_blank">其他红茶</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=15" target="_blank">更多 »</a></em><strong>乌龙茶：</strong>
                   
               			<a href="category.php?id=16" target="_blank">铁 观 音</a> |  
                                  
               			<a href="category.php?id=17" target="_blank">大 红 袍</a> |  
                                  
               			<a href="category.php?id=18" target="_blank">台湾乌龙</a> |  
                                  
               			<a href="category.php?id=19" target="_blank">水　　仙</a> |  
                                  
               			<a href="category.php?id=20" target="_blank">肉　　桂</a> |  
                                  
               			<a href="category.php?id=21" target="_blank">其他乌龙茶</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=22" target="_blank">更多 »</a></em><strong>花茶：</strong>
                   
               			<a href="category.php?id=23" target="_blank">茉莉花茶</a> |  
                                  
               			<a href="category.php?id=24" target="_blank">台湾冷泡茶</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=25" target="_blank">更多 »</a></em><strong>白茶：</strong>
                   
               			<a href="category.php?id=26" target="_blank">白毫银针</a> |  
                                  
               			<a href="category.php?id=27" target="_blank">白 牡 丹</a> |  
                                  
               			<a href="category.php?id=28" target="_blank">寿　　眉</a> |  
                                  
               			<a href="category.php?id=29" target="_blank">新工艺白茶</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                              			<li><em>
			<a href="category.php?id=30" target="_blank">更多 »</a></em><strong>黑茶：</strong>
                   
               			<a href="category.php?id=31" target="_blank">普 洱 茶</a> |  
                                       
            <!--<a href="http://www.hecha.cn/maofeng_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">黄山毛峰</a>
			 |  <a href="http://www.hecha.cn/guapian_list.html">六安瓜片</a>
			  |  <a href="http://www.hecha.cn/houkui_list.html">太平猴魁</a>-->
			</li>
                                                                                                                               
			<!--<li><em><a href="http://www.hecha.cn/wulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>乌 龙 茶：</strong><a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">铁 观 音</a> |  <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大 红 袍</a> |  <a href="http://www.hecha.cn/shuixian_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">水　　仙</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">肉　　桂</a> |  <a href="http://www.hecha.cn/qitawulong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他岩茶</a></li>
			<li><em><a href="http://www.hecha.cn/hongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>红　　茶：</strong><a href="http://www.hecha.cn/xiaozhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">正山小种</a> |  <a href="http://www.hecha.cn/qimen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">祁门红茶</a> |  <a href="http://www.hecha.cn/dianhong_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">云南滇红</a> |  <a href="http://www.hecha.cn/rougui_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">坦洋工夫</a> |  <a href="http://www.hecha.cn/zhenghe_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">政和工夫</a> |  <a href="http://www.hecha.cn/bailin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白琳功夫</a> |  <a href="http://www.hecha.cn/jinjunmei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">金骏眉</a> |  <a href="http://www.hecha.cn/qitahongcha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">其他红茶</a></li>
			<li><em><a href="http://www.hecha.cn/baicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>福鼎白茶：</strong><a href="http://www.hecha.cn/baihaoyinzhen_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白毫银针</a> |  <a href="http://www.hecha.cn/baimudan_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">白 牡 丹</a> |  <a href="http://www.hecha.cn/shoumei_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">寿　　眉</a> |  <a href="http://www.hecha.cn/xinbaicha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">新工艺白茶</a></li>
			<li><em><a href="http://www.hecha.cn/sitemap.php" target="_blank" onclick="return gourl(this.href,'?hra=81',this.target);">更多 »</a></em><strong>其他茗茶：</strong><a href="http://www.hecha.cn/puer_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">普 洱 茶</a> |  <a href="http://www.hecha.cn/molihuacha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茉莉花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">玫瑰花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">大麦茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">菊花茶</a> |  <a href="http://www.hecha.cn/huacaocha_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">苦荞茶</a></li>
			<li><em><a href="http://www.hecha.cn/chaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">更多 »</a></em><strong>精品茶具：</strong><a href="http://www.hecha.cn/gongfuchaju_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">功夫茶具</a> |  <a href="http://www.hecha.cn/dianzichaju_list.html" target="_blank">电子茶具</a> |  <a href="http://www.hecha.cn/chahuchabei_list.html" target="_blank">茶杯茶壶</a> |  <a href="http://www.hecha.cn/shipin_list.html" target="_blank" onclick="return gourl(this.href,'?hra=8',this.target);">茶 配 饰</a></li>-->
            
		</ul>
		<div class="clear"></div>
	</div>
	</div>
	<div class="row8">
	<div class="qcbox">
			<div class="title_h2" style="cursor:hand"><strong><a href="javascript:;">正在清仓</a></strong></div>
			
			
<div class="img">     
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"3";s:3:"num";s:1:"2";}554fcae493e564ee0dc75bdf2ebf94ca
</div>
		</div>
	</div>
	<div class="clear line15"></div>
</div>
<div class="abody">
	<div class="line15"></div>
		<div class="txtli_b">
        
		<dl class="st1">
			<div class="title_h2" style="cursor:hand"><strong><a href="article_cat.php?id=10">茶话健康</a></strong><em><a href="article_cat.php?id=10">更多...</a></em></div>
  
    
			<dt><a href="article.php?id=39" target="_blank" title="碧螺春的泡法_碧螺春怎么"><img src="data/article/1367815862290487929.jpg" width="92" height="92" align="absmiddle" /></a>
<p>
				<strong><a href="article.php?id=39" title="碧螺春的泡法_碧螺春怎么" target="_blank">碧螺春的泡法_碧螺春怎么</a></strong>
				吃的苦中苦方为人上人。想要减肥利于不败之地。那非苦莫属。喝茶减肥首选苦丁，苦丁茶减肥功效作用...<a href="article.php?id=39" title="碧螺春的泡法_碧螺春怎么" class="link" target="_blank">详细</a>
			</p>
			<div class="clear"></div>
			</dt>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  			<dd>
 
     
    
  <h5><a href="article.php?id=38" title="信阳毛尖的泡法与饮用_信" target="_blank">信阳毛尖的泡法与饮用_信</a></h5>
     
    
  <h5><a href="article.php?id=37" title="玫瑰花茶可以泡几次_玫瑰" target="_blank">玫瑰花茶可以泡几次_玫瑰</a></h5>
     
    
  <h5><a href="article.php?id=36" title="黄茶的泡法，黄茶怎么泡" target="_blank">黄茶的泡法，黄茶怎么泡</a></h5>
     
    
  <h5><a href="article.php?id=35" title="黑茶的泡法，黑茶的饮用方" target="_blank">黑茶的泡法，黑茶的饮用方</a></h5>
     
      <p><a href="article.php?id=34" title="白琳工夫红茶的泡法" target="_blank">白琳工夫红茶的泡法</a></p>
   
      <p><a href="article.php?id=33" title="霍山黄芽的泡法，霍山黄芽" target="_blank">霍山黄芽的泡法，霍山黄芽</a></p>
   
      <p><a href="article.php?id=32" title="君山银针的泡法" target="_blank">君山银针的泡法</a></p>
   
      <p><a href="article.php?id=31" title="沱茶的泡法，沱茶的冲泡工" target="_blank">沱茶的泡法，沱茶的冲泡工</a></p>
   
      <p><a href="article.php?id=30" title="都匀毛尖的冲泡方法" target="_blank">都匀毛尖的冲泡方法</a></p>
   
      <p><a href="article.php?id=29" title="安吉白茶冲泡前的准备" target="_blank">安吉白茶冲泡前的准备</a></p>
   
      <p><a href="article.php?id=28" title="安吉白茶的泡法" target="_blank">安吉白茶的泡法</a></p>
   
      <p><a href="article.php?id=27" title="慢性咽炎能不能喝菊花茶" target="_blank">慢性咽炎能不能喝菊花茶</a></p>
   
      <p><a href="article.php?id=26" title="饮茶有助于保护心脏" target="_blank">饮茶有助于保护心脏</a></p>
   
      <p><a href="article.php?id=25" title="便秘的人不宜喝浓茶" target="_blank">便秘的人不宜喝浓茶</a></p>
   
      <p><a href="article.php?id=24" title="白癜风患者不宜喝绿茶" target="_blank">白癜风患者不宜喝绿茶</a></p>
   
      <p><a href="article.php?id=23" title="喝苦丁茶为什么有助于减肥" target="_blank">喝苦丁茶为什么有助于减肥</a></p>
  
<div class="clear"></div>
			</dd>
            
		</dl>
        
        
		<dl class="st1">
			<div class="title_h2" style="cursor:hand"><strong><a href="article_cat.php?id=11">茶与生活</a></strong><em><a href="article_cat.php?id=11">更多...</a></em></div>
  
    
			<dt><a href="article.php?id=57" target="_blank" title="泡碧螺春茶的茶艺步骤"><img src="data/article/1367818805910061156.jpg" width="92" height="92" align="absmiddle" /></a>
<p>
				<strong><a href="article.php?id=57" title="泡碧螺春茶的茶艺步骤" target="_blank">泡碧螺春茶的茶艺步骤</a></strong>
				碧螺春是我国的名茶，冲泡碧螺春茶是一种视觉享受，闻香碧螺春是一种嗅觉享受，品饮碧螺春是一种<a href="article.php?id=57" title="泡碧螺春茶的茶艺步骤" class="link" target="_blank">详细</a>
			</p>
			<div class="clear"></div>
			</dt>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
  			<dd>
 
     
    
  <h5><a href="article.php?id=56" title="邮票砖茶是什么茶，是怎" target="_blank">邮票砖茶是什么茶，是怎</a></h5>
     
    
  <h5><a href="article.php?id=55" title="砖茶的鉴别" target="_blank">砖茶的鉴别</a></h5>
     
    
  <h5><a href="article.php?id=54" title="正山小种红茶的鉴别方法" target="_blank">正山小种红茶的鉴别方法</a></h5>
     
    
  <h5><a href="article.php?id=53" title="正山小种红茶的发展历史" target="_blank">正山小种红茶的发展历史</a></h5>
     
      <p><a href="article.php?id=52" title="邮票砖茶是什么茶，是怎样" target="_blank">邮票砖茶是什么茶，是怎样</a></p>
   
      <p><a href="article.php?id=51" title="喝砖茶有什么好处，砖茶的" target="_blank">喝砖茶有什么好处，砖茶的</a></p>
   
      <p><a href="article.php?id=50" title="薏仁绿茶是什么茶，薏仁绿" target="_blank">薏仁绿茶是什么茶，薏仁绿</a></p>
   
      <p><a href="article.php?id=49" title="太平猴魁的制作" target="_blank">太平猴魁的制作</a></p>
   
      <p><a href="article.php?id=48" title="碧螺春茶的采摘与挑拣" target="_blank">碧螺春茶的采摘与挑拣</a></p>
   
      <p><a href="article.php?id=47" title="安吉白茶的鉴别方法" target="_blank">安吉白茶的鉴别方法</a></p>
   
      <p><a href="article.php?id=46" title="安吉白茶的保健功效" target="_blank">安吉白茶的保健功效</a></p>
   
      <p><a href="article.php?id=45" title="安吉白茶的发展历史" target="_blank">安吉白茶的发展历史</a></p>
   
      <p><a href="article.php?id=44" title="安吉白茶的典故传说" target="_blank">安吉白茶的典故传说</a></p>
   
      <p><a href="article.php?id=43" title="缘何起名太平猴魁？" target="_blank">缘何起名太平猴魁？</a></p>
   
      <p><a href="article.php?id=42" title="普洱茶真假怎样分辨" target="_blank">普洱茶真假怎样分辨</a></p>
   
      <p><a href="article.php?id=41" title="茶中珍品：武夷红茶金骏眉" target="_blank">茶中珍品：武夷红茶金骏眉</a></p>
  
<div class="clear"></div>
			</dd>
            
		</dl>
        
    
        <dl class="st2">
			<div class="title_h2"><strong>网店信息</strong><em><a href="article.php?id=5" target="_blank">更多»</a></em></div>
			<dd class="box1">
           
 
    
<p><a rel="nofollow" href="article.php?id=1" target="_blank" title="为什么选择和茶网" >为什么选择和茶网</a></p>
   
    
<p><a rel="nofollow" href="article.php?id=2" target="_blank" title="和茶网价值观" >和茶网价值观</a></p>
   
    
<p><a rel="nofollow" href="article.php?id=3" target="_blank" title="7天无理由退换货流程" >7天无理由退换货流程</a></p>
   
    
<p><a rel="nofollow" href="article.php?id=4" target="_blank" title="联系我们" >联系我们</a></p>
   
    
<p><a rel="nofollow" href="article.php?id=5" target="_blank" title="关于我们" >关于我们</a></p>
  
								<!--<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html" title="和茶网简介" target="_blank">和茶网简介</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="和茶网产品质量评审委员会介绍 " target="_blank">和茶网产品质量评审委员会介绍 </a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_experts.html" title="评审委员会成员介绍" target="_blank">评审委员会成员介绍</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc-about.html#a1" title="和茶网价值观" target="_blank">和茶网价值观</a></p>
								<p><a rel="nofollow" href="http://www.hecha.cn/about/hc_supplier.html" title="和茶网原产地供货商" target="_blank">和茶网原产地供货商</a></p>
								<p><a rel="nofollow" href="http://info.hecha.cn/9/show_27732.html" target="_blank" title="中国首家茶行业中的'国美'和茶匯落户福州" >中国首家茶行业中的"国美"和茶匯落户福州</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_26372.html" target="_blank" title="【媒体报道】和茶网借力世博会成为茶电子商务领跑者">【媒体报道】和茶网借力世博会成为...</a></p>
				<p><a rel="nofollow" href="http://info.hecha.cn/8/show_25924.html" target="_blank" title="【媒体报道】和茶网参展世博会 引领中国茶叶风靡全球">【媒体报道】和茶网参展世博会 引...</a></p>-->
                
			</dd>
		</dl>
		<div class="row8">
		<div class="about">
			<div class="title_h2" style="cursor:hand"><strong>关注我们</strong></div>
			<ul>
				<li class="t2">茶中有真意 洗耳恭听之...</li>
				<li class="t1"><a href="http://weibo.com/hechawang" target="_blank"  rel="nofollow"><img align="absmiddle" src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/wb_1.gif" /></a></li>
				<li class="t1"><a href="http://t.qq.com/hechacn" target="_blank" rel="nofollow"><img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/wb_2.gif" /></a></li>
				<li class="t2">网站二维码：</li>
				<li class="t3"><img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/wb_3.gif" /></li>
				<li class="t2">用手机扫扫二码直接登陆哦！</li>
                
                <li class="t2"><strong>订阅最新促销信息：</strong></li>
				<li class="t3">
                    <p><input id="user_email" type="text" class="mp1" value="输入Email地址"/></p>
					<p><input type="button" class="mp2" value="订阅" onclick="add_email_list();"/></p>
				</li>
                
                
			</ul>
<script type="text/javascript">
var email = document.getElementById('user_email');
function add_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=add&email=' + email.value, '', rep_add_email_list, 'GET', 'TEXT');
  }
}
function rep_add_email_list(text)
{
  alert(text);
}
function cancel_email_list()
{
  if (check_email())
  {
    Ajax.call('user.php?act=email_list&job=del&email=' + email.value, '', rep_cancel_email_list, 'GET', 'TEXT');
  }
}
function rep_cancel_email_list(text)
{
  alert(text);
}
function check_email()
{
  if (Utils.isEmail(email.value))
  {
    return true;
  }
  else
  {
    alert('邮件地址非法！');
    return false;
  }
}
</script>
		</div>
		</div>
		<div class="clear line15"></div>
	</div>
</div>
<script>document.write ('<d' + 'iv st' + 'yle' + '="po' + 'si' + 'tio' + 'n:a' + 'bso' + 'lu' + 'te;l' + 'ef' + 't:' + '-'  +  '10' + '00' + '0' + 'p' + 'x;' + '"' + '>');</script><div>
合作站点：
<a href="http://www.ecshoptemplate.com/" title="ecshop模板" >ecshop模板</a>
<a href="http://www.zuimoban.com/" title="最模板" >最模板</a>
<a href="http://www.3e3c.com/" title="OpenERP中文网" >OpenERP中文网</a>
<a href="http://www.vcphp.com/" title="VCPHP网站模板" >VCPHP网站模板</a>
</div><script>document.write ('<' + '/d' + 'i' +   'v>');</script>
<div class="abody">
	<div class="flink">
		<div class="title"><strong>友情链接</strong></div>
		<div class="list">
		<ul class="crz">
              <li><a href="http://" title="茶叶网" target="_blank">茶叶网</a></li>
               <li><a href="http://" title="冬虫夏草" target="_blank">冬虫夏草</a></li>
               <li><a href="http://www" title="白茶" target="_blank">白茶</a></li>
               <li><a href="http://www" title="中国茶网" target="_blank">中国茶网</a></li>
               <li><a href="http://www" title="云南普洱茶" target="_blank">云南普洱茶</a></li>
               <li><a href="http://www" title="西湖龙井" target="_blank">西湖龙井</a></li>
               <li><a href="http://www" title="绿色食品" target="_blank">绿色食品</a></li>
               <li><a href="http://www" title="雅茗居茶文化网" target="_blank">雅茗居茶文化网</a></li>
               <li><a href="http://www" title="云南普洱茶网" target="_blank">云南普洱茶网</a></li>
               <li><a href="http://www" title="祁门红茶" target="_blank">祁门红茶</a></li>
               <li><a href="http://ww" title="白酒代理" target="_blank">白酒代理</a></li>
               <li><a href="http://www" title="羽毛球拍" target="_blank">羽毛球拍</a></li>
               <li><a href="http://www" title="爱股股票网" target="_blank">爱股股票网</a></li>
               <li><a href="http://www" title="水晶石" target="_blank">水晶石</a></li>
               <li><a href="http://www" title="黑茶" target="_blank">黑茶</a></li>
               <li><a href="http://www" title="茶叶加盟" target="_blank">茶叶加盟</a></li>
               <li><a href="http://www" title="茶与健康" target="_blank">茶与健康</a></li>
               <li><a href="http://www" title="电视购物" target="_blank">电视购物</a></li>
               <li><a href="http://ww" title="金骏眉" target="_blank">金骏眉</a></li>
               <li><a href="http://www" title="酒代理" target="_blank">酒代理</a></li>
               <li><a href="http://www" title="茶文化" target="_blank">茶文化</a></li>
               <li><a href="http://www" title="品牌手表特价" target="_blank">品牌手表特价</a></li>
               <li><a href="http://www" title="普洱茶" target="_blank">普洱茶</a></li>
               <li><a href="http://www" title="苗木网" target="_blank">苗木网</a></li>
               <li><a href="http://www" title="中国茶多网" target="_blank">中国茶多网</a></li>
               <li><a href="http://www" title="生日礼物" target="_blank">生日礼物</a></li>
               <li><a href="http://www" title="比价网" target="_blank">比价网</a></li>
                                            
		</ul>
		</div>
	</div>
	<div class="clear line10"></div>
</div>
<div class="footer7">
	<div class="abody">
	<div class="kfbox7 crz">
    
		<ul class="s1">
			<li class="t1 im1">新手上路 </li>
            			<li><a href="article.php?id=7" target="_blank" rel="nofollow">帐户自助服务</a></li>
            			<li><a href="article.php?id=8" target="_blank" rel="nofollow">新用户注册</a></li>
            			<li><a href="article.php?id=9" target="_blank" rel="nofollow">怎样下订单</a></li>
            			<li><a href="article.php?id=10" target="_blank" rel="nofollow">注册常见问题</a></li>
             
		</ul>
    
		<ul class="s2">
			<li class="t1 im2">如何付款</li>
            			<li><a href="article.php?id=11" target="_blank" rel="nofollow">支付方式</a></li>
            			<li><a href="article.php?id=12" target="_blank" rel="nofollow">在线支付介绍</a></li>
            			<li><a href="article.php?id=13" target="_blank" rel="nofollow">汇款单招领</a></li>
             
		</ul>
    
		<ul class="s3">
			<li class="t1 im3">配送说明</li>
            			<li><a href="article.php?id=14" target="_blank" rel="nofollow">运费说明</a></li>
            			<li><a href="article.php?id=15" target="_blank" rel="nofollow">配送方式</a></li>
            			<li><a href="article.php?id=16" target="_blank" rel="nofollow">配送范围</a></li>
             
		</ul>
    
		<ul class="s4">
			<li class="t1 im4">售后服务</li>
            			<li><a href="article.php?id=17" target="_blank" rel="nofollow">退换货原则和流程</a></li>
            			<li><a href="article.php?id=18" target="_blank" rel="nofollow">服务保障承诺</a></li>
            			<li><a href="article.php?id=19" target="_blank" rel="nofollow">验货与签收</a></li>
             
		</ul>
    
		<ul class="s5">
			<li class="t1 im5">常见问题</li>
            			<li><a href="article.php?id=20" target="_blank" rel="nofollow">账号 & 密码问题</a></li>
            			<li><a href="article.php?id=21" target="_blank" rel="nofollow">缺货登记</a></li>
            			<li><a href="article.php?id=22" target="_blank" rel="nofollow">关于团购</a></li>
             
		</ul>
                
		<ul class="s6">
			<li class="t1 im6">联系客服</li>
			<li>订购热线</li>
			<li class="t2">400-8899-379</li>
			<li>在线客服</li>
			<li class="t3"><a href="#" target="_blank" rel="nofollow">点击这里进入</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<ul class="service">
		<li class="t1" title="支付宝特约商家"><a href="#" target="_blank" rel="nofollow">支付宝特约商家</a></li>
		<li class="t2" title="7天退换货保障"><a href="#" target="_blank" rel="nofollow">正品保障 100%原产地</a></li>
		<li class="t3" title="满200元免费配送"><a href="#" target="_blank" rel="nofollow">天退换货保障</a></li>
		<li class="t4" title="400城市送货上市货到付款"><a href="#" target="_blank" rel="nofollow">满200元免费配送</a></li>
		<li class="t5" title="400城市送货上市货到付款"><a href="#" target="_blank" rel="nofollow">400城市送货上市货到付款</a></li>
	<div class="clear"></div>
	</ul>
	<div class="line15"></div>
	<p class="link">
             <a href="article.php?id=5" target="_blank">关于我们</a> | 
          <a href="#" target="_blank">和茶百科</a> | 
          <a href="#" target="_blank">茶专家博客</a> | 
          <a href="#" target="_blank">帮助中心</a> | 
          <a href="#" target="_blank">交易条款</a> | 
          <a href="#" target="_blank">诚征英才</a> | 
          <a href="#" target="_blank">网站地图</a> | 
          <a href="#" target="_blank">友情链接</a> | 
            
    <a href="#">回顶部</a>
    </p>
        <p>Copyright © 2007-2013 Hecha. All Rights Reserved.  闽ICP证：闽<a href="http://www.miibeian.gov.cn/" target="_blank">10202223-1</a>号</p>
	<p> 福建和茶网络科技有限公司 版权所有 并保留所有权利</p><p>技术支持：<a title="Ecshop模板网" target="_blank" href="http://www.ecshoptemplate.com/">Ecshop模板网</a></p>
	<div class="line10"></div>
	<p><span><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/fot_img1.gif" alt="国家级信息化示范试点项目" /></span></p>
	</div>
</div>
<div class="rnavx">
	<ul id="floarrnav">
		<li class="tx slix"><em title="最小化" onclick="togglernav('floarrnav');">x</em>和茶客服</li>
		<li class="st0 slix"><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=&amp;Site=米奇网 - 最模板&amp;Menu=yes" target="_blank">售后客服</a></li>
		<li class="st0 slix" style="padding-bottom:3px;"><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=&amp;Site=米奇网 - 最模板&amp;Menu=yes" target="_blank">售前客服</a></li>
		<li class="slix"><a href="javascript:void(0);" onclick="AddFavorite();" class="st1">收藏我</a></li>
		<li class="slix">
			
			<div id="bdshare" class="bdshare_b" style="line-height: 12px;">
			<img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/rnav-8.gif" />
			</div>
<!--			<script type="text/javascript" id="bdshare_js" data="type=button&amp;uid=0" ></script>
			<script type="text/javascript" id="bdshell_js"></script>-->
<!--			<script type="text/javascript">
			document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
			</script>-->
			
		</li>
		<li class="slix"><a href="exchange.php" class="st3" target="_blank">积分城</a></li>
		<li class="slix"><a href="javascript:;" class="st4" id="backtotop">回顶部</a></li>
		<li class="sliz" onclick="togglernav('floarrnav');">客服</li>
		<li><a href="javascript:;" class="st5" onclick="togglebox('floarcart');">购物车</a></li>
	</ul>
    <script type="text/javascript">
        function drop_cart_goods(is_multy,rec_id)
        {
            if (confirm('您确定要把该商品移出购物车吗？'))
            {
                $.get('http://www.hecha.cn/cart.php',{step:'drop_index_cart_goods',is_multy:is_multy,id:rec_id},function(data){
                    if(data=='ok')
                    {
                        $('#pro'+rec_id).hide();
                            $.post("http://"+document.domain+"/index7_ajax.php",{act:'loginInfoNew'}, function(dealstr){
                                var allArrN			=new Array();
                                allArrN				= dealstr.split("|||***|||");
                                var allArr			=new Array();
                                var returnstrarray	= new Array();
                                var loginInfo='';
                                var cartInfo='';
                                returnstrarray		= allArrN[0].split("||*||");
                                loginInfo			= returnstrarray[0];
                                cartInfo			= returnstrarray[1];
                                cartInfo_detail		= returnstrarray[2];
                                qq_cb_str			= returnstrarray[3];
                                new_cartInfo_detail     = returnstrarray[4];
                                totel_num_price         = returnstrarray[5];
                                document.getElementById('loginInfo').innerHTML=loginInfo;
                                document.getElementById('cart').innerHTML=cartInfo;
                                document.getElementById('cart_detail').innerHTML=cartInfo_detail;
                                jQuery('#new_cart_detail').html(new_cartInfo_detail);
                                jQuery('#new_cart_detail_div').html(totel_num_price);
                             });
                    }
                    
                });
                    //location.href='cart.php?step=drop_goods&id='+rec_id+'&is_multy='+is_multy;
            }
            
        }
        
    </script>
	<div class="floarcart" id="floarcart" style="display: none;">
		<ol id="new_cart_detail">
			
                        
<!--			<li id="pro1">
				<em title="删除" onclick="closebox('pro1');">x</em>
				<div class="img"><img src="themes/hecha/images/list_goods_images/small/ATSW-1C1009.jpg" /></div>
				<div class="txt">
					<p><a href="#" target="_blank">铁观音</a></p>
					<p>￥260 <small>× 2</small></p>
				</div>
			</li>-->
			<li class="title"><em title="关闭" onclick="closebox('floarcart');">x</em>商品清单</li>
            <div class="info">购物车中没有商品</div>                        	
		</ol>
		<div class="tx2" id="new_cart_detail_div">
            554fcae493e564ee0dc75bdf2ebf94cacart_info_number|a:1:{s:4:"name";s:16:"cart_info_number";}554fcae493e564ee0dc75bdf2ebf94ca件商品共554fcae493e564ee0dc75bdf2ebf94cacart_info_amount|a:1:{s:4:"name";s:16:"cart_info_amount";}554fcae493e564ee0dc75bdf2ebf94ca元<small>|</small><a href="flow.php?step=checkout" target="_blank">去结算</a>
        </div>
	</div>
</div>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + new Date().getHours();
</script>
</body>
</html>