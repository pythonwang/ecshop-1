<?php exit;?>a:3:{s:8:"template";a:6:{i:0;s:65:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/goods.dwt";i:1;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_header.lbi";i:2;s:87:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/category_tree_float.lbi";i:3;s:75:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/ur_here.lbi";i:4;s:76:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/comments.lbi";i:5;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_footer.lbi";}s:7:"expires";i:1424280920;s:8:"maketime";i:1424277320;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>【滋恩】特级大红袍圆罐装50g_大 红 袍_乌龙茶_米奇网演示站</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/goods6.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/commentv5.2.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/goods6.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/commentv5.2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/hecha/js/generalt.js"></script>
<script type="text/javascript" src="themes/hecha/js/utility.js"></script>
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="themes/hecha/themes//hechaV2.5/skin/tm7/js/common.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
<script type="text/javascript" src="js/utils.js"></script>
<!--<script type="text/javascript" charset="utf-8">
$(document).ready(function(){
	$("body").find("img").not(".hd_img,.goods_small_img").lazyload({threshold : 300,effect : "fadeIn",placeholder : "http://www.hecha.cn/themes/hechaV2.5/skin/tm5/images/grey.gif",failurelimit : 10});
});
</script>-->
<style type="text/css">
#attr li{overflow:hidden;}
</style>
</head>
<style type="text/css">
.scrollable{width: 440px;height: 90px;float: left; position:relative;overflow:hidden;}
.scrollable #items {width:2000px; position:absolute;clear:both;z-index:0;}
.rclick{cursor:pointer;}
.lclick{cursor:pointer;}
</style>
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
	<div class="mxal" id="allclass">
		<p class="til">所有商品分类</p>
        <div class="lnav7" style="display:none;">
        
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
	</div>
	</div>
	<div class="mxnx">
  <ul>
		<li ><a href="index.php"><span title="首页">首页</span></a></li>
        
		<li ><a href="category.php?id=2"><span title="西湖龙井">西湖龙井</span></a></li>
       
		<li ><a href="category.php?id=23"><span title="茉莉花茶">茉莉花茶</span></a></li>
       
		<li class="this"><a href="category.php?id=17"><span title="大红袍">大红袍</span></a></li>
       
		<li ><a href="category.php?id=27"><span title="白牡丹">白牡丹</span></a></li>
       
		<li ><a href="category.php?id=16"><span title="铁观音">铁观音</span></a></li>
       
		<li ><a href="category.php?id=31"><span title="普洱茶">普洱茶</span></a></li>
       
		<li ><a href="category.php?id=25"><span title="白茶">白茶</span></a></li>
       
		<li ><a href="category.php?id=6"><span title="红茶">红茶</span></a></li>
       
		<li ><a href="category.php?id=32"><span title="茶具">茶具</span></a></li>
		<div class="clear"></div>
	</ul>
	</div>
	<div class="rbox">
		<p class="p1"><a href="group_buy.php">今日团购</a></p>
	</div>
	<div class="clear"></div>
	</div>
</div>
<script type="text/javascript" src="themes/hecha/js/banner4.0_goods.js"></script>
 
<div class="abody">
	<div class="path_s1"><a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=15">乌龙茶</a> <code>&gt;</code> <a href="category.php?id=17">大 红 袍</a> <code>&gt;</code> 【滋恩】特级大红袍圆罐装50g</div>
	<div class="clear line10"></div>
	<div class="proinfo6">
		<div class="img6">
			<div class="bigimg">
<input type="hidden" name="showmainimgvalue" value="images/201305/goods_img/11_P_1367723532195.jpg" id="showmainimgvalue"/>
<a href="images/201305/goods_img/11_P_1367723532195.jpg" target="_blank" class="jqzoom" id="BigViewImage">
<img src="images/201305/goods_img/11_P_1367723532195.jpg" height="380" width="380" align="absmiddle" id="showmainimg"></a>
																																																																																								</div>
			<span class="lclick">&nbsp;</span>
			<span class="rclick">&nbsp;</span>
			<div class="scrollable" style="margin-left:11px;">
				<ul id="items">
                
									<li onmouseover="cthis(0, 1)" class="this" id="simg_0">
					<a href="images/201305/goods_img/11_P_1367723532195.jpg" title="点击查看大图" target="_blank"><img src="images/201305/thumb_img/11_thumb_P_1367723532390.jpg" width="50" height="50" align="absmiddle" onmousemove="document.getElementById('showmainimg').src='images/201305/goods_img/11_P_1367723532195.jpg';document.getElementById('showmainimgvalue').value='images/201305/goods_img/11_P_1367723532195.jpg';document.getElementById('BigViewImage').setAttribute('href','images/201305/goods_img/11_P_1367723532195.jpg')" alt=""/></a>
					</li>
                                
								<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div class="txt6">
			<h1 id="lgoodname">【滋恩】特级大红袍圆罐装50g</h1>
			<ul style="zoom:1;">
				<li><p class="left">本 店 价：</p><em>市场价：<small>￥74.4</small></em> 
                <strong class="prib" id="old_shop_price">
        62.0                </strong>
                </li>
				<li id="show_activities_price" style="display:none; float:none; clear:both"></li>
				<li><p class="left">顾客评分：</p>
				<!--<p><span style="width:40px;" id="avgcomment">加载中...</span></p>(&nbsp;<span id="total_com_num" class="link1"></span>&nbsp;)-->
				<p class="xstars" style=" margin-top:6px;"><span style="width:60px;" class="star3">&nbsp;</span></p>3.00分(&nbsp;<span class="link1"><a href="#">已有1人评论</a></span>)
				</li>
                <li><p class="left">产品编号：</p>ECS000011</li>
                                <li><p class="left">品牌商家：</p>铁观音</li>
                			</ul>
          			<ol id="attr">
          			<li>产品规格：50g/罐</li>
          			<li>产地：福建南平</li>
          			<li>等级：特级</li>
          			<li>保质期：3年</li>
          			<div class="clear"></div>
			</ol>
              
         <form action="javascript:addToCart(11)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
						<div class="buy6">
				<p class="bn">我要买： <input type="text" name="number" id="number" style="text-align:center" value="1" onblur="changePrice()"/>
				件&nbsp;&nbsp;&nbsp;&nbsp;售价：<font style=" color:#F00; font-size:18px; font-weight:bold">￥</font><font id="ECS_GOODS_AMOUNT" style=" color:#F00; font-size:18px; font-weight:bold"></font>
				</p>
				<p class="bd">
					<span style="cursor:pointer;">
						<img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/buy2.jpg" width="139" height="41" align="absmiddle" onclick="javascript:collect(11);"/>
					</span>
					<span style="cursor:pointer;"><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/cart2.gif" width="139" height="41" align="absmiddle" onclick="javascript:addToCart(11);"/></span>
				</p>
			</div>
        </form>    
						<div class="shareto">
			<em onclick="javascript:collect(2797)" style="cursor:pointer;">收藏此商品</em>
					<big>分享到：</big>
					
					<div id="bdshare" class="bdshare_t bds_tools get-codes-bdshare">
					<a class="bds_qzone"></a>
					<a class="bds_tsina"></a>
					<a class="bds_tqq"></a>
					<a class="bds_renren"></a>
					<a class="bds_baidu"></a>
					<a class="bds_douban"></a>
					<span class="bds_more">更多</span>
					<a class="shareCount"></a>
					</div>
					<script type="text/javascript" id="bdshare_js" data="type=tools&amp;mini=1&amp;uid=66616" ></script>
					<script type="text/javascript" id="bdshell_js"></script>
					<script type="text/javascript">
					document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
					</script>
					
					<div class="clear"></div>
				</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<script>
function cthis(v, countnum)
{
	for( i=0; i<countnum; i++ )
	{
		if( i == v )
		{
			document.getElementById('simg_'+i).className = "this";
		}
		else
		{
			document.getElementById('simg_'+i).className = "";
		}	
	}	
}
			function chg_pro_menu(obj,id)
			{
				var arrayli = obj.parentNode.getElementsByTagName("li");
				var arraytag = document.getElementById(id).getElementsByTagName('ol');
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
					if(obj==arrayli[0]){
						arraytag[1].className = "this";
						arraytag[2].className = "this";
						arraytag[3].className = "this";
					}
				}
			}
