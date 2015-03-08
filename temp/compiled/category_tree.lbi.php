<link href="themes/hechaV2.5/skin/tm7/style_test/home7.css" rel="stylesheet" type="text/css" />
<div class="menu7">
	<div class="abody">
	<div class="mxal">
		<p class="til">所有商品分类</p>
        <div class="lnav7 list">
        <?php $_from = get_categories_tree(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat']['iteration']++;
?>
		<dl <?php if (($this->_foreach['cat']['iteration'] - 1) % 2 == 1): ?>class="xc1"<?php endif; ?>>
			<dt><a href="<?php echo $this->_var['cat']['url']; ?>"><big><?php echo htmlspecialchars($this->_var['cat']['name']); ?></big><!--[if gte IE 7]><!--></a><!--<![endif]-->
                                <!--[if lte IE 6]><table><tr><td><![endif]-->
					<ul>
						<li class="tx"><strong><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></strong><em>&nbsp;</em></li>
						<li class="txt">
                        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');if (count($_from)):
    foreach ($_from AS $this->_var['child']):
?>
							<a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
                         <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
							<div class="clear"></div>
						</li>
						<li class="def">
                        <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
                          <?php if (($this->_foreach['child']['iteration'] - 1) < 2): ?>
                        <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a> 
                          <?php endif; ?>
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

                      </li>
					</ul>
					<!--[if lte IE 6]></td></tr></table></a><![endif]-->
                </dt>
			<dd>
            <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['child']['iteration']++;
?>
             <?php if (($this->_foreach['child']['iteration'] - 1) < 2): ?>
            <a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a>
             <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
            </dd>
		</dl>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			            
			<div class="clear"></div>
			<!--<div id="navtitle" class="title"><a href="http://www.hecha.cn/sitemap.php" title="点击查看全部分类" target="_blank">热门分类</a></div>-->
	</div>
	</div>
    
	<div class="mxnx">
	<ul>
   
		<li <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>class="this"<?php endif; ?>><a href="index.php"><span title="<?php echo $this->_var['lang']['home']; ?>"><?php echo $this->_var['lang']['home']; ?></span></a></li>
 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>       
		<li <?php if ($this->_var['nav']['active'] == 1): ?>class="this"<?php endif; ?>><a href="<?php echo $this->_var['nav']['url']; ?>"><span title="<?php echo $this->_var['nav']['name']; ?>"><?php echo $this->_var['nav']['name']; ?></span></a></li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		<div class="clear"></div>
	</ul>
	</div>
	<div class="rbox">
		<p class="p1"><a href="group_buy.php">今日团购</a></p>
	</div>
    
	<div class="clear"></div>
	</div>
</div>