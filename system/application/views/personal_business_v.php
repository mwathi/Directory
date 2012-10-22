<div id="view_content">
    <a class="action_button" id="new_business" href="<?php echo site_url("personal_controller/add"); ?>">New Business</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>'); ?>
        <div>
            <?php if (isset($pagination)):
?>
<div style="width:450px; margin:1 auto 60px auto" class="pagination">
    <?php echo $pagination; ?>
</div>
<?php endif; ?>
        <table class="reporttable">
            <tr class="yellow">
                <th>Business</th>
                <th>Category</th>
                <th>Owner</th>
                <th>Coordinate</th>
                <th>Building</th>
                <th>Floor</th>
                <th>Road</th>
                <th>Box</th>
                <th>Telephone</th>
                <th>Fax</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Website</th>
            </tr>
                    <?php
                    foreach($businesses as $business_data){?>
                        <tr>                                                                        
                        <td><?php echo $business_data -> Business_name ?></td>
                        <td><?php echo $business_data -> Categories -> Category_name ?></td>  
                        <td><?php echo $business_data -> Users -> Name ?></td>                                                
                        <td><?php echo $business_data -> Coordinate ?></td>                       
                        <td><?php echo $business_data -> Building ?></td>
                        <td><?php echo $business_data -> Floor ?></td>
                        <td><?php echo $business_data -> Road ?></td>
                        <td><?php echo $business_data -> Box ?></td>
                        <td><?php echo $business_data -> Telephone ?></td>
                        <td><?php echo $business_data -> Fax ?></td>
                        <td><?php echo $business_data -> Mobile ?></td>
                        <td><?php echo $business_data -> Email ?></td>
                        <td><?php echo $business_data -> Website ?></td> 
                        <td><a href="<?php echo base_url()."Business_Management/edit_business/".$business_data ->id ?>">Edit</a></td>
                        </tr>
                        <?php
                        }
                    ?>
        </table>
        <?php if (isset($pagination)):
?>
<div style="width:450px; margin:1 auto 60px auto" class="pagination">
    <div id="space"></div>
    <div id="space"></div>
    <?php echo $pagination; ?>
</div>
<?php endif; ?>
    </div>

    </div>

</div>
-