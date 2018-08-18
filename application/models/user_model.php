<?php 
Class user_model extends CI_Model { 
	
	Public function __construct() { 
		parent::__construct(); 
	} 

Public function login_user($data1,$data2) {
      $array1 = array('uta_id' => $data1, 'password' => $data2);
      $this->db->select('user_role'); 
 	  $this->db->from('users');
 	  $this->db->where($array1);
  	  $query = $this->db->get();
  	  return $query->result();
      }


    Public function insert_grantData($data)
      {
        $this->load->database();
        $a=$this->db->insert('grants',$data);
      }

     Public function update_grantData($grantid,$projectname,$amountinusd,$sponsorer) {
      $value=array('project_name'=>$projectname,'amount_granted'=>$amountinusd,'organization'=>$sponsorer);
      $this->db->where('grant_id',$grantid);
 	  $this->db->update('grants',$value);
  	  $query = $this->db->get('grants');
  	  return $query->result();
      }

      Public function delete_grantData($grantid)
      {
        $this->load->database();
        $this->db->where('grant_id', $grantid);
		$this->db->delete('grants');
      }

      Public function insert_labData($data)
      {
        $this->load->database();
        $a=$this->db->insert('research_labs',$data);
       }

     Public function update_labData($labid,$labname,$email,$director,$address,$phone_no,$website) {
     $value=array('lab_name'=>$labname,'email'=>$email,'director'=>$director,'address'=>$address,'phone_no'=>$phone_no,'website'=>$website);
      $this->db->where('lab_id',$labid);
 	  $this->db->update('research_labs',$value);
  	  $query = $this->db->get('research_labs');
  	  return $query->result();
      }

      Public function delete_labData($labid)
      {
        $this->load->database();
        $this->db->where('lab_id', $labid);
		$this->db->delete('research_labs');
      }

       Public function insert_userData($data)
      {
        $this->load->database();
        $a=$this->db->insert('users',$data);
      }

     Public function update_userData($userid,$firstname,$lastname,$mobile,$email,$uta_id) {
     $value=array('user_id'=>$userid,'first_name'=>$firstname,'last_name'=>$lastname,'mobile_no'=>$mobile,'mav_email'=>$email,'uta_id'=>$uta_id);
      $this->db->where('user_id',$userid);
 	  $this->db->update('users',$value);
  	  $query = $this->db->get('users');
  	  return $query->result();
      }

      Public function delete_userData($user_id)
      {
        $this->load->database();
        $this->db->where('user_id', $user_id);
		$this->db->delete('users');
      }


      Public function insert_projectData($data)
      {
        $this->load->database();
        $a=$this->db->insert('research_projects',$data);
      }

     Public function update_projectData($projectid,$projectname,$studentname,$facultyname,$technology,$areaofresearch,$labname,$grants) {
      $value=array('proj_name'=>$projectname,'stud_name'=>$studentname,'faculty_name'=>$facultyname,'technology'=>$technology,'area_of_research'=>$areaofresearch,'lab_name'=>$labname,'grants'=>$grants);
      $this->db->where('proj_id',$projectid);
 	  $this->db->update('research_projects',$value);
  	  $query = $this->db->get('research_projects');
  	  return $query->result();	
      }

      Public function delete_projectData($projectid)
      {
        $this->load->database();
        $this->db->where('proj_id', $projectid);
		$this->db->delete('research_projects');
      }

      Public function search_queryData($faculty_name,$areaofexpertise) {
      $array1 = array('faculty_name' => $faculty_name, 'area_of_research' => $areaofexpertise);
      $this->db->select('r.proj_name,r.faculty_name,r.technology,r.area_of_research,l.lab_name,r.grants'); 
    $this->db->from('research_projects r');
    $this->db->join('research_labs l','r.lab_name = l.lab_id');
      $this->db->where($array1);
      $query = $this->db->get();
      return $query->result();  
      }

      Public function profile_queryData($utaid,$email,$phone,$password) {
      $value=array('mav_email'=>$email,'mobile_no'=>$phone,'password'=>$password);
      $this->db->where('uta_id',$utaid);
    $this->db->update('users',$value);
      $query = $this->db->get('users');
      return $query->result();  
      }

      Public function create_userData($data)
      {
        $this->load->database();
        $a=$this->db->insert('users',$data);
      }
}

?>