<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{	
	
	public function __construct()
	{
		parent::__construct();	

		$this->load->helper(array('form'));
		$this->load->library('email');
		$this->load->model("Common_model");
		//$this->load->model("Register_model");
		$this->load->library('upload');
		$this->load->library('session');
		$this->load->helper('url');
		

	}

	public function index()
	{

		$data['services']=$this->Common_model->fetch_services();
		$data['gallery']=$this->Common_model->fetch_gallery();
		$data['projects']=$this->Common_model->fetch_projects();
		$data['team']=$this->Common_model->fetch_team();
		$data['careers']=$this->Common_model->fetch_careers();

		$this->load->view('home',$data);

	}

	public function careers(){
		$this->load->view('careers');
	}


	/*SERVICE MODAL*/
    public function fetch_service_modal()
    {
          
    	$id=$this->uri->segment(3);
    	$data=$this->Common_model->edit_services($id);
    	echo json_encode($data);  	
    	exit;
    }

	/*SERVICE MODAL*/

	/*GALLARY MODAL*/

	public function fetch_gallary_modal()
    {

    	$id=$this->uri->segment(3);
    	$data=$this->Common_model->fetch_gallary_modal($id);
    	echo json_encode($data);  	
    	exit;
    }

	/*///////////GALLARY MODAL*/
	/*IT*/
	public function save_it()
	{

		$data['name']=$name=$this->input->post('name');
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');
		$data['institution']=$this->input->post('institution');
		$data['course']=$this->input->post('course');
		$data['description']=$this->input->post('description');
		$data['date']=$this->input->post('date');
		$files = $_FILES;
		
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
	
		$this->Common_model->submit_it($data);
		$var=1;
		echo $var;	     
	}

	private function set_vehicle_upload_options()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './it_doc/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '2048';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function itview()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['it']=$this->Common_model->fetch_it();
		$this->load->view('itview',$data);
	}
	/*IT///////*/

	/*TRAINING*/
	public function save_training()
	{

		$data['name']=$name=$this->input->post('name');
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');
		$data['institution']=$this->input->post('institution');
		$data['course']=$this->input->post('course');
		$data['description']=$this->input->post('description');
		$data['date']=$this->input->post('date');
		$files = $_FILES;
		
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options3());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
	
		$this->Common_model->submit_training($data);
		$var=1;
		echo $var;	     
	}

	private function set_vehicle_upload_options3()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './it_doc/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '2048';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function trainingview()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['training']=$this->Common_model->fetch_training();
		$this->load->view('trainingview',$data);
	}
	/*TRAINING///////*/


	/*HIGHER*/
	public function save_higher()
	{

		$data['name']=$name=$this->input->post('name');
		$data['phone']=$phone=$this->input->post('phone');
		$data['email']=$email=$this->input->post('email');
		$data['institution']=$institution=$this->input->post('institution');
		$data['course']=$course=$this->input->post('course');
		$data['description']=$description=$this->input->post('description');
		$data['date']=$date=$this->input->post('date');
		$files = $_FILES;
		
		$cpt = count($_FILES['userfile']['name']);

		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options4());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 

	      /*echo "<pre>";
	      print_r($data);
	      exit;*/

		$this->Common_model->submit_higher($data);
		$sent = $this->sendmail($name,$phone,$email,$institution,$course,$description,$date,$names);
		
		$var=1;
		echo $var;	     
	}

	private function sendmail($name,$phone,$email,$institution,$course,$description,$date,$names){
		$config = Array(        
			'protocol' => 'sendmail',
			'smtp_host' => 'localhost',
			'smtp_port' => 25,
			'smtp_user' => 'SMTP Username',
			'smtp_pass' => 'SMTP Password',
			'smtp_timeout' => '4',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$message='<table border="1" width="100%">
         <tr>
           <td>Name</td>
           <td>'.$name.'</td>
           </tr>
           <tr>
           <td>Phone</td>
           <td>'.$phone.'</td>
            </tr>
           <tr>
           <td>Email</td>
           <td>'.$email.'</td>
            </tr>
           <tr>
           <td>institution</td>
           <td>'.$institution.'</td>
            </tr>
           <tr>
           <td>course</td>
           <td>'.$course.'</td>
            </tr>
           <tr>
           <td>description</td>
           <td>'.$description.'</td>
         </tr>
         <tr>
           <td>Date</td>
           <td>'.$date.'</td>
         </tr>
            
		</table>';
		$path='./it_doc/';
          $this->email->set_mailtype("html");
		$this->load->library('email', $config);
		$this->email->from($email); 
		$this->email->to('edu@ritactechnolabs.com'); 
		
		$this->email->subject('HIGHER EDUCATION');
		$this->email->message($message);
		$this->email->attach($path.'/'.$names);	

		$this->email->send();
	}

	private function set_vehicle_upload_options4()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './it_doc/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '2048';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function higherview()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['higher']=$this->Common_model->fetch_higher();
		$this->load->view('higherview',$data);
	}
	/*HIGHER///////*/

		/*CAREER APPLICATIONS*/
	public function save_career_applications()
	{

		$data['name']=$name=$this->input->post('name');
		$data['phone']=$phone=$this->input->post('phone');
		$data['email']=$email=$this->input->post('email');
		$data['position']=$position=$this->input->post('position');
		$data['description']=$description=$this->input->post('description');
		$data['date']=$date=$this->input->post('date');
		$files = $_FILES;
		
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 
                
                if ($img_name == trim($img_name) && strpos($img_name, ' ') !== false) 
                {
             	$img_name = str_replace(' ', '_', $img_name);
                          
                }

			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options5());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
	    
		//$this->Common_model->submit_career_applications($data);
		$config = Array(        
			'protocol' => 'sendmail',
			'smtp_host' => 'localhost',
			'smtp_port' => 25,
			'smtp_user' => 'SMTP Username',
			'smtp_pass' => 'SMTP Password',
			'smtp_timeout' => '4',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$message='<table border="1" width="100%">
         <tr>
           <td>Name</td>
           <td>'.$name.'</td>
           </tr>
           <tr>
           <td>Phone</td>
           <td>'.$phone.'</td>
            </tr>
           <tr>
           <td>Email</td>
           <td>'.$email.'</td>
            </tr>
           <tr>
           <td>Position</td>
           <td>'.$position.'</td>
            </tr>
           <tr>
           <td>Description</td>
           <td>'.$description.'</td>
            </tr>
           <tr>
           <td>Date</td>
           <td>'.$date.'</td>
         </tr>
            
		</table>';
		$path='./career_doc/';
          $this->email->set_mailtype("html");
		$this->load->library('email', $config);
		$this->email->from($email); 
		$this->email->to('careers@ritactechnolabs.com'); 
		
		$this->email->subject('CAREER');
		$this->email->message($message);
		$this->email->attach($path.'/'.$names);	
		$sent=$this->email->send();
		$var=1;
		echo $var;	     
	}

	private function set_vehicle_upload_options5()
	{   
					//upload an image options
		$config1 = array();
		$config1['upload_path'] = './career_doc/';
		$config1['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config1['max_size']      = '2048';
		$config1['overwrite']     = FALSE;
		return $config1;
	}

	public function career_application_view()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['career_applications']=$this->Common_model->fetch_career_applications();
		$this->load->view('career_application_view',$data);
	}
	/*CAREER APPLICATIONS///////*/

	public function admin()
	{
		$this->load->view('login');
	}
