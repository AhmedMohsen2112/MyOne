<style>
    .alert_custom {
        z-index: 1050;
        top: 0px;
        right: 0px;
        width: 100%;
        /*background: #c04848;*/
        background: #00a2ff;
        border: medium none;
        border-radius: 0 !important;
        color: #fff;
        font-size: 18px;
        line-height: 28px;
        padding: 20px 10px !important;
        text-align: center;
        display: none;
        position: fixed;
    }
</style>
<div class="alert_custom">
    <!--    <button type="button" class="close" data-dismiss="alert" style="float:right;">✖</button>-->
    <strong style="font-size:24px;" id="alert_message"></strong>
</div>
<!-- START: FOOTER -->
<section id="footer">
    <footer>
        <div class="row main-footer-sub">
            <div class="pattern3">
                <div class="container clear-padding">
                    <div class="col-md-7 col-sm-7 pull-left">

                        <form method="post" id="subscribeForm">
                            <label>اشترك في نشرتنا الإخبارية
                            </label>
                            <div class="clearfix"></div>

                            <div class="form-group col-md-9 col-sm-8 col-xs-6 clear-padding pull-left">
                                <input type="text" class="form-control" name="email" id="email" placeholder="<?= _lang('email') ?>">
                                <div class="help-block"></div>
                            </div>
                            <div class="col-md-3 col-sm-4 col-xs-6 clear-padding pull-left">
                                <button type="button" class="submit-form"><i class="fa fa-paper-plane"></i>اشترك</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-5 col-sm-5 pull-left">
                        <div class="social-media pull-right">
                            <ul>
                                <li><a target="_blank" href="<?= (!empty($settings->site_contacts->facebook)) ? $settings->site_contacts->facebook : '' ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a target="_blank" href="<?= (!empty($settings->site_contacts->twitter)) ? $settings->site_contacts->twitter : '' ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a  target="_blank" href="<?= (!empty($settings->site_contacts->instagram)) ? $settings->site_contacts->instagram : '' ?>"><i class="fa fa-instagram"></i></a></li>
                                <li><a target="_blank" href="<?= (!empty($settings->site_contacts->google)) ? $settings->site_contacts->google : '' ?>"><i class="fa fa-google-plus"></i></a></li>
                                <li><a target="_blank" href="<?= (!empty($settings->site_contacts->youtube)) ? $settings->site_contacts->youtube : '' ?>"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div></div>
        <div class="main-footer row pattern2">
            <div class="container clear-padding">
                <div class="col-md-3 col-sm-6 about-box pull-left">
                    <h3><?= (!empty($settings->{$site_title_slug})) ? $settings->{$site_title_slug} : '' ?></h3>
                    <p><?= (!empty($settings->{$site_desc_slug})) ? $settings->{$site_desc_slug} : '' ?></p>
                    <a href="<?= site_url('about_us') ?>"><?= _lang('more') ?></a>
                </div>
                <div class="col-md-3 col-sm-6 links pull-left">
                    <h4>روابط هامة</h4>
                    <ul>
                        <li><a href="<?= site_url('about_us') ?>">من نحن</a></li>
                        <?php if (!empty($program_categories)) { ?>
                                <?php foreach ($program_categories as $category) { ?>
                                    <?php $category_in_url = \str_replace(' ', '-', $category->title_ar) ?>
                                    <li>
                                        <a href="<?= site_url('programs/' . $category_in_url . '-' . $category->id); ?>" > <?= $category->title_ar ?></a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        <li><a href="<?= site_url('sightseeing') ?>">المزارات</a></li>

                        <li><a href="<?= site_url('plan_your_trip') ?>"> صمم عمرتك</a></li>

                        <li><a href="<?= site_url('contact_us') ?>">تحتاج الى مساعدة</a></li>
                    </ul>
                </div>
                <div class="clearfix visible-sm-block"></div>
                <div class="col-md-3 col-sm-6 links pull-left">
                    <h4>خدمتنا</h4>
                    <ul>

                        <li><a href="#"> برامج العمرة</a></li>
                        <li><a href="#">برامج الحج</a></li>

                        <li><a href="#">فنادق مكة</a></li>
                        <li><a href="#">فنادق المدينة</a></li>


                        <li><a href="#">المناسك</a></li>
                        <li><a href="#">المزارات</a></li>

                    </ul>

                </div>
                <div class="col-md-3 col-sm-6 contact-box pull-left">
                    <h4>تواصل معنا</h4>
                    <p><i class="fa fa-home"></i> <?= (!empty($settings->{$site_address_slug})) ? $settings->{$site_address_slug} : '' ?>
                    </p>
                    <p><i class="fa fa-phone"></i><?= (!empty($settings->site_phone)) ? $settings->site_phone : '' ?></p>
                    <p><i class="fa fa-envelope-o"></i><?= (!empty($settings->site_email)) ? $settings->site_email : '' ?></p>
                    <p>موقع لبيك برعاية ناشيونال إيجيبت للسياحة</p>
                </div>

            </div>
        </div>
        <div class="main-footer-nav row">
            <div class="container clear-padding">
                <div class="col-md-12 col-sm-12 pull-left">
                    <p>All Rights Reserved © National Egypt Co. 2017 | <a target="_blank" href="http://www.mv-is.com/">Powered By MASTER VISION Integrated Solutions </a></p>
                </div>

                <div class="go-up">
                    <a href="#"><i class="fa fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </footer>
</section>
<!-- END: FOOTER -->
</div>
<!-- END: SITE-WRAPPER -->
<!-- Load Scripts -->

<!-- jQuery -->
<script src="<?= base_url('assets/front/plugins/js') ?>/respond.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js/jquery-2.1.4.min.js') ?>"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js/jquery.validate.min.js') ?>"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js/additional-methods.min.js') ?>"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery-confirm.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery.slicknav.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery.history.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery.magnific-popup.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/js') ?>/owl.carousel.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/js') ?>/moment-with-locales.js" type="text/javascript"></script>
<!-- jquery ui js -->
<script src="<?= base_url('assets/front/plugins/jquery/js') ?>/jquery-ui.min.js"></script>
<!-- bootstrap js -->
<script type="text/javascript" src="<?= base_url('assets/front/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/front/plugins/bootstrap/js/bootbox.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/front/plugins/bootstrap/js/bootstrap-select.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/front/plugins/bootstrap/js/bootstrap-datetimepicker.js') ?>"></script>
<!-- plugins js -->



<script src="<?= base_url('assets/front/plugins/js') ?>/wow.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/js') ?>/supersized.3.1.3.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/js') ?>/slimmenu.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/plugins/js') ?>/js.js" type="text/javascript"></script>
<!-- custom -->
<script src="<?= base_url('assets/front/js') ?>/app.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/js') ?>/pjax.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/js') ?>/login.js" type="text/javascript"></script>
<script src="<?= base_url('assets/front/js') ?>/home.js" type="text/javascript"></script>
<!--<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCiwikJ8nj8EhI2fHMpVrfS44_aD5BnCJk"></script>-->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCkDsKYCerlxL5C7pRqZZ65-A3BwlJoebY"></script>
<!--  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>-->
<script type="text/javascript" src="<?= base_url('assets/front/plugins/js') ?>/gmaps.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-97831940-1', 'auto');
  ga('send', 'pageview');

</script>


<script>
        jQuery(document).ready(function ($) {
            "use strict";
            $('.image-set').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {enabled: true}
            });
        });
