<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Project</title>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url() ?>assets/Sawan/js/project.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/pmain.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Sawan/css/smain.css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/inputes/set1.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/animate.css" />
        <!--inputs filed -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/inputes/set2.css" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/inputs/classie.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/font-awesome-4.2.0/css/font-awesome.min.css" />  
        <!-- colorbox -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Sawan/css/colorbox.css" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/Sawan/js/jquery.colorbox.js"></script>
    </head>
    <body class="P_disable-oveflow">
        <div id="P_header-bar">
            <a href="<?php echo site_url() . "/Project/index" ?>">Add Project</a>
            <a href="<?php echo site_url() . "/Project/view_project" ?>">View Project</a>
        </div>
        <div class="row" style="margin: 0px">
            <div class="col-md-2" style="padding: 0px">
                <div id="P_sidebar">
                    <?php
                    for ($x = 0; $x < 29; $x++) {
                        echo "add project <br>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-10" style="padding: 0px">
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
            </div>    
        </div>   
    </body>
</html>
        