<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<?php echo form_open('personal_controller/saveSelf');echo validation_errors('
<p class="error">', '</p>
');
 ?>        
        <p class="othertext">
            <b>Full Name</b>
        </p>
        <input type="text" name="name" id="name" class="signininput"/>
        <p class="othertext">
            <b>Username</b>
        </p>
        <input type="text" name="username" id="username" class="signininput"/>
        <p style="font-family: calibri; font-size: 16px">
            <b>Password</b>
        </p>
        <input type="password" name="password" id="password" class="signininput"/>
        <p class="othertext">
            <b>Email Address</b>
        </p>
        <input type="text" name="email" id="email" class="signininput"/>
        <p class="othertext">
            <b>Email Address Confirmation</b>
        </p>
        <input type="text" name="email_confirm" id="email_confirm" class="signininput"/>
        <p>
            <input type="submit" name="signin" value="Log in" class="greenbutton"/>
        </p>
    </form>
</div>
    </body>
    </html>