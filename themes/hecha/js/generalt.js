/* $Id : common.js 4865 2007-01-31 14:04:10Z paulgao $ */

var ajax;
var as;
var nowgoodid
var doitemnum

function getajax(){
	try{
	   ajax = new ActiveXObject("Microsoft.XMLHTTP");
	   as = 1;
	}catch(e){
	   try{
		ajax = new ActiveXObject("Msxml2.XMLHTTP");
		as = 1;
	   }catch(e){
		try{
		 ajax = new XMLHttpRequest();
		 as = 2;
		}catch(e){
		 ajax = null;
		 as = 0;
		}
	   }
	}
}

function doXMLHTTP(method, url, pars, runfunc){
	getajax();
	if(as == 0){
	   alert("您的浏览器不支持XMLHTTP，无法完成此操作");
	}else{
	   ajax.open(method, url, true);
	   if(method == "POST"){
		ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	   }else{
		ajax.setRequestHeader("Content-Type", "text/xml;charset=utf-8");
	   }
	   if(as == 1){
		ajax.onreadystatechange = runfunc;
	   }else{
		ajax.onload = runfunc;
		ajax.onerror = runfunc;
	   }
	   ajax.send(pars);
	}
}

function doShow(){
	var htmlcode;
	if(as == 1){
	   if(ajax.readyState == 4){
		htmlcode = ajax.responseText;
		dogetstr(htmlcode)
	   }
	}else{
	   htmlcode = ajax.responseText;
	   dogetstr(htmlcode)
	}
	
}

/* *
 * 添加商品到购物车
 */
function addToCart(goodsId, parentId, uidallow, fromother, activities_id, is_mother, child_good_id, goods_number_new)
{
  /*
  if( uidallow != 77 && uidallow != 4 && uidallow != 5 && uidallow != 24 && uidallow != 51 && uidallow != 1 && uidallow != 91 && uidallow != 114 && uidallow != 116 && uidallow != 85 && uidallow != 14 && uidallow != 119 && uidallow != 121 && uidallow != 128 && uidallow != 129 && uidallow != 132 && uidallow != 107 && uidallow != 135 && uidallow != 7 && uidallow != 191 && uidallow != 192 && uidallow != 197 && uidallow != 49 && uidallow != 203 && uidallow != 222 && uidallow != 227 && uidallow != 230 && uidallow != 231 && uidallow != 273 && uidallow != 284 && uidallow != 260 && uidallow != 310 && uidallow != 312 && uidallow != 298 && uidallow != 323 && uidallow != 329 )
  {
	  alert('本商品暂时缺货，请输入你的E-mail地址，商品到货时，我们将第一时间通知您！');
	  var str = window.prompt("请输入E-mail地址","");
	  if (str)
	  {
	      if  (! Utils.isEmail(str))
	      {
	          alert('您输入的E-mail地址有误！');
	      }
	      else
	      {
	          Ajax.call('/cart.php?step=add_email', 'email=' + str, add_email_response, 'POST', 'JSON');
	      };
	  };
  	  return;
  }
  */
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  var number       = 1;
  var formBuy      = document.forms['ECS_FORMBUY'];

  // 检查是否有商品规格
  if (formBuy)
  {
    spec_arr = getSelectedAttributes(formBuy);

    if (formBuy.elements['number'])
    {
      number = formBuy.elements['number'].value;
    }
  }

  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.activities_id         = (typeof(activities_id) == "undefined") ? 0 : activities_id;
  goods.is_mother         = (typeof(is_mother) == "undefined") ? 0 : is_mother;
  goods.child_good_id   = child_good_id;
  
  if( goods_number_new >= 1 ) goods.number = goods_number_new;
  
  goods.sendstr	 = '{"spec":['+goods.spec+'],"goods_id":'+goods.goods_id+',"number":'+goods.number+',"parent":'+goods.parent+',"activities_id":'+goods.activities_id+',"is_mother":'+goods.is_mother+',"child_good_id":'+goods.child_good_id+'}';
	
  doXMLHTTP("POST", 'cartt.php?step=add_to_cart', 'goods=' + goods.sendstr, doShow);
 // Ajax.call('/cart.php?step=add_to_cart', 'goods=' + goods.toJSONString(), addToCartResponse, 'POST', 'JSON');
}

