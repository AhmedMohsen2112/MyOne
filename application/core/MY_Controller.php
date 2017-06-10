<?php

    class MY_Controller extends CI_Controller{

        public $data = array(),
                $_lang,
                $lang_code,
                $settings,
                $Guest,
                $visa_price,
                $isGuest;

        public function __construct(){
            parent::__construct();
            $this->load->model('Front_maka_madina_hotels_model', 'front_maka_madina_hotels');
            $this->load->model('Front_sightseeing_model', 'front_sightseeing');
            $this->load->model('Program_categories_model', 'program_categories');
            $this->load->model('Settings_model', 'settings');
            $this->load->model('Currency_model', 'currency');
            $this->load_lang_files();
            $this->slugsCreate();
            $settings = $this->settings->get();
            $this->settings = $settings[0];
            //pri($this->settings);
            $this->settings->site_contacts = json_decode($this->settings->site_contacts);
            $visa_currency = $this->currency->find($this->settings->visa_currency_id);
            //pri($this->settings);
            $this->visa_price = $visa_currency->amount_le * ($this->settings->visa_price_cost + $this->settings->visa_price_profit);
            //pri($this->visa_price);
            $this->data['program_categories'] = $this->programCategories();
            $this->data['cities_contain_hotels'] = $this->front_maka_madina_hotels->citiesContainHotels();
            $this->data['sightseeing_cities'] = $this->front_sightseeing->sightseeingCities();
            $this->data['settings'] = $this->settings;
            $this->data['visa_price'] = $this->visa_price;
            //pri($this->data['sightseeing_cities']);
        }

        public function _view($main_content, $type = 'front'){
            $data['main_content'] = $main_content;
            $data['data'] = $this->data;
            $view_dir = 'layouts';
            if ($type == 'front') {
                $this->load->view($view_dir . '/main_layout.php', $data);
            }
            if ($type == 'admin') {
                $this->load->view($view_dir . '/admin_layout.php', $data);
            }
            if ($type == 'haj_umrah') {
                $this->load->view($view_dir . '/haj_umrah_layout.php', $data);
            }
        }

        public function programCategories(){
            $program_main_categories = $this->program_categories->get(array('parent_id' => 0));
            $categories = array();
            if ($program_main_categories) {
                foreach ($program_main_categories as $main) {
                    $main->sub = $this->program_categories->get(array('parent_id' => $main->id));
                    $categories[] = $main;
                }
            }
            return $categories;
        }

        public function load_lang_files(){
            $this->lang_code = $this->lang->lang();
            $this->data['lang_code'] = $this->lang->lang();
            if ($this->lang_code == 'ar') {
                $this->data['label'] = 'English';
                $this->data['next_lang_code'] = 'en';
            }
            if ($this->lang_code == 'en') {
                $this->data['label'] = 'العربية';
                $this->data['next_lang_code'] = 'ar';
            }
            $lang_array = array(
                "ar" => "arabic",
                "en" => "english",
                "fr" => "french"
            );
            if (realpath(APPPATH . "language/" . $lang_array[$this->lang_code])) {
                $langFiles = scandir(realpath(APPPATH . "language/" . $lang_array[$this->lang_code]));
            }
            if (!$this->session->userdata("lang_files")) {
                $lang_files = array();
                foreach ($langFiles as $lang) {
                    if (endsWith($lang, "_lang.php")) {
                        $this->lang->load(str_replace("_lang.php", "", $lang));
                        $lang_files[] = str_replace("_lang.php", "", $lang);
                    }
                }
                $this->session->set_userdata("lang_files", $lang_files);
            } else {
                $lang_files = $this->session->userdata("lang_files");
                foreach ($lang_files as $lang) {
                    $this->lang->load($lang);
                }
            }
        }

        public function slugsCreate(){
            $this->data['title_slug'] = 'title_' . $this->lang_code;
            $this->title_slug = $this->data['title_slug'];
            $this->data['desc_slug'] = 'desc_' . $this->lang_code;
            $this->desc_slug = $this->data['desc_slug'];
            $this->data['body_slug'] = 'body_' . $this->lang_code;
            $this->data['program_title_slug'] = 'program_title_' . $this->lang_code;
            $this->program_title_slug = $this->data['program_title_slug'];
            $this->data['program_desc_slug'] = 'program_desc_' . $this->lang_code;
            $this->program_desc_slug = $this->data['program_desc_slug'];
            $this->data['program_include_slug'] = 'program_include_' . $this->lang_code;
            $this->data['country_title_slug'] = 'country_title_' . $this->lang_code;
            $this->data['city_title_slug'] = 'city_title_' . $this->lang_code;
            $this->data['country_desc_slug'] = 'country_desc_' . $this->lang_code;
            $this->data['city_desc_slug'] = 'city_desc_' . $this->lang_code;
            $this->data['hotel_title_slug'] = 'hotel_title_' . $this->lang_code;
            $this->data['hotel_desc_slug'] = 'hotel_desc_' . $this->lang_code;
            $this->data['site_title_slug'] = 'site_title_' . $this->lang_code;
            $this->data['site_desc_slug'] = 'site_desc_' . $this->lang_code;
            $this->data['site_keywords_slug'] = 'site_keywords_' . $this->lang_code;
            $this->data['site_address_slug'] = 'site_address_' . $this->lang_code;
        }

        public function sendEmail($email_data = array()){
            $config = Array(
                'protocol' => 'smtp',
                'smtp_host' => 'labyek.com',
                'smtp_port' => '587',
                'smtp_user' => 'no-reply@labyek.com',
                'smtp_pass' => 'lN2v$33a',
                'mailtype' => 'html',
                'charset' => 'utf-8'
            );
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from($email_data['from']);
            $this->email->reply_to($email_data['reply_to'], $email_data['name']);
            $this->email->to($email_data['to']);  // replace it with receiver mail id
            $this->email->subject($email_data['subject']); // replace it with relevant subject
            $this->email->message($email_data['message']);
            $send = $this->email->send();
            // echo $this->email->print_debugger();
            if ($send) {
                return true;
            } else {
                return false;
            }
        }

    }

    require_once APPPATH . "/core/Admin_Controller.php";
    require_once APPPATH . "/core/C_Controller.php";
