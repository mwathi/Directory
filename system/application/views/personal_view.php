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
    <body>
        <div id="head" align="left"">

                <a href="<?php echo base_url() ?>"><img src="<?php echo base_url().'system/Images/RBD_logo.png'?>"/></a>
</div>
<div id="space"></div> 
<div align="center">
	<div id="space"></div>
	<div id="loginbar">
	<div id="space"></div>
	<div id="space"></div>    
		<span class="loginbarother" id="loginbarother" style="margin-left: -25%">
<a href="<?php echo site_url("home_controller"); ?>">Rwanda Business Directory Home <!-- <img src="<?php echo base_url().'system/Images/rbdhome.png'?>"/> --> </a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;		
<a href="<?php echo site_url("personal_controller"); ?>">My Home</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;		
				  <a href="<?php echo site_url("personal_controller/personal_business_listing"); ?>">My businesses</a>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;
            
<div id="space"></div>  
<div id="space"></div>
<div id="space"></div>

        <div id="sub_menu">
   <!-- <div class="personallinks">
       <h2>A<a href="<?php echo site_url("personal_controller/add"); ?>" class="personallinks">Add Businesses</a></h2>
       <h2>B<a href="<?php echo site_url("personal_controller/personal_business_listing"); ?>" class="personallinks">My Businesses</a></h2>
       <h2>C<a href="<?php echo site_url("personal_controller"); ?>" class="personallinks">My Home</a></h2>
       <h2>D<a href="<?php echo site_url("home_controller"); ?>" class="personallinks">Rwanda Business Home</a></h2>
     </div> -->
<div id="space"></div>
      <div id="main_wrapper"> 
        <?php $this -> load -> view($content_view); ?>
    </div>

</div>
    </body>
</html>