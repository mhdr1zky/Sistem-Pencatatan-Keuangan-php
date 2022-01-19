
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
            <h1>Trlog</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">Trlog</li>
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
          <h3 class="card-title">Trlog</h3>
        </div>

        <div class="card-body">

<?php  
// there for call modal form create data
require_once 'create.php';?>
  
     <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
      <th>No</th>
    <th>log_id</th> 
<th>log_status</th> 
<th>log_nama</th> 
<th>log_keg</th> 
<th>tgl_ba</th> 
<th>log_nominal</th> 
<th>log_ppn</th> 
<th>log_pph</th> 
<th>log_ket</th> 
<th>log_archive</th> 

      <th>Opsi</th>
      </tr>
      </thead>
      <tbody> 
    <?php
      $ga = GetAll();
      $no = 1;
      foreach($ga as $data){?>
       <tr>
       <td><?=$no++?></td>
<td><?=$data['log_id']?></td>
<td><?=$data['log_status']?></td>
<td><?=$data['log_nama']?></td>
<td><?=$data['log_keg']?></td>
<td><?=$data['tgl_ba']?></td>
<td><?=$data['log_nominal']?></td>
<td><?=$data['log_ppn']?></td>
<td><?=$data['log_pph']?></td>
<td><?=$data['log_ket']?></td>
<td><?=$data['log_archive']?></td>

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
                  <label for="log_id"> log_id:</label>
                  <input type="text" class="form-control" id="log_id" name='log_id' value="<?php echo $data['log_id']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_status"> log_status:</label>
                  <input type="text" class="form-control" id="log_status" name='log_status' value="<?php echo $data['log_status']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_nama"> log_nama:</label>
                  <input type="text" class="form-control" id="log_nama" name='log_nama' value="<?php echo $data['log_nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_keg"> log_keg:</label>
                  <input type="text" class="form-control" id="log_keg" name='log_keg' value="<?php echo $data['log_keg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="tgl_ba"> tgl_ba:</label>
                  <input type="text" class="form-control" id="tgl_ba" name='tgl_ba' value="<?php echo $data['tgl_ba']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_nominal"> log_nominal:</label>
                  <input type="text" class="form-control" id="log_nominal" name='log_nominal' value="<?php echo $data['log_nominal']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_ppn"> log_ppn:</label>
                  <input type="text" class="form-control" id="log_ppn" name='log_ppn' value="<?php echo $data['log_ppn']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_pph"> log_pph:</label>
                  <input type="text" class="form-control" id="log_pph" name='log_pph' value="<?php echo $data['log_pph']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_ket"> log_ket:</label>
                  <input type="text" class="form-control" id="log_ket" name='log_ket' value="<?php echo $data['log_ket']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="log_archive"> log_archive:</label>
                  <input type="text" class="form-control" id="log_archive" name='log_archive' value="<?php echo $data['log_archive']; ?>">
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

