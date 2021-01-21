<?php
$koneksi = new mysqli('localhost', 'root', '', 'logical_test');

$query = $koneksi->query("SELECT mhs_nama from tb_mahasiswa_nilai 
JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id 
JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
WHERE mk_kode = 'MK303' AND nilai = MAX(nilai)
");

echo "<pre>";
print_r($query->fetch_object());
echo "</pre>";
