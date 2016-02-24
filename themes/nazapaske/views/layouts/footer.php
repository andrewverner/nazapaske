<footer>
    <div class="light-brown">
        <div class="container">
            <div class="row">
                <?php foreach (ContentBlock::getBlocksList('footer1') as $block) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="block">
                            <div class="block block-head yellow"><?php echo $block->title; ?></div>
                            <div class="block block-content">
                                <?php echo $block->text; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="dark-brown">
        <div class="container">
            <div class="row">
                <?php foreach (ContentBlock::getBlocksList('footer2') as $block) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
                        <div class="block">
                            <div class="block block-head yellow"><?php echo $block->title; ?></div>
                            <div class="block block-content">
                                <?php echo $block->text; ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <div class="light-brown">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="block">
                        <div class="block block-content">
                            <span class="small">Copyright © 2014 <a class="yellow" href="/">NaZapaske.ru</a>. Все права защищены</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter26167056 = new Ya.Metrika({id:26167056,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/26167056" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->