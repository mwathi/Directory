<div id="moreinfosearchresults">
<?php if ( ! is_null($results)): ?>
    <?php if (count($results)): ?>
        <div id="uniqueresult">
        <ul>
        <?php foreach ($results as $result): ?>
            <li>                        
                <h4><?php echo search_highlight($result -> Name, $search_terms || $search_terms2); ?></h4><br />
                 <div id="product_logo_image">
                    <img src="<?php echo base_url().'system/Images/'.$result->Name.'.jpg' ?>" style="width: 150px; height: 150px"/>
                </div>
                <div style="height: 50px"></div>
                <span style="font-style: italic"><?php echo $result -> Category; ?><br /></span>
                
                <span style="font-style: italic; font-weight: bold"><?php echo $result -> Road; ?>,
                    <?php echo search_extract($result -> Location, $search_terms || $search_terms2); ?><br /></span>
                    
                <?php 
                //stuff to display permembership
                if($result -> Membership >= 0){
                    ////display if 'bronze'
                 ?>                    
                    Telephone: <?php echo $result -> Telephone; ?><br />
                    Mobile: <?php echo $result -> Mobile; ?><br />     
                <?
                }

                if($result -> Membership >= 1){
                //display if silver or more
                ?>
                P.O.BOX: <?php echo $result -> Box; ?>,&nbsp;<?php echo $result -> Building; ?><br />
                Fax: <?php echo $result -> Fax; ?><br />                               
                Email: <?php echo $result -> Email; ?>                
                Website: <?php echo $result -> Website; ?></a><br />
                
                <?php
                }//end if
                ?>
             <?php echo "Dave is a ".$result->Latitude;?>
                <div class="map">
               
                <p></p>
                    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo $result -> Latitude .",". $result -> Longitude?>&amp;num=1&amp;ie=UTF8&amp;ll=<?php echo $result -> Latitude .",". $result -> Longitude?>&amp;spn=0.00678,0.013078&amp;t=m&amp;z=9&amp;iwloc=A&amp;output=embed"></iframe><br />
                    <small>
                        <a href="https://maps.google.com/maps?q=<?php echo $result -> Latitude .",". $result -> Longitude?>&amp;num=1&amp;ie=UTF8&amp;ll=<?php echo $result -> Latitude .",". $result -> Longitude?>&amp;spn=0.00678,0.013078&amp;t=m&amp;z=9&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a>
                    </small>
                </div>
                
            </li>
            <?php
            if($result -> Membership >= 1){//silver or more
            ?>
            <li>
                <u>Company Information</u><br />
                <?php echo $result -> Company_Information; ?>
            </li>
            <br />
            <br />
            <br />
                 <?php
                }
                if($result -> Membership >= 3){//silver or more
            ?>
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
            
        <?php
        }
        endforeach
        ?>
        </ul>
        </div>
    <?php else: ?>
        <p><em>There are no results for your query.</em></p>
    <?php endif ?>
<?php endif ?>
</div>