function doShow(){
	var htmlcode;
	if(as == 1){
	   if(ajax.readyState == 4){
		htmlcode = ajax.responseText;
		addToCartResponse(htmlcode)
	   }
	}else{
	   htmlcode = ajax.responseText;
	   addToCartResponse(htmlcode)
	}
	
}

function collect_doShow(){
	var htmlcode;
	if(as == 1){
	   if(ajax.readyState == 4){
		htmlcode = ajax.responseText;
		collectResponse(htmlcode)
	   }
	}else{
	   htmlcode = ajax.responseText;
	   collectResponse(htmlcode)
	}
}

function dogetstr(dealstr)
{
	document.write(dealstr)
}

function add_email_response(result)
{
   //if (result.error == 1 )
   //{
       alert('保存成功！商品到货时，我们将第一时间通知您！');
   //}
  // else
   //{
       //alert('保存不成功！');
   //};
}

/* liny 于2008-09-03 */
/* *
 * 添加商品到购物车
 */
function addToCart_new(goodsId, number, parentId, doitem, fromother, activities_id, is_mother, child_good_id)
{
  var goods        = new Object();
  var spec_arr     = new Array();
  var fittings_arr = new Array();
  
  doitemnum		   = doitem

  goods.spec     = spec_arr;
  goods.goods_id = goodsId;
  goods.number   = number;
  goods.parent   = (typeof(parentId) == "undefined") ? 0 : parseInt(parentId);
  goods.activities_id         = (typeof(activities_id) == "undefined") ? 0 : activities_id;
  goods.is_mother         = (typeof(is_mother) == "undefined") ? 0 : is_mother;
  goods.child_good_id   = child_good_id;
  
  goods.sendstr	 = '{"spec":['+goods.spec+'],"goods_id":'+goods.goods_id+',"number":'+goods.number+',"parent":'+goods.parent+',"activities_id":'+goods.activities_id+',"is_mother":'+goods.is_mother+',"child_good_id":'+goods.child_good_id+'}';
	
  doXMLHTTP("POST", '/cartt.php?step=add_to_cart', 'goods=' + goods.sendstr, doShow);
}
/* liny 于2008-09-03 */

/**
 * 获得选定的商品属性
 */
function getSelectedAttributes(formBuy)
{
  var spec_arr = new Array();
  var j = 0;

  for (i = 0; i < formBuy.elements.length; i ++ )
  {
    var prefix = formBuy.elements[i].name.substr(0, 5);

    if (prefix == 'spec_' && (
      (formBuy.elements[i].type == 'radio' && formBuy.elements[i].checked) ||
      formBuy.elements[i].tagName == 'SELECT'))
    {
      spec_arr[j] = formBuy.elements[i].value;
      j++ ;
    }
  }

  return spec_arr;
}

//缺货登记
function no_goods_register()
{
	  alert('本商品暂时缺货，请输入你的E-mail地址，商品到货时，我们将第一时间通知您！');
	  var str = window.prompt("请输入E-mail地址","");
	  if (str)
	  {
	      if  (! Utils.isEmail(str))
	      {
	          alert('您输入的E-mail地址有误！');
	      }
	      else
	      {
	         // Ajax.call('/cart.php?step=add_email', 'email=' + str, add_email_response, 'POST', 'JSON');
			 doXMLHTTP("POST", '/cart.php?step=add_email', 'email=' + str, doShow_email);
	      };
	  };
  	  return;
}

function doShow_email(){
	var htmlcode;
	if(as == 1){
	   if(ajax.readyState == 4){
		htmlcode = ajax.responseText;
		add_email_response(htmlcode)
	   }
	}else{
	   htmlcode = ajax.responseText;
	   add_email_response(htmlcode)
	}
	
}

