
<div class="panel panel-default" id="editSettings">
    <div class="panel-heading">
        <h3 class="panel-title"><?= _lang('settings'); ?></h3>
    </div>
    <div class="panel-body">
        <form role="form"  id="editSettingsForm"  enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $settings->id ?>">
            <div class="form-body">
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_title_ar" name="site_title_ar" value="<?php if (isset($settings->site_title_ar)) echo $settings->site_title_ar; ?>">
                    <label for="site_title_ar"><?= _lang('site_title_ar') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_title_en" name="site_title_en" value="<?php if (isset($settings->site_title_en)) echo $settings->site_title_en; ?>">
                    <label for="site_title_en"><?= _lang('site_title_en') ?></label>
                    <span class="help-block"></span>
                </div>

                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_address_ar" name="site_address_ar" value="<?php if (isset($settings->site_address_ar)) echo $settings->site_address_ar; ?>">
                    <label for="site_address_ar"><?= _lang('site_address_ar') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_address_en" name="site_address_en" value="<?php if (isset($settings->site_address_en)) echo $settings->site_address_en; ?>">
                    <label for="site_address_en"><?= _lang('site_address_en') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <textarea rows="5" class="form-control" name="site_desc_ar" id="site_desc_ar"><?php if (isset($settings->site_desc_ar)) echo $settings->site_desc_ar; ?></textarea>
                    <label for="site_desc_ar"><?= _lang('site_desc_ar') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <textarea rows="5" class="form-control" name="site_desc_en" id="site_desc_en"><?php if (isset($settings->site_desc_en)) echo $settings->site_desc_en; ?></textarea>
                    <label for="site_desc_en"><?= _lang('site_desc_en') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <textarea rows="5" class="form-control" name="site_keywords_ar" id="site_keywords_ar"><?php if (isset($settings->site_keywords_ar)) echo $settings->site_keywords_ar; ?></textarea>
                    <label for="site_keywords_ar"><?= _lang('site_keywords_ar') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <textarea rows="5" class="form-control" name="site_keywords_en" id="site_keywords_en"><?php if (isset($settings->site_keywords_en)) echo $settings->site_keywords_en; ?></textarea>
                    <label for="site_keywords_en"><?= _lang('site_keywords_en') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="number" class="form-control" id="site_phone" name="site_phone" value="<?php if (isset($settings->site_phone)) echo $settings->site_phone; ?>">
                    <label for="site_phone"><?= _lang('site_phone') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_email" name="site_email" value="<?php if (isset($settings->site_email)) echo $settings->site_email; ?>">
                    <label for="site_email"><?= _lang('email') ?></label>
                    <span class="help-block"></span>
                </div>
              
              
                <div class="clearfix"></div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_facebook" name="site_contacts[facebook]" value="<?php if (isset($settings->site_contacts->facebook)) echo $settings->site_contacts->facebook; ?>">
                    <label for="site_contacts_facebook"><?= _lang('facebook') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_twitter" name="site_contacts[twitter]" value="<?php if (isset($settings->site_contacts->twitter)) echo $settings->site_contacts->twitter; ?>">
                    <label for="site_contacts_twitter"><?= _lang('twitter') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_instagram" name="site_contacts[instagram]" value="<?php if (isset($settings->site_contacts->instagram)) echo $settings->site_contacts->instagram; ?>">
                    <label for="site_contacts_instagram"><?= _lang('instagram') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_google" name="site_contacts[google]" value="<?php if (isset($settings->site_contacts->google)) echo $settings->site_contacts->google; ?>">
                    <label for="site_contacts_google"><?= _lang('google') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_linkedin" name="site_contacts[linkedin]" value="<?php if (isset($settings->site_contacts->linkedin)) echo $settings->site_contacts->linkedin; ?>">
                    <label for="site_contacts_linkedin"><?= _lang('linkedin') ?></label>
                    <span class="help-block"></span>
                </div>
                <div class="form-group form-md-line-input col-md-6">
                    <input type="text" class="form-control" id="site_contacts_youtube" name="site_contacts[youtube]" value="<?php if (isset($settings->site_contacts->youtube)) echo $settings->site_contacts->youtube; ?>">
                    <label for="site_contacts_youtube"><?= _lang('youtube') ?></label>
                    <span class="help-block"></span>
                </div>



            </div>


        </form>

        <!--Table Wrapper Finish-->
    </div>
    <div class="panel-footer text-center">
        <button type="button" class="btn btn-info submit-form"
                ><?= _lang('save') ?></button>
    </div>
</div>
<script>
        var new_lang = {
            messages: {
                title_ar: {
                    required: lang.required

                },
                site_title_ar: {
                    required: lang.required

                },
                site_title_en: {
                    required: lang.required

                },
                site_phone: {
                    required: lang.required

                },
                site_email: {
                    required: lang.required

                },
                site_address_ar: {
                    required: lang.required

                },
                site_address_en: {
                    required: lang.required

                },
                site_desc_ar: {
                    required: lang.required

                },
                site_desc_en: {
                    required: lang.required

                },
                site_keywords_ar: {
                    required: lang.required

                },
                site_keywords_en: {
                    required: lang.required

                },
            }
        };
</script>


<?php
    global $_require;
    $_require['js'] = array('settings.js');
?>