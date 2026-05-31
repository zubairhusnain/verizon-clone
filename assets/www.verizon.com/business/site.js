vzCake = {
    cake:true,
    init:new function() {
        var done=false;
        var ready=[];
        this.push=function(f) {
            if (done) { f(); }
            else { ready.push(f); }
        }
        this.run=function() {
            while (ready.length) {
                try {
	                ready.shift()();
                } catch (e) {
                    console.log("Error init:",e);
                }
            }
            setTimeout(function(){document.body.classList.add("complete")},250);
            window.addEventListener("scroll",function(){setTimeout(function(){document.body.classList.add("active")},750)},{passive:true,once:true});
            done=true;
        }
        if (document.readyState !== "loading") {
            this.run();
        } else {
            document.addEventListener("DOMContentLoaded",this.run);
        }
    }
};


// Cookie
if(!getCookie) {
	function getCookie(cname) {
		var name = cname + "=";
		var decodedCookie = document.cookie;
        try { decodedCookie = decodeURIComponent(String(document.cookie)); }
        catch (e) {}
		var ca = decodedCookie.split(';');
		for(var i = 0; i < ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0) == ' ') {
				c = c.substring(1);
			}
			if (c.indexOf(name) == 0) {
				return c.substring(name.length, c.length);
			}
		}
		return "";
	}
}
if(!setCookie) {
	function setCookie(cname, cvalue, exdays) {
		var d = new Date();
		d.setTime(d.getTime() + (exdays*24*60*60*1000));
		var expires = "expires="+ d.toUTCString();
		document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
	}
}


// support animation range
function stickyHeaderRange() {
    const h = document.querySelector("header.cta");
    const s = document.querySelector("div.secondarynav");
    if (h && s && !getComputedStyle(s).animationRangeStart) {
        h.classList.remove("cta");
        let stickyHeader = function() {
            let cf = "";
            document.addEventListener("scroll",function() {
                const f = window.scrollY > (cf ? 400 : 460) ? "fixcta" : "";
                if (cf != f) {
                    if (f) { h.classList.add(f); }
                    else { h.classList.remove("fixcta"); }
                    cf=f;
                }
            },{passive:true});
        }();
    }
}
if (document.readyState !== "loading") { stickyHeaderRange(); }
else { document.addEventListener("DOMContentLoaded",stickyHeaderRange,{once:true,passive:true})}


// conditional display

vzCake.dynamic = new function() {
    var dyn = this;
    var utm;
    var dglq;
    var bert;
    var q = 0; // location lookup
    var ql = false; // lq checked
    var gf = ["Country","State","Zip","nydma","infios","in5G"]; // geoloc fields
    var zj = {"10001":"2024-07-05","10002":"2024-07-05","10003":"2024-07-05","10004":"2024-07-05","10005":"2024-07-05","10006":"2024-07-05","10009":"2024-07-05","10010":"2024-07-05","10011":"2024-07-05","10012":"2024-07-05","10013":"2024-07-05","10014":"2024-07-05","10016":"2024-07-05","10017":"2024-07-05","10018":"2024-07-05","10019":"2024-07-05","10020":"2024-07-05","10021":"2024-07-05","10022":"2024-07-05","10023":"2024-07-05","10024":"2024-07-05","10025":"2024-07-05","10026":"2024-07-05","10027":"2024-07-05","10028":"2024-07-05","10029":"2024-07-05","10030":"2024-07-05","10031":"2024-07-05","10032":"2024-07-05","10033":"2024-07-05","10035":"2024-07-05","10036":"2024-07-05","10037":"2024-07-05","10038":"2024-07-05","10039":"2024-07-05","10040":"2024-07-05","10041":"2024-07-05","10044":"2024-07-05","10065":"2024-07-05","10069":"2024-07-05","10075":"2024-07-05","10118":"2024-07-05","10120":"2024-07-05","10122":"2024-07-05","10123":"2024-07-05","10128":"2024-07-05","10155":"2024-07-05","10162":"2024-07-05","10165":"2024-07-05","10177":"2024-07-05","10301":"2024-07-05","10302":"2024-07-05","10303":"2024-07-05","10304":"2024-07-05","10305":"2024-07-05","10306":"2024-07-05","10307":"2024-07-05","10308":"2024-07-05","10309":"2024-07-05","10310":"2024-07-05","10311":"2024-07-05","10312":"2024-07-05","10314":"2024-07-05","10451":"2024-07-05","10452":"2024-07-05","10453":"2024-07-05","10454":"2024-07-05","10455":"2024-07-05","10456":"2024-07-05","10457":"2024-07-05","10458":"2024-07-05","10459":"2024-07-05","10460":"2024-07-05","10461":"2024-07-05","10462":"2024-07-05","10463":"2024-07-05","10465":"2024-07-05","10466":"2024-07-05","10467":"2024-07-05","10468":"2024-07-05","10469":"2024-07-05","10470":"2024-07-05","10471":"2024-07-05","10472":"2024-07-05","10473":"2024-07-05","10474":"2024-07-05","10475":"2024-07-05","10511":"2024-07-05","10520":"2024-07-05","10524":"2024-07-05","10548":"2024-07-05","10566":"2024-07-05","10567":"2024-07-05","10596":"2024-07-05","10598":"2024-07-05","10901":"2024-07-05","10952":"2024-07-05","10954":"2024-07-05","10956":"2024-07-05","10977":"2024-07-05","11003":"2024-07-05","11010":"2024-07-05","11096":"2024-07-05","11101":"2024-07-05","11102":"2024-07-05","11103":"2024-07-05","11104":"2024-07-05","11105":"2024-07-05","11106":"2024-07-05","11109":"2024-07-05","11201":"2024-07-05","11203":"2024-07-05","11204":"2024-07-05","11205":"2024-07-05","11206":"2024-07-05","11207":"2024-07-05","11208":"2024-07-05","11209":"2024-07-05","11210":"2024-07-05","11211":"2024-07-05","11212":"2024-07-05","11213":"2024-07-05","11214":"2024-07-05","11215":"2024-07-05","11216":"2024-07-05","11217":"2024-07-05","11218":"2024-07-05","11219":"2024-07-05","11220":"2024-07-05","11221":"2024-07-05","11222":"2024-07-05","11223":"2024-07-05","11224":"2024-07-05","11225":"2024-07-05","11226":"2024-07-05","11228":"2024-07-05","11229":"2024-07-05","11230":"2024-07-05","11231":"2024-07-05","11232":"2024-07-05","11233":"2024-07-05","11234":"2024-07-05","11235":"2024-07-05","11236":"2024-07-05","11237":"2024-07-05","11238":"2024-07-05","11239":"2024-07-05","11242":"2024-07-05","11243":"2024-07-05","11249":"2024-07-05","11354":"2024-07-05","11355":"2024-07-05","11356":"2024-07-05","11357":"2024-07-05","11358":"2024-07-05","11359":"2024-07-05","11360":"2024-07-05","11361":"2024-07-05","11362":"2024-07-05","11363":"2024-07-05","11364":"2024-07-05","11365":"2024-07-05","11366":"2024-07-05","11367":"2024-07-05","11368":"2024-07-05","11369":"2024-07-05","11370":"2024-07-05","11371":"2024-07-05","11372":"2024-07-05","11373":"2024-07-05","11374":"2024-07-05","11375":"2024-07-05","11377":"2024-07-05","11378":"2024-07-05","11379":"2024-07-05","11385":"2024-07-05","11411":"2024-07-05","11412":"2024-07-05","11413":"2024-07-05","11414":"2024-07-05","11415":"2024-07-05","11416":"2024-07-05","11417":"2024-07-05","11418":"2024-07-05","11419":"2024-07-05","11420":"2024-07-05","11421":"2024-07-05","11422":"2024-07-05","11423":"2024-07-05","11426":"2024-07-05","11427":"2024-07-05","11428":"2024-07-05","11429":"2024-07-05","11430":"2024-07-05","11432":"2024-07-05","11433":"2024-07-05","11434":"2024-07-05","11435":"2024-07-05","11436":"2024-07-05","11509":"2024-07-05","11510":"2024-07-05","11516":"2024-07-05","11518":"2024-07-05","11530":"2024-07-05","11550":"2024-07-05","11552":"2024-07-05","11553":"2024-07-05","11554":"2024-07-05","11557":"2024-07-05","11559":"2024-07-05","11563":"2024-07-05","11565":"2024-07-05","11566":"2024-07-05","11570":"2024-07-05","11572":"2024-07-05","11580":"2024-07-05","11581":"2024-07-05","11691":"2024-07-05","11706":"2024-07-05","11710":"2024-07-05","11717":"2024-07-05","11718":"2024-07-05","11722":"2024-07-05","11730":"2024-07-05","11739":"2024-07-05","11749":"2024-07-05","11751":"2024-07-05","11752":"2024-07-05","11769":"2024-07-05","11779":"2024-07-05","11788":"2024-07-05","12550":"2024-07-05","12553":"2024-07-05","12538":"2024-07-05","12590":"2024-07-05","12601":"2024-07-05","12603":"2024-07-05"};

    var abbr={"bm":"small-medium","ge":"entperise","ps":"public-sector"}
    var tracker; // timeout

    // show profile
    this.profile = function(field) {
        if (!dglq) {
			dglq = JSON.parse(localStorage.vzdglq||"{}");
            dyn.getLq();
        }
        if (field) {
            return dglq[field];
        } else {
        	return dglq;
        }
    }

    // enable testing menu
    this.enableMenu = function(enable) {
        dyn.profile();
        if (enable!=false) { dglq.dyntest="Y" }
        else if (dglq.dyntest) { delete dglq.dyntest }
        localStorage.vzdglq = JSON.stringify(dglq);
        $("div.cup[data-dynamic]").parent(".dyndone").each(function(i,v){ dyn.menu(v) });
    }

    // show selected match
    this.select = async function(v) {
       const mode=$(v).attr("data-dynamic").split(" ") || [""];
       $(v).addClass("dyn-match").show().siblings(".dyn-match").removeClass("dyn-match"); 
       if (!mode[1]) { $(v).siblings("[data-dynamic]").hide(); }
       if (typeof(digitalData)!="undefined") {
        //if (!digitalData.events) { digitalData.events = []; }
        //digitalData.events.push({eventPayload:{eventName:"DynamicComponent",condition:$(v).attr("data-tag")||$(v).attr("data-dynamic")}});
       }
       if (mode[0]=="else") { tracker = setTimeout(function(){dyn.track(v)},320)}
       else {dyn.track(v);}
        /*if ($(v).is("[data-path]:empty")) { // load fragment
            var u=$(v).attr("data-path")+".cake.html";
            var r=await fetch(u);
            if (r.status==200) {
                $(v).replaceWith(await r.text());
            } else {
                console.log(r);
                $(v).siblings("[data-dynamic='else']").show();
            }
        }*/
        $(v).find("[data-src]:not([src])").each(function(ii,vi){
            $(vi).attr("src",$(vi).attr("data-src"));
        });
        if ($(v).find("fieldset.tooltip").length) { vzCake.tip?.ufit(); }
    }

    // tell analytics what was shown
    this.track = function(v) {
        if (tracker) { clearTimeout(tracker)}
        const track = [$(v).parents(".dynamic[data-name]").attr("data-name"),$(v).children("a[name]").attr("data-name"),$(v).attr("data-tag")||$(v).attr("data-dynamic")];
        if (typeof(s)!="undefined") {
         s.list3 = track[0]+":"+track[1]+" - "+track[2];
        }
        if (!window.coreData) { window.coreData = []; }
        window.coreData.push({task:"emit",event:"abTest",params:{list:"platform:Unified|experience:"+track.join("-"),system:"unified ab test"}})
    }

    // does condition match
    this.match = function(t) {
		var c = t.split("/");
        if (c[0]=="" && c.length>1) { c.shift(); }
       	if (c[0]=="ves:industry") {
            return dyn.testbrt("industry",c[1],c[2]);
        } else if (c[0]=="ves:topics") {
            return dyn.testbrt("topic",c[1],c[2]);
        } else if (c[0]=="ves:bu") {
            return dyn.testbrt("segment",c[1]);
        } else if (c[0]=="ves:audience") {
            return dyn.testbrt("audience",c[1]);
        } else if (c.length<2 ) {
            return false;
        } else if (c[0]=="ves:region") {
            return dyn.testglq("Country",c[2]);
         } else if (c[0]=="loc") {
        	if (c[1]=="nydma") {
            	return dyn.testglq("nydma","Y");
            } else if (c[1]=="oof") {
            	return !dyn.testglq("State",["CT","MA","RI","NY","NJ","PA","DE","MD","DC","VA"]);
            } else if (c[1]=="fios") {
            	return dyn.testglq("State",["CT","MA","RI","NY","NJ","PA","DE","MD","DC","VA"]);
            } else if (c[1]=="spectrum") {
            	return dyn.testglq("spectrum","Y");
            } else if (c[1]=="frontier") {
            	return dyn.testglq("frontier","Y");
            }
        } else if (c[0]=="net") {
            if (c[1]=="mobile") {
                return dyn.testglq("isptype","mobile");
            } else if (c[1]=="land") {
                return dyn.testglq("isptype",["cable","dsl","fios","fiber","uverse"]);
            } else if (c[1]=="verizon") {
                return dyn.testglq("isp","verizon");
            } else if (c[1]=="frontier") {
                return dyn.testglq("isp","frontier");
            } else if (c[1]=="other") {
                return dyn.testglq("isp") && !dyn.testglq("isp","verizon");
            }
        } else if (c[0]=="svc") {
        	if (c[1]=="5g") {
            	return dyn.testglq("in5G","Y");
        	} else if (c[1]=="fios") {
            	return dyn.testglq("infios","Y");
        	} else if (c[1]=="roll2g") {
            	return dyn.testglq("roll2g","Y");
        	} else if (c[1]=="frontier") {
            	return dyn.testglq("frontier","Y");
        	} else if (c[1]=="fios-lq") {
            	return dyn.testglq("FiOSDataStatus","Y");
        	} else if (c[1]=="fios-nolq") {
            	return dyn.testglq("FiOSDataStatus","N");
            } else if (c[1]=="5g-lq") {
            	return dyn.testglq("5GStatus","Y");
            }
        } else if (c[0]=="usr") {
        	if (c[1]=="optin") {
            	if (document.cookie.match(/HBRregister=[0-9a-f]/)) { return true; }
        	} else if (c[1]=="mbz") {
            	return dyn.testglq("mybizcookie","Y");
        	} else if (c[1]=="ent") {
            	return (dyn.testbrt("segment","enterprise") || localStorage["Demandbase.AdobeLaunch.demandbase_employee_range"]=="\"Enterprise\"");
        	} else if (c[1]=="mid") {
            	return (dyn.testbrt("segment","medium") || localStorage["Demandbase.AdobeLaunch.demandbase_employee_range"]=="\"Mid-Market\"");
        	} else if (c[1]=="smb") {
            	return (dyn.testbrt("segment","vbm") || localStorage["Demandbase.AdobeLaunch.demandbase_employee_range"]=="\"Small\"");
        	} else if (c[1]=="pubsec") {
            	return (dyn.testbrt("segment","public-sector") || dyn.testbrt("industry","public-sector"));
        	} else if (c[1]=="customer") {
                return dyn.testbrt("intent","login") > 1;
            } else if (c[1]=="prospect") {
                return dyn.testbrt("intent","shop") > 0;
            } else if (c[1]=="health") {
            	return dyn.testMerk("health",c[2]);
            }
        } else if (c[0]=="cmp") {
            return dyn.testcmp(c[2]||c[1]);
        } else if (c[0]=="random") {
            return Math.random()*100 < parseInt(c[1]||50);
        }
        return false;
    }

    // test geoLQ result - pass field and value
    this.testglq = function(f,v){
        dglq = dglq || JSON.parse(localStorage.vzdglq||"{}");
        if (gf.indexOf(f)>=0) { // location
            if (dglq.geocheck && !dglq.Address) {
                if (dyn.checktime() > dglq.geocheck) { dglq.Country=""; }
            }
            if (!dglq.Country) {
            	$(".dyndone:last").removeClass("dyndone");
            	dyn.getGeo(dyn.init); // lookup needed
            }
        }
        else if (f=="mbz") {
            if (!dglq.mybizcheck || dyn.checktime() > dglq.mybizcheck) {
            	$(".dyndone:last").removeClass("dyndone");
                dyn.getMbz(dyn.init);
            }
        }
        else if (!ql && (f=="FiOSDataStatus" || f=="5GStatus")) {
            dyn.getLq();
            ql=true;
        }
        if (Array.isArray(v)) {
            return v.indexOf(dglq[f])>=0;
        } else if (v) {
        	return (dglq[f]==v);
        } else {
            return (dglq[f]?true:false);
        }
    }

    // does CMP code match - pass cmp code
    this.testcmp = function(c) {
        var u = Bert.utm(c.replace(/\*/g,"")); // given cmp
        if (!utm && window.location.search.indexOf("cmp=")>0) {
             var qs=window.location.search;
             var cmp=qs.substring(qs.indexOf("cmp=")+4)+"&";
	         cmp=cmp.substring(0,cmp.indexOf("&"));
    	     if (cmp.indexOf(":")>=0) {
                 utm=Bert.utm(cmp);
             }
        }
        utm = utm || JSON.parse(localStorage.bert||"{}").utm;
        if (utm && utm.campaign) {
            for (var k in u) { if (u[k] && u[k]!=utm[k]) { return false; }}; // reject anything that doesn't match
            return true;
        }
        return false;
    }

    // test bert profile
    this.testbrt = function(c,v,d) {
        if (!bert) {
			bert = JSON.parse(localStorage.bert||"{}");
            utm = bert.utm || {};
        }
        if (utm[c] && (utm[c]==v || abbr[utm[c]]==v)) { return true; }
        if (bert[c]) {
            return bert[c][v+(d?"/"+d:"")] || false;
        }
    }

    // test Merkury data
    this.testMerk = function(c,v) {
        let dl = window._svDataLayer?.trackIdentityDataLayer?.data || JSON.parse(localStorage._svidstore_trackidentity || "{}").d?.trackIdentityDataLayer?.data || {};
        if (c=="health") {
            if (dl.customer_health_score==v) { return true; }
            if (v=="risk" || dl.high_risk_indicator) { return true; }
        }
        return false;
    }

    // do geolookup
    this.getGeo = function(cb) {
        if (q) { return; }
        q = 1;
        if (!dglq) { dglq={}; }
        dglq.Zip = dglq.Zip || (localStorage["Demandbase.AdobeLaunch.demandbase_zip"]||"").slice(1,-1);
        dglq.State = dglq.State || (localStorage["Demandbase.AdobeLaunch.demandbase_state"]||"").slice(1,-1);
        dglq.Country = dglq.Country || (localStorage["Demandbase.AdobeLaunch.demandbase_country"]||"").slice(1,-1).toLowerCase();

       $.ajax({url:"https://www.verizon.com"+"/business/geoloc.json",cache:true,timeout:5000,dataType:"json",xhrFields: {withCredentials:window.location.hostname.indexOf("ww.")>0},success:function(data){
               dglq.geocheck = dyn.checktime()+288;
               dglq.Country = data.ctry || "xg";
               dglq.State = data.state;
               dglq.Zip = data.zip;
               if (data.zip) {
					var today = new Date();
					var zjexpiry = new Date();
					if (zj[data.zip] != undefined) {
						var addDate = new Date(zj[data.zip]);
						zjexpiry = new Date(addDate.getTime()+(90*24*60*60*1000));
						if (zjexpiry > today) {
							dglq.roll2g="Y";
							dglq.roll2gd=zj[data.zip];
						}
					} else if (data.nydma) { dglq.nydma="Y"; } else if (dglq.nydma) { dglq.nydma="N"; }
               }
               if (data.spectrum) { dglq.spectrum="Y"; }
               if (data.frontier) { dglq.frontier="Y"; }
               if (data.svc && data.svc=='fios') { dglq.infios="Y"; } else if (dglq.infios) { dglq.infios="N"; }
               else if (data.svc && data.svc=='5G') { dglq.in5G="Y"; } else if (dglq.in5G) { dglq.in5G="N"; }
               if (data.network && dglq.isp) {
                    const a = dglq.isp.split(",");
                    if (a.indexOf(data.network)>=0) { a.splice(a.indexOf(data.network),1); }
                    a.unshift(data.network);
                    dglq.isp = a.join(",");
               } else if (data.network) { dglq.isp = data.network; }
               if (data.network_type) { dglq.isptype = data.network_type; }
               localStorage["vzdglq"]=JSON.stringify(dglq);
        	   q=2;
		       if (typeof(cb)=="function") { cb(dglq); }
    	},error:function() {
            dglq.geocheck = dyn.checktime()+144;
            dglq.Country = "xg";
            q=-1;
		    if (typeof(cb)=="function") { cb(dglq); }
        }});
    }

    // get LQ result
    this.getLq = function() {
        var lqa = JSON.parse(localStorage["persist:loop-qual-app-root"]||"{}");
        var aq = JSON.parse(lqa["addressQualification"]||"{}").lqResult;
        if (!aq) { try { aq=JSON.parse(JSON.parse(localStorage["persist:root"]).AddressValidationPage).addressQualificationDetails.LQPost; } catch(e) {}}
        var cl = JSON.parse(localStorage["_cartData"]||"{}").loopQualInfo;
        if (aq || cl) {
            if (aq && aq.lqAddress) {
            dglq["FiOSDataStatus"] = aq.fiosQualified || aq.FiOSDataStatus=="Y" ? "Y" : "N";
            dglq["4GStatus"] = aq.lteQualified ? "Y" : "N";
            dglq["5GStatus"] = aq.fiveGQualified ? "Y" : "N";
                if (aq.lqAddress) { dglq["Address"] = aq.lqAddress; }
                else if (aq.Address) {dglq["Address"] = aq.Address; }
            }
            if (cl && cl.loopQualData) {
                dglq["Address"] = (cl.loopQualData.addressData || {}).selectedAddress;
                dglq["email"] = cl.loopQualData.email;
                dglq["phone"] = cl.loopQualData.mtn;
            }
            localStorage["vzdglq"]=JSON.stringify(dglq);
        }
    }

    // do new LQ
    this.runLq = function() {
        dglq = dglq || JSON.parse(localStorage.vzdglq||"{}");
        const endpoint = "https://www.verizon.com/foryoursmallbiz/smb/api/Qualify/GetFiosQualification";
        const guid="10000000-1000-4000-8000-100000000000".replace(/[0]/g, c => Math.floor(Math.random()*16).toString(16));
        const query = {"QueryType":"doloop",
                     "ZipCode":dglq.Zip,
                     "City":dglq.City,
                     "State":dglq.State,
                     "Unit":"UNIT 140",
                     "StreetAddress":dglq.Address,
                     "AddressID":"400050177445","BaseAddressID":"0","TelePhoneNumber":"","EmailId":"",
                     "GUID":guid,"ClientID":"VZLEARN","ABLogicValue":null,"inputAddress":null,"cBandException":"N","cmpCode":null,"UserName":null,"BusinessName":null,"LocationId":null,"SalesCode":null};

        $.ajax({url:endpoint, data:JSON.stringify(query), contentType : 'application/json', dataType:"json", type:"POST", timeout: 5000, success:function(d) {

        }});
    }

    // get mb cookie
    this.getMbz = function(cb) {
        dglq = dglq || JSON.parse(localStorage.vzdglq||"{}");
        $.ajax({url:'https://bizanalytics.verizonwireless.com/info.json', dataType:"json", cache:true, timeout:5000, xhrFields: {withCredentials:true}, success: function(d) {
        	if (typeof(d._vbg_uid)!="undefined") { dglq.mybizuser = d._vbg_uid; dglq.mybizcookie = "Y";}
            if (typeof(d.loggedin)!="undefined") { dglq.mybizlogin = d.loggedin ? "Y" : dglq.mybizuser ? "N" : "X"; 
            dglq.mybizcheck = dyn.checktime();
            try { localStorage["vzdglq"]=JSON.stringify(dglq); }
            catch (e) {}
        	}
            if (typeof(cb)=="function") { cb(dglq); }
        }, error:function(xh,m) {
            dglq.mybizcheck = dyn.checktime();
	        console.log("mbz error:"+m);
            if (typeof(cb)=="function") { cb(dglq); }
        }
	    });
    }

    // 20min timestamp
    this.checktime = function() {
        return Math.ceil(new Date().getTime()/12e5);
    }

    // create testing menu
    this.menu = function(p) {
        if (!$(p).children("ul.dynamic-menu").length && (localStorage.vzdglq||"").indexOf("dyntest")>0) {
            var m = $("<ul class='dynamic-menu'></ul>");
            $(p).children("[data-dynamic]").each(function(i,v) {
                var c=$(v).attr("data-dynamic");
                var t=($(v).attr("data-tag")||"").replace(/\w+:\w+\/\w+\/([\w-]+)\/?[^,]*/g,"$1");
                if (c=="none" || c=="not") { c="not: "+t; }
                else if (c=="or" || c=="and") { c=t.replace(/,/g," "+c+" "); }

                m.append($("<li/>").text(c).addClass($(v).hasClass("dyn-match")?"on":"").on("click",function(){$(this).addClass("on").siblings(".on").removeClass("on");dyn.select(v)}));
            });
            $(p).prepend(m);
        }
    }

    // set custom TFN
    this.setTfn = function(tfn) {
        const s = document.querySelector("select.phonecountry");
        if (s && tfn) {
            if (s.selectedIndex) { s.prepend(new Option("Select...",tfn,true,true)); }
            else { s.firstChild.value=tfn; }
            s.dispatchEvent(new Event("change", { bubbles: true }))
        }
    }

    // process conditions - pass parent element
    this.run = function(p) {
        var m = false;
        $(p).addClass("dyndone").children("[data-dynamic]").each(function(i,v) {
            var d = $(v).attr("data-dynamic")?.replace(/ .+/,"");
            if (d=="else" && !m) {
                dyn.select(v);
                //m=true;
                //return false;
            } else if (d=="none" || d=="not") { m=true; }
            var ts = ($(v).attr("data-tag")||"").split(",");
            for (var t of ts) {
                if (dyn.match(t)) {
                    if (d=="none" || d=="not") { m=false; break; }
					m=true;
                    if (d=="or") {  break; }
                } else if (d=="and") {
                    m=false;
                    break;
                }
            }
            if (m) { dyn.select(v); return false; }
        })
        dyn.menu(p);
    }

    // process dynamic CTA
    this.cta = function(p) {
        var m = false;
        $(p).children("[data-condition]").each(function(i,v) {
            var d = $(v).attr("data-condition");
            if (d=="else" && !m) {
                $(v).addClass("dyn-match");
                m=true;
            } else if (!m && dyn.testglq(d,$(v).attr("data-value"))) {
                $(v).addClass("dyn-match");
                m=true;
            }
        });
    }

    this.init = function() {
      if (typeof(jQuery)!="undefined") {
        $("div.cup[data-dynamic]").parent(":not(.dyndone)").each(function(i,v){ dyn.run(v) });
        $("div.ctas[data-dynamic]").each(function(i,v) { dyn.cta(v) });
      }
    }
    vzCake.init.push(this.init);
};

