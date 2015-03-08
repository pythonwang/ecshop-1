<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

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
<?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>

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
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/category_tree_float.lbi'); ?>


<script type="text/javascript" src="themes/hecha/js/banner4.0_goods.js"></script>
<?php
$GLOBALS['smarty']->assign('goods',get_goods_info2($GLOBALS['smarty']->_var['goods']['goods_id']));
?> 
<div class="abody">
	<div class="path_s1"><?php echo $this->fetch('library/ur_here.lbi'); ?></div>
	<div class="clear line10"></div>
	<div class="proinfo6">
		<div class="img6">
			<div class="bigimg">
<input type="hidden" name="showmainimgvalue" value="<?php if ($this->_var['pictures']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" id="showmainimgvalue"/>
<a href="<?php if ($this->_var['pictures']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" target="_blank" class="jqzoom" id="BigViewImage">
<img src="<?php if ($this->_var['pictures']): ?><?php echo $this->_var['pictures']['0']['img_url']; ?><?php else: ?><?php echo $this->_var['goods']['goods_img']; ?><?php endif; ?>" height="380" width="380" align="absmiddle" id="showmainimg"></a>
																																																																																								</div>
			<span class="lclick">&nbsp;</span>
			<span class="rclick">&nbsp;</span>
			<div class="scrollable" style="margin-left:11px;">
				<ul id="items">
             <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['picture'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['picture']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['picture']['iteration']++;
?>   
									<li onmouseover="cthis(<?php echo ($this->_foreach['picture']['iteration'] - 1); ?>, <?php echo $this->_foreach['picture']['total']; ?>)" <?php if (($this->_foreach['picture']['iteration'] <= 1)): ?>class="this"<?php endif; ?> id="simg_<?php echo ($this->_foreach['picture']['iteration'] - 1); ?>">
					<a href="<?php echo $this->_var['picture']['img_url']; ?>" title="点击查看大图" target="_blank"><img src="<?php echo $this->_var['picture']['thumb_url']; ?>" width="50" height="50" align="absmiddle" onmousemove="document.getElementById('showmainimg').src='<?php echo $this->_var['picture']['img_url']; ?>';document.getElementById('showmainimgvalue').value='<?php echo $this->_var['picture']['img_url']; ?>';document.getElementById('BigViewImage').setAttribute('href','<?php echo $this->_var['picture']['img_url']; ?>')" alt="<?php echo $this->_var['picture']['img_desc']; ?>"/></a>
					</li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    
								<div class="clear"></div>
				</ul>
			</div>
		</div>
		<div class="txt6">
			<h1 id="lgoodname"><?php echo $this->_var['goods']['goods_name']; ?></h1>
			<ul style="zoom:1;">
				<li><p class="left">本 店 价：</p><em>市场价：<small>￥<?php echo $this->_var['goods']['market_price']; ?></small></em> 
                <strong class="prib" id="old_shop_price">
        <?php echo $this->_var['goods']['shop_price_formated']; ?>
                </strong>
                </li>
				<li id="show_activities_price" style="display:none; float:none; clear:both"></li>
				<li><p class="left">顾客评分：</p>
				<!--<p><span style="width:40px;" id="avgcomment">加载中...</span></p>(&nbsp;<span id="total_com_num" class="link1"></span>&nbsp;)-->
				<p class="xstars" style=" margin-top:6px;"><span style="width:60px;" class="star<?php echo $this->_var['goods']['comment_rank_int']; ?>">&nbsp;</span></p><?php echo $this->_var['goods']['comment_rank']; ?>分(&nbsp;<span class="link1"><a href="#">已有<?php echo $this->_var['goods']['comment_count']; ?>人评论</a></span>)
				</li>
                <li><p class="left">产品编号：</p><?php echo $this->_var['goods']['goods_sn']; ?></li>
                <?php if ($this->_var['goods']['goods_brand'] != ""): ?>
                <li><p class="left">品牌商家：</p><?php echo $this->_var['goods']['goods_brand']; ?></li>
                <?php endif; ?>
			</ul>
          <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
			<ol id="attr">
          <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
			<li><?php echo htmlspecialchars($this->_var['property']['name']); ?>：<?php echo $this->_var['property']['value']; ?></li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<div class="clear"></div>
			</ol>
         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>     
         <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
						<div class="buy6">
				<p class="bn">我要买： <input type="text" name="number" id="number" style="text-align:center" value="1" onblur="changePrice()"/>
				件&nbsp;&nbsp;&nbsp;&nbsp;售价：<font style=" color:#F00; font-size:18px; font-weight:bold">￥</font><font id="ECS_GOODS_AMOUNT" style=" color:#F00; font-size:18px; font-weight:bold"></font>
				</p>
				<p class="bd">
					<span style="cursor:pointer;">
						<img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/buy2.jpg" width="139" height="41" align="absmiddle" onclick="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>);"/>
					</span>
					<span style="cursor:pointer;"><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/cart2.gif" width="139" height="41" align="absmiddle" onclick="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);"/></span>
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

