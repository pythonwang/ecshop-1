<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
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
        <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
       
		</span>
        
        
		</p>
 <?php if ($this->_var['navigator_list']['top']): ?>        
		<p class="rlink">
<?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_40147800_1424255972');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_40147800_1424255972']):
        $this->_foreach['nav_top_list']['iteration']++;
?>        
		<small>|</small>
        <a href="<?php echo $this->_var['nav_0_40147800_1424255972']['url']; ?>" <?php if ($this->_var['nav_0_40147800_1424255972']['opennew'] == 1): ?> target="_blank" <?php endif; ?>><?php echo $this->_var['nav_0_40147800_1424255972']['name']; ?></a>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        
		</p>
<?php endif; ?>         
		<dl>
			<dt><a href="flow.php?step=cart">购物车<strong><span id="cart"><?php 
$k = array (
  'name' => 'cart_info_number',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?></span></strong>件<!--[if gte IE 7]><!--></a><!--<![endif]--><!--[if lte IE 6]><table><tr><td><![endif]--></a>
				<ul id="cart_detail">

<?php 
$k = array (
  'name' => 'cart_info2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
          
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
<?php
$GLOBALS['smarty']->assign('ad',get_adv('头部flash'));
?>
<?php if ($this->_var['ad']['content']): ?>
<?php echo $this->_var['ad']['content']; ?>
<?php endif; ?>                    
            </div>
			<div class="tel">
			<p><?php echo $this->_var['service_phone']; ?></p>
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
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
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
<?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
<a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>" title="<?php echo $this->_var['val']; ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
<?php endif; ?>
			</p>
		</div>
            <div class="clear"></div>
	</div>
</div>
</div>
