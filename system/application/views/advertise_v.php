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

    <div id="a_tabbar" style="width:600; height:250px;"></div>
    <div id='top'>
    <table>
    <tr>
    <td>
<br />Dimension : 800px x 150px
<br /><br />
<input name="addbusiness" type="button" value="Contact Sales" />
</td>
<td>
<img src="<?php echo base_url().'system/Images/topbanner.png' ?> ">
</td>
</tr>
    </table>
   
    </div>
    <div id='bottom'>
      <table>
    <tr>
    <td>
<br />Dimension : 800px x 150px
<br /><br />
<input name="addbusiness" type="button" value="Contact Sales" />
</td>
<td>
<img src="<?php echo base_url().'system/Images/bottombanner.png' ?> ">
</td>
</tr>
    </table>
</div>
<div id='featured'>
      <table>
    <tr>
    <td>
<br />Dimension : 200px x 342px
<br /><br />
<input name="addbusiness" type="button" value="Contact Sales" />
</td>
<td>
<img src="<?php echo base_url().'system/Images/featured.png' ?>">
</td>
</tr>
    </table>
</div>
<div id='sponsoredlinks'>
      <table>
    <tr>
    <td>
<br />Per unit period of time
<br /><br />
<input name="addbusiness" type="button" value="Contact Sales" />
</td>
<td>
<img src="<?php echo base_url().'system/Images/sponsored.png' ?>">
</td>
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

            tabbar.addTab("a1top","TOP","100px");
            tabbar.addTab("a2bottom","BOTTOM","100px");
            tabbar.addTab("a3featured","FEATURED","100px");
            tabbar.addTab("a4sponsored","SPONSORED LINKS","120px");

            
            tabbar.setContent("a1top","top");
            tabbar.setContent("a2bottom","bottom");
            tabbar.setContent("a3featured","featured");         
            tabbar.setContent("a4sponsored","sponsoredlinks");          
            
            tabbar.setTabActive("a1top")
</script>

        <div>
        <br /><br />
        <form name="contactform" method="post" action="send_form_email.php">
<table width="450px">
<tr>
 <td valign="top">
  <label for="first_name">First Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="last_name">Last Name *</label>
 </td>
 <td valign="top">
  <input  type="text" name="last_name" maxlength="50" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="email">Email Address *</label>
 </td>
 <td valign="top">
  <input  type="text" name="email" maxlength="80" size="30">
 </td>
</tr>
<tr>
 <td valign="top">
  <label for="telephone">Telephone Number</label>
 </td>
 <td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
 </td>
</tr>
<tr>
    <td>Select Advertisement</td>
    <td>
    <select name="advertise">
        <option value="top">Top Banner</option>
        <option value="bottom">Bottom Banner</option>
        <option value="featured">Featured Banner</option>
        <option value="sponsored">Sponsored Links</option>
    </select>
    </td>
</tr>
<tr>
 <td valign="top">
  <label for="comments">Comments *</label>
 </td>
 <td valign="top">
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 </td>
</tr>
<tr>
 <td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a>
 </td>
</tr>
</table>
</form>
        </div>  
            
         </div>
    <div>
    
    </div>
    </body>
</html>