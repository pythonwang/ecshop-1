<link href="themes/hechaV2.5/skin/tm7/style/home7.css" rel="stylesheet" type="text/css" />
<?php
$catid=$GLOBALS['smarty']->_var['goods_cat']['id'];
$GLOBALS['smarty']->assign('dynamic',get_assign_dynamic($catid));




$sort_order=$GLOBALS['smarty']->_var['dynamic']['sort_order'];
if($sort_order=='')
{
  $sort_order=0;
}
$sortnum=$GLOBALS['smarty']->_var['dynamic']['sort_order']+1;
$GLOBALS['smarty']->assign('sortnum',$sortnum);

$limnum=8;
?>

<div class="abody">
	<div class="row7">
	<div class="title_h1 <?php if ($this->_var['sortnum'] <= 7): ?>col<?php echo $this->_var['sortnum']; ?><?php else: ?>col1<?php endif; ?>">
		<strong><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?> <span><?php echo $this->_var['sortnum']; ?>F</span></strong>
		<em>
<?php $_from = get_child_tree($catid); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child_tree');$this->_foreach['child_tree'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child_tree']['total'] > 0):
    foreach ($_from AS $this->_var['child_tree']):
        $this->_foreach['child_tree']['iteration']++;
?>
  <?php if (($this->_foreach['child_tree']['iteration'] - 1) < 3): ?> 
        <a href="<?php echo $this->_var['child_tree']['url']; ?>" target="_blank"><?php echo $this->_var['child_tree']['name']; ?></a> | 
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

        <!--<a href="http://www.hecha.cn/tieguanyin_list.html" target="_blank">铁观音</a> | <a href="http://www.hecha.cn/dahongpao_list.html" target="_blank">大红袍</a> | -->
        <a href="<?php echo $this->_var['goods_cat']['url']; ?>" target="_blank">更多</a>
        </em>
		<div class="clear"></div>
	</div>
<?php
   $GLOBALS['smarty']->assign('best_goods', get_cat_recommend_goods('best', $catid, $limnum));
   $GLOBALS['smarty']->assign('ad',get_adv('首页_分类商品'.$sortnum.'F'));
?>
	<div class="homepro1 st1">
    
		<div class="comx">
			<?php echo $this->_var['ad']['content']; ?>
		</div>
        
		<ul>

<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_41387100_1424255972');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_41387100_1424255972']):
        $this->_foreach['best_goods']['iteration']++;
?>
<?php if ($this->_foreach['best_goods']['iteration'] <= 7): ?>
        <li class="t<?php echo $this->_foreach['best_goods']['iteration']; ?>"><a href="<?php echo $this->_var['goods_0_41387100_1424255972']['url']; ?>" target="_blank"><img src="<?php if ($this->_var['goods_0_41387100_1424255972']['thumb2'] != ''): ?><?php echo $this->_var['goods_0_41387100_1424255972']['thumb2']; ?><?php else: ?><?php echo $this->_var['goods_0_41387100_1424255972']['thumb']; ?><?php endif; ?>"  alt="<?php echo htmlspecialchars($this->_var['goods_0_41387100_1424255972']['name']); ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_41387100_1424255972']['name']); ?>"/></a><p class="tit"><a href="<?php echo $this->_var['goods_0_41387100_1424255972']['url']; ?>" target="_blank" onclick="return gourl(this.href,'?hra=pro',this.target);"><?php echo $this->_var['goods_0_41387100_1424255972']['short_name']; ?></a></p><p class="pri">
        <strong>
                <?php if ($this->_var['goods_0_41387100_1424255972']['promote_price'] != ""): ?>
                <?php echo $this->_var['goods_0_41387100_1424255972']['promote_price']; ?>
                <?php else: ?>
                <?php echo $this->_var['goods_0_41387100_1424255972']['shop_price']; ?>
                <?php endif; ?> 
         </strong><small><?php echo $this->_var['goods_0_41387100_1424255972']['market_price']; ?></small></p></li>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  
	  <div class="clear"></div></ul>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	</div>
<?php
$GLOBALS['smarty']->assign('get_hotsell_goods', get_hotsell_goods($catid));
?>        
	<div class="row8">
		<div class="hometop">
			<div class="title"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?>热销排行榜</div>
			<div class="list">
				<ul>
                <?php $_from = $this->_var['get_hotsell_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_41447000_1424255972');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_41447000_1424255972']):
        $this->_foreach['top_goods']['iteration']++;
