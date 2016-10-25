<?php
	$page_name="Idea Farm";
	include_once("includes/header.php");
?>
<div class="page_head"><h1><img src="content/ideafarm_icon2.png"/>IDEA FARM</h1><span class="float_button_top"><a>POST AND IDEA</a></span></div>
<div>
	<div class="search_filter">
		<span class="filter_text">FILTER BY</span>
		<span class="filter_option">
		<select>
			<option>FIELD</option>
			<option>AGRICULTURE</option>
			<option>ARTS</option>
			<option>INDUSTRY</option>
		</select>
		</span>
		<span class="filter_option">
		<select>
			<option>PROJECT LENGTH</option>
			<option>AGRICULTURE</option>
			<option>ARTS</option>
			<option>INDUSTRY</option>
		</select>
		</span>
		<span class="filter_option">
			<input type="text" name="search" value="SEARCH"/>
		</span>
	</div>
	<div class="search_results">
		<div class="result some-idea">
			<div class="result_summ">
				<h2>&nbsp;&nbsp; HOW MIGHT I...</h2>
				<p>Some sort of idea which is so dope that you want to get on top of it.</p>
			</div>
			<div class="result_link">
				<p class="result_link"><a class="result_link">VIEW MORE</a></p>
			</div>
		</div>
		<div class="result some-idea">
			<div class="result_summ">
				<h2>&nbsp;&nbsp; HOW MIGHT I...</h2>
				<p>Some sort of idea which is so dope that you want to get on top of it.</p>
			</div>
			<div class="result_link">
				<p class="result_link"><a class="result_link">VIEW MORE</a></p>
			</div>
		</div>
		<div class="result some-idea">
			<div class="result_summ">
				<h2>&nbsp;&nbsp; HOW MIGHT I...</h2>
				<p>Some sort of idea which is so dope that you want to get on top of it.</p>
			</div>
			<div class="result_link">
				<p class="result_link"><a class="result_link">VIEW MORE</a></p>
			</div>
		</div>
	</div>
</div>

<?php 
	include_once("includes/footer.php");
?>