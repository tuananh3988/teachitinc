<div class="wrap-grid-content">
    <div class="grid-1">
        <div class="row">
            <div class="wrap-content wrap-content-1">
                <div class="content">
                    <div class="overlay">
                        <p class="play">
                            <a class="play-video">play video</a>
                        </p>
                        <p class="source">
                            <a href="<?= theme_get_setting("media-value-1"); ?>" target="_blank" title="Teachitinc on YouTube">
                                <image src="<?= drupal_get_path('module', 'teachit_config'); ?>/images/youtube-light.png" />
                            </a>
                        </p>
                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-1"); ?>" target="_blank"><?= theme_get_setting("title-1"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-1"); ?>" target="_blank"><?= theme_get_setting("desciption-1"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-1")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-1") . ')'; ?>"></div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-content wrap-content-2">
                <div class="content">
                    <div class="overlay">

                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-2"); ?>" target="_blank"><?= theme_get_setting("title-2"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-2"); ?>" target="_blank"><?= theme_get_setting("desciption-2"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-2")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-2") . ')'; ?>"></div>

                    </div>
                </div>
            </div>
            <div class="wrap-content wrap-content-3">
                <div class="content">
                    <div class="overlay">

                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-3"); ?>" target="_blank"><?= theme_get_setting("title-3"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-3"); ?>" target="_blank"><?= theme_get_setting("desciption-3"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-3")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-3") . ')'; ?>"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid-2">
        <div class="row">
            <div class="wrap-content wrap-content-4">
                <div class="content">
                    <div class="overlay">

                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-4"); ?>" target="_blank"><?= theme_get_setting("title-4"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-4"); ?>" target="_blank"><?= theme_get_setting("desciption-4"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-4")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-4") . ')'; ?>"></div>

                    </div>
                </div>
            </div>
            <div class="wrap-content wrap-content-5">
                <div class="content">
                    <div class="overlay">

                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-5"); ?>" target="_blank"><?= theme_get_setting("title-5"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-5"); ?>" target="_blank"><?= theme_get_setting("desciption-5"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-5")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-5") . ')'; ?>"></div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="wrap-content wrap-content-6">
                <div class="content">
                    <div class="overlay">

                        <div class="copy">
                            <h3 class="title">
                                <a href="<?= theme_get_setting("link-6"); ?>" target="_blank"><?= theme_get_setting("title-6"); ?></a>
                            </h3>
                            <p class="cta">
                                <a href="<?= theme_get_setting("link-6"); ?>" target="_blank"><?= theme_get_setting("desciption-6"); ?></a>
                            </p>
                        </div>
                    </div>
                    <div class="bg">
                        <div class="bg-img" style="<?= (theme_get_setting("media-thumbnail-6")) == '' ? '' : 'background-image: url(' . theme_get_setting("media-thumbnail-6") . ')'; ?>"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(document).ready(function () {
        var w = jQuery('.wrap-content-1').innerWidth();
        jQuery('.wrap-content-1').innerHeight(w / 2);
        jQuery('.wrap-content-2').innerHeight(w / 4);
        jQuery('.wrap-content-3').innerHeight(w / 4);
        jQuery('.wrap-content-4').innerHeight(w / 4);
        jQuery('.wrap-content-5').innerHeight(w / 4);
        jQuery('.wrap-content-6').innerHeight(w / 2);
        jQuery('body').append('<div id="screen" class="pop-out"></div>');
        jQuery('.play-video').on('click', function(ev) {
            jQuery('#screen').show();
            var parent = jQuery(this).parents('.wrap-content-1');
            var iframe = '<iframe class="video-wrapper" id="z4UDNzXD3qA" frameborder="0" allowfullscreen="1" title="YouTube video player" width="640" height="390" src="<?= theme_get_setting("media-value-1"); ?>?autoplay=1&amp;autohide=2&amp;modestbranding=1&amp;controls=1&amp;rel=0&amp;showinfo=0&amp;enablejsapi=1&amp;origin=http%3A%2F%2Fwww.sony.com" __idm_id__="40962"></iframe>';
            parent.find(".bg").append(iframe);
            jQuery('.video-wrapper').addClass('active');
            ev.preventDefault();

        });
        
        jQuery('#screen').on('click', function(ev) {
            jQuery(this).hide();
            jQuery('.video-wrapper').remove();
        });
    });
</script>