<div class="home">
	<div class="home_slider_container">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-8">
					<div class="btn btn-success">
						<?php 
						$grand_total = 0;
						if($chart = $this->cart->contents()){
							foreach($chart as $items)
							{
								$grand_total = $grand_total + $items['subtotal'];
							}
								echo "Total Belanja Anda :" .number_format($grand_total,0,',','.');
						} ?>
					</div><br><br>
					<h2>Input Transaksi Pembayaran</h2>
					<form method="post" action="<?= base_url('chart/pengiriman'); ?>">
						<div class="form-group">
							<label>Nama Lengkap</label>
							<input type="text" id="nama" name="nama" class="form-control" >
						</div>
						<div class="form-group">
							<label>Alamat Lengkap</label>
							<input type="text" id="alamat" name="alamat" class="form-control" >
						</div>
						<div class="form-group">
							<label>No Telp</label>
							<input type="number" id="telepon" name="telepon" class="form-control" >
						</div>
						<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select class="form-control">
								<option>JNE</option>
								<option>TiKi</option>
								<option>GOJEK</option>
								<option>GRAB</option>

							</select>
						</div>
						<div class="form-group">
							<label>Bank ATM</label>
							<select class="form-control">
								<option>BRI -xxxxxx</option>
								<option>BCA -xxxxxx</option>
								<option>BNI -xxxxxx</option>
								<option>NIAGA -xxxx</option>
							</select>
						</div>
						<button type="submit" class="btn btn-sm btn-primary">Send</button>
						<button type="submit" class="btn btn-sm btn-secondary">cancel</button>					
						
					</form>
				</div>
			</div>
		</div>

	</div>
</div>
