<div id="view_content">
    <a class="action_button" id="new_category" href="<?php echo site_url("category_management/add"); ?>">New Category</a>
    <div align="center">
        <?php echo validation_errors('<p class="error">', '</p>'); ?>
        <div>
            <div>
            <?php if (isset($pagination)):
?>
				<div style="width:450px" class="pagination">
					<?php echo $pagination;
					?>
				</div>
				<?php endif;
				?>
        <table class="reporttable">
            <tr class="yellow">
                <th>Category</th>
                <th>Coordinate</th>         
            </tr>
                    <?php
                    foreach($categories as $category_data){?>
                        <tr>                                                                        
                        <td><?php echo $category_data -> Category_name ?></td>
                        <td><?php echo $category_data -> Description ?></td>
                        <td><a href="<?php echo base_url()."category_management/delete/".$category_data['id'] ?>">Delete</a></td>
                        <td><a href="<?php echo base_url()."category_management/edit_category/".$category_data['id'] ?>">Edit</a></td>
                        </tr>
                        <?php
                        }
                    ?>
        </table><?php if (isset($pagination)):
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
