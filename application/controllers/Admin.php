<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!isset($this->session->userid) && ($this->session->userstatus !=1)){
			redirect('Login');
		}
		$this->load->model('LoginModel');
	}
	public function index(){
		$this->admindashboard();
	}
	public function admindashboard(){
		$data = array();
		$data['main_content'] = $this->load->view('back/admin_main','',TRUE);
		$this->load->view('back/adminpanel',$data);
	}
	public function registerform(){
		$data = array();
		$data['main_content'] = $this->load->view('back/register_admin','',TRUE);
		$this->load->view('back/adminpanel',$data);
	}
	public function makeadmin(){


		$this->form_validation->set_rules('username','User Name','required|max_length[255]');
		$this->form_validation->set_rules('user_email','Email','required|is_unique[tbl_user.user_email]');
		$this->form_validation->set_rules('user_password','Password','required|min_length[6]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','required|matches[user_password]');
		$this->form_validation->set_rules('user_role','User Rules','required');
		if($this->form_validation->run()){



			 $profile_image= $this->upload_profile_image();
			// if($profile_image==NULL){
			// 	redirect("Product/add_product_form");
			// }else{

			// $image = $this->ProductModel->add_product_model($profile_image);
			// $this->session->set_flashdata("flsh_msg","<font class='success'>Product Added Successfully</font>");
			// redirect('product-list');
			// }


			$image = $this->LoginModel->adminRgisterModel($profile_image);
			$data['success_message'] = "User Successfully Added";
			$data['main_content'] = $this->load->view('back/register_admin',$data,TRUE);
			$this->load->view('back/adminpanel',$data);
		}else{
			$this->registerform();
		}

	}


	private function upload_profile_image(){
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'png|gif|jpg|jpeg';
        $config['max_size']             = 1000;//kb
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if($this->upload->do_upload('profile_image')){
        	$data = $this->upload->data();
        	$image_path = "uploads/$data[file_name]";
        	return $image_path;
        }else{
        	  $error =  $this->upload->display_errors();
        	$this->session->set_userdata('error_image',$error);
        	//redirect("Product/add_product_form");
        }

	}

	public function urltest(){
		
	}
}
