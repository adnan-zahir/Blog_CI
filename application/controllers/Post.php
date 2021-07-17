<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Post_model');
    $this->load->helper('url_helper');
  }

  public function index()
  {
    $data['posts_data'] = $this->Post_model->get_all();
    $this->load->view('post/index', $data);
  }

  public function create()
  {
    $this->load->helper('form');
    $this->load->library('form_validation');

    $this->form_validation->set_rules('judul', 'Judul', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

    if ($this->form_validation->run() === FALSE)
    {
      $this->load->view('post/create');
    }
    else
    {
      $this->Post_model->create();
      $this->load->view('post/success_post');
    }
  }

  public function get($id)
  {
    $data['post_data'] = $this->Post_model->get($id);

    if (empty($data['post_data']))
    {
      show_404();
    }

    $this->load->view('post/get', $data);
  }
}