// columns, keep vertical alignment

vzCake.columns = new function(){
	var col = this;

    // make all columns same size
    this.align = function() {
        $(".cup .crow>.cup.full .plate").css({minHeight:0}).children(".primary,.secondary").removeAttr("style"); //css({flexBasis:"unset"});
        // all columns more than 1
        $(".cup .crow:not(.c1)").each(col.heights);
        // carousels
        $(".scroller>.area>.items:not([data-c = 1])").each(col.heights);
    }

    // align columns contianing images
    this.alignImg = function() {
        $(".cup .crow img").parents(".crow:not(.c1)").each(col.heights);
    }

    // find children heights and set them all the same
    this.heights = function(i,v) {
        if ($(v).width()) {
            //var tops=$(v).children(".cup.full:visible").find(".plate>.primary:has(+.secondary)");
            var items=$(v).children(".cup.full:visible, .cup:visible:has(.plate.full)");
            items=items.add(items.children(".aspect"));
            var tops=items.children(".plate:not(.disclosure)").children(".primary:has(+.secondary)");
        	tops.parent(".plate").css({minHeight:0});
            tops.add(tops.next(".secondary")).css({flexBasis:""});
            var h=0;
            var h2=0;
            tops.each(function(ii,iv){
                h=Math.max(h,$(iv).outerHeight());
                h2=Math.max(h2,$(iv).next(".secondary").outerHeight());
            });
            if (h) {
                var p=Math.round(100*h/(h+h2));
                tops.css({flexBasis:p+"%"});
                tops.next(".secondary").css({flexBasis:(100-p)+"%"});
                tops.parent(".plate").css({minHeight:(h+h2)});
            }
    	}
     }

    // accordion with colums in it
    this.accord = function() {
        $(".cup.accordion .cup.columns").each(function(i,v) {
           $(v).parents(".cup.columns").parent("div").prev("label").prev("input").on("change.accord",function(){
               col.heights(i,v);
               vzCake.anchor.measure();
           });
        });
    }

    // mobile expandable handler
    this.exp = function() {
        $(".cup .columns.mexpandable>div>input").on("click.columns",function(e) {
            $(this).siblings("input:checked").prop("checked",false);
        });
    }
    // mobile expandable 
    this.preexp = function() {
        $(".cup .columns.mexpandable>div.preexpand>input:lt(3)").prop("checked",true);
        $(".expall").on("click",function(e) {
            $(e.target).siblings("div.preexpand").addClass("expon").children("input").prop("checked",true);
        });
    }
    // show four 
    this.showfour = function() {
        $(".showall").on("click",function(e) {
            $(e.target).parents("div").siblings("div.showfour").removeClass("showfour");
			$(this).hide();
        });
    }

    // disclosure height 
    this.disclosureheight = function() {
        $(".cup.columns, .cup.carousel .items").each(function(i,v) {
          var pid = $(this).attr("id");
          var h=0;
          $(this).find(".plate.disclosure").each(function(j,v) {
            if ($(this).parents(".aspect").hasClass("cbottom")) {
              var secpad = parseInt($(this).find(".primary").css("paddingTop")) + parseInt($(this).find(".primary").css("paddingBottom"));
              var secph = parseInt($(this).find(".primary h3").height()) + secpad;
            } else if ($(this).parents(".aspect").hasClass("mnone")) {
              var secpad = parseInt($(this).find(".secondary").css("paddingTop")) + parseInt($(this).find(".secondary").css("paddingBottom"));
              var secph = parseInt($(this).find(".secondary .text").height()) + secpad;
            }
            h=Math.max(h,secph);
            $(this).parents(".crow,.area").find(".plate:not(.partial)").css("min-height", h + "px");
          });
        });
    }

    // partial disclosure height 
    this.partdisc = function() {
        $(".plate.disclosure.partial").each(function(i,v) {
            var pid = $(this).parents("div.cup").attr("id");
            var pad = parseInt($(this).find(".secondary").css("paddingTop")) + parseInt($(this).find(".secondary").css("paddingBottom"));
            var th1 = parseInt($(this).find(".secondary div h3").height()) + pad - 4;
            var th2 = parseInt($(this).find(".secondary div:not(.background)").height()) + pad;
            $(this).children("div.secondary").css("height",th1+"px");
            $("<style type='text/css'> .cup .plate.disclosure.partial:hover > .secondary.phov"+pid+" { height:"+th2+"px !important;} </style>").appendTo("head");
            $(".cup#"+pid+" .plate.disclosure.partial").find("div.secondary").addClass("phov"+pid);
            // css("height",th2+"px");
        });
    }


    try {
    $(window).on("resize.columns",col.align);
    $(window).on("load.columns",col.alignImg);
    } catch (e) {} // jQuery
    vzCake.init.push(col.align);
    vzCake.init.push(col.exp);
    vzCake.init.push(col.accord);
    vzCake.init.push(col.preexp);
    vzCake.init.push(col.partdisc);
    vzCake.init.push(col.showfour);
    vzCake.init.push(col.disclosureheight);
};


// carousel

vzCake.carousel=new function() {
    var scroller=this;

    // arrow clicked
    this.arrow = function(e) {
        e.preventDefault();
        var dir=($(this).hasClass("left") ? -1 : 1);
        scroller.scroll($(this).parents(".scroller:first"),dir*2);
    }

    // page nav clicked
    this.page = function(e) {
        e.preventDefault();
        var p=$(this).index();
		var s=$(this).parents(".scroller:first");
        if ($(this).hasClass("left")) { scroller.scroll(s,-2); }
        else if ($(this).hasClass("right")) { scroller.scroll(s,2); }
        else {
        	var area=s.children(".area");
        	var w=area.children(".items").children("div:first").width()+(s.hasClass("gap") ? 24 : 0);
        	area.scrollLeft(p*w);
        }
    }

    // keyboard nav
    this.key = function(e) {
        var dir=0;
        if (e.keyCode==39) { dir=1; }
        else if (e.keyCode==37) { dir=-1;}
        else if (e.keyCode==13) {
            if ($(e.target).hasClass("right")) { dir=1; }
            else if ($(e.target).hasClass("left")) { dir=-1; }
        }
        if (dir) {
            e.preventDefault();
            scroller.scroll(this,dir);
        }
    }

    // scroll event
    var scrT; // timer
    var scrS; // scroller
    this.onscroll = function(e) {
        if (scrT) { clearTimeout(scrT); }
        scrS=this;
        scrT=setTimeout("vzCake.carousel.scrolled()",100);
    }
    this.scrolled = function() {
    	scrT=0;
        var x = $(scrS).scrollLeft();
        var pager=$(scrS).siblings(".pager");
        if (!x) {
            $(scrS).siblings(".arrows").removeClass("last").addClass("first");
			$(scrS).siblings(".pager").children("a").removeClass("on").eq(0).addClass("on");
            $(scrS).siblings(".arrows").children(".left").attr("tabindex",-1).blur();
        } else {
            $(scrS).siblings(".arrows").removeClass("first last");
            $(scrS).siblings(".arrows").children("a").attr("tabindex",0);
            var content=$(scrS).children(".items");
            var c=parseInt(content.attr("data-c"));
            if (content.width() < 640) { c=2; }
            var w=content.children("div:first").width()+($(scrS).parent().hasClass("gap") ? 24 : 0);
            var total=parseInt(content.attr("data-n")) - c;
            var p=Math.ceil(x/(w*c));
            if (x>=total*w) {
                $(scrS).siblings(".arrows").addClass("last");
                $(scrS).siblings(".arrows").children(".right").attr("tabindex",-1).blur();
            }
            $(scrS).siblings(".pager").children("a:visible").removeClass("on").eq(p).addClass("on");

        }
        scroller.pagenum(scrS);
    }

    // update pager numbers
    this.pagenum = function(scroller) {
        var pager=$(scroller).siblings(".pager.number");
        if (pager.length) {
            var n=Math.ceil($(scroller).children(".items").width()/$(scroller).width());
            var p=Math.ceil($(scroller).scrollLeft()/$(scroller).width());
	        pager.children("span").text((p+1)+"/"+n);
        }
    }

    // scroll one item (dir>1 then page)
    this.scroll = function(scroller,dir) {
		var area=$(scroller).children(".area");
       	var content=area.children(".items");
        var page=content.children("div:first").width()+($(scroller).hasClass("gap") ? 24 : 0);
		var total=parseInt(content.attr("data-n")||content.children().length)*page; //content.width()-page;
        if (Math.abs(dir)>1) { page=area.width();
        	if ($(scroller).hasClass("peek")) { page-=0.083*Math.min(1280,$(window).width()); }
        }
        var current=area.scrollLeft();
        area.scrollLeft(Math.max(0,Math.min(total,current+(Math.sign(dir) * page))));
    }

    // check if arrows are needed
    this.pages = function() {
        $(".cup .scroller").has(".arrows,.pager").each(function(i,v) {
            var a=$(v).children(".area").children(".items");
            if (parseInt(a.attr("data-c")) >= parseInt(a.attr("data-n"))) {
                if (a.width()>(a.children("div:last").offset()||{}).left) {
                	$(v).children(".arrows,.pager").hide();
                }
            } else {
                    scroller.pagenum($(v).children(".area"));
            }
        });
    }


    this.init = function() {
        if ($(".cup .scroller .arrows, .cup .scroller .pager").length) {
	        $(".cup .scroller .arrows>a").off("click.scroller").on("click.scroller",scroller.arrow);
    	    $(".cup .scroller .pager>a").off("click.scroller").on("click.scroller",scroller.page);
         	scroller.pages();
        }
        $(".cup .scroller").off("keydown.scroller").on("keydown.scroller",scroller.key);
        $(".cup .scroller .area").off("scroll.scroller").on("scroll.scroller",scroller.onscroll);
    }

   vzCake.init.push(this.init);
}

// anchor navigation

