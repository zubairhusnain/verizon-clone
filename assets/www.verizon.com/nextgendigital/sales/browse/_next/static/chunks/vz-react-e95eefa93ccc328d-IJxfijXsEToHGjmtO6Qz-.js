"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[9113],{11941:(e,t,o)=>{var n=o(87358);async function r(e=null){if(!("undefined"!=typeof AudioContext&&"audioWorklet"in AudioContext.prototype))return console.warn("[Audio Player] AudioWorklet not supported, using legacy fallback"),function(e=null){console.log("[Audio Player] Using legacy ScriptProcessorNode fallback");let t=e||new(globalThis.AudioContext||globalThis.webkitAudioContext)({sampleRate:24e3});e?console.log("[Audio Player] Using shared AudioContext (legacy):",t.currentTime):console.log("[Audio Player] Created new AudioContext (legacy)"),"suspended"===t.state&&t.resume().then(()=>{console.log("[Audio Player] AudioContext resumed")});let o=new Float32Array(432e4),n=0,r=0,i=t.createScriptProcessor(4096,0,1);return i.handleAudioData=e=>{for(let t of e){let e=t/32768;o[n]=e,(n=(n+1)%432e4)===r&&(r=(r+1)%432e4)}},i.clearBuffer=()=>{r=n,console.log("[Audio Player] Buffer cleared")},i.onaudioprocess=e=>{let t=e.outputBuffer.getChannelData(0);for(let e=0;e<t.length;e++)t[e]=o[r],r!==n&&(r=(r+1)%432e4)},i.connect(t.destination),[{port:{postMessage:e=>{if("endOfAudio"===e.command)i.clearBuffer();else{let t=new Int16Array(e);i.handleAudioData(t)}}},connect:e=>i.connect(e),disconnect:()=>i.disconnect()},t]}(e);let t=e||new AudioContext({sampleRate:24e3});e?console.log("[Audio Player] Using shared AudioContext:",t.currentTime):console.log("[Audio Player] Created new AudioContext"),"suspended"===t.state&&(await t.resume(),console.log("[Audio Player] AudioContext resumed"));let o=`
class PCMPlayerProcessor extends AudioWorkletProcessor {
  constructor() {
    super();
    this.bufferSize = 24000 * 180;
    this.buffer = new Float32Array(this.bufferSize);
    this.writeIndex = 0;
    this.readIndex = 0;
    this.minBufferThreshold = 24000 * 0.1; // 100ms threshold
    this.isBuffering = true;

    this.port.onmessage = (event) => {
      if (event.data.command === 'endOfAudio') {
        this.readIndex = this.writeIndex;
        this.isBuffering = true;
        console.log("endOfAudio received, clearing the buffer.");
        return;
      }

      const int16Samples = new Int16Array(event.data);
      if (this.isBuffering) {
        const bufferedSamples = (this.writeIndex - this.readIndex + this.bufferSize) % this.bufferSize;
        if (bufferedSamples === 0) {
           this.port.postMessage({ type: 'buffering_start', timestamp: Date.now() });
        }
      }
      this._enqueue(int16Samples);
    };
  }

  _enqueue(int16Samples) {
    for (let i = 0; i < int16Samples.length; i++) {
      const floatVal = int16Samples[i] / 32768;
      this.buffer[this.writeIndex] = floatVal;
      this.writeIndex = (this.writeIndex + 1) % this.bufferSize;

      if (this.writeIndex === this.readIndex) {
        this.readIndex = (this.readIndex + 1) % this.bufferSize;
      }
    }
  }

  process(inputs, outputs, parameters) {
    const output = outputs[0];
    const framesPerBlock = output[0].length;

    if (this.isBuffering) {
      const bufferedSamples = (this.writeIndex - this.readIndex + this.bufferSize) % this.bufferSize;
      if (bufferedSamples >= this.minBufferThreshold) {
        this.isBuffering = false;
        this.port.postMessage({ type: 'buffering_complete', timestamp: Date.now() });
      }
    }

    for (let frame = 0; frame < framesPerBlock; frame++) {
      if (!this.isBuffering && this.readIndex !== this.writeIndex) {
        output[0][frame] = this.buffer[this.readIndex];
        if (output.length > 1) {
          output[1][frame] = this.buffer[this.readIndex];
        }
        this.readIndex = (this.readIndex + 1) % this.bufferSize;
      } else {
        output[0][frame] = 0;
        if (output.length > 1) {
          output[1][frame] = 0;
        }
      }
    }
    return true;
  }
}

registerProcessor('pcm-player-processor', PCMPlayerProcessor);
`,i=function(e,t){var o,r,i,a;if(void 0!==n&&(null===(o=n.env)||void 0===o?void 0:"/nextgendigital/sales/browse")||(null===(r=window.__NEXT_DATA__)||void 0===r?void 0:r.assetPrefix)){let e=void 0!==n&&(null===(i=n.env)||void 0===i?void 0:"/nextgendigital/sales/browse")||(null===(a=window.__NEXT_DATA__)||void 0===a?void 0:a.assetPrefix)||"",o=`${e}/${t}`;return console.log("[Audio Player] Next.js detected - Loading worklet from:",o),o}console.log("[Audio Player] Using blob URL for worklet");let s=new Blob([e],{type:"application/javascript; charset=utf-8"});return URL.createObjectURL(s)}(o,"pcm-player-processor.js");try{console.log("[Audio Player] Attempting to load worklet from:",i),await t.audioWorklet.addModule(i),console.log("[Audio Player] Worklet loaded successfully")}catch(r){console.error("[Audio Player] Error loading worklet from:",i,r),console.log("[Audio Player] Falling back to blob URL...");let e=new Blob([o],{type:"application/javascript; charset=utf-8"}),n=URL.createObjectURL(e);try{await t.audioWorklet.addModule(n),console.log("[Audio Player] Worklet loaded successfully from blob URL")}catch(e){throw console.error("[Audio Player] Failed to load worklet from blob URL:",e),Error(`Unable to load audio player worklet. Please ensure pcm-player-processor.js is in your public/ folder. Original error: ${r.message}`)}finally{URL.revokeObjectURL(n)}}let a=new AudioWorkletNode(t,"pcm-player-processor");return a.connect(t.destination),[a,t]}Object.defineProperty(t,"__esModule",{value:!0}),t.startAudioPlayerWorklet=r},15814:(e,t,o)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=s(o(12115)),r=a(o(38637)),i=a(o(44987));function a(e){return e&&e.__esModule?e:{default:e}}function s(e,t){if("function"==typeof WeakMap)var o=new WeakMap,n=new WeakMap;return(s=function(e,t){if(!t&&e&&e.__esModule)return e;var r,i,a={__proto__:null,default:e};if(null===e||"object"!=typeof e&&"function"!=typeof e)return a;if(r=t?n:o){if(r.has(e))return r.get(e);r.set(e,a)}for(let t in e)"default"!==t&&({}).hasOwnProperty.call(e,t)&&((i=(r=Object.defineProperty)&&Object.getOwnPropertyDescriptor(e,t))&&(i.get||i.set)?r(a,t,i):a[t]=e[t]);return a})(e,t)}let l=i.default.div`
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
  opacity: ${e=>e.isOpen?"1":"0"};
  visibility: ${e=>e.isOpen?"visible":"hidden"};
  transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
`,c=i.default.div`
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #fff;
  z-index: 2000000;
  transform: ${e=>e.isOpen?"translateX(0)":"translateX(-100%)"};
  transition: transform 0.3s ease-in-out;
  display: flex;
  flex-direction: column;

  @media (min-width: 768px) {
    width: 600px;
  }

  @media (min-width: 1024px) {
    width: 1200px;
  }
`,u=i.default.div`
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 72px;
  background-color: #fff;
  z-index: 2000001;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  padding: 0 1rem;
`,d=i.default.div`
  display: flex;
  align-items: center;
  gap: 12px;
  flex: 1;
  justify-content: center;
`,g=i.default.span`
  background-color: #000;
  color: #fff;
  padding: 4px 8px;
  border-radius: 4px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
`,p=i.default.h1`
  font-weight: 700;
  font-size: 24px;
  color: #ee0000;
  line-height: 1.2;
  margin: 0;
