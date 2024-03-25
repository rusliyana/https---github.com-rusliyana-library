<!DOCTYPE html>
<html>
<title>eLibrary</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href=<?= base_url('w3.css') ?>>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Poppins", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: top;
  background-size: cover;
  min-height: 100%;
  background-attachment:fixed;
  background-image: url(<?= base_url('images/banner.jpg') ?>);
  background-color: rgba(0, 0, 0, 0.6);
  background-blend-mode: overlay;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>

<body>

<?PHP include("menu.php"); ?>


<div class="bgimg-1" >

	<div class="w3-padding-48"></div>


<div class="w3-container w3-padding-16" id="contact">
    <div class="w3-content w3-container w3-white w3-card w3-round-large" style="max-width:1000px">
		<div class="w3-padding w3-center">			
			
			<h3><b><br>Learn Anything and Anywhere</b></h3>
			
			<p><b>VISI</b><br>Menjadikan perpustakaan sebagai pusat infromasi untuk mewujudkan budaya membaca   </p>

			<p><b>MISI</b><br>Terus mengembang dan mengikuti perkembangan teknologi informasi terbaru untuk meningkatkan prestasi KOLEJ BRYER KL  </p>

			<p><b>MATLAMAT</b><br>Mewujudkan pusat sumber digital yang juga berfungsi sebagai Makmal ICT yang tidak lagi menggunakan buku sebagai bahan bacaan maujud sebaliknya menggunakan e-buku dan bahasa ilmiah lain yang boleh didapati dalam talian.</p>			
			
		</div>
    </div>
</div>


<div class="w3-padding-32"></div>
	
</div>

	
 
<script>

// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
