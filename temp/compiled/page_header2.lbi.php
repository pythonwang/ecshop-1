<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
</script>
<div class="top6">
	<div class="ebody">
		<p class="left">
		<span id="J_TaobaoBar">
		</span>
		<span id="is_show_login_out">
		</span>
		<span id="loginInfo">
		<span class="la">
		<?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
		</span>
		</span>

		</p>
<?php if ($this->_var['navigator_list']['top']): ?>   
		<p class="rlink">
 <?php $_from = $this->_var['navigator_list']['top']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_top_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_top_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_top_list']['iteration']++;
?>       
			<a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a><small>|</small>
 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
			<!--<a href="http://www.hecha.cn/ol/" target="_blank">在线客服</a><small>|</small>
			<a href="http://www.hecha.cn/about/hc-about.html">关于和茶</a><small>|</small>
			<a href="http://www.hecha.cn/help/">帮助中心</a>-->
            
		</p>
<?php endif; ?>
		<dl><dt><a href="flow.php?step=cart">购物车<strong><span id="cart"><?php 
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
            
<!--<li><em>￥29 x 1</em><a href="http://www.hecha.cn/sgoods-2779.html" title="【滋恩】特级大红袍圆罐装50g" target="_blank">【滋恩】特级大红袍圆罐装50g</a></li><li><em>￥29 x 1</em><a href="http://www.hecha.cn/sgoods-2793.html" title="【与花香】玫瑰荷叶茶150g" target="_blank">【与花香】玫瑰荷叶茶150g</a></li><li class="tr"><a href="http://www.hecha.cn/cart.php"><img class="hd_img" src="http://www.hecha.cn/themes/hechaV2.5/skin/tm6/images/public/viewcart.gif" align="absmiddle" /></a></li>-->

</ul>

		<!--[if lte IE 6]></td></tr></table></a><![endif]--></dt></dl>
	</div>
</div>

<div class="ebody">
	<div class="header6">
			<div class="logo"><a href="index.php"><img src="themes/hecha/images/logo.gif" width="350" height="70" border="0"/></a></div>
			<div class="tel">
			<p><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/header/ico_tel.gif" width="83" height="17" align="absmiddle" /></p>
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
				<dt><input name="keywords" id="keyword" onfocus="this.select();" type="text" class="inp2" /></dt>
				<dd><input name="imageField" type="image" src="themes/hecha/themes/hechaV2.5/skin/tm6/images/header/search_sub.gif"/></dd>
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
	</div>
    

</div>

<div class="menu6">
	<div class="ebody">
	<ul>
		<li ><a href="index.php"><span class="n" title="<?php echo $this->_var['lang']['home']; ?>"><?php echo $this->_var['lang']['home']; ?></span></a></li>
<?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>   
		<li ><a href="<?php echo $this->_var['nav']['url']; ?>"><span class="n" title="<?php echo $this->_var['nav']['name']; ?>"><?php echo $this->_var['nav']['name']; ?></span></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

       
		<div class="clear"></div>
	</ul>
	<div class="rbox">
		<p class="p1"><a href="group_buy.php">今日团购</a></p>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="clear line10"></div>
