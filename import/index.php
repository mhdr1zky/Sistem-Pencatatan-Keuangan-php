<?php
require_once '../config/conn.php';
require_once '../template/header_tabel.php';
require_once '../template/aside.php';
require_once 'func.php';

?>
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kegiatan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">Kegiatan</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
        <div class="card-header">
          <h3 class="card-title">Kegiatan</h3>
        </div>

        <div class="card-body">

	<h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2>
	

	<?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	include_once '../config/conn.php';
	}
	?>

<h3>Upload dibawah</h3>
<a href="format_rekap.xls"><b>Download Format Excel <i class="fa fa-download"></i></b></a>
<p>! Pastikan Semua tabel excel tidak ada yang kosong</p>
	<form method="post" enctype="multipart/form-data" action="upload_act.php">
	Pilih File: 
	<input name="filepegawai" type="file" required="required"> 
	<input name="upload" type="submit" class="btn btn-primary" value="Import">
</form>
  <br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Status</th>
			<th>Nama</th>
			<th>Subkeg</th>
			<th>tgl</th>
			<th>nominal</th>
			<th>ppn</th>
			<th>pph</th>
			<th>ket</th>
			<th>updoc</th>
		</tr>
		<?php 
	
      $ga = filter($status);
      $no = 1;
      foreach($ga as $data){?>
       <tr>
       <td><?=$no++?></td>
<td><?=getsub('rekap','rekp_id',$data['tr_status'],'nama_rkp')?></td>
<td><?=$data['tr_nama']?></td>
<td><?=getsub('subkeg','sub_id',$data['tr_subkeg'],'alias')?></td>
<td><?=$data['tgl_ba']?></td>
<td><?=$data['tr_nominal']?></td>
<td><?=$data['tr_ppn']?></td>
<td><?=$data['tr_pph']?></td>
<td><?=$data['tr_ket']?></td>
<td><?=$data['updoc']?></td>

               <td>
                <form method='POST' action='func.php'>
                <input type='hidden' name='id' value='<?=$data['id']?>'>
              <span><button type='button' class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal_edit_<?=$data['id']?>"><i class="fa fa-edit"></i>
                </button>
                

<div class="modal fade" id="modal_edit_<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal_createLabel">Edit Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <form action='func.php' method='POST'>
             <input type='hidden' name='id' value="<?php echo $data['id'];?>">
          
               
                <div class="form-group">
                  <label for="tr_status"> tr_status:</label>
                 <select class="dropdown_list" id="tr_status"  name="tr_status">
<?php dropdown('rekap','nama_rkp','nama_rkp','rekp_id',$data['tr_status'])?></select>
                </div>
            
                <div class="form-group">
                  <label for="tr_nama"> tr_nama:</label>
                  <input type="text" class="form-control" id="tr_nama" name='tr_nama' value="<?php echo $data['tr_nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tr_subkeg"> tr_subkeg:</label>
                  <select class="dropdown_list" id="tr_subkeg"  name="tr_subkeg">
                  <?php dropdown('subkeg','alias','alias','sub_id',$data['tr_subkeg']);?>
               </select>
                </div>
            
                <div class="form-group">
                  <label for="tgl_ba"> tgl_ba:</label>
                  <input type="date" class="form-control" id="tgl_ba" name='tgl_ba' value="<?php echo $data['tgl_ba']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tr_nominal"> tr_nominal:</label>
                  <input type="text" class="form-control" id="tr_nominal" name='tr_nominal' value="<?php echo $data['tr_nominal']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tr_ppn"> tr_ppn:</label>
                  <input type="text" class="form-control" id="tr_ppn" name='tr_ppn' value="<?php echo $data['tr_ppn']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tr_pph"> tr_pph:</label>
                  <input type="text" class="form-control" id="tr_pph" name='tr_pph' value="<?php echo $data['tr_pph']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tr_ket"> tr_ket:</label>
                  <input type="text" class="form-control" id="tr_ket" name='tr_ket' value="<?php echo $data['tr_ket']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="updoc"> updoc:</label>
                  <input type="text" class="form-control" id="updoc" name='updoc' value="<?php echo $data['updoc']; ?>">
                </div>
            
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='update' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>
                <button class='btn btn-warning btn-xs' type='submit' name='duplicate' onClick="javascript:return confirm('Copy Data ? CLick Ok!');"><i class="fa fa-copy"></i></button>
               <button class='btn btn-danger btn-xs' type='submit' name='delete' onClick="javascript:return confirm('are u sure want delet this ?');"><i class="fa fa-trash"></span>
                </form>
                </td>
                </tr>
                <?php } ?>
        </tfoot>
                </table>
              </div>
           </div>
         </div>
      </div>
  </div>

      
</section>
  </div>
<?php require_once '../template/footer_tabel.php';?>

