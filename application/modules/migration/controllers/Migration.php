<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration extends MX_Controller {

    public function __construct()
	{
        parent::__construct();
        $hostname = $this->db->hostname;
        $username = $this->db->username;
        $password = $this->db->password;
        $database = $this->db->database;
        include(APPPATH.'/third_party/rb.php');
        R::setup("mysql:host=$hostname;dbname=$database", $username, $password);
    }

    public function index(){
        $users = R::dispense('users');
        $users->username  = 'admin@domain.com';
        $users->password  = md5('password');        
        $id = R::store($users);
        if($id>0){
            // echo "user table created <br>";
        }

        $gallery = R::dispense('gallery');
        $gallery->title = "start title";
        $gallery->date = date('Y-m-d H:i:s');
        $gallery->head_title = "This is demo head title";
        $gallery->sub_title = "This is demo sub title";
        $gallery->image = "abcd.jpg";
        $g_id = R::store($gallery);
        if($g_id>0){
            // echo "gallery table created <br>";
        }

        
        $video = R::dispense('video');
        $video->title = "This is demo title for video";
        $video->url = "https://www.youtube.com/watch?v=2mDCVzruYzQ";
        $video->date = date('Y-m-d H:i:s');
        $v_id = R::store($video);
        if($v_id>0){
            // echo "video table created <br>";
        }

        $affliations = R::dispense('affliations');
        $affliations->school_name = "ABCD_School";
        $affliations->job_title = "Manager";
        $affliations->location = "EKM";
        $affliations->date = date('Y-m-d H:i:s');
        $a_id = R::store($affliations);
        if($a_id>0){
            // echo "affliations table created <br>";
        }

        $qualification = R::dispense('qualification');
        $qualification->company_name = "ABCD_School";
        $qualification->job_title = "Manager";
        $qualification->location = "EKM";
        $qualification->date = date('Y-m-d H:i:s');
        $q_id = R::store($qualification);
        if($q_id>0){
            // echo "affliations table created <br>";
            $this->done();
        }

       
    }
    function done(){
        echo "<h1 style='color:green'>successfully completed</h1>";
    }


}