import{R as v,t as Ft,r as R,b as _t,a as ne,i as Ve,c as wt,e as ki,d as Ai,f as Pi,g as Ni,S as Ti,h as Ii,j as zi}from"./vendor.js";(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const a of document.querySelectorAll('link[rel="modulepreload"]'))o(a);new MutationObserver(a=>{for(const r of a)if(r.type==="childList")for(const l of r.addedNodes)l.tagName==="LINK"&&l.rel==="modulepreload"&&o(l)}).observe(document,{childList:!0,subtree:!0});function i(a){const r={};return a.integrity&&(r.integrity=a.integrity),a.referrerPolicy&&(r.referrerPolicy=a.referrerPolicy),a.crossOrigin==="use-credentials"?r.credentials="include":a.crossOrigin==="anonymous"?r.credentials="omit":r.credentials="same-origin",r}function o(a){if(a.ep)return;a.ep=!0;const r=i(a);fetch(a.href,r)}})();function x(e,t=!1){const i=Number(e);if(Number.isNaN(i))return"$0";const o=Math.abs(i);return t?o%1!==0?`$${o.toFixed(2)}`:`$${o}`:`$${Math.round(o)}`}function Xe(e,t=0){if(!e)return;const i=e.getBoundingClientRect().top+window.scrollY-t;window.scrollTo({top:i,behavior:"smooth"}),setTimeout(()=>{e==null||e.setAttribute("tabindex",0),e.focus({preventScroll:!0}),e.removeEventListener("focusout",o),e.addEventListener("focusout",o)},400);function o(){e==null||e.removeAttribute("tabindex",0)}}function B(e){for(var t=e+"=",i=document.cookie.split(";"),o=0;o<i.length;o++){for(var a=i[o];a.charAt(0)==" ";)a=a.substring(1,a.length);if(a.indexOf(t)==0)return a.substring(t.length,a.length)}return null}function Ei(){const e=document.documentElement;let t={};const i=()=>{const r=Object.values(t).reduce((s,c)=>s+c,0);e.style.setProperty("--header-height",`${r}px`);const l=new CustomEvent("headerHeightChange",{detail:{height:r}});document.body.dispatchEvent(l)},o=r=>{t={},r.forEach(l=>{const s=document.querySelector(l);s?(s.customId=l,t[l]=s.offsetHeight,a.observe(s)):console.warn(`Element not found: ${l}`)}),i()},a=new ResizeObserver(r=>{var l;for(const s of r){const c=(l=s.target)==null?void 0:l.customId;c&&t[c]!==s.contentRect.height&&(t[c]=s.contentRect.height,i())}});document.addEventListener("DOMContentLoaded",()=>{o(["#vz-gh20"])})}function Q(e){return Array.from({length:e})}function Ci(e,t){try{const i=JSON.stringify(t);localStorage.setItem(e,i)}catch(i){console.error(`Failed to save ${e} to ${type}Storage`,i)}}function Ee(e){try{const t=localStorage.getItem(e);return t?JSON.parse(t):null}catch(t){return console.error(`Failed to retrieve ${e} from ${type}Storage`,t),null}}function q(e){return e=Number(e),e>Math.floor(e)?e.toFixed(2):Math.floor(e)}function Hi(e=[],t=[]){if(e.length!==t.length)return!1;const i=[...e].sort(),o=[...t].sort();return i.every((a,r)=>a===o[r])}function le(e){var l;const t=window.vz_perks_data,i=t.perks[e];if(!i)return console.warn(`getDetailsMultiPerk: Missing data for perk info ID "${e}"`),[];const o=t["perks-pricing"][i.data.id],{groupBy:a}=o.data,r=a==null?void 0:a[0].split(",");return((l=r==null?void 0:r.map(s=>{var c,n,d,u,h,y,f,p;return{id:s,name:(u=(d=(n=(c=t.perks[s])==null?void 0:c.data)==null?void 0:n.titles)==null?void 0:d[1])==null?void 0:u.titleName,price:t["perks-pricing"][s].data.chargePrice,shared:(p=(f=(y=(h=t.perks[s])==null?void 0:h.data)==null?void 0:y.featuresDetailsList)==null?void 0:f.find(m=>{var g;return(g=m==null?void 0:m.displayName)==null?void 0:g.toLowerCase().includes("shareable")}))==null?void 0:p.shortDescription}}))==null?void 0:l.filter(s=>{var c,n;return(n=(c=window==null?void 0:window.vz_perks_data)==null?void 0:c.perks)==null?void 0:n[s==null?void 0:s.id]}))||[]}function j(e){var t,i;return window&&window.vz_perks_data&&window.vz_perks_data["perks-pricing"]&&((t=window.vz_perks_data["perks-pricing"])==null?void 0:t[e])&&((i=window.vz_perks_data["perks-pricing"])==null?void 0:i[e].data)||null}function D(e){return window&&window.vz_perks_data&&window.vz_perks_data.perks&&window.vz_perks_data.perks[e]&&window.vz_perks_data.perks[e].data||null}const xi=()=>window.navigator.userAgent.indexOf("MY_VZW_APP")>-1,Oi=()=>{const e=navigator.userAgent;return/Android|webOS|iPhone|BlackBerry|IEMobile|Opera Mini/i.test(e)||e.includes("MY_VZW_APP")},Vi=()=>{var t,i;let e=(i=(t=window.navigator)==null?void 0:t.userAgent)==null?void 0:i.toLowerCase();return e?e.includes("windows")&&e.includes("touch")||e.includes("tablet")||e.includes("ipad"):!1},Di=()=>xi()?"mfapp":Oi()?"mobile":Vi()?"tablet":"desktop",Mi=()=>window.navigator.userAgent.indexOf("VZW-MFA-IOS")>-1,Li=()=>window.navigator.userAgent.indexOf("VZW-MFA-ANDROID")>-1,Wi=()=>{let e="VZW-DOTCOM";const t=sessionStorage.getItem("isRPSFlow"),i=Di();return(i==="mobile"||i==="mfapp")&&(e="VZW-DOTCOM-MOB",t==="true"?e="VZW-RPS":Mi()?e="VZW-MFA-IOS":Li()&&(e="VZW-MFA-ANDROID")),B("channelId")||(document.cookie=`channelId=${e}; path=/`),sessionStorage.setItem("channelId",e),e};class Ui extends HTMLElement{static get observedAttributes(){return["data-state"]}constructor(){super(),this.state={initialized:!1,context:null,checked:!1}}connectedCallback(){this.state.context=this.dataset.controlToggle||null,this.state.checked=this.dataset.state==="true",this.render(),this.updateUI(),this.querySelector('input[type="checkbox"]').addEventListener("change",t=>{this.state.checked=t.target.checked,this.updateUI(),this.sendEvent()}),this.state.initialized=!0}attributeChangedCallback(t,i,o){this.state.initialized&&(this.state.checked=this.dataset.state==="true",this.updateUI(),this.sendEvent())}sendEvent(){this.dispatchEvent(new CustomEvent("control-toggle",{bubbles:!0,detail:{context:this.state.context,checked:this.state.checked,target:this}}))}render(){this.innerHTML=`
      <label class="switch" aria-label="Apply Auto Pay & paper free billing discount">
        <input type="checkbox" autocomplete="off" aria-pressed="${this.state.checked?"true":"false"}" ${this.state.checked?"checked":""}>
        <span class="slider"></span>
      </label>
    `}updateUI(){const t=this.querySelector('input[type="checkbox"]');t.checked=this.state.checked,t.setAttribute("aria-pressed",this.state.checked?"true":"false")}}customElements.define("lines-toggle",Ui);function Fi({plan:e}){const t=u=>e.sections.find(h=>h.id===u),i=t("monthlyPrice"),o=t("additionalCharges"),a=t("discountsBundles"),r=t("speed"),l=t("dataMonthly"),s=t("networkManagement"),c=t("privacy"),n=t("customerSupport"),d=()=>"providerSurcharges"in e?[]:[{label:"Provider Monthly Fees",level:"l1"},{notification:{showNotification:!0,disableFocus:!0,type:"warning",title:v.createElement("span",null," Please enter your full address to get provider monthly fees "),buttonData:[{"data-open-address-modal":"",children:v.createElement("span",null,"Enter address")}]}}];return v.createElement(v.Fragment,null,v.createElement(Ft.BroadbandLabel,{header:e==null?void 0:e.header,headerPrimitive:"h2",footer:e==null?void 0:e.header,provider:{providerNamePrimitive:"h3",planNamePrimitive:"h3",type:e==null?void 0:e.type,planName:e==null?void 0:e.planName,providerName:e==null?void 0:e.providerName},monthlyPrice:{header:i==null?void 0:i.header,headerVal:i==null?void 0:i.headerVal,description:"",data:i==null?void 0:i.data.map(u=>({label:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.label}}),value:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.value}})})),id:i==null?void 0:i.id},additionalCharges:{header:o==null?void 0:o.header,headerPrimitive:"h3",description:"",data:[...d(),...o==null?void 0:o.data.filter(u=>(u==null?void 0:u.taxSurchargeInd)!="T")].map(u=>({label:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.label}}),value:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.value}}),level:u.level,notification:u!=null&&u.notification?{...u.notification}:null})),id:o==null?void 0:o.id},discountsAndBundles:{header:a==null?void 0:a.header,headerPrimitive:"h3",description:v.createElement("div",{dangerouslySetInnerHTML:{__html:a==null?void 0:a.description}}),data:a==null?void 0:a.data.map(u=>({label:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.label}}),value:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.value}})})),id:a==null?void 0:a.id},speedsProvided:{header:r==null?void 0:r.header,headerPrimitive:"h3",description:"",data:r==null?void 0:r.data.map(u=>({label:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.label}}),value:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.value}})})),id:r==null?void 0:r.id},dataIncluded:{header:v.createElement("div",{dangerouslySetInnerHTML:{__html:l.header}}),headerPrimitive:"h3",headerVal:l==null?void 0:l.headerVal,description:"",data:l==null?void 0:l.data.map(u=>({label:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.label}}),value:v.createElement("div",{dangerouslySetInnerHTML:{__html:u.value}})}))},networkManagementLink:{header:s==null?void 0:s.header,headerPrimitive:"h3",description:v.createElement("div",{dangerouslySetInnerHTML:{__html:s==null?void 0:s.description}}),id:s==null?void 0:s.id},privacyLink:{header:c==null?void 0:c.header,headerPrimitive:"h3",description:v.createElement("div",{dangerouslySetInnerHTML:{__html:c==null?void 0:c.description}}),id:c==null?void 0:c.id},customerSupport:{header:n==null?void 0:n.header,headerPrimitive:"h3",description:v.createElement("div",null,v.createElement("a",{href:"https://www.verizon.com/support/contact-us",target:"_blank",rel:"noopener noreferrer"},"www.verizon.com/support/contact-us"),v.createElement("br",null),v.createElement("span",null,"800-922-0204")),id:n==null?void 0:n.id},footnote:e.planId}))}function Rt(){function e(n="[data-reveal-cmp]"){try{let h=function(y,f){let p;return function(...m){clearTimeout(p),p=setTimeout(()=>y.apply(this,m),f)}};const d=typeof n=="string"?document.querySelectorAll(n):n instanceof Element?[n]:[],u=t(d);return e.resizeListenerAdded||(window.addEventListener("resize",h(()=>{u.forEach(({events:y})=>y.initialize())},200)),e.resizeListenerAdded=!0),u.forEach(({events:y,container:f})=>{var g;const p=f.querySelector("[data-reveal-toggle]");f.revealAPI=y,y.initialize(),p&&(p._handleClick||(p._handleClick=()=>y.toggle()),p.removeEventListener("click",p._handleClick),p.addEventListener("click",p._handleClick)),f.addEventListener("refresh",()=>{y.initialize()});const m=[...((g=f.querySelector("[data-reveal-content]"))==null?void 0:g.children)||[]].at(-1);m&&new ResizeObserver(()=>{y.initialize()}).observe(m)}),u}catch(d){return console.error("Reveal initialization error:",d),null}}function t(n){return i(n).map(({config:u,container:h,content:y,controls:f})=>({events:c(u,h,y,f),config:u,content:y,container:h,controls:f}))}function i(n){try{const d=Array.from(n),u=[];return d.forEach(h=>{const y={defaultVisibleRows:1},f=h.querySelector("[data-reveal-content]"),p=h.querySelector("[data-reveal-controls]");if(!f)throw new Error("Missing [data-reveal-content] element inside reveal component.");const m=h.getAttribute("data-reveal-config");if(m){const g=JSON.parse(m);if(!(g!=null&&g.defaultVisibleRows))throw new Error("Reveal component config must include 'defaultVisibleRows'.");y.defaultVisibleRows=parseInt(g.defaultVisibleRows,10)||2}u.push({container:h,content:f,controls:p,config:y})}),u}catch(d){throw new Error(d.message)}}function o(n,d){const u=Array.from(d.children),h=[],y=new Set;for(const f of u){const p=f.getBoundingClientRect().top;if(y.has(p)||(y.add(p),h.push(f)),h.length>=n.defaultVisibleRows)break}return h}function a(n){var p,m,g;const d=(p=n[0])==null?void 0:p.offsetTop,u=(m=n.at(-1))==null?void 0:m.offsetTop,h=(g=n.at(-1))==null?void 0:g.offsetHeight,y=n.reduce((k,N)=>k+N.clientHeight,0),f=d+(y-h)-u;return y+Math.abs(f)}function r(n,d){const u=Array.from(d.children),h=d.closest("[data-reveal-cmp]"),y=new Set,p=parseFloat((h==null?void 0:h.style.getPropertyValue("--visibleFraction"))||0,10)>0;let m=0;for(const g of u){const k=g.getBoundingClientRect().top;y.has(k)||(y.add(k),m++),(p?m>=n.defaultVisibleRows:m>n.defaultVisibleRows)&&(g.setAttribute("aria-hidden","true"),g.querySelectorAll("button, a, input, select, textarea, [tabindex]").forEach(z=>{z.setAttribute("aria-hidden","true"),z.setAttribute("tabindex",-1)}))}}function l(n,d){n.querySelectorAll("[aria-hidden]").forEach(u=>{d?(u.setAttribute("aria-hidden","false"),u.removeAttribute("inert"),u.removeAttribute("tabindex")):(u.setAttribute("aria-hidden","true"),u.setAttribute("inert",""),u.setAttribute("tabindex",-1))})}function s(n,d){const u=o(n,d);if(u.length===0)throw new Error("No elements available to display in reveal.");const h=a(u)+"px";d.style.setProperty("--revealHeight",h)}function c(n,d,u,h){let y=!1;const f=[];function p(m){m?(d.dataset.revealOpenActive="true",y=!0):(delete d.dataset.revealOpenActive,u.scrollIntoView({block:"center",inline:"nearest"}),y=!1),f.forEach(g=>g({state:y,config:n,container:d,content:u,controls:h})),l(u,y)}return{toggle(){if("revealOpenActive"in d.dataset){p(!1);return}p(!y)},open(){p(!0)},close(){p(!1)},refresh(){d.dispatchEvent(new CustomEvent("refresh"))},initialize(){d.dataset.revealInitialized="true",s(n,u),r(n,u)},reset(){delete d.dataset.revealInitialized},updated(m){f.push(m)}}}return{init:e}}const b=document.querySelector("main")||document.body,Be={TEASER_PLAN_TAB:"teaser-plan-tab",POP_PLAN_TAB:"popular-plan-tab"},O={PLANS_POPULAR:"plans-popular",PLANS_TEASER:"plans-teaser"},C={UNLIMITED_ULTIMATE:"unlimited-ultimate",UNLIMITED_PLUS:"unlimited-plus",UNLIMITED_PLUS_V2:"unlimited-plus-v2",UNLIMITED_WELCOME:"unlimited-welcome"},ee={UNLIMITED_ULTIMATE:"74500",UNLIMITED_PLUS:"63217",UNLIMITED_WELCOME:"63215"},Gt={[C.UNLIMITED_ULTIMATE]:"unlimited-ultimate",[C.UNLIMITED_PLUS]:"unlimited-plus",[C.UNLIMITED_PLUS_V2]:"unlimited-plus",[C.UNLIMITED_WELCOME]:"unlimited-welcome"},re={[O.PLANS_TEASER]:{[C.UNLIMITED_ULTIMATE]:"Unlimited Ultimate",[C.UNLIMITED_PLUS]:"Unlimited Plus",[C.UNLIMITED_WELCOME]:"Unlimited Welcome"},[O.PLANS_POPULAR]:{[C.UNLIMITED_ULTIMATE]:"Unlimited Ultimate",[C.UNLIMITED_PLUS]:"Unlimited Plus",[C.UNLIMITED_PLUS_V2]:"Unlimited Plus"}},K={[O.PLANS_TEASER]:{[C.UNLIMITED_ULTIMATE]:"Unlimited Ultimate",[C.UNLIMITED_PLUS]:"Unlimited Plus",[C.UNLIMITED_WELCOME]:"Unlimited Welcome"},[O.PLANS_POPULAR]:{[C.UNLIMITED_ULTIMATE]:"Unlimited Ultimate with Disney +, Hulu, ESPN+ (With Ads)",[C.UNLIMITED_PLUS]:"Unlimited Plus with Apple One",[C.UNLIMITED_PLUS_V2]:"Unlimited Plus with Netflix & Max (With Ads)"}},Ce={[O.PLANS_POPULAR]:{[C.UNLIMITED_ULTIMATE]:"Disney +, Hulu, ESPN+(With Ads)",[C.UNLIMITED_PLUS]:"Apple One",[C.UNLIMITED_PLUS_V2]:"Netflix & Max (With Ads)"}},_e=["3369","2839","2677","3339"],qt={2622:"International roaming",3525:"Verizon Family Plus"},St={3525:"Verizon Family Plus is included with your Unlimited Ultimate plan. Sign up required after plan purchase."},X={3525:"3525"},be={2622:"2622",3525:"3525"},Ne={3339:{offer:"Save $9.99/mo"}},_i="/soe/digital/prospect/plansservice/nse/getFccPlanReference",Ri="/soe/digital/auth/plansservice/getFccPlanReference",Gi="/soe/digital/prospect/shippinghandlingservice/shipping/nse/typeahead",qi="/soe/digital/auth/shippinghandlingservice/shipping/nse/typeahead",Bi="/soe/digital/prospect/plansservice/nse/getPlansSurcharge",Yi="/soe/digital/auth/plansservice/nse/getPlansSurcharge";class $i extends EventTarget{}const J=new $i;function Xi({planID:e}){var h;const t=R.useRef(null),i=R.useRef(!1),[o,a]=R.useState(((h=window==null?void 0:window.broadbandPlans)==null?void 0:h.length)>0?window==null?void 0:window.broadbandPlans:[]),[r,l]=R.useState(!1),[s,c]=R.useState(null);function n(){var y,f;(f=(y=t.current)==null?void 0:y.revealAPI)==null||f.updated(p=>{i.current=p.state})}const d=()=>{b.dispatchEvent(new CustomEvent("broadBandLabelChange",{detail:{expanded:i.current}})),t.current.scrollIntoView({block:"center",inline:"nearest"})},u=({detail:y})=>{var f,p,m,g;y!=null&&y.expanded?(p=(f=t.current)==null?void 0:f.revealAPI)==null||p.open():(g=(m=t.current)==null?void 0:m.revealAPI)==null||g.close()};return R.useEffect(()=>{const y=()=>l(!0),f=m=>{a(m.detail||[]),l(!1)},p=m=>{c(m.detail||"Unknown error"),l(!1)};return J.addEventListener("fetching",y),J.addEventListener("fetched",f),J.addEventListener("error",p),J.addEventListener("labelChange",u),()=>{J.removeEventListener("fetching",y),J.removeEventListener("fetched",f),J.removeEventListener("error",p),J.removeEventListener("labelChange",u)}},[]),R.useEffect(()=>{const y=Rt();setTimeout(()=>{t.current&&y.init(t.current),n()},400)},[o]),r?v.createElement("div",{style:{minHeight:"28rem"},className:"vui:page-block vui:page-block--bleed vui:u-padding-top-6x vui:u-padding-bottom-12x vui:u-padding-top-16x@lg vui:u-padding-bottom-16x@lg  vui:u-padding-left-4x vui:u-padding-left-6x@lg vui:u-padding-right-4x vui:u-padding-right-6x@lg"},v.createElement(_t,{active:!0,fullscreen:!1,surface:"light"}),v.createElement("p",{className:"vui:text"},"Loading broadband plans...")):s||!o.length?"":v.createElement("div",{ref:t,className:"broadband-label-cpm vui:u-padding-3x vui:u-padding-bottom-1x vui:theme__surface vui:theme--light-primary vui:u-border-radius-300 has:shadow","data-reveal-cmp":!0,"data-reveal-config":'{"defaultVisibleRows": 1}',"data-reveal-visible":!0,style:{"--visibleFraction":"0.11"},...i.current&&{"data-reveal-open-active":"true"}},v.createElement("div",{"data-reveal-content":"",tabIndex:-1},o.filter(y=>e===(y==null?void 0:y.planCode)).map((y,f)=>v.createElement("div",{key:f},v.createElement(Fi,{plan:y})))),v.createElement("div",{"data-reveal-controls":!0,className:"vui:u-border-top"},v.createElement("div",{className:"vui:u-display-flex vui:u-justify-content-center vui:u-padding-top-3x"},v.createElement("button",{"data-reveal-toggle":!0,className:"vui:u-display-flex",onClick:d},v.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"28",height:"28",viewBox:"0 0 29 28",fill:"none"},v.createElement("path",{d:"M14.6003 20.3648L2.93359 8.6981L3.99656 7.63513L14.6003 18.2388L25.204 7.63513L26.2669 8.6981L14.6003 20.3648Z",fill:"black"}))))))}const kt=new Map,De=e=>t=>J.dispatchEvent(new CustomEvent(e,{detail:t.detail}));b.addEventListener("fetchingBroadband",De("fetching"));b.addEventListener("fetchedBroadband",De("fetched"));b.addEventListener("errorBroadband",De("error"));b.addEventListener("broadBandLabelChange",De("labelChange"));function Bt(){b.querySelectorAll("[data-broadband]").forEach(t=>{var a;let i=kt.get(t);i||(i=ne.createRoot(t),kt.set(t,i));const o=(a=t.dataset)==null?void 0:a.broadband;i.render(v.createElement(v.StrictMode,null,v.createElement(Xi,{planID:o})))})}Bt();document.body.addEventListener("castIsReady",function(){Bt()});const je={trigger:null},w={[O.PLANS_TEASER]:{lines:4,discount:{autopay:{num:10,state:!0,name:"Auto Pay and paper-free billing"}},plans:{[C.UNLIMITED_ULTIMATE]:{id:ee.UNLIMITED_ULTIMATE,prices:[95,87.5,73.33,65,66,66.67,67.14,67.5],perks:["2622","3525"]},[C.UNLIMITED_PLUS]:{id:ee.UNLIMITED_PLUS,prices:[80,72.5,58.33,50,51,51.67,52.14,52.5]},[C.UNLIMITED_WELCOME]:{id:ee.UNLIMITED_WELCOME,prices:[65,57.5,43.33,35,36,36.67,37.14,37.5]}}},[O.PLANS_POPULAR]:{lines:4,discount:{autopay:{num:10,state:!0,name:"Auto Pay and paper-free billing"}},plans:{[C.UNLIMITED_ULTIMATE]:{id:ee.UNLIMITED_ULTIMATE,prices:[95,87.5,73.33,65,66,66.67,67.14,67.5],perks:["3369","2622","3525"]},[C.UNLIMITED_PLUS]:{id:ee.UNLIMITED_PLUS,prices:[80,72.5,58.33,50,51,51.67,52.14,52.5],perks:["2678"]},[C.UNLIMITED_PLUS_V2]:{id:ee.UNLIMITED_PLUS,prices:[80,72.5,58.33,50,51,51.67,52.14,52.5],perks:["2839"]}}}};let ue="idle",ae={lines:null,skippedSignModal:!1,planTable:null,selectedPlan:null,hasSelectedPlan:!1,selectedPlanForLines:{}};const ji={states:{idle:{SELECT_PLAN(){return ae.lines===1?"savingIndvPlan":ae.hasSelectedPlan?"multiPlanLineSelection":"chooseAddingPlan"},EDIT_PLAN(){return"multiPlanLineSelection"}},signinWarning:{DISREGARD(){return"savingIndvPlan"},CANCEL(){return"idle"}},chooseAddingPlan:{ADD_ALL_LINES(){return ae.skippedSignModal=!0,"selectAllLines"},SELECT_LINES(){return ae.skippedSignModal=!0,"multiPlanLineSelection"},CANCEL(){return"idle"}},selectAllLines:{SAVE_ALL(){return"readyToGoPerks"}},multiPlanLineSelection:{CANCEL(){return ae.selectedPlanForLines={},"idle"},CONFIRM(){return"confirmSaving"}},confirmSaving:{CHOOSE_PERK(){return"readyToGoPerks"},SAVE_ALL(){return"idle"}},readyToGoPerks:{CONTINUE(){return"idle"}},savingIndvPlan:{SAVE_COMPLETE(){return"confirmSaving"}}}};function Ki(e){ae={...ae,...e}}function Qi(){return{...ae}}function Zi(e){const i=ji.states[ue][e];if(i){const o=i();o&&(ue=o,`${ue}${i}`)}else console.warn(`⚠️ No handler for event "${e}" in state "${ue}"`)}function Ji(){return{value:ue,matches:function(e){return ue===e}}}const H={send:Zi,updateContext:Ki,getContext:Qi,getState:Ji},P={OPENED:!1,SELECTED_PLANS:{planTable:O.PLANS_TEASER,plans:{}}};function eo({target:e}){if("selectionContinue"in e.dataset){no();return}if("selectLines"in e.dataset){ro();return}if("allLines"in e.dataset){ao();return}if("selectionEditLines"in e.dataset){Io();return}if("selectionSelect"in e.dataset){oo(e);return}if("selectionRemove"in e.dataset){io(e);return}if("selectionSwitch"in e.dataset){to(e);return}}function Yt(e){(e.key==="Escape"||e.key==="Esc")&&fe()}function fe(){const{backdrop:e,modal:t}=Z(),i=Ke();H.send("CANCEL"),t.removeEventListener("keyup",Yt),e.removeEventListener("click",fe),i.removeEventListener("click",fe)}function to(e){var o;const t=e.dataset.selectionSwitch,i=(o=e.dataset)==null?void 0:o.lineSelection;ko(t,i),Qe(i)}function io(e){var o;const t=e.dataset.selectionRemove,i=(o=e.dataset)==null?void 0:o.lineSelection;Ao(t,i),Qe(i)}function oo(e){var o;const t=e.dataset.selectionSelect,i=(o=e.dataset)==null?void 0:o.lineSelection;So(t,i),Qe(i)}function ao(){No()}function ro(){Po()}function no(){wo()}function lo(){return b.querySelector('[data-vui-modal-show="modal-plan-selection"]')}function Z(){const e=b.querySelector("[data-modal-plan-selection]"),t=e==null?void 0:e.querySelector(".vui\\:modal__content"),i=e==null?void 0:e.querySelector(".vui\\:modal__backdrop");return{modal:e,modalContent:t,backdrop:i}}function Ke(){return b.querySelector("[data-modal-plan-selection] [data-vui-modal-close]")}function so(){const e=Ke(),{modal:t,modalContent:i,backdrop:o}=Z();t.addEventListener("keyup",Yt),o.addEventListener("click",fe),e.addEventListener("click",fe),i.addEventListener("click",eo)}function $t(){Ke().dispatchEvent(new Event("click"))}function co(){const e=lo();e&&e.dispatchEvent(new Event("click"))}function uo(){var t;const{modalContent:e}=Z();(t=e.querySelector("[data-switch]").dataset)==null||delete t.switch}function po(e){var i;const{modalContent:t}=Z();(i=t==null?void 0:t.querySelector(`[data-line-selection="${e}"]`))==null||i.focus()}function mo(e){var n,d,u,h,y,f,p,m;const{modalContent:t}=Z();if(!t)return;const i=B("islogin")==="vzt",o=B("islogin")==="vzw",a=B("isFTRAuthenticated"),r=((d=(n=vzfed==null?void 0:vzfed.cast)==null?void 0:n.audience)==null?void 0:d.getAllMatchedAudiences())||[],l=(y=(h=(u=vzfed==null?void 0:vzfed.cast)==null?void 0:u.audience)==null?void 0:h.getAllMatchedAudiences())==null?void 0:y.includes("type_frontier"),s=(m=(p=(f=vzfed==null?void 0:vzfed.cast)==null?void 0:f.audience)==null?void 0:p.getAllMatchedAudiences())==null?void 0:m.includes("type_app_fios_mob_prospect"),c=r.length===0||o||i||a||l||s;t.innerHTML=`
    <h2 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x text-wrap-balance">
      Get <span class="vui:text--capitalize">${e||"Plan"}</span>
    </h2>
    ${c?'<div class="vui:u-padding-top-12x"></div>':`
      <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
        Already an existing customer? <a href="/digital/nsa/secure/ui/cpc/#/">Sign in</a> to add a new line or change your plan.
      </p>
      `}
    <button data-selection-continue class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
      Confirm
    </button>
  `}function ho(e){var n,d,u,h,y,f,p,m;const{modalContent:t}=Z();if(!t)return;const i=B("islogin")==="vzt",o=B("islogin")==="vzw",a=B("isFTRAuthenticated"),r=((d=(n=vzfed==null?void 0:vzfed.cast)==null?void 0:n.audience)==null?void 0:d.getAllMatchedAudiences())||[],l=(y=(h=(u=vzfed==null?void 0:vzfed.cast)==null?void 0:u.audience)==null?void 0:h.getAllMatchedAudiences())==null?void 0:y.includes("type_frontier"),s=(m=(p=(f=vzfed==null?void 0:vzfed.cast)==null?void 0:f.audience)==null?void 0:p.getAllMatchedAudiences())==null?void 0:m.includes("type_app_fios_mob_prospect"),c=r.length===0||i||o||a||l||s;t.innerHTML=`
    <h2 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x">
      Get <span class="vui:text--capitalize">${e||"Plan"}</span> for all lines or customize each one
    </h2>
     ${c?'<div class="vui:u-padding-top-12x"></div>':`
      <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
        Already an existing customer? <a href="/digital/nsa/secure/ui/cpc/#/">Sign in</a> to add a new line or change your plan.
      </p>
      `}
    <button data-all-lines class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
      Add to all lines
    </button>
    <button data-select-lines class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-large vui:u-displa-block vui:u-margin-bottom-0x vui:u-width-100">
      Add to select lines
    </button>
  `}function yo(e){const{modalContent:t}=Z(),i=t.querySelector("[data-selection-continue]");e?i.setAttribute("disabled",!0):i.removeAttribute("disabled")}function bo(e,t,i){var s;const{modalContent:o}=Z(),a=o.querySelector("#ineligibility-notification");if(!a){console.warn("[#ineligibility-notification] is not rendered in ineligibilityNotification func");return}let r="";O.PLANS_POPULAR!==t?r=`If you get <span class="vui-text vui:text--capitalize">${(s=K==null?void 0:K[t])==null?void 0:s[i]}</span> for a line with ${(e==null?void 0:e.displayName)||"perk"}, we’ll remove this perk since ${qt[e==null?void 0:e.id]||"it"} is already included in the plan.`:r=`If you get this popular plan for a line with ${(e==null?void 0:e.displayName)||"perk"}, we’ll remove this perk since it's already included in the plan.`,ne.createRoot(a).render(v.createElement(v.StrictMode,null,v.createElement(Ve,{type:"info",title:v.createElement("span",{className:"vui:text vui:text--body-medium",dangerouslySetInnerHTML:{__html:r}}),disableAnimation:!0,fullBleed:!0,inline:!1,disableFocus:!0})))}function fo({activeLineSelections:e,allLinesAssignedToPlan:t,allSelectedLinesMatchPlan:i,selectedPlanName:o}){const{modalContent:a}=Z();a&&(a.innerHTML=`
    <h2 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-6x text-wrap-balance">
      ${e.length>0?`Select which remaining lines you want on <span class="">${o||"Plan"}</span>`:`Select which lines you want on <span class="">${o||""}</span>`}
    </h2>
    <div id="ineligibility-notification" class="vui:u-border-radius-50 vui:u-overflow-hidden"></div>
    <div ${t?"":'data-switch=""'}>
      <ul data-list-plans-selection="" class="vui:u-display-flex vui:u-flex-column vui:u-padding-0x vui:u-margin-bottom-8x">
      </ul>
      ${!t&&!i?`
        <div class="vui:u-display-flex vui:u-justify-content-center">
          <button data-selection-edit-lines="" class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg vui:u-margin-bottom-8x">
            Edit other lines
          </button>
        </div>`:""}
    </div>
    <button disabled="" data-selection-continue class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
      Confirm
    </button>
  `)}function Xt({availableLines:e,selectedPlanForLines:t,selectedPlan:i,planTable:o,allSelectedLinesMatchPlan:a=!1}){const{modalContent:r}=Z(),l=r==null?void 0:r.querySelector("[data-list-plans-selection]");if(!l){console.warn("[data-list-plans-selection] is not rendered");return}l.innerHTML=e==null?void 0:e.map((s,c)=>{var u;const n=++c,d=(u=t[n])==null?void 0:u.plan;return`
      <li class="vui:u-margin-bottom-0x"> 
        ${d===i?` ${vo(o,i,n,d)}`:`
         ${d?`
          <div ${a?"":'data-switch="item"'} class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
            ${go(o,i,n,d)}
          </div>`:`<div class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
            <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">
              Line ${n}
            </span>
            <button aria-label="Select line ${n}" data-selection-select="${i}" data-line-selection="${n}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
              Select
            </button>
          </div>`}
        `}
      </li>
        `}).join("")}function vo(e,t,i,o){return e===O.PLANS_POPULAR?`
      <div class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
        <div class="vui:u-display-flex vui:u-flex-column">
          <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">
            Line ${i}
          </span>
          <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
          ${re[e][o]?re[e][o]:""}
          </span>
          <span class="vui:text vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
            ${Ce[e][o]?Ce[e][o]:""}
          </span>
        </div>
        <button aria-label="Remove line ${i}" data-selection-remove="${t}" data-line-selection="${i}" class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
          Remove
        </button>
      </div>
        `:`
    <div class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">
          Line ${i}
        </span>
        <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
          ${K[e][o]?K[e][o]:""}
        </span>
      </div>
      <button aria-label="Remove line ${i}" data-selection-remove="${t}" data-line-selection="${i}" class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
        Remove
      </button>
    </div>
  `}function go(e,t,i,o){return e===O.PLANS_POPULAR?`
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">
          Line ${i}
        </span>
        <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
          ${re[e][o]?re[e][o]:""}
        </span>
        <span class="vui:text vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
          ${Ce[e][o]?Ce[e][o]:""}
        </span>
      </div>
      <button data-selection-switch="${t}" data-line-selection="${i}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
        Switch
      </button>
      `:`
    <div class="vui:u-display-flex vui:u-flex-column">
      <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">
        Line ${i}
      </span>
      <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text vui:text--body-large@lg">
        ${K[e][o]?K[e][o]:""}
      </span>
    </div>
    <button data-selection-switch="${t}" data-line-selection="${i}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
      Switch
    </button>
  `}function wo(){const{planTable:e}=H.getContext(),{matches:t}=H.getState();w[e].lines===1&&!t("multiPlanLineSelection")?H.send("DISREGARD"):H.send("CONFIRM"),$t(),se(),b.dispatchEvent(new CustomEvent("closed-plan-selectecion"))}function So(e,t){if(!Gt[e]){console.warn("Error adding line","selectLine");return}Ze({plan:e,line:t,actionType:"select"})}function ko(e,t){Ze({plan:e,line:t,actionType:"switch"})}function Ao(e,t){Ze({plan:e,line:t,actionType:"remove"})}function Po(){H.send("SELECT_LINES"),jt()}function No(){H.send("ADD_ALL_LINES"),$t(),se(),b.dispatchEvent(new CustomEvent("closed-plan-selectecion"))}function To(){const e=H.getContext(),{matches:t}=H.getState(),i=K==null?void 0:K[e.planTable][e.selectedPlan];t("signinWarning")&&mo(i),t("chooseAddingPlan")&&ho(i),t("multiPlanLineSelection")&&jt(),co(),so()}function Io(){uo()}function Qe(e){po(e)}function jt(){const{selectedPlanForLines:e,activeLineSelections:t,allLinesAssignedToPlan:i,allSelectedLinesMatchPlan:o,selectedPlanName:a,availableLines:r,selectedPlan:l,planTable:s}=zo();fo({activeLineSelections:t,allLinesAssignedToPlan:i,allSelectedLinesMatchPlan:o,selectedPlanName:a}),Xt({availableLines:r,selectedPlanForLines:e,allSelectedLinesMatchPlan:o,selectedPlan:l,planTable:s});const c=Eo();c&&bo(c,s,l)}function zo(){const{planTable:e,selectedPlan:t,selectedPlanForLines:i}=H.getContext(),o=Q(w[e].lines),a=Object.values(i).filter(n=>(n==null?void 0:n.plan)!==void 0),r=a.length===0?o.length:a.length,l=o.length===r&&t,s=a.every(n=>(n==null?void 0:n.plan)===t),c=K[e][t];return{availableLines:o,activeLineSelections:a,selectedPlanForLines:i,allLinesAssignedToPlan:l,allSelectedLinesMatchPlan:s,selectedPlanName:c,selectedPlan:t,planTable:e}}function Eo(){const{planTable:e,selectedPlan:t,selectedPlanForLines:i}=H.getContext(),o=Object.values(i).reduce((r,l={})=>{var d,u,h;const{perks:s}=l,c=(h=(u=(d=w==null?void 0:w[e])==null?void 0:d.plans)==null?void 0:u[t])==null?void 0:h.perks;return(s==null?void 0:s.find(y=>c==null?void 0:c.includes(y)))||r},null);if(!o)return null;const a=D(o);return a||(console.warn(`messageIneligNotif logic: Missing data for perk info ID "${o}"`),null)}function Ze({plan:e,line:t,actionType:i}){const{selectedPlanForLines:o,planTable:a}=H.getContext(),r=Q(w[a].lines),l={...o};switch(i){case"remove":delete l[t];break;case"select":case"switch":l[t]=o[t]?{...o[t],plan:e}:{plan:e};break;default:console.warn(`Unknown actionType: ${i}`);return}H.updateContext({selectedPlanForLines:l}),Co(l,P.SELECTED_PLANS.plans),Xt({availableLines:r,selectedPlanForLines:l,selectedPlan:e,planTable:a})}function Co(e,t){const i=Object.keys(e),o=Object.keys(t),a=i.length===o.length&&i.every(r=>{var l,s;return((l=e[r])==null?void 0:l.plan)===((s=t[r])==null?void 0:s.plan)});yo(a)}function Ho(){To()}const ie={updateAllPLanSelection(e,t){P.SELECTED_PLANS.planTable=e,P.SELECTED_PLANS.plans=t},addPlanLineSelected(e,t){P.SELECTED_PLANS.planTable=e;const i=P.SELECTED_PLANS.plans;P.SELECTED_PLANS.plans={...i,...t}},addPerksToPlanLine(e,t){P.SELECTED_PLANS.plans[e]||(P.SELECTED_PLANS.plans[e]={}),P.SELECTED_PLANS.plans[e].perks=t?[...t]:[]},removePlanLineSelected(e){const t=P.SELECTED_PLANS.plans,i=Object.keys(t).map(Number),o=Math.max(...i);if(Number(e)===o){delete t[e];return}for(let a=Number(e);a<o;a++)t[a]=t[a+1];delete t[o]},clearAllLines(){P.SELECTED_PLANS.plans={}},clearSelectedTable(){P.SELECTED_PLANS.planTable=null}};let de="idle",He={selectedPerkForLines:{},planTable:null,hasPerkInLinesSelected:!1,currentPerkAutoAssign:!1,collapseLinesAutoAssign:!0};const xo={states:{idle:{SELECT_PERK(){return"multiPlanLineSelection"},EDIT_SELECTION(){return"multiPlanLineSelection"}},multiPlanLineSelection:{CANCEL(){return He.selectedPerkForLines={},"idle"},CONFIRM(){return"confirmSaving"}},confirmSaving:{SAVE_ALL(){return"idle"}}}};function Oo(e){He={...He,...e}}function Vo(){return{...He}}function Do(e){const i=xo.states[de][e];if(i){const o=i();o&&(de=o,`${de}${i}`)}else console.warn(`⚠️ No handler for event "${e}" in state "${de}"`)}function Mo(){return{value:de,matches:function(e){return de===e}}}const V={send:Do,updateContext:Oo,getContext:Vo,getState:Mo},{modalContent:G}=Le();function Lo(e){var t;(t=G==null?void 0:G.querySelector(`[data-line-selection="${e}"]`))==null||t.focus()}function Wo(){Je().dispatchEvent(new Event("click"))}function Uo(){const e=ra();e&&e.dispatchEvent(new Event("click"))}function Fo(e){const t=G.querySelector("[data-multi-perk-option][data-active]");t&&delete t.dataset.active;const i=G.querySelector(`[data-multi-perk-option="${e}"]`);i.dataset.active=""}function _o({selectedPerkForLines:e,perkID:t,hasAddedPerk:i,isAutoAssign:o,currentLines:a,planTable:r}){G.scrollTop=0;const{collapseLinesAutoAssign:l}=V.getContext(),s=le(t);if(!G)return;const c='<div id="perk-message" class="vui:u-margin-top-4x"></div>',n='<div id="moved-savings-container"></div>';G.innerHTML=`
    <div data-perk-tile-selection="${t}" ${i?'data-perk-state="added"':""}></div>
    
    ${c}

    ${n}

    ${(s==null?void 0:s.length)>1?Ko(s,t):""}
    
    <div class="vui:u-margin-bottom-12x vui:u-margin-top-4x">
      ${$o({selectedPerkForLines:e,perkID:t,isAutoAssign:o,currentLines:a,planTable:r,collapseLinesAutoAssign:l})}
    </div>
    <div data-perk-details="${t}" class="vui:u-position-relative"></div>
  `,Ro(t,e,a==null?void 0:a.length),setTimeout(()=>{const d=G.querySelector("[data-perk-tile-selection]"),u=d==null?void 0:d.querySelector("h2"),h=G.querySelector("#moved-savings-container");u&&(t==="2678"||t==="2679"?u.style.display="none":h&&(h.appendChild(u),u.style.marginTop="16px",u.style.marginBottom="8px"))},0)}function Ro(e,t,i){if(!["2621","2678","2677","2679"].includes(e))return;const a=G.querySelector("#perk-message");if(!a)return;if(e==="2678"||e==="2679"){if(!Object.values(t).some(h=>h.perks&&h.perks.includes("2677"))){a.innerHTML="";return}c(a,"","Since Apple One includes Apple Music, these perks can’t be added to the same line. To get this perk, switch the one you’ve already added.");return}if(e==="2677"){if(!Object.values(t).some(h=>h.perks&&(h.perks.includes("2678")||h.perks.includes("2679")))){a.innerHTML="";return}c(a,"","Since Apple One includes Apple Music, these perks can’t be added to the same line. To get this perk, switch the one you’ve already added.");return}if(Object.keys(t).filter(n=>t[n].plan==="unlimited-ultimate").length===0){a.innerHTML="";return}c(a,"You already get 200GB of Premium Unlimited Hotspot Data with your Unlimited Ultimate plan.","The additional 100GB of data from the Mobile Hotspot perk won’t be used until you’ve exceeded the 200GB of Premium Hotspot Data already included with your plan.");function c(n,d,u){ne.createRoot(n).render(v.createElement(v.StrictMode,null,v.createElement(Ve,{type:"info",title:v.createElement("span",{className:"vui:text vui:text--bold vui:text--body-small",dangerouslySetInnerHTML:{__html:d}}),subtitle:v.createElement("span",{className:"vui:text vui:text--body-small"},u),disableAnimation:!0,fullBleed:!0,inline:!1,hideCloseButton:!1,disableFocus:!0})))}}function Go(e){const t=Le().modalContent.querySelector("[data-perk-tile-selection]");e?t.dataset.perkState="added":delete t.dataset.perkState}function qo(){const e=b==null?void 0:b.querySelectorAll("[data-perk-pod]:not(data-perk-state)");e==null||e.forEach(t=>{var i;(i=t.dataset)==null||delete i.perkState})}function Bo(e,t){const i=b==null?void 0:b.querySelector(`[data-perk-pod="${e}"]`);if(!i){console.warn("Error setting state in plan,","perkTileEle");return}const o=i.querySelector("[data-perk-option-state]");if(!o){console.warn("Error: option state element not found");return}Yo(o,t,e),i.dataset.perkState="added"}function Yo(e,t,i){e.innerHTML=`
    <div class="plan-option__state vui:u-display-flex vui:u-align-items-center vui:u-gap-1x">
      <span class="plan-option__icon vui:u-display-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
          <g id="Icon/alternate-checkmark">
            <path id="Vector" d="M14.0002 26.2205C11.6927 26.2205 9.43709 25.5363 7.51852 24.2544C5.59994 22.9724 4.1046 21.1503 3.22157 19.0185C2.33855 16.8867 2.10751 14.5409 2.55767 12.2778C3.00783 10.0147 4.11898 7.93591 5.75059 6.3043C7.3822 4.67269 9.461 3.56154 11.7241 3.11138C13.9872 2.66122 16.333 2.89226 18.4648 3.77528C20.5966 4.65831 22.4187 6.15365 23.7006 8.07223C24.9826 9.9908 25.6668 12.2464 25.6668 14.5539C25.6632 17.647 24.4329 20.6123 22.2458 22.7995C20.0586 24.9866 17.0933 26.2169 14.0002 26.2205ZM14.0002 4.34539C11.9811 4.34539 10.0074 4.94411 8.32864 6.06583C6.64986 7.18755 5.34141 8.7819 4.56875 10.6473C3.7961 12.5126 3.59394 14.5652 3.98783 16.5455C4.38173 18.5257 5.35399 20.3447 6.78168 21.7724C8.20936 23.2001 10.0283 24.1723 12.0086 24.5662C13.9888 24.9601 16.0414 24.7579 17.9068 23.9853C19.7721 23.2126 21.3665 21.9042 22.4882 20.2254C23.6099 18.5466 24.2087 16.5729 24.2087 14.5539C24.2056 11.8474 23.1291 9.25257 21.2153 7.33877C19.3015 5.42497 16.7067 4.34844 14.0002 4.34535V4.34539ZM19.1204 11.7532L18.0895 10.7296L12.4752 16.3305L9.90805 13.7841L8.87968 14.8102L12.4777 18.3778L19.1204 11.7532Z" fill="#008331"></path>
          </g>
        </svg>
      </span>
      <span class="plan-option__label vui:text vui:text--bold vui:text--body-small">
         ${`Added (${t})`}
      </span>
      <button data-perk-option-edit="${i}" class="plan-option__edit-button vui:text--decoration-underline vui:text-link vui:text-link--standalone--small" >
        Edit
      </button>
    </div>
  `}function ke(e,t){const i=G.querySelector("[data-perk-select-continue]");if(!i)return;const{planTable:o,currentPerkID:a}=V.getContext(),r=o==="plans-popular",l=Object.values(t).some(n=>r&&a==="2677"&&n.plan==="unlimited-plus");Object.keys(e).every(n=>{var h,y;const d=((h=e[n])==null?void 0:h.perks)||[],u=((y=t[n])==null?void 0:y.perks)||[];return Hi(d,u)})||l?(i.setAttribute("disabled","true"),i.disabled=!0):(i.removeAttribute("disabled"),i.disabled=!1)}function $o({selectedPerkForLines:e,perkID:t,isAutoAssign:i,currentLines:o,planTable:a,collapseLinesAutoAssign:r}){if(G)return`
    <div>
      ${i?`
      <p class="vui:text vui:text--body-medium vui:text--body-large@lg vui:u-margin-bottom-8x">
        Share with up to 5 other people.
      </p>`:""}
      <ul data-list-line-selection="" class="vui:u-display-flex vui:u-flex-column vui:u-padding-0x vui:u-margin-bottom-8x">
      ${Kt({selectedPerkForLines:e,perkID:t,isAutoAssign:i,currentLines:o,planTable:a,collapseLinesAutoAssign:r})}
      </ul>
      <div class="vui:u-display-flex vui:u-justify-content-center">
        <button data-perk-add-more-lines="" class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg vui:u-margin-bottom-8x">
          Add to more lines
        </button>
      </div>
    </div>
    <button disabled data-perk-select-continue class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
      Confirm
    </button>
  `}function Me({currentSelectionLines:e,perkID:t,isAutoAssign:i,currentLines:o,emptyLineCurrentPerk:a,planTable:r,collapseLinesAutoAssign:l}){const s=G.querySelector("[data-list-line-selection]");s.innerHTML=Kt({selectedPerkForLines:e,perkID:t,isAutoAssign:i,currentLines:o,collapseLinesAutoAssign:l,emptyLineCurrentPerk:a,planTable:r})}function Xo(e){var o;const t=G.querySelector("[data-perk-tile-price]"),i=(o=j(e))==null?void 0:o.chargePrice;t.innerHTML=`Add for ${x(i)}/mo per line`}function Kt({selectedPerkForLines:e,perkID:t,isAutoAssign:i,currentLines:o,planTable:a,collapseLinesAutoAssign:r=!0,emptyLineCurrentPerk:l=!1}){if(!t){console.warn("perkID is undefined, listLineSelection");return}const s=Object.values(e).some(d=>d==null?void 0:d.ineligible),c=le(t),n=P.SELECTED_PLANS.plans;return o==null?void 0:o.map((d,u)=>{var W,U,Y,bt,ft,vt,gt;const h=u+1,y=((W=e[h])==null?void 0:W.perks)||[],f=(U=e[h])==null?void 0:U.ineligible,p=((Y=n[h])==null?void 0:Y.perks)||[],m=y.includes(t),g=(bt=n[h])==null?void 0:bt.plan,k=p.includes("2677"),N=p.includes("2678")||p.includes("2679"),S=a==="plans-popular"&&t==="2677"&&g==="unlimited-plus",I=t==="2677"&&N&&!m,A=(t==="2678"||t==="2679")&&k&&!m,E=(y==null?void 0:y.find(Pe=>c.some(Si=>Si.id===Pe)))||null;let L=!m&&E!==null||I||A,T=E;T||(I?T=p.find(Pe=>Pe==="2678"||Pe==="2679"):A&&(T="2677"));const M=(vt=Qo(c,a,(ft=e[h])==null?void 0:ft.plan))==null?void 0:vt.id,F=M!=null;return jo({line:h,isSelected:l?!1:m,isAutoAssign:l?!1:i,collapseLinesAutoAssign:r,ineligible:f,planName:(gt=e[h])==null?void 0:gt.plan,hasIneligiblePerks:s,planTable:a,perkID:t,hasSwitch:L,perkIDFoundToSwitch:T,hasSwitchIneligible:F,perkIneligibleFoundToSwitch:M,isAppleMusicConflictOnPopularTab:S})}).join("")}const jo=({line:e,isSelected:t,isAutoAssign:i,ineligible:o,collapseLinesAutoAssign:a,planName:r,hasIneligiblePerks:l,planTable:s,perkID:c,hasSwitch:n,perkIDFoundToSwitch:d,perkIneligibleFoundToSwitch:u,hasSwitchIneligible:h,isAppleMusicConflictOnPopularTab:y})=>{if(y)return`
      <li class="vui:u-margin-bottom-0x"> 
        <div class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-gap-12x vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
          <div class="vui:u-display-flex vui:u-flex-column">
            <span class="vui:text vui:text--body-medium vui:text--body-large@lg">Line ${e}</span>
            <span class="vui:text vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
              Apple music included with apple one in your plan selection
            </span>
          </div>
          <div></div> </div>
      </li>
    `;var f=D(c),p=n?D(d):null,m=h?D(u):null,g=Re(m),k=Re(f),N=Re(p);const z=a&&i?'data-add-more="item"':"",S=h&&t?`
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">Line ${e}</span>
        <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          ${k||""}
        </span>
      </div>
    `:t?`
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">Line ${e}</span>
        <span class="vui:text ${o&&c in X?"":"vui:text--capitalize"} vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          ${o&&c in X?St[c]:k||""}
        </span>
      </div>
      <div> 
        <button data-perk-remove="${c}" data-line-selection="${e}" class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
          Remove
        </button>
      </div>`:`
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg">Line ${e}</span>
        ${o&&!n?` 
        <span class="vui:text vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          ${St[c]||`<span class="vui:text vui:text--capitalize">
            ${qt[c]||k}
          </span> 
          included with your plan selection`}
        </span>
        `:o&&n?`
        <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          ${N}
        </span> 
        `:h?`
        <span class="vui:text vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          <span class="vui:text vui:text--capitalize">
            ${g}
          </span> 
          included with your plan selection
        </span> 
        `:n?`
        <span class="vui:text vui:text--capitalize vui:theme--fg-secondary vui:text--body-medium vui:text--body-large@lg">
          ${N}
        </span> 
        `:""}
      </div>
      <div> 
      ${o&&!n&&!(c in X)?"":o&&n?`
        <button data-perk-switch="${d}" data-perk-current="${c}"  data-line-selection="${e}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
          Switch
        </button>
        `:h?`
        <button data-perk-switch="${u}" data-perk-current="${c}"  data-line-selection="${e}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
          Switch
        </button>
        `:n?`  
        <button data-perk-switch="${d}" data-perk-current="${c}" data-line-selection="${e}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
          Switch
        </button>
        `:`  
        <button data-perk-select="${c}" data-line-selection="${e}" class="vui:button vui:button--secondary vui:text vui:text--bold vui:text--body-small vui:text--body-medium@lg vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
          Add
        </button>`}
      </div>
    `;return`
    <li class="vui:u-margin-bottom-0x"> 
      <div ${l||t?"":z} class="vui:u-display-flex vui:u-align-items-center vui:u-justify-content-between vui:u-gap-12x vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-border-bottom vui:u-border-color-low-contrast">
        ${S}
      </div>
    </li>
  `};function Ko(e,t){return`
    <h2 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-8x vui:u-margin-top-4x">
      Select an option
    </h2>
    <div data-multi-perk-options class="vui:u-margin-bottom-12x">
      ${e.map((i,o)=>`
          <button data-multi-perk-option="${i.id}" ${i.id===t?"data-active":""} class="vui:u-width-100 vui:u-display-flex vui:u-justify-content-between vui:u-align-items-center vui:button vui:button--secondary vui:u-border-radius-100 vui:u-padding-top-3x vui:u-padding-bottom-3x  vui:u-padding-left-3x vui:u-padding-right-3x ${o!=e.length-1?"vui:u-margin-bottom-3x":""}">
            <span class="vui:text vui:text--start"> 
              <span class="vui:u-display-block vui:text vui:text--bold vui:text--body-medium">${i.name} subscription</span>
              <span class="vui:u-display-block vui:text vui:text--micro vui:theme--fg-low-contrast" style="--vui-theme-color-element-lowcontrast: #6F7171">${i.shared||""}</span>
            </span>
            <span class="vui:text vui:text--body-medium">
              ${x(i.price)}/mo
            </span>
          </button>
        `).join("")}
    </div>
  `}function Qo(e,t,i){const o=w[t].plans;return e==null?void 0:e.find(a=>{var l;const r=((l=o[i])==null?void 0:l.perks)||[];return r==null?void 0:r.includes(a.id)})}function Re(e){var o;if(!e)return null;var t=e.displayName,i=(o=e==null?void 0:e.titles[1])==null?void 0:o.titleName;return i&&i!==t?`${t} <span class="vui:text vui:text--bold">${i}</span>`:t}function Zo(){G.querySelector("[data-list-line-selection]").dataset.fullLines=""}function Qt(e){(e.key==="Escape"||e.key==="Esc")&&ve()}function ve(){const{backdrop:e,modal:t}=Le(),i=Je();V.send("CANCEL"),t.removeEventListener("keyup",Qt),e.removeEventListener("click",ve),i.removeEventListener("click",ve)}function Jo({target:e}){if(e.dataset.perkSelect){aa(e.dataset.perkSelect,e.dataset.lineSelection);return}if(e.dataset.perkSwitch&&e.dataset.perkCurrent){ea(e.dataset.perkSwitch,e.dataset.perkCurrent,e.dataset.lineSelection);return}if(e.dataset.perkRemove){oa(e.dataset.perkRemove,e.dataset.lineSelection);return}if("perkSelectContinue"in e.dataset&&(V.send("CONFIRM"),ma(),Wo()),"perkAddMoreLines"in e.dataset&&ia(),e.dataset.multiPerkOption){ta(e.dataset.multiPerkOption);return}}function ea(e,t,i){if(!e&&!t&&!i){console.warn("handlePerkSwitch: Missing perk or line IDs. Skipping action.");return}ua(e,t,i),et(i)}function ta(e){if(!e){console.warn("handleMultiPerk: Missing perk ID. Skipping action.");return}da(e)}function ia(){la()}function oa(e,t){if(!e&&!t){console.warn("handlePerkRemove: Missing perk or line IDs. Skipping action.");return}ca(e,t),et(t)}function aa(e,t){if(!e&&!t){console.warn("handlePerkSelect: Missing perk or line IDs. Skipping action.");return}sa(e,t),et(t)}function ra(){return b.querySelector('[data-vui-modal-show="modal-perk-selection"]')}function Le(){const e=b.querySelector("[data-modal-perk-selection]"),t=e==null?void 0:e.querySelector(".vui\\:modal__content"),i=e==null?void 0:e.querySelector(".vui\\:modal__backdrop");return{modal:e,modalContent:t,backdrop:i}}function Je(){return b.querySelector("[data-modal-perk-selection] [data-vui-modal-close]")}function na(){const{modalContent:e,backdrop:t,modal:i}=Le(),o=Je();i.addEventListener("keyup",Qt),t.addEventListener("click",ve),o.addEventListener("click",ve),e.addEventListener("click",Jo)}function la(){V.updateContext({collapseLinesAutoAssign:!1}),Zo()}function sa(e,t){var c,n;const{selectedPerkForLines:i,currentPerkAutoAssign:o,planTable:a,collapseLinesAutoAssign:r}=V.getContext(),l=Q(((c=w[a])==null?void 0:c.lines)||0),s={...i,[t]:{...i[t],perks:(n=i[t])!=null&&n.perks?[...i[t].perks,e]:[e]}};V.updateContext({selectedPerkForLines:s}),ke(s,P.SELECTED_PLANS.plans),Me({currentSelectionLines:s,perkID:e,isAutoAssign:o,collapseLinesAutoAssign:r,currentLines:l,planTable:a})}function ca(e,t){var h,y,f;const{selectedPerkForLines:i,currentPerkAutoAssign:o,planTable:a}=V.getContext(),r=Q(((h=w[a])==null?void 0:h.lines)||0),l=((y=P.SELECTED_PLANS.plans[t])==null?void 0:y.perks)||[],s=((f=i[t])==null?void 0:f.perks)||[],c=(e==="2678"||e==="2679")&&l.includes("2677")||e==="2677"&&(l.includes("2678")||l.includes("2679"));let n;c?n=l:n=s.filter(p=>p!==e);const d={...i,[t]:{...i[t],perks:n}};V.updateContext({selectedPerkForLines:d}),ke(d,P.SELECTED_PLANS.plans);const u=xe(d,e);Me({currentSelectionLines:d,perkID:e,isAutoAssign:o,currentLines:r,collapseLinesAutoAssign:V.getContext().collapseLinesAutoAssign,emptyLineCurrentPerk:!u,planTable:a})}function ua(e,t,i){var h,y,f,p,m,g;const{selectedPerkForLines:o,currentPerkAutoAssign:a,planTable:r}=V.getContext(),l=Q(((h=w[r])==null?void 0:h.lines)||0),s=((y=o[i])==null?void 0:y.perks)||[],c=(f=o[i])==null?void 0:f.plan;let n=s.map(k=>k===e?t:k);n.length===0?n=[t]:s.includes(e)||n.push(t);const d=(g=(m=(p=w==null?void 0:w[r])==null?void 0:p.plans)==null?void 0:m[c])==null?void 0:g.perks,u={...o,[i]:{...o[i],perks:n==null?void 0:n.filter(k=>!(d!=null&&d.includes(k)))}};V.updateContext({selectedPerkForLines:u}),ke(u,P.SELECTED_PLANS.plans),Me({currentSelectionLines:u,perkID:t,isAutoAssign:a,currentLines:l,planTable:r})}function da(e){var l;Fo(e),Zt(e);const{selectedPerkForLines:t,currentPerkAutoAssign:i,planTable:o}=V.getContext(),a=Q(((l=w[o])==null?void 0:l.lines)||0),r=xe(t,e);ke(t,P.SELECTED_PLANS.plans),Me({currentSelectionLines:t,perkID:e,isAutoAssign:i,currentLines:a,emptyLineCurrentPerk:!r,planTable:o}),Go(xe(P.SELECTED_PLANS.plans,e)),Xo(e)}function pa(e){ya(e),ba(e),na()}function ma(){const{matches:e}=V.getState();e("confirmSaving")&&wa()}async function Ae(){qo();const e=P.SELECTED_PLANS.plans;ha(e)}function ha(e){var i;const t=ga(e);(i=Object.entries(t))==null||i.forEach(([o,a])=>{Bo(o,a)})}function et(e){Lo(e)}function ya(e){const t=P.SELECTED_PLANS.plans,i=Object.values(t).some(r=>{const l=r.perks||[];return e==="2677"&&(l.includes("2678")||l.includes("2679"))||(e==="2678"||e==="2679")&&l.includes("2677")});V.updateContext({selectedPerkForLines:{...P.SELECTED_PLANS.plans},planTable:P.SELECTED_PLANS.planTable,currentPerkID:e,hasPerkInLinesSelected:!1,currentPerkAutoAssign:_e==null?void 0:_e.find(r=>r==e),collapseLinesAutoAssign:!i});const{selectedPerkForLines:o,currentPerkAutoAssign:a}=V.getContext();if(Zt(e),xe(o,e)){V.updateContext({hasPerkInLinesSelected:!0});return}a&&va(e)}function ba(e){fa(e)}function fa(e){var l;const{selectedPerkForLines:t,hasPerkInLinesSelected:i,currentPerkAutoAssign:o,planTable:a}=V.getContext(),r=Q(((l=w[a])==null?void 0:l.lines)||0);Uo(),_o({selectedPerkForLines:t,perkID:e,hasAddedPerk:i,isAutoAssign:o,currentLines:r,planTable:a}),ke(t,P.SELECTED_PLANS.plans)}function va(e){var d,u,h;const{selectedPerkForLines:t}=V.getContext(),i=(d=Object.entries(t))==null?void 0:d.find(([y,f])=>(f==null?void 0:f.plan)!==void 0),o=i==null?void 0:i[0],a=i==null?void 0:i[1],r=a==null?void 0:a.ineligible,l=(a==null?void 0:a.perks)||[],s=e==="2677"&&(l.includes("2678")||l.includes("2679"))||(e==="2678"||e==="2679")&&l.includes("2677");if(r||s)return;const c=o||1,n={...t,[c]:{...t[c],perks:((h=(u=t[c])==null?void 0:u.perks)==null?void 0:h.length)>0?[...t[c].perks,e]:[e]}};V.updateContext({selectedPerkForLines:n})}function ga(e){var i;const t={};return(i=Object.keys(e))==null||i.forEach(o=>{var r;const a=(r=e[o])==null?void 0:r.perks;a&&a.forEach(l=>{var c;const s=le(l);if(s.length>1){const n=(c=s[0])==null?void 0:c.id;t[n]=(t[n]??0)+1}else t[l]=(t[l]??0)+1})}),t}function xe(e,t){return Object.values(e).some(i=>{var o;return Array.isArray(i==null?void 0:i.perks)&&((o=i==null?void 0:i.perks)==null?void 0:o.includes(t))})}function wa(){const{selectedPerkForLines:e}=V.getContext();Object.keys(e).forEach(t=>{var o;const i=(o=e[t])==null?void 0:o.perks;ie.addPerksToPlanLine(t,i)}),V.send("SAVE_ALL"),b.dispatchEvent(new CustomEvent("selected-perk")),Ae()}function Zt(e){var r;const{selectedPerkForLines:t,planTable:i}=V.getContext(),o=w[i].plans,a=Object.fromEntries((r=Object.entries(t))==null?void 0:r.map(([l,s])=>{var n;const c=((n=o[s==null?void 0:s.plan])==null?void 0:n.perks)||[];return[l,{...s,ineligible:c.includes(e)}]}));V.updateContext({selectedPerkForLines:a})}function Sa(){return b.querySelector('[data-vui-modal-show="modal-warning-lines"]')}function ka(e){return b.querySelector(`[data-control-lines="${e}"]`)}function We(){const e=b.querySelector("[data-modal-warning-lines]"),t=e==null?void 0:e.querySelector(".vui\\:modal__content"),i=e==null?void 0:e.querySelector(".vui\\:modal__backdrop");return{modal:e,modalContent:t,backdrop:i}}function tt(){return b.querySelector("[data-modal-warning-lines] [data-vui-modal-close]")}function Aa(){const{modalContent:e,backdrop:t,modal:i}=We(),o=tt();i.addEventListener("keyup",Jt),t.addEventListener("click",ge),o.addEventListener("click",ge),e.addEventListener("click",Pa)}function Pa({target:e}){if("removingLineContinue"in e.dataset){Na(e.dataset.removingLineContinue||null);return}}function Na(e){Ea(e)}function Jt(e){(e.key==="Escape"||e.key==="Esc")&&ge()}function ge(){const{backdrop:e,modal:t}=We(),i=tt();t.removeEventListener("keyup",Jt),e.removeEventListener("click",ge),i.removeEventListener("click",ge)}function Ta(){tt().dispatchEvent(new Event("click"))}function At(){const e=Sa();e&&e.dispatchEvent(new Event("click"))}function Ia(){const{modalContent:e}=We();e&&(e.innerHTML=`
    <div>
      <h3 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x">
        Are you sure you want to <br> remove a line?
      </h3>
      <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
        This action will remove your last line and can't be undone.
      </p>
      <div class="vui:u-display-flex vui:u-flex-column vui:u-flex-row@lg vui:u-justify-content-center@lg vui:u-gap-3x">
        <button data-removing-line-continue class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
          I'm sure
        </button>
        <button data-vui-modal-hide class="vui:button vui:button--secondary vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
          Cancel
        </button>
      </div>
    </div>
    `)}function za(e){const{modalContent:t}=We();t&&(t.innerHTML=`
  <div>
    <h3 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x">
     Are you sure you want to remove this line?
    </h3>
    <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
      This can’t be undone.
    </p>
    <div class="vui:u-display-flex vui:u-flex-column vui:u-flex-row@lg vui:u-justify-content-center@lg vui:u-gap-3x">
      <button data-removing-line-continue="${parseInt(e)}" class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
        I'm sure
      </button>
      <button data-vui-modal-close data-vui-modal-hide class="vui:button vui:button--secondary vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
        Cancel
      </button>
    </div>
  </div>
  `)}function Ea(e){const t=P.SELECTED_PLANS.planTable,i=e||w[t].lines;ie.removePlanLineSelected(i),rt()||ie.clearAllLines(),b.dispatchEvent(new CustomEvent("selected-plan")),b.dispatchEvent(new CustomEvent("selected-perk")),Ha(),ce(),Ae(),Ta()}function Ca({lineToRemove:e=null}={}){xa(e),Aa()}function Ha(){const e=P.SELECTED_PLANS.planTable,t=ka(e),i=w[e].lines===1?1:w[e].lines-1;t.setAttribute("data-count",i)}function xa(e){if(e){At(),za(e);return}At(),Ia()}function ei(e){Ca(e)}function Oa(e,t){const i=e.querySelector("[data-plan-price-disclaimer]");i&&(i.innerText=`per line for ${t} ${t===1?"line":"lines"} w/ offer credit`)}function Va(e,t){const i=e.querySelector('[data-plan-price-value="full"]');i&&(i.innerText=x(t,!0))}function Da(e,t){const i=e.querySelector('[data-plan-price-value="base"]');i&&(i.innerText=x(t,!0))}function Ma(){const e=P.SELECTED_PLANS.planTable,t=b==null?void 0:b.querySelectorAll(`[data-plans="${e}"] [data-plan]:not(data-plan-state)`);t==null||t.forEach(i=>{var o;(o=i.dataset)==null||delete o.planState})}function La({planTableSelected:e,planSelected:t,count:i,totalLines:o}){const a=b==null?void 0:b.querySelector(`[data-plans="${e}"] [data-plan="${t}"]`);if(!a){console.warn("Error setting state in plan,",e);return}if(!a.querySelector("[data-plan-option-state]")){console.warn("Error: option state element not found");return}Wa({planEle:a,planSelected:t,count:i,totalLines:o}),a.dataset.planState="added"}function Wa({planEle:e,count:t,planSelected:i,totalLines:o}){const a=e.querySelector("[data-plan-option-state]");if(!a){console.warn("Error renderPlanOptAddState: option state element not found");return}a.innerHTML=`
    <div class="plan-option__state vui:u-display-flex vui:u-align-items-center vui:u-gap-1x">
      <span class="plan-option__icon vui:u-display-flex">
        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
          <g id="Icon/alternate-checkmark">
            <path id="Vector" d="M14.0002 26.2205C11.6927 26.2205 9.43709 25.5363 7.51852 24.2544C5.59994 22.9724 4.1046 21.1503 3.22157 19.0185C2.33855 16.8867 2.10751 14.5409 2.55767 12.2778C3.00783 10.0147 4.11898 7.93591 5.75059 6.3043C7.3822 4.67269 9.461 3.56154 11.7241 3.11138C13.9872 2.66122 16.333 2.89226 18.4648 3.77528C20.5966 4.65831 22.4187 6.15365 23.7006 8.07223C24.9826 9.9908 25.6668 12.2464 25.6668 14.5539C25.6632 17.647 24.4329 20.6123 22.2458 22.7995C20.0586 24.9866 17.0933 26.2169 14.0002 26.2205ZM14.0002 4.34539C11.9811 4.34539 10.0074 4.94411 8.32864 6.06583C6.64986 7.18755 5.34141 8.7819 4.56875 10.6473C3.7961 12.5126 3.59394 14.5652 3.98783 16.5455C4.38173 18.5257 5.35399 20.3447 6.78168 21.7724C8.20936 23.2001 10.0283 24.1723 12.0086 24.5662C13.9888 24.9601 16.0414 24.7579 17.9068 23.9853C19.7721 23.2126 21.3665 21.9042 22.4882 20.2254C23.6099 18.5466 24.2087 16.5729 24.2087 14.5539C24.2056 11.8474 23.1291 9.25257 21.2153 7.33877C19.3015 5.42497 16.7067 4.34844 14.0002 4.34535V4.34539ZM19.1204 11.7532L18.0895 10.7296L12.4752 16.3305L9.90805 13.7841L8.87968 14.8102L12.4777 18.3778L19.1204 11.7532Z" fill="#008331"></path>
          </g>
        </svg>
      </span>
      ${o>1?`<span class="plan-option__label vui:text vui:text--bold vui:text--body-small">
         ${`Added (${t})`}
      </span>`:`<span class="plan-option__label vui:text vui:text--bold vui:text--body-small">
        Added
      </span>`}
    ${o>1?`<button aria-label="Edit lines" data-plan-option-edit="${i}" class="plan-option__edit-button vui:text--decoration-underline vui:text-link vui:text-link--standalone--small" >
        Edit
      </button>
      `:""}
    </div>
  `}function Ua(){const e=b.querySelector('[data-scroll-target="perk-section-heading"]');Xe(e)}function Fa(e){const t=e.querySelector("[data-plan-option-select]"),i=e.querySelector("[data-plan-option-edit]");setTimeout(()=>{var o;i&&t&&((o=getComputedStyle(t))==null?void 0:o.display)==="none"?i==null||i.focus():t==null||t.focus()},600)}function it(e,t,i=null){var u,h,y;const o=(u=e.plans)==null?void 0:u[t];if(!o)return null;const a=e.lines,r=e.discount,l=o.prices[a-1]||o.prices.at(-1),s=(h=window.vz_perks_data)==null?void 0:h["perks-pricing"];let c=0;s&&((y=o==null?void 0:o.perks)!=null&&y.length)&&(c=n(i||o.perks));function n(f){return f==null?void 0:f.reduce((p,m)=>{var k,N;if(m in be||m in X)return p;const g=parseInt((N=(k=s[m])==null?void 0:k.data)==null?void 0:N.chargePrice);return p+(isNaN(g)?0:g)},0)}const d=Object.values(r).filter(f=>f.state).reduce((f,p)=>f+p.num,0);return Math.max(0,l+c-d)}function ot(e,t){var s;const i=(s=e.plans)==null?void 0:s[t];if(!i)return null;const o=e.discount,a=Object.values(o).filter(c=>c.state).reduce((c,n)=>c+n.num,0),r=e.lines,l=i.prices[r-1]||i.prices.at(-1);return Math.max(0,l-a)}function _a(e,t){var r;const i=(r=e.plans)==null?void 0:r[t];if(!i)return null;const o=e.lines;return i.prices[o-1]||i.prices.at(-1)}function Ra(e,t){var r;if(!((r=e.plans)==null?void 0:r[t]))return null;const o=e.discount,a=Object.values(o).filter(l=>l.state).reduce((l,s)=>l+s.num,0);return Math.max(0,a)}const te={updateLinePlan(e,t){w[e].lines=t},updateDiscount(e,t,i){const o=w[e].discount;o[t].state=i},updatePlansInfo(e,t,i){var o,a,r,l,s,c;(a=(o=w==null?void 0:w[e])==null?void 0:o.plans)==null||a[t],{...(r=w[e])==null?void 0:r.plans[t]},(s=(l=w==null?void 0:w[e])==null?void 0:l.plans)!=null&&s[t]&&(w[e].plans[t]={...(c=w[e])==null?void 0:c.plans[t],...i})},updateLines(e,t){w[e].lines=t}};function ti(){or()}function Ga(e,t,i){te.updateDiscount(e,t,i),at(e)}function qa(e,t){var o;((o=Object.keys(P.SELECTED_PLANS.plans))==null?void 0:o.length)>t||(te.updateLinePlan(e,t),at(e),ce())}function Ba(e){var o,a,r;if(!P.SELECTED_PLANS.planTable)return;const t=P.SELECTED_PLANS.plans,i=w[P.SELECTED_PLANS.planTable].lines;(t[i]&&((o=t[i])!=null&&o.plan)||((r=(a=t[i])==null?void 0:a.perks)==null?void 0:r.length)>0)&&(e(),ei())}function at(e){const{pricingElements:t}=pe==null?void 0:pe[e],i=w[e];t==null||t.forEach(o=>{var s;const a=((s=o.dataset)==null?void 0:s.planPrice)||null,r=ot(i,a),l=it(i,a);Oa(o,i.lines),Da(o,r),Va(o,l)})}function Ya(e,t,i){H.updateContext({lines:w[e].lines,selectedPlan:t,planTable:e,hasSelectedPlan:rt()||!1,selectedPlanForLines:{...P.SELECTED_PLANS.plans}}),je.trigger=i,H.send("SELECT_PLAN"),se()}function $a(e,t,i){H.updateContext({lines:w[e].lines,selectedPlan:t,planTable:e,selectedPlanForLines:{...P.SELECTED_PLANS.plans}}),je.trigger=i,H.send("EDIT_PLAN"),se()}function se(){const{matches:e}=H.getState();if(e("savingIndvPlan")){tr();return}if(e("signinWarning")||e("chooseAddingPlan")||e("multiPlanLineSelection")){Ho();return}if(e("confirmSaving")){Za(),Ja();return}if(e("selectAllLines")){er();return}if(e("readyToGoPerks")){ir();return}}async function ce(){Ma();const e=P.SELECTED_PLANS.planTable,t=P.SELECTED_PLANS.plans;Ka(e,t)}function rt(){var e;return(e=Object.values(P.SELECTED_PLANS.plans))==null?void 0:e.some(t=>t==null?void 0:t.plan)}function Xa(){const{planTable:e}=H.getContext(),t=P.SELECTED_PLANS.plans;Object.keys(t).filter(o=>{var a;return((a=t[o])==null?void 0:a.plan)!==void 0}).length!==w[e].lines&&Fa(je.trigger)}function ja(){var t,i;(((i=(t=vzfed==null?void 0:vzfed.cast)==null?void 0:t.audience)==null?void 0:i.getAllMatchedAudiences())||[]).forEach(o=>{if(o==="type_frontier"){te.updatePlansInfo(O.PLANS_TEASER,C.UNLIMITED_ULTIMATE,{prices:[80,65,65,60,62,63.33,64.29,65]}),te.updatePlansInfo(O.PLANS_TEASER,C.UNLIMITED_PLUS,{prices:[65,50,50,45,47,48.33,49.29,50]}),te.updatePlansInfo(O.PLANS_TEASER,C.UNLIMITED_WELCOME,{prices:[50,35,35,30,32,33.33,34.29,35]}),te.updatePlansInfo(O.PLANS_POPULAR,C.UNLIMITED_ULTIMATE,{prices:[80,65,65,60,62,63.33,64.29,65]}),te.updatePlansInfo(O.PLANS_POPULAR,C.UNLIMITED_PLUS,{prices:[65,50,50,45,47,48.33,49.29,50]}),te.updatePlansInfo(O.PLANS_POPULAR,C.UNLIMITED_PLUS_V2,{prices:[65,50,50,45,47,48.33,49.29,50]});return}})}function Ka(e,t){Qa(e,t).forEach(o=>{La(o)})}function Qa(e,t){var r;const i=[],o={},a=Q((r=w[e])==null?void 0:r.lines);return a==null||a.forEach((l,s)=>{var d,u;const c=s+1,n=(d=t[c])==null?void 0:d.plan;n&&(o[n]=(o[n]??0)+1,i.push({planTableSelected:e,planSelected:n,count:o[n],totalLines:((u=w[e])==null?void 0:u.lines)||1}))}),i}function Za(){const{selectedPlanForLines:e,planTable:t}=H.getContext(),i=P.SELECTED_PLANS.plans,o=Object.entries(e).map(([a,r={}])=>{var u,h,y,f;const{plan:l,perks:s}=r;if(!s&&!l)return[a,{...r}];const c=(u=i[a])==null?void 0:u.plan;if(l===c)return[a,{...r}];const n=(f=(y=(h=w==null?void 0:w[t])==null?void 0:h.plans)==null?void 0:y[l])==null?void 0:f.perks,d=s==null?void 0:s.filter(p=>!(n!=null&&n.includes(p)));return[a,{...r,perks:d}]});H.updateContext({selectedPlanForLines:Object.fromEntries(o)})}function Ja(){const{planTable:e,selectedPlanForLines:t}=H.getContext();ie.updateAllPLanSelection(e,t),rt()||ie.clearAllLines(),ce(),b.dispatchEvent(new CustomEvent("selected-plan"));const i=P.SELECTED_PLANS.plans;Object.keys(i).filter(a=>{var r;return((r=i[a])==null?void 0:r.plan)!==void 0}).length===w[e].lines&&!P.OPENED?H.send("CHOOSE_PERK"):H.send("SAVE_ALL"),se()}function er(){var o;const{lines:e,planTable:t,selectedPlan:i}=H.getContext();(o=Q(e))==null||o.forEach((a,r)=>{const l=++r;ie.addPlanLineSelected(t,{[l]:{plan:i}})}),ce(),b.dispatchEvent(new CustomEvent("selected-plan")),H.send("SAVE_ALL"),se()}function tr(){const{selectedPlan:e,selectedPlanForLines:t}=H.getContext();if(!Gt[e]){console.warn("Error adding line","selectLine");return}H.updateContext({skippedSignModal:!0,selectedPlanForLines:{1:t!=null&&t[1]?{...t==null?void 0:t[1],plan:e}:{plan:e}}}),ce(),b.dispatchEvent(new CustomEvent("selected-plan")),H.send("SAVE_COMPLETE"),se()}function ir(){Ua(),H.send("CONTINUE")}function or(){Object.entries(pe).forEach(([e])=>{at(e)})}function ar(){ti()}function Ge(){ti()}function rr({detail:e}){var r;const{context:t,checked:i,target:o}=e,a=(r=o.dataset)==null?void 0:r.discount;if(!a){console.warn("no discount applied");return}Ga(t,a,i)}function nr({detail:e}){const{context:t,count:i}=e;qa(t,i)}function lr(e){e.target.closest('[data-control-lines-action="decrease"]')&&Ba(()=>{e.stopImmediatePropagation()})}function sr(){Xa()}function ii({target:e}){dr(e),ur(e)}function cr(){ja()}function ur(e){const t="planOptionEdit"in e.dataset?e:null;if(!t)return;const i=t.closest("[data-plan-option]"),o=i==null?void 0:i.dataset.planOption,a=t==null?void 0:t.dataset.planOptionEdit;$a(o,a,i)}function dr(e){const t="planOptionSelect"in e.dataset?e:null;if(!t)return;const i=t.closest("[data-plan-option]"),o=i==null?void 0:i.dataset.planOption,a=t==null?void 0:t.dataset.planOptionSelect;Ya(o,a,i)}const pe={};function pr(){b.addEventListener("control-lines",nr),b.addEventListener("control-toggle",rr),b.addEventListener("closed-plan-selectecion",sr),b.addEventListener("perk-data-loaded",ar),document.addEventListener("DOMContentLoaded",Ge),b.addEventListener("click",lr,!0),document.body.addEventListener("castIsReady",function(){cr(),Nt(),Ge(),Pt()}),(function(){Nt(),Ge(),Pt()})()}function Pt(){Object.entries(pe).forEach(([e,{root:t}])=>{t==null||t.addEventListener("click",ii,!0)})}function Nt(){var e;(e=b.querySelectorAll("[data-plans]"))==null||e.forEach(t=>{const i=(t==null?void 0:t.dataset.plans)||null;pe[i]={root:t,pricingElements:t.querySelectorAll("[data-plan-price]")}})}(function(){pr()})();class mr extends HTMLElement{static get observedAttributes(){return["data-count"]}constructor(){super(),this.state={initialized:!1,context:null,count:1,maxCount:8,minCount:1}}connectedCallback(){this.state.context=this.dataset.controlLines||null,this.state.count=parseInt(this.dataset.count||"1",10),this.state.maxCount=parseInt(this.dataset.maxCount||"8",10),this.state.minCount=parseInt(this.dataset.minCount||"1",10),this.render(),this.updateUI(),this.addEventListener("click",t=>this.handleClick(t)),this.state.initialized=!0}attributeChangedCallback(t,i,o){this.state.initialized&&(this.state.count=parseInt(this.dataset.count||"1",10),this.updateUI(),this.sendEvent())}sendEvent(){this.dispatchEvent(new CustomEvent("control-lines",{bubbles:!0,detail:{...this.state,target:this}}))}handleClick(t){const i=t.target.closest("button");if(i){if(i.dataset.controlLinesAction==="increase"&&this.state.count<this.state.maxCount)this.state.count++;else if(i.dataset.controlLinesAction==="decrease"&&this.state.count>this.state.minCount)this.state.count--;else return;this.updateUI(),this.sendEvent()}}render(){this.innerHTML=`
      <button aria-label="Decrease quantity from ${this.state.count}" data-control-lines-action="decrease">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
          <path d="M2.38379 6H12.3838" stroke="black" />
        </svg>
      </button>
      <span data-control-lines-value="value" class="vui:text vui:text--body-medium">${this.state.count}</span>
      <span id="screen-reader-only" aria-live="polite" class="vui:screen-reader-only">Total quantity: ${this.state.count}</span>
      <button aria-label="Increase quantity from ${this.state.count}" data-control-lines-action="increase">
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" viewBox="0 0 14 12" fill="none">
          <path d="M7.5 1V11" stroke="black" />
          <path d="M2.5 6H12.5" stroke="black" />
        </svg>
      </button>
    `}updateUI(){const t=this.querySelector('[data-control-lines-value="value"]'),i=this.querySelector("#screen-reader-only"),o=this.querySelector('[data-control-lines-action="increase"]'),a=this.querySelector('[data-control-lines-action="decrease"]');t.textContent=this.state.count,i.textContent="Total quantity: "+this.state.count,o.ariaLabel="Increase quantity from "+this.state.count,a.ariaLabel="Decrease quantity from "+this.state.count,o.disabled=this.state.count===this.state.maxCount,a.disabled=this.state.count===this.state.minCount}}customElements.define("lines-counter",mr);function oi(){var e;try{let t=!1;const i=Ee("vz-user-address");t=i!=null,(e=b.querySelectorAll("[data-open-address-modal]"))==null||e.forEach(o=>{o.innerText=t?`${i==null?void 0:i.dispstr}, ${i==null?void 0:i.muni}, ${i==null?void 0:i.state} ${i==null?void 0:i.zip}`:"Enter address"})}catch(t){console.error("Error updating address buttons:",t)}}document.addEventListener("DOMContentLoaded",()=>{oi()});b.addEventListener("user-address",()=>{oi()});function Tt(e){return e=="check"?v.createElement(wt,{name:"checkmark-alt",size:"medium",surface:"light"}):v.createElement(wt,{name:"minus",size:"medium",surface:"light"})}function hr(e,t){return v.createElement("div",null,v.createElement("span",{className:"vui:text vui:text--bold vui:text--title-2xsmall vui:u-display-block"},e),v.createElement("span",{className:"vui:text vui:text--body-medium vui:u-display-block"},x(t,!0),"/mo"))}function yr({tableConfg:e}){return v.createElement(Ft.Table,{...e})}function br({posterImage:e,videoUrl:t}){const i=R.useRef(null);return R.useEffect(()=>{function o(){i.current&&i.current.pause()}return b.addEventListener("vui-close-modal",o),()=>{b.removeEventListener("vui-close-modal",o)}},[]),v.createElement(ki,{ref:i,source:{src:t},preload:"metadata",showBorder:!1,aspectRatio:"16:9",poster:e,loop:!1,layout:"compact"})}function fr(e){e.innerHTML=`
   <div class="loading-overlay" id="loading">
      <div class="spinner">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  `}function vr(e,{displayName:t,backgroundImage:i,savingPrice:o,chargePrice:a}){e.innerHTML=`
    <div class="vui:u-display-flex vui:u-align-items-center vui:u-gap-3x vui:u-margin-bottom-8x">
      <picture class="vui:u-border-radius-100 vui:u-overflow-hidden">
        <img src="https://ss7.vzw.com/is/image/VerizonWireless/${i}-1x1-small?scl=1&fmt=webp-alpha" alt="" loading="lazy" style="width: 64px;height: 64px;">
      </picture>
      <div>
        <h3
          class="vui:text vui:text--bold vui:text--body-medium vui:text--body-large@lg vui:u-margin-bottom-1x text-wrap-balance">
          ${t}
        </h3>
        <div data-perk-tile-added>
          <div class="perk-option__state vui:u-display-flex vui:u-align-items-center vui:u-gap-1x">
            <span class="perk-option__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
                <g id="Icon/alternate-checkmark">
                  <path id="Vector"
                    d="M14.0002 26.2205C11.6927 26.2205 9.43709 25.5363 7.51852 24.2544C5.59994 22.9724 4.1046 21.1503 3.22157 19.0185C2.33855 16.8867 2.10751 14.5409 2.55767 12.2778C3.00783 10.0147 4.11898 7.93591 5.75059 6.3043C7.3822 4.67269 9.461 3.56154 11.7241 3.11138C13.9872 2.66122 16.333 2.89226 18.4648 3.77528C20.5966 4.65831 22.4187 6.15365 23.7006 8.07223C24.9826 9.9908 25.6668 12.2464 25.6668 14.5539C25.6632 17.647 24.4329 20.6123 22.2458 22.7995C20.0586 24.9866 17.0933 26.2169 14.0002 26.2205ZM14.0002 4.34539C11.9811 4.34539 10.0074 4.94411 8.32864 6.06583C6.64986 7.18755 5.34141 8.7819 4.56875 10.6473C3.7961 12.5126 3.59394 14.5652 3.98783 16.5455C4.38173 18.5257 5.35399 20.3447 6.78168 21.7724C8.20936 23.2001 10.0283 24.1723 12.0086 24.5662C13.9888 24.9601 16.0414 24.7579 17.9068 23.9853C19.7721 23.2126 21.3665 21.9042 22.4882 20.2254C23.6099 18.5466 24.2087 16.5729 24.2087 14.5539C24.2056 11.8474 23.1291 9.25257 21.2153 7.33877C19.3015 5.42497 16.7067 4.34844 14.0002 4.34535V4.34539ZM19.1204 11.7532L18.0895 10.7296L12.4752 16.3305L9.90805 13.7841L8.87968 14.8102L12.4777 18.3778L19.1204 11.7532Z"
                    fill="#008331"></path>
                </g>
              </svg>
            </span>
            <span class="vui:text vui:text--bold vui:text--body-small">
              Added
            </span>
          </div>
        </div>
        <span data-perk-tile-price class="vui:text vui:text--body-small">Add for ${x(a)}/mo per line</span>
      </div>
    </div>
    <h2 data-perk-tile-selection="saving"  class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-display-block vui:u-margin-bottom-4x">You’ll save ${x(o,!0)}/mo with us</h2>
  `}function gr(e,{displayName:t,chargePrice:i,savingPrice:o,backgroundImage:a}){e.innerHTML=`
     <div class="plan-tile__info vui:u-display-flex vui:u-flex-column vui:u-justify-content-between vui:u-gap-1x vui:u-gap-2x@lg">
      <div class="vui:u-padding-right-3x">
        <h3
          class="vui:text vui:text--bold vui:text--body-medium vui:text--title-2xsmall@lg vui:u-margin-bottom-1x text-wrap-balance">
          ${t}
        </h3>
      </div>
      <div class="vui:u-display-flex vui:u-flex-column">
        <span class="vui:text vui:text--body-small vui:text--body-medium@lg">
          ${x(i)}/mo
        </span>
        <span class="plan-tile__saving vui:text vui:text--body-small vui:text--body-medium@lg">
          Save ${x(o,!0)}/mo
        </span>
      </div>
    </div>
    <picture class="plan-tile__image">
      <img src="https://ss7.vzw.com/is/image/VerizonWireless/${a}-1x1-small?scl=1&fmt=webp-alpha" alt="" loading="lazy">
    </picture>
  `}function wr(e,{displayName:t,chargePrice:i,perkOriginalPrice:o}){e.innerHTML=`
      <h4 class="vui:text vui:text--body-large vui:text--body-large@lg text-wrap-balance">
        ${t}
      </h4>
      <span class="vui:text vui:text--body-medium vui:text--body-large@lg  vui:text--end@lg vui:text--nowrap">
        <span class="vui:screen-reader-only">
          previous price ${x(o,!0)}/line and actual price ${x(i,!0)}/line
        </span>
        <span aria-hidden="true" class="vui:text vui:text--micro vui:text--decoration-line-through vui:theme--fg-secondary">
          ${x(o,!0)}/line
        </span> 
        <span aria-hidden="true">
        ${x(i,!0)}/line
        </span>
      </span>
  `}function Sr(e,{savingPrice:t}){e.innerText=`${x(t,!0)}/line`}function kr(e,{featuresDetailsList:t,posterImage:i,videoUrl:o,termsAndConditions:a,importInfo:r,table:l,savingPerkBox:s,faqList:c}){e.innerHTML=`
    <h4 class="vui:text vui:text--bold vui:text--title-small vui:u-display-block vui:u-margin-bottom-6x">
      What’s included
    </h4>
    <div class="perk-table"></div>
    <div class="vui:u-margin-bottom-8x">
      ${ai(t,"list")}
    </div>
     <div class="vui:u-border vui:u-border-color-low-contrast vui:u-border-radius-300 vui:u-padding-4x vui:u-margin-bottom-8x">
      <h3 class="vui:text vui:text--title-2xsmall vui:text--bold vui:u-padding-bottom-3x">
        Verizon savings
      </h3>
      ${Tr(s)}
    </div>

    <div class="video-player vui:u-margin-bottom-8x"></div>

    <details class="vui:accordion vui:u-border-color-low-contrast vui:u-border-bottom">
      <summary class="vui:accordion__summary" role="button">
        ${r==null?void 0:r.displayName}
      </summary>
      <div class="vui:accordion__content">
        ${r==null?void 0:r.description}
      </div>
    </details>
    <details class="vui:accordion vui:u-margin-bottom-8x">
      <summary class="vui:accordion__summary" role="button">
        Terms & Conditions
      </summary>
      <div class="vui:accordion__content">
        ${a||""}
      </div>
    </details>
      <h2
        class="vui:text vui:text--bold vui:text--title-small vui:u-margin-bottom-6x ">
        Have questions? <br>
        We’ve got answers.
      </h2>
      ${Nr(c)}
  `,ri(e,{posterImage:i,videoUrl:o}),ni(e,l)}function Ar(e,{displayName:t,backgroundImage:i,perkLogo:o,perkTextAppearance:a,featuresDetailsList:r,posterImage:l,videoUrl:s,termsAndConditions:c,importInfo:n,table:d}){e.innerHTML=`
    <h4 class="vui:text vui:text--bold vui:text--title-xsmall vui:text--title-small@lg vui:u-display-block vui:u-margin-bottom-8x">
      Included perks:
    </h4>
    <div class="perk-banner vui:theme__surface ${a!="Light"?"vui:theme--light-primary":"vui:theme--dark-primary"} vui:u-position-relative vui:u-overflow-hidden vui:u-border-radius-300 vui:u-margin-bottom-8x">
      <span class="vui:theme--fg-primary vui:u-position-absolute vui:u-left-0 vui:text vui:text--title-2xsmall vui:text--title-xsmall@lg vui:u-display-block text-wrap-balance">
        ${t}
      </span>
       <img src="https://ss7.vzw.com/is/image/VerizonWireless/${i}-2x1-default?scl=1&amp;fmt=webp-alpha" alt="" loading="lazy">
       <img class="logo vui:u-position-absolute vui:u-bottom-0 vui:u-left-0" src="${o}?scl=1&amp;fmt=webp-alpha" alt="" loading="lazy">
    </div>
    <div class="perk-table vui:u-margin-bottom-8x"></div>
    <div class="vui:u-margin-bottom-8x">
      ${ai(r)}
    </div>
    <div class="video-player vui:u-margin-bottom-8x"></div>
    <details class="vui:accordion vui:u-border-color-low-contrast vui:u-border-bottom">
      <summary class="vui:accordion__summary" role="button">
        ${n==null?void 0:n.displayName}
      </summary>
      <div class="vui:accordion__content">
        ${n==null?void 0:n.description}
      </div>
    </details>
    <details class="vui:accordion">
      <summary class="vui:accordion__summary" role="button">
        Terms & Conditions
      </summary>
      <div class="vui:accordion__content">
        ${c||""}
      </div>
    </details>
  `,ri(e,{posterImage:l,videoUrl:s}),ni(e,d)}function Pr(e,{id:t,displayName:i,chargePrice:o,savingPrice:a,backgroundImage:r}){const l=function(s){var c,n,d;return Ne[s]?`
      <span class="plan-tile__saving vui:text vui:text--body-small vui:text--body-medium@lg vui:theme--fg-secondary">
        ${((c=Ne[s])==null?void 0:c.offer)||""}
        ${(n=Ne[s])!=null&&n.modalElement?`<button data-vui-modal-show="${((d=Ne[s])==null?void 0:d.modalElement)||""}" class="vui:text--decoration-underline vui:text-link vui:text-link--standalone--small">Details</button>`:""}
      </span>
    `:`
      <span class="plan-tile__saving vui:text vui:text--body-small vui:text--body-medium@lg vui:theme--fg-secondary">
        Save ${x(a,!0)}/mo
      </span>
      </div>
      `};e.innerHTML=`
    <div>
      <picture>
        <img class="vui:u-border-radius-300" src="https://ss7.vzw.com/is/image/VerizonWireless/${r}-1x1-small?scl=1&fmt=webp-alpha" loading="eager" alt="">
      </picture>
      <div class="perk-tile-header vui:u-margin-top-4x vui:u-margin-bottom-4x vui:u-top-0">
        <h3 class="vui:text vui:text--bold vui:text--title-xsmall@lg vui:text--title-xsmall@lg vui:u-margin-bottom-1x">
          ${i}
        </h3>
      </div>
      <div class="perk-tile-price vui:u-display-flex vui:u-flex-column vui:u-margin-top-4x vui:u-margin-bottom-4x">
        <span class="vui:text vui:text--body-medium vui:text--body-large@lg">${x(o)}/mo</span>
        ${l(t)}
    </div>
    <div class="perk-option" data-perk-option="">
      <button aria-label="Add ${i}" data-perk-option-select="${t}" class="perk-option__button vui:text vui:text--bold vui:text--body-small vui:text--body-large@lg vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
        Add
      </button>
      <div data-perk-option-state="">
        <div class="perk-option__state vui:u-display-flex vui:u-align-items-center vui:u-gap-1x">
          <span class="perk-option__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="28" height="29" viewBox="0 0 28 29" fill="none">
              <g id="Icon/alternate-checkmark">
                <path id="Vector"
                  d="M14.0002 26.2205C11.6927 26.2205 9.43709 25.5363 7.51852 24.2544C5.59994 22.9724 4.1046 21.1503 3.22157 19.0185C2.33855 16.8867 2.10751 14.5409 2.55767 12.2778C3.00783 10.0147 4.11898 7.93591 5.75059 6.3043C7.3822 4.67269 9.461 3.56154 11.7241 3.11138C13.9872 2.66122 16.333 2.89226 18.4648 3.77528C20.5966 4.65831 22.4187 6.15365 23.7006 8.07223C24.9826 9.9908 25.6668 12.2464 25.6668 14.5539C25.6632 17.647 24.4329 20.6123 22.2458 22.7995C20.0586 24.9866 17.0933 26.2169 14.0002 26.2205ZM14.0002 4.34539C11.9811 4.34539 10.0074 4.94411 8.32864 6.06583C6.64986 7.18755 5.34141 8.7819 4.56875 10.6473C3.7961 12.5126 3.59394 14.5652 3.98783 16.5455C4.38173 18.5257 5.35399 20.3447 6.78168 21.7724C8.20936 23.2001 10.0283 24.1723 12.0086 24.5662C13.9888 24.9601 16.0414 24.7579 17.9068 23.9853C19.7721 23.2126 21.3665 21.9042 22.4882 20.2254C23.6099 18.5466 24.2087 16.5729 24.2087 14.5539C24.2056 11.8474 23.1291 9.25257 21.2153 7.33877C19.3015 5.42497 16.7067 4.34844 14.0002 4.34535V4.34539ZM19.1204 11.7532L18.0895 10.7296L12.4752 16.3305L9.90805 13.7841L8.87968 14.8102L12.4777 18.3778L19.1204 11.7532Z"
                  fill="#008331"></path>
              </g>
            </svg>
          </span>
          <span class="perk-option__label vui:text vui:text--bold vui:text--body-small">
          </span>
          <button
            class="perk-option__edit-button vui:text--decoration-underline vui:text-link vui:text-link--standalone--small">
            Edit
          </button>
      </div>
    </div>
  </div>
  `}function Nr(e){return e==null?void 0:e.map(({description:t,title:i},o)=>`
      <details class="vui:accordion  ${o!=(e==null?void 0:e.length)-1?"vui:u-border-bottom vui:u-border-color-low-contrast":""}">
        <summary class="vui:accordion__summary">
          <h3 class="vui:text vui:text--body-large">${i}</h3>
        </summary>
        <div class="vui:accordion__content vui:text vui:text--body-small">
          ${t}
        </div>
      </details>
    `).join("")}function Tr(e){return Array.isArray(e)?`
      ${e==null?void 0:e.map((t,i)=>`
        <ul class="vui:u-padding-0x">
          <li
            class="vui:u-display-flex vui:u-justify-content-between vui:u-gap-8x vui:u-padding-top-3x vui:u-padding-bottom-3x vui:u-margin-0x">
            <h4 class="vui:text vui:text--body-large vui:text--body-large@lg">
              ${t.title}
            </h4>
            <span class="vui:text vui:text--body-medium vui:text--body-large@lg  vui:text--end@lg">
              ${x(t.perkOriginalPrice,!0)}/mo
            </span>
          </li>
          <li
            class="vui:u-display-flex vui:u-justify-content-between vui:u-gap-8x vui:u-padding-top-3x vui:u-padding-bottom-3x vui:u-margin-0x">
            <h4 class="vui:text vui:text--bold vui:text--body-large vui:text--body-large@lg">
              You pay
            </h4>
            <span class="vui:text vui:text--bold vui:text--body-medium vui:text--body-large@lg  vui:text--end@lg">
              ${x(t.chargePrice,!0)}/mo
            </span>
          </li>
          <li
            style="color: #008331" class="vui:u-display-flex vui:u-justify-content-between vui:u-gap-8x vui:u-padding-top-3x vui:u-padding-bottom-3x vui:u-margin-0x vui:theme--fg-brand">
            <h4 class="vui:text vui:text--bold vui:text--body-large vui:text--body-large@lg">
              You save
            </h4>
            <span class="vui:text vui:text--bold vui:text--body-medium vui:text--body-large@lg vui:text--end@lg">
            ${x(t.savingPrice,!0)}/mo
            </span>
          </li>
        </ul>
        ${e.length>1&&i!=e.length-1?"<hr class='vui:u-border vui:u-border-color-low-contrast vui:u-border-radius-300 vui:u-margin-top-4x vui:u-margin-bottom-4x'>":""}
        `).join("")}
    `:""}function ai(e,t="details"){return t==="details"?e.map((i,o,a)=>i!=null&&i.imageUrl?`
      <details class="vui:accordion vui:u-border-color-low-contrast ${o===a.length-1?"":"vui:u-border-bottom"}">
        <summary class="vui:accordion__summary vui:u-display-flex vui:u-align-items-center vui:u-gap-3x"
          role="button">
          <span>
            <img src="${i.imageUrl}" width="40" height="40" loading="lazy" alt="">
          </span>
          <span>
            ${i==null?void 0:i.displayName}
          </span>
        </summary>
        <div class="vui:accordion__content">
          <p class="vui:text vui:text--body-medium vui:text--body-large@lg">${i==null?void 0:i.description}</p>
        </div>
      </details>
    `:"").join(""):e.map((i,o,a)=>i!=null&&i.imageUrl?`
    <div class="vui:u-padding-top-6x vui:u-padding-bottom-6x vui:u-padding-top-8x@lg vui:u-padding-bottom-8x@lg">
      <div class="vui:u-display-flex vui:u-align-items-center vui:u-gap-3x vui:u-padding-bottom-4x">
        <span>
          <img src="${i.imageUrl}" width="40" height="40" loading="lazy" alt="">
        </span>
        <span class="vui:text vui:text--bold vui:text--title-xsmall">
          ${i==null?void 0:i.displayName}
        </span>
      </div>
      <div class="vui:text vui:text--body-medium vui:text--body-large@lg">
        ${i==null?void 0:i.description}
      </div>
    </div>
  `:"").join("")}function ri(e,{displayName:t,posterImage:i,videoUrl:o}){if(!o)return"";const a=e==null?void 0:e.querySelector(".video-player");ne.createRoot(a).render(v.createElement(v.StrictMode,null,v.createElement(br,{posterImage:i,videoUrl:o})))}function ni(e,t){if(!t)return;const i=e==null?void 0:e.querySelector(".perk-table");ne.createRoot(i).render(v.createElement(v.StrictMode,null,v.createElement(yr,{tableConfg:t})))}function Ir(){const e=window.vz_perks_data,t=nt();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkTile;if(!a)throw new Error("queryPlanPerkTiles: Missing data-perk-tile attribute");const r=e["perks-pricing"][a],l=e.perks[a];if(!r||!l)throw new Error(`queryPlanPerkTiles: Missing data for ID "${a}"`);const{displayName:s,backgroundImage:c}=l.data,{perkOriginalPrice:n,chargePrice:d}=r.data,u=q(n-d);gr(i,{displayName:s,chargePrice:d,savingPrice:u,backgroundImage:c})}catch(a){console.warn(a),i.innerHTML=""}})}function zr(){const e=window.vz_perks_data,t=lt();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkPod;if(!a)throw new Error("perkPDP: Missing data-perk-pod attribute");const r=e["perks-pricing"][a],l=e.perks[a];if(!r||!l)throw new Error(`perkPDP: Missing data for ID "${a}"`);const{displayName:s,backgroundImage:c,id:n}=l.data,{perkOriginalPrice:d,chargePrice:u}=r.data,h=q(d-u);Pr(i,{id:n,displayName:s,chargePrice:u,savingPrice:h,backgroundImage:c})}catch(a){console.warn(a),i.innerHTML=""}})}function Er(){const e=window.vz_perks_data,t=st();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkPricing;if(!a)throw new Error("perkPricing: Missing data-perk-pricing attribute");const r=e["perks-pricing"][a],l=e.perks[a];if(!r||!l)throw new Error(`perkPricing: Missing data for ID "${a}"`);const{displayName:s}=l.data,{perkOriginalPrice:c,chargePrice:n}=r.data;wr(i,{displayName:s,chargePrice:n,perkOriginalPrice:c})}catch(a){console.warn(a),i.innerHTML=""}})}function Cr(){const e=window.vz_perks_data,t=ct();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkTotalSaving;if(!a)throw new Error("perkTotalSave: Missing data-perk-total-saving attribute");const r=e["perks-pricing"][a],l=e.perks[a];if(!r||!l)throw new Error(`perkTotalSave: Missing data for ID "${a}"`);const{perkOriginalPrice:s,chargePrice:c}=r.data,n=q(s-c);Sr(i,{savingPrice:n})}catch(a){console.warn(a),i.innerHTML=""}})}function Hr(){const e=window.vz_perks_data,t=ut();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkDetailsPlan;if(!a)throw new Error("perkDetailsPlan: Missing data-perk-total-saving attribute");const r=e.perks[a];if(!r)throw new Error(`perkDetailsPlan: Missing data for perk info ID "${a}"`);const l=e["perks-pricing"][r.data.id],s=li({perkPricing:l,perkInfo:r},e["perks-pricing"],e.perks);Ar(i,s)}catch(a){console.warn(a),i.innerHTML=""}})}function xr(){const e=window.vz_perks_data,t=Rr();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkDetails;if(!a)throw new Error("perkDetails: Missing data-perk attribute");const r=e.perks[a];if(!r)throw new Error(`perkDetails: Missing data for perk info ID "${a}"`);const l=e["perks-pricing"][r.data.id],s=li({perkPricing:l,perkInfo:r},e["perks-pricing"],e.perks);kr(i,s)}catch(a){console.warn(a),i.innerHTML=""}})}function Or(){const e=window.vz_perks_data,t=_r();t==null||t.forEach(i=>{var o;try{const a=(o=i.dataset)==null?void 0:o.perkTileSelection;if(!a)throw new Error("PerkTileSelection: Missing data attribute");const r=e["perks-pricing"][a],l=e.perks[a];if(!r||!l)throw new Error(`perkTiles: Missing data for ID "${a}"`);const{displayName:s,backgroundImage:c}=l.data,{perkOriginalPrice:n,chargePrice:d}=r.data,u=q(n-d);vr(i,{displayName:s,savingPrice:u,backgroundImage:c,chargePrice:d})}catch(a){console.warn(a),i.innerHTML=""}})}function Vr(){const e=nt(),t=st(),i=ct(),o=ut(),a=lt();[...e,...t,...i,...o,...a].forEach(r=>{fr(r)})}function Dr(){const e=nt(),t=st(),i=ct(),o=ut(),a=lt();[...e,...t,...i,...o,...a].forEach(r=>{r.innerHTML=""})}function li(e,t,i){const{perkPricing:o,perkInfo:a}=e,{displayName:r,backgroundImage:l,featuresDetailsList:s,videoUrl:c,posterImage:n,termsAndConditions:d,titles:u,id:h,faqList:y}=a.data,{perkOriginalPrice:f,chargePrice:p,perkLogo:m,perkTextAppearance:g,groupBy:k}=o.data,N=q(f-p),z=u.find(T=>(T==null?void 0:T.displayName)==="Important information"),S=(k==null?void 0:k[0].split(","))||[h],I=(S==null?void 0:S.length)>1||null,A=I?S==null?void 0:S.reduce((T,M)=>{var F,W,U;return i!=null&&i[M]?((U=(W=(F=i==null?void 0:i[M])==null?void 0:F.data)==null?void 0:W.featuresDetailsList)==null||U.forEach(Y=>{T.data[Y.displayName]||(T.ids=[...T.ids,Y.displayName]),T.data[Y.displayName]={...T.data[Y.displayName],[M]:{hasItem:!0,shortDescription:Y.shortDescription}}}),T):null},{ids:[],data:{}}):void 0,E=I&&A?{head:{headers:[{},...S.map(T=>{var M,F,W,U;return{children:hr((U=(W=(F=(M=i[T])==null?void 0:M.data)==null?void 0:F.titles)==null?void 0:W[1])==null?void 0:U.titleName,t[T].data.chargePrice)}})]},body:{rows:A==null?void 0:A.ids.map(T=>{{const M={cells:[{children:T}]};return M.cells=[...M.cells,...S.map(F=>{var U,Y;const W=(Y=(U=A==null?void 0:A.data)==null?void 0:U[T])==null?void 0:Y[F];return W?W.shortDescription?{children:W.shortDescription}:{children:Tt("check")}:{children:Tt()}})],M}})}}:void 0,L=S==null?void 0:S.map(T=>{var M,F,W,U;return{title:(U=(W=(F=(M=i[T])==null?void 0:M.data)==null?void 0:F.titles)==null?void 0:W[1])==null?void 0:U.titleName,perkOriginalPrice:t[T].data.perkOriginalPrice,chargePrice:t[T].data.chargePrice,savingPrice:q(t[T].data.perkOriginalPrice-t[T].data.chargePrice)}}).filter(T=>T.title!==void 0);return{id:h,displayName:r,backgroundImage:l,perkLogo:m,perkTextAppearance:g,featuresDetailsList:s,videoUrl:c,posterImage:n,termsAndConditions:d,importInfo:z,table:E,savingPerkBox:L,faqList:y,savingPrice:N}}function It(){const e=window.vz_perks_data;if(!e||!e.perks||!e["perks-pricing"]){console.warn("handlePerkInstances: Missing or invalid vz_perks_data");return}Ir(),Er(),Cr(),Hr(),zr()}function Mr(){Dr()}function Lr(){try{xr()}catch(e){console.error("Error in handlePerkDetails:",e)}}function Wr(){try{Or()}catch(e){console.error("Error in handlePerkDetails:",e)}}function Ur(){Vr()}function Fr(){Ur(),b.addEventListener("perk-data-loaded",e=>{It()}),b.addEventListener("perk-data-error",e=>{Mr()}),document.body.addEventListener("castIsReady",function(e){It()})}function nt(){return b.querySelectorAll("[data-perk-tile]")}function lt(){return b.querySelectorAll("[data-perk-pod]")}function st(){return b.querySelectorAll("[data-perk-pricing]")}function ct(){return b.querySelectorAll("[data-perk-total-saving]")}function _r(){return b.querySelectorAll("[data-perk-tile-selection]")}function ut(){return b.querySelectorAll("[data-perk-details-plan]")}function Rr(){return b.querySelectorAll("[data-perk-details]")}(function(){Fr()})();(function(){function e(i){const o=i.getAttribute("data-vui-modal"),a=new CustomEvent("vui-close-modal",{detail:{modalId:o}});b.dispatchEvent(a)}b.querySelectorAll("[data-vui-modal]").forEach(i=>{i.addEventListener("click",o=>{const a=o.target.closest("[data-vui-modal-hide]");a&&(a.matches("button[data-vui-modal-hide]")||a.matches(".vui\\:modal__backdrop[data-vui-modal-hide]"))&&e(i)}),i.addEventListener("keydown",o=>{(o.key==="Escape"||o.key==="Esc")&&e(i)},!0)})})();const _=b.querySelector("vz-sticky-cmp.summary-cart"),Ye=_==null?void 0:_.querySelector(".summary-cart__header button"),ye=_==null?void 0:_.querySelector("[data-summary-content]"),me=_==null?void 0:_.querySelector("[data-plan-count]"),Oe=_==null?void 0:_.querySelector("vz-sticky-cmp .backdrop"),si=_==null?void 0:_.querySelectorAll("[data-lines-pricing]"),Gr=me==null?void 0:me.querySelector("[data-plan-boxes]"),zt=me==null?void 0:me.querySelector("[data-plan-boxes-label]");var Wt;const qr=(Wt=Array(...si))==null?void 0:Wt.map(e=>e.querySelector("[data-plans-total]"));var Ut;const Br=(Ut=Array(...si))==null?void 0:Ut.map(e=>e.querySelector("[data-plans-saving]")),Yr=ye.querySelector("[data-summary-lines]"),$r=ye.querySelector("[data-savings-breakdown]");function ci(e){e?document.body.classList.add("summary-cart-open"):document.body.classList.remove("summary-cart-open")}function ui(e){e?Oe.style.display="block":Oe.style.display="none"}function di(e){P.OPENED=e,e?ye.setAttribute("data-open",""):ye.removeAttribute("data-open")}function pi(e){Ye.innerText=e?"Hide details":"Show details"}function Xr({lines:e,plans:t}){Gr.innerHTML=`
    ${e==null?void 0:e.map((i,o)=>{var r,l;const a=o+1;return`
        <div data-plan-box="${(r=t[a])!=null&&r.plan?"full":"empty"}" class="vui:u-border vui:u-border-color-primary vui:u-border-radius-100 vui:u-display-flex vui:u-align-items-center vui:u-justify-content-center vui:u-padding-1x has:flex-1">
        ${(l=t[a])!=null&&l.plan?`
            <svg class="icon-added" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 28 29" fill="none">
              <g id="Icon/alternate-checkmark">
                <path id="Vector"
                  d="M14.0002 26.2205C11.6927 26.2205 9.43709 25.5363 7.51852 24.2544C5.59994 22.9724 4.1046 21.1503 3.22157 19.0185C2.33855 16.8867 2.10751 14.5409 2.55767 12.2778C3.00783 10.0147 4.11898 7.93591 5.75059 6.3043C7.3822 4.67269 9.461 3.56154 11.7241 3.11138C13.9872 2.66122 16.333 2.89226 18.4648 3.77528C20.5966 4.65831 22.4187 6.15365 23.7006 8.07223C24.9826 9.9908 25.6668 12.2464 25.6668 14.5539C25.6632 17.647 24.4329 20.6123 22.2458 22.7995C20.0586 24.9866 17.0933 26.2169 14.0002 26.2205ZM14.0002 4.34539C11.9811 4.34539 10.0074 4.94411 8.32864 6.06583C6.64986 7.18755 5.34141 8.7819 4.56875 10.6473C3.7961 12.5126 3.59394 14.5652 3.98783 16.5455C4.38173 18.5257 5.35399 20.3447 6.78168 21.7724C8.20936 23.2001 10.0283 24.1723 12.0086 24.5662C13.9888 24.9601 16.0414 24.7579 17.9068 23.9853C19.7721 23.2126 21.3665 21.9042 22.4882 20.2254C23.6099 18.5466 24.2087 16.5729 24.2087 14.5539C24.2056 11.8474 23.1291 9.25257 21.2153 7.33877C19.3015 5.42497 16.7067 4.34844 14.0002 4.34535V4.34539ZM19.1204 11.7532L18.0895 10.7296L12.4752 16.3305L9.90805 13.7841L8.87968 14.8102L12.4777 18.3778L19.1204 11.7532Z"
                  fill="#008331"></path>
              </g>
            </svg>
          `:""}
        </div>`}).join("")}`}function jr({lines:e,plans:t}){e==1?zt.innerText="Plan selected":zt.innerText=`${t} of ${e} plans selected`}function Kr(e){qr.forEach(t=>{t&&(t.innerHTML=`${x(e,!0)}/mo`)})}function Qr(e){Br.forEach(t=>{t&&(t.innerHTML=` ${x(e,!0)}/mo`)})}function Zr({planTable:e,perks:t,discountsInfo:i}){$r.innerHTML=`
    ${Jr(i)}
    ${en(Object.entries(t))}
  `}function Jr(e){return e==null?void 0:e.map(t=>`
    ${t.active?`
      <li class="vui:u-display-flex vui:u-justify-content-between vui:u-align-item-center">
        <span class="vui:text vui:text--body-medium">
          ${t.name} ${(t==null?void 0:t.count)>1?`(${t.count})`:""}
        </span>
        <span class="vui:text vui:text--body-medium">
          ${x(q(t.price*t.count),!0)}/mo
        </span>
      </li>
      `:""}
  `).join("")}function en(e){return e==null?void 0:e.map(([t,i],o)=>`
   <li class="vui:u-display-flex vui:u-justify-content-between vui:u-align-item-center ${e.length-1!==o?"vui:u-margin-bottom-2x":"vui:u-margin-bottom-0x"}">
    <span class="vui:text vui:text--body-medium">
      ${i.name} ${(i==null?void 0:i.count)>1?`(${i.count})`:""}
    </span>
    <span class="vui:text vui:text--body-medium">
      ${x(q((i==null?void 0:i.price)*i.count),!0)}/mo
    </span>
  </li>
  `).join("")}function tn({planTable:e,lines:t}){Yr.innerHTML=t.map((i,o)=>{const{line:a,plan:r,priceLine:l,planTotal:s,planTotalBase:c,planName:n,discountsInfo:d,perksIncludedInfo:u,extraPerksInfo:h}=i;return r?`
      <details data-summary-line
        class="vui:theme__surface vui:theme--light-secondary vui:u-padding-4x vui:u-border-radius-300 ${t.length-1===o?"":"vui:u-margin-bottom-6x"}">
        <summary class="list-style-none" aria-hidden="true">
          <div data-line-heading=""
            class="vui:u-display-flex vui:u-justify-content-between vui:u-align-items-center vui:u-margin-bottom-2x">
            <h3 class="vui:text vui:text--bold vui:text--body-large">Line ${a}</h3>
            <span class="vui:text vui:text--bold vui:text--body-large">${x(l,!0)}/mo</span>
          </div>
          <div data-line-preview-selection class="line-preview-selection vui:u-display-flex vui:u-align-items-end vui:u-justify-content-between vui:u-gap-3x">
            <div>
              <span class="vui:u-display-block vui:text vui:text--body-medium vui:text--capitalize vui:u-margin-bottom-1x">
                ${n}
              </span>
              <span class="line-preview-selection__perks-names vui:u-display-block vui:text vui:text--body-medium text-wrap-balance">
                ${e===O.PLANS_POPULAR?nn(u):""}${u.length>0&&h.length>0?",":""} 
                ${rn(h)}
              </span>
            </div>
            <div class="vui:u-display-flex">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path
                  d="M7.99992 11.6371L1.33325 4.97044L1.94066 4.36304L7.99992 10.4223L14.0592 4.36304L14.6666 4.97044L7.99992 11.6371Z"
                  fill="black" />
              </svg>
            </div>
          </div>
        </summary>
        <div
          class="summary-cart__plan vui:u-margin-top-6x ${h.length>0?"vui:u-border-bottom vui:u-border-color-low-contrast vui:u-padding-bottom-6x":""}">
          <h4 class="vui:text vui:text--bold vui:text--body-medium vui:theme--fg-secondary vui:u-margin-bottom-2x">
          ${e===O.PLANS_POPULAR?"Popular plan":"Plan"}
          ${e===O.PLANS_POPULAR?`
            <div class="plan-option vui:u-display-inline" data-plan-option="${e}">
              <button
                data-plan-option-edit="${r}"
                class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
                Edit
              </button>
            </div>
            `:""}
          </h4>
          <div class="summary-cart__plan-info ${u.length>0?"vui:u-margin-bottom-6x":""}">
            <div class="vui:u-display-flex vui:u-justify-content-between vui:u-align-item-center">
              <span class="vui:text vui:text--body-medium vui:text--capitalize">
                <span>${n}</span>
                ${e===O.PLANS_POPULAR?"":`
                  <div class="plan-option vui:u-display-inline" data-plan-option="${e}">
                    <button
                      data-plan-option-edit="${r}"
                      class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
                      Edit
                    </button>
                  </div>`}
              </span>
              <span class="vui:text vui:text--body-medium">
               ${x(s,!0)}/mo
              </span>
            </div>
            ${ln(d,s)}
          </div>
          ${an(e,u)}
        </div>
       ${on(e,h)}
       <div class="vui:u-display-flex vui:u-justify-content-between vui:u-margin-top-6x">
        <button data-line-remove="${a}"
          class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
          Remove
        </button>
        <button type="button" data-close-details class="vui:u-display-flex aria-label="Close plan line detail">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path
              d="M14.0592 11.6371L7.99992 5.57779L1.94066 11.6371L1.33325 11.0296L7.99992 4.36298L14.6666 11.0296L14.0592 11.6371Z"
              fill="black" />
          </svg>
        </button>
      </div>
    </details>
  `:`
        <div class="vui:theme__surface vui:theme--light-secondary vui:u-padding-4x vui:u-border-radius-300 ${t.length-1===o?"":"vui:u-margin-bottom-6x"}">
          <h3 class="vui:text vui:text--bold vui:text--body-large vui:u-margin-bottom-2x">Line ${a}</h3>
          <span class="vui:text vui:text--body-medium vui:theme--fg-secondary">
            No plan selected
          </span>
        </div>
      `}).join("")}function on(e,t){if(t.length<=0)return"";const i=t==null?void 0:t.map((o,a)=>`
    <li class="vui:u-display-flex vui:u-justify-content-between vui:u-align-item-center ${t.length-1!==a?"vui:u-margin-bottom-4x":"vui:u-margin-bottom-0x"}">
      <span class="summary-cart__perk-name text-wrap-balance vui:text vui:text--body-medium">
         ${o.name}
        <button data-perk-option-edit="${o.id}"
          class="vui:theme--fg-primary vui:text--decoration-underline vui:text vui:text--body-small vui:text--body-medium@lg">
          Edit
        </button>
      </span>
      <span class="vui:text vui:text--body-medium">
        ${x(o==null?void 0:o.price)}/mo
      </span>
    </li>
  `).join("");return`
   <div class="summary-cart__additional-perks vui:u-padding-top-6x vui:u-padding-bottom-6x">
    <h4 class="vui:text vui:text--bold vui:text--body-medium vui:theme--fg-secondary vui:u-margin-bottom-2x">
      ${e===O.PLANS_POPULAR?"Additional services & perks":"Services & perks"}
    </h4>
    <ul class="summary-cart__perks list-style-none vui:u-padding-0x vui:u-margin-0x">
      ${i}
    </ul>
  </div>
  `}function an(e,t){return t.length<=0?"":`
  <div class="summary-cart__perk-associated vui:u-margin-top-6x">
    ${t==null?void 0:t.map(o=>`
    <div class="vui:u-display-flex vui:u-justify-content-between vui:u-align-item-center">
      <span class="vui:text vui:text--body-medium">
       ${o.name}
      </span>
      <span class="vui:text vui:text--body-medium">
        ${x(o==null?void 0:o.price)}/mo
      </span>
    </div>
  `).join("")}
  </div>
  `}function rn(e){return e.map(t=>t==null?void 0:t.name.trim()).join(", ")}function nn(e){return e.map(t=>t==null?void 0:t.name.trim()).join(", ")}function ln(e,t){return e==null?void 0:e.map(i=>`
    <span class="vui:u-display-block vui:text vui:text--micro vui:theme--fg-secondary">
       ${x(i.active?q(t+i.price):q(t-i.price))}/mo ${i.active?"without":"with"} ${i==null?void 0:i.name} 
    </span>
  `).join("")}function Ue(){di(!1),ui(!1),pi(!1),ci(!1)}function sn(){di(!0),ui(!0),pi(!0),ci(!0)}function cn(){document.querySelector("[data-summary-content]").hasAttribute("data-open")?Ue():sn()}function un(e){ei({lineToRemove:e})}function Et(){const e=Object.keys(P.SELECTED_PLANS.plans).length>0,t=Object.entries(P.SELECTED_PLANS.plans).some(([i,o])=>o==null?void 0:o.plan);e&&t?_.style.display="block":(Ue(),_.style.display="none")}function Te(){const{planTable:e,plans:t}=P.SELECTED_PLANS;if(!e||!t){console.warn("no plans selected summaryHeaderUpdates");return}pn(),mn(),hn(),yn()}function dn(e){e==null||e.removeAttribute("open")}function pn(){const{planTable:e,plans:t}=P.SELECTED_PLANS,{lines:i}=w[e];Xr({lines:Q(i),plans:t})}function mn(){var o;const{planTable:e,plans:t}=P.SELECTED_PLANS,{lines:i}=w[e];jr({lines:i,plans:(o=Object.entries(t).filter(([a,r])=>(r==null?void 0:r.plan)!==void 0))==null?void 0:o.length})}function Ie(){var a,r;const{planTable:e,plans:t}=P.SELECTED_PLANS;if(!e||!t){console.warn("no plans selected summaryHeaderUpdates");return}const i={planTable:e,perks:{},discountsInfo:null},o=Object.keys(t);i.discountsInfo=(r=Object.entries((a=w[e])==null?void 0:a.discount))==null?void 0:r.map(([l,s])=>({price:s.num,name:s.name,active:s.state,count:o.length})),o==null||o.forEach((l,s)=>{var h,y,f,p;const c=t[l],n=w[e].plans;(((y=(h=n[c==null?void 0:c.plan])==null?void 0:h.perks)==null?void 0:y.flatMap(m=>{const g=le(m),k=c==null?void 0:c.perks,N=(k==null?void 0:k.find(z=>g.some(S=>S.id===z)))||null;return g.length>0&&N&&N!=m?[]:m in be?[]:m in X?[]:m}))||[]).forEach(m=>{var k,N,z,S,I,A,E,L,T;const g=`${(k=D(m))==null?void 0:k.displayName} ${(z=(N=D(m))==null?void 0:N.titles[1])!=null&&z.titleName&&((S=D(m))==null?void 0:S.displayName)!==((A=(I=D(m))==null?void 0:I.titles[1])==null?void 0:A.titleName)?(L=(E=D(m))==null?void 0:E.titles[1])==null?void 0:L.titleName:""}`;i.perks[m]={count:(((T=i.perks[m])==null?void 0:T.count)??0)+1,price:q(j(m).chargePrice-j(m).perkOriginalPrice),name:g}});const u=((f=n[c==null?void 0:c.plan])==null?void 0:f.perks)||[];(p=c==null?void 0:c.perks)==null||p.forEach(m=>{var k,N,z,S,I,A,E,L,T;if(m in X&&u.includes(m))return;const g=`${(k=D(m))==null?void 0:k.displayName} ${(z=(N=D(m))==null?void 0:N.titles[1])!=null&&z.titleName&&((S=D(m))==null?void 0:S.displayName)!==((A=(I=D(m))==null?void 0:I.titles[1])==null?void 0:A.titleName)?(L=(E=D(m))==null?void 0:E.titles[1])==null?void 0:L.titleName:""}`;i.perks[m]={count:(((T=i.perks[m])==null?void 0:T.count)??0)+1,price:q(j(m).chargePrice-j(m).perkOriginalPrice),name:g}})}),Zr(i)}function ze(){var r;const{planTable:e,plans:t}=P.SELECTED_PLANS;if(!e||!t){console.warn("no plans selected summaryHeaderUpdates");return}const i={planTable:e,lines:[]},o=Object.entries((r=w[e])==null?void 0:r.discount).map(([l,s])=>({price:s.num,name:s.name,active:s.state})),a=Q(w[e].lines);i.lines=a==null?void 0:a.map((l,s)=>{var m,g,k,N,z;const c=s+1,n=t[c],d=w[e].plans,u=((g=(m=d[n==null?void 0:n.plan])==null?void 0:m.perks)==null?void 0:g.flatMap(S=>{const I=le(S),A=n==null?void 0:n.perks,E=(A==null?void 0:A.find(L=>I.some(T=>T.id===L)))||null;return I.length>0&&E&&E!=S?[]:S in be?[]:S in X?[]:S}))||[],h=u.map(S=>{var A,E,L,T,M,F,W,U;const I=`${(A=D(S))==null?void 0:A.displayName} ${(L=(E=D(S))==null?void 0:E.titles[1])!=null&&L.titleName&&((T=D(S))==null?void 0:T.displayName)!==((F=(M=D(S))==null?void 0:M.titles[1])==null?void 0:F.titleName)?(U=(W=D(S))==null?void 0:W.titles[1])==null?void 0:U.titleName:""}`;return{id:S,price:j(S).chargePrice,name:I}}),y=((k=d[n==null?void 0:n.plan])==null?void 0:k.perks)||[],f=((N=n==null?void 0:n.perks)==null?void 0:N.map(S=>{var E,L,T,M,F,W,U,Y;const I=`${(E=D(S))==null?void 0:E.displayName} ${(T=(L=D(S))==null?void 0:L.titles[1])!=null&&T.titleName&&((M=D(S))==null?void 0:M.displayName)!==((W=(F=D(S))==null?void 0:F.titles[1])==null?void 0:W.titleName)?(Y=(U=D(S))==null?void 0:U.titles[1])==null?void 0:Y.titleName:""}`,A=S in X&&y.includes(S);return{id:S,price:A?0:parseFloat(j(S).chargePrice)||0,name:I}}))||[],p=f.reduce((S,I)=>S+(I==null?void 0:I.price),0);return{line:c,plan:n==null?void 0:n.plan,priceLine:it(w[e],n==null?void 0:n.plan,u)+p,planTotal:ot(w[e],n==null?void 0:n.plan),planTotalBase:_a(w[e],n==null?void 0:n.plan),planName:((z=re==null?void 0:re[e])==null?void 0:z[n==null?void 0:n.plan])||"",discountsInfo:o,perksIncludedInfo:h,extraPerksInfo:f}}),tn(i)}function hn(){var o;const{planTable:e,plans:t}=P.SELECTED_PLANS,i=(o=Object.entries(t))==null?void 0:o.reduce(({plansTotal:a,perksTotal:r},[l,s])=>{var d,u,h,y;if(!(s!=null&&s.plan)&&!((d=s==null?void 0:s.perks)!=null&&d.length))return{plansTotal:a,perksTotal:r};const c=(h=(u=w[e].plans)==null?void 0:u[s.plan])==null?void 0:h.perks,n=(y=s.perks)==null?void 0:y.reduce((f,p)=>{const m=le(p),g=m.length>1,k=c==null?void 0:c.find(N=>m.some(z=>z.id===N));return g&&k===p?f:g&&k&&k!==p?{totalPerks:f.totalPerks+parseFloat(j(p).chargePrice),hasSwitchedAssociatedPerk:!0}:p in X&&(c!=null&&c.includes(p))?f:{...f,totalPerks:f.totalPerks+parseFloat(j(p).chargePrice)}},{totalPerks:0,hasSwitchedAssociatedPerk:!1});return{plansTotal:a+=n!=null&&n.hasSwitchedAssociatedPerk?ot(w[e],s==null?void 0:s.plan):it(w[e],s==null?void 0:s.plan),perksTotal:r+((n==null?void 0:n.totalPerks)||0)}},{plansTotal:0,perksTotal:0});Kr(q(i.plansTotal+i.perksTotal))}function yn(){var r;const{planTable:e,plans:t}=P.SELECTED_PLANS,i=w[e].plans,o=(r=Object.entries(t))==null?void 0:r.reduce(({planDiscount:l,extraPerksTotal:s},[c,n])=>{var p,m,g,k,N;if(!(n!=null&&n.plan)&&!((p=n==null?void 0:n.perks)!=null&&p.length))return{planDiscount:l,extraPerksTotal:s};const d=((g=(m=i[n==null?void 0:n.plan])==null?void 0:m.perks)==null?void 0:g.flatMap(z=>{const S=le(z),I=n==null?void 0:n.perks,A=(I==null?void 0:I.find(E=>S.some(L=>L.id===E)))||null;return S.length>0&&A&&A!=z?[]:z in be?[]:z in X?[]:z}))||[],u=d==null?void 0:d.reduce((z,S)=>{const{chargePrice:I,perkOriginalPrice:A}=j(S);return z+=A-I},0),h=((k=i[n==null?void 0:n.plan])==null?void 0:k.perks)||[],y=(N=n.perks)==null?void 0:N.reduce((z,S)=>{const{chargePrice:I,perkOriginalPrice:A}=j(S);return S in X&&h.includes(S)?z:z+=A-I},0),f=(parseFloat(q(y))||0)+(parseFloat(q(u))||0);return{planDiscount:l+=Ra(w[e],n==null?void 0:n.plan),extraPerksTotal:s+=f}},{planDiscount:0,extraPerksTotal:0}),a=o.planDiscount+o.extraPerksTotal;Qr(q(a))}const oe={activeTab:Be.TEASER_PLAN_TAB,nextTab:null};function bn(){return b.querySelector('[data-vui-modal-show="modal-plan-incomplete"]')}function dt(){const e=b.querySelector("[data-modal-plan-incomplete]"),t=e==null?void 0:e.querySelector(".vui\\:modal__content"),i=e==null?void 0:e.querySelector(".vui\\:modal__backdrop");return{modal:e,modalContent:t,backdrop:i}}function pt(){return b.querySelector("[data-modal-plan-incomplete] [data-vui-modal-close]")}function fn(){const{modalContent:e,backdrop:t,modal:i}=dt(),o=pt();i.addEventListener("keyup",mi),t.addEventListener("click",we),o.addEventListener("click",we),e.addEventListener("click",vn)}function vn({target:e}){if("goPlans"in e.dataset){kn();return}if("nextSteps"in e.dataset){Sn();return}}function mi(e){(e.key==="Escape"||e.key==="Esc")&&we()}function we(){const{backdrop:e,modal:t}=dt(),i=pt();t.removeEventListener("keyup",mi),e.removeEventListener("click",we),i.removeEventListener("click",we)}function mt(){pt().dispatchEvent(new Event("click"))}function gn(){const e=bn();e&&e.dispatchEvent(new Event("click"))}function wn({lines:e,selectedLines:t}){const{modalContent:i}=dt();i&&(i.innerHTML=`
  <div>
    <h3 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x">
      It looks like you’re missing a plan
    </h3>
    <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
      You’re shopping for ${e} lines, but you’ve only selected ${t} of ${e} plans. To add a plan, go back to the plan selection step.
      If you want to continue to the next steps with your current selections, pricing will be adjusted for ${t} lines. 
    </p>
    <div class="vui:u-display-flex vui:u-flex-column vui:u-flex-row@lg vui:u-justify-content-center@lg vui:u-gap-3x">
      <button data-go-plans="" class="vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
       Go back to plans
      </button>
      <button data-next-steps="" class="vui:button vui:button--secondary vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg vui:u-width-100 vui:u-displa-block">
        Next steps
      </button>
    </div>
  </div>
  `)}async function Sn(){try{await hi()}catch(e){mt(),console.error("Error during modal next steps execution:",e)}}function kn(){const e=b.querySelector(`[data-scroll-target="${oe.activeTab}"]`);Xe(e),mt(),Ue()}function An(){var a,r;const{planTable:e,plans:t}=P.SELECTED_PLANS,i=(a=w[e])==null?void 0:a.lines,o=(r=Object.keys(t))==null?void 0:r.reduce((l,s)=>t[s].plan?l+1:l,0);!i&&!o||(gn(),wn({lines:i,selectedLines:o}),fn())}function Pn(){An()}let he=null;b.querySelectorAll("[data-next-steps-btn]").forEach(e=>{e.addEventListener("click",Tn)});function Nn(e){e&&(he||(he=ne.createRoot(e)),he.render(v.createElement("div",{style:{zIndex:1e3,width:"100%",height:"200px",position:"relative",background:"url(https://ss7.vzw.com/is/image/VerizonWireless/loader-overview-variation-overlay-image-20250911?&$vds-doc-site-jpeg$)"}},v.createElement(_t,{active:!0,fullscreen:!0,showOverlay:!0}))))}function Ct(e,t,i){e&&(he||(he=ne.createRoot(e)),he.render(v.createElement(v.StrictMode,null,v.createElement(Ve,{type:"error",title:v.createElement("span",{className:"vui:text vui:text--bold vui:text--body-small",dangerouslySetInnerHTML:{__html:t}}),subtitle:v.createElement("span",{className:"vui:text vui:text--body-small"},i),inline:!1,disableFocus:!0}))),e.scrollIntoView({behavior:"smooth",block:"center"}))}async function Tn(e){var r,l;e.preventDefault();const{planTable:t,plans:i}=P.SELECTED_PLANS,o=(r=w[t])==null?void 0:r.lines,a=(l=Object.keys(i))==null?void 0:l.reduce((s,c)=>i[c].plan?s+1:s,0);if(o>a){Pn();return}await hi()}async function hi(){var l,s,c;const e=document.getElementById("api-notification");e&&Nn(e);const t=P.SELECTED_PLANS.plans,i=P.SELECTED_PLANS.planTable,o=[];if(Ee("vz-user-address"),((l=Object.keys(t))==null?void 0:l.sort((n,d)=>parseInt(n)-parseInt(d))).forEach(n=>{var m,g,k,N,z;const d=t[n];if(!d||!d.plan){console.warn(`No plan details or plan name found for line ${n}, skipping.`);return}const u=d.plan;let h=(g=(m=w[i])==null?void 0:m.plans[u])==null?void 0:g.id;if(!h){console.warn(`Could not find a matching numerical plan ID for plan name: ${u}`);return}const y=((z=(N=(k=w[i])==null?void 0:k.plans[u])==null?void 0:N.perks)==null?void 0:z.flatMap(S=>{const I=le(S),A=d==null?void 0:d.perks,E=(A==null?void 0:A.find(L=>I.some(T=>T.id===L)))||null;return I.length>0&&E&&E!=S?[]:S in be?[]:S in X?[]:S}))||[],p=[...(d==null?void 0:d.perks)||[],...y].join(",");o.push(p?`${h}-${p}`:h)}),o.length===0){console.warn("No plans selected.");return}const r={lines:o.join("|"),numOfLines:o.length};try{const n=Object.values(t).map((f,p)=>{var g,k;const m=(g=w[i])==null?void 0:g.plans[f==null?void 0:f.plan];return{action:"customized",category:"Plan",group:p,id:m.id,merchCat:"plans",name:(k=re[i])==null?void 0:k[f.plan],path:"custom",qty:"1",recurringPrice:m.prices[0],shared:"N",sku:m.id}}),u=await(await fetch("/soe/digital/prospect/cartservice/cart/nse/create-line-with-plan",{method:"POST",headers:{"Content-Type":"application/json",channelId:Wi()},body:JSON.stringify(r)})).json(),h="/smartphones/?mtnFlow=P&isFirstLine=true",y=document.getElementById("api-notification");if(((s=u==null?void 0:u.serviceHeader)==null?void 0:s.statusCode)==="00")window.location.href=h,sessionStorage.setItem("productArr",JSON.stringify(n));else{const f=((c=u==null?void 0:u.serviceHeader)==null?void 0:c.viewMessage)||"We encountered an issue updating your cart.";y&&Ct(y,f,"Please try again or proceed to checkout.")}}catch(n){const d=document.getElementById("api-notification");mt(),console.error("Failed to submit Next Steps:",n),d&&Ct(d,"We couldn’t process your request.","Please try again or contact customer support if the issue persists")}}const In=500,zn={control:(e,t)=>({...e,minHeight:44,borderColor:"#6F7171",":focus":{outline:"none"},":hover":{borderColor:"#6F7171",boxShadow:"none"},boxShadow:"none",padding:"0px"}),noOptionsMessage:(e,t)=>({...e,display:"none"}),menuList:(e,t)=>({...e,paddingBottom:0,paddingTop:0,border:"none",borderRadius:8,maxHeight:300}),menu:e=>({...e,padding:0,paddingBottom:0,paddingTop:0,position:"relative",boxShadow:"none",backgroundColor:"transparent",border:"none"}),option:(e,t)=>{var o;const i=((o=t==null?void 0:t.data)==null?void 0:o.value)===(t==null?void 0:t.options[(t==null?void 0:t.options.length)-1].value);return{...e,padding:"12px 32px",backgroundColor:"#F3F3F5",borderBottom:i?"none":"0.25px solid #B4B4B4"}},dropdownIndicator:(e,t)=>({...e,display:"none"})},En=e=>{const{children:t,getStyles:i,innerProps:{ref:o,...a}}=e;return v.createElement("div",{...a,ref:o,role:"button",tabIndex:"0","aria-label":"Clear selected address",onKeyDown:r=>{(r.key==="Enter"||r.key===" ")&&e.clearValue()},style:{...i("clearIndicator",e),display:"flex",alignItems:"center",justifyContent:"center",padding:"0 8px"}},t||v.createElement("span",{style:{fontSize:"20px",lineHeight:1}},"×"))};function Cn(){const[e,t]=R.useState(null),[i,o]=R.useState([]),[a,r]=R.useState(!1),[l,s]=R.useState(null),c=R.useRef(null),[n,d]=R.useState(!1),u=m=>{t(m)},h=async m=>{Ci("vz-user-address",m),b.dispatchEvent(new CustomEvent("user-address",{detail:{address:m}})),d(!1)},y=m=>{if(!m){d(!1);return}},f=(m,{action:g})=>{c.current&&clearTimeout(c.current),c.current=setTimeout(()=>{m&&p(m)},In)},p=async m=>{var g;r(!0),s(null);try{const k=B("loggedIn"),N=B("myAccount"),S=await fetch(k||N?qi:Gi,{headers:{"Content-Type":"application/json",channelId:"VZW-DOTCOM"},method:"POST",body:JSON.stringify({streetterm:m})});if(!S.ok)throw new Error(`HTTP error! Status: ${S.status}`);const I=await S.json();if(!(I!=null&&I.addresses)){console.error("Address error in fetch:",err),s("Street address not found");return}const A=(g=I==null?void 0:I.addresses)==null?void 0:g.map(E=>({...E,value:E==null?void 0:E.locusID,label:E==null?void 0:E.disprawstr}));o(A)}catch(k){console.error("Address error in fetch:",k),s(k.message)}finally{r(!1)}};return R.useEffect(()=>{const m=({target:g})=>{if(g.hasAttribute("data-open-address-modal")){d(!0);return}g.closest("[data-open-address-modal]")&&d(!0)};return document.addEventListener("click",m),()=>{document.removeEventListener("click",m)}},[]),v.createElement(Ai,{surface:"light",opened:n,onOpenedChange:y,disableOutsideClick:!1,ariaLabel:"",maxHeight:"130vh"},v.createElement(Pi,null,"Please enter your address."),v.createElement(Ni,null,v.createElement("p",{className:"vui:u-margin-bottom-8x"},"Enter your street address for the most accurate broadband fact labels for available plans, including surcharges and fees."),v.createElement("div",{style:{overflow:"scroll",minHeight:"2rem"}},v.createElement("span",{className:"vui:u-margin-bottom-2x vui:u-display-inline-block"},"Street address"),v.createElement(Ti,{isLoading:a,isSearchable:!0,isClearable:!0,components:{ClearIndicator:En},"aria-label":"Street address selection",openMenuOnFocus:!1,openMenuOnClick:!0,escapeClearsValue:!1,onChange:u,placeholder:"Enter your address...",styles:{...zn,clearIndicator:m=>({...m,cursor:"pointer",color:"#6F7171",opacity:1,display:"flex",":hover":{color:"#000"},":focus":{outline:"2px solid #000",borderRadius:"2px"}}),indicatorsContainer:m=>({...m,height:"44px"})},onInputChange:f,options:[...i]})),v.createElement("div",{className:"vui:u-margin-top-2x"},l&&v.createElement(Ve,{type:"error",title:"An error has occurred.",subtitle:"Please try again later.",surface:"light",disableAnimation:!0,fullBleed:!0,hideCloseButton:!0,disableFocus:!0,inline:!1,layout:null}))),v.createElement(Ii,{style:{paddingTop:0}},v.createElement(zi,{disabled:!e,onClick:()=>h(e)},"Continue")))}const Hn=b.querySelector("[data-modal-address]"),xn=ne.createRoot(Hn);xn.render(v.createElement(v.StrictMode,null,v.createElement(Cn,null)));(function(){b.addEventListener("control-lines",function({detail:o}){e(o)}),document.body.addEventListener("castIsReady",function(){e(),i()});function e(o){const a=b.querySelector("#plan-compare-table"),r=a==null?void 0:a.querySelectorAll("[data-plan-price]");r==null||r.forEach(l=>{var n;const s=((n=l.dataset)==null?void 0:n.planPrice)||null,c=t(s,(o==null?void 0:o.count)||w[O.PLANS_TEASER].lines);l.innerText=`${x(c,!0)}/mo*`})}e(),i();function t(o,a){var y,f;const r=w[O.PLANS_TEASER].plans[o];if(!r)return null;const l=a,s=w[O.PLANS_TEASER].discount,c=r.prices[l-1]||r.prices.at(-1),n=(y=window.vz_perks_data)==null?void 0:y["perks-pricing"];let d=0;n&&((f=r==null?void 0:r.perks)!=null&&f.length)&&(d=u(r.perks));function u(p){return p==null?void 0:p.reduce((m,g)=>{var N,z;if(g in be)return m;const k=parseInt((z=(N=n[g])==null?void 0:N.data)==null?void 0:z.chargePrice);return m+(isNaN(k)?0:k)},0)}const h=Object.values(s).reduce((p,m)=>p+m.num,0);return Math.max(0,c+d-h)}function i(){b.querySelectorAll("#plan-compare-table tbody tr:not(.details-row)").forEach(a=>{const r=a.nextElementSibling;if(!r||!r.classList.contains("details-row"))return;r.id||(r.id=`details-${Math.random().toString(36).substring(2,9)}`),a.classList.add("custom_button"),a.setAttribute("aria-expanded","false"),a.setAttribute("aria-controls",r.id);const l=a.querySelector("td:last-child");if(!l||l.querySelector("button.accordion-toggle"))return;const c=document.createElement("button");c.classList.add("accordion-toggle");const n=a.getAttribute("aria-label")||"";c.setAttribute("aria-label",`${n} row details`),c.setAttribute("aria-expanded","false"),c.setAttribute("aria-controls",r.id),c.tabIndex=-1,l.appendChild(c);const d=()=>{const u=a.getAttribute("aria-expanded")==="true";document.querySelectorAll('#plan-compare-table tbody tr[aria-expanded="true"]').forEach(f=>{f.setAttribute("aria-expanded","false");const p=f.nextElementSibling;p&&p.classList.contains("details-row")&&(p.hidden=!0);const m=f.querySelector("button.accordion-toggle");m&&m.setAttribute("aria-expanded","false")});const y=!u;a.setAttribute("aria-expanded",String(y)),c.setAttribute("aria-expanded",String(y)),r.hidden=!y};a.addEventListener("click",u=>{u.target.closest("a")||d()}),a.addEventListener("keydown",u=>{switch(u.key){case"Enter":case" ":u.preventDefault(),d();break;case"ArrowRight":case"ArrowDown":u.preventDefault(),c.focus();break}}),c.addEventListener("keydown",u=>{switch(u.key){case"Enter":case" ":u.preventDefault(),d();break;case"ArrowLeft":case"ArrowUp":u.preventDefault(),a.focus();break}})})}})();yi();document.body.addEventListener("castIsReady",function(){yi()});function yi(){var e;(e=b.querySelectorAll('[data-frontier-verification="frontier-verification"]'))==null||e.forEach(t=>{B("isFTRAuthenticated")&&(t.style.display="none")})}function On(){return b.querySelector('[data-vui-modal-show="modal-plan-clear"]')}function Fe(){const e=b.querySelector("[data-modal-plan-clear]"),t=e==null?void 0:e.querySelector(".vui\\:modal__content"),i=e==null?void 0:e.querySelector(".vui\\:modal__backdrop");return{modal:e,modalContent:t,backdrop:i}}function ht(){return b.querySelector("[data-modal-plan-clear] [data-vui-modal-close]")}function yt(){ht().dispatchEvent(new Event("click"))}function Vn(){const e=On();e&&e.dispatchEvent(new Event("click"))}function Dn(e,t){const{modalContent:i}=Fe();if(!i)return;const o=`
    <div class="vui:u-display-flex vui:u-flex-column vui:u-flex-row@md vui:u-flex-column vui:u-gap-3x">
      <button data-confirm="true" data-tab-change="" class="has:flex-1 vui:u-width-100 vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
        I’m sure
      </button>
      <button data-vui-modal-close data-vui-modal-hide class="has:flex-1 vui:u-width-100 vui:button vui:button--secondary vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
        Cancel
      </button>
    </div>
  `;let a="",r="";Be.TEASER_PLAN_TAB===e?(a="Are you sure you want to leave the plan builder?",r="To start with popular plans, all selections will be cleared. This can’t be undone."):Be.POP_PLAN_TAB===e?(a="Are you sure you want to leave our popular plans?",r="To build your own plan, all selections will be cleared. This can’t be undone."):(a="Are you sure you want to leave it?",r="All selections will be cleared. This can’t be undone."),i.innerHTML=`
    <div>
      <h3 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-4x">
        ${a}
      </h3>
      <p class="vui:text vui:text--body-medium vui:text vui:text--body-large@lg vui:text--body-large@lg vui:u-margin-bottom-6x vui:u-margin-bottom-8x@lg">
        ${r}
      </p>
      ${o}
    </div>
  `}function Mn(){const{modalContent:e}=Fe();e.innerHTML=`
  <div>
    <h3 class="vui:text vui:text--title-small vui:text--title-medium@lg vui:u-margin-bottom-6x">
      Are you sure you want to clear your cart?
    </h3>
    <div class="vui:u-display-flex vui:u-flex-column vui:u-flex-row@md  vui:u-flex-row@md  vui:u-gap-3x">
      <button data-confirm="true" class="has:flex-1 vui:u-width-100 vui:button vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
       I’m sure
      </button>
      <button data-vui-modal-close data-vui-modal-hide class="has:flex-1 vui:u-width-100 vui:button vui:button--secondary vui:u-padding-top-2x vui:u-padding-bottom-2x vui:u-padding-top-3x@lg vui:u-padding-bottom-3x@lg vui:u-padding-left-4x vui:u-padding-right-4x vui:u-padding-left-6x@lg vui:u-padding-right-6x@lg">
        Cancel
      </button>
    </div>
   </div>
  `}function Ln(){var e;(e=b.querySelector(`[aria-controls="${oe.nextTab}"]`))==null||e.dispatchEvent(new Event("click")),setTimeout(()=>{var t;(t=b.querySelector(`#tabs-panel #${oe.nextTab}`))==null||t.focus({preventScroll:!0})},500)}function Wn(){const{modalContent:e,backdrop:t,modal:i}=Fe(),o=ht();i.addEventListener("keyup",bi),t.addEventListener("click",Se),o.addEventListener("click",Se),e.addEventListener("click",Un)}function Un({target:e}){if("confirm"in e.dataset){if(e.dataset.confirm==="true"&&"tabChange"in e.dataset){_n();return}if(e.dataset.confirm==="true"){Fn();return}yt()}}function bi(e){(e.key==="Escape"||e.key==="Esc")&&Se()}function Se(){const{backdrop:e,modal:t}=Fe(),i=ht();t.removeEventListener("keyup",bi),e.removeEventListener("click",Se),i.removeEventListener("click",Se)}function Fn(){ie.clearAllLines(),ce(),Ae(),ie.clearSelectedTable(),b.dispatchEvent(new CustomEvent("selected-plan")),yt()}function _n(){ie.clearAllLines(),ce(),Ae(),b.dispatchEvent(new CustomEvent("selected-plan")),yt(),Ln()}function Rn(e){Vn(),e==="tab"?Dn(oe.activeTab):Mn(),Wn()}function fi(e=null){Rn(e)}const Ht=document.querySelector("#plans-teaser-perks-tab-heading"),xt=document.querySelector("#popular-plans-perks-tab-heading");(function(){Ot(),document.body.addEventListener("castIsReady",function(){Ot()})})();function Ot(){const e=b.querySelector(".vui\\:tabs");e==null||e.addEventListener("click",Gn,!0)}function Gn(e){const{target:t}=e,i=t.getAttribute("role")==="tab"?t:t.closest('[role="tab"]');if(!i){console.warn("tabElement is null");return}const o=i.getAttribute("aria-controls"),a=Object.keys(P.SELECTED_PLANS.plans).length,r=document.getElementById(o);if(r){let l=function(s){Xe(r),r.removeEventListener("animationend",l)};r.addEventListener("animationend",l)}if(oe.activeTab!==o){if(a>0){Bn(e,o);return}qn(o),Yn(o),oe.activeTab=o,setTimeout(()=>{jn()},500)}}function qn(e){Ht.style.display="none",xt.style.display="none",e!=null&&e.includes("teaser-plan-tab")?Ht.style.display="block":xt.style.display="block"}function Bn(e,t){e.stopImmediatePropagation(),oe.nextTab=t,fi("tab")}function Yn(e){var a;const t=b.querySelector(`#${oe.activeTab} lines-counter`),i=b.querySelector(`#${e} lines-counter`),o=(a=t==null?void 0:t.dataset)==null?void 0:a.controlLines;w!=null&&w[o]&&($n(o,e),Xn(o,i))}function $n(e,t){var i,o;(o=Object.entries(((i=w==null?void 0:w[e])==null?void 0:i.discount)||{}))==null||o.forEach(([a,r])=>{const l=b.querySelector(`#${t} [data-discount="${a}"]`);l==null||l.setAttribute("data-state",r.state)})}function Xn(e,t){var i;t==null||t.setAttribute("data-count",(i=w==null?void 0:w[e])==null?void 0:i.lines)}function jn(){const e=b.querySelectorAll(`#${oe.activeTab} [data-vui-carousel]`);window.vzfed&&window.vzfed.vui&&window.vzfed.vui.core&&window.vzfed.vui.core.carousel?e.forEach(t=>{new window.vzfed.vui.core.carousel(t).init()}):(window.dispatchEvent(new Event("resize")),console.warn("window.vzfed.vui.core.carousel not found. Dispatching a resize event as a fallback."))}Kn();function Kn(){document.body.addEventListener("castIsReady",function(){Qn()})}function Qn(){var i,o;const e=b.querySelector("lines-counter");(((o=(i=vzfed==null?void 0:vzfed.cast)==null?void 0:i.audience)==null?void 0:o.getAllMatchedAudiences())||[]).forEach(a=>{a==="type_frontier"&&(te.updateLines(O.PLANS_TEASER),e.dataset.count=2)})}function Zn(e){pa(e)}const $=b.querySelector("#perks-grid"),Vt=$==null?void 0:$.querySelector("[data-reveal-toggle] .label"),Dt=$==null?void 0:$.querySelector("[data-reveal-toggle]");function $e(e,t){V.send(e),Zn(t),Wr(),Lr()}function Jn(){var e;$&&(Object.keys(P.SELECTED_PLANS.plans).length>0?($.dataset.readyToChoose="",Ae()):(e=$.dataset)==null||delete e.readyToChoose)}function Mt({target:e}){const{perkOptionSelect:t,perkOptionEdit:i}=e.dataset||{};t&&$e("SELECT_PERK",t),i&&$e("EDIT_SELECTION",i)}function el(){$&&($.removeEventListener("click",Mt),$.addEventListener("click",Mt))}function tl(){var t;if(!$)return;(t=Rt().init($)[0].events)==null||t.updated(({state:i})=>{const o=i?"Show less":"Show more";Vt&&(Vt.innerHTML=o),Dt&&Dt.setAttribute("aria-label",o+" perks")})}function vi(){el(),tl()}document.addEventListener("DOMContentLoaded",vi);document.body.addEventListener("castIsReady",vi);b.addEventListener("selected-plan",Jn);function il(){if(!Ye||!ye||!Oe){_.style.display="none";return}Ye.addEventListener("click",()=>{cn()}),Oe.addEventListener("click",Ue),ye.addEventListener("click",e),b.addEventListener("selected-plan",t=>{Et(),Te(),ze(),Ie()}),b.addEventListener("selected-perk",t=>{Te(),ze(),Ie()}),b.addEventListener("control-toggle",({detials:t})=>{Te(),ze(),Ie()}),b.addEventListener("control-lines",({detials:t})=>{Te(),ze(),Ie()}),Et();function e(t){var o,a;const{target:i}=t;((o=i.dataset)!=null&&o.closeDetails||i.closest("[data-close-details]"))&&dn(i.closest("[data-summary-line]")),"planOptionEdit"in i.dataset&&ii(t),"perkOptionEdit"in i.dataset&&$e("EDIT_SELECTION",(a=i.dataset)==null?void 0:a.perkOptionEdit),"lineRemove"in i.dataset&&un(i.dataset.lineRemove),"clearCart"in i.dataset&&fi()}}document.addEventListener("DOMContentLoaded",()=>{il()});ol();function ol(){b.addEventListener("selected-plan",al)}function al(){const e=b.querySelector(".shop-phones");if(Object.keys(P.SELECTED_PLANS.plans).length>0){e.style.display="none";return}e.style.display="block"}const qe=b.querySelector("[data-next-steps]"),Lt=b.querySelector("vz-sticky-cmp.sticky-next-steps");b.addEventListener("selected-plan",function(e){gi(),wi()});b.addEventListener("selected-perk",function(e){wi()});function gi(){var i;((i=Object.entries(P.SELECTED_PLANS.plans).filter(([o,a])=>(a==null?void 0:a.plan)!==void 0))==null?void 0:i.length)>0?Lt.style.display="block":Lt.style.display="none"}function wi(){qe&&(Object.entries(P.SELECTED_PLANS.plans).some(([i,o])=>Array.isArray(o==null?void 0:o.perks)&&o.perks.length>0)?qe.dataset.perkAdded="":delete qe.dataset.perkAdded)}gi();const rl=b.querySelector("#terms-conditions-perks [data-perk-terms]");b.addEventListener("selected-perk",function(e){const t=window.vz_perks_data,{selectedPerkForLines:i}=V.getContext(),o=new Set;Object.entries(i).forEach(([a,r])=>{var l;(l=r==null?void 0:r.perks)==null||l.forEach(s=>{o.has(s)||o.add(s)})}),rl.innerHTML=`
  ${[...o].map(a=>{const r=t.perks[a];if(!r)throw new Error(`Adding terms-conditions-perks: Missing data for ID "${a}"`);const{displayName:l,termsAndConditions:s}=r.data;return`
     <h2>${l}</h2>
    ${s}
    `}).join("")}
    `});let nl=document.getElementById("faq_spot_code");function ll(){let e=null;e="/support/spot/?tag=bayou-plan-faqs&count=9&t=1589217688376",fetch(e).then(t=>{if(!t.ok)throw new Error(`HTTP error! Status: ${t.status}`);return t.json()}).then(t=>{sl(t)}).catch(t=>{console.error("error:",t)})}function sl(e){for(var t=0;t<e.length;t++){let i=`<details class="vui:accordion vui:accordion--border">
          <summary class="vui:accordion__summary">
            <h3 class="vui:text vui:text--bold vui:text--title-xsmall"> ${e[t].question}</h3>
          </summary>
          <div class="vui:accordion__content">
            <p class="vui:text vui:text--body-large">
                ${e[t].answer_html}
            </p>
          </div>
        </details>`;nl.insertAdjacentHTML("beforeend",i)}}ll();(function(){const e={FETCHING:"fetchingBroadband",FETCHED:"fetchedBroadband",ERROR:"errorBroadband"},t=[ee.UNLIMITED_ULTIMATE,ee.UNLIMITED_PLUS,ee.UNLIMITED_WELCOME];let i=null;const o=(p,m=null)=>b.dispatchEvent(new CustomEvent(p,{detail:m})),a=p=>new Promise(m=>setTimeout(m,p)),r=()=>!1,l=()=>B("loggedIn")||B("myAccount")?Ri:_i,s=()=>B("loggedIn")||B("myAccount")?Yi:Bi,c=p=>p==null?void 0:p.filter(m=>m.planSubCategory==="Smartphone"&&t.includes(m.planCode));async function n(){try{o(e.FETCHING);let p;const m=Ee("vz-user-address");if(!r()){const k=await fetch(l(),{method:"POST",headers:{"Content-Type":"application/json",channelId:"VZW-DOTCOM"},body:JSON.stringify({queryString:"vzw/fcc/wireless/getPlanDetails.all.json"})});if(!k.ok)throw new Error(`HTTP error! Status: ${k.status}`);const N=await k.json();if(p=N==null?void 0:N.plans,p&&(m!=null&&m.dispstr))return i=p,d(m,p)}const g=c(p);if(!g)throw new Error("wrong data");i=g,window.broadbandPlans=g,o(e.FETCHED,g)}catch(p){y(p,"Grid broadband error in fetch:")}}async function d(p,m){try{o(e.FETCHING),r();const g=await fetch(s(),{method:"POST",headers:{"Content-Type":"application/json",channelId:"VZW-DOTCOM"},body:JSON.stringify({data:{planIds:t,address:{addressLine1:p==null?void 0:p.dispstr,city:p==null?void 0:p.muni,state:p==null?void 0:p.state,zipCode:p==null?void 0:p.zip},planInfoRequired:!0,isMaxTier:!0,isAutoPayTierScheme:!1}})});if(!g.ok)throw new Error(`HTTP error! Status: ${g.status}`);const k=await g.json(),N=u(k,m);h(N)}catch(g){y(g,"Fetch surcharge error:")}}function u(p,m){return m.map(g=>{var S,I;const k={...g,sections:g.sections.map(A=>({...A,data:Array.isArray(A.data)?[...A.data]:[]}))},N=(S=p==null?void 0:p.data)==null?void 0:S.planTaxData.find(A=>(A==null?void 0:A.planId)===(k==null?void 0:k.planCode)),z=((I=N==null?void 0:N.taxDetails)==null?void 0:I.map(A=>({level:"l2",label:A==null?void 0:A.taxDescription,value:`$${A==null?void 0:A.taxAmount}`,...A})))||[];return k.sections=k.sections.map(A=>A.id==="additionalCharges"?{...A,data:[{label:"Provider Monthly Fees",level:"l1"},...z,...A.data]}:A),{...k,providerSurcharges:!0}})}function h(p){window.broadbandPlans=p,o(e.FETCHED,p)}function y(p,m){console.warn(m,p),i=null,window.broadbandPlans=null,o(e.ERROR,p.message)}function f(){const p=Ee("vz-user-address");i&&(p!=null&&p.dispstr)&&d(p,i)}n(),b.addEventListener("user-address",f)})();(function(){(async()=>{try{const t=await fetch("/content/caas/plan/aggregated-perks.model.json");if(!t.ok)throw new Error(`HTTP error! Status: ${t.status}`);const i=await t.json();window.vz_perks_data=i,b.dispatchEvent(new CustomEvent("perk-data-loaded",{detail:i}))}catch(t){console.warn(t),b.dispatchEvent(new CustomEvent("perk-data-error",{detail:{message:t.message,error:t}}))}})()})();(function(){function e(){b.querySelectorAll("br:not([aria-hidden])").forEach(i=>{i.setAttribute("aria-hidden","true");const o=i.previousSibling;o&&o.nodeType===Node.TEXT_NODE&&(o.textContent=o.textContent.trimEnd()+`
`)})}document.addEventListener("DOMContentLoaded",e)})();cl();function cl(){dl(),ul()}function ul(){B("isFTRAuthenticated")&&(window.vzdl.page.subflow="m+h_ftr")}function dl(){const e=b.querySelectorAll("[data-vui-modal]");document.addEventListener("DOMContentLoaded",function(){e==null||e.forEach(t=>{var o;const i=(o=t==null?void 0:t.dataset)==null?void 0:o.vuiModal;t.addEventListener("show",function(){var a,r;(r=(a=window==null?void 0:window.vztag)==null?void 0:a.api)==null||r.dispatch("openView",{name:i,selector:`[data-vui-modal="${i}"]`})}),t.addEventListener("fire",function(){})})})}Ei();
