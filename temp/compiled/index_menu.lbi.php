<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
	</div>
	<div class="mxnx">
	<ul>
    
		<li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>class="this"<?php endif; ?>><a href="index.php"><span title="<?php echo $this->_var['lang']['home']; ?>"><?php echo $this->_var['lang']['home']; ?></span></a></li>
 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_40329800_1424255972');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_40329800_1424255972']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>       
		<li <?php if ($this->_var['nav_0_40329800_1424255972']['active'] == 1): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['nav_0_40329800_1424255972']['url']; ?>"><span title="<?php echo $this->_var['nav_0_40329800_1424255972']['name']; ?>"><?php echo $this->_var['nav_0_40329800_1424255972']['name']; ?></span></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        
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