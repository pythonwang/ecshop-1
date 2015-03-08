<?php
$GLOBALS['smarty']->assign('get_hotsell_goods', get_hotsell_goods($cat_id));
?>
	<div class="title_h3"><p><?php echo $this->_var['cat']['cat_name']; ?>热销TOP5</p></div><div class="prolist_s1">

<?php $_from = $this->_var['get_hotsell_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['top_goods']['iteration']++;
?>    
  <?php if (($this->_foreach['top_goods']['iteration'] - 1) < 5): ?>  
        <ul>
			<li class="img"><a href="<?php echo $this->_var['goods']['url']; ?>"><img alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['thumb']; ?>" /></a></li>
			<li class="txt">
				<p class="til"><a href="<?php echo $this->_var['goods']['url']; ?>"><?php echo $this->_var['goods']['short_name']; ?></a></p>
				<p>市场价：<small>￥<?php echo $this->_var['goods']['market_price']; ?></small></p>
				<p class="pri">本店价：￥
                <?php if ($this->_var['goods']['promote_price'] != ""): ?>
                <?php echo $this->_var['goods']['promote_price']; ?>
                <?php else: ?>
                <?php echo $this->_var['goods']['price']; ?>
                <?php endif; ?>  
                </p>
			</li>
			<div class="clear"></div>
		</ul>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        
       
        </div>   