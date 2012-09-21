<script>
    $(document).ready(function() {
        $("#entry_form").dialog({
            height : 250,
            width : 500,
            modal : true,
            autoOpen : false
        });
        $("#new_city").click(function(){ 
            $("#entry_form").dialog("open");
        });
    });

</script>
<div id="view_content">
    <a class="action_button" id="new_city">New City</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>');
        echo $this -> table -> generate($city_details);
        ?>
    </div>
<div id="entry_form" title="New City">
    <?php
    $attributes = array('class' => 'input_form');
    echo form_open('city_management/save', $attributes);

    ?>
    <table>
        <tr>
            <td>City Name</td>
            <td><input type="text" name="city_name" /></td>
        </tr>

        <tr>
            <td>Coordinates</label></td>
            <td><input type="text" name="coordinates" /></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save City" class="button"></td>
        </tr>
    </table>
    </form>
</div>
</div>
