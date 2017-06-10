<?php

class Home_slider extends C_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Home_slider_model', 'home_slider');
    }

    public function index() {
        $main_content = 'home_slider/index';
        $this->_view($main_content, 'admin');
    }

    public function row() {
        // pri($_POST);
        $id = $_POST['id'];
        $find = $this->home_slider->find($id);

        if ($find) {
            print_json('success', $find);
        } else {
            print_json('error', 'error');
        }
    }

    public function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_title_ar', _lang('first_title_ar'), 'trim|required');
        $this->form_validation->set_rules('first_title_en', _lang('first_title_en'), 'trim|required');
        $this->form_validation->set_rules('second_title_ar', _lang('second_title_ar'), 'trim|required');
        $this->form_validation->set_rules('second_title_en', _lang('second_title_en'), 'trim|required');
        $this->form_validation->set_rules('this_order', _lang('this_order'), 'required');
        $this->form_validation->set_rules('url', _lang('url'), 'valid_url');
        if ($this->input->post('url')) {
            
        }
        if ($this->form_validation->run() == false) {
            $errors = $this->form_validation->error_array();
            print_json('error', $errors);
        } else {
            if (isset($_FILES['home_slider_image']) && $_FILES['home_slider_image']['name'] != "") {

                $this->config->load('files');
                $config = $this->config->item('home_slider_image');
                $new_path = 'uploads/home_slider/';
                $uploading = $this->home_slider->do_upload('home_slider_image', $config, $new_path);

                if (!$uploading) {
                    $errors = array('home_slider_image' => $this->upload->display_errors());
                    print_json('error', $errors);
                } else {
                    $image_name = $uploading;
                    $valid_upload = true;
                }
            } else {
                $valid_upload = false;
            }
        }
        if ($valid_upload) {
            if ($image_name != "") {
                $data['image'] = $image_name;
            }
        } else {
            $message['home_slider_image'] = _lang('no_file_to_upload');
            print_json('error', $message);
        }
        $data['first_title_ar'] = $this->input->post('first_title_ar', true);
        $data['first_title_en'] = $this->input->post('first_title_en', true);
        $data['second_title_ar'] = $this->input->post('second_title_ar', true);
        $data['second_title_en'] = $this->input->post('second_title_en', true);
        $data['url'] = $this->input->post('url');
        $data['this_order'] = $this->input->post('this_order');
        $data['active'] = $this->input->post('active');
        $add = $this->home_slider->add($data);
        if ($add) {
            print_json('success', _lang('added_successfully'));
        } else {
            print_json('error', 'error');
        }
    }

    public function edit() {
        $id = $_POST['id'];
        $find = $this->home_slider->find($id);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_title_ar', _lang('first_title_ar'), 'trim|required');
        $this->form_validation->set_rules('first_title_en', _lang('first_title_en'), 'trim|required');
        $this->form_validation->set_rules('second_title_ar', _lang('second_title_ar'), 'trim|required');
        $this->form_validation->set_rules('second_title_en', _lang('second_title_en'), 'trim|required');
        $this->form_validation->set_rules('this_order', _lang('this_order'), 'required');
        $this->form_validation->set_rules('url', _lang('url'), 'required|valid_url');

        if ($this->form_validation->run() == false) {
            $errors = $this->form_validation->error_array();
            print_json('error', $errors);
        } else {
            if (isset($_FILES['home_slider_image']) && $_FILES['home_slider_image']['name'] != "") {

                $this->config->load('files');
                $config = $this->config->item('home_slider_image');
                $new_path = 'uploads/home_slider/';
                $uploading = $this->home_slider->do_upload('home_slider_image', $config, $new_path);

                if (!$uploading) {
                    $errors = array('home_slider_image' => $this->upload->display_errors());
                    print_json('error', $errors);
                } else {
                    $image_original = substr($find->image, strrpos($find->image, '_') + 1);
                    $image_without_prefix = substr($find->image, strpos($find->image, '_') + 1); //without s_
                    $files = array(
                        FCPATH . 'uploads/home_slider/' . $image_original,
                        FCPATH . 'uploads/home_slider/s_' . $image_without_prefix,
                        FCPATH . 'uploads/home_slider/m_' . $image_without_prefix,
                    );
                    foreach ($files as $file) {
                        if (!is_dir($file)) {
                            if (file_exists($file)) {
                                unlink($file);
                            }
                        }
                    }
                    $image_name = $uploading;
                    $valid_upload = true;
                }
            } else {
                $valid_upload = false;
            }
        }
        if ($valid_upload) {
            if ($image_name != "") {
                $data['image'] = $image_name;
            }
        } else if (!$valid_upload && empty($find->image)) {
            $message['home_slider_image'] = _lang('no_file_to_upload');
            print_json('error', $message);
        }
        $data['first_title_ar'] = $this->input->post('first_title_ar', true);
        $data['first_title_en'] = $this->input->post('first_title_en', true);
        $data['second_title_ar'] = $this->input->post('second_title_ar', true);
        $data['second_title_en'] = $this->input->post('second_title_en', true);
        $data['url'] = $this->input->post('url');
        $data['this_order'] = $this->input->post('this_order');
        $data['active'] = $this->input->post('active');
        $where_array['id'] = $id;
        $update = $this->home_slider->update($data, $where_array);
        if ($update) {
            print_json('success', _lang('updated_successfully'));
        } else {
            print_json('error', _lang('no_affected_rows'));
        }
    }

    public function delete() {
        $id = $_POST['id'];
        $find = $this->home_slider->find($id);
        $deleted = $this->home_slider->delete($id);
        if ($deleted) {
            $image_original = substr($find->image, strrpos($find->image, '_') + 1);
            $image_without_prefix = substr($find->image, strpos($find->image, '_') + 1); //without s_

            $files = array(
                FCPATH . 'uploads/home_slider/' . $image_original,
                FCPATH . 'uploads/home_slider/s_' . $image_without_prefix,
                FCPATH . 'uploads/home_slider/l_' . $image_without_prefix,
            );
            foreach ($files as $file) {
                if (!is_dir($file)) {
                    if (file_exists($file)) {
                        unlink($file);
                    }
                }
            }
            print_json('success', _lang('deleted_successfully'));
        } else {
            print_json('error', 'no_affected_rows');
        }
    }

    function data() {

        $this->load->library('datatables');
        $this->datatables
                ->select("id,concat(first_title_ar,' - ',first_title_en) first_title,concat(second_title_ar,' - ',second_title_en) second_title,active,image")
                ->from("home_slider");

        $this->datatables->add_column('active', function($data) {
            return ($data['active'] == 1) ? _lang('active') : _lang('not_active');
        }, 'id');
        $this->datatables->add_column('image', function($data) {
            $back = '<img src="' . base_url() . 'uploads/home_slider/' . $data['image'] . '" style="height:64px;width:64px;"/>';
            return $back;
        }, 'id');
        $this->datatables->add_column('options', function($data) {

            $back = "";
            $back .= '<div class="btn-group">';
            $back .= ' <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> ' . _lang('options') . '';
            $back .= '<i class="fa fa-angle-down"></i>';
            $back .= '</button>';
            $back .= '<ul class = "dropdown-menu" role = "menu">';
            $back .= '<li>';
            $back .= '<a href="" onclick = "Home_slider.edit(this);return false;" data-id = "' . $data["id"] . '">';
            $back .= '<i class = "icon-docs"></i>' . _lang('edit') . '';
            $back .= '</a>';
            $back .= '</li>';
            $back .= '<li>';
            $back .= '<a href="" data-toggle="confirmation" onclick = "Home_slider.delete(this);return false;" data-id = "' . $data["id"] . '">';
            $back .= '<i class = "icon-docs"></i>' . _lang('delete') . '';
            $back .= '</a>';
            $back .= '</li>';
            $back .= '</ul>';
            $back .= ' </div>';
            return $back;
        }, 'id');

        $results = $this->datatables->generate();
        echo $results;
        exit;
    }

    public function inputs_check($inputs = array(), $id = false) {
        $errors = array();

        foreach ($inputs as $key => $value) {
            $where_array = array();
            if ($id) {
                $where_array['id !='] = $id;
            }
            $where_array[$key] = $value;
            $find = $this->home_slider->get($where_array);
            //pri($find);
            if ($find) {
                $errors[$key] = _lang('added_before');
            }
        }

        if (!empty($errors)) {
            print_json('error', $errors);
        }
        return true;
    }

}
