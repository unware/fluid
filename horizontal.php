<html>
	<head>
		<title>Horizontal Mousewheel</title>
	</head>
	<style>
	* { padding: 0; margin: 0; }
	body { overflow-y: hidden; overflow-x: scroll; }

	#filler { position: absolute; top: 0; left: 0; width: 3900px; height:50px; }
	#container { width: 3900px; position: absolute; top: 50%; margin-top: -150px; }

	.section { display: block; width: 300px; height: 300px; float: left; margin-left: 20px; opacity: .6; border-radius: 6px; }

	.blue { background-color: #06F; }
	.green { background-color: #0f9d00; }
	.red { background-color: #F00; }
	.yellow { background-color: #ffea00; }

	.clear { clear: both; }
	#return-link { position: fixed; top: 12px; left: 18px; font: 11px Verdana, Arial, sans-serif; text-transform: uppercase; }
	#return-link:link, #return-link:visited { color: #06F; text-decoration: none; }
	#return-link:hover, #return-link:active { text-decoration: underline; }
	
		.isi{
			width:600px;
			height:500px;
			border:1px solid #000;
			float:left;
			margin-left:10px;
		}
	</style>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
	<script>
		$(document).ready(function() {

			$('html, body, *').mousewheel(function(e, delta) {
				this.scrollLeft -= (delta * 250);
				e.preventDefault();
			});

		});
	</script>
	<body>
	<div id="filter">Isi</div>
	<div id="container">
		<div class="isi">Isi</div>
		<div class="isi">Isi</div>
		<div class="isi">Isi</div>
		<div class="isi">Isi</div>
		<div class="isi">Isi</div>
	</div>
	</body>
</html>