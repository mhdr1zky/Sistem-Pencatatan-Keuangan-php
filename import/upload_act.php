<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php 
// menghubungkan dengan koneksi
include 'conn.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filepegawai']['name']) ;
move_uploaded_file($_FILES['filepegawai']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filepegawai']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
	$tr_status     = $data->val($i, 1);
	$tr_nama   = $data->val($i, 2);
	$tr_subkeg  = $data->val($i, 3);
	$tgl_ba  = $data->val($i, 4);
	$tr_nominal  = $data->val($i, 5);
	$tr_ppn  = $data->val($i, 6);
	$tr_pph  = $data->val($i, 7);
	$tr_ket  = $data->val($i, 8);
	$updoc  = $data->val($i, 9);

	if($tr_status != "" && $tr_nama != "" && $tr_subkeg != "" && $tgl_ba != "" && $tr_nominal != "" && $tr_ppn != "" && $tr_pph != "" && $tr_ket != "" && $updoc != ""){
		// input data ke database (table data_pegawai)
		mysqli_query($koneksi,"INSERT into transaksi values('','$tr_status','$tr_nama','$tr_subkeg','$tgl_ba','$tr_nominal','$tr_ppn','$tr_pph','$tr_ket','$updoc')");
		$berhasil++;
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filepegawai']['name']);

// alihkan halaman ke index.php
header("location:index.php?berhasil=$berhasil");
?>