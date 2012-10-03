<div>
<?php if ( ! is_null($results)): ?>
    <?php if (count($results)): ?>
        
        <p>Showing search results for '<?php echo $search_terms; ?>' (<?php echo $first_result; ?>&ndash;<?php echo $last_result; ?> of <?php echo $total_results; ?>):</p>
        
        <ul>
        <?php foreach ($results as $result): ?>
            <li><a href="<?php echo $result -> Category; ?>"><?php echo search_highlight($result -> Name, $search_terms); ?></a><br /><?php echo search_extract($result -> Location, $search_terms); ?></li>
        <?php endforeach ?>
        </ul>
        
        <?php echo $this -> pagination -> create_links(); ?>
        
    <?php else: ?>
        <p><em>There are no results for your query.</em></p>
    <?php endif ?>
<?php endif ?>
</div>