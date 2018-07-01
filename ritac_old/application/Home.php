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
		$this->load->helper('url');

	}

	public function index()
	{
		$data['services']=$this->Common_model->fetch_services();
		$data['projects']=$this->Common_model->fetch_projects();
		$data['team']=$this->Common_model->fetch_team();
		$data['careers']=$this->Common_model->fetch_careers();
		$this->load->view('home',$data);

	}
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
		$data['training']=$this->Common_model->fetch_training();
		$this->load->view('trainingview',$data);
	}
	/*TRAINING///////*/


	/*HIGHER*/
	public function save_higher()
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

				$this->upload->initialize($this->set_vehicle_upload_options4());
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
		$this->Common_model->submit_higher($data);
		$var=1;
		echo $var;	     
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
		$data['higher']=$this->Common_model->fetch_higher();
		$this->load->view('higherview',$data);
	}
	/*HIGHER///////*/

		/*CAREER APPLICATIONS*/
	public function save_career_applications()
	{

		$data['name']=$name=$this->input->post('name');
		$data['phone']=$this->input->post('phone');
		$data['email']=$this->input->post('email');
		$data['position']=$this->input->post('position');
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

				$this->upload->initialize($this->set_vehicle_upload_options5());
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
		$this->Common_model->submit_career_applications($data);
		$var=1;
		echo $var;	     
	}

	private function set_vehicle_upload_options5()
	{   
					//upload an image options
		$config = array();
		$config['upload_path'] = './career_doc/';
		$config['allowed_types'] = 'jpg|jpeg|png|pdf|txt|docx|doc|xlsx';
		$config['max_size']      = '2048';
		$config['overwrite']     = FALSE;
		return $config;
	}

	public function career_application_view()
	{
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
        echo $num;
	}
	public function application()
	{
		$this->load->view('application');
	}
	public function services()
	{
		$data['services']=$this->Common_model->fetch_services();
		$this->load->view('services',$data);
	}
	public function add_services()
	{
		// $id=$this->uri->segment(3);
		$this->load->view('add_services');
	}
	public function submit_services()
	{ 
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['icon']=$this->input->post('icon');
		$true=$this->Common_model->insert_services($data);
		echo $true;		
	}
	public function edit_services()
	{
		$id=$this->uri->segment(3);
		$data['services']=$this->Common_model->edit_services($id);
		$this->load->view('edit_services',$data);	
	}
	public function update_services()
	{
		$id=$this->input->post('cid');
		$data['name']=$this->input->post('name');
		$data['description']=$this->input->post('description');
		$data['icon']=$this->input->post('icon');
		$true=$this->Common_model->update_services($data,$id);
		echo $true;	
	}
	public function delete_services()
	{
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('services');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
	}
           
     /*ENTER CAREERS*/

     public function enter_careers()
	{
		$data['careers']=$this->Common_model->fetch_careers();
		$this->load->view('careers',$data);
	}
	public function add_careers()
	{
		// $id=$this->uri->segment(3);
		$this->load->view('add_careers');
	}
	public function submit_careers()
	{ 
		$data['left_date']=$this->input->post('left_date');
		$data['left_heading']=$this->input->post('left_heading');
		$data['right_heading']=$this->input->post('right_heading');
		$data['right_content']=$this->input->post('right_content');

		$true=$this->Common_model->insert_careers($data);
		echo $true;		
	}
	public function edit_careers()
	{
		$id=$this->uri->segment(3);
		$data['careers']=$this->Common_model->edit_careers($id);
		$this->load->view('edit_careers',$data);	
	}
	public function update_careers()
	{
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
		$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('careers');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
	}
     
     /*/////////////ENTER CAREERS*/
	/*projects*/
	public function projects()
	{
		$data['projects']=$this->Common_model->fetch_projects();
		$this->load->view('projects',$data);
	}
	public function add_projects()
	{
		$this->load->view('add_projects');
	}
	public function submit_projects()
	{
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
		$id=$this->uri->segment(3);
		$data['projects']=$this->Common_model->edit_projects($id);

		$this->load->view('edit_projects',$data);
	}
	public function update_projects()
	{
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
    	$id=$this->uri->segment(3);
		$this->db->where('id',$id);
	   $this->db->delete('project');
	   header("Location: http://localhost/ritactechnolabs.com/home/application");
    }

    /*---------projects*/
	

	/*team*/

	public function team()
	{
		$data['team']=$this->Common_model->fetch_team();
		$this->load->view('team',$data);
	}
	public function add_team()
	{
		$this->load->view('add_team');
	}
	public function submit_team()
	{
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
		$id=$this->uri->segment(3);
		$data['team']=$this->Common_model->edit_team($id);

		$this->load->view('edit_team',$data);
	}
	public function update_team()
       {
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
		$this->load->library('email', $config);
		$this->email->from($email); 
		$this->email->to('support@ritactechnolabs.com'); 
		
		$this->email->subject('Enquiry',$subject);
		$this->email->message($message);	
		$sent=$this->email->send();
		$var="not_exist";
		echo $var;
		

	}


}
?>