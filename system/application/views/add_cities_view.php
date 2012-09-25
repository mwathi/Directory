<?php
if (isset($city)) {
    $city_name = $city -> City_name;
    $coordinate = $city -> Coordinate;
    $city_id = $city -> id;
} else {
    $city_name = "";
    $coordinate = "";
    $city_id = "";

}
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('city_management/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>

<input type="hidden" name="city_id" value = "<?php echo $city_id; ?>"/>
<div class="holder">
<table>
        <tr>
            <td>City Name</td>
            <td><?php

            $data_search = array('name' => 'city_name', 'value' => $city_name,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Coordinates</label></td>
            <td><?php

            $data_search = array('name' => 'coordinate', 'value' => $coordinate,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save City" class="button"></td>
        </tr>
    </table>
    </form>