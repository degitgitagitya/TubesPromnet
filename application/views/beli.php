<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 4:11 PM
 */

$no = 1;
?>

<form method="post" action="<?php echo base_url('/index.php/Beli_C/add')?>" class="container mt-5">
	<div class="row justify-content-center">
		<div style="background: rgba(255, 255, 255, 0.6);" class="col-6 text-center p-3">

			<div class="row">
				<div class="col-12">
					<h3>Beli Part</h3>
				</div>
			</div>

			<div class="row my-2">
				<div class="col-12">
					<select required class="p-2" style="border: 3px; border-radius: 20px;" name="part" id="part">
						<option value="" disabled selected>--Nama Part--</option>
						<?php foreach ($referensipart as $value){?>

							<option value="<?php echo $value->id?>"><?php echo $value->nama_part?></option>

						<?php } ?>
					</select>
				</div>
			</div>
			<div class="row my-2">
				<div class="col-12">
					<input required type="number" name="qty" style="border: 3px;border-radius: 20px;" class="p-2" placeholder="Jumlah">
					<input type="submit" name="submit2" class="btn btn-info" value="Add">
				</div>
			</div>

			<table class="table table-hover">
				<thead>
				<tr>
					<th scope="col">No</th>
					<th scope="col">Nama Part</th>
					<th scope="col">Qty</th>
					<th scope="col">Harga</th>
					<th scope="col">Opsi</th>
				</tr>
				</thead>
				<tbody>

				<?php foreach ($part as $item) { ?>

					<tr class="table-info">
						<th scope="row"><?php echo $no++?></th>
						<td><?php echo $item->nama_part?></td>
						<td><?php echo $item->quantity?></td>
						<td><?php echo $item->harga_part * $item->quantity?></td>
						<td><a href="<?php echo base_url('/index.php/Beli_C/remove/'.$item->id)?>" class="btn btn-danger">Delete</a></td>
					</tr>

				<?php } ?>

				</tbody>
			</table>

			<div class="row">
				<div class="col-6">
					<a href="<?php echo base_url('/index.php/Service_C')?>" class="btn btn-warning">Back</a>
				</div>
				<div class="col-6">
					<a href="<?php echo base_url('/index.php/Detail_C')?>" class="btn btn-success">Next</a>
				</div>
			</div>
		</div>
	</div>
</form>
