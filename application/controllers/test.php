<?php

class test extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('login');
		$this->load->model('user_model');
		$this->load->view('templates/footer');	
	}

	public function home()
	{
		$this->load->view('templates/header');
		$this->load->view('home');
		$this->load->model('user_model');
		$this->load->view('templates/footer'); 	
	}

	public function researchandopportunities()
	{
		$this->load->view('templates/header');
		$this->load->view('researchandopportunities');
		$this->load->model('user_model');
		$this->load->view('templates/footer'); 	
	}

	public function aboutus()
	{
		$this->load->view('templates/header');
		$this->load->view('aboutus');
		$this->load->model('user_model');
		$this->load->view('templates/footer'); 	
	}

	 public function accolades()
	 {
	 	$this->load->view('templates/header');
	 	$this->load->view('accolades');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	}

	 public function contactus()
	{
	 	$this->load->view('templates/header');
	 	$this->load->view('contactus');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	}

	public function newscenter()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('newscenter');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function researchlabs()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('researchlabs');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function researchreports()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('researchreports');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function profilesettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('profilesettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function sitemap()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('sitemap');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function labsettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('labsettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function usersettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('usersettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function projectsettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('projectsettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	 public function grantsettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('grantsettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }

	  public function adminsettings()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('adminsettings');
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }


public function login_data()
      {
        $utaid = $this->input->post('utaid');
        $password = $this->input->post('password');
      	$this->load->model("user_model");
        $this->data['role'] = $this->user_model->login_user($utaid,$password);
        foreach($this->data['role'] as $value){
		    if ($value->user_role === "Admin"){
		      $this->adminsettings();
		    } else {
		      $this->home();
		    }
		}
	}


public function view_grants()
      {
        $this->grantsettings();
      }

public function view_labs()
      {
        $this->labsettings();
      }

public function view_faculty()
      {
        $this->usersettings();
      }

public function view_students()
      {
        $this->usersettings();
      }

public function view_projects()
      {
        $this->projectsettings();
      }


public function insert_grant()
{
	$grantid=$this->input->post('grantid');
	$projectname=$this->input->post('projectname');
	$amountinusd=$this->input->post('amountinusd');
	$sponsorer=$this->input->post('sponsorer');
	$value=array('grant_id'=>$grantid,'project_name'=>$projectname,'amount_granted'=>$amountinusd,'organization'=>$sponsorer);
	$this->load->model('user_model');
    $this->user_model->insert_grantData($value);
    echo "<script>alert('You Have Successfully inserted Grant Record!!!');</script>";
    $this->grantsettings();
}

public function update_grant()
      {
      	$grantid=$this->input->post('grantid');
		$projectname=$this->input->post('projectname');
		$amountinusd=$this->input->post('amountinusd');
		$sponsorer=$this->input->post('sponsorer');
		$this->load->model("user_model");
        $this->user_model->update_grantData($grantid,$projectname,$amountinusd,$sponsorer);
		echo "<script>alert('You Have Successfully updated Grant Record!!!');</script>";
    	$this->grantsettings();
	}

public function delete_grant()
     {
      	$grantid=$this->input->post('grantid');
		$this->load->model("user_model");
        $this->user_model->delete_grantData($grantid);
		echo "<script>alert('You Have Successfully deleted Grant Record!!!');</script>";
		$this->grantsettings();
	}

public function insert_labs()
{

	$labid=$this->input->post('labid');
	$labname=$this->input->post('labname');
	$email=$this->input->post('email');
	$director=$this->input->post('director');
	$address=$this->input->post('address');
	$phone_no=$this->input->post('phone_no');
	$website=$this->input->post('website');
	$value=array('lab_id'=>$labid,'lab_name'=>$labname,'email'=>$email,'director'=>$director,'address'=>$address,'phone_no'=>$phone_no,'website'=>$website);
	$this->load->model('user_model');
	$this->user_model->insert_labData($value);
    echo "<script>alert('You Have Successfully inserted Lab Record!!!');</script>";
    $this->labsettings();
}

public function update_labs()
    {
      	$labid=$this->input->post('labid');
		$labname=$this->input->post('labname');
		$email=$this->input->post('email');
		$director=$this->input->post('director');
		$address=$this->input->post('address');
		$phone_no=$this->input->post('phone_no');
		$website=$this->input->post('website');
		$this->load->model("user_model");
        $this->user_model->update_labData($labid,$labname,$email,$director,$address,$phone_no,$website);
		echo "<script>alert('You Have Successfully updated Lab Record!!!');</script>";
    	$this->labsettings();
	}

public function delete_labs()
    {
      	$labid=$this->input->post('labid');
		$this->load->model("user_model");
        $this->user_model->delete_labData($labid);
		echo "<script>alert('You Have Successfully deleted Lab Record!!!');</script>";
    	$this->labsettings();
	}

public function insert_users()
{
	$userid=$this->input->post('userid');
	$firstname=$this->input->post('firstname');
	$lastname=$this->input->post('lastname');
	$mobile=$this->input->post('mobile');
	$email=$this->input->post('email');
	$uta_id=$this->input->post('uta_id');
	$role=$this->input->post('role');
	$value=array('user_id'=>$userid,'first_name'=>$firstname,'last_name'=>$lastname,'mobile_no'=>$mobile,'mav_email'=>$email,'uta_id'=>$uta_id,'user_role'=>$role);
	$this->load->model('user_model');
    $this->user_model->insert_userData($value);
    echo "<script>alert('You Have Successfully inserted User Record!!!');</script>";
    $this->usersettings();
}

public function update_users()
  {
    $userid=$this->input->post('userid');
	$firstname=$this->input->post('firstname');
	$lastname=$this->input->post('lastname');
	$mobile=$this->input->post('mobile');
	$email=$this->input->post('email');
	$uta_id=$this->input->post('uta_id');
	//$role=$this->input->post('role');
	$this->load->model("user_model");
    $this->user_model->update_userData($userid,$firstname,$lastname,$mobile,$email,$uta_id);
	echo "<script>alert('You Have Successfully updated User Record!!!');</script>";
   	$this->usersettings();
   }

public function delete_users()
    {
      	$userid=$this->input->post('userid');
		$this->load->model("user_model");
        $this->user_model->delete_userData($userid);
		echo "<script>alert('You Have Successfully deleted User Record!!!');</script>";
    	$this->usersettings();
	}

public function insert_projects()
{
	$projectid=$this->input->post('projectid');
	$projectname=$this->input->post('projectname');
	$studentname=$this->input->post('studentname');
	$facultyname=$this->input->post('facultyname');
	$technology=$this->input->post('technology');
	$areaofresearch=$this->input->post('areaofresearch');
	$labname=$this->input->post('labname');
	$grants=$this->input->post('grants');
	$value=array('proj_id'=>$projectid,'proj_name'=>$projectname,'stud_name'=>$studentname,'faculty_name'=>$facultyname,'technology'=>$technology,'area_of_research'=>$areaofresearch,'lab_name'=>$labname,'grants'=>$grants);
	$this->load->model('user_model');
    $this->user_model->insert_projectData($value);
    echo "<script>alert('You Have Successfully inserted Project Record!!!');</script>";
    $this->projectsettings();
}

public function update_projects()
  {
    $projectid=$this->input->post('projectid');
	$projectname=$this->input->post('projectname');
	$studentname=$this->input->post('studentname');
	$facultyname=$this->input->post('facultyname');
	$technology=$this->input->post('technology');
	$areaofresearch=$this->input->post('areaofresearch');
	$labname=$this->input->post('labname');
	$grants=$this->input->post('grants');
	$this->load->model("user_model");
    $this->user_model->update_projectData($projectid,$projectname,$studentname,$facultyname,$technology,$areaofresearch,$labname,$grants);
	echo "<script>alert('You Have Successfully updated Project Record!!!');</script>";
   	$this->projectsettings();
   }

public function delete_projects()
    {
      	$projectid=$this->input->post('projectid');
		$this->load->model("user_model");
        $this->user_model->delete_projectData($projectid);
		echo "<script>alert('You Have Successfully deleted Project Record!!!');</script>";
    	$this->projectsettings();
	}

	public function research_view()
	 {
	 	$this->load->view('templates/header');
		$this->load->view('research_view',$this->data);
	 	$this->load->model('user_model');
	 	$this->load->view('templates/footer'); 	
	 }


public function search_query()
  {
    $faculty_name=$this->input->post('faculty_name');
	$areaofexpertise=$this->input->post('areaofexpertise');
	$this->load->model("user_model");
    $this->data['details'] = $this->user_model->search_queryData($faculty_name,$areaofexpertise);
	$this->research_view($this->data);
   }

  public function profile_query()
  {
    $utaid=$this->input->post('utaid');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$password=$this->input->post('password');
	$this->load->model("user_model");
    $this->user_model->profile_queryData($utaid,$email,$phone,$password);
	echo "<script>alert('You Have Successfully updated the Record!!!');</script>";
   	$this->profilesettings();
   }

   public function create_user()
  {
    $myfName=$this->input->post('myfName');
	$mylName=$this->input->post('mylName');
	$myEmail=$this->input->post('myEmail');
	$myPhone=$this->input->post('myPhone');
	$password=$this->input->post('password');
	$utaid=$this->input->post('utaid');
	$user=$this->input->post('user');
	$value=array('first_name'=>$myfName,'last_name'=>$mylName,'mav_email'=>$myEmail,'mobile_no'=>$myPhone,'password'=>$password,'uta_id'=>$utaid,'user_role'=>$user);
	$this->load->model('user_model');
    $this->user_model->create_userData($value);
    echo "<script>alert('Registered successfully!!! Please Login...');</script>";
    $this->index();
   }

}
?>