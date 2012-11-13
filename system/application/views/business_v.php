<?php error_reporting(0);?>
<div id="view_content">
    <a class="action_button" id="new_business" href="<?php echo site_url("business_management/add"); ?>">New Business</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>'); ?>
        <div>
            <?php if (isset($pagination)):
?>
<div style="width:450px; margin:1 auto 60px auto" class="pagination">
    <?php echo $pagination; ?>
</div>
<?php endif; ?>
        <table class="businessreporttable">
            <tr class="yellow">
                <th>Business</th>

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
                <th>Getting There</th>
                <!--<th>Company Information</th>-->
                <th>Products and Services</th>
            </tr>
                    <?php
                    foreach($businesses as $business_data){?>
                        <tr>                                                                        
                        <td><?php echo $business_data -> Business_name ?></td>
     
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
                        <td><?php echo $business_data -> Getting_there ?></td>
                        <!--<td><?php echo $business_data -> Company_information ?></td>-->
                        <td><?php echo $business_data -> Products_services ?></td>
                        <td><a href="<?php echo base_url()."business_management/delete/".$business_data -> id ?>" onclick="return confirm('Are you sure you want to delete this business?')" >Delete</a></td>
                        <td><a href="<?php echo base_url()."business_management/edit_business/".$business_data ->id ?>">Edit</a></td>
                        
                        <?php
                        if($business_data -> Active == '1'){
                          echo '<td>
                                    <a href='.base_url()."business_management/approve/".$business_data ->id. '>
                                    Approve
                                    </a>
                                </td>';  
                        }
                        elseif($business_data -> Active == '0'){
                          echo '<td>
                                    <a href='.base_url()."business_management/disapprove/".$business_data ->id. '>
                                    Disapprove
                                    </a>
                                </td>';  
                        } 
                        
                        if($business_data -> Image_allowed == '1'){
                          echo '<td>
                                    <a href='.base_url()."business_management/allow_image/".$business_data ->id. '>
                                    Allow Image
                                    </a>
                                </td>';  
                        }
                        elseif($business_data -> Image_allowed == '0'){
                          echo '<td>
                                    <a href='.base_url()."business_management/disallow_image/".$business_data ->id. '>
                                    Disalow Image
                                    </a>
                                </td>';  
                        } 
                        ?>
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
