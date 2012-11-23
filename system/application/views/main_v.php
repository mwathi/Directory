<div id="space"></div>
<div id="space"></div>
<div id="space"></div>
<div id="space"></div>
<div id="space"></div>
<div id="space"></div><div id="space"></div>
<div id="fb-root"></div>
<script>
	( function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id))
				return;
			js = d.createElement(s);
			js.id = id;
			js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=395161260549523";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
</script>
<div align="center">
	<div id="space"></div>
	<div id="loginbar">
	<div id="space"></div>
	<div id="space"></div>    
		<span class="loginbarother" id="loginbarother" style="margin-left: -25%">
		Select your business of choice from the list below &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;		
		
		<?php	
            if ($userstuff != NULL) {
                if ($userstuff != "matthew hawi") {
                ?>
                <a href="home_controller/advertise">Advertise with Us</a>&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url().'personal_controller/page'?>">Welcome <?php echo "<span id=userstuff>" . $userstuff . "</span>"; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <a href=<?php echo base_url().'home_controller/do_logout'?>>Logout</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
            }elseif($userstuff == "matthew hawi"){
                ?>
                <a href="<?php echo base_url().'business_management'?>">Welcome <?php echo "<span id=userstuff>" . $userstuff . "</span>"; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <a href=<?php echo base_url().'home_controller/do_logout'?>>Logout</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
            }
            } else {
        ?>
                <a href=<?php echo base_url().'login'?> id=loginlink> Rwanda Business Directory Log in </a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; 
                <a href=<?php echo base_url().'login'?> id=loginlink> Add Your Business </a> | </span>
                <?php
                }
		?>
    <div id="fbspace"></div>
    <div class="fb-like" data-href="http://rbd.exquisiteartcollections.com" data-send="false" data-width="4" data-show-faces="false" data-action="like" data-font="lucida grande"b style="margin-right: -60%; margin-top: -1.5%"></div>
	</div>
	<div id="space"></div>
	
	<div class="projects">
    <div class="projectad">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="206" height="712" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>    
		<div class="project">
			<div id="mike">
				<span>
					<ul>
						<?php
                        foreach ($categoryinformation as $categoryinfo) {
                            echo "<li> <a href='home_controller/search/$categoryinfo->Category_name'> " . $categoryinfo -> Category_name . "</a></li>";
                        }
						?>
						
					</ul> </span>
			</div>
			<div class="info">
				<h3 class="title">All Categories</h3>
				<p>
					<span></span>
				</p>
			</div>
		</div>

		<div class="project">

			<div id="mike">
				<span>
					<ul>
						<?php
                        foreach ($populars as $popularCategories) {
                            echo "<li> <a href='home_controller/search/$popularCategories->Category_name'> " . $popularCategories -> Category_name . "</a></li>";
                        }
						?>
					</ul> </span>
			</div>
			<div class="info">
				<h3 class="title">Popular Categories</h3>
				<p>
					<span></span><span></span
				</p>
			</div>
		</div>

		<div class="project">

			<div id="mike">
				<span>
					<ul>
						<?php
                        foreach ($latest as $latestBusinesses) {
                            echo "<li> <a href='home_controller/search/$latestBusinesses->Business_name'> " . $latestBusinesses->Business_name . "</a></li>";
                        }
						?>
					</ul> </span>
			</div>
			<div class="info">
				<h3 class="title">Latest Updates</h3>
				<p>
					<span></span><span></span
				</p>
			</div>
		</div>
    <div class="projectad">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="200" height="342" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>    

		<div class="project" style="width: 341px">
			<div id="mike" style="width: 339px">
				<span>
                    <ul>
                        <?php
                        foreach ($populars as $popularCategories) {
                            echo "<li> <a href='home_controller/search/$popularCategories->Category_name'> " . $popularCategories -> Category_name . "</a></li>";
                        }
                        ?>
                    </ul> </span>
			</div>

			<div class="info">
				<h3 class="title">Useful Links</h3>
				<p>
					<span></span><span></span
				</p>
			</div>
		</div>

		<div class="project" style="width: 310px">
			<div id="mike" style="width: 308px">
				<span>
                    <ul>
                        <?php
                        foreach ($sponsored as $sponsoredLinks) {
                            echo "<li> <a href='$sponsoredLinks->Link'> " . $sponsoredLinks -> Name . "</a></li>";
                        }
                        ?>
                    </ul> </span>
			</div>

			<div class="info">
				<h3 class="title">Sponsored Links</h3>
				<p>
					<span></span><span></span><span></span
				</p>
			</div>
		</div>

    <div class="projectad" style="margin-left: 8px">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="200" height="342" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>    

    <div class="project">
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab"> 
<param name="movie" value="<?php echo base_url().'system/sampleadd.swf'?>" />
<embed src="<?php echo base_url().'system/sampleadd.swf'?>" width="1245"  style="margin-left: -242px" height="100" name="test1" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
</object>
        </div>    

	</div>
</div>
