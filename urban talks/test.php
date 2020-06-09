<?php?>

<!DOCTYPE html>
<html>
<head>
	<title>trial1</title>

	<style type="text/css">
		
		.status {

			width: 300px;
			height: 300px;
			border: 1px solid red;
			padding: 10px;
			display: inline-flex;
			overflow-x: auto;
			overflow-y: hidden;
		}

		.status .status_card {

			width: 100%;
			height: 200px;
			margin-left: 20px;
		}
	</style>
</head>
<body>

	<div class="status" id="status">
		
		<div class="status_card" style="background-color: blue;">
		</div>

      <div class="status_card" style="background-color: black;">
      </div>


	</div>



<script type="text/javascript">
	
	var status = document.getElementById('status');
	var status_card = document.getElementsByClassName('status_card');
	var j = -1;

	

	start_scrolling();

	function start_scrolling() {


		for (var i = 0; i < status_card.length; i++) {
		
			status_card[i].style.display = 'none';
		}

		if (j == status_card.length) {

			j == -1;
		}

		j++;

		status_card[j].style.display = 'block';

		alert(j);

		
        setInterval(start_scrolling(), 5000);
	}

</script>

</body>
</html>