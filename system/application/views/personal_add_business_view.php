<?php
error_reporting(0);
if (isset($business)) {
    $business_name = $business -> Business_name;
    $city = $business -> City;
    $coordinate = $business -> Coordinate;

    $address = $business -> Address;
    $latitude = $business -> Latitude;
    $longitude = $business -> Longitude;

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
     $address = "";
    $latitude = "";
    $longitude = "";
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
echo form_open('personal_controller/save', $attributes);
echo validation_errors('
<p class="error">', '</p>
');

foreach ($error as $e) {
    echo $e;
};
?>

<head>
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'system/css/style.css' ?>" />
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="<?php echo base_url().'system/scripts/jquery-1.5.1.min.js' ?>"></script>
<script type="text/javascript" src="<?php echo base_url().'system/scripts/maps.js' ?>"></script>
</head>

<input type="hidden" name="business_id" value = "<?php echo $business_id; ?>"/>
<div class="holder" style="width: 500px; margin-left: 8%; margin-top: 5%">
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
            <td>City</label></td>
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
            <td>Category</label></td>
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
            <td>Building</label></td>
            <td><?php

            $data_search = array('name' => 'building', 'value' => $building, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Floor</label></td>
            <td><?php

            $data_search = array('name' => 'floor', 'value' => $floor, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Road</label></td>
            <td><?php

            $data_search = array('name' => 'road', 'value' => $road, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Box</label></td>
            <td><?php

            $data_search = array('name' => 'box', 'value' => $box, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Telephone</label></td>
            <td><?php

            $data_search = array('name' => 'telephone', 'value' => $telephone, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Fax</label></td>
            <td><?php

            $data_search = array('name' => 'fax', 'value' => $fax, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Mobile</label></td>
            <td><?php

            $data_search = array('name' => 'mobile', 'value' => $mobile, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Email</label></td>
            <td><?php

            $data_search = array('name' => 'email', 'value' => $email, 'class' => 'othertext');
            echo form_input($data_search);
            ?></td>
        </tr>

<tr>
            <td>Website</label></td>
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
           <td>
             <p style="font-size: 12px">
    Please use these conventions in uploading your images:<br />
    1. Only .jpg and .jpeg allowed<br />
    2. The image name must be  the same as the name of the business for clarity eg for Hilton, Hilton.jpg
    </p>
           </td><td><input type="file" name="userfile"/></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button" style="width: 100px; height: 30px; font-size: 13px"></td>
        </tr>
    </table>
    </form>
    </div>
    <div id="container_demo" style="margin-top: -900px; margin-bottom: 500px; margin-left: 50%">
    <form class="form_list">
        <fieldset>
            <legend>
                Map: User pin-pointed Coordinates:
            </legend>

            <ul>
                <li>
                <li>
                    <font size="1" color="#666666"> Locate your physical address by using the controls on the left side of the map. You can zoom in to get a closer view of the location by dragging the controls (To the left of Map) upwards and vice versa</font>
                </li>
                    <label for="address">Address</label>
                    <?php $data_search = array('name' => 'address', 'value' => $address, 'class' => 'othertext', 'id' => 'address');
                        echo form_input($data_search);
                    ?>
                </li>

                <li>
                    <label for="lat">Latitude</label>
                    <?php $data_search = array('name' => 'lat', 'value' => $lat, 'class' => 'othertext', 'id' => 'lat');
                        echo form_input($data_search);
                       ?>
                </li>

                <li>
                    <label for="lng">Longitude</label>
                    <?php $data_search = array('name' => 'lng', 'value' => $lng, 'class' => 'othertext', 'id' => 'lng');
                        echo form_input($data_search);
                    ?>
                </li>
            </ul>
        </fieldset>
    </form>

    <h1>Drag the pin to automatically determine addresses and coordinates</h1>
    <div id="map"></div>
    <h1><font color="#D6D6D6">powered by <a href="http://www.macrosource.co.ke">macrosource</a></font></h1>
</div>