</script>
<script>
        $(window).load(function () {
            "use strict";
            // The slider being synced must be initialized first
            $('#carousel').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                itemWidth: 150,
                itemMargin: 5,
                asNavFor: '#slider'
            });

            $('#slider').flexslider({
                animation: "slide",
                controlNav: false,
                animationLoop: false,
                slideshow: false,
                sync: "#carousel"
            });
        });
</script>

<script type="text/javascript">
        $(function () {
            $('#datetimepicker1,#datetimepicker2,#datetimepicker3').datetimepicker
                    ({
                        //locale: 'AR',
                        format: 'YYYY/MM/DD'
                    });

        });


</script>

<script type="text/javascript">
        $(document).ready(function () {
            /* Get iframe src attribute value i.e. YouTube video url
             and store it in a variable */
            var url = $("#cartoonVideo").attr('src');

            /* Assign empty url value to the iframe src attribute when
             modal hide, which stop the video playing */
            $("#myModal").on('hide.bs.modal', function () {
                $("#cartoonVideo").attr('src', '');
            });

            /* Assign the initially stored url back to the iframe src
             attribute when modal is displayed again */
            $("#myModal").on('show.bs.modal', function () {
                $("#cartoonVideo").attr('src', url);
            });
        });
</script>



<?php
    global $_require;
    if (!empty($_require)) {
        foreach ($_require as $key => $value) {
            $path = 'assets/front/' . $key;
            foreach ($value as $file) {
                echo '<script src="' . base_url($path . '/' . $file) . '"></script>';
            }
        }
    }
?>
