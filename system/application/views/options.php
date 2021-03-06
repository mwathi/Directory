<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<title>Promote your business</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="title" content="Samples" />
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="/system/CSS/style.css" type="text/css" media="screen" />

	</head>
	<body>
		<div class="content">
			<link rel="STYLESHEET" type="text/css" href="/system/CSS/dhtmlxtabbar.css">
			<script  src="/system/Scripts/dhtmlxcommon.js"></script>
			<script  src="/system/Scripts/dhtmlxtabbar.js"></script>

			<div id="a_tabbar" style="width:100%; height:420px;"></div>
			<div id='bronze'>
				<table>
					<tr>
						<td><img src="<?php echo base_url().'system/Images/free.png' ?>">
						<br />
						Business Name, Category, Location (near by)
						Google Map!
						<input name="addbusiness" type="button" value="Free Listing" />
						</td>
						<td><img src="<?php echo base_url().'system/Images/bronzelisting.png' ?>"></td>
					</tr>
				</table>

			</div>
			<div id='silver'>
				<table>
					<tr>
						<td>
						<br />
						Business Name, Category, Location (near by)
						Google Map!
						<input name="addbusiness" type="button" value="Silver Listing" />
						</td>
						<td><img src="<?php echo base_url().'system/Images/Silverlisting.png' ?>"></td>
					</tr>
				</table>
			</div>
			<div id='gold'>
				<table>
					<tr>
						<td>
						<br />
						Business Name, Category, Location (near by)
						Google Map!
						<input name="addbusiness" type="button" value="Gold Listing" />
						</td>
						<td><img src="<?php echo base_url().'system/Images/Goldlisting.png' ?>"></td>
					</tr>
				</table>
			</div>
			<div id='diamond'>
				<table>
					<tr>
						<td>
						<br />
						Business Name, Category, Location (near by)
						Google Map!
						<input name="addbusiness" type="button" value="Diamond Listing" />
						</td>
						<td><img src="<?php echo base_url().'system/Images/Diamondlisting.png' ?>"></td>
					</tr>
				</table>
			</div>
			<br/>
			<input type='Button' value='Prev' onclick='tabbar.goToPrevTab()'>
			<input type='Button' onclick='alert(tabbar.getActiveTab());' value='Current'>
			<input type='Button' value='Next' onclick='tabbar.goToNextTab()'>
			<!--
			<input type='Button' value='Set active tab' onclick='tabbar.setTabActive(this.nextSibling.value)'><select>
			<option value="a1">a1</option>
			<option value="a2">a2</option>
			<option value="a3">a3</option>
			<option value="a4">a4</option>
			<option value="a5">a5</option>
			</select>-->

			<script>
            tabbar=new dhtmlXTabBar("a_tabbar","top");
            tabbar.setSkin('dhx_skyblue');
            tabbar.setImagePath("<?php echo base_url().'system/Images' ?>/");
	       tabbar.addTab("a1bronze","BRONZE","100px");
	       tabbar.addTab("a2silver","SILVER","100px");
	       tabbar.addTab("a3gold","GOLD","100px");
	       tabbar.addTab("a4diamond","DIAMOND","100px");
	       tabbar.setContent("a1bronze","bronze");
	       tabbar.setContent("a2silver","silver");
	       tabbar.setContent("a3gold","gold");
	       tabbar.setContent("a4diamond","diamond");
	       tabbar.setTabActive("a1bronze")
			</script>

		</div>

		<div>
			<br />
			<br />
			<form name="contactform" method="post" action="send_form_email.php">
				<table width="450px">
					<tr>
						<td valign="top"><label for="first_name">First Name *</label></td>
						<td valign="top">
						<input  type="text" name="first_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top"><label for="last_name">Last Name *</label></td>
						<td valign="top">
						<input  type="text" name="last_name" maxlength="50" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top"><label for="email">Email Address *</label></td>
						<td valign="top">
						<input  type="text" name="email" maxlength="80" size="30">
						</td>
					</tr>
					<tr>
						<td valign="top"><label for="telephone">Telephone Number</label></td>
						<td valign="top">
						<input  type="text" name="telephone" maxlength="30" size="30">
						</td>
					</tr>
					<tr>
						<td>Promote your Business</td>
						<td>
						<select name="promote">
							<option value="silver">Silver</option>
							<option value="gold">Gold</option>
							<option value="diamond">Diamond</option>							
						</select></td>
					</tr>
					<tr>
						<td valign="top"><label for="comments">Comments *</label></td>
						<td valign="top">						<textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center">
						<input type="submit" value="Submit">
						<a href="http://www.freecontactform.com/email_form.php">Email Form</a></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="source">
	</body>
</html>