
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
            <h1>Pegawai</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">Pegawai</li>
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
          <h3 class="card-title">Pegawai</h3>
        </div>

        <div class="card-body">

<?php  
// there for call modal form create data
require_once 'create.php';?>
  
     <table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
      <th>No</th>
    <th>nama</th> 
<th>nip</th> 
<th>nick</th> 
<th>no_wa</th> 
<th>arsip</th> 
<th>bidang</th> 
<th>pangkat</th> 

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
<td><?=$data['nama']?></td>
<td><?=$data['nip']?></td>
<td><?=$data['nick']?></td>
<td><?=$data['no_wa']?></td>
<td><?=$data['arsip']?></td>
<td><?=$data['bidang']?></td>
<td><?=$data['pangkat']?></td>

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
                  <label for="nama"> nama:</label>
                  <input type="text" class="form-control" id="nama" name='nama' value="<?php echo $data['nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nip"> nip:</label>
                  <input type="text" class="form-control" id="nip" name='nip' value="<?php echo $data['nip']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nick"> nick:</label>
                  <input type="text" class="form-control" id="nick" name='nick' value="<?php echo $data['nick']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="no_wa"> no_wa:</label>
                  <input type="text" class="form-control" id="no_wa" name='no_wa' value="<?php echo $data['no_wa']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="arsip"> arsip:</label>
                  <input type="text" class="form-control" id="arsip" name='arsip' value="<?php echo $data['arsip']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="bidang"> bidang:</label>
                  <input type="text" class="form-control" id="bidang" name='bidang' value="<?php echo $data['bidang']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pangkat"> pangkat:</label>
                  <input type="text" class="form-control" id="pangkat" name='pangkat' value="<?php echo $data['pangkat']; ?>">
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