`,f=i.default.button`
  background-color: #fff;
  border: none;
  width: 2.5rem;
  height: 2.5rem;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  font-size: 1.5rem;
  font-weight: bold;
  color: #000;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
  transition: all 0.2s ease-in-out;

  &:hover {
    background-color: #f3f4f6;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  }

  &:focus {
    outline: 2px solid #000;
    outline-offset: 2px;
  }
`,m=i.default.div`
  width: 100%;
  height: 100%;
  overflow: hidden;
  margin-top: 72px;
`,w=i.default.iframe`
  width: 100%;
  height: 100%;
  border: none;
`,h=(0,n.forwardRef)(({vzGptUrl:e="/nextgendigital/sales/browse/vz-gpt/?type=vegas&iframe=true&streaming=true",title:t="Shopping assistant",badgeLabel:o="Beta",onOpen:r,onClose:i},a)=>{let[s,h]=(0,n.useState)(!1),[y,b]=(0,n.useState)("about:blank");(0,n.useImperativeHandle)(a,()=>({openDrawer:()=>{v()},closeDrawer:()=>{M()},isOpen:()=>s})),(0,n.useEffect)(()=>{let t=document.createElement("link");t.rel="prefetch",t.href=e,t.as="document",document.head.appendChild(t);let o=document.createElement("script");return o.src=e,o.async=!0,o.id="vzgpt-init-script",document.head.appendChild(o),()=>{document.head.contains(t)&&document.head.removeChild(t);let e=document.getElementById("vzgpt-init-script");e&&document.head.removeChild(e)}},[e]),(0,n.useEffect)(()=>(s?document.body.style.overflow="hidden":document.body.style.overflow="unset",()=>{document.body.style.overflow="unset"}),[s]);let v=()=>{"about:blank"===y&&b(e),h(!0),r&&r()},M=()=>{h(!1),i&&i()};return n.default.createElement(n.default.Fragment,null,n.default.createElement(l,{isOpen:s,onClick:()=>{M()},"data-testid":"vzgpt-drawer-overlay"}),n.default.createElement(c,{isOpen:s,"data-testid":"vzgpt-drawer-container"},n.default.createElement(u,null,n.default.createElement("div",{style:{width:"2.5rem"}}),n.default.createElement(d,null,n.default.createElement(g,null,o),n.default.createElement(p,null,t)),n.default.createElement(f,{onClick:M,"aria-label":"Close VzGpt drawer","data-testid":"vzgpt-close-button"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",stroke:"currentColor",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),n.default.createElement("line",{x1:"6",y1:"6",x2:"18",y2:"18"})))),n.default.createElement(m,null,n.default.createElement(w,{src:y,title:"VzGpt Chat Assistant",allow:"fullscreen; microphone","data-testid":"vzgpt-iframe"}))))});h.displayName="VzGptIntegration",h.propTypes={vzGptUrl:r.default.string,title:r.default.string,badgeLabel:r.default.string,onOpen:r.default.func,onClose:r.default.func},t.default=h},20326:(e,t)=>{function o(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),o.push.apply(o,n)}return o}function n(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?o(Object(n),!0).forEach(function(t){var o,r,i;o=e,r=t,i=n[t],(r=function(e){var t=function(e,t){if("object"!=typeof e||!e)return e;var o=e[Symbol.toPrimitive];if(void 0!==o){var n=o.call(e,t||"default");if("object"!=typeof n)return n;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"==typeof t?t:t+""}(r))in o?Object.defineProperty(o,r,{value:i,enumerable:!0,configurable:!0,writable:!0}):o[r]=i}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):o(Object(n)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))})}return e}Object.defineProperty(t,"__esModule",{value:!0}),t.saveVoiceBotState=t.getCurrentPageContext=t.clearVoiceBotState=void 0;let r="vzVoiceBotState",i=()=>{try{if("undefined"==typeof window||!window.sessionStorage)return!1;let e="__vzStorageTest__";return window.sessionStorage.setItem(e,"test"),window.sessionStorage.removeItem(e),!0}catch(e){return console.warn("[VoiceBot State Manager] sessionStorage not available:",e),!1}};t.saveVoiceBotState=e=>{if(!i())return!1;try{let t=n(n({},e),{},{timestamp:Date.now()});return window.sessionStorage.setItem(r,JSON.stringify(t)),!0}catch(e){return console.error("[VoiceBot State Manager] Failed to save state:",e),!1}},t.clearVoiceBotState=()=>{if(!i())return!1;try{return window.sessionStorage.removeItem(r),!0}catch(e){return console.error("[VoiceBot State Manager] Failed to clear state:",e),!1}},t.getCurrentPageContext=()=>{if("undefined"==typeof window)return"unknown";let e=window.location.pathname;return e.includes("/smartphones")||e.includes("/devices")?"gridwall":e.includes("/product/")||e.includes("/p/")?"pdp":"unknown"}},34230:(e,t,o)=>{var n=o(87358);async function r(e,t=null){console.log("[Audio Recorder] Using legacy ScriptProcessorNode fallback");let o=t||new(globalThis.AudioContext||globalThis.webkitAudioContext)({sampleRate:24e3});t?console.log("[Audio Recorder] Using shared AudioContext (legacy):",o.currentTime):console.log("[Audio Recorder] Created new AudioContext (legacy)"),console.log("[Audio Recorder] AudioContext sample rate:",o.sampleRate),"suspended"===o.state&&(await o.resume(),console.log("[Audio Recorder] AudioContext resumed"));let n=await navigator.mediaDevices.getUserMedia({audio:{channelCount:1,echoCancellation:!0,noiseSuppression:!0,autoGainControl:!0,sampleRate:24e3}});console.log("[Audio Recorder] Microphone settings:",{echoCancellation:!0,noiseSuppression:!0,autoGainControl:!0});let i=o.createMediaStreamSource(n),a=o.createScriptProcessor(4096,1,1);return a.onaudioprocess=t=>{e(function(e){let t=new Int16Array(e.length);for(let o=0;o<e.length;o++){let n=Math.max(-1,Math.min(1,e[o]));t[o]=n<0?32768*n:32767*n}return t}(t.inputBuffer.getChannelData(0)))},i.connect(a),a.connect(o.destination),[{port:{onmessage:null},disconnect:()=>{a.disconnect(),i.disconnect()}},o,n]}async function i(e,t=null){if(!("undefined"!=typeof AudioContext&&"audioWorklet"in AudioContext.prototype))return console.warn("[Audio Recorder] AudioWorklet not supported, using legacy fallback"),r(e,t);let o=t||new AudioContext({sampleRate:24e3});t?console.log("[Audio Recorder] Using shared AudioContext:",o.currentTime):(console.log("[Audio Recorder] Created new AudioContext"),console.log("AudioContext sample rate:",o.sampleRate)),"suspended"===o.state&&(await o.resume(),console.log("[Audio Recorder] AudioContext resumed"));let a=`
class PCMProcessor extends AudioWorkletProcessor {
  constructor() {
    super();
  }

  floatTo16BitPCM(input) {
    const output = new Int16Array(input.length);
    for (let i = 0; i < input.length; i++) {
      const s = Math.max(-1, Math.min(1, input[i]));
      output[i] = s < 0 ? s * 0x8000 : s * 0x7FFF;
    }
    return output;
  }

  process(inputs, outputs, parameters) {
    if (inputs.length > 0 && inputs[0].length > 0) {
      const inputChannel = inputs[0][0];
      const pcmData = this.floatTo16BitPCM(inputChannel);
      this.port.postMessage(pcmData.buffer);
    }
    return true;
  }
}

registerProcessor("pcm-recorder-processor", PCMProcessor);
`,s=function(e,t){var o,r,i,a;if(void 0!==n&&(null===(o=n.env)||void 0===o?void 0:"/nextgendigital/sales/browse")||(null===(r=window.__NEXT_DATA__)||void 0===r?void 0:r.assetPrefix)){let e=void 0!==n&&(null===(i=n.env)||void 0===i?void 0:"/nextgendigital/sales/browse")||(null===(a=window.__NEXT_DATA__)||void 0===a?void 0:a.assetPrefix)||"",o=`${e}/${t}`;return console.log("[Audio Recorder] Next.js detected - Loading worklet from:",o),o}console.log("[Audio Recorder] Using blob URL for worklet");let s=new Blob([e],{type:"application/javascript; charset=utf-8"});return URL.createObjectURL(s)}(a,"pcm-recorder-processor.js");try{console.log("[Audio Recorder] Attempting to load worklet from:",s),await o.audioWorklet.addModule(s),console.log("[Audio Recorder] Worklet loaded successfully")}catch(n){console.error("[Audio Recorder] Error loading worklet from:",s,n),console.log("[Audio Recorder] Falling back to blob URL...");let e=new Blob([a],{type:"application/javascript; charset=utf-8"}),t=URL.createObjectURL(e);try{await o.audioWorklet.addModule(t),console.log("[Audio Recorder] Worklet loaded successfully from blob URL")}catch(e){throw console.error("[Audio Recorder] Failed to load worklet from blob URL:",e),Error(`Unable to load audio recorder worklet. Please ensure pcm-recorder-processor.js is in your public/ folder. Original error: ${n.message}`)}finally{URL.revokeObjectURL(t)}}let l=await navigator.mediaDevices.getUserMedia({audio:{channelCount:1,echoCancellation:!0,noiseSuppression:!0,autoGainControl:!0,sampleRate:24e3}});console.log("Microphone settings:",{echoCancellation:!0,noiseSuppression:!0,autoGainControl:!0});let c=o.createMediaStreamSource(l),u=new AudioWorkletNode(o,"pcm-recorder-processor");return c.connect(u),u.port.onmessage=t=>{e(t.data)},[u,o,l]}Object.defineProperty(t,"__esModule",{value:!0}),t.startAudioRecorderWorklet=i,t.stopMicrophone=function(e){e.getTracks().forEach(e=>e.stop()),console.log("stopMicrophone(): Microphone stopped.")}},36057:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.logWebSocketEvent=t.logVoiceBotOpened=t.logVoiceBotException=t.logVoiceBotEvent=t.logVoiceBotClosed=t.logTranscript=t.logToolCallReceived=t.logToolCallProcessed=t.logMicrophonePermission=t.logAutoStart=t.logAudioEvent=void 0;let o=e=>{if("undefined"==typeof document)return"";let t=`; ${document.cookie}`.split(`; ${e}=`);return 2===t.length?t.pop().split(";").shift():""},n=()=>"true"===o("loggedIn"),r=()=>{var e;let t=(null===(e=globalThis.location)||void 0===e?void 0:e.pathname)||"",o=/\/smartphones\/([^/]+)/.exec(t);if(null!=o&&o[1])return"PDP";let n=/\/products\/([^/]+)/.exec(t);return null!=n&&n[1]?"Accessory_PDP":t.split("/").findLast(Boolean)||""},i=async e=>{try{var t,i,a;let s=(null==e?void 0:e.message)||"",l={messageType:"INFO",eventType:(null==e?void 0:e.messageType)||"",pageUrl:(null===(t=globalThis.location)||void 0===t?void 0:t.href)||"",pageName:r(),errorMessage:(null==e?void 0:e.errorMessage)||"NA",message:s,subHeaderMessage:(null==e?void 0:e.subHeaderMessage)||"",serviceE2EId:(null==e||null===(i=e.networkData)||void 0===i?void 0:i.e2erequestid)||"",loggerMessage:{message:(null==e?void 0:e.loggerMessage)||s||"",userAgent:(null===(a=globalThis.navigator)||void 0===a?void 0:a.userAgent)||"",pageTitle:document.title||"",voiceBotMetadata:null!=e&&e.voiceBotMetadata?JSON.stringify(e.voiceBotMetadata):"{}"},isNseProspectFlow:!n()},c=n()?"/soe/digital/auth/peripheralsservice/jsNotifyAsDynamic":"/soe/digital/prospect/peripheralsservice/jsNotifyAsDynamic",u=new Headers;u.append("Content-Type","application/json"),u.append("Accept","application/json");let d=o("channelId")||"";d&&u.append("channelId",d);let g=o("SOE-XSRF-TOKEN-SALES")||o("XSRF-TOKEN")||o("xsrf-token")||"";g&&(u.append("X-CSRF-TOKEN",g),u.append("X-XSRF-TOKEN",g));let p=new Request(c,{method:"POST",body:JSON.stringify(l),headers:u});try{await fetch(p),console.log("[VoiceBot Logger] Event logged:",null==e?void 0:e.messageType,s)}catch(e){console.error("[VoiceBot Logger] Error in fetch:",e)}}catch(e){console.error("[VoiceBot Logger] Error in logger:",e)}};t.logVoiceBotEvent=i,t.logTranscript=(e,t,o=!0)=>{let n="agent"===e||"user"===e?e:"unknown";"unknown"===n&&console.warn("[VoiceBot Logger] Invalid speaker type:",e,"Text:",t),i({messageType:"VOICEBOT_TRANSCRIPT",message:`VoiceBot transcript - ${n}`,loggerMessage:`${n} said: ${t}`,voiceBotMetadata:{speaker:n,text:t,isComplete:o,timestamp:new Date().toISOString()}})},t.logToolCallReceived=e=>{i({messageType:"VOICEBOT_TOOL_CALL_RECEIVED",message:"VoiceBot tool call received",loggerMessage:`Tool call received: ${(null==e?void 0:e.type)||"unknown"}`,voiceBotMetadata:{toolType:null==e?void 0:e.type,toolId:null==e?void 0:e.tool_id,toolData:e,timestamp:new Date().toISOString()}})},t.logToolCallProcessed=(e,t,o)=>{i({messageType:"VOICEBOT_TOOL_CALL_PROCESSED",message:"VoiceBot tool call processed",loggerMessage:`Tool call processed and response sent: ${e}`,voiceBotMetadata:{toolType:e,toolId:t,responseData:o,timestamp:new Date().toISOString()}})},t.logAutoStart=(e,t="")=>{let o=t?` - ${t}`:"";i({messageType:"VOICEBOT_AUTO_START",message:`VoiceBot auto-start: ${e?"enabled":"disabled"}`,loggerMessage:`VoiceBot auto-start status: ${e}${o}`,voiceBotMetadata:{isAutoStarted:e,reason:t,timestamp:new Date().toISOString()}})},t.logVoiceBotOpened=(e="manual")=>{i({messageType:"VOICEBOT_OPENED",message:"VoiceBot opened",loggerMessage:`VoiceBot modal has been opened by the user (source: ${e})`,voiceBotMetadata:{triggerSource:e,timestamp:new Date().toISOString()}})},t.logVoiceBotClosed=(e="user-action")=>{i({messageType:"VOICEBOT_CLOSED",message:"VoiceBot closed",loggerMessage:`VoiceBot modal has been closed (reason: ${e})`,voiceBotMetadata:{reason:e,timestamp:new Date().toISOString()}})},t.logVoiceBotException=(e,t,o={})=>{i({messageType:"VOICEBOT_EXCEPTION",eventType:"FeError",message:`VoiceBot error - ${e}`,errorMessage:t,loggerMessage:`VoiceBot exception occurred: ${e} - ${t}`,voiceBotMetadata:{errorType:e,errorMessage:t,errorDetails:o,timestamp:new Date().toISOString()}})},t.logWebSocketEvent=(e,t={})=>{let o={connecting:"WebSocket connecting",connected:"WebSocket connected successfully",disconnected:"WebSocket disconnected",error:"WebSocket error occurred",reconnecting:"WebSocket reconnecting"};i({messageType:`VOICEBOT_WEBSOCKET_${e.toUpperCase()}`,message:o[e]||`WebSocket ${e}`,loggerMessage:o[e]||`WebSocket event: ${e}`,voiceBotMetadata:{event:e,details:t,timestamp:new Date().toISOString()}})},t.logAudioEvent=(e,t={})=>{i({messageType:`VOICEBOT_AUDIO_${e.toUpperCase()}`,message:`Audio ${e}`,loggerMessage:`VoiceBot audio event: ${e}`,voiceBotMetadata:{event:e,details:t,timestamp:new Date().toISOString()}})},t.logMicrophonePermission=(e,t=null)=>{let o=t?` - ${t}`:"";i({messageType:"VOICEBOT_MICROPHONE_PERMISSION",message:`Microphone permission ${e?"granted":"denied"}`,loggerMessage:`Microphone permission status: ${e?"granted":"denied"}${o}`,voiceBotMetadata:{granted:e,error:t,timestamp:new Date().toISOString()}})}},57431:(e,t,o)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var n=i(o(12115)),r=function(e){return e&&e.__esModule?e:{default:e}}(o(44987));function i(e,t){if("function"==typeof WeakMap)var o=new WeakMap,n=new WeakMap;return(i=function(e,t){if(!t&&e&&e.__esModule)return e;var r,i,a={__proto__:null,default:e};if(null===e||"object"!=typeof e&&"function"!=typeof e)return a;if(r=t?n:o){if(r.has(e))return r.get(e);r.set(e,a)}for(let t in e)"default"!==t&&({}).hasOwnProperty.call(e,t)&&((i=(r=Object.defineProperty)&&Object.getOwnPropertyDescriptor(e,t))&&(i.get||i.set)?r(a,t,i):a[t]=e[t]);return a})(e,t)}let a=r.default.div`
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 4px;
  height: 2.5rem;
  width: 100%;
  background: transparent;
  overflow: hidden;
  
  @media (max-width: 768px) {
    width: 100%;
    height: 2rem;
    justify-content: center;
  }
  
  @media (max-width: 480px) {
    height: 1.5rem;
    gap: 3px;
  }
  
  @media (max-width: 768px) and (orientation: landscape) {
    flex: 1;
    max-width: 200px;
  }
`,s=r.default.canvas`
  width: 100%;
  height: 100%;
  background: transparent;
  display: block;
`;t.default=({speakerAnalyser:e})=>{let t=(0,n.useRef)(null),o=(0,n.useRef)(null);(0,n.useEffect)(()=>{if(e)return r(),()=>{o.current&&(cancelAnimationFrame(o.current),o.current=null)}},[e]);let r=()=>{if(!t.current||!e){o.current=requestAnimationFrame(r);return}let n=t.current,i=n.getContext("2d"),a=e.frequencyBinCount,s=new Uint8Array(a);e.getByteFrequencyData(s);let l=n.width,c=n.height,u=c/2;i.clearRect(0,0,l,c);let d=(l-57)/2;i.fillStyle="#FFFFFF";let g=Math.floor(.4*a),p=Math.floor(g/10);for(let e=0;e<10;e++){let t=Math.floor(e*p),o=Math.min(t+p,g),n=0;for(let e=t;e<o;e++)s[e]>n&&(n=s[e]);let r=Math.max(2,n/255*u*4*(e%2==0?.6:1));i.fillRect(d,u-r/2,3,r),d+=6}o.current=requestAnimationFrame(r)};return n.default.createElement(a,null,n.default.createElement(s,{ref:t,width:60,height:40}))}},63700:(e,t,o)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.VzAssist=void 0;var n=s(o(12115)),r=a(o(38637)),i=a(o(57431));function a(e){return e&&e.__esModule?e:{default:e}}function s(e,t){if("function"==typeof WeakMap)var o=new WeakMap,n=new WeakMap;return(s=function(e,t){if(!t&&e&&e.__esModule)return e;var r,i,a={__proto__:null,default:e};if(null===e||"object"!=typeof e&&"function"!=typeof e)return a;if(r=t?n:o){if(r.has(e))return r.get(e);r.set(e,a)}for(let t in e)"default"!==t&&({}).hasOwnProperty.call(e,t)&&((i=(r=Object.defineProperty)&&Object.getOwnPropertyDescriptor(e,t))&&(i.get||i.set)?r(a,t,i):a[t]=e[t]);return a})(e,t)}let l=e=>{let[t,o]=(0,n.useState)(15),[r,a]=(0,n.useState)(Array(15).fill(0)),[s]=(0,n.useState)(()=>Array.from({length:60},(e,t)=>`bar-${t}`)),[l,c]=(0,n.useState)(!1);e.audioLevels&&e.audioLevels.length>0&&e.audioLevels.slice(0,t),(0,n.useEffect)(()=>{let e=()=>{let e=globalThis.innerWidth<=768?8:15;o(e),a(Array(e).fill(0))};return e(),globalThis.addEventListener("resize",e),()=>globalThis.removeEventListener("resize",e)},[]),(0,n.useEffect)(()=>{e.audioLevels&&e.audioLevels.length>0||!e.isMuted&&(e.isAgentSpeaking||e.isUserListening)||a(e=>e.map(()=>0))},[e.isAgentSpeaking,e.isUserListening,e.isMuted,e.audioLevels]);let u=!e.isMuted&&!e.isAgentSpeaking&&!e.isUserListening;return n.default.createElement(n.default.Fragment,null,n.default.createElement("style",null,`
                    /* Styles for the animated waveform bars */
                    .waveform-bar {
                        transform-origin: center; /* Makes the bars expand from the middle */
                        width: 3px;
                        height: 100%;
                        background: #FFFF00;
                        border-radius: 9999px;
                        transition: transform 0.1s ease-out;
                    }

                    /* Main container for the component - Pill shaped */
                    .vz-assist-container {
                        padding: 0.75rem 1.5rem;
                        display: flex;
                        flex-direction: row;
                        align-items: center;
                        justify-content: space-between;
                        width: 100%;
                        max-width: 600px;
                        margin: 0 auto;
                        gap: 1rem;
                        background: linear-gradient(270deg, #FF281E, #E10014);
                        border: 2px solid #FF281E;
                        border-radius: 50px;
                        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
                        position: relative;
                    }

                    /* Left section - Close button */
                    .vz-assist-close {
                        flex-shrink: 0;
                    }

                    /* Circular button styles */
                    .circular-button {
                        width: 48px;
                        height: 48px;
                        border-radius: 50%;
                        background-color: #FFF8DC;
                        color: #000000;
                        border: 2px solid #FFF8DC;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        cursor: pointer;
                        transition: all 0.2s ease;
                        padding: 0;
                    }

                    .circular-button:hover {
                        background-color: #FFF0C9;
                        transform: scale(1.05);
                    }

                    .circular-button.muted {
                        background-color: #FFF8DC;
                        color: #000000;
                    }

                    .circular-button.muted:hover {
                        background-color: #FFF0C9;
                    }

                    /* Middle section - Mic, Text, and Waveform */
                    .vz-assist-middle {
                        display: flex;
                        align-items: center;
                        gap: 0.75rem;
                        flex: 1;
                        justify-content: center;
                    }

                    .vz-assist-icon svg {
                        color: #ffffff;
                        display: block;
                    }

                    .vz-assist-status {
                        font-size: 1rem;
                        color: #ffffff;
                        font-weight: 500;
                        white-space: nowrap;
                    }

                    /* Waveform visualizer */
                    .waveform-visualizer {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        gap: 3px;
                        height: 2.5rem;
                        width: 60px;
                        max-width: 60px;
                        flex-shrink: 0;
                    }

                    /* VoiceVisualizer custom styling */
                    .voice-visualizer-wrapper {
                        width: 60px;
                        max-width: 60px;
                        height: 2.5rem;
                        flex-shrink: 0;
                    }

                    @media (max-width: 768px) {
                        .voice-visualizer-wrapper {
                            height: 1.5rem;
                        }
                    }

                    /* Right section - Play/Pause button */
                    .vz-assist-controls {
                        flex-shrink: 0;
                        display: flex;
                        gap: 0.5rem;
                        align-items: center;
                    }

                    /* Mobile responsive styles - Keep horizontal layout */
                    @media (max-width: 768px) {
                        .vz-assist-container {
                            padding: 1rem 1.5rem;
                            gap: 0.9rem;
                            max-width: none;
                            min-height: 64px;                            border-radius: 0;
                            width: 100%;                        }

                        .vz-assist-middle {
                            gap: 0.75rem;
                        }

                        .vz-assist-icon svg {
                            width: 34px;
                            height: 34px;
                        }

                        .vz-assist-status {
                            font-size: 1.05rem;
                        }

                        .waveform-visualizer {
                            width: 65px;
                            max-width: 65px;
                            height: 2.75rem;
                        }

                        .circular-button {
                            width: 52px;
                            height: 52px;
                        }
                        
                        .circular-button svg {
                            width: 24px;
                            height: 24px;
                        }
                    }

                    /* Extra small mobile devices */
                    @media (max-width: 480px) {
                        .vz-assist-container {
                            padding: 0.85rem 1.25rem;
                            gap: 0.7rem;
                            min-height: 58px;
                            border-radius: 0;
                        }

                        .vz-assist-middle {
                            gap: 0.6rem;
                        }

                        .vz-assist-icon svg {
                            width: 30px;
                            height: 30px;
                        }

                        .vz-assist-status {
                            font-size: 0.95rem;
                        }

                        .waveform-visualizer {
                            width: 55px;
                            max-width: 55px;
                            height: 2.4rem;
                        }

                        .circular-button {
                            width: 48px;
                            height: 48px;
                        }
                        
                        .circular-button svg {
                            width: 22px;
                            height: 22px;
                        }
                    }

                    @keyframes slideDown {
                        from {
                            transform: translateY(-20px);
                            opacity: 0;
                        }
                        to {
                            transform: translateY(0);
                            opacity: 1;
                        }
                    }

                    .document-modal {
                        position: absolute;
                        bottom: 103%;
                        left: 50%;
                        transform: translateX(-50%);
                        background: white;
                        border-radius: 16px 16px 0 0;
                        padding: 1rem 2rem 2rem 2rem;
                        width: 410px;
                        max-width: 90vw;
                        max-height: 750px;
                        overflow-y: auto;
                        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
                        z-index: 1002;
                    }

                    .document-modal-header {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 1.5rem;
                        border-bottom: 2px solid #f0f0f0;
                        padding-bottom: 1rem;
                    }

                    .document-modal-title {
                        font-size: 1.5rem;
                        font-weight: 600;
                        color: #333;
                        margin: 0;
                    }

                    .document-modal-close {
                        position: sticky;
                        top: 0;
                        float: right;
                        background: white;
                        border: none;
                        cursor: pointer;
                        padding: 0.5rem;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        z-index: 10;
                        border-radius: 50%;
                        margin-top: -2rem;
                        margin-right: -1rem;
                    }

                    .document-modal-content {
                        color: #666;
                        line-height: 1.6;
                    }

                    .messages-container {
                        display: flex;
                        flex-direction: column;
                        gap: 1rem;
                        max-height: 100%;
                    }

                    .message {
                        padding: 0.75rem 1rem;
                        border-radius: 12px;
                        max-width: 85%;
                        word-wrap: break-word;
                    }

                    .message.user {
                        background-color: #B2B0A9;
                        color: black;
                        align-self: flex-end;
                        margin-left: auto;
                    }

                    .message.agent {
                        background-color: #ffffff;
                        color: #333;
                        align-self: flex-start;
                    }

                    .message-text {
                        margin: 0;
                        font-size: 0.95rem;
                        line-height: 1.4;
                    }

                    .no-messages {
                        text-align: center;
                        color: #999;
                        padding: 2rem;
                        font-style: italic;
                    }

                    @media (max-width: 768px) {
                        .document-modal {
                            width: 100%;
                            max-width: 100%;
                            padding: 1.5rem;
                            max-height: 90vh;
                            left: 0;
                            transform: translateX(0);
                            border-radius: 16px 16px 0 0;
                        }

                        .document-modal-title {
                            font-size: 1.25rem;
                        }
                    }
                `),n.default.createElement("div",{className:"vz-assist-container"},e.newVoiceBot&&l&&n.default.createElement("div",{className:"document-modal",onClick:e=>e.stopPropagation()},n.default.createElement("button",{className:"document-modal-close",onClick:()=>c(!1),"aria-label":"Voicebot Close transcript"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",stroke:"#000000",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),n.default.createElement("line",{x1:"6",y1:"6",x2:"18",y2:"18"}))),n.default.createElement("div",{className:"messages-container"},e.messages&&e.messages.length>0?e.messages.map((e,t)=>n.default.createElement("div",{key:t,className:`message ${e.type||"agent"}`},n.default.createElement("p",{className:"message-text"},e.text))):n.default.createElement("div",{className:"no-messages"},n.default.createElement("p",null,"No conversation yet. Start talking to begin!")))),n.default.createElement("div",{className:"vz-assist-close"},n.default.createElement("button",{className:"circular-button",onClick:e.hideModel,"aria-label":"Voicebot Close"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"26",height:"26",viewBox:"0 0 24 24",fill:"none",stroke:"#FF0000",strokeWidth:"2.5",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("line",{x1:"18",y1:"6",x2:"6",y2:"18"}),n.default.createElement("line",{x1:"6",y1:"6",x2:"18",y2:"18"})))),n.default.createElement("div",{className:"vz-assist-middle"},!e.isAgentSpeaking&&n.default.createElement("div",{className:"vz-assist-icon"},e.isUserListening?n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",stroke:"white",strokeWidth:"1.8",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("rect",{x:"9",y:"2",width:"6",height:"12",rx:"3"}),n.default.createElement("path",{d:"M5 12c0 3.87 3.13 7 7 7s7-3.13 7-7"}),n.default.createElement("line",{x1:"12",y1:"19",x2:"12",y2:"22"}),n.default.createElement("line",{x1:"8",y1:"22",x2:"16",y2:"22"})):u?n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",fill:"white",stroke:"white",strokeWidth:"0.5"},n.default.createElement("path",{d:"M12 0L14.59 7.41L22 10L14.59 12.59L12 20L9.41 12.59L2 10L9.41 7.41L12 0Z"}),n.default.createElement("path",{d:"M19 4L20.29 7.71L24 9L20.29 10.29L19 14L17.71 10.29L14 9L17.71 7.71L19 4Z"}),n.default.createElement("path",{d:"M19 18L20.29 21.71L24 23L20.29 24.29L19 28L17.71 24.29L14 23L17.71 21.71L19 18Z"})):n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24",fill:"none",stroke:"white",strokeWidth:"1.8",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("rect",{x:"9",y:"2",width:"6",height:"12",rx:"3"}),n.default.createElement("path",{d:"M5 12c0 3.87 3.13 7 7 7s7-3.13 7-7"}),n.default.createElement("line",{x1:"12",y1:"19",x2:"12",y2:"22"}),n.default.createElement("line",{x1:"8",y1:"22",x2:"16",y2:"22"}))),!e.isAgentSpeaking&&n.default.createElement("div",{className:"vz-assist-status"},e.isMuted?"Microphone muted":e.isBuffering?"Preparing audio..":e.isAgentSpeaking?"":e.isUserListening?"Listening..":e.isMuted||e.isAgentSpeaking||e.isUserListening?"":"Thinking.."),e.isAgentSpeaking&&n.default.createElement("div",{className:"voice-visualizer-wrapper"},n.default.createElement(i.default,{speakerAnalyser:e.speakerAnalyser}))),n.default.createElement("div",{className:"vz-assist-controls"},n.default.createElement("button",{className:`circular-button ${e.isMuted?"muted":""}`,onClick:e.onToggleMute,"aria-label":e.isMuted?"Voicebot Unmute":"Voicebot Mute"},e.isMuted?n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"26",height:"26",viewBox:"0 0 24 24",fill:"currentColor",style:{color:"#FF0000",fontWeight:"bold"}},n.default.createElement("path",{d:"M7 4v16l13-8z",strokeWidth:"1"})):n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"26",height:"26",viewBox:"0 0 24 24",fill:"currentColor",style:{color:"#FF0000",fontWeight:"bold"}},n.default.createElement("path",{d:"M5 4h5v16H5V4zm9 0h5v16h-5V4z"}))),e.newVoiceBot&&n.default.createElement("button",{className:"circular-button",onClick:()=>c(e=>!e),"aria-label":"Voicebot transcript"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"26",height:"26",viewBox:"0 0 24 24",fill:"none",stroke:"#FF0000",strokeWidth:"2",strokeLinecap:"round",strokeLinejoin:"round"},n.default.createElement("path",{d:"M6 2h10l4 4v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"}),n.default.createElement("polyline",{points:"16 2 16 6 20 6"}))))))};t.VzAssist=l,l.propTypes={hideModel:r.default.func,isAgentSpeaking:r.default.bool,isBuffering:r.default.bool,isUserListening:r.default.bool,isMuted:r.default.bool,onToggleMute:r.default.func,audioLevels:r.default.arrayOf(r.default.number),micStream:r.default.object,messages:r.default.arrayOf(r.default.object),newVoiceBot:r.default.bool},l.defaultProps={hideModel:()=>console.warn("hideModel function not provided"),isAgentSpeaking:!1,isUserListening:!1,isMuted:!1,onToggleMute:()=>console.warn("onToggleMute function not provided"),audioLevels:[],micStream:null,messages:[],newVoiceBot:!1}},70460:(e,t,o)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.checkSynchronization=function(e,t){if(e&&t){let o=e===t,n=Math.abs(e.currentTime-t.currentTime);return{synchronized:o,reason:o?"Same AudioContext":"Different AudioContext instances",playerTime:e.currentTime,recorderTime:t.currentTime,timeDifference:n,sampleRateMatch:e.sampleRate===t.sampleRate,stateMatch:e.state===t.state}}return{synchronized:!1,reason:"One or both contexts are null"}},t.getSharedAudioContext=s,t.getTimingInfo=function(){return i?{currentTime:i.currentTime,baseLatency:i.baseLatency,outputLatency:i.outputLatency,state:i.state,sampleRate:i.sampleRate,activeInstances:a}:null},t.releaseSharedAudioContext=l,t.startSynchronizedAudio=c,t.stopSynchronizedAudio=function(e,t,o){var n,r;console.log("[Audio Manager] Stopping synchronized audio system"),o&&o.getTracks().forEach(e=>e.stop()),null==e||null===(n=e.disconnect)||void 0===n||n.call(e),null==t||null===(r=t.disconnect)||void 0===r||r.call(t),l()};var n=o(11941),r=o(34230);let i=null,a=0;function s(){return i&&"closed"!==i.state||(console.log("[Audio Manager] Created shared AudioContext:",{sampleRate:(i=new(globalThis.AudioContext||globalThis.webkitAudioContext)({sampleRate:24e3,latencyHint:"interactive"})).sampleRate,state:i.state,baseLatency:i.baseLatency,outputLatency:i.outputLatency}),"suspended"===i.state&&i.resume().then(()=>{console.log("[Audio Manager] Shared AudioContext resumed")})),console.log("[Audio Manager] Active instances:",++a),i}function l(){console.log("[Audio Manager] Active instances:",a=Math.max(0,a-1)),0===a&&i&&(console.log("[Audio Manager] Closing shared AudioContext"),i.close(),i=null)}async function c(e){let t=s();console.log("[Audio Manager] Starting synchronized audio system"),console.log("[Audio Manager] AudioContext time:",t.currentTime);let[o,i]=await (0,n.startAudioPlayerWorklet)(t),[a,l,c]=await (0,r.startAudioRecorderWorklet)(e,t);return i!==l?console.warn("[Audio Manager] WARNING: Player and recorder using different contexts!"):console.log("[Audio Manager] ✓ Player and recorder synchronized on same AudioContext"),console.log("[Audio Manager] Synchronized audio system ready:",{playerContext:i===t,recorderContext:l===t,currentTime:t.currentTime,state:t.state}),{playerNode:o,playerContext:i,recorderNode:a,recorderContext:l,micStream:c,sharedContext:t}}},74522:(e,t,o)=>{t.A=void 0;var n=m(o(12115)),r=f(o(38637)),i=f(o(44987));o(11941),o(34230);var a=o(70460),s=o(63700),l=f(o(15814)),c=m(o(76365)),u=o(20326),d=o(79898),g=o(36057),p=o(78141);function f(e){return e&&e.__esModule?e:{default:e}}function m(e,t){if("function"==typeof WeakMap)var o=new WeakMap,n=new WeakMap;return(m=function(e,t){if(!t&&e&&e.__esModule)return e;var r,i,a={__proto__:null,default:e};if(null===e||"object"!=typeof e&&"function"!=typeof e)return a;if(r=t?n:o){if(r.has(e))return r.get(e);r.set(e,a)}for(let t in e)"default"!==t&&({}).hasOwnProperty.call(e,t)&&((i=(r=Object.defineProperty)&&Object.getOwnPropertyDescriptor(e,t))&&(i.get||i.set)?r(a,t,i):a[t]=e[t]);return a})(e,t)}function w(e,t){var o=Object.keys(e);if(Object.getOwnPropertySymbols){var n=Object.getOwnPropertySymbols(e);t&&(n=n.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),o.push.apply(o,n)}return o}function h(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?w(Object(o),!0).forEach(function(t){var n,r,i;n=e,r=t,i=o[t],(r=function(e){var t=function(e,t){if("object"!=typeof e||!e)return e;var o=e[Symbol.toPrimitive];if(void 0!==o){var n=o.call(e,t||"default");if("object"!=typeof n)return n;throw TypeError("@@toPrimitive must return a primitive value.")}return("string"===t?String:Number)(e)}(e,"string");return"symbol"==typeof t?t:t+""}(r))in n?Object.defineProperty(n,r,{value:i,enumerable:!0,configurable:!0,writable:!0}):n[r]=i}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):w(Object(o)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}globalThis.wsType="",globalThis.wsToolId="";let y=i.default.button`
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  padding: 12px 24px;
  border: 2px solid #000;
  border-radius: 999px;
  background-color: #fff;
  color: #000;
  font-size: 16px;
  font-weight: 600;
  cursor: pointer;
  transition: all .2s ease-in-out;
  outline: 0;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  height: 36px;
  
  &:disabled {
    opacity: 0.6;
    cursor: not-allowed;
  }

  @media (max-width: 768px) {
    padding: 0.625rem 1rem;
    font-size: 0.9rem;
  }
`,b=i.default.p`
  white-space: nowrap;
  font-size: inherit;
  margin: 0;
`,v=i.default.div`
  display: ${e=>e.show?"block":"none"};
  position: fixed;
  bottom: ${e=>e.bottomOffset||"0px"};
  left: 0px;
  width: 470px;
  background: transparent;
  z-index: 1000;

  @media (max-width: 768px) {
    width: 100%;
    left: 0;
    right: 0;
    bottom: ${e=>e.bottomOffsetMobile||e.bottomOffset||"0px"};
  }
`,M=i.default.div`
  position: fixed;
  bottom: ${e=>e.bottomOffset||"200px"};
  left: 80px;
  z-index: 10000;
  display: flex;
  flex-direction: column-reverse;
  gap: 10px;
  align-items: center;
  width: 60px;
  height: ${e=>e.expanded?"200px":"60px"};
  background-color: #fff;
  border-radius: 20px 20px 30px 30px;
  touch-action: none;
  user-select: none;
  box-shadow: 2px 0 8px rgba(0, 0, 0, 0.3);
  transition: height 0.2s ease;
  visibility: ${e=>(e.expanded,"visible")};
  
  @media (max-width: 768px) {
    left: 20px;
    bottom: ${e=>e.bottomOffsetMobile||e.bottomOffset||"80px"};
  }
`,x=i.default.button`
  position: ${e=>(e.isMainButton,"relative")};
  width: ${e=>e.isMainButton?"60px":"50px"};
  height: ${e=>e.isMainButton?"60px":"50px"};
  border-radius: 50%;
  border: none;
  background-color: ${e=>e.isMainButton?"#fff":"#FF281E"};
  cursor: pointer;
  display: ${e=>e.show||e.isMainButton?"flex":"none"};
  align-items: center;
  justify-content: center;
  outline: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  padding: 0;
  flex-shrink: 0;
  margin: 0;
  box-shadow: ${e=>e.isMainButton?"2px 0 8px rgba(0, 0, 0, 0.3)":"2px -4px 8px rgba(0, 0, 0, 0.3)"};
  transition: box-shadow 0.2s ease, opacity 0.2s ease, transform 0.2s ease;
  opacity: ${e=>e.show||e.isMainButton?"1":"0"};
  transform: ${e=>e.show||e.isMainButton?"scale(1)":"scale(0)"};
  z-index: ${e=>e.isMainButton?"1":"auto"};
  
  &:hover {
    box-shadow: ${e=>e.isMainButton?"2px 0 12px rgba(0, 0, 0, 0.4)":"2px -4px 12px rgba(0, 0, 0, 0.4)"};
  }
  
  &:disabled {
    opacity: 0.6;
    cursor: not-allowed;
  }

  svg {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    transition: transform 0.2s ease-in-out;
  }

  &:hover svg {
    transform: translate(-50%, -50%) scale(1.1);
  }

  .vz-gpt-vera-icon {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    height: 20px;
    width: 20px;
    background-repeat: no-repeat;
    background-image: url("data:image/svg+xml;base64,PHN2ZyB2aWV3Qm94PSIwIDAgMzggMzgiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+CiAgPCEtLSBMYXJnZSBzdGFyIC0tPgogIDxnPgogICAgPHBhdGgKICAgICAgZmlsbD0iI2VlMDAxZSIKICAgICAgZD0iTTM0LjczNjU4LDE1LjM3MkE5LjkzNTQsOS45MzU0LDAsMCwxLDI0Ljk1MTM3LDUuMzM2MTNoLTJhOS45NDY3NSw5Ljk0Njc1LDAsMCwxLTkuNzk1MTEsMTAuMDM1NGMtLjA4NDQ3LS4wMDItLjE2OTQzLS4wMTI0NS0uMjUzNzItLjAxMjQ1djIuMDI1MzljLjA4NzU4LDAsLjE3NTg0LS4wMTA4Ni4yNjM2MS0uMDEyOTRhOS45MzUwOCw5LjkzNTA4LDAsMCwxLDkuNzg1MjIsMTAuMDM1ODloMmE5Ljk0Njc1LDkuOTQ2NzUsMCwwLDEsOS43OTUxLTEwLjAzNTRjLjA4NDQ3LjAwMi4xNjk0NC4wMTI0NS4yNTM3My4wMTI0NVYxNS4zNTkwOEMzNC45MTI2MSwxNS4zNTkwOCwzNC44MjQzNSwxNS4zNywzNC43MzY1OCwxNS4zNzJaTTIzLjk1MTM3LDIyLjU1N2ExMi4wODgxMywxMi4wODgxMywwLDAsMC02LjMyMzQ5LTYuMTg1MjQsMTIuMDg4MiwxMi4wODgyLDAsMCwwLDYuMzIzNDktNi4xODUyNCwxMi4wODgyOSwxMi4wODgyOSwwLDAsMCw2LjMyMzU0LDYuMTg1MjRBMTIuMDg4MjIsMTIuMDg4MjIsMCwwLDAsMjMuOTUxMzcsMjIuNTU3WiIKICAgIC8+CiAgICA8cGF0aCAgICAgIGZpbGw9IiNmOGZmM2MiIAogICAgICBkPSJNMjMuOTUxMzcsMjIuNTU3YTEyLjA4ODEzLDEyLjA4ODEzLDAsMCwwLTYuMzIzNDktNi4xODUyNCwxMi4wODgyLDEyLjA4ODIsMCwwLDAsNi4zMjM0OS02LjE4NTI0LDEyLjA4ODI5LDEyLjA4ODI5LDAsMCwwLDYuMzIzNTQsNi4xODUyNEExMi4wODgyMiwxMi4wODgyMiwwLDAsMCwyMy45NTEzNywyMi41NTdaIgogICAgLz4KICA8L2c+CgogIDwhLS0gTWVkaXVtIHN0YXIgLS0+CiAgPGc+CiAgICA8cGF0aCAgICAgIGZpbGw9IiNlZTAwMWUiIAogICAgICBkPSJNOC4wMDAyLDE0Ljk4NmgyYTQuOTQ4OTQsNC45NDg5NCwwLDAsMSw0Ljg1ODY0LTQuOTkyOGMuMDQ3MDYuMDAxLjA5NDQyLjAwNy4xNDEzNi4wMDdWNy45ODZjLS4wNDg0NywwLS4wOTM3NS4wMDY1My0uMTQxNzkuMDA3NDRBNC45NDI3Niw0Ljk0Mjc2LDAsMCwxLDEwLjAwMDIsM2gtMkE0Ljk0OSw0Ljk0OSwwLDAsMSwzLjE0MTU1LDcuOTkzQzMuMDk0NDksNy45OTIsMy4wNDcxMyw3Ljk4NiwzLjAwMDIsNy45ODZWMTAuMDAwMmMuMDQ4NDYsMCwuMDkzNzUtLjAwNjU0LjE0MTc4LS4wMDc0NUE0Ljk0Mjc3LDQuOTQyNzcsMCwwLDEsOC4wMDAyLDE0Ljk4NlptLjk4MTI2LTguMzkyNThhNy4wMjM1NSw3LjAyMzU1LDAsMCwwLDIuNDEzODIsMi4zODE1OSw3LjAyNjI4LDcuMDI2MjgsMCwwLDAtMi4zNzYzNSwyLjQxNzcyQTcuMDIzNTUsNy4wMjM1NSwwLDAsMCw2LjYwNTExLDkuMDExMTgsNy4wMjYyOCw3LjAyNjI4LDAsMCwwLDguOTgxNDYsNi41OTM0NloiCiAgICAvPgogICAgPHBhdGggICAgICBmaWxsPSIjZjhmZjNjIiAKICAgICAgZD0iTTguOTgxNDYsNi41OTM0NmE3LjAyMzU1LDcuMDIzNTUsMCwwLDAsMi40MTM4MiwyLjM4MTU5LDcuMDI2MjgsNy4wMjYyOCwwLDAsMC0yLjM3NjM1LDIuNDE3NzJBNy4wMjM1NSw3LjAyMzU1LDAsMCwwLDYuNjA1MTEsOS4wMTExOCw3LjAyNjI4LDcuMDI2MjgsMCwwLDAsOC45ODE0Niw2LjU5MzQ2WiIKICAgIC8+CiAgPC9nPgoKICA8IS0tIFNtYWxsIHN0YXIgLS0+CiAgPGc+CiAgICA8cGF0aCAgICAgIGZpbGw9IiNlZTAwMWUiIAogICAgICBkPSJNMTEuNDUxMzcsMjAuMTE1NDNoLTJhNi4zODU4NSw2LjM4NTg1LDAsMCwxLTYuMjc1NDUsNi40NDIyYy0uMDU4NDgtLjAwMTM0LS4xMTczOC0uMDA4NjEtLjE3NTcyLS4wMDg2MVYyOC41NjY2Yy4wNjAxOCwwLC4xMTY1MS0uMDA4MTIuMTc2MTQtLjAwOTI4YTYuMzc4MTMsNi4zNzgxMywwLDAsMSw2LjI3NSw2LjQ0Mjg4aDJBNi4zODU2Niw2LjM4NTY2LDAsMCwxLDE3LjcyNTksMjguNTU4Yy4wNTg0Ny4wMDEzNC4xMTczMS4wMDg2LjE3NTY2LjAwODZWMjYuNTQ5Yy0uMDYwMTgsMC0uMTE2NTEuMDA4MTItLjE3NjE0LjAwOTI4QTYuMzc3MzYsNi4zNzczNiwwLDAsMSwxMS40NTEzNywyMC4xMTU0M1ptLS45NzkxOSwxMC45MjE5NEE4LjQ3MjEyLDguNDcyMTIsMCwwLDAsNi45NzkwOCwyNy41NzlhOC40NzYxLDguNDc2MSwwLDAsMCwzLjQ1MTM1LTMuNTAwODUsOC40NzIxMSw4LjQ3MjExLDAsMCwwLDMuNDkyNjIsMy40NTgzN0E4LjQ3NDUzLDguNDc0NTMsMCwwLDAsMTAuNDcyMTgsMzEuMDM3MzdaIgogICAgLz4KICAgIDxwYXRoICAgICAgZmlsbD0iI2Y4ZmYzYyIgCiAgICAgIGQ9Ik0xMC40NzIxOCwzMS4wMzczN0E4LjQ3MjEyLDguNDcyMTIsMCwwLDAsNi45NzkwOCwyNy41NzlhOC40NzYxLDguNDc2MSwwLDAsMCwzLjQ1MTM1LTMuNTAwODUsOC40NzIxMSw4LjQ3MjExLDAsMCwwLDMuNDkyNjIsMy40NTgzN0E4LjQ3NDUzLDguNDc0NTMsMCwwLDAsMTAuNDcyMTgsMzEuMDM3MzdaIgogICAgLz4KICA8L2c+Cjwvc3ZnPg==") !important;
  }
`;function A(e){let[t,o]=(0,n.useState)(!1),[r,i]=(0,n.useState)([]),[f,m]=(0,n.useState)(!1),[w,A]=(0,n.useState)(!1),[k,C]=(0,n.useState)("disconnected"),[S,N]=(0,n.useState)(!1),[T,O]=(0,n.useState)(!1),[L,E]=(0,n.useState)(!1),[D,P]=(0,n.useState)([]),I=(0,n.useRef)(null),j=(0,n.useRef)(null),B=(0,n.useRef)(null),z=(0,n.useRef)(null),V=(0,n.useRef)(null),_=(0,n.useRef)([]),W=(0,n.useRef)([]),R=(0,n.useRef)(null),F=(0,n.useRef)(null),U=(0,n.useRef)(!1),$=(0,n.useRef)(null),Y=(0,n.useRef)(null),G=(0,n.useRef)(null),Z=(0,n.useRef)(null),J=(0,n.useRef)(null),Q=void 0===e.newVoiceBotUIFFlag||e.newVoiceBotUIFFlag,[H,q]=(0,n.useState)(!1),K=void 0!==e.hideButton&&e.hideButton,X=(0,n.useRef)(null),ee=(0,n.useRef)(null),et=(0,n.useRef)(null),eo=(0,n.useRef)(!1),en=(0,n.useRef)(!1),er=(0,n.useRef)(0),ei=(0,n.useRef)(null),ea=(0,n.useRef)(null),es=(0,n.useRef)(!0),el=(0,n.useRef)(""),ec=(0,n.useRef)(null),eu=(e,t)=>{new Date().toLocaleTimeString()};(0,n.useEffect)(()=>{(0,p.logEnvironmentInfo)()},[]),(0,n.useEffect)(()=>{if(eo.current){console.log("[VoiceBot] Restoration already attempted, skipping");return}let o=void 0===e.enableStatePersistence||e.enableStatePersistence,n=!0===e.enableCrossPagePersistence;if(o&&n)try{let e=sessionStorage.getItem("vzVoiceBotState");if(e){let o=JSON.parse(e);if(o&&o.isOpen&&!t){eo.current=!0,console.log("[VoiceBot] Initiating state restoration"),(0,g.logAutoStart)(!0,"cross-page persistence restoration");try{window.coreData=window.coreData||[],window.coreData.push({task:"emit",event:"linkClick",params:{name:"voicebot auto start"}})}catch(e){console.error("[VoiceBot] Auto start tagging error:",e)}let e=setTimeout(()=>{var e;null===(e=X.current)||void 0===e||e.call(X)},300);return()=>clearTimeout(e)}}}catch(e){console.error("[VoiceBot] Failed to restore state:",e),(0,g.logVoiceBotException)("restoration","Failed to restore VoiceBot state",{error:e.message})}},[]),(0,n.useEffect)(()=>{let o=void 0===e.enableStatePersistence||e.enableStatePersistence,n=!0===e.enableCrossPagePersistence;o&&n&&t&&(0,u.saveVoiceBotState)({isOpen:!0,fromPage:(0,u.getCurrentPageContext)(),socketConnected:"connected"===k})},[t,k,e.enableStatePersistence,e.enableCrossPagePersistence]),(0,n.useEffect)(()=>{if(e.productItemLists&&F.current&&F.current.readyState===WebSocket.OPEN){let t={mime_type:"application/json",data:{type:globalThis.wsType,items:{filter:e.getRefinements,productItemLists:e.productItemLists},toolId:globalThis.wsToolId}};F.current.send(JSON.stringify(t)),U.current=!0}},[e.productItemLists,e.getRefinements]),(0,n.useEffect)(()=>{if(e.toolMessage&&F.current&&F.current.readyState===WebSocket.OPEN){console.log("[VoiceBot] Sending tool text message:",e.toolMessage);let t={mime_type:"application/json",data:{type:globalThis.wsType,items:e.toolMessage,toolId:globalThis.wsToolId}};F.current.send(JSON.stringify(t))}},[e.toolMessage]),(0,n.useEffect)(()=>{if(e.pageName&&F.current&&F.current.readyState===WebSocket.OPEN){if(es.current){es.current=!1;return}let t=`Hello ${null!=e&&e.pageName?` current pagecontext is : ${null==e?void 0:e.pageName}`:""}`,o={mime_type:"text/plain",data:t,usertext:t};console.log("[VoiceBot] pageName",o),F.current.send(JSON.stringify(o))}},[e.pageName,k]),(0,n.useEffect)(()=>{if(e.textMessage&&F.current&&F.current.readyState===WebSocket.OPEN){console.log("[VoiceBot] Sending text message:",e.textMessage);let t={mime_type:"text/plain",data:e.textMessage};F.current.send(JSON.stringify(t))}},[e.textMessage,k]);let ed=(0,n.useRef)(w);(0,n.useEffect)(()=>{ed.current=w},[w]),(0,n.useEffect)(()=>{let e=V.current;if(!e||w||!L)return;let t=new(globalThis.AudioContext||globalThis.webkitAudioContext),o=t.createAnalyser();o.fftSize=128,o.smoothingTimeConstant=.8;let n=t.createMediaStreamSource(e);n.connect(o),$.current=o;let r=new Uint8Array(o.frequencyBinCount),i=()=>{if(!$.current||ed.current||!L)return;o.getByteFrequencyData(r);let e=[],t=Math.floor(r.length/60);for(let o=0;o<60;o++){let n=Math.min(o*t,r.length-1),i=r[n]/255;e.push(Math.max(.05,1.5*i))}P(e),G.current=requestAnimationFrame(i)};return i(),()=>{G.current&&cancelAnimationFrame(G.current),n&&n.disconnect(),"closed"!==t.state&&t.close()}},[w,L,f]),(0,n.useEffect)(()=>{if(window.__VZGPT_INITIALIZED__||window.VzGptButton){console.log("[VoiceBot] vzgpt already initialized externally (Test & Target), skipping script load");return}if(document.querySelector('script[src*="vzgpt-bundle"]')){console.log("[VoiceBot] vzgpt-bundle script already present in DOM, skipping");return}if(document.getElementById("vzgpt-injection-script"))return;let t="/nextgendigital/sales/assistant/scripts/vzgpt-bundle.min.js",o=!0===e.voiceBotOnly?`${t}?voiceBotOnly=true`:t,n=document.createElement("script");return n.id="vzgpt-injection-script",n.type="text/javascript",n.async=!0,n.src=o,n.onload=()=>{console.log(`[VoiceBot] vzgpt-injection.js loaded successfully from ${o}`)},n.onerror=()=>{console.error(`[VoiceBot] Failed to load vzgpt-injection.js from ${o}`)},document.body.appendChild(n),()=>{let e=document.getElementById("vzgpt-injection-script");e&&e.parentNode&&e.parentNode.removeChild(e)}},[]),(0,n.useEffect)(()=>{if(console.log("[VoiceBot] useEffect for window functions running..."),"undefined"!=typeof window)return window.VoiceBot?console.log("[VoiceBot] window.VoiceBot already exists with keys:",Object.keys(window.VoiceBot)):(window.VoiceBot={},console.log("[VoiceBot] Created new window.VoiceBot object")),window.VoiceBot.openVoiceBot=()=>{console.log("[VoiceBot] openVoiceBot called"),X.current?X.current():console.error("[VoiceBot] openModalRef.current is null")},window.VoiceBot.closeVoiceBot=()=>{console.log("[VoiceBot] closeVoiceBot called"),ee.current?ee.current():console.error("[VoiceBot] closeModalRef.current is null")},window.VoiceBot.closeVoiceBotWithoutClearingState=()=>{console.log("[VoiceBot] closeVoiceBotWithoutClearingState called"),et.current?et.current():console.error("[VoiceBot] closeModalWithoutClearingStateRef.current is null")},window.VoiceBot.isOpen=()=>t,console.log("[VoiceBot] Window functions exposed successfully. Available methods:",Object.keys(window.VoiceBot)),()=>{window.VoiceBot&&(delete window.VoiceBot.openVoiceBot,delete window.VoiceBot.closeVoiceBot,delete window.VoiceBot.closeVoiceBotWithoutClearingState,delete window.VoiceBot.isOpen)}},[]),(0,n.useEffect)(()=>{"undefined"!=typeof window&&window.VoiceBot&&(t?"function"==typeof window.VoiceBot.onModalOpen&&window.VoiceBot.onModalOpen():"function"==typeof window.VoiceBot.onModalClose&&window.VoiceBot.onModalClose())},[t]),(0,n.useEffect)(()=>{if(!Y.current||!t)return;let e=Y.current,o=new Uint8Array(e.frequencyBinCount),n=0,r=()=>{if(!Y.current||!t)return;e.getByteFrequencyData(o);let i=0;for(let e=0;e<o.length;e++)i+=o[e];if(i>5){n=0,N(!0),E(!1);let e=[],t=Math.floor(o.length/60);for(let n=0;n<60;n++){let r=Math.min(n*t,o.length-1),i=o[r]/255;e.push(Math.max(.05,1.8*i))}P(e)}else++n>=30&&(N(!1),E(!0),P([]));Z.current=requestAnimationFrame(r)};return r(),()=>{Z.current&&cancelAnimationFrame(Z.current)}},[t]);let eg=e=>{if(ed.current)return;let t=0;for(let o=0;o<e.length;o++){let n=e[o]/32768;t+=n*n}if(.03>Math.sqrt(t/e.length))return;let o=new Uint8Array(e);_.current.push(o);let n=_.current.reduce((e,t)=>e+t.length,0);n>=2e4?(console.log(`Buffer reached ${n} bytes. Forcing immediate send.`),ep(),R.current&&(clearInterval(R.current),R.current=setInterval(ep,200))):R.current||(R.current=setInterval(ep,200))},ep=()=>{if(0===_.current.length||!F.current||F.current.readyState!==WebSocket.OPEN)return;let e=0;for(let t of _.current)e+=t.length;let t=new Uint8Array(e),o=0;for(let e of _.current)t.set(e,o),o+=e.length;if(t.byteLength<=25600)F.current.send(t.buffer);else for(let e=0;e<t.byteLength;e+=25600){let o=Math.min(25600,t.byteLength-e),n=t.slice(e,e+o);F.current.send(n.buffer),n.byteLength}_.current=[]},ef=async()=>{try{let e=Date.now();eu("info","Starting audio streaming..."),console.log("[VoiceBot] Starting synchronized audio streaming and WebSocket in parallel..."),W.current=[];let t=(0,a.startSynchronizedAudio)(eg);eA(!0);let n=await t,r=Date.now();console.log(`[VoiceBot] Audio system ready in ${r-e}ms`),I.current=n.playerNode,j.current=n.playerContext,B.current=n.recorderNode,z.current=n.recorderContext,V.current=n.micStream,n.playerNode.port&&(n.playerNode.port.onmessage=t=>{"buffering_start"===t.data.type?(console.log(`[VoiceBot] First audio chunk received by worklet at ${t.data.timestamp-e}ms from start`),O(!0)):"buffering_complete"===t.data.type&&(console.log(`[VoiceBot] Buffering complete, audio playing at ${t.data.timestamp-e}ms from start`),O(!1))}),W.current.length>0&&(console.log(`[VoiceBot] Flushing ${W.current.length} queued audio chunks to player`),W.current.forEach(e=>{n.playerNode.port.postMessage(e)}),W.current=[]);let i=(0,a.checkSynchronization)(n.playerContext,n.recorderContext);i.synchronized?console.log("[VoiceBot] ✓ Audio system synchronized"):console.warn("[VoiceBot] ⚠️ Audio synchronization issue:",i.reason),console.log("[VoiceBot] Synchronization status:",i),console.log("[VoiceBot] Audio player state:",n.playerContext.state),console.log("[VoiceBot] Audio recorder state:",n.recorderContext.state);let s=n.playerContext.createAnalyser();s.fftSize=128,s.smoothingTimeConstant=.8,n.playerNode.disconnect(),n.playerNode.connect(s),s.connect(n.playerContext.destination),Y.current=s,console.log("[VoiceBot] Audio player analyser configured");try{window.coreData=window.coreData||[],window.coreData.push({task:"emit",event:"linkClick",params:{name:"voicebot microphone permission allowed"}})}catch(e){console.error("[VoiceBot] Microphone permission allowed tagging error:",e)}m(!0),o(!0)}catch(e){if(console.error("[VoiceBot] Error starting audio:",e),eu("error",`Error starting audio: ${e.message}`),"NotAllowedError"===e.name||e.message.includes("permission")||(0,g.logVoiceBotException)("audio",`Failed to start audio: ${e.message}`,{errorName:e.name,errorStack:e.stack,errorMessage:e.message}),Q&&q(!1),"NotAllowedError"===e.name||e.message.includes("permission")){try{window.coreData=window.coreData||[],window.coreData.push({task:"emit",event:"linkClick",params:{name:"voicebot microphone permission denied"}})}catch(e){console.error("[VoiceBot] Microphone permission denied tagging error:",e)}alert("Microphone permission is required to use voice chat. Please allow microphone access in your browser settings.")}else alert("Failed to start voice chat. Please check your microphone settings and try again.")}},em=()=>{eu("info","Stopping audio streaming..."),el.current&&((0,g.logTranscript)("agent",el.current,!0),el.current=""),R.current&&(clearInterval(R.current),R.current=null),(0,a.stopSynchronizedAudio)(I.current,B.current,V.current),I.current=null,B.current=null,j.current=null,z.current=null,V.current=null,F.current&&(en.current=!0,F.current.close(),F.current=null),ei.current&&(clearTimeout(ei.current),ei.current=null),ea.current&&(clearTimeout(ea.current),ea.current=null),er.current=0,m(!1),C("disconnected"),i([]),o(!1),A(!1),(0,g.logAudioEvent)("stopped",{intentional:en.current}),eu("success","Audio streaming stopped")},ew=()=>{if("undefined"!=typeof globalThis){var e;return(null==globalThis||null===(e=globalThis.navigator)||void 0===e||null===(e=e.userAgent)||void 0===e?void 0:e.indexOf("MY_VZW_APP"))>-1}},eh=(e={})=>{try{var t,o,n,r,i,a;let s=JSON.stringify(e);null!=globalThis&&globalThis.webkit&&null!=globalThis&&null!==(t=globalThis.webkit)&&void 0!==t&&t.messageHandlers&&null!=globalThis&&null!==(o=globalThis.webkit)&&void 0!==o&&null!==(o=o.messageHandlers)&&void 0!==o&&o.mfAppInterface&&null!=globalThis&&null!==(n=globalThis.webkit)&&void 0!==n&&null!==(n=n.messageHandlers)&&void 0!==n&&null!==(n=n.mfAppInterface)&&void 0!==n&&n.postMessage&&(null==globalThis||null===(i=globalThis.webkit)||void 0===i||null===(i=i.messageHandlers)||void 0===i||null===(i=i.mfAppInterface)||void 0===i||i.postMessage(s)),null!=globalThis&&globalThis.mfAppInterface&&null!=globalThis&&null!==(r=globalThis.mfAppInterface)&&void 0!==r&&r.postMessage&&(null==globalThis||null===(a=globalThis.mfAppInterface)||void 0===a||a.postMessage(s))}catch(e){console.error("postMessage Error: ",e)}},ey=()=>{Q&&q(!1),(0,g.logVoiceBotOpened)("manual");let t=document.cookie.split(";").some(e=>{let t=e.trim();return t.startsWith("useNativeVoiceBot=")&&t.includes("true")}),n=document.cookie.split(";").some(e=>{let t=e.trim();return t.startsWith("cdlThrottleList=")&&t.includes("gpt_vb")});ew()&&t?(eh({actionType:"updateVoiceBot",isEnabled:!0,agentName:e.agentName||"voicebot",agentType:"sales",pageName:e.pageName}),globalThis.voiceBotDataToWeb=async t=>{try{if(!t||"object"!=typeof t)return;if(console.log("voiceBot payload:",t),e.socketCallback&&"function"==typeof e.socketCallback){let o=await e.socketCallback(t),n={mime_type:"application/json",data:h({type:o.type,acknowledgement:o.status},o.data),tool_id:o.tool_id};return console.log("voiceBot response to MVA layer :",n),n}}catch(e){return console.error("voiceBotDataToWeb error:",e),(0,g.logVoiceBotException)("tool-call","Error in MVA voiceBotDataToWeb",{error:e.message}),{mime_type:"application/json",data:{type:t.type,acknowledgement:"failed"},tool_id:t.tool_id}}},o(!0)):(ew()&&n&&o(!0),ef())},eb=()=>{t&&(o(!1),Q&&q(!1),(0,g.logVoiceBotClosed)("user-action"),em(),(0,u.clearVoiceBotState)(),e.onClose&&e.onClose())};X.current=ey,ee.current=eb,et.current=()=>{t&&(o(!1),Q&&q(!1),(0,g.logVoiceBotClosed)("navigation"),em(),e.onClose&&e.onClose())};let ev=document.cookie.split(";").some(e=>{let t=e.trim();return t.startsWith("useWsOnly=")&&t.includes("true")}),eM=document.cookie.split(";").some(e=>{let t=e.trim();return t.startsWith("loggedIn=")&&t.includes("true")}),ex=document.cookie.split(";").some(e=>{let t=e.trim();return t.startsWith("useWebMCP=")&&t.includes("true")}),eA=(t=!1)=>{var o,n,r,a;if(console.log("[VoiceBot] connectWebSocket called, wsRef.current:",null===(o=F.current)||void 0===o?void 0:o.readyState),F.current&&F.current.readyState===WebSocket.OPEN){console.log("[VoiceBot] WebSocket already connected, skipping");return}if(F.current&&F.current.readyState===WebSocket.CONNECTING){console.log("[VoiceBot] WebSocket already connecting, skipping");return}console.log("[VoiceBot] Creating new WebSocket connection");let s=globalThis.navigator.userAgent;e.pageName&&(document.cookie=`pageName=${encodeURIComponent(e.pageName)}; path=/`),e.channelId&&(document.cookie=`channelId=${encodeURIComponent((0,d.getChannelId)(s))}; path=/`);let l=e.agentName?`&agent_name=${e.agentName}`:"",c=e.pageName?`&pageName=${e.pageName}`:"",u=`wss://${e.domainName}/conversational/digital/sales/${eM&&!(null!==(n=e.featureFlags)&&void 0!==n&&null!==(n=n.removeAuthUrlVoiceBotFFlag)&&void 0!==n&&n.enabled)?"auth/":""}?is_audio=${t}${l}${c}`;(null==globalThis||null===(r=globalThis.location)||void 0===r||null===(r=r.href)||void 0===r?void 0:r.indexOf("localhost"))!==-1&&(u=`ws://${globalThis.location.hostname}:3001/conversational/digital/sales/?is_audio=${t}${l}${c}`),ev&&(u=`ws://${e.domainName}/conversational/digital/sales/${eM&&!(null!==(a=e.featureFlags)&&void 0!==a&&null!==(a=a.removeAuthUrlVoiceBotFFlag)&&void 0!==a&&a.enabled)?"auth/":""}?is_audio=${t}${l}${c}`),eu("info",`Connecting to WebSocket: ${u}`),C("connecting"),ec.current=Date.now();let p=new WebSocket(u);p.binaryType="arraybuffer",F.current=p,p.onopen=()=>{var t;let o=Date.now()-(ec.current||Date.now());eu("success","WebSocket connected"),console.log(`[VoiceBot] WebSocket connected in ${o}ms`),C("connected"),m(!0),E(!0),(0,g.logWebSocketEvent)("connected",{agentName:e.agentName,pageName:e.pageName}),ei.current&&(clearTimeout(ei.current),ei.current=null),ea.current&&clearTimeout(ea.current),ea.current=setTimeout(()=>{er.current=0,ea.current=null},5e3);let n=`Hello ${null!=e&&e.pageName?` current pagecontext is : ${null==e?void 0:e.pageName}`:""}`,r={mime_type:"text/plain",data:n,usertext:n,webmcp:ex&&(null==globalThis||null===(t=globalThis.PageTools)||void 0===t?void 0:t.tools)||[]};if(es.current=!0,F.current.send(JSON.stringify(r)),e.isLoggedIn){let t={mime_type:"text/plain",data:e.isLoggedIn&&"login status is : true",usertext:e.isLoggedIn&&"login status is : true"};F.current.send(JSON.stringify(t))}},p.onmessage=t=>{if(t.data instanceof ArrayBuffer){0!==W.current.length||I.current||console.log(`[VoiceBot] First audio chunk received from WebSocket at ${Date.now()-(ec.current||Date.now())}ms from connection start`),I.current?I.current.port.postMessage(t.data):(console.log("[VoiceBot] Player not ready, queuing incoming audio chunk"),W.current.push(t.data));return}try{var o;let n=JSON.parse(t.data);if("recognition"===n.type&&null!==(o=n.recognitionResult)&&void 0!==o&&o.transcript){let e=n.recognitionResult.transcript;el.current&&((0,g.logTranscript)("agent",el.current,!0),el.current=""),i(t=>{let o=[...t];for(let e=o.length-1;e>=0;e--)if(!o[e].complete&&"agent"===o[e].type){o[e]=h(h({},o[e]),{},{complete:!0});break}return o.push({text:e,complete:!0,type:"user"}),o}),(0,g.logTranscript)("user",e,!0);return}if("text/turn_complete"===n.mime_type&&!0===n.data){el.current&&((0,g.logTranscript)("agent",el.current,!0),el.current=""),i(e=>{let t=-1;for(let o=e.length-1;o>=0;o--)if(!e[o].complete&&"agent"===e[o].type){t=o;break}if(-1===t)return e;let o=[...e];return o[t]=h(h({},o[t]),{},{complete:!0}),o});return}if(n.interrupted){el.current&&((0,g.logTranscript)("agent",el.current,!0),el.current=""),i(e=>{let t=-1;for(let o=e.length-1;o>=0;o--)if(!e[o].complete&&"agent"===e[o].type){t=o;break}if(-1===t)return e;let o=[...e];return o[t]=h(h({},o[t]),{},{complete:!0}),o}),I.current&&I.current.port.postMessage({command:"endOfAudio"});return}if("application/json"===n.mime_type&&"function_call"===n.type_of_request){if(globalThis.wsToolId=n.tool_id,globalThis.wsType=n.type,(0,g.logToolCallReceived)({type:n.type,tool_id:n.tool_id,type_of_request:n.type_of_request,data:n.data}),e.socketCallback&&"function"==typeof e.socketCallback){let t=e.socketCallback(n);if(t&&"function"==typeof t.then)t.then(e=>{let t={mime_type:"application/json",data:{type:n.type,items:e,tool_id:n.tool_id||""}};e&&(p.send(JSON.stringify(t)),(0,g.logToolCallProcessed)(n.type,n.tool_id,e))}).catch(e=>{console.error("Promise rejected:",e),(0,g.logVoiceBotException)("tool-call","Tool call promise rejected",{toolType:n.type,toolId:n.tool_id,error:e.message})});else{let e={mime_type:"application/json",data:{type:n.type,items:t,tool_id:n.tool_id||""}};console.log("response12",t),t&&(p.send(JSON.stringify(e)),(0,g.logToolCallProcessed)(n.type,n.tool_id,t))}}return}if("application/json"===n.mime_type&&"getFilteredData"===n.type){globalThis.wsToolId=n.tool_id,globalThis.wsType=n.type,(0,g.logToolCallReceived)({type:n.type,tool_id:n.tool_id,data:n.data}),e.socketCallback&&"function"==typeof e.socketCallback&&e.socketCallback(n);return}if("application/json"===n.mime_type&&"getInitialData"===n.type){let t={filter:e.getRefinements,productItemLists:e.productItemLists},o={mime_type:"application/json",data:{type:"getInitialData",items:t,tool_id:n.tool_id||""}};p.send(JSON.stringify(o)),(0,g.logToolCallProcessed)("getInitialData",n.tool_id,t);return}"text/plain"===n.mime_type&&n.data&&(el.current+=n.data,i(e=>{let t=[...e];return 0===t.length||t[t.length-1].complete?t.push({text:n.data,complete:!1,type:"agent"}):t[t.length-1].text+=n.data,t}))}catch(e){eu("error",`Error parsing message: ${e.message}`),(0,g.logVoiceBotException)("websocket","Error parsing WebSocket message",{error:e.message,errorStack:e.stack})}},p.onclose=()=>{if(eu("warning","WebSocket disconnected"),C("disconnected"),m(!1),F.current=null,U.current=!1,(0,g.logWebSocketEvent)("disconnected",{intentional:en.current,retryCount:er.current}),ea.current&&(clearTimeout(ea.current),ea.current=null),!en.current&&ee.current){if(er.current<2){er.current++,eu("info",`Retrying connection (attempt ${er.current}/2)...`),(0,g.logWebSocketEvent)("reconnecting",{retryCount:er.current,maxRetries:2}),ei.current&&clearTimeout(ei.current),ei.current=setTimeout(()=>{eA(t),ei.current=null},2e3);return}(0,g.logVoiceBotClosed)("websocket-disconnect"),ee.current()}er.current=0,en.current=!1},p.onerror=e=>{eu("error","WebSocket error"),console.error("WebSocket error:",e),(0,g.logWebSocketEvent)("error",{error:e.message||"WebSocket error occurred"}),(0,g.logVoiceBotException)("websocket","WebSocket connection error",{error:e.message,readyState:p.readyState})}};return n.default.createElement("div",null,Q&&n.default.createElement(c.GlobalStyles,null),!K&&Q&&n.default.createElement(l.default,{ref:J,vzGptUrl:e.vzGptUrl,title:e.vzGptTitle,badgeLabel:e.vzGptBadge}),!K&&!t&&Q&&n.default.createElement(M,{expanded:H,bottomOffset:e.bottomOffset,bottomOffsetMobile:e.bottomOffsetMobile},n.default.createElement(c.default,null,n.default.createElement(x,{isMainButton:!0,expanded:H,show:!0,onClick:()=>{Q&&(q(e=>!e),!H&&e.onOpen&&e.onOpen())},disabled:null!==F.current&&F.current.readyState===WebSocket.OPEN,"aria-label":"Voice assistant"},n.default.createElement("div",{className:"vz-gpt-vera-icon"}))),n.default.createElement(x,{isMainButton:!1,isMessageButton:!0,show:H,expanded:H,onClick:()=>{Q&&(q(!1),J.current?J.current.openDrawer():console.warn("VzGptIntegration ref is not available"))},disabled:null!==F.current&&F.current.readyState===WebSocket.OPEN,"aria-label":"Text chat"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"30",height:"30",viewBox:"0 0 21.6 21.6",fill:"none"},n.default.createElement("path",{fill:"#ffffff",d:"M10.8,1.8A9,9,0,0,0,3.19,15.6L2.12,19.68l4-1.23A9,9,0,1,0,10.8,1.8Zm0,16.88A7.88,7.88,0,0,1,6.67,17.5l-.43-.27-.49.15-2,.63.56-2.13.13-.47L4.15,15a7.87,7.87,0,1,1,6.65,3.68Zm1.1-7.78a1.13,1.13,0,1,1-1.13-1.13A1.12,1.12,0,0,1,11.9,10.9Zm3.95,0a1.13,1.13,0,1,1-1.13-1.13A1.12,1.12,0,0,1,15.85,10.9ZM8,10.9A1.13,1.13,0,1,1,6.88,9.77,1.12,1.12,0,0,1,8,10.9Z"}))),n.default.createElement(x,{isMainButton:!1,show:H,expanded:H,onClick:ey,disabled:null!==F.current&&F.current.readyState===WebSocket.OPEN,"aria-label":"Voice chat"},n.default.createElement("svg",{xmlns:"http://www.w3.org/2000/svg",width:"30",height:"30",viewBox:"0 0 21.6 21.6",fill:"none"},n.default.createElement("path",{fill:"#ffffff",d:"M10.8,15.3a3.39,3.39,0,0,0,3.38-3.37V5.18a3.38,3.38,0,1,0-6.75,0v6.75A3.38,3.38,0,0,0,10.8,15.3ZM8.55,5.18a2.25,2.25,0,0,1,4.5,0v6.75a2.25,2.25,0,0,1-4.5,0Zm7.88,6.75H15.3a4.5,4.5,0,1,1-9,0H5.18a5.62,5.62,0,0,0,5.06,5.59v1.16H7.43V19.8h6.75V18.68H11.36V17.52A5.63,5.63,0,0,0,16.43,11.93Z"})))),!K&&!t&&!Q&&n.default.createElement(y,{hide:t,onClick:ey,disabled:null!==F.current&&F.current.readyState===WebSocket.OPEN},n.default.createElement("svg",{className:"mic-icon",xmlns:"http://www.w3.org/2000/svg",width:"18",height:"18",viewBox:"0 0 24 24",fill:"currentColor"},n.default.createElement("path",{d:"M12 14c1.66 0 2.99-1.34 2.99-3L15 5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.49 6-3.31 6-6.72h-1.7z"})),n.default.createElement(b,null,"Unlock answers with your voice")),n.default.createElement(v,{show:t,bottomOffset:e.bottomOffset,bottomOffsetMobile:e.bottomOffsetMobile},n.default.createElement(s.VzAssist,{hideModel:eb,isAgentSpeaking:S,isBuffering:T,isUserListening:L,isMuted:w,onToggleMute:()=>{A(e=>{let t=!e;return(0,g.logAudioEvent)(t?"muted":"unmuted",{isMuted:t}),t})},audioLevels:D,micStream:V.current,speakerAnalyser:Y.current,messages:r,newVoiceBot:Q})))}A.propTypes={getRefinements:r.default.oneOfType([r.default.string,r.default.object]),productItemLists:r.default.oneOfType([r.default.string,r.default.object]),selectedPlan:r.default.string,selectedPerks:r.default.string,selectedAccessories:r.default.string,selectedOffer:r.default.string,domainName:r.default.string,initialData:r.default.arrayOf(r.default.object),bottomOffset:r.default.string,bottomOffsetMobile:r.default.string,defaultListenLabel:r.default.string,socketCallback:r.default.func,onOpen:r.default.func,onClose:r.default.func,vzGptUrl:r.default.string,vzGptTitle:r.default.string,vzGptBadge:r.default.string,newVoiceBotUIFFlag:r.default.bool,hideButton:r.default.bool,pageName:r.default.string,enableStatePersistence:r.default.bool,enableCrossPagePersistence:r.default.bool,agentName:r.default.string,channelId:r.default.string,flowName:r.default.string,toolMessage:r.default.oneOfType([r.default.string,r.default.object]),textMessage:r.default.oneOfType([r.default.string,r.default.object]),voiceBotOnly:r.default.bool},A.defaultProps={getRefinements:"",productItemLists:"",selectedPlan:"",selectedPerks:"",selectedAccessories:"",selectedOffer:"",domainName:"",initialData:[],defaultListenLabel:"I'm listening. What questions do you have about TravelPass",socketCallback:()=>{},onOpen:()=>{},onClose:()=>{},vzGptUrl:"/nextgendigital/sales/browse/vz-gpt/?type=vegas&iframe=true&streaming=true",vzGptTitle:"Shopping assistant",vzGptBadge:"Beta",newVoiceBotUIFFlag:!0,hideButton:!1,enableStatePersistence:!0,enableCrossPagePersistence:!1,pageName:"",agentName:"",channelId:"",flowName:"",voiceBotOnly:!1},t.A=A},76365:(e,t,o)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.default=t.GlobalStyles=void 0;var n=r(o(44987));function r(e,t){if("function"==typeof WeakMap)var o=new WeakMap,n=new WeakMap;return(r=function(e,t){if(!t&&e&&e.__esModule)return e;var r,i,a={__proto__:null,default:e};if(null===e||"object"!=typeof e&&"function"!=typeof e)return a;if(r=t?n:o){if(r.has(e))return r.get(e);r.set(e,a)}for(let t in e)"default"!==t&&({}).hasOwnProperty.call(e,t)&&((i=(r=Object.defineProperty)&&Object.getOwnPropertyDescriptor(e,t))&&(i.get||i.set)?r(a,t,i):a[t]=e[t]);return a})(e,t)}t.GlobalStyles=(0,n.createGlobalStyle)`
  @property --angle {
    syntax: '<angle>';
    initial-value: 0deg;
    inherits: false;
  }
`;let i=(0,n.keyframes)`
  0% {
    --angle: 0deg;
  }
  100% {
    --angle: 360deg;
  }
`;t.default=n.default.div`
  position: relative;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 50%;
  width: 66px;
  height: 66px;
  flex-shrink: 0;
  
  &::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border-radius: 50%;
    padding: 3px;
    background: conic-gradient(
      from var(--angle, 0deg),
      #FF281E 0deg,
      #F8FF3C 120deg,
      #FF281E 240deg,
      #FF281E 360deg
    );
    -webkit-mask: 
      linear-gradient(#fff 0 0) content-box, 
      linear-gradient(#fff 0 0);
    -webkit-mask-composite: xor;
    mask: 
      linear-gradient(#fff 0 0) content-box, 
      linear-gradient(#fff 0 0);
    mask-composite: exclude;
    animation: ${i} 3s linear infinite;
    pointer-events: none;
    z-index: 0;
    will-change: transform;
  }
`},78141:(e,t)=>{function o(){var e;let t=navigator.userAgent,o=/iPhone|iPad|iPod/.test(t),n=null===(e=globalThis.webkit)||void 0===e?void 0:e.messageHandlers;return o&&!n}function n(){var e;let t=navigator.userAgent,o=/iPhone|iPad|iPod/.test(t),n=null===(e=globalThis.webkit)||void 0===e?void 0:e.messageHandlers;return o&&n}function r(){return/iPhone|iPad|iPod/.test(navigator.userAgent)}function i(){return"undefined"!=typeof AudioContext&&"audioWorklet"in AudioContext.prototype}function a(){return"undefined"!=typeof AudioContext||"undefined"!=typeof webkitAudioContext}function s(){return{webAudio:a(),audioWorklet:i(),scriptProcessor:"undefined"!=typeof ScriptProcessorNode,audioContext:"undefined"!=typeof AudioContext,webkitAudioContext:"undefined"!=typeof webkitAudioContext}}function l(){var e;return{userAgent:navigator.userAgent,platform:(null===(e=navigator.userAgentData)||void 0===e?void 0:e.platform)||navigator.platform||"unknown",isUIWebView:o(),isWKWebView:n(),isIOS:r(),audioCapabilities:s()}}Object.defineProperty(t,"__esModule",{value:!0}),t.getAudioCapabilities=s,t.getEnvironmentInfo=l,t.isIOS=r,t.isUIWebView=o,t.isWKWebView=n,t.logEnvironmentInfo=function(){let e=l(),t="Regular Browser";return e.isUIWebView?t="UIWebView (Legacy)":e.isWKWebView&&(t="WKWebView"),console.group("[VoiceBot] Environment Information"),console.log("WebView Type:",t),console.log("Platform:",e.platform),console.log("iOS Device:",e.isIOS),console.log("Audio Capabilities:",e.audioCapabilities),console.log("User Agent:",e.userAgent),console.groupEnd(),e.isUIWebView&&(console.warn("[VoiceBot] ⚠️ UIWebView detected! This is deprecated and has limited Web Audio support."),console.warn("[VoiceBot] ⚠️ Consider migrating to WKWebView for better performance and features.")),e.audioCapabilities.audioWorklet||console.warn("[VoiceBot] ⚠️ AudioWorklet not supported. Using legacy ScriptProcessorNode fallback."),e},t.supportsAudioWorklet=i,t.supportsWebAudio=a},79898:(e,t)=>{Object.defineProperty(t,"__esModule",{value:!0}),t.getPageName=t.getChannelId=void 0;let o=e=>"undefined"!=typeof window&&window.isMVA?window.isMVA(e):(null==e?void 0:e.indexOf("MY_VZW_APP"))>-1,n=e=>"undefined"!=typeof window&&window.isMobile?window.isMobile(e):/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(e||""),r=e=>"undefined"!=typeof window&&window.Tablet?window.Tablet(e):/iPad|Android/i.test(e||"")&&!/Mobile/i.test(e||""),i=e=>o(e)?"mfapp":n(e)?"mobile":r(e)?"tablet":"desktop",a=e=>e.indexOf("VZW-MFA-IOS")>-1,s=e=>e.indexOf("VZW-MFA-ANDROID")>-1;t.getChannelId=e=>{let t="VZW-DOTCOM";return("mobile"===i(e)||"mfapp"===i(e))&&(t="VZW-DOTCOM-MOB",a(e)?t="VZW-MFA-IOS":s(e)?t="VZW-MFA-ANDROID":"tablet"===i(e)&&(t="VZW-DOTCOM")),t},t.getPageName=()=>{var e,t,o,n;let r="NextJS";if(null!==(e=window)&&void 0!==e&&null!==(e=e.location)&&void 0!==e&&e.pathname){let e=null===(t=window)||void 0===t||null===(t=t.location)||void 0===t?void 0:t.pathname;r=null!==(o=null==e||null===(n=e.split)||void 0===n||null===(n=n.call(e,"/"))||void 0===n?void 0:n.pop())&&void 0!==o?o:"",(null==e?void 0:e.indexOf("configurator"))!==-1&&(null==e?void 0:e.indexOf("device-protection"))===-1&&(null==e?void 0:e.indexOf("cart"))===-1&&(r="Configurator")}return r}},85055:(e,t,o)=>{o.d(t,{O6:()=>p,P_:()=>d,mB:()=>g}),"undefined"!=typeof window?window:void 0!==o.g?o.g:"undefined"!=typeof self&&self;var n=function(e,t){return e(t={exports:{}},t.exports),t.exports}(function(e,t){e.exports=function(){var e=function(){},t={},o={},n={};function r(e,t){if(e){var r=n[e];if(o[e]=t,r)for(;r.length;)r[0](e,t),r.splice(0,1)}}function i(t,o){t.call&&(t={success:t}),o.length?(t.error||e)(o):(t.success||e)(t)}function a(o,n,a){var s,l;if(n&&n.trim&&(s=n),l=(s?a:n)||{},s)if(s in t)throw"LoadJS";else t[s]=!0;function c(t,n){!function(t,o,n){var r,i,a=(t=t.push?t:[t]).length,s=a,l=[];for(i=0,r=function(e,t,n){if("e"==t&&l.push(e),"b"==t)if(!n)return;else l.push(e);--a||o(l)};i<s;i++)!function t(o,n,r,i){var a,s,l=document,c=r.async,u=(r.numRetries||0)+1,d=r.before||e,g=o.replace(/[\?|#].*$/,""),p=o.replace(/^(css|img)!/,"");i=i||0,/(^css!|\.css$)/.test(g)?((s=l.createElement("link")).rel="stylesheet",s.href=p,(a="hideFocus"in s)&&s.relList&&(a=0,s.rel="preload",s.as="style")):/(^img!|\.(png|gif|jpg|svg|webp)$)/.test(g)?(s=l.createElement("img")).src=p:((s=l.createElement("script")).src=o,s.async=void 0===c||c),s.onload=s.onerror=s.onbeforeload=function(e){var l=e.type[0];if(a)try{s.sheet.cssText.length||(l="e")}catch(e){18!=e.code&&(l="e")}if("e"==l){if((i+=1)<u)return t(o,n,r,i)}else if("preload"==s.rel&&"style"==s.as)return s.rel="stylesheet";n(o,l,e.defaultPrevented)},!1!==d(o,s)&&l.head.appendChild(s)}(t[i],r,n)}(o,function(e){i(l,e),t&&i({success:t,error:n},e),r(s,e)},l)}if(l.returnPromise)return new Promise(c);c()}return a.ready=function(e,t){return function(e,t){e=e.push?e:[e];var r,i,a,s=[],l=e.length,c=l;for(r=function(e,o){o.length&&s.push(e),--c||t(s)};l--;){if(a=o[i=e[l]]){r(i,a);continue}(n[i]=n[i]||[]).push(r)}}(e,function(e){i(t,e)}),a},a.done=function(e){r(e,[])},a.reset=function(){t={},o={},n={}},a.isDefined=function(e){return e in t},a}()}),r=function(e){return function(){var t=e.apply(this,arguments);return new Promise(function(e,o){return function n(r,i){try{var a=t[r](i),s=a.value}catch(e){o(e);return}if(!a.done)return Promise.resolve(s).then(function(e){n("next",e)},function(e){n("throw",e)});e(s)}("next")})}},i=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var o=arguments[t];for(var n in o)Object.prototype.hasOwnProperty.call(o,n)&&(e[n]=o[n])}return e},a=function(e,t){if(Array.isArray(e))return e;if(Symbol.iterator in Object(e))return function(e,t){var o=[],n=!0,r=!1,i=void 0;try{for(var a,s=e[Symbol.iterator]();!(n=(a=s.next()).done)&&(o.push(a.value),!t||o.length!==t);n=!0);}catch(e){r=!0,i=e}finally{try{!n&&s.return&&s.return()}finally{if(r)throw i}}return o}(e,t);throw TypeError("Invalid attempt to destructure non-iterable instance")},s=void 0,l=function(){var e=window.vzFlags&&window.vzFlags.isProd||"www.verizon.com"===window.location.hostname||"www.verizonwireless.com"===window.location.hostname?"PRODUCTION":"UAT",t={DEVELOPMENT:{encryption:"https://voltage-pp-0000.dev.verizon.com/pie/v1/encryption.js",key:"https://voltage-pp-0000.dev.verizon.com/pie/v1/verizon/getkey.js"},UAT:{encryption:"https://pie.uat.verizon.com/pie/v1/encryption.js",key:"https://pie.uat.verizon.com/pie/v1/verizon/getkey.js"},PRODUCTION:{encryption:"https://pie.prod.verizon.com/pie/v1/encryption.js",key:"https://pie.prod.verizon.com/pie/v1/verizon/getkey.js"}};return e&&t&&t[e]?t[e]:null},c=function(){return new Promise(function(e){var t=Object.values(l()||{}),o=!0,r=!0,i=function(){e({isSuccess:!0,getKeyJsSuccess:o,encryptionJsSuccess:r})};t&&t.length>0?n(t,{returnPromise:!0}).then(i).catch(function(t){console.debug("The following files failed to load: ",t,"\n Retrying..."),n(t,{returnPromise:!0}).then(i).catch(function(t){console.debug("Retrying to load the following files failed: ",t),t.forEach(function(e){e.includes("getkey.js")?o=!1:e.includes("encryption.js")&&(r=!1)}),e({isSuccess:!1,getKeyJsSuccess:o,encryptionJsSuccess:r,failedFiles:t})})}):e({isSuccess:!1,getKeyJsSuccess:!1,encryptionJsSuccess:!1,failedFiles:[],noScriptsMatchEnv:!0})})},u={JS:"PIE_JS_LOAD_FAILED",PAN:"PAN_VALIDATION_FAILED",ENCRYPTION:"PIE_ENCRYPTION_FAILED"},d={CC:"creditcard",CVC:"cvv",CVV:"cvv",GC_NUMBER:"giftcardnumber",GC_PIN:"giftcardpin",SSN:"ssn",PIN:"pin",PASSWORD:"password"};r(regeneratorRuntime.mark(function e(t,o){var n,r,i,l,g,p;return regeneratorRuntime.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:if(n="PCC",r=null,i={encryptionStatus:{requestedInput:d.CC,validPANChecksum:!1,errorType:null,isSuccess:!1},pieFunctionStatus:{ValidatePANChecksum:!!window.ValidatePANChecksum,ProtectPANandCVV:!!window.ProtectPANandCVV,ProtectString:!!window.ProtectString}},window.ValidatePANChecksum&&window.ProtectPANandCVV){e.next=11;break}return e.next=6,c();case 6:if(i.pieFileStatus=e.sent,i.pieFunctionStatus={ValidatePANChecksum:!!window.ValidatePANChecksum,ProtectPANandCVV:!!window.ProtectPANandCVV,ProtectString:!!window.ProtectString},i.pieFileStatus.isSuccess){e.next=11;break}return i.encryptionStatus.errorType=u.JS,e.abrupt("return",i);case 11:if(window.ValidatePANChecksum&&window.ProtectPANandCVV){e.next=14;break}return i.encryptionStatus.errorType=u.JS,e.abrupt("return",i);case 14:try{i.encryptionStatus.validPANChecksum=!!t&&window.ValidatePANChecksum(t)}catch(e){i.encryptionStatus.validPANChecksum=!1,i.encryptionStatus.errorType=u.PAN,i.encryptionStatus.pieJSError={message:e.message,stack:e.stack,function:"ValidatePANChecksum"}}if(i.encryptionStatus.validPANChecksum){try{r=t&&window.ProtectPANandCVV?window.ProtectPANandCVV(t,o):null}catch(e){r=null,i.encryptionStatus.pieJSError={message:e.message,stack:e.stack,function:"ProtectPANandCVV"}}null!==r&&Array.isArray(r)?(g=(l=a(r,2))[0],p=l[1],i.encryptedData=g+" "+p+" "+n,i.encryptedData2=p+" "+n,i.encryptionStatus.isSuccess=!0):i.encryptionStatus.errorType=u.ENCRYPTION}else i.encryptionStatus.errorType=u.PAN;return e.abrupt("return",i);case 17:case"end":return e.stop()}},e,s)}));var g=function(){var e=r(regeneratorRuntime.mark(function e(t,o){var n,r,i;return regeneratorRuntime.wrap(function(e){for(;;)switch(e.prev=e.next){case 0:if(n="PSS",r=null,i={encryptedData:null,encryptionStatus:{requestedInput:o,errorType:null,isSuccess:!1},pieFunctionStatus:{ValidatePANChecksum:!!window.ValidatePANChecksum,ProtectPANandCVV:!!window.ProtectPANandCVV,ProtectString:!!window.ProtectString}},window.ProtectString){e.next=11;break}return e.next=6,c();case 6:if(i.pieFileStatus=e.sent,i.pieFunctionStatus={ValidatePANChecksum:!!window.ValidatePANChecksum,ProtectPANandCVV:!!window.ProtectPANandCVV,ProtectString:!!window.ProtectString},i.pieFileStatus.isSuccess){e.next=11;break}return i.encryptionStatus.errorType=u.JS,e.abrupt("return",i);case 11:if(!window.ProtectString){e.next=24;break}e.prev=12,(r=window.ProtectString(t))?(i.encryptedData=r[0]+" "+window.PIE.key_id+" "+window.PIE.phase+" "+n,i.encryptionStatus.isSuccess=!0):i.encryptionStatus.errorType=u.ENCRYPTION,e.next=22;break;case 17:return e.prev=17,e.t0=e.catch(12),i.encryptionStatus.errorType=u.ENCRYPTION,i.encryptionStatus.pieJSError={message:e.t0.message,stack:e.t0.stack,function:"ProtectString"},e.abrupt("return",i);case 22:e.next=25;break;case 24:i.encryptionStatus.errorType=u.JS;case 25:return e.abrupt("return",i);case 26:case"end":return e.stop()}},e,s,[[12,17]])}));return function(t,o){return e.apply(this,arguments)}}(),p=function(e){var t=i({},e);return delete t.encryptedData,delete t.encryptedData2,{subEventType:"FeErrorPie",error:{extraParams:t}}}}}]);