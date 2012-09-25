<div id="view_content">
    <a class="action_button" id="new_category" href="<?php echo site_url("category_management/add"); ?>">New Category</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>'); ?>
        <div>
        <table class="reporttable">
            <tr class="yellow">
                <th>Category</th>
                <th>Coordinate</th>         
            </tr>
                    <?php
                    foreach($category_details as $category_data){?>
                        <tr>                                                                        
                        <td><?php echo $category_data -> Category_name ?></td>
                        <td><?php echo $category_data -> Description ?></td>
                        <td><a href="<?php echo base_url()."Category_Management/delete/".$category_data['id'] ?>">Delete</a></td>
                        <td><a href="<?php echo base_url()."Category_Management/edit_category/".$category_data['id'] ?>">Edit</a></td>
                        </tr>
                        <?php
                        }
                    ?>
        </table>
    </div>

    </div>

</div>
