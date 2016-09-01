<?php include_once 'header.php'; ?>
<div class="home_header">
	<h1>Welcome <?php echo $details['name']; ?>, to reports</h1>
	<hr style="border-top: 1px solid #191616">
</div>
<div class="home_content">
	
	<input type="date" name="starting_date" id="starting_date">
	<input type="date" name="ending_date" id="ending_date">
	<input type="submit" value="Get me report!" id="report">
</div>


<script type="text/javascript">
	
	$("#report").click(function(){
		console.log("Welcome");
		var start = $('#starting_date').val();
		var end = $('#ending_date').val();
		console.log(start);
		console.log(end);

	});



</script>

<?php include_once 'footer.php'; ?>