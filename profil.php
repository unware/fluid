<?php
	include('engine/gambar.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Halaman Profil</title>
<link href="style/screen.css" rel="stylesheet" type="text/css">
<script src="js/jquery-1.9.1.min.js"></script>
<script language="javascript" type="application/javascript">
	$(document).ready(function(e) {
			var kontainer = $("#kontainer");
			var navigasi = $("#nav");
			var header = $("#header");
			
			navigasi.height(kontainer.innerHeight() - 82);
			
	(function($){
        $(window).load(function(){
            $("#nav").mCustomScrollbar({
				theme:"dark-thick"
			});
			
        });
    })(jQuery);

	});
</script>
</head>

<body>
<div id="kontainer">
	<div id="header_atas">
		Header 1
|	 Untuk Halaman Profil</div>

	<div id="header">
		Header 2
	|	 Untuk Halaman Profil</div>
	
	<div id="nav">
		Navigasi User Online
		|	 Untuk Halaman Profil<br>
		<?php
			$foto = new gambar;
			echo "<ul>";
			$foto->ulang(500, "images/cth_user.png");
			echo "</ul>";
		?>
	</div>
	
	<div id="konten">
		<h1>Konten |	 Untuk Halaman Profil</h1>
		<h1 align="justify">
		Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.

		Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.

</h1>
	</div>
	
	<div id="footer">
		Footer
	</div>
</div>


<script src="mscroll/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>
