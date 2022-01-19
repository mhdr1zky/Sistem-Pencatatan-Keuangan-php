
<?php
$one = GetOne($data['sub_id']);
?>
<div class="modal fade" id="modal_edit_<?=$data['sub_id']?>" tabindex="-1" role="dialog" aria-labelledby="modal_createLabel" aria-hidden="true">
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
             <input type='hidden' name='sub_id' value="<?php echo $data['sub_id'];?>">
          <?php
            foreach($one as $data){?>
               
                <div class="form-group">
                  <label for="sub_pagu"> sub_pagu:</label>
                  <input type="text" class="form-control" id="sub_pagu" name='sub_pagu' value="<?php echo $data['sub_pagu']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="sub_nodpa"> sub_nodpa:</label>
                  <input type="text" class="form-control" id="sub_nodpa" name='sub_nodpa' value="<?php echo $data['sub_nodpa']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="sub_nama"> sub_nama:</label>
                  <input type="text" class="form-control" id="sub_nama" name='sub_nama' value="<?php echo $data['sub_nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="sub_jenis"> sub_jenis:</label>
                  <input type="text" class="form-control" id="sub_jenis" name='sub_jenis' value="<?php echo $data['sub_jenis']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="id_keg"> id_keg:</label>
                  <input type="text" class="form-control" id="id_keg" name='id_keg' value="<?php echo $data['id_keg']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="alias"> alias:</label>
                  <input type="text" class="form-control" id="alias" name='alias' value="<?php echo $data['alias']; ?>">
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
