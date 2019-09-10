<div class="container-fluid">
	<button class="btn btn-primary mb-3 " data-toggle="modal" data-target="#tambahbarang"><i class="fas fa-plus fa-sm"></i>Tambah Data</button>
	<?= $this->session->flashdata('pesan'); ?>
</div>	
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Nama Barang</th>
			<th>Nama Merek</th>
			<th>Keterangan</th>
			<th>Harga</th>
			<th>Stok</th>
			<th>Gambar</th>
			<th colspan="3">Opsi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($Barang as $brg) : ?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $brg->nama_barang; ?></td>
			<td><?= $brg->nama_merek; ?></td>
			<td><?= $brg->keterangan; ?></td>
			<td><?= $brg->harga; ?></td>
			<td><?= $brg->stok; ?></td>
			<td><?= $brg->image; ?></td>
			<td><div class="btn btn-success btn-sm"><i class="fas fa-search"></i></div></td>
			<td><?= anchor('admin/dashboard/edit/'. $brg->id, '<div class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
			<td><?= anchor('admin/dashboard/hapus/'. $brg->id,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="<?= base_url('admin/dashboard/tambah_data'); ?>" method="post" enctype="multipart/form-data">
      	 <div class="form-group">
  	  		<label for="nama_barang">Nama Barang</label>
   	 			<input type="text" class="form-control" name="nama_barang" id="nama_barang" >
   	    </div>
 	   <div class="form-group">
	   	  <label for="nama_merek">Nama Merek</label>
   	 		<input type="text" class="form-control" name="nama_merek" id="nama_merek"  >
   	  </div>
   	  <div class="form-group">
	   	  <label for="keterangan">Keterangan</label>
   	 		<input type="text" class="form-control" name="keterangan" id="keterangan"  >
   	  </div>
   	    <div class="form-group">
	   	  <label for="harga">Harga</label>
   	 		<input type="number" class="form-control" name="harga" id="harga"  >
   	  </div>	
   	  <div class="form-group">
	   	  <label for="stok">Stok</label>
   	 		<input type="number" class="form-control" name="stok" id="stok"  >
   	  </div>				
   	  <div class="form-group">
	   	  <label for="image">Gambar</label>
   	 		<input type="file" class="form-control" name="image" id="image"  >
   	  </div>	
    
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
      </form>
  </div>
</div>	