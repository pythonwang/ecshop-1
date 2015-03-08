<div class="ebody">
		<div class="line10"></div>
	<div class="kfbox6 crz">
    <?php $_from = $this->_var['helps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'help_cat');$this->_foreach['help_cat'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['help_cat']['total'] > 0):
    foreach ($_from AS $this->_var['help_cat']):
        $this->_foreach['help_cat']['iteration']++;
?>
		<ul class="s1">
			<li class="t1"><?php echo $this->_var['help_cat']['cat_name']; ?></li>
            <?php $_from = $this->_var['help_cat']['article']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'item_0_21184500_1424277326');if (count($_from)):
    foreach ($_from AS $this->_var['item_0_21184500_1424277326']):
?>
			<li><a href="<?php echo $this->_var['item_0_21184500_1424277326']['url']; ?>" target="_blank" rel="nofollow" ><?php echo $this->_var['item_0_21184500_1424277326']['short_title']; ?></a></li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
		</ul>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		<ul class="s1">
			<li class="t2"><?php echo $this->_var['service_phone']; ?></li>
			<li class="t3"><a href="#" target="_blank" rel="nofollow" >点击这里进入</a></li>
		</ul>
               
	</div>
	<div class="clear line10"></div>
</div>
<div class="ebody">
		<div class="footer6">
		<ul class="service">
			<li class="t1" title="支付宝特约商家"><a href="http://www.hecha.cn/help/show-32.html" target="_blank" rel="nofollow" >支付宝特约商家</a></li>
			<li class="t2" title="7天退换货保障"><a href="http://www.hecha.cn/help/show-359.html" target="_blank" rel="nofollow" >7天退换货保障</a></li>
			<li class="t3" title="满98元免费配送"><a href="http://www.hecha.cn/help/show-20955.html" target="_blank" rel="nofollow" >满98元免费配送</a></li>
			<li class="t4" title="400城市送货上市货到付款"><a href="http://www.hecha.cn/help/show-20957.html" target="_blank" rel="nofollow" >400城市送货上市货到付款</a></li>
		<div class="clear"></div>
		</ul>
		<div class="line15"></div>
		<p class="link">
        
        <?php $_from = $this->_var['navigator_list']['bottom']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav_0_21192600_1424277326');$this->_foreach['nav_bottom_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_bottom_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav_0_21192600_1424277326']):
        $this->_foreach['nav_bottom_list']['iteration']++;
?>
        <a href="<?php echo $this->_var['nav_0_21192600_1424277326']['url']; ?>" target="_blank"><?php echo $this->_var['nav_0_21192600_1424277326']['name']; ?></a> | 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <a href="#">回顶部</a>
               
        </p>
                <p>Copyright © 2007-2013 Hecha. All Rights Reserved.  闽ICP证：闽<a href="http://www.miibeian.gov.cn/" target="_blank">10202223-1</a>号</p>
                    <p> 福建和茶网络科技有限公司 版权所有 并保留所有权利</p>
                    <div class="line10"></div>
                    <p><span><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/fot_img1.gif" alt="国家级信息化示范试点项目" /></span><span><img src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/fot_img2.gif" alt="北京大学茶文化济注研究所专业支持"  /></span>
                    </p>
	</div>
</div>
<script type="text/javascript" src="js/cookies.js"></script>
<div class="totop">
<div style="display:block" id="show_ke_ol"><a href="#">在线客服</a></div>
<div style="clear:both"></div>
<a onClick="javascript:scroll(0,0)" href="javascript:;"><img src="themes/hecha/themes/hechaV2.5/skin/tm5/images/totop.gif" /></a></div>
<span style="display:none"><img src="http://www.hecha.cn/cart_save_show.php" width=1 height=1></span>


<div class="kfol" id="kfimg">
<p><img src="themes/hecha/images/kf_img1.jpg" align="absmiddle" /><p>
<p><img src="themes/hecha/images/kf_img2.jpg" align="absmiddle" /><p>
<p><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['qq']['0']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="themes/hecha/images/kf_img4.jpg" align="absmiddle" /></a><p>
<p><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin=<?php echo $this->_var['qq']['1']; ?>&amp;Site=<?php echo $this->_var['shop_name']; ?>&amp;Menu=yes" target="_blank"><img src="themes/hecha/images/kf_img3.jpg" align="absmiddle" /></a><p>
<p><img src="themes/hecha/images/kf_img5.jpg" align="absmiddle" onclick="document.getElementById('kfimg').style.display='none';document.getElementById('show_ke_ol').style.display='block';" style="cursor:hand;" /><p>
</div>
<SCRIPT type=text/javascript>
var verticalpos="frombottom"
function JSFX_FloatTopDiv()
{i
var startX =0,
startY = 459;
var ns = (navigator.appName.indexOf("Netscape") != -1);
var d = document;
function ml(id)
{
  var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.divs[id];
  if(d.divs)el.style=el;
  el.sP=function(x,y){this.style.right=x;this.style.top=y;};
  el.x = startX;
  if (verticalpos=="fromtop")
  el.y = startY;
  else{
  el.y = ns ? pageYOffset + innerHeight : document.documentElement.scrollTop + 
document.documentElement.clientHeight;
  el.y -= startY;
  }
  return el;
}
window.stayTopright=function()
{
  if (verticalpos=="fromtop"){
  var pY = ns ? pageYOffset : document.documentElement.scrollTop;
  ftlObj.y += (pY + startY - ftlObj.y)/8;
  }
  else{
  var pY = ns ? pageYOffset + innerHeight : document.documentElement.scrollTop + 
document.documentElement.clientHeight;
//alert(pY);
  ftlObj.y += (pY - startY - ftlObj.y)/8;
  }
  ftlObj.sP(ftlObj.x, ftlObj.y+"px");
  setTimeout("stayTopright()", 10);
}
ftlObj = ml("kfimg");
stayTopright();
}
JSFX_FloatTopDiv();
</SCRIPT>