?>
                     <?php if ($this->_foreach['top_goods']['iteration'] == 1): ?>  
                     <li>
						<p class="nos"><strong><?php echo $this->_foreach['top_goods']['iteration']; ?></strong></p>
						<p class="img"><a href="<?php echo $this->_var['goods_0_41447000_1424255972']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_41447000_1424255972']['thumb']; ?>" alt="<?php echo $this->_var['goods_0_41447000_1424255972']['goods_name']; ?>"/></a></p>
						<div class="txt">
						<p class="til"><a href="<?php echo $this->_var['goods_0_41447000_1424255972']['url']; ?>" title="<?php echo $this->_var['goods_0_41447000_1424255972']['goods_name']; ?>"><?php echo $this->_var['goods_0_41447000_1424255972']['short_name']; ?></a></p>
						<p class="pri">
                <?php if ($this->_var['goods_0_41447000_1424255972']['promote_price'] != ""): ?>
                <?php echo $this->_var['goods_0_41447000_1424255972']['promote_price']; ?>
                <?php else: ?>
                <?php echo $this->_var['goods_0_41447000_1424255972']['price']; ?>
                <?php endif; ?>      
                        </p>
						<p class="msg"><a href="<?php echo $this->_var['goods_0_41447000_1424255972']['url']; ?>"><strong><?php echo $this->_var['goods_0_41447000_1424255972']['comment_count']; ?></strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                    <?php endif; ?>                 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                
                
                <?php $_from = $this->_var['get_hotsell_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_41482200_1424255972');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_41482200_1424255972']):
        $this->_foreach['top_goods']['iteration']++;
?>
                     <?php if ($this->_foreach['top_goods']['iteration'] >= 2 && $this->_foreach['top_goods']['iteration'] <= 3): ?>                  
                    <li>
						<p class="nos"><?php echo $this->_foreach['top_goods']['iteration']; ?></p>
						<p class="img"><a href="<?php echo $this->_var['goods_0_41482200_1424255972']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['goods_0_41482200_1424255972']['thumb']; ?>" alt="<?php echo $this->_var['goods_0_41482200_1424255972']['goods_name']; ?>"/></a></p>
						<div class="txt">
						<p class="til"><a href="<?php echo $this->_var['goods_0_41482200_1424255972']['url']; ?>" title="<?php echo $this->_var['goods_0_41482200_1424255972']['goods_name']; ?>"><?php echo $this->_var['goods_0_41482200_1424255972']['short_name']; ?></a></p>
						<p class="pri">
                <?php if ($this->_var['goods_0_41482200_1424255972']['promote_price'] != ""): ?>
                <?php echo $this->_var['goods_0_41482200_1424255972']['promote_price']; ?>
                <?php else: ?>
                <?php echo $this->_var['goods_0_41482200_1424255972']['price']; ?>
                <?php endif; ?>  
                        </p>
						<p class="msg"><a href="<?php echo $this->_var['goods_0_41482200_1424255972']['url']; ?>"><strong><?php echo $this->_var['goods_0_41482200_1424255972']['comment_count']; ?></strong>人评论</a></p>
						</div>
						<div class="clear"></div>
					</li>
                    <?php endif; ?>                 
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>                    
                    
                    
                <?php $_from = $this->_var['get_hotsell_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_41515900_1424255972');$this->_foreach['top_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_41515900_1424255972']):
        $this->_foreach['top_goods']['iteration']++;
?>
                     <?php if ($this->_foreach['top_goods']['iteration'] >= 4 && $this->_foreach['top_goods']['iteration'] <= 6): ?>      
                    <li class="lix">
						<p class="nos"><?php echo $this->_foreach['top_goods']['iteration']; ?></p>
						<p class="til"><a href="<?php echo $this->_var['goods_0_41515900_1424255972']['url']; ?>" title="<?php echo $this->_var['goods_0_41515900_1424255972']['goods_name']; ?>"><?php echo $this->_var['goods_0_41515900_1424255972']['short_name']; ?></a></p>
					</li>
                    <?php endif; ?>              
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>   
                    
                    
      </ul>
			</div>
		</div>
	</div>
        
	<div class="clear line15"></div>
</div>






