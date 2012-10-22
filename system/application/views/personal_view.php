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
        <div id="head">
            <div id="space"></div>
            <div id="space"></div>
            <span><a href="<?php echo base_url() ?>">Rwanda Business Directory</a></span>
        </div>
        <div id="sub_menu">
    <div class="personallinks">
       <h2>A<a href="<?php echo site_url("personal_controller/add"); ?>" class="personallinks">Add Businesses</a></h2>
       <h2>B<a href="<?php echo site_url("personal_controller/personal_business_listing"); ?>" class="personallinks">My Businesses</a></h2>
       <h2>B<a href="<?php echo site_url("personal_controller/do_upload"); ?>" class="personallinks">Add Business Image</a></h2>
     </div>
      <div id="main_wrapper"> 
        <?php $this -> load -> view($content_view); ?>
    </div>

</div>
    </body>
</html>