<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>


<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/pmain.css" />
         <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/inputes/set1.css" />
          <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/animate.css" />
         <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/jquery-1.12.0.min"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/bootstrap.min.js"></script>
      
      
      <!--inputs filed -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/pavithra/css/inputs/set2.css" />
      
      <script type="text/javascript" src="<?php echo base_url() ?>assets/pavithra/js/inputs/classie.js"></script>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>tassets/pavithra/font-awesome-4.2.0/css/font-awesome.min.css" />
  
    </head>
    <body class="P_disable-oveflow">
        <div id="P_header-bar">
            <a href="<?php echo site_url()."/login/logout" ?>">logout</a>
        </div>
        <div class="row" style="margin: 0px">
            <div class="col-md-2" style="padding: 0px">
                <div id="P_sidebar">
                    <?php 
                    for($x=0;$x<30;$x++)
                    {
                        echo "apple <br>";
                        
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-10" style="padding: 0px">
                <div id="P_main-bar">
                     <?php 
                    for($x=0;$x<3000;$x++)
                    {
                        echo "orange <br>";
                    }
                    ?>
                </div>
            </div>
                
        </div>
        
        
        
        
        
        
        
       
    </body>
</html>
        