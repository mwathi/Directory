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
<div id="header">
    <div id="menu-container">
        <div id="space"></div>
        <h3><a href="<?php echo base_url() ?>"><span style="color: red">R</span><span style="color: yellow">w</span><span style="color: green">a</span><span id="rwanda">nda Business Directory</span> </a></h3>
    </div>
</div>
<body>
    <div id="search">
        <div id="searchcontents">
            <input type="text" id="searchwhat" name="searchwhat" placeholder="What are you looking for?" class="searchfield"/>
            <input type="text" id="searchwhere" name="searchwhere" placeholder="Where is it located?" class="searchfield"/>
            <input type="submit" value="FIND" id="submitsearch" name="submit"/>
        </div>
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



