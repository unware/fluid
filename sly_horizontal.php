<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Horizontal examples - Sly</title>
	<meta name="viewport" content="width=device-width">
<!--	<link rel="stylesheet" href="sly/normalize.css">
--><!--	<link rel="stylesheet" href="sly/font-awesome.css">
--><!--	<link rel="stylesheet" href="sly/ospb.css">
-->	<link rel="stylesheet" href="sly/horizontal.css">
<!--	<script src="sly/modernizr.js"></script>
--></head>
<body>

	<div class="pagespan container">
	
		<div class="wrap">
			

			<div class="frame" id="basic">
				<ul class="clearfix">
					<li>0</li>
					<?php 
						for($i = 1; $i <= 50; $i++){
							echo "
								<li>
									<h3 align='center'>Anwar Pasaribu</h3><br>
									<strong>111402008</strong>
								</li>
							";	
						}
					?>
				</ul>
			</div>
			<!--Bagian utk Bulatan halaman-->
			<ul class="pages"></ul>
			
			<!--Bagian Untuk Scrollbar-->
				<div class="scrollbar">
					<div class="handle">
						<div class="mousearea"></div>
					</div>
				</div>
			<!-- Akhir Bagian Untuk Scrollbar-->


			<!--Bagian utk tombol-->
				<!--				<div class="controls center">
								
									<button class="btn prevPage"><i class="icon-chevron-left"></i><i class="icon-chevron-left"></i> page</button>
									<button class="btn prev"><i class="icon-chevron-left"></i> item</button>
									<button class="btn backward"><i class="icon-chevron-left"></i> move</button>
					
									<div class="btn-group">
										<button class="btn toStart">toStart</button>
										<button class="btn toCenter">toCenter</button>
										<button class="btn toEnd">toEnd</button>
									</div>
									
								</div>
				-->			
			<!-- Akhir Bagian utk tombol-->
			
		</div>
		
	</div>

	<!-- Scripts -->
	<script src="sly/jquery.min.js"></script>
	<script src="sly/plugins.js"></script>
	<script src="sly/sly.min.js"></script>
	<script src="sly/horizontal.js"></script>

	<!-- Google Analytics -->
	<!--	<script>
			var _gaq=[['_setAccount','UA-838758-7'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)}(document,'script'));
		</script>
	-->

</body>
</html>