vzCake.anchor=new function() {
    var anchor=this;
    anchor.cups=null;
    anchor.links={};
    anchor.nav={};
    var o=0; // top offset
    var y=0; // scroll position
    var h=0; // visible height

    // find top and bottom of all cakes
    this.measure=function() {
        var s="div.cup"+(anchor.cups?"":":visible");
        anchor.cups={};
        o=$("header:first").height();
        if (o>320) { o-=320; }
        h=$(window).height() - o;
        $(s).each(function(i,v) {
            var t=Math.floor($(v).offset().top);
            var ad=0;
            if ($(v).parent().hasClass("anchor")) {
                ad=$(v).next(".cup:not(:has(a[name]))").height() || 0;
            }
			anchor.cups[$(v).attr("id")]=[t,t+Math.floor($(v).height()+ad),""];
        });
    }

    // match anchor names to ids
    this.names=function() {
        $("div.cup a[data-name]").each(function(i,v) {
			anchor.links[$(v).attr("data-name")]=$(v).parent("div.cup").attr("id");
			anchor.links[$(v).attr("name")]=$(v).parent("div.cup").attr("id");
        });
	    // nav links
        $("div.anchornav .nav li>a, div.pagenav .nav li.la>a").each(function(i,v) {
            var u=$(v).attr("href");
            if (!u.indexOf("#")) {
                anchor.nav[anchor.links[u.substr(1)]]=v.parentNode;
            }
        });
    }

    // force scroll to anchor
    this.go=function(name) {
        if (anchor.links[name] && anchor.cups) {
            var m=anchor.cups[anchor.links[name]];
            if (m && m[0]>42) {
            	var t=$("div.cup#"+anchor.links[name]).offset().top || m[0];
                var p=$(window).scrollTop();
                t-=(p<t ? 60 : 172);
                setTimeout("$(window).scrollTop("+t+")",250);
            }
        }
    }

    // open/select if anchor is in a container
    this.open=function(name) {
        var a=anchor.links[name] || (anchor.cups[name]?name:false);
        if (a) {
            var item=$("div.cup#"+a);
            var g=0;
            var p=item.parents(".cup.contain.tabs");
            if (p.length) {
                var n=item.index();
                var f=item.parents(".primary>.fragment:first");
                if (f.length) { n=f.index();}
                g=p.find("input.tabi").eq(n).prop("checked",true).length;
            } if (item.parents(".cup.contain:first").hasClass("accordion")) {
                g=item.parents("div").prevAll("input:first").prop("checked",true).length;
            } else if (item.hasClass("accordion")) { // open first
                $("div.cup#"+a+">.primary>.accordion>input:first").prop("checked",true);
            }
            if (g) { setTimeout("vzCake.anchor.go(\""+name+"\")",2500); }
            else { anchor.go(name); }
        }
    }

    // click handler
    this.click=function(e) {
        var link=$(e.target).blur().attr("href") || "";
        //console.log("anchor "+e.target);
        if (link.indexOf("#")>=0) {
            anchor.open(link.substr(link.indexOf("#")+1));
            $(e.target).parents(".nav").removeClass("open");
            e.stopPropagation();
        } else if (e.target.tagName=="UL") { // open menu
            $(e.target).parent(".nav").toggleClass("open");
        }
    }

    // scroll handler
    this.scroll=function() {
        var sy=$(window).scrollTop()+o;
        if (y!=sy && anchor.cups) {
            y=sy;
            var s=0;
            $.each(anchor.cups,function(i,v){
                var p="visible";
                if (v[0]>h+y) { p="above"; }
                else if (v[1]<y) { p="below"; }
                else if (v[0]+v[1]/2<y) { p="visible partial"; }
                else if (!s && anchor.nav[i]){ p+=" selected"; s= $(anchor.nav[i]).hasClass("selected") ? -1 : i; }
                if (p!=v[2]) {
                    v[2]=p;
                    $("#"+i).removeClass("above below visible partial selected").addClass(p);
                    if (anchor.nav[i]) {
                        $(anchor.nav[i]).removeClass("above below visible partial selected").addClass(p);
                    }
                }
            });
            if (s && s!=-1) {
                var ul=anchor.nav[s].parentNode;
                if (ul.scrollWidth > ul.offsetWidth) {
                    ul.scrollLeft = anchor.nav[s].offsetLeft;
                }
            }
        }
    }

    // centered overflow
    this.fitWidth=function() {
        $("div.nav.align-center").each(function(i,v){
            if ($(v).children("ul").children("li:first").position().left<0) {
                $(v).removeClass("align-center");
            }
        });
    }

    // nav links to anchor
    this.navi=function(e) {
        var m=$(e.target).attr("href").match(/#(.+)/);
    }

    this.init=function() {
        anchor.names();
        anchor.measure();
        $(window).off("resize.anchor load.anchor scroll.anchor").on("resize.anchor load.anchor",anchor.measure).on("scroll.anchor",anchor.scroll);
        if (window.location.hash?.indexOf("&")) {
             anchor.open(window.location.hash.substring(1,window.location.hash.indexOf("&")));
        } else if (window.location.hash) {
             anchor.go(window.location.hash.substring(1));
        } else { anchor.scroll(); }
        $("div.cup a[href ^= '#'").off("click.anchor").on("click.anchor",anchor.click);
        $("div.nav>ul").off("click.anchor").on("click.anchor",anchor.click);
        setTimeout(anchor.fitWidth,1000);
    }

   vzCake.init.push(this.init);
};


// tab navigation

vzCake.tabs=new function() {
    var tabs=this;

    this.click = function(e) {
        this.blur();
        if ($(e.target).parents(".tabs.select").length || $(e.target).css("font-weight")>=700) {
        $(e.target).parents(".secondary,.fullcontent").eq(0).toggleClass("active");
        } else {
        $(e.target).parents(".secondary,.fullcontent").eq(0).addClass("active");
        }
        // column heights
        //$(e.target).parents(".cup.tabs").children(".primary:first").children().eq($(e.target).index()).addClass("visible").find(".crow:not(.c1)").each(vzCake.columns.heights);
        if ($(e.target).parents(".plate,.cup.tabs").children(".primary:first").children().eq($(e.target).index()).addClass("visible").find(".crow:not(.c1)").length) {
        	setTimeout(vzCake.columns.align,100);
        }
        if ($(e.target).parents(".plate,.cup.tabs").children(".primary:first").children().eq($(e.target).index()).find(".scroller").length) {
        	setTimeout(vzCake.anchor.measure,100);
        	setTimeout(vzCake.carousel.pages,100);
        }
    }

    // keyboard nav
    this.key = function(e) {
        var sel=0;
        if (e.keyCode==39) { sel=$(this).next("label").focus().attr("for"); }
        else if (e.keyCode==37) { sel=$(this).prev("label").focus().attr("for");}
        else if (e.keyCode==13) { sel=$(this).blur().attr("for") }
        if (sel) {
            e.preventDefault();
			$("input#"+sel).prop("checked",true);
        }
    }

    // select tab based on tagging
    this.tags = function() {
        if (!localStorage.bert) { return false; }
        var s=[];
        $(".cup.tabs>.primary").each(function(ti,tv) {
            var t=[];
            $(tv).children("[data-tag]").each(function(i,v){
                $(v).attr("data-tag").toLowerCase().split(",").forEach(n => {
                     const m=vzCake.dynamic.match(n);
                     if (m) { t[m] = $(v).index(); }
                });
            });
            if (t) {
                s.push($(tv).siblings("input").eq(t.pop()).prop("checked",true).attr("id"));
            }
        })
        return s;
    }

    this.init = function() {
        $(".cup.tabs .nav>div.tabs label").off("click.tabs").on("click.tabs",tabs.click).on("keydown.tabs",tabs.key);
        $(".cup.tabs div.secondary+div.primary:first").on("click.tabs",function(e){
            $(this).prev(".secondary").addClass("active");
        });
    }

   vzCake.init.push(this.init);
};



// tool tips
vzCake.tip=new function() {
    var tip=this;

    // make sure open state is visible
	this.fit=function() {
     $(".cup p>fieldset.tooltip").each(function(i,v){
         var m=$(v).parents(".primary,.secondary,.fullcontent,.plate").eq(0).width() || 240;
        var c=$(v).text().length;
        var w=c>250 ? 320 : 240;
        //if ($(v).offset().top-$(v).parents(".cup").offset().top<c*0.36 && !$(v).hasClass("up")) { $(v).addClass("down"); }
        w=Math.min(w,m);
        var l=$(v).position().left;
        if (l+w>m || l<32) {
           $(v).children("span").css({"left":(l<32 ? -l : Math.max(m-l-w,24-w))+"px","max-width":w+"px"});
        }
     });
 	};

    // update fit
    var utime=0;
    this.ufit=function() {
        clearTimeout(utime);
        $(".cup p>fieldset.tooltip span[style]").css({"left":"","max-width":""});
        utime = setTimeout("vzCake.tip.fit()",100);
    }

    this.init=function() {
        // nest inside previous p
         $(".cup p+fieldset.tooltip").each(function(i,v){
             $(this).attr("tabindex","0");
             $(this).attr("aria-label","tooltip");
			 $(v).prev("p").append(v);
			 if ($(v).text().length>260) { $(v).addClass("long");
			 	 if ($(v).text().length>800) { $(v).addClass("scroll"); }
             }
     	});
		tip.fit();
        $(".cup.tabs:has(fieldset.tooltip) div.tabs>label").on("click.tip",tip.ufit);
        $(".cup.accordion:has(fieldset.tooltip) div.accordion>label").on("click.tip",tip.ufit);
	    $(".cup fieldset.tooltip").off("touchstart.tip").on("touchstart.tip",function(e){
            if (!($(this).hasClass("open") && (($(this).hasClass("scroll") && $(e.target).is("span")) || $(e.target).is("a")))) {
            	$(this).toggleClass("open").addClass("touched");
            }
            $("fieldset.open").not(this).removeClass("open");
        });
    }
    vzCake.init.push(this.init);
};


// audio player

vzCake.audio = new function() {
	var audio = this;

    // open player
    this.play = function(e) {
        if (e) {
	        e.preventDefault();
        }
        var link = $(e.target);
        var uid = link.attr("data-uuid");
        var player = $("body > .audioPlayer").show();
        if (!player.length) {
            player = $("body").append("<div class='audioPlayer'></div>").children(".audioPlayer");
        } else {
            $(".audioPlayer audio").get()[0].pause();
            $(".audioPlayer").empty();
        }
        $("<a class='close'/>").appendTo(player).on("click",audio.close);
        if (uid) { $("<div class='thumb'/>").css({backgroundImage:"url(/bin/get/img.poster.jpg?id="+uid+")"}).appendTo(player); }
        else if (link.attr("data-img")) {}
        $("<h4/>").text(link.attr("data-title")).appendTo(player);
        $("<audio/>").attr("src",link.attr("href")).attr("preload","metadata").prop("controls",true).prop("autoplay",true).appendTo(player).get()[0].play();
    }

    // close player
    this.close = function(e) {
        if (e) { e.preventDefault(); }
		$("body > .audioPlayer").hide().children("audio").get()[0].pause();
    }

    // add handler to links
    this.handler = function() {
        $(".cup a[href *= '.mp3']").off("click.audio").on("click.audio",audio.play);
    }

    vzCake.init.push(audio.handler);
};

// videos

vzCake.video = new function() {
	var video = this;

    // alt video for mobile
    this.mobile = function() {
        if (typeof(mobileAltVideo)!="undefined") { return; }
	    if ($(window).width()<760) {
    	    $("video[data-mobile]").each(function(i,v){
            var mv=$(v).attr("data-mobile");
            if (mv.endsWith(".mp4") || mv.match(/mobile\.mp4\?/)) {
            	$(v).attr("src",mv);
            } else if (mv.match(/\.[jp][pn]e?g[$\?]/)) {
                $(v).replaceWith($("<img/>").attr("src",mv));
            }
        	});
        }
    }

    // foreground video finished
    this.fin = function(v) {
       $(v).parents(".background.fg").addClass("end");
    }

    this.youtube = function() {
         $("div.video[data-youtube]:not(:has(iframe))").each(function(i,v){
     var yid=$(v).attr("data-youtube").replace(/.+embed\/|\?.*/g,'');
     var aply=$(v).attr("data-autoplay");
     var vts=$(v).attr("data-youtube").match(/[\?\&](t=[0-9]+)s/);
     var yemb="//www.youtube.com/embed/"+yid+"?"+(aply ? "autoplay=1&" : "")+"enablejsapi=1"+(vts ? "&star"+vts[1] : "");
     if ($(v).has("a.poster").length) { // poster click to play
         $(v).children("a.poster").click(function(e){
            e.preventDefault();
             aply="autoplay";
             if (typeof(YT)!="undefined") {
                 var player= new YT.Player(this,{videoId:$(this).attr("data-youtube")||yid,playerVars:{autoplay:(aply ? 1 : 0),start:vts?vts[1].substr(2):0,enablejsapi:1,playsinline:1,rel:0},events:
                                          { onReady:function(){player.playVideo()}} });
	         } else {
		     	$(this).after("<iframe src='"+yemb+"&autoplay=1&controls=1' allow='"+aply+"' title='"+($(v).attr("data-title")||"Video")+"'/>");
             }
         });
     } else if ($(v).hasClass("bg")) { // background video
         if (typeof(YT)!="undefined") {
             var player= new YT.Player(v,{videoId:yid,playerVars:{autoplay:(aply ? 1 : 0),enablejsapi:1,controls:0,playsinline:1,fs:0,rel:0},events:{
                 onReady:function(){player.mute();player.playVideo()}}});
	     } else {
		     	$(v).append("<iframe src='"+yemb+"&controls=0' allow='"+aply+"' title='"+($(v).attr("data-title")||"Video")+"'/>");
         }
         $(v).parents(".background:first").css({zIndex:0});
     } else { // embed video
         if (typeof(YT)!="undefined") {
             $(v).wrap("<div class='video'/>");
             var player= new YT.Player(v,{videoId:yid,playerVars:{autoplay:(aply ? 1 : 0),start:vts?vts[1].substr(2):0,enablejsapi:1,controls:1,playsinline:1,fs:0,rel:0},events:
                                          (aply ? { onReady:function(){player.mute();player.playVideo()}} : {}) });
	     } else {
		     	$(v).append("<iframe src='"+yemb+"&controla=1' allow='"+aply+"' title='"+($(v).attr("data-title")||"Video")+"'/>");
         }
     }
 });
    }

    this.init = function() {
        video.mobile();
        if (typeof(initYoutube)=="undefined") {
	        video.youtube();
        }
    }


    vzCake.init.push(video.init);
};


/*vzCake.pricing = new function() { // not used
	var pricing = this;

    // accordion
	this.click = function(e) {
		var el = $(e.target);

		if (el.parent().hasClass('open')) {
			el.parent().removeClass('open');
			el.attr('aria-expanded', false);
		} else {
			el.parents('ul').find('.open').removeClass().find('a').attr('aria-expanded', false);
			el.parent().addClass('open');
			el.attr('aria-expanded', true);
		}

		return false;
	}

    // line selector
    this.linesel = function(i,v) {
        var label = $(v).children("span");
        $(v).children("a").on("click.pricing",pricing.lineChange);
        var n=0;
        $(v).siblings("[data-dynamic]").each(function(ai,av){
            var c=$(av).attr("data-dynamic");
            if (!c.indexOf("line=")) { n=Math.max(n,c.substring(5)); }
        });
        $(v).attr("data-n",n).attr("data-c",n);;
        label.text(n+"+ lines");
        $(v).children("a.up").addClass("end");
		vzCake.dynamic.select($(v).siblings("[data-dynamic='line="+n+"']"));
    }

    this.lineChange = function(e) {
        e.preventDefault();
        var d = $(e.target).hasClass("down") ? -1 : 1;
        var line = $(e.target).parent(".lines");
        var n = line.attr("data-n");
        var c = Math.max(1,Math.min(d+parseInt(line.attr("data-c")),n));
        line.attr("data-c",c);
        $(".pricing .lines").each(function(i,v) {
            if (c<=$(v).attr("data-n")) {
            	var t=$(v).siblings("[data-dynamic='line="+c+"']");
                $(v).attr("data-c",c).children("span").text(c+(c==n?"+":"")+" line"+(c>1 ? "s" : ""));
        		if (c>=$(v).attr("data-n")) { $(v).children("a.up").addClass("end"); } else { $(v).children("a.up").removeClass("end"); }
				if (c==1) { $(v).children("a.down").addClass("end"); } else { $(v).children("a.down").removeClass("end"); }
            	vzCake.dynamic.select(t);
            }
        });
        $(".pricing .ctas>a").each(function(i,v){
            $(v).attr("href",$(v).attr("href").replace(/q=\d/,"q="+c));
        });
    }

    this.init = function() {
		$('.pricing .accordion').on('click.pricing', pricing.click);

        $(".pricing .showDetails").on("change.pricing",function(e){
            $(this).blur().parents($(window).width()<760?".columns.mscroll" : ".crow").find("input.showDetails").prop("checked",$(e.target).prop("checked"));
        });

        $(".pricing .lines").each(pricing.linesel);
        var s = $(".crow>.pricing .lines:first");
        if (s.length) {
            var t=$("<div class='cup pricing align-center'></div>").append(s.clone());
            s.parents(".primary:first").prev(".fullcontent").children(".text").before(t);
            $(t).find("a").on("click.pricing",pricing.lineChange);
        }

	}

    vzCake.init.push(pricing.init);
};*/

// product catalog

vzCake.catalog = new function() {
  var epc = this;
  var loaded = 0;
  var data = {};
  const feed = "/business/app/epc.json?d="+new Date().getDay();

  // load data feed
  this.load = async function() {
	const r = await fetch(feed);
    if (r.status==200) {
          data = await r.json();
    }
  }

    // format price
    this.price = function(d) {
        if (d && d.price) {
            const p = d.price;
            let h=("$"+(p.offer || p.monthly)).replace(/\.0$/,".00")+"/mo"+(p.term ? " for "+p.term+" months" : "")+".<br/>";
			if (p.offer) { h+=" was <s>$"+p.monthly+"</s><br/>"; }
            if (p.monthly && p.full) { h+="<span class='dim'>Retail price $"+p.full+"</span>"; }
            else if (p.full) { h+="Retail price $"+p.full; }
            return h;
        }
        return "";
    }

  this.run = async function() {
	const pl = document.querySelectorAll("span.epc-price");
	if (pl.length) {
        if (!loaded) { await epc.load(); }
        pl.forEach(function(p) {
           const d = data[p.getAttribute("data-device")];
           if (d) {
		   	p.innerHTML=epc.price(d);
           } else {
               p.setAttribute("data-error","not found");
           }
		});
        vzCake.columns.align();
 	}
   }

};



// Marketo embedded forms

vzCake.mkto=new function(){
    var mkto=this;
    var thanks;
    var forms2="/business/site/mktoForms2.js";

    // handle form submission
    this.success=function(val,url) {
        $("form[id^=mktoForm] button[disabled][type='submit']:first").text("Thank you");
        if (thanks && thanks.startsWith("#")) {
            $.fancybox.close();
            $.fancybox.open({src:thanks});
            return false;
        }
        else if (thanks) {
            const q = new URL(window.location).searchParams;
            if (q.has("cmp")) {
                thanks += (thanks.indexOf("?")>0 ? "&" : "?") + "cmp=" + q.get("cmp");
            }
            window.location=thanks;
            return false;
        }
        return true;
    };

    // handle pre-submit checks
    this.submit=function(form) {
     if (!$(".marketoForm input[name='mktoFormOptIn']").length) { form.addHiddenFields({"mktoFormOptIn":"yes"}); }
     if (!$("#zCSMKTOGDPROptIn").length) { form.addHiddenFields({"zCSMKTOGDPROptIn":"Yes"}); }
    }

    // handle form loaded
    this.ready=function(form) {
        if (form) {
  			form.onSubmit(mkto.submit);
        	form.onSuccess(mkto.success);
            var val={'mktoformoriginalPAGE':document.location.pathname};
		    try { val['mktoformoriginalSOURCE']=Bert.profile.utm.source; } catch(e) {}
  			try { val['mktoformoriginalMEDIUM']=Bert.profile.utm.medium; } catch(e) {}
		    try { val['mktoformlastSOURCE']=Bert.profile.utm.source; } catch(e) {}
		    try { val['mktoformlastMEDIUM']=Bert.profile.utm.medium; } catch(e) {}
		    try { val['mktoformlastCAMPAIGN']=Bert.profile.utm.campaign; } catch(e) {}
		    try { val['mktoformlastCONTENT']=Bert.profile.utm.content; } catch(e) {}
            val['zCSFormSubmissionReferringPage']=document.referrer || document.location.pathname;

	        if (typeof(s)!="undefined") { val["zCSAdobeCloudID"]=s.marketingCloudVisitorID; }
            try {
                var cmp = Bert.profile.utm?.medium||"na";
                cmp+=":"+Bert.profile.utm?.source||"na";
                cmp+=":"+Bert.profile.utm?.audience||"na";
                cmp+=":"+Bert.profile.utm?.segment||"na";
                cmp+=":"+Bert.profile.utm?.campaign||"na";
                cmp+=":"+Bert.profile.utm?.content||"na";
                cmp+="-"+Bert.profile.utm?.dcmid||"";
                val['zCSCMP']=cmp;
                val['zCSDCMID']=Bert.profile.utm?.dcmid;
            } catch (e) {}

  			form.setValues(val)
            $("form[id^=mktoForm] input,form[id^=mktoForm] select").filter(":not([aria-label])").each(function(i,v){
                $(v).attr('aria-label',($(v).attr('id')||"").replace(/(.)([A-Z])/g,"$1 $2"));
            });
            if ($("form[id^=mktoForm]:empty:first").length) {
            	setTimeout(mkto.init,500); // more than 1 form
            }
        } else {
            $("form[id^=mktoForm]:has(.loading)").addClass("error");
            console.log("Error loading form");
        }
    };

    // load Marketo API and Form
    this.load=function(id,acct,host) {
            if (typeof(MktoForms2)=="undefined") {
              $.ajax({url:forms2, oldurl:"//"+host+"/js/forms2/js/forms2.min.js",dataType:"script",cache:true,success:function(){
				MktoForms2.loadForm("//"+host,acct,id,mkto.ready);
              }});
            } else {
                MktoForms2.loadForm("//"+host,acct,id,mkto.ready);
            }
     };

    // find empty forms with mktoForm ID
        this.init=function() {
            var form=$("form[id^=mktoForm]:empty:first");
            if (form.length) {
                thanks=$(form).attr("action");
                var acct=$(form).attr("data-mkto") || "157-IPW-846";
                $(form).append("<span class='loading'></span>");
                //var app=acct.indexOf("350") > 0 ? 10 : 21;
                //var host="app-ab"+app+".marketo.com";
                var host="info.verizon"+(acct.indexOf("350") > 0 ? "wireless" : "enterprise")+".com";
                if (acct.indexOf("ZRU")>0) { host="pages.bluejeans.com"; }
                else if (acct.indexOf("KDI")>0) { host="info.public.solution.verizon.com"; }
                else if (acct.indexOf("QGQ")>0) { host="info.business.solution.verizon.com"; }
                mkto.load(parseInt(form.attr('id').substring(9)),acct,host);
            }
        };

    vzCake.init.push(mkto.init);
    };



var ppath = window.location.pathname;
var stitse = (typeof stitse === 'undefined') ? 0 : stitse;
var stitp = (typeof stitp === 'undefined') ? 0 : stitp;
var savedcart = getCookie("prospectCartId") || 0;
var prospectShoppingPath = getCookie('prospectShoppingPath') || "";
var prospectFlowType = getCookie('prospectFlowType') || "";
var showAC = (prospectFlowType == 'FOURG' || prospectFlowType == 'FIVEG') ? true : false;
var pflow = getCookie("_cs_cvars") || "";
var ipros = pflow.indexOf("prospect");
var slidese = getCookie('slidese');
var slidebar;


// Get Geolocation object
var objGeo = {};
var strGeo, geoC;
geoC = getCookie("geoC");
if (geoC != "1") {
  var req = new XMLHttpRequest();
  req.open('GET', '/business/geoloc.json', false);
  req.send(null);
  try {
    strGeo = req.responseText
    objGeo = JSON.parse(strGeo);
    objGeo.country_code = objGeo["ctry"].toUpperCase();
    localStorage.setItem('objGeo', JSON.stringify(objGeo));
  } catch (e) {
    objGeo = {};
  }
  document.cookie = "geoC=1;path=/";
} else {
  objGeo = JSON.parse(localStorage.getItem("objGeo"));
}




var exitpathsOff = [
	"/business/resources/lp/verizon-internet-dedicated-offer/",
	"/business/resources/lp/future-of-enterprise-digital-transformation/",
	"/business/resources/lp/next-gen-technology/",
	"/business/resources/lp/accelerate-innovation-and-growth/",
	"/business/forms/fios-subscribe/",
	"/business/products/networks/connectivity/5g-business-internet/",
	"/business/products/internet-tv-services/internet/internet-dedicated/",
	"/business/products/networks/connectivity/lte-business-internet/",
	"/business/products/internet-tv-services/internet/business-broadband/",
	"/business/products/networks/connectivity/complete-business-bundle/",
	"/business/products/deals/discounts/military/",
	"/business/products/deals/fixed-wireless-and-business-unlimited-bundle/",
	"/business/knowledge-center/",
	"/business/resources/reports/dbir/2022/master-guide/",
	"/business/support/",
	"/business/"
];


stitse = parseInt(getCookie("stitse")) || 0;
// var exitdisable = false;
var exitdisable = true;
 var exitpathstfn = [
	"/business/products/internet/business-tv/",
	"/business/products/internet/fios/",
	"/business/products/voice-collaboration/voip/business-phone-service-preferred-voice/",
	"/business/products/voice-collaboration/voip/business-digital-voice/",
	"/business/products/deals/fios-bundles/",
	"/business/products/internet/routers-network-extenders/",
	"/business/products/internet/business-speed-test/",
	"/business/products/deals/why-choose-fios-promo-8/",
	"/business/products/deals/why-choose-fios-promo-7/",
	"/business/products/deals/why-choose-fios-promo-6/",
	"/business/products/deals/why-choose-fios-promo-4/",
	"/business/products/deals/why-choose-fios-promo-5/"
 ];
var exittfn = exitpathstfn.includes(window.location.pathname) || false;
// var exittfn = false;
var countrysites = ["en-au","de-de","fr-fr","en-gb","en-nl","en-sg","ja-jp"];
var ppath2 = window.location.pathname;
ppath2 = ppath2.replace(/([^\/]*\/){2}/, '');
ppath2 = ppath2.substr(0,ppath2.indexOf("/"));
var isctrysite = countrysites.includes(ppath2) || false;
var infstates = ["CT","MA","RI","NY","NJ","PA","DE","MD","DC","VA"];
if (objGeo != null ) {
	var isinf = infstates.includes(objGeo.state) || false;
}
var ecomm = getCookie("XSRF-TOKEN") || 0;

// load marketo
var  mktoformid;
var mktoformpath = "//info.verizonwireless.com";
var mktoformid = 1;
if (exittfn == true) {fancymkto = "/business/contact/request-consultation/Exit_Tfn.html";}
else if (digitalData && digitalData.pageInfo.pageType.indexOf("wireless") > -1) {fancymkto = "/business/contact/request-consultation/Exit-Wireless.html";}
else if (digitalData && digitalData.pageInfo.pageType.indexOf("combined") > -1) {fancymkto = "/business/contact/request-consultation/Exit-Wireless.html";}
else if (digitalData && digitalData.pageInfo.pageType.indexOf("enterprise") > -1) {fancymkto = "/business/contact/request-consultation/Exit-Enterprise.html";}
else {fancymkto = "/business/contact/request-consultation/Exit-Wireline.html";mktoformpath = "//info.business.solution.verizon.com";}
if (digitalData?.pageInfo?.siteSectionsLevel3 && digitalData.pageInfo.siteSectionsLevel3.indexOf("public-sector") > -1) {mktoformid = 0;}
if (mktoformid != 0 && !exitdisable && !ecomm && !isctrysite) {
	$(window).on("load",function() {
		let scripts = Array
		.from(document.querySelectorAll('script'))
		.map(scr => scr.src);
		if (!exitdisable && !scripts.includes('/js/forms2/js/forms2.min.js')) {
			var tag = document.createElement('script');
			tag.src = mktoformpath + '/js/forms2/js/forms2.min.js';
			tag.async = 'async';
			document.getElementsByTagName('body')[0].appendChild(tag);
		}
	});
}

var vctry;
try{
if (typeof(objGeo.country_code) != 'undefined') {vctry = objGeo.country_code.toUpperCase();}
else if (typeof(objGeo.country) != 'undefined') {vctry = objGeo.country.toUpperCase();}
else if (typeof(objGeo.ctry) != 'undefined') {vctry = objGeo.ctry.toUpperCase();}
} catch (e) {}



vzCake.interstitials = new function(){

	var stits = this;

    this.exitinterstit = function() {
        if (window.location.pathname.indexOf("/business/knowledge-center/") > -1) {exitdisable = true;}
		if (window.location.pathname.indexOf("/state-local-government/contracts/california/") > -1) {exitdisable = true;}
		if (window.location.pathname.indexOf("/state-local-government//contracts/texas/") > -1) {exitdisable = true;}
		if (window.location.pathname.indexOf("/state-local-government//contracts/naspo/") > -1) {exitdisable = true;}
        if (exittfn == true) {exitdisable = true;}
		var bert = localStorage.getItem("bert");
		var bertobj = JSON.parse(bert);
//		try {refo = bertobj.contact.ref;exitdisable = true;}
//		catch (e) {exitdisable = false;}
		var exitint = getCookie('exitint') || 0;
		var orig_pagename = digitalData.pageInfo.pageName;
		if (exitint == 1) {exitdisable = true;}
		var exittimer;
		var exittimer2;
		var timertrigger = false;

		function openExit(e) {
			if (e == 'timer') {boxclass = "timer";} else {boxclass = "exit";}
			if (document.getElementById('lpChat') !== null) {exitdisable = true;}
			if (exitdisable == false && stitse < 1 && stitp < 1) {
				$.fancybox.open({
				  src: fancymkto,
				  type: 'ajax',
				  afterClose: function() {
				    digitalData.pageInfo.pageName = orig_pagename;
				  }
				});
				stitse = stitse + 1;
				document.cookie = "stitse="+stitse+";path=/";
				stitp = stitp + 1;
				$("#exit-news ."+boxclass).addClass('show');
				$('body').unbind("mouseleave");
				var exitInterstitialRenderedEvent = new CustomEvent("Exit Interstitial Rendered");
				window.dispatchEvent(exitInterstitialRenderedEvent);
				dataLayer.push({'event': 'Exit Interstitial Rendered'});
				digitalData.pageInfo.ExitInterstitialRendered = 'true';
			}
			clearTimeout(exittimer);
			clearTimeout(exittimer2);
			setCookie('exitint', 1);
		}

		$(window).on("load",function(){
			$('body').mouseleave(function(e) {
				if (e.clientY < 10 && ppath != "/business/" && timertrigger == true) {
					openExit('exit');
				}
			});
			$('a[href*="youtu"]:not(".gnav20-social-media")').on('click',function(e){
				exitdisable = true;
			});
			exittimer = setTimeout(function() {openExit('timer');}, 125000);
			exittimer2 = setTimeout(function() {timertrigger = true}, 75000);
		});
		$(document).on('keydown', function(event) {
			if (event.key == "Escape") {
				$.fancybox.close();
			}
		});  
	}
// exit interstitial end



    this.abandonedcart = function() {
		currentCartData = localStorage.getItem("_cartData");
		currentCartDataJSON = JSON.parse(currentCartData);
		var cartstit = window.location.protocol+"//"+window.location.hostname + "/business/contact/request-consultation/abandoned-cart.html";

		function openCartstit() {
			$.fancybox.open({
			  src: cartstit,
			  type: 'ajax',
			  'autoScale': true,
			  'transitionIn': 'elastic',
			  'speedIn': 500,
			  'speedOut': 300,
			  'autoDimensions': true,
			  'centerOnScroll': true,
			  'clickOutside': false
			});
			stitse = stitse + 1;
			document.cookie = "stitse="+stitse+";path=/";
			stitp = stitp + 1;
			setCookie('exitint', 1);
			var savedcartInterstitialRenderedEvent = new CustomEvent("Saved Cart Interstitial Rendered");
			window.dispatchEvent(savedcartInterstitialRenderedEvent);
			dataLayer.push({'event': 'Saved cart Interstitial Rendered'});
			digitalData.pageInfo.SavedcartInterstitialRendered = 'true';
		}
		$('.cart-closebutton').on('click',function(e){
			e.preventDefault();
			$.fancybox.close();
		});
		openCartstit();
	}
	// end abandoned cart


    this.fios5gslider = function() {
		console.log("5gslider function");
		var slidepaths = [
			"/business/products/internet-tv-services/internet/",
			"/business/solutions/small-business/",
			"/business/products/mobile/plans/"
		];
		slidebar = slidepaths.includes(ppath) || false;
		if (objGeo.svc == "5g" && slidebar == false) {
			if (digitalData.pageInfo.pageType.indexOf("wireline") > -1) {slidebar = true;}
			if (ppath.indexOf("/business/products/deals/") > -1 || ppath == "/business/" || ppath == "/business/products/") {slidebar = true;}
		}
		if (ppath.indexOf("/business/solutions/public-sector/") > -1 || ppath.indexOf("/business/solutions/enterprise/") > -1 || ppath.indexOf("/business/forms/fios-subscribe/") > -1) {slidebar = false;}
		if (ppath == "/business/products/internet/" && objGeo.svc == "fios") {slidebar = false;}
		if (ppath == "/business/products/networks/connectivity/5g-business-internet/" && objGeo.svc == "5g") {slidebar = false;}
		if (ppath == "/business/products/internet-tv-services/internet/internet-dedicated/" && objGeo.svc == "5g") {slidebar = false;}
		if (ppath == "/business/products/internet/fios-business-internet/" && objGeo.svc == "5g") {slidebar = false;}
		if (ppath == "/business/products/deals/discounts/military/" && objGeo.svc == "5g") {slidebar = false;}
		if (ppath == "/business/products/deals/wireless-business-and-fios-discount/" && objGeo.svc == "5g") {slidebar = false;}

		$("body").append('<div id="stitslide" class="dark" aria-hidden="true"><div class="close"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"></path></svg></div><div id="c"><h3 id="5g">Great News!<br/>5G is available in your area</h3><p><a id="5g-cta" class="primary button vz-button-link" href="https://www.verizon.com/business/products/networks/connectivity/5g-business-internet/" data-loc="Slider:Button" >Check availability</a></p></div></div>');   

		if (slidebar != false) {
			if (objGeo && objGeo.country_code == "US") {
				$('#stitslide').css("display","block");
				if($("#stitslide").css("margin-right") == "-300px") {
					$('#stitslide').animate({"margin-right": '+=300',duration: 5000,specialEasing: {width: "linear",height: "easeOutBounce"}});
					stitp = stitp + 1;
					stitse = stitse + 1;
					setCookie('slidese', 1);
				}
				if($("#stitslide").css("margin-left") == "-300px") {
					$('#stitslide').animate({"margin-left": '+=300',duration: 5000,specialEasing: {width: "linear",height: "easeOutBounce"}});
					stitp = stitp + 1;
					stitse = stitse + 1;
					setCookie('slidese', 1);
				}
				$('div.close').on('click',function(e){
					e.preventDefault();
					$('#stitslide').animate({"margin-left": '-=300',duration: 5000,specialEasing: {width: "linear",height: "easeOutBounce"}});
				});
			}
		}
	}
	// 5g slider end


	// old browser alert ribbon
    this.alertribbon = function() {
		$("header").prepend('<div class="alert-ribbon" id="alert-ribbon" aria-hidden="true"><div><div><p class="excl">&#x26a0;</p><p><strong>Your web browser is out of date.</strong><br/>For the best browser experience, please use the latest version of Chrome, Safari, Firefox or Microsoft Edge.</p><button tabindex="0" aria-label="undefined close" data-testid="close-button" role="button" class="alert-closebutton"><div class="IconWrapper"><svg data="[object Object]" aria-label="close icon" aria-hidden="false" tabindex="-1" viewBox="0 0 24 24" focusable="false" class="closebutton-x"><g><path vector-effect="non-scaling-stroke" stroke="#000000" stroke-width="1" fill="none" d="M2,2l20,20"></path><path vector-effect="non-scaling-stroke" stroke="#000000" stroke-width="1" fill="none" d="M2,22L22,2"></path></g></svg></div></button></div></div></div>');   
		$("#alert-ribbon").show();
		$('button.alert-closebutton').on('click',function(){
			$('.alert-ribbon').hide();
		});
		sessionStorage.setItem("ie11banner", "true");
	}


    this.countryredirect = function() {
		var cpur;
		var cmp;
		var geoctry = "";
        try {
			var urlParams = new URLSearchParams(window.location.search);
			cpur = urlParams.get('cpur');
			cmp = urlParams.get('cmp') || "";
		} catch (e) {}

		geoctry = objGeo.country_code || "";
		var ctrylang;
		geoctry = geoctry.replace(/"/g,'');
		var tld =  {"AR":"US","BR":"US","CA":"US","CL":"US","CO":"US","CR":"US","MX":"US","PA":"US","VE":"US","AU":"AU","IN":"AU","NZ":"AU","DE":"DE","AT":"DE","FR":"FR","DK":"GB","FI":"GB","IE":"GB","IT":"GB","NO":"GB","PT":"GB","ES":"GB","SE":"GB","CH":"GB","UK":"GB","GB":"GB","JP":"JP","BE":"NL","LU":"NL","NL":"NL","CN":"SG","HK":"SG","KR":"SG","SG":"SG","TW":"SG"};
		var ctryset=tld[geoctry];
		if (!ctryset) {ctryset="US";}
		var ctryrdr = getCookie("ctryrdr");
		var tllang =  {"GB":"en","NL":"en","SG":"en","AU":"en","FR":"fr","DE":"de","JP":"ja"};

        // If country not US and geoctry not undefined and not already redirected then redirect  
		if (ctryset != "US" && typeof geoctry !== 'undefined' && ctryrdr != 1) {
			ctrylang = tllang[ctryset];
			var ctrydir = ctrylang + "-" + ctryset.toLowerCase() + "/";

            localStorage.setItem('landingsegment', ctrydir);
			if (cpur != null) {ctrydir =ctrydir+"?cpur=1"}
			setCookie('ctryrdr', 1);
			window.location.replace(window.location.protocol+"//"+window.location.hostname + "/business/"+ctrydir);
		}
	}

this.countryredirect2 = function() {
	var geoctry = objGeo.country_code || "";
        var ctryset=geoctry;
        //var ctryset = "GB";
        var tllang =  {"GB":"en","NL":"en","SG":"en","AU":"en","FR":"fr","DE":"de","JP":"ja"};
        if (tllang[ctryset]) {
          var tlctry =  {"GB":"United Kingdom","NL":"Netherlands","SG":"Singapore","AU":"Australia","FR":"France","DE":"Germany","JP":"Japan"};
          var ctryname = tlctry[ctryset];
          var ctrylang = tllang[ctryset];
          var ctrydir = ctrylang + "-" + ctryset.toLowerCase() + "/";
          $("body").append('<div id="ctryredir" aria-hidden="true"><div id="c"><p>We\'ve noticed you\'re located in '+ctryname+'.</p><p>Would you like to visit our '+ctryname+' site for a better experience?</p><p class="cup"><a id="ctryredir-cta-y" class="primary button vz-button-link" href="https://www.verizon.com/business/'+ctrydir+'" data-loc="Country select overlay:Button" >Yes, go to the '+ctryname+' site</a><a id="ctryredir-cta-n" class="primary button vz-button-link closebutton" data-loc="Country select overlay:Button" >No, stay here</a></p></div></div>');
          function openCtryredir(e) {
            $.fancybox.open({
                src : '#ctryredir', 
                modal:true
                });
            $(document).on('keydown', function(event) {
              if (event.key == "Escape") {
                $.fancybox.close();
              }
            });
            $('.closebutton').on('click',function(e){
              e.preventDefault();
              $.fancybox.close();
            });
                  
          }
          openCtryredir();
          var exitInterstitialRenderedEvent = new CustomEvent("Country Redirect Select Rendered");
          window.dispatchEvent(exitInterstitialRenderedEvent);
          dataLayer.push({'event': 'Country Redirect Select'});
          digitalData.pageInfo.ExitInterstitialRendered = 'true';
        }
    }


    this.init = function() {
	    if (exitpathsOff.includes(window.location.pathname) == false && objGeo && vctry == "US" && ecomm == 0 && isctrysite == false && exitdisable == false) {
//		    vzCake.init.push(stits.exitinterstit);
	    }
		if (typeof(localStorage.getItem("_cartData")) != 'undefined' && savedcart != 0 && ipros == -1 && stitp < 1 && stitse < 1 && prospectShoppingPath == '') {
//		    vzCake.init.push(stits.abandonedcart);
	    }
		if (slidese != 1 && objGeo && typeof(objGeo.svc) != "undefined" && stitp < 1 && stitse < 1) {
//		    vzCake.init.push(stits.fios5gslider);
	    }
	    if (navigator.appVersion.indexOf('Trident/') > -1 && sessionStorage.getItem("ie11banner") != "true") {
		    vzCake.init.push(stits.alertribbon);
	    }
	    if (ppath == "/business/" && objGeo && vctry != "US") {
		    vzCake.init.push(stits.countryredirect);
	    }
//	    if (ppath == "/business/" && objGeo && vctry != "US") {
//		    vzCake.init.push(stits.countryredirect2);
//	    }    
    }

    vzCake.init.push(stits.init);
};


vzCake.pagespecific = new function(){
    var specif = this;

    this.supportyext = function() {
        $('head').append('<link rel="stylesheet" type="text/css" href="https://assets.sitescdn.net/answers-search-bar/v1.5/answers.css">');
        $.getScript( 'https://assets.sitescdn.net/answers-search-bar/v1.5/answerstemplates.compiled.min.js');

        function initAnswers() { 
            ANSWERS.init({ 
                apiKey: "baefb2287ac9246b936abd584c794ea9", 
                experienceKey: "vbg-site-search", 
                experienceVersion: "PRODUCTION", 
                locale: "en", 
                businessId: "700687", 
                templateBundle: TemplateBundle.default, 
                onReady: function() { 
                    ANSWERS.addComponent("SearchBar", { 
                        container: ".search-form",
                        name: "search-bar", 
                        redirectUrl: "https://www.verizon.com/business/search/", 
                        placeholderText: "How can we help?", 
                        customIconUrl: "/content/dam/business-markets/img/icons/magnifying-glass.png",
                    }); 
                }, 
            }); 
        } 
        $.getScript( 'https://assets.sitescdn.net/answers-search-bar/v1.5/answers.min.js', function( data, textStatus, jqxhr ) {
            initAnswers();
        });


    }
    // supportyext end


    this.init = function() {
        if (window.location.pathname == "/business/support/" || window.location.pathname == "/content/business/us/en/index/support.html") {
            vzCake.init.push(specif.supportyext);
        }
    }

    vzCake.init.push(specif.init);
};


// Chat

var customchatpages = 
{"/business/":"Combined","/business/products/":"Combined","/business/products/contact-center-cx-solutions/":"Combined","/business/products/contact-center-cx-solutions/customer-experience-consulting/":"Combined","/business/products/contact-center-cx-solutions/customer-experience-consulting/contact-center-edge-solutions/":"Combined","/business/products/contact-center-cx-solutions/customer-experience-consulting/contact-center-managed-services/":"Combined","/business/products/contact-center-cx-solutions/customer-experience-consulting/contact-center-technical-services/":"Combined","/business/products/contact-center-cx-solutions/customer-experience-consulting/voice-defense-professional-services/":"Combined","/business/products/contact-center-cx-solutions/voice-security/stir-shaken-caller-id-idenitification/":"Combined","/business/products/contact-center-cx-solutions/voice-security/stir-shaken-caller-id-identification/":"Combined","/business/products/contact-center-cx-solutions/voice-security/voice-cypher/":"Combined","/business/products/devices/5g/":"Combined","/business/products/devices/apple/":"Combined","/business/products/devices/basic-phones/":"Combined","/business/products/devices/google/":"Combined","/business/products/devices/mobile-hotspots/":"Combined","/business/products/devices/motorola/":"Combined","/business/products/devices/samsung/":"Combined","/business/products/devices/smartphones/":"Combined","/business/products/devices/tablets/":"Combined","/business/products/internet-of-things/":"Combined","/business/products/networks/":"Combined","/business/products/networks/connectivity/":"Combined","/business/products/networks/connectivity/cloud-connectivity/":"Combined","/business/products/networks/connectivity/lte-business-internet/":"Combined","/business/products/networks/edge-solutions/":"Combined","/business/products/security/advanced-security-operations-center-services/advanced-security-operations-center/":"Combined","/business/products/security/cyber-risk-management/governance-risk-compliance/cybersecurity-assessments/":"Combined","/business/products/security/cyber-risk-management/icsa-labs/":"Combined","/business/products/security/identity-access-management/identity-access-management-services/":"Combined","/business/products/security/incident-response-investigation/rapid-response-retainer/":"Combined","/business/products/security/mobile-device-endpoint-security/mobile-threat-defense/asavie/":"Combined","/business/products/security/network-cloud-security/security-device-monitoring-management/":"Combined","/business/products/security/network-cloud-security/security-device-monitoring-management/device-health-availability-monitoring/":"Combined","/business/products/security/network-cloud-security/security-device-monitoring-management/device-policy-configuration-management/":"Combined","/business/products/security/network-cloud-security/virtual-private-network/netmotion/":"Combined","/business/products/security/network-cloud-security/virtual-private-network/wireless-private-network/":"Combined","/business/products/tech-support-services/":"Combined","/business/products/voice-collaboration/":"Combined","/business/products/voice-collaboration/conferencing/zoom/":"Combined","/business/products/voice-collaboration/productivity-tools/":"Combined","/business/products/voice-collaboration/productivity-tools/localworks/":"Combined","/business/products/voice-collaboration/unified-communications/":"Combined","/business/products/voice-collaboration/unified-communications/webex-calling/":"Combined","/business/products/voice-collaboration/voip/":"Combined","/business/products/voice-collaboration/workforce-productivity/":"Combined","/business/products/voice-collaboration/workforce-productivity/local-network-command/":"Combined","/business/products/voice-collaboration/workforce-productivity/push-talk-plus/":"Combined","/business/resources/lp/verizon-internet-dedicated-offer-advantage/":"Combined","/business/solutions/":"Combined","/business/solutions/5g/":"Combined","/business/solutions/5g/edge-computing/business-innovator-form/":"Combined","/business/solutions/5g/edge-computing/developer-form/":"Combined","/business/solutions/5g/edge-computing/thingspace-for-edge-device-development/":"Combined","/business/solutions/business-continuity/":"Combined","/business/solutions/business-continuity/customer-service-continuity/":"Combined","/business/solutions/business-continuity/network-continuity-remote-bandwidth/":"Combined","/business/solutions/business-continuity/weekly-latency-statistics/":"Combined","/business/solutions/digital-transformation/business-communication-tips/":"Combined","/business/solutions/digital-transformation/enterprise-networking-tips/":"Combined","/business/solutions/digital-transformation/five-states-of-ready/":"Combined","/business/solutions/digital-transformation/make-your-cx-stand-out/":"Combined","/business/solutions/global-integrated-solutions/":"Combined","/business/solutions/industry/":"Combined","/business/solutions/industry/energy-utilities/":"Combined","/business/solutions/industry/energy-utilities/grid-wide-intelligent-energy/":"Combined","/business/solutions/industry/energy-utilities/grid-wide-intelligent-gas/":"Combined","/business/solutions/industry/energy-utilities/grid-wide-intelligent-water/":"Combined","/business/solutions/industry/financial/":"Combined","/business/solutions/industry/healthcare/electronic-visit-verification/":"Combined","/business/solutions/industry/manufacturing-automotive/":"Combined","/business/solutions/industry/media-entertainment/":"Combined","/business/solutions/secure-your-business/":"Combined","/business/solutions/secure-your-business/business-security-tips/":"Combined","/business/why-verizon/":"Combined","/business/test/combined-chat/":"Combined production test","/business/contact-us/free-quote/":"Consumer","/business/products/deals/why-choose-fios-promo-4/":"Consumer","/business/products/deals/why-choose-fios-promo-5/":"Consumer","/business/products/deals/why-choose-fios-promo-6/":"Consumer","/business/products/deals/why-choose-fios-promo-7/":"Consumer","/business/products/internet/business-speed-test/":"Consumer","/business/products/internet/business-tv/":"Consumer","/business/products/internet-tv-services/business-tv/":"Consumer","/business/products/internet-tv-services/internet/business-speed-test/":"Consumer","/business/products/voice-collaboration/voip/business-digital-voice/":"Consumer","/business/products/voice-collaboration/voip/business-phone-service-preferred-voice/":"Consumer","/business/resources/general/small-business-owner-tips-lori-greiner/":"Consumer","/business/resources/internet/wifi-for-small-business/":"Consumer","/business/products/internet/fios/":"FIOS","/business/products/internet-tv-services/":"FIOS","/business/products/internet-tv-services/internet/fios-business-internet/":"FIOS","/business/products/internet/routers-network-extenders/":"Wireline","/business/products/internet-tv-services/internet/verizon-cloud/":"Wireline","/business/products/internet-tv-services/routers-network-extenders/":"Wireline","/business/products/security/network-cloud-security/business-internet-secure/":"Wireline","/business/products/security/network-cloud-security/verizon-cloud/":"Wireline","/business/products/tech-support-services/business-preferred/":"Wireline","/business/products/tech-support-services/tech-support-pro/":"Wireline","/business/products/tech-support-services/verizon-service-protection-plan/":"Wireline","/business/products/networks/connectivity/5g-business-internet/":"Wireless","/business/products/networks/connectivity/backup-internet-failover-solutions/":"Enterprise","/business/products/networks/connectivity/ethernet/":"Enterprise","/business/products/networks/connectivity/private-ip/":"Enterprise","/business/products/networks/network-consulting/digital-advisory-services/":"Enterprise","/business/products/security/":"Enterprise","/business/products/security/cyber-risk-management/cyber-risk-monitoring/":"Enterprise","/business/products/voice-collaboration/collaboration-platforms/ring-central/":"Enterprise","/business/resources/lp/5g-edge-verticals/":"Enterprise","/business/resources/lp/accelerate-innovation-and-growth/":"Enterprise","/business/resources/lp/future-of-digital-transformation/":"Enterprise","/business/resources/lp/future-of-enterprise-digital-transformation/":"Enterprise","/business/resources/lp/next-gen-technology/":"Enterprise","/business/resources/lp/verizon-internet-dedicated-offer/":"Enterprise","/business/solutions/5g/edge-computing/":"Enterprise","/business/solutions/5g/edge-computing/5g-and-edge-computing/":"Enterprise","/business/solutions/5g/edge-computing/5g-edge-faq/":"Enterprise","/business/solutions/5g/edge-computing/aws-verizon-edge-computing-announcement/":"Enterprise","/business/solutions/5g/edge-computing/aws-wavelength-5g/":"Enterprise","/business/solutions/5g/edge-computing/edge-computing-and-IoT/":"Enterprise","/business/solutions/5g/edge-computing/industry-use-cases-examples/":"Enterprise","/business/solutions/medium-business/":"Enterprise","/business/solutions/navigating-new-working-models/remote-work-from-home-solutions/":"Enterprise","/test/chat-with-us/":"VBM test","/business/test/agent-chat-test/":"Agent production test","/business/products/internet-tv-services/internet/internet-dedicated/":"BusinessMarket","/business/products/internet/internet-dedicated/":"BusinessMarket","/business/security/security-operations-service/":"None","/business/products/security/accenture-partnership/":"None", "/business/products/internet/frontier-fios/":"Wireless"}

var pagehost = window.location.hostname;
var pagepath = window.location.pathname;
var pagetype = digitalData.pageInfo.pageType;
var customchat = customchatpages[window.location.pathname] || false;
var chatOff = digitalData.pageInfo.chatOff;
var page_chat_type;
var utm_source;
var chattype;
var geoctrylp;if (objGeo) {geoctrylp = (objGeo.country_code != null ? objGeo.country_code : "US");} else {geoctrylp = "US";}
var urlParams = new URLSearchParams(window.location.search);
var scriptUnified = "https://" + pagehost + "/business/support/vec/livechat/unified" + (pagehost == "www.verizon.com" ? "/prod/lp-utility-unified-prod.js" : "/qa/lp-utility-unified-qa.js");
var scriptProspect = "https://" + pagehost + "/business/support/vec/livechat/prospect" + (pagehost == "www.verizon.com" ? "/prod/lp-utility-prospect-prod.js" : "/qa/lp-utility-prospect-qa.js");
var scriptWireline = "https://www.verizon.com/business/support/vec/livechat/smb-wireline-lp.js";

function setChat() {
	chattype = "";
	if (pagehost == "enterprise.verizon.com") {chattype = "Combined";}
	else if (pagepath.indexOf("/state-local-government/contracts/california/") > -1) {chattype =  "None"}
	else if (pagepath.indexOf("/business/solutions/public-sector/") > -1) {chattype =  "Public"}
	else if (pagepath.indexOf("/business/verizonpartnersolutions/") > -1) {chattype =  "VPS"}
	else if (customchat) {chattype =  customchatpages[pagepath];}
        else if (digitalData?.pageInfo.chatType) { chattype = digitalData.pageInfo.chatType;}
	else if (pagetype.indexOf("wireless") > -1) {chattype = "Wireless"}
	else if (pagetype.indexOf("wireline:") > -1) {chattype = "Wireline"}
	else if (pagetype.indexOf("combined:") > -1) {chattype = "Combined"}
	else if (pagetype.indexOf("enterprise:") > -1) {chattype = "Combined"}
	if (chattype == "") {chattype = "VBM"}
	return chattype;
}





vesLP = new function(){
	var lp = this;

	this.lpcombined = function() {
		page_chat_type = "VBM chat";
		utm_source = urlParams.get('utm_source');
		if (pagepath == "/business/products/deals/wireless-business-and-fios-discount/") {
			if (utm_source == "int" || utm_source == "wls") {promo = "joint-offer:wln";}
			else if (utm_source == "flos" || utm_source == "smb") {promo = "joint-offer:wls";}
			else {promo = "joint-offer:all";}
		}
		$.ajax({url:scriptUnified, dataType:"script", cache:true});
	}
	// lpcombined end

	this.lpconsumer = function() {
        if (chattype == "Consumer") {page_chat_type = "Consumer chat";}
        if (chattype == "FIOS") {page_chat_type = "learn_chat";}
		$('body').append('<div id="autoOpenMsgWindowContainer"></div>');
		$.ajax({url:scriptUnified, dataType:"script", cache:true});
	}
	// lpconsumer end

	this.lpenterprise = function() {
        if (chattype == "Public") {page_chat_type = "Public Sector";}
        if (chattype == "Enterprise") {page_chat_type = "Enterprise chat";}
        if (chattype == "BusinessMarket") {page_chat_type = "busmkt chat";}
		$.ajax({url:scriptUnified, dataType:"script", cache:true});
	}
	// lpenterprise end

	this.lpsmbwireless = function() {
		page_chat_type = "SMB Wireless chat";
		$('body').append('<div id="autoOpenMsgWindowContainer"></div>');
		$.ajax({url:scriptProspect, dataType:"script", cache:true});
	}
	// lpsmbwireless end


	this.lpsmbwireline = function() {
		page_chat_type = "SMB Wireline chat";
		$('body').append('<div id="autoOpenMsgWindowContainer"></div>');
		$.ajax({url:scriptWireline, dataType:"script", cache:true});
        var autoMessageWindowOpen = function autoMessageWindowOpen() {
        	//Proactive chat Pop-Up
        	var maxRetry = 4;
        	var autoOpenMsgWindowDivClicked = false;
            var autoOpenWindow = function autoOpenWindow(event, currentRetry) {
            	var retry = currentRetry || 0;
            	setTimeout(function delay() {
            		try {
						//Try reloading lpTag
						if (retry >= maxRetry || autoOpenMsgWindowDivClicked) return;
						var autoOpenMsgWindowDiv = document.getElementById('autoOpenMsgWindow');
						if (!autoOpenMsgWindowDiv && maxRetry !== 0) throw new Error('Could not find autoOpenMsgWindow');
						console.log('autoMessageWindow Launched!');
						autoOpenMsgWindowDiv.click();
						autoOpenMsgWindowDivClicked = true;
					} catch (error) {
						if (retry < maxRetry) {
							autoOpenWindow(event, retry + 1);
						}
						if (window.location.href.indexOf("?lpDebug") >= 0) {
							console.log('lpDebug:autoMessageWindow close not available!');
						}
					}
				}, 500)
			};

            //Check for LP container
			var autoOpenMsgWindowDisplayHandler = function autoOpenMsgWindowDisplayHandler() {
				if (document.getElementById("autoOpenMsgWindowContainer")) {
					autoOpenWindow();
				}
			};

			window.setTimeout(function() {
				if(window.lpTag){
					try {
						window.lpTag.events.bind('LP_OFFERS', 'OFFER_DISPLAY', autoOpenMsgWindowDisplayHandler);
					} catch (err) {
						console.log("Error occured in invoking lpTag auto enable");
					}
				}
			}, 3000);
		};

		autoMessageWindowOpen();
		$.ajax({url:'https://www.verizon.com/business/support/vec/livechat/lp-utility.js', dataType:"script", cache:true});
	}
	// lpsmbwireline end


    this.lpvbm = function() {
		page_chat_type = "VBM chat";
		$('body').append('<div id="autoOpenMsgWindowContainer"></div>');
        $.ajax({url:scriptProspect,dataType:"script",cache:true});

		//Change LP Message window title
		window.addEventListener("load", function() {
			windowCustomizationInit();
		});
		var consData = {
			CHAT_WITH_US: "Chat with us",
			MESSAGE_US: "Message us",
		};
		var headerObserver = new MutationObserver(function(mutationsList) {
			for (var i = 0; i < mutationsList.length; i++) {
				var mutation = mutationsList[i];
				for (var j = 0; j < mutation.addedNodes.length; j++) {
					var node = mutation.addedNodes[j];
					if (node.nodeType === 3 && node.textContent === consData.MESSAGE_US) {
						node.textContent = consData.CHAT_WITH_US;
					}
				}
			}
		});
		function windowCustomizationInit() {
			window.lpTag = window.lpTag || {};
			lpTag.events.bind("lpUnifiedWindow", "state", function(data) {
				try {
					var headers = document.querySelectorAll("[data-lp-point='headerText']");
					for (var k = 0; k < headers.length; k++) {
						headersData = headers[k];
						headerObserver.observe(headersData, {
							childList: true
						});
					}
				} catch (err) {}
			});
		}
	}
	// lpvbm end

	this.init = function() {

    if (chatOff != 'true' && !pagepath.match("en-gb|en-nl|en-au|en-sg|fr-fr|de-de|ja-jp") && !pagepath.match("/xo/") && geoctrylp == 'US') {
		chattype = setChat();

		if (chattype == 'Combined') {
			lp.lpcombined();
		}
		if (chattype == 'Consumer') {
			lp.lpconsumer();
		}
		if (chattype == 'Enterprise') {
			lp.lpenterprise();
		}
		if (chattype == 'BusinessMarket') {
			lp.lpenterprise();
		}
		if (chattype == 'FIOS') {
			lp.lpconsumer();
		}
		if (chattype == 'Public') {
			lp.lpenterprise();
		}
		if (chattype == 'Wireless') {
			lp.lpsmbwireless();
		}
		if (chattype == 'Wireline') {
			lp.lpsmbwireline();
		}
		if (chattype == 'VBM' && !pagepath.match("/business/gateway/") && !pagepath.match("/test/chat-with-us/") && !pagepath.match("/products/test-chat/new-smb-wireline/") && !pagepath.match("/business/terms/") && !pagepath.match("^/business/publications/")) {
			lp.lpvbm();
		}

	}
    }
  vzCake.init.push(lp.init);
};
    


// ==================================================
// fancyBox v3.5.7
//
// Licensed GPLv3 for open source use
// or fancyBox Commercial License for commercial use
//
// http://fancyapps.com/fancybox/
// Copyright 2019 fancyApps
//
// ==================================================
!function(t,e,n,o){"use strict";function i(t,e){var o,i,a,s=[],r=0;t&&t.isDefaultPrevented()||(t.preventDefault(),e=e||{},t&&t.data&&(e=h(t.data.options,e)),o=e.$target||n(t.currentTarget).trigger("blur"),(a=n.fancybox.getInstance())&&a.$trigger&&a.$trigger.is(o)||(e.selector?s=n(e.selector):(i=o.attr("data-fancybox")||"",i?(s=t.data?t.data.items:[],s=s.length?s.filter('[data-fancybox="'+i+'"]'):n('[data-fancybox="'+i+'"]')):s=[o]),r=n(s).index(o),r<0&&(r=0),a=n.fancybox.open(s,e,r),a.$trigger=o))}if(t.console=t.console||{info:function(t){}},n){if(n.fn.fancybox)return void console.info("fancyBox already initialized");var a={closeExisting:!1,loop:!1,gutter:50,keyboard:!0,preventCaptionOverlap:!0,arrows:!0,infobar:!0,smallBtn:"auto",toolbar:"auto",buttons:["zoom","slideShow","thumbs","close"],idleTime:3,protect:!1,modal:!1,image:{preload:!1},ajax:{settings:{data:{fancybox:!0}}},iframe:{tpl:'<iframe id="fancybox-frame{rnd}" name="fancybox-frame{rnd}" class="fancybox-iframe" allowfullscreen="allowfullscreen" allow="autoplay; fullscreen" src=""></iframe>',preload:!0,css:{},attr:{scrolling:"auto"}},video:{tpl:'<video class="fancybox-video" controls controlsList="nodownload" poster="{{poster}}"><source src="{{src}}" type="{{format}}" />Sorry, your browser doesn\'t support embedded videos, <a href="{{src}}">download</a> and watch with your favorite video player!</video>',format:"",autoStart:!0},defaultType:"image",animationEffect:"zoom",animationDuration:366,zoomOpacity:"auto",transitionEffect:"fade",transitionDuration:366,slideClass:"",baseClass:"",baseTpl:'<div class="fancybox-container" role="dialog" tabindex="-1"><div class="fancybox-bg"></div><div class="fancybox-inner"><div class="fancybox-infobar"><span data-fancybox-index></span>&nbsp;/&nbsp;<span data-fancybox-count></span></div><div class="fancybox-toolbar">{{buttons}}</div><div class="fancybox-navigation">{{arrows}}</div><div class="fancybox-stage"></div><div class="fancybox-caption"><div class="fancybox-caption__body"></div></div></div></div>',spinnerTpl:'<div class="fancybox-loading"></div>',errorTpl:'<div class="fancybox-error"><p>{{ERROR}}</p></div>',btnTpl:{download:'<a download data-fancybox-download class="fancybox-button fancybox-button--download" title="{{DOWNLOAD}}" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.62 17.09V19H5.38v-1.91zm-2.97-6.96L17 11.45l-5 4.87-5-4.87 1.36-1.32 2.68 2.64V5h1.92v7.77z"/></svg></a>',zoom:'<button data-fancybox-zoom class="fancybox-button fancybox-button--zoom" title="{{ZOOM}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.7 17.3l-3-3a5.9 5.9 0 0 0-.6-7.6 5.9 5.9 0 0 0-8.4 0 5.9 5.9 0 0 0 0 8.4 5.9 5.9 0 0 0 7.7.7l3 3a1 1 0 0 0 1.3 0c.4-.5.4-1 0-1.5zM8.1 13.8a4 4 0 0 1 0-5.7 4 4 0 0 1 5.7 0 4 4 0 0 1 0 5.7 4 4 0 0 1-5.7 0z"/></svg></button>',close:'<button data-fancybox-close class="fancybox-button fancybox-button--close" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 10.6L6.6 5.2 5.2 6.6l5.4 5.4-5.4 5.4 1.4 1.4 5.4-5.4 5.4 5.4 1.4-1.4-5.4-5.4 5.4-5.4-1.4-1.4-5.4 5.4z"/></svg></button>',arrowLeft:'<button data-fancybox-prev class="fancybox-button fancybox-button--arrow_left" title="{{PREV}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.28 15.7l-1.34 1.37L5 12l4.94-5.07 1.34 1.38-2.68 2.72H19v1.94H8.6z"/></svg></div></button>',arrowRight:'<button data-fancybox-next class="fancybox-button fancybox-button--arrow_right" title="{{NEXT}}"><div><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15.4 12.97l-2.68 2.72 1.34 1.38L19 12l-4.94-5.07-1.34 1.38 2.68 2.72H5v1.94z"/></svg></div></button>',smallBtn:'<button type="button" data-fancybox-close class="fancybox-button fancybox-close-small" title="{{CLOSE}}"><svg xmlns="http://www.w3.org/2000/svg" version="1" viewBox="0 0 24 24"><path d="M13 12l5-5-1-1-5 5-5-5-1 1 5 5-5 5 1 1 5-5 5 5 1-1z"/></svg></button>'},parentEl:"body",hideScrollbar:!0,autoFocus:!0,backFocus:!0,trapFocus:!0,fullScreen:{autoStart:!1},touch:{vertical:!0,momentum:!0},hash:null,media:{},slideShow:{autoStart:!1,speed:3e3},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"},wheel:"auto",onInit:n.noop,beforeLoad:n.noop,afterLoad:n.noop,beforeShow:n.noop,afterShow:n.noop,beforeClose:n.noop,afterClose:n.noop,onActivate:n.noop,onDeactivate:n.noop,clickContent:function(t,e){return"image"===t.type&&"zoom"},clickSlide:"close",clickOutside:"close",dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1,mobile:{preventCaptionOverlap:!1,idleTime:!1,clickContent:function(t,e){return"image"===t.type&&"toggleControls"},clickSlide:function(t,e){return"image"===t.type?"toggleControls":"close"},dblclickContent:function(t,e){return"image"===t.type&&"zoom"},dblclickSlide:function(t,e){return"image"===t.type&&"zoom"}},lang:"en",i18n:{en:{CLOSE:"Close",NEXT:"Next",PREV:"Previous",ERROR:"The requested content cannot be loaded. <br/> Please try again later.",PLAY_START:"Start slideshow",PLAY_STOP:"Pause slideshow",FULL_SCREEN:"Full screen",THUMBS:"Thumbnails",DOWNLOAD:"Download",SHARE:"Share",ZOOM:"Zoom"},de:{CLOSE:"Schlie&szlig;en",NEXT:"Weiter",PREV:"Zur&uuml;ck",ERROR:"Die angeforderten Daten konnten nicht geladen werden. <br/> Bitte versuchen Sie es sp&auml;ter nochmal.",PLAY_START:"Diaschau starten",PLAY_STOP:"Diaschau beenden",FULL_SCREEN:"Vollbild",THUMBS:"Vorschaubilder",DOWNLOAD:"Herunterladen",SHARE:"Teilen",ZOOM:"Vergr&ouml;&szlig;ern"}}},s=n(t),r=n(e),c=0,l=function(t){return t&&t.hasOwnProperty&&t instanceof n},d=function(){return t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.oRequestAnimationFrame||function(e){return t.setTimeout(e,1e3/60)}}(),u=function(){return t.cancelAnimationFrame||t.webkitCancelAnimationFrame||t.mozCancelAnimationFrame||t.oCancelAnimationFrame||function(e){t.clearTimeout(e)}}(),f=function(){var t,n=e.createElement("fakeelement"),o={transition:"transitionend",OTransition:"oTransitionEnd",MozTransition:"transitionend",WebkitTransition:"webkitTransitionEnd"};for(t in o)if(void 0!==n.style[t])return o[t];return"transitionend"}(),p=function(t){return t&&t.length&&t[0].offsetHeight},h=function(t,e){var o=n.extend(!0,{},t,e);return n.each(e,function(t,e){n.isArray(e)&&(o[t]=e)}),o},g=function(t){var o,i;return!(!t||t.ownerDocument!==e)&&(n(".fancybox-container").css("pointer-events","none"),o={x:t.getBoundingClientRect().left+t.offsetWidth/2,y:t.getBoundingClientRect().top+t.offsetHeight/2},i=e.elementFromPoint(o.x,o.y)===t,n(".fancybox-container").css("pointer-events",""),i)},b=function(t,e,o){var i=this;i.opts=h({index:o},n.fancybox.defaults),n.isPlainObject(e)&&(i.opts=h(i.opts,e)),n.fancybox.isMobile&&(i.opts=h(i.opts,i.opts.mobile)),i.id=i.opts.id||++c,i.currIndex=parseInt(i.opts.index,10)||0,i.prevIndex=null,i.prevPos=null,i.currPos=0,i.firstRun=!0,i.group=[],i.slides={},i.addContent(t),i.group.length&&i.init()};n.extend(b.prototype,{init:function(){var o,i,a=this,s=a.group[a.currIndex],r=s.opts;r.closeExisting&&n.fancybox.close(!0),n("body").addClass("fancybox-active"),!n.fancybox.getInstance()&&!1!==r.hideScrollbar&&!n.fancybox.isMobile&&e.body.scrollHeight>t.innerHeight&&(n("head").append('<style id="fancybox-style-noscroll" type="text/css">.compensate-for-scrollbar{margin-right:'+(t.innerWidth-e.documentElement.clientWidth)+"px;}</style>"),n("body").addClass("compensate-for-scrollbar")),i="",n.each(r.buttons,function(t,e){i+=r.btnTpl[e]||""}),o=n(a.translate(a,r.baseTpl.replace("{{buttons}}",i).replace("{{arrows}}",r.btnTpl.arrowLeft+r.btnTpl.arrowRight))).attr("id","fancybox-container-"+a.id).addClass(r.baseClass).data("FancyBox",a).appendTo(r.parentEl),a.$refs={container:o},["bg","inner","infobar","toolbar","stage","caption","navigation"].forEach(function(t){a.$refs[t]=o.find(".fancybox-"+t)}),a.trigger("onInit"),a.activate(),a.jumpTo(a.currIndex)},translate:function(t,e){var n=t.opts.i18n[t.opts.lang]||t.opts.i18n.en;return e.replace(/\{\{(\w+)\}\}/g,function(t,e){return void 0===n[e]?t:n[e]})},addContent:function(t){var e,o=this,i=n.makeArray(t);n.each(i,function(t,e){var i,a,s,r,c,l={},d={};n.isPlainObject(e)?(l=e,d=e.opts||e):"object"===n.type(e)&&n(e).length?(i=n(e),d=i.data()||{},d=n.extend(!0,{},d,d.options),d.$orig=i,l.src=o.opts.src||d.src||i.attr("href"),l.type||l.src||(l.type="inline",l.src=e)):l={type:"html",src:e+""},l.opts=n.extend(!0,{},o.opts,d),n.isArray(d.buttons)&&(l.opts.buttons=d.buttons),n.fancybox.isMobile&&l.opts.mobile&&(l.opts=h(l.opts,l.opts.mobile)),a=l.type||l.opts.type,r=l.src||"",!a&&r&&((s=r.match(/\.(mp4|mov|ogv|webm)((\?|#).*)?$/i))?(a="video",l.opts.video.format||(l.opts.video.format="video/"+("ogv"===s[1]?"ogg":s[1]))):r.match(/(^data:image\/[a-z0-9+\/=]*,)|(\.(jp(e|g|eg)|gif|png|bmp|webp|svg|ico)((\?|#).*)?$)/i)?a="image":r.match(/\.(pdf)((\?|#).*)?$/i)?(a="iframe",l=n.extend(!0,l,{contentType:"pdf",opts:{iframe:{preload:!1}}})):"#"===r.charAt(0)&&(a="inline")),a?l.type=a:o.trigger("objectNeedsType",l),l.contentType||(l.contentType=n.inArray(l.type,["html","inline","ajax"])>-1?"html":l.type),l.index=o.group.length,"auto"==l.opts.smallBtn&&(l.opts.smallBtn=n.inArray(l.type,["html","inline","ajax"])>-1),"auto"===l.opts.toolbar&&(l.opts.toolbar=!l.opts.smallBtn),l.$thumb=l.opts.$thumb||null,l.opts.$trigger&&l.index===o.opts.index&&(l.$thumb=l.opts.$trigger.find("img:first"),l.$thumb.length&&(l.opts.$orig=l.opts.$trigger)),l.$thumb&&l.$thumb.length||!l.opts.$orig||(l.$thumb=l.opts.$orig.find("img:first")),l.$thumb&&!l.$thumb.length&&(l.$thumb=null),l.thumb=l.opts.thumb||(l.$thumb?l.$thumb[0].src:null),"function"===n.type(l.opts.caption)&&(l.opts.caption=l.opts.caption.apply(e,[o,l])),"function"===n.type(o.opts.caption)&&(l.opts.caption=o.opts.caption.apply(e,[o,l])),l.opts.caption instanceof n||(l.opts.caption=void 0===l.opts.caption?"":l.opts.caption+""),"ajax"===l.type&&(c=r.split(/\s+/,2),c.length>1&&(l.src=c.shift(),l.opts.filter=c.shift())),l.opts.modal&&(l.opts=n.extend(!0,l.opts,{trapFocus:!0,infobar:0,toolbar:0,smallBtn:0,keyboard:0,slideShow:0,fullScreen:0,thumbs:0,touch:0,clickContent:!1,clickSlide:!1,clickOutside:!1,dblclickContent:!1,dblclickSlide:!1,dblclickOutside:!1})),o.group.push(l)}),Object.keys(o.slides).length&&(o.updateControls(),(e=o.Thumbs)&&e.isActive&&(e.create(),e.focus()))},addEvents:function(){var e=this;e.removeEvents(),e.$refs.container.on("click.fb-close","[data-fancybox-close]",function(t){t.stopPropagation(),t.preventDefault(),e.close(t)}).on("touchstart.fb-prev click.fb-prev","[data-fancybox-prev]",function(t){t.stopPropagation(),t.preventDefault(),e.previous()}).on("touchstart.fb-next click.fb-next","[data-fancybox-next]",function(t){t.stopPropagation(),t.preventDefault(),e.next()}).on("click.fb","[data-fancybox-zoom]",function(t){e[e.isScaledDown()?"scaleToActual":"scaleToFit"]()}),s.on("orientationchange.fb resize.fb",function(t){t&&t.originalEvent&&"resize"===t.originalEvent.type?(e.requestId&&u(e.requestId),e.requestId=d(function(){e.update(t)})):(e.current&&"iframe"===e.current.type&&e.$refs.stage.hide(),setTimeout(function(){e.$refs.stage.show(),e.update(t)},n.fancybox.isMobile?600:250))}),r.on("keydown.fb",function(t){var o=n.fancybox?n.fancybox.getInstance():null,i=o.current,a=t.keyCode||t.which;if(9==a)return void(i.opts.trapFocus&&e.focus(t));if(!(!i.opts.keyboard||t.ctrlKey||t.altKey||t.shiftKey||n(t.target).is("input,textarea,video,audio,select")))return 8===a||27===a?(t.preventDefault(),void e.close(t)):37===a||38===a?(t.preventDefault(),void e.previous()):39===a||40===a?(t.preventDefault(),void e.next()):void e.trigger("afterKeydown",t,a)}),e.group[e.currIndex].opts.idleTime&&(e.idleSecondsCounter=0,r.on("mousemove.fb-idle mouseleave.fb-idle mousedown.fb-idle touchstart.fb-idle touchmove.fb-idle scroll.fb-idle keydown.fb-idle",function(t){e.idleSecondsCounter=0,e.isIdle&&e.showControls(),e.isIdle=!1}),e.idleInterval=t.setInterval(function(){++e.idleSecondsCounter>=e.group[e.currIndex].opts.idleTime&&!e.isDragging&&(e.isIdle=!0,e.idleSecondsCounter=0,e.hideControls())},1e3))},removeEvents:function(){var e=this;s.off("orientationchange.fb resize.fb"),r.off("keydown.fb .fb-idle"),this.$refs.container.off(".fb-close .fb-prev .fb-next"),e.idleInterval&&(t.clearInterval(e.idleInterval),e.idleInterval=null)},previous:function(t){return this.jumpTo(this.currPos-1,t)},next:function(t){return this.jumpTo(this.currPos+1,t)},jumpTo:function(t,e){var o,i,a,s,r,c,l,d,u,f=this,h=f.group.length;if(!(f.isDragging||f.isClosing||f.isAnimating&&f.firstRun)){if(t=parseInt(t,10),!(a=f.current?f.current.opts.loop:f.opts.loop)&&(t<0||t>=h))return!1;if(o=f.firstRun=!Object.keys(f.slides).length,r=f.current,f.prevIndex=f.currIndex,f.prevPos=f.currPos,s=f.createSlide(t),h>1&&((a||s.index<h-1)&&f.createSlide(t+1),(a||s.index>0)&&f.createSlide(t-1)),f.current=s,f.currIndex=s.index,f.currPos=s.pos,f.trigger("beforeShow",o),f.updateControls(),s.forcedDuration=void 0,n.isNumeric(e)?s.forcedDuration=e:e=s.opts[o?"animationDuration":"transitionDuration"],e=parseInt(e,10),i=f.isMoved(s),s.$slide.addClass("fancybox-slide--current"),o)return s.opts.animationEffect&&e&&f.$refs.container.css("transition-duration",e+"ms"),f.$refs.container.addClass("fancybox-is-open").trigger("focus"),f.loadSlide(s),void f.preload("image");c=n.fancybox.getTranslate(r.$slide),l=n.fancybox.getTranslate(f.$refs.stage),n.each(f.slides,function(t,e){n.fancybox.stop(e.$slide,!0)}),r.pos!==s.pos&&(r.isComplete=!1),r.$slide.removeClass("fancybox-slide--complete fancybox-slide--current"),i?(u=c.left-(r.pos*c.width+r.pos*r.opts.gutter),n.each(f.slides,function(t,o){o.$slide.removeClass("fancybox-animated").removeClass(function(t,e){return(e.match(/(^|\s)fancybox-fx-\S+/g)||[]).join(" ")});var i=o.pos*c.width+o.pos*o.opts.gutter;n.fancybox.setTranslate(o.$slide,{top:0,left:i-l.left+u}),o.pos!==s.pos&&o.$slide.addClass("fancybox-slide--"+(o.pos>s.pos?"next":"previous")),p(o.$slide),n.fancybox.animate(o.$slide,{top:0,left:(o.pos-s.pos)*c.width+(o.pos-s.pos)*o.opts.gutter},e,function(){o.$slide.css({transform:"",opacity:""}).removeClass("fancybox-slide--next fancybox-slide--previous"),o.pos===f.currPos&&f.complete()})})):e&&s.opts.transitionEffect&&(d="fancybox-animated fancybox-fx-"+s.opts.transitionEffect,r.$slide.addClass("fancybox-slide--"+(r.pos>s.pos?"next":"previous")),n.fancybox.animate(r.$slide,d,e,function(){r.$slide.removeClass(d).removeClass("fancybox-slide--next fancybox-slide--previous")},!1)),s.isLoaded?f.revealContent(s):f.loadSlide(s),f.preload("image")}},createSlide:function(t){var e,o,i=this;return o=t%i.group.length,o=o<0?i.group.length+o:o,!i.slides[t]&&i.group[o]&&(e=n('<div class="fancybox-slide"></div>').appendTo(i.$refs.stage),i.slides[t]=n.extend(!0,{},i.group[o],{pos:t,$slide:e,isLoaded:!1}),i.updateSlide(i.slides[t])),i.slides[t]},scaleToActual:function(t,e,o){var i,a,s,r,c,l=this,d=l.current,u=d.$content,f=n.fancybox.getTranslate(d.$slide).width,p=n.fancybox.getTranslate(d.$slide).height,h=d.width,g=d.height;l.isAnimating||l.isMoved()||!u||"image"!=d.type||!d.isLoaded||d.hasError||(l.isAnimating=!0,n.fancybox.stop(u),t=void 0===t?.5*f:t,e=void 0===e?.5*p:e,i=n.fancybox.getTranslate(u),i.top-=n.fancybox.getTranslate(d.$slide).top,i.left-=n.fancybox.getTranslate(d.$slide).left,r=h/i.width,c=g/i.height,a=.5*f-.5*h,s=.5*p-.5*g,h>f&&(a=i.left*r-(t*r-t),a>0&&(a=0),a<f-h&&(a=f-h)),g>p&&(s=i.top*c-(e*c-e),s>0&&(s=0),s<p-g&&(s=p-g)),l.updateCursor(h,g),n.fancybox.animate(u,{top:s,left:a,scaleX:r,scaleY:c},o||366,function(){l.isAnimating=!1}),l.SlideShow&&l.SlideShow.isActive&&l.SlideShow.stop())},scaleToFit:function(t){var e,o=this,i=o.current,a=i.$content;o.isAnimating||o.isMoved()||!a||"image"!=i.type||!i.isLoaded||i.hasError||(o.isAnimating=!0,n.fancybox.stop(a),e=o.getFitPos(i),o.updateCursor(e.width,e.height),n.fancybox.animate(a,{top:e.top,left:e.left,scaleX:e.width/a.width(),scaleY:e.height/a.height()},t||366,function(){o.isAnimating=!1}))},getFitPos:function(t){var e,o,i,a,s=this,r=t.$content,c=t.$slide,l=t.width||t.opts.width,d=t.height||t.opts.height,u={};return!!(t.isLoaded&&r&&r.length)&&(e=n.fancybox.getTranslate(s.$refs.stage).width,o=n.fancybox.getTranslate(s.$refs.stage).height,e-=parseFloat(c.css("paddingLeft"))+parseFloat(c.css("paddingRight"))+parseFloat(r.css("marginLeft"))+parseFloat(r.css("marginRight")),o-=parseFloat(c.css("paddingTop"))+parseFloat(c.css("paddingBottom"))+parseFloat(r.css("marginTop"))+parseFloat(r.css("marginBottom")),l&&d||(l=e,d=o),i=Math.min(1,e/l,o/d),l*=i,d*=i,l>e-.5&&(l=e),d>o-.5&&(d=o),"image"===t.type?(u.top=Math.floor(.5*(o-d))+parseFloat(c.css("paddingTop")),u.left=Math.floor(.5*(e-l))+parseFloat(c.css("paddingLeft"))):"video"===t.contentType&&(a=t.opts.width&&t.opts.height?l/d:t.opts.ratio||16/9,d>l/a?d=l/a:l>d*a&&(l=d*a)),u.width=l,u.height=d,u)},update:function(t){var e=this;n.each(e.slides,function(n,o){e.updateSlide(o,t)})},updateSlide:function(t,e){var o=this,i=t&&t.$content,a=t.width||t.opts.width,s=t.height||t.opts.height,r=t.$slide;o.adjustCaption(t),i&&(a||s||"video"===t.contentType)&&!t.hasError&&(n.fancybox.stop(i),n.fancybox.setTranslate(i,o.getFitPos(t)),t.pos===o.currPos&&(o.isAnimating=!1,o.updateCursor())),o.adjustLayout(t),r.length&&(r.trigger("refresh"),t.pos===o.currPos&&o.$refs.toolbar.add(o.$refs.navigation.find(".fancybox-button--arrow_right")).toggleClass("compensate-for-scrollbar",r.get(0).scrollHeight>r.get(0).clientHeight)),o.trigger("onUpdate",t,e)},centerSlide:function(t){var e=this,o=e.current,i=o.$slide;!e.isClosing&&o&&(i.siblings().css({transform:"",opacity:""}),i.parent().children().removeClass("fancybox-slide--previous fancybox-slide--next"),n.fancybox.animate(i,{top:0,left:0,opacity:1},void 0===t?0:t,function(){i.css({transform:"",opacity:""}),o.isComplete||e.complete()},!1))},isMoved:function(t){var e,o,i=t||this.current;return!!i&&(o=n.fancybox.getTranslate(this.$refs.stage),e=n.fancybox.getTranslate(i.$slide),!i.$slide.hasClass("fancybox-animated")&&(Math.abs(e.top-o.top)>.5||Math.abs(e.left-o.left)>.5))},updateCursor:function(t,e){var o,i,a=this,s=a.current,r=a.$refs.container;s&&!a.isClosing&&a.Guestures&&(r.removeClass("fancybox-is-zoomable fancybox-can-zoomIn fancybox-can-zoomOut fancybox-can-swipe fancybox-can-pan"),o=a.canPan(t,e),i=!!o||a.isZoomable(),r.toggleClass("fancybox-is-zoomable",i),n("[data-fancybox-zoom]").prop("disabled",!i),o?r.addClass("fancybox-can-pan"):i&&("zoom"===s.opts.clickContent||n.isFunction(s.opts.clickContent)&&"zoom"==s.opts.clickContent(s))?r.addClass("fancybox-can-zoomIn"):s.opts.touch&&(s.opts.touch.vertical||a.group.length>1)&&"video"!==s.contentType&&r.addClass("fancybox-can-swipe"))},isZoomable:function(){var t,e=this,n=e.current;if(n&&!e.isClosing&&"image"===n.type&&!n.hasError){if(!n.isLoaded)return!0;if((t=e.getFitPos(n))&&(n.width>t.width||n.height>t.height))return!0}return!1},isScaledDown:function(t,e){var o=this,i=!1,a=o.current,s=a.$content;return void 0!==t&&void 0!==e?i=t<a.width&&e<a.height:s&&(i=n.fancybox.getTranslate(s),i=i.width<a.width&&i.height<a.height),i},canPan:function(t,e){var o=this,i=o.current,a=null,s=!1;return"image"===i.type&&(i.isComplete||t&&e)&&!i.hasError&&(s=o.getFitPos(i),void 0!==t&&void 0!==e?a={width:t,height:e}:i.isComplete&&(a=n.fancybox.getTranslate(i.$content)),a&&s&&(s=Math.abs(a.width-s.width)>1.5||Math.abs(a.height-s.height)>1.5)),s},loadSlide:function(t){var e,o,i,a=this;if(!t.isLoading&&!t.isLoaded){if(t.isLoading=!0,!1===a.trigger("beforeLoad",t))return t.isLoading=!1,!1;switch(e=t.type,o=t.$slide,o.off("refresh").trigger("onReset").addClass(t.opts.slideClass),e){case"image":a.setImage(t);break;case"iframe":a.setIframe(t);break;case"html":a.setContent(t,t.src||t.content);break;case"video":a.setContent(t,t.opts.video.tpl.replace(/\{\{src\}\}/gi,t.src).replace("{{format}}",t.opts.videoFormat||t.opts.video.format||"").replace("{{poster}}",t.thumb||""));break;case"inline":n(t.src).length?a.setContent(t,n(t.src)):a.setError(t);break;case"ajax":a.showLoading(t),i=n.ajax(n.extend({},t.opts.ajax.settings,{url:t.src,success:function(e,n){"success"===n&&a.setContent(t,e)},error:function(e,n){e&&"abort"!==n&&a.setError(t)}})),o.one("onReset",function(){i.abort()});break;default:a.setError(t)}return!0}},setImage:function(t){var o,i=this;setTimeout(function(){var e=t.$image;i.isClosing||!t.isLoading||e&&e.length&&e[0].complete||t.hasError||i.showLoading(t)},50),i.checkSrcset(t),t.$content=n('<div class="fancybox-content"></div>').addClass("fancybox-is-hidden").appendTo(t.$slide.addClass("fancybox-slide--image")),!1!==t.opts.preload&&t.opts.width&&t.opts.height&&t.thumb&&(t.width=t.opts.width,t.height=t.opts.height,o=e.createElement("img"),o.onerror=function(){n(this).remove(),t.$ghost=null},o.onload=function(){i.afterLoad(t)},t.$ghost=n(o).addClass("fancybox-image").appendTo(t.$content).attr("src",t.thumb)),i.setBigImage(t)},checkSrcset:function(e){var n,o,i,a,s=e.opts.srcset||e.opts.image.srcset;if(s){i=t.devicePixelRatio||1,a=t.innerWidth*i,o=s.split(",").map(function(t){var e={};return t.trim().split(/\s+/).forEach(function(t,n){var o=parseInt(t.substring(0,t.length-1),10);if(0===n)return e.url=t;o&&(e.value=o,e.postfix=t[t.length-1])}),e}),o.sort(function(t,e){return t.value-e.value});for(var r=0;r<o.length;r++){var c=o[r];if("w"===c.postfix&&c.value>=a||"x"===c.postfix&&c.value>=i){n=c;break}}!n&&o.length&&(n=o[o.length-1]),n&&(e.src=n.url,e.width&&e.height&&"w"==n.postfix&&(e.height=e.width/e.height*n.value,e.width=n.value),e.opts.srcset=s)}},setBigImage:function(t){var o=this,i=e.createElement("img"),a=n(i);t.$image=a.one("error",function(){o.setError(t)}).one("load",function(){var e;t.$ghost||(o.resolveImageSlideSize(t,this.naturalWidth,this.naturalHeight),o.afterLoad(t)),o.isClosing||(t.opts.srcset&&(e=t.opts.sizes,e&&"auto"!==e||(e=(t.width/t.height>1&&s.width()/s.height()>1?"100":Math.round(t.width/t.height*100))+"vw"),a.attr("sizes",e).attr("srcset",t.opts.srcset)),t.$ghost&&setTimeout(function(){t.$ghost&&!o.isClosing&&t.$ghost.hide()},Math.min(300,Math.max(1e3,t.height/1600))),o.hideLoading(t))}).addClass("fancybox-image").attr("src",t.src).appendTo(t.$content),(i.complete||"complete"==i.readyState)&&a.naturalWidth&&a.naturalHeight?a.trigger("load"):i.error&&a.trigger("error")},resolveImageSlideSize:function(t,e,n){var o=parseInt(t.opts.width,10),i=parseInt(t.opts.height,10);t.width=e,t.height=n,o>0&&(t.width=o,t.height=Math.floor(o*n/e)),i>0&&(t.width=Math.floor(i*e/n),t.height=i)},setIframe:function(t){var e,o=this,i=t.opts.iframe,a=t.$slide;t.$content=n('<div class="fancybox-content'+(i.preload?" fancybox-is-hidden":"")+'"></div>').css(i.css).appendTo(a),a.addClass("fancybox-slide--"+t.contentType),t.$iframe=e=n(i.tpl.replace(/\{rnd\}/g,(new Date).getTime())).attr(i.attr).appendTo(t.$content),i.preload?(o.showLoading(t),e.on("load.fb error.fb",function(e){this.isReady=1,t.$slide.trigger("refresh"),o.afterLoad(t)}),a.on("refresh.fb",function(){var n,o,s=t.$content,r=i.css.width,c=i.css.height;if(1===e[0].isReady){try{n=e.contents(),o=n.find("body")}catch(t){}o&&o.length&&o.children().length&&(a.css("overflow","visible"),s.css({width:"100%","max-width":"100%",height:"9999px"}),void 0===r&&(r=Math.ceil(Math.max(o[0].clientWidth,o.outerWidth(!0)))),s.css("width",r||"").css("max-width",""),void 0===c&&(c=Math.ceil(Math.max(o[0].clientHeight,o.outerHeight(!0)))),s.css("height",c||""),a.css("overflow","auto")),s.removeClass("fancybox-is-hidden")}})):o.afterLoad(t),e.attr("src",t.src),a.one("onReset",function(){try{n(this).find("iframe").hide().unbind().attr("src","//about:blank")}catch(t){}n(this).off("refresh.fb").empty(),t.isLoaded=!1,t.isRevealed=!1})},setContent:function(t,e){var o=this;o.isClosing||(o.hideLoading(t),t.$content&&n.fancybox.stop(t.$content),t.$slide.empty(),l(e)&&e.parent().length?((e.hasClass("fancybox-content")||e.parent().hasClass("fancybox-content"))&&e.parents(".fancybox-slide").trigger("onReset"),t.$placeholder=n("<div>").hide().insertAfter(e),e.css("display","inline-block")):t.hasError||("string"===n.type(e)&&(e=n("<div>").append(n.trim(e)).contents()),t.opts.filter&&(e=n("<div>").html(e).find(t.opts.filter))),t.$slide.one("onReset",function(){n(this).find("video,audio").trigger("pause"),t.$placeholder&&(t.$placeholder.after(e.removeClass("fancybox-content").hide()).remove(),t.$placeholder=null),t.$smallBtn&&(t.$smallBtn.remove(),t.$smallBtn=null),t.hasError||(n(this).empty(),t.isLoaded=!1,t.isRevealed=!1)}),n(e).appendTo(t.$slide),n(e).is("video,audio")&&(n(e).addClass("fancybox-video"),n(e).wrap("<div></div>"),t.contentType="video",t.opts.width=t.opts.width||n(e).attr("width"),t.opts.height=t.opts.height||n(e).attr("height")),t.$content=t.$slide.children().filter("div,form,main,video,audio,article,.fancybox-content").first(),t.$content.siblings().hide(),t.$content.length||(t.$content=t.$slide.wrapInner("<div></div>").children().first()),t.$content.addClass("fancybox-content"),t.$slide.addClass("fancybox-slide--"+t.contentType),o.afterLoad(t))},setError:function(t){t.hasError=!0,t.$slide.trigger("onReset").removeClass("fancybox-slide--"+t.contentType).addClass("fancybox-slide--error"),t.contentType="html",this.setContent(t,this.translate(t,t.opts.errorTpl)),t.pos===this.currPos&&(this.isAnimating=!1)},showLoading:function(t){var e=this;(t=t||e.current)&&!t.$spinner&&(t.$spinner=n(e.translate(e,e.opts.spinnerTpl)).appendTo(t.$slide).hide().fadeIn("fast"))},hideLoading:function(t){var e=this;(t=t||e.current)&&t.$spinner&&(t.$spinner.stop().remove(),delete t.$spinner)},afterLoad:function(t){var e=this;e.isClosing||(t.isLoading=!1,t.isLoaded=!0,e.trigger("afterLoad",t),e.hideLoading(t),!t.opts.smallBtn||t.$smallBtn&&t.$smallBtn.length||(t.$smallBtn=n(e.translate(t,t.opts.btnTpl.smallBtn)).appendTo(t.$content)),t.opts.protect&&t.$content&&!t.hasError&&(t.$content.on("contextmenu.fb",function(t){return 2==t.button&&t.preventDefault(),!0}),"image"===t.type&&n('<div class="fancybox-spaceball"></div>').appendTo(t.$content)),e.adjustCaption(t),e.adjustLayout(t),t.pos===e.currPos&&e.updateCursor(),e.revealContent(t))},adjustCaption:function(t){var e,n=this,o=t||n.current,i=o.opts.caption,a=o.opts.preventCaptionOverlap,s=n.$refs.caption,r=!1;s.toggleClass("fancybox-caption--separate",a),a&&i&&i.length&&(o.pos!==n.currPos?(e=s.clone().appendTo(s.parent()),e.children().eq(0).empty().html(i),r=e.outerHeight(!0),e.empty().remove()):n.$caption&&(r=n.$caption.outerHeight(!0)),o.$slide.css("padding-bottom",r||""))},adjustLayout:function(t){var e,n,o,i,a=this,s=t||a.current;s.isLoaded&&!0!==s.opts.disableLayoutFix&&(s.$content.css("margin-bottom",""),s.$content.outerHeight()>s.$slide.height()+.5&&(o=s.$slide[0].style["padding-bottom"],i=s.$slide.css("padding-bottom"),parseFloat(i)>0&&(e=s.$slide[0].scrollHeight,s.$slide.css("padding-bottom",0),Math.abs(e-s.$slide[0].scrollHeight)<1&&(n=i),s.$slide.css("padding-bottom",o))),s.$content.css("margin-bottom",n))},revealContent:function(t){var e,o,i,a,s=this,r=t.$slide,c=!1,l=!1,d=s.isMoved(t),u=t.isRevealed;return t.isRevealed=!0,e=t.opts[s.firstRun?"animationEffect":"transitionEffect"],i=t.opts[s.firstRun?"animationDuration":"transitionDuration"],i=parseInt(void 0===t.forcedDuration?i:t.forcedDuration,10),!d&&t.pos===s.currPos&&i||(e=!1),"zoom"===e&&(t.pos===s.currPos&&i&&"image"===t.type&&!t.hasError&&(l=s.getThumbPos(t))?c=s.getFitPos(t):e="fade"),"zoom"===e?(s.isAnimating=!0,c.scaleX=c.width/l.width,c.scaleY=c.height/l.height,a=t.opts.zoomOpacity,"auto"==a&&(a=Math.abs(t.width/t.height-l.width/l.height)>.1),a&&(l.opacity=.1,c.opacity=1),n.fancybox.setTranslate(t.$content.removeClass("fancybox-is-hidden"),l),p(t.$content),void n.fancybox.animate(t.$content,c,i,function(){s.isAnimating=!1,s.complete()})):(s.updateSlide(t),e?(n.fancybox.stop(r),o="fancybox-slide--"+(t.pos>=s.prevPos?"next":"previous")+" fancybox-animated fancybox-fx-"+e,r.addClass(o).removeClass("fancybox-slide--current"),t.$content.removeClass("fancybox-is-hidden"),p(r),"image"!==t.type&&t.$content.hide().show(0),void n.fancybox.animate(r,"fancybox-slide--current",i,function(){r.removeClass(o).css({transform:"",opacity:""}),t.pos===s.currPos&&s.complete()},!0)):(t.$content.removeClass("fancybox-is-hidden"),u||!d||"image"!==t.type||t.hasError||t.$content.hide().fadeIn("fast"),void(t.pos===s.currPos&&s.complete())))},getThumbPos:function(t){var e,o,i,a,s,r=!1,c=t.$thumb;return!(!c||!g(c[0]))&&(e=n.fancybox.getTranslate(c),o=parseFloat(c.css("border-top-width")||0),i=parseFloat(c.css("border-right-width")||0),a=parseFloat(c.css("border-bottom-width")||0),s=parseFloat(c.css("border-left-width")||0),r={top:e.top+o,left:e.left+s,width:e.width-i-s,height:e.height-o-a,scaleX:1,scaleY:1},e.width>0&&e.height>0&&r)},complete:function(){var t,e=this,o=e.current,i={};!e.isMoved()&&o.isLoaded&&(o.isComplete||(o.isComplete=!0,o.$slide.siblings().trigger("onReset"),e.preload("inline"),p(o.$slide),o.$slide.addClass("fancybox-slide--complete"),n.each(e.slides,function(t,o){o.pos>=e.currPos-1&&o.pos<=e.currPos+1?i[o.pos]=o:o&&(n.fancybox.stop(o.$slide),o.$slide.off().remove())}),e.slides=i),e.isAnimating=!1,e.updateCursor(),e.trigger("afterShow"),o.opts.video.autoStart&&o.$slide.find("video,audio").filter(":visible:first").trigger("play").one("ended",function(){Document.exitFullscreen?Document.exitFullscreen():this.webkitExitFullscreen&&this.webkitExitFullscreen(),e.next()}),o.opts.autoFocus&&"html"===o.contentType&&(t=o.$content.find("input[autofocus]:enabled:visible:first"),t.length?t.trigger("focus"):e.focus(null,!0)),o.$slide.scrollTop(0).scrollLeft(0))},preload:function(t){var e,n,o=this;o.group.length<2||(n=o.slides[o.currPos+1],e=o.slides[o.currPos-1],e&&e.type===t&&o.loadSlide(e),n&&n.type===t&&o.loadSlide(n))},focus:function(t,o){var i,a,s=this,r=["a[href]","area[href]",'input:not([disabled]):not([type="hidden"]):not([aria-hidden])',"select:not([disabled]):not([aria-hidden])","textarea:not([disabled]):not([aria-hidden])","button:not([disabled]):not([aria-hidden])","iframe","object","embed","video","audio","[contenteditable]",'[tabindex]:not([tabindex^="-"])'].join(",");s.isClosing||(i=!t&&s.current&&s.current.isComplete?s.current.$slide.find("*:visible"+(o?":not(.fancybox-close-small)":"")):s.$refs.container.find("*:visible"),i=i.filter(r).filter(function(){return"hidden"!==n(this).css("visibility")&&!n(this).hasClass("disabled")}),i.length?(a=i.index(e.activeElement),t&&t.shiftKey?(a<0||0==a)&&(t.preventDefault(),i.eq(i.length-1).trigger("focus")):(a<0||a==i.length-1)&&(t&&t.preventDefault(),i.eq(0).trigger("focus"))):s.$refs.container.trigger("focus"))},activate:function(){var t=this;n(".fancybox-container").each(function(){var e=n(this).data("FancyBox");e&&e.id!==t.id&&!e.isClosing&&(e.trigger("onDeactivate"),e.removeEvents(),e.isVisible=!1)}),t.isVisible=!0,(t.current||t.isIdle)&&(t.update(),t.updateControls()),t.trigger("onActivate"),t.addEvents()},close:function(t,e){var o,i,a,s,r,c,l,u=this,f=u.current,h=function(){u.cleanUp(t)};return!u.isClosing&&(u.isClosing=!0,!1===u.trigger("beforeClose",t)?(u.isClosing=!1,d(function(){u.update()}),!1):(u.removeEvents(),a=f.$content,o=f.opts.animationEffect,i=n.isNumeric(e)?e:o?f.opts.animationDuration:0,f.$slide.removeClass("fancybox-slide--complete fancybox-slide--next fancybox-slide--previous fancybox-animated"),!0!==t?n.fancybox.stop(f.$slide):o=!1,f.$slide.siblings().trigger("onReset").remove(),i&&u.$refs.container.removeClass("fancybox-is-open").addClass("fancybox-is-closing").css("transition-duration",i+"ms"),u.hideLoading(f),u.hideControls(!0),u.updateCursor(),"zoom"!==o||a&&i&&"image"===f.type&&!u.isMoved()&&!f.hasError&&(l=u.getThumbPos(f))||(o="fade"),"zoom"===o?(n.fancybox.stop(a),s=n.fancybox.getTranslate(a),c={top:s.top,left:s.left,scaleX:s.width/l.width,scaleY:s.height/l.height,width:l.width,height:l.height},r=f.opts.zoomOpacity,
"auto"==r&&(r=Math.abs(f.width/f.height-l.width/l.height)>.1),r&&(l.opacity=0),n.fancybox.setTranslate(a,c),p(a),n.fancybox.animate(a,l,i,h),!0):(o&&i?n.fancybox.animate(f.$slide.addClass("fancybox-slide--previous").removeClass("fancybox-slide--current"),"fancybox-animated fancybox-fx-"+o,i,h):!0===t?setTimeout(h,i):h(),!0)))},cleanUp:function(e){var o,i,a,s=this,r=s.current.opts.$orig;s.current.$slide.trigger("onReset"),s.$refs.container.empty().remove(),s.trigger("afterClose",e),s.current.opts.backFocus&&(r&&r.length&&r.is(":visible")||(r=s.$trigger),r&&r.length&&(i=t.scrollX,a=t.scrollY,r.trigger("focus"),n("html, body").scrollTop(a).scrollLeft(i))),s.current=null,o=n.fancybox.getInstance(),o?o.activate():(n("body").removeClass("fancybox-active compensate-for-scrollbar"),n("#fancybox-style-noscroll").remove())},trigger:function(t,e){var o,i=Array.prototype.slice.call(arguments,1),a=this,s=e&&e.opts?e:a.current;if(s?i.unshift(s):s=a,i.unshift(a),n.isFunction(s.opts[t])&&(o=s.opts[t].apply(s,i)),!1===o)return o;"afterClose"!==t&&a.$refs?a.$refs.container.trigger(t+".fb",i):r.trigger(t+".fb",i)},updateControls:function(){var t=this,o=t.current,i=o.index,a=t.$refs.container,s=t.$refs.caption,r=o.opts.caption;o.$slide.trigger("refresh"),r&&r.length?(t.$caption=s,s.children().eq(0).html(r)):t.$caption=null,t.hasHiddenControls||t.isIdle||t.showControls(),a.find("[data-fancybox-count]").html(t.group.length),a.find("[data-fancybox-index]").html(i+1),a.find("[data-fancybox-prev]").prop("disabled",!o.opts.loop&&i<=0),a.find("[data-fancybox-next]").prop("disabled",!o.opts.loop&&i>=t.group.length-1),"image"===o.type?a.find("[data-fancybox-zoom]").show().end().find("[data-fancybox-download]").attr("href",o.opts.image.src||o.src).show():o.opts.toolbar&&a.find("[data-fancybox-download],[data-fancybox-zoom]").hide(),n(e.activeElement).is(":hidden,[disabled]")&&t.$refs.container.trigger("focus")},hideControls:function(t){var e=this,n=["infobar","toolbar","nav"];!t&&e.current.opts.preventCaptionOverlap||n.push("caption"),this.$refs.container.removeClass(n.map(function(t){return"fancybox-show-"+t}).join(" ")),this.hasHiddenControls=!0},showControls:function(){var t=this,e=t.current?t.current.opts:t.opts,n=t.$refs.container;t.hasHiddenControls=!1,t.idleSecondsCounter=0,n.toggleClass("fancybox-show-toolbar",!(!e.toolbar||!e.buttons)).toggleClass("fancybox-show-infobar",!!(e.infobar&&t.group.length>1)).toggleClass("fancybox-show-caption",!!t.$caption).toggleClass("fancybox-show-nav",!!(e.arrows&&t.group.length>1)).toggleClass("fancybox-is-modal",!!e.modal)},toggleControls:function(){this.hasHiddenControls?this.showControls():this.hideControls()}}),n.fancybox={version:"3.5.7",defaults:a,getInstance:function(t){var e=n('.fancybox-container:not(".fancybox-is-closing"):last').data("FancyBox"),o=Array.prototype.slice.call(arguments,1);return e instanceof b&&("string"===n.type(t)?e[t].apply(e,o):"function"===n.type(t)&&t.apply(e,o),e)},open:function(t,e,n){return new b(t,e,n)},close:function(t){var e=this.getInstance();e&&(e.close(),!0===t&&this.close(t))},destroy:function(){this.close(!0),r.add("body").off("click.fb-start","**")},isMobile:/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent),use3d:function(){var n=e.createElement("div");return t.getComputedStyle&&t.getComputedStyle(n)&&t.getComputedStyle(n).getPropertyValue("transform")&&!(e.documentMode&&e.documentMode<11)}(),getTranslate:function(t){var e;return!(!t||!t.length)&&(e=t[0].getBoundingClientRect(),{top:e.top||0,left:e.left||0,width:e.width,height:e.height,opacity:parseFloat(t.css("opacity"))})},setTranslate:function(t,e){var n="",o={};if(t&&e)return void 0===e.left&&void 0===e.top||(n=(void 0===e.left?t.position().left:e.left)+"px, "+(void 0===e.top?t.position().top:e.top)+"px",n=this.use3d?"translate3d("+n+", 0px)":"translate("+n+")"),void 0!==e.scaleX&&void 0!==e.scaleY?n+=" scale("+e.scaleX+", "+e.scaleY+")":void 0!==e.scaleX&&(n+=" scaleX("+e.scaleX+")"),n.length&&(o.transform=n),void 0!==e.opacity&&(o.opacity=e.opacity),void 0!==e.width&&(o.width=e.width),void 0!==e.height&&(o.height=e.height),t.css(o)},animate:function(t,e,o,i,a){var s,r=this;n.isFunction(o)&&(i=o,o=null),r.stop(t),s=r.getTranslate(t),t.on(f,function(c){(!c||!c.originalEvent||t.is(c.originalEvent.target)&&"z-index"!=c.originalEvent.propertyName)&&(r.stop(t),n.isNumeric(o)&&t.css("transition-duration",""),n.isPlainObject(e)?void 0!==e.scaleX&&void 0!==e.scaleY&&r.setTranslate(t,{top:e.top,left:e.left,width:s.width*e.scaleX,height:s.height*e.scaleY,scaleX:1,scaleY:1}):!0!==a&&t.removeClass(e),n.isFunction(i)&&i(c))}),n.isNumeric(o)&&t.css("transition-duration",o+"ms"),n.isPlainObject(e)?(void 0!==e.scaleX&&void 0!==e.scaleY&&(delete e.width,delete e.height,t.parent().hasClass("fancybox-slide--image")&&t.parent().addClass("fancybox-is-scaling")),n.fancybox.setTranslate(t,e)):t.addClass(e),t.data("timer",setTimeout(function(){t.trigger(f)},o+33))},stop:function(t,e){t&&t.length&&(clearTimeout(t.data("timer")),e&&t.trigger(f),t.off(f).css("transition-duration",""),t.parent().removeClass("fancybox-is-scaling"))}},n.fn.fancybox=function(t){var e;return t=t||{},e=t.selector||!1,e?n("body").off("click.fb-start",e).on("click.fb-start",e,{options:t},i):this.off("click.fb-start").on("click.fb-start",{items:this,options:t},i),this},r.on("click.fb-start","[data-fancybox]",i),r.on("click.fb-start","[data-fancybox-trigger]",function(t){n('[data-fancybox="'+n(this).attr("data-fancybox-trigger")+'"]').eq(n(this).attr("data-fancybox-index")||0).trigger("click.fb-start",{$trigger:n(this)})}),function(){var t=null;r.on("mousedown mouseup focus blur",".fancybox-button",function(e){switch(e.type){case"mousedown":t=n(this);break;case"mouseup":t=null;break;case"focusin":n(".fancybox-button").removeClass("fancybox-focus"),n(this).is(t)||n(this).is("[disabled]")||n(this).addClass("fancybox-focus");break;case"focusout":n(".fancybox-button").removeClass("fancybox-focus")}})}()}}(window,document,jQuery),function(t){"use strict";var e={youtube:{matcher:/(youtube\.com|youtu\.be|youtube\-nocookie\.com)\/(watch\?(.*&)?v=|v\/|u\/|embed\/?)?(videoseries\?list=(.*)|[\w-]{11}|\?listType=(.*)&list=(.*))(.*)/i,params:{autoplay:1,autohide:1,fs:1,rel:0,hd:1,wmode:"transparent",enablejsapi:1,html5:1},paramPlace:8,type:"iframe",url:"https://www.youtube-nocookie.com/embed/$4",thumb:"https://img.youtube.com/vi/$4/hqdefault.jpg"},vimeo:{matcher:/^.+vimeo.com\/(.*\/)?([\d]+)(.*)?/,params:{autoplay:1,hd:1,show_title:1,show_byline:1,show_portrait:0,fullscreen:1},paramPlace:3,type:"iframe",url:"//player.vimeo.com/video/$2"},instagram:{matcher:/(instagr\.am|instagram\.com)\/p\/([a-zA-Z0-9_\-]+)\/?/i,type:"image",url:"//$1/p/$2/media/?size=l"},gmap_place:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(((maps\/(place\/(.*)\/)?\@(.*),(\d+.?\d+?)z))|(\?ll=))(.*)?/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/?ll="+(t[9]?t[9]+"&z="+Math.floor(t[10])+(t[12]?t[12].replace(/^\//,"&"):""):t[12]+"").replace(/\?/,"&")+"&output="+(t[12]&&t[12].indexOf("layer=c")>0?"svembed":"embed")}},gmap_search:{matcher:/(maps\.)?google\.([a-z]{2,3}(\.[a-z]{2})?)\/(maps\/search\/)(.*)/i,type:"iframe",url:function(t){return"//maps.google."+t[2]+"/maps?q="+t[5].replace("query=","q=").replace("api=1","")+"&output=embed"}}},n=function(e,n,o){if(e)return o=o||"","object"===t.type(o)&&(o=t.param(o,!0)),t.each(n,function(t,n){e=e.replace("$"+t,n||"")}),o.length&&(e+=(e.indexOf("?")>0?"&":"?")+o),e};t(document).on("objectNeedsType.fb",function(o,i,a){var s,r,c,l,d,u,f,p=a.src||"",h=!1;s=t.extend(!0,{},e,a.opts.media),t.each(s,function(e,o){if(c=p.match(o.matcher)){if(h=o.type,f=e,u={},o.paramPlace&&c[o.paramPlace]){d=c[o.paramPlace],"?"==d[0]&&(d=d.substring(1)),d=d.split("&");for(var i=0;i<d.length;++i){var s=d[i].split("=",2);2==s.length&&(u[s[0]]=decodeURIComponent(s[1].replace(/\+/g," ")))}}return l=t.extend(!0,{},o.params,a.opts[e],u),p="function"===t.type(o.url)?o.url.call(this,c,l,a):n(o.url,c,l),r="function"===t.type(o.thumb)?o.thumb.call(this,c,l,a):n(o.thumb,c),"youtube"===e?p=p.replace(/&t=((\d+)m)?(\d+)s/,function(t,e,n,o){return"&start="+((n?60*parseInt(n,10):0)+parseInt(o,10))}):"vimeo"===e&&(p=p.replace("&%23","#")),!1}}),h?(a.opts.thumb||a.opts.$thumb&&a.opts.$thumb.length||(a.opts.thumb=r),"iframe"===h&&(a.opts=t.extend(!0,a.opts,{iframe:{preload:!1,attr:{scrolling:"no"}}})),t.extend(a,{type:h,src:p,origSrc:a.src,contentSource:f,contentType:"image"===h?"image":"gmap_place"==f||"gmap_search"==f?"map":"video"})):p&&(a.type=a.opts.defaultType)});var o={youtube:{src:"https://www.youtube.com/iframe_api",class:"YT",loading:!1,loaded:!1},vimeo:{src:"https://player.vimeo.com/api/player.js",class:"Vimeo",loading:!1,loaded:!1},load:function(t){var e,n=this;if(this[t].loaded)return void setTimeout(function(){n.done(t)});this[t].loading||(this[t].loading=!0,e=document.createElement("script"),e.type="text/javascript",e.src=this[t].src,"youtube"===t?window.onYouTubeIframeAPIReady=function(){n[t].loaded=!0,n.done(t)}:e.onload=function(){n[t].loaded=!0,n.done(t)},document.body.appendChild(e))},done:function(e){var n,o,i;"youtube"===e&&delete window.onYouTubeIframeAPIReady,(n=t.fancybox.getInstance())&&(o=n.current.$content.find("iframe"),"youtube"===e&&void 0!==YT&&YT?i=new YT.Player(o.attr("id"),{events:{onStateChange:function(t){0==t.data&&n.next()}}}):"vimeo"===e&&void 0!==Vimeo&&Vimeo&&(i=new Vimeo.Player(o),i.on("ended",function(){n.next()})))}};t(document).on({"afterShow.fb":function(t,e,n){e.group.length>1&&("youtube"===n.contentSource||"vimeo"===n.contentSource)&&o.load(n.contentSource)}})}(jQuery),function(t,e,n){"use strict";var o=function(){return t.requestAnimationFrame||t.webkitRequestAnimationFrame||t.mozRequestAnimationFrame||t.oRequestAnimationFrame||function(e){return t.setTimeout(e,1e3/60)}}(),i=function(){return t.cancelAnimationFrame||t.webkitCancelAnimationFrame||t.mozCancelAnimationFrame||t.oCancelAnimationFrame||function(e){t.clearTimeout(e)}}(),a=function(e){var n=[];e=e.originalEvent||e||t.e,e=e.touches&&e.touches.length?e.touches:e.changedTouches&&e.changedTouches.length?e.changedTouches:[e];for(var o in e)e[o].pageX?n.push({x:e[o].pageX,y:e[o].pageY}):e[o].clientX&&n.push({x:e[o].clientX,y:e[o].clientY});return n},s=function(t,e,n){return e&&t?"x"===n?t.x-e.x:"y"===n?t.y-e.y:Math.sqrt(Math.pow(t.x-e.x,2)+Math.pow(t.y-e.y,2)):0},r=function(t){if(t.is('a,area,button,[role="button"],input,label,select,summary,textarea,video,audio,iframe')||n.isFunction(t.get(0).onclick)||t.data("selectable"))return!0;for(var e=0,o=t[0].attributes,i=o.length;e<i;e++)if("data-fancybox-"===o[e].nodeName.substr(0,14))return!0;return!1},c=function(e){var n=t.getComputedStyle(e)["overflow-y"],o=t.getComputedStyle(e)["overflow-x"],i=("scroll"===n||"auto"===n)&&e.scrollHeight>e.clientHeight,a=("scroll"===o||"auto"===o)&&e.scrollWidth>e.clientWidth;return i||a},l=function(t){for(var e=!1;;){if(e=c(t.get(0)))break;if(t=t.parent(),!t.length||t.hasClass("fancybox-stage")||t.is("body"))break}return e},d=function(t){var e=this;e.instance=t,e.$bg=t.$refs.bg,e.$stage=t.$refs.stage,e.$container=t.$refs.container,e.destroy(),e.$container.on("touchstart.fb.touch mousedown.fb.touch",n.proxy(e,"ontouchstart"))};d.prototype.destroy=function(){var t=this;t.$container.off(".fb.touch"),n(e).off(".fb.touch"),t.requestId&&(i(t.requestId),t.requestId=null),t.tapped&&(clearTimeout(t.tapped),t.tapped=null)},d.prototype.ontouchstart=function(o){var i=this,c=n(o.target),d=i.instance,u=d.current,f=u.$slide,p=u.$content,h="touchstart"==o.type;if(h&&i.$container.off("mousedown.fb.touch"),(!o.originalEvent||2!=o.originalEvent.button)&&f.length&&c.length&&!r(c)&&!r(c.parent())&&(c.is("img")||!(o.originalEvent.clientX>c[0].clientWidth+c.offset().left))){if(!u||d.isAnimating||u.$slide.hasClass("fancybox-animated"))return o.stopPropagation(),void o.preventDefault();i.realPoints=i.startPoints=a(o),i.startPoints.length&&(u.touch&&o.stopPropagation(),i.startEvent=o,i.canTap=!0,i.$target=c,i.$content=p,i.opts=u.opts.touch,i.isPanning=!1,i.isSwiping=!1,i.isZooming=!1,i.isScrolling=!1,i.canPan=d.canPan(),i.startTime=(new Date).getTime(),i.distanceX=i.distanceY=i.distance=0,i.canvasWidth=Math.round(f[0].clientWidth),i.canvasHeight=Math.round(f[0].clientHeight),i.contentLastPos=null,i.contentStartPos=n.fancybox.getTranslate(i.$content)||{top:0,left:0},i.sliderStartPos=n.fancybox.getTranslate(f),i.stagePos=n.fancybox.getTranslate(d.$refs.stage),i.sliderStartPos.top-=i.stagePos.top,i.sliderStartPos.left-=i.stagePos.left,i.contentStartPos.top-=i.stagePos.top,i.contentStartPos.left-=i.stagePos.left,n(e).off(".fb.touch").on(h?"touchend.fb.touch touchcancel.fb.touch":"mouseup.fb.touch mouseleave.fb.touch",n.proxy(i,"ontouchend")).on(h?"touchmove.fb.touch":"mousemove.fb.touch",n.proxy(i,"ontouchmove")),n.fancybox.isMobile&&e.addEventListener("scroll",i.onscroll,!0),((i.opts||i.canPan)&&(c.is(i.$stage)||i.$stage.find(c).length)||(c.is(".fancybox-image")&&o.preventDefault(),n.fancybox.isMobile&&c.parents(".fancybox-caption").length))&&(i.isScrollable=l(c)||l(c.parent()),n.fancybox.isMobile&&i.isScrollable||o.preventDefault(),(1===i.startPoints.length||u.hasError)&&(i.canPan?(n.fancybox.stop(i.$content),i.isPanning=!0):i.isSwiping=!0,i.$container.addClass("fancybox-is-grabbing")),2===i.startPoints.length&&"image"===u.type&&(u.isLoaded||u.$ghost)&&(i.canTap=!1,i.isSwiping=!1,i.isPanning=!1,i.isZooming=!0,n.fancybox.stop(i.$content),i.centerPointStartX=.5*(i.startPoints[0].x+i.startPoints[1].x)-n(t).scrollLeft(),i.centerPointStartY=.5*(i.startPoints[0].y+i.startPoints[1].y)-n(t).scrollTop(),i.percentageOfImageAtPinchPointX=(i.centerPointStartX-i.contentStartPos.left)/i.contentStartPos.width,i.percentageOfImageAtPinchPointY=(i.centerPointStartY-i.contentStartPos.top)/i.contentStartPos.height,i.startDistanceBetweenFingers=s(i.startPoints[0],i.startPoints[1]))))}},d.prototype.onscroll=function(t){var n=this;n.isScrolling=!0,e.removeEventListener("scroll",n.onscroll,!0)},d.prototype.ontouchmove=function(t){var e=this;return void 0!==t.originalEvent.buttons&&0===t.originalEvent.buttons?void e.ontouchend(t):e.isScrolling?void(e.canTap=!1):(e.newPoints=a(t),void((e.opts||e.canPan)&&e.newPoints.length&&e.newPoints.length&&(e.isSwiping&&!0===e.isSwiping||t.preventDefault(),e.distanceX=s(e.newPoints[0],e.startPoints[0],"x"),e.distanceY=s(e.newPoints[0],e.startPoints[0],"y"),e.distance=s(e.newPoints[0],e.startPoints[0]),e.distance>0&&(e.isSwiping?e.onSwipe(t):e.isPanning?e.onPan():e.isZooming&&e.onZoom()))))},d.prototype.onSwipe=function(e){var a,s=this,r=s.instance,c=s.isSwiping,l=s.sliderStartPos.left||0;if(!0!==c)"x"==c&&(s.distanceX>0&&(s.instance.group.length<2||0===s.instance.current.index&&!s.instance.current.opts.loop)?l+=Math.pow(s.distanceX,.8):s.distanceX<0&&(s.instance.group.length<2||s.instance.current.index===s.instance.group.length-1&&!s.instance.current.opts.loop)?l-=Math.pow(-s.distanceX,.8):l+=s.distanceX),s.sliderLastPos={top:"x"==c?0:s.sliderStartPos.top+s.distanceY,left:l},s.requestId&&(i(s.requestId),s.requestId=null),s.requestId=o(function(){s.sliderLastPos&&(n.each(s.instance.slides,function(t,e){var o=e.pos-s.instance.currPos;n.fancybox.setTranslate(e.$slide,{top:s.sliderLastPos.top,left:s.sliderLastPos.left+o*s.canvasWidth+o*e.opts.gutter})}),s.$container.addClass("fancybox-is-sliding"))});else if(Math.abs(s.distance)>10){if(s.canTap=!1,r.group.length<2&&s.opts.vertical?s.isSwiping="y":r.isDragging||!1===s.opts.vertical||"auto"===s.opts.vertical&&n(t).width()>800?s.isSwiping="x":(a=Math.abs(180*Math.atan2(s.distanceY,s.distanceX)/Math.PI),s.isSwiping=a>45&&a<135?"y":"x"),"y"===s.isSwiping&&n.fancybox.isMobile&&s.isScrollable)return void(s.isScrolling=!0);r.isDragging=s.isSwiping,s.startPoints=s.newPoints,n.each(r.slides,function(t,e){var o,i;n.fancybox.stop(e.$slide),o=n.fancybox.getTranslate(e.$slide),i=n.fancybox.getTranslate(r.$refs.stage),e.$slide.css({transform:"",opacity:"","transition-duration":""}).removeClass("fancybox-animated").removeClass(function(t,e){return(e.match(/(^|\s)fancybox-fx-\S+/g)||[]).join(" ")}),e.pos===r.current.pos&&(s.sliderStartPos.top=o.top-i.top,s.sliderStartPos.left=o.left-i.left),n.fancybox.setTranslate(e.$slide,{top:o.top-i.top,left:o.left-i.left})}),r.SlideShow&&r.SlideShow.isActive&&r.SlideShow.stop()}},d.prototype.onPan=function(){var t=this;if(s(t.newPoints[0],t.realPoints[0])<(n.fancybox.isMobile?10:5))return void(t.startPoints=t.newPoints);t.canTap=!1,t.contentLastPos=t.limitMovement(),t.requestId&&i(t.requestId),t.requestId=o(function(){n.fancybox.setTranslate(t.$content,t.contentLastPos)})},d.prototype.limitMovement=function(){var t,e,n,o,i,a,s=this,r=s.canvasWidth,c=s.canvasHeight,l=s.distanceX,d=s.distanceY,u=s.contentStartPos,f=u.left,p=u.top,h=u.width,g=u.height;return i=h>r?f+l:f,a=p+d,t=Math.max(0,.5*r-.5*h),e=Math.max(0,.5*c-.5*g),n=Math.min(r-h,.5*r-.5*h),o=Math.min(c-g,.5*c-.5*g),l>0&&i>t&&(i=t-1+Math.pow(-t+f+l,.8)||0),l<0&&i<n&&(i=n+1-Math.pow(n-f-l,.8)||0),d>0&&a>e&&(a=e-1+Math.pow(-e+p+d,.8)||0),d<0&&a<o&&(a=o+1-Math.pow(o-p-d,.8)||0),{top:a,left:i}},d.prototype.limitPosition=function(t,e,n,o){var i=this,a=i.canvasWidth,s=i.canvasHeight;return n>a?(t=t>0?0:t,t=t<a-n?a-n:t):t=Math.max(0,a/2-n/2),o>s?(e=e>0?0:e,e=e<s-o?s-o:e):e=Math.max(0,s/2-o/2),{top:e,left:t}},d.prototype.onZoom=function(){var e=this,a=e.contentStartPos,r=a.width,c=a.height,l=a.left,d=a.top,u=s(e.newPoints[0],e.newPoints[1]),f=u/e.startDistanceBetweenFingers,p=Math.floor(r*f),h=Math.floor(c*f),g=(r-p)*e.percentageOfImageAtPinchPointX,b=(c-h)*e.percentageOfImageAtPinchPointY,m=(e.newPoints[0].x+e.newPoints[1].x)/2-n(t).scrollLeft(),v=(e.newPoints[0].y+e.newPoints[1].y)/2-n(t).scrollTop(),y=m-e.centerPointStartX,x=v-e.centerPointStartY,w=l+(g+y),$=d+(b+x),S={top:$,left:w,scaleX:f,scaleY:f};e.canTap=!1,e.newWidth=p,e.newHeight=h,e.contentLastPos=S,e.requestId&&i(e.requestId),e.requestId=o(function(){n.fancybox.setTranslate(e.$content,e.contentLastPos)})},d.prototype.ontouchend=function(t){var o=this,s=o.isSwiping,r=o.isPanning,c=o.isZooming,l=o.isScrolling;if(o.endPoints=a(t),o.dMs=Math.max((new Date).getTime()-o.startTime,1),o.$container.removeClass("fancybox-is-grabbing"),n(e).off(".fb.touch"),e.removeEventListener("scroll",o.onscroll,!0),o.requestId&&(i(o.requestId),o.requestId=null),o.isSwiping=!1,o.isPanning=!1,o.isZooming=!1,o.isScrolling=!1,o.instance.isDragging=!1,o.canTap)return o.onTap(t);o.speed=100,o.velocityX=o.distanceX/o.dMs*.5,o.velocityY=o.distanceY/o.dMs*.5,r?o.endPanning():c?o.endZooming():o.endSwiping(s,l)},d.prototype.endSwiping=function(t,e){var o=this,i=!1,a=o.instance.group.length,s=Math.abs(o.distanceX),r="x"==t&&a>1&&(o.dMs>130&&s>10||s>50);o.sliderLastPos=null,"y"==t&&!e&&Math.abs(o.distanceY)>50?(n.fancybox.animate(o.instance.current.$slide,{top:o.sliderStartPos.top+o.distanceY+150*o.velocityY,opacity:0},200),i=o.instance.close(!0,250)):r&&o.distanceX>0?i=o.instance.previous(300):r&&o.distanceX<0&&(i=o.instance.next(300)),!1!==i||"x"!=t&&"y"!=t||o.instance.centerSlide(200),o.$container.removeClass("fancybox-is-sliding")},d.prototype.endPanning=function(){var t,e,o,i=this;i.contentLastPos&&(!1===i.opts.momentum||i.dMs>350?(t=i.contentLastPos.left,e=i.contentLastPos.top):(t=i.contentLastPos.left+500*i.velocityX,e=i.contentLastPos.top+500*i.velocityY),o=i.limitPosition(t,e,i.contentStartPos.width,i.contentStartPos.height),o.width=i.contentStartPos.width,o.height=i.contentStartPos.height,n.fancybox.animate(i.$content,o,366))},d.prototype.endZooming=function(){var t,e,o,i,a=this,s=a.instance.current,r=a.newWidth,c=a.newHeight;a.contentLastPos&&(t=a.contentLastPos.left,e=a.contentLastPos.top,i={top:e,left:t,width:r,height:c,scaleX:1,scaleY:1},n.fancybox.setTranslate(a.$content,i),r<a.canvasWidth&&c<a.canvasHeight?a.instance.scaleToFit(150):r>s.width||c>s.height?a.instance.scaleToActual(a.centerPointStartX,a.centerPointStartY,150):(o=a.limitPosition(t,e,r,c),n.fancybox.animate(a.$content,o,150)))},d.prototype.onTap=function(e){var o,i=this,s=n(e.target),r=i.instance,c=r.current,l=e&&a(e)||i.startPoints,d=l[0]?l[0].x-n(t).scrollLeft()-i.stagePos.left:0,u=l[0]?l[0].y-n(t).scrollTop()-i.stagePos.top:0,f=function(t){var o=c.opts[t];if(n.isFunction(o)&&(o=o.apply(r,[c,e])),o)switch(o){case"close":r.close(i.startEvent);break;case"toggleControls":r.toggleControls();break;case"next":r.next();break;case"nextOrClose":r.group.length>1?r.next():r.close(i.startEvent);break;case"zoom":"image"==c.type&&(c.isLoaded||c.$ghost)&&(r.canPan()?r.scaleToFit():r.isScaledDown()?r.scaleToActual(d,u):r.group.length<2&&r.close(i.startEvent))}};if((!e.originalEvent||2!=e.originalEvent.button)&&(s.is("img")||!(d>s[0].clientWidth+s.offset().left))){if(s.is(".fancybox-bg,.fancybox-inner,.fancybox-outer,.fancybox-container"))o="Outside";else if(s.is(".fancybox-slide"))o="Slide";else{if(!r.current.$content||!r.current.$content.find(s).addBack().filter(s).length)return;o="Content"}if(i.tapped){if(clearTimeout(i.tapped),i.tapped=null,Math.abs(d-i.tapX)>50||Math.abs(u-i.tapY)>50)return this;f("dblclick"+o)}else i.tapX=d,i.tapY=u,c.opts["dblclick"+o]&&c.opts["dblclick"+o]!==c.opts["click"+o]?i.tapped=setTimeout(function(){i.tapped=null,r.isAnimating||f("click"+o)},500):f("click"+o);return this}},n(e).on("onActivate.fb",function(t,e){e&&!e.Guestures&&(e.Guestures=new d(e))}).on("beforeClose.fb",function(t,e){e&&e.Guestures&&e.Guestures.destroy()})}(window,document,jQuery),function(t,e){"use strict";e.extend(!0,e.fancybox.defaults,{btnTpl:{slideShow:'<button data-fancybox-play class="fancybox-button fancybox-button--play" title="{{PLAY_START}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.5 5.4v13.2l11-6.6z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M8.33 5.75h2.2v12.5h-2.2V5.75zm5.15 0h2.2v12.5h-2.2V5.75z"/></svg></button>'},slideShow:{autoStart:!1,speed:3e3,progress:!0}});var n=function(t){this.instance=t,this.init()};e.extend(n.prototype,{timer:null,isActive:!1,$button:null,init:function(){var t=this,n=t.instance,o=n.group[n.currIndex].opts.slideShow;t.$button=n.$refs.toolbar.find("[data-fancybox-play]").on("click",function(){t.toggle()}),n.group.length<2||!o?t.$button.hide():o.progress&&(t.$progress=e('<div class="fancybox-progress"></div>').appendTo(n.$refs.inner))},set:function(t){var n=this,o=n.instance,i=o.current;i&&(!0===t||i.opts.loop||o.currIndex<o.group.length-1)?n.isActive&&"video"!==i.contentType&&(n.$progress&&e.fancybox.animate(n.$progress.show(),{scaleX:1},i.opts.slideShow.speed),n.timer=setTimeout(function(){o.current.opts.loop||o.current.index!=o.group.length-1?o.next():o.jumpTo(0)},i.opts.slideShow.speed)):(n.stop(),o.idleSecondsCounter=0,o.showControls())},clear:function(){var t=this;clearTimeout(t.timer),t.timer=null,t.$progress&&t.$progress.removeAttr("style").hide()},start:function(){var t=this,e=t.instance.current;e&&(t.$button.attr("title",(e.opts.i18n[e.opts.lang]||e.opts.i18n.en).PLAY_STOP).removeClass("fancybox-button--play").addClass("fancybox-button--pause"),t.isActive=!0,e.isComplete&&t.set(!0),t.instance.trigger("onSlideShowChange",!0))},stop:function(){var t=this,e=t.instance.current;t.clear(),t.$button.attr("title",(e.opts.i18n[e.opts.lang]||e.opts.i18n.en).PLAY_START).removeClass("fancybox-button--pause").addClass("fancybox-button--play"),t.isActive=!1,t.instance.trigger("onSlideShowChange",!1),t.$progress&&t.$progress.removeAttr("style").hide()},toggle:function(){var t=this;t.isActive?t.stop():t.start()}}),e(t).on({"onInit.fb":function(t,e){e&&!e.SlideShow&&(e.SlideShow=new n(e))},"beforeShow.fb":function(t,e,n,o){var i=e&&e.SlideShow;o?i&&n.opts.slideShow.autoStart&&i.start():i&&i.isActive&&i.clear()},"afterShow.fb":function(t,e,n){var o=e&&e.SlideShow;o&&o.isActive&&o.set()},"afterKeydown.fb":function(n,o,i,a,s){var r=o&&o.SlideShow;!r||!i.opts.slideShow||80!==s&&32!==s||e(t.activeElement).is("button,a,input")||(a.preventDefault(),r.toggle())},"beforeClose.fb onDeactivate.fb":function(t,e){var n=e&&e.SlideShow;n&&n.stop()}}),e(t).on("visibilitychange",function(){var n=e.fancybox.getInstance(),o=n&&n.SlideShow;o&&o.isActive&&(t.hidden?o.clear():o.set())})}(document,jQuery),function(t,e){"use strict";var n=function(){for(var e=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenEnabled","fullscreenchange","fullscreenerror"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitFullscreenEnabled","webkitfullscreenchange","webkitfullscreenerror"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitCancelFullScreen","webkitfullscreenchange","webkitfullscreenerror"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozFullScreenEnabled","mozfullscreenchange","mozfullscreenerror"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","msFullscreenEnabled","MSFullscreenChange","MSFullscreenError"]],n={},o=0;o<e.length;o++){var i=e[o];if(i&&i[1]in t){for(var a=0;a<i.length;a++)n[e[0][a]]=i[a];return n}}return!1}();if(n){var o={request:function(e){e=e||t.documentElement,e[n.requestFullscreen](e.ALLOW_KEYBOARD_INPUT)},exit:function(){t[n.exitFullscreen]()},toggle:function(e){e=e||t.documentElement,this.isFullscreen()?this.exit():this.request(e)},isFullscreen:function(){return Boolean(t[n.fullscreenElement])},enabled:function(){return Boolean(t[n.fullscreenEnabled])}};e.extend(!0,e.fancybox.defaults,{btnTpl:{fullScreen:'<button data-fancybox-fullscreen class="fancybox-button fancybox-button--fsenter" title="{{FULL_SCREEN}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z"/></svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 16h3v3h2v-5H5zm3-8H5v2h5V5H8zm6 11h2v-3h3v-2h-5zm2-11V5h-2v5h5V8z"/></svg></button>'},fullScreen:{autoStart:!1}}),e(t).on(n.fullscreenchange,function(){var t=o.isFullscreen(),n=e.fancybox.getInstance();n&&(n.current&&"image"===n.current.type&&n.isAnimating&&(n.isAnimating=!1,n.update(!0,!0,0),n.isComplete||n.complete()),n.trigger("onFullscreenChange",t),n.$refs.container.toggleClass("fancybox-is-fullscreen",t),n.$refs.toolbar.find("[data-fancybox-fullscreen]").toggleClass("fancybox-button--fsenter",!t).toggleClass("fancybox-button--fsexit",t))})}e(t).on({"onInit.fb":function(t,e){var i;if(!n)return void e.$refs.toolbar.find("[data-fancybox-fullscreen]").remove();e&&e.group[e.currIndex].opts.fullScreen?(i=e.$refs.container,i.on("click.fb-fullscreen","[data-fancybox-fullscreen]",function(t){t.stopPropagation(),t.preventDefault(),o.toggle()}),e.opts.fullScreen&&!0===e.opts.fullScreen.autoStart&&o.request(),e.FullScreen=o):e&&e.$refs.toolbar.find("[data-fancybox-fullscreen]").hide()},"afterKeydown.fb":function(t,e,n,o,i){e&&e.FullScreen&&70===i&&(o.preventDefault(),e.FullScreen.toggle())},"beforeClose.fb":function(t,e){e&&e.FullScreen&&e.$refs.container.hasClass("fancybox-is-fullscreen")&&o.exit()}})}(document,jQuery),function(t,e){"use strict";var n="fancybox-thumbs";e.fancybox.defaults=e.extend(!0,{btnTpl:{thumbs:'<button data-fancybox-thumbs class="fancybox-button fancybox-button--thumbs" title="{{THUMBS}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M14.59 14.59h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76h-3.76v-3.76zm-4.47 0h3.76v3.76H5.65v-3.76zm8.94-4.47h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76h-3.76V5.65zm-4.47 0h3.76v3.76H5.65V5.65z"/></svg></button>'},thumbs:{autoStart:!1,hideOnClose:!0,parentEl:".fancybox-container",axis:"y"}},e.fancybox.defaults);var o=function(t){this.init(t)};e.extend(o.prototype,{$button:null,$grid:null,$list:null,isVisible:!1,isActive:!1,init:function(t){var e=this,n=t.group,o=0;e.instance=t,e.opts=n[t.currIndex].opts.thumbs,t.Thumbs=e,e.$button=t.$refs.toolbar.find("[data-fancybox-thumbs]");for(var i=0,a=n.length;i<a&&(n[i].thumb&&o++,!(o>1));i++);o>1&&e.opts?(e.$button.removeAttr("style").on("click",function(){e.toggle()}),e.isActive=!0):e.$button.hide()},create:function(){var t,o=this,i=o.instance,a=o.opts.parentEl,s=[];o.$grid||(o.$grid=e('<div class="'+n+" "+n+"-"+o.opts.axis+'"></div>').appendTo(i.$refs.container.find(a).addBack().filter(a)),o.$grid.on("click","a",function(){i.jumpTo(e(this).attr("data-index"))})),o.$list||(o.$list=e('<div class="'+n+'__list">').appendTo(o.$grid)),e.each(i.group,function(e,n){t=n.thumb,t||"image"!==n.type||(t=n.src),s.push('<a href="javascript:;" tabindex="0" data-index="'+e+'"'+(t&&t.length?' style="background-image:url('+t+')"':'class="fancybox-thumbs-missing"')+"></a>")}),o.$list[0].innerHTML=s.join(""),"x"===o.opts.axis&&o.$list.width(parseInt(o.$grid.css("padding-right"),10)+i.group.length*o.$list.children().eq(0).outerWidth(!0))},focus:function(t){var e,n,o=this,i=o.$list,a=o.$grid;o.instance.current&&(e=i.children().removeClass("fancybox-thumbs-active").filter('[data-index="'+o.instance.current.index+'"]').addClass("fancybox-thumbs-active"),n=e.position(),"y"===o.opts.axis&&(n.top<0||n.top>i.height()-e.outerHeight())?i.stop().animate({scrollTop:i.scrollTop()+n.top},t):"x"===o.opts.axis&&(n.left<a.scrollLeft()||n.left>a.scrollLeft()+(a.width()-e.outerWidth()))&&i.parent().stop().animate({scrollLeft:n.left},t))},update:function(){var t=this;t.instance.$refs.container.toggleClass("fancybox-show-thumbs",this.isVisible),t.isVisible?(t.$grid||t.create(),t.instance.trigger("onThumbsShow"),t.focus(0)):t.$grid&&t.instance.trigger("onThumbsHide"),t.instance.update()},hide:function(){this.isVisible=!1,this.update()},show:function(){this.isVisible=!0,this.update()},toggle:function(){this.isVisible=!this.isVisible,this.update()}}),e(t).on({"onInit.fb":function(t,e){var n;e&&!e.Thumbs&&(n=new o(e),n.isActive&&!0===n.opts.autoStart&&n.show())},"beforeShow.fb":function(t,e,n,o){var i=e&&e.Thumbs;i&&i.isVisible&&i.focus(o?0:250)},"afterKeydown.fb":function(t,e,n,o,i){var a=e&&e.Thumbs;a&&a.isActive&&71===i&&(o.preventDefault(),a.toggle())},"beforeClose.fb":function(t,e){var n=e&&e.Thumbs;n&&n.isVisible&&!1!==n.opts.hideOnClose&&n.$grid.hide()}})}(document,jQuery),function(t,e){"use strict";function n(t){var e={"&":"&amp;","<":"&lt;",">":"&gt;",'"':"&quot;","'":"&#39;","/":"&#x2F;","`":"&#x60;","=":"&#x3D;"};return String(t).replace(/[&<>"'`=\/]/g,function(t){return e[t]})}e.extend(!0,e.fancybox.defaults,{btnTpl:{share:'<button data-fancybox-share class="fancybox-button fancybox-button--share" title="{{SHARE}}"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M2.55 19c1.4-8.4 9.1-9.8 11.9-9.8V5l7 7-7 6.3v-3.5c-2.8 0-10.5 2.1-11.9 4.2z"/></svg></button>'},share:{url:function(t,e){return!t.currentHash&&"inline"!==e.type&&"html"!==e.type&&(e.origSrc||e.src)||window.location},
tpl:'<div class="fancybox-share"><h1>{{SHARE}}</h1><p><a class="fancybox-share__button fancybox-share__button--fb" href="https://www.facebook.com/sharer/sharer.php?u={{url}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m287 456v-299c0-21 6-35 35-35h38v-63c-7-1-29-3-55-3-54 0-91 33-91 94v306m143-254h-205v72h196" /></svg><span>Facebook</span></a><a class="fancybox-share__button fancybox-share__button--tw" href="https://twitter.com/intent/tweet?url={{url}}&text={{descr}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m456 133c-14 7-31 11-47 13 17-10 30-27 37-46-15 10-34 16-52 20-61-62-157-7-141 75-68-3-129-35-169-85-22 37-11 86 26 109-13 0-26-4-37-9 0 39 28 72 65 80-12 3-25 4-37 2 10 33 41 57 77 57-42 30-77 38-122 34 170 111 378-32 359-208 16-11 30-25 41-42z" /></svg><span>Twitter</span></a><a class="fancybox-share__button fancybox-share__button--pt" href="https://www.pinterest.com/pin/create/button/?url={{url}}&description={{descr}}&media={{media}}"><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="m265 56c-109 0-164 78-164 144 0 39 15 74 47 87 5 2 10 0 12-5l4-19c2-6 1-8-3-13-9-11-15-25-15-45 0-58 43-110 113-110 62 0 96 38 96 88 0 67-30 122-73 122-24 0-42-19-36-44 6-29 20-60 20-81 0-19-10-35-31-35-25 0-44 26-44 60 0 21 7 36 7 36l-30 125c-8 37-1 83 0 87 0 3 4 4 5 2 2-3 32-39 42-75l16-64c8 16 31 29 56 29 74 0 124-67 124-157 0-69-58-132-146-132z" fill="#fff"/></svg><span>Pinterest</span></a></p><p><input class="fancybox-share__input" type="text" value="{{url_raw}}" onclick="select()" /></p></div>'}}),e(t).on("click","[data-fancybox-share]",function(){var t,o,i=e.fancybox.getInstance(),a=i.current||null;a&&("function"===e.type(a.opts.share.url)&&(t=a.opts.share.url.apply(a,[i,a])),o=a.opts.share.tpl.replace(/\{\{media\}\}/g,"image"===a.type?encodeURIComponent(a.src):"").replace(/\{\{url\}\}/g,encodeURIComponent(t)).replace(/\{\{url_raw\}\}/g,n(t)).replace(/\{\{descr\}\}/g,i.$caption?encodeURIComponent(i.$caption.text()):""),e.fancybox.open({src:i.translate(i,o),type:"html",opts:{touch:!1,animationEffect:!1,afterLoad:function(t,e){i.$refs.container.one("beforeClose.fb",function(){t.close(null,0)}),e.$content.find(".fancybox-share__button").click(function(){return window.open(this.href,"Share","width=550, height=450"),!1})},mobile:{autoFocus:!1}}}))})}(document,jQuery),function(t,e,n){"use strict";function o(){var e=t.location.hash.substr(1),n=e.split("-"),o=n.length>1&&/^\+?\d+$/.test(n[n.length-1])?parseInt(n.pop(-1),10)||1:1,i=n.join("-");return{hash:e,index:o<1?1:o,gallery:i}}function i(t){""!==t.gallery&&n("[data-fancybox='"+n.escapeSelector(t.gallery)+"']").eq(t.index-1).focus().trigger("click.fb-start")}function a(t){var e,n;return!!t&&(e=t.current?t.current.opts:t.opts,""!==(n=e.hash||(e.$orig?e.$orig.data("fancybox")||e.$orig.data("fancybox-trigger"):""))&&n)}n.escapeSelector||(n.escapeSelector=function(t){return(t+"").replace(/([\0-\x1f\x7f]|^-?\d)|^-$|[^\x80-\uFFFF\w-]/g,function(t,e){return e?"\0"===t?"�":t.slice(0,-1)+"\\"+t.charCodeAt(t.length-1).toString(16)+" ":"\\"+t})}),n(function(){!1!==n.fancybox.defaults.hash&&(n(e).on({"onInit.fb":function(t,e){var n,i;!1!==e.group[e.currIndex].opts.hash&&(n=o(),(i=a(e))&&n.gallery&&i==n.gallery&&(e.currIndex=n.index-1))},"beforeShow.fb":function(n,o,i,s){var r;i&&!1!==i.opts.hash&&(r=a(o))&&(o.currentHash=r+(o.group.length>1?"-"+(i.index+1):""),t.location.hash!=="#"+o.currentHash&&(s&&!o.origHash&&(o.origHash=t.location.hash),o.hashTimer&&clearTimeout(o.hashTimer),o.hashTimer=setTimeout(function(){"replaceState"in t.history?(t.history[s?"pushState":"replaceState"]({},e.title,t.location.pathname+t.location.search+"#"+o.currentHash),s&&(o.hasCreatedHistory=!0)):t.location.hash=o.currentHash,o.hashTimer=null},300)))},"beforeClose.fb":function(n,o,i){i&&!1!==i.opts.hash&&(clearTimeout(o.hashTimer),o.currentHash&&o.hasCreatedHistory?t.history.back():o.currentHash&&("replaceState"in t.history?t.history.replaceState({},e.title,t.location.pathname+t.location.search+(o.origHash||"")):t.location.hash=o.origHash),o.currentHash=null)}}),n(t).on("hashchange.fb",function(){var t=o(),e=null;n.each(n(".fancybox-container").get().reverse(),function(t,o){var i=n(o).data("FancyBox");if(i&&i.currentHash)return e=i,!1}),e?e.currentHash===t.gallery+"-"+t.index||1===t.index&&e.currentHash==t.gallery||(e.currentHash=null,e.close()):""!==t.gallery&&i(t)}),setTimeout(function(){n.fancybox.getInstance()||i(o())},50))})}(window,document,jQuery),function(t,e){"use strict";var n=(new Date).getTime();e(t).on({"onInit.fb":function(t,e,o){e.$refs.stage.on("mousewheel DOMMouseScroll wheel MozMousePixelScroll",function(t){var o=e.current,i=(new Date).getTime();e.group.length<2||!1===o.opts.wheel||"auto"===o.opts.wheel&&"image"!==o.type||(t.preventDefault(),t.stopPropagation(),o.$slide.hasClass("fancybox-animated")||(t=t.originalEvent||t,i-n<250||(n=i,e[(-t.deltaY||-t.deltaX||t.wheelDelta||-t.detail)<0?"next":"previous"]())))})}})}(document,jQuery);
try {
 $(document).ready(function(){
     $("a[href*='youtu.be/'],a[href*='youtube.com/watch']").filter(":not([data-fancybox-href])").each(function(i,v){
		var id=v.href.match(/youtu\.be\/([\w-]+)[\/\?]?/) || v.href.match(/youtube.com\/watch\?v=([\w-]+)[\&]?/);
         if (id && v.href.indexOf("#")<0) {
             $(v).attr("data-fancybox-href","//www.youtube.com/embed/"+id[1]+"?controls=1&showinfo=0&rel=0&enablejsapi=1&autoplay=1&wmode=transparent");
         }
     });
//     $("a[href*='brighttalk.com/webcast']").filter(":not([data-fancybox-href])").each(function(i,v){
//         var id=v.href.match(/webcast\/([0-9]+)\/([0-9]+)/);
//         if (id && id[2]) {
//             var url="https://www.brighttalk.com/service/player/en-US/theme/default/channel/"+id[1]+"/webcast/"+id[2]+"/standalone?commid="+id[2];
//             $(v).attr("data-fancybox-href",url).attr("data-type","iframe").attr("data-src",url).attr("data-options","{\"iframe\":{\"css\":{\"max-width\":760}}}");
//         }
//     });

     $("span[data-fancybox]:has(img[src*='.svg'])").attr("data-width",Math.min(1024,Math.floor($(window).width()*.8))).attr("data-height",Math.floor($(window).height()*.8));
     if (typeof($.fancybox)!="undefined"){
     	$("a[data-fancybox-href]").fancybox({"touch":false});
     	$.fancybox.defaults.touch=false;
     }
 });
} catch (e) {}


