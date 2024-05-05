
<!DOCTYPE html>
<html>
<head itemscope itemtype="https://schema.org/WebSite">
<meta charset="utf-8">
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"2315e0b361","applicationID":"9961421","transactionName":"dVwNRxYMCFtVS01CQllXFlAQTAheRlw9QkJTRQpWEw==","queueTime":3,"applicationTime":14,"agent":""}</script>
<script type="text/javascript">(window.NREUM||(NREUM={})).init={ajax:{deny_list:["bam.nr-data.net"]}};(window.NREUM||(NREUM={})).loader_config={licenseKey:"2315e0b361",applicationID:"9961421"};;/*! For license information please see nr-loader-rum-1.255.0.min.js.LICENSE.txt */
(()=>{var e,t,r={234:(e,t,r)=>{"use strict";r.d(t,{P_:()=>v,Mt:()=>b,C5:()=>s,OP:()=>k,lF:()=>N,Yu:()=>_,Dg:()=>m,CX:()=>c,GE:()=>w,sU:()=>R});var n=r(8632),i=r(9567);const o={beacon:n.ce.beacon,errorBeacon:n.ce.errorBeacon,licenseKey:void 0,applicationID:void 0,sa:void 0,queueTime:void 0,applicationTime:void 0,ttGuid:void 0,user:void 0,account:void 0,product:void 0,extra:void 0,jsAttributes:{},userAttributes:void 0,atts:void 0,transactionName:void 0,tNamePlain:void 0},a={};function s(e){if(!e)throw new Error("All info objects require an agent identifier!");if(!a[e])throw new Error("Info for ".concat(e," was never set"));return a[e]}function c(e,t){if(!e)throw new Error("All info objects require an agent identifier!");a[e]=(0,i.D)(t,o);const r=(0,n.ek)(e);r&&(r.info=a[e])}const u=e=>{if(!e||"string"!=typeof e)return!1;try{document.createDocumentFragment().querySelector(e)}catch{return!1}return!0};var d=r(7056),l=r(50);const f="[data-nr-mask]",g=()=>{const e={mask_selector:"*",block_selector:"[data-nr-block]",mask_input_options:{color:!1,date:!1,"datetime-local":!1,email:!1,month:!1,number:!1,range:!1,search:!1,tel:!1,text:!1,time:!1,url:!1,week:!1,textarea:!1,select:!1,password:!0}};return{feature_flags:[],proxy:{assets:void 0,beacon:void 0},privacy:{cookies_enabled:!0},ajax:{deny_list:void 0,block_internal:!0,enabled:!0,harvestTimeSeconds:10,autoStart:!0},distributed_tracing:{enabled:void 0,exclude_newrelic_header:void 0,cors_use_newrelic_header:void 0,cors_use_tracecontext_headers:void 0,allowed_origins:void 0},session:{domain:void 0,expiresMs:d.oD,inactiveMs:d.Hb},ssl:void 0,obfuscate:void 0,jserrors:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},metrics:{enabled:!0,autoStart:!0},page_action:{enabled:!0,harvestTimeSeconds:30,autoStart:!0},page_view_event:{enabled:!0,autoStart:!0},page_view_timing:{enabled:!0,harvestTimeSeconds:30,long_task:!1,autoStart:!0},session_trace:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},harvest:{tooManyRequestsDelay:60},session_replay:{autoStart:!0,enabled:!1,harvestTimeSeconds:60,preload:!1,sampling_rate:10,error_sampling_rate:100,collect_fonts:!1,inline_images:!1,inline_stylesheet:!0,mask_all_inputs:!0,get mask_text_selector(){return e.mask_selector},set mask_text_selector(t){u(t)?e.mask_selector="".concat(t,",").concat(f):""===t||null===t?e.mask_selector=f:(0,l.Z)("An invalid session_replay.mask_selector was provided. '*' will be used.",t)},get block_class(){return"nr-block"},get ignore_class(){return"nr-ignore"},get mask_text_class(){return"nr-mask"},get block_selector(){return e.block_selector},set block_selector(t){u(t)?e.block_selector+=",".concat(t):""!==t&&(0,l.Z)("An invalid session_replay.block_selector was provided and will not be used",t)},get mask_input_options(){return e.mask_input_options},set mask_input_options(t){t&&"object"==typeof t?e.mask_input_options={...t,password:!0}:(0,l.Z)("An invalid session_replay.mask_input_option was provided and will not be used",t)}},spa:{enabled:!0,harvestTimeSeconds:10,autoStart:!0},soft_navigations:{enabled:!0,harvestTimeSeconds:10,autoStart:!0}}},p={},h="All configuration objects require an agent identifier!";function v(e){if(!e)throw new Error(h);if(!p[e])throw new Error("Configuration for ".concat(e," was never set"));return p[e]}function m(e,t){if(!e)throw new Error(h);p[e]=(0,i.D)(t,g());const r=(0,n.ek)(e);r&&(r.init=p[e])}function b(e,t){if(!e)throw new Error(h);var r=v(e);if(r){for(var n=t.split("."),i=0;i<n.length-1;i++)if("object"!=typeof(r=r[n[i]]))return;r=r[n[n.length-1]]}return r}const y={accountID:void 0,trustKey:void 0,agentID:void 0,licenseKey:void 0,applicationID:void 0,xpid:void 0},A={};function w(e,t){if(!e)throw new Error("All loader-config objects require an agent identifier!");A[e]=(0,i.D)(t,y);const r=(0,n.ek)(e);r&&(r.loader_config=A[e])}const _=(0,n.mF)().o;var x=r(385),E=r(6818);const D={buildEnv:E.Re,customTransaction:void 0,disabled:!1,distMethod:E.gF,isolatedBacklog:!1,loaderType:void 0,maxBytes:3e4,offset:Math.floor(x._A?.performance?.timeOrigin||x._A?.performance?.timing?.navigationStart||Date.now()),onerror:void 0,origin:""+x._A.location,ptid:void 0,releaseIds:{},appMetadata:{},session:void 0,xhrWrappable:"function"==typeof x._A.XMLHttpRequest?.prototype?.addEventListener,version:E.q4,denyList:void 0,harvestCount:0,timeKeeper:void 0},S={};function k(e){if(!e)throw new Error("All runtime objects require an agent identifier!");if(!S[e])throw new Error("Runtime for ".concat(e," was never set"));return S[e]}function R(e,t){if(!e)throw new Error("All runtime objects require an agent identifier!");S[e]=(0,i.D)(t,D);const r=(0,n.ek)(e);r&&(r.runtime=S[e])}function N(e){return function(e){try{const t=s(e);return!!t.licenseKey&&!!t.errorBeacon&&!!t.applicationID}catch(e){return!1}}(e)}},9567:(e,t,r)=>{"use strict";r.d(t,{D:()=>i});var n=r(50);function i(e,t){try{if(!e||"object"!=typeof e)return(0,n.Z)("Setting a Configurable requires an object as input");if(!t||"object"!=typeof t)return(0,n.Z)("Setting a Configurable requires a model to set its initial properties");const r=Object.create(Object.getPrototypeOf(t),Object.getOwnPropertyDescriptors(t)),o=0===Object.keys(r).length?e:r;for(let a in o)if(void 0!==e[a])try{Array.isArray(e[a])&&Array.isArray(t[a])?r[a]=Array.from(new Set([...e[a],...t[a]])):"object"==typeof e[a]&&"object"==typeof t[a]?r[a]=i(e[a],t[a]):r[a]=e[a]}catch(e){(0,n.Z)("An error occurred while setting a property of a Configurable",e)}return r}catch(e){(0,n.Z)("An error occured while setting a Configurable",e)}}},6818:(e,t,r)=>{"use strict";r.d(t,{Re:()=>i,gF:()=>o,q4:()=>n});const n="1.255.0",i="PROD",o="CDN"},385:(e,t,r)=>{"use strict";r.d(t,{Nk:()=>d,Tt:()=>s,_A:()=>o,cv:()=>l,iS:()=>a,il:()=>n,ux:()=>c,v6:()=>i,w1:()=>u});const n="undefined"!=typeof window&&!!window.document,i="undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self.navigator instanceof WorkerNavigator||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis.navigator instanceof WorkerNavigator),o=n?window:"undefined"!=typeof WorkerGlobalScope&&("undefined"!=typeof self&&self instanceof WorkerGlobalScope&&self||"undefined"!=typeof globalThis&&globalThis instanceof WorkerGlobalScope&&globalThis),a=Boolean("hidden"===o?.document?.visibilityState),s=/iPad|iPhone|iPod/.test(o.navigator?.userAgent),c=s&&"undefined"==typeof SharedWorker,u=((()=>{const e=o.navigator?.userAgent?.match(/Firefox[/\s](\d+\.\d+)/);Array.isArray(e)&&e.length>=2&&e[1]})(),Boolean(n&&window.document.documentMode)),d=!!o.navigator?.sendBeacon,l=Math.floor(o?.performance?.timeOrigin||o?.performance?.timing?.navigationStart||Date.now())},1117:(e,t,r)=>{"use strict";r.d(t,{w:()=>o});var n=r(50);const i={agentIdentifier:"",ee:void 0};class o{constructor(e){try{if("object"!=typeof e)return(0,n.Z)("shared context requires an object as input");this.sharedContext={},Object.assign(this.sharedContext,i),Object.entries(e).forEach((e=>{let[t,r]=e;Object.keys(i).includes(t)&&(this.sharedContext[t]=r)}))}catch(e){(0,n.Z)("An error occurred while setting SharedContext",e)}}}},8e3:(e,t,r)=>{"use strict";r.d(t,{LP:()=>l,RP:()=>c,o5:()=>u});var n=r(8325),i=r(1284),o=r(4322),a=r(3325);const s={};function c(e,t){const r={staged:!1,priority:a.p[t]||0};d(e),s[e].get(t)||s[e].set(t,r)}function u(e,t){d(e),s[e].get(t)&&s[e].delete(t),s[e].size&&f(e)}function d(e){if(!e)throw new Error("agentIdentifier required");s[e]||(s[e]=new Map)}function l(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"",t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"feature",r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if(d(e),!e||!s[e].get(t)||r)return g(e,t);s[e].get(t).staged=!0,f(e)}function f(e){const t=[...s[e]];t.every((e=>{let[t,r]=e;return r.staged}))&&(t.sort(((e,t)=>e[1].priority-t[1].priority)),t.forEach((t=>{let[r]=t;s[e].delete(r),g(e,r)})))}function g(e,t){const r=e?n.ee.get(e):n.ee,a=o.X.handlers;if(r.backlog&&a){var s=r.backlog[t],c=a[t];if(c){for(var u=0;s&&u<s.length;++u)p(s[u],c);(0,i.D)(c,(function(e,t){(0,i.D)(t,(function(t,r){r[0].on(e,r[1])}))}))}r.isolatedBacklog||delete a[t],r.backlog[t]=null,r.emit("drain-"+t,[])}}function p(e,t){var r=e[1];(0,i.D)(t[r],(function(t,r){var n=e[0];if(r[0]===n){var i=r[1],o=e[3],a=e[2];i.apply(o,a)}}))}},8325:(e,t,r)=>{"use strict";r.d(t,{A:()=>c,ee:()=>u});var n=r(8632),i=r(2210),o=r(234);class a{constructor(e){this.contextId=e}}var s=r(3117);const c="nr@context:".concat(s.a),u=function e(t,r){var n={},s={},d={},l=!1;try{l=16===r.length&&(0,o.OP)(r).isolatedBacklog}catch(e){}var f={on:p,addEventListener:p,removeEventListener:function(e,t){var r=n[e];if(!r)return;for(var i=0;i<r.length;i++)r[i]===t&&r.splice(i,1)},emit:function(e,r,n,i,o){!1!==o&&(o=!0);if(u.aborted&&!i)return;t&&o&&t.emit(e,r,n);for(var a=g(n),c=h(e),d=c.length,l=0;l<d;l++)c[l].apply(a,r);var p=m()[s[e]];p&&p.push([f,e,r,a]);return a},get:v,listeners:h,context:g,buffer:function(e,t){const r=m();if(t=t||"feature",f.aborted)return;Object.entries(e||{}).forEach((e=>{let[n,i]=e;s[i]=t,t in r||(r[t]=[])}))},abort:function(){f._aborted=!0,Object.keys(f.backlog).forEach((e=>{delete f.backlog[e]}))},isBuffering:function(e){return!!m()[s[e]]},debugId:r,backlog:l?{}:t&&"object"==typeof t.backlog?t.backlog:{},isolatedBacklog:l};return Object.defineProperty(f,"aborted",{get:()=>{let e=f._aborted||!1;return e||(t&&(e=t.aborted),e)}}),f;function g(e){return e&&e instanceof a?e:e?(0,i.X)(e,c,(()=>new a(c))):new a(c)}function p(e,t){n[e]=h(e).concat(t)}function h(e){return n[e]||[]}function v(t){return d[t]=d[t]||e(f,t)}function m(){return f.backlog}}(void 0,"globalEE"),d=(0,n.fP)();d.ee||(d.ee=u)},5546:(e,t,r)=>{"use strict";r.d(t,{E:()=>n,p:()=>i});var n=r(8325).ee.get("handle");function i(e,t,r,i,o){o?(o.buffer([e],i),o.emit(e,t,r)):(n.buffer([e],i),n.emit(e,t,r))}},4322:(e,t,r)=>{"use strict";r.d(t,{X:()=>o});var n=r(5546);o.on=a;var i=o.handlers={};function o(e,t,r,o){a(o||n.E,i,e,t,r)}function a(e,t,r,i,o){o||(o="feature"),e||(e=n.E);var a=t[o]=t[o]||{};(a[r]=a[r]||[]).push([e,i])}},3239:(e,t,r)=>{"use strict";r.d(t,{bP:()=>s,iz:()=>c,m$:()=>a});var n=r(385);let i=!1,o=!1;try{const e={get passive(){return i=!0,!1},get signal(){return o=!0,!1}};n._A.addEventListener("test",null,e),n._A.removeEventListener("test",null,e)}catch(e){}function a(e,t){return i||o?{capture:!!e,passive:i,signal:t}:!!e}function s(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;window.addEventListener(e,t,a(r,n))}function c(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2],n=arguments.length>3?arguments[3]:void 0;document.addEventListener(e,t,a(r,n))}},3117:(e,t,r)=>{"use strict";r.d(t,{a:()=>n});const n=(0,r(4402).Rl)()},4402:(e,t,r)=>{"use strict";r.d(t,{Rl:()=>a,ky:()=>s});var n=r(385);const i="xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx";function o(e,t){return e?15&e[t]:16*Math.random()|0}function a(){const e=n._A?.crypto||n._A?.msCrypto;let t,r=0;return e&&e.getRandomValues&&(t=e.getRandomValues(new Uint8Array(30))),i.split("").map((e=>"x"===e?o(t,r++).toString(16):"y"===e?(3&o()|8).toString(16):e)).join("")}function s(e){const t=n._A?.crypto||n._A?.msCrypto;let r,i=0;t&&t.getRandomValues&&(r=t.getRandomValues(new Uint8Array(e)));const a=[];for(var s=0;s<e;s++)a.push(o(r,i++).toString(16));return a.join("")}},7056:(e,t,r)=>{"use strict";r.d(t,{Bq:()=>n,Hb:()=>a,IK:()=>u,K4:()=>i,oD:()=>o,uT:()=>c,wO:()=>s});const n="NRBA",i="SESSION",o=144e5,a=18e5,s={PAUSE:"session-pause",RESET:"session-reset",RESUME:"session-resume",UPDATE:"session-update"},c={SAME_TAB:"same-tab",CROSS_TAB:"cross-tab"},u={OFF:0,FULL:1,ERROR:2}},7894:(e,t,r)=>{"use strict";function n(){return Math.floor(performance.now())}r.d(t,{z:()=>n})},50:(e,t,r)=>{"use strict";function n(e,t){"function"==typeof console.warn&&(console.warn("New Relic: ".concat(e)),t&&console.warn(t))}r.d(t,{Z:()=>n})},2825:(e,t,r)=>{"use strict";r.d(t,{N:()=>c,T:()=>s});var n=r(8325),i=r(385);const o="newrelic";const a=new Set,s={};function c(e,t){const r=n.ee.get(t);s[t]??={},e&&"object"==typeof e&&(a.has(t)||(r.emit("rumresp",[e]),s[t]=e,a.add(t),function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};try{i._A.dispatchEvent(new CustomEvent(o,{detail:e}))}catch(e){}}({loaded:!0})))}},2210:(e,t,r)=>{"use strict";r.d(t,{X:()=>i});var n=Object.prototype.hasOwnProperty;function i(e,t,r){if(n.call(e,t))return e[t];var i=r();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:i,writable:!0,enumerable:!1}),i}catch(e){}return e[t]=i,i}},1284:(e,t,r)=>{"use strict";r.d(t,{D:()=>n});const n=(e,t)=>Object.entries(e||{}).map((e=>{let[r,n]=e;return t(r,n)}))},4351:(e,t,r)=>{"use strict";r.d(t,{P:()=>o});var n=r(8325);const i=()=>{const e=new WeakSet;return(t,r)=>{if("object"==typeof r&&null!==r){if(e.has(r))return;e.add(r)}return r}};function o(e){try{return JSON.stringify(e,i())}catch(e){try{n.ee.emit("internal-error",[e])}catch(e){}}}},3960:(e,t,r)=>{"use strict";r.d(t,{KB:()=>a,b2:()=>o});var n=r(3239);function i(){return"undefined"==typeof document||"complete"===document.readyState}function o(e,t){if(i())return e();(0,n.bP)("load",e,t)}function a(e){if(i())return e();(0,n.iz)("DOMContentLoaded",e)}},8632:(e,t,r)=>{"use strict";r.d(t,{EZ:()=>d,ce:()=>o,ek:()=>u,fP:()=>a,gG:()=>l,h5:()=>c,mF:()=>s});var n=r(385),i=r(7894);const o={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net"};function a(){return n._A.NREUM||(n._A.NREUM={}),void 0===n._A.newrelic&&(n._A.newrelic=n._A.NREUM),n._A.NREUM}function s(){let e=a();return e.o||(e.o={ST:n._A.setTimeout,SI:n._A.setImmediate,CT:n._A.clearTimeout,XHR:n._A.XMLHttpRequest,REQ:n._A.Request,EV:n._A.Event,PR:n._A.Promise,MO:n._A.MutationObserver,FETCH:n._A.fetch}),e}function c(e,t){let r=a();r.initializedAgents??={},t.initializedAt={ms:(0,i.z)(),date:new Date},r.initializedAgents[e]=t}function u(e){let t=a();return t.initializedAgents?.[e]}function d(e,t){a()[e]=t}function l(){return function(){let e=a();const t=e.info||{};e.info={beacon:o.beacon,errorBeacon:o.errorBeacon,...t}}(),function(){let e=a();const t=e.init||{};e.init={...t}}(),s(),function(){let e=a();const t=e.loader_config||{};e.loader_config={...t}}(),a()}},7956:(e,t,r)=>{"use strict";r.d(t,{N:()=>i});var n=r(3239);function i(e){let t=arguments.length>1&&void 0!==arguments[1]&&arguments[1],r=arguments.length>2?arguments[2]:void 0,i=arguments.length>3?arguments[3]:void 0;(0,n.iz)("visibilitychange",(function(){if(t)return void("hidden"===document.visibilityState&&e());e(document.visibilityState)}),r,i)}},3081:(e,t,r)=>{"use strict";r.d(t,{gF:()=>o,mY:()=>i,t9:()=>n,vz:()=>s,xS:()=>a});const n=r(3325).D.metrics,i="sm",o="cm",a="storeSupportabilityMetrics",s="storeEventMetrics"},7633:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewEvent},9251:(e,t,r)=>{"use strict";r.d(t,{t:()=>n});const n=r(3325).D.pageViewTiming},7144:(e,t,r)=>{"use strict";r.d(t,{Ef:()=>i});var n=r(7056);r(3325).D.sessionReplay;const i={RECORD:"recordReplay",PAUSE:"pauseReplay"};n.IK.ERROR,n.IK.FULL,n.IK.OFF},5938:(e,t,r)=>{"use strict";r.d(t,{W:()=>i});var n=r(8325);class i{constructor(e,t,r){this.agentIdentifier=e,this.aggregator=t,this.ee=n.ee.get(e),this.featureName=r,this.blocked=!1}}},2758:(e,t,r)=>{"use strict";r.d(t,{j:()=>w});var n=r(3325),i=r(234),o=r(5546),a=r(8325),s=r(8e3),c=r(3960),u=r(385),d=r(50),l=r(3081),f=r(8632),g=r(7144);const p=["setErrorHandler","finished","addToTrace","addRelease","addPageAction","setCurrentRouteName","setPageViewName","setCustomAttribute","interaction","noticeError","setUserId","setApplicationVersion","start","recordReplay","pauseReplay",g.Ef.RECORD,g.Ef.PAUSE],h=["setErrorHandler","finished","addToTrace","addRelease"];var v=r(7894);function m(){const e=(0,f.gG)();p.forEach((t=>{e[t]=function(){for(var r=arguments.length,n=new Array(r),i=0;i<r;i++)n[i]=arguments[i];return function(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];let o=[];return Object.values(e.initializedAgents).forEach((e=>{e.exposed&&e.api[t]&&o.push(e.api[t](...n))})),o.length>1?o:o[0]}(t,...n)}}))}var b=r(2825);const y=e=>{const t=e.startsWith("http");e+="/",r.p=t?e:"https://"+e};let A=!1;function w(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},p=arguments.length>2?arguments[2]:void 0,w=arguments.length>3?arguments[3]:void 0,{init:_,info:x,loader_config:E,runtime:D={loaderType:p},exposed:S=!0}=t;const k=(0,f.gG)();x||(_=k.init,x=k.info,E=k.loader_config),(0,i.Dg)(e.agentIdentifier,_||{}),(0,i.GE)(e.agentIdentifier,E||{}),x.jsAttributes??={},u.v6&&(x.jsAttributes.isWorker=!0),(0,i.CX)(e.agentIdentifier,x);const R=(0,i.P_)(e.agentIdentifier),N=[x.beacon,x.errorBeacon];A||(R.proxy.assets&&(y(R.proxy.assets),N.push(R.proxy.assets)),R.proxy.beacon&&N.push(R.proxy.beacon),m(),(0,f.EZ)("activatedFeatures",b.T),e.runSoftNavOverSpa&&=!0===R.soft_navigations.enabled&&R.feature_flags.includes("soft_nav")),D.denyList=[...R.ajax.deny_list||[],...R.ajax.block_internal?N:[]],(0,i.sU)(e.agentIdentifier,D),void 0===e.api&&(e.api=function(e,t){let f=arguments.length>2&&void 0!==arguments[2]&&arguments[2];t||(0,s.RP)(e,"api");const p={};var m=a.ee.get(e),b=m.get("tracer"),y="api-",A=y+"ixn-";function w(t,r,n,o){const a=(0,i.C5)(e);return null===r?delete a.jsAttributes[t]:(0,i.CX)(e,{...a,jsAttributes:{...a.jsAttributes,[t]:r}}),E(y,n,!0,o||null===r?"session":void 0)(t,r)}function _(){}h.forEach((e=>{p[e]=E(y,e,!0,"api")})),p.addPageAction=E(y,"addPageAction",!0,n.D.pageAction),p.setPageViewName=function(t,r){if("string"==typeof t)return"/"!==t.charAt(0)&&(t="/"+t),(0,i.OP)(e).customTransaction=(r||"http://custom.transaction")+t,E(y,"setPageViewName",!0)()},p.setCustomAttribute=function(e,t){let r=arguments.length>2&&void 0!==arguments[2]&&arguments[2];if("string"==typeof e){if(["string","number","boolean"].includes(typeof t)||null===t)return w(e,t,"setCustomAttribute",r);(0,d.Z)("Failed to execute setCustomAttribute.\nNon-null value must be a string, number or boolean type, but a type of <".concat(typeof t,"> was provided."))}else(0,d.Z)("Failed to execute setCustomAttribute.\nName must be a string type, but a type of <".concat(typeof e,"> was provided."))},p.setUserId=function(e){if("string"==typeof e||null===e)return w("enduser.id",e,"setUserId",!0);(0,d.Z)("Failed to execute setUserId.\nNon-null value must be a string type, but a type of <".concat(typeof e,"> was provided."))},p.setApplicationVersion=function(e){if("string"==typeof e||null===e)return w("application.version",e,"setApplicationVersion",!1);(0,d.Z)("Failed to execute setApplicationVersion. Expected <String | null>, but got <".concat(typeof e,">."))},p.start=e=>{try{const t=e?"defined":"undefined";(0,o.p)(l.xS,["API/start/".concat(t,"/called")],void 0,n.D.metrics,m);const r=Object.values(n.D);if(void 0===e)e=r;else{if((e=Array.isArray(e)&&e.length?e:[e]).some((e=>!r.includes(e))))return(0,d.Z)("Invalid feature name supplied. Acceptable feature names are: ".concat(r));e.includes(n.D.pageViewEvent)||e.push(n.D.pageViewEvent)}e.forEach((e=>{m.emit("".concat(e,"-opt-in"))}))}catch(e){(0,d.Z)("An unexpected issue occurred",e)}},p[g.Ef.RECORD]=function(){(0,o.p)(l.xS,["API/recordReplay/called"],void 0,n.D.metrics,m),(0,o.p)(g.Ef.RECORD,[],void 0,n.D.sessionReplay,m)},p[g.Ef.PAUSE]=function(){(0,o.p)(l.xS,["API/pauseReplay/called"],void 0,n.D.metrics,m),(0,o.p)(g.Ef.PAUSE,[],void 0,n.D.sessionReplay,m)},p.interaction=function(e){return(new _).get("object"==typeof e?e:{})};const x=_.prototype={createTracer:function(e,t){var r={},i=this,a="function"==typeof t;return(0,o.p)(l.xS,["API/createTracer/called"],void 0,n.D.metrics,m),f||(0,o.p)(A+"tracer",[(0,v.z)(),e,r],i,n.D.spa,m),function(){if(b.emit((a?"":"no-")+"fn-start",[(0,v.z)(),i,a],r),a)try{return t.apply(this,arguments)}catch(e){throw b.emit("fn-err",[arguments,this,e],r),e}finally{b.emit("fn-end",[(0,v.z)()],r)}}}};function E(e,t,r,i){return function(){return(0,o.p)(l.xS,["API/"+t+"/called"],void 0,n.D.metrics,m),i&&(0,o.p)(e+t,[(0,v.z)(),...arguments],r?null:this,i,m),r?void 0:this}}function D(){r.e(75).then(r.bind(r,7438)).then((t=>{let{setAPI:r}=t;r(e),(0,s.LP)(e,"api")})).catch((()=>{(0,d.Z)("Downloading runtime APIs failed..."),m.abort()}))}return["actionText","setName","setAttribute","save","ignore","onEnd","getContext","end","get"].forEach((e=>{x[e]=E(A,e,void 0,f?n.D.softNav:n.D.spa)})),p.setCurrentRouteName=f?E(A,"routeName",void 0,n.D.softNav):E(y,"routeName",!0,n.D.spa),p.noticeError=function(e,t){"string"==typeof e&&(e=new Error(e)),(0,o.p)(l.xS,["API/noticeError/called"],void 0,n.D.metrics,m),(0,o.p)("err",[e,(0,v.z)(),!1,t],void 0,n.D.jserrors,m)},u.il?(0,c.b2)((()=>D()),!0):D(),p}(e.agentIdentifier,w,e.runSoftNavOverSpa)),void 0===e.exposed&&(e.exposed=S),A=!0}},8993:(e,t,r)=>{r.nc=(()=>{try{return document?.currentScript?.nonce}catch(e){}return""})()},3325:(e,t,r)=>{"use strict";r.d(t,{D:()=>n,p:()=>i});const n={ajax:"ajax",jserrors:"jserrors",metrics:"metrics",pageAction:"page_action",pageViewEvent:"page_view_event",pageViewTiming:"page_view_timing",sessionReplay:"session_replay",sessionTrace:"session_trace",softNav:"soft_navigations",spa:"spa"},i={[n.pageViewEvent]:1,[n.pageViewTiming]:2,[n.metrics]:3,[n.jserrors]:4,[n.ajax]:5,[n.sessionTrace]:6,[n.pageAction]:7,[n.spa]:8,[n.softNav]:9,[n.sessionReplay]:10}}},n={};function i(e){var t=n[e];if(void 0!==t)return t.exports;var o=n[e]={exports:{}};return r[e](o,o.exports,i),o.exports}i.m=r,i.d=(e,t)=>{for(var r in t)i.o(t,r)&&!i.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},i.f={},i.e=e=>Promise.all(Object.keys(i.f).reduce(((t,r)=>(i.f[r](e,t),t)),[])),i.u=e=>"nr-rum-1.255.0.min.js",i.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),e={},t="NRBA-1.255.0.PROD:",i.l=(r,n,o,a)=>{if(e[r])e[r].push(n);else{var s,c;if(void 0!==o)for(var u=document.getElementsByTagName("script"),d=0;d<u.length;d++){var l=u[d];if(l.getAttribute("src")==r||l.getAttribute("data-webpack")==t+o){s=l;break}}if(!s){c=!0;var f={75:"sha512-yvalRo3j7RmzZVRzIh42ebWt17oJ4T32AbVOUANV82MjHU2thajbTjqAynar4//H0nKgDvQg5tZT4ehVDsIZ4Q=="};(s=document.createElement("script")).charset="utf-8",s.timeout=120,i.nc&&s.setAttribute("nonce",i.nc),s.setAttribute("data-webpack",t+o),s.src=r,0!==s.src.indexOf(window.location.origin+"/")&&(s.crossOrigin="anonymous"),f[a]&&(s.integrity=f[a])}e[r]=[n];var g=(t,n)=>{s.onerror=s.onload=null,clearTimeout(p);var i=e[r];if(delete e[r],s.parentNode&&s.parentNode.removeChild(s),i&&i.forEach((e=>e(n))),t)return t(n)},p=setTimeout(g.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=g.bind(null,s.onerror),s.onload=g.bind(null,s.onload),c&&document.head.appendChild(s)}},i.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},i.p="https://js-agent.newrelic.com/",(()=>{var e={50:0,832:0};i.f.j=(t,r)=>{var n=i.o(e,t)?e[t]:void 0;if(0!==n)if(n)r.push(n[2]);else{var o=new Promise(((r,i)=>n=e[t]=[r,i]));r.push(n[2]=o);var a=i.p+i.u(t),s=new Error;i.l(a,(r=>{if(i.o(e,t)&&(0!==(n=e[t])&&(e[t]=void 0),n)){var o=r&&("load"===r.type?"missing":r.type),a=r&&r.target&&r.target.src;s.message="Loading chunk "+t+" failed.\n("+o+": "+a+")",s.name="ChunkLoadError",s.type=o,s.request=a,n[1](s)}}),"chunk-"+t,t)}};var t=(t,r)=>{var n,o,[a,s,c]=r,u=0;if(a.some((t=>0!==e[t]))){for(n in s)i.o(s,n)&&(i.m[n]=s[n]);if(c)c(i)}for(t&&t(r);u<a.length;u++)o=a[u],i.o(e,o)&&e[o]&&e[o][0](),e[o]=0},r=self["webpackChunk:NRBA-1.255.0.PROD"]=self["webpackChunk:NRBA-1.255.0.PROD"]||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})(),(()=>{"use strict";i(8993);var e=i(50),t=i(7144),r=i(4402);class n{agentIdentifier;constructor(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:(0,r.ky)(16);this.agentIdentifier=e}#e(t){for(var r=arguments.length,n=new Array(r>1?r-1:0),i=1;i<r;i++)n[i-1]=arguments[i];if("function"==typeof this.api?.[t])return this.api[t](...n);(0,e.Z)("Call to agent api ".concat(t," failed. The API is not currently initialized."))}addPageAction(e,t){return this.#e("addPageAction",e,t)}setPageViewName(e,t){return this.#e("setPageViewName",e,t)}setCustomAttribute(e,t,r){return this.#e("setCustomAttribute",e,t,r)}noticeError(e,t){return this.#e("noticeError",e,t)}setUserId(e){return this.#e("setUserId",e)}setApplicationVersion(e){return this.#e("setApplicationVersion",e)}setErrorHandler(e){return this.#e("setErrorHandler",e)}finished(e){return this.#e("finished",e)}addRelease(e,t){return this.#e("addRelease",e,t)}start(e){return this.#e("start",e)}recordReplay(){return this.#e(t.Ef.RECORD)}pauseReplay(){return this.#e(t.Ef.PAUSE)}addToTrace(e){return this.#e("addToTrace",e)}setCurrentRouteName(e){return this.#e("setCurrentRouteName",e)}interaction(){return this.#e("interaction")}}var o=i(3325),a=i(234);const s=Object.values(o.D);function c(e){const t={};return s.forEach((r=>{t[r]=function(e,t){return!0===(0,a.Mt)(t,"".concat(e,".enabled"))}(r,e)})),t}var u=i(2758);var d=i(8e3),l=i(5938),f=i(3960),g=i(385);const p=e=>g.il&&!0===(0,a.Mt)(e,"privacy.cookies_enabled");function h(e){return a.Yu.MO&&p&&!0===(0,a.Mt)(e,"session_trace.enabled")}class v extends l.W{constructor(e,t,r){let n=!(arguments.length>3&&void 0!==arguments[3])||arguments[3];super(e,t,r),this.auto=n,this.abortHandler=void 0,this.featAggregate=void 0,this.onAggregateImported=void 0,!1===(0,a.Mt)(this.agentIdentifier,"".concat(this.featureName,".autoStart"))&&(this.auto=!1),this.auto&&(0,d.RP)(e,r)}importAggregator(){let t,r=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};if(this.featAggregate)return;if(!this.auto)return void this.ee.on("".concat(this.featureName,"-opt-in"),(()=>{(0,d.RP)(this.agentIdentifier,this.featureName),this.auto=!0,this.importAggregator()}));this.onAggregateImported=new Promise((e=>{t=e}));const n=async()=>{let n;try{if(p(this.agentIdentifier)){const{setupAgentSession:e}=await i.e(75).then(i.bind(i,3108));n=e(this.agentIdentifier)}}catch(t){(0,e.Z)("A problem occurred when starting up session manager. This page will not start or extend any session.",t),this.featureName===o.D.sessionReplay&&this.abortHandler?.()}try{if(!this.#t(this.featureName,n))return(0,d.LP)(this.agentIdentifier,this.featureName),void t(!1);const{lazyFeatureLoader:e}=await i.e(75).then(i.bind(i,8582)),{Aggregate:o}=await e(this.featureName,"aggregate");this.featAggregate=new o(this.agentIdentifier,this.aggregator,r),t(!0)}catch(r){(0,e.Z)("Downloading and initializing ".concat(this.featureName," failed..."),r),this.abortHandler?.(),(0,d.LP)(this.agentIdentifier,this.featureName,!0),t(!1),this.ee&&this.ee.abort()}};g.il?(0,f.b2)((()=>n()),!0):n()}#t(e,t){return e!==o.D.sessionReplay||(r=this.agentIdentifier,n=t,!(!h(r)||!n?.isNew&&!n?.state.sessionReplayMode));var r,n}}var m=i(7633);class b extends v{static featureName=m.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,m.t,r),this.importAggregator()}}var y=i(1117),A=i(1284);class w extends y.w{constructor(e){super(e),this.aggregatedData={}}store(e,t,r,n,i){var o=this.getBucket(e,t,r,i);return o.metrics=function(e,t){t||(t={count:0});return t.count+=1,(0,A.D)(e,(function(e,r){t[e]=_(r,t[e])})),t}(n,o.metrics),o}merge(e,t,r,n,i){var o=this.getBucket(e,t,n,i);if(o.metrics){var a=o.metrics;a.count+=r.count,(0,A.D)(r,(function(e,t){if("count"!==e){var n=a[e],i=r[e];i&&!i.c?a[e]=_(i.t,n):a[e]=function(e,t){if(!t)return e;t.c||(t=x(t.t));return t.min=Math.min(e.min,t.min),t.max=Math.max(e.max,t.max),t.t+=e.t,t.sos+=e.sos,t.c+=e.c,t}(i,a[e])}}))}else o.metrics=r}storeMetric(e,t,r,n){var i=this.getBucket(e,t,r);return i.stats=_(n,i.stats),i}getBucket(e,t,r,n){this.aggregatedData[e]||(this.aggregatedData[e]={});var i=this.aggregatedData[e][t];return i||(i=this.aggregatedData[e][t]={params:r||{}},n&&(i.custom=n)),i}get(e,t){return t?this.aggregatedData[e]&&this.aggregatedData[e][t]:this.aggregatedData[e]}take(e){for(var t={},r="",n=!1,i=0;i<e.length;i++)t[r=e[i]]=Object.values(this.aggregatedData[r]||{}),t[r].length&&(n=!0),delete this.aggregatedData[r];return n?t:null}}function _(e,t){return null==e?function(e){e?e.c++:e={c:1};return e}(t):t?(t.c||(t=x(t.t)),t.c+=1,t.t+=e,t.sos+=e*e,e>t.max&&(t.max=e),e<t.min&&(t.min=e),t):{t:e}}function x(e){return{t:e,min:e,max:e,sos:e*e,c:1}}var E=i(8632),D=i(4351);var S=i(5546),k=i(7956),R=i(3239),N=i(9251),P=i(7894);class j extends v{static featureName=N.t;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,N.t,r),g.il&&((0,k.N)((()=>(0,S.p)("docHidden",[(0,P.z)()],void 0,N.t,this.ee)),!0),(0,R.bP)("pagehide",(()=>(0,S.p)("winPagehide",[(0,P.z)()],void 0,N.t,this.ee))),this.importAggregator())}}var I=i(3081);class T extends v{static featureName=I.t9;constructor(e,t){let r=!(arguments.length>2&&void 0!==arguments[2])||arguments[2];super(e,t,I.t9,r),this.importAggregator()}}new class extends n{constructor(t,r){super(r),g._A?(this.sharedAggregator=new w({agentIdentifier:this.agentIdentifier}),this.features={},(0,E.h5)(this.agentIdentifier,this),this.desiredFeatures=new Set(t.features||[]),this.desiredFeatures.add(b),this.runSoftNavOverSpa=[...this.desiredFeatures].some((e=>e.featureName===o.D.softNav)),(0,u.j)(this,t,t.loaderType||"agent"),this.run()):(0,e.Z)("Failed to initialize the agent. Could not determine the runtime environment.")}get config(){return{info:this.info,init:this.init,loader_config:this.loader_config,runtime:this.runtime}}run(){try{const t=c(this.agentIdentifier),r=[...this.desiredFeatures];r.sort(((e,t)=>o.p[e.featureName]-o.p[t.featureName])),r.forEach((r=>{if(!t[r.featureName]&&r.featureName!==o.D.pageViewEvent)return;if(this.runSoftNavOverSpa&&r.featureName===o.D.spa)return;if(!this.runSoftNavOverSpa&&r.featureName===o.D.softNav)return;const n=function(e){switch(e){case o.D.ajax:return[o.D.jserrors];case o.D.sessionTrace:return[o.D.ajax,o.D.pageViewEvent];case o.D.sessionReplay:return[o.D.sessionTrace];case o.D.pageViewTiming:return[o.D.pageViewEvent];default:return[]}}(r.featureName);n.every((e=>e in this.features))||(0,e.Z)("".concat(r.featureName," is enabled but one or more dependent features has not been initialized (").concat((0,D.P)(n),"). This may cause unintended consequences or missing data...")),this.features[r.featureName]=new r(this.agentIdentifier,this.sharedAggregator)}))}catch(t){(0,e.Z)("Failed to initialize all enabled instrument classes (agent aborted) -",t);for(const e in this.features)this.features[e].abortHandler?.();const r=(0,E.fP)();delete r.initializedAgents[this.agentIdentifier]?.api,delete r.initializedAgents[this.agentIdentifier]?.features,delete this.sharedAggregator;return r.ee.get(this.agentIdentifier).abort(),!1}}}({features:[b,j,T],loaderType:"lite"})})()})();</script>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta name="viewport" content="width=device-width" />
<meta name="p:domain_verify" content="96e683d0045e44dfac2deaec70e57185" />
<link rel="shortcut icon" type="image/x-icon" href="/assets/favicon-9e0ce223d7912d95afea30fbc1093915b48397f7b5f352bc32fb07e1d8e41058.ico" />
<link rel="apple-touch-icon" sizes="76x76" href="/assets/apple-touch-icon-precomposed-8f3c48df0d37cb6feb6c3e0894af66053afc8a2a6711c4742c46ac4a8cad84ff.png">
<link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-laravel" data-turbolinks-track="false" itemprop="url" />
<title itemprop="name">
      Material Dashboard 2 Laravel by Creative Tim &amp; UPDIVISION @ Creative Tim
  </title>
<meta name="twitter:card" content="summary" />
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@CreativeTim" />
<meta name="twitter:creator" content="@CreativeTim" />
<meta name="twitter:title" content="Material Dashboard 2 Laravel by Creative Tim" />
<meta name="twitter:description" content="Free Full Stack Laravel Dashboard" />
<meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/original/material-dashboard-laravel.jpg?1664460694" />
<meta name="twitter:url" content="https://www.creative-tim.com/live/material-dashboard-laravel" />
<meta name="description" content="Download Material Dashboard 2 Laravel by Creative Tim &amp; UPDIVISION. Over 70 components, see the live demo on our site and join over 2M creatives!">
<meta name="keywords" content="creativetim, creative tim, bootstrap, theme, freebies, bootstrap kit, bootstrap template, free items, beautiful ui">
<meta property="og:app_id" content="655968634437471">
<meta property="og:type" content="product">
<meta property="og:title" content="Material Dashboard 2 Laravel by Creative Tim">
<meta property="og:url" content="https://www.creative-tim.com/live/material-dashboard-laravel">
<meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/154/original/material-dashboard-laravel.jpg?1664460694">
<meta property="product:price:amount" content="Free">
<meta property="product:price:currency" content="USD">
<meta property="product:availability" content="in Stock">
<meta property="product:brand" content="Creative Tim">
<meta property="product:category" content="Admin &amp; Dashboards">
<meta name="data-turbolinks-track" content="false">
<link rel="stylesheet" media="all" href="/assets/application-c7980f571734429820b68cdf0f6b9ec523701618957c08838f7ac6382999efee.css" data-turbolinks-track="reload" />

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<meta name="csrf-param" content="authenticity_token" />
<meta name="csrf-token" content="AGE4o7NLt0jOawz_nN6uPBMe3sn6no_1PkT8nTIvq3BFkOlaer2UKFRcOURwS2IIj0OgDoFslaSWOzDK4jLjfg" />

<script src="/assets/creative-tim/creative-tim-live-preview-d787bfa1f65b2ea680769124bf968a4869c9d12d99a5ecf20406d4d6b195f34f.js" data-turbolinks-track="reload"></script>

<style defer="defer">.async-hide { opacity: 0 !important} </style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
    h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
    (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
    {'GTM-K9BGS8K':true});</script>

<script defer="defer">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-46172202-22', 'auto', {allowLinker: true});
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com","avangate.com"]);
</script>


<script defer="defer">
// dataLayer general
var dataLayer = dataLayer || [];
dataLayer.push({
  'pageType':'General',
  'pageDomain':'MainDomain'
});
// end dataLayer general

</script>

<script defer="defer">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>

</head>
<body>
<div class="modal fade login" id="loginModal">
<div class="modal-dialog login animated">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Login with</h4>
</div>
<div class="modal-body">
<div class="box">
<div class="content">
<div class="social" data-turbolinks="false">
<a id="github_login" class="circle github" rel="nofollow" href="/social/github?destination=dashboard&amp;subscribed=1&amp;url=https%253A%252F%252Fwww.creative-tim.com%252Flive%252Fmaterial-dashboard-laravel">
<i class="icon-github"></i>
</a> <a id="google_login" class="circle google" rel="nofollow" href="/social/google_oauth2?destination=dashboard&amp;subscribed=1&amp;url=https%253A%252F%252Fwww.creative-tim.com%252Flive%252Fmaterial-dashboard-laravel">
<i class="fa fa-google"></i>
</a> <a id="facebook_login" class="circle facebook" rel="nofollow" href="/social/facebook?destination=dashboard&amp;subscribed=1&amp;url=https%253A%252F%252Fwww.creative-tim.com%252Flive%252Fmaterial-dashboard-laravel">
<i class="icon-facebook-alt"></i>
</a> </div>
<div class="division">
<div class="line l"></div>
<span>or</span>
<div class="line r"></div>
</div>
<div class="error inside-alert"></div>
<div class="form loginBox">
<form html="multipart true" action="/login" accept-charset="UTF-8" data-remote="true" method="post">
<input type="text" name="email" class="form-control" placeholder="Email" />
<input type="password" name="password" class="form-control" placeholder="Password" />
<input type="hidden" name="destination" value="dashboard" autocomplete="off" />
<input type="hidden" name="url" value="https%3A%2F%2Fwww.creative-tim.com%2Flive%2Fmaterial-dashboard-laravel" autocomplete="off" />
<div class="row">
<div class="col-md-12">
<input type="submit" name="commit" value="Login" class="btn btn-default btn-login" data-disable-with="Login" />
</div>
<div class="col-md-12 mt-24 d-flex justify-content-center">
<script src="https://www.recaptcha.net/recaptcha/api.js" async defer></script>
<div data-sitekey="6LfJvgsTAAAAALbDuISbCDo1l6qyX_YrPT59xaVk" class="g-recaptcha "></div>
<noscript>
            <div>
              <div style="width: 302px; height: 422px; position: relative;">
                <div style="width: 302px; height: 422px; position: absolute;">
                  <iframe
                    src="https://www.recaptcha.net/recaptcha/api/fallback?k=6LfJvgsTAAAAALbDuISbCDo1l6qyX_YrPT59xaVk"
                    name="ReCAPTCHA"
                    style="width: 302px; height: 422px; border-style: none; border: 0; overflow: hidden;">
                  </iframe>
                </div>
              </div>
              <div style="width: 300px; height: 60px; border-style: none;
                bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                <textarea id="g-recaptcha-response" name="g-recaptcha-response"
                  class="g-recaptcha-response"
                  style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                  margin: 10px 25px; padding: 0px; resize: none;">
                </textarea>
              </div>
            </div>
          </noscript>
</div>
</div>
</form> </div>
</div>
</div>
<div class="box">
<div class="content registerBox" style="display:none;">
<div class="form">
<form html="multipart true" action="/register" accept-charset="UTF-8" data-remote="true" method="post">
<input type="text" name="email" class="form-control" placeholder="Email" />
<input type="password" name="password" class="form-control" placeholder="Password" />
<input type="password" name="password_confirmation" class="form-control" placeholder="Repeat Password" />
<input type="hidden" name="destination" value="dashboard" autocomplete="off" />
<input type="hidden" name="url" value="https%3A%2F%2Fwww.creative-tim.com%2Flive%2Fmaterial-dashboard-laravel" autocomplete="off" />
<label class="checkbox">
<input type="checkbox" value="1" data-toggle="checkbox" name="subscribed" class="ct-info checkbox-subscribe">
Subscribe me to the Newsletter
</label>
<input type="submit" name="commit" value="Create account" class="btn btn-default btn-register" data-disable-with="Create account" />
</form> </div>
</div>
</div>
</div>
<div class="modal-footer">
<div class="forgot login-footer">
<span>Looking to
<a href="javascript: showRegisterForm();" rel="nofollow">create an account</a>
?</span>
<br/>
<span><a rel="nofollow" href="/forgot-password">Forgot password</a> ?</span>
</div>
<div class="forgot register-footer" style="display:none">
<span>Already have an account?</span>
<a href="javascript: showLoginForm();">Login</a>
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="search-modal" role="dialog">
<div class="modal-dialog">
<div itemscope itemtype="https://schema.org/WebSite">
<meta itemprop="url" content="https://www.creative-tim.com/" />
<form class="form-control-search" itemprop="potentialAction" itemscope="itemscope" itemtype="https://schema.org/SearchAction" action="/search" accept-charset="UTF-8" method="get">
<div class="form-group">
<meta itemprop="target" content="https://www.creative-tim.com/search?q={q}" />
<div class="input-group input-group-lg">
<span class="input-group-addon"> <i class="icon-search"></i></span>
<input type="text" name="q" id="q" class="form-control form-control-lg search" placeholder="Okay, what are we looking
             for?" itemprop="query-input" />
</div>
</div>
</form> </div>
</div>
</div>
<nav class="navbar navbar-default live-view navbar-fixed-bottom filled">
<div class="container">
<div class="row">
<div class="col-md-6">
<a class="btn btn-default btn-round " rel="tooltip" title="View Documentation" target="_blank" href="https://material-dashboard-laravel.creative-tim.com/documentation/getting-started/installation.html">
View Documentation
</a>
<a class="btn btn-default btn-round " target="blank" href="https://www.creative-tim.com/services/updivision?ref=ct-live-product-footer">Need help customizing this?</a>
<button type="button" name="button" class="btn btn-simple btn-default btn-icon pull-left" id="closeCircle">
<i class="icon-remove-circle"></i>
</button>
</div>
<div class="col-md-6 text-right">
<a class="btn btn-info btn-fill btn-round" href="/product/material-dashboard-laravel">
Download for free
</a> </div>
</div>
</div>
</nav>
<input class="hidden" name="product_id" value="154" />
<center id="centerFrame" style="height: 100%">
<div id="divWithIframe" class="classMonitor">
<iframe src="https://material-dashboard-laravel.creative-tim.com" style="width: 100%; align: middle;" id="livePreviewFrame">
            </iframe>
</div>
</center>
<script>
  $(document).ready(function(){
    $('#closeCircle').on('click', function(){
      $(this).closest('.navbar').css({'bottom':'-150px'});
      $(".classPhone, .classTablet, .classMonitor").addClass('active');
    });
  });
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v84a3a4012de94ce1a686ba8c167c359c1696973893317" integrity="sha512-euoFGowhlaLqXsPWQ48qSkBSCFs3DPRyiwVu3FjR96cMPx+Fr+gpWRhIafcHwqwCqWS42RZhIudOvEI+Ckf6MA==" data-cf-beacon='{"rayId":"872cd8b09b5a1034","version":"2024.3.0","token":"1b7cbb72744b40c580f8633c6b62637e"}' crossorigin="anonymous"></script>
</body>
</html>