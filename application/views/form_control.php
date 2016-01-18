<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>


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
            <a href="<?php echo site_url()."/Add_project/index" ?>">Add Project</a>
        </div>
        <div class="row" style="margin: 0px">
            <div class="col-md-2" style="padding: 0px">
                <div id="P_sidebar">
                    <?php 
                    for($x=0;$x<29;$x++)
                    {
                        echo "add project <br>";
                        
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-10" style="padding: 0px">
                <div id="P_main-bar">
                    <form>
                        <fieldset class="">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                            <small class="text-muted">We'll never share your email with anyone else.</small>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleSelect1">Example select</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleSelect2">Example multiple select</label>
                            <select multiple class="form-control" id="exampleSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </fieldset>
                        <fieldset class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file" id="exampleInputFile">
                            <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </fieldset>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                            </label>
                        </div>
                        <div class="radio disabled">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                Option three is disabled
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> Check me out
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
                
        </div>
        
        
        
        
        
        
        
       
    </body>
</html>
        