/* *
 * 处理添加商品到购物车的反馈信息
 */
function addToCartResponse(dealstr, cart_step)
{
	cartdoarray	= dealstr.split(',');

rerror	= cartdoarray[0]
rerrorarray	= rerror.split(":")
rerror	= rerrorarray[1]
rerror	= rerror.replace('{','')
rerror	= rerror.replace('}','')
rerror	= rerror.replace('"','')
rerror	= rerror.replace('"','')

message	= cartdoarray[1]
messagearray	= message.split(":")
message	= messagearray[1]
message	= message.replace('"','')
message	= message.replace('"','')
message	= message.replace('{','')
message	= message.replace('}','')

content	= cartdoarray[2]
contentarray	= content.split(":")
content	= contentarray[1]
content	= content.replace('"','')
content	= content.replace('"','')
content	= content.replace('{','')
content	= content.replace('}','')

goods_id	= cartdoarray[3]
goods_idarray	= goods_id.split(":")
goods_id	= goods_idarray[1]
goods_id	= goods_id.replace('"','')
goods_id	= goods_id.replace('"','')
goods_id	= goods_id.replace('{','')
goods_id	= goods_id.replace('}','')

one_step_buy	= cartdoarray[4]
one_step_buyarray	= one_step_buy.split(":")
one_step_buy	= one_step_buyarray[1]
one_step_buy	= one_step_buy.replace('"','')
one_step_buy	= one_step_buy.replace('"','')
one_step_buy	= one_step_buy.replace('{','')
one_step_buy	= one_step_buy.replace('}','')

now_goods_number	= cartdoarray[5]
now_goods_numberarray	= now_goods_number.split(":")
now_goods_number	= now_goods_numberarray[1]
now_goods_number	= now_goods_number.replace('"','')
now_goods_number	= now_goods_number.replace('"','')
now_goods_number	= now_goods_number.replace('{','')
now_goods_number	= now_goods_number.replace('}','')

select_goods_number	= cartdoarray[6]
select_goods_numberarray	= select_goods_number.split(":")
select_goods_number	= select_goods_numberarray[1]
select_goods_number	= select_goods_number.replace('"','')
select_goods_number	= select_goods_number.replace('"','')
select_goods_number	= select_goods_number.replace('{','')
select_goods_number	= select_goods_number.replace('}','')

confirm_type	= cartdoarray[7]
confirm_typearray	= confirm_type.split(":")
confirm_type	= confirm_typearray[1]
confirm_type	= confirm_type.replace('"','')
confirm_type	= confirm_type.replace('"','')
confirm_type	= confirm_type.replace('{','')
confirm_type	= confirm_type.replace('}','')

if (rerror > 0)
  {
    
	// 如果需要缺货登记，跳转
    if (rerror == 2)
    {
      //if (confirm(message))
      //{
        //location.href = 'user_manage.php?act=add_booking&id=' + result.goods_id;
      //}
	  if( now_goods_number > 0  )
	 	 alert( '对不起，本商品库存有限，您最多只能购买'+now_goods_number+'件，若需购买更多，请拨打4008899379，我们将尽量为您调货' );
	  else
	  	 alert('对不起，本商品已经缺货，如需购买请拨打4008899379，我们将尽量为您调货。');
	  document.getElementById("goods_number_"+doitemnum).value = now_goods_number
	  document.getElementById("goods_number_"+doitemnum).focus()
	  return false;
    }
    // 没选规格，跳到商品详情页
    else if (rerror == 6)
    {
      if (confirm(message))
      {
        location.href = 'sgoods.php?id=' + goods_id;
      }
    }
	else if (rerror == 7)
    {
      alert('为了让更多人享受到特价商品，每人限'+now_goods_number+'件，请见谅！');
	  document.getElementById("goods_number_"+doitemnum).value = now_goods_number
	  document.getElementById("goods_number_"+doitemnum).focus()
	  return false;
    }
	else if (rerror == 8)
    {
      alert('对不起，此商品以当前价位最多还允许购买'+now_goods_number+'件！');
	  document.getElementById("goods_number_"+doitemnum).value = now_goods_number
	  document.getElementById("goods_number_"+doitemnum).focus()
	  return false;
    }
	else if (rerror == 11)
    {
      alert('对不起，此商品已下架！');
	  return false;
    }
    else
    {
	  alert(message);
    }
  }
  else
  {
    
	var cartInfo = document.getElementById('ECS_CARTINFO');
	var cart_step_url	= '/cart.php';	//购物跳转步骤
	
	if( cart_step == 1 ) cart_step_url	= '/cart.php?step=checkout&code=2';
	
    if (cartInfo)
    {
      cartInfo.innerHTML = content;
    }

    if (one_step_buy == '1')
    {
      location.href = cart_step_url;
    }
    else
    {
      switch(confirm_type)
      {
        case '1' :
          if (confirm(message)) location.href = cart_step_url;
          break;
        case '2' :
          if (!confirm(message)) location.href = cart_step_url;
          break;
        case '3' :
          location.href = cart_step_url;
          break;
        default :
          break;
      }
    }
  }
}

