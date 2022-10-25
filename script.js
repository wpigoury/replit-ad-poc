const position1 = document.querySelector("#div1Container");
const adBody1 = kevelAds.decisions.div1.contents[0].body;
const div1 = document.createElement("div");
div1.classList = "div1 kevelAds";
div1.innerHTML = adBody1;
position1.appendChild(div1);

const position2 = document.querySelector("#div2Container");
const adBody2 = kevelVideoAds.decisions.div2.contents[0].body;
const vidHeight = kevelVideoAds.decisions.div2.contents[0].data.height;
const vidWidth = kevelVideoAds.decisions.div2.contents[0].data.width;
let adm3u8 = kevelVideoAds.decisions.div2.contents[0].data.ctContentPlaybackId;
if (adm3u8.indexOf("https://") === -1)
  adm3u8 = "https://stream.video-assets.kevel.com/"+adm3u8+".m3u8";
const video = document.createElement("video");
video.id = "video";
video.height = vidHeight;
video.width = vidWidth;
video.muted = true;
const div2 = document.createElement("div");
div2.classList = "div2 kevelAds";
div2.appendChild(video);
//div2.innerHTML = adBody2;
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