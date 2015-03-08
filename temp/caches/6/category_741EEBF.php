<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:68:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/category.dwt";i:1;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_header.lbi";i:2;s:81:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/category_tree.lbi";i:3;s:73:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/top10.lbi";i:4;s:75:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/ur_here.lbi";i:5;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/ad_position.lbi";i:6;s:78:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/goods_list.lbi";i:7;s:73:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/pages.lbi";i:8;s:79:"/Applications/XAMPP/xamppfiles/htdocs/miqi/themes/hecha/library/page_footer.lbi";}s:7:"expires";i:1424280945;s:8:"maketime";i:1424277345;}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>顶峰_西湖龙井_绿茶_米奇网演示站</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hechaV2.5/skin/tm6/style/goods6_test.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<link href="themes/hecha/themes/hechaV2.5/skin/tm6/style/goods6_test.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/hecha/js/jquery-1.7.2.js"></script>
<script src="themes/hecha/themes/hechaV2.5/skin/tm5/js/lazyload.js" type="text/javascript"></script>
<script type="text/javascript" src="themes/hecha/themes/hechaV2.5/skin/tm7/js/common.js"></script>
<script type="text/javascript" src="themes/hecha/js/generalt.js"></script>
<script type="text/javascript" src="themes/hecha/js/transport.js"></script>
<script type="text/javascript" src="themes/hecha/js/common.js"></script>
</head>
<script language="javascript">
	function add_to_cart_4(goodsId, number, parentId, doitem, fromother, activities_id, is_mother, child_good_id)
	{
		var goods        = new Object();
		var spec_arr     = new Array();
		var fittings_arr = new Array();
  
		cart_step		 = doitem;
		goods.spec     = spec_arr;
		goods.goods_id = goodsId;
		goods.number   = number;
		goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
		goods.activities_id         = (typeof(activities_id) == "undefined") ? 0 : activities_id;
		goods.is_mother         = (typeof(is_mother) == "undefined") ? 0 : is_mother;
		goods.child_good_id   = child_good_id;
  
		goods.sendstr	 = '{"spec":['+goods.spec+'],"goods_id":'+goods.goods_id+',"number":'+goods.number+',"parent":'+goods.parent+',"activities_id":'+goods.activities_id+',"is_mother":'+goods.is_mother+',"child_good_id":'+goods.child_good_id+'}';
		
		jQuery.post("http://"+document.domain+"/cartt.php",{step:"add_to_cart", goods:goods.sendstr}, function(data){	
				addToCartResponse(data, cart_step);
		});
	}	
</script>
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
<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
        <div class="lnav7 list">
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
			<!--<div id="navtitle" class="title"><a href="http://www.hecha.cn/sitemap.php" title="点击查看全部分类" target="_blank">热门分类</a></div>-->
	</div>
	</div>
    
	<div class="mxnx">
	<ul>
   
		<li ><a href="index.php"><span title="首页">首页</span></a></li>
        
		<li class="this"><a href="category.php?id=2"><span title="西湖龙井">西湖龙井</span></a></li>
       
		<li ><a href="category.php?id=23"><span title="茉莉花茶">茉莉花茶</span></a></li>
       
		<li ><a href="category.php?id=17"><span title="大红袍">大红袍</span></a></li>
       
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
<script type="text/javascript" src="themes/hecha/js/banner4.0.js"></script>
<div class="abody">
	<div class="lbox_s1">
	<div class="mylnav7">&nbsp;</div>
	<div class="title_h3"><p>西湖龙井热销TOP5</p></div><div class="prolist_s1">
    
    
        <ul>
			<li class="img"><a href="goods.php?id=5"><img alt="【与花香】法兰西玫瑰花罐装50g" src="images/201305/thumb_img/5_thumb_G_1367630928223.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=5">【与花香】法兰西玫瑰花罐装50g</a></p>
				<p>市场价：<small>￥70.8</small></p>
				<p class="pri">本店价：￥
                                59.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=1"><img alt="【2013新茶热销】滋恩明前特级三星-清馨-龙井单罐50g" src="images/201305/thumb_img/1_thumb_G_1367617664016.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=1">【2013新茶热销】滋恩明前特级三星-清...</a></p>
				<p>市场价：<small>￥74.4</small></p>
				<p class="pri">本店价：￥
                                62.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=16"><img alt="【夷发】特级大红袍618纸盒125g" src="images/201305/thumb_img/16_thumb_G_1367724701820.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=16">【夷发】特级大红袍618纸盒125g</a></p>
				<p>市场价：<small>￥237.6</small></p>
				<p class="pri">本店价：￥
                                198.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=11"><img alt="【滋恩】特级大红袍圆罐装50g" src="images/201305/thumb_img/11_thumb_G_1367723532511.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=11">【滋恩】特级大红袍圆罐装50g</a></p>
				<p>市场价：<small>￥74.4</small></p>
				<p class="pri">本店价：￥
                                62.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
    
        <ul>
			<li class="img"><a href="goods.php?id=62"><img alt="新茶特级都匀毛尖茶叶富锌硒有机绿茶" src="images/201411/thumb_img/62_thumb_G_1417310148023.jpg" /></a></li>
			<li class="txt">
				<p class="til"><a href="goods.php?id=62">新茶特级都匀毛尖茶叶富锌硒有机绿茶</a></p>
				<p>市场价：<small>￥118.8</small></p>
				<p class="pri">本店价：￥
                                99.0                  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
      
      
      
      
      
          
       
        </div>    
        
            
	<div class="clear line10"></div>
	<div class="title_h3"><p>我浏览过的商品</p></div>
	<div class="prolist_s1" id="show_history_goods">
