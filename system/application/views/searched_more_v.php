<div id="moreinfosearchresults">
<?php if ( ! is_null($results)): ?>
    <?php if (count($results)): ?>
        <div id="uniqueresult">
        <ul>
        <?php foreach ($results as $result): ?>
            <li>                        
                <h4><?php echo search_highlight($result -> Name, $search_terms || $search_terms2); ?></h4><br />
                <span style="font-style: italic"><?php echo $result -> Category; ?><br /></span>
                <span style="font-style: italic; font-weight: bold"><?php echo $result -> Road; ?>,<?php echo search_extract($result -> Location, $search_terms || $search_terms2); ?><br /></span>
                P.O.BOX: <?php echo $result -> Box; ?>,&nbsp;<?php echo $result -> Building; ?><br />
                Telephone: <?php echo $result -> Telephone; ?><br />
                Fax: <?php echo $result -> Fax; ?><br />
                Mobile: <?php echo $result -> Mobile; ?><br />
                Email: <?php echo $result -> Email; ?> Website: <?php echo $result -> Website; ?></a><br />
                <div class="map">
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $result -> Coordinate?>&amp;num=1&amp;ie=UTF8&amp;ll=<?php echo $result -> Coordinate?>&amp;spn=0.00678,0.013078&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small>
                        <a href="https://maps.google.com/maps?q=<?php echo $result -> Coordinate?>&amp;num=1&amp;ie=UTF8&amp;ll=<?php echo $result -> Coordinate?>&amp;spn=0.00678,0.013078&amp;t=m&amp;z=14&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small></div>
                
            </li>
            <li>
                <u>Company Information</u><br />
                <?php echo $result -> Company_Information; ?>
            </li>
            <br />
            <br />
            <br />
            <li>
                <u>Getting There</u><br />
                <?php echo $result -> Getting_There; ?>
            </li>
            <br />
            <br />
            <br />
            <li>
                <u>Products and Services</u><br />
                <?php echo $result -> Products_Services; ?>
            </li>
        <?php endforeach ?>
        </ul>
        </div>
    <?php else: ?>
        <p><em>There are no results for your query.</em></p>
    <?php endif ?>
<?php endif ?>
</div>