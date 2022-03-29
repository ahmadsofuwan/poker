<?php
$action = 'add';
$display = '';
if (isset($_POST['action']))
	$action = $_POST['action'];
if ($action == 'update')
	$display = 'style="display: none;"'
?>
<h3 class="text-center"><b><?php echo strtoupper($title) ?></b></h3>
<?php echo $err ?>
<form method="post" enctype="multipart/form-data">
	<input type="hidden" name="pkey" value="">
	<input type="hidden" name="action" value="<?php echo $action ?>">
	<div class="row">
		<div class="col-sm-6">
			<div class="caption border-primary">
				Informasi Umum
			</div>
			<div class="form-group row">
				<label for="name" class="col-sm-3 col-form-label">Nama</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="name" name="name" placeholder="Nama">
				</div>
			</div>

			<div class="form-group row">
				<label for="country" class="col-sm-3 col-form-label">Negara</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="country" name="country" placeholder="Nama Negara">
				</div>
			</div>

			<div class="form-group row">
				<label for="minDeposit" class="col-sm-3 col-form-label">Minimal Deposit</label>
				<div class="col-sm">
					<input type="text" class="form-control format-number" id="minDeposit" name="minDeposit" placeholder="Minimal Deposit">
				</div>
			</div>

			<div class="form-group row">
				<label for="viaDeposit" class="col-sm-3 col-form-label">Deposit Via</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="viaDeposit" name="viaDeposit" placeholder="Bank, Pulsa & Dompet Digital">
				</div>
			</div>
			<div class="form-group row">
				<label for="platform" class="col-sm-3 col-form-label">Platform</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="platform" name="platform" placeholder="Windows, IOS, Android">
				</div>
			</div>

			<div class="form-group row">
				<label for="head" class="col-sm-3 col-form-label">Head SEO</label>
				<div class="col-sm">
					<textarea class="form-control" id="head" name="head" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group row">
				<label for="content" class="col-sm-3 col-form-label">Content</label>
				<div class="col-sm">
					<textarea class="form-control" id="content" name="content" rows="3"></textarea>
				</div>
			</div>
		</div>
		<div class=" col-sm-6">
			<div class="caption border-warning">Link Situs Website</div>

			<div class="form-group row">
				<label for="loginLink" class="col-sm-3 col-form-label">Link Login</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="loginLink" name="loginLink" placeholder="Link Login">
				</div>
			</div>
			<div class="form-group row">
				<label for="registerLink" class="col-sm-3 col-form-label">Link Daftar</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="registerLink" name="registerLink" placeholder="Link Daftar">
				</div>
			</div>
			<div class="form-group row">
				<label for="bonusLink" class="col-sm-3 col-form-label">Link Bonus</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="bonusLink" name="bonusLink" placeholder="Link Bonus">
				</div>
			</div>
			<div class="form-group row">
				<label for="promoLink" class="col-sm-3 col-form-label">Link Promosi</label>
				<div class="col-sm">
					<input type="text" class="form-control" id="promoLink" name="promoLink" placeholder="Link Promosi">
				</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="caption border-danger">Gambar Situs Website</div>
			<div class="form-group row">
				<label for="logo" class="col-sm-3 ">Logo</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="logo" name="logoImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
			<div class="form-group row">
				<label for="populer" class="col-sm-3 ">Populer</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="populer" name="populerImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
			<div class="form-group row">
				<label for="bannerImg" class="col-sm-3 ">Banner</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="bannerImg" name="bannerImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
			<div class="form-group row">
				<label for="registerImg" class="col-sm-3 ">Daftar</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="registerImg" name="registerImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
			<div class="form-group row">
				<label for="bonusImg" class="col-sm-3 ">Bonus Game</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="bonusImg" name="bonusImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
			<div class="form-group row">
				<label for="promoImg" class="col-sm-3 ">Promosi</label>
				<div class="col-sm">
					<input type="file" class="form-control-file" id="promoImg" name="promoImg" accept=".gif,.jpg,.png,.jpeg">
				</div>
			</div>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-10">
			<div class="form-group row mt-5">
				<div class="col-sm">
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
				<div class="col-sm">
					<a href="<?php echo base_url($baseUrl . 'List') ?>" class="btn btn-warning btn-block">Cancel</a>
				</div>
			</div>
		</div>
	</div>
</form>