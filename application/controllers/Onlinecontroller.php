<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlinecontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
    public function adminHome(){
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_home');
    }
    public function architectHome(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architecture_home');
        $this->load->view('architecture/architect_footer');
    }

    public function companyHome(){
        $this->load->view('company/company_header');
        $this->load->view('company/company_home');
        $this->load->view('company/company_footer');
    }

    public function loginUser()
{
    $usertype = $this->input->post('usertype');
    $email = $this->input->post('email');
    $password = $this->input->post('password');
    
    $user_id = null;

    switch ($usertype) {
        case 'admin':
            $user = $this->Onlinemodel->loginadmin($email, $password);
            if ($user) {
                $user_id = $user->admin_id; 
                $this->adminHome();
            }
            break;
        
        case 'architecture':
            $user = $this->Onlinemodel->loginarchitect($email, $password);
            if ($user) {
                $user_id = $user->architect_id; // Assuming the architect ID is stored in the 'architect_id' field
                $this->architectHome();
            }
            break;
        
        case 'companies':
            $user = $this->Onlinemodel->logincompanies($email, $password);
            if ($user) {
                $user_id = $user->company_id; // Assuming the company ID is stored in the 'company_id' field
                $this->companyHome();
            }
            break;
        
        case 'designers':
            $user = $this->Onlinemodel->loginDesigner($email, $password);
            if ($user) {
                $user_id = $user->designer_id; // Assuming the designer ID is stored in the 'designer_id' field
                $this->designerHome();
            }
            break;
    }

    // Store user ID in session if logged in
    if ($user_id) {
        $this->session->set_userdata('user_id', $user_id);
    }
}


	public function signUp(){
		$this->load->view('signup');
	}
	public function registerUser(){
		$name = $this->input->get_post('name');
		$email = $this->input->get_post('email');
		$phone = $this->input->get_post('phone');
		$usertype = $this->input->get_post('usertype');
		$password = $this->input->get_post('password');
		$response = $this->Onlinemodel->registerUser($name,$email,$phone,$usertype,$password);

    	if($response==true){
			?><script type="text/javascript">alert('success')</script><?php
			$this->signUp();
		}
	}

    public function designerHome(){
        $this->load->view('designers/designer_header');
        $this->load->view('designers/designer_home');
    }

    public function adminManageContent(){
        $this->load->view('admin/admin_manage_content');
    }
        public function adminManageuser(){
        $this->load->view('admin/admin_manage_user');
    }

    public function adminviewinsights(){
        $this->load->view('admin/admin_view_insights');
    }
    public function designercollaborate(){
        $this->load->view('designers/designer_collaborate');
    }
        
    public function designerManageProfile(){
        $designer_id = $this->session->userdata('user_id');
        $data['designer_profile'] = $this->Onlinemodel->getDesignerProfile($designer_id);
        $this->load->view('designers/designer_header');
        $this->load->view('designers/designer_manage_profile',$data);
        $this->load->view('designers/designer_footer');
    }
    public function designerManageProject(){
        $designer_id = $this->session->userdata('user_id');
        $data['designer_project'] = $this->Onlinemodel->getDesignerProject($designer_id);
        $this->load->view('designers/designer_header');
        $this->load->view('designers/designer_manage_project',$data);
        $this->load->view('designers/designer_footer');
    }
    public function designerPortfolio(){
        $designer_id = $this->session->userdata('user_id');
        $data['designer_portfolio'] = $this->Onlinemodel->getDesignerPortfolio($designer_id);
        $this->load->view('designers/designer_header');
        $this->load->view('designers/designer_portfolio',$data);
         $this->load->view('designers/designer_footer');
    }
    public function designerEditProfile(){
        // Retrieve the JSON data sent from the JavaScript function
        $post_data = file_get_contents("php://input");

        // Decode the JSON string into an associative array
        $data = json_decode($post_data, true);

        // Fetch the first_name value from the decoded data
        $first_name = $data['first_name'];
        $last_name = $data['last_name'];
        $email = $data['email'];
        $phone = $data['phone'];
        $certification = $data['certification'];
        $portfolio = $data['portfolio'];
        $username = $data['username'];
        $password = $data['password'];

        $data['first_name'] =  $first_name;
        $data['last_name'] =   $last_name;
        $data['email'] =  $email;
        $data['phone'] =  $phone;
        $data['certification'] =  $certification;
        $data['portfolio'] =  $portfolio;
        $data['username'] =  $username;
        $data['password'] =  $password;
        $designer_id = $this->session->userdata('user_id');
        $result= $this->Onlinemodel->designerEditProfile($designer_id,$data);
    }

    public function designerAddPortfolio(){
        $designer_id = $this->session->userdata('user_id');
        $data['project_details'] = $this->input->get_post('project_details');
        $data['skills'] = $this->input->get_post('skills');
        $data['education'] = $this->input->get_post('education');
        $data['experience'] = $this->input->get_post('experience');
        $data['certifications'] = $this->input->get_post('certifications');
        $data['contact_informations'] = $this->input->get_post('contact_info');
        $data['biography'] = $this->input->get_post('biography');
        $data['additional_informations'] = $this->input->get_post('additional_info');
        $data['designer_id'] = $this->input->get_post('designer_id');

        $response= $this->Onlinemodel->designerAddPortfolio($data);
        if($response==true){
            ?><script type="text/javascript">alert('success')</script><?php
            $this->designerPortfolio();
        }
        if($response==false){
            ?><script type="text/javascript">alert('A portfolio already exists')</script><?php
            $this->designerPortfolio();
        }
    }
    public function designerLogout(){
        // Unset session data
        $this->session->unset_userdata('user_id');

        $this->index();
    }
    public function architectLogout(){
        // Unset session data
        $this->session->unset_userdata('user_id');

        $this->index();
    }
    public function designersearchproject(){
        $this->load->view('designers/designer_search_project');
    }
    public function designerviewnotificationd(){
        $this->load->view('designers/designer_view_notificatons');
    }
    public function architectcollaborate(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_collaborate');
        $this->load->view('architecture/architect_footer');
    }
    public function architectmanageproject(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_manage_project');
        $this->load->view('architecture/architect_footer');
    }
    public function architectportfolio(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_portfolio');
        $this->load->view('architecture/architect_footer');
    }
    public function architectsearch(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_search');
        $this->load->view('architecture/architect_footer');
    }
    public function architectviewfeedback(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_view_feedback');
        $this->load->view('architecture/architect_footer');
    }
    public function architecturemanageprofile(){
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architecture_manage_profile');
        $this->load->view('architecture/architect_footer');
    }
    public function companyservices(){
        $this->load->view('company/company_header');
        $this->load->view('company/company_services');
    }
     public function companyProjects(){
        $data['designers'] = $this->Onlinemodel->getAllDesigners();
        $data['architects'] = $this->Onlinemodel->getAllArchitect();
        $data['ongoing_projects'] = $this->Onlinemodel->getOngoingProjectsForCompany($this->session->userdata('user_id'));
        $this->load->view('company/company_header');
        $this->load->view('company/company_projects',$data);
        $this->load->view('company/company_footer');
    }
    public function companyfeedbacks(){
        $this->load->view('company/company_header');
        $this->load->view('company/company_feedbacks');
        $this->load->view('company/company_footer');
    }
    public function companyclientmanagement(){
        $this->load->view('company/company_header');
        $this->load->view('company/company_client_management');
        $this->load->view('company/company_footer');
    }
    public function adminManageDesigner(){
        $data['designer'] = $this->Onlinemodel->getAllDesigners();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_manage_designer',$data);
    }
    public function adminManageArchitect(){
        $data['architect'] = $this->Onlinemodel->getAllArchitect();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_manage_architect',$data);
    }
    public function adminManageCompany(){
        $data['company'] = $this->Onlinemodel->getAllCompany();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_manage_company',$data);
    }
    public function adminManageproject(){
        $data['project'] = $this->Onlinemodel->getAllProject();
        $this->load->view('admin/admin_header');
        $this->load->view('admin/admin_manage_project',$data);
    }
    public function adminLogOut(){
        $this->index();
    }
    public function companyAddProject(){
        $data['project_name'] = $this->input->get_post('project_name');
        $data['description'] = $this->input->get_post('description');
        $data['company_id'] = $this->input->get_post('company_id');
        $data['designer_id'] = $this->input->get_post('designer_id');
        $data['architect_id'] = $this->input->get_post('architect_id');

        $response = $this->Onlinemodel->companyAddProject($data);
        if($response == 1){
            ?><script type="text/javascript">alert('success')</script><?php
            $this->companyProjects();
        }
    }

    public function companyViewDesigners(){
        $data['designer'] = $this->Onlinemodel->getAllDesigners();
        $this->load->view('company/company_header');
        $this->load->view('company/company_view_designers',$data);
        $this->load->view('company/company_footer');
    }
    public function companyViewDesignerPortfolio(){
        $designer_id = $this->input->get_post('designer_id');
        $data['designer_portfolio'] = $this->Onlinemodel->companyViewDesignerPortfolio($designer_id);
        $this->load->view('company/company_header');
         $this->load->view('company/company_view_designers_portfolio',$data);
         $this->load->view('company/company_footer');
    }
    public function companyViewArchitect(){
        $data['architects'] = $this->Onlinemodel->getAllArchitect();
        $this->load->view('company/company_header');
        $this->load->view('company/company_view_architect',$data);
        $this->load->view('company/company_footer');
    }

    public function companyViewArchitectPortfolio(){
        $architect_id = $this->input->get_post('architecture_id');
        $data['architect_portfolio'] = $this->Onlinemodel->companyViewArchitectPortfolio($architect_id);
        $this->load->view('company/company_header');
         $this->load->view('company/company_view_architect_portfolio',$data);
         $this->load->view('company/company_footer');
    }


}
