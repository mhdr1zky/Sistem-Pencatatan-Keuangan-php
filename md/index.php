
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
            <h1>Md</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=''>Home</a></li>
              <li class="breadcrumb-item active">Md</li>
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
          <h3 class="card-title">Md</h3>
        </div>

        <div class="card-body">

<?php  
// there for call modal form create data
require_once 'create.php';?>
  
     <table id="example1" class="table table-bordered table-striped table-hover">
    <thead>
      <tr>
      <th>No</th>
    <th>m_nopol</th> 
<th>m_merktype</th> 
<th>m_jenismodel</th> 
<th>m_pemegang</th> 
<th>stnk</th> 
<th>keterangan</th> 
<th>type_bbm</th> 
<th>updated_at</th> 
      <th>Opsi</th>
      </tr>
      </thead>
      <tbody> 
    <?php
      $ga = GetAll();
      $query= mysqli_query(Connect(),"SELECT * FROM md m INNER JOIN pegawai p ON m.m_id=p.id");
      $no = 1;
      foreach($query as $data){?>
       <tr>
       <td><?=$no++?></td>
<td><?=$data['m_nopol']?></td>
<td><?=$data['m_merktype']?></td>
<td><?=$data['m_jenismodel']?></td> 
<td><a href="https://api.whatsapp.com/send?phone=<?=hp($data['no_wa'])?>&text=Halo%20Admin"><?=$data['nama']?></td>
<td>  <center>

                          <?php if($data['stnk'] == ""){ ?>
                           <p>Lengkapi</p>
                          <?php }else{ ?>
                            <img src="stnk/<?php echo $data['stnk']; ?>" class="img-responsive" id="my_image" style="width: 80px;height: auto;" onclick="window.open(this.src)">
                          <?php } ?>

                        </center>
                      </td>
<td><?=$data['keterangan']?></td>
<td><?=$data['type_bbm']?></td>
<td><?=$data['last_up']?></td>

               <td>
                <form method='POST' action='func.php'>
                <input type='hidden' name='m_id' value='<?=$data['m_id']?>'>
              <span><button type='button' class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal_edit_<?=$data['m_id']?>"><i class="fa fa-edit"></i>
                </button>
                

<div class="modal fade" id="modal_edit_<?=$data['m_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
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
             <input type='hidden' name='m_id' value="<?php echo $data['m_id'];?>">
          
               
                <div class="form-group">
                  <label for="m_nopol"> m_nopol:</label>
                  <input type="text" class="form-control" id="m_nopol" name='m_nopol' value="<?php echo $data['m_nopol']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="m_merktype"> m_merktype:</label>
                  <input type="text" class="form-control" id="m_merktype" name='m_merktype' value="<?php echo $data['m_merktype']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="m_cc"> m_cc:</label>
                  <input type="text" class="form-control" id="m_cc" name='m_cc' value="<?php echo $data['m_cc']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="m_tahun"> m_tahun:</label>
                  <input type="text" class="form-control" id="m_tahun" name='m_tahun' value="<?php echo $data['m_tahun']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="m_jenismodel"> m_jenismodel:</label>
                  <input type="text" class="form-control" id="m_jenismodel" name='m_jenismodel' value="<?php echo $data['m_jenismodel']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="m_pemegang"> m_pemegang:</label>
                  <input type="text" class="form-control" id="m_pemegang" name='m_pemegang' value="<?php echo $data['m_pemegang']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="stnk"> stnk:</label>
                     <center>
                          <?php if($data['stnk'] == ""){ ?>
                            <img src="#" style="width: 80px;height: auto">
                          <?php }else{ ?>
                            <img src="stnk/<?php echo $data['stnk']; ?>" class="img-responsive" id="my_image" style="width: 80px;height: auto" >
                          <?php } ?>
                        </center>
                          <input type="text" class="form-control" id="stnk" name='stnk' value="<?php echo $data['stnk']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="keterangan"> keterangan:</label>
                  <input type="text" class="form-control" id="keterangan" name='keterangan' value="<?php echo $data['keterangan']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="type_bbm"> type_bbm:</label>
                  <input type="text" class="form-control" id="type_bbm" name='type_bbm' value="<?php echo $data['type_bbm']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="last_up"> last_up:</label>
                  <input type="text" class="form-control" id="last_up" name='last_up' value="<?php echo $data['last_up']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pemegang_sk"> pemegang_sk:</label>
                  <input type="text" class="form-control" id="pemegang_sk" name='pemegang_sk' value="<?php echo $data['pemegang_sk']; ?>">
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

