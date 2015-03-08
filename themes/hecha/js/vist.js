// JavaScript Document
var ip		= '';
var cid		= '';
cid			= getCookie("vist_cid");

if( cid == null )
{
	dateObj=new Date();
	now_time	= dateObj.getTime();
	randIndex 	= Math.floor(Math.random()*1000000);
	cid			= now_time + '_' + randIndex;
	expires		= 
	saveCookie('vist_cid',   cid,   1024);
}
var uid		= '';
uid			= getCookie("vist_uid");
var vp		= escape(window.location.href);
var vd		= escape(document.referrer);

document.write('<span style="display:none"><img src="http://www.hecha.cn/user_vist/vist.php?ip='+ip+'&cid='+cid+'&uid='+uid+'&vp='+vp+'&vd='+vd+'" width="10" height="10" /></span>');

function   saveCookie(name,   value,   expires,   path,   domain,   secure){   
      var   strCookie   =   name   +   "="   +   value;   
      if   (expires){   
            //   Cookie,   Ϊ   
            var   curTime   =   new   Date();   
            curTime.setTime(curTime.getTime()   +   expires*24*60*60*1000);
            strCookie   +=   ";   expires="   +   curTime.toGMTString();
      }   
      //   Cookie·   
      strCookie   +=     (path)   ?   ";   path="   +   path   :   "";     
      //   CookieDomain   
      strCookie   +=     (domain)   ?   ";   domain="   +   domain   :   "";   
      //   ǷҪܴ,Ϊһֵ   
      strCookie   +=     (secure)   ?   ";   secure"   :   "";   
      document.cookie   =   strCookie;   
  }   
  //   ʹƲȡCookieֵ,   nullʾCookie   
  function   getCookie(name){   
      var   strCookies   =   document.cookie;   
      var   cookieName   =   name   +   "=";     //   Cookie   
      var   valueBegin,   valueEnd,   value;   
      //   ѰǷдCookie   
      valueBegin   =   strCookies.indexOf(cookieName);   
      if   (valueBegin   ==   -1)   return   null;     //   ûдCookie   
      //   ȡֵĽβλ   
      valueEnd   =   strCookies.indexOf(";",   valueBegin);   
      if   (valueEnd   ==   -1)   
              valueEnd   =   strCookies.length;     //   һCookie   
      //   ȡCookieֵ   
      value   =   strCookies.substring(valueBegin+cookieName.length,valueEnd);   
      return   value;   
  }   
  //   CookieǷ   
  function   checkCookieExist(name){   
      if   (getCookie(name))   
              return   true;   
      else   
              return   false;   
  }   
  //   ɾCookie   
  function   deleteCookie(name,   path,   domain){   
      var   strCookie;   
      //   CookieǷ   
      if   (checkCookieExist(name)){   
          //   CookieΪ   
          strCookie   =   name   +   "=";     
          strCookie   +=   (path)   ?   ";   path="   +   path   :   "";   
          strCookie   +=   (domain)   ?   ";   domain="   +   domain   :   "";   
          strCookie   +=   ";   expires=Thu,   01-Jan-70   00:00:01   GMT";   
          document.cookie   =   strCookie;   
      }   
  }
  
   function setCookie(name, value, expires, path, domain, secure)
			{
				document.cookie = name + "=" + escape(value) +
					((expires) ? "; expires=" + expires : "") +
					((path) ? "; path=" + path : "") +
					((domain) ? "; domain=" + domain : "") +
					((secure) ? "; secure" : "");
			}