/* *
 * 处理添加商品到购物车的反馈信息
 */
function addToCartResponse_member(result)
{
  if (result.error > 0)
  {
    // 如果需要缺货登记，跳转
    if (result.error == 2)
    {
      if (confirm(result.message))
      {
        alert( '此商品缺货！' )
		//location.href = 'user_manage.php?act=add_booking&id=' + result.goods_id;
      }
    }
    // 没选规格，跳到商品详情页
    else if (result.error == 6)
    {
      if (confirm(result.message))
      {
        window.open('sgoods.php?id=' + result.goods_id,'','');
		//location.href = 'sgoods.php?id=' + result.goods_id;
      }
    }
    else
    {
      alert(result.message);
    }
  }
  else
  {
    var cartInfo = document.getElementById('ECS_CARTINFO');

    if (cartInfo)
    {
      cartInfo.innerHTML = result.content;
    }

    if (result.one_step_buy == '1')
    {
      window.open('/cart.php','','');
	  //location.href = '/cart.php';
    }
    else
    {
      switch(result.confirm_type)
      {
        case '1' :
          //if (confirm(result.message)) location.href = '/cart.php';
          break;
        case '2' :
         // if (!confirm(result.message)) location.href = '/cart.php';
          break;
        case '3' :
          //location.href = '/cart.php';
          break;
        default :
          break;
      }
    }
  }
}

/* *
 * 添加商品到收藏夹 liny 2009-9-22
 */
function collect(goodsId)
{
  //Ajax.call('member.php?act=collect', 'id=' + goodsId, collectResponse, 'GET', 'JSON');
  nowgoodid	= goodsId
  doXMLHTTP("POST", 'member.php?act=collect', 'id=' + goodsId, collect_doShow);
}

/* *
 * 处理收藏商品的反馈信息 liny 2009-9-22
 */
function collectResponse(dealstr)
{
 cartdoarray	= dealstr.split(',');

	rerror	= cartdoarray[0]
	rerrorarray	= rerror.split(":")
	rerror	= rerrorarray[1]
	rerror	= rerror.replace('{','')
	rerror	= rerror.replace('}','')
	rerror	= rerror.replace('"','')
	rerror	= rerror.replace('"','')
	
	message	= cartdoarray[1]
	messagearray	= message.split(":")
	message	= messagearray[1]
	message	= message.replace('"','')
	message	= message.replace('"','')
	message	= message.replace('{','')
	message	= message.replace('}','')

if (rerror == 2 )
  {
     if (confirm("因为您还没有登录，因此您还不能使用该功能。是否立即登录？"))
     {
        location.href = 'http://www.hecha.cn/myaccount.php?act=login&back_act=sgoods-'+nowgoodid+'.html';
     };
  }
  else
  {
	  if (rerror == 3 )
		alert('该商品已经存在于您的收藏夹中！');
	  else
	  	alert('该商品已经成功地加入了您的收藏夹！');
  }
}

