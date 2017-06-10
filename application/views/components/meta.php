
<title><?= (!empty($settings->{$site_title_slug})) ? $settings->{$site_title_slug} : '' ?></title>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?= (!empty($settings->{$site_keywords_slug})) ? $settings->{$site_keywords_slug} : '' ?>" />
<meta name="description" content="<?= (!empty($settings->{$site_desc_slug})) ? $settings->{$site_desc_slug} : '' ?>">
<meta property="og:url" content="<?= (isset($social_url)) ? $social_url : base_url($lang_code . '/' . urldecode(substr(uri_string(), 3))) ?>"/>
<meta property="og:type" content="<?= (isset($social_type)) ? $social_type : $settings->{$site_title_slug} ?>"/>
<meta property="og:title" content="<?= (isset($social_title)) ? $social_title : $settings->{$site_title_slug} ?>" />
<meta property="og:description" content="<?= (isset($social_desc)) ? $social_desc : $settings->{$site_desc_slug} ?>"/>
<meta property="og:image" content="<?= (isset($social_image)) ? $social_image : '' ?>"/>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/css') ?>/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/css') ?>/animate.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/css') ?>/animations.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/bootstrap/css/bootstrap_en.css') ?>">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/bootstrap/css') ?>/bootstrap-select.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/bootstrap/css') ?>/bootstrap-datetimepicker.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/font-awesome/css') ?>/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/owl-carousel') ?>/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/owl-carousel') ?>/owl-carousel-theme.css">
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front/plugins/css') ?>/flexslider.css">
<link href="<?= base_url('assets/front/plugins/css') ?>/style.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/front/plugins/css') ?>/light.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/front/css') ?>/menu.css" rel="stylesheet" type="text/css"/>
<link href="<?= base_url('assets/front/css/custom_' . $lang_code . '.css') ?>" rel="stylesheet" type="text/css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?= base_url() ?>images/favicon.png" />

