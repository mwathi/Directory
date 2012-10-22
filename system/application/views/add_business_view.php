<?php
if (isset($business)) {
    $business_name = $business -> Business_name;
    $city = $business -> City;
    $coordinate = $business -> Coordinate;
    $category = $business -> Category;
    $building = $business -> Building;
    $floor = $business -> Floor;
    $road = $business -> Road;
    $box = $business -> Box;
    $telephone = $business -> Telephone;
    $fax = $business -> Fax;
    $mobile = $business -> Mobile;
    $email = $business -> Email;
    $website = $business -> Website;
    $business_id = $business -> id;
    $company_information = $business -> Company_information;
    $getting_there = $business -> Getting_there;
    $products_services = $business -> Products_services;
} else {
    $business_name = "";
    $city = "";
    $coordinate = "";
    $category = "";
    $business_id = "";
    $website = "";
    $floor = "";
    $building = "";
    $road = "";
    $box = "";
    $telephone = "";
    $fax = "";
    $mobile = "";
    $email = "";
    $company_information = "";
    $getting_there = "";
    $products_services = "";
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

            $data_search = array('name' => 'business', 'value' => $business_name, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

        <tr>
            <td>Coordinates</td>
            <td><?php

            $data_search = array('name' => 'coordinates', 'value' => $coordinate, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>
        <tr>
            <td>City</td>
            <td><select name="city" id="city" class="othertext">
                <option value="0" selected>Select City</option>
                <?php
                foreach ($city_data as $city_ids) {
                    echo "<option selected value='$city_ids->id'>$city_ids->City_name</option>";
                }
                ?>
            </select>
            </td>
        </tr>
        <tr>
            <td>Category</td>
            <td><select name="category" id="category" class="othertext">
                <option value="0" selected>Select Category</option>
                <?php
                foreach ($category_data as $category_ids) {
                    echo "<option selected value='$category_ids->id'>$category_ids->Category_name</option>";
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Building</td>
            <td><?php

            $data_search = array('name' => 'building', 'value' => $building, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Floor</td>
            <td><?php

            $data_search = array('name' => 'floor', 'value' => $floor, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Road</td>
            <td><?php

            $data_search = array('name' => 'road', 'value' => $road, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Box</td>
            <td><?php

            $data_search = array('name' => 'box', 'value' => $box, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Telephone</td>
            <td><?php

            $data_search = array('name' => 'telephone', 'value' => $telephone, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Fax</td>
            <td><?php

            $data_search = array('name' => 'fax', 'value' => $fax, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Mobile</td>
            <td><?php

            $data_search = array('name' => 'mobile', 'value' => $mobile, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Email</td>
            <td><?php

            $data_search = array('name' => 'email', 'value' => $email, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Website</td>
            <td><?php

            $data_search = array('name' => 'website', 'value' => $website, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>
        <tr>
            <td>Company Information</td>
            <td><?php

            $data_search = array('name' => 'company_information', 'value' => $company_information, 'class' => 'othertext');
            echo form_textarea($data_search);
            ?></td>
        </tr>

<tr>
            <td>Getting There</td>
            <td><?php

            $data_search = array('name' => 'getting_there', 'value' => $getting_there, 'class' => 'othertext');
            echo form_textarea($data_search);
            ?></td>
        </tr>

<tr>
            <td>Products and Services</td>
            <td><?php

            $data_search = array('name' => 'products_services', 'value' => $products_services, 'class' => 'othertext');
            echo form_textarea($data_search);
            ?></td>
        </tr>


        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button" style="width: 100px; height: 30px; font-size: 13px"></td>
        </tr>
    </table>
    </form>
    </div>