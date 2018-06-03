<?php
/**
 * Created by PhpStorm.
 * User: De Gitgit Agitya
 * Date: 6/2/2018
 * Time: 2:08 PM
 */
?>


<div class="container my-5">
	<hr>
</div>

<form class="container" action="<?php echo base_url('/index.php/Login_C/verifikasi')?>" method="post">
	<div class="row justify-content-center">
		<div style="background: rgba(255, 255, 255, 0.6);" class="col-4 text-center p-3">
			<div class="row">
				<div class="col-12 my-2">
					<h4>Login</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input name="username" class="p-2" style="border: 3px; border-radius: 20px;"  type="text" placeholder="Username">
				</div>
			</div>
			<div class="row">
				<div class="col-12 my-2">
					<input name="password" class="p-2" style="border: 3px; border-radius: 20px;" type="password" placeholder="Password">
				</div>
			</div>
			<?php
				if (isset($warning))
				{
			?>
			<div class="row">
				<div class="col-12 my-2">
					<h4><?php echo $warning?></h4>
				</div>
			</div>
			<?php
				}
			?>
			<div class="row">
				<div class="col-12 my-2">
					<input name="submit" type="submit" class="btn btn-success" value="Sign In">
				</div>
			</div>
		</div>
	</div>
</form>