</script>
<div class="abody">
<div class="clear line15"></div>
<div class="row7">
    
	
	<div class="title_h3">
	  <p>我浏览过的商品</p>
	</div>
	<div class="prolist_s1" id="show_history_goods">
    
554fcae493e564ee0dc75bdf2ebf94cagoods_history|a:1:{s:4:"name";s:13:"goods_history";}554fcae493e564ee0dc75bdf2ebf94ca 
                       
	</div>
	<div class="clear line10"></div>
		<!--<div class="title_h3"><p>购买此商品的顾客还购买过</p></div><div class="prolist_s1"  id="buy_this_and_buy_test">
		
		</div>	<div class="clear line10"></div> -->
		
</div>
<div class="row5 goods">
	<div class="detail6" id="detail">
			<div class="title_f4">
				<ul class="crz" id="show_menu_li">
					<li class="this"  onclick="chg_pro_menu(this,'detail');">商品详情</li>
					<li onclick="chg_pro_menu(this,'detail');">售后服务</li>
					<li onclick="chg_pro_menu(this,'detail');">物流配送</li>
					<li onclick="chg_pro_menu(this,'detail');">用户评价</li>
					<li onclick="chg_pro_menu(this,'detail');">相关常识</li>
									</ul>
			</div>
			<ol class="this">
				<p><img alt="" width="758" height="4345" src="images/upload/Image/desc01.jpg" /></p>		
            </ol>
			
			<ol class="this">
				<img src="themes/hecha/themes//hechaV2.5/skin/tm5/images/detail_b.gif" alt="售后服务" border="0" usemap="#Map2" />
				<map name="Map2" id="Map2">
				<area shape="rect" coords="357,420,418,446" href="http://www.hecha.cn/ol/" target="_blank" />
				</map>
			</ol>
			<ol class="this">
				<img src="themes/hecha/themes//hechaV2.5/skin/tm5/images/detail_c1.jpg" alt="商品的包装与配送" width="750" height="594" border="0" usemap="#Map" />
				<img src="themes/hecha/themes//hechaV2.5/skin/tm5/images/detail_c2.gif" alt="快递选择与收费标准" border="0" usemap="#Map" />
				<map name="Map" id="Map">
				<area shape="rect" coords="458,124,612,153" href="http://www.hecha.cn/ol/" target="_blank" />
				</map>
			</ol>
			<ol class="this">
				<a name="comment"></a>
                                <img src="themes/hecha/themes//hechaV2.5/skin/tm5/images/coms.png" align="absmiddle" alt="用户评论" />
				<div class="line15"></div>
				<div class="cenbox" id="comment">
					<div class="commentv5_2">
						<div class="msgbox">
							<dl>
								<dt>
									<p><strong>顾客对该商品的评价</strong></p>
									<p class="left"><big>3.00</big>分</p>
									<div class="xstars">
									<span style="width:60px" class="star3">&nbsp;</span>
									</div>
									<div class="clear"></div>
									<p class="link">共打分<strong>1</strong>次</p>
								</dt>
								<dd>
									<div class="msg1">
		
										<span style="left:240px">3.00</span>
									</div>
									<div class="msg2">
										&nbsp;
									</div>
								</dd>
							</dl>
						</div>
				<div class="clear line10"></div>
             
                <div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:11;}554fcae493e564ee0dc75bdf2ebf94ca</div>                
                
			</div>
										</div>
			</ol>
			<ol class="hide">
							</ol>
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
<LINK href="themes/hecha/js/zoomimg/jqzoom.css" type=text/css rel=stylesheet>
<SCRIPT src="themes/hecha/js/zoomimg/jquery.jqzoom.js"></SCRIPT>
<SCRIPT type="text/javascript">
 	var isH = false;
	var bigPXoffset;
	var bigPYoffset;
	jQuery(document).ready(function(){
		$(".jqzoom").jqzoom(
		{                
				zoomWidth: 360,		
				zoomHeight: 360
			
		});	
		var imgoffset = $("#showmainimg").offset();
		bigPXoffset=imgoffset.left+410;
	
   });
$(document).ready(function(){
                    $('#items').css("left","0px");
                    $('.rclick').click(function(){
                        var left = $('#items').css("left");
                        left = left.replace("px","");
                        var new_left = left-70;
                        var li_count = $('#items>li').length;
                        var all_length = (li_count-5)*(-70);
                        if(new_left >= all_length){
                            $('#items').animate({"left":new_left+'px'});
                        }else{
                            $('#items').css("left","0px");
                            $('.rclick').addClass("disabled");
                        }
                    });
                    $('.lclick').click(function(){
                        left = $('#items').css("left");
                        left = left.replace("px","");
                        new_left = left-(-70);
                        if(new_left <= 0){
                             $('#items').animate({"left":new_left+'px'});
                        }else{
                            $('.lclick').addClass("disabled");
                        }
                    });
                });
      
   
</SCRIPT>
</body>
<script type="text/javascript">
var goods_id = 11;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 11;
var now_time = 1424248520;
onload = function(){
  changePrice();
  //fixpng();
  try {onload_leftTime();}
  catch (e) {}
}
/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}
/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;
    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
</script>
</html>