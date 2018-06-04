<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/3/2018
 * Time: 3:09 PM
 */

$no = 1;
$nos = 1;
?>

<form method="post" action="<?php echo base_url('/index.php/Pelanggan_C/store')?>" class="container mt-5">
	<div class="row justify-content-center">
		<div style="background: rgba(255, 255, 255, 0.6);" class="col-10 p-5">
			<div class="row">
				<div class="col-12 text-center my-2">
					<h2>Detail Transaksi</h2>
				</div>
			</div>
					<input hidden class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="nama" placeholder="Nama Lengkap"
						<?php if (!empty($_SESSION['nama'])){ ?> value="<?php echo $_SESSION['nama']; ?>" <?php } ?> >
					<input hidden class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="alamat" placeholder="Alamat"
						<?php if (!empty($_SESSION['alamat'])){ ?> value="<?php echo $_SESSION['alamat']; ?>" <?php } ?> >
					<input hidden class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="stnk" placeholder="Nomor STNK"
						<?php if (!empty($_SESSION['stnk'])){ ?> value="<?php echo $_SESSION['stnk']; ?>" <?php } ?> >
					<input hidden class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="merk" placeholder="Merek Motor"
						<?php if (!empty($_SESSION['merk'])){ ?> value="<?php echo $_SESSION['merk']; ?>" <?php } ?> >
					<select hidden class="p-2" style="border: 3px; border-radius: 20px;"  name="jenis" id="jenis">
						<option value="" disabled selected>--Jenis Pelayanan--</option>
						<?php if (!empty($_SESSION['jenis']))
						{
							if ($_SESSION['jenis'] == "Service")
							{
								?>
								<option value="Service" selected>Service</option>
								<option value="Beli Part">Beli Part</option>
								<?php
							}else if ($_SESSION['jenis'] == "Beli Part") {
								?>
								<option value="Service">Service</option>
								<option value="Beli Part" selected>Beli Part</option>
								<?php
							}
						}
						else{
							?>
							<option value="Service">Service</option>
							<option value="Beli Part">Beli Part</option>
							<?php
						}
						?>
					</select>

			<div class="row">
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							Nomor STNK :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['stnk']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Nama Customer :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['nama']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Alamat :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['alamat']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Merk Kendaraan :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['merk']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Tanggal Transaksi :
						</div>
						<div class="col-6">
							<?php echo date("Y/m/d"); ?>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-6">
							Nomor Transaksi :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['id_transaksi']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							Nama Kasir :
						</div>
						<div class="col-6">
							<?php echo $_SESSION['nama_kasir']; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="container mt-3">
						<div class="row justify-content-center">
							<div style="background: rgba(255, 255, 255, 0.6);" class="col-12 text-center p-3">

								<div class="row">
									<div class="col-12">
										<h5>Transaksi Service</h5>
									</div>
								</div>

								<table class="table table-hover">
									<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Kategori Service</th>
										<th scope="col">Harga</th
									</tr>
									</thead>
									<tbody>

									<?php foreach ($jasa as $item) { ?>

										<tr class="table-info">
											<th scope="row"><?php echo $no++?></th>
											<td><?php echo $item->kategori?></td>
											<td><?php echo $item->harga_jasa?></td>
										</tr>

									<?php } ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<div class="col-6">
					<div class="container mt-3">
						<div class="row justify-content-center">
							<div style="background: rgba(255, 255, 255, 0.6);" class="col-12 text-center p-3">

								<div class="row">
									<div class="col-12">
										<h5>Transaksi Beli Part</h5>
									</div>
								</div>

								<table class="table table-hover">
									<thead>
									<tr>
										<th scope="col">No</th>
										<th scope="col">Nama Part</th>
										<th scope="col">Qty</th>
										<th scope="col">Harga</th>
									</tr>
									</thead>
									<tbody>

									<?php foreach ($part as $item) { ?>

										<tr class="table-info">
											<th scope="row"><?php echo $nos++?></th>
											<td><?php echo $item->nama_part?></td>
											<td><?php echo $item->quantity?></td>
											<td><?php echo $item->harga_part * $item->quantity?></td>
										</tr>

									<?php } ?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-3 text-center my-2">
					<a href="<?php echo base_url('/index.php/Beli_C')?>" class="btn btn-warning">Back</a>
				</div>
				<div class="col-3 text-center my-2">
					<input class="btn btn-success" type="submit" name="submit" value="Submit">
				</div>
			</div>
		</div>
	</div>
</form>

