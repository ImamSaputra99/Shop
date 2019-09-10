<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data</h3>
	<?php foreach ($Barang as $brg) : ?>
	<form  method="post" action="<?= base_url('admin/dashboard/update'); ?> ">
		<div class="form-group">Nama Barang
			<input type="hidden" name="id" class="form-control" value="<?= $brg['id'] ; ?>">
			<input class="form-control" type="text" name="nama_barang" value="<?= $brg['nama_barang']; ?>">
		</div>
		<div class="form-group">Nama Merek
			<input class="form-control" type="text" name="nama_merek" value="<?= $brg['nama_merek']; ?>">
		</div>
		<div class="form-group">Keterangan
			<input class="form-control" type="text" name="keterangan" value="<?= $brg['keterangan']; ?>">
		</div>
		<div class="form-group">Harga
			<input class="form-control" type="number" name="harga" value="<?= $brg['harga']; ?>">
		</div>
		<div class="form-group">Stok
			<input class="form-control" type="number" name="stok" value="<?= $brg['stok']; ?>">
		</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
<?php endforeach; ?>
</div>