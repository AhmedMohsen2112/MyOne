
<!-- BEGIN: PRELOADER -->
<div id="loader" class="load-full-screen">
    <div class="loading-animation">
        <span>
            <i class="fa kkk">
                <!--<img src="<?= base_url() ?>/images/37018-200w.png" alt="">-->
            </i>
        </span>
        <span><i class="fa fa-plane"></i></span>
        <span><i class="fa fa-bed"></i></span>
        <span><i class="fa fa-ship"></i></span>
        <span><i class="fa fa-suitcase"></i></span>
    </div>
</div>
<!-- END: PRELOADER -->

<!-- BEGIN: COLOR SWITCHER -->

<span id="stoggle" class="pulse hidden-xs">
    <a href="<?= site_url('plan_your_trip') ?>"><img src="<?= base_url() ?>/images/sammem.png"></a>

</span>
<!-- END: COLOR SWITCHER -->

<!-- BEGIN: SITE-WRAPPER -->
<div class="site-wrapper">
    <div class="row transparent-menu-top">
        <div class="pattern">
            <div class="container clear-padding">
                <div class="navbar-contact">
                    <div class="col-md-7 col-sm-12 col-xs-12 clear-padding pull-left">
                        <a href="#" class="transition-effect"><i class="fa fa-phone"></i><?= (!empty($settings->site_phone)) ? $settings->site_phone : '' ?></a>
                        <a href="#" class="transition-effect"><i class="fa fa-envelope-o"></i><?= (!empty($settings->site_email)) ? $settings->site_email : '' ?></a>
<!--                        <a href="?page=logorreg" class="transition-effect"><i class="fa fa-user"></i> تسجيل الدخول</a>-->

                    </div>
                    <div class="col-md-5 col-sm-12 col-xs-12 clear-padding search-box pull-right">

                        <div class="col-md-12 col-xs-12 clear-padding user-logged">
                            <div class="social-media pull-right">
                                <ul>
                                    <li><a target="_blank" href="<?= (!empty($settings->site_contacts->facebook)) ? $settings->site_contacts->facebook : '' ?>"><i class="fa fa-facebook"></i></a></li>
                                    <li><a target="_blank" href="<?= (!empty($settings->site_contacts->twitter)) ? $settings->site_contacts->twitter : '' ?>"><i class="fa fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?= (!empty($settings->site_contacts->instagram)) ? $settings->site_contacts->instagram : '' ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="<?= (!empty($settings->site_contacts->google)) ? $settings->site_contacts->google : '' ?>"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a target="_blank" href="<?= (!empty($settings->site_contacts->youtube)) ? $settings->site_contacts->youtube : '' ?>"><i class="fa fa-youtube"></i></a></li>
<!--                                    <li><a href=""><i class="fa"><img src="<?= base_url() ?>/images/en.png" alt="arabic"></i></a></li>-->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="row transparent-menu">
        <div class="container clear-padding">
            <!-- BEGIN: HEADER -->
            <div class="navbar-wrapper">
                <div class="navbar navbar-default" role="navigation">
                    <!-- BEGIN: NAV-CONTAINER -->
                    <div class="nav-container">
                        <!-- BEGIN: TOGGLE BUTTON (RESPONSIVE)-->
                        <!--
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                                    <span class="sr-only">القائمة</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                        -->

                        <div class="navbar-header col-md-3 col-sm-12 col-xs-12">
                            <!-- BEGIN: LOGO -->
                            <a class="navbar-brand logo" href="<?= site_url() ?>"> <img src="<?= base_url() ?>/images/logo.png" alt="#" class="img-responsive"></a>
                        </div>

                        <div class="nav navbar-nav navbar-right col-md-9 col-sm-12 col-xs-12">
                            <ul class="slimmenu" id="slimmenu">
                                <li class="active"><a href="<?= site_url() ?>"><?= _lang('home') ?></a></li>
                                <li><a href="<?= site_url('about_us') ?>"><?= _lang('about_us') ?></a></li>

                                <li><a href="javascript:;"> البرامج </a>
                                    <ul>
                                        <?php if (!empty($program_categories)) { ?>
                                                <?php foreach ($program_categories as $category) { ?>
                                                    <?php $category_in_url = \str_replace(' ', '-', $category->{$title_slug}) ?>
                                                    <li><a href="<?= site_url('programs/' . $category_in_url . '-' . $category->id); ?>"><?= $category->{$title_slug} ?></a>
                                                        <ul>
                                                            <?php if (!empty($category->sub)) { ?>
                                                                <?php foreach ($category->sub as $sub) { ?>
                                                                    <?php $sub_in_url = \str_replace(' ', '-', $sub->{$title_slug}) ?>
                                                                    <li><a href="<?= site_url('programs/' . $sub_in_url . '-' . $sub->id); ?>"><?= $sub->{$title_slug} ?></a>
                                                                    <?php } ?>
                                                                <?php } ?>
                                                            </li>
                                                        </ul>

                                                    </li>
                                                <?php } ?>
                                            <?php } ?>
                                    </ul>

                                </li>


                                <li><a href="javascript:;">الفنادق </a>
                                    <ul>
                                        <?php if (!empty($cities_contain_hotels)) { ?>
                                                <?php foreach ($cities_contain_hotels as $city) { ?>
                                                    <?php $city_title_url = str_replace(' ', '-', trim($city->{$title_slug})) ?>
                                                    <li><a href="<?= \site_url('hotels/' . $city_title_url . '-' . $city->id) ?>"><?= $city->{$title_slug} ?></a>
                                                    </li>

                                                <?php } ?>
                                            <?php } ?>


                                    </ul>
                                </li>



                                <li><a href="javascript:;"> المناسك </a>
                                    <ul>
                                        <li><a href="<?= site_url('omrah_duty') ?>">مناسك العمرة</a></li>
                                        <li><a href="<?= site_url('pilgrimage') ?>">مناسك الحج</a></li>
                                    </ul>
                                </li>


                                <li><a href="javascript:;"> <?= _lang('sightseeing') ?> </a>
                                    <ul>
                                        <?php if ($sightseeing_cities) { ?>
                                                <?php foreach ($sightseeing_cities as $city) { ?>
                                                    <?php $city_title_url = str_replace(' ', '-', trim($city->{$title_slug})) ?>

                                                    <li><a href="<?= \site_url('sightseeing/' . $city_title_url . '-' . $city->id) ?>"><?= $city->{$title_slug} ?></a></li>
                                                <?php } ?>
                                            <?php } ?>
                                    </ul>
                                </li>


                                <li><a href="<?= site_url('plan_your_trip') ?>"><?= _lang('plan_your_trip') ?></a></li>


                                <li><a href="javascript:;"> المركز الاعلامي  </a>
                                    <ul>
                                        <li><a href="<?= site_url('photo_gallery') ?>">صور</a></li>
                                        <li><a href="<?= site_url('video_gallery') ?>">فيديو</a></li>

                                    </ul>
                                </li>



                                <li><a href="<?= site_url('contact_us') ?>">خدمة العملاء</a></li>


                            </ul>
                        </div>


                        <!-- BEGIN: NAVIGATION -->

                        <!-- END: NAVIGATION -->
                    </div>
                    <!--END: NAV-CONTAINER -->
                </div>
            </div>
            <!-- END: HEADER -->
        </div>
    </div>
