function   saveCookie(name,   value,   expires,   path,   domain,   secure){   
      var   strCookie   =   name   +   "="   +   value;   
      if   (expires){   
            //   ����Cookie������,   ����Ϊ����   
            var   curTime   =   new   Date();   
            curTime.setTime(curTime.getTime()   +   expires*24*60*60*1000);   
            strCookie   +=   ";   expires="   +   curTime.toGMTString();   
      }   
      //   Cookie��·��   
      strCookie   +=     (path)   ?   ";   path="   +   path   :   "";     
      //   Cookie��Domain   
      strCookie   +=     (domain)   ?   ";   domain="   +   domain   :   "";   
      //   �Ƿ���Ҫ���ܴ���,Ϊһ������ֵ   
      strCookie   +=     (secure)   ?   ";   secure"   :   "";   
      document.cookie   =   strCookie;   
  }   
  //   ʹ�����Ʋ���ȡ��Cookieֵ,   null��ʾCookie������   
  function   getCookie(name){   
      var   strCookies   =   document.cookie;   
      var   cookieName   =   name   +   "=";     //   Cookie����   
      var   valueBegin,   valueEnd,   value;   
      //   Ѱ���Ƿ��д�Cookie����   
      valueBegin   =   strCookies.indexOf(cookieName);   
      if   (valueBegin   ==   -1)   return   null;     //   û�д�Cookie   
      //   ȡ��ֵ�Ľ�βλ��   
      valueEnd   =   strCookies.indexOf(";",   valueBegin);   
      if   (valueEnd   ==   -1)   
              valueEnd   =   strCookies.length;     //   ����һ��Cookie   
      //   ȡ��Cookieֵ   
      value   =   strCookies.substring(valueBegin+cookieName.length,valueEnd);   
      return   value;   
  }   
  //   ���Cookie�Ƿ����   
  function   checkCookieExist(name){   
      if   (getCookie(name))   
              return   true;   
      else   
              return   false;   
  }   
  //   ɾ��Cookie   
  function   deleteCookie(name,   path,   domain){   
      var   strCookie;   
      //   ���Cookie�Ƿ����   
      if   (checkCookieExist(name)){   
          //   ����Cookie������Ϊ������   
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
