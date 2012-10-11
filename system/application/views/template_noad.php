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

<script>
    $(document).ready(function() {
        document.getElementById("searchwhat").value = "";
    });
    $(document).ready(function() {
        document.getElementById("searchwhere").value = "";
    }); 
</script>

</head>

<body>
    <div id="search" style="margin-top: -8px">
        <?php echo form_open('home_controller/search'); ?>
        <div id="searchcontents" style="margin-top: -78px">
            <div id="logo">
                <h3><a href="<?php echo base_url() ?>" style="color: #000"><span style="font-weight: normal">Rwanda <br /> Business <br /> Directory</span> </a></h3>
            </div>
            <?php echo form_input(array('name' => 'q', 'id' => 'searchwhat', 'placeHolder' => 'What are you looking for? e.g. Hilton', 'value' => $search_terms, 'class' => 'searchfield')); ?>
            <?php echo form_input(array('name' => 'r', 'id' => 'searchwhere', 'placeHolder' => 'Where is it located? e.g. Kigali', 'value' => $search_terms2, 'class' => 'searchfield')); ?>
            <?php echo form_submit(array('name' => 'search', 'value' => 'SEARCH', 'id' => 'submitsearch')); ?>
    <br />
    <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

    <span id="alotofcrap">The Official Online Business Directory</span> 
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



