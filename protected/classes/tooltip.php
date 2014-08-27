<style>


/*For tooltip target element that has set class="tooltip" */
.tooltip {text-decoration: none; border-bottom:1px dotted #36c;color: #36c; outline: none; }

/*For tooltip box*/
div#mcTooltip 
{
    width:170px !important;
    height:45px !important;
    line-height:16px;
    border-width: 1px;   
    color:#000; 
    border-color:rgb(163, 154, 154) !important;
    padding:6px;
    font-size: 12px;
    font-family: Verdana, Arial;
    border-radius:6px; /*Rounded corners. N/A for IE 8 and below.*/
    box-shadow: 0 1px 4px #AAAAAA; /*Drop shadow. N/A for IE 8 and below.*/
}

div#mcTooltip, div.mcTooltipInner 
{
    background-color:#E3E3E3;
}

/* For hyperlink within tooltip */
div#mcTooltip a { color:#36c; }

/*Close button. Available when sticky or overlay has been set to true, or is on iPhone, iPad, Android, BlackBerry, or IEMobile devices. */
/*div#mcttCloseButton 
{
    width:14px;height:14px;position:absolute;background-image:url(closeBtn.gif);cursor:pointer; overflow:hidden;
    top:12px; right:12px; left:auto;
}            */

/* Only applies when overlay has been set to true or 1 */
div#mcOverlay 
{
    background-color: white;
    opacity:0.8; filter: alpha(opacity=80); 
    display:none;top:0;left:0;width:100%;height: 100%;overflow:visible;z-index:4; 
}

/*Only available when calling by tooltip.ajax(...). It will be a spinning image indicating a request is in progress.*/
div#tooltipAjaxSpin {margin:20px 50px; background:transparent url(loading.gif) no-repeat center center; width:50px; height:30px; font-size:0;}

/*The settings below should remain unchanged*/
div#mcTooltipWrapper {position:absolute;visibility:hidden;overflow:visible;z-index:9999999999;top:0px;}
div#mcTooltip {float:left;border-style:solid;position:relative;overflow:hidden;}
div.mcTooltipInner {float:left;position:relative;width:auto;height:auto;}
div#mcttCo {position:absolute;text-align:left;margin-right: -1px;}
div#mcttCo em, div#mcttCo b {display:block; width:0; height:0;overflow:hidden;}

#mcTooltipWrapper
{
    left: 927.34375px !important;
}
</style>

<script>
    var tooltipOptions=
{
    showDelay: 50,
    hideDelay: 300,
    effect: "fade",
    duration: 300,
    relativeTo: "element",
    position: 1,
    smartPosition: true,
    offsetX: 0,
    offsetY: 0,
    maxWidth: 400,
    calloutSize: 9,
    calloutPosition: 0.3,
    sticky: false,
    overlay: false,
    license: "64628"
};

/* JavaScript Tooltip v2014.2.20. Copyright www.menucool.com */
var tooltip=function(v){var h="length",Gb="addEventListener",T,ic,j=window,cc=function(){},sb=function(a,c,b){if(a[Gb])a[Gb](c,b,false);else a.attachEvent&&a.attachEvent("on"+c,b)},c={},L=function(a){if(a&&a.stopPropagation)a.stopPropagation();else j.event.cancelBubble=true},hc=function(a){var b=a?a:j.event;if(b.preventDefault)b.preventDefault();else a.returnValue=false},Yb=function(d){var a=d.childNodes,c=[];if(a)for(var b=0,e=a[h];b<e;b++)a[b].nodeType==1&&c.push(a[b]);return c},ab={a:0,b:0},g=null,dc=function(a){if(!a)a=j.event;ab.a=a.clientX;ab.b=a.clientY},ac=function(b){if(j.getComputedStyle)var c=j.getComputedStyle(b,null);else if(b.currentStyle)c=b.currentStyle;else c=b[a];return c},J="offsetLeft",M="offsetTop",rb="clientWidth",pb="clientHeight",C="appendChild",Y="display",q="border",E="opacity",K="createElement",nb="getElementsByTagName",y="parentNode",W="calloutSize",O="position",Hb="calloutPosition",l=Math.round,jb="overlay",z="sticky",V="hideDelay",eb="onmouseout",ib="onclick",Kb=function(){this.a=[];this.b=null},D="firstChild",xb=0,r=document,U="getElementById",R=navigator,N="innerHTML",n=function(a,b){return b?r[a](b):r[a]},Ib=function(){var c=50,b=R.userAgent,a;if((a=b.indexOf("MSIE "))!=-1)c=parseInt(b.substring(a+5,b.indexOf(".",a)));return c},wb=Ib()<9,Ab=R.msMaxTouchPoints||R.maxTouchPoints,cb="ontouchstart"in j||j.DocumentTouch&&document instanceof DocumentTouch,Lb=(R.msPointerEnabled||R.pointerEnabled)&&Ab;if(Lb)var Vb=R.msPointerEnabled?"onmspointerout":"onpointerOut";var Qb=function(a){return a.pointerType==a.MSPOINTER_TYPE_MOUSE||a.pointerType=="mouse"},x="marginTop",gb="marginLeft",o="offsetWidth",s="offsetHeight",vb="documentElement",X="borderColor",tb="nextSibling",a="style",B="visibility",F="width",t="left",p="top",Q="height",fc=["$1$2$3","$1$2$3","$1$24","$1$23","$1$22"],kb,ob,w=function(c,a,b){return setTimeout(c,a?a.showDelay:b)},db=function(a){clearTimeout(a);return null};Kb.prototype={d:{b:function(){},c:function(a){return-Math.cos(a*Math.PI)/2+.5}},e:function(g,e,i,f){for(var b=[],h=i-e,d=Math.ceil((k.duration||9)/15),a,c=1;c<=d;c++){a=e+f.c(c/d)*h;if(g!=E)a=l(a);b.push(a)}b.d=0;return b},f:function(){this.b==null&&this.g()},g:function(){this.h();var a=this;this.b=j.setInterval(function(){a.h()},15)},h:function(){var a=this.a[h];if(a){for(var c=0;c<a;c++)this.i(this.a[c]);while(a--){var b=this.a[a];if(b.c.d==b.c[h]){b.d();this.a.splice(a,1)}}}else{j.clearInterval(this.b);this.b=null}},i:function(b){if(b.c.d<b.c[h]){var d=b.b,c=b.c[b.c.d];if(b.b==E){b.a.op=c;if(wb){d="filter";c="alpha(opacity="+l(c*100)+")"}}else c+="px";b.a[a][d]=c;b.c.d++}},j:function(e,b,d,f,a){a=this.k(this.d,a);var c=this.e(b,d,f,a);this.a.push({a:e,b:b,c:c,d:a.b});this.f()},k:function(c,b){b=b||{};var a,d={};for(a in c)d[a]=b[a]!==undefined?b[a]:c[a];return d}};var hb=new Kb,i=function(d,b,c,e,a){hb.j(d,b,c,e,a)},gc=function(b){var a=[],c=b[h];while(c--)a.push(String.fromCharCode(b[c]));return a.join("")},ec=[/(?:.*\.)?(\w)([\w\-])[^.]*(\w)\.[^.]+$/,/.*([\w\-])\.(\w)(\w)\.[^.]+$/,/^(?:.*\.)?(\w)(\w)\.[^.]+$/,/.*([\w\-])([\w\-])\.com\.[^.]+$/,/^(\w)[^.]*(\w)$/],lb=function(d,a){var c=[];if(xb)return xb;for(var b=0;b<d[h];b++)c[c[h]]=String.fromCharCode(d.charCodeAt(b)-(a&&a>7?a:3));return c.join("")},Ob=function(a){return a.replace(/(?:.*\.)?(\w)([\w\-])?[^.]*(\w)\.[^.]*$/,"$1$3$2")},Sb=function(e,c){var d=function(a){for(var c=a.substr(0,a[h]-1),e=a.substr(a[h]-1,1),d="",b=0;b<c[h];b++)d+=c.charCodeAt(b)-e;return unescape(d)},a=Ob(r.domain)+Math.random(),b=d(a);ob="%66%75%6E%63%74%69%6F%6E%20%71%51%28%73%2C%6B%29%7B%76%61%72%20%72%3D%27%27%3B%66%6F%72%28%76%61%72%20%69%";if(b[h]==39)try{a=(new Function("$","_",lb(ob))).apply(this,[b,c]);ob=a}catch(f){}},bc=function(c,a){var b=function(b){var a=b.charCodeAt(0).toString();return a.substring(a[h]-1)};return c+b(a[parseInt(lb("4"))])+a[2]+b(a[0])},d,b,e,Z,f,Nb,k,P=null,A=null,S=0,qb=function(){if(P!=null)P=db(P)},u=function(){if(A!=null)A=db(A)},fb=function(b,c){if(b){b.op=c;if(wb)b[a].filter="alpha(opacity="+c*100+")";else b[a][E]=c}},Pb=function(a,c,b,d,g,e,h,f){xf=b>=a;yf=d>=c;var k=xf?b-a<g:a-b<h,l=yf?d-c<e:c-d<f,i=k?b-a:xf?g:-h,j=l?d-c:yf?e:-f;if(k&&l)if(Math.abs(i)>Math.abs(j))i=xf?g:-h;else j=yf?e:-f;return[i,j]},Zb=function(l,g,k){bb(b,1);var c=n(K,"div");c[a][F]=l+"px";e=n(K,"div");fb(e,0);e.className="mcTooltipInner";if(k==1){e[N]=g;var f=1}else{var d=n(U,g);if(d[y].sw)e=d[y];else{e.sw=d[y];e[C](d);f=1}}if(wb){var i=e[nb]("select"),j=i[h];while(j--)i[j][eb]=L}c[C](e);b[C](c);e[a][F]=e[o]+(f?1:0)+"px";e[a][Q]=e[s]+(f?1:0)+"px";e[a][t]=e[a][p]="auto";e=b.insertBefore(e,b[D]);e[a][O]="absolute";c=b.removeChild(c);c=null;delete c;return e},Rb=function(a){if(a.sw){a.sw[C](a);fb(a,1)}else{a=a[y].removeChild(a);a=null;delete a}},bb=function(b,c){for(var a=c;a<b.childNodes[h];a++)Rb(b.childNodes[a])},Ub=function(){d.cO=0;d[a][B]=f[a][B]=Z[a][B]="hidden";d[a][Y]="none";if(g.Q)g.Q[a][Y]="none";bb(b,0)},Fb=function(a){qb();u();if(a&&d.cO==a)if(S)return 0;S=0;return 1},m=null,Xb={a:function(d,b,a){var e=null,f=null,i=null,c="html";if(a){f=a.success||null;c=a.responseType||"html";e=a.context&&f?a.context:null;i=a.fail||null}m=this.b();m.onreadystatechange=function(){if(m&&m.readyState===4){u();if(m.status===200){if(k==d&&P){u();var j=c.toLowerCase()=="xml"?m.responseXML:m.responseText,l=j;if(c.toLowerCase()=="json")l=eval("("+j+")");if(c=="html"){var p=b.match(/.+#([^?]+)/);if(p){var s=function(e,b){var d=null;if(b.id==e)return b;for(var c=b[nb]("*"),a=0,f=c[h];a<f;a++)if(c[a].id==e){d=c[a];break}return d},o=r[K]("div");o[N]=j;var n=s(p[1],o);if(n)j=l=n[N];o=null}if(!n){var q=j.split(/<\/?body[^>]*>/i);if(q[h]>1)j=l=q[1]}}if(f)j=a.success(l,e);g.f(d,j,1)}}else if(i)g.f(d,i(e),1);else g.f(d,"Failed to get data.",1);m=null}};if(b.indexOf("#")!=-1&&Ib()<19)b=b.replace("#","?#");m.open("GET",b,true);m.send(null)},b:function(){var a;try{if(j.XMLHttpRequest)a=new XMLHttpRequest;else a=new ActiveXObject("Microsoft.XMLHTTP")}catch(b){throw new Error("AJAX not supported.");}return a}},Mb=function(){d=n(K,"div");d.id="mcTooltipWrapper";d[N]='<div id="mcTooltip"><div>&nbsp;</div></div><div id="mcttCo"><em></em><b></b></div><div id="mcttCloseButton"></div>';kb=r.body;var a=r[nb]("FORM");Nb=a[h]&&a[0][o]?a[0]:kb;Nb[C](d);b=d[D];d.cW=d.cH=d.cO=0;this.a(v);Sb(d,c.a);Z=d.lastChild;f=b[tb];this.c(v[O],v[W]);var e=this.k();T=function(a){u();e.i();L(a)};Z[ib]=T;this.l();this.Q[ib]=function(a){if(k[jb]!==1)T(a);else L(a)};b[eb]=function(){P!=1&&qb();!k[z]&&e.h(k[V])};b[ib]=L;if(cb)b[ib]=function(a){k[z]!==1&&T(a)};sb(r,"click",function(a){if(k&&k[z]!==1)A=w(function(){T(a)},0,k[V]+100)});fb(d,0)},jc=function(a){return a[y]?a[y].nodeName.toLowerCase()!="form"?this.o(a[y]):a[y]:null},G=function(c,b){var a=c.getBoundingClientRect();return b?a[p]:a[t]},H=function(b){return b?r[vb][pb]:r[vb][rb]},Wb=function(){var a=r[vb];return[j.pageXOffset||a.scrollLeft,j.pageYOffset||a.scrollTop]},Tb=function(f,e,a,b){var d=H(0),c=H(1);if(a+f>d)a=d-f;if(a<0)a=0;if(b+e>c)b=c-e;if(b<0)b=0;return{l:a,t:b}};Mb.prototype={j:function(n,i){var l=i*2+"px",m=c.b+i+"px",h=c.b+"px",j,k,e;j=k=e="";var g=f[D],d=f.lastChild;b[a][X]=g[a][X]=c.d;b[a].backgroundColor=d[a][X]=c.c;switch(n){case 0:case 2:j="Left";k="Right";f[a][F]=l;f[a][Q]=m;d[a][gb]=d[a].marginRight="auto";break;case 3:default:j="Top";k="Bottom";f[a][F]=m;f[a][Q]=l}switch(n){case 0:e="Top";f[a][x]="-"+h;g[a][x]=h;d[a][x]="-"+m;break;case 2:e="Bottom";f[a][x]=h;g[a][x]="-"+h;d[a][x]=-(i-c.b)+"px";break;case 3:e="Left";f[a][gb]="-"+h;g[a][gb]=h;d[a][x]="-"+l;break;default:e="Right";f[a].marginRight="-"+h;d[a][x]="-"+l;d[a][gb]=h}g[a][q+j]=g[a][q+k]=d[a][q+j]=d[a][q+k]="dashed "+i+"px transparent";g[a][q+e+"Style"]=d[a][q+e+"Style"]="solid";g[a][q+e+"Width"]=d[a][q+e+"Width"]=i+"px"},c:function(e,b){c.e=e;c.f=b;d[a].padding=c.f+"px";this.j(c.e,c.f)},d:function(a,c,b){if(Fb(a))A=w(function(){g.f(a,c,b)},a)},e:function(a,c,b){if(Fb(a))A=w(function(){g.g(a,c,b)},a)},a:function(g){var d=1,f="#FBF5E6",e="#CFB57C",a=ac(b);d=parseInt(a.borderLeftWidth);f=a.backgroundColor;e=a.borderLeftColor;c={a:g.license||"4321",b:d,c:f,d:e,l:b[rb]-b[D][o],m:b[pb]-b[D][s]}},f:function(h,x,w){u();hb.a=[];if(this.Q)this.Q[a][Y]=h[jb]?"block":"none";Z[a][B]=h[z]?"visible":"hidden";if(cb)Z[a][B]="visible";var g=this.n(h,x,w);if(d.cO){i(d,t,d[J],g.l);i(d,p,d[M],g.t);i(b,F,b.cW,b.tw);i(b,Q,b.cH,b.th);i(f,t,f[J],g.x);i(f,p,f[M],g.y)}else if(c.e==4){var y=G(h,0),A=G(h,1);i(d,t,y,g.l);i(d,p,A,g.t);i(b,F,h[o],b.tw);i(b,Q,h[s],b.th)}else{if(c.e>4)i(d,p,g.t+6,g.t);else d[a][p]=g.t+"px";d[a][t]=g.l+"px";b[a][F]=b.tw+"px";b[a][Q]=b.th+"px";f[a][t]=g.x+"px";f[a][p]=g.y+"px"}if(h.effect=="slide"){var j,k;if(!d.cO&&c.e<4){switch(c.e){case 0:j=0;k=1;break;case 1:j=-1;k=0;break;case 2:j=0;k=-1;break;case 3:j=1;k=0}var m=[j*e[o],k*e[s]]}else{if(!d.cO&&c.e>3){j=h[J];k=h[M]}else{j=d[J];k=d[M];if(c.e>3){j+=d.cO[J]-h[J];k+=d.cO[M]-h[M]}}var r=c.l+c.b+c.b,v=c.m+c.b+c.b;m=Pb(j,k,g.l,g.t,b.cW+r,b.cH+v,b.tw+r,b.th+v)}var n=c.l/2,q=c.m/2;i(e,t,m[0]+n,n);i(e,p,m[1]+q,q);var l=e[tb];if(l){i(l,t,n,-m[0]+n,{b:function(){bb(b,1)}});i(l,p,q,-m[1]+q)}fb(e,1)}else{i(e,E,0,1,{b:function(){bb(b,1)}});var l=e[tb];l&&i(l,E,l.op,0)}i(d,E,d.op,1);d.cO=h},g:function(a,c,b){m=null;A=w(function(){g.f(a,'<div id="tooltipAjaxSpin">&nbsp;</div>',1)},a);P=1;Xb.a(a,c,b)},h:function(a){u();A=w(function(){g.i()},0,a)},i:function(){qb();hb.a=[];hb.j(d,E,d.op,0,{b:Ub})},l:function(){if(n(U,"mcOverlay")==null){this.Q=n(K,"div");this.Q.id="mcOverlay";kb[C](this.Q);this.Q[a][O]="fixed"}},m:function(g,e){if(g!=c.e||e!=c.f){var b=f[D],d=f.lastChild;b[a].margin=d[a].margin=f[a].margin=b[a][q]=d[a][q]="0";b[a][X]=c.d;d[a][X]=c.c;this.c(g,e)}},k:function(){return(new Function("a","b","c","d","e","f","g","h","i",function(d){var c=[];b.onmouseover=function(a){!k[z]&&u();L(a)};for(var a=0,e=d[h];a<e;a++)c[c[h]]=String.fromCharCode(d.charCodeAt(a)-4);return c.join("")}("zev$pAi,k,g,+kvthpu+0405--\u0080\u0080+6+-?zev$qAe2e\u0080\u0080+55+0rAtevwiMrx,q2glevEx,4--0sA,,k,g,+kvthpu+0405--\u0080\u0080+px+-2vitpegi,h_r16a0l_r16a--2wtpmx,++-?mj,e2e%Aj,r/+8+0s--qAQexl_g,+yhukvt+-a,-?mj,q@259-wixXmqisyx,jyrgxmsr,-m,40g,+Ch'oylmD.o{{wA66~~~5tlu|jvvs5jvt6.E[vvs{pw'W|yjohzl'YltpuklyC6hE+-0tswmxmsr>:\u0081-?\u008106444-?\u0081\u0081vixyvr$xlmw?"))).apply(this,[c,D,lb,ec,Ob,bc,n,fc,mb])},n:function(g,p,n){d[a][Y]="block";b.cW=b[rb]-c.l;b.cH=b[pb]-c.m;e=Zb(g.maxWidth,p,n);b.tw=e[o];b.th=e[s];var l=b.tw+c.l+c.b+c.b,k=b.th+c.m+c.b+c.b,i=this.p(g,l,k);if(g.smartPosition)var f=Tb(l+c.f,k+c.f,i.x,i.y);else f={l:i.x,t:i.y};var h=g[O],j=this.u(h,g[Hb],l,k);if(g.smartPosition){if(h==0||h==2)j[0]-=f.l-i.x;if(h==1||h==3)j[1]-=f.t-i.y}this.m(h,g[W]);var m=Wb();f.l=f.l+m[0];f.t=f.t+m[1];f.x=j[0];f.y=j[1];d[a][B]="visible";return f},p:function(a,r,q){var b,d,g,f,p=a[O],m=a[Hb];if(p<4)if(a.nodeType!=1)b=d=g=f=0;else if(a.relativeTo=="mouse"){b=ab.a;d=ab.b;if(ab.a==null){b=G(a,0)+l(a[o]/2);d=G(a,1)+l(a[s]/2)}g=0;f=0}else{var i=a,e=Yb(a);if(e[h]){e=e[0];if(e[o]>=a[o]||e[s]>=a[s])i=e}b=G(i,0);d=G(i,1);g=i[o];f=i[s]}var n=20,k=r+2*a[W],j=q+2*a[W];switch(p){case 0:b+=l(g/2-k*m);d-=j+n;break;case 2:b+=l(g/2-k*m);d+=f+n;break;case 3:b-=k+n;d+=l(f/2-j*m);break;case 4:b=l((H(0)-k)/2);d=l((H(1)-j)/2);break;case 5:b=d=0;break;case 6:b=H(0)-k-Math.ceil(c.l/2);d=H(1)-j-Math.ceil(c.m/2);break;case 1:default:b+=g+n;d+=l(f/2-j*m)}return{x:b+a.offsetX,y:d+a.offsetY}},u:function(h,d,g,e){if(h<4)f[a][B]="visible";var b;switch(h){case 0:b=[g*d,l(e+c.f)];break;case 1:b=[0,e*d];break;case 2:b=[g*d,0];break;case 3:b=[l(g+c.f),e*d];break;default:b=[0,0];f[a][B]="hidden"}return b}};var Db=function(){if(g==null){if(typeof console!=="undefined"&&typeof console.log==="function"){var a=console.log;console.log=function(){a.call(this,++xb,arguments)}}g=new Mb;if(a)console.log=a}if(k&&k.id=="mcttDummy"&&d[N].indexOf(lb("kdvh#Uh"))!=-1)g.i=cc;return g},yb=function(d,c,b){b=b||{};var a;for(a in c)d[a]=b[a]!==undefined?b[a]:c[a]},ub=0,I,Jb=function(b){if(!b){b=n(U,"mcttDummy");if(!b){b=n(K,"div");b.id="mcttDummy";b[a][Y]="none";kb[C](b)}}if(typeof b==="string")b=n(U,b);k=b;return b},zb=function(b,a){return cb&&b.target==a?0:1},Bb=function(a,b){yb(a,v,b);if(Ab||cb){a.showDelay=1;a[V]=30}if(a[jb])if(!a[z])a[z]=a[jb];sb(a,"click",L);if(a[z])a[eb]=function(a){if(zb(a,this)){S=1;u()}};else if(Lb)a[Vb]=function(a){if(Qb(a)){S=1;g.h(this[V])}};else a[eb]=function(a){if(zb(a,this)){S=1;g.h(this[V])}};if(a.relativeTo=="mouse")a.onmousemove=dc;a.set=1},mb=function(a,c,f){a=Jb(a);var b=0;if(c.charAt(0)=="#"){if(c[h]>2&&c.charAt(1)=="#")b=2;else b=1;var d=c.substring(b),e=n(U,d);if(e){if(b==2)c=e[N]}else b=-1}if(!a||!g||b==-1){if(++ub<40)I=w(function(){mb(a,c,f)},0,90)}else{I=db(I);!a.set&&Bb(a,f);if(b==1)g.d(a,d,2);else g.d(a,c,1)}},Cb=function(a,d,b,c){a=Jb(a);if(!a||!g){if(++ub<40)I=w(function(){Cb(a,d,b,c)},0,90)}else{I=db(I);!a.set&&Bb(a,c);g.e(a,d,b)}};sb(j,"load",Db);var Eb=function(a){if(++ub<20)if(!g)w(function(){Eb(a)},0,90);else{yb(v,v,a);g.m(v[O],v[W])}};return{changeOptions:function(options){Eb(options)},pop:function(elm,text,options){mb(elm,text,options)},ajax:function(elm,url,ajaxSettings,options){Cb(elm,url,ajaxSettings,options)},hide:function(){var a=Db();a.i()}}}(tooltipOptions)
</script>