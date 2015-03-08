<?php
$GLOBALS['smarty']->assign('hot_goods', get_recommend_goods2('new'));
?>
			<ol class="hide">
				<div class="hotsell">
					<ul>
 <?php $_from = $this->_var['hot_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');$this->_foreach['goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods']):
        $this->_foreach['goods']['iteration']++;
?>     
                    <li>
						<div class="txt">
							<p class="til"><a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank"><?php echo $this->_var['goods']['short_style_name']; ?></a></p>
							<p class="msg"><a href="<?php echo $this->_var['goods']['url']; ?>#comment">已有<?php echo $this->_var['goods']['comment_count']; ?>人评论</a></p>
							<p class="prc">
           <?php if ($this->_var['goods']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods']['shop_price']; ?>
          <?php endif; ?>
                            </p>
							<p class="pri">市场价￥<?php echo $this->_var['goods']['market_price']; ?></p>
						</div>
						<a href="<?php echo $this->_var['goods']['url']; ?>" target="_blank" alt="<?php echo htmlspecialchars($this->_var['goods']['name']); ?>"><img src="<?php if ($this->_var['goods']['thumb2'] != ''): ?><?php echo $this->_var['goods']['thumb2']; ?><?php else: ?><?php echo $this->_var['goods']['thumb']; ?><?php endif; ?>" align="absmiddle" /></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

					    				  </ul>
					<div class="clear"></div>
				</div>
			</ol>