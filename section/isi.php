<div class="isi">
	<?php 
		$page 	= @$_GET['page'];
		$action = @$_GET['action'];
		
		if($page == "berita"){
			include "page/berita.php";
		}else if($page == "stuktur"){
			include "page/struktur.php";
		}else if($page == "or"){
			include "page/or_daftar.php";	
		}else if($page == "pengumuman"){
			include "page/pengumuman.php";
		}else if($page == "profil"){
			include "page/profil.php";
		}else{
			include "page/profil.php";
		}
	 ?>
</div>