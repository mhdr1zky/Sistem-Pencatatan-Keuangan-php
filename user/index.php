
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
            <h1>User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">User</li>
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
          <h3 class="card-title">User</h3>
        </div>

        <div class="card-body">

<?php  
// there for call modal form create data
require_once 'create.php';?>
  
     <table id="example1" class="table table-bordered table-striped">
    <thead>
      <tr>
      <th>No</th>
    <th>user_nama</th> 
<th>user_username</th> 
<th>user_password</th> 
<th>user_foto</th> 
<th>user_level</th> 
<th>setting</th> 

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
<td><?=$data['user_nama']?></td>
<td><?=$data['user_username']?></td>
<td><?=$data['user_password']?></td>
<td><?=$data['user_foto']?></td>
<td><?=$data['user_level']?></td>
<td><?=$data['setting']?></td>

               <td>
                <form method='POST' action='func.php'>
                <input type='hidden' name='user_id' value='<?=$data['user_id']?>'>
              <span><button type='button' class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal_edit_<?=$data['user_id']?>"><i class="fa fa-edit"></i>
                </button>
                

<div class="modal fade" id="modal_edit_<?=$data['user_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
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
             <input type='hidden' name='user_id' value="<?php echo $data['user_id'];?>">
          
               
                <div class="form-group">
                  <label for="user_nama"> user_nama:</label>
                  <input type="text" class="form-control" id="user_nama" name='user_nama' value="<?php echo $data['user_nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="user_username"> user_username:</label>
                  <input type="text" class="form-control" id="user_username" name='user_username' value="<?php echo $data['user_username']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="user_password"> user_password:</label>
                  <input type="text" class="form-control" id="user_password" name='user_password' value="<?php echo $data['user_password']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="user_foto"> user_foto:</label>
                  <input type="text" class="form-control" id="user_foto" name='user_foto' value="<?php echo $data['user_foto']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="user_level"> user_level:</label>
                  <input type="text" class="form-control" id="user_level" name='user_level' value="<?php echo $data['user_level']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="setting"> setting:</label>
                  <input type="text" class="form-control" id="setting" name='setting' value="<?php echo $data['setting']; ?>">
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

