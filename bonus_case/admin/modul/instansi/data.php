<nav class="page-breadcrumb">
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="?hal=dashboard">Home</a></li>
		<li class="breadcrumb-item" aria-current="page">Data Instansi</li>
	</ol>
</nav>

<div class="row">
	<div class="col-md-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h6 class="card-title">Data Instani
					<?= _daftar("?hal=instansi/olah") ?>
				</h6>

				<form action="?hal=instansi/data" method="POST">
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Cari Data</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="par" id="inputPassword" placeholder="Isikan Data" value="<?=(isset($_POST['par']) ? $_POST['par']:'')?>">
						</div>
						<div class="col-sm-1">
							<button type="submit" class="btn btn-primary mr-2" name="cari">Cari</button>
						</div>
						<div class="col-sm-1">
							<?= _reset("?hal=instansi/data") ?>
						</div>
					</div>
				</form>

				<div class="table-responsive">
					<table id="" class="table">
						<thead>
							<tr>
								<th>No</th>
								<th>Aksi</th>
								<th>Instansi</th>
								<th>Deskripi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 0;
							if(!isset($_POST['cari'])){
								$sql = "SELECT * FROM tb_instansi";
							}else{
								$par=$_POST['par'];
								$sql = "SELECT * FROM tb_instansi where instansi like '%$par%' or deskripsi like'%$par%'";
							}
							
							foreach (_dataGetAll($mysqli, $sql) as $key => $value) :
								extract($value);
								?>
								<tr>
									<td><?= $no += 1 ?></td>
									<td>
										<?= _edit("?hal=instansi/olah&id=$idinstansi") ?>
										<?= _hapus("?hal=instansi/proses&hapus=$idinstansi") ?>
									</td>
									<td><?= $instansi ?></td>
									<td><?= $deskripsi ?></td>									
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>