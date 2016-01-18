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
        <!-- colorbox -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/Sawan/css/colorbox.css" />
        <script type="text/javascript" src="<?php echo base_url() ?>assets/Sawan/js/jquery.colorbox.js"></script>
        

      
      <!--inputs filed -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/inputes/set2.css" />
      
      <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/inputs/classie.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/font-awesome-4.2.0/css/font-awesome.min.css" />
  
    </head>
    <body class="P_disable-oveflow">
        <div id="P_header-bar">
            <a href="<?php echo site_url()."/Project/index" ?>">Add Project</a>
            <a href="<?php echo site_url() . "/Project/view_project" ?>">View Project</a>
        </div>
        <div class="row" style="margin: 0px">
            <div class="col-md-2" style="padding: 0px">
                <div id="P_sidebar">
                    <?php 
                    for($x=0;$x<29;$x++)
                    {
                        echo "View Project <br>";    
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-10" style="padding: 0px">
                <div id="P_main-bar">
                    <div class=" row " >
                        <div class="col-md-12">
                            <p id="S_p_head" class="S_p_head">View Project</p> 
                        </div>
                    </div>
                    <div class=" row " >
                        <div class="col-md-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Project Description</th>
                                        <th>Project Technologies</th>
                                        <th>Client Name</th>
                                        <th>Edit Project</th>
                                    </tr>
                                </thead>
                                <tbody id="view_sent_msg" >
                                    <?php
                                        foreach ($prj as $value) {
                                                ?>
                                                <tr>
                                                    <td style="font-weight: bold"><?php echo $value->project_name; ?></td>
                                                    <td style="font-weight: bold"><?php echo $value->project_description; ?></td>
                                                    <td style="font-weight: bold"><?php echo $value->project_technologies; ?></td>
                                                    <td style="font-weight: bold"><?php echo $value->client_name; ?></td>
                                                    <td><input type="button" class="btn btn-info" value="Edit" onclick='updateprj(<?php echo $value->prj_id; ?>);' /> </td>
                                                <tr/>
                                        <?php 
                                        }
//                                    }?>
                                </tbody>
                            </table> 
                        </div>
                    </div>          
                </div>
            </div>
        </div>       
    </body>
</html>
