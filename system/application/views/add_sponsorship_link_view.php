<?php
if (isset($sponsor)) {
    $linkname = $sponsor -> Name;
    $link = $sponsor -> Link;
    $description = $sponsor -> Description;
    $id = $sponsor -> id;
} else {
    $linkname = "";
    $link = "";
    $description = "";
    $id = "";
}
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('sponsored_links/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>
<input type="hidden" name="id" value = "<?php echo $id; ?>"/>
<div class="holder" style="width: 500px">
<table>
        <tr>
            <td>Name</td>
            <td><?php

            $data_search = array('name' => 'linkname', 'class'=>'othertext', 'value' => $linkname);
            echo form_input($data_search);
            ?></td>
        </tr>
        
           <tr>
            <td>Sponsored Link</td>
            <td><?php

            $data_search = array('name' => 'link', 'class'=>'othertext', 'value' => $link);
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Description</label></td>
            <td><?php

            $data_search = array('name' => 'description', 'class'=>'othertext', 'value' => $description);
            echo form_textarea($data_search);
            ?></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save Sponsored Link" class="greenbutton" style="width: 200px; height: 50px"></td>
        </tr>
    </table>
    </form>