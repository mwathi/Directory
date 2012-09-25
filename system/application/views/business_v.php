<div id="view_content">
    <a class="action_button" id="new_business" href="<?php echo  site_url("business_management/add");?>">New Business</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>');
        ?>
        <div>
        <table class="reporttable">
            <tr class="yellow">
                <th>Business</th>
                <th>City</th>
                <th>Coordinate</th>
                <th>Category</th>
            </tr>
                    <?php
                    foreach($business_details as $business_data){?>
                        <tr>                                                                        
                        <td><?php echo $business_data['Business'] ?></td>                      
                        <td><?php echo $business_data['City'] ?></td>
                        <td><?php echo $business_data['Coordinate'] ?></td>
                        <td><?php echo $business_data['Category'] ?></td>
                        <td><a href="<?php echo base_url()."Business_Management/delete/".$business_data['id'] ?>" onclick="return confirm("Are you sure you want to delete this business?")" >Delete</a></td>
                        <td><a href="<?php echo base_url()."Business_Management/edit_business/".$business_data['id'] ?>">Edit</a></td>
                        </tr>
                        <?php
                    }
                    ?>
        </table>
    </div>

    </div>

</div>