<?php if ($this->_var['fittings']): ?>
	<script type="text/javascript">
			var goods_price1		= new Array();
			var goods_price2		= new Array();
			var goods_id			= <?php echo $this->_var['goods_id']; ?>;
			goods_price1[goods_id]	= '<?php echo $this->_var['goods']['shop_price']; ?>';
			goods_price2[goods_id]	= '<?php echo $this->_var['goods']['shop_price']; ?>';
			
			<?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_52222500_1424277320');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_52222500_1424277320']):
?>
				goods_price1['<?php echo $this->_var['goods_0_52222500_1424277320']['goods_id']; ?>']	= '<?php echo $this->_var['goods_0_52222500_1424277320']['shop_price']; ?>';
				goods_price2['<?php echo $this->_var['goods_0_52222500_1424277320']['goods_id']; ?>']	= '<?php echo $this->_var['goods_0_52222500_1424277320']['fittings_price']; ?>';
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
								
			function goods_relate_check()
			{

				var goods_money1	= parseFloat(goods_price1[goods_id]);
				var goods_money2	= parseFloat(goods_price2[goods_id]);
				var save_money		= 0;
				
				goods_relate		= document.getElementsByName('comb_id');
				
				if( goods_relate.length > 0 )
				{
					for( i=0; i<goods_relate.length; i++ )
					{
						if( goods_relate[i].checked == true )
						{
							goods_money1	= goods_money1 + parseFloat(goods_price1[goods_relate[i].value]);
							goods_money2	= goods_money2 + parseFloat(goods_price2[goods_relate[i].value]);
						}	
					}
				}
				else
				{
					if( goods_relate.checked == true )
					{
						goods_money1	= goods_money1 + parseFloat(goods_price1[goods_relate.value]);
						goods_money2	= goods_money2 + parseFloat(goods_price2[goods_relate.value]);
					}	
				}
				
				
				
				
				save_money	= goods_money1	- goods_money2;
				
				goods_money2	= parseFloat(goods_money2).toFixed(2);
				save_money		= parseFloat(save_money).toFixed(2);
				
				
				
				document.getElementById("goods_price").innerHTML	= '￥' + goods_money2;
				document.getElementById("save_price").innerHTML		= '￥' + save_money;
				document.getElementById("goods_price2").innerHTML	= '￥' + goods_money2;
				document.getElementById("save_price2").innerHTML		= '￥' + save_money;
		}
		
      
