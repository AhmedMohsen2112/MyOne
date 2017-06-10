<div class="col-md-3 col-sm-12 col-xs-12 clear-padding pull-left">
    <div class="filter-head text-center">
        <h4><?= _lang('filter') ?></h4>
    </div>
    <div class="filter-area">
        <div class="price-filter filter">
            <h5><i class="fa fa-money"></i> السعر</h5>
            <div class="widget widget_has_radio_checkbox">
                <div id="slider-range"></div>
                <div>
                    <div style="float:left;width: 40%;text-align: left;">
                        <input type="text" id="price_start" readonly style="border:0; color:#222; font-weight:bold;text-align: left;

                               font-size: 12px;">
                    </div>
                    <div  style="float:right;width: 40%;">
                        <input type="text" id="price_end" readonly style="border:0; color:#222; font-weight:bold;font-size: 12px;">
                    </div>
                </div>
            </div>
        </div>
        <?php if ($going_from) { ?>
                <div class="location-filter filter">
                    <h5><i class="fa fa-globe"></i><?= _lang('travel_from') ?></h5>
                    <ul>
                        <?php foreach ($going_from as $one) { ?>
                            <?php $checked = (isset($going_from_id) && $going_from_id == $one->id) ? 'checked' : '' ?>
                            <li>
                                <input <?= $checked ?> type="checkbox" class="going_from" name="going_from[]" id="<?= 'going_from_' . $one->id ?>" value="<?= $one->id ?>"> <?= $one->{$title_slug} ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        <div class="star-filter filter">
            <h5><i class="fa fa-calendar"></i> النجوم</h5>
            <ul id="long">
                <?php for ($x = 1; $x <= 5; $x++) { ?>
                        <li>
                            <input type="checkbox" class="stars" name="stars[]" id="<?= 'star_' . $x ?>" value="<?= $x ?>">
                            <?php for ($y = 1; $y <= $x; $y++) { ?>
                                <i class="fa fa-star"></i>
                            <?php } ?>
                        </li>
                    <?php } ?>

            </ul>
        </div>
        <?php if ($sub_categories) { ?>
                <div class="filter">
                    <h5><i class="fa fa-pagelines"></i> الموسم</h5>
                    <ul id="long">
                        <?php foreach ($sub_categories as $one) { ?>
                            <?php $checked = (isset($sub_categories_id) && $sub_categories_id == $one->id) ? 'checked' : '' ?>
                            <li>
                                <input <?= $checked ?> type="checkbox" class="sub_categories" name="sub_categories[]" id="<?= 'sub_categories_' . $one->id ?>" value="<?= $one->id ?>"> <?= $one->{$title_slug} ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>

        <?php if ($programs_advantages) { ?>
                <div class="facilities-filter filter">
                    <h5><i class="fa fa-list"></i> مميزات</h5>
                    <ul id="long">
                        <?php foreach ($programs_advantages as $one) { ?>
                            <li>
                                <input type="checkbox" class="advantages" name="advantages[]" id="<?= 'advantages_' . $one->id ?>" value="<?= $one->id ?>"> <?= $one->{$title_slug} ?>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
    </div>
    <!--
        <div class="filter-area">


            <div class="filter">
                <div class="form-gp">
                    <label>السعر</label>
                    <select class="selectpicker">
                        <option>الكل</option>
                        <option>اقل سعر</option>
                        <option>اعلى سعر</option>

                    </select>
                </div>
            </div>


            <div class="filter">
                <div class="form-gp">
                    <label>الموسم</label>
                    <select class="selectpicker">
                        <option value="6">لا يوجد</option>
                        <option value="1">المولد النبوى</option>
                        <option value="5">اجازة نصف العام</option>
                        <option value="4">رمضان</option>
                        <option value="2">رجب</option>
                        <option value="3">شعبان</option>
                        <option value="7">عمرةشهرى  رجب وشعبان</option>

                    </select>
                </div>
            </div>

            <div class="filter">
                <div class="form-gp">
                    <label>السفر من</label>
                    <select class="selectpicker">
                        <option value="1">القاهرة</option>
                        <option value="3">الإسكندرية / برج العرب</option>

                    </select>
                </div>
            </div>
            <div class="filter">
                <div class="form-gp">
                    <label>المده</label>
                    <select class="selectpicker">
                        <option value="1">اقل من 10 ايام </option>
                        <option value="2">من 11 ل 14 يوم</option>
                        <option value="3">اكتر من 14 يوم </option>

                    </select>
                </div>
            </div>
            <div class="filter">
                <div class="form-gp">
                    <label>المستوى</label>
                    <select class="selectpicker">
                        <option value="1">اقل من 10 ايام </option>
                        <option value="2">من 11 ل 14 يوم</option>
                        <option value="3">اكتر من 14 يوم </option>

                    </select>
                </div>
            </div>


            <div class="filter">
                <div class="form-gp text-center">
                    <button type="submit" class="search-button btn transition-effect">البحث</button>
                </div>  </div>  </div>
    -->
</div>