<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href="<?php echo base_url().'system/CSS/style.css'?>" type="text/css" rel="stylesheet"/> 
<link href="<?php echo base_url().'system/CSS/jquery-ui.css'?>" type="text/css" rel="stylesheet"/> 
<script src="<?php echo base_url().'system/Scripts/jquery.js'?>" type="text/javascript"></script> 
<script src="<?php echo base_url().'system/Scripts/jquery-ui.js'?>" type="text/javascript"></script> 


<?php
error_reporting(0);
$this -> load -> helper(array('form', 'search'));
if (isset($scripts)) {
    foreach ($scripts as $script) {
        echo "<script src=\"" . base_url() . "system/Scripts/" . $script . "\" type=\"text/javascript\"></script>";
    }
}
?>


 
<?php
if (isset($styles)) {
    foreach ($styles as $style) {
        echo "<link href=\"" . base_url() . "system/CSS/" . $style . "\" type=\"text/css\" rel=\"stylesheet\"/>";
    }
}
?>  
</head>
<div id="header" style="margin-top: -90px">    
</div>
<body>
    <div id="search" style="margin-left: 0; margin-right: 0">
        <?php echo form_open('home_controller/search'); ?>
        <div id="searchcontents">
            <div id="logo" style="margin-top: -250px">
                <h3><a href="<?php echo base_url() ?>" style="color: #000"><img src="<?php echo base_url().'system/Images/RBD_logo.png'?>"/> </a></h3>
                <span id="alotofcrap" style="font-size: 20px">Admin Page</span>
            </div>
            
     
        </div>
    <?php echo form_close(); ?>
    
    </div> 
    <div id="wrapper">
    <div id="main_wrapper"> 
        <?php $this -> load -> view($content_view); ?>
    </div>
  <!--End Wrapper div-->
</div>

<div id="bottom_ribbon">
    <div id="footer">
        <?php $this -> load -> view("footer_v"); ?>
    </div>
</div>
</body>
</html>