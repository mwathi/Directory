<div id="view_content">
    <a class="action_button" id="new_sponsor" href="<?php echo site_url("sponsored_links/add"); ?>">New Sponsored Link</a>
    <div align="center">  
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
            </tr>
                    <?php
                    foreach($sponsors as $sponsor_data){?>
                        <tr>                                                                                               
                        <td><?php echo $sponsor_data -> Name ?></td>
                        <td><?php echo $sponsor_data -> Description ?></td>
                        <td><?php echo $sponsor_data -> Link ?></td>                        
                        <td><a href="<?php echo base_url()."sponsored_links/delete/".$sponsor_data -> id ?>" onclick="return confirm('Are you sure you want to delete this link?')" >Delete</a></td>
                        <td><a href="<?php echo base_url()."sponsored_links/edit_link/".$sponsor_data ->id ?>">Edit</a></td>
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
