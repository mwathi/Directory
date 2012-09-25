<div id="view_content">
    <a class="action_button" id="new_city" href="<?php echo  site_url("city_management/add");?>">New City</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>');
        ?>
        <div>
        <table class="reporttable">
            <tr class="yellow">
                <th>City</th>
                <th>Coordinate</th>         
            </tr>
                    <?php
                    foreach($city_details as $city_data){?>
                        <tr>                                                                        
                        <td><?php echo $city_data -> City_name ?></td>
                        <td><?php echo $city_data -> Coordinate ?></td>
                        <td><a href="<?php echo base_url()."City_Management/delete/".$city_data['id'] ?>" onclick="return confirm("Are you sure you want to delete this business?")" >Delete</a></td>
                        <td><a href="<?php echo base_url()."City_Management/edit_city/".$city_data['id'] ?>">Edit</a></td>
                        </tr>
                        <?php
                    }
                    ?>
        </table>
    </div>

    </div>

</div>
