<?php
	$page_name="Contact";
	include_once("includes/header.php");
?>
<div class="page_head_big">
	<div>
	<h2>CONTACT US</h2>
	<p>Get in touch if you would like to know more about our initiatives or offer helpful suggestions</p>
	</div>
</div>
<div class="contact_form">
	
	<form>
		<p><input type="text" placeholder="NAME"></p>
		<p><input type="text" placeholder="EMAIL"></p>
		<p><input type="text" placeholder="SUBJECT"></p>
		<p><textarea></textarea></p>
		<p class="submit"><input type="submit" value="SEND"></p>
	</form>
</div>

<?php 
	include_once("includes/footer.php");
?>