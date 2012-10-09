<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<link href="<?php echo base_url().'system/CSS/style.css'?>" type="text/css" rel="stylesheet"/>

<?php
    if (isset($script_urls)) {
        foreach ($script_urls as $script_url) {
            echo "<script src=\"" . $script_url . "\" type=\"text/javascript\"></script>";
        }
    }
?>

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
            echo "<link href=\"" . base_url() . "system/CSS/" . $style . "\" type=\"text/css\" rel=\"stylesheet\"></link>";
        }
    }
?> 
</head>
<body>
<div id="signinholder">
<form action="<?php echo base_url(); ?>login/process" method="post" name="process">
		<p class="signintitle">
			Sign in
			<div id="hmsholder">
				<a href="<?php echo base_url()?>">Rwanda Business Directory</a>
			</div>
		</p>
		<p> <?php if(! is_null($msg)) echo $msg;?>       </p>
		<p class="othertext">
			<b>Username</b>
		</p>
		<input type="text" name="username" id="username" class="signininput"/>
		<p style="font-family: calibri; font-size: 16px">
			<b>Password</b>
		</p>
		<input type="password" name="password" id="password" class="signininput"/>
		<p>
			<input type="submit" name="signin" value="Log in" class="greenbutton"/>
		</p>
	</form>
</div>
    </body>
    </html>