/* *
 * 处理会员登录的反馈信息
 */
function signInResponse(result)
{
  toggleLoader(false);

  var done    = result.substr(0, 1);
  var content = result.substr(2);

  if (done == 1)
  {
    document.getElementById('member-zone').innerHTML = content;
  }
  else
  {
    alert(content);
  }
}

/* *
 * 评论的翻页函数
 */
function gotoPage(page, id, type)
{
  Ajax.call('commentary.php?act=gotopage', 'page=' + page + '&id=' + id + '&type=' + type, gotoPageResponse, 'GET', 'JSON');
}

function gotoPageResponse(result)
{
  document.getElementById("ECS_COMMENT").innerHTML = result.content;
}

/* *
 * 取得格式化后的价格
 * @param : float price
 */
function getFormatedPrice(price)
{
  if (currencyFormat.indexOf("%s") > - 1)
  {
    return currencyFormat.replace('%s', advFormatNumber(price, 2));
  }
  else if (currencyFormat.indexOf("%d") > - 1)
  {
    return currencyFormat.replace('%d', advFormatNumber(price, 0));
  }
  else
  {
    return price;
  }
}

/* *
 * 夺宝奇兵会员出价
 */

function bid(step)
{
  var price = '';
  var msg   = '';
  if (step != - 1)
  {
    var frm = document.forms['formBid'];
    price   = frm.elements['price'].value;
    id = frm.elements['snatch_id'].value;
    if (price.length == 0)
    {
      msg += price_not_null + '\n';
    }
    else
    {
      var reg = /^[\.0-9]+/;
      if ( ! reg.test(price))
      {
        msg += price_not_number + '\n';
      }
    }
  }
  else
  {
    price = step;
  }

  if (msg.length > 0)
  {
    alert(msg);
    return;
  }

  Ajax.call('lactivities.php?act=bid&id=' + id, 'price=' + price, bidResponse, 'POST', 'JSON')
}

/* *
 * 夺宝奇兵会员出价反馈
 */

function bidResponse(result)
{
  if (result.error == 0)
  {
    document.getElementById('ECS_SNATCH').innerHTML = result.content;
    if (document.forms['formBid'])
    {
      document.forms['formBid'].elements['price'].focus();
    }
    newPrice(); //刷新价格列表
  }
  else
  {
    alert(result.content);
  }
}

/* *
 * 夺宝奇兵最新出价
 */

function newPrice(id)
{
  Ajax.call('lactivities.php?act=new_price_list&id=' + id, '', newPriceResponse, 'GET', 'TEXT');
}

/* *
 * 夺宝奇兵最新出价反馈
 */

function newPriceResponse(result)
{
  document.getElementById('ECS_PRICE_LIST').innerHTML = result;
}

/* *
 *  返回属性列表
 */
function getAttr(cat_id)
{
  var tbodies = document.getElementsByTagName('tbody');
  for (i = 0; i < tbodies.length; i ++ )
  {
    if (tbodies[i].id.substr(0, 10) == 'goods_type')tbodies[i].style.display = 'none';
  }

  var type_body = 'goods_type_' + cat_id;
  try
  {
    document.getElementById(type_body).style.display = '';
  }
  catch (e)
  {
  }
}

/* *
 * 截取小数位数
 */
function advFormatNumber(value, num) // 四舍五入
{
  var a_str = formatNumber(value, num);
  var a_int = parseFloat(a_str);
  if (value.toString().length > a_str.length)
  {
    var b_str = value.toString().substring(a_str.length, a_str.length + 1);
    var b_int = parseFloat(b_str);
    if (b_int < 5)
    {
      return a_str;
    }
    else
    {
      var bonus_str, bonus_int;
      if (num == 0)
      {
        bonus_int = 1;
      }
      else
      {
        bonus_str = "0."
        for (var i = 1; i < num; i ++ )
        bonus_str += "0";
        bonus_str += "1";
        bonus_int = parseFloat(bonus_str);
      }
      a_str = formatNumber(a_int + bonus_int, num)
    }
  }
  return a_str;
}