<script>
        var config = {
            site_url: '<?php echo site_url() . '/'; ?>',
            url: '<?php echo base_url() . '/'; ?>'
        };
        var lang = {
            login_success: '<?= _lang('login_successfully') ?>',
            title_slug: '<?= 'title_' . $lang_code ?>',
            lang_code: '<?= $lang_code ?>',
            choose: '<?= _lang('choose') ?>',
            required: '<?= _lang('this_field_is_required') ?>',
            visa_rules_ok: '<?= _lang('You_must_agree_to_the_Terms_and_Conditions') ?>',
            sending_demand: '<?= _lang('Sending_Demand') ?>',
            request_sent: '<?= _lang('request_sent') ?>',
            room_type: '<?= _lang('room_type') ?>',
            price_per_night: '<?= _lang('price_per_night') ?>',
            total_price: '<?= _lang('total_price') ?>',
            rooms: '<?= _lang('rooms') ?>',
            childs: '<?= _lang('childs') ?>',
            confirm: '<?= _lang('confirm') ?>',
            max: '<?= _lang('max') ?>',
            no_results: '<?= _lang('sorry_no_results') ?>',
            booking_confirm: '<?= _lang('booking_confirm') ?>',
            adult_age: '<?= _lang('age_must_be_greater_than_16_years') ?>',
            child_age: '<?= _lang('age_must_be_greater_than_2_years_and_less_than_10_years') ?>',
            infant_age: '<?= _lang('age_must_be_less_than_2_years') ?>',
            service_title: '<?= _lang('service_title') ?>',
            adults: '<?= _lang('adults') ?>',
            prev: '<?= _lang('prev') ?>',
            next_and_continue: '<?= _lang('next_and_continue') ?>',
            less_than_adults: '<?= _lang('number_of_individuals_must_be_less_than_or_equal_to_the_number_of_adults') ?>',
            less_than_childs: '<?= _lang('number_of_individuals_must_be_less_than_or_equal_to_the_number_of_childs') ?>',
            number: '<?= _lang('number') ?>',
            adult: '<?= _lang('adult') ?>',
            child: '<?= _lang('child') ?>',
            adult_info: '<?= _lang('adult_info') ?>',
            child_info: '<?= _lang('child_info') ?>',
            name: '<?= _lang('name') ?>',
            age: '<?= _lang('age') ?>',
            birthdate: '<?= _lang('birthdate') ?>',
            gender: '<?= _lang('gender') ?>',
            female: '<?= _lang('female') ?>',
            male: '<?= _lang('male') ?>',
            adults_info: '<?= _lang('adults_info') ?>',
            childs_info: '<?= _lang('childs_info') ?>',
            email_not_equal: '<?= _lang('email_do_not_match') ?>',
            password_not_equal: '<?= _lang('password_do_not_match') ?>',
            show_more: '<?= _lang('show_more') ?>',
            loading: '<?= _lang('loading') . '......' ?>',
            save_and_continue: '<?= _lang('save_and_continue') ?>',
            waiting: '<?= _lang('waiting') ?>',
            process_done: '<?= _lang('process_done') ?>',
            email_not_valid: '<?= _lang('email_is_not_valid') ?>',
            only_numbers: '<?= _lang('only_numbers') ?>',
            message_sent: '<?= _lang('message_sent') ?>',
            client_age_validate: '<?= _lang('age_should_not_be_less_than_16_years') ?>',
            adult_age_validate: '<?= _lang('age_should_be_greater_than_10_years') ?>',
            child_age_validate: '<?= _lang('age_should_be_greater_than_2_years_and_less_than_10_years') ?>',
            infant_age_validate: '<?= _lang('age_should_not_be_less_than_2_years') ?>',
            room_num_validate: '<?= _lang('the_number_of_adults_must_be_equal_to_the_number_of_beds_or_fewer_of_them') ?>',
            type: '<?= _lang('type') ?>',
            title: '<?= _lang('title') ?>',
            no_rooms_selected: '<?= _lang('you_did_not_selected_any_rooms') ?>',
            number_of_persons: '<?= _lang('number_of_persons') ?>',
            max_adults_validate: '<?= _lang('number_should_not_be_greater_than_adults_number') ?>',
            min_one: '<?= _lang('please_enter_a_value_greater_than_or_equal_to_1') ?>',
            from_and_to_dates_not_equal_validate: '<?= _lang('arrive_date_should_not_be_equal_to_departing_date_') ?>',
            maka: '<?= _lang('maka') ?>',
            madina: '<?= _lang('madina') ?>',
            gada: '<?= _lang('gada') ?>',
            nights_number: '<?= _lang('nights_number') ?>',
            not_available: '<?= _lang('not_available') ?>',
            the_room: '<?= _lang('the_room') ?>',
            that_you_choose_it_before: '<?= _lang('that_you_choose_it_before') ?>',
            in_this_hotel: '<?= _lang('in_this_hotel') ?>',
            infants: '<?= _lang('infants') ?>',
            message: '<?= _lang('message') ?>',
            add_transportation: '<?= _lang('add_transportation') ?>',
            edit_transportation: '<?= _lang('edit_transportation') ?>',
            add_rates_and_prices: '<?= _lang('add_rates_and_prices') ?>',
            edit_rates_and_prices: '<?= _lang('edit_rates_and_prices') ?>',
            enter_a_value_less_than_or_equal_to: '<?= _lang('enter_a_value_less_than_or_equal_to') ?>',
            adults_number_should_be_equal_to_total_of_adults_in_rooms_that_you_choosed_it: '<?= _lang('adults_number_should_be_equal_to_total_of_adults_in_rooms_that_you_choosed_it') ?>',
            childs_number_should_be_equal_to_total_of_childs_in_rooms_that_you_choosed_it: '<?= _lang('childs_number_should_be_equal_to_total_of_childs_in_rooms_that_you_choosed_it') ?>',
            total_childs_in_rooms_should_be_less_than_or_equal_to_no_of_childs: '<?= _lang('total_childs_in_rooms_should_be_less_than_or_equal_to_no_of_childs') ?>',
            childs_number_should_be_less_than_or_equal_to_childs_number_in_every_room: '<?= _lang('childs_number_should_be_less_than_or_equal_to_childs_number_in_every_room') ?>',
            you_donnot_choose_any_room: '<?= _lang('you_donnot_choose_any_room') ?>',
        };
</script>
