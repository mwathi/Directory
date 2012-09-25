<?php
if (isset($business)) {
    $business_name = $business -> Business_name;
    $city = $business -> City;
    $coordinate = $business -> Coordinate;
    $category = $business -> Category;
    $business_id = $business -> id;
} else {
    $business_name = "";
    $city = "";
    $coordinate = "";
    $category = "";
    $business_id = "";

}
$attributes = array('enctype' => 'multipart/form-data');
echo form_open('business_management/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');
?>

<input type="hidden" name="business_id" value = "<?php echo $business_id; ?>"/>
<div class="holder">
    <table>
        <tr class="yellow">
        <th class="" colspan="2">Business Details</th>
    </tr>
        <tr>
            <td>Business Name</td>
            <td class="othertext"><?php

            $data_search = array('name' => 'business', 'value' => $business_name,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Coordinates</label></td>
            <td><?php

            $data_search = array('name' => 'coordinates', 'value' => $coordinate,'class'=>'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>
        <tr>
            <td>City</label></td>
            <td><select name="city" id="city" class="othertext">
                <option value="0" selected>Select City</option>
                <?php
                foreach ($city_data as $city_ids) {
                    echo "<option value='$city_ids->id'>$city_ids->City_name</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Category</label></td>
            <td><select name="category" id="category" class="othertext">
                <option value="0" selected>Select Category</option>
                <?php
                foreach ($category_data as $category_ids) {
                    echo "<option value='$category_ids->id'>$category_ids->Category_name</option>";
                }
                ?>
            </select></td>
        </tr>



        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button" style="width: 100px; height: 30px; font-size: 13px"></td>
        </tr>
    </table>
    </form>
    </div>