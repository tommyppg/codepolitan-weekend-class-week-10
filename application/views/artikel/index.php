<!DOCTYPE html>
<html>
<head>
	<title>Latihan CodeIgniter</title>
</head>
<body>
	<h1>Daftar Artikel Saya</h1>
	<a href="<?php echo site_url('artikel/add'); ?>">Tambah Artikel</a><br/><br/>

	<div>
		<?php
			if(count($artikel_data) > 0){
				foreach($artikel_data as $key => $artikel){
					?>
					<div>
						<h2><?php echo $artikel['judul_artikel']; ?></h2>
						<p><?php echo $artikel['tanggal_artikel']; ?></p>

						<p><?php echo $artikel['isi_artikel']; ?></p>

						<a href="<?php echo site_url('artikel/update/'.$artikel['id_artikel']); ?>">Update</a> |
						<a href="<?php echo site_url('artikel/delete/'.$artikel['id_artikel']); ?>">Delete</a>
						<hr>
					</div>
					<?php
				}
			}else{
				?>
				<em>Tidak ada artikel.</em>
				<?php
			}
		?>
	</div>
</body>
</html>