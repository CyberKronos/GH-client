(function(){"use strict";if("querySelector"in document&&"addEventListener"in window&&Array.prototype.forEach){var e=function(e,t,n,r){var i=function(e,t){if(e=="easeInQuad")return t*t;if(e=="easeOutQuad")return t*(2-t);if(e=="easeInOutQuad")return t<.5?2*t*t:-1+(4-2*t)*t;if(e=="easeInCubic")return t*t*t;if(e=="easeOutCubic")return--t*t*t+1;if(e=="easeInOutCubic")return t<.5?4*t*t*t:(t-1)*(2*t-2)*(2*t-2)+1;if(e=="easeInQuart")return t*t*t*t;if(e=="easeOutQuart")return 1- --t*t*t*t;if(e=="easeInOutQuart")return t<.5?8*t*t*t*t:1-8*--t*t*t*t;if(e=="easeInQuint")return t*t*t*t*t;if(e=="easeOutQuint")return 1+ --t*t*t*t*t;if(e=="easeInOutQuint")return t<.5?16*t*t*t*t*t:1+16*--t*t*t*t*t;return t};var s=function(e,t){if(e==="true"&&history.pushState){history.pushState(null,null,"#"+t.id)}};var o=window.pageYOffset;var u=function(e){var t=0;if(e.offsetParent){do{t+=e.offsetTop;e=e.offsetParent}while(e)}return t};var a=u(e)-o;var f=a/(t/16);var l=0;var c,h,p;var d=function(){l+=16;c=l/t;c=c>1?1:c;h=o+a*i(n,c);window.scrollTo(0,h);p()};if(f>=0){p=function(){var t=window.pageYOffset;if(t>=u(e)-f||window.innerHeight+t>=document.body.scrollHeight){clearInterval(v);s(r,e)}}}else{p=function(){var t=window.pageYOffset;if(t<=u(e)||t<=0){clearInterval(v);s(r,e)}}}var v=setInterval(d,16)};var t=document.querySelectorAll(".scroll");[].forEach.call(t,function(t){t.addEventListener("click",function(n){n.preventDefault();var r=t.getAttribute("href");var i=document.querySelector(r);var s=t.getAttribute("data-speed");var o=t.getAttribute("data-easing");var u=t.getAttribute("data-url");if(i){e(i,s||500,o||"easeInOutCubic",u||"false")}},false)})}})()