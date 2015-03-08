<div class="slide">
<ul class="bd"> 
<?php
$GLOBALS['smarty']->assign('get_index_ad', get_index_ad());
?>
<?php $_from = $this->_var['get_index_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'indexAd');$this->_foreach['indexAd'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['indexAd']['total'] > 0):
    foreach ($_from AS $this->_var['indexAd']):
        $this->_foreach['indexAd']['iteration']++;
?>
  <?php if ($this->_foreach['indexAd']['iteration'] <= 5): ?>
            <li  style="background-color:#ffffff; background-image:url(<?php echo $this->_var['indexAd']['content2']; ?>)"><small><a href="<?php echo $this->_var['indexAd']['url']; ?>" target="_blank"><img class="hd_img" src="<?php echo $this->_var['indexAd']['content']; ?>" /></a></small></li>
  <?php endif; ?>          
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
        </ul>
<div class="hd"><ul>
<?php $_from = $this->_var['get_index_ad']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'indexAd');$this->_foreach['indexAd'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['indexAd']['total'] > 0):
    foreach ($_from AS $this->_var['indexAd']):
        $this->_foreach['indexAd']['iteration']++;
?>
  <?php if ($this->_foreach['indexAd']['iteration'] <= 5): ?>
<li><?php echo $this->_foreach['indexAd']['iteration']; ?></li>
  <?php endif; ?>    
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</ul><a class="prev">></a></div>
</div>
<script type="text/javascript">jQuery(".slide").slide({titCell:".hd li",mainCell:".bd",effect:"fade",delayTime:1000,interTime:5000,autoPlay:true,nextCell:".prev"});</script>