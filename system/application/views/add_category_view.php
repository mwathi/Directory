<?php
if (isset($category)) {
    $category_name = $category -> Category_name;
    $description = $category -> Description;
    $category_id = $category -> id;
} else {
    $category_name = "";
    $description = "";
    $category_id = "";

}
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('category_management/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>

<input type="hidden" name="category_id" value = "<?php echo $category_id; ?>"/>
<div class="holder">
<table>
        <tr>
            <td>Category Name</td>
            <td><?php

            $data_search = array('name' => 'category_name', 'value' => $category_name,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Description</label></td>
            <td><?php

            $data_search = array('name' => 'description', 'value' => $description,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button"></td>
        </tr>
    </table>
    </form>