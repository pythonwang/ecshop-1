<?php
$catid=$GLOBALS['smarty']->_var['articles_cat']['id'];
$GLOBALS['smarty']->assign('get_class_articles', get_class_articles($catid,17));
?>        
		<dl class="st1">
			<div class="title_h2" style="cursor:hand"><strong><a href="<?php echo $this->_var['articles_cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['articles_cat']['name']); ?></a></strong><em><a href="<?php echo $this->_var['articles_cat']['url']; ?>">更多...</a></em></div>
<?php $_from = $this->_var['get_class_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article']['iteration']++;
?>  
  <?php if (($this->_foreach['article']['iteration'] - 1) == 0): ?>  
			<dt><a href="<?php echo $this->_var['article']['url']; ?>" target="_blank" title="<?php echo $this->_var['article']['title']; ?>"><img src="<?php echo $this->_var['article']['file_url']; ?>" width="92" height="92" align="absmiddle" /></a>
<p>
				<strong><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo $this->_var['article']['title']; ?>" target="_blank"><?php echo $this->_var['article']['title']; ?></a></strong>
				<?php echo sub_str($this->_var['article']['description'],46); ?><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo $this->_var['article']['title']; ?>" class="link" target="_blank">详细</a>

			</p>
			<div class="clear"></div>
			</dt>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			<dd>
<?php $_from = $this->_var['get_class_articles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'article');$this->_foreach['article'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['article']['total'] > 0):
    foreach ($_from AS $this->_var['article']):
        $this->_foreach['article']['iteration']++;
?> 
  <?php if (($this->_foreach['article']['iteration'] - 1) > 0 && ($this->_foreach['article']['iteration'] - 1) < 5): ?>  
  <h5><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo $this->_var['article']['title']; ?>" target="_blank"><?php echo $this->_var['article']['title']; ?></a></h5>
  <?php endif; ?>
  <?php if (($this->_foreach['article']['iteration'] - 1) > 4): ?>
  <p><a href="<?php echo $this->_var['article']['url']; ?>" title="<?php echo $this->_var['article']['title']; ?>" target="_blank"><?php echo $this->_var['article']['title']; ?></a></p>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

<div class="clear"></div>
			</dd>
            
		</dl>
        
