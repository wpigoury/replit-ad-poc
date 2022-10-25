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
            <div id="div1Container" class="adContainer api kevel"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Aspernatur iure quam fugit ad molestias ipsam, praesentium quis
                consequatur nulla! Qui reiciendis tenetur impedit modi sapiente
                eum delectus aperiam ratione nemo.
            </p>
            <div id="div2Container" class="adContainer api kevel"></div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nesciunt quis sed fugit nostrum minus iusto atque voluptatibus
                neque totam molestiae aspernatur, esse necessitatibus, voluptas,
                minima tenetur voluptatem. Dolorum, optio neque?
            </p>
            <div id="div3Container" class="adContainer pixel kevel">
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
                          ad: Coupon,
                          size: 300x250 - Medium Rectangle */
                        ados_addInlinePlacement(11172, 1196902, 5)
                            .setFlightCreativeId(296553503)
                            .loadInline();
                    });
                </script>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Nostrum blanditiis at quasi voluptatem quibusdam voluptas odio
                repellat aut. Nihil voluptatibus dolorem culpa, incidunt commodi
                reprehenderit maxime nobis quos asperiores harum.
            </p>
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
                        ados_addInlinePlacement(11172, 1196902, 5)
                            .setFlightCreativeId(296557230)
                            .loadInline();
                    });
                </script>
            </div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Eligendi aut corporis natus, tempore iure hic, expedita amet est
                quisquam ipsum ab libero obcaecati quasi optio in sint iusto
                aperiam! Porro.
            </p>
            <div id="div5Container" class="adContainer pixel jivox">
                <script
                    type="text/javascript"
                    src="https://as.jivox.com/unit/unit_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3635654187d580&campaignId=168224&es_pId=I5Wh05&isDynamic=1&ap_DataSignal1=${TAG_VARIABLE}&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_294}&jvxVer=2&dspId=-"
                ></script>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                doloribus culpa ut libero? Praesentium veritatis cumque dolores
                illum similique, quae, ducimus mollitia iste iure laboriosam
                nesciunt ab libero nobis facere!
            </p>
            <div id="div6Container" class="adContainer pixel jivox">
                <script
                    type="text/javascript"
                    src="https://as.jivox.com/unit/unit_renderer.php?creativeUnitType=20&bDim=300x250&bUnitId=2000&siteId=3635654187d580&campaignId=168224&es_pId=nra8zH&isDynamic=1&ap_DataSignal1=${TAG_VARIABLE}&gdpr=${GDPR}&gdpr_consent=${GDPR_CONSENT_294}&jvxVer=2&dspId=-"
                ></script>
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Beatae
                eveniet itaque quas culpa libero dolorem et nostrum reiciendis
                earum magnam? Tenetur cum eum illum deserunt a, architecto
                dolore illo similique.
            </p>
        </main>
    </body>
</html>