function formatNumber(value, num) // 直接去尾
{
  var a, b, c, i;
  a = value.toString();
  b = a.indexOf('.');
  c = a.length;
  if (num == 0)
  {
    if (b != - 1)
    {
      a = a.substring(0, b);
    }
  }
  else
  {
    if (b == - 1)
    {
      a = a + ".";
      for (i = 1; i <= num; i ++ )
      {
        a = a + "0";
      }
    }
    else
    {
      a = a.substring(0, b + num + 1);
      for (i = c; i <= b + num; i ++ )
      {
        a = a + "0";
      }
    }
  }
  return a;
}

/* *
 * 根据当前shiping_id设置当前配送的的保价费用，如果保价费用为0，则隐藏保价费用
 *
 * return       void
 */
function set_insure_status()
{
  // 取得保价费用，取不到默认为0
  var shippingId = getRadioValue('shipping');
  var insure_fee = 0;
  if (shippingId > 0)
  {
    if (document.forms['theForm'].elements['insure_' + shippingId])
    {
      insure_fee = document.forms['theForm'].elements['insure_' + shippingId].value;
    }
    // 每次取消保价选择
    if (document.forms['theForm'].elements['need_insure'])
    {
      document.forms['theForm'].elements['need_insure'].checked = false;
    }

    // 设置配送保价，为0隐藏
    if (document.getElementById("ecs_insure_cell"))
    {
      if (insure_fee > 0)
      {
        document.getElementById("ecs_insure_cell").style.display = '';
        setValue(document.getElementById("ecs_insure_fee_cell"), getFormatedPrice(insure_fee));
      }
      else
      {
        document.getElementById("ecs_insure_cell").style.display = "none";
        setValue(document.getElementById("ecs_insure_fee_cell"), '');
      }
    }
  }
}

/* *
 * 当支付方式改变时出发该事件
 * @param       pay_id      支付方式的id
 * return       void
 */
function changePayment(pay_id)
{
  // 计算订单费用
  calculateOrderFee();
}

function getCoordinate(obj)
{
  var pos =
  {
    "x" : 0, "y" : 0
  }

  pos.x = document.body.offsetLeft;
  pos.y = document.body.offsetTop;

  do
  {
    pos.x += obj.offsetLeft;
    pos.y += obj.offsetTop;

    obj = obj.offsetParent;
  }
  while (obj.tagName.toUpperCase() != 'BODY')

  return pos;
}

function showCatalog(obj)
{
  var pos = getCoordinate(obj);
  var div = document.getElementById('ECS_CATALOG');

  if (div && div.style.display != 'block')
  {
    div.style.display = 'block';
    div.style.left = pos.x + "px";
    div.style.top = (pos.y + obj.offsetHeight - 1) + "px";
  }
}

function hideCatalog(obj)
{
  var div = document.getElementById('ECS_CATALOG');

  if (div && div.style.display != 'none') div.style.display = "none";
}

function sendHashMail()
{
  Ajax.call('user_manage.php?act=send_hash_mail', '', sendHashMailResponse, 'GET', 'JSON')
}

function sendHashMailResponse(result)
{
  alert(result.message);
}

/* 订单查询 */
function orderQuery()
{
  var order_sn = document.forms['ecsOrderQuery']['order_sn'].value;

  var reg = /^[\.0-9]+/;
  if (order_sn.length < 10 || ! reg.test(order_sn))
  {
    alert(invalid_order_sn);
    return;
  }
  Ajax.call('user_manage.php?act=order_query&order_sn=s' + order_sn, '', orderQueryResponse, 'GET', 'JSON');
}

function orderQueryResponse(result)
{
  if (result.message.length > 0)
  {
    alert(result.message);
  }
  if (result.error == 0)
  {
    var div = document.getElementById('ECS_ORDER_QUERY');
    div.innerHTML = result.content;
  }
}

