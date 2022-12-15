<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ad PoC</title>
        <script>
            <?php include('./fetch.php'); ?>
        </script>
        <script src="./script.js" defer></script>
        <link rel="stylesheet" href="./styles.css" />
        <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
        <script src="https://cdn.jsdelivr.net/npm/vast-player@latest/dist/vast-player.min.js"></script>
    </head>
    <body>
        <main>
            <h1>Page title</h1>
            <h2>Section title</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam
                quibusdam delectus amet aperiam nemo magni error officia dolore?
                Deserunt fugit eligendi dolorem, commodi quasi qui blanditiis
                quae adipisci quod. Placeat.
            </p>
            <label>Image banner</label>
            <div id="div1Container" class="adContainer api kevel"></div>
            <ul>
              <li>Fetching AD details via API</li>
              <li>Using tag provided in API response</li>
              <li>Tracking as provided by tag</li>
              <li>Can be fully customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur iure quam fugit ad molestias ipsam, praesentium quis
                consequatur nulla! Qui reiciendis tenetur impedit modi sapiente
                eum delectus aperiam ratione nemo.
            </p>
            <label>Video banner m3u8</label>
            <div id="div2Container" class="adContainer api kevel video"></div>
            <ul>
              <li>Fetching AD details via API</li>
              <li>Loading m3u8 playslist URL in basic HTML5 video player</li>
              <li>Tracking and click need to be added manually</li>
              <li>Can be fully customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt quis sed fugit nostrum minus iusto atque voluptatibus
                neque totam molestiae aspernatur, esse necessitatibus, voluptas,
                minima tenetur voluptatem. Dolorum, optio neque?
            </p>
            <label>Video banner VAST tag</label>
            <div id="div2bContainer" class="adContainer api kevel video"></div>
            <ul>
              <li>Fetching AD details via API</li>
              <li>Loading VAST tag in VAST enabled player</li>
              <li>Not working by default, requires to change VAST tag template to make it compliant</li>
              <li>Can be fully customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt quis sed fugit nostrum minus iusto atque voluptatibus
                neque totam molestiae aspernatur, esse necessitatibus, voluptas,
                minima tenetur voluptatem. Dolorum, optio neque?
            </p>
            <label>Image banner (creative level)</label>
            <div id="div3Container" class="adContainer pixel kevel">
                <script
                    type="text/javascript"
                    src="https://static.adzerk.net/ados.js"
                ></script>
                <script type="text/javascript">
                    var ados = ados || {};
                    ados.run = ados.run || [];
                    ados.run.push(function() {
                        /* load placement for account: procterandgamble-dev,
                          site: Web,
                          ad: Coupon,
                          size: 300x250 - Medium Rectangle */
                        ados_addInlinePlacement(11172, 1196902, 5)
                            .setFlightCreativeId(296553503)
                            .loadInline();
                  });
                </script>
            </div>
            <ul>
              <li>Using creative level embed code (JS snippet)</li>
              <li>Doesn't leverage Decision API</li>
              <li>Cannot be customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt quis sed fugit nostrum minus iusto atque voluptatibus
                neque totam molestiae aspernatur, esse necessitatibus, voluptas,
                minima tenetur voluptatem. Dolorum, optio neque?
            </p>
            <label>Image banner (flight level)</label>
            <div id="div3bContainer" class="adContainer pixel kevel">
                <script
                    type="text/javascript"
                    src="https://static.adzerk.net/ados.js"
                ></script>
                <script type="text/javascript">
                    var ados = ados || {};
                    ados.run = ados.run || [];
                    ados.run.push(function() {
                        /* load placement for account: procterandgamble-dev,
                          site: Web,
                          flight: Banner campaign,
                          size: 300x250 - Medium Rectangle */
                        ados_addInlinePlacement(11172, 1196902, 5)
                            .setFlightId(287617275)
                            .loadInline();
                  });
                </script>
            </div>
            <ul>
              <li>Using flight level embed code (JS snippet)</li>
              <li>Does leverage Decision API at flight level (choosing across creatives within given flight)</li>
              <li>Cannot be customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt quis sed fugit nostrum minus iusto atque voluptatibus
                neque totam molestiae aspernatur, esse necessitatibus, voluptas,
                minima tenetur voluptatem. Dolorum, optio neque?
            </p>
            <label>Any banner (campaign level)</label>
            <div id="div3cContainer" class="adContainer pixel kevel">
                <script
                    type="text/javascript"
                    src="https://static.adzerk.net/ados.js">
                </script>
                <script type="text/javascript">
                    var ados = ados || {};
                    ados.run = ados.run || [];
                    ados.run.push(function() {
                        /* load placement for account: procterandgamble-dev,
                          site: Web,
                          campaign: Test Website Campaign,
                          size: 300x250 - Medium Rectangle */
                        ados_addInlinePlacement(11172, 1196902, 5)
                            .setCampaignId(96052161)
                            .loadInline();
                  });
                </script>
            </div>
            <ul>
              <li>Using campaign level embed code (JS snippet)</li>
              <li>Does leverage Decision API at campaign level (choosing across all creatives within given campaign)</li>
              <li>Cannot be customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nostrum blanditiis at quasi voluptatem quibusdam voluptas odio
                repellat aut. Nihil voluptatibus dolorem culpa, incidunt commodi
                reprehenderit maxime nobis quos asperiores harum.
            </p>
            <label>Video banner Embedded player</label>
            <div id="div4Container" class="adContainer pixel kevel">
                <script
                    type="text/javascript"
                    src="https://static.adzerk.net/ados.js"
                ></script>
                <script type="text/javascript">
                    var ados = ados || {};
                    ados.run = ados.run || [];
                    ados.run.push(function () {
                        /* load placement for account: procterandgamble-dev,
                          site: Web,
                          ad: Ninjamas Pyjama Pants,
                          size: 300x250 - Medium Rectangle */
                        ados_addInlinePlacement(11172, 1196902, 163)
                            .setFlightCreativeId(296557230)
                            .loadInline();
                    });
                </script>
            </div>
            <ul>
              <li>Using creative level embed code (JS snippet)</li>
              <li>Doesn't leverage Decision API</li>
              <li>Cannot be customized</li>
              <li>Using customized VAST tag template to make the tag compliant and embed the video player's code</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Eligendi aut corporis natus, tempore iure hic, expedita amet est
                quisquam ipsum ab libero obcaecati quasi optio in sint iusto
                aperiam! Porro.
            </p>
            <label>Image banner</label>
            <div id="div5Container" class="adContainer pixel jivox">
                <script
                    type="text/javascript"
                    src="https://as.jivox.com/unit/unit_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3635654187d580&campaignId=168224&es_pId=I5Wh05&isDynamic=1&ap_DataSignal1=${TAG_VARIABLE}&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_294}&jvxVer=2&dspId=-"
                ></script>
            </div>
            <ul>
              <li>Using embed code (JS snippet)</li>
              <li>Cannot be customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                doloribus culpa ut libero? Praesentium veritatis cumque dolores
                illum similique, quae, ducimus mollitia iste iure laboriosam
                nesciunt ab libero nobis facere!
            </p>
            <label>Video banner with VAST URL</label>
            <div id="div6Container" class="adContainer pixel jivox"></div>
            <ul>
              <li>Loading VAST tag URL (XML) in VAST enabled player</li>
              <li>Cannot be customized</li>
            </ul>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae
                eveniet itaque quas culpa libero dolorem et nostrum reiciendis
                earum magnam? Tenetur cum eum illum deserunt a, architecto
                dolore illo similique.
            </p>
        </main>
    </body>
</html>