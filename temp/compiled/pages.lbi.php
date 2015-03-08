	  <div class="pages6">
			<?php if ($this->_var['pager']['page_first']): ?><p><a href="<?php echo $this->_var['pager']['page_first']; ?>">首页</a></p><?php endif; ?>
			<?php if ($this->_var['pager']['page_prev']): ?><p class="pr"><a href="<?php echo $this->_var['pager']['page_prev']; ?>">上一页</a></p><?php endif; ?>
            
            <?php if ($this->_var['pager']['page_count'] != 1): ?>
              <?php $_from = $this->_var['pager']['page_number']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
			<p <?php if ($this->_var['pager']['page'] == $this->_var['key']): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['item']; ?>"><?php echo $this->_var['key']; ?></a></p>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            <?php endif; ?>
  				
            <?php if ($this->_var['pager']['page_next']): ?><p class="nx"><a href="<?php echo $this->_var['pager']['page_next']; ?>">下一页</a></p><?php endif; ?>
			<?php if ($this->_var['pager']['page_last']): ?><p><a href="<?php echo $this->_var['pager']['page_last']; ?>">尾页</a></p><?php endif; ?>
	 </div>