//组合商品加入购物车
  function batchAddCart(){
		   		var obj = document.getElementsByName('comb_id');
				var comb_id = '';
				
				for (var i = 0; i < obj.length; i ++){
					if (obj[i].checked){
                        comb_id = obj[i].value;
					}
				}
				if (comb_id == ''){
					alert('请选择最佳组合商品！');
					return;
				}
				var _goods_id = <?php echo $this->_var['goods']['goods_id']; ?>;
                addToCart(_goods_id);
				
				for (var i = 0; i < obj.length; i ++){
					if (obj[i].checked){
					    addToCartEx(obj[i].value,_goods_id);
					}
				}
	        
                location.href = "flow.php?step=cart";
				
		   }
		   
		   function addToCartEx(goodsId, parentId)
			{
			  var goods        = new Object();
			  var spec_arr     = new Array();
			  var fittings_arr = new Array();
			  var number       = 1;
			  var formBuy      = document.forms['ECS_FORMBUY'];
			  var quick		   = 0;
			
			  goods.quick    = quick;
			  goods.spec     = spec_arr;
			  goods.goods_id = goodsId;
			  goods.number   = number;
			  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
			  Ajax.call('flow.php?step=add_to_cart', 'goods=' + objToJSONString(goods), addToCartResponseEx, 'POST', 'JSON');
			  
			}
			
			function addToCartResponseEx(result)
			{
			  if (result.error > 0)
              {
                // 如果需要缺货登记，跳转
                if (result.error == 2)
                {
                  if (confirm(result.message))
                  {
                    location.href = 'user.php?act=add_booking&id=' + result.goods_id + '&spec=' + result.product_spec;
                  }
                }
                // 没选规格，弹出属性选择框
                else if (result.error == 6)
                {
                  alert('该商品存在规格选择！添加到购物车失败');
                }
                else
                {
                  alert(result.message);
                }
              }
              else
              {
                  //location.href = 'flow.php';
              }
			}
			

			
		   function clearFittingGoods(){
		   		var obj = document.getElementsByName('comb_id');
				var comb_id = '';
				
				for (var i = 0; i < obj.length; i ++){
					obj[i].checked = false;
				}
			}	
		   clearFittingGoods();
       
        </script>


	<div class="title_h3"><p>推荐搭配</p></div>
		<div class="prolist_s4">
			<p>组合特惠价：<strong id="goods_price">￥
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
        <?php echo $this->_var['goods']['promote_price']; ?>
            <?php else: ?>
        <?php echo $this->_var['goods']['shop_price']; ?>
            <?php endif; ?>
            </strong></p>
			<p>立省：<strong id="save_price">￥0.00</strong></p>
			<p><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/buy3.gif" width="98" height="26" onclick="batchAddCart()" style="cursor:hand;"/></p>
		</div>
		<div class="prolist_s3">
        
        <?php $_from = $this->_var['fittings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_52263300_1424277320');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_52263300_1424277320']):
?>
		<ul>
			<li class="img"><a href="<?php echo $this->_var['goods_0_52263300_1424277320']['url']; ?>"><img src="<?php echo $this->_var['goods_0_52263300_1424277320']['goods_thumb']; ?>" align="absmiddle" /></a></li>
			<li class="txt">
				<p class="til"><a href="<?php echo $this->_var['goods_0_52263300_1424277320']['url']; ?>"><?php echo htmlspecialchars($this->_var['goods_0_52263300_1424277320']['short_name']); ?></a></p>
				<p><input name="comb_id" id="comb_id" type="checkbox" value="<?php echo $this->_var['goods_0_52263300_1424277320']['goods_id']; ?>" onclick="goods_relate_check()" /><strong>搭配价￥<?php echo $this->_var['goods_0_52263300_1424277320']['fittings_price']; ?></strong> 原价<small>￥<?php echo $this->_var['goods_0_52263300_1424277320']['shop_price']; ?></small></p>
			</li>
			<div class="clear"></div>
		</ul>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
               
				</div>
		<div class="prolist_s4">
			<p>组合特惠价：<strong id="goods_price2">￥
            <?php if ($this->_var['goods']['promote_price'] != ""): ?>
        <?php echo $this->_var['goods']['promote_price']; ?>
            <?php else: ?>
        <?php echo $this->_var['goods']['shop_price']; ?>
            <?php endif; ?>
            </strong></p>
			<p>立省：<strong id="save_price2">￥0.00</strong></p>
			<p><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/buy3.gif" width="98" height="26" onclick="batchAddCart()" style="cursor:hand;"/></p>
		</div>

	<div class="clear line10"></div>
