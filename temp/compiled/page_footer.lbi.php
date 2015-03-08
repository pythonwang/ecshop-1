<div class="footer7">
	<div class="abody">
	<div class="kfbox7 crz">
  <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['help_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cat']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['help_cat']['iteration']++;
?>  
		<ul class="s<?php echo $this->_foreach['help_cat']['iteration']; ?>">
			<li class="t1 im<?php echo $this->_foreach['help_cat']['iteration']; ?>"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['item']):
?>
			<li><a href="<?php echo $this->_var['item']['url']; ?>" target="_blank" rel="nofollow"><?php echo $this->_var['item']['short_title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 

		</ul>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              
		<ul class="s6">
			<li class="t1 im6">联系客服</li>
			<li>订购热线</li>
			<li class="t2"><?php echo $this->_var['service_phone']; ?></li>
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
   <?php if ($this->_var['navigator_list']['bottom']): ?>
      <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
    <a href="<?php echo $this->_var['nav']['url']; ?>" target="_blank"><?php echo $this->_var['nav']['name']; ?></a> | 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>
   
    <a href="#">回顶部</a>
    </p>
        <p>Copyright © 2007-2013 Hecha. All Rights Reserved.  闽ICP证：闽<a href="http://www.miibeian.gov.cn/" target="_blank">10202223-1</a>号</p>
	<p> 福建和茶网络科技有限公司 版权所有 并保留所有权利</p><p>技术支持：<a title="Ecshop模板网" target="_blank" href="http://www.ecshoptemplate.com/">Ecshop模板网</a></p>
	<div class="line10"></div>
	<p><span><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/fot_img1.gif" alt="国家级信息化示范试点项目" /></span></p>
	</div>
</div>