/* Kevel Image banner */
const position1 = document.querySelector("#div1Container");
const adBody1 = kevelAds.decisions.div1.contents[0].body;
const div1 = document.createElement("div");
div1.classList = "div1 kevelAds";
div1.innerHTML = adBody1;
position1.appendChild(div1);

/* Kevel Video banner with m3u8 */
const position2 = document.querySelector("#div2Container");
const vidHeight = kevelVideoAds.decisions.div2.contents[0].data.height;
const vidWidth = kevelVideoAds.decisions.div2.contents[0].data.width;
let adm3u8 = kevelVideoAds.decisions.div2.contents[0].data.ctContentPlaybackId;
if (adm3u8.indexOf("https://") === -1)
  adm3u8 = "https://stream.video-assets.kevel.com/"+adm3u8+".m3u8";
const video = document.createElement("video");
video.id = "video";
/*video.height = vidHeight;
video.width = vidWidth;*/
video.muted = true;
const div2 = document.createElement("div");
div2.classList = "div2 kevelAds";
div2.appendChild(video);
position2.appendChild(div2);
if (Hls.isSupported()) {
  const adVideo = document.querySelector("#video");
  const hls = new Hls({capLevelOnFPSDrop: true});
  hls.on(Hls.Events.MEDIA_ATTACHED, function () {
    //console.log('video and hls.js are now bound together !');
  });
  hls.on(Hls.Events.MANIFEST_PARSED, function (event, data) {
    //console.log('manifest loaded, found ' + data.levels.length + ' quality level');
  });
  hls.loadSource(adm3u8);
  hls.attachMedia(adVideo);
  adVideo.play();
  hls.on(Hls.Events.ERROR, function (event, data) {
    if (data.fatal) {
      switch (data.type) {
        case Hls.ErrorTypes.NETWORK_ERROR:
          // try to recover network error
          //console.log('fatal network error encountered, try to recover');
          hls.startLoad();
          break;
        case Hls.ErrorTypes.MEDIA_ERROR:
          //console.log('fatal media error encountered, try to recover');
          hls.recoverMediaError();
          break;
        default:
          // cannot recover
          hls.destroy();
          break;
      }
    }
  });
  adVideo.addEventListener("click", (e) => {
    e.preventDefault();
    if (e.target.paused === true) {
      e.target.play();
      e.target.muted = false;
    } else {
      e.target.pause();
      e.target.muted = true;
    }
  });
}

/* Kevel Video banner with VAST tag */
/*const beforeVAST = '<?xml version="1.0" encoding="UTF-8"?><VMAP xmlns:vmap="http://www.iab.net/vmap-1.0" version="1.0"><vmap:AdBreak timeOffset="start" breakType="linear"><vmap:AdSource allowMultipleAds="true" followRedirects="false"><vmap:VASTAdData><VAST xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="vast.xsd" version="3.0">';
const afterVAST = '</VAST></vmap:VASTAdData></vmap:AdSource></vmap:AdBreak></VMAP>';*/
/*const beforeVAST = '<VAST xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="vast.xsd" version="3.0">';
const afterVAST = '</VAST>';*/
const beforeVAST = '';
const afterVAST = '';
const position2b = document.querySelector("#div2bContainer");
const adBody2b = beforeVAST + kevelVideoAds.decisions.div2.contents[0].body + afterVAST;
const dataUrib = 'data:application/xml,' + encodeURIComponent(adBody2b);
/*const div2b = document.createElement("div");
div2b.classList = "div2b kevelAds";
div2b.appendChild(video);
div2b.innerHTML = adBody2b;
position2b.appendChild(div2b);*/
(function(VASTPlayerKevel) {
  'use strict';

  var player = new VASTPlayer(document.getElementById('div2bContainer'));

  player.once('AdStopped', function() {
    console.log('Ad finished playback!');
  });

  player.load(
    dataUrib
  ).then(function startAd() {
    return player.startAd();
  }).catch(function(reason) {
    setTimeout(function() { throw reason; }, 0);
  });
}(window.VASTPlayerKevel));

/* Jivox Video banner with VAST url */
(function(VASTPlayerJivox) {
  'use strict';

  var player = new VASTPlayer(document.getElementById('div6Container'));

  player.once('AdStopped', function() {
    console.log('Ad finished playback!');
  });

  player.load('https://traffick.jivox.com/jivox/serverAPIs/getCampaignById.php?api=vast-dynamic&version=2.0&siteId=06358077eae3b2&campaignId=168258&ts_pId=mP1340&ap_DataSignal1=${TAG_VARIABLE}&noFlash=1&dspId=-&jvxVer=2&r={cachebuster}&'
  ).then(function startAd() {
    return player.startAd();
  }).catch(function(reason) {
    setTimeout(function() { throw reason; }, 0);
  });
}(window.VASTPlayerJivox));