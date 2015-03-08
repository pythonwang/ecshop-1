<?php

/**
 * 调用购物车信息商品数量
 *
 * @access  public
 * @return  string
 */
function insert_cart_info_number()
{
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }

    return $number;
}

/**
 * 调用购物车信息商品总额
 *
 * @access  public
 * @return  string
 */
function insert_cart_info_amount()
{
    $sql = 'SELECT SUM(goods_number) AS number, SUM(goods_price * goods_number) AS amount' .
           ' FROM ' . $GLOBALS['ecs']->table('cart') .
           " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'";
    $row = $GLOBALS['db']->GetRow($sql);

    if ($row)
    {
        $number = intval($row['number']);
        $amount = floatval($row['amount']);
    }
    else
    {
        $number = 0;
        $amount = 0;
    }

    return $amount;
}

/**
 * 调用购物车信息
 */
function insert_cart_info2()
{
	/* 取得商品列表，计算合计 */
    $cart_goods = get_cart_goods2();
	$goods_list = $cart_goods['goods_list'];
	$total = $cart_goods['total'];

if(!$goods_list)
{
   $str = '<li><em><a href="flow.php?step=cart"><img class="hd_img" src="themes/hecha/themes/hechaV2.5/skin/tm7/images/header/viewcart.gif" align="absmiddle" /></a></em>购物车中没有商品</li>';
}
else
{
	foreach($goods_list as $goods)
	{
    $short_name = sub_str($goods['goods_name'], 12);
	$url = build_uri('goods', array('gid'=>$goods['goods_id']), $goods['goods_name']);
	$price = price_format($goods["goods_price"]);
	
	$str.='<li><em>￥'.$price.' x '.$goods["goods_number"].'</em><a href="'.$url.'" title="'.$goods["goods_name"].'" target="_blank">'.$short_name.'</a></li>';
 
	}
	
	$str.='<li class="tr"><a href="flow.php?step=cart"><img class="hd_img" src="themes/hecha/themes/hechaV2.5/skin/tm6/images/public/viewcart.gif" align="absmiddle" /></a></li>';
}
	
	
	
    return $str;
}

/**
 * 调用浏览历史
 *
 * @access  public
 * @return  string
 */
