<?php
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('membership_management/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>

<div class="holder" style="width: 500px">
<table>
        <tr>
            <td>Membership Name</td>
            <td><?php

            $data_search = array('name' => 'membership_name', 'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Description</label></td>
            <td><?php

            $data_search = array('name' => 'description', 'class'=>'othertext');
            echo form_textarea($data_search);
            ?></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save Membership" class="button"></td>
        </tr>
    </table>
    </form>