<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="P_main-bar">
                    <div class=" row " >
                        <div class="col-md-12">
                            <p id="S_p_head" class="S_p_head">Add Project</p> 
                        </div>
                    </div>
                    <form id="S_add_prj_frm" name="S_add_prj_frm">
                        <div class=" row " >
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_p_name">Project Name</label> 
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control S_margin-bottom-10px" id="S_p_name" name="S_p_name" placeholder="Enter Project Name">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>

                        <div class="row ">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_p_desc">Project Description</label> 
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control S_margin-bottom-10px" id="S_p_desc" name="S_p_desc" rows="3" placeholder="Enter Project Description"></textarea>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <div class="row S_margin-bottom-10px">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_p_tech">Project Technologies</label> 
                            </div>
                            <div class="col-md-7">
                                <textarea class="form-control" id="S_p_tech" name="S_p_tech" rows="3" placeholder="Enter Project Technologies"></textarea>
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <div class="row S_margin-bottom-10px">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_c_name">Client Name</label> 
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="S_c_name" name="S_c_name" placeholder="Enter Client Name">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <div class="row S_margin-bottom-10px">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_c_email">Client Email</label> 
                            </div>
                            <div class="col-md-7">
                                <input type="email" class="form-control" id="S_c_email" name="S_c_email" placeholder="Enter Client Email">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <div class="row S_margin-bottom-10px">
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-3">
                                <label for="S_tel_no">Client Telephone number</label> 
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="S_tel_no" name="S_tel_no" placeholder="Enter Telephone number">
                            </div>
                            <div class="col-md-1">
                            </div>
                        </div>
                        <div class=" row " >
                            <div class="col-md-4">
                            </div>
                            <div class="col-md-4">
                                <input type="button" class="btn btn-info" id="S_btn_add_prj" name="S_btn_add_prj" onclick="S_add_prj_sub()" value="Add Project"/>
                                <input type="button" class="btn btn-info" id="S_btn_view_prj" name="S_btn_view_prj" onclick="S_view_prj_sub()" value="View Project"/>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                    </form>
                </div>