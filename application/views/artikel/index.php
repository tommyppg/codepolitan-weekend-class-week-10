<!DOCTYPE html>
<html>
<head>
	<title>Latihan CodeIgniter</title>
</head>
<body>
	<h1>Daftar Artikel Saya</h1>
	<a href="<?php echo site_url('artikel/add'); ?>">Tambah Artikel</a><br/><br/>
	<table border="1">
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Author</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php
				if(count($artikel_data) > 0){
					foreach($artikel_data as $key => $artikel){
						?>
						<tr>
							<td><?php echo $key + 1; ?></td>
							<td><?php echo $artikel['judul_artikel']; ?></td>
							<td><?php echo $artikel['author_artikel']; ?></td>
							<td>
								Update |
								Delete
							</td>
						</tr>
						<?php
					}
				}else{
					?>
					<tr>
						<td colspan="4">Tidak ada artikel.</td>
					</tr>
					<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>