// Bert 2.0
window.Bert = new function() {
    var bert=this;
    this.enabled=1; // active;
    this.profile={};
    this.value=0;
    this.now=new Date();
   
   
    // setup BERT
    this.init=function() {
         if (!bert.enabled) {return false; }
         if (typeof(navigator.doNotTrack)!="undefined" && navigator.doNotTrack) { return false; }
   
       try { if (typeof(localStorage)!="undefined") { 
            bert.profile=JSON.parse(localStorage["bert"] || "{}");
           setTimeout(bert.valuable,250);
       }} catch (e) { bert.enabled=false; return false;}
   
     // Google GCLID
     if (window.location.search.indexOf("gclid=")>=0) {
      var g=window.location.search.match(/gclid=([^\&]+)/);
      if (g && g[1]) { bert.GCLID=g[1].substring(0,128) + ("//"+bert.now.toISOString()); }
      bert.addInterest('utm','gclid',bert.GCLID);
      bert.addInterest('utm','medium',"paid");
     }
     // UTMs
      var qs=window.location.search;
      if (document.referrer && document.referrer.indexOf("?")>0) { qs+="&"+document.referrer.substring(document.referrer.indexOf("?")+1); }
     if (qs.indexOf("utm_")>=0 || qs.indexOf("intcmp")>=0) {
      var q=qs.substring(1).split(/[\&\?]/);
      for (var i in q) {
       var va=q[i].match(/utm_(.*?)=(.*)/);
       if (va && va[2]) { bert.addInterest('utm',va[1],va[2]); }
       else if (q[i].match(/intcmp=.+/)) {
              bert.addInterest('utm','campaign',q[i].substring(8));
        }
      }
     }
     // evar
        if (qs.indexOf("cmp=")>=0) {
            var cmp=qs.substring(qs.indexOf("cmp=")+4)+"&";
            cmp=cmp.substring(0,cmp.indexOf("&"));
            if (cmp.indexOf(":")>=0) {
                const utm=bert.utm(cmp);
                Object.keys(utm).forEach(k => { bert.addInterest("utm",k,utm[k]); });
            } else if (!cmp.indexOf("vcgref")) {
               bert.addInterest("utm","content",cmp.substring(0,16));
            }
        }
        // cj event
       if (qs.indexOf("cjevent=")>=0) {
            var cje=qs.substring(qs.indexOf("cjevent=")+8)+"&";
            cje=cje.substring(0,cje.indexOf("&"));
           bert.addInterest("utm","cjevent",cje.substr(0,32));
       }
        if (qs.indexOf("&SID=")>=0) {
            var sid=qs.substring(qs.indexOf("&SID=")+5)+"&";
            sid=sid.substring(0,sid.indexOf("&"));
           bert.addInterest("utm","sid",sid.substr(0,48));
       }
     // site section
     //var main=document.getElementById("main");
     //if (main && main.hasAttribute("data-topic")) {
     //       bert.addInterest("topics",main.getAttribute("data-topic"));
     //   }
     if (typeof(digitalData)!="undefined" && typeof(digitalData.pageInfo)!="undefined") {
         var ps=window.location.pathname.match(/products?\/([^\.\/]+)[\.\/]?/);
         var is=window.location.pathname.match(/industry\/([^\.\/]+)[\.\/]?/) || window.location.pathname.match(/solutions\/public.sector\/([^\.\/]+)[\.\/]?/);
            if (digitalData.pageInfo.areaInterest) { bert.addInterest("topic",digitalData.pageInfo.areaInterest.replace(/,.*/,"")); }
            if (digitalData.pageInfo.industry) { bert.addInterest("industry",digitalData.pageInfo.industry.replace(/,.*/,"")); }
            else if (is) { bert.addInterest('industry',is[1]); }
            if (digitalData.pageInfo.portfolio) { bert.addInterest("products",digitalData.pageInfo.portfolio.replace(/,.*/,"")); }
            else if (ps) { bert.addInterest('products',ps[1]); }
            if (digitalData.pageInfo.pillar) { bert.addInterest("pillar",digitalData.pageInfo.pillar.replace(/,.*/,"")); }
     }
     // source
        if (document.referrer && (!bert.profile.utm || !bert.profile.utm.source)) {
            var host=document.referrer.match(/\/\/([^\/\:]+)\/?/);
            if (host && host[1]) { bert.addInterest('utm','source',host[1]); }
        }
        if (document.referrer && (document.referrer.indexOf("myverizonenterprise")>0 || document.referrer.indexOf("enterpriseportal.verizon")>0)) {
            bert.addInterest('utm','customer','vec');
        }
        else if (document.referrer && document.referrer.indexOf("mb.verizonwireless")>0) {
            bert.addInterest('utm','customer','mb');
        }
     // previous page
        if (typeof(bert.profile.utm)!="undefined" && window.location.pathname!=bert.profile.utm.currentpage && "/support/"!=bert.profile.utm.currentpage ) {
         bert.addInterest("utm","previouspage",bert.profile.utm.currentpage);
        }
        bert.addInterest("utm","currentpage",window.location.pathname);
        if (typeof(digitalData)!="undefined" && window.location.pathname.indexOf("contact")<0) {
            var pt=digitalData.pageInfo.pageType;
            if (pt && pt.indexOf(":")>0) {
                bert.addInterest("utm","pagetype",pt.substr(0,pt.indexOf(":")));
            }
            if (bert.profile.utm && bert.profile.utm.campaign) {
                digitalData.visitorProfile.cmp = bert.cmp();
            }
        }
        if (document.cookie?.indexOf("prospectCartId")>=0) {
            bert.addInterest("utm","cart",(document.cookie.substring(document.cookie.indexOf("prospectCartId")+15).match(/^[0-9a-zA-Z]{16,32}/)||[])[0]);
        }

        // intent links
        document.addEventListener("gnavReady",function() {
            document.querySelectorAll(".gnav20-account-link").forEach(l => {
                l.addEventListener("click",() => {bert.mbci()},{once:true,passive:true})
            })
        });
        document.querySelectorAll("internet-lq-widget").forEach(l => {
            l.addEventListener("click",() => {bert.addInterest("intent","lq")},{once:true,passive:true})
        })
        document.querySelectorAll("a[data-intent]").forEach(l => {
            l.addEventListener("click",() => {bert.addInterest("intent",l.getAttribute("data-intent"))},{once:true,passive:true})
        })
    }
   
    // generate unique id
    this.newID=function() {
       var id=Math.floor(Math.random()*1048576).toString(16)+"-"+Math.floor(bert.now/3600000).toString(16);
       return id;
    }
   
   
    // remember something section,subsection[,value]
    this.addInterest=function(s,ss,v) {
     if (typeof(localStorage)!="undefined") {
      var section=JSON.parse(localStorage["bert"] || "{}");
      s=s.toLowerCase(); ss=ss.toLowerCase();
      if (!section[s]) { section[s]={}; }
      var l=(v ? v : Math.min(9,parseInt(section[s][ss]||0)+1));
      if (l>0) { for (i in section[s]) {
       if (section[s][i]>=l) { section[s][i]--; }
      } }
      section[s][ss]=l;
      bert.profile=section;
      localStorage["bert"]=JSON.stringify(section);
     }
    }

    // user may be existing customer
    this.mbci = function() {
        if (!bert.profile.intent?.login) {
            let h = {};
            try {
                const Merk = _svDataLayer?.trackIdentityDataLayer?.data;
                if (Merk.ecpdid) { h["x-verizon-ecpd"] = Merk.ecpdid; }
            } catch (e) {}
            fetch("/business/api/acct.js",{credentials: "same-origin",headers:h}).then(req => {
                req.json().then(data => {
                    if (data.epcd) { bert.addInterest("utm","epcd",data.epcd)}
                })
            });
        }
        bert.addInterest("intent","login");
    }
    
    // populate standard hidden fields
    this.mktoForm=function() {
        var tags=document.getElementsByTagName("INPUT");
        if (tags && tags.length) {
            var utm = bert.profile.utm || {};
            var fields={'mktoformoriginalPAGE':document.location.pathname}
            if (utm.source) { fields['mktoformlastSOURCE']=utm.source; }
            if (utm.medium) { fields['mktoformlastMEDIUM']=utm.medium; }
            if (utm.campaign) { fields['mktoformlastCAMPAIGN']=utm.campaign; }
            if (utm.sid) { fields['zCSSID']=utm.sid; }
            if (utm) { fields['zCSCMP']=bert.cmp(); }
   
            for (t=0;t<tags.length;t++) {
                if (tags[t].name && !tags[t].value && fields[tags[t].name]) {
                    tags[t].value=fields[tags[t].name];
                }
            }
        }
    }
   
    //is profile valuable
    this.valuable=function() {
        var v=0;
        for (var a in bert.profile) {
            for (var b in bert.profile[a]) {
                if (typeof(bert.profile[a][b])=="number") { v+=bert.profile[a][b]; } else { v++; }
            }
        }
        bert.value=v;
        return v;
    }

    // get UTMs or convert cmp to utm
    this.utm = function(cmp) {
        if (cmp && cmp.indexOf(":")>=0) {
            let utm={};
            if (cmp.match(/.+-([0-9_]+)$/)) {
                utm["dcmID"]=cmp.substring(cmp.lastIndexOf("-")+1);
                cmp=cmp.substring(0,cmp.lastIndexOf("-"));
            }
          var q=cmp.split(/\:/);
          if (q?.length>4 && cmp.match(/^20\d\d\:\d*\:/)) { // new style
            utm["date"]=q[0].substring(0,4)+"-"+q[1].substring(0,2);
            if (q[2]) { utm["segment"]=q[2].substring(0,4); }
            if (q[3]) { utm["region"]=q[3].substring(0,4); }
            if (q[4]) { utm["industry"]=q[4].substring(0,4); }
            if (q[5]) { utm["solution"]=q[5].substring(0,8); }
            if (q[6]) { utm["audience"]=q[6].substring(0,4); }
            if (q[7]) { utm["medium"]=q[7].substring(0,4); }
            if (q[8]) { utm["source"]=q[8].substring(0,16); }
            if (q[10]) { utm["campaign"]=q[10].substring(0,16); }
          }
          else if (q && q.length>1) {
           if (q[0] && q[0]!="NA") { utm["medium"]=q[0].substring(0,16); }
           if (q[1] && q[1]!="NA") { utm["source"]=q[1].substring(0,16); }
           if (q[2] && q[2]!="NA") { utm["audience"]=q[2].substring(0,16); }
           if (q[3] && q[3]!="NA") { utm["segment"]=q[3].substring(0,16); }
           if (q[4] && q[4]!="NA") { utm["campaign"]=q[4].substring(0,64); }
           if (q[5] && q[5]!="NA") { utm["content"]=q[5].substring(0,64); }
           if (q[6] && q[6]!="NA") { utm["term"]=q[6].substring(0,64); }
          } else {
             utm["content"]=cmp.substring(0,64);
          }
          return utm;
        } 
        return bert.profile?.utm;
    }
    
    // get cmp code
    this.cmp=function() {
        var utm=bert.profile.utm || {};
        var cmp=[];
        if (utm.date) { // new style
            cmp.push(utm.date.replace(/\-/,":"));
            cmp.push(utm.segment || "");
            cmp.push(utm.region || "");
            cmp.push(utm.industry || "");
            cmp.push(utm.solution || "");
            cmp.push(utm.audience || "");
            cmp.push(utm.medium || "");
            cmp.push(utm.source || "");
            cmp.push("");cmp.push(utm.campaign || "");
        } else {
            cmp.push(utm.medium || "");
            cmp.push(utm.source || "");
            cmp.push(utm.audience || "");
            cmp.push(utm.segment || "");
            cmp.push(utm.campaign || "");
            cmp.push(utm.content || "");
        }
        return cmp.join(":");
    }
   
   }
   
   // defer start
   if (typeof(Bert) != "undefined") {
       if (document.readyState !== "loading") { Bert.init(); }
       else { document.addEventListener("DOMContentLoaded",Bert.init,{once:true,passive:true});}
   }

