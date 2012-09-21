<script>
    $(document).ready(function() {
        $("#entry_form").dialog({
            height : 250,
            width : 500,
            modal : true,
            autoOpen : false
        });
        $("#new_category").click(function(){ 
            $("#entry_form").dialog("open");
        });
    });

</script>
<div id="view_content">
    <a class="action_button" id="new_category">New Category</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>');
        echo $this -> table -> generate($category_details);
        ?>
    </div>
<div id="entry_form" title="New Category">
    <?php
    $attributes = array('class' => 'input_form');
    echo form_open('category_management/save', $attributes);

    ?>
    <table>
        <tr>
            <td>Category Name</td>
            <td><input type="text" name="category_name" /></td>
        </tr>

        <tr>
            <td>Description</label></td>
            <td><input type="text" name="description" /></td>
        </tr>

        <tr>
            <td><input name="submit" type="submit" value="Save Category" class="button"></td>
        </tr>
    </table>
    </form>
</div>
</div>
