
<div id="space"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=395161260549523";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div align="center">
	<div id="space"></div>
	<div id="loginbar">
	    
		<span class="loginbarother" id="loginbarother">
		Select your business of choice from the list below &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;		
		Advertise with Us&nbsp;&nbsp;&nbsp;&nbsp; | &nbsp;&nbsp;&nbsp;&nbsp;
		<?php
            if ($userstuff != NULL) {
                ?>
                <a href="<?php echo base_url().'personal_controller/page'?>">Welcome <?php echo "<span id=userstuff>" .$userstuff . "</span>"; ?></a> &nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp; <a href=<?php echo base_url().'home_controller/do_logout'?>>Logout</a>
            <?php
            } else {?>
                <a href=<?php echo base_url().'login'?> id=loginlink> Rwanda Business Directory Log in </a> | </span>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <?php
            }
		?>
    
    <div class="fb-like" data-href="http://localhost/directory/home_controller" data-send="false" data-width="45" data-show-faces="false" data-action="recommend" data-font="lucida grande"></div>
	</div>
	<div id="space"></div>
	<div class="projects">

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
                        foreach ($populars as $popularCategories) {
                            echo "<li> <a href='home_controller/search/$popularCategories->Category_name'> " . $popularCategories -> Category_name . "</a></li>";
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

		<div class="project">
			<div id="mike">
				<a style="cursor: pointer"><img src="http://www.nineliondesign.com/images/work/feiner_thumb.jpg" width="270" height="270"></a>
			</div>

			<div class="info">
				<h3 class="title">Offers</h3>
				<p>
					<span></span><span></span
				</p>
			</div>
		</div>

		<div class="project">
			<div id="mike">
				<a style="cursor: pointer"> <img src="<?php echo base_url().'system/Images/travelrwanda.jpg'?>"/> </a>
			</div>

			<div class="info">
				<h3 class="title">Shopping Malls</h3>
				<p>
					<span></span><span></span><span></span
				</p>
			</div>
		</div>

	</div>
</div>