function insert_goods_history()
{
    $str = '';
    if (!empty($_COOKIE['ECS']['history']))
    {
        $where = db_create_in($_COOKIE['ECS']['history'], 'goods_id');
        $sql   = 'SELECT goods_id, goods_name, goods_thumb, shop_price,market_price,promote_price FROM ' . $GLOBALS['ecs']->table('goods') .
                " WHERE $where AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0";
        $query = $GLOBALS['db']->query($sql);
        $res = array();
        while ($row = $GLOBALS['db']->fetch_array($query))
        {
            $goods['goods_id'] = $row['goods_id'];
            $goods['goods_name'] = $row['goods_name'];
            $goods['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
            $goods['shop_price'] = price_format($row['shop_price']);
            $goods['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
			$goods['market_price'] = price_format($row['market_price']);
					
$str.='<ul><li class="img"><a href="'.$goods['url'].'" target="_blank" title="'.$goods['goods_name'].'"><img src="'.$goods['goods_thumb'].'" /></a></li>'.
   '<li class="txt"><p class="til"><a href="'.$goods['url'].'" target="_blank" title="'.$goods['goods_name'].'">'.$goods['goods_name'].'</a></p>'.
   '<p>市场价：<small>￥'.$goods['market_price'].'</small></p><p class="pri">本店价：￥'.$goods['shop_price'].'</p></li><div class="clear"></div></ul>';					

        }
		
    }
    return $str;
}

/**
* 插入广告
*/
function insert_adv($arr)
{
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ad.ad_name ='".$arr['ad_name'].("' ad.enabled=1");
		$row = $GLOBALS['db']->GetRow( $sql );
		$val="";
        if($row)
        {
          $row['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
		  $val= "<a href='".$row['url']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
        }
		
		return $val;
}

/**
 * 调用评论信息
 *
 * @access  public
 * @return  string
 */
function insert_comments2($arr)
{
    $need_cache = $GLOBALS['smarty']->caching;
    $need_compile = $GLOBALS['smarty']->force_compile;

    $GLOBALS['smarty']->caching = false;
    $GLOBALS['smarty']->force_compile = true;

    /* 验证码相关设置 */
    if ((intval($GLOBALS['_CFG']['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
    {
        $GLOBALS['smarty']->assign('enabled_captcha', 1);
        $GLOBALS['smarty']->assign('rand', mt_rand());
    }
    $GLOBALS['smarty']->assign('username',     stripslashes($_SESSION['user_name']));
    $GLOBALS['smarty']->assign('email',        $_SESSION['email']);
    $GLOBALS['smarty']->assign('comment_type', $arr['type']);
    $GLOBALS['smarty']->assign('id',           $arr['id']);
    $cmt = assign_comment($arr['id'],          $arr['type']);
    $GLOBALS['smarty']->assign('comments',     $cmt['comments']);
    $GLOBALS['smarty']->assign('pager',        $cmt['pager']);


    $val = $GLOBALS['smarty']->fetch('library/comments_list2.lbi');

    $GLOBALS['smarty']->caching = $need_cache;
    $GLOBALS['smarty']->force_compile = $need_compile;

    return $val;
}

/**
* 获得某个分类下的品牌列表
*
* @access  public
* @param   int     $cat
* @return  array
*/
function get_cat_brands($cat = 0, $app = 'brand' ,$limnum=0,$sort='tag DESC, b.sort_order ASC')
{
    global $page_libs;
    $template = basename(PHP_SELF);
    $template = substr($template, 0, strrpos($template, '.'));
    include_once(ROOT_PATH . ADMIN_PATH . '/includes/lib_template.php');
    static $static_page_libs = null;
    if ($static_page_libs == null)
    {
            $static_page_libs = $page_libs;
    }

    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';

    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children AND is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY $sort";
	
	if($limnum>0)
	{
		$num=$limnum;
		$sql .= " LIMIT $num ";
	}
	else
	{
      if (isset($static_page_libs[$template]['/library/brands.lbi']))
      {
        $num = get_library_number("brands");
        $sql .= " LIMIT $num ";
      }
	}
	
    $row = $GLOBALS['db']->getAll($sql);

    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
        $row[$key]['brand_desc'] = htmlspecialchars($val['brand_desc'],ENT_QUOTES);
		
		//$arr[$row['cat_id']]['url'] = build_uri( "category", array("cid" => $row['cat_id']
    }

    return $row;
}

/**
* 获得某个分类下的促销活动
*
*/
function get_cat_activity($cat,$limit=12)
{
	$gmtime = gmtime();
	$children = ($cat > 0) ? ' AND ' . get_children($cat) : '';
	
	$sql = "select a.act_id,a.act_name,a.act_type,g.goods_id,a.is_finished from " . $GLOBALS['ecs']->table('goods_activity') . " as a," . $GLOBALS['ecs']->table('goods') . " as g where g.goods_id=a.goods_id and is_finished=0 AND start_time <= '$gmtime' AND end_time >= '$gmtime' and act_type=1 $children LIMIT $limit";
	$row = $GLOBALS['db']->getAll($sql);
	
	foreach ($row AS $key => $val)
	{
		switch ($val['act_type'])
        {
			case GAT_SNATCH: //夺宝奇兵
			     $row[$key]['act_typeName'] = '夺宝';
				 $row[$key]['act_typeUrl'] = 'snatch.php';
			     $row[$key]['url'] = build_uri('snatch', array('sid' => $val['act_id']));
			     break;
			case GAT_GROUP_BUY: //团购
			     $row[$key]['act_typeName'] = '团购';
				 $row[$key]['act_typeUrl'] = 'group_buy.php';
			     $row[$key]['url']  = build_uri('group_buy', array('gbid' => $val['act_id']));
			     break;
			case GAT_AUCTION: //拍卖
				 $row[$key]['act_typeName'] = '拍卖';
				 $row[$key]['act_typeUrl'] = 'auction.php';
			     $row[$key]['url']  = build_uri('auction', array('auid' => $val['act_id']));
			     break;
			case GAT_PACKAGE: //礼包
				 $row[$key]['act_typeName'] = '礼包';
				 $row[$key]['act_typeUrl'] = 'package.php';
			     $row[$key]['url']  = 'package.php#' . $val['act_id'];
			     break;
			
		}

	}
	
	return $row;
}


/**
 * 获得最新的团购活动
 *
 * @access  private
 * @return  array
 */
function index_get_group_buy2()
{
    $time = gmtime();
    $limit = get_library_number('group_buy', 'index');

    $group_buy_list = array();
    if ($limit > 0)
    {
        $sql = 'SELECT gb.act_id AS group_buy_id, gb.goods_id, gb.ext_info, gb.goods_name, g.goods_thumb, g.goods_img,g.market_price,gb.end_time ' .
		        ',(select IFNULL(sum(og.goods_number),0) from '.$GLOBALS['ecs']->table( "order_goods" ).' as og where og.goods_id = g.goods_id) AS sell_number '.
                'FROM ' . $GLOBALS['ecs']->table('goods_activity') . ' AS gb, ' .
                    $GLOBALS['ecs']->table('goods') . ' AS g ' .
                "WHERE gb.act_type = '" . GAT_GROUP_BUY . "' " .
                "AND g.goods_id = gb.goods_id " .
                "AND gb.start_time <= '" . $time . "' " .
                "AND gb.end_time >= '" . $time . "' " .
                "AND g.is_delete = 0 " .
                "ORDER BY gb.act_id DESC " .
                "LIMIT $limit" ;
        $res = $GLOBALS['db']->query($sql);

        while ($row = $GLOBALS['db']->fetchRow($res))
        {
            /* 如果缩略图为空，使用默认图片 */
            $row['goods_img'] = get_image_path($row['goods_id'], $row['goods_img']);
            $row['thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);

            /* 根据价格阶梯，计算最低价 */
            $ext_info = unserialize($row['ext_info']);
            $price_ladder = $ext_info['price_ladder'];
            if (!is_array($price_ladder) || empty($price_ladder))
            {
                $row['last_price'] = price_format(0);
            }
            else
            {
                foreach ($price_ladder AS $amount_price)
                {
                    $price_ladder[$amount_price['amount']] = $amount_price['price'];
                }
            }
            ksort($price_ladder);
            $row['last_price'] = price_format(end($price_ladder));
            //$row['url'] = build_uri('group_buy', array('gbid' => $row['group_buy_id']));
			$row['url'] = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
			
            $row['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                           sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $row['short_style_name']   = add_style($row['short_name'],'');
			$row['market_price'] = price_format($row['market_price']);
			$row['save_price'] = price_format($row['market_price']-$row['last_price']);
			
            $group_buy_list[] = $row;
        }
    }

    return $group_buy_list;
}

/**
* 获得商品分类下的子分类名称
*/
function get_cat_child( $cat_id )
{
	    $cat_names="";
		$res = $GLOBALS['db']->getAll( "SELECT cat_name FROM ".$GLOBALS['ecs']->table( "category" )." WHERE parent_id  = ".$cat_id." AND is_show = 1 order by sort_order asc, cat_id asc");
		
		foreach ( $res as $row )
		{
			$cat_name=$cat_name." ".$row['cat_name'];
		}
		
		return $cat_name;
}

/**
* 获得首页主广告
*/
function get_index_ad($ad_type=0)
{
	$ads = array();
	
    $sql = 'SELECT ad_type, content,ad_name,url FROM ' . $GLOBALS['ecs']->table("ad_custom").' where ad_type=0 order by ad_id desc'  ;
    $res = $GLOBALS['db']->getAll($sql);
    foreach ($res AS $adx => $row)
    {
                        $ads[$adx]['ad_type']           = $row['ad_type'];
                        $ads[$adx]['content']           = $row['content'];
                        $ads[$adx]['url']               = $row['url'];
                        $ads[$adx]['ad_name']           = $row['ad_name'];
    }
	
	$sql = 'SELECT ad_type, content,ad_name,url FROM ' . $GLOBALS['ecs']->table("ad_custom").' where ad_type=1 order by ad_id desc'  ;
    $res = $GLOBALS['db']->getAll($sql);
	foreach ($res AS $adx => $row)
    {
                        $ads[$adx]['content2']           = $row['content'];
    }
	
    return $ads;
}

/**
* 根据广告位获得广告列表
*/
function get_advlist($position,$num)
{
		$arr = array( );
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ap.position_name ='".$position.("' and ad.enabled=1 limit ".$num );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$row['ad_id']]['name'] = $row['ad_name'];
				$arr[$row['ad_id']]['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
				$arr[$row['ad_id']]['image'] = "data/afficheimg/".$row['ad_code'];
				$arr[$row['ad_id']]['content'] = "<a href='".$arr[$row['ad_id']]['url']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
				$arr[$row['ad_id']]['width'] = $row['ad_width'];
				$arr[$row['ad_id']]['height'] = $row['ad_height'];
		}
		return $arr;
}

/**
* 获得广告列表
*/
function get_adv($ad_name)
{
		$arr = array( );
		$sql = "select ap.ad_width,ap.ad_height,ad.ad_id,ad.ad_name,ad.ad_code,ad.ad_link,ad.ad_id from ".$GLOBALS['ecs']->table( "ad_position" )." as ap left join ".$GLOBALS['ecs']->table( "ad" )." as ad on ad.position_id = ap.position_id where ad.ad_name ='".$ad_name.("' and ad.enabled=1");
		
		$row = $GLOBALS['db']->GetRow($sql);
		
		if($row)
		{
		$row['name'] = $row['ad_name'];
		$row['url'] = "affiche.php?ad_id=".$row['ad_id']."&uri=".$row['ad_link'];
		$row['image'] = "data/afficheimg/".$row['ad_code'];
		$row['content'] = "<a href='".$row['url']."' target='_blank'><img src='data/afficheimg/".$row['ad_code']."' width='".$row['ad_width']."' height='".$row['ad_height']."' /></a>";
		$row['width'] = $row['ad_width'];
		$row['height'] = $row['ad_height'];
		}
		
		return $row;

}


/**
* 获得某个类别下的推荐商品
*/
function get_cat_recommend_goods( $type = "", $cat = "", $cat_num = 0, $brand = 0, $min = 0, $max = 0, $ext = "" )
{
	    $cats = get_children($cat);
	
		$brand_where = 0 < $brand ? " AND g.brand_id = '".$brand."'" : "";
		$price_where = 0 < $min ? " AND g.shop_price >= ".$min." " : "";
		$price_where .= 0 < $max ? " AND g.shop_price <= ".$max." " : "";
		$sql = "SELECT g.goods_id, g.goods_name, g.goods_name_style,g.goods_sn,  g.market_price, g.shop_price AS org_price, g.promote_price, ".( "IFNULL(mp.user_price, g.shop_price * '".$_SESSION['discount']."') AS shop_price, " )."(select AVG(r.comment_rank) from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = g.goods_id AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_rank, (select IFNULL(sum(og.goods_number), 0) from ".$GLOBALS['ecs']->table( "order_goods" )." as og where og.goods_id = g.goods_id) AS sell_number, promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb,g.goods_thumb2, goods_img, b.brand_name, b.brand_id, g.is_best, g.is_new, g.is_hot, g.is_promote FROM ".$GLOBALS['ecs']->table( "goods" )." AS g LEFT JOIN ".$GLOBALS['ecs']->table( "brand" )." AS b ON b.brand_id = g.brand_id LEFT JOIN ".$GLOBALS['ecs']->table( "member_price" )." AS mp ".( "ON mp.goods_id = g.goods_id AND mp.user_rank = '".$_SESSION['user_rank']."' " )."WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".$brand_where.$price_where.$ext;
		$num = 0;
		$type2lib = array( "best" => "recommend_best", "new" => "recommend_new", "hot" => "recommend_hot", "promote" => "recommend_promotion" );
		if ( $cat_num == 0 )
		{
				$num = get_library_number( $type2lib[$type] );
		}
		else
		{
				$num = $cat_num;
		}
		switch ( $type )
		{
		case "best" :
				$sql .= " AND is_best = 1";
				break;
		case "new" :
				$sql .= " AND is_new = 1";
				break;
		case "hot" :
				$sql .= " AND is_hot = 1";
				break;
		case "promote" :
				$time = gmtime( );
				$sql .= " AND is_promote = 1 AND promote_start_date <= '".$time."' AND promote_end_date >= '{$time}'";
		}
		if ( !empty( $cats ) )
		{
				$sql .= " AND (".$cats." OR ".get_extension_goods( $cats ).")";
		}
		$order_type = $GLOBALS['_CFG']['recommend_order'];
		$sql .= $order_type == 0 ? " ORDER BY g.sort_order, g.last_update DESC" : " ORDER BY RAND()";
		$res = $GLOBALS['db']->selectLimit( $sql, $num );
		$idx = 0;
		$goods = array( );
		while ( $row = $GLOBALS['db']->fetchRow( $res ) )
		{
				if ( 0 < $row['promote_price'] )
				{
						$promote_price = bargain_price( $row['promote_price'], $row['promote_start_date'], $row['promote_end_date'] );
						$goods[$idx]['promote_price'] = 0 < $promote_price ? price_format( $promote_price ) : "";
				}
				else
				{
						$goods[$idx]['promote_price'] = "";
				}
				$row['comment_rank'] = ceil( $row['comment_rank'] ) == 0 ? 5 : ceil( $row['comment_rank'] );
				$goods[$idx]['id'] = $row['goods_id'];
				$goods[$idx]['name'] = $row['goods_name'];
				$goods[$idx]['goods_sn'] = $row['goods_sn'];
				$goods[$idx]['comment_rank'] = $row['comment_rank'];
				$goods[$idx]['sell_number'] = $row['sell_number'];
				$goods[$idx]['is_new'] = $row['is_new'];
				$goods[$idx]['is_best'] = $row['is_best'];
				$goods[$idx]['is_hot'] = $row['is_hot'];
				$goods[$idx]['is_promote'] = $row['is_promote'];
				$goods[$idx]['brief'] = $row['goods_brief'];
				$goods[$idx]['brand_id'] = $row['brand_id'];
				$goods[$idx]['brand_name'] = $row['brand_name'];
				$goods[$idx]['short_name'] = 0 < $GLOBALS['_CFG']['goods_name_length'] ? sub_str( $row['goods_name'], $GLOBALS['_CFG']['goods_name_length'] ) : $row['goods_name'];
				$goods[$idx]['market_price'] = price_format( $row['market_price'] );
				$goods[$idx]['shop_price'] = price_format( $row['shop_price'] );
				$goods[$idx]['thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$goods[$idx]['thumb2'] = $row['goods_thumb2'];
				$goods[$idx]['goods_img'] = get_image_path( $row['goods_id'], $row['goods_img'] );
				$goods[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				$goods[$idx]['short_style_name'] = add_style( $goods[$idx]['short_name'], $row['goods_name_style'] );
				++$idx;
		}
		return $goods;
}

/**
 * 获得分类下的商品
 *
 * @access  public
 * @param   string  $children
 * @return  array
 */
function get_cat_goods($cat = '', $size=0, $brand = 0, $min = 0, $max = 0, $ext = '', $sort='', $order='')
{
	$children=get_children($cat);
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
            "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';

    if ($brand > 0)
    {
        $where .=  "AND g.brand_id=$brand ";
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    /* 获得商品列表 */
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
                'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ' .
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
            "WHERE $where $ext ORDER BY $sort $order g.sort_order, g.last_update DESC";
			
    $res = $GLOBALS['db']->selectLimit($sql, $size);


    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($promote_price != 0)
        {
            $watermark_img = "watermark_promote_small";
        }
        elseif ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new_small";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best_small";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot_small';
        }

        if ($watermark_img != '')
        {
            $arr[$row['goods_id']]['watermark_img'] =  $watermark_img;
        }

        $arr[$row['goods_id']]['id']         = $row['goods_id'];
        $arr[$row['goods_id']]['name']       = $row['goods_name'];
        $arr[$row['goods_id']]['brief']      = $row['goods_brief'];
        $arr[$row['goods_id']]['style_name'] = add_style($row['goods_name'],$row['goods_name_style']);
        $arr[$row['goods_id']]['market_price']     = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']       = price_format($row['shop_price']);
        $arr[$row['goods_id']]['type']             = $row['goods_type'];
        $arr[$row['goods_id']]['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '';
        $arr[$row['goods_id']]['thumb']      = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['img']        = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['url']              = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
		$arr[$row['goods_id']]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
		$arr[$row['goods_id']]['short_style_name'] = add_style($arr[$row['goods_id']]['short_name'],$row['goods_name_style']);

    }

    return $arr;
}


/**
* 获得推荐分类的子分类
*/
function get_hot_cat_tree( $pid = 0, $rec = 1 )
{
		$arr = array( );
		$sql = "select c.*, rc.recommend_type from ".$GLOBALS['ecs']->table( "category" )." as c left join ".$GLOBALS['ecs']->table( "cat_recommend" ).( " as rc on c.cat_id = rc.cat_id where c.parent_id=".$pid." AND is_show = 1 order by c.sort_order asc, c.cat_id asc" );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $row )
		{
				if ( $row['recommend_type'] == $rec )
				{
						$arr[$row['cat_id']]['id'] = $row['cat_id'];
						$arr[$row['cat_id']]['name'] = $row['cat_name'];
						$arr[$row['cat_id']]['url'] = build_uri( "category", array(
								"cid" => $row['cat_id']
						), $row['cat_name'] );
				}
		}
		foreach ( $res as $row )
		{
				$arr2 = get_hot_cat_tree2( $row['cat_id'], $rec );
				if ( $arr2 )
				{
						$arr[$row['cat_id']]['child'] = $arr2;
				}
		}
		return $arr;
}

/**
* 获得推荐分类的子分类2
*/
function get_hot_cat_tree2( $pid = 0, $rec = 1 )
{
		$arr = array( );
		$sql = "select c.*, rc.recommend_type from ".$GLOBALS['ecs']->table( "category" )." as c left join ".$GLOBALS['ecs']->table( "cat_recommend" ).( " as rc on c.cat_id = rc.cat_id where rc.recommend_type=".$rec." and c.parent_id={$pid} AND is_show = 1 order by c.sort_order asc, c.cat_id asc" );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $row )
		{
				$arr[$row['cat_id']]['id'] = $row['cat_id'];
				$arr[$row['cat_id']]['name'] = $row['cat_name'];
				$arr[$row['cat_id']]['url'] = build_uri( "category", array(
						"cid" => $row['cat_id']
				), $row['cat_name'] );
		}
		return $arr;
}


/**
* 获得推荐分类的所有子分类
*/
function get_hot_cat_treeAll( $pid = 0, $rec = 1 )
{
	    $pids = 'c.parent_id ' . db_create_in(array_unique(array_merge(array($pid), array_keys(cat_list($pid, 0, false)))));
		
		$arr = array( );
		$sql = "select c.*, rc.recommend_type from ".$GLOBALS['ecs']->table( "category" )." as c left join ".$GLOBALS['ecs']->table( "cat_recommend" ).( " as rc on c.cat_id = rc.cat_id where rc.recommend_type=".$rec." and ".$pids." AND is_show = 1 order by c.sort_order asc, c.cat_id asc" );
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $row )
		{
				$arr[$row['cat_id']]['id'] = $row['cat_id'];
				$arr[$row['cat_id']]['name'] = $row['cat_name'];
				$arr[$row['cat_id']]['url'] = build_uri( "category", array(
						"cid" => $row['cat_id']
				), $row['cat_name'] );
		}
		return $arr;
}


/**
* 获得最新评论
*/
function get_new_comment( $type, $count )
{
		$arr = array( );
		$sql = "select c.*, g.goods_id, g.goods_thumb, g.goods_name from ".$GLOBALS['ecs']->table( "comment" )." AS c  LEFT JOIN ".$GLOBALS['ecs']->table( "goods" )." AS g ON c.id_value = g.goods_id where c.comment_type = ".$type." and c.status=1 order by c.add_time desc limit ".$count;
		$res = $GLOBALS['db']->getAll( $sql );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id_value'] = $row['id_value'];
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['comment_rank'] = $row['comment_rank'];
				$arr[$idx]['time'] = local_date( "Y-m-d", $row['add_time'] );
				$arr[$idx]['goods_id'] = $row['goods_id'];
				$arr[$idx]['goods_name'] = $row['goods_name'];
				$arr[$idx]['goods_thumb'] = get_image_path( $row['goods_id'], $row['goods_thumb'], TRUE );
				$arr[$idx]['url'] = build_uri( "goods", array(
						"gid" => $row['goods_id']
				), $row['goods_name'] );
				$arr[$idx]['user_name'] = $row['user_name'];
				
		}
		return $arr;
}

/**
* 获得指定分类文章
*/
function get_class_articles($cat_id, $num)
{
		if ( $cat_id == "-1" )
		{
				$cat_str = "cat_id > 0";
		}
		else
		{
				$cat_str = get_article_children( $cat_id );
		}
		$sql = "SELECT a.article_id, a.title, ac.cat_name, a.add_time, a.file_url, a.open_type, ac.cat_id, ac.cat_name,a.content,a.file_url,a.description FROM ".$GLOBALS['ecs']->table( "article" )." AS a, ".$GLOBALS['ecs']->table( "article_cat" )." AS ac WHERE a.is_open = 1 AND a.cat_id = ac.cat_id AND a.".$cat_str." ORDER BY a.article_type DESC, a.add_time DESC LIMIT ".$num;
		$res = $GLOBALS['db']->getAll( $sql );
		$arr = array( );
		foreach ( $res as $idx => $row )
		{
				$arr[$idx]['id'] = $row['article_id'];
				$arr[$idx]['title'] = $row['title'];
				$arr[$idx]['short_title'] = 0 < $GLOBALS['_CFG']['article_title_length'] ? sub_str( $row['title'], $GLOBALS['_CFG']['article_title_length'] ) : $row['title'];
				$arr[$idx]['cat_name'] = $row['cat_name'];
				$arr[$idx]['add_time'] = local_date( $GLOBALS['_CFG']['date_format'], $row['add_time'] );
				$arr[$idx]['url'] = build_uri( "article", array("aid" => $row['article_id']), $row['title'] );
				$arr[$idx]['cat_url'] = build_uri( "article_cat", array(
						"acid" => $row['cat_id']
				), $row['cat_name'] );
				$arr[$idx]['content'] = $row['content'];
				$arr[$idx]['file_url'] = $row['file_url'];
				$arr[$idx]['description'] = $row['description'];
		}
		return $arr;
}

/**
* 获得商品已售出数量
*/
function get_goods_ordercount( $goods_id )
{
		$sql = 'SELECT count(*) ' .
               'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS oi LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
               'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $goods_id;
        $count = $GLOBALS['db']->getOne($sql);
		return $count;
}

/**
 * 首页促销信息
 *
 * @access  public
 * @return  array
 */
function get_index_promote_info()
{
    $time = gmtime();

    $sql = 'SELECT min(promote_price) as min_promote_price,max(promote_end_date) as max_promote_end_date FROM '.$GLOBALS['ecs']->table( "goods" ).' as g ' .
            'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ' .
            " AND g.is_promote = 1 AND promote_start_date <= '$time' AND promote_end_date >= '$time' ";

    $row = $GLOBALS['db']->GetRow($sql);

    $PromoteArr = array(); 

    if($row['min_promote_price']!="" && $row['max_promote_end_date']!="")
    {
	  $row['max_promote_end_date'] = local_date("Y,m,d,H,i,s", $row['max_promote_end_date']);
    }
	else
	{
		$row['min_promote_price'] = 0;
		$row['max_promote_end_date'] = 0;
	}

    return $row;

}

/**
 * 获得指定页面的动态内容
 *
 * @access  public
 * @param   string  $tmp    模板名称
 * @return  void
 */
function get_assign_dynamic($id,$tmp='index',$type=1)
{
    $sql = 'SELECT id, number, type,sort_order FROM ' . $GLOBALS['ecs']->table('template') .
        " WHERE filename = '$tmp' AND type > 0 AND remarks ='' AND theme='" . $GLOBALS['_CFG']['template'] . "'".
		" and type='$type' and id='$id'";
    $row = $GLOBALS['db']->GetRow($sql);

    return $row;
}


/**
* 获得商品分类的顶级父类ID
*/
function get_cat_topparent($cat_id)
{
	    $parent_id="";
		$row = $GLOBALS['db']->GetRow( "SELECT parent_id FROM ".$GLOBALS['ecs']->table( "category" )." WHERE cat_id  = ".$cat_id);
		
		if($row['parent_id']==0)
		{
		   $parent_id=$cat_id;
		}
		else
		{
		  $parent_id=get_cat_topparent($row['parent_id']);
		  
		}

		return $parent_id;
}


function assign_commentex( $id, $type, $page = 1, $flag = 0,$size=0 )
{
		$comment_flag = "";
		if ( $flag==1 )
		{
			$comment_flag = " AND comment_rank > 3";
		}
		elseif ( $flag==2 )
		{
			$comment_flag = " AND comment_rank = 3";
		}
		elseif ( $flag==3 )
		{
			$comment_flag = " AND comment_rank < 3";
		}
		
		
		$count = $GLOBALS['db']->getOne( "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE id_value = '".$id."' AND comment_type = '{$type}' {$ip_address} AND status = 1 AND parent_id = 0 {$comment_flag}" ) );
		if($size==0)
		{
		   $size = !empty( $GLOBALS['_CFG']['comments_number'] ) ? $GLOBALS['_CFG']['comments_number'] : 5;
		}
		
		$page_count = 0 < $count ? intval( ceil( $count / $size ) ) : 1;
		$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE id_value = '".$id."' AND comment_type = '{$type}' {$comment_flag} AND status = 1 AND parent_id = 0" )." ORDER BY comment_id DESC";
		$res = $GLOBALS['db']->selectLimit( $sql, $size, ( $page - 1 ) * $size );
		$arr = array( );
		$ids = "";
		while ( ( $row = $GLOBALS['db']->fetchRow( $res ) ) ) // 修改 By  ecshop120.com
		{
				$ids .= $ids ? ",$row[comment_id]" : $row['comment_id'];
				$arr[$row['comment_id']]['id'] = $row['comment_id'];
				$arr[$row['comment_id']]['email'] = $row['email'];
				$arr[$row['comment_id']]['username'] = $row['user_name'];
				$arr[$row['comment_id']]['content'] = str_replace( "\\r\\n", "<br />", htmlspecialchars( $row['content'] ) );
				$arr[$row['comment_id']]['content'] = nl2br( str_replace( "\\n", "<br />", $arr[$row['comment_id']]['content'] ) );
				$arr[$row['comment_id']]['rank'] = $row['comment_rank'];
				$arr[$row['comment_id']]['add_time'] = local_date( $GLOBALS['_CFG']['time_format'], $row['add_time'] );
		}
		if ( $ids )
		{
				$sql = "SELECT * FROM ".$GLOBALS['ecs']->table( "comment" ).( " WHERE parent_id IN( ".$ids." )" );
				$res = $GLOBALS['db']->query( $sql );
				while ( $row = $GLOBALS['db']->fetch_array( $res ) )
				{
						$arr[$row['parent_id']]['re_content'] = nl2br( str_replace( "\\n", "<br />", htmlspecialchars( $row['content'] ) ) );
						$arr[$row['parent_id']]['re_add_time'] = local_date( $GLOBALS['_CFG']['time_format'], $row['add_time'] );
						$arr[$row['parent_id']]['re_email'] = $row['email'];
						$arr[$row['parent_id']]['re_username'] = $row['user_name'];
				}
		}
		$gotopage = "gotoPage";
		if ( $type == 2 )
		{
				$gotopage = "gotoPage2";
		}
		$pager['page'] = $page;
		$pager['size'] = $size;
		$pager['record_count'] = $count;
		$pager['page_count'] = $page_count;
		$pager['page_first'] = "javascript:".$gotopage.( "(1,".$id.",{$type})" );
		$pager['page_prev'] = 1 < $page ? "javascript:".$gotopage."(".( $page - 1 ).( ",".$id.",{$type})" ) : "javascript:;";
		$pager['page_next'] = $page < $page_count ? "javascript:".$gotopage."(".( $page + 1 ).( ",".$id.",{$type})" ) : "javascript:;";
		$pager['page_last'] = $page < $page_count ? "javascript:".$gotopage."(".$page_count.( ",".$id.",{$type})" ) : "javascript:;";
		$cmt = array(
				"comments" => $arr,
				"pager" => $pager
		);
		return $cmt;
}

/**
 * 获得商品的详细信息
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  void
 */
function get_goods_info2($goods_id)
{
    $time = gmtime();
    $sql = 'SELECT g.*, c.measure_unit, b.brand_id, b.brand_name AS goods_brand, m.type_money AS bonus_money, ' .
                'IFNULL(AVG(r.comment_rank), 0) AS comment_rank, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS rank_price " .
			',(select count(r.id_value) from '.$GLOBALS['ecs']->table( "comment" ).' as r where r.id_value = g.goods_id AND r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_count '.
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('category') . ' AS c ON g.cat_id = c.cat_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('brand') . ' AS b ON g.brand_id = b.brand_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('comment') . ' AS r '.
                'ON r.id_value = g.goods_id AND comment_type = 0 AND r.parent_id = 0 AND r.status = 1 ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('bonus_type') . ' AS m ' .
                "ON g.bonus_type_id = m.type_id AND m.send_start_date <= '$time' AND m.send_end_date >= '$time'" .
            " LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                    "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            "WHERE g.goods_id = '$goods_id' AND g.is_delete = 0 " .
            "GROUP BY g.goods_id";
    $row = $GLOBALS['db']->getRow($sql);

    if ($row !== false)
    {
        /* 用户评论级别取整 */
        $row['comment_rank']  = ceil($row['comment_rank']) == 0 ? number_format(5, 2, '.', '') : number_format($row['comment_rank'], 2, '.', '');
		$row['comment_rank_int']  = ceil($row['comment_rank']) == 0 ? 5 : ceil($row['comment_rank']);

        /* 获得商品的销售价格 */
        $row['market_price']        = price_format($row['market_price']);
        $row['shop_price_formated'] = price_format($row['shop_price']);

        /* 修正促销价格 */
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($promote_price != 0)
        {
            $watermark_img = "watermark_promote";
        }
        elseif ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot';
        }

        if ($watermark_img != '')
        {
            $row['watermark_img'] =  $watermark_img;
        }

        $row['promote_price_org'] =  $promote_price;
	
		$row['promote_price'] = ($promote_price > 0) ? price_format($promote_price) : '';

        /* 修正重量显示 */
        $row['goods_weight']  = (intval($row['goods_weight']) > 0) ?
            $row['goods_weight'] . $GLOBALS['_LANG']['kilogram'] :
            ($row['goods_weight'] * 1000) . $GLOBALS['_LANG']['gram'];

        /* 修正上架时间显示 */
        $row['add_time']      = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']);

        /* 促销时间倒计时 */
        $time = gmtime();
        if ($time >= $row['promote_start_date'] && $time <= $row['promote_end_date'])
        {
             $row['gmt_end_time']  = $row['promote_end_date'];
        }
        else
        {
            $row['gmt_end_time'] = 0;
        }

        /* 是否显示商品库存数量 */
        $row['goods_number']  = ($GLOBALS['_CFG']['use_storage'] == 1) ? $row['goods_number'] : '';

        /* 修正积分：转换为可使用多少积分（原来是可以使用多少钱的积分） */
        $row['integral']      = $GLOBALS['_CFG']['integral_scale'] ? round($row['integral'] * 100 / $GLOBALS['_CFG']['integral_scale']) : 0;

        /* 修正优惠券 */
        $row['bonus_money']   = ($row['bonus_money'] == 0) ? 0 : price_format($row['bonus_money'], false);

        /* 修正商品图片 */
        $row['goods_img']   = get_image_path($goods_id, $row['goods_img']);
        $row['goods_thumb'] = get_image_path($goods_id, $row['goods_thumb'], true);
		
        return $row;
    }
    else
    {
        return false;
    }
}

/**
* 获得商品收藏数量
*/
function get_goods_collectcount( $goods_id )
{
		$sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('collect_goods') .
            " WHERE goods_id = '$goods_id'";
        $count = $GLOBALS['db']->getOne($sql);
		return $count;
}


/**
 * 调用当前分类的销售排行榜
 *
 * @access  public
 * @param   string  $cats   查询的分类
 * @return  array
 */
function get_hotsell_goods($cats = '')
{
    $cats = get_children($cats);
    $where = !empty($cats) ? "AND ($cats OR " . get_extension_goods($cats) . ") " : '';

    /* 排行统计的时间 */
    switch ($GLOBALS['_CFG']['top10_time'])
    {
        case 1: // 一年
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 365 * 86400) . "'";
        break;
        case 2: // 半年
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 180 * 86400) . "'";
        break;
        case 3: // 三个月
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 90 * 86400) . "'";
        break;
        case 4: // 一个月
            $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 30 * 86400) . "'";
        break;
        default:
            $top10_time = '';
    }

    $sql = 'SELECT g.goods_id, g.goods_name, g.shop_price, g.goods_thumb, g.market_price,g.promote_start_date,g.promote_end_date ' .
	       ',(select IFNULL(sum(og.goods_number),0) from '.$GLOBALS['ecs']->table( "order_goods" ).' as og where og.goods_id = g.goods_id) AS sell_number ,(select count(c.id_value) from '.$GLOBALS['ecs']->table( "comment" ).' as c where c.id_value = g.goods_id AND c.comment_type = 0 AND c.parent_id = 0 AND c.status = 1) AS comment_count '.
           'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .

           "WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 $where $top10_time " ;
    //判断是否启用库存，库存数量是否大于0
    /*if ($GLOBALS['_CFG']['use_storage'] == 1)
    {
        $sql .= " AND g.goods_number > 0 ";
    }*/
    $sql .= 'ORDER BY sell_number DESC, g.goods_id DESC LIMIT ' . $GLOBALS['_CFG']['top_number'];

           
    $arr = $GLOBALS['db']->getAll($sql);

    for ($i = 0, $count = count($arr); $i < $count; $i++)
    {
		if ($arr[$i]['promote_price'] > 0)
        {
            $promote_price = bargain_price($arr[$i]['promote_price'], $arr[$i]['promote_start_date'], $arr[$i]['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }
		
		
        $arr[$i]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                    sub_str($arr[$i]['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $arr[$i]['goods_name'];
        $arr[$i]['url']        = build_uri('goods', array('gid' => $arr[$i]['goods_id']), $arr[$i]['goods_name']);
        $arr[$i]['thumb'] = get_image_path($arr[$i]['goods_id'], $arr[$i]['goods_thumb'],true);
        $arr[$i]['price'] = price_format($arr[$i]['shop_price']);
		$arr[$i]['market_price'] = price_format($arr[$i]['market_price']);
		$arr[$i]['promote_price'] = ($promote_price > 0) ? price_format($promote_price) : '';
    }

    return $arr;
}

/**
 * 调用当前分类的热评商品榜
 *
 * @access  public
 * @param   string  $cats   查询的分类
 * @return  array
 */
function get_hotcomment_goods($cats = '')
{
    $cats = get_children($cats);
    $where = !empty($cats) ? "AND ($cats OR " . get_extension_goods($cats) . ") " : '';

    $sql = 'SELECT g.goods_id, g.goods_name, g.shop_price, g.goods_thumb, count(g.goods_id) as comment_count,g.market_price,g.promote_start_date,g.promote_end_date ' .
           'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g, ' .
                $GLOBALS['ecs']->table('comment') . ' AS c ' .
           "WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND c.comment_type = 0 AND c.parent_id = 0 AND c.status = 1 $where " ;
    //判断是否启用库存，库存数量是否大于0
    /*if ($GLOBALS['_CFG']['use_storage'] == 1)
    {
        $sql .= " AND g.goods_number > 0 ";
    }*/
    $sql .= ' AND g.goods_id = c.id_value ' .
           'GROUP BY g.goods_id ORDER BY comment_count DESC, g.goods_id DESC LIMIT ' . $GLOBALS['_CFG']['top_number'];
	
         
    $arr = $GLOBALS['db']->getAll($sql);

    for ($i = 0, $count = count($arr); $i < $count; $i++)
    {
		if ($arr[$i]['promote_price'] > 0)
        {
            $promote_price = bargain_price($arr[$i]['promote_price'], $arr[$i]['promote_start_date'], $arr[$i]['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }
		
		
        $arr[$i]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                    sub_str($arr[$i]['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $arr[$i]['goods_name'];
        $arr[$i]['url']        = build_uri('goods', array('gid' => $arr[$i]['goods_id']), $arr[$i]['goods_name']);
        $arr[$i]['thumb'] = get_image_path($arr[$i]['goods_id'], $arr[$i]['goods_thumb'],true);
        $arr[$i]['price'] = price_format($arr[$i]['shop_price']);
		$arr[$i]['market_price'] = price_format($arr[$i]['market_price']);
		$arr[$i]['promote_price'] = ($promote_price > 0) ? price_format($promote_price) : '';
    }

    return $arr;
}


/**
 * 获得购物车中的商品
 *
 * @access  public
 * @return  array
 */
function get_cart_goods2()
{
    /* 初始化 */
    $goods_list = array();
    $total = array(
        'goods_price'  => 0, // 本店售价合计（有格式）
        'market_price' => 0, // 市场售价合计（有格式）
        'saving'       => 0, // 节省金额（有格式）
        'save_rate'    => 0, // 节省百分比
        'goods_amount' => 0, // 本店售价合计（无格式）
    );

    /* 循环、统计 */
    $sql = "SELECT *, IF(parent_id, parent_id, goods_id) AS pid " .
            " FROM " . $GLOBALS['ecs']->table('cart') . " " .
            " WHERE session_id = '" . SESS_ID . "' AND rec_type = '" . CART_GENERAL_GOODS . "'" .
            " ORDER BY pid, parent_id";
    $res = $GLOBALS['db']->query($sql);

    /* 用于统计购物车中实体商品和虚拟商品的个数 */
    $virtual_goods_count = 0;
    $real_goods_count    = 0;

    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $total['goods_price']  += $row['goods_price'] * $row['goods_number'];
        $total['market_price'] += $row['market_price'] * $row['goods_number'];

        $row['subtotal']     = price_format($row['goods_price'] * $row['goods_number'], false);
        $row['goods_price']  = price_format($row['goods_price'], false);
        $row['market_price'] = price_format($row['market_price'], false);

        /* 统计实体商品和虚拟商品的个数 */
        if ($row['is_real'])
        {
            $real_goods_count++;
        }
        else
        {
            $virtual_goods_count++;
        }

        /* 查询规格 */
        if (trim($row['goods_attr']) != '')
        {
            $sql = "SELECT attr_value FROM " . $GLOBALS['ecs']->table('goods_attr') . " WHERE goods_attr_id " .
            db_create_in($row['goods_attr']);
            $attr_list = $GLOBALS['db']->getCol($sql);
            foreach ($attr_list AS $attr)
            {
                $row['goods_name'] .= ' [' . $attr . '] ';
            }
        }
        /* 增加是否在购物车里显示商品图 */
        if (($GLOBALS['_CFG']['show_goods_in_cart'] == "2" || $GLOBALS['_CFG']['show_goods_in_cart'] == "3") && $row['extension_code'] != 'package_buy')
        {
            $goods_thumb = $GLOBALS['db']->getOne("SELECT `goods_thumb` FROM " . $GLOBALS['ecs']->table('goods') . " WHERE `goods_id`='{$row['goods_id']}'");
            $row['goods_thumb'] = get_image_path($row['goods_id'], $goods_thumb, true);
        }
        if ($row['extension_code'] == 'package_buy')
        {
            $row['package_goods_list'] = get_package_goods($row['goods_id']);
        }
        $goods_list[] = $row;
    }
    $total['goods_amount'] = $total['goods_price'];
    $total['saving']       = price_format($total['market_price'] - $total['goods_price'], false);
    if ($total['market_price'] > 0)
    {
        $total['save_rate'] = $total['market_price'] ? round(($total['market_price'] - $total['goods_price']) *
        100 / $total['market_price']).'%' : 0;
    }
    $total['goods_price']  = price_format($total['goods_price'], false);
    $total['market_price'] = price_format($total['market_price'], false);
    $total['real_goods_count']    = $real_goods_count;
    $total['virtual_goods_count'] = $virtual_goods_count;

    return array('goods_list' => $goods_list, 'total' => $total);
}

/**
 * 获得最新的文章列表。
 *
 * @access  private
 * @return  array
 */
function get_new_articles()
{
    $sql = 'SELECT a.article_id, a.title, ac.cat_name, a.add_time, a.file_url, a.open_type, ac.cat_id, ac.cat_name ' .
            ' FROM ' . $GLOBALS['ecs']->table('article') . ' AS a, ' .
                $GLOBALS['ecs']->table('article_cat') . ' AS ac' .
            ' WHERE a.is_open = 1 AND a.cat_id = ac.cat_id AND ac.cat_type = 1' .
            ' ORDER BY a.article_type DESC, a.add_time DESC LIMIT ' . $GLOBALS['_CFG']['article_number'];
    $res = $GLOBALS['db']->getAll($sql);

    $arr = array();
    foreach ($res AS $idx => $row)
    {
        $arr[$idx]['id']          = $row['article_id'];
        $arr[$idx]['title']       = $row['title'];
        $arr[$idx]['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ?
                                        sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];
        $arr[$idx]['cat_name']    = $row['cat_name'];
        $arr[$idx]['add_time']    = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']);
        $arr[$idx]['url']         = build_uri('article', array('aid' => $row['article_id']), $row['title']);
        $arr[$idx]['cat_url']     = build_uri('article_cat', array('acid' => $row['cat_id']), $row['cat_name']);
		
		$arr[$idx]['file_url'] = $row['file_url'];
    }

    return $arr;
}

/**
 * 获得指定商品的配件
 *
 * @access  public
 * @param   integer $goods_id
 * @return  array
 */
function get_group_goods2($goods_id)
{
    $sql = "SELECT g.goods_id, g.goods_name, g.shop_price, g.goods_thumb,g.market_price,g.promote_price,g.promote_start_date,g.promote_end_date " .
            "FROM " . $GLOBALS['ecs']->table('group_goods') . " AS gg, " .
                $GLOBALS['ecs']->table('goods') . " AS g " .
            "WHERE gg.parent_id = '$goods_id' " .
            "AND gg.goods_id = g.goods_id ";


    $arr = $GLOBALS['db']->getAll($sql);

    for ($i = 0, $count = count($arr); $i < $count; $i++)
    {
		if ($arr[$i]['promote_price'] > 0)
        {
            $promote_price = bargain_price($arr[$i]['promote_price'], $arr[$i]['promote_start_date'], $arr[$i]['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }
		
        $arr[$i]['short_name'] = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                    sub_str($arr[$i]['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $arr[$i]['goods_name'];
        $arr[$i]['url']        = build_uri('goods', array('gid' => $arr[$i]['goods_id']), $arr[$i]['goods_name']);
        $arr[$i]['thumb'] = get_image_path($arr[$i]['goods_id'], $arr[$i]['goods_thumb'],true);
        $arr[$i]['price'] = price_format($arr[$i]['shop_price']);
		$arr[$i]['market_price'] = price_format($arr[$i]['market_price']);
		$arr[$i]['promote_price'] = ($promote_price > 0) ? price_format($promote_price) : '';
	}
		
    return $arr;
}

/**
 * 获得分类下商品的关联文章
 */
function get_cat_linked_articles($cats='')
{
	if($cats!='')
	{
	   $cats = ' and '.get_children($cats);
	}
	
    $sql = 'select a.article_id,a.title,a.file_url,a.open_type from '.$GLOBALS['ecs']->table('goods').' as g join '.$GLOBALS['ecs']->table('goods_article').' ga on g.goods_id=ga.goods_id join '.$GLOBALS['ecs']->table('article').' as a on ga.article_id=a.article_id where g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 '.$cats.' group by a.article_id ORDER BY a.add_time DESC';
	
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $row['url']         = $row['open_type'] != 1 ?
            build_uri('article', array('aid'=>$row['article_id']), $row['title']) : trim($row['file_url']);
        $row['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ?
            sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];

        $arr[] = $row;
    }

    return $arr;

}


/**
 * 获得指定的文章的详细信息
 *
 * @access  private
 * @param   integer     $article_id
 * @return  array
 */
function get_article_info2($article_id)
{
    /* 获得文章的信息 新增cat_type qxfz.cn */
    $sql = "SELECT a.*, IFNULL(AVG(r.comment_rank), 0) AS comment_rank,c.cat_type ".
            "FROM " .$GLOBALS['ecs']->table('article'). " AS a ".
			"JOIN " .$GLOBALS['ecs']->table('article_cat'). " AS c ON c.cat_id = a.cat_id ".
            "LEFT JOIN " .$GLOBALS['ecs']->table('comment'). " AS r ON r.id_value = a.article_id AND comment_type = 1 ".
            "WHERE a.is_open = 1 AND a.article_id = '$article_id' GROUP BY a.article_id";
    $row = $GLOBALS['db']->getRow($sql);

    if ($row !== false)
    {
        $row['comment_rank'] = ceil($row['comment_rank']);                              // 用户评论级别取整
        $row['add_time']     = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']); // 修正添加时间显示

        /* 作者信息如果为空，则用网站名称替换 */
        if (empty($row['author']) || $row['author'] == '_SHOPHELP')
        {
            $row['author'] = $GLOBALS['_CFG']['shop_name'];
        }
    }

    return $row;
}

/**
 * 获得推荐商品
 *
 * @access  public
 * @param   string      $type       推荐类型，可以是 best, new, hot
 * @return  array
 */
function get_recommend_goods2($type = '', $cats = '')
{
    if (!in_array($type, array('best', 'new', 'hot')))
    {
        return array();
    }

    //取不同推荐对应的商品
    static $type_goods = array();
    if (empty($type_goods[$type]))
    {
        //初始化数据
        $type_goods['best'] = array();
        $type_goods['new'] = array();
        $type_goods['hot'] = array();
        $data = read_static_cache('recommend_goods');
        if ($data === false)
        {
            $sql = 'SELECT g.goods_id, g.is_best, g.is_new, g.is_hot, g.is_promote, b.brand_name,g.sort_order ' .
               ' FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
               ' LEFT JOIN ' . $GLOBALS['ecs']->table('brand') . ' AS b ON b.brand_id = g.brand_id ' .
               ' WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND (g.is_best = 1 OR g.is_new =1 OR g.is_hot = 1)'.
               ' ORDER BY g.sort_order, g.last_update DESC';
            $goods_res = $GLOBALS['db']->getAll($sql);
            //定义推荐,最新，热门，促销商品
            $goods_data['best'] = array();
            $goods_data['new'] = array();
            $goods_data['hot'] = array();
            $goods_data['brand'] = array();
            if (!empty($goods_res))
            {
                foreach($goods_res as $data)
                {
                    if ($data['is_best'] == 1)
                    {
                        $goods_data['best'][] = array('goods_id' => $data['goods_id'], 'sort_order' => $data['sort_order']);
                    }
                    if ($data['is_new'] == 1)
                    {
                        $goods_data['new'][] = array('goods_id' => $data['goods_id'], 'sort_order' => $data['sort_order']);
                    }
                    if ($data['is_hot'] == 1)
                    {
                        $goods_data['hot'][] = array('goods_id' => $data['goods_id'], 'sort_order' => $data['sort_order']);
                    }
                    if ($data['brand_name'] != '')
                    {
                        $goods_data['brand'][$data['goods_id']] = $data['brand_name'];
                    }
                }
            }
            write_static_cache('recommend_goods', $goods_data);
        }
        else
        {
            $goods_data = $data;
        }

        $time = gmtime();
        $order_type = $GLOBALS['_CFG']['recommend_order'];

        //按推荐数量及排序取每一项推荐显示的商品 order_type可以根据后台设定进行各种条件显示
        static $type_array = array();
        $type2lib = array('best'=>'recommend_best', 'new'=>'recommend_new', 'hot'=>'recommend_hot');
        if (empty($type_array))
        {
            foreach($type2lib as $key => $data)
            {
                if (!empty($goods_data[$key]))
                {
                    $num = get_library_number($data);
                    $data_count = count($goods_data[$key]);
                    $num = $data_count > $num  ? $num : $data_count;
                    if ($order_type == 0)
                    {
                        //usort($goods_data[$key], 'goods_sort');
                        $rand_key = array_slice($goods_data[$key], 0, $num);
                        foreach($rand_key as $key_data)
                        {
                            $type_array[$key][] = $key_data['goods_id'];
                        }
                    }
                    else
                    {
                        $rand_key = array_rand($goods_data[$key], $num);
                        if ($num == 1)
                        {
                            $type_array[$key][] = $goods_data[$key][$rand_key]['goods_id'];
                        }
                        else
                        {
                            foreach($rand_key as $key_data)
                            {
                                $type_array[$key][] = $goods_data[$key][$key_data]['goods_id'];
                            }
                        }
                    }
                }
                else
                {
                    $type_array[$key] = array();
                }
            }
        }

        //取出所有符合条件的商品数据，并将结果存入对应的推荐类型数组中
        $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                "promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_thumb2, g.goods_img, RAND() AS rnd " .
				",(select count(r.id_value) from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = g.goods_id and r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_count ".
                'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
                "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ";
        $type_merge = array_merge($type_array['new'], $type_array['best'], $type_array['hot']);
        $type_merge = array_unique($type_merge);
        $sql .= ' WHERE g.goods_id ' . db_create_in($type_merge);
        $sql .= ' ORDER BY g.sort_order, g.last_update DESC';

        $result = $GLOBALS['db']->getAll($sql);
        foreach ($result AS $idx => $row)
        {
            if ($row['promote_price'] > 0)
            {
                $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
                $goods[$idx]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
            }
            else
            {
                $goods[$idx]['promote_price'] = '';
            }

            $goods[$idx]['id']           = $row['goods_id'];
            $goods[$idx]['name']         = $row['goods_name'];
            $goods[$idx]['brief']        = $row['goods_brief'];
            $goods[$idx]['brand_name']   = isset($goods_data['brand'][$row['goods_id']]) ? $goods_data['brand'][$row['goods_id']] : '';
            $goods[$idx]['goods_style_name']   = add_style($row['goods_name'],$row['goods_name_style']);

            $goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                               sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
            $goods[$idx]['short_style_name']   = add_style($goods[$idx]['short_name'],$row['goods_name_style']);
            $goods[$idx]['market_price'] = price_format($row['market_price']);
            $goods[$idx]['shop_price']   = price_format($row['shop_price']);
            $goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
			$goods[$idx]['thumb2']        = $row['goods_thumb2'];
            $goods[$idx]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
            $goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);
			
			$goods[$idx]['comment_count'] = $row['comment_count']; 
			
            if (in_array($row['goods_id'], $type_array['best']))
            {
                $type_goods['best'][] = $goods[$idx];
            }
            if (in_array($row['goods_id'], $type_array['new']))
            {
                $type_goods['new'][] = $goods[$idx];
            }
            if (in_array($row['goods_id'], $type_array['hot']))
            {
                $type_goods['hot'][] = $goods[$idx];
            }
			
        }
    }
    return $type_goods[$type];
}

/**
 * 获得促销商品
 *
 * @access  public
 * @return  array
 */
function get_promote_goods2($cats = '')
{
    $time = gmtime();
    $order_type = $GLOBALS['_CFG']['recommend_order'];

    /* 取得促销lbi的数量限制 */
    $num = get_library_number("recommend_promotion");
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.shop_price AS org_price, g.promote_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                "promote_start_date, promote_end_date, g.goods_brief, g.goods_thumb, g.goods_thumb2, goods_img, b.brand_name, " .
                "g.is_best, g.is_new, g.is_hot, g.is_promote, RAND() AS rnd " .
				",(select count(r.id_value) from ".$GLOBALS['ecs']->table( "comment" )." as r where r.id_value = g.goods_id and r.comment_type = 0 AND r.parent_id = 0 AND r.status = 1) AS comment_count ".
            'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('brand') . ' AS b ON b.brand_id = g.brand_id ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            'WHERE g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ' .
            " AND g.is_promote = 1 AND promote_start_date <= '$time' AND promote_end_date >= '$time' ";
    $sql .= $order_type == 0 ? ' ORDER BY g.sort_order, g.last_update DESC' : ' ORDER BY rnd';
    $sql .= " LIMIT $num ";
    $result = $GLOBALS['db']->getAll($sql);

    $goods = array();
    foreach ($result AS $idx => $row)
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $goods[$idx]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
        }
        else
        {
            $goods[$idx]['promote_price'] = '';
        }

        $goods[$idx]['id']           = $row['goods_id'];
        $goods[$idx]['name']         = $row['goods_name'];
        $goods[$idx]['brief']        = $row['goods_brief'];
        $goods[$idx]['brand_name']   = $row['brand_name'];
        $goods[$idx]['goods_style_name']   = add_style($row['goods_name'],$row['goods_name_style']);
        $goods[$idx]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $goods[$idx]['short_style_name']   = add_style($goods[$idx]['short_name'],$row['goods_name_style']);
        $goods[$idx]['market_price'] = price_format($row['market_price']);
        $goods[$idx]['shop_price']   = price_format($row['shop_price']);
        $goods[$idx]['thumb']        = get_image_path($row['goods_id'], $row['goods_thumb'], true);
		$goods[$idx]['thumb2']        = get_image_path($row['goods_id'], $row['goods_thumb2'], true);
        $goods[$idx]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
        $goods[$idx]['url']          = build_uri('goods', array('gid' => $row['goods_id']), $row['goods_name']);
		
		$goods[$idx]['comment_count'] = $row['comment_count']; 
    }

    return $goods;
}

/**
 * 分配帮助信息
 *
 * @access  public
 * @return  array
 */
function get_shop_help2()
{
    $sql = 'SELECT c.cat_id, c.cat_name, c.sort_order, a.article_id, a.title, a.file_url, a.open_type ' .
            'FROM ' .$GLOBALS['ecs']->table('article'). ' AS a ' .
            'LEFT JOIN ' .$GLOBALS['ecs']->table('article_cat'). ' AS c ' .
            'ON a.cat_id = c.cat_id WHERE c.cat_type = 5 AND a.is_open = 1 ' .
            'ORDER BY c.sort_order ASC, a.article_id';
    $res = $GLOBALS['db']->getAll($sql);

    $arr = array();
    foreach ($res AS $key => $row)
    {
        $arr[$row['cat_id']]['cat_id']                       = build_uri('article_cat', array('acid'=> $row['cat_id']), $row['cat_name']);
        $arr[$row['cat_id']]['cat_name']                     = $row['cat_name'];
        $arr[$row['cat_id']]['article'][$key]['article_id']  = $row['article_id'];
        $arr[$row['cat_id']]['article'][$key]['title']       = $row['title'];
        $arr[$row['cat_id']]['article'][$key]['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ?
            sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];
        $arr[$row['cat_id']]['article'][$key]['url']         = $row['open_type'] != 1 ?
            build_uri('article', array('aid' => $row['article_id']), $row['title']) : trim($row['file_url']);
			
		$arr[$row['cat_id']]['cat_id2'] = $row['cat_id'];
    }

    return $arr;
}

/**
 * 获得指定分类下的推荐商品
 *
 * @access  public
 * @param   string      $type       推荐类型，可以是 best, new, hot, promote
 * @param   string      $cats       分类的ID
 * @param   integer     $min        商品积分下限
 * @param   integer     $max        商品积分上限
 * @param   string      $ext        商品扩展查询
 * @return  array
 */
function get_exchange_recommend_goods2($type = '', $cats = '', $min =0,  $max = 0, $ext='')
{
    $price_where = ($min > 0) ? " AND g.shop_price >= $min " : '';
    $price_where .= ($max > 0) ? " AND g.shop_price <= $max " : '';

    $sql =  'SELECT g.goods_id, g.goods_name, g.goods_name_style, eg.exchange_integral, ' .
                'g.goods_brief, g.goods_thumb, goods_img, b.brand_name, g.market_price, g.shop_price, g.promote_price ' .
            'FROM ' . $GLOBALS['ecs']->table('exchange_goods') . ' AS eg ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = eg.goods_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('brand') . ' AS b ON b.brand_id = g.brand_id ' .
            'WHERE eg.is_exchange = 1 AND g.is_delete = 0 ' . $price_where . $ext;
    $num = 0;
    $type2lib = array('best'=>'exchange_best', 'new'=>'exchange_new', 'hot'=>'exchange_hot');
    $num = get_library_number($type2lib[$type], 'exchange_list');

    switch ($type)
    {
        case 'best':
            $sql .= ' AND eg.is_best = 1';
            break;
        case 'new':
            $sql .= ' AND eg.is_new = 1';
            break;
        case 'hot':
            $sql .= ' AND eg.is_hot = 1';
            break;
    }

    if (!empty($cats))
    {
        $sql .= " AND (" . $cats . " OR " . get_extension_goods($cats) .")";
    }
    $order_type = $GLOBALS['_CFG']['recommend_order'];
    $sql .= ($order_type == 0) ? ' ORDER BY g.sort_order, g.last_update DESC' : ' ORDER BY RAND()';
    $res = $GLOBALS['db']->selectLimit($sql, $num);

    $idx = 0;
    $goods = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $goods[$idx]['promote_price'] = $promote_price > 0 ? price_format($promote_price) : '';
        }
        else
        {
            $goods[$idx]['promote_price'] = '';
        }
		
        $goods[$idx]['id']                = $row['goods_id'];
        $goods[$idx]['name']              = $row['goods_name'];
        $goods[$idx]['brief']             = $row['goods_brief'];
        $goods[$idx]['brand_name']        = $row['brand_name'];
        $goods[$idx]['short_name']        = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
                                                sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $goods[$idx]['exchange_integral'] = $row['exchange_integral'];
        $goods[$idx]['thumb']             = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $goods[$idx]['goods_img']         = get_image_path($row['goods_id'], $row['goods_img']);
        $goods[$idx]['url']               = build_uri('exchange_goods', array('gid' => $row['goods_id']), $row['goods_name']);

        $goods[$idx]['short_style_name']  = add_style($goods[$idx]['short_name'], $row['goods_name_style']);
		
		$goods[$idx]['market_price'] = price_format($row['market_price']);
        $goods[$idx]['shop_price']   = price_format($row['shop_price']);
		
        $idx++;
    }

    return $goods;
}


/**
 * 获得购买过该商品的人还买过的商品
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function get_also_bought2($goods_id)
{
    $sql = 'SELECT COUNT(b.goods_id ) AS num, g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price, g.promote_price, g.promote_start_date, g.promote_end_date,g.market_price ' .
            'FROM ' . $GLOBALS['ecs']->table('order_goods') . ' AS a ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('order_goods') . ' AS b ON b.order_id = a.order_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = b.goods_id ' .
            "WHERE a.goods_id = '$goods_id' AND b.goods_id <> '$goods_id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 " .
            'GROUP BY b.goods_id ' .
            'ORDER BY num DESC ' .
            'LIMIT ' . $GLOBALS['_CFG']['bought_goods'];
    $res = $GLOBALS['db']->query($sql);

    $key = 0;
    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$key]['goods_id']    = $row['goods_id'];
        $arr[$key]['goods_name']  = $row['goods_name'];
        $arr[$key]['short_name']  = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
            sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $arr[$key]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$key]['goods_img']   = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$key]['shop_price']  = price_format($row['shop_price']);
        $arr[$key]['url']         = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);

        if ($row['promote_price'] > 0)
        {
            $arr[$key]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $arr[$key]['formated_promote_price'] = price_format($arr[$key]['promote_price']);
        }
        else
        {
            $arr[$key]['promote_price'] = 0;
        }
		
		$arr[$key]['market_price']  = price_format($row['market_price']);

        $key++;
    }

    return $arr;
}

/**
 * 取得团购活动信息
 * @param   int     $group_buy_id   团购活动id
 * @param   int     $current_num    本次购买数量（计算当前价时要加上的数量）
 * @return  array
 *                  status          状态：
 */
function group_buy_info2($goods_id, $current_num = 0)
{
	$now = gmtime();
	
    /* 取得团购活动信息 */
    $group_buy_id = intval($group_buy_id);
    $sql = "SELECT *, act_id AS group_buy_id, act_desc AS group_buy_desc, start_time AS start_date, end_time AS end_date " .
            "FROM " . $GLOBALS['ecs']->table('goods_activity') .
            "WHERE goods_id = '$goods_id' AND start_time <= '$now' and end_time >= '$now' AND is_finished = 0 " .
            "AND act_type = '" . GAT_GROUP_BUY . "'";
    $group_buy = $GLOBALS['db']->getRow($sql);

    /* 如果为空，返回空数组 */
    if (empty($group_buy))
    {
        return array();
    }

    $ext_info = unserialize($group_buy['ext_info']);
    $group_buy = array_merge($group_buy, $ext_info);

    /* 格式化时间 */
    $group_buy['formated_start_date'] = local_date('Y-m-d H:i', $group_buy['start_time']);
    $group_buy['formated_end_date'] = local_date('Y-m-d H:i', $group_buy['end_time']);

    /* 格式化保证金 */
    $group_buy['formated_deposit'] = price_format($group_buy['deposit'], false);

    /* 处理价格阶梯 */
    $price_ladder = $group_buy['price_ladder'];
    if (!is_array($price_ladder) || empty($price_ladder))
    {
        $price_ladder = array(array('amount' => 0, 'price' => 0));
    }
    else
    {
        foreach ($price_ladder as $key => $amount_price)
        {
            $price_ladder[$key]['formated_price'] = price_format($amount_price['price'], false);
        }
    }
    $group_buy['price_ladder'] = $price_ladder;

    /* 统计信息 */
    $stat = group_buy_stat($group_buy_id, $group_buy['deposit']);
    $group_buy = array_merge($group_buy, $stat);

    /* 计算当前价 */
    $cur_price  = $price_ladder[0]['price']; // 初始化
    $cur_amount = $stat['valid_goods'] + $current_num; // 当前数量
    foreach ($price_ladder as $amount_price)
    {
        if ($cur_amount >= $amount_price['amount'])
        {
            $cur_price = $amount_price['price'];
        }
        else
        {
            break;
        }
    }
    $group_buy['cur_price'] = $cur_price;
    $group_buy['formated_cur_price'] = price_format($cur_price, false);

    /* 最终价 */
    $group_buy['trans_price'] = $group_buy['cur_price'];
    $group_buy['formated_trans_price'] = $group_buy['formated_cur_price'];
    $group_buy['trans_amount'] = $group_buy['valid_goods'];

    /* 状态 */
    $group_buy['status'] = group_buy_status($group_buy);
    if (isset($GLOBALS['_LANG']['gbs'][$group_buy['status']]))
    {
        $group_buy['status_desc'] = $GLOBALS['_LANG']['gbs'][$group_buy['status']];
    }

    $group_buy['start_time'] = $group_buy['formated_start_date'];
    $group_buy['end_time'] = $group_buy['formated_end_date'];

    return $group_buy;
}

/**
 * 取得某页的所有团购活动
 * @param   int     $size   每页记录数
 * @param   int     $page   当前页
 * @return  array
 */
function group_buy_list2()
{
    /* 取得团购活动 */
    $gb_list = array();
    $now = gmtime();
    $sql = "SELECT b.*, IFNULL(g.goods_thumb, '') AS goods_thumb, b.act_id AS group_buy_id, ".
                "b.start_time AS start_date, b.end_time AS end_date,g.market_price,g.goods_id,g.goods_name " .
	       ',(select IFNULL(sum(og.goods_number),0) from '.$GLOBALS['ecs']->table( "order_goods" ).' as og where og.goods_id = g.goods_id) AS sell_number '.
            "FROM " . $GLOBALS['ecs']->table('goods_activity') . " AS b " .
                "LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON b.goods_id = g.goods_id " .
            "WHERE b.act_type = '" . GAT_GROUP_BUY . "' " .
            "AND b.start_time <= '$now' AND b.is_finished < 3 ORDER BY b.act_id DESC";
    $res = $GLOBALS['db']->query($sql);
    while ($group_buy = $GLOBALS['db']->fetchRow($res))
    {
        $ext_info = unserialize($group_buy['ext_info']);
        $group_buy = array_merge($group_buy, $ext_info);

        /* 格式化时间 */
        $group_buy['formated_start_date']   = local_date($GLOBALS['_CFG']['time_format'], $group_buy['start_date']);
        $group_buy['formated_end_date']     = local_date($GLOBALS['_CFG']['time_format'], $group_buy['end_date']);


        /* 格式化保证金 */
        $group_buy['formated_deposit'] = price_format($group_buy['deposit'], false);


            /* 根据价格阶梯，计算最低价 qxfz.cn*/
            $price_ladder = $ext_info['price_ladder'];
            if (!is_array($price_ladder) || empty($price_ladder))
            {
                $group_buy['last_price'] = price_format(0);
            }
            else
            {
                foreach ($price_ladder AS $amount_price)
                {
                    $price_ladder[$amount_price['amount']] = $amount_price['price'];
                }
            }
        ksort($price_ladder);
		$group_buy['last_price'] = price_format(end($price_ladder));
		
		

        /* 处理图片 */
        if (empty($group_buy['goods_thumb']))
        {
            $group_buy['goods_thumb'] = get_image_path($group_buy['goods_id'], $group_buy['goods_thumb'], true);
        }
        /* 处理链接 */
        $group_buy['url'] = build_uri('group_buy', array('gbid'=>$group_buy['group_buy_id']));
		
		$group_buy['market_price'] = price_format($group_buy['market_price']);   
        $group_buy['gurl'] = build_uri( "goods", array("gid" => $group_buy['goods_id']), $group_buy['goods_name'] );
		$group_buy['Discount'] = intval($group_buy['last_price']/$group_buy['market_price']*10);  //折扣
		
        /* 加入数组 */
        $gb_list[] = $group_buy;
    }

    return $gb_list;
}

/**
 *  所有的促销活动信息
 *
 * @access  public
 * @return  array
 */
function get_promotion_info2($goods_id = '')
{
    $snatch = array();
    $group = array();
    $auction = array();
    $package = array();
    $favourable = array();

    $gmtime = gmtime();
    $sql = 'SELECT act_id, act_name, act_type, start_time, end_time FROM ' . $GLOBALS['ecs']->table('goods_activity') . " WHERE is_finished=0 AND start_time <= '$gmtime' AND end_time >= '$gmtime'";
    if(!empty($goods_id))
    {
        $sql .= " AND goods_id = '$goods_id'";
    }
    $res = $GLOBALS['db']->getAll($sql);
    foreach ($res as $data)
    {
        switch ($data['act_type'])
        {
            case GAT_SNATCH: //夺宝奇兵
                $snatch[$data['act_id']]['act_name'] = $data['act_name'];
                $snatch[$data['act_id']]['url'] = build_uri('snatch', array('sid' => $data['act_id']));
                $snatch[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $snatch[$data['act_id']]['sort'] = $data['start_time'];
                $snatch[$data['act_id']]['type'] = 'snatch';
                break;

            case GAT_GROUP_BUY: //团购
                $group[$data['act_id']]['act_name'] = $data['act_name'];
                $group[$data['act_id']]['url'] = build_uri('group_buy', array('gbid' => $data['act_id']));
                $group[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $group[$data['act_id']]['sort'] = $data['start_time'];
                $group[$data['act_id']]['type'] = 'group_buy';
                break;

            case GAT_AUCTION: //拍卖
                $auction[$data['act_id']]['act_name'] = $data['act_name'];
                $auction[$data['act_id']]['url'] = build_uri('auction', array('auid' => $data['act_id']));
                $auction[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $auction[$data['act_id']]['sort'] = $data['start_time'];
                $auction[$data['act_id']]['type'] = 'auction';
                break;

            case GAT_PACKAGE: //礼包
                $package[$data['act_id']]['act_name'] = $data['act_name'];
                $package[$data['act_id']]['url'] = 'package.php#' . $data['act_id'];
                $package[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $package[$data['act_id']]['sort'] = $data['start_time'];
                $package[$data['act_id']]['type'] = 'package';
                break;
        }
    }

    $user_rank = ',' . $_SESSION['user_rank'] . ',';
    $favourable = array();
    $sql = 'SELECT act_id, act_range, act_range_ext, act_name, start_time, end_time FROM ' . $GLOBALS['ecs']->table('favourable_activity') . " WHERE start_time <= '$gmtime' AND end_time >= '$gmtime'";
    if(!empty($goods_id))
    {
        $sql .= " AND CONCAT(',', user_rank, ',') LIKE '%" . $user_rank . "%'";
    }
    $res = $GLOBALS['db']->getAll($sql);

    if(empty($goods_id))
    {
        foreach ($res as $rows)
        {
            $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
            $favourable[$rows['act_id']]['url'] = 'activity.php';
            $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
            $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
            $favourable[$rows['act_id']]['type'] = 'favourable';
        }
    }
    else
    {
        $sql = "SELECT cat_id, brand_id FROM " . $GLOBALS['ecs']->table('goods') .
           "WHERE goods_id = '$goods_id'";
        $row = $GLOBALS['db']->getRow($sql);
        $category_id = $row['cat_id'];
        $brand_id = $row['brand_id'];

        foreach ($res as $rows)
        {
            if ($rows['act_range'] == FAR_ALL)
            {
                $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                $favourable[$rows['act_id']]['url'] = 'activity.php';
                $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                $favourable[$rows['act_id']]['type'] = 'favourable';
            }
            elseif ($rows['act_range'] == FAR_CATEGORY)
            {
                /* 找出分类id的子分类id */
                $id_list = array();
                $raw_id_list = explode(',', $rows['act_range_ext']);
                foreach ($raw_id_list as $id)
                {
                    $id_list = array_merge($id_list, array_keys(cat_list($id, 0, false)));
                }
                $ids = join(',', array_unique($id_list));

                if (strpos(',' . $ids . ',', ',' . $category_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
            elseif ($rows['act_range'] == FAR_BRAND)
            {
                if (strpos(',' . $rows['act_range_ext'] . ',', ',' . $brand_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
            elseif ($rows['act_range'] == FAR_GOODS)
            {
                if (strpos(',' . $rows['act_range_ext'] . ',', ',' . $goods_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
        }
    }

//    if(!empty($goods_id))
//    {
//        return array('snatch'=>$snatch, 'group_buy'=>$group, 'auction'=>$auction, 'favourable'=>$favourable);
//    }

    $sort_time = array();
    $arr = array_merge($favourable);   //只取优惠活动
    foreach($arr as $key => $value)
    {
        $sort_time[] = $value['sort'];
    }
    array_multisort($sort_time, SORT_NUMERIC, SORT_DESC, $arr);

    return $arr;
}

/**
 * 取得商品信息
 * @param   int     $goods_id   商品id
 * @return  array
 */
function goods_info2($goods_id)
{
    $sql = "SELECT g.*, b.brand_name " .
            "FROM " . $GLOBALS['ecs']->table('goods') . " AS g " .
                "LEFT JOIN " . $GLOBALS['ecs']->table('brand') . " AS b ON g.brand_id = b.brand_id " .
            "WHERE g.goods_id = '$goods_id'";
    $row = $GLOBALS['db']->getRow($sql);
    if (!empty($row))
    {
        /* 修正重量显示 */
        $row['goods_weight'] = (intval($row['goods_weight']) > 0) ?
            $row['goods_weight'] . $GLOBALS['_LANG']['kilogram'] :
            ($row['goods_weight'] * 1000) . $GLOBALS['_LANG']['gram'];

        /* 修正图片 */
        $row['goods_img'] = get_image_path($goods_id, $row['goods_img']);
		
		$row['market_price'] = price_format($row['market_price']);   
    }

    return $row;
}

?>