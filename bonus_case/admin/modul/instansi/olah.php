<?php
if(isset($_GET['id']))
	extract(_dataGetId($mysqli,"tb_instansi","idinstansi='".$_GET['id']."'"));
?>
<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item"><a href="?hal=kriteria/data">Data Instansi</a></li>
		<li class="breadcrumb-item" aria-current="page"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?></li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title"><?=(isset($_GET['id']) ? 'Ubah':'Tambah')?> Data Instansi</h6>

				<form class="forms-sample" action="?hal=instansi/proses" method="POST">
					
					<input type="hidden" class="form-control" name="idinstansi" value="<?=@$idinstansi?>">
										
					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Nama Instansi</label>
						<div class="col-sm-9">
							<input type="text" 
                            class="form-control" 
                            name="instansi" 
                            value="<?=@$instansi?>" 
                            placeholder="Inputkan Nama Instansi" 
                            required>
						</div>
					</div>

					<div class="form-group row">
						<label for="input" class="col-sm-3 col-form-label">Deskripsi</label>
						<div class="col-sm-9">
							<textarea
							class="form-control"
							name="deskripsi"
							required
							rows="3"
							placeholder="Isikan Deskripsi"
							><?=@$deskripsi?></textarea>
						</div>
					</div>

					<div class="form-group row ">
						<div class="col-sm-9 offset-3">
							<button type="submit" class="btn btn-primary mr-2" name="<?=(isset($_GET['id']) ? 'ubah':'tambah')?>">Simpan</button>
							<a class="btn btn-light" href="?hal=instansi/data">Batal</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>