<?php endif; ?>
    
	
	<div class="title_h3">
	  <p>我浏览过的商品</p>
	</div>
	<div class="prolist_s1" id="show_history_goods">
    
<?php 
$k = array (
  'name' => 'goods_history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
                       

	</div>
	<div class="clear line10"></div>
		<!--<div class="title_h3"><p>购买此商品的顾客还购买过</p></div><div class="prolist_s1"  id="buy_this_and_buy_test">
		
		</div>	<div class="clear line10"></div> -->
		
</div>
<div class="row5 goods">

<?php
$GLOBALS['smarty']->assign('promotion', get_promotion_info2($GLOBALS['smarty']->_var['goods']['goods_id']));
?>
<?php if ($this->_var['promotion']): ?>
    	<div class="hotact">
      <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from AS $this->_var['item']):
        $this->_foreach['item']['iteration']++;
?>
      <?php if ($this->_var['item']['type'] == "favourable"): ?>
            <p><?php echo $this->_foreach['item']['iteration']; ?>、<?php echo $this->_var['item']['act_name']; ?>。</p>
     <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</div>
    	<div class="clear line10"></div>
<?php endif; ?>

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
				<?php echo $this->_var['goods']['goods_desc']; ?>		
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
									<p class="left"><big><?php echo $this->_var['goods']['comment_rank']; ?></big>分</p>
									<div class="xstars">
									<span style="width:60px" class="star<?php echo $this->_var['goods']['comment_rank_int']; ?>">&nbsp;</span>
									</div>
									<div class="clear"></div>
									<p class="link">共打分<strong><?php echo $this->_var['goods']['comment_count']; ?></strong>次</p>
								</dt>
								<dd>
									<div class="msg1">
<?php
$comment_rank=$GLOBALS['smarty']->_var['goods']['comment_rank'];
$comment_rank_left=$comment_rank/5*400;
$GLOBALS['smarty']->assign('comment_rank_left', $comment_rank_left);
?>		
										<span style="left:<?php echo $this->_var['comment_rank_left']; ?>px"><?php echo $this->_var['goods']['comment_rank']; ?></span>
									</div>
									<div class="msg2">
										&nbsp;
									</div>
								</dd>
							</dl>
						</div>
				<div class="clear line10"></div>
             
                <?php echo $this->fetch('library/comments.lbi'); ?>
                
                
			</div>
										</div>
			</ol>
			<ol class="hide">
							</ol>
				</div>	
</div>

<div class="clear line10"></div>


<?php
$GLOBALS['smarty']->assign('bought_goods', get_also_bought2($GLOBALS['smarty']->_var['goods']['goods_id']));
?>
<?php if ($this->_var['bought_goods']): ?>
	<div class="prolink6">
        <div class="title_me">买过该商品的人还买过</div>
		<ul>
        <?php $_from = $this->_var['bought_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bought_goods_data');if (count($_from)):
    foreach ($_from AS $this->_var['bought_goods_data']):
?>
			<li><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['bought_goods_data']['goods_thumb']; ?>" width="220" height="220" align="absmiddle" /></a>
			<p class="tx"><a href="<?php echo $this->_var['bought_goods_data']['url']; ?>" target="_blank"><?php echo $this->_var['bought_goods_data']['goods_name']; ?></a></p>
			<p class="px">市场价：<small>￥<?php echo $this->_var['bought_goods_data']['market_price']; ?></small> 活动价：<strong>￥
         <?php if ($this->_var['bought_goods_data']['promote_price'] != 0): ?>
        <?php echo $this->_var['bought_goods_data']['formated_promote_price']; ?>
        <?php else: ?>
        <?php echo $this->_var['bought_goods_data']['shop_price']; ?>
        <?php endif; ?>
            </strong></p></li>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
            	
        <div class="clear"></div>
		</ul>
	</div>
	<div class="clear line10"></div>
<?php endif; ?>
    
    
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

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
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


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