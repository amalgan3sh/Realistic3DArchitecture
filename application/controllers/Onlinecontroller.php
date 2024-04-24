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
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        // Define an array to hold the table names
        $user_types = array('admin', 'architecture', 'companies', 'designers', 'user');
        
        // Initialize user ID and user type variables
        $user_id = null;
        $user_type = null;
    
        // Loop through each user type
        foreach ($user_types as $type) {
            // Check login for each user type
            switch ($type) {
                case 'admin':
                    $user = $this->Onlinemodel->loginadmin($email, $password);
                    if ($user) {
                        $user_id = $user->admin_id; 
                        $user_type = 'admin';
                    }
                    break;
                
                case 'architecture':
                    $user = $this->Onlinemodel->loginarchitect($email, $password);
                    if ($user) {
                        $user_id = $user->architecture_id; 
                        $user_type = 'architecture';
                    }
                    break;
                
                case 'companies':
                    $user = $this->Onlinemodel->logincompanies($email, $password);
                    if ($user) {
                        $user_id = $user->company_id; 
                        $user_type = 'companies';
                    }
                    break;
                
                case 'designers':
                    $user = $this->Onlinemodel->loginDesigner($email, $password);
                    if ($user) {
                        $user_id = $user->designer_id; 
                        $user_type = 'designers';
                    }
                    break;
                
                case 'user':
                    $user = $this->Onlinemodel->loginUser($email, $password);
                    if ($user) {
                        $user_id = $user->user_id; 
                        $user_type = 'user';
                    }
                    break;
            }
            
            // If user is found, break the loop
            if ($user_id) {
                break;
            }
        }
    
        // Check if user is found
        if ($user_id) {
            // Store user ID and user type in session
            $this->session->set_userdata('user_id', $user_id);
            $this->session->set_userdata('user_type', $user_type);
    
            // Redirect based on user type
            switch ($user_type) {
                case 'admin':
                    $this->adminHome();
                    break;
                case 'architecture':
                    $this->architectHome();
                    break;
                case 'companies':
                    $this->companyHome();
                    break;
                case 'designers':
                    $this->designerHome();
                    break;
                case 'user':
                    $this->userHome();
                    break;
            }
        } else {
            // Handle invalid login here (e.g., show error message)
            // For example:
            echo "Invalid email or password";
        }
    }
    


	public function signUp(){
		$this->load->view('signup');
	}

    public function userHome(){
        $this->load->view('user/user_header');
        $this->load->view('user/user_home');
        $this->load->view('user/user_footer');
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
    public function userViewCompanies(){
        $data['companies'] = $this->Onlinemodel->userViewCompanies();
        $this->load->view('user/user_header');
        $this->load->view('user/user_view_companies',$data);
        $this->load->view('user/user_footer');
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
        $data['architect_project'] = $this->Onlinemodel->getArchitect_project();
        $this->load->view('architecture/architect_header');
        $this->load->view('architecture/architect_manage_project',$data);
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
        $data['users'] = $this->Onlinemodel->getAllUsers();
        $this->load->view('company/company_header');
        $this->load->view('company/company_client_management', $data);
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
    public function userAssignWorkToCompany(){
        $company_id = $this->input->get_post('company_id');
        $this->load->view('user/user_header');
         $this->load->view('user/user_assign_work_to_client',$company_id);
         $this->load->view('user/user_footer');

    }
    public function userConfirmWorkAssignedToClient(){
         $data['company_id'] = $this->input->get_post('company_id');
         $data['project_name'] = $this->input->get_post('project_name');
         $data['description'] = $this->input->get_post('description');
         $data['user_id'] = $this->session->userdata('user_id');
         $response = $this->Onlinemodel->userConfirmWorkAssignedToClient($data);
         if($response==1){
            ?><script type="text/javascript">alert('success')</script><?php
            $this->userAssignWorkToCompany();
         }
    }

    public function userViewWorkStatus(){
        $user_id = $this->session->userdata('user_id');
        $data['work_status'] = $this->Onlinemodel->userViewWorkStatus($user_id);
        $this->load->view('user/user_header');
         $this->load->view('user/user_view_work_status',$data);
         $this->load->view('user/user_footer');
    }
    public function companyAcceptProject(){
        $project_id = $this->input->get_post('project_id');
        $response = $this->Onlinemodel->companyAcceptProject($project_id);
        if($response==true){
            ?><script type="text/javascript">alert('success')</script><?php
            $this->companyProjects();
        }else{
            ?><script type="text/javascript">alert('failed')</script><?php
            $this->companyProjects();
        }

    }
    public function companyRejectProject(){
        $project_id = $this->input->get_post('project_id');
        $response = $this->Onlinemodel->companyRejectProject($project_id);
        if($response==true){
            ?><script type="text/javascript">alert('rejected')</script><?php
            $this->companyProjects();
        }else{
            ?><script type="text/javascript">alert('failed')</script><?php
            $this->companyProjects();
        }
    }

    public function companyAssignProjectToDesigner(){
        $project_id = $this->input->get_post('project_id');
        $designer_id = $this->input->get_post('designer_id');
        $response = $this->Onlinemodel->companyAssignProjectToDesigner($project_id, $designer_id);
        if($response==true){
            ?><script type="text/javascript">alert('Designer assigned')</script><?php
            $this->companyProjects();
        }else{
            ?><script type="text/javascript">alert('failed')</script><?php
            $this->companyProjects();
        }
    }
    public function companyAssignProjectToArchitect(){
        $project_id = $this->input->get_post('project_id');
        $architect_id = $this->input->get_post('architect_id');
        $response = $this->Onlinemodel->companyAssignProjectToArchitect($project_id, $architect_id);
        if($response==true){
            ?><script type="text/javascript">alert('Architect assigned')</script><?php
            $this->companyProjects();
        }else{
            ?><script type="text/javascript">alert('failed')</script><?php
            $this->companyProjects();
        }
    }
    public function designerUploadDesign(){
        $project_id = $this->input->get('project_id');
        $data['designs'] = $this->Onlinemodel->get_designs($project_id); 
        $this->load->view('designers/designer_header');
         $this->load->view('designers/designer_upload_design',$data);
         $this->load->view('designers/designer_footer');
    }
    public function designerFileUpload(){
        if ($this->input->post('submit')) {
            // Set up the configuration for file upload
            $config['upload_path'] = './designs/'; // Set your upload directory
            $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf'; // Set allowed file types
            $config['max_size'] = 2048; // Set max file size in KB

            // Load the upload library
            $this->load->library('upload', $config);

            // Perform the file upload
            if ($this->upload->do_upload('design')) {
                // File uploaded successfully
                $data = $this->upload->data();
                $upload_path = 'designs';
                // Get uploaded file name
                $file_name = $data['file_name'];

                $design_name = $this->input->post('design_name');
                $file_path_name = $upload_path.'/'.$file_name;
                $project_id = $this->input->get_post('project_id');

                $response = $this->Onlinemodel->designerFileUpload($design_name,$file_path_name, $project_id);
                // Now you can do further processing like saving the file details to database
                // and displaying success message etc.
                if( $response ==1){
                    ?><script type="text/javascript">alert('file uploaded')</script><?php
                    $this->designerUploadDesign();
                }
            } else {
                // File upload failed, display error message
                $error = $this->upload->display_errors();
                echo $error;
            }
        }
    }

    public function userChat(){
        $user_id = $this->session->userdata('user_id');
        $this->load->view('user/user_header');
         $this->load->view('user/user_chat');
         $this->load->view('user/user_footer');
    }

}
