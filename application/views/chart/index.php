<div class="home">
	<div class="home_slider_container">
		
		<div class="container-fluid"> 
			<h4>Cart Belanja</h4>
				<table class="table table-bordered table-striped table-hover">
					<tr>
						<th>No</th>
						<th>Nama Produk</th>
						<th>Jumlah</th>
						<th>Harga</th>
						<th>Sub-Total</th>
					</tr>
					<?php 
					$no = 0;
					foreach ($this->cart->contents() as $items) : ?>
					<tr>
						<td><?= $no++ ?></td>
						<td><?= $items['name']; ?></td>
						<td><?= $items['qty']; ?></td>
						<td><?= number_format($items['price'],0,',','.');?></td>
						<td><?= number_format($items['subtotal'],0,',','.'); ?></td>
					</tr>
				<?php endforeach; ?>
			
				<tr>
					<td colspan="4"></td>
					<td align="right">
						Rp. <?= number_format($this->cart->total(),0,',','.') ?>
					</td>
				</tr>
			</table>
			<div class="text-right">
				<a href="<?= base_url('chart/hapus_cart'); ?>"><div class="btn btn-sm btn-danger">Hapus</div></a>
				<a href="<?= base_url('home/index'); ?>"><div class="btn btn-sm btn-info">Belanja</div></a>
				<a href="<?= base_url('chart/pembayaran'); ?>"><div class="btn bth-sm btn-success">Bayar</div></a>
			</div>
		</div>

	

	<!-- Icon Boxes -->

	
	</div>
</div>

