function   saveCookie(name,   value,   expires,   path,   domain,   secure){   
      var   strCookie   =   name   +   "="   +   value;   
      if   (expires){   
            //   计算Cookie的期限,   参数为天数   
            var   curTime   =   new   Date();   
            curTime.setTime(curTime.getTime()   +   expires*24*60*60*1000);   
            strCookie   +=   ";   expires="   +   curTime.toGMTString();   
      }   
      //   Cookie的路径   
      strCookie   +=     (path)   ?   ";   path="   +   path   :   "";     
      //   Cookie的Domain   
      strCookie   +=     (domain)   ?   ";   domain="   +   domain   :   "";   
      //   是否需要保密传送,为一个布尔值   
      strCookie   +=     (secure)   ?   ";   secure"   :   "";   
      document.cookie   =   strCookie;   
  }   
  //   使用名称参数取得Cookie值,   null表示Cookie不存在   
  function   getCookie(name){   
      var   strCookies   =   document.cookie;   
      var   cookieName   =   name   +   "=";     //   Cookie名称   
      var   valueBegin,   valueEnd,   value;   
      //   寻找是否有此Cookie名称   
      valueBegin   =   strCookies.indexOf(cookieName);   
      if   (valueBegin   ==   -1)   return   null;     //   没有此Cookie   
      //   取得值的结尾位置   
      valueEnd   =   strCookies.indexOf(";",   valueBegin);   
      if   (valueEnd   ==   -1)   
              valueEnd   =   strCookies.length;     //   最後一个Cookie   
      //   取得Cookie值   
      value   =   strCookies.substring(valueBegin+cookieName.length,valueEnd);   
      return   value;   
  }   
  //   检查Cookie是否存在   
  function   checkCookieExist(name){   
      if   (getCookie(name))   
              return   true;   
      else   
              return   false;   
  }   
  //   删除Cookie   
  function   deleteCookie(name,   path,   domain){   
      var   strCookie;   
      //   检查Cookie是否存在   
      if   (checkCookieExist(name)){   
          //   设置Cookie的期限为己过期   
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