public function check()
	{
		$data['username']=$name=$this->input->post('username');
		$data['password']=$this->input->post('password');

		$num=$this->Common_model->check($data);
		if(empty($num))
		{
			echo 0;
		}
		else
		{
			$this->session->set_userdata("log_id",$num[0]['id']);
			echo 1;
		}
		
	}
	public function application()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$this->load->view('application');

	}
	public function logout()
	{
		$this->session->unset_userdata("log_id");
		 redirect('admin');
	}
	public function services()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['services']=$this->Common_model->fetch_services();
		$this->load->view('services',$data);
	}
	public function add_services()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		// $id=$this->uri->segment(3);
		$this->load->view('add_services');
	}
	public function submit_services()
	{ 
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['icon']=$this->input->post('icon');
		$true=$this->Common_model->insert_services($data);
		echo $true;		
	}
	public function edit_services()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$data['services']=$this->Common_model->edit_services($id);
		$this->load->view('edit_services',$data);	
	}
	public function update_services()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->input->post('cid');
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['icon']=$this->input->post('icon');
		$true=$this->Common_model->update_services($data,$id);
		echo $true;	
	}
	public function delete_services()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('services');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
	}

	/*GALLRY APP*/

	public function gallary()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['gallery']=$this->Common_model->fetch_gallery();
		$this->load->view('gallary',$data);
	}
	public function add_gallary()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$this->load->view('add_gallary');
	}
	public function submit_gallary()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['name']=$this->input->post('gal_name');
		$data['date']=$this->input->post('gal_date');
		$data['icon']=$this->input->post('gal_icon');
		$data['description']=$this->input->post('gal_description');
		$files = $_FILES;

		$cpt = count($_FILES['userfile']['name']);
		
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options_gallary());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
		$this->Common_model->insert_gallary($data);
		$var=1;
		echo $var;	
	}
	private function set_vehicle_upload_options_gallary()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './gallery/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '2048';
		$config['overwrite']     = FALSE;
		return $config;
	}
	public function edit_gallary()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$data['gallary']=$this->Common_model->edit_gallary($id);
		$this->load->view('edit_gallary',$data);	
	}
	public function update_gallary()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->input->post('cid');
		
		$data['name']=$this->input->post('gal_name');
		$data['date']=$this->input->post('gal_date');
		$data['icon']=$this->input->post('gal_icon');
		$data['description']=$this->input->post('gal_description');
		$files = $_FILES;

		$cpt = count($_FILES['userfile']['name']);
		
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options_gallary());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		    $this->Common_model->update_gallary($data,$id);
		    $var=1;
		    echo $var;	
			exit;
	  }
	 

	}
	 public function delete_gallary()
	  {
	  	if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
	  	$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('gallery');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
	  }
	/*////////////GALLRY APP*/
           
     /*ENTER CAREERS*/

     public function enter_careers()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['careers']=$this->Common_model->fetch_careers();
		$this->load->view('careers',$data);
	}
	public function add_careers()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		// $id=$this->uri->segment(3);
		$this->load->view('add_careers');
	}
	public function submit_careers()
	{ 
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['left_date']=$this->input->post('left_date');
		$data['left_heading']=$this->input->post('left_heading');
		$data['right_heading']=$this->input->post('right_heading');
		$data['right_content']=$this->input->post('right_content');

		$true=$this->Common_model->insert_careers($data);
		echo $true;		
	}
	public function edit_careers()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$data['careers']=$this->Common_model->edit_careers($id);
		$this->load->view('edit_careers',$data);	
	}
	public function update_careers()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->input->post('cid');
		$data['left_date']=$this->input->post('left_date');
		$data['left_heading']=$this->input->post('left_heading');
		$data['right_heading']=$this->input->post('right_heading');
		$data['right_content']=$this->input->post('right_content');
		$true=$this->Common_model->update_careers($data,$id);
		echo $true;	
	}
	public function delete_careers()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('careers');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
	}
     
     /*/////////////ENTER CAREERS*/
	/*projects*/
	public function projects()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['projects']=$this->Common_model->fetch_projects();
		$this->load->view('projects',$data);
	}
	public function add_projects()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$this->load->view('add_projects');
	}
	public function submit_projects()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options1());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
		// echo "<pre>";
	          // print_r($data);
	          // exit;
		$this->Common_model->insert_projects($data);
		$var=1;
		echo $var;	
	}
	private function set_vehicle_upload_options1()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './vendors/images/projects/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '1024';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function edit_projects()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$data['projects']=$this->Common_model->edit_projects($id);

		$this->load->view('edit_projects',$data);
	}
	public function update_projects()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->input->post('cid');
		
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$files = $_FILES;

		$cpt = count($_FILES['userfile']['name']);
		
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options1());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		    $this->Common_model->update_projects($data,$id);
		    $var=1;
		    echo $var;	

			exit;
	  }

    }
    public function delete_projects()
    {
    	if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
    	$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('project');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
    }

    /*---------projects*/
	

	/*team*/

	public function team()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['team']=$this->Common_model->fetch_team();
		$this->load->view('team',$data);
	}
	public function add_team()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$this->load->view('add_team');
	}
	public function submit_team()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$data['name']=$this->input->post('name');
		$data['designation']=$this->input->post('designation');
		$files = $_FILES;
		$cpt = count($_FILES['userfile']['name']);
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options2());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		} 
		$this->Common_model->insert_team($data);
		$var=1;
		echo $var;	
	}
	private function set_vehicle_upload_options2()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './vendors/images/team/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '1024';
		$config['overwrite']     = FALSE;
		return $config;
	}
	public function edit_team()
	{
		if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->uri->segment(3);
		$data['team']=$this->Common_model->edit_team($id);

		$this->load->view('edit_team',$data);
	}
	public function update_team()
       {
       	if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
		$id=$this->input->post('cid');
		
		$data['name']=$this->input->post('name');
		$data['designation']=$this->input->post('designation');
		$files = $_FILES;

		$cpt = count($_FILES['userfile']['name']);
		
		for($i=0; $i<$cpt; $i++)
		{           
			$_FILES['userfile']['name']=$img_name=$files['userfile']['name'][$i];
			$_FILES['userfile']['type']=$img_type= $files['userfile']['type'][$i];
			$_FILES['userfile']['tmp_name']=$img_temp= $files['userfile']['tmp_name'][$i];
			$_FILES['userfile']['error']=$img_error= $files['userfile']['error'][$i];
			$_FILES['userfile']['size']= $img_size=$files['userfile']['size'][$i]; 


			if ($img_name=='')
			{
				echo '<script language="javascript">';
				echo 'alert("Please select a file")';
				echo '</script>';
				exit();
			}
			else
			{      

				$this->upload->initialize($this->set_vehicle_upload_options2());
				$this->upload->do_upload();
				$file=$this->upload->data();
				$img[]=  $img_name;  /*$file['file_name'];*/
			}
			$names= implode(',', $img);
			$data['image']=$names;/*serialize($names);*/
		    $this->Common_model->update_team($data,$id);
		    $var=1;
		    echo $var;	

			exit;
	  }

    }

     public function delete_team()
    {
    	if(!($this->session->userdata('log_id')))
		{
          redirect('admin');
		}
    	$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('team');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
    }
    /*////////////TEAM//////////*/


