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
<hr>
<div id="final_report"></div>
<script type="text/javascript">
	
	$("#report").click(function(){
		console.log("Welcome");
		var start = $('#starting_date').val();
		var end = $('#ending_date').val();
		$.ajax({
			type: "POST",
			url: "../app/get_report.php",
			data: {start_date : start, end_date : end},
			success: function(data){
				$('#final_report').html(data);
			}
		});

	});
</script>

<?php include_once 'footer.php'; ?>