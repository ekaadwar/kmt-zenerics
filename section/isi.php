<div class="isi">
	<?php 
		include("mysql/koneksi.php");

		$page 	= @$_GET['page'];
		$action = @$_GET['action'];
		
		if($page == "berita"){
			include("page/berita.php");
		}else if($page == "stuktur"){
			include "page/struktur.php";
		}else if($page == "or"){
			if($action == ""){
				include("page/or_daftar.php");
			}else if($action == "pesertaOr"){
				include("page/pesertaOr.php");
			}else if($action == "logPeserta"){
				include("page/dataLogPeserta.php");
			}else if($action == "bioLengkap"){
				include("page/bioLengkapP.php");
			}else if($action == "editBio"){
				include("page/or/editBio.php");
			}else if($action == "hapus"){
				include("page/or/hapusPst.php");
			}
		}else if($page == "pengumuman"){
			include("page/pengumuman.php");
		}else if($page == "profil"){
			include("page/profil.php");
		}else{
			include("page/profil.php");
		}
	 ?>
</div>