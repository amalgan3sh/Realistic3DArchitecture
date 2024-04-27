<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Onlinemodel extends CI_Model {

    public function registerUser($name, $email, $phone, $usertype,$password)
    {
    	if($usertype=='designer'){
    		$data = array(
				'username' => $name,
				'email' => $email,
				'phone' => $phone,
				'password' => $password
				);
    
		$response = $this->db->insert('designers', $data);
		return $response;
    	}
    	if($usertype=='architect'){
    		$data = array(
				'username' => $name,
				'email' => $email,
				'phone' => $phone,
				'password' => $password
				);
    
		$response = $this->db->insert('architect', $data);
		return $response;
    	}
    	if($usertype=='company'){
    		$data = array(
				'username' => $name,
				'email' => $email,
				'phone' => $phone,
				'password' => $password
				);
    
		$response = $this->db->insert('company', $data);
		return $response;
    	}
    	if($usertype=='user'){
    		$data = array(
				'username' => $name,
				'email' => $email,
				'phone' => $phone,
				'password' => $password
				);
    
		$response = $this->db->insert('user', $data);
		return $response;
    	}
		
    }
public function loginDesigner($email, $password)
{
    // Check if there is a record in the 'designers' table with the provided email and password
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('designers');
    if ($query->num_rows() > 0) {
        // Return the designer object
        return $query->row();
    } else {
        return false;
    }
}

public function loginUser($email, $password)
{
    // Check if there is a record in the 'designers' table with the provided email and password
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('user');
    if ($query->num_rows() > 0) {
        // Return the designer object
        return $query->row();
    } else {
        return false;
    }
}

public function loginarchitect($email, $password)
{
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('architect');
    if ($query->num_rows() > 0) {
        // Return the architect object
        return $query->row();
    } else {
        return false;
    }
}

public function logincompanies($email, $password)
{
    $this->db->where('email', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('company');
    if ($query->num_rows() > 0) {
        // Return the company object
        return $query->row();
    } else {
        return false;
    }
}

public function loginadmin($email, $password)
{
    $this->db->where('username', $email);
    $this->db->where('password', $password);
    $query = $this->db->get('admin');

    if ($query->num_rows() > 0) {
        // Return the admin object
        return $query->row();
    } else {
        return false;
    }
}

	public function getAllDesigners(){
		$data = $this->db->get('designers');
		return $data;
	}
	public function getAllArchitect(){
		$data = $this->db->get('architect');
		return $data;
	}
	public function getAllCompany(){
		$data = $this->db->get('company');
		return $data;
	}
	public function getAllProject(){
		$data = $this->db->get('project');
		return $data;
	}
	public function companyAddProject($data){
		$response = $this->db->insert('project', $data);
		return $response;
	}
	public function getOngoingProjectsForCompany($company_id){
		$this->db->select('project.*, designers.username AS designer_name, architect.username AS architect_name');
		$this->db->from('project');
		$this->db->where('project.company_id', $company_id);
		$this->db->join('designers', 'project.designer_id = designers.designer_id', 'left');
		$this->db->join('architect', 'project.architect_id = architect.architecture_id', 'left');
		$query = $this->db->get();
		// echo json_encode($query->result());
		// die();
		return $query->result();
	}
	
	public function companyViewDesignerPortfolio($designer_id){
		$this->db->where('designer_id', $designer_id);
	    $query = $this->db->get('portfolio');
	    return $query->result();
	}
	public function companyViewArchitectPortfolio($architect_id){
		$this->db->where('architecture_id', $architect_id);
	    $query = $this->db->get('portfolio');
	    // $sql = $this->db->last_query();
	    // echo json_encode($sql);
	    // die();
	    return $query->result();
	}
	public function getDesignerProfile($designer_id){
		$this->db->where('designer_id', $designer_id);
	    $query = $this->db->get('designers');
	    return $query;
	}
	public function designerEditProfile($designer_id,$data){
		 $this->db->where('designer_id', $designer_id);
		    $this->db->update('designers', $data);
		    return $this->db->affected_rows();
	}
	public function designerAddPortfolio($data){
    // Check if a portfolio entry already exists for the designer
    $existing_portfolio = $this->db->get_where('portfolio', array('designer_id' => $data['designer_id']))->row();
    
    // If a portfolio entry already exists, return false
    if ($existing_portfolio) {
        return false;
	    } else {
	        // If no existing portfolio entry, proceed with insertion
	        $response = $this->db->insert('portfolio', $data);
	        return $response;
	    }

	}
	public function getDesignerPortfolio($designer_id){
    	$this->db->where('designer_id', $designer_id);
	    $query = $this->db->get('portfolio');
	    return $query;
    }
    public function getDesignerProject($designer_id){
    	$this->db->where('designer_id', $designer_id);
	    $query = $this->db->get('project');
	    return $query;
    }

    public function userViewCompanies(){
    	$this->db->where('status', 'active');
	    $query = $this->db->get('company');
	    return $query;
    }
    public function getAllUsers(){
    	$query = $this->db->get('user');
	    return $query;
    }
    public function userConfirmWorkAssignedToClient($data){
    	$query = $this->db->insert('project',$data);
	    return $query;
    }
    public  function userViewWorkStatus($user_id){
    	$this->db->where('user_id', $user_id);
	    $query = $this->db->get('project');
	    return $query;
    }
    public function companyAcceptProject($project_id){
    	$this->db->where('project_id', $project_id);
	    $this->db->update('project', array('status' => 'accepted'));
    	return true;
    }
    public function companyRejectProject($project_id){
    	$this->db->where('project_id', $project_id);
	    $this->db->update('project', array('status' => 'rejected'));
    	return true;
    }
    public function companyAssignProjectToDesigner($project_id, $designer_id){
    	$this->db->where('project_id', $project_id);
	    $this->db->update('project', array('designer_id' => $designer_id));
    	return true;
    }
    public function companyAssignProjectToArchitect($project_id, $architect_id){
    	$this->db->where('project_id', $project_id);
	    $this->db->update('project', array('architect_id' => $architect_id));
    	return true;
    }

	public function designerFileUpload($design_name, $file_path_name, $project_id) {
	    $data = array(
	        'design_name' => $design_name,
	        'image' => $file_path_name,
	        'project_id' => $project_id 
	    );

	    $query = $this->db->insert('design_model', $data);
	    return $query;
	}
	public function get_designs($project_id) {
	    // Fetch data from the database
	    $query = $this->db->get('design_model');
	    
	    // Return the result set as an array of objects
	    return $query->result();
	}
	public function getArchitect_project(){
		$query = $this->db->get('project');
	    
	    // Return the result set as an array of objects
	    return $query;
	}
	public function user_get_designs($user_id) {
		$this->db->select('*');
		$this->db->from('design_model');
		$this->db->join('project', 'design_model.project_id = project.project_id');
		$this->db->where('project.user_id', $user_id);
		$query = $this->db->get();
		return $query->result(); // or $query->result_array() if you prefer associative arrays
	}


}