function display_mode(str)
{
    document.getElementById('display').value = str;
    setTimeout(doSubmit, 0);
    function doSubmit() {document.forms['listform'].submit();}
}


/* 修复IE6以下版本PNG图片Alpha */
function fixpng()
{
  var arVersion = navigator.appVersion.split("MSIE")
  var version = parseFloat(arVersion[1])

  if ((version >= 5.5) && (document.body.filters))
  {
     for(var i=0; i<document.images.length; i++)
     {
        var img = document.images[i]
        var imgName = img.src.toUpperCase()
        if (imgName.substring(imgName.length-3, imgName.length) == "PNG")
        {
           var imgID = (img.id) ? "id='" + img.id + "' " : ""
           var imgClass = (img.className) ? "class='" + img.className + "' " : ""
           var imgTitle = (img.title) ? "title='" + img.title + "' " : "title='" + img.alt + "' "
           var imgStyle = "display:inline-block;" + img.style.cssText
           if (img.align == "left") imgStyle = "float:left;" + imgStyle
           if (img.align == "right") imgStyle = "float:right;" + imgStyle
           if (img.parentElement.href) imgStyle = "cursor:hand;" + imgStyle
           var strNewHTML = "<span " + imgID + imgClass + imgTitle
           + " style=\"" + "width:" + img.width + "px; height:" + img.height + "px;" + imgStyle + ";"
           + "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader"
           + "(src=\'" + img.src + "\', sizingMethod='scale');\"></span>"
           img.outerHTML = strNewHTML
           i = i-1
        }
     }
  }
}

function hash(string, length)
{
  var length = length ? length : 32;
  var start = 0;
  var i = 0;
  var result = '';
  filllen = length - string.length % length;
  for(i = 0; i < filllen; i++)
  {
    string += "0";
  }
  while(start < string.length)
  {
    result = stringxor(result, string.substr(start, length));
    start += length;
  }
  return result;
}

function stringxor(s1, s2)
{
  var s = '';
  var hash = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  var max = Math.max(s1.length, s2.length);
  for(var i=0; i<max; i++) 
  {
    var k = s1.charCodeAt(i) ^ s2.charCodeAt(i);
    s += hash.charAt(k % 52);
  }
  return s;
}

var evalscripts = new Array();
function evalscript(s)
{
  if(s.indexOf('<script') == -1) return s;
  var p = /<script[^\>]*?src=\"([^\>]*?)\"[^\>]*?(reload=\"1\")?(?:charset=\"([\w\-]+?)\")?><\/script>/ig;
  var arr = new Array();
  while(arr = p.exec(s)) appendscript(arr[1], '', arr[2], arr[3]);
  return s;
}

function $$(id)
{
    return document.getElementById(id);
}

function appendscript(src, text, reload, charset) 
{
  var id = hash(src + text);
  if(!reload && in_array(id, evalscripts)) return;
  if(reload && $$(id))
  {
    $$(id).parentNode.removeChild($$(id));
  }
  evalscripts.push(id);
  var scriptNode = document.createElement("script");
  scriptNode.type = "text/javascript";
  scriptNode.id = id;
  //scriptNode.charset = charset;
  try 
  {
    if(src) 
    {
      scriptNode.src = src;
    }
    else if(text)
    {
      scriptNode.text = text;
    }
    $$('append_parent').appendChild(scriptNode);
  } 
  catch(e)
  {}
}

function in_array(needle, haystack)
{
  if(typeof needle == 'string' || typeof needle == 'number')
  {
    for(var i in haystack)
    {
      if(haystack[i] == needle)
      {
        return true;
      }
    }
  }
  return false;
}

var pmwinposition = new Array();

