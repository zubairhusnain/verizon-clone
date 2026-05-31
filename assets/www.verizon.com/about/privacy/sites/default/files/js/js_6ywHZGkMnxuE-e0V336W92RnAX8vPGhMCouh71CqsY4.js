/*! jQuery v3.6.3 | (c) OpenJS Foundation and other contributors | jquery.org/license */
!function(e,t){"use strict";"object"==typeof module&&"object"==typeof module.exports?module.exports=e.document?t(e,!0):function(e){if(!e.document)throw new Error("jQuery requires a window with a document");return t(e)}:t(e)}("undefined"!=typeof window?window:this,function(C,e){"use strict";var t=[],r=Object.getPrototypeOf,s=t.slice,g=t.flat?function(e){return t.flat.call(e)}:function(e){return t.concat.apply([],e)},u=t.push,i=t.indexOf,n={},o=n.toString,y=n.hasOwnProperty,a=y.toString,l=a.call(Object),v={},m=function(e){return"function"==typeof e&&"number"!=typeof e.nodeType&&"function"!=typeof e.item},x=function(e){return null!=e&&e===e.window},S=C.document,c={type:!0,src:!0,nonce:!0,noModule:!0};function b(e,t,n){var r,i,o=(n=n||S).createElement("script");if(o.text=e,t)for(r in c)(i=t[r]||t.getAttribute&&t.getAttribute(r))&&o.setAttribute(r,i);n.head.appendChild(o).parentNode.removeChild(o)}function w(e){return null==e?e+"":"object"==typeof e||"function"==typeof e?n[o.call(e)]||"object":typeof e}var f="3.6.3",E=function(e,t){return new E.fn.init(e,t)};function p(e){var t=!!e&&"length"in e&&e.length,n=w(e);return!m(e)&&!x(e)&&("array"===n||0===t||"number"==typeof t&&0<t&&t-1 in e)}E.fn=E.prototype={jquery:f,constructor:E,length:0,toArray:function(){return s.call(this)},get:function(e){return null==e?s.call(this):e<0?this[e+this.length]:this[e]},pushStack:function(e){var t=E.merge(this.constructor(),e);return t.prevObject=this,t},each:function(e){return E.each(this,e)},map:function(n){return this.pushStack(E.map(this,function(e,t){return n.call(e,t,e)}))},slice:function(){return this.pushStack(s.apply(this,arguments))},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},even:function(){return this.pushStack(E.grep(this,function(e,t){return(t+1)%2}))},odd:function(){return this.pushStack(E.grep(this,function(e,t){return t%2}))},eq:function(e){var t=this.length,n=+e+(e<0?t:0);return this.pushStack(0<=n&&n<t?[this[n]]:[])},end:function(){return this.prevObject||this.constructor()},push:u,sort:t.sort,splice:t.splice},E.extend=E.fn.extend=function(){var e,t,n,r,i,o,a=arguments[0]||{},s=1,u=arguments.length,l=!1;for("boolean"==typeof a&&(l=a,a=arguments[s]||{},s++),"object"==typeof a||m(a)||(a={}),s===u&&(a=this,s--);s<u;s++)if(null!=(e=arguments[s]))for(t in e)r=e[t],"__proto__"!==t&&a!==r&&(l&&r&&(E.isPlainObject(r)||(i=Array.isArray(r)))?(n=a[t],o=i&&!Array.isArray(n)?[]:i||E.isPlainObject(n)?n:{},i=!1,a[t]=E.extend(l,o,r)):void 0!==r&&(a[t]=r));return a},E.extend({expando:"jQuery"+(f+Math.random()).replace(/\D/g,""),isReady:!0,error:function(e){throw new Error(e)},noop:function(){},isPlainObject:function(e){var t,n;return!(!e||"[object Object]"!==o.call(e))&&(!(t=r(e))||"function"==typeof(n=y.call(t,"constructor")&&t.constructor)&&a.call(n)===l)},isEmptyObject:function(e){var t;for(t in e)return!1;return!0},globalEval:function(e,t,n){b(e,{nonce:t&&t.nonce},n)},each:function(e,t){var n,r=0;if(p(e)){for(n=e.length;r<n;r++)if(!1===t.call(e[r],r,e[r]))break}else for(r in e)if(!1===t.call(e[r],r,e[r]))break;return e},makeArray:function(e,t){var n=t||[];return null!=e&&(p(Object(e))?E.merge(n,"string"==typeof e?[e]:e):u.call(n,e)),n},inArray:function(e,t,n){return null==t?-1:i.call(t,e,n)},merge:function(e,t){for(var n=+t.length,r=0,i=e.length;r<n;r++)e[i++]=t[r];return e.length=i,e},grep:function(e,t,n){for(var r=[],i=0,o=e.length,a=!n;i<o;i++)!t(e[i],i)!==a&&r.push(e[i]);return r},map:function(e,t,n){var r,i,o=0,a=[];if(p(e))for(r=e.length;o<r;o++)null!=(i=t(e[o],o,n))&&a.push(i);else for(o in e)null!=(i=t(e[o],o,n))&&a.push(i);return g(a)},guid:1,support:v}),"function"==typeof Symbol&&(E.fn[Symbol.iterator]=t[Symbol.iterator]),E.each("Boolean Number String Function Array Date RegExp Object Error Symbol".split(" "),function(e,t){n["[object "+t+"]"]=t.toLowerCase()});var d=function(n){var e,d,b,o,i,h,f,g,w,u,l,T,C,a,S,y,s,c,v,E="sizzle"+1*new Date,p=n.document,k=0,r=0,m=ue(),x=ue(),A=ue(),N=ue(),j=function(e,t){return e===t&&(l=!0),0},D={}.hasOwnProperty,t=[],q=t.pop,L=t.push,H=t.push,O=t.slice,P=function(e,t){for(var n=0,r=e.length;n<r;n++)if(e[n]===t)return n;return-1},R="checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped",M="[\\x20\\t\\r\\n\\f]",I="(?:\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\[^\\r\\n\\f]|[\\w-]|[^\0-\\x7f])+",W="\\["+M+"*("+I+")(?:"+M+"*([*^$|!~]?=)"+M+"*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|("+I+"))|)"+M+"*\\]",F=":("+I+")(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|"+W+")*)|.*)\\)|)",$=new RegExp(M+"+","g"),B=new RegExp("^"+M+"+|((?:^|[^\\\\])(?:\\\\.)*)"+M+"+$","g"),_=new RegExp("^"+M+"*,"+M+"*"),z=new RegExp("^"+M+"*([>+~]|"+M+")"+M+"*"),U=new RegExp(M+"|>"),X=new RegExp(F),V=new RegExp("^"+I+"$"),G={ID:new RegExp("^#("+I+")"),CLASS:new RegExp("^\\.("+I+")"),TAG:new RegExp("^("+I+"|[*])"),ATTR:new RegExp("^"+W),PSEUDO:new RegExp("^"+F),CHILD:new RegExp("^:(only|first|last|nth|nth-last)-(child|of-type)(?:\\("+M+"*(even|odd|(([+-]|)(\\d*)n|)"+M+"*(?:([+-]|)"+M+"*(\\d+)|))"+M+"*\\)|)","i"),bool:new RegExp("^(?:"+R+")$","i"),needsContext:new RegExp("^"+M+"*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\\("+M+"*((?:-\\d)?\\d*)"+M+"*\\)|)(?=[^-]|$)","i")},Y=/HTML$/i,Q=/^(?:input|select|textarea|button)$/i,J=/^h\d$/i,K=/^[^{]+\{\s*\[native \w/,Z=/^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,ee=/[+~]/,te=new RegExp("\\\\[\\da-fA-F]{1,6}"+M+"?|\\\\([^\\r\\n\\f])","g"),ne=function(e,t){var n="0x"+e.slice(1)-65536;return t||(n<0?String.fromCharCode(n+65536):String.fromCharCode(n>>10|55296,1023&n|56320))},re=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\0-\x1f\x7f-\uFFFF\w-]/g,ie=function(e,t){return t?"\0"===e?"\ufffd":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e},oe=function(){T()},ae=be(function(e){return!0===e.disabled&&"fieldset"===e.nodeName.toLowerCase()},{dir:"parentNode",next:"legend"});try{H.apply(t=O.call(p.childNodes),p.childNodes),t[p.childNodes.length].nodeType}catch(e){H={apply:t.length?function(e,t){L.apply(e,O.call(t))}:function(e,t){var n=e.length,r=0;while(e[n++]=t[r++]);e.length=n-1}}}function se(t,e,n,r){var i,o,a,s,u,l,c,f=e&&e.ownerDocument,p=e?e.nodeType:9;if(n=n||[],"string"!=typeof t||!t||1!==p&&9!==p&&11!==p)return n;if(!r&&(T(e),e=e||C,S)){if(11!==p&&(u=Z.exec(t)))if(i=u[1]){if(9===p){if(!(a=e.getElementById(i)))return n;if(a.id===i)return n.push(a),n}else if(f&&(a=f.getElementById(i))&&v(e,a)&&a.id===i)return n.push(a),n}else{if(u[2])return H.apply(n,e.getElementsByTagName(t)),n;if((i=u[3])&&d.getElementsByClassName&&e.getElementsByClassName)return H.apply(n,e.getElementsByClassName(i)),n}if(d.qsa&&!N[t+" "]&&(!y||!y.test(t))&&(1!==p||"object"!==e.nodeName.toLowerCase())){if(c=t,f=e,1===p&&(U.test(t)||z.test(t))){(f=ee.test(t)&&ve(e.parentNode)||e)===e&&d.scope||((s=e.getAttribute("id"))?s=s.replace(re,ie):e.setAttribute("id",s=E)),o=(l=h(t)).length;while(o--)l[o]=(s?"#"+s:":scope")+" "+xe(l[o]);c=l.join(",")}try{if(d.cssSupportsSelector&&!CSS.supports("selector(:is("+c+"))"))throw new Error;return H.apply(n,f.querySelectorAll(c)),n}catch(e){N(t,!0)}finally{s===E&&e.removeAttribute("id")}}}return g(t.replace(B,"$1"),e,n,r)}function ue(){var r=[];return function e(t,n){return r.push(t+" ")>b.cacheLength&&delete e[r.shift()],e[t+" "]=n}}function le(e){return e[E]=!0,e}function ce(e){var t=C.createElement("fieldset");try{return!!e(t)}catch(e){return!1}finally{t.parentNode&&t.parentNode.removeChild(t),t=null}}function fe(e,t){var n=e.split("|"),r=n.length;while(r--)b.attrHandle[n[r]]=t}function pe(e,t){var n=t&&e,r=n&&1===e.nodeType&&1===t.nodeType&&e.sourceIndex-t.sourceIndex;if(r)return r;if(n)while(n=n.nextSibling)if(n===t)return-1;return e?1:-1}function de(t){return function(e){return"input"===e.nodeName.toLowerCase()&&e.type===t}}function he(n){return function(e){var t=e.nodeName.toLowerCase();return("input"===t||"button"===t)&&e.type===n}}function ge(t){return function(e){return"form"in e?e.parentNode&&!1===e.disabled?"label"in e?"label"in e.parentNode?e.parentNode.disabled===t:e.disabled===t:e.isDisabled===t||e.isDisabled!==!t&&ae(e)===t:e.disabled===t:"label"in e&&e.disabled===t}}function ye(a){return le(function(o){return o=+o,le(function(e,t){var n,r=a([],e.length,o),i=r.length;while(i--)e[n=r[i]]&&(e[n]=!(t[n]=e[n]))})})}function ve(e){return e&&"undefined"!=typeof e.getElementsByTagName&&e}for(e in d=se.support={},i=se.isXML=function(e){var t=e&&e.namespaceURI,n=e&&(e.ownerDocument||e).documentElement;return!Y.test(t||n&&n.nodeName||"HTML")},T=se.setDocument=function(e){var t,n,r=e?e.ownerDocument||e:p;return r!=C&&9===r.nodeType&&r.documentElement&&(a=(C=r).documentElement,S=!i(C),p!=C&&(n=C.defaultView)&&n.top!==n&&(n.addEventListener?n.addEventListener("unload",oe,!1):n.attachEvent&&n.attachEvent("onunload",oe)),d.scope=ce(function(e){return a.appendChild(e).appendChild(C.createElement("div")),"undefined"!=typeof e.querySelectorAll&&!e.querySelectorAll(":scope fieldset div").length}),d.cssSupportsSelector=ce(function(){return CSS.supports("selector(*)")&&C.querySelectorAll(":is(:jqfake)")&&!CSS.supports("selector(:is(*,:jqfake))")}),d.attributes=ce(function(e){return e.className="i",!e.getAttribute("className")}),d.getElementsByTagName=ce(function(e){return e.appendChild(C.createComment("")),!e.getElementsByTagName("*").length}),d.getElementsByClassName=K.test(C.getElementsByClassName),d.getById=ce(function(e){return a.appendChild(e).id=E,!C.getElementsByName||!C.getElementsByName(E).length}),d.getById?(b.filter.ID=function(e){var t=e.replace(te,ne);return function(e){return e.getAttribute("id")===t}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&S){var n=t.getElementById(e);return n?[n]:[]}}):(b.filter.ID=function(e){var n=e.replace(te,ne);return function(e){var t="undefined"!=typeof e.getAttributeNode&&e.getAttributeNode("id");return t&&t.value===n}},b.find.ID=function(e,t){if("undefined"!=typeof t.getElementById&&S){var n,r,i,o=t.getElementById(e);if(o){if((n=o.getAttributeNode("id"))&&n.value===e)return[o];i=t.getElementsByName(e),r=0;while(o=i[r++])if((n=o.getAttributeNode("id"))&&n.value===e)return[o]}return[]}}),b.find.TAG=d.getElementsByTagName?function(e,t){return"undefined"!=typeof t.getElementsByTagName?t.getElementsByTagName(e):d.qsa?t.querySelectorAll(e):void 0}:function(e,t){var n,r=[],i=0,o=t.getElementsByTagName(e);if("*"===e){while(n=o[i++])1===n.nodeType&&r.push(n);return r}return o},b.find.CLASS=d.getElementsByClassName&&function(e,t){if("undefined"!=typeof t.getElementsByClassName&&S)return t.getElementsByClassName(e)},s=[],y=[],(d.qsa=K.test(C.querySelectorAll))&&(ce(function(e){var t;a.appendChild(e).innerHTML="<a id='"+E+"'></a><select id='"+E+"-\r\\' msallowcapture=''><option selected=''></option></select>",e.querySelectorAll("[msallowcapture^='']").length&&y.push("[*^$]="+M+"*(?:''|\"\")"),e.querySelectorAll("[selected]").length||y.push("\\["+M+"*(?:value|"+R+")"),e.querySelectorAll("[id~="+E+"-]").length||y.push("~="),(t=C.createElement("input")).setAttribute("name",""),e.appendChild(t),e.querySelectorAll("[name='']").length||y.push("\\["+M+"*name"+M+"*="+M+"*(?:''|\"\")"),e.querySelectorAll(":checked").length||y.push(":checked"),e.querySelectorAll("a#"+E+"+*").length||y.push(".#.+[+~]"),e.querySelectorAll("\\\f"),y.push("[\\r\\n\\f]")}),ce(function(e){e.innerHTML="<a href='' disabled='disabled'></a><select disabled='disabled'><option/></select>";var t=C.createElement("input");t.setAttribute("type","hidden"),e.appendChild(t).setAttribute("name","D"),e.querySelectorAll("[name=d]").length&&y.push("name"+M+"*[*^$|!~]?="),2!==e.querySelectorAll(":enabled").length&&y.push(":enabled",":disabled"),a.appendChild(e).disabled=!0,2!==e.querySelectorAll(":disabled").length&&y.push(":enabled",":disabled"),e.querySelectorAll("*,:x"),y.push(",.*:")})),(d.matchesSelector=K.test(c=a.matches||a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.msMatchesSelector))&&ce(function(e){d.disconnectedMatch=c.call(e,"*"),c.call(e,"[s!='']:x"),s.push("!=",F)}),d.cssSupportsSelector||y.push(":has"),y=y.length&&new RegExp(y.join("|")),s=s.length&&new RegExp(s.join("|")),t=K.test(a.compareDocumentPosition),v=t||K.test(a.contains)?function(e,t){var n=9===e.nodeType&&e.documentElement||e,r=t&&t.parentNode;return e===r||!(!r||1!==r.nodeType||!(n.contains?n.contains(r):e.compareDocumentPosition&&16&e.compareDocumentPosition(r)))}:function(e,t){if(t)while(t=t.parentNode)if(t===e)return!0;return!1},j=t?function(e,t){if(e===t)return l=!0,0;var n=!e.compareDocumentPosition-!t.compareDocumentPosition;return n||(1&(n=(e.ownerDocument||e)==(t.ownerDocument||t)?e.compareDocumentPosition(t):1)||!d.sortDetached&&t.compareDocumentPosition(e)===n?e==C||e.ownerDocument==p&&v(p,e)?-1:t==C||t.ownerDocument==p&&v(p,t)?1:u?P(u,e)-P(u,t):0:4&n?-1:1)}:function(e,t){if(e===t)return l=!0,0;var n,r=0,i=e.parentNode,o=t.parentNode,a=[e],s=[t];if(!i||!o)return e==C?-1:t==C?1:i?-1:o?1:u?P(u,e)-P(u,t):0;if(i===o)return pe(e,t);n=e;while(n=n.parentNode)a.unshift(n);n=t;while(n=n.parentNode)s.unshift(n);while(a[r]===s[r])r++;return r?pe(a[r],s[r]):a[r]==p?-1:s[r]==p?1:0}),C},se.matches=function(e,t){return se(e,null,null,t)},se.matchesSelector=function(e,t){if(T(e),d.matchesSelector&&S&&!N[t+" "]&&(!s||!s.test(t))&&(!y||!y.test(t)))try{var n=c.call(e,t);if(n||d.disconnectedMatch||e.document&&11!==e.document.nodeType)return n}catch(e){N(t,!0)}return 0<se(t,C,null,[e]).length},se.contains=function(e,t){return(e.ownerDocument||e)!=C&&T(e),v(e,t)},se.attr=function(e,t){(e.ownerDocument||e)!=C&&T(e);var n=b.attrHandle[t.toLowerCase()],r=n&&D.call(b.attrHandle,t.toLowerCase())?n(e,t,!S):void 0;return void 0!==r?r:d.attributes||!S?e.getAttribute(t):(r=e.getAttributeNode(t))&&r.specified?r.value:null},se.escape=function(e){return(e+"").replace(re,ie)},se.error=function(e){throw new Error("Syntax error, unrecognized expression: "+e)},se.uniqueSort=function(e){var t,n=[],r=0,i=0;if(l=!d.detectDuplicates,u=!d.sortStable&&e.slice(0),e.sort(j),l){while(t=e[i++])t===e[i]&&(r=n.push(i));while(r--)e.splice(n[r],1)}return u=null,e},o=se.getText=function(e){var t,n="",r=0,i=e.nodeType;if(i){if(1===i||9===i||11===i){if("string"==typeof e.textContent)return e.textContent;for(e=e.firstChild;e;e=e.nextSibling)n+=o(e)}else if(3===i||4===i)return e.nodeValue}else while(t=e[r++])n+=o(t);return n},(b=se.selectors={cacheLength:50,createPseudo:le,match:G,attrHandle:{},find:{},relative:{">":{dir:"parentNode",first:!0}," ":{dir:"parentNode"},"+":{dir:"previousSibling",first:!0},"~":{dir:"previousSibling"}},preFilter:{ATTR:function(e){return e[1]=e[1].replace(te,ne),e[3]=(e[3]||e[4]||e[5]||"").replace(te,ne),"~="===e[2]&&(e[3]=" "+e[3]+" "),e.slice(0,4)},CHILD:function(e){return e[1]=e[1].toLowerCase(),"nth"===e[1].slice(0,3)?(e[3]||se.error(e[0]),e[4]=+(e[4]?e[5]+(e[6]||1):2*("even"===e[3]||"odd"===e[3])),e[5]=+(e[7]+e[8]||"odd"===e[3])):e[3]&&se.error(e[0]),e},PSEUDO:function(e){var t,n=!e[6]&&e[2];return G.CHILD.test(e[0])?null:(e[3]?e[2]=e[4]||e[5]||"":n&&X.test(n)&&(t=h(n,!0))&&(t=n.indexOf(")",n.length-t)-n.length)&&(e[0]=e[0].slice(0,t),e[2]=n.slice(0,t)),e.slice(0,3))}},filter:{TAG:function(e){var t=e.replace(te,ne).toLowerCase();return"*"===e?function(){return!0}:function(e){return e.nodeName&&e.nodeName.toLowerCase()===t}},CLASS:function(e){var t=m[e+" "];return t||(t=new RegExp("(^|"+M+")"+e+"("+M+"|$)"))&&m(e,function(e){return t.test("string"==typeof e.className&&e.className||"undefined"!=typeof e.getAttribute&&e.getAttribute("class")||"")})},ATTR:function(n,r,i){return function(e){var t=se.attr(e,n);return null==t?"!="===r:!r||(t+="","="===r?t===i:"!="===r?t!==i:"^="===r?i&&0===t.indexOf(i):"*="===r?i&&-1<t.indexOf(i):"$="===r?i&&t.slice(-i.length)===i:"~="===r?-1<(" "+t.replace($," ")+" ").indexOf(i):"|="===r&&(t===i||t.slice(0,i.length+1)===i+"-"))}},CHILD:function(h,e,t,g,y){var v="nth"!==h.slice(0,3),m="last"!==h.slice(-4),x="of-type"===e;return 1===g&&0===y?function(e){return!!e.parentNode}:function(e,t,n){var r,i,o,a,s,u,l=v!==m?"nextSibling":"previousSibling",c=e.parentNode,f=x&&e.nodeName.toLowerCase(),p=!n&&!x,d=!1;if(c){if(v){while(l){a=e;while(a=a[l])if(x?a.nodeName.toLowerCase()===f:1===a.nodeType)return!1;u=l="only"===h&&!u&&"nextSibling"}return!0}if(u=[m?c.firstChild:c.lastChild],m&&p){d=(s=(r=(i=(o=(a=c)[E]||(a[E]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1])&&r[2],a=s&&c.childNodes[s];while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if(1===a.nodeType&&++d&&a===e){i[h]=[k,s,d];break}}else if(p&&(d=s=(r=(i=(o=(a=e)[E]||(a[E]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]||[])[0]===k&&r[1]),!1===d)while(a=++s&&a&&a[l]||(d=s=0)||u.pop())if((x?a.nodeName.toLowerCase()===f:1===a.nodeType)&&++d&&(p&&((i=(o=a[E]||(a[E]={}))[a.uniqueID]||(o[a.uniqueID]={}))[h]=[k,d]),a===e))break;return(d-=y)===g||d%g==0&&0<=d/g}}},PSEUDO:function(e,o){var t,a=b.pseudos[e]||b.setFilters[e.toLowerCase()]||se.error("unsupported pseudo: "+e);return a[E]?a(o):1<a.length?(t=[e,e,"",o],b.setFilters.hasOwnProperty(e.toLowerCase())?le(function(e,t){var n,r=a(e,o),i=r.length;while(i--)e[n=P(e,r[i])]=!(t[n]=r[i])}):function(e){return a(e,0,t)}):a}},pseudos:{not:le(function(e){var r=[],i=[],s=f(e.replace(B,"$1"));return s[E]?le(function(e,t,n,r){var i,o=s(e,null,r,[]),a=e.length;while(a--)(i=o[a])&&(e[a]=!(t[a]=i))}):function(e,t,n){return r[0]=e,s(r,null,n,i),r[0]=null,!i.pop()}}),has:le(function(t){return function(e){return 0<se(t,e).length}}),contains:le(function(t){return t=t.replace(te,ne),function(e){return-1<(e.textContent||o(e)).indexOf(t)}}),lang:le(function(n){return V.test(n||"")||se.error("unsupported lang: "+n),n=n.replace(te,ne).toLowerCase(),function(e){var t;do{if(t=S?e.lang:e.getAttribute("xml:lang")||e.getAttribute("lang"))return(t=t.toLowerCase())===n||0===t.indexOf(n+"-")}while((e=e.parentNode)&&1===e.nodeType);return!1}}),target:function(e){var t=n.location&&n.location.hash;return t&&t.slice(1)===e.id},root:function(e){return e===a},focus:function(e){return e===C.activeElement&&(!C.hasFocus||C.hasFocus())&&!!(e.type||e.href||~e.tabIndex)},enabled:ge(!1),disabled:ge(!0),checked:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&!!e.checked||"option"===t&&!!e.selected},selected:function(e){return e.parentNode&&e.parentNode.selectedIndex,!0===e.selected},empty:function(e){for(e=e.firstChild;e;e=e.nextSibling)if(e.nodeType<6)return!1;return!0},parent:function(e){return!b.pseudos.empty(e)},header:function(e){return J.test(e.nodeName)},input:function(e){return Q.test(e.nodeName)},button:function(e){var t=e.nodeName.toLowerCase();return"input"===t&&"button"===e.type||"button"===t},text:function(e){var t;return"input"===e.nodeName.toLowerCase()&&"text"===e.type&&(null==(t=e.getAttribute("type"))||"text"===t.toLowerCase())},first:ye(function(){return[0]}),last:ye(function(e,t){return[t-1]}),eq:ye(function(e,t,n){return[n<0?n+t:n]}),even:ye(function(e,t){for(var n=0;n<t;n+=2)e.push(n);return e}),odd:ye(function(e,t){for(var n=1;n<t;n+=2)e.push(n);return e}),lt:ye(function(e,t,n){for(var r=n<0?n+t:t<n?t:n;0<=--r;)e.push(r);return e}),gt:ye(function(e,t,n){for(var r=n<0?n+t:n;++r<t;)e.push(r);return e})}}).pseudos.nth=b.pseudos.eq,{radio:!0,checkbox:!0,file:!0,password:!0,image:!0})b.pseudos[e]=de(e);for(e in{submit:!0,reset:!0})b.pseudos[e]=he(e);function me(){}function xe(e){for(var t=0,n=e.length,r="";t<n;t++)r+=e[t].value;return r}function be(s,e,t){var u=e.dir,l=e.next,c=l||u,f=t&&"parentNode"===c,p=r++;return e.first?function(e,t,n){while(e=e[u])if(1===e.nodeType||f)return s(e,t,n);return!1}:function(e,t,n){var r,i,o,a=[k,p];if(n){while(e=e[u])if((1===e.nodeType||f)&&s(e,t,n))return!0}else while(e=e[u])if(1===e.nodeType||f)if(i=(o=e[E]||(e[E]={}))[e.uniqueID]||(o[e.uniqueID]={}),l&&l===e.nodeName.toLowerCase())e=e[u]||e;else{if((r=i[c])&&r[0]===k&&r[1]===p)return a[2]=r[2];if((i[c]=a)[2]=s(e,t,n))return!0}return!1}}function we(i){return 1<i.length?function(e,t,n){var r=i.length;while(r--)if(!i[r](e,t,n))return!1;return!0}:i[0]}function Te(e,t,n,r,i){for(var o,a=[],s=0,u=e.length,l=null!=t;s<u;s++)(o=e[s])&&(n&&!n(o,r,i)||(a.push(o),l&&t.push(s)));return a}function Ce(d,h,g,y,v,e){return y&&!y[E]&&(y=Ce(y)),v&&!v[E]&&(v=Ce(v,e)),le(function(e,t,n,r){var i,o,a,s=[],u=[],l=t.length,c=e||function(e,t,n){for(var r=0,i=t.length;r<i;r++)se(e,t[r],n);return n}(h||"*",n.nodeType?[n]:n,[]),f=!d||!e&&h?c:Te(c,s,d,n,r),p=g?v||(e?d:l||y)?[]:t:f;if(g&&g(f,p,n,r),y){i=Te(p,u),y(i,[],n,r),o=i.length;while(o--)(a=i[o])&&(p[u[o]]=!(f[u[o]]=a))}if(e){if(v||d){if(v){i=[],o=p.length;while(o--)(a=p[o])&&i.push(f[o]=a);v(null,p=[],i,r)}o=p.length;while(o--)(a=p[o])&&-1<(i=v?P(e,a):s[o])&&(e[i]=!(t[i]=a))}}else p=Te(p===t?p.splice(l,p.length):p),v?v(null,t,p,r):H.apply(t,p)})}function Se(e){for(var i,t,n,r=e.length,o=b.relative[e[0].type],a=o||b.relative[" "],s=o?1:0,u=be(function(e){return e===i},a,!0),l=be(function(e){return-1<P(i,e)},a,!0),c=[function(e,t,n){var r=!o&&(n||t!==w)||((i=t).nodeType?u(e,t,n):l(e,t,n));return i=null,r}];s<r;s++)if(t=b.relative[e[s].type])c=[be(we(c),t)];else{if((t=b.filter[e[s].type].apply(null,e[s].matches))[E]){for(n=++s;n<r;n++)if(b.relative[e[n].type])break;return Ce(1<s&&we(c),1<s&&xe(e.slice(0,s-1).concat({value:" "===e[s-2].type?"*":""})).replace(B,"$1"),t,s<n&&Se(e.slice(s,n)),n<r&&Se(e=e.slice(n)),n<r&&xe(e))}c.push(t)}return we(c)}return me.prototype=b.filters=b.pseudos,b.setFilters=new me,h=se.tokenize=function(e,t){var n,r,i,o,a,s,u,l=x[e+" "];if(l)return t?0:l.slice(0);a=e,s=[],u=b.preFilter;while(a){for(o in n&&!(r=_.exec(a))||(r&&(a=a.slice(r[0].length)||a),s.push(i=[])),n=!1,(r=z.exec(a))&&(n=r.shift(),i.push({value:n,type:r[0].replace(B," ")}),a=a.slice(n.length)),b.filter)!(r=G[o].exec(a))||u[o]&&!(r=u[o](r))||(n=r.shift(),i.push({value:n,type:o,matches:r}),a=a.slice(n.length));if(!n)break}return t?a.length:a?se.error(e):x(e,s).slice(0)},f=se.compile=function(e,t){var n,y,v,m,x,r,i=[],o=[],a=A[e+" "];if(!a){t||(t=h(e)),n=t.length;while(n--)(a=Se(t[n]))[E]?i.push(a):o.push(a);(a=A(e,(y=o,m=0<(v=i).length,x=0<y.length,r=function(e,t,n,r,i){var o,a,s,u=0,l="0",c=e&&[],f=[],p=w,d=e||x&&b.find.TAG("*",i),h=k+=null==p?1:Math.random()||.1,g=d.length;for(i&&(w=t==C||t||i);l!==g&&null!=(o=d[l]);l++){if(x&&o){a=0,t||o.ownerDocument==C||(T(o),n=!S);while(s=y[a++])if(s(o,t||C,n)){r.push(o);break}i&&(k=h)}m&&((o=!s&&o)&&u--,e&&c.push(o))}if(u+=l,m&&l!==u){a=0;while(s=v[a++])s(c,f,t,n);if(e){if(0<u)while(l--)c[l]||f[l]||(f[l]=q.call(r));f=Te(f)}H.apply(r,f),i&&!e&&0<f.length&&1<u+v.length&&se.uniqueSort(r)}return i&&(k=h,w=p),c},m?le(r):r))).selector=e}return a},g=se.select=function(e,t,n,r){var i,o,a,s,u,l="function"==typeof e&&e,c=!r&&h(e=l.selector||e);if(n=n||[],1===c.length){if(2<(o=c[0]=c[0].slice(0)).length&&"ID"===(a=o[0]).type&&9===t.nodeType&&S&&b.relative[o[1].type]){if(!(t=(b.find.ID(a.matches[0].replace(te,ne),t)||[])[0]))return n;l&&(t=t.parentNode),e=e.slice(o.shift().value.length)}i=G.needsContext.test(e)?0:o.length;while(i--){if(a=o[i],b.relative[s=a.type])break;if((u=b.find[s])&&(r=u(a.matches[0].replace(te,ne),ee.test(o[0].type)&&ve(t.parentNode)||t))){if(o.splice(i,1),!(e=r.length&&xe(o)))return H.apply(n,r),n;break}}}return(l||f(e,c))(r,t,!S,n,!t||ee.test(e)&&ve(t.parentNode)||t),n},d.sortStable=E.split("").sort(j).join("")===E,d.detectDuplicates=!!l,T(),d.sortDetached=ce(function(e){return 1&e.compareDocumentPosition(C.createElement("fieldset"))}),ce(function(e){return e.innerHTML="<a href='#'></a>","#"===e.firstChild.getAttribute("href")})||fe("type|href|height|width",function(e,t,n){if(!n)return e.getAttribute(t,"type"===t.toLowerCase()?1:2)}),d.attributes&&ce(function(e){return e.innerHTML="<input/>",e.firstChild.setAttribute("value",""),""===e.firstChild.getAttribute("value")})||fe("value",function(e,t,n){if(!n&&"input"===e.nodeName.toLowerCase())return e.defaultValue}),ce(function(e){return null==e.getAttribute("disabled")})||fe(R,function(e,t,n){var r;if(!n)return!0===e[t]?t.toLowerCase():(r=e.getAttributeNode(t))&&r.specified?r.value:null}),se}(C);E.find=d,E.expr=d.selectors,E.expr[":"]=E.expr.pseudos,E.uniqueSort=E.unique=d.uniqueSort,E.text=d.getText,E.isXMLDoc=d.isXML,E.contains=d.contains,E.escapeSelector=d.escape;var h=function(e,t,n){var r=[],i=void 0!==n;while((e=e[t])&&9!==e.nodeType)if(1===e.nodeType){if(i&&E(e).is(n))break;r.push(e)}return r},T=function(e,t){for(var n=[];e;e=e.nextSibling)1===e.nodeType&&e!==t&&n.push(e);return n},k=E.expr.match.needsContext;function A(e,t){return e.nodeName&&e.nodeName.toLowerCase()===t.toLowerCase()}var N=/^<([a-z][^\/\0>:\x20\t\r\n\f]*)[\x20\t\r\n\f]*\/?>(?:<\/\1>|)$/i;function j(e,n,r){return m(n)?E.grep(e,function(e,t){return!!n.call(e,t,e)!==r}):n.nodeType?E.grep(e,function(e){return e===n!==r}):"string"!=typeof n?E.grep(e,function(e){return-1<i.call(n,e)!==r}):E.filter(n,e,r)}E.filter=function(e,t,n){var r=t[0];return n&&(e=":not("+e+")"),1===t.length&&1===r.nodeType?E.find.matchesSelector(r,e)?[r]:[]:E.find.matches(e,E.grep(t,function(e){return 1===e.nodeType}))},E.fn.extend({find:function(e){var t,n,r=this.length,i=this;if("string"!=typeof e)return this.pushStack(E(e).filter(function(){for(t=0;t<r;t++)if(E.contains(i[t],this))return!0}));for(n=this.pushStack([]),t=0;t<r;t++)E.find(e,i[t],n);return 1<r?E.uniqueSort(n):n},filter:function(e){return this.pushStack(j(this,e||[],!1))},not:function(e){return this.pushStack(j(this,e||[],!0))},is:function(e){return!!j(this,"string"==typeof e&&k.test(e)?E(e):e||[],!1).length}});var D,q=/^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]+))$/;(E.fn.init=function(e,t,n){var r,i;if(!e)return this;if(n=n||D,"string"==typeof e){if(!(r="<"===e[0]&&">"===e[e.length-1]&&3<=e.length?[null,e,null]:q.exec(e))||!r[1]&&t)return!t||t.jquery?(t||n).find(e):this.constructor(t).find(e);if(r[1]){if(t=t instanceof E?t[0]:t,E.merge(this,E.parseHTML(r[1],t&&t.nodeType?t.ownerDocument||t:S,!0)),N.test(r[1])&&E.isPlainObject(t))for(r in t)m(this[r])?this[r](t[r]):this.attr(r,t[r]);return this}return(i=S.getElementById(r[2]))&&(this[0]=i,this.length=1),this}return e.nodeType?(this[0]=e,this.length=1,this):m(e)?void 0!==n.ready?n.ready(e):e(E):E.makeArray(e,this)}).prototype=E.fn,D=E(S);var L=/^(?:parents|prev(?:Until|All))/,H={children:!0,contents:!0,next:!0,prev:!0};function O(e,t){while((e=e[t])&&1!==e.nodeType);return e}E.fn.extend({has:function(e){var t=E(e,this),n=t.length;return this.filter(function(){for(var e=0;e<n;e++)if(E.contains(this,t[e]))return!0})},closest:function(e,t){var n,r=0,i=this.length,o=[],a="string"!=typeof e&&E(e);if(!k.test(e))for(;r<i;r++)for(n=this[r];n&&n!==t;n=n.parentNode)if(n.nodeType<11&&(a?-1<a.index(n):1===n.nodeType&&E.find.matchesSelector(n,e))){o.push(n);break}return this.pushStack(1<o.length?E.uniqueSort(o):o)},index:function(e){return e?"string"==typeof e?i.call(E(e),this[0]):i.call(this,e.jquery?e[0]:e):this[0]&&this[0].parentNode?this.first().prevAll().length:-1},add:function(e,t){return this.pushStack(E.uniqueSort(E.merge(this.get(),E(e,t))))},addBack:function(e){return this.add(null==e?this.prevObject:this.prevObject.filter(e))}}),E.each({parent:function(e){var t=e.parentNode;return t&&11!==t.nodeType?t:null},parents:function(e){return h(e,"parentNode")},parentsUntil:function(e,t,n){return h(e,"parentNode",n)},next:function(e){return O(e,"nextSibling")},prev:function(e){return O(e,"previousSibling")},nextAll:function(e){return h(e,"nextSibling")},prevAll:function(e){return h(e,"previousSibling")},nextUntil:function(e,t,n){return h(e,"nextSibling",n)},prevUntil:function(e,t,n){return h(e,"previousSibling",n)},siblings:function(e){return T((e.parentNode||{}).firstChild,e)},children:function(e){return T(e.firstChild)},contents:function(e){return null!=e.contentDocument&&r(e.contentDocument)?e.contentDocument:(A(e,"template")&&(e=e.content||e),E.merge([],e.childNodes))}},function(r,i){E.fn[r]=function(e,t){var n=E.map(this,i,e);return"Until"!==r.slice(-5)&&(t=e),t&&"string"==typeof t&&(n=E.filter(t,n)),1<this.length&&(H[r]||E.uniqueSort(n),L.test(r)&&n.reverse()),this.pushStack(n)}});var P=/[^\x20\t\r\n\f]+/g;function R(e){return e}function M(e){throw e}function I(e,t,n,r){var i;try{e&&m(i=e.promise)?i.call(e).done(t).fail(n):e&&m(i=e.then)?i.call(e,t,n):t.apply(void 0,[e].slice(r))}catch(e){n.apply(void 0,[e])}}E.Callbacks=function(r){var e,n;r="string"==typeof r?(e=r,n={},E.each(e.match(P)||[],function(e,t){n[t]=!0}),n):E.extend({},r);var i,t,o,a,s=[],u=[],l=-1,c=function(){for(a=a||r.once,o=i=!0;u.length;l=-1){t=u.shift();while(++l<s.length)!1===s[l].apply(t[0],t[1])&&r.stopOnFalse&&(l=s.length,t=!1)}r.memory||(t=!1),i=!1,a&&(s=t?[]:"")},f={add:function(){return s&&(t&&!i&&(l=s.length-1,u.push(t)),function n(e){E.each(e,function(e,t){m(t)?r.unique&&f.has(t)||s.push(t):t&&t.length&&"string"!==w(t)&&n(t)})}(arguments),t&&!i&&c()),this},remove:function(){return E.each(arguments,function(e,t){var n;while(-1<(n=E.inArray(t,s,n)))s.splice(n,1),n<=l&&l--}),this},has:function(e){return e?-1<E.inArray(e,s):0<s.length},empty:function(){return s&&(s=[]),this},disable:function(){return a=u=[],s=t="",this},disabled:function(){return!s},lock:function(){return a=u=[],t||i||(s=t=""),this},locked:function(){return!!a},fireWith:function(e,t){return a||(t=[e,(t=t||[]).slice?t.slice():t],u.push(t),i||c()),this},fire:function(){return f.fireWith(this,arguments),this},fired:function(){return!!o}};return f},E.extend({Deferred:function(e){var o=[["notify","progress",E.Callbacks("memory"),E.Callbacks("memory"),2],["resolve","done",E.Callbacks("once memory"),E.Callbacks("once memory"),0,"resolved"],["reject","fail",E.Callbacks("once memory"),E.Callbacks("once memory"),1,"rejected"]],i="pending",a={state:function(){return i},always:function(){return s.done(arguments).fail(arguments),this},"catch":function(e){return a.then(null,e)},pipe:function(){var i=arguments;return E.Deferred(function(r){E.each(o,function(e,t){var n=m(i[t[4]])&&i[t[4]];s[t[1]](function(){var e=n&&n.apply(this,arguments);e&&m(e.promise)?e.promise().progress(r.notify).done(r.resolve).fail(r.reject):r[t[0]+"With"](this,n?[e]:arguments)})}),i=null}).promise()},then:function(t,n,r){var u=0;function l(i,o,a,s){return function(){var n=this,r=arguments,e=function(){var e,t;if(!(i<u)){if((e=a.apply(n,r))===o.promise())throw new TypeError("Thenable self-resolution");t=e&&("object"==typeof e||"function"==typeof e)&&e.then,m(t)?s?t.call(e,l(u,o,R,s),l(u,o,M,s)):(u++,t.call(e,l(u,o,R,s),l(u,o,M,s),l(u,o,R,o.notifyWith))):(a!==R&&(n=void 0,r=[e]),(s||o.resolveWith)(n,r))}},t=s?e:function(){try{e()}catch(e){E.Deferred.exceptionHook&&E.Deferred.exceptionHook(e,t.stackTrace),u<=i+1&&(a!==M&&(n=void 0,r=[e]),o.rejectWith(n,r))}};i?t():(E.Deferred.getStackHook&&(t.stackTrace=E.Deferred.getStackHook()),C.setTimeout(t))}}return E.Deferred(function(e){o[0][3].add(l(0,e,m(r)?r:R,e.notifyWith)),o[1][3].add(l(0,e,m(t)?t:R)),o[2][3].add(l(0,e,m(n)?n:M))}).promise()},promise:function(e){return null!=e?E.extend(e,a):a}},s={};return E.each(o,function(e,t){var n=t[2],r=t[5];a[t[1]]=n.add,r&&n.add(function(){i=r},o[3-e][2].disable,o[3-e][3].disable,o[0][2].lock,o[0][3].lock),n.add(t[3].fire),s[t[0]]=function(){return s[t[0]+"With"](this===s?void 0:this,arguments),this},s[t[0]+"With"]=n.fireWith}),a.promise(s),e&&e.call(s,s),s},when:function(e){var n=arguments.length,t=n,r=Array(t),i=s.call(arguments),o=E.Deferred(),a=function(t){return function(e){r[t]=this,i[t]=1<arguments.length?s.call(arguments):e,--n||o.resolveWith(r,i)}};if(n<=1&&(I(e,o.done(a(t)).resolve,o.reject,!n),"pending"===o.state()||m(i[t]&&i[t].then)))return o.then();while(t--)I(i[t],a(t),o.reject);return o.promise()}});var W=/^(Eval|Internal|Range|Reference|Syntax|Type|URI)Error$/;E.Deferred.exceptionHook=function(e,t){C.console&&C.console.warn&&e&&W.test(e.name)&&C.console.warn("jQuery.Deferred exception: "+e.message,e.stack,t)},E.readyException=function(e){C.setTimeout(function(){throw e})};var F=E.Deferred();function $(){S.removeEventListener("DOMContentLoaded",$),C.removeEventListener("load",$),E.ready()}E.fn.ready=function(e){return F.then(e)["catch"](function(e){E.readyException(e)}),this},E.extend({isReady:!1,readyWait:1,ready:function(e){(!0===e?--E.readyWait:E.isReady)||(E.isReady=!0)!==e&&0<--E.readyWait||F.resolveWith(S,[E])}}),E.ready.then=F.then,"complete"===S.readyState||"loading"!==S.readyState&&!S.documentElement.doScroll?C.setTimeout(E.ready):(S.addEventListener("DOMContentLoaded",$),C.addEventListener("load",$));var B=function(e,t,n,r,i,o,a){var s=0,u=e.length,l=null==n;if("object"===w(n))for(s in i=!0,n)B(e,t,s,n[s],!0,o,a);else if(void 0!==r&&(i=!0,m(r)||(a=!0),l&&(a?(t.call(e,r),t=null):(l=t,t=function(e,t,n){return l.call(E(e),n)})),t))for(;s<u;s++)t(e[s],n,a?r:r.call(e[s],s,t(e[s],n)));return i?e:l?t.call(e):u?t(e[0],n):o},_=/^-ms-/,z=/-([a-z])/g;function U(e,t){return t.toUpperCase()}function X(e){return e.replace(_,"ms-").replace(z,U)}var V=function(e){return 1===e.nodeType||9===e.nodeType||!+e.nodeType};function G(){this.expando=E.expando+G.uid++}G.uid=1,G.prototype={cache:function(e){var t=e[this.expando];return t||(t={},V(e)&&(e.nodeType?e[this.expando]=t:Object.defineProperty(e,this.expando,{value:t,configurable:!0}))),t},set:function(e,t,n){var r,i=this.cache(e);if("string"==typeof t)i[X(t)]=n;else for(r in t)i[X(r)]=t[r];return i},get:function(e,t){return void 0===t?this.cache(e):e[this.expando]&&e[this.expando][X(t)]},access:function(e,t,n){return void 0===t||t&&"string"==typeof t&&void 0===n?this.get(e,t):(this.set(e,t,n),void 0!==n?n:t)},remove:function(e,t){var n,r=e[this.expando];if(void 0!==r){if(void 0!==t){n=(t=Array.isArray(t)?t.map(X):(t=X(t))in r?[t]:t.match(P)||[]).length;while(n--)delete r[t[n]]}(void 0===t||E.isEmptyObject(r))&&(e.nodeType?e[this.expando]=void 0:delete e[this.expando])}},hasData:function(e){var t=e[this.expando];return void 0!==t&&!E.isEmptyObject(t)}};var Y=new G,Q=new G,J=/^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,K=/[A-Z]/g;function Z(e,t,n){var r,i;if(void 0===n&&1===e.nodeType)if(r="data-"+t.replace(K,"-$&").toLowerCase(),"string"==typeof(n=e.getAttribute(r))){try{n="true"===(i=n)||"false"!==i&&("null"===i?null:i===+i+""?+i:J.test(i)?JSON.parse(i):i)}catch(e){}Q.set(e,t,n)}else n=void 0;return n}E.extend({hasData:function(e){return Q.hasData(e)||Y.hasData(e)},data:function(e,t,n){return Q.access(e,t,n)},removeData:function(e,t){Q.remove(e,t)},_data:function(e,t,n){return Y.access(e,t,n)},_removeData:function(e,t){Y.remove(e,t)}}),E.fn.extend({data:function(n,e){var t,r,i,o=this[0],a=o&&o.attributes;if(void 0===n){if(this.length&&(i=Q.get(o),1===o.nodeType&&!Y.get(o,"hasDataAttrs"))){t=a.length;while(t--)a[t]&&0===(r=a[t].name).indexOf("data-")&&(r=X(r.slice(5)),Z(o,r,i[r]));Y.set(o,"hasDataAttrs",!0)}return i}return"object"==typeof n?this.each(function(){Q.set(this,n)}):B(this,function(e){var t;if(o&&void 0===e)return void 0!==(t=Q.get(o,n))?t:void 0!==(t=Z(o,n))?t:void 0;this.each(function(){Q.set(this,n,e)})},null,e,1<arguments.length,null,!0)},removeData:function(e){return this.each(function(){Q.remove(this,e)})}}),E.extend({queue:function(e,t,n){var r;if(e)return t=(t||"fx")+"queue",r=Y.get(e,t),n&&(!r||Array.isArray(n)?r=Y.access(e,t,E.makeArray(n)):r.push(n)),r||[]},dequeue:function(e,t){t=t||"fx";var n=E.queue(e,t),r=n.length,i=n.shift(),o=E._queueHooks(e,t);"inprogress"===i&&(i=n.shift(),r--),i&&("fx"===t&&n.unshift("inprogress"),delete o.stop,i.call(e,function(){E.dequeue(e,t)},o)),!r&&o&&o.empty.fire()},_queueHooks:function(e,t){var n=t+"queueHooks";return Y.get(e,n)||Y.access(e,n,{empty:E.Callbacks("once memory").add(function(){Y.remove(e,[t+"queue",n])})})}}),E.fn.extend({queue:function(t,n){var e=2;return"string"!=typeof t&&(n=t,t="fx",e--),arguments.length<e?E.queue(this[0],t):void 0===n?this:this.each(function(){var e=E.queue(this,t,n);E._queueHooks(this,t),"fx"===t&&"inprogress"!==e[0]&&E.dequeue(this,t)})},dequeue:function(e){return this.each(function(){E.dequeue(this,e)})},clearQueue:function(e){return this.queue(e||"fx",[])},promise:function(e,t){var n,r=1,i=E.Deferred(),o=this,a=this.length,s=function(){--r||i.resolveWith(o,[o])};"string"!=typeof e&&(t=e,e=void 0),e=e||"fx";while(a--)(n=Y.get(o[a],e+"queueHooks"))&&n.empty&&(r++,n.empty.add(s));return s(),i.promise(t)}});var ee=/[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,te=new RegExp("^(?:([+-])=|)("+ee+")([a-z%]*)$","i"),ne=["Top","Right","Bottom","Left"],re=S.documentElement,ie=function(e){return E.contains(e.ownerDocument,e)},oe={composed:!0};re.getRootNode&&(ie=function(e){return E.contains(e.ownerDocument,e)||e.getRootNode(oe)===e.ownerDocument});var ae=function(e,t){return"none"===(e=t||e).style.display||""===e.style.display&&ie(e)&&"none"===E.css(e,"display")};function se(e,t,n,r){var i,o,a=20,s=r?function(){return r.cur()}:function(){return E.css(e,t,"")},u=s(),l=n&&n[3]||(E.cssNumber[t]?"":"px"),c=e.nodeType&&(E.cssNumber[t]||"px"!==l&&+u)&&te.exec(E.css(e,t));if(c&&c[3]!==l){u/=2,l=l||c[3],c=+u||1;while(a--)E.style(e,t,c+l),(1-o)*(1-(o=s()/u||.5))<=0&&(a=0),c/=o;c*=2,E.style(e,t,c+l),n=n||[]}return n&&(c=+c||+u||0,i=n[1]?c+(n[1]+1)*n[2]:+n[2],r&&(r.unit=l,r.start=c,r.end=i)),i}var ue={};function le(e,t){for(var n,r,i,o,a,s,u,l=[],c=0,f=e.length;c<f;c++)(r=e[c]).style&&(n=r.style.display,t?("none"===n&&(l[c]=Y.get(r,"display")||null,l[c]||(r.style.display="")),""===r.style.display&&ae(r)&&(l[c]=(u=a=o=void 0,a=(i=r).ownerDocument,s=i.nodeName,(u=ue[s])||(o=a.body.appendChild(a.createElement(s)),u=E.css(o,"display"),o.parentNode.removeChild(o),"none"===u&&(u="block"),ue[s]=u)))):"none"!==n&&(l[c]="none",Y.set(r,"display",n)));for(c=0;c<f;c++)null!=l[c]&&(e[c].style.display=l[c]);return e}E.fn.extend({show:function(){return le(this,!0)},hide:function(){return le(this)},toggle:function(e){return"boolean"==typeof e?e?this.show():this.hide():this.each(function(){ae(this)?E(this).show():E(this).hide()})}});var ce,fe,pe=/^(?:checkbox|radio)$/i,de=/<([a-z][^\/\0>\x20\t\r\n\f]*)/i,he=/^$|^module$|\/(?:java|ecma)script/i;ce=S.createDocumentFragment().appendChild(S.createElement("div")),(fe=S.createElement("input")).setAttribute("type","radio"),fe.setAttribute("checked","checked"),fe.setAttribute("name","t"),ce.appendChild(fe),v.checkClone=ce.cloneNode(!0).cloneNode(!0).lastChild.checked,ce.innerHTML="<textarea>x</textarea>",v.noCloneChecked=!!ce.cloneNode(!0).lastChild.defaultValue,ce.innerHTML="<option></option>",v.option=!!ce.lastChild;var ge={thead:[1,"<table>","</table>"],col:[2,"<table><colgroup>","</colgroup></table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],_default:[0,"",""]};function ye(e,t){var n;return n="undefined"!=typeof e.getElementsByTagName?e.getElementsByTagName(t||"*"):"undefined"!=typeof e.querySelectorAll?e.querySelectorAll(t||"*"):[],void 0===t||t&&A(e,t)?E.merge([e],n):n}function ve(e,t){for(var n=0,r=e.length;n<r;n++)Y.set(e[n],"globalEval",!t||Y.get(t[n],"globalEval"))}ge.tbody=ge.tfoot=ge.colgroup=ge.caption=ge.thead,ge.th=ge.td,v.option||(ge.optgroup=ge.option=[1,"<select multiple='multiple'>","</select>"]);var me=/<|&#?\w+;/;function xe(e,t,n,r,i){for(var o,a,s,u,l,c,f=t.createDocumentFragment(),p=[],d=0,h=e.length;d<h;d++)if((o=e[d])||0===o)if("object"===w(o))E.merge(p,o.nodeType?[o]:o);else if(me.test(o)){a=a||f.appendChild(t.createElement("div")),s=(de.exec(o)||["",""])[1].toLowerCase(),u=ge[s]||ge._default,a.innerHTML=u[1]+E.htmlPrefilter(o)+u[2],c=u[0];while(c--)a=a.lastChild;E.merge(p,a.childNodes),(a=f.firstChild).textContent=""}else p.push(t.createTextNode(o));f.textContent="",d=0;while(o=p[d++])if(r&&-1<E.inArray(o,r))i&&i.push(o);else if(l=ie(o),a=ye(f.appendChild(o),"script"),l&&ve(a),n){c=0;while(o=a[c++])he.test(o.type||"")&&n.push(o)}return f}var be=/^([^.]*)(?:\.(.+)|)/;function we(){return!0}function Te(){return!1}function Ce(e,t){return e===function(){try{return S.activeElement}catch(e){}}()==("focus"===t)}function Se(e,t,n,r,i,o){var a,s;if("object"==typeof t){for(s in"string"!=typeof n&&(r=r||n,n=void 0),t)Se(e,s,n,r,t[s],o);return e}if(null==r&&null==i?(i=n,r=n=void 0):null==i&&("string"==typeof n?(i=r,r=void 0):(i=r,r=n,n=void 0)),!1===i)i=Te;else if(!i)return e;return 1===o&&(a=i,(i=function(e){return E().off(e),a.apply(this,arguments)}).guid=a.guid||(a.guid=E.guid++)),e.each(function(){E.event.add(this,t,i,r,n)})}function Ee(e,i,o){o?(Y.set(e,i,!1),E.event.add(e,i,{namespace:!1,handler:function(e){var t,n,r=Y.get(this,i);if(1&e.isTrigger&&this[i]){if(r.length)(E.event.special[i]||{}).delegateType&&e.stopPropagation();else if(r=s.call(arguments),Y.set(this,i,r),t=o(this,i),this[i](),r!==(n=Y.get(this,i))||t?Y.set(this,i,!1):n={},r!==n)return e.stopImmediatePropagation(),e.preventDefault(),n&&n.value}else r.length&&(Y.set(this,i,{value:E.event.trigger(E.extend(r[0],E.Event.prototype),r.slice(1),this)}),e.stopImmediatePropagation())}})):void 0===Y.get(e,i)&&E.event.add(e,i,we)}E.event={global:{},add:function(t,e,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=Y.get(t);if(V(t)){n.handler&&(n=(o=n).handler,i=o.selector),i&&E.find.matchesSelector(re,i),n.guid||(n.guid=E.guid++),(u=y.events)||(u=y.events=Object.create(null)),(a=y.handle)||(a=y.handle=function(e){return"undefined"!=typeof E&&E.event.triggered!==e.type?E.event.dispatch.apply(t,arguments):void 0}),l=(e=(e||"").match(P)||[""]).length;while(l--)d=g=(s=be.exec(e[l])||[])[1],h=(s[2]||"").split(".").sort(),d&&(f=E.event.special[d]||{},d=(i?f.delegateType:f.bindType)||d,f=E.event.special[d]||{},c=E.extend({type:d,origType:g,data:r,handler:n,guid:n.guid,selector:i,needsContext:i&&E.expr.match.needsContext.test(i),namespace:h.join(".")},o),(p=u[d])||((p=u[d]=[]).delegateCount=0,f.setup&&!1!==f.setup.call(t,r,h,a)||t.addEventListener&&t.addEventListener(d,a)),f.add&&(f.add.call(t,c),c.handler.guid||(c.handler.guid=n.guid)),i?p.splice(p.delegateCount++,0,c):p.push(c),E.event.global[d]=!0)}},remove:function(e,t,n,r,i){var o,a,s,u,l,c,f,p,d,h,g,y=Y.hasData(e)&&Y.get(e);if(y&&(u=y.events)){l=(t=(t||"").match(P)||[""]).length;while(l--)if(d=g=(s=be.exec(t[l])||[])[1],h=(s[2]||"").split(".").sort(),d){f=E.event.special[d]||{},p=u[d=(r?f.delegateType:f.bindType)||d]||[],s=s[2]&&new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"),a=o=p.length;while(o--)c=p[o],!i&&g!==c.origType||n&&n.guid!==c.guid||s&&!s.test(c.namespace)||r&&r!==c.selector&&("**"!==r||!c.selector)||(p.splice(o,1),c.selector&&p.delegateCount--,f.remove&&f.remove.call(e,c));a&&!p.length&&(f.teardown&&!1!==f.teardown.call(e,h,y.handle)||E.removeEvent(e,d,y.handle),delete u[d])}else for(d in u)E.event.remove(e,d+t[l],n,r,!0);E.isEmptyObject(u)&&Y.remove(e,"handle events")}},dispatch:function(e){var t,n,r,i,o,a,s=new Array(arguments.length),u=E.event.fix(e),l=(Y.get(this,"events")||Object.create(null))[u.type]||[],c=E.event.special[u.type]||{};for(s[0]=u,t=1;t<arguments.length;t++)s[t]=arguments[t];if(u.delegateTarget=this,!c.preDispatch||!1!==c.preDispatch.call(this,u)){a=E.event.handlers.call(this,u,l),t=0;while((i=a[t++])&&!u.isPropagationStopped()){u.currentTarget=i.elem,n=0;while((o=i.handlers[n++])&&!u.isImmediatePropagationStopped())u.rnamespace&&!1!==o.namespace&&!u.rnamespace.test(o.namespace)||(u.handleObj=o,u.data=o.data,void 0!==(r=((E.event.special[o.origType]||{}).handle||o.handler).apply(i.elem,s))&&!1===(u.result=r)&&(u.preventDefault(),u.stopPropagation()))}return c.postDispatch&&c.postDispatch.call(this,u),u.result}},handlers:function(e,t){var n,r,i,o,a,s=[],u=t.delegateCount,l=e.target;if(u&&l.nodeType&&!("click"===e.type&&1<=e.button))for(;l!==this;l=l.parentNode||this)if(1===l.nodeType&&("click"!==e.type||!0!==l.disabled)){for(o=[],a={},n=0;n<u;n++)void 0===a[i=(r=t[n]).selector+" "]&&(a[i]=r.needsContext?-1<E(i,this).index(l):E.find(i,this,null,[l]).length),a[i]&&o.push(r);o.length&&s.push({elem:l,handlers:o})}return l=this,u<t.length&&s.push({elem:l,handlers:t.slice(u)}),s},addProp:function(t,e){Object.defineProperty(E.Event.prototype,t,{enumerable:!0,configurable:!0,get:m(e)?function(){if(this.originalEvent)return e(this.originalEvent)}:function(){if(this.originalEvent)return this.originalEvent[t]},set:function(e){Object.defineProperty(this,t,{enumerable:!0,configurable:!0,writable:!0,value:e})}})},fix:function(e){return e[E.expando]?e:new E.Event(e)},special:{load:{noBubble:!0},click:{setup:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ee(t,"click",we),!1},trigger:function(e){var t=this||e;return pe.test(t.type)&&t.click&&A(t,"input")&&Ee(t,"click"),!0},_default:function(e){var t=e.target;return pe.test(t.type)&&t.click&&A(t,"input")&&Y.get(t,"click")||A(t,"a")}},beforeunload:{postDispatch:function(e){void 0!==e.result&&e.originalEvent&&(e.originalEvent.returnValue=e.result)}}}},E.removeEvent=function(e,t,n){e.removeEventListener&&e.removeEventListener(t,n)},E.Event=function(e,t){if(!(this instanceof E.Event))return new E.Event(e,t);e&&e.type?(this.originalEvent=e,this.type=e.type,this.isDefaultPrevented=e.defaultPrevented||void 0===e.defaultPrevented&&!1===e.returnValue?we:Te,this.target=e.target&&3===e.target.nodeType?e.target.parentNode:e.target,this.currentTarget=e.currentTarget,this.relatedTarget=e.relatedTarget):this.type=e,t&&E.extend(this,t),this.timeStamp=e&&e.timeStamp||Date.now(),this[E.expando]=!0},E.Event.prototype={constructor:E.Event,isDefaultPrevented:Te,isPropagationStopped:Te,isImmediatePropagationStopped:Te,isSimulated:!1,preventDefault:function(){var e=this.originalEvent;this.isDefaultPrevented=we,e&&!this.isSimulated&&e.preventDefault()},stopPropagation:function(){var e=this.originalEvent;this.isPropagationStopped=we,e&&!this.isSimulated&&e.stopPropagation()},stopImmediatePropagation:function(){var e=this.originalEvent;this.isImmediatePropagationStopped=we,e&&!this.isSimulated&&e.stopImmediatePropagation(),this.stopPropagation()}},E.each({altKey:!0,bubbles:!0,cancelable:!0,changedTouches:!0,ctrlKey:!0,detail:!0,eventPhase:!0,metaKey:!0,pageX:!0,pageY:!0,shiftKey:!0,view:!0,"char":!0,code:!0,charCode:!0,key:!0,keyCode:!0,button:!0,buttons:!0,clientX:!0,clientY:!0,offsetX:!0,offsetY:!0,pointerId:!0,pointerType:!0,screenX:!0,screenY:!0,targetTouches:!0,toElement:!0,touches:!0,which:!0},E.event.addProp),E.each({focus:"focusin",blur:"focusout"},function(t,e){E.event.special[t]={setup:function(){return Ee(this,t,Ce),!1},trigger:function(){return Ee(this,t),!0},_default:function(e){return Y.get(e.target,t)},delegateType:e}}),E.each({mouseenter:"mouseover",mouseleave:"mouseout",pointerenter:"pointerover",pointerleave:"pointerout"},function(e,i){E.event.special[e]={delegateType:i,bindType:i,handle:function(e){var t,n=e.relatedTarget,r=e.handleObj;return n&&(n===this||E.contains(this,n))||(e.type=r.origType,t=r.handler.apply(this,arguments),e.type=i),t}}}),E.fn.extend({on:function(e,t,n,r){return Se(this,e,t,n,r)},one:function(e,t,n,r){return Se(this,e,t,n,r,1)},off:function(e,t,n){var r,i;if(e&&e.preventDefault&&e.handleObj)return r=e.handleObj,E(e.delegateTarget).off(r.namespace?r.origType+"."+r.namespace:r.origType,r.selector,r.handler),this;if("object"==typeof e){for(i in e)this.off(i,t,e[i]);return this}return!1!==t&&"function"!=typeof t||(n=t,t=void 0),!1===n&&(n=Te),this.each(function(){E.event.remove(this,e,n,t)})}});var ke=/<script|<style|<link/i,Ae=/checked\s*(?:[^=]|=\s*.checked.)/i,Ne=/^\s*<!\[CDATA\[|\]\]>\s*$/g;function je(e,t){return A(e,"table")&&A(11!==t.nodeType?t:t.firstChild,"tr")&&E(e).children("tbody")[0]||e}function De(e){return e.type=(null!==e.getAttribute("type"))+"/"+e.type,e}function qe(e){return"true/"===(e.type||"").slice(0,5)?e.type=e.type.slice(5):e.removeAttribute("type"),e}function Le(e,t){var n,r,i,o,a,s;if(1===t.nodeType){if(Y.hasData(e)&&(s=Y.get(e).events))for(i in Y.remove(t,"handle events"),s)for(n=0,r=s[i].length;n<r;n++)E.event.add(t,i,s[i][n]);Q.hasData(e)&&(o=Q.access(e),a=E.extend({},o),Q.set(t,a))}}function He(n,r,i,o){r=g(r);var e,t,a,s,u,l,c=0,f=n.length,p=f-1,d=r[0],h=m(d);if(h||1<f&&"string"==typeof d&&!v.checkClone&&Ae.test(d))return n.each(function(e){var t=n.eq(e);h&&(r[0]=d.call(this,e,t.html())),He(t,r,i,o)});if(f&&(t=(e=xe(r,n[0].ownerDocument,!1,n,o)).firstChild,1===e.childNodes.length&&(e=t),t||o)){for(s=(a=E.map(ye(e,"script"),De)).length;c<f;c++)u=e,c!==p&&(u=E.clone(u,!0,!0),s&&E.merge(a,ye(u,"script"))),i.call(n[c],u,c);if(s)for(l=a[a.length-1].ownerDocument,E.map(a,qe),c=0;c<s;c++)u=a[c],he.test(u.type||"")&&!Y.access(u,"globalEval")&&E.contains(l,u)&&(u.src&&"module"!==(u.type||"").toLowerCase()?E._evalUrl&&!u.noModule&&E._evalUrl(u.src,{nonce:u.nonce||u.getAttribute("nonce")},l):b(u.textContent.replace(Ne,""),u,l))}return n}function Oe(e,t,n){for(var r,i=t?E.filter(t,e):e,o=0;null!=(r=i[o]);o++)n||1!==r.nodeType||E.cleanData(ye(r)),r.parentNode&&(n&&ie(r)&&ve(ye(r,"script")),r.parentNode.removeChild(r));return e}E.extend({htmlPrefilter:function(e){return e},clone:function(e,t,n){var r,i,o,a,s,u,l,c=e.cloneNode(!0),f=ie(e);if(!(v.noCloneChecked||1!==e.nodeType&&11!==e.nodeType||E.isXMLDoc(e)))for(a=ye(c),r=0,i=(o=ye(e)).length;r<i;r++)s=o[r],u=a[r],void 0,"input"===(l=u.nodeName.toLowerCase())&&pe.test(s.type)?u.checked=s.checked:"input"!==l&&"textarea"!==l||(u.defaultValue=s.defaultValue);if(t)if(n)for(o=o||ye(e),a=a||ye(c),r=0,i=o.length;r<i;r++)Le(o[r],a[r]);else Le(e,c);return 0<(a=ye(c,"script")).length&&ve(a,!f&&ye(e,"script")),c},cleanData:function(e){for(var t,n,r,i=E.event.special,o=0;void 0!==(n=e[o]);o++)if(V(n)){if(t=n[Y.expando]){if(t.events)for(r in t.events)i[r]?E.event.remove(n,r):E.removeEvent(n,r,t.handle);n[Y.expando]=void 0}n[Q.expando]&&(n[Q.expando]=void 0)}}}),E.fn.extend({detach:function(e){return Oe(this,e,!0)},remove:function(e){return Oe(this,e)},text:function(e){return B(this,function(e){return void 0===e?E.text(this):this.empty().each(function(){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||(this.textContent=e)})},null,e,arguments.length)},append:function(){return He(this,arguments,function(e){1!==this.nodeType&&11!==this.nodeType&&9!==this.nodeType||je(this,e).appendChild(e)})},prepend:function(){return He(this,arguments,function(e){if(1===this.nodeType||11===this.nodeType||9===this.nodeType){var t=je(this,e);t.insertBefore(e,t.firstChild)}})},before:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this)})},after:function(){return He(this,arguments,function(e){this.parentNode&&this.parentNode.insertBefore(e,this.nextSibling)})},empty:function(){for(var e,t=0;null!=(e=this[t]);t++)1===e.nodeType&&(E.cleanData(ye(e,!1)),e.textContent="");return this},clone:function(e,t){return e=null!=e&&e,t=null==t?e:t,this.map(function(){return E.clone(this,e,t)})},html:function(e){return B(this,function(e){var t=this[0]||{},n=0,r=this.length;if(void 0===e&&1===t.nodeType)return t.innerHTML;if("string"==typeof e&&!ke.test(e)&&!ge[(de.exec(e)||["",""])[1].toLowerCase()]){e=E.htmlPrefilter(e);try{for(;n<r;n++)1===(t=this[n]||{}).nodeType&&(E.cleanData(ye(t,!1)),t.innerHTML=e);t=0}catch(e){}}t&&this.empty().append(e)},null,e,arguments.length)},replaceWith:function(){var n=[];return He(this,arguments,function(e){var t=this.parentNode;E.inArray(this,n)<0&&(E.cleanData(ye(this)),t&&t.replaceChild(e,this))},n)}}),E.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(e,a){E.fn[e]=function(e){for(var t,n=[],r=E(e),i=r.length-1,o=0;o<=i;o++)t=o===i?this:this.clone(!0),E(r[o])[a](t),u.apply(n,t.get());return this.pushStack(n)}});var Pe=new RegExp("^("+ee+")(?!px)[a-z%]+$","i"),Re=/^--/,Me=function(e){var t=e.ownerDocument.defaultView;return t&&t.opener||(t=C),t.getComputedStyle(e)},Ie=function(e,t,n){var r,i,o={};for(i in t)o[i]=e.style[i],e.style[i]=t[i];for(i in r=n.call(e),t)e.style[i]=o[i];return r},We=new RegExp(ne.join("|"),"i"),Fe="[\\x20\\t\\r\\n\\f]",$e=new RegExp("^"+Fe+"+|((?:^|[^\\\\])(?:\\\\.)*)"+Fe+"+$","g");function Be(e,t,n){var r,i,o,a,s=Re.test(t),u=e.style;return(n=n||Me(e))&&(a=n.getPropertyValue(t)||n[t],s&&a&&(a=a.replace($e,"$1")||void 0),""!==a||ie(e)||(a=E.style(e,t)),!v.pixelBoxStyles()&&Pe.test(a)&&We.test(t)&&(r=u.width,i=u.minWidth,o=u.maxWidth,u.minWidth=u.maxWidth=u.width=a,a=n.width,u.width=r,u.minWidth=i,u.maxWidth=o)),void 0!==a?a+"":a}function _e(e,t){return{get:function(){if(!e())return(this.get=t).apply(this,arguments);delete this.get}}}!function(){function e(){if(l){u.style.cssText="position:absolute;left:-11111px;width:60px;margin-top:1px;padding:0;border:0",l.style.cssText="position:relative;display:block;box-sizing:border-box;overflow:scroll;margin:auto;border:1px;padding:1px;width:60%;top:1%",re.appendChild(u).appendChild(l);var e=C.getComputedStyle(l);n="1%"!==e.top,s=12===t(e.marginLeft),l.style.right="60%",o=36===t(e.right),r=36===t(e.width),l.style.position="absolute",i=12===t(l.offsetWidth/3),re.removeChild(u),l=null}}function t(e){return Math.round(parseFloat(e))}var n,r,i,o,a,s,u=S.createElement("div"),l=S.createElement("div");l.style&&(l.style.backgroundClip="content-box",l.cloneNode(!0).style.backgroundClip="",v.clearCloneStyle="content-box"===l.style.backgroundClip,E.extend(v,{boxSizingReliable:function(){return e(),r},pixelBoxStyles:function(){return e(),o},pixelPosition:function(){return e(),n},reliableMarginLeft:function(){return e(),s},scrollboxSize:function(){return e(),i},reliableTrDimensions:function(){var e,t,n,r;return null==a&&(e=S.createElement("table"),t=S.createElement("tr"),n=S.createElement("div"),e.style.cssText="position:absolute;left:-11111px;border-collapse:separate",t.style.cssText="border:1px solid",t.style.height="1px",n.style.height="9px",n.style.display="block",re.appendChild(e).appendChild(t).appendChild(n),r=C.getComputedStyle(t),a=parseInt(r.height,10)+parseInt(r.borderTopWidth,10)+parseInt(r.borderBottomWidth,10)===t.offsetHeight,re.removeChild(e)),a}}))}();var ze=["Webkit","Moz","ms"],Ue=S.createElement("div").style,Xe={};function Ve(e){var t=E.cssProps[e]||Xe[e];return t||(e in Ue?e:Xe[e]=function(e){var t=e[0].toUpperCase()+e.slice(1),n=ze.length;while(n--)if((e=ze[n]+t)in Ue)return e}(e)||e)}var Ge=/^(none|table(?!-c[ea]).+)/,Ye={position:"absolute",visibility:"hidden",display:"block"},Qe={letterSpacing:"0",fontWeight:"400"};function Je(e,t,n){var r=te.exec(t);return r?Math.max(0,r[2]-(n||0))+(r[3]||"px"):t}function Ke(e,t,n,r,i,o){var a="width"===t?1:0,s=0,u=0;if(n===(r?"border":"content"))return 0;for(;a<4;a+=2)"margin"===n&&(u+=E.css(e,n+ne[a],!0,i)),r?("content"===n&&(u-=E.css(e,"padding"+ne[a],!0,i)),"margin"!==n&&(u-=E.css(e,"border"+ne[a]+"Width",!0,i))):(u+=E.css(e,"padding"+ne[a],!0,i),"padding"!==n?u+=E.css(e,"border"+ne[a]+"Width",!0,i):s+=E.css(e,"border"+ne[a]+"Width",!0,i));return!r&&0<=o&&(u+=Math.max(0,Math.ceil(e["offset"+t[0].toUpperCase()+t.slice(1)]-o-u-s-.5))||0),u}function Ze(e,t,n){var r=Me(e),i=(!v.boxSizingReliable()||n)&&"border-box"===E.css(e,"boxSizing",!1,r),o=i,a=Be(e,t,r),s="offset"+t[0].toUpperCase()+t.slice(1);if(Pe.test(a)){if(!n)return a;a="auto"}return(!v.boxSizingReliable()&&i||!v.reliableTrDimensions()&&A(e,"tr")||"auto"===a||!parseFloat(a)&&"inline"===E.css(e,"display",!1,r))&&e.getClientRects().length&&(i="border-box"===E.css(e,"boxSizing",!1,r),(o=s in e)&&(a=e[s])),(a=parseFloat(a)||0)+Ke(e,t,n||(i?"border":"content"),o,r,a)+"px"}function et(e,t,n,r,i){return new et.prototype.init(e,t,n,r,i)}E.extend({cssHooks:{opacity:{get:function(e,t){if(t){var n=Be(e,"opacity");return""===n?"1":n}}}},cssNumber:{animationIterationCount:!0,columnCount:!0,fillOpacity:!0,flexGrow:!0,flexShrink:!0,fontWeight:!0,gridArea:!0,gridColumn:!0,gridColumnEnd:!0,gridColumnStart:!0,gridRow:!0,gridRowEnd:!0,gridRowStart:!0,lineHeight:!0,opacity:!0,order:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{},style:function(e,t,n,r){if(e&&3!==e.nodeType&&8!==e.nodeType&&e.style){var i,o,a,s=X(t),u=Re.test(t),l=e.style;if(u||(t=Ve(s)),a=E.cssHooks[t]||E.cssHooks[s],void 0===n)return a&&"get"in a&&void 0!==(i=a.get(e,!1,r))?i:l[t];"string"===(o=typeof n)&&(i=te.exec(n))&&i[1]&&(n=se(e,t,i),o="number"),null!=n&&n==n&&("number"!==o||u||(n+=i&&i[3]||(E.cssNumber[s]?"":"px")),v.clearCloneStyle||""!==n||0!==t.indexOf("background")||(l[t]="inherit"),a&&"set"in a&&void 0===(n=a.set(e,n,r))||(u?l.setProperty(t,n):l[t]=n))}},css:function(e,t,n,r){var i,o,a,s=X(t);return Re.test(t)||(t=Ve(s)),(a=E.cssHooks[t]||E.cssHooks[s])&&"get"in a&&(i=a.get(e,!0,n)),void 0===i&&(i=Be(e,t,r)),"normal"===i&&t in Qe&&(i=Qe[t]),""===n||n?(o=parseFloat(i),!0===n||isFinite(o)?o||0:i):i}}),E.each(["height","width"],function(e,u){E.cssHooks[u]={get:function(e,t,n){if(t)return!Ge.test(E.css(e,"display"))||e.getClientRects().length&&e.getBoundingClientRect().width?Ze(e,u,n):Ie(e,Ye,function(){return Ze(e,u,n)})},set:function(e,t,n){var r,i=Me(e),o=!v.scrollboxSize()&&"absolute"===i.position,a=(o||n)&&"border-box"===E.css(e,"boxSizing",!1,i),s=n?Ke(e,u,n,a,i):0;return a&&o&&(s-=Math.ceil(e["offset"+u[0].toUpperCase()+u.slice(1)]-parseFloat(i[u])-Ke(e,u,"border",!1,i)-.5)),s&&(r=te.exec(t))&&"px"!==(r[3]||"px")&&(e.style[u]=t,t=E.css(e,u)),Je(0,t,s)}}}),E.cssHooks.marginLeft=_e(v.reliableMarginLeft,function(e,t){if(t)return(parseFloat(Be(e,"marginLeft"))||e.getBoundingClientRect().left-Ie(e,{marginLeft:0},function(){return e.getBoundingClientRect().left}))+"px"}),E.each({margin:"",padding:"",border:"Width"},function(i,o){E.cssHooks[i+o]={expand:function(e){for(var t=0,n={},r="string"==typeof e?e.split(" "):[e];t<4;t++)n[i+ne[t]+o]=r[t]||r[t-2]||r[0];return n}},"margin"!==i&&(E.cssHooks[i+o].set=Je)}),E.fn.extend({css:function(e,t){return B(this,function(e,t,n){var r,i,o={},a=0;if(Array.isArray(t)){for(r=Me(e),i=t.length;a<i;a++)o[t[a]]=E.css(e,t[a],!1,r);return o}return void 0!==n?E.style(e,t,n):E.css(e,t)},e,t,1<arguments.length)}}),((E.Tween=et).prototype={constructor:et,init:function(e,t,n,r,i,o){this.elem=e,this.prop=n,this.easing=i||E.easing._default,this.options=t,this.start=this.now=this.cur(),this.end=r,this.unit=o||(E.cssNumber[n]?"":"px")},cur:function(){var e=et.propHooks[this.prop];return e&&e.get?e.get(this):et.propHooks._default.get(this)},run:function(e){var t,n=et.propHooks[this.prop];return this.options.duration?this.pos=t=E.easing[this.easing](e,this.options.duration*e,0,1,this.options.duration):this.pos=t=e,this.now=(this.end-this.start)*t+this.start,this.options.step&&this.options.step.call(this.elem,this.now,this),n&&n.set?n.set(this):et.propHooks._default.set(this),this}}).init.prototype=et.prototype,(et.propHooks={_default:{get:function(e){var t;return 1!==e.elem.nodeType||null!=e.elem[e.prop]&&null==e.elem.style[e.prop]?e.elem[e.prop]:(t=E.css(e.elem,e.prop,""))&&"auto"!==t?t:0},set:function(e){E.fx.step[e.prop]?E.fx.step[e.prop](e):1!==e.elem.nodeType||!E.cssHooks[e.prop]&&null==e.elem.style[Ve(e.prop)]?e.elem[e.prop]=e.now:E.style(e.elem,e.prop,e.now+e.unit)}}}).scrollTop=et.propHooks.scrollLeft={set:function(e){e.elem.nodeType&&e.elem.parentNode&&(e.elem[e.prop]=e.now)}},E.easing={linear:function(e){return e},swing:function(e){return.5-Math.cos(e*Math.PI)/2},_default:"swing"},E.fx=et.prototype.init,E.fx.step={};var tt,nt,rt,it,ot=/^(?:toggle|show|hide)$/,at=/queueHooks$/;function st(){nt&&(!1===S.hidden&&C.requestAnimationFrame?C.requestAnimationFrame(st):C.setTimeout(st,E.fx.interval),E.fx.tick())}function ut(){return C.setTimeout(function(){tt=void 0}),tt=Date.now()}function lt(e,t){var n,r=0,i={height:e};for(t=t?1:0;r<4;r+=2-t)i["margin"+(n=ne[r])]=i["padding"+n]=e;return t&&(i.opacity=i.width=e),i}function ct(e,t,n){for(var r,i=(ft.tweeners[t]||[]).concat(ft.tweeners["*"]),o=0,a=i.length;o<a;o++)if(r=i[o].call(n,t,e))return r}function ft(o,e,t){var n,a,r=0,i=ft.prefilters.length,s=E.Deferred().always(function(){delete u.elem}),u=function(){if(a)return!1;for(var e=tt||ut(),t=Math.max(0,l.startTime+l.duration-e),n=1-(t/l.duration||0),r=0,i=l.tweens.length;r<i;r++)l.tweens[r].run(n);return s.notifyWith(o,[l,n,t]),n<1&&i?t:(i||s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l]),!1)},l=s.promise({elem:o,props:E.extend({},e),opts:E.extend(!0,{specialEasing:{},easing:E.easing._default},t),originalProperties:e,originalOptions:t,startTime:tt||ut(),duration:t.duration,tweens:[],createTween:function(e,t){var n=E.Tween(o,l.opts,e,t,l.opts.specialEasing[e]||l.opts.easing);return l.tweens.push(n),n},stop:function(e){var t=0,n=e?l.tweens.length:0;if(a)return this;for(a=!0;t<n;t++)l.tweens[t].run(1);return e?(s.notifyWith(o,[l,1,0]),s.resolveWith(o,[l,e])):s.rejectWith(o,[l,e]),this}}),c=l.props;for(!function(e,t){var n,r,i,o,a;for(n in e)if(i=t[r=X(n)],o=e[n],Array.isArray(o)&&(i=o[1],o=e[n]=o[0]),n!==r&&(e[r]=o,delete e[n]),(a=E.cssHooks[r])&&"expand"in a)for(n in o=a.expand(o),delete e[r],o)n in e||(e[n]=o[n],t[n]=i);else t[r]=i}(c,l.opts.specialEasing);r<i;r++)if(n=ft.prefilters[r].call(l,o,c,l.opts))return m(n.stop)&&(E._queueHooks(l.elem,l.opts.queue).stop=n.stop.bind(n)),n;return E.map(c,ct,l),m(l.opts.start)&&l.opts.start.call(o,l),l.progress(l.opts.progress).done(l.opts.done,l.opts.complete).fail(l.opts.fail).always(l.opts.always),E.fx.timer(E.extend(u,{elem:o,anim:l,queue:l.opts.queue})),l}E.Animation=E.extend(ft,{tweeners:{"*":[function(e,t){var n=this.createTween(e,t);return se(n.elem,e,te.exec(t),n),n}]},tweener:function(e,t){m(e)?(t=e,e=["*"]):e=e.match(P);for(var n,r=0,i=e.length;r<i;r++)n=e[r],ft.tweeners[n]=ft.tweeners[n]||[],ft.tweeners[n].unshift(t)},prefilters:[function(e,t,n){var r,i,o,a,s,u,l,c,f="width"in t||"height"in t,p=this,d={},h=e.style,g=e.nodeType&&ae(e),y=Y.get(e,"fxshow");for(r in n.queue||(null==(a=E._queueHooks(e,"fx")).unqueued&&(a.unqueued=0,s=a.empty.fire,a.empty.fire=function(){a.unqueued||s()}),a.unqueued++,p.always(function(){p.always(function(){a.unqueued--,E.queue(e,"fx").length||a.empty.fire()})})),t)if(i=t[r],ot.test(i)){if(delete t[r],o=o||"toggle"===i,i===(g?"hide":"show")){if("show"!==i||!y||void 0===y[r])continue;g=!0}d[r]=y&&y[r]||E.style(e,r)}if((u=!E.isEmptyObject(t))||!E.isEmptyObject(d))for(r in f&&1===e.nodeType&&(n.overflow=[h.overflow,h.overflowX,h.overflowY],null==(l=y&&y.display)&&(l=Y.get(e,"display")),"none"===(c=E.css(e,"display"))&&(l?c=l:(le([e],!0),l=e.style.display||l,c=E.css(e,"display"),le([e]))),("inline"===c||"inline-block"===c&&null!=l)&&"none"===E.css(e,"float")&&(u||(p.done(function(){h.display=l}),null==l&&(c=h.display,l="none"===c?"":c)),h.display="inline-block")),n.overflow&&(h.overflow="hidden",p.always(function(){h.overflow=n.overflow[0],h.overflowX=n.overflow[1],h.overflowY=n.overflow[2]})),u=!1,d)u||(y?"hidden"in y&&(g=y.hidden):y=Y.access(e,"fxshow",{display:l}),o&&(y.hidden=!g),g&&le([e],!0),p.done(function(){for(r in g||le([e]),Y.remove(e,"fxshow"),d)E.style(e,r,d[r])})),u=ct(g?y[r]:0,r,p),r in y||(y[r]=u.start,g&&(u.end=u.start,u.start=0))}],prefilter:function(e,t){t?ft.prefilters.unshift(e):ft.prefilters.push(e)}}),E.speed=function(e,t,n){var r=e&&"object"==typeof e?E.extend({},e):{complete:n||!n&&t||m(e)&&e,duration:e,easing:n&&t||t&&!m(t)&&t};return E.fx.off?r.duration=0:"number"!=typeof r.duration&&(r.duration in E.fx.speeds?r.duration=E.fx.speeds[r.duration]:r.duration=E.fx.speeds._default),null!=r.queue&&!0!==r.queue||(r.queue="fx"),r.old=r.complete,r.complete=function(){m(r.old)&&r.old.call(this),r.queue&&E.dequeue(this,r.queue)},r},E.fn.extend({fadeTo:function(e,t,n,r){return this.filter(ae).css("opacity",0).show().end().animate({opacity:t},e,n,r)},animate:function(t,e,n,r){var i=E.isEmptyObject(t),o=E.speed(e,n,r),a=function(){var e=ft(this,E.extend({},t),o);(i||Y.get(this,"finish"))&&e.stop(!0)};return a.finish=a,i||!1===o.queue?this.each(a):this.queue(o.queue,a)},stop:function(i,e,o){var a=function(e){var t=e.stop;delete e.stop,t(o)};return"string"!=typeof i&&(o=e,e=i,i=void 0),e&&this.queue(i||"fx",[]),this.each(function(){var e=!0,t=null!=i&&i+"queueHooks",n=E.timers,r=Y.get(this);if(t)r[t]&&r[t].stop&&a(r[t]);else for(t in r)r[t]&&r[t].stop&&at.test(t)&&a(r[t]);for(t=n.length;t--;)n[t].elem!==this||null!=i&&n[t].queue!==i||(n[t].anim.stop(o),e=!1,n.splice(t,1));!e&&o||E.dequeue(this,i)})},finish:function(a){return!1!==a&&(a=a||"fx"),this.each(function(){var e,t=Y.get(this),n=t[a+"queue"],r=t[a+"queueHooks"],i=E.timers,o=n?n.length:0;for(t.finish=!0,E.queue(this,a,[]),r&&r.stop&&r.stop.call(this,!0),e=i.length;e--;)i[e].elem===this&&i[e].queue===a&&(i[e].anim.stop(!0),i.splice(e,1));for(e=0;e<o;e++)n[e]&&n[e].finish&&n[e].finish.call(this);delete t.finish})}}),E.each(["toggle","show","hide"],function(e,r){var i=E.fn[r];E.fn[r]=function(e,t,n){return null==e||"boolean"==typeof e?i.apply(this,arguments):this.animate(lt(r,!0),e,t,n)}}),E.each({slideDown:lt("show"),slideUp:lt("hide"),slideToggle:lt("toggle"),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(e,r){E.fn[e]=function(e,t,n){return this.animate(r,e,t,n)}}),E.timers=[],E.fx.tick=function(){var e,t=0,n=E.timers;for(tt=Date.now();t<n.length;t++)(e=n[t])()||n[t]!==e||n.splice(t--,1);n.length||E.fx.stop(),tt=void 0},E.fx.timer=function(e){E.timers.push(e),E.fx.start()},E.fx.interval=13,E.fx.start=function(){nt||(nt=!0,st())},E.fx.stop=function(){nt=null},E.fx.speeds={slow:600,fast:200,_default:400},E.fn.delay=function(r,e){return r=E.fx&&E.fx.speeds[r]||r,e=e||"fx",this.queue(e,function(e,t){var n=C.setTimeout(e,r);t.stop=function(){C.clearTimeout(n)}})},rt=S.createElement("input"),it=S.createElement("select").appendChild(S.createElement("option")),rt.type="checkbox",v.checkOn=""!==rt.value,v.optSelected=it.selected,(rt=S.createElement("input")).value="t",rt.type="radio",v.radioValue="t"===rt.value;var pt,dt=E.expr.attrHandle;E.fn.extend({attr:function(e,t){return B(this,E.attr,e,t,1<arguments.length)},removeAttr:function(e){return this.each(function(){E.removeAttr(this,e)})}}),E.extend({attr:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return"undefined"==typeof e.getAttribute?E.prop(e,t,n):(1===o&&E.isXMLDoc(e)||(i=E.attrHooks[t.toLowerCase()]||(E.expr.match.bool.test(t)?pt:void 0)),void 0!==n?null===n?void E.removeAttr(e,t):i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:(e.setAttribute(t,n+""),n):i&&"get"in i&&null!==(r=i.get(e,t))?r:null==(r=E.find.attr(e,t))?void 0:r)},attrHooks:{type:{set:function(e,t){if(!v.radioValue&&"radio"===t&&A(e,"input")){var n=e.value;return e.setAttribute("type",t),n&&(e.value=n),t}}}},removeAttr:function(e,t){var n,r=0,i=t&&t.match(P);if(i&&1===e.nodeType)while(n=i[r++])e.removeAttribute(n)}}),pt={set:function(e,t,n){return!1===t?E.removeAttr(e,n):e.setAttribute(n,n),n}},E.each(E.expr.match.bool.source.match(/\w+/g),function(e,t){var a=dt[t]||E.find.attr;dt[t]=function(e,t,n){var r,i,o=t.toLowerCase();return n||(i=dt[o],dt[o]=r,r=null!=a(e,t,n)?o:null,dt[o]=i),r}});var ht=/^(?:input|select|textarea|button)$/i,gt=/^(?:a|area)$/i;function yt(e){return(e.match(P)||[]).join(" ")}function vt(e){return e.getAttribute&&e.getAttribute("class")||""}function mt(e){return Array.isArray(e)?e:"string"==typeof e&&e.match(P)||[]}E.fn.extend({prop:function(e,t){return B(this,E.prop,e,t,1<arguments.length)},removeProp:function(e){return this.each(function(){delete this[E.propFix[e]||e]})}}),E.extend({prop:function(e,t,n){var r,i,o=e.nodeType;if(3!==o&&8!==o&&2!==o)return 1===o&&E.isXMLDoc(e)||(t=E.propFix[t]||t,i=E.propHooks[t]),void 0!==n?i&&"set"in i&&void 0!==(r=i.set(e,n,t))?r:e[t]=n:i&&"get"in i&&null!==(r=i.get(e,t))?r:e[t]},propHooks:{tabIndex:{get:function(e){var t=E.find.attr(e,"tabindex");return t?parseInt(t,10):ht.test(e.nodeName)||gt.test(e.nodeName)&&e.href?0:-1}}},propFix:{"for":"htmlFor","class":"className"}}),v.optSelected||(E.propHooks.selected={get:function(e){var t=e.parentNode;return t&&t.parentNode&&t.parentNode.selectedIndex,null},set:function(e){var t=e.parentNode;t&&(t.selectedIndex,t.parentNode&&t.parentNode.selectedIndex)}}),E.each(["tabIndex","readOnly","maxLength","cellSpacing","cellPadding","rowSpan","colSpan","useMap","frameBorder","contentEditable"],function(){E.propFix[this.toLowerCase()]=this}),E.fn.extend({addClass:function(t){var e,n,r,i,o,a;return m(t)?this.each(function(e){E(this).addClass(t.call(this,e,vt(this)))}):(e=mt(t)).length?this.each(function(){if(r=vt(this),n=1===this.nodeType&&" "+yt(r)+" "){for(o=0;o<e.length;o++)i=e[o],n.indexOf(" "+i+" ")<0&&(n+=i+" ");a=yt(n),r!==a&&this.setAttribute("class",a)}}):this},removeClass:function(t){var e,n,r,i,o,a;return m(t)?this.each(function(e){E(this).removeClass(t.call(this,e,vt(this)))}):arguments.length?(e=mt(t)).length?this.each(function(){if(r=vt(this),n=1===this.nodeType&&" "+yt(r)+" "){for(o=0;o<e.length;o++){i=e[o];while(-1<n.indexOf(" "+i+" "))n=n.replace(" "+i+" "," ")}a=yt(n),r!==a&&this.setAttribute("class",a)}}):this:this.attr("class","")},toggleClass:function(t,n){var e,r,i,o,a=typeof t,s="string"===a||Array.isArray(t);return m(t)?this.each(function(e){E(this).toggleClass(t.call(this,e,vt(this),n),n)}):"boolean"==typeof n&&s?n?this.addClass(t):this.removeClass(t):(e=mt(t),this.each(function(){if(s)for(o=E(this),i=0;i<e.length;i++)r=e[i],o.hasClass(r)?o.removeClass(r):o.addClass(r);else void 0!==t&&"boolean"!==a||((r=vt(this))&&Y.set(this,"__className__",r),this.setAttribute&&this.setAttribute("class",r||!1===t?"":Y.get(this,"__className__")||""))}))},hasClass:function(e){var t,n,r=0;t=" "+e+" ";while(n=this[r++])if(1===n.nodeType&&-1<(" "+yt(vt(n))+" ").indexOf(t))return!0;return!1}});var xt=/\r/g;E.fn.extend({val:function(n){var r,e,i,t=this[0];return arguments.length?(i=m(n),this.each(function(e){var t;1===this.nodeType&&(null==(t=i?n.call(this,e,E(this).val()):n)?t="":"number"==typeof t?t+="":Array.isArray(t)&&(t=E.map(t,function(e){return null==e?"":e+""})),(r=E.valHooks[this.type]||E.valHooks[this.nodeName.toLowerCase()])&&"set"in r&&void 0!==r.set(this,t,"value")||(this.value=t))})):t?(r=E.valHooks[t.type]||E.valHooks[t.nodeName.toLowerCase()])&&"get"in r&&void 0!==(e=r.get(t,"value"))?e:"string"==typeof(e=t.value)?e.replace(xt,""):null==e?"":e:void 0}}),E.extend({valHooks:{option:{get:function(e){var t=E.find.attr(e,"value");return null!=t?t:yt(E.text(e))}},select:{get:function(e){var t,n,r,i=e.options,o=e.selectedIndex,a="select-one"===e.type,s=a?null:[],u=a?o+1:i.length;for(r=o<0?u:a?o:0;r<u;r++)if(((n=i[r]).selected||r===o)&&!n.disabled&&(!n.parentNode.disabled||!A(n.parentNode,"optgroup"))){if(t=E(n).val(),a)return t;s.push(t)}return s},set:function(e,t){var n,r,i=e.options,o=E.makeArray(t),a=i.length;while(a--)((r=i[a]).selected=-1<E.inArray(E.valHooks.option.get(r),o))&&(n=!0);return n||(e.selectedIndex=-1),o}}}}),E.each(["radio","checkbox"],function(){E.valHooks[this]={set:function(e,t){if(Array.isArray(t))return e.checked=-1<E.inArray(E(e).val(),t)}},v.checkOn||(E.valHooks[this].get=function(e){return null===e.getAttribute("value")?"on":e.value})}),v.focusin="onfocusin"in C;var bt=/^(?:focusinfocus|focusoutblur)$/,wt=function(e){e.stopPropagation()};E.extend(E.event,{trigger:function(e,t,n,r){var i,o,a,s,u,l,c,f,p=[n||S],d=y.call(e,"type")?e.type:e,h=y.call(e,"namespace")?e.namespace.split("."):[];if(o=f=a=n=n||S,3!==n.nodeType&&8!==n.nodeType&&!bt.test(d+E.event.triggered)&&(-1<d.indexOf(".")&&(d=(h=d.split(".")).shift(),h.sort()),u=d.indexOf(":")<0&&"on"+d,(e=e[E.expando]?e:new E.Event(d,"object"==typeof e&&e)).isTrigger=r?2:3,e.namespace=h.join("."),e.rnamespace=e.namespace?new RegExp("(^|\\.)"+h.join("\\.(?:.*\\.|)")+"(\\.|$)"):null,e.result=void 0,e.target||(e.target=n),t=null==t?[e]:E.makeArray(t,[e]),c=E.event.special[d]||{},r||!c.trigger||!1!==c.trigger.apply(n,t))){if(!r&&!c.noBubble&&!x(n)){for(s=c.delegateType||d,bt.test(s+d)||(o=o.parentNode);o;o=o.parentNode)p.push(o),a=o;a===(n.ownerDocument||S)&&p.push(a.defaultView||a.parentWindow||C)}i=0;while((o=p[i++])&&!e.isPropagationStopped())f=o,e.type=1<i?s:c.bindType||d,(l=(Y.get(o,"events")||Object.create(null))[e.type]&&Y.get(o,"handle"))&&l.apply(o,t),(l=u&&o[u])&&l.apply&&V(o)&&(e.result=l.apply(o,t),!1===e.result&&e.preventDefault());return e.type=d,r||e.isDefaultPrevented()||c._default&&!1!==c._default.apply(p.pop(),t)||!V(n)||u&&m(n[d])&&!x(n)&&((a=n[u])&&(n[u]=null),E.event.triggered=d,e.isPropagationStopped()&&f.addEventListener(d,wt),n[d](),e.isPropagationStopped()&&f.removeEventListener(d,wt),E.event.triggered=void 0,a&&(n[u]=a)),e.result}},simulate:function(e,t,n){var r=E.extend(new E.Event,n,{type:e,isSimulated:!0});E.event.trigger(r,null,t)}}),E.fn.extend({trigger:function(e,t){return this.each(function(){E.event.trigger(e,t,this)})},triggerHandler:function(e,t){var n=this[0];if(n)return E.event.trigger(e,t,n,!0)}}),v.focusin||E.each({focus:"focusin",blur:"focusout"},function(n,r){var i=function(e){E.event.simulate(r,e.target,E.event.fix(e))};E.event.special[r]={setup:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r);t||e.addEventListener(n,i,!0),Y.access(e,r,(t||0)+1)},teardown:function(){var e=this.ownerDocument||this.document||this,t=Y.access(e,r)-1;t?Y.access(e,r,t):(e.removeEventListener(n,i,!0),Y.remove(e,r))}}});var Tt=C.location,Ct={guid:Date.now()},St=/\?/;E.parseXML=function(e){var t,n;if(!e||"string"!=typeof e)return null;try{t=(new C.DOMParser).parseFromString(e,"text/xml")}catch(e){}return n=t&&t.getElementsByTagName("parsererror")[0],t&&!n||E.error("Invalid XML: "+(n?E.map(n.childNodes,function(e){return e.textContent}).join("\n"):e)),t};var Et=/\[\]$/,kt=/\r?\n/g,At=/^(?:submit|button|image|reset|file)$/i,Nt=/^(?:input|select|textarea|keygen)/i;function jt(n,e,r,i){var t;if(Array.isArray(e))E.each(e,function(e,t){r||Et.test(n)?i(n,t):jt(n+"["+("object"==typeof t&&null!=t?e:"")+"]",t,r,i)});else if(r||"object"!==w(e))i(n,e);else for(t in e)jt(n+"["+t+"]",e[t],r,i)}E.param=function(e,t){var n,r=[],i=function(e,t){var n=m(t)?t():t;r[r.length]=encodeURIComponent(e)+"="+encodeURIComponent(null==n?"":n)};if(null==e)return"";if(Array.isArray(e)||e.jquery&&!E.isPlainObject(e))E.each(e,function(){i(this.name,this.value)});else for(n in e)jt(n,e[n],t,i);return r.join("&")},E.fn.extend({serialize:function(){return E.param(this.serializeArray())},serializeArray:function(){return this.map(function(){var e=E.prop(this,"elements");return e?E.makeArray(e):this}).filter(function(){var e=this.type;return this.name&&!E(this).is(":disabled")&&Nt.test(this.nodeName)&&!At.test(e)&&(this.checked||!pe.test(e))}).map(function(e,t){var n=E(this).val();return null==n?null:Array.isArray(n)?E.map(n,function(e){return{name:t.name,value:e.replace(kt,"\r\n")}}):{name:t.name,value:n.replace(kt,"\r\n")}}).get()}});var Dt=/%20/g,qt=/#.*$/,Lt=/([?&])_=[^&]*/,Ht=/^(.*?):[ \t]*([^\r\n]*)$/gm,Ot=/^(?:GET|HEAD)$/,Pt=/^\/\//,Rt={},Mt={},It="*/".concat("*"),Wt=S.createElement("a");function Ft(o){return function(e,t){"string"!=typeof e&&(t=e,e="*");var n,r=0,i=e.toLowerCase().match(P)||[];if(m(t))while(n=i[r++])"+"===n[0]?(n=n.slice(1)||"*",(o[n]=o[n]||[]).unshift(t)):(o[n]=o[n]||[]).push(t)}}function $t(t,i,o,a){var s={},u=t===Mt;function l(e){var r;return s[e]=!0,E.each(t[e]||[],function(e,t){var n=t(i,o,a);return"string"!=typeof n||u||s[n]?u?!(r=n):void 0:(i.dataTypes.unshift(n),l(n),!1)}),r}return l(i.dataTypes[0])||!s["*"]&&l("*")}function Bt(e,t){var n,r,i=E.ajaxSettings.flatOptions||{};for(n in t)void 0!==t[n]&&((i[n]?e:r||(r={}))[n]=t[n]);return r&&E.extend(!0,e,r),e}Wt.href=Tt.href,E.extend({active:0,lastModified:{},etag:{},ajaxSettings:{url:Tt.href,type:"GET",isLocal:/^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(Tt.protocol),global:!0,processData:!0,async:!0,contentType:"application/x-www-form-urlencoded; charset=UTF-8",accepts:{"*":It,text:"text/plain",html:"text/html",xml:"application/xml, text/xml",json:"application/json, text/javascript"},contents:{xml:/\bxml\b/,html:/\bhtml/,json:/\bjson\b/},responseFields:{xml:"responseXML",text:"responseText",json:"responseJSON"},converters:{"* text":String,"text html":!0,"text json":JSON.parse,"text xml":E.parseXML},flatOptions:{url:!0,context:!0}},ajaxSetup:function(e,t){return t?Bt(Bt(e,E.ajaxSettings),t):Bt(E.ajaxSettings,e)},ajaxPrefilter:Ft(Rt),ajaxTransport:Ft(Mt),ajax:function(e,t){"object"==typeof e&&(t=e,e=void 0),t=t||{};var c,f,p,n,d,r,h,g,i,o,y=E.ajaxSetup({},t),v=y.context||y,m=y.context&&(v.nodeType||v.jquery)?E(v):E.event,x=E.Deferred(),b=E.Callbacks("once memory"),w=y.statusCode||{},a={},s={},u="canceled",T={readyState:0,getResponseHeader:function(e){var t;if(h){if(!n){n={};while(t=Ht.exec(p))n[t[1].toLowerCase()+" "]=(n[t[1].toLowerCase()+" "]||[]).concat(t[2])}t=n[e.toLowerCase()+" "]}return null==t?null:t.join(", ")},getAllResponseHeaders:function(){return h?p:null},setRequestHeader:function(e,t){return null==h&&(e=s[e.toLowerCase()]=s[e.toLowerCase()]||e,a[e]=t),this},overrideMimeType:function(e){return null==h&&(y.mimeType=e),this},statusCode:function(e){var t;if(e)if(h)T.always(e[T.status]);else for(t in e)w[t]=[w[t],e[t]];return this},abort:function(e){var t=e||u;return c&&c.abort(t),l(0,t),this}};if(x.promise(T),y.url=((e||y.url||Tt.href)+"").replace(Pt,Tt.protocol+"//"),y.type=t.method||t.type||y.method||y.type,y.dataTypes=(y.dataType||"*").toLowerCase().match(P)||[""],null==y.crossDomain){r=S.createElement("a");try{r.href=y.url,r.href=r.href,y.crossDomain=Wt.protocol+"//"+Wt.host!=r.protocol+"//"+r.host}catch(e){y.crossDomain=!0}}if(y.data&&y.processData&&"string"!=typeof y.data&&(y.data=E.param(y.data,y.traditional)),$t(Rt,y,t,T),h)return T;for(i in(g=E.event&&y.global)&&0==E.active++&&E.event.trigger("ajaxStart"),y.type=y.type.toUpperCase(),y.hasContent=!Ot.test(y.type),f=y.url.replace(qt,""),y.hasContent?y.data&&y.processData&&0===(y.contentType||"").indexOf("application/x-www-form-urlencoded")&&(y.data=y.data.replace(Dt,"+")):(o=y.url.slice(f.length),y.data&&(y.processData||"string"==typeof y.data)&&(f+=(St.test(f)?"&":"?")+y.data,delete y.data),!1===y.cache&&(f=f.replace(Lt,"$1"),o=(St.test(f)?"&":"?")+"_="+Ct.guid+++o),y.url=f+o),y.ifModified&&(E.lastModified[f]&&T.setRequestHeader("If-Modified-Since",E.lastModified[f]),E.etag[f]&&T.setRequestHeader("If-None-Match",E.etag[f])),(y.data&&y.hasContent&&!1!==y.contentType||t.contentType)&&T.setRequestHeader("Content-Type",y.contentType),T.setRequestHeader("Accept",y.dataTypes[0]&&y.accepts[y.dataTypes[0]]?y.accepts[y.dataTypes[0]]+("*"!==y.dataTypes[0]?", "+It+"; q=0.01":""):y.accepts["*"]),y.headers)T.setRequestHeader(i,y.headers[i]);if(y.beforeSend&&(!1===y.beforeSend.call(v,T,y)||h))return T.abort();if(u="abort",b.add(y.complete),T.done(y.success),T.fail(y.error),c=$t(Mt,y,t,T)){if(T.readyState=1,g&&m.trigger("ajaxSend",[T,y]),h)return T;y.async&&0<y.timeout&&(d=C.setTimeout(function(){T.abort("timeout")},y.timeout));try{h=!1,c.send(a,l)}catch(e){if(h)throw e;l(-1,e)}}else l(-1,"No Transport");function l(e,t,n,r){var i,o,a,s,u,l=t;h||(h=!0,d&&C.clearTimeout(d),c=void 0,p=r||"",T.readyState=0<e?4:0,i=200<=e&&e<300||304===e,n&&(s=function(e,t,n){var r,i,o,a,s=e.contents,u=e.dataTypes;while("*"===u[0])u.shift(),void 0===r&&(r=e.mimeType||t.getResponseHeader("Content-Type"));if(r)for(i in s)if(s[i]&&s[i].test(r)){u.unshift(i);break}if(u[0]in n)o=u[0];else{for(i in n){if(!u[0]||e.converters[i+" "+u[0]]){o=i;break}a||(a=i)}o=o||a}if(o)return o!==u[0]&&u.unshift(o),n[o]}(y,T,n)),!i&&-1<E.inArray("script",y.dataTypes)&&E.inArray("json",y.dataTypes)<0&&(y.converters["text script"]=function(){}),s=function(e,t,n,r){var i,o,a,s,u,l={},c=e.dataTypes.slice();if(c[1])for(a in e.converters)l[a.toLowerCase()]=e.converters[a];o=c.shift();while(o)if(e.responseFields[o]&&(n[e.responseFields[o]]=t),!u&&r&&e.dataFilter&&(t=e.dataFilter(t,e.dataType)),u=o,o=c.shift())if("*"===o)o=u;else if("*"!==u&&u!==o){if(!(a=l[u+" "+o]||l["* "+o]))for(i in l)if((s=i.split(" "))[1]===o&&(a=l[u+" "+s[0]]||l["* "+s[0]])){!0===a?a=l[i]:!0!==l[i]&&(o=s[0],c.unshift(s[1]));break}if(!0!==a)if(a&&e["throws"])t=a(t);else try{t=a(t)}catch(e){return{state:"parsererror",error:a?e:"No conversion from "+u+" to "+o}}}return{state:"success",data:t}}(y,s,T,i),i?(y.ifModified&&((u=T.getResponseHeader("Last-Modified"))&&(E.lastModified[f]=u),(u=T.getResponseHeader("etag"))&&(E.etag[f]=u)),204===e||"HEAD"===y.type?l="nocontent":304===e?l="notmodified":(l=s.state,o=s.data,i=!(a=s.error))):(a=l,!e&&l||(l="error",e<0&&(e=0))),T.status=e,T.statusText=(t||l)+"",i?x.resolveWith(v,[o,l,T]):x.rejectWith(v,[T,l,a]),T.statusCode(w),w=void 0,g&&m.trigger(i?"ajaxSuccess":"ajaxError",[T,y,i?o:a]),b.fireWith(v,[T,l]),g&&(m.trigger("ajaxComplete",[T,y]),--E.active||E.event.trigger("ajaxStop")))}return T},getJSON:function(e,t,n){return E.get(e,t,n,"json")},getScript:function(e,t){return E.get(e,void 0,t,"script")}}),E.each(["get","post"],function(e,i){E[i]=function(e,t,n,r){return m(t)&&(r=r||n,n=t,t=void 0),E.ajax(E.extend({url:e,type:i,dataType:r,data:t,success:n},E.isPlainObject(e)&&e))}}),E.ajaxPrefilter(function(e){var t;for(t in e.headers)"content-type"===t.toLowerCase()&&(e.contentType=e.headers[t]||"")}),E._evalUrl=function(e,t,n){return E.ajax({url:e,type:"GET",dataType:"script",cache:!0,async:!1,global:!1,converters:{"text script":function(){}},dataFilter:function(e){E.globalEval(e,t,n)}})},E.fn.extend({wrapAll:function(e){var t;return this[0]&&(m(e)&&(e=e.call(this[0])),t=E(e,this[0].ownerDocument).eq(0).clone(!0),this[0].parentNode&&t.insertBefore(this[0]),t.map(function(){var e=this;while(e.firstElementChild)e=e.firstElementChild;return e}).append(this)),this},wrapInner:function(n){return m(n)?this.each(function(e){E(this).wrapInner(n.call(this,e))}):this.each(function(){var e=E(this),t=e.contents();t.length?t.wrapAll(n):e.append(n)})},wrap:function(t){var n=m(t);return this.each(function(e){E(this).wrapAll(n?t.call(this,e):t)})},unwrap:function(e){return this.parent(e).not("body").each(function(){E(this).replaceWith(this.childNodes)}),this}}),E.expr.pseudos.hidden=function(e){return!E.expr.pseudos.visible(e)},E.expr.pseudos.visible=function(e){return!!(e.offsetWidth||e.offsetHeight||e.getClientRects().length)},E.ajaxSettings.xhr=function(){try{return new C.XMLHttpRequest}catch(e){}};var _t={0:200,1223:204},zt=E.ajaxSettings.xhr();v.cors=!!zt&&"withCredentials"in zt,v.ajax=zt=!!zt,E.ajaxTransport(function(i){var o,a;if(v.cors||zt&&!i.crossDomain)return{send:function(e,t){var n,r=i.xhr();if(r.open(i.type,i.url,i.async,i.username,i.password),i.xhrFields)for(n in i.xhrFields)r[n]=i.xhrFields[n];for(n in i.mimeType&&r.overrideMimeType&&r.overrideMimeType(i.mimeType),i.crossDomain||e["X-Requested-With"]||(e["X-Requested-With"]="XMLHttpRequest"),e)r.setRequestHeader(n,e[n]);o=function(e){return function(){o&&(o=a=r.onload=r.onerror=r.onabort=r.ontimeout=r.onreadystatechange=null,"abort"===e?r.abort():"error"===e?"number"!=typeof r.status?t(0,"error"):t(r.status,r.statusText):t(_t[r.status]||r.status,r.statusText,"text"!==(r.responseType||"text")||"string"!=typeof r.responseText?{binary:r.response}:{text:r.responseText},r.getAllResponseHeaders()))}},r.onload=o(),a=r.onerror=r.ontimeout=o("error"),void 0!==r.onabort?r.onabort=a:r.onreadystatechange=function(){4===r.readyState&&C.setTimeout(function(){o&&a()})},o=o("abort");try{r.send(i.hasContent&&i.data||null)}catch(e){if(o)throw e}},abort:function(){o&&o()}}}),E.ajaxPrefilter(function(e){e.crossDomain&&(e.contents.script=!1)}),E.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/\b(?:java|ecma)script\b/},converters:{"text script":function(e){return E.globalEval(e),e}}}),E.ajaxPrefilter("script",function(e){void 0===e.cache&&(e.cache=!1),e.crossDomain&&(e.type="GET")}),E.ajaxTransport("script",function(n){var r,i;if(n.crossDomain||n.scriptAttrs)return{send:function(e,t){r=E("<script>").attr(n.scriptAttrs||{}).prop({charset:n.scriptCharset,src:n.url}).on("load error",i=function(e){r.remove(),i=null,e&&t("error"===e.type?404:200,e.type)}),S.head.appendChild(r[0])},abort:function(){i&&i()}}});var Ut,Xt=[],Vt=/(=)\?(?=&|$)|\?\?/;E.ajaxSetup({jsonp:"callback",jsonpCallback:function(){var e=Xt.pop()||E.expando+"_"+Ct.guid++;return this[e]=!0,e}}),E.ajaxPrefilter("json jsonp",function(e,t,n){var r,i,o,a=!1!==e.jsonp&&(Vt.test(e.url)?"url":"string"==typeof e.data&&0===(e.contentType||"").indexOf("application/x-www-form-urlencoded")&&Vt.test(e.data)&&"data");if(a||"jsonp"===e.dataTypes[0])return r=e.jsonpCallback=m(e.jsonpCallback)?e.jsonpCallback():e.jsonpCallback,a?e[a]=e[a].replace(Vt,"$1"+r):!1!==e.jsonp&&(e.url+=(St.test(e.url)?"&":"?")+e.jsonp+"="+r),e.converters["script json"]=function(){return o||E.error(r+" was not called"),o[0]},e.dataTypes[0]="json",i=C[r],C[r]=function(){o=arguments},n.always(function(){void 0===i?E(C).removeProp(r):C[r]=i,e[r]&&(e.jsonpCallback=t.jsonpCallback,Xt.push(r)),o&&m(i)&&i(o[0]),o=i=void 0}),"script"}),v.createHTMLDocument=((Ut=S.implementation.createHTMLDocument("").body).innerHTML="<form></form><form></form>",2===Ut.childNodes.length),E.parseHTML=function(e,t,n){return"string"!=typeof e?[]:("boolean"==typeof t&&(n=t,t=!1),t||(v.createHTMLDocument?((r=(t=S.implementation.createHTMLDocument("")).createElement("base")).href=S.location.href,t.head.appendChild(r)):t=S),o=!n&&[],(i=N.exec(e))?[t.createElement(i[1])]:(i=xe([e],t,o),o&&o.length&&E(o).remove(),E.merge([],i.childNodes)));var r,i,o},E.fn.load=function(e,t,n){var r,i,o,a=this,s=e.indexOf(" ");return-1<s&&(r=yt(e.slice(s)),e=e.slice(0,s)),m(t)?(n=t,t=void 0):t&&"object"==typeof t&&(i="POST"),0<a.length&&E.ajax({url:e,type:i||"GET",dataType:"html",data:t}).done(function(e){o=arguments,a.html(r?E("<div>").append(E.parseHTML(e)).find(r):e)}).always(n&&function(e,t){a.each(function(){n.apply(this,o||[e.responseText,t,e])})}),this},E.expr.pseudos.animated=function(t){return E.grep(E.timers,function(e){return t===e.elem}).length},E.offset={setOffset:function(e,t,n){var r,i,o,a,s,u,l=E.css(e,"position"),c=E(e),f={};"static"===l&&(e.style.position="relative"),s=c.offset(),o=E.css(e,"top"),u=E.css(e,"left"),("absolute"===l||"fixed"===l)&&-1<(o+u).indexOf("auto")?(a=(r=c.position()).top,i=r.left):(a=parseFloat(o)||0,i=parseFloat(u)||0),m(t)&&(t=t.call(e,n,E.extend({},s))),null!=t.top&&(f.top=t.top-s.top+a),null!=t.left&&(f.left=t.left-s.left+i),"using"in t?t.using.call(e,f):c.css(f)}},E.fn.extend({offset:function(t){if(arguments.length)return void 0===t?this:this.each(function(e){E.offset.setOffset(this,t,e)});var e,n,r=this[0];return r?r.getClientRects().length?(e=r.getBoundingClientRect(),n=r.ownerDocument.defaultView,{top:e.top+n.pageYOffset,left:e.left+n.pageXOffset}):{top:0,left:0}:void 0},position:function(){if(this[0]){var e,t,n,r=this[0],i={top:0,left:0};if("fixed"===E.css(r,"position"))t=r.getBoundingClientRect();else{t=this.offset(),n=r.ownerDocument,e=r.offsetParent||n.documentElement;while(e&&(e===n.body||e===n.documentElement)&&"static"===E.css(e,"position"))e=e.parentNode;e&&e!==r&&1===e.nodeType&&((i=E(e).offset()).top+=E.css(e,"borderTopWidth",!0),i.left+=E.css(e,"borderLeftWidth",!0))}return{top:t.top-i.top-E.css(r,"marginTop",!0),left:t.left-i.left-E.css(r,"marginLeft",!0)}}},offsetParent:function(){return this.map(function(){var e=this.offsetParent;while(e&&"static"===E.css(e,"position"))e=e.offsetParent;return e||re})}}),E.each({scrollLeft:"pageXOffset",scrollTop:"pageYOffset"},function(t,i){var o="pageYOffset"===i;E.fn[t]=function(e){return B(this,function(e,t,n){var r;if(x(e)?r=e:9===e.nodeType&&(r=e.defaultView),void 0===n)return r?r[i]:e[t];r?r.scrollTo(o?r.pageXOffset:n,o?n:r.pageYOffset):e[t]=n},t,e,arguments.length)}}),E.each(["top","left"],function(e,n){E.cssHooks[n]=_e(v.pixelPosition,function(e,t){if(t)return t=Be(e,n),Pe.test(t)?E(e).position()[n]+"px":t})}),E.each({Height:"height",Width:"width"},function(a,s){E.each({padding:"inner"+a,content:s,"":"outer"+a},function(r,o){E.fn[o]=function(e,t){var n=arguments.length&&(r||"boolean"!=typeof e),i=r||(!0===e||!0===t?"margin":"border");return B(this,function(e,t,n){var r;return x(e)?0===o.indexOf("outer")?e["inner"+a]:e.document.documentElement["client"+a]:9===e.nodeType?(r=e.documentElement,Math.max(e.body["scroll"+a],r["scroll"+a],e.body["offset"+a],r["offset"+a],r["client"+a])):void 0===n?E.css(e,t,i):E.style(e,t,n,i)},s,n?e:void 0,n)}})}),E.each(["ajaxStart","ajaxStop","ajaxComplete","ajaxError","ajaxSuccess","ajaxSend"],function(e,t){E.fn[t]=function(e){return this.on(t,e)}}),E.fn.extend({bind:function(e,t,n){return this.on(e,null,t,n)},unbind:function(e,t){return this.off(e,null,t)},delegate:function(e,t,n,r){return this.on(t,e,n,r)},undelegate:function(e,t,n){return 1===arguments.length?this.off(e,"**"):this.off(t,e||"**",n)},hover:function(e,t){return this.mouseenter(e).mouseleave(t||e)}}),E.each("blur focus focusin focusout resize scroll click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup contextmenu".split(" "),function(e,n){E.fn[n]=function(e,t){return 0<arguments.length?this.on(n,null,e,t):this.trigger(n)}});var Gt=/^[\s\uFEFF\xA0]+|([^\s\uFEFF\xA0])[\s\uFEFF\xA0]+$/g;E.proxy=function(e,t){var n,r,i;if("string"==typeof t&&(n=e[t],t=e,e=n),m(e))return r=s.call(arguments,2),(i=function(){return e.apply(t||this,r.concat(s.call(arguments)))}).guid=e.guid=e.guid||E.guid++,i},E.holdReady=function(e){e?E.readyWait++:E.ready(!0)},E.isArray=Array.isArray,E.parseJSON=JSON.parse,E.nodeName=A,E.isFunction=m,E.isWindow=x,E.camelCase=X,E.type=w,E.now=Date.now,E.isNumeric=function(e){var t=E.type(e);return("number"===t||"string"===t)&&!isNaN(e-parseFloat(e))},E.trim=function(e){return null==e?"":(e+"").replace(Gt,"$1")},"function"==typeof define&&define.amd&&define("jquery",[],function(){return E});var Yt=C.jQuery,Qt=C.$;return E.noConflict=function(e){return C.$===E&&(C.$=Qt),e&&C.jQuery===E&&(C.jQuery=Yt),E},"undefined"==typeof e&&(C.jQuery=C.$=E),E});
;
/*! https://mths.be/cssescape v1.5.1 by @mathias | MIT license */
;(function(root, factory) {
	// https://github.com/umdjs/umd/blob/master/returnExports.js
	if (typeof exports == 'object') {
		// For Node.js.
		module.exports = factory(root);
	} else if (typeof define == 'function' && define.amd) {
		// For AMD. Register as an anonymous module.
		define([], factory.bind(root, root));
	} else {
		// For browser globals (not exposing the function separately).
		factory(root);
	}
}(typeof global != 'undefined' ? global : this, function(root) {

	if (root.CSS && root.CSS.escape) {
		return root.CSS.escape;
	}

	// https://drafts.csswg.org/cssom/#serialize-an-identifier
	var cssEscape = function(value) {
		if (arguments.length == 0) {
			throw new TypeError('`CSS.escape` requires an argument.');
		}
		var string = String(value);
		var length = string.length;
		var index = -1;
		var codeUnit;
		var result = '';
		var firstCodeUnit = string.charCodeAt(0);
		while (++index < length) {
			codeUnit = string.charCodeAt(index);
			// Note: there’s no need to special-case astral symbols, surrogate
			// pairs, or lone surrogates.

			// If the character is NULL (U+0000), then the REPLACEMENT CHARACTER
			// (U+FFFD).
			if (codeUnit == 0x0000) {
				result += '\uFFFD';
				continue;
			}

			if (
				// If the character is in the range [\1-\1F] (U+0001 to U+001F) or is
				// U+007F, […]
				(codeUnit >= 0x0001 && codeUnit <= 0x001F) || codeUnit == 0x007F ||
				// If the character is the first character and is in the range [0-9]
				// (U+0030 to U+0039), […]
				(index == 0 && codeUnit >= 0x0030 && codeUnit <= 0x0039) ||
				// If the character is the second character and is in the range [0-9]
				// (U+0030 to U+0039) and the first character is a `-` (U+002D), […]
				(
					index == 1 &&
					codeUnit >= 0x0030 && codeUnit <= 0x0039 &&
					firstCodeUnit == 0x002D
				)
			) {
				// https://drafts.csswg.org/cssom/#escape-a-character-as-code-point
				result += '\\' + codeUnit.toString(16) + ' ';
				continue;
			}

			if (
				// If the character is the first character and is a `-` (U+002D), and
				// there is no second character, […]
				index == 0 &&
				length == 1 &&
				codeUnit == 0x002D
			) {
				result += '\\' + string.charAt(index);
				continue;
			}

			// If the character is not handled by one of the above rules and is
			// greater than or equal to U+0080, is `-` (U+002D) or `_` (U+005F), or
			// is in one of the ranges [0-9] (U+0030 to U+0039), [A-Z] (U+0041 to
			// U+005A), or [a-z] (U+0061 to U+007A), […]
			if (
				codeUnit >= 0x0080 ||
				codeUnit == 0x002D ||
				codeUnit == 0x005F ||
				codeUnit >= 0x0030 && codeUnit <= 0x0039 ||
				codeUnit >= 0x0041 && codeUnit <= 0x005A ||
				codeUnit >= 0x0061 && codeUnit <= 0x007A
			) {
				// the character itself
				result += string.charAt(index);
				continue;
			}

			// Otherwise, the escaped character.
			// https://drafts.csswg.org/cssom/#escape-a-character
			result += '\\' + string.charAt(index);

		}
		return result;
	};

	if (!root.CSS) {
		root.CSS = {};
	}

	root.CSS.escape = cssEscape;
	return cssEscape;

}));
;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
if (window.NodeList && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
};
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
if (!Element.prototype.matches) {
  Element.prototype.matches = Element.prototype.msMatchesSelector || Element.prototype.webkitMatchesSelector;
};
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
if (typeof Object.assign !== 'function') {
  Object.defineProperty(Object, 'assign', {
    value: function assign(target, varArgs) {
      'use strict';

      if (target === null || target === undefined) {
        throw new TypeError('Cannot convert undefined or null to object');
      }
      var to = Object(target);
      for (var index = 1; index < arguments.length; index++) {
        var nextSource = arguments[index];
        if (nextSource !== null && nextSource !== undefined) {
          for (var nextKey in nextSource) {
            if (Object.prototype.hasOwnProperty.call(nextSource, nextKey)) {
              to[nextKey] = nextSource[nextKey];
            }
          }
        }
      }
      return to;
    },
    writable: true,
    configurable: true
  });
};
!function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):t.ES6Promise=e()}(this,function(){"use strict";function t(t){var e=typeof t;return null!==t&&("object"===e||"function"===e)}function e(t){return"function"==typeof t}function n(t){W=t}function r(t){z=t}function o(){return function(){return process.nextTick(a)}}function i(){return"undefined"!=typeof U?function(){U(a)}:c()}function s(){var t=0,e=new H(a),n=document.createTextNode("");return e.observe(n,{characterData:!0}),function(){n.data=t=++t%2}}function u(){var t=new MessageChannel;return t.port1.onmessage=a,function(){return t.port2.postMessage(0)}}function c(){var t=setTimeout;return function(){return t(a,1)}}function a(){for(var t=0;t<N;t+=2){var e=Q[t],n=Q[t+1];e(n),Q[t]=void 0,Q[t+1]=void 0}N=0}function f(){try{var t=Function("return this")().require("vertx");return U=t.runOnLoop||t.runOnContext,i()}catch(e){return c()}}function l(t,e){var n=this,r=new this.constructor(p);void 0===r[V]&&x(r);var o=n._state;if(o){var i=arguments[o-1];z(function(){return T(o,r,i,n._result)})}else j(n,r,t,e);return r}function h(t){var e=this;if(t&&"object"==typeof t&&t.constructor===e)return t;var n=new e(p);return w(n,t),n}function p(){}function v(){return new TypeError("You cannot resolve a promise with itself")}function d(){return new TypeError("A promises callback cannot return that same promise.")}function _(t,e,n,r){try{t.call(e,n,r)}catch(o){return o}}function y(t,e,n){z(function(t){var r=!1,o=_(n,e,function(n){r||(r=!0,e!==n?w(t,n):A(t,n))},function(e){r||(r=!0,S(t,e))},"Settle: "+(t._label||" unknown promise"));!r&&o&&(r=!0,S(t,o))},t)}function m(t,e){e._state===Z?A(t,e._result):e._state===$?S(t,e._result):j(e,void 0,function(e){return w(t,e)},function(e){return S(t,e)})}function b(t,n,r){n.constructor===t.constructor&&r===l&&n.constructor.resolve===h?m(t,n):void 0===r?A(t,n):e(r)?y(t,n,r):A(t,n)}function w(e,n){if(e===n)S(e,v());else if(t(n)){var r=void 0;try{r=n.then}catch(o){return void S(e,o)}b(e,n,r)}else A(e,n)}function g(t){t._onerror&&t._onerror(t._result),E(t)}function A(t,e){t._state===X&&(t._result=e,t._state=Z,0!==t._subscribers.length&&z(E,t))}function S(t,e){t._state===X&&(t._state=$,t._result=e,z(g,t))}function j(t,e,n,r){var o=t._subscribers,i=o.length;t._onerror=null,o[i]=e,o[i+Z]=n,o[i+$]=r,0===i&&t._state&&z(E,t)}function E(t){var e=t._subscribers,n=t._state;if(0!==e.length){for(var r=void 0,o=void 0,i=t._result,s=0;s<e.length;s+=3)r=e[s],o=e[s+n],r?T(n,r,o,i):o(i);t._subscribers.length=0}}function T(t,n,r,o){var i=e(r),s=void 0,u=void 0,c=!0;if(i){try{s=r(o)}catch(a){c=!1,u=a}if(n===s)return void S(n,d())}else s=o;n._state!==X||(i&&c?w(n,s):c===!1?S(n,u):t===Z?A(n,s):t===$&&S(n,s))}function M(t,e){try{e(function(e){w(t,e)},function(e){S(t,e)})}catch(n){S(t,n)}}function P(){return tt++}function x(t){t[V]=tt++,t._state=void 0,t._result=void 0,t._subscribers=[]}function C(){return new Error("Array Methods must be provided an Array")}function O(t){return new et(this,t).promise}function k(t){var e=this;return new e(L(t)?function(n,r){for(var o=t.length,i=0;i<o;i++)e.resolve(t[i]).then(n,r)}:function(t,e){return e(new TypeError("You must pass an array to race."))})}function F(t){var e=this,n=new e(p);return S(n,t),n}function Y(){throw new TypeError("You must pass a resolver function as the first argument to the promise constructor")}function q(){throw new TypeError("Failed to construct 'Promise': Please use the 'new' operator, this object constructor cannot be called as a function.")}function D(){var t=void 0;if("undefined"!=typeof global)t=global;else if("undefined"!=typeof self)t=self;else try{t=Function("return this")()}catch(e){throw new Error("polyfill failed because global object is unavailable in this environment")}var n=t.Promise;if(n){var r=null;try{r=Object.prototype.toString.call(n.resolve())}catch(e){}if("[object Promise]"===r&&!n.cast)return}t.Promise=nt}var K=void 0;K=Array.isArray?Array.isArray:function(t){return"[object Array]"===Object.prototype.toString.call(t)};var L=K,N=0,U=void 0,W=void 0,z=function(t,e){Q[N]=t,Q[N+1]=e,N+=2,2===N&&(W?W(a):R())},B="undefined"!=typeof window?window:void 0,G=B||{},H=G.MutationObserver||G.WebKitMutationObserver,I="undefined"==typeof self&&"undefined"!=typeof process&&"[object process]"==={}.toString.call(process),J="undefined"!=typeof Uint8ClampedArray&&"undefined"!=typeof importScripts&&"undefined"!=typeof MessageChannel,Q=new Array(1e3),R=void 0;R=I?o():H?s():J?u():void 0===B&&"function"==typeof require?f():c();var V=Math.random().toString(36).substring(2),X=void 0,Z=1,$=2,tt=0,et=function(){function t(t,e){this._instanceConstructor=t,this.promise=new t(p),this.promise[V]||x(this.promise),L(e)?(this.length=e.length,this._remaining=e.length,this._result=new Array(this.length),0===this.length?A(this.promise,this._result):(this.length=this.length||0,this._enumerate(e),0===this._remaining&&A(this.promise,this._result))):S(this.promise,C())}return t.prototype._enumerate=function(t){for(var e=0;this._state===X&&e<t.length;e++)this._eachEntry(t[e],e)},t.prototype._eachEntry=function(t,e){var n=this._instanceConstructor,r=n.resolve;if(r===h){var o=void 0,i=void 0,s=!1;try{o=t.then}catch(u){s=!0,i=u}if(o===l&&t._state!==X)this._settledAt(t._state,e,t._result);else if("function"!=typeof o)this._remaining--,this._result[e]=t;else if(n===nt){var c=new n(p);s?S(c,i):b(c,t,o),this._willSettleAt(c,e)}else this._willSettleAt(new n(function(e){return e(t)}),e)}else this._willSettleAt(r(t),e)},t.prototype._settledAt=function(t,e,n){var r=this.promise;r._state===X&&(this._remaining--,t===$?S(r,n):this._result[e]=n),0===this._remaining&&A(r,this._result)},t.prototype._willSettleAt=function(t,e){var n=this;j(t,void 0,function(t){return n._settledAt(Z,e,t)},function(t){return n._settledAt($,e,t)})},t}(),nt=function(){function t(e){this[V]=P(),this._result=this._state=void 0,this._subscribers=[],p!==e&&("function"!=typeof e&&Y(),this instanceof t?M(this,e):q())}return t.prototype["catch"]=function(t){return this.then(null,t)},t.prototype["finally"]=function(t){var n=this,r=n.constructor;return e(t)?n.then(function(e){return r.resolve(t()).then(function(){return e})},function(e){return r.resolve(t()).then(function(){throw e})}):n.then(t,t)},t}();return nt.prototype.then=l,nt.all=O,nt.race=k,nt.resolve=h,nt.reject=F,nt._setScheduler=n,nt._setAsap=r,nt._asap=z,nt.polyfill=D,nt.Promise=nt,nt.polyfill(),nt});;
/*! @drupal/once - v1.0.1 - 2021-06-12 */
var once=function(){"use strict";var n=/[\11\12\14\15\40]+/,e="data-once",t=document;function r(n,t,r){return n[t+"Attribute"](e,r)}function o(e){if("string"!=typeof e)throw new TypeError("once ID must be a string");if(""===e||n.test(e))throw new RangeError("once ID must not be empty or contain spaces");return'[data-once~="'+e+'"]'}function u(n){if(!(n instanceof Element))throw new TypeError("The element must be an instance of Element");return!0}function i(n,e){void 0===e&&(e=t);var r=n;if(null===n)r=[];else{if(!n)throw new TypeError("Selector must not be empty");"string"!=typeof n||e!==t&&!u(e)?n instanceof Element&&(r=[n]):r=e.querySelectorAll(n)}return Array.prototype.slice.call(r)}function c(n,e,t){return e.filter((function(e){var r=u(e)&&e.matches(n);return r&&t&&t(e),r}))}function f(e,t){var o=t.add,u=t.remove,i=[];r(e,"has")&&r(e,"get").trim().split(n).forEach((function(n){i.indexOf(n)<0&&n!==u&&i.push(n)})),o&&i.push(o);var c=i.join(" ");r(e,""===c?"remove":"set",c)}function a(n,e,t){return c(":not("+o(n)+")",i(e,t),(function(e){return f(e,{add:n})}))}return a.remove=function(n,e,t){return c(o(n),i(e,t),(function(e){return f(e,{remove:n})}))},a.filter=function(n,e,t){return c(o(n),i(e,t))},a.find=function(n,e){return i(n?o(n):"[data-once]",e)},a}();

;
/*!
 * jQuery Once v2.2.3 - http://github.com/robloach/jquery-once
 * @license MIT, GPL-2.0
 *   http://opensource.org/licenses/MIT
 *   http://opensource.org/licenses/GPL-2.0
 */
(function(e){"use strict";if(typeof exports==="object"&&typeof exports.nodeName!=="string"){e(require("jquery"))}else if(typeof define==="function"&&define.amd){define(["jquery"],e)}else{e(jQuery)}})(function(t){"use strict";var r=function(e){e=e||"once";if(typeof e!=="string"){throw new TypeError("The jQuery Once id parameter must be a string")}return e};t.fn.once=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)!==true}).data(n,true)};t.fn.removeOnce=function(e){return this.findOnce(e).removeData("jquery-once-"+r(e))};t.fn.findOnce=function(e){var n="jquery-once-"+r(e);return this.filter(function(){return t(this).data(n)===true})}});

/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
window.Drupal = {
  behaviors: {},
  locale: {}
};
(function (Drupal, drupalSettings, drupalTranslations, console, Proxy, Reflect) {
  Drupal.throwError = function (error) {
    setTimeout(function () {
      throw error;
    }, 0);
  };
  Drupal.attachBehaviors = function (context, settings) {
    context = context || document;
    settings = settings || drupalSettings;
    var behaviors = Drupal.behaviors;
    Object.keys(behaviors || {}).forEach(function (i) {
      if (typeof behaviors[i].attach === 'function') {
        try {
          behaviors[i].attach(context, settings);
        } catch (e) {
          Drupal.throwError(e);
        }
      }
    });
  };
  Drupal.detachBehaviors = function (context, settings, trigger) {
    context = context || document;
    settings = settings || drupalSettings;
    trigger = trigger || 'unload';
    var behaviors = Drupal.behaviors;
    Object.keys(behaviors || {}).forEach(function (i) {
      if (typeof behaviors[i].detach === 'function') {
        try {
          behaviors[i].detach(context, settings, trigger);
        } catch (e) {
          Drupal.throwError(e);
        }
      }
    });
  };
  Drupal.checkPlain = function (str) {
    str = str.toString().replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;').replace(/'/g, '&#39;');
    return str;
  };
  Drupal.formatString = function (str, args) {
    var processedArgs = {};
    Object.keys(args || {}).forEach(function (key) {
      switch (key.charAt(0)) {
        case '@':
          processedArgs[key] = Drupal.checkPlain(args[key]);
          break;
        case '!':
          processedArgs[key] = args[key];
          break;
        default:
          processedArgs[key] = Drupal.theme('placeholder', args[key]);
          break;
      }
    });
    return Drupal.stringReplace(str, processedArgs, null);
  };
  Drupal.stringReplace = function (str, args, keys) {
    if (str.length === 0) {
      return str;
    }
    if (!Array.isArray(keys)) {
      keys = Object.keys(args || {});
      keys.sort(function (a, b) {
        return a.length - b.length;
      });
    }
    if (keys.length === 0) {
      return str;
    }
    var key = keys.pop();
    var fragments = str.split(key);
    if (keys.length) {
      for (var i = 0; i < fragments.length; i++) {
        fragments[i] = Drupal.stringReplace(fragments[i], args, keys.slice(0));
      }
    }
    return fragments.join(args[key]);
  };
  Drupal.t = function (str, args, options) {
    options = options || {};
    options.context = options.context || '';
    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.strings && drupalTranslations.strings[options.context] && drupalTranslations.strings[options.context][str]) {
      str = drupalTranslations.strings[options.context][str];
    }
    if (args) {
      str = Drupal.formatString(str, args);
    }
    return str;
  };
  Drupal.url = function (path) {
    return drupalSettings.path.baseUrl + drupalSettings.path.pathPrefix + path;
  };
  Drupal.url.toAbsolute = function (url) {
    var urlParsingNode = document.createElement('a');
    try {
      url = decodeURIComponent(url);
    } catch (e) {}
    urlParsingNode.setAttribute('href', url);
    return urlParsingNode.cloneNode(false).href;
  };
  Drupal.url.isLocal = function (url) {
    var absoluteUrl = Drupal.url.toAbsolute(url);
    var protocol = window.location.protocol;
    if (protocol === 'http:' && absoluteUrl.indexOf('https:') === 0) {
      protocol = 'https:';
    }
    var baseUrl = "".concat(protocol, "//").concat(window.location.host).concat(drupalSettings.path.baseUrl.slice(0, -1));
    try {
      absoluteUrl = decodeURIComponent(absoluteUrl);
    } catch (e) {}
    try {
      baseUrl = decodeURIComponent(baseUrl);
    } catch (e) {}
    return absoluteUrl === baseUrl || absoluteUrl.indexOf("".concat(baseUrl, "/")) === 0;
  };
  Drupal.formatPlural = function (count, singular, plural, args, options) {
    args = args || {};
    args['@count'] = count;
    var pluralDelimiter = drupalSettings.pluralDelimiter;
    var translations = Drupal.t(singular + pluralDelimiter + plural, args, options).split(pluralDelimiter);
    var index = 0;
    if (typeof drupalTranslations !== 'undefined' && drupalTranslations.pluralFormula) {
      index = count in drupalTranslations.pluralFormula ? drupalTranslations.pluralFormula[count] : drupalTranslations.pluralFormula.default;
    } else if (args['@count'] !== 1) {
      index = 1;
    }
    return translations[index];
  };
  Drupal.encodePath = function (item) {
    return window.encodeURIComponent(item).replace(/%2F/g, '/');
  };
  Drupal.deprecationError = function (_ref) {
    var message = _ref.message;
    if (drupalSettings.suppressDeprecationErrors === false && typeof console !== 'undefined' && console.warn) {
      console.warn("[Deprecation] ".concat(message));
    }
  };
  Drupal.deprecatedProperty = function (_ref2) {
    var target = _ref2.target,
      deprecatedProperty = _ref2.deprecatedProperty,
      message = _ref2.message;
    if (!Proxy || !Reflect) {
      return target;
    }
    return new Proxy(target, {
      get: function get(target, key) {
        if (key === deprecatedProperty) {
          Drupal.deprecationError({
            message: message
          });
        }
        for (var _len = arguments.length, rest = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
          rest[_key - 2] = arguments[_key];
        }
        return Reflect.get.apply(Reflect, [target, key].concat(rest));
      }
    });
  };
  Drupal.theme = function (func) {
    if (func in Drupal.theme) {
      var _Drupal$theme;
      for (var _len2 = arguments.length, args = new Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
        args[_key2 - 1] = arguments[_key2];
      }
      return (_Drupal$theme = Drupal.theme)[func].apply(_Drupal$theme, args);
    }
  };
  Drupal.theme.placeholder = function (str) {
    return "<em class=\"placeholder\">".concat(Drupal.checkPlain(str), "</em>");
  };
})(Drupal, window.drupalSettings, window.drupalTranslations, window.console, window.Proxy, window.Reflect);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
if (window.jQuery) {
  jQuery.noConflict();
}
document.documentElement.className += ' js';
(function (Drupal, drupalSettings) {
  var domReady = function domReady(callback) {
    var listener = function listener() {
      callback();
      document.removeEventListener('DOMContentLoaded', listener);
    };
    if (document.readyState !== 'loading') {
      setTimeout(callback, 0);
    } else {
      document.addEventListener('DOMContentLoaded', listener);
    }
  };
  domReady(function () {
    Drupal.attachBehaviors(document, drupalSettings);
  });
})(Drupal, window.drupalSettings);;
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):e(jQuery)}((function(e){"use strict";return e.ui=e.ui||{},e.ui.version="1.13.2"}));

/*!
 * jQuery UI :data 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.extend(e.expr.pseudos,{data:e.expr.createPseudo?e.expr.createPseudo((function(n){return function(t){return!!e.data(t,n)}})):function(n,t,r){return!!e.data(n,r[3])}})}));

/*!
 * jQuery UI Disable Selection 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.fn.extend({disableSelection:(n="onselectstart"in document.createElement("div")?"selectstart":"mousedown",function(){return this.on(n+".ui-disableSelection",(function(e){e.preventDefault()}))}),enableSelection:function(){return this.off(".ui-disableSelection")}});var n}));

!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],t):t(jQuery)}((function(t){"use strict";return t.fn._form=function(){return"string"==typeof this[0].form?this.closest("form"):t(this[0].form)}}));

/*!
 * jQuery UI Support for jQuery core 1.8.x and newer 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 *
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";if(e.expr.pseudos||(e.expr.pseudos=e.expr[":"]),e.uniqueSort||(e.uniqueSort=e.unique),!e.escapeSelector){var n=/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,t=function(e,n){return n?"\0"===e?"�":e.slice(0,-1)+"\\"+e.charCodeAt(e.length-1).toString(16)+" ":"\\"+e};e.escapeSelector=function(e){return(e+"").replace(n,t)}}e.fn.even&&e.fn.odd||e.fn.extend({even:function(){return this.filter((function(e){return e%2==0}))},odd:function(){return this.filter((function(e){return e%2==1}))}})}));

/*!
 * jQuery UI Scroll Parent 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],t):t(jQuery)}((function(t){"use strict";return t.fn.scrollParent=function(e){var s=this.css("position"),n="absolute"===s,o=e?/(auto|scroll|hidden)/:/(auto|scroll)/,i=this.parents().filter((function(){var e=t(this);return(!n||"static"!==e.css("position"))&&o.test(e.css("overflow")+e.css("overflow-y")+e.css("overflow-x"))})).eq(0);return"fixed"!==s&&i.length?i:t(this[0].ownerDocument||document)}}));

/*!
 * jQuery UI Unique ID 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],i):i(jQuery)}((function(i){"use strict";return i.fn.extend({uniqueId:(e=0,function(){return this.each((function(){this.id||(this.id="ui-id-"+ ++e)}))}),removeUniqueId:function(){return this.each((function(){/^ui-id-\d+$/.test(this.id)&&i(this).removeAttr("id")}))}});var e}));

/*!
 * jQuery UI Focusable 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.focusable=function(i,t){var n,s,r,u,a,o=i.nodeName.toLowerCase();return"area"===o?(s=(n=i.parentNode).name,!(!i.href||!s||"map"!==n.nodeName.toLowerCase())&&((r=e("img[usemap='#"+s+"']")).length>0&&r.is(":visible"))):(/^(input|select|textarea|button|object)$/.test(o)?(u=!i.disabled)&&(a=e(i).closest("fieldset")[0])&&(u=!a.disabled):u="a"===o&&i.href||t,u&&e(i).is(":visible")&&function(e){var i=e.css("visibility");for(;"inherit"===i;)i=(e=e.parent()).css("visibility");return"visible"===i}(e(i)))},e.extend(e.expr.pseudos,{focusable:function(i){return e.ui.focusable(i,null!=e.attr(i,"tabindex"))}}),e.ui.focusable}));

!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.ie=!!/msie [\w.]+/.exec(navigator.userAgent.toLowerCase())}));

/*!
 * jQuery UI Keycode 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.keyCode={BACKSPACE:8,COMMA:188,DELETE:46,DOWN:40,END:35,ENTER:13,ESCAPE:27,HOME:36,LEFT:37,PAGE_DOWN:34,PAGE_UP:33,PERIOD:190,RIGHT:39,SPACE:32,TAB:9,UP:38}}));

!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.plugin={add:function(n,i,t){var u,o=e.ui[n].prototype;for(u in t)o.plugins[u]=o.plugins[u]||[],o.plugins[u].push([i,t[u]])},call:function(e,n,i,t){var u,o=e.plugins[n];if(o&&(t||e.element[0].parentNode&&11!==e.element[0].parentNode.nodeType))for(u=0;u<o.length;u++)e.options[o[u][0]]&&o[u][1].apply(e.element,i)}}}));

!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.safeActiveElement=function(e){var n;try{n=e.activeElement}catch(t){n=e.body}return n||(n=e.body),n.nodeName||(n=e.body),n}}));

!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.safeBlur=function(n){n&&"body"!==n.nodeName.toLowerCase()&&e(n).trigger("blur")}}));

/*!
 * jQuery UI Widget 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],t):t(jQuery)}((function(t){"use strict";var e,i=0,s=Array.prototype.hasOwnProperty,n=Array.prototype.slice;return t.cleanData=(e=t.cleanData,function(i){var s,n,o;for(o=0;null!=(n=i[o]);o++)(s=t._data(n,"events"))&&s.remove&&t(n).triggerHandler("remove");e(i)}),t.widget=function(e,i,s){var n,o,a,r={},l=e.split(".")[0],u=l+"-"+(e=e.split(".")[1]);return s||(s=i,i=t.Widget),Array.isArray(s)&&(s=t.extend.apply(null,[{}].concat(s))),t.expr.pseudos[u.toLowerCase()]=function(e){return!!t.data(e,u)},t[l]=t[l]||{},n=t[l][e],o=t[l][e]=function(t,e){if(!this||!this._createWidget)return new o(t,e);arguments.length&&this._createWidget(t,e)},t.extend(o,n,{version:s.version,_proto:t.extend({},s),_childConstructors:[]}),(a=new i).options=t.widget.extend({},a.options),t.each(s,(function(t,e){r[t]="function"==typeof e?function(){function s(){return i.prototype[t].apply(this,arguments)}function n(e){return i.prototype[t].apply(this,e)}return function(){var t,i=this._super,o=this._superApply;return this._super=s,this._superApply=n,t=e.apply(this,arguments),this._super=i,this._superApply=o,t}}():e})),o.prototype=t.widget.extend(a,{widgetEventPrefix:n&&a.widgetEventPrefix||e},r,{constructor:o,namespace:l,widgetName:e,widgetFullName:u}),n?(t.each(n._childConstructors,(function(e,i){var s=i.prototype;t.widget(s.namespace+"."+s.widgetName,o,i._proto)})),delete n._childConstructors):i._childConstructors.push(o),t.widget.bridge(e,o),o},t.widget.extend=function(e){for(var i,o,a=n.call(arguments,1),r=0,l=a.length;r<l;r++)for(i in a[r])o=a[r][i],s.call(a[r],i)&&void 0!==o&&(t.isPlainObject(o)?e[i]=t.isPlainObject(e[i])?t.widget.extend({},e[i],o):t.widget.extend({},o):e[i]=o);return e},t.widget.bridge=function(e,i){var s=i.prototype.widgetFullName||e;t.fn[e]=function(o){var a="string"==typeof o,r=n.call(arguments,1),l=this;return a?this.length||"instance"!==o?this.each((function(){var i,n=t.data(this,s);return"instance"===o?(l=n,!1):n?"function"!=typeof n[o]||"_"===o.charAt(0)?t.error("no such method '"+o+"' for "+e+" widget instance"):(i=n[o].apply(n,r))!==n&&void 0!==i?(l=i&&i.jquery?l.pushStack(i.get()):i,!1):void 0:t.error("cannot call methods on "+e+" prior to initialization; attempted to call method '"+o+"'")})):l=void 0:(r.length&&(o=t.widget.extend.apply(null,[o].concat(r))),this.each((function(){var e=t.data(this,s);e?(e.option(o||{}),e._init&&e._init()):t.data(this,s,new i(o,this))}))),l}},t.Widget=function(){},t.Widget._childConstructors=[],t.Widget.prototype={widgetName:"widget",widgetEventPrefix:"",defaultElement:"<div>",options:{classes:{},disabled:!1,create:null},_createWidget:function(e,s){s=t(s||this.defaultElement||this)[0],this.element=t(s),this.uuid=i++,this.eventNamespace="."+this.widgetName+this.uuid,this.bindings=t(),this.hoverable=t(),this.focusable=t(),this.classesElementLookup={},s!==this&&(t.data(s,this.widgetFullName,this),this._on(!0,this.element,{remove:function(t){t.target===s&&this.destroy()}}),this.document=t(s.style?s.ownerDocument:s.document||s),this.window=t(this.document[0].defaultView||this.document[0].parentWindow)),this.options=t.widget.extend({},this.options,this._getCreateOptions(),e),this._create(),this.options.disabled&&this._setOptionDisabled(this.options.disabled),this._trigger("create",null,this._getCreateEventData()),this._init()},_getCreateOptions:function(){return{}},_getCreateEventData:t.noop,_create:t.noop,_init:t.noop,destroy:function(){var e=this;this._destroy(),t.each(this.classesElementLookup,(function(t,i){e._removeClass(i,t)})),this.element.off(this.eventNamespace).removeData(this.widgetFullName),this.widget().off(this.eventNamespace).removeAttr("aria-disabled"),this.bindings.off(this.eventNamespace)},_destroy:t.noop,widget:function(){return this.element},option:function(e,i){var s,n,o,a=e;if(0===arguments.length)return t.widget.extend({},this.options);if("string"==typeof e)if(a={},s=e.split("."),e=s.shift(),s.length){for(n=a[e]=t.widget.extend({},this.options[e]),o=0;o<s.length-1;o++)n[s[o]]=n[s[o]]||{},n=n[s[o]];if(e=s.pop(),1===arguments.length)return void 0===n[e]?null:n[e];n[e]=i}else{if(1===arguments.length)return void 0===this.options[e]?null:this.options[e];a[e]=i}return this._setOptions(a),this},_setOptions:function(t){var e;for(e in t)this._setOption(e,t[e]);return this},_setOption:function(t,e){return"classes"===t&&this._setOptionClasses(e),this.options[t]=e,"disabled"===t&&this._setOptionDisabled(e),this},_setOptionClasses:function(e){var i,s,n;for(i in e)n=this.classesElementLookup[i],e[i]!==this.options.classes[i]&&n&&n.length&&(s=t(n.get()),this._removeClass(n,i),s.addClass(this._classes({element:s,keys:i,classes:e,add:!0})))},_setOptionDisabled:function(t){this._toggleClass(this.widget(),this.widgetFullName+"-disabled",null,!!t),t&&(this._removeClass(this.hoverable,null,"ui-state-hover"),this._removeClass(this.focusable,null,"ui-state-focus"))},enable:function(){return this._setOptions({disabled:!1})},disable:function(){return this._setOptions({disabled:!0})},_classes:function(e){var i=[],s=this;function n(){var i=[];e.element.each((function(e,n){t.map(s.classesElementLookup,(function(t){return t})).some((function(t){return t.is(n)}))||i.push(n)})),s._on(t(i),{remove:"_untrackClassesElement"})}function o(o,a){var r,l;for(l=0;l<o.length;l++)r=s.classesElementLookup[o[l]]||t(),e.add?(n(),r=t(t.uniqueSort(r.get().concat(e.element.get())))):r=t(r.not(e.element).get()),s.classesElementLookup[o[l]]=r,i.push(o[l]),a&&e.classes[o[l]]&&i.push(e.classes[o[l]])}return(e=t.extend({element:this.element,classes:this.options.classes||{}},e)).keys&&o(e.keys.match(/\S+/g)||[],!0),e.extra&&o(e.extra.match(/\S+/g)||[]),i.join(" ")},_untrackClassesElement:function(e){var i=this;t.each(i.classesElementLookup,(function(s,n){-1!==t.inArray(e.target,n)&&(i.classesElementLookup[s]=t(n.not(e.target).get()))})),this._off(t(e.target))},_removeClass:function(t,e,i){return this._toggleClass(t,e,i,!1)},_addClass:function(t,e,i){return this._toggleClass(t,e,i,!0)},_toggleClass:function(t,e,i,s){s="boolean"==typeof s?s:i;var n="string"==typeof t||null===t,o={extra:n?e:i,keys:n?t:e,element:n?this.element:t,add:s};return o.element.toggleClass(this._classes(o),s),this},_on:function(e,i,s){var n,o=this;"boolean"!=typeof e&&(s=i,i=e,e=!1),s?(i=n=t(i),this.bindings=this.bindings.add(i)):(s=i,i=this.element,n=this.widget()),t.each(s,(function(s,a){function r(){if(e||!0!==o.options.disabled&&!t(this).hasClass("ui-state-disabled"))return("string"==typeof a?o[a]:a).apply(o,arguments)}"string"!=typeof a&&(r.guid=a.guid=a.guid||r.guid||t.guid++);var l=s.match(/^([\w:-]*)\s*(.*)$/),u=l[1]+o.eventNamespace,h=l[2];h?n.on(u,h,r):i.on(u,r)}))},_off:function(e,i){i=(i||"").split(" ").join(this.eventNamespace+" ")+this.eventNamespace,e.off(i),this.bindings=t(this.bindings.not(e).get()),this.focusable=t(this.focusable.not(e).get()),this.hoverable=t(this.hoverable.not(e).get())},_delay:function(t,e){var i=this;return setTimeout((function(){return("string"==typeof t?i[t]:t).apply(i,arguments)}),e||0)},_hoverable:function(e){this.hoverable=this.hoverable.add(e),this._on(e,{mouseenter:function(e){this._addClass(t(e.currentTarget),null,"ui-state-hover")},mouseleave:function(e){this._removeClass(t(e.currentTarget),null,"ui-state-hover")}})},_focusable:function(e){this.focusable=this.focusable.add(e),this._on(e,{focusin:function(e){this._addClass(t(e.currentTarget),null,"ui-state-focus")},focusout:function(e){this._removeClass(t(e.currentTarget),null,"ui-state-focus")}})},_trigger:function(e,i,s){var n,o,a=this.options[e];if(s=s||{},(i=t.Event(i)).type=(e===this.widgetEventPrefix?e:this.widgetEventPrefix+e).toLowerCase(),i.target=this.element[0],o=i.originalEvent)for(n in o)n in i||(i[n]=o[n]);return this.element.trigger(i,s),!("function"==typeof a&&!1===a.apply(this.element[0],[i].concat(s))||i.isDefaultPrevented())}},t.each({show:"fadeIn",hide:"fadeOut"},(function(e,i){t.Widget.prototype["_"+e]=function(s,n,o){var a;"string"==typeof n&&(n={effect:n});var r=n?!0===n||"number"==typeof n?i:n.effect||i:e;"number"==typeof(n=n||{})?n={duration:n}:!0===n&&(n={}),a=!t.isEmptyObject(n),n.complete=o,n.delay&&s.delay(n.delay),a&&t.effects&&t.effects.effect[r]?s[e](n):r!==e&&s[r]?s[r](n.duration,n.easing,o):s.queue((function(i){t(this)[e](),o&&o.call(s[0]),i()}))}})),t.widget}));

/*!
 * jQuery UI Controlgroup 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","../widget"],t):t(jQuery)}((function(t){"use strict";var e=/ui-corner-([a-z]){2,6}/g;return t.widget("ui.controlgroup",{version:"1.13.2",defaultElement:"<div>",options:{direction:"horizontal",disabled:null,onlyVisible:!0,items:{button:"input[type=button], input[type=submit], input[type=reset], button, a",controlgroupLabel:".ui-controlgroup-label",checkboxradio:"input[type='checkbox'], input[type='radio']",selectmenu:"select",spinner:".ui-spinner-input"}},_create:function(){this._enhance()},_enhance:function(){this.element.attr("role","toolbar"),this.refresh()},_destroy:function(){this._callChildMethod("destroy"),this.childWidgets.removeData("ui-controlgroup-data"),this.element.removeAttr("role"),this.options.items.controlgroupLabel&&this.element.find(this.options.items.controlgroupLabel).find(".ui-controlgroup-label-contents").contents().unwrap()},_initWidgets:function(){var e=this,i=[];t.each(this.options.items,(function(n,o){var s,l={};if(o)return"controlgroupLabel"===n?((s=e.element.find(o)).each((function(){var e=t(this);e.children(".ui-controlgroup-label-contents").length||e.contents().wrapAll("<span class='ui-controlgroup-label-contents'></span>")})),e._addClass(s,null,"ui-widget ui-widget-content ui-state-default"),void(i=i.concat(s.get()))):void(t.fn[n]&&(l=e["_"+n+"Options"]?e["_"+n+"Options"]("middle"):{classes:{}},e.element.find(o).each((function(){var o=t(this),s=o[n]("instance"),r=t.widget.extend({},l);if("button"!==n||!o.parent(".ui-spinner").length){s||(s=o[n]()[n]("instance")),s&&(r.classes=e._resolveClassesValues(r.classes,s)),o[n](r);var u=o[n]("widget");t.data(u[0],"ui-controlgroup-data",s||o[n]("instance")),i.push(u[0])}}))))})),this.childWidgets=t(t.uniqueSort(i)),this._addClass(this.childWidgets,"ui-controlgroup-item")},_callChildMethod:function(e){this.childWidgets.each((function(){var i=t(this).data("ui-controlgroup-data");i&&i[e]&&i[e]()}))},_updateCornerClass:function(t,e){var i=this._buildSimpleOptions(e,"label").classes.label;this._removeClass(t,null,"ui-corner-top ui-corner-bottom ui-corner-left ui-corner-right ui-corner-all"),this._addClass(t,null,i)},_buildSimpleOptions:function(t,e){var i="vertical"===this.options.direction,n={classes:{}};return n.classes[e]={middle:"",first:"ui-corner-"+(i?"top":"left"),last:"ui-corner-"+(i?"bottom":"right"),only:"ui-corner-all"}[t],n},_spinnerOptions:function(t){var e=this._buildSimpleOptions(t,"ui-spinner");return e.classes["ui-spinner-up"]="",e.classes["ui-spinner-down"]="",e},_buttonOptions:function(t){return this._buildSimpleOptions(t,"ui-button")},_checkboxradioOptions:function(t){return this._buildSimpleOptions(t,"ui-checkboxradio-label")},_selectmenuOptions:function(t){var e="vertical"===this.options.direction;return{width:!!e&&"auto",classes:{middle:{"ui-selectmenu-button-open":"","ui-selectmenu-button-closed":""},first:{"ui-selectmenu-button-open":"ui-corner-"+(e?"top":"tl"),"ui-selectmenu-button-closed":"ui-corner-"+(e?"top":"left")},last:{"ui-selectmenu-button-open":e?"":"ui-corner-tr","ui-selectmenu-button-closed":"ui-corner-"+(e?"bottom":"right")},only:{"ui-selectmenu-button-open":"ui-corner-top","ui-selectmenu-button-closed":"ui-corner-all"}}[t]}},_resolveClassesValues:function(i,n){var o={};return t.each(i,(function(t){var s=n.options.classes[t]||"";s=String.prototype.trim.call(s.replace(e,"")),o[t]=(s+" "+i[t]).replace(/\s+/g," ")})),o},_setOption:function(t,e){"direction"===t&&this._removeClass("ui-controlgroup-"+this.options.direction),this._super(t,e),"disabled"!==t?this.refresh():this._callChildMethod(e?"disable":"enable")},refresh:function(){var e,i=this;this._addClass("ui-controlgroup ui-controlgroup-"+this.options.direction),"horizontal"===this.options.direction&&this._addClass(null,"ui-helper-clearfix"),this._initWidgets(),e=this.childWidgets,this.options.onlyVisible&&(e=e.filter(":visible")),e.length&&(t.each(["first","last"],(function(t,n){var o=e[n]().data("ui-controlgroup-data");if(o&&i["_"+o.widgetName+"Options"]){var s=i["_"+o.widgetName+"Options"](1===e.length?"only":n);s.classes=i._resolveClassesValues(s.classes,o),o.element[o.widgetName](s)}else i._updateCornerClass(e[n](),n)})),this._callChildMethod("refresh"))}})}));

/*!
 * jQuery UI Form Reset Mixin 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","./form","./version"],e):e(jQuery)}((function(e){"use strict";return e.ui.formResetMixin={_formResetHandler:function(){var t=e(this);setTimeout((function(){var r=t.data("ui-form-reset-instances");e.each(r,(function(){this.refresh()}))}))},_bindFormResetHandler:function(){if(this.form=this.element._form(),this.form.length){var e=this.form.data("ui-form-reset-instances")||[];e.length||this.form.on("reset.ui-form-reset",this._formResetHandler),e.push(this),this.form.data("ui-form-reset-instances",e)}},_unbindFormResetHandler:function(){if(this.form.length){var t=this.form.data("ui-form-reset-instances");t.splice(e.inArray(this,t),1),t.length?this.form.data("ui-form-reset-instances",t):this.form.removeData("ui-form-reset-instances").off("reset.ui-form-reset")}}}}));

/*!
 * jQuery UI Labels 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./version"],t):t(jQuery)}((function(t){"use strict";return t.fn.labels=function(){var e,s,i,n,a;return this.length?this[0].labels&&this[0].labels.length?this.pushStack(this[0].labels):(n=this.eq(0).parents("label"),(i=this.attr("id"))&&(a=(e=this.eq(0).parents().last()).add(e.length?e.siblings():this.siblings()),s="label[for='"+t.escapeSelector(i)+"']",n=n.add(a.find(s).addBack(s))),this.pushStack(n)):this.pushStack([])}}));

/*!
 * jQuery UI Mouse 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","../ie","../version","../widget"],e):e(jQuery)}((function(e){"use strict";var t=!1;return e(document).on("mouseup",(function(){t=!1})),e.widget("ui.mouse",{version:"1.13.2",options:{cancel:"input, textarea, button, select, option",distance:1,delay:0},_mouseInit:function(){var t=this;this.element.on("mousedown."+this.widgetName,(function(e){return t._mouseDown(e)})).on("click."+this.widgetName,(function(i){if(!0===e.data(i.target,t.widgetName+".preventClickEvent"))return e.removeData(i.target,t.widgetName+".preventClickEvent"),i.stopImmediatePropagation(),!1})),this.started=!1},_mouseDestroy:function(){this.element.off("."+this.widgetName),this._mouseMoveDelegate&&this.document.off("mousemove."+this.widgetName,this._mouseMoveDelegate).off("mouseup."+this.widgetName,this._mouseUpDelegate)},_mouseDown:function(i){if(!t){this._mouseMoved=!1,this._mouseStarted&&this._mouseUp(i),this._mouseDownEvent=i;var s=this,o=1===i.which,n=!("string"!=typeof this.options.cancel||!i.target.nodeName)&&e(i.target).closest(this.options.cancel).length;return!(o&&!n&&this._mouseCapture(i))||(this.mouseDelayMet=!this.options.delay,this.mouseDelayMet||(this._mouseDelayTimer=setTimeout((function(){s.mouseDelayMet=!0}),this.options.delay)),this._mouseDistanceMet(i)&&this._mouseDelayMet(i)&&(this._mouseStarted=!1!==this._mouseStart(i),!this._mouseStarted)?(i.preventDefault(),!0):(!0===e.data(i.target,this.widgetName+".preventClickEvent")&&e.removeData(i.target,this.widgetName+".preventClickEvent"),this._mouseMoveDelegate=function(e){return s._mouseMove(e)},this._mouseUpDelegate=function(e){return s._mouseUp(e)},this.document.on("mousemove."+this.widgetName,this._mouseMoveDelegate).on("mouseup."+this.widgetName,this._mouseUpDelegate),i.preventDefault(),t=!0,!0))}},_mouseMove:function(t){if(this._mouseMoved){if(e.ui.ie&&(!document.documentMode||document.documentMode<9)&&!t.button)return this._mouseUp(t);if(!t.which)if(t.originalEvent.altKey||t.originalEvent.ctrlKey||t.originalEvent.metaKey||t.originalEvent.shiftKey)this.ignoreMissingWhich=!0;else if(!this.ignoreMissingWhich)return this._mouseUp(t)}return(t.which||t.button)&&(this._mouseMoved=!0),this._mouseStarted?(this._mouseDrag(t),t.preventDefault()):(this._mouseDistanceMet(t)&&this._mouseDelayMet(t)&&(this._mouseStarted=!1!==this._mouseStart(this._mouseDownEvent,t),this._mouseStarted?this._mouseDrag(t):this._mouseUp(t)),!this._mouseStarted)},_mouseUp:function(i){this.document.off("mousemove."+this.widgetName,this._mouseMoveDelegate).off("mouseup."+this.widgetName,this._mouseUpDelegate),this._mouseStarted&&(this._mouseStarted=!1,i.target===this._mouseDownEvent.target&&e.data(i.target,this.widgetName+".preventClickEvent",!0),this._mouseStop(i)),this._mouseDelayTimer&&(clearTimeout(this._mouseDelayTimer),delete this._mouseDelayTimer),this.ignoreMissingWhich=!1,t=!1,i.preventDefault()},_mouseDistanceMet:function(e){return Math.max(Math.abs(this._mouseDownEvent.pageX-e.pageX),Math.abs(this._mouseDownEvent.pageY-e.pageY))>=this.options.distance},_mouseDelayMet:function(){return this.mouseDelayMet},_mouseStart:function(){},_mouseDrag:function(){},_mouseStop:function(){},_mouseCapture:function(){return!0}})}));

/*!
 * jQuery UI Checkboxradio 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery","../form-reset-mixin","../labels","../widget"],e):e(jQuery)}((function(e){"use strict";return e.widget("ui.checkboxradio",[e.ui.formResetMixin,{version:"1.13.2",options:{disabled:null,label:null,icon:!0,classes:{"ui-checkboxradio-label":"ui-corner-all","ui-checkboxradio-icon":"ui-corner-all"}},_getCreateOptions:function(){var i,t,s,n=this._super()||{};return this._readType(),t=this.element.labels(),this.label=e(t[t.length-1]),this.label.length||e.error("No label found for checkboxradio widget"),this.originalLabel="",(s=this.label.contents().not(this.element[0])).length&&(this.originalLabel+=s.clone().wrapAll("<div></div>").parent().html()),this.originalLabel&&(n.label=this.originalLabel),null!=(i=this.element[0].disabled)&&(n.disabled=i),n},_create:function(){var e=this.element[0].checked;this._bindFormResetHandler(),null==this.options.disabled&&(this.options.disabled=this.element[0].disabled),this._setOption("disabled",this.options.disabled),this._addClass("ui-checkboxradio","ui-helper-hidden-accessible"),this._addClass(this.label,"ui-checkboxradio-label","ui-button ui-widget"),"radio"===this.type&&this._addClass(this.label,"ui-checkboxradio-radio-label"),this.options.label&&this.options.label!==this.originalLabel?this._updateLabel():this.originalLabel&&(this.options.label=this.originalLabel),this._enhance(),e&&this._addClass(this.label,"ui-checkboxradio-checked","ui-state-active"),this._on({change:"_toggleClasses",focus:function(){this._addClass(this.label,null,"ui-state-focus ui-visual-focus")},blur:function(){this._removeClass(this.label,null,"ui-state-focus ui-visual-focus")}})},_readType:function(){var i=this.element[0].nodeName.toLowerCase();this.type=this.element[0].type,"input"===i&&/radio|checkbox/.test(this.type)||e.error("Can't create checkboxradio on element.nodeName="+i+" and element.type="+this.type)},_enhance:function(){this._updateIcon(this.element[0].checked)},widget:function(){return this.label},_getRadioGroup:function(){var i=this.element[0].name,t="input[name='"+e.escapeSelector(i)+"']";return i?(this.form.length?e(this.form[0].elements).filter(t):e(t).filter((function(){return 0===e(this)._form().length}))).not(this.element):e([])},_toggleClasses:function(){var i=this.element[0].checked;this._toggleClass(this.label,"ui-checkboxradio-checked","ui-state-active",i),this.options.icon&&"checkbox"===this.type&&this._toggleClass(this.icon,null,"ui-icon-check ui-state-checked",i)._toggleClass(this.icon,null,"ui-icon-blank",!i),"radio"===this.type&&this._getRadioGroup().each((function(){var i=e(this).checkboxradio("instance");i&&i._removeClass(i.label,"ui-checkboxradio-checked","ui-state-active")}))},_destroy:function(){this._unbindFormResetHandler(),this.icon&&(this.icon.remove(),this.iconSpace.remove())},_setOption:function(e,i){if("label"!==e||i){if(this._super(e,i),"disabled"===e)return this._toggleClass(this.label,null,"ui-state-disabled",i),void(this.element[0].disabled=i);this.refresh()}},_updateIcon:function(i){var t="ui-icon ui-icon-background ";this.options.icon?(this.icon||(this.icon=e("<span>"),this.iconSpace=e("<span> </span>"),this._addClass(this.iconSpace,"ui-checkboxradio-icon-space")),"checkbox"===this.type?(t+=i?"ui-icon-check ui-state-checked":"ui-icon-blank",this._removeClass(this.icon,null,i?"ui-icon-blank":"ui-icon-check")):t+="ui-icon-blank",this._addClass(this.icon,"ui-checkboxradio-icon",t),i||this._removeClass(this.icon,null,"ui-icon-check ui-state-checked"),this.icon.prependTo(this.label).after(this.iconSpace)):void 0!==this.icon&&(this.icon.remove(),this.iconSpace.remove(),delete this.icon)},_updateLabel:function(){var e=this.label.contents().not(this.element[0]);this.icon&&(e=e.not(this.icon[0])),this.iconSpace&&(e=e.not(this.iconSpace[0])),e.remove(),this.label.append(this.options.label)},refresh:function(){var e=this.element[0].checked,i=this.element[0].disabled;this._updateIcon(e),this._toggleClass(this.label,"ui-checkboxradio-checked","ui-state-active",e),null!==this.options.label&&this._updateLabel(),i!==this.options.disabled&&this._setOptions({disabled:i})}}]),e.ui.checkboxradio}));

/*!
 * jQuery UI Draggable 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./mouse","../data","../plugin","../safe-active-element","../safe-blur","../scroll-parent","../version","../widget"],t):t(jQuery)}((function(t){"use strict";return t.widget("ui.draggable",t.ui.mouse,{version:"1.13.2",widgetEventPrefix:"drag",options:{addClasses:!0,appendTo:"parent",axis:!1,connectToSortable:!1,containment:!1,cursor:"auto",cursorAt:!1,grid:!1,handle:!1,helper:"original",iframeFix:!1,opacity:!1,refreshPositions:!1,revert:!1,revertDuration:500,scope:"default",scroll:!0,scrollSensitivity:20,scrollSpeed:20,snap:!1,snapMode:"both",snapTolerance:20,stack:!1,zIndex:!1,drag:null,start:null,stop:null},_create:function(){"original"===this.options.helper&&this._setPositionRelative(),this.options.addClasses&&this._addClass("ui-draggable"),this._setHandleClassName(),this._mouseInit()},_setOption:function(t,e){this._super(t,e),"handle"===t&&(this._removeHandleClassName(),this._setHandleClassName())},_destroy:function(){(this.helper||this.element).is(".ui-draggable-dragging")?this.destroyOnClear=!0:(this._removeHandleClassName(),this._mouseDestroy())},_mouseCapture:function(e){var s=this.options;return!(this.helper||s.disabled||t(e.target).closest(".ui-resizable-handle").length>0)&&(this.handle=this._getHandle(e),!!this.handle&&(this._blurActiveElement(e),this._blockFrames(!0===s.iframeFix?"iframe":s.iframeFix),!0))},_blockFrames:function(e){this.iframeBlocks=this.document.find(e).map((function(){var e=t(this);return t("<div>").css("position","absolute").appendTo(e.parent()).outerWidth(e.outerWidth()).outerHeight(e.outerHeight()).offset(e.offset())[0]}))},_unblockFrames:function(){this.iframeBlocks&&(this.iframeBlocks.remove(),delete this.iframeBlocks)},_blurActiveElement:function(e){var s=t.ui.safeActiveElement(this.document[0]);t(e.target).closest(s).length||t.ui.safeBlur(s)},_mouseStart:function(e){var s=this.options;return this.helper=this._createHelper(e),this._addClass(this.helper,"ui-draggable-dragging"),this._cacheHelperProportions(),t.ui.ddmanager&&(t.ui.ddmanager.current=this),this._cacheMargins(),this.cssPosition=this.helper.css("position"),this.scrollParent=this.helper.scrollParent(!0),this.offsetParent=this.helper.offsetParent(),this.hasFixedAncestor=this.helper.parents().filter((function(){return"fixed"===t(this).css("position")})).length>0,this.positionAbs=this.element.offset(),this._refreshOffsets(e),this.originalPosition=this.position=this._generatePosition(e,!1),this.originalPageX=e.pageX,this.originalPageY=e.pageY,s.cursorAt&&this._adjustOffsetFromHelper(s.cursorAt),this._setContainment(),!1===this._trigger("start",e)?(this._clear(),!1):(this._cacheHelperProportions(),t.ui.ddmanager&&!s.dropBehaviour&&t.ui.ddmanager.prepareOffsets(this,e),this._mouseDrag(e,!0),t.ui.ddmanager&&t.ui.ddmanager.dragStart(this,e),!0)},_refreshOffsets:function(t){this.offset={top:this.positionAbs.top-this.margins.top,left:this.positionAbs.left-this.margins.left,scroll:!1,parent:this._getParentOffset(),relative:this._getRelativeOffset()},this.offset.click={left:t.pageX-this.offset.left,top:t.pageY-this.offset.top}},_mouseDrag:function(e,s){if(this.hasFixedAncestor&&(this.offset.parent=this._getParentOffset()),this.position=this._generatePosition(e,!0),this.positionAbs=this._convertPositionTo("absolute"),!s){var i=this._uiHash();if(!1===this._trigger("drag",e,i))return this._mouseUp(new t.Event("mouseup",e)),!1;this.position=i.position}return this.helper[0].style.left=this.position.left+"px",this.helper[0].style.top=this.position.top+"px",t.ui.ddmanager&&t.ui.ddmanager.drag(this,e),!1},_mouseStop:function(e){var s=this,i=!1;return t.ui.ddmanager&&!this.options.dropBehaviour&&(i=t.ui.ddmanager.drop(this,e)),this.dropped&&(i=this.dropped,this.dropped=!1),"invalid"===this.options.revert&&!i||"valid"===this.options.revert&&i||!0===this.options.revert||"function"==typeof this.options.revert&&this.options.revert.call(this.element,i)?t(this.helper).animate(this.originalPosition,parseInt(this.options.revertDuration,10),(function(){!1!==s._trigger("stop",e)&&s._clear()})):!1!==this._trigger("stop",e)&&this._clear(),!1},_mouseUp:function(e){return this._unblockFrames(),t.ui.ddmanager&&t.ui.ddmanager.dragStop(this,e),this.handleElement.is(e.target)&&this.element.trigger("focus"),t.ui.mouse.prototype._mouseUp.call(this,e)},cancel:function(){return this.helper.is(".ui-draggable-dragging")?this._mouseUp(new t.Event("mouseup",{target:this.element[0]})):this._clear(),this},_getHandle:function(e){return!this.options.handle||!!t(e.target).closest(this.element.find(this.options.handle)).length},_setHandleClassName:function(){this.handleElement=this.options.handle?this.element.find(this.options.handle):this.element,this._addClass(this.handleElement,"ui-draggable-handle")},_removeHandleClassName:function(){this._removeClass(this.handleElement,"ui-draggable-handle")},_createHelper:function(e){var s=this.options,i="function"==typeof s.helper,o=i?t(s.helper.apply(this.element[0],[e])):"clone"===s.helper?this.element.clone().removeAttr("id"):this.element;return o.parents("body").length||o.appendTo("parent"===s.appendTo?this.element[0].parentNode:s.appendTo),i&&o[0]===this.element[0]&&this._setPositionRelative(),o[0]===this.element[0]||/(fixed|absolute)/.test(o.css("position"))||o.css("position","absolute"),o},_setPositionRelative:function(){/^(?:r|a|f)/.test(this.element.css("position"))||(this.element[0].style.position="relative")},_adjustOffsetFromHelper:function(t){"string"==typeof t&&(t=t.split(" ")),Array.isArray(t)&&(t={left:+t[0],top:+t[1]||0}),"left"in t&&(this.offset.click.left=t.left+this.margins.left),"right"in t&&(this.offset.click.left=this.helperProportions.width-t.right+this.margins.left),"top"in t&&(this.offset.click.top=t.top+this.margins.top),"bottom"in t&&(this.offset.click.top=this.helperProportions.height-t.bottom+this.margins.top)},_isRootNode:function(t){return/(html|body)/i.test(t.tagName)||t===this.document[0]},_getParentOffset:function(){var e=this.offsetParent.offset(),s=this.document[0];return"absolute"===this.cssPosition&&this.scrollParent[0]!==s&&t.contains(this.scrollParent[0],this.offsetParent[0])&&(e.left+=this.scrollParent.scrollLeft(),e.top+=this.scrollParent.scrollTop()),this._isRootNode(this.offsetParent[0])&&(e={top:0,left:0}),{top:e.top+(parseInt(this.offsetParent.css("borderTopWidth"),10)||0),left:e.left+(parseInt(this.offsetParent.css("borderLeftWidth"),10)||0)}},_getRelativeOffset:function(){if("relative"!==this.cssPosition)return{top:0,left:0};var t=this.element.position(),e=this._isRootNode(this.scrollParent[0]);return{top:t.top-(parseInt(this.helper.css("top"),10)||0)+(e?0:this.scrollParent.scrollTop()),left:t.left-(parseInt(this.helper.css("left"),10)||0)+(e?0:this.scrollParent.scrollLeft())}},_cacheMargins:function(){this.margins={left:parseInt(this.element.css("marginLeft"),10)||0,top:parseInt(this.element.css("marginTop"),10)||0,right:parseInt(this.element.css("marginRight"),10)||0,bottom:parseInt(this.element.css("marginBottom"),10)||0}},_cacheHelperProportions:function(){this.helperProportions={width:this.helper.outerWidth(),height:this.helper.outerHeight()}},_setContainment:function(){var e,s,i,o=this.options,n=this.document[0];this.relativeContainer=null,o.containment?"window"!==o.containment?"document"!==o.containment?o.containment.constructor!==Array?("parent"===o.containment&&(o.containment=this.helper[0].parentNode),(i=(s=t(o.containment))[0])&&(e=/(scroll|auto)/.test(s.css("overflow")),this.containment=[(parseInt(s.css("borderLeftWidth"),10)||0)+(parseInt(s.css("paddingLeft"),10)||0),(parseInt(s.css("borderTopWidth"),10)||0)+(parseInt(s.css("paddingTop"),10)||0),(e?Math.max(i.scrollWidth,i.offsetWidth):i.offsetWidth)-(parseInt(s.css("borderRightWidth"),10)||0)-(parseInt(s.css("paddingRight"),10)||0)-this.helperProportions.width-this.margins.left-this.margins.right,(e?Math.max(i.scrollHeight,i.offsetHeight):i.offsetHeight)-(parseInt(s.css("borderBottomWidth"),10)||0)-(parseInt(s.css("paddingBottom"),10)||0)-this.helperProportions.height-this.margins.top-this.margins.bottom],this.relativeContainer=s)):this.containment=o.containment:this.containment=[0,0,t(n).width()-this.helperProportions.width-this.margins.left,(t(n).height()||n.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]:this.containment=[t(window).scrollLeft()-this.offset.relative.left-this.offset.parent.left,t(window).scrollTop()-this.offset.relative.top-this.offset.parent.top,t(window).scrollLeft()+t(window).width()-this.helperProportions.width-this.margins.left,t(window).scrollTop()+(t(window).height()||n.body.parentNode.scrollHeight)-this.helperProportions.height-this.margins.top]:this.containment=null},_convertPositionTo:function(t,e){e||(e=this.position);var s="absolute"===t?1:-1,i=this._isRootNode(this.scrollParent[0]);return{top:e.top+this.offset.relative.top*s+this.offset.parent.top*s-("fixed"===this.cssPosition?-this.offset.scroll.top:i?0:this.offset.scroll.top)*s,left:e.left+this.offset.relative.left*s+this.offset.parent.left*s-("fixed"===this.cssPosition?-this.offset.scroll.left:i?0:this.offset.scroll.left)*s}},_generatePosition:function(t,e){var s,i,o,n,r=this.options,l=this._isRootNode(this.scrollParent[0]),a=t.pageX,h=t.pageY;return l&&this.offset.scroll||(this.offset.scroll={top:this.scrollParent.scrollTop(),left:this.scrollParent.scrollLeft()}),e&&(this.containment&&(this.relativeContainer?(i=this.relativeContainer.offset(),s=[this.containment[0]+i.left,this.containment[1]+i.top,this.containment[2]+i.left,this.containment[3]+i.top]):s=this.containment,t.pageX-this.offset.click.left<s[0]&&(a=s[0]+this.offset.click.left),t.pageY-this.offset.click.top<s[1]&&(h=s[1]+this.offset.click.top),t.pageX-this.offset.click.left>s[2]&&(a=s[2]+this.offset.click.left),t.pageY-this.offset.click.top>s[3]&&(h=s[3]+this.offset.click.top)),r.grid&&(o=r.grid[1]?this.originalPageY+Math.round((h-this.originalPageY)/r.grid[1])*r.grid[1]:this.originalPageY,h=s?o-this.offset.click.top>=s[1]||o-this.offset.click.top>s[3]?o:o-this.offset.click.top>=s[1]?o-r.grid[1]:o+r.grid[1]:o,n=r.grid[0]?this.originalPageX+Math.round((a-this.originalPageX)/r.grid[0])*r.grid[0]:this.originalPageX,a=s?n-this.offset.click.left>=s[0]||n-this.offset.click.left>s[2]?n:n-this.offset.click.left>=s[0]?n-r.grid[0]:n+r.grid[0]:n),"y"===r.axis&&(a=this.originalPageX),"x"===r.axis&&(h=this.originalPageY)),{top:h-this.offset.click.top-this.offset.relative.top-this.offset.parent.top+("fixed"===this.cssPosition?-this.offset.scroll.top:l?0:this.offset.scroll.top),left:a-this.offset.click.left-this.offset.relative.left-this.offset.parent.left+("fixed"===this.cssPosition?-this.offset.scroll.left:l?0:this.offset.scroll.left)}},_clear:function(){this._removeClass(this.helper,"ui-draggable-dragging"),this.helper[0]===this.element[0]||this.cancelHelperRemoval||this.helper.remove(),this.helper=null,this.cancelHelperRemoval=!1,this.destroyOnClear&&this.destroy()},_trigger:function(e,s,i){return i=i||this._uiHash(),t.ui.plugin.call(this,e,[s,i,this],!0),/^(drag|start|stop)/.test(e)&&(this.positionAbs=this._convertPositionTo("absolute"),i.offset=this.positionAbs),t.Widget.prototype._trigger.call(this,e,s,i)},plugins:{},_uiHash:function(){return{helper:this.helper,position:this.position,originalPosition:this.originalPosition,offset:this.positionAbs}}}),t.ui.plugin.add("draggable","connectToSortable",{start:function(e,s,i){var o=t.extend({},s,{item:i.element});i.sortables=[],t(i.options.connectToSortable).each((function(){var s=t(this).sortable("instance");s&&!s.options.disabled&&(i.sortables.push(s),s.refreshPositions(),s._trigger("activate",e,o))}))},stop:function(e,s,i){var o=t.extend({},s,{item:i.element});i.cancelHelperRemoval=!1,t.each(i.sortables,(function(){var t=this;t.isOver?(t.isOver=0,i.cancelHelperRemoval=!0,t.cancelHelperRemoval=!1,t._storedCSS={position:t.placeholder.css("position"),top:t.placeholder.css("top"),left:t.placeholder.css("left")},t._mouseStop(e),t.options.helper=t.options._helper):(t.cancelHelperRemoval=!0,t._trigger("deactivate",e,o))}))},drag:function(e,s,i){t.each(i.sortables,(function(){var o=!1,n=this;n.positionAbs=i.positionAbs,n.helperProportions=i.helperProportions,n.offset.click=i.offset.click,n._intersectsWith(n.containerCache)&&(o=!0,t.each(i.sortables,(function(){return this.positionAbs=i.positionAbs,this.helperProportions=i.helperProportions,this.offset.click=i.offset.click,this!==n&&this._intersectsWith(this.containerCache)&&t.contains(n.element[0],this.element[0])&&(o=!1),o}))),o?(n.isOver||(n.isOver=1,i._parent=s.helper.parent(),n.currentItem=s.helper.appendTo(n.element).data("ui-sortable-item",!0),n.options._helper=n.options.helper,n.options.helper=function(){return s.helper[0]},e.target=n.currentItem[0],n._mouseCapture(e,!0),n._mouseStart(e,!0,!0),n.offset.click.top=i.offset.click.top,n.offset.click.left=i.offset.click.left,n.offset.parent.left-=i.offset.parent.left-n.offset.parent.left,n.offset.parent.top-=i.offset.parent.top-n.offset.parent.top,i._trigger("toSortable",e),i.dropped=n.element,t.each(i.sortables,(function(){this.refreshPositions()})),i.currentItem=i.element,n.fromOutside=i),n.currentItem&&(n._mouseDrag(e),s.position=n.position)):n.isOver&&(n.isOver=0,n.cancelHelperRemoval=!0,n.options._revert=n.options.revert,n.options.revert=!1,n._trigger("out",e,n._uiHash(n)),n._mouseStop(e,!0),n.options.revert=n.options._revert,n.options.helper=n.options._helper,n.placeholder&&n.placeholder.remove(),s.helper.appendTo(i._parent),i._refreshOffsets(e),s.position=i._generatePosition(e,!0),i._trigger("fromSortable",e),i.dropped=!1,t.each(i.sortables,(function(){this.refreshPositions()})))}))}}),t.ui.plugin.add("draggable","cursor",{start:function(e,s,i){var o=t("body"),n=i.options;o.css("cursor")&&(n._cursor=o.css("cursor")),o.css("cursor",n.cursor)},stop:function(e,s,i){var o=i.options;o._cursor&&t("body").css("cursor",o._cursor)}}),t.ui.plugin.add("draggable","opacity",{start:function(e,s,i){var o=t(s.helper),n=i.options;o.css("opacity")&&(n._opacity=o.css("opacity")),o.css("opacity",n.opacity)},stop:function(e,s,i){var o=i.options;o._opacity&&t(s.helper).css("opacity",o._opacity)}}),t.ui.plugin.add("draggable","scroll",{start:function(t,e,s){s.scrollParentNotHidden||(s.scrollParentNotHidden=s.helper.scrollParent(!1)),s.scrollParentNotHidden[0]!==s.document[0]&&"HTML"!==s.scrollParentNotHidden[0].tagName&&(s.overflowOffset=s.scrollParentNotHidden.offset())},drag:function(e,s,i){var o=i.options,n=!1,r=i.scrollParentNotHidden[0],l=i.document[0];r!==l&&"HTML"!==r.tagName?(o.axis&&"x"===o.axis||(i.overflowOffset.top+r.offsetHeight-e.pageY<o.scrollSensitivity?r.scrollTop=n=r.scrollTop+o.scrollSpeed:e.pageY-i.overflowOffset.top<o.scrollSensitivity&&(r.scrollTop=n=r.scrollTop-o.scrollSpeed)),o.axis&&"y"===o.axis||(i.overflowOffset.left+r.offsetWidth-e.pageX<o.scrollSensitivity?r.scrollLeft=n=r.scrollLeft+o.scrollSpeed:e.pageX-i.overflowOffset.left<o.scrollSensitivity&&(r.scrollLeft=n=r.scrollLeft-o.scrollSpeed))):(o.axis&&"x"===o.axis||(e.pageY-t(l).scrollTop()<o.scrollSensitivity?n=t(l).scrollTop(t(l).scrollTop()-o.scrollSpeed):t(window).height()-(e.pageY-t(l).scrollTop())<o.scrollSensitivity&&(n=t(l).scrollTop(t(l).scrollTop()+o.scrollSpeed))),o.axis&&"y"===o.axis||(e.pageX-t(l).scrollLeft()<o.scrollSensitivity?n=t(l).scrollLeft(t(l).scrollLeft()-o.scrollSpeed):t(window).width()-(e.pageX-t(l).scrollLeft())<o.scrollSensitivity&&(n=t(l).scrollLeft(t(l).scrollLeft()+o.scrollSpeed)))),!1!==n&&t.ui.ddmanager&&!o.dropBehaviour&&t.ui.ddmanager.prepareOffsets(i,e)}}),t.ui.plugin.add("draggable","snap",{start:function(e,s,i){var o=i.options;i.snapElements=[],t(o.snap.constructor!==String?o.snap.items||":data(ui-draggable)":o.snap).each((function(){var e=t(this),s=e.offset();this!==i.element[0]&&i.snapElements.push({item:this,width:e.outerWidth(),height:e.outerHeight(),top:s.top,left:s.left})}))},drag:function(e,s,i){var o,n,r,l,a,h,p,c,f,d,g=i.options,u=g.snapTolerance,m=s.offset.left,v=m+i.helperProportions.width,_=s.offset.top,P=_+i.helperProportions.height;for(f=i.snapElements.length-1;f>=0;f--)h=(a=i.snapElements[f].left-i.margins.left)+i.snapElements[f].width,c=(p=i.snapElements[f].top-i.margins.top)+i.snapElements[f].height,v<a-u||m>h+u||P<p-u||_>c+u||!t.contains(i.snapElements[f].item.ownerDocument,i.snapElements[f].item)?(i.snapElements[f].snapping&&i.options.snap.release&&i.options.snap.release.call(i.element,e,t.extend(i._uiHash(),{snapItem:i.snapElements[f].item})),i.snapElements[f].snapping=!1):("inner"!==g.snapMode&&(o=Math.abs(p-P)<=u,n=Math.abs(c-_)<=u,r=Math.abs(a-v)<=u,l=Math.abs(h-m)<=u,o&&(s.position.top=i._convertPositionTo("relative",{top:p-i.helperProportions.height,left:0}).top),n&&(s.position.top=i._convertPositionTo("relative",{top:c,left:0}).top),r&&(s.position.left=i._convertPositionTo("relative",{top:0,left:a-i.helperProportions.width}).left),l&&(s.position.left=i._convertPositionTo("relative",{top:0,left:h}).left)),d=o||n||r||l,"outer"!==g.snapMode&&(o=Math.abs(p-_)<=u,n=Math.abs(c-P)<=u,r=Math.abs(a-m)<=u,l=Math.abs(h-v)<=u,o&&(s.position.top=i._convertPositionTo("relative",{top:p,left:0}).top),n&&(s.position.top=i._convertPositionTo("relative",{top:c-i.helperProportions.height,left:0}).top),r&&(s.position.left=i._convertPositionTo("relative",{top:0,left:a}).left),l&&(s.position.left=i._convertPositionTo("relative",{top:0,left:h-i.helperProportions.width}).left)),!i.snapElements[f].snapping&&(o||n||r||l||d)&&i.options.snap.snap&&i.options.snap.snap.call(i.element,e,t.extend(i._uiHash(),{snapItem:i.snapElements[f].item})),i.snapElements[f].snapping=o||n||r||l||d)}}),t.ui.plugin.add("draggable","stack",{start:function(e,s,i){var o,n=i.options,r=t.makeArray(t(n.stack)).sort((function(e,s){return(parseInt(t(e).css("zIndex"),10)||0)-(parseInt(t(s).css("zIndex"),10)||0)}));r.length&&(o=parseInt(t(r[0]).css("zIndex"),10)||0,t(r).each((function(e){t(this).css("zIndex",o+e)})),this.css("zIndex",o+r.length))}}),t.ui.plugin.add("draggable","zIndex",{start:function(e,s,i){var o=t(s.helper),n=i.options;o.css("zIndex")&&(n._zIndex=o.css("zIndex")),o.css("zIndex",n.zIndex)},stop:function(e,s,i){var o=i.options;o._zIndex&&t(s.helper).css("zIndex",o._zIndex)}}),t.ui.draggable}));

/*!
 * jQuery UI Resizable 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./mouse","../disable-selection","../plugin","../version","../widget"],t):t(jQuery)}((function(t){"use strict";return t.widget("ui.resizable",t.ui.mouse,{version:"1.13.2",widgetEventPrefix:"resize",options:{alsoResize:!1,animate:!1,animateDuration:"slow",animateEasing:"swing",aspectRatio:!1,autoHide:!1,classes:{"ui-resizable-se":"ui-icon ui-icon-gripsmall-diagonal-se"},containment:!1,ghost:!1,grid:!1,handles:"e,s,se",helper:!1,maxHeight:null,maxWidth:null,minHeight:10,minWidth:10,zIndex:90,resize:null,start:null,stop:null},_num:function(t){return parseFloat(t)||0},_isNumber:function(t){return!isNaN(parseFloat(t))},_hasScroll:function(i,e){if("hidden"===t(i).css("overflow"))return!1;var s=e&&"left"===e?"scrollLeft":"scrollTop",h=!1;if(i[s]>0)return!0;try{i[s]=1,h=i[s]>0,i[s]=0}catch(t){}return h},_create:function(){var i,e=this.options,s=this;this._addClass("ui-resizable"),t.extend(this,{_aspectRatio:!!e.aspectRatio,aspectRatio:e.aspectRatio,originalElement:this.element,_proportionallyResizeElements:[],_helper:e.helper||e.ghost||e.animate?e.helper||"ui-resizable-helper":null}),this.element[0].nodeName.match(/^(canvas|textarea|input|select|button|img)$/i)&&(this.element.wrap(t("<div class='ui-wrapper'></div>").css({overflow:"hidden",position:this.element.css("position"),width:this.element.outerWidth(),height:this.element.outerHeight(),top:this.element.css("top"),left:this.element.css("left")})),this.element=this.element.parent().data("ui-resizable",this.element.resizable("instance")),this.elementIsWrapper=!0,i={marginTop:this.originalElement.css("marginTop"),marginRight:this.originalElement.css("marginRight"),marginBottom:this.originalElement.css("marginBottom"),marginLeft:this.originalElement.css("marginLeft")},this.element.css(i),this.originalElement.css("margin",0),this.originalResizeStyle=this.originalElement.css("resize"),this.originalElement.css("resize","none"),this._proportionallyResizeElements.push(this.originalElement.css({position:"static",zoom:1,display:"block"})),this.originalElement.css(i),this._proportionallyResize()),this._setupHandles(),e.autoHide&&t(this.element).on("mouseenter",(function(){e.disabled||(s._removeClass("ui-resizable-autohide"),s._handles.show())})).on("mouseleave",(function(){e.disabled||s.resizing||(s._addClass("ui-resizable-autohide"),s._handles.hide())})),this._mouseInit()},_destroy:function(){this._mouseDestroy(),this._addedHandles.remove();var i,e=function(i){t(i).removeData("resizable").removeData("ui-resizable").off(".resizable")};return this.elementIsWrapper&&(e(this.element),i=this.element,this.originalElement.css({position:i.css("position"),width:i.outerWidth(),height:i.outerHeight(),top:i.css("top"),left:i.css("left")}).insertAfter(i),i.remove()),this.originalElement.css("resize",this.originalResizeStyle),e(this.originalElement),this},_setOption:function(t,i){switch(this._super(t,i),t){case"handles":this._removeHandles(),this._setupHandles();break;case"aspectRatio":this._aspectRatio=!!i}},_setupHandles:function(){var i,e,s,h,n,o=this.options,a=this;if(this.handles=o.handles||(t(".ui-resizable-handle",this.element).length?{n:".ui-resizable-n",e:".ui-resizable-e",s:".ui-resizable-s",w:".ui-resizable-w",se:".ui-resizable-se",sw:".ui-resizable-sw",ne:".ui-resizable-ne",nw:".ui-resizable-nw"}:"e,s,se"),this._handles=t(),this._addedHandles=t(),this.handles.constructor===String)for("all"===this.handles&&(this.handles="n,e,s,w,se,sw,ne,nw"),s=this.handles.split(","),this.handles={},e=0;e<s.length;e++)h="ui-resizable-"+(i=String.prototype.trim.call(s[e])),n=t("<div>"),this._addClass(n,"ui-resizable-handle "+h),n.css({zIndex:o.zIndex}),this.handles[i]=".ui-resizable-"+i,this.element.children(this.handles[i]).length||(this.element.append(n),this._addedHandles=this._addedHandles.add(n));this._renderAxis=function(i){var e,s,h,n;for(e in i=i||this.element,this.handles)this.handles[e].constructor===String?this.handles[e]=this.element.children(this.handles[e]).first().show():(this.handles[e].jquery||this.handles[e].nodeType)&&(this.handles[e]=t(this.handles[e]),this._on(this.handles[e],{mousedown:a._mouseDown})),this.elementIsWrapper&&this.originalElement[0].nodeName.match(/^(textarea|input|select|button)$/i)&&(s=t(this.handles[e],this.element),n=/sw|ne|nw|se|n|s/.test(e)?s.outerHeight():s.outerWidth(),h=["padding",/ne|nw|n/.test(e)?"Top":/se|sw|s/.test(e)?"Bottom":/^e$/.test(e)?"Right":"Left"].join(""),i.css(h,n),this._proportionallyResize()),this._handles=this._handles.add(this.handles[e])},this._renderAxis(this.element),this._handles=this._handles.add(this.element.find(".ui-resizable-handle")),this._handles.disableSelection(),this._handles.on("mouseover",(function(){a.resizing||(this.className&&(n=this.className.match(/ui-resizable-(se|sw|ne|nw|n|e|s|w)/i)),a.axis=n&&n[1]?n[1]:"se")})),o.autoHide&&(this._handles.hide(),this._addClass("ui-resizable-autohide"))},_removeHandles:function(){this._addedHandles.remove()},_mouseCapture:function(i){var e,s,h=!1;for(e in this.handles)((s=t(this.handles[e])[0])===i.target||t.contains(s,i.target))&&(h=!0);return!this.options.disabled&&h},_mouseStart:function(i){var e,s,h,n=this.options,o=this.element;return this.resizing=!0,this._renderProxy(),e=this._num(this.helper.css("left")),s=this._num(this.helper.css("top")),n.containment&&(e+=t(n.containment).scrollLeft()||0,s+=t(n.containment).scrollTop()||0),this.offset=this.helper.offset(),this.position={left:e,top:s},this.size=this._helper?{width:this.helper.width(),height:this.helper.height()}:{width:o.width(),height:o.height()},this.originalSize=this._helper?{width:o.outerWidth(),height:o.outerHeight()}:{width:o.width(),height:o.height()},this.sizeDiff={width:o.outerWidth()-o.width(),height:o.outerHeight()-o.height()},this.originalPosition={left:e,top:s},this.originalMousePosition={left:i.pageX,top:i.pageY},this.aspectRatio="number"==typeof n.aspectRatio?n.aspectRatio:this.originalSize.width/this.originalSize.height||1,h=t(".ui-resizable-"+this.axis).css("cursor"),t("body").css("cursor","auto"===h?this.axis+"-resize":h),this._addClass("ui-resizable-resizing"),this._propagate("start",i),!0},_mouseDrag:function(i){var e,s,h=this.originalMousePosition,n=this.axis,o=i.pageX-h.left||0,a=i.pageY-h.top||0,l=this._change[n];return this._updatePrevProperties(),!!l&&(e=l.apply(this,[i,o,a]),this._updateVirtualBoundaries(i.shiftKey),(this._aspectRatio||i.shiftKey)&&(e=this._updateRatio(e,i)),e=this._respectSize(e,i),this._updateCache(e),this._propagate("resize",i),s=this._applyChanges(),!this._helper&&this._proportionallyResizeElements.length&&this._proportionallyResize(),t.isEmptyObject(s)||(this._updatePrevProperties(),this._trigger("resize",i,this.ui()),this._applyChanges()),!1)},_mouseStop:function(i){this.resizing=!1;var e,s,h,n,o,a,l,r=this.options,p=this;return this._helper&&(h=(s=(e=this._proportionallyResizeElements).length&&/textarea/i.test(e[0].nodeName))&&this._hasScroll(e[0],"left")?0:p.sizeDiff.height,n=s?0:p.sizeDiff.width,o={width:p.helper.width()-n,height:p.helper.height()-h},a=parseFloat(p.element.css("left"))+(p.position.left-p.originalPosition.left)||null,l=parseFloat(p.element.css("top"))+(p.position.top-p.originalPosition.top)||null,r.animate||this.element.css(t.extend(o,{top:l,left:a})),p.helper.height(p.size.height),p.helper.width(p.size.width),this._helper&&!r.animate&&this._proportionallyResize()),t("body").css("cursor","auto"),this._removeClass("ui-resizable-resizing"),this._propagate("stop",i),this._helper&&this.helper.remove(),!1},_updatePrevProperties:function(){this.prevPosition={top:this.position.top,left:this.position.left},this.prevSize={width:this.size.width,height:this.size.height}},_applyChanges:function(){var t={};return this.position.top!==this.prevPosition.top&&(t.top=this.position.top+"px"),this.position.left!==this.prevPosition.left&&(t.left=this.position.left+"px"),this.size.width!==this.prevSize.width&&(t.width=this.size.width+"px"),this.size.height!==this.prevSize.height&&(t.height=this.size.height+"px"),this.helper.css(t),t},_updateVirtualBoundaries:function(t){var i,e,s,h,n,o=this.options;n={minWidth:this._isNumber(o.minWidth)?o.minWidth:0,maxWidth:this._isNumber(o.maxWidth)?o.maxWidth:1/0,minHeight:this._isNumber(o.minHeight)?o.minHeight:0,maxHeight:this._isNumber(o.maxHeight)?o.maxHeight:1/0},(this._aspectRatio||t)&&(i=n.minHeight*this.aspectRatio,s=n.minWidth/this.aspectRatio,e=n.maxHeight*this.aspectRatio,h=n.maxWidth/this.aspectRatio,i>n.minWidth&&(n.minWidth=i),s>n.minHeight&&(n.minHeight=s),e<n.maxWidth&&(n.maxWidth=e),h<n.maxHeight&&(n.maxHeight=h)),this._vBoundaries=n},_updateCache:function(t){this.offset=this.helper.offset(),this._isNumber(t.left)&&(this.position.left=t.left),this._isNumber(t.top)&&(this.position.top=t.top),this._isNumber(t.height)&&(this.size.height=t.height),this._isNumber(t.width)&&(this.size.width=t.width)},_updateRatio:function(t){var i=this.position,e=this.size,s=this.axis;return this._isNumber(t.height)?t.width=t.height*this.aspectRatio:this._isNumber(t.width)&&(t.height=t.width/this.aspectRatio),"sw"===s&&(t.left=i.left+(e.width-t.width),t.top=null),"nw"===s&&(t.top=i.top+(e.height-t.height),t.left=i.left+(e.width-t.width)),t},_respectSize:function(t){var i=this._vBoundaries,e=this.axis,s=this._isNumber(t.width)&&i.maxWidth&&i.maxWidth<t.width,h=this._isNumber(t.height)&&i.maxHeight&&i.maxHeight<t.height,n=this._isNumber(t.width)&&i.minWidth&&i.minWidth>t.width,o=this._isNumber(t.height)&&i.minHeight&&i.minHeight>t.height,a=this.originalPosition.left+this.originalSize.width,l=this.originalPosition.top+this.originalSize.height,r=/sw|nw|w/.test(e),p=/nw|ne|n/.test(e);return n&&(t.width=i.minWidth),o&&(t.height=i.minHeight),s&&(t.width=i.maxWidth),h&&(t.height=i.maxHeight),n&&r&&(t.left=a-i.minWidth),s&&r&&(t.left=a-i.maxWidth),o&&p&&(t.top=l-i.minHeight),h&&p&&(t.top=l-i.maxHeight),t.width||t.height||t.left||!t.top?t.width||t.height||t.top||!t.left||(t.left=null):t.top=null,t},_getPaddingPlusBorderDimensions:function(t){for(var i=0,e=[],s=[t.css("borderTopWidth"),t.css("borderRightWidth"),t.css("borderBottomWidth"),t.css("borderLeftWidth")],h=[t.css("paddingTop"),t.css("paddingRight"),t.css("paddingBottom"),t.css("paddingLeft")];i<4;i++)e[i]=parseFloat(s[i])||0,e[i]+=parseFloat(h[i])||0;return{height:e[0]+e[2],width:e[1]+e[3]}},_proportionallyResize:function(){if(this._proportionallyResizeElements.length)for(var t,i=0,e=this.helper||this.element;i<this._proportionallyResizeElements.length;i++)t=this._proportionallyResizeElements[i],this.outerDimensions||(this.outerDimensions=this._getPaddingPlusBorderDimensions(t)),t.css({height:e.height()-this.outerDimensions.height||0,width:e.width()-this.outerDimensions.width||0})},_renderProxy:function(){var i=this.element,e=this.options;this.elementOffset=i.offset(),this._helper?(this.helper=this.helper||t("<div></div>").css({overflow:"hidden"}),this._addClass(this.helper,this._helper),this.helper.css({width:this.element.outerWidth(),height:this.element.outerHeight(),position:"absolute",left:this.elementOffset.left+"px",top:this.elementOffset.top+"px",zIndex:++e.zIndex}),this.helper.appendTo("body").disableSelection()):this.helper=this.element},_change:{e:function(t,i){return{width:this.originalSize.width+i}},w:function(t,i){var e=this.originalSize;return{left:this.originalPosition.left+i,width:e.width-i}},n:function(t,i,e){var s=this.originalSize;return{top:this.originalPosition.top+e,height:s.height-e}},s:function(t,i,e){return{height:this.originalSize.height+e}},se:function(i,e,s){return t.extend(this._change.s.apply(this,arguments),this._change.e.apply(this,[i,e,s]))},sw:function(i,e,s){return t.extend(this._change.s.apply(this,arguments),this._change.w.apply(this,[i,e,s]))},ne:function(i,e,s){return t.extend(this._change.n.apply(this,arguments),this._change.e.apply(this,[i,e,s]))},nw:function(i,e,s){return t.extend(this._change.n.apply(this,arguments),this._change.w.apply(this,[i,e,s]))}},_propagate:function(i,e){t.ui.plugin.call(this,i,[e,this.ui()]),"resize"!==i&&this._trigger(i,e,this.ui())},plugins:{},ui:function(){return{originalElement:this.originalElement,element:this.element,helper:this.helper,position:this.position,size:this.size,originalSize:this.originalSize,originalPosition:this.originalPosition}}}),t.ui.plugin.add("resizable","animate",{stop:function(i){var e=t(this).resizable("instance"),s=e.options,h=e._proportionallyResizeElements,n=h.length&&/textarea/i.test(h[0].nodeName),o=n&&e._hasScroll(h[0],"left")?0:e.sizeDiff.height,a=n?0:e.sizeDiff.width,l={width:e.size.width-a,height:e.size.height-o},r=parseFloat(e.element.css("left"))+(e.position.left-e.originalPosition.left)||null,p=parseFloat(e.element.css("top"))+(e.position.top-e.originalPosition.top)||null;e.element.animate(t.extend(l,p&&r?{top:p,left:r}:{}),{duration:s.animateDuration,easing:s.animateEasing,step:function(){var s={width:parseFloat(e.element.css("width")),height:parseFloat(e.element.css("height")),top:parseFloat(e.element.css("top")),left:parseFloat(e.element.css("left"))};h&&h.length&&t(h[0]).css({width:s.width,height:s.height}),e._updateCache(s),e._propagate("resize",i)}})}}),t.ui.plugin.add("resizable","containment",{start:function(){var i,e,s,h,n,o,a,l=t(this).resizable("instance"),r=l.options,p=l.element,d=r.containment,g=d instanceof t?d.get(0):/parent/.test(d)?p.parent().get(0):d;g&&(l.containerElement=t(g),/document/.test(d)||d===document?(l.containerOffset={left:0,top:0},l.containerPosition={left:0,top:0},l.parentData={element:t(document),left:0,top:0,width:t(document).width(),height:t(document).height()||document.body.parentNode.scrollHeight}):(i=t(g),e=[],t(["Top","Right","Left","Bottom"]).each((function(t,s){e[t]=l._num(i.css("padding"+s))})),l.containerOffset=i.offset(),l.containerPosition=i.position(),l.containerSize={height:i.innerHeight()-e[3],width:i.innerWidth()-e[1]},s=l.containerOffset,h=l.containerSize.height,n=l.containerSize.width,o=l._hasScroll(g,"left")?g.scrollWidth:n,a=l._hasScroll(g)?g.scrollHeight:h,l.parentData={element:g,left:s.left,top:s.top,width:o,height:a}))},resize:function(i){var e,s,h,n,o=t(this).resizable("instance"),a=o.options,l=o.containerOffset,r=o.position,p=o._aspectRatio||i.shiftKey,d={top:0,left:0},g=o.containerElement,u=!0;g[0]!==document&&/static/.test(g.css("position"))&&(d=l),r.left<(o._helper?l.left:0)&&(o.size.width=o.size.width+(o._helper?o.position.left-l.left:o.position.left-d.left),p&&(o.size.height=o.size.width/o.aspectRatio,u=!1),o.position.left=a.helper?l.left:0),r.top<(o._helper?l.top:0)&&(o.size.height=o.size.height+(o._helper?o.position.top-l.top:o.position.top),p&&(o.size.width=o.size.height*o.aspectRatio,u=!1),o.position.top=o._helper?l.top:0),h=o.containerElement.get(0)===o.element.parent().get(0),n=/relative|absolute/.test(o.containerElement.css("position")),h&&n?(o.offset.left=o.parentData.left+o.position.left,o.offset.top=o.parentData.top+o.position.top):(o.offset.left=o.element.offset().left,o.offset.top=o.element.offset().top),e=Math.abs(o.sizeDiff.width+(o._helper?o.offset.left-d.left:o.offset.left-l.left)),s=Math.abs(o.sizeDiff.height+(o._helper?o.offset.top-d.top:o.offset.top-l.top)),e+o.size.width>=o.parentData.width&&(o.size.width=o.parentData.width-e,p&&(o.size.height=o.size.width/o.aspectRatio,u=!1)),s+o.size.height>=o.parentData.height&&(o.size.height=o.parentData.height-s,p&&(o.size.width=o.size.height*o.aspectRatio,u=!1)),u||(o.position.left=o.prevPosition.left,o.position.top=o.prevPosition.top,o.size.width=o.prevSize.width,o.size.height=o.prevSize.height)},stop:function(){var i=t(this).resizable("instance"),e=i.options,s=i.containerOffset,h=i.containerPosition,n=i.containerElement,o=t(i.helper),a=o.offset(),l=o.outerWidth()-i.sizeDiff.width,r=o.outerHeight()-i.sizeDiff.height;i._helper&&!e.animate&&/relative/.test(n.css("position"))&&t(this).css({left:a.left-h.left-s.left,width:l,height:r}),i._helper&&!e.animate&&/static/.test(n.css("position"))&&t(this).css({left:a.left-h.left-s.left,width:l,height:r})}}),t.ui.plugin.add("resizable","alsoResize",{start:function(){var i=t(this).resizable("instance").options;t(i.alsoResize).each((function(){var i=t(this);i.data("ui-resizable-alsoresize",{width:parseFloat(i.width()),height:parseFloat(i.height()),left:parseFloat(i.css("left")),top:parseFloat(i.css("top"))})}))},resize:function(i,e){var s=t(this).resizable("instance"),h=s.options,n=s.originalSize,o=s.originalPosition,a={height:s.size.height-n.height||0,width:s.size.width-n.width||0,top:s.position.top-o.top||0,left:s.position.left-o.left||0};t(h.alsoResize).each((function(){var i=t(this),s=t(this).data("ui-resizable-alsoresize"),h={},n=i.parents(e.originalElement[0]).length?["width","height"]:["width","height","top","left"];t.each(n,(function(t,i){var e=(s[i]||0)+(a[i]||0);e&&e>=0&&(h[i]=e||null)})),i.css(h)}))},stop:function(){t(this).removeData("ui-resizable-alsoresize")}}),t.ui.plugin.add("resizable","ghost",{start:function(){var i=t(this).resizable("instance"),e=i.size;i.ghost=i.originalElement.clone(),i.ghost.css({opacity:.25,display:"block",position:"relative",height:e.height,width:e.width,margin:0,left:0,top:0}),i._addClass(i.ghost,"ui-resizable-ghost"),!1!==t.uiBackCompat&&"string"==typeof i.options.ghost&&i.ghost.addClass(this.options.ghost),i.ghost.appendTo(i.helper)},resize:function(){var i=t(this).resizable("instance");i.ghost&&i.ghost.css({position:"relative",height:i.size.height,width:i.size.width})},stop:function(){var i=t(this).resizable("instance");i.ghost&&i.helper&&i.helper.get(0).removeChild(i.ghost.get(0))}}),t.ui.plugin.add("resizable","grid",{resize:function(){var i,e=t(this).resizable("instance"),s=e.options,h=e.size,n=e.originalSize,o=e.originalPosition,a=e.axis,l="number"==typeof s.grid?[s.grid,s.grid]:s.grid,r=l[0]||1,p=l[1]||1,d=Math.round((h.width-n.width)/r)*r,g=Math.round((h.height-n.height)/p)*p,u=n.width+d,c=n.height+g,f=s.maxWidth&&s.maxWidth<u,m=s.maxHeight&&s.maxHeight<c,z=s.minWidth&&s.minWidth>u,w=s.minHeight&&s.minHeight>c;s.grid=l,z&&(u+=r),w&&(c+=p),f&&(u-=r),m&&(c-=p),/^(se|s|e)$/.test(a)?(e.size.width=u,e.size.height=c):/^(ne)$/.test(a)?(e.size.width=u,e.size.height=c,e.position.top=o.top-g):/^(sw)$/.test(a)?(e.size.width=u,e.size.height=c,e.position.left=o.left-d):((c-p<=0||u-r<=0)&&(i=e._getPaddingPlusBorderDimensions(this)),c-p>0?(e.size.height=c,e.position.top=o.top-g):(c=p-i.height,e.size.height=c,e.position.top=o.top+n.height-c),u-r>0?(e.size.width=u,e.position.left=o.left-d):(u=r-i.width,e.size.width=u,e.position.left=o.left+n.width-u))}}),t.ui.resizable}));

/*!
 * jQuery UI Button 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(t){"use strict";"function"==typeof define&&define.amd?define(["jquery","./controlgroup","./checkboxradio","../keycode","../widget"],t):t(jQuery)}((function(t){"use strict";var i;return t.widget("ui.button",{version:"1.13.2",defaultElement:"<button>",options:{classes:{"ui-button":"ui-corner-all"},disabled:null,icon:null,iconPosition:"beginning",label:null,showLabel:!0},_getCreateOptions:function(){var t,i=this._super()||{};return this.isInput=this.element.is("input"),null!=(t=this.element[0].disabled)&&(i.disabled=t),this.originalLabel=this.isInput?this.element.val():this.element.html(),this.originalLabel&&(i.label=this.originalLabel),i},_create:function(){!this.option.showLabel&!this.options.icon&&(this.options.showLabel=!0),null==this.options.disabled&&(this.options.disabled=this.element[0].disabled||!1),this.hasTitle=!!this.element.attr("title"),this.options.label&&this.options.label!==this.originalLabel&&(this.isInput?this.element.val(this.options.label):this.element.html(this.options.label)),this._addClass("ui-button","ui-widget"),this._setOption("disabled",this.options.disabled),this._enhance(),this.element.is("a")&&this._on({keyup:function(i){i.keyCode===t.ui.keyCode.SPACE&&(i.preventDefault(),this.element[0].click?this.element[0].click():this.element.trigger("click"))}})},_enhance:function(){this.element.is("button")||this.element.attr("role","button"),this.options.icon&&(this._updateIcon("icon",this.options.icon),this._updateTooltip())},_updateTooltip:function(){this.title=this.element.attr("title"),this.options.showLabel||this.title||this.element.attr("title",this.options.label)},_updateIcon:function(i,o){var s="iconPosition"!==i,n=s?this.options.iconPosition:o,e="top"===n||"bottom"===n;this.icon?s&&this._removeClass(this.icon,null,this.options.icon):(this.icon=t("<span>"),this._addClass(this.icon,"ui-button-icon","ui-icon"),this.options.showLabel||this._addClass("ui-button-icon-only")),s&&this._addClass(this.icon,null,o),this._attachIcon(n),e?(this._addClass(this.icon,null,"ui-widget-icon-block"),this.iconSpace&&this.iconSpace.remove()):(this.iconSpace||(this.iconSpace=t("<span> </span>"),this._addClass(this.iconSpace,"ui-button-icon-space")),this._removeClass(this.icon,null,"ui-wiget-icon-block"),this._attachIconSpace(n))},_destroy:function(){this.element.removeAttr("role"),this.icon&&this.icon.remove(),this.iconSpace&&this.iconSpace.remove(),this.hasTitle||this.element.removeAttr("title")},_attachIconSpace:function(t){this.icon[/^(?:end|bottom)/.test(t)?"before":"after"](this.iconSpace)},_attachIcon:function(t){this.element[/^(?:end|bottom)/.test(t)?"append":"prepend"](this.icon)},_setOptions:function(t){var i=void 0===t.showLabel?this.options.showLabel:t.showLabel,o=void 0===t.icon?this.options.icon:t.icon;i||o||(t.showLabel=!0),this._super(t)},_setOption:function(t,i){"icon"===t&&(i?this._updateIcon(t,i):this.icon&&(this.icon.remove(),this.iconSpace&&this.iconSpace.remove())),"iconPosition"===t&&this._updateIcon(t,i),"showLabel"===t&&(this._toggleClass("ui-button-icon-only",null,!i),this._updateTooltip()),"label"===t&&(this.isInput?this.element.val(i):(this.element.html(i),this.icon&&(this._attachIcon(this.options.iconPosition),this._attachIconSpace(this.options.iconPosition)))),this._super(t,i),"disabled"===t&&(this._toggleClass(null,"ui-state-disabled",i),this.element[0].disabled=i,i&&this.element.trigger("blur"))},refresh:function(){var t=this.element.is("input, button")?this.element[0].disabled:this.element.hasClass("ui-button-disabled");t!==this.options.disabled&&this._setOptions({disabled:t}),this._updateTooltip()}}),!1!==t.uiBackCompat&&(t.widget("ui.button",t.ui.button,{options:{text:!0,icons:{primary:null,secondary:null}},_create:function(){this.options.showLabel&&!this.options.text&&(this.options.showLabel=this.options.text),!this.options.showLabel&&this.options.text&&(this.options.text=this.options.showLabel),this.options.icon||!this.options.icons.primary&&!this.options.icons.secondary?this.options.icon&&(this.options.icons.primary=this.options.icon):this.options.icons.primary?this.options.icon=this.options.icons.primary:(this.options.icon=this.options.icons.secondary,this.options.iconPosition="end"),this._super()},_setOption:function(t,i){"text"!==t?("showLabel"===t&&(this.options.text=i),"icon"===t&&(this.options.icons.primary=i),"icons"===t&&(i.primary?(this._super("icon",i.primary),this._super("iconPosition","beginning")):i.secondary&&(this._super("icon",i.secondary),this._super("iconPosition","end"))),this._superApply(arguments)):this._super("showLabel",i)}}),t.fn.button=(i=t.fn.button,function(o){var s="string"==typeof o,n=Array.prototype.slice.call(arguments,1),e=this;return s?this.length||"instance"!==o?this.each((function(){var i,s=t(this).attr("type"),h="checkbox"!==s&&"radio"!==s?"button":"checkboxradio",a=t.data(this,"ui-"+h);return"instance"===o?(e=a,!1):a?"function"!=typeof a[o]||"_"===o.charAt(0)?t.error("no such method '"+o+"' for button widget instance"):(i=a[o].apply(a,n))!==a&&void 0!==i?(e=i&&i.jquery?e.pushStack(i.get()):i,!1):void 0:t.error("cannot call methods on button prior to initialization; attempted to call method '"+o+"'")})):e=void 0:(n.length&&(o=t.widget.extend.apply(null,[o].concat(n))),this.each((function(){var s=t(this).attr("type"),n="checkbox"!==s&&"radio"!==s?"button":"checkboxradio",e=t.data(this,"ui-"+n);if(e)e.option(o||{}),e._init&&e._init();else{if("button"===n)return void i.call(t(this),o);t(this).checkboxradio(t.extend({icon:!1},o))}}))),e}),t.fn.buttonset=function(){return t.ui.controlgroup||t.error("Controlgroup widget missing"),"option"===arguments[0]&&"items"===arguments[1]&&arguments[2]?this.controlgroup.apply(this,[arguments[0],"items.button",arguments[2]]):"option"===arguments[0]&&"items"===arguments[1]?this.controlgroup.apply(this,[arguments[0],"items.button"]):("object"==typeof arguments[0]&&arguments[0].items&&(arguments[0].items={button:arguments[0].items}),this.controlgroup.apply(this,arguments))}),t.ui.button}));

/*!
 * jQuery UI Dialog 1.13.2
 * http://jqueryui.com
 *
 * Copyright jQuery Foundation and other contributors
 * Released under the MIT license.
 * http://jquery.org/license
 */
!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery","./button","./draggable","./mouse","./resizable","../focusable","../keycode","../position","../safe-active-element","../safe-blur","../tabbable","../unique-id","../version","../widget"],i):i(jQuery)}((function(i){"use strict";return i.widget("ui.dialog",{version:"1.13.2",options:{appendTo:"body",autoOpen:!0,buttons:[],classes:{"ui-dialog":"ui-corner-all","ui-dialog-titlebar":"ui-corner-all"},closeOnEscape:!0,closeText:"Close",draggable:!0,hide:null,height:"auto",maxHeight:null,maxWidth:null,minHeight:150,minWidth:150,modal:!1,position:{my:"center",at:"center",of:window,collision:"fit",using:function(t){var e=i(this).css(t).offset().top;e<0&&i(this).css("top",t.top-e)}},resizable:!0,show:null,title:null,width:300,beforeClose:null,close:null,drag:null,dragStart:null,dragStop:null,focus:null,open:null,resize:null,resizeStart:null,resizeStop:null},sizeRelatedOptions:{buttons:!0,height:!0,maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0,width:!0},resizableRelatedOptions:{maxHeight:!0,maxWidth:!0,minHeight:!0,minWidth:!0},_create:function(){this.originalCss={display:this.element[0].style.display,width:this.element[0].style.width,minHeight:this.element[0].style.minHeight,maxHeight:this.element[0].style.maxHeight,height:this.element[0].style.height},this.originalPosition={parent:this.element.parent(),index:this.element.parent().children().index(this.element)},this.originalTitle=this.element.attr("title"),null==this.options.title&&null!=this.originalTitle&&(this.options.title=this.originalTitle),this.options.disabled&&(this.options.disabled=!1),this._createWrapper(),this.element.show().removeAttr("title").appendTo(this.uiDialog),this._addClass("ui-dialog-content","ui-widget-content"),this._createTitlebar(),this._createButtonPane(),this.options.draggable&&i.fn.draggable&&this._makeDraggable(),this.options.resizable&&i.fn.resizable&&this._makeResizable(),this._isOpen=!1,this._trackFocus()},_init:function(){this.options.autoOpen&&this.open()},_appendTo:function(){var t=this.options.appendTo;return t&&(t.jquery||t.nodeType)?i(t):this.document.find(t||"body").eq(0)},_destroy:function(){var i,t=this.originalPosition;this._untrackInstance(),this._destroyOverlay(),this.element.removeUniqueId().css(this.originalCss).detach(),this.uiDialog.remove(),this.originalTitle&&this.element.attr("title",this.originalTitle),(i=t.parent.children().eq(t.index)).length&&i[0]!==this.element[0]?i.before(this.element):t.parent.append(this.element)},widget:function(){return this.uiDialog},disable:i.noop,enable:i.noop,close:function(t){var e=this;this._isOpen&&!1!==this._trigger("beforeClose",t)&&(this._isOpen=!1,this._focusedElement=null,this._destroyOverlay(),this._untrackInstance(),this.opener.filter(":focusable").trigger("focus").length||i.ui.safeBlur(i.ui.safeActiveElement(this.document[0])),this._hide(this.uiDialog,this.options.hide,(function(){e._trigger("close",t)})))},isOpen:function(){return this._isOpen},moveToTop:function(){this._moveToTop()},_moveToTop:function(t,e){var o=!1,s=this.uiDialog.siblings(".ui-front:visible").map((function(){return+i(this).css("z-index")})).get(),n=Math.max.apply(null,s);return n>=+this.uiDialog.css("z-index")&&(this.uiDialog.css("z-index",n+1),o=!0),o&&!e&&this._trigger("focus",t),o},open:function(){var t=this;this._isOpen?this._moveToTop()&&this._focusTabbable():(this._isOpen=!0,this.opener=i(i.ui.safeActiveElement(this.document[0])),this._size(),this._position(),this._createOverlay(),this._moveToTop(null,!0),this.overlay&&this.overlay.css("z-index",this.uiDialog.css("z-index")-1),this._show(this.uiDialog,this.options.show,(function(){t._focusTabbable(),t._trigger("focus")})),this._makeFocusTarget(),this._trigger("open"))},_focusTabbable:function(){var i=this._focusedElement;i||(i=this.element.find("[autofocus]")),i.length||(i=this.element.find(":tabbable")),i.length||(i=this.uiDialogButtonPane.find(":tabbable")),i.length||(i=this.uiDialogTitlebarClose.filter(":tabbable")),i.length||(i=this.uiDialog),i.eq(0).trigger("focus")},_restoreTabbableFocus:function(){var t=i.ui.safeActiveElement(this.document[0]);this.uiDialog[0]===t||i.contains(this.uiDialog[0],t)||this._focusTabbable()},_keepFocus:function(i){i.preventDefault(),this._restoreTabbableFocus(),this._delay(this._restoreTabbableFocus)},_createWrapper:function(){this.uiDialog=i("<div>").hide().attr({tabIndex:-1,role:"dialog"}).appendTo(this._appendTo()),this._addClass(this.uiDialog,"ui-dialog","ui-widget ui-widget-content ui-front"),this._on(this.uiDialog,{keydown:function(t){if(this.options.closeOnEscape&&!t.isDefaultPrevented()&&t.keyCode&&t.keyCode===i.ui.keyCode.ESCAPE)return t.preventDefault(),void this.close(t);if(t.keyCode===i.ui.keyCode.TAB&&!t.isDefaultPrevented()){var e=this.uiDialog.find(":tabbable"),o=e.first(),s=e.last();t.target!==s[0]&&t.target!==this.uiDialog[0]||t.shiftKey?t.target!==o[0]&&t.target!==this.uiDialog[0]||!t.shiftKey||(this._delay((function(){s.trigger("focus")})),t.preventDefault()):(this._delay((function(){o.trigger("focus")})),t.preventDefault())}},mousedown:function(i){this._moveToTop(i)&&this._focusTabbable()}}),this.element.find("[aria-describedby]").length||this.uiDialog.attr({"aria-describedby":this.element.uniqueId().attr("id")})},_createTitlebar:function(){var t;this.uiDialogTitlebar=i("<div>"),this._addClass(this.uiDialogTitlebar,"ui-dialog-titlebar","ui-widget-header ui-helper-clearfix"),this._on(this.uiDialogTitlebar,{mousedown:function(t){i(t.target).closest(".ui-dialog-titlebar-close")||this.uiDialog.trigger("focus")}}),this.uiDialogTitlebarClose=i("<button type='button'></button>").button({label:i("<a>").text(this.options.closeText).html(),icon:"ui-icon-closethick",showLabel:!1}).appendTo(this.uiDialogTitlebar),this._addClass(this.uiDialogTitlebarClose,"ui-dialog-titlebar-close"),this._on(this.uiDialogTitlebarClose,{click:function(i){i.preventDefault(),this.close(i)}}),t=i("<span>").uniqueId().prependTo(this.uiDialogTitlebar),this._addClass(t,"ui-dialog-title"),this._title(t),this.uiDialogTitlebar.prependTo(this.uiDialog),this.uiDialog.attr({"aria-labelledby":t.attr("id")})},_title:function(i){this.options.title?i.text(this.options.title):i.html("&#160;")},_createButtonPane:function(){this.uiDialogButtonPane=i("<div>"),this._addClass(this.uiDialogButtonPane,"ui-dialog-buttonpane","ui-widget-content ui-helper-clearfix"),this.uiButtonSet=i("<div>").appendTo(this.uiDialogButtonPane),this._addClass(this.uiButtonSet,"ui-dialog-buttonset"),this._createButtons()},_createButtons:function(){var t=this,e=this.options.buttons;this.uiDialogButtonPane.remove(),this.uiButtonSet.empty(),i.isEmptyObject(e)||Array.isArray(e)&&!e.length?this._removeClass(this.uiDialog,"ui-dialog-buttons"):(i.each(e,(function(e,o){var s,n;o="function"==typeof o?{click:o,text:e}:o,o=i.extend({type:"button"},o),s=o.click,n={icon:o.icon,iconPosition:o.iconPosition,showLabel:o.showLabel,icons:o.icons,text:o.text},delete o.click,delete o.icon,delete o.iconPosition,delete o.showLabel,delete o.icons,"boolean"==typeof o.text&&delete o.text,i("<button></button>",o).button(n).appendTo(t.uiButtonSet).on("click",(function(){s.apply(t.element[0],arguments)}))})),this._addClass(this.uiDialog,"ui-dialog-buttons"),this.uiDialogButtonPane.appendTo(this.uiDialog))},_makeDraggable:function(){var t=this,e=this.options;function o(i){return{position:i.position,offset:i.offset}}this.uiDialog.draggable({cancel:".ui-dialog-content, .ui-dialog-titlebar-close",handle:".ui-dialog-titlebar",containment:"document",start:function(e,s){t._addClass(i(this),"ui-dialog-dragging"),t._blockFrames(),t._trigger("dragStart",e,o(s))},drag:function(i,e){t._trigger("drag",i,o(e))},stop:function(s,n){var a=n.offset.left-t.document.scrollLeft(),l=n.offset.top-t.document.scrollTop();e.position={my:"left top",at:"left"+(a>=0?"+":"")+a+" top"+(l>=0?"+":"")+l,of:t.window},t._removeClass(i(this),"ui-dialog-dragging"),t._unblockFrames(),t._trigger("dragStop",s,o(n))}})},_makeResizable:function(){var t=this,e=this.options,o=e.resizable,s=this.uiDialog.css("position"),n="string"==typeof o?o:"n,e,s,w,se,sw,ne,nw";function a(i){return{originalPosition:i.originalPosition,originalSize:i.originalSize,position:i.position,size:i.size}}this.uiDialog.resizable({cancel:".ui-dialog-content",containment:"document",alsoResize:this.element,maxWidth:e.maxWidth,maxHeight:e.maxHeight,minWidth:e.minWidth,minHeight:this._minHeight(),handles:n,start:function(e,o){t._addClass(i(this),"ui-dialog-resizing"),t._blockFrames(),t._trigger("resizeStart",e,a(o))},resize:function(i,e){t._trigger("resize",i,a(e))},stop:function(o,s){var n=t.uiDialog.offset(),l=n.left-t.document.scrollLeft(),h=n.top-t.document.scrollTop();e.height=t.uiDialog.height(),e.width=t.uiDialog.width(),e.position={my:"left top",at:"left"+(l>=0?"+":"")+l+" top"+(h>=0?"+":"")+h,of:t.window},t._removeClass(i(this),"ui-dialog-resizing"),t._unblockFrames(),t._trigger("resizeStop",o,a(s))}}).css("position",s)},_trackFocus:function(){this._on(this.widget(),{focusin:function(t){this._makeFocusTarget(),this._focusedElement=i(t.target)}})},_makeFocusTarget:function(){this._untrackInstance(),this._trackingInstances().unshift(this)},_untrackInstance:function(){var t=this._trackingInstances(),e=i.inArray(this,t);-1!==e&&t.splice(e,1)},_trackingInstances:function(){var i=this.document.data("ui-dialog-instances");return i||(i=[],this.document.data("ui-dialog-instances",i)),i},_minHeight:function(){var i=this.options;return"auto"===i.height?i.minHeight:Math.min(i.minHeight,i.height)},_position:function(){var i=this.uiDialog.is(":visible");i||this.uiDialog.show(),this.uiDialog.position(this.options.position),i||this.uiDialog.hide()},_setOptions:function(t){var e=this,o=!1,s={};i.each(t,(function(i,t){e._setOption(i,t),i in e.sizeRelatedOptions&&(o=!0),i in e.resizableRelatedOptions&&(s[i]=t)})),o&&(this._size(),this._position()),this.uiDialog.is(":data(ui-resizable)")&&this.uiDialog.resizable("option",s)},_setOption:function(t,e){var o,s,n=this.uiDialog;"disabled"!==t&&(this._super(t,e),"appendTo"===t&&this.uiDialog.appendTo(this._appendTo()),"buttons"===t&&this._createButtons(),"closeText"===t&&this.uiDialogTitlebarClose.button({label:i("<a>").text(""+this.options.closeText).html()}),"draggable"===t&&((o=n.is(":data(ui-draggable)"))&&!e&&n.draggable("destroy"),!o&&e&&this._makeDraggable()),"position"===t&&this._position(),"resizable"===t&&((s=n.is(":data(ui-resizable)"))&&!e&&n.resizable("destroy"),s&&"string"==typeof e&&n.resizable("option","handles",e),s||!1===e||this._makeResizable()),"title"===t&&this._title(this.uiDialogTitlebar.find(".ui-dialog-title")))},_size:function(){var i,t,e,o=this.options;this.element.show().css({width:"auto",minHeight:0,maxHeight:"none",height:0}),o.minWidth>o.width&&(o.width=o.minWidth),i=this.uiDialog.css({height:"auto",width:o.width}).outerHeight(),t=Math.max(0,o.minHeight-i),e="number"==typeof o.maxHeight?Math.max(0,o.maxHeight-i):"none","auto"===o.height?this.element.css({minHeight:t,maxHeight:e,height:"auto"}):this.element.height(Math.max(0,o.height-i)),this.uiDialog.is(":data(ui-resizable)")&&this.uiDialog.resizable("option","minHeight",this._minHeight())},_blockFrames:function(){this.iframeBlocks=this.document.find("iframe").map((function(){var t=i(this);return i("<div>").css({position:"absolute",width:t.outerWidth(),height:t.outerHeight()}).appendTo(t.parent()).offset(t.offset())[0]}))},_unblockFrames:function(){this.iframeBlocks&&(this.iframeBlocks.remove(),delete this.iframeBlocks)},_allowInteraction:function(t){return!!i(t.target).closest(".ui-dialog").length||!!i(t.target).closest(".ui-datepicker").length},_createOverlay:function(){if(this.options.modal){var t=i.fn.jquery.substring(0,4),e=!0;this._delay((function(){e=!1})),this.document.data("ui-dialog-overlays")||this.document.on("focusin.ui-dialog",function(i){if(!e){var o=this._trackingInstances()[0];o._allowInteraction(i)||(i.preventDefault(),o._focusTabbable(),"3.4."!==t&&"3.5."!==t||o._delay(o._restoreTabbableFocus))}}.bind(this)),this.overlay=i("<div>").appendTo(this._appendTo()),this._addClass(this.overlay,null,"ui-widget-overlay ui-front"),this._on(this.overlay,{mousedown:"_keepFocus"}),this.document.data("ui-dialog-overlays",(this.document.data("ui-dialog-overlays")||0)+1)}},_destroyOverlay:function(){if(this.options.modal&&this.overlay){var i=this.document.data("ui-dialog-overlays")-1;i?this.document.data("ui-dialog-overlays",i):(this.document.off("focusin.ui-dialog"),this.document.removeData("ui-dialog-overlays")),this.overlay.remove(),this.overlay=null}}}),!1!==i.uiBackCompat&&i.widget("ui.dialog",i.ui.dialog,{options:{dialogClass:""},_createWrapper:function(){this._super(),this.uiDialog.addClass(this.options.dialogClass)},_setOption:function(i,t){"dialogClass"===i&&this.uiDialog.removeClass(this.options.dialogClass).addClass(t),this._superApply(arguments)}}),i.ui.dialog}));

/*!
* tabbable 5.3.3
* @license MIT, https://github.com/focus-trap/tabbable/blob/master/LICENSE
*/
!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?t(exports):"function"==typeof define&&define.amd?define(["exports"],t):(e="undefined"!=typeof globalThis?globalThis:e||self,function(){var n=e.tabbable,o=e.tabbable={};t(o),o.noConflict=function(){return e.tabbable=n,o}}())}(this,(function(e){"use strict";var t=["input","select","textarea","a[href]","button","[tabindex]:not(slot)","audio[controls]","video[controls]",'[contenteditable]:not([contenteditable="false"])',"details>summary:first-of-type","details"],n=t.join(","),o="undefined"==typeof Element,r=o?function(){}:Element.prototype.matches||Element.prototype.msMatchesSelector||Element.prototype.webkitMatchesSelector,i=!o&&Element.prototype.getRootNode?function(e){return e.getRootNode()}:function(e){return e.ownerDocument},a=function(e,t,o){var i=Array.prototype.slice.apply(e.querySelectorAll(n));return t&&r.call(e,n)&&i.unshift(e),i=i.filter(o)},l=function e(t,o,i){for(var a=[],l=Array.from(t);l.length;){var u=l.shift();if("SLOT"===u.tagName){var c=u.assignedElements(),d=e(c.length?c:u.children,!0,i);i.flatten?a.push.apply(a,d):a.push({scope:u,candidates:d})}else{r.call(u,n)&&i.filter(u)&&(o||!t.includes(u))&&a.push(u);var f=u.shadowRoot||"function"==typeof i.getShadowRoot&&i.getShadowRoot(u),s=!i.shadowRootFilter||i.shadowRootFilter(u);if(f&&s){var p=e(!0===f?u.children:f.children,!0,i);i.flatten?a.push.apply(a,p):a.push({scope:u,candidates:p})}else l.unshift.apply(l,u.children)}}return a},u=function(e,t){return e.tabIndex<0&&(t||/^(AUDIO|VIDEO|DETAILS)$/.test(e.tagName)||e.isContentEditable)&&isNaN(parseInt(e.getAttribute("tabindex"),10))?0:e.tabIndex},c=function(e,t){return e.tabIndex===t.tabIndex?e.documentOrder-t.documentOrder:e.tabIndex-t.tabIndex},d=function(e){return"INPUT"===e.tagName},f=function(e){return function(e){return d(e)&&"radio"===e.type}(e)&&!function(e){if(!e.name)return!0;var t,n=e.form||i(e),o=function(e){return n.querySelectorAll('input[type="radio"][name="'+e+'"]')};if("undefined"!=typeof window&&void 0!==window.CSS&&"function"==typeof window.CSS.escape)t=o(window.CSS.escape(e.name));else try{t=o(e.name)}catch(e){return console.error("Looks like you have a radio button with a name attribute containing invalid CSS selector characters and need the CSS.escape polyfill: %s",e.message),!1}var r=function(e,t){for(var n=0;n<e.length;n++)if(e[n].checked&&e[n].form===t)return e[n]}(t,e.form);return!r||r===e}(e)},s=function(e){var t=e.getBoundingClientRect(),n=t.width,o=t.height;return 0===n&&0===o},p=function(e,t){return!(t.disabled||function(e){return d(e)&&"hidden"===e.type}(t)||function(e,t){var n=t.displayCheck,o=t.getShadowRoot;if("hidden"===getComputedStyle(e).visibility)return!0;var a=r.call(e,"details>summary:first-of-type")?e.parentElement:e;if(r.call(a,"details:not([open]) *"))return!0;var l=i(e).host,u=(null==l?void 0:l.ownerDocument.contains(l))||e.ownerDocument.contains(e);if(n&&"full"!==n){if("non-zero-area"===n)return s(e)}else{if("function"==typeof o){for(var c=e;e;){var d=e.parentElement,f=i(e);if(d&&!d.shadowRoot&&!0===o(d))return s(e);e=e.assignedSlot?e.assignedSlot:d||f===e.ownerDocument?d:f.host}e=c}if(u)return!e.getClientRects().length}return!1}(t,e)||function(e){return"DETAILS"===e.tagName&&Array.prototype.slice.apply(e.children).some((function(e){return"SUMMARY"===e.tagName}))}(t)||function(e){if(/^(INPUT|BUTTON|SELECT|TEXTAREA)$/.test(e.tagName))for(var t=e.parentElement;t;){if("FIELDSET"===t.tagName&&t.disabled){for(var n=0;n<t.children.length;n++){var o=t.children.item(n);if("LEGEND"===o.tagName)return!!r.call(t,"fieldset[disabled] *")||!o.contains(e)}return!0}t=t.parentElement}return!1}(t))},h=function(e,t){return!(f(t)||u(t)<0||!p(e,t))},b=function(e){var t=parseInt(e.getAttribute("tabindex"),10);return!!(isNaN(t)||t>=0)},m=t.concat("iframe").join(",");e.focusable=function(e,t){return(t=t||{}).getShadowRoot?l([e],t.includeContainer,{filter:p.bind(null,t),flatten:!0,getShadowRoot:t.getShadowRoot}):a(e,t.includeContainer,p.bind(null,t))},e.isFocusable=function(e,t){if(t=t||{},!e)throw new Error("No node provided");return!1!==r.call(e,m)&&p(t,e)},e.isTabbable=function(e,t){if(t=t||{},!e)throw new Error("No node provided");return!1!==r.call(e,n)&&h(t,e)},e.tabbable=function(e,t){return function e(t){var n=[],o=[];return t.forEach((function(t,r){var i=!!t.scope,a=i?t.scope:t,l=u(a,i),c=i?e(t.candidates):a;0===l?i?n.push.apply(n,c):n.push(a):o.push({documentOrder:r,tabIndex:l,item:t,isScope:i,content:c})})),o.sort(c).reduce((function(e,t){return t.isScope?e.push.apply(e,t.content):e.push(t.content),e}),[]).concat(n)}((t=t||{}).getShadowRoot?l([e],t.includeContainer,{filter:h.bind(null,t),flatten:!1,getShadowRoot:t.getShadowRoot,shadowRootFilter:b}):a(e,t.includeContainer,h.bind(null,t)))},Object.defineProperty(e,"__esModule",{value:!0})}));

;
/**
 * Open / close the accordion when label is focused and spacebar pressed.
 */
document.addEventListener('DOMContentLoaded', function () {
  // Only do it for accordions from advanced_shortcodes.
  document.querySelectorAll('.advanced-shortcodes-accordion .accordion-tab-label').forEach(label => {
    label.addEventListener('keydown', function (event) {
      // Check if the key pressed is 'Space'.
      if (event.key === ' ' || event.keyCode === 32) {
        // Prevent the default action to stop scrolling the page.
        event.preventDefault();
        var checkbox = document.getElementById(this.getAttribute('for'));
        // Toggle the checkbox.
        checkbox.checked = !checkbox.checked;
      }
    });
  });
});
  ;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
Drupal.debounce = function (func, wait, immediate) {
  var timeout;
  var result;
  return function () {
    for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
      args[_key] = arguments[_key];
    }
    var context = this;
    var later = function later() {
      timeout = null;
      if (!immediate) {
        result = func.apply(context, args);
      }
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) {
      result = func.apply(context, args);
    }
    return result;
  };
};;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal, debounce) {
  var offsets = {
    top: 0,
    right: 0,
    bottom: 0,
    left: 0
  };
  function getRawOffset(el, edge) {
    var $el = $(el);
    var documentElement = document.documentElement;
    var displacement = 0;
    var horizontal = edge === 'left' || edge === 'right';
    var placement = $el.offset()[horizontal ? 'left' : 'top'];
    placement -= window["scroll".concat(horizontal ? 'X' : 'Y')] || document.documentElement["scroll".concat(horizontal ? 'Left' : 'Top')] || 0;
    switch (edge) {
      case 'top':
        displacement = placement + $el.outerHeight();
        break;
      case 'left':
        displacement = placement + $el.outerWidth();
        break;
      case 'bottom':
        displacement = documentElement.clientHeight - placement;
        break;
      case 'right':
        displacement = documentElement.clientWidth - placement;
        break;
      default:
        displacement = 0;
    }
    return displacement;
  }
  function calculateOffset(edge) {
    var edgeOffset = 0;
    var displacingElements = document.querySelectorAll("[data-offset-".concat(edge, "]"));
    var n = displacingElements.length;
    for (var i = 0; i < n; i++) {
      var el = displacingElements[i];
      if (el.style.display === 'none') {
        continue;
      }
      var displacement = parseInt(el.getAttribute("data-offset-".concat(edge)), 10);
      if (isNaN(displacement)) {
        displacement = getRawOffset(el, edge);
      }
      edgeOffset = Math.max(edgeOffset, displacement);
    }
    return edgeOffset;
  }
  function calculateOffsets() {
    return {
      top: calculateOffset('top'),
      right: calculateOffset('right'),
      bottom: calculateOffset('bottom'),
      left: calculateOffset('left')
    };
  }
  function displace(broadcast) {
    offsets = calculateOffsets();
    Drupal.displace.offsets = offsets;
    if (typeof broadcast === 'undefined' || broadcast) {
      $(document).trigger('drupalViewportOffsetChange', offsets);
    }
    return offsets;
  }
  Drupal.behaviors.drupalDisplace = {
    attach: function attach() {
      if (this.displaceProcessed) {
        return;
      }
      this.displaceProcessed = true;
      $(window).on('resize.drupalDisplace', debounce(displace, 200));
    }
  };
  Drupal.displace = displace;
  $.extend(Drupal.displace, {
    offsets: offsets,
    calculateOffset: calculateOffset
  });
})(jQuery, Drupal, Drupal.debounce);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal, _ref) {
  var isTabbable = _ref.isTabbable;
  $.extend($.expr[':'], {
    tabbable: function tabbable(element) {
      Drupal.deprecationError({
        message: 'The :tabbable selector is deprecated in Drupal 9.2.0 and will be removed in Drupal 11.0.0. Use the core/tabbable library instead. See https://www.drupal.org/node/3183730'
      });
      if (element.tagName === 'SUMMARY' || element.tagName === 'DETAILS') {
        var tabIndex = element.getAttribute('tabIndex');
        if (tabIndex === null || tabIndex < 0) {
          return false;
        }
      }
      return isTabbable(element);
    }
  });
})(jQuery, Drupal, window.tabbable);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($) {
  var cachedScrollbarWidth = null;
  var max = Math.max,
    abs = Math.abs;
  var regexHorizontal = /left|center|right/;
  var regexVertical = /top|center|bottom/;
  var regexOffset = /[+-]\d+(\.[\d]+)?%?/;
  var regexPosition = /^\w+/;
  var regexPercent = /%$/;
  var _position = $.fn.position;
  function getOffsets(offsets, width, height) {
    return [parseFloat(offsets[0]) * (regexPercent.test(offsets[0]) ? width / 100 : 1), parseFloat(offsets[1]) * (regexPercent.test(offsets[1]) ? height / 100 : 1)];
  }
  function parseCss(element, property) {
    return parseInt($.css(element, property), 10) || 0;
  }
  function getDimensions(elem) {
    var raw = elem[0];
    if (raw.nodeType === 9) {
      return {
        width: elem.width(),
        height: elem.height(),
        offset: {
          top: 0,
          left: 0
        }
      };
    }
    if ($.isWindow(raw)) {
      return {
        width: elem.width(),
        height: elem.height(),
        offset: {
          top: elem.scrollTop(),
          left: elem.scrollLeft()
        }
      };
    }
    if (raw.preventDefault) {
      return {
        width: 0,
        height: 0,
        offset: {
          top: raw.pageY,
          left: raw.pageX
        }
      };
    }
    return {
      width: elem.outerWidth(),
      height: elem.outerHeight(),
      offset: elem.offset()
    };
  }
  var collisions = {
    fit: {
      left: function left(position, data) {
        var within = data.within;
        var withinOffset = within.isWindow ? within.scrollLeft : within.offset.left;
        var outerWidth = within.width;
        var collisionPosLeft = position.left - data.collisionPosition.marginLeft;
        var overLeft = withinOffset - collisionPosLeft;
        var overRight = collisionPosLeft + data.collisionWidth - outerWidth - withinOffset;
        var newOverRight;
        if (data.collisionWidth > outerWidth) {
          if (overLeft > 0 && overRight <= 0) {
            newOverRight = position.left + overLeft + data.collisionWidth - outerWidth - withinOffset;
            position.left += overLeft - newOverRight;
          } else if (overRight > 0 && overLeft <= 0) {
            position.left = withinOffset;
          } else if (overLeft > overRight) {
            position.left = withinOffset + outerWidth - data.collisionWidth;
          } else {
            position.left = withinOffset;
          }
        } else if (overLeft > 0) {
          position.left += overLeft;
        } else if (overRight > 0) {
          position.left -= overRight;
        } else {
          position.left = max(position.left - collisionPosLeft, position.left);
        }
      },
      top: function top(position, data) {
        var within = data.within;
        var withinOffset = within.isWindow ? within.scrollTop : within.offset.top;
        var outerHeight = data.within.height;
        var collisionPosTop = position.top - data.collisionPosition.marginTop;
        var overTop = withinOffset - collisionPosTop;
        var overBottom = collisionPosTop + data.collisionHeight - outerHeight - withinOffset;
        var newOverBottom;
        if (data.collisionHeight > outerHeight) {
          if (overTop > 0 && overBottom <= 0) {
            newOverBottom = position.top + overTop + data.collisionHeight - outerHeight - withinOffset;
            position.top += overTop - newOverBottom;
          } else if (overBottom > 0 && overTop <= 0) {
            position.top = withinOffset;
          } else if (overTop > overBottom) {
            position.top = withinOffset + outerHeight - data.collisionHeight;
          } else {
            position.top = withinOffset;
          }
        } else if (overTop > 0) {
          position.top += overTop;
        } else if (overBottom > 0) {
          position.top -= overBottom;
        } else {
          position.top = max(position.top - collisionPosTop, position.top);
        }
      }
    },
    flip: {
      left: function left(position, data) {
        var within = data.within;
        var withinOffset = within.offset.left + within.scrollLeft;
        var outerWidth = within.width;
        var offsetLeft = within.isWindow ? within.scrollLeft : within.offset.left;
        var collisionPosLeft = position.left - data.collisionPosition.marginLeft;
        var overLeft = collisionPosLeft - offsetLeft;
        var overRight = collisionPosLeft + data.collisionWidth - outerWidth - offsetLeft;
        var myOffset = data.my[0] === 'left' ? -data.elemWidth : data.my[0] === 'right' ? data.elemWidth : 0;
        var atOffset = data.at[0] === 'left' ? data.targetWidth : data.at[0] === 'right' ? -data.targetWidth : 0;
        var offset = -2 * data.offset[0];
        var newOverRight;
        var newOverLeft;
        if (overLeft < 0) {
          newOverRight = position.left + myOffset + atOffset + offset + data.collisionWidth - outerWidth - withinOffset;
          if (newOverRight < 0 || newOverRight < abs(overLeft)) {
            position.left += myOffset + atOffset + offset;
          }
        } else if (overRight > 0) {
          newOverLeft = position.left - data.collisionPosition.marginLeft + myOffset + atOffset + offset - offsetLeft;
          if (newOverLeft > 0 || abs(newOverLeft) < overRight) {
            position.left += myOffset + atOffset + offset;
          }
        }
      },
      top: function top(position, data) {
        var within = data.within;
        var withinOffset = within.offset.top + within.scrollTop;
        var outerHeight = within.height;
        var offsetTop = within.isWindow ? within.scrollTop : within.offset.top;
        var collisionPosTop = position.top - data.collisionPosition.marginTop;
        var overTop = collisionPosTop - offsetTop;
        var overBottom = collisionPosTop + data.collisionHeight - outerHeight - offsetTop;
        var top = data.my[1] === 'top';
        var myOffset = top ? -data.elemHeight : data.my[1] === 'bottom' ? data.elemHeight : 0;
        var atOffset = data.at[1] === 'top' ? data.targetHeight : data.at[1] === 'bottom' ? -data.targetHeight : 0;
        var offset = -2 * data.offset[1];
        var newOverTop;
        var newOverBottom;
        if (overTop < 0) {
          newOverBottom = position.top + myOffset + atOffset + offset + data.collisionHeight - outerHeight - withinOffset;
          if (newOverBottom < 0 || newOverBottom < abs(overTop)) {
            position.top += myOffset + atOffset + offset;
          }
        } else if (overBottom > 0) {
          newOverTop = position.top - data.collisionPosition.marginTop + myOffset + atOffset + offset - offsetTop;
          if (newOverTop > 0 || abs(newOverTop) < overBottom) {
            position.top += myOffset + atOffset + offset;
          }
        }
      }
    },
    flipfit: {
      left: function left() {
        for (var _len = arguments.length, args = new Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }
        collisions.flip.left.apply(this, args);
        collisions.fit.left.apply(this, args);
      },
      top: function top() {
        for (var _len2 = arguments.length, args = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }
        collisions.flip.top.apply(this, args);
        collisions.fit.top.apply(this, args);
      }
    }
  };
  $.position = {
    scrollbarWidth: function scrollbarWidth() {
      if (cachedScrollbarWidth !== undefined) {
        return cachedScrollbarWidth;
      }
      var div = $('<div ' + "style='display:block;position:absolute;width:50px;height:50px;overflow:hidden;'>" + "<div style='height:100px;width:auto;'></div></div>");
      var innerDiv = div.children()[0];
      $('body').append(div);
      var w1 = innerDiv.offsetWidth;
      div.css('overflow', 'scroll');
      var w2 = innerDiv.offsetWidth;
      if (w1 === w2) {
        w2 = div[0].clientWidth;
      }
      div.remove();
      cachedScrollbarWidth = w1 - w2;
      return cachedScrollbarWidth;
    },
    getScrollInfo: function getScrollInfo(within) {
      var overflowX = within.isWindow || within.isDocument ? '' : within.element.css('overflow-x');
      var overflowY = within.isWindow || within.isDocument ? '' : within.element.css('overflow-y');
      var hasOverflowX = overflowX === 'scroll' || overflowX === 'auto' && within.width < within.element[0].scrollWidth;
      var hasOverflowY = overflowY === 'scroll' || overflowY === 'auto' && within.height < within.element[0].scrollHeight;
      return {
        width: hasOverflowY ? $.position.scrollbarWidth() : 0,
        height: hasOverflowX ? $.position.scrollbarWidth() : 0
      };
    },
    getWithinInfo: function getWithinInfo(element) {
      var withinElement = $(element || window);
      var isWindow = $.isWindow(withinElement[0]);
      var isDocument = !!withinElement[0] && withinElement[0].nodeType === 9;
      var hasOffset = !isWindow && !isDocument;
      return {
        element: withinElement,
        isWindow: isWindow,
        isDocument: isDocument,
        offset: hasOffset ? $(element).offset() : {
          left: 0,
          top: 0
        },
        scrollLeft: withinElement.scrollLeft(),
        scrollTop: withinElement.scrollTop(),
        width: withinElement.outerWidth(),
        height: withinElement.outerHeight()
      };
    }
  };
  $.fn.position = function (options) {
    if (!options || !options.of) {
      return _position.apply(this, arguments);
    }
    options = $.extend({}, options);
    var within = $.position.getWithinInfo(options.within);
    var scrollInfo = $.position.getScrollInfo(within);
    var collision = (options.collision || 'flip').split(' ');
    var offsets = {};
    var target = typeof options.of === 'string' ? $(document).find(options.of) : $(options.of);
    var dimensions = getDimensions(target);
    var targetWidth = dimensions.width;
    var targetHeight = dimensions.height;
    var targetOffset = dimensions.offset;
    if (target[0].preventDefault) {
      options.at = 'left top';
    }
    var basePosition = $.extend({}, targetOffset);
    $.each(['my', 'at'], function () {
      var pos = (options[this] || '').split(' ');
      if (pos.length === 1) {
        pos = regexHorizontal.test(pos[0]) ? pos.concat(['center']) : regexVertical.test(pos[0]) ? ['center'].concat(pos) : ['center', 'center'];
      }
      pos[0] = regexHorizontal.test(pos[0]) ? pos[0] : 'center';
      pos[1] = regexVertical.test(pos[1]) ? pos[1] : 'center';
      var horizontalOffset = regexOffset.exec(pos[0]);
      var verticalOffset = regexOffset.exec(pos[1]);
      offsets[this] = [horizontalOffset ? horizontalOffset[0] : 0, verticalOffset ? verticalOffset[0] : 0];
      options[this] = [regexPosition.exec(pos[0])[0], regexPosition.exec(pos[1])[0]];
    });
    if (collision.length === 1) {
      collision[1] = collision[0];
    }
    if (options.at[0] === 'right') {
      basePosition.left += targetWidth;
    } else if (options.at[0] === 'center') {
      basePosition.left += targetWidth / 2;
    }
    if (options.at[1] === 'bottom') {
      basePosition.top += targetHeight;
    } else if (options.at[1] === 'center') {
      basePosition.top += targetHeight / 2;
    }
    var atOffset = getOffsets(offsets.at, targetWidth, targetHeight);
    basePosition.left += atOffset[0];
    basePosition.top += atOffset[1];
    return this.each(function () {
      var using;
      var elem = $(this);
      var elemWidth = elem.outerWidth();
      var elemHeight = elem.outerHeight();
      var marginLeft = parseCss(this, 'marginLeft');
      var marginTop = parseCss(this, 'marginTop');
      var collisionWidth = elemWidth + marginLeft + parseCss(this, 'marginRight') + scrollInfo.width;
      var collisionHeight = elemHeight + marginTop + parseCss(this, 'marginBottom') + scrollInfo.height;
      var position = $.extend({}, basePosition);
      var myOffset = getOffsets(offsets.my, elem.outerWidth(), elem.outerHeight());
      if (options.my[0] === 'right') {
        position.left -= elemWidth;
      } else if (options.my[0] === 'center') {
        position.left -= elemWidth / 2;
      }
      if (options.my[1] === 'bottom') {
        position.top -= elemHeight;
      } else if (options.my[1] === 'center') {
        position.top -= elemHeight / 2;
      }
      position.left += myOffset[0];
      position.top += myOffset[1];
      var collisionPosition = {
        marginLeft: marginLeft,
        marginTop: marginTop
      };
      $.each(['left', 'top'], function (i, dir) {
        if (collisions[collision[i]]) {
          collisions[collision[i]][dir](position, {
            targetWidth: targetWidth,
            targetHeight: targetHeight,
            elemWidth: elemWidth,
            elemHeight: elemHeight,
            collisionPosition: collisionPosition,
            collisionWidth: collisionWidth,
            collisionHeight: collisionHeight,
            offset: [atOffset[0] + myOffset[0], atOffset[1] + myOffset[1]],
            my: options.my,
            at: options.at,
            within: within,
            elem: elem
          });
        }
      });
      if (options.using) {
        using = function using(props) {
          var left = targetOffset.left - position.left;
          var right = left + targetWidth - elemWidth;
          var top = targetOffset.top - position.top;
          var bottom = top + targetHeight - elemHeight;
          var feedback = {
            target: {
              element: target,
              left: targetOffset.left,
              top: targetOffset.top,
              width: targetWidth,
              height: targetHeight
            },
            element: {
              element: elem,
              left: position.left,
              top: position.top,
              width: elemWidth,
              height: elemHeight
            },
            horizontal: right < 0 ? 'left' : left > 0 ? 'right' : 'center',
            vertical: bottom < 0 ? 'top' : top > 0 ? 'bottom' : 'middle'
          };
          if (targetWidth < elemWidth && abs(left + right) < targetWidth) {
            feedback.horizontal = 'center';
          }
          if (targetHeight < elemHeight && abs(top + bottom) < targetHeight) {
            feedback.vertical = 'middle';
          }
          if (max(abs(left), abs(right)) > max(abs(top), abs(bottom))) {
            feedback.important = 'horizontal';
          } else {
            feedback.important = 'vertical';
          }
          options.using.call(this, props, feedback);
        };
      }
      elem.offset($.extend(position, {
        using: using
      }));
    });
  };
  if (!$.hasOwnProperty('ui')) {
    $.ui = {};
  }
  $.ui.position = collisions;
})(jQuery);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal, drupalSettings) {
  drupalSettings.dialog = {
    autoOpen: true,
    dialogClass: '',
    buttonClass: 'button',
    buttonPrimaryClass: 'button--primary',
    close: function close(event) {
      Drupal.dialog(event.target).close();
      Drupal.detachBehaviors(event.target, null, 'unload');
    }
  };
  Drupal.dialog = function (element, options) {
    var undef;
    var $element = $(element);
    var dialog = {
      open: false,
      returnValue: undef
    };
    function openDialog(settings) {
      settings = $.extend({}, drupalSettings.dialog, options, settings);
      $(window).trigger('dialog:beforecreate', [dialog, $element, settings]);
      $element.dialog(settings);
      dialog.open = true;
      $(window).trigger('dialog:aftercreate', [dialog, $element, settings]);
    }
    function closeDialog(value) {
      $(window).trigger('dialog:beforeclose', [dialog, $element]);
      $element.dialog('close');
      dialog.returnValue = value;
      dialog.open = false;
      $(window).trigger('dialog:afterclose', [dialog, $element]);
    }
    dialog.show = function () {
      openDialog({
        modal: false
      });
    };
    dialog.showModal = function () {
      openDialog({
        modal: true
      });
    };
    dialog.close = closeDialog;
    return dialog;
  };
})(jQuery, Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal, drupalSettings, debounce, displace) {
  drupalSettings.dialog = $.extend({
    autoResize: true,
    maxHeight: '95%'
  }, drupalSettings.dialog);
  function resetPosition(options) {
    var offsets = displace.offsets;
    var left = offsets.left - offsets.right;
    var top = offsets.top - offsets.bottom;
    var leftString = "".concat((left > 0 ? '+' : '-') + Math.abs(Math.round(left / 2)), "px");
    var topString = "".concat((top > 0 ? '+' : '-') + Math.abs(Math.round(top / 2)), "px");
    options.position = {
      my: "center".concat(left !== 0 ? leftString : '', " center").concat(top !== 0 ? topString : ''),
      of: window
    };
    return options;
  }
  function resetSize(event) {
    var positionOptions = ['width', 'height', 'minWidth', 'minHeight', 'maxHeight', 'maxWidth', 'position'];
    var adjustedOptions = {};
    var windowHeight = $(window).height();
    var option;
    var optionValue;
    var adjustedValue;
    for (var n = 0; n < positionOptions.length; n++) {
      option = positionOptions[n];
      optionValue = event.data.settings[option];
      if (optionValue) {
        if (typeof optionValue === 'string' && /%$/.test(optionValue) && /height/i.test(option)) {
          windowHeight -= displace.offsets.top + displace.offsets.bottom;
          adjustedValue = parseInt(0.01 * parseInt(optionValue, 10) * windowHeight, 10);
          if (option === 'height' && event.data.$element.parent().outerHeight() < adjustedValue) {
            adjustedValue = 'auto';
          }
          adjustedOptions[option] = adjustedValue;
        }
      }
    }
    if (!event.data.settings.modal) {
      adjustedOptions = resetPosition(adjustedOptions);
    }
    event.data.$element.dialog('option', adjustedOptions).trigger('dialogContentResize');
  }
  $(window).on({
    'dialog:aftercreate': function dialogAftercreate(event, dialog, $element, settings) {
      var autoResize = debounce(resetSize, 20);
      var eventData = {
        settings: settings,
        $element: $element
      };
      if (settings.autoResize === true || settings.autoResize === 'true') {
        $element.dialog('option', {
          resizable: false,
          draggable: false
        }).dialog('widget').css('position', 'fixed');
        $(window).on('resize.dialogResize scroll.dialogResize', eventData, autoResize).trigger('resize.dialogResize');
        $(document).on('drupalViewportOffsetChange.dialogResize', eventData, autoResize);
      }
    },
    'dialog:beforeclose': function dialogBeforeclose(event, dialog, $element) {
      $(window).off('.dialogResize');
      $(document).off('.dialogResize');
    }
  });
})(jQuery, Drupal, drupalSettings, Drupal.debounce, Drupal.displace);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, _ref) {
  var tabbable = _ref.tabbable,
    isTabbable = _ref.isTabbable;
  $.widget('ui.dialog', $.ui.dialog, {
    options: {
      buttonClass: 'button',
      buttonPrimaryClass: 'button--primary'
    },
    _createButtons: function _createButtons() {
      var opts = this.options;
      var primaryIndex;
      var index;
      var il = opts.buttons.length;
      for (index = 0; index < il; index++) {
        if (opts.buttons[index].primary && opts.buttons[index].primary === true) {
          primaryIndex = index;
          delete opts.buttons[index].primary;
          break;
        }
      }
      this._super();
      var $buttons = this.uiButtonSet.children().addClass(opts.buttonClass);
      if (typeof primaryIndex !== 'undefined') {
        $buttons.eq(index).addClass(opts.buttonPrimaryClass);
      }
    },
    _focusTabbable: function _focusTabbable() {
      var hasFocus = this._focusedElement ? this._focusedElement.get(0) : null;
      if (!hasFocus) {
        hasFocus = this.element.find('[autofocus]').get(0);
      }
      if (!hasFocus) {
        var $elements = [this.element, this.uiDialogButtonPane];
        for (var i = 0; i < $elements.length; i++) {
          var element = $elements[i].get(0);
          if (element) {
            var elementTabbable = tabbable(element);
            hasFocus = elementTabbable.length ? elementTabbable[0] : null;
          }
          if (hasFocus) {
            break;
          }
        }
      }
      if (!hasFocus) {
        var closeBtn = this.uiDialogTitlebarClose.get(0);
        hasFocus = closeBtn && isTabbable(closeBtn) ? closeBtn : null;
      }
      if (!hasFocus) {
        hasFocus = this.uiDialog.get(0);
      }
      $(hasFocus).eq(0).trigger('focus');
    }
  });
})(jQuery, window.tabbable);;
!function(t,n){"object"==typeof exports&&"object"==typeof module?module.exports=n(require("jquery")):"function"==typeof define&&define.amd?define(["jquery"],n):"object"==typeof exports?exports["foundation.core"]=n(require("jquery")):(t.__FOUNDATION_EXTERNAL__=t.__FOUNDATION_EXTERNAL__||{},t.__FOUNDATION_EXTERNAL__["foundation.core"]=n(t.jQuery))}(window,function(e){return function(e){var o={};function r(t){if(o[t])return o[t].exports;var n=o[t]={i:t,l:!1,exports:{}};return e[t].call(n.exports,n,n.exports,r),n.l=!0,n.exports}return r.m=e,r.c=o,r.d=function(t,n,e){r.o(t,n)||Object.defineProperty(t,n,{enumerable:!0,get:e})},r.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},r.t=function(n,t){if(1&t&&(n=r(n)),8&t)return n;if(4&t&&"object"==typeof n&&n&&n.__esModule)return n;var e=Object.create(null);if(r.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:n}),2&t&&"string"!=typeof n)for(var o in n)r.d(e,o,function(t){return n[t]}.bind(null,o));return e},r.n=function(t){var n=t&&t.__esModule?function(){return t.default}:function(){return t};return r.d(n,"a",n),n},r.o=function(t,n){return Object.prototype.hasOwnProperty.call(t,n)},r.p="",r(r.s=0)}({"./js/entries/plugins/foundation.core.js":function(t,n,e){"use strict";e.r(n);var o=e("jquery"),r=e.n(o),i=e("./js/foundation.core.js");e.d(n,"Foundation",function(){return i.Foundation});var a=e("./js/foundation.core.plugin.js"),u=e("./js/foundation.core.utils.js");e.d(n,"Plugin",function(){return a.Plugin}),e.d(n,"rtl",function(){return u.rtl}),e.d(n,"GetYoDigits",function(){return u.GetYoDigits}),e.d(n,"RegExpEscape",function(){return u.RegExpEscape}),e.d(n,"transitionend",function(){return u.transitionend}),e.d(n,"onLoad",function(){return u.onLoad}),e.d(n,"ignoreMousedisappear",function(){return u.ignoreMousedisappear}),i.Foundation.addToJquery(r.a),i.Foundation.Plugin=a.Plugin,i.Foundation.rtl=u.rtl,i.Foundation.GetYoDigits=u.GetYoDigits,i.Foundation.transitionend=u.transitionend,i.Foundation.RegExpEscape=u.RegExpEscape,i.Foundation.onLoad=u.onLoad,window.Foundation=i.Foundation},"./js/foundation.core.js":function(t,n,e){"use strict";e.r(n),e.d(n,"Foundation",function(){return s});var o=e("jquery"),i=e.n(o),r=e("./js/foundation.core.utils.js"),a=e("./js/foundation.util.mediaQuery.js");function u(t){return(u="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var s={version:"6.5.3",_plugins:{},_uuids:[],plugin:function(t,n){var e=n||c(t),o=d(e);this._plugins[o]=this[e]=t},registerPlugin:function(t,n){var e=n?d(n):c(t.constructor).toLowerCase();t.uuid=Object(r.GetYoDigits)(6,e),t.$element.attr("data-".concat(e))||t.$element.attr("data-".concat(e),t.uuid),t.$element.data("zfPlugin")||t.$element.data("zfPlugin",t),t.$element.trigger("init.zf.".concat(e)),this._uuids.push(t.uuid)},unregisterPlugin:function(t){var n=d(c(t.$element.data("zfPlugin").constructor));for(var e in this._uuids.splice(this._uuids.indexOf(t.uuid),1),t.$element.removeAttr("data-".concat(n)).removeData("zfPlugin").trigger("destroyed.zf.".concat(n)),t)t[e]=null},reInit:function(t){var n=t instanceof i.a;try{if(n)t.each(function(){i()(this).data("zfPlugin")._init()});else{var e=u(t),o=this;({object:function(t){t.forEach(function(t){t=d(t),i()("[data-"+t+"]").foundation("_init")})},string:function(){t=d(t),i()("[data-"+t+"]").foundation("_init")},undefined:function(){this.object(Object.keys(o._plugins))}})[e](t)}}catch(t){console.error(t)}finally{return t}},reflow:function(o,t){void 0===t?t=Object.keys(this._plugins):"string"==typeof t&&(t=[t]);var r=this;i.a.each(t,function(t,n){var e=r._plugins[n];i()(o).find("[data-"+n+"]").addBack("[data-"+n+"]").each(function(){var t=i()(this),o={};if(t.data("zfPlugin"))console.warn("Tried to initialize "+n+" on an element that already has a Foundation plugin.");else{if(t.attr("data-options"))t.attr("data-options").split(";").forEach(function(t,n){var e=t.split(":").map(function(t){return t.trim()});e[0]&&(o[e[0]]=function(t){{if("true"===t)return!0;if("false"===t)return!1;if(!isNaN(1*t))return parseFloat(t)}return t}(e[1]))});try{t.data("zfPlugin",new e(i()(this),o))}catch(t){console.error(t)}finally{return}}})})},getFnName:c,addToJquery:function(i){return i.fn.foundation=function(e){var t=u(e),n=i(".no-js");if(n.length&&n.removeClass("no-js"),"undefined"===t)a.MediaQuery._init(),s.reflow(this);else{if("string"!==t)throw new TypeError("We're sorry, ".concat(t," is not a valid parameter. You must use a string representing the method you wish to invoke."));var o=Array.prototype.slice.call(arguments,1),r=this.data("zfPlugin");if(void 0===r||void 0===r[e])throw new ReferenceError("We're sorry, '"+e+"' is not an available method for "+(r?c(r):"this element")+".");1===this.length?r[e].apply(r,o):this.each(function(t,n){r[e].apply(i(n).data("zfPlugin"),o)})}return this},i}};function c(t){if(void 0!==Function.prototype.name)return void 0===t.prototype?t.constructor.name:t.prototype.constructor.name;var n=/function\s([^(]{1,})\(/.exec(t.toString());return n&&1<n.length?n[1].trim():""}function d(t){return t.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}s.util={throttle:function(e,o){var r=null;return function(){var t=this,n=arguments;null===r&&(r=setTimeout(function(){e.apply(t,n),r=null},o))}}},window.Foundation=s,function(){Date.now&&window.Date.now||(window.Date.now=Date.now=function(){return(new Date).getTime()});for(var t=["webkit","moz"],n=0;n<t.length&&!window.requestAnimationFrame;++n){var e=t[n];window.requestAnimationFrame=window[e+"RequestAnimationFrame"],window.cancelAnimationFrame=window[e+"CancelAnimationFrame"]||window[e+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var o=0;window.requestAnimationFrame=function(t){var n=Date.now(),e=Math.max(o+16,n);return setTimeout(function(){t(o=e)},e-n)},window.cancelAnimationFrame=clearTimeout}window.performance&&window.performance.now||(window.performance={start:Date.now(),now:function(){return Date.now()-this.start}})}(),Function.prototype.bind||(Function.prototype.bind=function(t){if("function"!=typeof this)throw new TypeError("Function.prototype.bind - what is trying to be bound is not callable");var n=Array.prototype.slice.call(arguments,1),e=this,o=function(){},r=function(){return e.apply(this instanceof o?this:t,n.concat(Array.prototype.slice.call(arguments)))};return this.prototype&&(o.prototype=this.prototype),r.prototype=new o,r})},"./js/foundation.core.plugin.js":function(t,n,e){"use strict";e.r(n),e.d(n,"Plugin",function(){return o});e("jquery");var r=e("./js/foundation.core.utils.js");function i(t,n){for(var e=0;e<n.length;e++){var o=n[e];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}var o=function(){function o(t,n){!function(t,n){if(!(t instanceof n))throw new TypeError("Cannot call a class as a function")}(this,o),this._setup(t,n);var e=u(this);this.uuid=Object(r.GetYoDigits)(6,e),this.$element.attr("data-".concat(e))||this.$element.attr("data-".concat(e),this.uuid),this.$element.data("zfPlugin")||this.$element.data("zfPlugin",this),this.$element.trigger("init.zf.".concat(e))}var t,n,e;return t=o,(n=[{key:"destroy",value:function(){this._destroy();var t=u(this);for(var n in this.$element.removeAttr("data-".concat(t)).removeData("zfPlugin").trigger("destroyed.zf.".concat(t)),this)this[n]=null}}])&&i(t.prototype,n),e&&i(t,e),o}();function a(t){return t.replace(/([a-z])([A-Z])/g,"$1-$2").toLowerCase()}function u(t){return void 0!==t.constructor.name?a(t.constructor.name):a(t.className)}},"./js/foundation.core.utils.js":function(t,n,e){"use strict";e.r(n),e.d(n,"rtl",function(){return r}),e.d(n,"GetYoDigits",function(){return i}),e.d(n,"RegExpEscape",function(){return a}),e.d(n,"transitionend",function(){return u}),e.d(n,"onLoad",function(){return c}),e.d(n,"ignoreMousedisappear",function(){return d});var o=e("jquery"),s=e.n(o);function r(){return"rtl"===s()("html").attr("dir")}function i(t,n){return t=t||6,Math.round(Math.pow(36,t+1)-Math.random()*Math.pow(36,t)).toString(36).slice(1)+(n?"-".concat(n):"")}function a(t){return t.replace(/[-[\]{}()*+?.,\\^$|#\s]/g,"\\$&")}function u(t){var n,e={transition:"transitionend",WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"otransitionend"},o=document.createElement("div");for(var r in e)void 0!==o.style[r]&&(n=e[r]);return n||(n=setTimeout(function(){t.triggerHandler("transitionend",[t])},1),"transitionend")}function c(t,n){var e="complete"===document.readyState,o=(e?"_didLoad":"load")+".zf.util.onLoad",r=function(){return t.triggerHandler(o)};return t&&(n&&t.one(o,n),e?setTimeout(r):s()(window).one("load",r)),o}function d(i){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},n=t.ignoreLeaveWindow,a=void 0!==n&&n,e=t.ignoreReappear,u=void 0!==e&&e;return function(n){for(var t=arguments.length,e=new Array(1<t?t-1:0),o=1;o<t;o++)e[o-1]=arguments[o];var r=i.bind.apply(i,[this,n].concat(e));if(null!==n.relatedTarget)return r();setTimeout(function(){if(!a&&document.hasFocus&&!document.hasFocus())return r();u||s()(document).one("mouseenter",function(t){s()(n.currentTarget).has(t.target).length||(n.relatedTarget=t.target,r())})},0)}}},"./js/foundation.util.mediaQuery.js":function(t,n,e){"use strict";e.r(n),e.d(n,"MediaQuery",function(){return a});var o=e("jquery"),i=e.n(o);function r(t){return(r="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}window.matchMedia||(window.matchMedia=function(){var n=window.styleMedia||window.media;if(!n){var e,o=document.createElement("style"),t=document.getElementsByTagName("script")[0];o.type="text/css",o.id="matchmediajs-test",t?t.parentNode.insertBefore(o,t):document.head.appendChild(o),e="getComputedStyle"in window&&window.getComputedStyle(o,null)||o.currentStyle,n={matchMedium:function(t){var n="@media "+t+"{ #matchmediajs-test { width: 1px; } }";return o.styleSheet?o.styleSheet.cssText=n:o.textContent=n,"1px"===e.width}}}return function(t){return{matches:n.matchMedium(t||"all"),media:t||"all"}}}());var a={queries:[],current:"",_init:function(){i()("meta.foundation-mq").length||i()('<meta class="foundation-mq">').appendTo(document.head);var t,n,e,o=i()(".foundation-mq").css("font-family");for(var r in e={},t="string"==typeof(n=o)&&(n=n.trim().slice(1,-1))?e=n.split("&").reduce(function(t,n){var e=n.replace(/\+/g," ").split("="),o=e[0],r=e[1];return o=decodeURIComponent(o),r=void 0===r?null:decodeURIComponent(r),t.hasOwnProperty(o)?Array.isArray(t[o])?t[o].push(r):t[o]=[t[o],r]:t[o]=r,t},{}):e)t.hasOwnProperty(r)&&this.queries.push({name:r,value:"only screen and (min-width: ".concat(t[r],")")});this.current=this._getCurrentSize(),this._watcher()},atLeast:function(t){var n=this.get(t);return!!n&&window.matchMedia(n).matches},is:function(t){return 1<(t=t.trim().split(" ")).length&&"only"===t[1]?t[0]===this._getCurrentSize():this.atLeast(t[0])},get:function(t){for(var n in this.queries)if(this.queries.hasOwnProperty(n)){var e=this.queries[n];if(t===e.name)return e.value}return null},_getCurrentSize:function(){for(var t,n=0;n<this.queries.length;n++){var e=this.queries[n];window.matchMedia(e.value).matches&&(t=e)}return"object"===r(t)?t.name:t},_watcher:function(){var e=this;i()(window).off("resize.zf.mediaquery").on("resize.zf.mediaquery",function(){var t=e._getCurrentSize(),n=e.current;t!==n&&(e.current=t,i()(window).trigger("changed.zf.mediaquery",[t,n]))})}}},0:function(t,n,e){t.exports=e("./js/entries/plugins/foundation.core.js")},jquery:function(t,n){t.exports=e}})});
;
!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n(require("./foundation.core"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","jquery"],n):"object"==typeof exports?exports["foundation.util.keyboard"]=n(require("./foundation.core"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"]=n(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.jQuery))}(window,function(t,o){return function(t){var o={};function r(e){if(o[e])return o[e].exports;var n=o[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,r),n.l=!0,n.exports}return r.m=t,r.c=o,r.d=function(e,n,t){r.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(n,e){if(1&e&&(n=r(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(r.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var o in n)r.d(t,o,function(e){return n[e]}.bind(null,o));return t},r.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(n,"a",n),n},r.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},r.p="",r(r.s=23)}({"./foundation.core":function(e,n){e.exports=t},"./js/entries/plugins/foundation.util.keyboard.js":function(e,n,t){"use strict";t.r(n);var o=t("./foundation.core");t.d(n,"Foundation",function(){return o.Foundation});var r=t("./js/foundation.util.keyboard.js");t.d(n,"Keyboard",function(){return r.Keyboard}),o.Foundation.Keyboard=r.Keyboard},"./js/foundation.util.keyboard.js":function(e,n,t){"use strict";t.r(n),t.d(n,"Keyboard",function(){return c});var o=t("jquery"),a=t.n(o),f=t("./foundation.core"),r={9:"TAB",13:"ENTER",27:"ESCAPE",32:"SPACE",35:"END",36:"HOME",37:"ARROW_LEFT",38:"ARROW_UP",39:"ARROW_RIGHT",40:"ARROW_DOWN"},d={};function u(e){return!!e&&e.find("a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), iframe, object, embed, *[tabindex], *[contenteditable]").filter(function(){return!(!a()(this).is(":visible")||a()(this).attr("tabindex")<0)})}function i(e){var n=r[e.which||e.keyCode]||String.fromCharCode(e.which).toUpperCase();return n=n.replace(/\W+/,""),e.shiftKey&&(n="SHIFT_".concat(n)),e.ctrlKey&&(n="CTRL_".concat(n)),e.altKey&&(n="ALT_".concat(n)),n=n.replace(/_$/,"")}var c={keys:function(e){var n={};for(var t in e)n[e[t]]=e[t];return n}(r),parseKey:i,handleKey:function(e,n,t){var o,r=d[n],u=this.parseKey(e);if(!r)return console.warn("Component not defined!");if((o=t[(void 0===r.ltr?r:Object(f.rtl)()?a.a.extend({},r.ltr,r.rtl):a.a.extend({},r.rtl,r.ltr))[u]])&&"function"==typeof o){var i=o.apply();(t.handled||"function"==typeof t.handled)&&t.handled(i)}else(t.unhandled||"function"==typeof t.unhandled)&&t.unhandled()},findFocusable:u,register:function(e,n){d[e]=n},trapFocus:function(e){var n=u(e),t=n.eq(0),o=n.eq(-1);e.on("keydown.zf.trapfocus",function(e){e.target===o[0]&&"TAB"===i(e)?(e.preventDefault(),t.focus()):e.target===t[0]&&"SHIFT_TAB"===i(e)&&(e.preventDefault(),o.focus())})},releaseFocus:function(e){e.off("keydown.zf.trapfocus")}}},23:function(e,n,t){e.exports=t("./js/entries/plugins/foundation.util.keyboard.js")},jquery:function(e,n){e.exports=o}})});
;
!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n(require("./foundation.core"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","jquery"],n):"object"==typeof exports?exports["foundation.util.nest"]=n(require("./foundation.core"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.util.nest"]=n(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.jQuery))}(window,function(t,r){return function(t){var r={};function o(e){if(r[e])return r[e].exports;var n=r[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,o),n.l=!0,n.exports}return o.m=t,o.c=r,o.d=function(e,n,t){o.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(n,e){if(1&e&&(n=o(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(o.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var r in n)o.d(t,r,function(e){return n[e]}.bind(null,r));return t},o.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(n,"a",n),n},o.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},o.p="",o(o.s=26)}({"./foundation.core":function(e,n){e.exports=t},"./js/entries/plugins/foundation.util.nest.js":function(e,n,t){"use strict";t.r(n);var r=t("./foundation.core");t.d(n,"Foundation",function(){return r.Foundation});var o=t("./js/foundation.util.nest.js");t.d(n,"Nest",function(){return o.Nest}),r.Foundation.Nest=o.Nest},"./js/foundation.util.nest.js":function(e,n,t){"use strict";t.r(n),t.d(n,"Nest",function(){return o});var r=t("jquery"),a=t.n(r),o={Feather:function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:"zf";e.attr("role","menubar");var n=e.find("li").attr({role:"menuitem"}),r="is-".concat(t,"-submenu"),o="".concat(r,"-item"),u="is-".concat(t,"-submenu-parent"),i="accordion"!==t;n.each(function(){var e=a()(this),n=e.children("ul");n.length&&(e.addClass(u),i&&(e.attr({"aria-haspopup":!0,"aria-label":e.children("a:first").text()}),"drilldown"===t&&e.attr({"aria-expanded":!1})),n.addClass("submenu ".concat(r)).attr({"data-submenu":"",role:"menubar"}),"drilldown"===t&&n.attr({"aria-hidden":!0})),e.parent("[data-submenu]").length&&e.addClass("is-submenu-item ".concat(o))})},Burn:function(e,n){var t="is-".concat(n,"-submenu"),r="".concat(t,"-item"),o="is-".concat(n,"-submenu-parent");e.find(">li, > li > ul, .menu, .menu > li, [data-submenu] > li").removeClass("".concat(t," ").concat(r," ").concat(o," is-submenu-item submenu is-active")).removeAttr("data-submenu").css("display","")}}},26:function(e,n,t){e.exports=t("./js/entries/plugins/foundation.util.nest.js")},jquery:function(e,n){e.exports=r}})});
;
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(require("./foundation.core")):"function"==typeof define&&define.amd?define(["./foundation.core"],e):"object"==typeof exports?exports["foundation.util.box"]=e(require("./foundation.core")):(t.__FOUNDATION_EXTERNAL__=t.__FOUNDATION_EXTERNAL__||{},t.__FOUNDATION_EXTERNAL__["foundation.util.box"]=e(t.__FOUNDATION_EXTERNAL__["foundation.core"]))}(window,function(o){return function(o){var i={};function n(t){if(i[t])return i[t].exports;var e=i[t]={i:t,l:!1,exports:{}};return o[t].call(e.exports,e,e.exports,n),e.l=!0,e.exports}return n.m=o,n.c=i,n.d=function(t,e,o){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:o})},n.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var o=Object.create(null);if(n.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(o,i,function(t){return e[t]}.bind(null,i));return o},n.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=21)}({"./foundation.core":function(t,e){t.exports=o},"./js/entries/plugins/foundation.util.box.js":function(t,e,o){"use strict";o.r(e);var i=o("./foundation.core");o.d(e,"Foundation",function(){return i.Foundation});var n=o("./js/foundation.util.box.js");o.d(e,"Box",function(){return n.Box}),i.Foundation.Box=n.Box},"./js/foundation.util.box.js":function(t,e,o){"use strict";o.r(e),o.d(e,"Box",function(){return i});var r=o("./foundation.core"),i={ImNotTouchingYou:function(t,e,o,i,n){return 0===f(t,e,o,i,n)},OverlapArea:f,GetDimensions:l,GetOffsets:function(t,e,o,i,n,f){switch(console.log("NOTE: GetOffsets is deprecated in favor of GetExplicitOffsets and will be removed in 6.5"),o){case"top":return Object(r.rtl)()?s(t,e,"top","left",i,n,f):s(t,e,"top","right",i,n,f);case"bottom":return Object(r.rtl)()?s(t,e,"bottom","left",i,n,f):s(t,e,"bottom","right",i,n,f);case"center top":return s(t,e,"top","center",i,n,f);case"center bottom":return s(t,e,"bottom","center",i,n,f);case"center left":return s(t,e,"left","center",i,n,f);case"center right":return s(t,e,"right","center",i,n,f);case"left bottom":return s(t,e,"bottom","left",i,n,f);case"right bottom":return s(t,e,"bottom","right",i,n,f);case"center":return{left:$eleDims.windowDims.offset.left+$eleDims.windowDims.width/2-$eleDims.width/2+n,top:$eleDims.windowDims.offset.top+$eleDims.windowDims.height/2-($eleDims.height/2+i)};case"reveal":return{left:($eleDims.windowDims.width-$eleDims.width)/2+n,top:$eleDims.windowDims.offset.top+i};case"reveal full":return{left:$eleDims.windowDims.offset.left,top:$eleDims.windowDims.offset.top};default:return{left:Object(r.rtl)()?$anchorDims.offset.left-$eleDims.width+$anchorDims.width-n:$anchorDims.offset.left+n,top:$anchorDims.offset.top+$anchorDims.height+i}}},GetExplicitOffsets:s};function f(t,e,o,i,n){var f,r,s,u,c=l(t);if(e){var a=l(e);r=a.height+a.offset.top-(c.offset.top+c.height),f=c.offset.top-a.offset.top,s=c.offset.left-a.offset.left,u=a.width+a.offset.left-(c.offset.left+c.width)}else r=c.windowDims.height+c.windowDims.offset.top-(c.offset.top+c.height),f=c.offset.top-c.windowDims.offset.top,s=c.offset.left-c.windowDims.offset.left,u=c.windowDims.width-(c.offset.left+c.width);return r=n?0:Math.min(r,0),f=Math.min(f,0),s=Math.min(s,0),u=Math.min(u,0),o?s+u:i?f+r:Math.sqrt(f*f+r*r+s*s+u*u)}function l(t){if((t=t.length?t[0]:t)===window||t===document)throw new Error("I'm sorry, Dave. I'm afraid I can't do that.");var e=t.getBoundingClientRect(),o=t.parentNode.getBoundingClientRect(),i=document.body.getBoundingClientRect(),n=window.pageYOffset,f=window.pageXOffset;return{width:e.width,height:e.height,offset:{top:e.top+n,left:e.left+f},parentDims:{width:o.width,height:o.height,offset:{top:o.top+n,left:o.left+f}},windowDims:{width:i.width,height:i.height,offset:{top:n,left:f}}}}function s(t,e,o,i,n,f,r){var s,u,c=l(t),a=e?l(e):null;switch(o){case"top":s=a.offset.top-(c.height+n);break;case"bottom":s=a.offset.top+a.height+n;break;case"left":u=a.offset.left-(c.width+f);break;case"right":u=a.offset.left+a.width+f}switch(o){case"top":case"bottom":switch(i){case"left":u=a.offset.left+f;break;case"right":u=a.offset.left-c.width+a.width-f;break;case"center":u=r?f:a.offset.left+a.width/2-c.width/2+f}break;case"right":case"left":switch(i){case"bottom":s=a.offset.top-n+a.height-c.height;break;case"top":s=a.offset.top+n;break;case"center":s=a.offset.top+n+a.height/2-c.height/2}}return{top:s,left:u}}},21:function(t,e,o){t.exports=o("./js/entries/plugins/foundation.util.box.js")}})});
;
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("./foundation.util.box"),require("./foundation.util.keyboard"),require("./foundation.util.nest"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.box","./foundation.util.keyboard","./foundation.util.nest","jquery"],t):"object"==typeof exports?exports["foundation.drilldown"]=t(require("./foundation.core"),require("./foundation.util.box"),require("./foundation.util.keyboard"),require("./foundation.util.nest"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.drilldown"]=t(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.__FOUNDATION_EXTERNAL__["foundation.util.box"],e.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"],e.__FOUNDATION_EXTERNAL__["foundation.util.nest"],e.jQuery))}(window,function(n,i,o,r,a){return function(n){var i={};function o(e){if(i[e])return i[e].exports;var t=i[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}return o.m=n,o.c=i,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var i in t)o.d(n,i,function(e){return t[e]}.bind(null,i));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=3)}({"./foundation.core":function(e,t){e.exports=n},"./foundation.util.box":function(e,t){e.exports=i},"./foundation.util.keyboard":function(e,t){e.exports=o},"./foundation.util.nest":function(e,t){e.exports=r},"./js/entries/plugins/foundation.drilldown.js":function(e,t,n){"use strict";n.r(t);var i=n("./foundation.core");n.d(t,"Foundation",function(){return i.Foundation});var o=n("./js/foundation.drilldown.js");n.d(t,"Drilldown",function(){return o.Drilldown}),i.Foundation.plugin(o.Drilldown,"Drilldown")},"./js/foundation.drilldown.js":function(e,t,n){"use strict";n.r(t),n.d(t,"Drilldown",function(){return h});var i=n("jquery"),a=n.n(i),s=n("./foundation.util.keyboard"),r=n("./foundation.util.nest"),l=n("./foundation.core"),u=n("./foundation.util.box");function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function d(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}function c(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?function(e){if(void 0!==e)return e;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(e):t}function f(e){return(f=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function p(e,t){return(p=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var h=function(e){function n(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,n),c(this,f(n).apply(this,arguments))}var t,i,o;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&p(e,t)}(n,l["Plugin"]),t=n,(i=[{key:"_setup",value:function(e,t){this.$element=e,this.options=a.a.extend({},n.defaults,this.$element.data(),t),this.className="Drilldown",this._init(),s.Keyboard.register("Drilldown",{ENTER:"open",SPACE:"open",ARROW_RIGHT:"next",ARROW_UP:"up",ARROW_DOWN:"down",ARROW_LEFT:"previous",ESCAPE:"close",TAB:"down",SHIFT_TAB:"up"})}},{key:"_init",value:function(){r.Nest.Feather(this.$element,"drilldown"),this.options.autoApplyClass&&this.$element.addClass("drilldown"),this.$element.attr({role:"tree","aria-multiselectable":!1}),this.$submenuAnchors=this.$element.find("li.is-drilldown-submenu-parent").children("a"),this.$submenus=this.$submenuAnchors.parent("li").children("[data-submenu]").attr("role","group"),this.$menuItems=this.$element.find("li").not(".js-drilldown-back").attr("role","treeitem").find("a"),this.$currentMenu=this.$element,this.$element.attr("data-mutate",this.$element.attr("data-drilldown")||Object(l.GetYoDigits)(6,"drilldown")),this._prepareMenu(),this._registerEvents(),this._keyboardEvents()}},{key:"_prepareMenu",value:function(){var n=this;this.$submenuAnchors.each(function(){var e=a()(this),t=e.parent();n.options.parentLink&&e.clone().prependTo(t.children("[data-submenu]")).wrap('<li data-is-parent-link class="is-submenu-parent-item is-submenu-item is-drilldown-submenu-item" role="menuitem"></li>'),e.data("savedHref",e.attr("href")).removeAttr("href").attr("tabindex",0),e.children("[data-submenu]").attr({"aria-hidden":!0,tabindex:0,role:"group"}),n._events(e)}),this.$submenus.each(function(){var e=a()(this);if(!e.find(".js-drilldown-back").length)switch(n.options.backButtonPosition){case"bottom":e.append(n.options.backButton);break;case"top":e.prepend(n.options.backButton);break;default:console.error("Unsupported backButtonPosition value '"+n.options.backButtonPosition+"'")}n._back(e)}),this.$submenus.addClass("invisible"),this.options.autoHeight||this.$submenus.addClass("drilldown-submenu-cover-previous"),this.$element.parent().hasClass("is-drilldown")||(this.$wrapper=a()(this.options.wrapper).addClass("is-drilldown"),this.options.animateHeight&&this.$wrapper.addClass("animate-height"),this.$element.wrap(this.$wrapper)),this.$wrapper=this.$element.parent(),this.$wrapper.css(this._getMaxDims())}},{key:"_resize",value:function(){this.$wrapper.css({"max-width":"none","min-height":"none"}),this.$wrapper.css(this._getMaxDims())}},{key:"_events",value:function(n){var i=this;n.off("click.zf.drilldown").on("click.zf.drilldown",function(e){if(a()(e.target).parentsUntil("ul","li").hasClass("is-drilldown-submenu-parent")&&(e.stopImmediatePropagation(),e.preventDefault()),i._show(n.parent("li")),i.options.closeOnClick){var t=a()("body");t.off(".zf.drilldown").on("click.zf.drilldown",function(e){e.target===i.$element[0]||a.a.contains(i.$element[0],e.target)||(e.preventDefault(),i._hideAll(),t.off(".zf.drilldown"))})}})}},{key:"_registerEvents",value:function(){this.options.scrollTop&&(this._bindHandler=this._scrollTop.bind(this),this.$element.on("open.zf.drilldown hide.zf.drilldown closed.zf.drilldown",this._bindHandler)),this.$element.on("mutateme.zf.trigger",this._resize.bind(this))}},{key:"_scrollTop",value:function(){var e=this,t=""!=e.options.scrollTopElement?a()(e.options.scrollTopElement):e.$element,n=parseInt(t.offset().top+e.options.scrollTopOffset,10);a()("html, body").stop(!0).animate({scrollTop:n},e.options.animationDuration,e.options.animationEasing,function(){this===a()("html")[0]&&e.$element.trigger("scrollme.zf.drilldown")})}},{key:"_keyboardEvents",value:function(){var e=this;this.$menuItems.add(this.$element.find(".js-drilldown-back > a, .is-submenu-parent-item > a")).on("keydown.zf.drilldown",function(t){var n,i,o=a()(this),r=o.parent("li").parent("ul").children("li").children("a");r.each(function(e){if(a()(this).is(o))return n=r.eq(Math.max(0,e-1)),void(i=r.eq(Math.min(e+1,r.length-1)))}),s.Keyboard.handleKey(t,"Drilldown",{next:function(){if(o.is(e.$submenuAnchors))return e._show(o.parent("li")),o.parent("li").one(Object(l.transitionend)(o),function(){o.parent("li").find("ul li a").not(".js-drilldown-back a").first().focus()}),!0},previous:function(){return e._hide(o.parent("li").parent("ul")),o.parent("li").parent("ul").one(Object(l.transitionend)(o),function(){setTimeout(function(){o.parent("li").parent("ul").parent("li").children("a").first().focus()},1)}),!0},up:function(){return n.focus(),!o.is(e.$element.find("> li:first-child > a"))},down:function(){return i.focus(),!o.is(e.$element.find("> li:last-child > a"))},close:function(){o.is(e.$element.find("> li > a"))||(e._hide(o.parent().parent()),o.parent().parent().siblings("a").focus())},open:function(){return(!e.options.parentLink||!o.attr("href"))&&(o.is(e.$menuItems)?o.is(e.$submenuAnchors)?(e._show(o.parent("li")),o.parent("li").one(Object(l.transitionend)(o),function(){o.parent("li").find("ul li a").not(".js-drilldown-back a").first().focus()}),!0):void 0:(e._hide(o.parent("li").parent("ul")),o.parent("li").parent("ul").one(Object(l.transitionend)(o),function(){setTimeout(function(){o.parent("li").parent("ul").parent("li").children("a").first().focus()},1)}),!0))},handled:function(e){e&&t.preventDefault(),t.stopImmediatePropagation()}})})}},{key:"_hideAll",value:function(){var t=this.$element.find(".is-drilldown-submenu.is-active").addClass("is-closing");this.options.autoHeight&&this.$wrapper.css({height:t.parent().closest("ul").data("calcHeight")}),t.one(Object(l.transitionend)(t),function(e){t.removeClass("is-active is-closing")}),this.$element.trigger("closed.zf.drilldown")}},{key:"_back",value:function(n){var i=this;n.off("click.zf.drilldown"),n.children(".js-drilldown-back").on("click.zf.drilldown",function(e){e.stopImmediatePropagation(),i._hide(n);var t=n.parent("li").parent("ul").parent("li");t.length&&i._show(t)})}},{key:"_menuLinkEvents",value:function(){var t=this;this.$menuItems.not(".is-drilldown-submenu-parent").off("click.zf.drilldown").on("click.zf.drilldown",function(e){setTimeout(function(){t._hideAll()},0)})}},{key:"_setShowSubMenuClasses",value:function(e,t){e.addClass("is-active").removeClass("invisible").attr("aria-hidden",!1),e.parent("li").attr("aria-expanded",!0),!0===t&&this.$element.trigger("open.zf.drilldown",[e])}},{key:"_setHideSubMenuClasses",value:function(e,t){e.removeClass("is-active").addClass("invisible").attr("aria-hidden",!0),e.parent("li").attr("aria-expanded",!1),!0===t&&e.trigger("hide.zf.drilldown",[e])}},{key:"_showMenu",value:function(n,i){var o=this;if(this.$element.find('li[aria-expanded="true"] > ul[data-submenu]').each(function(e){o._setHideSubMenuClasses(a()(this))}),(this.$currentMenu=n).is("[data-drilldown]"))return!0===i&&n.find('li[role="treeitem"] > a').first().focus(),void(this.options.autoHeight&&this.$wrapper.css("height",n.data("calcHeight")));var r=n.children().first().parentsUntil("[data-drilldown]","[data-submenu]");r.each(function(e){0===e&&o.options.autoHeight&&o.$wrapper.css("height",a()(this).data("calcHeight"));var t=e==r.length-1;!0===t&&a()(this).one(Object(l.transitionend)(a()(this)),function(){!0===i&&n.find('li[role="treeitem"] > a').first().focus()}),o._setShowSubMenuClasses(a()(this),t)})}},{key:"_show",value:function(e){var t=e.children("[data-submenu]");e.attr("aria-expanded",!0),(this.$currentMenu=t).addClass("is-active").removeClass("invisible").attr("aria-hidden",!1),this.options.autoHeight&&this.$wrapper.css({height:t.data("calcHeight")}),this.$element.trigger("open.zf.drilldown",[e])}},{key:"_hide",value:function(e){this.options.autoHeight&&this.$wrapper.css({height:e.parent().closest("ul").data("calcHeight")});e.parent("li").attr("aria-expanded",!1),e.attr("aria-hidden",!0),e.addClass("is-closing").one(Object(l.transitionend)(e),function(){e.removeClass("is-active is-closing"),e.blur().addClass("invisible")}),e.trigger("hide.zf.drilldown",[e])}},{key:"_getMaxDims",value:function(){var t=0,e={},n=this;return this.$submenus.add(this.$element).each(function(){a()(this).children("li").length;var e=u.Box.GetDimensions(this).height;t=t<e?e:t,n.options.autoHeight&&a()(this).data("calcHeight",e)}),this.options.autoHeight?e.height=this.$currentMenu.data("calcHeight"):e["min-height"]="".concat(t,"px"),e["max-width"]="".concat(this.$element[0].getBoundingClientRect().width,"px"),e}},{key:"_destroy",value:function(){this.options.scrollTop&&this.$element.off(".zf.drilldown",this._bindHandler),this._hideAll(),this.$element.off("mutateme.zf.trigger"),r.Nest.Burn(this.$element,"drilldown"),this.$element.unwrap().find(".js-drilldown-back, .is-submenu-parent-item").remove().end().find(".is-active, .is-closing, .is-drilldown-submenu").removeClass("is-active is-closing is-drilldown-submenu").end().find("[data-submenu]").removeAttr("aria-hidden tabindex role"),this.$submenuAnchors.each(function(){a()(this).off(".zf.drilldown")}),this.$element.find("[data-is-parent-link]").detach(),this.$submenus.removeClass("drilldown-submenu-cover-previous invisible"),this.$element.find("a").each(function(){var e=a()(this);e.removeAttr("tabindex"),e.data("savedHref")&&e.attr("href",e.data("savedHref")).removeData("savedHref")})}}])&&d(t.prototype,i),o&&d(t,o),n}();h.defaults={autoApplyClass:!0,backButton:'<li class="js-drilldown-back"><a tabindex="0">Back</a></li>',backButtonPosition:"top",wrapper:"<div></div>",parentLink:!1,closeOnClick:!1,autoHeight:!1,animateHeight:!1,scrollTop:!1,scrollTopElement:"",scrollTopOffset:0,animationDuration:500,animationEasing:"swing"}},3:function(e,t,n){e.exports=n("./js/entries/plugins/foundation.drilldown.js")},jquery:function(e,t){e.exports=a}})});
;
!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n(require("./foundation.core"),require("./foundation.util.box"),require("./foundation.util.keyboard"),require("./foundation.util.nest"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.box","./foundation.util.keyboard","./foundation.util.nest","jquery"],n):"object"==typeof exports?exports["foundation.dropdownMenu"]=n(require("./foundation.core"),require("./foundation.util.box"),require("./foundation.util.keyboard"),require("./foundation.util.nest"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.dropdownMenu"]=n(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.__FOUNDATION_EXTERNAL__["foundation.util.box"],e.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"],e.__FOUNDATION_EXTERNAL__["foundation.util.nest"],e.jQuery))}(window,function(t,o,i,r,s){return function(t){var o={};function i(e){if(o[e])return o[e].exports;var n=o[e]={i:e,l:!1,exports:{}};return t[e].call(n.exports,n,n.exports,i),n.l=!0,n.exports}return i.m=t,i.c=o,i.d=function(e,n,t){i.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:t})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(n,e){if(1&e&&(n=i(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var t=Object.create(null);if(i.r(t),Object.defineProperty(t,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var o in n)i.d(t,o,function(e){return n[e]}.bind(null,o));return t},i.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(n,"a",n),n},i.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},i.p="",i(i.s=5)}({"./foundation.core":function(e,n){e.exports=t},"./foundation.util.box":function(e,n){e.exports=o},"./foundation.util.keyboard":function(e,n){e.exports=i},"./foundation.util.nest":function(e,n){e.exports=r},"./js/entries/plugins/foundation.dropdownMenu.js":function(e,n,t){"use strict";t.r(n);var o=t("./foundation.core");t.d(n,"Foundation",function(){return o.Foundation});var i=t("./js/foundation.dropdownMenu.js");t.d(n,"DropdownMenu",function(){return i.DropdownMenu}),o.Foundation.plugin(i.DropdownMenu,"DropdownMenu")},"./js/foundation.dropdownMenu.js":function(e,n,t){"use strict";t.r(n),t.d(n,"DropdownMenu",function(){return h});var o=t("jquery"),f=t.n(o),u=t("./foundation.core"),p=t("./foundation.util.keyboard"),r=t("./foundation.util.nest"),s=t("./foundation.util.box");function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function a(e,n){for(var t=0;t<n.length;t++){var o=n[t];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(e,o.key,o)}}function d(e,n){return!n||"object"!==i(n)&&"function"!=typeof n?function(e){if(void 0!==e)return e;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(e):n}function l(e){return(l=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function c(e,n){return(c=Object.setPrototypeOf||function(e,n){return e.__proto__=n,e})(e,n)}var h=function(e){function t(){return function(e,n){if(!(e instanceof n))throw new TypeError("Cannot call a class as a function")}(this,t),d(this,l(t).apply(this,arguments))}var n,o,i;return function(e,n){if("function"!=typeof n&&null!==n)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(n&&n.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),n&&c(e,n)}(t,u["Plugin"]),n=t,(o=[{key:"_setup",value:function(e,n){this.$element=e,this.options=f.a.extend({},t.defaults,this.$element.data(),n),this.className="DropdownMenu",this._init(),p.Keyboard.register("DropdownMenu",{ENTER:"open",SPACE:"open",ARROW_RIGHT:"next",ARROW_UP:"up",ARROW_DOWN:"down",ARROW_LEFT:"previous",ESCAPE:"close"})}},{key:"_init",value:function(){r.Nest.Feather(this.$element,"dropdown");var e=this.$element.find("li.is-dropdown-submenu-parent");this.$element.children(".is-dropdown-submenu-parent").children(".is-dropdown-submenu").addClass("first-sub"),this.$menuItems=this.$element.find('[role="menuitem"]'),this.$tabs=this.$element.children('[role="menuitem"]'),this.$tabs.find("ul.is-dropdown-submenu").addClass(this.options.verticalClass),"auto"===this.options.alignment?this.$element.hasClass(this.options.rightClass)||Object(u.rtl)()||this.$element.parents(".top-bar-right").is("*")?(this.options.alignment="right",e.addClass("opens-left")):(this.options.alignment="left",e.addClass("opens-right")):"right"===this.options.alignment?e.addClass("opens-left"):e.addClass("opens-right"),this.changed=!1,this._events()}},{key:"_isVertical",value:function(){return"block"===this.$tabs.css("display")||"column"===this.$element.css("flex-direction")}},{key:"_isRtl",value:function(){return this.$element.hasClass("align-right")||Object(u.rtl)()&&!this.$element.hasClass("align-left")}},{key:"_events",value:function(){var c=this,r="ontouchstart"in window||void 0!==window.ontouchstart,s="is-dropdown-submenu-parent";(this.options.clickOpen||r)&&this.$menuItems.on("click.zf.dropdownmenu touchstart.zf.dropdownmenu",function(e){var n=f()(e.target).parentsUntil("ul",".".concat(s)),t=n.hasClass(s),o="true"===n.attr("data-is-click"),i=n.children(".is-dropdown-submenu");if(t)if(o){if(!c.options.closeOnClick||!c.options.clickOpen&&!r||c.options.forceFollow&&r)return;e.stopImmediatePropagation(),e.preventDefault(),c._hide(n)}else e.preventDefault(),e.stopImmediatePropagation(),c._show(i),n.add(n.parentsUntil(c.$element,".".concat(s))).attr("data-is-click",!0)}),c.options.closeOnClickInside&&this.$menuItems.on("click.zf.dropdownmenu",function(e){f()(this).hasClass(s)||c._hide()}),this.options.disableHover||this.$menuItems.on("mouseenter.zf.dropdownmenu",function(e){var n=f()(this);n.hasClass(s)&&(clearTimeout(n.data("_delay")),n.data("_delay",setTimeout(function(){c._show(n.children(".is-dropdown-submenu"))},c.options.hoverDelay)))}).on("mouseleave.zf.dropdownMenu",Object(u.ignoreMousedisappear)(function(e){var n=f()(this);if(n.hasClass(s)&&c.options.autoclose){if("true"===n.attr("data-is-click")&&c.options.clickOpen)return!1;clearTimeout(n.data("_delay")),n.data("_delay",setTimeout(function(){c._hide(n)},c.options.closingTime))}})),this.$menuItems.on("keydown.zf.dropdownmenu",function(n){var t,o,i=f()(n.target).parentsUntil("ul",'[role="menuitem"]'),e=-1<c.$tabs.index(i),r=e?c.$tabs:i.siblings("li").add(i);r.each(function(e){if(f()(this).is(i))return t=r.eq(e-1),void(o=r.eq(e+1))});var s=function(){o.children("a:first").focus(),n.preventDefault()},u=function(){t.children("a:first").focus(),n.preventDefault()},a=function(){var e=i.children("ul.is-dropdown-submenu");e.length&&(c._show(e),i.find("li > a:first").focus(),n.preventDefault())},d=function(){var e=i.parent("ul").parent("li");e.children("a:first").focus(),c._hide(e),n.preventDefault()},l={open:a,close:function(){c._hide(c.$element),c.$menuItems.eq(0).children("a").focus(),n.preventDefault()},handled:function(){n.stopImmediatePropagation()}};e?c._isVertical()?c._isRtl()?f.a.extend(l,{down:s,up:u,next:d,previous:a}):f.a.extend(l,{down:s,up:u,next:a,previous:d}):c._isRtl()?f.a.extend(l,{next:u,previous:s,down:a,up:d}):f.a.extend(l,{next:s,previous:u,down:a,up:d}):c._isRtl()?f.a.extend(l,{next:d,previous:a,down:s,up:u}):f.a.extend(l,{next:a,previous:d,down:s,up:u}),p.Keyboard.handleKey(n,"DropdownMenu",l)})}},{key:"_addBodyHandler",value:function(){var n=f()(document.body),t=this;n.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu").on("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu",function(e){t.$element.find(e.target).length||(t._hide(),n.off("mouseup.zf.dropdownmenu touchend.zf.dropdownmenu"))})}},{key:"_show",value:function(t){var e=this.$tabs.index(this.$tabs.filter(function(e,n){return 0<f()(n).find(t).length})),n=t.parent("li.is-dropdown-submenu-parent").siblings("li.is-dropdown-submenu-parent");this._hide(n,e),t.css("visibility","hidden").addClass("js-dropdown-active").parent("li.is-dropdown-submenu-parent").addClass("is-active");var o=s.Box.ImNotTouchingYou(t,null,!0);if(!o){var i="left"===this.options.alignment?"-right":"-left",r=t.parent(".is-dropdown-submenu-parent");r.removeClass("opens".concat(i)).addClass("opens-".concat(this.options.alignment)),(o=s.Box.ImNotTouchingYou(t,null,!0))||r.removeClass("opens-".concat(this.options.alignment)).addClass("opens-inner"),this.changed=!0}t.css("visibility",""),this.options.closeOnClick&&this._addBodyHandler(),this.$element.trigger("show.zf.dropdownmenu",[t])}},{key:"_hide",value:function(e,t){var n;if((n=e&&e.length?e:void 0!==t?this.$tabs.not(function(e,n){return e===t}):this.$element).hasClass("is-active")||0<n.find(".is-active").length){if(n.find("li.is-active").add(n).attr({"data-is-click":!1}).removeClass("is-active"),n.find("ul.js-dropdown-active").removeClass("js-dropdown-active"),this.changed||n.find("opens-inner").length){var o="left"===this.options.alignment?"right":"left";n.find("li.is-dropdown-submenu-parent").add(n).removeClass("opens-inner opens-".concat(this.options.alignment)).addClass("opens-".concat(o)),this.changed=!1}this.$element.trigger("hide.zf.dropdownmenu",[n])}}},{key:"_destroy",value:function(){this.$menuItems.off(".zf.dropdownmenu").removeAttr("data-is-click").removeClass("is-right-arrow is-left-arrow is-down-arrow opens-right opens-left opens-inner"),f()(document.body).off(".zf.dropdownmenu"),r.Nest.Burn(this.$element,"dropdown")}}])&&a(n.prototype,o),i&&a(n,i),t}();h.defaults={disableHover:!1,autoclose:!0,hoverDelay:50,clickOpen:!1,closingTime:500,alignment:"auto",closeOnClick:!0,closeOnClickInside:!0,verticalClass:"vertical",rightClass:"align-right",forceFollow:!0}},5:function(e,n,t){e.exports=t("./js/entries/plugins/foundation.dropdownMenu.js")},jquery:function(e,n){e.exports=s}})});
;
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","jquery"],t):"object"==typeof exports?exports["foundation.util.mediaQuery"]=t(require("./foundation.core"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.util.mediaQuery"]=t(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.jQuery))}(window,function(n,r){return function(n){var r={};function i(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return n[e].call(t.exports,t,t.exports,i),t.l=!0,t.exports}return i.m=n,i.c=r,i.d=function(e,t,n){i.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},i.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)i.d(n,r,function(e){return t[e]}.bind(null,r));return n},i.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return i.d(t,"a",t),t},i.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},i.p="",i(i.s=24)}({"./foundation.core":function(e,t){e.exports=n},"./js/entries/plugins/foundation.util.mediaQuery.js":function(e,t,n){"use strict";n.r(t);var r=n("./foundation.core");n.d(t,"Foundation",function(){return r.Foundation});var i=n("./js/foundation.util.mediaQuery.js");n.d(t,"MediaQuery",function(){return i.MediaQuery}),r.Foundation.MediaQuery=i.MediaQuery,r.Foundation.MediaQuery._init()},"./js/foundation.util.mediaQuery.js":function(e,t,n){"use strict";n.r(t),n.d(t,"MediaQuery",function(){return u});var r=n("jquery"),o=n.n(r);function i(e){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}window.matchMedia||(window.matchMedia=function(){var t=window.styleMedia||window.media;if(!t){var n,r=document.createElement("style"),e=document.getElementsByTagName("script")[0];r.type="text/css",r.id="matchmediajs-test",e?e.parentNode.insertBefore(r,e):document.head.appendChild(r),n="getComputedStyle"in window&&window.getComputedStyle(r,null)||r.currentStyle,t={matchMedium:function(e){var t="@media "+e+"{ #matchmediajs-test { width: 1px; } }";return r.styleSheet?r.styleSheet.cssText=t:r.textContent=t,"1px"===n.width}}}return function(e){return{matches:t.matchMedium(e||"all"),media:e||"all"}}}());var u={queries:[],current:"",_init:function(){o()("meta.foundation-mq").length||o()('<meta class="foundation-mq">').appendTo(document.head);var e,t,n,r=o()(".foundation-mq").css("font-family");for(var i in n={},e="string"==typeof(t=r)&&(t=t.trim().slice(1,-1))?n=t.split("&").reduce(function(e,t){var n=t.replace(/\+/g," ").split("="),r=n[0],i=n[1];return r=decodeURIComponent(r),i=void 0===i?null:decodeURIComponent(i),e.hasOwnProperty(r)?Array.isArray(e[r])?e[r].push(i):e[r]=[e[r],i]:e[r]=i,e},{}):n)e.hasOwnProperty(i)&&this.queries.push({name:i,value:"only screen and (min-width: ".concat(e[i],")")});this.current=this._getCurrentSize(),this._watcher()},atLeast:function(e){var t=this.get(e);return!!t&&window.matchMedia(t).matches},is:function(e){return 1<(e=e.trim().split(" ")).length&&"only"===e[1]?e[0]===this._getCurrentSize():this.atLeast(e[0])},get:function(e){for(var t in this.queries)if(this.queries.hasOwnProperty(t)){var n=this.queries[t];if(e===n.name)return n.value}return null},_getCurrentSize:function(){for(var e,t=0;t<this.queries.length;t++){var n=this.queries[t];window.matchMedia(n.value).matches&&(e=n)}return"object"===i(e)?e.name:e},_watcher:function(){var n=this;o()(window).off("resize.zf.mediaquery").on("resize.zf.mediaquery",function(){var e=n._getCurrentSize(),t=n.current;e!==t&&(n.current=e,o()(window).trigger("changed.zf.mediaquery",[e,t]))})}}},24:function(e,t,n){e.exports=n("./js/entries/plugins/foundation.util.mediaQuery.js")},jquery:function(e,t){e.exports=r}})});
;
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("./foundation.util.motion"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.motion","jquery"],t):"object"==typeof exports?exports["foundation.util.triggers"]=t(require("./foundation.core"),require("./foundation.util.motion"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.util.triggers"]=t(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.__FOUNDATION_EXTERNAL__["foundation.util.motion"],e.jQuery))}(window,function(i,r,n){return function(i){var r={};function n(e){if(r[e])return r[e].exports;var t=r[e]={i:e,l:!1,exports:{}};return i[e].call(t.exports,t,t.exports,n),t.l=!0,t.exports}return n.m=i,n.c=r,n.d=function(e,t,i){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(n.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var r in t)n.d(i,r,function(e){return t[e]}.bind(null,r));return i},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=29)}({"./foundation.core":function(e,t){e.exports=i},"./foundation.util.motion":function(e,t){e.exports=r},"./js/entries/plugins/foundation.util.triggers.js":function(e,t,i){"use strict";i.r(t);var r=i("./foundation.core");i.d(t,"Foundation",function(){return r.Foundation});var n=i("jquery"),o=i.n(n),s=i("./js/foundation.util.triggers.js");i.d(t,"Triggers",function(){return s.Triggers}),s.Triggers.init(o.a,r.Foundation)},"./js/foundation.util.triggers.js":function(e,t,i){"use strict";i.r(t),i.d(t,"Triggers",function(){return c});var r=i("jquery"),o=i.n(r),n=i("./foundation.core"),s=i("./foundation.util.motion");function a(e){return(a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var l=function(){for(var e=["WebKit","Moz","O","Ms",""],t=0;t<e.length;t++)if("".concat(e[t],"MutationObserver")in window)return window["".concat(e[t],"MutationObserver")];return!1}(),u=function(t,i){t.data(i).split(" ").forEach(function(e){o()("#".concat(e))["close"===i?"trigger":"triggerHandler"]("".concat(i,".zf.trigger"),[t])})},c={Listeners:{Basic:{},Global:{}},Initializers:{}};function f(t,e,i){var r,n=Array.prototype.slice.call(arguments,3);o()(window).off(e).on(e,function(e){r&&clearTimeout(r),r=setTimeout(function(){i.apply(null,n)},t||10)})}c.Listeners.Basic={openListener:function(){u(o()(this),"open")},closeListener:function(){o()(this).data("close")?u(o()(this),"close"):o()(this).trigger("close.zf.trigger")},toggleListener:function(){o()(this).data("toggle")?u(o()(this),"toggle"):o()(this).trigger("toggle.zf.trigger")},closeableListener:function(e){e.stopPropagation();var t=o()(this).data("closable");""!==t?s.Motion.animateOut(o()(this),t,function(){o()(this).trigger("closed.zf")}):o()(this).fadeOut().trigger("closed.zf")},toggleFocusListener:function(){var e=o()(this).data("toggle-focus");o()("#".concat(e)).triggerHandler("toggle.zf.trigger",[o()(this)])}},c.Initializers.addOpenListener=function(e){e.off("click.zf.trigger",c.Listeners.Basic.openListener),e.on("click.zf.trigger","[data-open]",c.Listeners.Basic.openListener)},c.Initializers.addCloseListener=function(e){e.off("click.zf.trigger",c.Listeners.Basic.closeListener),e.on("click.zf.trigger","[data-close]",c.Listeners.Basic.closeListener)},c.Initializers.addToggleListener=function(e){e.off("click.zf.trigger",c.Listeners.Basic.toggleListener),e.on("click.zf.trigger","[data-toggle]",c.Listeners.Basic.toggleListener)},c.Initializers.addCloseableListener=function(e){e.off("close.zf.trigger",c.Listeners.Basic.closeableListener),e.on("close.zf.trigger","[data-closeable], [data-closable]",c.Listeners.Basic.closeableListener)},c.Initializers.addToggleFocusListener=function(e){e.off("focus.zf.trigger blur.zf.trigger",c.Listeners.Basic.toggleFocusListener),e.on("focus.zf.trigger blur.zf.trigger","[data-toggle-focus]",c.Listeners.Basic.toggleFocusListener)},c.Listeners.Global={resizeListener:function(e){l||e.each(function(){o()(this).triggerHandler("resizeme.zf.trigger")}),e.attr("data-events","resize")},scrollListener:function(e){l||e.each(function(){o()(this).triggerHandler("scrollme.zf.trigger")}),e.attr("data-events","scroll")},closeMeListener:function(e,t){var i=e.namespace.split(".")[0];o()("[data-".concat(i,"]")).not('[data-yeti-box="'.concat(t,'"]')).each(function(){var e=o()(this);e.triggerHandler("close.zf.trigger",[e])})}},c.Initializers.addClosemeListener=function(e){var t=o()("[data-yeti-box]"),i=["dropdown","tooltip","reveal"];if(e&&("string"==typeof e?i.push(e):"object"===a(e)&&"string"==typeof e[0]?i=i.concat(e):console.error("Plugin names must be strings")),t.length){var r=i.map(function(e){return"closeme.zf.".concat(e)}).join(" ");o()(window).off(r).on(r,c.Listeners.Global.closeMeListener)}},c.Initializers.addResizeListener=function(e){var t=o()("[data-resize]");t.length&&f(e,"resize.zf.trigger",c.Listeners.Global.resizeListener,t)},c.Initializers.addScrollListener=function(e){var t=o()("[data-scroll]");t.length&&f(e,"scroll.zf.trigger",c.Listeners.Global.scrollListener,t)},c.Initializers.addMutationEventsListener=function(e){if(!l)return!1;var t=e.find("[data-resize], [data-scroll], [data-mutate]"),i=function(e){var t=o()(e[0].target);switch(e[0].type){case"attributes":"scroll"===t.attr("data-events")&&"data-events"===e[0].attributeName&&t.triggerHandler("scrollme.zf.trigger",[t,window.pageYOffset]),"resize"===t.attr("data-events")&&"data-events"===e[0].attributeName&&t.triggerHandler("resizeme.zf.trigger",[t]),"style"===e[0].attributeName&&(t.closest("[data-mutate]").attr("data-events","mutate"),t.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[t.closest("[data-mutate]")]));break;case"childList":t.closest("[data-mutate]").attr("data-events","mutate"),t.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[t.closest("[data-mutate]")]);break;default:return!1}};if(t.length)for(var r=0;r<=t.length-1;r++){new l(i).observe(t[r],{attributes:!0,childList:!0,characterData:!1,subtree:!0,attributeFilter:["data-events","style"]})}},c.Initializers.addSimpleListeners=function(){var e=o()(document);c.Initializers.addOpenListener(e),c.Initializers.addCloseListener(e),c.Initializers.addToggleListener(e),c.Initializers.addCloseableListener(e),c.Initializers.addToggleFocusListener(e)},c.Initializers.addGlobalListeners=function(){var e=o()(document);c.Initializers.addMutationEventsListener(e),c.Initializers.addResizeListener(),c.Initializers.addScrollListener(),c.Initializers.addClosemeListener()},c.init=function(e,t){Object(n.onLoad)(e(window),function(){!0!==e.triggersInitialized&&(c.Initializers.addSimpleListeners(),c.Initializers.addGlobalListeners(),e.triggersInitialized=!0)}),t&&(t.Triggers=c,t.IHearYou=c.Initializers.addGlobalListeners)}},29:function(e,t,i){e.exports=i("./js/entries/plugins/foundation.util.triggers.js")},jquery:function(e,t){e.exports=n}})});
;
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(require("./foundation.core"),require("./foundation.util.keyboard"),require("./foundation.util.mediaQuery"),require("./foundation.util.motion"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.keyboard","./foundation.util.mediaQuery","./foundation.util.motion","jquery"],e):"object"==typeof exports?exports["foundation.offcanvas"]=e(require("./foundation.core"),require("./foundation.util.keyboard"),require("./foundation.util.mediaQuery"),require("./foundation.util.motion"),require("jquery")):(t.__FOUNDATION_EXTERNAL__=t.__FOUNDATION_EXTERNAL__||{},t.__FOUNDATION_EXTERNAL__["foundation.offcanvas"]=e(t.__FOUNDATION_EXTERNAL__["foundation.core"],t.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"],t.__FOUNDATION_EXTERNAL__["foundation.util.mediaQuery"],t.__FOUNDATION_EXTERNAL__["foundation.util.motion"],t.jQuery))}(window,function(n,i,o,s,r){return function(n){var i={};function o(t){if(i[t])return i[t].exports;var e=i[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,o),e.l=!0,e.exports}return o.m=n,o.c=i,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)o.d(n,i,function(t){return e[t]}.bind(null,i));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="",o(o.s=9)}({"./foundation.core":function(t,e){t.exports=n},"./foundation.util.keyboard":function(t,e){t.exports=i},"./foundation.util.mediaQuery":function(t,e){t.exports=o},"./foundation.util.motion":function(t,e){t.exports=s},"./js/entries/plugins/foundation.offcanvas.js":function(t,e,n){"use strict";n.r(e);var i=n("./foundation.core");n.d(e,"Foundation",function(){return i.Foundation});var o=n("./js/foundation.offcanvas.js");n.d(e,"OffCanvas",function(){return o.OffCanvas}),i.Foundation.plugin(o.OffCanvas,"OffCanvas")},"./js/foundation.offcanvas.js":function(t,e,n){"use strict";n.r(e),n.d(e,"OffCanvas",function(){return g});var i=n("jquery"),s=n.n(i),r=n("./foundation.core"),a=n("./foundation.util.keyboard"),l=n("./foundation.util.mediaQuery"),c=n("./js/foundation.util.triggers.js");function o(t){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function f(t,e){for(var n=0;n<e.length;n++){var i=e[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(t,i.key,i)}}function u(t,e){return!e||"object"!==o(e)&&"function"!=typeof e?function(t){if(void 0!==t)return t;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(t):e}function d(t){return(d=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function h(t,e){return(h=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}var g=function(t){function i(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,i),u(this,d(i).apply(this,arguments))}var e,n,o;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&h(t,e)}(i,r["Plugin"]),e=i,(n=[{key:"_setup",value:function(t,e){var n=this;this.className="OffCanvas",this.$element=t,this.options=s.a.extend({},i.defaults,this.$element.data(),e),this.contentClasses={base:[],reveal:[]},this.$lastTrigger=s()(),this.$triggers=s()(),this.position="left",this.$content=s()(),this.nested=!!this.options.nested,s()(["push","overlap"]).each(function(t,e){n.contentClasses.base.push("has-transition-"+e)}),s()(["left","right","top","bottom"]).each(function(t,e){n.contentClasses.base.push("has-position-"+e),n.contentClasses.reveal.push("has-reveal-"+e)}),c.Triggers.init(s.a),l.MediaQuery._init(),this._init(),this._events(),a.Keyboard.register("OffCanvas",{ESCAPE:"close"})}},{key:"_init",value:function(){var t=this.$element.attr("id");if(this.$element.attr("aria-hidden","true"),this.options.contentId?this.$content=s()("#"+this.options.contentId):this.$element.siblings("[data-off-canvas-content]").length?this.$content=this.$element.siblings("[data-off-canvas-content]").first():this.$content=this.$element.closest("[data-off-canvas-content]").first(),this.options.contentId?this.options.contentId&&null===this.options.nested&&console.warn("Remember to use the nested option if using the content ID option!"):this.nested=0===this.$element.siblings("[data-off-canvas-content]").length,!0===this.nested&&(this.options.transition="overlap",this.$element.removeClass("is-transition-push")),this.$element.addClass("is-transition-".concat(this.options.transition," is-closed")),this.$triggers=s()(document).find('[data-open="'+t+'"], [data-close="'+t+'"], [data-toggle="'+t+'"]').attr("aria-expanded","false").attr("aria-controls",t),this.position=this.$element.is(".position-left, .position-top, .position-right, .position-bottom")?this.$element.attr("class").match(/position\-(left|top|right|bottom)/)[1]:this.position,!0===this.options.contentOverlay){var e=document.createElement("div"),n="fixed"===s()(this.$element).css("position")?"is-overlay-fixed":"is-overlay-absolute";e.setAttribute("class","js-off-canvas-overlay "+n),this.$overlay=s()(e),"is-overlay-fixed"===n?s()(this.$overlay).insertAfter(this.$element):this.$content.append(this.$overlay)}var i=new RegExp(Object(r.RegExpEscape)(this.options.revealClass)+"([^\\s]+)","g").exec(this.$element[0].className);i&&(this.options.isRevealed=!0,this.options.revealOn=this.options.revealOn||i[1]),!0===this.options.isRevealed&&this.options.revealOn&&(this.$element.first().addClass("".concat(this.options.revealClass).concat(this.options.revealOn)),this._setMQChecker()),this.options.transitionTime&&this.$element.css("transition-duration",this.options.transitionTime),this._removeContentClasses()}},{key:"_events",value:function(){(this.$element.off(".zf.trigger .zf.offcanvas").on({"open.zf.trigger":this.open.bind(this),"close.zf.trigger":this.close.bind(this),"toggle.zf.trigger":this.toggle.bind(this),"keydown.zf.offcanvas":this._handleKeyboard.bind(this)}),!0===this.options.closeOnClick)&&(this.options.contentOverlay?this.$overlay:this.$content).on({"click.zf.offcanvas":this.close.bind(this)})}},{key:"_setMQChecker",value:function(){var t=this;this.onLoadListener=Object(r.onLoad)(s()(window),function(){l.MediaQuery.atLeast(t.options.revealOn)&&t.reveal(!0)}),s()(window).on("changed.zf.mediaquery",function(){l.MediaQuery.atLeast(t.options.revealOn)?t.reveal(!0):t.reveal(!1)})}},{key:"_removeContentClasses",value:function(t){"boolean"!=typeof t?this.$content.removeClass(this.contentClasses.base.join(" ")):!1===t&&this.$content.removeClass("has-reveal-".concat(this.position))}},{key:"_addContentClasses",value:function(t){this._removeContentClasses(t),"boolean"!=typeof t?this.$content.addClass("has-transition-".concat(this.options.transition," has-position-").concat(this.position)):!0===t&&this.$content.addClass("has-reveal-".concat(this.position))}},{key:"reveal",value:function(t){t?(this.close(),this.isRevealed=!0,this.$element.attr("aria-hidden","false"),this.$element.off("open.zf.trigger toggle.zf.trigger"),this.$element.removeClass("is-closed")):(this.isRevealed=!1,this.$element.attr("aria-hidden","true"),this.$element.off("open.zf.trigger toggle.zf.trigger").on({"open.zf.trigger":this.open.bind(this),"toggle.zf.trigger":this.toggle.bind(this)}),this.$element.addClass("is-closed")),this._addContentClasses(t)}},{key:"_stopScrolling",value:function(t){return!1}},{key:"_recordScrollable",value:function(t){var e=this;e.scrollHeight!==e.clientHeight&&(0===e.scrollTop&&(e.scrollTop=1),e.scrollTop===e.scrollHeight-e.clientHeight&&(e.scrollTop=e.scrollHeight-e.clientHeight-1)),e.allowUp=0<e.scrollTop,e.allowDown=e.scrollTop<e.scrollHeight-e.clientHeight,e.lastY=t.originalEvent.pageY}},{key:"_stopScrollPropagation",value:function(t){var e=t.pageY<this.lastY,n=!e;this.lastY=t.pageY,e&&this.allowUp||n&&this.allowDown?t.stopPropagation():t.preventDefault()}},{key:"open",value:function(t,e){if(!this.$element.hasClass("is-open")&&!this.isRevealed){var n=this;e&&(this.$lastTrigger=e),"top"===this.options.forceTo?window.scrollTo(0,0):"bottom"===this.options.forceTo&&window.scrollTo(0,document.body.scrollHeight),this.options.transitionTime&&"overlap"!==this.options.transition?this.$element.siblings("[data-off-canvas-content]").css("transition-duration",this.options.transitionTime):this.$element.siblings("[data-off-canvas-content]").css("transition-duration",""),this.$element.addClass("is-open").removeClass("is-closed"),this.$triggers.attr("aria-expanded","true"),this.$element.attr("aria-hidden","false"),this.$content.addClass("is-open-"+this.position),!1===this.options.contentScroll&&(s()("body").addClass("is-off-canvas-open").on("touchmove",this._stopScrolling),this.$element.on("touchstart",this._recordScrollable),this.$element.on("touchmove",this._stopScrollPropagation)),!0===this.options.contentOverlay&&this.$overlay.addClass("is-visible"),!0===this.options.closeOnClick&&!0===this.options.contentOverlay&&this.$overlay.addClass("is-closable"),!0===this.options.autoFocus&&this.$element.one(Object(r.transitionend)(this.$element),function(){if(n.$element.hasClass("is-open")){var t=n.$element.find("[data-autofocus]");t.length?t.eq(0).focus():n.$element.find("a, button").eq(0).focus()}}),!0===this.options.trapFocus&&(this.$content.attr("tabindex","-1"),a.Keyboard.trapFocus(this.$element)),this._addContentClasses(),this.$element.trigger("opened.zf.offcanvas")}}},{key:"close",value:function(t){if(this.$element.hasClass("is-open")&&!this.isRevealed){var e=this;this.$element.removeClass("is-open"),this.$element.attr("aria-hidden","true").trigger("closed.zf.offcanvas"),this.$content.removeClass("is-open-left is-open-top is-open-right is-open-bottom"),!1===this.options.contentScroll&&(s()("body").removeClass("is-off-canvas-open").off("touchmove",this._stopScrolling),this.$element.off("touchstart",this._recordScrollable),this.$element.off("touchmove",this._stopScrollPropagation)),!0===this.options.contentOverlay&&this.$overlay.removeClass("is-visible"),!0===this.options.closeOnClick&&!0===this.options.contentOverlay&&this.$overlay.removeClass("is-closable"),this.$triggers.attr("aria-expanded","false"),!0===this.options.trapFocus&&(this.$content.removeAttr("tabindex"),a.Keyboard.releaseFocus(this.$element)),this.$element.one(Object(r.transitionend)(this.$element),function(t){e.$element.addClass("is-closed"),e._removeContentClasses()})}}},{key:"toggle",value:function(t,e){this.$element.hasClass("is-open")?this.close(t,e):this.open(t,e)}},{key:"_handleKeyboard",value:function(t){var e=this;a.Keyboard.handleKey(t,"OffCanvas",{close:function(){return e.close(),e.$lastTrigger.focus(),!0},handled:function(){t.stopPropagation(),t.preventDefault()}})}},{key:"_destroy",value:function(){this.close(),this.$element.off(".zf.trigger .zf.offcanvas"),this.$overlay.off(".zf.offcanvas"),this.onLoadListener&&s()(window).off(this.onLoadListener)}}])&&f(e.prototype,n),o&&f(e,o),i}();g.defaults={closeOnClick:!0,contentOverlay:!0,contentId:null,nested:null,contentScroll:!0,transitionTime:null,transition:"push",forceTo:null,isRevealed:!1,revealOn:null,autoFocus:!0,revealClass:"reveal-for-",trapFocus:!1}},"./js/foundation.util.triggers.js":function(t,e,n){"use strict";n.r(e),n.d(e,"Triggers",function(){return f});var i=n("jquery"),s=n.n(i),o=n("./foundation.core"),r=n("./foundation.util.motion");function a(t){return(a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var l=function(){for(var t=["WebKit","Moz","O","Ms",""],e=0;e<t.length;e++)if("".concat(t[e],"MutationObserver")in window)return window["".concat(t[e],"MutationObserver")];return!1}(),c=function(e,n){e.data(n).split(" ").forEach(function(t){s()("#".concat(t))["close"===n?"trigger":"triggerHandler"]("".concat(n,".zf.trigger"),[e])})},f={Listeners:{Basic:{},Global:{}},Initializers:{}};function u(e,t,n){var i,o=Array.prototype.slice.call(arguments,3);s()(window).off(t).on(t,function(t){i&&clearTimeout(i),i=setTimeout(function(){n.apply(null,o)},e||10)})}f.Listeners.Basic={openListener:function(){c(s()(this),"open")},closeListener:function(){s()(this).data("close")?c(s()(this),"close"):s()(this).trigger("close.zf.trigger")},toggleListener:function(){s()(this).data("toggle")?c(s()(this),"toggle"):s()(this).trigger("toggle.zf.trigger")},closeableListener:function(t){t.stopPropagation();var e=s()(this).data("closable");""!==e?r.Motion.animateOut(s()(this),e,function(){s()(this).trigger("closed.zf")}):s()(this).fadeOut().trigger("closed.zf")},toggleFocusListener:function(){var t=s()(this).data("toggle-focus");s()("#".concat(t)).triggerHandler("toggle.zf.trigger",[s()(this)])}},f.Initializers.addOpenListener=function(t){t.off("click.zf.trigger",f.Listeners.Basic.openListener),t.on("click.zf.trigger","[data-open]",f.Listeners.Basic.openListener)},f.Initializers.addCloseListener=function(t){t.off("click.zf.trigger",f.Listeners.Basic.closeListener),t.on("click.zf.trigger","[data-close]",f.Listeners.Basic.closeListener)},f.Initializers.addToggleListener=function(t){t.off("click.zf.trigger",f.Listeners.Basic.toggleListener),t.on("click.zf.trigger","[data-toggle]",f.Listeners.Basic.toggleListener)},f.Initializers.addCloseableListener=function(t){t.off("close.zf.trigger",f.Listeners.Basic.closeableListener),t.on("close.zf.trigger","[data-closeable], [data-closable]",f.Listeners.Basic.closeableListener)},f.Initializers.addToggleFocusListener=function(t){t.off("focus.zf.trigger blur.zf.trigger",f.Listeners.Basic.toggleFocusListener),t.on("focus.zf.trigger blur.zf.trigger","[data-toggle-focus]",f.Listeners.Basic.toggleFocusListener)},f.Listeners.Global={resizeListener:function(t){l||t.each(function(){s()(this).triggerHandler("resizeme.zf.trigger")}),t.attr("data-events","resize")},scrollListener:function(t){l||t.each(function(){s()(this).triggerHandler("scrollme.zf.trigger")}),t.attr("data-events","scroll")},closeMeListener:function(t,e){var n=t.namespace.split(".")[0];s()("[data-".concat(n,"]")).not('[data-yeti-box="'.concat(e,'"]')).each(function(){var t=s()(this);t.triggerHandler("close.zf.trigger",[t])})}},f.Initializers.addClosemeListener=function(t){var e=s()("[data-yeti-box]"),n=["dropdown","tooltip","reveal"];if(t&&("string"==typeof t?n.push(t):"object"===a(t)&&"string"==typeof t[0]?n=n.concat(t):console.error("Plugin names must be strings")),e.length){var i=n.map(function(t){return"closeme.zf.".concat(t)}).join(" ");s()(window).off(i).on(i,f.Listeners.Global.closeMeListener)}},f.Initializers.addResizeListener=function(t){var e=s()("[data-resize]");e.length&&u(t,"resize.zf.trigger",f.Listeners.Global.resizeListener,e)},f.Initializers.addScrollListener=function(t){var e=s()("[data-scroll]");e.length&&u(t,"scroll.zf.trigger",f.Listeners.Global.scrollListener,e)},f.Initializers.addMutationEventsListener=function(t){if(!l)return!1;var e=t.find("[data-resize], [data-scroll], [data-mutate]"),n=function(t){var e=s()(t[0].target);switch(t[0].type){case"attributes":"scroll"===e.attr("data-events")&&"data-events"===t[0].attributeName&&e.triggerHandler("scrollme.zf.trigger",[e,window.pageYOffset]),"resize"===e.attr("data-events")&&"data-events"===t[0].attributeName&&e.triggerHandler("resizeme.zf.trigger",[e]),"style"===t[0].attributeName&&(e.closest("[data-mutate]").attr("data-events","mutate"),e.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[e.closest("[data-mutate]")]));break;case"childList":e.closest("[data-mutate]").attr("data-events","mutate"),e.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[e.closest("[data-mutate]")]);break;default:return!1}};if(e.length)for(var i=0;i<=e.length-1;i++){new l(n).observe(e[i],{attributes:!0,childList:!0,characterData:!1,subtree:!0,attributeFilter:["data-events","style"]})}},f.Initializers.addSimpleListeners=function(){var t=s()(document);f.Initializers.addOpenListener(t),f.Initializers.addCloseListener(t),f.Initializers.addToggleListener(t),f.Initializers.addCloseableListener(t),f.Initializers.addToggleFocusListener(t)},f.Initializers.addGlobalListeners=function(){var t=s()(document);f.Initializers.addMutationEventsListener(t),f.Initializers.addResizeListener(),f.Initializers.addScrollListener(),f.Initializers.addClosemeListener()},f.init=function(t,e){Object(o.onLoad)(t(window),function(){!0!==t.triggersInitialized&&(f.Initializers.addSimpleListeners(),f.Initializers.addGlobalListeners(),t.triggersInitialized=!0)}),e&&(e.Triggers=f,e.IHearYou=f.Initializers.addGlobalListeners)}},9:function(t,e,n){t.exports=n("./js/entries/plugins/foundation.offcanvas.js")},jquery:function(t,e){t.exports=r}})});
;
!function(t,e){"object"==typeof exports&&"object"==typeof module?module.exports=e(require("./foundation.util.keyboard"),require("./foundation.core"),require("jquery"),require("./foundation.util.box"),require("./foundation.util.motion"),require("./foundation.util.touch")):"function"==typeof define&&define.amd?define(["./foundation.util.keyboard","./foundation.core","jquery","./foundation.util.box","./foundation.util.motion","./foundation.util.touch"],e):"object"==typeof exports?exports["foundation.dropdown"]=e(require("./foundation.util.keyboard"),require("./foundation.core"),require("jquery"),require("./foundation.util.box"),require("./foundation.util.motion"),require("./foundation.util.touch")):(t.__FOUNDATION_EXTERNAL__=t.__FOUNDATION_EXTERNAL__||{},t.__FOUNDATION_EXTERNAL__["foundation.dropdown"]=e(t.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"],t.__FOUNDATION_EXTERNAL__["foundation.core"],t.jQuery,t.__FOUNDATION_EXTERNAL__["foundation.util.box"],t.__FOUNDATION_EXTERNAL__["foundation.util.motion"],t.__FOUNDATION_EXTERNAL__["foundation.util.touch"]))}(window,function(n,o,i,r,s,a){return function(n){var o={};function i(t){if(o[t])return o[t].exports;var e=o[t]={i:t,l:!1,exports:{}};return n[t].call(e.exports,e,e.exports,i),e.l=!0,e.exports}return i.m=n,i.c=o,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(e,t){if(1&t&&(e=i(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)i.d(n,o,function(t){return e[t]}.bind(null,o));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=4)}({"./foundation.core":function(t,e){t.exports=o},"./foundation.util.box":function(t,e){t.exports=r},"./foundation.util.keyboard":function(t,e){t.exports=n},"./foundation.util.motion":function(t,e){t.exports=s},"./foundation.util.touch":function(t,e){t.exports=a},"./js/entries/plugins/foundation.dropdown.js":function(t,e,n){"use strict";n.r(e);var o=n("./foundation.core");n.d(e,"Foundation",function(){return o.Foundation});var i=n("./js/foundation.dropdown.js");n.d(e,"Dropdown",function(){return i.Dropdown}),o.Foundation.plugin(i.Dropdown,"Dropdown")},"./js/foundation.dropdown.js":function(t,e,n){"use strict";n.r(e),n.d(e,"Dropdown",function(){return g});var o=n("jquery"),r=n.n(o),s=n("./foundation.util.keyboard"),a=n("./foundation.core"),l=n("./js/foundation.positionable.js"),u=n("./js/foundation.util.triggers.js");n("./foundation.util.touch");function i(t){return(i="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function c(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function f(t,e){return!e||"object"!==i(e)&&"function"!=typeof e?function(t){if(void 0!==t)return t;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(t):e}function d(t,e,n){return(d="undefined"!=typeof Reflect&&Reflect.get?Reflect.get:function(t,e,n){var o=function(t,e){for(;!Object.prototype.hasOwnProperty.call(t,e)&&null!==(t=h(t)););return t}(t,e);if(o){var i=Object.getOwnPropertyDescriptor(o,e);return i.get?i.get.call(n):i.value}})(t,e,n||t)}function h(t){return(h=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function p(t,e){return(p=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}var g=function(t){function n(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,n),f(this,h(n).apply(this,arguments))}var e,o,i;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&p(t,e)}(n,l["Positionable"]),e=n,(o=[{key:"_setup",value:function(t,e){this.$element=t,this.options=r.a.extend({},n.defaults,this.$element.data(),e),this.className="Dropdown",u.Triggers.init(r.a),this._init(),s.Keyboard.register("Dropdown",{ENTER:"toggle",SPACE:"toggle",ESCAPE:"close"})}},{key:"_init",value:function(){var t=this.$element.attr("id");this.$anchors=r()('[data-toggle="'.concat(t,'"]')).length?r()('[data-toggle="'.concat(t,'"]')):r()('[data-open="'.concat(t,'"]')),this.$anchors.attr({"aria-controls":t,"data-is-focus":!1,"data-yeti-box":t,"aria-haspopup":!0,"aria-expanded":!1}),this._setCurrentAnchor(this.$anchors.first()),this.options.parentClass?this.$parent=this.$element.parents("."+this.options.parentClass):this.$parent=null,void 0===this.$element.attr("aria-labelledby")&&(void 0===this.$currentAnchor.attr("id")&&this.$currentAnchor.attr("id",Object(a.GetYoDigits)(6,"dd-anchor")),this.$element.attr("aria-labelledby",this.$currentAnchor.attr("id"))),this.$element.attr({"aria-hidden":"true","data-yeti-box":t,"data-resize":t}),d(h(n.prototype),"_init",this).call(this),this._events()}},{key:"_getDefaultPosition",value:function(){var t=this.$element[0].className.match(/(top|left|right|bottom)/g);return t?t[0]:"bottom"}},{key:"_getDefaultAlignment",value:function(){var t=/float-(\S+)/.exec(this.$currentAnchor.attr("class"));return t?t[1]:d(h(n.prototype),"_getDefaultAlignment",this).call(this)}},{key:"_setPosition",value:function(){this.$element.removeClass("has-position-".concat(this.position," has-alignment-").concat(this.alignment)),d(h(n.prototype),"_setPosition",this).call(this,this.$currentAnchor,this.$element,this.$parent),this.$element.addClass("has-position-".concat(this.position," has-alignment-").concat(this.alignment))}},{key:"_setCurrentAnchor",value:function(t){this.$currentAnchor=r()(t)}},{key:"_events",value:function(){var n=this;this.$element.on({"open.zf.trigger":this.open.bind(this),"close.zf.trigger":this.close.bind(this),"toggle.zf.trigger":this.toggle.bind(this),"resizeme.zf.trigger":this._setPosition.bind(this)}),this.$anchors.off("click.zf.trigger").on("click.zf.trigger",function(){n._setCurrentAnchor(this)}),this.options.hover&&(this.$anchors.off("mouseenter.zf.dropdown mouseleave.zf.dropdown").on("mouseenter.zf.dropdown",function(){n._setCurrentAnchor(this);var t=r()("body").data();void 0!==t.whatinput&&"mouse"!==t.whatinput||(clearTimeout(n.timeout),n.timeout=setTimeout(function(){n.open(),n.$anchors.data("hover",!0)},n.options.hoverDelay))}).on("mouseleave.zf.dropdown",Object(a.ignoreMousedisappear)(function(){clearTimeout(n.timeout),n.timeout=setTimeout(function(){n.close(),n.$anchors.data("hover",!1)},n.options.hoverDelay)})),this.options.hoverPane&&this.$element.off("mouseenter.zf.dropdown mouseleave.zf.dropdown").on("mouseenter.zf.dropdown",function(){clearTimeout(n.timeout)}).on("mouseleave.zf.dropdown",Object(a.ignoreMousedisappear)(function(){clearTimeout(n.timeout),n.timeout=setTimeout(function(){n.close(),n.$anchors.data("hover",!1)},n.options.hoverDelay)}))),this.$anchors.add(this.$element).on("keydown.zf.dropdown",function(t){var e=r()(this);s.Keyboard.findFocusable(n.$element);s.Keyboard.handleKey(t,"Dropdown",{open:function(){e.is(n.$anchors)&&!e.is("input, textarea")&&(n.open(),n.$element.attr("tabindex",-1).focus(),t.preventDefault())},close:function(){n.close(),n.$anchors.focus()}})})}},{key:"_addBodyHandler",value:function(){var e=r()(document.body).not(this.$element),n=this;e.off("click.zf.dropdown").on("click.zf.dropdown",function(t){n.$anchors.is(t.target)||n.$anchors.find(t.target).length||n.$element.is(t.target)||n.$element.find(t.target).length||(n.close(),e.off("click.zf.dropdown"))})}},{key:"open",value:function(){if(this.$element.trigger("closeme.zf.dropdown",this.$element.attr("id")),this.$anchors.addClass("hover").attr({"aria-expanded":!0}),this.$element.addClass("is-opening"),this._setPosition(),this.$element.removeClass("is-opening").addClass("is-open").attr({"aria-hidden":!1}),this.options.autoFocus){var t=s.Keyboard.findFocusable(this.$element);t.length&&t.eq(0).focus()}this.options.closeOnClick&&this._addBodyHandler(),this.options.trapFocus&&s.Keyboard.trapFocus(this.$element),this.$element.trigger("show.zf.dropdown",[this.$element])}},{key:"close",value:function(){if(!this.$element.hasClass("is-open"))return!1;this.$element.removeClass("is-open").attr({"aria-hidden":!0}),this.$anchors.removeClass("hover").attr("aria-expanded",!1),this.$element.trigger("hide.zf.dropdown",[this.$element]),this.options.trapFocus&&s.Keyboard.releaseFocus(this.$element)}},{key:"toggle",value:function(){if(this.$element.hasClass("is-open")){if(this.$anchors.data("hover"))return;this.close()}else this.open()}},{key:"_destroy",value:function(){this.$element.off(".zf.trigger").hide(),this.$anchors.off(".zf.dropdown"),r()(document.body).off("click.zf.dropdown")}}])&&c(e.prototype,o),i&&c(e,i),n}();g.defaults={parentClass:null,hoverDelay:250,hover:!1,hoverPane:!1,vOffset:0,hOffset:0,position:"auto",alignment:"auto",allowOverlap:!1,allowBottomOverlap:!0,trapFocus:!1,autoFocus:!1,closeOnClick:!1}},"./js/foundation.positionable.js":function(t,e,n){"use strict";n.r(e),n.d(e,"Positionable",function(){return g});var s=n("./foundation.util.box"),r=n("./foundation.core");function o(t){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function a(t,e){for(var n=0;n<e.length;n++){var o=e[n];o.enumerable=o.enumerable||!1,o.configurable=!0,"value"in o&&(o.writable=!0),Object.defineProperty(t,o.key,o)}}function l(t,e){return!e||"object"!==o(e)&&"function"!=typeof e?function(t){if(void 0!==t)return t;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(t):e}function u(t){return(u=Object.setPrototypeOf?Object.getPrototypeOf:function(t){return t.__proto__||Object.getPrototypeOf(t)})(t)}function c(t,e){return(c=Object.setPrototypeOf||function(t,e){return t.__proto__=e,t})(t,e)}var f=["left","right","top","bottom"],i=["top","bottom","center"],d=["left","right","center"],h={left:i,right:i,top:d,bottom:d};function p(t,e){var n=e.indexOf(t);return n===e.length-1?e[0]:e[n+1]}var g=function(t){function e(){return function(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}(this,e),l(this,u(e).apply(this,arguments))}var n,o,i;return function(t,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,writable:!0,configurable:!0}}),e&&c(t,e)}(e,r["Plugin"]),n=e,(o=[{key:"_init",value:function(){this.triedPositions={},this.position="auto"===this.options.position?this._getDefaultPosition():this.options.position,this.alignment="auto"===this.options.alignment?this._getDefaultAlignment():this.options.alignment,this.originalPosition=this.position,this.originalAlignment=this.alignment}},{key:"_getDefaultPosition",value:function(){return"bottom"}},{key:"_getDefaultAlignment",value:function(){switch(this.position){case"bottom":case"top":return Object(r.rtl)()?"right":"left";case"left":case"right":return"bottom"}}},{key:"_reposition",value:function(){this._alignmentsExhausted(this.position)?(this.position=p(this.position,f),this.alignment=h[this.position][0]):this._realign()}},{key:"_realign",value:function(){this._addTriedPosition(this.position,this.alignment),this.alignment=p(this.alignment,h[this.position])}},{key:"_addTriedPosition",value:function(t,e){this.triedPositions[t]=this.triedPositions[t]||[],this.triedPositions[t].push(e)}},{key:"_positionsExhausted",value:function(){for(var t=!0,e=0;e<f.length;e++)t=t&&this._alignmentsExhausted(f[e]);return t}},{key:"_alignmentsExhausted",value:function(t){return this.triedPositions[t]&&this.triedPositions[t].length==h[t].length}},{key:"_getVOffset",value:function(){return this.options.vOffset}},{key:"_getHOffset",value:function(){return this.options.hOffset}},{key:"_setPosition",value:function(t,e,n){if("false"===t.attr("aria-expanded"))return!1;s.Box.GetDimensions(e),s.Box.GetDimensions(t);if(this.options.allowOverlap||(this.position=this.originalPosition,this.alignment=this.originalAlignment),e.offset(s.Box.GetExplicitOffsets(e,t,this.position,this.alignment,this._getVOffset(),this._getHOffset())),!this.options.allowOverlap){for(var o=1e8,i={position:this.position,alignment:this.alignment};!this._positionsExhausted();){var r=s.Box.OverlapArea(e,n,!1,!1,this.options.allowBottomOverlap);if(0===r)return;r<o&&(o=r,i={position:this.position,alignment:this.alignment}),this._reposition(),e.offset(s.Box.GetExplicitOffsets(e,t,this.position,this.alignment,this._getVOffset(),this._getHOffset()))}this.position=i.position,this.alignment=i.alignment,e.offset(s.Box.GetExplicitOffsets(e,t,this.position,this.alignment,this._getVOffset(),this._getHOffset()))}}}])&&a(n.prototype,o),i&&a(n,i),e}();g.defaults={position:"auto",alignment:"auto",allowOverlap:!1,allowBottomOverlap:!0,vOffset:0,hOffset:0}},"./js/foundation.util.triggers.js":function(t,e,n){"use strict";n.r(e),n.d(e,"Triggers",function(){return c});var o=n("jquery"),r=n.n(o),i=n("./foundation.core"),s=n("./foundation.util.motion");function a(t){return(a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}var l=function(){for(var t=["WebKit","Moz","O","Ms",""],e=0;e<t.length;e++)if("".concat(t[e],"MutationObserver")in window)return window["".concat(t[e],"MutationObserver")];return!1}(),u=function(e,n){e.data(n).split(" ").forEach(function(t){r()("#".concat(t))["close"===n?"trigger":"triggerHandler"]("".concat(n,".zf.trigger"),[e])})},c={Listeners:{Basic:{},Global:{}},Initializers:{}};function f(e,t,n){var o,i=Array.prototype.slice.call(arguments,3);r()(window).off(t).on(t,function(t){o&&clearTimeout(o),o=setTimeout(function(){n.apply(null,i)},e||10)})}c.Listeners.Basic={openListener:function(){u(r()(this),"open")},closeListener:function(){r()(this).data("close")?u(r()(this),"close"):r()(this).trigger("close.zf.trigger")},toggleListener:function(){r()(this).data("toggle")?u(r()(this),"toggle"):r()(this).trigger("toggle.zf.trigger")},closeableListener:function(t){t.stopPropagation();var e=r()(this).data("closable");""!==e?s.Motion.animateOut(r()(this),e,function(){r()(this).trigger("closed.zf")}):r()(this).fadeOut().trigger("closed.zf")},toggleFocusListener:function(){var t=r()(this).data("toggle-focus");r()("#".concat(t)).triggerHandler("toggle.zf.trigger",[r()(this)])}},c.Initializers.addOpenListener=function(t){t.off("click.zf.trigger",c.Listeners.Basic.openListener),t.on("click.zf.trigger","[data-open]",c.Listeners.Basic.openListener)},c.Initializers.addCloseListener=function(t){t.off("click.zf.trigger",c.Listeners.Basic.closeListener),t.on("click.zf.trigger","[data-close]",c.Listeners.Basic.closeListener)},c.Initializers.addToggleListener=function(t){t.off("click.zf.trigger",c.Listeners.Basic.toggleListener),t.on("click.zf.trigger","[data-toggle]",c.Listeners.Basic.toggleListener)},c.Initializers.addCloseableListener=function(t){t.off("close.zf.trigger",c.Listeners.Basic.closeableListener),t.on("close.zf.trigger","[data-closeable], [data-closable]",c.Listeners.Basic.closeableListener)},c.Initializers.addToggleFocusListener=function(t){t.off("focus.zf.trigger blur.zf.trigger",c.Listeners.Basic.toggleFocusListener),t.on("focus.zf.trigger blur.zf.trigger","[data-toggle-focus]",c.Listeners.Basic.toggleFocusListener)},c.Listeners.Global={resizeListener:function(t){l||t.each(function(){r()(this).triggerHandler("resizeme.zf.trigger")}),t.attr("data-events","resize")},scrollListener:function(t){l||t.each(function(){r()(this).triggerHandler("scrollme.zf.trigger")}),t.attr("data-events","scroll")},closeMeListener:function(t,e){var n=t.namespace.split(".")[0];r()("[data-".concat(n,"]")).not('[data-yeti-box="'.concat(e,'"]')).each(function(){var t=r()(this);t.triggerHandler("close.zf.trigger",[t])})}},c.Initializers.addClosemeListener=function(t){var e=r()("[data-yeti-box]"),n=["dropdown","tooltip","reveal"];if(t&&("string"==typeof t?n.push(t):"object"===a(t)&&"string"==typeof t[0]?n=n.concat(t):console.error("Plugin names must be strings")),e.length){var o=n.map(function(t){return"closeme.zf.".concat(t)}).join(" ");r()(window).off(o).on(o,c.Listeners.Global.closeMeListener)}},c.Initializers.addResizeListener=function(t){var e=r()("[data-resize]");e.length&&f(t,"resize.zf.trigger",c.Listeners.Global.resizeListener,e)},c.Initializers.addScrollListener=function(t){var e=r()("[data-scroll]");e.length&&f(t,"scroll.zf.trigger",c.Listeners.Global.scrollListener,e)},c.Initializers.addMutationEventsListener=function(t){if(!l)return!1;var e=t.find("[data-resize], [data-scroll], [data-mutate]"),n=function(t){var e=r()(t[0].target);switch(t[0].type){case"attributes":"scroll"===e.attr("data-events")&&"data-events"===t[0].attributeName&&e.triggerHandler("scrollme.zf.trigger",[e,window.pageYOffset]),"resize"===e.attr("data-events")&&"data-events"===t[0].attributeName&&e.triggerHandler("resizeme.zf.trigger",[e]),"style"===t[0].attributeName&&(e.closest("[data-mutate]").attr("data-events","mutate"),e.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[e.closest("[data-mutate]")]));break;case"childList":e.closest("[data-mutate]").attr("data-events","mutate"),e.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[e.closest("[data-mutate]")]);break;default:return!1}};if(e.length)for(var o=0;o<=e.length-1;o++){new l(n).observe(e[o],{attributes:!0,childList:!0,characterData:!1,subtree:!0,attributeFilter:["data-events","style"]})}},c.Initializers.addSimpleListeners=function(){var t=r()(document);c.Initializers.addOpenListener(t),c.Initializers.addCloseListener(t),c.Initializers.addToggleListener(t),c.Initializers.addCloseableListener(t),c.Initializers.addToggleFocusListener(t)},c.Initializers.addGlobalListeners=function(){var t=r()(document);c.Initializers.addMutationEventsListener(t),c.Initializers.addResizeListener(),c.Initializers.addScrollListener(),c.Initializers.addClosemeListener()},c.init=function(t,e){Object(i.onLoad)(t(window),function(){!0!==t.triggersInitialized&&(c.Initializers.addSimpleListeners(),c.Initializers.addGlobalListeners(),t.triggersInitialized=!0)}),e&&(e.Triggers=c,e.IHearYou=c.Initializers.addGlobalListeners)}},4:function(t,e,n){t.exports=n("./js/entries/plugins/foundation.dropdown.js")},jquery:function(t,e){t.exports=i}})});
;
!function(n,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","jquery"],t):"object"==typeof exports?exports["foundation.util.motion"]=t(require("./foundation.core"),require("jquery")):(n.__FOUNDATION_EXTERNAL__=n.__FOUNDATION_EXTERNAL__||{},n.__FOUNDATION_EXTERNAL__["foundation.util.motion"]=t(n.__FOUNDATION_EXTERNAL__["foundation.core"],n.jQuery))}(window,function(e,o){return function(e){var o={};function i(n){if(o[n])return o[n].exports;var t=o[n]={i:n,l:!1,exports:{}};return e[n].call(t.exports,t,t.exports,i),t.l=!0,t.exports}return i.m=e,i.c=o,i.d=function(n,t,e){i.o(n,t)||Object.defineProperty(n,t,{enumerable:!0,get:e})},i.r=function(n){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(n,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(n,"__esModule",{value:!0})},i.t=function(t,n){if(1&n&&(t=i(t)),8&n)return t;if(4&n&&"object"==typeof t&&t&&t.__esModule)return t;var e=Object.create(null);if(i.r(e),Object.defineProperty(e,"default",{enumerable:!0,value:t}),2&n&&"string"!=typeof t)for(var o in t)i.d(e,o,function(n){return t[n]}.bind(null,o));return e},i.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return i.d(t,"a",t),t},i.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},i.p="",i(i.s=25)}({"./foundation.core":function(n,t){n.exports=e},"./js/entries/plugins/foundation.util.motion.js":function(n,t,e){"use strict";e.r(t);var o=e("./foundation.core");e.d(t,"Foundation",function(){return o.Foundation});var i=e("./js/foundation.util.motion.js");e.d(t,"Motion",function(){return i.Motion}),e.d(t,"Move",function(){return i.Move}),o.Foundation.Motion=i.Motion,o.Foundation.Move=i.Move},"./js/foundation.util.motion.js":function(n,t,e){"use strict";e.r(t),e.d(t,"Move",function(){return r}),e.d(t,"Motion",function(){return i});var o=e("jquery"),a=e.n(o),f=e("./foundation.core"),c=["mui-enter","mui-leave"],d=["mui-enter-active","mui-leave-active"],i={animateIn:function(n,t,e){u(!0,n,t,e)},animateOut:function(n,t,e){u(!1,n,t,e)}};function r(e,o,i){var r,u,a=null;if(0===e)return i.apply(o),void o.trigger("finished.zf.animate",[o]).triggerHandler("finished.zf.animate",[o]);r=window.requestAnimationFrame(function n(t){a||(a=t),u=t-a,i.apply(o),u<e?r=window.requestAnimationFrame(n,o):(window.cancelAnimationFrame(r),o.trigger("finished.zf.animate",[o]).triggerHandler("finished.zf.animate",[o]))})}function u(n,t,e,o){if((t=a()(t).eq(0)).length){var i=n?c[0]:c[1],r=n?d[0]:d[1];u(),t.addClass(e).css("transition","none"),requestAnimationFrame(function(){t.addClass(i),n&&t.show()}),requestAnimationFrame(function(){t[0].offsetWidth,t.css("transition","").addClass(r)}),t.one(Object(f.transitionend)(t),function(){n||t.hide();u(),o&&o.apply(t)})}function u(){t[0].style.transitionDuration=0,t.removeClass("".concat(i," ").concat(r," ").concat(e))}}},25:function(n,t,e){n.exports=e("./js/entries/plugins/foundation.util.motion.js")},jquery:function(n,t){n.exports=o}})});
;
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("./foundation.util.keyboard"),require("./foundation.util.mediaQuery"),require("./foundation.util.motion"),require("./foundation.util.touch"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.keyboard","./foundation.util.mediaQuery","./foundation.util.motion","./foundation.util.touch","jquery"],t):"object"==typeof exports?exports["foundation.reveal"]=t(require("./foundation.core"),require("./foundation.util.keyboard"),require("./foundation.util.mediaQuery"),require("./foundation.util.motion"),require("./foundation.util.touch"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.reveal"]=t(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.__FOUNDATION_EXTERNAL__["foundation.util.keyboard"],e.__FOUNDATION_EXTERNAL__["foundation.util.mediaQuery"],e.__FOUNDATION_EXTERNAL__["foundation.util.motion"],e.__FOUNDATION_EXTERNAL__["foundation.util.touch"],e.jQuery))}(window,function(i,n,o,s,r,a){return function(i){var n={};function o(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return i[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}return o.m=i,o.c=n,o.d=function(e,t,i){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(o.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)o.d(i,n,function(e){return t[e]}.bind(null,n));return i},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=14)}({"./foundation.core":function(e,t){e.exports=i},"./foundation.util.keyboard":function(e,t){e.exports=n},"./foundation.util.mediaQuery":function(e,t){e.exports=o},"./foundation.util.motion":function(e,t){e.exports=s},"./foundation.util.touch":function(e,t){e.exports=r},"./js/entries/plugins/foundation.reveal.js":function(e,t,i){"use strict";i.r(t);var n=i("./foundation.core");i.d(t,"Foundation",function(){return n.Foundation});var o=i("./js/foundation.reveal.js");i.d(t,"Reveal",function(){return o.Reveal}),n.Foundation.plugin(o.Reveal,"Reveal")},"./js/foundation.reveal.js":function(e,t,i){"use strict";i.r(t),i.d(t,"Reveal",function(){return g});var n=i("jquery"),r=i.n(n),s=i("./foundation.core"),a=i("./foundation.util.keyboard"),l=i("./foundation.util.mediaQuery"),c=i("./foundation.util.motion"),u=i("./js/foundation.util.triggers.js");i("./foundation.util.touch");function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function d(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function f(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?function(e){if(void 0!==e)return e;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(e):t}function h(e){return(h=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function p(e,t){return(p=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var g=function(e){function i(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,i),f(this,h(i).apply(this,arguments))}var t,n,o;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&p(e,t)}(i,s["Plugin"]),t=i,(n=[{key:"_setup",value:function(e,t){this.$element=e,this.options=r.a.extend({},i.defaults,this.$element.data(),t),this.className="Reveal",this._init(),u.Triggers.init(r.a),a.Keyboard.register("Reveal",{ESCAPE:"close"})}},{key:"_init",value:function(){var e=this;l.MediaQuery._init(),this.id=this.$element.attr("id"),this.isActive=!1,this.cached={mq:l.MediaQuery.current},this.$anchor=r()('[data-open="'.concat(this.id,'"]')).length?r()('[data-open="'.concat(this.id,'"]')):r()('[data-toggle="'.concat(this.id,'"]')),this.$anchor.attr({"aria-controls":this.id,"aria-haspopup":!0,tabindex:0}),(this.options.fullScreen||this.$element.hasClass("full"))&&(this.options.fullScreen=!0,this.options.overlay=!1),this.options.overlay&&!this.$overlay&&(this.$overlay=this._makeOverlay(this.id)),this.$element.attr({role:"dialog","aria-hidden":!0,"data-yeti-box":this.id,"data-resize":this.id}),this.$overlay?this.$element.detach().appendTo(this.$overlay):(this.$element.detach().appendTo(r()(this.options.appendTo)),this.$element.addClass("without-overlay")),this._events(),this.options.deepLink&&window.location.hash==="#".concat(this.id)&&(this.onLoadListener=Object(s.onLoad)(r()(window),function(){return e.open()}))}},{key:"_makeOverlay",value:function(){var e="";return this.options.additionalOverlayClasses&&(e=" "+this.options.additionalOverlayClasses),r()("<div></div>").addClass("reveal-overlay"+e).appendTo(this.options.appendTo)}},{key:"_updatePosition",value:function(){var e,t=this.$element.outerWidth(),i=r()(window).width(),n=this.$element.outerHeight(),o=r()(window).height(),s=null;e="auto"===this.options.hOffset?parseInt((i-t)/2,10):parseInt(this.options.hOffset,10),"auto"===this.options.vOffset?s=o<n?parseInt(Math.min(100,o/10),10):parseInt((o-n)/4,10):null!==this.options.vOffset&&(s=parseInt(this.options.vOffset,10)),null!==s&&this.$element.css({top:s+"px"}),this.$overlay&&"auto"===this.options.hOffset||(this.$element.css({left:e+"px"}),this.$element.css({margin:"0px"}))}},{key:"_events",value:function(){var i=this,n=this;this.$element.on({"open.zf.trigger":this.open.bind(this),"close.zf.trigger":function(e,t){if(e.target===n.$element[0]||r()(e.target).parents("[data-closable]")[0]===t)return i.close.apply(i)},"toggle.zf.trigger":this.toggle.bind(this),"resizeme.zf.trigger":function(){n._updatePosition()}}),this.options.closeOnClick&&this.options.overlay&&this.$overlay.off(".zf.reveal").on("click.zf.reveal",function(e){e.target!==n.$element[0]&&!r.a.contains(n.$element[0],e.target)&&r.a.contains(document,e.target)&&n.close()}),this.options.deepLink&&r()(window).on("hashchange.zf.reveal:".concat(this.id),this._handleState.bind(this))}},{key:"_handleState",value:function(e){window.location.hash!=="#"+this.id||this.isActive?this.close():this.open()}},{key:"_disableScroll",value:function(e){e=e||r()(window).scrollTop(),r()(document).height()>r()(window).height()&&r()("html").css("top",-e)}},{key:"_enableScroll",value:function(e){e=e||parseInt(r()("html").css("top")),r()(document).height()>r()(window).height()&&(r()("html").css("top",""),r()(window).scrollTop(-e))}},{key:"open",value:function(){var e=this,t="#".concat(this.id);this.options.deepLink&&window.location.hash!==t&&(window.history.pushState?this.options.updateHistory?window.history.pushState({},"",t):window.history.replaceState({},"",t):window.location.hash=t),this.$activeAnchor=r()(document.activeElement).is(this.$anchor)?r()(document.activeElement):this.$anchor,this.isActive=!0,this.$element.css({visibility:"hidden"}).show().scrollTop(0),this.options.overlay&&this.$overlay.css({visibility:"hidden"}).show(),this._updatePosition(),this.$element.hide().css({visibility:""}),this.$overlay&&(this.$overlay.css({visibility:""}).hide(),this.$element.hasClass("fast")?this.$overlay.addClass("fast"):this.$element.hasClass("slow")&&this.$overlay.addClass("slow")),this.options.multipleOpened||this.$element.trigger("closeme.zf.reveal",this.id),this._disableScroll();var i=this;if(this.options.animationIn){this.options.overlay&&c.Motion.animateIn(this.$overlay,"fade-in"),c.Motion.animateIn(this.$element,this.options.animationIn,function(){e.$element&&(e.focusableElements=a.Keyboard.findFocusable(e.$element),i.$element.attr({"aria-hidden":!1,tabindex:-1}).focus(),i._addGlobalClasses(),a.Keyboard.trapFocus(i.$element))})}else this.options.overlay&&this.$overlay.show(0),this.$element.show(this.options.showDelay);this.$element.attr({"aria-hidden":!1,tabindex:-1}).focus(),a.Keyboard.trapFocus(this.$element),this._addGlobalClasses(),this._addGlobalListeners(),this.$element.trigger("open.zf.reveal")}},{key:"_addGlobalClasses",value:function(){var e=function(){r()("html").toggleClass("zf-has-scroll",!!(r()(document).height()>r()(window).height()))};this.$element.on("resizeme.zf.trigger.revealScrollbarListener",function(){return e()}),e(),r()("html").addClass("is-reveal-open")}},{key:"_removeGlobalClasses",value:function(){this.$element.off("resizeme.zf.trigger.revealScrollbarListener"),r()("html").removeClass("is-reveal-open"),r()("html").removeClass("zf-has-scroll")}},{key:"_addGlobalListeners",value:function(){var t=this;this.$element&&(this.focusableElements=a.Keyboard.findFocusable(this.$element),this.options.overlay||!this.options.closeOnClick||this.options.fullScreen||r()("body").on("click.zf.reveal",function(e){e.target!==t.$element[0]&&!r.a.contains(t.$element[0],e.target)&&r.a.contains(document,e.target)&&t.close()}),this.options.closeOnEsc&&r()(window).on("keydown.zf.reveal",function(e){a.Keyboard.handleKey(e,"Reveal",{close:function(){t.options.closeOnEsc&&t.close()}})}))}},{key:"close",value:function(){if(!this.isActive||!this.$element.is(":visible"))return!1;var t=this;function e(){var e=parseInt(r()("html").css("top"));0===r()(".reveal:visible").length&&t._removeGlobalClasses(),a.Keyboard.releaseFocus(t.$element),t.$element.attr("aria-hidden",!0),t._enableScroll(e),t.$element.trigger("closed.zf.reveal")}if(this.options.animationOut?(this.options.overlay&&c.Motion.animateOut(this.$overlay,"fade-out"),c.Motion.animateOut(this.$element,this.options.animationOut,e)):(this.$element.hide(this.options.hideDelay),this.options.overlay?this.$overlay.hide(0,e):e()),this.options.closeOnEsc&&r()(window).off("keydown.zf.reveal"),!this.options.overlay&&this.options.closeOnClick&&r()("body").off("click.zf.reveal"),this.$element.off("keydown.zf.reveal"),this.options.resetOnClose&&this.$element.html(this.$element.html()),this.isActive=!1,t.options.deepLink&&window.location.hash==="#".concat(this.id))if(window.history.replaceState){var i=window.location.pathname+window.location.search;this.options.updateHistory?window.history.pushState({},"",i):window.history.replaceState("",document.title,i)}else window.location.hash="";this.$activeAnchor.focus()}},{key:"toggle",value:function(){this.isActive?this.close():this.open()}},{key:"_destroy",value:function(){this.options.overlay&&(this.$element.appendTo(r()(this.options.appendTo)),this.$overlay.hide().off().remove()),this.$element.hide().off(),this.$anchor.off(".zf"),r()(window).off(".zf.reveal:".concat(this.id)),this.onLoadListener&&r()(window).off(this.onLoadListener),0===r()(".reveal:visible").length&&this._removeGlobalClasses()}}])&&d(t.prototype,n),o&&d(t,o),i}();g.defaults={animationIn:"",animationOut:"",showDelay:0,hideDelay:0,closeOnClick:!0,closeOnEsc:!0,multipleOpened:!1,vOffset:"auto",hOffset:"auto",fullScreen:!1,overlay:!0,resetOnClose:!1,deepLink:!1,updateHistory:!1,appendTo:"body",additionalOverlayClasses:""}},"./js/foundation.util.triggers.js":function(e,t,i){"use strict";i.r(t),i.d(t,"Triggers",function(){return u});var n=i("jquery"),s=i.n(n),o=i("./foundation.core"),r=i("./foundation.util.motion");function a(e){return(a="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}var l=function(){for(var e=["WebKit","Moz","O","Ms",""],t=0;t<e.length;t++)if("".concat(e[t],"MutationObserver")in window)return window["".concat(e[t],"MutationObserver")];return!1}(),c=function(t,i){t.data(i).split(" ").forEach(function(e){s()("#".concat(e))["close"===i?"trigger":"triggerHandler"]("".concat(i,".zf.trigger"),[t])})},u={Listeners:{Basic:{},Global:{}},Initializers:{}};function d(t,e,i){var n,o=Array.prototype.slice.call(arguments,3);s()(window).off(e).on(e,function(e){n&&clearTimeout(n),n=setTimeout(function(){i.apply(null,o)},t||10)})}u.Listeners.Basic={openListener:function(){c(s()(this),"open")},closeListener:function(){s()(this).data("close")?c(s()(this),"close"):s()(this).trigger("close.zf.trigger")},toggleListener:function(){s()(this).data("toggle")?c(s()(this),"toggle"):s()(this).trigger("toggle.zf.trigger")},closeableListener:function(e){e.stopPropagation();var t=s()(this).data("closable");""!==t?r.Motion.animateOut(s()(this),t,function(){s()(this).trigger("closed.zf")}):s()(this).fadeOut().trigger("closed.zf")},toggleFocusListener:function(){var e=s()(this).data("toggle-focus");s()("#".concat(e)).triggerHandler("toggle.zf.trigger",[s()(this)])}},u.Initializers.addOpenListener=function(e){e.off("click.zf.trigger",u.Listeners.Basic.openListener),e.on("click.zf.trigger","[data-open]",u.Listeners.Basic.openListener)},u.Initializers.addCloseListener=function(e){e.off("click.zf.trigger",u.Listeners.Basic.closeListener),e.on("click.zf.trigger","[data-close]",u.Listeners.Basic.closeListener)},u.Initializers.addToggleListener=function(e){e.off("click.zf.trigger",u.Listeners.Basic.toggleListener),e.on("click.zf.trigger","[data-toggle]",u.Listeners.Basic.toggleListener)},u.Initializers.addCloseableListener=function(e){e.off("close.zf.trigger",u.Listeners.Basic.closeableListener),e.on("close.zf.trigger","[data-closeable], [data-closable]",u.Listeners.Basic.closeableListener)},u.Initializers.addToggleFocusListener=function(e){e.off("focus.zf.trigger blur.zf.trigger",u.Listeners.Basic.toggleFocusListener),e.on("focus.zf.trigger blur.zf.trigger","[data-toggle-focus]",u.Listeners.Basic.toggleFocusListener)},u.Listeners.Global={resizeListener:function(e){l||e.each(function(){s()(this).triggerHandler("resizeme.zf.trigger")}),e.attr("data-events","resize")},scrollListener:function(e){l||e.each(function(){s()(this).triggerHandler("scrollme.zf.trigger")}),e.attr("data-events","scroll")},closeMeListener:function(e,t){var i=e.namespace.split(".")[0];s()("[data-".concat(i,"]")).not('[data-yeti-box="'.concat(t,'"]')).each(function(){var e=s()(this);e.triggerHandler("close.zf.trigger",[e])})}},u.Initializers.addClosemeListener=function(e){var t=s()("[data-yeti-box]"),i=["dropdown","tooltip","reveal"];if(e&&("string"==typeof e?i.push(e):"object"===a(e)&&"string"==typeof e[0]?i=i.concat(e):console.error("Plugin names must be strings")),t.length){var n=i.map(function(e){return"closeme.zf.".concat(e)}).join(" ");s()(window).off(n).on(n,u.Listeners.Global.closeMeListener)}},u.Initializers.addResizeListener=function(e){var t=s()("[data-resize]");t.length&&d(e,"resize.zf.trigger",u.Listeners.Global.resizeListener,t)},u.Initializers.addScrollListener=function(e){var t=s()("[data-scroll]");t.length&&d(e,"scroll.zf.trigger",u.Listeners.Global.scrollListener,t)},u.Initializers.addMutationEventsListener=function(e){if(!l)return!1;var t=e.find("[data-resize], [data-scroll], [data-mutate]"),i=function(e){var t=s()(e[0].target);switch(e[0].type){case"attributes":"scroll"===t.attr("data-events")&&"data-events"===e[0].attributeName&&t.triggerHandler("scrollme.zf.trigger",[t,window.pageYOffset]),"resize"===t.attr("data-events")&&"data-events"===e[0].attributeName&&t.triggerHandler("resizeme.zf.trigger",[t]),"style"===e[0].attributeName&&(t.closest("[data-mutate]").attr("data-events","mutate"),t.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[t.closest("[data-mutate]")]));break;case"childList":t.closest("[data-mutate]").attr("data-events","mutate"),t.closest("[data-mutate]").triggerHandler("mutateme.zf.trigger",[t.closest("[data-mutate]")]);break;default:return!1}};if(t.length)for(var n=0;n<=t.length-1;n++){new l(i).observe(t[n],{attributes:!0,childList:!0,characterData:!1,subtree:!0,attributeFilter:["data-events","style"]})}},u.Initializers.addSimpleListeners=function(){var e=s()(document);u.Initializers.addOpenListener(e),u.Initializers.addCloseListener(e),u.Initializers.addToggleListener(e),u.Initializers.addCloseableListener(e),u.Initializers.addToggleFocusListener(e)},u.Initializers.addGlobalListeners=function(){var e=s()(document);u.Initializers.addMutationEventsListener(e),u.Initializers.addResizeListener(),u.Initializers.addScrollListener(),u.Initializers.addClosemeListener()},u.init=function(e,t){Object(o.onLoad)(e(window),function(){!0!==e.triggersInitialized&&(u.Initializers.addSimpleListeners(),u.Initializers.addGlobalListeners(),e.triggersInitialized=!0)}),t&&(t.Triggers=u,t.IHearYou=u.Initializers.addGlobalListeners)}},14:function(e,t,i){e.exports=i("./js/entries/plugins/foundation.reveal.js")},jquery:function(e,t){e.exports=a}})});
;
!function(e,n){"object"==typeof exports&&"object"==typeof module?module.exports=n(require("./foundation.core"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","jquery"],n):"object"==typeof exports?exports["foundation.util.imageLoader"]=n(require("./foundation.core"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.util.imageLoader"]=n(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.jQuery))}(window,function(o,t){return function(o){var t={};function r(e){if(t[e])return t[e].exports;var n=t[e]={i:e,l:!1,exports:{}};return o[e].call(n.exports,n,n.exports,r),n.l=!0,n.exports}return r.m=o,r.c=t,r.d=function(e,n,o){r.o(e,n)||Object.defineProperty(e,n,{enumerable:!0,get:o})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(n,e){if(1&e&&(n=r(n)),8&e)return n;if(4&e&&"object"==typeof n&&n&&n.__esModule)return n;var o=Object.create(null);if(r.r(o),Object.defineProperty(o,"default",{enumerable:!0,value:n}),2&e&&"string"!=typeof n)for(var t in n)r.d(o,t,function(e){return n[e]}.bind(null,t));return o},r.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(n,"a",n),n},r.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},r.p="",r(r.s=22)}({"./foundation.core":function(e,n){e.exports=o},"./js/entries/plugins/foundation.util.imageLoader.js":function(e,n,o){"use strict";o.r(n);var t=o("./foundation.core");o.d(n,"Foundation",function(){return t.Foundation});var r=o("./js/foundation.util.imageLoader.js");o.d(n,"onImagesLoaded",function(){return r.onImagesLoaded}),t.Foundation.onImagesLoaded=r.onImagesLoaded},"./js/foundation.util.imageLoader.js":function(e,n,o){"use strict";o.r(n),o.d(n,"onImagesLoaded",function(){return u});var t=o("jquery"),r=o.n(t);function u(e,n){var o=e.length;function t(){0===--o&&n()}0===o&&n(),e.each(function(){if(this.complete&&void 0!==this.naturalWidth)t();else{var e=new Image,o="load.zf.images error.zf.images";r()(e).one(o,function e(n){r()(this).off(o,e),t()}),e.src=r()(this).attr("src")}})}},22:function(e,n,o){e.exports=o("./js/entries/plugins/foundation.util.imageLoader.js")},jquery:function(e,n){e.exports=t}})});
;
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t(require("./foundation.core"),require("./foundation.util.imageLoader"),require("./foundation.util.mediaQuery"),require("jquery")):"function"==typeof define&&define.amd?define(["./foundation.core","./foundation.util.imageLoader","./foundation.util.mediaQuery","jquery"],t):"object"==typeof exports?exports["foundation.equalizer"]=t(require("./foundation.core"),require("./foundation.util.imageLoader"),require("./foundation.util.mediaQuery"),require("jquery")):(e.__FOUNDATION_EXTERNAL__=e.__FOUNDATION_EXTERNAL__||{},e.__FOUNDATION_EXTERNAL__["foundation.equalizer"]=t(e.__FOUNDATION_EXTERNAL__["foundation.core"],e.__FOUNDATION_EXTERNAL__["foundation.util.imageLoader"],e.__FOUNDATION_EXTERNAL__["foundation.util.mediaQuery"],e.jQuery))}(window,function(i,n,o,r){return function(i){var n={};function o(e){if(n[e])return n[e].exports;var t=n[e]={i:e,l:!1,exports:{}};return i[e].call(t.exports,t,t.exports,o),t.l=!0,t.exports}return o.m=i,o.c=n,o.d=function(e,t,i){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:i})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var i=Object.create(null);if(o.r(i),Object.defineProperty(i,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var n in t)o.d(i,n,function(e){return t[e]}.bind(null,n));return i},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="",o(o.s=6)}({"./foundation.core":function(e,t){e.exports=i},"./foundation.util.imageLoader":function(e,t){e.exports=n},"./foundation.util.mediaQuery":function(e,t){e.exports=o},"./js/entries/plugins/foundation.equalizer.js":function(e,t,i){"use strict";i.r(t);var n=i("./foundation.core");i.d(t,"Foundation",function(){return n.Foundation});var o=i("./js/foundation.equalizer.js");i.d(t,"Equalizer",function(){return o.Equalizer}),n.Foundation.plugin(o.Equalizer,"Equalizer")},"./js/foundation.equalizer.js":function(e,t,i){"use strict";i.r(t),i.d(t,"Equalizer",function(){return c});var n=i("jquery"),h=i.n(n),r=i("./foundation.util.mediaQuery"),u=i("./foundation.util.imageLoader"),a=i("./foundation.core");function o(e){return(o="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function s(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function l(e,t){return!t||"object"!==o(t)&&"function"!=typeof t?function(e){if(void 0!==e)return e;throw new ReferenceError("this hasn't been initialised - super() hasn't been called")}(e):t}function f(e){return(f=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)})(e)}function d(e,t){return(d=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e})(e,t)}var c=function(e){function i(){return function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,i),l(this,f(i).apply(this,arguments))}var t,n,o;return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&d(e,t)}(i,a["Plugin"]),t=i,(n=[{key:"_setup",value:function(e,t){this.$element=e,this.options=h.a.extend({},i.defaults,this.$element.data(),t),this.className="Equalizer",this._init()}},{key:"_init",value:function(){var e=this.$element.attr("data-equalizer")||"",t=this.$element.find('[data-equalizer-watch="'.concat(e,'"]'));r.MediaQuery._init(),this.$watched=t.length?t:this.$element.find("[data-equalizer-watch]"),this.$element.attr("data-resize",e||Object(a.GetYoDigits)(6,"eq")),this.$element.attr("data-mutate",e||Object(a.GetYoDigits)(6,"eq")),this.hasNested=0<this.$element.find("[data-equalizer]").length,this.isNested=0<this.$element.parentsUntil(document.body,"[data-equalizer]").length,this.isOn=!1,this._bindHandler={onResizeMeBound:this._onResizeMe.bind(this),onPostEqualizedBound:this._onPostEqualized.bind(this)};var i,n=this.$element.find("img");this.options.equalizeOn?(i=this._checkMQ(),h()(window).on("changed.zf.mediaquery",this._checkMQ.bind(this))):this._events(),(void 0!==i&&!1===i||void 0===i)&&(n.length?Object(u.onImagesLoaded)(n,this._reflow.bind(this)):this._reflow())}},{key:"_pauseEvents",value:function(){this.isOn=!1,this.$element.off({".zf.equalizer":this._bindHandler.onPostEqualizedBound,"resizeme.zf.trigger":this._bindHandler.onResizeMeBound,"mutateme.zf.trigger":this._bindHandler.onResizeMeBound})}},{key:"_onResizeMe",value:function(e){this._reflow()}},{key:"_onPostEqualized",value:function(e){e.target!==this.$element[0]&&this._reflow()}},{key:"_events",value:function(){this._pauseEvents(),this.hasNested?this.$element.on("postequalized.zf.equalizer",this._bindHandler.onPostEqualizedBound):(this.$element.on("resizeme.zf.trigger",this._bindHandler.onResizeMeBound),this.$element.on("mutateme.zf.trigger",this._bindHandler.onResizeMeBound)),this.isOn=!0}},{key:"_checkMQ",value:function(){var e=!r.MediaQuery.is(this.options.equalizeOn);return e?this.isOn&&(this._pauseEvents(),this.$watched.css("height","auto")):this.isOn||this._events(),e}},{key:"_killswitch",value:function(){}},{key:"_reflow",value:function(){if(!this.options.equalizeOnStack&&this._isStacked())return this.$watched.css("height","auto"),!1;this.options.equalizeByRow?this.getHeightsByRow(this.applyHeightByRow.bind(this)):this.getHeights(this.applyHeight.bind(this))}},{key:"_isStacked",value:function(){return!this.$watched[0]||!this.$watched[1]||this.$watched[0].getBoundingClientRect().top!==this.$watched[1].getBoundingClientRect().top}},{key:"getHeights",value:function(e){for(var t=[],i=0,n=this.$watched.length;i<n;i++)this.$watched[i].style.height="auto",t.push(this.$watched[i].offsetHeight);e(t)}},{key:"getHeightsByRow",value:function(e){var t=this.$watched.length?this.$watched.first().offset().top:0,i=[],n=0;i[n]=[];for(var o=0,r=this.$watched.length;o<r;o++){this.$watched[o].style.height="auto";var u=h()(this.$watched[o]).offset().top;u!=t&&(i[++n]=[],t=u),i[n].push([this.$watched[o],this.$watched[o].offsetHeight])}for(var a=0,s=i.length;a<s;a++){var l=h()(i[a]).map(function(){return this[1]}).get(),f=Math.max.apply(null,l);i[a].push(f)}e(i)}},{key:"applyHeight",value:function(e){var t=Math.max.apply(null,e);this.$element.trigger("preequalized.zf.equalizer"),this.$watched.css("height",t),this.$element.trigger("postequalized.zf.equalizer")}},{key:"applyHeightByRow",value:function(e){this.$element.trigger("preequalized.zf.equalizer");for(var t=0,i=e.length;t<i;t++){var n=e[t].length,o=e[t][n-1];if(n<=2)h()(e[t][0][0]).css({height:"auto"});else{this.$element.trigger("preequalizedrow.zf.equalizer");for(var r=0,u=n-1;r<u;r++)h()(e[t][r][0]).css({height:o});this.$element.trigger("postequalizedrow.zf.equalizer")}}this.$element.trigger("postequalized.zf.equalizer")}},{key:"_destroy",value:function(){this._pauseEvents(),this.$watched.css("height","auto")}}])&&s(t.prototype,n),o&&s(t,o),i}();c.defaults={equalizeOnStack:!1,equalizeByRow:!1,equalizeOn:""}},6:function(e,t,i){e.exports=i("./js/entries/plugins/foundation.equalizer.js")},jquery:function(e,t){e.exports=r}})});
;
/**
 * what-input - A global utility for tracking the current input method (mouse, keyboard or touch).
 * @version v5.2.4
 * @link https://github.com/ten1seven/what-input
 * @license MIT
 */
!function(e,t){"object"==typeof exports&&"object"==typeof module?module.exports=t():"function"==typeof define&&define.amd?define("whatInput",[],t):"object"==typeof exports?exports.whatInput=t():e.whatInput=t()}(this,function(){return i={},n.m=o=[function(e,t){"use strict";e.exports=function(){if("undefined"==typeof document||"undefined"==typeof window)return{ask:function(){return"initial"},element:function(){return null},ignoreKeys:function(){},specificKeys:function(){},registerOnChange:function(){},unRegisterOnChange:function(){}};var t=document.documentElement,n=null,a="initial",u=a,o=Date.now();if(!(t.dataset.whatpersist||"false"===document.body.dataset.whatpersist))try{window.sessionStorage.getItem("what-input")&&(a=window.sessionStorage.getItem("what-input")),window.sessionStorage.getItem("what-intent")&&(u=window.sessionStorage.getItem("what-intent"))}catch(e){}var d=["button","input","select","textarea"],i=[],c=[16,17,18,91,93],w=[],p={keydown:"keyboard",keyup:"keyboard",mousedown:"mouse",mousemove:"mouse",MSPointerDown:"pointer",MSPointerMove:"pointer",pointerdown:"pointer",pointermove:"pointer",touchstart:"touch",touchend:"touch"},r=!1,s={x:null,y:null},f={2:"touch",3:"touch",4:"mouse"},l=!1;try{var e=Object.defineProperty({},"passive",{get:function(){l=!0}});window.addEventListener("test",null,e)}catch(e){}var h=function(){var e=!!l&&{passive:!0};window.PointerEvent?(window.addEventListener("pointerdown",m),window.addEventListener("pointermove",y)):window.MSPointerEvent?(window.addEventListener("MSPointerDown",m),window.addEventListener("MSPointerMove",y)):(window.addEventListener("mousedown",m),window.addEventListener("mousemove",y),"ontouchstart"in window&&(window.addEventListener("touchstart",m,e),window.addEventListener("touchend",m))),window.addEventListener(S(),y,e),window.addEventListener("keydown",m),window.addEventListener("keyup",m),window.addEventListener("focusin",g),window.addEventListener("focusout",E)},m=function(e){var t=e.which,n=p[e.type];"pointer"===n&&(n=x(e));var o=!w.length&&-1===c.indexOf(t),i=w.length&&-1!==w.indexOf(t),r="keyboard"===n&&t&&(o||i)||"mouse"===n||"touch"===n;if(b(n)&&(r=!1),r&&a!==n&&(L("input",a=n),v("input")),r&&u!==n){var s=document.activeElement;s&&s.nodeName&&(-1===d.indexOf(s.nodeName.toLowerCase())||"button"===s.nodeName.toLowerCase()&&!k(s,"form"))&&(L("intent",u=n),v("intent"))}},v=function(e){t.setAttribute("data-what"+e,"input"===e?a:u),M(e)},y=function(e){var t=p[e.type];"pointer"===t&&(t=x(e)),O(e),(!r&&!b(t)||r&&"wheel"===e.type||"mousewheel"===e.type||"DOMMouseScroll"===e.type)&&u!==t&&(L("intent",u=t),v("intent"))},g=function(e){e.target.nodeName?(n=e.target.nodeName.toLowerCase(),t.setAttribute("data-whatelement",n),e.target.classList&&e.target.classList.length&&t.setAttribute("data-whatclasses",e.target.classList.toString().replace(" ",","))):E()},E=function(){n=null,t.removeAttribute("data-whatelement"),t.removeAttribute("data-whatclasses")},L=function(e,t){try{window.sessionStorage.setItem("what-"+e,t)}catch(e){}},x=function(e){return"number"==typeof e.pointerType?f[e.pointerType]:"pen"===e.pointerType?"touch":e.pointerType},b=function(e){var t=Date.now(),n="mouse"===e&&"touch"===a&&t-o<200;return o=t,n},S=function(){return"onwheel"in document.createElement("div")?"wheel":void 0!==document.onmousewheel?"mousewheel":"DOMMouseScroll"},M=function(e){for(var t=0,n=i.length;t<n;t++)i[t].type===e&&i[t].fn.call(void 0,"input"===e?a:u)},O=function(e){s.x!==e.screenX||s.y!==e.screenY?(r=!1,s.x=e.screenX,s.y=e.screenY):r=!0},k=function(e,t){var n=window.Element.prototype;if(n.matches||(n.matches=n.msMatchesSelector||n.webkitMatchesSelector),n.closest)return e.closest(t);do{if(e.matches(t))return e;e=e.parentElement||e.parentNode}while(null!==e&&1===e.nodeType);return null};return"addEventListener"in window&&Array.prototype.indexOf&&(p[S()]="mouse",h(),v("input"),v("intent")),{ask:function(e){return"intent"===e?u:a},element:function(){return n},ignoreKeys:function(e){c=e},specificKeys:function(e){w=e},registerOnChange:function(e,t){i.push({fn:e,type:t||"input"})},unRegisterOnChange:function(e){var t=function(e){for(var t=0,n=i.length;t<n;t++)if(i[t].fn===e)return t}(e);!t&&0!==t||i.splice(t,1)},clearStorage:function(){window.sessionStorage.clear()}}}()}],n.c=i,n.p="",n(0);function n(e){if(i[e])return i[e].exports;var t=i[e]={exports:{},id:e,loaded:!1};return o[e].call(t.exports,t,t.exports,n),t.loaded=!0,t.exports}var o,i});
;
/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

  Drupal.behaviors.globalBehavior = {
    attach: function (context, settings) {
      
      $('.print-me', context).on('click', function(e) {
        e.preventDefault();
        window.print();
      })
      // Hide breadcrumb for mobile devices.
      /*if (window.matchMedia("(max-width: 767px)").matches) {
        $('.breadcrumbs').hide();
      }*/
    }
  };

  /**
   * Some things do not need to be wrapped in a behavior.
   */
  $(document).ready(function() {
	$('.webform-submission-privacy-inquiries-form .captcha').after($('.webform-submission-privacy-inquiries-form #edit-actions'));
	$('.webform-submission-privacy-inquiries-form #edit-actions-submit').on('focus',function() {
		$(this).css({"outline-offset": "5px", "outline": "1px dotted #000"});
	});
	$('.webform-submission-privacy-inquiries-form #edit-actions-submit').on('blur',function() {
		$(this).css({"outline-offset": "0px", "outline": "0px"});
	});
	//fix for small image shortcode as it adds href instead of src
	setTimeout(function() {
		$("img[href]").each(function() {
			$(this).removeAttr("href");
			$(this).attr("src",$(this).attr("href"));
		});
	},500);
    // Load Foundation scripts.
    $(document).foundation();

    // Update the dropdown menu icon when clicked.
    $('.dropdown--menu').on('show.zf.dropdown', function() {
      $('button[id="' + $(this).attr('aria-labelledby') + '"]')
        .find('.vzpp-icon-arrow-down')
        .removeClass('vzpp-icon-arrow-down')
        .addClass('vzpp-icon-arrow-up');
    });

    $('.dropdown--menu').on('hide.zf.dropdown', function() {
      $('button[id="' + $(this).attr('aria-labelledby') + '"]')
        .find('.vzpp-icon-arrow-up')
        .removeClass('vzpp-icon-arrow-up')
        .addClass('vzpp-icon-arrow-down');
    });

    // Add/remove classes to the body when modals are opened and closed.
	if($('.dialog_live_region').length < 1 && $('.field--name-field-body a.use-ajax').length > 1) {
		$('.skip-link').after('<span class="dialog_live_region sr-only" aria-live="polite"></span>');
	}
    $('body').on('dialogopen', function(event) {
      if ($(event.target.parentNode).hasClass('ui-dialog--vzpp')) {
		  console.log("model open")
        $('body, html').addClass('modal-open');
		if (location.href.match(/(\/about\/privacy\/account\-security|\/about\/account\-security)/i)) {
			var e = document.querySelector('.block-vzpp-page-title h1.page-title');
			var d = document.createElement('h2');
			d.className = 'page-title';
			d.innerHTML = e.innerHTML;
			e.parentNode.replaceChild(d, e);
		}
		//EOOV-16105 issue #5a fix
		if($('.ui-dialog--vzpp .block-vzpp-blocks h1.page-title').length > 0) {
			var old = document.querySelector('.ui-dialog--vzpp .block-vzpp-blocks h1.page-title');
			var d_new = document.createElement('h2');
			d_new.className = old.getAttribute('class');
			d_new.innerHTML = old.innerHTML;
			old.parentNode.replaceChild(d_new, old);
		}
		//EOOV-16105 issue 3,4 fix
		$('.dialog_live_region').eq(0).text('Dialog');
		var modlclosebtn = $("button.ui-dialog-titlebar-close");
		modlclosebtn.attr("aria-label","Close");
		modlclosebtn.removeAttr('title');
		//EOOV-16105 issue 2 fix
		$(event.target.parentNode).removeAttr("role");
		$('.skip-link').attr('aria-hidden',true);
		$('.dialog-off-canvas-main-canvas').attr('aria-hidden',true);
		//EOOV-16105 issue 4 fix
		$('.ui-dialog-title').attr('aria-hidden',true);
		//EOOV-16105 issue 3 fix
		//$('.ui-widget-content .field--type-text-with-summary p a').attr('aria-hidden',true);
		if($('.ui-widget-content .field--type-text-with-summary p a').length > 0) {
			modlclosebtn.focus();
		}
		setTimeout(function() {
			if($('.ui-widget-content .field--type-text-with-summary p a').length < 1) {
				modlclosebtn.focus();
			}
			$('.dialog_live_region').text('');
			//$('.ui-widget-content .field--type-text-with-summary p a').removeAttr("aria-hidden");
		},1000);
      }
    });

    $('body').on('dialogclose', function(event) {
	  $('.skip-link').removeAttr('aria-hidden');
	  $('.dialog-off-canvas-main-canvas').removeAttr('aria-hidden');
	  $('.ui-dialog-title').removeAttr('aria-hidden');
	  $('.ui-widget-content .field--type-text-with-summary p a').removeAttr('aria-hidden');
      if ($(event.target.parentNode).hasClass('ui-dialog--vzpp')) {
        $('body, html').removeClass('modal-open');
      }
    });

    // Scroll to anchors in the URL.
    var anchor = window.location.hash;
    if (anchor.length > 0) {
      scrollToAnchor(anchor);  
    }

    // Reassign the jQuery.button plugin back to its original value after
    // importing the header/footer scripts. We have to do this so that the
    // Bootstrap button plugin doesn't interfere with the jQuery UI button
    // plugin, causing the UI modal buttons to break.
    
    // Suggested fix for "Uncaught TypeError: jQuery.fn.button.noConflict is not a function" from github URL => https://github.com/yiisoft/yii2-jui/issues/62
    if (jQuery.fn.button && jQuery.fn.button.noConflict !== undefined) {
      var bootstrapButton = jQuery.fn.button.noConflict();
      jQuery.fn.bootstrapBtn = bootstrapButton;
    }
	//EOOV-14827 issue #3 fix
  $(".footer-top__cell li.menu-item--active-trail a").attr("aria-current",true);
  if($("#accessibility-services-menu")!=null && $("#accessibility-services-menu").parent()!=null && $("#accessibility-services-menu").parent().find(".horizontal .menu-item")!=null) {
	  $("#accessibility-services-menu").parent().find(".horizontal .menu-item a").each(function() {
		  $(this).attr("aria-label",$(this).attr("title"));
		  $(this).removeAttr("title");
	  });
  }
  //EOOV-14827 issue #1 fix ‘Skip to main content’ link is not operable.
  if($("nav .skip-link").length > 0) {
	$("nav .skip-link").on("click",function(e) {
		e.preventDefault();
		e.stopPropagation();
		setTimeout(function() {
			console.log("Skip to main content clicked");
			$("ul.breadcrumbs li a").eq(0).focus();
		},1000);
	});
  }
  //EOOV-15880 issue #4 - banner landmark issue fix
	var bannerWait = setInterval(function() {
		if($('div#vz-gh20').length > 0) {
			clearInterval(bannerWait);
			$('div#vz-gh20').attr("role","banner");
		}
	},100);
  });

  // A function to scroll to a particular element.
  // Params:
  // anchorId: A selector string in this format: '#someId'
  function scrollToAnchor(anchorId){
    var $scrollTarget = $(anchorId);

    if ($scrollTarget.length > 0) {
      var options = {};
      var offset = 65;

      // Less offset on larger screens (when the header is not fixed).
      if ($(window).width() > 767) {
        offset = 125;
      }

      options.scrollTop = $scrollTarget.offset().top - offset;

      // Are we scrolling to accordiong content? If so, scroll up far enough
      // so that we can see the accordion title as well.
      if ($scrollTarget.hasClass('accordion-content')) {
        var $accordionTitle = $scrollTarget.siblings('.accordion-title');
        options.scrollTop = $accordionTitle.offset().top - offset;
      }

      $('html, body').animate(options, 'slow');  
    }
  }

})(jQuery, Drupal);
      var vzcRedirectOverlay = "";
     $(".overlaypopupredirectshortcode").on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
          e.preventDefault();
          e.stopPropagation();
          var currenthref = $(this).attr('href');
          var currenttarget = $(this).attr('target');
          var linktarget = "onclick='vzcRedirectOverlay.close();'";
          if(currenttarget == '_blank') {
            linktarget = "target ='_blank' onclick='vzcRedirectOverlay.close();'";
          }
          var vNewRedirectHtml = "<div id='divClaimIdleTimeout'><div>La página que estás a punto de ver solo está disponible en inglés.<\/div><br\/>"
                  + "<div class='divClaimButtonGroup'>"
                  + "<a href="+ currenthref +" "+ linktarget +" id = 'redirectPopupTriggerToLink' class='butIdleTimoutYes'><span class='spanClaimIdleTimeoutYes'>Ir al sitio en inglés<\/span><\/a>"
                  + "<button onclick='vzcRedirectOverlay.close();' id = 'redirectPopupClose' class='butIdleTimoutNo'><span class='spanClaimIdleTimeoutNo'>Volver<\/span><\/button>"
                  + "<\/div><\/div>";
        vzcRedirectOverlay = Drupal.dialog(vNewRedirectHtml, {
         dialogClass: 'vzc_redirect_popup_overlay',
         resizable: false,
         closeOnEscape: false,
         create: function () {
           $(this).parent().find('.ui-dialog-title').text('Mensaje importante');
         },
         beforeClose: false,
         close: function (event) {
           $(event.target).remove();
         }
        });
        vzcRedirectOverlay.showModal();
      });
      $(document).on("click", ".overlaypopupredirect" , function(e) {
          e.preventDefault();
          e.stopPropagation();
          var currenthref = $(this).attr('href');
          var currenttarget = $(this).attr('target');
          var linktarget = "onclick='vzcRedirectOverlay.close();'";
          if(currenttarget == '_blank') {
            linktarget = "target ='_blank' onclick='vzcRedirectOverlay.close();'";
          }
          var vNewRedirectHtml = "<div id='divClaimIdleTimeout'><div>La página que estás a punto de ver solo está disponible en inglés.<\/div><br\/>"
                  + "<div class='divClaimButtonGroup'>"
                  + "<a href="+ currenthref +" "+ linktarget +" id = 'redirectPopupTriggerToLink' class='butIdleTimoutYes'><span class='spanClaimIdleTimeoutYes'>Ir al sitio en inglés<\/span><\/a>"
                  + "<button onclick='vzcRedirectOverlay.close();' id = 'redirectPopupClose' class='butIdleTimoutNo'><span class='spanClaimIdleTimeoutNo'>Volver<\/span><\/button>"
                  + "<\/div><\/div>";
        vzcRedirectOverlay = Drupal.dialog(vNewRedirectHtml, {
         dialogClass: 'vzc_redirect_popup_overlay',
         resizable: false,
         closeOnEscape: false,
         create: function () {
           $(this).parent().find('.ui-dialog-title').text('Mensaje importante');
         },
         beforeClose: false,
         close: function (event) {
           $(event.target).remove();
         }
        });
        vzcRedirectOverlay.showModal();
      });
;
/**
 * @file
 * JavaScript to process text expansions.
 *
 */
(function ($, Drupal) {

  $(document).ready(function() {

    // First, find all the TE links and targets in the cloned mobile tables and
    // give them unique attributes.
    var $mobileTeLinks   = $('.table-m .te-link');
    var $mobileTeTargets = $('.table-m .te');

    $mobileTeLinks.each(function() {
      var $this = $(this);
      var targetAttr = $(this).attr('data-te-target');

      $(this).attr('data-te-target', 'table-m-' + targetAttr);
    })

    $mobileTeTargets.each(function() {
      var $this = $(this);
      var idAttr = $(this).attr('data-te-id');

      $(this).attr('data-te-id', 'table-m-' + idAttr);
    })

    // Find all TE links and close buttons.
    var $teLinks = $('.te-link');
    var $teClose = $('.te__close');

    // Initialize a counter for the superscripts.
    var count = 0;
    if((window.location.hostname.indexOf(".verizon.com") > 0) && (window.location.pathname.indexOf("/layout") > 0)) {
      $('.sbs__body .field--name-field-body p a[tabindex="-1"], .sbs__body .field--name-field-body li a[tabindex="-1"], .table--3col__wrapper p a[tabindex="-1"]:has(u), .sbs__body .field--name-field-body div a[tabindex="-1"]').each(function() {
        if(!$(this).hasClass("te-link") && !$(this).hasClass("use-ajax")) {
          $(this).on("click",function() {
            let linkAttr = $(this).attr("href");
            window.location.href = linkAttr;
          });
        }
      });
    }

    jQuery(".te-link").each(function() {
      var $teLink = jQuery(this);
      if($teLink.text().indexOf("+") > -1) {
        $teLink.parent().prevUntil(".te.callout").each(function(i,ele){
          if(jQuery(ele).find("strong").length > 0) {
            $teLink.attr("aria-label","See example of "+jQuery(ele).find("strong").eq(0).text());
          }
        });
      }
    });
	//EOOV-15880 issue #1 fix
	$teLinks.attr("role","button");
	
    $teLinks.each(function(index) {
      var $this = $(this);
      var target = $this.attr('data-te-target');
      var $target = $('div[data-te-id="' + target + '"]');

      // If this is a mobile table TE, don't increment the counter.
      if ($this.closest('.table-m').length > 0) {
        // Do nothing.
      }
      else {
        count++;
      }

      // Append a superscripted index.
      var newText = $this.html() + '<sup class="te-link__index"> ' + count + '</sup>';
      $this.html(newText);

      // Append the index to the associated TE.
      $target.find('.te__heading').prepend('<span class="te-link__index">' + count + '. </span>');

      // Insert the close button to the associated TE.
	  //EOOV-15880 issue #2 fix updated aria-label
      $target.find('.te__heading').before('<button class="te__close close-button" aria-label="Close '+($this.clone().children().remove().end().text())+'"><span class="show-for-sr">Close</span>×</button>');

      // Is this TE Link in a table?
      if ($this.closest('td').length > 0) {
        // Get the number of tds in this row so that we know how long the colspan needs to be in the new row.
        var cellCount = $this.closest('td').siblings().length;

        // Construct a new row to append with the text expansion content.
        var $newRow = $this.closest('tr').clone().addClass('te-row');
        $newRow.find('th').html('<span class="show-for-sr">' + Drupal.t('This row contains additional help content.') + '</span>');
        $newRow.find('td').remove();
        $newRow.append('<td colspan="' + cellCount + '" class="cell auto">' + $target[0].outerHTML + '</td>');

        // Get the parent row.
        var $parentRow = $this.closest('tr');

        // If the parent already has .te-row siblings, then append the new row
        // after those siblings. Otherwise, just append after the parent.
        if ($parentRow.nextAll('.te-row').length > 0) {
          $parentRow.nextAll('.te-row').last().after($newRow);
        } else {
          $parentRow.after($newRow);
        }

        // Remove the original target.
        $target.remove();
      };

      // Is this TE Link in a mobile table row?
      if ($this.closest('.table-m__row').length > 0) {
        var $newRow = $('<div class="cell small-12 te-m-row"></div>');

        $newRow.append($target[0].outerHTML);

        // Get the parent row.
        var $parentRow = $this.closest('.table-m__row');

        // If the parent already has .te content, then append the new content
        // after those siblings. Otherwise, just append after the parent.
        if ($parentRow.find('.te-m-row').length > 0) {
          $parentRow.find('.te-m-row').last().after($newRow);
        } else {
          $parentRow.append($newRow);
        }

        // Remove the original target.
        $target.remove();
      }

    });

    // When the user clicks on a TE link, toggle the TE content and the ARIA
    // attribute on the link.
    $teLinks.on('click', function(e) {
      e.preventDefault();

      var $this = $(this);
      var target = $this.attr('data-te-target');

      // If clicking on a TE that is not yet expanded, first collapse all other
      // TEs.
      if ($this.attr('aria-expanded') == 'false') {
        $('.te:visible').slideToggle();
        $('.te-link[aria-expanded="true"]').attr('aria-expanded', 'false');
      }

      // Toggle the content.
      $('div[data-te-id="' + target + '"]').slideToggle();
      
      // Below tabindex and focus added for accessibility tkt. EOOV-9834
      //$('div[data-te-id="' + target + '"]').attr('tabindex', '0');
      //$('div[data-te-id="' + target + '"]').focus();

      // Toggle the ARIA attribute.
      $this.attr('aria-expanded', function (i, attr) {
        return attr == 'true' ? 'false' : 'true'
      });
	  setTimeout(function() {
		$('div[data-te-id="' + target + '"] .te__close').focus();
	  },2000);
    })

    // When the user clicks on the TE close button, hide the TE content,
    // and toggle the ARIA attribute on the associated TE link.
    $('.te__close').on('click', function() {
      var $this = $(this);

      // Toggle the content.
      $this.closest('.te').slideToggle();

      // Locate the TE link so that we can toggle the aria-expanded attribute.
      var teId = $this.parent().attr('data-te-id');
      var $teToggle = $teLinks.filter(function() {
        return $(this).attr('data-te-target') == teId;
      });

      $teToggle.attr('aria-expanded', 'false');
	  $teToggle.focus();
    })
	//EOOV-15880 issue #3 fix
	$sbsbodylist = $('.sbs__body .field--name-field-body a[title^="Opens to a new"]');
	$sbsbodylist.each(function() {
		$sbsbody = $(this);
		$sbsbody.attr("title",'');
		$sbsbody.attr("aria-label",$sbsbody.text());
	});
  });

})(jQuery, Drupal);
;
/**
 * @file
 * Placeholder file for custom footer fixes.
 *
 */
// gnav header div issue in privacy UAT
var vGNAVDiv = 0;
var vWaitForGNAVDiv = setInterval(function () {
  console.log('set Interval vWaitForGNAVDiv...');
  if (jQuery('#gnav20-header-end').length > 0) {
    // EOOV-14795  ‘Skip to main content’ link is not keyboard operable.
    //jQuery('#gnav20-header-end').hide();
    clearInterval(vWaitForGNAVDiv);
    console.log('cleared vWaitForGNAVDiv...');
  }
  vGNAVDiv++;
  // wait for desired seconds for rest of the pages and end interval
  if (vGNAVDiv > 1000) {
    console.log('clearing interval gnav div for not found!!!');
    clearInterval(vWaitForGNAVDiv);
  }
}, 2);
// gnav header div issue in privacy UAT
jQuery(document).ajaxComplete(function(event, xhr, settings) {
	if ( jQuery('.node--type-article').length > 0 ) {
		if (jQuery('[name="settings[block_form][field_ai_headline][0][value]"]').length > 0
			&& jQuery('[class*="form-item-settings-block-form-body-0-value"]').length > 0) {
			//console.log('555555')
			jQuery('[name="settings[block_form][field_ai_headline][0][value]').on('keyup', function() {
				//console.log('55555')
				var vCharacterLimit = 60;
				if (jQuery('[name="settings[block_form][field_ai_headline][0][value]"]').val().length > parseInt(vCharacterLimit)) {
					if (jQuery('[name="[field_article_body_headline]--error"]').length == 0) {
						jQuery('<label name="[field_article_body_headline]--error" aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for body headline.<\/label>')
							.insertAfter($('[name="settings[block_form][field_ai_headline][0][value]"]'));
							console.log('body validation not passed!');
					}
				}
				else {
					jQuery('[name="[field_article_body_headline]--error"]').remove();
				}
			});
		}


		// article hero additional links 60 character limit check
		if (jQuery('[name="settings[block_form][field_block_article_media][media_library_selection]"]').length > 0
			&& jQuery('[name="settings[block_form][field_hero_title][0][value]"]').length > 0
			&& jQuery('[id^="field-hero-links-values"]').length > 0) {

				var vCharacterLimit = 60;
				// remove error labels initially
				//jQuery('[name^="[field_hero_links]["], [namejQuery="[title]--error"]').remove();
				jQuery('[name^="settings[block_form][field_hero_links]["][name$="][title]"]').on('keyup', function() {
					if (jQuery(this).length > 0
						&& jQuery(this).val().length > parseInt(vCharacterLimit)) {
							console.log('exceeds !!!');
							//check if already error msg exists
							if (jQuery(this).next('label.error').length == 0) {
								jQuery('<label aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
									.insertAfter(jQuery(this));
							}
							console.log('validation not passed!');
					}
					else {
						jQuery(this).next('label.error').remove();
					}
				}); //keyup
		} // article hero additional links 60 character limit check
	}

	// article lp addln resources check
	if ( $('.node--type-article-landing-page').length > 0 ) {
    // article lp additional links 60 character limit check
    if ($('[id^="field-hero-links-values"]').length > 0) {

        var vCharacterLimit = 60;
				// remove error labels initially
				//jQuery('[name^="[field_hero_links]["], [namejQuery="[title]--error"]').remove();
				jQuery('[name^="settings[block_form][field_hero_links]["][name$="][title]"]').on('keyup', function() {
					if (jQuery(this).length > 0
						&& jQuery(this).val().length > parseInt(vCharacterLimit)) {
							console.log('exceeds !!!');
							//check if already error msg exists
							if (jQuery(this).next('label.error').length == 0) {
								jQuery('<label aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
									.insertAfter(jQuery(this));
							}
							console.log('validation not passed!');
					}
					else {
						jQuery(this).next('label.error').remove();
					}
				}); //keyup
		} // article lp additional links 60 character limit check
	}
	// article lp addln resources check


	if (jQuery(window).width() > 1024 ) {
    vzc_tooltip_desktop_vds_3();
  }

});
// NOD fraudulent banner on preview page
jQuery(document).ajaxComplete(function(event, xhr, settings) {
	var vCheck = sessionStorage.getItem("vzc_nod_fraud_submission_needed");
	if ((vCheck !== "undefined" && vCheck == 'yes') && ($('[id^="confNODTitle"]').length > 0)
		&& (jQuery('form[id^="webform-submission-wireline-personal-and-business-c"]').length > 0
		|| jQuery('form[id^="webform-submission-wireless-consumer-business-custo"]').length > 0)) {
		var vBannerContent = '<div tabindex="0" id="divNodMainBanner" class="nod-banner">' +
'<div class="nod-banner_container grid-container"><div class="nod-banner__body"><div class="nod-banner__img">' +
'<img aria-hidden="true" src="/about/privacy/themes/custom/vzpp/images/info.svg"><\/div>' +
'<div class="nod-banner__content"><p id="divFclaimBanner"><span class="bold">' +
'If you indicated that you have been a victim of Identity theft or fraud, ' +
'you must also complete and submit a <a href="/about/account-security/file-a-fraud-claim" target="_blank" rel="noopener noreferrer"><b><u>fraud claim<\/u><\/b><\/a><\/p><\/div>' +
'<div id="divNodBannerCloseButton" onclick="javascript:jQuery(\'#divNodMainBanner\').hide();">' +
'<div id="spnNodBannerCloseButton" class="nod-banner__close" tabindex="0"><span class="close__img"><\/span><\/div><\/div><\/div><\/div><\/div>';
		//jQuery("#vz-gh20").prepend(vBannerContent);
		var vWaitForHeaderMenuLoad = setInterval(function () {
			//console.log('set Interval...');
			if (jQuery('#vz-gh20').length > 0) {
				clearInterval(vWaitForHeaderMenuLoad);
				//jQuery("#vz-gh20").prepend(vBannerContent);
				if (jQuery('[id^="divNodMainBanner"]').length == 0) {
					jQuery(vBannerContent).insertAfter("#vz-gh20");
					jQuery('[id^="divNodMainBanner"]').focus();
				}

				/*
				var $divTooltip = jQuery('<div id="divActualTooltip"></div>').css({
					position: 'absolute',
					background: 'white',
					border: '1px solid black',
					padding: '10px',
					zIndex: 999,
					display: 'none',
					width: '45%',
					height: 'auto'
				}).appendTo('body');

				jQuery('#spnBannerTooltip')
				.mousemove(function(e) {
					// left position calculation
					var winWid = parseInt(jQuery(window).width() / 2);
					var divWid = parseInt(jQuery('#divActualTooltip').width() / 2);
					// for mobile devices set left 5px
					if ( jQuery(window).width() < 767 ) {
						$divTooltip.css({
							top: e.pageY + 10 + 'px',
							left: '18px'
						});
					}
					else {
						$divTooltip.css({
							top: e.pageY + 10 + 'px',
							//left: e.pageX + 10 + 'px'
							left: (winWid - divWid) + 'px'
						});
					}
				})
				.hover(function() {
					var divHtml = '';
					if (jQuery('[id^="webform-submission-business-fraud-claim"]').length > 0) {
						divHtml = '<div id="divTooltipDesc">Before you get started, here is what you will need.<br/><br/><b>Two forms of ID are required:</b> One of which must be a government issued photo ID of the authorized party.<br/><br/>The second can be from the list below:<br/><br/><b>Business license:</b> Must be valid and current.<br/><br/><b>Registry of a non-profit organization:</b> Issued by the Attorney General.<br/><br/><b>Notarized business lease:</b> Proof of address is official documentation of your business’s main address.  This helps us to validate your business against the account.<br/><br/><b>Articles of Incorporation:</b> Only the first 3 pages are needed.<br/><br/><b>Certificate of good standing/formation:</b> Issued by Secretary of State. Go to website to validate first. If not active on SOS a letter will need to be provided showing an update was requested.<br/><br/><b>Copy of filed police report detailing the identity theft:</b> Identity theft is a crime. Therefore, we need you file a police report. If you know who used your identity, you must provide that information. It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft. You will need to provide a copy of this report in order to complete your claim.<br/><br/>All documents must be submitted in non-editable format (ie., jpeg, png or pdf) and sized under 2MB per document upload.</div>';
					}
					else if (jQuery('[id^="webform-submission-consumer-fraud-claim"]').length > 0) {
						divHtml = '<div id="divTooltipDesc">Before you get started, here is what you will need.<br/><br/><b>Proof of identity:</b> A current copy of a government-issued form of identification.<br/><br/><b>Proof of residence:</b> For the period of time when the event occurred such as a rental lease, mortgage agreement or a utility bill for the address in your name and showing the date.<br/><br/><b>Police report:</b> Identity theft is a crime. Therefore, we need you file a police report. If you know who used your identity, you must provide that information. It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft.<br/><br/>You will need to provide a copy of this report in order to complete your claim.<br/><br/>All documents must be submitted in non-editable format (ie., jpeg, png or pdf) and sized under 2MB per document upload.</div>';
					}
					$divTooltip.show().html(divHtml);
				}, function() {
					$divTooltip.hide();
				});
				*/

				jQuery("#divNodBannerCloseButton").keypress(function (e) {
				 var key = e.which;
				 if(key == 13)  // the enter key code
					{
						jQuery("#divNodMainBanner").hide();
						return false;
					}
				});

				/*
				jQuery("#spnBannerTooltip").keypress(function (e) {
				 var key = e.which;
				 if(key == 13)  // the enter key code
					{
						jQuery("#divActualTooltip").toggle();
						return false;
					}
				});
				*/

				//window scroll add sticky class
				jQuery(window).scroll(function() {
					if (jQuery('#divNodMainBanner').offset().top == 0 && jQuery('#divNodMainBanner').offset().left == 0) {
						jQuery('#divNodMainBanner').removeClass('nod-sticky-banner');
					}
					else {
						jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
					}
				});

				//mouse wheel add sticky class
				jQuery(window).on('wheel', function(event) {
					// deltaY obviously records vertical scroll, deltaX and deltaZ exist too.
					// this condition makes sure it's vertical scrolling that happened
					if(event.originalEvent.deltaY !== 0) {

						if(event.originalEvent.deltaY < 0) {
							// wheeled up
							jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
						}
						else {
							// wheeled down
							jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
						}
					}
					if (jQuery('#divNodMainBanner').offset().top == 0 && jQuery('#divNodMainBanner').offset().left == 0) {
						jQuery('#divNodMainBanner').removeClass('nod-sticky-banner');
					}
				});

				//keydown and keyup add sticky class
				jQuery(window).keydown(function(event){
					if (event.keyCode == 40) {
						jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
					}
					if (jQuery('#divNodMainBanner').offset().top == 0 && jQuery('#divNodMainBanner').offset().left == 0) {
						jQuery('#divNodMainBanner').removeClass('nod-sticky-banner');
					}
				});
				jQuery(window).keyup(function(event){
					if (event.keyCode == 38) {
						jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
					}
					if (jQuery('#divNodMainBanner').offset().top == 0 && jQuery('#divNodMainBanner').offset().left == 0) {
						jQuery('#divNodMainBanner').removeClass('nod-sticky-banner');
					}
				});

				// ios swipe add stick class
				document.addEventListener('touchstart', handleTouchStart, false);
				document.addEventListener('touchmove', handleTouchMove, false);
				var xDown = null;
				var yDown = null;

				function getTouches(evt) {
					return evt.touches ||             // browser API
						evt.originalEvent.touches; // jQuery
				}

				function handleTouchStart(evt) {
					const firstTouch = getTouches(evt)[0];
					xDown = firstTouch.clientX;
					yDown = firstTouch.clientY;
				};
				function handleTouchMove(evt) {
					if ( ! xDown || ! yDown ) {
						return;
					}

					var xUp = evt.touches[0].clientX;
					var yUp = evt.touches[0].clientY;

					var xDiff = xDown - xUp;
					var yDiff = yDown - yUp;

					if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
						if ( xDiff > 0 ) {
							/* right swipe */
						} else {
							/* left swipe */
						}
					} else {
						jQuery('#divNodMainBanner').addClass('nod-sticky-banner');
						if ( yDiff > 0 ) {
							/* down swipe */
							//console.log('swipe down !!!');
						} else {
							/* up swipe */
							//console.log('swipe UP !!!');
						}
					}
					if (jQuery('#divNodMainBanner').offset().top == 0 && jQuery('#divNodMainBanner').offset().left == 0) {
						jQuery('#divNodMainBanner').removeClass('nod-sticky-banner');
					}
					/* reset values */
					xDown = null;
					yDown = null;
				};

			}
		}, 1);
	} // if
});

//fclaim banner
if (jQuery('[id^="webform-submission-business-fraud-claim"]').length > 0 || jQuery('[id^="webform-submission-consumer-fraud-claim"]').length > 0) {
  var vBannerContent = '<div id="divMainBanner" class="privacy-banner"><div class="privacy-banner_container"><div class="privacy-banner__body"><div class="privacy-banner__img"><img aria-hidden="true" src="/about/privacy/themes/custom/vzpp/images/security-check-icon.png"><\/div><div class="privacy-banner__content"><p id="divFclaimBanner"><span class="bold">You will need two forms of ID to submit your claim<\/span><span id="spnBannerTooltip" role="tooltip" tabindex="0"><i class="fa fa-info-circle"><\/i><\/span><br \/>This form is set to timeout after 15 minutes of inactivity.<\/p><\/div><div id="divBannerCloseButton" onclick="javascript:jQuery(\'#divMainBanner\').hide();"><div id="spnBannerCloseButton" class="privacy-banner__close" tabindex="0"><span class="close__img"><\/span><\/div><\/div><\/div><\/div><\/div>';
  //jQuery("#vz-gh20").prepend(vBannerContent);
  var vWaitForHeaderMenuLoad = setInterval(function () {
    //console.log('set Interval...');
    if (jQuery('#vz-gh20').length > 0) {
      clearInterval(vWaitForHeaderMenuLoad);
      //jQuery("#vz-gh20").prepend(vBannerContent);
      jQuery(vBannerContent).insertBefore("#vz-gh20");

      var $divTooltip = jQuery('<div id="divActualTooltip"></div>').css({
        position: 'absolute',
        background: 'white',
        border: '1px solid black',
        padding: '10px',
        zIndex: 999,
        display: 'none',
        width: '45%',
        height: 'auto'
      }).appendTo('body');

      jQuery('#spnBannerTooltip')
      .mousemove(function(e) {
        // left position calculation
        var winWid = parseInt(jQuery(window).width() / 2);
        var divWid = parseInt(jQuery('#divActualTooltip').width() / 2);
        // for mobile devices set left 5px
        if ( jQuery(window).width() < 767 ) {
          $divTooltip.css({
            top: e.pageY + 10 + 'px',
            left: '18px'
          });
        }
        else {
          $divTooltip.css({
            top: e.pageY + 10 + 'px',
            //left: e.pageX + 10 + 'px'
            left: (winWid - divWid) + 'px'
          });
        }
      })
      .hover(function() {
        var divHtml = '';
        if (jQuery('[id^="webform-submission-business-fraud-claim"]').length > 0) {
          divHtml = '<div id="divTooltipDesc">Before you get started, here is what you will need.<br/><br/><b>Two forms of ID are required:</b> One of which must be a government issued photo ID of the authorized party.<br/><br/>The second can be from the list below:<br/><br/><b>Business license:</b> Must be valid and current.<br/><br/><b>Registry of a non-profit organization:</b> Issued by the Attorney General.<br/><br/><b>Notarized business lease:</b> Proof of address is official documentation of your business’s main address.  This helps us to validate your business against the account.<br/><br/><b>Articles of Incorporation:</b> Only the first 3 pages are needed.<br/><br/><b>Certificate of good standing/formation:</b> Issued by Secretary of State. Go to website to validate first. If not active on SOS a letter will need to be provided showing an update was requested.<br/><br/><b>Copy of filed police report detailing the identity theft:</b> Identity theft is a crime. Therefore, we need you file a police report. If you know who used your identity, you must provide that information. It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft. You will need to provide a copy of this report in order to complete your claim.<br/><br/>All documents must be submitted in non-editable format (ie., jpeg, png or pdf). <b>The size of each uploaded file must be under 2MB.</b></div>';
        }
        else if (jQuery('[id^="webform-submission-consumer-fraud-claim"]').length > 0) {
          divHtml = '<div id="divTooltipDesc">Before you get started, here is what you will need.<br/><br/><b>Proof of identity:</b> A current copy of a government-issued form of identification.<br/><br/><b>Proof of residence:</b> For the period of time when the event occurred such as a rental lease, mortgage agreement or a utility bill for the address in your name and showing the date.<br/><br/><b>Police report:</b> Identity theft is a crime. Therefore, we need you file a police report. If you know who used your identity, you must provide that information. It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft.<br/><br/>You will need to provide a copy of this report in order to complete your claim.<br/><br/>All documents must be submitted in non-editable format (ie., jpeg, png or pdf). <b>The size of each uploaded file must be under 2MB.</b></div>';
        }
        $divTooltip.show().html(divHtml);
      }, function() {
        $divTooltip.hide();
      });

      jQuery("#divBannerCloseButton").keypress(function (e) {
       var key = e.which;
       if(key == 13)  // the enter key code
        {
          jQuery("#divMainBanner").hide();
          return false;
        }
      });

      jQuery("#spnBannerTooltip").keypress(function (e) {
       var key = e.which;
       if(key == 13)  // the enter key code
        {
          jQuery("#divActualTooltip").toggle();
          return false;
        }
      });

      //window scroll add sticky class
      jQuery(window).scroll(function() {
        if (jQuery('#divMainBanner').offset().top == 0 && jQuery('#divMainBanner').offset().left == 0) {
          jQuery('#divMainBanner').removeClass('sticky-banner');
        }
        else {
          jQuery('#divMainBanner').addClass('sticky-banner');
        }
      });

      //mouse wheel add sticky class
      jQuery(window).on('wheel', function(event) {
        // deltaY obviously records vertical scroll, deltaX and deltaZ exist too.
        // this condition makes sure it's vertical scrolling that happened
        if(event.originalEvent.deltaY !== 0) {

          if(event.originalEvent.deltaY < 0) {
            // wheeled up
            jQuery('#divMainBanner').addClass('sticky-banner');
          }
          else {
            // wheeled down
            jQuery('#divMainBanner').addClass('sticky-banner');
          }
        }
        if (jQuery('#divMainBanner').offset().top == 0 && jQuery('#divMainBanner').offset().left == 0) {
          jQuery('#divMainBanner').removeClass('sticky-banner');
        }
      });

      //keydown and keyup add sticky class
      jQuery(window).keydown(function(event){
        if (event.keyCode == 40) {
          jQuery('#divMainBanner').addClass('sticky-banner');
        }
        if (jQuery('#divMainBanner').offset().top == 0 && jQuery('#divMainBanner').offset().left == 0) {
          jQuery('#divMainBanner').removeClass('sticky-banner');
        }
      });
      jQuery(window).keyup(function(event){
        if (event.keyCode == 38) {
          jQuery('#divMainBanner').addClass('sticky-banner');
        }
        if (jQuery('#divMainBanner').offset().top == 0 && jQuery('#divMainBanner').offset().left == 0) {
          jQuery('#divMainBanner').removeClass('sticky-banner');
        }
      });

      // ios swipe add stick class
      document.addEventListener('touchstart', handleTouchStart, false);
      document.addEventListener('touchmove', handleTouchMove, false);
      var xDown = null;
      var yDown = null;

      function getTouches(evt) {
        return evt.touches ||             // browser API
          evt.originalEvent.touches; // jQuery
      }

      function handleTouchStart(evt) {
        const firstTouch = getTouches(evt)[0];
        xDown = firstTouch.clientX;
        yDown = firstTouch.clientY;
      };
      function handleTouchMove(evt) {
        if ( ! xDown || ! yDown ) {
          return;
        }

        var xUp = evt.touches[0].clientX;
        var yUp = evt.touches[0].clientY;

        var xDiff = xDown - xUp;
        var yDiff = yDown - yUp;

        if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
          if ( xDiff > 0 ) {
            /* right swipe */
          } else {
            /* left swipe */
          }
        } else {
          jQuery('#divMainBanner').addClass('sticky-banner');
          if ( yDiff > 0 ) {
            /* down swipe */
            //console.log('swipe down !!!');
          } else {
            /* up swipe */
            //console.log('swipe UP !!!');
          }
        }
        if (jQuery('#divMainBanner').offset().top == 0 && jQuery('#divMainBanner').offset().left == 0) {
          jQuery('#divMainBanner').removeClass('sticky-banner');
        }
        /* reset values */
        xDown = null;
        yDown = null;
      };

    }
  }, 1);
} // if

// privacy inquiries
/*
if (jQuery('[id^="webform-submission-privacy-inquiries"]').length > 0) {
  // hide server side error
  var vPriInqErrorLoad = 0;
  var vWaitForPriInqErrorLoad = setInterval(function () {
    //console.log('set Interval...');
    if (jQuery('[data-drupal-messages]:contains("error")').length > 0) {
      clearInterval(vWaitForPriInqErrorLoad);
      //jQuery('[data-drupal-messages]:contains("error")').hide();
      jQuery('[data-drupal-messages] [role="alert"]').contents()[2].textContent = 'This form contains errors: ';
      jQuery('[data-drupal-messages] [role="alert"]').contents()[4].textContent = '  Please review and resubmit.';
    }
    vPriInqErrorLoad++;
    // wait for desired seconds for rest of the pages and end interval
      if (vPriInqErrorLoad > 750) {
        console.log('clearing interval privacy inquiries error message!!!');
        clearInterval(vWaitForPriInqErrorLoad);
      }
  }, 1);
}
*/

function vz_count_char(val) {
  var len = val.value.length;
  jQuery('#detailed_summary_char_counter').text(len + '/1000');
  /* if (len >= 500) {
    val.value = val.value.substring(0, 500);
  } else {
    jQuery('#charNum').text(500 - len);
  } */
};

function vz_count_char_withlimit(val, tagid, limit) {
  var len = val.value.length;
  jQuery('#' + tagid).text(len + '/' + limit);
};

//dynamic blog LP h2 tag change
jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row .article_hero__headline h1').each(function( index2 ) {
  jQuery(this).prop('outerHTML', vzc_wysiwyg_custom_replaceTag(jQuery(this), 'span'));
});
jQuery('li.pager__item a').addClass('but_article_lp_load_more');
jQuery('li.pager__item a').text('Load more');
jQuery('li.pager__item a').attr('aria-label', 'Load more articles');

// removing img tag alt attribute
jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .article_hero__media .field--name-field-block-article-media img').attr('alt', '');

jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-field-rendered-entity').each(function( index2 ) {
  if (jQuery(this).find('.article_hero__headline a').length == 0) {
    var vHref = jQuery(this).next('.views-field-view-node').find('a').attr('href');
    var aHtml = '<a href="' + vHref + '">' + jQuery(this).find('.article_hero__headline').html() + '</a>';
    jQuery(this).find('.article_hero__headline').html(aHtml);
  }
  // add aria label to a tag
  jQuery(this).next('.views-field-view-node').find('a').attr('aria-label', 'Read article ' + jQuery(this).find('.span_article_lp_headline').text().trim());
});

// making the headling anchor not reachable using keyboard tab
jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-field-rendered-entity .article_hero__headline a').attr('tabindex', '-1')

jQuery(document).ajaxComplete(function(event, xhr, settings) {
  jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row .article_hero__headline h1').each(function( index2 ) {
    jQuery(this).prop('outerHTML', vzc_wysiwyg_custom_replaceTag(jQuery(this), 'span'));
  });
  jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row .article_hero__headline span').addClass('span_article_lp_headline');
  jQuery('li.pager__item a').addClass('but_article_lp_load_more');

  // removing img tag alt attribute
  jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .article_hero__media .field--name-field-block-article-media img').attr('alt', '');

  jQuery('li.pager__item a').text('Load more');
  jQuery('li.pager__item a').attr('aria-label', 'Load more articles');
  jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-field-rendered-entity').each(function( index2 ) {
		if (jQuery(this).find('.article_hero__headline a').length == 0) {
			var vHref = jQuery(this).next('.views-field-view-node').find('a').attr('href');
			var aHtml = '<a href="' + vHref + '">' + jQuery(this).find('.article_hero__headline').html() + '</a>';
			jQuery(this).find('.article_hero__headline').html(aHtml);
		}
		// add aria label to a tag
    jQuery(this).next('.views-field-view-node').find('a').attr('aria-label', 'Read article ' + jQuery(this).find('.span_article_lp_headline').text().trim());
	});

	// making the headling anchor not reachable using keyboard tab
	jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-field-rendered-entity .article_hero__headline a').attr('tabindex', '-1')
});
// accessibility fix for article lp, on load more click next read more to have focus
if ( jQuery('.node--type-article-landing-page').length > 0 ) {
	var vFocusIndex = -1;
	jQuery('li.pager__item a').on('click', function() {
		vFocusIndex = jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row').length;
		console.log('on click....'+vFocusIndex);
	});

	jQuery(document).ajaxComplete(function(event, xhr, settings) {
		if (jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row:eq(' + vFocusIndex + ') .views-field-view-node a').length > 0) {
			jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row:eq(' + vFocusIndex + ') .views-field-view-node a').focus();
		}
		jQuery('li.pager__item a').bind('click', (function( event, index ) {
			vFocusIndex = jQuery('.node--type-article-landing-page .block-views-blockarticle-block-list-block-1 .views-row').length;
			console.log('ajax bind click....'+vFocusIndex);
		}));
	});
}

jQuery(document).ajaxComplete(function(event, xhr, settings) {
  console.log('ajax complete in authoring pages with mobile tooltip');
  //mobile tooltip
  if ($(window).width() < 767) {
    //for specific tooltip modification ex., fraud claim police report
    console.log('ajax mobile tooltip ');
    vzc_tooltip_desktop_vds_3_mobile();
  }
  //end of mobile tooltip
  if (jQuery('.ui-dialog.ui-widget.ui-widget-content[role="dialog"]').length > 0) {
    setTimeout(function() {
      fnAuthoringLayoutModalTopAdjust();
    }, 330);
  }
});

function fnAuthoringLayoutModalTopAdjust() {
  var vstyle = jQuery('.ui-dialog.ui-widget.ui-widget-content[role="dialog"]').attr('style');
  console.log("vstyle before="+vstyle);
  if (vstyle.indexOf("!important") == -1) {
    var temp_1half = vstyle.substring(0, vstyle.indexOf("top: ")+5);
    var temp_2half = vstyle.substring(vstyle.indexOf("top: ")+5);
    vstyle = temp_1half + (parseFloat(temp_2half.substring(0, temp_2half.indexOf('px;'))) + parseFloat(24)) + 'px !important; ' + temp_2half.substring(temp_2half.indexOf('px;')+3);
    console.log("vstyle after="+vstyle);
    jQuery('.ui-dialog.ui-widget.ui-widget-content[role="dialog"]').attr('style', vstyle);
  }
}
// accessibility fix for article lp, on load more click next read more to have focus
//EOOV-10541
jQuery(document).ready(function() {
  //file-a-fraud fix EOOV-14010
  if (location.href.match(/(\/about\/privacy\/account\-security\/file\-a\-fraud\-claim|\/about\/account\-security\/file\-a\-fraud\-claim)/i)) {
    $('.layout__region a:eq(0)').attr('onclick', 'javascript:fnLegalAgreement(1);'); // 1 - consumer
    $('.layout__region a:eq(1)').attr('onclick', 'javascript:fnLegalAgreement(2);'); // 2 - business
    $('.layout__region a').attr('href', 'javascript:void(0);');
  }
	// dynamic blog articles remove footer
	jQuery('.node--type-article .footer-container').remove();
	// dynamic blog articles remove footer

  // dynamic blog articles lp remove footer
	jQuery('.node--type-article-landing-page .footer-container').remove();
	// dynamic blog articles lp remove footer
	//dynamic blog min 2 H2 for article body headling validation on save layout
	if ($('.node--type-article').length > 0 && $('#layout-builder.layout-builder').length > 0) {
		//console.log('inside save layout validation');

		$('#edit-submit').click(function(e) {
			//console.log('inside submit.....');
			if ($('.article_body__headline h2').length >= 2) {
				console.log('body h2 is >= 2');
				$('[name="[field_article_body_headline][No_max]--error"]').remove();
				return true
			}
			else {
				console.log('body h2 is less than 2');
				if ($('[name="[field_article_body_headline][No_max]--error"]').length == 0) {
					$('<label name="[field_article_body_headline][No_max]--error" aria-live="polite" class="error" style="color: red">Please add minimum of two article body headline.<\/label>')
						.insertAfter($('[id^="edit-actions"]'));
				}
				return false;
			}
		});
	}
	//dynamic blog min 2 H2 for article body headling validation on save layout

	// dynamic blog common script
	//Updating left nav bookmarks
	var vCombinedBMList = '';//<div class="book_mark link"><a class="book_mark_resources" href="/">What is gaming?</a></div>
	$('.main-content h2:not(.visually-hidden)').each(function( index2 ) {
		$(this).attr('id', 'article_blog_bm_'+index2)
		var vText = $(this).text().replace(/(\r\n|\n|\r)/gm, "");
		vText = vText.replace(/\r?\n|\r/g, "");
		vText = vText.trim();
		vCombinedBMList += '<div class="book_mark link"><a class="book_mark_resources" href="#article_blog_bm_' + index2 + '">' + vText + '</a></div>';
		console.log('vText='+vText);
	})
	console.log(vCombinedBMList);
	$('.article_hero_heading_bookmark').html(vCombinedBMList);
	// end of left nav bookmarks

	// default highlight first bookmark
	$('.book_mark_resources:first').addClass('article_bm_active');
	// onclick bookmark anchor highlight class
	$('.book_mark_resources').click(function() {
		$('.book_mark_resources').removeClass('article_bm_active');
		$(this).addClass('article_bm_active');
	})
	// end of anchor highlight class

	if ($('.article_hero_heading_bookmark').length > 0) {
		var vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
		var vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

		//window scroll add sticky class
		$(window).scroll(function() {
			//console.log(($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()));
			//console.log('top::'+$('.article_hero_heading_bookmark').offset().top);
			//console.log('window scrollTop::'+$(window).scrollTop());
			if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
				|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
					$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
					$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
					//console.log('class added !!! edited');
				}
			}

			//console.log('vPrevStickyTop='+vPrevStickyTop);
			//console.log('offset top='+$('.article_hero_heading_bookmark').offset().top);
			if (parseInt(vPrevStickyTop) > parseInt($('.article_hero_heading_bookmark').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
				console.log('class removed !!! edited');
				vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
			}

			// restricting sticky not crossing main-content ie., skipping sticky display in footer section
			vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

			if (parseInt(vPrevStickyTop_End) > parseInt($('#vz-gf20').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
			}
		});


		//mouse wheel add sticky class
		$(window).on('wheel', function(event) {
			// deltaY obviously records vertical scroll, deltaX and deltaZ exist too.
			// this condition makes sure it's vertical scrolling that happened
			if(event.originalEvent.deltaY !== 0) {

				if(event.originalEvent.deltaY < 0) {
					// wheeled up
					if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
						if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
						|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
							$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
							$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
							//console.log('class added !!! edited');
						}
					}
				}
				else {
					// wheeled down
					if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
						if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
						|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
							$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
							$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
							//console.log('class added !!! edited');
						}
					}
				}
			}
			if (parseInt(vPrevStickyTop) > parseInt($('.article_hero_heading_bookmark').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
				//console.log('class removed !!! edited');
				vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
			}
			// restricting sticky not crossing main-content ie., skipping sticky display in footer section
			vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

			if (parseInt(vPrevStickyTop_End) > parseInt($('#vz-gf20').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
			}

		});

		//keydown and keyup add sticky class
		$(window).keydown(function(event){
			if (event.keyCode == 40) {
				if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
					if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
					|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
						$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
						$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
						//console.log('class added !!! edited');
					}
				}
			}
			if (parseInt(vPrevStickyTop) > parseInt($('.article_hero_heading_bookmark').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
				//console.log('class removed !!! edited');
				vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
			}
			// restricting sticky not crossing main-content ie., skipping sticky display in footer section
			vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

			if (parseInt(vPrevStickyTop_End) > parseInt($('#vz-gf20').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
			}

		});
		$(window).keyup(function(event){
			if (event.keyCode == 38) {
				if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
					if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
					|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
						$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
						$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
						//console.log('class added !!! edited');
					}
				}
			}
			if (parseInt(vPrevStickyTop) > parseInt($('.article_hero_heading_bookmark').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
				//console.log('class removed !!! edited');
				vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
			}
			// restricting sticky not crossing main-content ie., skipping sticky display in footer section
			vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

			if (parseInt(vPrevStickyTop_End) > parseInt($('#vz-gf20').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
			}

		});

		// ios swipe add stick class
		document.addEventListener('touchstart', handleTouchStart, false);
		document.addEventListener('touchmove', handleTouchMove, false);
		var xDown = null;
		var yDown = null;

		function getTouches(evt) {
			return evt.touches ||             // browser API
				evt.originalEvent.touches; // $
		}

		function handleTouchStart(evt) {
			const firstTouch = getTouches(evt)[0];
			xDown = firstTouch.clientX;
			yDown = firstTouch.clientY;
		};
		function handleTouchMove(evt) {
			if ( ! xDown || ! yDown ) {
				return;
			}

			var xUp = evt.touches[0].clientX;
			var yUp = evt.touches[0].clientY;

			var xDiff = xDown - xUp;
			var yDiff = yDown - yUp;

			if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {
				if ( xDiff > 0 ) {
					// right swipe
				} else {
					// left swipe
				}
			} else {
				if (!$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
					if (($('.article_hero_heading_bookmark').offset().top + $('.article_hero_heading_bookmark').height()) < $(window).scrollTop()
					|| ($('.article_hero_heading_bookmark').offset().top >= $(window).scrollTop()) ) {
						$('.article_hero_heading_bookmark').parent().addClass('sticky-article-bookmark');
						$('.article_hero__addln_resources').parent().addClass('sticky-article-addln_resources');
						//console.log('class added !!! edited');
					}
				}
				if ( yDiff > 0 ) {
					// down swipe
					//console.log('swipe down !!!');
				} else {
					// up swipe
					//console.log('swipe UP !!!');
				}
			}
			if (parseInt(vPrevStickyTop) > parseInt($('.article_hero_heading_bookmark').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
				//console.log('class removed !!! edited');
				vPrevStickyTop = $('.article_hero_heading_bookmark').offset().top;
			}
			// restricting sticky not crossing main-content ie., skipping sticky display in footer section
			vPrevStickyTop_End = parseInt($('.article_hero_heading_bookmark').offset().top) + parseInt($('.article_hero_heading_bookmark').height());

			if (parseInt(vPrevStickyTop_End) > parseInt($('#vz-gf20').offset().top) &&
			$('.article_hero_heading_bookmark').parent().hasClass('sticky-article-bookmark')) {
				$('.article_hero_heading_bookmark').parent().removeClass('sticky-article-bookmark');
				$('.article_hero__addln_resources').parent().removeClass('sticky-article-addln_resources');
			}

			// reset values
			xDown = null;
			yDown = null;
		};
	}
	// sticky ends
	// dynamic blog common script

  // privacy inquiries error placement and disable copy paste for email fields
  /*
  if (jQuery('[id^="webform-submission-privacy-inquiries"]').length > 0) {
    jQuery('.fieldset-wrapper').each(function( index2 ) {
      //console.log('1='+jQuery(this).children().length);
      //console.log('2='+jQuery(this).children('[class^="js-"]').length);
      if (jQuery(this).children().length != jQuery(this).children('[class^="js-"]').length) {
        jQuery(this).children(0).addClass('form-item--error-message');
        jQuery(this).append(jQuery(this).children(0).prop("outerHTML"));
        jQuery(this).children(':first-child').hide();
      }
    });

    jQuery( '[name="email_address[mail_1]"], [name="email_address[mail_2]"]' ).on( "copy cut paste drop", function() {
      return false;
    });

    jQuery( '[name="email_address[mail_1]"], [name="email_address[mail_2]"]' ).attr('autocomplete', 'off');

    //privacy inquiries, textarea character count
    jQuery('[id^="edit-process-key"]').append('<div id="detailed_summary_char_counter">0\/1000<\/div>');
    jQuery('[id^="edit-processed-text-what-serv-req"]').append('<div id="service_req_about_char_counter">0\/60<\/div>');
    //jQuery('[id^="edit-process-key"]').after('<div id="detailed_summary_char_counter">0\/1000<\/div>');

    jQuery('[name="provide_a_detailed_summary_of_your_privacy_inquiry_"]').attr('onkeyup', 'vz_count_char(this)');
    jQuery('[name="appeal_reason"]').attr('onkeyup', 'vz_count_char(this)');
    jQuery('[name="service_privacy_request_about"]').attr('onkeyup', 'vz_count_char_withlimit(this, "service_req_about_char_counter", 60)');
    // on page load update the character count
    jQuery('#detailed_summary_char_counter').text(jQuery('[name="provide_a_detailed_summary_of_your_privacy_inquiry_"]').val().length + '/1000');

  }
  */
  // canonical tag correction EOOV-12919
  if (window.location.href.toLowerCase().indexOf('/about/privacy') == -1) {
    var vLinkCanonicalHref = jQuery('link[rel="canonical"]').attr('href');
    vLinkCanonicalHref = vLinkCanonicalHref.replace(/\/privacy/g, '');
    jQuery('link[rel="canonical"]').attr('href', vLinkCanonicalHref);
  }
  // EOOV-13607
  /* if (jQuery('ul.menu--cybersecurity-glossary').length > 0) {
    jQuery('.hero__container .hero__title').html(jQuery('.sbs__heading.h3').text());
  } */
  // EOOV-12767
  $("head").bind("DOMSubtreeModified", function() {
    $('.topic__headline-outer').attr('style', 'height: auto');
  });
  // EOOV-13153
  jQuery('ul.menu--cybersecurity-glossary').addClass('menu--tabs');
  // EOOV-13218
  jQuery('ul.menu.menu--tabs li a[class="is-active"]').attr('aria-current', 'page');

    /*
    // Data subject request form inline errors fix.
    vzc_privacy_data_subject_form_inline_errors_fix();
    // privacy-inquiries
    if (location.href.match(/(\/about\/privacy\-inquiries|\/about\/privacy\/privacy\-inquiries)/i)) {
      jQuery('[id^="edit-actions-submit"]').attr("disabled", "true");
      var vWaitForReCaptcha = setInterval(function () {
        if(grecaptcha && grecaptcha.getResponse().length > 0) {
          clearInterval(vWaitForReCaptcha);
          // check for g-captcha and other mandatory form fields
          console.log('g-captcha is checked and submit button is enabled');
          jQuery('[id^="edit-actions-submit"]').removeAttr("disabled");
        }
      }, 10);
    }
    */
    // Accessibility fixe for EOOV-11459 and EOOV-12066
    if (location.href.match(/(\/about\/accessibility\/overview|\/about\/privacy\/accessibility\/overview|\/about\/privacy)/i)) {
    //if (location.href.match(/(\/about\/accessibility\/overview|\/about\/privacy\/accessibility\/overview)/i)) {
      var vWaitForOverviewCTA = setInterval(function () {
        if (jQuery('.cta__headline.h4').length > 0) {
          clearInterval(vWaitForOverviewCTA);
          jQuery('.cta__headline.h4').each(function( index2 ) {
            //jQuery(this).contents().unwrap().wrap('<h4/>');
            //jQuery(this).replaceWith('<h4>' + jQuery(this).html() +'</h4>')
			if(location.href.match(/(\/privacy\/international\-privacy\-centre|\/about\/international\-privacy\-centre)/i)) {
				jQuery(this).prop('outerHTML', vzc_wysiwyg_custom_replaceTag(jQuery(this), 'h3'));
			}
			else {
				jQuery('.cta__headline.h4').removeClass('h4').addClass('h2');
				jQuery(this).prop('outerHTML', vzc_wysiwyg_custom_replaceTag(jQuery(this), 'h2'));
			}
            //jQuery(this).removeClass('h4').addClass('h2');
          });
			//EOOV-16069 issue #1 fix
			jQuery('.cta__headline br').attr("aria-hidden",true);
			jQuery('a.use-ajax[data-dialog-type="modal"]').attr("role",'button');
        }
      }, 10);
    }
	if (location.href.match(/(\/privacy\/terms\-conditions|\/privacy\/open\-internet|\/privacy\/accessibility|\/privacy\/consumer\-safety|\/about\/terms\-conditions|\/about\/open\-internet|\/about\/accessibility|\/about\/consumer\-safety)/i)) {
		jQuery('footer.footer div.container.footer__top-container').attr('style', 'display: none;');
	}
	//EOOV-14273 removing alt attribute from decorative image
	$(".field--name-field-block-article-media .field__item img").attr("alt","");

	// tool tip VDS3.0 EOOV-15543
	// only for desktop alone not for mobile and tablet
	if ( jQuery(window).width() > 1024 ) {
    vzc_tooltip_desktop_vds_3();
  }
  if ($(window).width() < 767) {
    //for specific tooltip modification ex., fraud claim police report
    vzc_tooltip_desktop_vds_3_mobile();
  }
  // end tool tip
  //EOOV-16156, EOOV-16325 table properties issue fix
  var $ckeditorTable = jQuery('.field--type-text-with-summary table,.field--type-text-long table');
  $ckeditorTable.each(function() {
	  var $ckTable = jQuery(this);
	  $ckTable.addClass("custom_ckeditor_table");
	  var cellpadding = $ckTable.attr("cellpadding");
	  var cellspacing = $ckTable.attr("cellspacing");
	  var $td = $ckTable.find("td");
	  var $th = $ckTable.find("th");
	  //added fix for cellspacing
	  if(typeof cellspacing!="undefined" && cellspacing!=null && cellspacing!=0) {
		var tablecss = $ckTable.attr("style");
		if(typeof tablecss!="undefined" && tablecss!=null) {
		  $ckTable.attr("style",tablecss+"; border-spacing:"+cellspacing+"px !important;"+"border-collapse: separate !important;");
		}
		else {
		  $ckTable.attr("style","border-spacing:"+cellspacing+"px !important;"+"border-collapse: separate !important;");
		}
	  }
	  //added fix for cellpadding
	  if($td.length > 0 && typeof cellpadding!="undefined" && cellpadding!=0) {
		  $td.each(function() {
			  var tdcss = $(this).attr("style");
			  if(typeof tdcss!="undefined" && tdcss!=null) {
				  let lastChar = tdcss.charAt(tdcss.length - 1);
				  tdcss = lastChar != ";" ? tdcss+';' : tdcss;
				  $(this).attr("style","padding:"+cellpadding+"px !important;"+tdcss);
			  }
			  else {
				  $(this).attr("style","padding:"+cellpadding+"px !important;");
			  }
		  });
	  }
	  if($th.length > 0 && typeof cellpadding!="undefined" && cellpadding!=0) {
		  $th.each(function() {
			  var thcss = $(this).attr("style");
			  if(typeof thcss!="undefined" && thcss!=null) {
				  let lastChar = thcss.charAt(thcss.length - 1);
				  thcss = lastChar != ";" ? thcss+';' : thcss;
				  $(this).attr("style","padding:"+cellpadding+'px !important;'+thcss);
			  }
			  else {
				  $(this).attr("style","padding:"+cellpadding+'px !important;');
			  }
		  });
	  }
  });
});

function vzc_tooltip_desktop_vds_3_mobile() {
  console.log('vzc_tooltip_desktop_vds_3_mobile called .....');
  $('span.webform-element-help.js-webform-element-help').mouseenter(function() {
    vzc_tooltip_implmn_mobile(this, $(this).parent().next().attr('name'));
  }).focus(function() {
    vzc_tooltip_implmn_mobile(this, $(this).parent().next().attr('name'));
  }).mouseleave(function() {
    $('.webform-element-help--tooltip').removeAttr('style');
    //$(this).html('');
    //$('.webform-element-help--title').html('');
  });
}

function vzc_tooltip_implmn_mobile(thisele, parentName) {
  // below is to remove the previously opened tooltip through key focus that overlap with current mouseenter tooltip
  if (parentName == 'policy_report_required_') {
    $('.webform-element-help--tooltip').last().prev('.webform-element-help--tooltip').remove();
    console.log('span tooltip hover edited...'+parentName);
    $('.webform-element-help--tooltip').removeAttr('style');

    var tipWidth = $('.webform-element-help--tooltip').outerWidth();
    var tipheight = $('.webform-element-help--tooltip').outerHeight();
    console.log('tipWidth='+tipWidth/2);
    var reqLeft = $(thisele).offset().left - (tipWidth/2) + 10;
    var reqTop = $(thisele).offset().top - (tipheight) - 18;
    var vWaitForTooltip = setInterval(function () {
      console.log('set Interval for tooltip...');
      if ($('.webform-element-help--tooltip .ui-tooltip-content:visible').length > 0) {
        clearInterval(vWaitForTooltip);
        console.log('setinterval cleared....');
        $('.webform-element-help--title').html('<b>Copy of filed Police report detailing the Identity theft:</b><br><br>Identity theft is a crime. Prior to filing a claim for identity theft, you should contact your local police department and file a report. If you know who used your identity, you must provide that information.<br><br>It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft. You will need to provide a copy of this report in order to complete your claim.<br><br>* <b>The size of each uploaded file must be under 2 MB.</b> All documents must be submitted in uneditable format (ie., jpeg, png, gif or pdf)');
        $('.webform-element-help--tooltip').attr('style', 'top: ' + reqTop + 'px;left: ' + (reqLeft+30) + 'px;max-width: ' + tipWidth + 'px');
      }
    }, 0.25);
  }
}
function vzc_tooltip_desktop_vds_3() {
  $('span.webform-element-help.js-webform-element-help').mouseenter(function() {
    vzc_tooltip_implmn(this, $(this).parent().next().attr('name'));
  }).focus(function() {
    vzc_tooltip_implmn(this, $(this).parent().next().attr('name'));
  }).mouseleave(function() {
    $('.webform-element-help--tooltip').removeAttr('style');
    //$(this).html('');
    //$('.webform-element-help--title').html('');
  });
}

function vzc_tooltip_implmn(thisele, parentName) {
  //if (parentName != undefined && parentName != '') {
    // below is to remove the previously opened tooltip through key focus that overlap with current mouseenter tooltip
    $('.webform-element-help--tooltip').last().prev('.webform-element-help--tooltip').remove();
    console.log('span tooltip hover edited...'+parentName);
    $('.webform-element-help--tooltip').removeAttr('style');

    var tipWidth = $('.webform-element-help--tooltip').outerWidth();
    var tipheight = $('.webform-element-help--tooltip').outerHeight();
    console.log('tipWidth='+tipWidth/2);
    var reqLeft = $(thisele).offset().left - (tipWidth/2) + 10;
    var reqTop = $(thisele).offset().top - (tipheight) - 18;
    var vWaitForTooltip = setInterval(function () {
      console.log('set Interval for tooltip...');
      if ($('.webform-element-help--tooltip .ui-tooltip-content:visible').length > 0) {
        clearInterval(vWaitForTooltip);
        console.log('setinterval cleared....');

        if (parentName == 'policy_report_required_') {
          $('.webform-element-help--tooltip .ui-tooltip-content:visible').parent().addClass('left-arrow-tooltip');
          $('.webform-element-help--title').html('<b>Copy of filed Police report detailing the Identity theft:</b><br><br>Identity theft is a crime. Prior to filing a claim for identity theft, you should contact your local police department and file a report. If you know who used your identity, you must provide that information.<br><br>It is our policy to cooperate with law enforcement in the course of their legal investigation regarding identity theft. You will need to provide a copy of this report in order to complete your claim.<br><br>* <b>The size of each uploaded file must be under 2 MB.</b> All documents must be submitted in uneditable format (ie., jpeg, png, gif or pdf)');
          //reqTop = $(thisele).offset().top - (3*tipheight);
          //console.log('tipWidth='+tipWidth);
          //console.log($(thisele).offset().left);
          reqLeft = $(thisele).offset().left + 30;
          $('.webform-element-help--tooltip').attr('style', 'top: ' + reqTop + 'px;left: ' + reqLeft + 'px;max-width: ' + tipWidth + 'px');
        }
        else {
          console.log('Tooltip title else case........');
          //$('.webform-element-help--tooltip').attr('style', 'top: 1211px;left: 405px;max-width: 375px');
          $('.webform-element-help--tooltip').attr('style', 'top: ' + reqTop + 'px;left: ' + reqLeft + 'px;max-width: ' + tipWidth + 'px');
        }
      }
    }, 0.25);
  //}
}



// EOOV-13607
/* if (jQuery('ul.menu--cybersecurity-glossary').length > 0) {
  jQuery('.hero__container .hero__title').html(jQuery('.sbs__heading.h3').text());
} */
// EOOV-13153
jQuery('ul.menu--cybersecurity-glossary').addClass('menu--tabs');
// EOOV-13218
jQuery('ul.menu.menu--tabs li a[class="is-active"]').attr('aria-current', 'page');

//EOOV-13267
//jQuery('ul.breadcrumbs li:eq(0)').hide();
// showing About breadcrumb
jQuery('ul.breadcrumbs li:eq(0) a').attr('href', '/about');

//jQuery(document).ready(function() {
	if (location.href.match(/(\/privacy\/terms\-conditions|\/privacy\/open\-internet|\/privacy\/accessibility|\/about\/terms\-conditions|\/about\/open\-internet|\/about\/accessibility)/i)) {
	//if (location.href.match(/(\/privacy\/verizon\-connect|\/privacy\/individual\-products|\/privacy\/accessibility|\/privacy\/consumer\-safety)/i)) {
		jQuery('footer.footer-container').attr('style', 'display: none;');
		jQuery('footer.footer div.container.footer__top-container').attr('style', 'display: none;');
		// EOOV-10540
		jQuery('ul.breadcrumbs li:eq(1)').remove();
	       // For Accessibility Nodes
	       var vHtm = jQuery('ul.breadcrumbs li[1]').clone();
         vHtm.find('span').remove();
         if (vHtm.text().replace(/\n/g, '').trim().toLowerCase() !== "accessibility") {
            jQuery('ul.breadcrumbs li:eq(0)').html('<a href="/accessibility">Accessibility Home<\/a><span class="breadcrumbs__arrow"></span>');
	          jQuery('ul.breadcrumbs li:eq(1)').hide();
         }

	       /*if (jQuery.trim(jQuery('ul.breadcrumbs li:eq(1)').text()) == "Accessibility") {
	         jQuery('ul.breadcrumbs li:eq(0)').after('<li><a href="/about/accessibility/overview">Accessibility<\/a><span class="breadcrumbs__arrow"></span><\/li>');
	         jQuery('ul.breadcrumbs li:eq(2)').remove();
	       }*/
	}
  //account-security page breadcrumbs
  if (location.href.match(/(\/about\/privacy\/account\-security|\/about\/account\-security)/i)) {

    var vHtm = jQuery('ul.breadcrumbs li.breadcrumbs__current').clone();
    vHtm.find('span').remove();
    if (vHtm.text().replace(/\n/g, '').trim().toLowerCase() !== "account security") {
      var totalBreadcrumbs = jQuery('ul.breadcrumbs li').length - 1;
      jQuery('ul.breadcrumbs li:eq(1)').after('<li><a href="/about/account-security/overview" aria-label="Account security, 2 of ' + totalBreadcrumbs + '">Account security<\/a><span class="breadcrumbs__arrow"></span><\/li>');
      //jQuery('ul.breadcrumbs li:eq(3)').remove();
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(3)').remove();
    }
    else {
      // for account security page, we need 2 li's removed
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(2)').remove();
    }

	}

  //Consumer safety page breadcrumbs
  if (location.href.match(/(\/about\/privacy\/consumer\-safety|\/about\/consumer\-safety)/i)) {

    var vHtm = jQuery('ul.breadcrumbs li.breadcrumbs__current').clone();
    vHtm.find('span').remove();
    if (vHtm.text().replace(/\n/g, '').trim().toLowerCase() !== "Important consumer Information") {
      jQuery('ul.breadcrumbs li:eq(1)').after('<li><a href="/about/consumer-safety/important-consumer-information">Important consumer Information<\/a><span class="breadcrumbs__arrow"></span><\/li>');
      //jQuery('ul.breadcrumbs li:eq(3)').remove();
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(3)').remove();
    }
    else {
      // for Consumer safety page, we need 2 li's removed
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(2)').remove();
    }

	}

  //individual-products-and-services page breadcrumbs
  if (location.href.match(/(\/about\/privacy\/individual\-products\-and\-services)/i)) {
    var vHtm = jQuery('ul.breadcrumbs li.breadcrumbs__current').clone();
    vHtm.find('span').remove();
    if (vHtm.text().replace(/\n/g, '').trim().toLowerCase() !== "Verizon Privacy Dashboard") {
      jQuery('ul.breadcrumbs li:eq(1)').after('<li><a href="/privacy/your-data/login">Verizon Privacy Dashboard<\/a><span class="breadcrumbs__arrow"></span><\/li>');
      jQuery('ul.breadcrumbs li:eq(1)').remove();
    }
    else {
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(2)').remove();
    }

	}

  //individual-products-and-services spanish(espanol) page breadcrumbs
  if (location.href.match(/(\/about\/privacy\/es\/individual\-products\-and\-services)/i)) {
    var vHtm = jQuery('ul.breadcrumbs li.breadcrumbs__current').clone();
    vHtm.find('span').remove();
    if (vHtm.text().replace(/\n/g, '').trim().toLowerCase() !== "Panel de privacidad de Verizon") {
      jQuery('ul.breadcrumbs li:eq(1)').after('<li><a href="https://esus.verizon.com/privacy/your-data/login">Panel de privacidad de Verizon<\/a><span class="breadcrumbs__arrow"></span><\/li>');
      jQuery('ul.breadcrumbs li:eq(1)').remove();
    }
    else {
      jQuery('ul.breadcrumbs li:eq(1), ul.breadcrumbs li:eq(2)').remove();
    }

	}

  // check for article type
  if (jQuery('.node--type-article').length > 0) {
    jQuery('ul.breadcrumbs li:eq(1)').hide();
  	//jQuery('ul.breadcrumbs li:eq(1) a').text('About');
  	//jQuery('ul.breadcrumbs li:eq(1) a').removeAttr('href');
  	//jQuery('ul.breadcrumbs li:eq(1) a').attr('href','/about'); //About pointing to /about
  	jQuery('ul.breadcrumbs li:eq(2)').html('<a href="/about/blog/relay">Blog<\/a><span class="breadcrumbs__arrow"><\/span>');
  }
  // check for article type ends

  // check for article type (lp)
  if (jQuery('.node--type-article-landing-page').length > 0) {
    jQuery('ul.breadcrumbs li:eq(1)').hide();
  	//jQuery('ul.breadcrumbs li:eq(1) a').text('About');
  	//jQuery('ul.breadcrumbs li:eq(1) a').removeAttr('href');
  	//jQuery('ul.breadcrumbs li:eq(1) a').attr('href','/about'); //About pointing to /about
  	jQuery('ul.breadcrumbs li:eq(2)').remove();
  	//jQuery('ul.breadcrumbs li:eq(2)').html('<a>Blog<\/a><span class="breadcrumbs__arrow"><\/span>');
  }
  // check for article type ends (lp)

  //if (jQuery('ul.breadcrumbs li:eq(0):hidden').next('.breadcrumbs__current').length == 1) {
  /*if (jQuery('ul.breadcrumbs li:eq(0)').next('.breadcrumbs__current').length == 1) {*/
	  if(jQuery(window).width() < 767) {
		  jQuery('ul.breadcrumbs').show();
		  jQuery(".breadcrumbs-container").removeClass("bc-claim-show-mobile");
		  jQuery(".breadcrumbs-container").removeClass("nod-show-mobile");
		  jQuery(".breadcrumbs-container").addClass("overview-claim-show-mobile");
	  }
	  else {
		  if (jQuery('ul.breadcrumbs li:eq(0)').next('.breadcrumbs__current').length == 1){
			  jQuery('ul.breadcrumbs').hide();
		  }
	  }
  /*}*/
if((location.href.match(/(\/about\/privacy\/account\-security\/overview|\/about\/account\-security\/overview)/i) || location.href.match(/(\/about\/privacy\/account\-security\/file\-a\-fraud\-claim|\/about\/account\-security\/file\-a\-fraud\-claim)/i) || location.href.match(/(\/about\/privacy\/accessibility|\/about\/accessibility)/i)) && jQuery(window).width() < 767) {
  jQuery('ul.breadcrumbs').show();
  jQuery(".breadcrumbs-container").removeClass("bc-claim-show-mobile");
  jQuery(".breadcrumbs-container").removeClass("nod-show-mobile");
  jQuery(".breadcrumbs-container").addClass("overview-claim-show-mobile");
  jQuery(".breadcrumbs-container").show();
}
if((location.href.match(/(\/about\/privacy\/account\-security\/consumer\-claim|\/about\/account\-security\/consumer\-claim)/i) || location.href.match(/(\/about\/privacy\/account\-security\/business\-claim|\/about\/account\-security\/business\-claim)/i)) && jQuery(window).width() < 767) {
  jQuery('ul.breadcrumbs').show();
  jQuery(".breadcrumbs-container").removeClass("overview-claim-show-mobile");
  jQuery(".breadcrumbs-container").removeClass("nod-show-mobile");
  jQuery(".breadcrumbs-container").addClass("bc-claim-show-mobile");
  jQuery(".breadcrumbs-container").show();
}
if((location.href.match(/(\/about\/privacy\/nod\/notice\-dispute\-form|\/about\/nod\/notice\-dispute\-form)/i) || location.href.match(/(\/about\/privacy\/nod\/notice\-of\-dispute\-wireless\-form|\/about\/nod\/notice\-of\-dispute\-wireless\-form)/i) || location.href.match(/(\/about\/privacy\/nod\/notice\-of\-dispute\-wireline\-form|\/about\/nod\/notice\-of\-dispute\-wireline\-form)/i) || location.href.match(/(\/about\/privacy\/nod\/notice\-dispute\-form|\/about\/nod\/notice\-dispute\-form)/i)) && jQuery(window).width() < 767) {
	jQuery('ul.breadcrumbs').show();
	jQuery(".breadcrumbs-container").removeClass("overview-claim-show-mobile");
  jQuery(".breadcrumbs-container").removeClass("bc-claim-show-mobile");
	jQuery(".breadcrumbs-container").addClass("nod-show-mobile");
	jQuery(".breadcrumbs-container").show();
}
  // any remove, hide to be done in breadcrumbs; to be done here
  // hiding Es in breadcrumbs, EOOV13316
  jQuery('ul.breadcrumbs li').each(function( index2 ) {
    if (jQuery(this).text().replace(/\n/g, '').trim().toLowerCase() == "es") {
      jQuery(this).hide();
    }
  });
  // hiding Es in breadcrumbs, EOOV13316

  //NOD breadcrumb EOOV-14301
  if (location.href.match(/(\/about\/privacy\/nod\/notice\-dispute\-form|\/about\/nod\/notice\-dispute\-form)/i)) {
    jQuery('ul.breadcrumbs li:eq(1)').hide();
    jQuery('ul.breadcrumbs li:eq(2)').hide();
    jQuery('ul.breadcrumbs li.breadcrumbs__current').html('<span class="show-for-sr">Current: <\/span>Notice of Dispute');
  }
  if (location.href.match(/(\/about\/privacy\/nod\/notice\-of\-dispute\-wireline\-form|\/about\/nod\/notice\-of\-dispute\-wireline\-form)/i)) {
    jQuery('ul.breadcrumbs li:eq(1)').html('<a href="/about/nod/notice-dispute-form">Notice of Dispute<\/a><span class="breadcrumbs__arrow"><\/span>');
    jQuery('ul.breadcrumbs li:eq(2)').hide();
    jQuery('ul.breadcrumbs li.breadcrumbs__current').html('<span class="show-for-sr">Current: <\/span>Wireline Form');
  }
  if (location.href.match(/(\/about\/privacy\/nod\/notice\-of\-dispute\-wireless\-form|\/about\/nod\/notice\-of\-dispute\-wireless\-form)/i)) {
    jQuery('ul.breadcrumbs li:eq(1)').html('<a href="/about/nod/notice-dispute-form">Notice of Dispute<\/a><span class="breadcrumbs__arrow"><\/span>');
    jQuery('ul.breadcrumbs li:eq(2)').hide();
    jQuery('ul.breadcrumbs li.breadcrumbs__current').html('<span class="show-for-sr">Current: <\/span>Wireless Form');
  }



  if (location.href.match(/(\/about\/privacy\/accessibility\/fulfillment\-form\-residential)/i)) {
    jQuery('ul.breadcrumbs li:eq(0)').html('<a href="/accessibility">Accessibility Home<\/a><span class="breadcrumbs__arrow"><\/span>');
    jQuery('ul.breadcrumbs li.breadcrumbs__current').html('<span class="show-for-sr">Current: <\/span>Residential Customer Fulfillment Form');
    jQuery('ul.breadcrumbs li:eq(1)').hide();
  }
  if (location.href.match(/(\/about\/privacy\/accessibility\/fulfillment\-form\-business)/i)) {
    jQuery('ul.breadcrumbs li:eq(0)').html('<a href="/accessibility">Accessibility Home<\/a><span class="breadcrumbs__arrow"><\/span>');
    jQuery('ul.breadcrumbs li.breadcrumbs__current').html('<span class="show-for-sr">Current: <\/span>Business Customer Fulfillment Form');
    jQuery('ul.breadcrumbs li:eq(1)').hide();
  }
  //NOD breadcrumb EOOV-14301
//});
jQuery(window).on('load',function() {

  //EOOV-11462
  /* privacy/accessibility/auditory-support
  privacy/accessibility/visual-assistance
  privacy/accessibility/accessible-content
  privacy/accessibility/mobility-tools */
  //if (location.href.match(/(\/privacy\/accessibility\/auditory\-support|\/privacy\/accessibility\/visual\-assistance|\/privacy\/accessibility\/accessible\-content|\/privacy\/accessibility\/mobility\-tools)/i)) {
  if (location.href.match(/(\/accessibility\/auditory\-support|\/accessibility\/visual\-assistance|\/accessibility\/accessible\-content|\/accessibility\/mobility\-tools)/i)) {
    jQuery('ul.menu.menu--tabs li a[class="is-active"]').attr('aria-current', 'page');
  }

});


  function vzc_is_android() {
    //return navigator.userAgent.toLowerCase().match(/(iphone|ipod|ipad)/);
    return navigator.userAgent.toLowerCase().indexOf("android") > -1;
  }

//Global search mobile fix
jQuery(window).on('load',function() {

  // start for EOOV-15456 - privacy spanish home page bookmark
  var vcanonical = jQuery('link[rel="canonical"]').attr("href");
  console.log('vcanonical='+vcanonical);

  if (vzc_ends_with(vcanonical, '/privacy/es') || vzc_ends_with(vcanonical, '/privacy/es/')) {
    console.log('ends with es or es/');
    jQuery('a:contains("Resumen de la Política de Privacidad de Verizon")').removeAttr('href');
    jQuery('a:contains("Resumen de la Política de Privacidad de Verizon")').on('click', function(e) {
      jQuery("html, body").animate({scrollTop: jQuery('.paragraph.paragraph--type--sbs.sbs--default.sbs.index-1').offset().top-100}, 500);
    });
  }

  function vzc_ends_with(str, suffix) {
    return str.slice(-suffix.length) === suffix
  }
  // end for EOOV-15456


if (location.href.match(/(\/privacy\/full\-privacy\-policy)/i) || location.href.match(/(\/privacy\/fullprivacypolicy)/i)) {
  var linkless = 0;
  if (location.href.match(/(\/privacy\/fullprivacypolicy)/i)) {
    linkless = 100;
  }
  //Nevada
  if (location.href.indexOf('scrollto=index-3') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-3').offset().top-(100-linkless)}, 1200);
  }
  //Maine
  else if (location.href.indexOf('scrollto=index-2') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-2').offset().top-(100-linkless)}, 1200);
  }
  //California index-1
  else if (location.href.indexOf('scrollto=index-1') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55-label').offset().top-(90-linkless)}, 1200);
  }
  //Virginia index-4
  else if (location.href.indexOf('scrollto=index-4') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-4').offset().top-(100-linkless)}, 1200);
  }
  // from fios-privacy-policy to california
  else if (location.href.indexOf('scrollto=index-0') != -1) {
   jQuery("html, body").animate({scrollTop: jQuery('#acc-item-55 .paragraph--type--sbs.sbs--accordion-item.sbs.index-0').offset().top-(100-linkless)}, 1200);
  }
}
// for spanish version #acc-item-361 for EOOV-14833
if (location.href.match(/(\/privacy\/es\/full\-privacy\-policy)/i)) {
  //Nevada
  if (location.href.indexOf('scrollto=index-3') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-361 .paragraph--type--sbs.sbs--accordion-item.sbs.index-3').offset().top-100}, 1200);
  }
  //Maine
  else if (location.href.indexOf('scrollto=index-2') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-361 .paragraph--type--sbs.sbs--accordion-item.sbs.index-2').offset().top-100}, 1200);
  }
  //California index-1
  else if (location.href.indexOf('scrollto=index-1') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-361-label').offset().top-90}, 1200);
  }
  //Virginial index-4
  else if (location.href.indexOf('scrollto=index-4') != -1) {
    jQuery("html, body").animate({scrollTop: jQuery('#acc-item-361 .paragraph--type--sbs.sbs--accordion-item.sbs.index-4').offset().top-100}, 1200);
  }
}

//EOOV-12069
jQuery('.vzpp-icon-document').attr('aria-hidden', 'true');

  var vGNAV98 = window.location.href;
  if (jQuery('#vz-gh20').length > 0) {
    console.log('Gnav header present');
    //if (vGNAV98.indexOf('vz-privacy-dev.ebiz.verizon.com') != -1 || vGNAV98.indexOf('vz-privacy-uat.ebiz.verizon.com') != -1 || vGNAV98.indexOf('www98.verizon.com') != -1) {
    if (vGNAV98.toLowerCase().indexOf("www.verizon.com") == -1) {
      //jQuery('#vz-gh20 a[id^="gnav20"]').each(function( index2 ) {
      jQuery('#vz-gh20 a, #vz-gf20 a').each(function( index2 ) {
        var vHref = jQuery(this).attr('href');
        if (vHref != undefined && vHref.indexOf('www.verizon.com/about') != -1) {
          //console.log(vHref);
          vHref = vHref.replace(/\/www\./g,'/www98.');
          jQuery(this).attr('href', vHref);
        }
      });
    }
  }

});

jQuery('#accessibility-services-menu').parent('nav').find('.grid-container').css({'padding-left':'0px',  'padding-right':'0px'});

function vzc_wysiwyg_custom_replaceTag($element, newTagName) {
	// Identify opening and closing tag
	var oldTagName = $element[0].nodeName,
		elementString = $element[0].outerHTML,
		openingRegex = new RegExp("^(<" + oldTagName + ")", "i"),
		openingTag = elementString.match(openingRegex),
		closingRegex = new RegExp("(<\/" + oldTagName + ">)$", "i"),
		closingTag = elementString.match(closingRegex);

	if (openingTag && closingTag && newTagName) {
		// Remove opening tag
		elementString = elementString.slice(openingTag[0].length);
		// Remove closing tag
		elementString = elementString.slice(0, -(closingTag[0].length));
		// Add new tags
		elementString = "<" + newTagName + " " + elementString + "</" + newTagName + ">";
	}
	return elementString;
}


function vzc_privacy_data_subject_form_inline_errors_fix() {
  jQuery('form[id^="webform-submission-data-subject-request-form-webfor"] fieldset .fieldset-wrapper').each(function( index2 ) {
    //console.log(jQuery(this).html());
    if (jQuery(this).find('.form-item--error').length > 0 && jQuery(this).find('[class*="radios"]').length > 0) {
      //for radios remove 1st sibling
      jQuery(this).children(":first").hide();
      jQuery(this).find('.form-item--error').show();
    }
    // for email
    //if (jQuery(this).children().length > 2 && jQuery(this).find('[class*="email"]').length > 0) {
    if (jQuery(this).children(":first:not([class])").length == 1 && jQuery(this).find('[class*="email"]').length > 0) {
      jQuery(this).append(jQuery(this).children(":first"));
      jQuery(this).children(":last").addClass('form-item--error-message');
    }
  });
}

// Function to remove error input classes.
function removeErrorOnInput(input) {
  const formItem = input.closest('.form-item');
  const errorMessage = formItem.find('.form-item--error-message');
  if (input.is(':radio')) {
    $('input[name="' + input.attr('name') + '"]').removeClass('error');
  } else {
    input.removeClass('error');
  }
  formItem.removeClass('form-item--error');
  errorMessage.hide();
}

function fnClaimTimeoutExtend(elementId) {
  //console.log('fnClaimTimeoutExtend::'+elementId);
  if (elementId == 'butClaimTimeoutNo') {
    // close interval for default browser reload
    //clearInterval(vWaitForFClaimTimeout);
    $('[id^="' + elementId + '"]').addClass('expire-default-timeout');
    //console.log('required lengthaaaaaaaa:'+$('[id^="butClaimTimeout"][class*="expire-default-timeout"]').length);
    vzcFclaimTimeoutOverlay.close();
    // start No setInterval
    var vInitialMilliSecondsNo = 10 * 60 * 1000; // 10 mins extension for No
    //console.log('No extend time:' +vInitialMilliSecondsNo);
    var vWaitForFClaimTimeoutNo = setInterval(function () {
      //console.log('set Interval No...');
      if (true) {
        clearInterval(vWaitForFClaimTimeoutNo);
        console.log('Interval No cleared, Reload condition...');
        if ($('.webform-confirmation').length == 0) {
          window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
        }
        else {
          console.log('Form submitted and in confirmation screen. So no timeout and reload...');
        }
      }
    //}, (parseInt(vInitialMilliSecondsNo) + parseInt(10 * 1000)));
    }, (parseInt(vInitialMilliSecondsNo)));
  }
  else if (elementId == 'butClaimTimeoutYes') {
    // close interval for default browser reload
    //clearInterval(vWaitForFClaimTimeout);
    $('[id^="' + elementId + '"]').addClass('expire-default-timeout');
    vzcFclaimTimeoutOverlay.close();
    // start Yes setInterval
    var vInitialMilliSecondsYes = 20 * 60 * 1000; // 20 mins extension for Yes
    //console.log('Yes extend time:' +vInitialMilliSecondsYes);
    var vWaitForFClaimTimeoutYes = setInterval(function () {
      //console.log('set Interval Yes...');
      if (true) {
        clearInterval(vWaitForFClaimTimeoutYes);
        console.log('Interval Yes, cleared Reload condition...');
        if ($('.webform-confirmation').length == 0) {
          window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
        }
        else {
          console.log('Form submitted and in confirmation screen. So no timeout and reload...');
        }
      }
    }, (parseInt(vInitialMilliSecondsYes)));
  }
}

function fnClaimIdleTimeoutExtend(elementId, occurrence) {
  //console.log('fnClaimIdleTimeoutExtend::'+elementId);
  //console.log('occurrence::'+occurrence);
  // clearing 180 seconds setInterval for both No and Yes as user clicked Yes/No before 180 seconds.
  clearInterval(vWaitForFClaimRedirect);

  if (elementId == 'butClaimIdleTimeoutNo') {
    // close interval for default browser reload
    //clearInterval(vWaitForFClaimTimeout);
    //$('[id^="' + elementId + '"]').addClass('expire-default-timeout');
    //console.log('required lengthaaaaaaaa:'+$('[id^="butClaimTimeout"][class*="expire-default-timeout"]').length);
    vzcFclaimIdleTimeoutOverlay.close();
    // redirect
    window.location.href = "/about/privacy/account-security/file-a-fraud-claim";

    // start No setInterval
    /* var vInitialMilliSecondsNo = 10 * 60 * 1000; // 10 mins extension for No
    //console.log('No extend time:' +vInitialMilliSecondsNo);
    var vWaitForFClaimTimeoutNo = setInterval(function () {
      //console.log('set Interval No...');
      if (true) {
        clearInterval(vWaitForFClaimTimeoutNo);
        console.log('Interval No cleared, Reload condition...');
        if ($('.webform-confirmation').length == 0) {
          window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
        }
        else {
          console.log('Form submitted and in confirmation screen. So no timeout and reload...');
        }
      }
    //}, (parseInt(vInitialMilliSecondsNo) + parseInt(10 * 1000)));
    }, (parseInt(vInitialMilliSecondsNo))); */
  }
  else if (elementId == 'butClaimIdleTimeoutYes') {
    // close interval for default browser reload
    //clearInterval(vWaitForFClaimTimeout);
    //$('[id^="' + elementId + '"]').addClass('expire-default-timeout');
    vzcFclaimIdleTimeoutOverlay.close();

    //wait for another 10mins and show popup again
    //if (occurrence == 1) {
      // start Yes setInterval
      var vInitialMilliSecondsYes = 10 * 60 * 1000; // 10 mins extension for Yes
      //var vInitialMilliSecondsYes = 0.15 * 60 * 1000; // 1 min extension for Yes
      //console.log('Yes extend time:' +vInitialMilliSecondsYes);
      var vWaitForFClaimTimeoutYes = setInterval(function () {
        //console.log('set Interval Yes...');
        if (true) {
          clearInterval(vWaitForFClaimTimeoutYes);
          //console.log('Interval Yes,occurrence='+occurrence);
          if ($('.webform-confirmation').length == 0) {

            // only for 1st occurrence, we extend yes/no overlay for 2nd time.
            if (occurrence == 1) {
              vNewIdleTimeoutHtml = "<div id='divClaimIdleTimeout'><div>For your protection, your session is about to expire.<\/div><br\/><div>Would you like to extend your session an additional 10 minutes?<\/div><br\/><div>You will be redirected in 180 seconds.<\/div><br\/><br\/>"
                      + "<div class='divClaimButtonGroup'>"
                      + "<button onclick='fnClaimIdleTimeoutExtend(this.id, 2);' id = 'butClaimIdleTimeoutNo' class='butIdleTimoutNo'><span class='spanClaimIdleTimeoutNo'>No, End Session Now<\/span><\/button>"
                      + "<button onclick='fnClaimIdleTimeoutExtend(this.id, 2);' id = 'butClaimIdleTimeoutYes' class='butIdleTimoutYes'><span class='spanClaimIdleTimeoutYes'>Yes, Extend 10 minutes<\/span><\/button>"
                      + "<\/div><\/div>";
              vzcFclaimIdleTimeoutOverlay = Drupal.dialog(vNewIdleTimeoutHtml, {
                dialogClass: 'vzc_fclaim_idle_timeout_overlay',
                resizable: false,
                closeOnEscape: false,
                create: function () {
                  $(this).parent().find('.ui-dialog-titlebar-close').remove();
                  $(this).parent().find('.ui-dialog-title').text('Your session is about to expire');
                },
                beforeClose: false,
                close: function (event) {
                  $(event.target).remove();
                }
              });

              vzcFclaimIdleTimeoutOverlay.showModal();
            } // occurrence=1
            // only for 1st occurrence, we extend yes/no overlay for 2nd time.

            // 180 seconds default redirect
            // if second occurrence, vDefaultRedirectMilliSeconds=0 i.e., immediately
            if (occurrence == 2) {
              vDefaultRedirectMilliSeconds = 0;
            }
            vWaitForFClaimRedirect = setInterval(function () {

              clearInterval(vWaitForFClaimRedirect);

              // session timedout overlay and clear form before showing overlay
              //clear business form field
              if ($('[id^="webform-submission-business-fraud-claim"][class*="webform-submission-business-fraud-claim-form"]').length > 0) {
                $('[id^="webform-submission-business-fraud-claim"][class*="webform-submission-business-fraud-claim-form"]')[0].reset();
              }
              //clear consumer form field
              if ($('[id^="webform-submission-consumer-fraud-claim"][class*="webform-submission-consumer-fraud-claim-form"]').length > 0) {
                $('[id^="webform-submission-consumer-fraud-claim"][class*="webform-submission-consumer-fraud-claim-form"]')[0].reset();
              }

              //closing Yes/No overlay to show expired overlay
              vzcFclaimIdleTimeoutOverlay.close();
              vzcFclaimIdleSessionExpiredOverlay.showModal();
              // session timedout overlay
              // show pulse survey for timeout (check business or consumer forms and call accordingly)
              // for business form check
              /* if ($('[name="form_id"][value^="webform_submission_business_fraud_claim"]').length > 0) {
                // business form
                pi('present', 'business-timeout');
              }
              else {
                // consumer form
                pi('present', 'consumer-timeout');
              } */

            }, (parseInt(vDefaultRedirectMilliSeconds)));
            // 180 seconds default redirect
          }
          /* else {
            console.log('Form submitted and in confirmation screen. So no timeout and reload...');
          } */
        }
      }, (parseInt(vInitialMilliSecondsYes)));

    //} // occurrence=1
  }
}

/* function fnNewIdleTimeout() {
  console.log("new IDLE timeout enabled for fclaim...");
} */

var vDefaultRedirectMilliSeconds = 3 * 60 * 1000; // 3 mins default redirect for no answer
//var vDefaultRedirectMilliSeconds = 0.1 * 60 * 1000; // 1 mins default redirect for no answer

var vPopupShown = false;
var vWaitForFClaimRedirect;
var vNewIdleSessionExpiredHtml = "<div id='divClaimSessionExpired'><div>Your session has expired."
                + "<\/div><\/div>";
var vzcFclaimIdleSessionExpiredOverlay = Drupal.dialog(vNewIdleSessionExpiredHtml, {
  dialogClass: 'vzc_fclaim_idle_session_expired_overlay',
  resizable: false,
  closeOnEscape: false,
  create: function () {
    //$(this).parent().find('.ui-dialog-titlebar-close').remove();
    $(this).parent().find('.ui-dialog-title').text('Session expired');
  },
  beforeClose: false,
  close: function (event) {
    $(event.target).remove();
    //window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
    if ($('[name="form_id"][value^="webform_submission_business_fraud_claim"]').length > 0) {
      // business form
      window.location.href = "/about/privacy/account-security/file-a-fraud-claim?event=fraud_business_form_timeout";
    }
    else {
      // consumer form
      window.location.href = "/about/privacy/account-security/file-a-fraud-claim?event=fraud_consumer_form_timeout";
    }
  }
});

var vNewIdleTimeoutHtml = "<div id='divClaimIdleTimeout'><div>For your protection, your session is about to expire.<\/div><br\/><div>Would you like to extend your session an additional 10 minutes?<\/div><br\/><div>You will be redirected in 180 seconds.<\/div><br\/><br\/>"
                  + "<div class='divClaimButtonGroup'>"
                  + "<button onclick='fnClaimIdleTimeoutExtend(this.id, 1);' id = 'butClaimIdleTimeoutNo' class='butIdleTimoutNo'><span class='spanClaimIdleTimeoutNo'>No, End Session Now<\/span><\/button>"
                  + "<button onclick='fnClaimIdleTimeoutExtend(this.id, 1);' id = 'butClaimIdleTimeoutYes' class='butIdleTimoutYes'><span class='spanClaimIdleTimeoutYes'>Yes, Extend 10 minutes<\/span><\/button>"
                  + "<\/div><\/div>";
var vzcFclaimIdleTimeoutOverlay = Drupal.dialog(vNewIdleTimeoutHtml, {
  dialogClass: 'vzc_fclaim_idle_timeout_overlay',
  resizable: false,
  closeOnEscape: false,
  create: function () {
    $(this).parent().find('.ui-dialog-titlebar-close').remove();
    $(this).parent().find('.ui-dialog-title').text('Your session is about to expire');
  },
  beforeClose: false,
  close: function (event) {
    $(event.target).remove();
  }
});

/* jQuery(document).ajaxComplete(function(event, xhr, settings) {
  if ($('.webform-confirmation').length > 0) {
    console.log('idle timeout ajax complete');
    console.log(time);
    clearTimeout(time);
    console.log('CLEARED idle timeout ajax complete');
  }
}); */
var time;
var fnNewIdleTimeout = function () {
  console.log("new IDLE timeout enabled for fclaim...");

  var vInitialMilliSeconds = 20 * 60 * 1000; // 20 mins
  //var vInitialMilliSeconds = 0.2 * 60 * 1000; // 2 mins

  time = setTimeout(showPopup, vInitialMilliSeconds);
  //console.log('idle timeout initial set');
  //console.log(time);
  //window.onload = resetTimer;
  // DOM Events
  //document.onmousemove = resetTimer;
  //document.onkeydown = resetTimer;

  //document.onload = resetTimer;
  document.onmousemove = resetTimer;
  document.onmousedown = resetTimer; // touchscreen presses
  document.ontouchstart = resetTimer;
  document.onclick = resetTimer; // touchpad clicks
  document.onkeydown = resetTimer; // onkeypress is deprectaed
  document.addEventListener('scroll', resetTimer, true);

  function showPopup() {
    vPopupShown = true;
    // showPopup to be called by setTimeout, no need to clear time which is for setInterval.
    //console.log("Show popup to extend for 10mins or end session.");
    if ($('.webform-confirmation').length == 0) { // check for confirmation screen, if not show yes/no
      vzcFclaimIdleTimeoutOverlay.showModal();

      // 180 seconds default redirect
      vWaitForFClaimRedirect = setInterval(function () {

        clearInterval(vWaitForFClaimRedirect);

        // redirect
        // window.location.href = "/about/privacy/account-security/file-a-fraud-claim";

        // session timedout overlay and clear form before showing overlay
        //clear business form field
        if ($('[id^="webform-submission-business-fraud-claim"][class*="webform-submission-business-fraud-claim-form"]').length > 0) {
          $('[id^="webform-submission-business-fraud-claim"][class*="webform-submission-business-fraud-claim-form"]')[0].reset();
        }
        //clear consumer form field
        if ($('[id^="webform-submission-consumer-fraud-claim"][class*="webform-submission-consumer-fraud-claim-form"]').length > 0) {
          $('[id^="webform-submission-consumer-fraud-claim"][class*="webform-submission-consumer-fraud-claim-form"]')[0].reset();
        }

        //closing Yes/No overlay to show expired overlay
        vzcFclaimIdleTimeoutOverlay.close();
        vzcFclaimIdleSessionExpiredOverlay.showModal();
        // session timedout overlay
        // show pulse survey for timeout (check business or consumer forms and call accordingly)
        // for business form check
        /* if ($('[name="form_id"][value^="webform_submission_business_fraud_claim"]').length > 0) {
          // business form
          pi('present', 'business-timeout');
        }
        else {
          // consumer form
          pi('present', 'consumer-timeout');
        } */

      }, (parseInt(vDefaultRedirectMilliSeconds)));
      // 180 seconds default redirect
    }
    // after above popup, setInterval for 180 seconds and redirect to file-a-claim page.
    // If No end session clicked, clear above interval and redirect to file-a-claim page.
    // If Yes, extend 10 mins, clear above interval and setInterval or setTimeout for 10 mins again show same popup.
    // This 2nd time popup, same as 1st time popup
    // If No end session clicked, clear above interval and redirect to file-a-claim page.
    // If Yes, extend 10 mins, clear above interval and setInterval or setTimeout for 10 mins and give Session expired popup.
    //time = setTimeout(showPopup, vInitialMilliSeconds);
  }

  function resetTimer() {
    // clear timer/reset timer until Popup is shown. On first popup show, no need.
    // Also check if its not confirmation page.
    if (!vPopupShown && $('.webform-confirmation').length == 0) {
      clearTimeout(time);
      time = setTimeout(showPopup, vInitialMilliSeconds);
      //console.log('new timeout reset !!!');
    }
    // If confirmation page, clear previous timer.
    if ($('.webform-confirmation').length > 0) {
      //console.log('confirmation page previous timer cleared !');
      clearTimeout(time);
    }
    // 1000 milliseconds = 1 second
  }

};

function fnEnableFclaimTimeout() {
  console.log("timeout enabled for fclaim...");

  var vInitialMilliSeconds = 20 * 60 * 1000; // 20 mins
  //console.log('initial vInitialMilliSeconds :' +vInitialMilliSeconds);
  //jQuery(window).load(function() {
    var vWaitForFClaimTimeout = setInterval(function () {
      //console.log('set Interval vWaitForFClaimTimeout...');
      //if (true) {
      if ($('.webform-confirmation').length == 0) { // check for confirmation screen, if not show yes/no
        vzcFclaimTimeoutOverlay.showModal();
        //jQuery('#spb-block-t1').attr('style', 'display: none !important');
        clearInterval(vWaitForFClaimTimeout);
        //console.log('Interval vWaitForFClaimTimeout cleared Initial popup show condition...');
        //console.log('Interval starting 10 mins default close and reload condition (if user left the browser without Yes/No click)...');

        vInitialMilliSeconds = 10 * 60 * 1000; // 10 mins default reload for no answer
        vWaitForFClaimTimeout = setInterval(function () {
          //console.log('set Interval default browser reload...');
          //if (true) {
          //expire-default-timeout
          //if ($('[id^="butClaimTimeout"][class*="expire-default-timeout"]').length > 0) {
          if ($('[id^="divClaimTimeout"]').length == 0) {
            //console.log('default browser clearing timeout (Yes/No) clicked...');
            clearInterval(vWaitForFClaimTimeout);
          }
          else {
            console.log('default browser reload BEGIN ...');
            if ($('.webform-confirmation').length == 0) {
              window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
            }
            else {
              console.log('Form submitted and in confirmation screen. So no timeout and reload...');
            }
          }
        }, (parseInt(vInitialMilliSeconds)));
      }
    //}, (parseInt(vInitialMilliSeconds) + parseInt(10 * 1000)));
    }, (parseInt(vInitialMilliSeconds)));


  var vTimeoutHtml = "<div id='divClaimTimeout'><div>For your protection, your session is scheduled to time-out in 10 minutes.<\/div><div>Would you like to extend your session for an additional 20 minutes?<\/div><br\/> <br\/><div>If you do not extend your session or complete your claim within 10 minutes, your information will be cleared and your claim	will not be submitted for review.<\/div><br\/><br\/><br\/>"
                + "<div class='divClaimButtonGroup'>"
                + "<button onclick='fnClaimTimeoutExtend(this.id);' id = 'butClaimTimeoutNo' class='butTimoutNo'><span class='spanClaimTimeoutNo'>No, I don't need more time<\/span><\/button>"
                + "<button onclick='fnClaimTimeoutExtend(this.id);' id = 'butClaimTimeoutYes' class='butTimoutYes'><span class='spanClaimTimeoutYes'>Yes, Please Give me More Time<\/span><\/button>";
                + "<\/div><\/div>";
  vzcFclaimTimeoutOverlay = Drupal.dialog(vTimeoutHtml, {
    dialogClass: 'vzc_fclaim_timeout_overlay',
    resizable: false,
    closeOnEscape: false,
    create: function () {
      $(this).parent().find('.ui-dialog-titlebar-close').remove();
      $(this).parent().find('.ui-dialog-title').text('Need more time?');
    },
    beforeClose: false,
    close: function (event) {
      $(event.target).remove();
    }
  });
}

//Accessibility Care Smart Privacy Policy
$("#block-languageswitcher ul.dropdown-menu li a.language-link").unwrap('li');
$("#block-languageswitcher ul.dropdown-menu a.language-link").unwrap('ul');


if(location.href.match(/(\/about\/about-our-ads|\/about\/privacy\/about-our-ads)/i)) {
  $(".block-vzpp-page-title h1").prop('outerHTML', vzc_wysiwyg_custom_replaceTag($(".block-vzpp-page-title h1"), 'h2'));
  $("#block-languageswitcher ul.dropdown-menu li a.language-link").unwrap('li');
  $("#block-languageswitcher ul.dropdown-menu a.language-link").unwrap('ul');
}

function fnFraudQuestionnaire() {
  //var vIsRightClaimHtml = "<div id=\"divIsRightClaim\"><h3>Is this claim form right for you?<\/h3><h5>Select the experience that sounds most like yours:<\/h5><input type=\"radio\" name=\"is_right_claim\" value=\"1\"><span class='spanRadioLabel'>I never set up this Verizon account.<\/span><input type=\"radio\" name=\"is_right_claim\" value=\"2\"><span class='spanRadioLabel'>I didn't order these devices and\/or request a new line.<\/span><input type=\"radio\" name=\"is_right_claim\" value=\"3\"><span class='spanRadioLabel'>I have international calls, usage or charges that I didn't cause.<\/span><input type=\"radio\" name=\"is_right_claim\" value=\"4\"><span class='spanRadioLabel'>My account security has been compromised.<\/span><input type=\"radio\" name=\"is_right_claim\" value=\"5\"><span class='spanRadioLabel'>Other<\/span><div id=\"result_pane\" style=\"display: none\"><span class=\"spanResultCallUs\">Based on your response you may be a victim of Social Engineering.<br\/>Call us at <u>888.483.7200<\/u> for further assistance.<\/span><span class=\"spanResultProceed\">Please click continue to receive further instructions on submitting a fraud claim.<\/span><\/div><button onclick='window.location.href = \"/about/privacy/account-security/file-a-fraud-claim\";' id=\"btnContinue\" disabled class='butContinue'><span class='spanContinue'>Continue<\/span><\/button><\/div>";
  var vIsRightClaimHtml = "";
  if (location.href.match(/(\/account\-security|\/about\/account\-security)/i)) {
	  vIsRightClaimHtml = "<div class=\"divOverlayParent\"><div class=\"divCustomOverlayClose\"><a aria-label=\"Close\" tabindex=\"0\" id=\"aCustomClose\" href=\"javascript:void(0);\"><span class=\"spanCustomClose\"><\/span><\/a><\/div><div id=\"divIsRightClaim\"><div role=\"group\" aria-labelledby=\"select_experience\"><h3 id=\"select_experience\">Select the experience that sounds most like yours:<\/h3><input type=\"radio\" name=\"is_right_claim1\" id=\"is_right_claim1\" value=\"1\"><label for=\"is_right_claim1\" class='spanRadioLabel'>I never set up this Verizon account.<\/label><input type=\"radio\" name=\"is_right_claim2\" id=\"is_right_claim2\" value=\"2\" tabindex=\"-1\"><label for=\"is_right_claim2\" class='spanRadioLabel'>I didn't order these devices and\/or request a new line.<\/label><input type=\"radio\" name=\"is_right_claim3\" id=\"is_right_claim3\" value=\"3\" tabindex=\"-1\"><label for=\"is_right_claim3\" class='spanRadioLabel'>I have international calls, usage or charges that I didn't cause.<\/label><input type=\"radio\" name=\"is_right_claim4\" id=\"is_right_claim4\" value=\"4\" tabindex=\"-1\"><label for=\"is_right_claim4\" class='spanRadioLabel'>My account security has been compromised.<\/label><input type=\"radio\" name=\"is_right_claim5\" id=\"is_right_claim5\" value=\"5\" tabindex=\"-1\"><label for=\"is_right_claim5\" class='spanRadioLabel'>Other<\/label></div><div id=\"result_pane\" style=\"display: none\"><span class=\"spanResultCallUs\" aria-live=\"off\">Based on your response you may be a victim of Social Engineering.<br\/>Call us at <u>888.483.7200<\/u> for further assistance.<\/span><span class=\"spanResultProceed\" aria-live=\"off\">Please click continue to receive further instructions on submitting a fraud claim.<\/span><\/div><button onclick='window.location.href = \"/about/account-security/file-a-fraud-claim\";' id=\"btnContinue\" disabled class='butContinue'><span class='spanContinue'>Continue<\/span><\/button><\/div><\/div>";
  }
  else {
	  vIsRightClaimHtml = "<div class=\"divOverlayParent\"><div class=\"divCustomOverlayClose\"><a aria-label=\"Close\" tabindex=\"0\" id=\"aCustomClose\" href=\"javascript:void(0);\"><span class=\"spanCustomClose\"><\/span><\/a><\/div><div id=\"divIsRightClaim\"><div role=\"group\" aria-labelledby=\"select_experience\"><h2 id=\"select_experience\">Select the experience that sounds most like yours:<\/h2><input type=\"radio\" name=\"is_right_claim1\" id=\"is_right_claim1\" value=\"1\"><label for=\"is_right_claim1\" class='spanRadioLabel'>I never set up this Verizon account.<\/label><input type=\"radio\" name=\"is_right_claim2\" id=\"is_right_claim2\" value=\"2\" tabindex=\"-1\"><label for=\"is_right_claim2\" class='spanRadioLabel'>I didn't order these devices and\/or request a new line.<\/label><input type=\"radio\" name=\"is_right_claim3\" id=\"is_right_claim3\" value=\"3\" tabindex=\"-1\"><label for=\"is_right_claim3\" class='spanRadioLabel'>I have international calls, usage or charges that I didn't cause.<\/label><input type=\"radio\" name=\"is_right_claim4\" id=\"is_right_claim4\" value=\"4\" tabindex=\"-1\"><label for=\"is_right_claim4\" class='spanRadioLabel'>My account security has been compromised.<\/label><input type=\"radio\" name=\"is_right_claim5\" id=\"is_right_claim5\" value=\"5\" tabindex=\"-1\"><label for=\"is_right_claim5\" class='spanRadioLabel'>Other<\/label></div><div id=\"result_pane\" style=\"display: none\"><span class=\"spanResultCallUs\" aria-live=\"off\">Based on your response you may be a victim of Social Engineering.<br\/>Call us at <u>888.483.7200<\/u> for further assistance.<\/span><span class=\"spanResultProceed\" aria-live=\"off\">Please click continue to receive further instructions on submitting a fraud claim.<\/span><\/div><button onclick='window.location.href = \"/about/account-security/file-a-fraud-claim\";' id=\"btnContinue\" disabled class='butContinue'><span class='spanContinue'>Continue<\/span><\/button><\/div><\/div>";
  }
  vzcFclaimvIsRightClaimOverlay = Drupal.dialog(vIsRightClaimHtml, {
    dialogClass: 'vzc_fclaim_is_right_claim_overlay',
    resizable: false,
    //closeOnEscape: false,
    closeOnEscape: true,
    create: function () {
      $(this).parent().find('.ui-dialog-titlebar-close').remove();
      $(this).parent().find('.ui-dialog-titlebar').html('<h2 class="ui-dialog-title">Is this claim form right for you?</h2>');
      // Accessibility fix for EOOV-13338 to get focus on tab for close button
      //$(this).parent().find('button.ui-dialog-titlebar-close').attr('tabindex', '0');

      // to set tabindex for 1st radio button
      //$(this).parent().find('[name^="is_right_claim"]').attr('tabindex', '0');
      //console.log('tabindex set');
      // to set focus on the close button
      //$(this).parent().find('button.ui-dialog-titlebar-close').focus();
      //console.log('close button focus set====='+ $(this).parent().find('button.ui-dialog-titlebar-close').length);
      //$(":input:not(:hidden)").each(function (i) { $(this).attr('tabindex', i + 1); });

      //keydown for overlay's input fields for arrow navigation
      $('body').on('keydown', 'input', function(e) {
        if (e.which == 39) { // for right arrow
          //ID_NAME = $(e.target).closest('.tdE').next().find('input').attr("name");
          ID_NAME = $('input').elementAfter(e.target).attr("name");
          //console.log("ID_NAME/Name:::"+ID_NAME);

          $('[name="'+ID_NAME+'"]').focus();
          e.preventDefault();
        }
        else if (e.which == 37) { // for left arrow
          //	ID_NAME = $(e.target).closest('.tdE').prev().find('input').attr("name");
          ID_NAME = $('input').elementBefore(e.target).attr("name");
          //console.log("ID_NAME/Name:::"+ID_NAME);

          $('[name="'+ID_NAME+'"]').focus();
          e.preventDefault();
        }
        else if (e.which == 40) { // for down arrow
          ID_NAME = $(e.target).closest('.rowE').next().find('.tdE:eq(' + $(e.target).closest('.tdE').index() + ')').find('input').attr("name");
          if(ID_NAME == undefined){
            ID_NAME = $('input').elementAfter(e.target).attr("name");
          }
          //console.log("ID_NAME/Name:::"+ID_NAME);

          $('[name="'+ID_NAME+'"]').focus();
          e.preventDefault();
        }
        else if (e.which == 38) { // for up arrow
          ID_NAME = $(e.target).closest('.rowE').prev().find('.tdE:eq(' + $(e.target).closest('.tdE').index() + ')').find('input').attr("name");
          if(ID_NAME == undefined){
            ID_NAME = $('input').elementBefore(e.target).attr("name");
          }
          //console.log("ID_NAME/Name:::"+ID_NAME);

          $('[name="'+ID_NAME+'"]').focus();
          e.preventDefault();
        }
		else if (e.which == 13 || e.which == 32) { // for enter and space
		  $("div#divIsRightClaim input").each(function() {
			  $(this).attr("tabindex","-1");
		  });
		  $(e.target).attr("tabindex",0);
        }
      });
	  $('body').on('focus', 'a#aCustomClose', function(e) {
		  $(e.target).css("outline","1px dotted #000");
	  });
	  $('body').on('focusout', 'a#aCustomClose', function(e) {
		  $(e.target).css("outline","0");
	  });
      $.fn.elementAfter = function(other) {
        for(i = 0; i < this.length - 1; i++) {
          if (this[i] == other) {
            return $(this[i + 1]);
          }
        }
        return $;
      };

      $.fn.elementBefore = function(other) {
        if (this.length > 0) {
          for(i = 1; i < this.length; i++) {
            if (this[i] == other) {
              return $(this[i - 1]);
            }
          }
        }
          return $;
      };

    },
	open: function(event) {
		$(this).parent().find('a#aCustomClose').focus();
	},
    beforeClose: false,
    close: function (event) {
      // to unbind for the above keydown added in create
      $('body').off('keydown', 'input');
      $(event.target).remove();
    }
  });
  vzcFclaimvIsRightClaimOverlay.showModal();

  /* $('button[id="butContinue"][class="butContinue"]').click(function() {
    window.location.href = "/about/privacy/account-security/file-a-fraud-claim";
  }); */

  $('input[type=radio][name^=is_right_claim]').change(function() {
    $('input[type=radio][name^=is_right_claim]').prop('checked', false);
    $(this).prop('checked', true);
    if (this.value == "1") {
      //console.log('on first option....');
      $('[id^="result_pane"]').show();
      $('[id^="result_pane"] .spanResultProceed').attr('aria-live', 'polite');
      $('[id^="result_pane"] .spanResultProceed').show();
      //$('[id^="result_pane"]').hide();
      $('[id^="result_pane"] .spanResultCallUs').attr('aria-live', 'off');
      $('[id^="result_pane"] .spanResultCallUs').hide();
      $('[id^="btnContinue"]').removeAttr("disabled");
      $('[id^="btnContinue"]').attr("aria-label", "Continue to file a claim.");
    }

    else {
      //$('[id^="result_pane"]').hide();
      $('[id^="result_pane"] .spanResultProceed').attr('aria-live', 'off');
      $('[id^="result_pane"] .spanResultProceed').hide();
      $('[id^="result_pane"]').show();
      $('[id^="result_pane"] .spanResultCallUs').attr('aria-live', 'polite');
      // for devices wrap with anchor, so on tap would call
      var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
      if (isMobile && $('a.aResultCallUs').length == 0) {
        $('[id^="result_pane"] .spanResultCallUs u').wrap('<a class="aResultCallUs" href="tel:8884837200"><\/a>');
      }
      $('[id^="result_pane"] .spanResultCallUs').show();
      $('[id^="btnContinue"]').attr("disabled", "true");
    }

  });

  $('input[type=radio][name^=is_right_claim]').keypress(function(e) {
    var key = e.which;
    if (key == 13) {  // the enter key code
      $('input[type=radio][name^=is_right_claim]').prop('checked', false);
      $(this).prop('checked', true);
      $(this).change();
      return false;
    }
  });

  $("#aCustomClose").click(function() {
    //console.log('custom close clicked');
    vzcFclaimvIsRightClaimOverlay.close();
  });
}

function fnLegalAgreement(index) {
  var targetLink = (index == 1) ? 'window.location.href = "/about/account-security/consumer-claim"' : 'window.location.href = "/about/account-security/business-claim"';
  var vLegalAgreementHtml = "<div id='divClaimLegalAgreement'><div>I understand that by filing a claim of identity theft that I am requesting Verizon to investigate all of my accounts for unauthorized use of my personal identifying information.<\/div><br\/><div>I certify that the information I have provided is accurate to the best of my knowledge and I permit Verizon, or agents working on Verizon's behalf to contact me regarding my claim.<\/div><br\/><div>I acknowledge that all of my information is secure and may be encrypted for transmission.<\/div><br\/><div>I understand that filing a false police report is a crime and Verizon is not responsible for actions taken by law enforcement entities as a result of our investigation and the evidence provided in the detainment or prosecution of individuals related to this claim.<\/div><br\/>"
                    + "<div class='divClaimButtonGroup'>"
                    + "<button onclick='"
                    + targetLink + "' id = 'butClaimAgree' class='butLegalAgreement'><span class='spanClaimLegalAgree'>I agree<\/span><\/button>";
                    + "<\/div><\/div>";
  vzcFclaimvLegalAgreementOverlay = Drupal.dialog(vLegalAgreementHtml, {
    dialogClass: 'vzc_fclaim_legal_agreement_overlay',
    resizable: false,
    //closeOnEscape: false,
    closeOnEscape: true,
	open:function() {
		$(this).parent().find('.ui-dialog-titlebar-close').focus();

    // Fix for EOOV-15662
    var vWaitForOverlay = setInterval(function () {
      console.log('set Interval vWaitForOverlay...');
      //console.log($('.vzc_fclaim_legal_agreement_overlay:visible').offset().top);

      if ($('.vzc_fclaim_legal_agreement_overlay:visible').length > 0) {
        if ($('head style:contains("vzc_fclaim_legal_agreement_overlay")').length == 0) {
          $('head').append('<style>.vzc_fclaim_legal_agreement_overlay {top: 131px !important;}</style>');
        }
        clearInterval(vWaitForOverlay);
        console.log('cleared vWaitForOverlay...');
      }
    }, 2);

	},
    create: function () {
	  $(this).parent().find('.ui-dialog-title').replaceWith('<h2 id="'+$(this).parent().find('.ui-dialog-title').attr("id")+'" class="ui-dialog-title">Legal Agreement</h2>');
	},
    beforeClose: false,
    close: function (event) {
      $(event.target).remove();
    }
  });
  vzcFclaimvLegalAgreementOverlay.showModal();
}


(function ($, Drupal, drupalSettings) {


	// dynamic blog ajax
	if (typeof Drupal.Ajax !== 'undefined' && typeof Drupal.Ajax.prototype.beforeSubmitOriginal === 'undefined') {
		Drupal.Ajax.prototype.beforeSubmitOriginal = Drupal.Ajax.prototype.beforeSubmit;
		Drupal.Ajax.prototype.beforeSubmit = function (form_values, element_settings, options) {
			if ( $('.node--type-article').length > 0 ) {
				// article hero additional links 60 character limit check
				if ($('[name="settings[block_form][field_block_article_media][media_library_selection]"]').length > 0
					&& $('[name="settings[block_form][field_hero_title][0][value]"]').length > 0
					&& $('[id^="field-hero-links-values"]').length > 0) {

						var vCharacterLimit = 60;
						// remove error labels initially
						//$('[name^="[field_hero_links]["], [name$="[title]--error"]').remove();
						for (var i=0; i<4; i++) {
							if ($('[name="settings[block_form][field_hero_links][' + i + '][title]"]').length > 0
								&& $('[name="settings[block_form][field_hero_links][' + i + '][title]"]').val().length > parseInt(vCharacterLimit)) {
									//console.log('exceeds !!!');
									//check if already error msg exists
									/*if ($('[name="[field_hero_links][' + i + '][title]--error"]').length == 0) {
										$('<label name="[field_hero_links][' + i + '][title]--error" aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
											.insertAfter($('[name="settings[block_form][field_hero_links][' + i + '][title]"]'));
									}*/
									if ($('[name="settings[block_form][field_hero_links][' + i + '][title]"]').next('label.error').length == 0) {
										$('<label aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
											.insertAfter($('[name="settings[block_form][field_hero_links][' + i + '][title]"]'));
									}
									console.log('validation not passed!');
									$('[name="settings[block_form][field_hero_links][' + i + '][title]"]').focus();
									$('[name="settings[block_form][field_hero_links][' + i + '][title]"]').select();
									this.ajaxing = false;
									return false;
							}
						} // for

				} // article hero additional links 60 character limit check

				// article body headline 60 character limit check
				if ($('[name="settings[block_form][field_ai_headline][0][value]"]').length > 0
					&& $('[class*="form-item-settings-block-form-body-0-value"]').length > 0) {
						var vCharacterLimit = 60;
						if ($('[name="settings[block_form][field_ai_headline][0][value]"]').val().length > parseInt(vCharacterLimit)) {
						  if (jQuery('[name="[field_article_body_headline]--error"]').length == 0) {
                $('<label name="[field_article_body_headline]--error" aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for body headline.<\/label>')
                  .insertAfter($('[name="settings[block_form][field_ai_headline][0][value]"]'));
								}
								console.log('body validation not passed!');
								$('[name="settings[block_form][field_ai_headline][0][value]"]').focus();
								$('[name="settings[block_form][field_ai_headline][0][value]"]').select();
								this.ajaxing = false;
								return false;
						}
				}
				// article body headline 60 character limit check
			}

			// article landing page, additional resources 60 character limit
			if ( $('.node--type-article-landing-page').length > 0 ) {
				// article lp additional links 60 character limit check
				if ($('[id^="field-hero-links-values"]').length > 0) {

						var vCharacterLimit = 60;
						// remove error labels initially
						//$('[name^="[field_hero_links]["], [name$="[title]--error"]').remove();
						for (var i=0; i<4; i++) {
							if ($('[name="settings[block_form][field_hero_links][' + i + '][title]"]').length > 0
								&& $('[name="settings[block_form][field_hero_links][' + i + '][title]"]').val().length > parseInt(vCharacterLimit)) {
									//console.log('exceeds !!!');
									//check if already error msg exists
									/*if ($('[name="[field_hero_links][' + i + '][title]--error"]').length == 0) {
										$('<label name="[field_hero_links][' + i + '][title]--error" aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
											.insertAfter($('[name="settings[block_form][field_hero_links][' + i + '][title]"]'));
									}*/
									if ($('[name="settings[block_form][field_hero_links][' + i + '][title]"]').next('label.error').length == 0) {
										$('<label aria-live="polite" class="error">Please enter not more than ' + vCharacterLimit + ' characters for link text.<\/label>')
											.insertAfter($('[name="settings[block_form][field_hero_links][' + i + '][title]"]'));
									}
									console.log('validation not passed!');
									$('[name="settings[block_form][field_hero_links][' + i + '][title]"]').focus();
									$('[name="settings[block_form][field_hero_links][' + i + '][title]"]').select();
									this.ajaxing = false;
									return false;
							}
						} // for

				} // article lp additional links 60 character limit check

			}
			// article landing page, additional resources 60 character limit
			console.log('after validation ');
			return this.beforeSubmitOriginal();
		};
	}

  $(document).ready(function () {
    // Find the <h1> element with the class "hero__title"
    var $heroIcon = $('.hero__title');

    // Find and add aria-hidden="true" to <br> tags within the <h1>
    $heroIcon.find('br').attr('aria-hidden', 'true');
	  //EOOV-15605 issue #2 #3 #6
	  $(".hero_icon .field--name-field-hero-icon .field--name-field-media-image img").attr("aria-hidden",true);
	  $(".hero_icon .field--name-field-hero-icon .field--name-field-media-image .field__label.visually-hidden").attr("aria-hidden",true);
	  // issue #6 added scrolling to show focus indicator
	  $("main#main-content a").each(function(index,item) {
		  $(this).on("keydown",function(e) {
			  var $focuables = $("main#main-content a");
			  if(e.keyCode == 9 && e.shiftKey) {
				  var $scrollTargetAnchor = $("main#main-content a").eq(index-1);
				  if ($scrollTargetAnchor.length > 0 && $(window).width() > 767) {
					  var options = {};
					  offset = 225;
					  options.scrollTop = $scrollTargetAnchor.offset().top - offset;
					  console.log($scrollTargetAnchor);
					  console.log("scroll below gnav");
					  $('html, body').animate(options);
				  }
			  }
		  });
	  });
	  //SUBSCRIBER Updates form captcha vaidation message remove
	  if (jQuery('div[aria-label^="Error message"]')!=null && (location.href.match(/(\/about\/privacy\/current\-sub\-processors\-and\-affiliates|\/about\/current\-sub\-processors\-and\-affiliates)/i) || location.href.match(/(\/about\/privacy\/international\-policy|\/about\/international\-policy)/i))) {
		  jQuery('div[aria-label^="Error message"]').eq(0).hide().attr('aria-hidden',true);
	  }
    // EOOV-16544 - subject request form - remove error message when entering text fields.
    $('form[id^="webform-submission-data-subject-request-form-webfor"]').on('focus input', 'input', function(event) {
      const input = $(this);
      const value = input.val().trim();
      const name = input.attr('name');
      if (input.is(':radio')) {
        // Handle radio button selection.
        if ($('input[name="' + name + '"]:checked').length) {
          removeErrorOnInput(input);
          const otherTextName = name.replace('[radios]', '[other]');
          const otherTextInput = input.closest('.fieldset-wrapper').find('input[name="' + otherTextName + '"]');
          if (input.attr('value') === '_other_') {
            otherTextInput.removeClass('error');
            otherTextInput.closest('.form-item').removeClass('.form-item--error');
            otherTextInput.siblings('.form-item--error-message').hide();
          }
        }
      } else if (value !== '') {
        // Handle other inputs.
        removeErrorOnInput(input);
      }
    });
  });

	// dynamic blog ajax
  $(window).on('load',function() {
    // account-security/file-a-fraud-claim
    // legar agreement overlay
    if (location.href.match(/(\/about\/privacy\/account\-security\/file\-a\-fraud\-claim|\/about\/account\-security\/file\-a\-fraud\-claim)/i)) {
      if($(".hero__links a").length > 0) {
		$('.hero__links a:eq(0)').attr('onclick', 'javascript:fnLegalAgreement(1);'); // 1 - consumer
		$('.hero__links a:eq(1)').attr('onclick', 'javascript:fnLegalAgreement(2);'); // 2 - business
		$('.hero__links a').attr('href', 'javascript:void(0);');
	  }
	  else {
		$('.layout__region a:eq(0)').attr('onclick', 'javascript:fnLegalAgreement(1);'); // 1 - consumer
		$('.layout__region a:eq(1)').attr('onclick', 'javascript:fnLegalAgreement(2);'); // 2 - business
		$('.layout__region a').attr('href', 'javascript:void(0);');
	  }

      // EOOV-13197
	  if($('.hero__links a[onclick*="javascript:fnLegalAgreement"]').length > 0) {
		$('.hero__links a[onclick*="javascript:fnLegalAgreement"]').each(function( index2 ) {
			let ariaLabel = '';
			if(index2 == 0) {
				ariaLabel = 'File a consumer claim online';
			}
			if(index2 == 1) {
				ariaLabel = 'File a business claim online';
			}
			$(this).attr("role",'button');
			$(this).attr("aria-label", ariaLabel + ', opens a modal');
		});
	  }
	  else {
		$('article a[onclick*="javascript:fnLegalAgreement"]').each(function( index2 ) {
			let ariaLabel = '';
			if(index2 == 0) {
				ariaLabel = 'File a consumer claim online';
			}
			if(index2 == 1) {
				ariaLabel = 'File a business claim online';
			}
			$(this).attr("role",'button');
			$(this).attr("aria-label", ariaLabel + ', opens a modal');
		});
	  }
      // pulse insight calls after business or consumer session timedout and landing on this file-a-fraud-claim page
      if (location.href.match(/(event\=fraud\_business\_form\_timeout)/i)) {
        // business form
        pi('present', 'business-timeout');
      }
      else if (location.href.match(/(event\=fraud\_consumer\_form\_timeout)/i)) {
        // consumer form
        pi('present', 'consumer-timeout');
      }
    }

    // for account security overview - fraud questionnaire overlay
    if (location.href.match(/(\/about\/privacy\/account\-security\/overview|\/about\/account\-security\/overview)/i)) {
      // EOOV-13199 - on page load all accordion need to open
      $('button.accordion-open').click();
      $('.layout__region a[href$="/account-security/file-a-fraud-claim"]').attr('onclick', 'javascript:fnFraudQuestionnaire();');
      $('.layout__region a[href$="/account-security/file-a-fraud-claim"]').attr('href', 'javascript:void(0);');
      $('.layout__region a[name="file-a-fraud-claim-modal"]').attr('onclick', 'javascript:fnFraudQuestionnaire();');
      $('.layout__region a[name="file-a-fraud-claim-modal"]').attr('href', 'javascript:void(0);');

      // EOOV-13197
      //$('article a[target="_blank"]').attr('style', 'background: aqua !important');
      $('article a[href*="/"]').each(function( index2 ) {
		 if(!$(this).hasClass('topic__link')) {
			 $(this).attr("aria-label", $(this).text().replace(/\n/g, '').trim() + ', opens a new window');
		 }
      });
      $('article a[href*="/"][class="use-ajax"]').each(function( index2 ) {
        $(this).attr("aria-label", $(this).text().replace(/\n/g, '').trim() + ', opens a modal');
      });
      $('article a[onclick*="javascript:fnFraudQuestionnaire"]').each(function( index2 ) {
        $(this).attr("aria-label", $(this).text().replace(/\n/g, '').trim() + ', opens a modal');
      });

    }
    // For webform-submission-business-fraud-claim or webform-submission-consumer-fraud-claim
    if ($('[id^="webform-submission-business-fraud-claim"]').length > 0 || $('[id^="webform-submission-consumer-fraud-claim"]').length > 0) {
      // Legal Agreement
      /* var vLegalAgreementHtml = "<div id='divClaimLegalAgreement'><div>I understand that by filing a claim of identity theft that I am requesting Verizon to investigate all of my accounts for unauthorized use of my personal identifying information.<\/div><br\/><div>I certify that the information I have provided is accurate to the best of my knowledge and I permit Verizon, or agents working on Verizon's behalf to contact me regarding my claim.<\/div><br\/><div>I acknowledge that all of my information is secure and may be encrypted for transmission.<\/div><br\/><div>I understand that filing a false police report is a crime and Verizon is not responsible for actions taken by law enforcement entities as a result of our investigation and the evidence provided in the detainment or prosecution of individuals related to this claim.<\/div><br\/>"
                    + "<div class='divClaimButtonGroup'>"
                    + "<button onclick='vzcFclaimvLegalAgreementOverlay.close();fnEnableFclaimTimeout();' id = 'butClaimAgree' class='butLegalAgreement'><span class='spanClaimLegalAgree'>I agree<\/span><\/button>";
                    + "<\/div><\/div>";
      vzcFclaimvLegalAgreementOverlay = Drupal.dialog(vLegalAgreementHtml, {
        dialogClass: 'vzc_fclaim_legal_agreement_overlay',
        resizable: false,
        closeOnEscape: false,
        create: function () {
          $(this).parent().find('.ui-dialog-titlebar-close').remove();
          $(this).parent().find('.ui-dialog-title').text('Legal Agreement');
        },
        beforeClose: false,
        close: function (event) {
          $(event.target).remove();
        }
      });
      vzcFclaimvLegalAgreementOverlay.showModal(); */
      // end Legal Agreement

      // above legal agreement is moved to other page, so when landing on claim forms timer for timeout starts
      //fnEnableFclaimTimeout(); // commenting existing MVO timeout behavior, replace with new timeout experience
      // New timeout experience
      fnNewIdleTimeout(); // new idle timeout experience start

    }
  }); // window load

})(jQuery, Drupal, drupalSettings);
;
/**
 * @file
 * Custom code for accordions.
 *
 */
(function ($, Drupal) {

  $(document).ready(function() {
	  $(".faq-accordion .accordion-group .accordion-summary").each(function() {
		  var $faq_accordian = $(this);
		  if($(".expand-collapse-btn").hasClass("collapse_all")) {
			  $faq_accordian.find("button").addClass("collapsed");
			  $faq_accordian.find("button").attr("aria-expanded",false);
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').hide();
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').addClass("accordion-hide");
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').attr("aria-hidden",true);
		  }
		  if($(".expand-collapse-btn").hasClass("expand_all")) {
			  $faq_accordian.find("button").addClass("expanded");
			  $faq_accordian.find("button").attr("aria-expanded",true);
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').show();
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').addClass("accordion-show");
			  $('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').attr("aria-hidden",false);
		  }
		  if($(".expand-collapse-btn").hasClass("expand_first")) {
			  $(".faq-accordion .accordion-group .accordion-summary").eq(0).find("button").addClass("expanded");
			  $(".faq-accordion .accordion-group .accordion-summary").eq(0).find("button").attr("aria-expanded",true);
			  $('div.accordion-details').each(function(item){
				  $(item).removeClass("accordion-show");
				  $(item).removeClass("accordion-hide");
			  });
			  $('div.accordion-details').eq(0).show();
			  $('div.accordion-details').eq(0).addClass("accordion-show");
			  $('div.accordion-details').eq(0).attr("aria-hidden",false);
		  }
		  $faq_accordian.find("button").on("click",function() {
			  if($(this).hasClass("collapsed")) {
				$(this).removeClass("collapsed");
				$(this).addClass("expanded");
				$(this).attr("aria-expanded",true);
				$('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').show();
				$('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').attr("aria-hidden",false);
			  }
			  else if($(this).hasClass("expanded")) {
				$(this).removeClass("expanded");
				$(this).addClass("collapsed");
				$(this).attr("aria-expanded",false);
				$('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').hide();
				$('div.accordion-details[aria-labelledby^='+$faq_accordian.attr("id")+']').attr("aria-hidden",true);
			  }
		  });
	  });
	  $(".expand-collapse-btn button").on("click",function() {
		  if($(this).parent().hasClass("expand_all")) {
			$(this).parent().removeClass("expand_all");
			$(this).parent().addClass("collapse_all");
			$(this).attr("aria-label","Expand All");
			$(this).attr("aria-expanded",false);
			$(this).text("Expand All");
			$(this).parent().find("span").text("Expand All button collapsed");
			$(".faq-accordion .accordion-group .accordion-summary").each(function() {
				var $accordian_heading_expand = $(this);
				$accordian_heading_expand.find("button").addClass("collapsed");
				$accordian_heading_expand.find("button").removeClass("expanded");
				$accordian_heading_expand.find("button").attr("aria-expanded",false);
				$('div.accordion-details[aria-labelledby^='+$accordian_heading_expand.attr("id")+']').hide();
				$('div.accordion-details[aria-labelledby^='+$accordian_heading_expand.attr("id")+']').addClass("accordion-hide");
				$('div.accordion-details[aria-labelledby^='+$accordian_heading_expand.attr("id")+']').attr("aria-hidden",true);
			});
		  }
		  else if($(this).parent().hasClass("expand_first")) {
			$(this).parent().removeClass("expand_first");
			$(this).parent().removeClass("collapse_all");
			$(this).parent().addClass("expand_all");
			$(this).attr("aria-label","Collapse All");
			$(this).text("Collapse All");
			$(this).attr("aria-expanded",true);
			$(this).parent().find("span").text("Collapse All button expanded");
			$(".faq-accordion .accordion-group .accordion-summary").each(function() {
				var $accordian_heading = $(this);
				$accordian_heading.find("button").addClass("expanded");
				$accordian_heading.find("button").removeClass("collapsed");
				$accordian_heading.find("button").attr("aria-expanded",true);
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').show();
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').addClass("accordion-show");
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').attr("aria-hidden",false);
			});
		  }
		  else if($(this).parent().hasClass("collapse_all")) {
			$(this).parent().removeClass("collapse_all");
			$(this).parent().addClass("expand_all");
			$(this).attr("aria-label","Collapse All");
			$(this).text("Collapse All");
			$(this).attr("aria-expanded",true);
			$(this).parent().find("span").text("Collapse All button expanded");
			$(".faq-accordion .accordion-group .accordion-summary").each(function() {
				var $accordian_heading = $(this);
				$accordian_heading.find("button").addClass("expanded");
				$accordian_heading.find("button").removeClass("collapsed");
				$accordian_heading.find("button").attr("aria-expanded",true);
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').show();
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').addClass("accordion-show");
				$('div.accordion-details[aria-labelledby^='+$accordian_heading.attr("id")+']').attr("aria-hidden",false);
			});
		  }
		  setTimeout(function() {
			  $(".expand-collapse-btn span").text("");
		  },1000);
	  });
  });

})(jQuery, Drupal);;
(function ($, Drupal) {
  Drupal.behaviors.resetFocusOnLoad = {
    attach: function (context, settings) {
      // Run only once on the initial page load
      $(window).once('reset-focus').on('load', function () {
        const $topElement = $('#top-anchor');
        
        if ($topElement.length) {
          // Reset scroll to top to prevent browser "helpful" scrolling
          window.scrollTo(0, 0);

          // Move focus to the top element
          $topElement.focus();
	}
      });
    }
  };
})(jQuery, Drupal);
;
(function() {
var w = window, d = document;
w['pi']=function() {
w['pi'].commands = w['pi'].commands || [];
w['pi'].commands.push(arguments);
};
var s = d.createElement('script'); s.async = 1;
s.src = '//js.pulseinsights.com/surveys.js';
var f = d.getElementsByTagName('script')[0];
f.parentNode.insertBefore(s, f);
pi('identify', 'PI-29512454');
pi('get', 'surveys');
})();;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal) {
  Drupal.theme.progressBar = function (id) {
    return "<div id=\"".concat(id, "\" class=\"progress\" aria-live=\"polite\">") + '<div class="progress__label">&nbsp;</div>' + '<div class="progress__track"><div class="progress__bar"></div></div>' + '<div class="progress__percentage"></div>' + '<div class="progress__description">&nbsp;</div>' + '</div>';
  };
  Drupal.ProgressBar = function (id, updateCallback, method, errorCallback) {
    this.id = id;
    this.method = method || 'GET';
    this.updateCallback = updateCallback;
    this.errorCallback = errorCallback;
    this.element = $(Drupal.theme('progressBar', id));
  };
  $.extend(Drupal.ProgressBar.prototype, {
    setProgress: function setProgress(percentage, message, label) {
      if (percentage >= 0 && percentage <= 100) {
        $(this.element).find('div.progress__bar').css('width', "".concat(percentage, "%"));
        $(this.element).find('div.progress__percentage').html("".concat(percentage, "%"));
      }
      $('div.progress__description', this.element).html(message);
      $('div.progress__label', this.element).html(label);
      if (this.updateCallback) {
        this.updateCallback(percentage, message, this);
      }
    },
    startMonitoring: function startMonitoring(uri, delay) {
      this.delay = delay;
      this.uri = uri;
      this.sendPing();
    },
    stopMonitoring: function stopMonitoring() {
      clearTimeout(this.timer);
      this.uri = null;
    },
    sendPing: function sendPing() {
      if (this.timer) {
        clearTimeout(this.timer);
      }
      if (this.uri) {
        var pb = this;
        var uri = this.uri;
        if (uri.indexOf('?') === -1) {
          uri += '?';
        } else {
          uri += '&';
        }
        uri += '_format=json';
        $.ajax({
          type: this.method,
          url: uri,
          data: '',
          dataType: 'json',
          success: function success(progress) {
            if (progress.status === 0) {
              pb.displayError(progress.data);
              return;
            }
            pb.setProgress(progress.percentage, progress.message, progress.label);
            pb.timer = setTimeout(function () {
              pb.sendPing();
            }, pb.delay);
          },
          error: function error(xmlhttp) {
            var e = new Drupal.AjaxError(xmlhttp, pb.uri);
            pb.displayError("<pre>".concat(e.message, "</pre>"));
          }
        });
      }
    },
    displayError: function displayError(string) {
      var error = $('<div class="messages messages--error"></div>').html(string);
      $(this.element).before(error).hide();
      if (this.errorCallback) {
        this.errorCallback(this);
      }
    }
  });
})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, once) {
  var deprecatedMessageSuffix = "is deprecated in Drupal 9.3.0 and will be removed in Drupal 10.0.0. Use the core/once library instead. See https://www.drupal.org/node/3158256";
  var originalJQOnce = $.fn.once;
  var originalJQRemoveOnce = $.fn.removeOnce;
  $.fn.once = function jQueryOnce(id) {
    Drupal.deprecationError({
      message: "jQuery.once() ".concat(deprecatedMessageSuffix)
    });
    return originalJQOnce.apply(this, [id]);
  };
  $.fn.removeOnce = function jQueryRemoveOnce(id) {
    Drupal.deprecationError({
      message: "jQuery.removeOnce() ".concat(deprecatedMessageSuffix)
    });
    return originalJQRemoveOnce.apply(this, [id]);
  };
  var drupalOnce = once;
  function augmentedOnce(id, selector, context) {
    originalJQOnce.apply($(selector, context), [id]);
    return drupalOnce(id, selector, context);
  }
  function remove(id, selector, context) {
    originalJQRemoveOnce.apply($(selector, context), [id]);
    return drupalOnce.remove(id, selector, context);
  }
  window.once = Object.assign(augmentedOnce, drupalOnce, {
    remove: remove
  });
})(jQuery, once);;
loadjs=function(){var h=function(){},c={},u={},f={};function o(e,n){if(e){var r=f[e];if(u[e]=n,r)for(;r.length;)r[0](e,n),r.splice(0,1)}}function l(e,n){e.call&&(e={success:e}),n.length?(e.error||h)(n):(e.success||h)(e)}function d(r,t,s,i){var c,o,e=document,n=s.async,u=(s.numRetries||0)+1,f=s.before||h,l=r.replace(/[\?|#].*$/,""),a=r.replace(/^(css|img)!/,"");i=i||0,/(^css!|\.css$)/.test(l)?((o=e.createElement("link")).rel="stylesheet",o.href=a,(c="hideFocus"in o)&&o.relList&&(c=0,o.rel="preload",o.as="style")):/(^img!|\.(png|gif|jpg|svg|webp)$)/.test(l)?(o=e.createElement("img")).src=a:((o=e.createElement("script")).src=r,o.async=void 0===n||n),!(o.onload=o.onerror=o.onbeforeload=function(e){var n=e.type[0];if(c)try{o.sheet.cssText.length||(n="e")}catch(e){18!=e.code&&(n="e")}if("e"==n){if((i+=1)<u)return d(r,t,s,i)}else if("preload"==o.rel&&"style"==o.as)return o.rel="stylesheet";t(r,n,e.defaultPrevented)})!==f(r,o)&&e.head.appendChild(o)}function r(e,n,r){var t,s;if(n&&n.trim&&(t=n),s=(t?r:n)||{},t){if(t in c)throw"LoadJS";c[t]=!0}function i(n,r){!function(e,t,n){var r,s,i=(e=e.push?e:[e]).length,c=i,o=[];for(r=function(e,n,r){if("e"==n&&o.push(e),"b"==n){if(!r)return;o.push(e)}--i||t(o)},s=0;s<c;s++)d(e[s],r,n)}(e,function(e){l(s,e),n&&l({success:n,error:r},e),o(t,e)},s)}if(s.returnPromise)return new Promise(i);i()}return r.ready=function(e,n){return function(e,r){e=e.push?e:[e];var n,t,s,i=[],c=e.length,o=c;for(n=function(e,n){n.length&&i.push(e),--o||r(i)};c--;)t=e[c],(s=u[t])?n(t,s):(f[t]=f[t]||[]).push(n)}(e,function(e){l(n,e)}),r},r.done=function(e){o(e,[])},r.reset=function(){c={},u={},f={}},r.isDefined=function(e){return e in c},r}();;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function (Drupal) {
  Drupal.behaviors.responsiveImageAJAX = {
    attach: function attach() {
      if (window.picturefill) {
        window.picturefill();
      }
    }
  };
})(Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }
(function ($, window, Drupal, drupalSettings, loadjs, _ref) {
  var isFocusable = _ref.isFocusable,
    tabbable = _ref.tabbable;
  Drupal.behaviors.AJAX = {
    attach: function attach(context, settings) {
      function loadAjaxBehavior(base) {
        var elementSettings = settings.ajax[base];
        if (typeof elementSettings.selector === 'undefined') {
          elementSettings.selector = "#".concat(base);
        }
        once('drupal-ajax', $(elementSettings.selector)).forEach(function (el) {
          elementSettings.element = el;
          elementSettings.base = base;
          Drupal.ajax(elementSettings);
        });
      }
      Object.keys(settings.ajax || {}).forEach(function (base) {
        return loadAjaxBehavior(base);
      });
      Drupal.ajax.bindAjaxLinks(document.body);
      once('ajax', '.use-ajax-submit').forEach(function (el) {
        var elementSettings = {};
        elementSettings.url = $(el.form).attr('action');
        elementSettings.setClick = true;
        elementSettings.event = 'click';
        elementSettings.progress = {
          type: 'throbber'
        };
        elementSettings.base = el.id;
        elementSettings.element = el;
        Drupal.ajax(elementSettings);
      });
    },
    detach: function detach(context, settings, trigger) {
      if (trigger === 'unload') {
        Drupal.ajax.expired().forEach(function (instance) {
          Drupal.ajax.instances[instance.instanceIndex] = null;
        });
      }
    }
  };
  Drupal.AjaxError = function (xmlhttp, uri, customMessage) {
    var statusCode;
    var statusText;
    var responseText;
    if (xmlhttp.status) {
      statusCode = "\n".concat(Drupal.t('An AJAX HTTP error occurred.'), "\n").concat(Drupal.t('HTTP Result Code: !status', {
        '!status': xmlhttp.status
      }));
    } else {
      statusCode = "\n".concat(Drupal.t('An AJAX HTTP request terminated abnormally.'));
    }
    statusCode += "\n".concat(Drupal.t('Debugging information follows.'));
    var pathText = "\n".concat(Drupal.t('Path: !uri', {
      '!uri': uri
    }));
    statusText = '';
    try {
      statusText = "\n".concat(Drupal.t('StatusText: !statusText', {
        '!statusText': xmlhttp.statusText.trim()
      }));
    } catch (e) {}
    responseText = '';
    try {
      responseText = "\n".concat(Drupal.t('ResponseText: !responseText', {
        '!responseText': xmlhttp.responseText.trim()
      }));
    } catch (e) {}
    responseText = responseText.replace(/<("[^"]*"|'[^']*'|[^'">])*>/gi, '');
    responseText = responseText.replace(/[\n]+\s+/g, '\n');
    var readyStateText = xmlhttp.status === 0 ? "\n".concat(Drupal.t('ReadyState: !readyState', {
      '!readyState': xmlhttp.readyState
    })) : '';
    customMessage = customMessage ? "\n".concat(Drupal.t('CustomMessage: !customMessage', {
      '!customMessage': customMessage
    })) : '';
    this.message = statusCode + pathText + statusText + customMessage + responseText + readyStateText;
    this.name = 'AjaxError';
  };
  Drupal.AjaxError.prototype = new Error();
  Drupal.AjaxError.prototype.constructor = Drupal.AjaxError;
  Drupal.ajax = function (settings) {
    if (arguments.length !== 1) {
      throw new Error('Drupal.ajax() function must be called with one configuration object only');
    }
    var base = settings.base || false;
    var element = settings.element || false;
    delete settings.base;
    delete settings.element;
    if (!settings.progress && !element) {
      settings.progress = false;
    }
    var ajax = new Drupal.Ajax(base, element, settings);
    ajax.instanceIndex = Drupal.ajax.instances.length;
    Drupal.ajax.instances.push(ajax);
    return ajax;
  };
  Drupal.ajax.instances = [];
  Drupal.ajax.expired = function () {
    return Drupal.ajax.instances.filter(function (instance) {
      return instance && instance.element !== false && !document.body.contains(instance.element);
    });
  };
  Drupal.ajax.bindAjaxLinks = function (element) {
    once('ajax', '.use-ajax', element).forEach(function (ajaxLink) {
      var $linkElement = $(ajaxLink);
      var elementSettings = {
        progress: {
          type: 'throbber'
        },
        dialogType: $linkElement.data('dialog-type'),
        dialog: $linkElement.data('dialog-options'),
        dialogRenderer: $linkElement.data('dialog-renderer'),
        base: $linkElement.attr('id'),
        element: ajaxLink
      };
      var href = $linkElement.attr('href');
      if (href) {
        elementSettings.url = href;
        elementSettings.event = 'click';
      }
      Drupal.ajax(elementSettings);
    });
  };
  Drupal.Ajax = function (base, element, elementSettings) {
    var defaults = {
      event: element ? 'mousedown' : null,
      keypress: true,
      selector: base ? "#".concat(base) : null,
      effect: 'none',
      speed: 'none',
      method: 'replaceWith',
      progress: {
        type: 'throbber',
        message: Drupal.t('Please wait...')
      },
      submit: {
        js: true
      }
    };
    $.extend(this, defaults, elementSettings);
    this.commands = new Drupal.AjaxCommands();
    this.instanceIndex = false;
    if (this.wrapper) {
      this.wrapper = "#".concat(this.wrapper);
    }
    this.element = element;
    this.element_settings = elementSettings;
    this.elementSettings = elementSettings;
    if (this.element && this.element.form) {
      this.$form = $(this.element.form);
    }
    if (!this.url) {
      var $element = $(this.element);
      if ($element.is('a')) {
        this.url = $element.attr('href');
      } else if (this.element && element.form) {
        this.url = this.$form.attr('action');
      }
    }
    var originalUrl = this.url;
    this.url = this.url.replace(/\/nojs(\/|$|\?|#)/, '/ajax$1');
    if (drupalSettings.ajaxTrustedUrl[originalUrl]) {
      drupalSettings.ajaxTrustedUrl[this.url] = true;
    }
    var ajax = this;
    ajax.options = {
      url: ajax.url,
      data: ajax.submit,
      isInProgress: function isInProgress() {
        return ajax.ajaxing;
      },
      beforeSerialize: function beforeSerialize(elementSettings, options) {
        return ajax.beforeSerialize(elementSettings, options);
      },
      beforeSubmit: function beforeSubmit(formValues, elementSettings, options) {
        ajax.ajaxing = true;
        return ajax.beforeSubmit(formValues, elementSettings, options);
      },
      beforeSend: function beforeSend(xmlhttprequest, options) {
        ajax.ajaxing = true;
        return ajax.beforeSend(xmlhttprequest, options);
      },
      success: function success(response, status, xmlhttprequest) {
        var _this = this;
        if (typeof response === 'string') {
          response = $.parseJSON(response);
        }
        if (response !== null && !drupalSettings.ajaxTrustedUrl[ajax.url]) {
          if (xmlhttprequest.getResponseHeader('X-Drupal-Ajax-Token') !== '1') {
            var customMessage = Drupal.t('The response failed verification so will not be processed.');
            return ajax.error(xmlhttprequest, ajax.url, customMessage);
          }
        }
        return Promise.resolve(ajax.success(response, status)).then(function () {
          ajax.ajaxing = false;
          $(document).trigger('ajaxSuccess', [xmlhttprequest, _this]);
          $(document).trigger('ajaxComplete', [xmlhttprequest, _this]);
          if (--$.active === 0) {
            $(document).trigger('ajaxStop');
          }
        });
      },
      error: function error(xmlhttprequest, status, _error) {
        ajax.ajaxing = false;
      },
      complete: function complete(xmlhttprequest, status) {
        if (status === 'error' || status === 'parsererror') {
          return ajax.error(xmlhttprequest, ajax.url);
        }
      },
      dataType: 'json',
      jsonp: false,
      type: 'POST'
    };
    if (elementSettings.dialog) {
      ajax.options.data.dialogOptions = elementSettings.dialog;
    }
    if (ajax.options.url.indexOf('?') === -1) {
      ajax.options.url += '?';
    } else {
      ajax.options.url += '&';
    }
    var wrapper = "drupal_".concat(elementSettings.dialogType || 'ajax');
    if (elementSettings.dialogRenderer) {
      wrapper += ".".concat(elementSettings.dialogRenderer);
    }
    ajax.options.url += "".concat(Drupal.ajax.WRAPPER_FORMAT, "=").concat(wrapper);
    $(ajax.element).on(elementSettings.event, function (event) {
      if (!drupalSettings.ajaxTrustedUrl[ajax.url] && !Drupal.url.isLocal(ajax.url)) {
        throw new Error(Drupal.t('The callback URL is not local and not trusted: !url', {
          '!url': ajax.url
        }));
      }
      return ajax.eventResponse(this, event);
    });
    if (elementSettings.keypress) {
      $(ajax.element).on('keypress', function (event) {
        return ajax.keypressResponse(this, event);
      });
    }
    if (elementSettings.prevent) {
      $(ajax.element).on(elementSettings.prevent, false);
    }
  };
  Drupal.ajax.WRAPPER_FORMAT = '_wrapper_format';
  Drupal.Ajax.AJAX_REQUEST_PARAMETER = '_drupal_ajax';
  Drupal.Ajax.prototype.execute = function () {
    if (this.ajaxing) {
      return;
    }
    try {
      this.beforeSerialize(this.element, this.options);
      return $.ajax(this.options);
    } catch (e) {
      this.ajaxing = false;
      window.alert("An error occurred while attempting to process ".concat(this.options.url, ": ").concat(e.message));
      return $.Deferred().reject();
    }
  };
  Drupal.Ajax.prototype.keypressResponse = function (element, event) {
    var ajax = this;
    if (event.which === 13 || event.which === 32 && element.type !== 'text' && element.type !== 'textarea' && element.type !== 'tel' && element.type !== 'number') {
      event.preventDefault();
      event.stopPropagation();
      $(element).trigger(ajax.elementSettings.event);
    }
  };
  Drupal.Ajax.prototype.eventResponse = function (element, event) {
    event.preventDefault();
    event.stopPropagation();
    var ajax = this;
    if (ajax.ajaxing) {
      return;
    }
    try {
      if (ajax.$form) {
        if (ajax.setClick) {
          element.form.clk = element;
        }
        ajax.$form.ajaxSubmit(ajax.options);
      } else {
        ajax.beforeSerialize(ajax.element, ajax.options);
        $.ajax(ajax.options);
      }
    } catch (e) {
      ajax.ajaxing = false;
      window.alert("An error occurred while attempting to process ".concat(ajax.options.url, ": ").concat(e.message));
    }
  };
  Drupal.Ajax.prototype.beforeSerialize = function (element, options) {
    if (this.$form && document.body.contains(this.$form.get(0))) {
      var settings = this.settings || drupalSettings;
      Drupal.detachBehaviors(this.$form.get(0), settings, 'serialize');
    }
    options.data[Drupal.Ajax.AJAX_REQUEST_PARAMETER] = 1;
    var pageState = drupalSettings.ajaxPageState;
    options.data['ajax_page_state[theme]'] = pageState.theme;
    options.data['ajax_page_state[theme_token]'] = pageState.theme_token;
    options.data['ajax_page_state[libraries]'] = pageState.libraries;
  };
  Drupal.Ajax.prototype.beforeSubmit = function (formValues, element, options) {};
  Drupal.Ajax.prototype.beforeSend = function (xmlhttprequest, options) {
    if (this.$form) {
      options.extraData = options.extraData || {};
      options.extraData.ajax_iframe_upload = '1';
      var v = $.fieldValue(this.element);
      if (v !== null) {
        options.extraData[this.element.name] = v;
      }
    }
    $(this.element).prop('disabled', true);
    if (!this.progress || !this.progress.type) {
      return;
    }
    var progressIndicatorMethod = "setProgressIndicator".concat(this.progress.type.slice(0, 1).toUpperCase()).concat(this.progress.type.slice(1).toLowerCase());
    if (progressIndicatorMethod in this && typeof this[progressIndicatorMethod] === 'function') {
      this[progressIndicatorMethod].call(this);
    }
  };
  Drupal.theme.ajaxProgressThrobber = function (message) {
    var messageMarkup = typeof message === 'string' ? Drupal.theme('ajaxProgressMessage', message) : '';
    var throbber = '<div class="throbber">&nbsp;</div>';
    return "<div class=\"ajax-progress ajax-progress-throbber\">".concat(throbber).concat(messageMarkup, "</div>");
  };
  Drupal.theme.ajaxProgressIndicatorFullscreen = function () {
    return '<div class="ajax-progress ajax-progress-fullscreen">&nbsp;</div>';
  };
  Drupal.theme.ajaxProgressMessage = function (message) {
    return "<div class=\"message\">".concat(message, "</div>");
  };
  Drupal.theme.ajaxProgressBar = function ($element) {
    return $('<div class="ajax-progress ajax-progress-bar"></div>').append($element);
  };
  Drupal.Ajax.prototype.setProgressIndicatorBar = function () {
    var progressBar = new Drupal.ProgressBar("ajax-progress-".concat(this.element.id), $.noop, this.progress.method, $.noop);
    if (this.progress.message) {
      progressBar.setProgress(-1, this.progress.message);
    }
    if (this.progress.url) {
      progressBar.startMonitoring(this.progress.url, this.progress.interval || 1500);
    }
    this.progress.element = $(Drupal.theme('ajaxProgressBar', progressBar.element));
    this.progress.object = progressBar;
    $(this.element).after(this.progress.element);
  };
  Drupal.Ajax.prototype.setProgressIndicatorThrobber = function () {
    this.progress.element = $(Drupal.theme('ajaxProgressThrobber', this.progress.message));
    $(this.element).after(this.progress.element);
  };
  Drupal.Ajax.prototype.setProgressIndicatorFullscreen = function () {
    this.progress.element = $(Drupal.theme('ajaxProgressIndicatorFullscreen'));
    $('body').append(this.progress.element);
  };
  Drupal.Ajax.prototype.commandExecutionQueue = function (response, status) {
    var _this2 = this;
    var ajaxCommands = this.commands;
    return Object.keys(response || {}).reduce(function (executionQueue, key) {
      return executionQueue.then(function () {
        var command = response[key].command;
        if (command && ajaxCommands[command]) {
          return ajaxCommands[command](_this2, response[key], status);
        }
      });
    }, Promise.resolve());
  };
  Drupal.Ajax.prototype.success = function (response, status) {
    var _this3 = this;
    if (this.progress.element) {
      $(this.progress.element).remove();
    }
    if (this.progress.object) {
      this.progress.object.stopMonitoring();
    }
    $(this.element).prop('disabled', false);
    var elementParents = $(this.element).parents('[data-drupal-selector]').addBack().toArray();
    var focusChanged = Object.keys(response || {}).some(function (key) {
      var _response$key = response[key],
        command = _response$key.command,
        method = _response$key.method;
      return command === 'focusFirst' || command === 'invoke' && method === 'focus';
    });
    return this.commandExecutionQueue(response, status).then(function () {
      if (!focusChanged && _this3.element && !$(_this3.element).data('disable-refocus')) {
        var target = false;
        for (var n = elementParents.length - 1; !target && n >= 0; n--) {
          target = document.querySelector("[data-drupal-selector=\"".concat(elementParents[n].getAttribute('data-drupal-selector'), "\"]"));
        }
        if (target) {
          $(target).trigger('focus');
        }
      }
      if (_this3.$form && document.body.contains(_this3.$form.get(0))) {
        var settings = _this3.settings || drupalSettings;
        Drupal.attachBehaviors(_this3.$form.get(0), settings);
      }
      _this3.settings = null;
    }).catch(function (error) {
      return console.error(Drupal.t('An error occurred during the execution of the Ajax response: !error', {
        '!error': error
      }));
    });
  };
  Drupal.Ajax.prototype.getEffect = function (response) {
    var type = response.effect || this.effect;
    var speed = response.speed || this.speed;
    var effect = {};
    if (type === 'none') {
      effect.showEffect = 'show';
      effect.hideEffect = 'hide';
      effect.showSpeed = '';
    } else if (type === 'fade') {
      effect.showEffect = 'fadeIn';
      effect.hideEffect = 'fadeOut';
      effect.showSpeed = speed;
    } else {
      effect.showEffect = "".concat(type, "Toggle");
      effect.hideEffect = "".concat(type, "Toggle");
      effect.showSpeed = speed;
    }
    return effect;
  };
  Drupal.Ajax.prototype.error = function (xmlhttprequest, uri, customMessage) {
    if (this.progress.element) {
      $(this.progress.element).remove();
    }
    if (this.progress.object) {
      this.progress.object.stopMonitoring();
    }
    $(this.wrapper).show();
    $(this.element).prop('disabled', false);
    if (this.$form && document.body.contains(this.$form.get(0))) {
      var settings = this.settings || drupalSettings;
      Drupal.attachBehaviors(this.$form.get(0), settings);
    }
    throw new Drupal.AjaxError(xmlhttprequest, uri, customMessage);
  };
  Drupal.theme.ajaxWrapperNewContent = function ($newContent, ajax, response) {
    return (response.effect || ajax.effect) !== 'none' && $newContent.filter(function (i) {
      return !($newContent[i].nodeName === '#comment' || $newContent[i].nodeName === '#text' && /^(\s|\n|\r)*$/.test($newContent[i].textContent));
    }).length > 1 ? Drupal.theme('ajaxWrapperMultipleRootElements', $newContent) : $newContent;
  };
  Drupal.theme.ajaxWrapperMultipleRootElements = function ($elements) {
    return $('<div></div>').append($elements);
  };
  Drupal.AjaxCommands = function () {};
  Drupal.AjaxCommands.prototype = {
    insert: function insert(ajax, response) {
      var $wrapper = response.selector ? $(response.selector) : $(ajax.wrapper);
      var method = response.method || ajax.method;
      var effect = ajax.getEffect(response);
      var settings = response.settings || ajax.settings || drupalSettings;
      var $newContent = $($.parseHTML(response.data, document, true));
      $newContent = Drupal.theme('ajaxWrapperNewContent', $newContent, ajax, response);
      switch (method) {
        case 'html':
        case 'replaceWith':
        case 'replaceAll':
        case 'empty':
        case 'remove':
          Drupal.detachBehaviors($wrapper.get(0), settings);
          break;
        default:
          break;
      }
      $wrapper[method]($newContent);
      if (effect.showEffect !== 'show') {
        $newContent.hide();
      }
      var $ajaxNewContent = $newContent.find('.ajax-new-content');
      if ($ajaxNewContent.length) {
        $ajaxNewContent.hide();
        $newContent.show();
        $ajaxNewContent[effect.showEffect](effect.showSpeed);
      } else if (effect.showEffect !== 'show') {
        $newContent[effect.showEffect](effect.showSpeed);
      }
      if ($newContent.parents('html').length) {
        $newContent.each(function (index, element) {
          if (element.nodeType === Node.ELEMENT_NODE) {
            Drupal.attachBehaviors(element, settings);
          }
        });
      }
    },
    remove: function remove(ajax, response, status) {
      var settings = response.settings || ajax.settings || drupalSettings;
      $(response.selector).each(function () {
        Drupal.detachBehaviors(this, settings);
      }).remove();
    },
    changed: function changed(ajax, response, status) {
      var $element = $(response.selector);
      if (!$element.hasClass('ajax-changed')) {
        $element.addClass('ajax-changed');
        if (response.asterisk) {
          $element.find(response.asterisk).append(" <abbr class=\"ajax-changed\" title=\"".concat(Drupal.t('Changed'), "\">*</abbr> "));
        }
      }
    },
    alert: function alert(ajax, response, status) {
      window.alert(response.text);
    },
    announce: function announce(ajax, response) {
      if (response.priority) {
        Drupal.announce(response.text, response.priority);
      } else {
        Drupal.announce(response.text);
      }
    },
    redirect: function redirect(ajax, response, status) {
      window.location = response.url;
    },
    css: function css(ajax, response, status) {
      $(response.selector).css(response.argument);
    },
    settings: function settings(ajax, response, status) {
      var ajaxSettings = drupalSettings.ajax;
      if (ajaxSettings) {
        Drupal.ajax.expired().forEach(function (instance) {
          if (instance.selector) {
            var selector = instance.selector.replace('#', '');
            if (selector in ajaxSettings) {
              delete ajaxSettings[selector];
            }
          }
        });
      }
      if (response.merge) {
        $.extend(true, drupalSettings, response.settings);
      } else {
        ajax.settings = response.settings;
      }
    },
    data: function data(ajax, response, status) {
      $(response.selector).data(response.name, response.value);
    },
    focusFirst: function focusFirst(ajax, response, status) {
      var focusChanged = false;
      var container = document.querySelector(response.selector);
      if (container) {
        var tabbableElements = tabbable(container);
        if (tabbableElements.length) {
          tabbableElements[0].focus();
          focusChanged = true;
        } else if (isFocusable(container)) {
          container.focus();
          focusChanged = true;
        }
      }
      if (ajax.hasOwnProperty('element') && !focusChanged) {
        ajax.element.focus();
      }
    },
    invoke: function invoke(ajax, response, status) {
      var $element = $(response.selector);
      $element[response.method].apply($element, _toConsumableArray(response.args));
    },
    restripe: function restripe(ajax, response, status) {
      $(response.selector).find('> tbody > tr:visible, > tr:visible').removeClass('odd even').filter(':even').addClass('odd').end().filter(':odd').addClass('even');
    },
    update_build_id: function update_build_id(ajax, response, status) {
      document.querySelectorAll("input[name=\"form_build_id\"][value=\"".concat(response.old, "\"]")).forEach(function (item) {
        item.value = response.new;
      });
    },
    add_css: function add_css(ajax, response, status) {
      $('head').prepend(response.data);
    },
    message: function message(ajax, response) {
      var messages = new Drupal.Message(document.querySelector(response.messageWrapperQuerySelector));
      if (response.clearPrevious) {
        messages.clear();
      }
      messages.add(response.message, response.messageOptions);
    },
    add_js: function add_js(ajax, response, status) {
      var parentEl = document.querySelector(response.selector || 'body');
      var settings = ajax.settings || drupalSettings;
      var allUniqueBundleIds = response.data.map(function (script) {
        var uniqueBundleId = script.src + ajax.instanceIndex;
        loadjs(script.src, uniqueBundleId, {
          async: false,
          before: function before(path, scriptEl) {
            Object.keys(script).forEach(function (attributeKey) {
              scriptEl.setAttribute(attributeKey, script[attributeKey]);
            });
            parentEl.appendChild(scriptEl);
            return false;
          }
        });
        return uniqueBundleId;
      });
      return new Promise(function (resolve, reject) {
        loadjs.ready(allUniqueBundleIds, {
          success: function success() {
            Drupal.attachBehaviors(parentEl, settings);
            resolve();
          },
          error: function error(depsNotFound) {
            var message = Drupal.t("The following files could not be loaded: @dependencies", {
              '@dependencies': depsNotFound.join(', ')
            });
            reject(message);
          }
        });
      });
    }
  };
  var stopEvent = function stopEvent(xhr, settings) {
    return xhr.getResponseHeader('X-Drupal-Ajax-Token') === '1' && settings.isInProgress && settings.isInProgress();
  };
  $.extend(true, $.event.special, {
    ajaxSuccess: {
      trigger: function trigger(event, xhr, settings) {
        if (stopEvent(xhr, settings)) {
          return false;
        }
      }
    },
    ajaxComplete: {
      trigger: function trigger(event, xhr, settings) {
        if (stopEvent(xhr, settings)) {
          $.active++;
          return false;
        }
      }
    }
  });
})(jQuery, window, Drupal, drupalSettings, loadjs, window.tabbable);;
/**
 * @file
 * Replaced Drupal cores ajax throbber(s), see: https://www.drupal.org/node/2974681
 *
 */
(function ($, Drupal) {
  /* console.log('Inside THROBBER override.....................');
  //Drupal.theme.ajaxProgressThrobber = () => '<div>Loading ...ajaxProgressThrobber...</div>';
  Drupal.theme.ajaxProgressThrobber = () => '<div class="ajax-progress"><div class="throbber">This is test 111111</div></div>';
  //Drupal.theme.ajaxProgressIndicatorFullscreen = () => '<div>Loading...ajaxProgressIndicatorFullscreen...</div>';
  Drupal.theme.ajaxProgressIndicatorFullscreen = () => '<div class="ajax-progress"><div class="throbber">this is test 222222222222</div></div>';
  Drupal.theme.ajaxProgressMessage = message => '<div class="my-message">' + message + '</div>'; */
  /* Drupal.theme.ajaxProgressThrobber = function () {
    return "<div class=\"ajax-spinner ajax-spinner--inline\"><span class=\"ajax-spinner__label\">" + Drupal.t('Loading&nbsp;&hellip;', {}, {
      context: "Loading text for Drupal cores Ajax throbber (inline)... INLINE EDITED..."
    }) + "</span></div>";
  }; */
  
  /* var blnSubmit = false;
  if (typeof Drupal.Ajax !== 'undefined' && typeof Drupal.Ajax.prototype.beforeSubmitOriginal === 'undefined' && $('ul.webform-progress-tracker.progress-tracker li[data-webform-page="webform_preview"][class*="is-active"]').length > 0) {
    Drupal.Ajax.prototype.beforeSubmitOriginal = Drupal.Ajax.prototype.beforeSubmit;
    Drupal.Ajax.prototype.beforeSubmit = function (form_values, element_settings, options) {
      console.log(options);
      console.log(options.data._triggering_element_value); // dot json access would be faster
      
      // below check is only for submit button i.e., value = submit, custom throbber
      if (options.data._triggering_element_value.toLowerCase() == 'submit') {
        blnSubmit = true;
      }
      // data-webform-page = webform_preview
      //if ($('ul.webform-progress-tracker.progress-tracker li[class*="is-active"]').attr('title') == 'Business Information') {
        
      //}
        // You can also customize only throbber message:
        // Drupal.theme.ajaxProgressMessage = message => '<div class="my-message">' + message + '</div>';
        return this.beforeSubmitOriginal();
      };
    } */
    
    /* console.log('current active...');
    console.log($('ul.webform-progress-tracker.progress-tracker li[data-webform-page="webform_preview"]').length);
    Drupal.theme.ajaxProgressIndicatorFullscreen = function () {
      
      //console.log('blnSubmit::'+blnSubmit);
      //if ($('ul.webform-progress-tracker.progress-tracker li[data-webform-page="webform_preview"][class*="is-active"]').length > 0 && blnSubmit) {
      if ($('ul.webform-progress-tracker.progress-tracker li[data-webform-page="webform_preview"][class*="is-active"]').length > 0) {
      //if ($('ul.webform-progress-tracker.progress-tracker li[data-webform-page="business_information"][class*="is-active"]').length > 0) {//business_information
        return "<div style=\"color: white;\" class=\"ajax-progress ajax-progress-fullscreen vzc_fclaim_custom_throbber\"><h2>Please wait...</h2><br/><br/><br/><br/><br/><h5>Please wait while your form submits...</h5><br/><br/><h5>Do not close browser.  Redirecting...</h5></div>";
      }
      else {
        // generic throbber
        return "<div style=\"color: white;\" class=\"ajax-progress ajax-progress-fullscreen\"></div>";
      }
    }; */
})(jQuery, Drupal);;
(function (Drupal) {
  /**
   * Command to attach data using jQuery's data API.
   *
   * @param {Drupal.Ajax} [ajax]
   *   {@link Drupal.Ajax} object created by {@link Drupal.ajax}.
   * @param {object} response
   *   The response from the Ajax request.
   * @param {string} response.event_name
   *   The event name
   * @param {object} response.data
   *   The value of the event.
   */
  Drupal.AjaxCommands.prototype.gtagEvent = function (ajax, response) {
    gtag('event', response.event_name, response.data);
  };
})(Drupal);
;
// If object-fit is supported, add a class to the html tag.
if ('objectFit' in document.documentElement.style === true) {
  document.documentElement.classList.add('object-fit');
} else {
  document.documentElement.classList.add('no-object-fit');
}

//To Hide the Print Button on this Page
if ($(".print-me").length >0 && "/about/privacy/full-privacy-policy" == window.location.pathname) {
  const urlParams = new URLSearchParams(window.location.search);
  const webViewTrue = urlParams.get('webView');
  // Only if we have Query Param of Web View.
  if (webViewTrue) {
    $(".print-me").hide();
  }
}
;
!function(i){"use strict";"function"==typeof define&&define.amd?define(["jquery"],i):"undefined"!=typeof exports?module.exports=i(require("jquery")):i(jQuery)}(function(i){"use strict";var e=window.Slick||{};(e=function(){var e=0;return function(t,o){var s,n=this;n.defaults={accessibility:!0,adaptiveHeight:!1,appendArrows:i(t),appendDots:i(t),arrows:!0,asNavFor:null,prevArrow:'<button class="slick-prev" aria-label="Previous" type="button">Previous</button>',nextArrow:'<button class="slick-next" aria-label="Next" type="button">Next</button>',autoplay:!1,autoplaySpeed:3e3,centerMode:!1,centerPadding:"50px",cssEase:"ease",customPaging:function(e,t){return i('<button type="button" />').text(t+1)},dots:!1,dotsClass:"slick-dots",draggable:!0,easing:"linear",edgeFriction:.35,fade:!1,focusOnSelect:!1,focusOnChange:!0,infinite:!0,initialSlide:0,lazyLoad:"ondemand",mobileFirst:!1,pauseOnHover:!0,pauseOnFocus:!0,pauseOnDotsHover:!1,respondTo:"window",responsive:null,rows:1,rtl:!1,slide:"",slidesPerRow:1,slidesToShow:1,slidesToScroll:1,speed:500,swipe:!0,swipeToSlide:!1,touchMove:!0,touchThreshold:5,useCSS:!0,useTransform:!0,variableWidth:!1,vertical:!1,verticalSwiping:!1,waitForAnimate:!0,zIndex:1e3},n.initials={animating:!1,dragging:!1,autoPlayTimer:null,currentDirection:0,currentLeft:null,currentSlide:0,direction:1,$dots:null,listWidth:null,listHeight:null,loadIndex:0,$nextArrow:null,$prevArrow:null,scrolling:!1,slideCount:null,slideWidth:null,$slideTrack:null,$slides:null,sliding:!1,slideOffset:0,swipeLeft:null,swiping:!1,$list:null,touchObject:{},transformsEnabled:!1,unslicked:!1},i.extend(n,n.initials),n.activeBreakpoint=null,n.animType=null,n.animProp=null,n.breakpoints=[],n.breakpointSettings=[],n.cssTransitions=!1,n.focussed=!1,n.interrupted=!1,n.hidden="hidden",n.paused=!0,n.positionProp=null,n.respondTo=null,n.rowCount=1,n.shouldClick=!0,n.$slider=i(t),n.$slidesCache=null,n.transformType=null,n.transitionType=null,n.visibilityChange="visibilitychange",n.windowWidth=0,n.windowTimer=null,s=i(t).data("slick")||{},n.options=i.extend({},n.defaults,o,s),n.currentSlide=n.options.initialSlide,n.originalSettings=n.options,void 0!==document.mozHidden?(n.hidden="mozHidden",n.visibilityChange="mozvisibilitychange"):void 0!==document.webkitHidden&&(n.hidden="webkitHidden",n.visibilityChange="webkitvisibilitychange"),n.autoPlay=i.proxy(n.autoPlay,n),n.autoPlayClear=i.proxy(n.autoPlayClear,n),n.autoPlayIterator=i.proxy(n.autoPlayIterator,n),n.changeSlide=i.proxy(n.changeSlide,n),n.clickHandler=i.proxy(n.clickHandler,n),n.selectHandler=i.proxy(n.selectHandler,n),n.setPosition=i.proxy(n.setPosition,n),n.swipeHandler=i.proxy(n.swipeHandler,n),n.dragHandler=i.proxy(n.dragHandler,n),n.keyHandler=i.proxy(n.keyHandler,n),n.instanceUid=e++,n.htmlExpr=/^(?:\s*(<[\w\W]+>)[^>]*)$/,n.registerBreakpoints(),n.init(!0)}}()).prototype.activateADA=function(){this.$slideTrack.find(".slick-active").attr({"aria-hidden":"false"}).find("a, input, button, select").attr({tabindex:"0"})},e.prototype.addSlide=e.prototype.slickAdd=function(e,t,o){var s=this;if("boolean"==typeof t)o=t,t=null;else if(t<0||t>=s.slideCount)return!1;s.unload(),"number"==typeof t?0===t&&0===s.$slides.length?i(e).appendTo(s.$slideTrack):o?i(e).insertBefore(s.$slides.eq(t)):i(e).insertAfter(s.$slides.eq(t)):!0===o?i(e).prependTo(s.$slideTrack):i(e).appendTo(s.$slideTrack),s.$slides=s.$slideTrack.children(this.options.slide),s.$slideTrack.children(this.options.slide).detach(),s.$slideTrack.append(s.$slides),s.$slides.each(function(e,t){i(t).attr("data-slick-index",e)}),s.$slidesCache=s.$slides,s.reinit()},e.prototype.animateHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.animate({height:e},i.options.speed)}},e.prototype.animateSlide=function(e,t){var o={},s=this;s.animateHeight(),!0===s.options.rtl&&!1===s.options.vertical&&(e=-e),!1===s.transformsEnabled?!1===s.options.vertical?s.$slideTrack.animate({left:e},s.options.speed,s.options.easing,t):s.$slideTrack.animate({top:e},s.options.speed,s.options.easing,t):!1===s.cssTransitions?(!0===s.options.rtl&&(s.currentLeft=-s.currentLeft),i({animStart:s.currentLeft}).animate({animStart:e},{duration:s.options.speed,easing:s.options.easing,step:function(i){i=Math.ceil(i),!1===s.options.vertical?(o[s.animType]="translate("+i+"px, 0px)",s.$slideTrack.css(o)):(o[s.animType]="translate(0px,"+i+"px)",s.$slideTrack.css(o))},complete:function(){t&&t.call()}})):(s.applyTransition(),e=Math.ceil(e),!1===s.options.vertical?o[s.animType]="translate3d("+e+"px, 0px, 0px)":o[s.animType]="translate3d(0px,"+e+"px, 0px)",s.$slideTrack.css(o),t&&setTimeout(function(){s.disableTransition(),t.call()},s.options.speed))},e.prototype.getNavTarget=function(){var e=this,t=e.options.asNavFor;return t&&null!==t&&(t=i(t).not(e.$slider)),t},e.prototype.asNavFor=function(e){var t=this.getNavTarget();null!==t&&"object"==typeof t&&t.each(function(){var t=i(this).slick("getSlick");t.unslicked||t.slideHandler(e,!0)})},e.prototype.applyTransition=function(i){var e=this,t={};!1===e.options.fade?t[e.transitionType]=e.transformType+" "+e.options.speed+"ms "+e.options.cssEase:t[e.transitionType]="opacity "+e.options.speed+"ms "+e.options.cssEase,!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.autoPlay=function(){var i=this;i.autoPlayClear(),i.slideCount>i.options.slidesToShow&&(i.autoPlayTimer=setInterval(i.autoPlayIterator,i.options.autoplaySpeed))},e.prototype.autoPlayClear=function(){var i=this;i.autoPlayTimer&&clearInterval(i.autoPlayTimer)},e.prototype.autoPlayIterator=function(){var i=this,e=i.currentSlide+i.options.slidesToScroll;i.paused||i.interrupted||i.focussed||(!1===i.options.infinite&&(1===i.direction&&i.currentSlide+1===i.slideCount-1?i.direction=0:0===i.direction&&(e=i.currentSlide-i.options.slidesToScroll,i.currentSlide-1==0&&(i.direction=1))),i.slideHandler(e))},e.prototype.buildArrows=function(){var e=this;!0===e.options.arrows&&(e.$prevArrow=i(e.options.prevArrow).addClass("slick-arrow"),e.$nextArrow=i(e.options.nextArrow).addClass("slick-arrow"),e.slideCount>e.options.slidesToShow?(e.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.prependTo(e.options.appendArrows),e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.appendTo(e.options.appendArrows),!0!==e.options.infinite&&e.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true")):e.$prevArrow.add(e.$nextArrow).addClass("slick-hidden").attr({"aria-disabled":"true",tabindex:"-1"}))},e.prototype.buildDots=function(){var e,t,o=this;if(!0===o.options.dots){for(o.$slider.addClass("slick-dotted"),t=i("<ul />").addClass(o.options.dotsClass),e=0;e<=o.getDotCount();e+=1)t.append(i("<li />").append(o.options.customPaging.call(this,o,e)));o.$dots=t.appendTo(o.options.appendDots),o.$dots.find("li").first().addClass("slick-active")}},e.prototype.buildOut=function(){var e=this;e.$slides=e.$slider.children(e.options.slide+":not(.slick-cloned)").addClass("slick-slide"),e.slideCount=e.$slides.length,e.$slides.each(function(e,t){i(t).attr("data-slick-index",e).data("originalStyling",i(t).attr("style")||"")}),e.$slider.addClass("slick-slider"),e.$slideTrack=0===e.slideCount?i('<div class="slick-track"/>').appendTo(e.$slider):e.$slides.wrapAll('<div class="slick-track"/>').parent(),e.$list=e.$slideTrack.wrap('<div class="slick-list"/>').parent(),e.$slideTrack.css("opacity",0),!0!==e.options.centerMode&&!0!==e.options.swipeToSlide||(e.options.slidesToScroll=1),i("img[data-lazy]",e.$slider).not("[src]").addClass("slick-loading"),e.setupInfinite(),e.buildArrows(),e.buildDots(),e.updateDots(),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),!0===e.options.draggable&&e.$list.addClass("draggable")},e.prototype.buildRows=function(){var i,e,t,o,s,n,r,l=this;if(o=document.createDocumentFragment(),n=l.$slider.children(),l.options.rows>1){for(r=l.options.slidesPerRow*l.options.rows,s=Math.ceil(n.length/r),i=0;i<s;i++){var d=document.createElement("div");for(e=0;e<l.options.rows;e++){var a=document.createElement("div");for(t=0;t<l.options.slidesPerRow;t++){var c=i*r+(e*l.options.slidesPerRow+t);n.get(c)&&a.appendChild(n.get(c))}d.appendChild(a)}o.appendChild(d)}l.$slider.empty().append(o),l.$slider.children().children().children().css({width:100/l.options.slidesPerRow+"%",display:"inline-block"})}},e.prototype.checkResponsive=function(e,t){var o,s,n,r=this,l=!1,d=r.$slider.width(),a=window.innerWidth||i(window).width();if("window"===r.respondTo?n=a:"slider"===r.respondTo?n=d:"min"===r.respondTo&&(n=Math.min(a,d)),r.options.responsive&&r.options.responsive.length&&null!==r.options.responsive){s=null;for(o in r.breakpoints)r.breakpoints.hasOwnProperty(o)&&(!1===r.originalSettings.mobileFirst?n<r.breakpoints[o]&&(s=r.breakpoints[o]):n>r.breakpoints[o]&&(s=r.breakpoints[o]));null!==s?null!==r.activeBreakpoint?(s!==r.activeBreakpoint||t)&&(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):(r.activeBreakpoint=s,"unslick"===r.breakpointSettings[s]?r.unslick(s):(r.options=i.extend({},r.originalSettings,r.breakpointSettings[s]),!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e)),l=s):null!==r.activeBreakpoint&&(r.activeBreakpoint=null,r.options=r.originalSettings,!0===e&&(r.currentSlide=r.options.initialSlide),r.refresh(e),l=s),e||!1===l||r.$slider.trigger("breakpoint",[r,l])}},e.prototype.changeSlide=function(e,t){var o,s,n,r=this,l=i(e.currentTarget);switch(l.is("a")&&e.preventDefault(),l.is("li")||(l=l.closest("li")),n=r.slideCount%r.options.slidesToScroll!=0,o=n?0:(r.slideCount-r.currentSlide)%r.options.slidesToScroll,e.data.message){case"previous":s=0===o?r.options.slidesToScroll:r.options.slidesToShow-o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide-s,!1,t);break;case"next":s=0===o?r.options.slidesToScroll:o,r.slideCount>r.options.slidesToShow&&r.slideHandler(r.currentSlide+s,!1,t);break;case"index":var d=0===e.data.index?0:e.data.index||l.index()*r.options.slidesToScroll;r.slideHandler(r.checkNavigable(d),!1,t),l.children().trigger("focus");break;default:return}},e.prototype.checkNavigable=function(i){var e,t;if(e=this.getNavigableIndexes(),t=0,i>e[e.length-1])i=e[e.length-1];else for(var o in e){if(i<e[o]){i=t;break}t=e[o]}return i},e.prototype.cleanUpEvents=function(){var e=this;e.options.dots&&null!==e.$dots&&(i("li",e.$dots).off("click.slick",e.changeSlide).off("mouseenter.slick",i.proxy(e.interrupt,e,!0)).off("mouseleave.slick",i.proxy(e.interrupt,e,!1)),!0===e.options.accessibility&&e.$dots.off("keydown.slick",e.keyHandler)),e.$slider.off("focus.slick blur.slick"),!0===e.options.arrows&&e.slideCount>e.options.slidesToShow&&(e.$prevArrow&&e.$prevArrow.off("click.slick",e.changeSlide),e.$nextArrow&&e.$nextArrow.off("click.slick",e.changeSlide),!0===e.options.accessibility&&(e.$prevArrow&&e.$prevArrow.off("keydown.slick",e.keyHandler),e.$nextArrow&&e.$nextArrow.off("keydown.slick",e.keyHandler))),e.$list.off("touchstart.slick mousedown.slick",e.swipeHandler),e.$list.off("touchmove.slick mousemove.slick",e.swipeHandler),e.$list.off("touchend.slick mouseup.slick",e.swipeHandler),e.$list.off("touchcancel.slick mouseleave.slick",e.swipeHandler),e.$list.off("click.slick",e.clickHandler),i(document).off(e.visibilityChange,e.visibility),e.cleanUpSlideEvents(),!0===e.options.accessibility&&e.$list.off("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().off("click.slick",e.selectHandler),i(window).off("orientationchange.slick.slick-"+e.instanceUid,e.orientationChange),i(window).off("resize.slick.slick-"+e.instanceUid,e.resize),i("[draggable!=true]",e.$slideTrack).off("dragstart",e.preventDefault),i(window).off("load.slick.slick-"+e.instanceUid,e.setPosition)},e.prototype.cleanUpSlideEvents=function(){var e=this;e.$list.off("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.off("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.cleanUpRows=function(){var i,e=this;e.options.rows>1&&((i=e.$slides.children().children()).removeAttr("style"),e.$slider.empty().append(i))},e.prototype.clickHandler=function(i){!1===this.shouldClick&&(i.stopImmediatePropagation(),i.stopPropagation(),i.preventDefault())},e.prototype.destroy=function(e){var t=this;t.autoPlayClear(),t.touchObject={},t.cleanUpEvents(),i(".slick-cloned",t.$slider).detach(),t.$dots&&t.$dots.remove(),t.$prevArrow&&t.$prevArrow.length&&(t.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.prevArrow)&&t.$prevArrow.remove()),t.$nextArrow&&t.$nextArrow.length&&(t.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display",""),t.htmlExpr.test(t.options.nextArrow)&&t.$nextArrow.remove()),t.$slides&&(t.$slides.removeClass("slick-slide slick-active slick-center slick-visible slick-current").removeAttr("aria-hidden").removeAttr("data-slick-index").each(function(){i(this).attr("style",i(this).data("originalStyling"))}),t.$slideTrack.children(this.options.slide).detach(),t.$slideTrack.detach(),t.$list.detach(),t.$slider.append(t.$slides)),t.cleanUpRows(),t.$slider.removeClass("slick-slider"),t.$slider.removeClass("slick-initialized"),t.$slider.removeClass("slick-dotted"),t.unslicked=!0,e||t.$slider.trigger("destroy",[t])},e.prototype.disableTransition=function(i){var e=this,t={};t[e.transitionType]="",!1===e.options.fade?e.$slideTrack.css(t):e.$slides.eq(i).css(t)},e.prototype.fadeSlide=function(i,e){var t=this;!1===t.cssTransitions?(t.$slides.eq(i).css({zIndex:t.options.zIndex}),t.$slides.eq(i).animate({opacity:1},t.options.speed,t.options.easing,e)):(t.applyTransition(i),t.$slides.eq(i).css({opacity:1,zIndex:t.options.zIndex}),e&&setTimeout(function(){t.disableTransition(i),e.call()},t.options.speed))},e.prototype.fadeSlideOut=function(i){var e=this;!1===e.cssTransitions?e.$slides.eq(i).animate({opacity:0,zIndex:e.options.zIndex-2},e.options.speed,e.options.easing):(e.applyTransition(i),e.$slides.eq(i).css({opacity:0,zIndex:e.options.zIndex-2}))},e.prototype.filterSlides=e.prototype.slickFilter=function(i){var e=this;null!==i&&(e.$slidesCache=e.$slides,e.unload(),e.$slideTrack.children(this.options.slide).detach(),e.$slidesCache.filter(i).appendTo(e.$slideTrack),e.reinit())},e.prototype.focusHandler=function(){var e=this;e.$slider.off("focus.slick blur.slick").on("focus.slick blur.slick","*",function(t){t.stopImmediatePropagation();var o=i(this);setTimeout(function(){e.options.pauseOnFocus&&(e.focussed=o.is(":focus"),e.autoPlay())},0)})},e.prototype.getCurrent=e.prototype.slickCurrentSlide=function(){return this.currentSlide},e.prototype.getDotCount=function(){var i=this,e=0,t=0,o=0;if(!0===i.options.infinite)if(i.slideCount<=i.options.slidesToShow)++o;else for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else if(!0===i.options.centerMode)o=i.slideCount;else if(i.options.asNavFor)for(;e<i.slideCount;)++o,e=t+i.options.slidesToScroll,t+=i.options.slidesToScroll<=i.options.slidesToShow?i.options.slidesToScroll:i.options.slidesToShow;else o=1+Math.ceil((i.slideCount-i.options.slidesToShow)/i.options.slidesToScroll);return o-1},e.prototype.getLeft=function(i){var e,t,o,s,n=this,r=0;return n.slideOffset=0,t=n.$slides.first().outerHeight(!0),!0===n.options.infinite?(n.slideCount>n.options.slidesToShow&&(n.slideOffset=n.slideWidth*n.options.slidesToShow*-1,s=-1,!0===n.options.vertical&&!0===n.options.centerMode&&(2===n.options.slidesToShow?s=-1.5:1===n.options.slidesToShow&&(s=-2)),r=t*n.options.slidesToShow*s),n.slideCount%n.options.slidesToScroll!=0&&i+n.options.slidesToScroll>n.slideCount&&n.slideCount>n.options.slidesToShow&&(i>n.slideCount?(n.slideOffset=(n.options.slidesToShow-(i-n.slideCount))*n.slideWidth*-1,r=(n.options.slidesToShow-(i-n.slideCount))*t*-1):(n.slideOffset=n.slideCount%n.options.slidesToScroll*n.slideWidth*-1,r=n.slideCount%n.options.slidesToScroll*t*-1))):i+n.options.slidesToShow>n.slideCount&&(n.slideOffset=(i+n.options.slidesToShow-n.slideCount)*n.slideWidth,r=(i+n.options.slidesToShow-n.slideCount)*t),n.slideCount<=n.options.slidesToShow&&(n.slideOffset=0,r=0),!0===n.options.centerMode&&n.slideCount<=n.options.slidesToShow?n.slideOffset=n.slideWidth*Math.floor(n.options.slidesToShow)/2-n.slideWidth*n.slideCount/2:!0===n.options.centerMode&&!0===n.options.infinite?n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)-n.slideWidth:!0===n.options.centerMode&&(n.slideOffset=0,n.slideOffset+=n.slideWidth*Math.floor(n.options.slidesToShow/2)),e=!1===n.options.vertical?i*n.slideWidth*-1+n.slideOffset:i*t*-1+r,!0===n.options.variableWidth&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,!0===n.options.centerMode&&(o=n.slideCount<=n.options.slidesToShow||!1===n.options.infinite?n.$slideTrack.children(".slick-slide").eq(i):n.$slideTrack.children(".slick-slide").eq(i+n.options.slidesToShow+1),e=!0===n.options.rtl?o[0]?-1*(n.$slideTrack.width()-o[0].offsetLeft-o.width()):0:o[0]?-1*o[0].offsetLeft:0,e+=(n.$list.width()-o.outerWidth())/2)),e},e.prototype.getOption=e.prototype.slickGetOption=function(i){return this.options[i]},e.prototype.getNavigableIndexes=function(){var i,e=this,t=0,o=0,s=[];for(!1===e.options.infinite?i=e.slideCount:(t=-1*e.options.slidesToScroll,o=-1*e.options.slidesToScroll,i=2*e.slideCount);t<i;)s.push(t),t=o+e.options.slidesToScroll,o+=e.options.slidesToScroll<=e.options.slidesToShow?e.options.slidesToScroll:e.options.slidesToShow;return s},e.prototype.getSlick=function(){return this},e.prototype.getSlideCount=function(){var e,t,o=this;return t=!0===o.options.centerMode?o.slideWidth*Math.floor(o.options.slidesToShow/2):0,!0===o.options.swipeToSlide?(o.$slideTrack.find(".slick-slide").each(function(s,n){if(n.offsetLeft-t+i(n).outerWidth()/2>-1*o.swipeLeft)return e=n,!1}),Math.abs(i(e).attr("data-slick-index")-o.currentSlide)||1):o.options.slidesToScroll},e.prototype.goTo=e.prototype.slickGoTo=function(i,e){this.changeSlide({data:{message:"index",index:parseInt(i)}},e)},e.prototype.init=function(e){var t=this;i(t.$slider).hasClass("slick-initialized")||(i(t.$slider).addClass("slick-initialized"),t.buildRows(),t.buildOut(),t.setProps(),t.startLoad(),t.loadSlider(),t.initializeEvents(),t.updateArrows(),t.updateDots(),t.checkResponsive(!0),t.focusHandler()),e&&t.$slider.trigger("init",[t]),!0===t.options.accessibility&&t.initADA(),t.options.autoplay&&(t.paused=!1,t.autoPlay())},e.prototype.initADA=function(){var e=this,t=Math.ceil(e.slideCount/e.options.slidesToShow),o=e.getNavigableIndexes().filter(function(i){return i>=0&&i<e.slideCount});e.$slides.add(e.$slideTrack.find(".slick-cloned")).attr({"aria-hidden":"true",tabindex:"-1"}).find("a, input, button, select").attr({tabindex:"-1"}),null!==e.$dots&&(e.$slides.not(e.$slideTrack.find(".slick-cloned")).each(function(t){var s=o.indexOf(t);i(this).attr({role:"tabpanel",id:"slick-slide"+e.instanceUid+t,tabindex:-1}),-1!==s&&i(this).attr({"aria-describedby":"slick-slide-control"+e.instanceUid+s})}),e.$dots.attr("role","tablist").find("li").each(function(s){var n=o[s];i(this).attr({role:"presentation"}),i(this).find("button").first().attr({role:"tab",id:"slick-slide-control"+e.instanceUid+s,"aria-controls":"slick-slide"+e.instanceUid+n,"aria-label":s+1+" of "+t,"aria-selected":null,tabindex:"-1"})}).eq(e.currentSlide).find("button").attr({"aria-selected":"true",tabindex:"0"}).end());for(var s=e.currentSlide,n=s+e.options.slidesToShow;s<n;s++)e.$slides.eq(s).attr("tabindex",0);e.activateADA()},e.prototype.initArrowEvents=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.off("click.slick").on("click.slick",{message:"previous"},i.changeSlide),i.$nextArrow.off("click.slick").on("click.slick",{message:"next"},i.changeSlide),!0===i.options.accessibility&&(i.$prevArrow.on("keydown.slick",i.keyHandler),i.$nextArrow.on("keydown.slick",i.keyHandler)))},e.prototype.initDotEvents=function(){var e=this;!0===e.options.dots&&(i("li",e.$dots).on("click.slick",{message:"index"},e.changeSlide),!0===e.options.accessibility&&e.$dots.on("keydown.slick",e.keyHandler)),!0===e.options.dots&&!0===e.options.pauseOnDotsHover&&i("li",e.$dots).on("mouseenter.slick",i.proxy(e.interrupt,e,!0)).on("mouseleave.slick",i.proxy(e.interrupt,e,!1))},e.prototype.initSlideEvents=function(){var e=this;e.options.pauseOnHover&&(e.$list.on("mouseenter.slick",i.proxy(e.interrupt,e,!0)),e.$list.on("mouseleave.slick",i.proxy(e.interrupt,e,!1)))},e.prototype.initializeEvents=function(){var e=this;e.initArrowEvents(),e.initDotEvents(),e.initSlideEvents(),e.$list.on("touchstart.slick mousedown.slick",{action:"start"},e.swipeHandler),e.$list.on("touchmove.slick mousemove.slick",{action:"move"},e.swipeHandler),e.$list.on("touchend.slick mouseup.slick",{action:"end"},e.swipeHandler),e.$list.on("touchcancel.slick mouseleave.slick",{action:"end"},e.swipeHandler),e.$list.on("click.slick",e.clickHandler),i(document).on(e.visibilityChange,i.proxy(e.visibility,e)),!0===e.options.accessibility&&e.$list.on("keydown.slick",e.keyHandler),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),i(window).on("orientationchange.slick.slick-"+e.instanceUid,i.proxy(e.orientationChange,e)),i(window).on("resize.slick.slick-"+e.instanceUid,i.proxy(e.resize,e)),i("[draggable!=true]",e.$slideTrack).on("dragstart",e.preventDefault),i(window).on("load.slick.slick-"+e.instanceUid,e.setPosition),i(e.setPosition)},e.prototype.initUI=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.show(),i.$nextArrow.show()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.show()},e.prototype.keyHandler=function(i){var e=this;i.target.tagName.match("TEXTAREA|INPUT|SELECT")||(37===i.keyCode&&!0===e.options.accessibility?e.changeSlide({data:{message:!0===e.options.rtl?"next":"previous"}}):39===i.keyCode&&!0===e.options.accessibility&&e.changeSlide({data:{message:!0===e.options.rtl?"previous":"next"}}))},e.prototype.lazyLoad=function(){function e(e){i("img[data-lazy]",e).each(function(){var e=i(this),t=i(this).attr("data-lazy"),o=i(this).attr("data-srcset"),s=i(this).attr("data-sizes")||n.$slider.attr("data-sizes"),r=document.createElement("img");r.onload=function(){e.animate({opacity:0},100,function(){o&&(e.attr("srcset",o),s&&e.attr("sizes",s)),e.attr("src",t).animate({opacity:1},200,function(){e.removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading")}),n.$slider.trigger("lazyLoaded",[n,e,t])})},r.onerror=function(){e.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),n.$slider.trigger("lazyLoadError",[n,e,t])},r.src=t})}var t,o,s,n=this;if(!0===n.options.centerMode?!0===n.options.infinite?s=(o=n.currentSlide+(n.options.slidesToShow/2+1))+n.options.slidesToShow+2:(o=Math.max(0,n.currentSlide-(n.options.slidesToShow/2+1)),s=n.options.slidesToShow/2+1+2+n.currentSlide):(o=n.options.infinite?n.options.slidesToShow+n.currentSlide:n.currentSlide,s=Math.ceil(o+n.options.slidesToShow),!0===n.options.fade&&(o>0&&o--,s<=n.slideCount&&s++)),t=n.$slider.find(".slick-slide").slice(o,s),"anticipated"===n.options.lazyLoad)for(var r=o-1,l=s,d=n.$slider.find(".slick-slide"),a=0;a<n.options.slidesToScroll;a++)r<0&&(r=n.slideCount-1),t=(t=t.add(d.eq(r))).add(d.eq(l)),r--,l++;e(t),n.slideCount<=n.options.slidesToShow?e(n.$slider.find(".slick-slide")):n.currentSlide>=n.slideCount-n.options.slidesToShow?e(n.$slider.find(".slick-cloned").slice(0,n.options.slidesToShow)):0===n.currentSlide&&e(n.$slider.find(".slick-cloned").slice(-1*n.options.slidesToShow))},e.prototype.loadSlider=function(){var i=this;i.setPosition(),i.$slideTrack.css({opacity:1}),i.$slider.removeClass("slick-loading"),i.initUI(),"progressive"===i.options.lazyLoad&&i.progressiveLazyLoad()},e.prototype.next=e.prototype.slickNext=function(){this.changeSlide({data:{message:"next"}})},e.prototype.orientationChange=function(){var i=this;i.checkResponsive(),i.setPosition()},e.prototype.pause=e.prototype.slickPause=function(){var i=this;i.autoPlayClear(),i.paused=!0},e.prototype.play=e.prototype.slickPlay=function(){var i=this;i.autoPlay(),i.options.autoplay=!0,i.paused=!1,i.focussed=!1,i.interrupted=!1},e.prototype.postSlide=function(e){var t=this;t.unslicked||(t.$slider.trigger("afterChange",[t,e]),t.animating=!1,t.slideCount>t.options.slidesToShow&&t.setPosition(),t.swipeLeft=null,t.options.autoplay&&t.autoPlay(),!0===t.options.accessibility&&(t.initADA(),t.options.focusOnChange&&i(t.$slides.get(t.currentSlide)).attr("tabindex",0).focus()))},e.prototype.prev=e.prototype.slickPrev=function(){this.changeSlide({data:{message:"previous"}})},e.prototype.preventDefault=function(i){i.preventDefault()},e.prototype.progressiveLazyLoad=function(e){e=e||1;var t,o,s,n,r,l=this,d=i("img[data-lazy]",l.$slider);d.length?(t=d.first(),o=t.attr("data-lazy"),s=t.attr("data-srcset"),n=t.attr("data-sizes")||l.$slider.attr("data-sizes"),(r=document.createElement("img")).onload=function(){s&&(t.attr("srcset",s),n&&t.attr("sizes",n)),t.attr("src",o).removeAttr("data-lazy data-srcset data-sizes").removeClass("slick-loading"),!0===l.options.adaptiveHeight&&l.setPosition(),l.$slider.trigger("lazyLoaded",[l,t,o]),l.progressiveLazyLoad()},r.onerror=function(){e<3?setTimeout(function(){l.progressiveLazyLoad(e+1)},500):(t.removeAttr("data-lazy").removeClass("slick-loading").addClass("slick-lazyload-error"),l.$slider.trigger("lazyLoadError",[l,t,o]),l.progressiveLazyLoad())},r.src=o):l.$slider.trigger("allImagesLoaded",[l])},e.prototype.refresh=function(e){var t,o,s=this;o=s.slideCount-s.options.slidesToShow,!s.options.infinite&&s.currentSlide>o&&(s.currentSlide=o),s.slideCount<=s.options.slidesToShow&&(s.currentSlide=0),t=s.currentSlide,s.destroy(!0),i.extend(s,s.initials,{currentSlide:t}),s.init(),e||s.changeSlide({data:{message:"index",index:t}},!1)},e.prototype.registerBreakpoints=function(){var e,t,o,s=this,n=s.options.responsive||null;if("array"===i.type(n)&&n.length){s.respondTo=s.options.respondTo||"window";for(e in n)if(o=s.breakpoints.length-1,n.hasOwnProperty(e)){for(t=n[e].breakpoint;o>=0;)s.breakpoints[o]&&s.breakpoints[o]===t&&s.breakpoints.splice(o,1),o--;s.breakpoints.push(t),s.breakpointSettings[t]=n[e].settings}s.breakpoints.sort(function(i,e){return s.options.mobileFirst?i-e:e-i})}},e.prototype.reinit=function(){var e=this;e.$slides=e.$slideTrack.children(e.options.slide).addClass("slick-slide"),e.slideCount=e.$slides.length,e.currentSlide>=e.slideCount&&0!==e.currentSlide&&(e.currentSlide=e.currentSlide-e.options.slidesToScroll),e.slideCount<=e.options.slidesToShow&&(e.currentSlide=0),e.registerBreakpoints(),e.setProps(),e.setupInfinite(),e.buildArrows(),e.updateArrows(),e.initArrowEvents(),e.buildDots(),e.updateDots(),e.initDotEvents(),e.cleanUpSlideEvents(),e.initSlideEvents(),e.checkResponsive(!1,!0),!0===e.options.focusOnSelect&&i(e.$slideTrack).children().on("click.slick",e.selectHandler),e.setSlideClasses("number"==typeof e.currentSlide?e.currentSlide:0),e.setPosition(),e.focusHandler(),e.paused=!e.options.autoplay,e.autoPlay(),e.$slider.trigger("reInit",[e])},e.prototype.resize=function(){var e=this;i(window).width()!==e.windowWidth&&(clearTimeout(e.windowDelay),e.windowDelay=window.setTimeout(function(){e.windowWidth=i(window).width(),e.checkResponsive(),e.unslicked||e.setPosition()},50))},e.prototype.removeSlide=e.prototype.slickRemove=function(i,e,t){var o=this;if(i="boolean"==typeof i?!0===(e=i)?0:o.slideCount-1:!0===e?--i:i,o.slideCount<1||i<0||i>o.slideCount-1)return!1;o.unload(),!0===t?o.$slideTrack.children().remove():o.$slideTrack.children(this.options.slide).eq(i).remove(),o.$slides=o.$slideTrack.children(this.options.slide),o.$slideTrack.children(this.options.slide).detach(),o.$slideTrack.append(o.$slides),o.$slidesCache=o.$slides,o.reinit()},e.prototype.setCSS=function(i){var e,t,o=this,s={};!0===o.options.rtl&&(i=-i),e="left"==o.positionProp?Math.ceil(i)+"px":"0px",t="top"==o.positionProp?Math.ceil(i)+"px":"0px",s[o.positionProp]=i,!1===o.transformsEnabled?o.$slideTrack.css(s):(s={},!1===o.cssTransitions?(s[o.animType]="translate("+e+", "+t+")",o.$slideTrack.css(s)):(s[o.animType]="translate3d("+e+", "+t+", 0px)",o.$slideTrack.css(s)))},e.prototype.setDimensions=function(){var i=this;!1===i.options.vertical?!0===i.options.centerMode&&i.$list.css({padding:"0px "+i.options.centerPadding}):(i.$list.height(i.$slides.first().outerHeight(!0)*i.options.slidesToShow),!0===i.options.centerMode&&i.$list.css({padding:i.options.centerPadding+" 0px"})),i.listWidth=i.$list.width(),i.listHeight=i.$list.height(),!1===i.options.vertical&&!1===i.options.variableWidth?(i.slideWidth=Math.ceil(i.listWidth/i.options.slidesToShow),i.$slideTrack.width(Math.ceil(i.slideWidth*i.$slideTrack.children(".slick-slide").length))):!0===i.options.variableWidth?i.$slideTrack.width(5e3*i.slideCount):(i.slideWidth=Math.ceil(i.listWidth),i.$slideTrack.height(Math.ceil(i.$slides.first().outerHeight(!0)*i.$slideTrack.children(".slick-slide").length)));var e=i.$slides.first().outerWidth(!0)-i.$slides.first().width();!1===i.options.variableWidth&&i.$slideTrack.children(".slick-slide").width(i.slideWidth-e)},e.prototype.setFade=function(){var e,t=this;t.$slides.each(function(o,s){e=t.slideWidth*o*-1,!0===t.options.rtl?i(s).css({position:"relative",right:e,top:0,zIndex:t.options.zIndex-2,opacity:0}):i(s).css({position:"relative",left:e,top:0,zIndex:t.options.zIndex-2,opacity:0})}),t.$slides.eq(t.currentSlide).css({zIndex:t.options.zIndex-1,opacity:1})},e.prototype.setHeight=function(){var i=this;if(1===i.options.slidesToShow&&!0===i.options.adaptiveHeight&&!1===i.options.vertical){var e=i.$slides.eq(i.currentSlide).outerHeight(!0);i.$list.css("height",e)}},e.prototype.setOption=e.prototype.slickSetOption=function(){var e,t,o,s,n,r=this,l=!1;if("object"===i.type(arguments[0])?(o=arguments[0],l=arguments[1],n="multiple"):"string"===i.type(arguments[0])&&(o=arguments[0],s=arguments[1],l=arguments[2],"responsive"===arguments[0]&&"array"===i.type(arguments[1])?n="responsive":void 0!==arguments[1]&&(n="single")),"single"===n)r.options[o]=s;else if("multiple"===n)i.each(o,function(i,e){r.options[i]=e});else if("responsive"===n)for(t in s)if("array"!==i.type(r.options.responsive))r.options.responsive=[s[t]];else{for(e=r.options.responsive.length-1;e>=0;)r.options.responsive[e].breakpoint===s[t].breakpoint&&r.options.responsive.splice(e,1),e--;r.options.responsive.push(s[t])}l&&(r.unload(),r.reinit())},e.prototype.setPosition=function(){var i=this;i.setDimensions(),i.setHeight(),!1===i.options.fade?i.setCSS(i.getLeft(i.currentSlide)):i.setFade(),i.$slider.trigger("setPosition",[i])},e.prototype.setProps=function(){var i=this,e=document.body.style;i.positionProp=!0===i.options.vertical?"top":"left","top"===i.positionProp?i.$slider.addClass("slick-vertical"):i.$slider.removeClass("slick-vertical"),void 0===e.WebkitTransition&&void 0===e.MozTransition&&void 0===e.msTransition||!0===i.options.useCSS&&(i.cssTransitions=!0),i.options.fade&&("number"==typeof i.options.zIndex?i.options.zIndex<3&&(i.options.zIndex=3):i.options.zIndex=i.defaults.zIndex),void 0!==e.OTransform&&(i.animType="OTransform",i.transformType="-o-transform",i.transitionType="OTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.MozTransform&&(i.animType="MozTransform",i.transformType="-moz-transform",i.transitionType="MozTransition",void 0===e.perspectiveProperty&&void 0===e.MozPerspective&&(i.animType=!1)),void 0!==e.webkitTransform&&(i.animType="webkitTransform",i.transformType="-webkit-transform",i.transitionType="webkitTransition",void 0===e.perspectiveProperty&&void 0===e.webkitPerspective&&(i.animType=!1)),void 0!==e.msTransform&&(i.animType="msTransform",i.transformType="-ms-transform",i.transitionType="msTransition",void 0===e.msTransform&&(i.animType=!1)),void 0!==e.transform&&!1!==i.animType&&(i.animType="transform",i.transformType="transform",i.transitionType="transition"),i.transformsEnabled=i.options.useTransform&&null!==i.animType&&!1!==i.animType},e.prototype.setSlideClasses=function(i){var e,t,o,s,n=this;if(t=n.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden","true"),n.$slides.eq(i).addClass("slick-current"),!0===n.options.centerMode){var r=n.options.slidesToShow%2==0?1:0;e=Math.floor(n.options.slidesToShow/2),!0===n.options.infinite&&(i>=e&&i<=n.slideCount-1-e?n.$slides.slice(i-e+r,i+e+1).addClass("slick-active").attr("aria-hidden","false"):(o=n.options.slidesToShow+i,t.slice(o-e+1+r,o+e+2).addClass("slick-active").attr("aria-hidden","false")),0===i?t.eq(t.length-1-n.options.slidesToShow).addClass("slick-center"):i===n.slideCount-1&&t.eq(n.options.slidesToShow).addClass("slick-center")),n.$slides.eq(i).addClass("slick-center")}else i>=0&&i<=n.slideCount-n.options.slidesToShow?n.$slides.slice(i,i+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"):t.length<=n.options.slidesToShow?t.addClass("slick-active").attr("aria-hidden","false"):(s=n.slideCount%n.options.slidesToShow,o=!0===n.options.infinite?n.options.slidesToShow+i:i,n.options.slidesToShow==n.options.slidesToScroll&&n.slideCount-i<n.options.slidesToShow?t.slice(o-(n.options.slidesToShow-s),o+s).addClass("slick-active").attr("aria-hidden","false"):t.slice(o,o+n.options.slidesToShow).addClass("slick-active").attr("aria-hidden","false"));"ondemand"!==n.options.lazyLoad&&"anticipated"!==n.options.lazyLoad||n.lazyLoad()},e.prototype.setupInfinite=function(){var e,t,o,s=this;if(!0===s.options.fade&&(s.options.centerMode=!1),!0===s.options.infinite&&!1===s.options.fade&&(t=null,s.slideCount>s.options.slidesToShow)){for(o=!0===s.options.centerMode?s.options.slidesToShow+1:s.options.slidesToShow,e=s.slideCount;e>s.slideCount-o;e-=1)t=e-1,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t-s.slideCount).prependTo(s.$slideTrack).addClass("slick-cloned");for(e=0;e<o+s.slideCount;e+=1)t=e,i(s.$slides[t]).clone(!0).attr("id","").attr("data-slick-index",t+s.slideCount).appendTo(s.$slideTrack).addClass("slick-cloned");s.$slideTrack.find(".slick-cloned").find("[id]").each(function(){i(this).attr("id","")})}},e.prototype.interrupt=function(i){var e=this;i||e.autoPlay(),e.interrupted=i},e.prototype.selectHandler=function(e){var t=this,o=i(e.target).is(".slick-slide")?i(e.target):i(e.target).parents(".slick-slide"),s=parseInt(o.attr("data-slick-index"));s||(s=0),t.slideCount<=t.options.slidesToShow?t.slideHandler(s,!1,!0):t.slideHandler(s)},e.prototype.slideHandler=function(i,e,t){var o,s,n,r,l,d=null,a=this;if(e=e||!1,!(!0===a.animating&&!0===a.options.waitForAnimate||!0===a.options.fade&&a.currentSlide===i))if(!1===e&&a.asNavFor(i),o=i,d=a.getLeft(o),r=a.getLeft(a.currentSlide),a.currentLeft=null===a.swipeLeft?r:a.swipeLeft,!1===a.options.infinite&&!1===a.options.centerMode&&(i<0||i>a.getDotCount()*a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else if(!1===a.options.infinite&&!0===a.options.centerMode&&(i<0||i>a.slideCount-a.options.slidesToScroll))!1===a.options.fade&&(o=a.currentSlide,!0!==t?a.animateSlide(r,function(){a.postSlide(o)}):a.postSlide(o));else{if(a.options.autoplay&&clearInterval(a.autoPlayTimer),s=o<0?a.slideCount%a.options.slidesToScroll!=0?a.slideCount-a.slideCount%a.options.slidesToScroll:a.slideCount+o:o>=a.slideCount?a.slideCount%a.options.slidesToScroll!=0?0:o-a.slideCount:o,a.animating=!0,a.$slider.trigger("beforeChange",[a,a.currentSlide,s]),n=a.currentSlide,a.currentSlide=s,a.setSlideClasses(a.currentSlide),a.options.asNavFor&&(l=(l=a.getNavTarget()).slick("getSlick")).slideCount<=l.options.slidesToShow&&l.setSlideClasses(a.currentSlide),a.updateDots(),a.updateArrows(),!0===a.options.fade)return!0!==t?(a.fadeSlideOut(n),a.fadeSlide(s,function(){a.postSlide(s)})):a.postSlide(s),void a.animateHeight();!0!==t?a.animateSlide(d,function(){a.postSlide(s)}):a.postSlide(s)}},e.prototype.startLoad=function(){var i=this;!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&(i.$prevArrow.hide(),i.$nextArrow.hide()),!0===i.options.dots&&i.slideCount>i.options.slidesToShow&&i.$dots.hide(),i.$slider.addClass("slick-loading")},e.prototype.swipeDirection=function(){var i,e,t,o,s=this;return i=s.touchObject.startX-s.touchObject.curX,e=s.touchObject.startY-s.touchObject.curY,t=Math.atan2(e,i),(o=Math.round(180*t/Math.PI))<0&&(o=360-Math.abs(o)),o<=45&&o>=0?!1===s.options.rtl?"left":"right":o<=360&&o>=315?!1===s.options.rtl?"left":"right":o>=135&&o<=225?!1===s.options.rtl?"right":"left":!0===s.options.verticalSwiping?o>=35&&o<=135?"down":"up":"vertical"},e.prototype.swipeEnd=function(i){var e,t,o=this;if(o.dragging=!1,o.swiping=!1,o.scrolling)return o.scrolling=!1,!1;if(o.interrupted=!1,o.shouldClick=!(o.touchObject.swipeLength>10),void 0===o.touchObject.curX)return!1;if(!0===o.touchObject.edgeHit&&o.$slider.trigger("edge",[o,o.swipeDirection()]),o.touchObject.swipeLength>=o.touchObject.minSwipe){switch(t=o.swipeDirection()){case"left":case"down":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide+o.getSlideCount()):o.currentSlide+o.getSlideCount(),o.currentDirection=0;break;case"right":case"up":e=o.options.swipeToSlide?o.checkNavigable(o.currentSlide-o.getSlideCount()):o.currentSlide-o.getSlideCount(),o.currentDirection=1}"vertical"!=t&&(o.slideHandler(e),o.touchObject={},o.$slider.trigger("swipe",[o,t]))}else o.touchObject.startX!==o.touchObject.curX&&(o.slideHandler(o.currentSlide),o.touchObject={})},e.prototype.swipeHandler=function(i){var e=this;if(!(!1===e.options.swipe||"ontouchend"in document&&!1===e.options.swipe||!1===e.options.draggable&&-1!==i.type.indexOf("mouse")))switch(e.touchObject.fingerCount=i.originalEvent&&void 0!==i.originalEvent.touches?i.originalEvent.touches.length:1,e.touchObject.minSwipe=e.listWidth/e.options.touchThreshold,!0===e.options.verticalSwiping&&(e.touchObject.minSwipe=e.listHeight/e.options.touchThreshold),i.data.action){case"start":e.swipeStart(i);break;case"move":e.swipeMove(i);break;case"end":e.swipeEnd(i)}},e.prototype.swipeMove=function(i){var e,t,o,s,n,r,l=this;return n=void 0!==i.originalEvent?i.originalEvent.touches:null,!(!l.dragging||l.scrolling||n&&1!==n.length)&&(e=l.getLeft(l.currentSlide),l.touchObject.curX=void 0!==n?n[0].pageX:i.clientX,l.touchObject.curY=void 0!==n?n[0].pageY:i.clientY,l.touchObject.swipeLength=Math.round(Math.sqrt(Math.pow(l.touchObject.curX-l.touchObject.startX,2))),r=Math.round(Math.sqrt(Math.pow(l.touchObject.curY-l.touchObject.startY,2))),!l.options.verticalSwiping&&!l.swiping&&r>4?(l.scrolling=!0,!1):(!0===l.options.verticalSwiping&&(l.touchObject.swipeLength=r),t=l.swipeDirection(),void 0!==i.originalEvent&&l.touchObject.swipeLength>4&&(l.swiping=!0,i.preventDefault()),s=(!1===l.options.rtl?1:-1)*(l.touchObject.curX>l.touchObject.startX?1:-1),!0===l.options.verticalSwiping&&(s=l.touchObject.curY>l.touchObject.startY?1:-1),o=l.touchObject.swipeLength,l.touchObject.edgeHit=!1,!1===l.options.infinite&&(0===l.currentSlide&&"right"===t||l.currentSlide>=l.getDotCount()&&"left"===t)&&(o=l.touchObject.swipeLength*l.options.edgeFriction,l.touchObject.edgeHit=!0),!1===l.options.vertical?l.swipeLeft=e+o*s:l.swipeLeft=e+o*(l.$list.height()/l.listWidth)*s,!0===l.options.verticalSwiping&&(l.swipeLeft=e+o*s),!0!==l.options.fade&&!1!==l.options.touchMove&&(!0===l.animating?(l.swipeLeft=null,!1):void l.setCSS(l.swipeLeft))))},e.prototype.swipeStart=function(i){var e,t=this;if(t.interrupted=!0,1!==t.touchObject.fingerCount||t.slideCount<=t.options.slidesToShow)return t.touchObject={},!1;void 0!==i.originalEvent&&void 0!==i.originalEvent.touches&&(e=i.originalEvent.touches[0]),t.touchObject.startX=t.touchObject.curX=void 0!==e?e.pageX:i.clientX,t.touchObject.startY=t.touchObject.curY=void 0!==e?e.pageY:i.clientY,t.dragging=!0},e.prototype.unfilterSlides=e.prototype.slickUnfilter=function(){var i=this;null!==i.$slidesCache&&(i.unload(),i.$slideTrack.children(this.options.slide).detach(),i.$slidesCache.appendTo(i.$slideTrack),i.reinit())},e.prototype.unload=function(){var e=this;i(".slick-cloned",e.$slider).remove(),e.$dots&&e.$dots.remove(),e.$prevArrow&&e.htmlExpr.test(e.options.prevArrow)&&e.$prevArrow.remove(),e.$nextArrow&&e.htmlExpr.test(e.options.nextArrow)&&e.$nextArrow.remove(),e.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden","true").css("width","")},e.prototype.unslick=function(i){var e=this;e.$slider.trigger("unslick",[e,i]),e.destroy()},e.prototype.updateArrows=function(){var i=this;Math.floor(i.options.slidesToShow/2),!0===i.options.arrows&&i.slideCount>i.options.slidesToShow&&!i.options.infinite&&(i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false"),0===i.currentSlide?(i.$prevArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$nextArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-i.options.slidesToShow&&!1===i.options.centerMode?(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")):i.currentSlide>=i.slideCount-1&&!0===i.options.centerMode&&(i.$nextArrow.addClass("slick-disabled").attr("aria-disabled","true"),i.$prevArrow.removeClass("slick-disabled").attr("aria-disabled","false")))},e.prototype.updateDots=function(){var i=this;null!==i.$dots&&(i.$dots.find("li").removeClass("slick-active").end(),i.$dots.find("li").eq(Math.floor(i.currentSlide/i.options.slidesToScroll)).addClass("slick-active"))},e.prototype.visibility=function(){var i=this;i.options.autoplay&&(document[i.hidden]?i.interrupted=!0:i.interrupted=!1)},i.fn.slick=function(){var i,t,o=this,s=arguments[0],n=Array.prototype.slice.call(arguments,1),r=o.length;for(i=0;i<r;i++)if("object"==typeof s||void 0===s?o[i].slick=new e(o[i],s):t=o[i].slick[s].apply(o[i].slick,n),void 0!==t)return t;return o}});
;
/**
 * @file
 * Initialize a slider.
 *
 */
(function ($, Drupal) {

  $(document).ready(function() {

    var $window = $(window);
    var $slider = $('.slider');

    var settings = {
      appendDots: '.slider__dots',
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1
    };

    $slider.each(function(index) {
      var $this = $(this);
      $this.attr('data-slider', index);
    });

    $window.on('load resize', Foundation.util.throttle(function(e){
      $slider.each(function(index) {
        var $this = $(this);

        // The comps show that only the "Related Topics" slider (the one with
        // class .slider--bordered) has the right arrow.
        if ($this.hasClass('slider--bordered')) {
          settings['nextArrow'] = '<button type="button" class="slick-next" aria-label="' + Drupal.t("Next") + '"><span class="vzpp-icon-long-arrow-right"></span></button>';
        }
        else {
          settings['nextArrow'] = '<button type="button" class="slick-next" aria-label="' + Drupal.t("Next") + '"></button>';
        }

        // On large screens, destroy the slider if it has been initialized.
        // Also, juggle some of the CSS classes to get the layout just right
        // depending on whether or not the slider is bordered.
        if ($window.width() > 767) {
          if ($this.hasClass('slick-initialized')) {
            $this.slick('unslick');
            if ($this.hasClass('slider--bordered')) {
              $this.addClass('grid-x');
            }
            else {
              $this.addClass('grid-x').addClass('grid-margin-x');
            }

            $this.find('.slider__slide').addClass('cell');
          }

          return
        }

        // On smaller screens, juggle some CSS classes before initializing the
        // slider.
        if (!$this.hasClass('slick-initialized')) {
          if ($this.hasClass('slider--bordered')) {
            $this.removeClass('grid-x');
          }
          else {
            $this.removeClass('grid-x').removeClass('grid-margin-x');
          }
          
          $this.find('.slider__slide').removeClass('cell');
          settings['appendDots'] = '[data-slider="' + index + '"] + .slider__dots';

          return $this.slick(settings);
        }
      })
    }, 300));

  });

})(jQuery, Drupal);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/
(function ($, Drupal) {
  Drupal.behaviors.dialog = {
    attach: function attach(context, settings) {
      var $context = $(context);
      if (!$('#drupal-modal').length) {
        $('<div id="drupal-modal" class="ui-front"></div>').hide().appendTo('body');
      }
      var $dialog = $context.closest('.ui-dialog-content');
      if ($dialog.length) {
        if ($dialog.dialog('option', 'drupalAutoButtons')) {
          $dialog.trigger('dialogButtonsChange');
        }
        $dialog.dialog('widget').trigger('focus');
      }
      var originalClose = settings.dialog.close;
      settings.dialog.close = function (event) {
        for (var _len = arguments.length, args = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
          args[_key - 1] = arguments[_key];
        }
        originalClose.apply(settings.dialog, [event].concat(args));
        $(event.target).remove();
      };
    },
    prepareDialogButtons: function prepareDialogButtons($dialog) {
      var buttons = [];
      var $buttons = $dialog.find('.form-actions input[type=submit], .form-actions a.button');
      $buttons.each(function () {
        var $originalButton = $(this).css({
          display: 'none'
        });
        buttons.push({
          text: $originalButton.html() || $originalButton.attr('value'),
          class: $originalButton.attr('class'),
          click: function click(e) {
            if ($originalButton.is('a')) {
              $originalButton[0].click();
            } else {
              $originalButton.trigger('mousedown').trigger('mouseup').trigger('click');
              e.preventDefault();
            }
          }
        });
      });
      return buttons;
    }
  };
  Drupal.AjaxCommands.prototype.openDialog = function (ajax, response, status) {
    if (!response.selector) {
      return false;
    }
    var $dialog = $(response.selector);
    if (!$dialog.length) {
      $dialog = $("<div id=\"".concat(response.selector.replace(/^#/, ''), "\" class=\"ui-front\"></div>")).appendTo('body');
    }
    if (!ajax.wrapper) {
      ajax.wrapper = $dialog.attr('id');
    }
    response.command = 'insert';
    response.method = 'html';
    ajax.commands.insert(ajax, response, status);
    if (!response.dialogOptions.buttons) {
      response.dialogOptions.drupalAutoButtons = true;
      response.dialogOptions.buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
    }
    $dialog.on('dialogButtonsChange', function () {
      var buttons = Drupal.behaviors.dialog.prepareDialogButtons($dialog);
      $dialog.dialog('option', 'buttons', buttons);
    });
    response.dialogOptions = response.dialogOptions || {};
    var dialog = Drupal.dialog($dialog.get(0), response.dialogOptions);
    if (response.dialogOptions.modal) {
      dialog.showModal();
    } else {
      dialog.show();
    }
    $dialog.parent().find('.ui-dialog-buttonset').addClass('form-actions');
  };
  Drupal.AjaxCommands.prototype.closeDialog = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      Drupal.dialog($dialog.get(0)).close();
      if (!response.persist) {
        $dialog.remove();
      }
    }
    $dialog.off('dialogButtonsChange');
  };
  Drupal.AjaxCommands.prototype.setDialogOption = function (ajax, response, status) {
    var $dialog = $(response.selector);
    if ($dialog.length) {
      $dialog.dialog('option', response.optionName, response.optionValue);
    }
  };
  $(window).on('dialog:aftercreate', function (e, dialog, $element, settings) {
    $element.on('click.dialog', '.dialog-cancel', function (e) {
      dialog.close('cancel');
      e.preventDefault();
      e.stopPropagation();
    });
  });
  $(window).on('dialog:beforeclose', function (e, dialog, $element) {
    $element.off('.dialog');
  });
})(jQuery, Drupal);;
