<?php

function _edit($link){
	echo "<a href='$link' class='btn btn-secondary btn-sm'>Edit</a>";
}

function _detail($link){
	echo "<a href='$link' class='btn btn-primary btn-sm'>Detail</a>";
}

function _daftar($link){
	echo "<a href='$link' class='btn btn-primary btn-sm float-right ml-30'>Tambah</a>";
}

function _hapus($link){ ?>
	<a class="btn btn-danger btn-sm" href="<?=$link?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
<?php }

function _reset($link){ ?>
	<a class="btn btn-warning btn-sm" href="<?=$link?>">Reset</a>
<?php }


?>