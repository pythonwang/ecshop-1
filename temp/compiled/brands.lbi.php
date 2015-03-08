<div class="homebrand">
	<div class="brbg">
	<div class="title">
	<em><a href="brand.php" target="_blank">更多品牌</a></em><img src="themes/hecha/themes/hechaV2.5/skin/tm7/images/public/brand_tx1.gif" align="absmiddle" /></div>
	<div class="brandbox">
		<span class="brand_left" id="brand_left" title="向左滚动"></span>
		<div class="brandlist">
		<ul id="brandlist">
        <?php $_from = $this->_var['brand_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');$this->_foreach['brand_foreach'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brand_foreach']['total'] > 0):
    foreach ($_from AS $this->_var['brand']):
        $this->_foreach['brand_foreach']['iteration']++;
?>
          <?php if ($this->_var['brand']['brand_logo']): ?>
                    <li><a href="search.php?brand=<?php echo $this->_var['brand']['brand_id']; ?>" target="_blank" title="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?>"><img class="brandlist_img" src="data/brandlogo/<?php echo $this->_var['brand']['brand_logo']; ?>" alt="<?php echo htmlspecialchars($this->_var['brand']['brand_name']); ?>"/></a></li>
          <?php endif; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</ul>
		</div>
		<span class="brand_right" id="brand_right" title="向右滚动"></span>
	</div>
    <script type="text/javascript">
	var bodyh=document.documentElement.clientHeight;
	var bodyw=document.documentElement.clientWidth
	if(bodyw < 1200)
	{
	}
	else
	{
	  jQuery(".brandbox").slide({effect:"leftLoop",mainCell:".brandlist ul",delayTime:1000,interTime:5000,autoPlay:true,prevCell:".brand_left",nextCell:".brand_right",scroll:5,vis:6,easing:"easeOutCirc"});
	}
    </script> 
	</div>
</div>