554fcae493e564ee0dc75bdf2ebf94cagoods_history|a:1:{s:4:"name";s:13:"goods_history";}554fcae493e564ee0dc75bdf2ebf94ca 
                       
                       
	</div>
    
    
                                     
                                                           
        <div class="clear line10"></div>
                <div class="title_h3"><p>最新评论</p></div>
                <div class="prolist_s1">
                    <div class="ncom">
                        
            <div class="listx">
                <p><strong>匿名用户：</strong><small>2013-05-24</small> 评论了：</p>
                <p><a title="【滋恩】特级大红袍圆罐装50g" target="_blank" href="goods.php?id=11">【滋恩】特级大红袍圆罐装50g</a></p>
                <p class="txt">密封包装, 很好. 物流超级快, 傍晚下的单, 第二天中午就到了, 而...</p>
             </div>
                        
            <div class="listx">
                <p><strong>匿名用户：</strong><small>2013-05-09</small> 评论了：</p>
                <p><a title="【夷发】特级大红袍618纸盒125g" target="_blank" href="goods.php?id=16">【夷发】特级大红袍618纸盒125g</a></p>
                <p class="txt">东西收到了，等喝了之后再来好好评价。</p>
             </div>
                        
            <div class="listx">
                <p><strong>匿名用户：</strong><small>2013-05-09</small> 评论了：</p>
                <p><a title="【夷发】特级大红袍618纸盒125g" target="_blank" href="goods.php?id=16">【夷发】特级大红袍618纸盒125g</a></p>
                <p class="txt">很好喝，味道是我喜欢的，喜欢浓茶多放了些，是新茶，正品。下次还在你家买...</p>
             </div>
                        
            <div class="listx">
                <p><strong>匿名用户：</strong><small>2013-05-09</small> 评论了：</p>
                <p><a title="【夷发】特级大红袍618纸盒125g" target="_blank" href="goods.php?id=16">【夷发】特级大红袍618纸盒125g</a></p>
                <p class="txt">香甜美味。 太棒了。 物美价廉。 发货速度很快</p>
             </div>
            
            
            </div>
            
            </div>	
            
          </div>
            
            
	<div class="rbox_s1">
		<div class="path_s1">
        <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">绿茶</a> <code>&gt;</code> <a href="category.php?id=2">西湖龙井</a> <code>&gt;</code> 顶峰        </div>
		<div class="line10"></div>
		<div class="banner2">
			<p class="left1">
            
			554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:1:"9";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca			
            </p>
            <p class="left">
            
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"10";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
            </p>
            <p class="right">
            
554fcae493e564ee0dc75bdf2ebf94caads|a:3:{s:4:"name";s:3:"ads";s:2:"id";s:2:"11";s:3:"num";s:1:"1";}554fcae493e564ee0dc75bdf2ebf94ca
            </p>
			<div class="clear line10"></div>
		</div>
		<a name='goods_list'></a>
		<div class="pnav6">
			<div class="title"><em><a href="category.php?id=2">重置筛选条件</a></em><strong>西湖龙井-商品筛选</strong></div>
			<div class="clear line5"></div>
            			<dl>
				<dt><strong>品牌</strong></dt>
				<dd>
                                  					<p ><a href="category.php?id=2&amp;price_min=0&amp;price_max=0" class="all">全部</a></p>
                                                                                                                                                                              
					<div class="lix">
                                                                                    					<p ><a href="category.php?id=2&amp;brand=3&amp;price_min=0&amp;price_max=0">武夷星</a></p>
                                                                					<p class="this"><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0">顶峰</a></p>
                                                                					<p ><a href="category.php?id=2&amp;brand=9&amp;price_min=0&amp;price_max=0">徽六</a></p>
                                                                					<p ><a href="category.php?id=2&amp;brand=10&amp;price_min=0&amp;price_max=0">滋恩</a></p>
                                           					  <div class="clear"></div>
					</div>
                    
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
                        
            			<dl>
				<dt><strong>价格</strong></dt>
				<dd>
                                  					<p class="this"><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0" class="all">全部</a></p>
                    
                                    
                                    
                                    
                   
					<div class="lix">
                                                                                					<p ><a  href="category.php?id=2&amp;brand=7&amp;price_min=60&amp;price_max=220">60&nbsp;-&nbsp;220</a></p>
                                                            					<p ><a  href="category.php?id=2&amp;brand=7&amp;price_min=220&amp;price_max=380">220&nbsp;-&nbsp;380</a></p>
                                                            					<p ><a  href="category.php?id=2&amp;brand=7&amp;price_min=380&amp;price_max=540">380&nbsp;-&nbsp;540</a></p>
                                       
					<div class="clear"></div>
					</div>
                    
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
                        
            				<dl>
				<dt><strong>净含量</strong></dt>
				<dd>
                                   					<p class="this"><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0" class="all">全部</a></p>
                                                                                                                                            				<div class="lix">
                                                                    				<p ><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=256.0">101-250g</a></p>
                                                    				<p ><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=244.0">250g以上</a></p>
                                                    				<p ><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=238.0">51-100g</a></p>
                                  
					<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
            				<dl>
				<dt><strong>包装</strong></dt>
				<dd>
                                   					<p class="this"><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.0" class="all">全部</a></p>
                                                                                                         				<div class="lix">
                                                                    				<p ><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.245">精美礼品装</a></p>
                                                    				<p ><a href="category.php?id=2&amp;brand=7&amp;price_min=0&amp;price_max=0&amp;filter_attr=0.239">经济自饮装</a></p>
                                  
					<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
                        
					</div>
		<div class="clear line10"></div>
		<div class="ordbar">
			<div class="box">
			<ol>
				<li class="tx">排序方式</li>
				<li class="lx">
                
					<p >
