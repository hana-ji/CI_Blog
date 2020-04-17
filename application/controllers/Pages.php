<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
//            파일이 없으면 404 에러 로드
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }

            $data['title'] = ucfirst($page);

            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
        }
    }