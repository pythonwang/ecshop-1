<?php if ($this->_var['user_info']): ?>
<?php echo $this->_var['lang']['hello']; ?>，<?php echo $this->_var['user_info']['username']; ?>, <?php echo $this->_var['lang']['welcome_return']; ?>！
<span class="la">
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
 <a href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a><small>|</small>
</span>
<?php else: ?>
 <?php echo $this->_var['lang']['hello']; ?>，<?php echo $this->_var['lang']['welcome']; ?>！<small>|</small>
 <span class="la">
 <a href="user.php">登录</a><small>|</small>
 <a href="user.php?act=register">快速注册</a>
 </span>
<?php endif; ?>