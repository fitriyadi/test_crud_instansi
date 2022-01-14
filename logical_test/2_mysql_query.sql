SELECT nilai,mhs_nama
FROM tb_mahasiswa
JOIN tb_mahasiswa_nilai USING(mhs_id)
JOIN tb_matakuliah USING(mk_id)
WHERE mk_kode='MK303' 
AND 
nilai=(SELECT MAX(nilai) FROM tb_mahasiswa_nilai
JOIN tb_matakuliah USING(mk_id) WHERE mk_kode='MK303')
