<html>
<head>
<title><?php echo $title; ?></title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php
error_reporting(0);
 foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p><?php echo anchor('personal_controller/do_upload', 'Upload Another File!'); ?></p>

</body>
</html>