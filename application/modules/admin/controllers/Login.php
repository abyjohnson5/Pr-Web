<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MX_Controller {


    public function __construct()
	{
        parent::__construct();
        $this->load->library('session');

    }
    public function index(){

        if(isset($_POST['login'])){
            
            $_POST['login']['password'] = md5($_POST['login']['password']);
            // print_r($_POST['login']);
            $res = $this->db->get_where('users',$_POST['login'])->row();
            // print_r($res->id);
            // echo $this->session->userdata('admin_id');
            $data = array(
                'admin_id'=> $res->id
            );
            $this->session->set_userdata($data);
            redirect(base_url('admin'));
        
        }
        $this->load->view('login');
    }

}