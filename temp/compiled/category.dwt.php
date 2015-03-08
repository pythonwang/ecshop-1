<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_var['page_title']; ?></title>
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

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
<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php echo $this->fetch('library/category_tree.lbi'); ?>


<script type="text/javascript" src="themes/hecha/js/banner4.0.js"></script>
<div class="abody">
	<div class="lbox_s1">
	<div class="mylnav7">&nbsp;</div>
<?php
$cat_id = $GLOBALS['smarty']->_var['category'];
$GLOBALS['smarty']->assign('cat',get_cat_info($cat_id));
?>
<?php echo $this->fetch('library/top10.lbi'); ?> 
        
            
	<div class="clear line10"></div>
	<div class="title_h3"><p>我浏览过的商品</p></div>
	<div class="prolist_s1" id="show_history_goods">

<?php 
$k = array (
  'name' => 'goods_history',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> 
                       
                       
	</div>
    
    
        <?php
			$GLOBALS['smarty']->assign('new_comment', get_new_comment(0, 4));
		?>                             
                                                           
        <div class="clear line10"></div>
                <div class="title_h3"><p>最新评论</p></div>
                <div class="prolist_s1">
                    <div class="ncom">
<?php $_from = $this->_var['new_comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'new_comment');$this->_foreach['new_comment'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['new_comment']['total'] > 0):
    foreach ($_from AS $this->_var['new_comment']):
        $this->_foreach['new_comment']['iteration']++;
?>                        
            <div class="listx">
                <p><strong><?php if ($this->_var['new_comment']['user_name']): ?><?php echo $this->_var['new_comment']['user_name']; ?><?php else: ?>匿名用户<?php endif; ?>：</strong><small><?php echo $this->_var['new_comment']['time']; ?></small> 评论了：</p>
                <p><a title="<?php echo $this->_var['new_comment']['goods_name']; ?>" target="_blank" href="<?php echo $this->_var['new_comment']['url']; ?>"><?php echo $this->_var['new_comment']['goods_name']; ?></a></p>
                <p class="txt"><?php echo sub_str($this->_var['new_comment']['content'],35); ?></p>
             </div>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
            
            </div>
            
            </div>	
            
          </div>
            
            
	<div class="rbox_s1">
		<div class="path_s1">
        <?php echo $this->fetch('library/ur_here.lbi'); ?>
        </div>
		<div class="line10"></div>
		<div class="banner2">
			<p class="left1">
            
			<?php $this->assign('ads_id','9'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>
			
            </p>
            <p class="left">
            
<?php $this->assign('ads_id','10'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

            </p>
            <p class="right">
            
<?php $this->assign('ads_id','11'); ?><?php $this->assign('ads_num','1'); ?><?php echo $this->fetch('library/ad_position.lbi'); ?>

            </p>
			<div class="clear line10"></div>
		</div>
		<a name='goods_list'></a>

		<div class="pnav6">
			<div class="title"><em><a href="<?php echo $this->_var['script_name']; ?>.php?id=<?php echo $this->_var['category']; ?>">重置筛选条件</a></em><strong><?php echo $this->_var['cat']['cat_name']; ?>-商品筛选</strong></div>
			<div class="clear line5"></div>
            <?php if ($this->_var['brands']['1']): ?>
			<dl>
				<dt><strong><?php echo $this->_var['lang']['brand']; ?></strong></dt>
				<dd>
                <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
?>
                  <?php if (($this->_foreach['brand']['iteration'] - 1) == 0): ?>
					<p <?php if ($this->_var['brand']['selected']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['brand']['url']; ?>" class="all"><?php echo $this->_var['brand']['brand_name']; ?></a></p>
                  <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>    
					<div class="lix">
                    <?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand']['iteration']++;
?>
                      <?php if (($this->_foreach['brand']['iteration'] - 1) > 0): ?>
					<p <?php if ($this->_var['brand']['selected']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a></p>
                      <?php endif; ?>
                    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 					  <div class="clear"></div>
					</div>
                    
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
            <?php endif; ?>
            
            <?php if ($this->_var['price_grade']['1']): ?>
			<dl>
				<dt><strong><?php echo $this->_var['lang']['price']; ?></strong></dt>
				<dd>
                <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
?>
                  <?php if (($this->_foreach['grade']['iteration'] - 1) == 0): ?>
					<p <?php if ($this->_var['grade']['selected']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['grade']['url']; ?>" class="all"><?php echo $this->_var['grade']['price_range']; ?></a></p>
                  <?php endif; ?>  
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
					<div class="lix">
                   <?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');$this->_foreach['grade'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['grade']['total'] > 0):
    foreach ($_from AS $this->_var['grade']):
        $this->_foreach['grade']['iteration']++;
?>
                     <?php if (($this->_foreach['grade']['iteration'] - 1) > 0): ?>
					<p <?php if ($this->_var['grade']['selected']): ?>class="this"<?php endif; ?>><a  href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a></p>
                    <?php endif; ?>
                   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

					<div class="clear"></div>
					</div>
                    
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
            <?php endif; ?>
            
            <?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_99550400_1424277336');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['filter_attr_0_99550400_1424277336']):
        $this->_foreach['filter_attr']['iteration']++;
?>
				<dl>
				<dt><strong><?php echo htmlspecialchars($this->_var['filter_attr_0_99550400_1424277336']['filter_attr_name']); ?></strong></dt>
				<dd>
                <?php $_from = $this->_var['filter_attr_0_99550400_1424277336']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['filter_attr']['iteration']++;
?>
                   <?php if (($this->_foreach['filter_attr']['iteration'] - 1) == 0): ?>
					<p <?php if ($this->_var['attr']['selected']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['attr']['url']; ?>" class="all"><?php echo $this->_var['attr']['attr_value']; ?></a></p>
                   <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				<div class="lix">
                <?php $_from = $this->_var['filter_attr_0_99550400_1424277336']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');$this->_foreach['filter_attr'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_attr']['total'] > 0):
    foreach ($_from AS $this->_var['attr']):
        $this->_foreach['filter_attr']['iteration']++;
?>
                  <?php if (($this->_foreach['filter_attr']['iteration'] - 1) > 0): ?>
				<p <?php if ($this->_var['attr']['selected']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a></p>
                  <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

					<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</dd>
				<div class="clear"></div>
			</dl>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            
					</div>
		<div class="clear line10"></div>
		<div class="ordbar">
			<div class="box">
			<ol>
				<li class="tx">排序方式</li>
				<li class="lx">
                
					<p <?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">价格</a>
                    </p>
                    
					<p <?php if ($this->_var['pager']['sort'] == 'sell_number' && $this->_var['pager']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['sort'] == 'sell_number' && $this->_var['pager']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=sell_number&order=<?php if ($this->_var['pager']['sort'] == 'sell_number' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">销量</a>
					</p>
                                            
					<p <?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>class="asc"<?php elseif ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'ASC'): ?>class="desc"<?php endif; ?>>
<a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list">上架时间</a>
					</p>
                    
					<div class="clear"></div>
				</li>
				<li class="rx">
                <?php if ($this->_var['pager']['page_next']): ?>
					<p class="next"><a href="<?php echo $this->_var['pager']['page_next']; ?>">下一页</a></p>
                <?php endif; ?>
                <?php if ($this->_var['pager']['page_prev']): ?>
                    <p class="prev"><a href="<?php echo $this->_var['pager']['page_prev']; ?>">上一页</a></p>
                <?php endif; ?>   
                    <p class="info"><?php echo $this->_var['pager']['page']; ?>/<?php echo $this->_var['pager']['page_count']; ?></p>
				</li>
				<div class="clear"></div>
			</ol>
			</div>
		</div>
		<div class="clear line10"></div>
        
		<?php echo $this->fetch('library/goods_list.lbi'); ?>
        
		<div class="clear"></div>

<?php echo $this->fetch('library/pages.lbi'); ?>
	</div>
			
	<div class="clear line15"></div>
</div>
<div class="ebody"></div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>

<div style="display:none"><script src="http://s94.cnzz.com/stat.php?id=1068883&web_id=1068883&show=pic1" language="JavaScript"></script></div>

<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=4&amp;pos=right&amp;uid=66616" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":100};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>

</body>
</html>