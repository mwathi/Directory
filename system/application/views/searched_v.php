  
<div id="searchresults">
      <div style="float: left; margin-left: -14%">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="206" height="712" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>  
<?php if ( ! is_null($results)): ?>
    <?php if (count($results)): ?>
        
        <p>&nbsp;&nbsp;&nbsp;&nbsp;Showing search results for '<?php echo $search_terms || $search_terms2; ?>' (<?php echo $first_result; ?>&ndash;<?php echo $last_result; ?> of <?php echo $total_results; ?>):</p>
        <div class="pagination">
        <?php echo $this -> pagination -> create_links(); ?>
        </div>
        <div id="uniqueresult" style="margin-left: 100px">
        <ul>
        <?php $i = 1; foreach ($results as $result): ?>
            <li>
                <?php 
                if($result -> Allowed == 0){?>
                <div id="product_logo_image">
                    <img src="<?php echo base_url().'system/Images/'.$result->Name.'.jpg' ?>" style="width: 50px; height: 50px"/>
                </div>
                <?php }
                else{}
                ?>                   
                <h4><?php echo $i . ". ". search_highlight($result -> Name, $search_terms || $search_terms2); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url()."home_controller/moreInfoSearch/".$result->Name ?>"><u>More Information</u></a></h4>                
                <span><?php echo $result -> Products; ?></span><br/>
                <span style="font-style: italic; font-weight: bold"><?php echo $result -> Road; ?>,<?php echo search_extract($result -> Location, $search_terms || $search_terms2); ?><br /></span>               
            </li>
            <hr />
        <?php $i++; endforeach ?>
        </ul>
              <div style="float: right; margin-top: -740px; margin-right: -66%">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="206" height="712" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>  
        </div>
        <div class="pagination">
        <?php echo $this -> pagination -> create_links(); ?>
        </div>
    <?php else: ?>
        <p><em>There are no results for your query.</em></p>
    <?php endif ?>
<?php endif ?>

</div>