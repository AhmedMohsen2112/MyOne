
<div class="modal fade" id="addEditHomeSlider" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title" id="addEditHomeSliderLabel"></h4>
            </div>

            <div class="modal-body">


                <form role="form"  id="addEditHomeSliderForm"  enctype="multipart/form-data">
                    <input type="hidden" name="id" id="id" value="0">
                    <div class="form-body">
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="text" class="form-control" id="first_title_ar" name="first_title_ar" placeholder="<?= _lang('first_title_ar') ?>">
                            <label class="control-label" for="first_title_ar"><?= _lang('first_title_ar') ?></label>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="text" class="form-control" id="first_title_en" name="first_title_en" placeholder="<?= _lang('first_title_en') ?>">
                            <label class="control-label" for="first_title_en"><?= _lang('first_title_en') ?></label>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="text" class="form-control" id="second_title_ar" name="second_title_ar" placeholder="<?= _lang('second_title_ar') ?>">
                            <label class="control-label" for="second_title_ar"><?= _lang('second_title_ar') ?></label>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="text" class="form-control" id="second_title_en" name="second_title_en" placeholder="<?= _lang('second_title_en') ?>">
                            <label class="control-label" for="second_title_en"><?= _lang('second_title_en') ?></label>
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="text" class="form-control" id="url" name="url" placeholder="<?= _lang('url') ?>">
                            <label class="control-label" for="url"><?= _lang('url') ?></label>
                            <span class="help-block"></span>
                        </div>
                      
                        <div class="form-group form-md-line-input col-md-12">
                            <select class="form-control edited" id="active" name="active">
                                <option  value="1"><?= _lang('active') ?></option>
                                <option  value="0"><?= _lang('not_active') ?></option>
                            </select>
                            <label class="control-label" for="active"><?= _lang('status') ?></label>

                        </div>
                        <div class="form-group form-md-line-input col-md-12">
                            <input type="number" class="form-control" id="this_order" name="this_order" placeholder="<?= _lang('this_order') ?>">
                            <label for="this_order"><?= _lang('this_order') ?></label>
                            <span class="help-block"></span>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-md-6">
                            <div>
                                <label class="control-label"><?= _lang('image') ?></label>
                            </div>
                            <div class="input-file">
                                <input type="file" name="home_slider_image" id="home_slider_image">
                                <span class="help-block"></span>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <div class="image_uploaded">

                                <img src="<?php echo base_url('no-image.jpg'); ?>" width="150" height="80" />
                            </div>
                        </div>


                    </div>


                </form>

            </div>

            <div class="modal-footer">
                <span class="margin-right-10 loading hide"><i class="fa fa-spin fa-spinner"></i></span>
                <button type="button" class="btn btn-info submit-form"
                        ><?= _lang('save') ?></button>
                <button type="button" class="btn btn-white"
                        data-dismiss="modal"><?= _lang("close") ?></button>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= _lang('home_slider'); ?></h3>
    </div>
    <div class="panel-body">
        <!--Table Wrapper Start-->
        <a class="btn btn-sm btn-info pull-left" style="margin-bottom: 40px;" href="" onclick="Home_slider.add(); return false;"><?= _lang('add_new'); ?> </a>

        <table class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer">
            <thead>
                <tr>
                    <th><?= _lang('first_title'); ?></th>
                    <th><?= _lang('second_title'); ?></th>
                    <th><?= _lang('image'); ?></th>
                    <th><?= _lang('status'); ?></th>
                    <th><?= _lang('options'); ?></th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>

        <!--Table Wrapper Finish-->
    </div>
</div>
<script>
        var new_lang = {
            'add_home_slider': lang.add_home_slider,
            'edit_home_slider': lang.edit_home_slider,
            messages: {
                first_title_ar: {
                    required: lang.required
                },
                first_title_en: {
                    required: lang.required
                },
                second_title_ar: {
                    required: lang.required
                },
                second_title_en: {
                    required: lang.required
                },
                desc_en: {
                    required: lang.required

                },
                this_order: {
                    required: lang.required

                }
            }
        };
</script>
<?php
    global $_require;
    $_require['js'] = array('home_slider.js');
?>