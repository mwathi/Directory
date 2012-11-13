<?php
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('sponsored_links/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>

<div class="holder" style="width: 500px">
<table>
        <tr>
            <td>Name</td>
            <td><?php

            $data_search = array('name' => 'name', 'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>
        
           <tr>
            <td>Sponsored Link</td>
            <td><?php

            $data_search = array('name' => 'link', 'class'=>'othertext');
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
            <td><input name="submit" type="submit" value="Save Sponsored Link" class="greenbutton" style="width: 200px; height: 50px"></td>
        </tr>
    </table>
    </form>