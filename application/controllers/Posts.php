<?php
class Posts extends CI_Controller{
    public function index(){
//  최신 게시믈을 말함
        $data['title'] = 'Latest Posts';

//        데이터 게시글
        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('templates/header');
//        표시 할 머리글 + 바닥글 + 슬래시 게시
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug = NULL){
        $data['post'] = $this->post_model->get_posts($slug);

        if(empty($data['post'])){
            show_404();
        }

        $data['title'] = $data['post']['title'];

        $this->load->view('templates/header');
//        표시 할 머리글 + 바닥글 + 슬래시 게시
        $this->load->view('posts/view', $data);
        $this->load->view('templates/footer');
    }
}