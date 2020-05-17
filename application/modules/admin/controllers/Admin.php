<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {


    public function __construct()
	{
        parent::__construct();
        $this->load->library('session');
        $this->load->library('grocery_CRUD');
        if(empty($this->session->userdata('admin_id'))){
            redirect(base_url('admin/login'));
        }
        
    }
    

	public function index()
	{
        // echo "hello";
        echo $this->session->userdata('admin_id');
        $output = (object)array('output' => '' , 'js_files' => array() , 'css_files' => array());
        $output->title = "Dashboard";
        $this->load->view('dash',$output);
        
    }
    
    public function gallery(){


        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('gallery');
        $crud->set_subject('gallery');
        // $crud->required_fields('city');
        $crud->columns('title',  'head_title', 'sub_title', 'image');
        $crud->set_field_upload('image','assets/uploads/files');

        $output = $crud->render();
        $output->title = "Dashboard | Gallery";
        
        $this->load->view('dash',$output);
    }

    public function video(){


        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('video');
        $crud->set_subject('video');
        // $crud->required_fields('city');
        $crud->columns( 'title', 'url');
        // $crud->set_field_upload('image','assets/uploads/files');

        $output = $crud->render();
        $output->title = "Dashboard | Video";
        
        $this->load->view('dash',$output);
    }


    public function afliations(){


        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('affliations');
        $crud->set_subject('Afliations');
        // $crud->required_fields('city');
        $crud->columns( 'school_name', 'job_title', 'location');
        // $crud->set_field_upload('image','assets/uploads/files');

        $output = $crud->render();
        $output->title = "Dashboard | Afliations";
        
        $this->load->view('dash',$output);
    }


    public function qualification(){


        $crud = new grocery_CRUD();

        $crud->set_theme('datatables');
        $crud->set_table('qualification');
        $crud->set_subject('Qualification');
        // $crud->required_fields('city');
        $crud->columns('company_name', 'job_title', 'location');
        // $crud->set_field_upload('image','assets/uploads/files');

        $output = $crud->render();
        $output->title = "Dashboard | Qualification";
        
        $this->load->view('dash',$output);
    }
}
