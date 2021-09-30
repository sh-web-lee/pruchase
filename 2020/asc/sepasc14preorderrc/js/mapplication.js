function MApp(t){return t=t?t.toString().replace(".","_"):"","object"==typeof window["MApplication_"+t]?window["MApplication_"+t]:MApplication_2_2}var MApplication_2_2=new function(){this.version="2.2.8",this.lastUpdate="2015-05-18",this.language=new function(){this.lang=navigator.browserLanguage?navigator.browserLanguage:navigator.language,this.langArr=this.lang.toLowerCase().split("-"),this.reValue=function(t){var e=t[this.langArr[0]];return e=void 0==e?t["default"]:e},this.countdownJump=function(t,e){var i=this.reValue(t);void 0!=i&&""!=i&&setTimeout(function(){window.location=i},1e3*e)}},this.client=new function(){this.userAgent=navigator.userAgent.toLowerCase(),this.getDevice=function(){var t="other";return-1!=this.userAgent.indexOf("windows")?t="pc":-1!=this.userAgent.indexOf("ipad")?t="ipad":-1!=this.userAgent.indexOf("macintosh")?t="mac":-1!=this.userAgent.indexOf("ipod touch")?t="ipod touch":-1!=this.userAgent.indexOf("iphone")?t="iphone":-1!=this.userAgent.indexOf("mobile")&&(t="mobile"),t},this.getSystemBit=function(){var t="32";return(-1!=this.userAgent.indexOf("wow64")||-1!=this.userAgent.indexOf("x86_64"))&&(t="64"),t},this.getSystemType=function(){var t="other";return-1!=this.userAgent.indexOf("windows")?t="windows":-1!=this.userAgent.indexOf("mac os")?t=-1!=this.userAgent.indexOf("macintosh")?"macos":"ios":-1!=this.userAgent.indexOf("android")&&(t="android"),t},this.getSystem=function(){var t="other";return-1!=this.userAgent.indexOf("windows nt 6.2")?t="win8":-1!=this.userAgent.indexOf("windows nt 6.1")?t="win7":-1!=this.userAgent.indexOf("windows nt 5.1")?t="winxp":-1!=this.userAgent.indexOf("mac os")?t=-1!=this.userAgent.indexOf("macintosh")?"macos":"ios":-1!=this.userAgent.indexOf("android")&&(t="android"),t},this.getBrowser=function(){var t="other",e=/(msie.|trident.*rv:)/,i=/(edge)/,r=/(chrome)/,n=/(firefox)/,s=/(safari)/,a=/(opr|opera)/;return e.test(this.userAgent)?t="ie":i.test(this.userAgent)?t="edge":a.test(this.userAgent)?t="opera":r.test(this.userAgent)?t="chrome":n.test(this.userAgent)?t="firefox":s.test(this.userAgent)&&(t="safari"),t},this.getBrowserVer=function(){var t,e,i=this.getBrowser();if("ie"==i){if("-1"!=this.userAgent.indexOf("msie")){var t=this.userAgent.match(/(msie)+.(\d+)/g);e=t[0].replace("msie ","").toString()}else if("-1"!=this.userAgent.indexOf("rv:")){var t=this.userAgent.match(/([rv:])+(\d+)/g);e=t[0].replace("rv:","").toString()}}else if("chrome"==i){var t=this.userAgent.match(/(chrome)+.(\d+)/g);e=t[0].replace("chrome/","").toString()}else if("firefox"==i){var t=this.userAgent.match(/(firefox)+.(\d+)/g);e=t[0].replace("firefox/","").toString()}else if("safari"==i){var t=this.userAgent.match(/(version)+.(\d+)/g);e=t[0].replace("version/","").toString()}else e="unknown";return Array(i,e)},this.getHead=function(){var t=new XMLHttpRequest;t.open("GET",document.location,!1),t.send(null);var e=t.getAllResponseHeaders().toLowerCase();return e}},this.url=new function(){this.getUrl=function(){return window.location.href},this.getReferrer=function(){return document.referrer},this.getDomain=function(t){var e;return t?(e=t.match(/([\w-]+)(:\/\/)([\w.-]+)/i),null!=e&&(e=e[3])):e=window.document.location.host,null!=e?e.toString():null},this.getFilePath=function(t){var e;return t?(e=t.replace(this.getDomain(t),""),e=e.replace(/^\w+:\/\//i,""),e=e.replace(/(\?+)([^\?+])*$/,""),e=e.replace(/(\#+)([^\#+])*$/,"")):(e=window.document.location.pathname,e=e.replace(/\/{2,}/g,"/")),e.toString()},this.getDirPath=function(t){var e,i,r;return e=this.getFilePath(t),t?(r=e.match(/[\w.-]*$/i),i=e.replace(this.getDomain(t),""),i=i.replace(r,"")):i=e.substring(0,e.lastIndexOf("/"))+"/",i.toString()},this.getFileName=function(t){var e,i;return t||(t=this.getUrl()),e=this.getFilePath(t),i=e.match(/[\w.-]*$/i),i.toString()},this.getQuery=function(t){var e="";if(t)e=t.match(/[?].*$/i),null!=e&&(e=e[0].substring(1).toString().replace(/#.*/,""));else if(e=this.getQuery(this.getUrl()),null==e)return"";return e},this.getHashTag=function(t){return this.getFragment(t)},this.getFragment=function(t){var e;return t||(t=this.getUrl()),e=t.match(/#.*/),null!=e&&(e=e[0].substring(1)),e},this.getParameters=function(t){var e=this.getQuery(),i="",r=Array();if(null!=e){if(e.length>1)for(var n=e.split("&"),s=0;s<n.length;s++){var a=n[s].split("="),o=a[0],u=a[1]?a[1].replace(/#.*/,""):"";o==t&&2==a.length&&(i=u),r[o]=u}if(t)return i}return r},this.parseUrl=function(t){var e,i,r,n,s;return t||(t=this.getUrl()),e=this.getDomain(t),i=this.getFilePath(t),r=this.getDirPath(t),n=this.getFileName(t),s=this.getQuery(t),hashTag=this.getHashTag(t),Array(e,i,r,n,s,hashTag)},this.parseQuery=function(t){var e,i;return t||(t=this.getUrl()),e=this.getQuery(t),i=this.getHashTag(t),Array(e,i)}},this.check=new function(){this.isEmail=function(t){if(this.isNull(t))return!1;var e=t.indexOf("@");if("-1"==e)return!1;if(domain=t.substr(e+1),!this.isDomain(domain))return!1;name=t.substr(0,e);var i=/^([\w])+([\w-.]?)+$/i;return i.test(name)?!0:!1},this.isDomain=function(t){var e=/^(([\w]+-?)*[\w]+.)+([a-z]{2,})+$/i;return e.test(t)},this.isHttpUrl=function(t){var e=/^http[s]?:\/\/([\w-]+.)+[\w-]+([\w-./?%&=]*)?$/i;return e.test(t)?!0:!1},this.isNull=function(t){return null!=t&&0!=t&&(t=t.replace(/[ ]/g,"")),""==t||"undefined"==t||null==t?!0:!1},this.isCode=function(t,e){if(19==e){var i=/[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}/i;if(!i.test(t.toLowerCase()))return!1}else if(23==e){var i=/[0-9a-f]{5}-[0-9a-f]{5}-[0-9a-f]{5}-[0-9a-f]{3}[0-9a-z]{2}/i;if(!i.test(t.toLowerCase()))return!1}else if(!this.isCode(t,19)&&!this.isCode(t,23))return!1;return!0}},this.cookie=new function(){this.cookieEnabled=navigator.cookieEnabled,this.expireTime=2592e6,this.set=function(t,e){var i=t+"="+escape(e),r=new Date;return r.setTime(r.getTime()+this.expireTime),document.cookie=i+"; expires="+r.toGMTString()+"; path=/",!0},this.get=function(t){for(var e=document.cookie.split("; "),i=0;i<e.length;i++){var r=e[i].split("=");if(r[0]==t)return unescape(r[1])}},this.getAll=function(){for(var t=document.cookie.split("; "),e=Array,i=0;i<t.length;i++){var r=t[i].split("=");e[r[0]]=unescape(r[1])}return e},this.remove=function(t){var e=new Date;return e.setTime(e.getTime()-1e4),document.cookie=t+"=0; expires="+e.toGMTString(),!0}},this.datetime=new function(){this.get=function(t,e){if(e)var i=new Date(1e3*parseInt(e));else var i=new Date;var r=Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sept","Oct","Nov","Dec"),n=i.getFullYear(),s=i.getMonth()+1;s=10>s?"0"+s:s;var a=i.getDate();a=10>a?"0"+a:a;var o=i.getHours();o=10>o?"0"+o:o;var u=i.getMinutes();u=10>u?"0"+u:u;var h=i.getSeconds();h=10>h?"0"+h:h;var g=i.getMilliseconds();return g=100>g?10>g?"00"+g:"0"+g:g,"datetime"==t?datetime=n+"-"+s+"-"+a+" "+o+":"+u+":"+h:"datetimes"==t?datetime=n+"-"+s+"-"+a+" "+o+":"+u+":"+h+" "+g:"date"==t?datetime=n+"-"+s+"-"+a:"dates"==t?datetime=r[Number(s-1)]+". "+a+", "+n:"time"==t&&(datetime=o+":"+u+":"+h),datetime},this.getTimeZone=function(){var t=new Date;return t.getTimezoneOffset()/60},this.transformCurrentDatetimeToUtc=function(t,e){var i=this.getTimestamp(e)+60*this.getTimeZone()*60;if("timestamp"==t)return i;var r=new Date(1e3*parseInt(i)),n=r.getFullYear(),s=r.getMonth()+1;s=10>s?"0"+s:s;var a=r.getDate();a=10>a?"0"+a:a;var o=r.getHours();o=10>o?"0"+o:o;var u=r.getMinutes();u=10>u?"0"+u:u;var h=r.getSeconds();return h=10>h?"0"+h:h,n+"-"+s+"-"+a+" "+o+":"+u+":"+h},this.getTimestamp=function(t){var e=new Date;return t?(e.setFullYear(t.substring(0,4)),e.setMonth(t.substring(5,7)-1),e.setDate(t.substring(8,10)),e.setHours(t.substring(11,13)),e.setMinutes(t.substring(14,16)),e.setSeconds(t.substring(17,19)),Date.parse(e)/1e3):Math.floor(e.getTime()/1e3)},this.getCountdown=function(t){var e=new Date,i=this.getTimestamp(),r=this.getTimestamp(t),n=r-i;if(n>0){var s=Math.floor(n/86400),a=Math.floor(n/3600%24),o=Math.floor(n/60%60),u=Math.floor(n%60),h=999-e.getMilliseconds();return 10>h?h="00"+h:100>h&&(h="0"+h),Array(s,a,o,u,h)}return Array("0","0","0","0","000")},this.getCycleCountdown=function(t,e){var i=24*e*60*60,r=new Date,n=r.getTime().toString().substring(0,10);for(u=1;;u++){var s=t+i*u-n;if(s>0)break}var a=Math.floor(s/86400),o=Math.floor(s/3600%24),u=Math.floor(s/60%60),h=Math.floor(s%60),g=999-r.getMilliseconds();return 10>g?g="00"+g:100>g&&(g="0"+g),Array(a,o,u,h,g)}},this.packages=new function(){this.replaceoto0=function(t){return t.replace(/o|O/g,"0")},this.countdownToJump=function(t,e){setTimeout(function(){window.location.href=t},e)},this.getFileExt=function(t){return extArr=t.split("."),ext=extArr[extArr.length-1],ext=ext.toLocaleLowerCase()},this.openWindowAndGoto=function(t,e){window.open(t,"openWindow",""),window.location.href=e},this.lTrim=function(t){return t.replace(/(^\s*)/g,"")},this.rTrim=function(t){return t.replace(/(\s*$)/g,"")},this.trim=function(t){return t=this.lTrim(t),this.rTrim(t)},this.zeroize=function(t,e){var i=t.toString(),r=i.length;if(e>r)for(var n=0;e-r>n;n++)i="0"+i;return i},this.conversionSize=function(t){var e=Array("B","KB","MB","GB","TB");for(i=0;t>=1024&&4>i;i++)t/=1024;return t=Math.round(100*t),t/=100,t+" "+e[i]},this.getRandom=function(t,e){var i=e-t+1;return Math.floor(Math.random()*i+t)},this.refreshCaptcha=function(t,e){var i=Math.random();document.getElementById(t).src=e+"&r="+i},this.genPassword=function(t,e){t=t>0?t:3,e=e>0?e:12;for(var i="aAbBcCdDeEfFgGhHjJkKmMnNpPqQrRsStTuUvVwWxXyYzZ",r="123456789",n="-_*#?$@[]()~,.;|+=%",s="",a=0;e>=a;a++)characterSet=0==a?t>1?i:r:3==t?i+r+n:2==t?i+r:"0"+r,s+=characterSet.substr(this.getRandom(1,characterSet.length)-1,1);return s},this.passwordStrength=function(t){var e=0;t.length>=8&&(e+=1);var i=/[0-9]/;i.test(t)&&(e+=1);var i=/[a-z]/;i.test(t)&&(e+=1);var i=/[A-Z]/;i.test(t)&&(e+=1);var i=/[^a-z0-9]/i;return i.test(t)&&(e+=1),e},this.passwordExpirationTips=function(){}}};