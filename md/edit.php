
<?php
$one = GetOne($data['m_id']);
?>
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
          <?php
            foreach($one as $data){?>
               
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
            
            <?php } ?>
            
</div>
 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type='submit' class="btn btn-primary" name='update' value="Save changes">
        </form>
      </div>
    </div>
  </div>
</div>
