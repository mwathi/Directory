<script>
    $(document).ready(function() {
        $("#entry_form").dialog({
            height : 350,
            width : 500,
            modal : true,
            autoOpen : false
        });
        $("#new_business").click(function(){ 
            $("#entry_form").dialog("open");
        });
    });

</script>
<div id="view_content">
    <a class="action_button" id="new_business">New Business</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>');
        echo $this -> table -> generate($business_details);
        ?>
    </div>
<div id="entry_form" title="New Business">
    <?php
    $attributes = array('class' => 'input_form');
    echo form_open('business_management/save', $attributes);

    ?>
    <table id="dialogtable">
        <tr>
            <td>Business Name</td>
            <td><input type="text" name="business" /></td>
        </tr>

        <tr>
            <td>Coordinates</label></td>
            <td><input type="text" name="coordinates" /></td>
        </tr>
        <tr>
            <td>City</label></td>
            <td><select name="city" id="city">
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
            <td><select name="category" id="category">
                <option value="0" selected>Select Category</option>
                <?php
                foreach ($category_data as $category_ids) {
                    echo "<option value='$category_ids->id'>$category_ids->Category_name</option>";
                }
                ?>
            </select></td>
        </tr>



        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button"></td>
        </tr>
    </table>
    </form>
</div>
</div>
