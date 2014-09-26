<?php
class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
//        $this->load->model('members_model');
    }

    public function index()
    {
//        $data['members'] = $this->members_model->get_members();
        $data['title'] = 'Register';

        $this->load->view('templates/header', $data);
        $this->load->view('members/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug)
    {
/*        $data['member'] = $this->members_model->get_members($slug);

        if (empty($data['member']))
        {
            show_404();
        }*/
        $data['member'] = 'view';
        $data['title'] = $data['member']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('members/view', $data);
        $this->load->view('templates/footer');
    }
    public function create()
    {
 /*       $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Registration';

        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('text', 'text', 'required');

        if ($this->form_validation->run() === FALSE)
        {*/
        $data['title'] = 'Registration';
            $this->load->view('templates/header', $data);
            $this->load->view('member/create');
            $this->load->view('templates/footer');

   /*     }
        else
        {
            $this->members_model->addMember();
            $this->load->view('members/success');
        }*/
    }
}