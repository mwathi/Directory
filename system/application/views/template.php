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
$this -> load -> helper(array('form','search'));
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
    <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/solveitservicesadvert.swf'?>" />
<embed src="<?php echo base_url().'system/solveitservicesadvert.swf'?>" width="1030" height="80" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
</div>
<body>
    <div id="search">
        <?php echo form_open('Home_Controller/search');?>
        <div id="searchcontents">
            <div id="logo">
                <h3><a href="<?php echo base_url() ?>" style="color: #000"><span style="font-weight: normal">Rwanda Business Directory</span> </a></h3>
            </div>
            <?php echo form_input(array('name' => 'q', 'id' => 'searchwhat','placeHolder' => 'What are you looking for? e.g. Hilton', 'value' => $search_terms, 'class' => 'searchfield')); ?>
            <input type="text" id="searchwhere" name="searchwhere" placeholder="Where is it located? e.g. Kigali" class="searchfield"/>     
            <?php echo form_submit(array('name'=>'search','value'=>'FIND','id'=>'submitsearch')); ?>
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



