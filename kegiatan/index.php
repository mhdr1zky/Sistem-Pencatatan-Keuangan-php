
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

<?php  
// there for call modal form create data
require_once 'create.php';?>
  
     <table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
      <th>No</th>
    <th>nm_keg</th> 
<th>pagu_awal</th> 
<th>pagu_sub</th> 
<th>nokeg</th> 
<th>pptk</th> 

      <th>Opsi</th>
      </tr>
      </thead>
      <tbody> 
  <?php 
$no=1;
 $query= mysqli_query(Connect(),"SELECT DISTINCT subkeg.id_keg,kegiatan.id,kegiatan.nm_keg,kegiatan.nokeg,kegiatan.pagu_awal, + (SELECT sum(sub_pagu) FROM subkeg WHERE subkeg.id_keg=kegiatan.id) as jumlah FROM subkeg RIGHT JOIN kegiatan ON kegiatan.id=subkeg.id_keg");
 
         foreach($query as $data) {?>
       <tr>
       <td><?=$no++?></td>
<td><form method="POST" action="../subkeg/"><input type="hidden" name="id" value="<?=$data['id'];?>"><?=$data['nokeg']?><button class='btn btn-warning btn-xs' type='submit' name='edit' value='edit'></form><?=$data['nm_keg']?></td>
<td><?=$data['pagu_awal']?></td>
<td><?php
$cek= ($data['pagu_awal'] == $data['jumlah'] ? "<div class='bg-success color-palette'>" : "<div class='bg-warning color-palette'>");
echo $cek;
echo number_format($data['jumlah'], 0, ',', '.');
echo "</div>";
?>
</td>
<td><?=$data['nokeg']?></td>
<td><?=$data['pptk']?></td>

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
                  <label for="nm_keg"> nm_keg:</label>
                  <input type="text" class="form-control" id="nm_keg" name='nm_keg' value="<?php echo $data['nm_keg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pagu_awal"> pagu_awal:</label>
                  <input type="text" class="form-control" id="pagu_awal" name='pagu_awal' value="<?php echo $data['pagu_awal']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="nokeg"> nokeg:</label>
                  <input type="text" class="form-control" id="nokeg" name='nokeg' value="<?php echo $data['nokeg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pptk"> pptk:</label>
                  <input type="text" class="form-control" id="pptk" name='pptk' value="<?php echo $data['pptk']; ?>">
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

