<?php

/**
 * Add_project Class
 *
 * @category	Projects
 * @author	Sawan Eranga
 * @link	http://localhost/seppro/index.php/Add_project
 */

class Project extends CI_Controller {

    /**
     * Constructor
     *
     * @access	public
     * @param	none
     * @return	none
     */
    public function __construct() {
        parent::__construct();
    }
    
    /**
     * Load the add_project view
     *
     * @access	public
     * @param	none
     * @return	none
     */
    public function index() {
        $this->load->view('project/add_project');
    }

    /**
     * form submit controller function
     *
     * @access	public
     * @param	none
     * @return	none
     */
    public function frm_submit() {
        $this->load->model('Project_model/Project_model');
        $sta = $this->Project_model->set_project_info();
        echo $sta;
    }
    
    /**
     * View project controller function
     *
     * @access	public
     * @param	none
     * @return	none
     */
    public function view_project() {
        $this->load->model('Project_model/Project_model');
        $all_data["prj"] = $this->Project_model->get_project_info();
        $this->load->view('project/view_project',$all_data);
    }
    
    public function update_project() {
//        $this->load->model('Project_model/Project_model');     
//        $all_data["prj"] = $this->Project_model->get_project_info();
        $this->load->view('project/update_project');
    }
}