<a href="category.php?category=2&display=grid&brand=7&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC#goods_list">价格</a>
                    </p>
                    
					<p >
<a href="category.php?category=2&display=grid&brand=7&price_min=0&price_max=0&filter_attr=0&page=1&sort=sell_number&order=ASC#goods_list">销量</a>
					</p>
                                            
					<p class="asc">
<a href="category.php?category=2&display=grid&brand=7&price_min=0&price_max=0&filter_attr=0&page=1&sort=goods_id&order=ASC#goods_list">上架时间</a>
					</p>
                    
					<div class="clear"></div>
				</li>
				<li class="rx">
                                   
                    <p class="info">1/1</p>
				</li>
				<div class="clear"></div>
			</ol>
			</div>
		</div>
		<div class="clear line10"></div>
        
				<div class="prolist_s2 list">
                
			<ul>
				<li class="img"><a href="goods.php?id=54" target="_blank" title="顶峰明前特级五星-初见-西湖龙井礼盒150g"><img src="images/201306/thumb_img/54_thumb_G_1370405430732.jpg" alt="顶峰明前特级五星-初见-西湖龙井礼盒150g" /></a></li>
				<li class="txt"><a href="goods.php?id=54" target="_blank" title="顶峰明前特级五星-初见-西湖龙井礼盒150g">顶峰明前特级五星-初见-西湖龙井礼盒150g</a></li>
				<li class="pri1"><p><a href="goods.php?id=54#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥441.6</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=54#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                368.0        </strong>
                            </li>
				<li class="buy"><a href="javascript:void(0)" class="la" onclick="javascript:collect(54);">加入收藏</a><a href="javascript:void(0)" class="lb" onclick="javascript:addToCart(54);">放入购物车</a></li>
			</ul>
                
			<ul>
				<li class="img"><a href="goods.php?id=53" target="_blank" title="【顶峰】明前特级安吉白茶礼盒250g"><img src="images/201306/thumb_img/53_thumb_G_1370405276097.jpg" alt="【顶峰】明前特级安吉白茶礼盒250g" /></a></li>
				<li class="txt"><a href="goods.php?id=53" target="_blank" title="【顶峰】明前特级安吉白茶礼盒250g">【顶峰】明前特级安吉白茶礼盒250g</a></li>
				<li class="pri1"><p><a href="goods.php?id=53#comment" title="查看评论"><big class="xstars"><span style="width:60px;" title="5.00分" class="star5">&nbsp;</span></big></a></p> 市场价：<small>￥636.0</small>				</li>
				<li class="pri2"><em><a href="goods.php?id=53#comment" title="查看评论">(已有0人评论)</a></em>
                
                
                    本店价：<span>￥</span><strong>
                530.0        </strong>
                            </li>
				<li class="buy"><a href="javascript:void(0)" class="la" onclick="javascript:collect(53);">加入收藏</a><a href="javascript:void(0)" class="lb" onclick="javascript:addToCart(53);">放入购物车</a></li>
			</ul>
     
		<div class="clear"></div>
		</div>        
		<div class="clear"></div>
	  <div class="pages6">
						            
              				
            				 </div>
	</div>
			
	<div class="clear line15"></div>
</div>
<div class="ebody"></div>
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
<div style="display:none"><script src="http://s94.cnzz.com/stat.php?id=1068883&web_id=1068883&show=pic1" language="JavaScript"></script></div>
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":100};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
</body>
</html>