!function(a){a.cookie=function(e,t,n){var o,r;if(1<arguments.length&&(!/Object/.test(Object.prototype.toString.call(t))||null==t))return n=a.extend({},n),null==t&&(n.expires=-1),"number"==typeof n.expires&&(o=n.expires,(r=n.expires=new Date).setDate(r.getDate()+o)),t=String(t),document.cookie=[encodeURIComponent(e),"=",n.raw?t:encodeURIComponent(t),n.expires?"; expires="+n.expires.toUTCString():"",n.path?"; path="+n.path:"",n.domain?"; domain="+n.domain:"",n.secure?"; secure":""].join("");for(var i,p=(n=t||{}).raw?function(e){return e}:decodeURIComponent,c=document.cookie.split("; "),u=0;i=c[u]&&c[u].split("=");u++)if(p(i[0])===e)return p(i[1]||"");return null}}(jQuery);