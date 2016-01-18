<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Add_project_model
 *
 * @author Sawan Eranga
 */
class Project_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function set_project_info() {
        $datas['project_name'] = $this->input->post('S_p_name');
        $datas['project_description'] = $this->input->post('S_p_desc');
        $datas['project_technologies'] = $this->input->post('S_p_tech');
        $datas['client_name'] = $this->input->post('S_c_name');
        $datas['client_email'] = $this->input->post('S_c_email');
        $datas['client_tel_no'] = $this->input->post('S_tel_no');
        $status = $this->db->insert('tbl_projects', $datas);
        return $status;
    }
    function get_project_info()
    {
        return $this->db->query("SELECT * FROM tbl_projects")->result();
    }
}
