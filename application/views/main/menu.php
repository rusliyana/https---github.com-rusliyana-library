<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Navbar (sit on top) -->
<div class="w3-top">
	<div class="w3-bar w3-white w3-card" id="myNavbar">

		&nbsp;<a href="" class="w3-bar-item1"><img src="<?= base_url('images/logo.jpg') ?>" height="90"></a>

		<!-- Right-sided navbar links -->
		<div class="w3-right w3-hide-small"> 
			<a href="http://localhost/library/" class="w3-bar-item w3-button">UTAMA</a>
			<a href="<?=base_url('mainpage/about')?>" class="w3-bar-item1 w3-button">TENTANG KAMI</a>
			<a href="<?=base_url('auth')?>" class="w3-bar-item1 w3-button"><i class="fa fa-fw fa-lg fa-lock"></i> LOG MASUK</a>		
		</div>
		<!-- Hide right-floated links on small screens and replace them with a menu icon -->

		<a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
		  <i class="fa fa-bars"></i>
		</a>

	</div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-pink w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
	<a href="about.php" onclick="w3_close()" class="w3-bar-item w3-button">TENTANG KAMI</a>
	<a href="<?=base_url('auth')?>" onclick="w3_close()" class="w3-bar-item w3-button">LOG MASUK</a>
</nav>