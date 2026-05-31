if (typeof(window.gnavdl)=="undefined") {
        window.gnavdl = {"host":"https://www.verizon.com","bu":"smb", "appid":"unified", "variation":"", "impltype":(document.querySelector("#vz-gh20:empty") ? "csi" : "ssi")};
        }
// progressive disclosure nav
vzNav = new function() {
  var nav = this;
  this.json = null;
   this.enabled = true; // false = test with ngnav=1 cookie
  var samedomain = false;
  var shopdomain = false;
  var hasloaded = 0;

  gnavdl.click=true;

    this.init = function() {
		  if (typeof(gnavdl)=="undefined") { return false; }
      if (gnavdl.json || nav.json) {
        if ((window.location.hostname||"").match(/^.+?\.[beinorstvz]+\.[cifomn]+$/)) { samedomain = true;}
        if (typeof(gnav20)=="undefined") {
          nav.loadJs();
        }
        setTimeout(nav.dblcheck,1801);
        if (getComputedStyle(document.getElementById("vz-gh20"),"after").visibility !="hidden") { nav.loadCss(); }
        //document.getElementById("gnav20-search-icon").setAttribute("data-placeholder-text","Search");
      }
    };

     // clear old nav
     this.clear = function() {
      try { document.querySelector(".gnav20-navigation").classList.remove("opacityOne"); }
      catch (e) {}
      const primary = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu");
      primary.forEach(function(i) {
        const b = i.querySelector("button");
        if (b) { b.replaceChildren(); }
        const w = i.querySelector(".gnav20-content-wrapper");
        if (w) { w.replaceChildren();}
        i.replaceWith(i.cloneNode(true));
      });
    }

    // last attempt to load
    this.dblcheck = function() {
        if (!hasloaded && nav.json && nav.enabled) { nav.loaded(); console.log("no nav init"); }
        else if (nav.json && nav.enabled && !document.querySelector(".gnav20-navigation.prognav")) { nav.loaded(); console.log("prognav lost"); }
        if ((document.cookie||"").indexOf("vbg_authenticated=")>=0 && document.cookie.indexOf("vzcd=")<0) {
          const ptl = document.cookie.substring(document.cookie.indexOf("vbg_authenticated=")+18).split(";")[0].substring(0,16);
          const data = new FormData();
          data.set("portal",ptl);
          //fetch((samedomain?"":"https://www.verizon.com")+"/business/api/acct.js?p="+ptl,{method:"post",credentials:"include",body:data,mode:"cors"}).then(r => r.json()).then(d => {
          //  document.cookie="vzcd="+JSON.stringify(d)+"; max-age=1209600; secure; SameSite=None";
          //});
        }
    }

    // contact fix (test)
    this.cutil = function() {
      try {
      document.querySelector(".gnav20-width-wrapper").classList.add("gnav20-featured");
      if (!document.querySelector(".gnav20-store a[aria-label^='Contact'], .gnav20-store a[data-aria-label^='Contact']")) {
        const sup = document.querySelector(".gnav20-desktop .gnav20-store");
        if (sup) {
        const cu = sup.cloneNode(true);
        cu.querySelector("a").setAttribute("href","/business/contact/");
        cu.querySelector("a").setAttribute("aria-label","Contact us");
        cu.querySelector("a").replaceChildren(document.createTextNode("Contact us"));
        sup.parentNode.prepend(cu);
        document.querySelector(".gnav20-mobile #gnav20-footerlink").prepend(cu.cloneNode(true));
        }
      }
      if (!document.querySelector(".gnav20-nav-utility .gnav20-nav-close")) {
        const c = document.createElement("button");
        c.classList.add("gnav20-nav-close","gnav20-close-indent");
        const u = document.createElement("div");
        u.classList.add("gnav20-nav-utility");
        u.prepend(c);
        const m = document.querySelectorAll(".gnav20-sub-header-menu")||[];
        m.forEach(function(i) {
          i.prepend(u.cloneNode(true));
        })
      }
     } catch (e) {}
    }

    // load nav data
    this.load = async function() {
      if (nav.json) { setTimeout(nav.loaded,220); }
      else if (gnavdl.json && !hasloaded) {
       nav.clear();
       hasloaded = 1;
       var r = await fetch(gnavdl.json);
       if (r.status==200) {
          nav.loaded(await r.json());
       }
      }
    };

    if (document.readyState !== "loading") {
      setTimeout(nav.init,120);
    } else {
      document.addEventListener("DOMContentLoaded",nav.init,{once:true});
    }
    if (document.cookie.indexOf("ngnav=0")!=-1) { nav.enabled=false; }
    if (document.cookie.indexOf("ngnav=1")!=-1) { nav.enabled=true; }

    //if (typeof(gnavdl)!="undefined" && gnavdl.impltype!="ssi") { document.addEventListener("gnavReady",nav.load); }
    if (typeof(gnavdl)!="undefined" && (gnavdl.appid=="nextgen" || nav.enabled)) { document.addEventListener("gnavReady",nav.load,{once:true}); }

    // load style
    this.loadCss = function() {
      const tag = document.createElement("link");
      tag.setAttribute("rel","stylesheet");
      tag.setAttribute("href","https://www.verizon.com/business/site/nav.css");
      document.getElementById("vz-gh20").after(tag);
    }

    // load gnav script
    this.loadJs = function() {
      const tag = document.createElement("script");
      tag.setAttribute("src",[gnavdl.host||"//","etc/designs/vzwcom/gnav20",gnavdl.bu+".js"].join("/"));
      tag.setAttribute("type","text/javascript"); tag.setAttribute("async",true); tag.setAttribute("data-failsafe","true");
      document.addEventListener("gnavReady",nav.load);
      document.getElementById("vz-gh20").after(tag);
    }

    // check for footer
    this.loadFooter = function() {
      if (document.querySelector("#vz-gf20:empty")) {
        gnav20.loadFooter(gnav20.context || (gnavdl.bu+gnavdl.appid));
      }
    }

    // test mobile accordion version
    this.mobileAccordion = function() {
      document.querySelector("#vz-gh20 #gnav20-mobile-menu").classList.add("a");
      const li = document.querySelectorAll("#vz-gh20 ul.gnav20-submenu-column>li");
      li.forEach(function(v){
        if (v.firstChild.text == "Phones") { v.classList.add("a");}
        else if (v.firstChild.text == "What's new") { v.classList.add("m");}
        else if (v.parentNode.classList.contains("gnav20-L1") && v.querySelector("ul.gnav20-L3")) { v.classList.add("m");}
        else if (v.querySelector("a.gnav20-haschild")) { v.classList.add("a");}
      });
    }

    // data loaded callback
    this.loaded = function (data) {
      if (!nav.json || (data && !data.nav)) { console.log("no nav data"); return false; }
		console.log("setup prognav");
      const primary = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu");

      if (!primary.length) { return; }
      if (data && data.json) { nav.json = data.json; }

      if ((window.location.hostname||"").match(/^.+?\.[cbeinoprstvwz]+\.[cifomn]+$/)) { samedomain = true;}
      if ((window.location.hostname||"").match(/^.+?\.[coprvwz]+\.[cmo]+$/) && window.location.pathname?.match(/^\/[bmt]+\/pro/)) { shopdomain=true;}
      else if ((window.location.hostname||"").match(/^.+?\.[eilnorvwz]+ss\.[cmo]+$/)) { shopdomain = true; samedomain=false;} // shop only
      else if (window.location.hostname?.match(/^[achlost]+$/)) {
        if (gnavdl?.appid=="unified" && typeof(Bert)!="undefined") { samedomain=true; }
        else if (gnavdl?.appid.indexOf("nsa")>=0) { shopdomain=true; }
      }
      nav.cutil();
        // desktop       
        nav.json.nav.forEach(function (item,n) {
            if (item.menu && n>=2) {
              const loc="Global Nav:Link:"+item.menu.title;
              primary[n].classList.add("gnav20-grouping","gnav20-featured-card");
              primary[n].classList.remove("gnav20-xgrouping","gnav20-mega-drawer");
              const b = primary[n].querySelector("button");
              b.nextElementSibling.replaceChildren(document.createTextNode(item.menu.title));
              b.nextElementSibling.nextElementSibling.replaceChildren(document.createTextNode(item.menu.title));
              //const nb = document.createElement("button");
              b.replaceChildren(document.createTextNode(item.menu.title));
              b.classList.add("gnav20-menu-label","gnav20-menu-label-button","gnav20-haschild");
              if (gnavdl.click) {
              	b.addEventListener("click",nav.open);
              }
              //b.addEventListener("mouseover",nav.hopen);
              b.setAttribute("data-loc",loc);
              b.setAttribute("aria-expanded","false");
              b.setAttribute("aria-label",item.menu.title + " Menu");
              if (typeof(openMenuL1)=="function") {
              	if (gnavdl.click) {
              		b.removeEventListener("mouseover",openMenuL1);
              		primary[n].removeEventListener("mouseleave",closeMenuL1);
              		b.removeEventListener("click",expandMenuClick);
                }
              	b.removeEventListener("mouseleave",closeMenuL1);
              }
              //b.replaceWith(nb);
              const sm = primary[n].querySelector(".gnav20-sub-menu");
              (sm || primary[n]).classList.add("gnav20-grouping-active");
              try {
                sm.style.display="none";
                sm.addEventListener("click",function(e){if (e.pageY > 740) { closeMenuL1(e)}});
              } catch (e) {}
              const w = primary[n].querySelector(".gnav20-content-wrapper");
              if (w) {
                w.replaceChildren("");
                w.classList.remove("gnav20-four-col","gnav20-five-col","gnav20-mega-active");
                w.classList.add("vbg");
                    //m = document.createElement("div");
                    //m.classList.add("gnav20-nav-mask");
                    //w.after(m);
                nav.menu(w,item.menu,1,loc);
              }
            } else {
                const w = primary[n].querySelector(".gnav20-content-wrapper");
               if (w && samedomain) {
                  primary[n].querySelector(".gnav20-nav-close").addEventListener("click",closeMenuL1);
                  const aa = w.querySelectorAll("a[href]");
                  if (false && shopdomain) {
                    aa.forEach(a => {
                      a.href = a.href.replace(/^https?:\/\/www[89]*\.verizon\.com\/business\/(shop)\//,"/mbt/prospect/$1/").replace(/www(\.verizon)/,"www98$1");
                    })
                  } else {
                    aa.forEach(a => { a.href = a.href.replace(/^https?:\/\/www[89]*\.verizon\.com(\/business\/)/,"$1") })
                  }
                } else if (w && shopdomain) {
                  const aa = w.querySelectorAll("a[href]");
                  aa.forEach(a => { a.href = a.href.replace(/^https?:\/\/.*?\.[eilnorsvwz]+\.com(\/business\/shop\/)/,"$1") })
                }
                  primary[n].querySelector(".gnav20-sub-menu")?.addEventListener("click",function(e){if (e.pageY > 690) { closeMenuL1(e)}});
                    //m = document.createElement("div");
                    //m.classList.add("gnav20-nav-mask");
                    //w.after(m);
            }
       });
       primary.forEach(function(i,n) {
        if (n>3) { i.replaceChildren();}
       });
       hasloaded=2+(hasloaded||0);

      try {
        document.querySelector(".gnav20-mobile button.gnav20-sign-in").classList.add("gnav20-haschild");
        document.querySelector(".gnav20-width-wrapper").classList.add("gnav20-featured");
      } catch (e) {}

       //if (typeof(gnavdl.accordion)=="undefined" || gnavdl.accordion) { nav.mobileAccordion(); }
       if (typeof(gnav20)!="undefined") {
        gnav20.initGnav();

           document.querySelectorAll(".gnav20-featured-card .gnav20-L2>li").forEach(function(i) {
               i.removeEventListener("mouseleave",closeMenuL3);
           });
           if (gnavdl.click) {
	       primary.forEach(function(i,n) {
            if (n==0 || n==1) {
      	      const b = primary[n].querySelector("button");
              if (b) {
               b.addEventListener("click",nav.open);
               b.removeEventListener("mouseover",openMenuL1);
              }
              primary[n].removeEventListener("mouseleave",closeMenuL1);
             }
       		});
            }
            document.querySelectorAll(".gnav20-mobile-menu a:not(.gnav20-haschild)").forEach(function(i) {
              i.addEventListener("click",function(e){e.stopPropagation()}) // stop mobile menu reopen on link click
            });
            MenuContentBack();
            gnav20.initSignIn();

        try { document.querySelector(".gnav20-navigation").classList.add("opacityOne","prognav"); }
        catch (e) {}
        setTimeout(nav.loadFooter,2600);
      }

    };

    // menu open
    this.open = function(e) {
      const u = e.target.parentNode.querySelector("ul.gnav20-isactive.gnav20-L1");
      if (u) {
        u.classList.remove("gnav20-isactive");
        u.classList.add("gnav20-column-highlight");
      }
      if (e.target.getAttribute("aria-expanded")=="true") {
       // e.target.setAttribute("aria-expanded","false"); // close
      }
      e.target.parentNode.parentNode.querySelectorAll("li>a.gnav20-open").forEach(a => {
        if (a != e.target) {
         a.classList.remove("gnav20-open");
         a.setAttribute("aria-expanded","false");
         a.parentNode.classList.remove("gnav20-current");
         a.parentNode.querySelector("div>ul.gnav20-submenu-column").style.display="none";
        }
      });
      if (window.innerWidth>=1020 && typeof(gnavdl.expand)!="undefined") {
        if (e.target.tagName=="BUTTON") {
        setTimeout(nav.openFirst,60); // Test
        } 
      }
      e.target.parentNode.querySelector("a:focus")?.blur();
    }

    // menu hovered
    this.hopen = function(e) {
		if (window.innerWidth>=1020 && e.target.tagName=="BUTTON") {
        setTimeout(nav.openFirst,60);
        }
    }

    // open first menu
    this.openFirst = function() {
      const a = document.querySelector(".gnav20-primary-menu [aria-expanded=true]~div ul.gnav20-L1 a.gnav20-haschild");
      if (a && !a.classList.contains("gnav20-open")) {
        a.click();
        //setTimeout(nav.openSecond,60);
      }
    }
    // open sub menu
    this.openSecond = function() {
      const a = document.querySelector(".gnav20-primary-menu [aria-expanded=true]~div ul.gnav20-L2 a.gnav20-haschild");
      if (a && !a.classList.contains("gnav20-open")) {
        a.click();
      }
    }

    // build menu contents (recursive)
    this.menu = function(wrapper,item,level,loc) {
        const title = document.createElement("div");
        title.classList.add("gnav20-featured-card-top-label","gnav20-column-highlight","gnav20-submenu-column","gnav20-L"+level);
        title.appendChild(document.createTextNode(item.title));
        wrapper.appendChild(title);
        if (item.nav) {
            const list = document.createElement("ul");
            list.classList.add("gnav20-submenu-column","gnav20-column-highlight","gnav20-L"+level,"gnav20-featured-scroll-area");
            if (level>1) { list.style.display="none";}
            item.nav.forEach(function(link,n) {
                const li = document.createElement("li");
                li.classList.add("gnav20-bold-link");
                if (link.menu) {
                    const a = document.createElement("a");
                    a.classList.add("gnav20-haschild");
                    a.appendChild(document.createTextNode(link.menu.title));
                    a.addEventListener("click",nav.open);
                    a.setAttribute("data-loc",loc+":"+link.menu.title);
                    li.appendChild(a);
                    if (level==1) { a.addEventListener("mouseover",openMenuL2); }
                    else if (level==2) { a.addEventListener("mouseover",function(e){openMenuL3(e)}); }
                    const b = document.createElement("a");
                    b.classList.add("gnav20-goback","gnav20-hide-on-desktop");
                    b.appendChild(document.createTextNode(link.menu.title));
                    li.appendChild(b);
                    const sub = document.createElement("div");
                    sub.classList.add("gnav20-L"+(level+1)+"-content-wrapper");
                    nav.menu(sub,link.menu,level+1,loc+":"+link.menu.title);
                    li.appendChild(sub);
                    list.appendChild(li);
                } else if (link.link) {
                    const a = document.createElement("a");
                    a.appendChild(document.createTextNode(link.link.title));
                    if (shopdomain) { a.href = link.link.href.replace(/^https?:\/\/.*?\.[eilnorsvwz]+\.com(\/business\/shop\/)/,"$1")}
                    else if (samedomain) { a.href=link.link.href.replace(/^https:\/\/www[89]*\.verizon\.com\/business\//,"/business/") }
                    else { a.href = link.link.href; }
                    a.setAttribute("data-loc",loc+":"+link.link.title);
                    li.appendChild(a);
                    if (level==1) { a.addEventListener("mouseover",function(e){this.focus();closeMenuL2(e);}); }
                    else if (level==2) { a.addEventListener("mouseover",function(e){closeMenuL3({target:list.querySelector(".gnav20-open")||e.target})}); }
                    list.appendChild(li);
                } else if(link.feature) {
                  list.appendChild(nav.feature(link.feature,level));
                 
                }
            });
            wrapper.appendChild(list);
        }
    }

    // featured card
    this.feature = function(feature,level) {
      const f = document.createElement("div");
      f.classList.add("gnav20-right-featured-card","gnav20-L2-featured-card","gnav20-featured-scroll-area");
      if (feature.image) {
        const d = document.createElement("div");
        d.classList.add("gnav20-featured-card-img");
        f.appendChild(d);
        const a = document.createElement("img");
        a.src = feature.image.url;
        d.appendChild(a);
      }
      if (feature.link) {
        const h = document.createElement("div");
        h.classList.add("gnav20-featured-card-heading");
        h.appendChild(document.createTextNode(feature.link.title));
        f.appendChild(h);
        const a = document.createElement("a");
        a.classList.add("fullcta");
        a.href = feature.link.href;
        f.appendChild(a);
      }
      if (feature.description) {
        const d = document.createElement("div");
        d.classList.add("gnav20-feature-card-copy");
        d.appendChild(document.createTextNode(feature.description));
        f.appendChild(d);
      }
      return f;
    }
    

    
};



vzNav.json = {"uid":"blt6d6baf7e56cd8fd1","_version":79,"locale":"en-us","ACL":{},"_in_progress":false,"created_at":"2023-08-24T12:20:43.414Z","created_by":"blt6ff1babf79dd23e7","nav":[{"menu":{"title":"Mobile","nav":[{"link":{"title":"Shop all mobile","href":"https://www.verizon.com/business/products/mobile/"}},{"menu":{"title":"Mobile Plans","href":"","nav":[{"link":{"title":"Shop all plans","href":"https://www.verizon.com/business/products/mobile/plans/"}},{"link":{"title":"My Biz Plan","href":"https://www.verizon.com/business/products/mobile/plans/my-biz/"}},{"link":{"title":"Bring your own device","href":"https://www.verizon.com/business/products/mobile/plans/bring-your-own-device/"}},{"link":{"title":"Verizon Business Complete","href":"https://www.verizon.com/business/products/mobile/plans/business-complete/"}},{"link":{"title":"Device protection plans","href":"https://www.verizon.com/business/products/mobile/plans/device-protection/"}},{"link":{"title":"International services","href":"https://www.verizon.com/business/products/plans/international/"}},{"link":{"title":"TravelPass","href":"https://www.verizon.com/business/products/plans/international/travel/#plan-options"}}]}},{"menu":{"title":"Phones","href":"","nav":[{"link":{"title":"Shop all phones & devices","href":"https://www.verizon.com/business/shop/products/devices/all"}},{"link":{"title":"Smartphones","href":"https://www.verizon.com/business/shop/products/devices/smartphones"}},{"menu":{"title":"Bring your own device","href":"","nav":[{"link":{"title":"Check device compatibility","href":"https://www.verizon.com/business/shop/products/devices/smartphones/byod"}},{"link":{"title":"Learn more","href":"https://www.verizon.com/business/products/mobile/plans/bring-your-own-device/"}}]}},{"link":{"title":"Rugged phones","href":"https://www.verizon.com/business/products/mobile/rugged-phones/"}},{"link":{"title":"Certified pre-owned devices","href":"https://www.verizon.com/business/shop/products/devices/certified-pre-owned"}},{"link":{"title":"Basic phones","href":"https://www.verizon.com/business/shop/products/devices/basic-phones"}},{"link":{"title":"Desk and conference phones","href":"https://www.verizon.com/business/shop/products/devices/desk-conference-phones"}},{"link":{"title":"Trade in your device","href":"https://www.verizon.com/business/products/mobile/trade-in/"}}]}},{"menu":{"title":"Connected devices","href":"","nav":[{"link":{"title":"Tablets","href":"https://www.verizon.com/business/shop/products/devices/tablets"}},{"link":{"title":"Laptops","href":"https://www.verizon.com/business/products/mobile/laptops/"}},{"link":{"title":"Mobile hotspots","href":"https://www.verizon.com/business/shop/products/devices/mobile-hotspots"}},{"link":{"title":"5G devices","href":"https://www.verizon.com/business/shop/products/devices/5g"}},{"link":{"title":"Smartwatches","href":"https://www.verizon.com/business/shop/products/devices/smart-watches"}},{"link":{"title":"Public Sector devices","href":"https://www.verizon.com/business/products/mobile/public-sector/"}},{"link":{"title":"eSIM devices","href":"https://www.verizon.com/business/products/devices/esim/"}},{"link":{"title":"Shop all devices","href":"https://www.verizon.com/business/shop/products/devices/all"}}]}},{"menu":{"title":"Accessories","href":"","nav":[{"link":{"title":"Tablets","href":"https://www.verizon.com/products/?cmp=2025:12:bm:us::ns:pre:emp:sbdr::acc:gnav:fe524a3d-60e4-4c52-8c05-f5a4c7838a2e:"}}]}},{"menu":{"title":"Deals","href":"","nav":[{"link":{"title":"Shop all deals","href":"https://www.verizon.com/business/products/mobile/deals/"}},{"link":{"title":"Internet and mobile bundle","href":"https://www.verizon.com/business/products/internet/deals/wireless-internet-phone-bundle/"}},{"link":{"title":"Veteran and military offers","href":"https://www.verizon.com/business/products/deals/discounts/military/"}}]}},{"menu":{"title":"Brands","href":"","nav":[{"link":{"title":"Apple","href":"https://www.verizon.com/business/shop/products/devices/apple"}},{"link":{"title":"Samsung","href":"https://www.verizon.com/business/shop/products/devices/samsung"}},{"link":{"title":"Google","href":"https://www.verizon.com/business/shop/products/devices/smartphones/google"}}]}}]}},{"menu":{"title":"Internet","nav":[{"link":{"title":"Shop all Business Internet","href":"https://www.verizon.com/business/products/internet/"}},{"menu":{"title":"Deals","nav":[{"link":{"title":"Shop all deals","href":"https://www.verizon.com/business/products/internet/deals/"}},{"link":{"title":"Internet and mobile bundle","href":"https://www.verizon.com/business/products/internet/deals/wireless-internet-phone-bundle/"}},{"link":{"title":"Veteran and military offers","href":"https://www.verizon.com/business/products/deals/discounts/military/"}},{"link":{"title":"Fios Business Internet deals","href":"https://www.verizon.com/business/products/internet/deals/fios/"}}]}},{"menu":{"title":"Business Internet","nav":[{"link":{"title":"Shop all Business Internet","href":"https://www.verizon.com/business/products/internet/"}},{"link":{"title":"Check internet availability","href":"https://www.verizon.com/foryoursmallbiz/Internet"}},{"link":{"title":"Fios Business Internet","href":"https://www.verizon.com/business/products/internet/fios/"}},{"link":{"title":"5G Business Internet","href":"https://www.verizon.com/business/products/internet/5g/"}},{"link":{"title":"LTE Business Internet","href":"https://www.verizon.com/business/products/internet/lte/"}},{"link":{"title":"Internet Dedicated","href":"https://www.verizon.com/business/products/internet/internet-dedicated/"}},{"link":{"title":"Business Broadband","href":"https://www.verizon.com/business/products/internet/business-broadband/"}}]}},{"menu":{"title":"Equipment and devices","nav":[{"link":{"title":"Jetpacks and hotspots","href":"https://www.verizon.com/business/shop/products/devices/mobile-hotspots"}},{"link":{"title":"Routers & extenders","href":"https://www.verizon.com/business/products/internet/routers-network-extenders/"}}]}},{"menu":{"title":"TV","nav":[{"link":{"title":"Fios TV","href":"https://www.verizon.com/business/products/internet/business-tv/"}}]}},{"menu":{"title":"More","nav":[{"link":{"title":"Check internet availability","href":"https://www.verizon.com/foryoursmallbiz/Internet"}},{"link":{"title":"Internet speed test","href":"https://www.verizon.com/business/products/internet/business-speed-test/"}},{"link":{"title":"TechTeam support","href":"https://www.verizon.com/business/products/internet/techteam/"}},{"link":{"title":"Internet usage calculator","href":"https://www.verizon.com/business/products/networks/connectivity/lte-business-internet/lte-internet-usage-calculator/"}}]}}]}},{"menu":{"title":"Solutions","href":"","nav":[{"menu":{"title":"Products","nav":[{"menu":{"title":"Mobile","href":"","nav":[{"link":{"title":"Shop all mobile","href":"https://www.verizon.com/business/products/mobile/"}},{"link":{"title":"Shop all deals","href":"https://www.verizon.com/business/products/mobile/deals/"}},{"link":{"title":"Mobile plans","href":"https://www.verizon.com/business/products/mobile/plans/"}},{"link":{"title":"Rugged phones","href":"https://www.verizon.com/business/products/mobile/rugged-phones/"}},{"link":{"title":"Bring your own device","href":"https://www.verizon.com/business/products/mobile/plans/bring-your-own-device/"}},{"link":{"title":"Connected laptops","href":"https://www.verizon.com/business/products/mobile/laptops/"}},{"link":{"title":"eSIM devices","href":"https://www.verizon.com/business/products/devices/esim/"}},{"link":{"title":"Apple","href":"https://www.verizon.com/business/products/mobile/apple/"}},{"link":{"title":"Samsung","href":"https://www.verizon.com/business/products/mobile/samsung/"}},{"link":{"title":"Google","href":"https://www.verizon.com/business/products/mobile/google/"}}]}},{"menu":{"title":"Internet","href":"","nav":[{"link":{"title":"Shop all deals","href":"https://www.verizon.com/business/products/internet/deals/"}},{"link":{"title":"Business Internet","href":"https://www.verizon.com/business/products/internet/"}},{"link":{"title":"Check internet availability","href":"https://www.verizon.com/foryoursmallbiz/Internet"}},{"link":{"title":"Routers & extenders","href":"https://www.verizon.com/business/products/internet/routers-network-extenders/"}},{"link":{"title":"Fios TV","href":"https://www.verizon.com/business/products/internet/business-tv/"}},{"link":{"title":"Tech support","href":"https://www.verizon.com/business/products/internet/service-protection-plan/"}},{"link":{"title":"Internet speed test","href":"https://www.verizon.com/business/products/internet/business-speed-test/"}},{"link":{"title":"Internet security solution","href":"https://www.verizon.com/business/products/security/network-cloud-security/business-internet-security/"}}]}},{"menu":{"title":"Network","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/networks/"}},{"link":{"title":"Managed network services","href":"https://www.verizon.com/business/products/networks/managed-network-services/"}},{"link":{"title":"Virtual network services","href":"https://www.verizon.com/business/products/networks/virtual-network-services/"}},{"link":{"title":"Connectivity","href":"https://www.verizon.com/business/products/networks/connectivity/"}},{"link":{"title":"Private 5G network","href":"https://www.verizon.com/business/products/networks/connectivity/private-5g-network/"}},{"link":{"title":"CPE and Subscription Services","href":"https://www.verizon.com/business/products/networks/cpe-and-subscription-services/"}}]}},{"menu":{"title":"Security","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/security/"}},{"link":{"title":"DDoS Shield","href":"https://www.verizon.com/business/products/security/network-cloud-security/ddos-shield/"}},{"link":{"title":"Secure Access Service Edge (SASE)","href":"https://www.verizon.com/business/products/security/network-cloud-security/sase-management/"}},{"link":{"title":"Managed Security Services","href":"https://www.verizon.com/business/products/security/network-cloud-security/security-device-monitoring-management/"}},{"link":{"title":"Business Internet Secure","href":"https://www.verizon.com/business/resources/lp/business-internet-secure/"}},{"link":{"title":"Verizon Business Internet Security","href":"https://www.verizon.com/business/products/security/network-cloud-security/business-internet-security/"}},{"link":{"title":"Verizon Business Mobile Internet Security","href":"https://www.verizon.com/business/products/security/network-cloud-security/mobile-internet-security/"}},{"link":{"title":"Mobile Device Management","href":"https://www.verizon.com/business/products/security/mobile-device-management/"}},{"link":{"title":"Mobile Threat Defense","href":"https://www.verizon.com/business/products/security/mobile-threat-defense/"}},{"link":{"title":"Business Mobile Secure Plus","href":"https://www.verizon.com/business/products/security/business-mobile-secure-plus/"}}]}},{"menu":{"title":"Voice and collaboration","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/voice-collaboration/"}},{"link":{"title":"One Talk ","href":"https://www.verizon.com/business/products/voice-collaboration/one-talk/"}},{"link":{"title":"Webex Cloud Communications","href":"https://www.verizon.com/business/products/voice-collaboration/webex-cloud-communications/"}},{"link":{"title":"Verizon Calling Solutions for Microsoft Teams","href":"https://www.verizon.com/business/products/voice-collaboration/microsoft-teams/"}},{"link":{"title":"VoIP phone services","href":"https://www.verizon.com/business/products/voice-collaboration/voip/"}},{"link":{"title":"Push to Talk Plus","href":"https://www.verizon.com/business/products/voice-collaboration/push-talk-plus/"}},{"link":{"title":"Business & Enterprise Messaging","href":"https://www.verizon.com/business/products/voice-collaboration/business-sms-solutions/"}},{"link":{"title":"Business Assistant","href":"https://www.verizon.com/business/solutions/ai-business-assistant/"}},{"link":{"title":"Plain Old Telephone Service","href":"https://www.verizon.com/business/products/voice-collaboration/plain-old-telephone-service-replacement/"}}]}},{"menu":{"title":"Contact centers and CX","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/contact-center-cx/"}},{"link":{"title":"Cloud contact center","href":"https://www.verizon.com/business/products/contact-center-cx/cloud-contact-center/"}},{"link":{"title":"Voice security","href":"https://www.verizon.com/business/products/contact-center-cx/voice-security/"}},{"link":{"title":"Customer engagement","href":"https://www.verizon.com/business/products/contact-center-cx/customer-engagement/"}},{"link":{"title":"Voice services","href":"https://www.verizon.com/business/products/contact-center-cx/voice-services/"}},{"link":{"title":"Voice API solutions","href":"https://www.verizon.com/business/products/contact-center-cx/voice-api/"}}]}},{"menu":{"title":"Internet of Things","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/internet-of-things/"}},{"link":{"title":"IoT devices","href":"https://www.verizon.com/business/products/internet-of-things/devices/"}},{"link":{"title":"IoT networks","href":"https://www.verizon.com/business/products/internet-of-things/iot-networks/"}},{"link":{"title":"IoT platform (ThingSpace) and services","href":"https://www.verizon.com/business/products/internet-of-things/iot-platform-and-services/"}},{"link":{"title":"IoT applications","href":"https://www.verizon.com/business/products/internet-of-things/iot-applications/"}}]}},{"menu":{"title":"Fleet management","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/fleet-management/"}},{"link":{"title":"GPS Fleet Tracking software","href":"https://www.verizon.com/business/products/fleet-management/gps-fleet-tracking/"}},{"link":{"title":"GPS Asset tracking","href":"https://www.verizon.com/business/products/fleet-management/gps-asset-tracking/"}},{"link":{"title":"AI dashcam solutions","href":"https://www.verizon.com/business/products/fleet-management/fleet-dash-cam/"}},{"link":{"title":"DOT Compliance","href":"https://www.verizon.com/business/products/fleet-management/dot-compliance/"}}]}},{"menu":{"title":"5G Edge","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/products/5g-edge/"}},{"link":{"title":"Accelerated Access facial authentication","href":"https://www.verizon.com/business/products/5g-edge/accelerated-access/"}},{"link":{"title":"Crowd Analytics","href":"https://www.verizon.com/business/products/5g-edge/crowd-analytics/"}}]}},{"link":{"title":"Go to all products","href":"https://www.verizon.com/business/products/"}}]}},{"menu":{"title":"Industry","nav":[{"menu":{"title":"Construction","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/construction/"}},{"link":{"title":"Future-ready worksites","href":"https://www.verizon.com/business/solutions/industry/construction/future-ready-worksites/"}},{"link":{"title":"Efficient operations","href":"https://www.verizon.com/business/solutions/industry/construction/efficient-operations/"}},{"link":{"title":"Connected workforces","href":"https://www.verizon.com/business/solutions/industry/construction/connected-workforces/"}},{"link":{"title":"Data security","href":"https://www.verizon.com/business/solutions/industry/construction/security-for-workforces-digital-data/"}}]}},{"link":{"title":"Healthcare","href":"https://www.verizon.com/business/solutions/industry/healthcare/"}},{"menu":{"title":"Automotive","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/automotive/"}},{"link":{"title":"Connected vehicles","href":"https://www.verizon.com/business/solutions/industry/automotive/autonomous-connected-vehicles/"}},{"link":{"title":"Unified technology","href":"https://www.verizon.com/business/solutions/industry/automotive/autonomous-vehicle-deployment-solutions/"}},{"link":{"title":"Immersive vehicle experiences","href":"https://www.verizon.com/business/solutions/industry/automotive/immersive-customer-vehicle-experiences/"}},{"link":{"title":"Data security","href":"https://www.verizon.com/business/solutions/industry/automotive/protecting-vehicle-and-customer-data/"}}]}},{"menu":{"title":"Manufacturing","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/manufacturing/"}},{"link":{"title":"Enabling Industry 4.0","href":"https://www.verizon.com/business/solutions/industry/manufacturing/smart-manufacturing-and-industry-4-0/"}},{"link":{"title":"Improving your productivity","href":"https://www.verizon.com/business/solutions/industry/manufacturing/connected-factories/"}},{"link":{"title":"Enhancing your security","href":"https://www.verizon.com/business/solutions/industry/manufacturing/data-protection-and-privacy-solutions/"}},{"link":{"title":"Empowering your workforce","href":"https://www.verizon.com/business/solutions/industry/manufacturing/connected-workforce/"}}]}},{"link":{"title":"Distribution & logistics","href":"https://www.verizon.com/business/solutions/industry/distribution-logistics/"}},{"menu":{"title":"Retail","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/retail/"}},{"link":{"title":"Enterprise connectivity","href":"https://www.verizon.com/business/solutions/industry/retail/digital-connectivity-in-business/"}},{"link":{"title":"Enhanced customer experiences","href":"https://www.verizon.com/business/solutions/industry/retail/enhancing-customer-experiences/"}},{"link":{"title":"Efficient operations","href":"https://www.verizon.com/business/solutions/industry/retail/operational-efficiency-with-iot/"}},{"link":{"title":"Data protection","href":"https://www.verizon.com/business/solutions/industry/retail/protecting-customer-payment-and-company-data/"}}]}},{"menu":{"title":"Financial","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/financial/"}},{"link":{"title":"Better infrastructure","href":"https://www.verizon.com/business/solutions/industry/financial/building-a-better-infrastructure/"}},{"link":{"title":"Protect critical data Data security","href":"https://www.verizon.com/business/solutions/industry/financial/protecting-critical-financial-data/"}},{"link":{"title":"Personalized customer experiences","href":"https://www.verizon.com/business/solutions/industry/financial/improving-customer-experience/"}},{"link":{"title":"Real-time innovation","href":"https://www.verizon.com/business/solutions/industry/financial/real-time-innovation/"}}]}},{"menu":{"title":"Media & entertainment","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/media-entertainment/"}},{"link":{"title":"Intelligent venues","href":"https://www.verizon.com/business/solutions/industry/media-entertainment/intelligent-venues-and-arenas/"}},{"link":{"title":"Connected athletes","href":"https://www.verizon.com/business/solutions/industry/media-entertainment/connected-athletes/"}},{"link":{"title":"Enhance experiences","href":"https://www.verizon.com/business/solutions/industry/media-entertainment/enhancing-customer-venue-experiences/"}},{"link":{"title":"Data and IP protection","href":"https://www.verizon.com/business/solutions/industry/media-entertainment/protect-ip-and-data/"}}]}},{"menu":{"title":"Energy & utilities","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/industry/energy-and-utilities/"}},{"link":{"title":"Connected smart grids","href":"https://www.verizon.com/business/solutions/industry/energy-and-utilities/smart-grids/"}},{"link":{"title":"Efficient operations","href":"https://www.verizon.com/business/solutions/industry/energy-and-utilities/operation-efficiencies/"}},{"link":{"title":"Data security","href":"https://www.verizon.com/business/solutions/industry/energy-and-utilities/safeguarding-data/"}},{"link":{"title":"Enhanced customer experiences","href":"https://www.verizon.com/business/solutions/industry/energy-and-utilities/differentiated-cx/"}}]}},{"menu":{"title":"Public Sector","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/public-sector/"}},{"link":{"title":"Education","href":"https://www.verizon.com/business/solutions/public-sector/education/"}},{"link":{"title":"Federal Government","href":"https://www.verizon.com/business/solutions/public-sector/federal-government/"}},{"link":{"title":"Public Safety","href":"https://www.verizon.com/business/solutions/public-sector/public-safety/"}},{"link":{"title":"State & Local Government","href":"https://www.verizon.com/business/solutions/public-sector/state-local-government/"}}]}},{"link":{"title":"All Industries","href":"https://www.verizon.com/business/solutions/industry/"}}]}},{"menu":{"title":"Small business","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/small-business/"}},{"link":{"title":"Business Unlimited plans","href":"https://www.verizon.com/business/products/mobile/plans/business-unlimited/"}},{"link":{"title":"Business internet","href":"https://www.verizon.com/business/products/internet/"}},{"link":{"title":"Bring your own device","href":"https://www.verizon.com/business/products/mobile/plans/bring-your-own-device/"}},{"link":{"title":"Verizon Business Marketplace","href":"https://www.verizon.com/business/solutions/marketplace/"}},{"link":{"title":"Business Assistant","href":"https://www.verizon.com/business/solutions/ai-business-assistant/"}},{"link":{"title":"One Talk","href":"https://www.verizon.com/business/products/voice-collaboration/one-talk/"}}]}},{"menu":{"title":"Enterprise","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/enterprise/"}},{"link":{"title":"Verizon AI Connect","href":"https://www.verizon.com/business/solutions/ai-connect/"}},{"link":{"title":"Verizon Mobile for Microsoft Teams","href":"https://www.verizon.com/business/products/voice-collaboration/microsoft-teams/unified-mobile/"}},{"link":{"title":"Private 5G Network","href":"https://www.verizon.com/business/products/networks/connectivity/private-5g-network/"}},{"link":{"title":"5G Edge computing","href":"https://www.verizon.com/business/solutions/business-intelligence/edge-computing/"}},{"link":{"title":"Supercharge your IT with 5G","href":"https://www.verizon.com/business/solutions/it-infrastructure/5g/"}},{"link":{"title":"Better infrastructure","href":"https://www.verizon.com/business/solutions/build-a-better-infrastructure/"}},{"link":{"title":"One Talk","href":"https://www.verizon.com/business/products/voice-collaboration/one-talk/"}}]}},{"menu":{"title":"Public Sector","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/public-sector/"}},{"link":{"title":"DBIR for Public Sector","href":"https://www.verizon.com/business/resources/reports/2024-dbir-public-sector-snapshot.pdf"}},{"link":{"title":"Security","href":"https://www.verizon.com/business/products/security/"}},{"link":{"title":"Public Sector devices","href":"https://www.verizon.com/business/products/mobile/public-sector/"}},{"link":{"title":"Education","href":"https://www.verizon.com/business/solutions/public-sector/education/"}},{"link":{"title":"Federal Government","href":"https://www.verizon.com/business/solutions/public-sector/federal-government/"}},{"link":{"title":"Public Safety","href":"https://www.verizon.com/business/solutions/public-sector/public-safety/"}},{"link":{"title":"State & Local Government","href":"https://www.verizon.com/business/solutions/public-sector/state-local-government/"}}]}},{"menu":{"title":"Business Needs","nav":[{"menu":{"title":"Modernize IT infrastructure","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/it-infrastructure/"}},{"link":{"title":"Supercharge your IT with 5G","href":"https://www.verizon.com/business/solutions/it-infrastructure/5g/"}},{"link":{"title":"Design your network infrastructure","href":"https://www.verizon.com/business/solutions/it-infrastructure/network/"}},{"link":{"title":"Network as a Service","href":"https://www.verizon.com/business/solutions/it-infrastructure/network-as-a-service/"}},{"link":{"title":"Lower latency with 5G Edge computing","href":"https://www.verizon.com/business/solutions/it-infrastructure/lower-latency/"}},{"link":{"title":"Improve application performance ","href":"https://www.verizon.com/business/solutions/it-infrastructure/sd-wan/"}},{"link":{"title":"Future of IoT with Edge computing","href":"https://www.verizon.com/business/solutions/it-infrastructure/edge-computing-and-iot/"}}]}},{"menu":{"title":"Advance business intelligence","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/business-intelligence/"}},{"link":{"title":"Improve business intelligence","href":"https://www.verizon.com/business/solutions/business-intelligence/improving-business-insights/"}},{"link":{"title":"Get faster insights with Edge computing","href":"https://www.verizon.com/business/solutions/business-intelligence/edge-computing/"}},{"link":{"title":"Achieve wisdom with digital transformation","href":"https://www.verizon.com/business/solutions/business-intelligence/digital-transformation/"}}]}},{"menu":{"title":"Navigate new working models","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/navigating-new-working-models/"}},{"link":{"title":"Contact center customer experience","href":"https://www.verizon.com/business/solutions/navigating-new-working-models/contact-center/ "}},{"link":{"title":"Empower remote contact center agents","href":"https://www.verizon.com/business/solutions/navigating-new-working-models/virtual-contact-center/"}},{"link":{"title":"Thrive in the anywhere workplace","href":"https://www.verizon.com/business/solutions/navigating-new-working-models/remote-work-from-home-solutions/"}},{"link":{"title":"Remote work security solutions","href":"https://www.verizon.com/business/solutions/navigating-new-working-models/remote-work-security-solutions/"}}]}},{"menu":{"title":"Boost productivity","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/boost-productivity/"}},{"link":{"title":"Enhance workforce productivity","href":"https://www.verizon.com/business/solutions/boost-productivity/workforce-productivity/"}},{"link":{"title":"Optimize operations with IoT","href":"https://www.verizon.com/business/solutions/boost-productivity/optimize-operations-iot/"}},{"link":{"title":"Enable agility with 5G automation","href":"https://www.verizon.com/business/solutions/boost-productivity/agility-via-5g-automation/"}}]}},{"menu":{"title":"Improve customer experience","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/customer-experience/"}},{"link":{"title":"Exceptional customer experiences","href":"https://www.verizon.com/business/solutions/customer-experience/5g-connected-retail/"}},{"link":{"title":"Outstanding venue experiences","href":"https://www.verizon.com/business/solutions/customer-experience/5g-connected-venues/"}},{"link":{"title":"Build customer trust by protecting data","href":"https://www.verizon.com/business/solutions/customer-experience/build-customer-trust/"}}]}},{"menu":{"title":"Accelerate business growth","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/accelerate-growth/"}},{"link":{"title":"Grow with immersive experiences","href":"https://www.verizon.com/business/solutions/accelerate-growth/immersive-experiences/"}},{"link":{"title":"Simplify and secure payment processing","href":"https://www.verizon.com/business/solutions/accelerate-growth/payment-options/"}},{"link":{"title":"Elevate your quick service restaurant","href":"https://www.verizon.com/business/solutions/accelerate-growth/quick-service-restaurant/"}}]}},{"menu":{"title":"Secure your business","href":"","nav":[{"link":{"title":"Overview","href":"https://www.verizon.com/business/solutions/secure-your-business/"}},{"link":{"title":"Core to edge network security","href":"https://www.verizon.com/business/solutions/secure-your-business/safeguard-from-core-to-edge/"}},{"link":{"title":"Small business cybersecurity solutions","href":"https://www.verizon.com/business/solutions/secure-your-business/small-business-cybersecurity/"}},{"link":{"title":"Fortify with business continuity solutions","href":"https://www.verizon.com/business/solutions/secure-your-business/continuity/"}},{"link":{"title":"Keep remote workers securely connected","href":"https://www.verizon.com/business/solutions/secure-your-business/remote-continuity/"}}]}}]}},{"menu":{"title":"What's new","href":"","nav":[{"link":{"title":"Data Breach Investigations Report","href":"https://www.verizon.com/business/resources/reports/dbir/"}},{"link":{"title":"Verizon Business Marketplace","href":"https://www.verizon.com/business/solutions/marketplace/"}}]}},{"link":{"title":"Go to all solutions","href":"https://www.verizon.com/business/solutions/"}}]}},{"menu":{"title":"Insights ","nav":[{"menu":{"title":"Why Verizon","href":"","nav":[{"link":{"title":"Why choose us","href":"https://www.verizon.com/business/why-verizon/"}},{"link":{"title":"Executive Briefing Program","href":"https://www.verizon.com/business/why-verizon/executive-briefing-program/"}},{"link":{"title":"Looking Glass","href":"https://www.verizon.com/business/why-verizon/looking-glass/"}},{"link":{"title":"Awards and recognition","href":"https://www.verizon.com/business/why-verizon/industry-awards-and-recognition/"}}]}},{"menu":{"title":"Events and webinars","href":"","nav":[{"link":{"title":"Enterprise","href":"https://www.verizon.com/business/resources/events/enterprise/"}},{"link":{"title":"Small Business","href":"https://www.verizon.com/business/resources/events/small-business/"}},{"link":{"title":"Public Sector","href":"https://www.verizon.com/business/resources/events/public-sector/"}},{"link":{"title":"All events and webinars","href":"https://www.verizon.com/business/resources/events/"}}]}},{"menu":{"title":"Popular topics","href":"","nav":[{"link":{"title":"Distance learning","href":"https://www.verizon.com/business/resources/distance-learning/"}},{"link":{"title":"5G Edge and why it matters","href":"https://www.verizon.com/business/resources/edge/"}},{"link":{"title":"Healthcare","href":"https://www.verizon.com/business/resources/healthcare/"}},{"link":{"title":"Improving CX","href":"https://www.verizon.com/business/resources/improving-cx/"}},{"link":{"title":"Network as a Service ","href":"https://www.verizon.com/business/resources/network-as-a-service/"}},{"link":{"title":"New workplace","href":"https://www.verizon.com/business/resources/new-workplace/"}},{"link":{"title":"Public safety","href":"https://www.verizon.com/business/resources/public-safety/"}},{"link":{"title":"Security strategies","href":"https://www.verizon.com/business/resources/security-strategy/"}}]}},{"menu":{"title":"Featured resources","href":"","nav":[{"link":{"title":" IoT Market Insights Report","href":"https://www.verizon.com/business/resources/reports/iot-market-insights-report/"}},{"link":{"title":"CX Annual Insights Report","href":"https://www.verizon.com/business/resources/reports/cx-annual-insights/"}},{"link":{"title":"Data Breach Investigations Report","href":"https://www.verizon.com/business/resources/reports/dbir/"}},{"link":{"title":"Mobile Security Index report","href":"https://www.verizon.com/business/resources/reports/mobile-security-index/"}},{"link":{"title":"Payment Security Report","href":"https://www.verizon.com/business/reports/payment-security-report/"}},{"link":{"title":"5G basics","href":"https://www.verizon.com/business/resources/5g/basics/"}},{"link":{"title":"Gartner recognition","href":"https://www.verizon.com/business/why-verizon/recognition/gartner/"}},{"link":{"title":"Verizon Partner Network","href":"https://www.verizon.com/business/resources/partner-network/"}}]}},{"menu":{"title":"Customer success stories","href":"","nav":[{"link":{"title":"HOPE Agency turns to Verizon","href":"https://www.verizon.com/business/resources/customer-success-stories/hope-agency-turns-to-verizon-for-reliable-wireless-communication/"}},{"link":{"title":"ABP builds the port of the future","href":"https://www.verizon.com/business/resources/customer-success-stories/associated-british-ports/"}},{"link":{"title":"Cintas pulls off an IT upgrade","href":"https://www.verizon.com/business/resources/customer-success-stories/cintas-pulls-off-an-it-infrastructure-upgrade/"}},{"link":{"title":"Fujifilm steps up its cybersecurity","href":"https://www.verizon.com/business/resources/customer-success-stories/fujifilm-deploys-advanced-security-operations-center/"}},{"link":{"title":"All stories","href":"https://www.verizon.com/business/resources/customer-success-stories/"}}]}},{"link":{"title":"All insights","href":"https://www.verizon.com/business/resources/"}}]}}],"tags":[],"title":"Global Nav: Next Gen","updated_at":"2026-05-18T16:39:28.914Z","updated_by":"blt45148fdca21aeb65","url":"/nav/next-gen","publish_details":{"time":"2026-05-18T18:06:33.138Z","user":"blt45148fdca21aeb65","environment":"blt17ca9477a2c79466","locale":"en-us"}};

/*! @license DOMPurify 3.3.1 | (c) Cure53 and other contributors | Released under the Apache license 2.0 and Mozilla Public License 2.0 | github.com/cure53/DOMPurify/blob/3.3.1/LICENSE */

(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? module.exports = factory() :
	typeof define === 'function' && define.amd ? define(factory) :
	(global = typeof globalThis !== 'undefined' ? globalThis : global || self, global.DOMPurify = factory());
  })(this, (function () { 'use strict';
  
	const {
	  entries,
	  setPrototypeOf,
	  isFrozen,
	  getPrototypeOf,
	  getOwnPropertyDescriptor
	} = Object;
	let {
	  freeze,
	  seal,
	  create
	} = Object; // eslint-disable-line import/no-mutable-exports
	let {
	  apply,
	  construct
	} = typeof Reflect !== 'undefined' && Reflect;
	if (!freeze) {
	  freeze = function freeze(x) {
		return x;
	  };
	}
	if (!seal) {
	  seal = function seal(x) {
		return x;
	  };
	}
	if (!apply) {
	  apply = function apply(func, thisArg) {
		for (var _len = arguments.length, args = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
		  args[_key - 2] = arguments[_key];
		}
		return func.apply(thisArg, args);
	  };
	}
	if (!construct) {
	  construct = function construct(Func) {
		for (var _len2 = arguments.length, args = new Array(_len2 > 1 ? _len2 - 1 : 0), _key2 = 1; _key2 < _len2; _key2++) {
		  args[_key2 - 1] = arguments[_key2];
		}
		return new Func(...args);
	  };
	}
	const arrayForEach = unapply(Array.prototype.forEach);
	const arrayLastIndexOf = unapply(Array.prototype.lastIndexOf);
	const arrayPop = unapply(Array.prototype.pop);
	const arrayPush = unapply(Array.prototype.push);
	const arraySplice = unapply(Array.prototype.splice);
	const stringToLowerCase = unapply(String.prototype.toLowerCase);
	const stringToString = unapply(String.prototype.toString);
	const stringMatch = unapply(String.prototype.match);
	const stringReplace = unapply(String.prototype.replace);
	const stringIndexOf = unapply(String.prototype.indexOf);
	const stringTrim = unapply(String.prototype.trim);
	const objectHasOwnProperty = unapply(Object.prototype.hasOwnProperty);
	const regExpTest = unapply(RegExp.prototype.test);
	const typeErrorCreate = unconstruct(TypeError);
	/**
	 * Creates a new function that calls the given function with a specified thisArg and arguments.
	 *
	 * @param func - The function to be wrapped and called.
	 * @returns A new function that calls the given function with a specified thisArg and arguments.
	 */
	function unapply(func) {
	  return function (thisArg) {
		if (thisArg instanceof RegExp) {
		  thisArg.lastIndex = 0;
		}
		for (var _len3 = arguments.length, args = new Array(_len3 > 1 ? _len3 - 1 : 0), _key3 = 1; _key3 < _len3; _key3++) {
		  args[_key3 - 1] = arguments[_key3];
		}
		return apply(func, thisArg, args);
	  };
	}
	/**
	 * Creates a new function that constructs an instance of the given constructor function with the provided arguments.
	 *
	 * @param func - The constructor function to be wrapped and called.
	 * @returns A new function that constructs an instance of the given constructor function with the provided arguments.
	 */
	function unconstruct(Func) {
	  return function () {
		for (var _len4 = arguments.length, args = new Array(_len4), _key4 = 0; _key4 < _len4; _key4++) {
		  args[_key4] = arguments[_key4];
		}
		return construct(Func, args);
	  };
	}
	/**
	 * Add properties to a lookup table
	 *
	 * @param set - The set to which elements will be added.
	 * @param array - The array containing elements to be added to the set.
	 * @param transformCaseFunc - An optional function to transform the case of each element before adding to the set.
	 * @returns The modified set with added elements.
	 */
	function addToSet(set, array) {
	  let transformCaseFunc = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : stringToLowerCase;
	  if (setPrototypeOf) {
		// Make 'in' and truthy checks like Boolean(set.constructor)
		// independent of any properties defined on Object.prototype.
		// Prevent prototype setters from intercepting set as a this value.
		setPrototypeOf(set, null);
	  }
	  let l = array.length;
	  while (l--) {
		let element = array[l];
		if (typeof element === 'string') {
		  const lcElement = transformCaseFunc(element);
		  if (lcElement !== element) {
			// Config presets (e.g. tags.js, attrs.js) are immutable.
			if (!isFrozen(array)) {
			  array[l] = lcElement;
			}
			element = lcElement;
		  }
		}
		set[element] = true;
	  }
	  return set;
	}
	/**
	 * Clean up an array to harden against CSPP
	 *
	 * @param array - The array to be cleaned.
	 * @returns The cleaned version of the array
	 */
	function cleanArray(array) {
	  for (let index = 0; index < array.length; index++) {
		const isPropertyExist = objectHasOwnProperty(array, index);
		if (!isPropertyExist) {
		  array[index] = null;
		}
	  }
	  return array;
	}
	/**
	 * Shallow clone an object
	 *
	 * @param object - The object to be cloned.
	 * @returns A new object that copies the original.
	 */
	function clone(object) {
	  const newObject = create(null);
	  for (const [property, value] of entries(object)) {
		const isPropertyExist = objectHasOwnProperty(object, property);
		if (isPropertyExist) {
		  if (Array.isArray(value)) {
			newObject[property] = cleanArray(value);
		  } else if (value && typeof value === 'object' && value.constructor === Object) {
			newObject[property] = clone(value);
		  } else {
			newObject[property] = value;
		  }
		}
	  }
	  return newObject;
	}
	/**
	 * This method automatically checks if the prop is function or getter and behaves accordingly.
	 *
	 * @param object - The object to look up the getter function in its prototype chain.
	 * @param prop - The property name for which to find the getter function.
	 * @returns The getter function found in the prototype chain or a fallback function.
	 */
	function lookupGetter(object, prop) {
	  while (object !== null) {
		const desc = getOwnPropertyDescriptor(object, prop);
		if (desc) {
		  if (desc.get) {
			return unapply(desc.get);
		  }
		  if (typeof desc.value === 'function') {
			return unapply(desc.value);
		  }
		}
		object = getPrototypeOf(object);
	  }
	  function fallbackValue() {
		return null;
	  }
	  return fallbackValue;
	}
  
	const html$1 = freeze(['a', 'abbr', 'acronym', 'address', 'area', 'article', 'aside', 'audio', 'b', 'bdi', 'bdo', 'big', 'blink', 'blockquote', 'body', 'br', 'button', 'canvas', 'caption', 'center', 'cite', 'code', 'col', 'colgroup', 'content', 'data', 'datalist', 'dd', 'decorator', 'del', 'details', 'dfn', 'dialog', 'dir', 'div', 'dl', 'dt', 'element', 'em', 'fieldset', 'figcaption', 'figure', 'font', 'footer', 'form', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'head', 'header', 'hgroup', 'hr', 'html', 'i', 'img', 'input', 'ins', 'kbd', 'label', 'legend', 'li', 'main', 'map', 'mark', 'marquee', 'menu', 'menuitem', 'meter', 'nav', 'nobr', 'ol', 'optgroup', 'option', 'output', 'p', 'picture', 'pre', 'progress', 'q', 'rp', 'rt', 'ruby', 's', 'samp', 'search', 'section', 'select', 'shadow', 'slot', 'small', 'source', 'spacer', 'span', 'strike', 'strong', 'style', 'sub', 'summary', 'sup', 'table', 'tbody', 'td', 'template', 'textarea', 'tfoot', 'th', 'thead', 'time', 'tr', 'track', 'tt', 'u', 'ul', 'var', 'video', 'wbr']);
	const svg$1 = freeze(['svg', 'a', 'altglyph', 'altglyphdef', 'altglyphitem', 'animatecolor', 'animatemotion', 'animatetransform', 'circle', 'clippath', 'defs', 'desc', 'ellipse', 'enterkeyhint', 'exportparts', 'filter', 'font', 'g', 'glyph', 'glyphref', 'hkern', 'image', 'inputmode', 'line', 'lineargradient', 'marker', 'mask', 'metadata', 'mpath', 'part', 'path', 'pattern', 'polygon', 'polyline', 'radialgradient', 'rect', 'stop', 'style', 'switch', 'symbol', 'text', 'textpath', 'title', 'tref', 'tspan', 'view', 'vkern']);
	const svgFilters = freeze(['feBlend', 'feColorMatrix', 'feComponentTransfer', 'feComposite', 'feConvolveMatrix', 'feDiffuseLighting', 'feDisplacementMap', 'feDistantLight', 'feDropShadow', 'feFlood', 'feFuncA', 'feFuncB', 'feFuncG', 'feFuncR', 'feGaussianBlur', 'feImage', 'feMerge', 'feMergeNode', 'feMorphology', 'feOffset', 'fePointLight', 'feSpecularLighting', 'feSpotLight', 'feTile', 'feTurbulence']);
	// List of SVG elements that are disallowed by default.
	// We still need to know them so that we can do namespace
	// checks properly in case one wants to add them to
	// allow-list.
	const svgDisallowed = freeze(['animate', 'color-profile', 'cursor', 'discard', 'font-face', 'font-face-format', 'font-face-name', 'font-face-src', 'font-face-uri', 'foreignobject', 'hatch', 'hatchpath', 'mesh', 'meshgradient', 'meshpatch', 'meshrow', 'missing-glyph', 'script', 'set', 'solidcolor', 'unknown', 'use']);
	const mathMl$1 = freeze(['math', 'menclose', 'merror', 'mfenced', 'mfrac', 'mglyph', 'mi', 'mlabeledtr', 'mmultiscripts', 'mn', 'mo', 'mover', 'mpadded', 'mphantom', 'mroot', 'mrow', 'ms', 'mspace', 'msqrt', 'mstyle', 'msub', 'msup', 'msubsup', 'mtable', 'mtd', 'mtext', 'mtr', 'munder', 'munderover', 'mprescripts']);
	// Similarly to SVG, we want to know all MathML elements,
	// even those that we disallow by default.
	const mathMlDisallowed = freeze(['maction', 'maligngroup', 'malignmark', 'mlongdiv', 'mscarries', 'mscarry', 'msgroup', 'mstack', 'msline', 'msrow', 'semantics', 'annotation', 'annotation-xml', 'mprescripts', 'none']);
	const text = freeze(['#text']);
  
	const html = freeze(['accept', 'action', 'align', 'alt', 'autocapitalize', 'autocomplete', 'autopictureinpicture', 'autoplay', 'background', 'bgcolor', 'border', 'capture', 'cellpadding', 'cellspacing', 'checked', 'cite', 'class', 'clear', 'color', 'cols', 'colspan', 'controls', 'controlslist', 'coords', 'crossorigin', 'datetime', 'decoding', 'default', 'dir', 'disabled', 'disablepictureinpicture', 'disableremoteplayback', 'download', 'draggable', 'enctype', 'enterkeyhint', 'exportparts', 'face', 'for', 'headers', 'height', 'hidden', 'high', 'href', 'hreflang', 'id', 'inert', 'inputmode', 'integrity', 'ismap', 'kind', 'label', 'lang', 'list', 'loading', 'loop', 'low', 'max', 'maxlength', 'media', 'method', 'min', 'minlength', 'multiple', 'muted', 'name', 'nonce', 'noshade', 'novalidate', 'nowrap', 'open', 'optimum', 'part', 'pattern', 'placeholder', 'playsinline', 'popover', 'popovertarget', 'popovertargetaction', 'poster', 'preload', 'pubdate', 'radiogroup', 'readonly', 'rel', 'required', 'rev', 'reversed', 'role', 'rows', 'rowspan', 'spellcheck', 'scope', 'selected', 'shape', 'size', 'sizes', 'slot', 'span', 'srclang', 'start', 'src', 'srcset', 'step', 'style', 'summary', 'tabindex', 'title', 'translate', 'type', 'usemap', 'valign', 'value', 'width', 'wrap', 'xmlns', 'slot']);
	const svg = freeze(['accent-height', 'accumulate', 'additive', 'alignment-baseline', 'amplitude', 'ascent', 'attributename', 'attributetype', 'azimuth', 'basefrequency', 'baseline-shift', 'begin', 'bias', 'by', 'class', 'clip', 'clippathunits', 'clip-path', 'clip-rule', 'color', 'color-interpolation', 'color-interpolation-filters', 'color-profile', 'color-rendering', 'cx', 'cy', 'd', 'dx', 'dy', 'diffuseconstant', 'direction', 'display', 'divisor', 'dur', 'edgemode', 'elevation', 'end', 'exponent', 'fill', 'fill-opacity', 'fill-rule', 'filter', 'filterunits', 'flood-color', 'flood-opacity', 'font-family', 'font-size', 'font-size-adjust', 'font-stretch', 'font-style', 'font-variant', 'font-weight', 'fx', 'fy', 'g1', 'g2', 'glyph-name', 'glyphref', 'gradientunits', 'gradienttransform', 'height', 'href', 'id', 'image-rendering', 'in', 'in2', 'intercept', 'k', 'k1', 'k2', 'k3', 'k4', 'kerning', 'keypoints', 'keysplines', 'keytimes', 'lang', 'lengthadjust', 'letter-spacing', 'kernelmatrix', 'kernelunitlength', 'lighting-color', 'local', 'marker-end', 'marker-mid', 'marker-start', 'markerheight', 'markerunits', 'markerwidth', 'maskcontentunits', 'maskunits', 'max', 'mask', 'mask-type', 'media', 'method', 'mode', 'min', 'name', 'numoctaves', 'offset', 'operator', 'opacity', 'order', 'orient', 'orientation', 'origin', 'overflow', 'paint-order', 'path', 'pathlength', 'patterncontentunits', 'patterntransform', 'patternunits', 'points', 'preservealpha', 'preserveaspectratio', 'primitiveunits', 'r', 'rx', 'ry', 'radius', 'refx', 'refy', 'repeatcount', 'repeatdur', 'restart', 'result', 'rotate', 'scale', 'seed', 'shape-rendering', 'slope', 'specularconstant', 'specularexponent', 'spreadmethod', 'startoffset', 'stddeviation', 'stitchtiles', 'stop-color', 'stop-opacity', 'stroke-dasharray', 'stroke-dashoffset', 'stroke-linecap', 'stroke-linejoin', 'stroke-miterlimit', 'stroke-opacity', 'stroke', 'stroke-width', 'style', 'surfacescale', 'systemlanguage', 'tabindex', 'tablevalues', 'targetx', 'targety', 'transform', 'transform-origin', 'text-anchor', 'text-decoration', 'text-rendering', 'textlength', 'type', 'u1', 'u2', 'unicode', 'values', 'viewbox', 'visibility', 'version', 'vert-adv-y', 'vert-origin-x', 'vert-origin-y', 'width', 'word-spacing', 'wrap', 'writing-mode', 'xchannelselector', 'ychannelselector', 'x', 'x1', 'x2', 'xmlns', 'y', 'y1', 'y2', 'z', 'zoomandpan']);
	const mathMl = freeze(['accent', 'accentunder', 'align', 'bevelled', 'close', 'columnsalign', 'columnlines', 'columnspan', 'denomalign', 'depth', 'dir', 'display', 'displaystyle', 'encoding', 'fence', 'frame', 'height', 'href', 'id', 'largeop', 'length', 'linethickness', 'lspace', 'lquote', 'mathbackground', 'mathcolor', 'mathsize', 'mathvariant', 'maxsize', 'minsize', 'movablelimits', 'notation', 'numalign', 'open', 'rowalign', 'rowlines', 'rowspacing', 'rowspan', 'rspace', 'rquote', 'scriptlevel', 'scriptminsize', 'scriptsizemultiplier', 'selection', 'separator', 'separators', 'stretchy', 'subscriptshift', 'supscriptshift', 'symmetric', 'voffset', 'width', 'xmlns']);
	const xml = freeze(['xlink:href', 'xml:id', 'xlink:title', 'xml:space', 'xmlns:xlink']);
  
	// eslint-disable-next-line unicorn/better-regex
	const MUSTACHE_EXPR = seal(/\{\{[\w\W]*|[\w\W]*\}\}/gm); // Specify template detection regex for SAFE_FOR_TEMPLATES mode
	const ERB_EXPR = seal(/<%[\w\W]*|[\w\W]*%>/gm);
	const TMPLIT_EXPR = seal(/\$\{[\w\W]*/gm); // eslint-disable-line unicorn/better-regex
	const DATA_ATTR = seal(/^data-[\-\w.\u00B7-\uFFFF]+$/); // eslint-disable-line no-useless-escape
	const ARIA_ATTR = seal(/^aria-[\-\w]+$/); // eslint-disable-line no-useless-escape
	const IS_ALLOWED_URI = seal(/^(?:(?:(?:f|ht)tps?|mailto|tel|callto|sms|cid|xmpp|matrix):|[^a-z]|[a-z+.\-]+(?:[^a-z+.\-:]|$))/i // eslint-disable-line no-useless-escape
	);
	const IS_SCRIPT_OR_DATA = seal(/^(?:\w+script|data):/i);
	const ATTR_WHITESPACE = seal(/[\u0000-\u0020\u00A0\u1680\u180E\u2000-\u2029\u205F\u3000]/g // eslint-disable-line no-control-regex
	);
	const DOCTYPE_NAME = seal(/^html$/i);
	const CUSTOM_ELEMENT = seal(/^[a-z][.\w]*(-[.\w]+)+$/i);
  
	var EXPRESSIONS = /*#__PURE__*/Object.freeze({
	  __proto__: null,
	  ARIA_ATTR: ARIA_ATTR,
	  ATTR_WHITESPACE: ATTR_WHITESPACE,
	  CUSTOM_ELEMENT: CUSTOM_ELEMENT,
	  DATA_ATTR: DATA_ATTR,
	  DOCTYPE_NAME: DOCTYPE_NAME,
	  ERB_EXPR: ERB_EXPR,
	  IS_ALLOWED_URI: IS_ALLOWED_URI,
	  IS_SCRIPT_OR_DATA: IS_SCRIPT_OR_DATA,
	  MUSTACHE_EXPR: MUSTACHE_EXPR,
	  TMPLIT_EXPR: TMPLIT_EXPR
	});
  
	/* eslint-disable @typescript-eslint/indent */
	// https://developer.mozilla.org/en-US/docs/Web/API/Node/nodeType
	const NODE_TYPE = {
	  element: 1,
	  attribute: 2,
	  text: 3,
	  cdataSection: 4,
	  entityReference: 5,
	  // Deprecated
	  entityNode: 6,
	  // Deprecated
	  progressingInstruction: 7,
	  comment: 8,
	  document: 9,
	  documentType: 10,
	  documentFragment: 11,
	  notation: 12 // Deprecated
	};
	const getGlobal = function getGlobal() {
	  return typeof window === 'undefined' ? null : window;
	};
	/**
	 * Creates a no-op policy for internal use only.
	 * Don't export this function outside this module!
	 * @param trustedTypes The policy factory.
	 * @param purifyHostElement The Script element used to load DOMPurify (to determine policy name suffix).
	 * @return The policy created (or null, if Trusted Types
	 * are not supported or creating the policy failed).
	 */
	const _createTrustedTypesPolicy = function _createTrustedTypesPolicy(trustedTypes, purifyHostElement) {
	  if (typeof trustedTypes !== 'object' || typeof trustedTypes.createPolicy !== 'function') {
		return null;
	  }
	  // Allow the callers to control the unique policy name
	  // by adding a data-tt-policy-suffix to the script element with the DOMPurify.
	  // Policy creation with duplicate names throws in Trusted Types.
	  let suffix = null;
	  const ATTR_NAME = 'data-tt-policy-suffix';
	  if (purifyHostElement && purifyHostElement.hasAttribute(ATTR_NAME)) {
		suffix = purifyHostElement.getAttribute(ATTR_NAME);
	  }
	  const policyName = 'dompurify' + (suffix ? '#' + suffix : '');
	  try {
		return trustedTypes.createPolicy(policyName, {
		  createHTML(html) {
			return html;
		  },
		  createScriptURL(scriptUrl) {
			return scriptUrl;
		  }
		});
	  } catch (_) {
		// Policy creation failed (most likely another DOMPurify script has
		// already run). Skip creating the policy, as this will only cause errors
		// if TT are enforced.
		console.warn('TrustedTypes policy ' + policyName + ' could not be created.');
		return null;
	  }
	};
	const _createHooksMap = function _createHooksMap() {
	  return {
		afterSanitizeAttributes: [],
		afterSanitizeElements: [],
		afterSanitizeShadowDOM: [],
		beforeSanitizeAttributes: [],
		beforeSanitizeElements: [],
		beforeSanitizeShadowDOM: [],
		uponSanitizeAttribute: [],
		uponSanitizeElement: [],
		uponSanitizeShadowNode: []
	  };
	};
	function createDOMPurify() {
	  let window = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : getGlobal();
	  const DOMPurify = root => createDOMPurify(root);
	  DOMPurify.version = '3.3.1';
	  DOMPurify.removed = [];
	  if (!window || !window.document || window.document.nodeType !== NODE_TYPE.document || !window.Element) {
		// Not running in a browser, provide a factory function
		// so that you can pass your own Window
		DOMPurify.isSupported = false;
		return DOMPurify;
	  }
	  let {
		document
	  } = window;
	  const originalDocument = document;
	  const currentScript = originalDocument.currentScript;
	  const {
		DocumentFragment,
		HTMLTemplateElement,
		Node,
		Element,
		NodeFilter,
		NamedNodeMap = window.NamedNodeMap || window.MozNamedAttrMap,
		HTMLFormElement,
		DOMParser,
		trustedTypes
	  } = window;
	  const ElementPrototype = Element.prototype;
	  const cloneNode = lookupGetter(ElementPrototype, 'cloneNode');
	  const remove = lookupGetter(ElementPrototype, 'remove');
	  const getNextSibling = lookupGetter(ElementPrototype, 'nextSibling');
	  const getChildNodes = lookupGetter(ElementPrototype, 'childNodes');
	  const getParentNode = lookupGetter(ElementPrototype, 'parentNode');
	  // As per issue #47, the web-components registry is inherited by a
	  // new document created via createHTMLDocument. As per the spec
	  // (http://w3c.github.io/webcomponents/spec/custom/#creating-and-passing-registries)
	  // a new empty registry is used when creating a template contents owner
	  // document, so we use that as our parent document to ensure nothing
	  // is inherited.
	  if (typeof HTMLTemplateElement === 'function') {
		const template = document.createElement('template');
		if (template.content && template.content.ownerDocument) {
		  document = template.content.ownerDocument;
		}
	  }
	  let trustedTypesPolicy;
	  let emptyHTML = '';
	  const {
		implementation,
		createNodeIterator,
		createDocumentFragment,
		getElementsByTagName
	  } = document;
	  const {
		importNode
	  } = originalDocument;
	  let hooks = _createHooksMap();
	  /**
	   * Expose whether this browser supports running the full DOMPurify.
	   */
	  DOMPurify.isSupported = typeof entries === 'function' && typeof getParentNode === 'function' && implementation && implementation.createHTMLDocument !== undefined;
	  const {
		MUSTACHE_EXPR,
		ERB_EXPR,
		TMPLIT_EXPR,
		DATA_ATTR,
		ARIA_ATTR,
		IS_SCRIPT_OR_DATA,
		ATTR_WHITESPACE,
		CUSTOM_ELEMENT
	  } = EXPRESSIONS;
	  let {
		IS_ALLOWED_URI: IS_ALLOWED_URI$1
	  } = EXPRESSIONS;
	  /**
	   * We consider the elements and attributes below to be safe. Ideally
	   * don't add any new ones but feel free to remove unwanted ones.
	   */
	  /* allowed element names */
	  let ALLOWED_TAGS = null;
	  const DEFAULT_ALLOWED_TAGS = addToSet({}, [...html$1, ...svg$1, ...svgFilters, ...mathMl$1, ...text]);
	  /* Allowed attribute names */
	  let ALLOWED_ATTR = null;
	  const DEFAULT_ALLOWED_ATTR = addToSet({}, [...html, ...svg, ...mathMl, ...xml]);
	  /*
	   * Configure how DOMPurify should handle custom elements and their attributes as well as customized built-in elements.
	   * @property {RegExp|Function|null} tagNameCheck one of [null, regexPattern, predicate]. Default: `null` (disallow any custom elements)
	   * @property {RegExp|Function|null} attributeNameCheck one of [null, regexPattern, predicate]. Default: `null` (disallow any attributes not on the allow list)
	   * @property {boolean} allowCustomizedBuiltInElements allow custom elements derived from built-ins if they pass CUSTOM_ELEMENT_HANDLING.tagNameCheck. Default: `false`.
	   */
	  let CUSTOM_ELEMENT_HANDLING = Object.seal(create(null, {
		tagNameCheck: {
		  writable: true,
		  configurable: false,
		  enumerable: true,
		  value: null
		},
		attributeNameCheck: {
		  writable: true,
		  configurable: false,
		  enumerable: true,
		  value: null
		},
		allowCustomizedBuiltInElements: {
		  writable: true,
		  configurable: false,
		  enumerable: true,
		  value: false
		}
	  }));
	  /* Explicitly forbidden tags (overrides ALLOWED_TAGS/ADD_TAGS) */
	  let FORBID_TAGS = null;
	  /* Explicitly forbidden attributes (overrides ALLOWED_ATTR/ADD_ATTR) */
	  let FORBID_ATTR = null;
	  /* Config object to store ADD_TAGS/ADD_ATTR functions (when used as functions) */
	  const EXTRA_ELEMENT_HANDLING = Object.seal(create(null, {
		tagCheck: {
		  writable: true,
		  configurable: false,
		  enumerable: true,
		  value: null
		},
		attributeCheck: {
		  writable: true,
		  configurable: false,
		  enumerable: true,
		  value: null
		}
	  }));
	  /* Decide if ARIA attributes are okay */
	  let ALLOW_ARIA_ATTR = true;
	  /* Decide if custom data attributes are okay */
	  let ALLOW_DATA_ATTR = true;
	  /* Decide if unknown protocols are okay */
	  let ALLOW_UNKNOWN_PROTOCOLS = false;
	  /* Decide if self-closing tags in attributes are allowed.
	   * Usually removed due to a mXSS issue in jQuery 3.0 */
	  let ALLOW_SELF_CLOSE_IN_ATTR = true;
	  /* Output should be safe for common template engines.
	   * This means, DOMPurify removes data attributes, mustaches and ERB
	   */
	  let SAFE_FOR_TEMPLATES = false;
	  /* Output should be safe even for XML used within HTML and alike.
	   * This means, DOMPurify removes comments when containing risky content.
	   */
	  let SAFE_FOR_XML = true;
	  /* Decide if document with <html>... should be returned */
	  let WHOLE_DOCUMENT = false;
	  /* Track whether config is already set on this instance of DOMPurify. */
	  let SET_CONFIG = false;
	  /* Decide if all elements (e.g. style, script) must be children of
	   * document.body. By default, browsers might move them to document.head */
	  let FORCE_BODY = false;
	  /* Decide if a DOM `HTMLBodyElement` should be returned, instead of a html
	   * string (or a TrustedHTML object if Trusted Types are supported).
	   * If `WHOLE_DOCUMENT` is enabled a `HTMLHtmlElement` will be returned instead
	   */
	  let RETURN_DOM = false;
	  /* Decide if a DOM `DocumentFragment` should be returned, instead of a html
	   * string  (or a TrustedHTML object if Trusted Types are supported) */
	  let RETURN_DOM_FRAGMENT = false;
	  /* Try to return a Trusted Type object instead of a string, return a string in
	   * case Trusted Types are not supported  */
	  let RETURN_TRUSTED_TYPE = false;
	  /* Output should be free from DOM clobbering attacks?
	   * This sanitizes markups named with colliding, clobberable built-in DOM APIs.
	   */
	  let SANITIZE_DOM = true;
	  /* Achieve full DOM Clobbering protection by isolating the namespace of named
	   * properties and JS variables, mitigating attacks that abuse the HTML/DOM spec rules.
	   *
	   * HTML/DOM spec rules that enable DOM Clobbering:
	   *   - Named Access on Window (Â§7.3.3)
	   *   - DOM Tree Accessors (Â§3.1.5)
	   *   - Form Element Parent-Child Relations (Â§4.10.3)
	   *   - Iframe srcdoc / Nested WindowProxies (Â§4.8.5)
	   *   - HTMLCollection (Â§4.2.10.2)
	   *
	   * Namespace isolation is implemented by prefixing `id` and `name` attributes
	   * with a constant string, i.e., `user-content-`
	   */
	  let SANITIZE_NAMED_PROPS = false;
	  const SANITIZE_NAMED_PROPS_PREFIX = 'user-content-';
	  /* Keep element content when removing element? */
	  let KEEP_CONTENT = true;
	  /* If a `Node` is passed to sanitize(), then performs sanitization in-place instead
	   * of importing it into a new Document and returning a sanitized copy */
	  let IN_PLACE = false;
	  /* Allow usage of profiles like html, svg and mathMl */
	  let USE_PROFILES = {};
	  /* Tags to ignore content of when KEEP_CONTENT is true */
	  let FORBID_CONTENTS = null;
	  const DEFAULT_FORBID_CONTENTS = addToSet({}, ['annotation-xml', 'audio', 'colgroup', 'desc', 'foreignobject', 'head', 'iframe', 'math', 'mi', 'mn', 'mo', 'ms', 'mtext', 'noembed', 'noframes', 'noscript', 'plaintext', 'script', 'style', 'svg', 'template', 'thead', 'title', 'video', 'xmp']);
	  /* Tags that are safe for data: URIs */
	  let DATA_URI_TAGS = null;
	  const DEFAULT_DATA_URI_TAGS = addToSet({}, ['audio', 'video', 'img', 'source', 'image', 'track']);
	  /* Attributes safe for values like "javascript:" */
	  let URI_SAFE_ATTRIBUTES = null;
	  const DEFAULT_URI_SAFE_ATTRIBUTES = addToSet({}, ['alt', 'class', 'for', 'id', 'label', 'name', 'pattern', 'placeholder', 'role', 'summary', 'title', 'value', 'style', 'xmlns']);
	  const MATHML_NAMESPACE = 'http://www.w3.org/1998/Math/MathML';
	  const SVG_NAMESPACE = 'http://www.w3.org/2000/svg';
	  const HTML_NAMESPACE = 'http://www.w3.org/1999/xhtml';
	  /* Document namespace */
	  let NAMESPACE = HTML_NAMESPACE;
	  let IS_EMPTY_INPUT = false;
	  /* Allowed XHTML+XML namespaces */
	  let ALLOWED_NAMESPACES = null;
	  const DEFAULT_ALLOWED_NAMESPACES = addToSet({}, [MATHML_NAMESPACE, SVG_NAMESPACE, HTML_NAMESPACE], stringToString);
	  let MATHML_TEXT_INTEGRATION_POINTS = addToSet({}, ['mi', 'mo', 'mn', 'ms', 'mtext']);
	  let HTML_INTEGRATION_POINTS = addToSet({}, ['annotation-xml']);
	  // Certain elements are allowed in both SVG and HTML
	  // namespace. We need to specify them explicitly
	  // so that they don't get erroneously deleted from
	  // HTML namespace.
	  const COMMON_SVG_AND_HTML_ELEMENTS = addToSet({}, ['title', 'style', 'font', 'a', 'script']);
	  /* Parsing of strict XHTML documents */
	  let PARSER_MEDIA_TYPE = null;
	  const SUPPORTED_PARSER_MEDIA_TYPES = ['application/xhtml+xml', 'text/html'];
	  const DEFAULT_PARSER_MEDIA_TYPE = 'text/html';
	  let transformCaseFunc = null;
	  /* Keep a reference to config to pass to hooks */
	  let CONFIG = null;
	  /* Ideally, do not touch anything below this line */
	  /* ______________________________________________ */
	  const formElement = document.createElement('form');
	  const isRegexOrFunction = function isRegexOrFunction(testValue) {
		return testValue instanceof RegExp || testValue instanceof Function;
	  };
	  /**
	   * _parseConfig
	   *
	   * @param cfg optional config literal
	   */
	  // eslint-disable-next-line complexity
	  const _parseConfig = function _parseConfig() {
		let cfg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
		if (CONFIG && CONFIG === cfg) {
		  return;
		}
		/* Shield configuration object from tampering */
		if (!cfg || typeof cfg !== 'object') {
		  cfg = {};
		}
		/* Shield configuration object from prototype pollution */
		cfg = clone(cfg);
		PARSER_MEDIA_TYPE =
		// eslint-disable-next-line unicorn/prefer-includes
		SUPPORTED_PARSER_MEDIA_TYPES.indexOf(cfg.PARSER_MEDIA_TYPE) === -1 ? DEFAULT_PARSER_MEDIA_TYPE : cfg.PARSER_MEDIA_TYPE;
		// HTML tags and attributes are not case-sensitive, converting to lowercase. Keeping XHTML as is.
		transformCaseFunc = PARSER_MEDIA_TYPE === 'application/xhtml+xml' ? stringToString : stringToLowerCase;
		/* Set configuration parameters */
		ALLOWED_TAGS = objectHasOwnProperty(cfg, 'ALLOWED_TAGS') ? addToSet({}, cfg.ALLOWED_TAGS, transformCaseFunc) : DEFAULT_ALLOWED_TAGS;
		ALLOWED_ATTR = objectHasOwnProperty(cfg, 'ALLOWED_ATTR') ? addToSet({}, cfg.ALLOWED_ATTR, transformCaseFunc) : DEFAULT_ALLOWED_ATTR;
		ALLOWED_NAMESPACES = objectHasOwnProperty(cfg, 'ALLOWED_NAMESPACES') ? addToSet({}, cfg.ALLOWED_NAMESPACES, stringToString) : DEFAULT_ALLOWED_NAMESPACES;
		URI_SAFE_ATTRIBUTES = objectHasOwnProperty(cfg, 'ADD_URI_SAFE_ATTR') ? addToSet(clone(DEFAULT_URI_SAFE_ATTRIBUTES), cfg.ADD_URI_SAFE_ATTR, transformCaseFunc) : DEFAULT_URI_SAFE_ATTRIBUTES;
		DATA_URI_TAGS = objectHasOwnProperty(cfg, 'ADD_DATA_URI_TAGS') ? addToSet(clone(DEFAULT_DATA_URI_TAGS), cfg.ADD_DATA_URI_TAGS, transformCaseFunc) : DEFAULT_DATA_URI_TAGS;
		FORBID_CONTENTS = objectHasOwnProperty(cfg, 'FORBID_CONTENTS') ? addToSet({}, cfg.FORBID_CONTENTS, transformCaseFunc) : DEFAULT_FORBID_CONTENTS;
		FORBID_TAGS = objectHasOwnProperty(cfg, 'FORBID_TAGS') ? addToSet({}, cfg.FORBID_TAGS, transformCaseFunc) : clone({});
		FORBID_ATTR = objectHasOwnProperty(cfg, 'FORBID_ATTR') ? addToSet({}, cfg.FORBID_ATTR, transformCaseFunc) : clone({});
		USE_PROFILES = objectHasOwnProperty(cfg, 'USE_PROFILES') ? cfg.USE_PROFILES : false;
		ALLOW_ARIA_ATTR = cfg.ALLOW_ARIA_ATTR !== false; // Default true
		ALLOW_DATA_ATTR = cfg.ALLOW_DATA_ATTR !== false; // Default true
		ALLOW_UNKNOWN_PROTOCOLS = cfg.ALLOW_UNKNOWN_PROTOCOLS || false; // Default false
		ALLOW_SELF_CLOSE_IN_ATTR = cfg.ALLOW_SELF_CLOSE_IN_ATTR !== false; // Default true
		SAFE_FOR_TEMPLATES = cfg.SAFE_FOR_TEMPLATES || false; // Default false
		SAFE_FOR_XML = cfg.SAFE_FOR_XML !== false; // Default true
		WHOLE_DOCUMENT = cfg.WHOLE_DOCUMENT || false; // Default false
		RETURN_DOM = cfg.RETURN_DOM || false; // Default false
		RETURN_DOM_FRAGMENT = cfg.RETURN_DOM_FRAGMENT || false; // Default false
		RETURN_TRUSTED_TYPE = cfg.RETURN_TRUSTED_TYPE || false; // Default false
		FORCE_BODY = cfg.FORCE_BODY || false; // Default false
		SANITIZE_DOM = cfg.SANITIZE_DOM !== false; // Default true
		SANITIZE_NAMED_PROPS = cfg.SANITIZE_NAMED_PROPS || false; // Default false
		KEEP_CONTENT = cfg.KEEP_CONTENT !== false; // Default true
		IN_PLACE = cfg.IN_PLACE || false; // Default false
		IS_ALLOWED_URI$1 = cfg.ALLOWED_URI_REGEXP || IS_ALLOWED_URI;
		NAMESPACE = cfg.NAMESPACE || HTML_NAMESPACE;
		MATHML_TEXT_INTEGRATION_POINTS = cfg.MATHML_TEXT_INTEGRATION_POINTS || MATHML_TEXT_INTEGRATION_POINTS;
		HTML_INTEGRATION_POINTS = cfg.HTML_INTEGRATION_POINTS || HTML_INTEGRATION_POINTS;
		CUSTOM_ELEMENT_HANDLING = cfg.CUSTOM_ELEMENT_HANDLING || {};
		if (cfg.CUSTOM_ELEMENT_HANDLING && isRegexOrFunction(cfg.CUSTOM_ELEMENT_HANDLING.tagNameCheck)) {
		  CUSTOM_ELEMENT_HANDLING.tagNameCheck = cfg.CUSTOM_ELEMENT_HANDLING.tagNameCheck;
		}
		if (cfg.CUSTOM_ELEMENT_HANDLING && isRegexOrFunction(cfg.CUSTOM_ELEMENT_HANDLING.attributeNameCheck)) {
		  CUSTOM_ELEMENT_HANDLING.attributeNameCheck = cfg.CUSTOM_ELEMENT_HANDLING.attributeNameCheck;
		}
		if (cfg.CUSTOM_ELEMENT_HANDLING && typeof cfg.CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements === 'boolean') {
		  CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements = cfg.CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements;
		}
		if (SAFE_FOR_TEMPLATES) {
		  ALLOW_DATA_ATTR = false;
		}
		if (RETURN_DOM_FRAGMENT) {
		  RETURN_DOM = true;
		}
		/* Parse profile info */
		if (USE_PROFILES) {
		  ALLOWED_TAGS = addToSet({}, text);
		  ALLOWED_ATTR = [];
		  if (USE_PROFILES.html === true) {
			addToSet(ALLOWED_TAGS, html$1);
			addToSet(ALLOWED_ATTR, html);
		  }
		  if (USE_PROFILES.svg === true) {
			addToSet(ALLOWED_TAGS, svg$1);
			addToSet(ALLOWED_ATTR, svg);
			addToSet(ALLOWED_ATTR, xml);
		  }
		  if (USE_PROFILES.svgFilters === true) {
			addToSet(ALLOWED_TAGS, svgFilters);
			addToSet(ALLOWED_ATTR, svg);
			addToSet(ALLOWED_ATTR, xml);
		  }
		  if (USE_PROFILES.mathMl === true) {
			addToSet(ALLOWED_TAGS, mathMl$1);
			addToSet(ALLOWED_ATTR, mathMl);
			addToSet(ALLOWED_ATTR, xml);
		  }
		}
		/* Merge configuration parameters */
		if (cfg.ADD_TAGS) {
		  if (typeof cfg.ADD_TAGS === 'function') {
			EXTRA_ELEMENT_HANDLING.tagCheck = cfg.ADD_TAGS;
		  } else {
			if (ALLOWED_TAGS === DEFAULT_ALLOWED_TAGS) {
			  ALLOWED_TAGS = clone(ALLOWED_TAGS);
			}
			addToSet(ALLOWED_TAGS, cfg.ADD_TAGS, transformCaseFunc);
		  }
		}
		if (cfg.ADD_ATTR) {
		  if (typeof cfg.ADD_ATTR === 'function') {
			EXTRA_ELEMENT_HANDLING.attributeCheck = cfg.ADD_ATTR;
		  } else {
			if (ALLOWED_ATTR === DEFAULT_ALLOWED_ATTR) {
			  ALLOWED_ATTR = clone(ALLOWED_ATTR);
			}
			addToSet(ALLOWED_ATTR, cfg.ADD_ATTR, transformCaseFunc);
		  }
		}
		if (cfg.ADD_URI_SAFE_ATTR) {
		  addToSet(URI_SAFE_ATTRIBUTES, cfg.ADD_URI_SAFE_ATTR, transformCaseFunc);
		}
		if (cfg.FORBID_CONTENTS) {
		  if (FORBID_CONTENTS === DEFAULT_FORBID_CONTENTS) {
			FORBID_CONTENTS = clone(FORBID_CONTENTS);
		  }
		  addToSet(FORBID_CONTENTS, cfg.FORBID_CONTENTS, transformCaseFunc);
		}
		if (cfg.ADD_FORBID_CONTENTS) {
		  if (FORBID_CONTENTS === DEFAULT_FORBID_CONTENTS) {
			FORBID_CONTENTS = clone(FORBID_CONTENTS);
		  }
		  addToSet(FORBID_CONTENTS, cfg.ADD_FORBID_CONTENTS, transformCaseFunc);
		}
		/* Add #text in case KEEP_CONTENT is set to true */
		if (KEEP_CONTENT) {
		  ALLOWED_TAGS['#text'] = true;
		}
		/* Add html, head and body to ALLOWED_TAGS in case WHOLE_DOCUMENT is true */
		if (WHOLE_DOCUMENT) {
		  addToSet(ALLOWED_TAGS, ['html', 'head', 'body']);
		}
		/* Add tbody to ALLOWED_TAGS in case tables are permitted, see #286, #365 */
		if (ALLOWED_TAGS.table) {
		  addToSet(ALLOWED_TAGS, ['tbody']);
		  delete FORBID_TAGS.tbody;
		}
		if (cfg.TRUSTED_TYPES_POLICY) {
		  if (typeof cfg.TRUSTED_TYPES_POLICY.createHTML !== 'function') {
			throw typeErrorCreate('TRUSTED_TYPES_POLICY configuration option must provide a "createHTML" hook.');
		  }
		  if (typeof cfg.TRUSTED_TYPES_POLICY.createScriptURL !== 'function') {
			throw typeErrorCreate('TRUSTED_TYPES_POLICY configuration option must provide a "createScriptURL" hook.');
		  }
		  // Overwrite existing TrustedTypes policy.
		  trustedTypesPolicy = cfg.TRUSTED_TYPES_POLICY;
		  // Sign local variables required by `sanitize`.
		  emptyHTML = trustedTypesPolicy.createHTML('');
		} else {
		  // Uninitialized policy, attempt to initialize the internal dompurify policy.
		  if (trustedTypesPolicy === undefined) {
			trustedTypesPolicy = _createTrustedTypesPolicy(trustedTypes, currentScript);
		  }
		  // If creating the internal policy succeeded sign internal variables.
		  if (trustedTypesPolicy !== null && typeof emptyHTML === 'string') {
			emptyHTML = trustedTypesPolicy.createHTML('');
		  }
		}
		// Prevent further manipulation of configuration.
		// Not available in IE8, Safari 5, etc.
		if (freeze) {
		  freeze(cfg);
		}
		CONFIG = cfg;
	  };
	  /* Keep track of all possible SVG and MathML tags
	   * so that we can perform the namespace checks
	   * correctly. */
	  const ALL_SVG_TAGS = addToSet({}, [...svg$1, ...svgFilters, ...svgDisallowed]);
	  const ALL_MATHML_TAGS = addToSet({}, [...mathMl$1, ...mathMlDisallowed]);
	  /**
	   * @param element a DOM element whose namespace is being checked
	   * @returns Return false if the element has a
	   *  namespace that a spec-compliant parser would never
	   *  return. Return true otherwise.
	   */
	  const _checkValidNamespace = function _checkValidNamespace(element) {
		let parent = getParentNode(element);
		// In JSDOM, if we're inside shadow DOM, then parentNode
		// can be null. We just simulate parent in this case.
		if (!parent || !parent.tagName) {
		  parent = {
			namespaceURI: NAMESPACE,
			tagName: 'template'
		  };
		}
		const tagName = stringToLowerCase(element.tagName);
		const parentTagName = stringToLowerCase(parent.tagName);
		if (!ALLOWED_NAMESPACES[element.namespaceURI]) {
		  return false;
		}
		if (element.namespaceURI === SVG_NAMESPACE) {
		  // The only way to switch from HTML namespace to SVG
		  // is via <svg>. If it happens via any other tag, then
		  // it should be killed.
		  if (parent.namespaceURI === HTML_NAMESPACE) {
			return tagName === 'svg';
		  }
		  // The only way to switch from MathML to SVG is via`
		  // svg if parent is either <annotation-xml> or MathML
		  // text integration points.
		  if (parent.namespaceURI === MATHML_NAMESPACE) {
			return tagName === 'svg' && (parentTagName === 'annotation-xml' || MATHML_TEXT_INTEGRATION_POINTS[parentTagName]);
		  }
		  // We only allow elements that are defined in SVG
		  // spec. All others are disallowed in SVG namespace.
		  return Boolean(ALL_SVG_TAGS[tagName]);
		}
		if (element.namespaceURI === MATHML_NAMESPACE) {
		  // The only way to switch from HTML namespace to MathML
		  // is via <math>. If it happens via any other tag, then
		  // it should be killed.
		  if (parent.namespaceURI === HTML_NAMESPACE) {
			return tagName === 'math';
		  }
		  // The only way to switch from SVG to MathML is via
		  // <math> and HTML integration points
		  if (parent.namespaceURI === SVG_NAMESPACE) {
			return tagName === 'math' && HTML_INTEGRATION_POINTS[parentTagName];
		  }
		  // We only allow elements that are defined in MathML
		  // spec. All others are disallowed in MathML namespace.
		  return Boolean(ALL_MATHML_TAGS[tagName]);
		}
		if (element.namespaceURI === HTML_NAMESPACE) {
		  // The only way to switch from SVG to HTML is via
		  // HTML integration points, and from MathML to HTML
		  // is via MathML text integration points
		  if (parent.namespaceURI === SVG_NAMESPACE && !HTML_INTEGRATION_POINTS[parentTagName]) {
			return false;
		  }
		  if (parent.namespaceURI === MATHML_NAMESPACE && !MATHML_TEXT_INTEGRATION_POINTS[parentTagName]) {
			return false;
		  }
		  // We disallow tags that are specific for MathML
		  // or SVG and should never appear in HTML namespace
		  return !ALL_MATHML_TAGS[tagName] && (COMMON_SVG_AND_HTML_ELEMENTS[tagName] || !ALL_SVG_TAGS[tagName]);
		}
		// For XHTML and XML documents that support custom namespaces
		if (PARSER_MEDIA_TYPE === 'application/xhtml+xml' && ALLOWED_NAMESPACES[element.namespaceURI]) {
		  return true;
		}
		// The code should never reach this place (this means
		// that the element somehow got namespace that is not
		// HTML, SVG, MathML or allowed via ALLOWED_NAMESPACES).
		// Return false just in case.
		return false;
	  };
	  /**
	   * _forceRemove
	   *
	   * @param node a DOM node
	   */
	  const _forceRemove = function _forceRemove(node) {
		arrayPush(DOMPurify.removed, {
		  element: node
		});
		try {
		  // eslint-disable-next-line unicorn/prefer-dom-node-remove
		  getParentNode(node).removeChild(node);
		} catch (_) {
		  remove(node);
		}
	  };
	  /**
	   * _removeAttribute
	   *
	   * @param name an Attribute name
	   * @param element a DOM node
	   */
	  const _removeAttribute = function _removeAttribute(name, element) {
		try {
		  arrayPush(DOMPurify.removed, {
			attribute: element.getAttributeNode(name),
			from: element
		  });
		} catch (_) {
		  arrayPush(DOMPurify.removed, {
			attribute: null,
			from: element
		  });
		}
		element.removeAttribute(name);
		// We void attribute values for unremovable "is" attributes
		if (name === 'is') {
		  if (RETURN_DOM || RETURN_DOM_FRAGMENT) {
			try {
			  _forceRemove(element);
			} catch (_) {}
		  } else {
			try {
			  element.setAttribute(name, '');
			} catch (_) {}
		  }
		}
	  };
	  /**
	   * _initDocument
	   *
	   * @param dirty - a string of dirty markup
	   * @return a DOM, filled with the dirty markup
	   */
	  const _initDocument = function _initDocument(dirty) {
		/* Create a HTML document */
		let doc = null;
		let leadingWhitespace = null;
		if (FORCE_BODY) {
		  dirty = '<remove></remove>' + dirty;
		} else {
		  /* If FORCE_BODY isn't used, leading whitespace needs to be preserved manually */
		  const matches = stringMatch(dirty, /^[\r\n\t ]+/);
		  leadingWhitespace = matches && matches[0];
		}
		if (PARSER_MEDIA_TYPE === 'application/xhtml+xml' && NAMESPACE === HTML_NAMESPACE) {
		  // Root of XHTML doc must contain xmlns declaration (see https://www.w3.org/TR/xhtml1/normative.html#strict)
		  dirty = '<html xmlns="http://www.w3.org/1999/xhtml"><head></head><body>' + dirty + '</body></html>';
		}
		const dirtyPayload = trustedTypesPolicy ? trustedTypesPolicy.createHTML(dirty) : dirty;
		/*
		 * Use the DOMParser API by default, fallback later if needs be
		 * DOMParser not work for svg when has multiple root element.
		 */
		if (NAMESPACE === HTML_NAMESPACE) {
		  try {
			doc = new DOMParser().parseFromString(dirtyPayload, PARSER_MEDIA_TYPE);
		  } catch (_) {}
		}
		/* Use createHTMLDocument in case DOMParser is not available */
		if (!doc || !doc.documentElement) {
		  doc = implementation.createDocument(NAMESPACE, 'template', null);
		  try {
			doc.documentElement.innerHTML = IS_EMPTY_INPUT ? emptyHTML : dirtyPayload;
		  } catch (_) {
			// Syntax error if dirtyPayload is invalid xml
		  }
		}
		const body = doc.body || doc.documentElement;
		if (dirty && leadingWhitespace) {
		  body.insertBefore(document.createTextNode(leadingWhitespace), body.childNodes[0] || null);
		}
		/* Work on whole document or just its body */
		if (NAMESPACE === HTML_NAMESPACE) {
		  return getElementsByTagName.call(doc, WHOLE_DOCUMENT ? 'html' : 'body')[0];
		}
		return WHOLE_DOCUMENT ? doc.documentElement : body;
	  };
	  /**
	   * Creates a NodeIterator object that you can use to traverse filtered lists of nodes or elements in a document.
	   *
	   * @param root The root element or node to start traversing on.
	   * @return The created NodeIterator
	   */
	  const _createNodeIterator = function _createNodeIterator(root) {
		return createNodeIterator.call(root.ownerDocument || root, root,
		// eslint-disable-next-line no-bitwise
		NodeFilter.SHOW_ELEMENT | NodeFilter.SHOW_COMMENT | NodeFilter.SHOW_TEXT | NodeFilter.SHOW_PROCESSING_INSTRUCTION | NodeFilter.SHOW_CDATA_SECTION, null);
	  };
	  /**
	   * _isClobbered
	   *
	   * @param element element to check for clobbering attacks
	   * @return true if clobbered, false if safe
	   */
	  const _isClobbered = function _isClobbered(element) {
		return element instanceof HTMLFormElement && (typeof element.nodeName !== 'string' || typeof element.textContent !== 'string' || typeof element.removeChild !== 'function' || !(element.attributes instanceof NamedNodeMap) || typeof element.removeAttribute !== 'function' || typeof element.setAttribute !== 'function' || typeof element.namespaceURI !== 'string' || typeof element.insertBefore !== 'function' || typeof element.hasChildNodes !== 'function');
	  };
	  /**
	   * Checks whether the given object is a DOM node.
	   *
	   * @param value object to check whether it's a DOM node
	   * @return true is object is a DOM node
	   */
	  const _isNode = function _isNode(value) {
		return typeof Node === 'function' && value instanceof Node;
	  };
	  function _executeHooks(hooks, currentNode, data) {
		arrayForEach(hooks, hook => {
		  hook.call(DOMPurify, currentNode, data, CONFIG);
		});
	  }
	  /**
	   * _sanitizeElements
	   *
	   * @protect nodeName
	   * @protect textContent
	   * @protect removeChild
	   * @param currentNode to check for permission to exist
	   * @return true if node was killed, false if left alive
	   */
	  const _sanitizeElements = function _sanitizeElements(currentNode) {
		let content = null;
		/* Execute a hook if present */
		_executeHooks(hooks.beforeSanitizeElements, currentNode, null);
		/* Check if element is clobbered or can clobber */
		if (_isClobbered(currentNode)) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Now let's check the element's type and name */
		const tagName = transformCaseFunc(currentNode.nodeName);
		/* Execute a hook if present */
		_executeHooks(hooks.uponSanitizeElement, currentNode, {
		  tagName,
		  allowedTags: ALLOWED_TAGS
		});
		/* Detect mXSS attempts abusing namespace confusion */
		if (SAFE_FOR_XML && currentNode.hasChildNodes() && !_isNode(currentNode.firstElementChild) && regExpTest(/<[/\w!]/g, currentNode.innerHTML) && regExpTest(/<[/\w!]/g, currentNode.textContent)) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Remove any occurrence of processing instructions */
		if (currentNode.nodeType === NODE_TYPE.progressingInstruction) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Remove any kind of possibly harmful comments */
		if (SAFE_FOR_XML && currentNode.nodeType === NODE_TYPE.comment && regExpTest(/<[/\w]/g, currentNode.data)) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Remove element if anything forbids its presence */
		if (!(EXTRA_ELEMENT_HANDLING.tagCheck instanceof Function && EXTRA_ELEMENT_HANDLING.tagCheck(tagName)) && (!ALLOWED_TAGS[tagName] || FORBID_TAGS[tagName])) {
		  /* Check if we have a custom element to handle */
		  if (!FORBID_TAGS[tagName] && _isBasicCustomElement(tagName)) {
			if (CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof RegExp && regExpTest(CUSTOM_ELEMENT_HANDLING.tagNameCheck, tagName)) {
			  return false;
			}
			if (CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof Function && CUSTOM_ELEMENT_HANDLING.tagNameCheck(tagName)) {
			  return false;
			}
		  }
		  /* Keep content except for bad-listed elements */
		  if (KEEP_CONTENT && !FORBID_CONTENTS[tagName]) {
			const parentNode = getParentNode(currentNode) || currentNode.parentNode;
			const childNodes = getChildNodes(currentNode) || currentNode.childNodes;
			if (childNodes && parentNode) {
			  const childCount = childNodes.length;
			  for (let i = childCount - 1; i >= 0; --i) {
				const childClone = cloneNode(childNodes[i], true);
				childClone.__removalCount = (currentNode.__removalCount || 0) + 1;
				parentNode.insertBefore(childClone, getNextSibling(currentNode));
			  }
			}
		  }
		  _forceRemove(currentNode);
		  return true;
		}
		/* Check whether element has a valid namespace */
		if (currentNode instanceof Element && !_checkValidNamespace(currentNode)) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Make sure that older browsers don't get fallback-tag mXSS */
		if ((tagName === 'noscript' || tagName === 'noembed' || tagName === 'noframes') && regExpTest(/<\/no(script|embed|frames)/i, currentNode.innerHTML)) {
		  _forceRemove(currentNode);
		  return true;
		}
		/* Sanitize element content to be template-safe */
		if (SAFE_FOR_TEMPLATES && currentNode.nodeType === NODE_TYPE.text) {
		  /* Get the element's text content */
		  content = currentNode.textContent;
		  arrayForEach([MUSTACHE_EXPR, ERB_EXPR, TMPLIT_EXPR], expr => {
			content = stringReplace(content, expr, ' ');
		  });
		  if (currentNode.textContent !== content) {
			arrayPush(DOMPurify.removed, {
			  element: currentNode.cloneNode()
			});
			currentNode.textContent = content;
		  }
		}
		/* Execute a hook if present */
		_executeHooks(hooks.afterSanitizeElements, currentNode, null);
		return false;
	  };
	  /**
	   * _isValidAttribute
	   *
	   * @param lcTag Lowercase tag name of containing element.
	   * @param lcName Lowercase attribute name.
	   * @param value Attribute value.
	   * @return Returns true if `value` is valid, otherwise false.
	   */
	  // eslint-disable-next-line complexity
	  const _isValidAttribute = function _isValidAttribute(lcTag, lcName, value) {
		/* Make sure attribute cannot clobber */
		if (SANITIZE_DOM && (lcName === 'id' || lcName === 'name') && (value in document || value in formElement)) {
		  return false;
		}
		/* Allow valid data-* attributes: At least one character after "-"
			(https://html.spec.whatwg.org/multipage/dom.html#embedding-custom-non-visible-data-with-the-data-*-attributes)
			XML-compatible (https://html.spec.whatwg.org/multipage/infrastructure.html#xml-compatible and http://www.w3.org/TR/xml/#d0e804)
			We don't need to check the value; it's always URI safe. */
		if (ALLOW_DATA_ATTR && !FORBID_ATTR[lcName] && regExpTest(DATA_ATTR, lcName)) ; else if (ALLOW_ARIA_ATTR && regExpTest(ARIA_ATTR, lcName)) ; else if (EXTRA_ELEMENT_HANDLING.attributeCheck instanceof Function && EXTRA_ELEMENT_HANDLING.attributeCheck(lcName, lcTag)) ; else if (!ALLOWED_ATTR[lcName] || FORBID_ATTR[lcName]) {
		  if (
		  // First condition does a very basic check if a) it's basically a valid custom element tagname AND
		  // b) if the tagName passes whatever the user has configured for CUSTOM_ELEMENT_HANDLING.tagNameCheck
		  // and c) if the attribute name passes whatever the user has configured for CUSTOM_ELEMENT_HANDLING.attributeNameCheck
		  _isBasicCustomElement(lcTag) && (CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof RegExp && regExpTest(CUSTOM_ELEMENT_HANDLING.tagNameCheck, lcTag) || CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof Function && CUSTOM_ELEMENT_HANDLING.tagNameCheck(lcTag)) && (CUSTOM_ELEMENT_HANDLING.attributeNameCheck instanceof RegExp && regExpTest(CUSTOM_ELEMENT_HANDLING.attributeNameCheck, lcName) || CUSTOM_ELEMENT_HANDLING.attributeNameCheck instanceof Function && CUSTOM_ELEMENT_HANDLING.attributeNameCheck(lcName, lcTag)) ||
		  // Alternative, second condition checks if it's an `is`-attribute, AND
		  // the value passes whatever the user has configured for CUSTOM_ELEMENT_HANDLING.tagNameCheck
		  lcName === 'is' && CUSTOM_ELEMENT_HANDLING.allowCustomizedBuiltInElements && (CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof RegExp && regExpTest(CUSTOM_ELEMENT_HANDLING.tagNameCheck, value) || CUSTOM_ELEMENT_HANDLING.tagNameCheck instanceof Function && CUSTOM_ELEMENT_HANDLING.tagNameCheck(value))) ; else {
			return false;
		  }
		  /* Check value is safe. First, is attr inert? If so, is safe */
		} else if (URI_SAFE_ATTRIBUTES[lcName]) ; else if (regExpTest(IS_ALLOWED_URI$1, stringReplace(value, ATTR_WHITESPACE, ''))) ; else if ((lcName === 'src' || lcName === 'xlink:href' || lcName === 'href') && lcTag !== 'script' && stringIndexOf(value, 'data:') === 0 && DATA_URI_TAGS[lcTag]) ; else if (ALLOW_UNKNOWN_PROTOCOLS && !regExpTest(IS_SCRIPT_OR_DATA, stringReplace(value, ATTR_WHITESPACE, ''))) ; else if (value) {
		  return false;
		} else ;
		return true;
	  };
	  /**
	   * _isBasicCustomElement
	   * checks if at least one dash is included in tagName, and it's not the first char
	   * for more sophisticated checking see https://github.com/sindresorhus/validate-element-name
	   *
	   * @param tagName name of the tag of the node to sanitize
	   * @returns Returns true if the tag name meets the basic criteria for a custom element, otherwise false.
	   */
	  const _isBasicCustomElement = function _isBasicCustomElement(tagName) {
		return tagName !== 'annotation-xml' && stringMatch(tagName, CUSTOM_ELEMENT);
	  };
	  /**
	   * _sanitizeAttributes
	   *
	   * @protect attributes
	   * @protect nodeName
	   * @protect removeAttribute
	   * @protect setAttribute
	   *
	   * @param currentNode to sanitize
	   */
	  const _sanitizeAttributes = function _sanitizeAttributes(currentNode) {
		/* Execute a hook if present */
		_executeHooks(hooks.beforeSanitizeAttributes, currentNode, null);
		const {
		  attributes
		} = currentNode;
		/* Check if we have attributes; if not we might have a text node */
		if (!attributes || _isClobbered(currentNode)) {
		  return;
		}
		const hookEvent = {
		  attrName: '',
		  attrValue: '',
		  keepAttr: true,
		  allowedAttributes: ALLOWED_ATTR,
		  forceKeepAttr: undefined
		};
		let l = attributes.length;
		/* Go backwards over all attributes; safely remove bad ones */
		while (l--) {
		  const attr = attributes[l];
		  const {
			name,
			namespaceURI,
			value: attrValue
		  } = attr;
		  const lcName = transformCaseFunc(name);
		  const initValue = attrValue;
		  let value = name === 'value' ? initValue : stringTrim(initValue);
		  /* Execute a hook if present */
		  hookEvent.attrName = lcName;
		  hookEvent.attrValue = value;
		  hookEvent.keepAttr = true;
		  hookEvent.forceKeepAttr = undefined; // Allows developers to see this is a property they can set
		  _executeHooks(hooks.uponSanitizeAttribute, currentNode, hookEvent);
		  value = hookEvent.attrValue;
		  /* Full DOM Clobbering protection via namespace isolation,
		   * Prefix id and name attributes with `user-content-`
		   */
		  if (SANITIZE_NAMED_PROPS && (lcName === 'id' || lcName === 'name')) {
			// Remove the attribute with this value
			_removeAttribute(name, currentNode);
			// Prefix the value and later re-create the attribute with the sanitized value
			value = SANITIZE_NAMED_PROPS_PREFIX + value;
		  }
		  /* Work around a security issue with comments inside attributes */
		  if (SAFE_FOR_XML && regExpTest(/((--!?|])>)|<\/(style|title|textarea)/i, value)) {
			_removeAttribute(name, currentNode);
			continue;
		  }
		  /* Make sure we cannot easily use animated hrefs, even if animations are allowed */
		  if (lcName === 'attributename' && stringMatch(value, 'href')) {
			_removeAttribute(name, currentNode);
			continue;
		  }
		  /* Did the hooks approve of the attribute? */
		  if (hookEvent.forceKeepAttr) {
			continue;
		  }
		  /* Did the hooks approve of the attribute? */
		  if (!hookEvent.keepAttr) {
			_removeAttribute(name, currentNode);
			continue;
		  }
		  /* Work around a security issue in jQuery 3.0 */
		  if (!ALLOW_SELF_CLOSE_IN_ATTR && regExpTest(/\/>/i, value)) {
			_removeAttribute(name, currentNode);
			continue;
		  }
		  /* Sanitize attribute content to be template-safe */
		  if (SAFE_FOR_TEMPLATES) {
			arrayForEach([MUSTACHE_EXPR, ERB_EXPR, TMPLIT_EXPR], expr => {
			  value = stringReplace(value, expr, ' ');
			});
		  }
		  /* Is `value` valid for this attribute? */
		  const lcTag = transformCaseFunc(currentNode.nodeName);
		  if (!_isValidAttribute(lcTag, lcName, value)) {
			_removeAttribute(name, currentNode);
			continue;
		  }
		  /* Handle attributes that require Trusted Types */
		  if (trustedTypesPolicy && typeof trustedTypes === 'object' && typeof trustedTypes.getAttributeType === 'function') {
			if (namespaceURI) ; else {
			  switch (trustedTypes.getAttributeType(lcTag, lcName)) {
				case 'TrustedHTML':
				  {
					value = trustedTypesPolicy.createHTML(value);
					break;
				  }
				case 'TrustedScriptURL':
				  {
					value = trustedTypesPolicy.createScriptURL(value);
					break;
				  }
			  }
			}
		  }
		  /* Handle invalid data-* attribute set by try-catching it */
		  if (value !== initValue) {
			try {
			  if (namespaceURI) {
				currentNode.setAttributeNS(namespaceURI, name, value);
			  } else {
				/* Fallback to setAttribute() for browser-unrecognized namespaces e.g. "x-schema". */
				currentNode.setAttribute(name, value);
			  }
			  if (_isClobbered(currentNode)) {
				_forceRemove(currentNode);
			  } else {
				arrayPop(DOMPurify.removed);
			  }
			} catch (_) {
			  _removeAttribute(name, currentNode);
			}
		  }
		}
		/* Execute a hook if present */
		_executeHooks(hooks.afterSanitizeAttributes, currentNode, null);
	  };
	  /**
	   * _sanitizeShadowDOM
	   *
	   * @param fragment to iterate over recursively
	   */
	  const _sanitizeShadowDOM = function _sanitizeShadowDOM(fragment) {
		let shadowNode = null;
		const shadowIterator = _createNodeIterator(fragment);
		/* Execute a hook if present */
		_executeHooks(hooks.beforeSanitizeShadowDOM, fragment, null);
		while (shadowNode = shadowIterator.nextNode()) {
		  /* Execute a hook if present */
		  _executeHooks(hooks.uponSanitizeShadowNode, shadowNode, null);
		  /* Sanitize tags and elements */
		  _sanitizeElements(shadowNode);
		  /* Check attributes next */
		  _sanitizeAttributes(shadowNode);
		  /* Deep shadow DOM detected */
		  if (shadowNode.content instanceof DocumentFragment) {
			_sanitizeShadowDOM(shadowNode.content);
		  }
		}
		/* Execute a hook if present */
		_executeHooks(hooks.afterSanitizeShadowDOM, fragment, null);
	  };
	  // eslint-disable-next-line complexity
	  DOMPurify.sanitize = function (dirty) {
		let cfg = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
		let body = null;
		let importedNode = null;
		let currentNode = null;
		let returnNode = null;
		/* Make sure we have a string to sanitize.
		  DO NOT return early, as this will return the wrong type if
		  the user has requested a DOM object rather than a string */
		IS_EMPTY_INPUT = !dirty;
		if (IS_EMPTY_INPUT) {
		  dirty = '<!-->';
		}
		/* Stringify, in case dirty is an object */
		if (typeof dirty !== 'string' && !_isNode(dirty)) {
		  if (typeof dirty.toString === 'function') {
			dirty = dirty.toString();
			if (typeof dirty !== 'string') {
			  throw typeErrorCreate('dirty is not a string, aborting');
			}
		  } else {
			throw typeErrorCreate('toString is not a function');
		  }
		}
		/* Return dirty HTML if DOMPurify cannot run */
		if (!DOMPurify.isSupported) {
		  return dirty;
		}
		/* Assign config vars */
		if (!SET_CONFIG) {
		  _parseConfig(cfg);
		}
		/* Clean up removed elements */
		DOMPurify.removed = [];
		/* Check if dirty is correctly typed for IN_PLACE */
		if (typeof dirty === 'string') {
		  IN_PLACE = false;
		}
		if (IN_PLACE) {
		  /* Do some early pre-sanitization to avoid unsafe root nodes */
		  if (dirty.nodeName) {
			const tagName = transformCaseFunc(dirty.nodeName);
			if (!ALLOWED_TAGS[tagName] || FORBID_TAGS[tagName]) {
			  throw typeErrorCreate('root node is forbidden and cannot be sanitized in-place');
			}
		  }
		} else if (dirty instanceof Node) {
		  /* If dirty is a DOM element, append to an empty document to avoid
			 elements being stripped by the parser */
		  body = _initDocument('<!---->');
		  importedNode = body.ownerDocument.importNode(dirty, true);
		  if (importedNode.nodeType === NODE_TYPE.element && importedNode.nodeName === 'BODY') {
			/* Node is already a body, use as is */
			body = importedNode;
		  } else if (importedNode.nodeName === 'HTML') {
			body = importedNode;
		  } else {
			// eslint-disable-next-line unicorn/prefer-dom-node-append
			body.appendChild(importedNode);
		  }
		} else {
		  /* Exit directly if we have nothing to do */
		  if (!RETURN_DOM && !SAFE_FOR_TEMPLATES && !WHOLE_DOCUMENT &&
		  // eslint-disable-next-line unicorn/prefer-includes
		  dirty.indexOf('<') === -1) {
			return trustedTypesPolicy && RETURN_TRUSTED_TYPE ? trustedTypesPolicy.createHTML(dirty) : dirty;
		  }
		  /* Initialize the document to work on */
		  body = _initDocument(dirty);
		  /* Check we have a DOM node from the data */
		  if (!body) {
			return RETURN_DOM ? null : RETURN_TRUSTED_TYPE ? emptyHTML : '';
		  }
		}
		/* Remove first element node (ours) if FORCE_BODY is set */
		if (body && FORCE_BODY) {
		  _forceRemove(body.firstChild);
		}
		/* Get node iterator */
		const nodeIterator = _createNodeIterator(IN_PLACE ? dirty : body);
		/* Now start iterating over the created document */
		while (currentNode = nodeIterator.nextNode()) {
		  /* Sanitize tags and elements */
		  _sanitizeElements(currentNode);
		  /* Check attributes next */
		  _sanitizeAttributes(currentNode);
		  /* Shadow DOM detected, sanitize it */
		  if (currentNode.content instanceof DocumentFragment) {
			_sanitizeShadowDOM(currentNode.content);
		  }
		}
		/* If we sanitized `dirty` in-place, return it. */
		if (IN_PLACE) {
		  return dirty;
		}
		/* Return sanitized string or DOM */
		if (RETURN_DOM) {
		  if (RETURN_DOM_FRAGMENT) {
			returnNode = createDocumentFragment.call(body.ownerDocument);
			while (body.firstChild) {
			  // eslint-disable-next-line unicorn/prefer-dom-node-append
			  returnNode.appendChild(body.firstChild);
			}
		  } else {
			returnNode = body;
		  }
		  if (ALLOWED_ATTR.shadowroot || ALLOWED_ATTR.shadowrootmode) {
			/*
			  AdoptNode() is not used because internal state is not reset
			  (e.g. the past names map of a HTMLFormElement), this is safe
			  in theory but we would rather not risk another attack vector.
			  The state that is cloned by importNode() is explicitly defined
			  by the specs.
			*/
			returnNode = importNode.call(originalDocument, returnNode, true);
		  }
		  return returnNode;
		}
		let serializedHTML = WHOLE_DOCUMENT ? body.outerHTML : body.innerHTML;
		/* Serialize doctype if allowed */
		if (WHOLE_DOCUMENT && ALLOWED_TAGS['!doctype'] && body.ownerDocument && body.ownerDocument.doctype && body.ownerDocument.doctype.name && regExpTest(DOCTYPE_NAME, body.ownerDocument.doctype.name)) {
		  serializedHTML = '<!DOCTYPE ' + body.ownerDocument.doctype.name + '>\n' + serializedHTML;
		}
		/* Sanitize final string template-safe */
		if (SAFE_FOR_TEMPLATES) {
		  arrayForEach([MUSTACHE_EXPR, ERB_EXPR, TMPLIT_EXPR], expr => {
			serializedHTML = stringReplace(serializedHTML, expr, ' ');
		  });
		}
		return trustedTypesPolicy && RETURN_TRUSTED_TYPE ? trustedTypesPolicy.createHTML(serializedHTML) : serializedHTML;
	  };
	  DOMPurify.setConfig = function () {
		let cfg = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};
		_parseConfig(cfg);
		SET_CONFIG = true;
	  };
	  DOMPurify.clearConfig = function () {
		CONFIG = null;
		SET_CONFIG = false;
	  };
	  DOMPurify.isValidAttribute = function (tag, attr, value) {
		/* Initialize shared config vars if necessary. */
		if (!CONFIG) {
		  _parseConfig({});
		}
		const lcTag = transformCaseFunc(tag);
		const lcName = transformCaseFunc(attr);
		return _isValidAttribute(lcTag, lcName, value);
	  };
	  DOMPurify.addHook = function (entryPoint, hookFunction) {
		if (typeof hookFunction !== 'function') {
		  return;
		}
		arrayPush(hooks[entryPoint], hookFunction);
	  };
	  DOMPurify.removeHook = function (entryPoint, hookFunction) {
		if (hookFunction !== undefined) {
		  const index = arrayLastIndexOf(hooks[entryPoint], hookFunction);
		  return index === -1 ? undefined : arraySplice(hooks[entryPoint], index, 1)[0];
		}
		return arrayPop(hooks[entryPoint]);
	  };
	  DOMPurify.removeHooks = function (entryPoint) {
		hooks[entryPoint] = [];
	  };
	  DOMPurify.removeAllHooks = function () {
		hooks = _createHooksMap();
	  };
	  return DOMPurify;
	}
	var purify = createDOMPurify();
  
	return purify;
  
  }));
  //******************************************* 
  window.gnav20 = window.gnav20 || {};
  
  if(/MY_VZW_APP/.test(navigator.userAgent)){
	  // remove header and footer divs in app
	  gnav20.navDivs = document.querySelectorAll("#vz-gh20, #vz-gf20");
	  for(var i = 0; i < gnav20.navDivs.length; ++i) {
		gnav20.navDivs[i].remove();
	  }
	  if(!/\/digital\/nsa\/secure\/ui\/vzup\//.test(location.href) && !/\/sales\/digital\//.test(location.href) && !/\/sales\/next\//.test(location.href)){// add title and back button in app
		  var json4app = JSON.stringify(
			  {
				"actionType": "updateNavigation",
				"navigationBar":{
					   "moleculeName":"navigationBar",
					   "title":document.title,
					   "alwaysShowBackButton": true 
					}
			  }
		  )
		  var params = new URL(location.href).searchParams;
		  var source = params.get('source');
		  if(source == "pathfinder"){
			  json4app = JSON.stringify(
				  {
					  "actionType": "updateNavigation",
					  "navigationBar": {
						  "moleculeName": "navigationBar",
						  "title": params.get('pathfinderTitle'),
						  "pattern": "A"
					  }
				  }
			  );
		  }
		if (window.webkit != undefined) {
			if (window.webkit.messageHandlers.mfAppInterface != undefined) {
				window.webkit.messageHandlers.mfAppInterface.postMessage(json4app)
			}
		}
		if (window.mfAppInterface != undefined) {
			window.mfAppInterface.postMessage(json4app)
		}
	  }
  }
  
  gnav20.getCookie = function (cname) {
	  var name = cname + "=";
	  var decodedCookie = decodeURIComponent(document.cookie);
	  var ca = decodedCookie.split(';');
	  for (var i = 0; i < ca.length; i++) {
		  var c = ca[i];
		  while (c.charAt(0) == ' ') {
			  c = c.substring(1);
		  }
		  if (c.indexOf(name) == 0) {
			  return c.substring(name.length, c.length);
		  }
	  }
	  return "";
  };
  
  gnav20.setCookie = function (name, value, days) {
	  var secure = location.protocol === 'https:' ? ';secure' : '';
	  var domArray = location.host.split(".");	
	  var domain = /localhost/.test(location.host) ? "localhost" : domArray[domArray.length-2] + "." + domArray[domArray.length-1];	
	  var cookie = name + "=" + value;
		  
	  if (days) {
		  var date = new Date();
		  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		  cookie += ";expires=" + date.toUTCString();
	  }
	  document.cookie = cookie + ";domain=" + domain + ";path=/" + secure;
  };
  
  gnav20.deleteCookie = function (name) {
	  gnav20.setCookie(name, '', -1)
  };
  
  
  gnav20.getURLParams  = function (search) {
	  var params = {};
	  var query = search.substring(1);
	  var vars = query.split('&');
	  for (var i = 0; i < vars.length; i++) {
		  var pair = vars[i].split('=');
		  params[pair[0]] = decodeURIComponent(pair[1]);
	  }
	  return params;
  };
  
  gnav20.personalizeHidden = function () {
	  var hideItem = [];
	  if (window.gnavdl && window.gnavdl.options) {
		  if (window.gnavdl.options["hide-item"]) {
			  hideItem = window.gnavdl.options["hide-item"];
		  }
	  }
	  if (hideItem) {
		  hideItem.forEach(function (ele, index) {
			  var nodes = document.querySelectorAll('[item-title=' + ele + ']');
			  for (i = 0; i < nodes.length; i++) {
				  nodes[i].style.display = 'none';
			  }
			  if(ele == 'promoRibbon' && document.querySelector('.gnav20 .gnav20-with-promo')) {
				  document.querySelector('.gnav20 .gnav20-with-promo').classList.remove('gnav20-with-promo');
				  if(document.querySelector(".gnav20-ribbontext")) {
					  document.querySelector(".gnav20-ribbontext").innerHTML = "";
				  }
			  }
		  })
	  }
  };
  
  gnav20.hideLink = function (element) {
	  var returnVal = false;
	  if (typeof gnav20.personalization != "undefined" && element.dataset.showFor) {
		  var showForArr = element.dataset.showFor.split(',');
		  for (i = 0; i < showForArr.length; i++) {
			  if (showForArr[i]) {
				  var showFor = showForArr[i].split(":");
				  if (showFor.length == 2 && gnav20.personalization[showFor[0]] !== undefined) {
					  if (gnav20.personalization[showFor[0]].toLowerCase() == showFor[1].toLowerCase()) {
						  returnVal = false;
						  break;
					  }
					  else {
						  returnVal = true;
					  }
				  } else {
					  returnVal = true;
				  }
			  }
		  }
	  } else if (element.dataset.showFor) {
		  returnVal = true;
	  }
	  if (!returnVal && typeof gnav20.personalization != "undefined" && element.dataset.hideFor) {
		  var hideForArr = element.dataset.hideFor.split(',');
		  for (i = 0; i < hideForArr.length; i++) {
			  if (hideForArr[i]) {
				  var hideFor = hideForArr[i].split(":");
				  if (hideFor.length == 2 && gnav20.personalization[hideFor[0]] !== undefined) {
					  if (gnav20.personalization[hideFor[0]].toLowerCase() == hideFor[1].toLowerCase()) {
						  returnVal = true;
						  break;
					  }
				  }
			  }
		  }
	  }
	  return returnVal;
  };
  
  gnav20.disableLink = function (element) {
	  //test
	  var returnVal = false;
	  if (typeof gnav20.personalization != "undefined" && element.dataset.disabledFor) {
		  var disabledForArr = element.dataset.disabledFor.split(',');
		  for (i = 0; i < disabledForArr.length; i++) {
			  if (disabledForArr[i]) {
				  var disabledFor = disabledForArr[i].split(":");
				  if (disabledFor.length == 2 && gnav20.personalization[disabledFor[0]] !== undefined) {
					  if (gnav20.personalization[disabledFor[0]].toLowerCase() == disabledFor[1].toLowerCase()) {
						  returnVal = true;
						  break;
					  }
				  }
			  }
		  }
	  }
	  return returnVal;
  }
  
  gnav20.initPersona = function () {
	  var list = document.querySelectorAll("[data-show-for], [data-hide-for]");
	  for (var i = 0; i < list.length; i++) {
		  list[i].parentElement.classList.remove("gnav20-hide");
		  if (gnav20.hideLink(list[i])) {
			  list[i].parentElement.classList.add("gnav20-hide");
		  }
	  }
  
	  var listDisabled = document.querySelectorAll("[data-disabled-for]");
	  for (var i = 0; i < listDisabled.length; i++) {
		  listDisabled[i].parentElement.classList.remove("gnav20-disabled");
		  if (gnav20.disableLink(listDisabled[i])) {
			  listDisabled[i].classList.add("gnav20-disabled")
		  }
	  }
	  
	  if(((gnav20.greetingName && gnav20.greetingName != "") || (gnav20.getCookie("greetingName") && /\w/.test(gnav20.getCookie("greetingName")))) && document.querySelector('.gnav20 .accountName')) {
		  var accountName = document.querySelectorAll(".gnav20 .accountName");
		  for(i = 0; i < accountName.length; i++){
			  if(gnav20.greetingName)
				  accountName[i].innerText = ", " + gnav20.greetingName;	
			  else
				  accountName[i].innerText = ", " + gnav20.getCookie("greetingName");	
		  }
	  }	
	  if(typeof gnav20.personalization != "undefined" && gnav20.personalization && gnav20.personalization.zip) {
		  var zipCode = document.querySelectorAll(".gnav20 .gnav20-location-icon .zip-text");
		  for(i = 0; i < zipCode.length; i++){
			  zipCode[i].innerHTML = gnav20.personalization.zip;
			  if( zipCode[i].closest(".gnav20-location-icon") ) {
				  zipCode[i].closest(".gnav20-location-icon").classList.add("active")
			  }
		  }							
	  }
	  if(typeof gnav20.personalization != "undefined" && gnav20.personalization && gnav20.personalization.activeAcc) {
		  var activeAcc = document.querySelectorAll(".gnav20 .activeAcc");
		  for(i = 0; i < activeAcc.length; i++){
			  activeAcc[i].innerHTML = "#" + gnav20.personalization.activeAcc;								
		  }
	  }
  };
  
  //*******************************************
  
  /********** START - Functionality for UNIFIED utilities DO NOT DELETE *******************************/
  
  // Wireless cart and wishlist utilities
  
  // Show cart count for cart icon and wishlist icon - WIP needs to be updatad
  gnav20.showBubble = function () {
	  var moreThan99 = '99+'; //VCGAF-249
	  var wirelessAuth = gnav20.getCookie('loggedIn'),
			  fwaCart = wirelessAuth ? (gnav20.getCookie('fwaCartExists') == 'Y') : (gnav20.getCookie('prospectFwaCartExists') == 'Y'),
			  acNextGen = !wirelessAuth && gnav20.getCookie('acNextGen'),
			  cartBubble = document.getElementsByClassName("showBubble"),
			  pnWishlist = gnav20.getCookie('pnWishlist'),
		  wishListBubble = document.getElementsByClassName("gnav20-wish-list-bubble"),
		  cartCountCookieName = gnav20.getCookie('isPrepayCartExist')
			  ? "prepayCartCount"
			  :  wirelessAuth // && gnav20.getCookie('gnCartCount') - DOPMO-153970
				  ? "gnCartCount"
				  : "prospectCartCount",
		  cartCount = parseInt(gnav20.getCookie(cartCountCookieName)),
		  wishListCount = wirelessAuth ? parseInt(gnav20.getCookie('wishListCount')) : parseInt(gnav20.getCookie('prospectWishListCount')),
		  cartCountDisplay = (cartCount > 0 || fwaCart || acNextGen)? 'block' : 'none', //VCGAF-249
		  wishListDisplay = ((wirelessAuth && wishListCount) || (!wirelessAuth && pnWishlist)) ? 'block' : 'none';
		  
	  if(cartCountCookieName === 'prospectCartCount' && ((!gnav20.getCookie('prospectCartActive')) && (!gnav20.getCookie('prospectCartAvailable'))) && !gnav20.getCookie('AccessoryOnlyCartAvailable') && !fwaCart && !acNextGen){
		  cartCountDisplay = 'none'
		  cartCount = 0
	  }
  
		  for (i = 0; i < cartBubble.length; i++) {
			  cartBubble[i].style.display = cartCountDisplay;
			  cartBubble[i].innerText = isNaN(cartCount) ? '' : cartCount;
		  }
		  
		  /************************ New design unified cart ************************/
		  //if(!cartCount && fwaCart){ for now, no indicator next to mobile for fwa, but destination will still be fwa
		  //	cartCount = 1;
		  //}
		  var newCartBubble = document.querySelectorAll('.gnav20 .gnav20-gnav-new-design .gnav20-unifiedcart-bubble');
		  for (i = 0; i < newCartBubble.length; i++) {
			  newCartBubble[i].style.display = cartCountDisplay;
			  //newCartBubble[i].style.right = (cartCount > 0 && cartCount <= 9) ? '6px' : (cartCount > 9 && cartCount <= 19) ? '4px' : (cartCount > 9 && cartCount <= 99) ? '1px' : (cartCount > 99) ? '-5px' : '';
			  newCartBubble[i].innerText = (cartCount > 99) ? moreThan99 : cartCount;
			  var pluralTag = cartCount == 1 ? '' : 's';
			  var ariaLabelForCart = isNaN(cartCount) ? 'Shopping Cart Menu' : 'Shopping Cart Menu ' + cartCount + ' item' + pluralTag + ' in the cart';
			  newCartBubble[i].parentElement.setAttribute('aria-label',ariaLabelForCart);
		  }
		  
		  /***************************VCGAF-249*************************************/
		  var mobileCartCountElements = document.querySelectorAll('.gnav20 .gnav20-unified-cart .gnav20-content-list .gnav20-content-list-arrow.gnav20-mobile-cart-count')
  
		  for (var i = 0; i < mobileCartCountElements.length; i++) {
			  if(cartCount && cartCount > 0){
				  if(mobileCartCountElements[i].innerText.indexOf('(') > 0){
					  mobileCartCountElements[i].innerText = mobileCartCountElements[i].innerText.substr(0, mobileCartCountElements[i].innerText.indexOf("(")) + '(' + cartCount + ')';
				  }
				  else {
					  mobileCartCountElements[i].innerText = mobileCartCountElements[i].innerText + ' (' + cartCount + ')';
				  }
  
				  var pluralTag = cartCount == 1 ? '' : 's';
				  var ariaLabelFormobileCart = isNaN(cartCount) ? 'Mobile solutions' : 'Mobile solutions ' + cartCount + ' item' + pluralTag + ' in the cart';
				  mobileCartCountElements[i].setAttribute('aria-label',ariaLabelFormobileCart);
			  }
			  else{
				  mobileCartCountElements[i].innerText = 'Mobile solutions';
			  }
		  }
		  /***************************VCGAF-249*************************************/
		  /***************************VCGAF-249 FOR HOME CART *************************************/			
		  if(fwaCart){
			  var homeCartCountElements = document.querySelectorAll('.gnav20 .gnav20-unified-cart .gnav20-content-list .gnav20-content-list-arrow.gnav20-home-cart-count'),
					  domain = /billpay.verizonwireless/.test(location.host)
				  ? 'https://vzwqa'+ location.host.substr(2,1) +'.verizonwireless.com'
				  : /verizonwireless/.test(location.host) 
				  ? '' 
				  : /wwwnssit/.test(location.host) 
				  ? ''
				  : 'https://www.verizon.com'
  
			  for (var i = 0; i < homeCartCountElements.length; i++) {
				  homeCartCountElements[i].href = domain + '/sales/home/expresscart.html?expresscart=true&resumecart=true'; // newer fwa page DCMP-9861
				  if(fwaCart && homeCartCountElements[i].innerText.indexOf('(') < 0){
					  homeCartCountElements[i].innerText = homeCartCountElements[i].innerText + ' (1)';
					  homeCartCountElements[i].setAttribute('aria-label','Home solutions, with one item in the cart');					
				  }
			  }
			  window.coreData = window.coreData || [];
						  window.coreData.push({
						  task : "emit",
						  event : "notify",
						  params : {
							  name    : "cart item details",
							  message : "Mobile solutions | Home solutions(1)"
						  }
				  });
		  }
		  /*************************** VCGAF-249 FOR HOME CART **************************************/
		  
		  /******************** Wishlist Link inside Account Tab ***********************/
		  var wishListIndicator = document.querySelectorAll('.gnav20 .gnav20-featured-card .gnav20-submenu-column .gnav20-sub-nav-list.gnav20-wishlist-menu-indicator > a')
  
		  for (var i = 0; i < wishListIndicator.length; i++) {
			  if(wishListCount && wishListCount > 0){
				  wishListIndicator[i].innerHTML = 'Wishlist' + ' (' + wishListCount + ')';
				  var plural = wishListCount == 1 ? '' : 's';
				  var ariaLabelForWishlistLink = isNaN(wishListCount) ? 'Wishlist' : 'Wishlist with ' + wishListCount + ' item' + plural;
				  wishListIndicator[i].setAttribute('aria-label',ariaLabelForWishlistLink);
			  }
		  }
  
		  /******************** Wishlist Icon component ***********************/
		  for (i = 0; i < wishListBubble.length; i++) {
			  wishListBubble[i].style.display = wishListDisplay;
			  wishListBubble[i].innerText = isNaN(wishListCount) ? '' : wishListCount;
			  var plural = wishListCount == 1 ? '' : 's';
			  var ariaLabelForWishlist = isNaN(wishListCount) ? 'Wishlist' : 'Wishlist with ' + wishListCount + ' item' + plural;
			  wishListBubble[i].parentElement.setAttribute('aria-label',ariaLabelForWishlist);
		  }
  };
  
  // cart utility for lower envs, look into using unified cart JS page in lowers
  gnav20.cartUtility = function (event) {
	  event.preventDefault();
  
	  var domain = /billpay.verizonwireless/.test(location.host)
			  ? 'https://vzwqa'+ location.host.substr(2,1) +'.verizonwireless.com'
			  : /verizonwireless/.test(location.host) 
			  ? '' 
			  : /wwwnssit/.test(location.host) 
			  ? ''
			  : 'https://www.verizon.com',
			  prospectCartCount = gnav20.getCookie('prospectCartCount'),
			  
  
	  prepayCart = gnav20.getCookie('isPrepayCartExist') || (gnav20.getCookie('role') == 'prepay'),
		  accessoryOnlyCart = gnav20.getCookie('AccessoryOnlyCartAvailable'),
		  nsaAccessoryOnlyCart = gnav20.getCookie('NSAAccessoryOnlyCartAvailable'),
		  loggedInCart = gnav20.getCookie('loggedIn'),
		  fwaCart = loggedInCart ? (gnav20.getCookie('fwaCartExists') == 'Y' && !parseInt(gnav20.getCookie('prospectCartCount'))  && !parseInt(gnav20.getCookie('gnCartCount')) && !accessoryOnlyCart && !nsaAccessoryOnlyCart) :
		  (gnav20.getCookie('prospectFwaCartExists') == 'Y' && !parseInt(gnav20.getCookie('prospectCartCount'))  && !parseInt(gnav20.getCookie('gnCartCount')) && !accessoryOnlyCart && !nsaAccessoryOnlyCart),
			nextCart = gnav20.getCookie('BAUNEXT_FLOW'),
		  nextGenCart = gnav20.getCookie('NEXTGEN'),
		  acNextGen = gnav20.getCookie('acNextGen'),
		  nextGenDig = gnav20.getCookie('NGD'),
		  
		  href = prepayCart && loggedInCart ? domain + '/sales/prepaid/expresscart.html?promohub=true' // bau logged-in prepaid cart  
		  : prepayCart
		  ? domain + '/sales/prepaid/expresscart.html' // new prepaid cart  
		  : fwaCart
		  ? domain + '/sales/home/expresscart.html?expresscart=true&resumecart=true' // newer FWA URL DCMP-9861
		  : (loggedInCart && nextGenDig)
		  ? domain + '/nextgendigital/sales/configurator/auth/cart?pageName=cart' // newer NGD Auth Cart URL DCMP-11584
		  : nextGenDig
		  ? domain + '/nextgendigital/sales/configurator/cart?isAbandonCart=true' // nextgen digital cart
		  : (loggedInCart && !nextGenCart) || nextCart
		  ? domain + '/sales/next/expresscheckout.html?pageName=cart' // accessory BAUNEXT_FLOW
		  : accessoryOnlyCart
		  ? domain + '/od/cust/cart/getCartDetails' // accessory only cart
		  : nsaAccessoryOnlyCart
		  ? domain + '/sales/digital/cart.html' // nsa accessory only cart
		  : domain + '/sales/nextgen/expresscart.html?pageName=cart' // nextgen cart default
  
		  if(acNextGen && /nextgen\/expresscart/.test(href)) {
			  if(href.includes("?"))
				  href += '&isAbandonCart=true';
			  else
				  href += '?isAbandonCart=true';
		  }
	  
	  location.href = href
  };
  
  // wireless gnav object to provide cart and wishlist update functionality to parent pages
  window.vzwgnav = window.vzwgnav || {}
  window.vzwgnav.setIconCounts = gnav20.showBubble
  window.gnav20.setIconCounts = gnav20.showBubble
  
  gnav20.initIconCounts = function () {
	  if (!gnav20.getCookie('loggedIn')) {
		  gnav20.deleteCookie('wishListCount')
	  }
	  gnav20.showBubble()
  };
  
  /********** END - Functionality for UNIFIED utilities DO NOT DELETE *******************************/
  
  gnav20.smartlingTranslation = function () {
	  var currentSubdomain = location.host.split('.')[0], newSubdomain;
  
	  switch(currentSubdomain){
		  case 'www':
			  newSubdomain = 'esus';
			  break;
		  case 'www98':
			  newSubdomain = 'esus-uat';
			  break;
		  case 'esus':
			  newSubdomain = 'www';
			  break;
		  case 'esus-uat':
			  newSubdomain = 'www98';
			  break;
		  case 'espanol':
			  newSubdomain = 'www';
			  break;
		  case 'secure':
			  newSubdomain = 'espanol.secure';
			  break;
		  case 'plusplay':
			  newSubdomain = 'espanol.plusplay';
			  break;
		  case 'myvpostpay':
			  newSubdomain = 'espanol.myvpostpay';
			  break;
		  case 'myvprepay':
			  newSubdomain = 'espanol.myvprepay';
			  break;
	  }
	  if(location.host.indexOf("www.yourdigitalrebatecenter") > -1){
		  newSubdomain = "espanol";
		  currentSubdomain = "www";
	  } else if(location.host.indexOf("espanol.secure") > -1){
		  newSubdomain = "secure";
		  currentSubdomain = "espanol.secure";
	  } else if(location.host.indexOf("espanol.plusplay") > -1){
		  newSubdomain = "plusplay";
		  currentSubdomain = "espanol.plusplay";
	  } else if(location.host.indexOf("espanol.myvpostpay") > -1){
		  newSubdomain = "myvpostpay";
		  currentSubdomain = "espanol.myvpostpay";
	  } else if(location.host.indexOf("espanol.myvprepay") > -1){
		  newSubdomain = "myvprepay";
		  currentSubdomain = "espanol.myvprepay";
	  } else if(location.host.indexOf("es-vzwqa") > -1) {
		  newSubdomain = "vzwqa";
		  currentSubdomain = "es-vzwqa";
	  } else if(location.host.indexOf("vzwqa") > -1) {
		  newSubdomain = "es-vzwqa";
		  currentSubdomain = "vzwqa";
	  } else if(location.host.indexOf("es.securesit") > -1) {
		  newSubdomain = "securesit";
		  currentSubdomain = "es.securesit";
	  } else if(location.host.indexOf("securesit") > -1) {
		  newSubdomain = "es.securesit";
		  currentSubdomain = "securesit";
	  } else if(location.host.indexOf("es-qa") > -1) {
		  newSubdomain = "qa";
		  currentSubdomain = "es-qa";
	  } else if(location.host.indexOf("qa") > -1 && location.host.indexOf("billpay.") > -1) {
		  newSubdomain = "es-qa";
		  currentSubdomain = "qa";
	  } else if(location.host.indexOf("ecommstage") > -1) {
		  newSubdomain = "espanolstage";
		  currentSubdomain = "ecommstage";
	  }else if(location.host.indexOf("espanolstage") > -1) {
		  newSubdomain = "ecommstage";
		  currentSubdomain = "espanolstage";
	  }
	  if ( newSubdomain !== undefined ) {
		  location.href = location.href.replace(currentSubdomain, newSubdomain);
	  }
  };
  
  // Version: '1.0.23' motionpoint start (needed for Spanish/English toggle)
  var MP = {
	  //<!-- mp_trans_disable_start -->
	  Version: "1.0.23",
	  Domains: { "es": "espanol.verizon.com" },
	  SrcLang: "en",
	  //<!-- mp_trans_disable_end -->
	  UrlLang: "mp_js_current_lang",
	  SrcUrl: decodeURIComponent("mp_js_orgin_url"),
	  //<!-- mp_trans_disable_start -->
	  init: function () {
		  if (MP.UrlLang.indexOf("p_js_") == 1) {
			  MP.SrcUrl = location.href;
			  MP.UrlLang = MP.SrcLang;
		  }
	  },
	  getCookie: function (name) {
		  var start = document.cookie.indexOf(name + "=");
		  if (start < 0) return null;
		  start = start + name.length + 1;
		  var end = document.cookie.indexOf(";", start);
		  if (end < 0) end = document.cookie.length;
		  while (document.cookie.charAt(start) == " ") { start++; }
		  return decodeURIComponent(document.cookie.substring(start, end));
	  },
	  setCookie: function (name, value, path, domain) {
		  var cookie = name + "=" + encodeURIComponent(value);
		  if (path) cookie += "; path=" + path;
		  if (domain) cookie += "; domain=" + domain;
		  var now = new Date();
		  now.setTime(now.getTime() + 1000 * 60 * 60 * 24 * 365);
		  cookie += "; expires=" + now.toUTCString();
		  document.cookie = cookie;
	  },
	  switchLanguage: function (lang) {
		  if (lang != MP.SrcLang) {
			  var script = document.createElement("SCRIPT");
			  script.src = location.protocol + "//" + MP.Domains[lang] + "/" + MP.SrcLang + lang + "/?1023749632;" + encodeURIComponent(MP.SrcUrl);
			  document.body.appendChild(script);
		  } else if (lang == MP.SrcLang && MP.UrlLang != MP.SrcLang) {
			  var script = document.createElement("SCRIPT");
			  script.src = location.protocol + "//" + MP.Domains[MP.UrlLang] + "/" + MP.SrcLang + MP.UrlLang + "/?1023749634;" + encodeURIComponent(location.href);
			  document.body.appendChild(script);
		  }
		  return false;
	  },
	  switchToLang: function (url) {
		  location.href = url;
	  }
  }
  //<!-- mp_trans_disable_end -->
  
  // SKINNY NAV FUNCTIONALITY - START - skinny nav is cancelled for now 6/30/2021 so commenting below
  /*
  gnav20.initSkinnyNav = function(){
	  gnav20.headerElement = document.querySelector('.gnav20')
	  gnav20.lastScrollTop = 0;
	  gnav20.goingSkinny = false;
	  gnav20.scrollDirection = 'up';
	  window.addEventListener("scroll", function(){    
		  if(!gnav20.goingSkinny){
			   var currentScrollTop = window.pageYOffset || document.documentElement.scrollTop; 
			   if (currentScrollTop > gnav20.lastScrollTop && gnav20.scrollDirection != 'down'){      
			  gnav20.scrollDirection = 'down'
			  gnav20.headerElement.classList.add('gnav20-skinny')
		   } else if(currentScrollTop < gnav20.lastScrollTop && gnav20.scrollDirection != 'up') {
			  gnav20.scrollDirection = 'up'
			  gnav20.headerElement.classList.remove('gnav20-skinny')
		   }
		   gnav20.lastScrollTop = currentScrollTop <= 0 ? 0 : currentScrollTop;
		   console.log('skinny scroll')
		  }
	  }, false);
  
	  var hiddenLinks = document.querySelectorAll('.gnav20 .gnav20-desktop .gnav20-row-one a, .gnav20 .gnav20-promo-ribbon a, .gnav20 .gnav20-promo-ribbon button')
	  for (i = 0; i < hiddenLinks.length; i++) {
		  hiddenLinks[i].addEventListener("focus", function(){
			  if(gnav20.scrollDirection == 'down'){
				  gnav20.scrollDirection = 'up'
				gnav20.headerElement.classList.remove('gnav20-skinny')
			  }
		  });
	  }clearFocusTrap
  }
  */
  // SKINNY NAV FUNCTIONALITY - END
  
  
  //A11y Fix. Start of code to restrict the visual TAB  focus within the overlay/flyout
  gnav20.setFocusTrap = function(container){
		  
	  var focusableList = container.querySelectorAll('a[href]:not([disabled]), button:not([disabled]):not(.gnav20-back-to-menu), textarea:not([disabled]), input[type="search"]:not([disabled]), input[type="text"]:not([disabled]), input[type="radio"]:not([disabled]), input[type="checkbox"]:not([disabled]), select:not([disabled])');
	  var indexInc = 1;
	  gnav20.focusTrapContainer = container;
	  gnav20.firstFocusableEl = focusableList[0];
	  
	  /*
	  for (i = 0; i < focusableList.length; i++){
		  console.log(window.getComputedStyle(focusableList[i], null).getPropertyValue("display"),focusableList[i])
	  }
	  */	
	  gnav20.lastFocusableEl = focusableList[focusableList.length - indexInc];
	  while(gnav20.lastFocusableEl && !gnav20.lastFocusableEl.offsetParent){// for cases where we have hidden elements
		  indexInc ++
		  gnav20.lastFocusableEl = focusableList[focusableList.length - indexInc];
	  }
	  gnav20.focusTrapContainer.removeEventListener('keydown',gnav20.focusTrap)
	  gnav20.focusTrapContainer.addEventListener('keydown',gnav20.focusTrap)
  }
  gnav20.clearFocusTrap = function(){
	  
	  if(gnav20.focusTrapContainer){
		  gnav20.focusTrapContainer.removeEventListener('keydown',gnav20.focusTrap)
		  gnav20.activeCloseButton = null
	  }
  }
  gnav20.focusTrap = function(event){
		  
	  if(event.keyCode != 9){
		  return
	  }
	  if (event.shiftKey) /* shift + tab */ {
		if (document.activeElement == gnav20.firstFocusableEl) {
			gnav20.lastFocusableEl.focus();
			event.preventDefault()
		}
	} else /* tab */ {
		if (document.activeElement == gnav20.lastFocusableEl) {
			gnav20.firstFocusableEl.focus();
			event.preventDefault()
		}
	}
  }
  
  /* commented 11/5/21
  gnav20.toggleZindex = function(bool){
	  gnav20.contentWrapper = document.querySelector('.gnav20 .gnav20-sticky-content')
	  if(gnav20.contentWrapper){
		  var cmd = bool ? 'add' : 'remove'
		  gnav20.contentWrapper.classList[cmd]('gnav20-open-element')
	  }
  }
  */
  
  gnav20.clickOutsideClose = function(event){
	  //console.log('clickOutsideClose')
	  if(document.querySelector(".gnav20-unifiedcart .gnav20-vzmoverlay.gnav20-desktopOverlay")){
		  return;
	  }else if(!event.target.closest(gnav20.closeElementQuery) && gnav20.activeCloseButton){
		  gnav20.activeCloseButton.click()
	  }
  }
  
  gnav20.initVisualCue = function() {
	  var testIndicatorIndex = 0
	  var testIndicatorInterval = setInterval(function(){
		  testIndicatorIndex ++;
		  if(document.querySelector('#vz-gf20 .gnav20-footer-level-two .copyright-section') && !document.getElementById('visual-cue')){
			  var vc = document.createElement('DIV')
			  vc.id = 'visual-cue';
			  vc.innerHTML = '<div></div><div></div><div></div>'
			  document.querySelector('#vz-gf20 .gnav20-footer-level-two .copyright-section').appendChild(vc); 
		  }
		  if(window.runningExperiment && document.getElementById('visual-cue')){
			  var indicator = document.getElementById('visual-cue'),
					  divs = indicator.children
			  window.runningExperiment.forEach(function(item,index){
				  if(/optimization/.test(item.toLowerCase())){
					  divs[0].setAttribute('class', 'visual-cue-show')
					  indicator.style.display = 'block';
				  }else if(/merchandising/.test(item.toLowerCase())){
					  divs[1].setAttribute('class', 'visual-cue-show')
					  indicator.style.display = 'block';
				  }else if(/personalization/.test(item.toLowerCase())){
					  divs[2].setAttribute('class', 'visual-cue-show')
					  indicator.style.display = 'block';
				  }
			  })			
			  clearInterval(testIndicatorInterval)
		  }
		  if(testIndicatorIndex>29){
			  clearInterval(testIndicatorInterval)
		  }
	  },1000)
  }
  
   
  gnav20.check4BusinessCookie = function(){
	  var bizCookie = gnav20.getCookie('VZ_ATLAS_SITE_PERS')
	  if(bizCookie && /=business/.test(bizCookie) && !gnav20.getCookie('hideBizBubble')){
		  if(!gnav20.bizSpan){
			  gnav20.bizSpan = document.createElement('span');
			  gnav20.bizSpan.className = 'biz-bubble';
			  gnav20.bizSpan.style.marginLeft = 0;
			  gnav20.bizSpan.innerHTML = 'Looking for Business?<button id="close-biz-look-bubble">&times;</button>';		
			  
			  var bizBut = gnav20.bizSpan.querySelector('button')
			  if(gnav20.bizSpan && bizBut){
				  bizBut.setAttribute('aria-label', 'close the looking for business alert')
				  bizBut.addEventListener('click', function(){
					  document.querySelector('.gnav20-desktop .gnav20-utility .gnav20-store a').focus()
					  gnav20.bizSpan.style.display = 'none';
					  gnav20.setCookie('hideBizBubble', 'true')
					  setTimeout("document.querySelector('.gnav20-desktop .gnav20-utility .gnav20-store a').focus()",100)
				  })
			  }
		  }
		  
		  var bizContainer = document.querySelector('.gnav20-eyebrow-link-list-item.gnav20-two')
		  if(bizContainer && !bizContainer.querySelector('.biz-bubble')){
			  bizContainer.appendChild(gnav20.bizSpan);
		  }
				  
		  /* commenting code until animation is improved
		  bizAniInc = 1
		  bizAniMax = 50
		  bizAniInt = 60
		  bizAniRange = 5
		  bizAniInterval = setInterval(function(){
			  var ml = parseInt(gnav20.bizSpan.style.marginLeft)
			  if(bizAniMax < 0 && !ml){
				  clearInterval(bizAniInterval)
			  }else{
				  if(ml > bizAniRange){
					  bizAniInc = -1;
				  }
				  if(ml < bizAniRange* -1){
					  bizAniInc = 1;
				  }
				  gnav20.bizSpan.style.marginLeft = ml + bizAniInc + 'px'
				  bizAniMax --
			  }
		  },bizAniInt)
		  */
	  }
  }
  
  /* DCMP-8423 Start */
  window.addEventListener('load',function(){
	  if(window.location.href.indexOf('.verizon.com/signin?action=otp') > -1){
		  if(document.querySelector('#otpLink')){
			  document.querySelector('#otpLink').click();
		  }
	  }
  });
  /* DCMP-8423 End */
  
  
			  /* OLD CART LOGIC
		  prepayCart = gnav20.getCookie('isPrepayCartExist') || (gnav20.getCookie('role') == 'prepay'),
		  accessoryCart = gnav20.getCookie('AccessoryOnlyCartAvailable'),
		  prospectCart = gnav20.getCookie('prospectCartAvailable'),
		  nseCart = gnav20.getCookie('nseCartItemsAvailable'),
		  hubCart = gnav20.getCookie('hubProspectCart'),
		  loggedInCart = gnav20.getCookie('loggedIn'),
		  href = prepayCart
			  ? domain + '/od/prepaid/cart/'
			  : loggedInCart
				? domain + '/sales/next/expresscheckout.html?pageName=cart' //'/sales/digital/expressCheckout.html?pageName=cart'
				: accessoryCart && !prospectCart && !nseCart
				  ? domain + '/od/cust/cart/getCartDetails' // accessory cart 
				  : hubCart == 'true'
					  ? domain + '/sales/digital/prospectCheckout.html' // hubcart
					  : nseCart
						  ? '/sales/nse/cart.html' // nse cart
						  : prospectCart
							  ? domain + '/onedp/cart' // bau prospect cart
							: domain + '/sales/nse/cart.html' // nse cart default
				  */
				  
	  
  
  window.promoRibbonRotationInterval = undefined;
  window.gnavCountdownInterval = undefined;
  gnav20.initPromo = function () {
  
	  let promoSlidesContainer = document.querySelector(".gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-promotext");
	  let promoSlides = document.querySelectorAll(".gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-promotext .gnav20-promo-ribbon");
	  let currentPromoSlideIndex = 0;
  
	  if(promoSlides.length > 0) {
		  promoSlides[currentPromoSlideIndex].classList.add('gnav20-active-promo');
		  gnav20HeaderSizeAdjust();
	  }
	  let promoSlidesPrevButton = document.querySelector(".gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow-prev");
	  let promoSlidesNextButton = document.querySelector(".gnav20 #gnav20-promo-placeholder .gnav20-promo .gnav20-slide-arrow-next");
	  
	  if(promoSlidesPrevButton && promoSlidesNextButton ) {
		  promoSlidesPrevButton.setAttribute("aria-label", "previous promo message " + promoSlides.length + " of " +  promoSlides.length);
		  promoSlidesNextButton.setAttribute("aria-label", "next promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
		  promoSlidesPrevButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + promoSlides.length + " of " +  promoSlides.length);
		  promoSlidesNextButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
		  if(promoSlides.length > 0) {
			  promoSlidesContainer.parentElement.setAttribute("aria-label", "Verizon Promos with " + promoSlides.length + " promotions");
			  promoSlidesContainer.parentElement.setAttribute("role", "group");
		  }
	  }
  
	  function nextPromo(e) {
		  if((e == undefined || (e !== undefined && (e.type == 'click' || (e.type == 'keydown' &&  (e.code == 'Enter' || e.code == 'Space'))))) && promoSlides.length > 1) {
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo');
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo-right');
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo-left');
			  currentPromoSlideIndex++;
			  if(currentPromoSlideIndex < promoSlides.length) {
				  promoSlides[currentPromoSlideIndex].classList.add('gnav20-active-promo-right');
			  } else {
				  currentPromoSlideIndex = 0;
				  promoSlides[currentPromoSlideIndex].classList.add('gnav20-active-promo-right');
			  }
  
			  if(e !== undefined) {
				  e.preventDefault();
				  setTimeout(function(){
					  if(promoSlides[currentPromoSlideIndex].querySelector('a')) {
						  promoSlides[currentPromoSlideIndex].querySelector('a').focus();
					  }
				  },800);
			  }
			  if(typeof(e) != 'undefined' &&  typeof(window.promoRibbonRotationInterval) != 'undefined'){
				  clearInterval(window.promoRibbonRotationInterval);
			  }
			  promoSlidesPrevButton.setAttribute("aria-label", "previous promo message " + (currentPromoSlideIndex == 0 ? promoSlides.length : currentPromoSlideIndex) + " of " +  promoSlides.length);
			  promoSlidesNextButton.setAttribute("aria-label", "next promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
			  promoSlidesPrevButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + (currentPromoSlideIndex == 0 ? promoSlides.length : currentPromoSlideIndex) + " of " +  promoSlides.length);
			  promoSlidesNextButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
		  }
	  }
	  function previousPromo(e) {
		  if((e == undefined || (e !== undefined && (e.type == 'click' || (e.type == 'keydown' &&  (e.code == 'Enter' || e.code == 'Space'))))) && promoSlides.length > 1) {
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo');
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo-right');
			  promoSlides[currentPromoSlideIndex].classList.remove('gnav20-active-promo-left');
			  currentPromoSlideIndex--;
			  if(currentPromoSlideIndex >= 0) {
				  promoSlides[currentPromoSlideIndex].classList.add('gnav20-active-promo-left');
			  } else {
				  currentPromoSlideIndex = promoSlides.length - 1;
				  promoSlides[currentPromoSlideIndex].classList.add('gnav20-active-promo-left');
			  }
  
			  if(e !== undefined) {
				  e.preventDefault();
				  setTimeout(function(){
					  if(promoSlides[currentPromoSlideIndex].querySelector('a')) {
						  promoSlides[currentPromoSlideIndex].querySelector('a').focus();
					  }
				  },800);
			  }
			  if(typeof(window.promoRibbonRotationInterval) != 'undefined'){
				  clearInterval(window.promoRibbonRotationInterval);
			  }
			  promoSlidesPrevButton.setAttribute("aria-label", "previous promo message " + (currentPromoSlideIndex == 0 ? promoSlides.length : currentPromoSlideIndex) + " of " +  promoSlides.length);
			  promoSlidesNextButton.setAttribute("aria-label", "next promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
			  promoSlidesPrevButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + (currentPromoSlideIndex == 0 ? promoSlides.length : currentPromoSlideIndex) + " of " +  promoSlides.length);
			  promoSlidesNextButton.setAttribute("data-track", "global nav:promo ribbon:promo message " + (promoSlides.length > currentPromoSlideIndex + 1 ? currentPromoSlideIndex + 2 : "1") + " of " +  promoSlides.length);
		  }
	  }
  
	  if(promoSlides.length > 1 && promoSlidesPrevButton && promoSlidesNextButton) {
		  promoSlidesPrevButton.removeEventListener('click', previousPromo);
		  promoSlidesPrevButton.addEventListener("click", previousPromo);
		  promoSlidesNextButton.removeEventListener('click', nextPromo);
		  promoSlidesNextButton.addEventListener("click", nextPromo);
		  promoSlidesPrevButton.removeEventListener('keydown', previousPromo);
		  promoSlidesPrevButton.addEventListener("keydown", previousPromo);
		  promoSlidesNextButton.removeEventListener('keydown', nextPromo);
		  promoSlidesNextButton.addEventListener("keydown", nextPromo);
		  if(window.innerWidth > 768) {
			  if(typeof(window.promoRibbonRotationInterval) == 'undefined'){
				  window.promoRibbonRotationInterval = setInterval(nextPromo, 10000);
			  } else {
				  clearInterval(window.promoRibbonRotationInterval);
				  window.promoRibbonRotationInterval = setInterval(nextPromo, 10000);
			  }
		  }
		  promoSlidesPrevButton.style.display = 'block';
		  promoSlidesNextButton.style.display = 'block';
	  } else if(promoSlidesPrevButton && promoSlidesNextButton){
		  promoSlidesPrevButton.style.display = 'none';
		  promoSlidesNextButton.style.display = 'none';
	  }
  
	  function openPromo(event) {
		  if (event.target.closest(".gnav20-promo-ribbon") && event.target.closest(".gnav20-promo-ribbon").querySelector('.gnav20-modal-content-placeholder') 
			  && event.target.closest(".gnav20-promo-ribbon-wrapper") && event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal')) {
				  
			  event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal-content-wrapper').innerHTML = event.target.closest(".gnav20-promo-ribbon").querySelector('.gnav20-modal-content-placeholder').innerHTML;
			  
			  event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal').style.display = "block";
			  event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon').focus();
			  toggleAriaHiddenGnav20("modal", !0);       
			  gnav20.setFocusTrap(document.querySelector(".gnav20-modal-content"))     
			  promoIconEleActive = event.target;
			  gnav20.activeCloseButton = event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon');
			  if(typeof(window.promoRibbonRotationInterval) != 'undefined'){
				  clearInterval(window.promoRibbonRotationInterval);
			  }
		  }
	  };
  
	  var promoIconEleActive = null; // rcw added here for 2406 ER
	  function closePromo(event) {
		  var closeModal = event.target.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal')
		  if (closeModal) {
			  closeModal.style.display = "none";
  
		  }
		  if (promoIconEleActive) {
			  promoIconEleActive.focus();
		  } else {
			  let gnav20FocusableElements = document.querySelectorAll(
				  'div#vz-gh20 + div button, div#vz-gh20 + div [href], div#vz-gh20 + div [tabindex]:not([tabindex="-1"])'
			  );
			  if (gnav20FocusableElements.length > 0) {
				  gnav20FocusableElements[0].focus();
			  }
		  }
		  toggleAriaHiddenGnav20("modal", !1);
		  gnav20.clearFocusTrap();
	  };
  
	  gnav20.modal = document.getElementById('gnav20-modal')
	  if(gnav20.modal){
		  gnav20.modal.addEventListener('click', function(event){
			  if(!event.target.closest('.gnav20-modal-content')){
				  gnav20.modal.style.display = "none";
			  }
		  })
	  }
	  document.addEventListener('focusin', (event) => {
		  // Handle touch start event
		  if(typeof(window.promoRibbonRotationInterval) != 'undefined'){
			  clearInterval(window.promoRibbonRotationInterval);
		  }
	  });
	  
	  var promoIconEle = document.querySelectorAll('.gnav20-promo-text .gnav20-promo-icon');	
	  for (var i = 0; i < promoIconEle.length; i++) {
		  promoIconEle[i].removeEventListener('click', openPromo);
		  promoIconEle[i].addEventListener('click', openPromo);
	  }
	  
	  var promoCloseEle = document.querySelectorAll('.gnav20-promo-ribbon-wrapper .gnav20-modal .gnav20-promo-close-icon');
	  
	  for (var i = 0; i < promoCloseEle.length; i++) {
		  promoCloseEle[i].removeEventListener('click', closePromo);
		  promoCloseEle[i].addEventListener('click', closePromo);
		  
	  }
	  function gnav20HeaderSizeAdjust() {
		  if(document.querySelector(".gnav20.gnav20-sticky") && document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-content")) {
			  var stickyHeight = document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-content").clientHeight;
			  document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-header").style.height = stickyHeight + 'px';
		  }
	  }
	  gnav20HeaderSizeAdjust();
	  window.removeEventListener('resize', gnav20HeaderSizeAdjust);
	  window.addEventListener('resize', gnav20HeaderSizeAdjust);
  
	  //Change Start DCMP-10010
	  var promoTimerEles = document.querySelectorAll('.gnav20-promo-ribbon-wrapper .gnav20-promo-timer');
	  if(promoTimerEles.length > 0) {
		  if(typeof(window.gnavCountdownInterval) != 'undefined'){
			  clearInterval(window.gnavCountdownInterval);
		  }
		  window.gnavCountdownInterval = setInterval(function() {
			  // Set the date we're counting down to
			  for (var i = 0; i < promoTimerEles.length; i++) {
				  var timestampArray = promoTimerEles[i].getAttribute('timestamp').split(/[- :]/);
				  var gnavCountdownExpiry = new Date(timestampArray[0], timestampArray[1]-1, timestampArray[2], timestampArray[3], timestampArray[4], timestampArray[5]).getTime();
				  // Get today's date and time
				  var gnavNow = Date.parse(new Date().toLocaleString("en-US", {timeZone: 'America/New_York'}));
  
				  // Find the differance between now and the count down date
				  var gnavTimeLeft = gnavCountdownExpiry - gnavNow;
  
				  // If the count down is finished, write some text
				  if (gnavTimeLeft < 0) {
					  promoTimerEles[i].innerText = 'Ends in 00d:00h:00m';
					  promoTimerEles[i].setAttribute("aria-label", "Offer is expired");
				  } else {
					  var gnavCountdownDays = Math.floor(gnavTimeLeft / (1000 * 60 * 60 * 24));
					  var gnavCountdownHours = Math.floor((gnavTimeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
					  var gnavCountdownMinutes = Math.floor((gnavTimeLeft % (1000 * 60 * 60)) / (1000 * 60));
  
					  var strTemp = 'Ends in ' + (gnavCountdownDays < 10 ? '0' : '') + gnavCountdownDays + 'd:' + (gnavCountdownHours < 10 ? '0' : '') + gnavCountdownHours + 'h:' + (gnavCountdownMinutes < 10 ? '0' : '') + gnavCountdownMinutes + 'm';
					  promoTimerEles[i].innerText = strTemp;
					  promoTimerEles[i].setAttribute("aria-label", "Offer ends in " + (gnavCountdownDays > 0 ? gnavCountdownDays + " days " : "") + (gnavCountdownHours > 0 ? gnavCountdownHours + " hours " : "" ) + (gnavCountdownMinutes > 0 ? gnavCountdownMinutes + " minutes" : ""));
				  }
				  if(promoTimerEles[i]?.closest('.gnav20-promo-ribbon')?.querySelector('a')) {
					  let promoAriaLabel = promoTimerEles[i].closest('.gnav20-promo-ribbon').querySelector('a').getAttribute("aria-label");
					  let timerAriaLabel = promoTimerEles[i].getAttribute("aria-label");
					  if(promoAriaLabel && promoAriaLabel.indexOf('Offer ends in') > -1) {
						  promoAriaLabel = promoAriaLabel.substring(0, promoAriaLabel.indexOf('Offer ends in') - 1) + ' ';
					  } else if (promoAriaLabel && promoAriaLabel.indexOf('Offer is expired') > -1) {
						  promoAriaLabel = promoAriaLabel.substring(0, promoAriaLabel.indexOf('Offer is expired') - 1) + ' ';
					  } else if(promoAriaLabel) {
						  promoAriaLabel = promoAriaLabel + ' ';
					  } else {
						  promoAriaLabel = promoTimerEles[i].closest('.gnav20-promo-ribbon').querySelector('a').innerText + ' ';
					  }
					  promoTimerEles[i].closest('.gnav20-promo-ribbon').querySelector('a').setAttribute("aria-label", promoAriaLabel + timerAriaLabel);
				  }
			  }
  
		  }, 1000);
	  }
	  //Change End DCMP-10010
  
	  let promoElement = document.querySelector('.gnav20-promo-ribbon-wrapper .gnav20-promo-text');
	  let prmoModelContentWrapper = document.querySelector('.gnav20-promo-ribbon-wrapper .gnav20-modal-content-wrapper');
	  if(prmoModelContentWrapper?.querySelector('.auto-load')) {
		  promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal').style.display = "block";
		  promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon').focus();
		  toggleAriaHiddenGnav20("modal", !0);
		  gnav20.setFocusTrap(document.querySelector(".gnav20-modal-content"));
		  gnav20.activeCloseButton = promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon');
	  } else if(promoElement?.getAttribute('auto-load') == 'yes') {
		  if (promoElement.closest(".gnav20-promo-ribbon")?.querySelector('.gnav20-modal-content-placeholder')
			  && promoElement.closest(".gnav20-promo-ribbon-wrapper")?.querySelector('.gnav20-modal')) {
  
			  promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal-content-wrapper').innerHTML = promoElement.closest(".gnav20-promo-ribbon").querySelector('.gnav20-modal-content-placeholder').innerHTML;
  
			  promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-modal').style.display = "block";
			  promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon').focus();
			  toggleAriaHiddenGnav20("modal", !0);
			  gnav20.setFocusTrap(document.querySelector(".gnav20-modal-content"));
			  gnav20.activeCloseButton = promoElement.closest(".gnav20-promo-ribbon-wrapper").querySelector('.gnav20-promo-close-icon');
		  }
	  }
  
	  let gnavPromoReady = new Event('gnavPromoReady');
	  document.dispatchEvent(gnavPromoReady);
	  console.log('dispatch gnavPromoReady after footer')
  
	  let promoCTACloseEle = document.querySelector(".gnav20-modal-secondary-cta");
	  if(document.querySelector(".gnav20-modal-secondary-cta")){
		  if(document.querySelector(".gnav20-modal-secondary-cta").textContent == 'No Thanks' ||
			  document.querySelector(".gnav20-modal-secondary-cta").textContent == 'Close' ||
			  document.querySelector(".gnav20-modal-secondary-cta").textContent == 'Cancel'){
			  promoCTACloseEle.removeEventListener('click', closePromo);
			  promoCTACloseEle.addEventListener('click', closePromo);
		   }
	  }
  };
  
  gnav20.closePromoOverlay = function (event) {
	  let closeModal = document.querySelector(".gnav20 .gnav20-modal");
	  if (closeModal) {
		  closeModal.style.display = "none";
	  }
	  toggleAriaHiddenGnav20("modal", !1);
	  gnav20.clearFocusTrap();
  }
  gnav20.initSearch = function () {
	  
	  var searchIcon = document.querySelectorAll('.gnav20-search-icon')
	  for (var i = 0; i < searchIcon.length; i++) {
		  searchIcon[i].addEventListener("click", openSearchBar);
	  }
  
	  var searchIconNav = document.querySelectorAll('.gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-nav-search-icon')
	  for (var i = 0; i < searchIconNav.length; i++) {
		  searchIconNav[i].addEventListener("click", openSearchBarFromNav);
		  if(document.querySelector('#gnav20-search-icon')) {
			  searchIconNav[i].setAttribute('data-placeholder-text', document.querySelector('#gnav20-search-icon').getAttribute('data-placeholder-text'))
		  }
	  }
  
	  function openSearchBarFromNav() {
		  if(document.querySelector('.gnav20-desktop .gnav20-search-icon')) {
			  document.querySelector('.gnav20-desktop .gnav20-search-icon').click();
		  }
	  }
	  
	  function openSearchBar(event) {
		  if(window.oneSearchTrigger){ // new search team search api has been initialized
			  setTimeout('window.oneSearchTrigger.click()',10)
			  return
		  }else if(gnav20.bu == 'smb' && gnavdl.yextSearchURL){ // new Yext search experience for VBG
			  initBizSearch(event)
			  return
		  }
  
		  if(gnav20.bu == 'vec' && window.vec_gnav_globalSearch){ // call VEC search method
				window.vec_gnav_globalSearch()
			  return
		  } else  if(gnav20.appid == 'k12'){ // call k12 search method
				openK12Search()
			  return
		  } else { // call new search team api
			  initNewSearchAPI(event)
			  return
		  }
	  }
	  
	  function initNewSearchAPI(event){
		  window.acConfig = { ES:"business",
			  targetEl : "oneSearchContainerGnav", 
			  source: "GNAV", 
			  src: gnav20.bu
		  }
		  var dom = 'https://scache-ws.vzw.com';
		  if(document.getElementById("gnav20-search-context")) {
			  dom = /true/.test(document.getElementById("gnav20-search-context").value) ? 'https://scache-ws.vzw.com' : gnav20.getScriptOrigin();
			  if(window.location.origin.indexOf("ecommstage.verizon.com") > 0) {
				  dom = 'https://scache-ws.vzw.com/stg'
			  } else if (document.getElementById("gnav20-search-context").value == 'true' && gnav20.getCookie('redirect_to').includes("canary")) {
				  dom = 'https://scache-ws.vzw.com/ec'
			  }
		  }
		  var body = document.getElementsByTagName('body')[0]
		  var addDiv = document.createElement('div');
		  addDiv.id = 'oneSearchContainerGnav';
		  addDiv.style.zIndex = 4600;
		  addDiv.style.position = 'absolute';
		  addDiv.style.width = '100%';
		  //addDiv.innerHTML = '<div style="height:100vh;background:black;"></div>';		
		  
		  body.insertBefore(addDiv, body.firstChild);
		  window.oneSearchDiv = addDiv;
  
		  //if(document.querySelector('.gnav20 .gnav20-desktop').offsetHeight){
		  //	document.querySelector('#oneSearchContainerGnav>div').style.marginTop = '35px'
		  //}
					  
		  var addScript1 = document.createElement('script');
		  addScript1.type = 'text/javascript';
		  addScript1.src = dom + '/onedigital/search/build/common/bundle.common.js';
		  addScript1.onload = function(){
			  console.log('bundle common loaded',window.renderAutoSuggest)
		  }
		  document.getElementsByTagName('head')[0].appendChild(addScript1);
  
		  var addScript2 = document.createElement('script');
		  addScript2.type = 'text/javascript';
		  addScript2.src = dom + '/onedigital/search/build/autosuggest/bundle.autosuggest.js';
		  addScript2.onload = function(){
			  console.log('bundle auto loaded',window.renderAutoSuggest)
		  }
		  document.getElementsByTagName('head')[0].appendChild(addScript2);
		  
		  window.searchFileInti = 0
  
		  clearInterval(window.searchFileInt)
  
		  window.searchFileInt = setInterval(function(){
			  if(searchFileInti > 500){clearInterval(window.searchFileInt)}
			  window.searchFileInti ++
			  window.oneSearchTrigger = document.querySelector('#oneSearchContainerGnav button.searchBtn')
			  //console.log(searchFileInti,'--int',!window.renderAutoSuggest , !window.oneSearchTrigger)
			  
			  if(window.renderAutoSuggest && !window.autoRendered){
				  window.renderAutoSuggest(window.acConfig)
				  window.autoRendered = true
				  console.log(searchFileInti,'----int renderAutoSuggest')
			  }
			  
			  if(window.oneSearchTrigger && window.autoRendered){
				  window.oneSearchTrigger.parentElement.style.height = '0'
				  window.oneSearchTrigger.parentElement.style.overflow = 'hidden'
				  window.oneSearchTrigger.click()
				  console.log(searchFileInti,'----int oneSearchTrigger click')
				  clearInterval(window.searchFileInt)
			  }
				  
		  },30)
  
	  }
	  
	  function openK12Search(){
		  var searchDiv = document.createElement('div')
			  searchDiv.innerHTML = '<div style="margin:0 auto; width:calc(100vw - 17px); max-width:1272px; padding: 0 0 0 144px;"><div style="height:64px; background:#FFF; position:relative; top:-60px"></div></div>'+
			  '<div style="height:100vh; background:#FFF; position:relative; top:-60px"><form action="https://www.verizon.com/learning/search" method="GET" class="gnav20-search-para gnav20-search-form" autocomplete="off">'+
			  '<button type="button" id="gnav20-closex-searcher" class="gnav20-close-icon" aria-label="Close Search Modal"></button>'+
			  '<input name="q" class="gnav20-search-inp" placeholder="What are you looking for?"/>'+
			  '<span tabindex="0" class="gnav20-clearInput"  aria-label="clear search form text, button" style="cursor:pointer"></span></form></div>'
			  searchDiv.className = 'gnav20'
			  searchDiv.style = 'position:fixed; width:100vw; height:100vh; z-index:4999; text-align:center; top:60px' 
			  document.body.appendChild(searchDiv)
  
			  var searchBut = document.getElementById('gnav20-closex-searcher')
			  searchBut.addEventListener('click', function(){event.preventDefault();searchDiv.remove()})
			  searchBut.focus()
  
			  var mystyText = '.gnav20 .gnav20-search-para.gnav20-search-form{height:100%; width:100%; max-width:1272px; margin:0 auto;top:0; border:0; position:relative}'+
			  '.gnav20 .gnav20-search-para.gnav20-search-form .gnav20-close-icon{right: 36px; position: absolute; width: 24px; height: 24px;}'+
			  '.gnav20 .gnav20-search-inp{width:80vw; max-width:400px; border-bottom: 2px solid #333; font-size:24px; top: 48px; position: absolute; right: 36px; padding: 0 0 12px 0; background:#FFF !important}'+
			  '.gnav20 .gnav20-clearInput:focus{outline:1px dashed black;outline-offset:2px}'
			  var mysty = document.createElement('style')
			  mysty.textContent = mystyText
			  document.head.appendChild(mysty)
			  var clearMe = document.querySelector('.gnav20 .gnav20-search-form .gnav20-clearInput')
			  clearMe && ['click','keydown'].forEach( function(evt) {clearMe.addEventListener(evt, function(){clearMe.previousElementSibling.value="";if(event.key == "Tab"){document.getElementById('gnav20-closex-searcher').focus()}}, false);});
  
	  }
	  
	  // add click div to body for desktop open search menu
	  var clickDiv = document.createElement('div')
	  clickDiv.classList.add('gnav20-click-div')
	  document.body.appendChild(clickDiv)
	  
  }  
	
  //*******************************************
  //Polyfill for IE
  
  if (!Element.prototype.matches) {
	  Element.prototype.matches = Element.prototype.msMatchesSelector ||
		  Element.prototype.webkitMatchesSelector;
  }
  
  if (!Element.prototype.closest) {
	  Element.prototype.closest = function (s) {
		  var el = this;
		  do {
			  if (el.matches(s)) return el;
			  el = el.parentElement || el.parentNode;
		  } while (el !== null && el.nodeType === 1);
		  return null;
	  };
  }
  
  
  //Eyebrow position - mobile
  function mobilelabelposition() {
	  var xc = document.querySelectorAll(".gnav20-mobile .gnav20-eyebrow-links-list-item.gnav20-more")
	  var vyc = document.querySelector(".gnav20-mobile  .gnav20-eyebrow-link-list-item.gnav20-more");
	  if (vyc) {
		  var vy = vyc.children;
		  if (vy.length > 2) {
			  var p = 1;
			  for (var i = 0; i < vy.length; i++) {
				  if (!vy[i].classList.contains("gnav20-selected")) {
					  vy[i].classList.add("gnav20-nonselcted" + p);
					  p = p + 1;
				  }
			  }
		  }
	  }
  
	  if (xc != undefined && xc.length > 0) {
		  var xc = document.querySelectorAll(".gnav20-mobile .gnav20-eyebrow-links-list-item.gnav20-more")
		  var xpos = 0;
		  for (var p = 0; p <= (xc[0].children.length) - 1; p++) {
			  if (!(xc[0].children[p].classList.contains("gnav20-selected"))) {
				  xc[0].children[p].style.left = xpos + "%";
				  xpos = xpos + 50;
			  }
		  }
	  }
  } 
  //*******************************************
  //Language Mobile Content 
  function laguageMenuToggle(event) {
	  var eTarget = event.target || this;
	  if (eTarget.closest('.gnav20-language-box') && eTarget.closest('.gnav20-language-box').querySelector('.gnav20-dropdown-menu')) {
		  if (eTarget.closest('.gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.contains("gnav20-hide")) {
			  signinContentHide();
			  storeContentHide();
			  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.add("gnav20-hide");
			  eTarget.closest('.gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.remove("gnav20-hide");
			  if (window.innerWidth < 1272) {
				  eTarget.closest('.gnav20-mobile .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.add("gnav20-open-menu");
				  document.querySelector(".gnav20-vzhmoverlay").classList.toggle('gnav20-menuop');
			  }
		  } else {
			  languageContentHide();
			  MenuContentBack();
			  var element = document.querySelectorAll(".gnav20-mobile .gnav20-visibilty-hidden");
			  if (window.innerWidth < 1272 && eTarget.closest('.gnav20-mobile .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.contains("gnav20-open-menu")) {
				  eTarget.closest('.gnav20-mobile  .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.remove("gnav20-open-menu");
				  document.querySelector(".gnav20-vzhmoverlay").classList.toggle('gnav20-menuop');
			  }
			  for (var i = 0; i < element.length; i++) {
				  element[i].classList.remove("gnav20-visibilty-hidden");
			  }
		  }
	  }
  }
  
  function mobileLwindowclose(event) {
		  var eTarget = event.target || this;
	  if (eTarget.closest('.gnav20-mobile .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.contains("gnav20-open-menu")) {
		  eTarget.closest('.gnav20-mobile .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.remove("gnav20-open-menu");
		  eTarget.closest('.gnav20-mobile .gnav20-language-box').querySelector('.gnav20-dropdown-menu').classList.add("gnav20-hide");
		  document.querySelector(".gnav20-vzhmoverlay").classList.toggle('gnav20-menuop');
		  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.remove("gnav20-hide");
	  }
  }
  
  
  
  
  
  //*******************************************
  function signinToggleForMobile() {
	  var signinmobiled = document.querySelectorAll(".gnav20-mobile .gnav20-account-utility .gnav20-dropdown-menu")
	  if((signinmobiled.length > 0) && (signinmobiled[0].classList.contains("gnav20-hide"))){
		  languageContentHide();
		  if(!signinmobiled[0].closest('.gnav20-stacked-utility')){
			  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.add("gnav20-hide");
		  }else{
			  document.querySelector("#gnav20-mobile-menu .gnav20-eyebrow").classList.add("gnav20-hide");
		  }
		  
		  signinmobiled[0].classList.remove("gnav20-hide");
	  } else {
		  signinContentHide();
		  storeContentHide();
		  MenuContentBack();
		  var element = document.querySelectorAll(".gnav20-mobile .visibilty-hidden");
		  for (var i = 0; i < element.length; i++) {
			  element[i].classList.remove("gnav20-visibilty-hidden");
		  }
	  }
  
	  if (document.querySelector(".gnav20-mobile #footerlink .gnav20-footerStores") !== null) {
		  for (var i = 0; i < document.querySelectorAll(".gnav20-mobile #gnav20-footerlink .gnav20-footerStores").length; i++) {
			  document.querySelectorAll(".gnav20-mobile #gnav20-footerlink .gnav20-footerStores")[i].classList.add("gnav20-hide");
		  }
	  }
	  toggleAriaHiddenGnav20("signin", !0); 
	  gnav20.toggleMobileSignInHideEls('none')
	  gnav20.setFocusTrap(gnav20.mobileMenu)
	  if (document.querySelector(".gnav20-mobile #gnav20-mobile-menu .gnav20-dropdown-menu .gnav20-goback .gnav20-back-to-menu")) {
		  document.querySelector(".gnav20-mobile #gnav20-mobile-menu .gnav20-dropdown-menu .gnav20-goback .gnav20-back-to-menu").focus();
	  }
  }
  //*******************************************
  //Signin Mobile Content Hideback
  function languageContentHide() {
	  document.querySelector(".gnav20-mobile #gnav20-ulwrapper").classList.add("gnav20-hide");
	  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.remove("gnav20-hide");
  }
  //*******************************************
  //Signin Mobile Content Hideback
  function signinContentHide() {
	  var x = document.querySelectorAll(".gnav20-mobile .gnav20-dropdown-menu"),
			  eyebrow = document.querySelector("#gnav20-mobile-menu .gnav20-eyebrow");
			  
	  for (i = 0; i < x.length; i++) {
			 x[i].classList.add("gnav20-hide")
		}
	  if(eyebrow){eyebrow.classList.remove("gnav20-hide");}
	  
	  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.remove("gnav20-hide");
	  toggleAriaHiddenGnav20("signin", !1); 
	  gnav20.toggleMobileSignInHideEls('block')      
	  gnav20.clearFocusTrap(gnav20.mobileMenu)
	  if (document.querySelector(".gnav20-mobile #gnav20-mobile-menu #gnav20-footerlink .gnav20-account-utility .gnav20-sign-in")) {
		  document.querySelector(".gnav20-mobile #gnav20-mobile-menu #gnav20-footerlink .gnav20-account-utility .gnav20-sign-in").focus();
	  }
  }
  //*******************************************
  //Stores Mobile Content Hideback 
  function storeContentHide() {
	  var e =  document.querySelectorAll(".gnav20-mobile .gnav20-stores-list")
	  for (i=0;i<e.length; i++){
		  e[i].classList.add("gnav20-hide");    
	  }
	  
	  document.querySelector("#gnav20-mobile-menu #gnav20-ulwrapper").classList.remove("gnav20-hide");
	 // toggleAriaHiddenGnav20("signin", !1);
	//  if (document.querySelector(".gnav20-mobile #gnav20-mobile-menu #gnav20-footerlink .gnav20-account-utility .gnav20-sign-in")) {
	  //    document.querySelector(".gnav20-mobile #gnav20-mobile-menu #gnav20-footerlink .gnav20-account-utility .gnav20-sign-in").focus();
	 // }
  }
  //*******************************************
  //Signin Mobile Content Hideback
  function completeMenuhide() {
	  if (winWidth <= 1272) {
		  var cg = document.querySelectorAll("#gnav20-mobile-menu .gnav20-global-nav-list");
		  cg[0].classList.add("gnav20-hide");
	  }
  }
  
  function completeMenuShow() {
	  if (winWidth <= 1272) {
		  var cg = document.querySelectorAll("#gnav20-mobile-menu .gnav20-global-nav-list");
		  cg[0].classList.remove("gnav20-hide");
	  }
  }
  //*******************************************
  
  //*******************************************
  //Mobile Menu content Getback
  function MenuContentBack() {
	  var x = document.querySelectorAll(".gnav20-dont-show-in-mobile");
	  for (i = 0; i < x.length; i++) {
		  x[i].classList.remove("gnav20-dont-show-in-mobile");
		  x[i].style.display = 'block';
	  }
	  x = document.querySelectorAll(".gnav20-current");
	  for (i = 0; i < x.length; i++) {
		  x[i].classList.remove("gnav20-current");
	  }
	  x = document.querySelectorAll(".gnav20-autoflow");
	  for (i = 0; i < x.length; i++) {
		  x[i].classList.remove("gnav20-autoflow");
	  }
	  x = document.querySelectorAll(".gnav20-mobile .gnav20-sub-menu");
	  for (i = 0; i < x.length; i++) {
		  x[i].style.display = "none";
	  }
	  x = document.querySelectorAll(".gnav20-mobile .gnav20-submenu-column.gnav20-L2");
	  for (i = 0; i < x.length; i++) {
		  x[i].style.display = "none";
	  }
	  x = document.querySelectorAll(".gnav20-mobile .gnav20-submenu-column.gnav20-L3");
	  for (i = 0; i < x.length; i++) {
		  x[i].style.display = "none";
	  }
	  x = document.querySelectorAll("ul.gnav20-submenu-column.gnav20-L1 > li.gnav20-current");
	  for (i = 0; i < x.length; i++) {
		  x[i].style.display = "unset";
	  }
	  
	  x = document.querySelectorAll(".gnav20-mobile .gnav20-goback");
	  for (i = 0; i < x.length; i++) {
		  x[i].removeAttribute("style")
	  }
	  
	  x = document.querySelector(".gnav20-mobile .gnav20-sub-lob-box .gnav20-dropdown-menu");
	  if (x && !x.classList.contains ("gnav20-hide")) {
		  x.classList.add("gnav20-hide");
	  }
	  
	  var lobLink = document.querySelector(".gnav20-mobile .gnav20-sub-lob-box .gnav20-sub-lob");
	  if (lobLink && lobLink.classList.contains("gnav20-hide")) {
		  lobLink.classList.remove("gnav20-hide");
	  }
  
  }
  
  //*******************************************
  
  function megaAnimation(selectedMenu){
	  window.megaColumns = selectedMenu.querySelectorAll("[class*='offRight']");
	  
	  setTimeout(function(){
		  var col = 0;
		  for (i = 0; i < window.megaColumns.length; i++){	
			  window.megaColumns[i].classList.add('column' + col + '-transLeft');	
			  col++;					
		  }
	  },100)
  }
  
  /* this polyfill should no longer be needed. commenting on 7/23/2024	
  //polyfill for IE
  (function () {
	if ( typeof window.CustomEvent === "function" ) return false; //If not IE
	function CustomEvent ( event, params ) {
	  params = params || { bubbles: false, cancelable: false, detail: undefined };
	  var evt = document.createEvent( 'CustomEvent' );
	  evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
	  return evt;
	 }
	CustomEvent.prototype = window.Event.prototype;
	window.CustomEvent = CustomEvent;
  })();
  */
  
  function toggleMenuL1(event) {
	  event.preventDefault()
	  var eTarget = event.target || this;
	  if(eTarget.getAttribute('aria-expanded') == "false") {
		  document.querySelector('.gnav20 .gnav20-desktop .gnav20-logo').style.zIndex = 4505 // logo is no longer aria-hidden with L1 open
		  document.querySelector('.gnav20 .gnav20-desktop .gnav20-logo').style.position = 'relative'
		  openMenuL1(event);
		  
	  } else {
		  if(event.target.closest(".gnav20-featured-card")){
			  document.querySelector('.gnav20 .gnav20-desktop .gnav20-logo').style.zIndex = '' // logo is no longer aria-hidden with L1 open
			  closeMenuL1(event);
		  }
	  }
  }
  
  function openMenuL1(event) {
	  if(event && event.target.closest('.gnav20-desktop')){
		  gnav20.signInCloseMenu()
		  gnav20.closeCart()
	  }
	  toggleAriaHiddenGnav20("L1", !0);
	  
	  var eTarget = event.target || this;
	  var myL2 = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) .gnav20-submenu-column.gnav20-L2")
	  for (i = 0; i < myL2.length; i++) {
		  myL2[i].style.display = 'none';
	  }
	  
	  var myL3 = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) .gnav20-submenu-column.gnav20-L3")
	  for (i = 0; i < myL3.length; i++) {
		  myL3[i].style.display = 'none';
	  }
	  
	  //var myL2Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card:not(.gnav20-featured-grouping) li.gnav20-Level-2 > a.gnav20-subanchor.gnav20-haschild")
	  var myL2Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card:not(.gnav20-featured-grouping) ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild")
	  for (i = 0; i < myL2Links.length; i++) {
		  myL2Links[i].classList.remove('gnav20-open');
		  myL2Links[i].setAttribute('aria-expanded',false);
	  }
	  
	  //var myL3Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card:not(.gnav20-featured-grouping) li.gnav20-Level-3 > a.gnav20-subanchor.gnav20-haschild")
	  var myL3Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card:not(.gnav20-featured-grouping) ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild")
	  for (i = 0; i < myL3Links.length; i++) {
		  myL3Links[i].classList.remove('gnav20-open');
		  myL3Links[i].setAttribute('aria-expanded',false);
	  }
	  
	  if(event.target.closest(".gnav20-featured-card") && event.target.closest(".gnav20-desktop")){
		  var L1FeaturedCard = event.target.closest(".gnav20-featured-card").querySelectorAll(".gnav20-desktop .gnav20-featured-card .gnav20-left-featured-card, .gnav20-desktop .gnav20-featured-card .gnav20-right-featured-card")
		  for (i = 0; i < L1FeaturedCard.length; i++) {
			  L1FeaturedCard[i].style.display = 'block';
		  }
		  
		  /*
		  if(event.target.closest(".gnav20") && !event.target.closest(".gnav20").classList.contains("gnav20-sticky")) {
			  event.target.closest(".gnav20").classList.add("gnav20-sticky");
			  event.target.closest(".gnav20").classList.add("stickyadded");			
		  }
		  */
		  
		  document.body.classList.add("gnav20-no-scroll");		
		  
		  gnav20.activeCloseButton = event.target.closest(".gnav20-featured-card").querySelector('.gnav20-nav-close')
	  }
	  
	  
	  if(event.target.closest(".gnav20-L1-aligned") && event.target.closest(".gnav20-desktop")){
		  if(event.target.closest(".gnav20-L1-aligned").classList.contains("gnav20-featured-card") && event.target.closest(".gnav20-L1-aligned").querySelector(".gnav20-content-wrapper")){
			  event.target.closest(".gnav20-L1-aligned").querySelector(".gnav20-content-wrapper").style.marginLeft = (event.target.offsetLeft) + 'px';
		  } else if (event.target.closest(".gnav20-L1-aligned").querySelector(".gnav20-content-wrapper") ) {
			  event.target.closest(".gnav20-L1-aligned").querySelector(".gnav20-content-wrapper").style.marginLeft = (event.target.offsetLeft - 40) + 'px';
		  }
	  }
		  
	  // *************************************************************************
	  // Menu Animation Start
	  // *************************************************************************
	  if (eTarget.closest(".gnav20-desktop") && eTarget.closest(".gnav20-primary-menu") && eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu")) {
			  var buttons = eTarget.closest('.gnav20-global-nav-list.gnav20-navigation-list').querySelectorAll('button.gnav20-menu-label-button')
			  for (i = 0; i < buttons.length; i++){
				  buttons[i].setAttribute('aria-expanded',false)
			  }
			  
  
		  var selectedMenu = eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu"),
				  main;
		  selectedMenu.style.display = "flex";
		  eTarget.setAttribute('aria-expanded', 'true');
		  //eTarget.focus();
		  //console.log('tried to set focus on target')
		  /*
		  if(main = eTarget.closest(".gnav20-main")){
			  main.classList.add('gnav20-nav-open')
		  }			
		  */
		  var menuElements = document.querySelectorAll('.gnav20-desktop .gnav20-sub-menu');
		  for (i = 0; i <= menuElements.length - 1; i++) {
			  if (menuElements[i] != selectedMenu) {
				  menuElements[i].style.display = "none"
			  }
		  }
  
		  window.selectedMenu = selectedMenu
		  setTimeout(function () {
			  var mega = window.selectedMenu.closest('.gnav20-mega-drawer'),
					  addClass = mega ? 'gnav20-mega-active' : 'gnav20-grouping-active',
					  main = eTarget.closest(".gnav20-main");
			  window.selectedMenu.style.display = "flex";
			  window.selectedMenu.classList.add(addClass)
			  window.selectedMenu.querySelector('.gnav20-content-wrapper').classList.add(addClass);
			  
			  if(eTarget.closest(".gnav20-featured-card") && !eTarget.closest(".gnav20-featured-grouping")){			
				  window.selectedMenu.querySelector('.gnav20-featured-card-top-label').classList.add("gnav20-column-highlight");
				  window.selectedMenu.querySelector('.gnav20-submenu-column').classList.add("gnav20-column-highlight");
			  }
  
			  if(mega){
				  megaAnimation(window.selectedMenu)
			  }
			  
			  var qString = '.gnav20-sub-menu .'+ addClass;
						  if(document.querySelector('.gnav20.gnav20-sticky .gnav20-sticky-content') &&  document.querySelector(qString) && window.innerHeight < document.querySelector(qString).offsetHeight + document.querySelector('.gnav20.gnav20-sticky .gnav20-sticky-content').offsetHeight){
							  document.querySelector('.gnav20.gnav20-sticky .gnav20-sticky-content').style.position = 'static';
							  //this is messing up sticky skinnyNav and is likely no longer necessary
							  window.scrollTo(0,0)
						  }  
								  
		  }, 10);
  
		  if (eTarget.closest(".gnav20-mega-drawer")) {
			  gnav20.l1Target = eTarget;
			  var mymegaL2 = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L1 > li > a")
			  for (i = 0; i < mymegaL2.length; i++) {
				  mymegaL2[i].classList.remove('gnav20-open');
				  mymegaL2[i].setAttribute('aria-expanded','false');
			  }
  
			  var myL2Menu = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-submenu-column.gnav20-L2")
			  for (i = 0; i < myL2Menu.length; i++) {
				  myL2Menu[i].style.display = 'none';
			  }
  
			  setTimeout( function () {
				  var mouseevent = new CustomEvent('mouseover', {
					  'view': window,
					  'bubbles': true,
					  'cancelable': true
				  });
				  var firstElement = selectedMenu.querySelector("ul.gnav20-submenu-column.gnav20-L1 > li:not(.gnav20-hide-on-desktop)");
				  if(firstElement) {
					  var element = firstElement.querySelector("a.gnav20-haschild");
					  if(element) {
						  var container = document.querySelector('.gnav20-desktop .gnav20-mega-drawer .gnav20-submenu-column'),
								  maxColHeight = 460;
						  element.dispatchEvent(mouseevent);
						  element.classList.add('gnav20-open');
						  if(container){
							  container.removeAttribute('style')
						  }
						  var ul = element.parentElement.querySelectorAll('ul');
						  for (i = 0; i <= ul.length - 1; i++) {
							  ul[i].style.display = 'block';
							  if(container && ul[i].offsetHeight > maxColHeight){
								  maxColHeight = ul[i].offsetHeight;
								  container.style.height = maxColHeight + 40 + 'px';
								  if(container.closest('.gnav20-sub-menu')){
									  container.closest('.gnav20-sub-menu').style.maxHeight = maxColHeight + 200 + 'px';
								  }
							  }
						  }
					  }
				  }
				  gnav20.l1Target.focus();
			  }, 100);
		  }
  
	  } else { // Mobile code below
		  var cg = document.querySelectorAll("#gnav20-mobile-menu .gnav20-global-nav-list");
		  for (i = 0; i < cg.length; i++) {
			  cg[i].classList.add("gnav20-non-header");
		  }
		  x = document.querySelectorAll(".gnav20-mobile .gnav20-submenu-column ul.gnav20-submenu-column.gnav20-L1 > li");
		  if (eTarget.closest(".gnav20-mobile").querySelector(".gnav20-autoflow")) {
			  eTarget.closest(".gnav20-mobile").querySelector(".gnav20-autoflow").classList.remove("gnav20-autoflow");
		  }
		  eTarget.closest(".gnav20-mobile .gnav20-primary-menu").querySelector(".gnav20-sub-menu").classList.add("gnav20-autoflow");
		  for (i = 0; i < x.length; i++) {
			  x[i].style.display = "block";
		  }
		  if (eTarget.nextElementSibling != null) {
			  eTarget.nextElementSibling.setAttribute('aria-expanded', 'true');
			  window.mySubMenuTarget = eTarget.nextElementSibling;
			  setTimeout('window.mySubMenuTarget.focus()', 4)
		  }
  
		  var sel_eyebrow = document.querySelectorAll(".gnav20-mobile .gnav20-eyebrow .gnav20-main-header.gnav20-selected");
		  for (i = 0; i < sel_eyebrow.length; i++) {
			  sel_eyebrow[i].style.display = "none";
		  }
		  eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu").style.display = "block"
		  var x = eTarget.closest(".gnav20-mobile").querySelectorAll(".gnav20-primary-menu");
		  for (i = 0; i < x.length; i++) {
			  x[i].classList.add("gnav20-dont-show-in-mobile");
		  }
		  eTarget.closest(".gnav20-primary-menu").classList.add("gnav20-current");
		  eTarget.closest(".gnav20-primary-menu").classList.remove("gnav20-dont-show-in-mobile");
		  
		  gnav20.mobileMenu = document.getElementById('gnav20-mobile-menu')
		  gnav20.mobileMenu.classList.add('gnav20-openL1')
		  gnav20.setFocusTrap(gnav20.mobileMenu)
		  
		  
		  
		  if(event){
			  event.preventDefault();
			  event.stopPropagation();	
		  }
	  }
  }
  
  function menuL2ToggleOnSpaceKey(event){
	  if(event !== undefined && event.keyCode !== null &&  event.keyCode=== 32){
		  eTarget.click();
	  }
  }
  
  function toggleMenuL2(event) {
	  event.preventDefault()
	  var eTarget = event.target || this;
	  if(eTarget.getAttribute('aria-expanded') == "false") {
		  openMenuL2(event);
	  } else {
		  if(event.target.closest(".gnav20-featured-card")){
			  closeMenuL2(event);
		  }
	  }
  }
  
  function columnHighlight2(event, highlight){
	  var list = event.target.closest('ul'),
			  highlight = highlight ? 'add' : 'remove'
	  list.classList[highlight]('gnav20-column-highlight');
	  if(list.previousElementSibling) {		
		  list.previousElementSibling.classList[highlight]('gnav20-column-highlight');
	  }
  }
  
  function openMenuL2(event) {
	  if(gnav20.megaL2hover && gnav20.megaL2hover.parentElement && gnav20.megaL2hover.parentElement  != gnav20.megaL2hover.parentElement.parentElement.querySelector(':hover') && window.getComputedStyle(gnav20.mobileHeader).getPropertyValue('display')=='none'){
		  return
	  }  
	  var eTarget;
	  if(event && event.target){
		  gnav20.megaL2hover = null;
		  eTarget = event.target
		  if(event?.target?.closest('.gnav20-desktop')) {
			  gnav20.activeL2=event.target;
		  }
	  }else{
		  eTarget = gnav20.megaL2hover ? gnav20.megaL2hover : this;
	  }  
	  var myL2 = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-isactive > li > a, .gnav20-desktop .gnav20-featured-card .gnav20-isactive > li > a.gnav20-haschild")
	  for (i = 0; i < myL2.length; i++) {
		  myL2[i].classList.remove('gnav20-open');
		  myL2[i].setAttribute('aria-expanded','false');
	  }
	  
	  var myL3Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild")
	  for (i = 0; i < myL3Links.length; i++) {
		  myL3Links[i].classList.remove('gnav20-open');
		  myL3Links[i].setAttribute('aria-expanded','false');
	  }
	  
	  if(eTarget.classList){
		  eTarget.classList.add('gnav20-open');
	  eTarget.setAttribute('aria-expanded','true');
		  eTarget.focus();
	  }
	  
	  if(eTarget.closest && eTarget.closest(".gnav20-featured-card")){
		  var L1FeaturedCard = event.target.closest(".gnav20-featured-card").querySelectorAll(".gnav20-featured-card .gnav20-L2-featured-card")
		  for (i = 0; i < L1FeaturedCard.length; i++) {
			  L1FeaturedCard[i].style.display = 'block';
		  }
		  columnHighlight2(event, false)
	  }
	  
	  var myL2Menu = event.target.closest(".gnav20-primary-menu").querySelectorAll(".gnav20-submenu-column.gnav20-L2")
	  for (i = 0; i < myL2Menu.length; i++) {
		  myL2Menu[i].style.display = 'none';
	  }
  
	  var myL3 = event.target.closest(".gnav20-primary-menu").querySelectorAll(".gnav20-submenu-column.gnav20-L3")
	  for (i = 0; i < myL3.length; i++) {
		  myL3[i].style.display = 'none';
	  }
  
	  if(eTarget.closest && eTarget.closest(".gnav20-featured-card")){
		  var L1FeaturedCard = event.target.closest(".gnav20-featured-card").querySelectorAll(".gnav20-featured-card .gnav20-left-featured-card, .gnav20-desktop .gnav20-featured-card .gnav20-right-featured-card")
		  for (i = 0; i < L1FeaturedCard.length; i++) {
			  L1FeaturedCard[i].style.display = 'none';
		  }
	  }
	  
	  if (eTarget.closest && eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelector(".gnav20-submenu-column.gnav20-L2")) {
		  var myL3Columns =  eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelectorAll(".gnav20-submenu-column.gnav20-L2"),
				  container = maxColHeight = document.querySelector('.gnav20-desktop .gnav20-mega-drawer .gnav20-submenu-column'),
				  maxColHeight = 460;
		  if(container){
			  container.removeAttribute('style')
		  }
		  for (i = 0; i < myL3Columns.length; i++) {
			  myL3Columns[i].style.display = 'block';
			  if(eTarget.closest(".gnav20-featured-card")){
				  myL3Columns[i].classList.add("gnav20-column-highlight");
			  }
			  if(container && myL3Columns[i].offsetHeight > maxColHeight){
				  maxColHeight = myL3Columns[i].offsetHeight;
				  container.style.height = maxColHeight + 40 + 'px';
				  if(container.closest('.gnav20-sub-menu')){
					  container.closest('.gnav20-sub-menu').style.maxHeight = maxColHeight + 200 + 'px';
				  }
			  }
		  }
		  
		  if (eTarget.closest(".gnav20-submenu-column")) {			
			  eTarget.closest(".gnav20-submenu-column").classList.add("gnav20-isactive");
		  }		
		  
		  if (eTarget.closest(".gnav20-mobile")) {
			  var x = eTarget.closest(".gnav20-primary-menu").querySelectorAll("ul.gnav20-submenu-column.gnav20-L1 > li");
			  var y = eTarget.closest(".gnav20-submenu-column").querySelectorAll("ul.gnav20-submenu-column.gnav20-L1 > li");
			  eTarget.closest(".gnav20-mobile").querySelector(".gnav20-autoflow").classList.remove("gnav20-autoflow");
			  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector(".gnav20-L2-content-wrapper").classList.add("gnav20-autoflow");
			  for (i = 0; i < y.length; i++) {
				  y[i].style.display = "none";
			  }
			  eTarget.parentElement.style.display = "block";
			  eTarget.closest(".gnav20-primary-menu.gnav20-current").querySelector(".gnav20-goback").style.display = "none";
			  for (i = 0; i < x.length; i++) {
				  x[i].classList.add("gnav20-dont-show-in-mobile");
			  }
			  eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").classList.add("gnav20-current");
			  eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").classList.remove("gnav20-dont-show-in-mobile");
			  eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-goback").classList.add("gnav20-dont-show-in-mobile");
			  if(eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li") && eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-goback") ){
				  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-goback").setAttribute('aria-expanded','true');
				  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-goback").focus();
			  }
			  
			  gnav20.setFocusTrap(gnav20.mobileMenu)
			  
			  if(event){
					  event.preventDefault();
					  event.stopPropagation();
			  }
		  }
	  }
  }
  
  function toggleMenuL3(event) {
	  event.preventDefault()
	  var eTarget = event.target || this;
	  if(eTarget.getAttribute('aria-expanded') == "false") {
		  openMenuL3(event);
	  } else {
		  if(event.target.closest(".gnav20-featured-card")){
			  closeMenuL3(event);
		  }
	  }
  }
  
  
  function openMenuL3(event) {
	  var eTarget = event.target || this;
	  if(event?.target?.closest('.gnav20-desktop')) {
		  gnav20.activeL3=event?.target;
	  }
	  if (eTarget && eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").querySelector(".gnav20-submenu-column.gnav20-L3")) {
		  var currentElementL2 = eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li.gnav20-current");
		  if(currentElementL2 && currentElementL2.querySelector(".gnav20-goback")){
			  currentElementL2.querySelector(".gnav20-goback").style.display="none";
		  }
		  
		  var myL3 = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-submenu-column.gnav20-L3")
		  for (i = 0; i < myL3.length; i++) {
			  myL3[i].style.display = 'none';
		  }
		  
		  if(event.target.closest(".gnav20-featured-card")){
			  var L2FeaturedCard = event.target.closest(".gnav20-featured-card").querySelectorAll(".gnav20-featured-card .gnav20-L2-featured-card")
			  for (i = 0; i < L2FeaturedCard.length; i++) {
				  L2FeaturedCard[i].style.display = 'none';
			  }
			  columnHighlight2(event, false)
		  }
		  
		  
		  var myL2Links = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild")
		  for (i = 0; i < myL2Links.length; i++) {
			  myL2Links[i].classList.remove('gnav20-open');
			  myL2Links[i].setAttribute('aria-expanded','false');
		  }		
		  eTarget.classList.add('gnav20-open');
		  eTarget.setAttribute('aria-expanded','true');
		  
		  var myL3Links = eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").querySelectorAll(".gnav20-submenu-column.gnav20-L3");
		  for (i = 0; i < myL3Links.length; i++) {
			  myL3Links[i].style.display = "block";
			  if(eTarget.closest(".gnav20-featured-card")){
				  myL3Links[i].classList.add("gnav20-column-highlight");
			  }
		  }
		  
		  
		  if (eTarget.closest(".gnav20-mobile")) {
			  let x = eTarget.closest(".gnav20-primary-menu").querySelectorAll("ul.gnav20-submenu-column.gnav20-L2 > li");
			  for (i = 0; i < x.length; i++) {
				  x[i].classList.add("gnav20-dont-show-in-mobile");
			  }
			  eTarget.closest(".gnav20-L2").classList.add('gnav20-submenu-open')
			  eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").classList.add("gnav20-current");
			  eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").classList.remove("gnav20-dont-show-in-mobile");
			  eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelector(".gnav20-goback").classList.add("gnav20-dont-show-in-mobile");
			  if(eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li") && eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li").querySelector("a.gnav20-goback") ){
				  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li").querySelector("a.gnav20-goback").setAttribute('aria-expanded','true');
				  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li").querySelector("a.gnav20-goback").focus();
			  }
			  
			  gnav20.setFocusTrap(gnav20.mobileMenu)
			  
			  if(event){
					  event.preventDefault();
					  event.stopPropagation();
			  }
		  }
	  }
  }
  
  function goBackToL1(event) {
	  var eTarget = event.target || this;
	  if (eTarget.closest(".gnav20-mobile") && eTarget.closest(".gnav20-primary-menu") && eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu")) {
		  eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu").style.display = "none";
		  var sel_eyebrow = document.querySelectorAll(".gnav20-mobile .gnav20-eyebrow .gnav20-main-header.gnav20-selected");
		  eTarget.closest(".gnav20-mobile").querySelector(".gnav20-autoflow").classList.remove("gnav20-autoflow");
		  var cg = document.querySelectorAll("#gnav20-mobile-menu .gnav20-global-nav-list");
		  for (i = 0; i < cg.length; i++) {
			  cg[i].classList.remove("gnav20-non-header");
		  }
		  for (i = 0; i < sel_eyebrow.length; i++) {
			  sel_eyebrow[i].style.display = "block";
		  }
		  var x = eTarget.closest(".gnav20-mobile").querySelectorAll(".gnav20-primary-menu");
		  for (i = 0; i < x.length; i++) {
			  x[i].classList.remove("gnav20-dont-show-in-mobile");
			  x[i].classList.remove("gnav20-current");
		  }
		  if (eTarget.previousElementSibling != null && eTarget.previousElementSibling.previousElementSibling != null) {
			  eTarget.previousElementSibling.previousElementSibling.setAttribute('aria-expanded', 'false');
			  window.myMenuBackTarget = eTarget.previousElementSibling.previousElementSibling;
			  setTimeout('window.myMenuBackTarget.focus()', 10)
		  }
		  
		  document.getElementById('gnav20-mobile-menu').classList.remove('gnav20-openL1')
		  gnav20.setFocusTrap(gnav20.mobileMenu)
		  
		  if(event){
			  event.preventDefault();
			  event.stopPropagation();
		  }
	  }
  }
  
  function goBackToL2(event) {
	  var eTarget = event.target || this;
	  if (eTarget.closest(".gnav20-mobile") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelector(".gnav20-submenu-column.gnav20-L2")) {
		  var l2SubMenu = eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelectorAll(".gnav20-submenu-column.gnav20-L2");
		  for (i = 0; i < l2SubMenu.length; i++) {
			  l2SubMenu[i].style.display = "none";
		  }
		  
		  eTarget.closest(".gnav20-mobile").querySelector(".gnav20-autoflow").classList.remove("gnav20-autoflow");
		  eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-sub-menu").classList.add("gnav20-autoflow");
		  if (eTarget.closest(".gnav20-submenu-column")) {
			  eTarget.closest(".gnav20-submenu-column").classList.remove("gnav20-isactive");
			  var allColumns = eTarget.closest(".gnav20-submenu-column").parentElement.children;
			  for (i = 0; i < allColumns.length; i++) {
				  allColumns[i].style.display = "block";
			  }			
		  }
		  var x = eTarget.closest(".gnav20-mobile").querySelectorAll("ul.gnav20-submenu-column.gnav20-L1 > li");
		  eTarget.style.display="";
		  var y = eTarget.closest(".gnav20-submenu-column").querySelectorAll("ul.gnav20-submenu-column.gnav20-L1 > li");
		  for (i = 0; i < y.length; i++) {
			  y[i].style.display = "block";
		  }
		  eTarget.closest(".gnav20-primary-menu.gnav20-current").querySelector(".gnav20-goback").style.display = "";
  
		  for (i = 0; i < x.length; i++) {
			  x[i].classList.remove("gnav20-dont-show-in-mobile");
			  x[i].classList.remove("gnav20-current");
		  }
		  eTarget.closest(".gnav20-primary-menu").querySelector(".gnav20-goback").classList.remove("gnav20-dont-show-in-mobile");
		  if(eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li") && eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-goback") ){
			  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-goback").setAttribute('aria-expanded','false');
			  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-haschild").setAttribute('aria-expanded','false');
			  eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-haschild").focus();
		  }
		  
		  gnav20.setFocusTrap(gnav20.mobileMenu)
		  
		  if(event){
			  event.preventDefault();
			  event.stopPropagation();
		  }
	  }
  }
  function goBackToL3(event) {
	  if(event){
		  event.preventDefault();
		  event.stopPropagation();
	  }
	  var eTarget = event.target || this;
	  if (eTarget && eTarget.closest(".gnav20-mobile") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li") && eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").querySelector(".gnav20-submenu-column.gnav20-L3")) {
		  eTarget.closest("ul.gnav20-submenu-column.gnav20-L2 > li").querySelector("ul.gnav20-submenu-column.gnav20-L3").style.display = "none";
		  var currentElementL2 = eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li.gnav20-current");
			  if(currentElementL2 && currentElementL2.querySelector(".gnav20-goback")){
			  currentElementL2.querySelector(".gnav20-goback").style.display="block";
			  eTarget.closest(".gnav20-L2").classList.remove('gnav20-submenu-open');
		  }
		  var x = eTarget.closest(".gnav20-mobile").querySelectorAll("ul.gnav20-submenu-column.gnav20-L2 > li");
		  for (i = 0; i < x.length; i++) {
			  x[i].classList.remove("gnav20-dont-show-in-mobile");
			  x[i].classList.remove("gnav20-current");
		  }
		  eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelector(".gnav20-goback").classList.remove("gnav20-dont-show-in-mobile");
		  
		  var navList = eTarget.closest(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li")
		  if(navList && navList.querySelector("a.gnav20-goback") ){
			  navList.querySelector("a.gnav20-goback").setAttribute('aria-expanded','false');
			  navList.querySelector("a.gnav20-haschild").setAttribute('aria-expanded','false');
			  navList.querySelector("a.gnav20-haschild").focus();
		  }
		  
		  gnav20.setFocusTrap(gnav20.mobileMenu)
		  
	  }
  }
  
  function closeMenuL1(event,noFocus) {
	  toggleAriaHiddenGnav20("L1", !1);
	  
	  if(event && event.target){
		  var eTarget = event.target
	  }else{
		  var eTarget = this
	  }
	  
	  var	l2div = document.querySelector('.gnav20.gnav20-sticky .gnav20-sticky-content')     	
	  if(l2div){l2div.removeAttribute('style')}
	  
	  var element = document.querySelector(".gnav20-primary-menu.gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild.gnav20-open")			
		  if(element) {element.classList.remove('gnav20-open')}
		  
	  var mySubMenus = document.querySelectorAll(".gnav20-desktop .gnav20-sub-menu");
	  for (i = 0; i < mySubMenus.length; i++) {
		  mySubMenus[i].style.display = 'none';
		  mySubMenus[i].classList.remove('gnav20-grouping-active')
		  mySubMenus[i].classList.remove('gnav20-mega-active')
		  mySubMenus[i].querySelector('.gnav20-content-wrapper').classList.remove('gnav20-grouping-active')
		  mySubMenus[i].querySelector('.gnav20-content-wrapper').classList.remove('gnav20-mega-active')
	  }
	  
	  if(document.body.classList.contains("gnav20-no-scroll") && !document.body.classList.contains("gnav20-modal-menu-open")) {
		  document.body.classList.remove("gnav20-no-scroll");
	  }
	  
	  if(window.megaColumns){
		  var col = 0;
		  for (i = 0; i < window.megaColumns.length; i++){
			  window.megaColumns[i].classList.remove('column' + col + '-transLeft');			
			  col++;
		  }   	
		  var myL3 = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-submenu-column.gnav20-L2")
		  if(myL3){
			   for (i = 0; i < myL3.length; i++) {
				   myL3[i].style.display = 'none';
			   }
		  }	
	  }
	  
	  if(eTarget?.tagName != 'BUTTON' && document.querySelector('.gnav20 .gnav20-desktop .gnav20-navigation-list button[aria-expanded=true]')){
		  eTarget = document.querySelector('.gnav20 .gnav20-desktop .gnav20-navigation-list button[aria-expanded=true]')
	  }
	  
	  if (eTarget?.closest && eTarget?.closest(".gnav20-desktop") && eTarget.closest(".gnav20-primary-menu") && eTarget.closest(".gnav20-primary-menu").querySelector('.gnav20-sub-menu')) {
		var l1Button = eTarget.closest('.gnav20-navigation-item').querySelector('[id*="-L1"]')
		if(l1Button){
			if(eTarget?.classList && eTarget?.classList.contains('gnav20-nav-close')){
				// DOPMO-195659 - needed to remove and replace the L1 trigger button due to bug in NVDA which was not reading aria-expanded attribute correctly
				var prnt = l1Button.parentElement
				l1Button.remove() 
				prnt.prepend(l1Button)            
			}else{
				// DOPMO-195659 - needed to remove and replace the aria-expanded attribute  button due to bug in NVDA which was not reading aria-expanded attribute correctly
				l1Button.blur()
				l1Button.removeAttribute('aria-expanded') 
			}	 
			l1Button.setAttribute('aria-expanded', 'false') 
			if(!noFocus){ l1Button.focus()}
		}
	  }
  }
  
  function closeMenuL2(event) {
	  var eTarget = event.target || this;
	  gnav20.activeL2=null;
	  var myL2MegaDrawer = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-isactive > li > a");
	  if(myL2MegaDrawer){
		  for (i = 0; i < myL2MegaDrawer.length; i++) {
			  myL2MegaDrawer[i].classList.remove('gnav20-open');
		  }
		  eTarget.setAttribute('aria-expanded','false');
	  }	    
		  
	  var myL3 = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-submenu-column.gnav20-L2, .gnav20-desktop .gnav20-featured-card .gnav20-submenu-column.gnav20-L2")
	  if(myL3){
		  for (i = 0; i < myL3.length; i++) {
			  myL3[i].style.display = 'none';
		  }
	  }
	  
	  if(eTarget.closest(".gnav20-featured-card")){
		  eTarget.classList.remove('gnav20-open');		
		  eTarget.setAttribute('aria-expanded','false');
		  columnHighlight2(event, true)
	  }
		  
	  if (eTarget.closest(".gnav20-desktop") && eTarget.querySelector('.gnav20-submenu-column.gnav20-L2')) {
		  eTarget.querySelector('.gnav20-submenu-column.gnav20-L2').style.display = "none";
		  var element = eTarget.closest("ul.gnav20-submenu-column.gnav20-L1 > li").querySelector("a.gnav20-haschild.gnav20-open");
		  if(element) {
			  element.classList.remove('gnav20-open');
		  }
	  }
  }
  
  function closeMenuL3(event) {
	  var eTarget = event.target || this;
	  gnav20.activeL3=null;
	  if(eTarget.closest(".gnav20-featured-card")){
		  eTarget.classList.remove('gnav20-open');		
		  eTarget.setAttribute('aria-expanded','false');
		  columnHighlight2(event, true)
		  
		  var myL4 = document.querySelectorAll(".gnav20-desktop .gnav20-featured-card .gnav20-submenu-column.gnav20-L3")
		  if(myL4){
			  for (i = 0; i < myL4.length; i++) {
				  myL4[i].style.display = 'none';
			  }
		  }
	  }
	  
	  
	  
	  if (eTarget.closest(".gnav20-desktop") && eTarget.closest(".gnav20-submenu-column.gnav20-L2") && eTarget.closest(".gnav20-submenu-column.gnav20-L2").querySelector('.gnav20-submenu-column.gnav20-L3')) {
		  eTarget.closest(".gnav20-submenu-column.gnav20-L2").querySelector('.gnav20-submenu-column.gnav20-L3').style.display = "none";
	  }
  }
  
  function expandMenuClick(event) {
	  var eTarget = event.target || this;
	  var targetL1Href = eTarget.parentElement.querySelector('.gnav20-menu-label-link'); // added for ITT-640920
	  if(gnav20.mouseOverL1 && document.body.classList.contains("gnav20-using-mouse") && targetL1Href && targetL1Href.getAttribute('href')){
		  var targetToOpen = eTarget.parentElement.querySelector('.gnav20-menu-label-link').getAttribute('target');
		  if(targetToOpen ==="_self" || targetToOpen ==="_blank"){
			  window.open(targetL1Href,targetToOpen);
		  }else{
			  window.open(targetL1Href, '_self');
		  }
	  } else if (eTarget.closest(".gnav20-primary-menu").querySelector('.gnav20-sub-menu').style.display === "flex") {
		  closeMenuL1(event);
	  } else {
		  openMenuL1(event);
	  }
  }
  
  function setGnavMouseOver(event){
	  if(gnav20 && event.type == 'mouseenter' && event.relatedTarget && event.relatedTarget.tagName == 'DIV'){
		  gnav20.mouseOverL1 = true
	  } else {
		  gnav20.mouseOverL1 = false
	  }
  }
  
  function megaAddSelected(event){
	  if(event.type == 'mouseover' ){
		  gnav20.megaL2hover = event.target;
		  setTimeout('openMenuL2(event)',10)
	  }else{
		  gnav20.megaL2hover = null;
		  openMenuL2(event)
	  }
  }
  
  function toggleMenuL2ForMegaDrawer(event){
	  if(event && (event.keyCode=== 13  || event.keyCode=== 32)){
		  event.preventDefault();
		  if(event.target && event.target.classList.contains("gnav20-open")){
			  closeMenuL2(event);
		  }else {
			  openMenuL2(event);
		  }
	  }
  }
  
  function megaGoToHref(event){	
	  if(event && event.target && event.target.getAttribute('data-href') && !gnav20.megaTouch){
		  location.href = event.target.getAttribute('data-href');
	  }
  }
  
  function signInLinkClick(event){	
	  if(document.querySelector('body.gnav20-using-mouse')){
		  var signinDesktopLInk = event.target.closest('.gnav20-account-box').querySelector('.gnav20-sign-in span[data-href]:not(.gnav20-hide)');
		  if(signinDesktopLInk){
			  var hrefValue = signinDesktopLInk.getAttribute('data-href');
			  if(hrefValue){
				  location.href = hrefValue;
			  }
		  }		
	  }
  }
  
  /* start of code for eliminating the duplicate IDs- Jira - https://onejira.verizon.com/browse/BOVV-54539*/
  function removeDuplicateIDs(){
	  // special code for Int'l biz pages and VEC which have spaces in eybrow link labels
	  var eyebrows = document.querySelectorAll('.gnav20 .gnav20-eyebrow-link-list-item a')
	  if(gnavdl.bu == 'smb' && /meganav/.test(gnavdl.appid) && eyebrows.length == 4){
		  eyebrows[0].id = eyebrows[2].id = "gnav20-eyebrow-link-Personal"
		  eyebrows[1].id = eyebrows[3].id = "gnav20-eyebrow-link-Business"
	  }else{
		  for(i=0;i<eyebrows.length;i++){
			  eyebrows[i].id = eyebrows[i].id.replace(/[^a-zA-Z0-9-:_\.]/g,'-') || 'eyebrow_'+i
		  }
	  }
	  
	  var mobileIds = document.querySelectorAll('.gnav20 .gnav20-mobile [id]')
	  for(i=0;i<mobileIds.length;i++){
		  if(document.querySelector('.gnav20 .gnav20-desktop #'+mobileIds[i].id)){
			  mobileIds[i].id = mobileIds[i].id + '-mobile'
			  if(mobileIds[i] && mobileIds[i].classList && mobileIds[i].classList.contains('gnav20-goback')){
				  mobileIds[i].id = mobileIds[i].id + '-goback'
			  }
		  }
	  }
  }
  /* End of code for eliminating the duplicate Ids*/
  
  
  // Start code to add attributes for toggle buttons
  function customizeButtons(){
	  var butts = document.querySelectorAll('.gnav20-mobile a.gnav20-haschild, .gnav20-desktop .gnav20-featured-card a.gnav20-haschild')
	  for(i=0;i<butts.length;i++){
		  if(!butts[i].closest('.gnav20-featured-grouping')){
			  butts[i].setAttribute('role', 'button')
			  butts[i].setAttribute('href', '#')
			  butts[i].setAttribute('aria-label', butts[i].innerText.trim() + ' menu list')
		  }
	  }
  }
  // End code to add attributes for toggle buttons 
  
  //Fix for DOPMO-104434
  function initializeEventListners(){	
	  var drops = document.querySelectorAll('.gnav20-dropdown li.gnav20-dropdown-list');
  
	  for (var i = 0; i < drops.length; i++) {
		  if (!drops[i].firstElementChild) {
			  drops[i].innerHTML = '<a tabindex="0">' + drops[i].innerHTML + '</a>';
		  }
		  drops[i].firstElementChild.addEventListener('focus', function () {
			  this.parentElement.classList.add('gnav20-focus-selected');
		  })
		  drops[i].firstElementChild.addEventListener('blur', function () {
			  this.parentElement.classList.remove('gnav20-focus-selected');
		  })
  
	  }
  
	  var footerDefaultEle = document.querySelector('#gnav20-language-selection-footer-default')
	  //close the Language Options dropdown if focus goes back to the 'default-selected' while pressing shift+tab key.
	  if (footerDefaultEle) {
		  footerDefaultEle.addEventListener('focus', function () {
			  if (!/gnav20-hide/.test(document.querySelector('.gnav20-dropdown-footer-menu').classList)) {
				  languageFooterShowHide();
			  }
			  
		  })
	  }
  
	  //Start Of-  closing the Language Options drop-down if focus goes out of the dropdown 
	  if (footerDefaultEle) {
		  footerDefaultEle.addEventListener('blur', checklanguageFocus);
	  }
	  
	  var gnav20LanguageSelectionItems = document.querySelectorAll(".gnav20-dropdown-footer-menu .gnav20-footer-lang .gnav20-footer-list .gnav20-language-item-footer");
  
	  if (gnav20LanguageSelectionItems) {
		  for (var i = 0; i < gnav20LanguageSelectionItems.length; i++) {
			  gnav20LanguageSelectionItems[i].removeEventListener("blur", checkLanguageSelectionItemFooterFocus);
			  gnav20LanguageSelectionItems[i].addEventListener("blur", checkLanguageSelectionItemFooterFocus);
		  }
	  }
  }
  
  
  /* start of  fix for CXTDT-99660 */
  function skipToMainContent(){
	  event.preventDefault();
	  if(gnavdl && gnavdl.skipToMainContentId && document.getElementById(gnavdl.skipToMainContentId)) {
		  document.getElementById(gnavdl.skipToMainContentId).focus();
	  } else {
		  document.querySelector('#gnav20-header-end').focus();
	  }
  }
  
  /* End of  fix for CXTDT-99660 */
  
  function checkCloseL3(event) {
	  if(this.classList.contains('gnav20-open') && !document.body.classList.contains('gnav20-using-mouse')){
		  this.dispatchEvent(new Event("closeMenu",  { bubbles: true, cancelable: false }));
	  } else if(this.closest('.gnav20-submenu-column') && this.closest('.gnav20-submenu-column').querySelector('.gnav20-open') && !document.body.classList.contains('gnav20-using-mouse')){
		  this.closest('.gnav20-submenu-column').querySelector('.gnav20-open').dispatchEvent(new Event("closeMenu",  { bubbles: true, cancelable: false }));
		  this.focus()
	  }
  }
  
  
  gnav20.focusedMenu = 'none';
  
  function closeOpenMenu(){
	  if(document.querySelector('body.gnav20-using-mouse')){
		  return;
	  }
  
	  gnav20.focusedMenu = this
  
	  setTimeout(function(){
		  if(!gnav20.focusedMenu.contains(document.activeElement)){
			  if(gnav20.activeCloseButton) {
				  document.body.removeEventListener('click', gnav20.clickOutsideClose)
				  if(/gnav20-nav-close/.test(gnav20.activeCloseButton.classList)){
					  closeMenuL1(undefined,!0)
				  }else if(/gnav20-close-account-utility/.test(gnav20.activeCloseButton.classList)){
					  gnav20.signInCloseMenu(event,!0)
				  }else if(/gnav20-closex/.test(gnav20.activeCloseButton.classList)){
					  gnav20.openUnifiedCart(event,!0)// this really closes the cart
				  }
				  gnav20.activeCloseButton = null
			  } else if (/gnav20-navigation-item/.test(gnav20.focusedMenu.classList)){
				  closeMenuL1(undefined,!0);
			  }
		  }
	  },100)
  }
  
  gnav20.initNav = function () {
	  //this is initiating some a11y stuff for 2406 start
	  var myMenus = document.querySelectorAll('.gnav20-row-two .gnav20-navigation-item, .gnav20-row-two .gnav20-account-utility, .gnav20-row-two .gnav20-unifiedcart'),
		  butLabel;
	  for(i=0;i<myMenus.length;i++){
		  if(!myMenus[i].querySelector('a.gnav20-menu-label-button')){// this is a list of row 2 divs with dropdowns: L1, signin, cart
			  if(/gnav20-navigation-item/.test(myMenus[i].classList)){// this is a list of L1 divs with dropdowns
				  if(myMenus[i].querySelector('.gnav20-featured-card-top-label')){
					  myMenus[i].querySelector('.gnav20-featured-card-top-label').role = 'heading'
				  }
				  if(myMenus[i].querySelector('.gnav20-nav-mask')){
					  myMenus[i].querySelector('.gnav20-nav-mask').ariaHidden = 'true'
				  }
				  if(myMenus[i].querySelector('.gnav20-menu-label-button') && myMenus[i].querySelector('.gnav20-nav-close')){
					  butLabel = myMenus[i].querySelector('.gnav20-menu-label-button').innerText
					  myMenus[i].querySelector('.gnav20-nav-close').ariaLabel = 'Close ' + butLabel + ' menu list'
				  }				
			  }		
			  myMenus[i].addEventListener('focusout',closeOpenMenu)
		  }
	  }
	  setTimeout(function(){
		  var movers = document.querySelectorAll('.gnav20-mobile #gnav20-cclosex-mobile, .gnav20-mobile .gnav20-close-account-utility'),prnt
		  for(i=0;i<movers.length;i++){ 
			  prnt = movers[i].parentElement
			  movers[i].remove()
			  prnt.prepend(movers[i])
		  }
	  },100)
	  //this is initiating some a11y stuff for 2406 end
  
	  var skipToMainContentLink = document.querySelector('#gnav20-skip-to-main-content-id');
	  if(skipToMainContentLink){
		  skipToMainContentLink.removeEventListener("click", skipToMainContent);
		  skipToMainContentLink.addEventListener("click", skipToMainContent);
	  }
	  
	  var mobileCartLinks = document.querySelectorAll('.gnav20 .gnav20-unified-cart .gnav20-content-list:first-child a')
	  for (var i = 0; i < mobileCartLinks.length; i++) {
		  mobileCartLinks[i].removeEventListener("click", gnav20.cartUtility);
		  mobileCartLinks[i].addEventListener("click", gnav20.cartUtility);
		  mobileCartLinks[i].href = "#"
	  }
  
	   var FlyoutCartCTA = document.querySelectorAll('.gnav20 .gnav20-unified-cart .cart-button');
		  if(FlyoutCartCTA.length > 0){
			  for (var i = 0; i < FlyoutCartCTA.length; i++) {
				  FlyoutCartCTA[i].removeEventListener("click", gnav20.cartUtility);
				  FlyoutCartCTA[i].addEventListener("click", gnav20.cartUtility);
				  FlyoutCartCTA[i].href = "#";
			  }
		  }
	  
	  var signInLink = document.querySelectorAll('.gnav20 .gnav20-utility .gnav20-sign-in:not(.gnav20-hasDropdown)')
	  gnav20.personal = gnavdl.bu ? 'home wireless'.indexOf(gnavdl.bu)>-1 : true;
	  if(gnav20.personal){
		  for (var i = 0; i < signInLink.length; i++) {
			  signInLink[i].removeEventListener("click", signInLinkClick);
			  signInLink[i].addEventListener("click", signInLinkClick);
		  }
	  }
	  
	  var featuredCardLinks = document.querySelectorAll('.gnav20 .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) ul.gnav20-submenu-column > li a');
	  for (var i = 0; i < featuredCardLinks.length; i++) {
		  featuredCardLinks[i].addEventListener("focus", checkCloseL3);
	  }
	  
	  var megaL2WithChild = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer .gnav20-content-wrapper > ul > li > a")
	  for (var i = 0; i < megaL2WithChild.length; i++) {
		  megaL2WithChild[i].addEventListener("mouseover", megaAddSelected);
		  megaL2WithChild[i].addEventListener("focus", megaAddSelected);
		  megaL2WithChild[i].addEventListener("keydown", toggleMenuL2ForMegaDrawer);
		  megaL2WithChild[i].addEventListener("click", megaGoToHref);
		  megaL2WithChild[i].addEventListener("touchstart", function(){gnav20.megaTouch=true}, {passive: true});
		  megaL2WithChild[i].setAttribute('aria-expanded', 'false')
	  }
	  var l2Nav = document.querySelectorAll(".gnav20-desktop .gnav20-grouping ul.gnav20-L2, .gnav20-desktop .gnav20-featured-card.gnav20-featured-grouping ul.gnav20-L2");
	  for (var i = 0; i < l2Nav.length; i++) {
		  l2Nav[i].style.display = "block";
	  }
	  
	  var l3Nav = document.querySelectorAll(".gnav20-desktop .gnav20-mega-drawer ul.gnav20-L3");
	  for (var i = 0; i < l3Nav.length; i++) {
		  l3Nav[i].style.display = "block";
	  }
  
	  var linkL1DesktopWrapper = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu:not(.gnav20-featured-card)");
	  // Need to add eventhandler on buttons that don't have child to closeMenuL1 on mouseover for this to work
	  for (var i = 0; i < linkL1DesktopWrapper.length; i++) {
		  // clickcode use condition to prevent mouseleave
		  if(gnav20.bu != 'vecXXX'){
			  linkL1DesktopWrapper[i].removeEventListener("mouseleave", closeMenuL1);
			  linkL1DesktopWrapper[i].addEventListener("mouseleave", closeMenuL1);
		  } 
	  }
	  
	  
	  var linkL1DesktopWrapperClose = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-nav-close, .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-nav-search-icon, .gnav20-desktop .gnav20-primary-menu.gnav20-featured-card .gnav20-nav-mask");
	  // Need to add eventhandler on buttons that don't have child to closeMenuL1 on mouseover for this to work
	  for (var i = 0; i < linkL1DesktopWrapperClose.length; i++) {
		  linkL1DesktopWrapperClose[i].removeEventListener("click", closeMenuL1);
		  linkL1DesktopWrapperClose[i].addEventListener("click", closeMenuL1);
	  }
	  
	  var linkL1DesktopWrapperReactClose = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card ul.gnav20-submenu-column > li a:not(.gnav20-haschild)");
	  // Need to add eventhandler on buttons that don't have child to closeMenuL1 on mouse click.
	  for (var i = 0; i < linkL1DesktopWrapperReactClose.length; i++) {
		  linkL1DesktopWrapperReactClose[i].removeEventListener("click", closeMenuL1);
		  linkL1DesktopWrapperReactClose[i].addEventListener("click", closeMenuL1);
	  }
	
	  var linkL2DesktopWrapper = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu:not(.gnav20-grouping) ul.gnav20-submenu-column.gnav20-L1 > li");
	  for (var i = 0; i < linkL2DesktopWrapper.length; i++) {
		  linkL2DesktopWrapper[i].removeEventListener("mouseleave", closeMenuL2);
	  }
  
	  var linkL3DesktopWrapper = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-grouping ul.gnav20-submenu-column.gnav20-L2 > li");
	  for (var i = 0; i < linkL3DesktopWrapper.length; i++) {
		  linkL3DesktopWrapper[i].removeEventListener("mouseleave", closeMenuL3);
		  linkL3DesktopWrapper[i].addEventListener("mouseleave", closeMenuL3);
	  }
  
	  var linkL1Desktop = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu:not(.gnav20-featured-card) .gnav20-menu-label-button.gnav20-haschild");
	  for (var i = 0; i < linkL1Desktop.length; i++) {
		  if(gnav20.bu == 'vecXXX'){ // code for clickcode
			  linkL1Desktop[i].removeEventListener("click", toggleMenuL1);
			  linkL1Desktop[i].addEventListener("click", toggleMenuL1);
			  linkL1Desktop[i].classList.add("gnav20-clickL1");
		  }else{ // hover code
			  linkL1Desktop[i].removeEventListener("mouseover", openMenuL1);
			  linkL1Desktop[i].addEventListener("mouseover", openMenuL1);
			  linkL1Desktop[i].removeEventListener("click", expandMenuClick);
			  linkL1Desktop[i].addEventListener("click", expandMenuClick);
		  }
	  }
	  
	  var linkL1Desktop = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card button.gnav20-menu-label-button.gnav20-haschild[aria-expanded~='false']");
	  for (var i = 0; i < linkL1Desktop.length; i++) {
		  linkL1Desktop[i].removeEventListener("click", toggleMenuL1);
		  linkL1Desktop[i].addEventListener("click", toggleMenuL1);
		  linkL1Desktop[i].setAttribute('aria-expanded', 'false')
	  }	
	  
	  var gnavButtonParent = document.querySelectorAll(".gnav20-desktop .gnav20-navigation-list .gnav20-primary-menu");
		  for (var i = 0; i < gnavButtonParent.length; i++) {
			  gnavButtonParent[i].addEventListener("mouseenter", setGnavMouseOver);
			  gnavButtonParent[i].addEventListener("mouseleave", setGnavMouseOver);
		  }
  
	  var linkL2Desktop = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL2Desktop.length; i++) {
		  linkL2Desktop[i].removeEventListener("click", toggleMenuL2);
		  linkL2Desktop[i].addEventListener("click", toggleMenuL2);
		  linkL2Desktop[i].removeEventListener("closeMenu", toggleMenuL2);
		  linkL2Desktop[i].addEventListener("closeMenu", toggleMenuL2);
		  linkL2Desktop[i].setAttribute('aria-expanded', 'false')
	  }
		
	  var linkL3Desktop = document.querySelectorAll(".gnav20-desktop .gnav20-primary-menu.gnav20-featured-card:not(.gnav20-featured-grouping) ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL3Desktop.length; i++) {
		  linkL3Desktop[i].removeEventListener("click", toggleMenuL3);
		  linkL3Desktop[i].addEventListener("click", toggleMenuL3);
		  linkL3Desktop[i].removeEventListener("closeMenu", toggleMenuL3);
		  linkL3Desktop[i].addEventListener("closeMenu", toggleMenuL3);
		  linkL3Desktop[i].setAttribute('aria-expanded', 'false')
	  }
	  
	  var linkL1Mobilef = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu .gnav20-menu-label-button.gnav20-haschild");
	  for (var i = 0; i < linkL1Mobilef.length; i++) {
		  linkL1Mobilef[i].removeEventListener("click", openMenuL1);
		  linkL1Mobilef[i].addEventListener("click", openMenuL1);
	  }
  
	  var linkL2Mobilef = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL2Mobilef.length; i++) {
		  linkL2Mobilef[i].removeEventListener("click", openMenuL2);
		  linkL2Mobilef[i].addEventListener("click", openMenuL2);
	  }
  
	  var linkL3Mobilef = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL3Mobilef.length; i++) {
		  linkL3Mobilef[i].removeEventListener("click", openMenuL3);
		  linkL3Mobilef[i].addEventListener("click", openMenuL3);
	  }
  
	  var linkL1Mobileb = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu .gnav20-menu-label-button.gnav20-goback");
	  for (var i = 0; i < linkL1Mobileb.length; i++) {
		  linkL1Mobileb[i].removeEventListener("click", goBackToL1);
		  linkL1Mobileb[i].addEventListener("click", goBackToL1);
	  }
  
	  var linkL2Mobileb = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-goback");
	  for (var i = 0; i < linkL2Mobileb.length; i++) {
		  linkL2Mobileb[i].removeEventListener("click", goBackToL2);
		  linkL2Mobileb[i].addEventListener("click", goBackToL2);
	  }
	  var linkL2ClickableMobile = document.querySelectorAll(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL2ClickableMobile.length; i++) {
		  linkL2ClickableMobile[i].removeEventListener("keyup", menuL2ToggleOnSpaceKey);
		  linkL2ClickableMobile[i].addEventListener("keyup", menuL2ToggleOnSpaceKey);
	  }
	  var goBackLinkL2ClickableMobile = document.querySelectorAll(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-goback");
	  for (var i = 0; i < goBackLinkL2ClickableMobile.length; i++) {
		  goBackLinkL2ClickableMobile[i].removeEventListener("keyup", menuL2ToggleOnSpaceKey);
		  goBackLinkL2ClickableMobile[i].addEventListener("keyup", menuL2ToggleOnSpaceKey);
	  }
	  var linkL3ClickableMobile = document.querySelectorAll(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-haschild");
	  for (var i = 0; i < linkL3ClickableMobile.length; i++) {
		  linkL3ClickableMobile[i].removeEventListener("keyup", menuL2ToggleOnSpaceKey);
		  linkL3ClickableMobile[i].addEventListener("keyup", menuL2ToggleOnSpaceKey);
	  }
	  var goBackLinkL3ClickableMobile = document.querySelectorAll(".gnav20-mobile ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-goback");
	  for (var i = 0; i < goBackLinkL3ClickableMobile.length; i++) {
		  goBackLinkL3ClickableMobile[i].removeEventListener("keyup", menuL2ToggleOnSpaceKey);
		  goBackLinkL3ClickableMobile[i].addEventListener("keyup", menuL2ToggleOnSpaceKey);
	  }
  
	  var linkL3Mobileb = document.querySelectorAll(".gnav20-mobile .gnav20-primary-menu ul.gnav20-submenu-column.gnav20-L2 > li > a.gnav20-goback");
	  for (var i = 0; i < linkL3Mobileb.length; i++) {
		  linkL3Mobileb[i].removeEventListener("click", goBackToL3);
		  linkL3Mobileb[i].addEventListener("click", goBackToL3);
	  }
  
	  var signInBackMenu = document.querySelectorAll(".gnav20-mobile #gnav20-mobile-menu .gnav20-account-box .gnav20-dropdown-menu .gnav20-goback ");
	  for (var i = 0; i < signInBackMenu.length; i++) {
		  signInBackMenu[i].removeEventListener("click", signinContentHide);
		  signInBackMenu[i].addEventListener("click", signinContentHide);
	  }
  
	  var storesBackMenu = document.querySelectorAll(".gnav20-mobile  #gnav20-mobile-menu .gnav20-store .gnav20-dropdown-menu .gnav20-goback ");
	  for (var i = 0; i < storesBackMenu.length; i++) {
		  storesBackMenu[i].removeEventListener("click", storeContentHide);
		  storesBackMenu[i].addEventListener("click", storeContentHide);
	  }
	  
	  var megaLinks = document.querySelectorAll('.gnav20-mega-drawer ul.gnav20-submenu-column.gnav20-L1 > li > a.gnav20-haschild ');
		  for (i = 0; i < megaLinks.length; i++){
				megaLinks[i].setAttribute('tabindex', '0')
		  }
  
		  var langEle = document.querySelectorAll('.gnav20 .gnav20-lang-link');
		  for (var i = 0; i < langEle.length; i++) {
			  langEle[i].addEventListener('click', function (event) {
				  event.preventDefault();
				  gnav20.smartlingTranslation()
			  });
		  }
		  
		  // Mobile hamburger open background
		  var vzhmoverlay = document.querySelector(".gnav20-vzhmoverlay");
		  if(vzhmoverlay){
			  vzhmoverlay.style.height = 0;
			  vzhmoverlay.addEventListener('transitionstart', function() {
				  this.style.height = '100%';
			  });
			  vzhmoverlay.addEventListener('transitionend', function() {
				  if(this.className == 'gnav20-vzhmoverlay'){
					  this.style.height = 0;
				  }
			  });
			  // special condition for iOS. beforeunload not well supported. found this - https://developer.mozilla.org/en-US/docs/Web/API/Window/pagehide_event
			  gnav20.vzhmoverlay = vzhmoverlay
			  window.addEventListener('pagehide', function() {
				  gnav20.vzhmoverlay.style.height = 0;
			  });
		  }
		  
		  // transition desktop from black to white for nav elements
		  var blankStuff = document.querySelectorAll('.gnav20 .gnav20-desktop .gnav20-row-one,.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-navigation,.gnav20 .gnav20-desktop .gnav20-row-two .gnav20-utility,.gnav20 .gnav20-mobile .gnav20-utility')
		  for (i = 0; i < blankStuff.length; i++) {
			   blankStuff[i].classList.add('opacityOne')
		  }
			  
	  //*******************************************
	  //Footer Dropdown content alignment
	  var footerContent = document.querySelectorAll(".gnav20-mobile .gnav20-dropdown-menu .gnav20-dropdown");
	  for (var i = 0; i < footerContent.length; i++) {
		  footerContent[i].classList.add("gnav20-fixed-top", "gnav20-navigation-item");
	  }
	  //*******************************************       
	  
	  // SkinnyNav settings - start
	  if(/skinnyNav=true/.test(location.search) && window.gnavdl && gnavdl.options && gnavdl.options.sticky){
		  gnavdl.options.skinny = true;
	  }
	  if(window.gnavdl && gnavdl.options && gnavdl.options.sticky && gnavdl.options.skinny){
		  gnav20.initSkinnyNav()
	  }
	  // SkinnyNav settings - end
		  
		  
	  removeDuplicateIDs();
	  
	  customizeButtons();
	  
	  initializeEventListners();  //Fix for DOPMO-104434
	  
  };
  
  /*
  var alinks = document.querySelectorAll('a');
  for (var i = 0; i < alinks.length; i++) {
	  alinks[i].setAttribute('tabindex', '0');
  }
  */
  
  var newel = document.createElement('meta');
  newel.setAttribute("http-equiv", "X-UA-Compatible");
  newel.content = "IE=Edge";
  document.head.insertBefore(newel, document.head.firstElementChild);
  
  function langTranslate() {
	  try {
		  MP.UrlLang = 'mp_js_current_lang';
		  MP.SrcUrl = decodeURIComponent('mp_js_orgin_url');
		  MP.oSite = decodeURIComponent('mp_js_origin_baseUrl');
		  MP.tSite = decodeURIComponent('mp_js_translated_baseUrl');
		  MP.init();
		  var mp_langLink = function () {
			  var langlinks = document.querySelectorAll('.gnav20-langLink');
			  for (var i = 0; i < langlinks.length; i++) {
				  langlinks.item(i).onclick = function () {
					  MP.init();
					  var lang = this.getAttribute('data-lang');
					  let url = this.getAttribute('data-href');
					  var tSite = MP.tSite.replace(/(https?:\/\/|\/?$)/g, '');
					  url = url.replace(/(https?:\/\/|\/?$)/g, '');
					  MP.switchLanguage(tSite.search(url) != -1 ? MP.oSite : url, lang, true);
					  return false;
				  }
			  }
		  };
		  if (window.addEventListener) {
			  window.addEventListener('load', mp_langLink, false);
		  } else if (window.attachEvent) {
			  window.attachEvent('onload', mp_langLink);
		  }
	  }
	  catch (e) {
		  console.log("E in langtransalate", e);
	  }
  }
  
  function switchLanguage(lang) {
	  try {
		  MP.SrcUrl = unescape('mp_js_orgin_url');
		  MP.UrlLang = 'mp_js_current_lang';
		  MP.init();
		  MP.switchLanguage(MP.UrlLang == lang ? 'en' : lang); return false;
	  }
	  catch (e) {
		  console.log("E in langtransalate", e);
	  }
  }
  
  
  
  // Start Of-  closing the Quick task drop-down if focus goes out of the dropdown 
  
  function checkQuickTaskFocus() {
	  setTimeout(function () {
		  if (document.activeElement.className !== 'gnav20-quick-task-item-footer' && (!/gnav20-hide/.test(document.querySelector('.gnav20-dropdown-quick-task-menu').classList))) {
			  quickTaskShowHide();
		  }
	  }, 10)
  }
  
  function checkQuickTaskItemFooterFocus() {
	  setTimeout(function () {
		  if (document.activeElement.className !== 'gnav20-quick-task-item-footer' && document.activeElement.id !== 'gnav20-quick-task-menu-default') {
			  quickTaskShowHide();
		  }
	  }, 10)
  }
  
  //End  Of-  closing the Quick task drop-down if focus goes out of the drop-down 
  
  function quickTaskShowHide() {
	  var quickTasks = document.getElementById("gnav20-quick-tasks");
	  var arrowqt = document.getElementById("gnav20-arrowqt");
	  var taskManuEle = document.querySelector('#gnav20-quick-task-menu-default');
	  if (quickTasks) {
		  quickTasks.classList.toggle("gnav20-hide");
		  if (!quickTasks.classList.contains('gnav20-hide')) {
			  arrowqt.classList.add('gnav20-arrow-up');
			  if (taskManuEle) {
				  taskManuEle.setAttribute('aria-expanded', 'true');
			  }
  
		  }
		  else {
			  arrowqt.classList.remove('gnav20-arrow-up');
			  if (taskManuEle) {
				  taskManuEle.setAttribute('aria-expanded', 'false');
			  }
		  }
	  }
  }
  
  function expandQuickTaskMenOnKeyPress(event) {
	  event.preventDefault();
	  event.stopPropagation();
	  var keyCode = event.which;
	  if (keyCode == 13 || keyCode == 32) {
		  quickTaskShowHide();
	  }
  }
  
  
  
  function checklanguageFocus() {
	  setTimeout(function () {
		  if (document.activeElement.className !== 'gnav20-language-item-footer' && (!/gnav20-hide/.test(document.querySelector('.gnav20-dropdown-footer-menu').classList))) {
			  languageFooterShowHide();
		  }
	  }, 10)
  }
  
  function checkLanguageSelectionItemFooterFocus() {
	  setTimeout(function () {
		  if (document.activeElement.className !== 'gnav20-language-item-footer' && document.activeElement.id !== 'gnav20-language-selection-footer-default') {
			  languageFooterShowHide();
		  }
	  }, 10)
  }
  //End  Of-  closing the Language Options drop-down if focus goes out of the drop-down 
  
  function languageFooterShowHide() {
		  var footerDefaultEle = document.querySelector('#gnav20-language-selection-footer-default')
		  var footerEle = document.getElementById("gnav20-localization-footer");
		  var arrawEle = document.getElementById("gnav20-arrow");
  
		  if (footerEle) {
			  footerEle.classList.toggle("gnav20-hide");
			  if (!footerEle.classList.contains('gnav20-hide')) {
				  arrawEle.classList.add('gnav20-arrow-up');
				  if (footerDefaultEle) {
					  footerDefaultEle.setAttribute('aria-expanded', 'true');
				  }
  
			  } else {
				  arrawEle.classList.remove('gnav20-arrow-up');
				  if (footerDefaultEle) {
					  footerDefaultEle.setAttribute('aria-expanded', 'false');
				  }
			  }
		  }
  }
  
  // Close the dropdown menu if the user clicks outside of it
  
  window.onclick = function (event) {
	  if (!(event.target || this).matches('.gnav20-quick-task')) {
		  var dropdowns = document.querySelectorAll('.gnav20-dropdown li.gnav20-footer-list');
		  var i;
		  for (i = 0; i < dropdowns.length; i++) {
			  var openDropdown = dropdowns[i];
			  if (openDropdown.classList.contains('gnav20-hide')) {
				  openDropdown.classList.remove('gnav20-hide');
			  }
		  }
	  }
  }
  window.onclick = function (event) {
	  if (!(event.target || this).matches('.gnav20-language-box-footer')) {
		  var dropdowns1 = document.querySelectorAll('.gnav20-dropdown li.gnav20-footer-list');
  
		  for (var i = 0; i < dropdowns1.length; i++) {
			  var openDropdown1 = dropdowns1[i];
			  if (openDropdown1.classList.contains('gnav20-hide')) {
				  openDropdown1.classList.remove('gnav20-hide');
			  }
		  }
	  }
  }
  
  // Export functions for testing
  if (typeof module !== 'undefined' && module.exports) {
	  module.exports = {
		  langTranslate: langTranslate,
		  switchLanguage: switchLanguage,
		  quickTaskShowHide: quickTaskShowHide,
		  languageFooterShowHide: languageFooterShowHide,
		  expandQuickTaskMenOnKeyPress: expandQuickTaskMenOnKeyPress,
		  checkQuickTaskFocus: checkQuickTaskFocus,
		  checkQuickTaskItemFooterFocus: checkQuickTaskItemFooterFocus,
		  checklanguageFocus: checklanguageFocus,
		  checkLanguageSelectionItemFooterFocus: checkLanguageSelectionItemFooterFocus
	  };
  }
  
  gnav20.initSignIn = function () {
		  gnav20.mobileMenu = document.getElementById('gnav20-mobile-menu')
	  var localizationforDesktop = document.querySelector('.gnav20-desktop .gnav20-localization #gnav20-language-selection-menu');
	  
	  if(localizationforDesktop){
		  var localizationMenu = localizationforDesktop.parentElement.querySelector('.gnav20-dropdown-menu')
		  if(localizationMenu){
			  localizationMenu.addEventListener('keydown',function(){
				  setTimeout(function(){
					  if(!document.activeElement.closest('.gnav20-dropdown')){
						  localizationClose()
					  }
				  },10)
			  })
		  }
	  }
			  
	  function localizationOpen(){
		  document.querySelector('.gnav20-desktop .gnav20-language-box .gnav20-dropdown-menu').classList.remove("gnav20-hide");
	  }
  
	  var languageBox = document.getElementsByClassName("gnav20-localization");
	  for (var i = 0; i < languageBox.length; i++) {
		  languageBox[i].removeEventListener("mouseleave", localizationClose);
		  languageBox[i].addEventListener("mouseleave", localizationClose); 
	  }
  
	  function localizationClose(){
		  var e = document.querySelector('.gnav20-desktop .gnav20-dropdown-menu#localization')
		  if(e){
			  e.classList.add("gnav20-hide");
		  }
	  }
	  
	  function localizationToggle(){
		  if(event.which == 13 || event.which == 32 ){
		  if(localizationforDesktop.parentElement.querySelector('.gnav20-dropdown-menu.gnav20-hide')){
			  localizationOpen()
		  }else{
			  localizationClose()
		  }
		}
	  }
		 
	  function signInOpenMenu(event) {
		  //console.log('signInOpenMenu closeCart on next line')
		  gnav20.closeCart()
		  var box = event.target.closest(".gnav20-account-box"),
				  container = box.querySelector(".gnav20-dropdown-menu");
		  if(box && container) {
			  box.querySelector(".gnav20-sign-in").setAttribute('aria-expanded','true');
			  //container.setAttribute('aria-expanded','true');
			  container.classList.remove("gnav20-hide");            
			  if(event.target.closest(".gnav20-mobile") && box.querySelector(".gnav20-vzmoverlay") && box.querySelector(".gnav20-close-account-utility")) {
				  box.querySelector(".gnav20-vzmoverlay").classList.add("gnav20-menuop");
				  box.querySelector(".gnav20-close-account-utility").focus(); 
			  }
			  if(box.closest('.gnav20-mobile')){
				  document.body.classList.add('gnav20-modal-menu-open')
				  toggleAriaHiddenGnav20("signinFromHeader", !0);  // rcw  moved to mobile only for a11y 2406 ER
				  gnav20.setFocusTrap(container)// rcw  moved to mobile only for a11y 2406 ER
			  }else{
				  gnav20.closeElementQuery = '#gnav20-sign-in'
				  setTimeout("document.body.addEventListener('click', gnav20.clickOutsideClose)",1)
			  }
			  
			  gnav20.activeCloseButton = box.querySelector('.gnav20-close-account-utility')
		  }        
	  }
	  
	gnav20.toggleMobileSignInHideEls = function(disp){  		
		var tabby = disp == 'none' ? -1 : 0;
		var mobileSignin = document.querySelector('#gnav20-mobile-menu .gnav20-navigation')
		if(mobileSignin){
			mobileSignin.style.display = disp 
		}
	  //var footerLinks = document.querySelectorAll('#gnav20-footerlink .gnav20-subanchor,#gnav20-mobile-menu .gnav20-main-header, #gnav20-sign-id-mobile, #gnav20-mobile-menu .gnav20-close-account-utility')
	  // commented above to remove dependency on "gnav20-subanchor" class. may cause issues
	  var footerLinks = document.querySelectorAll('#gnav20-footerlink a,#gnav20-mobile-menu .gnav20-main-header, #gnav20-sign-id-mobile, #gnav20-mobile-menu .gnav20-close-account-utility')
	  for (var i = 0; i < footerLinks.length; i++) {
		  footerLinks[i].setAttribute('tabindex',tabby)
	  }
	  
	}
	  
	  function signInCloseMenu(event,noFocus) {
		  //console.log('signInCloseMenu')
		  var box = event
				  ? event.target.closest(".gnav20-account-box")
				  : document.querySelector('.gnav20 .gnav20-desktop .gnav20-utility-wrapper:not(.gnav20-hide-on-desktop) .gnav20-account-box'),
				  btn,
				  target;
		  if(box && box.querySelector(".gnav20-dropdown-menu")) {
			  if(btn = box.querySelector(".gnav20-sign-in")){
				  btn.remove() // DOPMO-195659 - needed to remove and replace the L1 trigger button due to bug in NVDA which was not reading aria-expanded attribute correctly
				  box.prepend(btn)
				  btn.setAttribute('aria-expanded','false');
			  }
			  //box.querySelector(".gnav20-dropdown-menu").setAttribute('aria-expanded','false');
			  box.querySelector(".gnav20-dropdown-menu").classList.add("gnav20-hide");   
			  gnav20.activeCloseButton = null // rcw added 2407 a11y        
			  if(event && event.target.closest(".gnav20-mobile") && box.querySelector(".gnav20-vzmoverlay") && box.querySelector("#gnav20-sign-id-mobile")) {
				  box.querySelector(".gnav20-vzmoverlay").classList.remove("gnav20-menuop");
				  box.querySelector("#gnav20-sign-id-mobile").focus();
			  }           
			  if(box.closest('.gnav20-mobile')){
				  document.body.classList.remove('gnav20-modal-menu-open')
				  toggleAriaHiddenGnav20("signinFromHeader", !1); //  rcw moved to mobile only 2406 ER
				  gnav20.clearFocusTrap() //  rcw moved to mobile only 2406 ER
			  }else{
				  document.body.removeEventListener('click', gnav20.clickOutsideClose)
				  if(event && event.target && !noFocus){ // rcw mod a11y 2406 ER
					  if(event.target.closest('.gnav20-account-box') && event.target.closest('.gnav20-account-box').querySelector('button.gnav20-hasDropdown')){
						  event.target.closest('.gnav20-account-box').querySelector('button.gnav20-hasDropdown').focus()
					  }
				  }            	
			  }
			  
		  }
	  }
	  gnav20.signInCloseMenu = signInCloseMenu
	  
	  function signinToggle(event) {
		  //console.log('signinToggle')
		  if(event.target.closest(".gnav20-account-box") && event.target.closest(".gnav20-account-box").querySelector(".gnav20-dropdown-menu")) {
			  var accountDropDownListForDesktop = event.target.closest(".gnav20-account-box").querySelector(".gnav20-dropdown-menu");
			  if(accountDropDownListForDesktop && (/gnav20-hide/.test(accountDropDownListForDesktop.classList))){
				  signInOpenMenu(event);
			  }else{
				  signInCloseMenu(event);
			  }
		  }
	  };
  
	  /* rcw commented for a11y 2406 ER
	  var desktopDropdownLinks = document.querySelectorAll(".gnav20-desktop .gnav20-dropdown-menu .gnav20-dropdown-list-item");
  
	  if (desktopDropdownLinks) {
		  for (var i = 0; i < desktopDropdownLinks.length; i++) {
			  desktopDropdownLinks[i].removeEventListener("blur", checkDropdownFocus);
			  desktopDropdownLinks[i].addEventListener("blur", checkDropdownFocus);
		  }
	  }
	  */
  
	  function checkDropdownFocus(event) {
		  setTimeout(function () {
			  if (!document.activeElement.closest('.gnav20-dropdown-menu')) {
				  signInCloseMenu()
				  dropdownCloseMenu(event)
			  }
		  },10)
	  };
	  
	  var accountBox = document.querySelectorAll(".gnav20 .gnav20-width-wrapper:not(.gnav20-new-design) .gnav20-desktop .gnav20-account-box");
	  for (var i = 0; i < accountBox.length; i++) {  
		  accountBox[i].removeEventListener("mouseleave", signInCloseMenu);
		  accountBox[i].addEventListener("mouseleave", signInCloseMenu);
	  }
	  
	  var SignInElementForDesktop = document.querySelectorAll('.gnav20-width-wrapper:not(.gnav20-new-design) .gnav20-desktop .gnav20-utility  .gnav20-account-utility .gnav20-account-box .gnav20-sign-in');
			  
	  for (i = 0; i < SignInElementForDesktop.length; i++) {
		  SignInElementForDesktop[i].removeEventListener("mouseover", signInOpenMenu);
		  SignInElementForDesktop[i].addEventListener("mouseover", signInOpenMenu);
		  
		  SignInElementForDesktop[i].removeEventListener("click", signinToggle);
		  SignInElementForDesktop[i].addEventListener("click", signinToggle);
		  
		  //SignInElementForDesktop[i].removeAttribute("aria-haspopup");
		  
		  SignInElementForDesktop[i].addEventListener('focus', function (event) {
			  
			  if (!/gnav20-hide/.test(document.querySelector('.gnav20-desktop .gnav20-dropdown-menu').classList)) {
				  signInCloseMenu(event)
			  }
		  });
	  }
  
	   var newSignInElementForDesktop = document.querySelectorAll('.gnav20-width-wrapper .gnav20-gnav-new-design .gnav20-desktop .gnav20-utility  .gnav20-account-utility .gnav20-account-box .gnav20-sign-in.gnav20-hasDropdown');
			  
	  for (i = 0; i < newSignInElementForDesktop.length; i++) {
		  newSignInElementForDesktop[i].removeEventListener("click", signinToggle);
		  newSignInElementForDesktop[i].addEventListener("click", signinToggle);
		  //newSignInElementForDesktop[i].removeAttribute("aria-haspopup");
	  }
	  
	  //VCGAF-252
	  var closeSignInPanel = document.querySelectorAll('.gnav20-desktop .gnav20-utility  .gnav20-account-utility .gnav20-dropdown-menu .gnav20-close-account-utility');
	  for (var i = 0; i < closeSignInPanel.length; i++) {   //VCGAF-252
		  closeSignInPanel[i].removeEventListener("click", signInCloseMenu);	//VCGAF-252
		  closeSignInPanel[i].addEventListener("click", signInCloseMenu);		//VCGAF-252
	  }
  
	  /**********************Implementation of click anywhere to close the signin panel for VCGAF-252****************
	  var areaOutSideSignInPanel = document.getElementById("gnav20-sign-id");
  
	  document.removeEventListener('click', 
		  function(event){
			  var clickedSignIn = areaOutSideSignInPanel.contains(event.target);
			  if(!clickedSignIn){
				  signInCloseMenu();
		  }
	  });
  
	  document.addEventListener('click', 
		  function(event){
			  var clickedSignIn = areaOutSideSignInPanel.contains(event.target);
			  if(!clickedSignIn){
				  signInCloseMenu();
		  }
	  });
	  **********************Implementation of click anywhere to close the signin panel for VCGAF-252****************/
  
	  if (localizationforDesktop) {
		  localizationforDesktop.setAttribute("tabindex", "0");
		  
		  localizationforDesktop.removeEventListener("mouseover", localizationOpen);
		  localizationforDesktop.addEventListener("mouseover", localizationOpen);
		  
		localizationforDesktop.removeEventListener("keydown", localizationToggle);
		  localizationforDesktop.addEventListener("keydown", localizationToggle);
	  }
	  
	  var signInElementMobile = document.querySelectorAll(".gnav20-mobile .gnav20-account-box .gnav20-account-box .gnav20-sign-in");
	  for (i = 0; i < signInElementMobile.length; i++) {
		  signInElementMobile[i].removeEventListener("click", signinToggle)
		  signInElementMobile[i].addEventListener("click", signinToggle);
	  }
	  
	  var signInElementMobileFooterlink = document.querySelectorAll(".gnav20-mobile #gnav20-footerlink .gnav20-sign-in"),
			  ariaLabel;
	  for (i = 0; i < signInElementMobileFooterlink.length; i++) {
		  signInElementMobileFooterlink[i].removeEventListener("click", signinToggleForMobile)
		signInElementMobileFooterlink[i].addEventListener("click", signinToggleForMobile);
		ariaLabel = signInElementMobileFooterlink[i].querySelector('span>span')
		   if(ariaLabel){
			   ariaLabel = ariaLabel.innerText.trim() + ' menu list'
			   signInElementMobileFooterlink[i].setAttribute('aria-label',ariaLabel)
		   }
	  }
	  
	  var signInElementOption1A = document.querySelectorAll(".gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-sign-in");
	  for (i = 0; i < signInElementOption1A.length; i++) {
		  signInElementOption1A[i].removeEventListener("click", signInOpenMenu)
		  signInElementOption1A[i].addEventListener("click", signInOpenMenu);
	  }
	  
	  var signInElementOption1AClose = document.querySelectorAll(".gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-close-account-utility");    
	  for (i = 0; i < signInElementOption1AClose.length; i++) { 
		  signInElementOption1AClose[i].removeEventListener("click", signInCloseMenu)
		  signInElementOption1AClose[i].addEventListener("click", signInCloseMenu);
	  }
	  
	  var signInElementOption1ACloseMenu = document.querySelectorAll(".gnav20-mobile .gnav20-utility .gnav20-account-box .gnav20-vzmoverlay");
	  for (i = 0; i < signInElementOption1ACloseMenu.length; i++) {  
		  signInElementOption1ACloseMenu[i].removeEventListener("click", signInCloseMenu)
		  signInElementOption1ACloseMenu[i].addEventListener("click", signInCloseMenu);
	  }
	  
	  
	  function dropdownOpenMenu(event) {
		  var myTarget = (event.target || this)
		  if(myTarget.closest(".gnav20-dropdown-box") && myTarget.closest(".gnav20-dropdown-box").querySelector(".gnav20-dropdown-menu")) {
			  myTarget.closest(".gnav20-dropdown-box").querySelector(".gnav20-dropdown-menu").classList.remove("gnav20-hide");
			  myTarget.setAttribute('aria-expanded','true');		
		  }
		  if(myTarget.closest('.gnav20-mobile')){
			  gnav20.toggleMobileSignInHideEls('none')      
				gnav20.setFocusTrap(gnav20.mobileMenu)
		  }
	};
  
	  function dropdownCloseMenu(event) {
		  var myTarget = (event.target || this),
				  parent = myTarget.closest('.gnav20-dropdown-box')
		  if(parent && parent.querySelector(".gnav20-dropdown-menu") && parent.querySelector("button")){
			  parent.querySelector(".gnav20-dropdown-menu").classList.add("gnav20-hide");
			  parent.querySelector("button").setAttribute('aria-expanded','false');	
		  }
		  if(myTarget.closest('.gnav20-mobile')){
			  myTarget.closest('.gnav20-dropdown-box').querySelector("button").setAttribute('aria-expanded','false');	
			  gnav20.toggleMobileSignInHideEls('block')
			  gnav20.clearFocusTrap(gnav20.mobileMenu)
		  }
	};
	
	function dropdownToggleForDesktop(event) {
		if(event.target.nextElementSibling.classList.contains('gnav20-hide')){
			dropdownOpenMenu(event)
		}else{
			dropdownCloseMenu(event)
		}
	}
	  
	  function dropdownToggleForMobile(event) {
		var myTarget = (event.target || this)
		if(myTarget.closest(".gnav20-dropdown-box") && myTarget.closest(".gnav20-dropdown-box").querySelector(".gnav20-dropdown-menu") 
			  && (/gnav20-hide/.test(myTarget.closest(".gnav20-dropdown-box").querySelector(".gnav20-dropdown-menu").classList))){
			  dropdownOpenMenu(event);
		  }else{
			  dropdownCloseMenu(event);
		  }
	  };
	  
	  var dropdownElementsForDesktop = document.querySelectorAll('.gnav20-desktop .gnav20-utility .gnav20-dropdown-box button');
	var dropdownElementsForMobile = document.querySelectorAll(".gnav20-mobile .gnav20-mobile-menu .gnav20-dropdown-box button");
	  
	  for (var i = 0; i < dropdownElementsForDesktop.length; i++) {
		  
		  dropdownElementsForDesktop[i].removeEventListener("mouseover", dropdownOpenMenu);
		  dropdownElementsForDesktop[i].addEventListener("mouseover", dropdownOpenMenu);
		  
		  dropdownElementsForDesktop[i].closest(".gnav20-dropdown-box").removeEventListener("mouseleave", dropdownCloseMenu);
		  dropdownElementsForDesktop[i].closest(".gnav20-dropdown-box").addEventListener("mouseleave", dropdownCloseMenu);
		  
		  dropdownElementsForDesktop[i].removeEventListener("click", dropdownToggleForDesktop);
		  dropdownElementsForDesktop[i].addEventListener("click", dropdownToggleForDesktop);
	}
	  
	  
	  for (var i = 0; i < dropdownElementsForMobile.length; i++) {
		  
		  dropdownElementsForMobile[i].removeEventListener("click", dropdownToggleForMobile)
		  dropdownElementsForMobile[i].addEventListener("click", dropdownToggleForMobile);
		  
	  }
	  
  };
  
  
  
  
  
  
  
  
  var googleSearchInitialized = false;
  var autocomplete;
  
  function handleStoreLocatorFocus(e) {
	  loadGoogleScript()
  }
  
  function mobilecheck() {
	  var check = false;
	  (function (a) {
		  // Use a simpler, non-backtracking regex for mobile detection to avoid ReDoS
		  let mobileRegex = /\b(android|bb\d+|blackberry|fennec|iemobile|iphone|ipod|kindle|maemo|midp|mobile|opera m|palm|phone|psp|symbian|treo|up\.browser|vodafone|wap|windows ce|ipad)\b/i;
		  let ua = a?.substr(0, 100) || a; // Limit input length for safety
		  if (mobileRegex.test(ua)) check = true;
	  })(navigator.userAgent ||  window.opera);
	  return check;
  }
  
  function loadGoogleScript() {
	  if (!window.google || !window.google.maps) {
		  var channel = mobilecheck() ? 'mobile' : 'desktop';
		  var gglScript = document.createElement('script');
		  gglScript.type = 'text/javascript';
		  gglScript.rel = 'stylesheet';
		  gglScript.async = 'true';
		  gglScript.src = 'https://maps.googleapis.com/maps/api/js?client=gme-verizonwireless2&channel=vzw-' + channel + '&libraries=places&callback=initGoogleSearch';
		  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(gglScript);
		  //console.log('loaded googlemaps script')
	  } else if (!googleSearchInitialized) {
		  initGoogleSearch()
	  }
  }
  
  function initGoogleSearch() {
	  googleSearchInitialized = true;
	  var input = document.getElementById('gnav20-google-search-input');
	  //var infowindowContent = document.getElementById('gnav20-google-search-content');
	  autocomplete = new google.maps.places.Autocomplete(input);
	  autocomplete.setComponentRestrictions({ 'country': ['us'] });
	  autocomplete.setTypes(['geocode'])
	  autocomplete.addListener('place_changed', function () {
		  var place = autocomplete.getPlace();
		  if (!place.geometry) {
			  return;
		  }
		  if (navigator.userAgent.search("Firefox") >= 0) {
			  var sourceUrl = window.location.href;
			  history.pushState({}, '', sourceUrl);
		  }
		  var lat = place.geometry.location.lat() ? place.geometry.location.lat().toFixed(6) : '';
		  var lng = place.geometry.location.lng() ? place.geometry.location.lng().toFixed(6) : '';
		  location.href = "https://www.verizonwireless.com/stores/storesearchresults/?allow=1&lat=" + lat + "&long=" + lng + "&result=all&q=" + encodeURI(place.formatted_address);
	  });
  }
  
  gnav20.initGnavMenu = function () {
	  function toggleMenu() {
		  //console.log('toggleMenu')
		  if(event == gnav20.hamburgerClickEvent){
			return false;
		}
		
		document.getElementById('gnav20-mobile-menu').classList.remove('gnav20-openL1')
		
		gnav20.hamburgerClickEvent = event;
		  var menuEle = document.querySelector("#gnav20-mobile-menu.gnav20-mobile-menu")
		  if (menuEle) {
			  menuEle.classList.toggle('gnav20-open-menu');
			  menuEle.classList.toggle("gnav20-hide");
		  }
		  
		  if(menuEle.classList.contains('gnav20-open-menu')){	// Toggle Open
			  gnav20.setFocusTrap(menuEle)
			  toggleAriaHiddenGnav20("hamburger", !0);
			  gnav20.activeCloseButton = document.querySelector('#gnav20-mobile-menu .gnav20-closex')
		  }else{																							// Toggle closed
			  gnav20.clearFocusTrap()
			  toggleAriaHiddenGnav20("hamburger", !1);
		  }
		  
		  var overlayEle = document.querySelector(".gnav20-vzhmoverlay");
		  var x = document.getElementsByTagName("body");
		  for (var i = 0; i < x.length; i++) {
			  x[0].classList.toggle('gnav20-modal-menu-open');
		  }
		  if (overlayEle) {
			  overlayEle.classList.toggle('gnav20-menuop');
			  mobilelabelposition();
		  }
		  var closeEle = document.querySelector("#gnav20-mobile-menu #gnav20-closex.gnav20-closex")
		  if (closeEle) {
			  closeEle.focus();
		  }
		  
		  var localizaEle = document.querySelector(".gnav20-mobile #gnav20-footerlink .gnav20-localization")
		  if (localizaEle && localizaEle.classList.contains("gnav20-hide")) {
				  localizaEle.classList.remove("gnav20-hide");
		  }
		  if (document.getElementsByClassName("gnav20-non-header").length) {
			  document.querySelector(".gnav20 .gnav20-mobile .gnav20-navigation-list.gnav20-non-header").classList.remove("gnav20-non-header");
			  var selectedLOB = document.querySelector(".gnav20 .gnav20-mobile .gnav20-eyebrow-link-list-item a.gnav20-main-header.gnav20-selected")
			  if(selectedLOB){
				  selectedLOB.style.display = "block"
			  }
		  }
	  }
  
  
	  //suresh
	  function toggleLocal() {
		  var element = document.querySelector(".gnav20-mobile .gnav20-language-box .gnav20-dropdown-menu");
		  var overlayEle = document.querySelector(".gnav20-vzhmoverlay");
		  if (element) {
			  if(!element.closest('#gnav20-footerlink')){
				  overlayEle.classList.toggle('gnav20-menuop')
			  }
			  if (element.classList.contains('gnav20-hide')) {
				  element.classList.add("gnav20-open-menu");
				  element.classList.remove("gnav20-hide");
  
			  }
			  else {
				  element.classList.remove("gnav20-open-menu");
				  element.classList.add("gnav20-hide");
			  }
		  }
	  }
  
	  var e = document.querySelector(".gnav20-mobile #gnav20-closex3.gnav20-closex")
	  if (e) {
		  e.removeEventListener('click', toggleLocal);
		  e.addEventListener('click', toggleLocal);
	  }
  
	  var e = document.querySelector(".gnav20-mobile #gnav20-language-selection-menu")
	  if (e) {
		  e.removeEventListener('click', toggleLocal);
		  e.addEventListener('click', toggleLocal);
	  }
	  //suresh 
	  
	  
	  // account icon guy code for mobile menu
	  var iconGuy = document.querySelector('.gnav20-mobile .gnav20-account-icon')
	  if(iconGuy){
		  iconGuy.removeEventListener('click', gotoAccount);
		  iconGuy.addEventListener('click', gotoAccount);
	  }
	  function gotoAccount(){
		  toggleMenu()
		  var accountLink = document.querySelector('.gnav20-mobile .gnav20-primary-menu:not(.gnav20-hide) #gnav20-Account-L1-mobile') || document.querySelector('.gnav20-mobile .gnav20-primary-menu:not(.gnav20-hide) #gnav20-Account-L1');
		  var closeIcon = document.querySelector('#gnav20-mobile-menu #gnav20-closex');
		  
		  if(accountLink){
			  accountLink.click()
		  }
		  if(closeIcon){
			  closeIcon.focus()
		  }
	  }
  
  
	  //Mobile Menu outside click
	  document.body.addEventListener("click", function (event) {
		  if ((event.target || this).classList.contains("gnav20-menuop") || (event.target || this).classList.contains("gnav20-contactus")) {
			  closeMenu(event);
			  if ((event.target || this).classList.contains("gnav20-contactus") && (event.target || this).id) {
				  let url = window.location.href;
				  window.location.href = url + '/#' + (event.target || this).id
			  }
		  }
		  //close L1 menu on click outside of main nav
		  if(event.target && !event.target.closest('.gnav20-mobile') && !event.target.closest('.gnav20-global-nav-list') && !event.target.closest('.gnav20-utility') && document.querySelector('.gnav20 .gnav20-desktop .gnav20-sub-header-menu.gnav20-grouping-active')) {
			  closeMenuL1(event);
		  }
		  // close mobile menu on click of href. some href do not reload page
		  if(event.target && event.target.href && event.target.closest('.gnav20-mobile-menu') && document.getElementById('gnav20-closex')){
			  document.getElementById('gnav20-closex').click();
		  }
		  
		  if(event.target && event.target.href && event.target.closest('.gnav20-account-utility') && event.target.closest('.gnav20-account-utility').querySelector('.gnav20-close-account-utility')){
			  event.target.closest('.gnav20-account-utility').querySelector('.gnav20-close-account-utility').click();
		  }
	  });
  
	  function closeMenu(event) {
		  toggleMenu();
		  setTimeout(function () {
			  signinContentHide();
			  storeContentHide();
			  MenuContentBack();
			  languageContentHide();
		  }, 500);
  
  
		  var element = document.querySelectorAll(".gnav20-mobile .gnav20-visibilty-hidden");
		  for (var i = 0; i < element.length; i++) {
			  element[i].classList.remove("gnav20-visibilty-hidden");
		  }
		  var navEle = document.querySelector("#gnav20-nav-toggle")
		  if (navEle) {
			  setTimeout(function () {
				  navEle.focus();
			  }, 1000);
		  }
		  
		  event.preventDefault();
	  }
  
	  // cart close for MObile 
	  function closeMCart() {
		  var element = document.querySelector(".gnav20-unifiedcart #gnav20-mySidenav");
		  if (element) {
			  element.classList.add("gnav20-hide");
		  }
	  }
  
  
	  var togglEle = document.querySelector("#gnav20-nav-toggle")
	  if (togglEle) {
		  togglEle.removeEventListener('click', toggleMenu);
		  togglEle.addEventListener('click', toggleMenu);
	  }
	  var closeEle = document.querySelector("#gnav20-closex.gnav20-closex")
	  if (closeEle) {
		  closeEle.removeEventListener('click', closeMenu);
		  closeEle.addEventListener('click', closeMenu);
	  }
  
  
  
  
  
	  var cCloseEle = document.querySelector("#gnav20-cclosex.ganv20-closex")
	  if (cCloseEle) {
		  cCloseEle.removeEventListener('click', closeMCart);
		  cCloseEle.addEventListener('click', closeMCart);
	  }
  
  
	  
	  
  };
  
  
  gnav20.initUnifiedCart = function() {
	  var unifiedCartSvg = document.querySelectorAll('.gnav20-unifiedcart .gnav20-cart, .gnav20-unified-cart .gnav20-closex')
	  for (var i = 0; i < unifiedCartSvg.length; i++) {
		  unifiedCartSvg[i].removeEventListener('click', openUnifiedCart);
		  unifiedCartSvg[i].addEventListener("click", openUnifiedCart);
	  }
  
	  function modalKeypress(event) {
		  var isMovingForward = (event.key === 'Tab' && !event.shiftKey) || event.key === 'ArrowDown';
		  var isMovingBackward = (event.key === 'Tab' && event.shiftKey) || event.key === 'ArrowUp';
		  if (!isMovingForward && !isMovingBackward) {
			  return;
		  }
		   var unifiedflyoutCart = document.querySelector('#gnav20-my-side-nav');
		   var unifiedflyoutCartIframe = document.querySelector('.gnav20-cart-flyout');
		  if (!unifiedflyoutCart || !unifiedflyoutCartIframe?.contentWindow?.document) {
			  return;
		  }
  
		  var focusableElements = 'a[href]:not([disabled]), button:not([disabled]), input:not([disabled]), textarea:not([disabled]), select:not([disabled]), [tabindex]:not([tabindex="-1"]), [contenteditable="true"]';
		  var focusableContent = unifiedflyoutCart.querySelectorAll(focusableElements);
		  var firstFocusableElement = focusableContent[0];
		  var focusableContentFlyout = unifiedflyoutCartIframe.contentWindow.document.querySelectorAll(focusableElements);
		  var lastFocusableElement = focusableContentFlyout[focusableContentFlyout.length - 1];
  
		  if (focusableContent.length === 0) {
			  return;
		  }
  
		  if (isMovingBackward) { // Shift + Tab
			  if (document.activeElement === firstFocusableElement) {
				  lastFocusableElement.focus();
				  event.preventDefault();
			  }
		  }else{ // Tab
			  if (document.activeElement === lastFocusableElement) {
				  firstFocusableElement.focus();
				  event.preventDefault();
			  }
		  }
	  }
	  
	  function openUnifiedCart(event, noFocus) {
		  if (event == gnav20.cartClickEvent) {
			  return false;
		  }
		  var signInPanel = document.querySelector('.gnav20-account-box .gnav20-dropdown-menu:not(.gnav20-hide)')
		  if (signInPanel) {
			  gnav20.signInCloseMenu()
		  }
		  gnav20.cartClickEvent = event;
		  var flyoutModalInitiator;
		  if (event) {
			  var unifiedCart = event.target.closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart')
			  var closeButtonOnCart = event.target.closest('.gnav20-unifiedcart').querySelector('.gnav20-closex')
			  var selcartBackDrop = document.querySelector(".gnav20-tablet-back-drop");
			  var cartIcon = event.target.parentElement.closest('.gnav20-unifiedcart').querySelector('.gnav20-cart')
			  var isMobile = event.target.closest('.gnav20-mobile')
			  var isDesktopOverlay = event.target.closest('.gnav20-desktop')
			  var flyoutEnabled = document.querySelector(".gnav20-unified-cart").classList.contains('gnav20-flyout-cart-enabled');
		  } else {
			  var unifiedCart = document.querySelector('.gnav20-desktop .gnav20-unified-cart')
			  var closeButtonOnCart = unifiedCart.querySelector('.gnav20-closex')
			  var cartIcon = unifiedCart.parentElement.querySelector('.gnav20-cart')
		  }
  
		  if (selcartBackDrop) {
			  var cartBackDrop = event.target.closest(".gnav20-utility").querySelector(".gnav20-tablet-back-drop");
			  cartBackDrop.classList.remove('gnav20-hide');
		  }
		  if (unifiedCart) {
			  
			  var wirelessAuth = gnav20.getCookie('loggedIn');
			  var cartCountCookieName = wirelessAuth ? "gnCartCount" : "prospectCartCount",
				  cartCount = parseInt(gnav20.getCookie(cartCountCookieName));
				  
			  if (unifiedCart.classList.contains("gnav20-hide")) { //Open cart	        
				  gnav20.activeCloseButton = unifiedCart.querySelector('.gnav20-closex')
				  unifiedCart.classList.remove("gnav20-hide");
				  if (closeButtonOnCart && isMobile) {
					  closeButtonOnCart.focus();
				  }
				  if (cartIcon) {
					  cartIcon.setAttribute('aria-expanded', 'true');
				  }
				  if (unifiedCart.closest('.gnav20-unifiedcart').querySelector(".gnav20-vzmoverlay")) {
					  unifiedCart.closest('.gnav20-unifiedcart').querySelector(".gnav20-vzmoverlay").classList.add('gnav20-menuop');
				  }
				  
				  if (isMobile) {
					  document.body.classList.add('gnav20-modal-menu-open')
					  gnav20.closeElementQuery = '#gnav20-my-side-nav-mobile'
					  toggleAriaHiddenGnav20("cart", !0); // rcw moved to mobile only for a11y 2406 ER
					  gnav20.setFocusTrap(unifiedCart) //rcw moved to mobile only for a11y 2406 ER
				  } else {
					  gnav20.closeElementQuery = '#gnav20-my-side-nav'
				  }
				  
				  var pdpFlyoutCart = cartIcon.classList.contains('gnav20-cart-icon-flyout');
				  
				  if((flyoutEnabled || gnav20.getCookie('enableFlyoutCartCookie') === "true") && (!pdpFlyoutCart) && ((cartCount > 0 && gnav20.getCookie('ngdPdpViewed') === "true") || ( gnav20.getCookie('isPlansFirstFlow') === "true" && (gnav20.getCookie('MLP_PF') === "1" || gnav20.getCookie('MLP_BYOD') === "1" )))){
					  gnav20.flyoutCartCheck();
				  }
				  var cartToast = unifiedCart.classList.contains('gnav20-cart-toast');
				  var flyoutSuccess = unifiedCart.classList.contains('gnav20-unified-flyout-success');
				  
			  gnav20.flyoutCartPDPIframe = function() {			
					  if (isDesktopOverlay) {							
						  document.querySelector(".gnav20-unifiedcart .gnav20-vzmoverlay").classList.add("gnav20-desktopOverlay")
					  }
					  
							  var unifiedCartFlyoutPdp = document.querySelectorAll('.gnav20-unifiedcart .gnav20-cart');
							  if (unifiedCartFlyoutPdp && unifiedCartFlyoutPdp.length > 0) {
								  for (var i = 0; i < unifiedCartFlyoutPdp.length; i++) {
									  if(unifiedCartFlyoutPdp[i].clientHeight > 0) {
										  var authFlyout = unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').classList.contains('gnav20-auth-flyout-cart');
										  var flyoutFrame = document.createElement("iframe");
											  flyoutFrame.setAttribute("class", "gnav20-cart-flyout");
											  if(wirelessAuth && authFlyout){
												  flyoutFrame.setAttribute("src", "/nextgendigital/sales/browse/auth/flyoutcart/pdp/");
											  }else{
												  flyoutFrame.setAttribute("src", "/nextgendigital/sales/browse/flyoutcart/pdp/");
											  }
											  
											  if(unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart')){
												  unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').append(flyoutFrame);
												  console.log("PDP FLYOUT CREATED");
											  }else{
												  console.error("PDP FLYOUT IFRAME FAILED");
											  }											
											  
										  var loader = document.createElement("span");
											  loader.setAttribute("class", "flyout-overlay");
										  var loaderPos = unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-unified-flyout-success");
										  if(loaderPos){
											  if(unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector(".cart-button-container")){
												  loaderPos.insertBefore(loader,loaderPos.children[3]);
											  }else{
												  loaderPos.insertBefore(loader,loaderPos.children[2]);
											  }
											  unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector(".flyout-overlay").innerHTML = "<div id='load-indicator'></div>";
											  console.info("PDP FLYOUT LOADER CREATED");
										  }else{
											  console.error("PDP FLYOUT LOADER FAILED");
										  }
										  if(unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title")){
											  unifiedCartFlyoutPdp[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title").innerHTML = "<div class='gnav20-cart-title-success' id ='gnav20-cart-title-wrapper'><div class='gnav20-cart-title-successIcon'></div><div class='gnav20-cart-title-successMessage' id='gnav20-cart-success-title-flyout'>Added to your cart</div></div>";
										  }else{
											  console.log("PDP FLYOUT TITLE");
										  }
									  }
								  }
							  }
							  document.querySelector("#gnav20-cclosex").setAttribute("data-track", "Flyout Cart close");			
			  }
				  
			  gnav20.flyoutCart = function() {
					  if (isDesktopOverlay) {							
						  document.querySelector(".gnav20-unifiedcart .gnav20-vzmoverlay").classList.add("gnav20-desktopOverlay")
					  }
							  var unifiedCartFlyoutGnav = document.querySelectorAll('.gnav20-unifiedcart .gnav20-cart');
							  if (unifiedCartFlyoutGnav && unifiedCartFlyoutGnav.length > 0) {
								  for (var i = 0; i < unifiedCartFlyoutGnav.length; i++) {
									  if(unifiedCartFlyoutGnav[i].clientHeight > 0) {
										  if(unifiedCartFlyoutGnav[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-title-success")){
										  unifiedCartFlyoutGnav[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-title-success").remove();
										  }
										  if(unifiedCartFlyoutGnav[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart").classList.contains('gnav20-unified-flyout-success')){
											  if(document.querySelector('body').classList.contains("gnav20-flyout-chat")){
												  return;
											  }
											  return;
										  }else{
											  document.querySelector('body').classList.add("gnav20-flyout-chat");
										  }
										  unifiedCartFlyoutGnav[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title").innerText = "Your cart";
										  gnav20.flyoutCartGnav();
									  }
								  }
							  }
							  window.coreData = window.coreData || [];
							  window.coreData.push({
								  task: "emit",
								  event: "openView",
								  params: {
									  selector: ".gnav20-unified-cart",
									  name: "Flyout Cart_GlobalNav"
								  }
							  });
							  document.querySelector("#gnav20-cclosex").setAttribute("data-track", "Flyout Cart close");	
			  }
				  
			  if ((flyoutEnabled || gnav20.getCookie('enableFlyoutCartCookie') === "true")  && !cartToast && flyoutSuccess  && ( ( gnav20.getCookie('isPlansFirstFlow') === "true" && (gnav20.getCookie('MLP_PF') === "1" || gnav20.getCookie('MLP_BYOD') === "1" )) || ((cartCount > 0) && ((gnav20.getCookie('ngdPdpViewed') === "true")||(window.gnavdl.options.flyout == true))))) {
				  if (!pdpFlyoutCart) {
					  gnav20.flyoutCart();
				  }
			  }else {
				  window.coreData = window.coreData || [];
				  window.coreData.push({
					  task: "emit",
					  event: "openView",
					  params: {
						  selector: ".gnav20-unified-cart",
						  name: "global nav:cart menu"
					  }
				  });
			  }
  
  
			  if ((flyoutEnabled || gnav20.getCookie('enableFlyoutCartCookie') === "true")  && !cartToast && flyoutSuccess && ((gnav20.getCookie('ngdPdpViewed') === "true") || (window.gnavdl.options.flyout == true))) {
					  if (pdpFlyoutCart) {
						  gnav20.flyoutCartPDPIframe();
					  }
				  }
  
			  if ((flyoutEnabled || gnav20.getCookie('enableFlyoutCartCookie') === "true")  && !cartToast && flyoutSuccess && (gnav20.getCookie('ngdPdpViewed') === "true" || ( gnav20.getCookie('isPlansFirstFlow') === "true" && (gnav20.getCookie('MLP_PF') === "1" || gnav20.getCookie('MLP_BYOD') === "1" )))) {
				  var unifiedflyoutCart = document.querySelector('#gnav20-my-side-nav');
				  var unifiedflyoutCartIframe = document.querySelector('.gnav20-cart-flyout');
				  document.addEventListener('keydown', modalKeypress);
			  }
				  
			  setTimeout("document.body.addEventListener('click', gnav20.clickOutsideClose)", 1);
  
			  } else { // Close cart				
				  if (cartIcon) {
					  cartIcon.setAttribute('aria-expanded', 'false')
					  if (!noFocus) {
						  if(closeButtonOnCart.classList.contains("flyout-closex")){
							  var flyoutModalInitiator = gnav20.initiatorElement();
								  if (flyoutModalInitiator) {
									  flyoutModalInitiator.focus();
								  }
							  }else{
							  cartIcon.focus();
						  }
					  } // rcw a11y 2406 ER 
				  }
				  unifiedCart.classList.add("gnav20-hide");
				  if (unifiedCart.closest('.gnav20-unifiedcart').querySelector(".gnav20-vzmoverlay")) {
					  unifiedCart.closest('.gnav20-unifiedcart').querySelector(".gnav20-vzmoverlay").classList.remove('gnav20-menuop');
				  }
				  if (flyoutEnabled || (gnav20.getCookie('enableFlyoutCartCookie') === "true") && (gnav20.getCookie('ngdPdpViewed') === "true" || ( gnav20.getCookie('isPlansFirstFlow') === "true" && (gnav20.getCookie('') === "1" || gnav20.getCookie('MLP_BYOD') === "1" )))) {
					  document.querySelector(".gnav20-unifiedcart .gnav20-vzmoverlay").classList.remove("gnav20-desktopOverlay");			
						  if(document.querySelector('body').classList.contains("gnav20-flyout-chat")){
						   document.querySelector('body').classList.remove("gnav20-flyout-chat");
						  }
				  
					  var wirelessAuth = gnav20.getCookie('loggedIn');
					  var cartCountCookieName = wirelessAuth ? "gnCartCount" : "prospectCartCount",
					  cartCount = parseInt(gnav20.getCookie(cartCountCookieName));
					  
					  var unifiedCartFlyout = document.querySelectorAll('.gnav20-unifiedcart .gnav20-cart');
					  if (unifiedCartFlyout && unifiedCartFlyout.length > 0) {
						  for (var i = 0; i < unifiedCartFlyout.length; i++) {
							  if(unifiedCartFlyout[i].clientHeight > 0) {
								  if(unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".flyout-overlay")){
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".flyout-overlay").remove();
								  }if (unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-flyout-cart-enabled iframe")) {
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-flyout-cart-enabled iframe").remove();
								  }if (unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-closex")){
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-closex").setAttribute('aria-label', 'Close Shopping Cart');
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-closex").classList.remove('flyout-closex');
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').removeAttribute("role","dialog");
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').removeAttribute("aria-modal","true");
								  }if(unifiedCartFlyout[i].closest(".gnav20-cart-icon-flyout")){
									  unifiedCartFlyout[i].closest(".gnav20-cart-icon-flyout").classList.remove("gnav20-cart-icon-flyout");
								  }if(unifiedCartFlyout[i].closest('.gnav20-unifiedcart').closest('.gnav20-unifiedcart').querySelector(".gnav20-unified-flyout-success")){
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart").classList.remove("gnav20-unified-flyout-success");
								  }if(unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".cart-button-container")){
									  unifiedCartFlyout[i].closest('.gnav20-unifiedcart').querySelector(".cart-button-container").classList.remove('hide-flyout-cta');
								  }
							  }
						  }
					  }
					  if(cartCount<=0){
					  var unifiedCartFlyoutNull = document.querySelectorAll('.gnav20-unifiedcart .gnav20-cart');
					  if (unifiedCartFlyoutNull && unifiedCartFlyout.length > 0) {
						  for (var i = 0; i < unifiedCartFlyoutNull.length; i++) {
							  if(unifiedCartFlyoutNull[i].clientHeight > 0) {
								  if(unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-unified-cart").classList.contains('gnav20-unified-flyout-success')){
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').classList.remove("gnav20-unified-flyout-success");
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').removeAttribute("role","dialog");
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector('.gnav20-unified-cart').removeAttribute("aria-modal","true");
								  }
								  if(unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector('#gnav20-cart-title-wrapper')){
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector('#gnav20-cart-title-wrapper').remove();
								  }
								  if(unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector("#gnav20-cart-content-title-flyout")){
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title").removeAttribute("id","gnav20-cart-content-title-flyout");
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title").removeAttribute("role","heading");
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-cart-content-title").remove();
									  var defaultHeader = "<p class='gnav20-cart-content-title'>Choose your cart:</p><ul class='gnav20-content-lists'><li class='gnav20-content-list'><a id='gnav20-cart-list-item-1' class='gnav20-content-list-arrow gnav20-mobile-cart-count' href='#' data-track='global nav:cart menu:mobile solutions'>Mobile solutions</a></li><li class='gnav20-content-list'><a id='gnav20-cart-list-item-2' class='gnav20-content-list-arrow gnav20-home-cart-count' href='https://wwwawssit.ebiz.verizon.com/inhome/resumecart?xpssource=learn&amp;gnavOffSearchFlag=true' data-track='global nav:cart menu:home solutions'>Home solutions</a></li></ul>";				
									  unifiedCartFlyoutNull[i].closest('.gnav20-unifiedcart').querySelector(".gnav20-unified-cart").insertAdjacentHTML('afterbegin', defaultHeader);									
								  }
							 }
						  }
					  }
					  }
				  }
				  gnav20.activeCloseButton = null // rcw added 2407 a11y
  
				  if (selcartBackDrop) {
					  cartBackDrop = event.target.closest(".gnav20-utility").querySelector(".gnav20-tablet-back-drop");
					  cartBackDrop.classList.add('gnav20-hide');
				  }
  
				  document.removeEventListener('keydown', modalKeypress);
				  document.body.removeEventListener('click', gnav20.clickOutsideClose);
				  document.body.classList.remove('gnav20-modal-menu-open')
				  if (isMobile) {
					  toggleAriaHiddenGnav20("cart", !1); // rcw moved to mobile only for a11y 2406 ER
					  gnav20.clearFocusTrap() // rcw moved to mobile only for a11y 2406 ER
				  }
				  
				  var CartLinksDefault = document.querySelectorAll('.gnav20 .gnav20-unified-cart .gnav20-content-list:first-child a');
					  if(CartLinksDefault.length > 0){
						  for (var i = 0; i < CartLinksDefault.length; i++) {
							  CartLinksDefault[i].removeEventListener("click", gnav20.cartUtility);
							  CartLinksDefault[i].addEventListener("click", gnav20.cartUtility);
							  CartLinksDefault[i].href = "#"
						  }
					  }
  
			  }
		  }
		  
	  }
	  gnav20.openUnifiedCart = openUnifiedCart
  }
  
  
  gnav20.closeCart = function() {
	  var cartPanel = document.getElementById('gnav20-my-side-nav'),
		  cartButt = document.getElementById('gnav20-cclosex')
	  if (cartPanel && cartButt && !cartPanel.classList.contains('gnav20-hide')) {
		  cartButt.click()
	  }
  }
  
  //NEW Show smb cart icon - VBG38665-157
  gnav20.showSMBBubble = function() {
	  var vbgCartCookies = ["vbmlqresult", "prospectCartId", "SMB_PROSPECT_CARTQTY"],
		  cookieVal, gnavCart, cartBubble
  
	  for (var ii = 0; ii < vbgCartCookies.length; ii++) {
  
		  cookieVal = gnav20.getCookie(vbgCartCookies[ii])
  
		  if (cookieVal && parseInt(cookieVal) != 0) {
  
			  gnavCart = document.getElementsByClassName("gnav20-cart-wrapper");
			  for (var i = 0; i < gnavCart.length; i++) {
				  gnavCart[i].classList.remove("gnav20-hide");
				  gnavCart[i].style.display = 'block';
			  }
  
			  cartBubble = document.getElementsByClassName("gnav20-cart-bubble");
			  for (i = 0; i < cartBubble.length; i++) {
				  cartBubble[i].style.display = 'block';
			  }
  
			  break;
		  }
	  }
  }
  
  var btnEle = document.querySelector('.gnav20-custom-modal-btn');
  var closeBtnEle = document.querySelector('.gnav20-custom-modal-close-btn')
  if (btnEle) {
	  btnEle.removeEventListener('click', openContactUsModal);
	  btnEle.addEventListener('click', openContactUsModal);
  }
  
  if (closeBtnEle) {
	  closeBtnEle.removeEventListener('click', closeContactUsModal);
	  closeBtnEle.addEventListener('click', closeContactUsModal);
  }
  
  var modalEle = document.querySelector('.gnav20-modal')
  function openContactUsModal(event) {
  
	  if (modalEle) {
		  modalEle.style.display = "block";
		  modalEle.setAttribute('aria-hidden', 'false');
		  modalEle.setAttribute('tabindex', '0');
		  closeBtnEle.focus();
				  gnav20.setFocusTrap(modalEle)
		  
		  event.preventDefault();
		  event.stopPropagation();
  
	  }
  }
  
  function closeContactUsModal(event) {
	  if (modalEle) {
		  modalEle.style.display = "none";
		  modalEle.setAttribute('aria-hidden', 'true');
		  modalEle.setAttribute('tabindex', '-1');
		  gnav20.clearFocusTrap()
		  event.preventDefault();
		  event.stopPropagation();
	  }
  }
  
  
  function downFunction() {
	  document.body.scrollTop = 1750;
	  document.documentElement.scrollTop = 1750;
  }
  
  /* Accessibility code for toggling the aria hidden true/false on click of modal overlay .
   * This will restrict screen reader to read the background content, when a modal overlay is opened
   * */
  function toggleAriaHiddenGnav20(overlay,bool,timer){
	  
	  //console.log('toggleAriaHiddenGnav20',overlay,bool,timer)// rcw added changes to this func for a11y 2406 ER
	  
	  if(!timer){
		  gnav20.togOverlay = overlay
		  gnav20.togBool = bool
		  setTimeout("toggleAriaHiddenGnav20(gnav20.togOverlay,gnav20.togBool,true)",100)
		  return
	  }
	  /*  commented 11/5/21 
	  if(overlay == 'L1'){
		  gnav20.toggleZindex(bool)
	  }
	  */
	  var toggleNodesGnav = {
		  hamburger: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-logo','.gnav20-utility','#vz-gf20'],
		  cart: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-row-one','.gnav20-logo','.gnav20-navigation','.gnav20-account-utility','.gnav20-search-utility','.gnav20-mobile .gnav20-wishlist','.gnav20-mobile #gnav20-nav-toggle','#gnav20-mobile-menu.gnav20-mobile-menu','#vz-gf20'],
		  signin: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-row-one','.gnav20-logo','.gnav20-navigation','.gnav20-mobile .gnav20-utility','.gnav20-mobile-menu #gnav20-footerlink .gnav20-store','.gnav20-mobile-menu #gnav20-footerlink .gnav20-localization'],
		  signinFromHeader: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-row-one','.gnav20-logo','.gnav20-navigation','.gnav20-search-utility','.gnav20-unifiedcart','.gnav20-mobile .gnav20-wishlist','.gnav20-mobile .gnav20-unifiedcart','.gnav20-mobile #gnav20-nav-toggle','.gnav20-mobile-menu #gnav20-footerlink .gnav20-store','.gnav20-mobile-menu #gnav20-footerlink .gnav20-localization'],
		  search: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-row-one','.gnav20-logo','.gnav20-navigation','.gnav20-account-utility','.gnav20-mobile .gnav20-search-icon','.gnav20-desktop .gnav20-unifiedcart','.gnav20-mobile .gnav20-unifiedcart','.gnav20-cart','.gnav20-mobile .gnav20-wishlist','.gnav20-mobile #gnav20-nav-toggle','.gnav20-mobile-menu','#vz-gf20'],
		  languageChange: ['.gnav20-header-accessibility','.gnav20-ribbontext','.gnav20-logo','.gnav20-mobile .gnav20-utility .gnav20-search-utility','.gnav20-mobile .gnav20-utility .gnav20-language-box #gnav20-language-selection-menu','.gnav20-mobile .gnav20-utility #gnav20-nav-toggle','.gnav20-mobile .gnav20-mobile-menu'],
		  modal: ['.gnav20-header-accessibility','.gnav20-promo-text','.gnav20-apicomponentnolayout','.gnav20-mobile .gnav20-utility #gnav20-nav-toggle','#vz-gf20'],
		  L1: ['.gnav20-promo-text', '.gnav20-row-two .gnav20-utility','#gnav20-header-end'] //'.gnav20-header-accessibility','.gnav20-row-one','.gnav20-logo',
	  }
	  
	  var toggleNodesDOM = document.querySelectorAll('body > span:not(:empty), body > div:not(:empty), body > section:not(:empty), body > header:not(:empty), body > footer:not(:empty)'),
		  x;
			  
	  if(/responsivegrid/.test(toggleNodesDOM[0].classList)){
		  //console.log('responsivegrid')
		  toggleNodesDOM = document.querySelectorAll('main, #vz-gf20')
	  }
	  
	  for(var i=0; i<toggleNodesDOM.length; i++) {
			  x = toggleNodesDOM[i]
			  //console.log(x)
			  if(x.children && x.children.length && !x.querySelector('.gnav20-desktop')){
					  //console.log('toggle this one')
				  x.setAttribute('aria-hidden',bool)		
				  // BELOW is a hack to fix a bug in JAWS where links inside aria-hidden parent are announced if they have title or aria-label
				  var xl = x.querySelectorAll("a[aria-label], a[data-aria-label], a[title], a[data-title")
					  for(var iii=0;iii<xl.length;iii++){
						  //console.log('aria-label',xl[iii].getAttribute('aria-label'))
						  //console.log('data-aria-label',xl[iii].getAttribute('data-aria-label'))
						  if(xl[iii].hasAttribute('aria-label') || xl[iii].hasAttribute('data-aria-label')){
							  if(bool){
								  xl[iii].setAttribute('data-aria-label',xl[iii].getAttribute('aria-label'));
								  xl[iii].removeAttribute('aria-label')
							  }else{	
								  xl[iii].setAttribute('aria-label',xl[iii].getAttribute('data-aria-label'));
							  }
						  }
						  if(xl[iii].hasAttribute('title') || xl[iii].hasAttribute('data-title')){
							  if(bool){
								  xl[iii].setAttribute('data-aria-label',xl[iii].getAttribute('title'));
								  xl[iii].removeAttribute('title')
							  }else{	
								  xl[iii].setAttribute('title',xl[iii].getAttribute('data-title'));
							  }
						  }
						  
					  }
			  }
	  }
	  
	  if(toggleNodesGnav[overlay]){
		  for(i=0; i<toggleNodesGnav[overlay].length; i++) {
			  //console.log(overlay)
			  x = document.querySelectorAll(toggleNodesGnav[overlay][i])
			  for(var ii=0; ii<x.length; ii++) {
				  //console.log('--x =',x)
					  x[ii].setAttribute('aria-hidden',bool);
					  xl = x[ii].querySelectorAll("a[aria-label], a[data-aria-label]")
					  for(var iii=0;iii<xl.length;iii++){
						  //console.log('aria-label',xl[iii].getAttribute('aria-label'))
						  //console.log('data-aria-label',xl[iii].getAttribute('data-aria-label'))
						  if(bool){
							  if(xl[iii].getAttribute('aria-label')) {
								  xl[iii].setAttribute('data-aria-label',xl[iii].getAttribute('aria-label'));
								  xl[iii].removeAttribute('aria-label');
							  }
						  }else{
							  if(xl[iii].getAttribute('data-aria-label')) {
								  xl[iii].setAttribute('aria-label',xl[iii].getAttribute('data-aria-label'));
							  }
						  }
						  
					  }
				  //console.log(ii,toggleNodesGnav[overlay][i],x[ii])
			  }
		  }
	  }
  }
  gnav20.initLOB = function () {
		  function lobOpenMenu(event) {
			  if ((event.target || this).closest('.gnav20-sub-lob-box') && (event.target || this).closest('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu')) {
				  (event.target || this).setAttribute('aria-expanded', 'true');
				  (event.target || this).closest('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu').classList.remove("gnav20-hide");
				  (event.target || this).closest('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu').setAttribute('aria-expanded', 'true');
			  }
		  };
  
		  function lobCloseMenu(event) {
			  if ((event.target || this).closest(".gnav20-desktop") && (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box') &&
				  (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu') &&
				  (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box').querySelector('.gnav20-sub-lob')) {
				  (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu').classList.add("gnav20-hide");
				  (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box').querySelector('.gnav20-dropdown-menu').setAttribute('aria-expanded', 'false');
				  (event.target || this).closest(".gnav20-desktop").querySelector('.gnav20-sub-lob-box').querySelector('.gnav20-sub-lob').setAttribute('aria-expanded', 'false');
			  }
		  };
  
	  function expandLOBOnKeyPress(event) {
		  event.preventDefault();
		  event.stopPropagation();
		  var keyCode = event.which;
		  if (keyCode == 13 || keyCode == 32 || keyCode == 1) {
			  if ((event.target || this).nextElementSibling.classList.contains("gnav20-hide")) {
				  lobOpenMenu(event);
			  } else {
				  lobCloseMenu(event);
			  }
		  }
	  };
	  
	  function lobToggle() {		
		  var lobBox = document.querySelector(".gnav20-mobile .gnav20-sub-lob-box .gnav20-dropdown-menu");
		  if (lobBox.classList.contains("gnav20-hide")) {
			  lobBox.classList.remove("gnav20-hide");
		  }
		  var lobLink = document.querySelector(".gnav20-mobile .gnav20-sub-lob-box .gnav20-sub-lob");
		  if (!lobLink.classList.contains("gnav20-hide")) {
			  lobLink.classList.add("gnav20-hide");
		  }
	  }
	  
	  function setBusinessUnitSelection(event) {
		  if(event.target.innerText && /business|personal/.test(event.target.innerText.toLowerCase())) {
			  var bu = /personal/.test(event.target.innerText.toLowerCase())
					  ? "personal"
					  : "business"
			  gnav20.setCookie("VZ_ATLAS_SITE_PERS","BusinessUnit=" + bu, 365);
		  }		
	  }
	  
	  var lobBox = document.querySelector(".gnav20-desktop .gnav20-sub-lob-box");
	  if (lobBox) {
		  lobBox.removeEventListener("mouseleave", lobCloseMenu);
		  lobBox.addEventListener("mouseleave", lobCloseMenu);
	  }
	  var lobElement = document.querySelector(".gnav20-desktop .gnav20-sub-lob-box .gnav20-sub-lob");
	  if (lobElement) {        
		  lobElement.removeEventListener("mouseover", lobOpenMenu);
		  lobElement.addEventListener("mouseover", lobOpenMenu);
		  
		  lobElement.removeEventListener("keypress", expandLOBOnKeyPress);
		  lobElement.addEventListener("keypress", expandLOBOnKeyPress);
  
		  // click event for Screen readers like NVDA , JAWS
		  lobElement.removeEventListener("click", expandLOBOnKeyPress);
		  lobElement.addEventListener("click", expandLOBOnKeyPress);
		  
		  var navList = document.querySelector(".gnav20-mobile .gnav20-navigation-list");
		  if(navList) {
			  var link = document.createElement('a');
			  link.classList.add("gnav20-lob-link");
			  if(document.getElementById("gnav20-lob-link-label")) {
				  link.innerText = document.getElementById("gnav20-lob-link-label").value;
			  }
			  navList.appendChild(link);
			  
			  link.addEventListener("click", lobToggle);
		  }
	  }	
	  
	  var eybrowLinks = document.querySelectorAll(".gnav20-eyebrow-link-list-item > a");
	  for (i=0; i < eybrowLinks.length; i++){
		  eybrowLinks[i].removeEventListener("click", setBusinessUnitSelection);   
		  eybrowLinks[i].addEventListener("click", setBusinessUnitSelection);    
	  }
	  
	  // Start Of-  closing the Sub-lob-menu drop-down if focus goes out of the dropdown 
	  if (lobElement) {
		  lobElement.addEventListener('blur', checkSubLobMenuFocus);
	  }
  
  
	  function checkSubLobMenuFocus(event) {
		  setTimeout(function () {
			  if (!document.activeElement.classList.contains("gnav20-dropdown-list-item") && (!/gnav20-hide/.test(document.querySelector('.gnav20-desktop .gnav20-sub-lob-box .gnav20-dropdown-menu').classList))) {
				  lobCloseMenu(event);
			  }
		  }, 10)
	  }
	  var subLobMenuItems = document.querySelectorAll(".gnav20-desktop .gnav20-sub-lob-box .gnav20-dropdown .gnav20-dropdown-list .gnav20-dropdown-list-item");
  
	  if (subLobMenuItems != null) {
		  for (var i = 0; i < subLobMenuItems.length; i++) {
			  subLobMenuItems[i].removeEventListener("blur", checksubLobMenuItemsFocus);
			  subLobMenuItems[i].addEventListener("blur", checksubLobMenuItemsFocus);
			  
		  }
	  }
  
	  function checksubLobMenuItemsFocus(event) {
		  setTimeout(function () {
			  if (!document.activeElement.classList.contains("gnav20-dropdown-list-item")) {
				  lobCloseMenu(event);
			  }
		  }, 10)
	  }
  
	  //End  Of-  closing the Sub-lob-menu drop-down if focus goes out of the drop-down 
  
  
  };
  
  
  
  
  
  
  
  
  //****function to return hostname - const in rls branch ********//
  gnav20.getScriptOrigin = function(){
	  try{
		  let cs = document.querySelector('script[src*="/vzwcom/gnav20"]');
		  if(cs){
			  return cs.src.substr(0,cs.src.indexOf('/etc'));
		  }        
	  }
	  catch(err){
		  //just catching it
	  }
	  return "https://www.verizon.com";
  };
  
  gnav20.initGnavFooter = function() {
	  
  
	  let langLink = document.querySelector("#gnav20-language-selection-menu");
	  let qtLink = document.querySelector("#gnav20-quick-task-selection-menu");
	  if (langLink) {
		  langLink.removeEventListener('click', languageFooterShowHide);
		  langLink.addEventListener('click', languageFooterShowHide);
	  }
	  if (qtLink) {
		  qtLink.removeEventListener('click', quickTaskShowHide);
		  qtLink.addEventListener('click', quickTaskShowHide);
		  
		  qtLink.removeEventListener('keypress', expandQuickTaskMenOnKeyPress);
		  qtLink.addEventListener('keypress', expandQuickTaskMenOnKeyPress);
	  }
	  
	  let quickTaskMenuElements = document.querySelector('#gnav20-quick-task-menu-default');
  
	  // close the Quick task dropdown if focus goes back to the 'default-selected' while pressing shift+tab key.
	  if (quickTaskMenuElements) {
		  quickTaskMenuElements.addEventListener('focus', function () {
			  if (!/gnav20-hide/.test(document.querySelector('.gnav20-dropdown-quick-task-menu').classList)) {
				  quickTaskShowHide();
			  }
		  })
	  }
	  if (quickTaskMenuElements) {
		  quickTaskMenuElements.removeEventListener('blur', checkQuickTaskFocus);
		  quickTaskMenuElements.addEventListener('blur', checkQuickTaskFocus);
	  }
	  
	  let quickTaskItems = document.querySelectorAll(".gnav20-dropdown-quick-task-menu .gnav20-dropdown .gnav20-footer-list .gnav20-quick-task-item-footer");
  
	  if (quickTaskItems) {
		  for (let i = 0; i < quickTaskItems.length; i++) {
			  quickTaskItems[i].removeEventListener("blur", checkQuickTaskItemFooterFocus);
			  quickTaskItems[i].addEventListener("blur", checkQuickTaskItemFooterFocus);
		  }
	  }
	  //Added check to bypass personalization logic in author env
	   if(!gnav20.getCookie("wcmmode")){
			  gnav20.initPersona();
	   }
	  /*Mobile Accordion for GNAV footer code - START
  
	  var footerContainerParent= document.querySelector(".gnav20-footer-container");
	  var accordionElements = document.querySelectorAll(".gnav20-herofooter .gnav20-hero-footer-heading");
	  var innerViewPort = window.innerWidth;
	  var outerViewPort = window.outerWidth;
	  var zoom = (outerViewPort/innerViewPort)*100;  
	  
	  if(footerContainerParent && footerContainerParent.classList.contains('gnav20-mobile-footer-accordion')){
		  for ( var loopCounter = 0; loopCounter < accordionElements.length; loopCounter++) {
			  accordionElements[loopCounter].addEventListener("click", handleAccordion);
			  accordionElements[loopCounter].addEventListener("keydown", handleAccordionOnKeyPress);
			
			  if(innerViewPort <= 767.5 || zoom >= 200){
				  accordionElements[loopCounter].setAttribute("aria-label",accordionElements[loopCounter].innerText+" menu list");
				  accordionElements[loopCounter].setAttribute("tabindex","0");
				  accordionElements[loopCounter].setAttribute("aria-expanded","false");
				  accordionElements[loopCounter].setAttribute("role","button");
				  accordionElements[loopCounter].nextElementSibling.setAttribute("aria-hidden","true");
			  }
			  else{
				  accordionElements[loopCounter].setAttribute("aria-label",accordionElements[loopCounter].innerText+" menu list");				
			  }			
		  }
	  }
	  */
	  
	  gnav20.footerContainer = document.getElementById('vz-gf20')
	  if(gnav20.footerContainer){
		  gnav20.mobileAccordion = function(){
			  if(window.innerWidth < 768 && !gnav20.footerContainer.querySelector('.gnav20-hero-footer-heading[tabindex]')){
				  var accordionElements = gnav20.footerContainer.querySelectorAll(".gnav20-herofooter .gnav20-hero-footer-heading")
				  for ( var loopCounter = 0; loopCounter < accordionElements.length; loopCounter++) {
					  accordionElements[loopCounter].addEventListener("click", handleAccordion);
					  accordionElements[loopCounter].addEventListener("keydown", handleAccordionOnKeyPress);
					  accordionElements[loopCounter].setAttribute("aria-label",accordionElements[loopCounter].innerText+" menu list");
					  accordionElements[loopCounter].setAttribute("tabindex","0");
					  accordionElements[loopCounter].setAttribute("aria-expanded","false");
					  accordionElements[loopCounter].setAttribute("role","button");
					  //accordionElements[loopCounter].nextElementSibling.setAttribute("aria-hidden","true");
					  accordionElements[loopCounter].nextElementSibling.classList.add('gnav20-accordion-list')
				  }
				  if(event && event.target && (event.target.nodeType === 1) && event.target.closest('.gnav20-main-container') && event.target.closest('.gnav20-main-container').querySelector('.gnav20-hero-footer-heading')){
					  event.target.closest('.gnav20-main-container').querySelector('.gnav20-hero-footer-heading').focus()
				  }
			  }
		  }
		  gnav20.footerContainer.addEventListener('keyup',gnav20.mobileAccordion)
		  gnav20.mobileAccordion()
		  
		  // remove contentinfo role if footer is inside a footer HTNML element
		var foot = document.querySelector('.gnav20 div[role=contentinfo]')
		if(foot && foot.closest('footer')){
			foot.removeAttribute('role')
		}
		// call smbFooterData defined in smb.js
		window.smbFooterData && smbFooterData()
	  }
	  
	  
	  
	  /* Copyright update code */
  
	  /*if(document.getElementById("copyright-year"))
		  document.getElementById("copyright-year").innerHTML = new Date().getFullYear();*/
		  
		  
		  if(!document.querySelectorAll('#vz-gf20 a[data-track]').length){
			  var evnt = new Event('gnavReady');
			  document.dispatchEvent(evnt);
			  console.log('dispatch gnavReady after footer')
		  }
  
  };
  
	  function handleAccordion() {		
		  gnav20.toggleElementHeight()
	  }
	  function handleAccordionOnKeyPress(){
		  var key = event.keyCode;
		  if( key == 13 || key == 32){
				  gnav20.toggleElementHeight()
		  }
	  }
  
	  gnav20.toggleElementHeight = function(){
		  if(!event.target.nextElementSibling){
			  return
		  }
		  var maxCount = 100,
			  heightIncrement = 10,
			  timeInterval = 5;
  
		  if(event.target.nextElementSibling.style.display == 'block'){
			  closeMe(event.target)
		  }else{
			  openMe(event.target)
		  }
  
		  function closeMe(target){
			  var el = target.nextElementSibling,
				  counter = 0,
				  newHeight,
				  heightInterval;
			  
			  target.classList.remove("gnav20-accordion-open");
			  target.setAttribute('aria-expanded',false)
  
			  heightInterval = setInterval(function(){
				  var parseHeight = parseInt(el.style.height)
				  /*console.log('closing',parseInt(el.style.height))*/
				  if(parseHeight > 0 && counter < maxCount){
					  newHeight = parseHeight < heightIncrement ? 0 : (parseHeight - heightIncrement);
					  el.style.height = newHeight + 'px';
					  counter++;
				  }else{
					  el.removeAttribute('style')
					  clearTimeout(heightInterval)
				  }
			  },timeInterval)
		  }
  
		  function closeOthers(){
			  var footerHeadings = document.querySelectorAll('.gnav20-herofooter .gnav20-hero-footer-heading')
			  for(var loopCounter=0; loopCounter<footerHeadings.length; loopCounter++){
				  /*console.log('closeOthers',footerHeadings[loopCounter].nextElementSibling.style.display)*/
				  if(footerHeadings[loopCounter].nextElementSibling.style.display == 'block'){
					  closeMe(footerHeadings[loopCounter])
				  }
			  }
		  }
  
		  function openMe(target){
			  closeOthers()
  
			  var el = target.nextElementSibling;
  
			  target.classList.add('gnav20-accordion-open')			
			  target.setAttribute('aria-expanded',true)
			  el.style.display = 'block';
			  el.style.height = 'auto';
		  }
	  }
	  /*Mobile Accordion for GNAV footer code - END */
	  
	  
  gnav20.checkEscapeKey = function(event) {
	  if(event.keyCode == 27 && gnav20.activeCloseButton){
			if(gnav20.activeL3){
			  gnav20?.activeL3?.focus();
			  gnav20?.activeL3?.click();
		  } else if(gnav20.activeL2){
			  gnav20?.activeL2?.focus();
			  gnav20?.activeL2?.click();
		  } else {
				gnav20.activeCloseButton.click()
		  }
	  }
  }
  
  gnav20.sendOffersCaptureResponse = function(response, dispositionOptionId, offerType) {
	  var xhttp = new XMLHttpRequest();
	  let url = gnav20.getScriptOrigin() + "/soe/digital/auth/personalizationrecommendationsservice/pdm/brOffersCaptureResponse";
	  xhttp.onreadystatechange = function () {
		  if (this.readyState == 4 && this.status == 200) {
		  }
	  }
	  var offer = response[offerType][0];
	  var data = JSON.stringify({
		  "source": "brOffersCaptureResponse",
		  "clientId": (response.clientId ? response.clientId : 'MVO'),
		  "mtn": "",
		  "accountNo": "",
		  "customerResponse": {
			  "responseList": [
				  {
					  "rank": (offer.rank ? offer.rank : '1'),
					  "propositionId": (offer.propositionId ? offer.propositionId : ''),
					  "dispositionOptionId": dispositionOptionId,
					  "soiEngagementId": (offer.soiEngagementId ? offer.soiEngagementId : ''),
					  "tacticLocation": (response.contextInfo.pageContext ? response.contextInfo.pageContext : ''),
					  "ctaReference": "",
					  "timeStamp": (response.timestamp ? response.timestamp : '')
				  }
			  ]
		  },
		  "contextInfo": {
			  "callReason": (response.contextInfo.callReason ? response.contextInfo.callReason : 'GlobalNav'),
			  "category": (response.contextInfo.category ? response.contextInfo.category : 'PromoRibbon'),
			  "subServiceName": "CaptureResponse",
			  "pageContext": (response.contextInfo.pageContext ? response.contextInfo.pageContext : ''),
			  "sessionId": (response.sessionid ? response.sessionid : '')
		  }
	  });
	  xhttp.open("POST", url, true);
	  xhttp.setRequestHeader("Channelid", "VZW-DOTCOM");
	  xhttp.setRequestHeader("Content-Type", "application/json");
	  xhttp.send(data);
  }
  
  gnav20.brOffersCaptureResponse = function(response, dispositionOptionId) {
	  gnav20.sendOffersCaptureResponse(response, dispositionOptionId, 'promoRibbon');
  }
  
  gnav20.poOffersCaptureResponse = function(response, dispositionOptionId) {
	  gnav20.sendOffersCaptureResponse(response, dispositionOptionId, 'promoOverlay');
  }
  
  gnav20.highPriorityOfferTagging = function(sessionId, offer, response) {
	  let subCategory = "";
	  if(response?.dynamicAttrList?.some(item => item.attrId === 'displayAsOverlayCard_MTNS')){
		  const mtnList = response.dynamicAttrList.find(item => item.attrId === 'displayAsOverlayCard_MTNS');
		  if(mtnList.value && mtnList.value.length > 0) {
			  let mtnListArray = mtnList.value.split(',');
			  if(mtnListArray.length == 1) {
				  subCategory = "single line";
			  } else {
				  subCategory = "multi line";
			  }
		  }
	  }
  
	  if(window.vzdl && window.vzdl.utils){
		  window.vzdl.utils.locationRefID = offer.soiEngagementId + "|" + offer.cardId + "|" + offer.locationRefId;
	  }
	  window.coreData = window.coreData || [];
	  window.coreData.push({
		  task : "emit",
		  event : "openView",
		  params : {
			  selector : ".gnav20-modal-content",
			  name : (offer.cardId + ":" + offer.propositionName.replaceAll("|", "").trim()),
			  trackAs : "link",
			  data : {
				  page : {
					  contentFragments : "l0|p1||" + subCategory + "|" + offer.soiEngagementId + "|" + offer.propositionId + "|" + offer.dispositionListId + "|" + offer.cardId + ":" + offer.propositionName.replaceAll("|", "").trim(),
				  },
				  utils : {
					  locationRefID : (offer.soiEngagementId + "|" + offer.cardId + "|" + offer.locationRefId),
					  athenaSession : sessionId //evar10
				  }
			  }
		  }
	  });
  
	  window.coreData.push({
		  task : "emit",
		  event : "cradleTestList",
		  params : {
			  id : ("s_" + response.contextInfo.pageContext)
		  }
	  });
  
	  /* //Commented for CXTDT-774181
	  window.coreData.push({
		  task: "emit",
		  event: "impression",
		  params: {
			  list: "l0|p1|||" + offer.soiEngagementId + "|" + offer.propositionId + "|" + offer.dispositionListId + "|" + offer.cardId + ":" + offer.propositionName.replaceAll("|", "").trim(),
			  data : {
				  utils : {
					  locationRefID : (offer.soiEngagementId + "|" + offer.cardId + "|" + offer.locationRefId),
					  athenaSession : sessionId //evar10
				  }
			  }
		  }
	  });*/
  
	  var promoCTAs = document.querySelectorAll(".gnav20 .gnav20-modal-content-wrapper a");
	  for(var i=0; i<promoCTAs.length; i++){
		  let impressionCTA = "l0|p1||" + subCategory + "|" + offer.soiEngagementId + "|" + offer.propositionId + "|" + offer.dispositionListId + "|" + offer.cardId + ":" + offer.propositionName.replaceAll("|", "").trim() + "|" + promoCTAs[i].innerText;
		  promoCTAs[i].setAttribute("data-track", JSON.stringify({
			  "type": "impression",
			  "name": impressionCTA
		  }));
		  gnav20.offerOverlayResponse = response;
		  promoCTAs[i].addEventListener('click', function(response) {
			  gnav20.poOffersCaptureResponse(gnav20.offerOverlayResponse,81);
		  });
	  }
  
	  var promoCloseCTA = document.querySelector(".gnav20 .gnav20-modal-content .gnav20-promo-close-icon");
	  if(promoCloseCTA){
		  promoCloseCTA.setAttribute("data-track", JSON.stringify({
			  "type": "link",
			  "name": "close modal"
		  }));
	  }
  
  }
  
  gnav20.OffersCaptureResponse = function(msg,response,dispositionOptionId) {
	  let gnbrCradle = '';
	  if(response && response.throttleList && response.throttleList.includes("gn_br_t")) {
		  gnbrCradle = "gn_br_t";
	  } else if(response && response.throttleList && response.throttleList.includes("gn_br_c")) {
		  gnbrCradle = "gn_br_c";
	  }
	  let pageContext = '';
	  if(response && response.pageContext) {
		  pageContext = response.pageContext;
	  }
	  if(dispositionOptionId == 82) {
		  let impression = "L0|P1|||" + (response.promoRibbon[0].soiEngagementId ? response.promoRibbon[0].soiEngagementId : '') +
				  "|" + (response.promoRibbon[0].propositionId ? response.promoRibbon[0].propositionId : '') +
				  "|82|gnav ribbon_" + (response.promoRibbon[0].cardId ? response.promoRibbon[0].cardId : '' ) +
				  (gnbrCradle ? "_" + gnbrCradle : "") + (pageContext ? "_" + pageContext : "");
  
		  let impressionJSON = { "list" : impression };
  
  
		  window.coreData = window.coreData || [];
		  window.coreData.push({
			  task : "emit",
			  event : "cradleTestList",
			  params : {
				  id : gnbrCradle,
				  strategy : (response.strategyIdentifier ? response.strategyIdentifier : ''),
				  last2: (response.accountLast2 ? response.accountLast2 : '')
			  }
		  });
		  window.coreData.push({
			  task : "emit",
			  event : "impression",
			  params : impressionJSON
		  });
  
		  let promoCTAs = document.querySelectorAll("#gnav20-promo-placeholder .gnav20-promo a");
		  for(i=0; i<promoCTAs.length; i++){
			  var impressionCTA = impression + "|gnav ribbon_" + promoCTAs[i].innerText;
			  impressionCTA = impressionCTA.replace("|82|","|81|");
			  promoCTAs[i].setAttribute("data-track", JSON.stringify({
				  "type": "impression",
				  "name": impressionCTA
			  }));
			  gnav20.offerResponse = response;
			  promoCTAs[i].addEventListener('click', function(response) {
				  gnav20.brOffersCaptureResponse(gnav20.offerResponse,81);
			  });
  
		  }
		  gnav20.brOffersCaptureResponse(response, dispositionOptionId);
	  } else {
		  let impression = "L0|P1|||||82|gnav ribbon_default_" + msg +
				  (gnbrCradle ? "_" + gnbrCradle : "") + (pageContext ? "_" + pageContext : "");
  
		  let impressionJSON = { "list" : impression };
		  if(gnbrCradle.length > 0) {
			  window.coreData = window.coreData || [];
			  window.coreData.push({
				  task : "emit",
				  event : "cradleTestList",
				  params : {
					  id : gnbrCradle,
					  strategy : '',
					  last2: ''
				  }
			  });
		  }
		  window.coreData.push({
			  task : "emit",
			  event : "impression",
			  params : impressionJSON
		  });
		  let promoCTAs = document.querySelectorAll("#gnav20-promo-placeholder .gnav20-promo a");
		  for(i=0; i<promoCTAs.length; i++){
			  var impressionCTA = impression + "|gnav ribbon_" + promoCTAs[i].innerText;
			  impressionCTA = impressionCTA.replace("|82|","|81|");
			  promoCTAs[i].setAttribute("data-track", JSON.stringify({
				  "type": "impression",
				  "name": impressionCTA
			  }));
		  }
	  }
  }
  
  gnav20.copyNav = function() {
	var mobileHeaderComp = window.getComputedStyle(gnav20.mobileHeader)
	if(gnav20.currentNav == 'desktop' && mobileHeaderComp.getPropertyValue('display') == 'block'){
		gnav20.mobileNav.innerHTML = gnav20.desktopNav.innerHTML
		setTimeout(function(){
			gnav20.initNav();
			// Need to remove desktop styles like on learn K12 where we have aligned colums
			var aligned = document.querySelectorAll(".gnav20 .gnav20-mobile .gnav20-content-wrapper[style]")
			  for(i=0; i<aligned.length; i++){
				  aligned[i].style = null
			  }
			  //need to open and close menu to arrange mega for mobile
			var closex = document.getElementById('gnav20-closex')
			if(closex){
				closex.click();closex.click();
			}
		},10)
		window.removeEventListener('resize', gnav20.copyNavTimeout)
	}else if(gnav20.currentNav == 'mobile' && mobileHeaderComp.getPropertyValue('display') == 'none'){
		gnav20.desktopNav.innerHTML = gnav20.mobileNav.innerHTML
		setTimeout('gnav20.initNav()',10)
		window.removeEventListener('resize', gnav20.copyNavTimeout)
	}
	//console.log('--copyNav',new Date().getTime())
  }
  gnav20.resizeNav = null;
  gnav20.copyNavTimeout = function(){
	  clearTimeout(gnav20.resizeNav);
	  gnav20.resizeNav = setTimeout(gnav20.copyNav, 250);
	  //console.log(new Date().getTime())
  }
  
  gnav20.loadProspectPersonalizedRibbon = function() {
	  var xhttp = new XMLHttpRequest();
	  let url = gnav20.getScriptOrigin() + "/content/caas/gNavRibbon.model.isActive:true.json";
	  xhttp.onreadystatechange = function () {
		  if (this.readyState == 4 && this.status == 200) {
			  try {
				  var promoResponse = JSON.parse(this.responseText);
				  var ribbonMapping = Object.values(promoResponse.ribbonMapping);
				  var fullPath = window.location.pathname;
				  var searchString = window.location.search;
				  var pathString = '';
				  var ribbonObj;
				  for(var i=0; i<ribbonMapping.length; i++) {
					  if(ribbonMapping[i].pageUrl) {
						  var regex = "^" + ribbonMapping[i].pageUrl;
						  if(!ribbonMapping[i].pageUrl.includes("*")) {
							  regex = regex + "$";
						  }
						  if(fullPath.match(new RegExp(regex)) && ribbonMapping[i].pageUrl.replace("*","").length >= pathString.length) {
							  if(ribbonObj != null && ribbonMapping[i].pageUrl.includes("*")) {
								  break;
							  }
							  if(((!ribbonMapping[i].queryParam) || ( ribbonMapping[i].queryParam && ribbonMapping[i].queryParam.length == 0))){
								  ribbonObj = ribbonMapping[i];
								  pathString = ribbonObj.pageUrl.replace("*","");
							  }
							  if(ribbonMapping[i].queryParam && searchString.length > 0 && searchString.slice(1).split("&").includes(ribbonMapping[i].queryParam)) {
								  ribbonObj = ribbonMapping[i];
								  pathString = ribbonObj.pageUrl.replace("*","") + ribbonObj.queryParam;
							  }
  
						  }
					  }
				  }
				  if(!ribbonObj) {
					  var defaultRibbonMapping = ribbonMapping.filter(item => (item["contentFragmentId"] === "default" && !item["isHidden"]));
					  if(defaultRibbonMapping.length > 0)
						  ribbonObj = defaultRibbonMapping[0];
				  }
				  if(ribbonObj && ribbonObj.isHidden) {
					  document.getElementById("gnav20-promo-placeholder").innerHTML = "";
					  if(document.querySelector(".gnav20-sticky-header")) {
						  document.querySelector(".gnav20-sticky-header").classList.remove("gnav20-with-promo");
					  }
					  //break;
				  }
				  if(ribbonObj && ribbonObj.contentFragmentId) {
					  var contentFragmentIdArray = ribbonObj.contentFragmentId.trim().split(",");
					  var promostring = "";
					  contentFragmentIdArray.forEach(function(item, index) {
						  promostring += "<div class='gnav20-promo-ribbon' data-nosnippet><div class='gnav20-promo-text gnav20-white-focus'><span>";
						  if(promoResponse.ribbonContent[item].ribbonText && promoResponse.ribbonContent[item].ribbonURL && contentFragmentIdArray.length > 1) {
							  promostring += "<a class='gnav20-promo-slide-link' href='" + (promoResponse.ribbonContent[item].ribbonURL && !/^javascript:/i.test(promoResponse.ribbonContent[item].ribbonURL) ? promoResponse.ribbonContent[item].ribbonURL : '#') + "' ";
							  promostring += "aria-label='Promo " + (index + 1) + " of " + contentFragmentIdArray.length + " ";
							  if(promoResponse.ribbonContent[item].ribbonCTALabelAria) {
								  promostring += promoResponse.ribbonContent[item].ribbonCTALabelAria;
							  } else {
  
								  promostring += stripHtmlTags(promoResponse.ribbonContent[item].ribbonText.replace(/&nbsp;?/g, ' '));
							  }
							  promostring += "'>&nbsp;</a>";
						  }
						  if(promoResponse.ribbonContent[item].ribbonText.indexOf('href') == -1 && promoResponse.ribbonContent[item].ribbonURL) {
							  promostring += (promoResponse.ribbonContent[item].ribbonText ? promoResponse.ribbonContent[item].ribbonText : '');
							  promostring += "<span aria-hidden='true'> | </span>"
							  promostring += "<a class='gnav20-promo-link' href='" + promoResponse.ribbonContent[item].ribbonURL + "' ";
							  if(promoResponse.ribbonContent[item].ribbonCTALabelAria) {
								  promostring += "aria-label='" + promoResponse.ribbonContent[item].ribbonCTALabelAria;
							  } else {
								  promostring += "aria-label='" + stripHtmlTags(promoResponse.ribbonContent[item].ribbonText.replace(/&nbsp;?/g, ' '));
								  if(promoResponse.ribbonContent[item].ribbonCTALabel){
									  promostring += " link to " + promoResponse.ribbonContent[item].ribbonCTALabel;
								  }
							  }
							  promostring += "'>";
							  if(promoResponse.ribbonContent[item].ribbonCTALabel){
								  promostring += "<u>" + promoResponse.ribbonContent[item].ribbonCTALabel + "</u>";
							  }
							  promostring += "</a>"
						  } else {
							  promostring += "<span>" + (promoResponse.ribbonContent[item].ribbonText ? promoResponse.ribbonContent[item].ribbonText : '') + "</span>";
						  }
						  if (promoResponse.ribbonContent[item].isModal) {
							  promostring += "<span aria-hidden='true'> | </span><span class='gnav20-promo-icon'>" +
							  "<a role='button' href='#' ";
							  if(!promoResponse.ribbonContent[item].ribbonURL && contentFragmentIdArray.length > 1) {
								  promostring += "aria-label='Promo " + (index + 1) + " of " + contentFragmentIdArray.length + " ";
								  if(promoResponse.ribbonContent[item].modalLinkAriaLabel) {
									  promostring += promoResponse.ribbonContent[item].modalLinkAriaLabel;
								  } else {
									  promostring += promoResponse.ribbonContent[item].ribbonText + (promoResponse.ribbonContent[item].modalLinkText ? promoResponse.ribbonContent[item].modalLinkText : 'Offer Details');
								  }
								  promostring += "'";
  
							  } else {
								  promostring += (promoResponse.ribbonContent[item].modalLinkAriaLabel ? "aria-label='" + promoResponse.ribbonContent[item].modalLinkAriaLabel + "'" : "");
							  }
							  promostring += ">" + (promoResponse.ribbonContent[item].modalLinkText ? promoResponse.ribbonContent[item].modalLinkText : 'Offer Details') + "</a></span>";
						  }
						  if(promoResponse.ribbonContent[item].expirationTime) {
							  var date = new Date(promoResponse.ribbonContent[item].expirationTime);
							  var timestamp = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() + 1) + " 23:59:59";
							  promostring += "<span class='gnav20-promo-timer' timestamp='" + timestamp + "'></span>";
						  }
						  promostring += "</span></div>";
						  if (promoResponse.ribbonContent[item].isModal) {
							  promostring += "<div class='gnav20-modal-content-placeholder' style='display:none;'>";
							  if(promoResponse.ribbonContent[item].modalHeading) {
								  promostring += "<h2 class='gnav20-modal-heading' id='gnav20-modal-heading'>" +
										  promoResponse.ribbonContent[item].modalHeading + "</h2>";
							  }
							  if(promoResponse.ribbonContent[item].modalSubHeading) {
								  promostring += "<div class='gnav20-modal-sub-heading' id='gnav20-modal-sub-heading'>" + promoResponse.ribbonContent[item].modalSubHeading + "</div>";
							  }
							  promostring += "<div class='gnav20-modal-cta'>";
  
							  if(promoResponse.ribbonContent[item].primaryCTALabel) {
								  promostring += "<span class='gnav20-modal-primary-cta'>" +
								  "<a href='" + promoResponse.ribbonContent[item].primaryCTALink + "' " +
								  "aria-label='" + promoResponse.ribbonContent[item].primaryCTAAriaLabel + "'>" +
								  promoResponse.ribbonContent[item].primaryCTALabel + "</a></span>";
							  }
							  if(promoResponse.ribbonContent[item].secondaryCTALabel) {
								  promostring += "<span class='gnav20-modal-secondary-cta'>" +
								  "<a href='" + promoResponse.ribbonContent[item].secondaryCTALink + "' " +
								  "aria-label='" + promoResponse.ribbonContent[item].secondaryCTAAriaLabel + "'>" +
								  promoResponse.ribbonContent[item].secondaryCTALabel + "</a></span>";
							  }
							  promostring += "</div></div>";
						  }
						  promostring += "</div>";
					  });
					  document.querySelector(".gnav20-promotext").innerHTML = DOMPurify.sanitize(promostring);
				  }
				  //break;
			  } catch (error) {
				  console.log(error);
			  }
			  if(document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext")) {
				  document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
				  gnav20.initPromo();
			  }
		  }
	  };
	  xhttp.open("GET", url, true);
	  xhttp.send();
  }
  
  gnav20.loadAuthPersonalizedRibbon = function(pContext) {
	  var xhttp = new XMLHttpRequest();
	  let url = gnav20.getScriptOrigin() + "/soe/digital/auth/personalizationrecommendationsservice/pdm/blackRibbon";
	  xhttp.onload = function () {
		  try {
			  var promoResponse = JSON.parse(this.responseText);
			  if(promoResponse.response && promoResponse.response.promoRibbon && promoResponse.response.promoRibbon.length > 0 && promoResponse.response.promoRibbon[0].aemNode) {
				  if (promoResponse.response.promoRibbon[0].aemNode.isModal && promoResponse.response.promoRibbon[0].aemNode.isModal == 'true') {
					  var promostring = "<div class='gnav20-promo-text gnav20-white-focus'>" +
					  "auto-load='" + (promoResponse.response.promoRibbon[0].aemNode.modalAutoLoad ? 'yes' : 'no') + "'><span>";
  
					  promostring += (promoResponse.response.promoRibbon[0].aemNode.eyebrowCopy ? promoResponse.response.promoRibbon[0].aemNode.eyebrowCopy : '')
					  promostring += "<span>&nbsp;|&nbsp;</span><span class='gnav20-promo-icon'>" +
					  "<a href='#' aria-label='" + promoResponse.response.promoRibbon[0].aemNode.accessibilityText + "'>" + (promoResponse.response.promoRibbon[0].aemNode.primaryCTALabelCopy ? promoResponse.response.promoRibbon[0].aemNode.primaryCTALabelCopy : 'Offer Details') + "</a></span></span>";
  
					  if(promoResponse.response.promoRibbon[0].aemNode.expirationTime) {
						  var date = new Date(promoResponse.response.promoRibbon[0].aemNode.expirationTime);
						  var timestamp = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() + 1) + " 23:59:59";
						  promostring += "<span class='gnav20-promo-timer' timestamp='" + timestamp + "'></span>";
					  }
  
					  promostring += "</div>";
  
					  promostring += "<div class='gnav20-modal-content-placeholder' style='display:none;'>";
					  if(promoResponse.response.promoRibbon[0].aemNode.modalHeadlineCopy) {
						  promostring += "<h2 class='gnav20-modal-heading' id='gnav20-modal-heading'>" +
								  promoResponse.response.promoRibbon[0].aemNode.modalHeadlineCopy + "</h2>";
					  }
					  if(promoResponse.response.promoRibbon[0].aemNode.modalSubheadCopy) {
						  promostring += "<div class='gnav20-modal-sub-heading' id='gnav20-modal-sub-heading'>" + promoResponse.response.promoRibbon[0].aemNode.modalSubheadCopy + "</div>";
					  }
					  promostring += "<div class='gnav20-modal-cta'>";
  
					  if(promoResponse.response.promoRibbon[0].aemNode.modalPrimaryCTALabel) {
						  promostring += "<span class='gnav20-modal-primary-cta'>" +
						  "<a href='" + promoResponse.response.promoRibbon[0].aemNode.modalPrimaryCTADestinationURLWeb + "' " +
						  "aria-label='" + promoResponse.response.promoRibbon[0].aemNode.modalAccessibilityText1 + "'>" +
						  promoResponse.response.promoRibbon[0].aemNode.modalPrimaryCTALabel + "</a></span>";
					  }
					  if(promoResponse.response.promoRibbon[0].aemNode.modalSecondaryCTALabel) {
						  promostring += "<span class='gnav20-modal-secondary-cta'>" +
						  "<a href='" + promoResponse.response.promoRibbon[0].aemNode.modalSecondaryCTADestinationURLWeb + "' " +
						  "aria-label='" + promoResponse.response.promoRibbon[0].aemNode.modalAccessibilityText2 + "'>" +
						  promoResponse.response.promoRibbon[0].aemNode.modalSecondaryCTALabel + "</a></span>";
					  }
  
					  promostring += "</div></div>";
  
					  document.querySelector(".gnav20-promo-ribbon").innerHTML = DOMPurify.sanitize(promostring);
				  } else {
					  var promostring = "<div class='gnav20-promo-text gnav20-white-focus'>" + "<span>";
  
					  promostring += (promoResponse.response.promoRibbon[0].aemNode.eyebrowCopy ? promoResponse.response.promoRibbon[0].aemNode.eyebrowCopy : '');
					  promostring += "</span>";
  
					  if(promoResponse.response.promoRibbon[0].aemNode.expirationTime) {
						  var date = new Date(promoResponse.response.promoRibbon[0].aemNode.expirationTime);
						  var timestamp = date.getFullYear() + "-" + (date.getMonth() + 1) + "-" + (date.getDate() + 1) + " 23:59:59";
						  promostring += "<span class='gnav20-promo-timer' timestamp='" + timestamp + "'></span>";
					  }
					  promostring += "</div>";
					  document.querySelector(".gnav20-promo-ribbon").innerHTML = DOMPurify.sanitize(promostring);
				  }
				  gnav20.OffersCaptureResponse( "success", promoResponse.response, 82);
			  } else if (promoResponse && promoResponse.response) {
				  gnav20.OffersCaptureResponse("empty", promoResponse.response);
			  }
			  var throttleCookie = false;
			  var throttleContext = promoResponse.response.throttleList;
			  var throttleContextPattern = "s_";
				  throttleContextPattern = throttleContextPattern.concat(promoResponse.response.contextInfo.pageContext);
				  throttleContextPattern = new RegExp('^' + throttleContextPattern + '$');
			  var throttleContextPatternControl = "s_c_";
				  throttleContextPatternControl = throttleContextPatternControl.concat(promoResponse.response.contextInfo.pageContext);
				  throttleContextPatternControl = new RegExp('^' + throttleContextPatternControl + '$');
  
			  var responseParts = throttleContext.split('|');
			  
			  for (var i = 0; i < responseParts.length; i++) {
				  var responsePart = responseParts[i];
				  var match = throttleContextPattern.test(responsePart);
				  if (match === true) {
					  throttleCookie = true;
				  }
  
				  var controlMatch = throttleContextPatternControl.test(responsePart);
				  if(controlMatch == true){
					  window.coreData = window.coreData || [];
					  window.coreData.push({
						  task : "emit",
						  event : "cradleTestList",
						  params : {
							  id : ("s_c_" + promoResponse.response.contextInfo.pageContext)
						  }
					  });
				  }
			  }
			  
			  if((throttleCookie) && promoResponse.response && promoResponse.response.promoOverlay && promoResponse.response.promoOverlay.length > 0 && promoResponse.response.promoOverlay[0].aemNode && (promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy || promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy)) {
				  
				  
				  var modalstring = "<div class='auto-load'></div>";
				  if(promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy) {
					  modalstring += "<h2 class='gnav20-modal-heading' id='gnav20-modal-heading'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy + "</h2>";
				  }
				  if(promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy) {
					  modalstring += "<div class='gnav20-modal-sub-heading' id='gnav20-modal-sub-heading'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy;
  
					  if(promoResponse?.response?.dynamicAttrList?.some(item => item.attrId === 'displayAsOverlayCard_MTNS')){
						  const mtnList = promoResponse.response.dynamicAttrList.find(item => item.attrId === 'displayAsOverlayCard_MTNS');
						  if(mtnList.value && mtnList.value.length > 0) {
							  modalstring += "<br/><br/>This offer applies to<br/><br/>";
							  let mtnListArray = mtnList.value.split(',');
							  mtnListArray.forEach(item => {
								  const cleaned = ('' + item).replace(/\D/g, '');
								  if (cleaned.length === 10) {
									  modalstring += "<strong>" + cleaned.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3') + "</strong><br/>";
								  }
  
							  });
							  modalstring += "<br/>";
						  }
					  }
  
					  modalstring += "</div>";
				  }
				  modalstring += "<div class='gnav20-modal-cta'>";
				  if(promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel) {
					  modalstring += "<span class='gnav20-modal-primary-cta'>" +
							  "<a role='button' href='" + promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTADestinationURLWeb.replace("<pagecontext>", promoResponse.response.pageContext) + "' " +
							  "aria-label='" + (promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText1 ? promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText1 : promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel) + "'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel + "</a></span>";
				  }
				  if(promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel) {
					  modalstring += "<span class='gnav20-modal-secondary-cta'>" +
							  "<a role='button' href='" + promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTADestinationURLWeb.replace("<pagecontext>", promoResponse.response.pageContext) + "' " +
							  "aria-label='" + (promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText2 ? promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText2 : promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel) + "'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel + "</a></span>";
				  }
				  modalstring += "</div>";
				  if(document.querySelector('.gnav20-promo-ribbon-wrapper .gnav20-modal-content-wrapper')) {
					  document.querySelector('.gnav20-promo-ribbon-wrapper .gnav20-modal-content-wrapper').innerHTML = DOMPurify.sanitize(modalstring);
				  }
				  gnav20.highPriorityOfferTagging(promoResponse.response.sessionid, promoResponse.response.promoOverlay[0], promoResponse.response);
				  gnav20.poOffersCaptureResponse(promoResponse.response, 82);
			  }
		  } catch (error) {
			  gnav20.OffersCaptureResponse("exception");
		  }
		  document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
		  gnav20.initPromo();
	  };
	  xhttp.onerror = function () {
		  document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
		  gnav20.OffersCaptureResponse("error");
		  gnav20.initPromo();
	  }
	  xhttp.ontimeout = function () {
		  document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
		  gnav20.OffersCaptureResponse("timeout");
		  gnav20.initPromo();
	  }
	  var data = JSON.stringify({
		"source": "blackRibbon",
		"pageUrl": window.location.pathname,
		"pageContext": pContext,
		"isTestFlagEnabled": false
	  });
	  xhttp.open("POST", url, true);
	  if(document.getElementById("gnav20-prod-context") && /true/.test(document.getElementById("gnav20-prod-context").value)) {
		  xhttp.timeout = 3000;
	  }
	  xhttp.setRequestHeader("Channelid", "VZW-DOTCOM");
	  xhttp.setRequestHeader("Content-Type", "application/json");
	  xhttp.send(data);
  }
  
  gnav20.initGnav = function() {
	  gnav20.mobileNav = document.querySelector('.gnav20-mobile .gnav20-mobile-menu .gnav20-navigation-placeholder')
	  gnav20.desktopNav = document.querySelector('.gnav20-desktop .gnav20-row-two > .gnav20-navigation')
	  gnav20.mobileHeader = document.querySelector('.gnav20 .gnav20-mobile')
  
	  if(gnav20.mobileHeader && gnav20.desktopNav && gnav20.mobileNav){
		  gnav20.mobileNav.innerHTML = gnav20.desktopNav.innerHTML;
	  }
  
	  gnav20.vzwbau = document.getElementById('vzw-gn');
	  if(gnav20.vzwbau && gnav20.vzwbau.querySelector('.gnav20')){
		  gnav20.header = document.createElement('div');
		  gnav20.vzwbau.parentElement.insertBefore(gnav20.header, gnav20.vzwbau);
		  gnav20.header.innerHTML = gnav20.vzwbau.querySelector('.gnav20').parentElement.innerHTML;
		  gnav20.vzwbau.parentElement.removeChild(gnav20.vzwbau);
	  }
	   //Added check to bypass personalization logic in author env
	   if(!gnav20.getCookie("wcmmode")){
			  gnav20.initPersona();
	   }
	   if(window.gnavdl && gnavdl.options && gnavdl.options.sticky && (gnavdl.options.sticky == "true" || gnavdl.options.sticky == true)) {
		  if(document.getElementById("vz-gh20").querySelector(".gnav20")) {
			  document.getElementById("vz-gh20").querySelector(".gnav20").classList.add("gnav20-sticky");
		  }
	  }
	  gnav20.initGnavMenu();
	  gnav20.initLOB();
	  gnav20.initSignIn();
	  gnav20.initNav();
	  gnav20.initPromo();
	  gnav20.initSearch();
	  gnav20.initUnifiedCart();
	  gnav20.personalizeHidden();
	  gnav20.initIconCounts();
	  MP.init();
  
	  if(gnav20.personal && gnav20.initVisualCue){
		  gnav20.check4BusinessCookie()
		  gnav20.initVisualCue()
	  }
	  if(window.document.documentMode && gnav20.personal && !gnav20.getCookie('bannerIEClosed')){
		  gnav20.bannerInt = setInterval(function(){
			  if(gnav20.displaybannerIE){
				  clearTimeout(gnav20.bannerInt)
				  gnav20.bannerInt = null
				  gnav20.displaybannerIE()
			  }
			  if(gnav20.bannerIEDiv){clearTimeout(gnav20.bannerInt)}
		  },100)
	  }
	  
  
	  if (document.getElementById("gnav20-promo-placeholder")) {
		  if ((gnav20.getCookie("blackRibbon") === "enabled" || document.getElementById("gnav20-promo-placeholder").classList.contains('enableAuthPZN')) && gnav20  && gnav20.bu && gnav20.bu == 'wireless' && gnav20.getCookie("loggedIn") === "true" && "prepay" !== gnav20.getCookie("role") && (!gnav20.variation || (gnav20.variation && gnav20.variation != 'nsa'))) {
			  if(gnav20.getCookie("br_trgt_pers") === "true") {
				  if(document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext")) {
					  document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
					  gnav20.initPromo();
				  }
			  } else {
				  var xhttp = new XMLHttpRequest();
				  let url = gnav20.getScriptOrigin() + "/content/caas/black-ribbon-groups.model.isActive:true.json";
				  xhttp.onload = function () {
					  try {
						  var promoGroupResponse = JSON.parse(this.responseText);
						  if(promoGroupResponse.blackRibbon) {
							  var ribbonGroups = Object.values(promoGroupResponse.blackRibbon);
							  var fullPath = window.location.pathname;
							  var pathRegex = "^" + fullPath + "$";
							  var pathMatchFound = 0;
							  for(var i=0; i<ribbonGroups.length; i++) {
								  if(ribbonGroups[i].url && ribbonGroups[i].url.length > 0) {
									  for (var j=0; j<ribbonGroups[i].url.length; j++) {
										  if(ribbonGroups[i].url[j].match(new RegExp(pathRegex))) {
											  pathMatchFound = 1;
											  gnav20.loadAuthPersonalizedRibbon(ribbonGroups[i].pageContext);
										  }
									  }
								  }
							  }
							  if(pathMatchFound == 0) {
								  gnav20.loadProspectPersonalizedRibbon();
							  }
						  } else {
							  gnav20.loadProspectPersonalizedRibbon();
						  }
					  } catch (error) {
						console.log(error);
						if(document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext")) {
							document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
							gnav20.initPromo();
						}
					  }
				  }
				  xhttp.open("GET", url, true);
				  xhttp.send();
			  }
  
		  } else if(gnav20.getCookie("br_trgt_pers") === ""){
				  var xhttpPdm = new XMLHttpRequest();
				  var value = gnav20.getScriptOrigin() + "/content/caas/vcg/services/pdmrules.model.isActive:true.json";
				  xhttpPdm.onload = function () {
					  try {
						  var promoGroupResponse = JSON.parse(this.responseText);
						  if(promoGroupResponse.pdmRules) {
							  var ribbonGroups = Object.values(promoGroupResponse.pdmRules);
							  var pathMatchFound = 0;
							  if(window.vzdl && window.vzdl.page && window.vzdl.page.name) {
								  var fullPath = window.vzdl.page.name;
								  for(var i=0; i<ribbonGroups.length; i++) {
									  if(ribbonGroups[i].value && ribbonGroups[i].value.length > 0) {
										  if(ribbonGroups[i].value.match(fullPath)) {
											  pathMatchFound = 1;
											  var addScript = document.createElement('script');
											  addScript.type = 'module';
											  addScript.src = gnav20.getScriptOrigin() + "/etc/clientlibs/vcg/aep/pdm/js/pdm.js";
											  document.getElementsByTagName('head')[0].appendChild(addScript);
										  }
									  }
								  }
							  }
  
							  if(pathMatchFound == 0) {
								  gnav20.loadProspectPersonalizedRibbon();
							  }
						  } else {
							  gnav20.loadProspectPersonalizedRibbon();
						  }
					  } catch (error) {
						if(document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext")) {
							document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
							gnav20.initPromo();
						}
					  }
				  }
				  xhttpPdm.open("GET", value, true);
				  xhttpPdm.send();
		  }else{
			  gnav20.loadProspectPersonalizedRibbon();
		  }	
	  }
  
	  var targetCurrentUrl = window.location.href;
  
	  // String replace for URLs with placeholder for href with [current-url]
	  var replaceURLs = document.querySelectorAll("a[href*='[current-url]']");
	  for(i=0; i < replaceURLs.length; i++) {
		  let url = replaceURLs[i].href;
		  replaceURLs[i].href = url.replace('[current-url]', encodeURIComponent(targetCurrentUrl));
	  }
  
	  // String replace for URLs with placeholder for data-href with [current-url]
	  var replaceSpanURLs = document.querySelectorAll("span[data-href*='[current-url]']");
	  for(i=0; i < replaceSpanURLs.length; i++) {
		  let url = replaceSpanURLs[i].getAttribute("data-href");
		  replaceSpanURLs[i].setAttribute("data-href", url.replace('[current-url]', encodeURIComponent(targetCurrentUrl)));
	  }
  
	  gnavdl.options = gnavdl.options || {}
	  if(gnavdl.options.gotoAfterSignin){
		  var gotoAfterSignin = gnavdl.options.gotoAfterSignin == 'self' ? location.href : gnavdl.options.gotoAfterSignin
		  var signinLinks = document.querySelectorAll('.gnav20 a.gnav20-dropdown-list-item[href$=".verizon.com/signin"]')
		  for (i = 0; i < signinLinks.length; i++){
		  signinLinks[i].href += '?goto=' + encodeURIComponent(gotoAfterSignin)
		  }
	  }
  
	  // defeat the header logo link if defined in gnavdl
	  if(gnavdl.options.defeatLogoLink) {
		  var logos = document.querySelectorAll('.gnav20 .gnav20-logoWhiteBg, .gnav20 .gnav20-logoHeaderVBG, .gnav20 .gnav20-logoHeaderVSBDR')
		  for(i=0; i < logos.length; i++){
			  logos[i].removeAttribute('href')
			  logos[i].removeAttribute('title')
		  }
		  var footerLogos = document.querySelectorAll('.gnav20 .gnav20-logoFooterVBG')
		  for(i=0; i < footerLogos.length; i++){
			  footerLogos[i].setAttribute('target', '_blank')
		  }
	  }
  
	if(gnavdl.options.sticky && document.getElementById("vz-gh20")){
		// add sticky class if sticky is in gnavdl
		if(document.getElementById("vz-gh20").querySelector(".gnav20")){
			document.getElementById("vz-gh20").querySelector(".gnav20").classList.add("gnav20-sticky")
		}
  
		/* adjust sticky spacer if promo ribbon wraps to more than one line
		  gnav20.stickyHeader = document.querySelector('.gnav20-sticky-header');
		  gnav20.stickyContent = document.querySelector('.gnav20-sticky-content');
		  gnav20.setSpacer = null;
		  if(gnav20.stickyContent && gnav20.stickyHeader){
			  if(gnav20.stickyHeader.classList.contains('gnav20-with-promo')){
				  gnav20.adjustSticky = function(){
					  clearTimeout(gnav20.setSpacer)
					  gnav20.setSpacer = setTimeout("gnav20.stickyHeader.style.height = gnav20.stickyContent.offsetHeight + 'px'",300)
				  }
				  window.addEventListener('resize', gnav20.adjustSticky)
				  gnav20.adjustSticky()
			  }else{
				  gnav20.stickyHeader.style.height = gnav20.stickyContent.offsetHeight + 'px'
				  setTimeout("gnav20.stickyHeader.style.height = gnav20.stickyContent.offsetHeight + 'px'",300)
			  }
		  }
	  */
	}
  
	  // move mobile selected LOB in DOM for a11y
	  var selectedLOB = document.querySelector('.gnav20-mobile .gnav20-main-header.gnav20-selected'),
			  selectedLOBWrapper = document.getElementById('gnav20-ulwrapper')
	  if(selectedLOB){
		  selectedLOBWrapper.insertBefore(selectedLOB, selectedLOBWrapper.firstChild)
		  //if(/smb/.test(gnavdl.bu) && document.querySelector('.gnav20-mobile .gnav20-navigation-placeholder')){
		  //	document.querySelector('.gnav20-mobile .gnav20-navigation-placeholder').append(document.querySelector('.gnav20-mobile .gnav20-eyebrow-link-list'))
		  //}
		  var switchTo = selectedLOBWrapper.parentElement.querySelector('.gnav20-main-header[data-stext]:not(.gnav20-selected)')
		  if(switchTo){
			  switchTo.setAttribute('aria-label',switchTo.getAttribute('data-stext') + ' ' + switchTo.getAttribute('aria-label'))
		  }
	  }
  
  
	  // checks for escape key and closes open menu
	  gnav20.mainContainer = document.querySelector('.gnav20')
	  if(gnav20.mainContainer){
		  gnav20.mainContainer.addEventListener('keydown',gnav20.checkEscapeKey)
	  }
  
	  // temporary code to add data-label attr
	  var desktopUtils = document.querySelectorAll('.gnav20 .gnav20-desktop .gnav20-row-one .gnav20-utility a')
	  for(i=0; i < desktopUtils.length; i++) {
		  desktopUtils[i].setAttribute('data-label',desktopUtils[i].innerText)
	  }
  
	  // add new-design class to sticky-header spacer element
	  var nd = document.querySelector('.gnav20 .gnav20-new-design')
	  if(nd){
		  var sh = document.querySelector('.gnav20 .gnav20-sticky-header')
		  if(sh){
			  sh.classList.add('gnav20-new-design')
		  }
	  }
  
	  // Temporary code to remove the svgs from the icons for the new design which will use background image svgs
	  var svgs = document.querySelectorAll('.gnav20 .gnav20-width-wrapper.gnav20-new-design .gnav20-utility svg, .gnav20 .gnav20-width-wrapper.gnav20-new-design .gnav20-nav-utility svg')
	  for(i=0;i<svgs.length;i++){
		  if(!svgs[i].closest('.gnav20-language-link')){
			  svgs[i].parentNode.removeChild(svgs[i]);
		  }
	  }
  
	  // add appid class to width wrapper for appid specific css
	  gnav20.wrapper = document.querySelector('.gnav20 .gnav20-width-wrapper');
	  if (gnav20.wrapper && gnav20.state && gnav20.state != 'prospect' && gnav20.appid == 'vpd') {
		  gnav20.wrapper.classList.add('gnav20-'+gnavdl.appid)
		}
  
	  // add lang attribute to language toggles
	  if(/espanol/.test(location.host) || /es-/.test(location.host)){
		  var lang = 'en'
		  var alabel = 'Switch to English language website'
	  }else{
		  var lang = 'es'
		  var alabel = 'CÃ¡mbiate al sitio web en espaÃ±ol'
	  }
	  var links = document.querySelectorAll('.gnav20-lang-link');
	  for(i=0;i<links.length;i++){
		  links[i].setAttribute('lang',lang);
		  links[i].setAttribute('aria-label',alabel);
	  }
  
   try {
	// add class to width wrapper for featured or not featured UX
	if (gnav20.wrapper){
		var featClass = gnav20.wrapper.querySelector('.gnav20-primary-menu.gnav20-featured-card') ? 'gnav20-featured' : 'gnav20-not-featured'
		gnav20.wrapper.classList.add(featClass)
	}
   } catch (err) {
  
   }
	  // remove the temp styles defined in the header HTML
	  //document.getElementById('gnav20-preload') && document.getElementById('gnav20-preload').remove()
  
	// check to see if we have header or banner then add if absent for a11y
	document.querySelectorAll('header,[role=banner]').length || (document.querySelector('div.gnav20') && document.querySelector('div.gnav20').setAttribute('role','banner'))
  
	if(document.querySelector('.gnav20 .gnav20-sub-nav .gnav20-sub-nav-content')) {
		  document.querySelector('.gnav20 .gnav20-sub-nav .gnav20-sub-nav-content').style.setProperty('display', 'flex', 'important');
		  if(document.querySelector(".gnav20.gnav20-sticky") && document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-content")) {
			  var stickyHeight = document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-content").clientHeight;
			  document.querySelector(".gnav20.gnav20-sticky .gnav20-sticky-header").style.height = stickyHeight + 'px';
		  }
	}
	  // any team can define this func on their page to have it called after gnav is initialized. It can only be defined once on a page.
	window.gnav20Ready && window.gnav20Ready();
  
	// tell the world gnav20 is ready. This event will broadcast to the page and can be used by multiple teams to interact with the gnav after initialization
	  window.GNAV_IS_READY = true;
	  var evnt = new Event('gnavReady');
	  document.dispatchEvent(evnt);
	  var evntHeader = new Event('gnavHeaderReady');
	  document.dispatchEvent(evntHeader);
  }
  
  window.gnavdl = window.gnavdl || {};
  
  if(!gnavdl.bu){
	  gnav20.initGnav();
	  gnav20.initGnavFooter();
	  console.log('init BEFORE fetching header from init')
  }
  
  gnav20.loadHeader = function(context) {
	  if (document.getElementById("vz-gh20")) {
		  var xhttp = new XMLHttpRequest();
		  let url = gnav20.getScriptOrigin() + "/business/gnav20/od/header/" + context + ".external.html";
		  if (gnav20.getCookie("wcmmode")) {
			  url = gnav20.getScriptOrigin() + "/content/wcms/one-digital"+"/gnav/header/" + context + ".external.html" + "?wcmmode=disabled";
		  }
		  xhttp.onreadystatechange = function () {
			  if (this.readyState == 4 && this.status == 200) {
				  document.getElementById("vz-gh20").innerHTML = DOMPurify.sanitize(this.responseText);
				  if(document.location.hash.length <= 1) {
					  document.body.scrollTop==0; // For Safari
					  document.documentElement.scrollTop==0; // For Chrome, Firefox, IE and Opera				
				  }
				  gnav20.initGnav();
				  console.log('init AFTER fetching header')
				  
			  }
		  };
		  xhttp.open("GET", url, true);
		  xhttp.send();
	  }
  };
  
  gnav20.loadFooter = function(context) {
	  if (document.getElementById("vz-gf20")) {
		  var xhttp = new XMLHttpRequest();
		  let url = gnav20.getScriptOrigin() + "/business/gnav20/od/footer/" + context + ".external.html";
		  if (gnav20.getCookie("wcmmode")) {
			  url = gnav20.getScriptOrigin() + "/content/wcms/business/gnav20/od/footer/" + context + ".external.html" + "?wcmmode=disabled";
		  }
		  xhttp.onreadystatechange = function () {
			  if (this.readyState == 4 && this.status == 200) {
				  document.getElementById("vz-gf20").innerHTML = DOMPurify.sanitize(this.responseText);
				  gnav20.initGnavFooter();
			  }
		  };
		  xhttp.open("GET", url, true);
		  xhttp.send();
	  }
  };
  gnav20.loadPromoBanner = function() {
	   document.querySelector("#gnav20-promo-placeholder .gnav20-promo .gnav20-promotext").classList.add("opacityOne");
	   gnav20.initPromo();
  };
  /****************************************************/
  //****  Finding user using Mouse VS Keyboard ********//
  document.body.addEventListener('mousemove', function () {
	  if(!document.body.classList.contains('gnav20-using-mouse')){
		  document.body.classList.add('gnav20-using-mouse');
	  }
  });
  document.body.addEventListener('keydown', function (event) {
	  if((event.target || this).tagName != 'INPUT'){
		  document.body.classList.remove('gnav20-using-mouse');
	  }
  });
  /****************************************************/
  
  gnav20.updateTFNContent = function(newText) {
	  var tfnContent = document.querySelector(".gnav20-tfn-content");
	  if (newText && newText.length > 0 && tfnContent) {
		  tfnContent.innerText = newText;
	  }
  };
  
  gnav20.loadAuthPersonalizedOverlay = function(pContext) {
	  var xhttp = new XMLHttpRequest();
	  var urlOverlay = gnav20.getScriptOrigin() + "/soe/digital/auth/personalizationrecommendationsservice/pdm/blackRibbon";
	  xhttp.onload = function () {
		  try {
			  var promoResponse = JSON.parse(this.responseText);
  
			  var throttleCookie = false;
			  var throttleContext = promoResponse.response.throttleList;
			  var throttleContextPattern = "s_";
				  throttleContextPattern = throttleContextPattern.concat(promoResponse.response.contextInfo.pageContext);
				  throttleContextPattern = new RegExp('^' + throttleContextPattern + '$'); 
			  var throttleContextPatternControl = "s_c_";
				  throttleContextPatternControl = throttleContextPatternControl.concat(promoResponse.response.contextInfo.pageContext);
				  throttleContextPatternControl = new RegExp('^' + throttleContextPatternControl + '$');
  
			  var responseParts = throttleContext.split('|');
			  for (var i = 0; i < responseParts.length; i++) {
				  var responsePart = responseParts[i];
				  var match = throttleContextPattern.test(responsePart);
				  if (match === true) {
					  throttleCookie = true;
				  }
				  var controlMatch = throttleContextPatternControl.test(responsePart);
				  if(controlMatch == true){
					  window.coreData = window.coreData || [];
					  window.coreData.push({
						  task : "emit",
						  event : "cradleTestList",
						  params : {
							  id : ("s_c_" + promoResponse.response.contextInfo.pageContext)
						  }
					  });
				  }
			  }
  
			  if((throttleCookie) && promoResponse?.response?.promoOverlay?.length > 0 && promoResponse.response.promoOverlay[0].aemNode && (promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy || promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy)) {
				  var modalstring = "<div class='auto-load'></div>";
				  if(promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy) {
					  modalstring += "<h2 class='gnav20-modal-heading' id='gnav20-modal-heading'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalHeadlineCopy + "</h2>";
				  }
				  if(promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy) {
					  modalstring += "<div class='gnav20-modal-sub-heading' id='gnav20-modal-sub-heading'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalSubheadCopy;
  
					  if(promoResponse?.response?.dynamicAttrList?.some(item => item.attrId === 'displayAsOverlayCard_MTNS')){
						  const mtnList = promoResponse.response.dynamicAttrList.find(item => item.attrId === 'displayAsOverlayCard_MTNS');
						  if(mtnList.value && mtnList.value.length > 0) {
							  modalstring += "<br/><br/>This offer applies to<br/><br/>";
							  let mtnListArray = mtnList.value.split(',');
							  mtnListArray.forEach(item => {
								  const cleaned = ('' + item).replace(/\D/g, '');
								  if (cleaned.length === 10) {
									  modalstring += "<strong>" + cleaned.replace(/(\d{3})(\d{3})(\d{4})/, '$1-$2-$3') + "</strong><br/>";
								  }
  
							  });
							  modalstring += "<br/>";
						  }
					  }
  
					  modalstring += "</div>";
				  }
				  modalstring += "<div class='gnav20-modal-cta'>";
				  if(promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel) {
					  modalstring += "<span class='gnav20-modal-primary-cta'>" +
							  "<a role='button' href='" + promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTADestinationURLWeb.replace("<pagecontext>", promoResponse.response.pageContext) + "' " +
							  "aria-label='" + (promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText1 ? promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText1 : promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel) + "'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalPrimaryCTALabel + "</a></span>";
				  }
				  if(promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel) {
					  modalstring += "<span class='gnav20-modal-secondary-cta'>" +
							  "<a role='button' href='" + promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTADestinationURLWeb.replace("<pagecontext>", promoResponse.response.pageContext) + "' " +
							  "aria-label='" + (promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText2 ? promoResponse.response.promoOverlay[0].aemNode.modalAccessibilityText2 : promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel) + "'>" +
							  promoResponse.response.promoOverlay[0].aemNode.modalSecondaryCTALabel + "</a></span>";
				  }
				  modalstring += "</div>";
				  var gnavContainer = document.createElement("div");
				  gnavContainer.classList.add("gnav20");
				  document.body.appendChild(gnavContainer);
				  var gnavModel = document.createElement("div");
				  gnavModel.classList.add("gnav20-modal");
				  gnavModel.style.display = "block";
				  gnavContainer.appendChild(gnavModel);
				  var gnavModelOverlay = document.createElement("div");
				  gnavModelOverlay.classList.add("gnav20-modal-overlay");
				  gnavModel.appendChild(gnavModelOverlay);
				  var gnavModelContent = document.createElement("div");
				  gnavModelContent.classList.add("gnav20-modal-content");
				  gnavModel.appendChild(gnavModelContent);
				  gnavModelContent.innerHTML = "<button id='gnav20-close-icon' class='gnav20-promo-close-icon' tabindex='0' aria-label='Click here or press escape key to Close Modal Dialog' data-track='global nav:promo ribbon:modal:click here or press escape key to close modal dialog'></button><div class='gnav20-modal-content-wrapper'></div>";
				  if(document.querySelector('.gnav20 .gnav20-modal .gnav20-modal-content-wrapper')) {
					  document.querySelector('.gnav20 .gnav20-modal .gnav20-modal-content-wrapper').innerHTML = DOMPurify.sanitize(modalstring);
				  }
				  if(document.querySelector('.gnav20 .gnav20-modal .gnav20-promo-close-icon')) {
					  document.querySelector('.gnav20 .gnav20-modal .gnav20-promo-close-icon').focus();
					  gnav20.activeCloseButton = document.querySelector('.gnav20 .gnav20-modal .gnav20-promo-close-icon');
					  document.querySelector('.gnav20 .gnav20-modal .gnav20-promo-close-icon').removeEventListener('click', gnav20.closePromoOverlay);
					  document.querySelector('.gnav20 .gnav20-modal .gnav20-promo-close-icon').addEventListener('click', gnav20.closePromoOverlay);
				  }
				  toggleAriaHiddenGnav20("modal", !0);
				  gnav20.setFocusTrap(gnavModelContent);
  
				  gnav20.highPriorityOfferTagging(promoResponse.response.sessionid, promoResponse.response.promoOverlay[0], promoResponse.response);
				  gnav20.poOffersCaptureResponse(promoResponse.response, 82);
			  }
		  } catch (error) {
  
		  }
	  };
	  var data = JSON.stringify({
		"source": "blackRibbon",
		"pageUrl": window.location.pathname,
		"pageContext": pContext,
		"isTestFlagEnabled": false
	  });
	  xhttp.open("POST", urlOverlay, true);
	  if(document.getElementById("gnav20-prod-context") && /true/.test(document.getElementById("gnav20-prod-context").value)) {
		  xhttp.timeout = 2000;
	  }
	  xhttp.setRequestHeader("Channelid", "VZW-DOTCOM");
	  xhttp.setRequestHeader("Content-Type", "application/json");
	  xhttp.send(data);
  }
  
  if(/MY_VZW_APP/.test(navigator.userAgent)){
	  if(gnav20.getCookie('loggedIn') == 'true') {
		  var xhttp = new XMLHttpRequest();
		  var urlRibbon = gnav20.getScriptOrigin() + "/content/caas/black-ribbon-groups.model.isActive:true.json";
		  xhttp.onload = function () {
			  try {
				  var promoGroupResponse = JSON.parse(this.responseText);
				  if(promoGroupResponse.blackRibbon) {
					  var ribbonGroups = Object.values(promoGroupResponse.blackRibbon);
					  var fullPath = window.location.pathname;
					  var pathRegex = "^" + fullPath + "$";
					  var pathMatchFound = 0;
					  for(var i=0; i<ribbonGroups.length; i++) {
						  if(ribbonGroups[i].urlRibbon && ribbonGroups[i].urlRibbon.length > 0) {
							  for (var j=0; j<ribbonGroups[i].urlRibbon.length; j++) {
								  if(ribbonGroups[i].urlRibbon[j].match(new RegExp(pathRegex))) {
									  pathMatchFound = 1;
									  gnav20.loadAuthPersonalizedOverlay(ribbonGroups[i].pageContext);
								  }
							  }
						  }
					  }
				  }
			  } catch (error) {
				  console.log(error);
			  }
		  }
		  xhttp.open("GET", urlRibbon, true);
		  xhttp.send();
	  }
  }
  
  function handleGnav20KeyDownEvent() {
	// Your logic to execute when a key is pressed down on the button
	console.log("Key pressed down on the button!");
  }
  
  function stripHtmlTags(htmlString) {
	const fakeDiv = document.createElement("div");
	fakeDiv.innerHTML = htmlString;
	return fakeDiv.textContent || fakeDiv.innerText || "";
  }
  !function(t,e){"object"==typeof exports&&"undefined"!=typeof module?module.exports=e():"function"==typeof define&&define.amd?define(e):(t=t||self).uuidv4=e()}(this,(function(){"use strict";var t="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto),e=new Uint8Array(16);function n(){if(!t)throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return t(e)}for(var o=[],r=0;r<256;++r)o.push((r+256).toString(16).substr(1));return function(t,e,r){"string"==typeof t&&(e="binary"===t?new Uint8Array(16):null,t=null);var u=(t=t||{}).random||(t.rng||n)();if(u[6]=15&u[6]|64,u[8]=63&u[8]|128,e){for(var i=r||0,d=0;d<16;++d)e[i+d]=u[d];return e}return function(t,e){var n=e||0,r=o;return(r[t[n+0]]+r[t[n+1]]+r[t[n+2]]+r[t[n+3]]+"-"+r[t[n+4]]+r[t[n+5]]+"-"+r[t[n+6]]+r[t[n+7]]+"-"+r[t[n+8]]+r[t[n+9]]+"-"+r[t[n+10]]+r[t[n+11]]+r[t[n+12]]+r[t[n+13]]+r[t[n+14]]+r[t[n+15]]).toLowerCase()}(u)}}));
  gnav20.bu = "smb";
  gnav20.smb = true;
  gnav20.variation = "prospect";
  gnav20.appid = "";
  gnav20.impltype = "";
  gnav20.typeahead = false
  
  if (gnavdl.bu) {
	  gnav20.bu = gnavdl.bu;
	  if (gnavdl.appid)
		  gnav20.appid = gnavdl.appid;
	  if (gnav20.getCookie("islogin"))
		  gnav20.variation = "loggedin";
	  if (gnav20.getCookie("isloginbiz") || gnavdl.authOnly)
		  gnav20.personalization = {loggedIn:"true"};
	  if (gnavdl.impltype)
		  gnav20.impltype = gnavdl.impltype;
  
  }
  
  if (gnav20.impltype != "ssi") {
	  if (gnav20.variation == "prospect") {// FIX THIS FOR LIMITED!!!
		  gnav20.variation = "";
	  }
	  gnav20.context = gnav20.bu + gnav20.appid + gnav20.variation;
	  gnav20.loadHeader(gnav20.context);
	  gnav20.loadFooter(gnav20.context);
	  setTimeout(function(){
		  gnav20.showSMBBubble();
	  }, 500);
  }else{
	  gnav20.initGnav();
	  gnav20.initGnavFooter();
  }
  gnav20.initPersona();
  
  function smbRefreshGnav(variation) {
	  try { 
		  gnav20.context = gnav20.bu + gnav20.appid + variation;
		  gnav20.loadHeader(gnav20.context);
		  gnav20.loadFooter(gnav20.context);
	  } catch (error) {
		  console.log(error);
	  }
  }
  
  function smbFooterData() {
	  var footlinks = document.querySelectorAll('.gnav20-footercontainer .gnav20-main-container a'),loc;
	  for(var i=0;i<footlinks.length;i++){
		  loc = footlinks[i].ariaLabel || footlinks[i].title || footlinks[i].innerText
		  footlinks[i].setAttribute('data-loc','Footer Navigation: ' + loc );
	  }
  }
  
  function initBizSearch(e){
  
	  document.body.style.overflow = 'hidden'
	  var bizSearchTrigger = e.target
  
	  var searchStyle = document.createElement('style')
	  searchStyle.innerHTML = 'body.gnav20-using-mouse #bizSearchDiv *:focus{outline: none !important}'
	  +'#bizSearchDiv{width:100vw;  text-align:center; position:absolute; top:34px; z-index:99999;}'
	  +'#bizSearchSpacer{width:84%; height:72px; float:right;background:#FFF}'
	  +'#bizSearchClose{border:0;position:absolute; top:35px; right:5px; min-width: 44px; height: 44px; background-position: 12px 12px !important; background-size: 20px 20px !important; background-repeat: no-repeat !important;}'
	  +'#bizSearchSpinner{width:40px; height:40px; border:4px solid #CCC; border-radius:50%;position:absolute; right:50%; top:150px}'
	  +'#bizSearchSpinner:after{ background-color: inherit; content: " "; width: 20px; height: 20px; display: block; position: absolute; top: -4px; left: -4px;}'
	  +' @media(max-width:1019px){#bizSearchDiv{top:0} #bizSearchSpacer{width:calc(100vw - 120px); height:52px;} #bizSearchClose{top:8px !important; right:8px !important}}'
  
	  document.head.append(searchStyle)// comment
  
	  var searchDiv = document.createElement('div')
	  searchDiv.role = 'dialog'
	  searchDiv.id = 'bizSearchDiv'
	  searchDiv.className = 'gnav20'
  
	  document.body.append(searchDiv)
  
	  searchDiv.innerHTML = '<div class="gnav20-searchBG" style="width:100vw;height:100vh; position:absolute; top:80px; z-index:-1; background:#FFF"></div>'+
	  '<div id="bizSearch-1" style=" width:100%;height:100vh; max-width:1272px; margin:0 auto; position: relative;">'+
	  '<div id="bizSearchSpacer" class="gnav20-searchBG">'+
	  '</div></div></div>'
  
	  var searchClose = document.createElement('button')
	  searchClose.id = 'bizSearchClose'
	  searchClose.ariaLabel = 'Close Search modal'
  
	  var searchEnd = document.createElement('button')
	  searchEnd.id = 'bizSearchEnd'
  
	  var searchSpinner = document.createElement('div')
	  searchSpinner.id = 'bizSearchSpinner'
	  searchSpinner.className = 'gnav20-searchBG'
	  searchSpinner.style = 'rotate:10deg;'
  
	  var searchFrame = document.createElement('iframe')
	  searchFrame.style=" width:100%; height:100%; border:0;"
	  searchFrame.className = 'gnav20-searchBG'
	  searchFrame.title = "search verizon business"
	  searchFrame.id = 'bizSearchFrame'
	  searchFrame.onload = function(){
		  if(!searchFrame.contentDocument){
			  searchFrameLoaded = true
		  }
	  }
  
	  var bizSearch = document.getElementById('bizSearch-1')
	  bizSearch.append(searchSpinner)
	  bizSearch.append(searchClose)
	  bizSearch.append(searchFrame)
	  bizSearch.append(searchEnd)
  
	  searchClose.focus()
  
  
	  searchFrame.src = gnavdl.yextSearchURL || 'https://sitesearchsearchbar-site--search-verizon-com-pagescdn-com.preview.pagescdn.com/'
  
	  const closeBizSearch = function(){
		  gnavUtils.removeEventListener('click',closeBizSearch)
		  searchDiv.remove()
		  document.body.style.overflow = 'auto'
		  bizSearchTrigger.focus()
	  }
  
	  var gnavUtils = document.querySelector('.gnav20-desktop .gnav20-utility')
  
	  searchClose.addEventListener('click',closeBizSearch)
	  gnavUtils.addEventListener('click',closeBizSearch)
  
	  searchDiv.addEventListener('focusout',function(e){
		  searchClose.focus()
	  })
  
  
  
	  var spinnerCounter = 0
	  var searchFrameLoaded = 0
	  var spinnerInt = setInterval(function(){
		  //console.log(spinnerCounter,searchSpinner.style.rotate)
		  if(spinnerCounter < 500 && !searchFrameLoaded){
			  searchSpinner.style.rotate = parseInt(searchSpinner.style.rotate) + 10 + 'deg'
			  spinnerCounter ++
		  }else{
			  searchSpinner.remove()
			  clearInterval(spinnerInt)
		  }
			  
	  },50)
  }
  
  if(!gnav20.getCookie('GLOBALID')){
	  gnav20.newGID = uuidv4().replace(/-/g,'z')
	  gnav20.setCookie('GLOBALID', gnav20.newGID, 60);
  }

// Combined Mini Cart
(vzNav||window).minicart = vzNav?.minicart || new function() {
  const minicart=this;
  minicart.enabled = (gnavdl?.appid.indexOf("unified")==0 || gnavdl.appid=="mybusiness" ? true : false);

  const bqScript = ["https://",
    (!window.location.host.indexOf("mbpros") ? window.location.host.replace(/^mbpros/,"b2b") : "scache.vzw.com"),
    "/prospect-learn-widgets/prospect-learn-widgets.js"
  ].join("");


  function get_cookie(name) {
    var match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    if (match) return match[2];
  }

var currentCartID;
var wirelessCart;
var fiosCart;
var fiosHref;
var wirelessHref;

let loadedBQ = false;

// read cart cookies
function checkCart() {
  currentCartID = get_cookie('prospectCartId');
  wirelessCart = get_cookie('prospectFlowType') && currentCartID;
  fiosCart = get_cookie('vbmlqresult');
  fiosHref = 'https://www.verizon.com/foryoursmallbiz/gborder/customize-order';
  wirelessHref = 'https://www.verizon.com/business/shop/shopping-cart?retrieve=cart&cartId='+currentCartID;
  if (fiosCart?.indexOf("Cart")>0) {fiosHref += fiosCart.substring(fiosCart.indexOf('CartQuerystring=')+16)}
  else { fiosCart = false }
}

this.setupBQ = function() {
  if (!minicart.enabled) { return false }
  if (window.location.hostname.indexOf("www.")<0) { console.log("minicart setup"); }
  checkCart();
  const cta = document.querySelectorAll("button.gnav20-cart, a.gnav20-bubble-position");
  if (cta && cta.length) {
    cta.forEach(i => {
      if (i.tagName=="A") {
        i.addEventListener("click",function(e){e.preventDefault()});
        i.setAttribute("data-track","#ignore");
      } else {
        i.addEventListener("click", cartselect2);
        i.classList.add("close","vz-button-link");
        i.setAttribute("data-loc","Global Nav:Cart:Open");
        i.setAttribute("aria-label","Cart Icon");
      }
    });
    if (gnavdl?.appid.indexOf("nsa")>=0) { loadedBQ=true;}
    else if (currentCartID && !fiosCart) {
        const pre = document.createElement("link");
        pre.setAttribute("rel","preload");pre.setAttribute("as","script");pre.setAttribute("fetchpriority","low");
        pre.setAttribute("href",bqScript);
        setTimeout(function(){document.head.appendChild(pre)},2200);
    }
  }
}

// load widget
function loadBQ(cb) {
  if (!document.querySelector("prospect-mini-cart")) {
    const pmc = document.createElement("prospect-mini-cart");
    pmc.setAttribute("openModal","false");
    if (currentCartID) { pmc.setAttribute("cartId", currentCartID) }
    document.querySelector("#vz-gh20").after(pmc);
  } else { document.querySelector("prospect-mini-cart")?.replaceChildren(); }
  if (loadedBQ) {
    if (typeof(cb)=="function") { cb() }
  } else {
    if (window.location.hostname.indexOf("www.")<0) { console.log("minicart load widget"); }
    const abc = document.createElement('script');
    abc.src = bqScript;
    abc.defer = true;
    abc.async = true;
    if (typeof(cb)=="function") { abc.addEventListener("load",cb); abc.addEventListener("error",cb) }
    document.head.appendChild(abc);  
    loadedBQ = true;
    document.querySelector("div.gnav20-cart")?.classList.add("loading");
  }
}

// setup multi cart overlay
function setOvl(type) {
  if (!document.querySelector("#cart-overlay")) {
  const ovl = document.createElement("div");
  ovl.id="cart-overlay";
  ovl.classList.add(type,"aapagesection");
  ovl.setAttribute("aa-pagesection",(type == "both" ? "Dual" :"Empty")+" Cart modal");
  ovl.append(document.createElement("h3"));
  const close = document.createElement("a");close.classList.add("close","vz-button-link");ovl.append(close);close.setAttribute("data-loc","Global Nav:Cart:Dual cart overlay:close")
  close.addEventListener("click",function(){ovl.style.display="none";})
  const afios = document.createElement("a");afios.href=fiosHref;afios.classList.add("fios","vz-text-link");afios.setAttribute("data-loc","Global Nav:Cart:Dual cart overlay:FIOS cart")
  ovl.append(afios);
  const awls = document.createElement("a");awls.href=wirelessHref;awls.classList.add("wls","vz-text-link");awls.setAttribute("data-loc","Global Nav:Cart:Dual cart overlay:Wireless cart")
  ovl.append(awls);
  const shop = document.createElement("a");shop.classList.add("shop","vz-button-link");shop.setAttribute("data-loc","Global Nav:Cart:Continue")
  shop.addEventListener("click",function(){ovl.style.display="none";})
  ovl.append(shop);
  document.querySelector("#vz-gh20").append(ovl);
  } else {
    const ovl = document.querySelector("#cart-overlay");
    ovl?.classList.remove("both","none");
    ovl?.classList.add(type);
  }
}
  
// open widget
function openWid(e,n) {
  const widget = document.querySelector("prospect-mini-cart:empty");
  if (widget || n==1) {
    if (currentCartID) { widget?.setAttribute("cartId", currentCartID); }
    const eventForMiniCart = new Event("mini-cart-icon-clicked");
    window.dispatchEvent(eventForMiniCart);
   if (window.location.hostname.indexOf("www.")<0) { console.log("minicart open event"); }
   if (gnavdl?.appid.indexOf("nsa")<0 &&
    (n||0)<12) { setTimeout(function(){openWid(null,1+(n||0))},750); }
  } else {
    document.querySelector("div.gnav20-cart.loading")?.classList.remove("loading");
  }
  if (n>9) { // fallback
    console.log("minicart failed "+n);
    if (!currentCartID) {
      setOvl("none");
      $("#cart-overlay").show();
      document.querySelector("div.gnav20-cart.loading")?.classList.remove("loading");
    } else if (window.location.hostname.indexOf("www.")>=0) {
      const fb = document.querySelector("a.gnav20-bubble-position")?.getAttribute("href")?.replace(/\/\?.*/,"/");
      if (fb) { location.href = fb; }
    }
  } else if (!widget && n<9) {
    if (document.querySelector("prospect-mini-cart>.loading-spinner")) {
      setTimeout(function(){openWid(null,1+(n||0))},850);
    }
  }
}

// cart clicked
function cartselect2(e) {
  if (!minicart.enabled) { return true }
  if (e) { e.preventDefault();}
  checkCart();
  if (wirelessCart && !fiosCart){
    // wireless cart only, open widget
    loadBQ(openWid);
    return false;
  }
  else if (fiosCart && !wirelessCart){
    // fios cart only, go to fios cart page
    location.href = fiosHref
  }
  else if (!fiosCart && !wirelessCart){
    // no cart, open widget
    //setOvl("none");
    //$("#cart-overlay").toggle();
    loadBQ(openWid);
    return false;
  }
  else if (fiosCart && wirelessCart) {
    // both carts, open selector widget
    setOvl("both");
    $("#cart-overlay").toggle();
    return false;
  }
}
  
// load and open widget
  this.openBQ=function(e) {
    if (e) { e.preventDefault(); }
    loadBQ(openWid);
  }

  // trigger cart event
  this.show=function() {
    let widget = document.querySelector("prospect-mini-cart");
    if (!widget) {
      widget = document.createElement("prospect-mini-cart");
      widget.setAttribute("openModal","false");
      document.querySelector("#vz-gh20").after(widget);
    }
    if (currentCartID) { widget?.setAttribute("cartId", currentCartID); }
    const eventForMiniCart = new Event("mini-cart-icon-clicked");
    window.dispatchEvent(eventForMiniCart);
  }
  
  
  if (minicart.enabled) {
      document.addEventListener("gnavReady",minicart.setupBQ,{once:true});
      //setTimeout(minicart.setupBQ, 1200);
  }
}  
