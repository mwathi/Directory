<title><?php echo $title; ?></title>
<?php
    foreach ($error as $e) {
        echo $e;
    };
 ?>

<?php echo form_open_multipart('personal_controller/do_upload'); ?>

<input type="file" name="userfile"/>

<br />
<br />
    <pre>
    Please use the follow these conventions in uploading your images:
    1. Only .jpg and .jpeg allowed
    2. The image name must be  the same as the name of the business for clarity eg for Hilton, Hilton.jpg
    
    </pre>
<input type="submit" value="Upload" class="button"/>

</form>
