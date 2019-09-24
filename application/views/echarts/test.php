<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Echarts-php test</title>
	<script src="assets/echarts/js/echarts.min.js"></script>
</head>
<body>

	<div id="container">
		<div id="myChart" style="width:100%;height:600px;"></div>
	</div>
    <script>
		var myChart = echarts.init(document.getElementById('myChart'),'dark'); 
		myChart.setOption((<?php echo $option;?>));
    </script>
</body>
</html>