var userAgent = navigator.userAgent.toLowerCase();
var is_opera = userAgent.indexOf('opera') != -1 && opera.version();
var is_moz = (navigator.product == 'Gecko') && userAgent.substr(userAgent.indexOf('firefox') + 8, 3);
var is_ie = (userAgent.indexOf('msie') != -1 && !is_opera) && userAgent.substr(userAgent.indexOf('msie') + 5, 3);
function pmwin(action, param)
{
  var objs = document.getElementsByTagName("OBJECT");
  if(action == 'open')
  {
    for(i = 0;i < objs.length; i ++)
    {
      if(objs[i].style.visibility != 'hidden')
      {
        objs[i].setAttribute("oldvisibility", objs[i].style.visibility);
        objs[i].style.visibility = 'hidden';
      }
    }
    var clientWidth = document.body.clientWidth;
    var clientHeight = document.documentElement.clientHeight ? document.documentElement.clientHeight : document.body.clientHeight;
    var scrollTop = document.body.scrollTop ? document.body.scrollTop : document.documentElement.scrollTop;
    var pmwidth = 800;
    var pmheight = clientHeight * 0.9;
    if(!$$('pmlayer'))
    {
      div = document.createElement('div');div.id = 'pmlayer';
      div.style.width = pmwidth + 'px';
      div.style.height = pmheight + 'px';
      div.style.left = ((clientWidth - pmwidth) / 2) + 'px';
      div.style.position = 'absolute';
      div.style.zIndex = '999';
      $$('append_parent').appendChild(div);
      $$('pmlayer').innerHTML = '<div style="width: 800px; background: #666666; margin: 5px auto; text-align: left">' +
        '<div style="width: 800px; height: ' + pmheight + 'px; padding: 1px; background: #FFFFFF; border: 1px solid #7597B8; position: relative; left: -6px; top: -3px">' +
        '<div onmousedown="pmwindrag(event, 1)" onmousemove="pmwindrag(event, 2)" onmouseup="pmwindrag(event, 3)" style="cursor: move; position: relative; left: 0px; top: 0px; width: 800px; height: 30px; margin-bottom: -30px;"></div>' +
        '<a href="###" onclick="pmwin(\'close\')"><img style="position: absolute; right: 20px; top: 15px" src="images/close.gif" title="关闭" /></a>' +
        '<iframe id="pmframe" name="pmframe" style="width:' + pmwidth + 'px;height:100%" allowTransparency="true" frameborder="0"></iframe></div></div>';
    }
    $$('pmlayer').style.display = '';
    $$('pmlayer').style.top = ((clientHeight - pmheight) / 2 + scrollTop) + 'px';
    if(!param)
    {
        pmframe.location = 'pmp.php';
    }
    else
    {
        pmframe.location = 'pmp.php?' + param;
    }
  }
  else if(action == 'close')
  {
    for(i = 0;i < objs.length; i ++)
    {
      if(objs[i].attributes['oldvisibility'])
      {
        objs[i].style.visibility = objs[i].attributes['oldvisibility'].nodeValue;
        objs[i].removeAttribute('oldvisibility');
      }
    }
    hiddenobj = new Array();
    $$('pmlayer').style.display = 'none';
  }
}

var pmwindragstart = new Array();
function pmwindrag(e, op)
{
  if(op == 1)
  {
    pmwindragstart = is_ie ? [event.clientX, event.clientY] : [e.clientX, e.clientY];
    pmwindragstart[2] = parseInt($$('pmlayer').style.left);
    pmwindragstart[3] = parseInt($$('pmlayer').style.top);
    doane(e);
  }
  else if(op == 2 && pmwindragstart[0])
  {
    var pmwindragnow = is_ie ? [event.clientX, event.clientY] : [e.clientX, e.clientY];
    $$('pmlayer').style.left = (pmwindragstart[2] + pmwindragnow[0] - pmwindragstart[0]) + 'px';
    $$('pmlayer').style.top = (pmwindragstart[3] + pmwindragnow[1] - pmwindragstart[1]) + 'px';
    doane(e);
  }
  else if(op == 3)
  {
    pmwindragstart = [];
    doane(e);
  }
}

function doane(event)
{
  e = event ? event : window.event;
  if(is_ie)
  {
    e.returnValue = false;
    e.cancelBubble = true;
  } 
  else if(e)
  {
    e.stopPropagation();
    e.preventDefault();
  }
}