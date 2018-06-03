<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 3:13 PM
 */

?>

<form method="post" action="<?php echo base_url('/index.php/Pelanggan_C/store')?>" class="container mt-5">
	<div class="row justify-content-center">
		<div style="background: rgba(255, 255, 255, 0.6);" class="col-6 text-center p-3">
			<div class="row">
				<div class="col-12 my-2">
					<h2>Isi Data Pelanggan</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="nama" placeholder="Nama Lengkap"
						<?php if (!empty($_SESSION['nama'])){ ?> value="<?php echo $_SESSION['nama']; ?>" <?php } ?> >
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="alamat" placeholder="Alamat"
						<?php if (!empty($_SESSION['alamat'])){ ?> value="<?php echo $_SESSION['alamat']; ?>" <?php } ?> >

				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="stnk" placeholder="Nomor STNK"
						<?php if (!empty($_SESSION['stnk'])){ ?> value="<?php echo $_SESSION['stnk']; ?>" <?php } ?> >

				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input class="p-2" style="border: 3px; border-radius: 20px;" type="text" name="merk" placeholder="Merek Motor"
						<?php if (!empty($_SESSION['merk'])){ ?> value="<?php echo $_SESSION['merk']; ?>" <?php } ?> >

				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<select class="p-2" style="border: 3px; border-radius: 20px;"  name="jenis" id="jenis">
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
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input class="btn btn-success" type="submit" name="submit" value="Next">
				</div>
			</div>
		</div>
	</div>
</form>