public function save_details()
	{
		$data['name']=$name=$this->input->post('name');
		$data['email']=$email=$this->input->post('email');
		$data['subject']=$subject=$this->input->post('subject');
		$data['message']=$message=$this->input->post('message');
	
		$user_id=$this->Common_model->add($data);

		$config = Array(        
			'protocol' => 'sendmail',
			'smtp_host' => 'localhost',
			'smtp_port' => 25,
			'smtp_user' => 'SMTP Username',
			'smtp_pass' => 'SMTP Password',
			'smtp_timeout' => '4',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$message='<p>'.$name.'</p><br><p>'.$email.'</p><p>'.$message.'</p>';
		 $this->email->set_mailtype("html");
		$this->load->library('email', $config);
		$this->email->from($email); 
		$this->email->to('info@ritactechnolabs.com'); 
		
		$this->email->subject('Enquiry from website',$subject);
		$this->email->message($message);	
		//$sent=$this->email->send();
		$var="OK";
		echo $var;
		

	}

	public function become_a_partner()
	{
		$data['view']='become_a_partner';
		$this->load->view('outer_template',$data);
	}
	public function partner_details()
	{
		$data['name']=$name=$this->input->post('name');
		$data['title']=$title=$this->input->post('title');
		$data['phone']=$phone=$this->input->post('phone');
		$data['email']=$email=$this->input->post('email');
		$data['company']=$company=$this->input->post('company');
		$data['website']=$website=$this->input->post('website');
		$data['address']=$address=$this->input->post('address');
		$data['city']=$city=$this->input->post('city');
		$data['company']=$company=$this->input->post('company');
		$data['company_year']=$company_year=$this->input->post('company_year');
		$data['customers']=$customers=$this->input->post('customers');
		$data['employees']=$employees=$this->input->post('employees');
		$data['parent']=$parent=$this->input->post('parent');
		$data['sister']=$sister=$this->input->post('sister');
		$data['experience']=$experience=$this->input->post('experience');
		$data['intrest']=$intrest=$this->input->post('intrest');
		$data['sell_area']=$sell_area=$this->input->post('sell_area');
		$data['other_partnership']=$other_partnership=$this->input->post('other_partnership');
		$data['item']=$item=$this->input->post('item');
		$data['modal']=$modal=$this->input->post('modal');
		$data['contact_name1']=$contact_name1=$this->input->post('contact_name1');
		$data['contact_tel1']=$contact_tel1=$this->input->post('contact_tel1');
		$data['contact_email1']=$contact_email1=$this->input->post('contact_email1');
		$data['contact_name2']=$contact_name2=$this->input->post('contact_name2');
		$data['contact_tel2']=$contact_tel2=$this->input->post('contact_tel2');
		$data['contact_email2']=$contact_email2=$this->input->post('contact_email2');
		$config = Array(        
			'protocol' => 'sendmail',
			'smtp_host' => 'localhost',
			'smtp_port' => 25,
			'smtp_user' => 'SMTP Username',
			'smtp_pass' => 'SMTP Password',
			'smtp_timeout' => '4',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		$message='<table border="1" width="100%">
         <tr>
           <td>Name</td>
           <td>'.$name.'</td>
           </tr>
           <tr>
           <td>Title</td>
           <td>'.$title.'</td>
            </tr>
           <tr>
           <td>Phone</td>
           <td>'.$phone.'</td>
            </tr>
           <tr>
           <td>Email</td>
           <td>'.$email.'</td>
            </tr>
           <tr>
           <td>Company Name</td>
           <td>'.$company.'</td>
            </tr>
           <tr>
           <td>Website</td>
           <td>'.$website.'</td>
         </tr>
         <tr>
           <td>Address</td>
           <td>'.$address.'</td>
         </tr>
          <tr>
           <td>City</td>
           <td>'.$city.'</td>
         </tr>
          <tr>
           <td>State/province</td>
           <td>'.$company.'</td>
         </tr>
          <tr>
           <td>Company Established Year</td>
           <td>'.$company_year.'</td>
         </tr>
          <tr>
           <td>No. of customers</td>
           <td>'.$customers.'</td>
         </tr>
          <tr>
           <td>No. of Employees</td>
           <td>'.$employees.'</td>
         </tr>

          <tr>
           <td>Parent Company</td>
           <td>'.$parent.'</td>
         </tr>
          <tr>
           <td>Sister concerns</td>
           <td>'.$sister.'</td>
         </tr>
          <tr>
           <td>Experience</td>
           <td>'.$experience.'</td>
         </tr>
          <tr>
           <td>RITAC Interest</td>
           <td>'.$intrest.'</td>
         </tr>
          <tr>
           <td>Territory</td>
           <td>'.$sell_area.'</td>
         </tr>
          <tr>
           <td>Other partners</td>
           <td>'.$other_partnership.'</td>
         </tr>
          <tr>
           <td>RITAC Software</td>
           <td>'.$item.'</td>
         </tr>
          <tr>
           <td>Partnership Modal</td>
           <td>'.$modal.'</td>
         </tr>
          <tr>
           <td>Name1</td>
           <td>'.$contact_name1.'</td>
         </tr>
          <tr>
           <td>Tel1</td>
           <td>'.$contact_tel1.'</td>
         </tr>
          <tr>
           <td>Email1</td>
           <td>'.$contact_email1.'</td>
         </tr>
          <tr>
           <td>Name2</td>
           <td>'.$contact_name2.'</td>
         </tr>
          <tr>
           <td>Tel2</td>
           <td>'.$contact_tel2.'</td>
         </tr>
          <tr>
           <td>Email2</td>
           <td>'.$contact_email2.'</td>
         </tr>
         
            
		</table>';
		 $this->email->set_mailtype("html");
		$this->load->library('email', $config);
		$this->email->from($email); 
		$this->email->to('info@ritactechnolabs.com'); 
		
		$this->email->subject('Partner Request');
		$this->email->message($message);	
		$sent=$this->email->send();
		$var="not_exist";
		echo $var;
	}
	public function partner_modal()
	{
		$data['view']='partner_modal';
		$this->load->view('outer_template',$data);
	}


}
?>