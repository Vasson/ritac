<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model
{

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    
  /*gallary*/
      public function fetch_gallery()
    {
      $this->db->select('*');
    $this->db->from('gallery');
    $query = $this->db->get();  
    return  $query->result_array();
    }

    public function fetch_gallary_modal($id)
    {
        $this->db->select('*');
      $this->db->from('gallery');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
    }
     public function insert_gallary($data)
   {
      $this->db->insert('gallery',$data);
        return true;
   }
   public function edit_gallary($id)
    {
     $this->db->select('*');
      $this->db->from('gallery');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
   }
   public function update_gallary($id)
   {
     $this->db->where('id',$id);
        $this->db->update('gallery',$data);
        return true;
   }
  /*/////gallary*/
    public function fetch_services()
    {
    	$this->db->select('*');
		$this->db->from('services');
		$query = $this->db->get();	
		return 	$query->result_array();
    }
    
    public function fetch_projects()
    {
    	$this->db->select('*');
		$this->db->from('project');
		$query = $this->db->get();	
		return 	$query->result_array();
    }
     public function fetch_team()
    {
        $this->db->select('*');
        $this->db->from('team');
        $query = $this->db->get();  
        return  $query->result_array();
    }
    public function fetch_careers()
    {
        $this->db->select('*');
        $this->db->from('careers');
        $query = $this->db->get();  
        return  $query->result_array();
    }
    public function check($data)
    {
      $this->db->select('*');
      $this->db->from('user');
      
      $this->db->where('username',$data['username']);
      $this->db->where('password',$data['password']);
     $query = $this->db->get();
     return  $query->result_array();
    }
    public function insert_services($data)
    {
        $this->db->insert('services',$data);
        return true;
    }
    public function edit_services($id)
    {
        $this->db->select('*');
      $this->db->from('services');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
    }
    public function update_services($data,$id)
    {
          $this->db->where('id',$id);
        $this->db->update('services',$data);
        return true;
    }

    /*projects*/
   public function insert_projects()
   {
      $this->db->insert('project',$data);
        return true;
   }
   public function edit_projects($id)
   {
     $this->db->select('*');
      $this->db->from('project');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
   }
   public function update_projects($data,$id)
   {
        
      $this->db->where('id',$id);
        $this->db->update('project',$data);
        
   }


   /*team*/

   public function insert_team()
   {
      $this->db->insert('team',$data);
        return true;
   }

   public function edit_team($id)
   {
     $this->db->select('*');
      $this->db->from('team');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
   }
    public function update_team($data,$id)
   {
        
      $this->db->where('id',$id);
        $this->db->update('team',$data);
        
   }


   /*IT*/
   public function submit_it($data)
  {
    $this->db->insert('it',$data);
    return true;
  }
  public function fetch_it()
  {

       $this->db->select('*');
        $this->db->from('it');
        $query=$this->db->get();
        return $query->result_array();
  }
  /*/////IT*/

  /*TRAINING*/
   public function submit_training($data)
  {
    $this->db->insert('training',$data);
    return true;
  }
  public function fetch_training()
  {

       $this->db->select('*');
        $this->db->from('training');
        $query=$this->db->get();
        return $query->result_array();
  }
  /*/////TRAINING*/

  /*HIGHER*/
   public function submit_higher($data)
  {
    $this->db->insert('higher',$data);
    return true;
  }
  public function fetch_higher()
  {

       $this->db->select('*');
        $this->db->from('higher');
        $query=$this->db->get();
        return $query->result_array();
  }
  /*/////HIGHER*/

   /*HIGHER*/
   public function submit_career_applications($data)
  {
    $this->db->insert('careers_application',$data);
    return true;
  }
  public function fetch_career_applications()
  {

       $this->db->select('*');
        $this->db->from('careers_application');
        $query=$this->db->get();
        return $query->result_array();
  }
  /*/////HIGHER*/

  /*ENTER CAREERS*/
  public function insert_careers($data)
    {
        $this->db->insert('careers',$data);
        return true;
    }
    public function edit_careers($id)
    {
        $this->db->select('*');
      $this->db->from('careers');
      $this->db->where('id',$id);
      $query = $this->db->get();  
      return  $query->result_array();
    }
    public function update_careers($data,$id)
    {
          $this->db->where('id',$id);
        $this->db->update('careers',$data);
        return true;
    }
    /*//////CAREERS*/

    public function add($data)
  {
        
    $this->db->insert('enquiry',$data);
    $insert_id = $this->db->insert_id();
        return  $insert_id; 
  }

}
?>